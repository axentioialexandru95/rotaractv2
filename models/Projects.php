<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $name
 * @property string $date
 * @property string $image
 * @property string $body
 * @property string $status
 */
class Projects extends \yii\db\ActiveRecord
{

    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'date', 'image', 'body', 'status'], 'required'],
            [['date'], 'safe'],
            [['file'], 'file'],
            [['body', 'image', 'status'], 'string'],
            [['name', 'image'], 'string', 'max' => 255],
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
            'date' => 'Date',
            'body' => 'Body',
            'status' => 'Status',
            'file' => 'Image'
        ];
    }
}
