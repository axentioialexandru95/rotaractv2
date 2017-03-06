<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class RegisterForm extends ActiveRecord
{
    public $name;
    public $surname;
    public $phoneNumber;
    public $emailAddress;
    public $message;
    public $captcha;

    public static function tableName()
    {
        return '{{users}}';
    }

    public function rules()
    {
        return [
            [['name', 'surname', 'phoneNumber', 'emailAddress', 'message', 'captcha'], 'required'],
            [['name', 'surname'], 'string', 'max' => 100],
            //['phoneNumber', 'match', 'pattern' => '/^+?(\d+\s\-\_){5, 25}$/'],
            ['emailAddress', 'email'],
            ['captcha', 'captcha'],
            ['message', 'string', 'max' => 1500]
        ];
    }

    public function attributeLabels()
    {
        return[
            'name'=>'Nume',
            'surname'=>'Prenume',
            'phoneNumber'=>'Numar de telefon',
            'emailAddress'=>'Adresa de emai',
            'message'=>'Mesaj'
        ];
    }

}

?>
