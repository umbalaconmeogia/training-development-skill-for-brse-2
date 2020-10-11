<?php

use yii\db\Migration;

/**
 * Class m201011_083305_rename_table_user_to_system_user
 */
class m201011_083305_rename_table_user_to_system_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('user', 'system_user');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameTable('system_user', 'user');
    }
}
