<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216152211 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, auteur VARCHAR(255) NOT NULL, date DATE NOT NULL, photos VARCHAR(255) NOT NULL, texte LONGTEXT NOT NULL, nb_comm VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_blog_reply (blog_id INT NOT NULL, blog_reply_id INT NOT NULL, INDEX IDX_EB81A7C1DAE07E97 (blog_id), INDEX IDX_EB81A7C1FE536A58 (blog_reply_id), PRIMARY KEY(blog_id, blog_reply_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_blogcategory (blog_id INT NOT NULL, blogcategory_id INT NOT NULL, INDEX IDX_C42EAAB8DAE07E97 (blog_id), INDEX IDX_C42EAAB897CB4F73 (blogcategory_id), PRIMARY KEY(blog_id, blogcategory_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blogcategory (id INT AUTO_INCREMENT NOT NULL, rubrique LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blogreply (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date DATE NOT NULL, photos VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, heure TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE booking (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, num_mobile INT NOT NULL, date DATE NOT NULL, heure TIME NOT NULL, nb_participants VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE catfood (id INT AUTO_INCREMENT NOT NULL, menu_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, icon VARCHAR(255) NOT NULL, INDEX IDX_1DB4E51DCCD7E912 (menu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chef (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, photos VARCHAR(255) NOT NULL, facebook VARCHAR(255) NOT NULL, instagram VARCHAR(255) NOT NULL, twitter VARCHAR(255) NOT NULL, linkedin VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, sujet VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE features (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, plat VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, photos VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slider (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, src_image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE blog_blog_reply ADD CONSTRAINT FK_EB81A7C1DAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE blog_blog_reply ADD CONSTRAINT FK_EB81A7C1FE536A58 FOREIGN KEY (blog_reply_id) REFERENCES blogreply (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE blog_blogcategory ADD CONSTRAINT FK_C42EAAB8DAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE blog_blogcategory ADD CONSTRAINT FK_C42EAAB897CB4F73 FOREIGN KEY (blogcategory_id) REFERENCES blogcategory (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE catfood ADD CONSTRAINT FK_1DB4E51DCCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_blog_reply DROP FOREIGN KEY FK_EB81A7C1DAE07E97');
        $this->addSql('ALTER TABLE blog_blogcategory DROP FOREIGN KEY FK_C42EAAB8DAE07E97');
        $this->addSql('ALTER TABLE blog_blogcategory DROP FOREIGN KEY FK_C42EAAB897CB4F73');
        $this->addSql('ALTER TABLE blog_blog_reply DROP FOREIGN KEY FK_EB81A7C1FE536A58');
        $this->addSql('ALTER TABLE catfood DROP FOREIGN KEY FK_1DB4E51DCCD7E912');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE blog_blog_reply');
        $this->addSql('DROP TABLE blog_blogcategory');
        $this->addSql('DROP TABLE blogcategory');
        $this->addSql('DROP TABLE blogreply');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE catfood');
        $this->addSql('DROP TABLE chef');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE features');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE slider');
    }
}
