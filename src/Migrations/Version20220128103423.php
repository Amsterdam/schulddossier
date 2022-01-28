<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220128103423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Nieuwe gebruiker gka1 voor development en testen met wachtwoord test12345
        $this->addSql('INSERT INTO gebruiker (id, username, password, type, email, enabled) VALUES (nextval(\'gebruiker_id_seq\'), \'gka@schulddossier.local\', \'$2y$13$AT/ra2mI3k/I4bUeiLDeouvGzj9IB1fO0fbeno6jOY8TnL0Azo7Mm\', \'gka\', \'gka@schulddossier.local\', \'true\')');
        // Nieuwe gebruiker madi1 voor development en testen met wachtwoord test12345
        $this->addSql('INSERT INTO gebruiker (id, username, password, type, email, enabled) VALUES (nextval(\'gebruiker_id_seq\'),\'madi@schulddossier.local\', \'$2y$13$WxQdH.Kt/MuhxFxxE4oBVuKox1AEQQu1o38e2cSmu2dK/oLRBxwTi\', \'madi\',\'madi@schulddossier.local\', \'true\')');
        // Nieuwe gebruiker admin1 voor development en testen met wachtwoord test12345
        $this->addSql('INSERT INTO gebruiker (id, username, password, type, email, enabled) VALUES (nextval(\'gebruiker_id_seq\'), \'admin@schulddossier.local\', \'$2y$13$OPakUGEI7Chr4gTaMJEqK.lLc2CnB5BZDOJf8ch0BA9i6pLIvkchS\', \'admin\', \'admin@schulddossier.local\', \'true\')');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
    }
}