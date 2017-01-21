<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\YorumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yorumlar';
?>
<div class="yorum-index">

    <div class="col-sm-3 col-md-3 col-lg-3">
    <br>
    <?php include('../views/menu.php'); ?>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <h2><?= Html::encode($this->title) ?></h2>
        <?php Pjax::begin(); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'summary'=>'',
                'columns' => [

                    'ad',
                    'sehir',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        <?php Pjax::end(); ?>
        <p class="pull-right">
            <?= Html::a('Yeni Yorum', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
</div>
