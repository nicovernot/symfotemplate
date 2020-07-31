<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200726030016 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EF1D74413');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A931DC59C41');
        $this->addSql('ALTER TABLE user1 DROP FOREIGN KEY FK_8C5185551DC59C41');
        $this->addSql('ALTER TABLE magazine DROP FOREIGN KEY FK_378C2FE43DA5256D');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB3EB84A1D');
        $this->addSql('ALTER TABLE ssmenu DROP FOREIGN KEY FK_DE47A15CCCD7E912');
        $this->addSql('ALTER TABLE message_user DROP FOREIGN KEY FK_24064D90537A1329');
        $this->addSql('ALTER TABLE type_message_message DROP FOREIGN KEY FK_D1019E07537A1329');
        $this->addSql('ALTER TABLE champ DROP FOREIGN KEY FK_2F61E0ADBD1A86CC');
        $this->addSql('ALTER TABLE onglet DROP FOREIGN KEY FK_C6BC02395C434BA1');
        $this->addSql('ALTER TABLE type_message_message DROP FOREIGN KEY FK_D1019E074E79C50C');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB19EB6921');
        $this->addSql('ALTER TABLE message_user DROP FOREIGN KEY FK_24064D90A76ED395');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E19EB6921');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE appli');
        $this->addSql('DROP TABLE champ');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE magazine');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE message_user');
        $this->addSql('DROP TABLE migration_versions');
        $this->addSql('DROP TABLE onglet');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE ssmenu');
        $this->addSql('DROP TABLE type_message');
        $this->addSql('DROP TABLE type_message_message');
        $this->addSql('DROP TABLE user1');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, magazine_id INT NOT NULL, date DATETIME NOT NULL, encours TINYINT(1) DEFAULT NULL, remboursement TINYINT(1) DEFAULT NULL, dateremboursement DATETIME DEFAULT NULL, estpaye TINYINT(1) DEFAULT NULL, estprolonge TINYINT(1) DEFAULT NULL, INDEX IDX_351268BB19EB6921 (client_id), INDEX IDX_351268BB3EB84A1D (magazine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE appli (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE champ (id INT AUTO_INCREMENT NOT NULL, onglet_id INT DEFAULT NULL, chpcha VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, chpord INT DEFAULT NULL, chplon INT DEFAULT NULL, chptyp VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, chpsai INT DEFAULT NULL, chpsel VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, chprec INT DEFAULT NULL, chplib VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, INDEX IDX_2F61E0ADBD1A86CC (onglet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, updated DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE magazine (id INT AUTO_INCREMENT NOT NULL, image_id INT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, numerosparan INT NOT NULL, presentation VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, prixann DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_378C2FE43DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, appli_id INT DEFAULT NULL, mencod VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, menlib VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, menord INT DEFAULT NULL, mencom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, mendat DATETIME DEFAULT NULL, menphp VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, mensql VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, INDEX IDX_7D053A931DC59C41 (appli_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE message_user (message_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_24064D90537A1329 (message_id), INDEX IDX_24064D90A76ED395 (user_id), PRIMARY KEY(message_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE migration_versions (version VARCHAR(14) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, executed_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE onglet (id INT AUTO_INCREMENT NOT NULL, ssmenu_id INT DEFAULT NULL, ongcod VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, onglib VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ongord INT DEFAULT NULL, onglec INT DEFAULT NULL, ongcre INT DEFAULT NULL, ongupd INT DEFAULT NULL, ongadm INT DEFAULT NULL, ongcom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ongmaj DATETIME DEFAULT NULL, ongphp VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ongsql VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ongdef INT DEFAULT NULL, ongsqlcre VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ongsqlupd VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ongsqldel VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ongcon INT DEFAULT NULL, INDEX IDX_C6BC02395C434BA1 (ssmenu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, abonnement_id INT NOT NULL, date DATETIME NOT NULL, idpaiement VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, UNIQUE INDEX UNIQ_B1DC7A1EF1D74413 (abonnement_id), INDEX IDX_B1DC7A1E19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ssmenu (id INT AUTO_INCREMENT NOT NULL, menu_id INT NOT NULL, ssmcod VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ssmlib VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ssmord INT DEFAULT NULL, ssmcom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ssmmaj DATETIME DEFAULT NULL, ssmphp VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, INDEX IDX_DE47A15CCCD7E912 (menu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_message (id INT AUTO_INCREMENT NOT NULL, typemessage VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_message_message (type_message_id INT NOT NULL, message_id INT NOT NULL, INDEX IDX_D1019E07537A1329 (message_id), INDEX IDX_D1019E074E79C50C (type_message_id), PRIMARY KEY(type_message_id, message_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user1 (id INT AUTO_INCREMENT NOT NULL, appli_id INT DEFAULT NULL, email VARCHAR(180) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, password VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, nom VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, prenom VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, tel VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, date_naissance DATETIME NOT NULL, lieu_naissance VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, rue VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, numero_rue INT NOT NULL, ville VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, codepostal INT NOT NULL, UNIQUE INDEX UNIQ_8C518555E7927C74 (email), INDEX IDX_8C5185551DC59C41 (appli_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB19EB6921 FOREIGN KEY (client_id) REFERENCES user1 (id)');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB3EB84A1D FOREIGN KEY (magazine_id) REFERENCES magazine (id)');
        $this->addSql('ALTER TABLE champ ADD CONSTRAINT FK_2F61E0ADBD1A86CC FOREIGN KEY (onglet_id) REFERENCES onglet (id)');
        $this->addSql('ALTER TABLE magazine ADD CONSTRAINT FK_378C2FE43DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A931DC59C41 FOREIGN KEY (appli_id) REFERENCES appli (id)');
        $this->addSql('ALTER TABLE message_user ADD CONSTRAINT FK_24064D90537A1329 FOREIGN KEY (message_id) REFERENCES message (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE message_user ADD CONSTRAINT FK_24064D90A76ED395 FOREIGN KEY (user_id) REFERENCES user1 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE onglet ADD CONSTRAINT FK_C6BC02395C434BA1 FOREIGN KEY (ssmenu_id) REFERENCES ssmenu (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E19EB6921 FOREIGN KEY (client_id) REFERENCES user1 (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EF1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id)');
        $this->addSql('ALTER TABLE ssmenu ADD CONSTRAINT FK_DE47A15CCCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id)');
        $this->addSql('ALTER TABLE type_message_message ADD CONSTRAINT FK_D1019E074E79C50C FOREIGN KEY (type_message_id) REFERENCES type_message (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type_message_message ADD CONSTRAINT FK_D1019E07537A1329 FOREIGN KEY (message_id) REFERENCES message (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user1 ADD CONSTRAINT FK_8C5185551DC59C41 FOREIGN KEY (appli_id) REFERENCES appli (id)');
        $this->addSql('DROP TABLE user');
    }
}
