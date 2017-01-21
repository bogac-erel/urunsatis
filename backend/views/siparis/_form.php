<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Siparis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siparis-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adsoyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'odemetipi')->dropDownList([
            'Kapıda Ödeme' => 'Kapıda Ödeme',
            'Havale/EFT' => 'Havale/EFT',
            'iyzico' => 'iyzico',
    ]); ?>

    <?= $form->field($model, 'urun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fiyat')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sehir')->dropDownList([
            'İstanbul' => 'İstanbul',
            'Ankara' => 'Ankara',
            'İzmir' => 'İzmir',
    ]); ?>

    <?= $form->field($model, 'adres')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ozel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'durum')->dropDownList([
            'Başarısız' => 'Başarısız',
            'Yeni' => 'Yeni',
            'İşleniyor' => 'İşleniyor',
            'Kargoya Verildi' => 'Kargoya Verildi',
            'Tamamlandı' => 'Tamamlandı',
            'İptal' => 'İptal',
            'İade' => 'İade',
            'Ödeme Bekleniyor' => 'Ödeme Bekleniyor',
            'Havale Bekleniyor' => 'Havale Bekleniyor',
            'Havale Alındı' => 'Havale Alındı',
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Oluştur' : 'Güncelle', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
