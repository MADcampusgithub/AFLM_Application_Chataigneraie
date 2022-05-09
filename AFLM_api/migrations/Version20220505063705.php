<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220505063705 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne_profil DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE personne_profil CHANGE annee annee CHAR(4) NOT NULL');
        $this->addSql('ALTER TABLE personne_profil ADD PRIMARY KEY (annee, personne_id, profil_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne_profil DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE personne_profil CHANGE annee annee CHAR(4) DEFAULT NULL');
        $this->addSql('ALTER TABLE personne_profil ADD PRIMARY KEY (personne_id, profil_id)');
    }
}
