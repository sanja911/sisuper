-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 08:29 AM
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
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jeniskelamin` varchar(10) DEFAULT NULL,
  `tempatlahir` varchar(25) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
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
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datawarga`
--

INSERT INTO `datawarga` (`nik`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `agama`, `pendidikan`, `jenispekerjaan`, `statusperkawinan`, `statusdalamkeluarga`, `ayah`, `ibu`, `kepalakeluarga`, `nokk`, `statustinggal`, `rt`, `rw`, `keterangan`, `status`) VALUES
('3203091101800012', 'Yuswo Wiyoto', 'Laki-laki', 'Malang', '1980-01-11', 'Islam', 'SLTA/Seder', 'Wiraswasta', 'Kawin', 'Suami', 'Sugeng', 'Titing', 'Ya', '3203091911050317', 'Tetap', '01', '01', 'Warga asli', 1),
('3203091911050311', 'Muhammad Zainul', 'Laki-laki', 'Cilacap', '1986-08-12', 'Islam', 'Akademi/Di', 'Pegawai', 'Belum Kawin', 'Anak', 'Ahmad Zubair', 'Siti Fatimah', 'Bu', '3203091911050355', 'Tidak Teta', '01', '01', 'Pindahan dari Jakarta', 0),
('3203091911050313', 'As3', 'Laki-laki', 'Cilacap', '2018-07-18', 'Islam', 'Tidak/Belu', 'Pedagang', 'Belum Kawin', 'Anak', 'Muh. Chaelani', 'Murniyati', 'Bu', '3203091911050319', 'Tetap', '01', '01', 'as', 1),
('3203096206890001', 'Nurjanah', 'Perempuan', 'Cianjur', '1989-06-22', 'Islam', 'Tamat SD/S', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'Nani', 'Nunung', 'Bu', '3203091911050317', 'Tetap', '01', '01', '', 1),
('3313041108760002', 'Suwarno', 'Laki-laki', 'Karanganyar', '1978-08-11', 'Islam', 'Tamat SD/S', 'Pedagang', 'Kawin', 'Suami', 'Ngatmin', 'Warni', 'Ya', '3313041303090002', 'Tidak Teta', '01', '01', 'Warga pendatang di kontrakan H. Saeful', 0),
('3313041303090001', 'Ahmad Subkhi', 'Laki-laki', 'Tegal', '2018-06-24', 'Islam', 'Diploma IV', 'Pegawai', 'Kawin', 'Anak', 'Suwarno', 'Sartini', 'Bu', '3313041303090002', 'Tidak Teta', '01', '01', 'Kebumen', 0),
('3313041303090005', 'asas', 'Laki-laki', 'tegal', '2018-07-23', 'Islam', 'Diploma I/', 'Pelajar', 'Belum Kawin', 'Suami', 'Abdul Ghoni', 'Sartini', 'Ya', '3313041303090002', 'Tidak Teta', '01', '01', 'sd', 1),
('3313042009080001', 'Ilham Adi Wibowo', 'Laki-laki', 'Karanganyar', '2008-09-20', 'Islam', 'Belum Tama', 'Pelajar', 'Belum Kawin', 'Anak', 'Suwarno', 'Sartini', 'Bu', '3313041303090002', 'Tidak Teta', '01', '01', 'Warga pendatang di kontrakan H. Saeful', 0),
('3313044501820003', 'Sartini', 'Perempuan', 'Karanganyar', '1982-01-05', 'Islam', 'SLTA/Seder', 'Pedagang', 'Kawin', 'Istri', 'Gito Wiyono', 'Sri Murtani', 'Bu', '3313041303090002', 'Tidak Teta', '01', '01', 'Warga pendatang di kontrakan H. Saeful', 0),
('3313046004020001', 'Irtifa Nurul Hidayati', 'Perempuan', 'Karanganyar', '2002-04-20', 'Islam', 'SLTA/Seder', 'Pelajar', 'Belum Kawin', 'Anak', 'Suwarno', 'Sartini', 'Bu', '3313041303090002', 'Tidak Teta', '01', '01', 'Warga pendatang di kontrakan H. Saeful', 0),
('3328110712920000', 'Abqina Khairaul Azmi', 'Laki-laki', 'Tegal', '1992-12-07', 'Islam', 'SLTA/Seder', 'Pelajar', 'Belum Kawin', 'Anak', 'Mahfudi', 'Chasiati', 'Bu', '3328111508115220', 'Tetap', '01', '01', 'Warga Asli', 1),
('3328116104780000', 'Chasiati', 'Perempuan', 'Tegal', '1978-04-21', 'Islam', 'SLTA/Seder', 'Wiraswasta', 'Cerai Mati', 'Istri', 'Abdurokhim', 'Muayah', 'Ya', '3328111508115220', 'Tetap', '01', '01', 'Warga asli', 1),
('3328130100970001', 'Mukhlis', 'Laki-laki', 'Tegal', '1966-03-09', 'Islam', 'SLTP/Seder', 'Swasta', 'Kawin', 'Suami', 'Harjo Sumito', 'Sumiyati', 'Ya', '3328131901140354', 'Tetap', '01', '01', '', 1),
('3328130106970001', 'Ayub Supriandi', 'Laki-laki', 'Jakarta', '2018-02-06', 'Kristen', 'Diploma IV', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'Sholeh', 'Marni', 'Bu', '3328131901110354', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 1),
('3328130106970003', 'Abdul Aziz', 'Laki-laki', 'Semarang', '1997-06-01', 'Hindu', 'Diploma 3', 'Penulis', 'Belum Kawin', 'Anak', 'Abu Seri', 'Nur Eti Iswanti', 'Bu', '3328131901110337', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 1),
('3328130106970004', 'Windi Witari', 'Perempuan', 'Tegal', '2005-06-20', 'Islam', 'SMP', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'Abu Seri', 'Nur Eti Iswanti', 'Bu', '3328131901110337', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 1),
('3328130106970005', 'Cahyo Pambudi', 'Laki-laki', 'Cilacap', '2018-02-06', 'Islam', 'SLTA/Seder', 'Pelajar/Mahasiswa', 'Kawin', 'Suami', 'Rudi Asya', 'Syarifah', 'Ya', '3328131901110336', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 1),
('3328130106970009', 'Budi Sentosa', 'Laki-laki', 'Jakarta', '1998-02-10', 'Konghuchu', 'Diploma 3', 'Swasta', 'Belum Kawin', 'Anak', 'Rudi Asya', 'Musripah', 'Bu', '3328131901110337', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 1),
('3328130106970098', 'Alfian noer Arbi', 'Laki-laki', 'Cilacap', '2018-02-20', 'Islam', 'Akademi/Di', 'Petani', 'Belum Kawin', 'Anak', 'Rohman', 'Fatimah', 'Bu', '3328131901110332', 'Tidak Teta', '01', '01', 'Jalan Kemuning No Rumah 10', 0),
('3328130106990007', 'Agus Budiharjo', 'Laki-laki', 'Tegal', '2018-02-08', 'Kristen', 'Tidak/Belu', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'Hambali', 'Putri', 'Bu', '3328131902110339', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 0),
('3328130111680003', 'Abu Seri', 'Laki-laki', 'Tegal', '1968-11-01', 'Islam', 'SLTA', 'Wiraswasta', 'Kawin', 'Kepala Kel', 'Masrah', 'Raswi', 'Ya', '3328131901110337', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 1),
('3328130196970003', 'Agung Priyanto', 'Laki-laki', 'Kuningan', '1997-08-14', 'Budha', 'Akademi/Di', 'Karyawan Bank', 'Belum Kawin', 'Anak', 'Jupri', 'Sartini', 'Bu', '3328131901110334', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 0),
('3328130809660004', 'Rustono', 'Laki-laki', 'Tegal', '1966-09-08', 'Islam', 'SLTP/Seder', 'Pedagang', 'Kawin', 'Suami', 'Radis', 'Kartinah', 'Ya', '3328131801110297', 'Tetap', '01', '01', '', 1),
('3328130810140003', 'Akhdan Dwi Nilani', 'Laki-laki', 'Tegal', '2014-10-08', 'Islam', 'Tidak/Belu', 'Belum Bekerja', 'Belum Kawin', 'Anak', 'Muh. Chaelani', 'Murniyati', 'Bu', '3328131801110284', 'Tetap', '01', '01', 'Warga asli', 1),
('3328131507790002', 'Muh. Chaelani', 'Laki-laki', 'Tegal', '1979-07-15', 'Islam', 'SLTP/Seder', 'Karyawan Swasta', 'Kawin', 'Suami', 'Sodikin', 'Kasmuah', 'Ya', '3328131801110284', 'Tetap', '01', '01', 'Warga asli', 1),
('3328131634140354', 'Mafruchah', 'Perempuan', 'Tegal', '1969-06-17', 'Islam', 'SLTP/Seder', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'Ahmad', 'Sopiyah', 'Bu', '3328131901140354', 'Tetap', '01', '01', '', 1),
('3328131806840005', 'Imron Rosyadi', 'Laki-laki', 'Tegal', '1984-06-18', 'Islam', 'SLTP/Seder', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'Wartono', 'Darsini', 'Bu', '3328131801110297', 'Tetap', '01', '01', '', 1),
('3328131901110356', 'Muhammad Hadi', 'Laki-laki', 'Cikarang', '2018-07-23', 'Islam', 'Akademi/Di', 'Guru', 'Belum Kawin', 'Anak', 'Afifudin', 'Sartini', 'Bu', '3328131901110353', 'Tidak Teta', '02', '01', 'Pindahan dari cikarang', 0),
('3328132102080312', 'Hadi Purnomo', 'Laki-laki', 'Cilacap', '2002-06-18', 'Islam', 'Akademi/Di', 'Wiraswasta', 'Kawin', 'Suami', 'Abdul Ghoni', 'Chunaeni', 'Ya', '3328132102080310', 'Tetap', '01', '01', 'Pindahan dari Jakarta', 1),
('3328132403090577', 'Khikmatul Umroh', 'Perempuan', 'Tegal', '1968-10-23', 'Islam', 'SLTP/Seder', 'Dagang', 'Cerai Mati', 'Istri', 'Makmuri', 'Tarisi', 'Ya', '3328132403090576', 'Tetap', '01', '01', 'Warga asli', 1),
('3328132403090578', 'Anisul Fuad', 'Laki-laki', 'Tegal', '1989-03-19', 'Islam', 'SLTA/Seder', 'Wiraswasta', 'Belum Kawin', 'Anak', 'Afifudin', 'Khikmatul Umroh', 'Bu', '3328132403090576', 'Tetap', '01', '01', 'Warga asli', 1),
('3328132403090579', 'Dzikri Afif', 'Laki-laki', 'Tegal', '1993-06-03', 'Islam', 'SLTP/Seder', 'Pelajar', 'Belum Kawin', 'Anak', 'Afifudin', 'Khikmatul Umroh', 'Ya', '3328132403090576', 'Tetap', '01', '01', 'Warga asli', 1),
('3328134109840006', 'Murniyati', 'Perempuan', 'Tegal', '1984-09-01', 'Islam', 'SLTP/Seder', 'Mengurus Rumah Tangga', 'Kawin', 'Istri', 'Dasum', 'Dailah', 'Bu', '3328131801110284', 'Tetap', '01', '01', 'Warga asli', 1),
('3328134807980001', 'Khumairoh Intani', 'Perempuan', 'Tegal', '1998-07-08', 'Islam', 'SLTA/Seder', 'Pelajar', 'Belum Kawin', 'Anak', 'Abdul Ghoni', 'Chunaeni', 'Bu', '3328132102080312', 'Tidak Teta', '01', '01', 'Warga pendatang di kontrakan Bpk. Tibrizi', 0),
('3328135111950003', 'Ummi Khanifah', 'Perempuan', 'Tegal', '1995-11-11', 'Islam', 'Diploma IV', 'Guru', 'Belum Kawin', 'Anak', 'Abdul Ghoni', 'Chunaeni', 'Bu', '3328132102080312', 'Tidak Teta', '01', '01', 'Warga pendatang di kontrakan Bpk. Tibrizi', 0),
('3328135503950005', 'Ulfah Idawati', 'Perempuan', 'Tegal', '1995-03-15', 'Islam', 'SLTA/Seder', 'Karyawan Swasta', 'Belum Kawin', 'Anak', 'Rustono', 'Darsini', 'Bu', '3328131801110297', 'Tetap', '01', '01', '', 1),
('3328135906060002', 'Nilla Ayuningtyas', 'Perempuan', 'Tegal', '2006-06-19', 'Islam', 'Belum Tama', 'Pelajar', 'Belum Kawin', 'Anak', 'Muh. Chaelani', 'Murniyati', 'Bu', '3328131801110284', 'Tetap', '01', '01', 'Warga asli', 1),
('3328136402930002', 'Nailan Nurul Alfiah', 'Perempuan', 'Tegal', '1993-02-24', 'Islam', 'Diploma IV', 'Guru', 'Belum Kawin', 'Anak', 'Abdul Ghoni', 'Chunaeni', 'Bu', '3328132102080312', 'Tidak Teta', '01', '01', 'Warga pendatang di kontrakan Bpk. Tibrizi', 0),
('3328136503690002', 'Chunaeni', 'Perempuan', 'Tegal', '1967-03-25', 'Islam', 'Diploma IV', 'Guru', 'Cerai Mati', 'Istri', 'Sabrawi', 'Tuminah', 'Ya', '3328132102080312', 'Tidak Teta', '01', '01', 'Warga pendatang di kontrakan Bpk. Tibrizi', 0),
('3328137004750005', 'Nur Eti Iswanti', 'Perempuan', 'Tegal', '1975-04-30', 'Islam', 'SLTA', 'Pedagang', 'Kawin', 'Istri', 'Samhari', 'Mafrochah', 'Bu', '3328131901110337', 'Tetap', '01', '01', 'Jalan Kemuning No Rumah 10', 1),
('3328137112610102', 'Darsini', 'Perempuan', 'Tegal', '1961-12-31', 'Islam', 'Tamat SD/S', 'Pedagang', 'Kawin', 'Istri', 'Washadi', 'Nahyati', 'Bu', '3328131801110297', 'Tetap', '02', '01', '', 1),
('3376011508730001', 'Ricky Manasa', 'Laki-laki', 'Tegal', '1973-08-15', 'Islam', 'SLTA/Seder', 'Pegawai Swasta', 'Kawin', 'Suami', 'Syarifudin Manasa', 'Regina Thie Hua', 'Ya', '3376111102083615', 'Tetap', '01', '01', 'Warga asli', 1),
('3376015111770002', 'Karomah', 'Perempuan', 'Tegal', '1977-11-11', 'Islam', 'SLTA/Seder', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'M. Kurdi', 'Toricha', 'Bu', '3376111102083615', 'Tetap', '01', '01', 'Warga asli', 1),
('3601212011170013', 'Susi Amelia', 'Perempuan', 'Tegal', '1982-03-10', 'Islam', 'SLTA/Seder', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'Slamet', 'Suheni', 'Bu', '3601212011170014', 'Tetap', '01', '01', '', 1),
('3601212511570001', 'Hendra Purnama', 'Laki-laki', 'Pandeglang', '1957-11-25', 'Islam', 'SLTA/Seder', 'Wiraswasta', 'Kawin', 'Suami', 'Heru', 'Iis', 'Ya', '3601212011170014', 'Tetap', '01', '01', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mengajukan`
--

CREATE TABLE `mengajukan` (
  `idpengajuan` int(20) NOT NULL,
  `statusrt` char(1) DEFAULT 'N',
  `statusrw` char(1) DEFAULT 'N',
  `statusdesa` char(1) DEFAULT 'N',
  `tanggal` date DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `idsurat` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajukan`
--

INSERT INTO `mengajukan` (`idpengajuan`, `statusrt`, `statusrw`, `statusdesa`, `tanggal`, `nik`, `idsurat`) VALUES
(1407284, 'Y', 'Y', 'Y', '2018-07-17', '3328135111950003', '107'),
(1407285, 'Y', 'Y', 'Y', '2018-07-17', '3203096206890001', '105'),
(1407286, 'Y', 'Y', 'Y', '2018-07-17', '3328130100970001', '105'),
(1407287, 'Y', 'Y', 'Y', '2018-07-17', '3328116104780000', '103'),
(1407288, 'Y', 'Y', 'Y', '2018-07-22', '3328116104780000', '101'),
(1407289, 'Y', 'Y', 'Y', '2018-07-23', '3313046004020001', '101'),
(1407290, 'Y', 'Y', 'N', '2018-07-23', '3328130106970001', '103'),
(1407291, 'Y', 'N', 'N', '2018-07-23', '3203091101800012', '103'),
(1407292, 'N', 'N', 'N', '2018-07-23', '3203091101800012', '103'),
(1407293, 'Y', 'Y', 'N', '2018-07-24', '3328130106970005', '101'),
(1407294, 'N', 'N', 'N', '2018-07-24', '3328130106970001', '101'),
(1407295, 'N', 'N', 'N', '2018-07-25', '3328130100970001', '101');

-- --------------------------------------------------------

--
-- Table structure for table `suratpengantar`
--

CREATE TABLE `suratpengantar` (
  `idsurat` int(20) NOT NULL,
  `jenissurat` varchar(30) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratpengantar`
--

INSERT INTO `suratpengantar` (`idsurat`, `jenissurat`, `keterangan`) VALUES
(101, 'Surat Membuat SKCK', 'Surat pengantar untuk membuat SKCK'),
(102, 'Surat Keterangan Tidak Mampu', 'Surat Pengantar Keterangan Tidak Mampu'),
(103, 'Surat Pengantar Domisili', 'Surat Pengantar Keterangan Domisili'),
(104, 'Surat Pengantar Mengurus KTP', 'Surat Pengantar Untuk Mengurus KTP'),
(105, 'Surat Pengantar Mengurus KK', 'Surat Pengantar Untuk Mengurus Kartu Keluarga'),
(106, 'Surat Keterangan Kematian', 'Surat Pengantar Untuk Keterangan Kematian'),
(107, 'Surat Pengantar Nikah', 'Surat Pengantar Untuk Mengurus Pernikahan'),
(108, 'Surat Untuk Akte Kelahiran', 'Surat Pengantar Untuk Membuat Akte Kelahiran'),
(109, 'Kebutuhan Lainya', 'Surat Pengantar Untuk Kebutuhan Lainya');

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(42) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `wilayah` varchar(5) NOT NULL
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datawarga`
--
ALTER TABLE `datawarga`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `mengajukan`
--
ALTER TABLE `mengajukan`
  ADD PRIMARY KEY (`idpengajuan`);

--
-- Indexes for table `suratpengantar`
--
ALTER TABLE `suratpengantar`
  ADD PRIMARY KEY (`idsurat`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mengajukan`
--
ALTER TABLE `mengajukan`
  MODIFY `idpengajuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1407296;
--
-- AUTO_INCREMENT for table `suratpengantar`
--
ALTER TABLE `suratpengantar`
  MODIFY `idsurat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
