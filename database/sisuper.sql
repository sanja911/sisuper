-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 08:54 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisuper`
--

-- --------------------------------------------------------

--
-- Table structure for table `datawarga`
--

CREATE TABLE `datawarga` (
  `nik` varchar(50) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `jeniskelamin` varchar(50) DEFAULT NULL,
  `tempatlahir` varchar(50) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `jenispekerjaan` varchar(50) DEFAULT NULL,
  `statusperkawinan` varchar(50) DEFAULT NULL,
  `statusdalamkeluarga` varchar(50) DEFAULT NULL,
  `ayah` varchar(50) DEFAULT NULL,
  `ibu` varchar(50) DEFAULT NULL,
  `kepalakeluarga` char(50) DEFAULT NULL,
  `nokk` varchar(50) DEFAULT NULL,
  `statustinggal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datawarga`
--

INSERT INTO `datawarga` (`nik`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `agama`, `pendidikan`, `jenispekerjaan`, `statusperkawinan`, `statusdalamkeluarga`, `ayah`, `ibu`, `kepalakeluarga`, `nokk`, `statustinggal`) VALUES
('3328130111680003', 'ABU SERI', 'LAKI-LAKI', 'TEGAL', '1068-11-01', 'ISLAM', 'SLTA', 'WIRASWASTA', 'KAWIN', 'KEPALA KELUARGA', 'MASRAH', 'RASWI', 'Y', '3328131901110337', NULL),
('3328137004750005', 'NUR ETI iSWANTI', 'PEREMPUAN', 'TEGAL', '1975-04-30', 'ISLAM', 'SLTA', 'PEDAGANG', 'KAWIN', 'ISTRI', 'SAMHARI', 'MAFROCHAH', 'T', '3328131901110337', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`username`, `password`, `jabatan`) VALUES
('admin', 'admin', 'admin'),
('lurah', 'lurah', 'lurah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datawarga`
--
ALTER TABLE `datawarga`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
