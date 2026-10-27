# Portal Resmi & Sistem Pengaduan Warga Kecamatan Alang-Alang Lebar Kota Palembang

Dokumentasi Teknis Proyek Ujian Tengah Semester (UTS)  
Mata Kuliah: Pemrograman Web Lanjutan (PSI5514)  
Tahun Akademik: Ganjil 2026/2027

---

## Identitas Mahasiswa

| Parameter | Keterangan |
| :--- | :--- |
| **Nama Mahasiswa** | Aji Arlando |
| **Nomor Induk Mahasiswa (NIM)** | 24041450083 |
| **Kelas** | 2483B |
| **Mata Kuliah** | Pemrograman Web Lanjutan (PSI5514) |
| **Dosen Pengampu** | Muhamad Son Muarie, M.Kom |
| **Program Studi** | S1 Sistem Informasi |
| **Fakultas** | Fakultas Sains dan Teknologi |
| **Perguruan Tinggi** | Universitas Islam Negeri (UIN) Raden Fatah Palembang |
| **Semester / Tahun Akademik** | Ganjil 2026/2027 |
| **Repositori GitHub** | [github.com/ajiarl/UTS_24041450083_AjiArlando](https://github.com/ajiarl/UTS_24041450083_AjiArlando) |

---

## 1. Ikhtisar Sistem (Showcase Proyek)

Sistem Informasi Kecamatan Alang-Alang Lebar (AAL) Kota Palembang merupakan aplikasi berbasis web yang menggabungkan portal informasi publik satu pintu dengan modul pengaduan masyarakat (*citizen aspirasi & complaint system*) serta layanan mandiri kependudukan berbasis akun warga resmi. Sistem ini menghubungkan warga di 4 kelurahan dengan unit layanan pemerintah kecamatan, serta terintegrasi langsung dengan panel pengawasan administrator internal.

### Fitur Utama

#### A. Portal Publik & Modul Registrasi Warga
* **Profil Geografis & Kewilayahan:** Visualisasi data statistik wilayah (34,58 km²), jumlah penduduk (108.450+ jiwa), sebaran 240+ RT/RW, dan batas administrasi terpadu.
* **Informasi 4 Kelurahan:** Informasi lengkap Kelurahan Alang-Alang Lebar, Kelurahan Karya Baru, Kelurahan Talang Kelapa, dan Kelurahan Srijaya.
* **Katalog Standar Pelayanan Publik:** Prosedur dan persyaratan pengurusan dokumen kependudukan (KTP elektronik, Kartu Identitas Anak/KIA, Kartu Keluarga baru/perubahan, surat pindah/datang, dan surat keterangan domisili/usaha).
* **Warta & Publikasi Kegiatan:** Rangkuman agenda pembangunan infrastruktur, pelayanan keliling jemput bola, aksi lingkungan, dan pengumuman resmi kecamatan.
* **Modul Registrasi & Autentikasi Masyarakat:**
  * **Pendaftaran Berbasis NIK KTP:** Warga mendaftarkan akun secara mandiri menggunakan NIK resmi 16 digit yang unik, nama lengkap, email, nomor WhatsApp/telepon aktif, kelurahan domisili resmi, alamat rumah lengkap, dan kata sandi terkonfirmasi.
  * **Auto-Login Instan:** Setelah proses registrasi berhasil, sistem langsung mengautentikasi akun warga secara otomatis dan mengarahkan kembali ke beranda dengan pesan sambutan resmi.
  * **Otentikasi Masuk Fleksibel:** Warga dapat masuk ke akun menggunakan Nomor Induk Kependudukan (NIK 16 digit) ataupun Alamat Email terdaftar beserta kata sandi.
  * **Integrasi Auto-Fill Pengaduan:** Pada saat warga telah masuk, formulir pengaduan online secara otomatis mengisikan nama pelapor (terkunci dengan status readonly), nomor telepon, dan kelurahan domisili sesuai profil akun warga.
* **Kanal Aspirasi & Pengaduan Daring:** Formulir pelaporan warga dengan validasi data nomor telepon, pilihan kelurahan, klasifikasi topik, dan rincian pesan.

#### B. Panel Kontrol Administrator (Back-Office)
* **Autentikasi Aman:** Sistem proteksi login berbasis sesi Laravel Auth (`Auth::attempt()`) lengkap dengan regenerasi token dan proteksi CSRF.
* **Kartu Statistik Responsif:** Metrik rekapitulasi jumlah aduan masuk (*Menunggu*, *Diproses*, *Selesai*, dan *Total Pengaduan*).
* **Manajemen Pengaduan Real-Time:** Peninjauan detail laporan warga, pembaruan status tindak lanjut penanganan, serta fungsi eliminasi data laporan.
* **Navigasi Paginasi Terstruktur:** Tampilan data tabel laporan dengan paginasi bersih untuk efisiensi beban kerja server.

---

## 2. Tumpukan Teknologi (Technology Stack)

* **Kerangka Kerja Backend:** Laravel 12.x (PHP 8.2+)
* **Penyimpanan Basis Data:** MySQL (XAMPP Environment / MariaDB Engine)
* **Antarmuka Pengguna (UI):** Blade Templating Engine, Tailwind CSS, Font Awesome 6
* **Arsitektur Perangkat Lunak:** Model-View-Controller (MVC) terstruktur
* **Keamanan:** CSRF Protection, Password Bcrypt Hashing, Session Regeneration, SQL Injection Prevention via Eloquent ORM

---

## 3. Kesesuaian Tahapan Pengembangan Modul Acuan

Implementasi sistem merujuk penuh pada modul panduan teknis pembuatan website Kecamatan Alang-Alang Lebar serta modul lanjutan sistem registrasi masyarakat:

### Tahap 1: Inisialisasi Proyek Laravel 12
* Pembuatan struktur dasar framework Laravel versi 12 menggunakan Composer.
* Penyiapan berkas konfigurasi lingkungan `.env` dan pembuatan kunci aplikasi (`php artisan key:generate`).

### Tahap 2: Konfigurasi Basis Data MySQL
* Pembentukan skema basis data `db_kecamatan_aal` dengan pengodean karakter `utf8mb4_unicode_ci`.
* Konfigurasi koneksi MySQL port 3306 pada file `.env`.
* Eksekusi pembersihan cache konfigurasi aplikasi (`php artisan config:clear`).

### Tahap 3: Perancangan Skema Database & Model Eloquent
* Pembuatan skema tabel `aspirasis` melalui berkas migrasi database:
  * `id`: Kunci primer auto-increment.
  * `nama`, `nik`, `telepon`: Identitas dan saluran kontak pelapor.
  * `kelurahan`: Wilayah asal pelapor (Alang-Alang Lebar, Karya Baru, Talang Kelapa, Srijaya).
  * `kategori`: Klasifikasi laporan (Administrasi KTP/KK, Infrastruktur & Jalan Rusak, Drainase & Kebersihan Sampah, dll).
  * `pesan`: Deskripsi isi laporan masyarakat.
  * `status`: Nilai enumerasi (`Menunggu`, `Diproses`, `Selesai`) dengan nilai baku `Menunggu`.
* Pembuatan model Eloquent `App\Models\Aspirasi` dengan proteksi properti `$fillable`.
* Eksekusi migrasi tabel sistem melalui perintah `php artisan migrate`.

### Tahap 4: Pembuatan Controller Publik & Administrator
* **`app/Http/Controllers/KecamatanController.php`:**
  * `index()`: Mengagregasi data statistik kependudukan, data 4 kelurahan, daftar alur layanan kependudukan, serta artikel warta kecamatan ke tampilan landing page.
  * `aspirasi(Request $request)`: Menjalankan validasi input formulir pelaporan masyarakat dan menyimpannya secara persisten ke tabel `aspirasis`.
* **`app/Http/Controllers/AdminAuthController.php`:**
  * `showLoginForm()`: Menampilkan antarmuka otentikasi login administrator.
  * `login(Request $request)`: Memverifikasi kombinasi email dan password melalui `Auth::attempt()`.
  * `logout(Request $request)`: Mengakhiri sesi aktif, mengosongkan session token, dan meregenerasi CSRF token.
* **`app/Http/Controllers/AdminDashboardController.php`:**
  * `index()`: Menghitung metrik ringkasan status aspirasi serta menyajikan data tabel terpaginasi (10 baris per halaman).
  * `updateStatus(Request $request, $id)`: Memperbarui status penanganan laporan warga berdasarkan pilihan administrator.
  * `destroy($id)`: Menghapus rekaman pengaduan dari basis data.

### Tahap 5: Pembuatan Tampilan Antarmuka (Blade Views)
* `resources/views/kecamatan/landing.blade.php`: Portal utama publik dengan tata letak responsif, kartu statistik, galeri kelurahan, tabel SOP layanan, warta kegiatan, navigasi autentikasi warga, dan formulir aduan interaktif auto-fill.
* `resources/views/admin/login.blade.php`: Antarmuka login administrator dengan panel kartu modern, pesan peringatan validasi, visibilitas kata sandi, dan proteksi CSRF.
* `resources/views/admin/dashboard.blade.php`: Panel monitoring administrator dengan kartu indikator metrik, filter data, tabel riwayat aspirasi, form pembaruan status instan, dan aksi hapus laporan.

### Tahap 6: Pengaturan Routing & Proteksi Middleware
Pemisahan domain akses antara publik dan administrator internal pada berkas `routes/web.php`:
* Grup rute publik dapat diakses bebas tanpa otentikasi.
* Grup rute administrator diproteksi penuh menggunakan middleware `auth` bawaan Laravel dengan prefix URL `/admin`.

### Tahap 7: Seeding Akun Administrator & Data Sampel
* Penyiapan seeder basis data (`database/seeders/DatabaseSeeder.php`) untuk menyuntikkan akun administrator resmi dan sampel data aspirasi awal.

### Tahap 8: Pengembangan Lanjutan Modul Registrasi & Autentikasi Masyarakat
1. **Penambahan Field Tabel Users via Migration:**
   * Migrasi baru: `database/migrations/2026_10_27_062554_add_masyarakat_fields_to_users_table.php`.
   * Kolom tambahan: `nik` (16 digit, unik, nullable), `telepon` (varchar 20, nullable), `kelurahan` (varchar 100, nullable), `alamat` (text, nullable), dan `role` (enum: 'admin', 'masyarakat', default 'masyarakat').
   * Pendaftaran field mass-assignment pada `$fillable` di model `app/Models/User.php`.
2. **Controller Autentikasi Warga (`app/Http/Controllers/Auth/MasyarakatAuthController.php`):**
   * `showRegistrationForm()`: Menampilkan formulir pendaftaran warga, redirect ke beranda bila telah login.
   * `register(Request $request)`: Validasi ketat NIK 16 digit angka unik, hash password, penyimpanan data warga, auto-login via `Auth::login()`, regenerasi session, dan redirect ke beranda dengan flash pesan notifikasi.
   * `showLoginForm()`: Menampilkan halaman login khusus masyarakat.
   * `login(Request $request)`: Otentikasi fleksibel pendeteksi otomatis format NIK atau Email, login attempt dengan remember token, dan penanganan pesan error kredensial.
   * `logout(Request $request)`: Mengakhiri sesi warga, invalidasi session, regenerasi CSRF token, dan redirect ke beranda.
3. **Penyediaan Antarmuka Registrasi & Login Warga:**
   * `resources/views/auth/register.blade.php`: Antarmuka registrasi modern berbasis tema resmi gelap (slate-900), aksen hijau pemda dan amber, kartu form lengkap data kependudukan.
   * `resources/views/auth/login.blade.php`: Antarmuka login warga selaras tema sistem, form login NIK/Email, opsi ingat saya, dan tautan pendaftaran akun.
4. **Integrasi Beranda & Formulir Aspirasi:**
   * Navbar Header & Drawer: Menampilkan tombol Masuk Warga dan Daftar Akun bagi pengunjung, serta badge sapaan nama warga dan tombol Keluar (Logout) bagi pengguna terautentikasi.
   * Auto-fill formulir laporan warga: Mengisi otomatis nama pelapor (status readonly), kontak telepon, dan pilihan kelurahan domisili saat warga telah masuk.

---

## 4. Pemetaan Rute Sistem (Route Directory)

| Metode HTTP | Endpoint URI | Controller & Aksi | Nama Rute | Hak Akses |
| :--- | :--- | :--- | :--- | :--- |
| `GET` | `/` | `KecamatanController@index` | `kecamatan.home` | Terbuka (Publik) |
| `POST` | `/aspirasi` | `KecamatanController@aspirasi` | `kecamatan.aspirasi` | Terbuka (Publik) |
| `GET` | `/register` | `MasyarakatAuthController@showRegistrationForm` | `register` | Tamu / Guest |
| `POST` | `/register` | `MasyarakatAuthController@register` | `register.submit` | Tamu / Guest |
| `GET` | `/login` | `MasyarakatAuthController@showLoginForm` | `login` | Tamu / Guest |
| `POST` | `/login` | `MasyarakatAuthController@login` | `login.submit` | Tamu / Guest |
| `POST` | `/logout` | `MasyarakatAuthController@logout` | `logout` | Terotentikasi (Warga) |
| `GET` | `/admin/login` | `AdminAuthController@showLoginForm` | `admin.login` | Tamu / Guest |
| `POST` | `/admin/login` | `AdminAuthController@login` | `admin.login.submit` | Tamu / Guest |
| `POST` | `/admin/logout` | `AdminAuthController@logout` | `admin.logout` | Terotentikasi (Admin) |
| `GET` | `/admin/dashboard` | `AdminDashboardController@index` | `admin.dashboard` | Terotentikasi (Admin) |
| `PATCH` | `/admin/aspirasi/{id}/status` | `AdminDashboardController@updateStatus` | `admin.aspirasi.status` | Terotentikasi (Admin) |
| `DELETE` | `/admin/aspirasi/{id}` | `AdminDashboardController@destroy` | `admin.aspirasi.destroy` | Terotentikasi (Admin) |

---

## 5. Kredensial Akun Default

### A. Akun Pengelola (Administrator)
* **URL Login Admin:** `http://127.0.0.1:8000/admin/login`
* **Alamat Email:** `admin@palembang.go.id`
* **Kata Sandi:** `admin123`
* **Tingkat Akses:** Administrator Kecamatan

### B. Akun Layanan Warga (Masyarakat)
* **URL Login Warga:** `http://127.0.0.1:8000/login`
* **URL Registrasi Warga:** `http://127.0.0.1:8000/register`
* **Metode Masuk:** Menggunakan 16 digit NIK atau Alamat Email terdaftar

---

## 6. Panduan Menjalankan Sistem Secara Lokal

Ikuti langkah-langkah di bawah ini untuk menjalankan sistem di lingkungan pengembangan lokal:

### 1. Kloning Repositori
```bash
git clone https://github.com/ajiarl/UTS_24041450083_AjiArlando.git
cd UTS_24041450083_AjiArlando
```

### 2. Pemasangan Dependensi PHP
```bash
composer install
```

### 3. Konfigurasi Lingkungan (.env)
Salin file konfigurasi lingkungan dan buat kunci aplikasi baru:
```bash
cp .env.example .env
php artisan key:generate
```

Sesuaikan konfigurasi koneksi basis data pada file `.env` jika diperlukan:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_kecamatan_aal
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Persiapan Basis Data
1. Buat basis data baru bernama `db_kecamatan_aal` di MySQL melalui phpMyAdmin atau terminal MySQL:
   ```sql
   CREATE DATABASE db_kecamatan_aal CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```
2. Import database:
   Import file `database/db_kecamatan_aal.sql` ke database MySQL `db_kecamatan_aal`.

   *(Opsi alternatif jika menggunakan migration & seeder Laravel)*:
   ```bash
   php artisan migrate --seed
   ```

### 5. Menjalankan Server Aplikasi
```bash
php artisan serve --no-reload
```

Akses sistem melalui peramban web pada alamat:
* **Portal Publik Warga:** `http://127.0.0.1:8000`
* **Registrasi Akun Warga:** `http://127.0.0.1:8000/register`
* **Masuk Akun Warga:** `http://127.0.0.1:8000/login`
* **Panel Administrator:** `http://127.0.0.1:8000/admin/login`

---

## 7. Struktur Direktori Proyek

```text
UTS_24041450083_AjiArlando/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── AdminAuthController.php
│   │       ├── AdminDashboardController.php
│   │       ├── Auth/
│   │       │   └── MasyarakatAuthController.php
│   │       ├── Controller.php
│   │       └── KecamatanController.php
│   └── Models/
│       ├── Aspirasi.php
│       └── User.php
├── bootstrap/
│   ├── app.php
│   └── providers.php
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── database.php
│   └── session.php
├── database/
│   ├── db_kecamatan_aal.sql
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   ├── 0001_01_01_000002_create_jobs_table.php
│   │   ├── 2026_10_25_000000_create_aspirasis_table.php
│   │   └── 2026_10_27_062554_add_masyarakat_fields_to_users_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
├── public/
│   ├── index.php
│   └── robots.txt
├── resources/
│   └── views/
│       ├── admin/
│       │   ├── dashboard.blade.php
│       │   └── login.blade.php
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       └── kecamatan/
│           └── landing.blade.php
├── routes/
│   ├── console.php
│   └── web.php
├── .env
├── .env.example
├── composer.json
└── README.md
```

---

## 8. Status Pengujian & Kesiapan Sistem

* **Pemeriksaan Sintaks PHP:** Lulus tanpa galat (*zero syntax error*).
* **Integritas Rute:** Seluruh 13 rute publik, registrasi warga, dan terproteksi middleware terdaftar secara valid.
* **Konektivitas Data:** Skema migrasi, berkas dump SQL (`db_kecamatan_aal.sql`), dan seeder siap pakai untuk inisialisasi basis data langsung.
* **Kepatuhan Modul Acuan:** Selaras dengan spesifikasi modul tugas UTS dan modul registrasi masyarakat.

---
*Dokumentasi Teknis Ujian Tengah Semester (UTS) © 2026 Aji Arlando. Hak Cipta Dilindungi.*
