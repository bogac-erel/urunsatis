<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Sipariş Verin';
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Lütfen sipariş vermek için aşağıdaki formu doldurunuz
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Adınız Soyadınız') ?>

                <?= $form->field($model, 'email')->label('E-posta Adresiniz') ?>

                <?= $form->field($model, 'subject')->label('Telefon Numaranız') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Adresiniz') ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])->label('Doğrulama Kodu') ?>

                <div class="form-group">
                    <?= Html::submitButton('Sipariş Ver', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
