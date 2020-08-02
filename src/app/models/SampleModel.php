<?php

namespace app\models;

use yii\base\Model;

class SampleModel extends Model
{
    public $requiredField;
    public $doubleField;
    public $gender;
    public $stringField;
    public $dateField;
    public $emailField;
    public $password;
    public $notSafeField;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['requiredField', 'required'],
            [['gender', 'doubleField'], 'number'],
            ['gender', 'integer'],
            ['stringField', 'string', 'length' => [[4, 10]]],
            ['stringField', 'trim'],
            ['emailField', 'email'],
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * A password must
     * + Has at least 4 characters.
     * + Contains digital character.
     * + Contains alphabet character.
     * + Contains Capital and normal characters.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            print_r($attribute);
            print_r($params);
            die;
            // $user = $this->getUser();

            // if (!$user || !$user->validatePassword($this->password)) {
            //     $this->addError($attribute, 'Incorrect username or password.');
            // }
        }
    }
}
