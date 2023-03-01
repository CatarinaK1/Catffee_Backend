-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 01, 2023 at 08:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Catffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `OrderId` int NOT NULL,
  `FirstName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Order`
--

INSERT INTO `Order` (`OrderId`, `FirstName`) VALUES
(1, 'i'),
(2, 'i'),
(3, 'i'),
(4, 'i'),
(5, 'i'),
(6, 'i'),
(7, 'i'),
(8, 'i'),
(9, 'i'),
(10, 'i'),
(11, 'i'),
(12, 'i'),
(13, 'i'),
(14, 'i'),
(15, 'i'),
(16, 'i'),
(17, 'i'),
(18, 'i'),
(19, 'i'),
(20, 'i'),
(21, 'i'),
(22, 'i'),
(23, 'i'),
(24, 'i'),
(25, 'i'),
(26, 'i'),
(27, 'i'),
(28, 'i'),
(29, 'i'),
(30, 'i'),
(31, 'i'),
(32, 'i'),
(33, 'i'),
(34, 'i'),
(35, 'i'),
(36, 'i'),
(37, 'i'),
(38, 'i'),
(39, 'i'),
(40, 'i'),
(41, 'i'),
(42, 'i'),
(43, 'i'),
(44, 'i'),
(45, 'i'),
(46, 'i'),
(47, 's'),
(48, 's'),
(49, 's'),
(50, 's'),
(51, 's'),
(52, 's'),
(53, 'de'),
(54, 'de'),
(55, 'Butt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`OrderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `OrderId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
