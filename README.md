<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Volunteer Event Management API

Tugas ini dikerjakan untuk posisi **Backend Developer Intern** di Rintisar. API ini mengelola sistem pendaftaran relawan dan manajemen acara menggunakan framework Laravel 11. Project ini mencakup sistem autentikasi, manajemen event, dan sistem pendaftaran (join) berbasis relasi database.

-   [Register & Login](https://laravel.com/docs/sanctum) menggunakan Laravel Sanctum.
-   [Database ORM](https://laravel.com/docs/eloquent) dengan relasi Many-to-Many.
-   [Schema Migrations](https://laravel.com/docs/migrations) menggunakan SQLite.
-   [Form Request Validation](https://laravel.com/docs/validation) untuk keamanan input data.

## Getting Started

Untuk menjalankan project ini secara lokal, ikuti langkah berikut:

1. **Clone Repository:** `git clone <link-repo-anda>`
2. **Install Dependencies:** `composer install`
3. **Environment Setup:** `cp .env.example .env` lalu `php artisan key:generate`
4. **Database Setup:** `php artisan migrate:fresh`
5. **Run Server:** `php artisan serve`

## API Endpoints

Berikut adalah daftar endpoint utama yang tersedia:

-   **POST /api/register** - Registrasi user baru.
-   **POST /api/login** - Autentikasi untuk mendapatkan token.
-   **GET /api/events** - Menampilkan semua daftar event.
-   **GET /api/events/{id}** - Menampilkan detail satu event.
-   **POST /api/events** - Membuat event baru (Membutuhkan Bearer Token).
-   **POST /api/events/{id}/join** - Mendaftar ke event (Relasi Many-to-Many).

## Assignment Answers (Mandatory)

Berikut adalah jawaban untuk pertanyaan wajib dari dokumen studi kasus:

### 1. Bagian tersulit apa dari assignment ini?

Menangani logika relasi **many-to-many** pada tabel pivot `event_user` dan memastikan integritas data agar tidak terjadi duplikasi pendaftaran user pada event yang sama menggunakan `syncWithoutDetaching`.

### 2. Jika diberi waktu 1 minggu, apa yang akan kamu perbaiki?

Saya akan menambahkan **Unit Testing** untuk menjamin reliabilitas kode, mengimplementasikan **API Resources** untuk standarisasi format response JSON, serta menambahkan fitur **pagination** dan pencarian pada daftar event.

### 3. Kenapa memilih pendekatan teknis tersebut?

Menggunakan **Laravel Sanctum** karena ringan dan efisien untuk autentikasi API. Penggunaan **Form Request Validation** dipilih untuk menjaga _Clean Code_ agar logika validasi terpisah dari Controller.

## License

The Volunteer Event API is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

**Developed by Opank (Naufal Bi Pradana)** _Information Systems Student at Airlangga University_ _Owner of Rumah Developer_
