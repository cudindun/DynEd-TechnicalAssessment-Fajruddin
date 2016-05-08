-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2016 at 03:33 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dyned_spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kode`
--

CREATE TABLE `kode` (
  `id` int(11) NOT NULL,
  `kode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode`
--

INSERT INTO `kode` (`id`, `kode`) VALUES
(1, 'XYZSTU');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `nama_soal` text NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  `kode_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `nama_soal`, `jawaban`, `kode_soal`) VALUES
(1, 'soal no 1 ini .......', 'B', 1),
(2, 'Soal No 2 ini .....', 'A', 1),
(3, 'Soal No 3 ini .....', 'D', 1),
(4, 'Soal No 4 ini .....', 'C', 1),
(5, 'Soal No 5 ini .....', 'B', 1),
(6, 'Soal No 6 ini .....', 'A', 1),
(7, 'Soal No 7 ini .....', 'D', 1),
(8, 'Soal No 8 ini .....', 'D', 1),
(9, 'Soal No 9 ini .....', 'A', 1),
(10, 'Soal No 10 ini .....', 'A', 1),
(11, 'Soal No 11 ini .....', 'A', 1),
(12, 'Soal No 12 ini .....', 'A', 1),
(13, 'Soal No 13 ini .....', 'C', 1),
(14, 'Soal No 14 ini .....', 'C', 1),
(15, 'Soal No 15 ini .....', 'D', 1),
(16, 'Soal No 16 ini .....', 'A', 1),
(17, 'Soal No 17 ini .....', 'B', 1),
(18, 'Soal No 18 ini .....', 'B', 1),
(19, 'Soal No 19 ini .....', 'A', 1),
(20, 'Soal No 20 ini .....', 'D', 1),
(21, 'Soal No 21 ini .....', 'A', 1),
(22, 'Soal No 22 ini .....', 'D', 1),
(23, 'Soal No 23 ini .....', 'C', 1),
(24, 'Soal No 24 ini .....', 'C', 1),
(25, 'Soal No 25 ini .....', 'A', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_soal` (`kode_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kode`
--
ALTER TABLE `kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`kode_soal`) REFERENCES `kode` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
