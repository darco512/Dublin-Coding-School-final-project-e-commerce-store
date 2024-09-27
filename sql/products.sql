-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 09:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category` char(255) NOT NULL,
  `brand` char(255) NOT NULL,
  `type` char(255) NOT NULL,
  `color` char(255) NOT NULL,
  `old_price` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category`, `brand`, `type`, `color`, `old_price`, `price`) VALUES
(2, 'Men', 'Nike', 'Shoes', 'Black', 100.00, 49.99),
(6, 'Kids', 'GAP', 'Sweatshirt', 'Red', 49.99, 29.90),
(7, 'Kids', 'Nike', 'Jacket', 'Burgundy', 69.99, 48.90),
(8, 'Kids', 'The North Face', 'Sweatshirt', 'Yellow', 59.90, 38.99),
(9, 'Kids', 'Diesel', 'Jacket', 'Blue', 78.99, 56.90),
(10, 'Kids', 'Lego', 'Jacket', 'Green', 49.99, 24.90),
(11, 'Kids', 'Dsquared2', 'Shorts', 'Grey', 129.90, 74.90),
(12, 'Kids', 'Tommy Hilfiger', 'Shoes', 'Sand', 57.90, 39.99),
(13, 'Kids', 'The North Face', 'Vest', 'Black', 89.99, 44.90),
(14, 'Kids', 'Adidas', 'Shoes', 'Green', 75.00, 39.90),
(15, 'Kids', 'Lego', 'Overal', 'Blue', 67.90, 39.99),
(16, 'Kids', 'Lego', 'Overall', 'Blue', 68.90, 37.99),
(17, 'Kids', 'Some', 'Dress', 'White', 48.90, 29.99),
(18, 'Kids', 'Timberland', 'Shoes', 'Yellow', 120.90, 68.99),
(19, 'Kids', 'Palm Angels', 'T-shirt', 'Pink', 19.99, 9.99),
(20, 'Kids', 'Dsquared2', 'Shorts', 'Blue', 200.00, 88.90),
(21, 'Women', '7 for all Mankind', 'Jeans', 'Blue', 66.80, 28.80),
(22, 'Women', 'Polo', 'T-shirt', 'Black', 78.90, 48.99),
(23, 'Women', 'Comma,', 'Dr', 'Violet', 57.90, 38.90),
(25, 'Women', 'Michael Kors', ' Handbag', 'Green', 89.99, 38.99),
(26, 'Women', 'Michael Kors', 'Handbag', 'Black', 79.99, 39.90),
(27, 'Women', 'Some', 'Jacket', 'Black', 69.99, 49.90),
(28, 'Women', 'Some', 'Ring', 'Gold', 180.90, 99.90),
(29, 'Men', 'Patagonia', 'Jacket', 'Gray', 79.99, 49.90),
(30, 'Men', 'Some', 'Jeans', 'Blue', 68.80, 47.90),
(31, 'Men', 'Boss', 'Sweatshirt', 'Black', 77.99, 37.99),
(32, 'Men', 'Adidas', 'Shoes', 'Yellow', 68.90, 39.00),
(33, 'Men', 'Boss', 'Watch', 'Blue', 280.00, 199.99),
(34, 'Men', 'Lawrence Grey', 'Shoes', 'Black', 120.00, 64.99),
(35, 'Men', 'Lawrence Grey', 'Shoes', 'Brown', 120.00, 64.99),
(36, 'Men', 'Some', 'Jacket', 'Dark Grey', 88.90, 47.99),
(37, 'Men', 'Cavalli Class', 'T-shirt', 'Dark Blue', 49.99, 29.90),
(38, 'Men', 'Gucci', 'Glasses', 'Gray', 156.90, 99.99),
(39, 'Men', 'Douglas Hayward', 'Suit', 'Beige', 219.99, 149.99),
(40, 'Men', 'Balenciaga', 'Belt', 'Beige', 200.00, 99.99),
(41, 'Women', 'Boss', 'Sweatshirt', 'Black', 99.99, 49.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
