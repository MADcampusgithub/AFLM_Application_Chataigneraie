<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503135812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, ent_pays_id INT DEFAULT NULL, ent_ville_id INT DEFAULT NULL, ent_rs VARCHAR(100) NOT NULL, ent_adresse1 VARCHAR(100) DEFAULT NULL, ent_adresse2 VARCHAR(100) DEFAULT NULL, ent_adresse3 VARCHAR(100) DEFAULT NULL, ent_cp VARCHAR(5) DEFAULT NULL, INDEX IDX_D19FA609FEB51DC (ent_pays_id), INDEX IDX_D19FA6059D21453 (ent_ville_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, fon_label VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, pay_libelle VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, per_entreprise_id INT DEFAULT NULL, per_fonction_id INT DEFAULT NULL, per_nom VARCHAR(38) NOT NULL, per_prenom VARCHAR(38) DEFAULT NULL, per_mail VARCHAR(50) DEFAULT NULL, per_num VARCHAR(10) DEFAULT NULL, per_annee INT DEFAULT NULL, INDEX IDX_FCEC9EF9ADC9261 (per_entreprise_id), INDEX IDX_FCEC9EF71B91C71 (per_fonction_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, pro_label VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, spe_label VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite_entreprise (specialite_id INT NOT NULL, entreprise_id INT NOT NULL, INDEX IDX_EA0D81742195E0F0 (specialite_id), INDEX IDX_EA0D8174A4AEAFEA (entreprise_id), PRIMARY KEY(specialite_id, entreprise_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, vil_nom VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entreprise ADD CONSTRAINT FK_D19FA609FEB51DC FOREIGN KEY (ent_pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE entreprise ADD CONSTRAINT FK_D19FA6059D21453 FOREIGN KEY (ent_ville_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF9ADC9261 FOREIGN KEY (per_entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF71B91C71 FOREIGN KEY (per_fonction_id) REFERENCES fonction (id)');
        $this->addSql('ALTER TABLE specialite_entreprise ADD CONSTRAINT FK_EA0D81742195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE specialite_entreprise ADD CONSTRAINT FK_EA0D8174A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE personne_profil MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE personne_profil DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE personne_profil DROP id');
        $this->addSql('ALTER TABLE personne_profil ADD CONSTRAINT FK_D2AC8A7AC06FB1AB FOREIGN KEY (personnes_profils_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE personne_profil ADD CONSTRAINT FK_D2AC8A7A438152FF FOREIGN KEY (personne_profils_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE personne_profil ADD PRIMARY KEY (personnes_profils_id, personne_profils_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF9ADC9261');
        $this->addSql('ALTER TABLE specialite_entreprise DROP FOREIGN KEY FK_EA0D8174A4AEAFEA');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF71B91C71');
        $this->addSql('ALTER TABLE entreprise DROP FOREIGN KEY FK_D19FA609FEB51DC');
        $this->addSql('ALTER TABLE personne_profil DROP FOREIGN KEY FK_D2AC8A7AC06FB1AB');
        $this->addSql('ALTER TABLE personne_profil DROP FOREIGN KEY FK_D2AC8A7A438152FF');
        $this->addSql('ALTER TABLE specialite_entreprise DROP FOREIGN KEY FK_EA0D81742195E0F0');
        $this->addSql('ALTER TABLE entreprise DROP FOREIGN KEY FK_D19FA6059D21453');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE specialite_entreprise');
        $this->addSql('DROP TABLE ville');
        $this->addSql('ALTER TABLE personne_profil ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
