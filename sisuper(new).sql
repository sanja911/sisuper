-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2020 at 03:42 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

DROP TABLE IF EXISTS `datawarga`;
CREATE TABLE IF NOT EXISTS `datawarga` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jeniskelamin` varchar(10) DEFAULT NULL,
  `tempatlahir` varchar(25) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pendidikan` text,
  `jenispekerjaan` varchar(25) DEFAULT NULL,
  `statusperkawinan` varchar(12) DEFAULT NULL,
  `statusdalamkeluarga` varchar(10) DEFAULT NULL,
  `ayah` varchar(50) DEFAULT NULL,
  `ibu` varchar(50) DEFAULT NULL,
  `kepalakeluarga` char(2) DEFAULT NULL,
  `nokk` varchar(16) DEFAULT NULL,
  `statustinggal` varchar(10) DEFAULT NULL,
  `rt` varchar(2) DEFAULT NULL,
  `rw` varchar(2) DEFAULT NULL,
  `keterangan` text,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datawarga`
--

INSERT INTO `datawarga` (`nik`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `agama`, `pendidikan`, `jenispekerjaan`, `statusperkawinan`, `statusdalamkeluarga`, `ayah`, `ibu`, `kepalakeluarga`, `nokk`, `statustinggal`, `rt`, `rw`, `keterangan`, `status`) VALUES
('150533600480', 'SANJA AVI', 'Laki-laki', 'PASURUAN', '1996-07-22', 'Islam', 'Pengajar/Guru Honorer', 'Matematika', NULL, '-', '-', '-', '-', '150533600480', '-', NULL, NULL, 'sadasd', 1),
('150533600481', 'SANJA AVI', 'Laki-laki', 'Pasuruan', '1996-07-22', 'Islam', 'Pelajar', NULL, NULL, '-', '-', '-', '-', '150533600481', '-', NULL, '11', 'sadasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mengajukan`
--

DROP TABLE IF EXISTS `mengajukan`;
CREATE TABLE IF NOT EXISTS `mengajukan` (
  `idpengajuan` int(20) NOT NULL AUTO_INCREMENT,
  `statusrt` char(1) DEFAULT 'N',
  `statusrw` char(1) DEFAULT 'N',
  `statusdesa` char(1) DEFAULT 'N',
  `tanggal` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `idsurat` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idpengajuan`)
) ENGINE=InnoDB AUTO_INCREMENT=1407311 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajukan`
--

INSERT INTO `mengajukan` (`idpengajuan`, `statusrt`, `statusrw`, `statusdesa`, `tanggal`, `keterangan`, `nik`, `idsurat`) VALUES
(1407309, 'Y', 'Y', 'Y', '2020-10-21', 'Pendataan Guru Non PNS', '150533600480', '101'),
(1407310, 'Y', 'Y', 'Y', '2020-10-21', 'Bolos Sekolah', '150533600481', '110');

-- --------------------------------------------------------

--
-- Table structure for table `suratpengantar`
--

DROP TABLE IF EXISTS `suratpengantar`;
CREATE TABLE IF NOT EXISTS `suratpengantar` (
  `idsurat` int(20) NOT NULL AUTO_INCREMENT,
  `jenissurat` varchar(30) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`idsurat`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratpengantar`
--

INSERT INTO `suratpengantar` (`idsurat`, `jenissurat`, `keterangan`) VALUES
(101, 'Surat Keterangan Guru', 'Guru Honorer Mata Pelajaran'),
(110, 'Surat Keterangan Siswa', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

DROP TABLE IF EXISTS `tblogin`;
CREATE TABLE IF NOT EXISTS `tblogin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(42) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `wilayah` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`username`, `password`, `jabatan`, `wilayah`) VALUES
('lurah', 'lurah', 'lurah', '0'),
('rt1', 'rt1', 'rt', '01'),
('rt10', 'rt10', 'rt', '10'),
('rt11', 'rt11', 'rt', '11'),
('rt12', 'rt12', 'rt', '12'),
('rt2', 'erte', 'rt', '02'),
('rt3', 'rt3', 'rt', '03'),
('rt4', 'rt4', 'rt', '04'),
('rt5', 'rt5', 'rt', '05'),
('rt6', 'rt6', 'rt', '06'),
('rt7', 'rt7', 'rt', '07'),
('rt8', 'rt8', 'rt', '08'),
('rt9', 'rt9', 'rt', '09'),
('rw1', 'rw1', 'rw', '01'),
('rw2', 'rw2', 'rw', '02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
