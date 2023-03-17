-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2023 pada 05.13
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabulasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `bus_berangkat` varchar(50) NOT NULL,
  `pnp_berangkat` varchar(50) NOT NULL,
  `bus_datang` varchar(50) NOT NULL,
  `pnp_datang` varchar(50) NOT NULL,
  `laik` varchar(50) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `tidak_laik` varchar(50) NOT NULL,
  `jumlah_rampcheck` varchar(50) NOT NULL,
  `positive` varchar(50) NOT NULL,
  `negative` varchar(50) NOT NULL,
  `self_jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `tanggal`, `bus_berangkat`, `pnp_berangkat`, `bus_datang`, `pnp_datang`, `laik`, `catatan`, `tidak_laik`, `jumlah_rampcheck`, `positive`, `negative`, `self_jumlah`) VALUES
(1, '2023-03-15', '1', '2', '4', '3', '5', '6', '7', '8', '9', '10', '11'),
(4, '2023-03-16', '200', '300', '400', '1500', '500', '600', '700', '800', '900', '1000', '1100'),
(5, '2023-03-16', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25'),
(6, '2023-03-16', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items1`
--

CREATE TABLE `items1` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `items1`
--

INSERT INTO `items1` (`id`, `title`, `description`) VALUES
(1, '33gfdg', 'fdgfd'),
(2, 'gw', 'dfds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mudik1`
--

CREATE TABLE `mudik1` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `bus_berangkat` varchar(50) NOT NULL,
  `pnp_berangkat` varchar(50) NOT NULL,
  `bus_datang` varchar(50) NOT NULL,
  `pnp_datang` varchar(50) NOT NULL,
  `laik` varchar(50) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `tidak_laik` varchar(50) NOT NULL,
  `jumlah_rampcheck` varchar(50) NOT NULL,
  `positive` varchar(50) NOT NULL,
  `negative` varchar(50) NOT NULL,
  `self_jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mudik1`
--

INSERT INTO `mudik1` (`id`, `tanggal`, `bus_berangkat`, `pnp_berangkat`, `bus_datang`, `pnp_datang`, `laik`, `catatan`, `tidak_laik`, `jumlah_rampcheck`, `positive`, `negative`, `self_jumlah`) VALUES
(1, '2023-03-13', '113', '57', '121', '535', '15', '5', '30', '50', '1', '59', '60'),
(2, '2015-04-12', '155', '356', '21', '106', '20', '25', '15', '18', '25', '7', '52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mudik2023`
--

CREATE TABLE `mudik2023` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `rt_positif` int(11) NOT NULL,
  `rt_negatif` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pengemudi_catatan` int(11) NOT NULL,
  `pengemudi_tidak_laik` int(11) NOT NULL,
  `pengemudi_jumlah` int(11) NOT NULL,
  `self_kecil` int(11) NOT NULL,
  `self_sedang` int(11) NOT NULL,
  `self_rendah` int(11) NOT NULL,
  `self_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mudik2023`
--

INSERT INTO `mudik2023` (`id`, `tanggal`, `rt_positif`, `rt_negatif`, `jumlah`, `pengemudi_catatan`, `pengemudi_tidak_laik`, `pengemudi_jumlah`, `self_kecil`, `self_sedang`, `self_rendah`, `self_jumlah`) VALUES
(1, '2023-03-13', 23, 11, 34, 34, 34, 68, 1, 3, 4, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileNumber` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `mobileNumber`, `password`, `foto`) VALUES
(1, 'Melinda', 'finna@gmail.com', 8978109784, '$2y$10$s6TBAMioUjNtKc9kddSVDOc7bSJz5Q.pKkGt8ya0XidlvjKKN/hLy', 'ismanto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `items1`
--
ALTER TABLE `items1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mudik1`
--
ALTER TABLE `mudik1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mudik2023`
--
ALTER TABLE `mudik2023`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `items1`
--
ALTER TABLE `items1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
