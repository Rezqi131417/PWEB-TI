-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2026 pada 08.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(10) NOT NULL,
  `nama_dosen` text NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `TA` varchar(10) NOT NULL,
  `kd_prodi` varchar(10) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `nidn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `namaKelas` varchar(255) NOT NULL,
  `TA` varchar(255) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(10) NOT NULL,
  `id_jadwal` int(10) NOT NULL,
  `nim` int(10) NOT NULL,
  `TA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(16) NOT NULL,
  `kd_prodi` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `NIK`, `alamat`, `hp`, `kd_prodi`, `password`) VALUES
(23071022, 'Budi A', 'Pekanbaru', '2026-11-25', '123456122333', 'jl seroja', '025255566555', '', 'fc3f43cea9d49885b244ca9a9a5edd74');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_MK` varchar(10) NOT NULL,
  `nama_MK` text NOT NULL,
  `SKS` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `kd_prodi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` varchar(20) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nama_prodi`, `jenjang`) VALUES
('IKM', 'Ilmu Kesehatan Masyarakat', 'S1'),
('SI', 'Sistem Informasi', 'S1'),
('TI', 'Teknik Informatika', 'S1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta`
--

CREATE TABLE `ta` (
  `id_TA` int(10) NOT NULL,
  `kode_TA` varchar(50) NOT NULL,
  `nama_TA` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'deni', 'mdn', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);

--
-- Indeks untuk tabel `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_TA`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ta`
--
ALTER TABLE `ta`
  MODIFY `id_TA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
