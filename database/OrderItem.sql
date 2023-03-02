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
-- Table structure for table `OrderItem`
--

CREATE TABLE `OrderItem` (
  `OrderItemId` int NOT NULL,
  `OrderId` int NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `quantity` int NOT NULL,
  `ProductId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `OrderItem`
--

INSERT INTO `OrderItem` (`OrderItemId`, `OrderId`, `price`, `quantity`, `ProductId`) VALUES
(1, 52, '3.50', 3, 2),
(2, 53, '4.50', 2, 1),
(3, 53, '7.00', 3, 3),
(4, 53, '2.50', 6, 5),
(5, 54, '4.50', 2, 1),
(6, 54, '7.00', 3, 3),
(7, 54, '2.50', 6, 5),
(8, 55, '4.50', 2, 1),
(9, 55, '2.50', 23, 5),
(10, 55, '5.00', 3, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OrderItem`
--
ALTER TABLE `OrderItem`
  ADD PRIMARY KEY (`OrderItemId`),
  ADD KEY `OrderItem_ibfk_1` (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OrderItem`
--
ALTER TABLE `OrderItem`
  MODIFY `OrderItemId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OrderItem`
--
ALTER TABLE `OrderItem`
  ADD CONSTRAINT `OrderItem_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `Order` (`OrderId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `OrderItem_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `menu` (`itemid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
