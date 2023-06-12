<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230611012848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv ADD user_agent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_rdv ADD CONSTRAINT FK_68FB061DD499950B FOREIGN KEY (user_agent_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_68FB061DD499950B ON demande_rdv (user_agent_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_rdv DROP FOREIGN KEY FK_68FB061DD499950B');
        $this->addSql('DROP INDEX IDX_68FB061DD499950B ON demande_rdv');
        $this->addSql('ALTER TABLE demande_rdv DROP user_agent_id');
    }
}
