-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 10:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpajak_skpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rm`
--

CREATE TABLE `tbl_rm` (
  `npwp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `masa_pajak` varchar(25) NOT NULL,
  `jumlah_pokok_pajak` varchar(5) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_simpan`
--

CREATE TABLE `tbl_simpan` (
  `id` int(5) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `jenis_pajak` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `pemberi` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `alamat` text NOT NULL,
  `masa_pajak` date NOT NULL,
  `jumlah_pokok_pajak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_simpan`
--

INSERT INTO `tbl_simpan` (`id`, `npwp`, `jenis_pajak`, `nama`, `penerima`, `pemberi`, `tgl_masuk`, `alamat`, `masa_pajak`, `jumlah_pokok_pajak`) VALUES
(26, '6254274115000', 'Data Pajak Rumah Mak', 'Cafe Hasturi', 'anto', 'ayu', '2019-12-12', 'jl.Imam Bonjol Kisaran', '2019-09-10', '200000'),
(27, '62421726115000', 'Data Pajak Hotel', 'Hotel Bintang', 'Citra ', 'Dinata', '2020-02-01', 'jl.Imam Bonjol Kisaran', '2020-01-01', '100000'),
(28, '917292609115000', 'Data Pajak Parkir', 'Gudang Garasi Suzuki', 'Citra ', 'Mila Safitri', '2020-02-02', 'Jl.Sm.Raja Kisaran', '2019-12-02', '100000'),
(29, '912192107115000', 'Data Pajak Hotel', 'Hotel Nusa Indah', 'Citra ', 'willy Ratna Dewi', '2020-01-28', 'Jl. Ahmad Yani Kisaran', '2019-12-08', '300000'),
(30, '912297608115000', 'Data Pajak Rumah Mak', 'Fast Food Indonesia', 'Citra ', 'ayu ningsih', '2020-01-26', 'Jalinsum Hessa Air Genting', '2019-12-23', '150000'),
(31, '913297208115000', 'Data Pajak Parkir', 'Parkir Dunia Sakti', 'Citra ', 'Widy Willam', '2020-01-24', 'Jl.Pramuka Kisaran', '2020-01-01', '50000'),
(32, '913196203115000', 'Data Pajak Rumah Mak', 'Warung Cindelaras', 'Citra ', 'reny aspika rahmi', '2020-01-15', 'Jl.Cokroaminoto Kisaran', '2019-12-01', '100000'),
(33, '923295204115000', 'Data Pajak Hotel', 'Hotel Marina', 'Citra ', 'Reno ', '2020-01-13', 'Jl.SM Raja Kisaran', '2019-12-17', '300000'),
(34, '843297208115000', 'Data Pajak Parkir', 'Parkir Graha Adira', 'Rini', 'Ghina Mulia', '2020-01-07', 'Jl. Surya Bakti', '2019-12-01', '50000'),
(35, '822297608115000', 'Data Pajak Hotel', 'Penginapan First IN', 'Citra ', 'Maya Priska', '2020-01-22', 'Jl.Bakti Kisaran', '2019-11-01', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'kelompokpajakskpd@gmail.com', 'pajak skpd', 1, 'Staff Kabid Pelayanan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_rm`
--
ALTER TABLE `tbl_rm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_simpan`
--
ALTER TABLE `tbl_simpan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_rm`
--
ALTER TABLE `tbl_rm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_simpan`
--
ALTER TABLE `tbl_simpan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
