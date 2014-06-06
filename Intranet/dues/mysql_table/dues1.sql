-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2014 at 09:01 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `dues1`
--

CREATE TABLE IF NOT EXISTS `dues1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(80) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `MessDues` int(11) NOT NULL,
  `Gymkhana` int(11) NOT NULL,
  `Misc` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `RollNo` (`RollNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `dues1`
--

INSERT INTO `dues1` (`id`, `Name`, `RollNo`, `MessDues`, `Gymkhana`, `Misc`) VALUES
(1, 'Raja kumar', 120101055, 555, 333, 333),
(2, 'Ankit Kumar', 120101010, 2222, 0, 0),
(3, 'q', 2, 3, 0, 0),
(4, 'raunitkumar', 120101057, 2229, 124, 0),
(5, 'qwe', 123, 124, 0, 0),
(6, 'mahipal', 120101061, 1, 0, 0),
(7, 'ranuvikram', 120101062, 36, 36, 0),
(8, 'rajat', 0, 0, 123, 0),
(9, 'abhinav', 120101003, 0, 1234456, 0),
(11, 'sagar', 120101001, 888, 0, 0),
(12, 'raja gupta', 120101002, 0, 124, 0),
(15, 'raja gupta', 120101004, 0, 999, 0),
(17, 'rrrr', 120101065, 0, 0, 234),
(18, 'goyal', 120101066, 123, 0, 0),
(20, 'sourav kumar', 120101077, 888, 0, 0),
(21, 'raja kumar', 120101000, 555, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
