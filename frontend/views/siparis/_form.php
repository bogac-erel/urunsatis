<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Siparis */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="siparis-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-sm-4 col-md-4 col-lg-4">

    <?= $form->field($model, 'adsoyad')->textInput(['maxlength' => true])->label('Adınız Soyadınız') ?>

    <?= $form->field($model, 'telefon')->textInput(['maxlength' => true])->label('Telefon Numaranız') ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('E-posta Adresiniz') ?>

    <?= $form->field($model, 'urun')->hiddenInput(['value'=> $urun_adi])->label(false); ?>

    <?= $form->field($model, 'fiyat')->hiddenInput(['value'=> $urun_fiyat])->label(false); ?>

    <?= $form->field($model, 'sehir')->dropDownList([
            'İstanbul' => 'İstanbul',
            'Ankara' => 'Ankara',
            'İzmir' => 'İzmir',
    ]); ?>

    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">

    <?= $form->field($model, 'adres')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'ozel')->textarea(['rows' => 3])->label("(Varsa) Özel Notunuz") ?>

    <?= $form->field($model, 'odemetipi')->dropDownList([
            'iyzico' => 'Kredi Kartı ile Ödeme',
            'Kapıda Ödeme' => 'Kapıda Ödeme',
            'Havale/EFT' => 'Havale/EFT ile Ödeme',
    ]); ?>

    <?= $form->field($model, 'durum')->hiddenInput(['value'=> "Başarısız"])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Siparişi Oluştur' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary']) ?>
    </div>

    </div>
    <?php ActiveForm::end(); ?>

</div>
