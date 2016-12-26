<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);


//echo "<pre>"; var_dump($this->params['site_settings']); die();
$site_settings = $this->params['site_settings'];
$asset = \frontend\assets\AppAsset::register($this);

?>



<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="<?=$site_settings->description?>" />

    <meta name="keywords" content="<?=$site_settings->keyword?>" />

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        //'brandLabel' => 'My Company',
        'brandLabel' => $site_settings->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    /*
    $menuItems = [
        ['label' => 'Anasayfa', 'url' => ['/site/index']],
        ['label' => 'Nedir?', 'url' => ['/site/nedir']],
        ['label' => 'Nasıl Kullanılır?', 'url' => ['/site/nasil']],
        ['label' => 'Kullanıcı Yorumları', 'url' => ['/site/yorumlar']],
        ['label' => 'Sipariş Ver', 'url' => ['/siparis?adet=1']],
    ];
    */
    $menuItems = [
        ['label' => 'Anasayfa', 'url' => ['/']],
        ['label' => 'Nedir?', 'url' => ['/site/nedir']],
        ['label' => 'Nasıl Kullanılır?', 'url' => ['/site/nasil']],
        ['label' => 'Kullanıcı Yorumları', 'url' => ['/site/yorumlar']],
        ['label' => 'Sipariş Ver', 'url' => ['siparis/index']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <?php if (Yii::$app->controller->action->id == "index" && Yii::$app->controller->id == "site") { ?>

    <div class="row" id="headerimage">

            <img src="<?= $asset->baseUrl ?>/img/anasayfa.jpg" class="img img-responsive" alt="Sizi arayalım"/>

    </div>

    <?php } ?>
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-right">&copy; <?=$site_settings->name?> <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
