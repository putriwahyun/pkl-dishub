-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 06:26 PM
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
(7, 'morgan'),
(8, 'alya'),
(9, 'faizah'),
(10, ''),
(11, 'putri wahyu'),
(12, 'alya faizah'),
(13, 'heola'),
(14, 'hallo coba'),
(15, 'heola annyeong'),
(16, 'zeala'),
(17, 'eka widya'),
(18, 'ana maria'),
(19, 'nicken octavia'),
(20, 'nama'),
(21, 'lea gloria'),
(22, 'arghan'),
(23, 'coba lagi'),
(24, 'xavier'),
(25, 'ellak'),
(26, 'putri'),
(27, 'user100'),
(28, 'user1001'),
(29, 'user2002'),
(30, 'heola annyeongg'),
(90, 'mencobalagi'),
(91, 'terakhirplis');

-- --------------------------------------------------------

--
-- Table structure for table `janjitemu`
--

CREATE TABLE `janjitemu` (
  `id_janji_temu` int(10) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `nama_pegawai_dituju` varchar(50) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `tanggal_janji` varchar(20) NOT NULL,
  `waktu_temu` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `janjitemu`
--

INSERT INTO `janjitemu` (`id_janji_temu`, `bidang`, `nama_pegawai_dituju`, `nama_tamu`, `instansi`, `tanggal_janji`, `waktu_temu`, `no_telp`, `keperluan`, `keterangan`) VALUES
(4, '', 'SONI BACHTIAR, SE.MM', 'putri wahyu', 'diskominfo', '2022-01-22', '18:34', '09876543213', 'bnnnnb', 'Ditolak'),
(9, '', 'Ir. NGOEDIJONO, MS.Tr', 'putri wahyu', 'diskominfo', '2022-01-25', '17:02', '08123098736', 'nbm', 'Menunggu'),
(11, '', 'Ir. NGOEDIJONO, MS.Tr', 'putri wahyu', 'diskominfo', '2022-01-27', '19:13', '09876543213', 'nmn', 'Diterima'),
(12, '', 'SLAMET RIADI', 'putri wahyu', 'bappeda', '2022-01-28', '19:26', '081309876543', 'nnbmnm', 'Ditolak'),
(13, '', 'Zafa Andini', 'ellak', 'diskominfo', '2022-01-22', '14:29', '09876543213', 'ajklhslakhs', 'Ditolak'),
(14, 'Lalu Lintas', 'Ir. NGOEDIJONO, MS.Tr', 'morgan', 'diskominfo', '2022-04-06', '16:50', '08876543213', 'janji penting', 'Menunggu');

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
(8, 'HERU MULYONO , SIP, MT', 'Sekretariat'),
(9, 'Dr. EKO SRI YULIADI, S.sos.MM', 'Sekretariat'),
(10, 'Dra. ERNA WIYATI', 'Sekretariat'),
(11, 'TRI ASTUTI INDRIANI, SE', 'Sekretariat'),
(13, 'HARIYONO, SE', 'Sekretariat'),
(14, 'HUDA NURAINI, SE', 'Sekretariat'),
(15, 'YULI MUJI RAHAYU, SE', 'Sekretariat'),
(16, 'FACHRIATUL IZZATI, SAB', 'Sekretariat'),
(17, 'KUMIATI', 'Sekretariat'),
(18, 'NUR AFIYAH', 'Sekretariat'),
(19, 'SUWARNO', 'Sekretariat'),
(20, 'BUDIYANTO', 'Sekretariat'),
(21, 'SUTIONO', 'Sekretariat'),
(22, 'BAMBANG JUMADI', 'Sekretariat'),
(23, 'IMRON ROSADI', 'Sekretariat'),
(24, 'SUGIANTO', 'Sekretariat'),
(25, 'ZAINUL ABIDIN', 'Sekretariat'),
(26, 'RONY AGUS', 'Sekretariat'),
(27, 'ANI OKTAVIA', 'Sekretariat'),
(28, 'SISILIA ARDIWALUYO', 'Sekretariat'),
(29, 'VINDI DESIKA VIOLITA', 'Sekretariat'),
(30, 'SUDARMAJI', 'Sekretariat'),
(31, 'WISNU FAJAR', 'Sekretariat'),
(32, 'MIKHA', 'Sekretariat'),
(33, 'MUSTHAQIM JAYA, AP MM', 'Manajemen Perparkiran'),
(34, 'HERRY SANTOSO, SH, M.AP', 'Manajemen Perparkiran'),
(35, 'JAJAN HERYANA, S.Sos, M.Si', 'Manajemen Perparkiran'),
(38, 'SOEKO HARIYANTO, SH', 'Manajemen Perparkiran'),
(39, 'BAMBANG HARYANTO, SE', 'Manajemen Perparkiran'),
(40, 'MOKH KHOLIL, SE', 'Manajemen Perparkiran'),
(41, 'LULUK AGUNG WAHJOEHADI, SE', 'Manajemen Perparkiran'),
(42, 'SANOTO', 'Manajemen Perparkiran'),
(43, 'BUDI DARMINTO', 'Manajemen Perparkiran'),
(44, 'BAMBANG S S SARAGIH', 'Manajemen Perparkiran'),
(45, 'DAMSIS', 'Manajemen Perparkiran'),
(46, 'SULAIMAN', 'Manajemen Perparkiran'),
(47, 'MUHAMAD WAHYUDI', 'Manajemen Perparkiran'),
(48, 'MAHFUD ASSOFI', 'Manajemen Perparkiran'),
(49, 'HARY JOKO MULYONO', 'Manajemen Perparkiran'),
(50, 'TAUFIQ HIDAYAT ', 'Manajemen Perparkiran'),
(51, 'ERNA KUSUMAWATI', 'Manajemen Perparkiran'),
(52, 'NGATMARI', 'Manajemen Perparkiran'),
(53, 'EDY SUPRAYITNO', 'Manajemen Perparkiran'),
(54, 'ARIF SETYO KUSWINDIANTO', 'Manajemen Perparkiran'),
(55, 'AMRIZAL DENNY JUNAEDY', 'Manajemen Perparkiran'),
(56, 'ARIFAN YULIO AMRULLAH', 'Manajemen Perparkiran'),
(57, 'BERLIAN KANDHA WIJAYA', 'Manajemen Perparkiran'),
(58, 'JOFAN DANDI SYAPUTRA', 'Manajemen Perparkiran'),
(59, 'JAROT ARIZKY M', 'Manajemen Perparkiran'),
(60, 'LALU PANCA', 'Manajemen Perparkiran'),
(61, 'MILKI', 'Manajemen Perparkiran'),
(62, 'MUHAMMAD IRFIN', 'Manajemen Perparkiran'),
(63, 'TRIANTO KURNIAWAN', 'Manajemen Perparkiran'),
(64, 'BAMBANG HARIYANTO', 'Manajemen Perparkiran'),
(65, 'ARIF YUDI PRASETYO', 'Manajemen Perparkiran'),
(66, 'YUDHA MASULA', 'Manajemen Perparkiran'),
(67, 'JOKO SANTOSO', 'Manajemen Perparkiran'),
(68, 'SUTRISNO', 'Manajemen Perparkiran'),
(69, 'ADI SUTOMO', 'Manajemen Perparkiran'),
(70, 'RAHMAD BASUKI', 'Manajemen Perparkiran'),
(71, 'M. NOER MARDIANSYAH', 'Manajemen Perparkiran'),
(72, 'ERFIN MAIFANI', 'Manajemen Perparkiran'),
(73, 'MOHAMMAD FIKRI', 'Manajemen Perparkiran'),
(74, 'RIZAL SATRIAWAN', 'Manajemen Perparkiran'),
(75, 'MOHAMAD SONI FAISAL', 'Manajemen Perparkiran'),
(76, 'LUPUS YOGA DEWANGGA', 'Manajemen Perparkiran'),
(77, 'ARDO AZWAR PRIHASTA', 'Manajemen Perparkiran'),
(78, 'I MADE ABDI HARMA L', 'Manajemen Perparkiran'),
(79, 'NURUL FAIZIN', 'Manajemen Perparkiran'),
(80, 'M. ARIYA YANUAR SAKTI', 'Manajemen Perparkiran'),
(81, 'RANDY PRATAMA', 'Manajemen Perparkiran'),
(82, 'TAUFAN ABABILLUNA ALAMSYAH', 'Manajemen Perparkiran'),
(83, 'IVAN SAPUTRA BOERHAM', 'Manajemen Perparkiran'),
(84, 'YOGA ARGADINATA', 'Manajemen Perparkiran'),
(85, 'ASMAUL KHUSNA', 'Manajemen Perparkiran'),
(86, 'SITI ROHMA ROMADHONA', 'Manajemen Perparkiran'),
(87, 'CHARMELITA BENIDA DA COSTA', 'Manajemen Perparkiran'),
(88, 'DWI ANANDA FEBRIYANI', 'Manajemen Perparkiran'),
(89, 'AJENG RATNASARI', 'Manajemen Perparkiran'),
(90, 'SYAHRUL SYAHRANI', 'Manajemen Perparkiran'),
(91, 'SILVIA A', 'Manajemen Perparkiran'),
(92, 'NISMA AKILA', 'Manajemen Perparkiran'),
(93, 'IRAWAN PANJI KARTIKO', 'Manajemen Perparkiran'),
(94, 'MOHAMMAD IZZI WAHANA', 'Manajemen Perparkiran'),
(95, 'LUKMAN NUR CHOLIL', 'Manajemen Perparkiran'),
(96, 'Ir. NGOEDIJONO, MS.Tr', 'Lalu Lintas'),
(97, 'AGOES SUPRIJANTO, S.E.', 'Lalu Lintas'),
(98, 'MUHAMAD MUNTASIR, S.E.', 'Lalu Lintas'),
(99, 'AKHMAD BASHORI', 'Lalu Lintas'),
(100, 'ABDUL KHOLIQ', 'Lalu Lintas'),
(101, 'SLAMET RIADI', 'Lalu Lintas'),
(102, 'SYAMSUL IKHWAN', 'Lalu Lintas'),
(103, 'SAIFUL ISLAM', 'Lalu Lintas'),
(104, 'TARMUJI', 'Lalu Lintas'),
(105, 'ROMLI', 'Lalu Lintas'),
(106, 'TURIS', 'Lalu Lintas'),
(107, 'YUKHRY MAWARDI', 'Lalu Lintas'),
(108, 'DIDIK IRFANTO', 'Lalu Lintas'),
(109, 'M. ASYIK SLAMET SANTOSO', 'Lalu Lintas'),
(110, 'RIKAN', 'Lalu Lintas'),
(111, 'ALI MUSAFAK', 'Lalu Lintas'),
(112, 'KUSNOHADI', 'Lalu Lintas'),
(113, 'KUSNIADI', 'Lalu Lintas'),
(114, 'EKO SUDIONO', 'Lalu Lintas'),
(115, 'ABDUL GHOFAR', 'Lalu Lintas'),
(116, 'WASIDI', 'Lalu Lintas'),
(117, 'FADKUR ROHMAN', 'Lalu Lintas'),
(118, 'KADI', 'Lalu Lintas'),
(119, 'ANGGI SHULPAN PRADANA', 'Lalu Lintas'),
(120, 'ALI MAYZALDI', 'Lalu Lintas'),
(121, 'SONI BACHTIAR, SE.MM', 'Angkutan'),
(122, 'JOSE MANUEL DA P.BELO.SE', 'Angkutan'),
(123, 'BADRUS SOLEH, SE', 'Angkutan'),
(124, 'WIDAYATI, SE', 'Angkutan'),
(125, 'BAMBANG SULISTYO, SE', 'Angkutan'),
(126, 'MOCHAMAD ANOM, S.H', 'Angkutan'),
(127, 'ARIF NURYANTO', 'Angkutan'),
(128, 'I KETUT WAHYU KURNIAWAN, S.S.T (TD)', 'Angkutan'),
(129, 'DENNY KURNIAWAN ', 'Angkutan'),
(130, 'FITRIA NUR AENI', 'Angkutan'),
(131, 'M. YOLANDA ADIN NATA', 'Angkutan'),
(133, 'Zafa Andini', 'Angkutan');

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
(1, '2022-01-14', 'meghan', 'diskominfo', 'kunjungan bulanan', '../asset/tandatangan/nicken.png'),
(2, '2022-01-14', 'zella', 'diskominfo', 'kunjungan', '../asset/tandatangan/nicken.png'),
(3, '2022-01-14', 'meghan2', 'diskominfo', 'kunjungan', '../asset/tandatangan/nicken.png'),
(4, '2022-01-14', 'meghan', 'diskominfo', 'ccc', '../asset/tandatangan/meghan.png'),
(5, '0000-00-00', 'meghan', 'diskominfo', 'ajhs', '../asset/tandatangan/meghan.png'),
(6, '14-01-2022', 'meghan', 'diskominfo', 'ddd', '../asset/tandatangan/meghan.png'),
(7, '15-01-2022', 'zella', 'bappeda', 'kunjungan', '../asset/tandatangan/nicken.png'),
(9, '15-01-2022', 'wilona nata', 'diskominfo2', 'pertemuan 2', '../asset/tandatangan/wilona nata.png'),
(10, '20-01-2022', 'nicken octaviana', 'poltek', 'pkl', '../asset/tandatangan/nicken.png');

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
-- Indexes for table `janjitemu`
--
ALTER TABLE `janjitemu`
  ADD PRIMARY KEY (`id_janji_temu`);

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
  MODIFY `id_calon_tamu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `janjitemu`
--
ALTER TABLE `janjitemu`
  MODIFY `id_janji_temu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
