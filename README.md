# KursusKu - Platform Belajar Teknologi Web

Project praktikum Mata Kuliah Pemrograman Web III (PHP & MySQL) / Bahasa Pemrograman III.
Aplikasi ini dibangun menggunakan framework **Laravel** dan **Bootstrap 5** untuk memenuhi Milestone Pertemuan 7 s.d. 9.

## 🚀 Fitur Utama (Milestone 7 - 9)
- **Layout & Template:** Menggunakan Master Layout Blade (`@extends`, `@yield`, `@include`) untuk navbar dan footer yang konsisten.
- **Routing & Controller:** Menggunakan `HomeController` untuk mengelola halaman utama.
- **Styling Modern:** Menggunakan Bootstrap 5 (via CDN/Vite) dan Google Fonts (Inter) untuk tampilan yang rapi dan responsif.
- **Form Pendaftaran:** Form dengan validasi input (Nama, Email, Kursus) dan proteksi `@csrf`.
- **JavaScript Interaktif:** Fitur cek sisa kursi secara dinamis di halaman pendaftaran menggunakan JavaScript Native (`fetch API`).

## 🛠️ Persyaratan Sistem (Requirements)
Sebelum menjalankan project ini, pastikan komputermu memiliki:
- **PHP** 8.2 atau lebih baru
- **Composer**
- **Node.js & NPM**
- **Web Server** (Laragon / XAMPP / `php artisan serve`)
- **Database** (MySQL - *opsional untuk saat ini, karena data kursus masih dummy/array*)

## ⚙️ Cara Menjalankan Project

Ikuti langkah-langkah berikut untuk menjalankan project di komputer lokal:

1. **Clone repository ini** (jika belum):
   ```bash
   git clone <link-repository-github-kamu>
   cd kursusku-laravel