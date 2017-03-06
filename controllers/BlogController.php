<?php

namespace app\controllers;

use Yii;
use app\models\Projects;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class BlogController extends Controller
{

    public function actionIndex()
    {
        $projects = projects::find()->all();


        return $this->render('index',['projects'=>$projects]);
    }


}
