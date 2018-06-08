# Kantinku - Kantin Kampus Udinus | Gladiator DOSCOM 2018
kantinku adalah sebuah aplikasi web base yang bertujuan untuk membuat sebuah market place sederhana menggunakan teknologi **PHP** dengan sebuah __framework__ **Laravel**, Aplikasi ini mempunyai beberapa fitur sebagai berikut :

#### User Guest
1. Pesan Menu
2. Melihat banyak Menu
3. etc

#### User Auth
1. Membuat Toko Online *hanya dengan membuat akun
2. Mengelola Menu Makanan/Minuman
3. Menambahkan Data Rekening (atasnama,no_rekening,jenis_rekening)
5. etc

## Development
### System Requirement
1. PHP 7.2
2. Apache Web Server
3. MySql
4. Laravel 5.6 Specification

> Cloning Project

pertama kalian harus meng-**clone** project terlebih dahulu, dan masuk ke Directory project

``` bash
git clone https://github.com/abas/kantinku.v2.git
cd kantinku.v2
```

> Prepare for Environment

kemudian siapkan file .env dengan cara menyalin file __.env-sample__ menjadi .**env** dengan command sebagai berikut

``` bash
cp .env-sample .env
```

> Configure Environment

kemudian setting koneksi ke database
> kalian harus terlebih dahulu memiliki database untuk aplikasi web ini, ex : `kantinku`

buka file .**env** menggunakan text editor favorit kalian, kemidian ubah pada bagian.env sebagai berikut 

```
DB_DATABASE={database_kalian}
DB_USERNAME={username.bd}
DB_PASSWORD={password.db}
```

jika sudah lakukan proses pengunduhan dependency laravel dari menggunakan `composer` dengan command sebagai berikut

``` bash
composer install
```

> Generating Key

setelah installai/pengunduhan dependency laravel selesai lakukan perintah dibawah untuk menggenerated kode. *kode akan tercantum di APP_KEY={generete_kode} di folder .**env**

``` bash
php artisan key:generate
```

> Database Migration

jika sudah melakukan generated key, kemudian lakukan migrasi database ke mysql,

``` bahs
php artisan migrate
```
maka jika kalian melihat database kalian tadi ex `kantinku` suah terbuat beberapa record

> Running Locally

untuk melihat hasil configurasi, kalian bisa menjalankan Web Apps ni dilocal server kalian, dengan format,
```
php artisan serve --port={port} --host=0.0.0.0
```
contoh : 
```
php artisan serve --port=4845 --host=0.0.0.0
```

kemudian coba akses ip_address pc kalian dan tambahi :{port}, untuk mengakses web apps ini
ex : 192.168.1.234:4845

### Sekian Terimakasih