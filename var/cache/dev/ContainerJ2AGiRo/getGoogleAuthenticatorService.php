<?php

namespace ContainerJ2AGiRo;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGoogleAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\GoogleAuthenticator' shared autowired service.
     *
     * @return \App\Service\GoogleAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'GoogleAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'SluggerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'AsciiSlugger.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\GoogleAuthenticator'])) {
            return $container->privates['App\\Service\\GoogleAuthenticator'];
        }

        return $container->privates['App\\Service\\GoogleAuthenticator'] = new \App\Service\GoogleAuthenticator(($container->services['knpu.oauth2.client.google'] ?? $container->load('getKnpu_Oauth2_Client_GoogleService')), ($container->services['router'] ?? self::getRouterService($container)), $a, ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en')), ($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)));
    }
}
