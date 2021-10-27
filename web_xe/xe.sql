-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2020 at 06:41 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xe`
--
CREATE DATABASE IF NOT EXISTS `xe` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `xe`;

-- --------------------------------------------------------

--
-- Table structure for table `thongtinxe`
--

CREATE TABLE IF NOT EXISTS `thongtinxe` (
  `id` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `maxe` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh` text COLLATE utf8_vietnamese_ci NOT NULL,
  `tenxe` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `noisx` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaysx` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `thongtinxe`
--

INSERT INTO `thongtinxe` (`id`, `maxe`, `anh`, `tenxe`, `noisx`, `ngaysx`) VALUES
('7', 'x4', 'x2.jpg', 'lambo', 'Hà Nội', '2020-12-23'),
('8', 'x3', 'x4.jpg', 'lambo', 'Tp Hồ Chí Minh', '2020-12-17'),
('9', 'x10', 'x6.jpg', 'Tesla', 'American1', '2020-12-24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
