-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2023 at 07:13 AM
-- Server version: 10.3.37-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukojdkw_duko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(0, 'duko', '@password1'),
(1, 'duko', '@password1');

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `usd` float NOT NULL,
  `btc` float NOT NULL,
  `eth` float NOT NULL,
  `xrp` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `user_id`, `usd`, `btc`, `eth`, `xrp`) VALUES
(0, 1, 200, 1.2, 0.3, 44.6),
(0, 2, 4000000, 0, 0, 0),
(0, 3, 0, 0, 0, 0),
(0, 4, 0, 0, 0, 0),
(0, 5, 0, 0, 0, 0),
(0, 6, 0, 0, 0, 0),
(0, 7, 0, 0, 0, 0),
(0, 8, 0, 0, 0, 0),
(0, 9, 0, 0, 0, 0),
(0, 10, 0, 0, 0, 0),
(0, 11, 0, 0, 0, 0),
(0, 12, 0, 0, 0, 0),
(0, 13, 0, 0, 0, 0),
(0, 14, 0, 0, 0, 0),
(0, 15, 0, 0, 0, 0),
(0, 16, 0, 0, 0, 0),
(0, 17, 0, 0, 0, 0),
(0, 18, 0, 0, 0, 0),
(0, 19, 0, 0, 0, 0),
(0, 20, 0, 0, 0, 0),
(0, 21, 0, 0, 0, 0),
(0, 22, 0, 0, 0, 0),
(0, 23, 0, 0, 0, 0),
(0, 24, 0, 0, 0, 0),
(0, 25, 0, 0, 0, 0),
(0, 26, 0, 0, 0, 0),
(0, 27, 0, 0, 0, 0),
(0, 28, 0, 0, 0, 0),
(0, 29, 1235430, 0, 0, 0),
(0, 30, 150, 0, 0, 0),
(0, 31, 0, 0, 0, 0),
(0, 32, 0, 0, 0, 0),
(0, 33, 323, 15.6, 0, 0),
(0, 34, 500000, 20.5, 0, 0),
(0, 35, 3000000, 139.89, 2218.2, 8500420),
(0, 36, 3000000, 40.1, 0, 0),
(0, 37, 0, 0, 0, 0),
(0, 38, 3312000, 155.81, 2458.71, 9406690),
(0, 39, 3312000, 155.81, 2458.71, 9406690),
(0, 40, 0, 0, 0, 0),
(0, 41, 0, 0, 0, 0),
(0, 42, 0, 0, 0, 0),
(0, 43, 0, 0, 0, 0),
(0, 44, 0, 0, 0, 0),
(0, 45, 500000, 0, 0, 0),
(0, 46, 0, 0, 0, 0),
(0, 47, 2546210, 80, 0, 0),
(0, 48, 0, 0, 0, 0),
(0, 49, 0, 0, 0, 0),
(0, 50, 16506, 0.99, 0, 0),
(0, 51, 0, 0, 0, 0),
(0, 52, 323756, 15.27, 0, 0),
(0, 53, 0, 0, 0, 0),
(0, 54, 0, 0, 0, 0),
(0, 55, 51, 2.56, 0, 0),
(0, 56, 40933, 2.45, 0, 0),
(0, 57, 0, 0, 0, 0),
(0, 58, 0, 0, 0, 0),
(0, 59, 0, 0, 0, 0),
(0, 60, 1942500, 62.3, 484.33, 0),
(0, 61, 0, 0, 0, 0),
(0, 62, 73637, 4.4, 0, 0),
(0, 63, 0, 0, 0, 0),
(0, 64, 0, 0, 0, 0),
(0, 65, 0, 0, 0, 0),
(0, 66, 0, 0, 0, 0),
(0, 67, 0, 0, 0, 0),
(0, 68, 0, 0, 0, 0),
(0, 69, 0, 0, 0, 0),
(0, 70, 0, 0, 0, 0),
(0, 71, 0, 0, 0, 0),
(0, 72, 0, 0, 0, 0),
(0, 73, 0, 0, 0, 0),
(0, 74, 0, 0, 0, 0),
(0, 75, 0, 0, 0, 0),
(0, 76, 0, 0, 0, 0),
(0, 77, 0, 0, 0, 0),
(0, 78, 21164, 1.26, 0, 0),
(0, 79, 0, 0, 0, 0),
(0, 80, 0, 0, 0, 0),
(0, 81, 0, 0, 0, 0),
(0, 82, 0, 0, 0, 0),
(0, 83, 0, 0, 0, 0),
(0, 84, 0, 0, 0, 0),
(0, 85, 0, 0, 0, 0),
(0, 86, 0, 0, 0, 0),
(0, 87, 3670230, 216.23, 3050.31, 10126400),
(0, 88, 15600, 9.24, 0, 0),
(0, 89, 0, 0, 0, 0),
(0, 90, 0, 0, 0, 0),
(0, 91, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `usd` float NOT NULL,
  `btc` float NOT NULL,
  `eth` float NOT NULL,
  `xrp` float NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `earned` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `user_id`, `usd`, `btc`, `eth`, `xrp`, `active`, `earned`) VALUES
(1, 1, 897, 9.3, 67, 98, 1, 0),
(2, 1, 54, 9, 7, 43, 0, 1),
(3, 2, 0, 0, 0, 0, 1, 0),
(4, 2, 0, 0, 0, 0, 0, 1),
(5, 3, 0, 0, 0, 0, 1, 0),
(6, 3, 0, 0, 0, 0, 0, 1),
(7, 4, 0, 0, 0, 0, 1, 0),
(8, 4, 0, 0, 0, 0, 0, 1),
(9, 5, 0, 0, 0, 0, 1, 0),
(10, 5, 0, 0, 0, 0, 0, 1),
(11, 6, 0, 0, 0, 0, 1, 0),
(12, 6, 0, 0, 0, 0, 0, 1),
(13, 7, 0, 0, 0, 0, 1, 0),
(14, 7, 0, 0, 0, 0, 0, 1),
(15, 8, 0, 0, 0, 0, 1, 0),
(16, 8, 0, 0, 0, 0, 0, 1),
(17, 9, 0, 0, 0, 0, 1, 0),
(18, 9, 0, 0, 0, 0, 0, 1),
(19, 10, 0, 0, 0, 0, 1, 0),
(20, 10, 0, 0, 0, 0, 0, 1),
(21, 11, 0, 0, 0, 0, 1, 0),
(22, 11, 0, 0, 0, 0, 0, 1),
(23, 12, 0, 0, 0, 0, 1, 0),
(24, 12, 0, 0, 0, 0, 0, 1),
(25, 13, 0, 0, 0, 0, 1, 0),
(26, 13, 0, 0, 0, 0, 0, 1),
(27, 14, 0, 0, 0, 0, 1, 0),
(28, 14, 0, 0, 0, 0, 0, 1),
(29, 15, 0, 0, 0, 0, 1, 0),
(30, 15, 0, 0, 0, 0, 0, 1),
(31, 16, 0, 0, 0, 0, 1, 0),
(32, 16, 0, 0, 0, 0, 0, 1),
(33, 17, 0, 0, 0, 0, 1, 0),
(34, 17, 0, 0, 0, 0, 0, 1),
(35, 18, 0, 0, 0, 0, 1, 0),
(36, 18, 0, 0, 0, 0, 0, 1),
(37, 19, 0, 0, 0, 0, 1, 0),
(38, 19, 0, 0, 0, 0, 0, 1),
(39, 20, 0, 0, 0, 0, 1, 0),
(40, 20, 0, 0, 0, 0, 0, 1),
(41, 21, 0, 0, 0, 0, 1, 0),
(42, 21, 0, 0, 0, 0, 0, 1),
(43, 22, 0, 0, 0, 0, 1, 0),
(44, 22, 0, 0, 0, 0, 0, 1),
(45, 23, 0, 0, 0, 0, 1, 0),
(46, 23, 0, 0, 0, 0, 0, 1),
(47, 24, 0, 0, 0, 0, 1, 0),
(48, 24, 0, 0, 0, 0, 0, 1),
(49, 25, 0, 0, 0, 0, 1, 0),
(50, 25, 0, 0, 0, 0, 0, 1),
(51, 26, 0, 0, 0, 0, 1, 0),
(52, 26, 0, 0, 0, 0, 0, 1),
(53, 27, 0, 0, 0, 0, 1, 0),
(54, 27, 0, 0, 0, 0, 0, 1),
(55, 28, 0, 0, 0, 0, 1, 0),
(56, 28, 0, 0, 0, 0, 0, 1),
(57, 29, 240, 0, 0, 0, 1, 0),
(58, 29, 0, 0, 0, 0, 0, 1),
(59, 30, 0, 0, 0, 0, 1, 0),
(60, 30, 0, 0, 0, 0, 0, 1),
(61, 31, 0, 0, 0, 0, 1, 0),
(62, 31, 0, 0, 0, 0, 0, 1),
(63, 32, 0, 0, 0, 0, 1, 0),
(64, 32, 0, 0, 0, 0, 0, 1),
(65, 33, 0, 0, 0, 0, 1, 0),
(66, 33, 0, 0, 0, 0, 0, 1),
(67, 34, 0, 0, 0, 0, 1, 0),
(68, 34, 0, 0, 0, 0, 0, 1),
(69, 35, 0, 0, 0, 0, 1, 0),
(70, 35, 0, 0, 0, 0, 0, 1),
(71, 36, 0, 0, 0, 0, 1, 0),
(72, 36, 0, 0, 0, 0, 0, 1),
(73, 37, 0, 0, 0, 0, 1, 0),
(74, 37, 0, 0, 0, 0, 0, 1),
(75, 38, 0, 0, 0, 0, 1, 0),
(76, 38, 0, 0, 0, 0, 0, 1),
(77, 39, 0, 0, 0, 0, 1, 0),
(78, 39, 0, 0, 0, 0, 0, 1),
(79, 40, 0, 0, 0, 0, 1, 0),
(80, 40, 0, 0, 0, 0, 0, 1),
(81, 41, 0, 0, 0, 0, 1, 0),
(82, 41, 0, 0, 0, 0, 0, 1),
(83, 42, 0, 0, 0, 0, 1, 0),
(84, 42, 0, 0, 0, 0, 0, 1),
(85, 43, 0, 0, 0, 0, 1, 0),
(86, 43, 0, 0, 0, 0, 0, 1),
(87, 44, 0, 0, 0, 0, 1, 0),
(88, 44, 0, 0, 0, 0, 0, 1),
(89, 45, 0, 0, 0, 0, 1, 0),
(90, 45, 0, 0, 0, 0, 0, 1),
(91, 46, 0, 0, 0, 0, 1, 0),
(92, 46, 0, 0, 0, 0, 0, 1),
(93, 47, 0, 0, 0, 0, 1, 0),
(94, 47, 0, 0, 0, 0, 0, 1),
(95, 48, 0, 0, 0, 0, 1, 0),
(96, 48, 0, 0, 0, 0, 0, 1),
(97, 49, 0, 0, 0, 0, 1, 0),
(98, 49, 0, 0, 0, 0, 0, 1),
(99, 50, 0, 0, 0, 0, 1, 0),
(100, 50, 0, 0, 0, 0, 0, 1),
(101, 51, 0, 0, 0, 0, 1, 0),
(102, 51, 0, 0, 0, 0, 0, 1),
(103, 52, 0, 0, 0, 0, 1, 0),
(104, 52, 0, 0, 0, 0, 0, 1),
(105, 53, 0, 0, 0, 0, 1, 0),
(106, 53, 0, 0, 0, 0, 0, 1),
(107, 54, 0, 0, 0, 0, 1, 0),
(108, 54, 0, 0, 0, 0, 0, 1),
(109, 55, 0, 0, 0, 0, 1, 0),
(110, 55, 0, 0, 0, 0, 0, 1),
(111, 56, 0, 0, 0, 0, 1, 0),
(112, 56, 0, 0, 0, 0, 0, 1),
(113, 57, 0, 0, 0, 0, 1, 0),
(114, 57, 0, 0, 0, 0, 0, 1),
(115, 58, 0, 0, 0, 0, 1, 0),
(116, 58, 0, 0, 0, 0, 0, 1),
(117, 59, 0, 0, 0, 0, 1, 0),
(118, 59, 0, 0, 0, 0, 0, 1),
(119, 60, 0, 0, 0, 0, 1, 0),
(120, 60, 0, 0, 0, 0, 0, 1),
(121, 61, 0, 0, 0, 0, 1, 0),
(122, 61, 0, 0, 0, 0, 0, 1),
(123, 62, 0, 0, 0, 0, 1, 0),
(124, 62, 0, 0, 0, 0, 0, 1),
(125, 63, 0, 0, 0, 0, 1, 0),
(126, 63, 0, 0, 0, 0, 0, 1),
(127, 64, 0, 0, 0, 0, 1, 0),
(128, 64, 0, 0, 0, 0, 0, 1),
(129, 65, 0, 0, 0, 0, 1, 0),
(130, 65, 0, 0, 0, 0, 0, 1),
(131, 66, 0, 0, 0, 0, 1, 0),
(132, 66, 0, 0, 0, 0, 0, 1),
(133, 67, 0, 0, 0, 0, 1, 0),
(134, 67, 0, 0, 0, 0, 0, 1),
(135, 68, 0, 0, 0, 0, 1, 0),
(136, 68, 0, 0, 0, 0, 0, 1),
(137, 69, 0, 0, 0, 0, 1, 0),
(138, 69, 0, 0, 0, 0, 0, 1),
(139, 70, 0, 0, 0, 0, 1, 0),
(140, 70, 0, 0, 0, 0, 0, 1),
(141, 71, 0, 0, 0, 0, 1, 0),
(142, 71, 0, 0, 0, 0, 0, 1),
(143, 72, 0, 0, 0, 0, 1, 0),
(144, 72, 0, 0, 0, 0, 0, 1),
(145, 73, 0, 0, 0, 0, 1, 0),
(146, 73, 0, 0, 0, 0, 0, 1),
(147, 74, 0, 0, 0, 0, 1, 0),
(148, 74, 0, 0, 0, 0, 0, 1),
(149, 75, 0, 0, 0, 0, 1, 0),
(150, 75, 0, 0, 0, 0, 0, 1),
(151, 76, 0, 0, 0, 0, 1, 0),
(152, 76, 0, 0, 0, 0, 0, 1),
(153, 77, 0, 0, 0, 0, 1, 0),
(154, 77, 0, 0, 0, 0, 0, 1),
(155, 78, 0, 0, 0, 0, 1, 0),
(156, 78, 0, 0, 0, 0, 0, 1),
(157, 79, 0, 0, 0, 0, 1, 0),
(158, 79, 0, 0, 0, 0, 0, 1),
(159, 80, 0, 0, 0, 0, 1, 0),
(160, 80, 0, 0, 0, 0, 0, 1),
(161, 81, 0, 0, 0, 0, 1, 0),
(162, 81, 0, 0, 0, 0, 0, 1),
(163, 82, 0, 0, 0, 0, 1, 0),
(164, 82, 0, 0, 0, 0, 0, 1),
(165, 83, 0, 0, 0, 0, 1, 0),
(166, 83, 0, 0, 0, 0, 0, 1),
(167, 84, 0, 0, 0, 0, 1, 0),
(168, 84, 0, 0, 0, 0, 0, 1),
(169, 85, 0, 0, 0, 0, 1, 0),
(170, 85, 0, 0, 0, 0, 0, 1),
(171, 86, 0, 0, 0, 0, 1, 0),
(172, 86, 0, 0, 0, 0, 0, 1),
(173, 87, 0, 0, 0, 0, 1, 0),
(174, 87, 0, 0, 0, 0, 0, 1),
(175, 88, 0, 0, 0, 0, 1, 0),
(176, 88, 0, 0, 0, 0, 0, 1),
(177, 89, 0, 0, 0, 0, 1, 0),
(178, 89, 0, 0, 0, 0, 0, 1),
(179, 90, 0, 0, 0, 0, 1, 0),
(180, 90, 0, 0, 0, 0, 0, 1),
(181, 91, 0, 0, 0, 0, 1, 0),
(182, 91, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `inactive` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `user_id`, `active`, `inactive`) VALUES
(1, 1, 30, 2),
(2, 2, 0, 0),
(3, 3, 0, 0),
(4, 4, 0, 0),
(5, 5, 0, 0),
(6, 6, 0, 0),
(7, 7, 0, 0),
(8, 8, 0, 0),
(9, 9, 0, 0),
(10, 10, 0, 0),
(11, 11, 0, 0),
(12, 12, 0, 0),
(13, 13, 0, 0),
(14, 14, 0, 0),
(15, 15, 0, 0),
(16, 16, 0, 0),
(17, 17, 0, 0),
(18, 18, 0, 0),
(19, 19, 0, 0),
(20, 20, 0, 0),
(21, 21, 0, 0),
(22, 22, 0, 0),
(23, 23, 0, 0),
(24, 24, 0, 0),
(25, 25, 0, 0),
(26, 26, 0, 0),
(27, 27, 0, 0),
(28, 28, 0, 0),
(29, 29, 100, 0),
(30, 30, 0, 0),
(31, 31, 0, 0),
(32, 32, 0, 0),
(33, 33, 0, 0),
(34, 34, 100, 15),
(35, 35, 80, 12),
(36, 36, 200, 20),
(37, 37, 0, 0),
(38, 38, 100, 20),
(39, 39, 100, 20),
(40, 40, 200, 50),
(41, 41, 0, 0),
(42, 42, 0, 0),
(43, 43, 0, 0),
(44, 44, 0, 0),
(45, 45, 0, 0),
(46, 46, 0, 0),
(47, 47, 0, 0),
(48, 48, 0, 0),
(49, 49, 0, 0),
(50, 50, 232, 0),
(51, 51, 0, 0),
(52, 52, 0, 0),
(53, 53, 0, 0),
(54, 54, 0, 0),
(55, 55, 0, 0),
(56, 56, 230, 20),
(57, 57, 0, 0),
(58, 58, 0, 0),
(59, 59, 0, 0),
(60, 60, 0, 0),
(61, 61, 0, 0),
(62, 62, 209, 59),
(63, 63, 0, 0),
(64, 64, 0, 0),
(65, 65, 0, 0),
(66, 66, 0, 0),
(67, 67, 0, 0),
(68, 68, 0, 0),
(69, 69, 0, 0),
(70, 70, 0, 0),
(71, 71, 0, 0),
(72, 72, 0, 0),
(73, 73, 0, 0),
(74, 74, 0, 0),
(75, 75, 0, 0),
(76, 76, 0, 0),
(77, 77, 0, 0),
(78, 78, 220, 15),
(79, 79, 0, 0),
(80, 80, 0, 0),
(81, 81, 0, 0),
(82, 82, 0, 0),
(83, 83, 0, 0),
(84, 84, 0, 0),
(85, 85, 0, 0),
(86, 86, 0, 0),
(87, 87, 0, 0),
(88, 88, 0, 0),
(89, 89, 0, 0),
(90, 90, 0, 0),
(91, 91, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `usd` float NOT NULL,
  `btc` float NOT NULL,
  `eth` float NOT NULL,
  `xrp` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payouts`
--

INSERT INTO `payouts` (`id`, `user_id`, `usd`, `btc`, `eth`, `xrp`) VALUES
(1, 1, 20, 0.56, 2.5, 9.6),
(2, 2, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 0),
(4, 4, 0, 0, 0, 0),
(5, 5, 0, 0, 0, 0),
(6, 6, 0, 0, 0, 0),
(7, 7, 0, 0, 0, 0),
(8, 8, 0, 0, 0, 0),
(9, 9, 0, 0, 0, 0),
(10, 10, 0, 0, 0, 0),
(11, 11, 0, 0, 0, 0),
(12, 12, 0, 0, 0, 0),
(13, 13, 0, 0, 0, 0),
(14, 14, 0, 0, 0, 0),
(15, 15, 0, 0, 0, 0),
(16, 16, 0, 0, 0, 0),
(17, 17, 0, 0, 0, 0),
(18, 18, 0, 0, 0, 0),
(19, 19, 0, 0, 0, 0),
(20, 20, 0, 0, 0, 0),
(21, 21, 0, 0, 0, 0),
(22, 22, 0, 0, 0, 0),
(23, 23, 0, 0, 0, 0),
(24, 24, 0, 0, 0, 0),
(25, 25, 0, 0, 0, 0),
(26, 26, 0, 0, 0, 0),
(27, 27, 0, 0, 0, 0),
(28, 28, 0, 0, 0, 0),
(29, 29, 0, 0, 0, 0),
(30, 30, 0, 0, 0, 0),
(31, 31, 0, 0, 0, 0),
(32, 32, 0, 0, 0, 0),
(33, 33, 0, 0, 0, 0),
(34, 34, 0, 0, 0, 0),
(35, 35, 800000, 37.32, 590.75, 2266780),
(36, 36, 0, 0, 0, 0),
(37, 37, 0, 0, 0, 0),
(38, 38, 750000, 35.23, 554.8, 2124520),
(39, 39, 750000, 35.23, 554.8, 2124520),
(40, 40, 0, 0, 0, 0),
(41, 41, 0, 0, 0, 0),
(42, 42, 0, 0, 0, 0),
(43, 43, 0, 0, 0, 0),
(44, 44, 0, 0, 0, 0),
(45, 45, 0, 0, 0, 0),
(46, 46, 0, 0, 0, 0),
(47, 47, 0, 0, 0, 0),
(48, 48, 0, 0, 0, 0),
(49, 49, 0, 0, 0, 0),
(50, 50, 0, 0, 0, 0),
(51, 51, 0, 0, 0, 0),
(52, 52, 0, 0, 0, 0),
(53, 53, 0, 0, 0, 0),
(54, 54, 0, 0, 0, 0),
(55, 55, 0, 0, 0, 0),
(56, 56, 0, 0, 0, 0),
(57, 57, 0, 0, 0, 0),
(58, 58, 0, 0, 0, 0),
(59, 59, 0, 0, 0, 0),
(60, 60, 0, 25, 0, 0),
(61, 61, 0, 0, 0, 0),
(62, 62, 0, 0, 0, 0),
(63, 63, 0, 0, 0, 0),
(64, 64, 0, 0, 0, 0),
(65, 65, 0, 0, 0, 0),
(66, 66, 0, 0, 0, 0),
(67, 67, 0, 0, 0, 0),
(68, 68, 0, 0, 0, 0),
(69, 69, 0, 0, 0, 0),
(70, 70, 0, 0, 0, 0),
(71, 71, 0, 0, 0, 0),
(72, 72, 0, 0, 0, 0),
(73, 73, 0, 0, 0, 0),
(74, 74, 0, 0, 0, 0),
(75, 75, 0, 0, 0, 0),
(76, 76, 0, 0, 0, 0),
(77, 77, 0, 0, 0, 0),
(78, 78, 0, 0, 0, 0),
(79, 79, 0, 0, 0, 0),
(80, 80, 0, 0, 0, 0),
(81, 81, 0, 0, 0, 0),
(82, 82, 0, 0, 0, 0),
(83, 83, 0, 0, 0, 0),
(84, 84, 0, 0, 0, 0),
(85, 85, 0, 0, 0, 0),
(86, 86, 0, 0, 0, 0),
(87, 87, 0, 0, 0, 0),
(88, 88, 0, 0, 0, 0),
(89, 89, 0, 0, 0, 0),
(90, 90, 0, 0, 0, 0),
(91, 91, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `referral_earning`
--

CREATE TABLE `referral_earning` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `usd` float NOT NULL,
  `btc` float NOT NULL,
  `eth` float NOT NULL,
  `xrp` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `referral_earning`
--

INSERT INTO `referral_earning` (`id`, `user_id`, `usd`, `btc`, `eth`, `xrp`) VALUES
(1, 1, 460, 0.876, 0.76, 36),
(2, 2, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 0),
(4, 4, 0, 0, 0, 0),
(5, 5, 0, 0, 0, 0),
(6, 6, 0, 0, 0, 0),
(7, 7, 0, 0, 0, 0),
(8, 8, 0, 0, 0, 0),
(9, 9, 0, 0, 0, 0),
(10, 10, 0, 0, 0, 0),
(11, 11, 0, 0, 0, 0),
(12, 12, 0, 0, 0, 0),
(13, 13, 0, 0, 0, 0),
(14, 14, 0, 0, 0, 0),
(15, 15, 0, 0, 0, 0),
(16, 16, 0, 0, 0, 0),
(17, 17, 0, 0, 0, 0),
(18, 18, 0, 0, 0, 0),
(19, 19, 0, 0, 0, 0),
(20, 20, 0, 0, 0, 0),
(21, 21, 0, 0, 0, 0),
(22, 22, 0, 0, 0, 0),
(23, 23, 0, 0, 0, 0),
(24, 24, 0, 0, 0, 0),
(25, 25, 0, 0, 0, 0),
(26, 26, 0, 0, 0, 0),
(27, 27, 0, 0, 0, 0),
(28, 28, 0, 0, 0, 0),
(29, 29, 0, 0, 0, 0),
(30, 30, 0, 0, 0, 0),
(31, 31, 0, 0, 0, 0),
(32, 32, 0, 0, 0, 0),
(33, 33, 0, 0, 0, 0),
(34, 34, 0, 0, 0, 0),
(35, 35, 50000, 2.33, 0, 0),
(36, 36, 0, 0, 0, 0),
(37, 37, 0, 0, 0, 0),
(38, 38, 30000, 1.41, 22.22, 84834.2),
(39, 39, 30000, 1.41, 22.22, 84834.2),
(40, 40, 0, 0, 0, 0),
(41, 41, 0, 0, 0, 0),
(42, 42, 0, 0, 0, 0),
(43, 43, 0, 0, 0, 0),
(44, 44, 0, 0, 0, 0),
(45, 45, 0, 0, 0, 0),
(46, 46, 0, 0, 0, 0),
(47, 47, 0, 0, 0, 0),
(48, 48, 0, 0, 0, 0),
(49, 49, 0, 0, 0, 0),
(50, 50, 0, 0, 0, 0),
(51, 51, 0, 0, 0, 0),
(52, 52, 0, 0, 0, 0),
(53, 53, 0, 0, 0, 0),
(54, 54, 0, 0, 0, 0),
(55, 55, 0, 0, 0, 0),
(56, 56, 0, 0, 0, 0),
(57, 57, 0, 0, 0, 0),
(58, 58, 0, 0, 0, 0),
(59, 59, 0, 0, 0, 0),
(60, 60, 0, 0, 0, 0),
(61, 61, 0, 0, 0, 0),
(62, 62, 0, 0, 0, 0),
(63, 63, 0, 0, 0, 0),
(64, 64, 0, 0, 0, 0),
(65, 65, 0, 0, 0, 0),
(66, 66, 0, 0, 0, 0),
(67, 67, 0, 0, 0, 0),
(68, 68, 0, 0, 0, 0),
(69, 69, 0, 0, 0, 0),
(70, 70, 0, 0, 0, 0),
(71, 71, 0, 0, 0, 0),
(72, 72, 0, 0, 0, 0),
(73, 73, 0, 0, 0, 0),
(74, 74, 0, 0, 0, 0),
(75, 75, 0, 0, 0, 0),
(76, 76, 0, 0, 0, 0),
(77, 77, 0, 0, 0, 0),
(78, 78, 0, 0, 0, 0),
(79, 79, 0, 0, 0, 0),
(80, 80, 0, 0, 0, 0),
(81, 81, 0, 0, 0, 0),
(82, 82, 0, 0, 0, 0),
(83, 83, 0, 0, 0, 0),
(84, 84, 0, 0, 0, 0),
(85, 85, 0, 0, 0, 0),
(86, 86, 0, 0, 0, 0),
(87, 87, 0, 0, 0, 0),
(88, 88, 0, 0, 0, 0),
(89, 89, 0, 0, 0, 0),
(90, 90, 0, 0, 0, 0),
(91, 91, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created_at`) VALUES
(1, '6wIy44wBb6PZcl56rC4eYbsi', 1, '2022-07-04'),
(2, 'v6r3qEgTVftclZHlpIKYuUBO', 2, '2022-07-04'),
(3, 'VOGE7epD1o2azjbVJz7FqjBa', 3, '2022-07-04'),
(4, 'LnekX7Umh0XjxmEVWkQDDiEI', 4, '2022-07-04'),
(5, 'udaBGcIYbjO6ZAGvti2SOZbW', 5, '2022-07-05'),
(6, 'ZTVtwyBv4DlcQiJwPkp1jXWi', 6, '2022-07-05'),
(7, 'y6wHca9K2goJL63T4OUxpL84', 7, '2022-07-05'),
(8, 'BERkcE80QCrp0f9OdwlI1OaU', 8, '2022-07-05'),
(9, '5I3gBzOGY9uirw4cXa9n0O5t', 9, '2022-07-05'),
(10, 'XFEPmfNYIIT4iPbadshohM8O', 10, '2022-07-06'),
(11, 'q2hAb4qMVUjLci5upySzqhXj', 11, '2022-07-06'),
(12, 'sXPQSXdDAnLTP8aPxhEztwFL', 12, '2022-07-06'),
(13, 'QsRuHTMy0VuV7PUDxz2cjsNp', 13, '2022-07-06'),
(14, 'irVbANGdjsgLB767SI2phy3u', 14, '2022-07-06'),
(15, '6bBHUjtVCABYXMibE1PfgHb5', 15, '2022-07-06'),
(16, 'ALYDPX7XoLNs8Ui4AOSXzVtM', 16, '2022-07-07'),
(17, 'fy7G33FheH0Fp3edKdXcx0m5', 17, '2022-07-07'),
(18, 'A7HcwUindMpAcOTorHEZiu3C', 18, '2022-07-08'),
(19, 'MILHWyXasrso6xftRVSPsFFq', 19, '2022-07-08'),
(20, 'v27uodAM7p8W4SgynA2VUwfF', 20, '2022-07-08'),
(21, 'OghRaE01LJoBnaX2cjfAKhoB', 21, '2022-07-08'),
(22, 'FKdykphJPM4rNDGLDEH94gV3', 22, '2022-07-08'),
(23, '1bkutzBAOswSyTPgPiHJJ3JQ', 23, '2022-07-08'),
(24, 'm4WX3nAHalokfG05R1JSjxa3', 24, '2022-07-08'),
(25, 'MiowKVJKmiONI9FBkj4pPPfH', 25, '2022-07-08'),
(26, 'jJOcQSEN15e8ENV8GLR1AZGG', 26, '2022-07-08'),
(27, 'HFZpljQgrhxgufxeODbxXk7l', 27, '2022-07-08'),
(28, 's0iWDV8SODA3JpLRTThJsGox', 28, '2022-07-08'),
(29, 'BHWFt00YGFVSHUfk7nlYAkj3', 29, '2022-07-08'),
(30, 'QaxUrxQxvG2skP6OwToKSNJ8', 30, '2022-07-08'),
(31, '7rgwGa5dTQuWqolQGYghBtJw', 31, '2022-07-08'),
(32, 'qk42wL4vySLDTbMAdsRcjCup', 32, '2022-07-09'),
(33, 'MVtQAJv3s9jSos2A3tfZR7oo', 33, '2022-07-10'),
(34, 'onSBsm5c3LpzJmkfViY7OyXw', 34, '2022-07-11'),
(35, 'g7n0HgWvIocn2IV93GUs2MKR', 35, '2022-07-12'),
(36, 'MYra7U7gHiHKcUISGV81UNj0', 36, '2022-07-13'),
(37, 'ODj7HLyg3RA1eCBL6ZPjQDdR', 37, '2022-07-14'),
(38, 'IGIQBSvonCUy2hM1rCIkAawT', 38, '2022-07-16'),
(39, 'SUIdR4y5hhIMtt5zS4gp8oEz', 39, '2022-07-16'),
(40, 'QBU0Reua9yAWILyd9imxXHfn', 40, '2022-07-16'),
(41, 'wedNNWlQjAet8eME4hjViff9', 41, '2022-07-20'),
(42, 'pmRaV0x3LLRusK22B4o9CEW3', 42, '2022-07-27'),
(43, 'FV5Dw6CqwV6MlcUgaL5MHh8h', 43, '2022-07-28'),
(44, 'HxDnqICxPpCV8bG0ASz6z6VV', 44, '2022-07-29'),
(45, 'vf8XB2jQ7rLLEGy2A6De8PcJ', 45, '2022-08-03'),
(46, 'vwjUCycEx9ptLAeaSAJ13ZFQ', 46, '2022-08-05'),
(47, 'KdDSmQbQ3fgAZueoZVLAb8Ms', 47, '2022-08-08'),
(48, 'ubJxXcoTbzSjFFjLb210hlFZ', 48, '2022-08-15'),
(49, 'gQ8SuuYq9rUnkxff7hZG5DX5', 49, '2022-08-21'),
(50, '0dA0o8n2Q4ESFkxxaDQdGOfN', 50, '2022-08-22'),
(51, 'z3OYTRSleS8SeQZukUlWFQUG', 51, '2022-08-22'),
(52, '2sL5vM6Ebnhp0F3yi62pxtzi', 52, '2022-08-22'),
(53, '5ZdBos9hUHWIbn7v20pehLHK', 53, '2022-08-24'),
(54, 'ZLUXNjyG2RcuWtAY8hX1z0wh', 54, '2022-08-26'),
(55, 'OIkKJluOCI1mB3jSeMgvgAJ1', 55, '2022-09-01'),
(56, 'JaQaeXonCY2BbXsaavnx8Kox', 56, '2022-09-01'),
(57, '5F9OfHtTodpTTnEa48i9EkGQ', 57, '2022-09-02'),
(58, '02QLv9HDQCM1HvOtCujVC7lp', 58, '2022-09-07'),
(59, 'LfD6tm8CZrQjI9VX1EjrSx1G', 59, '2022-09-14'),
(60, 'JWxc2OXh26A10tDswqYgNcez', 60, '2022-09-16'),
(61, 'lQzsbNbby7Pcpp84DBSEHkJo', 61, '2022-09-20'),
(62, 'sLJrFthKytrjNUdfU5ZdZGKn', 62, '2022-09-25'),
(63, 'kPs7ijSWM9T4mMvd74gE2bN0', 63, '2022-10-01'),
(64, 'gYocXxVYtCHkKMqmtHjg6sF4', 64, '2022-10-07'),
(65, 'jlJCWXXjqHV8cgFY0oSXLZqs', 65, '2022-10-07'),
(66, 'hKwkMLbDp8dDL521pUPZWKEr', 66, '2022-10-07'),
(67, '53JApAXTq8nmBbgKALpOtz61', 67, '2022-10-08'),
(68, 'LsjucUDcpxhYBp97KK3P8bHo', 68, '2022-10-09'),
(69, 'P1m8OVmskwzyJNNJuo5qNXU0', 69, '2022-10-09'),
(70, '7G6tUp9F3MFe4zLEeRNTVwMz', 70, '2022-10-13'),
(71, '7nWoPSJ1bcQ8FP8fp5HPrc6g', 71, '2022-10-14'),
(72, 'LDaGqyikZFIUJf3AkwDLGReW', 72, '2022-10-17'),
(73, 'lyr7EFvyDO9juKYcZ2MLEZVo', 73, '2022-10-19'),
(74, 'QBvpkfLGQtVYQeR1PwKFX8IM', 74, '2022-10-19'),
(75, '904ZAfchVrLaHpqOXkQAAIst', 75, '2022-10-19'),
(76, '4JK8ZjaoVLp0mS8Mxu1uLeFl', 76, '2022-10-25'),
(77, 'Y8Ppqn6vfUH73Tpb0S29EL9H', 77, '2022-10-28'),
(78, 'xYAKmt9uCvw66RbXdbx57ttm', 78, '2022-11-01'),
(79, 'qGMuKqZB8Yii8nOUPjJbri8W', 79, '2022-11-01'),
(80, 'lfJDlS0Es3VZNZPpzcMODkre', 80, '2022-11-05'),
(81, 'MmQr7mOkobfVlhFZkjp5jiVf', 81, '2022-11-07'),
(82, 'GXhHjC9Ev6OlV5ryDcJodG6E', 82, '2022-11-10'),
(83, '4AJo17HrGSMegyBdYUkrYWGC', 83, '2022-11-15'),
(84, 'jIIIyIDRcnspaJ4K2Z8Y3avt', 84, '2022-11-18'),
(85, 'mTzdnNn8XMxkZpAvroGuvYiA', 85, '2022-12-11'),
(86, '3rGqNwbc0MS3cPphhA9buDnp', 86, '2022-12-15'),
(87, '93kN8ZEXjyXqXNaJI58FQjoK', 87, '2022-12-16'),
(88, 'DnRAb42fjARCAWWvzZWe8mE7', 88, '2022-12-16'),
(89, 'p519mLGigdtmggtxHFnN3imr', 89, '2022-12-29'),
(90, 'GP6woPLaU9u2IkbLyBvSinvi', 90, '2023-01-05'),
(91, 'Ggv47vgw98yScFkQQw2kiBMn', 91, '2023-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `plan` varchar(255) NOT NULL DEFAULT 'None',
  `month_profit` int(11) NOT NULL DEFAULT 0,
  `year_profit` int(11) NOT NULL DEFAULT 0,
  `country` varchar(255) NOT NULL,
  `isVerified` tinyint(1) NOT NULL DEFAULT 0,
  `referal_count` int(11) NOT NULL DEFAULT 0,
  `referred_id` int(11) NOT NULL DEFAULT 0,
  `walletType` varchar(255) DEFAULT NULL,
  `walletAddress` varchar(255) DEFAULT NULL,
  `joined_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `balance`, `plan`, `month_profit`, `year_profit`, `country`, `isVerified`, `referal_count`, `referred_id`, `walletType`, `walletAddress`, `joined_date`) VALUES
(1, 'dukofinance', 'dukofinance@dukofinance.com', '$2y$10$kpgUnk.FlVcLMttbXgczxunfwBt0I1GXVsd76Z7MVjpjgPszm8Dpa', 500, 'Agriculture', 3, 10, 'Afghanistan', 1, 2, 0, 'eth', '0xjksihjwsugwvdutg3vv7yui282ud', '2022-07-04'),
(2, 'nexydb', 'fidelisokeke2@gmail.com', '$2y$10$EeHKEN5KVF3VHGAhbHNAXOOsrzshHBcPsrmp2uW5cT7e4lzu6ZB92', 40000, 'Cannabis', 0, 0, 'Andorra', 0, 0, 0, NULL, NULL, '2022-07-04'),
(3, 'user1', 'user1@email.com', '$2y$10$P64RFTqu4.TfaOclbY/r6uYfkLR6Is2OyQIb8EIhLt/fKiGw3OPqG', 0, 'None', 0, 0, 'Cambodia', 0, 0, 1, NULL, NULL, '2022-07-05'),
(4, 'bobbyayo', 'bobbyayo30@gmail.com', '$2y$10$PHuKz1sHfi46w6Y5SxxsouElIS9FzMWTfSeOmagKG1yZe6bJiFCF6', 0, 'None', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-07-05'),
(5, 'nexydbb', 'dbtecch@gmail.com', '$2y$10$dgKIsfXBMiB.DuTaqzyb0eWerQtI/82WE976XhvKAgF8R9YCw6yUm', 0, 'Oil and Gas', 0, 0, 'Nigeria', 1, 0, 0, NULL, NULL, '2022-07-05'),
(6, 'bobbyayo1', 'bobbyayo19@gmail.com', '$2y$10$BE1Vdm7LExfbJbhHkZR6pOclg/XYs6gKnpeKjOVPtWhfDetBdAzy6', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-07-05'),
(7, 'lex', 'lexdavid53@gmail.clm', '$2y$10$OH2aGQW1xyZ.Dv.0E0YRC.uQoFyaw7qh6KF3I7VH0wy3rHfIaYsty', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-07-06'),
(8, 'ellie', 'elliemcfarlane47@gmail.com', '$2y$10$6NI.Y0fkD.1GQ6S4VnDBn.V29GaZT9l0hCIbv1R8eGcjT74d2.lRy', 0, 'None', 0, 0, 'Nigeria', 0, 0, 0, NULL, NULL, '2022-07-06'),
(9, 'db3', 'midkiffj403@gmail.com', '$2y$10$8K2thqWEB3QOrLJ32yJrAuOZUFQ4an5cdtVvb6RWJUdrsQeA5iAB6', 0, 'None', 0, 0, 'Belarus', 0, 0, 0, NULL, NULL, '2022-07-06'),
(10, 'testuser', 'signup@dukofinance.com', '$2y$10$6ksus.fmXxxVqTtiPWPGWuim0AurnkrkBKGQMzpMhYEzeOqHlzmRy', 0, 'None', 0, 0, 'Burkina Faso', 0, 0, 1, NULL, NULL, '2022-07-06'),
(11, 'anotheruser', 'anotheruser@email.com', '$2y$10$EfGv94fHGbJAwVS7T1Bz9eX2CNfqhiDwftWIzm3ffGkvBYQExv0Cq', 0, 'None', 0, 0, 'Namibia', 0, 0, 0, NULL, NULL, '2022-07-06'),
(12, 'john470', 'johnhawry470@gmail.com', '$2y$10$9AFcOfnYQUTUR6zhyaUCv.pz.Bv/e5pBmNhNz.uBJVTG/Y7ZTEE1G', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-07-06'),
(13, 'db33', 'dioneruprechtlmo98@gmail.com', '$2y$10$cQ.CMiS5pSjwLxb7dR3CBeLmrMDR1cOQ3l..xnOiSuoAAi7raI.we', 0, 'None', 0, 0, 'Afghanistan', 0, 0, 0, NULL, NULL, '2022-07-06'),
(14, 'bobbyayo2', 'jeanettesnapemail@gmail.com', '$2y$10$XCibmiXymtQJhAEsQmupm.niJM.KNNDl1Nfi3tCQyGugf1ql/MRPu', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-07-06'),
(15, 'rob', 'robertomichaelmail@gmail.com', '$2y$10$LmBi55dwUXFzJrz7nyVXZuDAuV9p.F0Qrnetd80DybgFKJmElO.rm', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-07-06'),
(52, 'graysonayd', 'graysonayden1982@outlook.com', '$2y$10$AQ2AS4vuAKIfyVKYU5XHH.SzNs46NveuzOIuHThTuIY9l8N3obU.W', 0, 'Cannabis', 0, 0, 'United Kingdom', 0, 0, 0, 'btc', 'Cvhhvcdsayjkopitrewagvvvvty', '2022-08-22'),
(17, 'nexydibad', 'ameliaj360@outlook.com', '$2y$10$yfIVJ7NTJj6rU451MWYLxudWQMPChYauNcoYVQiXhplprwQzQPUy6', 0, 'None', 0, 0, 'Albania', 0, 0, 0, NULL, NULL, '2022-07-07'),
(33, 'herbert', 'herbertrafael70@gmail.com', '$2y$10$aJTrFIwBNEk98t89PVuR.OD.BSpLHX2cXTrKLqjTg8.i2mR9rEByu', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-07-10'),
(28, 'walk', 'walkercamarenoqvh70@gmail.com', '$2y$10$l07Fjg4M6VlYD4XlcBJVWeDzNLPMFLe.NAAfk5zL81lWXWfu1Ma96', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-07-08'),
(29, 'rob1', 'dukotoken@gmail.com', '$2y$10$qG6ZFsgspVszmI6XbWrjhO9oZ/KZevvblYJhQOo2j5/OntIwIE6Oy', 366700, 'None', 30480, 366700, 'Albania', 1, 0, 0, NULL, NULL, '2022-07-08'),
(30, 'db30', 'okekechibuzz@outlook.com', '$2y$10$4Vn9mYIUuCJaetZK7VNW4.iLu3pvUPEnviLA2KOp13OyZUoXjMyaG', 120000, 'Retirement and insurance', 0, 0, 'Albania', 1, 0, 0, NULL, NULL, '2022-07-08'),
(31, 'nilsen', 'nilsendouglas67@gmail.com', '$2y$10$Dtcl6J7CAtgkHoUTioIY8ulVgRwhV48r71ODutUEym1oSXOm6SPZO', 0, 'None', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-07-08'),
(32, 'ric14', 'richardopuiyo@gmail.com', '$2y$10$WlTQWp.eegKwR13lPG6Q8uZ01d9zkRZBKZOjHlLOK/Cgk4NvrDS6.', 0, 'None', 0, 0, 'Nigeria', 1, 0, 0, NULL, NULL, '2022-07-09'),
(34, 'irenesteve', 'irenegeorgesteve@gmail.com', '$2y$10$CMWlN2gevF8eMk7/EoA1Te1G2UH1YVTXiwy963zlaihDRt6TtIb6G', 500000, 'None', 10000, 50000, 'United Kingdom', 0, 13, 0, NULL, NULL, '2022-07-12'),
(35, 'regina gail brown', 'reginabrownz123@gmail.com', '$2y$10$wFrfVip4RYgvUDNH7/ER/.u.z8l0aodw7aMUQXD.H.h366nq.IpzW', 3000000, 'Cryptocurrency', 30000, 80000, 'United States', 1, 0, 0, NULL, NULL, '2022-07-12'),
(36, 'robertomichael', 'robertomichaelgrace@gmail.com', '$2y$10$5mPm09vR.a3H1yKhPzGXuOaBKr3fbaeQWKoKVTw69abC6tWn8lZvO', 3000000, 'Real Estate', 50000, 600000, 'United States', 1, 0, 0, NULL, NULL, '2022-07-13'),
(37, 'waldemar paz da silva', 'waldemarpazneto@gmail.com', '$2y$10$ed4V6AyHDTPJhI7XZnG/PuKyd1Fgiq0gpyAzeuvZzrsqmuRbZUUHe', 0, 'Foreign Exchange', 0, 0, 'Brazil', 0, 0, 0, NULL, NULL, '2022-07-14'),
(38, 'suzan_lever888', 'suzanlever@gmail.com', '$2y$10$ttc.TE7YUhHTeMbL/dy.zuza75bBcB3exEotDmGQX3/IU4837MXh2', 3312000, 'None', 50000, 60000, 'United Kingdom', 1, 0, 0, 'btc', '1EdBxRdoTi4BnjjXaTBSy6fjdY7LqK58nT', '2022-07-16'),
(39, 'ryan550', 'charlesgarin089@gmail.com', '$2y$10$wP60jDXuyfZpXZnibM6ekO6mytV3agILPbO8arWcquUANM/4tUDqu', 3312000, 'None', 50000, 600000, 'United States', 1, 0, 0, NULL, NULL, '2022-07-16'),
(40, 'fleezeal', 'fleezeal@mailinator.com', '$2y$10$XoRBW.6SZXhZMdaQaqII7u/EHzrkmoQwJpccQlC8CCRTVdNwqiFp6', 0, 'Gold', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-07-17'),
(41, 'j3remy', 'j3remyspence@gmail.com', '$2y$10$EveijanYGDN/D.NW76jOeejesJhaaqKTeGIzx4YgWjgN7MsZuBFWm', 0, 'None', 0, 0, 'Nigeria', 0, 7, 0, NULL, NULL, '2022-07-20'),
(42, 'fabianharry0', 'fabianharry0@gmail.com', '$2y$10$OpOBkGpRfUsk3mA8xm2ys.3ikBDVPSEz8VBHmvawL1NiTMeYQv3e.', 0, 'Oil and Gas', 0, 0, 'Angola', 0, 0, 0, NULL, NULL, '2022-07-27'),
(43, 'rivera', 'riverahills1@gmail.com', '$2y$10$GVgAqvsBvgI4Pc0GnIC1ieBLIVEB32EIaKQzKFnT1F9hDtsBBPkWC', 0, 'Cryptocurrency', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-07-28'),
(44, 'annj27', 'jeremiahann234@gmail.com', '$2y$10$2zriaAuWiOFBi2iPJxrlI.Tlc/x9t.735tCziDqoEwDommlID/fku', 0, 'None', 0, 0, 'Uganda', 1, 0, 41, NULL, NULL, '2022-07-29'),
(45, 'wilson', 'wilsonlarsen43@gmail.com', '$2y$10$U4qSmv8He9izks.8VOFB6eJtHU9r8ETcf5LQB1u4FnMKa9AGKUJxq', 0, 'Real Estate', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-08-03'),
(46, 'nnadozie', 'nnadoziebruno@gmail.com', '$2y$10$o5hS/qhvauFZgfKnCGKHXO/kvZ5gR904HZTKMsq0938Wypo.8o5te', 0, 'None', 0, 0, 'Nigeria', 0, 0, 0, NULL, NULL, '2022-08-05'),
(47, 'evan hilliard', 'billcoby01@gmail.com', '$2y$10$CB9zT9aaTWlqKdArnYEr.e0moDmodWQhQ3pjArFB01Uo0YsRoDZAC', 195324455, 'Real Estate', 570000, 0, 'United States', 0, 0, 0, 'btc', 'bc1qvak7d8r9eh46cff6w0m45nx7ucr3m272dzh0em', '2022-08-08'),
(48, 'home', 'lizpalmermail@gmail.com', '$2y$10$y0xL1k57f1WoFRe3CibEVe5IfEftXY4cPzcS0hCqR2PdwQa.sT.16', 0, 'Oil and Gas', 0, 0, 'Albania', 1, 0, 0, NULL, NULL, '2022-08-16'),
(49, 'cooper', 'coopermikhail@aol.com', '$2y$10$.WhsNwyLCQ8jwgUC2zEFYOOTDO7jVwk7AqTDZZYpN0hqbcMlJek.y', 0, 'None', 0, 0, 'United Kingdom', 1, 0, 0, NULL, NULL, '2022-08-21'),
(50, 'runa1609', 'pickaleva.nat@yandex.ru', '$2y$10$GlMlNL1DUnsrirUP7WdPaONH.QNPgSHHwetxiJZEfLvFn7UMpa1lC', 7400, 'Cryptocurrency', 4, 0, 'Russia', 0, 0, 0, NULL, NULL, '2022-08-22'),
(51, 'nexytestforrussia', 'dioneruprechtlmo@gmail.com', '$2y$10$KmHlnw.sHPKQY.P84.ecguRIOYb3DZWFoK.FiQDTpzR.22gEM9Ozy', 0, 'None', 0, 0, 'Argentina', 0, 0, 0, NULL, NULL, '2022-08-22'),
(53, 'sjulie1', 'stephanjulie55@gmail.com', '$2y$10$mFK3hfK7TaAOUrZ1.X44B.7yg9HYVIz3YoJRY0C5BnDGQlhgQ7H9W', 0, 'None', 0, 0, 'Canada', 0, 0, 0, NULL, NULL, '2022-08-24'),
(54, 'jonathanatkinson50', 'jonvunny123@yahoo.com', '$2y$10$TJvksKScwxpGNAGvfFK0f.zMsaNpg2y3NzdGgxNuieDYQFqtSYW.K', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-08-27'),
(55, 'regankay', 'santiagorover810@gmail.com', '$2y$10$IqRdN95q21Io7bnuxfuZ9elWvWXstaYwQP7mF6vzcTa4ANaWnK14O', 51, 'Foreign Exchange', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-09-01'),
(56, 'jaudyofficial', 'jaudyofficial@gmail.com', '$2y$10$WZGoWDq/9a7NxWLB474u/eUXyRgYgXJSUy.5SPSRLvModbIJCCgc2', 16540, 'Cryptocurrency', 0, 0, 'United States', 1, 0, 0, 'btc', '3KEZENdEGrqB8pSaY9kHbEThBa3TBa7Ede', '2022-09-01'),
(57, 'hugo', 'hugoparsson@gmail.com', '$2y$10$cs3EpSHOkvODT2ULgIgpMuO6Kx6YukDaqtqWjZc9R25mzYOE/6UPm', 0, 'Cryptocurrency', 0, 0, 'Sweden', 1, 0, 0, NULL, NULL, '2022-09-02'),
(58, 'annaudet', 'hollisiviaa42@gmail.com', '$2y$10$o3hY7hi32ZLIz2n/R6L6aO6gx2EQcghoHI.MUvqtoYHz0aiiuY/OK', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-09-07'),
(59, 'martinz', 'robinr.menard@gmail.com', '$2y$10$CnqpBtOyNa0q.rOorZVYc.M01kReh5zEudOCsLZ/OlSmIcYVBxEga', 0, 'Oil and Gas', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-09-14'),
(60, 'ryan7890', 'ryankruger157@gmail.com', '$2y$10$KF7bx6/priaOhq9JmvfMPuER0RJD/mIkmVkmP0jQnOYcCXUQbxgfG', 2130000, 'Retirement and insurance', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-09-16'),
(61, 'christopher', 'herbertrafael93@gmail.com', '$2y$10$FYr2JmfbvcZ3qcCh49vEzugbDJNKLVp2zun19JiwJXza8x6V.71p6', 0, 'Oil and Gas', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-09-20'),
(62, 'cpuentes', 'carolinepuentes@yahoo.com', '$2y$10$STzF8sZd4wAVgq7uVcx9M.EM0FRPrXePgOEMzLdOF1UE9Oob1Kb8C', 25998, 'Retirement and insurance', 0, 0, 'United States', 1, 0, 0, 'btc', '3HvvZV8zUnwzdCXLpc9nQbPsQMbUcHDKPz', '2022-09-25'),
(63, 'amargolis12', 'ariel@elearningsolved.com', '$2y$10$4cfwravBi6WQtRWc6FMtOOYzOLfWcx6fC05iZe/Xoytw3IsN5bWdi', 0, 'None', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-10-01'),
(64, 'catherine olena', 'catherineolena@gmail.com', '$2y$10$yQDARAPyeCQvua1.MFGh.OIpZX/k9doMvvArhufm3oK7Xwb1IufTC', 0, 'Oil and Gas', 0, 0, 'United Kingdom', 1, 0, 0, NULL, NULL, '2022-10-07'),
(65, 'daisy presh', 'daisypreshedward6868@gmail.com', '$2y$10$dx6S4xKilphcJUvkcBAVgup0KJSgh5BvS9pF8bARf9ddvpmh8xKlS', 0, 'Oil and Gas', 0, 0, 'Australia', 1, 0, 0, NULL, NULL, '2022-10-07'),
(66, 'kiaraowen26', 'kiaraowen36@gmail.com', '$2y$10$7IHetKWUqWK4rGVu5G9zSuAd6/AQwIrDeZ5hybKD6USUS4GvgBNzu', 0, 'None', 0, 0, 'United Kingdom', 0, 0, 0, NULL, NULL, '2022-10-07'),
(67, 'kerkeni', 'mmk.kerkeni@gmail.com', '$2y$10$vNqXiXS0dXaUxVxE9Jwaj.J6EIQv3JqsSqmETb0lg8fNgytPh8SxK', 0, 'Retirement and insurance', 0, 0, 'Tunisia', 1, 0, 0, NULL, NULL, '2022-10-08'),
(68, 'clara shannon', 'clarashannon845@gmail.com', '$2y$10$gf7AtKx1Q36nqYj/alHCB.fJaNSVHWpFJzuSYImJ/BNHrqlXx9jKm', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-10-09'),
(69, 'salem navabi', 'optimisticlife1000@gmail.com', '$2y$10$TT4ElHgWCsH21OLALvtCcOjqzXX2.7.XW.sdqE/oNDyPwSnO91af6', 0, 'Oil and Gas', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-10-09'),
(70, 'jasmine', 'maduchukwuemeka1111@gmail.com', '$2y$10$ShMTFoOOwS2T4u9NVupZHuqRaFUk3e1bd86nKOEgYay64nL8VlGKS', 0, 'Cryptocurrency', 0, 0, 'United States', 0, 0, 34, NULL, NULL, '2022-10-13'),
(71, 'ralphs222', 'ralphs222@yahoo.com', '$2y$10$n2MJddRrOjrY7eokdV2yseapR1exm0GMn42syHOTFjiAjVawewRCq', 0, 'None', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-10-14'),
(72, 'karim', 'karomrassoul@gmail.com', '$2y$10$xK.fjvfDyVpLy6ScrFkBJOdMhyiarMng/0W11eQb3ahGwtD1CuU7K', 0, 'Real Estate', 0, 0, 'Morocco', 0, 0, 0, NULL, NULL, '2022-10-18'),
(73, 'radouan', 'reda.haja28@gmail.com', '$2y$10$AIoCNLoabKXyn.Ofzt1BTu33BSH9Ij0u9PB0wa2eWUysraRpQw/wa', 0, 'Real Estate', 0, 0, 'Morocco', 0, 0, 0, NULL, NULL, '2022-10-19'),
(74, 'hrishikesh', 'hrishikeshkelkar09@gmail.com', '$2y$10$IOF6DEteZ8QSMBotwlauqOKwivuHBfiwVMXDdqBVnC.xZVcxOAbYm', 0, 'None', 0, 0, 'India', 0, 0, 34, NULL, NULL, '2022-10-19'),
(75, 'mskhandwala70', 'mskh70@gmail.com', '$2y$10$jEjGbg8WMBPpghhCNFS1Y./CZUrfYUFo8fx4Bne4MCWsnHkg6Jiay', 0, 'None', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-10-19'),
(76, 'swhipple0124@gmail.com', 'swhipple0124@gmail.com', '$2y$10$7WisBI1FPSuarw1tsFjl3Oo1LrQr4OyWFEebk3pi009/f0kOnrZ/q', 0, 'Cryptocurrency', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-10-26'),
(77, 'farouk130', 'farouk130@gmail.com', '$2y$10$FkG.9JtNKluZzASmAZCVB.wA4R6okNHy0IfAyE4ROP2/m27FXsrNS', 0, 'None', 0, 0, 'Morocco', 0, 0, 0, NULL, NULL, '2022-10-28'),
(78, 'pakornchuvit', 'pakornchuvit@protonmail.com', '$2y$10$OOyCo1Zxqof0kVY/ccDiP.JObTA8PZ9RWjq1urgFdgjf8qtGSdrPm', 13982, 'Cryptocurrency', 0, 0, 'Canada', 1, 1, 0, 'btc', '1CH7z2ka7hBaPKEFULpbR7Zj7VaDsYHxR9', '2022-11-01'),
(79, 'atoz', 'vickkychidi@gmail.com', '$2y$10$7tMERdjBrOHSicLyZzG.ZOlKm7Vcj6C4OOotXX2VvWYWFOJCaw5UG', 0, 'Real Estate', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-11-01'),
(80, 'user401', 'somecute@gmail.com', '$2y$10$ZsInrSufAiVhepOyfH6PyeI0mWiT0Y8WFjJ8bIvSqRB.yreYH57G2', 0, 'Real Estate', 0, 0, 'Canada', 1, 0, 0, NULL, NULL, '2022-11-06'),
(81, 'johnaustinem', 'johnaustinem@gmail.com', '$2y$10$8e2nIkwa.oOHPe4SC.dC9eKJ.bA9cFJkvFMPfUn8oxVgKCVp.cL.i', 0, 'Cannabis', 0, 0, 'United States', 0, 0, 78, NULL, NULL, '2022-11-07'),
(82, 'valentine', 'okwuvalentine47@gmail.com', '$2y$10$6Pe/JasYqYrasf04txo5R.n3xEcqy9wAJu0MyxRoJ.offTem/3872', 0, 'Cryptocurrency', 0, 0, 'Nigeria', 1, 0, 34, NULL, NULL, '2022-11-10'),
(83, 'benjamin', 'ryanbenjamin811@gmail.com', '$2y$10$WVsS2mTWhczVn6HWvVGmbeCjxH2XFQjpmD16wXoRKTjsynr/gPBNO', 0, 'None', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-11-15'),
(84, 'dmjett1', 'dmjett1@gmail.com', '$2y$10$lfRtbb6N.amZQfKXEskbEuEEMxaoFbJTSum25D7CDutfWek/11zsO', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-11-18'),
(85, 'hillron30@gmail.com', 'hillron30@gmail.com', '$2y$10$dc.HzgVfCfO8FF.OB1dkJO2A67qdWlP.C.dnXoyQXLaQKHneb9cQa', 0, 'None', 0, 0, 'United States', 0, 0, 0, NULL, NULL, '2022-12-11'),
(86, 'jessica', 'jessicagray.08@outlook.com', '$2y$10$UW76rHaDF5O7YPNhuZ.qderZ8eQkkvdpzVTBy8hrRNIzxJOqCOSAO', 0, 'Oil and Gas', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-12-15'),
(87, 'evan hilliard.', 'evanhiliard007@gmail.com', '$2y$10$cnWNRKMqVKu5USZlS12U0.3.jfg2CyW4GYJE915lEVcGspIPFTl7y', 3670230, 'None', 64000, 894400, 'United States', 0, 0, 0, NULL, NULL, '2022-12-16'),
(88, 'elena mchesney', 'mchelena19@gmail.com', '$2y$10$6ojg2vHV0.xqgKg.e5RO2ucimc1if4wW0Fu0DQdNSvllgyL9cXPry', 56000, 'Real Estate', 0, 0, 'United States', 1, 0, 0, NULL, NULL, '2022-12-17'),
(89, 'scarlett liam', 'scarlettliam95@gmail.com', '$2y$10$PWfV2n85QbbeV8beFV0xuOi0fbdXCGZywl9tiWytzDllE2s1S1LbK', 0, 'None', 0, 0, 'United States', 1, 0, 34, NULL, NULL, '2022-12-29'),
(90, 'tammy julia', 'tj127363@gmail.com', '$2y$10$iTZasTf1eiXfcGkbXRNnoOuAe/ciS7tItkyt5SbXjUPvLQqoE6e9C', 0, 'None', 0, 0, 'United Kingdom', 0, 0, 34, NULL, NULL, '2023-01-05'),
(91, 'tammy juali', 'tammyjulia415@gmail.com', '$2y$10$Kbsgyb.jcLSVzbGpUl9xlesGofRUcObrpt1cBmzJE5M1fWKzYltsO', 0, 'None', 0, 0, 'United Kingdom', 0, 0, 34, NULL, NULL, '2023-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `withdrawAmount` int(11) NOT NULL,
  `walletAddress` varchar(255) NOT NULL,
  `walletType` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `userId`, `userEmail`, `withdrawAmount`, `walletAddress`, `walletType`, `created_at`) VALUES
(1, 1, 'dukofinance@dukofinance.com', 100, '0xjksihjwsugwvdutg3vv7yui282ud', 'eth', '2022-11-07 10:35:50'),
(2, 78, 'pakornchuvit@protonmail.com', 0, '3H7YtP3h7zAxSdyuuuVti2yTzGFB7wfibU', 'btc', '2022-11-09 13:55:52'),
(3, 78, 'pakornchuvit@protonmail.com', 0, '3E2QfxcFQHY445e7skf4opnwRiCj1iQmsn', 'btc', '2022-11-11 20:29:46'),
(4, 78, 'pakornchuvit@protonmail.com', 50, '1CH7z2ka7hBaPKEFULpbR7Zj7VaDsYHxR9', 'btc', '2022-11-15 02:51:36'),
(5, 78, 'pakornchuvit@protonmail.com', 175, 'bc1qd779pqcc9q40z3spr8tlqt3qwzk85hr3q5kvzx', 'btc', '2022-11-16 04:55:19'),
(6, 78, 'pakornchuvit@protonmail.com', 50, '3H7YtP3h7zAxSdyuuuVti2yTzGFB7wfibU', 'btc', '2022-11-17 05:03:48'),
(7, 78, 'pakornchuvit@protonmail.com', 50, '3H7YtP3h7zAxSdyuuuVti2yTzGFB7wfibU', 'btc', '2022-11-18 15:44:45'),
(8, 78, 'pakornchuvit@protonmail.com', 50, '3H7YtP3h7zAxSdyuuuVti2yTzGFB7wfibU', 'btc', '2022-11-18 15:46:55'),
(9, 78, 'pakornchuvit@protonmail.com', 50, '3KCMrZtcbR2Zj2fhhKvnWzHo82AQG4QyMm', 'btc', '2022-11-21 04:00:54'),
(10, 78, 'pakornchuvit@protonmail.com', 50, '3KCMrZtcbR2Zj2fhhKvnWzHo82AQG4QyMm', 'btc', '2022-11-21 04:01:43'),
(11, 78, 'pakornchuvit@protonmail.com', 50, '3D9bDKGxEVrQ2C6hcycqzSrNkGNcpcdWBg', 'btc', '2022-11-23 05:57:47'),
(12, 78, 'pakornchuvit@protonmail.com', 50, '3D9bDKGxEVrQ2C6hcycqzSrNkGNcpcdWBg', 'btc', '2022-11-23 06:27:36'),
(13, 56, 'jaudyofficial@gmail.com', 50, '3KEZENdEGrqB8pSaY9kHbEThBa3TBa7Ede', 'btc', '2022-11-23 16:54:13'),
(14, 78, 'pakornchuvit@protonmail.com', 50, '3H7YtP3h7zAxSdyuuuVti2yTzGFB7wfibU', 'btc', '2022-11-25 00:55:53'),
(15, 78, 'pakornchuvit@protonmail.com', 50, '3H7YtP3h7zAxSdyuuuVti2yTzGFB7wfibU', 'btc', '2022-11-28 04:38:42'),
(16, 78, 'pakornchuvit@protonmail.com', 50, '1CH7z2ka7hBaPKEFULpbR7Zj7VaDsYHxR9', 'btc', '2022-12-06 03:05:06'),
(17, 78, 'pakornchuvit@protonmail.com', 30, '1CH7z2ka7hBaPKEFULpbR7Zj7VaDsYHxR9', 'btc', '2022-12-12 10:53:30'),
(18, 62, 'carolinepuentes@yahoo.com', 50, '3HvvZV8zUnwzdCXLpc9nQbPsQMbUcHDKPz', 'btc', '2022-12-12 11:30:05'),
(19, 78, 'pakornchuvit@protonmail.com', 60, '1CH7z2ka7hBaPKEFULpbR7Zj7VaDsYHxR9', 'btc', '2022-12-13 05:13:45'),
(20, 62, 'carolinepuentes@yahoo.com', 3000, '3HvvZV8zUnwzdCXLpc9nQbPsQMbUcHDKPz', 'btc', '2023-01-06 16:28:58'),
(21, 52, 'graysonayden1982@outlook.com', 2147483647, 'Cvhhvcdsayjkopitrewagvvvvty', 'btc', '2023-01-06 16:46:07'),
(22, 47, 'billcoby01@gmail.com', 2000, 'bc1qvak7d8r9eh46cff6w0m45nx7ucr3m272dzh0em', 'btc', '2023-01-06 17:06:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_earning`
--
ALTER TABLE `referral_earning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `referral_earning`
--
ALTER TABLE `referral_earning`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
