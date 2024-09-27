-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 09:21 PM
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
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` char(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`size_id`, `product_id`, `size`, `quantity`) VALUES
(5, 2, '41', 11),
(6, 2, '42', 12),
(7, 2, '43', 23),
(8, 2, '44', 9),
(20, 6, 'S', 11),
(21, 6, 'M', 23),
(22, 6, 'L', 14),
(23, 7, 'S', 8),
(24, 7, 'M', 24),
(25, 7, 'L', 12),
(26, 8, 'M', 12),
(27, 9, 'M', 12),
(28, 9, 'L', 27),
(29, 10, 'S', 13),
(30, 10, 'M', 22),
(31, 10, 'L', 16),
(32, 11, 'S', 12),
(33, 12, '26', 13),
(34, 12, '27', 20),
(35, 12, '28', 11),
(36, 13, 'S', 12),
(37, 13, 'M', 25),
(38, 14, '30', 12),
(39, 14, '31', 22),
(40, 14, '32', 13),
(41, 15, 'S', 12),
(42, 15, 'M', 22),
(43, 16, 'S', 12),
(44, 16, 'M', 22),
(45, 17, 'S', 22),
(46, 17, 'M', 17),
(47, 17, 'L', 32),
(48, 18, '26', 8),
(49, 18, '27', 6),
(50, 18, '29', 11),
(51, 18, '32', 16),
(52, 19, 'S', 13),
(53, 20, 'S', 6),
(54, 20, 'M', 12),
(55, 21, 'S', 12),
(56, 21, 'M', 21),
(57, 21, 'L', 22),
(58, 22, 'S', 7),
(59, 22, 'M', 13),
(60, 23, 'S', 12),
(61, 23, 'M', 21),
(62, 23, 'L', 7),
(65, 25, 'One Size', 21),
(66, 26, 'One Size', 8),
(67, 27, 'S', 12),
(68, 27, 'M', 26),
(69, 27, 'L', 18),
(70, 28, '16', 11),
(71, 28, '17', 21),
(72, 29, 'S', 12),
(73, 29, 'M', 22),
(74, 29, 'L', 18),
(75, 30, 'S', 12),
(76, 30, 'M', 12),
(77, 30, 'L', 15),
(78, 31, 'S', 12),
(79, 31, 'M', 27),
(80, 31, 'L', 17),
(81, 32, '41', 12),
(82, 32, '42', 21),
(83, 32, '43', 11),
(84, 32, '44', 23),
(85, 33, 'One Size', 7),
(86, 34, '41', 12),
(87, 34, '42', 18),
(88, 34, '43', 15),
(89, 34, '44', 21),
(90, 35, '41', 12),
(91, 35, '42', 14),
(92, 35, '43', 11),
(93, 35, '44', 9),
(94, 36, 'M', 12),
(95, 37, 'S', 21),
(96, 37, 'M', 16),
(97, 37, 'L', 18),
(98, 38, 'One Size', 15),
(99, 39, 'S', 12),
(100, 39, 'M', 17),
(101, 40, 'One Size', 12),
(102, 41, 'S', 13),
(103, 41, 'M', 132),
(104, 41, 'L', 2),
(105, 41, 'XL', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `sizes_ibfk_1` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
