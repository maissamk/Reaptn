<?php

namespace App\Tests\Controller;

use App\Entity\Materielvente;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class MaterielventeControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $materielventeRepository;
    private string $path = '/materielvente/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->materielventeRepository = $this->manager->getRepository(Materielvente::class);

        foreach ($this->materielventeRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Materielvente index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'materielvente[name]' => 'Testing',
            'materielvente[prix]' => 'Testing',
            'materielvente[description]' => 'Testing',
            'materielvente[disponibilite]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->materielventeRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materielvente();
        $fixture->setName('My Title');
        $fixture->setPrix('My Title');
        $fixture->setDescription('My Title');
        $fixture->setDisponibilite('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Materielvente');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materielvente();
        $fixture->setName('Value');
        $fixture->setPrix('Value');
        $fixture->setDescription('Value');
        $fixture->setDisponibilite('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'materielvente[name]' => 'Something New',
            'materielvente[prix]' => 'Something New',
            'materielvente[description]' => 'Something New',
            'materielvente[disponibilite]' => 'Something New',
        ]);

        self::assertResponseRedirects('/materielvente/');

        $fixture = $this->materielventeRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getName());
        self::assertSame('Something New', $fixture[0]->getPrix());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getDisponibilite());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materielvente();
        $fixture->setName('Value');
        $fixture->setPrix('Value');
        $fixture->setDescription('Value');
        $fixture->setDisponibilite('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/materielvente/');
        self::assertSame(0, $this->materielventeRepository->count([]));
    }
}
