<?php

namespace frontend\controllers;

use Yii;
use common\models\Setting;
use common\models\Siparis;
use common\models\Banka;
use common\models\Iyzico;
use common\models\Urun;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

$setting = new Setting();
Yii::$app->view->params['site_settings'] = $setting->findOne(1);

/**
 * SiparisController implements the CRUD actions for Siparis model.
 */
class SiparisController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        if ($action->id == 'sonuc') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    /**
     * Creates a new Siparis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionIndex()
    {
        $urun_fiyat;

        $model = new Siparis();
        $urun_model = new Urun();
        $urun = $urun_model->findOne(1);

        $request = Yii::$app->request;
        $get = $request->get();
        $adet = $request->get('adet');

        $urun_adi = $adet.' Adet '.$urun->adi;


        if ($adet == "1") {
            $urun_fiyat = $urun->tekfiyat;
        } else if ($adet == "2") {
            $urun_fiyat = $urun->ikifiyat;
        } else if ($adet == "3") {
            $urun_fiyat = $urun->ucfiyat;
        } else {
            $urun_fiyat = $urun->tekfiyat;
        }

        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();
            //echo "<pre>";var_dump($post);die();
            $odeme_tipi = $post['Siparis']['odemetipi'];

            if ($odeme_tipi == "iyzico") {
                $model->save();

                $siparis = Siparis::findOne($model->id);
                $siparis->durum="Ödeme Bekleniyor";
                $siparis->save();

                return $this->redirect(['odeme',
                    'id' => $model->id,
                ]);
            } else if ($odeme_tipi == "Havale/EFT") {
                $model->save();

                $siparis = Siparis::findOne($model->id);
                $siparis->durum="Havale Bekleniyor";
                $siparis->save();

                $banka_bilgi = Banka::findOne(1);
                $hesap = $banka_bilgi->hesap;

                return $this->redirect(['view',
                    'id' => $model->id,
                    'hesap' => $hesap,
                ]);
            } else if ($odeme_tipi == "Kapıda Ödeme") {
                $model->save();

                $siparis = Siparis::findOne($model->id);
                $siparis->durum="Yeni";
                $siparis->save();

                return $this->redirect(['view',
                    'id' => $model->id,
                    'hesap' => '',
                ]);
            } else {
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'urun_adi'  => $urun_adi,
                'urun_fiyat' => $urun_fiyat,
            ]);
        }
    }

    /**
     * Displays a single Siparis model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $get = Yii::$app->request->get();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'hesap' => $get['hesap'],
        ]);

    }

    public function actionOdeme($id)
    {
        $siparis = new Siparis();
        $siparis_bilgi = $siparis->findOne($id);
        $iyzico = new Iyzico();
        $iyzico_keys = $iyzico->findOne(1);

        $base_url = "https://sandbox-api.iyzipay.com";
        if ($iyzico_keys->apikey) {
            if ($iyzico_keys->mode==0) {
                $base_url = "https://sandbox-api.iyzipay.com";
            } else {
                $base_url = "https://api.iyzipay.com";
            }
        }

        $options = new \Iyzipay\Options();
        $options->setApiKey($iyzico_keys->apikey);
        $options->setSecretKey($iyzico_keys->secret);
        $options->setBaseUrl($base_url);

        $customer = $siparis_bilgi['adsoyad'];
        $customer_id = mt_rand(5,mt_getrandmax());
        $phone = $siparis_bilgi['telefon'];
        $email = $siparis_bilgi['email'];
        $product = $siparis_bilgi['urun'];
        $price = number_format($siparis_bilgi['fiyat'],2);
        $city = $siparis_bilgi['sehir'];
        $address = $siparis_bilgi['adres'];
        $identityNum = mt_rand(1000000,mt_getrandmax());
        $basketId = $id;

        # create request class
        $request = new \Iyzipay\Request\CreateCheckoutFormInitializeRequest();
        $request->setLocale("tr");
        $request->setPrice($price);
        $request->setPaidPrice($price);
        $request->setCurrency(\Iyzipay\Model\Currency::TL);
        $request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
        $request->setCallbackUrl(Url::base() . "/siparis/sonuc"); // buraya dikkat
        $request->setEnabledInstallments(array(1));
        $request->setBasketId($id);

        $buyer = new \Iyzipay\Model\Buyer();
        $buyer->setId($customer_id);
        $buyer->setName($customer);
        $buyer->setSurname($customer);
        $buyer->setGsmNumber($phone);
        $buyer->setEmail($email);
        $buyer->setIdentityNumber($identityNum);
        $buyer->setRegistrationAddress($address);
        $buyer->setIp($_SERVER['REMOTE_ADDR']);
        $buyer->setCity($city);
        $buyer->setCountry("Turkey");
        $buyer->setZipCode("34732");
        $request->setBuyer($buyer);
        $shippingAddress = new \Iyzipay\Model\Address();
        $shippingAddress->setContactName($customer);
        $shippingAddress->setCity($city);
        $shippingAddress->setCountry("Turkey");
        $shippingAddress->setAddress($address);
        $request->setShippingAddress($shippingAddress);
        $billingAddress = new \Iyzipay\Model\Address();
        $billingAddress->setContactName($customer);
        $billingAddress->setCity($city);
        $billingAddress->setCountry("Turkey");
        $billingAddress->setAddress($address);
        $request->setBillingAddress($billingAddress);
        $basketItems = array();
        $firstBasketItem = new \Iyzipay\Model\BasketItem();
        $firstBasketItem->setId("1");
        $firstBasketItem->setName($product);
        $firstBasketItem->setCategory1("Ürünler");
        $firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
        $firstBasketItem->setPrice($price);
        $basketItems[0] = $firstBasketItem;
        $request->setBasketItems($basketItems);

        $script = \Iyzipay\Model\CheckoutFormInitialize::create($request, $options)->getCheckoutFormContent();

        return $this->render('odeme', [
            'model' => $this->findModel($id),
            'script' => $script,
        ]);

    }

    public function actionSonuc()
    {
        if (Yii::$app->request->post()) {
            $id=null;
            $post = Yii::$app->request->post();
            $token = $post['token'];

            $iyzico = new Iyzico();
            $iyzico_keys = $iyzico->findOne(1);

            $base_url = "https://sandbox-api.iyzipay.com";
            if ($iyzico_keys->mode == "0") {
            	$base_url = "https://sandbox-api.iyzipay.com";
            } else {
            	$base_url = "https://api.iyzipay.com";
            }

            $options = new \Iyzipay\Options();
            $options->setApiKey($iyzico_keys->apikey);
            $options->setSecretKey($iyzico_keys->secret);
            $options->setBaseUrl($base_url);

            $request = new \Iyzipay\Request\RetrieveCheckoutFormRequest();
            $request->setLocale(\Iyzipay\Model\Locale::TR);
            $request->setToken($token);

            $result = \Iyzipay\Model\CheckoutForm::retrieve(
                $request,
                $options
            )->getPaymentStatus();


            if ($result == "SUCCESS") {
                $id = \Iyzipay\Model\CheckoutForm::retrieve(
                    $request,
                    $options
                )->getBasketId();

                $siparis = Siparis::findOne($id);
                $siparis->durum="Yeni";
                $siparis->save();

                return $this->render('sonuc', [
                    'id' => $id,
                ]);
            }
        }
    }



    /**
     * Finds the Siparis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Siparis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Siparis::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
