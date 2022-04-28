<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427103025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, annonces_id INT NOT NULL, parent_id INT DEFAULT NULL, content LONGTEXT NOT NULL, active TINYINT(1) NOT NULL, email VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', rgpd TINYINT(1) NOT NULL, INDEX IDX_5F9E962A4C2885D7 (annonces_id), INDEX IDX_5F9E962A727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A4C2885D7 FOREIGN KEY (annonces_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A727ACA70 FOREIGN KEY (parent_id) REFERENCES comments (id)');
        $this->addSql('ALTER TABLE ingredients CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE livraison CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE menu CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE menu_commande CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reponse CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE scommentaire CHANGE Scommentaire_id Scommentaire_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE role role VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A727ACA70');
        $this->addSql('DROP TABLE comments');
        $this->addSql('ALTER TABLE ingredients MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE ingredients DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE ingredients CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE livraison CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE menu MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE menu DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE menu CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE menu_commande CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE reponse CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE scommentaire CHANGE Scommentaire_id Scommentaire_id INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE id id INT NOT NULL, CHANGE role role VARCHAR(255) NOT NULL COLLATE `utf8mb4_bin`');
    }
}
