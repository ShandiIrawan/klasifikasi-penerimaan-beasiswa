-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 08:17 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa_budiluhur`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `program_studi` varchar(20) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `ipk` float NOT NULL,
  `keikutsertaan` varchar(20) NOT NULL,
  `tahun_masuk` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama_mahasiswa`, `tempat_lahir`, `ttl`, `jenis_kelamin`, `program_studi`, `fakultas`, `ipk`, `keikutsertaan`, `tahun_masuk`) VALUES
(2312, 'Anita Maulida', 'DKI Jakarta', '2001-04-21', 'Perempuan', 'Sistem Informasi', 'FTI', 4, 'PKM', 2019),
(2011500788, 'Shandi Irawan', 'Pandeglang', '2001-04-21', 'Laki Laki', 'Teknik Informatika', 'FTI', 4, 'PKM', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(10) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `alamat`, `jabatan`, `username`, `password`) VALUES
(4, 'Shandi Irawan', 'Petukangan Utara, Jakarta Selatan, DKI Jakarta', 'User', 'admin', '12343'),
(10, 'Deni Fadlu', 'Pemalang', 'Admin', 'user54321', '12345'),
(12, 'Sri Wahyuni', 'Banjarnegara', 'Admin', '11223123', '1212121'),
(14, 'ew', 'dasmuu', 'Admin', '12', '1w2'),
(15, 'dwq', '21aS', 'User', 'sad', 'sad'),
(17, 'edw', 'dsas', 'Admin', 'ads', '12d23'),
(19, 'Irawan', 'fbg', 'Admin', '1233e234', 'e13224423'),
(20, 'Deri', 'Lampung', 'Admin', 'sandi011', '121212'),
(23, 'Sahaya', 'Madiun', 'Admin', '20112211001', 'Dahayauus'),
(24, 'Fauzi', 'Jepara', 'Admin', 'Jepara123', '11221'),
(25, '', '', '', '', ''),
(26, 'Ahmad', 'Serdang Deli', 'Admin', 'Admin3333', '121212'),
(27, 'df', 'df', 'Admin', 'asf', 'fas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
