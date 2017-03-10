<?php

namespace app\controllers;

use Yii;
use app\models\Projects;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ArrayDataProvider;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class BlogController extends Controller
{
    
    public function actionIndex()
    {
        //$projects = projects::find()->all();

        $active = Yii::$app->db->createCommand('SELECT * FROM `projects` WHERE STATUS = \'active\'');
        $done = Yii::$app->db->createCommand('SELECT * FROM `projects` WHERE STATUS = \'done\'');

        $provider = new ArrayDataProvider([
            'allModels' => $active->queryAll(),
        ]);

        $secondprovider = new ArrayDataProvider([
            'allModels' => $done->queryAll(),
        ]);

        return $this->render('index',[
            'dataProvider' => $provider,
            'seconddataProvider' => $secondprovider,
        ]);

        
        
       // return $this->render('index',['projects'=>$projects]);
    }

}
