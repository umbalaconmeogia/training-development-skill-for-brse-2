<?php

use yii\db\Migration;

/**
 * Class m200816_143003_add_remarks_column_on_project_table
 */
class m200816_143003_add_remarks_column_on_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('project', 'remarks', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('project', 'remarks');
    }
}
