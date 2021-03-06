<?php

use Phinx\Migration\AbstractMigration;

class AddTypeFieldToPackages extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = <<<HEREDOC
        SET FOREIGN_KEY_CHECKS = 0;
ALTER TABLE `packages`
  ADD COLUMN `type` TINYINT UNSIGNED DEFAULT 0  NOT NULL AFTER `destinationId`;
  SET FOREIGN_KEY_CHECKS = 1;
HEREDOC;
        $this->query($sql);

    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $sql = <<<HEREDOC
        SET FOREIGN_KEY_CHECKS = 0;
ALTER TABLE `packages`
  DROP COLUMN `type`;
  SET FOREIGN_KEY_CHECKS = 1;
HEREDOC;

    }
}