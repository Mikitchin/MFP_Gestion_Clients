<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230202013126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv ADD direction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_rdv ADD CONSTRAINT FK_68FB061DAF73D997 FOREIGN KEY (direction_id) REFERENCES unite_admin (id)');
        $this->addSql('CREATE INDEX IDX_68FB061DAF73D997 ON demande_rdv (direction_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv DROP FOREIGN KEY FK_68FB061DAF73D997');
        $this->addSql('DROP INDEX IDX_68FB061DAF73D997 ON demande_rdv');
        $this->addSql('ALTER TABLE demande_rdv DROP direction_id');
    }
}
