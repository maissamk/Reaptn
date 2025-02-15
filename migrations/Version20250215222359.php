<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250215222359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parcelle_proprietes ADD user_id_parcelle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parcelle_proprietes ADD CONSTRAINT FK_83C008C237A4FFC8 FOREIGN KEY (user_id_parcelle_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_83C008C237A4FFC8 ON parcelle_proprietes (user_id_parcelle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parcelle_proprietes DROP FOREIGN KEY FK_83C008C237A4FFC8');
        $this->addSql('DROP INDEX IDX_83C008C237A4FFC8 ON parcelle_proprietes');
        $this->addSql('ALTER TABLE parcelle_proprietes DROP user_id_parcelle_id');
    }
}
