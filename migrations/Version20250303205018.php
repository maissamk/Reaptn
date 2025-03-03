<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303205018 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parcelle_proprietes CHANGE description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE user ADD status VARCHAR(20) NOT NULL, ADD login_attempts INT DEFAULT NULL, ADD google_id VARCHAR(255) DEFAULT NULL, ADD face_token VARCHAR(255) DEFAULT NULL, ADD face_image_path VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parcelle_proprietes CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user DROP status, DROP login_attempts, DROP google_id, DROP face_token, DROP face_image_path');
    }
}
