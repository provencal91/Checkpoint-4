<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200129163117 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cars_circuits (cars_id INT NOT NULL, circuits_id INT NOT NULL, INDEX IDX_58EBB8378702F506 (cars_id), INDEX IDX_58EBB8377201D625 (circuits_id), PRIMARY KEY(cars_id, circuits_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cars_circuits ADD CONSTRAINT FK_58EBB8378702F506 FOREIGN KEY (cars_id) REFERENCES cars (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cars_circuits ADD CONSTRAINT FK_58EBB8377201D625 FOREIGN KEY (circuits_id) REFERENCES circuits (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE schedule ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE schedule ADD CONSTRAINT FK_5A3811FBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5A3811FBA76ED395 ON schedule (user_id)');
        $this->addSql('ALTER TABLE circuits ADD circuits_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE circuits ADD CONSTRAINT FK_24A8EC257201D625 FOREIGN KEY (circuits_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_24A8EC257201D625 ON circuits (circuits_id)');
        $this->addSql('ALTER TABLE user ADD cars_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498702F506 FOREIGN KEY (cars_id) REFERENCES cars (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6498702F506 ON user (cars_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE cars_circuits');
        $this->addSql('ALTER TABLE circuits DROP FOREIGN KEY FK_24A8EC257201D625');
        $this->addSql('DROP INDEX IDX_24A8EC257201D625 ON circuits');
        $this->addSql('ALTER TABLE circuits DROP circuits_id');
        $this->addSql('ALTER TABLE schedule DROP FOREIGN KEY FK_5A3811FBA76ED395');
        $this->addSql('DROP INDEX IDX_5A3811FBA76ED395 ON schedule');
        $this->addSql('ALTER TABLE schedule DROP user_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498702F506');
        $this->addSql('DROP INDEX IDX_8D93D6498702F506 ON user');
        $this->addSql('ALTER TABLE user DROP cars_id');
    }
}
