<?php
/// src/Security/FaceLoginFormAuthenticator.php
namespace App\Security;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response; // Add this import
use Symfony\Component\HttpFoundation\RedirectResponse; // Add this import
use Symfony\Component\Routing\Generator\UrlGeneratorInterface; // Add this import
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use App\Entity\User;
use App\Repository\UserRepository;


class FaceLoginFormAuthenticator extends AbstractAuthenticator implements AuthenticationEntryPointInterface
{
    use TargetPathTrait;

    private $httpClient;
    private $faceppApiKey;
    private $faceppApiSecret;
    private $entityManager;
    private $capturedImagesDirectory;
    private $urlGenerator;

    public function __construct(
        HttpClientInterface $httpClient,
        EntityManagerInterface $entityManager,
        ParameterBagInterface $params,
        UrlGeneratorInterface $urlGenerator // Inject UrlGeneratorInterface

    ) {
        $this->httpClient = $httpClient;
        $this->entityManager = $entityManager;
        $this->faceppApiKey = 'r4zeyVpJYyZgY8FZpBUPzomn_177H5Wm'; // Replace with your Face++ API key
        $this->faceppApiSecret = 'aJxBvnCf820QWd9Hsppjmy-eI-Laq9uz'; // Replace with your Face++ API secret
        $this->capturedImagesDirectory = $params->get('captured_images_directory');
        $this->urlGenerator = $urlGenerator;
    }

    public function supports(Request $request): ?bool
{
    // Only handle requests to the face_login route with a POST method
    return $request->attributes->get('_route') === 'face_login' && $request->isMethod('POST');
}

   // src/Security/FaceLoginFormAuthenticator.php
   public function authenticate(Request $request): Passport
   {
       $imagePath = $request->request->get('image');

       if (empty($imagePath)) {
           error_log('No image path received.');
           throw new CustomUserMessageAuthenticationException('No image path received.');
       }

       $imageFullPath = $this->capturedImagesDirectory . '/' . $imagePath;

       if (!file_exists($imageFullPath)) {
           error_log('Captured image not found: ' . $imageFullPath);
           throw new CustomUserMessageAuthenticationException('Captured image not found.');
       }

       try {
           // Step 1: Detect the face in the captured image
           error_log('Sending detect request to Face++ API...');

           $detectResponse = $this->httpClient->request('POST', 'https://api-us.faceplusplus.com/facepp/v3/detect', [
               'headers' => [
                   'Content-Type' => 'multipart/form-data',
               ],
               'body' => [
                   'api_key' => $this->faceppApiKey,
                   'api_secret' => $this->faceppApiSecret,
                   'image_file' => fopen($imageFullPath, 'r'),
               ],
           ]);

           $detectResult = $detectResponse->toArray();
           error_log('Face++ API detect response: ' . json_encode($detectResult));

           if (empty($detectResult['faces'])) {
               error_log('No face detected in the image.');
               throw new CustomUserMessageAuthenticationException('No face detected in the image.');
           }

           $capturedFaceToken = $detectResult['faces'][0]['face_token'];
           error_log('Captured face token: ' . $capturedFaceToken);

           // Step 2: Compare with stored face tokens
           $users = $this->entityManager->getRepository(User::class)->findAll();


           foreach ($users as $user) {
            
               $storedFaceToken = $user->getFaceToken();

               if (!$storedFaceToken) {
                   error_log('Skipping user without face token: ' . $user->getEmail());
                   continue;
               }

               // Step 3: Call the Face++ API to compare the faces
               error_log('Sending compare request to Face++ API...');
               error_log('Face Token 1: ' . $capturedFaceToken);
               error_log('Face Token 2: ' . $storedFaceToken);

               $compareResponse = $this->httpClient->request('POST', 'https://api-us.faceplusplus.com/facepp/v3/compare', [
                   'headers' => [
                       'Content-Type' => 'application/x-www-form-urlencoded',
                   ],
                   'body' => http_build_query([
                       'api_key' => $this->faceppApiKey,
                       'api_secret' => $this->faceppApiSecret,
                       'face_token1' => $capturedFaceToken,
                       'face_token2' => $storedFaceToken,
                   ]),
               ]);

               $compareResult = json_decode($compareResponse->getContent(), true);

               if (!isset($compareResult['confidence'])) {
                   error_log('Invalid Face++ compare response: ' . json_encode($compareResult));
                   continue; // Skip this user if API response is invalid
               }

               error_log('Face++ API compare response: ' . json_encode($compareResult));

               if ($compareResult['confidence'] > 80) { // Adjust the threshold as needed
                   error_log('Authenticated user: ' . $user->getEmail());

                   // Delete the captured image after successful authentication
                   unlink($imageFullPath);

                   return new SelfValidatingPassport(new UserBadge($user->getEmail()));
               }
           }

           error_log('No matching user found.');
           throw new CustomUserMessageAuthenticationException('No matching user found.');

       } catch (\Exception $e) {
           error_log('Error processing image: ' . $e->getMessage());
           throw new CustomUserMessageAuthenticationException('Failed to process the image. Please try again.');
       }
   }


public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
{
    // Redirect to the home page or another route after successful authentication
    if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
        return new RedirectResponse($targetPath);
    }

    return new RedirectResponse($this->urlGenerator->generate('app_page')); // Redirect to the home page
}

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        // Add a flash message and redirect back to the face login page
        $request->getSession()->getFlashBag()->add('error', $exception->getMessage());
        dump('helllo');
        return new RedirectResponse($this->urlGenerator->generate('face_login')); // Use UrlGeneratorInterface
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        // Redirect to the face login page if authentication is required
        return new RedirectResponse($this->urlGenerator->generate('face_login')); // Use UrlGeneratorInterface
    }
}