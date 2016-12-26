<?php

use yii\helpers\Html;
$asset = \frontend\assets\AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\Siparis */

$this->title = "Siparişiniz Alınmıştır";

?>
<div class="sonuc-view">

<br>
<br>
    <h1 class="text-center">Teşekkür Ederiz</h1>

    <h2 class="text-center"><?= Html::encode($this->title) ?></h2>

    <div class="alert alert-infos">
        <h4 class="text-center">Sipariş Numaranız: <?=$id?></h4>

        <p class="text-center">Siparişiniz en kısa sürede işleme alınacak, ve tarafınıza bilgi verilecektir..</p>
    </div>
    <p class="text-center"><img src="<?= $asset->baseUrl ?>/img/anasag.png" class="img img-responsive center-block" alt="3 Adet"/></p>

</div>