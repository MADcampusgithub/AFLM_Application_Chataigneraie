<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220505063003 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne_profil RENAME INDEX idx_d2ac8a7ac06fb1ab TO IDX_D2AC8A7AA21BD112');
        $this->addSql('ALTER TABLE personne_profil RENAME INDEX idx_d2ac8a7a438152ff TO IDX_D2AC8A7A275ED078');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne_profil RENAME INDEX idx_d2ac8a7a275ed078 TO IDX_D2AC8A7A438152FF');
        $this->addSql('ALTER TABLE personne_profil RENAME INDEX idx_d2ac8a7aa21bd112 TO IDX_D2AC8A7AC06FB1AB');
    }
}
