<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216015421 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, adresse VARCHAR(255) NOT NULL, date_liv DATE NOT NULL, status VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_A60C9F1F82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, commande_id INT NOT NULL, date_paiement DATE NOT NULL, methode_paiement VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B1DC7A1E82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE commande ADD user_id_commande_id INT DEFAULT NULL, DROP id_commande');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DF17D3CFA FOREIGN KEY (user_id_commande_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67DF17D3CFA ON commande (user_id_commande_id)');
        $this->addSql('ALTER TABLE materiellocation ADD user_id_materiellocation_id INT DEFAULT NULL, ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE materiellocation ADD CONSTRAINT FK_92A71363F41A03BF FOREIGN KEY (user_id_materiellocation_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_92A71363F41A03BF ON materiellocation (user_id_materiellocation_id)');
        $this->addSql('ALTER TABLE materielvente ADD commande_id INT DEFAULT NULL, ADD user_id_materielvente_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materielvente ADD CONSTRAINT FK_7588137182EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE materielvente ADD CONSTRAINT FK_7588137178B7B701 FOREIGN KEY (user_id_materielvente_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7588137182EA2E54 ON materielvente (commande_id)');
        $this->addSql('CREATE INDEX IDX_7588137178B7B701 ON materielvente (user_id_materielvente_id)');
        $this->addSql('ALTER TABLE parcelle_proprietes ADD user_id_parcelle_id INT DEFAULT NULL, ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE parcelle_proprietes ADD CONSTRAINT FK_83C008C237A4FFC8 FOREIGN KEY (user_id_parcelle_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_83C008C237A4FFC8 ON parcelle_proprietes (user_id_parcelle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DF17D3CFA');
        $this->addSql('ALTER TABLE materiellocation DROP FOREIGN KEY FK_92A71363F41A03BF');
        $this->addSql('ALTER TABLE materielvente DROP FOREIGN KEY FK_7588137178B7B701');
        $this->addSql('ALTER TABLE parcelle_proprietes DROP FOREIGN KEY FK_83C008C237A4FFC8');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prenom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, mdp VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, tele INT NOT NULL, role VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F82EA2E54');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E82EA2E54');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_6EEAA67DF17D3CFA ON commande');
        $this->addSql('ALTER TABLE commande ADD id_commande INT NOT NULL, DROP user_id_commande_id');
        $this->addSql('DROP INDEX IDX_92A71363F41A03BF ON materiellocation');
        $this->addSql('ALTER TABLE materiellocation DROP user_id_materiellocation_id, DROP image');
        $this->addSql('ALTER TABLE materielvente DROP FOREIGN KEY FK_7588137182EA2E54');
        $this->addSql('DROP INDEX IDX_7588137182EA2E54 ON materielvente');
        $this->addSql('DROP INDEX IDX_7588137178B7B701 ON materielvente');
        $this->addSql('ALTER TABLE materielvente DROP commande_id, DROP user_id_materielvente_id');
        $this->addSql('DROP INDEX IDX_83C008C237A4FFC8 ON parcelle_proprietes');
        $this->addSql('ALTER TABLE parcelle_proprietes DROP user_id_parcelle_id, DROP image');
    }
}
