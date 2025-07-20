<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250720205657 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE blog 
        (id INT AUTO_INCREMENT NOT NULL, 
        title VARCHAR(255) NOT NULL, 
        image VARCHAR(255) DEFAULT NULL, 
        text LONGTEXT NOT NULL, 
        likes INT NOT NULL DEFAULT 0, 
        hearts INT NOT NULL DEFAULT 0, 
        surprised INT NOT NULL DEFAULT 0, 
        hearteye INT NOT NULL DEFAULT 0, 
        PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE blog');
    }
}
