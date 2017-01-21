# urunsatis
Tek Ürün Satış Scripti

Versiyon: 1.0.1

Kurulumu:

* Sitenizde veritabanını oluşturun
* tekurun.sql dosyasını phpmyadmin yardımı ile veritabanına import edin.
* FTP ile sitenize dosyaları yükleyin.
* Sitenizin ana dizinini, /frontend/web olacak şekilde değiştirin.
* Admin panel için yonetim.siteniz.com gibi bir subdomain oluşturup, /backend/web klasörünü ana dizin olacak şekilde yönlendirin.

Değişiklikler:
* Veritabanında iyzico tablosuna, "mode" sütunu eklenerek test ve canlı modu ayrımı eklendi.
* SiparisController.php dosyasında test ve canlı modu ile ilgili değişiklik yapıldı.
* Yorum yapan kullanıcı ikonu değiştirildi.
