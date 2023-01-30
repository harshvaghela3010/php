-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2023 at 12:08 PM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

DROP TABLE IF EXISTS `addstudent`;
CREATE TABLE IF NOT EXISTS `addstudent` (
  `sname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  PRIMARY KEY (`photo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`sname`, `fname`, `mname`, `phone`, `email`, `photo`, `course`) VALUES
('qsxcdertf', 'wdfgthyujm', '[plkmnjn', '14587956320', 'yhtgbv@gmail.com', 'images/images.jfif', 'php'),
('qwerty', 'abc', 'zxcvbn', '9023394023', 'krishnadevsinhc@gmail.com', 'images/Screenshot (2).png', 'react native'),
('qwerty', 'ghjkl', '', '9023394023', 'abcdef@gmail.com', 'images/images (1).jfif', 'python');

-- --------------------------------------------------------

--
-- Table structure for table `addteacher`
--

DROP TABLE IF EXISTS `addteacher`;
CREATE TABLE IF NOT EXISTS `addteacher` (
  `name` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photos` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addteacher`
--

INSERT INTO `addteacher` (`name`, `qualification`, `phone`, `email`, `photos`, `course`) VALUES
('34tyyhgbvgrfv', 'dmeo', '9023394023', 'abcdef@gmail.com', 'images/images.jfif', 'python'),
('', '', '', '', 'images/', 'select');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `roll_no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_no` int(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `course` varchar(10) NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`roll_no`, `name`, `phone_no`, `email`, `course`) VALUES
(1, 'nandiniba', 1234567890, '123@gmail.com', 'php'),
(2, 'sadrtgjh', 1256987430, 'qwertyhaqwertyu@gmail.com', 'css');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL,
  `pswrd` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pswrd`) VALUES
('nandiniba', '2172002');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
