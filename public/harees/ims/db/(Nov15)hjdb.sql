-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 07:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `goldrate`
--

CREATE TABLE `goldrate` (
  `id` int(11) NOT NULL,
  `18k_1gm` int(11) NOT NULL,
  `22k_1gm` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `goldrate`
--

INSERT INTO `goldrate` (`id`, `18k_1gm`, `22k_1gm`, `updated_on`) VALUES
(1, 1, 1, '2024-07-25 01:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `goldrate_history`
--

CREATE TABLE `goldrate_history` (
  `id` int(11) NOT NULL,
  `18k_1gm` int(11) NOT NULL,
  `22k_1gm` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` varchar(110) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `goldrate_history`
--

INSERT INTO `goldrate_history` (`id`, `18k_1gm`, `22k_1gm`, `updated_on`, `updated_by`) VALUES
(2, 1, 1, '2024-07-25 01:05:08', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hlinks_category`
--

CREATE TABLE `hlinks_category` (
  `hlinks_cat_id` int(10) NOT NULL,
  `hlinks_cat_name` varchar(100) NOT NULL,
  `hlinks_updated_by` varchar(100) NOT NULL,
  `hlinks_updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hlinks_historys`
--

CREATE TABLE `hlinks_historys` (
  `hlinks_history_log_id` int(11) NOT NULL,
  `hlinks_updatedtable` text NOT NULL,
  `hlinks_action` text NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `hlinks_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hlinks_urls`
--

CREATE TABLE `hlinks_urls` (
  `hlinks_url_id` int(11) NOT NULL,
  `hlinks_category` varchar(100) NOT NULL,
  `hlinks_url_name` text NOT NULL,
  `hlinks_link` text NOT NULL,
  `hlinks_updated_by` int(11) NOT NULL,
  `hlinks_updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `account_status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `account_type`, `account_status`) VALUES
('admin', 'admin', 'Administrator', 'ADMIN', 'Approved'),
('anshad5566', 'anshad5566', 'Anshad Mithilaj', 'ADMIN', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `maintances`
--

CREATE TABLE `maintances` (
  `mid` int(11) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metal_rates`
--

CREATE TABLE `metal_rates` (
  `unqiue_code` int(10) NOT NULL,
  `type` varchar(200) NOT NULL,
  `rate` int(11) NOT NULL,
  `updated_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goldrate`
--
ALTER TABLE `goldrate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goldrate_history`
--
ALTER TABLE `goldrate_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hlinks_category`
--
ALTER TABLE `hlinks_category`
  ADD PRIMARY KEY (`hlinks_cat_id`);

--
-- Indexes for table `hlinks_historys`
--
ALTER TABLE `hlinks_historys`
  ADD PRIMARY KEY (`hlinks_history_log_id`);

--
-- Indexes for table `hlinks_urls`
--
ALTER TABLE `hlinks_urls`
  ADD PRIMARY KEY (`hlinks_url_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `maintances`
--
ALTER TABLE `maintances`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `metal_rates`
--
ALTER TABLE `metal_rates`
  ADD PRIMARY KEY (`unqiue_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goldrate_history`
--
ALTER TABLE `goldrate_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hlinks_category`
--
ALTER TABLE `hlinks_category`
  MODIFY `hlinks_cat_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hlinks_historys`
--
ALTER TABLE `hlinks_historys`
  MODIFY `hlinks_history_log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hlinks_urls`
--
ALTER TABLE `hlinks_urls`
  MODIFY `hlinks_url_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintances`
--
ALTER TABLE `maintances`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metal_rates`
--
ALTER TABLE `metal_rates`
  MODIFY `unqiue_code` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
