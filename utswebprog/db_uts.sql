-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 08:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmhs`
--

CREATE TABLE `tbmhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `jeniskelamin` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `idmhs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbmhs`
--

INSERT INTO `tbmhs` (`id`, `nama`, `nim`, `prodi`, `jeniskelamin`, `idmhs`) VALUES
(8, 'I Nyoman Mutiara Hindi Tama', '2021331210', 'Teknik Informatika - MDI', NULL, '002b7a57fda1ce02c3e5f8ba92caa30e'),
(11, 'I Made Landiva', '2201010591', 'Teknik Informatika - MDI', NULL, '99e56f14325c60b0a9e34fdd1427ad82'),
(12, 'I Kadek Suputrajaya', '2201010610', 'Teknik Informatika - MDI', NULL, 'c33f8810b6c3a8dcaa166306712cad4e'),
(13, 'I Komang Deni Urip Prima Saputra', '2201010592', 'Teknik Informatika - MDI', NULL, 'dde0447ff429189aa6b257041fa1c0c1'),
(14, 'I Made Budi Hardiantha', '2201010210', 'Teknik Informatika - MDI', NULL, '8d8ac2c9adf8a4394527c041996e5413'),
(37, 'I Putu Rian Juliantara', '2201010999', 'Teknik Informatika - MDI', NULL, '22aa2dd74044b3e2d7f34ad6241918d5'),
(43, 'Mega-chan', '2201010990', 'Teknik PDI-Perjuangan', NULL, 'e0a21659341c50036aa2095b11036b4c');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `paskey` varchar(255) DEFAULT NULL,
  `iduser` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `paskey`, `iduser`) VALUES
(1, 'I Komang Alit Pranadita', 'alitpranadita10@gmail.com', 'Tinkkesz', 'Alit123_', 'f5f2cfe879401b947de2b702145ba417'),
(2, 'I Kadek SuputraJaya', 'suputrajaya280@gmail.com', 'ShiroOnii', '', '22ca5e2108644cb0c632c124e67822d6'),
(3, 'I Made Landiva', 'mayuncreativedesign@gmail.com', 'Mayun', 'Mayun123', 'cf8b3127109116bc292e4cd55c984fff'),
(4, 'I Komang Deni', 'mangdeni123@gmail.com', 'ertayup', 'Mangdeni123', '93466c8a797452aaac33fa4a6f11a43e'),
(5, 'I Nyoman Mutiara Hindi Tama', 'mutiarahinditama@gmail.com', 'Hindi Tama', 'Mutiara123', 'dfe5cedb908820a83181a4d60b8f2509'),
(7, 'Lele', 'lele@gmail.com', 'Lele', 'lele123', '0488ac67f91876add379398f4e99532d'),
(8, 'Jarjit', 'jarjit123@gmail.com', 'Jarjit', 'Jarjit123', 'bb1b3d6d3fc4b58cc530973f83cda098'),
(9, 'Stipen', 'stipen123@gmail.com', 'Stipen kar', 'karlos123', 'd08f510ca239cdfa10ddabb845afc1ea'),
(10, 'Mega-chan', 'megachan@gmail.com', 'Megachan', 'pdi123', '2d415a8c3bdafea93af1893e7e6acf34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmhs`
--
ALTER TABLE `tbmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmhs`
--
ALTER TABLE `tbmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
