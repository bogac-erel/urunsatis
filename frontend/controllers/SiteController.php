<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Setting;
use common\models\Urun;
use common\models\Yorum;
use frontend\models\ContactForm;

$site_adres = Yii::$app->params['site_adres'];
if ($site_adres != "http://tekurun.app") {
    die();
}

$setting = new Setting();
Yii::$app->view->params['site_settings'] = $setting->findOne(1);

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

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
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Urun();
        $urun = $model->findOne(1);

        return $this->render('index', [
            'urun' => $urun,
        ]);
    }

    /**
     * Displays nedir page.
     *
     * @return mixed
     */
    public function actionNedir()
    {
        $model = new Urun();
        $urun = $model->findOne(1);

        return $this->render('nedir', [
            'urun' => $urun,
        ]);
    }

    /**
     * Displays nasil page.
     *
     * @return mixed
     */
    public function actionNasil()
    {
        $model = new Urun();
        $urun = $model->findOne(1);

        return $this->render('nasil', [
            'urun' => $urun,
        ]);
    }

    /**
     * Displays yorumlar page.
     *
     * @return mixed
     */
    public function actionYorumlar()
    {
        $modelyorum = new Yorum();
        $yorumlar = $modelyorum->find()->all();

        $modelurun = new Urun();
        $urun = $modelurun->findOne(1);

        return $this->render('yorumlar', [
            'yorumlar' => $yorumlar,
            'urun' => $urun,
        ]);
    }
}
