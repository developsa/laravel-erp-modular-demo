# Laravel ERP Demo Projesi
Bu proje, staj yaptığım şirkette bulunmayan ERP modüllerinin demolarını oluşturmak amacıyla geliştirilmiştir. Laravel framework'ü kullanılarak MVC mimarisi ile yapılandırılmıştır. Proje, kullanıcıların ERP modüllerini deneyimlemesine olanak tanır.

## Özellikler

- **Kullanıcı Girişi**: Kullanıcıların güvenli bir şekilde giriş yapabilmesi.
- **Yetkilendirme**: Farklı kullanıcı rolleri için erişim kontrolü.
- **Görev Oluşturma**: Kullanıcıların yeni görevler oluşturabilmesi.
- **Görev Takibi**: Görevlerin durumunu güncelleyebilme ve izleme imkanı.
- **QR Kod Üretimi**: Kullanıcıların özel QR kodlar oluşturabilmesi.
- **Bildirim Sistemi**: Kullanıcılara anlık bildirimlerin gönderilmesi.
- **Tedarikçi Yönetimi**: Tedarikçi bilgilerini ekleme, güncelleme ve silme işlemleri.


## Gereksinimler

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- MySQL veya diğer desteklenen veritabanları


## Kurulum

1. **Repo'yu Klonlayın**
   ```bash
   git clone https://github.com/developsa/laravel-erp-modular-demo.git
2. **Proje Klasörüne Geçin**
   ```bash
   cd erp-project
3. **Gerekli Paketleri Yükleyin**
   ```bash
   composer install
4. **Çevresel Değişkenleri Ayarlayın**
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=veritabani_adi
    DB_USERNAME=kullanici_adi
    DB_PASSWORD=sifre

5. **Veritabanı Migrate Edin**
   ```bash
   php artisan migrate
6. **Sunucuyu Başlatın**
   ```bash
   php artisan serve
