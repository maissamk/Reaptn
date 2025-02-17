<?php

namespace App\Tests\Controller;

use App\Entity\Contrat;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ContratControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $contratRepository;
    private string $path = '/contrat/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->contratRepository = $this->manager->getRepository(Contrat::class);

        foreach ($this->contratRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Contrat index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'contrat[dateDebut_contrat]' => 'Testing',
            'contrat[datefin_contrat]' => 'Testing',
            'contrat[nom_Acheteur]' => 'Testing',
            'contrat[nom_Vendeur]' => 'Testing',
            'contrat[information_Contrat]' => 'Testing',
            'contrat[datecreation_contrat]' => 'Testing',
            'contrat[parcelle]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->contratRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Contrat();
        $fixture->setDateDebut_contrat('My Title');
        $fixture->setDatefin_contrat('My Title');
        $fixture->setNom_Acheteur('My Title');
        $fixture->setNom_Vendeur('My Title');
        $fixture->setInformation_Contrat('My Title');
        $fixture->setDatecreation_contrat('My Title');
        $fixture->setParcelle('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Contrat');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Contrat();
        $fixture->setDateDebut_contrat('Value');
        $fixture->setDatefin_contrat('Value');
        $fixture->setNom_Acheteur('Value');
        $fixture->setNom_Vendeur('Value');
        $fixture->setInformation_Contrat('Value');
        $fixture->setDatecreation_contrat('Value');
        $fixture->setParcelle('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'contrat[dateDebut_contrat]' => 'Something New',
            'contrat[datefin_contrat]' => 'Something New',
            'contrat[nom_Acheteur]' => 'Something New',
            'contrat[nom_Vendeur]' => 'Something New',
            'contrat[information_Contrat]' => 'Something New',
            'contrat[datecreation_contrat]' => 'Something New',
            'contrat[parcelle]' => 'Something New',
        ]);

        self::assertResponseRedirects('/contrat/');

        $fixture = $this->contratRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getDateDebut_contrat());
        self::assertSame('Something New', $fixture[0]->getDatefin_contrat());
        self::assertSame('Something New', $fixture[0]->getNom_Acheteur());
        self::assertSame('Something New', $fixture[0]->getNom_Vendeur());
        self::assertSame('Something New', $fixture[0]->getInformation_Contrat());
        self::assertSame('Something New', $fixture[0]->getDatecreation_contrat());
        self::assertSame('Something New', $fixture[0]->getParcelle());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Contrat();
        $fixture->setDateDebut_contrat('Value');
        $fixture->setDatefin_contrat('Value');
        $fixture->setNom_Acheteur('Value');
        $fixture->setNom_Vendeur('Value');
        $fixture->setInformation_Contrat('Value');
        $fixture->setDatecreation_contrat('Value');
        $fixture->setParcelle('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/contrat/');
        self::assertSame(0, $this->contratRepository->count([]));
    }
}
