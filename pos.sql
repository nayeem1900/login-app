-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 03:35 PM
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
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_doctors`
--

CREATE TABLE `assign_doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_doctors`
--

INSERT INTO `assign_doctors` (`id`, `doctor_id`, `branch_id`, `dep_id`, `created_at`, `updated_at`) VALUES
(14, 69, 2, 2, '2022-02-03 03:46:05', '2022-02-03 03:46:05'),
(15, 70, 2, 3, '2022-02-03 05:31:50', '2022-02-03 05:31:50'),
(16, 71, 7, 2, '2022-02-07 23:16:34', '2022-02-07 23:16:34'),
(17, 72, 7, 3, '2022-02-07 23:52:33', '2022-02-07 23:52:33'),
(18, 73, 7, 4, '2022-02-07 23:53:08', '2022-02-07 23:53:08'),
(19, 74, 2, 4, '2022-02-13 01:08:15', '2022-02-13 01:08:15'),
(20, 75, 7, 5, '2022-02-13 06:01:14', '2022-02-13 06:01:14'),
(21, 76, 8, 2, '2022-02-13 23:42:23', '2022-02-13 23:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Islami Bank Central Hospital, Kakrial1', NULL, NULL, '2022-01-11 00:30:22', '2022-01-18 06:26:04'),
(3, 'Dinajpur', NULL, NULL, '2022-01-11 02:46:01', '2022-01-11 02:46:01'),
(4, 'Madaripur', NULL, NULL, '2022-01-11 07:02:43', '2022-01-11 07:02:43'),
(5, 'Motijheel', NULL, NULL, '2022-01-11 23:32:52', '2022-01-11 23:32:52'),
(6, 'Barishal', NULL, NULL, '2022-01-20 04:23:37', '2022-01-20 04:23:37'),
(7, 'Mugdha', NULL, NULL, '2022-02-07 23:11:01', '2022-02-07 23:11:01'),
(8, 'Nayapaltan', NULL, NULL, '2022-02-13 23:29:00', '2022-02-13 23:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 1, 1, NULL, '2022-06-06 01:11:41', '2022-06-06 01:11:41'),
(2, 'Construction Meterial', 1, 1, 1, '2022-06-06 01:12:00', '2022-06-06 01:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile_no`, `email`, `address`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Anis', '012345678', 'anis@yahoo.com', 'Chottagram', 1, 1, NULL, '2022-02-16 04:13:20', '2022-02-16 04:13:20'),
(3, 'Sharfuddin', '01964000072', 'nayeem@gmail.com', 'KHALEDA MONZIL,MEARASTAMATHA,SHAMSERABAD.', 1, 1, NULL, '2022-05-29 05:53:00', '2022-05-29 05:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `etenders`
--

CREATE TABLE `etenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 'Harun or', 3, 'R', 'Chowdhury', NULL, 1, NULL, '2022-01-10 00:38:24', '2022-01-10 00:38:24');

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
(3, 'test', NULL, NULL, '2022-01-10 00:38:13', '2022-01-10 00:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `ibh_depts`
--

CREATE TABLE `ibh_depts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibh_depts`
--

INSERT INTO `ibh_depts` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'cardiology', NULL, NULL, '2022-01-11 00:50:45', '2022-01-11 00:50:45'),
(3, 'medicine', NULL, NULL, '2022-01-11 08:02:15', '2022-01-11 08:02:15'),
(4, 'ENT', NULL, NULL, '2022-01-11 08:02:22', '2022-01-11 08:02:22'),
(5, 'Eye', NULL, NULL, '2022-01-16 00:10:16', '2022-01-16 00:10:16'),
(6, 'test', NULL, NULL, '2022-02-07 22:58:49', '2022-02-07 22:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `ibh_doctors`
--

CREATE TABLE `ibh_doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibh_doctors`
--

INSERT INTO `ibh_doctors` (`id`, `branch_id`, `dep_id`, `doctor_name`, `degree`, `schedule`, `img`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(69, 2, 2, 'test', 'Mbbss', 'sunday to friday111111111111', '202202030946haarun300 (2).jpg', NULL, NULL, '2022-02-03 03:46:05', '2022-02-03 03:53:53'),
(70, 2, 3, 'Nayeem', 'Nayeem', 'na', NULL, NULL, NULL, '2022-02-03 05:31:50', '2022-02-03 05:31:50'),
(71, 7, 2, 'test', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-02-07 23:16:34', '2022-02-07 23:16:34'),
(72, 7, 3, 'test', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-02-07 23:52:33', '2022-02-07 23:52:33'),
(73, 7, 4, 'test', 'wwwwwwwwwwwww', '11111111', NULL, NULL, NULL, '2022-02-07 23:53:08', '2022-02-07 23:53:08'),
(74, 2, 4, 'Anis', 'Anis', 'anis', NULL, NULL, NULL, '2022-02-13 01:08:15', '2022-02-13 01:08:15'),
(75, 7, 5, 'iqbal', 'test', 'test', NULL, NULL, NULL, '2022-02-13 06:01:14', '2022-02-13 06:01:14'),
(76, 8, 2, 'Sharfuddin', 'Sharfuddin', 'sunday- Friday', NULL, NULL, NULL, '2022-02-13 23:42:23', '2022-02-13 23:42:23');

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
(3, '202201130414202112220751202104010722logo.png', 1, NULL, '2022-01-12 22:14:18', '2022-01-12 22:14:18');

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
(36, '2022_01_12_081045_create_assign_doctors_table', 21),
(37, '2022_02_15_123850_create_suppliers_table', 22),
(38, '2022_02_16_095806_create_customers_table', 23),
(40, '2022_06_06_050258_create_units_table', 24),
(41, '2022_06_06_070231_create_categories_table', 25),
(42, '2022_06_06_080848_create_products_table', 26),
(43, '2022_06_06_105512_create_purchases_table', 27);

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
(2, 1, '{\"slider\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"carrier\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"etender\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"ibchkdept\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"doctor_reg\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"branch\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"dep\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"permission\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"role\":{\"view\":\"1\"},\"subadmin\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', NULL, '2022-02-13 23:01:54'),
(3, 3, '{\"slider\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"carrier\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"etender\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"ibchkdept\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', '2022-01-09 03:26:38', '2022-01-09 03:26:38'),
(4, 4, '{\"doctor_reg\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"branch\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"dep\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"}}', '2022-01-18 05:35:47', '2022-01-18 06:35:33');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` double NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `supplier_id`, `unit_id`, `category_id`, `name`, `quantity`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 2, 'Cement', 0, 1, 1, 1, '2022-06-06 03:26:42', '2022-06-06 04:45:30'),
(2, 1, 2, 1, 'mobile', 0, 1, 1, NULL, '2022-06-07 03:29:46', '2022-06-07 03:29:46'),
(3, 4, 1, 2, 'rod', 0, 1, 1, NULL, '2022-06-07 03:30:27', '2022-06-07 03:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_qty` double NOT NULL,
  `unit_price` double NOT NULL,
  `buying_price` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending,1=Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `supplier_id`, `category_id`, `product_id`, `purchase_no`, `date`, `description`, `buying_qty`, `unit_price`, `buying_price`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'inv-12', '2022-06-07', 'walton-125', 5, 5500, 27500, 1, 1, NULL, '2022-06-09 05:08:36', '2022-06-09 05:08:36'),
(2, 1, 1, 2, 'inv-12', '2022-06-07', 'walton-12', 10, 2500, 25000, 0, 1, NULL, '2022-06-09 05:08:36', '2022-06-09 05:08:36'),
(3, 4, 2, 1, 'inv-12', '2022-06-07', 'basundara', 10, 550, 5500, 0, 1, NULL, '2022-06-09 05:08:36', '2022-06-09 05:08:36'),
(4, 4, 2, 3, 'inv-12', '2022-06-07', 'BSRM', 50, 80000, 4000000, 0, 1, NULL, '2022-06-09 05:08:36', '2022-06-09 05:08:36'),
(5, 1, 1, 2, 'eee', '2022-06-09', 'rrr', 3, 300, 900, 0, 1, NULL, '2022-06-09 07:30:32', '2022-06-09 07:30:32');

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
(2, 'user', NULL, NULL),
(3, 'purchase', '2022-01-09 03:00:10', '2022-01-09 03:00:10'),
(4, 'Hospital-Doctor', '2022-01-09 03:00:25', '2022-01-18 05:24:54');

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
(1, '202201090942202201050543202104080616s1.jpeg', 1, NULL, '2022-01-09 03:42:11', '2022-01-09 03:42:11'),
(2, '202201090942202201050543202104080617s5.jpeg', 1, NULL, '2022-01-09 03:42:17', '2022-01-09 03:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `mobile_no`, `email`, `address`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Walton Company', '01964000072', 'walton@gmail.com', 'Kaligong,Dhaka.Bangladesh', 1, 1, NULL, '2022-02-16 01:14:53', '2022-02-16 02:16:43'),
(3, 'Anis', '012456789', 'anis@yahoo.com', 'Chottagram', 1, 1, NULL, '2022-02-16 04:08:14', '2022-02-16 04:08:14'),
(4, 'dd', '11111', 'anis@yahoo.com', 'PURANA PALTAN', 1, 1, NULL, '2022-02-16 04:09:35', '2022-02-16 04:09:35'),
(5, 'Anis', '0124578', 'anis@yahoo.com', 'Chittagong,', 1, 1, NULL, '2022-02-16 04:12:10', '2022-02-16 04:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'KG', 1, 1, 1, '2022-06-05 23:34:12', '2022-06-05 23:37:15'),
(2, 'PCS', 1, 1, NULL, '2022-06-06 03:13:56', '2022-06-06 03:13:56');

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
(1, 'Harun', 1, 'nayeembd84@gmail.com', NULL, '$2y$10$uLtd1TFwDyTjgcvyMaq8e.cM2GzOhM5gxH1FJunkH9wnPOvBhw.wW', NULL, NULL, NULL),
(2, 'Sayema', 1, 'sayema@gmail.com', NULL, '$2y$10$1sxI7iZkRgDRn4lSWG4F2eU/J7zqm/SlP2.XogPUgkPPZCVEevm3.', NULL, '2022-01-09 02:59:50', '2022-01-09 02:59:50'),
(3, 'Syedur', 4, 'syedibh@gmail.com', NULL, '$2y$10$96y3ELUKKoaaN/cPLSg/fOvaPOWrmE1JswzjUdETTJVkUCkhb1kv.', NULL, '2022-01-09 03:01:02', '2022-01-19 00:22:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_doctors`
--
ALTER TABLE `assign_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branches_name_unique` (`name`);

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etenders`
--
ALTER TABLE `etenders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ibh_depts`
--
ALTER TABLE `ibh_depts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ibh_depts_name_unique` (`name`);

--
-- Indexes for table `ibh_doctors`
--
ALTER TABLE `ibh_doctors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `assign_doctors`
--
ALTER TABLE `assign_doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etenders`
--
ALTER TABLE `etenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ibchks`
--
ALTER TABLE `ibchks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ibchk_deps`
--
ALTER TABLE `ibchk_deps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ibh_depts`
--
ALTER TABLE `ibh_depts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ibh_doctors`
--
ALTER TABLE `ibh_doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
