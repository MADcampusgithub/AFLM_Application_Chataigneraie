<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303100800 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, ent_pays_id INT DEFAULT NULL, ent_ville_id INT DEFAULT NULL, ent_rs VARCHAR(100) NOT NULL, ent_adresse1 VARCHAR(100) DEFAULT NULL, ent_adresse2 VARCHAR(100) DEFAULT NULL, ent_adresse3 VARCHAR(100) DEFAULT NULL, ent_cp VARCHAR(5) DEFAULT NULL, INDEX IDX_D19FA609FEB51DC (ent_pays_id), INDEX IDX_D19FA6059D21453 (ent_ville_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, fon_personne_id INT DEFAULT NULL, fon_label VARCHAR(38) NOT NULL, INDEX IDX_900D5BD1E38DA44 (fon_personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, pay_libelle VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, per_entreprise_id INT DEFAULT NULL, per_nom VARCHAR(38) NOT NULL, per_prenom VARCHAR(38) DEFAULT NULL, per_mail VARCHAR(50) DEFAULT NULL, per_num VARCHAR(10) DEFAULT NULL, INDEX IDX_FCEC9EF9ADC9261 (per_entreprise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, pro_label VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil_personne (profil_id INT NOT NULL, personne_id INT NOT NULL, INDEX IDX_1327BC42275ED078 (profil_id), INDEX IDX_1327BC42A21BD112 (personne_id), PRIMARY KEY(profil_id, personne_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, spe_label VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite_entreprise (specialite_id INT NOT NULL, entreprise_id INT NOT NULL, INDEX IDX_EA0D81742195E0F0 (specialite_id), INDEX IDX_EA0D8174A4AEAFEA (entreprise_id), PRIMARY KEY(specialite_id, entreprise_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, vil_nom VARCHAR(38) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entreprise ADD CONSTRAINT FK_D19FA609FEB51DC FOREIGN KEY (ent_pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE entreprise ADD CONSTRAINT FK_D19FA6059D21453 FOREIGN KEY (ent_ville_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE fonction ADD CONSTRAINT FK_900D5BD1E38DA44 FOREIGN KEY (fon_personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF9ADC9261 FOREIGN KEY (per_entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE profil_personne ADD CONSTRAINT FK_1327BC42275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_personne ADD CONSTRAINT FK_1327BC42A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE specialite_entreprise ADD CONSTRAINT FK_EA0D81742195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE specialite_entreprise ADD CONSTRAINT FK_EA0D8174A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur DROP uti_nom, DROP uti_prenom, CHANGE uti_login uti_login VARCHAR(38) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF9ADC9261');
        $this->addSql('ALTER TABLE specialite_entreprise DROP FOREIGN KEY FK_EA0D8174A4AEAFEA');
        $this->addSql('ALTER TABLE entreprise DROP FOREIGN KEY FK_D19FA609FEB51DC');
        $this->addSql('ALTER TABLE fonction DROP FOREIGN KEY FK_900D5BD1E38DA44');
        $this->addSql('ALTER TABLE profil_personne DROP FOREIGN KEY FK_1327BC42A21BD112');
        $this->addSql('ALTER TABLE profil_personne DROP FOREIGN KEY FK_1327BC42275ED078');
        $this->addSql('ALTER TABLE specialite_entreprise DROP FOREIGN KEY FK_EA0D81742195E0F0');
        $this->addSql('ALTER TABLE entreprise DROP FOREIGN KEY FK_D19FA6059D21453');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE profil_personne');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE specialite_entreprise');
        $this->addSql('DROP TABLE ville');
        $this->addSql('ALTER TABLE utilisateur ADD uti_nom VARCHAR(38) DEFAULT NULL, ADD uti_prenom VARCHAR(38) DEFAULT NULL, CHANGE uti_login uti_login VARCHAR(50) NOT NULL');
    }
}
