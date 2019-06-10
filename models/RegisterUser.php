<?php

namespace app\models;

use Yii;

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
class RegisterUser extends \yii\db\ActiveRecord
{
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
            [['firstName', 'lastName', 'username', 'email', 'password'], 'required'],
            [['firstName', 'lastName', 'username', 'email', 'password'], 'string', 'max' => 50],
            ['email','email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }
}
