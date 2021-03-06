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
class BackendUsers extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            ['email','email'],
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
    public function getAuthKey(){
        throw new \yii\base\NotSupportedException();
    }

    public function getId(){
        return $this->id;
    }

    public function validateAuthKey($authKey){
        throw new \yii\base\NotSupportedException();
    }

    public static function findIdentity($id){
        return self::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null){
        throw new \yii\base\NotSupportedException();
    }
    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }
    public function validatePassword($password){
        return $this->password === $password;
    }
}
