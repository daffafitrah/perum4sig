-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 07:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig4bdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `perum`
--

CREATE TABLE `perum` (
  `id_perum` int(11) NOT NULL,
  `nama_perum` varchar(100) NOT NULL,
  `alamat_perum` varchar(200) NOT NULL,
  `dev_perum` varchar(100) NOT NULL,
  `latitude_perum` varchar(200) NOT NULL,
  `longitude_perum` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perum`
--

INSERT INTO `perum` (`id_perum`, `nama_perum`, `alamat_perum`, `dev_perum`, `latitude_perum`, `longitude_perum`) VALUES
(1, 'Perumahan Cinyruan', 'Jl. Cinyiruan No.c1, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122', 'Perum Cinyruan', '-6.899299737038058', '107.6318098403899'),
(2, 'Perum Griya Antariksa Asri', 'Sekebungur, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161', 'Antariksa Group', '-6.888999384358102', '107.60153546052864'),
(3, 'Samoja Elite Regency', 'Jl. Samoja, Samoja, Kec. Batununggal, Kota Bandung, Jawa Barat 40273', 'Elite Group Regency', '-6.921208056183501', '107.62608303677735');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `type_user` varchar(50) NOT NULL,
  `pw_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perum`
--
ALTER TABLE `perum`
  ADD PRIMARY KEY (`id_perum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perum`
--
ALTER TABLE `perum`
  MODIFY `id_perum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
