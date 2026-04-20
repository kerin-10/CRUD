
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


