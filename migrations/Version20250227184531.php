<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250227184531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employe CHANGE comp comp VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE offre CHANGE descr descr VARCHAR(255) DEFAULT NULL, CHANGE comp comp VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE product CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE stock CHANGE exit_date exit_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD login_attempts INT DEFAULT NULL, CHANGE roles roles JSON NOT NULL, CHANGE avatar avatar VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employe CHANGE comp comp VARCHAR(100) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE offre CHANGE descr descr VARCHAR(255) DEFAULT \'NULL\', CHANGE comp comp VARCHAR(100) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE product CHANGE image image VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE stock CHANGE exit_date exit_date DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user DROP login_attempts, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE avatar avatar VARCHAR(255) DEFAULT \'NULL\'');
    }
}
