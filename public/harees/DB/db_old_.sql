-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2025 at 09:35 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `metals`
--

CREATE TABLE `metals` (
  `metal_id` int(11) NOT NULL,
  `code` char(1) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `model_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `product_code_prefix`
--

CREATE TABLE `product_code_prefix` (
  `pc_prefix_id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_bangles`
--
ALTER TABLE `18kdgold_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_bracelets`
--
ALTER TABLE `18kdgold_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_chains`
--
ALTER TABLE `18kdgold_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_earrings`
--
ALTER TABLE `18kdgold_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_fancychains`
--
ALTER TABLE `18kdgold_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_necklaces`
--
ALTER TABLE `18kdgold_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_nosepins`
--
ALTER TABLE `18kdgold_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_pendants`
--
ALTER TABLE `18kdgold_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_rings`
--
ALTER TABLE `18kdgold_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_secondstuds`
--
ALTER TABLE `18kdgold_product_secondstuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kdgold_product_studs`
--
ALTER TABLE `18kdgold_product_studs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_anklets`
--
ALTER TABLE `18kgold_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_bangles`
--
ALTER TABLE `18kgold_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_bracelets`
--
ALTER TABLE `18kgold_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_chains`
--
ALTER TABLE `18kgold_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_earrings`
--
ALTER TABLE `18kgold_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_fancychains`
--
ALTER TABLE `18kgold_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_necklaces`
--
ALTER TABLE `18kgold_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_nosepins`
--
ALTER TABLE `18kgold_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_pendants`
--
ALTER TABLE `18kgold_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_rings`
--
ALTER TABLE `18kgold_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_secondstuds`
--
ALTER TABLE `18kgold_product_secondstuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `18kgold_product_studs`
--
ALTER TABLE `18kgold_product_studs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_anklets`
--
ALTER TABLE `22kgold_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_bangles`
--
ALTER TABLE `22kgold_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_bracelets`
--
ALTER TABLE `22kgold_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_chains`
--
ALTER TABLE `22kgold_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_earrings`
--
ALTER TABLE `22kgold_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_fancychains`
--
ALTER TABLE `22kgold_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_kadas`
--
ALTER TABLE `22kgold_product_kadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_necklaces`
--
ALTER TABLE `22kgold_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_nosepins`
--
ALTER TABLE `22kgold_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_pendants`
--
ALTER TABLE `22kgold_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_rings`
--
ALTER TABLE `22kgold_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_secondstuds`
--
ALTER TABLE `22kgold_product_secondstuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `22kgold_product_studs`
--
ALTER TABLE `22kgold_product_studs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories_subs`
--
ALTER TABLE `categories_subs`
  MODIFY `sub_cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goldrate_history`
--
ALTER TABLE `goldrate_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gold_schemes`
--
ALTER TABLE `gold_schemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gst`
--
ALTER TABLE `gst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_table`
--
ALTER TABLE `log_table`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintances`
--
ALTER TABLE `maintances`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `making_charges`
--
ALTER TABLE `making_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metals`
--
ALTER TABLE `metals`
  MODIFY `metal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metals_purity`
--
ALTER TABLE `metals_purity`
  MODIFY `metalpurity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metals_rates`
--
ALTER TABLE `metals_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metals_rates_history`
--
ALTER TABLE `metals_rates_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_activity_log`
--
ALTER TABLE `product_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_codes`
--
ALTER TABLE `product_codes`
  MODIFY `product_code_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_code_prefix`
--
ALTER TABLE `product_code_prefix`
  MODIFY `pc_prefix_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_anklets`
--
ALTER TABLE `rosegold_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_bangles`
--
ALTER TABLE `rosegold_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_bracelets`
--
ALTER TABLE `rosegold_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_chains`
--
ALTER TABLE `rosegold_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_earrings`
--
ALTER TABLE `rosegold_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_fancychains`
--
ALTER TABLE `rosegold_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_necklaces`
--
ALTER TABLE `rosegold_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_nosepins`
--
ALTER TABLE `rosegold_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_pendants`
--
ALTER TABLE `rosegold_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rosegold_product_rings`
--
ALTER TABLE `rosegold_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_anklets`
--
ALTER TABLE `silver_product_anklets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_bangles`
--
ALTER TABLE `silver_product_bangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_bracelets`
--
ALTER TABLE `silver_product_bracelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_chains`
--
ALTER TABLE `silver_product_chains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_earrings`
--
ALTER TABLE `silver_product_earrings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_fancychains`
--
ALTER TABLE `silver_product_fancychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_kadas`
--
ALTER TABLE `silver_product_kadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_necklaces`
--
ALTER TABLE `silver_product_necklaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_nosepins`
--
ALTER TABLE `silver_product_nosepins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_pendants`
--
ALTER TABLE `silver_product_pendants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `silver_product_rings`
--
ALTER TABLE `silver_product_rings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_schemes`
--
ALTER TABLE `user_schemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
