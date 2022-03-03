<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303102433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, fon_label VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personne ADD per_fonction_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF71B91C71 FOREIGN KEY (per_fonction_id) REFERENCES fonction (id)');
        $this->addSql('CREATE INDEX IDX_FCEC9EF71B91C71 ON personne (per_fonction_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF71B91C71');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP INDEX IDX_FCEC9EF71B91C71 ON personne');
        $this->addSql('ALTER TABLE personne DROP per_fonction_id');
    }
}
