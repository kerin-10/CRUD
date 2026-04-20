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