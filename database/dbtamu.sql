-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 08:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `calontamu`
--

CREATE TABLE `calontamu` (
  `id_calon_tamu` int(10) NOT NULL,
  `nama_calon_tamu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calontamu`
--

INSERT INTO `calontamu` (`id_calon_tamu`, `nama_calon_tamu`) VALUES
(1, 'user1'),
(2, 'user2'),
(3, 'user'),
(4, 'user'),
(5, 'user'),
(6, 'ana'),
(7, 'morgan');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `bidang` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `bidang`) VALUES
(1, 'Andini', 'Angkutan'),
(3, 'Zafa', 'UPT. Pengelolaan Prasarana Perhubun'),
(4, 'laili', 'Sekretariat'),
(5, 'Zafa Andini', 'Sekretariat');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `nama_tamu` varchar(45) NOT NULL,
  `instansi` varchar(45) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `tandatangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `tanggal`, `nama_tamu`, `instansi`, `keperluan`, `tandatangan`) VALUES
(1, '2022-01-14', 'meghan', 'diskominfo', 'kunjungan bulanan', '../asset/tandatanganmeghan.png'),
(2, '2022-01-14', 'zella', 'diskominfo', 'kunjungan', '../asset/tandatanganzella.png'),
(3, '2022-01-14', 'meghan2', 'diskominfo', 'kunjungan', '../tandatangan-tamu meghan2.png'),
(4, '2022-01-14', 'meghan', 'diskominfo', 'ccc', '../asset/tandatangan/meghan.png'),
(5, '0000-00-00', 'meghan', 'diskominfo', 'ajhs', '../asset/tandatangan/meghan.png'),
(6, '14-01-2022', 'meghan', 'diskominfo', 'ddd', '../asset/tandatangan/meghan.png'),
(7, '15-01-2022', 'zella', 'bappeda', 'kunjungan', 'tandatangan zella.png'),
(9, '15-01-2022', 'wilona nata', 'diskominfo2', 'pertemuan 2', '../asset/tandatangan/wilona nata.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `calontamu`
--
ALTER TABLE `calontamu`
  ADD PRIMARY KEY (`id_calon_tamu`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `calontamu`
--
ALTER TABLE `calontamu`
  MODIFY `id_calon_tamu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
