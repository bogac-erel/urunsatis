<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SiparisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siparis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'adsoyad') ?>

    <?= $form->field($model, 'odemetipi') ?>

    <?= $form->field($model, 'urun') ?>

    <?= $form->field($model, 'fiyat') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telefon') ?>

    <?php // echo $form->field($model, 'sehir') ?>

    <?php // echo $form->field($model, 'ilce') ?>

    <?php // echo $form->field($model, 'adres') ?>

    <?php // echo $form->field($model, 'ozel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
