# ITS Academic Portal & Agentic AI

---

## 🚀 Fitur Utama & Daftar Rute

Aplikasi dikelola secara terpusat oleh satu controller: `app/Http/Controllers/PageController.php`.

### Rute Wajib Tugas 4 (Multi-View)

| No  | Halaman                  | URL Path            | Method | Controller & Action              | Keterangan                                                                                             |
| :-: | :----------------------- | :------------------ | :----: | :------------------------------- | :----------------------------------------------------------------------------------------------------- |
|  1  | **Beranda**              | `/` atau `/beranda` | `GET`  | `PageController@index`           | Halaman beranda utama dengan form interaktif pengubah nama dan kartu GPA dinamis.                      |
|  2  | **Profil Mahasiswa**     | `/profil-mahasiswa` | `GET`  | `PageController@profilMahasiswa` | Menampilkan data profil akademis mahasiswa menggunakan komponen `<x-info-card>` & `<x-status-banner>`. |
|  3  | **Ide-Riset Agentic AI** | `/ide-agent`        | `GET`  | `PageController@ideAgent`        | Visualisasi platform _Career Application Agent_ kelompok beserta formulir pengajuan ide agent baru.    |

---

## Spesifikasi Teknis & Implementasi

### 1. Master Layout Terpusat (`layouts/app.blade.php`)

-   **Pewarisan Bersih**: Seluruh view mewarisi `resources/views/layouts/app.blade.php` via `@extends('layouts.app')` tanpa duplikasi tag `<!DOCTYPE>`, `<html>`, atau `<head>`.
-   **Title Dinamis**: Menggunakan `@yield('title', '...')` sehingga judul tab browser berubah sesuai konteks halaman.
-   **Navbar Statis**: Floating pill navbar responsif dengan link navigasi otomatis aktif sesuai rute.
-   **Container Konten**: Bagian utama halaman dirender melalui `@yield('content')`.
-   **Footer Resmi**: Menampilkan identitas resmi Departemen Teknik Informatika ITS.

### 2. Reusable Blade Components

-   **`<x-info-card>`** (`resources/views/components/info-card.blade.php`):  
    Komponen kartu informasi fleksibel dengan integrasi props (`label`, `title`, `value`, `icon`, `badge`), default slot, dan attribute merging. Digunakan pada halaman `/profil-mahasiswa`.
-   **`<x-status-banner>`** (`resources/views/components/status-banner.blade.php`):  
    Komponen banner notifikasi/status alert dengan variasi tema (`success`, `info`, `warning`, `primary`), ikon SVG dinamis, judul, dan isi pesan. Digunakan pada halaman `/`, `/profil-mahasiswa`, dan `/ide-agent`.

### 3. Vite Asset Bundler & Local NPM Dependencies

-   Seluruh asset CSS & JS dikelola melalui package manager **NPM** secara lokal tanpa menggunakan raw CDN (`<link href="https://cdn...">` dihapus total).
-   Package lokal: `bootstrap` (^5.3) & `bootstrap-icons` (^1.13).
-   Asset di-bundle melalui Vite pada `resources/views/layouts/app.blade.php`:
    ```blade
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    ```

---

## 🏆 Penyelesaian Tantangan

### 🌓 Tantangan 1: Toggle Tema Dinamis (`/ide-agent?mode=dark`)

-   Menggunakan variabel Blade/PHP `$darkMode = request('mode') === 'dark';`.
-   Mengakses `/ide-agent` akan menampilkan **Light Mode** standar.
-   Mengakses `/ide-agent?mode=dark` (atau mengklik tombol toggle **Mode Dark**) akan otomatis mengaktifkan styling tema gelap (_dark mode_) yang kontras, elegan, dan nyaman dibaca.

### Tantangan 2: Alert Status Interaktif & Dynamic GPA (`/beranda?user=Andi`)

-   Menerima parameter query string `user`, contoh: `/beranda?user=Andi`.
-   Disediakan **Formulir Simulasi Status Pengguna** interaktif di halaman Beranda.
-   Ketika pengguna menginputkan nama dan mengirim formulir:
    1. Muncul notifikasi `<x-status-banner>` bertipe success menyambut pengguna secara dinamis:  
       _"Selamat datang, {nama}! IPK Anda pada kartu di atas otomatis dihitung..."_.
    2. Nama pada kartu GPA di Hero section otomatis berubah menjadi nama yang dimasukkan.
    3. Nilai IPK di kartu di-generate secara acak antara **3.50 s/d 4.00**, lengkap dengan pembaruan progress bar dan predikat kelulusan (_Dengan Pujian_ atau _Sangat Memuaskan_).

---

## 🛠️ Panduan Instalasi & Menjalankan di Lokal

### 1. Prasyarat

-   **PHP** $\ge$ 8.2
-   **Composer**
-   **Node.js** & **NPM**

### 2. Instalasi Dependency

```bash
# 1. Clone repository
git clone https://github.com/Kifrx/PBKK-W4.git
cd PBKK-W4

# 2. Install dependensi PHP
composer install

# 3. Install dependensi NPM & bundle asset Vite
npm install
npm run build
```

### 3. Konfigurasi Environment

```bash
# Salin file environment (Windows PowerShell)
copy .env.example .env

# Generate application encryption key
php artisan key:generate
```

### 4. Menjalankan Server

```bash
php artisan serve
```

Aplikasi dapat diakses melalui browser di: **`http://127.0.0.1:8000`**

---

## 📁 Struktur Direktori Penting

```text
PBKK-W2/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php           # 1 Controller untuk seluruh rute
├── resources/
│   ├── css/
│   │   └── app.css                          # Impor lokal bootstrap & icons
│   ├── js/
│   │   ├── app.js                           # Impor lokal bootstrap bundle JS
│   │   └── bootstrap.js
│   └── views/
│       ├── components/                      # Reusable Blade Components
│       │   ├── info-card.blade.php          # <x-info-card>
│       │   └── status-banner.blade.php      # <x-status-banner>
│       ├── layouts/
│       │   └── app.blade.php                # Master layout terpusat (@extends)
│       ├── home.blade.php                   # Rute / dan /beranda
│       ├── mahasiswa.blade.php              # Rute /profil-mahasiswa & /mahasiswa/{nrp}
│       ├── project.blade.php                # Rute /ide-agent & /agent/{tema?}
│       ├── ipk.blade.php                    # Rute /hitung-ipk/{ip1}/{ip2}
│       └── fallback.blade.php               # Halaman error 404
├── routes/
│   └── web.php                              # Pendaftaran seluruh rute aplikasi
├── tests/
│   └── Feature/
│       └── Pertemuan4Test.php               # Automated test suite Tugas 4
├── package.json                             # Dependency NPM lokal (Vite, Bootstrap)
├── vite.config.js                           # Konfigurasi compiler Vite
└── README.md
```
