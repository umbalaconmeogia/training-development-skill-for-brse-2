<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

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
 *
 * @property Project $project
 * @property Term $parentTerm
 * @property Term[] $childTerms
 *
 * @property string $projectName
 * @property string $parentTermVocabulary
 * @property string $typeStr
 */
class Term extends \yii\db\ActiveRecord
{
    const TYPE_PROJECT_TERM = 1;
    const TYPE_ADDITIONAL_TERM = 2;
    const TYPE_OTHER = 3;

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
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['parent_term_id'], 'exist', 'skipOnError' => true, 'targetClass' => Term::className(), 'targetAttribute' => ['parent_term_id' => 'id']],
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
            'typeStr' => 'Type',
        ];
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * Gets query for [[ParentTerm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParentTerm()
    {
        return $this->hasOne(Term::className(), ['id' => 'parent_term_id']);
    }

    /**
     * Gets query for [[Terms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChildTerms()
    {
        return $this->hasMany(Term::className(), ['parent_term_id' => 'id']);
    }

    /**
     * Get project name of this term.
     * @return string
     */
    public function getProjectName()
    {
        return $this->project->name;
    }

    /**
     * Get japanese word of this translated term.
     * @return string
     */
    public function getParentTermVocabulary()
    {
        // if ($this->parent_term_id) {
        //     return $this->parentTerm->vocabulary;
        // } else {
        //     return NULL;
        // }
        return $this->parent_term_id ? $this->parentTerm->vocabulary : NULL;
    }

    /**
     * @return string[]
     */
    public static function typeOptionArr()
    {
        // [1 => '案件の用語', 2 => '追加用語']
        return [
            self::TYPE_PROJECT_TERM => '案件の用語',
            self::TYPE_ADDITIONAL_TERM => '追加用語',
            self::TYPE_OTHER => 'その他',
        ];
    }

    /**
     * Property $typeStr
     * @return string
     */
    public function getTypeStr()
    {
        // return self::typeOptionArr()[$this->type];
        return ArrayHelper::getValue(self::typeOptionArr(), $this->type);
    }

    /**
     * Delete all child terms before delete this one.
     */
    function beforeDelete()
    {
        foreach ($this->childTerms as $term) {
            $term->delete();
        }
        return parent::beforeDelete();
    }
}
