<div align="center">
<h1>DPMPTSP Lamongan</h1>
</div>

# About DPMPTSP Lamongan
Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP) Lamongan menghadirkan sebuah platform digital yang memudahkan masyarakat dalam menyampaikan keluhan maupun saran secara langsung kepada pemerintah daerah. Aplikasi ini dikembangkan untuk mempercepat, mempermudah, serta meningkatkan transparansi komunikasi antara warga dan pemerintah. Melalui aplikasi ini, masyarakat dapat menyampaikan pengaduan kapan saja dan di mana saja, memantau status pengaduan secara real-time, serta memperoleh tanggapan langsung dari pihak berwenang. Dengan adanya inovasi ini, diharapkan partisipasi masyarakat dalam membangun daerah dapat semakin aktif, transparan, dan terorganisir.


## Requirements
<a href="https://laravel.com/docs/10.x/releases"><img src="https://img.shields.io/badge/laravel-v10-blue" alt="version laravel"></a>
<a href="https://www.php.net/releases/8.2/en.php"><img src="https://img.shields.io/badge/PHP-v8.2.4-blue" alt="version php"></a>
<a href="https://nodejs.org/en/blog/release/v10.1.0"><img src="https://img.shields.io/badge/NPM-v10.1.0-green" alt="version php"></a>


## Setup
- buka direktori project di terminal anda.
- ketikan command di terminal :
  ```bash
  copy .env.example .env
  ```
  untuk Linuk, ketikan command :
  ```bash
  cp .env.example .env
  ```
- instal package-package di laravel, ketikan command :
  ```bash
  composer install
  ```
- menginstal npm UI di website, ketikan command :
  ```bash
  npm install
  ```
### Command Public Package (Wajib)
- menjalankan storage di website, ketikan command :
  ```bash
  php artisan storage:link
  ```
  
### Pengaturan untuk Database
Buatlah nama database baru, kemudian sesuaikan nama database, username, dan password pada file .env. Setelah itu, import file bernama skripsi(1).sql ke dalam database yang telah dibuat. Proses import dapat dilakukan melalui phpMyAdmin dengan memilih database lalu klik Import dan pilih file pengaduan.sql, atau melalui command line dengan perintah mysql -u username -p nama_database < pengaduan.sql. Pastikan konfigurasi database sudah sesuai agar aplikasi dapat berjalan dengan benar.

  
  ### Command Run Website
- menjalanlan Laravel di website, ketikan command :
  ```bash
  php artisan serve
  ```
- menjalanlan UI Laravel di website, ketikan command :
  ```bash
  npm run dev
  ```
- menjalankan laravel di website, ketikan command :
  ```bash
  php artisan serve
  ```
## Akun Login
akun admin : email = admin@gmail.com, pw = 12345678

akun petugas : email = petugas@gmail.com, pw = 12345678

## Fitur
### Admin
- Halaman prediksi penjualan
- Halaman untuk melihat akurasi metode KNN
- Halaman kelola riwayat penjualan
- Halaman kelola akun
- Halaman kelola jenis produk
### user
- Halaman kelola riwayat penjualan

