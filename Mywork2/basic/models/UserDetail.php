<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_detail".
 *
 * @property int $id
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $city
 * @property string|null $phone_number
 * @property string $created
 * @property string $updated
 * @property string $name
 *
 * @property User $id0
 */
class UserDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created', 'updated'], 'safe'],
            [['name'], 'required'],
            [['address'], 'string', 'max' => 255],
            [['postal_code'], 'string', 'max' => 20],
            [['city'], 'string', 'max' => 100],
            [['phone_number'], 'string', 'max' => 45],
            [['name'], 'string', 'max' => 250],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'postal_code' => 'Postal Code',
            'city' => 'City',
            'phone_number' => 'Phone Number',
            'created' => 'Created',
            'updated' => 'Updated',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
