<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $position
 * @property string $image
 * @property string $CV
 */
class Members extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'position', 'image', 'CV'], 'required'],
            [['file'], 'file'],
            [['name', 'surname', 'position', 'image', 'CV'], 'string', 'max' => 255],
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
            'position' => 'Position',
            'image' => 'Image',
            'CV' => 'Cv',
            'file' => 'Image',
        ];
    }

    /**
     * @inheritdoc
     * @return MembersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MembersQuery(get_called_class());
    }
}
