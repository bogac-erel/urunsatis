<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Siparis */

$this->title = 'Sipariş Güncelle';
?>
<div class="siparis-update">

    <div class="col-sm-3 col-md-3 col-lg-3">
        <br>
        <?php include('../views/menu.php'); ?>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
