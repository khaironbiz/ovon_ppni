-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2021 at 01:21 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u487816097_ovon`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluarga_fasilitas`
--

CREATE TABLE `keluarga_fasilitas` (
  `id_keluarga_fasilitas` int(11) NOT NULL,
  `key_keluarga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `has_keluarga_fasilitas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluarga_fasilitas`
--

INSERT INTO `keluarga_fasilitas` (`id_keluarga_fasilitas`, `key_keluarga`, `id_fasilitas`, `has_keluarga_fasilitas`) VALUES
(1, '619044efb85b0', 1, '93b8705b482ac6aa42470ed41ffc5c2f'),
(2, '619044efb85b0', 2, 'ce6149b83ff7f5b77f43f4004125429e'),
(3, '619044efb85b0', 3, 'a403f4188f0a1fa0b8153aa9353121b2'),
(4, '619044efb85b0', 4, '1fda7cc93d29cddec3711f4b867bfd30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluarga_fasilitas`
--
ALTER TABLE `keluarga_fasilitas`
  ADD PRIMARY KEY (`id_keluarga_fasilitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluarga_fasilitas`
--
ALTER TABLE `keluarga_fasilitas`
  MODIFY `id_keluarga_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
