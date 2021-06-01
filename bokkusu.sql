-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Jun 2021 pada 11.16
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bokkusu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id` int(10) NOT NULL,
  `kerjasama_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `proposal` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `moa` varchar(255) DEFAULT NULL,
  `doc` varchar(255) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id`, `kerjasama_id`, `name`, `proposal`, `mou`, `moa`, `doc`, `status`) VALUES
(1, NULL, 'LegalDoc001', NULL, NULL, NULL, 'file/L8zaeebM60iegE7BxG251yT4G4xagxDi2kxay1tG.pdf', '1'),
(3, NULL, 'DOCS115', NULL, NULL, NULL, 'file/M7IdBQ7kZOLu62sI9tKW3j0HZUohnrtKGtnf3E2m.pdf', '4'),
(4, NULL, 'Documents Legal Kerjasama 001', NULL, 'file/EEIK0PBcxq7wGPjK8hPGTH5UMDCHoPgr3IWtKMlz.pdf', 'file/bsuwYyCu6WA2CX4w60L3MYswuaWIdmQunKUxXA3a.pdf', 'file/8plaabKztT2EzSDO4caL6zcWTShJZV5XNCGurLVy.pdf', '2'),
(5, NULL, 'DOC0011', 'file/WzpxxWprZCoKcJxJ4QX24uluElbNt6Mj6USPGDOW.pdf', 'file/rVhEotpaAp0oB6vDr1JMTWrGhAYLx3iYBzEOcwJA.pdf', 'file/Tmbl77p2ll077tZ1RfjCO89TXDVbzP9b9LqC4DEg.pdf', 'file/56EOmsZdgyOlwqcTzHm1MpaIc7q786FY8hfPGRus.pdf', '2'),
(6, NULL, 'MOUDOC001', 'file/OA6G4pX6nyOO5BPpdHxfFyn89ZUltuaK1qLUUpWR.pdf', 'file/OyWdGVtr4nWET03jTVw6hBxsDBIosfvH3Nh9YEel.pdf', 'file/GN5PqDFO8ar3Oh7SB5DwNys1peIbTVnEvbgiIQ6A.pdf', 'file/UtC64RfuJOwJIK3ay8aiKBxzN6qEuoVTDfit5D9s.pdf', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasama`
--

CREATE TABLE `kerjasama` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `mitra` varchar(100) DEFAULT NULL,
  `institusi_mitra` varchar(100) DEFAULT NULL,
  `jabatan_mitra` varchar(50) DEFAULT NULL,
  `jenis_instansi` varchar(25) DEFAULT NULL,
  `jenis_dokumen` varchar(15) NOT NULL,
  `files` varchar(255) DEFAULT NULL,
  `status` enum('1','2','3','4') DEFAULT NULL,
  `perihal` text NOT NULL,
  `durasi` int(11) NOT NULL,
  `unit_pelaksana` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `rencana_implementasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kerjasama`
--

INSERT INTO `kerjasama` (`id`, `user_id`, `mitra`, `institusi_mitra`, `jabatan_mitra`, `jenis_instansi`, `jenis_dokumen`, `files`, `status`, `perihal`, `durasi`, `unit_pelaksana`, `deskripsi`, `rencana_implementasi`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'MOU', '', '3', 'lorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sit', 125, 'admin1', 'lorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sit', 'lorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum'),
(3, NULL, NULL, NULL, NULL, NULL, 'PROPOSAL', NULL, '4', 'Proposal 1', 125, 'admin1', 'lorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sit', 'lorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum sitlorem ipsum'),
(4, NULL, NULL, NULL, NULL, NULL, 'PROPOSAL', NULL, '1', 'Proposal Pengesahan', 30, 'Tri Budi', 'Dokumen untuk pengesahan', 'Rencana implementasi dokumen 1'),
(5, NULL, NULL, NULL, NULL, NULL, 'PROPOSAL', 'file/KfG1WRCnYC9nQtT5YExAWNbybZWCZtYmml9R5iOz.pdf', '2', 'Proposal Pengesahan 2', 60, 'Tri Budi', 'Proposal pengesahan untuk dokumen 2', 'Rencana Proposal pengesahan untuk dokumen 2'),
(6, NULL, 'John Doe', 'Telkom Indonesia', 'Manager', 'BUMN', 'MOA', 'file/SJKCKKo84SJVqjgsH2I4Rt3nDLvNtmLgBqTomzaW.pdf', '1', 'Perihal MOA 1', 90, 'admin1', 'Tentang MOA 1', 'Rencana MOA 001');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Struktur dari tabel `pengesahan`
--

CREATE TABLE `pengesahan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `proposal` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `moa` varchar(255) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `status` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengesahan`
--

INSERT INTO `pengesahan` (`id`, `name`, `proposal`, `mou`, `moa`, `doc`, `status`) VALUES
(0, 'MOUDOC001', 'file/OA6G4pX6nyOO5BPpdHxfFyn89ZUltuaK1qLUUpWR.pdf', 'file/OyWdGVtr4nWET03jTVw6hBxsDBIosfvH3Nh9YEel.pdf', 'file/GN5PqDFO8ar3Oh7SB5DwNys1peIbTVnEvbgiIQ6A.pdf', 'file/UtC64RfuJOwJIK3ay8aiKBxzN6qEuoVTDfit5D9s.pdf', '1'),
(1, 'DOC0011', 'file/rQ2VmqxFk1ZNrplmMwwBOJb7Q1SCRNaEZLl0JJ3U.pdf', 'file/S7RbdT8lFnykyXNHrfwXxUuUQ6LiRGC5Kk66xqs9.pdf', 'file/MrFo8oqMz29OV0wGwj7zHbdvEpsxPDHTxhzl0RiV.pdf', 'file/nfSuy1s4oUb3rlHhtK27jQ1y7HB3O0zIH6tMC6Qg.pdf', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `role`, `sex`, `institution`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin1', 'awebsite84@gmail.com', '2', 'Male', 'ITS SEPULUH NOPEMBER', NULL, '$2y$10$u3TvfgPKrX3vbFovkMwLC.QtYBiYgurWJUTsXrcWI6Dy3TzALVPh6', NULL, NULL, NULL),
(5, 'tribudi123', 'Tri Budi', 'tribudi123@gmail.com', '1', 'male', 'ITTelkom Surabaya', NULL, '$2y$10$sM6BMi/GquJsP0aCEzLv1.qZqViHYIazks5tveia27m9Jofm7Txia', NULL, NULL, NULL),
(6, 'rektor1', 'Rektor ITTelkom Surabaya', 'rektor1@gmail.com', '4', 'Male', 'ITTelkom Surabaya', NULL, '$2y$10$Zf7sNkYPTgYkLu5oqzH.mOmyFIuZC1khlsPGk1z93a6K2W3o5FOja', NULL, NULL, NULL),
(7, 'legal1', 'Legal', 'legal1@gmail.com', '3', 'Female', 'ITTelkom Surabaya', NULL, '$2y$10$aR/o.61azmoLk0LfZmu9p.BHrsz6gmbXpLLCluK1nS27vyLMtY5h6', NULL, NULL, NULL),
(8, 'guest123', 'guest campus', 'guest1@gmail.com', '5', 'male', 'ITTelkom Surabaya', NULL, '$2y$10$6REL0ZN6Pz.Zpoq458lCO.SQs8M6O1ZGNaYTI.KYo9pgVQsOByL5m', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kerjasama_id` (`kerjasama_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengesahan`
--
ALTER TABLE `pengesahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unit`
--
ALTER TABLE `unit`
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
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
