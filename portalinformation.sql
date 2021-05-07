-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2021 pada 05.44
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalinformation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `spesialis` varchar(160) NOT NULL,
  `lokasi` int(1) NOT NULL,
  `photo` varchar(160) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `spesialis`, `lokasi`, `photo`, `status`) VALUES
(1, 'dr. Riki Vita W., Sp.THT-KL', 'Spesialis THT', 0, 'img/dr. Riki Vita W., Sp.THT-KL.jpg', 0),
(2, 'dr. Yanto Widiantoro, Sp.KK', 'Spesialis Kulit dan Kelamin', 0, 'img/dr. Yanto Widiantoro,Sp.KK.jpg', 0),
(3, 'dr. Gustomo Panantro,Sp A, M.Kes', 'Spesialis Anak', 0, 'img/dr. Gustomo Panantro,Sp A, M.Kes.jpg', 0),
(4, 'dr. Hadiyana Suryadi, Sp.B', 'Spesialis Dalam', 0, 'img/dr. Hadiyana Suryadi, Sp.B.jpg', 0),
(5, 'dr. Allysa', 'Umum', 0, 'img/Wildan Auliana,A.Md.Kom.jpg', 0),
(7, 'Hendy Yogya', '-', 0, 'img/Hendy Yogya.jpg', 0),
(8, 'dr. Irma Fakhrosa', '-', 0, 'img/Irma Fakhrosa 2.jpg', 0),
(9, 'dr. Arief Satria Prabowo', 'Spesialis Obgyn', 0, 'img/Test.jpg', 0),
(10, 'dr. Irma Fakhrosa 1', '-', 0, 'img/Irma Fakhrosa 2.jpg', 0),
(11, 'dr. Arief Satria Prabowo 1', 'Spesialis Obgyn', 0, 'img/Test.jpg', 0),
(12, 'dr. Arief Satria Prabowo 2', 'Spesialis Obgyn', 0, 'img/Test.jpg', 0),
(13, 'dr. Arief Satria Prabowo 3\r\n', 'Spesialis Obgyn', 0, 'img/Test.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `id_dr` int(11) NOT NULL,
  `hari_praktek` varchar(160) NOT NULL,
  `shift` varchar(6) NOT NULL,
  `keterangan` varchar(16) DEFAULT NULL,
  `jam` varchar(20) DEFAULT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_dr`, `hari_praktek`, `shift`, `keterangan`, `jam`, `status`) VALUES
(1, 1, 'Friday', 'Siang', 'Tidak Praktek', '12:00 - 15:00', '0'),
(2, 2, 'Friday', '', 'Hadir', '15:00-17:00', '0'),
(3, 3, 'Friday', 'Pagi', 'Hadir', '09:00-13:00', '0'),
(4, 4, 'Friday', '', 'Hadir', '09:00-13:00', '0'),
(5, 5, 'Friday', '', 'Hadir', '09:00-13:00', '0'),
(6, 8, 'Friday', '', 'Hadir', '09:00-13:00', '0'),
(7, 9, 'Friday', '', 'Hadir', '09:00-13:00', '0'),
(8, 7, 'Friday', '', 'Hadir', '09:00-13:00', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_dr`
--

CREATE TABLE `status_dr` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(160) NOT NULL,
  `kode` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_dr`
--

INSERT INTO `status_dr` (`id`, `keterangan`, `kode`) VALUES
(1, 'Hadir', 0),
(2, 'Dalam Konfirmasi', 1),
(3, 'Dalam Perjanjian', 2),
(4, 'Tidak Praktek', 3),
(5, 'Cuti Sementara', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(35) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `bagian` varchar(5) DEFAULT NULL,
  `level` int(1) NOT NULL,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `bagian`, `level`, `status`) VALUES
('rizal', '150fb021c56c33f82eef99253eb36ee1', 'Tubagus Rizal Abdul Hamid', 'IT', 0, 1),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', 'User', 1, 0),
('wildan', 'af6b3aa8c3fcd651674359f500814679', 'Wildan Auliana', 'IT', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_dr`
--
ALTER TABLE `status_dr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `status_dr`
--
ALTER TABLE `status_dr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
