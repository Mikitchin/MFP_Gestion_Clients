<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230107174623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv ADD etat_demandes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_rdv ADD CONSTRAINT FK_68FB061D99E964FA FOREIGN KEY (etat_demandes_id) REFERENCES etat_demande (id)');
        $this->addSql('CREATE INDEX IDX_68FB061D99E964FA ON demande_rdv (etat_demandes_id)');
        $this->addSql('ALTER TABLE etat_demande DROP FOREIGN KEY FK_214BE820E8A7969');
        $this->addSql('DROP INDEX IDX_214BE820E8A7969 ON etat_demande');
        $this->addSql('ALTER TABLE etat_demande DROP demande_rdv_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv DROP FOREIGN KEY FK_68FB061D99E964FA');
        $this->addSql('DROP INDEX IDX_68FB061D99E964FA ON demande_rdv');
        $this->addSql('ALTER TABLE demande_rdv DROP etat_demandes_id');
        $this->addSql('ALTER TABLE etat_demande ADD demande_rdv_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etat_demande ADD CONSTRAINT FK_214BE820E8A7969 FOREIGN KEY (demande_rdv_id) REFERENCES demande_rdv (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_214BE820E8A7969 ON etat_demande (demande_rdv_id)');
    }
}
