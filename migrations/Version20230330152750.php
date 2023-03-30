<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230330152750 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, company_type_id_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, url_image VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, url_web VARCHAR(255) DEFAULT NULL, INDEX IDX_4FBF094FCCC6F036 (company_type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_CFB34DC75E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modality (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offers (id INT AUTO_INCREMENT NOT NULL, company_id INT NOT NULL, modality_id INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, positions INT NOT NULL, location VARCHAR(255) DEFAULT NULL, activated TINYINT(1) NOT NULL, activated_by_admin TINYINT(1) NOT NULL, creation_date DATETIME NOT NULL, updated_date DATETIME NOT NULL, INDEX IDX_DA460427979B1AD6 (company_id), INDEX IDX_DA4604272D6D889B (modality_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tutor_user (id INT AUTO_INCREMENT NOT NULL, tutor_id INT NOT NULL, alumn_id INT NOT NULL, INDEX IDX_A38695ED208F64F1 (tutor_id), INDEX IDX_A38695ED4DC1EA41 (alumn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, user_type_id_id INT NOT NULL, name VARCHAR(75) NOT NULL, surname VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, phone INT NOT NULL, cvname VARCHAR(255) DEFAULT NULL, connecoins INT DEFAULT NULL, activate TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649D62FDF4C (user_type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_company (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, company_id INT NOT NULL, INDEX IDX_17B21745A76ED395 (user_id), INDEX IDX_17B21745979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_to_offer (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, offer_id INT NOT NULL, INDEX IDX_C267520EA76ED395 (user_id), INDEX IDX_C267520E53C674EE (offer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_F65F1BE05E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094FCCC6F036 FOREIGN KEY (company_type_id_id) REFERENCES company_type (id)');
        $this->addSql('ALTER TABLE offers ADD CONSTRAINT FK_DA460427979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE offers ADD CONSTRAINT FK_DA4604272D6D889B FOREIGN KEY (modality_id) REFERENCES modality (id)');
        $this->addSql('ALTER TABLE tutor_user ADD CONSTRAINT FK_A38695ED208F64F1 FOREIGN KEY (tutor_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE tutor_user ADD CONSTRAINT FK_A38695ED4DC1EA41 FOREIGN KEY (alumn_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649D62FDF4C FOREIGN KEY (user_type_id_id) REFERENCES user_type (id)');
        $this->addSql('ALTER TABLE user_company ADD CONSTRAINT FK_17B21745A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE user_company ADD CONSTRAINT FK_17B21745979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE user_to_offer ADD CONSTRAINT FK_C267520EA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE user_to_offer ADD CONSTRAINT FK_C267520E53C674EE FOREIGN KEY (offer_id) REFERENCES offers (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094FCCC6F036');
        $this->addSql('ALTER TABLE offers DROP FOREIGN KEY FK_DA460427979B1AD6');
        $this->addSql('ALTER TABLE offers DROP FOREIGN KEY FK_DA4604272D6D889B');
        $this->addSql('ALTER TABLE tutor_user DROP FOREIGN KEY FK_A38695ED208F64F1');
        $this->addSql('ALTER TABLE tutor_user DROP FOREIGN KEY FK_A38695ED4DC1EA41');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649D62FDF4C');
        $this->addSql('ALTER TABLE user_company DROP FOREIGN KEY FK_17B21745A76ED395');
        $this->addSql('ALTER TABLE user_company DROP FOREIGN KEY FK_17B21745979B1AD6');
        $this->addSql('ALTER TABLE user_to_offer DROP FOREIGN KEY FK_C267520EA76ED395');
        $this->addSql('ALTER TABLE user_to_offer DROP FOREIGN KEY FK_C267520E53C674EE');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE company_type');
        $this->addSql('DROP TABLE modality');
        $this->addSql('DROP TABLE offers');
        $this->addSql('DROP TABLE tutor_user');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE user_company');
        $this->addSql('DROP TABLE user_to_offer');
        $this->addSql('DROP TABLE user_type');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
