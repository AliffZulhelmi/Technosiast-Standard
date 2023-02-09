-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 05:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aliff`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenama`
--

CREATE TABLE `jenama` (
  `kod_jenama` varchar(10) NOT NULL,
  `jenama_barang` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenama`
--

INSERT INTO `jenama` (`kod_jenama`, `jenama_barang`) VALUES
('APL01', 'APPLE'),
('POC01', 'POCO'),
('RLM01', 'REALME'),
('SAM01', 'SAMSUNG'),
('VIV01', 'VIVO');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `nokp_pembeli` varchar(12) NOT NULL,
  `nama_pembeli` varchar(60) DEFAULT NULL,
  `katalaluan_pembeli` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`nokp_pembeli`, `nama_pembeli`, `katalaluan_pembeli`) VALUES
('0123453', 'SHAH AMIR', '123461'),
('0123455', 'SAMAD KAZAR', '123459'),
('990929105959', 'ZAMANI LEJEN', 'zamani');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `nokp_staff` varchar(12) NOT NULL,
  `nama_staff` varchar(60) DEFAULT NULL,
  `katalaluan_staff` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`nokp_staff`, `nama_staff`, `katalaluan_staff`) VALUES
('0123754', 'WAFY FD', '122480'),
('0123755', 'AMAR VELL', '122479'),
('0123773', 'KHABIR MYV', '122481'),
('0123775', 'NAFIS LCV', '122482'),
('123456789012', 'Hakim', '12345'),
('9999999', 'ADMIN ALIP', '122589');

-- --------------------------------------------------------

--
-- Table structure for table `telefon`
--

CREATE TABLE `telefon` (
  `kod_barang` int(2) NOT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `kod_jenama` varchar(10) DEFAULT NULL,
  `harga` double(7,2) DEFAULT NULL,
  `storan` text DEFAULT NULL,
  `nokp_staff` varchar(12) DEFAULT NULL,
  `gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefon`
--

INSERT INTO `telefon` (`kod_barang`, `nama_barang`, `kod_jenama`, `harga`, `storan`, `nokp_staff`, `gambar`) VALUES
(1, 'iPhone XS', 'APL01', 2693.00, '256', '9999999', 'iphone_xs.png'),
(2, 'Poco X3 Pro', 'POC01', 1099.00, '128', '0123775', 'poco_x3_pro.png'),
(3, 'Realme C3', 'RLM01', 165.00, '32', '0123773', 'realme_C3.png'),
(4, 'Vivo Y16', 'VIV01', 555.00, '64', '0123755', 'vivo_y16.png'),
(6, 'iPhone 11 Pro Max', 'APL01', 2999.00, '128', '9999999', '2023-02-09-112115.png'),
(7, 'iPhone 12 Pro Max', 'APL01', 3200.00, '512', '9999999', '2023-02-09-112700.png'),
(8, 'Samsung S22 Ultra', 'SAM01', 5099.00, '256', '9999999', '2023-02-09-143750.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenama`
--
ALTER TABLE `jenama`
  ADD PRIMARY KEY (`kod_jenama`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`nokp_pembeli`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nokp_staff`);

--
-- Indexes for table `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`kod_barang`),
  ADD KEY `NokpStaf` (`nokp_staff`),
  ADD KEY `KodJenama` (`kod_jenama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `telefon`
--
ALTER TABLE `telefon`
  MODIFY `kod_barang` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `telefon`
--
ALTER TABLE `telefon`
  ADD CONSTRAINT `telefon_ibfk_1` FOREIGN KEY (`nokp_staff`) REFERENCES `staff` (`nokp_staff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telefon_ibfk_2` FOREIGN KEY (`kod_jenama`) REFERENCES `jenama` (`kod_jenama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
