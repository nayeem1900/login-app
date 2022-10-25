-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 01:06 PM
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
-- Creation: Jan 12, 2022 at 08:14 AM
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
(21, 76, 8, 2, '2022-02-13 23:42:23', '2022-02-13 23:42:23'),
(22, 77, 8, 3, '2022-02-14 22:14:21', '2022-02-14 22:14:21'),
(23, 78, 2, 5, '2022-02-14 22:43:08', '2022-02-14 22:43:08'),
(24, 79, 2, 5, '2022-02-14 22:44:28', '2022-02-14 22:44:28'),
(25, 80, 6, 2, '2022-02-17 01:10:16', '2022-02-17 01:10:16'),
(26, 81, 8, 4, '2022-02-23 04:17:06', '2022-02-23 04:17:06'),
(27, 82, 5, 2, '2022-02-28 23:54:06', '2022-02-28 23:54:06'),
(28, 83, 2, 5, '2022-03-01 02:16:46', '2022-03-01 02:16:46'),
(29, 84, 9, 2, '2022-03-01 04:46:33', '2022-03-01 04:46:33'),
(30, 85, 9, 4, '2022-03-02 02:46:05', '2022-03-02 02:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--
-- Creation: Sep 22, 2022 at 05:16 AM
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hotline` int(30) DEFAULT NULL,
  `h_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `mobile`, `Hotline`, `h_image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Islami Bank Central Hospital, Kakrial', 'Kakrial, Dhala', '0124555633,0141455888', NULL, NULL, NULL, NULL, '2022-01-11 00:30:22', '2022-05-16 02:48:30'),
(3, 'Dinajpur', 'dinajpur', '01587566666,215466', NULL, NULL, NULL, NULL, '2022-01-11 02:46:01', '2022-05-16 07:01:11'),
(4, 'Madaripur', 'eee', '123456', NULL, NULL, NULL, NULL, '2022-01-11 07:02:43', '2022-09-21 22:15:15'),
(5, 'Motijheel', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-11 23:32:52', '2022-01-11 23:32:52'),
(6, 'Barishal', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-20 04:23:37', '2022-01-20 04:23:37'),
(7, 'Mugdha', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-07 23:11:01', '2022-02-07 23:11:01'),
(8, 'Nayapaltan', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-13 23:29:00', '2022-02-13 23:29:00'),
(9, 'khulna', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 04:45:53', '2022-03-01 04:45:53'),
(10, 'Islami Bank Hospital Rajshahi,Luxmipur', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 22:47:06', '2022-03-02 22:47:06'),
(11, 'Islami Bank Medical College Hospital ,Nawdapara', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 23:27:09', '2022-03-02 23:29:53'),
(12, 'Islami Bank Hospital, Chottagram', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 23:52:12', '2022-03-02 23:52:12'),
(13, 'Islami Bank Community Hospital, Faridpur', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-03 02:39:30', '2022-03-03 02:39:30'),
(14, 'Islami Bank Community Hospital, Rangpur', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-03 04:05:29', '2022-03-03 04:05:29'),
(15, 'Islami Bank Community Hospital, Dinajpur.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-03 04:36:59', '2022-03-03 04:36:59'),
(16, 'Islami Bank Community Hospital, Naogaon.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-03 05:07:28', '2022-03-03 05:07:28'),
(17, 'Islami Bank Community Hospital, Jhenaidah.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 22:23:47', '2022-03-05 22:23:47'),
(18, 'Islami Bank Community Hospital, Manikgonj.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-06 02:25:34', '2022-03-06 02:25:34'),
(19, 'Islami Bank Community Hospital, Satkhera', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-06 03:00:43', '2022-03-06 03:00:43'),
(20, 'Islami Bank Community Hospital, Madaripur', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-06 04:02:00', '2022-03-06 04:02:00'),
(21, 'Islami Bank Community Hospital, Mymensingh', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-06 05:07:05', '2022-03-06 05:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--
-- Creation: Jan 09, 2022 at 10:03 AM
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
-- Table structure for table `etenders`
--
-- Creation: Jan 09, 2022 at 10:00 AM
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
-- Creation: Jan 09, 2022 at 08:38 AM
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
-- Table structure for table `galleries`
--
-- Creation: Oct 23, 2022 at 04:26 AM
-- Last update: Oct 23, 2022 at 08:38 AM
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `desc`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '202210110538Galary_template.jpg', 'dddddrrrr', 1, 1, '2022-10-10 23:38:09', '2022-10-23 02:33:23'),
(2, '202210110541nayeem (2).jpg', NULL, 1, NULL, '2022-10-10 23:41:31', '2022-10-10 23:41:31'),
(4, '202210230500template.jpg', 'gggggggggggggggggggg', 1, NULL, '2022-10-22 23:00:05', '2022-10-22 23:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `ibchks`
--
-- Creation: Jan 09, 2022 at 11:35 AM
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
-- Creation: Jan 09, 2022 at 11:33 AM
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
-- Creation: Jan 11, 2022 at 05:54 AM
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
-- Creation: Jan 11, 2022 at 10:15 AM
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
(71, 7, 2, 'test', 'Mbbss', 'sunday to friday', '202202141137haarun300 (3).jpg', NULL, NULL, '2022-02-07 23:16:34', '2022-02-14 05:37:25'),
(72, 7, 3, 'test', 'Mbbss', 'sunday to friday', NULL, NULL, NULL, '2022-02-07 23:52:33', '2022-02-07 23:52:33'),
(73, 7, 4, 'test', 'wwwwwwwwwwwww', '11111111', NULL, NULL, NULL, '2022-02-07 23:53:08', '2022-02-07 23:53:08'),
(74, 2, 4, 'Anis', 'Anis', 'anis', NULL, NULL, NULL, '2022-02-13 01:08:15', '2022-02-13 01:08:15'),
(75, 7, 5, 'iqbal', 'test', 'test', NULL, NULL, NULL, '2022-02-13 06:01:14', '2022-02-13 06:01:14'),
(76, 8, 2, 'Sharfuddin', 'Sharfuddin', 'sunday- Friday', NULL, NULL, NULL, '2022-02-13 23:42:23', '2022-02-13 23:42:23'),
(77, 8, 3, 'Anis', 'Anis', 'Anis', '202202150414Mahbub Alam.jpg', NULL, NULL, '2022-02-14 22:14:21', '2022-02-14 22:14:21'),
(78, 2, 5, 'Sayma', 'Sayma', 'Sayma', '202202150443principal1.jpg', NULL, NULL, '2022-02-14 22:43:08', '2022-02-14 22:43:08'),
(79, 2, 5, 'Monir', 'Monir', 'Monir', '202202150444ms.jpg', NULL, NULL, '2022-02-14 22:44:28', '2022-02-14 22:44:28'),
(80, 6, 2, 'Moniruzjaman', 'MBBS', 'Sunday to Thrusday (08 PM - 11 PM)', NULL, 1, NULL, '2022-02-17 01:10:16', '2022-02-17 01:10:16'),
(81, 8, 4, 'Sayma', 'Sayma', 'Sat- Thurs', '202202231017Harun Vi.jpg', 1, NULL, '2022-02-23 04:17:06', '2022-02-23 04:17:06'),
(82, 5, 2, 'Anis', 'MBBS', 'Saturday to Thrusday (07:00 PM to 11:00PM)', '202203010554no_mg.jpg', 1, NULL, '2022-02-28 23:54:06', '2022-02-28 23:54:06'),
(83, 2, 5, 'Sarfuddin', 'MBBS', 'friday to sunday', NULL, 1, NULL, '2022-03-01 02:16:46', '2022-03-01 02:16:46'),
(84, 9, 2, 'Monir', 'Mbbs', 'sunday to friday', NULL, 1, NULL, '2022-03-01 04:46:33', '2022-03-01 04:46:33'),
(85, 9, 4, 'test', 'test', 'test', NULL, 1, NULL, '2022-03-02 02:46:05', '2022-03-02 02:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--
-- Creation: Jan 09, 2022 at 09:32 AM
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
(3, '202205230534ibf_logo.png', 1, 1, '2022-01-12 22:14:18', '2022-05-22 23:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
-- Creation: Jan 09, 2022 at 07:07 AM
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
(37, '2022_02_24_055342_create_add_slider_tet_table', 22),
(38, '2022_02_24_063448_create_add_slider_column_value_change_table', 23),
(39, '2022_10_10_072856_create_galleries_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--
-- Creation: Jan 09, 2022 at 07:07 AM
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
-- Creation: Jan 09, 2022 at 09:16 AM
-- Last update: Oct 23, 2022 at 08:23 AM
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
(2, 1, '{\"slider\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"carrier\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"etender\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"ibchkdept\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"doctor_reg\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"branch\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"dep\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"gallery\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"permission\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"role\":{\"view\":\"1\"},\"subadmin\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', NULL, '2022-10-23 02:23:13'),
(3, 3, '{\"slider\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"carrier\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"etender\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"ibchkdept\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"logo\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"gallery\":{\"view\":\"1\"}}', '2022-01-09 03:26:38', '2022-10-11 00:26:22'),
(4, 4, '{\"doctor_reg\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"branch\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"},\"dep\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\"}}', '2022-01-18 05:35:47', '2022-01-18 06:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--
-- Creation: Jan 09, 2022 at 07:07 AM
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
-- Creation: Jan 09, 2022 at 08:38 AM
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
-- Creation: Feb 24, 2022 at 06:37 AM
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `h_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`, `h_name`, `p_name`) VALUES
(1, '202201090942202201050543202104080616s1.jpeg', 1, NULL, '2022-01-09 03:42:11', '2022-01-09 03:42:11', NULL, NULL),
(2, '202201090942202201050543202104080617s5.jpeg', 1, NULL, '2022-01-09 03:42:17', '2022-01-09 03:42:17', NULL, NULL),
(3, '202202240646modelFeb22.jpg', 1, 1, '2022-02-24 00:46:51', '2022-02-24 04:56:43', 'একুশে শহীদদের প্রতি শ্রদ্ধা', 'একুশে ভাষা শহীদদের প্রতি শ্রদ্ধা নিবেদনের জন্য ভার্চুয়াল আলোচনা।');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Jan 09, 2022 at 08:38 AM
-- Last update: Oct 23, 2022 at 04:50 AM
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
(1, 'Harun', 1, 'nayeembd84@gmail.com', NULL, '$2y$10$uLtd1TFwDyTjgcvyMaq8e.cM2GzOhM5gxH1FJunkH9wnPOvBhw.wW', NULL, NULL, '2022-09-15 00:17:25'),
(2, 'Sayema', 3, 'sayema@gmail.com', NULL, '$2y$10$83hVhMgcp4tbONCwuUvADO.wF43RYqCNxtvtWrIr6VuVA8lzdmsIm', NULL, '2022-01-09 02:59:50', '2022-10-10 23:59:45'),
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
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `assign_doctors`
--
ALTER TABLE `assign_doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
