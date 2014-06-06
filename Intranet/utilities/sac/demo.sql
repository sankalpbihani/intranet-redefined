-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2014 at 02:47 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo`
--
CREATE DATABASE IF NOT EXISTS `demo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `demo`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `hallid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `startdate` varchar(10) NOT NULL,
  `enddate` varchar(10) NOT NULL,
  `hallname` varchar(30) NOT NULL,
  `starttime` varchar(5) NOT NULL,
  `endtime` varchar(5) NOT NULL,
  PRIMARY KEY (`hallid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`hallid`, `userid`, `startdate`, `enddate`, `hallname`, `starttime`, `endtime`) VALUES
(20, 'd.khatri', '14/04/2014', '17/04/2014', 'Music Hall', '03:00', '03:30'),
(21, 'a.vijay', '14/04/2014', '17/04/2014', 'Dance Hall', '00:30', '02:00'),
(23, 'priyanka', '18/06/2014', '30/06/2014', 'Music Hall', '09:00', '05:30'),
(24, 'meganfox', '11/09/2014', '21/08/2014', 'Event Hall', '07:30', '08:30'),
(25, 'chalsey', '30/04/2014', '30/04/2014', 'Conference Hall', '08:30', '09:00');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `formno` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`formno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`formno`, `subject`, `link`) VALUES
('Gen/01', 'Application form for Passport related certificates - Bonafide, No Objection & Verification', 'http://shilloi.iitg.ernet.in/~sa/forms/New%20Forms/1.Passport-%20Bonafide,NOC.pdf'),
('Gen/02', 'Multi-purpose Bonafide Certificate (for Bank Account/SIM/Loan/Others)', 'http://shilloi.iitg.ernet.in/~sa/forms/New%20Forms/5.%20Temporary%20ID%20Form.pdf'),
('Gen/03', 'Railway Concession form ', 'http://shilloi.iitg.ernet.in/~sa/forms/New%20Forms/3.%20Railway%20Concession.pdf'),
('Gen/04', 'a) Identity Card Original Form (Other than 1st Year b) Original Identity Card forthe 1st Year students', 'http://shilloi.iitg.ernet.in/~sa/forms/New%20Forms/4.%20IDCard%20Original_Form.pdf'),
('Gen/05', 'Provisional Identity Card Form ', 'http://shilloi.iitg.ernet.in/~sa/forms/New%20Forms/5.%20Temporary%20ID%20Form.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nso_attendance`
--

CREATE TABLE IF NOT EXISTS `nso_attendance` (
  `webmailid` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` int(1) NOT NULL,
  `attendance` int(2) NOT NULL,
  `nso` varchar(15) NOT NULL,
  PRIMARY KEY (`webmailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nso_attendance`
--

INSERT INTO `nso_attendance` (`webmailid`, `name`, `year`, `attendance`, `nso`) VALUES
('d.khatri', 'dheeraj Khatri', 2, 15, 'tennis'),
('jungli.billi', 'priyanka', 2, 16, 'tennis'),
('kunal.khadelwal', 'kunal', 2, 14, 'baddminton');

-- --------------------------------------------------------

--
-- Table structure for table `pt_attendance`
--

CREATE TABLE IF NOT EXISTS `pt_attendance` (
  `webmailid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `year` int(1) NOT NULL,
  `attendance` int(2) NOT NULL,
  `groupno` varchar(5) NOT NULL,
  PRIMARY KEY (`webmailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt_attendance`
--

INSERT INTO `pt_attendance` (`webmailid`, `name`, `year`, `attendance`, `groupno`) VALUES
('d.khatri', 'Dheeraj Khatri', 2, 18, 'A-1'),
('kunal.khandelwal', 'kunal', 2, 17, 'A-1');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `gameid` int(5) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `objectname` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`gameid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`gameid`, `game_name`, `objectname`, `quantity`) VALUES
(1, 'cricket', 'balls', 200),
(2, 'cricket', 'bats', 10),
(3, 'tennis', 'rackets', 7),
(4, 'tennis', 'balls', 40),
(5, 'tennis', 'nets', 5),
(6, 'hockey', 'sticks', 20),
(7, 'hockey', 'hockeyballs', 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
