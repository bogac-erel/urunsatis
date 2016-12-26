<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Yorum */

$this->title = "Yorum Görüntüle";
?>
<div class="yorum-view">
    <div class="col-sm-3 col-md-3 col-lg-3">
    <br>
    <?php include('../views/menu.php'); ?>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <h2><?= Html::encode($this->title) ?></h2>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ad',
            'sehir',
            'yorum:ntext',
        ],
    ]) ?>

    <p class="pull-right">
        <?= Html::a('Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Güncelle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>
    </div>
</div>
