-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2024 at 01:12 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hjdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `goldrate`
--

CREATE TABLE IF NOT EXISTS `goldrate` (
  `id` int(11) NOT NULL,
  `18k_1gm` int(11) NOT NULL,
  `22k_1gm` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldrate`
--

INSERT INTO `goldrate` (`id`, `18k_1gm`, `22k_1gm`, `updated_on`) VALUES
(1, 1, 1, '2024-07-25 06:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `goldrate_history`
--

CREATE TABLE IF NOT EXISTS `goldrate_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `18k_1gm` int(11) NOT NULL,
  `22k_1gm` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `goldrate_history`
--

INSERT INTO `goldrate_history` (`id`, `18k_1gm`, `22k_1gm`, `updated_on`, `updated_by`) VALUES
(2, 1, 1, '2024-07-25 06:35:08', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `account_status` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `account_type`, `account_status`) VALUES
('admin', 'admin', 'Administrator', 'ADMIN', 'Approved'),
('anshad5566', 'anshad5566', 'Anshad Mithilaj', 'ADMIN', 'Approved');
