<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\db\Diseases;
use app\models\db\Courses;
use app\models\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

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
                'only'  => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow'   => true,
                        'roles'   => ['@'],
                    ],
                ],
            ],
            'verbs'  => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
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
            'error'   => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class'           => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
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
     * О клинике
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Врачебный коллектив
     *
     * @return string
     */
    public function actionMedicalStaff()
    {
        return $this->render('medical-staff');
    }

    /**
     * Заболевания
     *
     * @return string
     */
    public function actionDiseases()
    {
        return $this->render('diseases');
    }

    /**
     * Страница подробнее конерктного заболевания
     *
     * @return string
     */
    public function actionViewDisease()
    {
        $id = htmlspecialchars($_GET['id']);

        $data = Diseases::find()->where(['id' => $id])->one();

        return $this->render('view-disease', [
            'data' => $data,
        ]);
    }

    /**
     * Контакты
     *
     * @return string
     */
    public function actionContacts()
    {
        return $this->render('contacts');
    }

    
    /**
     * Обучение
     *
     * @return string
     */
    public function actionSchool()
    {
        $id = 1;

        $data = Courses::find()->where(['id' => $id])->one();

        return $this->render('school', [
            'data' => $data,
        ]);
    }

}
