-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 10:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`, `created_at`, `updated_at`) VALUES
(1, 'Cardinal Cod', 'car@gmail.com', '7000', '2022-09-12 15:18:34', '2022-09-17 06:15:12'),
(2, 'Yamour Ouz', 'yam@gmail.com', '78000', '2022-09-12 15:18:34', '2022-09-17 06:14:13'),
(3, 'William Wolay', 'william@gmail.com', '36320', '2022-09-12 15:18:34', '2022-09-13 05:32:22'),
(4, 'Alex Many Karttunen', 'alex@gmail.com', '90400', '2022-09-12 15:18:34', '2022-09-17 06:09:56'),
(5, 'Keskuskatu Karttunen', 'kes@gmail.com', '93000', '2022-09-12 15:18:34', '2022-09-17 06:15:12'),
(6, 'Matti Karttunen', 'mat@gmail.com', '11000', '2022-09-12 15:18:34', '2022-09-17 06:08:16'),
(7, 'Wilman Kala', 'will@gmail.com', '690000', '2022-09-12 15:18:34', '2022-09-17 06:08:16'),
(8, 'Karl Jablonski', 'kar@gmail.com', '126000', '2022-09-12 15:18:34', '2022-09-17 06:10:49'),
(9, 'White Clover Markets', 'whi@gmail.com', '40000', '2022-09-12 15:18:34', '2022-09-16 11:35:07'),
(10, 'Wolski Zbyszek', 'wol@gmail.com', '96000', '2022-09-12 15:18:34', '2022-09-13 06:38:01');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_11_152633_create_transfers_table', 1),
(6, '2022_09_12_123105_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transferred_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `sender_email`, `receiver_email`, `transferred_amount`, `sender_balance`, `receiver_balance`, `status`, `created_at`, `updated_at`) VALUES
(15, 'wol@gmail.com', 'alex@gmail.com', '4000', '96000', '5400', 'Done', '2022-09-13 06:38:01', '2022-09-13 06:38:01'),
(16, 'will@gmail.com', 'kar@gmail.com', '5000', '695000', '90000', 'Done', '2022-09-13 06:42:09', '2022-09-13 06:42:09'),
(17, 'will@gmail.com', 'kar@gmail.com', '5000', '695000', '90000', 'Done', '2022-09-13 06:42:47', '2022-09-13 06:42:47'),
(18, 'whi@gmail.com', 'kar@gmail.com', '10000', '0', '100000', 'Done', '2022-09-16 11:32:43', '2022-09-16 11:32:43'),
(19, 'kar@gmail.com', 'whi@gmail.com', '20000', '80000', '20000', 'Done', '2022-09-16 11:34:14', '2022-09-16 11:34:14'),
(20, 'kar@gmail.com', 'whi@gmail.com', '20000', '60000', '40000', 'Done', '2022-09-16 11:35:07', '2022-09-16 11:35:07'),
(21, 'alex@gmail.com', 'car@gmail.com', '5000', '400', '25000', 'Done', '2022-09-16 11:36:24', '2022-09-16 11:36:24'),
(22, 'alex@gmail.com', 'mat@gmail.com', '400', '0', '10400', 'Done', '2022-09-16 22:02:13', '2022-09-16 22:02:13'),
(26, 'yam@gmail.com', 'kar@gmail.com', '70000', '670215', '130000', 'Done', '2022-09-17 05:59:25', '2022-09-17 05:59:25'),
(27, 'yam@gmail.com', 'alex@gmail.com', '76000', '594215', '76000', 'Done', '2022-09-17 06:00:35', '2022-09-17 06:00:35'),
(28, 'yam@gmail.com', 'alex@gmail.com', '10000', '49000', '86000', 'Done', '2022-09-17 06:02:40', '2022-09-17 06:02:40'),
(29, 'car@gmail.com', 'yam@gmail.com', '25000', '0', '74000', 'Done', '2022-09-17 06:04:12', '2022-09-17 06:04:12'),
(31, 'mat@gmail.com', 'alex@gmail.com', '4000', '6400', '90000', 'Done', '2022-09-17 06:05:14', '2022-09-17 06:05:14'),
(32, 'mat@gmail.com', 'car@gmail.com', '400', '6000', '400', 'Done', '2022-09-17 06:06:30', '2022-09-17 06:06:30'),
(33, 'will@gmail.com', 'mat@gmail.com', '5000', '690000', '11000', 'Done', '2022-09-17 06:08:15', '2022-09-17 06:08:15'),
(37, 'car@gmail.com', 'kes@gmail.com', '4000', '0', '104000', 'Done', '2022-09-17 06:12:12', '2022-09-17 06:12:12'),
(38, 'car@gmail.com', 'kes@gmail.com', '40', '0', '104000', 'Failed', '2022-09-17 06:12:24', '2022-09-17 06:12:24'),
(39, 'kes@gmail.com', 'yam@gmail.com', '4000', '100000', '78000', 'Done', '2022-09-17 06:14:13', '2022-09-17 06:14:13'),
(40, 'car@gmail.com', 'kes@gmail.com', '400000', '0', '100000', 'Failed', '2022-09-17 06:14:41', '2022-09-17 06:14:41'),
(41, 'kes@gmail.com', 'car@gmail.com', '7000', '93000', '7000', 'Done', '2022-09-17 06:15:12', '2022-09-17 06:15:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
