-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2022 at 09:09 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebelta`
--

-- --------------------------------------------------------

--
-- Table structure for table `matricules`
--

DROP TABLE IF EXISTS `matricules`;
CREATE TABLE IF NOT EXISTS `matricules` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Matricule` varchar(255) DEFAULT NULL,
  `ladate` varchar(255) DEFAULT NULL,
  `seatbelt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matricules`
--

INSERT INTO `matricules` (`id`, `Matricule`, `ladate`, `seatbelt`) VALUES
(1, '23238 ا 54', '2022-06-05 21:32:04.114751', 'False'),
(2, '24732 ا 6', '2022-06-05 21:43:06.457953', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(12) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('universe', '$2y$10$5/5HWaqW2wqo9rlsA/fW6ehNGHkHQztDbuAbk7oQz3Tj5Q0iR23YO', 27),
('salma', '$2y$10$biDXepP2wjh/gwPGgFWJU..GfR.I1.trfr1jhXqOqY7rTuAQSp2ru', 28);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
