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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `path` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `path`) VALUES
(6, 2, '/Coding School Final Project/uploads/image_32483285_99_620x757_0.webp'),
(7, 2, '/Coding School Final Project/uploads/image_32483285_99_620x757_1.webp'),
(8, 2, '/Coding School Final Project/uploads/image_32483285_99_620x757_2.webp'),
(9, 2, '/Coding School Final Project/uploads/image_32483285_99_620x757_3.webp'),
(10, 2, '/Coding School Final Project/uploads/image_32483285_99_620x757_4.jpg'),
(11, 2, '/Coding School Final Project/uploads/image_32483285_99_620x757_5.jpg'),
(12, 2, '/Coding School Final Project/uploads/image_32483285_99_620x757_6.webp'),
(36, 6, '/Coding School Final Project/uploads/image_32445687_40_620x757_0.webp'),
(37, 6, '/Coding School Final Project/uploads/image_32445687_40_620x757_1.jpg'),
(38, 6, '/Coding School Final Project/uploads/image_32445687_40_620x757_2.jpg'),
(39, 7, '/Coding School Final Project/uploads/image_32679042_41_620x757_0.webp'),
(40, 7, '/Coding School Final Project/uploads/image_32679042_41_620x757_1.jpg'),
(41, 7, '/Coding School Final Project/uploads/image_32679042_41_620x757_2.webp'),
(42, 8, '/Coding School Final Project/uploads/image_32811671_67_620x757_0.webp'),
(43, 8, '/Coding School Final Project/uploads/image_32811671_67_620x757_1.jpg'),
(44, 8, '/Coding School Final Project/uploads/image_32811671_67_620x757_2.webp'),
(45, 9, '/Coding School Final Project/uploads/image_32860334_12_620x757_0.jpg'),
(46, 9, '/Coding School Final Project/uploads/image_32860334_12_620x757_1.jpg'),
(47, 9, '/Coding School Final Project/uploads/image_32860334_12_620x757_2.jpg'),
(48, 10, '/Coding School Final Project/uploads/image_32864335_50_620x757_0.webp'),
(49, 10, '/Coding School Final Project/uploads/image_32864335_50_620x757_1.jpg'),
(50, 10, '/Coding School Final Project/uploads/image_32864335_50_620x757_2.webp'),
(51, 11, '/Coding School Final Project/uploads/image_32887125_81_620x757_0.jpg'),
(52, 11, '/Coding School Final Project/uploads/image_32887125_81_620x757_1.jpg'),
(53, 11, '/Coding School Final Project/uploads/image_32887125_81_620x757_2.jpg'),
(54, 12, '/Coding School Final Project/uploads/image_32936789_22_620x757_0.webp'),
(55, 12, '/Coding School Final Project/uploads/image_32936789_22_620x757_1.webp'),
(56, 12, '/Coding School Final Project/uploads/image_32936789_22_620x757_2.webp'),
(57, 12, '/Coding School Final Project/uploads/image_32936789_22_620x757_3.webp'),
(58, 12, '/Coding School Final Project/uploads/image_32936789_22_620x757_4.jpg'),
(59, 13, '/Coding School Final Project/uploads/image_32997944_10_620x757_0.webp'),
(60, 13, '/Coding School Final Project/uploads/image_32997944_10_620x757_1.webp'),
(61, 13, '/Coding School Final Project/uploads/image_32997944_10_620x757_2.webp'),
(62, 14, '/Coding School Final Project/uploads/image_33000292_55_620x757_0.webp'),
(63, 14, '/Coding School Final Project/uploads/image_33000292_55_620x757_1.webp'),
(64, 14, '/Coding School Final Project/uploads/image_33000292_55_620x757_2.webp'),
(65, 14, '/Coding School Final Project/uploads/image_33000292_55_620x757_3.webp'),
(66, 14, '/Coding School Final Project/uploads/image_33000292_55_620x757_4.webp'),
(67, 14, '/Coding School Final Project/uploads/image_33000292_55_620x757_5.jpg'),
(68, 14, '/Coding School Final Project/uploads/image_33000292_55_620x757_6.jpg'),
(69, 14, '/Coding School Final Project/uploads/image_33000292_55_620x757_7.webp'),
(70, 15, '/Coding School Final Project/uploads/image_31850704_31_620x757_0.webp'),
(71, 15, '/Coding School Final Project/uploads/image_31850704_31_620x757_1.webp'),
(72, 15, '/Coding School Final Project/uploads/image_31850704_31_620x757_2.webp'),
(73, 16, '/Coding School Final Project/uploads/image_31850705_31_620x757_0.webp'),
(74, 16, '/Coding School Final Project/uploads/image_31850705_31_620x757_1.webp'),
(75, 16, '/Coding School Final Project/uploads/image_31850705_31_620x757_2.webp'),
(76, 16, '/Coding School Final Project/uploads/image_31850705_31_620x757_3.webp'),
(77, 17, '/Coding School Final Project/uploads/image_32674224_39_620x757_0.webp'),
(78, 17, '/Coding School Final Project/uploads/image_32674224_39_620x757_1.webp'),
(79, 17, '/Coding School Final Project/uploads/image_32674224_39_620x757_2.webp'),
(80, 18, '/Coding School Final Project/uploads/image_32680602_23_620x757_0.webp'),
(81, 18, '/Coding School Final Project/uploads/image_32680602_23_620x757_1.webp'),
(82, 18, '/Coding School Final Project/uploads/image_32680602_23_620x757_2.webp'),
(83, 18, '/Coding School Final Project/uploads/image_32680602_23_620x757_3.webp'),
(84, 18, '/Coding School Final Project/uploads/image_32680602_23_620x757_4.jpg'),
(85, 19, '/Coding School Final Project/uploads/image_32827272_39_620x757_0.webp'),
(86, 19, '/Coding School Final Project/uploads/image_32827272_39_620x757_1.webp'),
(87, 19, '/Coding School Final Project/uploads/image_32827272_39_620x757_2.webp'),
(88, 20, '/Coding School Final Project/uploads/image_32887130_09_620x757_0.jpg'),
(89, 20, '/Coding School Final Project/uploads/image_32887130_09_620x757_1.jpg'),
(90, 20, '/Coding School Final Project/uploads/image_32887130_09_620x757_2.jpg'),
(91, 21, '/Coding School Final Project/uploads/image_33003165_30_620x757_0.webp'),
(92, 21, '/Coding School Final Project/uploads/image_33003165_30_620x757_1.jpg'),
(93, 21, '/Coding School Final Project/uploads/image_33003165_30_620x757_2.webp'),
(94, 21, '/Coding School Final Project/uploads/image_33003165_30_620x757_3.jpg'),
(95, 21, '/Coding School Final Project/uploads/image_33003165_30_620x757_4.webp'),
(96, 22, '/Coding School Final Project/uploads/image_40028217_000043035_620x757_0.webp'),
(97, 22, '/Coding School Final Project/uploads/image_40028217_000043035_620x757_1.jpg'),
(98, 22, '/Coding School Final Project/uploads/image_40028217_000043035_620x757_2.webp'),
(99, 22, '/Coding School Final Project/uploads/image_40028217_000043035_620x757_3.webp'),
(100, 22, '/Coding School Final Project/uploads/image_40028217_000043035_620x757_4.webp'),
(101, 23, '/Coding School Final Project/uploads/image_32265730_37_620x757_0.webp'),
(102, 23, '/Coding School Final Project/uploads/image_32265730_37_620x757_1.jpg'),
(103, 23, '/Coding School Final Project/uploads/image_32265730_37_620x757_2.webp'),
(104, 23, '/Coding School Final Project/uploads/image_32265730_37_620x757_3.jpg'),
(105, 23, '/Coding School Final Project/uploads/image_32265730_37_620x757_4.webp'),
(111, 25, '/Coding School Final Project/uploads/image_32777412_50_620x757_0.jpg'),
(112, 25, '/Coding School Final Project/uploads/image_32777412_50_620x757_1.jpg'),
(113, 25, '/Coding School Final Project/uploads/image_32777412_50_620x757_2.jpg'),
(114, 25, '/Coding School Final Project/uploads/image_32777412_50_620x757_3.jpg'),
(115, 25, '/Coding School Final Project/uploads/image_32777412_50_620x757_4.webp'),
(116, 26, '/Coding School Final Project/uploads/image_32777916_10_620x757_0.webp'),
(117, 26, '/Coding School Final Project/uploads/image_32777916_10_620x757_1.jpg'),
(118, 26, '/Coding School Final Project/uploads/image_32777916_10_620x757_2.jpg'),
(119, 26, '/Coding School Final Project/uploads/image_32777916_10_620x757_3.webp'),
(120, 27, '/Coding School Final Project/uploads/image_32973580_10_620x757_0.webp'),
(121, 27, '/Coding School Final Project/uploads/image_32973580_10_620x757_1.jpg'),
(122, 27, '/Coding School Final Project/uploads/image_32973580_10_620x757_2.webp'),
(123, 27, '/Coding School Final Project/uploads/image_32973580_10_620x757_3.webp'),
(124, 27, '/Coding School Final Project/uploads/image_32973580_10_620x757_4.webp'),
(125, 28, '/Coding School Final Project/uploads/image_32175725_17_620x757_0 - Copy.webp'),
(126, 28, '/Coding School Final Project/uploads/image_32175725_17_620x757_1.webp'),
(127, 28, '/Coding School Final Project/uploads/image_32175725_17_620x757_2 - Copy.webp'),
(128, 28, '/Coding School Final Project/uploads/image_32175725_17_620x757_3 - Copy.webp'),
(129, 29, '/Coding School Final Project/uploads/image_31940923_82_620x757_0.webp'),
(130, 29, '/Coding School Final Project/uploads/image_31940923_82_620x757_1.jpg'),
(131, 29, '/Coding School Final Project/uploads/image_31940923_82_620x757_2.webp'),
(132, 29, '/Coding School Final Project/uploads/image_31940923_82_620x757_3.webp'),
(133, 29, '/Coding School Final Project/uploads/image_31940923_82_620x757_4.webp'),
(134, 30, '/Coding School Final Project/uploads/image_32376689_30_620x757_0.webp'),
(135, 30, '/Coding School Final Project/uploads/image_32376689_30_620x757_1.jpg'),
(136, 30, '/Coding School Final Project/uploads/image_32376689_30_620x757_2.webp'),
(137, 30, '/Coding School Final Project/uploads/image_32376689_30_620x757_3.webp'),
(138, 30, '/Coding School Final Project/uploads/image_32376689_30_620x757_4.webp'),
(139, 31, '/Coding School Final Project/uploads/image_32706824_31_68x84_3.webp'),
(140, 31, '/Coding School Final Project/uploads/image_32706824_31_620x757_0.webp'),
(141, 31, '/Coding School Final Project/uploads/image_32706824_31_620x757_1.jpg'),
(142, 31, '/Coding School Final Project/uploads/image_32706824_31_620x757_2.webp'),
(143, 31, '/Coding School Final Project/uploads/image_32706824_31_620x757_4.webp'),
(144, 32, '/Coding School Final Project/uploads/image_33000285_21_620x757_0.webp'),
(145, 32, '/Coding School Final Project/uploads/image_33000285_21_620x757_1.jpg'),
(146, 32, '/Coding School Final Project/uploads/image_33000285_21_620x757_2.webp'),
(147, 32, '/Coding School Final Project/uploads/image_33000285_21_620x757_3.webp'),
(148, 32, '/Coding School Final Project/uploads/image_33000285_21_620x757_4.webp'),
(149, 32, '/Coding School Final Project/uploads/image_33000285_21_620x757_5.jpg'),
(150, 32, '/Coding School Final Project/uploads/image_33000285_21_620x757_6.webp'),
(151, 32, '/Coding School Final Project/uploads/image_33000285_21_620x757_7.webp'),
(152, 33, '/Coding School Final Project/uploads/image_32623989_30_620x757_0.webp'),
(153, 33, '/Coding School Final Project/uploads/image_32623989_30_620x757_1.webp'),
(154, 33, '/Coding School Final Project/uploads/image_32623989_30_620x757_2.webp'),
(155, 33, '/Coding School Final Project/uploads/image_32623989_30_620x757_3.webp'),
(156, 34, '/Coding School Final Project/uploads/image_32797191_10_620x757_0.webp'),
(157, 34, '/Coding School Final Project/uploads/image_32797191_10_620x757_1.webp'),
(158, 34, '/Coding School Final Project/uploads/image_32797191_10_620x757_2.webp'),
(159, 34, '/Coding School Final Project/uploads/image_32797191_10_620x757_3.webp'),
(160, 34, '/Coding School Final Project/uploads/image_32797191_10_620x757_4.jpg'),
(161, 35, '/Coding School Final Project/uploads/image_32834364_70_620x757_0.webp'),
(162, 35, '/Coding School Final Project/uploads/image_32834364_70_620x757_1.jpg'),
(163, 35, '/Coding School Final Project/uploads/image_32834364_70_620x757_2.webp'),
(164, 35, '/Coding School Final Project/uploads/image_32834364_70_620x757_3.webp'),
(165, 35, '/Coding School Final Project/uploads/image_32834364_70_620x757_4.jpg'),
(166, 36, '/Coding School Final Project/uploads/image_32848944_10_620x757_0.webp'),
(167, 36, '/Coding School Final Project/uploads/image_32848944_10_620x757_1.jpg'),
(168, 36, '/Coding School Final Project/uploads/image_32848944_10_620x757_2.jpg'),
(169, 36, '/Coding School Final Project/uploads/image_32848944_10_620x757_3.jpg'),
(170, 36, '/Coding School Final Project/uploads/image_32848944_10_620x757_4.webp'),
(171, 37, '/Coding School Final Project/uploads/image_32908953_36_620x757_0.webp'),
(172, 37, '/Coding School Final Project/uploads/image_32908953_36_620x757_1.jpg'),
(173, 37, '/Coding School Final Project/uploads/image_32908953_36_620x757_2.webp'),
(174, 37, '/Coding School Final Project/uploads/image_32908953_36_620x757_3.webp'),
(175, 37, '/Coding School Final Project/uploads/image_32908953_36_620x757_4.webp'),
(176, 38, '/Coding School Final Project/uploads/image_32973233_83_620x757_0.webp'),
(177, 38, '/Coding School Final Project/uploads/image_32973233_83_620x757_1.webp'),
(178, 38, '/Coding School Final Project/uploads/image_32973233_83_620x757_2.webp'),
(179, 38, '/Coding School Final Project/uploads/image_32973233_83_620x757_3.jpg'),
(180, 39, '/Coding School Final Project/uploads/image_32932612_21_620x757_1.jpg'),
(181, 39, '/Coding School Final Project/uploads/image_32932612_21_620x757_2.jpg'),
(182, 39, '/Coding School Final Project/uploads/image_32932612_21_620x757_3.webp'),
(183, 39, '/Coding School Final Project/uploads/image_32932612_21_620x757_4.webp'),
(184, 39, '/Coding School Final Project/uploads/image_32932612_21_620x757_5.webp'),
(185, 39, '/Coding School Final Project/uploads/image_32932612_21_620x757_6 (1).webp'),
(186, 39, '/Coding School Final Project/uploads/image_32932612_21_620x757_6.webp'),
(187, 39, '/Coding School Final Project/uploads/image_32932612_21_620x757_7.webp'),
(188, 40, '/Coding School Final Project/uploads/image_32987062_80_620x757_0.webp'),
(189, 40, '/Coding School Final Project/uploads/image_32987062_80_620x757_1.webp'),
(190, 40, '/Coding School Final Project/uploads/image_32987062_80_620x757_2.webp'),
(191, 41, '/Coding School Final Project/uploads/image_32101435_10_620x757_0.webp'),
(192, 41, '/Coding School Final Project/uploads/image_32101435_10_620x757_1 - Copy.jpg'),
(193, 41, '/Coding School Final Project/uploads/image_32101435_10_620x757_2.webp'),
(194, 41, '/Coding School Final Project/uploads/image_32101435_10_620x757_3.webp'),
(195, 41, '/Coding School Final Project/uploads/image_32101435_10_620x757_4.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
