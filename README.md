<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======

# Sistem Manajemen Kos

Aplikasi web berbasis **Laravel** untuk mengelola data kos, meliputi data kamar, data penghuni, dan tampilan dashboard ringkasan.

## Deskripsi Project

Project ini dibuat untuk membantu pengelolaan data kos secara sederhana.  
Fitur utama yang tersedia pada aplikasi ini antara lain:

- Melihat dashboard data kos
- Mengelola data kamar
- Menambah, mengubah, dan menghapus data penghuni
- Menambah dan mengubah data kamar
- Menampilkan status kamar kosong atau terisi

## Fitur Utama

### 1. Dashboard
Menampilkan ringkasan data, seperti:
- Total penghuni
- Total kamar
- Jumlah kamar kosong
- Jumlah kamar terisi
- Kategori kamar
- Status pembayaran sewa

### 2. Manajemen Kamar
Pengguna dapat:
- Melihat daftar kamar
- Menambahkan data kamar
- Mengedit data kamar

### 3. Manajemen Penghuni
Pengguna dapat:
- Melihat daftar penghuni
- Menambahkan data penghuni
- Mengedit data penghuni
- Menghapus data penghuni

## Catatan
Project ini **tidak menggunakan fitur login/authentication** pada alur utama aplikasi.  
Walaupun pada Laravel terdapat file model `User` dan migration `users` bawaan, pada project ini fitur login belum diimplementasikan pada route maupun halaman aplikasi.

## Teknologi yang Digunakan
PHP (Laravel Framework)
MySQL / SQLite
HTML, CSS, JavaScript
Vite (Frontend Build Tool)


#  Sistem Manajemen Kos (CRUD)

Aplikasi web berbasis **Laravel** yang digunakan untuk mengelola data kos, seperti data kamar, data penghuni, serta menampilkan dashboard ringkasan.

---

##  Deskripsi Project

Project ini dibuat untuk membantu pengelolaan kos secara sederhana dan terstruktur.
Pengguna dapat melakukan pengolahan data (CRUD) terhadap kamar dan penghuni, serta melihat informasi melalui dashboard.

---

##  Fitur Utama

###  Dashboard

Menampilkan ringkasan data:

* Total penghuni
* Total kamar
* Jumlah kamar kosong
* Jumlah kamar terisi
* Kategori kamar
* Status pembayaran sewa

###  Manajemen Kamar

* Melihat daftar kamar
* Menambahkan data kamar
* Mengedit data kamar

###  Manajemen Penghuni

* Melihat daftar penghuni
* Menambahkan data penghuni
* Mengedit data penghuni
* Menghapus data penghuni

---

##  Catatan Penting

Project ini **tidak menggunakan fitur login/authentication**.
Walaupun terdapat file bawaan Laravel seperti `User` dan tabel `users`, fitur tersebut belum digunakan dalam aplikasi.

---

##  Teknologi yang Digunakan

* PHP (Laravel Framework)
* SQLite (Database)
* HTML, CSS, JavaScript
* Vite (Frontend Build Tool)
* Composer
* Node.js & NPM

---

##  Persyaratan Sistem

Sebelum menjalankan project, pastikan sudah terinstall:

* PHP >= 8.x
* Composer
* Node.js & NPM
* Git

---

##  Prosedur Instalasi

Ikuti langkah-langkah berikut untuk menjalankan project di komputer lokal:

### 1. Clone Repository

Download project dari GitHub:

```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo
```

---

### 2. Install Dependency

Install semua kebutuhan backend dan frontend:

```bash
composer install
npm install
```

---

### 3. Copy File Environment

Membuat file konfigurasi:

```bash
cp .env.example .env
```

---

### 4. Generate Application Key

```bash
php artisan key:generate
```

---

### 5. Konfigurasi Database (SQLite)

Project ini menggunakan **SQLite** agar lebih mudah digunakan.

Pastikan file database tersedia:

```bash
database/database.sqlite
```

Jika belum ada, buat manual:

```bash
touch database/database.sqlite
```

Lalu atur file `.env`:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

---

### 6. Jalankan Migration

Membuat struktur tabel database:

```bash
php artisan migrate
```

Jika ingin menambahkan data awal:

```bash
php artisan db:seed
```

---

### 7. Jalankan Server Laravel

Menjalankan aplikasi:

```bash
php artisan serve
```

Buka browser dan akses:

```
http://127.0.0.1:8000
```

---

### 8. Jalankan Frontend (Opsional)

Jika menggunakan Vite:

```bash
npm run dev
```

---

##  Testing

Menjalankan pengujian:

```bash
php artisan test
```

---

##  Struktur Halaman

* `/` → Halaman awal
* `/Dashboard` → Dashboard
* `/penghuni` → Data penghuni
* `/kamar` → Data kamar

---

##  Tujuan Project

Project ini dibuat untuk:

* Mempelajari konsep **MVC pada Laravel**
* Mengimplementasikan operasi **CRUD**
* Mengelola database menggunakan migration
* Memahami routing dan struktur project Laravel

---

##  Author

Nama: Kerin Sapitri Sembiring
Mata Kuliah: WEB 2

---

##  Catatan Tambahan

* Disarankan menggunakan SQLite agar tidak perlu konfigurasi database tambahan
* Pastikan semua dependency sudah terinstall sebelum menjalankan project
* README ini dibuat sebagai dokumentasi project sesuai arahan dosen
>>>>>>> 649101c692197db716e06bcb0df89a8e5058f724
