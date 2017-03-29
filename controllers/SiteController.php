<?php

namespace app\controllers;

use Yii;
use mPDF;
use app\models\Contracts;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\ArrayDataProvider;


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
     *Contact
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
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Yii::$app->session->setFlash('contactFormSubmitted');
            
            Yii::$app->mailer->compose('contact')
            ->setFrom($model->email)
            ->setTo('axentioialexandru95@gmail.com')
            ->setSubject($model->subject)
            ->setTextBody(
                'You have a new mail from: '.$model->name . 'hey',
                'Subject: '.$model->subject,
                'Body: ' .$model->body,
                'hey'
            )
            ->send();
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

        $model = new Contracts();
       
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                if($model->save()){
                 return array(Yii::$app
                 ->runAction('site/pdf',[
                     'model' => $model,
                    ])
                 ->runAction('site/mail',[
                     'model' => $model,
                    ]));
                }
            }
        }

        return $this->render('ContractForm', [
            'model' => $model,
        ]);
    }
    

    public function actionPdf($model)
    {  
    
        // Input Info
        $company_id     = $model['id'];
        $company_name   = $model['company_name'];
        $company_address= $model['company_address'];
        $company_nr     = $model['company_nr'];
        $CUI            = $model['CUI'];
        $representative = $model['company_representative'];
        $function       = $model['representative_function'];
        $sum            = $model['payment'];
        $date           = date('Y-m-d');
        
        
        // Mpdf + template
        $mpdf = new mPDF;
        $mpdf->SetImportUse();
        $mpdf->SetDocTemplate('contract2.pdf',true);
        $mpdf->WriteHTML('');
        
        // Text First Page
        $mpdf->WriteText(93,54.5, ''.$company_id.'');
        $mpdf->WriteText(108,54.5,''.$date.'');
        $mpdf->WriteText(26,75, $company_name);
        $mpdf->WriteText(128,75, $company_address);
        $mpdf->WriteText(90,80, $company_nr);
        $mpdf->WriteText(150,80, $CUI);
        $mpdf->WriteText(68,84.5, $representative);
        $mpdf->WriteText(136,84.5, $function);
        $mpdf->WriteText(110,167.5, $sum .' '.'RON');
        // Text Second Page
        $mpdf->AddPage();
        $mpdf->WriteText(36,220, ''.$date.'');
        $mpdf->Output();

        return $this->actionMail($model);


    }

    public function actionDownload()
    {
        $path = Yii::getAlias('@webroot') . '/';   
        $file = $path . '/downloads/contract.docx';
        Yii::$app->response->sendFile($file);
       
    }

    public function actionMail($model)
    {

        $contractmail = [];

        $contractmail[0] = Yii::$app->mailer->compose()
            ->setFrom("rotaract@contact.com")
            ->setTo("gabrieldornianu@yahoo.com")
            ->setSubject("Inscriere Rotaract ")
            ->setTextBody(
                "Nume: "
                ."\nPrenume: "
                ."\nTelefon: "
                ."\nEmail: "
                ."\nDespre mine: "
                ."\nMotivul pentru care ma inscriu: "
                ."\nPozitia in cadrul proiectului: "
            );


        $contractmail[1] = Yii::$app->mailer->compose()
            ->setFrom("rotaract@contact.com")
            ->setTo("axentioialexandru95@gmail.com")
            ->setSubject("Your registration to Rotaract")
            ->setTextBody("Buna ".","
                ."\nMultimit ca te-ai inscris in proiectul Rotaract. Te vom contacta in cel mai scurt timp");

        Yii::$app->mailer->sendMultiple($contractmail);


    }
}
