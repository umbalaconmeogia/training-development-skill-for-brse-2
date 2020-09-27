<?php

namespace app\models;

use Yii;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $password_hash;
    public $authKey;
    public $accessToken;

    private static $users = [
        '102' => [
            'id' => '102',
            'username' => 'qazw',
            'password_hash' => '$2y$13$bdS4jgH2MyAi1pqWLnlgkeg84DKSodUbPXUbuy.moYkqcTS.2xexu', // qazw123
            'authKey' => 'test100key123',
            'accessToken' => '100-token123',
        ],
        '100' => [
            'id' => '100',
            'username' => 'admin',
            // 'password' => 'admin',
            'password_hash' => '$2y$13$AxEDrcPPjQIyfFJhZKlQjesAdb8NxsMW6Bp/.i5gM5b.OPDesUz7i', // admin
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            // 'password' => 'demo',
            'password_hash' => '$2y$13$xaYSDou6kazglej3MZpJzuZNGGMi2EJSW.Oofv9oTeTI3Rc1VdeSO', // demo
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
        // return $this->password === $password;
    }
}
