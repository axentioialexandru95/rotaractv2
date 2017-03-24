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
            [['name', 'surname', 'phone', 'email', 'description', 'reason', 'image_file', 'cv_file', 'position'], 'required'],
            [['description', 'reason'], 'string'],
            [['cv_file'], 'file', 'skipOnEmpty' => false],
            [['image_file'], 'file', 'skipOnEmpty' => false, 'maxSize' => 100* 20 * 1024 * 2],
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
            'name' => 'Nume',
            'surname' => 'Prenume',
            'phone' => 'Telefon',
            'email' => 'Email',
            'description' => 'Spune-ne cate ceva despre tine',
            'reason' => 'De ce vrei sa ni te alaturi ?',
            'image' => 'Imagine cu tine',
            'cv' => 'Cv-ul tau',
            'position' => 'Pozitie',
            'cv_file' => 'Cv-ul tau',
            'image_file' => 'O imagine cu tine'
        ];
    }
}
