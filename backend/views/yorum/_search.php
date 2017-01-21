<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\YorumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yorum-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ad') ?>

    <?= $form->field($model, 'sehir') ?>

    <?= $form->field($model, 'yorum') ?>

    <div class="form-group">
        <?= Html::submitButton('Ara', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
