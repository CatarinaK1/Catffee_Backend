-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 28, 2023 at 08:52 PM
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
(12, 'Lemonade', 'Beverages', '3.00'),
(13, 'Milkshake', 'Beverages', '3.50'),
(15, 'Mango Peach', 'Smoothies', '5.50'),
(18, 'Juice', 'Beverages', '3.50'),
(19, 'Banana', 'Smoothies', '4.50'),
(20, 'Cappuccino', 'Coffee', '4.50'),
(21, 'Mocha', 'Coffee', '5.00'),
(22, 'American', 'Coffee', '2.50'),
(23, 'Greek', 'Salads', '8.50'),
(24, 'Caprese', 'Salads', '6.50'),
(25, 'Cobb', 'Salads', '8.00'),
(26, 'Popcorn', 'Snacks', '3.00'),
(27, 'Croissant', 'Snacks', '2.50'),
(28, 'Donut', 'Snacks', '2.00'),
(29, 'Pie', 'Desserts', '4.00'),
(30, 'Chocolate Cake', 'Desserts', '6.50'),
(31, 'Brownie', 'Desserts', '3.50'),
(32, 'Pineapple', 'Smoothies', '4.00'),
(33, 'Iced Tea', 'Beverages', '2.00'),
(34, 'Soda', 'Beverages', '2.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`itemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `itemid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
