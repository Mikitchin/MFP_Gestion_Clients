<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221008121821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe_profil (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, code_profil_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_E6D6B2978B1BA840 (code_profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B2978B1BA840 FOREIGN KEY (code_profil_id) REFERENCES groupe_profil (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profil DROP FOREIGN KEY FK_E6D6B2978B1BA840');
        $this->addSql('DROP TABLE groupe_profil');
        $this->addSql('DROP TABLE profil');
    }
}