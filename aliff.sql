-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 05:58 PM
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
  `KodJenama` varchar(10) NOT NULL,
  `NamaJenama` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenama`
--

INSERT INTO `jenama` (`KodJenama`, `NamaJenama`) VALUES
('APL01', 'APPLE'),
('POC01', 'POCO'),
('RLM01', 'REALME'),
('VIV01', 'VIVO');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `NokpPembeli` varchar(12) NOT NULL,
  `NamaPembeli` varchar(60) DEFAULT NULL,
  `PassPembeli` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`NokpPembeli`, `NamaPembeli`, `PassPembeli`) VALUES
('0123452', 'AIREL ALI', '123462'),
('0123453', 'SHAH AMIR', '123461'),
('0123454', 'SOL AHMAD', '123460'),
('0123455', 'SAMAD KAZAR', '123459');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `NokpStaf` varchar(12) NOT NULL,
  `NamaStaf` varchar(60) DEFAULT NULL,
  `PassStaf` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`NokpStaf`, `NamaStaf`, `PassStaf`) VALUES
('0123754', 'WAFY FD', '122480'),
('0123755', 'AMAR VELL', '122479'),
('0123773', 'KHABIR MYV', '122481'),
('0123775', 'NAFIS LCV', '122482'),
('9999999', 'ADMIN ALIP', '122589');

-- --------------------------------------------------------

--
-- Table structure for table `telefon`
--

CREATE TABLE `telefon` (
  `KodBarang` int(2) NOT NULL,
  `NamaBarang` varchar(30) DEFAULT NULL,
  `KodJenama` varchar(10) DEFAULT NULL,
  `Harga` double(7,2) DEFAULT NULL,
  `Storan` int(5) DEFAULT NULL,
  `NokpStaf` varchar(12) DEFAULT NULL,
  `gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefon`
--

INSERT INTO `telefon` (`KodBarang`, `NamaBarang`, `KodJenama`, `Harga`, `Storan`, `NokpStaf`, `gambar`) VALUES
(1, 'iPhone XS', 'APL01', 2693.00, 256, '9999999', 'iphone_xs.png'),
(2, 'Poco X3 Pro', 'POC01', 1099.00, 128, '0123775', 'poco_x3_pro.png'),
(3, 'Realme C3', 'RLM01', 165.00, 32, '0123773', 'realme_C3.png'),
(4, 'Vivo Y16', 'VIV01', 555.00, 64, '0123755', 'vivo_y16.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenama`
--
ALTER TABLE `jenama`
  ADD PRIMARY KEY (`KodJenama`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`NokpPembeli`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`NokpStaf`);

--
-- Indexes for table `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`KodBarang`),
  ADD KEY `NokpStaf` (`NokpStaf`),
  ADD KEY `KodJenama` (`KodJenama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `telefon`
--
ALTER TABLE `telefon`
  MODIFY `KodBarang` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `telefon`
--
ALTER TABLE `telefon`
  ADD CONSTRAINT `telefon_ibfk_1` FOREIGN KEY (`NokpStaf`) REFERENCES `staff` (`NokpStaf`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `telefon_ibfk_2` FOREIGN KEY (`KodJenama`) REFERENCES `jenama` (`KodJenama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
