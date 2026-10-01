-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2026 at 10:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` enum('admin','guru','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_id`, `password`, `level`) VALUES
(2, 2, '456', 'admin'),
(3, 3, '234', 'admin'),
(4, 4, '789', 'guru'),
(5, 567, '5798', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `jk`, `alamat`, `password`) VALUES
('123', 'Bu Reni', 'Perempuan', 'Desa Wanaherang', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(2, 'XI K3', 'Kimia Industri'),
(3, 'XII TP 1', 'Teknik Pemesinan'),
(4, 'X TKJ 1', 'Teknik Komputer Jaringan'),
(5, 'XII RPL 1', 'Rekayasa Perangkat Lunak'),
(6, 'XI L3', 'Pengelasan'),
(7, 'X E3', 'Elektro'),
(9, 'XI K2', 'Kimia Industri');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(12) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
(34, 1, '094884585', '2023-02-16', 'Maret', '2022', 12, 200000),
(46, 1, '0977677', '2023-02-20', 'Agustus', '2022', 15, 150000),
(49, 1, '0977677', '2023-03-05', 'Oktober', '2022', 15, 150000),
(50, 1, '0977677', '2023-03-05', 'September', '2021', 15, 150000),
(52, 1, '09439476', '2023-03-05', 'November', '2022', 12, 200000),
(53, 1, '0967865', '2023-03-05', 'November', '2022', 15, 150000),
(57, 3, '020904', '2023-03-07', 'September', '2023', 2, 300000),
(58, 1, '0967865', '2023-03-08', 'Januari', '2023', 15, 150000),
(59, 1, '324554565', '2023-03-08', 'Februari', '2023', 15, 150000),
(60, 1, '0987657', '2023-03-08', 'Januari', '2022', 2, 300000),
(62, 2, '7568087', '2023-03-08', 'November', '2022', 16, 250000),
(63, 6, '09439476', '2023-03-09', 'Maret', '2013', 12, 200000),
(64, 1, '', '2023-03-09', 'November', '2021', 2, 300000),
(65, 1, '', '2023-03-09', 'Oktober', '2021', 2, 300000),
(66, 1, '020904', '2023-03-09', 'Oktober', '2022', 2, 300000),
(67, 1, '0987657', '2023-03-09', 'November', '2022', 2, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'mimin', '123', 'admin1', 'admin'),
(2, 'alya', 'alya', 'alyaandina', 'admin'),
(3, 'unus', 'alya', 'yunus', 'petugas'),
(6, 'uta', '456', 'putra', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `password`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('020904', '2912102', '123', 'ade', 4, 'kp.lulut', '09887566', 2),
('051079', '020274', 'ulaa05', 'Ulaa', 7, 'kp. Cicadas', '0878654328', 12),
('09439476', '16537468', 'ica65', 'ica', 3, 'kp.pardek', '089587475', 12),
('094884585', '68767823', 'wil21', 'Haris', 2, 'kp. Karanggan', '0899863870', 12),
('0967865', '74687587', 'nini67', 'nini', 6, 'kp. Tlajung Udik', '08997564565', 15),
('0977677', '14030509', 'aya1403', 'alya', 5, 'kp. tlajung', '09898687679', 15),
('0987657', '4354671', 'dani8687', 'dani', 2, 'kp. Narogong', '0866775534', 2),
('291210', '09884678', '45678', 'sabil', 7, 'Kp. Cicadas', '0897547769', 12),
('324554565', '243544', '3456', 'siti', 5, 'kp. Cicadas', '0897769764', 15),
('7436345', '123456', 'unus02', 'yunus', 3, 'Kp. Narogong', '08977565567', 2),
('7568087', '45876958', 'aya092', 'aya', 9, 'kp. Jonggol', '089766754', 16);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(2, 2021, 300000),
(12, 2022, 200000),
(15, 2023, 150000),
(16, 2019, 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran_1` (`id_petugas`),
  ADD KEY `pembayaran_3` (`nisn`),
  ADD KEY `pembayaran_2` (`id_spp`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `siswa_1` (`id_spp`),
  ADD KEY `siswa_2` (`id_kelas`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_1` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
