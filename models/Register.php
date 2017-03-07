<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $name
 * @property string $surname
 * @property string $phoneNumber
 * @property string $emailAddress
 * @property string $message
 */
class Register extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'phoneNumber', 'emailAddress', 'message'], 'required'],
            [['message'], 'string'],
            [['name', 'surname', 'phoneNumber', 'emailAddress'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'surname' => 'Surname',
            'phoneNumber' => 'Phone Number',
            'emailAddress' => 'Email Address',
            'message' => 'Message',
        ];
    }
}
