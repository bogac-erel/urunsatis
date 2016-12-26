<?php
use kartik\sidenav\SideNav;

echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,
    'heading' => 'Menü',
    'items' => [
        [
            'url' => '/index.php?r=siparis',
            'label' => 'Siparişler',
            'icon' => 'home'
        ],
        [
            'url' => '/index.php?r=setting',
            'label' => 'Site Genel Ayarları',
            'icon' => 'tag'
        ],
        [
            'url' => '/index.php?r=urun',
            'label' => 'Ürün Ayarları',
            'icon' => 'compressed'
        ],
        [
            'url' => '/index.php?r=yorum',
            'label' => 'Yorumlar',
            'icon' => 'comment'
        ],
        [
            'label' => 'Ödeme Ayarları',
            'icon' => 'cog',
            'items' => [
                ['label' => 'Banka Havalesi', 'icon'=>'calendar', 'url'=>'/index.php?r=banka'],
                ['label' => 'iyzico', 'icon'=>'credit-card', 'url'=>'/index.php?r=iyzico'],
            ],
        ],
    ],
]);
?>