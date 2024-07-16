-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2024 pada 18.22
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwebstaida`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(100) NOT NULL,
  `judulberita` text NOT NULL,
  `judulringkas` text NOT NULL,
  `isiberita` text NOT NULL,
  `gambarberita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judulberita`, `judulringkas`, `isiberita`, `gambarberita`) VALUES
(11, 'HISTORY, PURPOSE AND USAGE', 'satu dua tiga empat li gu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus quis facere rerum soluta pariatur. Odio, harum sit quos accus', 'd2cqpvj-d3dc23fb-57ae-49e2-b9cb-a73e4dff9533.jpg'),
(13, 'WHATS IS LOREM IPSUM ?', 'Lorem Ipsum is simply dummy', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus quis facere rerum soluta pariatur. Odio, harum sit quos accusantium ea odit, cum nesciunt incidunt exercitationem magni ipsum quibusdam', 'd2cqpvj-d3dc23fb-57ae-49e2-b9cb-a73e4dff9533.jpg'),
(14, 'HISTORY, PURPOSE AND USAGE', 'satu dua tiga', 'berita ini disiarkan langsung dari tempat kkm yang berdomisili di daerah langkat utara, mahasiswa melakukan kegiatan pada desa tersebut sampai bulan agustus', 'd2cqpvj-d3dc23fb-57ae-49e2-b9cb-a73e4dff9533.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarusers`
--

CREATE TABLE `daftarusers` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftarusers`
--

INSERT INTO `daftarusers` (`id`, `username`, `password`) VALUES
(24, 'manu', '$2y$10$yMDh2PGKiVIvGGMPWS.7GeioUzwzKaq4tO3avzRaDjo179iArdLhq'),
(25, 'satu', '$2y$10$PidGYu6Gah77jd0ELnS0VO2qDpdybcZI2O9L6vbLaTjVqO3ZcP9/6'),
(26, 'tiga', '$2y$10$2BWxT95/V96x6Ev/H2JRyOspwiR5bOJW3/HjIA1k09jn2QmQ5M616');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftarusers`
--
ALTER TABLE `daftarusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `daftarusers`
--
ALTER TABLE `daftarusers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
