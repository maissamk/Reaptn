<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250304005153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD user_id_contrat_id INT DEFAULT NULL, ADD signature_id VARCHAR(255) DEFAULT NULL, ADD document_id VARCHAR(255) DEFAULT NULL, ADD signer_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_6034999353272B98 FOREIGN KEY (user_id_contrat_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6034999353272B98 ON contrat (user_id_contrat_id)');
        $this->addSql('ALTER TABLE parcelle_proprietes ADD type_terrain VARCHAR(255) NOT NULL, ADD latitude VARCHAR(255) DEFAULT NULL, ADD longitude VARCHAR(255) DEFAULT NULL, ADD email VARCHAR(255) NOT NULL, CHANGE description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE user ADD status VARCHAR(20) NOT NULL, ADD login_attempts INT DEFAULT NULL, ADD google_id VARCHAR(255) DEFAULT NULL, ADD face_token VARCHAR(255) DEFAULT NULL, ADD face_image_path VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_6034999353272B98');
        $this->addSql('DROP INDEX IDX_6034999353272B98 ON contrat');
        $this->addSql('ALTER TABLE contrat DROP user_id_contrat_id, DROP signature_id, DROP document_id, DROP signer_id');
        $this->addSql('ALTER TABLE parcelle_proprietes DROP type_terrain, DROP latitude, DROP longitude, DROP email, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user DROP status, DROP login_attempts, DROP google_id, DROP face_token, DROP face_image_path');
    }
}
