<?php

use yii\db\Migration;

/**
 * Class m200816_142308_add_name_column_on_user_table
 */
class m200816_142308_add_name_column_on_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'name');
    }
}
