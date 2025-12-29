-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2025 at 05:01 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u784516105_hareesimsdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_anklets`
--

CREATE TABLE `18kdgold_product_anklets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_bangles`
--

CREATE TABLE `18kdgold_product_bangles` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_bracelets`
--

CREATE TABLE `18kdgold_product_bracelets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_chains`
--

CREATE TABLE `18kdgold_product_chains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_earrings`
--

CREATE TABLE `18kdgold_product_earrings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_fancychains`
--

CREATE TABLE `18kdgold_product_fancychains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_necklaces`
--

CREATE TABLE `18kdgold_product_necklaces` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kdgold_product_necklaces`
--

INSERT INTO `18kdgold_product_necklaces` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG18DNK000001', 0, 1, 'Diamond Necklace from Harees', '18 KT Gold and diamond necklace from Harees Jewellery', 1, 6, 1, NULL, 'Female', 'Adult Size', 2.55600, 2.58000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 1, '', 0.12000, 24, 'Excellent', '0', 'FL', 'Round', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000001.webp', 'product_images/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000001.png', NULL, '', '', '', '2025-06-28 17:13:35', '2025-06-28 18:24:33', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG18DNK000002', 0, 0, '', NULL, 1, 6, 1, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000002.webp', 'product_images/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000002.png', NULL, '', '', '', '2025-06-28 17:56:28', '2025-06-28 17:56:28', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18DNK000003', 0, 1, 'Diamond Necklace', '', 1, 6, 1, NULL, 'Female', 'Adult Size', 3.67800, 3.74000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 1, '', 0.31000, 37, '', '0', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000003.webp', 'product_images/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000003.png', NULL, '', '', '', '2025-06-28 17:59:42', '2025-06-28 18:27:31', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18DNK000004', 0, 1, 'Diamonds Necklace', '', 1, 6, 1, NULL, 'Female', 'Adult Size', 3.67800, 3.81300, NULL, 0, NULL, '', '', NULL, NULL, NULL, 1, '', 0.38300, 18, '', '0', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000004.webp', 'product_images/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000004.jpg', NULL, '', '', '', '2025-06-28 18:09:09', '2025-06-28 18:23:00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18DNK000005', 0, 1, 'Diamond necklace', '', 1, 6, 1, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000005.webp', 'product_images/gold/18kd_gold/18kdgold_product_necklaces/HJGG18DNK000005.jpg', NULL, '', '', '', '2025-06-28 21:31:35', '2025-06-28 21:31:35', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_nosepins`
--

CREATE TABLE `18kdgold_product_nosepins` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_pendants`
--

CREATE TABLE `18kdgold_product_pendants` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_rings`
--

CREATE TABLE `18kdgold_product_rings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kdgold_product_rings`
--

INSERT INTO `18kdgold_product_rings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(3, 'HJGG18DRG000001', 0, 1, 'S Shaped 18K Gold Diamond Rings', 'S Shaped 18K Gold Diamond Rings', 1, 6, 7, NULL, 'Female', 'Adult Size', 0.78000, 0.78000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/gold/18kd_gold/18kdgold_product_rings/HJGG18DRG000001.png', NULL, '', '', '', '2025-05-25 20:51:36', '2025-05-25 20:51:36', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18DRG000002', 0, 0, '', NULL, 1, 6, 7, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2025-05-25 20:52:59', '2025-05-25 20:52:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18DRG000003', 0, 0, '', NULL, 1, 6, 7, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2025-05-25 20:58:33', '2025-05-25 20:58:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18DRG000004', 0, 0, '', NULL, 1, 6, 7, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2025-05-25 20:58:36', '2025-05-25 20:58:36', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG18DRG000005', 0, 0, '', NULL, 1, 6, 7, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2025-05-25 21:00:03', '2025-05-25 21:00:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG18DRG000006', 0, 0, '', NULL, 1, 6, 7, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2025-05-25 21:01:03', '2025-05-25 21:01:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG18DRG000007', 0, 0, '', NULL, 1, 6, 7, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2025-05-25 21:01:23', '2025-05-25 21:01:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG18DRG000008', 0, 0, '', NULL, 1, 6, 7, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2025-05-25 21:04:13', '2025-05-25 21:04:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG18DRG000009', 0, 1, 'Diamonds Ring - 18K Gold & Diamonds', 'Diamonds Ring - 18K Gold & Diamonds', 1, 6, 7, NULL, 'Female', 'Adult Size', 2.05000, 2.08000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/gold/18kd_gold/18kdgold_product_rings/HJGG18DRG000009.jpg', NULL, '', '', '', '2025-05-25 21:05:51', '2025-05-25 21:05:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG18DRG000010', 0, 0, '', NULL, 1, 6, 7, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/gold/18kd_gold/18kdgold_product_rings/HJGG18DRG000010.jpg', NULL, '', '', '', '2025-06-11 02:15:54', '2025-06-11 02:15:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_secondstuds`
--

CREATE TABLE `18kdgold_product_secondstuds` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kdgold_product_studs`
--

CREATE TABLE `18kdgold_product_studs` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_anklets`
--

CREATE TABLE `18kgold_product_anklets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_anklets`
--

INSERT INTO `18kgold_product_anklets` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG18KAK000001', 0, 90, '18k Anklets', '18k Anklets', 1, 4, 4, NULL, 'Female', 'Adult Size', 6.10000, 6.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000001.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000001.png', NULL, '', '', '', '2025-06-09 17:14:27', '2025-06-09 17:14:27', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG18KAK000002', 0, 100, '18k Anklets', '18k Anklets', 1, 4, 4, NULL, 'Female', 'Kids Size', 3.73000, 3.73000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000002.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000002.png', NULL, '', '', '', '2025-06-09 17:15:14', '2025-06-09 17:15:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18KAK000003', 0, 1, '18K Gold Anklet', '18K Gold Anklet from Harees Jewellery', 1, 4, 4, NULL, 'Female', 'Adult Size', 3.28000, 3.28000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000003.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000003.png', NULL, '', '', '', '2025-06-11 18:58:07', '2025-06-11 18:58:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18KAK000004', 0, 1, '18K Gold Anklet', '', 1, 4, 4, NULL, 'Female', 'Adult Size', 4.01200, 4.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000004.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000004.png', NULL, '', '', '', '2025-06-11 19:05:55', '2025-06-11 19:05:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18KAK000005', 0, 1, '18K Gold Anklet', '', 1, 4, 4, NULL, 'Female', 'Adult Size', 3.87000, 4.49000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000005.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000005.png', NULL, '', '', '', '2025-06-11 19:13:28', '2025-06-11 19:13:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG18KAK000006', 0, 1, '18K Gold Anklet', '', 1, 4, 4, NULL, 'Female', 'Adult Size', 5.50000, 5.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000006.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000006.png', NULL, '', '', '', '2025-06-11 19:16:13', '2025-06-11 19:16:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG18KAK000007', 0, 1, '18K Gold Anklet', '', 1, 4, 4, NULL, 'Female', 'Adult Size', 6.29000, 6.29000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000007.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000007.png', NULL, '', '', '', '2025-06-11 19:17:54', '2025-06-11 19:17:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG18KAK000008', 0, 1, '18K Gold Anklet', '', 1, 4, 4, NULL, 'Female', 'Adult Size', 5.54000, 5.58000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000008.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000008.png', NULL, '', '', '', '2025-06-11 19:20:04', '2025-06-11 19:20:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG18KAK000009', 0, 0, '18K Gold Anklet', '', 1, 4, 4, NULL, 'Female', 'Adult Size', 3.96000, 4.58000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000009.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000009.png', NULL, '', '', '', '2025-06-11 19:24:19', '2025-06-11 19:24:19', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG18KAK000010', 0, 0, '18K Gold Anklet', '', 1, 4, 4, NULL, 'Female', 'Adult Size', 4.82000, 5.24000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000010.webp', 'product_images/gold/18k_gold/18kgold_product_anklets/HJGG18KAK000010.png', NULL, '', '', '', '2025-06-11 19:27:16', '2025-06-11 19:27:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_bangles`
--

CREATE TABLE `18kgold_product_bangles` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_bangles`
--

INSERT INTO `18kgold_product_bangles` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(4, 'HJGG18KBG000001', 1, 70, 'Bangle', 'Bangle', 1, 4, 6, NULL, 'Female', '', 5.60000, 6.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000001.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000001.jpg', NULL, '', '', '', '2025-06-09 10:14:38', '2025-06-09 10:14:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18KBG000002', 0, 20, 'Bangle', 'Bangle collections', 1, 4, 6, NULL, 'Female', 'Adult Size', 6.27000, 6.63000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000002.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000002.jpg', NULL, '', '', '', '2025-06-09 10:18:44', '2025-06-09 10:18:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18KBG000003', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 9.52500, 9.57900, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000003.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000003.jpeg', NULL, '', '', '', '2025-06-11 19:31:41', '2025-06-11 19:31:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG18KBG000004', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 8.37000, 9.03000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000004.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000004.jpeg', NULL, '', '', '', '2025-06-11 19:35:27', '2025-06-11 19:35:27', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG18KBG000005', 0, 0, '', NULL, 1, 4, 6, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '2025-06-11 19:45:58', '2025-06-11 19:45:58', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG18KBG000006', 0, 0, '', NULL, 1, 4, 6, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000006.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000006.jpg', NULL, '', '', '', '2025-06-11 19:46:10', '2025-06-11 19:46:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG18KBG000007', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 3.57400, 3.84800, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000007.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000007.jpg', NULL, '', '', '', '2025-06-11 19:46:21', '2025-06-11 19:46:21', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG18KBG000008', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 1.78000, 1.78000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000008.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000008.jpeg', NULL, '', '', '', '2025-06-11 19:50:12', '2025-06-11 19:50:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG18KBG000009', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 2.80000, 2.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000009.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000009.jpeg', NULL, '', '', '', '2025-06-11 19:52:18', '2025-06-11 19:52:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJGG18KBG000010', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 2.80000, 2.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000010.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000010.jpeg', NULL, '', '', '', '2025-06-11 19:54:34', '2025-06-11 19:54:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJGG18KBG000011', 0, 0, '', NULL, 1, 4, 6, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000011.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000011.jpeg', NULL, '', '', '', '2025-06-11 19:56:55', '2025-06-11 19:56:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJGG18KBG000012', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 2.85000, 2.85000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000012.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000012.jpeg', NULL, '', '', '', '2025-06-11 19:57:00', '2025-06-11 19:57:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJGG18KBG000013', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 6.27900, 6.63900, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000013.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000013.jpg', NULL, '', '', '', '2025-06-11 20:01:40', '2025-06-11 20:01:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJGG18KBG000014', 0, 1, '18K Gold Bangles', '', 1, 4, 6, NULL, 'Female', 'Adult Size', 4.86700, 5.27700, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000014.webp', 'product_images/gold/18k_gold/18kgold_product_bangles/HJGG18KBG000014.jpeg', NULL, '', '', '', '2025-06-11 20:06:57', '2025-06-11 20:06:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_bracelets`
--

CREATE TABLE `18kgold_product_bracelets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_bracelets`
--

INSERT INTO `18kgold_product_bracelets` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(3, 'HJGG18KBR000002', 0, 70, '18k Bracelets', '18k Bracelets', 1, 4, 3, NULL, 'Female', 'Kids Size', 4.15000, 4.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000002.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000002.png', NULL, '', '', '', '2025-06-09 17:01:49', '2025-06-09 17:01:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18KBR000003', 0, 30, '18k Bracelets', '18k Bracelets', 1, 4, 3, NULL, 'Unisex', 'Baby Size', 2.42000, 2.42000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000003.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000003.png', NULL, '', '', '', '2025-06-09 17:02:59', '2025-06-09 17:02:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18KBR000004', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 2.84900, 3.35000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000004.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000004.jpg', NULL, '', '', '', '2025-06-11 20:13:33', '2025-06-11 20:13:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18KBR000005', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 3.75400, 5.16000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000005.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000005.jpg', NULL, '', '', '', '2025-06-11 20:18:37', '2025-06-11 20:18:37', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG18KBR000006', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 3.73700, 5.24000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000006.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000006.jpg', NULL, '', '', '', '2025-06-11 20:21:29', '2025-06-11 20:21:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG18KBR000007', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 0.80000, 0.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000007.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000007.jpeg', NULL, '', '', '', '2025-06-11 20:26:02', '2025-06-11 20:26:02', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG18KBR000008', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 0.88000, 0.88000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000008.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000008.jpeg', NULL, '', '', '', '2025-06-11 20:28:17', '2025-06-11 20:28:17', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG18KBR000009', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 0.68000, 0.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000009.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000009.jpeg', NULL, '', '', '', '2025-06-11 20:41:15', '2025-06-11 20:41:15', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG18KBR000010', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 0.43000, 0.43000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000010.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000010.jpeg', NULL, '', '', '', '2025-06-11 20:43:29', '2025-06-11 20:43:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG18KBR000011', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 0.45000, 0.45000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000011.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000011.jpeg', NULL, '', '', '', '2025-06-11 20:45:22', '2025-06-11 20:45:22', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJGG18KBR000012', 0, 1, '18K Gold Bracelets', '', 1, 4, 3, NULL, 'Female', 'Adult Size', 0.82000, 0.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000012.webp', 'product_images/gold/18k_gold/18kgold_product_bracelets/HJGG18KBR000012.jpeg', NULL, '', '', '', '2025-06-11 20:47:04', '2025-06-11 20:47:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_chains`
--

CREATE TABLE `18kgold_product_chains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_chains`
--

INSERT INTO `18kgold_product_chains` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG18KCH000001', 0, 30, '18k Chains', '18k Chains', 1, 4, 11, NULL, 'Female', 'Adult Size', 0.87000, 0.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_chains/HJGG18KCH000001.webp', 'product_images/gold/18k_gold/18kgold_product_chains/HJGG18KCH000001.jpeg', NULL, '', '', '', '2025-06-09 17:25:05', '2025-06-09 17:25:05', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG18KCH000002', 0, 30, '18k Chains', '18k Chains', 1, 4, 11, NULL, 'Female', 'Adult Size', 0.88000, 0.88000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_chains/HJGG18KCH000002.webp', 'product_images/gold/18k_gold/18kgold_product_chains/HJGG18KCH000002.jpeg', NULL, '', '', '', '2025-06-09 17:26:01', '2025-06-09 17:26:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_earrings`
--

CREATE TABLE `18kgold_product_earrings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_earrings`
--

INSERT INTO `18kgold_product_earrings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG18KER000001', 0, 60, '18k Earrings', '18k Earrings', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.65000, 2.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000001.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000001.png', NULL, '', '', '', '2025-06-09 17:17:27', '2025-06-09 17:17:27', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG18KER000002', 0, 20, '18k Earrings', '18k Earrings', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.66000, 2.28000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000002.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000002.png', NULL, '', '', '', '2025-06-09 17:18:21', '2025-06-09 17:18:21', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18KER000003', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.65100, 2.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000003.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000003.png', NULL, '', '', '', '2025-06-12 03:55:21', '2025-06-12 03:55:21', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18KER000004', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.65500, 2.24000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000004.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000004.png', NULL, '', '', '', '2025-06-12 04:00:57', '2025-06-12 04:00:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18KER000005', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Unisex', '', 1.89000, 2.33000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000005.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000005.jpeg', NULL, '', '', '', '2025-06-12 04:10:37', '2025-06-12 04:10:37', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG18KER000006', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.67000, 1.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000006.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000006.jpeg', NULL, '', '', '', '2025-06-12 04:13:12', '2025-06-12 04:13:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG18KER000007', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.54000, 1.84000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000007.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000007.jpeg', NULL, '', '', '', '2025-06-12 04:15:31', '2025-06-12 04:15:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG18KER000008', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.84000, 2.42000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000008.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000008.jpeg', NULL, '', '', '', '2025-06-12 04:18:20', '2025-06-12 04:18:20', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG18KER000009', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.75000, 2.03000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000009.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000009.jpeg', NULL, '', '', '', '2025-06-12 04:20:27', '2025-06-12 04:20:27', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG18KER000010', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.99000, 2.47000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000010.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000010.jpeg', NULL, '', '', '', '2025-06-12 04:22:34', '2025-06-12 04:22:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG18KER000011', 0, 1, '18K Gold EarRings', '', 1, 4, 8, NULL, 'Female', 'Adult Size', 1.43000, 1.71000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_earrings/HJGG18KER000011.webp', 'product_images/gold/18k_gold/18kgold_product_earrings/HJGG18KER000011.jpeg', NULL, '', '', '', '2025-06-12 04:24:52', '2025-06-12 04:24:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_fancychains`
--

CREATE TABLE `18kgold_product_fancychains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_necklaces`
--

CREATE TABLE `18kgold_product_necklaces` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_necklaces`
--

INSERT INTO `18kgold_product_necklaces` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG18KNK000001', 0, 70, '18k Necklace', '18k Necklace', 1, 4, 1, NULL, 'Unisex', 'Adult Size', 0.88000, 0.88000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_necklaces/HJGG18KNK000001.webp', 'product_images/gold/18k_gold/18kgold_product_necklaces/HJGG18KNK000001.jpeg', NULL, '', '', '', '2025-06-09 17:10:40', '2025-06-09 17:10:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG18KNK000002', 1, 40, '18k Necklace', '18k Necklace', 1, 4, 1, NULL, 'Unisex', 'Adult Size', 0.87000, 0.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_necklaces/HJGG18KNK000002.webp', 'product_images/gold/18k_gold/18kgold_product_necklaces/HJGG18KNK000002.jpeg', NULL, '', '', '', '2025-06-09 17:12:00', '2025-06-09 17:12:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18KNK000003', 0, 1, '18K Gold light weight necklace', '18K Gold light weight necklace', 1, 4, 1, NULL, 'Female', 'Adult Size', 1.13000, 1.13000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_necklaces/HJGG18KNK000003.webp', 'product_images/gold/18k_gold/18kgold_product_necklaces/HJGG18KNK000003.jpeg', NULL, '', '', '', '2025-06-11 01:46:55', '2025-06-11 01:46:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_nosepins`
--

CREATE TABLE `18kgold_product_nosepins` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_pendants`
--

CREATE TABLE `18kgold_product_pendants` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_pendants`
--

INSERT INTO `18kgold_product_pendants` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG18KPN000001', 0, 10, '18k Pendant', '18k Pendant', 1, 4, 2, NULL, 'Unisex', 'Adult Size', 0.70000, 0.70000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000001.webp', 'product_images/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000001.jpeg', NULL, '', '', '', '2025-06-09 17:06:52', '2025-06-09 17:06:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG18KPN000002', 0, 30, '18k Pendant', '18k Pendant', 1, 4, 2, NULL, 'Unisex', 'Adult Size', 0.71000, 0.71000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000002.webp', 'product_images/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000002.jpeg', NULL, '', '', '', '2025-06-09 17:07:41', '2025-06-09 17:07:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18KPN000003', 0, 1, '18K Gold Pendant', '', 1, 4, 2, NULL, 'Male', 'Adult Size', 0.57000, 0.57000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000003.webp', 'product_images/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000003.jpeg', NULL, '', '', '', '2025-06-12 04:30:57', '2025-06-12 04:30:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18KPN000004', 0, 1, '18K Gold Pendant', '', 1, 4, 2, NULL, 'Male', 'Adult Size', 0.73000, 0.73000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000004.webp', 'product_images/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000004.jpeg', NULL, '', '', '', '2025-06-12 04:33:47', '2025-06-12 04:33:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18KPN000005', 0, 1, '18K Gold Pendant', '', 1, 4, 2, NULL, 'Male', 'Adult Size', 1.21000, 1.48000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000005.webp', 'product_images/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000005.jpeg', NULL, '', '', '', '2025-06-12 04:35:52', '2025-06-12 04:35:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG18KPN000006', 0, 1, '18K Gold Pendant', '', 1, 4, 2, NULL, 'Male', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000006.webp', 'product_images/gold/18k_gold/18kgold_product_pendants/HJGG18KPN000006.jpeg', NULL, '', '', '', '2025-06-12 04:37:03', '2025-06-12 04:37:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_rings`
--

CREATE TABLE `18kgold_product_rings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_rings`
--

INSERT INTO `18kgold_product_rings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `cat_id`, `metalpurity_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(3, 'HJGG18KRG000002', 0, 20, '18k Ring', '18k Ring', 1, 7, 4, NULL, 'Female', 'Adult Size', 3.37200, 3.44800, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_rings/HJGG18KRG000002.webp', 'product_images/gold/18k_gold/18kgold_product_rings/HJGG18KRG000002.jpg', NULL, '', '', '', '2025-06-09 16:51:35', '2025-06-09 16:51:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18KRG000003', 0, 10, '18k Ring', '18k Ring', 1, 7, 4, NULL, 'Unisex', 'Kids Size', 3.03200, 3.09400, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_rings/HJGG18KRG000003.webp', 'product_images/gold/18k_gold/18kgold_product_rings/HJGG18KRG000003.jpg', NULL, '', '', '', '2025-06-09 16:53:46', '2025-06-09 16:53:46', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18KRG000004', 0, 1, '18K Gold Rings', '', 1, 7, 4, NULL, 'Female', 'Adult Size', 2.08000, 2.08000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_rings/HJGG18KRG000004.webp', 'product_images/gold/18k_gold/18kgold_product_rings/HJGG18KRG000004.jpg', NULL, '', '', '', '2025-06-12 05:34:43', '2025-06-12 05:34:43', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18KRG000005', 0, 1, '18K Gold Rings', '', 1, 7, 4, NULL, 'Female', 'Adult Size', 2.52500, 2.61700, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_rings/HJGG18KRG000005.webp', 'product_images/gold/18k_gold/18kgold_product_rings/HJGG18KRG000005.jpg', NULL, '', '', '', '2025-06-12 05:38:23', '2025-06-12 05:38:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG18KRG000006', 0, 1, '18K Gold Rings', '', 1, 7, 4, NULL, 'Female', 'Adult Size', 2.19300, 2.26500, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_rings/HJGG18KRG000006.webp', 'product_images/gold/18k_gold/18kgold_product_rings/HJGG18KRG000006.jpg', NULL, '', '', '', '2025-06-12 05:40:38', '2025-06-12 05:40:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG18KRG000007', 0, 1, '22K Gold Rings', '', 1, 7, 4, NULL, 'Female', 'Adult Size', 2.70000, 2.70000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_rings/HJGG18KRG000007.webp', 'product_images/gold/18k_gold/18kgold_product_rings/HJGG18KRG000007.png', NULL, '', '', '', '2025-06-13 11:06:55', '2025-06-13 11:06:55', NULL, NULL, '2025-06-15 19:17:00', 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_secondstuds`
--

CREATE TABLE `18kgold_product_secondstuds` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `18kgold_product_studs`
--

CREATE TABLE `18kgold_product_studs` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18kgold_product_studs`
--

INSERT INTO `18kgold_product_studs` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG18KSD000002', 0, 1, '18K Gold Studs', '18K Gold Studs from Harees Jewellery.', 1, 4, 9, NULL, 'Female', 'Adult Size', 2.33000, 2.33000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs//HJGG18KSD000002.webp', 'product_images/gold/18k_gold/18kgold_product_studs//HJGG18KSD000002.jpg', NULL, '', '', '', '2025-05-25 23:34:28', '2025-05-25 23:34:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG18KSD000003', 0, 1, '18K Gold Stud', '', 1, 4, 9, NULL, 'Female', 'Adult Size', 1.56000, 1.56000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000003.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000003.jpg', NULL, '', '', '', '2025-05-26 01:30:18', '2025-05-26 01:30:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG18KSD000004', 0, 1, '18K Gold Studs', '18K Gold Studs from Harees Jewellery.', 1, 4, 9, NULL, 'Female', 'Adult Size', 1.78000, 1.78000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000004.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000004.jpg', NULL, '', '', '', '2025-05-26 01:33:53', '2025-05-26 01:33:53', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG18KSD000005', 0, 1, '18K Stud', '', 1, 4, 9, NULL, 'Female', 'Adult Size', 1.32000, 1.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000005.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000005.jpg', NULL, '', '', '', '2025-05-26 01:34:41', '2025-05-26 01:34:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG18KSD000006', 0, 1, '18K Gold Studs', '18K Gold Studs from Harees Jewellery.', 1, 4, 9, NULL, 'Female', 'Adult Size', 0.91000, 0.91000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000006.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000006.jpg', NULL, '', '', '', '2025-05-26 01:35:03', '2025-05-26 01:35:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG18KSD000007', 0, 1, '18K Gold Studs', '18K Gold Studs from Harees Jewellery.', 1, 4, 9, NULL, 'Female', 'Adult Size', 1.47000, 1.47000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000007.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000007.jpg', NULL, '', '', '', '2025-05-26 01:35:42', '2025-05-26 01:35:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG18KSD000008', 0, 1, '18K Gold Studs', '18K Gold Studs from Harees Jewellery.', 1, 4, 9, NULL, 'Female', 'Adult Size', 0.96000, 0.96000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000008.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000008.jpg', NULL, '', '', '', '2025-05-26 01:36:06', '2025-05-26 01:36:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG18KSD000009', 0, 1, '18K Gold Studs', '18K Gold Studs from Harees Jewellery.', 1, 4, 9, NULL, 'Female', 'Adult Size', 1.51000, 1.51000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000009.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000009.jpg', NULL, '', '', '', '2025-05-26 01:36:31', '2025-05-26 01:36:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG18KSD000010', 0, 1, '18K Gold Studs', '18K Gold Studs from Harees Jewellery.', 1, 4, 9, NULL, 'Female', 'Adult Size', 1.03000, 1.03000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000010.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000010.jpg', NULL, '', '', '', '2025-05-26 01:37:05', '2025-05-26 01:37:05', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG18KSD000011', 0, 1, '18 stud', '', 1, 4, 9, NULL, 'Female', 'Adult Size', 1.59000, 1.59000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/18k_gold/18kgold_product_studs/HJGG18KSD000011.webp', 'product_images/gold/18k_gold/18kgold_product_studs/HJGG18KSD000011.jpg', NULL, '', '', '', '2025-05-26 01:44:45', '2025-05-26 01:44:45', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_anklets`
--

CREATE TABLE `22kgold_product_anklets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_anklets`
--

INSERT INTO `22kgold_product_anklets` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG22KAK000001', 0, 1, '22K Gold Baby Anklets', '', 1, 5, 4, NULL, 'Unisex', 'Baby Size', 6.82000, 6.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000001.webp', 'product_images/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000001.png', NULL, '', '', '', '2025-06-13 14:50:17', '2025-06-13 14:50:17', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG22KAK000002', 0, 1, '22K Gold Baby Anklets', '', 1, 5, 4, NULL, 'Unisex', 'Baby Size', 6.81000, 6.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000002.webp', 'product_images/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000002.png', NULL, '', '', '', '2025-06-13 14:55:02', '2025-06-13 14:55:02', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KAK000003', 0, 1, '22K Gold Baby Anklets', '', 1, 5, 4, NULL, 'Unisex', 'Baby Size', 7.88000, 7.88000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000003.webp', 'product_images/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000003.png', NULL, '', '', '', '2025-06-13 14:57:04', '2025-06-13 14:57:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KAK000004', 0, 1, '22K Gold Baby Anklets', '', 1, 5, 4, NULL, 'Unisex', 'Baby Size', 6.02000, 6.02000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000004.webp', 'product_images/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000004.png', NULL, '', '', '', '2025-06-13 14:58:58', '2025-06-13 14:58:58', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KAK000005', 0, 1, '22K Gold Baby Anklets', '', 1, 5, 4, NULL, 'Unisex', 'Baby Size', 6.68000, 6.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000005.webp', 'product_images/gold/22K_gold/22kgold_product_anklets/HJGG22KAK000005.png', NULL, '', '', '', '2025-06-13 15:00:46', '2025-06-13 15:00:46', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_bangles`
--

CREATE TABLE `22kgold_product_bangles` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_bangles`
--

INSERT INTO `22kgold_product_bangles` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG22KBG000001', 1, 40, '22k Bangle', '22k Bangle', 1, 5, 6, NULL, 'Female', 'Adult Size', 11.89000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000001.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000001.jpg', NULL, '', '', '', '2025-06-09 10:22:33', '2025-06-09 10:22:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG22KBG000002', 0, 10, '22k gold bangle', '22k gold bangle collections', 1, 5, 6, NULL, 'Female', 'Adult Size', 12.71000, 12.71000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000002.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000002.jpg', NULL, '', '', '', '2025-06-09 10:25:48', '2025-06-09 10:25:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KBG000003', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 9.21000, 9.21000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000003.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000003.png', NULL, '', '', '', '2025-06-12 05:50:05', '2025-06-12 05:50:05', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KBG000004', 0, 0, '', NULL, 1, 5, 6, NULL, 'Unisex', NULL, 11.63000, 11.63000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000004.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000004.png', NULL, '', '', '', '2025-06-12 05:51:48', '2025-06-12 05:51:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KBG000005', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 11.89000, 11.89000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000005.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000005.png', NULL, '', '', '', '2025-06-12 05:53:24', '2025-06-12 05:53:24', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KBG000006', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 12.17000, 12.71000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000006.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000006.png', NULL, '', '', '', '2025-06-12 05:54:58', '2025-06-12 05:54:58', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG22KBG000007', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 13.50000, 13.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000007.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000007.png', NULL, '', '', '', '2025-06-12 05:58:16', '2025-06-12 05:58:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG22KBG000008', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 11.49000, 11.49000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000008.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000008.png', NULL, '', '', '', '2025-06-12 06:00:12', '2025-06-12 06:00:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG22KBG000009', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 23.11000, 23.11000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000009.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000009.png', NULL, '', '', '', '2025-06-12 06:02:04', '2025-06-12 06:02:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG22KBG000010', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 20.10000, 20.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000010.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000010.png', NULL, '', '', '', '2025-06-12 06:15:42', '2025-06-12 06:15:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG22KBG000011', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 12.33000, 12.33000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000011.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000011.png', NULL, '', '', '', '2025-06-12 09:29:37', '2025-06-12 09:29:37', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJGG22KBG000012', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 11.01000, 11.01000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000012.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000012.png', NULL, '', '', '', '2025-06-12 09:32:14', '2025-06-12 09:32:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJGG22KBG000013', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 9.96000, 9.96000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000013.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000013.png', NULL, '', '', '', '2025-06-12 09:34:51', '2025-06-12 09:34:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJGG22KBG000014', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 20.05000, 20.05000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000014.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000014.png', NULL, '', '', '', '2025-06-12 09:36:33', '2025-06-12 09:36:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJGG22KBG000015', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 21.81000, 21.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000015.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000015.png', NULL, '', '', '', '2025-06-12 09:39:04', '2025-06-12 09:39:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJGG22KBG000016', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 25.38000, 26.18000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000016.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000016.png', NULL, '', '', '', '2025-06-12 09:43:26', '2025-06-12 09:43:26', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJGG22KBG000017', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 18.02000, 18.02000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000017.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000017.png', NULL, '', '', '', '2025-06-12 09:46:25', '2025-06-12 09:46:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJGG22KBG000018', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 13.12000, 13.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000018.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000018.png', NULL, '', '', '', '2025-06-12 09:49:31', '2025-06-12 09:49:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJGG22KBG000019', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 14.67000, 14.67000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000019.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000019.png', NULL, '', '', '', '2025-06-12 09:51:13', '2025-06-12 09:51:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJGG22KBG000020', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 12.60000, 12.60000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000020.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000020.png', NULL, '', '', '', '2025-06-12 09:53:20', '2025-06-12 09:53:20', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJGG22KBG000021', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 13.17000, 14.47000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000021.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000021.png', NULL, '', '', '', '2025-06-12 09:58:57', '2025-06-12 09:58:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJGG22KBG000022', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 17.27000, 17.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000022.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000022.png', NULL, '', '', '', '2025-06-12 10:01:14', '2025-06-12 10:01:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJGG22KBG000023', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 18.31000, 18.31000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000023.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000023.png', NULL, '', '', '', '2025-06-12 10:03:43', '2025-06-12 10:03:43', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(25, 'HJGG22KBG000024', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 16.77000, 16.77000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000024.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000024.png', NULL, '', '', '', '2025-06-12 10:05:43', '2025-06-12 10:05:43', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(26, 'HJGG22KBG000025', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 28.50000, 28.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000025.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000025.png', NULL, '', '', '', '2025-06-12 10:08:19', '2025-06-12 10:08:19', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(27, 'HJGG22KBG000026', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 9.22000, 9.22000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000026.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000026.png', NULL, '', '', '', '2025-06-12 10:09:59', '2025-06-12 10:09:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(28, 'HJGG22KBG000027', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 18.47000, 18.47000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000027.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000027.png', NULL, '', '', '', '2025-06-12 10:12:06', '2025-06-12 10:12:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(29, 'HJGG22KBG000028', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 22.79000, 22.79000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000028.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000028.png', NULL, '', '', '', '2025-06-12 10:13:38', '2025-06-12 10:13:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(30, 'HJGG22KBG000029', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 15.85000, 15.85000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000029.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000029.png', NULL, '', '', '', '2025-06-12 10:15:47', '2025-06-12 10:15:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(31, 'HJGG22KBG000030', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 2.15000, 2.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000030.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000030.png', NULL, '', '', '', '2025-06-12 10:21:34', '2025-06-12 10:21:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(32, 'HJGG22KBG000031', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 3.43000, 3.43000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000031.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000031.png', NULL, '', '', '', '2025-06-12 10:23:31', '2025-06-12 10:23:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(33, 'HJGG22KBG000032', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 5.94000, 5.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000032.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000032.png', NULL, '', '', '', '2025-06-12 10:25:26', '2025-06-12 10:25:26', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(34, 'HJGG22KBG000033', 0, 1, '22K Gold Bangles', '', 1, 5, 6, NULL, 'Female', 'Adult Size', 4.50000, 4.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000033.webp', 'product_images/gold/22K_gold/22kgold_product_bangles/HJGG22KBG000033.png', NULL, '', '', '', '2025-06-12 10:27:58', '2025-06-12 10:27:58', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_bracelets`
--

CREATE TABLE `22kgold_product_bracelets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_bracelets`
--

INSERT INTO `22kgold_product_bracelets` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(3, 'HJGG22KBR000002', 0, 20, '22k Bracelets', '22k Bracelets', 1, 5, 3, NULL, 'Female', 'Adult Size', 2.79000, 2.79000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000002.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000002.png', NULL, '', '', '', '2025-06-09 17:43:09', '2025-06-09 17:43:09', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KBR000003', 0, 25, '22k Bracelets', '22k Bracelets', 1, 5, 3, NULL, 'Female', 'Adult Size', 4.50000, 4.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000003.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000003.png', NULL, '', '', '', '2025-06-09 17:44:00', '2025-06-09 17:44:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KBR000004', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 4.57800, 4.57800, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000004.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000004.jpg', NULL, '', '', '', '2025-06-12 10:42:36', '2025-06-12 10:42:36', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KBR000005', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 4.05800, 4.05800, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000005.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000005.jpg', NULL, '', '', '', '2025-06-12 10:44:55', '2025-06-12 10:44:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KBR000006', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 3.97000, 3.97000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000006.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000006.png', NULL, '', '', '', '2025-06-12 10:47:40', '2025-06-12 10:47:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG22KBR000007', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 4.27000, 4.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000007.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000007.png', NULL, '', '', '', '2025-06-12 10:49:29', '2025-06-12 10:49:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG22KBR000008', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 4.46000, 4.46000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000008.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000008.png', NULL, '', '', '', '2025-06-12 10:51:58', '2025-06-12 10:51:58', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG22KBR000009', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 4.44000, 4.44000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000009.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000009.jpg', NULL, '', '', '', '2025-06-12 10:54:36', '2025-06-12 10:54:36', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG22KBR000010', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 14.15000, 14.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000010.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000010.jpg', NULL, '', '', '', '2025-06-12 10:58:48', '2025-06-12 10:58:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG22KBR000011', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 15.27000, 15.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000011.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000011.jpg', NULL, '', '', '', '2025-06-12 11:00:34', '2025-06-12 11:00:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJGG22KBR000012', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 12.04000, 12.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000012.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000012.png', NULL, '', '', '', '2025-06-12 11:02:38', '2025-06-12 11:02:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJGG22KBR000013', 0, 1, '22K Gold Bangles', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 8.68000, 8.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000013.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000013.png', NULL, '', '', '', '2025-06-12 11:04:26', '2025-06-12 11:04:26', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJGG22KBR000014', 0, 1, '22K Gold Bangles', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 15.91000, 15.91000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000014.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000014.png', NULL, '', '', '', '2025-06-12 11:07:41', '2025-06-12 11:07:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJGG22KBR000015', 0, 1, '22K Gold Bangles', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 6.23000, 6.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000015.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000015.png', NULL, '', '', '', '2025-06-12 11:09:34', '2025-06-12 11:09:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJGG22KBR000016', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 6.00000, 6.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000016.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000016.png', NULL, '', '', '', '2025-06-12 11:11:35', '2025-06-12 11:11:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJGG22KBR000017', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 9.83000, 11.69000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000017.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000017.png', NULL, '', '', '', '2025-06-12 11:16:50', '2025-06-12 11:16:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJGG22KBR000018', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 8.10000, 12.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000018.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000018.png', NULL, '', '', '', '2025-06-12 11:18:46', '2025-06-12 11:18:46', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJGG22KBR000019', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 9.32000, 9.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000019.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000019.png', NULL, '', '', '', '2025-06-12 11:20:41', '2025-06-12 11:20:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJGG22KBR000020', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 8.92000, 8.92000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000020.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000020.png', NULL, '', '', '', '2025-06-12 11:24:52', '2025-06-12 11:24:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJGG22KBR000021', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 11.75000, 11.75000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000021.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000021.png', NULL, '', '', '', '2025-06-12 11:26:48', '2025-06-12 11:26:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJGG22KBR000022', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 12.10000, 12.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000022.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000022.png', NULL, '', '', '', '2025-06-12 11:28:45', '2025-06-12 11:28:45', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJGG22KBR000023', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 10.98000, 10.98000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000023.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000023.png', NULL, '', '', '', '2025-06-12 11:30:30', '2025-06-12 11:30:30', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(25, 'HJGG22KBR000024', 0, 1, '22K Gold Bracelets', '', 1, 5, 3, NULL, 'Male', 'Adult Size', 12.82000, 12.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000024.webp', 'product_images/gold/22K_gold/22kgold_product_bracelets/HJGG22KBR000024.png', NULL, '', '', '', '2025-06-12 11:34:14', '2025-06-12 11:34:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_chains`
--

CREATE TABLE `22kgold_product_chains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_chains`
--

INSERT INTO `22kgold_product_chains` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG22KCH000001', 0, 1, '22K Mens Chains', '22K Mens Chains', 1, 5, 11, NULL, 'Male', 'Adult Size', 39.16000, 39.16000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000001.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000001.jpg', NULL, '', '', '', '2025-06-11 11:31:10', '2025-06-11 11:31:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG22KCH000002', 0, 1, '22K Men\'s Chain', '22K Men\'s Chain', 1, 5, 11, NULL, 'Male', 'Adult Size', 31.22000, 31.22000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000002.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000002.jpg', NULL, '', '', '', '2025-06-11 11:32:28', '2025-06-11 11:32:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KCH000003', 0, 1, '22K Mens Chain', '22K Mens Chain', 1, 5, 11, NULL, 'Male', 'Adult Size', 39.27000, 39.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000003.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000003.jpg', NULL, '', '', '', '2025-06-11 11:33:11', '2025-06-11 11:33:11', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KCH000004', 0, 1, '22K Mens Chain', '22K Mens Chain', 1, 5, 11, NULL, 'Male', 'Adult Size', 38.48000, 38.48000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000004.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000004.jpg', NULL, '', '', '', '2025-06-11 11:34:03', '2025-06-11 11:34:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KCH000005', 0, 1, '22K Mens Chain', '22K Mens Chain', 1, 5, 11, NULL, 'Male', 'Adult Size', 32.00000, 32.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000005.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000005.jpg', NULL, '', '', '', '2025-06-11 11:34:31', '2025-06-11 11:34:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KCH000006', 0, 1, '22K Men\'s Chain', '22K Men\'s Chain', 1, 5, 11, NULL, 'Male', 'Adult Size', 39.16000, 39.16000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000006.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000006.jpg', NULL, '', '', '', '2025-06-11 11:43:49', '2025-06-11 11:43:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG22KCH000007', 0, 1, '22K Gold Baby Chain', '', 1, 5, 11, NULL, 'Unisex', 'Baby Size', 3.68000, 3.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000007.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000007.png', NULL, '', '', '', '2025-06-16 07:47:24', '2025-06-16 07:47:24', NULL, NULL, '2025-06-16 07:48:12', NULL, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG22KCH000008', 0, 1, '22K Gold Baby Chain', '', 1, 5, 11, NULL, 'Unisex', 'Baby Size', 3.72000, 3.72000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000008.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000008.png', NULL, '', '', '', '2025-06-16 07:48:44', '2025-06-16 07:48:44', NULL, NULL, '2025-06-16 07:49:34', NULL, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG22KCH000009', 0, 1, '22K Gold Baby Chain', '', 1, 5, 11, NULL, 'Unisex', 'Baby Size', 3.94000, 3.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000009.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000009.png', NULL, '', '', '', '2025-06-16 07:50:07', '2025-06-16 07:50:07', NULL, NULL, '2025-06-16 07:50:29', NULL, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG22KCH000010', 0, 1, '22K Gold Baby Chain', '', 1, 5, 11, NULL, 'Unisex', 'Baby Size', 4.00000, 4.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000010.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000010.png', NULL, '', '', '', '2025-06-16 07:50:53', '2025-06-16 07:50:53', NULL, NULL, '2025-06-16 07:51:19', NULL, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG22KCH000011', 0, 1, '22K Gold Baby Chain', '', 1, 5, 11, NULL, 'Unisex', 'Baby Size', 3.63000, 3.63000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_chains/HJGG22KCH000011.webp', 'product_images/gold/22K_gold/22kgold_product_chains/HJGG22KCH000011.png', NULL, '', '', '', '2025-06-16 07:51:45', '2025-06-16 07:51:45', NULL, NULL, '2025-06-16 07:52:07', NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_earrings`
--

CREATE TABLE `22kgold_product_earrings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_earrings`
--

INSERT INTO `22kgold_product_earrings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG22KER000001', 0, 23, '22k Earring', '22k Earring', 1, 5, 8, NULL, 'Male', 'Adult Size', 2.81000, 2.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000001.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000001.png', NULL, '', '', '', '2025-06-09 17:54:24', '2025-06-09 17:54:24', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG22KER000002', 0, 65, '22k Earring', '22k Earring', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.19000, 3.19000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000002.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000002.png', NULL, '', '', '', '2025-06-09 17:55:03', '2025-06-09 17:55:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KER000003', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 0.95000, 0.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000003.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000003.png', NULL, '', '', '', '2025-06-12 11:46:09', '2025-06-12 11:46:09', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KER000004', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.81000, 2.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000004.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000004.png', NULL, '', '', '', '2025-06-12 11:47:51', '2025-06-12 11:47:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KER000005', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 0.95000, 0.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000005.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000005.png', NULL, '', '', '', '2025-06-12 11:49:25', '2025-06-12 11:49:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KER000006', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.19000, 3.19000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000006.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000006.png', NULL, '', '', '', '2025-06-12 11:51:05', '2025-06-12 11:51:05', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG22KER000007', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 0.92000, 0.92000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000007.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000007.png', NULL, '', '', '', '2025-06-12 11:52:45', '2025-06-12 11:52:45', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG22KER000008', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.00000, 2.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000008.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000008.png', NULL, '', '', '', '2025-06-12 11:54:21', '2025-06-12 11:54:21', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG22KER000009', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 0.94000, 0.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000009.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000009.png', NULL, '', '', '', '2025-06-12 11:56:07', '2025-06-12 11:56:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG22KER000010', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.62000, 2.62000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000010.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000010.png', NULL, '', '', '', '2025-06-12 11:57:28', '2025-06-12 11:57:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG22KER000011', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 0.96000, 0.96000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000011.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000011.png', NULL, '', '', '', '2025-06-12 14:45:31', '2025-06-12 14:45:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJGG22KER000012', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.92000, 2.92000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000012.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000012.png', NULL, '', '', '', '2025-06-12 14:47:41', '2025-06-12 14:47:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJGG22KER000013', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.34000, 2.34000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000013.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000013.png', NULL, '', '', '', '2025-06-12 14:49:57', '2025-06-12 14:49:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJGG22KER000014', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.79000, 2.79000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000014.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000014.png', NULL, '', '', '', '2025-06-12 14:54:52', '2025-06-12 14:54:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJGG22KER000015', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 1.51000, 1.51000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000015.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000015.png', NULL, '', '', '', '2025-06-12 14:58:21', '2025-06-12 14:58:21', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJGG22KER000016', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.84000, 2.84000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000016.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000016.png', NULL, '', '', '', '2025-06-12 15:01:41', '2025-06-12 15:01:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJGG22KER000017', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 1.32000, 1.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000017.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000017.png', NULL, '', '', '', '2025-06-12 15:04:44', '2025-06-12 15:04:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJGG22KER000018', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.54000, 2.54000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000018.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000018.png', NULL, '', '', '', '2025-06-12 15:07:22', '2025-06-12 15:07:22', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJGG22KER000019', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 1.12000, 1.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000019.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000019.png', NULL, '', '', '', '2025-06-12 15:09:15', '2025-06-12 15:09:15', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJGG22KER000020', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 4.71000, 4.71000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000020.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000020.png', NULL, '', '', '', '2025-06-12 15:13:04', '2025-06-12 15:13:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJGG22KER000021', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 1.41000, 1.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000021.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000021.png', NULL, '', '', '', '2025-06-12 15:15:13', '2025-06-12 15:15:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJGG22KER000022', 0, 1, '22K Gold Bracelets', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.66000, 3.66000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000022.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000022.png', NULL, '', '', '', '2025-06-12 15:17:54', '2025-06-12 15:17:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJGG22KER000023', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 0.80000, 0.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000023.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000023.png', NULL, '', '', '', '2025-06-12 15:21:35', '2025-06-12 15:21:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(25, 'HJGG22KER000024', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.56000, 2.56000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000024.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000024.png', NULL, '', '', '', '2025-06-12 15:24:23', '2025-06-12 15:24:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(26, 'HJGG22KER000025', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.29000, 3.29000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000025.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000025.png', NULL, '', '', '', '2025-06-12 15:26:47', '2025-06-12 15:26:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(27, 'HJGG22KER000026', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.41000, 2.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000026.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000026.png', NULL, '', '', '', '2025-06-12 15:29:06', '2025-06-12 15:29:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(28, 'HJGG22KER000027', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.58000, 2.58000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000027.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000027.png', NULL, '', '', '', '2025-06-12 15:33:25', '2025-06-12 15:33:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(29, 'HJGG22KER000028', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 4.89000, 4.89000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000028.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000028.png', NULL, '', '', '', '2025-06-12 15:38:17', '2025-06-12 15:38:17', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(30, 'HJGG22KER000029', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.56000, 3.56000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000029.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000029.png', NULL, '', '', '', '2025-06-12 15:43:07', '2025-06-12 15:43:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(31, 'HJGG22KER000030', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.17000, 3.17000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000030.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000030.png', NULL, '', '', '', '2025-06-12 15:46:49', '2025-06-12 15:46:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(32, 'HJGG22KER000031', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.12000, 3.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000031.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000031.png', NULL, '', '', '', '2025-06-12 15:51:36', '2025-06-12 15:51:36', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(33, 'HJGG22KER000032', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.31000, 3.31000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000032.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000032.png', NULL, '', '', '', '2025-06-12 15:55:24', '2025-06-12 15:55:24', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(34, 'HJGG22KER000033', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.82000, 2.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000033.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000033.png', NULL, '', '', '', '2025-06-12 15:58:44', '2025-06-12 15:58:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(35, 'HJGG22KER000034', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 6.19000, 6.19000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000034.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000034.png', NULL, '', '', '', '2025-06-12 16:00:44', '2025-06-12 16:00:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(36, 'HJGG22KER000035', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.69000, 2.69000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000035.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000035.png', NULL, '', '', '', '2025-06-12 16:03:29', '2025-06-12 16:03:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(37, 'HJGG22KER000036', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.82000, 2.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000036.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000036.png', NULL, '', '', '', '2025-06-12 16:07:07', '2025-06-12 16:07:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(38, 'HJGG22KER000037', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.50000, 3.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000037.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000037.png', NULL, '', '', '', '2025-06-12 16:11:38', '2025-06-12 16:11:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(39, 'HJGG22KER000038', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 18.11000, 18.11000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000038.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000038.jpg', NULL, '', '', '', '2025-06-13 04:58:47', '2025-06-13 04:58:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(40, 'HJGG22KER000039', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 28.15000, 28.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000039.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000039.png', NULL, '', '', '', '2025-06-13 05:03:47', '2025-06-13 05:03:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(41, 'HJGG22KER000040', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 12.31000, 12.31000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000040.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000040.png', NULL, '', '', '', '2025-06-13 05:05:54', '2025-06-13 05:05:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(42, 'HJGG22KER000041', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 17.82000, 17.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000041.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000041.png', NULL, '', '', '', '2025-06-13 05:07:48', '2025-06-13 05:07:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(43, 'HJGG22KER000042', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 20.98000, 20.98000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000042.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000042.png', NULL, '', '', '', '2025-06-13 05:11:51', '2025-06-13 05:11:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(44, 'HJGG22KER000043', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 24.54000, 24.54000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000043.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000043.png', NULL, '', '', '', '2025-06-13 05:13:33', '2025-06-13 05:13:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(45, 'HJGG22KER000044', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 27.99000, 27.99000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000044.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000044.png', NULL, '', '', '', '2025-06-13 05:16:47', '2025-06-13 05:16:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(46, 'HJGG22KER000045', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 28.15000, 28.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000045.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000045.png', NULL, '', '', '', '2025-06-13 05:18:18', '2025-06-13 05:18:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(47, 'HJGG22KER000046', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 10.70000, 10.70000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000046.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000046.png', NULL, '', '', '', '2025-06-13 05:20:07', '2025-06-13 05:20:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(48, 'HJGG22KER000047', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 12.26000, 12.26000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000047.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000047.png', NULL, '', '', '', '2025-06-13 05:22:39', '2025-06-13 05:22:39', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(49, 'HJGG22KER000048', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 10.24000, 10.24000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000048.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000048.png', NULL, '', '', '', '2025-06-13 05:24:25', '2025-06-13 05:24:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(50, 'HJGG22KER000049', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 13.11000, 13.11000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000049.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000049.png', NULL, '', '', '', '2025-06-13 05:26:17', '2025-06-13 05:26:17', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(51, 'HJGG22KER000050', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 12.89000, 12.89000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000050.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000050.png', NULL, '', '', '', '2025-06-13 05:29:53', '2025-06-13 05:29:53', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(52, 'HJGG22KER000051', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 1.87000, 1.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000051.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000051.jpg', NULL, '', '', '', '2025-06-13 05:50:50', '2025-06-13 05:50:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(53, 'HJGG22KER000052', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.10000, 3.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000052.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000052.jpg', NULL, '', '', '', '2025-06-13 05:54:14', '2025-06-13 05:54:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(54, 'HJGG22KER000053', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 1.95000, 1.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000053.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000053.jpg', NULL, '', '', '', '2025-06-13 05:56:42', '2025-06-13 05:56:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(55, 'HJGG22KER000054', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.32000, 2.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000054.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000054.jpg', NULL, '', '', '', '2025-06-13 06:00:32', '2025-06-13 06:00:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(56, 'HJGG22KER000055', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.50000, 2.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000055.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000055.jpg', NULL, '', '', '', '2025-06-13 06:03:51', '2025-06-13 06:03:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(57, 'HJGG22KER000056', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.51000, 3.51000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000056.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000056.jpg', NULL, '', '', '', '2025-06-13 06:10:18', '2025-06-13 06:10:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(58, 'HJGG22KER000057', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 5.48000, 5.48000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000057.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000057.jpg', NULL, '', '', '', '2025-06-13 06:13:09', '2025-06-13 06:13:09', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(59, 'HJGG22KER000058', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 4.73000, 4.73000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000058.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000058.jpg', NULL, '', '', '', '2025-06-13 06:16:30', '2025-06-13 06:16:30', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(60, 'HJGG22KER000059', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.21000, 3.21000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000059.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000059.jpg', NULL, '', '', '', '2025-06-13 06:18:30', '2025-06-13 06:18:30', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(61, 'HJGG22KER000060', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.93000, 2.93000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000060.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000060.jpg', NULL, '', '', '', '2025-06-13 06:20:28', '2025-06-13 06:20:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(62, 'HJGG22KER000061', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.28000, 2.93000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000061.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000061.jpg', NULL, '', '', '', '2025-06-13 06:22:47', '2025-06-13 06:22:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(63, 'HJGG22KER000062', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.21000, 3.21000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000062.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000062.jpg', NULL, '', '', '', '2025-06-13 06:27:06', '2025-06-13 06:27:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(64, 'HJGG22KER000063', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 1.94000, 1.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000063.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000063.jpg', NULL, '', '', '', '2025-06-13 06:29:36', '2025-06-13 06:29:36', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(65, 'HJGG22KER000064', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 4.10000, 4.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000064.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000064.png', NULL, '', '', '', '2025-06-13 06:50:47', '2025-06-13 06:50:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(66, 'HJGG22KER000065', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 4.04000, 4.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000065.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000065.png', NULL, '', '', '', '2025-06-13 06:52:16', '2025-06-13 06:52:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(67, 'HJGG22KER000066', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.95000, 3.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000066.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000066.png', NULL, '', '', '', '2025-06-13 06:53:39', '2025-06-13 06:53:39', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(68, 'HJGG22KER000067', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.95000, 2.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000067.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000067.png', NULL, '', '', '', '2025-06-13 06:55:41', '2025-06-13 06:55:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(69, 'HJGG22KER000068', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.00000, 3.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000068.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000068.png', NULL, '', '', '', '2025-06-13 06:57:19', '2025-06-13 06:57:19', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(70, 'HJGG22KER000069', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 4.96000, 4.96000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000069.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000069.png', NULL, '', '', '', '2025-06-13 06:58:48', '2025-06-13 06:58:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(71, 'HJGG22KER000070', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 2.82000, 2.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000070.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000070.png', NULL, '', '', '', '2025-06-13 07:00:07', '2025-06-13 07:00:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(72, 'HJGG22KER000071', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.94000, 3.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000071.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000071.png', NULL, '', '', '', '2025-06-13 07:02:13', '2025-06-13 07:02:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(73, 'HJGG22KER000072', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 4.68000, 4.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000072.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000072.png', NULL, '', '', '', '2025-06-13 07:04:10', '2025-06-13 07:04:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(74, 'HJGG22KER000073', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.96000, 3.96000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000073.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000073.png', NULL, '', '', '', '2025-06-13 07:07:53', '2025-06-13 07:07:53', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(75, 'HJGG22KER000074', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 5.75000, 5.75000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000074.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000074.png', NULL, '', '', '', '2025-06-13 07:11:57', '2025-06-13 07:11:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(76, 'HJGG22KER000075', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 5.56000, 5.56000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000075.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000075.png', NULL, '', '', '', '2025-06-13 07:13:57', '2025-06-13 07:13:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(77, 'HJGG22KER000076', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 5.81000, 5.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000076.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000076.png', NULL, '', '', '', '2025-06-13 07:15:18', '2025-06-13 07:15:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(78, 'HJGG22KER000077', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 3.53000, 3.53000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000077.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000077.png', NULL, '', '', '', '2025-06-13 07:16:56', '2025-06-13 07:16:56', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(79, 'HJGG22KER000078', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 5.85000, 5.85000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000078.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000078.png', NULL, '', '', '', '2025-06-13 07:18:17', '2025-06-13 07:18:17', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(80, 'HJGG22KER000079', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 5.04000, 5.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000079.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000079.png', NULL, '', '', '', '2025-06-13 07:20:01', '2025-06-13 07:20:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(81, 'HJGG22KER000080', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 7.30000, 7.30000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000080.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000080.png', NULL, '', '', '', '2025-06-13 07:21:45', '2025-06-13 07:21:45', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(82, 'HJGG22KER000081', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 7.41000, 7.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000081.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000081.png', NULL, '', '', '', '2025-06-13 07:23:09', '2025-06-13 07:23:09', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(83, 'HJGG22KER000082', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 8.48000, 8.48000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000082.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000082.png', NULL, '', '', '', '2025-06-13 07:24:29', '2025-06-13 07:24:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(84, 'HJGG22KER000083', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 5.16000, 5.16000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000083.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000083.png', NULL, '', '', '', '2025-06-13 07:26:01', '2025-06-13 07:26:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(85, 'HJGG22KER000084', 0, 1, '22K Gold Earrings', '', 1, 5, 8, NULL, 'Female', 'Adult Size', 8.13000, 8.13000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_earrings/HJGG22KER000084.webp', 'product_images/gold/22K_gold/22kgold_product_earrings/HJGG22KER000084.png', NULL, '', '', '', '2025-06-13 07:27:18', '2025-06-13 07:27:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_fancychains`
--

CREATE TABLE `22kgold_product_fancychains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_fancychains`
--

INSERT INTO `22kgold_product_fancychains` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG22KFC000001', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(3, 'HJGG22KFC000002', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(4, 'HJGG22KFC000003', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(5, 'HJGG22KFC000004', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(6, 'HJGG22KFC000005', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(7, 'HJGG22KFC000006', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(8, 'HJGG22KFC000007', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(9, 'HJGG22KFC000008', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(10, 'HJGG22KFC000009', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(11, 'HJGG22KFC000010', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(12, 'HJGG22KFC000011', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(13, 'HJGG22KFC000012', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(14, 'HJGG22KFC000013', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(15, 'HJGG22KFC000014', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(16, 'HJGG22KFC000015', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(17, 'HJGG22KFC000016', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(18, 'HJGG22KFC000017', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(19, 'HJGG22KFC000018', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(20, 'HJGG22KFC000019', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(21, 'HJGG22KFC000020', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(22, 'HJGG22KFC000021', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(23, 'HJGG22KFC000022', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(24, 'HJGG22KFC000023', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(25, 'HJGG22KFC000024', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(26, 'HJGG22KFC000025', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(27, 'HJGG22KFC000026', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(28, 'HJGG22KFC000027', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(29, 'HJGG22KFC000028', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(30, 'HJGG22KFC000029', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(31, 'HJGG22KFC000030', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(32, 'HJGG22KFC000031', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(33, 'HJGG22KFC000032', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(34, 'HJGG22KFC000033', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(35, 'HJGG22KFC000034', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(36, 'HJGG22KFC000035', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(37, 'HJGG22KFC000036', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(38, 'HJGG22KFC000037', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(39, 'HJGG22KFC000038', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(40, 'HJGG22KFC000039', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(41, 'HJGG22KFC000040', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(42, 'HJGG22KFC000041', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(43, 'HJGG22KFC000042', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(44, 'HJGG22KFC000043', 0, 0, '', '', NULL, NULL, NULL, NULL, '', '', 0.00000, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(45, 'HJGG22KFC000044', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 19.58000, 19.58000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000044.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000044.jpg', NULL, '', '', '', '2025-06-13 09:46:54', '2025-06-13 09:46:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(46, 'HJGG22KFC000045', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 13.63000, 13.63000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000045.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000045.jpg', NULL, '', '', '', '2025-06-13 09:48:50', '2025-06-13 09:48:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(47, 'HJGG22KFC000046', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 16.16000, 16.16000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000046.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000046.jpg', NULL, '', '', '', '2025-06-13 09:50:40', '2025-06-13 09:50:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(48, 'HJGG22KFC000047', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 21.81000, 21.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000047.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000047.jpg', NULL, '', '', '', '2025-06-13 09:52:52', '2025-06-13 09:52:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(49, 'HJGG22KFC000048', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 19.58000, 19.58000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000048.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000048.jpg', NULL, '', '', '', '2025-06-13 09:55:06', '2025-06-13 09:55:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(50, 'HJGG22KFC000049', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 11.88000, 11.88000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000049.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000049.jpg', NULL, '', '', '', '2025-06-13 09:57:44', '2025-06-13 09:57:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(51, 'HJGG22KFC000050', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 7.52000, 7.52000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000050.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000050.jpg', NULL, '', '', '', '2025-06-13 09:59:55', '2025-06-13 09:59:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(52, 'HJGG22KFC000051', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 13.51000, 13.51000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000051.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000051.jpg', NULL, '', '', '', '2025-06-13 10:02:16', '2025-06-13 10:02:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(53, 'HJGG22KFC000052', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 9.76000, 9.76000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000052.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000052.png', NULL, '', '', '', '2025-06-13 10:06:13', '2025-06-13 10:06:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(54, 'HJGG22KFC000053', 0, 1, '22K Gold Fancychains', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 8.57000, 8.57000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000053.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000053.png', NULL, '', '', '', '2025-06-13 10:08:01', '2025-06-13 10:08:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(55, 'HJGG22KFC000054', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 57.00000, 57.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000054.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000054.jpg', NULL, '', '', '', '2025-06-16 10:09:40', '2025-06-16 10:09:40', NULL, NULL, '2025-06-16 10:10:41', NULL, 0, NULL, NULL, NULL, NULL),
(56, 'HJGG22KFC000055', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 44.00000, 44.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000055.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000055.jpg', NULL, '', '', '', '2025-06-16 10:13:39', '2025-06-16 10:13:39', NULL, NULL, '2025-06-16 10:14:04', NULL, 0, NULL, NULL, NULL, NULL),
(57, 'HJGG22KFC000056', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 27.00000, 27.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000056.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000056.jpg', NULL, '', '', '', '2025-06-16 10:14:24', '2025-06-16 10:14:24', NULL, NULL, '2025-06-16 10:14:45', NULL, 0, NULL, NULL, NULL, NULL),
(58, 'HJGG22KFC000057', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 28.00000, 28.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000057.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000057.jpg', NULL, '', '', '', '2025-06-16 10:15:05', '2025-06-16 10:15:05', NULL, NULL, '2025-06-16 10:15:22', NULL, 0, NULL, NULL, NULL, NULL),
(59, 'HJGG22KFC000058', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000058.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000058.jpg', NULL, '', '', '', '2025-06-16 10:15:44', '2025-06-16 10:15:44', NULL, NULL, '2025-06-16 10:15:54', NULL, 0, NULL, NULL, NULL, NULL),
(60, 'HJGG22KFC000059', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 18.35000, 18.35000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000059.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000059.jpg', NULL, '', '', '', '2025-06-16 10:16:29', '2025-06-16 10:16:29', NULL, NULL, '2025-06-16 10:16:52', NULL, 0, NULL, NULL, NULL, NULL),
(61, 'HJGG22KFC000060', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 69.00000, 69.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000060.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000060.jpg', NULL, '', '', '', '2025-06-16 10:17:11', '2025-06-16 10:17:11', NULL, NULL, '2025-06-16 10:17:33', NULL, 0, NULL, NULL, NULL, NULL),
(62, 'HJGG22KFC000061', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 45.00000, 45.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000061.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000061.jpg', NULL, '', '', '', '2025-06-16 10:17:55', '2025-06-16 10:17:55', NULL, NULL, '2025-06-16 10:18:16', NULL, 0, NULL, NULL, NULL, NULL),
(63, 'HJGG22KFC000062', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 37.00000, 37.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000062.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000062.jpg', NULL, '', '', '', '2025-06-16 10:18:40', '2025-06-16 10:18:40', NULL, NULL, '2025-06-16 10:18:59', NULL, 0, NULL, NULL, NULL, NULL),
(64, 'HJGG22KFC000063', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000063.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000063.jpg', NULL, '', '', '', '2025-06-16 10:19:18', '2025-06-16 10:19:18', NULL, NULL, '2025-06-16 10:19:28', NULL, 0, NULL, NULL, NULL, NULL),
(65, 'HJGG22KFC000064', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 12.00000, 12.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000064.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000064.jpg', NULL, '', '', '', '2025-06-16 10:19:56', '2025-06-16 10:19:56', NULL, NULL, '2025-06-16 10:20:18', NULL, 0, NULL, NULL, NULL, NULL),
(66, 'HJGG22KFC000065', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 38.00000, 38.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000065.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000065.jpg', NULL, '', '', '', '2025-06-16 10:20:44', '2025-06-16 10:20:44', NULL, NULL, '2025-06-16 10:21:14', NULL, 0, NULL, NULL, NULL, NULL),
(67, 'HJGG22KFC000066', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 37.00000, 37.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000066.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000066.jpg', NULL, '', '', '', '2025-06-16 10:21:37', '2025-06-16 10:21:37', NULL, NULL, '2025-06-16 10:22:29', NULL, 0, NULL, NULL, NULL, NULL),
(68, 'HJGG22KFC000067', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 59.00000, 59.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000067.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000067.jpg', NULL, '', '', '', '2025-06-16 10:22:54', '2025-06-16 10:22:54', NULL, NULL, '2025-06-16 10:23:33', NULL, 0, NULL, NULL, NULL, NULL),
(69, 'HJGG22KFC000068', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 32.00000, 32.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000068.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000068.jpg', NULL, '', '', '', '2025-06-16 10:23:52', '2025-06-16 10:23:52', NULL, NULL, '2025-06-16 10:24:09', NULL, 0, NULL, NULL, NULL, NULL),
(70, 'HJGG22KFC000069', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 25.00000, 25.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000069.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000069.jpg', NULL, '', '', '', '2025-06-16 10:24:32', '2025-06-16 10:24:32', NULL, NULL, '2025-06-16 10:24:52', NULL, 0, NULL, NULL, NULL, NULL),
(71, 'HJGG22KFC000070', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 22.00000, 22.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000070.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000070.jpg', NULL, '', '', '', '2025-06-16 10:25:15', '2025-06-16 10:25:15', NULL, NULL, '2025-06-16 10:25:33', NULL, 0, NULL, NULL, NULL, NULL),
(72, 'HJGG22KFC000071', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 25.00000, 25.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000071.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000071.jpg', NULL, '', '', '', '2025-06-16 10:25:54', '2025-06-16 10:25:54', NULL, NULL, '2025-06-16 10:26:12', NULL, 0, NULL, NULL, NULL, NULL),
(73, 'HJGG22KFC000072', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 42.00000, 42.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000072.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000072.jpg', NULL, '', '', '', '2025-06-16 10:26:34', '2025-06-16 10:26:34', NULL, NULL, '2025-06-16 10:27:04', NULL, 0, NULL, NULL, NULL, NULL),
(74, 'HJGG22KFC000073', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 30.00000, 30.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000073.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000073.jpg', NULL, '', '', '', '2025-06-16 10:27:25', '2025-06-16 10:27:25', NULL, NULL, '2025-06-16 10:28:05', NULL, 0, NULL, NULL, NULL, NULL),
(75, 'HJGG22KFC000074', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 54.00000, 54.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000074.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000074.jpg', NULL, '', '', '', '2025-06-16 10:28:35', '2025-06-16 10:28:35', NULL, NULL, '2025-06-16 10:28:54', NULL, 0, NULL, NULL, NULL, NULL),
(76, 'HJGG22KFC000075', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 55.00000, 55.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000075.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000075.jpg', NULL, '', '', '', '2025-06-16 10:29:16', '2025-06-16 10:29:16', NULL, NULL, '2025-06-16 10:29:31', NULL, 0, NULL, NULL, NULL, NULL),
(77, 'HJGG22KFC000076', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 28.00000, 28.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000076.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000076.jpg', NULL, '', '', '', '2025-06-16 10:29:51', '2025-06-16 10:29:51', NULL, NULL, '2025-06-16 10:30:07', NULL, 0, NULL, NULL, NULL, NULL),
(78, 'HJGG22KFC000077', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 42.00000, 42.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000077.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000077.jpg', NULL, '', '', '', '2025-06-16 10:30:30', '2025-06-16 10:30:30', NULL, NULL, '2025-06-16 10:30:51', NULL, 0, NULL, NULL, NULL, NULL),
(79, 'HJGG22KFC000078', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 25.00000, 25.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000078.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000078.jpg', NULL, '', '', '', '2025-06-16 10:31:15', '2025-06-16 10:31:15', NULL, NULL, '2025-06-16 10:31:37', NULL, 0, NULL, NULL, NULL, NULL),
(80, 'HJGG22KFC000079', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000079.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000079.jpg', NULL, '', '', '', '2025-06-16 10:31:58', '2025-06-16 10:31:58', NULL, NULL, '2025-06-16 10:32:09', NULL, 0, NULL, NULL, NULL, NULL),
(81, 'HJGG22KFC000080', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000080.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000080.jpg', NULL, '', '', '', '2025-06-16 10:32:34', '2025-06-16 10:32:34', NULL, NULL, '2025-06-16 10:32:44', NULL, 0, NULL, NULL, NULL, NULL),
(82, 'HJGG22KFC000081', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 18.00000, 18.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000081.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000081.jpg', NULL, '', '', '', '2025-06-16 10:33:07', '2025-06-16 10:33:07', NULL, NULL, '2025-06-16 10:33:27', NULL, 0, NULL, NULL, NULL, NULL),
(83, 'HJGG22KFC000082', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 76.00000, 76.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000082.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000082.jpg', NULL, '', '', '', '2025-06-16 10:33:48', '2025-06-16 10:33:48', NULL, NULL, '2025-06-16 10:34:06', NULL, 0, NULL, NULL, NULL, NULL),
(84, 'HJGG22KFC000083', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 48.00000, 48.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000083.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000083.jpg', NULL, '', '', '', '2025-06-16 10:34:30', '2025-06-16 10:34:30', NULL, NULL, '2025-06-16 10:36:06', NULL, 0, NULL, NULL, NULL, NULL),
(85, 'HJGG22KFC000084', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 40.00000, 40.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000084.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000084.jpg', NULL, '', '', '', '2025-06-16 10:36:32', '2025-06-16 10:36:32', NULL, NULL, '2025-06-16 10:36:55', NULL, 0, NULL, NULL, NULL, NULL),
(86, 'HJGG22KFC000085', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 22.00000, 22.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000085.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000085.jpg', NULL, '', '', '', '2025-06-16 10:37:15', '2025-06-16 10:37:15', NULL, NULL, '2025-06-16 10:37:32', NULL, 0, NULL, NULL, NULL, NULL),
(87, 'HJGG22KFC000086', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 22.00000, 22.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000086.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000086.jpg', NULL, '', '', '', '2025-06-16 10:37:56', '2025-06-16 10:37:56', NULL, NULL, '2025-06-16 10:38:13', NULL, 0, NULL, NULL, NULL, NULL),
(88, 'HJGG22KFC000087', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 49.00000, 49.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000087.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000087.jpg', NULL, '', '', '', '2025-06-16 10:38:39', '2025-06-16 10:38:39', NULL, NULL, '2025-06-16 10:38:56', NULL, 0, NULL, NULL, NULL, NULL),
(89, 'HJGG22KFC000088', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 25.00000, 25.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000088.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000088.jpg', NULL, '', '', '', '2025-06-16 10:39:18', '2025-06-16 10:39:18', NULL, NULL, '2025-06-16 10:39:40', NULL, 0, NULL, NULL, NULL, NULL),
(90, 'HJGG22KFC000089', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 30.00000, 30.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000089.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000089.jpg', NULL, '', '', '', '2025-06-16 10:40:02', '2025-06-16 10:40:02', NULL, NULL, '2025-06-16 10:40:20', NULL, 0, NULL, NULL, NULL, NULL),
(91, 'HJGG22KFC000090', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 22.00000, 22.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000090.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000090.jpg', NULL, '', '', '', '2025-06-16 10:40:43', '2025-06-16 10:40:43', NULL, NULL, '2025-06-16 10:41:01', NULL, 0, NULL, NULL, NULL, NULL),
(92, 'HJGG22KFC000091', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000091.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000091.jpg', NULL, '', '', '', '2025-06-16 10:41:24', '2025-06-16 10:41:24', NULL, NULL, '2025-06-16 10:41:35', NULL, 0, NULL, NULL, NULL, NULL),
(93, 'HJGG22KFC000092', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000092.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000092.jpg', NULL, '', '', '', '2025-06-16 10:42:04', '2025-06-16 10:42:04', NULL, NULL, '2025-06-16 10:42:18', NULL, 0, NULL, NULL, NULL, NULL),
(94, 'HJGG22KFC000093', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000093.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000093.jpg', NULL, '', '', '', '2025-06-16 10:42:42', '2025-06-16 10:42:42', NULL, NULL, '2025-06-16 10:42:53', NULL, 0, NULL, NULL, NULL, NULL),
(95, 'HJGG22KFC000094', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 17.63000, 17.63000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000094.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000094.jpg', NULL, '', '', '', '2025-06-16 10:43:18', '2025-06-16 10:43:18', NULL, NULL, '2025-06-16 10:43:42', NULL, 0, NULL, NULL, NULL, NULL),
(96, 'HJGG22KFC000095', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 16.00000, 16.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000095.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000095.jpg', NULL, '', '', '', '2025-06-16 10:44:13', '2025-06-16 10:44:13', NULL, NULL, '2025-06-16 10:44:31', NULL, 0, NULL, NULL, NULL, NULL),
(97, 'HJGG22KFC000096', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 6.00000, 6.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000096.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000096.jpg', NULL, '', '', '', '2025-06-16 10:44:52', '2025-06-16 10:44:52', NULL, NULL, '2025-06-16 10:45:11', NULL, 0, NULL, NULL, NULL, NULL),
(98, 'HJGG22KFC000097', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 56.00000, 56.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000097.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000097.jpg', NULL, '', '', '', '2025-06-16 10:45:40', '2025-06-16 10:45:40', NULL, NULL, '2025-06-16 10:46:04', NULL, 0, NULL, NULL, NULL, NULL),
(99, 'HJGG22KFC000098', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 63.00000, 63.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000098.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000098.jpg', NULL, '', '', '', '2025-06-16 10:46:35', '2025-06-16 10:46:35', NULL, NULL, '2025-06-16 10:46:57', NULL, 0, NULL, NULL, NULL, NULL),
(100, 'HJGG22KFC000099', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 40.00000, 40.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000099.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000099.jpg', NULL, '', '', '', '2025-06-16 10:47:19', '2025-06-16 10:47:19', NULL, NULL, '2025-06-16 10:47:38', NULL, 0, NULL, NULL, NULL, NULL),
(101, 'HJGG22KFC000100', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 42.00000, 42.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000100.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000100.jpg', NULL, '', '', '', '2025-06-16 10:48:02', '2025-06-16 10:48:02', NULL, NULL, '2025-06-16 10:48:22', NULL, 0, NULL, NULL, NULL, NULL),
(102, 'HJGG22KFC000101', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 61.00000, 61.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000101.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000101.jpg', NULL, '', '', '', '2025-06-16 10:48:50', '2025-06-16 10:48:50', NULL, NULL, '2025-06-16 10:49:07', NULL, 0, NULL, NULL, NULL, NULL),
(103, 'HJGG22KFC000102', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 44.00000, 44.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000102.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000102.jpg', NULL, '', '', '', '2025-06-16 10:49:44', '2025-06-16 10:49:44', NULL, NULL, '2025-06-16 10:50:03', NULL, 0, NULL, NULL, NULL, NULL),
(104, 'HJGG22KFC000103', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 24.00000, 24.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000103.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000103.jpg', NULL, '', '', '', '2025-06-16 10:50:30', '2025-06-16 10:50:30', NULL, NULL, '2025-06-16 10:50:50', NULL, 0, NULL, NULL, NULL, NULL),
(105, 'HJGG22KFC000104', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 33.00000, 33.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000104.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000104.jpg', NULL, '', '', '', '2025-06-16 10:51:21', '2025-06-16 10:51:21', NULL, NULL, '2025-06-16 10:51:45', NULL, 0, NULL, NULL, NULL, NULL),
(106, 'HJGG22KFC000105', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 27.00000, 27.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000105.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000105.jpg', NULL, '', '', '', '2025-06-16 10:52:11', '2025-06-16 10:52:11', NULL, NULL, '2025-06-16 10:52:29', NULL, 0, NULL, NULL, NULL, NULL),
(107, 'HJGG22KFC000106', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 30.00000, 30.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000106.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000106.jpg', NULL, '', '', '', '2025-06-16 10:52:57', '2025-06-16 10:52:57', NULL, NULL, '2025-06-16 10:53:16', NULL, 0, NULL, NULL, NULL, NULL);
INSERT INTO `22kgold_product_fancychains` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(108, 'HJGG22KFC000107', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 34.00000, 34.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000107.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000107.jpg', NULL, '', '', '', '2025-06-16 10:53:37', '2025-06-16 10:53:37', NULL, NULL, '2025-06-16 10:53:57', NULL, 0, NULL, NULL, NULL, NULL),
(109, 'HJGG22KFC000108', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 59.00000, 59.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000108.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000108.jpg', NULL, '', '', '', '2025-06-16 10:54:22', '2025-06-16 10:54:22', NULL, NULL, '2025-06-16 10:54:48', NULL, 0, NULL, NULL, NULL, NULL),
(110, 'HJGG22KFC000109', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 20.00000, 20.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000109.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000109.jpg', NULL, '', '', '', '2025-06-16 10:55:19', '2025-06-16 10:55:19', NULL, NULL, '2025-06-16 10:55:38', NULL, 0, NULL, NULL, NULL, NULL),
(111, 'HJGG22KFC000110', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 18.00000, 18.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000110.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000110.jpg', NULL, '', '', '', '2025-06-16 10:56:00', '2025-06-16 10:56:00', NULL, NULL, '2025-06-16 10:56:22', NULL, 0, NULL, NULL, NULL, NULL),
(112, 'HJGG22KFC000111', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 30.00000, 30.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000111.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000111.jpg', NULL, '', '', '', '2025-06-16 10:57:26', '2025-06-16 10:57:26', NULL, NULL, '2025-06-16 10:57:46', NULL, 0, NULL, NULL, NULL, NULL),
(113, 'HJGG22KFC000112', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 34.00000, 34.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000112.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000112.jpg', NULL, '', '', '', '2025-06-16 10:58:12', '2025-06-16 10:58:12', NULL, NULL, '2025-06-16 10:58:33', NULL, 0, NULL, NULL, NULL, NULL),
(114, 'HJGG22KFC000113', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 35.00000, 35.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000113.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000113.jpg', NULL, '', '', '', '2025-06-16 10:58:58', '2025-06-16 10:58:58', NULL, NULL, '2025-06-16 10:59:20', NULL, 0, NULL, NULL, NULL, NULL),
(115, 'HJGG22KFC000114', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 30.00000, 30.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000114.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000114.jpg', NULL, '', '', '', '2025-06-16 10:59:50', '2025-06-16 10:59:50', NULL, NULL, '2025-06-16 11:00:09', NULL, 0, NULL, NULL, NULL, NULL),
(116, 'HJGG22KFC000115', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 32.00000, 32.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000115.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000115.jpg', NULL, '', '', '', '2025-06-16 11:00:42', '2025-06-16 11:00:42', NULL, NULL, '2025-06-16 11:01:00', NULL, 0, NULL, NULL, NULL, NULL),
(117, 'HJGG22KFC000116', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 46.35000, 46.35000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000116.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000116.jpg', NULL, '', '', '', '2025-06-16 11:01:50', '2025-06-16 11:01:50', NULL, NULL, '2025-06-16 11:02:18', NULL, 0, NULL, NULL, NULL, NULL),
(118, 'HJGG22KFC000117', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000117.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000117.jpg', NULL, '', '', '', '2025-06-16 11:05:22', '2025-06-16 11:05:22', NULL, NULL, '2025-06-16 11:05:34', NULL, 0, NULL, NULL, NULL, NULL),
(119, 'HJGG22KFC000118', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000118.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000118.jpg', NULL, '', '', '', '2025-06-16 11:06:00', '2025-06-16 11:06:00', NULL, NULL, '2025-06-16 11:06:12', NULL, 0, NULL, NULL, NULL, NULL),
(120, 'HJGG22KFC000119', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000119.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000119.jpg', NULL, '', '', '', '2025-06-16 11:06:39', '2025-06-16 11:06:39', NULL, NULL, '2025-06-16 11:06:50', NULL, 0, NULL, NULL, NULL, NULL),
(121, 'HJGG22KFC000120', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000120.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000120.jpg', NULL, '', '', '', '2025-06-16 11:07:17', '2025-06-16 11:07:17', NULL, NULL, '2025-06-16 11:07:27', NULL, 0, NULL, NULL, NULL, NULL),
(122, 'HJGG22KFC000121', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 16.00000, 16.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000121.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000121.jpg', NULL, '', '', '', '2025-06-16 11:07:50', '2025-06-16 11:07:50', NULL, NULL, '2025-06-16 11:08:10', NULL, 0, NULL, NULL, NULL, NULL),
(123, 'HJGG22KFC000122', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 46.00000, 46.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000122.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000122.jpg', NULL, '', '', '', '2025-06-16 11:08:36', '2025-06-16 11:08:36', NULL, NULL, '2025-06-16 11:08:57', NULL, 0, NULL, NULL, NULL, NULL),
(124, 'HJGG22KFC000123', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 6.00000, 6.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000123.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000123.jpg', NULL, '', '', '', '2025-06-16 11:09:24', '2025-06-16 11:09:24', NULL, NULL, '2025-06-16 11:09:43', NULL, 0, NULL, NULL, NULL, NULL),
(125, 'HJGG22KFC000124', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 36.00000, 36.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000124.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000124.jpg', NULL, '', '', '', '2025-06-16 11:10:23', '2025-06-16 11:10:23', NULL, NULL, '2025-06-16 11:10:55', NULL, 0, NULL, NULL, NULL, NULL),
(126, 'HJGG22KFC000125', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 34.00000, 34.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000125.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000125.jpg', NULL, '', '', '', '2025-06-16 11:11:27', '2025-06-16 11:11:27', NULL, NULL, '2025-06-16 11:11:48', NULL, 0, NULL, NULL, NULL, NULL),
(127, 'HJGG22KFC000126', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 37.00000, 37.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000126.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000126.jpg', NULL, '', '', '', '2025-06-16 11:12:19', '2025-06-16 11:12:19', NULL, NULL, '2025-06-16 11:12:38', NULL, 0, NULL, NULL, NULL, NULL),
(128, 'HJGG22KFC000127', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 10.00000, 10.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000127.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000127.jpg', NULL, '', '', '', '2025-06-16 11:13:01', '2025-06-16 11:13:01', NULL, NULL, '2025-06-16 11:13:19', NULL, 0, NULL, NULL, NULL, NULL),
(129, 'HJGG22KFC000128', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 28.00000, 28.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000128.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000128.jpg', NULL, '', '', '', '2025-06-16 11:13:46', '2025-06-16 11:13:46', NULL, NULL, '2025-06-16 11:14:05', NULL, 0, NULL, NULL, NULL, NULL),
(130, 'HJGG22KFC000129', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 26.00000, 26.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000129.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000129.jpg', NULL, '', '', '', '2025-06-16 11:14:28', '2025-06-16 11:14:28', NULL, NULL, '2025-06-16 11:14:48', NULL, 0, NULL, NULL, NULL, NULL),
(131, 'HJGG22KFC000130', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 56.00000, 56.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000130.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000130.jpg', NULL, '', '', '', '2025-06-16 11:15:16', '2025-06-16 11:15:16', NULL, NULL, '2025-06-16 11:15:34', NULL, 0, NULL, NULL, NULL, NULL),
(132, 'HJGG22KFC000131', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 88.00000, 88.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000131.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000131.jpg', NULL, '', '', '', '2025-06-16 11:20:25', '2025-06-16 11:20:25', NULL, NULL, '2025-06-16 11:20:52', NULL, 0, NULL, NULL, NULL, NULL),
(133, 'HJGG22KFC000132', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 54.00000, 54.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000132.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000132.jpg', NULL, '', '', '', '2025-06-16 11:21:44', '2025-06-16 11:21:44', NULL, NULL, '2025-06-16 11:22:10', NULL, 0, NULL, NULL, NULL, NULL),
(134, 'HJGG22KFC000133', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 30.00000, 30.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000133.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000133.jpg', NULL, '', '', '', '2025-06-16 11:23:45', '2025-06-16 11:23:45', NULL, NULL, '2025-06-16 11:24:03', NULL, 0, NULL, NULL, NULL, NULL),
(135, 'HJGG22KFC000134', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 29.00000, 29.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000134.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000134.jpg', NULL, '', '', '', '2025-06-16 11:24:33', '2025-06-16 11:24:33', NULL, NULL, '2025-06-16 11:24:52', NULL, 0, NULL, NULL, NULL, NULL),
(136, 'HJGG22KFC000135', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 23.21000, 23.21000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000135.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000135.jpg', NULL, '', '', '', '2025-06-16 11:25:21', '2025-06-16 11:25:21', NULL, NULL, '2025-06-16 11:25:42', NULL, 0, NULL, NULL, NULL, NULL),
(137, 'HJGG22KFC000136', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 25.80000, 25.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000136.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000136.jpg', NULL, '', '', '', '2025-06-16 11:26:11', '2025-06-16 11:26:11', NULL, NULL, '2025-06-16 11:26:32', NULL, 0, NULL, NULL, NULL, NULL),
(138, 'HJGG22KFC000137', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000137.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000137.jpg', NULL, '', '', '', '2025-06-16 11:26:58', '2025-06-16 11:26:58', NULL, NULL, '2025-06-16 11:27:08', NULL, 0, NULL, NULL, NULL, NULL),
(139, 'HJGG22KFC000138', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000138.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000138.jpg', NULL, '', '', '', '2025-06-16 11:27:35', '2025-06-16 11:27:35', NULL, NULL, '2025-06-16 11:27:46', NULL, 0, NULL, NULL, NULL, NULL),
(140, 'HJGG22KFC000139', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000139.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000139.jpg', NULL, '', '', '', '2025-06-16 11:28:14', '2025-06-16 11:28:14', NULL, NULL, '2025-06-16 11:28:23', NULL, 0, NULL, NULL, NULL, NULL),
(141, 'HJGG22KFC000140', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000140.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000140.jpg', NULL, '', '', '', '2025-06-16 11:28:50', '2025-06-16 11:28:50', NULL, NULL, '2025-06-16 11:28:59', NULL, 0, NULL, NULL, NULL, NULL),
(142, 'HJGG22KFC000141', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000141.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000141.jpg', NULL, '', '', '', '2025-06-16 11:29:56', '2025-06-16 11:29:56', NULL, NULL, '2025-06-16 11:30:09', NULL, 0, NULL, NULL, NULL, NULL),
(143, 'HJGG22KFC000142', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 68.00000, 68.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000142.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000142.jpg', NULL, '', '', '', '2025-06-16 11:30:38', '2025-06-16 11:30:38', NULL, NULL, '2025-06-16 11:30:58', NULL, 0, NULL, NULL, NULL, NULL),
(144, 'HJGG22KFC000143', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 63.00000, 63.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000143.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000143.jpg', NULL, '', '', '', '2025-06-16 11:31:23', '2025-06-16 11:31:23', NULL, NULL, '2025-06-16 11:31:42', NULL, 0, NULL, NULL, NULL, NULL),
(145, 'HJGG22KFC000144', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 36.00000, 36.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000144.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000144.jpg', NULL, '', '', '', '2025-06-16 11:32:07', '2025-06-16 11:32:07', NULL, NULL, '2025-06-16 11:32:26', NULL, 0, NULL, NULL, NULL, NULL),
(146, 'HJGG22KFC000145', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 10.00000, 10.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000145.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000145.jpg', NULL, '', '', '', '2025-06-16 11:32:53', '2025-06-16 11:32:53', NULL, NULL, '2025-06-16 11:33:12', NULL, 0, NULL, NULL, NULL, NULL),
(147, 'HJGG22KFC000146', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 54.00000, 54.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000146.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000146.jpg', NULL, '', '', '', '2025-06-16 11:33:36', '2025-06-16 11:33:36', NULL, NULL, '2025-06-16 11:33:56', NULL, 0, NULL, NULL, NULL, NULL),
(148, 'HJGG22KFC000147', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 86.00000, 86.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000147.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000147.jpg', NULL, '', '', '', '2025-06-16 11:34:21', '2025-06-16 11:34:21', NULL, NULL, '2025-06-16 11:34:44', NULL, 0, NULL, NULL, NULL, NULL),
(149, 'HJGG22KFC000148', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 32.00000, 32.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000148.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000148.jpg', NULL, '', '', '', '2025-06-16 11:35:13', '2025-06-16 11:35:13', NULL, NULL, '2025-06-16 11:35:32', NULL, 0, NULL, NULL, NULL, NULL),
(150, 'HJGG22KFC000149', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 33.00000, 33.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000149.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000149.jpg', NULL, '', '', '', '2025-06-16 11:35:54', '2025-06-16 11:35:54', NULL, NULL, '2025-06-16 11:36:13', NULL, 0, NULL, NULL, NULL, NULL),
(151, 'HJGG22KFC000150', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 44.00000, 44.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000150.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000150.jpg', NULL, '', '', '', '2025-06-16 11:36:43', '2025-06-16 11:36:43', NULL, NULL, '2025-06-16 11:37:01', NULL, 0, NULL, NULL, NULL, NULL),
(152, 'HJGG22KFC000151', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 22.00000, 22.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000151.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000151.jpg', NULL, '', '', '', '2025-06-16 11:37:24', '2025-06-16 11:37:24', NULL, NULL, '2025-06-16 11:37:42', NULL, 0, NULL, NULL, NULL, NULL),
(153, 'HJGG22KFC000152', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 30.00000, 30.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000152.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000152.jpg', NULL, '', '', '', '2025-06-16 11:38:13', '2025-06-16 11:38:13', NULL, NULL, '2025-06-16 11:38:32', NULL, 0, NULL, NULL, NULL, NULL),
(154, 'HJGG22KFC000153', 0, 1, '22k Gold Heavy Weight Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 20.00000, 20.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000153.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000153.jpg', NULL, '', '', '', '2025-06-16 11:38:53', '2025-06-16 11:38:53', NULL, NULL, '2025-06-16 11:39:14', NULL, 0, NULL, NULL, NULL, NULL),
(155, 'HJGG22KFC000154', 0, 1, '22k Gold Turkish Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 34.81000, 34.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000154.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000154.png', NULL, '', '', '', '2025-06-17 08:59:29', '2025-06-17 08:59:29', NULL, NULL, '2025-06-17 09:00:26', NULL, 0, NULL, NULL, NULL, NULL),
(156, 'HJGG22KFC000155', 0, 1, '22k Gold Turkish Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 21.56000, 25.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000155.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000155.png', NULL, '', '', '', '2025-06-17 09:00:55', '2025-06-17 09:00:55', NULL, NULL, '2025-06-17 09:03:46', NULL, 0, NULL, NULL, NULL, NULL),
(157, 'HJGG22KFC000156', 0, 1, '22k Gold Turkish Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 21.49000, 21.49000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000156.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000156.jpg', NULL, '', '', '', '2025-06-17 09:04:58', '2025-06-17 09:04:58', NULL, NULL, '2025-06-17 09:05:28', NULL, 0, NULL, NULL, NULL, NULL),
(158, 'HJGG22KFC000157', 0, 1, '22k Gold Turkish Fancy Chain', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 26.23000, 26.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000157.webp', 'product_images/gold/22K_gold/22kgold_product_fancychains/HJGG22KFC000157.png', NULL, '', '', '', '2025-06-17 09:06:10', '2025-06-17 09:06:10', NULL, NULL, '2025-06-17 09:06:35', NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_kadas`
--

CREATE TABLE `22kgold_product_kadas` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_necklaces`
--

CREATE TABLE `22kgold_product_necklaces` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_necklaces`
--

INSERT INTO `22kgold_product_necklaces` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(1, 'HJGG22KNK000001', 0, 85, '22k Necklace', '22k Necklace', 1, 5, 1, NULL, 'Female', 'Kids Size', 11.67000, 11.67000, NULL, 1, 'It jas stones', 'Red', 'Other', 8, 0.00000, 300, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000001.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000001.jpg', NULL, '', '', '', '2025-06-09 17:50:17', '2025-06-18 04:19:28', NULL, NULL, '2025-06-19 03:06:59', 1, 0, NULL, NULL, NULL, NULL),
(2, 'HJGG22KNK000002', 0, 65, '22k Necklace', '22k Necklace', 1, 5, 1, NULL, 'Female', 'Adult Size', 13.45000, 13.45000, NULL, 1, 'It jas stones', 'Red', 'Other', 8, 0.00000, 300, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000002.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000002.jpg', NULL, '', '', '', '2025-06-09 17:51:08', '2025-06-18 04:19:28', NULL, NULL, '2025-06-19 03:07:06', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG22KNK000003', 0, 1, '22K Gold Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 8.57000, 8.57000, NULL, 1, 'It jas stones', 'Red', 'Other', 8, 0.00000, 300, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000003.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000003.png', NULL, '', '', '', '2025-06-17 09:18:37', '2025-06-18 04:19:28', NULL, NULL, '2025-06-19 03:07:11', NULL, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KNK000004', 0, 1, '22K Gold Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 3.97000, 3.97000, NULL, 1, 'It jas stones', 'Red', 'Other', 8, 0.00000, 300, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000004.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000004.png', NULL, '', '', '', '2025-06-17 09:20:01', '2025-06-18 04:19:28', NULL, NULL, '2025-06-19 03:07:14', NULL, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KNK000005', 0, 1, '22K Gold Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 11.67000, 11.67000, NULL, 1, 'It jas stones', 'Red', 'Other', 8, 0.00000, 300, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000005.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000005.jpg', NULL, '', '', '', '2025-06-17 09:20:59', '2025-06-18 04:19:28', NULL, NULL, '2025-06-19 03:07:16', NULL, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KNK000006', 0, 1, '22K Gold Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 13.45000, 13.45000, NULL, 1, 'It jas stones', 'Red', 'Other', 8, 0.00000, 300, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000006.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000006.jpg', NULL, '', '', '', '2025-06-17 09:23:14', '2025-06-18 04:19:28', NULL, NULL, '2025-06-19 03:07:20', NULL, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KNK000007', 0, 1, '22K Gold Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 9.07000, 9.07000, NULL, 1, 'It jas stones', 'Red', 'Other', 8, 0.00000, 300, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000007.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000007.jpg', NULL, '', '', '', '2025-06-17 09:23:59', '2025-06-18 04:19:28', NULL, NULL, '2025-06-19 03:07:24', NULL, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG22KNK000008', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 4.40000, 5.34000, NULL, 1, 'It jas stones', 'Red', 'Other', 8, 0.00000, 300, 1, 'dfgdfg', 1.00000, 1, 'Poor', '0', 'IF', 'Round', 1, 'adasd', 'Pearl', 1, 1.00000, 1, 1, 'asdasda', 'Gray', 1, 1.00000, 100, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000008.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000008.png', NULL, '', '', '', '2025-06-17 09:24:51', '2025-06-18 20:46:37', NULL, NULL, '2025-06-19 03:07:26', NULL, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG22KNK000009', 0, 86, '22k Necklace', '22k Necklace', 1, 5, 12, NULL, 'Female', 'Adult Size', 8.45000, 8.45000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000009.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000009.png', NULL, '', '', '', '2025-06-09 20:16:06', '2025-06-09 20:16:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG22KNK000010', 0, 96, '22k Necklace', '22k Necklace', 1, 5, 12, NULL, 'Female', 'Adult Size', 3.77000, 3.77000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000010.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000010.png', NULL, '', '', '', '2025-06-09 20:16:50', '2025-06-09 20:16:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG22KNK000011', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.16000, 4.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000011.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000011.png', NULL, '', '', '', '2025-06-13 07:34:08', '2025-06-13 07:34:08', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG22KNK000012', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.05000, 4.29000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000012.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000012.png', NULL, '', '', '', '2025-06-13 07:35:51', '2025-06-13 07:35:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJGG22KNK000013', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 2.21000, 2.21000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000013.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000013.png', NULL, '', '', '', '2025-06-13 07:37:23', '2025-06-13 07:37:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJGG22KNK000014', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.42000, 4.42000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000014.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000014.png', NULL, '', '', '', '2025-06-13 07:39:06', '2025-06-13 07:39:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJGG22KNK000015', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 3.13000, 3.13000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000015.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000015.png', NULL, '', '', '', '2025-06-13 07:40:14', '2025-06-13 07:40:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJGG22KNK000016', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.64000, 4.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000016.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000016.png', NULL, '', '', '', '2025-06-13 08:26:34', '2025-06-13 08:26:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJGG22KNK000017', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.54000, 4.54000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000017.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000017.png', NULL, '', '', '', '2025-06-13 08:28:31', '2025-06-13 08:28:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJGG22KNK000018', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 3.26000, 3.26000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000018.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000018.png', NULL, '', '', '', '2025-06-13 08:30:20', '2025-06-13 08:30:20', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJGG22KNK000019', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.96000, 4.96000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000019.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000019.png', NULL, '', '', '', '2025-06-13 08:32:00', '2025-06-13 08:32:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJGG22KNK000020', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.07000, 4.07000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000020.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000020.png', NULL, '', '', '', '2025-06-13 08:33:44', '2025-06-13 08:33:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJGG22KNK000021', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 2.32000, 2.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000021.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000021.png', NULL, '', '', '', '2025-06-13 08:37:53', '2025-06-13 08:37:53', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJGG22KNK000022', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.11000, 4.11000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000022.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000022.png', NULL, '', '', '', '2025-06-13 08:39:37', '2025-06-13 08:39:37', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJGG22KNK000023', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.16000, 4.54000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000023.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000023.png', NULL, '', '', '', '2025-06-13 08:41:42', '2025-06-13 08:41:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJGG22KNK000024', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 3.74000, 3.99000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000024.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000024.png', NULL, '', '', '', '2025-06-13 08:43:34', '2025-06-13 08:43:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(25, 'HJGG22KNK000025', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.19000, 4.19000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000025.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000025.png', NULL, '', '', '', '2025-06-13 08:48:37', '2025-06-13 08:48:37', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(26, 'HJGG22KNK000026', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.10000, 4.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000026.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000026.png', NULL, '', '', '', '2025-06-13 08:50:26', '2025-06-13 08:50:26', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(27, 'HJGG22KNK000027', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.50000, 4.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000027.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000027.png', NULL, '', '', '', '2025-06-13 08:52:20', '2025-06-13 08:52:20', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(28, 'HJGG22KNK000028', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.13000, 4.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000028.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000028.png', NULL, '', '', '', '2025-06-13 08:53:58', '2025-06-13 08:53:58', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(29, 'HJGG22KNK000029', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 3.73000, 3.98000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000029.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000029.png', NULL, '', '', '', '2025-06-13 08:56:16', '2025-06-13 08:56:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(30, 'HJGG22KNK000030', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 4.00000, 4.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000030.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000030.png', NULL, '', '', '', '2025-06-13 08:58:42', '2025-06-13 08:58:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(31, 'HJGG22KNK000031', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 3.41000, 3.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000031.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000031.png', NULL, '', '', '', '2025-06-13 08:59:57', '2025-06-13 08:59:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(32, 'HJGG22KNK000032', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 3.70000, 3.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000032.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000032.png', NULL, '', '', '', '2025-06-13 09:01:14', '2025-06-13 09:01:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(33, 'HJGG22KNK000033', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 3.31000, 3.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000033.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000033.png', NULL, '', '', '', '2025-06-13 09:03:09', '2025-06-13 09:03:09', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(34, 'HJGG22KNK000034', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 7.07000, 7.07000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000034.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000034.png', NULL, '', '', '', '2025-06-13 09:09:57', '2025-06-13 09:09:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(35, 'HJGG22KNK000035', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 5.44000, 5.48000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000035.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000035.png', NULL, '', '', '', '2025-06-13 09:11:56', '2025-06-13 09:11:56', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(36, 'HJGG22KNK000036', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 5.57000, 6.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000036.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000036.png', NULL, '', '', '', '2025-06-13 09:13:38', '2025-06-13 09:13:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(37, 'HJGG22KNK000037', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 6.09000, 6.09000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000037.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000037.png', NULL, '', '', '', '2025-06-13 09:15:45', '2025-06-13 09:15:45', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(38, 'HJGG22KNK000038', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 5.80000, 7.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000038.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000038.png', NULL, '', '', '', '2025-06-13 09:17:49', '2025-06-13 09:17:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(39, 'HJGG22KNK000039', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 10.23000, 10.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000039.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000039.png', NULL, '', '', '', '2025-06-13 09:19:30', '2025-06-13 09:19:30', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(40, 'HJGG22KNK000040', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 5.77000, 7.26000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000040.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000040.png', NULL, '', '', '', '2025-06-13 09:21:16', '2025-06-13 09:21:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(41, 'HJGG22KNK000041', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 16.31000, 16.31000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000041.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000041.png', NULL, '', '', '', '2025-06-13 09:23:00', '2025-06-13 09:23:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(42, 'HJGG22KNK000042', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 6.70000, 6.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000042.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000042.png', NULL, '', '', '', '2025-06-13 09:24:42', '2025-06-13 09:24:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(43, 'HJGG22KNK000043', 0, 1, '22K Gold Necklace', '', 1, 5, 12, NULL, 'Female', 'Adult Size', 6.56000, 6.56000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000043.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000043.png', NULL, '', '', '', '2025-06-13 09:26:07', '2025-06-13 09:26:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(44, 'HJGG22KNK000044', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 5.07000, 5.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000044.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000044.png', NULL, '', '', '', '2025-06-19 03:26:30', '2025-06-19 03:26:30', NULL, NULL, '2025-06-19 03:27:24', NULL, 0, NULL, NULL, NULL, NULL),
(45, 'HJGG22KNK000045', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 4.81000, 5.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000045.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000045.png', NULL, '', '', '', '2025-06-19 03:27:39', '2025-06-19 03:27:39', NULL, NULL, '2025-06-19 03:28:00', NULL, 0, NULL, NULL, NULL, NULL),
(46, 'HJGG22KNK000046', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 5.86000, 6.31000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000046.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000046.png', NULL, '', '', '', '2025-06-19 03:28:20', '2025-06-19 03:28:20', NULL, NULL, '2025-06-19 03:28:51', NULL, 0, NULL, NULL, NULL, NULL),
(47, 'HJGG22KNK000047', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 6.00000, 6.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000047.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000047.png', NULL, '', '', '', '2025-06-19 03:29:06', '2025-06-19 03:29:06', NULL, NULL, '2025-06-19 03:29:22', NULL, 0, NULL, NULL, NULL, NULL),
(48, 'HJGG22KNK000048', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 4.97000, 5.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000048.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000048.png', NULL, '', '', '', '2025-06-19 03:29:36', '2025-06-19 03:29:36', NULL, NULL, '2025-06-19 03:29:53', NULL, 0, NULL, NULL, NULL, NULL),
(49, 'HJGG22KNK000049', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 5.37000, 5.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000049.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000049.png', NULL, '', '', '', '2025-06-19 03:30:35', '2025-06-19 03:30:35', NULL, NULL, '2025-06-19 03:30:55', NULL, 0, NULL, NULL, NULL, NULL),
(50, 'HJGG22KNK000050', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 5.50000, 5.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000050.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000050.png', NULL, '', '', '', '2025-06-19 03:31:14', '2025-06-19 03:31:14', NULL, NULL, '2025-06-19 03:31:25', NULL, 0, NULL, NULL, NULL, NULL),
(51, 'HJGG22KNK000051', 0, 1, '22K Necklace', '', 1, 5, 1, NULL, 'Female', 'Adult Size', 7.08000, 7.08000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000051.webp', 'product_images/gold/22K_gold/22kgold_product_necklaces/HJGG22KNK000051.png', NULL, '', '', '', '2025-06-19 03:31:38', '2025-06-19 03:31:38', NULL, NULL, '2025-06-19 03:31:50', NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_nosepins`
--

CREATE TABLE `22kgold_product_nosepins` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_pendants`
--

CREATE TABLE `22kgold_product_pendants` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_pendants`
--

INSERT INTO `22kgold_product_pendants` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG22KPN000001', 0, 56, '22k Pendants', '22k Pendants', 1, 5, 2, NULL, 'Female', 'Adult Size', 2.94000, 2.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000001.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000001.png', NULL, '', '', '', '2025-06-09 17:47:24', '2025-06-09 17:47:24', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG22KPN000002', 0, 23, '22k Pendants', '22k Pendants', 1, 5, 2, NULL, 'Female', 'Adult Size', 3.04000, 3.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000002.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000002.png', NULL, '', '', '', '2025-06-09 17:48:11', '2025-06-09 17:48:11', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KPN000003', 0, 1, '22K Gold Pendants', '', 1, 5, 2, NULL, 'Female', 'Adult Size', 1.21000, 1.21000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000003.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000003.jpg', NULL, '', '', '', '2025-06-13 10:16:30', '2025-06-13 10:16:30', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KPN000004', 0, 1, '22K Gold Pendants', '', 1, 5, 2, NULL, 'Female', 'Adult Size', 1.06000, 1.06000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000004.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000004.jpg', NULL, '', '', '', '2025-06-13 10:26:05', '2025-06-13 10:26:05', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KPN000005', 0, 1, '22K Gold Pendants', '', 1, 5, 2, NULL, 'Female', 'Adult Size', 2.02000, 2.02000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000005.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000005.jpg', NULL, '', '', '', '2025-06-13 10:29:22', '2025-06-13 10:29:22', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KPN000006', 0, 1, '22K Gold Pendants', '', 1, 5, 2, NULL, 'Male', 'Adult Size', 1.82000, 1.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000006.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000006.jpg', NULL, '', '', '', '2025-06-13 10:31:15', '2025-06-13 10:31:15', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG22KPN000007', 0, 1, '22K Gold Pendants', '', 1, 5, 2, NULL, 'Male', 'Adult Size', 2.42000, 2.42000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000007.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000007.jpg', NULL, '', '', '', '2025-06-13 10:34:24', '2025-06-13 10:34:24', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG22KPN000008', 0, 1, '22K Gold Pendants', '', 1, 5, 2, NULL, 'Male', 'Adult Size', 1.89000, 1.89000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000008.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000008.jpg', NULL, '', '', '', '2025-06-13 10:36:51', '2025-06-13 10:36:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG22KPN000009', 0, 0, '', NULL, 1, 5, 2, NULL, 'Unisex', NULL, NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000009.webp', 'product_images/gold/22K_gold/22kgold_product_pendants/HJGG22KPN000009.jpg', NULL, '', '', '', '2025-06-13 10:43:22', '2025-06-13 10:43:22', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_rings`
--

CREATE TABLE `22kgold_product_rings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_rings`
--

INSERT INTO `22kgold_product_rings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `cat_id`, `metalpurity_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(4, 'HJGG22KRG000004', 0, 20, '22k Rings', '22k Rings', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.34000, 2.34000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000004.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000004.png', NULL, '', '', '', '2025-06-09 17:30:10', '2025-06-09 17:30:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KRG000005', 0, 30, '22k Rings', '22k Rings', 1, 7, 5, NULL, 'Female', 'Adult Size', 0.84000, 0.84000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000005.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000005.png', NULL, '', '', '', '2025-06-09 17:32:42', '2025-06-09 17:32:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KRG000006', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 3.39000, 3.39000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000006.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000006.png', NULL, '', '', '', '2025-06-13 10:56:37', '2025-06-13 10:56:37', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KRG000007', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.78000, 2.78000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000007.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000007.png', NULL, '', '', '', '2025-06-13 10:58:12', '2025-06-13 10:58:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG22KRG000008', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.27000, 2.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000008.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000008.png', NULL, '', '', '', '2025-06-13 10:59:41', '2025-06-13 10:59:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG22KRG000009', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.32000, 2.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000009.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000009.png', NULL, '', '', '', '2025-06-13 11:00:52', '2025-06-13 11:00:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG22KRG000010', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.80000, 2.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000010.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000010.png', NULL, '', '', '', '2025-06-13 11:02:06', '2025-06-13 11:02:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG22KRG000011', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.30000, 2.30000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000011.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000011.png', NULL, '', '', '', '2025-06-13 11:08:23', '2025-06-13 11:08:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG22KRG000012', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.92000, 1.92000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000012.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000012.png', NULL, '', '', '', '2025-06-13 11:09:55', '2025-06-13 11:09:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJGG22KRG000013', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.30000, 2.30000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000013.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000013.png', NULL, '', '', '', '2025-06-13 11:11:44', '2025-06-13 11:11:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJGG22KRG000014', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.35000, 2.35000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000014.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000014.png', NULL, '', '', '', '2025-06-13 11:13:19', '2025-06-13 11:13:19', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJGG22KRG000015', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.49000, 2.49000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000015.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000015.png', NULL, '', '', '', '2025-06-13 11:15:02', '2025-06-13 11:15:02', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJGG22KRG000016', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.93000, 1.93000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000016.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000016.png', NULL, '', '', '', '2025-06-13 11:16:29', '2025-06-13 11:16:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJGG22KRG000017', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.82000, 2.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000017.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000017.png', NULL, '', '', '', '2025-06-13 11:17:57', '2025-06-13 11:17:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJGG22KRG000018', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.41000, 1.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000018.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000018.png', NULL, '', '', '', '2025-06-13 11:19:41', '2025-06-13 11:19:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJGG22KRG000019', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 3.60000, 3.60000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000019.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000019.png', NULL, '', '', '', '2025-06-13 11:21:22', '2025-06-13 11:21:22', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJGG22KRG000020', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.37000, 2.37000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000020.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000020.png', NULL, '', '', '', '2025-06-13 11:22:51', '2025-06-13 11:22:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJGG22KRG000021', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 4.98000, 4.98000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000021.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000021.png', NULL, '', '', '', '2025-06-13 11:24:24', '2025-06-13 11:24:24', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJGG22KRG000022', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.24000, 2.24000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000022.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000022.png', NULL, '', '', '', '2025-06-13 11:25:59', '2025-06-13 11:25:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJGG22KRG000023', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.70000, 2.70000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000023.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000023.png', NULL, '', '', '', '2025-06-13 11:34:33', '2025-06-13 11:34:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJGG22KRG000024', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 0.84000, 0.84000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000024.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000024.png', NULL, '', '', '', '2025-06-16 07:00:52', '2025-06-16 07:00:52', NULL, NULL, '2025-06-16 07:01:16', NULL, 0, NULL, NULL, NULL, NULL),
(25, 'HJGG22KRG000025', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.17000, 2.17000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000025.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000025.png', NULL, '', '', '', '2025-06-16 07:01:52', '2025-06-16 07:01:52', NULL, NULL, '2025-06-16 07:02:19', NULL, 0, NULL, NULL, NULL, NULL),
(26, 'HJGG22KRG000026', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.15000, 2.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000026.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000026.png', NULL, '', '', '', '2025-06-16 07:02:42', '2025-06-16 07:02:42', NULL, NULL, '2025-06-16 07:03:02', NULL, 0, NULL, NULL, NULL, NULL),
(27, 'HJGG22KRG000027', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.31000, 2.31000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000027.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000027.png', NULL, '', '', '', '2025-06-16 07:03:23', '2025-06-16 07:03:23', NULL, NULL, '2025-06-16 07:03:42', NULL, 0, NULL, NULL, NULL, NULL),
(28, 'HJGG22KRG000028', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.64000, 2.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000028.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000028.png', NULL, '', '', '', '2025-06-16 07:04:08', '2025-06-16 07:04:08', NULL, NULL, '2025-06-16 07:04:56', NULL, 0, NULL, NULL, NULL, NULL),
(29, 'HJGG22KRG000029', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.42000, 1.42000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000029.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000029.png', NULL, '', '', '', '2025-06-16 07:05:27', '2025-06-16 07:05:27', NULL, NULL, '2025-06-16 07:05:48', NULL, 0, NULL, NULL, NULL, NULL),
(30, 'HJGG22KRG000030', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.70000, 1.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000030.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000030.png', NULL, '', '', '', '2025-06-16 07:06:09', '2025-06-16 07:06:09', NULL, NULL, '2025-06-16 07:06:51', NULL, 0, NULL, NULL, NULL, NULL),
(31, 'HJGG22KRG000031', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.19000, 1.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000031.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000031.jpg', NULL, '', '', '', '2025-06-16 07:13:32', '2025-06-16 07:13:32', NULL, NULL, '2025-06-16 07:14:08', NULL, 0, NULL, NULL, NULL, NULL),
(32, 'HJGG22KRG000032', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.81400, 1.97400, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000032.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000032.jpg', NULL, '', '', '', '2025-06-16 07:14:30', '2025-06-16 07:14:30', NULL, NULL, '2025-06-16 07:14:58', NULL, 0, NULL, NULL, NULL, NULL),
(33, 'HJGG22KRG000033', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.73200, 1.75000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000033.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000033.jpg', NULL, '', '', '', '2025-06-16 07:15:22', '2025-06-16 07:15:22', NULL, NULL, '2025-06-16 07:15:47', NULL, 0, NULL, NULL, NULL, NULL),
(34, 'HJGG22KRG000034', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.20000, 1.21000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000034.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000034.png', NULL, '', '', '', '2025-06-16 07:16:14', '2025-06-16 07:16:14', NULL, NULL, '2025-06-16 07:16:47', NULL, 0, NULL, NULL, NULL, NULL),
(35, 'HJGG22KRG000035', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.18000, 2.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000035.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000035.png', NULL, '', '', '', '2025-06-16 07:17:12', '2025-06-16 07:17:12', NULL, NULL, '2025-06-16 07:17:37', NULL, 0, NULL, NULL, NULL, NULL),
(36, 'HJGG22KRG000036', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.76400, 1.78000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000036.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000036.png', NULL, '', '', '', '2025-06-16 07:18:03', '2025-06-16 07:18:03', NULL, NULL, '2025-06-16 07:18:33', NULL, 0, NULL, NULL, NULL, NULL),
(37, 'HJGG22KRG000037', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.00600, 1.02000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000037.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000037.png', NULL, '', '', '', '2025-06-16 07:18:56', '2025-06-16 07:18:56', NULL, NULL, '2025-06-16 07:19:27', NULL, 0, NULL, NULL, NULL, NULL),
(38, 'HJGG22KRG000038', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 0.12800, 1.14000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000038.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000038.png', NULL, '', '', '', '2025-06-16 07:19:57', '2025-06-16 07:19:57', NULL, NULL, '2025-06-16 07:20:32', NULL, 0, NULL, NULL, NULL, NULL),
(39, 'HJGG22KRG000039', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.43000, 1.44000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000039.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000039.png', NULL, '', '', '', '2025-06-16 07:21:02', '2025-06-16 07:21:02', NULL, NULL, '2025-06-16 07:21:39', NULL, 0, NULL, NULL, NULL, NULL),
(40, 'HJGG22KRG000040', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.15200, 1.22000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000040.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000040.png', NULL, '', '', '', '2025-06-16 07:22:06', '2025-06-16 07:22:06', NULL, NULL, '2025-06-16 07:22:34', NULL, 0, NULL, NULL, NULL, NULL),
(41, 'HJGG22KRG000041', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 3.79000, 3.79000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000041.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000041.jpg', NULL, '', '', '', '2025-06-16 07:23:55', '2025-06-16 07:23:55', NULL, NULL, '2025-06-16 07:24:18', NULL, 0, NULL, NULL, NULL, NULL),
(42, 'HJGG22KRG000042', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 4.11000, 4.11000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000042.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000042.jpg', NULL, '', '', '', '2025-06-16 07:25:46', '2025-06-16 07:25:46', NULL, NULL, '2025-06-16 07:26:06', NULL, 0, NULL, NULL, NULL, NULL),
(43, 'HJGG22KRG000043', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 3.95000, 3.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000043.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000043.jpg', NULL, '', '', '', '2025-06-16 07:26:27', '2025-06-16 07:26:27', NULL, NULL, '2025-06-16 07:26:48', NULL, 0, NULL, NULL, NULL, NULL),
(44, 'HJGG22KRG000044', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.86000, 1.86000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000044.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000044.jpg', NULL, '', '', '', '2025-06-16 07:27:07', '2025-06-16 07:27:07', NULL, NULL, '2025-06-16 07:27:28', NULL, 0, NULL, NULL, NULL, NULL),
(45, 'HJGG22KRG000045', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.82400, 1.85000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000045.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000045.png', NULL, '', '', '', '2025-06-16 07:28:00', '2025-06-16 07:28:00', NULL, NULL, '2025-06-16 07:28:27', NULL, 0, NULL, NULL, NULL, NULL),
(46, 'HJGG22KRG000046', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.57800, 1.59000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000046.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000046.png', NULL, '', '', '', '2025-06-16 07:28:53', '2025-06-16 07:28:53', NULL, NULL, '2025-06-16 07:30:04', NULL, 0, NULL, NULL, NULL, NULL),
(47, 'HJGG22KRG000047', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.39400, 1.42000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000047.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000047.png', NULL, '', '', '', '2025-06-16 07:30:32', '2025-06-16 07:30:32', NULL, NULL, '2025-06-16 07:31:01', NULL, 0, NULL, NULL, NULL, NULL),
(48, 'HJGG22KRG000048', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.07600, 1.09000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000048.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000048.png', NULL, '', '', '', '2025-06-16 07:31:33', '2025-06-16 07:31:33', NULL, NULL, '2025-06-16 07:32:07', NULL, 0, NULL, NULL, NULL, NULL),
(49, 'HJGG22KRG000049', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.18200, 1.22000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000049.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000049.png', NULL, '', '', '', '2025-06-16 07:32:44', '2025-06-16 07:32:44', NULL, NULL, '2025-06-16 07:33:16', NULL, 0, NULL, NULL, NULL, NULL),
(50, 'HJGG22KRG000050', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.89000, 1.89000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000050.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000050.jpg', NULL, '', '', '', '2025-06-16 07:35:19', '2025-06-16 07:35:19', NULL, NULL, '2025-06-16 07:35:42', NULL, 0, NULL, NULL, NULL, NULL),
(51, 'HJGG22KRG000051', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 1.38000, 1.38000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000051.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000051.jpg', NULL, '', '', '', '2025-06-16 07:36:04', '2025-06-16 07:36:04', NULL, NULL, '2025-06-16 07:36:24', NULL, 0, NULL, NULL, NULL, NULL),
(52, 'HJGG22KRG000052', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.25000, 2.25000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000052.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000052.jpg', NULL, '', '', '', '2025-06-16 07:36:48', '2025-06-16 07:36:48', NULL, NULL, '2025-06-16 07:37:07', NULL, 0, NULL, NULL, NULL, NULL),
(53, 'HJGG22KRG000053', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.40000, 2.40000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000053.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000053.jpg', NULL, '', '', '', '2025-06-16 07:37:28', '2025-06-16 07:37:28', NULL, NULL, '2025-06-16 07:37:48', NULL, 0, NULL, NULL, NULL, NULL),
(54, 'HJGG22KRG000054', 0, 1, '22K Gold Rings', '', 1, 7, 5, NULL, 'Female', 'Adult Size', 2.77000, 2.77000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000054.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000054.jpg', NULL, '', '', '', '2025-06-16 07:38:17', '2025-06-16 07:38:17', NULL, NULL, '2025-06-16 07:38:39', NULL, 0, NULL, NULL, NULL, NULL),
(55, 'HJGG22KRG000055', 0, 1, '22K Gold Baby Ring', '', 1, 7, 5, NULL, 'Unisex', 'Baby Size', 1.43000, 1.43000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000055.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000055.png', NULL, '', '', '', '2025-06-16 07:55:22', '2025-06-16 07:55:22', NULL, NULL, '2025-06-16 07:56:01', NULL, 0, NULL, NULL, NULL, NULL),
(56, 'HJGG22KRG000056', 0, 1, '22K Gold Baby Ring', '', 1, 7, 5, NULL, 'Unisex', 'Baby Size', 1.67000, 1.67000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000056.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000056.png', NULL, '', '', '', '2025-06-16 07:56:29', '2025-06-16 07:56:29', NULL, NULL, '2025-06-16 07:56:54', NULL, 0, NULL, NULL, NULL, NULL),
(57, 'HJGG22KRG000057', 0, 1, '22K Gold Baby Ring', '', 1, 7, 5, NULL, 'Unisex', 'Baby Size', 1.41000, 1.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000057.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000057.png', NULL, '', '', '', '2025-06-16 07:57:16', '2025-06-16 07:57:16', NULL, NULL, '2025-06-16 07:57:43', NULL, 0, NULL, NULL, NULL, NULL),
(58, 'HJGG22KRG000058', 0, 1, '22K Gold Baby Ring', '', 1, 7, 5, NULL, 'Unisex', 'Baby Size', 1.59000, 1.59000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000058.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000058.png', NULL, '', '', '', '2025-06-16 07:58:15', '2025-06-16 07:58:15', NULL, NULL, '2025-06-16 07:58:37', NULL, 0, NULL, NULL, NULL, NULL),
(59, 'HJGG22KRG000059', 0, 1, '22K Gold Baby Ring', '', 1, 7, 5, NULL, 'Unisex', 'Baby Size', 1.33000, 1.33000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000059.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000059.png', NULL, '', '', '', '2025-06-16 07:59:02', '2025-06-16 07:59:02', NULL, NULL, '2025-06-16 07:59:23', NULL, 0, NULL, NULL, NULL, NULL),
(60, 'HJGG22KRG000060', 0, 1, '22K Gold Baby Ring', '', 1, 7, 5, NULL, 'Unisex', 'Baby Size', 1.34000, 1.34000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_rings/HJGG22KRG000060.webp', 'product_images/gold/22K_gold/22kgold_product_rings/HJGG22KRG000060.png', NULL, '', '', '', '2025-06-16 07:59:46', '2025-06-16 07:59:46', NULL, NULL, '2025-06-16 08:00:09', NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_secondstuds`
--

CREATE TABLE `22kgold_product_secondstuds` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_secondstuds`
--

INSERT INTO `22kgold_product_secondstuds` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG22KSS000001', 0, 45, '22k Second Stud', '22k Second Stud', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.18000, 0.18000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000001.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000001.png', NULL, '', '', '', '2025-06-09 17:58:33', '2025-06-09 17:58:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG22KSS000002', 0, 68, '22k Second Stud', '22k Second Stud', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.20000, 0.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000002.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000002.png', NULL, '', '', '', '2025-06-09 17:59:13', '2025-06-09 17:59:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KSS000003', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.40000, 0.40000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000003.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000003.png', NULL, '', '', '', '2025-06-13 11:39:06', '2025-06-13 11:39:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KSS000004', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.18000, 0.18000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000004.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000004.png', NULL, '', '', '', '2025-06-13 11:40:35', '2025-06-13 11:40:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KSS000005', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.20000, 0.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000005.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000005.png', NULL, '', '', '', '2025-06-13 11:42:10', '2025-06-13 11:42:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KSS000006', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.27000, 0.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000006.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000006.png', NULL, '', '', '', '2025-06-13 11:43:29', '2025-06-13 11:43:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJGG22KSS000007', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.18000, 0.18000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000007.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000007.png', NULL, '', '', '', '2025-06-13 11:44:59', '2025-06-13 11:44:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJGG22KSS000008', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.20000, 0.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000008.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000008.png', NULL, '', '', '', '2025-06-13 14:12:31', '2025-06-13 14:12:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJGG22KSS000009', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.41000, 0.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000009.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000009.png', NULL, '', '', '', '2025-06-13 14:16:37', '2025-06-13 14:16:37', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJGG22KSS000010', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.12000, 0.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000010.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000010.png', NULL, '', '', '', '2025-06-13 14:20:41', '2025-06-13 14:20:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJGG22KSS000011', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.35000, 0.35000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000011.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000011.png', NULL, '', '', '', '2025-06-13 14:22:50', '2025-06-13 14:22:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJGG22KSS000012', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.39000, 0.39000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000012.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000012.png', NULL, '', '', '', '2025-06-13 14:26:53', '2025-06-13 14:26:53', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJGG22KSS000013', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.36000, 0.36000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000013.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000013.png', NULL, '', '', '', '2025-06-13 14:30:38', '2025-06-13 14:30:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJGG22KSS000014', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.40000, 0.40000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000014.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000014.png', NULL, '', '', '', '2025-06-13 14:34:35', '2025-06-13 14:34:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJGG22KSS000015', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', 0.37000, 0.37000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000015.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000015.png', NULL, '', '', '', '2025-06-13 14:37:33', '2025-06-13 14:37:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJGG22KSS000016', 0, 1, '22K Gold Second studs', '', 1, 5, 13, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000016.webp', 'product_images/gold/22K_gold/22kgold_product_secondstuds/HJGG22KSS000016.png', NULL, '', '', '', '2025-06-13 14:44:03', '2025-06-13 14:44:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `22kgold_product_studs`
--

CREATE TABLE `22kgold_product_studs` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `22kgold_product_studs`
--

INSERT INTO `22kgold_product_studs` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJGG22KSD000001', 0, 1, '22K Gold Baby Stud', '', 1, 5, 9, NULL, 'Unisex', 'Baby Size', 1.15000, 1.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_studs/HJGG22KSD000001.webp', 'product_images/gold/22K_gold/22kgold_product_studs/HJGG22KSD000001.png', NULL, '', '', '', '2025-06-16 08:07:12', '2025-06-16 08:07:12', NULL, NULL, '2025-06-16 08:07:54', NULL, 0, NULL, NULL, NULL, NULL),
(3, 'HJGG22KSD000002', 0, 1, '22K Gold Baby Stud', '', 1, 5, 9, NULL, 'Unisex', 'Baby Size', 1.30000, 1.30000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_studs/HJGG22KSD000002.webp', 'product_images/gold/22K_gold/22kgold_product_studs/HJGG22KSD000002.png', NULL, '', '', '', '2025-06-16 08:08:22', '2025-06-16 08:08:22', NULL, NULL, '2025-06-16 08:08:44', NULL, 0, NULL, NULL, NULL, NULL),
(4, 'HJGG22KSD000003', 0, 1, '22K Gold Baby Stud', '', 1, 5, 9, NULL, 'Unisex', 'Baby Size', 1.28000, 1.28000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_studs/HJGG22KSD000003.webp', 'product_images/gold/22K_gold/22kgold_product_studs/HJGG22KSD000003.png', NULL, '', '', '', '2025-06-16 08:09:16', '2025-06-16 08:09:16', NULL, NULL, '2025-06-16 08:09:42', NULL, 0, NULL, NULL, NULL, NULL),
(5, 'HJGG22KSD000004', 0, 1, '22K Gold Baby Stud', '', 1, 5, 9, NULL, 'Unisex', 'Baby Size', 1.74000, 1.74000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_studs/HJGG22KSD000004.webp', 'product_images/gold/22K_gold/22kgold_product_studs/HJGG22KSD000004.png', NULL, '', '', '', '2025-06-16 08:10:05', '2025-06-16 08:10:05', NULL, NULL, '2025-06-16 08:10:24', NULL, 0, NULL, NULL, NULL, NULL),
(6, 'HJGG22KSD000005', 0, 1, '22K Gold Baby Stud', '', 1, 5, 9, NULL, 'Unisex', 'Baby Size', 1.26000, 1.26000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_studs/HJGG22KSD000005.webp', 'product_images/gold/22K_gold/22kgold_product_studs/HJGG22KSD000005.png', NULL, '', '', '', '2025-06-16 08:17:33', '2025-06-16 08:17:33', NULL, NULL, '2025-06-16 08:17:56', NULL, 0, NULL, NULL, NULL, NULL),
(7, 'HJGG22KSD000006', 0, 1, '22K Gold Baby Stud', '', 1, 5, 9, NULL, 'Unisex', 'Baby Size', 1.76000, 1.76000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/webp/gold/22K_gold/22kgold_product_studs/HJGG22KSD000006.webp', 'product_images/gold/22K_gold/22kgold_product_studs/HJGG22KSD000006.png', NULL, '', '', '', '2025-06-16 08:18:23', '2025-06-16 08:18:23', NULL, NULL, '2025-06-16 08:18:45', NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `product_code` varchar(100) NOT NULL,
  `table_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `productid`, `created_at`, `product_code`, `table_name`) VALUES
(3, 1, 2, '2025-06-10 16:29:00', 'HJSR925ER000003', 'rosegold_product_earrings'),
(5, 1, 1, '2025-06-10 16:37:39', 'HJSR925ER000002', 'rosegold_product_earrings'),
(6, 1, 4, '2025-06-11 12:51:37', 'HJGG18KSD000004', '18kgold_product_studs'),
(7, 3, 3, '2025-06-11 13:43:17', 'HJSS850RG000002', 'silver_product_rings'),
(11, 4, 10, '2025-06-18 22:10:08', 'HJGG22KNK000010', '22kgold_product_necklaces'),
(12, 4, 4, '2025-06-18 22:28:46', 'HJGG22KNK000004', '22kgold_product_necklaces');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `name`, `code`, `description`) VALUES
(1, 'Necklaces', 'NK', 'Includes all types of silver necklaces'),
(2, 'Pendants', 'PN', 'Variety of silver pendants'),
(3, 'Bracelets', 'BR', 'Includes bangles, cuffs, chain and charm bracelets'),
(4, 'Anklets', 'AK', 'Anklets for women and kids'),
(5, 'Kada', 'KD', 'Traditional and designer kada styles'),
(6, 'Bangles', 'BG', 'Rigid, circular silver bands'),
(7, 'Rings', 'RG', 'Silver rings including bands and gemstone rings'),
(8, 'Earrings', 'ER', 'All styles of silver earrings'),
(9, 'Studs', 'SD', 'Small, simple silver stud earrings'),
(10, 'Nosepins', 'NP', NULL),
(11, 'Chains', 'CH', 'Chain only, no locket'),
(12, 'Fancy Chains', 'FC', 'fancy chain'),
(13, 'Second Studs', 'SS', 'second studs'),
(14, 'Aranjanam', 'AJ', 'Aranjanam');

-- --------------------------------------------------------

--
-- Table structure for table `categories_subs`
--

CREATE TABLE `categories_subs` (
  `sub_cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories_subs`
--

INSERT INTO `categories_subs` (`sub_cat_id`, `cat_id`, `name`, `description`) VALUES
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
(52, 3, 'General', NULL),
(53, 4, 'General', NULL),
(54, 5, 'General', NULL),
(55, 6, 'General', NULL),
(56, 7, 'General', NULL),
(57, 8, 'General', NULL),
(58, 9, 'General', NULL),
(59, 10, 'General', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `goldrate`
--

CREATE TABLE `goldrate` (
  `id` int(11) NOT NULL,
  `18k_1gm` int(11) NOT NULL,
  `22k_1gm` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `goldrate`
--

INSERT INTO `goldrate` (`id`, `18k_1gm`, `22k_1gm`, `updated_on`) VALUES
(1, 9565, 11575, '2025-11-11 23:56:13');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(108, 7465, 9015, '2025-05-12 18:35:15', 'gokul'),
(109, 7255, 8805, '2025-05-14 10:10:50', 'admin'),
(110, 7410, 8990, '2025-05-25 17:35:21', 'admin'),
(111, 7415, 9020, '2025-06-11 09:31:21', 'Vrinda'),
(112, 7480, 9100, '2025-06-12 09:31:25', 'Vrinda'),
(113, 7650, 9295, '2025-06-13 09:27:33', 'Vrinda'),
(114, 7670, 9320, '2025-06-14 09:53:27', 'Vrinda'),
(115, 7660, 9305, '2025-06-16 09:32:01', 'Vrinda'),
(116, 7575, 9200, '2025-06-17 09:30:15', 'Vrinda'),
(117, 7615, 9250, '2025-06-18 09:29:35', 'Vrinda'),
(118, 7625, 9265, '2025-06-19 09:30:03', 'Vrinda'),
(119, 7580, 9210, '2025-06-20 09:34:06', 'Vrinda'),
(120, 7600, 9235, '2025-06-21 09:28:22', 'Vrinda'),
(121, 7600, 9230, '2025-06-23 09:32:47', 'Vrinda'),
(122, 7540, 9155, '2025-06-24 09:32:07', 'Vrinda'),
(123, 7475, 9070, '2025-06-25 09:36:58', 'Vrinda'),
(124, 7475, 9070, '2025-06-26 09:34:57', 'Vrinda'),
(125, 7405, 8985, '2025-06-27 09:35:46', 'Vrinda'),
(126, 7360, 8930, '2025-06-28 09:28:10', 'Vrinda'),
(127, 7360, 8930, '2025-06-29 22:11:28', 'gokul'),
(128, 7350, 8915, '2025-06-30 09:30:56', 'Vrinda'),
(129, 7440, 9020, '2025-07-01 09:31:14', 'Vrinda'),
(130, 7480, 9065, '2025-07-02 09:30:33', 'Vrinda'),
(131, 7515, 9105, '2025-07-03 09:27:21', 'Vrinda'),
(132, 7470, 9050, '2025-07-04 09:33:49', 'Vrinda'),
(133, 7475, 9060, '2025-07-05 09:25:01', 'Vrinda'),
(134, 7435, 9010, '2025-07-07 09:35:56', 'Vrinda'),
(135, 7475, 9060, '2025-07-08 09:27:28', 'Vrinda'),
(136, 7475, 9060, '2025-07-08 09:28:37', 'Vrinda'),
(137, 7425, 9000, '2025-07-09 09:37:10', 'Vrinda'),
(138, 7440, 9020, '2025-07-10 09:34:21', 'Vrinda'),
(139, 7480, 9075, '2025-07-11 09:33:17', 'Vrinda'),
(140, 7530, 9140, '2025-07-12 09:36:04', 'Vrinda'),
(141, 7540, 9155, '2025-07-14 09:36:30', 'Vrinda'),
(142, 7535, 9145, '2025-07-15 09:34:11', 'Vrinda'),
(143, 7500, 9100, '2025-07-16 09:29:45', 'Vrinda'),
(144, 7360, 9100, '2025-07-19 02:59:38', 'gokul'),
(145, 7360, 9100, '2025-07-19 03:01:16', 'gokul'),
(146, 7360, 9100, '2025-07-19 03:02:10', 'gokul'),
(147, 7360, 9100, '2025-07-19 03:08:43', 'gokul'),
(148, 7360, 9100, '2025-09-27 15:32:32', 'gokul'),
(149, 8708, 10599, '2025-09-27 19:48:45', 'gokul'),
(150, 8708, 10580, '2025-09-27 19:49:14', 'gokul'),
(151, 9485, 11465, '2025-10-12 12:18:19', 'gokul'),
(152, 9485, 11465, '2025-10-12 12:18:30', 'gokul'),
(153, 9565, 11575, '2025-11-11 23:54:34', 'gokul'),
(154, 9565, 11575, '2025-11-11 23:56:13', 'gokul');

-- --------------------------------------------------------

--
-- Table structure for table `gold_schemes`
--

CREATE TABLE `gold_schemes` (
  `id` int(11) NOT NULL,
  `scheme_code` varchar(10) NOT NULL COMMENT 'A, B, C, etc.',
  `scheme_name` varchar(50) NOT NULL COMMENT 'Basic, Premium, etc.',
  `monthly_installment` decimal(10,2) NOT NULL,
  `term_months` int(11) NOT NULL,
  `bonus_amount` decimal(10,2) NOT NULL,
  `final_value` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('active','inactive','archived') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_schemes`
--

INSERT INTO `gold_schemes` (`id`, `scheme_code`, `scheme_name`, `monthly_installment`, `term_months`, `bonus_amount`, `final_value`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Basic', 500.00, 11, 600.00, 6100.00, 'Perfect for starting your gold savings', 'active', '2025-07-16 18:22:34', '2025-07-16 18:22:34'),
(2, 'B', 'Premium', 1000.00, 11, 1200.00, 12200.00, 'Best value for regular savings', 'active', '2025-07-16 18:22:34', '2025-07-16 18:22:34'),
(3, 'C', 'Elite', 2000.00, 11, 2400.00, 24400.00, 'Maximum benefits for serious investors', 'active', '2025-07-16 18:22:34', '2025-07-16 18:22:34'),
(4, 'D', 'Royal', 2500.00, 11, 3000.00, 30500.00, 'Premium plan with higher benefits', 'active', '2025-07-16 18:22:34', '2025-07-16 18:22:34'),
(5, 'E', 'Imperial', 5000.00, 11, 6000.00, 61000.00, 'For high-value gold investors', 'active', '2025-07-16 18:22:34', '2025-07-16 18:22:34'),
(6, 'F', 'Dynasty', 10000.00, 11, 12000.00, 122000.00, 'Ultimate gold investment plan', 'active', '2025-07-16 18:22:34', '2025-07-16 18:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `id` int(11) NOT NULL,
  `tax_name` varchar(100) NOT NULL,
  `tax_percent` decimal(5,3) NOT NULL,
  `updated_on` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`id`, `tax_name`, `tax_percent`, `updated_on`) VALUES
(1, 'GST Tax', 3.000, '2025-06-05 05:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `job_positions`
--

CREATE TABLE `job_positions` (
  `id` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `no_of_vacancy` int(11) NOT NULL,
  `date_posted` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `location` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `experience_required` varchar(50) DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_positions`
--

INSERT INTO `job_positions` (`id`, `position_name`, `description`, `no_of_vacancy`, `date_posted`, `status`, `location`, `department`, `experience_required`, `qualification`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Sales Executive', 'Sell jewelry products to customers, maintain client relationships, and achieve sales targets.', 2, '2024-01-10 09:00:00', 'Active', 'Paravoor', 'Sales', '1+ years in retail sales', 'High school diploma required, sales certification preferred', 1, '2025-07-12 18:28:13', '2025-07-12 18:28:13'),
(2, 'Sales Executive', 'Sell jewelry products to customers, provide excellent customer service in our Kollam showroom.', 1, '2024-01-12 10:00:00', 'Active', 'Kollam', 'Sales', 'Freshers welcome', 'Plus Two completed', 1, '2025-07-12 18:28:13', '2025-07-12 18:28:13'),
(4, 'Goldsmith', 'Create and repair gold jewelry pieces with precision and artistic skill.', 3, '2024-01-08 08:30:00', 'Active', 'Paravoor', 'Production', '5+ years goldsmith experience', 'ITI/Jewelry making certification', 1, '2025-07-12 18:28:13', '2025-07-12 18:28:13'),
(6, 'Customer Care Representative', 'Handle customer inquiries, complaints, and after-sales service.', 2, '2024-01-15 10:00:00', 'Active', 'Kootikada', 'Customer Service', '1+ years in customer service', 'Any degree, good communication skills', 1, '2025-07-12 18:28:13', '2025-07-12 18:28:13'),
(7, 'Customer Care Executive', 'Manage premium customer relationships and special orders.', 1, '2024-01-14 09:30:00', 'Active', 'Kollam', 'Customer Service', '3+ years luxury retail experience', 'Degree in any field, multilingual preferred', 1, '2025-07-12 18:28:13', '2025-07-12 18:28:13'),
(8, 'Business Executive', 'Interact with online customers', 1, '2025-07-13 00:25:35', 'Active', 'Kollam', 'Sales', '0', 'Any degree', 0, '2025-07-13 00:25:35', '2025-07-13 00:29:02');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `account_type`, `account_status`) VALUES
('admin', 'admin', 'Administrator', 'ADMIN', 'Approved'),
('anshad\r\n', 'anshad5566', 'Anshad Mithilaj', 'ADMIN', 'Approved'),
('vrinda', 'vrinda', 'Vrinda Vijayan', 'ADMIN', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `log_table`
--

CREATE TABLE `log_table` (
  `log_id` int(11) NOT NULL,
  `action` varchar(256) NOT NULL,
  `action_by` varchar(120) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `making_charges`
--

CREATE TABLE `making_charges` (
  `id` int(11) NOT NULL,
  `metalpurity_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `normal_mc` decimal(5,3) NOT NULL,
  `discount_mc` decimal(5,3) NOT NULL,
  `excp_normal_mc` decimal(5,3) NOT NULL,
  `excp_discount_mc` decimal(5,3) NOT NULL,
  `last_updated` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `making_charges`
--

INSERT INTO `making_charges` (`id`, `metalpurity_id`, `model_id`, `model_name`, `cat_id`, `normal_mc`, `discount_mc`, `excp_normal_mc`, `excp_discount_mc`, `last_updated`) VALUES
(1, 4, 1, 'standard', 1, 35.000, 25.000, 30.000, 30.000, '2025-06-04 20:59:59'),
(2, 4, 1, 'standard', 1, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:11:32'),
(3, 4, 1, 'standard', 2, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:11:32'),
(4, 4, 1, 'standard', 3, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:11:32'),
(5, 4, 1, 'standard', 4, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:11:32'),
(6, 4, 1, 'standard', 5, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:12:46'),
(7, 4, 1, 'standard', 6, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:11:32'),
(8, 4, 1, 'standard', 5, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:11:32'),
(9, 4, 1, 'standard', 8, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:12:46'),
(10, 4, 1, 'standard', 9, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:12:46'),
(11, 4, 1, 'standard', 10, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:12:46'),
(12, 4, 1, 'standard', 11, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:12:46'),
(13, 4, 1, 'standard', 12, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:12:46'),
(14, 4, 1, 'standard', 13, 35.000, 25.000, 30.000, 30.000, '2025-06-04 21:12:46'),
(15, 5, 1, 'standard', 1, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(16, 5, 1, 'standard', 2, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(17, 5, 1, 'standard', 3, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(18, 5, 1, 'standard', 4, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(19, 5, 1, 'standard', 5, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(20, 5, 1, 'standard', 6, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(21, 5, 1, 'standard', 7, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(22, 5, 1, 'standard', 8, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(23, 5, 1, 'standard', 9, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(24, 5, 1, 'standard', 10, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(25, 5, 1, 'standard', 11, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(26, 5, 1, 'standard', 12, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46'),
(27, 5, 1, 'standard', 13, 22.000, 14.500, 22.000, 14.500, '2025-06-04 21:18:25'),
(28, 5, 1, 'standard', 14, 10.000, 6.500, 10.000, 6.500, '2025-06-04 21:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `metals`
--

CREATE TABLE `metals` (
  `metal_id` int(11) NOT NULL,
  `code` char(1) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metals`
--

INSERT INTO `metals` (`metal_id`, `code`, `name`) VALUES
(1, 'G', 'gold'),
(2, 'S', 'silver');

-- --------------------------------------------------------

--
-- Table structure for table `metals_purity`
--

CREATE TABLE `metals_purity` (
  `metalpurity_id` bigint(20) UNSIGNED NOT NULL,
  `metal_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metals_purity`
--

INSERT INTO `metals_purity` (`metalpurity_id`, `metal_id`, `name`, `code`, `description`) VALUES
(1, 2, 'Standard Silver', 'S850', 'Standard silver used for traditional jewellery'),
(2, 2, '925 Sterling Silver', 'S925', 'Sterling silver, 92.5% pure silver'),
(3, 2, 'Rose Gold Silver', 'R925', 'Silver with a rose gold-toned finish'),
(4, 1, '18K Gold', 'G18K', '18k gold'),
(5, 1, '22K Gold', 'G22K', '22k gold'),
(6, 1, '18K Gold & Diamonds', 'G18D', '18K gold diamonds');

-- --------------------------------------------------------

--
-- Table structure for table `metals_rates`
--

CREATE TABLE `metals_rates` (
  `id` int(11) NOT NULL,
  `18kgold` int(11) NOT NULL,
  `22kgold` int(11) NOT NULL,
  `normal_silver` int(11) NOT NULL,
  `925_silver` int(11) NOT NULL,
  `rosegold_silver` int(11) NOT NULL,
  `diamond_rate` decimal(10,2) NOT NULL,
  `updated_on` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metals_rates`
--

INSERT INTO `metals_rates` (`id`, `18kgold`, `22kgold`, `normal_silver`, `925_silver`, `rosegold_silver`, `diamond_rate`, `updated_on`, `updated_by`) VALUES
(1, 0, 0, 88, 350, 450, 1100.00, '2025-05-25 19:07:03', '');

-- --------------------------------------------------------

--
-- Table structure for table `metals_rates_history`
--

CREATE TABLE `metals_rates_history` (
  `id` int(11) NOT NULL,
  `normal_silver` decimal(10,2) NOT NULL,
  `925_silver` decimal(10,2) NOT NULL,
  `rosegold_silver` decimal(10,2) NOT NULL,
  `diamondrate` int(11) NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_on` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metals_rates_history`
--

INSERT INTO `metals_rates_history` (`id`, `normal_silver`, `925_silver`, `rosegold_silver`, `diamondrate`, `updated_by`, `updated_on`) VALUES
(1, 88.00, 350.00, 450.00, 0, 'admin', '2025-05-25 17:48:27'),
(2, 88.00, 350.00, 450.00, 1100, 'admin', '2025-05-25 19:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `model_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `model_name`, `created_at`) VALUES
(1, 'General', '2025-06-15 14:59:15'),
(2, 'Singapore Model', '2025-06-15 15:01:06'),
(3, 'Bombay Model', '2025-06-15 15:01:16'),
(4, 'Chettinad Model', '2025-06-15 15:01:27'),
(5, 'Turkish Model', '2025-06-15 15:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `product_code` varchar(100) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `productid`, `created_at`, `product_code`, `table_name`, `status`) VALUES
(3, 1, 2, '2025-06-10 10:59:00', 'HJSR925ER000003', 'rosegold_product_earrings', 0),
(5, 1, 1, '2025-06-10 11:07:39', 'HJSR925ER000002', 'rosegold_product_earrings', 2),
(6, 4, 4, '2025-06-11 07:21:37', 'HJGG18KSD000004', '18kgold_product_studs', 1),
(7, 3, 3, '2025-06-11 08:13:17', 'HJSS850RG000002', 'silver_product_rings', 1),
(11, 1, 10, '2025-06-18 16:40:08', 'HJGG22KNK000010', '22kgold_product_necklaces', 2),
(12, 4, 4, '2025-06-18 16:58:46', 'HJGG22KNK000004', '22kgold_product_necklaces', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_activity_log`
--

CREATE TABLE `product_activity_log` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `activity_date` date NOT NULL,
  `activity_time` time NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `activity_type` varchar(20) NOT NULL DEFAULT 'ADD',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `v_status` int(11) NOT NULL,
  `v_by` varchar(20) NOT NULL,
  `v_on` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_activity_log`
--

INSERT INTO `product_activity_log` (`id`, `username`, `activity_date`, `activity_time`, `product_code`, `table_name`, `activity_type`, `created_at`, `v_status`, `v_by`, `v_on`) VALUES
(1, 'admin', '2025-06-25', '13:16:28', 'HJSR925NK000030', 'rosegold_product_necklaces', 'ADD', '2025-06-25 07:46:28', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_codes`
--

CREATE TABLE `product_codes` (
  `product_code_id` int(11) NOT NULL,
  `p1_brand` varchar(10) NOT NULL,
  `p2_metal` char(10) NOT NULL,
  `p3_purity` varchar(10) NOT NULL,
  `p4_cat` varchar(10) NOT NULL,
  `p5_uniquecode` int(11) NOT NULL,
  `full_code` varchar(30) NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_codes`
--

INSERT INTO `product_codes` (`product_code_id`, `p1_brand`, `p2_metal`, `p3_purity`, `p4_cat`, `p5_uniquecode`, `full_code`, `table_name`, `created_at`) VALUES
(1, 'HJ', 'G', 'G18K', 'SD', 1, 'HJGG18KSD000001', '18kgold_product_studs', '2025-05-25 19:25:51'),
(2, 'HJ', 'G', 'G22K', 'RG', 1, 'HJGG22KRG000001', '22gold_product_rings', '2025-05-25 20:35:46'),
(3, 'HJ', 'G', 'G22K', 'RG', 2, 'HJGG22KRG000002', '22kgold_product_rings', '2025-05-25 20:43:43'),
(6, 'HJ', 'G', 'G18D', 'RG', 1, 'HJGG18DRG000001', '18kdgold_product_rings', '2025-05-25 20:51:36'),
(7, 'HJ', 'G', 'G18D', 'RG', 2, 'HJGG18DRG000002', '18kdgold_product_rings', '2025-05-25 20:52:59'),
(8, 'HJ', 'G', 'G18D', 'RG', 3, 'HJGG18DRG000003', '18kdgold_product_rings', '2025-05-25 20:58:33'),
(9, 'HJ', 'G', 'G18D', 'RG', 4, 'HJGG18DRG000004', '18kdgold_product_rings', '2025-05-25 20:58:36'),
(10, 'HJ', 'G', 'G18D', 'RG', 5, 'HJGG18DRG000005', '18kdgold_product_rings', '2025-05-25 21:00:03'),
(11, 'HJ', 'G', 'G18D', 'RG', 6, 'HJGG18DRG000006', '18kdgold_product_rings', '2025-05-25 21:01:03'),
(12, 'HJ', 'G', 'G18D', 'RG', 7, 'HJGG18DRG000007', '18kdgold_product_rings', '2025-05-25 21:01:23'),
(13, 'HJ', 'G', 'G18D', 'RG', 8, 'HJGG18DRG000008', '18kdgold_product_rings', '2025-05-25 21:04:13'),
(14, 'HJ', 'G', 'G22K', 'RG', 3, 'HJGG22KRG000003', '22kgold_product_rings', '2025-05-25 21:04:52'),
(15, 'HJ', 'G', 'G18D', 'RG', 9, 'HJGG18DRG000009', '18kdgold_product_rings', '2025-05-25 21:05:51'),
(16, 'HJ', 'S', 'S925', 'RG', 1, 'HJSS925RG000001', 'silver_products_rings', '2025-05-25 21:08:57'),
(17, 'HJ', 'S', 'S925', 'RG', 2, 'HJSS925RG000002', 'silver_products_rings', '2025-05-25 21:09:39'),
(18, 'HJ', 'S', 'S925', 'RG', 3, 'HJSS925RG000003', 'silver_products_rings', '2025-05-25 21:10:12'),
(19, 'HJ', 'S', 'S925', 'RG', 4, 'HJSS925RG000004', 'silver_product_rings', '2025-05-25 21:11:09'),
(20, 'HJ', 'S', 'R925', 'RG', 1, 'HJSR925RG000001', 'rosegold_product_rings', '2025-05-25 21:14:37'),
(21, 'HJ', 'G', 'G18K', 'RG', 1, 'HJGG18KRG000001', '18kgold_product_rings', '2025-05-25 23:24:42'),
(22, 'HJ', 'G', 'G18K', 'SD', 2, 'HJGG18KSD000002', '18kgold_product_studs', '2025-05-25 23:34:28'),
(23, 'HJ', 'G', 'G18K', 'SD', 3, 'HJGG18KSD000003', '18kgold_product_studs', '2025-05-26 01:30:18'),
(24, 'HJ', 'G', 'G18K', 'SD', 4, 'HJGG18KSD000004', '18kgold_product_studs', '2025-05-26 01:33:53'),
(25, 'HJ', 'G', 'G18K', 'SD', 5, 'HJGG18KSD000005', '18kgold_product_studs', '2025-05-26 01:34:41'),
(26, 'HJ', 'G', 'G18K', 'SD', 6, 'HJGG18KSD000006', '18kgold_product_studs', '2025-05-26 01:35:03'),
(27, 'HJ', 'G', 'G18K', 'SD', 7, 'HJGG18KSD000007', '18kgold_product_studs', '2025-05-26 01:35:42'),
(28, 'HJ', 'G', 'G18K', 'SD', 8, 'HJGG18KSD000008', '18kgold_product_studs', '2025-05-26 01:36:06'),
(29, 'HJ', 'G', 'G18K', 'SD', 9, 'HJGG18KSD000009', '18kgold_product_studs', '2025-05-26 01:36:31'),
(30, 'HJ', 'G', 'G18K', 'SD', 10, 'HJGG18KSD000010', '18kgold_product_studs', '2025-05-26 01:37:05'),
(31, 'HJ', 'G', 'G18K', 'SD', 11, 'HJGG18KSD000011', '18kgold_product_studs', '2025-05-26 01:44:45'),
(32, 'HJ', 'S', 'R925', 'NK', 1, 'HJSR925NK000001', 'rosegold_product_necklaces', '2025-06-04 14:30:52'),
(35, 'HJ', 'G', 'G18K', 'BG', 1, 'HJGG18KBG000001', '18kgold_product_bangles', '2025-06-09 10:14:38'),
(36, 'HJ', 'G', 'G18K', 'BG', 2, 'HJGG18KBG000002', '18kgold_product_bangles', '2025-06-09 10:18:44'),
(37, 'HJ', 'G', 'G22K', 'BG', 1, 'HJGG22KBG000001', '22kgold_product_bangles', '2025-06-09 10:22:33'),
(38, 'HJ', 'G', 'G22K', 'BG', 2, 'HJGG22KBG000002', '22kgold_product_bangles', '2025-06-09 10:25:48'),
(39, 'HJ', 'S', 'S850', 'BG', 1, 'HJSS850BG000001', 'silver_product_bangles', '2025-06-09 12:43:33'),
(40, 'HJ', 'S', 'S850', 'BG', 2, 'HJSS850BG000002', 'silver_product_bangles', '2025-06-09 12:44:44'),
(41, 'HJ', 'S', 'R925', 'BG', 1, 'HJSR925BG000001', 'rosegold_product_bangles', '2025-06-09 16:18:31'),
(42, 'HJ', 'S', 'R925', 'BG', 2, 'HJSR925BG000002', 'rosegold_product_bangles', '2025-06-09 16:23:25'),
(43, 'HJ', 'G', 'G18K', 'RG', 2, 'HJGG18KRG000002', '18kgold_product_rings', '2025-06-09 16:51:34'),
(44, 'HJ', 'G', 'G18K', 'RG', 3, 'HJGG18KRG000003', '18kgold_product_rings', '2025-06-09 16:53:46'),
(45, 'HJ', 'G', 'G18K', 'BR', 1, 'HJGG18KBR000001', '18kgold_product_bracelets', '2025-06-09 16:57:30'),
(46, 'HJ', 'G', 'G18K', 'BR', 2, 'HJGG18KBR000002', '18kgold_product_bracelets', '2025-06-09 17:01:49'),
(47, 'HJ', 'G', 'G18K', 'BR', 3, 'HJGG18KBR000003', '18kgold_product_bracelets', '2025-06-09 17:02:59'),
(48, 'HJ', 'G', 'G18K', 'PN', 1, 'HJGG18KPN000001', '18kgold_product_pendants', '2025-06-09 17:06:52'),
(49, 'HJ', 'G', 'G18K', 'PN', 2, 'HJGG18KPN000002', '18kgold_product_pendants', '2025-06-09 17:07:41'),
(50, 'HJ', 'G', 'G18K', 'NK', 1, 'HJGG18KNK000001', '18kgold_product_necklaces', '2025-06-09 17:10:40'),
(51, 'HJ', 'G', 'G18K', 'NK', 2, 'HJGG18KNK000002', '18kgold_product_necklaces', '2025-06-09 17:12:00'),
(52, 'HJ', 'G', 'G18K', 'AK', 1, 'HJGG18KAK000001', '18kgold_product_anklets', '2025-06-09 17:14:27'),
(53, 'HJ', 'G', 'G18K', 'AK', 2, 'HJGG18KAK000002', '18kgold_product_anklets', '2025-06-09 17:15:14'),
(54, 'HJ', 'G', 'G18K', 'ER', 1, 'HJGG18KER000001', '18kgold_product_earrings', '2025-06-09 17:17:27'),
(55, 'HJ', 'G', 'G18K', 'ER', 2, 'HJGG18KER000002', '18kgold_product_earrings', '2025-06-09 17:18:21'),
(56, 'HJ', 'G', 'G18K', 'CH', 1, 'HJGG18KCH000001', '18kgold_product_chains', '2025-06-09 17:25:05'),
(57, 'HJ', 'G', 'G18K', 'CH', 2, 'HJGG18KCH000002', '18kgold_product_chains', '2025-06-09 17:26:01'),
(58, 'HJ', 'G', 'G22K', 'RG', 4, 'HJGG22KRG000004', '22kgold_product_rings', '2025-06-09 17:30:10'),
(59, 'HJ', 'G', 'G22K', 'RG', 5, 'HJGG22KRG000005', '22kgold_product_rings', '2025-06-09 17:32:42'),
(60, 'HJ', 'G', 'G22K', 'BR', 1, 'HJGG22KBR000001', '22kgold_product_bracelets', '2025-06-09 17:35:43'),
(61, 'HJ', 'G', 'G22K', 'BR', 2, 'HJGG22KBR000002', '22kgold_product_bracelets', '2025-06-09 17:43:09'),
(62, 'HJ', 'G', 'G22K', 'BR', 3, 'HJGG22KBR000003', '22kgold_product_bracelets', '2025-06-09 17:44:00'),
(63, 'HJ', 'G', 'G22K', 'PN', 1, 'HJGG22KPN000001', '22kgold_product_pendants', '2025-06-09 17:47:24'),
(64, 'HJ', 'G', 'G22K', 'PN', 2, 'HJGG22KPN000002', '22kgold_product_pendants', '2025-06-09 17:48:11'),
(65, 'HJ', 'G', 'G22K', 'NK', 1, 'HJGG22KNK000001', '22kgold_product_necklaces', '2025-06-09 17:50:17'),
(66, 'HJ', 'G', 'G22K', 'NK', 2, 'HJGG22KNK000002', '22kgold_product_necklaces', '2025-06-09 17:51:08'),
(67, 'HJ', 'G', 'G22K', 'ER', 1, 'HJGG22KER000001', '22kgold_product_earrings', '2025-06-09 17:54:24'),
(68, 'HJ', 'G', 'G22K', 'ER', 2, 'HJGG22KER000002', '22kgold_product_earrings', '2025-06-09 17:55:03'),
(69, 'HJ', 'G', 'G22K', 'SS', 1, 'HJGG22KSS000001', '22kgold_product_secondstuds', '2025-06-09 17:58:33'),
(70, 'HJ', 'G', 'G22K', 'SS', 2, 'HJGG22KSS000002', '22kgold_product_secondstuds', '2025-06-09 17:59:13'),
(71, 'HJ', 'S', 'S850', 'RG', 1, 'HJSS850RG000001', 'silver_product_rings', '2025-06-09 18:31:38'),
(72, 'HJ', 'S', 'S850', 'RG', 2, 'HJSS850RG000002', 'silver_product_rings', '2025-06-09 18:32:16'),
(73, 'HJ', 'S', 'S850', 'BR', 1, 'HJSS850BR000001', 'silver_product_bracelets', '2025-06-09 18:33:56'),
(74, 'HJ', 'S', 'S850', 'BR', 2, 'HJSS850BR000002', 'silver_product_bracelets', '2025-06-09 18:34:39'),
(75, 'HJ', 'S', 'S850', 'PN', 1, 'HJSS850PN000001', 'silver_product_pendants', '2025-06-09 18:38:49'),
(76, 'HJ', 'S', 'S850', 'PN', 2, 'HJSS850PN000002', 'silver_product_pendants', '2025-06-09 18:39:29'),
(77, 'HJ', 'S', 'S850', 'KD', 1, 'HJSS850KD000001', 'silver_product_kadas', '2025-06-09 18:43:52'),
(78, 'HJ', 'S', 'S850', 'KD', 2, 'HJSS850KD000002', 'silver_product_kadas', '2025-06-09 18:44:25'),
(79, 'HJ', 'S', 'S850', 'ER', 1, 'HJSS850ER000001', 'silver_product_earrings', '2025-06-09 18:51:31'),
(80, 'HJ', 'S', 'S850', 'ER', 2, 'HJSS850ER000002', 'silver_product_earrings', '2025-06-09 18:52:32'),
(81, 'HJ', 'S', 'S850', 'CH', 1, 'HJSS850CH000001', 'silver_product_chains', '2025-06-09 18:56:23'),
(82, 'HJ', 'S', 'S850', 'CH', 2, 'HJSS850CH000002', 'silver_product_chains', '2025-06-09 18:57:03'),
(83, 'HJ', 'S', 'R925', 'RG', 2, 'HJSR925RG000002', 'rosegold_product_rings', '2025-06-09 19:01:53'),
(84, 'HJ', 'S', 'R925', 'RG', 3, 'HJSR925RG000003', 'rosegold_product_rings', '2025-06-09 19:03:29'),
(85, 'HJ', 'S', 'R925', 'RG', 4, 'HJSR925RG000004', 'rosegold_product_rings', '2025-06-09 19:04:12'),
(86, 'HJ', 'S', 'R925', 'BR', 1, 'HJSR925BR000001', 'rosegold_product_bracelets', '2025-06-09 19:19:06'),
(87, 'HJ', 'S', 'R925', 'BR', 2, 'HJSR925BR000002', 'rosegold_product_bracelets', '2025-06-09 19:20:07'),
(88, 'HJ', 'S', 'R925', 'NK', 2, 'HJSR925NK000002', 'rosegold_product_necklaces', '2025-06-09 19:22:04'),
(89, 'HJ', 'S', 'R925', 'ER', 1, 'HJSR925ER000001', 'rosegold_product_earrings', '2025-06-09 19:24:22'),
(90, 'HJ', 'S', 'R925', 'CH', 1, 'HJSR925CH000001', 'rosegold_product_chains', '2025-06-09 19:27:04'),
(91, 'HJ', 'S', 'R925', 'CH', 2, 'HJSR925CH000002', 'rosegold_product_chains', '2025-06-09 19:27:42'),
(92, 'HJ', 'G', 'G22K', 'FC', 1, 'HJGG22KFC000001', '22kgold_product_fancychains', '2025-06-09 20:16:06'),
(93, 'HJ', 'G', 'G22K', 'FC', 2, 'HJGG22KFC000002', '22kgold_product_fancychains', '2025-06-09 20:16:50'),
(94, 'HJ', 'S', 'R925', 'ER', 2, 'HJSR925ER000002', 'rosegold_product_earrings', '2025-06-09 20:24:01'),
(95, 'HJ', 'S', 'R925', 'ER', 3, 'HJSR925ER000003', 'rosegold_product_earrings', '2025-06-09 20:24:55'),
(96, 'HJ', 'G', 'G18K', 'NK', 3, 'HJGG18KNK000003', '18kgold_product_necklaces', '2025-06-11 01:46:55'),
(97, 'HJ', 'G', 'G18D', 'RG', 10, 'HJGG18DRG000010', '18kdgold_product_rings', '2025-06-11 02:15:54'),
(98, 'HJ', 'G', 'G22K', 'CH', 1, 'HJGG22KCH000001', '22kgold_product_chains', '2025-06-11 11:31:10'),
(99, 'HJ', 'G', 'G22K', 'CH', 2, 'HJGG22KCH000002', '22kgold_product_chains', '2025-06-11 11:32:28'),
(100, 'HJ', 'G', 'G22K', 'CH', 3, 'HJGG22KCH000003', '22kgold_product_chains', '2025-06-11 11:33:11'),
(101, 'HJ', 'G', 'G22K', 'CH', 4, 'HJGG22KCH000004', '22kgold_product_chains', '2025-06-11 11:34:03'),
(102, 'HJ', 'G', 'G22K', 'CH', 5, 'HJGG22KCH000005', '22kgold_product_chains', '2025-06-11 11:34:31'),
(103, 'HJ', 'G', 'G22K', 'CH', 6, 'HJGG22KCH000006', '22kgold_product_chains', '2025-06-11 11:43:49'),
(104, 'HJ', 'G', 'G18K', 'AK', 3, 'HJGG18KAK000003', '18kgold_product_anklets', '2025-06-11 18:58:07'),
(105, 'HJ', 'G', 'G18K', 'AK', 4, 'HJGG18KAK000004', '18kgold_product_anklets', '2025-06-11 19:05:55'),
(106, 'HJ', 'G', 'G18K', 'AK', 5, 'HJGG18KAK000005', '18kgold_product_anklets', '2025-06-11 19:13:28'),
(107, 'HJ', 'S', 'R925', 'NK', 3, 'HJSR925NK000003', 'rosegold_product_necklaces', '2025-06-11 19:16:07'),
(108, 'HJ', 'G', 'G18K', 'AK', 6, 'HJGG18KAK000006', '18kgold_product_anklets', '2025-06-11 19:16:13'),
(109, 'HJ', 'S', 'R925', 'NK', 4, 'HJSR925NK000004', 'rosegold_product_necklaces', '2025-06-11 19:17:13'),
(110, 'HJ', 'G', 'G18K', 'AK', 7, 'HJGG18KAK000007', '18kgold_product_anklets', '2025-06-11 19:17:54'),
(111, 'HJ', 'S', 'R925', 'NK', 5, 'HJSR925NK000005', 'rosegold_product_necklaces', '2025-06-11 19:18:47'),
(112, 'HJ', 'G', 'G18K', 'AK', 8, 'HJGG18KAK000008', '18kgold_product_anklets', '2025-06-11 19:20:04'),
(113, 'HJ', 'S', 'R925', 'NK', 6, 'HJSR925NK000006', 'rosegold_product_necklaces', '2025-06-11 19:20:14'),
(114, 'HJ', 'S', 'R925', 'NK', 7, 'HJSR925NK000007', 'rosegold_product_necklaces', '2025-06-11 19:21:35'),
(115, 'HJ', 'S', 'R925', 'NK', 8, 'HJSR925NK000008', 'rosegold_product_necklaces', '2025-06-11 19:23:12'),
(116, 'HJ', 'G', 'G18K', 'AK', 9, 'HJGG18KAK000009', '18kgold_product_anklets', '2025-06-11 19:24:19'),
(117, 'HJ', 'S', 'R925', 'NK', 9, 'HJSR925NK000009', 'rosegold_product_necklaces', '2025-06-11 19:26:21'),
(118, 'HJ', 'G', 'G18K', 'AK', 10, 'HJGG18KAK000010', '18kgold_product_anklets', '2025-06-11 19:27:16'),
(119, 'HJ', 'S', 'R925', 'NK', 10, 'HJSR925NK000010', 'rosegold_product_necklaces', '2025-06-11 19:27:33'),
(120, 'HJ', 'S', 'R925', 'NK', 11, 'HJSR925NK000011', 'rosegold_product_necklaces', '2025-06-11 19:28:59'),
(121, 'HJ', 'G', 'G18K', 'BG', 3, 'HJGG18KBG000003', '18kgold_product_bangles', '2025-06-11 19:31:41'),
(122, 'HJ', 'S', 'R925', 'NK', 12, 'HJSR925NK000012', 'rosegold_product_necklaces', '2025-06-11 19:31:52'),
(123, 'HJ', 'S', 'R925', 'NK', 13, 'HJSR925NK000013', 'rosegold_product_necklaces', '2025-06-11 19:32:42'),
(124, 'HJ', 'S', 'R925', 'NK', 14, 'HJSR925NK000014', 'rosegold_product_necklaces', '2025-06-11 19:33:28'),
(125, 'HJ', 'S', 'R925', 'NK', 15, 'HJSR925NK000015', 'rosegold_product_necklaces', '2025-06-11 19:34:07'),
(126, 'HJ', 'S', 'R925', 'NK', 16, 'HJSR925NK000016', 'rosegold_product_necklaces', '2025-06-11 19:35:23'),
(127, 'HJ', 'G', 'G18K', 'BG', 4, 'HJGG18KBG000004', '18kgold_product_bangles', '2025-06-11 19:35:27'),
(128, 'HJ', 'S', 'R925', 'NK', 17, 'HJSR925NK000017', 'rosegold_product_necklaces', '2025-06-11 19:36:06'),
(129, 'HJ', 'S', 'R925', 'NK', 18, 'HJSR925NK000018', 'rosegold_product_necklaces', '2025-06-11 19:36:47'),
(130, 'HJ', 'S', 'R925', 'NK', 19, 'HJSR925NK000019', 'rosegold_product_necklaces', '2025-06-11 19:37:33'),
(131, 'HJ', 'S', 'R925', 'NK', 20, 'HJSR925NK000020', 'rosegold_product_necklaces', '2025-06-11 19:38:09'),
(132, 'HJ', 'S', 'R925', 'NK', 21, 'HJSR925NK000021', 'rosegold_product_necklaces', '2025-06-11 19:38:43'),
(133, 'HJ', 'S', 'R925', 'NK', 22, 'HJSR925NK000022', 'rosegold_product_necklaces', '2025-06-11 19:39:18'),
(134, 'HJ', 'S', 'R925', 'NK', 23, 'HJSR925NK000023', 'rosegold_product_necklaces', '2025-06-11 19:39:48'),
(135, 'HJ', 'S', 'R925', 'NK', 24, 'HJSR925NK000024', 'rosegold_product_necklaces', '2025-06-11 19:40:50'),
(136, 'HJ', 'S', 'R925', 'NK', 25, 'HJSR925NK000025', 'rosegold_product_necklaces', '2025-06-11 19:41:28'),
(137, 'HJ', 'S', 'R925', 'NK', 26, 'HJSR925NK000026', 'rosegold_product_necklaces', '2025-06-11 19:42:14'),
(138, 'HJ', 'S', 'R925', 'NK', 27, 'HJSR925NK000027', 'rosegold_product_necklaces', '2025-06-11 19:42:56'),
(139, 'HJ', 'S', 'R925', 'NK', 28, 'HJSR925NK000028', 'rosegold_product_necklaces', '2025-06-11 19:43:59'),
(140, 'HJ', 'S', 'R925', 'NK', 29, 'HJSR925NK000029', 'rosegold_product_necklaces', '2025-06-11 19:44:55'),
(141, 'HJ', 'S', 'R925', 'CH', 3, 'HJSR925CH000003', 'rosegold_product_chains', '2025-06-11 19:45:52'),
(142, 'HJ', 'G', 'G18K', 'BG', 5, 'HJGG18KBG000005', '18kgold_product_bangles', '2025-06-11 19:45:58'),
(143, 'HJ', 'G', 'G18K', 'BG', 6, 'HJGG18KBG000006', '18kgold_product_bangles', '2025-06-11 19:46:10'),
(144, 'HJ', 'G', 'G18K', 'BG', 7, 'HJGG18KBG000007', '18kgold_product_bangles', '2025-06-11 19:46:21'),
(145, 'HJ', 'S', 'R925', 'CH', 4, 'HJSR925CH000004', 'rosegold_product_chains', '2025-06-11 19:46:45'),
(146, 'HJ', 'S', 'R925', 'CH', 5, 'HJSR925CH000005', 'rosegold_product_chains', '2025-06-11 19:48:43'),
(147, 'HJ', 'S', 'R925', 'CH', 6, 'HJSR925CH000006', 'rosegold_product_chains', '2025-06-11 19:49:47'),
(148, 'HJ', 'G', 'G18K', 'BG', 8, 'HJGG18KBG000008', '18kgold_product_bangles', '2025-06-11 19:50:12'),
(149, 'HJ', 'G', 'G18K', 'BG', 9, 'HJGG18KBG000009', '18kgold_product_bangles', '2025-06-11 19:52:18'),
(150, 'HJ', 'S', 'R925', 'ER', 4, 'HJSR925ER000004', 'rosegold_product_earrings', '2025-06-11 19:52:42'),
(151, 'HJ', 'S', 'R925', 'ER', 5, 'HJSR925ER000005', 'rosegold_product_earrings', '2025-06-11 19:53:50'),
(152, 'HJ', 'S', 'R925', 'ER', 6, 'HJSR925ER000006', 'rosegold_product_earrings', '2025-06-11 19:54:28'),
(153, 'HJ', 'G', 'G18K', 'BG', 10, 'HJGG18KBG000010', '18kgold_product_bangles', '2025-06-11 19:54:34'),
(154, 'HJ', 'S', 'R925', 'ER', 7, 'HJSR925ER000007', 'rosegold_product_earrings', '2025-06-11 19:55:46'),
(155, 'HJ', 'S', 'R925', 'ER', 8, 'HJSR925ER000008', 'rosegold_product_earrings', '2025-06-11 19:56:30'),
(156, 'HJ', 'G', 'G18K', 'BG', 11, 'HJGG18KBG000011', '18kgold_product_bangles', '2025-06-11 19:56:55'),
(157, 'HJ', 'G', 'G18K', 'BG', 12, 'HJGG18KBG000012', '18kgold_product_bangles', '2025-06-11 19:57:00'),
(158, 'HJ', 'S', 'R925', 'ER', 9, 'HJSR925ER000009', 'rosegold_product_earrings', '2025-06-11 19:57:46'),
(159, 'HJ', 'S', 'R925', 'ER', 10, 'HJSR925ER000010', 'rosegold_product_earrings', '2025-06-11 19:58:28'),
(160, 'HJ', 'S', 'R925', 'ER', 11, 'HJSR925ER000011', 'rosegold_product_earrings', '2025-06-11 19:59:12'),
(161, 'HJ', 'S', 'R925', 'ER', 12, 'HJSR925ER000012', 'rosegold_product_earrings', '2025-06-11 20:01:05'),
(162, 'HJ', 'G', 'G18K', 'BG', 13, 'HJGG18KBG000013', '18kgold_product_bangles', '2025-06-11 20:01:40'),
(163, 'HJ', 'S', 'R925', 'ER', 13, 'HJSR925ER000013', 'rosegold_product_earrings', '2025-06-11 20:01:47'),
(164, 'HJ', 'S', 'R925', 'BR', 3, 'HJSR925BR000003', 'rosegold_product_bracelets', '2025-06-11 20:03:15'),
(165, 'HJ', 'S', 'R925', 'BR', 4, 'HJSR925BR000004', 'rosegold_product_bracelets', '2025-06-11 20:04:01'),
(166, 'HJ', 'S', 'R925', 'BR', 5, 'HJSR925BR000005', 'rosegold_product_bracelets', '2025-06-11 20:06:04'),
(167, 'HJ', 'S', 'R925', 'BR', 6, 'HJSR925BR000006', 'rosegold_product_bracelets', '2025-06-11 20:06:48'),
(168, 'HJ', 'G', 'G18K', 'BG', 14, 'HJGG18KBG000014', '18kgold_product_bangles', '2025-06-11 20:06:57'),
(169, 'HJ', 'S', 'R925', 'BR', 7, 'HJSR925BR000007', 'rosegold_product_bracelets', '2025-06-11 20:07:26'),
(170, 'HJ', 'S', 'R925', 'BR', 8, 'HJSR925BR000008', 'rosegold_product_bracelets', '2025-06-11 20:08:40'),
(171, 'HJ', 'S', 'R925', 'BR', 9, 'HJSR925BR000009', 'rosegold_product_bracelets', '2025-06-11 20:10:13'),
(172, 'HJ', 'S', 'R925', 'BR', 10, 'HJSR925BR000010', 'rosegold_product_bracelets', '2025-06-11 20:10:52'),
(173, 'HJ', 'S', 'R925', 'BR', 11, 'HJSR925BR000011', 'rosegold_product_bracelets', '2025-06-11 20:12:12'),
(174, 'HJ', 'S', 'R925', 'BR', 12, 'HJSR925BR000012', 'rosegold_product_bracelets', '2025-06-11 20:13:22'),
(175, 'HJ', 'G', 'G18K', 'BR', 4, 'HJGG18KBR000004', '18kgold_product_bracelets', '2025-06-11 20:13:33'),
(176, 'HJ', 'S', 'R925', 'BR', 13, 'HJSR925BR000013', 'rosegold_product_bracelets', '2025-06-11 20:13:57'),
(177, 'HJ', 'S', 'R925', 'BG', 3, 'HJSR925BG000003', 'rosegold_product_bangles', '2025-06-11 20:14:49'),
(178, 'HJ', 'S', 'R925', 'BG', 4, 'HJSR925BG000004', 'rosegold_product_bangles', '2025-06-11 20:15:21'),
(179, 'HJ', 'S', 'R925', 'BR', 14, 'HJSR925BR000014', 'rosegold_product_bracelets', '2025-06-11 20:16:42'),
(180, 'HJ', 'S', 'R925', 'BR', 15, 'HJSR925BR000015', 'rosegold_product_bracelets', '2025-06-11 20:17:23'),
(181, 'HJ', 'S', 'R925', 'BR', 16, 'HJSR925BR000016', 'rosegold_product_bracelets', '2025-06-11 20:18:00'),
(182, 'HJ', 'S', 'R925', 'BR', 17, 'HJSR925BR000017', 'rosegold_product_bracelets', '2025-06-11 20:18:34'),
(183, 'HJ', 'G', 'G18K', 'BR', 5, 'HJGG18KBR000005', '18kgold_product_bracelets', '2025-06-11 20:18:37'),
(184, 'HJ', 'S', 'R925', 'BR', 18, 'HJSR925BR000018', 'rosegold_product_bracelets', '2025-06-11 20:19:29'),
(185, 'HJ', 'S', 'R925', 'BR', 19, 'HJSR925BR000019', 'rosegold_product_bracelets', '2025-06-11 20:20:26'),
(186, 'HJ', 'S', 'R925', 'BR', 20, 'HJSR925BR000020', 'rosegold_product_bracelets', '2025-06-11 20:21:01'),
(187, 'HJ', 'G', 'G18K', 'BR', 6, 'HJGG18KBR000006', '18kgold_product_bracelets', '2025-06-11 20:21:29'),
(188, 'HJ', 'S', 'R925', 'BR', 21, 'HJSR925BR000021', 'rosegold_product_bracelets', '2025-06-11 20:21:40'),
(189, 'HJ', 'S', 'S925', 'BR', 1, 'HJSS925BR000001', 'silver_product_bracelets', '2025-06-11 20:22:19'),
(190, 'HJ', 'S', 'S925', 'BR', 2, 'HJSS925BR000002', 'silver_product_bracelets', '2025-06-11 20:23:08'),
(191, 'HJ', 'S', 'R925', 'BR', 22, 'HJSR925BR000022', 'rosegold_product_bracelets', '2025-06-11 20:24:25'),
(192, 'HJ', 'S', 'R925', 'BR', 23, 'HJSR925BR000023', 'rosegold_product_bracelets', '2025-06-11 20:25:07'),
(193, 'HJ', 'S', 'R925', 'BR', 24, 'HJSR925BR000024', 'rosegold_product_bracelets', '2025-06-11 20:25:47'),
(194, 'HJ', 'G', 'G18K', 'BR', 7, 'HJGG18KBR000007', '18kgold_product_bracelets', '2025-06-11 20:26:02'),
(195, 'HJ', 'S', 'R925', 'BR', 25, 'HJSR925BR000025', 'rosegold_product_bracelets', '2025-06-11 20:26:27'),
(196, 'HJ', 'S', 'R925', 'BR', 26, 'HJSR925BR000026', 'rosegold_product_bracelets', '2025-06-11 20:27:03'),
(197, 'HJ', 'S', 'R925', 'BR', 27, 'HJSR925BR000027', 'rosegold_product_bracelets', '2025-06-11 20:27:36'),
(198, 'HJ', 'S', 'R925', 'BR', 28, 'HJSR925BR000028', 'rosegold_product_bracelets', '2025-06-11 20:28:10'),
(199, 'HJ', 'G', 'G18K', 'BR', 8, 'HJGG18KBR000008', '18kgold_product_bracelets', '2025-06-11 20:28:17'),
(200, 'HJ', 'S', 'R925', 'BR', 29, 'HJSR925BR000029', 'rosegold_product_bracelets', '2025-06-11 20:28:55'),
(201, 'HJ', 'S', 'R925', 'BR', 30, 'HJSR925BR000030', 'rosegold_product_bracelets', '2025-06-11 20:29:31'),
(202, 'HJ', 'S', 'R925', 'BG', 5, 'HJSR925BG000005', 'rosegold_product_bangles', '2025-06-11 20:30:57'),
(203, 'HJ', 'S', 'R925', 'BR', 31, 'HJSR925BR000031', 'rosegold_product_bracelets', '2025-06-11 20:32:13'),
(204, 'HJ', 'S', 'R925', 'BR', 32, 'HJSR925BR000032', 'rosegold_product_bracelets', '2025-06-11 20:33:13'),
(205, 'HJ', 'S', 'R925', 'BR', 33, 'HJSR925BR000033', 'rosegold_product_bracelets', '2025-06-11 20:33:53'),
(206, 'HJ', 'S', 'R925', 'BR', 34, 'HJSR925BR000034', 'rosegold_product_bracelets', '2025-06-11 20:36:01'),
(207, 'HJ', 'S', 'R925', 'BR', 35, 'HJSR925BR000035', 'rosegold_product_bracelets', '2025-06-11 20:36:44'),
(208, 'HJ', 'S', 'R925', 'BR', 36, 'HJSR925BR000036', 'rosegold_product_bracelets', '2025-06-11 20:37:16'),
(209, 'HJ', 'S', 'R925', 'BR', 37, 'HJSR925BR000037', 'rosegold_product_bracelets', '2025-06-11 20:38:01'),
(210, 'HJ', 'S', 'R925', 'BR', 38, 'HJSR925BR000038', 'rosegold_product_bracelets', '2025-06-11 20:38:47'),
(211, 'HJ', 'S', 'R925', 'BR', 39, 'HJSR925BR000039', 'rosegold_product_bracelets', '2025-06-11 20:40:00'),
(212, 'HJ', 'G', 'G18K', 'BR', 9, 'HJGG18KBR000009', '18kgold_product_bracelets', '2025-06-11 20:41:15'),
(213, 'HJ', 'S', 'R925', 'BR', 40, 'HJSR925BR000040', 'rosegold_product_bracelets', '2025-06-11 20:42:17'),
(214, 'HJ', 'S', 'R925', 'BR', 41, 'HJSR925BR000041', 'rosegold_product_bracelets', '2025-06-11 20:43:17'),
(215, 'HJ', 'G', 'G18K', 'BR', 10, 'HJGG18KBR000010', '18kgold_product_bracelets', '2025-06-11 20:43:29'),
(216, 'HJ', 'G', 'G18K', 'BR', 11, 'HJGG18KBR000011', '18kgold_product_bracelets', '2025-06-11 20:45:22'),
(217, 'HJ', 'G', 'G18K', 'BR', 12, 'HJGG18KBR000012', '18kgold_product_bracelets', '2025-06-11 20:47:04'),
(218, 'HJ', 'G', 'G18K', 'ER', 3, 'HJGG18KER000003', '18kgold_product_earrings', '2025-06-12 03:55:21'),
(219, 'HJ', 'G', 'G18K', 'ER', 4, 'HJGG18KER000004', '18kgold_product_earrings', '2025-06-12 04:00:57'),
(220, 'HJ', 'G', 'G18K', 'ER', 5, 'HJGG18KER000005', '18kgold_product_earrings', '2025-06-12 04:10:37'),
(221, 'HJ', 'G', 'G18K', 'ER', 6, 'HJGG18KER000006', '18kgold_product_earrings', '2025-06-12 04:13:12'),
(222, 'HJ', 'G', 'G18K', 'ER', 7, 'HJGG18KER000007', '18kgold_product_earrings', '2025-06-12 04:15:31'),
(223, 'HJ', 'G', 'G18K', 'ER', 8, 'HJGG18KER000008', '18kgold_product_earrings', '2025-06-12 04:18:20'),
(224, 'HJ', 'G', 'G18K', 'ER', 9, 'HJGG18KER000009', '18kgold_product_earrings', '2025-06-12 04:20:27'),
(225, 'HJ', 'G', 'G18K', 'ER', 10, 'HJGG18KER000010', '18kgold_product_earrings', '2025-06-12 04:22:34'),
(226, 'HJ', 'G', 'G18K', 'ER', 11, 'HJGG18KER000011', '18kgold_product_earrings', '2025-06-12 04:24:52'),
(227, 'HJ', 'G', 'G18K', 'PN', 3, 'HJGG18KPN000003', '18kgold_product_pendants', '2025-06-12 04:30:57'),
(228, 'HJ', 'G', 'G18K', 'PN', 4, 'HJGG18KPN000004', '18kgold_product_pendants', '2025-06-12 04:33:47'),
(229, 'HJ', 'G', 'G18K', 'PN', 5, 'HJGG18KPN000005', '18kgold_product_pendants', '2025-06-12 04:35:52'),
(230, 'HJ', 'G', 'G18K', 'PN', 6, 'HJGG18KPN000006', '18kgold_product_pendants', '2025-06-12 04:37:03'),
(231, 'HJ', 'G', 'G18K', 'RG', 4, 'HJGG18KRG000004', '18kgold_product_rings', '2025-06-12 05:34:43'),
(232, 'HJ', 'G', 'G18K', 'RG', 5, 'HJGG18KRG000005', '18kgold_product_rings', '2025-06-12 05:38:23'),
(233, 'HJ', 'G', 'G18K', 'RG', 6, 'HJGG18KRG000006', '18kgold_product_rings', '2025-06-12 05:40:38'),
(234, 'HJ', 'G', 'G22K', 'BG', 3, 'HJGG22KBG000003', '22kgold_product_bangles', '2025-06-12 05:50:05'),
(235, 'HJ', 'G', 'G22K', 'BG', 4, 'HJGG22KBG000004', '22kgold_product_bangles', '2025-06-12 05:51:48'),
(236, 'HJ', 'G', 'G22K', 'BG', 5, 'HJGG22KBG000005', '22kgold_product_bangles', '2025-06-12 05:53:24'),
(237, 'HJ', 'G', 'G22K', 'BG', 6, 'HJGG22KBG000006', '22kgold_product_bangles', '2025-06-12 05:54:58'),
(238, 'HJ', 'G', 'G22K', 'BG', 7, 'HJGG22KBG000007', '22kgold_product_bangles', '2025-06-12 05:58:16'),
(239, 'HJ', 'G', 'G22K', 'BG', 8, 'HJGG22KBG000008', '22kgold_product_bangles', '2025-06-12 06:00:12'),
(240, 'HJ', 'G', 'G22K', 'BG', 9, 'HJGG22KBG000009', '22kgold_product_bangles', '2025-06-12 06:02:04'),
(241, 'HJ', 'G', 'G22K', 'BG', 10, 'HJGG22KBG000010', '22kgold_product_bangles', '2025-06-12 06:15:42'),
(242, 'HJ', 'G', 'G22K', 'BG', 11, 'HJGG22KBG000011', '22kgold_product_bangles', '2025-06-12 09:29:37'),
(243, 'HJ', 'G', 'G22K', 'BG', 12, 'HJGG22KBG000012', '22kgold_product_bangles', '2025-06-12 09:32:14'),
(244, 'HJ', 'G', 'G22K', 'BG', 13, 'HJGG22KBG000013', '22kgold_product_bangles', '2025-06-12 09:34:51'),
(245, 'HJ', 'G', 'G22K', 'BG', 14, 'HJGG22KBG000014', '22kgold_product_bangles', '2025-06-12 09:36:33'),
(246, 'HJ', 'G', 'G22K', 'BG', 15, 'HJGG22KBG000015', '22kgold_product_bangles', '2025-06-12 09:39:04'),
(247, 'HJ', 'G', 'G22K', 'BG', 16, 'HJGG22KBG000016', '22kgold_product_bangles', '2025-06-12 09:43:26'),
(248, 'HJ', 'G', 'G22K', 'BG', 17, 'HJGG22KBG000017', '22kgold_product_bangles', '2025-06-12 09:46:25'),
(249, 'HJ', 'G', 'G22K', 'BG', 18, 'HJGG22KBG000018', '22kgold_product_bangles', '2025-06-12 09:49:31'),
(250, 'HJ', 'G', 'G22K', 'BG', 19, 'HJGG22KBG000019', '22kgold_product_bangles', '2025-06-12 09:51:13'),
(251, 'HJ', 'G', 'G22K', 'BG', 20, 'HJGG22KBG000020', '22kgold_product_bangles', '2025-06-12 09:53:20'),
(252, 'HJ', 'G', 'G22K', 'BG', 21, 'HJGG22KBG000021', '22kgold_product_bangles', '2025-06-12 09:58:57'),
(253, 'HJ', 'G', 'G22K', 'BG', 22, 'HJGG22KBG000022', '22kgold_product_bangles', '2025-06-12 10:01:14'),
(254, 'HJ', 'G', 'G22K', 'BG', 23, 'HJGG22KBG000023', '22kgold_product_bangles', '2025-06-12 10:03:43'),
(255, 'HJ', 'G', 'G22K', 'BG', 24, 'HJGG22KBG000024', '22kgold_product_bangles', '2025-06-12 10:05:43'),
(256, 'HJ', 'G', 'G22K', 'BG', 25, 'HJGG22KBG000025', '22kgold_product_bangles', '2025-06-12 10:08:19'),
(257, 'HJ', 'G', 'G22K', 'BG', 26, 'HJGG22KBG000026', '22kgold_product_bangles', '2025-06-12 10:09:59'),
(258, 'HJ', 'G', 'G22K', 'BG', 27, 'HJGG22KBG000027', '22kgold_product_bangles', '2025-06-12 10:12:06'),
(259, 'HJ', 'G', 'G22K', 'BG', 28, 'HJGG22KBG000028', '22kgold_product_bangles', '2025-06-12 10:13:38'),
(260, 'HJ', 'G', 'G22K', 'BG', 29, 'HJGG22KBG000029', '22kgold_product_bangles', '2025-06-12 10:15:47'),
(261, 'HJ', 'G', 'G22K', 'BG', 30, 'HJGG22KBG000030', '22kgold_product_bangles', '2025-06-12 10:21:34'),
(262, 'HJ', 'G', 'G22K', 'BG', 31, 'HJGG22KBG000031', '22kgold_product_bangles', '2025-06-12 10:23:31'),
(263, 'HJ', 'G', 'G22K', 'BG', 32, 'HJGG22KBG000032', '22kgold_product_bangles', '2025-06-12 10:25:26'),
(264, 'HJ', 'G', 'G22K', 'BG', 33, 'HJGG22KBG000033', '22kgold_product_bangles', '2025-06-12 10:27:58'),
(265, 'HJ', 'G', 'G22K', 'BR', 4, 'HJGG22KBR000004', '22kgold_product_bracelets', '2025-06-12 10:42:36'),
(266, 'HJ', 'G', 'G22K', 'BR', 5, 'HJGG22KBR000005', '22kgold_product_bracelets', '2025-06-12 10:44:55'),
(267, 'HJ', 'G', 'G22K', 'BR', 6, 'HJGG22KBR000006', '22kgold_product_bracelets', '2025-06-12 10:47:40'),
(268, 'HJ', 'G', 'G22K', 'BR', 7, 'HJGG22KBR000007', '22kgold_product_bracelets', '2025-06-12 10:49:29'),
(269, 'HJ', 'G', 'G22K', 'BR', 8, 'HJGG22KBR000008', '22kgold_product_bracelets', '2025-06-12 10:51:58'),
(270, 'HJ', 'G', 'G22K', 'BR', 9, 'HJGG22KBR000009', '22kgold_product_bracelets', '2025-06-12 10:54:36'),
(271, 'HJ', 'G', 'G22K', 'BR', 10, 'HJGG22KBR000010', '22kgold_product_bracelets', '2025-06-12 10:58:48'),
(272, 'HJ', 'G', 'G22K', 'BR', 11, 'HJGG22KBR000011', '22kgold_product_bracelets', '2025-06-12 11:00:34'),
(273, 'HJ', 'G', 'G22K', 'BR', 12, 'HJGG22KBR000012', '22kgold_product_bracelets', '2025-06-12 11:02:38'),
(274, 'HJ', 'G', 'G22K', 'BR', 13, 'HJGG22KBR000013', '22kgold_product_bracelets', '2025-06-12 11:04:26'),
(275, 'HJ', 'G', 'G22K', 'BR', 14, 'HJGG22KBR000014', '22kgold_product_bracelets', '2025-06-12 11:07:41'),
(276, 'HJ', 'G', 'G22K', 'BR', 15, 'HJGG22KBR000015', '22kgold_product_bracelets', '2025-06-12 11:09:34'),
(277, 'HJ', 'G', 'G22K', 'BR', 16, 'HJGG22KBR000016', '22kgold_product_bracelets', '2025-06-12 11:11:35'),
(278, 'HJ', 'G', 'G22K', 'BR', 17, 'HJGG22KBR000017', '22kgold_product_bracelets', '2025-06-12 11:16:50'),
(279, 'HJ', 'G', 'G22K', 'BR', 18, 'HJGG22KBR000018', '22kgold_product_bracelets', '2025-06-12 11:18:46'),
(280, 'HJ', 'G', 'G22K', 'BR', 19, 'HJGG22KBR000019', '22kgold_product_bracelets', '2025-06-12 11:20:41'),
(281, 'HJ', 'G', 'G22K', 'BR', 20, 'HJGG22KBR000020', '22kgold_product_bracelets', '2025-06-12 11:24:52'),
(282, 'HJ', 'G', 'G22K', 'BR', 21, 'HJGG22KBR000021', '22kgold_product_bracelets', '2025-06-12 11:26:48'),
(283, 'HJ', 'G', 'G22K', 'BR', 22, 'HJGG22KBR000022', '22kgold_product_bracelets', '2025-06-12 11:28:45'),
(284, 'HJ', 'G', 'G22K', 'BR', 23, 'HJGG22KBR000023', '22kgold_product_bracelets', '2025-06-12 11:30:30'),
(285, 'HJ', 'G', 'G22K', 'BR', 24, 'HJGG22KBR000024', '22kgold_product_bracelets', '2025-06-12 11:34:14'),
(286, 'HJ', 'G', 'G22K', 'ER', 3, 'HJGG22KER000003', '22kgold_product_earrings', '2025-06-12 11:46:09'),
(287, 'HJ', 'G', 'G22K', 'ER', 4, 'HJGG22KER000004', '22kgold_product_earrings', '2025-06-12 11:47:51'),
(288, 'HJ', 'G', 'G22K', 'ER', 5, 'HJGG22KER000005', '22kgold_product_earrings', '2025-06-12 11:49:25'),
(289, 'HJ', 'G', 'G22K', 'ER', 6, 'HJGG22KER000006', '22kgold_product_earrings', '2025-06-12 11:51:05'),
(290, 'HJ', 'G', 'G22K', 'ER', 7, 'HJGG22KER000007', '22kgold_product_earrings', '2025-06-12 11:52:45'),
(291, 'HJ', 'G', 'G22K', 'ER', 8, 'HJGG22KER000008', '22kgold_product_earrings', '2025-06-12 11:54:21'),
(292, 'HJ', 'G', 'G22K', 'ER', 9, 'HJGG22KER000009', '22kgold_product_earrings', '2025-06-12 11:56:07'),
(293, 'HJ', 'G', 'G22K', 'ER', 10, 'HJGG22KER000010', '22kgold_product_earrings', '2025-06-12 11:57:28'),
(294, 'HJ', 'G', 'G22K', 'ER', 11, 'HJGG22KER000011', '22kgold_product_earrings', '2025-06-12 14:45:31'),
(295, 'HJ', 'G', 'G22K', 'ER', 12, 'HJGG22KER000012', '22kgold_product_earrings', '2025-06-12 14:47:41'),
(296, 'HJ', 'G', 'G22K', 'ER', 13, 'HJGG22KER000013', '22kgold_product_earrings', '2025-06-12 14:49:57'),
(297, 'HJ', 'G', 'G22K', 'ER', 14, 'HJGG22KER000014', '22kgold_product_earrings', '2025-06-12 14:54:52'),
(298, 'HJ', 'G', 'G22K', 'ER', 15, 'HJGG22KER000015', '22kgold_product_earrings', '2025-06-12 14:58:21'),
(299, 'HJ', 'G', 'G22K', 'ER', 16, 'HJGG22KER000016', '22kgold_product_earrings', '2025-06-12 15:01:41'),
(300, 'HJ', 'G', 'G22K', 'ER', 17, 'HJGG22KER000017', '22kgold_product_earrings', '2025-06-12 15:04:44'),
(301, 'HJ', 'G', 'G22K', 'ER', 18, 'HJGG22KER000018', '22kgold_product_earrings', '2025-06-12 15:07:22'),
(302, 'HJ', 'G', 'G22K', 'ER', 19, 'HJGG22KER000019', '22kgold_product_earrings', '2025-06-12 15:09:15'),
(303, 'HJ', 'G', 'G22K', 'ER', 20, 'HJGG22KER000020', '22kgold_product_earrings', '2025-06-12 15:13:04'),
(304, 'HJ', 'G', 'G22K', 'ER', 21, 'HJGG22KER000021', '22kgold_product_earrings', '2025-06-12 15:15:13'),
(305, 'HJ', 'G', 'G22K', 'ER', 22, 'HJGG22KER000022', '22kgold_product_earrings', '2025-06-12 15:17:54'),
(306, 'HJ', 'G', 'G22K', 'ER', 23, 'HJGG22KER000023', '22kgold_product_earrings', '2025-06-12 15:21:35'),
(307, 'HJ', 'G', 'G22K', 'ER', 24, 'HJGG22KER000024', '22kgold_product_earrings', '2025-06-12 15:24:23'),
(308, 'HJ', 'G', 'G22K', 'ER', 25, 'HJGG22KER000025', '22kgold_product_earrings', '2025-06-12 15:26:47'),
(309, 'HJ', 'G', 'G22K', 'ER', 26, 'HJGG22KER000026', '22kgold_product_earrings', '2025-06-12 15:29:06'),
(310, 'HJ', 'G', 'G22K', 'ER', 27, 'HJGG22KER000027', '22kgold_product_earrings', '2025-06-12 15:33:25'),
(311, 'HJ', 'G', 'G22K', 'ER', 28, 'HJGG22KER000028', '22kgold_product_earrings', '2025-06-12 15:38:17'),
(312, 'HJ', 'G', 'G22K', 'ER', 29, 'HJGG22KER000029', '22kgold_product_earrings', '2025-06-12 15:43:07'),
(313, 'HJ', 'G', 'G22K', 'ER', 30, 'HJGG22KER000030', '22kgold_product_earrings', '2025-06-12 15:46:49'),
(314, 'HJ', 'G', 'G22K', 'ER', 31, 'HJGG22KER000031', '22kgold_product_earrings', '2025-06-12 15:51:36'),
(315, 'HJ', 'G', 'G22K', 'ER', 32, 'HJGG22KER000032', '22kgold_product_earrings', '2025-06-12 15:55:24'),
(316, 'HJ', 'G', 'G22K', 'ER', 33, 'HJGG22KER000033', '22kgold_product_earrings', '2025-06-12 15:58:44'),
(317, 'HJ', 'G', 'G22K', 'ER', 34, 'HJGG22KER000034', '22kgold_product_earrings', '2025-06-12 16:00:44'),
(318, 'HJ', 'G', 'G22K', 'ER', 35, 'HJGG22KER000035', '22kgold_product_earrings', '2025-06-12 16:03:29'),
(319, 'HJ', 'G', 'G22K', 'ER', 36, 'HJGG22KER000036', '22kgold_product_earrings', '2025-06-12 16:07:07'),
(320, 'HJ', 'G', 'G22K', 'ER', 37, 'HJGG22KER000037', '22kgold_product_earrings', '2025-06-12 16:11:38'),
(321, 'HJ', 'G', 'G22K', 'ER', 38, 'HJGG22KER000038', '22kgold_product_earrings', '2025-06-13 04:58:47'),
(322, 'HJ', 'G', 'G22K', 'ER', 39, 'HJGG22KER000039', '22kgold_product_earrings', '2025-06-13 05:03:47'),
(323, 'HJ', 'G', 'G22K', 'ER', 40, 'HJGG22KER000040', '22kgold_product_earrings', '2025-06-13 05:05:54'),
(324, 'HJ', 'G', 'G22K', 'ER', 41, 'HJGG22KER000041', '22kgold_product_earrings', '2025-06-13 05:07:48'),
(325, 'HJ', 'G', 'G22K', 'ER', 42, 'HJGG22KER000042', '22kgold_product_earrings', '2025-06-13 05:11:51'),
(326, 'HJ', 'G', 'G22K', 'ER', 43, 'HJGG22KER000043', '22kgold_product_earrings', '2025-06-13 05:13:33'),
(327, 'HJ', 'G', 'G22K', 'ER', 44, 'HJGG22KER000044', '22kgold_product_earrings', '2025-06-13 05:16:47'),
(328, 'HJ', 'G', 'G22K', 'ER', 45, 'HJGG22KER000045', '22kgold_product_earrings', '2025-06-13 05:18:18'),
(329, 'HJ', 'G', 'G22K', 'ER', 46, 'HJGG22KER000046', '22kgold_product_earrings', '2025-06-13 05:20:07'),
(330, 'HJ', 'G', 'G22K', 'ER', 47, 'HJGG22KER000047', '22kgold_product_earrings', '2025-06-13 05:22:39'),
(331, 'HJ', 'G', 'G22K', 'ER', 48, 'HJGG22KER000048', '22kgold_product_earrings', '2025-06-13 05:24:25'),
(332, 'HJ', 'G', 'G22K', 'ER', 49, 'HJGG22KER000049', '22kgold_product_earrings', '2025-06-13 05:26:17'),
(333, 'HJ', 'G', 'G22K', 'ER', 50, 'HJGG22KER000050', '22kgold_product_earrings', '2025-06-13 05:29:53'),
(334, 'HJ', 'G', 'G22K', 'ER', 51, 'HJGG22KER000051', '22kgold_product_earrings', '2025-06-13 05:50:50'),
(335, 'HJ', 'G', 'G22K', 'ER', 52, 'HJGG22KER000052', '22kgold_product_earrings', '2025-06-13 05:54:14'),
(336, 'HJ', 'G', 'G22K', 'ER', 53, 'HJGG22KER000053', '22kgold_product_earrings', '2025-06-13 05:56:42'),
(337, 'HJ', 'G', 'G22K', 'ER', 54, 'HJGG22KER000054', '22kgold_product_earrings', '2025-06-13 06:00:32'),
(338, 'HJ', 'G', 'G22K', 'ER', 55, 'HJGG22KER000055', '22kgold_product_earrings', '2025-06-13 06:03:51'),
(339, 'HJ', 'G', 'G22K', 'ER', 56, 'HJGG22KER000056', '22kgold_product_earrings', '2025-06-13 06:10:18'),
(340, 'HJ', 'G', 'G22K', 'ER', 57, 'HJGG22KER000057', '22kgold_product_earrings', '2025-06-13 06:13:09'),
(341, 'HJ', 'G', 'G22K', 'ER', 58, 'HJGG22KER000058', '22kgold_product_earrings', '2025-06-13 06:16:30'),
(342, 'HJ', 'G', 'G22K', 'ER', 59, 'HJGG22KER000059', '22kgold_product_earrings', '2025-06-13 06:18:30'),
(343, 'HJ', 'G', 'G22K', 'ER', 60, 'HJGG22KER000060', '22kgold_product_earrings', '2025-06-13 06:20:28'),
(344, 'HJ', 'G', 'G22K', 'ER', 61, 'HJGG22KER000061', '22kgold_product_earrings', '2025-06-13 06:22:47'),
(345, 'HJ', 'G', 'G22K', 'ER', 62, 'HJGG22KER000062', '22kgold_product_earrings', '2025-06-13 06:27:06'),
(346, 'HJ', 'G', 'G22K', 'ER', 63, 'HJGG22KER000063', '22kgold_product_earrings', '2025-06-13 06:29:36'),
(347, 'HJ', 'G', 'G22K', 'ER', 64, 'HJGG22KER000064', '22kgold_product_earrings', '2025-06-13 06:50:47'),
(348, 'HJ', 'G', 'G22K', 'ER', 65, 'HJGG22KER000065', '22kgold_product_earrings', '2025-06-13 06:52:16'),
(349, 'HJ', 'G', 'G22K', 'ER', 66, 'HJGG22KER000066', '22kgold_product_earrings', '2025-06-13 06:53:39'),
(350, 'HJ', 'G', 'G22K', 'ER', 67, 'HJGG22KER000067', '22kgold_product_earrings', '2025-06-13 06:55:41'),
(351, 'HJ', 'G', 'G22K', 'ER', 68, 'HJGG22KER000068', '22kgold_product_earrings', '2025-06-13 06:57:19'),
(352, 'HJ', 'G', 'G22K', 'ER', 69, 'HJGG22KER000069', '22kgold_product_earrings', '2025-06-13 06:58:48'),
(353, 'HJ', 'G', 'G22K', 'ER', 70, 'HJGG22KER000070', '22kgold_product_earrings', '2025-06-13 07:00:07'),
(354, 'HJ', 'G', 'G22K', 'ER', 71, 'HJGG22KER000071', '22kgold_product_earrings', '2025-06-13 07:02:13'),
(355, 'HJ', 'G', 'G22K', 'ER', 72, 'HJGG22KER000072', '22kgold_product_earrings', '2025-06-13 07:04:10'),
(356, 'HJ', 'G', 'G22K', 'ER', 73, 'HJGG22KER000073', '22kgold_product_earrings', '2025-06-13 07:07:53'),
(357, 'HJ', 'G', 'G22K', 'ER', 74, 'HJGG22KER000074', '22kgold_product_earrings', '2025-06-13 07:11:57'),
(358, 'HJ', 'G', 'G22K', 'ER', 75, 'HJGG22KER000075', '22kgold_product_earrings', '2025-06-13 07:13:57'),
(359, 'HJ', 'G', 'G22K', 'ER', 76, 'HJGG22KER000076', '22kgold_product_earrings', '2025-06-13 07:15:18'),
(360, 'HJ', 'G', 'G22K', 'ER', 77, 'HJGG22KER000077', '22kgold_product_earrings', '2025-06-13 07:16:56'),
(361, 'HJ', 'G', 'G22K', 'ER', 78, 'HJGG22KER000078', '22kgold_product_earrings', '2025-06-13 07:18:17'),
(362, 'HJ', 'G', 'G22K', 'ER', 79, 'HJGG22KER000079', '22kgold_product_earrings', '2025-06-13 07:20:01'),
(363, 'HJ', 'G', 'G22K', 'ER', 80, 'HJGG22KER000080', '22kgold_product_earrings', '2025-06-13 07:21:45'),
(364, 'HJ', 'G', 'G22K', 'ER', 81, 'HJGG22KER000081', '22kgold_product_earrings', '2025-06-13 07:23:09'),
(365, 'HJ', 'G', 'G22K', 'ER', 82, 'HJGG22KER000082', '22kgold_product_earrings', '2025-06-13 07:24:29'),
(366, 'HJ', 'G', 'G22K', 'ER', 83, 'HJGG22KER000083', '22kgold_product_earrings', '2025-06-13 07:26:01'),
(367, 'HJ', 'G', 'G22K', 'ER', 84, 'HJGG22KER000084', '22kgold_product_earrings', '2025-06-13 07:27:18'),
(368, 'HJ', 'G', 'G22K', 'FC', 3, 'HJGG22KFC000003', '22kgold_product_fancychains', '2025-06-13 07:34:08'),
(369, 'HJ', 'G', 'G22K', 'FC', 4, 'HJGG22KFC000004', '22kgold_product_fancychains', '2025-06-13 07:35:51'),
(370, 'HJ', 'G', 'G22K', 'FC', 5, 'HJGG22KFC000005', '22kgold_product_fancychains', '2025-06-13 07:37:23'),
(371, 'HJ', 'G', 'G22K', 'FC', 6, 'HJGG22KFC000006', '22kgold_product_fancychains', '2025-06-13 07:39:06'),
(372, 'HJ', 'G', 'G22K', 'FC', 7, 'HJGG22KFC000007', '22kgold_product_fancychains', '2025-06-13 07:40:14'),
(373, 'HJ', 'G', 'G22K', 'FC', 8, 'HJGG22KFC000008', '22kgold_product_fancychains', '2025-06-13 08:26:34'),
(374, 'HJ', 'G', 'G22K', 'FC', 9, 'HJGG22KFC000009', '22kgold_product_fancychains', '2025-06-13 08:28:31'),
(375, 'HJ', 'G', 'G22K', 'FC', 10, 'HJGG22KFC000010', '22kgold_product_fancychains', '2025-06-13 08:30:20'),
(376, 'HJ', 'G', 'G22K', 'FC', 11, 'HJGG22KFC000011', '22kgold_product_fancychains', '2025-06-13 08:32:00'),
(377, 'HJ', 'G', 'G22K', 'FC', 12, 'HJGG22KFC000012', '22kgold_product_fancychains', '2025-06-13 08:33:44'),
(378, 'HJ', 'G', 'G22K', 'FC', 13, 'HJGG22KFC000013', '22kgold_product_fancychains', '2025-06-13 08:37:53'),
(379, 'HJ', 'G', 'G22K', 'FC', 14, 'HJGG22KFC000014', '22kgold_product_fancychains', '2025-06-13 08:39:37'),
(380, 'HJ', 'G', 'G22K', 'FC', 15, 'HJGG22KFC000015', '22kgold_product_fancychains', '2025-06-13 08:41:42'),
(381, 'HJ', 'G', 'G22K', 'FC', 16, 'HJGG22KFC000016', '22kgold_product_fancychains', '2025-06-13 08:43:34'),
(382, 'HJ', 'G', 'G22K', 'FC', 17, 'HJGG22KFC000017', '22kgold_product_fancychains', '2025-06-13 08:48:37'),
(383, 'HJ', 'G', 'G22K', 'FC', 18, 'HJGG22KFC000018', '22kgold_product_fancychains', '2025-06-13 08:50:26'),
(384, 'HJ', 'G', 'G22K', 'FC', 19, 'HJGG22KFC000019', '22kgold_product_fancychains', '2025-06-13 08:52:20'),
(385, 'HJ', 'G', 'G22K', 'FC', 20, 'HJGG22KFC000020', '22kgold_product_fancychains', '2025-06-13 08:53:58'),
(386, 'HJ', 'G', 'G22K', 'FC', 21, 'HJGG22KFC000021', '22kgold_product_fancychains', '2025-06-13 08:56:16'),
(387, 'HJ', 'G', 'G22K', 'FC', 22, 'HJGG22KFC000022', '22kgold_product_fancychains', '2025-06-13 08:58:42'),
(388, 'HJ', 'G', 'G22K', 'FC', 23, 'HJGG22KFC000023', '22kgold_product_fancychains', '2025-06-13 08:59:57'),
(389, 'HJ', 'G', 'G22K', 'FC', 24, 'HJGG22KFC000024', '22kgold_product_fancychains', '2025-06-13 09:01:14'),
(390, 'HJ', 'G', 'G22K', 'FC', 25, 'HJGG22KFC000025', '22kgold_product_fancychains', '2025-06-13 09:03:09'),
(391, 'HJ', 'G', 'G22K', 'FC', 26, 'HJGG22KFC000026', '22kgold_product_fancychains', '2025-06-13 09:09:57'),
(392, 'HJ', 'G', 'G22K', 'FC', 27, 'HJGG22KFC000027', '22kgold_product_fancychains', '2025-06-13 09:11:56'),
(393, 'HJ', 'G', 'G22K', 'FC', 28, 'HJGG22KFC000028', '22kgold_product_fancychains', '2025-06-13 09:13:38'),
(394, 'HJ', 'G', 'G22K', 'FC', 29, 'HJGG22KFC000029', '22kgold_product_fancychains', '2025-06-13 09:15:45'),
(395, 'HJ', 'G', 'G22K', 'FC', 30, 'HJGG22KFC000030', '22kgold_product_fancychains', '2025-06-13 09:17:49'),
(396, 'HJ', 'G', 'G22K', 'FC', 31, 'HJGG22KFC000031', '22kgold_product_fancychains', '2025-06-13 09:19:30'),
(397, 'HJ', 'G', 'G22K', 'FC', 32, 'HJGG22KFC000032', '22kgold_product_fancychains', '2025-06-13 09:21:16'),
(398, 'HJ', 'G', 'G22K', 'FC', 33, 'HJGG22KFC000033', '22kgold_product_fancychains', '2025-06-13 09:23:00'),
(399, 'HJ', 'G', 'G22K', 'FC', 34, 'HJGG22KFC000034', '22kgold_product_fancychains', '2025-06-13 09:24:42'),
(400, 'HJ', 'G', 'G22K', 'FC', 35, 'HJGG22KFC000035', '22kgold_product_fancychains', '2025-06-13 09:26:07'),
(401, 'HJ', 'G', 'G22K', 'FC', 36, 'HJGG22KFC000036', '22kgold_product_fancychains', '2025-06-13 09:27:33'),
(402, 'HJ', 'G', 'G22K', 'FC', 37, 'HJGG22KFC000037', '22kgold_product_fancychains', '2025-06-13 09:29:06'),
(403, 'HJ', 'G', 'G22K', 'FC', 38, 'HJGG22KFC000038', '22kgold_product_fancychains', '2025-06-13 09:30:18'),
(404, 'HJ', 'G', 'G22K', 'FC', 39, 'HJGG22KFC000039', '22kgold_product_fancychains', '2025-06-13 09:32:08'),
(405, 'HJ', 'G', 'G22K', 'FC', 40, 'HJGG22KFC000040', '22kgold_product_fancychains', '2025-06-13 09:36:47'),
(406, 'HJ', 'G', 'G22K', 'FC', 41, 'HJGG22KFC000041', '22kgold_product_fancychains', '2025-06-13 09:38:46'),
(407, 'HJ', 'G', 'G22K', 'FC', 42, 'HJGG22KFC000042', '22kgold_product_fancychains', '2025-06-13 09:40:37'),
(408, 'HJ', 'G', 'G22K', 'FC', 43, 'HJGG22KFC000043', '22kgold_product_fancychains', '2025-06-13 09:41:51'),
(409, 'HJ', 'G', 'G22K', 'FC', 44, 'HJGG22KFC000044', '22kgold_product_fancychains', '2025-06-13 09:46:54'),
(410, 'HJ', 'G', 'G22K', 'FC', 45, 'HJGG22KFC000045', '22kgold_product_fancychains', '2025-06-13 09:48:50'),
(411, 'HJ', 'G', 'G22K', 'FC', 46, 'HJGG22KFC000046', '22kgold_product_fancychains', '2025-06-13 09:50:40'),
(412, 'HJ', 'G', 'G22K', 'FC', 47, 'HJGG22KFC000047', '22kgold_product_fancychains', '2025-06-13 09:52:52'),
(413, 'HJ', 'G', 'G22K', 'FC', 48, 'HJGG22KFC000048', '22kgold_product_fancychains', '2025-06-13 09:55:06'),
(414, 'HJ', 'G', 'G22K', 'FC', 49, 'HJGG22KFC000049', '22kgold_product_fancychains', '2025-06-13 09:57:44'),
(415, 'HJ', 'G', 'G22K', 'FC', 50, 'HJGG22KFC000050', '22kgold_product_fancychains', '2025-06-13 09:59:55'),
(416, 'HJ', 'G', 'G22K', 'FC', 51, 'HJGG22KFC000051', '22kgold_product_fancychains', '2025-06-13 10:02:16'),
(417, 'HJ', 'G', 'G22K', 'FC', 52, 'HJGG22KFC000052', '22kgold_product_fancychains', '2025-06-13 10:06:13'),
(418, 'HJ', 'G', 'G22K', 'FC', 53, 'HJGG22KFC000053', '22kgold_product_fancychains', '2025-06-13 10:08:01'),
(419, 'HJ', 'G', 'G22K', 'PN', 3, 'HJGG22KPN000003', '22kgold_product_pendants', '2025-06-13 10:16:30'),
(420, 'HJ', 'G', 'G22K', 'PN', 4, 'HJGG22KPN000004', '22kgold_product_pendants', '2025-06-13 10:26:05'),
(421, 'HJ', 'G', 'G22K', 'PN', 5, 'HJGG22KPN000005', '22kgold_product_pendants', '2025-06-13 10:29:22'),
(422, 'HJ', 'G', 'G22K', 'PN', 6, 'HJGG22KPN000006', '22kgold_product_pendants', '2025-06-13 10:31:15'),
(423, 'HJ', 'G', 'G22K', 'PN', 7, 'HJGG22KPN000007', '22kgold_product_pendants', '2025-06-13 10:34:24'),
(424, 'HJ', 'G', 'G22K', 'PN', 8, 'HJGG22KPN000008', '22kgold_product_pendants', '2025-06-13 10:36:51'),
(425, 'HJ', 'G', 'G22K', 'PN', 9, 'HJGG22KPN000009', '22kgold_product_pendants', '2025-06-13 10:43:22'),
(426, 'HJ', 'G', 'G22K', 'RG', 6, 'HJGG22KRG000006', '22kgold_product_rings', '2025-06-13 10:56:37'),
(427, 'HJ', 'G', 'G22K', 'RG', 7, 'HJGG22KRG000007', '22kgold_product_rings', '2025-06-13 10:58:12'),
(428, 'HJ', 'G', 'G22K', 'RG', 8, 'HJGG22KRG000008', '22kgold_product_rings', '2025-06-13 10:59:41'),
(429, 'HJ', 'G', 'G22K', 'RG', 9, 'HJGG22KRG000009', '22kgold_product_rings', '2025-06-13 11:00:52'),
(430, 'HJ', 'G', 'G22K', 'RG', 10, 'HJGG22KRG000010', '22kgold_product_rings', '2025-06-13 11:02:06'),
(431, 'HJ', 'G', 'G18K', 'RG', 7, 'HJGG18KRG000007', '18kgold_product_rings', '2025-06-13 11:06:55'),
(432, 'HJ', 'G', 'G22K', 'RG', 11, 'HJGG22KRG000011', '22kgold_product_rings', '2025-06-13 11:08:23'),
(433, 'HJ', 'G', 'G22K', 'RG', 12, 'HJGG22KRG000012', '22kgold_product_rings', '2025-06-13 11:09:55'),
(434, 'HJ', 'G', 'G22K', 'RG', 13, 'HJGG22KRG000013', '22kgold_product_rings', '2025-06-13 11:11:44'),
(435, 'HJ', 'G', 'G22K', 'RG', 14, 'HJGG22KRG000014', '22kgold_product_rings', '2025-06-13 11:13:19'),
(436, 'HJ', 'G', 'G22K', 'RG', 15, 'HJGG22KRG000015', '22kgold_product_rings', '2025-06-13 11:15:02'),
(437, 'HJ', 'G', 'G22K', 'RG', 16, 'HJGG22KRG000016', '22kgold_product_rings', '2025-06-13 11:16:29'),
(438, 'HJ', 'G', 'G22K', 'RG', 17, 'HJGG22KRG000017', '22kgold_product_rings', '2025-06-13 11:17:57'),
(439, 'HJ', 'G', 'G22K', 'RG', 18, 'HJGG22KRG000018', '22kgold_product_rings', '2025-06-13 11:19:41'),
(440, 'HJ', 'G', 'G22K', 'RG', 19, 'HJGG22KRG000019', '22kgold_product_rings', '2025-06-13 11:21:22'),
(441, 'HJ', 'G', 'G22K', 'RG', 20, 'HJGG22KRG000020', '22kgold_product_rings', '2025-06-13 11:22:51'),
(442, 'HJ', 'G', 'G22K', 'RG', 21, 'HJGG22KRG000021', '22kgold_product_rings', '2025-06-13 11:24:24'),
(443, 'HJ', 'G', 'G22K', 'RG', 22, 'HJGG22KRG000022', '22kgold_product_rings', '2025-06-13 11:25:59'),
(444, 'HJ', 'G', 'G22K', 'RG', 23, 'HJGG22KRG000023', '22kgold_product_rings', '2025-06-13 11:34:33'),
(445, 'HJ', 'G', 'G22K', 'SS', 3, 'HJGG22KSS000003', '22kgold_product_secondstuds', '2025-06-13 11:39:06'),
(446, 'HJ', 'G', 'G22K', 'SS', 4, 'HJGG22KSS000004', '22kgold_product_secondstuds', '2025-06-13 11:40:35'),
(447, 'HJ', 'G', 'G22K', 'SS', 5, 'HJGG22KSS000005', '22kgold_product_secondstuds', '2025-06-13 11:42:10'),
(448, 'HJ', 'G', 'G22K', 'SS', 6, 'HJGG22KSS000006', '22kgold_product_secondstuds', '2025-06-13 11:43:29'),
(449, 'HJ', 'G', 'G22K', 'SS', 7, 'HJGG22KSS000007', '22kgold_product_secondstuds', '2025-06-13 11:44:59'),
(450, 'HJ', 'G', 'G22K', 'SS', 8, 'HJGG22KSS000008', '22kgold_product_secondstuds', '2025-06-13 14:12:31'),
(451, 'HJ', 'G', 'G22K', 'SS', 9, 'HJGG22KSS000009', '22kgold_product_secondstuds', '2025-06-13 14:16:37'),
(452, 'HJ', 'G', 'G22K', 'SS', 10, 'HJGG22KSS000010', '22kgold_product_secondstuds', '2025-06-13 14:20:41'),
(453, 'HJ', 'G', 'G22K', 'SS', 11, 'HJGG22KSS000011', '22kgold_product_secondstuds', '2025-06-13 14:22:50'),
(454, 'HJ', 'G', 'G22K', 'SS', 12, 'HJGG22KSS000012', '22kgold_product_secondstuds', '2025-06-13 14:26:53'),
(455, 'HJ', 'G', 'G22K', 'SS', 13, 'HJGG22KSS000013', '22kgold_product_secondstuds', '2025-06-13 14:30:38'),
(456, 'HJ', 'G', 'G22K', 'SS', 14, 'HJGG22KSS000014', '22kgold_product_secondstuds', '2025-06-13 14:34:35'),
(457, 'HJ', 'G', 'G22K', 'SS', 15, 'HJGG22KSS000015', '22kgold_product_secondstuds', '2025-06-13 14:37:33'),
(458, 'HJ', 'G', 'G22K', 'SS', 16, 'HJGG22KSS000016', '22kgold_product_secondstuds', '2025-06-13 14:44:03'),
(459, 'HJ', 'G', 'G22K', 'AK', 1, 'HJGG22KAK000001', '22kgold_product_anklets', '2025-06-13 14:50:17'),
(460, 'HJ', 'G', 'G22K', 'AK', 2, 'HJGG22KAK000002', '22kgold_product_anklets', '2025-06-13 14:55:02'),
(461, 'HJ', 'G', 'G22K', 'AK', 3, 'HJGG22KAK000003', '22kgold_product_anklets', '2025-06-13 14:57:04'),
(462, 'HJ', 'G', 'G22K', 'AK', 4, 'HJGG22KAK000004', '22kgold_product_anklets', '2025-06-13 14:58:58'),
(463, 'HJ', 'G', 'G22K', 'AK', 5, 'HJGG22KAK000005', '22kgold_product_anklets', '2025-06-13 15:00:46'),
(464, 'HJ', 'S', 'S850', 'KD', 3, 'HJSS850KD000003', 'silver_product_kadas', '2025-06-13 15:19:38'),
(465, 'HJ', 'S', 'S850', 'KD', 4, 'HJSS850KD000004', 'silver_product_kadas', '2025-06-13 15:21:39'),
(466, 'HJ', 'S', 'S850', 'KD', 5, 'HJSS850KD000005', 'silver_product_kadas', '2025-06-13 15:23:55'),
(467, 'HJ', 'S', 'S850', 'KD', 6, 'HJSS850KD000006', 'silver_product_kadas', '2025-06-13 15:28:10'),
(468, 'HJ', 'S', 'S850', 'BG', 3, 'HJSS850BG000003', 'silver_product_bangles', '2025-06-13 15:35:27'),
(469, 'HJ', 'S', 'S850', 'BG', 4, 'HJSS850BG000004', 'silver_product_bangles', '2025-06-13 15:37:34'),
(470, 'HJ', 'S', 'S850', 'BG', 5, 'HJSS850BG000005', 'silver_product_bangles', '2025-06-13 15:40:36'),
(471, 'HJ', 'S', 'S850', 'BR', 3, 'HJSS850BR000003', 'silver_product_bracelets', '2025-06-13 15:51:41'),
(472, 'HJ', 'S', 'S850', 'BR', 4, 'HJSS850BR000004', 'silver_product_bracelets', '2025-06-13 15:53:37'),
(473, 'HJ', 'S', 'S850', 'BR', 5, 'HJSS850BR000005', 'silver_product_bracelets', '2025-06-13 15:56:48'),
(474, 'HJ', 'S', 'S850', 'BR', 6, 'HJSS850BR000006', 'silver_product_bracelets', '2025-06-13 15:59:01'),
(475, 'HJ', 'S', 'S850', 'BR', 7, 'HJSS850BR000007', 'silver_product_bracelets', '2025-06-13 16:52:50'),
(476, 'HJ', 'S', 'S850', 'BR', 8, 'HJSS850BR000008', 'silver_product_bracelets', '2025-06-13 16:55:02'),
(477, 'HJ', 'S', 'S850', 'BR', 9, 'HJSS850BR000009', 'silver_product_bracelets', '2025-06-13 16:57:06'),
(478, 'HJ', 'S', 'S850', 'CH', 3, 'HJSS850CH000003', 'silver_product_chains', '2025-06-13 17:07:12'),
(479, 'HJ', 'S', 'S850', 'CH', 4, 'HJSS850CH000004', 'silver_product_chains', '2025-06-13 17:09:40'),
(480, 'HJ', 'S', 'S850', 'CH', 5, 'HJSS850CH000005', 'silver_product_chains', '2025-06-13 17:11:54'),
(481, 'HJ', 'S', 'S850', 'CH', 6, 'HJSS850CH000006', 'silver_product_chains', '2025-06-13 17:18:05'),
(482, 'HJ', 'S', 'S850', 'CH', 7, 'HJSS850CH000007', 'silver_product_chains', '2025-06-13 17:21:24'),
(483, 'HJ', 'S', 'S850', 'CH', 8, 'HJSS850CH000008', 'silver_product_chains', '2025-06-13 17:24:14'),
(484, 'HJ', 'S', 'S850', 'CH', 9, 'HJSS850CH000009', 'silver_product_chains', '2025-06-13 17:25:50'),
(485, 'HJ', 'S', 'S850', 'CH', 10, 'HJSS850CH000010', 'silver_product_chains', '2025-06-13 17:27:27');
INSERT INTO `product_codes` (`product_code_id`, `p1_brand`, `p2_metal`, `p3_purity`, `p4_cat`, `p5_uniquecode`, `full_code`, `table_name`, `created_at`) VALUES
(486, 'HJ', 'S', 'S850', 'CH', 11, 'HJSS850CH000011', 'silver_product_chains', '2025-06-13 17:29:00'),
(487, 'HJ', 'S', 'S850', 'CH', 12, 'HJSS850CH000012', 'silver_product_chains', '2025-06-13 17:30:32'),
(488, 'HJ', 'S', 'S850', 'CH', 13, 'HJSS850CH000013', 'silver_product_chains', '2025-06-13 17:32:10'),
(489, 'HJ', 'S', 'S850', 'CH', 14, 'HJSS850CH000014', 'silver_product_chains', '2025-06-13 17:33:48'),
(490, 'HJ', 'S', 'S850', 'CH', 15, 'HJSS850CH000015', 'silver_product_chains', '2025-06-13 17:36:14'),
(491, 'HJ', 'S', 'S850', 'CH', 16, 'HJSS850CH000016', 'silver_product_chains', '2025-06-13 17:37:44'),
(492, 'HJ', 'S', 'S850', 'BG', 6, 'HJSS850BG000006', 'silver_product_bangles', '2025-06-14 18:59:29'),
(493, 'HJ', 'S', 'S850', 'BG', 7, 'HJSS850BG000007', 'silver_product_bangles', '2025-06-14 19:00:35'),
(494, 'HJ', 'S', 'S850', 'BG', 8, 'HJSS850BG000008', 'silver_product_bangles', '2025-06-14 19:01:23'),
(495, 'HJ', 'S', 'S850', 'BG', 9, 'HJSS850BG000009', 'silver_product_bangles', '2025-06-14 19:02:06'),
(496, 'HJ', 'S', 'S850', 'BG', 10, 'HJSS850BG000010', 'silver_product_bangles', '2025-06-14 19:02:38'),
(497, 'HJ', 'S', 'S850', 'BG', 11, 'HJSS850BG000011', 'silver_product_bangles', '2025-06-14 19:03:06'),
(498, 'HJ', 'S', 'S850', 'RG', 3, 'HJSS850RG000003', 'silver_product_rings', '2025-06-14 19:30:32'),
(499, 'HJ', 'S', 'S850', 'RG', 4, 'HJSS850RG000004', 'silver_product_rings', '2025-06-14 19:31:25'),
(500, 'HJ', 'S', 'S850', 'RG', 5, 'HJSS850RG000005', 'silver_product_rings', '2025-06-14 19:32:04'),
(501, 'HJ', 'S', 'S850', 'RG', 6, 'HJSS850RG000006', 'silver_product_rings', '2025-06-14 19:32:41'),
(502, 'HJ', 'S', 'S850', 'RG', 7, 'HJSS850RG000007', 'silver_product_rings', '2025-06-14 19:33:13'),
(503, 'HJ', 'S', 'S850', 'RG', 8, 'HJSS850RG000008', 'silver_product_rings', '2025-06-14 19:33:43'),
(504, 'HJ', 'S', 'S850', 'RG', 9, 'HJSS850RG000009', 'silver_product_rings', '2025-06-14 19:34:52'),
(505, 'HJ', 'S', 'S850', 'RG', 10, 'HJSS850RG000010', 'silver_product_rings', '2025-06-14 19:35:20'),
(506, 'HJ', 'S', 'S850', 'RG', 11, 'HJSS850RG000011', 'silver_product_rings', '2025-06-14 19:35:49'),
(507, 'HJ', 'S', 'S850', 'RG', 12, 'HJSS850RG000012', 'silver_product_rings', '2025-06-14 19:36:16'),
(508, 'HJ', 'S', 'S850', 'RG', 13, 'HJSS850RG000013', 'silver_product_rings', '2025-06-14 19:36:44'),
(509, 'HJ', 'S', 'S850', 'RG', 14, 'HJSS850RG000014', 'silver_product_rings', '2025-06-14 19:37:12'),
(510, 'HJ', 'S', 'S850', 'RG', 15, 'HJSS850RG000015', 'silver_product_rings', '2025-06-14 19:39:59'),
(511, 'HJ', 'S', 'S850', 'RG', 16, 'HJSS850RG000016', 'silver_product_rings', '2025-06-14 19:42:35'),
(512, 'HJ', 'S', 'S850', 'RG', 17, 'HJSS850RG000017', 'silver_product_rings', '2025-06-14 19:47:47'),
(513, 'HJ', 'S', 'S850', 'RG', 18, 'HJSS850RG000018', 'silver_product_rings', '2025-06-14 19:48:32'),
(514, 'HJ', 'S', 'S850', 'RG', 19, 'HJSS850RG000019', 'silver_product_rings', '2025-06-14 19:49:33'),
(515, 'HJ', 'S', 'S850', 'RG', 20, 'HJSS850RG000020', 'silver_product_rings', '2025-06-14 19:50:00'),
(516, 'HJ', 'S', 'S850', 'RG', 21, 'HJSS850RG000021', 'silver_product_rings', '2025-06-14 19:50:33'),
(517, 'HJ', 'S', 'S850', 'RG', 22, 'HJSS850RG000022', 'silver_product_rings', '2025-06-15 08:44:38'),
(518, 'HJ', 'S', 'S850', 'RG', 23, 'HJSS850RG000023', 'silver_product_rings', '2025-06-15 08:46:12'),
(519, 'HJ', 'S', 'S850', 'RG', 24, 'HJSS850RG000024', 'silver_product_rings', '2025-06-15 08:50:07'),
(520, 'HJ', 'S', 'S850', 'RG', 25, 'HJSS850RG000025', 'silver_product_rings', '2025-06-15 08:50:57'),
(521, 'HJ', 'S', 'S850', 'RG', 26, 'HJSS850RG000026', 'silver_product_rings', '2025-06-15 08:51:54'),
(522, 'HJ', 'S', 'S850', 'RG', 27, 'HJSS850RG000027', 'silver_product_rings', '2025-06-15 08:52:39'),
(523, 'HJ', 'S', 'S850', 'RG', 28, 'HJSS850RG000028', 'silver_product_rings', '2025-06-15 08:53:32'),
(524, 'HJ', 'S', 'S850', 'RG', 29, 'HJSS850RG000029', 'silver_product_rings', '2025-06-15 08:54:28'),
(525, 'HJ', 'S', 'S850', 'RG', 30, 'HJSS850RG000030', 'silver_product_rings', '2025-06-15 08:55:23'),
(526, 'HJ', 'S', 'S850', 'RG', 31, 'HJSS850RG000031', 'silver_product_rings', '2025-06-15 09:02:41'),
(527, 'HJ', 'S', 'S850', 'RG', 32, 'HJSS850RG000032', 'silver_product_rings', '2025-06-15 09:03:40'),
(528, 'HJ', 'S', 'S850', 'RG', 33, 'HJSS850RG000033', 'silver_product_rings', '2025-06-15 09:04:34'),
(529, 'HJ', 'S', 'S850', 'RG', 34, 'HJSS850RG000034', 'silver_product_rings', '2025-06-15 09:05:31'),
(530, 'HJ', 'S', 'S850', 'RG', 35, 'HJSS850RG000035', 'silver_product_rings', '2025-06-15 09:06:23'),
(531, 'HJ', 'S', 'S850', 'RG', 36, 'HJSS850RG000036', 'silver_product_rings', '2025-06-15 09:07:13'),
(532, 'HJ', 'S', 'S850', 'RG', 37, 'HJSS850RG000037', 'silver_product_rings', '2025-06-15 09:08:03'),
(533, 'HJ', 'S', 'S850', 'RG', 38, 'HJSS850RG000038', 'silver_product_rings', '2025-06-15 09:09:03'),
(534, 'HJ', 'S', 'S850', 'RG', 39, 'HJSS850RG000039', 'silver_product_rings', '2025-06-15 09:09:51'),
(535, 'HJ', 'S', 'S850', 'RG', 40, 'HJSS850RG000040', 'silver_product_rings', '2025-06-15 09:10:50'),
(536, 'HJ', 'S', 'S850', 'RG', 41, 'HJSS850RG000041', 'silver_product_rings', '2025-06-15 09:11:53'),
(537, 'HJ', 'S', 'S850', 'RG', 42, 'HJSS850RG000042', 'silver_product_rings', '2025-06-15 09:12:44'),
(538, 'HJ', 'S', 'S850', 'RG', 43, 'HJSS850RG000043', 'silver_product_rings', '2025-06-15 09:13:35'),
(539, 'HJ', 'S', 'S850', 'RG', 44, 'HJSS850RG000044', 'silver_product_rings', '2025-06-15 09:14:43'),
(540, 'HJ', 'S', 'S850', 'RG', 45, 'HJSS850RG000045', 'silver_product_rings', '2025-06-15 09:15:52'),
(541, 'HJ', 'S', 'S850', 'RG', 46, 'HJSS850RG000046', 'silver_product_rings', '2025-06-15 09:16:56'),
(542, 'HJ', 'S', 'S850', 'RG', 47, 'HJSS850RG000047', 'silver_product_rings', '2025-06-15 09:17:51'),
(543, 'HJ', 'S', 'S850', 'RG', 48, 'HJSS850RG000048', 'silver_product_rings', '2025-06-15 09:18:46'),
(544, 'HJ', 'S', 'S850', 'RG', 49, 'HJSS850RG000049', 'silver_product_rings', '2025-06-15 09:19:35'),
(545, 'HJ', 'S', 'S850', 'RG', 50, 'HJSS850RG000050', 'silver_product_rings', '2025-06-15 09:20:30'),
(546, 'HJ', 'S', 'S850', 'RG', 51, 'HJSS850RG000051', 'silver_product_rings', '2025-06-15 09:21:14'),
(547, 'HJ', 'S', 'S850', 'RG', 52, 'HJSS850RG000052', 'silver_product_rings', '2025-06-15 09:21:58'),
(548, 'HJ', 'S', 'S850', 'RG', 53, 'HJSS850RG000053', 'silver_product_rings', '2025-06-15 09:22:42'),
(549, 'HJ', 'S', 'S850', 'RG', 54, 'HJSS850RG000054', 'silver_product_rings', '2025-06-15 09:23:32'),
(550, 'HJ', 'S', 'S850', 'RG', 55, 'HJSS850RG000055', 'silver_product_rings', '2025-06-15 09:24:24'),
(551, 'HJ', 'S', 'S850', 'RG', 56, 'HJSS850RG000056', 'silver_product_rings', '2025-06-15 09:25:07'),
(552, 'HJ', 'S', 'S850', 'RG', 57, 'HJSS850RG000057', 'silver_product_rings', '2025-06-15 09:25:54'),
(553, 'HJ', 'S', 'S850', 'RG', 58, 'HJSS850RG000058', 'silver_product_rings', '2025-06-15 09:26:39'),
(554, 'HJ', 'S', 'S850', 'RG', 59, 'HJSS850RG000059', 'silver_product_rings', '2025-06-15 09:27:25'),
(555, 'HJ', 'S', 'S850', 'RG', 60, 'HJSS850RG000060', 'silver_product_rings', '2025-06-15 09:28:08'),
(556, 'HJ', 'S', 'S850', 'RG', 61, 'HJSS850RG000061', 'silver_product_rings', '2025-06-15 09:28:50'),
(557, 'HJ', 'S', 'S850', 'PN', 3, 'HJSS850PN000003', 'silver_product_pendants', '2025-06-15 09:31:45'),
(558, 'HJ', 'S', 'S850', 'PN', 4, 'HJSS850PN000004', 'silver_product_pendants', '2025-06-15 09:33:51'),
(559, 'HJ', 'S', 'S850', 'PN', 5, 'HJSS850PN000005', 'silver_product_pendants', '2025-06-15 09:34:39'),
(560, 'HJ', 'S', 'S850', 'PN', 6, 'HJSS850PN000006', 'silver_product_pendants', '2025-06-15 09:38:03'),
(561, 'HJ', 'S', 'S850', 'PN', 7, 'HJSS850PN000007', 'silver_product_pendants', '2025-06-15 09:39:29'),
(562, 'HJ', 'S', 'S850', 'PN', 8, 'HJSS850PN000008', 'silver_product_pendants', '2025-06-15 09:40:17'),
(563, 'HJ', 'S', 'S850', 'PN', 9, 'HJSS850PN000009', 'silver_product_pendants', '2025-06-15 09:41:01'),
(564, 'HJ', 'S', 'S850', 'PN', 10, 'HJSS850PN000010', 'silver_product_pendants', '2025-06-15 09:44:57'),
(565, 'HJ', 'S', 'S850', 'PN', 11, 'HJSS850PN000011', 'silver_product_pendants', '2025-06-15 09:46:07'),
(566, 'HJ', 'S', 'S850', 'PN', 12, 'HJSS850PN000012', 'silver_product_pendants', '2025-06-15 09:47:19'),
(567, 'HJ', 'S', 'S850', 'PN', 13, 'HJSS850PN000013', 'silver_product_pendants', '2025-06-15 09:48:32'),
(568, 'HJ', 'S', 'S850', 'PN', 14, 'HJSS850PN000014', 'silver_product_pendants', '2025-06-15 09:49:15'),
(569, 'HJ', 'S', 'S850', 'PN', 15, 'HJSS850PN000015', 'silver_product_pendants', '2025-06-15 09:49:56'),
(570, 'HJ', 'S', 'S850', 'PN', 16, 'HJSS850PN000016', 'silver_product_pendants', '2025-06-15 09:50:53'),
(571, 'HJ', 'S', 'S850', 'PN', 17, 'HJSS850PN000017', 'silver_product_pendants', '2025-06-15 09:51:44'),
(572, 'HJ', 'S', 'S850', 'PN', 18, 'HJSS850PN000018', 'silver_product_pendants', '2025-06-15 09:52:29'),
(573, 'HJ', 'S', 'S850', 'PN', 19, 'HJSS850PN000019', 'silver_product_pendants', '2025-06-15 09:53:15'),
(574, 'HJ', 'S', 'S850', 'ER', 3, 'HJSS850ER000003', 'silver_product_earrings', '2025-06-15 09:56:50'),
(575, 'HJ', 'S', 'S850', 'ER', 4, 'HJSS850ER000004', 'silver_product_earrings', '2025-06-15 09:58:03'),
(576, 'HJ', 'S', 'S850', 'ER', 5, 'HJSS850ER000005', 'silver_product_earrings', '2025-06-15 09:58:47'),
(577, 'HJ', 'S', 'S850', 'ER', 6, 'HJSS850ER000006', 'silver_product_earrings', '2025-06-15 09:59:47'),
(578, 'HJ', 'S', 'S850', 'ER', 7, 'HJSS850ER000007', 'silver_product_earrings', '2025-06-15 10:00:44'),
(579, 'HJ', 'S', 'S850', 'ER', 8, 'HJSS850ER000008', 'silver_product_earrings', '2025-06-15 10:01:48'),
(580, 'HJ', 'S', 'S850', 'ER', 9, 'HJSS850ER000009', 'silver_product_earrings', '2025-06-15 10:02:32'),
(581, 'HJ', 'S', 'S850', 'ER', 10, 'HJSS850ER000010', 'silver_product_earrings', '2025-06-15 10:03:19'),
(582, 'HJ', 'S', 'S850', 'ER', 11, 'HJSS850ER000011', 'silver_product_earrings', '2025-06-15 10:04:05'),
(583, 'HJ', 'S', 'S850', 'ER', 12, 'HJSS850ER000012', 'silver_product_earrings', '2025-06-15 10:04:18'),
(584, 'HJ', 'S', 'S850', 'ER', 13, 'HJSS850ER000013', 'silver_product_earrings', '2025-06-15 10:04:55'),
(585, 'HJ', 'S', 'S850', 'ER', 14, 'HJSS850ER000014', 'silver_product_earrings', '2025-06-15 10:05:54'),
(586, 'HJ', 'S', 'S850', 'ER', 15, 'HJSS850ER000015', 'silver_product_earrings', '2025-06-15 10:06:48'),
(587, 'HJ', 'S', 'S850', 'ER', 16, 'HJSS850ER000016', 'silver_product_earrings', '2025-06-15 10:07:46'),
(588, 'HJ', 'S', 'S850', 'ER', 17, 'HJSS850ER000017', 'silver_product_earrings', '2025-06-15 10:08:41'),
(589, 'HJ', 'S', 'S850', 'ER', 18, 'HJSS850ER000018', 'silver_product_earrings', '2025-06-15 10:09:32'),
(590, 'HJ', 'S', 'R925', 'RG', 5, 'HJSR925RG000005', 'rosegold_product_rings', '2025-06-15 10:23:08'),
(591, 'HJ', 'S', 'S850', 'BG', 12, 'HJSS850BG000012', 'silver_product_bangles', '2025-06-15 10:27:58'),
(592, 'HJ', 'S', 'R925', 'BG', 6, 'HJSR925BG000006', 'rosegold_product_bangles', '2025-06-15 10:30:12'),
(593, 'HJ', 'S', 'R925', 'BG', 7, 'HJSR925BG000007', 'rosegold_product_bangles', '2025-06-15 10:32:01'),
(594, 'HJ', 'S', 'R925', 'BG', 8, 'HJSR925BG000008', 'rosegold_product_bangles', '2025-06-15 10:33:06'),
(595, 'HJ', 'S', 'R925', 'BG', 9, 'HJSR925BG000009', 'rosegold_product_bangles', '2025-06-15 10:34:49'),
(596, 'HJ', 'S', 'R925', 'BG', 10, 'HJSR925BG000010', 'rosegold_product_bangles', '2025-06-15 10:36:40'),
(597, 'HJ', 'S', 'R925', 'BG', 11, 'HJSR925BG000011', 'rosegold_product_bangles', '2025-06-15 10:37:49'),
(598, 'HJ', 'S', 'R925', 'BG', 12, 'HJSR925BG000012', 'rosegold_product_bangles', '2025-06-15 10:39:00'),
(599, 'HJ', 'S', 'R925', 'BG', 13, 'HJSR925BG000013', 'rosegold_product_bangles', '2025-06-15 10:40:12'),
(600, 'HJ', 'S', 'R925', 'BG', 14, 'HJSR925BG000014', 'rosegold_product_bangles', '2025-06-15 10:46:06'),
(601, 'HJ', 'S', 'R925', 'BG', 15, 'HJSR925BG000015', 'rosegold_product_bangles', '2025-06-15 10:47:42'),
(602, 'HJ', 'S', 'R925', 'BG', 16, 'HJSR925BG000016', 'rosegold_product_bangles', '2025-06-15 10:49:10'),
(603, 'HJ', 'S', 'R925', 'RG', 6, 'HJSR925RG000006', 'rosegold_product_rings', '2025-06-15 11:02:39'),
(604, 'HJ', 'S', 'R925', 'RG', 7, 'HJSR925RG000007', 'rosegold_product_rings', '2025-06-15 11:15:20'),
(605, 'HJ', 'S', 'R925', 'RG', 8, 'HJSR925RG000008', 'rosegold_product_rings', '2025-06-15 11:15:56'),
(606, 'HJ', 'S', 'R925', 'RG', 9, 'HJSR925RG000009', 'rosegold_product_rings', '2025-06-15 11:16:32'),
(607, 'HJ', 'S', 'R925', 'RG', 10, 'HJSR925RG000010', 'rosegold_product_rings', '2025-06-15 11:17:13'),
(608, 'HJ', 'S', 'R925', 'RG', 11, 'HJSR925RG000011', 'rosegold_product_rings', '2025-06-15 11:17:57'),
(609, 'HJ', 'S', 'R925', 'RG', 12, 'HJSR925RG000012', 'rosegold_product_rings', '2025-06-15 11:18:29'),
(610, 'HJ', 'S', 'R925', 'RG', 13, 'HJSR925RG000013', 'rosegold_product_rings', '2025-06-15 11:19:04'),
(611, 'HJ', 'S', 'R925', 'RG', 14, 'HJSR925RG000014', 'rosegold_product_rings', '2025-06-15 11:19:40'),
(612, 'HJ', 'S', 'R925', 'RG', 15, 'HJSR925RG000015', 'rosegold_product_rings', '2025-06-15 11:20:19'),
(613, 'HJ', 'S', 'R925', 'RG', 16, 'HJSR925RG000016', 'rosegold_product_rings', '2025-06-15 11:20:59'),
(614, 'HJ', 'S', 'R925', 'RG', 17, 'HJSR925RG000017', 'rosegold_product_rings', '2025-06-15 11:21:38'),
(615, 'HJ', 'S', 'R925', 'RG', 18, 'HJSR925RG000018', 'rosegold_product_rings', '2025-06-15 11:22:20'),
(616, 'HJ', 'S', 'R925', 'RG', 19, 'HJSR925RG000019', 'rosegold_product_rings', '2025-06-15 11:22:52'),
(617, 'HJ', 'S', 'R925', 'RG', 20, 'HJSR925RG000020', 'rosegold_product_rings', '2025-06-15 11:23:31'),
(618, 'HJ', 'S', 'R925', 'RG', 21, 'HJSR925RG000021', 'rosegold_product_rings', '2025-06-15 11:24:09'),
(619, 'HJ', 'S', 'R925', 'RG', 22, 'HJSR925RG000022', 'rosegold_product_rings', '2025-06-15 11:24:46'),
(620, 'HJ', 'S', 'R925', 'RG', 23, 'HJSR925RG000023', 'rosegold_product_rings', '2025-06-15 11:25:23'),
(621, 'HJ', 'S', 'R925', 'RG', 24, 'HJSR925RG000024', 'rosegold_product_rings', '2025-06-15 11:26:04'),
(622, 'HJ', 'S', 'R925', 'RG', 25, 'HJSR925RG000025', 'rosegold_product_rings', '2025-06-15 11:26:43'),
(623, 'HJ', 'S', 'R925', 'RG', 26, 'HJSR925RG000026', 'rosegold_product_rings', '2025-06-15 11:27:32'),
(624, 'HJ', 'S', 'R925', 'RG', 27, 'HJSR925RG000027', 'rosegold_product_rings', '2025-06-15 11:28:07'),
(625, 'HJ', 'S', 'R925', 'RG', 28, 'HJSR925RG000028', 'rosegold_product_rings', '2025-06-15 11:28:40'),
(626, 'HJ', 'S', 'R925', 'RG', 29, 'HJSR925RG000029', 'rosegold_product_rings', '2025-06-15 11:29:23'),
(627, 'HJ', 'S', 'R925', 'RG', 30, 'HJSR925RG000030', 'rosegold_product_rings', '2025-06-15 11:30:10'),
(628, 'HJ', 'S', 'R925', 'RG', 31, 'HJSR925RG000031', 'rosegold_product_rings', '2025-06-15 11:30:52'),
(629, 'HJ', 'S', 'R925', 'RG', 32, 'HJSR925RG000032', 'rosegold_product_rings', '2025-06-15 11:31:35'),
(630, 'HJ', 'S', 'R925', 'RG', 33, 'HJSR925RG000033', 'rosegold_product_rings', '2025-06-15 11:32:25'),
(631, 'HJ', 'S', 'R925', 'RG', 34, 'HJSR925RG000034', 'rosegold_product_rings', '2025-06-15 11:33:40'),
(632, 'HJ', 'S', 'R925', 'RG', 35, 'HJSR925RG000035', 'rosegold_product_rings', '2025-06-15 11:34:18'),
(633, 'HJ', 'S', 'R925', 'RG', 36, 'HJSR925RG000036', 'rosegold_product_rings', '2025-06-15 11:34:57'),
(634, 'HJ', 'S', 'R925', 'RG', 37, 'HJSR925RG000037', 'rosegold_product_rings', '2025-06-15 11:35:40'),
(635, 'HJ', 'G', 'G22K', 'RG', 24, 'HJGG22KRG000024', '22kgold_product_rings', '2025-06-16 07:00:52'),
(636, 'HJ', 'G', 'G22K', 'RG', 25, 'HJGG22KRG000025', '22kgold_product_rings', '2025-06-16 07:01:52'),
(637, 'HJ', 'G', 'G22K', 'RG', 26, 'HJGG22KRG000026', '22kgold_product_rings', '2025-06-16 07:02:42'),
(638, 'HJ', 'G', 'G22K', 'RG', 27, 'HJGG22KRG000027', '22kgold_product_rings', '2025-06-16 07:03:23'),
(639, 'HJ', 'G', 'G22K', 'RG', 28, 'HJGG22KRG000028', '22kgold_product_rings', '2025-06-16 07:04:08'),
(640, 'HJ', 'G', 'G22K', 'RG', 29, 'HJGG22KRG000029', '22kgold_product_rings', '2025-06-16 07:05:27'),
(641, 'HJ', 'G', 'G22K', 'RG', 30, 'HJGG22KRG000030', '22kgold_product_rings', '2025-06-16 07:06:09'),
(642, 'HJ', 'G', 'G22K', 'RG', 31, 'HJGG22KRG000031', '22kgold_product_rings', '2025-06-16 07:13:32'),
(643, 'HJ', 'G', 'G22K', 'RG', 32, 'HJGG22KRG000032', '22kgold_product_rings', '2025-06-16 07:14:30'),
(644, 'HJ', 'G', 'G22K', 'RG', 33, 'HJGG22KRG000033', '22kgold_product_rings', '2025-06-16 07:15:22'),
(645, 'HJ', 'G', 'G22K', 'RG', 34, 'HJGG22KRG000034', '22kgold_product_rings', '2025-06-16 07:16:14'),
(646, 'HJ', 'G', 'G22K', 'RG', 35, 'HJGG22KRG000035', '22kgold_product_rings', '2025-06-16 07:17:12'),
(647, 'HJ', 'G', 'G22K', 'RG', 36, 'HJGG22KRG000036', '22kgold_product_rings', '2025-06-16 07:18:03'),
(648, 'HJ', 'G', 'G22K', 'RG', 37, 'HJGG22KRG000037', '22kgold_product_rings', '2025-06-16 07:18:56'),
(649, 'HJ', 'G', 'G22K', 'RG', 38, 'HJGG22KRG000038', '22kgold_product_rings', '2025-06-16 07:19:57'),
(650, 'HJ', 'G', 'G22K', 'RG', 39, 'HJGG22KRG000039', '22kgold_product_rings', '2025-06-16 07:21:02'),
(651, 'HJ', 'G', 'G22K', 'RG', 40, 'HJGG22KRG000040', '22kgold_product_rings', '2025-06-16 07:22:06'),
(652, 'HJ', 'G', 'G22K', 'RG', 41, 'HJGG22KRG000041', '22kgold_product_rings', '2025-06-16 07:23:55'),
(653, 'HJ', 'G', 'G22K', 'RG', 42, 'HJGG22KRG000042', '22kgold_product_rings', '2025-06-16 07:25:46'),
(654, 'HJ', 'G', 'G22K', 'RG', 43, 'HJGG22KRG000043', '22kgold_product_rings', '2025-06-16 07:26:27'),
(655, 'HJ', 'G', 'G22K', 'RG', 44, 'HJGG22KRG000044', '22kgold_product_rings', '2025-06-16 07:27:07'),
(656, 'HJ', 'G', 'G22K', 'RG', 45, 'HJGG22KRG000045', '22kgold_product_rings', '2025-06-16 07:28:00'),
(657, 'HJ', 'G', 'G22K', 'RG', 46, 'HJGG22KRG000046', '22kgold_product_rings', '2025-06-16 07:28:53'),
(658, 'HJ', 'G', 'G22K', 'RG', 47, 'HJGG22KRG000047', '22kgold_product_rings', '2025-06-16 07:30:32'),
(659, 'HJ', 'G', 'G22K', 'RG', 48, 'HJGG22KRG000048', '22kgold_product_rings', '2025-06-16 07:31:33'),
(660, 'HJ', 'G', 'G22K', 'RG', 49, 'HJGG22KRG000049', '22kgold_product_rings', '2025-06-16 07:32:44'),
(661, 'HJ', 'G', 'G22K', 'RG', 50, 'HJGG22KRG000050', '22kgold_product_rings', '2025-06-16 07:35:19'),
(662, 'HJ', 'G', 'G22K', 'RG', 51, 'HJGG22KRG000051', '22kgold_product_rings', '2025-06-16 07:36:04'),
(663, 'HJ', 'G', 'G22K', 'RG', 52, 'HJGG22KRG000052', '22kgold_product_rings', '2025-06-16 07:36:48'),
(664, 'HJ', 'G', 'G22K', 'RG', 53, 'HJGG22KRG000053', '22kgold_product_rings', '2025-06-16 07:37:28'),
(665, 'HJ', 'G', 'G22K', 'RG', 54, 'HJGG22KRG000054', '22kgold_product_rings', '2025-06-16 07:38:17'),
(666, 'HJ', 'G', 'G22K', 'CH', 7, 'HJGG22KCH000007', '22kgold_product_chains', '2025-06-16 07:47:24'),
(667, 'HJ', 'G', 'G22K', 'CH', 8, 'HJGG22KCH000008', '22kgold_product_chains', '2025-06-16 07:48:44'),
(668, 'HJ', 'G', 'G22K', 'CH', 9, 'HJGG22KCH000009', '22kgold_product_chains', '2025-06-16 07:50:07'),
(669, 'HJ', 'G', 'G22K', 'CH', 10, 'HJGG22KCH000010', '22kgold_product_chains', '2025-06-16 07:50:53'),
(670, 'HJ', 'G', 'G22K', 'CH', 11, 'HJGG22KCH000011', '22kgold_product_chains', '2025-06-16 07:51:45'),
(671, 'HJ', 'G', 'G22K', 'RG', 55, 'HJGG22KRG000055', '22kgold_product_rings', '2025-06-16 07:55:22'),
(672, 'HJ', 'G', 'G22K', 'RG', 56, 'HJGG22KRG000056', '22kgold_product_rings', '2025-06-16 07:56:29'),
(673, 'HJ', 'G', 'G22K', 'RG', 57, 'HJGG22KRG000057', '22kgold_product_rings', '2025-06-16 07:57:16'),
(674, 'HJ', 'G', 'G22K', 'RG', 58, 'HJGG22KRG000058', '22kgold_product_rings', '2025-06-16 07:58:15'),
(675, 'HJ', 'G', 'G22K', 'RG', 59, 'HJGG22KRG000059', '22kgold_product_rings', '2025-06-16 07:59:02'),
(676, 'HJ', 'G', 'G22K', 'RG', 60, 'HJGG22KRG000060', '22kgold_product_rings', '2025-06-16 07:59:46'),
(677, 'HJ', 'G', 'G22K', 'SD', 1, 'HJGG22KSD000001', '22kgold_product_studs', '2025-06-16 08:07:12'),
(678, 'HJ', 'G', 'G22K', 'SD', 2, 'HJGG22KSD000002', '22kgold_product_studs', '2025-06-16 08:08:22'),
(679, 'HJ', 'G', 'G22K', 'SD', 3, 'HJGG22KSD000003', '22kgold_product_studs', '2025-06-16 08:09:16'),
(680, 'HJ', 'G', 'G22K', 'SD', 4, 'HJGG22KSD000004', '22kgold_product_studs', '2025-06-16 08:10:05'),
(681, 'HJ', 'G', 'G22K', 'SD', 5, 'HJGG22KSD000005', '22kgold_product_studs', '2025-06-16 08:17:33'),
(682, 'HJ', 'G', 'G22K', 'SD', 6, 'HJGG22KSD000006', '22kgold_product_studs', '2025-06-16 08:18:23'),
(683, 'HJ', 'G', 'G22K', 'FC', 54, 'HJGG22KFC000054', '22kgold_product_fancychains', '2025-06-16 10:09:40'),
(684, 'HJ', 'G', 'G22K', 'FC', 55, 'HJGG22KFC000055', '22kgold_product_fancychains', '2025-06-16 10:13:39'),
(685, 'HJ', 'G', 'G22K', 'FC', 56, 'HJGG22KFC000056', '22kgold_product_fancychains', '2025-06-16 10:14:24'),
(686, 'HJ', 'G', 'G22K', 'FC', 57, 'HJGG22KFC000057', '22kgold_product_fancychains', '2025-06-16 10:15:05'),
(687, 'HJ', 'G', 'G22K', 'FC', 58, 'HJGG22KFC000058', '22kgold_product_fancychains', '2025-06-16 10:15:44'),
(688, 'HJ', 'G', 'G22K', 'FC', 59, 'HJGG22KFC000059', '22kgold_product_fancychains', '2025-06-16 10:16:29'),
(689, 'HJ', 'G', 'G22K', 'FC', 60, 'HJGG22KFC000060', '22kgold_product_fancychains', '2025-06-16 10:17:11'),
(690, 'HJ', 'G', 'G22K', 'FC', 61, 'HJGG22KFC000061', '22kgold_product_fancychains', '2025-06-16 10:17:55'),
(691, 'HJ', 'G', 'G22K', 'FC', 62, 'HJGG22KFC000062', '22kgold_product_fancychains', '2025-06-16 10:18:40'),
(692, 'HJ', 'G', 'G22K', 'FC', 63, 'HJGG22KFC000063', '22kgold_product_fancychains', '2025-06-16 10:19:18'),
(693, 'HJ', 'G', 'G22K', 'FC', 64, 'HJGG22KFC000064', '22kgold_product_fancychains', '2025-06-16 10:19:56'),
(694, 'HJ', 'G', 'G22K', 'FC', 65, 'HJGG22KFC000065', '22kgold_product_fancychains', '2025-06-16 10:20:44'),
(695, 'HJ', 'G', 'G22K', 'FC', 66, 'HJGG22KFC000066', '22kgold_product_fancychains', '2025-06-16 10:21:37'),
(696, 'HJ', 'G', 'G22K', 'FC', 67, 'HJGG22KFC000067', '22kgold_product_fancychains', '2025-06-16 10:22:54'),
(697, 'HJ', 'G', 'G22K', 'FC', 68, 'HJGG22KFC000068', '22kgold_product_fancychains', '2025-06-16 10:23:52'),
(698, 'HJ', 'G', 'G22K', 'FC', 69, 'HJGG22KFC000069', '22kgold_product_fancychains', '2025-06-16 10:24:32'),
(699, 'HJ', 'G', 'G22K', 'FC', 70, 'HJGG22KFC000070', '22kgold_product_fancychains', '2025-06-16 10:25:15'),
(700, 'HJ', 'G', 'G22K', 'FC', 71, 'HJGG22KFC000071', '22kgold_product_fancychains', '2025-06-16 10:25:54'),
(701, 'HJ', 'G', 'G22K', 'FC', 72, 'HJGG22KFC000072', '22kgold_product_fancychains', '2025-06-16 10:26:34'),
(702, 'HJ', 'G', 'G22K', 'FC', 73, 'HJGG22KFC000073', '22kgold_product_fancychains', '2025-06-16 10:27:25'),
(703, 'HJ', 'G', 'G22K', 'FC', 74, 'HJGG22KFC000074', '22kgold_product_fancychains', '2025-06-16 10:28:35'),
(704, 'HJ', 'G', 'G22K', 'FC', 75, 'HJGG22KFC000075', '22kgold_product_fancychains', '2025-06-16 10:29:16'),
(705, 'HJ', 'G', 'G22K', 'FC', 76, 'HJGG22KFC000076', '22kgold_product_fancychains', '2025-06-16 10:29:51'),
(706, 'HJ', 'G', 'G22K', 'FC', 77, 'HJGG22KFC000077', '22kgold_product_fancychains', '2025-06-16 10:30:30'),
(707, 'HJ', 'G', 'G22K', 'FC', 78, 'HJGG22KFC000078', '22kgold_product_fancychains', '2025-06-16 10:31:15'),
(708, 'HJ', 'G', 'G22K', 'FC', 79, 'HJGG22KFC000079', '22kgold_product_fancychains', '2025-06-16 10:31:58'),
(709, 'HJ', 'G', 'G22K', 'FC', 80, 'HJGG22KFC000080', '22kgold_product_fancychains', '2025-06-16 10:32:34'),
(710, 'HJ', 'G', 'G22K', 'FC', 81, 'HJGG22KFC000081', '22kgold_product_fancychains', '2025-06-16 10:33:07'),
(711, 'HJ', 'G', 'G22K', 'FC', 82, 'HJGG22KFC000082', '22kgold_product_fancychains', '2025-06-16 10:33:48'),
(712, 'HJ', 'G', 'G22K', 'FC', 83, 'HJGG22KFC000083', '22kgold_product_fancychains', '2025-06-16 10:34:30'),
(713, 'HJ', 'G', 'G22K', 'FC', 84, 'HJGG22KFC000084', '22kgold_product_fancychains', '2025-06-16 10:36:32'),
(714, 'HJ', 'G', 'G22K', 'FC', 85, 'HJGG22KFC000085', '22kgold_product_fancychains', '2025-06-16 10:37:15'),
(715, 'HJ', 'G', 'G22K', 'FC', 86, 'HJGG22KFC000086', '22kgold_product_fancychains', '2025-06-16 10:37:56'),
(716, 'HJ', 'G', 'G22K', 'FC', 87, 'HJGG22KFC000087', '22kgold_product_fancychains', '2025-06-16 10:38:39'),
(717, 'HJ', 'G', 'G22K', 'FC', 88, 'HJGG22KFC000088', '22kgold_product_fancychains', '2025-06-16 10:39:18'),
(718, 'HJ', 'G', 'G22K', 'FC', 89, 'HJGG22KFC000089', '22kgold_product_fancychains', '2025-06-16 10:40:02'),
(719, 'HJ', 'G', 'G22K', 'FC', 90, 'HJGG22KFC000090', '22kgold_product_fancychains', '2025-06-16 10:40:43'),
(720, 'HJ', 'G', 'G22K', 'FC', 91, 'HJGG22KFC000091', '22kgold_product_fancychains', '2025-06-16 10:41:24'),
(721, 'HJ', 'G', 'G22K', 'FC', 92, 'HJGG22KFC000092', '22kgold_product_fancychains', '2025-06-16 10:42:04'),
(722, 'HJ', 'G', 'G22K', 'FC', 93, 'HJGG22KFC000093', '22kgold_product_fancychains', '2025-06-16 10:42:42'),
(723, 'HJ', 'G', 'G22K', 'FC', 94, 'HJGG22KFC000094', '22kgold_product_fancychains', '2025-06-16 10:43:18'),
(724, 'HJ', 'G', 'G22K', 'FC', 95, 'HJGG22KFC000095', '22kgold_product_fancychains', '2025-06-16 10:44:13'),
(725, 'HJ', 'G', 'G22K', 'FC', 96, 'HJGG22KFC000096', '22kgold_product_fancychains', '2025-06-16 10:44:52'),
(726, 'HJ', 'G', 'G22K', 'FC', 97, 'HJGG22KFC000097', '22kgold_product_fancychains', '2025-06-16 10:45:40'),
(727, 'HJ', 'G', 'G22K', 'FC', 98, 'HJGG22KFC000098', '22kgold_product_fancychains', '2025-06-16 10:46:35'),
(728, 'HJ', 'G', 'G22K', 'FC', 99, 'HJGG22KFC000099', '22kgold_product_fancychains', '2025-06-16 10:47:19'),
(729, 'HJ', 'G', 'G22K', 'FC', 100, 'HJGG22KFC000100', '22kgold_product_fancychains', '2025-06-16 10:48:02'),
(730, 'HJ', 'G', 'G22K', 'FC', 101, 'HJGG22KFC000101', '22kgold_product_fancychains', '2025-06-16 10:48:50'),
(731, 'HJ', 'G', 'G22K', 'FC', 102, 'HJGG22KFC000102', '22kgold_product_fancychains', '2025-06-16 10:49:44'),
(732, 'HJ', 'G', 'G22K', 'FC', 103, 'HJGG22KFC000103', '22kgold_product_fancychains', '2025-06-16 10:50:30'),
(733, 'HJ', 'G', 'G22K', 'FC', 104, 'HJGG22KFC000104', '22kgold_product_fancychains', '2025-06-16 10:51:21'),
(734, 'HJ', 'G', 'G22K', 'FC', 105, 'HJGG22KFC000105', '22kgold_product_fancychains', '2025-06-16 10:52:11'),
(735, 'HJ', 'G', 'G22K', 'FC', 106, 'HJGG22KFC000106', '22kgold_product_fancychains', '2025-06-16 10:52:57'),
(736, 'HJ', 'G', 'G22K', 'FC', 107, 'HJGG22KFC000107', '22kgold_product_fancychains', '2025-06-16 10:53:37'),
(737, 'HJ', 'G', 'G22K', 'FC', 108, 'HJGG22KFC000108', '22kgold_product_fancychains', '2025-06-16 10:54:22'),
(738, 'HJ', 'G', 'G22K', 'FC', 109, 'HJGG22KFC000109', '22kgold_product_fancychains', '2025-06-16 10:55:19'),
(739, 'HJ', 'G', 'G22K', 'FC', 110, 'HJGG22KFC000110', '22kgold_product_fancychains', '2025-06-16 10:56:00'),
(740, 'HJ', 'G', 'G22K', 'FC', 111, 'HJGG22KFC000111', '22kgold_product_fancychains', '2025-06-16 10:57:26'),
(741, 'HJ', 'G', 'G22K', 'FC', 112, 'HJGG22KFC000112', '22kgold_product_fancychains', '2025-06-16 10:58:12'),
(742, 'HJ', 'G', 'G22K', 'FC', 113, 'HJGG22KFC000113', '22kgold_product_fancychains', '2025-06-16 10:58:58'),
(743, 'HJ', 'G', 'G22K', 'FC', 114, 'HJGG22KFC000114', '22kgold_product_fancychains', '2025-06-16 10:59:50'),
(744, 'HJ', 'G', 'G22K', 'FC', 115, 'HJGG22KFC000115', '22kgold_product_fancychains', '2025-06-16 11:00:42'),
(745, 'HJ', 'G', 'G22K', 'FC', 116, 'HJGG22KFC000116', '22kgold_product_fancychains', '2025-06-16 11:01:50'),
(746, 'HJ', 'G', 'G22K', 'FC', 117, 'HJGG22KFC000117', '22kgold_product_fancychains', '2025-06-16 11:05:22'),
(747, 'HJ', 'G', 'G22K', 'FC', 118, 'HJGG22KFC000118', '22kgold_product_fancychains', '2025-06-16 11:06:00'),
(748, 'HJ', 'G', 'G22K', 'FC', 119, 'HJGG22KFC000119', '22kgold_product_fancychains', '2025-06-16 11:06:39'),
(749, 'HJ', 'G', 'G22K', 'FC', 120, 'HJGG22KFC000120', '22kgold_product_fancychains', '2025-06-16 11:07:17'),
(750, 'HJ', 'G', 'G22K', 'FC', 121, 'HJGG22KFC000121', '22kgold_product_fancychains', '2025-06-16 11:07:50'),
(751, 'HJ', 'G', 'G22K', 'FC', 122, 'HJGG22KFC000122', '22kgold_product_fancychains', '2025-06-16 11:08:36'),
(752, 'HJ', 'G', 'G22K', 'FC', 123, 'HJGG22KFC000123', '22kgold_product_fancychains', '2025-06-16 11:09:24'),
(753, 'HJ', 'G', 'G22K', 'FC', 124, 'HJGG22KFC000124', '22kgold_product_fancychains', '2025-06-16 11:10:23'),
(754, 'HJ', 'G', 'G22K', 'FC', 125, 'HJGG22KFC000125', '22kgold_product_fancychains', '2025-06-16 11:11:27'),
(755, 'HJ', 'G', 'G22K', 'FC', 126, 'HJGG22KFC000126', '22kgold_product_fancychains', '2025-06-16 11:12:19'),
(756, 'HJ', 'G', 'G22K', 'FC', 127, 'HJGG22KFC000127', '22kgold_product_fancychains', '2025-06-16 11:13:01'),
(757, 'HJ', 'G', 'G22K', 'FC', 128, 'HJGG22KFC000128', '22kgold_product_fancychains', '2025-06-16 11:13:46'),
(758, 'HJ', 'G', 'G22K', 'FC', 129, 'HJGG22KFC000129', '22kgold_product_fancychains', '2025-06-16 11:14:28'),
(759, 'HJ', 'G', 'G22K', 'FC', 130, 'HJGG22KFC000130', '22kgold_product_fancychains', '2025-06-16 11:15:16'),
(760, 'HJ', 'G', 'G22K', 'FC', 131, 'HJGG22KFC000131', '22kgold_product_fancychains', '2025-06-16 11:20:25'),
(761, 'HJ', 'G', 'G22K', 'FC', 132, 'HJGG22KFC000132', '22kgold_product_fancychains', '2025-06-16 11:21:44'),
(762, 'HJ', 'G', 'G22K', 'FC', 133, 'HJGG22KFC000133', '22kgold_product_fancychains', '2025-06-16 11:23:45'),
(763, 'HJ', 'G', 'G22K', 'FC', 134, 'HJGG22KFC000134', '22kgold_product_fancychains', '2025-06-16 11:24:33'),
(764, 'HJ', 'G', 'G22K', 'FC', 135, 'HJGG22KFC000135', '22kgold_product_fancychains', '2025-06-16 11:25:21'),
(765, 'HJ', 'G', 'G22K', 'FC', 136, 'HJGG22KFC000136', '22kgold_product_fancychains', '2025-06-16 11:26:11'),
(766, 'HJ', 'G', 'G22K', 'FC', 137, 'HJGG22KFC000137', '22kgold_product_fancychains', '2025-06-16 11:26:58'),
(767, 'HJ', 'G', 'G22K', 'FC', 138, 'HJGG22KFC000138', '22kgold_product_fancychains', '2025-06-16 11:27:35'),
(768, 'HJ', 'G', 'G22K', 'FC', 139, 'HJGG22KFC000139', '22kgold_product_fancychains', '2025-06-16 11:28:14'),
(769, 'HJ', 'G', 'G22K', 'FC', 140, 'HJGG22KFC000140', '22kgold_product_fancychains', '2025-06-16 11:28:50'),
(770, 'HJ', 'G', 'G22K', 'FC', 141, 'HJGG22KFC000141', '22kgold_product_fancychains', '2025-06-16 11:29:56'),
(771, 'HJ', 'G', 'G22K', 'FC', 142, 'HJGG22KFC000142', '22kgold_product_fancychains', '2025-06-16 11:30:38'),
(772, 'HJ', 'G', 'G22K', 'FC', 143, 'HJGG22KFC000143', '22kgold_product_fancychains', '2025-06-16 11:31:23'),
(773, 'HJ', 'G', 'G22K', 'FC', 144, 'HJGG22KFC000144', '22kgold_product_fancychains', '2025-06-16 11:32:07'),
(774, 'HJ', 'G', 'G22K', 'FC', 145, 'HJGG22KFC000145', '22kgold_product_fancychains', '2025-06-16 11:32:53'),
(775, 'HJ', 'G', 'G22K', 'FC', 146, 'HJGG22KFC000146', '22kgold_product_fancychains', '2025-06-16 11:33:36'),
(776, 'HJ', 'G', 'G22K', 'FC', 147, 'HJGG22KFC000147', '22kgold_product_fancychains', '2025-06-16 11:34:21'),
(777, 'HJ', 'G', 'G22K', 'FC', 148, 'HJGG22KFC000148', '22kgold_product_fancychains', '2025-06-16 11:35:13'),
(778, 'HJ', 'G', 'G22K', 'FC', 149, 'HJGG22KFC000149', '22kgold_product_fancychains', '2025-06-16 11:35:54'),
(779, 'HJ', 'G', 'G22K', 'FC', 150, 'HJGG22KFC000150', '22kgold_product_fancychains', '2025-06-16 11:36:43'),
(780, 'HJ', 'G', 'G22K', 'FC', 151, 'HJGG22KFC000151', '22kgold_product_fancychains', '2025-06-16 11:37:24'),
(781, 'HJ', 'G', 'G22K', 'FC', 152, 'HJGG22KFC000152', '22kgold_product_fancychains', '2025-06-16 11:38:13'),
(782, 'HJ', 'G', 'G22K', 'FC', 153, 'HJGG22KFC000153', '22kgold_product_fancychains', '2025-06-16 11:38:53'),
(783, 'HJ', 'G', 'G22K', 'FC', 154, 'HJGG22KFC000154', '22kgold_product_fancychains', '2025-06-17 08:59:29'),
(784, 'HJ', 'G', 'G22K', 'FC', 155, 'HJGG22KFC000155', '22kgold_product_fancychains', '2025-06-17 09:00:55'),
(785, 'HJ', 'G', 'G22K', 'FC', 156, 'HJGG22KFC000156', '22kgold_product_fancychains', '2025-06-17 09:04:58'),
(786, 'HJ', 'G', 'G22K', 'FC', 157, 'HJGG22KFC000157', '22kgold_product_fancychains', '2025-06-17 09:06:10'),
(787, 'HJ', 'G', 'G22K', 'NK', 3, 'HJGG22KNK000003', '22kgold_product_necklaces', '2025-06-17 09:18:37'),
(788, 'HJ', 'G', 'G22K', 'NK', 4, 'HJGG22KNK000004', '22kgold_product_necklaces', '2025-06-17 09:20:01'),
(789, 'HJ', 'G', 'G22K', 'NK', 5, 'HJGG22KNK000005', '22kgold_product_necklaces', '2025-06-17 09:20:59'),
(790, 'HJ', 'G', 'G22K', 'NK', 6, 'HJGG22KNK000006', '22kgold_product_necklaces', '2025-06-17 09:23:14'),
(791, 'HJ', 'G', 'G22K', 'NK', 7, 'HJGG22KNK000007', '22kgold_product_necklaces', '2025-06-17 09:23:59'),
(792, 'HJ', 'G', 'G22K', 'NK', 8, 'HJGG22KNK000008', '22kgold_product_necklaces', '2025-06-17 09:24:51'),
(793, 'HJ', 'G', 'G22K', 'NK', 9, 'HJGG22KNK000009', '22kgold_product_necklaces', '2025-06-17 09:25:30'),
(794, 'HJ', 'G', 'G22K', 'NK', 10, 'HJGG22KNK000010', '22kgold_product_necklaces', '2025-06-17 09:26:15'),
(795, 'HJ', 'G', 'G22K', 'NK', 11, 'HJGG22KNK000011', '22kgold_product_necklaces', '2025-06-17 09:27:00'),
(796, 'HJ', 'G', 'G22K', 'NK', 12, 'HJGG22KNK000012', '22kgold_product_necklaces', '2025-06-17 09:27:45'),
(797, 'HJ', 'G', 'G22K', 'NK', 13, 'HJGG22KNK000013', '22kgold_product_necklaces', '2025-06-17 09:28:30'),
(798, 'HJ', 'G', 'G22K', 'NK', 14, 'HJGG22KNK000014', '22kgold_product_necklaces', '2025-06-17 09:29:15'),
(799, 'HJ', 'G', 'G22K', 'NK', 15, 'HJGG22KNK000015', '22kgold_product_necklaces', '2025-06-17 09:30:00'),
(800, 'HJ', 'G', 'G22K', 'NK', 16, 'HJGG22KNK000016', '22kgold_product_necklaces', '2025-06-17 09:30:45'),
(801, 'HJ', 'G', 'G22K', 'NK', 17, 'HJGG22KNK000017', '22kgold_product_necklaces', '2025-06-17 09:31:30'),
(802, 'HJ', 'G', 'G22K', 'NK', 18, 'HJGG22KNK000018', '22kgold_product_necklaces', '2025-06-17 09:32:15'),
(803, 'HJ', 'G', 'G22K', 'NK', 19, 'HJGG22KNK000019', '22kgold_product_necklaces', '2025-06-17 09:33:00'),
(804, 'HJ', 'G', 'G22K', 'NK', 20, 'HJGG22KNK000020', '22kgold_product_necklaces', '2025-06-17 09:33:45'),
(805, 'HJ', 'G', 'G22K', 'NK', 21, 'HJGG22KNK000021', '22kgold_product_necklaces', '2025-06-17 09:34:30'),
(806, 'HJ', 'G', 'G22K', 'NK', 22, 'HJGG22KNK000022', '22kgold_product_necklaces', '2025-06-17 09:35:15'),
(807, 'HJ', 'G', 'G22K', 'NK', 23, 'HJGG22KNK000023', '22kgold_product_necklaces', '2025-06-17 09:36:00'),
(808, 'HJ', 'G', 'G22K', 'NK', 24, 'HJGG22KNK000024', '22kgold_product_necklaces', '2025-06-17 09:36:45'),
(809, 'HJ', 'G', 'G22K', 'NK', 25, 'HJGG22KNK000025', '22kgold_product_necklaces', '2025-06-17 09:37:30'),
(810, 'HJ', 'G', 'G22K', 'NK', 26, 'HJGG22KNK000026', '22kgold_product_necklaces', '2025-06-17 09:38:15'),
(811, 'HJ', 'G', 'G22K', 'NK', 27, 'HJGG22KNK000027', '22kgold_product_necklaces', '2025-06-17 09:39:00'),
(812, 'HJ', 'G', 'G22K', 'NK', 28, 'HJGG22KNK000028', '22kgold_product_necklaces', '2025-06-17 09:39:45'),
(813, 'HJ', 'G', 'G22K', 'NK', 29, 'HJGG22KNK000029', '22kgold_product_necklaces', '2025-06-17 09:40:30'),
(814, 'HJ', 'G', 'G22K', 'NK', 30, 'HJGG22KNK000030', '22kgold_product_necklaces', '2025-06-17 09:41:15'),
(815, 'HJ', 'G', 'G22K', 'NK', 31, 'HJGG22KNK000031', '22kgold_product_necklaces', '2025-06-17 09:42:00'),
(816, 'HJ', 'G', 'G22K', 'NK', 32, 'HJGG22KNK000032', '22kgold_product_necklaces', '2025-06-17 09:42:45'),
(817, 'HJ', 'G', 'G22K', 'NK', 33, 'HJGG22KNK000033', '22kgold_product_necklaces', '2025-06-17 09:43:30'),
(818, 'HJ', 'G', 'G22K', 'NK', 34, 'HJGG22KNK000034', '22kgold_product_necklaces', '2025-06-17 09:44:15'),
(819, 'HJ', 'G', 'G22K', 'NK', 35, 'HJGG22KNK000035', '22kgold_product_necklaces', '2025-06-17 09:45:00'),
(820, 'HJ', 'G', 'G22K', 'NK', 36, 'HJGG22KNK000036', '22kgold_product_necklaces', '2025-06-17 09:45:45'),
(821, 'HJ', 'G', 'G22K', 'NK', 37, 'HJGG22KNK000037', '22kgold_product_necklaces', '2025-06-17 09:46:30'),
(822, 'HJ', 'G', 'G22K', 'NK', 38, 'HJGG22KNK000038', '22kgold_product_necklaces', '2025-06-17 09:47:15'),
(823, 'HJ', 'G', 'G22K', 'NK', 39, 'HJGG22KNK000039', '22kgold_product_necklaces', '2025-06-17 09:48:00'),
(824, 'HJ', 'G', 'G22K', 'NK', 40, 'HJGG22KNK000040', '22kgold_product_necklaces', '2025-06-17 09:48:45'),
(825, 'HJ', 'G', 'G22K', 'NK', 41, 'HJGG22KNK000041', '22kgold_product_necklaces', '2025-06-17 09:49:30'),
(826, 'HJ', 'G', 'G22K', 'NK', 42, 'HJGG22KNK000042', '22kgold_product_necklaces', '2025-06-17 09:50:15'),
(827, 'HJ', 'G', 'G22K', 'NK', 43, 'HJGG22KNK000043', '22kgold_product_necklaces', '2025-06-17 09:51:00'),
(828, 'HJ', 'G', 'G22K', 'NK', 44, 'HJGG22KNK000044', '22kgold_product_necklaces', '2025-06-19 03:26:30'),
(829, 'HJ', 'G', 'G22K', 'NK', 45, 'HJGG22KNK000045', '22kgold_product_necklaces', '2025-06-19 03:27:39'),
(830, 'HJ', 'G', 'G22K', 'NK', 46, 'HJGG22KNK000046', '22kgold_product_necklaces', '2025-06-19 03:28:20'),
(831, 'HJ', 'G', 'G22K', 'NK', 47, 'HJGG22KNK000047', '22kgold_product_necklaces', '2025-06-19 03:29:06'),
(832, 'HJ', 'G', 'G22K', 'NK', 48, 'HJGG22KNK000048', '22kgold_product_necklaces', '2025-06-19 03:29:36'),
(833, 'HJ', 'G', 'G22K', 'NK', 49, 'HJGG22KNK000049', '22kgold_product_necklaces', '2025-06-19 03:30:35'),
(834, 'HJ', 'G', 'G22K', 'NK', 50, 'HJGG22KNK000050', '22kgold_product_necklaces', '2025-06-19 03:31:14'),
(835, 'HJ', 'G', 'G22K', 'NK', 51, 'HJGG22KNK000051', '22kgold_product_necklaces', '2025-06-19 03:31:38'),
(836, 'HJ', 'S', 'R925', 'NK', 30, 'HJSR925NK000030', 'rosegold_product_necklaces', '2025-06-25 13:16:28'),
(837, 'HJ', 'G', 'G18D', 'NK', 1, 'HJGG18DNK000001', '18kdgold_product_necklaces', '2025-06-28 17:13:35'),
(838, 'HJ', 'G', 'G18D', 'NK', 2, 'HJGG18DNK000002', '18kdgold_product_necklaces', '2025-06-28 17:56:28'),
(839, 'HJ', 'G', 'G18D', 'NK', 3, 'HJGG18DNK000003', '18kdgold_product_necklaces', '2025-06-28 17:59:42'),
(840, 'HJ', 'G', 'G18D', 'NK', 4, 'HJGG18DNK000004', '18kdgold_product_necklaces', '2025-06-28 18:09:09'),
(841, 'HJ', 'G', 'G18D', 'NK', 5, 'HJGG18DNK000005', '18kdgold_product_necklaces', '2025-06-28 21:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_code_prefix`
--

CREATE TABLE `product_code_prefix` (
  `pc_prefix_id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_code_prefix`
--

INSERT INTO `product_code_prefix` (`pc_prefix_id`, `code`, `name`) VALUES
(1, 'HJ', 'Harees Jewellery'),
(2, 'HG', 'Harees Gold & Diamonds');

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_anklets`
--

CREATE TABLE `rosegold_product_anklets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_bangles`
--

CREATE TABLE `rosegold_product_bangles` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rosegold_product_bangles`
--

INSERT INTO `rosegold_product_bangles` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSR925BG000001', 0, 20, 'RoseGold Bangles', 'RoseGold Bangles', 2, 3, 6, NULL, 'Female', 'Adult Size', 11.09000, 11.09000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000001.png', NULL, '', '', '', '2025-06-09 16:18:31', '2025-06-09 16:18:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSR925BG000002', 1, 30, 'RoseGold Bangles', 'RoseGold Bangles Collection', 2, 3, 6, NULL, 'Unisex', 'Adult Size', 12.93000, 12.93000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000002.png', NULL, '', '', '', '2025-06-09 16:23:25', '2025-06-09 16:23:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSR925BG000003', 0, 1, 'Rosegold Silver Bangle', 'Rosegold Silver Bangle', 2, 3, 6, NULL, 'Female', 'Adult Size', 13.10000, 13.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000003.png', NULL, '', '', '', '2025-06-11 20:14:49', '2025-06-11 20:14:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSR925BG000004', 0, 1, 'Rosegold Silver Bangle', 'Rosegold Silver Bangle', 2, 3, 6, NULL, 'Female', 'Adult Size', 16.87000, 16.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000004.png', NULL, '', '', '', '2025-06-11 20:15:21', '2025-06-11 20:15:21', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSR925BG000005', 0, 1, 'Rosegold Silver Bangle', 'Rosegold Silver Bangle', 2, 3, 6, NULL, 'Female', 'Adult Size', 4.75000, 4.75000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000005.png', NULL, '', '', '', '2025-06-11 20:30:57', '2025-06-11 20:30:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSR925BG000006', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 12.06000, 12.06000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000006.png', NULL, '', '', '', '2025-06-15 10:30:12', '2025-06-15 10:30:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSR925BG000007', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 10.77000, 10.77000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000007.png', NULL, '', '', '', '2025-06-15 10:32:01', '2025-06-15 10:32:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSR925BG000008', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 11.53000, 11.53000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000008.png', NULL, '', '', '', '2025-06-15 10:33:06', '2025-06-15 10:33:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSR925BG000009', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 12.12000, 12.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000009.png', NULL, '', '', '', '2025-06-15 10:34:49', '2025-06-15 10:34:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSR925BG000010', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 9.67000, 9.67000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000010.png', NULL, '', '', '', '2025-06-15 10:36:40', '2025-06-15 10:36:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSR925BG000011', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 13.61000, 13.61000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000011.png', NULL, '', '', '', '2025-06-15 10:37:49', '2025-06-15 10:37:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSR925BG000012', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 7.47000, 7.47000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000012.png', NULL, '', '', '', '2025-06-15 10:39:00', '2025-06-15 10:39:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJSR925BG000013', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 10.75000, 10.75000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000013.png', NULL, '', '', '', '2025-06-15 10:40:12', '2025-06-15 10:40:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJSR925BG000014', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 10.37000, 10.37000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000014.jpg', NULL, '', '', '', '2025-06-15 10:46:06', '2025-06-15 10:46:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJSR925BG000015', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 10.00000, 10.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000015.jpg', NULL, '', '', '', '2025-06-15 10:47:42', '2025-06-15 10:47:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJSR925BG000016', 0, 1, 'Rosegold Bangle for Women', '', 2, 3, 6, NULL, 'Female', 'Adult Size', 11.05000, 11.05000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bangles/HJSR925BG000016.jpg', NULL, '', '', '', '2025-06-15 10:49:10', '2025-06-15 10:49:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_bracelets`
--

CREATE TABLE `rosegold_product_bracelets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rosegold_product_bracelets`
--

INSERT INTO `rosegold_product_bracelets` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSR925BR000001', 0, 65, 'Rose Gold Silver Bracelet', 'Rose Gold Silver Bracelet', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.33000, 4.33000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000001.png', NULL, '', '', '', '2025-06-09 19:19:06', '2025-06-09 19:19:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSR925BR000002', 0, 54, 'Rose Gold Silver Bracelet', 'Rose Gold Silver Bracelet', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.38000, 4.38000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000002.png', NULL, '', '', '', '2025-06-09 19:20:07', '2025-06-09 19:20:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSR925BR000003', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 6.80000, 6.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000003.png', NULL, '', '', '', '2025-06-11 20:03:15', '2025-06-11 20:03:15', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSR925BR000004', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 1.95000, 1.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000004.png', NULL, '', '', '', '2025-06-11 20:04:01', '2025-06-11 20:04:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSR925BR000005', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 8.07000, 8.07000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000005.png', NULL, '', '', '', '2025-06-11 20:06:04', '2025-06-11 20:06:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSR925BR000006', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 7.20000, 7.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000006.png', NULL, '', '', '', '2025-06-11 20:06:48', '2025-06-11 20:06:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSR925BR000007', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 7.20000, 7.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000007.png', NULL, '', '', '', '2025-06-11 20:07:26', '2025-06-11 20:07:26', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSR925BR000008', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 6.87000, 6.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000008.png', NULL, '', '', '', '2025-06-11 20:08:40', '2025-06-11 20:08:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSR925BR000009', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 7.68000, 7.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000009.png', NULL, '', '', '', '2025-06-11 20:10:13', '2025-06-11 20:10:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSR925BR000010', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 8.78000, 8.78000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000010.png', NULL, '', '', '', '2025-06-11 20:10:52', '2025-06-11 20:10:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSR925BR000011', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 7.12000, 7.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000011.png', NULL, '', '', '', '2025-06-11 20:12:12', '2025-06-11 20:12:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSR925BR000012', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.89000, 4.89000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000012.jpg', NULL, '', '', '', '2025-06-11 20:13:22', '2025-06-11 20:13:22', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJSR925BR000013', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.88000, 2.88000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000013.png', NULL, '', '', '', '2025-06-11 20:13:57', '2025-06-11 20:13:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJSR925BR000014', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.06000, 4.06000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000014.png', NULL, '', '', '', '2025-06-11 20:16:42', '2025-06-11 20:16:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJSR925BR000015', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.33000, 4.33000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000015.png', NULL, '', '', '', '2025-06-11 20:17:23', '2025-06-11 20:17:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJSR925BR000016', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.38000, 4.38000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000016.png', NULL, '', '', '', '2025-06-11 20:18:00', '2025-06-11 20:18:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJSR925BR000017', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.61000, 4.61000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000017.png', NULL, '', '', '', '2025-06-11 20:18:34', '2025-06-11 20:18:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJSR925BR000018', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.38000, 4.38000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000018.png', NULL, '', '', '', '2025-06-11 20:19:29', '2025-06-11 20:19:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJSR925BR000019', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.48000, 4.48000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000019.png', NULL, '', '', '', '2025-06-11 20:20:26', '2025-06-11 20:20:26', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJSR925BR000020', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.63000, 4.63000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000020.png', NULL, '', '', '', '2025-06-11 20:21:01', '2025-06-11 20:21:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJSR925BR000021', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.18000, 4.18000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000021.png', NULL, '', '', '', '2025-06-11 20:21:40', '2025-06-11 20:21:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJSR925BR000022', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 6.24000, 6.24000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000022.png', NULL, '', '', '', '2025-06-11 20:24:25', '2025-06-11 20:24:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJSR925BR000023', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 5.57000, 5.57000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000023.png', NULL, '', '', '', '2025-06-11 20:25:07', '2025-06-11 20:25:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(25, 'HJSR925BR000024', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.96000, 4.96000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000024.png', NULL, '', '', '', '2025-06-11 20:25:47', '2025-06-11 20:25:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(26, 'HJSR925BR000025', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 5.60000, 5.60000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000025.png', NULL, '', '', '', '2025-06-11 20:26:27', '2025-06-11 20:26:27', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(27, 'HJSR925BR000026', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 5.76000, 5.76000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000026.png', NULL, '', '', '', '2025-06-11 20:27:03', '2025-06-11 20:27:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(28, 'HJSR925BR000027', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 5.60000, 5.60000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000027.png', NULL, '', '', '', '2025-06-11 20:27:36', '2025-06-11 20:27:36', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(29, 'HJSR925BR000028', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 6.22000, 6.22000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000028.png', NULL, '', '', '', '2025-06-11 20:28:10', '2025-06-11 20:28:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(30, 'HJSR925BR000029', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 7.36000, 7.36000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000029.png', NULL, '', '', '', '2025-06-11 20:28:55', '2025-06-11 20:28:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(31, 'HJSR925BR000030', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000030.png', NULL, '', '', '', '2025-06-11 20:29:31', '2025-06-11 20:29:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(32, 'HJSR925BR000031', 0, 1, 'Rosegold Silver Bracelets', '', 2, 3, 3, NULL, 'Female', 'Adult Size', 4.89000, 4.89000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000031.png', NULL, '', '', '', '2025-06-11 20:32:13', '2025-06-11 20:32:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(33, 'HJSR925BR000032', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.93000, 2.93000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000032.png', NULL, '', '', '', '2025-06-11 20:33:13', '2025-06-11 20:33:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(34, 'HJSR925BR000033', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.64000, 2.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000033.png', NULL, '', '', '', '2025-06-11 20:33:53', '2025-06-11 20:33:53', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(35, 'HJSR925BR000034', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.87000, 2.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000034.png', NULL, '', '', '', '2025-06-11 20:36:01', '2025-06-11 20:36:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(36, 'HJSR925BR000035', 0, 1, 'Rosegold Silver Bracelets', 'Rosegold Silver Bracelets', 2, 3, 3, NULL, 'Female', 'Adult Size', 3.22000, 3.22000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000035.png', NULL, '', '', '', '2025-06-11 20:36:44', '2025-06-11 20:36:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(37, 'HJSR925BR000036', 0, 1, 'Rosegold Silver Bracelet', 'Rosegold Silver Bracelet', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.88000, 2.88000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000036.png', NULL, '', '', '', '2025-06-11 20:37:16', '2025-06-11 20:37:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(38, 'HJSR925BR000037', 0, 1, 'Rosegold Silver Bracelet', 'Rosegold Silver Bracelet', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.91000, 2.91000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000037.png', NULL, '', '', '', '2025-06-11 20:38:01', '2025-06-11 20:38:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(39, 'HJSR925BR000038', 0, 1, 'Rosegold Silver Bracelet', 'Rosegold Silver Bracelet', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.74000, 2.74000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000038.png', NULL, '', '', '', '2025-06-11 20:38:47', '2025-06-11 20:38:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(40, 'HJSR925BR000039', 0, 1, 'Rosegold Silver Bracelet', 'Rosegold Silver Bracelet', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.18000, 2.18000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000039.png', NULL, '', '', '', '2025-06-11 20:40:00', '2025-06-11 20:40:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(41, 'HJSR925BR000040', 0, 1, 'Rosegold Silver Bracelet', 'Rosegold Silver Bracelet', 2, 3, 3, NULL, 'Female', 'Adult Size', 3.29000, 3.29000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000040.png', NULL, '', '', '', '2025-06-11 20:42:17', '2025-06-11 20:42:17', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(42, 'HJSR925BR000041', 0, 1, 'Rosegold Silver Bracelet', 'Rosegold Silver Bracelet', 2, 3, 3, NULL, 'Female', 'Adult Size', 2.55000, 2.55000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_bracelets/HJSR925BR000041.png', NULL, '', '', '', '2025-06-11 20:43:17', '2025-06-11 20:43:17', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_chains`
--

CREATE TABLE `rosegold_product_chains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rosegold_product_chains`
--

INSERT INTO `rosegold_product_chains` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSR925CH000001', 0, 57, 'Rose Gold Silver Chain', 'Rose Gold Silver Chain', 2, 3, 11, NULL, 'Female', 'Adult Size', 2.64000, 2.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_chains/HJSR925CH000001.png', NULL, '', '', '', '2025-06-09 19:27:04', '2025-06-09 19:27:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSR925CH000002', 0, 68, 'Rose Gold Silver Chain', 'Rose Gold Silver Chain', 2, 3, 11, NULL, 'Female', 'Adult Size', 2.69000, 2.69000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_chains/HJSR925CH000002.png', NULL, '', '', '', '2025-06-09 19:27:42', '2025-06-09 19:27:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSR925CH000003', 0, 1, 'Rosegold Silver Chain', '', 2, 3, 11, NULL, 'Female', 'Adult Size', 2.57000, 2.57000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_chains/HJSR925CH000003.png', NULL, '', '', '', '2025-06-11 19:45:52', '2025-06-11 19:45:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSR925CH000004', 0, 1, 'Rosegold Silver Chain', 'Rosegold Silver Chain', 2, 3, 11, NULL, 'Female', 'Adult Size', 4.02000, 4.02000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_chains/HJSR925CH000004.png', NULL, '', '', '', '2025-06-11 19:46:45', '2025-06-11 19:46:45', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSR925CH000005', 0, 1, 'Rosegold Silver Chain', 'Rosegold Silver Chain', 2, 3, 11, NULL, 'Female', 'Adult Size', 3.86000, 3.86000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_chains/HJSR925CH000005.png', NULL, '', '', '', '2025-06-11 19:48:43', '2025-06-11 19:48:43', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSR925CH000006', 0, 1, 'Rosegold Silver Chain', 'Rosegold Silver Chain', 2, 3, 11, NULL, 'Female', 'Adult Size', 2.64000, 2.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_chains/HJSR925CH000006.png', NULL, '', '', '', '2025-06-11 19:49:47', '2025-06-11 19:49:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_earrings`
--

CREATE TABLE `rosegold_product_earrings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rosegold_product_earrings`
--

INSERT INTO `rosegold_product_earrings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(1, 'HJSR925ER000002', 0, 65, 'RoseGold Earrings', 'RoseGold Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 5.15000, 5.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000002.png', NULL, '', '', '', '2025-06-09 20:24:01', '2025-06-09 20:24:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(2, 'HJSR925ER000003', 0, 25, 'RoseGold Earrings', 'RoseGold Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 3.81000, 3.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000003.png', NULL, '', '', '', '2025-06-09 20:24:55', '2025-06-09 20:24:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSR925ER000004', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 2.93000, 2.93000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000004.png', NULL, '', '', '', '2025-06-11 19:52:42', '2025-06-11 19:52:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSR925ER000005', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 4.24000, 4.24000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000005.png', NULL, '', '', '', '2025-06-11 19:53:50', '2025-06-11 19:53:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSR925ER000006', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 4.24000, 4.24000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000006.png', NULL, '', '', '', '2025-06-11 19:54:28', '2025-06-11 19:54:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSR925ER000007', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 4.03000, 4.03000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000007.png', NULL, '', '', '', '2025-06-11 19:55:46', '2025-06-11 19:55:46', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSR925ER000008', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 2.54000, 2.54000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000008.png', NULL, '', '', '', '2025-06-11 19:56:30', '2025-06-11 19:56:30', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSR925ER000009', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 4.25000, 4.25000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000009.png', NULL, '', '', '', '2025-06-11 19:57:46', '2025-06-11 19:57:46', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSR925ER000010', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 3.81000, 3.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000010.png', NULL, '', '', '', '2025-06-11 19:58:28', '2025-06-11 19:58:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSR925ER000011', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000011.png', NULL, '', '', '', '2025-06-11 19:59:12', '2025-06-11 19:59:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSR925ER000012', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 3.03000, 3.03000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000012.png', NULL, '', '', '', '2025-06-11 20:01:05', '2025-06-11 20:01:05', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSR925ER000013', 0, 1, 'Rosegold Silver Earrings', 'Rosegold Silver Earrings', 2, 3, 8, NULL, 'Female', 'Adult Size', 5.06000, 5.06000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_earrings/HJSR925ER000013.png', NULL, '', '', '', '2025-06-11 20:01:47', '2025-06-11 20:01:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_fancychains`
--

CREATE TABLE `rosegold_product_fancychains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_necklaces`
--

CREATE TABLE `rosegold_product_necklaces` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rosegold_product_necklaces`
--

INSERT INTO `rosegold_product_necklaces` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSR925NK000001', 0, 1, 'Rose Gold Silver Necklace', 'Rose Gold Silver Necklace from Harees Jewellery.', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.23000, 2.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000001.jpg', NULL, '', '', '', '2025-06-04 14:30:52', '2025-06-04 14:30:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSR925NK000002', 0, 98, 'Rose Gold Silver Necklace', 'Rose Gold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.82000, 2.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000002.png', NULL, '', '', '', '2025-06-09 19:22:04', '2025-06-09 19:22:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSR925NK000003', 0, 1, 'Rosegold Silver Necklace', '', 2, 3, 1, NULL, 'Female', 'Adult Size', 5.03000, 5.03000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000003.png', NULL, '', '', '', '2025-06-11 19:16:07', '2025-06-11 19:16:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSR925NK000004', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 5.08000, 5.08000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000004.png', NULL, '', '', '', '2025-06-11 19:17:13', '2025-06-11 19:17:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSR925NK000005', 0, 1, 'Rosegold Silver Necklace', '', 2, 3, 1, NULL, 'Female', 'Adult Size', 5.13000, 5.13000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000005.jpg', NULL, '', '', '', '2025-06-11 19:18:47', '2025-06-11 19:18:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSR925NK000006', 0, 1, 'Rosegold Silver Necklace', '', 2, 3, 1, NULL, 'Female', 'Adult Size', 3.68000, 3.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000006.png', NULL, '', '', '', '2025-06-11 19:20:14', '2025-06-11 19:20:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSR925NK000007', 0, 1, 'Rosegold Silver Necklace', '', 2, 3, 1, NULL, 'Female', 'Adult Size', 3.69000, 3.69000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000007.png', NULL, '', '', '', '2025-06-11 19:21:35', '2025-06-11 19:21:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSR925NK000008', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.88000, 2.88000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000008.png', NULL, '', '', '', '2025-06-11 19:23:12', '2025-06-11 19:23:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSR925NK000009', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.79000, 2.79000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000009.png', NULL, '', '', '', '2025-06-11 19:26:21', '2025-06-11 19:26:21', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSR925NK000010', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.81000, 2.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000010.png', NULL, '', '', '', '2025-06-11 19:27:33', '2025-06-11 19:27:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSR925NK000011', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 1.85000, 1.85000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000011.png', NULL, '', '', '', '2025-06-11 19:28:59', '2025-06-11 19:28:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSR925NK000012', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.59000, 2.59000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000012.png', NULL, '', '', '', '2025-06-11 19:31:52', '2025-06-11 19:31:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJSR925NK000013', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.29000, 2.29000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000013.png', NULL, '', '', '', '2025-06-11 19:32:42', '2025-06-11 19:32:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJSR925NK000014', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 1.89000, 1.89000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000014.png', NULL, '', '', '', '2025-06-11 19:33:28', '2025-06-11 19:33:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJSR925NK000015', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.63000, 2.63000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000015.png', NULL, '', '', '', '2025-06-11 19:34:07', '2025-06-11 19:34:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJSR925NK000016', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 1.87000, 1.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000016.png', NULL, '', '', '', '2025-06-11 19:35:23', '2025-06-11 19:35:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJSR925NK000017', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.29000, 2.29000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000017.png', NULL, '', '', '', '2025-06-11 19:36:06', '2025-06-11 19:36:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJSR925NK000018', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.81000, 2.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000018.png', NULL, '', '', '', '2025-06-11 19:36:47', '2025-06-11 19:36:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJSR925NK000019', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.36000, 2.36000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000019.png', NULL, '', '', '', '2025-06-11 19:37:33', '2025-06-11 19:37:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJSR925NK000020', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.36000, 2.36000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000020.png', NULL, '', '', '', '2025-06-11 19:38:09', '2025-06-11 19:38:09', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJSR925NK000021', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 1.91000, 1.91000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000021.png', NULL, '', '', '', '2025-06-11 19:38:43', '2025-06-11 19:38:43', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJSR925NK000022', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.01000, 2.01000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000022.png', NULL, '', '', '', '2025-06-11 19:39:18', '2025-06-11 19:39:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJSR925NK000023', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.07000, 2.07000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000023.png', NULL, '', '', '', '2025-06-11 19:39:48', '2025-06-11 19:39:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(25, 'HJSR925NK000024', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.42000, 2.42000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000024.png', NULL, '', '', '', '2025-06-11 19:40:50', '2025-06-11 19:40:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(26, 'HJSR925NK000025', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.35000, 2.35000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000025.png', NULL, '', '', '', '2025-06-11 19:41:28', '2025-06-11 19:41:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(27, 'HJSR925NK000026', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.23000, 2.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000026.png', NULL, '', '', '', '2025-06-11 19:42:14', '2025-06-11 19:42:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(28, 'HJSR925NK000027', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 1.82000, 1.82000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000027.png', NULL, '', '', '', '2025-06-11 19:42:56', '2025-06-11 19:42:56', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(29, 'HJSR925NK000028', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.04000, 2.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000028.png', NULL, '', '', '', '2025-06-11 19:43:59', '2025-06-11 19:43:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(30, 'HJSR925NK000029', 0, 1, 'Rosegold Silver Necklace', 'Rosegold Silver Necklace', 2, 3, 1, NULL, 'Female', 'Adult Size', 2.79000, 2.79000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000029.png', NULL, '', '', '', '2025-06-11 19:44:55', '2025-06-11 19:44:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(31, 'HJSR925NK000030', 0, 1, 'Rosegold Silver Necklace', 'Only includes the necklace from the image', 2, 3, 1, NULL, 'Female', 'Adult Size', 1.61000, 1.61000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_necklaces/HJSR925NK000030.jpg', NULL, '', '', '', '2025-06-25 13:16:28', '2025-06-25 13:16:28', NULL, NULL, '2025-06-25 13:23:15', NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_nosepins`
--

CREATE TABLE `rosegold_product_nosepins` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_pendants`
--

CREATE TABLE `rosegold_product_pendants` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_rings`
--

CREATE TABLE `rosegold_product_rings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rosegold_product_rings`
--

INSERT INTO `rosegold_product_rings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(3, 'HJSR925RG000003', 0, 38, 'Rose Gold Silver Rings', 'Rose Gold Silver Rings', 2, 3, 7, NULL, 'Female', 'Adult Size', 2.15000, 2.15000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000003.jpg', NULL, '', '', '', '2025-06-09 19:03:29', '2025-06-09 19:03:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSR925RG000004', 0, 84, 'Rose Gold Silver Ring', 'Rose Gold Silver Ring', 2, 3, 7, NULL, 'Female', 'Adult Size', 0.00000, 3.25000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000004.jpg', NULL, '', '', '', '2025-06-09 19:04:12', '2025-06-09 19:04:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSR925RG000005', 0, 1, 'Rose Gold Silver Ring', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000005.jpg', NULL, '', '', '', '2025-06-15 10:23:08', '2025-06-15 10:23:08', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSR925RG000006', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000006.jpg', NULL, '', '', '', '2025-06-15 11:02:39', '2025-06-15 11:02:39', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSR925RG000007', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000007.jpg', NULL, '', '', '', '2025-06-15 11:15:20', '2025-06-15 11:15:20', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSR925RG000008', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000008.jpg', NULL, '', '', '', '2025-06-15 11:15:56', '2025-06-15 11:15:56', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSR925RG000009', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000009.jpg', NULL, '', '', '', '2025-06-15 11:16:32', '2025-06-15 11:16:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSR925RG000010', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000010.jpg', NULL, '', '', '', '2025-06-15 11:17:13', '2025-06-15 11:17:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSR925RG000011', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000011.jpg', NULL, '', '', '', '2025-06-15 11:17:57', '2025-06-15 11:17:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSR925RG000012', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000012.jpg', NULL, '', '', '', '2025-06-15 11:18:29', '2025-06-15 11:18:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSR925RG000013', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000013.jpg', NULL, '', '', '', '2025-06-15 11:19:04', '2025-06-15 11:19:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJSR925RG000014', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000014.jpg', NULL, '', '', '', '2025-06-15 11:19:40', '2025-06-15 11:19:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJSR925RG000015', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000015.jpg', NULL, '', '', '', '2025-06-15 11:20:19', '2025-06-15 11:20:19', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJSR925RG000016', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000016.jpg', NULL, '', '', '', '2025-06-15 11:20:59', '2025-06-15 11:20:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJSR925RG000017', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000017.jpg', NULL, '', '', '', '2025-06-15 11:21:38', '2025-06-15 11:21:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJSR925RG000018', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000018.jpg', NULL, '', '', '', '2025-06-15 11:22:20', '2025-06-15 11:22:20', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJSR925RG000019', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000019.jpg', NULL, '', '', '', '2025-06-15 11:22:52', '2025-06-15 11:22:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJSR925RG000020', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000020.jpg', NULL, '', '', '', '2025-06-15 11:23:31', '2025-06-15 11:23:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJSR925RG000021', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000021.jpg', NULL, '', '', '', '2025-06-15 11:24:10', '2025-06-15 11:24:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJSR925RG000022', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000022.jpg', NULL, '', '', '', '2025-06-15 11:24:46', '2025-06-15 11:24:46', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJSR925RG000023', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000023.jpg', NULL, '', '', '', '2025-06-15 11:25:23', '2025-06-15 11:25:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJSR925RG000024', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000024.jpg', NULL, '', '', '', '2025-06-15 11:26:04', '2025-06-15 11:26:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(25, 'HJSR925RG000025', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000025.jpg', NULL, '', '', '', '2025-06-15 11:26:43', '2025-06-15 11:26:43', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(26, 'HJSR925RG000026', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000026.jpg', NULL, '', '', '', '2025-06-15 11:27:32', '2025-06-15 11:27:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(27, 'HJSR925RG000027', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000027.jpg', NULL, '', '', '', '2025-06-15 11:28:07', '2025-06-15 11:28:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(28, 'HJSR925RG000028', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000028.jpg', NULL, '', '', '', '2025-06-15 11:28:40', '2025-06-15 11:28:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(29, 'HJSR925RG000029', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000029.jpg', NULL, '', '', '', '2025-06-15 11:29:23', '2025-06-15 11:29:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(30, 'HJSR925RG000030', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000030.jpg', NULL, '', '', '', '2025-06-15 11:30:10', '2025-06-15 11:30:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(31, 'HJSR925RG000031', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000031.jpg', NULL, '', '', '', '2025-06-15 11:30:52', '2025-06-15 11:30:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(32, 'HJSR925RG000032', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000032.jpg', NULL, '', '', '', '2025-06-15 11:31:35', '2025-06-15 11:31:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(33, 'HJSR925RG000033', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000033.jpg', NULL, '', '', '', '2025-06-15 11:32:25', '2025-06-15 11:32:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(34, 'HJSR925RG000034', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000034.jpg', NULL, '', '', '', '2025-06-15 11:33:40', '2025-06-15 11:33:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(35, 'HJSR925RG000035', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000035.jpg', NULL, '', '', '', '2025-06-15 11:34:18', '2025-06-15 11:34:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(36, 'HJSR925RG000036', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000036.jpg', NULL, '', '', '', '2025-06-15 11:34:57', '2025-06-15 11:34:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(37, 'HJSR925RG000037', 0, 1, 'Rosegold Ring for Women', '', 2, 3, 7, NULL, 'Female', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/rosegold_silver/rosegold_product_rings/HJSR925RG000037.jpg', NULL, '', '', '', '2025-06-15 11:35:40', '2025-06-15 11:35:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_secondstuds`
--

CREATE TABLE `rosegold_product_secondstuds` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rosegold_product_studs`
--

CREATE TABLE `rosegold_product_studs` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scheme_payments`
--

CREATE TABLE `scheme_payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `receipt_no` varchar(20) NOT NULL,
  `payment_method` varchar(20) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scheme_payments`
--

INSERT INTO `scheme_payments` (`id`, `user_id`, `scheme_id`, `amount`, `payment_date`, `receipt_no`, `payment_method`, `transaction_id`, `created_at`) VALUES
(3, 1, 3, 2000.00, '2025-07-09', 'RCPT-686EA18E91FE7', NULL, NULL, '2025-07-09 17:06:22'),
(4, 4, 4, 500.00, '2025-06-13', 'RCPT-6873A9FDBC4D4', NULL, NULL, '2025-07-13 12:43:41'),
(7, 4, 4, 500.00, '2024-09-10', 'RCPT-20240910B2', NULL, NULL, '2024-09-10 04:30:00'),
(8, 4, 4, 500.00, '2024-10-10', 'RCPT-20241010C3', NULL, NULL, '2024-10-10 04:30:00'),
(9, 4, 4, 500.00, '2024-11-10', 'RCPT-20241110D4', NULL, NULL, '2024-11-10 04:30:00'),
(10, 4, 4, 500.00, '2024-12-10', 'RCPT-20241210E5', NULL, NULL, '2024-12-10 04:30:00'),
(11, 4, 4, 500.00, '2025-01-10', 'RCPT-20250110F6', NULL, NULL, '2025-01-10 04:30:00'),
(12, 4, 4, 500.00, '2025-02-10', 'RCPT-20250210G7', NULL, NULL, '2025-02-10 04:30:00'),
(13, 4, 4, 500.00, '2025-03-10', 'RCPT-20250310H8', NULL, NULL, '2025-03-10 04:30:00'),
(14, 4, 4, 500.00, '2025-04-10', 'RCPT-20250410I9', NULL, NULL, '2025-04-10 04:30:00'),
(15, 4, 4, 500.00, '2025-05-10', 'RCPT-20250510J0', NULL, NULL, '2025-05-10 04:30:00'),
(17, 4, 4, 500.00, '2025-07-13', 'RCPT-6873ABF0BCA52', NULL, NULL, '2025-07-13 12:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_anklets`
--

CREATE TABLE `silver_product_anklets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_bangles`
--

CREATE TABLE `silver_product_bangles` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_product_bangles`
--

INSERT INTO `silver_product_bangles` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSS850BG000001', 0, 20, 'Silver bangle', 'Silver bangle', 2, 1, 6, NULL, 'Female', 'Adult Size', 5.00000, 5.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000001.jpg', NULL, '', '', '', '2025-06-09 12:43:33', '2025-06-09 12:43:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSS850BG000002', 0, 60, 'Silver bangle', 'Silver bangle Collections', 2, 1, 6, NULL, 'Female', 'Adult Size', 5.02000, 5.02000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000002.jpg', NULL, '', '', '', '2025-06-09 12:44:44', '2025-06-09 12:44:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSS850BG000003', 0, 1, 'Silver Bangle', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 10.51000, 10.51000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000003.png', NULL, '', '', '', '2025-06-13 15:35:27', '2025-06-13 15:35:27', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSS850BG000004', 0, 1, 'Silver Bangle', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 10.44000, 10.44000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000004.png', NULL, '', '', '', '2025-06-13 15:37:34', '2025-06-13 15:37:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSS850BG000005', 0, 1, 'Silver Bangle', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 10.48000, 10.48000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000005.png', NULL, '', '', '', '2025-06-13 15:40:36', '2025-06-13 15:40:36', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSS850BG000006', 0, 1, 'Silver Bangle for ladies', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 20.60000, 20.60000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000006.png', NULL, '', '', '', '2025-06-14 18:59:29', '2025-06-14 18:59:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSS850BG000007', 0, 1, 'Silver Bangle for ladies', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 25.03000, 25.03000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000007.png', NULL, '', '', '', '2025-06-14 19:00:35', '2025-06-14 19:00:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSS850BG000008', 0, 1, 'Silver Bangle for ladies', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 19.01000, 19.01000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000008.png', NULL, '', '', '', '2025-06-14 19:01:23', '2025-06-14 19:01:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSS850BG000009', 0, 1, 'Silver Bangle for ladies', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 21.80000, 21.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000009.png', NULL, '', '', '', '2025-06-14 19:02:06', '2025-06-14 19:02:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSS850BG000010', 0, 1, 'Silver Bangle for ladies', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 29.92000, 29.92000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000010.png', NULL, '', '', '', '2025-06-14 19:02:38', '2025-06-14 19:02:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSS850BG000011', 0, 1, 'Silver Bangle for ladies', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 12.83000, 12.83000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000011.png', NULL, '', '', '', '2025-06-14 19:03:06', '2025-06-14 19:03:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSS850BG000012', 0, 1, 'Rosegold Bangle for Women', '', 2, 1, 6, NULL, 'Female', 'Adult Size', 9.68000, 9.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bangles/HJSS850BG000012.png', NULL, '', '', '', '2025-06-15 10:27:58', '2025-06-15 10:27:58', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_bracelets`
--

CREATE TABLE `silver_product_bracelets` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_product_bracelets`
--

INSERT INTO `silver_product_bracelets` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `pearls_available`, `pearls_desc`, `pearls_color`, `pearls_count`, `pearls_weight`, `pearls_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSS850BR000001', 0, 60, 'Silver Bracelets', 'Silver Bracelets', 2, 1, 3, NULL, 'Male', 'Adult Size', 39.01000, 39.01000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000001.png', NULL, '', '', '', '2025-06-09 18:33:56', '2025-06-09 18:33:56', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSS850BR000002', 0, 65, 'Silver Bracelets', 'Silver Bracelets', 2, 1, 3, NULL, 'Male', 'Adult Size', 40.71000, 40.71000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000002.png', NULL, '', '', '', '2025-06-09 18:34:39', '2025-06-09 18:34:39', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSS925BR000001', 0, 1, '925 Silver Bracelets', '', 2, 2, 3, NULL, 'Female', 'Adult Size', 4.31000, 4.31000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/925_silver/silver_product_bracelets/HJSS925BR000001.png', NULL, '', '', '', '2025-06-11 20:22:19', '2025-06-11 20:22:19', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSS925BR000002', 0, 1, '925 Silver Bracelets', '', 2, 2, 3, NULL, 'Female', 'Adult Size', 5.52000, 5.52000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/925_silver/silver_product_bracelets/HJSS925BR000002.png', NULL, '', '', '', '2025-06-11 20:23:08', '2025-06-11 20:23:08', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSS850BR000003', 0, 1, 'Silver Bracelet', '', 2, 1, 3, NULL, 'Male', 'Adult Size', 67.60000, 67.60000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000003.png', NULL, '', '', '', '2025-06-13 15:51:41', '2025-06-13 15:51:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSS850BR000004', 0, 1, 'Silver Bracelet', '', 2, 1, 3, NULL, 'Male', 'Adult Size', 37.16000, 37.16000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000004.png', NULL, '', '', '', '2025-06-13 15:53:37', '2025-06-13 15:53:37', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSS850BR000005', 0, 1, 'Silver Bracelet', '', 2, 1, 3, NULL, 'Male', 'Adult Size', 45.52000, 45.52000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000005.png', NULL, '', '', '', '2025-06-13 15:56:48', '2025-06-13 15:56:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSS850BR000006', 0, 1, 'Silver Bangle', '', 2, 1, 3, NULL, 'Male', 'Adult Size', 19.70000, 19.70000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000006.png', NULL, '', '', '', '2025-06-13 15:59:01', '2025-06-13 15:59:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSS850BR000007', 0, 1, 'Silver Bracelet', '', 2, 1, 3, NULL, 'Male', 'Adult Size', 17.72000, 17.72000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000007.png', NULL, '', '', '', '2025-06-13 16:52:50', '2025-06-13 16:52:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSS850BR000008', 0, 1, 'Silver Bracelet', '', 2, 1, 3, NULL, 'Male', 'Adult Size', 19.54000, 19.54000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000008.png', NULL, '', '', '', '2025-06-13 16:55:02', '2025-06-13 16:55:02', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSS850BR000009', 0, 1, 'Silver Bracelet', '', 2, 1, 3, NULL, 'Male', 'Adult Size', 34.00000, 34.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product_images/silver/standard_silver/silver_product_bracelets/HJSS850BR000009.png', NULL, '', '', '', '2025-06-13 16:57:06', '2025-06-13 16:57:06', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_chains`
--

CREATE TABLE `silver_product_chains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_product_chains`
--

INSERT INTO `silver_product_chains` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSS850CH000001', 0, 37, 'Silver Chains', 'Silver Chains', 2, 1, 11, NULL, 'Unisex', 'Adult Size', 9.27000, 9.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000001.png', NULL, '', '', '', '2025-06-09 18:56:23', '2025-06-09 18:56:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSS850CH000002', 0, 38, 'Silver Chains', 'Silver Chains', 2, 1, 11, NULL, 'Unisex', 'Adult Size', 23.64000, 23.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000002.png', NULL, '', '', '', '2025-06-09 18:57:03', '2025-06-09 18:57:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSS850CH000003', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 8.55000, 8.55000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000003.png', NULL, '', '', '', '2025-06-13 17:07:12', '2025-06-13 17:07:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSS850CH000004', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 8.07000, 8.07000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000004.png', NULL, '', '', '', '2025-06-13 17:09:40', '2025-06-13 17:09:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSS850CH000005', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 22.64000, 22.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000005.png', NULL, '', '', '', '2025-06-13 17:11:54', '2025-06-13 17:11:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSS850CH000006', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 23.10000, 23.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000006.png', NULL, '', '', '', '2025-06-13 17:18:05', '2025-06-13 17:18:05', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSS850CH000007', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 23.13000, 23.13000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000007.png', NULL, '', '', '', '2025-06-13 17:21:24', '2025-06-13 17:21:24', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSS850CH000008', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 20.58000, 20.58000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000008.png', NULL, '', '', '', '2025-06-13 17:24:14', '2025-06-13 17:24:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSS850CH000009', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 23.97000, 23.97000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000009.png', NULL, '', '', '', '2025-06-13 17:25:50', '2025-06-13 17:25:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSS850CH000010', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 23.94000, 23.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000010.png', NULL, '', '', '', '2025-06-13 17:27:27', '2025-06-13 17:27:27', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSS850CH000011', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 24.30000, 24.30000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000011.png', NULL, '', '', '', '2025-06-13 17:29:00', '2025-06-13 17:29:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSS850CH000012', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 24.57000, 24.57000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000012.png', NULL, '', '', '', '2025-06-13 17:30:32', '2025-06-13 17:30:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJSS850CH000013', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 14.10000, 14.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000013.png', NULL, '', '', '', '2025-06-13 17:32:10', '2025-06-13 17:32:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJSS850CH000014', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 21.30000, 21.30000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000014.png', NULL, '', '', '', '2025-06-13 17:33:48', '2025-06-13 17:33:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJSS850CH000015', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 20.68000, 20.68000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000015.png', NULL, '', '', '', '2025-06-13 17:36:14', '2025-06-13 17:36:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJSS850CH000016', 0, 1, 'Silver Chain', '', 2, 1, 11, NULL, 'Male', 'Adult Size', 24.38000, 24.38000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_chains/HJSS850CH000016.png', NULL, '', '', '', '2025-06-13 17:37:44', '2025-06-13 17:37:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_earrings`
--

CREATE TABLE `silver_product_earrings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_product_earrings`
--

INSERT INTO `silver_product_earrings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSS850ER000001', 0, 65, 'Silver Earring', 'Silver Earring', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.43000, 2.43000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000001.png', NULL, '', '', '', '2025-06-09 18:51:31', '2025-06-09 18:51:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSS850ER000002', 0, 65, 'Silver Earring', 'Silver Earring', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.50000, 2.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000002.png', NULL, '', '', '', '2025-06-09 18:52:32', '2025-06-09 18:52:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSS850ER000003', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.50000, 2.50000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000003.png', NULL, '', '', '', '2025-06-15 09:56:50', '2025-06-15 09:56:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSS850ER000004', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 3.05000, 3.05000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000004.png', NULL, '', '', '', '2025-06-15 09:58:03', '2025-06-15 09:58:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSS850ER000005', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 3.44000, 3.44000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000005.png', NULL, '', '', '', '2025-06-15 09:58:47', '2025-06-15 09:58:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSS850ER000006', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 1.36000, 1.36000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000006.png', NULL, '', '', '', '2025-06-15 09:59:47', '2025-06-15 09:59:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSS850ER000007', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.59000, 2.59000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000007.png', NULL, '', '', '', '2025-06-15 10:00:44', '2025-06-15 10:00:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSS850ER000008', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 1.95000, 1.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000008.png', NULL, '', '', '', '2025-06-15 10:01:48', '2025-06-15 10:01:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSS850ER000009', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 1.70000, 1.70000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000009.png', NULL, '', '', '', '2025-06-15 10:02:32', '2025-06-15 10:02:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSS850ER000010', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 1.94000, 1.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000010.png', NULL, '', '', '', '2025-06-15 10:03:19', '2025-06-15 10:03:19', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSS850ER000011', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.74000, 2.74000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000011.png', NULL, '', '', '', '2025-06-15 10:04:05', '2025-06-15 10:04:05', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSS850ER000012', 0, 1, 'Silver Earring for women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 6.01000, 6.01000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000012.png', NULL, '', '', '', '2025-06-15 10:04:18', '2025-06-15 10:04:18', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJSS850ER000013', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.45000, 2.45000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000013.png', NULL, '', '', '', '2025-06-15 10:04:55', '2025-06-15 10:04:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJSS850ER000014', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.53000, 2.53000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000014.png', NULL, '', '', '', '2025-06-15 10:05:54', '2025-06-15 10:05:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJSS850ER000015', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 3.54000, 3.54000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000015.png', NULL, '', '', '', '2025-06-15 10:06:48', '2025-06-15 10:06:48', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJSS850ER000016', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.43000, 2.43000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000016.png', NULL, '', '', '', '2025-06-15 10:07:46', '2025-06-15 10:07:46', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJSS850ER000017', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 1.79000, 1.79000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000017.png', NULL, '', '', '', '2025-06-15 10:08:41', '2025-06-15 10:08:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJSS850ER000018', 0, 1, 'Silver Earrings for Women', '', 2, 1, 8, NULL, 'Female', 'Adult Size', 2.80000, 2.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_earrings/HJSS850ER000018.png', NULL, '', '', '', '2025-06-15 10:09:32', '2025-06-15 10:09:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_fancychains`
--

CREATE TABLE `silver_product_fancychains` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_kadas`
--

CREATE TABLE `silver_product_kadas` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_product_kadas`
--

INSERT INTO `silver_product_kadas` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSS850KD000001', 0, 54, 'Silver Kada', 'Silver Kada', 2, 1, 5, NULL, 'Male', 'Adult Size', 37.37000, 37.37000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_kadas/HJSS850KD000001.png', NULL, '', '', '', '2025-06-09 18:43:52', '2025-06-09 18:43:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSS850KD000002', 0, 96, 'Silver Kada', 'Silver Kada', 2, 1, 5, NULL, 'Male', 'Adult Size', 35.02000, 35.02000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_kadas/HJSS850KD000002.png', NULL, '', '', '', '2025-06-09 18:44:25', '2025-06-09 18:44:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSS850KD000003', 0, 1, 'Silver Kada', '', 2, 1, 5, NULL, 'Male', 'Adult Size', 33.27000, 33.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_kadas/HJSS850KD000003.png', NULL, '', '', '', '2025-06-13 15:19:38', '2025-06-13 15:19:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSS850KD000004', 0, 1, 'Silver Kada', '', 2, 1, 5, NULL, 'Male', 'Adult Size', 7.01000, 7.01000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_kadas/HJSS850KD000004.png', NULL, '', '', '', '2025-06-13 15:21:39', '2025-06-13 15:21:39', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSS850KD000005', 0, 1, 'Silver Kada', '', 2, 1, 5, NULL, 'Male', 'Adult Size', 33.87000, 33.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_kadas/HJSS850KD000005.png', NULL, '', '', '', '2025-06-13 15:23:55', '2025-06-13 15:23:55', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSS850KD000006', 0, 1, 'Silver Kada', '', 2, 1, 5, NULL, 'Male', 'Adult Size', NULL, 0.00000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_kadas/HJSS850KD000006.png', NULL, '', '', '', '2025-06-13 15:28:10', '2025-06-13 15:28:10', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_necklaces`
--

CREATE TABLE `silver_product_necklaces` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_nosepins`
--

CREATE TABLE `silver_product_nosepins` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_pendants`
--

CREATE TABLE `silver_product_pendants` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_product_pendants`
--

INSERT INTO `silver_product_pendants` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSS850PN000001', 0, 21, 'Silver Pendants', 'Silver Pendants', 2, 1, 2, NULL, 'Unisex', 'Adult Size', 13.32000, 13.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000001.png', NULL, '', '', '', '2025-06-09 18:38:49', '2025-06-09 18:38:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSS850PN000002', 0, 34, 'Silver Pendants', 'Silver Pendants', 2, 1, 2, NULL, 'Male', 'Adult Size', 10.26000, 10.26000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000002.png', NULL, '', '', '', '2025-06-09 18:39:29', '2025-06-09 18:39:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSS850PN000003', 0, 1, 'Silver Pendant', '', 2, 1, 2, NULL, 'Unisex', 'Adult Size', 1.55000, 1.55000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000003.jpg', NULL, '', '', '', '2025-06-15 09:31:45', '2025-06-15 09:31:45', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSS850PN000004', 0, 1, 'Silver Pendant', '', 2, 1, 2, NULL, 'Unisex', 'Adult Size', 1.92000, 1.92000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000004.jpg', NULL, '', '', '', '2025-06-15 09:33:51', '2025-06-15 09:33:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSS850PN000005', 0, 1, 'Silver Pendant', '', 2, 1, 2, NULL, 'Unisex', 'Adult Size', 2.12000, 2.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000005.jpg', NULL, '', '', '', '2025-06-15 09:34:39', '2025-06-15 09:34:39', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSS850PN000006', 0, 1, 'Mohanlal\'s Thudarum Movie Murugan pendant', '', 2, 1, 2, NULL, 'Unisex', 'Adult Size', 3.90000, 3.90000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000006.jpg', NULL, '', '', '', '2025-06-15 09:38:03', '2025-06-15 09:38:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSS850PN000007', 0, 1, 'Mohanlal\'s Thudarum Movie Murugan pendant', '', 2, 1, 2, NULL, 'Unisex', 'Adult Size', 3.64000, 3.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000007.jpg', NULL, '', '', '', '2025-06-15 09:39:29', '2025-06-15 09:39:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSS850PN000008', 0, 1, 'Mohanlal\'s Thudarum Movie Murugan pendant', '', 2, 1, 2, NULL, 'Unisex', 'Adult Size', 7.81000, 7.81000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000008.jpg', NULL, '', '', '', '2025-06-15 09:40:17', '2025-06-15 09:40:17', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSS850PN000009', 0, 1, 'Mohanlal\'s Thudarum Movie Murugan pendant', '', 2, 1, 2, NULL, 'Unisex', 'Adult Size', 4.27000, 4.27000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000009.jpg', NULL, '', '', '', '2025-06-15 09:41:01', '2025-06-15 09:41:01', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSS850PN000010', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 11.52000, 11.52000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000010.png', NULL, '', '', '', '2025-06-15 09:44:57', '2025-06-15 09:44:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSS850PN000011', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 13.32000, 13.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000011.png', NULL, '', '', '', '2025-06-15 09:46:07', '2025-06-15 09:46:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSS850PN000012', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 8.93000, 8.93000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000012.png', NULL, '', '', '', '2025-06-15 09:47:19', '2025-06-15 09:47:19', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJSS850PN000013', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 4.51000, 4.51000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000013.png', NULL, '', '', '', '2025-06-15 09:48:32', '2025-06-15 09:48:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJSS850PN000014', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 5.80000, 5.80000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000014.png', NULL, '', '', '', '2025-06-15 09:49:15', '2025-06-15 09:49:15', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJSS850PN000015', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 5.61000, 5.61000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000015.png', NULL, '', '', '', '2025-06-15 09:49:56', '2025-06-15 09:49:56', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJSS850PN000016', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 10.26000, 10.26000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000016.png', NULL, '', '', '', '2025-06-15 09:50:53', '2025-06-15 09:50:53', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJSS850PN000017', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 10.52000, 10.52000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000017.png', NULL, '', '', '', '2025-06-15 09:51:44', '2025-06-15 09:51:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJSS850PN000018', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 12.41000, 12.41000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000018.png', NULL, '', '', '', '2025-06-15 09:52:29', '2025-06-15 09:52:29', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJSS850PN000019', 0, 1, 'Silver Pendant for Men', '', 2, 1, 2, NULL, 'Male', 'Adult Size', 7.43000, 7.43000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_pendants/HJSS850PN000019.png', NULL, '', '', '', '2025-06-15 09:53:15', '2025-06-15 09:53:15', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_rings`
--

CREATE TABLE `silver_product_rings` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_product_rings`
--

INSERT INTO `silver_product_rings` (`id`, `product_code`, `is_featured`, `stock_quantity`, `name`, `description`, `metal_id`, `metalpurity_id`, `cat_id`, `sub_cat_id`, `gender`, `size`, `net_weight`, `gross_weight`, `product_model`, `stone_available`, `stone_desc`, `stone_color`, `stone_shape`, `stone_count`, `stone_weight`, `stone_cost`, `diamond_available`, `dia_desc`, `dia_cent`, `dia_count`, `dia_cut`, `dia_color`, `dia_clarity`, `dia_shape`, `beads_available`, `beads_desc`, `beads_color`, `beads_count`, `beads_weight`, `beads_cost`, `img1_webp`, `img2`, `img3`, `img4`, `img5`, `search_keywords`, `created_at`, `updated_at`, `verified`, `verified_by`, `verified_on`, `model_id`, `delist`, `supplier_id`, `manufacture_time`, `tag`, `t_display_name`) VALUES
(2, 'HJSS850RG000001', 0, 570, 'Silver Rings', 'Silver Rings', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.22000, 3.22000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000001.png', NULL, '', '', '', '2025-06-09 18:31:38', '2025-06-09 18:31:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(3, 'HJSS850RG000002', 0, 65, 'Silver Rings', 'Silver Rings', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.20000, 2.20000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000002.png', NULL, '', '', '', '2025-06-09 18:32:16', '2025-06-09 18:32:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(4, 'HJSS850RG000003', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 9.51000, 9.51000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000003.png', NULL, '', '', '', '2025-06-14 19:30:32', '2025-06-14 19:30:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(5, 'HJSS850RG000004', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 8.11000, 8.11000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000004.png', NULL, '', '', '', '2025-06-14 19:31:25', '2025-06-14 19:31:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(6, 'HJSS850RG000005', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 9.84000, 9.84000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000005.png', NULL, '', '', '', '2025-06-14 19:32:04', '2025-06-14 19:32:04', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(7, 'HJSS850RG000006', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 7.36000, 7.36000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000006.png', NULL, '', '', '', '2025-06-14 19:32:41', '2025-06-14 19:32:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(8, 'HJSS850RG000007', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 12.07000, 12.07000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000007.png', NULL, '', '', '', '2025-06-14 19:33:13', '2025-06-14 19:33:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(9, 'HJSS850RG000008', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 13.53000, 13.53000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000008.png', NULL, '', '', '', '2025-06-14 19:33:43', '2025-06-14 19:33:43', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(10, 'HJSS850RG000009', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 12.40000, 12.40000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000009.png', NULL, '', '', '', '2025-06-14 19:34:52', '2025-06-14 19:34:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(11, 'HJSS850RG000010', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 5.42000, 5.42000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000010.png', NULL, '', '', '', '2025-06-14 19:35:20', '2025-06-14 19:35:20', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(12, 'HJSS850RG000011', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 7.11000, 7.11000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000011.png', NULL, '', '', '', '2025-06-14 19:35:49', '2025-06-14 19:35:49', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(13, 'HJSS850RG000012', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 5.63000, 5.63000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000012.png', NULL, '', '', '', '2025-06-14 19:36:16', '2025-06-14 19:36:16', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(14, 'HJSS850RG000013', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 5.37000, 5.37000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000013.png', NULL, '', '', '', '2025-06-14 19:36:44', '2025-06-14 19:36:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(15, 'HJSS850RG000014', 0, 1, 'Silver Ring for Men', '', 2, 1, 7, NULL, 'Male', 'Adult Size', 5.37000, 5.37000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000014.png', NULL, '', '', '', '2025-06-14 19:37:12', '2025-06-14 19:37:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(16, 'HJSS850RG000015', 0, 1, 'Silver Ring for Ladies', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 0.67000, 0.67000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000015.png', NULL, '', '', '', '2025-06-14 19:39:59', '2025-06-14 19:39:59', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(17, 'HJSS850RG000016', 0, 1, 'Silver Ring for Ladies', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.23000, 2.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000016.png', NULL, '', '', '', '2025-06-14 19:42:35', '2025-06-14 19:42:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(18, 'HJSS850RG000017', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.55000, 2.55000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000017.png', NULL, '', '', '', '2025-06-14 19:47:47', '2025-06-14 19:47:47', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(19, 'HJSS850RG000018', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.45000, 1.45000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000018.png', NULL, '', '', '', '2025-06-14 19:48:32', '2025-06-14 19:48:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(20, 'HJSS850RG000019', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.12000, 1.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000019.png', NULL, '', '', '', '2025-06-14 19:49:34', '2025-06-14 19:49:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(21, 'HJSS850RG000020', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.96000, 1.96000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000020.png', NULL, '', '', '', '2025-06-14 19:50:00', '2025-06-14 19:50:00', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(22, 'HJSS850RG000021', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.99000, 1.99000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000021.png', NULL, '', '', '', '2025-06-14 19:50:33', '2025-06-14 19:50:33', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(23, 'HJSS850RG000022', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.43000, 2.43000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000022.png', NULL, '', '', '', '2025-06-15 08:44:38', '2025-06-15 08:44:38', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(24, 'HJSS850RG000023', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.14000, 1.14000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000023.png', NULL, '', '', '', '2025-06-15 08:46:12', '2025-06-15 08:46:12', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(25, 'HJSS850RG000024', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.32000, 2.32000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000024.png', NULL, '', '', '', '2025-06-15 08:50:07', '2025-06-15 08:50:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(26, 'HJSS850RG000025', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.01000, 2.01000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000025.png', NULL, '', '', '', '2025-06-15 08:50:57', '2025-06-15 08:50:57', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(27, 'HJSS850RG000026', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.06000, 2.06000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000026.png', NULL, '', '', '', '2025-06-15 08:51:54', '2025-06-15 08:51:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(28, 'HJSS850RG000027', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.72000, 2.72000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000027.png', NULL, '', '', '', '2025-06-15 08:52:39', '2025-06-15 08:52:39', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(29, 'HJSS850RG000028', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.57000, 3.57000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000028.png', NULL, '', '', '', '2025-06-15 08:53:32', '2025-06-15 08:53:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(30, 'HJSS850RG000029', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.52000, 2.52000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000029.png', NULL, '', '', '', '2025-06-15 08:54:28', '2025-06-15 08:54:28', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(31, 'HJSS850RG000030', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.59000, 2.59000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000030.png', NULL, '', '', '', '2025-06-15 08:55:23', '2025-06-15 08:55:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(32, 'HJSS850RG000031', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.21000, 2.21000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000031.png', NULL, '', '', '', '2025-06-15 09:02:41', '2025-06-15 09:02:41', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(33, 'HJSS850RG000032', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.90000, 1.90000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000032.png', NULL, '', '', '', '2025-06-15 09:03:40', '2025-06-15 09:03:40', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(34, 'HJSS850RG000033', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.01000, 3.01000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000033.png', NULL, '', '', '', '2025-06-15 09:04:34', '2025-06-15 09:04:34', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(35, 'HJSS850RG000034', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.44000, 1.44000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000034.png', NULL, '', '', '', '2025-06-15 09:05:31', '2025-06-15 09:05:31', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(36, 'HJSS850RG000035', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.67000, 3.67000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000035.png', NULL, '', '', '', '2025-06-15 09:06:23', '2025-06-15 09:06:23', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(37, 'HJSS850RG000036', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.39000, 3.39000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000036.png', NULL, '', '', '', '2025-06-15 09:07:13', '2025-06-15 09:07:13', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(38, 'HJSS850RG000037', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.45000, 2.45000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000037.png', NULL, '', '', '', '2025-06-15 09:08:03', '2025-06-15 09:08:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(39, 'HJSS850RG000038', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.92000, 2.92000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000038.png', NULL, '', '', '', '2025-06-15 09:09:03', '2025-06-15 09:09:03', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(40, 'HJSS850RG000039', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.39000, 2.39000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000039.png', NULL, '', '', '', '2025-06-15 09:09:51', '2025-06-15 09:09:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(41, 'HJSS850RG000040', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.30000, 2.30000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000040.png', NULL, '', '', '', '2025-06-15 09:10:50', '2025-06-15 09:10:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(42, 'HJSS850RG000041', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.70000, 2.70000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000041.png', NULL, '', '', '', '2025-06-15 09:11:53', '2025-06-15 09:11:53', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(43, 'HJSS850RG000042', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.10000, 3.10000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000042.png', NULL, '', '', '', '2025-06-15 09:12:44', '2025-06-15 09:12:44', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(44, 'HJSS850RG000043', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.23000, 3.23000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000043.png', NULL, '', '', '', '2025-06-15 09:13:35', '2025-06-15 09:13:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(45, 'HJSS850RG000044', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.64000, 1.64000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000044.png', NULL, '', '', '', '2025-06-15 09:14:43', '2025-06-15 09:14:43', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(46, 'HJSS850RG000045', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.04000, 2.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000045.png', NULL, '', '', '', '2025-06-15 09:15:52', '2025-06-15 09:15:52', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(47, 'HJSS850RG000046', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.94000, 1.94000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000046.png', NULL, '', '', '', '2025-06-15 09:16:56', '2025-06-15 09:16:56', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(48, 'HJSS850RG000047', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.87000, 1.87000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000047.png', NULL, '', '', '', '2025-06-15 09:17:51', '2025-06-15 09:17:51', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(49, 'HJSS850RG000048', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.67000, 1.67000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000048.png', NULL, '', '', '', '2025-06-15 09:18:46', '2025-06-15 09:18:46', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(50, 'HJSS850RG000049', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 4.60000, 4.60000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000049.png', NULL, '', '', '', '2025-06-15 09:19:35', '2025-06-15 09:19:35', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(51, 'HJSS850RG000050', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.90000, 1.90000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000050.png', NULL, '', '', '', '2025-06-15 09:20:30', '2025-06-15 09:20:30', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(52, 'HJSS850RG000051', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.95000, 3.95000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000051.png', NULL, '', '', '', '2025-06-15 09:21:14', '2025-06-15 09:21:14', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(53, 'HJSS850RG000052', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.60000, 1.60000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000052.png', NULL, '', '', '', '2025-06-15 09:21:58', '2025-06-15 09:21:58', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(54, 'HJSS850RG000053', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.62000, 1.62000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000053.png', NULL, '', '', '', '2025-06-15 09:22:42', '2025-06-15 09:22:42', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(55, 'HJSS850RG000054', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.12000, 1.12000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000054.png', NULL, '', '', '', '2025-06-15 09:23:32', '2025-06-15 09:23:32', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(56, 'HJSS850RG000055', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 2.55000, 2.55000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000055.png', NULL, '', '', '', '2025-06-15 09:24:24', '2025-06-15 09:24:24', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(57, 'HJSS850RG000056', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.62000, 1.62000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000056.png', NULL, '', '', '', '2025-06-15 09:25:07', '2025-06-15 09:25:07', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(58, 'HJSS850RG000057', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.67000, 1.67000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000057.png', NULL, '', '', '', '2025-06-15 09:25:54', '2025-06-15 09:25:54', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(59, 'HJSS850RG000058', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.04000, 1.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000058.png', NULL, '', '', '', '2025-06-15 09:26:39', '2025-06-15 09:26:39', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(60, 'HJSS850RG000059', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 1.04000, 1.04000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000059.png', NULL, '', '', '', '2025-06-15 09:27:25', '2025-06-15 09:27:25', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(61, 'HJSS850RG000060', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.51000, 3.51000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000060.png', NULL, '', '', '', '2025-06-15 09:28:08', '2025-06-15 09:28:08', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL),
(62, 'HJSS850RG000061', 0, 1, 'Silver Ring for Women', '', 2, 1, 7, NULL, 'Female', 'Adult Size', 3.03000, 3.03000, NULL, 0, NULL, '', '', NULL, NULL, NULL, 0, '', 0.00000, 0, '', '', '', '', 0, '', '', 0, 0.00000, 0, NULL, 'product_images/silver/standard_silver/silver_product_rings/HJSS850RG000061.png', NULL, '', '', '', '2025-06-15 09:28:50', '2025-06-15 09:28:50', NULL, NULL, '2025-06-15 19:17:00', 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_secondstuds`
--

CREATE TABLE `silver_product_secondstuds` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_studs`
--

CREATE TABLE `silver_product_studs` (
  `id` int(11) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `is_featured` int(11) DEFAULT 0,
  `stock_quantity` int(11) DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `metal_id` int(11) DEFAULT NULL,
  `metalpurity_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Unisex') DEFAULT 'Unisex',
  `size` text DEFAULT NULL,
  `net_weight` decimal(10,5) DEFAULT NULL,
  `gross_weight` decimal(10,5) NOT NULL,
  `product_model` varchar(100) DEFAULT NULL,
  `stone_available` int(11) DEFAULT 0,
  `stone_desc` varchar(100) DEFAULT NULL,
  `stone_color` varchar(100) NOT NULL,
  `stone_shape` text NOT NULL,
  `stone_count` int(11) DEFAULT NULL,
  `stone_weight` decimal(10,5) DEFAULT NULL,
  `stone_cost` int(11) DEFAULT NULL,
  `diamond_available` int(11) NOT NULL,
  `dia_desc` text NOT NULL,
  `dia_cent` decimal(10,5) NOT NULL,
  `dia_count` int(11) NOT NULL,
  `dia_cut` text NOT NULL,
  `dia_color` text NOT NULL,
  `dia_clarity` text NOT NULL,
  `dia_shape` text NOT NULL,
  `beads_available` int(11) NOT NULL,
  `beads_desc` text NOT NULL,
  `beads_color` text NOT NULL,
  `beads_count` int(11) NOT NULL,
  `beads_weight` decimal(10,5) NOT NULL,
  `beads_cost` int(11) NOT NULL,
  `pearls_available` int(11) DEFAULT NULL,
  `pearls_desc` text DEFAULT NULL,
  `pearls_color` text DEFAULT NULL,
  `pearls_count` int(11) DEFAULT NULL,
  `pearls_weight` decimal(10,5) DEFAULT NULL,
  `pearls_cost` int(11) DEFAULT NULL,
  `img1_webp` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `search_keywords` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `verified` int(11) DEFAULT NULL,
  `verified_by` varchar(100) DEFAULT NULL,
  `verified_on` text DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `delist` int(11) DEFAULT 0,
  `supplier_id` int(11) DEFAULT NULL,
  `manufacture_time` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `t_display_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `contact_person`, `address`, `city`, `state`, `zip_code`, `country`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'SilverDummy', 'Silver Dummy', 'x', 'x', 'xc', '123456', 'India', '9666666666', 'dummy@gmail.com', '2025-02-15 06:48:44', '2025-07-13 11:58:44'),
(2, 'SilverDummy', 'Silver Dummy', 'x', 'x', 'x', '123456', 'India', '6666666666', 'dummy@gmail.com', '2025-02-15 06:52:17', '2025-02-15 06:52:17'),
(3, 'Silver Sup 2', 'Suppiler', 'x', 'x', 'x', '123456', 's', '5555555555', 'd@g.c', '2025-02-15 06:56:01', '2025-02-15 06:56:01'),
(4, 'ABC Jewellers', 'John Doe', 'ABC flat 123, dummy place', 'dummy city', 'dummy state', '123456', 'India', '1234567890', 'abc@gmail.com', '2025-06-18 15:19:13', '2025-06-18 19:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_question` varchar(255) NOT NULL,
  `security_answer` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `dob` date NOT NULL DEFAULT '1970-01-01',
  `anniversary` date DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `password`, `security_question`, `security_answer`, `address1`, `address2`, `city`, `state`, `pincode`, `dob`, `anniversary`, `landmark`, `created_at`, `updated_at`) VALUES
(1, 'Neraj Lal S', 'neraj@gmail.com', '8547470675', '8547', 'What city were you born in?', 'Kollam', 'Lal Bhavan Mukkoodu P.O Mulavana', 'Lal Bhavan Mukkoodu P.O Mulavana, Kollam', 'Kollam', 'Kerala', '691503', '2013-06-17', '2025-06-06', 'Hebron school', '2025-05-23 07:59:59', NULL),
(2, 'Neraj Lal S', 'gokul@gmail.com', '8547479651', '2222', 'What city were you born in?', 'Alappuzha', 'Lal Bhavan Mukkoodu P.O Mulavana', 'Lal Bhavan Mukkoodu P.O Mulavana', 'Kollam', 'Kerala', '691504', '1970-01-01', NULL, 'Hebron', '2025-05-23 08:30:45', NULL),
(3, 'Vaishna Sajeev', 'vaishnasreekutty@gmail.com', '7907493414', '2001', 'What was the name of your first school?', 'DIET ATTINGAL', 'parimahal', 'Paivelikkonam  Vettiyara P. O Navaikulam', 'Thiruvananthapuram', 'KERALA', '695603', '1970-01-01', NULL, 'Paivelikkonam Rationkada', '2025-06-11 13:40:26', NULL),
(4, 'Gokul Jayakumar', 'higokul99@gmail.com', '8547349691', '0000', 'What is your favorite book?', 'You can win', 'Kollam', '', 'Kollam', 'Kerala', '691012', '1999-10-12', '2025-06-01', 'Temple', '2025-06-17 11:22:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_schemes`
--

CREATE TABLE `user_schemes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scheme_type` varchar(1) NOT NULL,
  `scheme_name` varchar(50) NOT NULL,
  `monthly_amount` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `months_completed` int(11) DEFAULT 0,
  `status` enum('active','completed','cancelled') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_schemes`
--

INSERT INTO `user_schemes` (`id`, `user_id`, `scheme_type`, `scheme_name`, `monthly_amount`, `start_date`, `months_completed`, `status`, `created_at`, `updated_at`, `code`) VALUES
(3, 1, 'C', 'Elite', 2000.00, '2025-07-09', 0, 'active', '2025-07-09 17:06:22', '2025-07-09 17:06:22', NULL),
(4, 4, 'A', 'Basic', 500.00, '2025-07-13', 11, 'completed', '2025-07-13 12:43:02', '2025-07-13 12:53:38', NULL),
(5, 4, 'B', 'Premium', 1000.00, '2025-07-13', 0, 'active', '2025-07-13 13:33:31', '2025-07-13 13:33:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_wishlist`
--

INSERT INTO `user_wishlist` (`id`, `user_id`, `product_id`, `table_name`, `created_at`) VALUES
(8, 1, 5, '18kgold_product_studs', '2025-06-19 03:00:28'),
(18, 1, 8, '18kgold_product_rings', '2025-06-26 02:01:03'),
(19, 1, 3, '18kgold_product_studs', '2025-06-27 09:35:17'),
(20, 1, 10, '18kgold_product_studs', '2025-06-27 09:35:24'),
(21, 4, 2, '22kgold_product_anklets', '2025-06-27 10:02:55'),
(22, 4, 35, '22kgold_product_necklaces', '2025-07-01 08:09:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `18kdgold_product_anklets`
--
ALTER TABLE `18kdgold_product_anklets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_bangles`
--
ALTER TABLE `18kdgold_product_bangles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_bracelets`
--
ALTER TABLE `18kdgold_product_bracelets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_chains`
--
ALTER TABLE `18kdgold_product_chains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_earrings`
--
ALTER TABLE `18kdgold_product_earrings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_fancychains`
--
ALTER TABLE `18kdgold_product_fancychains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_necklaces`
--
ALTER TABLE `18kdgold_product_necklaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_nosepins`
--
ALTER TABLE `18kdgold_product_nosepins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_pendants`
--
ALTER TABLE `18kdgold_product_pendants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_rings`
--
ALTER TABLE `18kdgold_product_rings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_secondstuds`
--
ALTER TABLE `18kdgold_product_secondstuds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kdgold_product_studs`
--
ALTER TABLE `18kdgold_product_studs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_anklets`
--
ALTER TABLE `18kgold_product_anklets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_bangles`
--
ALTER TABLE `18kgold_product_bangles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_bracelets`
--
ALTER TABLE `18kgold_product_bracelets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_chains`
--
ALTER TABLE `18kgold_product_chains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_earrings`
--
ALTER TABLE `18kgold_product_earrings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_fancychains`
--
ALTER TABLE `18kgold_product_fancychains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_necklaces`
--
ALTER TABLE `18kgold_product_necklaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_nosepins`
--
ALTER TABLE `18kgold_product_nosepins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_pendants`
--
ALTER TABLE `18kgold_product_pendants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_rings`
--
ALTER TABLE `18kgold_product_rings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_secondstuds`
--
ALTER TABLE `18kgold_product_secondstuds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `18kgold_product_studs`
--
ALTER TABLE `18kgold_product_studs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_anklets`
--
ALTER TABLE `22kgold_product_anklets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_bangles`
--
ALTER TABLE `22kgold_product_bangles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_bracelets`
--
ALTER TABLE `22kgold_product_bracelets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_chains`
--
ALTER TABLE `22kgold_product_chains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_earrings`
--
ALTER TABLE `22kgold_product_earrings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_fancychains`
--
ALTER TABLE `22kgold_product_fancychains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_kadas`
--
ALTER TABLE `22kgold_product_kadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_necklaces`
--
ALTER TABLE `22kgold_product_necklaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_nosepins`
--
ALTER TABLE `22kgold_product_nosepins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_pendants`
--
ALTER TABLE `22kgold_product_pendants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_rings`
--
ALTER TABLE `22kgold_product_rings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_secondstuds`
--
ALTER TABLE `22kgold_product_secondstuds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `22kgold_product_studs`
--
ALTER TABLE `22kgold_product_studs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_id` (`cat_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `categories_subs`
--
ALTER TABLE `categories_subs`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD UNIQUE KEY `sil_sub_cat_id` (`sub_cat_id`),
  ADD KEY `sil_cat_id` (`cat_id`);

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
-- Indexes for table `gold_schemes`
--
ALTER TABLE `gold_schemes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scheme_code` (`scheme_code`);

--
-- Indexes for table `gst`
--
ALTER TABLE `gst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_positions`
--
ALTER TABLE `job_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `log_table`
--
ALTER TABLE `log_table`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `maintances`
--
ALTER TABLE `maintances`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `making_charges`
--
ALTER TABLE `making_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metals`
--
ALTER TABLE `metals`
  ADD PRIMARY KEY (`metal_id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `metals_purity`
--
ALTER TABLE `metals_purity`
  ADD PRIMARY KEY (`metalpurity_id`);

--
-- Indexes for table `metals_rates`
--
ALTER TABLE `metals_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metals_rates_history`
--
ALTER TABLE `metals_rates_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `product_activity_log`
--
ALTER TABLE `product_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_codes`
--
ALTER TABLE `product_codes`
  ADD PRIMARY KEY (`product_code_id`),
  ADD UNIQUE KEY `full_code` (`full_code`);

--
-- Indexes for table `product_code_prefix`
--
ALTER TABLE `product_code_prefix`
  ADD PRIMARY KEY (`pc_prefix_id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `rosegold_product_anklets`
--
ALTER TABLE `rosegold_product_anklets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_bangles`
--
ALTER TABLE `rosegold_product_bangles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_bracelets`
--
ALTER TABLE `rosegold_product_bracelets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_chains`
--
ALTER TABLE `rosegold_product_chains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_earrings`
--
ALTER TABLE `rosegold_product_earrings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_fancychains`
--
ALTER TABLE `rosegold_product_fancychains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_necklaces`
--
ALTER TABLE `rosegold_product_necklaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_nosepins`
--
ALTER TABLE `rosegold_product_nosepins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_pendants`
--
ALTER TABLE `rosegold_product_pendants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_rings`
--
ALTER TABLE `rosegold_product_rings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_secondstuds`
--
ALTER TABLE `rosegold_product_secondstuds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `rosegold_product_studs`
--
ALTER TABLE `rosegold_product_studs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `scheme_payments`
--
ALTER TABLE `scheme_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `scheme_id` (`scheme_id`);

--
-- Indexes for table `silver_product_anklets`
--
ALTER TABLE `silver_product_anklets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_bangles`
--
ALTER TABLE `silver_product_bangles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_bracelets`
--
ALTER TABLE `silver_product_bracelets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_chains`
--
ALTER TABLE `silver_product_chains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_earrings`
--
ALTER TABLE `silver_product_earrings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_fancychains`
--
ALTER TABLE `silver_product_fancychains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_kadas`
--
ALTER TABLE `silver_product_kadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_necklaces`
--
ALTER TABLE `silver_product_necklaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_nosepins`
--
ALTER TABLE `silver_product_nosepins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_pendants`
--
ALTER TABLE `silver_product_pendants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_rings`
--
ALTER TABLE `silver_product_rings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_secondstuds`
--
ALTER TABLE `silver_product_secondstuds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `silver_product_studs`
--
ALTER TABLE `silver_product_studs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_metalpurity` (`metalpurity_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `user_schemes`
--
ALTER TABLE `user_schemes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_wishlist_item` (`user_id`,`product_id`,`table_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `18kdgold_product_anklets`
--
ALTER TABLE `18kdgold_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_bangles`
--
ALTER TABLE `18kdgold_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_bracelets`
--
ALTER TABLE `18kdgold_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_chains`
--
ALTER TABLE `18kdgold_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_earrings`
--
ALTER TABLE `18kdgold_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_fancychains`
--
ALTER TABLE `18kdgold_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_necklaces`
--
ALTER TABLE `18kdgold_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `18kdgold_product_nosepins`
--
ALTER TABLE `18kdgold_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_pendants`
--
ALTER TABLE `18kdgold_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_rings`
--
ALTER TABLE `18kdgold_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `18kdgold_product_secondstuds`
--
ALTER TABLE `18kdgold_product_secondstuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kdgold_product_studs`
--
ALTER TABLE `18kdgold_product_studs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kgold_product_anklets`
--
ALTER TABLE `18kgold_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `18kgold_product_bangles`
--
ALTER TABLE `18kgold_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `18kgold_product_bracelets`
--
ALTER TABLE `18kgold_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `18kgold_product_chains`
--
ALTER TABLE `18kgold_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `18kgold_product_earrings`
--
ALTER TABLE `18kgold_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `18kgold_product_fancychains`
--
ALTER TABLE `18kgold_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kgold_product_necklaces`
--
ALTER TABLE `18kgold_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `18kgold_product_nosepins`
--
ALTER TABLE `18kgold_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kgold_product_pendants`
--
ALTER TABLE `18kgold_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `18kgold_product_rings`
--
ALTER TABLE `18kgold_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `18kgold_product_secondstuds`
--
ALTER TABLE `18kgold_product_secondstuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18kgold_product_studs`
--
ALTER TABLE `18kgold_product_studs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `22kgold_product_anklets`
--
ALTER TABLE `22kgold_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `22kgold_product_bangles`
--
ALTER TABLE `22kgold_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `22kgold_product_bracelets`
--
ALTER TABLE `22kgold_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `22kgold_product_chains`
--
ALTER TABLE `22kgold_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `22kgold_product_earrings`
--
ALTER TABLE `22kgold_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `22kgold_product_fancychains`
--
ALTER TABLE `22kgold_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `22kgold_product_kadas`
--
ALTER TABLE `22kgold_product_kadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `22kgold_product_necklaces`
--
ALTER TABLE `22kgold_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `22kgold_product_nosepins`
--
ALTER TABLE `22kgold_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `22kgold_product_pendants`
--
ALTER TABLE `22kgold_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `22kgold_product_rings`
--
ALTER TABLE `22kgold_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `22kgold_product_secondstuds`
--
ALTER TABLE `22kgold_product_secondstuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `22kgold_product_studs`
--
ALTER TABLE `22kgold_product_studs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories_subs`
--
ALTER TABLE `categories_subs`
  MODIFY `sub_cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `goldrate_history`
--
ALTER TABLE `goldrate_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `gold_schemes`
--
ALTER TABLE `gold_schemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gst`
--
ALTER TABLE `gst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `log_table`
--
ALTER TABLE `log_table`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `maintances`
--
ALTER TABLE `maintances`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `making_charges`
--
ALTER TABLE `making_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `metals`
--
ALTER TABLE `metals`
  MODIFY `metal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `metals_purity`
--
ALTER TABLE `metals_purity`
  MODIFY `metalpurity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `metals_rates`
--
ALTER TABLE `metals_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metals_rates_history`
--
ALTER TABLE `metals_rates_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_activity_log`
--
ALTER TABLE `product_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_codes`
--
ALTER TABLE `product_codes`
  MODIFY `product_code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=842;

--
-- AUTO_INCREMENT for table `product_code_prefix`
--
ALTER TABLE `product_code_prefix`
  MODIFY `pc_prefix_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rosegold_product_anklets`
--
ALTER TABLE `rosegold_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rosegold_product_bangles`
--
ALTER TABLE `rosegold_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rosegold_product_bracelets`
--
ALTER TABLE `rosegold_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `rosegold_product_chains`
--
ALTER TABLE `rosegold_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rosegold_product_earrings`
--
ALTER TABLE `rosegold_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rosegold_product_fancychains`
--
ALTER TABLE `rosegold_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rosegold_product_necklaces`
--
ALTER TABLE `rosegold_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `rosegold_product_nosepins`
--
ALTER TABLE `rosegold_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rosegold_product_pendants`
--
ALTER TABLE `rosegold_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rosegold_product_rings`
--
ALTER TABLE `rosegold_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `rosegold_product_secondstuds`
--
ALTER TABLE `rosegold_product_secondstuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_studs`
--
ALTER TABLE `rosegold_product_studs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scheme_payments`
--
ALTER TABLE `scheme_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `silver_product_anklets`
--
ALTER TABLE `silver_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_bangles`
--
ALTER TABLE `silver_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `silver_product_bracelets`
--
ALTER TABLE `silver_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `silver_product_chains`
--
ALTER TABLE `silver_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `silver_product_earrings`
--
ALTER TABLE `silver_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `silver_product_fancychains`
--
ALTER TABLE `silver_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_kadas`
--
ALTER TABLE `silver_product_kadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `silver_product_necklaces`
--
ALTER TABLE `silver_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `silver_product_nosepins`
--
ALTER TABLE `silver_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `silver_product_pendants`
--
ALTER TABLE `silver_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `silver_product_rings`
--
ALTER TABLE `silver_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `silver_product_secondstuds`
--
ALTER TABLE `silver_product_secondstuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_studs`
--
ALTER TABLE `silver_product_studs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_schemes`
--
ALTER TABLE `user_schemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
