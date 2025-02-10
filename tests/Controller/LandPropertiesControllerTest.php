<?php

namespace App\Tests\Controller;

use App\Entity\LandProperties;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class LandPropertiesControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $landPropertyRepository;
    private string $path = '/land/properties/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->landPropertyRepository = $this->manager->getRepository(LandProperties::class);

        foreach ($this->landPropertyRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('LandProperty index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'land_property[title]' => 'Testing',
            'land_property[description]' => 'Testing',
            'land_property[price]' => 'Testing',
            'land_property[location]' => 'Testing',
            'land_property[area]' => 'Testing',
            'land_property[is_available]' => 'Testing',
            'land_property[property_type]' => 'Testing',
            'land_property[created_at]' => 'Testing',
            'land_property[updated_at]' => 'Testing',
            'land_property[owner_name]' => 'Testing',
            'land_property[owner_contact]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->landPropertyRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new LandProperties();
        $fixture->setTitle('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPrice('My Title');
        $fixture->setLocation('My Title');
        $fixture->setArea('My Title');
        $fixture->setIs_available('My Title');
        $fixture->setProperty_type('My Title');
        $fixture->setCreated_at('My Title');
        $fixture->setUpdated_at('My Title');
        $fixture->setOwner_name('My Title');
        $fixture->setOwner_contact('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('LandProperty');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new LandProperties();
        $fixture->setTitle('Value');
        $fixture->setDescription('Value');
        $fixture->setPrice('Value');
        $fixture->setLocation('Value');
        $fixture->setArea('Value');
        $fixture->setIs_available('Value');
        $fixture->setProperty_type('Value');
        $fixture->setCreated_at('Value');
        $fixture->setUpdated_at('Value');
        $fixture->setOwner_name('Value');
        $fixture->setOwner_contact('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'land_property[title]' => 'Something New',
            'land_property[description]' => 'Something New',
            'land_property[price]' => 'Something New',
            'land_property[location]' => 'Something New',
            'land_property[area]' => 'Something New',
            'land_property[is_available]' => 'Something New',
            'land_property[property_type]' => 'Something New',
            'land_property[created_at]' => 'Something New',
            'land_property[updated_at]' => 'Something New',
            'land_property[owner_name]' => 'Something New',
            'land_property[owner_contact]' => 'Something New',
        ]);

        self::assertResponseRedirects('/land/properties/');

        $fixture = $this->landPropertyRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitle());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getPrice());
        self::assertSame('Something New', $fixture[0]->getLocation());
        self::assertSame('Something New', $fixture[0]->getArea());
        self::assertSame('Something New', $fixture[0]->getIs_available());
        self::assertSame('Something New', $fixture[0]->getProperty_type());
        self::assertSame('Something New', $fixture[0]->getCreated_at());
        self::assertSame('Something New', $fixture[0]->getUpdated_at());
        self::assertSame('Something New', $fixture[0]->getOwner_name());
        self::assertSame('Something New', $fixture[0]->getOwner_contact());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new LandProperties();
        $fixture->setTitle('Value');
        $fixture->setDescription('Value');
        $fixture->setPrice('Value');
        $fixture->setLocation('Value');
        $fixture->setArea('Value');
        $fixture->setIs_available('Value');
        $fixture->setProperty_type('Value');
        $fixture->setCreated_at('Value');
        $fixture->setUpdated_at('Value');
        $fixture->setOwner_name('Value');
        $fixture->setOwner_contact('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/land/properties/');
        self::assertSame(0, $this->landPropertyRepository->count([]));
    }
}
