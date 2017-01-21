<?php
use kartik\sidenav\SideNav;

echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,
    'heading' => 'Menü',
    'items' => [
        [
            'url' => '/siparis',
            'label' => 'Siparişler',
            'icon' => 'home'
        ],
        [
            'url' => '/setting',
            'label' => 'Site Genel Ayarları',
            'icon' => 'tag'
        ],
        [
            'url' => '/urun',
            'label' => 'Ürün Ayarları',
            'icon' => 'compressed'
        ],
        [
            'url' => '/yorum',
            'label' => 'Yorumlar',
            'icon' => 'comment'
        ],
        [
            'label' => 'Ödeme Ayarları',
            'icon' => 'cog',
            'items' => [
                ['label' => 'Banka Havalesi', 'icon'=>'calendar', 'url'=>'/banka'],
                ['label' => 'iyzico', 'icon'=>'credit-card', 'url'=>'/iyzico'],
            ],
        ],
    ],
]);
?>