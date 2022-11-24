<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221124124956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE motif_rdv ADD code_dir_id INT NOT NULL');
        $this->addSql('ALTER TABLE motif_rdv ADD CONSTRAINT FK_1FAC316D9135D544 FOREIGN KEY (code_dir_id) REFERENCES unite_admin (id)');
        $this->addSql('CREATE INDEX IDX_1FAC316D9135D544 ON motif_rdv (code_dir_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE motif_rdv DROP FOREIGN KEY FK_1FAC316D9135D544');
        $this->addSql('DROP INDEX IDX_1FAC316D9135D544 ON motif_rdv');
        $this->addSql('ALTER TABLE motif_rdv DROP code_dir_id');
    }
}
