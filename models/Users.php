<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $phone
 * @property string $email
 * @property string $description
 * @property string $reason
 * @property string $image
 * @property string $cv
 * @property string $position
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $cv_file;
    public $image_file;

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
            [['name', 'surname', 'phone', 'email', 'description', 'reason', 'image', 'cv', 'position'], 'required'],
            [['description', 'reason'], 'string'],
            [['cv_file', 'image_file'], 'file'],
            [['name', 'surname', 'phone', 'email', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'phone' => 'Phone',
            'email' => 'Email',
            'description' => 'Description',
            'reason' => 'Reason',
            'image' => 'Image',
            'cv' => 'Cv',
            'position' => 'Position',
            'cv_file' => 'Cv',
            'image_file' => 'Image'
        ];
    }
}
