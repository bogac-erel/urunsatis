<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Urun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aciklama')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nasil')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'tekfiyat')->textInput() ?>

    <?= $form->field($model, 'ikifiyat')->textInput() ?>

    <?= $form->field($model, 'ucfiyat')->textInput() ?>

    <?= $form->field($model, 'kargo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Oluştur' : 'Kaydet', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
