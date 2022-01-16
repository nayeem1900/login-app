-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 01:46 PM
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
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_doctors`
--

CREATE TABLE IF NOT EXISTS `assign_doctors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_doctors`
--

INSERT INTO `assign_doctors` (`id`, `doctor_id`, `branch_id`, `dep_id`, `created_at`, `updated_at`) VALUES
(1, 56, 2, 2, '2022-01-12 07:58:56', '2022-01-12 07:58:56'),
(2, 57, 3, 3, '2022-01-12 08:07:19', '2022-01-12 08:07:19'),
(3, 58, 3, 3, '2022-01-12 08:24:25', '2022-01-12 08:24:25'),
(4, 59, 2, 2, '2022-01-12 08:30:33', '2022-01-12 08:30:33'),
(5, 60, 2, 3, '2022-01-12 08:43:53', '2022-01-12 22:56:54'),
(6, 61, 5, 4, '2022-01-12 08:44:22', '2022-01-12 08:44:22'),
(7, 62, 3, 4, '2022-01-12 22:17:57', '2022-01-12 22:17:57'),
(8, 63, 5, 4, '2022-01-12 22:23:41', '2022-01-12 22:23:41'),
(9, 64, 3, 4, '2022-01-13 05:20:36', '2022-01-13 05:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `branches_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Islami Bank Central Hospital, Kakrial', NULL, NULL, '2022-01-11 00:30:22', '2022-01-11 00:30:22'),
(3, 'Dinajpur', NULL, NULL, '2022-01-11 02:46:01', '2022-01-11 02:46:01'),
(4, 'Madaripur', NULL, NULL, '2022-01-11 07:02:43', '2022-01-11 07:02:43'),
(5, 'Motijheel', NULL, NULL, '2022-01-11 23:32:52', '2022-01-11 23:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE IF NOT EXISTS `carriers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `t_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `etenders`
--

CREATE TABLE IF NOT EXISTS `etenders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `t_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ibchks`
--

CREATE TABLE IF NOT EXISTS `ibchks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ibchkdep_id` int(11) DEFAULT NULL,
  `ibchkdegree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ibchktime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibchks`
--

INSERT INTO `ibchks` (`id`, `name`, `ibchkdep_id`, `ibchkdegree`, `ibchktime`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Harun or', 3, 'R', 'Chowdhury', NULL, 1, NULL, '2022-01-10 00:38:24', '2022-01-10 00:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `ibchk_deps`
--

CREATE TABLE IF NOT EXISTS `ibchk_deps` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ibchk_deps_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibchk_deps`
--

INSERT INTO `ibchk_deps` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'test', NULL, NULL, '2022-01-10 00:38:13', '2022-01-10 00:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `ibh_depts`
--

CREATE TABLE IF NOT EXISTS `ibh_depts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ibh_depts_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibh_depts`
--

INSERT INTO `ibh_depts` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'cardiology', NULL, NULL, '2022-01-11 00:50:45', '2022-01-11 00:50:45'),
(3, 'medicine', NULL, NULL, '2022-01-11 08:02:15', '2022-01-11 08:02:15'),
(4, 'ENT', NULL, NULL, '2022-01-11 08:02:22', '2022-01-11 08:02:22'),
(5, 'Eye', NULL, NULL, '2022-01-16 00:10:16', '2022-01-16 00:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `ibh_doctors`
--

CREATE TABLE IF NOT EXISTS `ibh_doctors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibh_doctors`
--

INSERT INTO `ibh_doctors` (`id`, `branch_id`, `dep_id`, `doctor_name`, `degree`, `schedule`, `img`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(37, 2, 3, 'test', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 05:57:32', '2022-01-12 05:57:32'),
(38, 2, 3, 'test', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:00:19', '2022-01-12 06:00:19'),
(39, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:00:47', '2022-01-12 06:00:47'),
(40, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:12:11', '2022-01-12 06:12:11'),
(41, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:12:18', '2022-01-12 06:12:18'),
(42, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:15:22', '2022-01-12 06:15:22'),
(43, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:15:25', '2022-01-12 06:15:25'),
(44, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:15:31', '2022-01-12 06:15:31'),
(45, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:15:40', '2022-01-12 06:15:40'),
(46, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:16:33', '2022-01-12 06:16:33'),
(47, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:22:14', '2022-01-12 06:22:14'),
(48, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:22:21', '2022-01-12 06:22:21'),
(49, 4, 3, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:40:40', '2022-01-12 06:40:40'),
(50, 2, 2, 'test', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 06:49:06', '2022-01-12 06:49:06'),
(51, 2, 2, 'wwwwwwwwwwww', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 07:02:24', '2022-01-12 07:02:24'),
(52, 4, 2, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 07:03:39', '2022-01-12 07:03:39'),
(53, 2, 2, 'wwwwwwwwwwww', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 07:04:01', '2022-01-12 07:04:01'),
(54, 2, 2, 'wwwwwwwwwwww', 'wwwwwwwwwwwww', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 07:20:11', '2022-01-12 07:20:11'),
(55, 2, 2, 'সডপপ', 'কিপডপকডাক', 'ািকিাকডডডডড', NULL, NULL, NULL, '2022-01-12 07:21:01', '2022-01-12 07:21:01'),
(56, 2, 2, 'nayeem', 'bsc', 'everyday', NULL, NULL, NULL, '2022-01-12 07:58:56', '2022-01-12 07:58:56'),
(57, 3, 3, 'test', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 08:07:19', '2022-01-12 08:07:19'),
(58, 3, 3, 'wwwwwwwwwwww', '11111111', 'cccccccc', NULL, NULL, NULL, '2022-01-12 08:24:25', '2022-01-12 08:24:25'),
(59, 2, 2, 'test', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-01-12 08:30:33', '2022-01-12 08:30:33'),
(60, 2, 3, 'Azim', 'BBA', 'Sunday to thrusday', '202201130456IMG_6104.JPG', NULL, NULL, '2022-01-12 08:43:53', '2022-01-12 22:56:54'),
(61, 5, 4, 'testtest', '11111111', '11', '20220112144412.jpg', NULL, NULL, '2022-01-12 08:44:22', '2022-01-12 08:44:22'),
(62, 3, 4, 'fddff', 'fdfdf', 'dfdf', '202201130417202201050543202104080617s4.jpeg', NULL, NULL, '2022-01-12 22:17:57', '2022-01-12 22:17:57'),
(63, 5, 4, 'sattar', 'FCPS', 'sunday to friday', '2022011304231557393365_nazmul.jpg', NULL, NULL, '2022-01-12 22:23:41', '2022-01-12 22:23:41'),
(64, 3, 4, 'Abdus Sattar', 'FCPS', 'sunday to friday', '202201131120202201090509Yousif Abdullah A AlRajhi.jpg', NULL, NULL, '2022-01-13 05:20:36', '2022-01-13 05:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE IF NOT EXISTS `logos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '202201130414202112220751202104010722logo.png', 1, NULL, '2022-01-12 22:14:18', '2022-01-12 22:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2022_01_09_082448_create_roles_table', 10),
(19, '2022_01_09_083035_create_users_table', 10),
(20, '2022_01_09_083743_create_failed_jobs_table', 10),
(22, '2022_01_09_091510_create_permissions_table', 11),
(23, '2022_01_09_093204_create_logos_table', 12),
(24, '2022_01_09_093650_create_sliders_table', 13),
(28, '2022_01_09_095936_create_etenders_table', 15),
(29, '2022_01_09_100235_create_carriers_table', 16),
(30, '2022_01_09_113233_create_ibchk_deps_table', 17),
(31, '2022_01_09_113448_create_ibchks_table', 18),
(32, '2022_01_11_044728_create_ibh_depts_table', 19),
(34, '2022_01_11_045332_create_branches_table', 19),
(35, '2022_01_11_101500_create_ibh_doctors_table', 20),
(36, '2022_01_12_081045_create_assign_doctors_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `permission`, `created_at`, `updated_at`) VALUES
(2, 1, '{\"slider\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"carrier\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"etender\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"ibchkdept\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"permission\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"role\":{\"view\":\"1\"},\"subadmin\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', NULL, '2022-01-09 05:27:32'),
(3, 3, '{\"slider\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"carrier\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"etender\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"ibchkdept\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', '2022-01-09 03:26:38', '2022-01-09 03:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'user', NULL, NULL),
(3, 'purchase', '2022-01-09 03:00:10', '2022-01-09 03:00:10'),
(4, 'ibch', '2022-01-09 03:00:25', '2022-01-09 03:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '202201090942202201050543202104080616s1.jpeg', 1, NULL, '2022-01-09 03:42:11', '2022-01-09 03:42:11'),
(2, '202201090942202201050543202104080617s5.jpeg', 1, NULL, '2022-01-09 03:42:17', '2022-01-09 03:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harun', 1, 'nayeembd84@gmail.com', NULL, '$2y$10$QLRpRW2DxwPNzM5ikzjbs./foPHNykLYj/qagkKeKBwxYejSLpc6q', NULL, NULL, NULL),
(2, 'Sayema', 1, 'sayema@gmail.com', NULL, '$2y$10$1sxI7iZkRgDRn4lSWG4F2eU/J7zqm/SlP2.XogPUgkPPZCVEevm3.', NULL, '2022-01-09 02:59:50', '2022-01-09 02:59:50'),
(3, 'Syedur', 3, 'syedibh@gmail.com', NULL, '$2y$10$I04.9b0t1lxNC4axx8VKJukLcEeTcp9TOWaB65E5PZMrJdemo/bpK', NULL, '2022-01-09 03:01:02', '2022-01-09 03:01:02'),
(4, 'a', 4, 'naymbd84@gmail.co', NULL, '$2y$10$bVYnCXClfSuCx5u.DGjKJubOn6bi04Oe5ERhdut4uRqGiOh/eGbs6', NULL, '2022-01-09 23:22:08', '2022-01-09 23:22:08');

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
