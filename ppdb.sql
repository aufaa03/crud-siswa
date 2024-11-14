-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 01:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no_daftar` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jk` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_daftar`, `nama`, `jk`, `agama`, `sekolah_asal`, `alamat`, `no_hp`) VALUES
(1, 'amar', 'Laki-Laki', 'Islam', 'jrakh', 'jrakah', '078473'),
(19, 'ilham', 'Laki-Laki', 'Islam', 'smp5', 'Pelutan abiezzzzzzzzz', '08636382'),
(21, 'aufaa R', 'Laki-Laki', 'Islam', 'smpn 5 taman', 'Gondang...', '08846721'),
(23, 'ghaniy', 'Laki-Laki', 'Islam', 'smpn 4 pem', 'Pener', '0087373');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
