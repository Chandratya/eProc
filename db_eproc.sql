-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 02:51 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eproc`
--

-- --------------------------------------------------------

--
-- Table structure for table `status_order`
--

CREATE TABLE `status_order` (
  `id_stat` int(20) NOT NULL,
  `status_order` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_order`
--

INSERT INTO `status_order` (`id_stat`, `status_order`) VALUES
(1, 'On Progress'),
(2, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE `t_order` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `nama_vendor` varchar(40) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `id_order` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_order`
--

INSERT INTO `t_order` (`id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `nama_vendor`, `status`, `id_order`) VALUES
(99, 'Keyboard Rexus', 20, 160000, 'Rexus', 2, 2),
(109, 'Desktop PC', 20, 2000000, 'Enter', 2, 3),
(8768, 'Kunci', 50, 10000, 'Steel legion', 1, 4),
(69, 'Micro SD', 43, 434343, 'ABCBC', 1, 5),
(67, 'Flashdisk 32GB', 5, 90000, 'VGEN', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `nama_user`, `email`, `username`, `password`) VALUES
(1, 'Administrator', 'administrator@eproc.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`id_stat`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `id_barang` (`id_barang`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_order`
--
ALTER TABLE `t_order`
  ADD CONSTRAINT `t_order_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_order` (`id_stat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
