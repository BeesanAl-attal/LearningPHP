-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2023 at 09:43 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `Empno` int(10) NOT NULL,
  `Ename` varchar(10) NOT NULL,
  `Adress` varchar(10) NOT NULL,
  `Salary` int(10) NOT NULL,
  `deptno` int(10) NOT NULL,
  PRIMARY KEY (`Empno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`Empno`, `Ename`, `Adress`, `Salary`, `deptno`) VALUES
(1, 'Ali', 'Amman', 400, 10),
(2, 'Maha', 'Amman', 300, 20),
(3, 'Alia', 'Amman', 500, 10),
(4, 'Mona', 'Amman', 450, 10),
(5, 'Maha', 'Amman', 600, 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
