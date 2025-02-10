<?php

namespace App\Tests\Controller;

use App\Entity\Materiellocation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class MateriellocationControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $materiellocationRepository;
    private string $path = '/materiellocation/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->materiellocationRepository = $this->manager->getRepository(Materiellocation::class);

        foreach ($this->materiellocationRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Materiellocation index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'materiellocation[nom]' => 'Testing',
            'materiellocation[prix]' => 'Testing',
            'materiellocation[description]' => 'Testing',
            'materiellocation[disponibilite]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->materiellocationRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materiellocation();
        $fixture->setNom('My Title');
        $fixture->setPrix('My Title');
        $fixture->setDescription('My Title');
        $fixture->setDisponibilite('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Materiellocation');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materiellocation();
        $fixture->setNom('Value');
        $fixture->setPrix('Value');
        $fixture->setDescription('Value');
        $fixture->setDisponibilite('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'materiellocation[nom]' => 'Something New',
            'materiellocation[prix]' => 'Something New',
            'materiellocation[description]' => 'Something New',
            'materiellocation[disponibilite]' => 'Something New',
        ]);

        self::assertResponseRedirects('/materiellocation/');

        $fixture = $this->materiellocationRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getPrix());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getDisponibilite());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materiellocation();
        $fixture->setNom('Value');
        $fixture->setPrix('Value');
        $fixture->setDescription('Value');
        $fixture->setDisponibilite('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/materiellocation/');
        self::assertSame(0, $this->materiellocationRepository->count([]));
    }
}
