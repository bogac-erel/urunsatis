<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Yorum */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yorum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sehir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yorum')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Oluştur' : 'Kaydet', ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
