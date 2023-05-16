<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230515133547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exemplaire DROP FOREIGN KEY FK_5EF83C923256915B');
        $this->addSql('DROP INDEX IDX_5EF83C923256915B ON exemplaire');
        $this->addSql('ALTER TABLE exemplaire DROP relation_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exemplaire ADD relation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE exemplaire ADD CONSTRAINT FK_5EF83C923256915B FOREIGN KEY (relation_id) REFERENCES livre (id)');
        $this->addSql('CREATE INDEX IDX_5EF83C923256915B ON exemplaire (relation_id)');
    }
}
