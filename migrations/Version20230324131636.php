<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230324131636 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, company_type_id_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, url_image VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, url_web VARCHAR(255) DEFAULT NULL, INDEX IDX_4FBF094FCCC6F036 (company_type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094FCCC6F036 FOREIGN KEY (company_type_id_id) REFERENCES company_type (id)');
        $this->addSql('ALTER TABLE user ADD company_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64938B53C32 FOREIGN KEY (company_id_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64938B53C32 ON user (company_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D64938B53C32');
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094FCCC6F036');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP INDEX IDX_8D93D64938B53C32 ON `user`');
        $this->addSql('ALTER TABLE `user` DROP company_id_id');
    }
}
