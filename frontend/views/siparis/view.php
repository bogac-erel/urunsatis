<?php

use yii\helpers\Html;
$asset = \frontend\assets\AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\Siparis */

$this->title = "Siparişiniz Alınmıştır";

?>
<div class="siparis-view">

<br>
<br>

    <h1 class="text-center">Teşekkür Ederiz</h1>

    <h2 class="text-center"><?= Html::encode($this->title) ?></h2>

    <div class="alert alert-infos">
        <h4 class="text-center">Sipariş Numaranız: <?=$model->id?></h4>

<?php if ($hesap != '') { ?>
        <div class="alert alert-info">
            <p class="text-center">Aşağıdaki banka hesabımıza ödeme yaptığınızda, sipariş numaranız ile bize bilgi veriniz.</p>
            <p class="text-center"><?=$hesap?></p>
        </div>
<?php } ?>

        <p class="text-center">Siparişiniz en kısa sürede işleme alınacak, ve tarafınıza bilgi verilecektir..</p>
    </div>
    <p class="text-center"><img src="<?= $asset->baseUrl ?>/img/anasag.png" class="img img-responsive center-block" alt="3 Adet"/></p>

</div>
