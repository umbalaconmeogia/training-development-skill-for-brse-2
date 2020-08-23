<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "term".
 *
 * @property int $id
 * @property int|null $project_id
 * @property string|null $language
 * @property string|null $vocabulary
 * @property string|null $description
 * @property int|null $type
 * @property int|null $parent_term_id
 */
class Term extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'term';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'type', 'parent_term_id'], 'default', 'value' => null],
            [['project_id', 'type', 'parent_term_id'], 'integer'],
            [['description'], 'string'],
            [['language'], 'string', 'max' => 2],
            [['vocabulary'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'language' => 'Language',
            'vocabulary' => 'Vocabulary',
            'description' => 'Description',
            'type' => 'Type',
            'parent_term_id' => 'Parent Term ID',
        ];
    }
}
