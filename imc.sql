-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2022 pada 13.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imc`
--
CREATE DATABASE IF NOT EXISTS `imc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `imc`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `client_kontruksi`
--

CREATE TABLE `client_kontruksi` (
  `id_ck` int(11) NOT NULL,
  `ck_tipe` varchar(255) NOT NULL COMMENT 'Tipe Client Kontruksi (Baru/Pengerjaan/Pending)',
  `ck_nama` varchar(255) NOT NULL COMMENT 'Nama Pemilik (Pemesan/Client)',
  `ck_tel` varchar(255) NOT NULL COMMENT 'Nomor Ponsel Client',
  `ck_alamat` text NOT NULL COMMENT 'Alamat Asal Client',
  `ck_tanggalmasuk` varchar(255) NOT NULL COMMENT 'Tanggal Pendaftaran / Pendataan Pertama',
  `ck_tanggal` varchar(255) NOT NULL COMMENT 'Tanggal Update / Pembaruan Progress Client',
  `ck_jenis` varchar(255) NOT NULL COMMENT 'Jenis Permintaan Pemesanan Client (Cafe/Container/Rumah/...)',
  `ck_catatan` text NOT NULL COMMENT 'Catatan/Deskripsi/Pesan Client',
  `ck_progress` varchar(255) NOT NULL COMMENT 'Progress Pengerjaan (0-100%)',
  `ck_keterangan` text NOT NULL COMMENT 'Catatan Progress Pengerjaan',
  `ck_tracking` varchar(12) NOT NULL COMMENT 'Kode Tracking Client',
  `ck_foto1` text NOT NULL COMMENT 'Foto Bukti Progress Ke-1',
  `ck_foto2` text NOT NULL COMMENT 'Foto Bukti Progress Ke-2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `client_mobil`
--

CREATE TABLE `client_mobil` (
  `id_cm` int(11) NOT NULL,
  `cm_tipe` varchar(255) NOT NULL COMMENT 'Tipe Client Mobil (Baru/Pengerjaan/Pending)',
  `cm_nama` varchar(255) NOT NULL COMMENT 'Nama Pemilik (Pemesan/Client)',
  `cm_tel` varchar(255) NOT NULL COMMENT 'Nomor Ponsel Client',
  `cm_alamat` text NOT NULL COMMENT 'Alamat Asal Client',
  `cm_tanggalmasuk` varchar(255) NOT NULL COMMENT 'Tanggal Pendaftaran / Pendataan Pertama',
  `cm_tanggal` varchar(255) NOT NULL COMMENT 'Tanggal Update / Pembaruan Progress Client',
  `cm_namamobil` varchar(255) NOT NULL COMMENT 'Nama Mobil Milik Client',
  `cm_nopol` varchar(225) NOT NULL COMMENT 'Nomor Polisi Mobil Milik Client',
  `cm_norangka` varchar(225) NOT NULL COMMENT 'Nomor Rangka Mobil Milik Client',
  `cm_nomesin` varchar(225) NOT NULL COMMENT 'Nomor Mesin Mobil Milik Client',
  `cm_tahunmobil` varchar(225) NOT NULL COMMENT 'Tahun Mobil Milik Client',
  `cm_jenismobil` varchar(225) NOT NULL COMMENT 'Jenis Mobil (Matic/Manual/Hybrid)',
  `cm_catatan` text NOT NULL COMMENT 'Catatan/Deskripsi/Pesan Client',
  `cm_tracking` varchar(12) NOT NULL COMMENT 'Kode Tracking Client',
  `cm_progress` varchar(225) NOT NULL COMMENT 'Progress Pengerjaan (0-100%)',
  `cm_keterangan` varchar(255) NOT NULL COMMENT 'Catatan Progress Pengerjaan',
  `cm_foto1` text NOT NULL COMMENT 'Foto Bukti Progress Ke-1',
  `cm_foto2` text NOT NULL COMMENT 'Foto Bukti Progress Ke-2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL COMMENT 'Kategori Admin (1.Pengelola(ALL) 2.Administrator(NOT-ALL))',
  `nama_admin` varchar(255) NOT NULL COMMENT 'Nama Admin',
  `telepon` varchar(255) NOT NULL COMMENT 'Nomor Ponsel Admin',
  `username_admin` varchar(255) NOT NULL COMMENT 'Nama Pengguna Admin',
  `pass_admin` text NOT NULL COMMENT 'Password Admin',
  `catatan_admin` text NOT NULL COMMENT 'Catatan Admin',
  `log_user` varchar(255) NOT NULL COMMENT 'Rekam Jejak Log-in Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_admin`, `kategori`, `nama_admin`, `telepon`, `username_admin`, `pass_admin`, `catatan_admin`, `log_user`) VALUES
(2, 'Pengelola', 'Pengelola', '111-111-222-222', 'pengelola', '$2y$10$K7X9Wa4CAxNAF0Tmq48PL.JKeQEUmGQkwkjzB8OsHS4488yIkOXea', 'Pengelola', ''),
(8, 'Administrator', 'Admin', 'admin', 'admin', '$2y$10$3O9V7QQP4gH1tIRraIpq0OmfbR5f5UYngoDRl0LWEl0pJMeVHznxW', 'Administrasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_faq`
--

CREATE TABLE `web_faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_galeri`
--

CREATE TABLE `web_galeri` (
  `id_galeri` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_log`
--

CREATE TABLE `web_log` (
  `id_log` int(11) NOT NULL,
  `des_log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_smedia`
--

CREATE TABLE `web_smedia` (
  `id_smedia` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `web_smedia`
--

INSERT INTO `web_smedia` (`id_smedia`, `facebook`, `instagram`, `youtube`, `whatsapp`, `email`) VALUES
(1, 'https://www.facebook.com/indonesiamodifikasiclassic', 'https://instagram.com/indonesiamodifikasiclassic27', 'https://www.youtube.com/channel/UCcj73EJtBRPSWDX8V96XlpA', 'https://wa.me/6281331739037', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `client_kontruksi`
--
ALTER TABLE `client_kontruksi`
  ADD PRIMARY KEY (`id_ck`);

--
-- Indeks untuk tabel `client_mobil`
--
ALTER TABLE `client_mobil`
  ADD PRIMARY KEY (`id_cm`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `web_faq`
--
ALTER TABLE `web_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `web_galeri`
--
ALTER TABLE `web_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `web_log`
--
ALTER TABLE `web_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `web_smedia`
--
ALTER TABLE `web_smedia`
  ADD PRIMARY KEY (`id_smedia`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `client_kontruksi`
--
ALTER TABLE `client_kontruksi`
  MODIFY `id_ck` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT untuk tabel `client_mobil`
--
ALTER TABLE `client_mobil`
  MODIFY `id_cm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `web_faq`
--
ALTER TABLE `web_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT untuk tabel `web_galeri`
--
ALTER TABLE `web_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT untuk tabel `web_log`
--
ALTER TABLE `web_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT untuk tabel `web_smedia`
--
ALTER TABLE `web_smedia`
  MODIFY `id_smedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
