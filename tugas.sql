-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 04:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nm_depan` varchar(100) NOT NULL,
  `nm_belakang` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `owner` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `username`, `password`, `nm_depan`, `nm_belakang`, `email`, `owner`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'rental', 'admin@gmail.com', 1),
(2, 'roni', 'c7911af3adbd12a035b289556d96470a', 'roni', 'santoso', 'roni@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `nopol` varchar(100) NOT NULL,
  `merek` varchar(200) NOT NULL,
  `warna` varchar(200) NOT NULL,
  `t_duduk` int(50) NOT NULL,
  `tersedia` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`nopol`, `merek`, `warna`, `t_duduk`, `tersedia`) VALUES
('AG 123 VL', 'Toyota Inova', 'Hitam', 7, 0),
('AG 231 VL', 'Toyota Avanza', 'Gray', 7, 1),
('AG 234 VL', 'Daihatsu Xenia', 'Putih', 7, 1),
('AG 5874 VL', 'Toyota Alphard', 'Putih', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nopol` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` int(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_dikembalikan` date NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `telepon`, `nik`, `nopol`, `tgl_pinjam`, `tgl_kembali`, `harga`, `tgl_transaksi`, `tgl_dikembalikan`, `admin`) VALUES
(10, 'anton', '085215659874', '35181324845962154', 'AG 123 VL', '2019-07-17', '2019-07-18', 150000, '2019-07-17', '0000-00-00', 0),
(11, 'Bayu', '0852658745562', '35181324845962141', 'AG 5874 VL', '2019-07-17', '2019-07-20', 3000000, '2019-07-17', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`nopol`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
