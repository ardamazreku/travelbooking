-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2021 at 03:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(10) NOT NULL AUTO_INCREMENT,
  `leaving` varchar(15) NOT NULL,
  `going` varchar(15) NOT NULL,
  `nripersonave` int(15) NOT NULL,
  `departing` date NOT NULL,
  `returning` date NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE IF NOT EXISTS `inbox` (
  `email` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`email`, `title`, `message`) VALUES
('vlera.j@gmail.com', 'Hello!', 'I love your page! This is the best account for travel!');

-- --------------------------------------------------------

--
-- Table structure for table `kartela`
--

DROP TABLE IF EXISTS `kartela`;
CREATE TABLE IF NOT EXISTS `kartela` (
  `card_number` int(80) NOT NULL,
  `emri_mbiemri` varchar(50) NOT NULL,
  `expiration_date` int(15) NOT NULL,
  `card_verification_value` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesi`
--

DROP TABLE IF EXISTS `perdoruesi`;
CREATE TABLE IF NOT EXISTS `perdoruesi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `emri` varchar(30) NOT NULL,
  `mbiemri` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `roli` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli` (`roli`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perdoruesi`
--

INSERT INTO `perdoruesi` (`id`, `emri`, `mbiemri`, `email`, `password`, `roli`) VALUES
(1, 'Festa', 'Mazreku', 'festamazreku@gmail.com', 'Festa99!', 1),
(2, 'Vlera', 'Januzi', 'vlera.j@gmail.com', 'Vlera98', 2),
(3, 'Erisa', 'Bytyqi', 'erisab@gmail.com', 'Erisa2000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roli`
--

DROP TABLE IF EXISTS `roli`;
CREATE TABLE IF NOT EXISTS `roli` (
  `roli` int(1) NOT NULL,
  `r_pershkrimi` varchar(15) NOT NULL,
  PRIMARY KEY (`roli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roli`
--

INSERT INTO `roli` (`roli`, `r_pershkrimi`) VALUES
(1, 'Administratori'),
(2, 'Klienti'),
(3, 'Punetori');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
