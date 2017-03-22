<?php

namespace app\controllers;

use Yii;
use mPDF;
use app\models\Projects;
use app\models\Contracts;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //$rows = Yii::$app->db->createCommand('SELECT * FROM projects LIMIT 3')->queryAll();

        //$projects = projects::find()->all();
        //return $this->render('index');
        

        $limit = Yii::$app->db->createCommand('SELECT * FROM `projects` ORDER BY `projects`.`id` DESC LIMIT 3');

        $limitProvider = new ArrayDataProvider([
            'allModels' => $limit->queryAll(),
        ]);

        return $this->render('index',[
            'limitProvider' => $limitProvider,
        ]);

    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionHelp()
    {
        return $this->render('help');
    }
    public function actionContract()
    {
        $this->layout = false;

        //$contract = Yii::$app->db->createCommand('SELECT * FROM `contracts`');
        $model = new Contracts();

        
       
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                if($model->save()){

                 return $this->render('pdf',[
                'model' => $model,
                 ]);


                }
                // form inputs are valid, do something here   
            }
        }

        return $this->render('ContractForm', [
            'model' => $model,
        ]);
    }
    

    public function actionPdf()
    {
        $mpdf = new mPDF;
        $mpdf->SetImportUse();
        $mpdf->SetDocTemplate('contract2.pdf',true);
        $mpdf->WriteHTML('sample text');
        $mpdf->WriteText(5,5,'hey');
        $mpdf->AddPage();
        $mpdf->Output();
        exit;
    }

    public function actionDownload()
    {
        $path = Yii::getAlias('@webroot') . '/';   
        $file = $path . '/downloads/contract.docx';
        Yii::$app->response->sendFile($file);
       
    }
}
