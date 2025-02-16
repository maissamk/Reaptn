<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216010842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE materiellocation ADD user_id_materiellocation_id INT DEFAULT NULL, ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE materiellocation ADD CONSTRAINT FK_92A71363F41A03BF FOREIGN KEY (user_id_materiellocation_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_92A71363F41A03BF ON materiellocation (user_id_materiellocation_id)');
        $this->addSql('ALTER TABLE materielvente ADD user_id_materielvente_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materielvente ADD CONSTRAINT FK_7588137178B7B701 FOREIGN KEY (user_id_materielvente_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7588137178B7B701 ON materielvente (user_id_materielvente_id)');
        $this->addSql('ALTER TABLE parcelle_proprietes ADD user_id_parcelle_id INT DEFAULT NULL, ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE parcelle_proprietes ADD CONSTRAINT FK_83C008C237A4FFC8 FOREIGN KEY (user_id_parcelle_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_83C008C237A4FFC8 ON parcelle_proprietes (user_id_parcelle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiellocation DROP FOREIGN KEY FK_92A71363F41A03BF');
        $this->addSql('ALTER TABLE materielvente DROP FOREIGN KEY FK_7588137178B7B701');
        $this->addSql('ALTER TABLE parcelle_proprietes DROP FOREIGN KEY FK_83C008C237A4FFC8');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_92A71363F41A03BF ON materiellocation');
        $this->addSql('ALTER TABLE materiellocation DROP user_id_materiellocation_id, DROP image');
        $this->addSql('DROP INDEX IDX_7588137178B7B701 ON materielvente');
        $this->addSql('ALTER TABLE materielvente DROP user_id_materielvente_id');
        $this->addSql('DROP INDEX IDX_83C008C237A4FFC8 ON parcelle_proprietes');
        $this->addSql('ALTER TABLE parcelle_proprietes DROP user_id_parcelle_id, DROP image');
    }
}
