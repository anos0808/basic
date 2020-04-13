<?php

namespace app\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $created
 * @property string $updated
 *
 * @property UserDetail $userDetail
 */
class UserTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['created', 'updated'], 'safe'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
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
            'email' => 'Email',
            'password' => 'Password',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }

    /**
     * Gets query for [[UserDetail]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserDetail()
    {
        return $this->hasOne(UserDetail::className(), ['id' => 'id']);
    }
    public function beforeSave($dirname) {

       if($dirname) {
            $this->created = new Expression('now()');
        }
        $this->updated = new Expression('now()');
        return true;
    }
}
