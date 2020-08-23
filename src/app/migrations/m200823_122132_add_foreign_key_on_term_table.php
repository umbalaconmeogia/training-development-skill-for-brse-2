<?php

use yii\db\Migration;

/**
 * Class m200823_122132_add_foreign_key_on_term_table
 */
class m200823_122132_add_foreign_key_on_term_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('term-project_id-key', 'term', 'project_id', 'project', 'id');
        $this->addForeignKey('term-parent_term_id-key', 'term', 'parent_term_id', 'term', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('term-project_id-key', 'term');
        $this->dropForeignKey('term-parent_term_id-key', 'term');
    }
}
