-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2014 at 04:51 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerd_email`
--

CREATE TABLE IF NOT EXISTS `registerd_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `browser` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registerd_email`
--

INSERT INTO `registerd_email` (`id`, `email`, `ip`, `country`, `city`, `latitude`, `longitude`, `browser`) VALUES
(4, 'salyani@salyani.com', '49.244.201.140', 'Nepal', 'Lalitpur', '27.6667', '85.3333', ''),
(5, 'bhomnath@salyani.com.np', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'Mozilla Firefox'),
(6, 'ramji@as.com', '49.244.201.140', 'Nepal', 'Lalitpur', '27.6667', '85.3333', 'Mozilla Firefox');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
