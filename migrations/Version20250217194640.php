<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217194640 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, user_id_commande_id INT DEFAULT NULL, date_commande DATETIME NOT NULL, totale DOUBLE PRECISION NOT NULL, quantite INT NOT NULL, INDEX IDX_6EEAA67DF17D3CFA (user_id_commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, parcelle_id INT DEFAULT NULL, date_debut_contrat DATETIME NOT NULL, datefin_contrat DATETIME NOT NULL, nom_acheteur VARCHAR(255) NOT NULL, nom_vendeur VARCHAR(255) NOT NULL, information_contrat VARCHAR(255) NOT NULL, datecreation_contrat DATETIME NOT NULL, INDEX IDX_603499934433ED66 (parcelle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe (id INT AUTO_INCREMENT NOT NULL, offre_id INT NOT NULL, user_id_employe_id INT DEFAULT NULL, user_identifier INT NOT NULL, comp VARCHAR(100) DEFAULT NULL, INDEX IDX_F804D3B94CC8505A (offre_id), INDEX IDX_F804D3B94AB27F15 (user_id_employe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, adresse VARCHAR(255) NOT NULL, date_liv DATE NOT NULL, status VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_A60C9F1F82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiellocation (id INT AUTO_INCREMENT NOT NULL, user_id_materiellocation_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, disponibilite TINYINT(1) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_92A71363F41A03BF (user_id_materiellocation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materielvente (id INT AUTO_INCREMENT NOT NULL, commande_id INT DEFAULT NULL, user_id_materielvente_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, disponibilite TINYINT(1) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_7588137182EA2E54 (commande_id), INDEX IDX_7588137178B7B701 (user_id_materielvente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre (id INT AUTO_INCREMENT NOT NULL, ida INT NOT NULL, ide INT DEFAULT NULL, statut TINYINT(1) DEFAULT 0 NOT NULL, descr VARCHAR(255) DEFAULT NULL, titre VARCHAR(100) NOT NULL, comp VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, date_paiement DATE NOT NULL, methode_paiement VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B1DC7A1E82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parcelle_proprietes (id INT AUTO_INCREMENT NOT NULL, user_id_parcelle_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, prix NUMERIC(10, 0) NOT NULL, status VARCHAR(255) NOT NULL, emplacement VARCHAR(255) NOT NULL, taille DOUBLE PRECISION NOT NULL, date_creation_annonce DATETIME NOT NULL, date_misajour_annonce DATETIME NOT NULL, est_disponible TINYINT(1) NOT NULL, nom_proprietaire VARCHAR(255) NOT NULL, contact_proprietaire VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_83C008C237A4FFC8 (user_id_parcelle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DF17D3CFA FOREIGN KEY (user_id_commande_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_603499934433ED66 FOREIGN KEY (parcelle_id) REFERENCES parcelle_proprietes (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B94CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B94AB27F15 FOREIGN KEY (user_id_employe_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE materiellocation ADD CONSTRAINT FK_92A71363F41A03BF FOREIGN KEY (user_id_materiellocation_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE materielvente ADD CONSTRAINT FK_7588137182EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE materielvente ADD CONSTRAINT FK_7588137178B7B701 FOREIGN KEY (user_id_materielvente_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE parcelle_proprietes ADD CONSTRAINT FK_83C008C237A4FFC8 FOREIGN KEY (user_id_parcelle_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE stock CHANGE exit_date exit_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DF17D3CFA');
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_603499934433ED66');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B94CC8505A');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B94AB27F15');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F82EA2E54');
        $this->addSql('ALTER TABLE materiellocation DROP FOREIGN KEY FK_92A71363F41A03BF');
        $this->addSql('ALTER TABLE materielvente DROP FOREIGN KEY FK_7588137182EA2E54');
        $this->addSql('ALTER TABLE materielvente DROP FOREIGN KEY FK_7588137178B7B701');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E82EA2E54');
        $this->addSql('ALTER TABLE parcelle_proprietes DROP FOREIGN KEY FK_83C008C237A4FFC8');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE materiellocation');
        $this->addSql('DROP TABLE materielvente');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE parcelle_proprietes');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE product CHANGE image image VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE stock CHANGE exit_date exit_date DATETIME DEFAULT \'NULL\'');
    }
}
