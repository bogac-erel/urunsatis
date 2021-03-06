<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$asset = \frontend\assets\AppAsset::register($this);
$this->title = $urun->adi . ' Nasıl Kullanılır?';
?>
<div class="site-about">
    <div class="row">
        <h2><?=$urun->adi?> Nasıl Kullanılır?</h2>
        <hr>
        <div class="col-sm-7 col-md-7 col-lg-7">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="570" height="320" src="<?=$urun->video?>" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">

            <p class="text-justify"><?=$urun->nasil?></p>
        </div>
        <hr>
    </div>
    <hr>
        <div class="row">

            <div class="col-lg-4">
                <h2 class="text-center" id=#nedir>1 Adet <?=$urun->adi?></h2>

                <a href="/siparis/index">
                    <img src="<?= $asset->baseUrl ?>/img/sol.png" class="img img-responsive center-block" alt="1 Adet"/>
                </a>

                <p class="text-center" id="fiyat"><?=number_format($urun->tekfiyat,2)?> TL</p>

                <p class="text-center"><a class="btn btn-warning btn-lg" href="/siparis/index">1 Adet Sipariş Ver &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <h2 class="text-center">2 Adet <?=$urun->adi?></h2>

                <a href="/siparis/index?adet=2">
                    <img src="<?= $asset->baseUrl ?>/img/orta.png" class="img img-responsive center-block" alt="2 Adet"/>
                </a>

                <p class="text-center" id="fiyat"><?=number_format($urun->ikifiyat,2)?> TL</p>

                <p class="text-center"><a class="btn btn-warning btn-lg" href="/siparis/index?adet=2">2 Adet Sipariş Ver &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <h2 class="text-center">3 Adet <?=$urun->adi?></h2>

                <a href="/siparis/index?adet=3">
                    <img src="<?= $asset->baseUrl ?>/img/sag.png" class="img img-responsive center-block" alt="3 Adet"/>
                </a>

                <p class="text-center" id="fiyat"><?=number_format($urun->ucfiyat,2)?> TL</p>

                <p class="text-center"><a class="btn btn-warning btn-lg" href="/siparis/index?adet=3">3 Adet Sipariş Ver &raquo;</a></p>
            </div>

        </div>
</div>
