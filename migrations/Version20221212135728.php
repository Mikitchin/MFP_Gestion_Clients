<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221212135728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv ADD users_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_rdv ADD CONSTRAINT FK_68FB061D67B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_68FB061D67B3B43D ON demande_rdv (users_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv DROP FOREIGN KEY FK_68FB061D67B3B43D');
        $this->addSql('DROP INDEX IDX_68FB061D67B3B43D ON demande_rdv');
        $this->addSql('ALTER TABLE demande_rdv DROP users_id');
    }
}
