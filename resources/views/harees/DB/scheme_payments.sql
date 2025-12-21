-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2025 at 03:54 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hjimsdb_localenv`
--

-- --------------------------------------------------------

--
-- Table structure for table `scheme_payments`
--

DROP TABLE IF EXISTS `scheme_payments`;
CREATE TABLE IF NOT EXISTS `scheme_payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `scheme_id` int NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `receipt_no` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `payment_method` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `transaction_id` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `scheme_id` (`scheme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scheme_payments`
--

INSERT INTO `scheme_payments` (`id`, `user_id`, `scheme_id`, `amount`, `payment_date`, `receipt_no`, `payment_method`, `transaction_id`, `created_at`) VALUES
(3, 1, 3, 2000.00, '2025-07-09', 'RCPT-686EA18E91FE7', NULL, NULL, '2025-07-09 17:06:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
