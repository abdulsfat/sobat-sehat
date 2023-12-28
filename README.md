<p align="center"><a href="https://github.com/abdulsfat/sobat-sehat.git" target="_blank"><img src="public/assets/img/logo-sobat-sehat.png" width="400" alt="Sobat Sehat Logo"></a></p>

# Sobat Sehat

Sobat Sehat adalah sebuah aplikasi yang dirancang untuk membantu memudahkan pengelolaan data kegiatan kesehatan masyarakat. Latar belakang dibuatnya aplikasi ini adalah karena masih banyaknya kendala dalam pengelolaan data kegiatan kesehatan masyarakat secara manual. Pengelolaan data yang manual seringkali menyebabkan terjadinya kesalahan dalam penginputan data, kesulitan dalam pengolahan data, dan kesulitan dalam pengambilan keputusan

**Daftar Isi**

-   [Sobat Sehat](#sobat-sehat)
    -   [Fitur Utama](#fitur-utama)
    -   [Role Pengguna](#role-pengguna)
        -   [Kontributor](#kontributor)
        -   [Admin](#admin)
    -   [Instalasi](#instalasi)

## Fitur Utama

1. Landing Page
2. Menampilan informasi kegiatan sehat masyarakat
3. Mencari acara kegiatan sehat masyarakat berdasarkan lokasi dan tanggal
4. Mempublikasikan acara kegiatan sehat masyarakat
5. Menampilkan berita mengenai kegiatan sehat masyarakat
6. Mempublikasikan acara kegiatan sehat masyarakat
7. Dashboard Pengguna
8. Dashboard Admin Faskes

## Role Pengguna

Sistem ini memiliki beberapa tipe atau jenis pengguna yaitu :

### Kontributor

Tipe pengguna ini adalah pengguna biasa atau pengunjung website yang telah mendaftarkan akun pada website, memiliki akses ke dalam fitur CRUD tentang kegiatan sehat masyarakat.

### Admin

Tipe pengguna ini adalah pengguna yang memiliki akses sebagai administrator.

## Instalasi

Ikuti step by step berikut ini untuk melakukan instalasi ke dalam local komputer

Clone repository

```bash
git clone https://github.com/abdulsfat/sobat-sehat.git && cd sobat-sehat
```

Buat database sobat-sehat di mysql

```bash
  CREATE DATABASE sobat_sehat;
```

Instalasi Composer Packages

```bash
composer install
```

Persiapan Environment

```bash
cp .env.example .env
php artisan key:generate
```

-   Pastikan untuk mengubah database dari file .env kalian
    `DB_DATABASE=sobat_sehat`

Menambahkan JWT secret

```bash
php artisan jwt:secret
```

Menjalankan Migrasi dan sample data, pastikan koneksi MySQL sudah aktif

```bash
php artisan migrate --seed
```

Menjalankan Server

```bash
php artisan serve
```
