-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 01:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudapp_firmateveshjeve`
--

CREATE TABLE `crudapp_firmateveshjeve` (
  `id` bigint(20) NOT NULL,
  `FirmaVeshjes_umfv` varchar(255) DEFAULT NULL,
  `ProduktiVeshjes_umfv` varchar(255) DEFAULT NULL,
  `CmimiVeshjes_umfv` varchar(255) DEFAULT NULL,
  `DataRegjistrimit` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crudapp_firmateveshjeve`
--

INSERT INTO `crudapp_firmateveshjeve` (`id`, `FirmaVeshjes_umfv`, `ProduktiVeshjes_umfv`, `CmimiVeshjes_umfv`, `DataRegjistrimit`) VALUES
(9, 'Addidas', 'Atlete', '499.98$', '2024-12-22 00:03:56.928319'),
(13, 'HM', 'Bluze', '234$', '2024-12-23 15:38:11.791174'),
(14, 'Zara', 'Xhakete', '245$', '2024-12-23 15:39:00.913625');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudapp_firmateveshjeve`
--
ALTER TABLE `crudapp_firmateveshjeve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudapp_firmateveshjeve`
--
ALTER TABLE `crudapp_firmateveshjeve`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
