-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 09, 2021 at 05:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `b_id` int(10) NOT NULL,
  `leaving` varchar(15) NOT NULL,
  `going` varchar(15) NOT NULL,
  `nripersonave` int(100) NOT NULL,
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
  `email` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kartela`
--

DROP TABLE IF EXISTS `kartela`;
CREATE TABLE IF NOT EXISTS `kartela` (
  `card_number` int(50) NOT NULL,
  `emri_mbiemri` varchar(40) NOT NULL,
  `expiration_date` varchar(15) NOT NULL,
  `card_verification_value` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pagesa`
--

DROP TABLE IF EXISTS `pagesa`;
CREATE TABLE IF NOT EXISTS `pagesa` (
  `p_id` int(10) NOT NULL,
  `emri_mbiemri` varchar(40) NOT NULL,
  `cash` int(20) NOT NULL
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perdoruesi`
--

INSERT INTO `perdoruesi` (`id`, `emri`, `mbiemri`, `email`, `password`, `roli`) VALUES
(1, 'Festa', 'Mazreku', 'festamazreku@gmail.com', 'Festa99!', 1),
(2, 'Arda', 'Mazreku', 'ardamazreku@gmail.com', 'Arda123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roli`
--

DROP TABLE IF EXISTS `roli`;
CREATE TABLE IF NOT EXISTS `roli` (
  `roli` int(1) NOT NULL,
  `r_pershkrimi` varchar(10) NOT NULL,
  PRIMARY KEY (`roli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roli`
--

INSERT INTO `roli` (`roli`, `r_pershkrimi`) VALUES
(1, 'Admin'),
(2, 'Klient'),
(3, 'Punetor');

-- --------------------------------------------------------

--
-- Table structure for table `shporta`
--

DROP TABLE IF EXISTS `shporta`;
CREATE TABLE IF NOT EXISTS `shporta` (
  `sh_id` int(11) NOT NULL,
  `emri` int(11) NOT NULL,
  `cmimi` int(11) NOT NULL,
  `totali` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
