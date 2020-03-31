-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 08:55 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mistry`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GstNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `name`, `mobileNo`, `GstNo`, `total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'yug', '7621005549', '7748887378', 200, '2020-03-02 14:25:16', '2020-03-18 14:25:21', '2020-03-12 16:09:59'),
(2, 'shubh', '', '', 0, '2020-03-12 09:14:16', '2020-03-12 09:14:16', '2020-03-12 16:09:59'),
(3, 'shubh', '', '', 0, '2020-03-12 09:14:42', '2020-03-12 09:14:42', '2020-03-12 16:09:59'),
(5, 'shubh', '', '', 0, '2020-03-12 09:14:57', '2020-03-12 09:14:57', '2020-03-12 16:09:59'),
(6, 'shubh', '', '', 0, '2020-03-12 09:15:04', '2020-03-12 09:15:04', '2020-03-12 16:09:59'),
(7, 'test', '', '', 0, '2020-03-12 09:15:16', '2020-03-12 09:15:16', '2020-03-12 16:09:59'),
(8, 'shubh', '2343', '', 0, '2020-03-12 09:19:44', '2020-03-12 09:19:44', '2020-03-12 16:09:59'),
(9, 'yug', '6355250915', '', 0, '2020-03-12 09:20:23', '2020-03-12 09:20:23', '2020-03-12 16:09:59'),
(10, 'test', '1231', '', 0, '2020-03-12 10:30:15', '2020-03-12 10:30:15', '2020-03-12 16:09:59'),
(11, 'bharat mandaliya', '76768', '', 0, '2020-03-12 10:30:24', '2020-03-12 10:30:24', '2020-03-12 16:09:59'),
(12, 'shubh', '6355250915', '3543234', 500, '2020-03-12 10:31:56', '2020-03-12 10:31:56', '0000-00-00 00:00:00'),
(13, 'shubh', '6355250915', '3543234', NULL, '2020-03-12 10:42:56', '2020-03-12 10:42:56', '2020-03-12 16:13:20'),
(14, 'shubh', '6355250915', '3543234', NULL, '2020-03-12 10:43:29', '2020-03-12 10:43:29', '2020-03-12 16:13:29'),
(15, 'shubh', '6355250915', '3543234', NULL, '2020-03-12 10:44:03', '2020-03-12 10:44:03', NULL),
(17, 'yug', '7621005549', '55667', NULL, '2020-03-13 04:44:45', '2020-03-13 04:44:45', NULL),
(18, 'jayesh Sir', '78657556476', '145645636541', NULL, '2020-03-14 00:32:40', '2020-03-14 00:32:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `detailNo` int(10) UNSIGNED NOT NULL,
  `billNo` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesureType` int(11) NOT NULL,
  `mesure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesurePrice` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_04_15_191331679173_create_1555355612601_permissions_table', 1),
(3, '2019_04_15_191331731390_create_1555355612581_roles_table', 1),
(4, '2019_04_15_191331779537_create_1555355612782_users_table', 1),
(5, '2019_04_15_191332603432_create_1555355612603_permission_role_pivot_table', 1),
(6, '2019_04_15_191332791021_create_1555355612790_role_user_pivot_table', 1),
(7, '2019_04_15_191441675085_create_1555355681975_products_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_03_08_124845_create_bill_table', 2),
(10, '2020_03_08_125026_create_bill_details_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(2, 'permission_create', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(3, 'permission_edit', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(4, 'permission_show', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(5, 'permission_delete', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(6, 'permission_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(7, 'role_create', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(8, 'role_edit', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(9, 'role_show', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(10, 'role_delete', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(11, 'role_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(12, 'user_create', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(13, 'user_edit', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(14, 'user_show', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(15, 'user_delete', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(16, 'user_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(17, 'product_create', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(18, 'product_edit', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(19, 'product_show', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(20, 'product_delete', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(21, 'product_access', '2019-04-15 13:44:42', '2019-04-15 13:44:42', NULL),
(22, 'bills_access', '2020-03-11 09:26:31', '2020-03-11 09:26:31', NULL),
(23, 'bill_create', '2020-03-11 09:27:36', '2020-03-11 09:27:36', NULL),
(24, 'Bill_show', '2020-03-11 09:27:51', '2020-03-11 09:27:51', NULL),
(25, 'Bill_edit', '2020-03-11 09:28:06', '2020-03-11 09:28:06', NULL),
(26, 'Bill_delete', '2020-03-11 09:28:12', '2020-03-11 09:28:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Macbook', 'hjkdhjsdkhjk nhbmntjhf', '7897.00', '2020-03-08 06:40:56', '2020-03-08 07:12:43', '2020-03-08 07:12:43'),
(2, 'Yug soni', 'cvvbgv', '5657.00', '2020-03-10 11:43:59', '2020-03-10 11:44:05', '2020-03-10 11:44:05'),
(3, 'test', 'yuiljloukl.', '789.00', '2020-03-11 08:45:54', '2020-03-11 08:46:12', '2020-03-11 08:46:12'),
(4, 'dfdf', 'dfdFSDf', '2323.00', '2020-03-11 09:14:41', '2020-03-11 09:19:56', '2020-03-11 09:19:56'),
(5, 'fgvdfg', 'dfgdfgdfg', '334.00', '2020-03-11 09:19:42', '2020-03-12 09:15:27', '2020-03-12 09:15:27'),
(6, 'shubh', 'sdgsdfg', '345.00', '2020-03-11 10:41:21', '2020-03-12 09:15:27', '2020-03-12 09:15:27'),
(7, 'shubh', 'adsc', '324.00', '2020-03-11 10:45:05', '2020-03-12 09:21:51', '2020-03-12 09:21:51'),
(8, 'xd', 'dfgdfgvbg', '677868.00', '2020-03-13 05:13:56', '2020-03-13 05:14:05', '2020-03-13 05:14:05'),
(9, 'sfsad', 'fsdfsf', '3324.00', '2020-03-14 01:08:22', '2020-03-14 01:08:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2019-04-15 13:43:32', '2019-04-15 13:43:32', NULL),
(2, 'User', '2019-04-15 13:43:32', '2019-04-15 13:43:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO', NULL, '2019-04-15 13:43:32', '2020-03-11 09:12:57', '2020-03-11 09:12:57'),
(2, 'Yug', 'yug.spider@gmail.com', NULL, '$2y$10$Od/dxCmo/mC0EX4cffT7bO7jcCZvMMqWUFhXS99X25TZMS114syLq', 'SurImBqjJRyLPVDr97Rasl4zbb6SJIKnmX3opoDYEthcQnFMmo1JmAVileW3', '2020-03-10 11:00:31', '2020-03-10 11:00:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`detailNo`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `detailNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
