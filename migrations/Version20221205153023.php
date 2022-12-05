<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221205153023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv ADD code_motif_id INT DEFAULT NULL, ADD date_modif_dde DATETIME DEFAULT NULL, ADD descript_dde VARCHAR(255) DEFAULT NULL, DROP create_at, CHANGE code_dde code_dde VARCHAR(255) DEFAULT NULL, CHANGE date_dde created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE demande_rdv ADD CONSTRAINT FK_68FB061D296FC032 FOREIGN KEY (code_motif_id) REFERENCES motif_rdv (id)');
        $this->addSql('CREATE INDEX IDX_68FB061D296FC032 ON demande_rdv (code_motif_id)');
        $this->addSql('ALTER TABLE motif_rdv ADD code_dir_id INT NOT NULL, CHANGE create_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE motif_rdv ADD CONSTRAINT FK_1FAC316D9135D544 FOREIGN KEY (code_dir_id) REFERENCES unite_admin (id)');
        $this->addSql('CREATE INDEX IDX_1FAC316D9135D544 ON motif_rdv (code_dir_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv DROP FOREIGN KEY FK_68FB061D296FC032');
        $this->addSql('DROP INDEX IDX_68FB061D296FC032 ON demande_rdv');
        $this->addSql('ALTER TABLE demande_rdv ADD create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP code_motif_id, DROP date_modif_dde, DROP descript_dde, CHANGE code_dde code_dde VARCHAR(255) NOT NULL, CHANGE created_at date_dde DATETIME NOT NULL');
        $this->addSql('ALTER TABLE motif_rdv DROP FOREIGN KEY FK_1FAC316D9135D544');
        $this->addSql('DROP INDEX IDX_1FAC316D9135D544 ON motif_rdv');
        $this->addSql('ALTER TABLE motif_rdv DROP code_dir_id, CHANGE created_at create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
