-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2022 at 09:51 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo-toets-herkansing`
--

-- --------------------------------------------------------

--
-- Table structure for table `burrito`
--

DROP TABLE IF EXISTS `burrito`;
CREATE TABLE IF NOT EXISTS `burrito` (
  `id` int(75) NOT NULL AUTO_INCREMENT,
  `burritoformaat` enum('20','25','30') NOT NULL,
  `saus` enum('Salsa Crudo','Salsa verde','Salsa roja','Créme fraiche') NOT NULL,
  `bonen` enum('Kidney Bonen','Zwarte Bonen','Bruine bonen') NOT NULL,
  `rijst` enum('Witte Rijst','Zwarte Rijst','Bruine Rijst') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burrito`
--

INSERT INTO `burrito` (`id`, `burritoformaat`, `saus`, `bonen`, `rijst`) VALUES
(1, '20', 'Salsa Crudo', 'Zwarte Bonen', 'Zwarte Rijst');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
