🚀 ProTrack - A Simple Laravel Project Tracker

ProTrack adalah aplikasi tracker tugas yang simpel namun kuat, dibangun dengan Laravel 12 dan Tailwind CSS. Aplikasi ini memungkinkan Anda untuk mengorganisir pekerjaan ke dalam kategori proyek yang berbeda dan mengelola tugas-tugas di dalamnya dengan alur CRUD (Create, Read, Update, Delete) yang lengkap.

📸 Screenshots

Halaman Pemilihan Proyek

Halaman Daftar Tugas

Halaman Edit Tugas







✨ Fitur Utama

Kategorisasi Proyek: Kelompokkan tugas Anda ke dalam proyek-proyek yang berbeda (contoh: Antasena ITS, Informatika, dll.).

Fungsionalitas CRUD Penuh: Buat (Create), Lihat (Read), Perbarui (Update), dan Hapus (Delete) tugas dengan mudah.

Status Tugas: Lacak progres setiap tugas dengan status yang jelas: Not Started, On Progress, dan Completed.

Antarmuka Responsif: Tampilan yang bersih dan modern dibangun menggunakan Tailwind CSS.

Database Driven: Semua data dikelola secara efisien menggunakan database relasional.

Setup Modern: Menggunakan Vite untuk asset bundling yang super cepat.

🛠️ Teknologi yang Digunakan

Backend: PHP 8.2, Laravel 12

Frontend: Tailwind CSS, Blade

Database: SQLite (default), dapat diganti dengan MySQL, PostgreSQL, dll.

Build Tool: Vite

🚀 Instalasi & Persiapan

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda.

Kloning Repositori

git clone [https://github.com/your-username/ProTrack.git](https://github.com/your-username/ProTrack.git)
cd ProTrack


Instal Dependensi

# Instal dependensi PHP
composer install

# Instal dependensi JavaScript
npm install


Konfigurasi Lingkungan

# Salin file environment example
cp .env.example .env

# Generate kunci aplikasi baru
php artisan key:generate


Jangan lupa untuk mengatur koneksi database Anda di dalam file .env jika Anda tidak menggunakan SQLite.

Migrasi & Seed Database
Perintah ini akan membuat semua tabel database dan mengisinya dengan data kategori awal.

php artisan migrate:fresh --seed


Jalankan Server Pengembangan
Perintah ini akan menjalankan server PHP dan Vite secara bersamaan.

npm run dev


Sekarang, buka browser Anda dan kunjungi http://127.0.0.1:8000 (atau URL yang ditampilkan di terminal Anda). Selamat menikmati aplikasi ProTrack Anda!