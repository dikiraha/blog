-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql304.infinityfree.com
-- Waktu pembuatan: 24 Des 2024 pada 02.53
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37389914_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `portal_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `uuid`, `portal_id`, `title`, `description`, `created_by`, `created_at`, `updated_at`) VALUES
(1, '49414c80-5b59-462c-b554-5bbf7f643b6d', 4, 'Apa yang diharapkan dari MK Basis Data?', '<p>Dari Mata Kuliah Basis Data, mahasiswa diharapkan untuk:</p>\r\n<p>1. Memahami Konsep Dasar Basis Data: Mahasiswa akan mempelajari konsep dasar seperti apa itu basis data, bagaimana data disusun secara sistematis, dan bagaimana hubungan antar data dikelola.</p>\r\n<p>2. Menguasai Perancangan Basis Data: Mahasiswa akan belajar bagaimana merancang basis data yang efektif, termasuk penggunaan Entity-Relationship Diagram (ERD) untuk memodelkan struktur data, normalisasi data, serta perancangan skema basis data.</p>\r\n<p>3. Menguasai SQL (Structured Query Language): Mahasiswa diharapkan untuk mampu menulis dan menggunakan perintah SQL untuk membuat, membaca, memperbarui, dan menghapus data (CRUD operations), serta melakukan query kompleks untuk analisis data.</p>\r\n<p>4. Mengelola Sistem Basis Data: Memahami cara kerja dan penggunaan DBMS (Database Management Systems) seperti MySQL, PostgreSQL, atau Oracle, dan bagaimana cara memelihara dan mengoptimalkan basis data.</p>\r\n<p>5. Memahami Aspek Keamanan Basis Data: Mahasiswa akan mempelajari cara mengamankan data dari akses yang tidak sah, menjaga integritas data, dan memahami aspek backup serta recovery.</p>\r\n<p>6. Mengembangkan Aplikasi Berbasis Basis Data: Mahasiswa akan belajar bagaimana mengintegrasikan basis data ke dalam aplikasi, baik melalui front-end maupun back-end, sehingga basis data dapat digunakan dalam aplikasi nyata.</p>\r\n<p>7. Memecahkan Masalah Menggunakan Basis Data: Mahasiswa diharapkan untuk mampu menganalisis masalah data dan menemukan solusi yang efektif dengan menggunakan konsep-konsep yang telah dipelajari.</p>', 1, '2024-10-02 19:50:22', '2024-10-16 19:41:54'),
(2, '413f8d40-3819-4853-8f46-3d2e8c2e3a0c', 4, 'Apa itu Conseptual DB?', 'Conceptual Database (Basis Data Konseptual) adalah representasi tingkat tinggi dari struktur data yang berfokus pada bagaimana data disusun dan diorganisasikan tanpa memperhatikan detail implementasi fisik atau teknisnya. Pada tahap ini, tujuannya adalah untuk memodelkan data dengan cara yang mudah dipahami oleh semua pemangku kepentingan, termasuk yang tidak memiliki latar belakang teknis.', 1, '2024-10-02 19:51:34', '2024-10-02 19:51:34'),
(3, '88c39e5b-3c82-4b15-85d2-6d3cc16d71a5', 4, 'Apa itu Physical model?', 'Physical Model (Model Fisik) adalah representasi detail dari bagaimana data disimpan secara fisik di dalam sistem manajemen basis data (DBMS). Model ini fokus pada cara data diimplementasikan pada perangkat keras, seperti bagaimana data diorganisasikan di memori atau penyimpanan disk, serta bagaimana indeks dan struktur penyimpanan lainnya diatur untuk mengoptimalkan kinerja.', 1, '2024-10-02 19:52:21', '2024-10-02 19:52:21'),
(4, 'ef56307e-65c4-41c7-8190-c5fed3553928', 5, 'Apa itu attribute, entitas dan relasi dalam ERD.', 'Atribut adalah karakteristik atau properti dari suatu entitas yang mendefinisikan informasi lebih lanjut tentang entitas tersebut. Atribut dapat berupa data seperti teks, angka, tanggal, dan sebagainya. Dalam ERD, atribut biasanya digambarkan sebagai elips yang terhubung ke entitas.\r\n\r\nEntitas adalah objek nyata, orang, tempat, atau konsep yang datanya akan disimpan dalam sistem database. Entitas mewakili sesuatu yang bisa dibedakan secara unik dalam suatu konteks, dan setiap entitas memiliki atribut yang mendeskripsikan karakteristiknya. Dalam ERD, entitas biasanya digambarkan sebagai persegi panjang.\r\n\r\nRelasi adalah hubungan antara dua atau lebih entitas. Relasi mendeskripsikan bagaimana entitas-entitas ini saling berinteraksi atau terkait satu sama lain. Relasi biasanya digambarkan sebagai belah ketupat yang menghubungkan entitas-entitas yang terkait.', 1, '2024-10-07 11:15:59', '2024-10-07 11:15:59'),
(5, '71469f04-5b81-495e-9530-462334ba7435', 6, 'Primary Key (PK)', 'Primary Key adalah kolom atau kombinasi kolom yang secara unik mengidentifikasi setiap record dalam sebuah tabel. Setiap tabel harus memiliki satu Primary Key, dan nilainya tidak boleh null serta unik. \r\nContoh : Tabel Karyawan: employee_id sebagai Primary Key.\r\nTabel Pelanggan: customer_id sebagai Primary Key.\r\nTabel Produk: product_id sebagai Primary Key.\r\nTabel Pesanan: order_id sebagai Primary Key.\r\nTabel Departemen: department_id sebagai Primary Key.', 1, '2024-10-08 09:32:30', '2024-10-08 09:32:30'),
(6, '6918add2-50c7-4ff9-87a0-2b49ef600667', 6, 'Foreign Key (FK)', 'Foreign Key adalah kolom atau kombinasi kolom dalam suatu tabel yang menjadi referensi ke Primary Key dari tabel lain. Ini digunakan untuk membuat relasi antar tabel.\r\nContoh :\r\nTabel Pesanan: customer_id sebagai Foreign Key yang merujuk ke customer_id di tabel Pelanggan.\r\nTabel Pesanan: employee_id sebagai Foreign Key yang merujuk ke employee_id di tabel Karyawan.\r\nTabel Barang Dipesan: order_id sebagai Foreign Key yang merujuk ke order_id di tabel Pesanan.\r\nTabel Karyawan: department_id sebagai Foreign Key yang merujuk ke department_id di tabel Departemen.\r\nTabel Pembayaran: order_id sebagai Foreign Key yang merujuk ke order_id di tabel Pesanan.', 1, '2024-10-08 09:35:46', '2024-10-08 09:35:46'),
(7, '30ea9067-10dc-4b58-a4fa-a377c23f8e61', 6, 'Candidate Key', 'Candidate Key adalah kolom atau kombinasi kolom yang dapat digunakan untuk secara unik mengidentifikasi setiap record dalam tabel, tetapi hanya satu yang dipilih sebagai Primary Key. Kolom-kolom ini tidak boleh bernilai null dan harus unik.\r\nContoh :\r\nTabel Karyawan: employee_id (Primary Key) dan email sebagai Candidate Key.\r\nTabel Pelanggan: customer_id (Primary Key) dan phone_number sebagai Candidate Key.\r\nTabel Produk: product_id (Primary Key) dan serial_number sebagai Candidate Key.\r\nTabel Mahasiswa: student_id (Primary Key) dan national_id sebagai Candidate Key.\r\nTabel Mobil: license_plate (Primary Key) dan VIN (Vehicle Identification Number) sebagai Candidate Key.', 1, '2024-10-08 09:36:23', '2024-10-08 09:36:23'),
(8, '21f8548f-6fb8-411b-a5de-1cb74fbfdc9a', 6, 'Apa itu relation pada ERD, Mengapa many-to-many tidak baik digunakan pada ERD?', '<p>Relasi dalam Entity Relationship Diagram (ERD) adalah cara untuk menggambarkan hubungan antara entitas (tabel) di dalam sebuah database. Ada beberapa jenis relasi dalam ERD, di antaranya:</p>\r\n<p><strong>Jenis Relasi dalam ERD: </strong></p>\r\n<p>1. One-to-One (1:1): Satu record di entitas A hanya berhubungan dengan satu record di entitas B, dan sebaliknya. Contoh: Satu orang hanya memiliki satu paspor, dan satu paspor hanya untuk satu orang.</p>\r\n<p>2. One-to-Many (1:M): Satu record di entitas A bisa berhubungan dengan banyak record di entitas B, tapi satu record di entitas B hanya berhubungan dengan satu record di entitas A. Contoh: Satu departemen memiliki banyak karyawan, tapi seorang karyawan hanya bekerja di satu departemen.</p>\r\n<p>3.Many-to-Many (M:M): Banyak record di entitas A bisa berhubungan dengan banyak record di entitas B, dan sebaliknya. Contoh: Banyak siswa dapat mengikuti banyak mata kuliah, dan banyak mata kuliah bisa diikuti oleh banyak siswa.</p>\r\n<p><strong>Mengapa Many-to-Many Tidak Baik Digunakan Langsung dalam ERD?</strong></p>\r\n<p>1. Tidak Efisien: Relasi many-to-many menyulitkan pengelolaan data karena tidak dapat direpresentasikan dengan baik dalam tabel relational. Pada praktiknya, banyak RDBMS (Relational Database Management System) tidak mendukung penyimpanan relasi many-to-many secara langsung.</p>\r\n<p>2. Redundansi dan Inconsistency: Jika relasi many-to-many langsung diterapkan, bisa muncul redundansi data dan inkonsistensi, karena data yang saling berhubungan dalam dua entitas harus disimpan secara berulang.</p>\r\n<p>3. Sulit di-Query: Query terhadap data dalam relasi many-to-many bisa menjadi sangat rumit karena data tersebar di berbagai entitas tanpa adanya kontrol yang jelas terhadap hubungan antar data.</p>', 1, '2024-10-08 09:38:52', '2024-10-18 20:56:30'),
(9, '1ef9ff2d-97dc-4be6-97fb-51bb434377a4', 7, 'Apa itu normalisasi pada ERD?', '<p>Normalisasi dalam konteks <strong>ERD (Entity Relationship Diagram)</strong> adalah proses sistematis untuk mengorganisir data di dalam database agar menjadi lebih efisien, mengurangi redundansi, dan memastikan integritas data. Normalisasi bertujuan untuk memecah tabel besar menjadi tabel yang lebih kecil dan mendefinisikan hubungan antara mereka, sehingga mencegah terjadinya duplikasi data atau inkonsistensi.</p>\r\n<p>Terdapat beberapa <strong>tahapan normalisasi</strong> yang dikenal sebagai bentuk normal (normal forms), yang masing-masing memiliki aturan tersendiri. Berikut adalah tahapan utamanya:</p>\r\n<ol>\r\n<li>\r\n<p><strong>Bentuk Normal Pertama (1NF)</strong>:</p>\r\n<ul>\r\n<li>Semua kolom harus berisi nilai atomik (nilai tunggal, bukan array atau set).</li>\r\n<li>Tidak boleh ada baris yang identik.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Bentuk Normal Kedua (2NF)</strong>:</p>\r\n<ul>\r\n<li>Memenuhi syarat 1NF.</li>\r\n<li>Semua atribut non-prime (atribut yang bukan bagian dari kunci utama) harus bergantung sepenuhnya pada kunci utama, bukan hanya sebagian.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Bentuk Normal Ketiga (3NF)</strong>:</p>\r\n<ul>\r\n<li>Memenuhi syarat 2NF.</li>\r\n<li>Tidak ada ketergantungan transitif, artinya atribut non-prime tidak boleh bergantung pada atribut non-prime lainnya.</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Bentuk Normal Boyce-Codd (BCNF)</strong>:</p>\r\n<ul>\r\n<li>Variasi dari 3NF yang lebih ketat. Setiap determinan dalam hubungan harus berupa kunci kandidat (semua atribut non-prime hanya bergantung pada kunci utama atau kunci kandidat).</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<h3>Contoh sederhana:</h3>\r\n<p>Misalkan kita memiliki tabel <strong>Mahasiswa</strong>:</p>\r\n<ul>\r\n<li>Tabel ini berisi kolom: <code>MahasiswaID</code>, <code>Nama</code>, <code>Alamat</code>, <code>Jurusan</code>, <code>DosenPembimbing</code>.</li>\r\n</ul>\r\n<p>Setelah <strong>normalisasi</strong>:</p>\r\n<ol>\r\n<li>\r\n<p>Kita bisa memisahkan tabel menjadi:</p>\r\n<ul>\r\n<li><strong>Mahasiswa</strong> (<code>MahasiswaID</code>, <code>Nama</code>, <code>Alamat</code>, <code>JurusanID</code>)</li>\r\n<li><strong>Jurusan</strong> (<code>JurusanID</code>, <code>NamaJurusan</code>)</li>\r\n<li><strong>DosenPembimbing</strong> (<code>DosenID</code>, <code>NamaDosen</code>)</li>\r\n</ul>\r\n</li>\r\n<li>\r\n<p><strong>Relasi</strong> antara tabel-tabel tersebut dapat digambarkan dalam ERD dengan entitas yang saling berhubungan, seperti Mahasiswa memiliki Jurusan, dan Jurusan memiliki Dosen Pembimbing.</p>\r\n</li>\r\n</ol>\r\n<p>Dengan normalisasi, struktur data lebih bersih, efisien, dan mudah dipelihara.</p>', 1, '2024-10-16 20:00:05', '2024-10-16 20:00:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portals`
--

CREATE TABLE `portals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `portals`
--

INSERT INTO `portals` (`id`, `uuid`, `title`, `description`, `photo`, `created_by`, `created_at`, `updated_at`) VALUES
(4, '56af973c-120f-40e2-bb5b-a9632b8aef4d', 'BASIS DATA', 'Basis data adalah kumpulan data yang terorganisir dan disimpan secara sistematis di dalam komputer sehingga dapat diakses, dikelola, dan diperbarui dengan mudah. Basis data memungkinkan pengguna untuk menyimpan berbagai jenis informasi, seperti data pelanggan, transaksi, inventaris, atau informasi lainnya, secara terstruktur.', NULL, 1, '2024-10-02 19:34:02', '2024-10-02 19:34:02'),
(5, '4c407fa6-6e1f-4233-832f-9a25abf4a556', 'ERD', 'ERD (Entity-Relationship Diagram) adalah diagram yang digunakan untuk memodelkan struktur data dalam sistem database. ERD menunjukkan hubungan antar entitas (objek atau entitas yang datanya disimpan dalam database) dan menggambarkan bagaimana data diatur dan dihubungkan satu sama lain.', NULL, 1, '2024-10-07 11:14:53', '2024-10-07 11:14:53'),
(6, '9ad02097-aff4-4697-8325-265636af63f5', 'PERTEMUAN 3', 'Apa itu PrimaryKey, Foregent Key dan Candidate Key? Berikan masing-masih 5 contoh pada penerapan ERD!\r\n\r\nApa itu relation pada ERD, Mengapa many-to-many tidak baik digunakan pada ERD?', NULL, 1, '2024-10-08 09:31:11', '2024-10-08 09:31:11'),
(7, '0fc82aa8-be28-4919-b199-7f5bd9d50556', 'PERTEMUAN 4', 'Apa itu normalisasi pada ERD?', NULL, 1, '2024-10-16 19:51:59', '2024-10-16 19:51:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@dikiraha.com', NULL, '$2y$10$0vjnc5y.jzbX6bv4qihOO.O57YrUpDZ2l14g/tUiHX4G7F7nvgfQS', NULL, NULL, NULL),
(2, 'User', 'user@dikiraha.com', NULL, '$2y$10$gb58xoGfZzPOhXrcwPuf3euTlQTWVu06566KMkF4R73SPQ5AwVgFS', NULL, '2024-10-12 14:46:39', '2024-10-12 14:46:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `portals`
--
ALTER TABLE `portals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `portals`
--
ALTER TABLE `portals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
