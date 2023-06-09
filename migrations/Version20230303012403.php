<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230303012403 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD direction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404AF73D997 FOREIGN KEY (direction_id) REFERENCES unite_admin (id)');
        $this->addSql('CREATE INDEX IDX_CE606404AF73D997 ON reclamation (direction_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404AF73D997');
        $this->addSql('DROP INDEX IDX_CE606404AF73D997 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP direction_id');
    }
}
