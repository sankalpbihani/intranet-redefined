-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.13.169.129
-- Generation Time: Apr 17, 2014 at 06:52 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `roll_number` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL,
  `user_nm` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `class` varchar(3) DEFAULT NULL,
  `pass_changed` varchar(4) NOT NULL,
  `pass_changed_at` datetime DEFAULT NULL,
  `pass_created_at` datetime DEFAULT NULL,
  `last_modified_by` varchar(250) DEFAULT NULL,
  `advisor_id` varchar(100) NOT NULL,
  `permission` varchar(4) NOT NULL,
  `security_question_id` int(11) DEFAULT NULL,
  `security_question_ans` varchar(60) DEFAULT NULL,
  `password_hashed` text NOT NULL,
  `cat1` varchar(30) NOT NULL DEFAULT 'NULL',
  `cat2` varchar(30) NOT NULL DEFAULT 'NULL',
  `cat3` varchar(30) NOT NULL DEFAULT 'NULL',
  `last_login` datetime NOT NULL,
  `last_login_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`roll_number`),
  UNIQUE KEY `user_id` (`user_nm`),
  KEY `advisor_id` (`advisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_number`, `name`, `user_nm`, `password`, `class`, `pass_changed`, `pass_changed_at`, `pass_created_at`, `last_modified_by`, `advisor_id`, `permission`, `security_question_id`, `security_question_ans`, `password_hashed`, `cat1`, `cat2`, `cat3`, `last_login`, `last_login_ip`) VALUES
('05010137', 'SHASHI KANT KUNAL1', 'shashi', 'pintu07KUMAR', 'BT', 'YES', '2013-10-10 00:00:00', '2013-04-11 12:16:56', 'SHASHI KANT KUNAL1[shashi]', 'santosh_biswas', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('06010133', 'NAPOLEAN DANG', 'n.dang', 'uMubu6ugy', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'thesisadmin', 'pkdas', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('08010129', 'KURAKULA VENKATA NARENDRA', 'n.kurakula', 'yLeQunuru', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'thesisadmin', 'jatin', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('08010154', 'YAMBEM PUSKIN SINGH', 'y.singh', 'y8aDyJaqy', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'thesisadmin', 'pinaki', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('10610112', 'Mayank Agarwal', 'mayank.agl', 'abc123', 'BT', 'YES', '2013-11-30 00:00:00', '2013-10-01 00:00:00', 'Mayank Agarwal[mayank.agl]', 'santosh_biswas', 'YES', 5, 'deos', 'e99a18c428cb38d5f260853678922e03', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('8010106', 'ANUBHAV JEPH', 'a.jeph', 'a2a2aHuWa', 'BT', 'NO', NULL, '2013-04-12 00:00:00', 'thesisadmin', 'ranbir', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('8010113', 'CHETAN PRAKASH', 'c.prakash', 'uphack123', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-12 00:00:00', 'thesisadmin', 'asahu', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010101', 'ABHINANDAN NATH', 'n.abhinandan', 'sajith', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'sajith', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010102', 'ABHINAV SONKER', 'a.sonker', 'abhi786', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'pinaki', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010103', 'ADITYA KUMAR', 'aditya.k', 'EqS3putm', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ADITYA KUMAR[aditya.k]', 'saradhi', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010104', 'AKASH DEEP RAWAT', 'r.akash', 'sanabanatana', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'dgoswami', 'dgoswami', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010105', 'AKASH GUPTA', 'akash.g', 'better0307', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'AKASH GUPTA[akash.g]', 'sbnair', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010106', 'AKSHAY MADROSIYA', 'a.madrosiya', 'akshayuiu', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'AKSHAY MADROSIYA[a.madrosiya]', 'samit', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010107', 'ANCHAL CHOUBEY', 'anchal', 'jasmine', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'sukumar', 'sukumar', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010108', 'ANKIT JAISWAL', 'ankit.j', 'friends', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'ANKIT JAISWAL[ankit.j]', 'samit', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010109', 'ANKIT KUMAR', 'k.ankit', '42269782a', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ranbir', 'ranbir', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010110', 'ANURAG ANSHU', 'a.anshu', 'p1uldir1c', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ANURAG ANSHU[a.anshu]', 'saswata.sh', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010111', 'APOORV KUMAR', 'k.apoorv', 'ark11811', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'APOORV KUMAR[k.apoorv]', 'hemangee', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010112', 'APUL JAIN', 'apul', 'alchems123', 'BT', 'YES', '2013-04-14 00:00:00', '2013-04-11 12:16:56', 'sukumar', 'sukumar', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010113', 'AYUSH SYAL', 'a.syal', 'x2tLJude31', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'arijit', 'arijit', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010114', 'AYUSHI MATHUR', 'ayushi', 'Filmstar14', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'AYUSHI MATHUR[ayushi]', 'pinaki', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010115', 'DEEPAK SINGH NEGI', 'd.negi', 'uHa2ahype', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'ben', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010116', 'GAURAV RATHI', 'g.rathi', 'priyarathi', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'GAURAV RATHI[g.rathi]', 'ranbir', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010117', 'GUNJAN KUMAR', 'k.gunjan', 'fuckuocddco', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'GUNJAN KUMAR[k.gunjan]', 'saswata.sh', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010118', 'JASVINDAR SINGH SINGARIYA', 'jasvindar', 'yhumyruWy', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'deepkesh', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010119', 'JUHI BAGRODIA', 'b.juhi', 'jeenmata22', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 't.venkat', 't.venkat', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010120', 'K TEJA', 'k.teja', '9000699458', 'BT', 'YES', '2013-04-14 00:00:00', '2013-04-11 12:16:56', 'K TEJA[k.teja]', 'asahu', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010121', 'KARTIKEY GUPTA', 'kartikey', 'sachkasamna1', 'BT', 'YES', '2013-04-30 00:00:00', '2013-04-11 12:16:56', 'KARTIKEY GUPTA[kartikey]', 'ben', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010122', 'KULDEEP', 'k.kuldeep', 'kd5534kd', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'asahu', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010123', 'KULKARNI ANAND SUDHIR', 'k.sudhir', 'abc123', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'samit', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010124', 'N ESWARA PRASHANTH', 'n.prashanth', 'nlatha', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-11 12:16:56', 'sajith', 'sajith', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010125', 'N. VISHNU TEJA', 'n.teja', 'phaseshift', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'N. VISHNU TEJA[n.teja]', 'awekar', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010126', 'NAGA ROHIT S', 's.naga', 'Passw0rd', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'sukumar', 'sukumar', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010127', 'NAGENDRA RAM', 'nagendra', 'nagendra', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'NAGENDRA RAM[nagendra]', 'pkdas', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010128', 'NARENDRA KUMAR MEENA', 'm.narendra', 'btp0205', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'NARENDRA KUMAR MEENA[m.narendra]', 'hemangee', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010129', 'NARESH MEHRA', 'n.mehra', 'nancymyluv', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ranbir', 'ranbir', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010130', 'PARAG AGRAWAL', 'a.parag', 'KRfN1Z5w', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'PARAG AGRAWAL[a.parag]', 'saradhi', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010131', 'PASUNURI RAHUL', 'pasunuri', 'awzYRIcuzm', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'PASUNURI RAHUL[pasunuri]', 'pkdas', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010132', 'POOJA DUBEY', 'pooja', 'nice123', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'gb', 'gb', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010133', 'PRAGYA PARUL', 'pragya', 'manorama', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'PRAGYA PARUL[pragya]', 'dgoswami', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010134', 'PRAVIN KUMAR CHATURVEDI', 'c.pravin', 'pkn232', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'santosh_biswas', 'santosh_biswas', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010135', 'PURWAR SANKETH KISHAN', 'purwar', 'FRTDES', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'PURWAR SANKETH KISHAN[purwar]', 'santosh_biswas', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010136', 'RAHUL BHATNAGAR', 'rahul.br', 'rahul123', 'BT', 'YES', '2013-04-21 00:00:00', '2013-04-11 12:16:56', 'RAHUL BHATNAGAR[rahul.br]', 'dgoswami', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010137', 'RAJAT KHANDUJA', 'k.rajat', 'dnGSoC12', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'RAJAT KHANDUJA[k.rajat]', 'anand.ashish', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010138', 'RAJKUMAR SINGH', 's.rajkumar', 'jaimatakisa', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'sajith', 'sajith', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010139', 'RAMAN ANURAG', 'r.anurag', '9AgguSVc13', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'ranbir', 'ranbir', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010140', 'RAVI SETHIA', 'r.sethia', 'btpdupc1', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'RAVI SETHIA[r.sethia]', 'samit', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010141', 'RISHI BARUA', 'r.barua', 'glassy12', 'BT', 'YES', '2013-04-17 00:00:00', '2013-04-11 12:16:56', 'saradhi', 'saradhi', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010142', 'RISHI RAJ BORAH', 'r.borah', 'stmcTGYw0', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'RISHI RAJ BORAH[r.borah]', 'arijit', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010143', 'ROHIT RAJ', 'rohit.raj', '9508419037', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ROHIT RAJ[rohit.raj]', 'santosh_biswas', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010144', 'ROVIN BHANDARI', 'rovin', 'rainyb', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ROVIN BHANDARI[rovin]', 'svrao', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010145', 'SAURABH SAXENA', 'saurabh.s', 'saurabh123', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-11 12:16:56', 'pbhaduri', 'pbhaduri', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010146', 'SAURABH SINGLA', 's.singla', '9254001196', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SAURABH SINGLA[s.singla]', 'gb', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010147', 'SHAH AKHILESH KAILASHCHANDRA', 'shah', 'abhushah1', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SHAH AKHILESH KAILASHCHANDRA[shah]', 'gb', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010148', 'SHUBHAM TRIPATHI', 't.shubham', 'kvothe123', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SHUBHAM TRIPATHI[t.shubham]', 'anand.ashish', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010149', 'SHYAM SUNDER SINGH', 'shyam.ss', 'priyanka', 'BT', 'YES', '2013-04-14 00:00:00', '2013-04-11 12:16:56', 'SHYAM SUNDER SINGH[shyam.ss]', 'ranbir', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010150', 'SNEHLATA', 'snehlata', 'takeiteasy', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SNEHLATA[snehlata]', 'awekar', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010151', 'SRIKAKULAPU SATYA VARA PRASAD', 'srikakulapu', 'evaWyBahe', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'jatin', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010152', 'SUHAIL SHERIF', 'suhail', 'y2aTaTeZy', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'ben', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010153', 'SUMEET KUMAR SINGH', 's.sumeet', 'wnc72992009', 'BT', 'YES', '2013-04-16 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'awekar', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010154', 'SUNIL KUMAR', 'sunil.k', 'sunil3688', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SUNIL KUMAR[sunil.k]', 'asahu', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010155', 'SUNIL RATNU', 's.ratnu', 'jaimaakarni', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'SUNIL RATNU[s.ratnu]', 'pinaki', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010156', 'TEJINDER SINGH', 'tejinder', 'abeveheGa', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'pkdas', 'pkdas', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010157', 'VIBHUTI KUMAR', 'vibhuti', 'jaihanumanji', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-12 00:00:00', 'VIBHUTI KUMAR[vibhuti]', 'hemangee', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010158', 'VIRENDRA KUMAR', 'k.virendra', 'chrombtp', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'VIRENDRA KUMAR[k.virendra]', 'saradhi', 'YES', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010159', 'VULLI KRISHNA CHAITANYA', 'vulli', 'u3uge5ene', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'svrao', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010160', 'ANIK CHATTOPADHYAY', 'anik', 'onixendu', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ANIK CHATTOPADHYAY[anik]', 'pbhaduri', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010161', 'PRANAV GUPTA', 'g.pranav', 'jmpgaafb', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'PRANAV GUPTA[g.pranav]', 'anand.ashish', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010162', 'SIDHARTH CHANDRASHEKHAR PARDESHI', 's.pardeshi', 'BY9MKEfD', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SIDHARTH CHANDRASHEKHAR PARDESHI[s.pardeshi]', 'svrao', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010163', 'KARRI SWATHI', 'karri', 'naidu1', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'KARRI SWATHI[karri]', 'arijit', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010164', 'BHARAT KHATRI', 'b.khatri', 'khatri123', 'BT', 'YES', '2013-04-21 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'anand.ashish', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010165', 'AYUSH PAROLIA', 'a.parolia', 'pyarAyush91', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'sbnair', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010166', 'GUNDLAPALLI SRINIVAS', 'gundlapalli', 'wanted9421', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'GUNDLAPALLI SRINIVAS[gundlapalli]', 'svrao', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010167', 'VIKRAM KUMAR GOYAL', 'v.goyal', 'vikr2624', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'VIKRAM KUMAR GOYAL[v.goyal]', 'pkdas', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', ''),
('9010168', 'BEHARA MANI SHYAM PATRO', 'behara', 'beharasushma', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'BEHARA MANI SHYAM PATRO[behara]', 'sbnair', 'NO', 1, NULL, '', 'NULL', 'NULL', 'NULL', '0000-00-00 00:00:00', '');

--
-- Triggers `student`
--
DROP TRIGGER IF EXISTS `insert_permission_log`;
DELIMITER //
CREATE TRIGGER `insert_permission_log` AFTER UPDATE ON `student`
 FOR EACH ROW BEGIN
   IF(NEW.permission='YES' AND OLD.permission='NO') THEN
       insert into permission_log(advisor_id,permitted_to,permitted_at)values(NEW.last_modified_by,NEW.user_nm,now());
     
   END IF;
END
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
