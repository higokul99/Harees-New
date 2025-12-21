-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2025 at 10:13 PM
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
-- Database: `hjdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `purity` varchar(50) DEFAULT NULL,
  `is_gold` tinyint(1) DEFAULT '0',
  `is_silver` tinyint(1) DEFAULT '0',
  `contains_diamond` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `purity`, `is_gold`, `is_silver`, `contains_diamond`, `created_at`, `updated_at`) VALUES
(1, 'Normal Silver', 'Standard silver without specific purity classification', NULL, 0, 1, 0, '2025-03-30 03:36:28', '2025-03-30 03:36:28'),
(2, '925 Silver', 'Sterling silver with 92.5% purity', '92.5% Silver', 0, 1, 0, '2025-03-30 03:36:28', '2025-03-30 03:36:28'),
(3, 'Rose Gold Silver', 'Rose gold-plated silver jewelry', NULL, 0, 1, 0, '2025-03-30 03:36:28', '2025-03-30 03:36:28'),
(4, '22K Gold', '22 Karat gold jewelry', '22K Gold', 1, 0, 0, '2025-03-30 03:36:28', '2025-03-30 03:36:28'),
(5, '18K Gold', '18 Karat gold jewelry', '18K Gold', 1, 0, 0, '2025-03-30 03:36:28', '2025-03-30 03:36:28'),
(6, '18K + Diamond', '18 Karat gold jewelry with diamond embellishments', '18K Gold', 1, 0, 1, '2025-03-30 03:36:28', '2025-03-30 03:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `category_short_codes`
--

DROP TABLE IF EXISTS `category_short_codes`;
CREATE TABLE IF NOT EXISTS `category_short_codes` (
  `cat_short_id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(5) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_short_id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goldrate`
--

DROP TABLE IF EXISTS `goldrate`;
CREATE TABLE IF NOT EXISTS `goldrate` (
  `id` int NOT NULL,
  `18k_1gm` int NOT NULL,
  `22k_1gm` int NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldrate`
--

INSERT INTO `goldrate` (`id`, `18k_1gm`, `22k_1gm`, `updated_on`) VALUES
(1, 7465, 9015, '2025-05-12 18:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `goldrate_history`
--

DROP TABLE IF EXISTS `goldrate_history`;
CREATE TABLE IF NOT EXISTS `goldrate_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `18k_1gm` int NOT NULL,
  `22k_1gm` int NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldrate_history`
--

INSERT INTO `goldrate_history` (`id`, `18k_1gm`, `22k_1gm`, `updated_on`, `updated_by`) VALUES
(2, 1, 1, '2024-07-25 01:05:08', 'admin'),
(3, 12, 12, '2025-02-08 06:20:52', 'admin'),
(4, 6000, 7000, '2025-02-08 06:54:28', 'admin'),
(5, 6000, 7000, '2025-02-08 09:59:16', 'admin'),
(6, 6610, 8020, '2025-03-06 07:11:51', 'admin'),
(7, 7300, 8815, '2025-04-16 06:21:21', 'admin'),
(8, 7405, 8945, '2025-04-18 12:43:20', 'gokul'),
(9, 7405, 8945, '2025-04-18 12:43:27', 'gokul'),
(10, 7405, 8945, '2025-04-18 12:43:32', 'gokul'),
(11, 7405, 8945, '2025-04-18 13:05:27', 'gokul'),
(12, 7405, 8945, '2025-04-18 13:05:53', 'gokul'),
(13, 7405, 8945, '2025-04-18 13:05:55', 'gokul'),
(14, 7405, 8945, '2025-04-18 13:06:30', 'gokul'),
(15, 7405, 8945, '2025-04-18 13:06:31', 'gokul'),
(16, 7405, 8945, '2025-04-18 13:06:37', 'gokul'),
(17, 7405, 8945, '2025-04-18 13:06:44', 'gokul'),
(18, 7405, 8945, '2025-04-18 13:25:12', 'gokul'),
(19, 7405, 8945, '2025-04-18 13:25:43', 'gokul'),
(20, 7405, 8945, '2025-04-18 13:34:34', 'gokul'),
(21, 7405, 8945, '2025-04-18 13:34:46', 'gokul'),
(22, 7405, 8945, '2025-04-18 13:34:49', 'gokul'),
(23, 7405, 8945, '2025-04-18 13:38:09', 'gokul'),
(24, 7405, 8945, '2025-04-18 13:38:19', 'gokul'),
(25, 7405, 8945, '2025-04-18 13:47:01', 'gokul'),
(26, 7405, 8945, '2025-04-18 13:47:13', 'gokul'),
(27, 7405, 8945, '2025-04-18 13:48:28', 'gokul'),
(28, 7105, 8545, '2025-04-18 13:50:21', 'gokul'),
(29, 7105, 8545, '2025-04-18 13:51:20', 'gokul'),
(30, 7105, 8545, '2025-04-18 13:53:07', 'gokul'),
(31, 7000, 8000, '2025-04-18 13:53:46', 'gokul'),
(32, 7405, 8945, '2025-04-18 13:54:02', 'gokul'),
(33, 7800, 9000, '2025-04-18 13:55:40', 'gokul'),
(34, 7800, 9000, '2025-04-18 14:02:10', 'gokul'),
(35, 7800, 9000, '2025-04-18 14:07:59', 'gokul'),
(36, 7800, 9000, '2025-04-18 14:14:31', 'gokul'),
(37, 7800, 9000, '2025-04-18 14:17:30', 'gokul'),
(38, 7800, 9000, '2025-04-18 14:18:51', 'gokul'),
(39, 7800, 9000, '2025-04-18 14:20:10', 'gokul'),
(40, 7800, 9000, '2025-04-18 14:20:56', 'gokul'),
(41, 7800, 9000, '2025-04-18 14:26:18', 'gokul'),
(42, 7800, 9000, '2025-04-18 14:27:10', 'gokul'),
(43, 7800, 9000, '2025-04-18 14:30:28', 'gokul'),
(44, 7800, 9000, '2025-04-18 14:32:29', 'gokul'),
(45, 7800, 9000, '2025-04-18 14:33:39', 'gokul'),
(46, 7800, 9000, '2025-04-18 14:34:27', 'gokul'),
(47, 7800, 9000, '2025-04-18 14:37:08', 'gokul'),
(48, 7800, 9000, '2025-04-18 14:37:29', 'gokul'),
(49, 7800, 9000, '2025-04-18 14:38:42', 'gokul'),
(50, 7800, 9000, '2025-04-18 14:39:39', 'gokul'),
(51, 7800, 9000, '2025-04-18 14:40:14', 'gokul'),
(52, 7800, 9100, '2025-04-18 14:41:48', 'gokul'),
(53, 7800, 9100, '2025-04-18 14:58:59', 'gokul'),
(54, 7800, 9100, '2025-04-18 15:00:28', 'gokul'),
(55, 7800, 9100, '2025-04-18 15:01:40', 'gokul'),
(56, 7800, 9100, '2025-04-18 15:01:43', 'gokul'),
(57, 7800, 9100, '2025-04-18 15:01:45', 'gokul'),
(58, 7800, 9100, '2025-04-18 15:03:32', 'gokul'),
(59, 7800, 9100, '2025-04-18 15:03:58', 'gokul'),
(60, 7800, 9100, '2025-04-18 15:04:07', 'gokul'),
(61, 7800, 9100, '2025-04-18 15:04:21', 'gokul'),
(62, 7800, 9100, '2025-04-18 15:04:23', 'gokul'),
(63, 7800, 9100, '2025-04-18 15:04:34', 'gokul'),
(64, 7800, 9100, '2025-04-18 15:04:46', 'gokul'),
(65, 7800, 9100, '2025-04-18 15:04:56', 'gokul'),
(66, 7800, 9100, '2025-04-18 15:05:07', 'gokul'),
(67, 7800, 9100, '2025-04-18 15:05:16', 'gokul'),
(68, 7800, 9100, '2025-04-18 15:05:24', 'gokul'),
(69, 7800, 9100, '2025-04-18 15:05:34', 'gokul'),
(70, 7800, 9100, '2025-04-18 15:05:44', 'gokul'),
(71, 7800, 9100, '2025-04-18 15:05:54', 'gokul'),
(72, 7800, 9100, '2025-04-18 15:06:31', 'gokul'),
(73, 7800, 9100, '2025-04-18 15:06:42', 'gokul'),
(74, 7800, 9100, '2025-04-18 15:06:50', 'gokul'),
(75, 7800, 9100, '2025-04-18 15:06:52', 'gokul'),
(76, 7800, 9100, '2025-04-18 15:07:02', 'gokul'),
(77, 7800, 9100, '2025-04-18 15:07:13', 'gokul'),
(78, 7800, 9100, '2025-04-18 15:07:22', 'gokul'),
(79, 7800, 9100, '2025-04-18 15:07:24', 'gokul'),
(80, 7800, 9100, '2025-04-18 15:07:40', 'gokul'),
(81, 7800, 9100, '2025-04-18 15:07:46', 'gokul'),
(82, 7800, 9100, '2025-04-18 15:08:25', 'gokul'),
(83, 7800, 9100, '2025-04-19 05:41:46', 'gokul'),
(84, 7805, 8945, '2025-04-19 05:42:10', 'gokul'),
(85, 7805, 8945, '2025-04-19 05:51:22', 'gokul'),
(86, 7805, 8945, '2025-04-19 05:53:24', 'gokul'),
(87, 7805, 8945, '2025-04-19 06:23:10', 'gokul'),
(88, 7805, 8945, '2025-04-23 04:15:20', 'gokul'),
(89, 7465, 9015, '2025-04-23 17:46:54', 'gokul'),
(90, 7465, 9015, '2025-04-23 18:11:19', 'gokul'),
(91, 7465, 9015, '2025-04-23 18:14:38', 'gokul'),
(92, 7465, 9015, '2025-04-23 18:17:22', 'gokul'),
(93, 7465, 9015, '2025-04-23 18:17:41', 'gokul'),
(94, 7465, 9015, '2025-04-23 18:19:18', 'gokul'),
(95, 7465, 9015, '2025-04-23 18:19:46', 'gokul'),
(96, 7465, 9015, '2025-04-23 18:20:14', 'gokul'),
(97, 7465, 9015, '2025-04-23 18:20:28', 'gokul'),
(98, 7455, 9045, '2025-05-11 05:35:20', 'admin'),
(99, 7465, 9015, '2025-05-12 18:14:57', 'gokul'),
(100, 7465, 9015, '2025-05-12 18:22:44', 'gokul'),
(101, 7465, 9015, '2025-05-12 18:23:02', 'gokul'),
(102, 7465, 9015, '2025-05-12 18:24:30', 'gokul'),
(103, 7465, 9015, '2025-05-12 18:26:40', 'gokul'),
(104, 7465, 9015, '2025-05-12 18:29:03', 'gokul'),
(105, 7465, 9015, '2025-05-12 18:30:31', 'gokul'),
(106, 7465, 9015, '2025-05-12 18:31:06', 'gokul'),
(107, 7465, 9015, '2025-05-12 18:34:47', 'gokul'),
(108, 7465, 9015, '2025-05-12 18:35:15', 'gokul');

-- --------------------------------------------------------

--
-- Table structure for table `hlinks_category`
--

DROP TABLE IF EXISTS `hlinks_category`;
CREATE TABLE IF NOT EXISTS `hlinks_category` (
  `hlinks_cat_id` int NOT NULL AUTO_INCREMENT,
  `hlinks_cat_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `hlinks_updated_by` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `hlinks_updated_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`hlinks_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hlinks_historys`
--

DROP TABLE IF EXISTS `hlinks_historys`;
CREATE TABLE IF NOT EXISTS `hlinks_historys` (
  `hlinks_history_log_id` int NOT NULL AUTO_INCREMENT,
  `hlinks_updatedtable` text COLLATE utf8mb4_general_ci NOT NULL,
  `hlinks_action` text COLLATE utf8mb4_general_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `hlinks_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`hlinks_history_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hlinks_urls`
--

DROP TABLE IF EXISTS `hlinks_urls`;
CREATE TABLE IF NOT EXISTS `hlinks_urls` (
  `hlinks_url_id` int NOT NULL AUTO_INCREMENT,
  `hlinks_category` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `hlinks_url_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `hlinks_link` text COLLATE utf8mb4_general_ci NOT NULL,
  `hlinks_updated_by` int NOT NULL,
  `hlinks_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`hlinks_url_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
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

-- --------------------------------------------------------

--
-- Table structure for table `log_table`
--

DROP TABLE IF EXISTS `log_table`;
CREATE TABLE IF NOT EXISTS `log_table` (
  `log_id` int NOT NULL AUTO_INCREMENT,
  `action` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `action_by` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintances`
--

DROP TABLE IF EXISTS `maintances`;
CREATE TABLE IF NOT EXISTS `maintances` (
  `mid` int NOT NULL AUTO_INCREMENT,
  `details` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metals`
--

DROP TABLE IF EXISTS `metals`;
CREATE TABLE IF NOT EXISTS `metals` (
  `metal_id` int NOT NULL AUTO_INCREMENT,
  `code` char(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`metal_id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `metals`
--

INSERT INTO `metals` (`metal_id`, `code`, `name`) VALUES
(1, 'G', 'Gold'),
(2, 'S', 'Silver');

-- --------------------------------------------------------

--
-- Table structure for table `metal_rates`
--

DROP TABLE IF EXISTS `metal_rates`;
CREATE TABLE IF NOT EXISTS `metal_rates` (
  `unqiue_code` int NOT NULL AUTO_INCREMENT,
  `type` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `rate` int NOT NULL,
  `updated_on` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`unqiue_code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metal_rates`
--

INSERT INTO `metal_rates` (`unqiue_code`, `type`, `rate`, `updated_on`) VALUES
(1, 'NormalSilver', 100, '0000-00-00 00:00:00.000000'),
(2, '925Silver', 350, '0000-00-00 00:00:00.000000'),
(3, 'RoseGoldSilver', 450, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `ornament_types`
--

DROP TABLE IF EXISTS `ornament_types`;
CREATE TABLE IF NOT EXISTS `ornament_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ornament_types`
--

INSERT INTO `ornament_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ring', 'Ring', '2025-04-24 11:05:49', '2025-04-24 11:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `products_rosegoldsilver`
--

DROP TABLE IF EXISTS `products_rosegoldsilver`;
CREATE TABLE IF NOT EXISTS `products_rosegoldsilver` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int NOT NULL,
  `ornament_type_id` text NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stock_quantity` int NOT NULL,
  `sku` varchar(100) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  `color` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Unisex') NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_codes`
--

DROP TABLE IF EXISTS `product_codes`;
CREATE TABLE IF NOT EXISTS `product_codes` (
  `product_code_id` int NOT NULL AUTO_INCREMENT,
  `p1_brand` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p2_metal` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p3_purity` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p4_cat` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p5_uniquecode` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `full_code` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_code_id`),
  UNIQUE KEY `part5` (`p5_uniquecode`),
  UNIQUE KEY `full_code` (`full_code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_codes`
--

INSERT INTO `product_codes` (`product_code_id`, `p1_brand`, `p2_metal`, `p3_purity`, `p4_cat`, `p5_uniquecode`, `full_code`, `created_at`) VALUES
(1, 'HJ', 'S', 'S850', 'Anklets', '1', '', '2025-05-14 02:41:50'),
(2, 'HJ', 'S', 'S850', 'Anklets', '2', 'HJSS850Anklets000002', '2025-05-14 02:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_code_prefix`
--

DROP TABLE IF EXISTS `product_code_prefix`;
CREATE TABLE IF NOT EXISTS `product_code_prefix` (
  `pc_prefix_id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `description` text,
  PRIMARY KEY (`pc_prefix_id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_code_prefix`
--

INSERT INTO `product_code_prefix` (`pc_prefix_id`, `code`, `description`) VALUES
(1, 'HJ', 'Harees Jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `product_media`
--

DROP TABLE IF EXISTS `product_media`;
CREATE TABLE IF NOT EXISTS `product_media` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `media_url` text NOT NULL,
  `media_type` enum('image','video') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_products_bangles`
--

DROP TABLE IF EXISTS `rosegold_products_bangles`;
CREATE TABLE IF NOT EXISTS `rosegold_products_bangles` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weight` decimal(10,5) DEFAULT NULL,
  `image_loc` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rosegold_products_bangles`
--

INSERT INTO `rosegold_products_bangles` (`id`, `name`, `weight`, `image_loc`, `gender`) VALUES
(1, 'Rose Gold Silver Bangle', 11.09000, 'Internalproduct_imagesrose-goldbangles36.png', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_products_bracelet`
--

DROP TABLE IF EXISTS `rosegold_products_bracelet`;
CREATE TABLE IF NOT EXISTS `rosegold_products_bracelet` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weight` decimal(10,5) DEFAULT NULL,
  `image_loc` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_products_chain`
--

DROP TABLE IF EXISTS `rosegold_products_chain`;
CREATE TABLE IF NOT EXISTS `rosegold_products_chain` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weight` decimal(10,5) DEFAULT NULL,
  `image_loc` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_products_earring`
--

DROP TABLE IF EXISTS `rosegold_products_earring`;
CREATE TABLE IF NOT EXISTS `rosegold_products_earring` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weight` decimal(10,5) DEFAULT NULL,
  `image_loc` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_products_ring`
--

DROP TABLE IF EXISTS `rosegold_products_ring`;
CREATE TABLE IF NOT EXISTS `rosegold_products_ring` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weight` decimal(10,5) DEFAULT NULL,
  `image_loc` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_products_studs`
--

DROP TABLE IF EXISTS `rosegold_products_studs`;
CREATE TABLE IF NOT EXISTS `rosegold_products_studs` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weight` decimal(10,5) DEFAULT NULL,
  `image_loc` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_categories`
--

DROP TABLE IF EXISTS `silver_categories`;
CREATE TABLE IF NOT EXISTS `silver_categories` (
  `sil_cat_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `description` text,
  PRIMARY KEY (`sil_cat_id`),
  UNIQUE KEY `sil_cat_id` (`sil_cat_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `silver_categories`
--

INSERT INTO `silver_categories` (`sil_cat_id`, `name`, `code`, `description`) VALUES
(1, 'Necklaces', 'NK', 'Includes all types of silver necklaces'),
(2, 'Pendants', 'PN', 'Variety of silver pendants'),
(3, 'Bracelets', 'BR', 'Includes bangles, cuffs, chain and charm bracelets'),
(4, 'Anklets', 'AK', 'Anklets for women and kids'),
(5, 'Kada', 'KD', 'Traditional and designer kada styles'),
(6, 'Bangles', 'BG', 'Rigid, circular silver bands'),
(7, 'Rings', 'RG', 'Silver rings including bands and gemstone rings'),
(8, 'Earrings', 'ER', 'All styles of silver earrings'),
(9, 'Studs', 'SD', 'Small, simple silver stud earrings'),
(10, 'Other Accessories', 'OO', 'Miscellaneous silver items like brooches, cufflinks, pins');

-- --------------------------------------------------------

--
-- Table structure for table `silver_metals`
--

DROP TABLE IF EXISTS `silver_metals`;
CREATE TABLE IF NOT EXISTS `silver_metals` (
  `silver_metal_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `metal_id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`silver_metal_id`),
  UNIQUE KEY `id` (`silver_metal_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_metals`
--

INSERT INTO `silver_metals` (`silver_metal_id`, `metal_id`, `name`, `code`, `description`) VALUES
(1, 2, 'Standard Silver', 'S850', 'Standard silver used for traditional jewellery'),
(2, 2, '925 Sterling Silver', 'S925', 'Sterling silver, 92.5% pure silver'),
(3, 2, 'Rose Gold Silver', 'R925', 'Silver with a rose gold-toned finish');

-- --------------------------------------------------------

--
-- Table structure for table `silver_products`
--

DROP TABLE IF EXISTS `silver_products`;
CREATE TABLE IF NOT EXISTS `silver_products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_description` text,
  `sku` varchar(25) NOT NULL,
  `category` varchar(50) NOT NULL,
  `metal_type` varchar(50) NOT NULL,
  `model` varchar(100) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `additional_images` text,
  `weight` decimal(10,2) DEFAULT NULL,
  `dimensions` varchar(255) DEFAULT NULL,
  `silver_purity` varchar(255) DEFAULT NULL,
  `plating` varchar(255) DEFAULT NULL,
  `hallmark` varchar(255) DEFAULT NULL,
  `gemstones` text,
  `setting_type` varchar(255) DEFAULT NULL,
  `finish` varchar(255) DEFAULT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `sale_start_date` date DEFAULT NULL,
  `sale_end_date` date DEFAULT NULL,
  `stock_quantity` int DEFAULT '0',
  `is_available` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `meta_keywords` text,
  `meta_description` text,
  `customer_reviews_average` decimal(3,2) DEFAULT NULL,
  `number_of_reviews` int DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `silver_products`
--

INSERT INTO `silver_products` (`product_id`, `product_name`, `product_description`, `sku`, `category`, `metal_type`, `model`, `size`, `price`, `main_image`, `additional_images`, `weight`, `dimensions`, `silver_purity`, `plating`, `hallmark`, `gemstones`, `setting_type`, `finish`, `sale_price`, `sale_start_date`, `sale_end_date`, `stock_quantity`, `is_available`, `created_at`, `updated_at`, `meta_keywords`, `meta_description`, `customer_reviews_average`, `number_of_reviews`) VALUES
(1, 'x', 'x', 'SIL-STE-NK-S-4480', 'Necklace', 'Silver', 'Sterling Silver', 'S', 333.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2025-02-15 09:19:08', '2025-02-15 09:19:08', NULL, NULL, NULL, NULL),
(2, 'rg', 'rg', '22K-SIN-RG-M-7854', 'Ring', '22K Gold', 'Singapore', 'M', 44444.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2025-02-15 09:20:28', '2025-02-15 09:20:28', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_anklets`
--

DROP TABLE IF EXISTS `silver_products_anklets`;
CREATE TABLE IF NOT EXISTS `silver_products_anklets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_bangle`
--

DROP TABLE IF EXISTS `silver_products_bangle`;
CREATE TABLE IF NOT EXISTS `silver_products_bangle` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_bracelet`
--

DROP TABLE IF EXISTS `silver_products_bracelet`;
CREATE TABLE IF NOT EXISTS `silver_products_bracelet` (
  `sil_bracelet_id` int NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sil_bracelet_id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_chain`
--

DROP TABLE IF EXISTS `silver_products_chain`;
CREATE TABLE IF NOT EXISTS `silver_products_chain` (
  `sil_chain_id` int NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `length` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sil_chain_id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_earring`
--

DROP TABLE IF EXISTS `silver_products_earring`;
CREATE TABLE IF NOT EXISTS `silver_products_earring` (
  `sil_earring_id` int NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sil_earring_id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_kada`
--

DROP TABLE IF EXISTS `silver_products_kada`;
CREATE TABLE IF NOT EXISTS `silver_products_kada` (
  `sil_kada_id` int NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sil_kada_id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_necklace`
--

DROP TABLE IF EXISTS `silver_products_necklace`;
CREATE TABLE IF NOT EXISTS `silver_products_necklace` (
  `sil_necklace_id` int NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `length` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sil_necklace_id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_pendants`
--

DROP TABLE IF EXISTS `silver_products_pendants`;
CREATE TABLE IF NOT EXISTS `silver_products_pendants` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_products_ring`
--

DROP TABLE IF EXISTS `silver_products_ring`;
CREATE TABLE IF NOT EXISTS `silver_products_ring` (
  `sil_ring_id` int NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `ring_size` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sil_ring_id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table ` silver_products_studs`
--

DROP TABLE IF EXISTS ` silver_products_studs`;
CREATE TABLE IF NOT EXISTS ` silver_products_studs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `silver_metal_id` int NOT NULL,
  `sil_cat_id` int NOT NULL,
  `sil_sub_cat_id` int DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` decimal(10,2) NOT NULL,
  `stone_or_bead` tinyint(1) DEFAULT '0',
  `stone_type` varchar(100) DEFAULT NULL,
  `quantity_available` int DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `making_charges` decimal(10,2) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `product_code` (`product_code`),
  KEY `silver_metal_id` (`silver_metal_id`),
  KEY `sil_cat_id` (`sil_cat_id`),
  KEY `sil_sub_cat_id` (`sil_sub_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_sub_categories`
--

DROP TABLE IF EXISTS `silver_sub_categories`;
CREATE TABLE IF NOT EXISTS `silver_sub_categories` (
  `sil_sub_cat_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sil_cat_id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text,
  PRIMARY KEY (`sil_sub_cat_id`),
  UNIQUE KEY `sil_sub_cat_id` (`sil_sub_cat_id`),
  KEY `sil_cat_id` (`sil_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `silver_sub_categories`
--

INSERT INTO `silver_sub_categories` (`sil_sub_cat_id`, `sil_cat_id`, `name`, `description`) VALUES
(1, 1, 'Chain Necklaces', NULL),
(2, 1, 'Statement Necklaces', NULL),
(3, 1, 'Layering Necklaces', NULL),
(4, 1, 'Choker Necklaces', NULL),
(5, 1, 'Collar Necklaces', NULL),
(6, 1, 'Beaded Necklaces', NULL),
(7, 2, 'Solitaire Pendants', NULL),
(8, 2, 'Charm Pendants', NULL),
(9, 2, 'Religious Pendants', NULL),
(10, 2, 'Initial Pendants', NULL),
(11, 2, 'Animal Pendants', NULL),
(12, 2, 'Abstract Pendants', NULL),
(13, 2, 'Locket Pendants', NULL),
(14, 2, 'Slide Pendants', NULL),
(15, 3, 'Chain Bracelets', NULL),
(16, 3, 'Charm Bracelets', NULL),
(17, 3, 'Cuff Bracelets', NULL),
(18, 3, 'Bangle Bracelets', NULL),
(19, 3, 'Link Bracelets', NULL),
(20, 3, 'Tennis Bracelets', NULL),
(21, 3, 'Beaded Bracelets', NULL),
(22, 4, 'Chain Anklets', NULL),
(23, 4, 'Charm Anklets', NULL),
(24, 4, 'Beaded Anklets', NULL),
(25, 4, 'Anklets with Pendants', NULL),
(26, 4, 'Adjustable Anklets', NULL),
(27, 7, 'Bands', NULL),
(28, 7, 'Solitaire Rings', NULL),
(29, 7, 'Gemstone Rings', NULL),
(30, 7, 'Cocktail Rings', NULL),
(31, 7, 'Eternity Bands', NULL),
(32, 7, 'Toe Rings', NULL),
(33, 8, 'Stud Earrings', NULL),
(34, 8, 'Hoop Earrings', NULL),
(35, 8, 'Drop Earrings', NULL),
(36, 8, 'Dangle Earrings', NULL),
(37, 8, 'Ear Cuffs', NULL),
(38, 8, 'Ear Climbers', NULL),
(39, 8, 'Earring Sets', NULL),
(40, 10, 'Brooches', NULL),
(41, 10, 'Pins', NULL),
(42, 10, 'Cufflinks', NULL),
(43, 10, 'Tie Clips', NULL),
(44, 10, 'Navel Rings', NULL),
(45, 10, 'Lip Rings', NULL),
(46, 1, 'General', NULL),
(47, 2, 'General', NULL),
(55, 6, 'General', NULL),
(54, 5, 'General', NULL),
(53, 4, 'General', NULL),
(52, 3, 'General', NULL),
(56, 7, 'General', NULL),
(57, 8, 'General', NULL),
(58, 9, 'General', NULL),
(59, 10, 'General', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `supplier_id` int NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `contact_person`, `address`, `city`, `state`, `zip_code`, `country`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'SilverDummy', 'Silver Dummy', 'x', 'x', 'xc', '123456', 'India', '6666666666', 'dummy@gmail.com', '2025-02-15 06:48:44', '2025-02-15 07:02:53'),
(2, 'SilverDummy', 'Silver Dummy', 'x', 'x', 'x', '123456', 'India', '6666666666', 'dummy@gmail.com', '2025-02-15 06:52:17', '2025-02-15 06:52:17'),
(3, 'Silver Sup 2', 'Suppiler', 'x', 'x', 'x', '123456', 's', '5555555555', 'd@g.c', '2025-02-15 06:56:01', '2025-02-15 06:56:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
