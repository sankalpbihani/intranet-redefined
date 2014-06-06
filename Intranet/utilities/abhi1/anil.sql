-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2014 at 05:36 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `anil`
--

CREATE TABLE IF NOT EXISTS `anil` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Hostel` varchar(16) NOT NULL,
  `Mess` text,
  `Duelist` text,
  `Mess_Date` date NOT NULL,
  `Due_Date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `anil`
--

INSERT INTO `anil` (`ID`, `Hostel`, `Mess`, `Duelist`, `Mess_Date`, `Due_Date`) VALUES
(1, 'siang', '4.jpg', NULL, '2014-04-05', '0000-00-00'),
(2, 'kapili', NULL, NULL, '0000-00-00', '0000-00-00'),
(3, 'dibang', NULL, NULL, '0000-00-00', '0000-00-00'),
(4, 'dihing', 'photo.php.jpg', 'work.jpg', '2014-04-05', '2014-04-05'),
(5, 'brahmaputra', NULL, NULL, '0000-00-00', '0000-00-00'),
(6, 'kameng', NULL, NULL, '0000-00-00', '0000-00-00'),
(7, 'barak', NULL, '2.jpg', '0000-00-00', '2014-04-05'),
(8, 'umium', NULL, NULL, '0000-00-00', '0000-00-00'),
(9, 'manas', NULL, NULL, '0000-00-00', '0000-00-00'),
(10, 'subansiri', NULL, NULL, '0000-00-00', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
