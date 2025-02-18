<?php

namespace App\Tests\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class UtilisateurControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $utilisateurRepository;
    private string $path = '/utilisateur/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->utilisateurRepository = $this->manager->getRepository(Utilisateur::class);

        foreach ($this->utilisateurRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Utilisateur index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'utilisateur[nom]' => 'Testing',
            'utilisateur[prenom]' => 'Testing',
            'utilisateur[email]' => 'Testing',
            'utilisateur[mdp]' => 'Testing',
            'utilisateur[tele]' => 'Testing',
            'utilisateur[role]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->utilisateurRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Utilisateur();
        $fixture->setNom('My Title');
        $fixture->setPrenom('My Title');
        $fixture->setEmail('My Title');
        $fixture->setMdp('My Title');
        $fixture->setTele('My Title');
        $fixture->setRole('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Utilisateur');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Utilisateur();
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setEmail('Value');
        $fixture->setMdp('Value');
        $fixture->setTele('Value');
        $fixture->setRole('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'utilisateur[nom]' => 'Something New',
            'utilisateur[prenom]' => 'Something New',
            'utilisateur[email]' => 'Something New',
            'utilisateur[mdp]' => 'Something New',
            'utilisateur[tele]' => 'Something New',
            'utilisateur[role]' => 'Something New',
        ]);

        self::assertResponseRedirects('/utilisateur/');

        $fixture = $this->utilisateurRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrenom());
        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getMdp());
        self::assertSame('Something New', $fixture[0]->getTele());
        self::assertSame('Something New', $fixture[0]->getRole());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Utilisateur();
        $fixture->setNom('Value');
        $fixture->setPrenom('Value');
        $fixture->setEmail('Value');
        $fixture->setMdp('Value');
        $fixture->setTele('Value');
        $fixture->setRole('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/utilisateur/');
        self::assertSame(0, $this->utilisateurRepository->count([]));
    }
}
