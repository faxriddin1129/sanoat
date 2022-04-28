<?php

namespace frontend\controllers;

use frontend\models\Cate;
use frontend\models\News;
use frontend\models\Production;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;


class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'views' ,'error','signup','index','hisobot','hududiy','contact','news','new','category','cate','cates'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout','add','profil'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout'=>'navbar'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'navbar';
        return $this->render('index');
    }

    public function actionHududiy()
    {
        $this->layout = 'map';
        return $this->render('hudud');
    }

    public function actionHisobot()
    {
        $this->layout = 'navbar';
        return $this->render('hisobot');
    }


    public function actionLogin()
    {
        $this->layout = 'navbar';
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


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionContact()
    {
        $this->layout = 'navbar';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->_save()) {
                Yii::$app->session->setFlash('success', 'Mofaqqiyatli yuborildi!');
                return $this->redirect('index');
            }
            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }


    public function actionNews()
    {
        $this->layout = 'navbar';
        $data = News::find()->where(['status'=>1])->all();
        return $this->render('news',compact('data'));
    }

    public function actionProfil()
    {
        $this->layout = 'navbar';
        return $this->render('profil');
    }

    public function actionNew($id)
    {
        $this->layout = 'navbar';
        $data = News::findOne($id);
        return $this->render('new',compact('data'));
    }


    public function actionCates($category_id)
    {
//        if(Yii::$app->request->isAjax){
            $this->layout = false;
            Yii::$app->response->format = 'json';
            return Cate::findAll(['category_id' => $category_id]);
//        }
//        return null;
    }


    public function actionAdd()
    {
        $this->layout = 'navbar';
        $model = new Production();

        if (Yii::$app->request->isPost){
            if ($model->load(Yii::$app->request->post()) && $model->csave()){
                Yii::$app->session->setFlash('success','Mofaqqiyatli saqlandi!');
                return $this->redirect('/site/profil');
            }
            Yii::$app->session->setFlash('danger','Uzur hatolik qayta urinib ko`ring!');
            return $this->render('add',compact('model'));
        }

        return $this->render('add',compact('model'));
    }


    public function actionCategory()
    {
        $this->layout = 'navbar';
        return $this->render('category');
    }


    public function actionCate($category_id = null, $cate_id = null )
    {
        $this->layout = 'navbar';
        $model = New Cate();

        if (Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            $category_idPost = $data['Cate']['category_id'];
            $cate_idPost = $data['Cate']['cate_id'];
            return $this->render('cate',['category_id'=>$category_idPost,'cate_id'=>$cate_idPost,'model'=>$model]);
        }

        return $this->render('cate',compact('category_id', 'cate_id', 'model'));
    }


    public function actionViews($id)
    {
        $data = Production::findOne($id);
        $this->layout = 'navbar';
        return $this->render('views',compact('data'));
    }


    public function actionSignup()
    {
        $this->layout = 'navbar';
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Mofaqqiyatli ro`yxatdan o\'tdingiz! Iltimos admin tasdiqlashini kuting!');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }


}
