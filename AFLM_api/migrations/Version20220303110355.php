<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303110355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, uti_droit TINYINT(1) NOT NULL, uti_login VARCHAR(38) NOT NULL, uti_mdp VARCHAR(64) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fonction DROP FOREIGN KEY FK_900D5BD1E38DA44');
        $this->addSql('DROP INDEX IDX_900D5BD1E38DA44 ON fonction');
        $this->addSql('ALTER TABLE fonction DROP fon_personne_id');
        $this->addSql('ALTER TABLE personne ADD per_fonction_id INT DEFAULT NULL, ADD per_annee INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF71B91C71 FOREIGN KEY (per_fonction_id) REFERENCES fonction (id)');
        $this->addSql('CREATE INDEX IDX_FCEC9EF71B91C71 ON personne (per_fonction_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE fonction ADD fon_personne_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fonction ADD CONSTRAINT FK_900D5BD1E38DA44 FOREIGN KEY (fon_personne_id) REFERENCES personne (id)');
        $this->addSql('CREATE INDEX IDX_900D5BD1E38DA44 ON fonction (fon_personne_id)');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF71B91C71');
        $this->addSql('DROP INDEX IDX_FCEC9EF71B91C71 ON personne');
        $this->addSql('ALTER TABLE personne DROP per_fonction_id, DROP per_annee');
    }
}
