-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03.04.2022 klo 18:51
-- Palvelimen versio: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kk_db`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Example 1'),
(2, 'example 2');

-- --------------------------------------------------------

--
-- Rakenne taululle `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float DEFAULT NULL,
  `order_transaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_currency`, `order_status`) VALUES
(44, 345, '3453456', 'EUR', 'Completed'),
(45, 345, '3453456', 'EUR', 'Completed');

-- --------------------------------------------------------

--
-- Rakenne taululle `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_page_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_page_main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `product_image`, `product_image_admin`, `product_short_description`, `product_page_image`, `product_page_main_image`) VALUES
(1, 'product 1', 1, 19.99, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt luctus erat tincidunt tempor. Nam suscipit ipsum ut purus bibendum, et ultrices velit tristique. Sed vitae dui rhoncus, interdum odio nec, aliquet arcu. In hendrerit, massa eget semper sollicitudin, ex augue vestibulum eros, pulvinar tristique mauris erat non lacus. Cras eget sagittis enim. Duis eleifend, leo ut tempor molestie, arcu dui faucibus elit,', 'https://via.placeholder.com/283x322', 'https://via.placeholder.com/335x249', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus velit massa, sed condimentum felis vestibulum non. In felis nibh, tincidunt in nunc ac, lacinia ornare tellu', 'https://via.placeholder.com/76x91', 'https://via.placeholder.com/370x370'),
(2, 'product 2', 2, 24.99, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt luctus erat tincidunt tempor. Nam suscipit ipsum ut purus bibendum, et ultrices velit tristique. Sed vitae dui rhoncus, interdum odio nec, aliquet arcu. In hendrerit, massa eget semper sollicitudin, ex augue vestibulum eros, pulvinar tristique mauris erat non lacus. Cras eget sagittis enim. Duis eleifend, leo ut tempor molestie, arcu dui faucibus elit,', 'https://via.placeholder.com/283x322', 'https://via.placeholder.com/335x249', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus velit massa, sed condimentum felis vestibulum non. In felis nibh, tincidunt in nunc ac, lacinia ornare tellu', 'https://via.placeholder.com/76x91', 'https://via.placeholder.com/370x370'),
(3, 'product 3', 3, 24.99, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt luctus erat tincidunt tempor. Nam suscipit ipsum ut purus bibendum, et ultrices velit tristique. Sed vitae dui rhoncus, interdum odio nec, aliquet arcu. In hendrerit, massa eget semper sollicitudin, ex augue vestibulum eros, pulvinar tristique mauris erat non lacus. Cras eget sagittis enim. Duis eleifend, leo ut tempor molestie, arcu dui faucibus elit,', 'https://via.placeholder.com/283x322', 'https://via.placeholder.com/335x249', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus velit massa, sed condimentum felis vestibulum non. In felis nibh, tincidunt in nunc ac, lacinia ornare tellu', 'https://via.placeholder.com/76x91', 'https://via.placeholder.com/370x370');

-- --------------------------------------------------------

--
-- Rakenne taululle `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `report`
--

INSERT INTO `report` (`report_id`, `product_id`, `order_id`, `product_price`, `product_title`, `product_quantity`) VALUES
(1, 1, 0, 59.97, '', 3),
(2, 1, 0, 59.97, '', 3),
(3, 1, 0, 59.97, '', 3),
(4, 1, 0, 59.97, '', 3),
(5, 1, 0, 59.97, '', 3),
(6, 1, 32, 59.97, '', 3),
(7, 1, 33, 59.97, '', 3),
(8, 1, 34, 59.97, 'product 1', 3),
(9, 1, 35, 59.97, 'product 1', 3),
(10, 1, 36, 59.97, 'product 1', 3),
(11, 2, 37, 24.99, 'product 2', 1),
(12, 4, 38, 24.99, 'product 4', 1),
(13, 1, 39, 39.98, 'product 1', 2),
(14, 1, 40, 19.99, 'product 1', 1),
(15, 3, 41, 24.99, 'product 3', 1),
(16, 1, 42, 19.99, 'product 1', 1),
(17, 3, 43, 24.99, 'product 3', 1),
(18, 2, 44, 24.99, 'product 2', 1),
(19, 3, 45, 24.99, 'product 3', 1);

-- --------------------------------------------------------

--
-- Rakenne taululle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'trung', 'terry777@windowslive.com', '123456'),
(2, 'test', 'tatrung1301@gmail.com', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
