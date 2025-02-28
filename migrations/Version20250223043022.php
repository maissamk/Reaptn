<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223043022 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B94AB27F15');
        $this->addSql('DROP INDEX IDX_F804D3B94AB27F15 ON employe');
        $this->addSql('ALTER TABLE employe ADD dispo JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', ADD conf TINYINT(1) DEFAULT NULL, ADD date_join DATETIME DEFAULT NULL, DROP user_id_employe_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employe ADD user_id_employe_id INT DEFAULT NULL, DROP dispo, DROP conf, DROP date_join');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B94AB27F15 FOREIGN KEY (user_id_employe_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F804D3B94AB27F15 ON employe (user_id_employe_id)');
    }
}
