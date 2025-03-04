<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250304042246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materielvente ADD categorie_id INT DEFAULT NULL, ADD slug VARCHAR(255) NOT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE materielvente ADD CONSTRAINT FK_75881371BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_75881371989D9B62 ON materielvente (slug)');
        $this->addSql('CREATE INDEX IDX_75881371BCF5E72D ON materielvente (categorie_id)');
        $this->addSql('ALTER TABLE parcelle_proprietes ADD type_terrain VARCHAR(255) NOT NULL, ADD latitude VARCHAR(255) DEFAULT NULL, ADD longitude VARCHAR(255) DEFAULT NULL, ADD email VARCHAR(255) NOT NULL, CHANGE description description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materielvente DROP FOREIGN KEY FK_75881371BCF5E72D');
        $this->addSql('DROP INDEX UNIQ_75881371989D9B62 ON materielvente');
        $this->addSql('DROP INDEX IDX_75881371BCF5E72D ON materielvente');
        $this->addSql('ALTER TABLE materielvente DROP categorie_id, DROP slug, DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE parcelle_proprietes DROP type_terrain, DROP latitude, DROP longitude, DROP email, CHANGE description description VARCHAR(255) NOT NULL');
    }
}
