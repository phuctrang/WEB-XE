-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2021 at 04:06 AM
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
-- Table structure for table `dangki`
--

CREATE TABLE IF NOT EXISTS `dangki` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `nhaplaimatkhau` varchar(50) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `hoten` varchar(100) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dangki`
--

INSERT INTO `dangki` (`id`, `tendangnhap`, `matkhau`, `nhaplaimatkhau`, `hoten`, `ngaysinh`, `gioitinh`, `diachi`, `sdt`) VALUES
(1, 'admin', 'admin', '', '', '0000-00-00', '', '', ''),
(5, 'myoanh', '123', '123', 'Huỳnh thị Mỹ Trang', '2000-10-18', 'nữ', 'phú tài', '0393966486'),
(6, 'trang', '123', '123', 'Huỳnh thị Mỹ ', '2021-01-18', 'nữ', 'gfgfgg', '54545');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE IF NOT EXISTS `giohang` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `maxe` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh` text COLLATE utf8_vietnamese_ci NOT NULL,
  `tenxe` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `noisx` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaysx` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `maxe`, `anh`, `tenxe`, `noisx`, `ngaysx`) VALUES
(1, 'x4', 'x2.jpg', 'lambovip', 'Hà Nội', '2021-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE IF NOT EXISTS `loginform` (
  `user` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`user`, `Pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinxe`
--

CREATE TABLE IF NOT EXISTS `thongtinxe` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `maxe` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh` text COLLATE utf8_vietnamese_ci NOT NULL,
  `tenxe` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `noisx` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaysx` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `thongtinxe`
--

INSERT INTO `thongtinxe` (`id`, `maxe`, `anh`, `tenxe`, `noisx`, `ngaysx`) VALUES
(3, 'x4', 'x2.jpg', 'lambovip', 'Hà Nội', '2020-12-23'),
(4, 'x11', 'x2.jpg', 'fly sửa', 'Califoxnia', '2021-01-04'),
(5, 'x3', 'x2.jpg', 'lambo', 'Tp Hồ Chí Minh', '2020-12-17'),
(6, 'x10', 'x2.jpg', 'Tesla', 'American1', '2020-12-24'),
(7, 'x10', 'x2.jpg', 'Mitsubisi', 'Tp Hồ Chí Minh', '2020-12-11'),
(9, 'x12', 'x2.jpg', 'Vios', 'Tp Hồ Chí Minh', '2021-01-12'),
(11, 'x13', 'x2.jpg', 'lamboghini', 'Mỹ', '2021-01-03'),
(12, 'x13', 'x2.jpg', 'Xe abc', 'Hà Nội', '2021-01-13'),
(13, 'x14', 'x2.jpg', 'lambo123', 'American', '2021-01-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
