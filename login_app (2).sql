-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 11:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ibchks`
--

CREATE TABLE `ibchks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ibchkdep_id` int(11) DEFAULT NULL,
  `ibchkdegree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ibchktime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibchks`
--

INSERT INTO `ibchks` (`id`, `name`, `ibchkdep_id`, `ibchkdegree`, `ibchktime`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Abdus Sattar', 3, 'FCPS', 'Monday', '202112261209safe_image.jpg', 2, 2, '2021-12-23 06:25:27', '2021-12-26 06:09:42'),
(3, 'test', 3, 'test', 'sunday, monday,tuesday, Time: 8.00pm-10.00pm', '202112231232nayeemid (3).jpg', 2, NULL, '2021-12-23 06:32:33', '2021-12-23 06:32:33'),
(4, 'gg', 4, 'fgfg', 'fg', '202112231246haarun300 (1).jpg', 2, NULL, '2021-12-23 06:46:47', '2021-12-23 06:46:47'),
(5, '1', 4, '2', '3', '20211223125211.jpg', 2, NULL, '2021-12-23 06:52:06', '2021-12-23 06:52:06'),
(6, 'salma', 4, 'MBBS', 'sunday, monday,tuesday, Time: 8.00pm-10.00pm', '202112231337mirpur.jpg', 2, NULL, '2021-12-23 07:37:07', '2021-12-23 07:37:07'),
(8, 'sarafat', 5, 'DMS', 'modnay', '202112270410haarun300 (1).jpg', 2, NULL, '2021-12-26 22:10:50', '2021-12-26 22:10:50'),
(9, 'qq', 3, 'qqqq', 'qqqq', NULL, 2, NULL, '2021-12-27 03:49:19', '2021-12-27 03:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `ibchk_deps`
--

CREATE TABLE `ibchk_deps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibchk_deps`
--

INSERT INTO `ibchk_deps` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Cardology', NULL, NULL, '2021-12-23 01:27:48', '2021-12-23 01:32:35'),
(2, 'Urology', NULL, NULL, '2021-12-23 01:28:56', '2021-12-23 01:28:56'),
(3, 'ENT', NULL, NULL, '2021-12-23 01:29:30', '2021-12-23 01:29:30'),
(4, 'Gynology', NULL, NULL, '2021-12-23 06:46:04', '2021-12-23 06:46:04'),
(5, 'conology', NULL, NULL, '2021-12-26 04:11:41', '2021-12-26 04:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '202112220751202104010722logo.png', 2, 6, '2021-12-21 06:39:04', '2021-12-22 01:51:40');

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
(5, '2021_12_08_070022_create_roles_table', 1),
(6, '2021_12_12_120526_create_permissions_table', 2),
(7, '2021_12_13_075958_create_logos_table', 3),
(8, '2021_12_13_114119_create_sliders_table', 4),
(12, '2021_12_23_044837_create_ibchk_deps_table', 5),
(13, '2021_12_23_103117_create_ibchks_table', 6);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `permission`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"slider\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"permission\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"role\":{\"view\":\"1\"},\"subadmin\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', '2021-12-20 03:08:31', '2021-12-22 01:04:37'),
(6, 7, '{\"slider\":{\"view\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', '2021-12-21 23:11:46', '2021-12-23 06:47:53'),
(7, 3, '{\"slider\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', '2021-12-22 01:05:58', '2021-12-22 01:06:43');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL),
(3, 'sub admin', '2021-12-12 05:01:58', '2021-12-12 05:01:58'),
(5, 'ibch', '2021-12-13 08:07:23', '2021-12-13 08:07:23'),
(7, 'Motijheel', '2021-12-21 23:03:28', '2021-12-21 23:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '202112131237addmission.jpg', 2, 2, '2021-12-13 06:37:38', '2021-12-21 03:20:00'),
(4, '202112210919slide-three.jpg', 2, NULL, '2021-12-21 03:19:20', '2021-12-21 03:19:20'),
(5, '202112220438medicne.png', 2, NULL, '2021-12-21 22:38:24', '2021-12-21 22:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sayma', 2, 'sayma@gmail.com', NULL, '$2y$10$Lw35KTPUbPmpyc1LR.xGIuUuwQI0ahIiB4Qgxire6KA1aHZPbINQq', NULL, '2021-12-08 03:59:40', '2021-12-08 03:59:40'),
(2, 'Harun or Rashid Chowdhury', 1, 'nayeembd84@gmail.com', NULL, '$2y$10$QLRpRW2DxwPNzM5ikzjbs./foPHNykLYj/qagkKeKBwxYejSLpc6q', NULL, '2021-12-08 04:03:41', '2021-12-08 04:03:41'),
(5, 'sams', 3, 'sams1@gmail.com', NULL, '$2y$10$QLRpRW2DxwPNzM5ikzjbs./foPHNykLYj/qagkKeKBwxYejSLpc6q', NULL, '2021-12-21 01:07:10', '2021-12-21 02:44:05'),
(6, 'test', 3, 'test@gmail.com', NULL, '$2y$10$1pt1V3pkfwmW0dAxHq1kIuN9cDhZDwYkDnVobXbjwu9Guf5GcHvVC', NULL, '2021-12-21 05:41:30', '2021-12-22 01:05:11'),
(7, 'test2', 7, 'test2@gmail.com', NULL, '$2y$10$cak9oDt.vT/kq3eC13MO.OTUSEIqR.lacQ2LgnmBd/LrySWpIj8R6', NULL, '2021-12-23 06:48:34', '2021-12-23 06:48:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ibchks`
--
ALTER TABLE `ibchks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ibchk_deps`
--
ALTER TABLE `ibchk_deps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ibchk_deps_name_unique` (`name`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ibchks`
--
ALTER TABLE `ibchks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ibchk_deps`
--
ALTER TABLE `ibchk_deps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
