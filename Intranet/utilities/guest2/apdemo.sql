-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2014 at 06:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `name` varchar(50) NOT NULL,
  `relation` varchar(40) NOT NULL,
  `check_in` varchar(20) NOT NULL,
  `check_out` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `relation`, `check_in`, `check_out`) VALUES
('Ajaypal Singh', 'sdf', '29/04/2014', '30/04/2014'),
('Ajaypal Singh', 'sdf', '24/04/2014', '30/04/2014'),
('Ajaypal Singh', 'sdf', '24/04/2014', '28/04/2014'),
('Ajaypal Singh', 'sdf', '02/04/2014', '06/04/2014'),
('Ajaypal Singh', 'sdf', '24/04/2014', '28/04/2014'),
('Ajaypal Singh', 'sdf', '16/04/2014', '15/04/2014'),
('Ajaypal Singh', 'sdf', '16/04/2014', '14/04/2014'),
('Ajaypal Singh', 'sdf', '08/04/2014', '09/04/2014'),
('Ajaypal Singh', 'sdf', '23/04/2014', '24/04/2014'),
('Ajaypal Singh', 'sdf', '03/04/2014', '05/04/2014'),
('Ajaypal Singh', 'sdf', '03/04/2014', '05/04/2014'),
('Ajaypal Singh', 'sdf', '03/04/2014', '05/04/2014'),
('Ajaypal Singh', 'asdf', '23/04/2014', '24/04/2014'),
('Ajaypal Singh', 'd', '22/04/2014', '23/04/2014');

-- --------------------------------------------------------

--
-- Table structure for table `room_1`
--

CREATE TABLE IF NOT EXISTS `room_1` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_1`
--

INSERT INTO `room_1` (`start_date`, `end_date`) VALUES
('14/04/2014', '16/04/2014'),
('20/04/2014', '22/04/2014'),
('24/04/2014', '28/04/2014'),
('08/04/2014', '09/04/2014'),
('03/04/2014', '05/04/2014'),
('12/04/2014', '13/04/2014'),
('10/04/2014', '10/04/2014'),
('22/04/2014', '23/04/2014');

-- --------------------------------------------------------

--
-- Table structure for table `room_2`
--

CREATE TABLE IF NOT EXISTS `room_2` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_2`
--

INSERT INTO `room_2` (`start_date`, `end_date`) VALUES
('16/04/2014', '15/04/2014'),
('16/04/2014', '14/04/2014'),
('23/04/2014', '24/04/2014'),
('03/04/2014', '05/04/2014'),
('12/04/2014', '13/04/2014');

-- --------------------------------------------------------

--
-- Table structure for table `room_3`
--

CREATE TABLE IF NOT EXISTS `room_3` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_3`
--

INSERT INTO `room_3` (`start_date`, `end_date`) VALUES
('03/04/2014', '05/04/2014'),
('23/04/2014', '24/04/2014');

-- --------------------------------------------------------

--
-- Table structure for table `room_4`
--

CREATE TABLE IF NOT EXISTS `room_4` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_5`
--

CREATE TABLE IF NOT EXISTS `room_5` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_6`
--

CREATE TABLE IF NOT EXISTS `room_6` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_7`
--

CREATE TABLE IF NOT EXISTS `room_7` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_8`
--

CREATE TABLE IF NOT EXISTS `room_8` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_9`
--

CREATE TABLE IF NOT EXISTS `room_9` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_10`
--

CREATE TABLE IF NOT EXISTS `room_10` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_11`
--

CREATE TABLE IF NOT EXISTS `room_11` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_12`
--

CREATE TABLE IF NOT EXISTS `room_12` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_13`
--

CREATE TABLE IF NOT EXISTS `room_13` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_14`
--

CREATE TABLE IF NOT EXISTS `room_14` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_15`
--

CREATE TABLE IF NOT EXISTS `room_15` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_16`
--

CREATE TABLE IF NOT EXISTS `room_16` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_17`
--

CREATE TABLE IF NOT EXISTS `room_17` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_18`
--

CREATE TABLE IF NOT EXISTS `room_18` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_19`
--

CREATE TABLE IF NOT EXISTS `room_19` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_20`
--

CREATE TABLE IF NOT EXISTS `room_20` (
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
