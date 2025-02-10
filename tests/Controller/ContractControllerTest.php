<?php

namespace App\Tests\Controller;

use App\Entity\Contract;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ContractControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $contractRepository;
    private string $path = '/contract/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->contractRepository = $this->manager->getRepository(Contract::class);

        foreach ($this->contractRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Contract index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'contract[contract_type]' => 'Testing',
            'contract[start_date]' => 'Testing',
            'contract[end_date]' => 'Testing',
            'contract[buyer_name]' => 'Testing',
            'contract[seller_name]' => 'Testing',
            'contract[contract_details]' => 'Testing',
            'contract[created_at]' => 'Testing',
            'contract[land]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->contractRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Contract();
        $fixture->setContract_type('My Title');
        $fixture->setStart_date('My Title');
        $fixture->setEnd_date('My Title');
        $fixture->setBuyer_name('My Title');
        $fixture->setSeller_name('My Title');
        $fixture->setContract_details('My Title');
        $fixture->setCreated_at('My Title');
        $fixture->setLand('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Contract');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Contract();
        $fixture->setContract_type('Value');
        $fixture->setStart_date('Value');
        $fixture->setEnd_date('Value');
        $fixture->setBuyer_name('Value');
        $fixture->setSeller_name('Value');
        $fixture->setContract_details('Value');
        $fixture->setCreated_at('Value');
        $fixture->setLand('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'contract[contract_type]' => 'Something New',
            'contract[start_date]' => 'Something New',
            'contract[end_date]' => 'Something New',
            'contract[buyer_name]' => 'Something New',
            'contract[seller_name]' => 'Something New',
            'contract[contract_details]' => 'Something New',
            'contract[created_at]' => 'Something New',
            'contract[land]' => 'Something New',
        ]);

        self::assertResponseRedirects('/contract/');

        $fixture = $this->contractRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getContract_type());
        self::assertSame('Something New', $fixture[0]->getStart_date());
        self::assertSame('Something New', $fixture[0]->getEnd_date());
        self::assertSame('Something New', $fixture[0]->getBuyer_name());
        self::assertSame('Something New', $fixture[0]->getSeller_name());
        self::assertSame('Something New', $fixture[0]->getContract_details());
        self::assertSame('Something New', $fixture[0]->getCreated_at());
        self::assertSame('Something New', $fixture[0]->getLand());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Contract();
        $fixture->setContract_type('Value');
        $fixture->setStart_date('Value');
        $fixture->setEnd_date('Value');
        $fixture->setBuyer_name('Value');
        $fixture->setSeller_name('Value');
        $fixture->setContract_details('Value');
        $fixture->setCreated_at('Value');
        $fixture->setLand('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/contract/');
        self::assertSame(0, $this->contractRepository->count([]));
    }
}
