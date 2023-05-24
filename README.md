# PHP BPJS Bridging

Implementasi Laravel dari [PHP BPJS Bridging](https://github.com/SusuTawar/php-bpjs-bridging)

## Instalasi

Instalasi dilakukan menggunakan [Composer](https://getcomposer.org/). Pastikan Composer telah terpasang di environment Anda sebelum melanjutkan.

```bash
composer require susutawar/laravel-bpjs-bridging
```

jalan perintah berikut untuk membuat file konfigurasi di `config/bpjs-bridging.php`
lalu isi konfigurasi sesuai dengan environment Anda.

```bash
php artisan vendor:publish --provider="LaravelBpjsBridging\Providers\BpjsBridgingServiceProvider"
```

## Penggunaan

Untuk kemudahan penggunaan, package ini menyediakan facade sesuai modul yang tersedia.

```php
use LaravelBpjsBridging\Facades\Antrean;
```

semua method yang tersedia pada modul [PHP BPJS Bridging](https://github.com/SusuTawar/php-bpjs-bridging) dapat digunakan pada facade ini.

```php
$poli = Antrean::referensiPoli();
```

Implementasi modul lain akan sejalan dengan [PHP BPJS Bridging](https://github.com/SusuTawar/php-bpjs-bridging)

## Kontribusi

Your contribution is very welcome!
