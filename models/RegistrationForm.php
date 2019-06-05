<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 */
class RegistrationForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'confirm_password'], 'required'],
            [['username', 'email', 'password', 'confirm_password'], 'string', 'max' => 100],
            ['email', 'email'],
            [['password'], 'compare','compareAttribute' => 'confirm_password'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',
        ];
    }
}
