<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250222203956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD user_id_contrat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_6034999353272B98 FOREIGN KEY (user_id_contrat_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6034999353272B98 ON contrat (user_id_contrat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_6034999353272B98');
        $this->addSql('DROP INDEX IDX_6034999353272B98 ON contrat');
        $this->addSql('ALTER TABLE contrat DROP user_id_contrat_id');
    }
}
