<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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
    
    public function actionSearch()
    {
       echo id;
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {    
        if (Yii::$app->request->post('submit')==='my_value') {
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML('<p>Angebot/Auftrag</p>');$mpdf->SetFontSize(200,5);
            $mpdf->SetTitle('Angebot/Auftrag');
            $mpdf->Image('https://cloudstock.io/wp-content/uploads/2018/06/Cloudstock_Logo-1.png', 130, 0, 50, 40, 'png', '', true, false);
            $mpdf->Output();
            exit;
            
        } 

        return $this->render('index'
       );
    }

    /**
     * Login action.
     *
     * @return Response|string
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

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionPdf()
    {
        echo "<script type='text/javascript'>alert('1');</script>";
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<p>Angebot/Auftrag</p>');$mpdf->SetFontSize(200,5);
         $mpdf->Image('https://cloudstock.io/wp-content/uploads/2018/06/Cloudstock_Logo-1.png', 130, 0, 50, 40, 'png', '', true, false);
        $mpdf->AddPage();
        
        $mpdf->WriteHTML('<p></p>');
        $mpdf->Text(10, 5, "Ich ermächtige die Cloudstock GmbH, Zahlungen von meinem Konto mittels Lastschrift einzuziehen.Zugleich");
        $mpdf->Text(10, 10, "Weise ich mein Kreditinstitut an, die von der softwerft GmbH auf mein Konto gezogenen Lastschriften");
        $mpdf->Text(10, 15, "Einzulösen. Hinweis: Ich kann innerhalb von acht Wochen, beginnend mit dem Belastungsdatum, die Erstattung");
        $mpdf->Text(10, 20, "Des belasteten Betrages verlangen. Es gelten dabei die mit meinem Kreditinstitut vereinbarten Bedingungen.");
        $mpdf->Text(10,25, "Die erste monatliche Rate sowohl die Einmalkosten sind frühestens mit der Fertigstellung des Systems fällig.");
        $mpdf->SetLineWidth(50);
        $mpdf->Text(10,35, "Hiermit erteile ich den oberstehenden Auftrag und erkläre mich mit den Nutzungsbedingungen der");
        $mpdf->Text(10,40, "Cloudstock GmbH einverstanden. ");
        $mpdf->Text(10,54, "__________________________________________");
        $mpdf->Text(10,60, "Firma");
        $mpdf->Text(100,54, "__________________________________________");
        $mpdf->Text(100,60, "Kreditinstitut");
        $mpdf->Text(10,70, "__________________________________________");
        $mpdf->Text(10,75, "Strasse");
        $mpdf->Text(100,70, "__________________________________________");
        $mpdf->Text(100,75, "IBAN");
        $mpdf->Text(10,86, "__________________________________________");
        $mpdf->Text(10,91, "PLZ/Ort");
        $mpdf->Text(100,86, "__________________________________________");
        $mpdf->Text(100,91, "BIC");
        
        $mpdf->Text(10,110, "__________________________________________");
        $mpdf->Text(10,115, "Gewünschter Nutzungsbeginn");
        
        $mpdf->Text(10,140, "__________________________________________");
        $mpdf->Text(10,145, "Ort, Datum");
        
        $mpdf->Text(100,140, "__________________________________________");
        $mpdf->Text(100,145, "Unterschrift");
        
        $mpdf->Text(100,180, "__________________________________________");
        $mpdf->Text(100,185, "Name in Druckbuchstaben");
        
        $mpdf->Text(10,260, "CloudStock GmbH");
        $mpdf->Text(10,265, "Am Sandtorkai 54");
        $mpdf->Text(10,270, "DE-20457 Hamburg");
        
        $mpdf->Text(120,260, "CloudStock GmbH");
        $mpdf->Text(120,265, "Am Sandtorkai 54");
        $mpdf->Text(120,270, "DE-20457 Hamburg");
      
        
        $mpdf->Output();

        exit;
    }
    /**
     * Displays contact page.
     *
     * @return Response|string
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
}
