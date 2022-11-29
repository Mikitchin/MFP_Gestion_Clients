<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221128105013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv ADD code_motif_id INT DEFAULT NULL, ADD descript_dde VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_rdv ADD CONSTRAINT FK_68FB061D296FC032 FOREIGN KEY (code_motif_id) REFERENCES motif_rdv (id)');
        $this->addSql('CREATE INDEX IDX_68FB061D296FC032 ON demande_rdv (code_motif_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv DROP FOREIGN KEY FK_68FB061D296FC032');
        $this->addSql('DROP INDEX IDX_68FB061D296FC032 ON demande_rdv');
        $this->addSql('ALTER TABLE demande_rdv DROP code_motif_id, DROP demande_rdv');
    }
}
