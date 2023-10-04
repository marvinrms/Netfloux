<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231004091504 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE choice_user ADD content_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE choice_user ADD CONSTRAINT FK_D80C696A84A0A3ED FOREIGN KEY (content_id) REFERENCES content (id)');
        $this->addSql('CREATE INDEX IDX_D80C696A84A0A3ED ON choice_user (content_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE choice_user DROP FOREIGN KEY FK_D80C696A84A0A3ED');
        $this->addSql('DROP INDEX IDX_D80C696A84A0A3ED ON choice_user');
        $this->addSql('ALTER TABLE choice_user DROP content_id');
    }
}
