# Library System

## Description
Sistem Perpustakaan Sederhana

## Requirements
- PHP
- Composer
- MySQL
- Laravel

## Installation

1. Clone repository ini
   ```bash
   git clone https://github.com/alditia-mp/library-system.git
   ```

2. Masuk ke folder project
   ```bash
   cd library-system
   ```

3. Install dependency lewat Composer
   ```bash
   composer install
   ```

4. Copy file `.env.example` menjadi `.env`
   ```bash
   copy .env.example .env
   ```

5. Generate application key
   ```bash
   php artisan key:generate
   ```

6. Sesuaikan konfigurasi database di file `.env`
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=belajar-laravel
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Buat database dengan nama yang sama seperti di `.env` (misalnya lewat phpMyAdmin)

8. Jalankan migration
   ```bash
   php artisan migrate
   ```

9. Jalankan server
   ```bash
   php artisan serve
   ```

10. Buka browser dan akses `http://127.0.0.1:8000`

## Author
Alditia Muhamad Pirmansyah
Mahasiswa Semester 5 Universitas Singaperbangsa Karawang
