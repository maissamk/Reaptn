<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210205633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, mdp VARCHAR(50) NOT NULL, tele INT NOT NULL, role VARCHAR(30) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrat DROP type_contrat');
        $this->addSql('ALTER TABLE materiellocation ADD description VARCHAR(255) NOT NULL, DROP marque, DROP image');
        $this->addSql('ALTER TABLE materielvente CHANGE marque description VARCHAR(255) NOT NULL, CHANGE disponibilte disponibilite TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE contrat ADD type_contrat VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE materiellocation ADD image VARCHAR(255) NOT NULL, CHANGE description marque VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE materielvente CHANGE disponibilite disponibilte TINYINT(1) NOT NULL, CHANGE description marque VARCHAR(255) NOT NULL');
    }
}
