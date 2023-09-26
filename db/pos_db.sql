-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 04:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empirict_pos`
--
CREATE DATABASE IF NOT EXISTS `empirict_pos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `empirict_pos`;

-- --------------------------------------------------------

--
-- Table structure for table `access_tbl`
--

CREATE TABLE IF NOT EXISTS `access_tbl` (
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `auth_key` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access_tbl`
--

INSERT INTO `access_tbl` (`firstname`, `middlename`, `lastname`, `auth_key`) VALUES
('edoK', 'edaM', 'yzaE', '3Tf81kBk4Exy5NsL5MGxChhEWuDaqhQWvoDJRXGxTF34DyPMzy');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'Syrup', 'Active', '2023-03-29'),
(3, 'Tablets', 'Active', '2023-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderId` bigint(20) NOT NULL AUTO_INCREMENT,
  `invoiceNo` varchar(100) NOT NULL,
  `total` double(10,2) NOT NULL,
  `paid` double(10,2) NOT NULL DEFAULT 0.00,
  `notes` text DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Paid',
  `customer` varchar(225) DEFAULT NULL,
  `trans_date` datetime NOT NULL DEFAULT current_timestamp(),
  `paymentType` varchar(50) DEFAULT NULL,
  `due` double NOT NULL,
  `cashier_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `itemId` bigint(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` bigint(20) NOT NULL,
  `product` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `subtotal` double NOT NULL,
  `trans_date` date NOT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `proId` bigint(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(50) DEFAULT NULL,
  `name` varchar(225) NOT NULL,
  `prod_desc` text NOT NULL,
  `cost_price` double(10,2) NOT NULL DEFAULT 0.00,
  `profit` double(10,2) NOT NULL DEFAULT 0.00,
  `selling_price` double(10,2) NOT NULL DEFAULT 0.00,
  `qty` int(11) NOT NULL DEFAULT 0,
  `barcode` varchar(100) NOT NULL,
  `supId` int(11) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `wareId` int(11) DEFAULT NULL,
  `mft_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`proId`),
  UNIQUE KEY `barcode` (`barcode`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo_tbl`
--

CREATE TABLE IF NOT EXISTS `promo_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon` varchar(50) NOT NULL,
  `prodId` bigint(20) DEFAULT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `promo_type` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 2 COMMENT '1=active,2=inactive,3=future plan',
  `coupon_limit` int(5) NOT NULL,
  `wareId` int(11) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(225) DEFAULT NULL,
  `company` varchar(225) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fullname` (`fullname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userType` varchar(100) DEFAULT NULL,
  `full_name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `login_datetime` datetime DEFAULT NULL,
  `logout_datetime` datetime DEFAULT NULL,
  `token` text DEFAULT NULL,
  `avatar` varchar(225) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userType`, `full_name`, `email`, `username`, `password`, `active`, `status`, `login_datetime`, `logout_datetime`, `token`, `avatar`, `created_at`) VALUES
(1, 'Administrator', 'Admin', 'admin@kme.com', 'kodemadeeazy', '$2y$10$MdRIXMH1jnV/8Cw8hCUrveL/pSivAtYP25TIm3habWru8Iowk/5gq', 1, 0, '2023-05-16 15:40:24', '2023-05-16 15:38:56', NULL, NULL, '2023-03-18 21:28:21'),
(2, 'Cashier', 'Cashier', 'cashier@kme.com', 'ovayoza', '$2y$10$qUw/iATXLfK/FnYBGOWHBudqbHk7zfE1VIIJhHSLh4gZQngKW1X.u', 0, 0, '2023-04-22 15:19:25', '2023-04-22 15:22:00', NULL, NULL, '2023-03-25 17:26:12'),
(3, 'Cashier', 'Cashier', 'cashier_@kme.com', 'lizzy', '$2y$10$qUw/iATXLfK/FnYBGOWHBudqbHk7zfE1VIIJhHSLh4gZQngKW1X.u', 1, 0, NULL, '2023-03-27 16:10:54', NULL, NULL, '2023-03-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_token_tbl`
--

CREATE TABLE IF NOT EXISTS `user_token_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `token` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_token_tbl`
--

INSERT INTO `user_token_tbl` (`id`, `email`, `token`) VALUES
(1, 'admin@kme.com', 'uOxnvzRxnwiWEVjjbKNEX8uYop3hTVzEuRMQVs8vmm9mYQzSQM9w7NmXrhXU5CQVH6tY50OyEPK71GCgz1l06menBo5E6xeNOmttc'),
(2, 'cashier@kme.com', NULL),
(3, 'cashier_@kme.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE IF NOT EXISTS `warehouses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(225) DEFAULT NULL,
  `manager` varchar(225) DEFAULT NULL,
  `store_location` text DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
