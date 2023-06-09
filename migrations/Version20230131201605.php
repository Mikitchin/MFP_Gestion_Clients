<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131201605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064042534008B');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404F520CF5A');
        $this->addSql('DROP INDEX IDX_CE6064042534008B ON reclamation');
        $this->addSql('DROP INDEX IDX_CE606404F520CF5A ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD code_motif_id INT DEFAULT NULL, ADD users_id INT DEFAULT NULL, ADD etat_demandes_id INT DEFAULT NULL, ADD code_dde VARCHAR(255) DEFAULT NULL, ADD date_demande DATETIME NOT NULL, ADD date_modif_dde DATETIME DEFAULT NULL, ADD descript_dde VARCHAR(255) DEFAULT NULL, ADD created_at DATETIME NOT NULL, ADD heure_rdv VARCHAR(255) DEFAULT NULL, ADD observation_ac VARCHAR(255) DEFAULT NULL, ADD observation_gest VARCHAR(255) DEFAULT NULL, DROP structure_id, DROP objet_id, DROP fonctionnaire, DROP sexe, DROP motif');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404296FC032 FOREIGN KEY (code_motif_id) REFERENCES motif_rdv (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640467B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640499E964FA FOREIGN KEY (etat_demandes_id) REFERENCES etat_demande (id)');
        $this->addSql('CREATE INDEX IDX_CE606404296FC032 ON reclamation (code_motif_id)');
        $this->addSql('CREATE INDEX IDX_CE60640467B3B43D ON reclamation (users_id)');
        $this->addSql('CREATE INDEX IDX_CE60640499E964FA ON reclamation (etat_demandes_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404296FC032');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640467B3B43D');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640499E964FA');
        $this->addSql('DROP INDEX IDX_CE606404296FC032 ON reclamation');
        $this->addSql('DROP INDEX IDX_CE60640467B3B43D ON reclamation');
        $this->addSql('DROP INDEX IDX_CE60640499E964FA ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD structure_id INT DEFAULT NULL, ADD objet_id INT DEFAULT NULL, ADD fonctionnaire TINYINT(1) NOT NULL, ADD sexe VARCHAR(16) NOT NULL, ADD motif VARCHAR(255) NOT NULL, DROP code_motif_id, DROP users_id, DROP etat_demandes_id, DROP code_dde, DROP date_demande, DROP date_modif_dde, DROP descript_dde, DROP created_at, DROP heure_rdv, DROP observation_ac, DROP observation_gest');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064042534008B FOREIGN KEY (structure_id) REFERENCES structure (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404F520CF5A FOREIGN KEY (objet_id) REFERENCES motif_rdv (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_CE6064042534008B ON reclamation (structure_id)');
        $this->addSql('CREATE INDEX IDX_CE606404F520CF5A ON reclamation (objet_id)');
    }
}
