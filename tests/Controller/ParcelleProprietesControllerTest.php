<?php

namespace App\Tests\Controller;

use App\Entity\ParcelleProprietes;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ParcelleProprietesControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $parcelleProprieteRepository;
    private string $path = '/parcelle/proprietes/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->parcelleProprieteRepository = $this->manager->getRepository(ParcelleProprietes::class);

        foreach ($this->parcelleProprieteRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('ParcellePropriete index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'parcelle_propriete[titre]' => 'Testing',
            'parcelle_propriete[description]' => 'Testing',
            'parcelle_propriete[prix]' => 'Testing',
            'parcelle_propriete[status]' => 'Testing',
            'parcelle_propriete[emplacement]' => 'Testing',
            'parcelle_propriete[taille]' => 'Testing',
            'parcelle_propriete[date_creation_annonce]' => 'Testing',
            'parcelle_propriete[date_misajour_annonce]' => 'Testing',
            'parcelle_propriete[est_disponible]' => 'Testing',
            'parcelle_propriete[nom_proprietaire]' => 'Testing',
            'parcelle_propriete[contact_proprietaire]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->parcelleProprieteRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new ParcelleProprietes();
        $fixture->setTitre('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPrix('My Title');
        $fixture->setStatus('My Title');
        $fixture->setEmplacement('My Title');
        $fixture->setTaille('My Title');
        $fixture->setDate_creation_annonce('My Title');
        $fixture->setDate_misajour_annonce('My Title');
        $fixture->setEst_disponible('My Title');
        $fixture->setNom_proprietaire('My Title');
        $fixture->setContact_proprietaire('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('ParcellePropriete');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new ParcelleProprietes();
        $fixture->setTitre('Value');
        $fixture->setDescription('Value');
        $fixture->setPrix('Value');
        $fixture->setStatus('Value');
        $fixture->setEmplacement('Value');
        $fixture->setTaille('Value');
        $fixture->setDate_creation_annonce('Value');
        $fixture->setDate_misajour_annonce('Value');
        $fixture->setEst_disponible('Value');
        $fixture->setNom_proprietaire('Value');
        $fixture->setContact_proprietaire('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'parcelle_propriete[titre]' => 'Something New',
            'parcelle_propriete[description]' => 'Something New',
            'parcelle_propriete[prix]' => 'Something New',
            'parcelle_propriete[status]' => 'Something New',
            'parcelle_propriete[emplacement]' => 'Something New',
            'parcelle_propriete[taille]' => 'Something New',
            'parcelle_propriete[date_creation_annonce]' => 'Something New',
            'parcelle_propriete[date_misajour_annonce]' => 'Something New',
            'parcelle_propriete[est_disponible]' => 'Something New',
            'parcelle_propriete[nom_proprietaire]' => 'Something New',
            'parcelle_propriete[contact_proprietaire]' => 'Something New',
        ]);

        self::assertResponseRedirects('/parcelle/proprietes/');

        $fixture = $this->parcelleProprieteRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitre());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getPrix());
        self::assertSame('Something New', $fixture[0]->getStatus());
        self::assertSame('Something New', $fixture[0]->getEmplacement());
        self::assertSame('Something New', $fixture[0]->getTaille());
        self::assertSame('Something New', $fixture[0]->getDate_creation_annonce());
        self::assertSame('Something New', $fixture[0]->getDate_misajour_annonce());
        self::assertSame('Something New', $fixture[0]->getEst_disponible());
        self::assertSame('Something New', $fixture[0]->getNom_proprietaire());
        self::assertSame('Something New', $fixture[0]->getContact_proprietaire());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new ParcelleProprietes();
        $fixture->setTitre('Value');
        $fixture->setDescription('Value');
        $fixture->setPrix('Value');
        $fixture->setStatus('Value');
        $fixture->setEmplacement('Value');
        $fixture->setTaille('Value');
        $fixture->setDate_creation_annonce('Value');
        $fixture->setDate_misajour_annonce('Value');
        $fixture->setEst_disponible('Value');
        $fixture->setNom_proprietaire('Value');
        $fixture->setContact_proprietaire('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/parcelle/proprietes/');
        self::assertSame(0, $this->parcelleProprieteRepository->count([]));
    }
}
