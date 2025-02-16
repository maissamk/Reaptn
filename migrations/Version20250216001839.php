<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216001839 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiellocation ADD user_id_materiellocation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materiellocation ADD CONSTRAINT FK_92A71363F41A03BF FOREIGN KEY (user_id_materiellocation_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_92A71363F41A03BF ON materiellocation (user_id_materiellocation_id)');
        $this->addSql('ALTER TABLE materielvente ADD user_id_materielvente_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materielvente ADD CONSTRAINT FK_7588137178B7B701 FOREIGN KEY (user_id_materielvente_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7588137178B7B701 ON materielvente (user_id_materielvente_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE materiellocation DROP FOREIGN KEY FK_92A71363F41A03BF');
        $this->addSql('DROP INDEX IDX_92A71363F41A03BF ON materiellocation');
        $this->addSql('ALTER TABLE materiellocation DROP user_id_materiellocation_id');
        $this->addSql('ALTER TABLE materielvente DROP FOREIGN KEY FK_7588137178B7B701');
        $this->addSql('DROP INDEX IDX_7588137178B7B701 ON materielvente');
        $this->addSql('ALTER TABLE materielvente DROP user_id_materielvente_id');
    }
}
