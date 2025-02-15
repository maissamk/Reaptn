<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250211110356 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materielvente ADD commande_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materielvente ADD CONSTRAINT FK_7588137182EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('CREATE INDEX IDX_7588137182EA2E54 ON materielvente (commande_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materielvente DROP FOREIGN KEY FK_7588137182EA2E54');
        $this->addSql('DROP INDEX IDX_7588137182EA2E54 ON materielvente');
        $this->addSql('ALTER TABLE materielvente DROP commande_id');
    }
}
