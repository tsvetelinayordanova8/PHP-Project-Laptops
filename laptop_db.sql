-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 12, 2023 at 09:36 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop_tbl`
--

DROP TABLE IF EXISTS `laptop_tbl`;
CREATE TABLE IF NOT EXISTS `laptop_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `hardware` varchar(20) NOT NULL,
  `cores` int(10) UNSIGNED NOT NULL,
  `processor` varchar(20) NOT NULL,
  `graphic_card` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laptop_tbl`
--

INSERT INTO `laptop_tbl` (`id`, `name`, `hardware`, `cores`, `processor`, `graphic_card`) VALUES
(35, '1', '1', 1, '1', '1'),
(3, 'Acer Turbo', 'HDD 1TB', 4, 'Intel Core i3', 'Razen'),
(4, 'Lenovo Yoga', 'SSD 256GB', 4, 'Intel Core i5', 'Razen'),
(16, 'Asus TUF Gaming FT5', 'SSD 512GB', 16, 'Intel Core i9', 'Nvidiva GTX'),
(8, 'Dell', 'SSD 1TB', 6, 'Intel Core i5', 'Nvidia RTX'),
(9, 'Dell', 'SSD 500GB', 8, 'Intel Core i7', 'Nvidia GTX'),
(10, 'HP Pavillion', 'SSD 500GB', 8, 'Intel Core i5', 'Nvidia RTX'),
(11, 'HP Pavillion', 'SSD 256GB', 6, 'Intel Core i3', 'Nvidia GTX'),
(12, 'HP Pavillion', 'SSD 500GB', 8, 'Intel Core i5', 'Razen'),
(13, 'Legion', 'SSD 7TB', 6, 'Intel Core i7', 'Nvidia GTX7'),
(24, 'Acer Nitro', 'SSD 256GB', 6, 'Intel Core i3', 'Nvidia RT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` int(10) UNSIGNED NOT NULL,
  `personname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`, `personname`) VALUES
(1, 'admin', 'admin1', 1, 'Administrator');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
