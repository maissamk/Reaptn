<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250209170949 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiellocation CHANGE disponibilité disponibilite TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE materielvente CHANGE disponibilté disponibilte TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiellocation CHANGE disponibilite disponibilité TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE materielvente CHANGE disponibilte disponibilté TINYINT(1) NOT NULL');
    }
}
