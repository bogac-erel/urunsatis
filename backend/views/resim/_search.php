<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ResimSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'anasayfa') ?>

    <?= $form->field($model, 'sol') ?>

    <?= $form->field($model, 'orta') ?>

    <?= $form->field($model, 'sag') ?>

    <?php // echo $form->field($model, 'sagbanner') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
