<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250211001147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_commande INT NOT NULL, date_commande DATETIME NOT NULL, totale DOUBLE PRECISION NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, parcelle_id INT DEFAULT NULL, date_debut_contrat DATETIME NOT NULL, datefin_contrat DATETIME NOT NULL, nom_acheteur VARCHAR(255) NOT NULL, nom_vendeur VARCHAR(255) NOT NULL, information_contrat VARCHAR(255) NOT NULL, datecreation_contrat DATETIME NOT NULL, INDEX IDX_603499934433ED66 (parcelle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe (id INT AUTO_INCREMENT NOT NULL, idoffre INT NOT NULL, comp VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre (id INT AUTO_INCREMENT NOT NULL, ida INT NOT NULL, ide INT DEFAULT NULL, statut TINYINT(1) DEFAULT 0 NOT NULL, descr VARCHAR(255) DEFAULT NULL, titre VARCHAR(100) NOT NULL, comp VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parcelle_proprietes (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, prix NUMERIC(10, 0) NOT NULL, status VARCHAR(255) NOT NULL, emplacement VARCHAR(255) NOT NULL, taille DOUBLE PRECISION NOT NULL, date_creation_annonce DATETIME NOT NULL, date_misajour_annonce DATETIME NOT NULL, est_disponible TINYINT(1) NOT NULL, nom_proprietaire VARCHAR(255) NOT NULL, contact_proprietaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, mdp VARCHAR(50) NOT NULL, tele INT NOT NULL, role VARCHAR(30) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_603499934433ED66 FOREIGN KEY (parcelle_id) REFERENCES parcelle_proprietes (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_603499934433ED66');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE parcelle_proprietes');
        $this->addSql('DROP TABLE utilisateur');
    }
}
