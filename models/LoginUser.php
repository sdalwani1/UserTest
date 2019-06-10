<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "backend_user".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $username
 * @property string $email
 * @property string $password
 */
class LoginUser extends \yii\db\ActiveRecord
{
    private $_user = false;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'backend_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['password','validatePassword'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    // public function attributeLabels()
    // {
    //     return [
    //         'id' => 'ID',
    //         'firstName' => 'First Name',
    //         'lastName' => 'Last Name',
    //         'username' => 'Username',
    //         'email' => 'Email',
    //         'password' => 'Password',
    //     ];
    // }
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = BackendUsers::findByUsername($this->username);
        }
        return $this->_user;
    }
}

