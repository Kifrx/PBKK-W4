# 🎓 ITS Academic Portal & Agentic AI

---

## Fitur Utama & Rute Aplikasi

Aplikasi ini dibangun menggunakan framework **Laravel 11** dengan menerapkan arsitektur _Model-View-Controller (MVC)_, _Named Routes_, _Route Constraints_, serta desain UI modern bergaya editorial.

| No  | Fitur / Rute           | URL Path                  | Nama Rute (`named route`) | Keterangan                                                              |
| :-: | :--------------------- | :------------------------ | :------------------------ | :---------------------------------------------------------------------- |
|  1  | **Home / Beranda**     | `/`                       | `home`                    | Halaman beranda portal akademis                                         |
|  2  | **Profil Mahasiswa**   | `/mahasiswa/{nrp}`        | `mahasiswa.detail`        | Parameter **Wajib** dengan Validasi Regex (10 Digit NRP)                |
|  3  | **Agentic AI Sandbox** | `/agent/{tema?}`          | `agent`                   | Parameter **Opsional** dengan fallback tema default                     |
|  4  | **Kalkulator IPK**     | `/hitung-ipk/{ip1}/{ip2}` | `hitung.ipk`              | Menghitung rata-rata IPK & predikat kelulusan                           |
|  5  | **Dashboard Grouping** | `/dashboard/*`            | `dashboard.*`             | Route Prefix Grouping (`/dashboard`, `/dashboard/mahasiswa/{nrp}`, dll) |
|  6  | **Fallback 404**       | `*`                       | `fallback`                | Menangani halaman tidak ditemukan dengan tampilan HTTP 404 khusus       |

---

## Panduan Instalasi & Cara Menjalankan di Lokal

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di komputer lokal Anda:

### 1. Prasyarat Sistem

Pastikan perangkat Anda sudah terinstall:

-   **PHP** (v8.2 atau yang lebih baru)
-   **Composer**
-   **Git**

### 2. Clone Repository

Buka terminal / Command Prompt / PowerShell, lalu jalankan:

```bash
git clone https://github.com/Kifrx/tugas1-pbkk.git
cd tugas1-pbkk
```

### 3. Install Dependency Laravel

Jalankan composer untuk mengunduh semua paket dependency:

```bash
composer install
```

### 4. Salin File Konfigurasi Environment (`.env`)

Salin file `.env.example` menjadi `.env`:

-   **Windows (PowerShell):**
    ```powershell
    copy .env.example .env
    ```
-   **Linux / macOS / Git Bash:**
    ```bash
    cp .env.example .env
    ```

### 5. Generate Application Key

Buat kunci enkripsi aplikasi Laravel:

```bash
php artisan key:generate
```

### 6. Jalankan Local Development Server

Jalankan server lokal Laravel menggunakan Artisan:

```bash
php artisan serve
```

> 💡 **Opsi Tambahan:** Jika Anda tidak ingin fitur auto-reload (atau ingin menggunakan CLI workers):
>
> ```bash
> php artisan serve --no-reload
> ```

### 7. Buka di Browser

Akses aplikasi melalui browser di URL:

```text
http://127.0.0.1:8000
```

---

## 🧪 Contoh URL Uji Coba

Setelah server berjalan, Anda dapat mencoba URL berikut:

-   **Home:** [`http://127.0.0.1:8000/`](http://127.0.0.1:8000/)
-   **Detail Mahasiswa (Valid 10 Digit):** [`http://127.0.0.1:8000/mahasiswa/5025241197`](http://127.0.0.1:8000/mahasiswa/5025241197)
-   **Detail Mahasiswa (Uji Regex - Otomatis 404 jika bukan 10 digit):** [`http://127.0.0.1:8000/mahasiswa/123`](http://127.0.0.1:8000/mahasiswa/123)
-   **Agent AI (Dengan Parameter):** [`http://127.0.0.1:8000/agent/Cybersecurity`](http://127.0.0.1:8000/agent/Cybersecurity)
-   **Agent AI (Tanpa Parameter / Opsional):** [`http://127.0.0.1:8000/agent`](http://127.0.0.1:8000/agent)
-   **Kalkulator IPK:** [`http://127.0.0.1:8000/hitung-ipk/3.95/3.88`](http://127.0.0.1:8000/hitung-ipk/3.95/3.88)
-   **Dashboard Group:** [`http://127.0.0.1:8000/dashboard`](http://127.0.0.1:8000/dashboard)
-   **Testing Fallback 404:** [`http://127.0.0.1:8000/halaman-ngawur`](http://127.0.0.1:8000/halaman-ngawur)

---

## 📁 Struktur Direktori Penting

```text
tugas1-pbkk/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php   # Logika bisnis & pemrosesan rute
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php        # Layout utama (Header, Nav, Footer)
│       ├── home.blade.php           # Tampilan Beranda
│       ├── mahasiswa.blade.php      # Tampilan Profil Mahasiswa
│       ├── project.blade.php        # Tampilan Agentic AI Sandbox
│       ├── ipk.blade.php            # Tampilan Kalkulator IPK
│       └── fallback.blade.php       # Tampilan Halaman 404
├── routes/
│   └── web.php                      # Pendaftaran Rute Aplikasi
└── README.md                        # Dokumentasi Proyek
```
