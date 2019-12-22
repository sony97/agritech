-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 08:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agritech`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `fullname`, `state`, `city`, `country`, `payment_type`, `user_id`, `pincode`, `created_at`, `updated_at`) VALUES
(33, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 01:55:57', '2019-07-02 01:55:57'),
(34, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 01:56:45', '2019-07-02 01:56:45'),
(35, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 01:58:18', '2019-07-02 01:58:18'),
(36, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 01:59:07', '2019-07-02 01:59:07'),
(37, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 02:03:25', '2019-07-02 02:03:25'),
(38, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 02:04:43', '2019-07-02 02:04:43'),
(39, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 02:06:30', '2019-07-02 02:06:30'),
(40, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 02:07:45', '2019-07-02 02:07:45'),
(41, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 02:08:16', '2019-07-02 02:08:16'),
(42, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'COD', 1, '576222', '2019-07-02 02:10:35', '2019-07-02 02:10:35'),
(43, 'Sony Joseph', 'Karnataka', 'Barkur', 'India', 'COD', 1, '576244', '2019-07-04 02:23:07', '2019-07-04 02:23:07'),
(44, 'Raghu', 'Karnataka', 'Udupi', 'Canada', 'COD', 1, '576222', '2019-07-04 02:24:27', '2019-07-04 02:24:27'),
(45, 'Sony Joseph', 'Karnataka', 'Barkur', 'India', 'COD', 1, '576244', '2019-07-04 02:30:25', '2019-07-04 02:30:25'),
(46, 'Raghu shetty', 'Karnataka', 'Barkur', 'India', 'COD', 1, '576222', '2019-07-04 02:31:47', '2019-07-04 02:31:47'),
(47, 'Raghu shetty', 'Karnataka', 'Barkur', 'India', 'COD', 1, '576222', '2019-07-04 02:31:47', '2019-07-04 02:31:47'),
(48, 'Ajay selva', 'Karnataka', 'Katpadi', 'India', 'COD', 1, '576222', '2019-07-04 02:40:28', '2019-07-04 02:40:28'),
(49, 'Sony Joseph', 'Karnataka', 'Udupi', 'India', 'COD', 1, '576222', '2019-07-04 03:51:04', '2019-07-04 03:51:04'),
(50, 'Sony Joseph', 'Karnataka', 'Halady', 'India', 'paypal', 1, '576222', '2019-07-05 01:07:23', '2019-07-05 01:07:23'),
(51, 'Tony Joseph', 'Karnataka', 'Barkur', 'India', 'COD', 4, '576222', '2019-07-06 00:35:05', '2019-07-06 00:35:05'),
(52, 'Sony Joseph', 'Karnataka', 'Katpadi', 'India', 'COD', 3, '576222', '2019-07-08 02:14:38', '2019-07-08 02:14:38'),
(53, 'Sony Joseph', 'Karnataka', 'Udupi', 'India', 'COD', 3, '576222', '2019-07-08 23:05:32', '2019-07-08 23:05:32'),
(54, 'Raghu shetty', 'Karnataka', 'Udupi', 'India', 'COD', 4, '576222', '2019-07-09 03:21:56', '2019-07-09 03:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Chain Saw', '2019-06-29 11:37:43', '2019-06-29 11:37:43'),
(2, 'Lawn Mover', '2019-06-29 11:37:46', '2019-06-29 11:37:46'),
(3, 'Watering Systems', '2019-06-29 11:37:51', '2019-06-29 11:37:51'),
(4, 'Tillers and Cultivators', '2019-07-08 09:14:27', '2019-07-08 09:14:27'),
(5, 'Seed Planter', '2019-07-08 09:14:45', '2019-07-08 09:14:45'),
(6, 'Earth Auger', '2019-07-08 09:15:10', '2019-07-08 09:15:10'),
(7, 'Sprayers', '2019-07-08 09:15:33', '2019-07-08 09:15:33'),
(8, 'Brush Cutters', '2019-07-08 09:15:54', '2019-07-08 09:15:54'),
(9, 'Sprayer Motor', '2019-07-09 03:20:53', '2019-07-09 03:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_06_28_110547_add_admin_column_to_users', 1),
(9, '2019_06_29_133009_create_products_table', 1),
(10, '2019_06_29_145421_create_categories_table', 1),
(11, '2019_06_29_162003_create_address_table', 1),
(12, '2019_06_29_162050_create_orders_table', 1),
(14, '2019_06_29_162216_create_wishlist_table', 1),
(15, '2019_06_29_162303_create_recommends_table', 1),
(17, '2019_06_29_162129_create_orders_product_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'pending', '4,904.13', 1, '2019-07-01 04:50:36', '2019-07-01 04:50:36'),
(2, 'pending', '4,904.13', 1, '2019-07-01 04:52:29', '2019-07-01 04:52:29'),
(3, 'pending', '4,904.13', 1, '2019-07-01 04:54:29', '2019-07-01 04:54:29'),
(4, 'pending', '4,904.13', 1, '2019-07-01 22:23:31', '2019-07-01 22:23:31'),
(5, 'pending', '4,904.13', 1, '2019-07-01 22:28:26', '2019-07-01 22:28:26'),
(6, 'pending', '0.00', 1, '2019-07-01 22:30:57', '2019-07-01 22:30:57'),
(7, 'pending', '0.00', 1, '2019-07-01 22:31:50', '2019-07-01 22:31:50'),
(8, 'pending', '0.00', 1, '2019-07-01 22:33:02', '2019-07-01 22:33:02'),
(9, 'pending', '0.00', 1, '2019-07-01 22:33:55', '2019-07-01 22:33:55'),
(29, 'pending', '21,423.05', 1, '2019-07-02 01:50:22', '2019-07-02 01:50:22'),
(30, 'pending', '6,710.66', 1, '2019-07-02 01:51:35', '2019-07-02 01:51:35'),
(31, 'pending', '4,904.13', 1, '2019-07-02 01:55:57', '2019-07-02 01:55:57'),
(32, 'pending', '11,614.79', 1, '2019-07-02 01:56:45', '2019-07-02 01:56:45'),
(33, 'pending', '6,710.66', 1, '2019-07-02 01:58:18', '2019-07-02 01:58:18'),
(34, 'pending', '6,710.66', 1, '2019-07-02 01:59:08', '2019-07-02 01:59:08'),
(35, 'pending', '4,904.13', 1, '2019-07-02 02:03:25', '2019-07-02 02:03:25'),
(36, 'pending', '6,710.66', 1, '2019-07-02 02:04:43', '2019-07-02 02:04:43'),
(37, 'pending', '6,710.66', 1, '2019-07-02 02:06:30', '2019-07-02 02:06:30'),
(38, 'pending', '6,710.66', 1, '2019-07-02 02:07:45', '2019-07-02 02:07:45'),
(39, 'pending', '11,614.79', 1, '2019-07-02 02:08:16', '2019-07-02 02:08:16'),
(40, 'pending', '25,036.11', 1, '2019-07-02 02:10:35', '2019-07-02 02:10:35'),
(41, 'pending', '6,710.66', 1, '2019-07-04 02:23:07', '2019-07-04 02:23:07'),
(42, 'pending', '6,710.66', 1, '2019-07-04 02:24:27', '2019-07-04 02:24:27'),
(43, 'pending', '16,518.92', 1, '2019-07-04 02:30:25', '2019-07-04 02:30:25'),
(44, 'pending', '4,904.13', 1, '2019-07-04 02:31:47', '2019-07-04 02:31:47'),
(45, 'pending', '0.00', 1, '2019-07-04 02:31:47', '2019-07-04 02:31:47'),
(46, 'pending', '6,710.66', 1, '2019-07-04 02:40:28', '2019-07-04 02:40:28'),
(47, 'pending', '4,904.13', 1, '2019-07-04 03:51:05', '2019-07-04 03:51:05'),
(48, 'pending', '4,904.13', 1, '2019-07-05 01:07:24', '2019-07-05 01:07:24'),
(49, 'pending', '4,904.13', 4, '2019-07-06 00:35:05', '2019-07-06 00:35:05'),
(50, 'pending', '6,710.66', 3, '2019-07-08 02:14:38', '2019-07-08 02:14:38'),
(51, 'pending', '4,904.13', 3, '2019-07-08 23:05:32', '2019-07-08 23:05:32'),
(52, 'pending', '4,904.13', 4, '2019-07-09 03:21:56', '2019-07-09 03:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `order_model_products_model`
--

CREATE TABLE `order_model_products_model` (
  `id` int(10) UNSIGNED NOT NULL,
  `tax` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `products_model_id` int(11) NOT NULL,
  `order_model_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_model_products_model`
--

INSERT INTO `order_model_products_model` (`id`, `tax`, `total`, `products_model_id`, `order_model_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, '851', 4053, 2, 5, 1, NULL, NULL),
(2, '851', 4053, 2, 31, 1, NULL, NULL),
(3, '851', 4053, 2, 35, 1, NULL, NULL),
(4, '1', 5546, 1, 38, 1, NULL, NULL),
(5, '2', 4053, 2, 39, 1, NULL, NULL),
(6, '2', 5546, 1, 39, 1, NULL, NULL),
(7, '4', 16638, 1, 40, 3, NULL, NULL),
(8, '4', 4053, 2, 40, 1, NULL, NULL),
(9, '1,164.66', 5546, 1, 41, 1, NULL, NULL),
(10, '1,164.66', 5546, 1, 42, 1, NULL, NULL),
(11, '2,866.92', 8106, 2, 43, 2, NULL, NULL),
(12, '2,866.92', 5546, 1, 43, 1, NULL, NULL),
(13, '851.13', 4053, 2, 44, 1, NULL, NULL),
(14, '1,164.66', 5546, 1, 46, 1, NULL, NULL),
(15, '851.13', 4053, 2, 47, 1, NULL, NULL),
(16, '851.13', 4053, 2, 48, 1, NULL, NULL),
(17, '851.13', 4053, 2, 49, 1, NULL, NULL),
(18, '1,164.66', 5546, 1, 50, 1, NULL, NULL),
(19, '851.13', 4053, 2, 51, 1, NULL, NULL),
(20, '851.13', 4053, 2, 52, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sonyjoseph2097@gmail.com', '$2y$10$xDhdHkNxzAGVyflFdixP..wxbASG20Tf2F44Xew.Ri97hgNoADXXq', '2019-07-08 07:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spl_price` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_code`, `pro_price`, `pro_info`, `stock`, `category_id`, `image`, `spl_price`, `created_at`, `updated_at`) VALUES
(1, 'Makita ELM3711 Electric Lawn Mower', 'LM100', '9780', 'Cleaning your garden is no more a daunting task with this quick and easy to use lawn mover. This electric lawn mover comes to you from the house of Makita that makes it a highly reliable product. This self driven machine is light in weight that ensures better and convenient operations in small gardens.', 8, 2, 'Lawn_Mover.jpg', '5546', '2019-06-29 11:43:20', '2019-06-29 11:43:20'),
(2, 'AgriPro Gasoline Chain Saw 58 CC APCS58', 'CS100', '6200', 'AgriPro Gasoline Chain Saw is ideal for the most challenging jobs including cutting logs for the fire with ease! It has anti vibration system which makes the operation of this machine easy as well as efficient. It is ergonomically designed and possess a powerful motor to perform prominently. Minimal effort is required to operate as it has an inbuilt smart start feature.', 5, 1, 'chain.jpg', '4053', '2019-06-29 12:07:19', '2019-06-29 12:07:19'),
(3, 'Kisankraft Agricultural Inter Cultivator KK-IC-250D', 'TC100', '64826', 'Buy Kisankraft Agricultural Inter Cultivator KK-IC-250D online in India at wholesale rates. If you have been looking for Kisankraft Agricultural Inter Cultivator KK-IC-250D dealers, your search ends here as you can get the best Kisankraft Agricultural Inter Cultivator KK-IC-250D distributors in top cities such as Delhi NCR, Mumbai, Chennai, Bengaluru, Kolkata, Chennai, Pune, Jaipur, Hyderabad and Ahmedabad. You can purchase Kisankraft Agricultural Inter Cultivator KK-IC-250D of the finest quality and rest assured to get the best in terms of both durability and performance.', 8, 4, 'KK-IC250D(400)-500x554.jpg', '53153', '2019-07-08 09:31:22', '2019-07-08 09:31:22'),
(4, 'Neptune Power Sprayer767 4 Stroke', 'SP100', '30500', 'Neptune Power Sprayers are conventional and most popular equipments used world wide. They are ideal to spray insecticides, pesticides, fungicides, herbicides etc. in field areas to protect the crop from pest attack.', 10, 7, 'neptune-pressure-trolley-sprayer-ps-50-500x500.png', '25800', '2019-07-08 09:37:03', '2019-07-08 09:37:03'),
(5, 'KBI Earth Drill KB11ED2S 1.74 HP', 'EA100', '14850', 'Buy KBI Earth Drill KB11ED2S 1.74 HP online in India at wholesale rates. If you have been looking for KBI Earth Drill KB11ED2S 1.74 HP dealers, your search ends here as you can get the best KBI Earth Drill KB11ED2S 1.74 HP distributors in top cities such as Delhi NCR, Mumbai, Chennai, Bengaluru, Kolkata, Chennai, Pune, Jaipur, Hyderabad and Ahmedabad. You can purchase KBI Earth Drill KB11ED2S 1.74 HP of the finest quality and rest assured to get the best in terms of both durability and performance.', 10, 6, 'AG.EA.596178.jpg', '12580', '2019-07-08 09:45:37', '2019-07-08 09:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `recommends`
--

CREATE TABLE `recommends` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(12) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `admin`, `email`, `profile`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Sony', 918073604549, 1, 'sonyjoseph2097@gmail.com', 'default.png', '$2y$10$a0QmYJ/sn4FuAYuNFyhcReOfZ5wXBuBT3Uail/ss31vXlcNgx7IJO', '14HWsQCKiDPqAYdQVz1qsCruyPgU9GD6PBoUu0Lh3LG1wPOE9f1n6YJ6DNx8', '2019-07-05 09:37:38', '2019-07-05 09:37:38'),
(4, 'Tony', NULL, NULL, 'josephsebastian9565@gmail.com', 'default.png', '$2y$10$QKskJQ7gBwIYt/Db7bcYqOCgVjeZ2heZw2ADXBbCNKAYgTYa/JqzC', 'qMABcIPg2xX7yrHsmiC5I5Rln6PcVUD1jCsZlcPDZYYuvK94pKpnuEc1Rb8s', '2019-07-05 11:02:46', '2019-07-05 11:02:46'),
(5, 'Ajay', NULL, NULL, 'ajayselva@gmail.com', 'default.png', '$2y$10$Dso1dl2bnAvMTB2Y.crl5u9kB7MbnMFlUF1YwY3zf4iP/NX9qQ7he', 'FMDvstTPKNEov7w3GT72jcIwbXO0PkyIIj8lFZhEBbZkoLnRbFsflnTbANuh', '2019-07-05 12:54:38', '2019-07-05 12:54:38'),
(7, 'bibin', 918277465506, NULL, 'bibin@gmail.com', 'default.png', '$2y$10$5PZ85tGO19XoMN2a9dM2v.IT5E2SqhmT6jRom4pMqN7WJMTBrRGOe', 'eGoM0TPulbC02PL3JwPJpq5jzF6rs0swh21Ssf68t31uNzFFVtAJHnBKyTpR', '2019-07-08 01:22:27', '2019-07-08 01:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_model_products_model`
--
ALTER TABLE `order_model_products_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommends`
--
ALTER TABLE `recommends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `order_model_products_model`
--
ALTER TABLE `order_model_products_model`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recommends`
--
ALTER TABLE `recommends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
