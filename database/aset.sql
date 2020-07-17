-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2020 pada 00.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_keluaran` date NOT NULL,
  `tahun_datang` date NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `serial`, `nama`, `merek`, `type`, `tahun_keluaran`, `tahun_datang`, `kondisi`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'ase12ss', 'arief', 'setya', '12ss', '2020-07-14', '2020-07-14', 'Baik', 1, '2020-07-14 02:40:01', '2020-07-14 02:40:01'),
(2, 'aasasadadaw34', 'abc', 'asd322f', 'asadadaw34', '2020-07-14', '2020-07-14', 'Baik', 1, '2020-07-14 06:48:22', '2020-07-14 23:35:09'),
(3, 'ddawdad232q', 'dasdw', 'dadas', 'wdad232q', '2020-07-14', '2020-07-14', 'Baik', 1, '2020-07-14 06:52:50', '2020-07-14 06:52:50'),
(4, 'sdwsadasdasde', 'sadasd', 'dwa3ad', 'sadasdasde', '2020-07-14', '2020-07-14', 'rusak', 1, '2020-07-14 06:53:17', '2020-07-15 20:06:20'),
(6, 'ssaasadadaw34', 'sadasd', 'sadad', 'asadadaw34', '2020-07-14', '2020-07-14', 'Baik', 1, '2020-07-14 06:56:01', '2020-07-14 06:56:01'),
(7, 'adasadaw12s', 'asdawda', 'dada', 'sadaw12s', '2020-07-14', '2020-07-14', 'Baik', 1, '2020-07-14 06:56:49', '2020-07-14 06:56:49'),
(8, 'aafafa', 'agadfa', 'afdfaf', 'afa', '1212-03-23', '2020-07-14', 'baik', 1, '2020-07-14 06:59:02', '2020-07-15 09:55:14'),
(9, 'dsdsda', 'dad', 'sdaad', 'sda', '1122-11-12', '2234-12-04', 'Baik', 1, '2020-07-14 07:01:55', '2020-07-14 07:01:55'),
(10, 'sdaasadadaw34', 'sadasd', 'dada', 'asadadaw34', '2020-02-12', '2020-07-14', 'Baik', 1, '2020-07-14 07:34:12', '2020-07-14 07:34:12'),
(11, 'sdasadasd', 'sdad', 'dasda', 'sadasd', '2020-07-15', '2020-07-15', 'Baik', 1, '2020-07-15 07:24:34', '2020-07-15 07:24:34'),
(12, 'jsaaaa', 'jlj', 'samsu', 'aaa', '2020-07-15', '2020-07-15', 'Baik', 1, '2020-07-15 08:05:06', '2020-07-15 08:05:06'),
(13, 'aababc', 'abc', 'abc', 'abc', '2020-07-15', '2020-07-15', 'Baik', 4, '2020-07-15 08:06:49', '2020-07-15 08:25:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `distribusis`
--

CREATE TABLE `distribusis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `landasan_permintaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_penerima` bigint(20) UNSIGNED NOT NULL,
  `tempat_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `prioritas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_kepala` int(11) DEFAULT NULL,
  `id_status` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `distribusis`
--

INSERT INTO `distribusis` (`id`, `tanggal`, `landasan_permintaan`, `id_penerima`, `tempat_penerima`, `id_barang`, `jumlah`, `prioritas`, `id_admin`, `id_kepala`, `id_status`, `created_at`, `updated_at`) VALUES
(1, '2020-07-15', 'as', 0, 'asda', 1, 2, 'on', 1, 2, 3, NULL, '2020-07-15 16:51:49'),
(2, '2020-07-15', 'sdada', 0, 'adad', 1, 2, 'o', 1, NULL, 2, NULL, '2020-07-15 17:02:05'),
(3, '2020-07-15', 'sdada', 0, 'adad', 12, 1, 'n', NULL, NULL, 1, NULL, NULL),
(4, '2020-07-15', 'sdada', 0, 'adad', 1, 1, 's', NULL, NULL, 1, NULL, NULL),
(5, '2020-07-15', 'sdada', 0, 'adad', 1, 1, 's', NULL, NULL, 1, NULL, NULL),
(6, '2020-07-15', 'sdada', 0, 'adad', 1, 1, 'penting', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_14_080324_create_barangs_table', 2),
(5, '2020_07_15_080007_create_peminjamen_table', 3),
(6, '2020_07_15_133129_create_distribusis_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjamen`
--

CREATE TABLE `peminjamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tujuan_pinjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimasi_waktu` date NOT NULL,
  `diskripsi_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_karyawan` bigint(20) UNSIGNED NOT NULL,
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `id_status` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjamen`
--

INSERT INTO `peminjamen` (`id`, `tanggal_pinjam`, `tujuan_pinjam`, `estimasi_waktu`, `diskripsi_barang`, `id_admin`, `created_at`, `updated_at`, `id_karyawan`, `id_barang`, `id_status`, `jumlah`) VALUES
(3, '2020-07-15 15:30:33', 'Kebutuhan Di Area Rumahsakit', '2020-07-15', 'fafafa', NULL, NULL, '2020-07-15 05:37:18', 0, 1, 4, 1),
(4, '2020-07-16 03:05:59', 'Kebutuhan Di Area Rumahsakit', '2020-07-17', 'sdadsadad', NULL, NULL, '2020-07-15 20:05:59', 0, 1, 6, 1),
(5, '2020-07-15 15:30:35', 'Kebutuhan Di Area Rumahsakit,Kebutuhan Di Luar Area Rumahsakit', '2020-07-17', 'sdadsadad', NULL, NULL, NULL, 0, 4, 2, 1),
(6, '2020-07-16 02:48:38', 'Kebutuhan Di Area Rumahsakit,Kebutuhan Di Luar Area Rumahsakit', '2020-07-17', 'sdadsadad', NULL, NULL, '2020-07-15 09:52:25', 0, 6, 5, 1),
(7, '2020-07-16 02:48:39', 'Kebutuhan Di Area Rumahsakit', '2020-07-15', 'jljljlj', NULL, NULL, '2020-07-15 09:54:38', 0, 3, 5, 1),
(8, '2020-07-16 02:48:45', 'Kebutuhan Di Area Rumahsakit', '2020-07-15', 'sadas', NULL, NULL, '2020-07-15 09:54:50', 0, 12, 5, 1),
(9, '2020-07-14 17:00:00', 'Kebutuhan Di Area Rumahsakit', '2020-07-15', 'sadas', NULL, NULL, NULL, 0, 11, 1, 1),
(10, '2020-07-14 17:00:00', 'Kebutuhan Di Area Rumahsakit', '2020-07-15', 'sadas', NULL, NULL, NULL, 0, 12, 1, 1),
(11, '2020-07-15 17:00:00', 'Kebutuhan Di Luar Area Rumahsakit', '2020-07-16', 'dadaasdadaa', NULL, NULL, NULL, 0, 12, 1, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'proses admin'),
(2, 'proses kepala'),
(3, 'approve'),
(4, 'cencel'),
(5, 'pinjam'),
(6, 'kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(0, 'User', 'user@user.com', NULL, 0, '$2y$10$5sLK9./fVXfeM0qvFd2RIOTLlDge8xrIRymYTT14TbZ4yenYCzx02', NULL, '2020-07-12 00:44:22', '2020-07-12 00:44:22'),
(1, 'Admin', 'admin@admin.com', NULL, 1, '$2y$10$O0VnkqD0/CxuSt/h50DCtulRWXhWchxwt9I77ynsNUKaerKjNSAVa', NULL, '2020-07-12 00:44:22', '2020-07-12 00:44:22'),
(2, 'Kaepala', 'kepala@kepala.com', NULL, 2, '$2y$10$O0VnkqD0/CxuSt/h50DCtulRWXhWchxwt9I77ynsNUKaerKjNSAVa', NULL, '2020-07-15 22:42:25', '2020-07-15 22:42:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `distribusis`
--
ALTER TABLE `distribusis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distribusis_id_penerima_foreign` (`id_penerima`),
  ADD KEY `distribusis_id_barang_foreign` (`id_barang`),
  ADD KEY `id_status` (`id_status`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjamen_id_karyawan_foreign` (`id_karyawan`),
  ADD KEY `peminjamen_id_barang_foreign` (`id_barang`),
  ADD KEY `id_status` (`id_status`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `distribusis`
--
ALTER TABLE `distribusis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT untuk tabel `peminjamen`
--
ALTER TABLE `peminjamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `distribusis`
--
ALTER TABLE `distribusis`
  ADD CONSTRAINT `distribusis_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `distribusis_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `distribusis_id_penerima_foreign` FOREIGN KEY (`id_penerima`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjamen`
--
ALTER TABLE `peminjamen`
  ADD CONSTRAINT `peminjamen_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjamen_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjamen_id_karyawan_foreign` FOREIGN KEY (`id_karyawan`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
