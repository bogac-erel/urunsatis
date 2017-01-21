<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SiparisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siparişler';

?>
<div class="siparis-index">

    <div class="col-sm-3 col-md-3 col-lg-3">
    <br>
    <?php include('../views/menu.php'); ?>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <div class="col-sm-9 col-md-9 col-lg-9">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php Pjax::begin(); ?>    <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'summary'=>'',
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'adsoyad',
                    'odemetipi',
                    'urun',
                    'fiyat',
                    // 'email:email',
                    'telefon',
                    'durum',
                    // 'adres:ntext',
                    // 'ozel:ntext',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        <?php Pjax::end(); ?>
        <p class="pull-right">
            <?= Html::a('Sipariş Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
