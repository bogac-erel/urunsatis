<?php

use yii\helpers\Html;
$asset = \frontend\assets\AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\Siparis */

$this->title = 'Sipariş Verin';
?>
<div class="siparis-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>

    <div class="col-sm-4 col-md-4 col-lg-4">
        <h4 class="text-center"><?=$urun_adi?></h4>
        <p class="text-center"><img src="<?= $asset->baseUrl ?>/img/anasag.png" class="img img-responsive center-block" alt="3 Adet"/></p>
        <p class="text-center"><?=number_format($urun_fiyat,2)?> TL</p>
    </div>


        <?= $this->render('_form', [
            'model' => $model,
            'urun_adi' => $urun_adi,
            'urun_fiyat' =>$urun_fiyat,
        ]) ?>


</div>
