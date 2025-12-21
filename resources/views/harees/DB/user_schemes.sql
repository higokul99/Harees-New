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
-- Table structure for table `user_schemes`
--

DROP TABLE IF EXISTS `user_schemes`;
CREATE TABLE IF NOT EXISTS `user_schemes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `scheme_type` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `scheme_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `monthly_amount` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `months_completed` int DEFAULT '0',
  `status` enum('active','completed','cancelled') COLLATE utf8mb4_general_ci DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_schemes`
--

INSERT INTO `user_schemes` (`id`, `user_id`, `scheme_type`, `scheme_name`, `monthly_amount`, `start_date`, `months_completed`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'C', 'Elite', 2000.00, '2025-07-09', 0, 'active', '2025-07-09 17:06:22', '2025-07-09 17:06:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
