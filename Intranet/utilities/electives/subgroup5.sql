-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2014 at 08:08 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `subgroup5`
--
CREATE DATABASE IF NOT EXISTS `subgroup5` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `subgroup5`;

-- --------------------------------------------------------

--
-- Table structure for table `electives_list`
--

CREATE TABLE IF NOT EXISTS `electives_list` (
  `department` varchar(40) NOT NULL,
  `Batch` varchar(25) NOT NULL,
  `Electives` varchar(100) NOT NULL,
  `Elective_code` varchar(10) NOT NULL,
  `preference` varchar(50) DEFAULT NULL,
  `credits` varchar(14) NOT NULL,
  `syllabus` varchar(1500) NOT NULL,
  `texts` varchar(1000) NOT NULL,
  `reference` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electives_list`
--

INSERT INTO `electives_list` (`department`, `Batch`, `Electives`, `Elective_code`, `preference`, `credits`, `syllabus`, `texts`, `reference`) VALUES
('Default', 'B.tech/B.des 2012', 'Human Resource Management', 'HS 305', NULL, '3-0-0-6', 'Human Resource Management: Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1.A. Monnappa  Personnel Management', '1.A. Monnappa  Personnel Management'),
('Default', 'B.tech/B.des 2012', 'Philosophy: History And Problems', 'HS 304', NULL, '3-0-0-6', 'Philosophy and science: the nature and the structure of science, general characteristics of science, the foundations of modern physics, physics and the mind, the ideas of biology, the social sciences,philosophy and technology: science, technology and industry', '1 J Fieser and J Powers, Scriptures of worlds religions, Boston:McGraw Hill,1998', '1 J Fieser and J Powers, Scriptures of worlds religions, Boston:McGraw Hill,1998'),
('Default', 'B.tech/B.des 2012', 'CONTEMPORARY INDIAN LITERATURE IN ENGLISH', 'HS 309', NULL, '3-0-0-6', 'CONTEMPORARY INDIAN LITERATURE IN ENGLISH: Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1.A. Monnappa  Personnel Management', '1.A. Monnappa  Personnel Management'),
('Default', 'B.tech/B.des 2012', 'CONCEPTS AND IDEOLOGIES IN SOCIAL LIFE', 'HS 310', NULL, '3-0-0-6', 'CONCEPTS AND IDEOLOGIES IN SOCIAL LIFE: Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1.A. Monnappa  Personnel Management', '1.A. Monnappa  Personnel Management'),
('Default', 'B.tech/B.des 2012', 'SOUND STRUCTURE OF LANGUAGE AND SPEECH ANALYSIS', 'HS 315', NULL, '3-0-0-6', 'SOUND STRUCTURE OF LANGUAGE AND SPEECH ANALYSIS: Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1.A. Monnappa  Personnel Management', '1.A. Monnappa  Personnel Management'),
('Default', 'B.tech/B.des 2012', 'Psychology of Health and Adjustment', 'HS 321', NULL, '3-0-0-6', 'Psychology of Health and Adjustment: Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1.A. Monnappa  Personnel Management', '1.A. Monnappa  Personnel Management'),
('Default', 'B.tech/B.des 2012', 'INDUSTRIAL ORGANIZATION', 'HS 322', NULL, '3-0-0-6', 'INDUSTRIAL ORGANIZATION: Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.'),
('Default', 'B.tech/B.des 2013', 'INTRODUCTION TO CULTURAL STUDIES', 'HS 214', NULL, '3-0-0-6', 'INTRODUCTION TO CULTURAL STUDIES:Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.'),
('Default', 'B.tech/B.des 2013', 'LANGUAGE, CULTURE AND COGNITION', 'HS 221', NULL, '3-0-0-6', 'Language: evolution, form and content; Issues in language and cognition: history, various views and areas of study; Cultural bases of language and cognition: embodiment, universalism / relativism, schemas, categorization, metaphor and mental imagery; Linguistic encoding: space, time, kinship, color, body; Recent trends in research: first and second language acquisition, spatial language comprehension, fictive motion etc.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.'),
('Default', 'B.tech/B.des 2013', 'Introduction to Psychology', 'HS 229', NULL, '3-0-0-6', 'Introduction: Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.'),
('Default', 'B.tech/B.des 2013', 'ECONOMIC THEORY: AN INTRODUCTION', 'HS 230', NULL, '3-0-0-6', 'ECONOMIC THEORY: concepts and causes; Approaches exploring the causes, escalation and destructive consequences of violent conflicts and political instability of states in South and Southeast Asia, Sub-Saharan Africa, Balkans, and Eastern Europe; Implications of conflicts: changing power relations between different ethnic groups, intra and inter state politics; Strategies of mobilization; Management of conflict; Case studies: historical backgrounds and recent developments.', '1.A. Monnappa Personnel Management<br>2.Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.', '1.A. Monnappa Personnel Management<br>2.Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.'),
('Default', 'B.tech/B.des 2013', 'Ethnic Conflict and Management', 'HS 233', NULL, '3-0-0-6', 'Ethnic conflict: concepts and causes; Approaches exploring the causes, escalation and destructive consequences of violent conflicts and political instability of states in South and Southeast Asia, Sub-Saharan Africa, Balkans, and Eastern Europe; Implications of conflicts: changing power relations between different ethnic groups, intra and inter state politics; Strategies of mobilization; Management of conflict; Case studies: historical backgrounds and recent developments.', '1.A. Monnappa  Personnel Management', '1.A. Monnappa  Personnel Management'),
('Default', 'B.tech/B.des 2013', 'History of Modern India', 'HS 235', NULL, '3-0-0-6', 'History of Modern India:Concept, definitions, objectives, and scope Traditional personnel management and modern HRM approaches Human Resource Planning: Approaches,processes, and objectives Recruitment: Concept, objectives, factors, sources.', '1.A. Monnappa  Personnel Management<br>2.Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.', '1.A. Monnappa  Personnel Management'),
('Default', 'B.tech/B.des 2013', 'INTRODUCTION TO PHONETICS', 'HS 236', NULL, '3-0-0-6', 'INTRODUCTION TO PHONETICS: evolution, form and content; Issues in language and cognition: history, various views and areas of study; Cultural bases of language and cognition: embodiment, universalism / relativism, schemas, categorization, metaphor and mental imagery; Linguistic encoding: space, time, kinship, color, body; Recent trends in research: first and second language acquisition, spatial language comprehension, fictive motion etc.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.', '1. Croft, W. and D.A. Cruse, Cognitive Linguistics, Cambridge University Press, 2004.');

-- --------------------------------------------------------

--
-- Table structure for table `user_preference_electives`
--

CREATE TABLE IF NOT EXISTS `user_preference_electives` (
  `uid` int(20) NOT NULL,
  `rollno` int(12) NOT NULL,
  `username` varchar(45) NOT NULL,
  `webmail` varchar(45) NOT NULL,
  `pref1` varchar(100) NOT NULL DEFAULT 'not filled',
  `pref2` varchar(100) NOT NULL DEFAULT 'not filled',
  `pref3` varchar(100) NOT NULL DEFAULT 'not filled',
  `pref4` varchar(100) NOT NULL DEFAULT 'not filled',
  `pref5` varchar(100) NOT NULL DEFAULT 'not filled',
  `pref6` varchar(100) NOT NULL DEFAULT 'not filled',
  `pref7` varchar(100) NOT NULL DEFAULT 'not filled',
  `tool` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_preference_electives`
--

INSERT INTO `user_preference_electives` (`uid`, `rollno`, `username`, `webmail`, `pref1`, `pref2`, `pref3`, `pref4`, `pref5`, `pref6`, `pref7`, `tool`) VALUES
(1, 120101086, 'subhojeet', 'subhojeet', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 0),
(2, 120103044, 'naman kansal', 'n.kansal', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 0),
(3, 120123053, 'utkarsh dixit', 'u.dixit', 'Philosophy: History And Problems', 'Human Resource Management', 'CONCEPTS AND IDEOLOGIES IN SOCIAL LIFE', 'CONTEMPORARY INDIAN LITERATURE IN ENGLISH', 'SOUND STRUCTURE OF LANGUAGE AND SPEECH ANALYSIS', 'Psychology of Health and Adjustment', 'INDUSTRIAL ORGANIZATION', 1),
(4, 120123017, 'harsh abhishek', 'h.abhishek', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 'not filled', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
