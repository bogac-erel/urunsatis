<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Siparis */

$this->title = "Kredi Kartı ile Ödeme";
echo $script;
?>
<div class="siparis-view">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <div class="col-sm-4 col-md-4 col-lg-4">
        &nbsp;
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <?php if (Yii::$app->session->hasFlash('error')): ?>
            <div class="alert alert-danger">
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif; ?>
    <br>
        <div id="iyzipay-checkout-form" class="responsive"></div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        &nbsp;
    </div>


</div>