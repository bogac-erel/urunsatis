<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$asset = \frontend\assets\AppAsset::register($this);
$this->title = $urun->adi.'Kullanıcı Yorumları';
//echo "<pre>";print_r($yorumlar);die();
?>
<div class="site-about">
    <div class="row">
        <h2><?=$urun->adi?> Kullanıcı Yorumları</h2>
        <hr>
        <div class="col-sm-8 col-md-8 col-lg-8">

            <?php foreach($yorumlar as $yorum) { ?>
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <img class="img img-responsive" src="<?=$asset->baseUrl?>/img/kullanici.png" alt="Kullanıcı"/>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="text-justify">
                        <span class="mavi"><?=$yorum->ad?></span> <?=$yorum->yorum?>
                    </p>
                    <p class="text-left"><?=$yorum->sehir?></p>
                </div>
                <br>
            <?php } ?>

        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <a href="#">
            <br>
                <img src="<?= $asset->baseUrl ?>/img/anasag.png" class="img img-responsive center-block" alt="3 Adet"/>
            </a>
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
