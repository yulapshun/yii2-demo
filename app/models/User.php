<?php

namespace app\models;
use Yii;

class User extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public static function primaryKey()
    {
        return ['id'];
    }

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'string', 'max' => 255],
            [['status'], 'integer'],
            [['email'], 'email']
        ];
    }

    public function fields() {
        return [
            'id' => 'id',
            'username' => 'username',
            'email' => 'email',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->password =
                Yii::$app->getSecurity()->generatePasswordHash($this->password);
            return true;
        } else {
            return false;
        }
    }
}
