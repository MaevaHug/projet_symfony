<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220107113408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6BAF78705E237E06 ON ingredient (name)');
        $this->addSql('ALTER TABLE unity CHANGE name name VARCHAR(55) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9659D575E237E06 ON unity (name)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_6BAF78705E237E06 ON ingredient');
        $this->addSql('DROP INDEX UNIQ_9659D575E237E06 ON unity');
        $this->addSql('ALTER TABLE unity CHANGE name name VARCHAR(23) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
