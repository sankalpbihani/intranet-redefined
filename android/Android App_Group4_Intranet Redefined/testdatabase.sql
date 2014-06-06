-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2014 at 05:48 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `activity` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `date`, `activity`) VALUES
(1, '2014-04-18', 'good Friday'),
(2, '2014-04-17', 'holy thursday'),
(3, '2014-04-19', 'its saturday!!'),
(4, '2014-04-20', 'Sunday is here!!'),
(5, '2014-04-21', 'Only 1 week for exams!'),
(6, '2014-04-22', 'Surprise Algo Quiz, Software Lab Evaluation'),
(7, '2014-04-23', 'tomorrow is voting day'),
(8, '2014-04-24', 'VOTE!'),
(9, '2014-04-25', 'Exams are here!'),
(10, '2014-04-26', 'Its Saturday again!!');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `password`, `department`) VALUES
(1, 'radhika.patodiya', 'radhika', 'computer'),
(2, 'himanshu.goyal', 'himanshu', 'computer'),
(3, 'subhojeet', 'subhojeet', 'computer'),
(4, 'kunal.khandelwal', 'kunal', 'computer'),
(5, 'vasu', 'vasu', 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(40) NOT NULL,
  `day` varchar(40) NOT NULL,
  `class1` varchar(40) NOT NULL,
  `class2` varchar(40) NOT NULL,
  `class3` varchar(40) NOT NULL,
  `class4` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `department`, `day`, `class1`, `class2`, `class3`, `class4`) VALUES
(1, 'computer', 'Monday', 'none', 'FLAT', 'Algorithms', 'HSS'),
(2, 'computer', 'Tuesday', 'none', 'COA', 'FLAT', 'Algorithms'),
(4, 'computer', 'Wednesday', 'none', 'Software', 'COA', 'FLAT'),
(5, 'computer', 'Thursday', 'Algorithms', 'HSS', 'Software', 'COA'),
(6, 'computer', 'Friday', 'none', 'Algorithms', 'HSS', 'Software'),
(7, 'computer', 'Sunday', 'none', 'none', '', ''),
(8, 'computer', 'Saturday', 'none', 'none', 'none', '');
