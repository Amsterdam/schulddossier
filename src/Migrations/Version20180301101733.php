<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180301101733 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // Nieuwe gebruiker gka1 voor development en testen met wachtwoord test12345
        $this->addSql('INSERT INTO gebruiker (id, username, password, type) VALUES (nextval(\'gebruiker_id_seq\'), \'gka1\', \'$2y$13$LL4DFiDFQuFBIx23deASOuWQalcSf0eOXPSpb97QVwP0FXcXpiTKm\', \'gka\')');
        // Nieuwe gebruiker madi1 voor development en testen met wachtwoord test12345
        $this->addSql('INSERT INTO gebruiker (id, username, password, type) VALUES (nextval(\'gebruiker_id_seq\'), \'madi1\', \'$2y$13$LL4DFiDFQuFBIx23deASOuWQalcSf0eOXPSpb97QVwP0FXcXpiTKm\', \'madi\')');
        // Nieuwe gebruiker admin1 voor development en testen met wachtwoord test12345
        $this->addSql('INSERT INTO gebruiker (id, username, password, type) VALUES (nextval(\'gebruiker_id_seq\'), \'admin1\', \'$2y$13$LL4DFiDFQuFBIx23deASOuWQalcSf0eOXPSpb97QVwP0FXcXpiTKm\', \'admin\')');

        // Teams voor GKA
        $this->addSql('INSERT INTO team (id, naam) VALUES (nextval(\'team_id_seq\'), \'GKA Team 1\')');
        $this->addSql('INSERT INTO team (id, naam) VALUES (nextval(\'team_id_seq\'), \'GKA Team 2\')');
        $this->addSql('INSERT INTO team (id, naam) VALUES (nextval(\'team_id_seq\'), \'GKA Team 3\')');

        // MADI's/Schuldhulpbureaus
        $this->addSql('INSERT INTO schuldhulpbureau (id, naam) VALUES (nextval(\'schuldhulpbureau_id_seq\'), \'Doras (Amsterdam-Noord)\')');
        $this->addSql('INSERT INTO schuldhulpbureau (id, naam) VALUES (nextval(\'schuldhulpbureau_id_seq\'), \'Puur Zuid (Amsterdam-Zuid)\')');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
