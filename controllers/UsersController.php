<?php

namespace app\controllers;

use Yii;
use app\models\users;
use yii\web\UploadedFile;

class UsersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionUsers()

    {
        $model = new Users();
        if ($model->load(Yii::$app->request->post())) {
            $model->cv_file = UploadedFile::getInstance($model, 'cv_file');
            $model->image_file = UploadedFile::getInstance($model, 'image_file');
            if($model->validate()){
                $model->cv_file->saveAs('uploads/'.$model->cv_file->baseName.'.'.$model->cv_file->extension);
                $model->image_file->saveAs('uploads/'.$model->image_file->baseName.'.'.$model->image_file->extension);
                $model->cv = 'uploads/'.$model->cv_file->baseName.'.'.$model->cv_file->extension;
                $model->image = 'uploads/'.$model->image_file->baseName.'.'.$model->image_file->extension;
                $model->save(false);
                $this->refresh();
            }
        }
        return $this->render('users', [
            'model' => $model,
        ]);
    }

}
