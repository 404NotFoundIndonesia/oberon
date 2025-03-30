<div align="center">
    <a href="https://404notfound.fun" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/87377917?s=200&v=4" width="150" alt="Oberon">
    </a>

[![GitHub Stars](https://img.shields.io/github/stars/404NotFoundIndonesia/oberon.svg)](https://github.com/404NotFoundIndonesia/oberon/stargazers)
[![GitHub license](https://img.shields.io/github/license/404NotFoundIndonesia/oberon)](https://github.com/404NotFoundIndonesia/oberon/blob/main/LICENSE)
</div>

# Oberon - Open Source Koperasi Web App

Oberon adalah aplikasi web _open source_ untuk mengelola koperasi dengan mudah dan transparan. Dibangun menggunakan **Laravel 12** dan **Blade**, Oberon menyediakan fitur lengkap untuk pengelolaan anggota, transaksi, simpanan, pinjaman, dan laporan keuangan.

## 📌 Fitur Utama
- **Manajemen Anggota**: Pendaftaran, pengelolaan data, dan status keanggotaan.
- **Simpanan**: Simpanan wajib, sukarela, dan pokok dengan riwayat transaksi.
- **Pinjaman**: Pengajuan, persetujuan, pencairan, dan simulasi cicilan.
- **Transaksi & Keuangan**: Pencatatan transaksi dan laporan keuangan.
- **Manajemen Hak Akses**: Menggunakan **Spatie Laravel Permission** untuk mengelola peran dan izin (Admin, Bendahara, Anggota, Auditor, dll.).

## 🛠 Tech Stack
- **Backend**: Laravel 12
- **Frontend**: Blade (Laravel Blade Template)
- **Database**: MySQL / PostgreSQL
- **Authentication**: Laravel Breeze
- **Authorization**: Spatie Laravel Permission
- **Styling**: Tailwind CSS

## 🚀 Instalasi
```sh
# Clone repositori
git clone https://github.com/404NotFoundIndonesia/oberon.git
cd oberon

# Install dependencies
composer install
npm install && npm run build

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Konfigurasi database di .env

# Migrasi database
php artisan migrate --seed

# Jalankan aplikasi
php artisan serve
```

## 🔒 Keamanan
- Middleware autentikasi dan otorisasi.
- Proteksi CSRF dan XSS.
- Enkripsi data sensitif.

## 🌍 Kontribusi
Kami menyambut kontribusi dari siapa saja! Ikuti langkah berikut untuk berkontribusi:
1. **Fork** repositori ini.
2. **Buat branch baru**: `git checkout -b feat/fitur-anda`.
3. **Commit perubahan**: `git commit -m 'Menambahkan fitur baru'`.
4. **Push ke branch**: `git push origin feat/fitur-anda`.
5. **Buat Pull Request** dan diskusikan dengan tim pengembang.

## 📄 Lisensi
Oberon dirilis di bawah [lisensi MIT](LICENSE).

---

💡 **Oberon adalah solusi koperasi digital yang modern dan fleksibel. Yuk, ikut berkontribusi dan kembangkan bersama komunitas!** 🚀

