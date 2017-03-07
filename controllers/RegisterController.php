<?php

namespace app\controllers;

use Yii;
use app\models\Register;

class RegisterController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            
        ];
    }

    public function actionRegister()
    {
        $model = new Register();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            $model->refresh();
            Yii::$app->getSession()->setFlash('success', 'You registred successfuly!');
        }
        return $this->render('register', ['model' => $model]);
    }

}
