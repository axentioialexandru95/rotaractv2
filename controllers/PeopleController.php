<?php

namespace app\controllers;

use Yii;
use app\models\Members;
use app\models\MembersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class PeopleController extends Controller
{
   

    public function actionIndex()
    {
        $members = members::find()->all();


        return $this->render('index',['members'=>$members]);
    }

    public function actionInfo($id)
    {
        $this->layout = false;
                
        $model = Members::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException;
        }

        return $this->render('info', [
            'model' => $model,
        ]);

    }
            

}
