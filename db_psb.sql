-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2022 pada 15.06
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `email`, `password`) VALUES
(1, 'yuhu', 'yuhu@gmail.com', 'b7f68bb19bde0d7787e67053b4acd3b9'),
(2, 'oke', 'oke@gmail.com', '0079fcb602361af76c4fd616d60f9414'),
(3, 'iji', 'iji@gmail.com', 'deab290633293b17ed8eed3a281a7a1b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` varchar(20) NOT NULL,
  `BINDO` int(5) NOT NULL,
  `MTK` int(5) NOT NULL,
  `IPA` int(5) NOT NULL,
  `BINGG` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `BINDO`, `MTK`, `IPA`, `BINGG`) VALUES
('N202200001', 23, 54, 56, 45),
('N202200002', 123, 13, 53, 52),
('N202200003', 89, 89, 89, 89),
('N202200004', 0, 0, 0, 0),
('N202200005', 23, 42, 35, 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `th_ajaran` varchar(9) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `NISN` int(20) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `no_hp` int(15) NOT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `raport` int(5) NOT NULL,
  `alamat` text DEFAULT NULL,
  `sumber_informasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `jurusan`, `NISN`, `asal_sekolah`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `no_hp`, `agama`, `raport`, `alamat`, `sumber_informasi`) VALUES
('P202200001', '2022-07-14', '2022/2023', 'Teknik Komputer & Jaringan', 9879, 'jkn ', 'mnl', 'knkl', '2022-08-02', 'perempuan', 908, 'Hindu', 90, 'jon', 'Surat_Kabar'),
('P202200002', '2022-07-14', '2022/2023', '', 13, 'lv svd', 'svd', 'svdcx', '2022-06-30', 'laki-laki', 242, 'Islam', 89, 'bdsgg', 'Alumni'),
('P202200003', '2022-07-14', '2022/2023', '', 13, 'lv svd', 'svd', 'svdcx', '2022-06-30', 'laki-laki', 242, 'Islam', 89, 'bdsgg', 'Alumni'),
('P202200004', '2022-07-14', '2022/2023', 'Teknik Komputer & Jaringan', 234, 'frbs', 'adfb', '', '0000-00-00', '', 0, '', 0, '', ''),
('P202200005', '2022-07-17', '2022/2023', 'Teknik Kendaraan Ringan', 942, 'jhfajve f', 'jhfsd', 'jbkfa', '2022-07-17', 'laki-laki', 124132, 'Kristen', 431, 'brgsvnl', 'Alumni');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
