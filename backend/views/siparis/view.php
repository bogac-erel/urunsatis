<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Siparis */

$this->title = "Sipariş #".$model->id;
?>
<div class="siparis-view">

    <div class="col-sm-3 col-md-3 col-lg-3">
        <br>
        <?php include('../views/menu.php'); ?>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'adsoyad',
            'odemetipi',
            'urun',
            'fiyat',
            'email:email',
            'telefon',
            'sehir',
            'adres:ntext',
            'ozel:ntext',
            'durum',
        ],
    ]) ?>
    <p class="pull-right">
        <?= Html::a('Güncelle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Siparişi silmek istediğinize emin misiniz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    </div>

</div>
