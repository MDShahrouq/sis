-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2016 at 10:39 AM
-- Server version: 5.5.15
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstrator`
--

CREATE TABLE IF NOT EXISTS `adminstrator` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminstrator`
--

INSERT INTO `adminstrator` (`username`, `password`) VALUES
('ucc', '123');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `examno` varchar(22) NOT NULL,
  `compmath` varchar(255) NOT NULL,
  `deskpub` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `commskills` varchar(255) NOT NULL,
  `pchardware` varchar(255) NOT NULL,
  `examtitle` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `examno`, `compmath`, `deskpub`, `office`, `commskills`, `pchardware`, `examtitle`, `student`, `status`) VALUES
(10, 'ex01', 'C', 'A', 'A', 'A', 'A', 'Final Exam 2016', 'Azizi Daudy', 'PASS'),
(11, 'ex02', 'D', 'D', 'C', 'C', 'C', 'Final Exam 2016', 'Natalie Tabra', 'SUPP 2'),
(12, 'ex03', 'C', 'A', 'A', 'A', 'A', 'Final Exam 2016', 'Bwire Mashauri', 'PASS'),
(13, 'ex04', 'D', 'D', 'F', 'D', 'F', 'Final Exam 2016', 'Baraka Richard', 'DISCO'),
(14, 'ex05', 'C', 'C', 'C', 'C', 'D', 'Final Exam 2016', 'Iddy Shetui', 'SUPP 1'),
(15, 'ex06', 'C', 'C', 'C', 'C', 'C', 'Final Exam 2016', 'Mike Msanya', 'PASS'),
(16, 'ex07', 'C', 'B', 'B', 'B', 'A', 'Final Exam 2016', 'Jeremiah Mapunda', 'PASS'),
(17, 'ex08', 'F', 'F', 'F', 'F', 'F', 'Final Exam 2016', 'Selemani Mando', 'DISCO'),
(18, 'ex09', 'D', 'C', 'D', 'C', 'D', 'Final Exam 2016', 'Selemani Mwaisengela', 'SUPP 3'),
(19, 'ex10', 'C', 'C', 'A', 'A', 'A', 'Final Exam 2016', 'Steven Nyoka', 'PASS');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`) VALUES
(1, 'ex01', '123'),
(2, 'ex02', '890'),
(3, 'ex03', '456'),
(4, 'ex04', '321'),
(5, 'ex05', '654'),
(6, 'ex06', '098'),
(7, 'ex07', '123a'),
(8, 'ex08', '321a'),
(9, 'ex09', '456a'),
(10, 'ex10', '890c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
