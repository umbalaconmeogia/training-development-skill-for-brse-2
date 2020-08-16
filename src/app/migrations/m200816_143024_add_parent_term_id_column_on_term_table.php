<?php

use yii\db\Migration;

/**
 * Class m200816_143024_add_parent_term_id_column_on_term_table
 */
class m200816_143024_add_parent_term_id_column_on_term_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('term', 'parent_term_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('term', 'parent_term_id');
    }
}
