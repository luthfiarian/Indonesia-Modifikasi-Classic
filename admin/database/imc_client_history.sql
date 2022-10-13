-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2022 pada 06.21
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imc_client_history`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontruksi`
--

CREATE TABLE `kontruksi` (
  `id_hk` int(11) NOT NULL COMMENT 'ID History Kontruksi',
  `hk_tracking` varchar(12) NOT NULL COMMENT 'Tracking History',
  `hk_tanggal` varchar(255) NOT NULL COMMENT 'History Tanggal Update',
  `hk_keterangan` text NOT NULL COMMENT 'History Update Keterangan',
  `hk_foto1` text NOT NULL COMMENT 'History Update Foto 1',
  `hk_foto2` text NOT NULL COMMENT 'History Update Foto 2',
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_hm` int(11) NOT NULL COMMENT 'ID History Mobil',
  `hm_tracking` varchar(12) NOT NULL COMMENT 'History Tracking',
  `hm_keterangan` text NOT NULL COMMENT 'History Keterangan Progress',
  `hm_tanggal` varchar(255) NOT NULL COMMENT 'History Tanggal Update',
  `hm_foto1` text NOT NULL COMMENT 'History Foto 1 Progress',
  `hm_foto2` text NOT NULL COMMENT 'History Foto 2 Progress',
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontruksi`
--
ALTER TABLE `kontruksi`
  ADD PRIMARY KEY (`id_hk`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_hm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontruksi`
--
ALTER TABLE `kontruksi`
  MODIFY `id_hk` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID History Kontruksi';

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_hm` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID History Mobil';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
