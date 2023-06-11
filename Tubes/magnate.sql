-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 04:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magnate`
--

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `id` int NOT NULL,
  `pesanan` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `harga` int NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `memesan`
--

INSERT INTO `memesan` (`id`, `pesanan`, `jumlah`, `harga`, `gambar`) VALUES
(1, 'Wagyu RibEye Steak', '50', 1800000, '64848fa698ff9.jpg'),
(2, 'Louis xiii mozarella pizza', '50', 599000, '6484957d035c6.jpg'),
(3, 'Oyster casino', '50', 890000, '648495ba29d7b.jpg'),
(5, 'Sparkling Orange', '50', 200000, '6484984a131bd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'yesi', '$2y$10$IXvHwScqZMdIu3ZFnbwzkerYdRL7RKi0MMXWW8JZ.xC/3hEtdyyOS', '', 'admin'),
(2, 'caca', '$2y$10$7kpwC4VzYD8P4Y6jt1lvjuDzwqxzmNHDFRrpFQwp46/gfZ60Qy6ei', 'caca@gmail.com', 'user'),
(3, 'jeje', '$2y$10$NiY92WHtsUQW5T35sZ8wTuojke.CTSdEvcSQCJhmFX.SAkuPfzNiC', 'jeje@gmail.com', 'user'),
(4, 'ucuy', '$2y$10$ciLJCmrS.Wx/g4rpMelBReimhdHuHrHv63E3JOzLh2A.lhm2w.tmS', 'ucuy@gmail.com', 'user'),
(6, 'ririn', '$2y$10$T0nwCxwLIxmXFaJo/Mwn5uqESERo.2bOQGAqm0KzC1EM6aZ3NVICW', 'ririn@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memesan`
--
ALTER TABLE `memesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
