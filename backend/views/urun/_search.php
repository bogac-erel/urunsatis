<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UrunSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urun-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'adi') ?>

    <?= $form->field($model, 'aciklama') ?>

    <?= $form->field($model, 'video') ?>

    <?= $form->field($model, 'nasil') ?>

    <?php // echo $form->field($model, 'tekfiyat') ?>

    <?php // echo $form->field($model, 'ikifiyat') ?>

    <?php // echo $form->field($model, 'ucfiyat') ?>

    <?php // echo $form->field($model, 'kargo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
