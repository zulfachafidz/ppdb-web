# Website PPDB

![PPDB Web Logo](https://github.com/zulfachafidz/ppdb-web/blob/main/img/landing.png)

## Deskripsi

Website PPDB (Penerimaan Peserta Didik Baru) adalah proyek berbasis web yang dibangun dengan menggunakan bahasa pemrograman PHP dan menggunakan MySQL sebagai basis data. Proyek ini dirancang untuk memfasilitasi proses pendaftaran peserta didik baru dengan menyediakan berbagai fitur termasuk landing page yang informatif, tampilan admin untuk pengelolaan, formulir pendaftaran, serta kemampuan untuk membaca dan mencetak bukti pendaftaran.

## Teknologi yang Digunakan

- Bahasa Pemrograman: PHP
- Database: MySQL
- Komponen: HTML, CSS

## Fitur Utama

1. **Landing Page**: Halaman depan yang informatif untuk calon peserta didik dan orang tua.
2. **Tampilan Admin**: Dashboard admin untuk mengelola data pendaftar.
3. **Pendaftaran Peserta Didik Baru**: Formulir pendaftaran yang dapat diisi oleh calon peserta didik.
4. **Read Hasil Input**: Menampilkan hasil input pendaftaran untuk memberikan bukti daftar.
5. **Popup Cetak Bukti Pendaftaran**: Muncul pop-up yang memungkinkan pengguna mencetak bukti pendaftaran.

## Instalasi

1. Clone repositori ini:

    ```bash
    git clone https://github.com/zulfachafidz/ppdb-web.git
    ```

2. Pastikan PHP dan MySQL sudah terinstal di komputer Anda.

3. Impor skema basis data dari file `db_psb.sql` ke dalam database MySQL Anda.

4. Sesuaikan koneksi database pada file `includes/koneksi.php` dengan informasi koneksi MySQL Anda.

5. Buka proyek di browser:

    ```
    http://localhost/ppdb-web
    ```

## Penggunaan

1. Calon peserta didik mengisi formulir pendaftaran melalui halaman pendaftaran.

2. Admin dapat mengelola data pendaftar melalui halaman admin.php.

3. Setelah pendaftaran, calon peserta dapat melihat hasil pendaftaran dan mencetak bukti pendaftaran melalui halaman yang ditentukan.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
