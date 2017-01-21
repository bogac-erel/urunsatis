-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 21 Oca 2017, 08:16:27
-- Sunucu sürümü: 5.5.52
-- PHP Sürümü: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `tekurun`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banka`
--

CREATE TABLE IF NOT EXISTS `banka` (
  `id` int(2) NOT NULL COMMENT 'ID',
  `hesap` text COMMENT 'Hesap Bilgileri',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `banka`
--

INSERT INTO `banka` (`id`, `hesap`) VALUES
(1, '<p style="text-align: center;">Yapı Kredi</p><p style="text-align: center;">John Doe</p><p style="text-align: center;">IBAN: TR0000000000000000000000</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iyzico`
--

CREATE TABLE IF NOT EXISTS `iyzico` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `apikey` varchar(255) DEFAULT NULL COMMENT 'iyzico apikey',
  `secret` varchar(255) DEFAULT NULL COMMENT 'iyzico secret',
  `mode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `iyzico`
--

INSERT INTO `iyzico` (`id`, `apikey`, `secret`, `mode`) VALUES
(1, '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) CHARACTER SET latin1 NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1476829377),
('m130524_201442_init', 1476829380),
('m161018_223601_create_settings_table', 1476830486);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resim`
--

CREATE TABLE IF NOT EXISTS `resim` (
  `id` int(1) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `anasayfa` varchar(255) DEFAULT NULL COMMENT 'Anasayfa Resmi',
  `sol` varchar(255) DEFAULT NULL COMMENT 'Sol Resim',
  `orta` varchar(255) DEFAULT NULL COMMENT 'Orta Resim',
  `sag` varchar(255) DEFAULT NULL COMMENT 'Sağ Resim',
  `sagbanner` varchar(255) DEFAULT NULL COMMENT 'Anasayfa Sağ Banner',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `resim`
--

INSERT INTO `resim` (`id`, `anasayfa`, `sol`, `orta`, `sag`, `sagbanner`) VALUES
(1, 'anasayfa.png', 'sol.png', 'orta.png', 'sag.png', 'sagbanner.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) DEFAULT NULL COMMENT 'Site Adı',
  `title` varchar(255) DEFAULT NULL COMMENT 'Site Başlığı',
  `description` text COMMENT 'Site Açıklaması',
  `keyword` varchar(255) DEFAULT NULL COMMENT 'Anahtar Kelimeler',
  `telefon` varchar(255) DEFAULT NULL COMMENT 'Telefon Numarası',
  `kapida` tinyint(1) NOT NULL COMMENT 'Kapıda Ödeme',
  `banka` tinyint(1) NOT NULL COMMENT 'Banka Havalesi',
  `iyzico` tinyint(1) NOT NULL COMMENT 'iyzico',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `setting`
--

INSERT INTO `setting` (`id`, `name`, `title`, `description`, `keyword`, `telefon`, `kapida`, `banka`, `iyzico`) VALUES
(1, 'Kırışıklık Giderici', 'Kırışıklık Giderici', 'Tek ürün satış scripti, ürünlerimizi sitemizden alabilirsiniz.', 'tek ürün, satış, zayıflama, test', '02321111111', 1, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE IF NOT EXISTS `siparis` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `adsoyad` varchar(255) DEFAULT NULL COMMENT 'Ad Soyad',
  `odemetipi` varchar(255) DEFAULT NULL COMMENT 'Ödeme Tipi',
  `urun` varchar(255) NOT NULL,
  `fiyat` float(5,2) NOT NULL,
  `email` varchar(255) DEFAULT NULL COMMENT 'E-posta',
  `telefon` varchar(255) DEFAULT NULL COMMENT 'Telefon',
  `sehir` varchar(255) DEFAULT NULL COMMENT 'Şehir',
  `ilce` varchar(255) DEFAULT NULL COMMENT 'İlçe',
  `adres` text COMMENT 'Adres',
  `ozel` text COMMENT 'Özel Not',
  `durum` varchar(64) NOT NULL DEFAULT 'Yeni' COMMENT 'Sipariş Durumu',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `adsoyad`, `odemetipi`, `urun`, `fiyat`, `email`, `telefon`, `sehir`, `ilce`, `adres`, `ozel`, `durum`) VALUES
(71, 'Deneme Test', 'iyzico', ' Adet Kırışıklık Giderici', 39.90, 'a@b.com', '05421111111', 'İstanbul', NULL, 'deneme', '', 'Ödeme Bekleniyor');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE IF NOT EXISTS `urun` (
  `id` int(1) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `adi` varchar(255) DEFAULT NULL COMMENT 'Ürün Adı',
  `aciklama` text COMMENT 'Ürün Açıklaması',
  `video` varchar(255) DEFAULT NULL COMMENT 'Video URL',
  `nasil` text COMMENT 'Nasıl Kullanılır?',
  `tekfiyat` float(5,2) DEFAULT NULL COMMENT 'Tek Ürün Fiyatı',
  `ikifiyat` float(5,2) DEFAULT NULL COMMENT 'İki Ürün Fiyatı',
  `ucfiyat` float(5,2) DEFAULT NULL COMMENT 'Üç Ürün Fiyatı',
  `kargo` float(5,2) DEFAULT NULL COMMENT 'Kargo Ücreti',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`id`, `adi`, `aciklama`, `video`, `nasil`, `tekfiyat`, `ikifiyat`, `ucfiyat`, `kargo`) VALUES
(1, 'Kırışıklık Giderici', '<p>Cildindeki siyah noktalardan rahatsızlık duyanlar için ideal ürünler arasında yer alıyor.<strong>Tek ürün satış sitesi</strong> Limon asidi ile zenginleştirilmiş olan bu bantların sadece burun için olanlarını bulabileceğiniz gibi wordpress tek sayfa ürün satış teması T bölgesi dediğimiz burun, alın ve çene için olanlarını da bulabilirsiniz. Tek ürün satış sitesi bunlar sayesinde cildinizdeki gözeneklerde biriken kir ve yağdan 15 dakika içerisinde kurtulabilmeniz mümkün olacaktır.</p><p>Siyah Nokta Kremi su ile aktif hale gelmektedir. Yıkadığınız yüzünüzü kurulamadan kullanacağınız bu bantlar sayesinde cildinizin derinlemesine temizlendiğini görebilirsiniz. Kullanımı da oldukça kolay olması sebebi ile bu konuyla ilgili sıkıntı yaşayan kişilerin rahatlıkla kullanabileceği ürünler arasında yer alır.</p>', 'http://www.youtube.com/embed/qva72Tn07io', '<p>Ürün ve yanak bölgesinde meydana gelen siyah noktaları gidermek üzere geliştirilen bu kremler, cilt ılık suyla temizlendikten sonra uygulanmalıdır. Cilt ılık suyla yumuşatıldıktan sonra uygulanan krem 10 dakika bekletildikten sonra temizlenmelidir. Tek Ürün Scpirt Yatmadan önce uygulanan krem sürme işlemi gece boyunca cildin yenilenmesini sağlayacaktır.</p><p>Siyah nokta kremi sürmeden önce buhar maskesi uygulayarak cildinizdeki gözeneklerin yumuşamasını sağlayabilirsiniz. Papatya bitkisini kaynatıp onun suyu ile buhar maskesi uygulamanız daha etkili olacaktır. Buhar maskesi sayesinde krem sürdükten sonra siyah noktalar daha kolay temizlenecektir.</p><p>Siyah nokta temizleme özellikli kremlerin bazıları peeling etkilidir. İçinde tanecikler bulunan bu kremler, cildi sivilceye yatkın kişiler tarafından kullanılmamalıdır. Peeling etkili kremler, sivilcelerin çoğalmasına neden olabilmektedir.</p>', 39.90, 59.90, 69.90, 5.00);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ad7MOs6xAdCCNr7lySdxAEbJIPDwCPMo', '$2y$13$J41TrnbJ7xkqb/XlOsyLwu7YngObk.EGjnqEgh7Nh9DJmv0Lafy.i', NULL, 'admin@example.com', 10, 1476829726, 1476829726);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE IF NOT EXISTS `yorum` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ad` varchar(255) DEFAULT NULL COMMENT 'Ad Soyad',
  `sehir` varchar(255) DEFAULT NULL COMMENT 'Şehir',
  `yorum` text COMMENT 'Yorum',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `yorum`
--

INSERT INTO `yorum` (`id`, `ad`, `sehir`, `yorum`) VALUES
(1, 'Şehnaz K.', 'İstanbul', 'Çok güzel bir ürün. Kullanmaya başladığım ilk günden itibaren faydasını gördüm.'),
(2, 'Melis C.', 'Ankara', 'Ürün 1 gün içerisinde bana ulaştı. Hemen etkisini gösterdi. Çok memnunum, herkese tavsiye ederim.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
