-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 03, 2023 at 03:38 PM
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
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `PhoneNumber` int NOT NULL,
  `Email` varchar(60) NOT NULL,
  `TableDate` date NOT NULL,
  `CustomerId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `itemid` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`itemid`, `name`, `category`, `price`) VALUES
(1, 'Latte', 'Coffee', '4.50'),
(2, 'Espresso', 'Coffee', '3.50'),
(3, 'Caesar', 'Salads', '7.00'),
(4, 'Spinach', 'Salads', '6.50'),
(5, 'Pretzels', 'Snacks', '2.50'),
(6, 'Muffin', 'Snacks', '2.00'),
(7, 'Cake', 'Desserts', '5.50'),
(8, 'Cheesecake', 'Desserts', '5.00'),
(9, 'Strawberry', 'Smoothies', '5.00'),
(10, 'Blueberry', 'Smoothies', '4.50'),
(11, 'Soda', 'Beverages', '2.50'),
(12, 'Lemonade', 'Beverages', '3.00'),
(13, 'Milkshake', 'Beverages', '3.50'),
(14, 'Iced Tea', 'Beverages', '2.00'),
(15, 'Mango Peach', 'Smoothies', '5.50');

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `customerEmail` varchar(90) NOT NULL,
  `fname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Newsletter`
--

INSERT INTO `Newsletter` (`customerEmail`, `fname`) VALUES
('aaa', 'aa'),
('emma@gmail.com', 'Emma'),
('hello@gmail.com', 'Hello'),
('laura@gmail.com', 'Laura');

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
(55, 'Butt'),
(56, 'a'),
(57, 'A'),
(58, '');

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
(10, 55, '5.00', 3, 9),
(11, 56, '3.50', 33, 2),
(12, 57, '4.50', 0, 1),
(13, 58, '3.00', 22, 12);

-- --------------------------------------------------------

--
-- Table structure for table `Survey`
--

CREATE TABLE `Survey` (
  `rate` tinyint NOT NULL,
  `how` varchar(50) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `Newsletter`
--
ALTER TABLE `Newsletter`
  ADD PRIMARY KEY (`customerEmail`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`OrderId`);

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
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerId` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `itemid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `OrderId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `OrderItem`
--
ALTER TABLE `OrderItem`
  MODIFY `OrderItemId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
