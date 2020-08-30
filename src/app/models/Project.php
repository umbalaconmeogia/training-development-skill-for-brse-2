<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $remarks
 *
 * @property ProjectBusiness[] $projectBusinesses
 * @property ProjectUser[] $projectUsers
 * @property Term[] $terms
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['remarks'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'remarks' => 'Remarks',
        ];
    }

    /**
     * Gets query for [[ProjectBusinesses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectBusinesses()
    {
        return $this->hasMany(ProjectBusiness::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[ProjectUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectUsers()
    {
        return $this->hasMany(ProjectUser::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[Terms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTerms()
    {
        return $this->hasMany(Term::className(), ['project_id' => 'id']);
    }

    /**
     * Delete all child terms before delete this one.
     */
    // function beforeDelete()
    // {
    //     // Delete all term (that does not have parent term)
    //     foreach ($this->terms as $term) {
    //         if (!$term->parent_term_id) {
    //             $term->delete();
    //         }
    //     }
    //     return parent::beforeDelete();
    // }

    function delete()
    {
        foreach ($this->terms as $term) {
            if (!$term->parent_term_id) {
                $term->delete();
            }
        }
        parent::delete();
    }

    // function delete()
    // {
    //     Term::deleteAll(['project_id' => $this->id]);
    //     parent::delete();
    // }
}
