<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131152251 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE objet_reclamation (id INT AUTO_INCREMENT NOT NULL, code_reclamation VARCHAR(255) NOT NULL, libelle_reclamation VARCHAR(255) NOT NULL, objet VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reclamation ADD fonctionnaire TINYINT(1) NOT NULL, ADD sexe VARCHAR(16) NOT NULL, ADD motif VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD fonctionnaire TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE objet_reclamation');
        $this->addSql('ALTER TABLE reclamation DROP fonctionnaire, DROP sexe, DROP motif');
        $this->addSql('ALTER TABLE user DROP fonctionnaire');
    }
}
