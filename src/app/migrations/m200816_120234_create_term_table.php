<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%term}}`.
 */
class m200816_120234_create_term_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%term}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'language' => $this->string(2),
            'vocabulary' => $this->string(),
            'description' => $this->text(),
            'type' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%term}}');
    }
}
