-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Apr 2025 pada 18.41
-- Versi server: 10.6.20-MariaDB-cll-lve
-- Versi PHP: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oucyiaux_pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balasan`
--

CREATE TABLE `balasan` (
  `ID_BALASAN` int(11) NOT NULL,
  `ID_PENGADUAN` int(11) DEFAULT NULL,
  `KETERANGAN` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `balasan`
--

INSERT INTO `balasan` (`ID_BALASAN`, `ID_PENGADUAN`, `KETERANGAN`) VALUES
(1, 1, 'BJHFJHFHGFHFGFHGJFHGJFHGJFHGFJHGFJHGFHBUBUBUBCWEUUUDGYEUGYWEFYFYGFWEYUWGFYGFYGFWEGFWUIHDUIHDUIDHIUDHIUDHQIUDHUIDHIUQDHWIQDHIHDIDBCHDVJHGJHGKDS'),
(5, 1, 'percobaan'),
(6, 4, 'percobaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `ID_PENGADUAN` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `PENGADUAN` text DEFAULT NULL,
  `LOKASI` varchar(255) DEFAULT NULL,
  `NAMA` varchar(255) DEFAULT NULL,
  `JENIS` varchar(255) DEFAULT NULL,
  `STATUS` enum('diproses','ditolak','disetujui') DEFAULT 'diproses',
  `DOKUMEN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`ID_PENGADUAN`, `ID_USER`, `PENGADUAN`, `LOKASI`, `NAMA`, `JENIS`, `STATUS`, `DOKUMEN`) VALUES
(1, 1, 'agomo', 'lamogan', 'huda', 'Pelayanan Publik', 'ditolak', NULL),
(4, 2, 'tai', 'klitih', 'hudaku', 'Lingkungan', 'disetujui', NULL),
(6, 2, '23', '23', '22', 'Lingkungan', 'diproses', NULL),
(11, 4, 'qw', 'qw', 'qwqw', 'Lingkungan', 'diproses', '1745388972.jpg'),
(12, 4, 'qw', 'qw', 'qw', 'Pelayanan Publik', 'diproses', '1745389215.pdf'),
(13, 6, 'jalan rusak berlubang minim penerangan', 'semua jalan di lamongan', 'yes', 'Lainnya', 'diproses', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `noHp` varchar(255) DEFAULT NULL,
  `level` enum('admin','user','petugas') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `foto`, `alamat`, `noHp`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$BGS6bFDXjiJnqpKfKJ0Pd.RBULiovqi/wC6xm0JUxy6jaM9C5kW02', NULL, '2025-04-21 10:06:29', '2025-04-21 10:06:29', '1745388361.jpg', 'Lamongan1', '+628579141725', 'admin'),
(2, 'petugas', 'petugas@gmail.com', NULL, '$2y$10$Bt//K6WUbvP1caq2teUR4eztVXdXJof8dlgqdT5Mtw93srQubKNSu', NULL, '2025-04-21 22:36:33', '2025-04-21 22:36:33', NULL, NULL, '+62', 'petugas'),
(4, 'percobaan12', 'pc@gmail.com', NULL, '$2y$10$KMr7iPhPN9Xkjwau4oWyNOKV8u46N5Yo4Wsef09CniJ/MvDAbY8u2', NULL, '2025-04-23 04:15:35', '2025-04-23 04:15:35', NULL, NULL, NULL, 'user'),
(5, 'terbaru', 'pp@gmail.com', NULL, '$2y$10$ng1qytpqeJ4D9uGwV0hbheWwVo5Mm80UehxD61iYoKkR.zBZ4lGAq', NULL, '2025-04-23 08:11:31', '2025-04-23 08:11:31', NULL, NULL, NULL, 'user'),
(6, 'sagah', 'sagahgalih@gmail.com', NULL, '$2y$10$90SK5VxvdFrSxkSesTVuH.j1D4eZtt7o3Qv4H4BZIzB.zu9JFJGC.', NULL, '2025-04-23 10:39:41', '2025-04-23 10:39:41', NULL, NULL, NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `balasan`
--
ALTER TABLE `balasan`
  ADD PRIMARY KEY (`ID_BALASAN`),
  ADD KEY `NNUNU` (`ID_PENGADUAN`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`ID_PENGADUAN`),
  ADD KEY `dsjdhj` (`ID_USER`);

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
-- AUTO_INCREMENT untuk tabel `balasan`
--
ALTER TABLE `balasan`
  MODIFY `ID_BALASAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `ID_PENGADUAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `balasan`
--
ALTER TABLE `balasan`
  ADD CONSTRAINT `NNUNU` FOREIGN KEY (`ID_PENGADUAN`) REFERENCES `pengaduan` (`ID_PENGADUAN`);

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `dsjdhj` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
