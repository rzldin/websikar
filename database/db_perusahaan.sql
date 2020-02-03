-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Feb 2020 pada 14.51
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perusahaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `kd_absensi` varchar(25) NOT NULL,
  `label` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `kd_absensi`, `label`) VALUES
(1, 'htw', 'Hadir Tepat Waktu'),
(2, 't', 'Terlambat'),
(3, 'd', 'Dinas'),
(4, 'm', 'Mangkir'),
(5, 'c', 'Cuti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `kd_depart` varchar(25) NOT NULL,
  `nama_depart` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `kd_depart`, `nama_depart`) VALUES
(1, 'DeptA', 'Departemen A'),
(2, 'DeptB', 'Departemen B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `kd_divisi` varchar(25) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `kd_divisi`, `nama_divisi`) VALUES
(1, 'DIV1', 'Karyawan INKA'),
(2, 'DIV2', 'Karyawan Kontrak'),
(3, 'DIV3', 'Organisasi HMS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam_kerja`
--

CREATE TABLE `jam_kerja` (
  `id` int(11) NOT NULL,
  `waktu` date NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jam_kerja`
--

INSERT INTO `jam_kerja` (`id`, `waktu`, `keterangan`, `nama_karyawan`) VALUES
(1, '2020-02-03', 'Terlambat', 'Agus'),
(2, '2020-02-03', 'Lembur', 'Agung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `kd_depart` varchar(10) NOT NULL,
  `kd_divisi` varchar(25) NOT NULL,
  `kd_tamat` varchar(25) NOT NULL,
  `kd_absensi` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `kd_depart`, `kd_divisi`, `kd_tamat`, `kd_absensi`, `alamat`, `no_telp`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `status`) VALUES
(1, 'Agus', 'DeptA', 'DIV1', 'SMK/SMA', 'd', 'jakarta', '0897606505', 'Solo', '1999-01-03', '928049182904', 1),
(2, 'sarah', 'DeptB', 'DIV1', 'SMK/SMA', 'm', 'jakarta Barat', '089102190', 'Blora', '1995-02-04', '120938000012', 1),
(3, 'Andika', 'DeptA', 'DIV2', 'S1', 't', 'tebet', '08901232', 'jakarta', '1992-07-10', '12093801', 1),
(4, 'Agung', 'DeptB', 'DIV2', 'SMK/SMA', 'htw', 'cagar alam', '089109231', 'Tanggerang', '1994-05-06', '1234400090', 1),
(5, 'Sugeng', 'DeptA', 'DIV2', 'S2', 'c', 'Mampang Tugu', '08912312', 'solo', '1997-12-03', '12312000023', 1),
(6, 'Ferdi', 'DeptB', 'DIV1', 'S1', 't', 'Pancoran', '089723121', 'Bogor', '1992-07-10', '0912400012112', 1),
(7, 'Ega', 'DeptA', 'DIV1', 'S1', 'c', 'Bogor', '08912311222', 'Jakarta', '1999-10-07', '0931231000112', 1),
(8, 'Eko', 'DeptB', 'DIV3', 'S1', 'c', 'Blora', '0897232536', 'solo', '1987-10-10', '08213012911', 1),
(9, 'Aliya', 'DeptA', 'DIV3', 'SMK/SMA', 'd', 'Semarang', '089121212', 'jakarta', '1989-10-10', '0920192111', 1),
(10, 'Eka', 'DeptA', 'DIV3', 'S2', 'htw', 'Solo', '0897232536', 'Jakarta', '1999-01-03', '120938000012', 1),
(11, 'Joko', 'DeptA', 'DIV2', 'S1', 'm', 'Jakarta Selatan', '08912311222', 'Solo', '1992-07-10', '1238979002', 1),
(12, 'Erika', 'DeptB', 'DIV1', 'SMK/SMA', 'htw', 'solo', '0897232536', 'klaten', '1987-10-10', '120938000012', 1),
(13, 'jaka', 'DeptA', 'DIV1', 'S2', 'm', 'bogor', '08917912731', 'solo', '1998-10-10', '12313213123', 1),
(14, 'Sekar', 'DeptB', 'DIV2', 'S2', 'd', 'jakarta', '089127381', 'jakarta', '2000-09-07', '1231231100', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lulusan`
--

CREATE TABLE `lulusan` (
  `id_tamat` int(11) NOT NULL,
  `kd_tamat` varchar(20) NOT NULL,
  `tamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lulusan`
--

INSERT INTO `lulusan` (`id_tamat`, `kd_tamat`, `tamatan`) VALUES
(1, 'SMK/SMA', 'Sekolah Menengah Kejuruan/SMA'),
(2, 'SMA', 'Sekolah Menengah Atas'),
(3, 'S1', 'Sarjana Strata 1'),
(4, 'S2', 'Sarjana Strata 2'),
(5, 'SMP', 'Sekolah Menengah Pertama'),
(6, 'SD', 'Sekolah Dasar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `lulusan`
--
ALTER TABLE `lulusan`
  ADD PRIMARY KEY (`id_tamat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `lulusan`
--
ALTER TABLE `lulusan`
  MODIFY `id_tamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
