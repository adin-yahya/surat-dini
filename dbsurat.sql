-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Jul 2021 pada 14.43
-- Versi server: 8.0.18
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
--

CREATE TABLE `datauser` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datauser`
--

INSERT INTO `datauser` (`id_user`, `nama_user`, `username`, `telp`, `email`, `password`, `role`) VALUES
(7, 'admin', 'admin', '0855545', 'sldkfjka@sakdfjl', 'admin', 1),
(8, 'kepala sekolah', 'kepsek', '08888888888', 'kepsek', 'kepsek', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id_dp` int(11) NOT NULL,
  `id_sm` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_dp` date NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `tujuan_dp` varchar(50) NOT NULL,
  `sifatsurat` varchar(50) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `icon`, `url`) VALUES
(1, 'Dashboard', '<i class=\"fas fa-tachometer-alt\"></i>', NULL),
(2, 'Surat Masuk', '<i class=\"far fa-envelope\"></i>', 'user/masuk'),
(3, 'Surat Keluar', '<i class=\"far fa-envelope-open\"></i>', 'user/keluar'),
(4, 'Buku Agenda Surat Masuk', '<i class=\"fas fa-book\"></i>', 'user/bukuagendasm'),
(8, 'Buku Agenda Surat Keluar', '<i class=\"fas fa-book\"></i>', 'user/bukuagendask'),
(10, 'Data User', '<i class=\"far fa-user\"></i>', 'user/datauser');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_kepsek`
--

CREATE TABLE `menu_kepsek` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_kepsek`
--

INSERT INTO `menu_kepsek` (`id`, `name`, `icon`, `url`) VALUES
(1, 'Dashboard', '<i class=\"fas fa-tachometer-alt\"></i>', '/kepsek'),
(2, 'Disposisi', '<i class=\"fas fa-tachometer-alt\"></i>', 'kepalasekolah/disposisi_kepsek'),
(3, 'Surat Masuk', '<i class=\"fas fa-tachometer-alt\"></i>', 'kepalasekolah/suratmasuk_kepsek'),
(4, 'Surat Keluar', '<i class=\"fas fa-tachometer-alt\"></i>', 'kepalasekolah/suratkeluar_kepsek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `submenu`
--

INSERT INTO `submenu` (`id`, `menu_id`, `nama`, `url`) VALUES
(1, 4, 'Surat Masuk', 'user/bukuagendasm'),
(2, 4, 'Surat Keluar', 'user/bukuagendask');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_sk` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `lampiran` varchar(100) DEFAULT NULL,
  `penerima` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `pembuka_sk` text,
  `isi_sk` text,
  `penutup_sk` text,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_sm` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `file` text,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_dp`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu_kepsek`
--
ALTER TABLE `menu_kepsek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_sm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datauser`
--
ALTER TABLE `datauser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_dp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `menu_kepsek`
--
ALTER TABLE `menu_kepsek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_sm` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
