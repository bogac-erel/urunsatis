<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Resim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anasayfa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sagbanner')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Oluştur' : 'Kaydet', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
