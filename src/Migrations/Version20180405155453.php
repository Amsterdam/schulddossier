<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180405155453 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('UPDATE dossier SET status = \'bezig_madi\' WHERE status =\'madi\'');
        $this->addSql('UPDATE dossier SET status = \'bezig_gka\' WHERE status =\'gka\'');
        $this->addSql('UPDATE dossier SET status = \'bezig_gka\' WHERE status =\'gesloten\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
