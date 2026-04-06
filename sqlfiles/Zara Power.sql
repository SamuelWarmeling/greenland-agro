-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2026 at 04:21 AM
-- Server version: 10.11.15-MariaDB
-- PHP Version: 8.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codexel2_zara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salary_date` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `balance`, `name`, `photo`, `email`, `email_verified_at`, `password`, `salary_date`, `type`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0.00, 'Sajid Mayo', '/public/admin/assets/images/profile/1729135871IlP.jpg', 'admin@gmail.com', '2023-11-29 18:37:08', '$2y$10$d07J0ZplDuNUjPCmNCqLOOS34e0.4xaL0HIKO6KXMXltwaHPJBKhu', '2025-07-24', 'admin', '03001821259', 'Pakistan From Lahore', 'ed64SrtGvjEOJjs4N7v65wL8a1cSr6XRvCPXvNLYPkLZ3UkVgrJX9PIrHUL9', '2023-11-28 11:11:57', '2025-07-24 18:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ledgers`
--

CREATE TABLE `admin_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(255) NOT NULL,
  `perticulation` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected','default') NOT NULL DEFAULT 'default',
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE `bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bonus_name` varchar(255) NOT NULL,
  `counter` int(11) DEFAULT 0 COMMENT 'user get service count',
  `set_service_counter` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `winner` int(11) DEFAULT 0,
  `amount` double NOT NULL DEFAULT 0,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bonus_ledgers`
--

CREATE TABLE `bonus_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bonus_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `bonus_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonus_ledgers`
--

INSERT INTO `bonus_ledgers` (`id`, `user_id`, `bonus_id`, `amount`, `bonus_code`, `created_at`, `updated_at`) VALUES
(2, 21, 1, 3.00, '123456', '2024-02-19 23:07:23', '2024-02-19 23:07:23'),
(3, 36, 1, 2.00, '123456', '2024-04-28 11:31:17', '2024-04-28 11:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `checkins`
--

CREATE TABLE `checkins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkins`
--

INSERT INTO `checkins` (`id`, `user_id`, `date`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(27, 121, '2025-08-01 19:56:06', 0.00, 'active', '2025-08-01 19:56:06', '2025-08-01 19:56:06'),
(28, 122, '2025-08-01 20:20:11', 0.00, 'active', '2025-08-01 20:20:11', '2025-08-01 20:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `token` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `user_id`, `task_id`, `amount`, `date`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:12:54', '2023-12-29 10:12:54'),
(2, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:12:59', '2023-12-29 10:12:59'),
(3, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:00', '2023-12-29 10:13:00'),
(4, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:04', '2023-12-29 10:13:04'),
(5, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:08', '2023-12-29 10:13:08'),
(6, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:13', '2023-12-29 10:13:13'),
(7, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:16', '2023-12-29 10:13:16'),
(8, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:19', '2023-12-29 10:13:19'),
(9, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:29', '2023-12-29 12:12:29'),
(10, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:33', '2023-12-29 12:12:33'),
(11, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:36', '2023-12-29 12:12:36'),
(12, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:39', '2023-12-29 12:12:39'),
(13, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:43', '2023-12-29 12:12:43'),
(14, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:46', '2023-12-29 12:12:46'),
(15, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:48', '2023-12-29 12:12:48'),
(16, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:52', '2023-12-29 12:12:52'),
(17, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:54', '2023-12-29 12:12:54'),
(18, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:57', '2023-12-29 12:12:57'),
(19, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:59', '2023-12-29 12:12:59'),
(20, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:13:02', '2023-12-29 12:13:02'),
(21, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:13:04', '2023-12-29 12:13:04'),
(22, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:13:07', '2023-12-29 12:13:07'),
(23, 16, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 07:35:16', '2023-12-30 07:35:16'),
(24, 19, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 11:30:52', '2023-12-30 11:30:52'),
(25, 19, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 11:30:56', '2023-12-30 11:30:56'),
(26, 19, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 11:30:59', '2023-12-30 11:30:59'),
(27, 16, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 12:01:44', '2023-12-30 12:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL COMMENT 'User Number',
  `amount` varchar(255) NOT NULL COMMENT 'User Deposit Amount',
  `charge_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `final_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) NOT NULL,
  `feedback` text DEFAULT NULL,
  `status` enum('pending','rejected','approved') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `method_name`, `order_id`, `transaction_id`, `photo`, `number`, `amount`, `charge_amount`, `final_amount`, `date`, `feedback`, `status`, `created_at`, `updated_at`) VALUES
(28, 121, 'USDT TRC20', '82748', 'TLk76f18chJ9y3vYAn7KzJWHLHPjBrcsN3', '/public/upload/payment/1754056654Hzc.png', NULL, '500', 0.00, 500.00, '01-08-2025 19:57:39', NULL, 'pending', '2025-08-01 19:57:39', '2025-08-01 19:57:39'),
(29, 121, 'USDT TRC20', '48831', 'TLk76f18chJ9y3vYAn7KzJWHLHPjBrcsN3', '/public/upload/payment/1754056668HdF.png', NULL, '500', 0.00, 500.00, '01-08-2025 19:57:53', NULL, 'pending', '2025-08-01 19:57:53', '2025-08-01 19:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lucky_ledgers`
--

CREATE TABLE `lucky_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `draw_id` bigint(20) DEFAULT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `current_date` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_03_16_074227_create_admins_table', 1),
(6, '2023_03_17_123007_create_packages_table', 2),
(8, '2023_03_27_103153_create_payment_methods_table', 3),
(10, '2023_03_28_074201_create_deposits_table', 4),
(11, '2023_03_28_142734_create_user_ledgers_table', 5),
(12, '2023_03_28_142802_create_admin_ledgers_table', 6),
(13, '2023_03_30_071745_create_vip_sliders_table', 7),
(14, '2023_03_30_150139_create_settings_table', 8),
(15, '2023_04_01_185541_create_bonuses_table', 9),
(16, '2023_04_01_205009_create_bonus_ledgers_table', 10),
(17, '2023_04_05_203304_create_purchases_table', 11),
(18, '2023_04_09_200835_create_minings_table', 12),
(19, '2023_05_05_092841_create_drows_table', 13),
(20, '2023_05_05_111428_create_lucky_ledgers_table', 14),
(21, '2023_05_05_161904_create_icons_table', 15),
(22, '2023_05_09_214610_create_hiru_notices_table', 16),
(23, '2023_06_06_210226_create_funds_table', 17),
(24, '2023_06_06_222047_create_fund_invests_table', 18),
(25, '2023_06_11_113547_create_checkins_table', 19),
(26, '2023_06_23_193458_create_improvments_table', 20),
(27, '2023_06_24_083626_create_commissions_table', 21),
(28, '2023_12_14_221116_create_tasks_table', 22),
(29, '2024_01_31_034808_create_rebates_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `tab` enum('vip','fixed','event') NOT NULL DEFAULT 'vip',
  `label` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `validity` varchar(255) NOT NULL COMMENT 'count days',
  `commission_with_avg_amount` double NOT NULL DEFAULT 0 COMMENT 'user get average amount after validity',
  `ref1` double(20,2) NOT NULL DEFAULT 0.00,
  `ref2` double(20,2) NOT NULL DEFAULT 0.00,
  `ref3` double(20,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `is_default` enum('1','0') NOT NULL DEFAULT '0',
  `desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_id`, `tab`, `label`, `name`, `photo`, `price`, `validity`, `commission_with_avg_amount`, `ref1`, `ref2`, `ref3`, `status`, `is_default`, `desc`, `created_at`, `updated_at`) VALUES
(35, NULL, 'vip', 'Grid 1', 'Power Station1', '/public/upload/package/1769267425c1r.png', 10, '5', 15, 6.00, 3.00, 1.00, 'active', '0', NULL, '2024-10-17 07:15:54', '2026-01-24 21:10:25'),
(36, NULL, 'vip', 'Grid 2', 'Power Station2', '/public/upload/package/1769267533kfG.webp', 30, '30', 60, 6.00, 3.00, 1.00, 'active', '0', NULL, '2024-10-19 21:01:07', '2026-01-24 21:12:13'),
(37, NULL, 'vip', 'Nsnw', 'Power Station3', '/public/upload/package/1769883175kY5.webp', 100, '40', 190, 6.00, 3.00, 1.00, 'active', '0', NULL, '2024-10-19 21:01:59', '2026-02-01 00:12:55'),
(38, NULL, 'vip', 'Grid 4', 'Power Station4', '/public/upload/package/1769883244LDP.webp', 500, '60', 900, 6.00, 3.00, 1.00, 'active', '0', NULL, '2024-10-19 21:02:51', '2026-02-01 00:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `photo`, `address`, `status`, `created_at`, `updated_at`) VALUES
(32, 'USDT TRC20', '/public/upload/setting/1714242234PPN.png', 'TLk76f18chJ9y3vYAn7KzJWHLHPjBrcsN3', 'active', '2023-07-05 07:44:20', '2025-07-16 21:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tab` varchar(20) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `daily_income` double(20,2) NOT NULL DEFAULT 0.00,
  `hourly` decimal(20,4) NOT NULL DEFAULT 0.0000,
  `return_total` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `status` enum('active','inactive','pending') NOT NULL DEFAULT 'pending',
  `validity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rebates`
--

CREATE TABLE `rebates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `interest_commission1` double NOT NULL,
  `interest_commission2` double NOT NULL,
  `interest_commission3` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rebates`
--

INSERT INTO `rebates` (`id`, `interest_commission1`, `interest_commission2`, `interest_commission3`, `created_at`, `updated_at`) VALUES
(1, 6, 3, 1, NULL, '2024-02-06 03:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `withdraw_charge` int(11) NOT NULL DEFAULT 0 COMMENT 'percent',
  `minimum_withdraw` double(20,2) NOT NULL DEFAULT 0.00,
  `maximum_withdraw` double(20,2) NOT NULL DEFAULT 0.00,
  `w_time_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `checkin` double(20,2) NOT NULL DEFAULT 0.00,
  `registration_bonus` double(20,2) NOT NULL DEFAULT 0.00,
  `total_member_register_reword` int(11) NOT NULL DEFAULT 0,
  `total_member_register_reword_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `withdraw_charge`, `minimum_withdraw`, `maximum_withdraw`, `w_time_status`, `checkin`, `registration_bonus`, `total_member_register_reword`, `total_member_register_reword_amount`, `created_at`, `updated_at`, `telegram`) VALUES
(1, 2, 250.00, 50000.00, 'active', 0.00, 50.00, 0, 0.00, '2022-01-18 11:03:22', '2024-10-17 14:31:41', 'https://t.me/webdeveloper_sun');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_by` varchar(255) DEFAULT NULL,
  `ref_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `phone_code` varchar(20) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `package_tab` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `deposit_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `receive_able_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `checkin` double(20,2) NOT NULL DEFAULT 0.00,
  `reword_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `invest_cumulative_balance_received` double(20,2) NOT NULL DEFAULT 0.00,
  `invest_cumulative_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `interest_cumulative_balance_received` double(20,2) NOT NULL DEFAULT 0.00,
  `interest_cumulative_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `photo` varchar(255) DEFAULT NULL,
  `gateway_method` varchar(50) DEFAULT NULL,
  `gateway_number` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `ban_unban` enum('ban','unban') NOT NULL DEFAULT 'unban',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ref_by`, `ref_id`, `name`, `realname`, `phone_code`, `phone`, `ip`, `username`, `package_tab`, `email`, `email_verified_at`, `password`, `type`, `balance`, `deposit_balance`, `receive_able_amount`, `checkin`, `reword_balance`, `invest_cumulative_balance_received`, `invest_cumulative_balance`, `interest_cumulative_balance_received`, `interest_cumulative_balance`, `photo`, `gateway_method`, `gateway_number`, `remember_token`, `status`, `ban_unban`, `created_at`, `updated_at`) VALUES
(113, '24735975', '564qx621om', '', NULL, '+880', '3042324661456', '154.80.109.86', 'uname3042324661456', NULL, 'user796581742079290@gmail.com', NULL, '$2y$10$kuX8LXka.yg9ZqrzdfzfZ.1JrBaECbo44Xdl77WW4QpXBEpCM8Noa', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2025-03-16 08:54:50', '2025-03-16 08:54:50'),
(121, '9201446', '8572378193', 'topnft', NULL, '+880', '12345678', '103.178.191.173', 'uname12345678', NULL, 'user182231754056566@gmail.com', NULL, '$2y$10$/0qMo4rdvf/lvt9V/LSD.uQkBCE0Ms2FuObxZlDwYLBHHBadHGg.y', NULL, 100.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 'USDT TRC20', NULL, NULL, 'active', 'unban', '2025-08-01 19:56:06', '2026-01-29 01:56:44'),
(122, '8572378193', '8069635846', 'User36', NULL, '+880', '1234567855', '103.178.191.173', 'uname1234567855', NULL, 'user363961754058011@gmail.com', NULL, '$2y$10$ItkP3jisMqnO0.2Q5gfR/O4/KWaB0PuTyqcrF9vRa8yA1SGVeuhU.', NULL, 50.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2025-08-01 20:20:11', '2025-08-01 20:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_ledgers`
--

CREATE TABLE `user_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `get_balance_from_user_id` bigint(20) DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  `perticulation` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected','default') NOT NULL DEFAULT 'default',
  `date` varchar(255) DEFAULT NULL,
  `step` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_ledgers`
--

INSERT INTO `user_ledgers` (`id`, `user_id`, `get_balance_from_user_id`, `reason`, `perticulation`, `amount`, `debit`, `credit`, `status`, `date`, `step`, `created_at`, `updated_at`) VALUES
(1, 21, NULL, 'withdraw_request', 'withdraw request status is pending', 500, 475, 0, 'pending', '28-04-2024 01:09', NULL, '2024-04-28 00:09:52', '2024-04-28 00:09:52'),
(2, 21, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our BITLA', 6000, 6000, 0, 'approved', '28-04-2024 01:23', NULL, '2024-04-28 00:23:31', '2024-04-28 00:23:31'),
(3, 21, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our BITLA', 6000, 6000, 0, 'approved', '28-04-2024 01:24', NULL, '2024-04-28 00:24:53', '2024-04-28 00:24:53'),
(4, 36, NULL, 'Claim', 'Congratulations User85 you are successfully get your bonus.', 2, 2, 0, 'approved', '28-04-2024 12:31', NULL, '2024-04-28 11:31:17', '2024-04-28 11:31:17'),
(5, 36, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 25000, 25000, 0, 'approved', '28-04-2024 12:35', NULL, '2024-04-28 11:35:57', '2024-04-28 11:35:57'),
(6, 39, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 2800, 2800, 0, 'approved', '16-10-2024 03:23', NULL, '2024-10-16 02:23:03', '2024-10-16 02:23:03'),
(7, 36, NULL, 'daily_income', 'Daily Income Added', 35, 0, 35, 'approved', '2024-10-16 03:32:01', NULL, '2024-10-16 02:32:01', '2024-10-16 02:32:01'),
(8, 39, NULL, 'daily_income', 'Daily Income Added', 4.5, 0, 4.5, 'approved', '2024-10-16 03:32:01', NULL, '2024-10-16 02:32:01', '2024-10-16 02:32:01'),
(9, 39, NULL, 'withdraw_request', 'withdraw request status is pending', 4, 3.8, 0, 'pending', '16-10-2024 03:45', NULL, '2024-10-16 02:45:16', '2024-10-16 02:45:16'),
(10, 39, NULL, 'withdraw_approved', 'Your withdraw already approved. thanks for withdraw in our Hello Coder', 4, 3.8, 0, 'approved', '16-10-2024 03:46', NULL, '2024-10-16 02:46:11', '2024-10-16 02:46:11'),
(11, 40, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 33000, 33000, 0, 'approved', '16-10-2024 03:49', NULL, '2024-10-16 02:49:03', '2024-10-16 02:49:03'),
(12, 39, 40, 'commission', 'First Level Commission Received', 45, 45, 0, 'approved', '16-10-2024 03:49', 'first', '2024-10-16 02:49:40', '2024-10-16 02:49:40'),
(13, 39, NULL, 'withdraw_request', 'withdraw request status is pending', 4, 3.8, 0, 'pending', '17-10-2024 02:05', NULL, '2024-10-17 01:05:05', '2024-10-17 01:05:05'),
(14, 44, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Nexus Core', 5000, 5000, 0, 'approved', '17-10-2024 03:17', NULL, '2024-10-17 07:17:24', '2024-10-17 07:17:24'),
(15, 43, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Nexus Core', 50000, 50000, 0, 'approved', '17-10-2024 03:19', NULL, '2024-10-17 07:19:26', '2024-10-17 07:19:26'),
(16, 44, NULL, 'daily_income', 'Daily Income Added', 100, 0, 100, 'approved', '2024-10-17 03:25:52', NULL, '2024-10-17 07:25:52', '2024-10-17 07:25:52'),
(17, 44, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-17 03:25:52', NULL, '2024-10-17 07:25:52', '2024-10-17 07:25:52'),
(18, 43, NULL, 'daily_income', 'Daily Income Added', 100, 0, 100, 'approved', '2024-10-17 03:25:52', NULL, '2024-10-17 07:25:52', '2024-10-17 07:25:52'),
(19, 43, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-17 03:25:52', NULL, '2024-10-17 07:25:52', '2024-10-17 07:25:52'),
(20, 45, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Nexus Core', 1000, 1000, 0, 'approved', '17-10-2024 08:44', NULL, '2024-10-17 12:44:12', '2024-10-17 12:44:12'),
(21, 44, 45, 'commission', 'First Level Commission Received', 60, 60, 0, 'approved', '17-10-2024 08:44', 'first', '2024-10-17 12:44:24', '2024-10-17 12:44:24'),
(22, 46, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Nexus Core', 1000, 1000, 0, 'approved', '17-10-2024 08:45', NULL, '2024-10-17 12:45:53', '2024-10-17 12:45:53'),
(23, 45, 46, 'commission', 'First Level Commission Received', 60, 60, 0, 'approved', '17-10-2024 08:46', 'first', '2024-10-17 12:46:18', '2024-10-17 12:46:18'),
(24, 44, 46, 'commission', 'Second Level Commission Received', 30, 30, 0, 'approved', '17-10-2024 08:46', 'second', '2024-10-17 12:46:18', '2024-10-17 12:46:18'),
(25, 47, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Nexus Core', 1000, 1000, 0, 'approved', '17-10-2024 08:47', NULL, '2024-10-17 12:47:59', '2024-10-17 12:47:59'),
(26, 46, 47, 'commission', 'First Level Commission Received', 60, 60, 0, 'approved', '17-10-2024 08:48', 'first', '2024-10-17 12:48:08', '2024-10-17 12:48:08'),
(27, 45, 47, 'commission', 'Second Level Commission Received', 30, 30, 0, 'approved', '17-10-2024 08:48', 'second', '2024-10-17 12:48:08', '2024-10-17 12:48:08'),
(28, 44, 47, 'commission', 'Third Level Commission Received', 10, 10, 0, 'approved', '17-10-2024 08:48', 'third', '2024-10-17 12:48:08', '2024-10-17 12:48:08'),
(29, 44, NULL, 'withdraw_request', 'withdraw request status is pending', 300, 294, 0, 'pending', '17-10-2024 10:32', NULL, '2024-10-17 14:32:14', '2024-10-17 14:32:14'),
(30, 44, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-18 00:16:13', NULL, '2024-10-18 04:16:13', '2024-10-18 04:16:13'),
(31, 43, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-18 00:16:13', NULL, '2024-10-18 04:16:13', '2024-10-18 04:16:13'),
(32, 45, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-18 00:16:13', NULL, '2024-10-18 04:16:13', '2024-10-18 04:16:13'),
(33, 46, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-18 00:16:13', NULL, '2024-10-18 04:16:13', '2024-10-18 04:16:13'),
(34, 47, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-18 00:16:13', NULL, '2024-10-18 04:16:13', '2024-10-18 04:16:13'),
(35, 44, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-19 16:56:41', NULL, '2024-10-19 20:56:41', '2024-10-19 20:56:41'),
(36, 43, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-19 16:56:41', NULL, '2024-10-19 20:56:41', '2024-10-19 20:56:41'),
(37, 45, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-19 16:56:41', NULL, '2024-10-19 20:56:41', '2024-10-19 20:56:41'),
(38, 46, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-19 16:56:41', NULL, '2024-10-19 20:56:41', '2024-10-19 20:56:41'),
(39, 47, NULL, 'daily_income', 'Daily Income Added', 250, 0, 250, 'approved', '2024-10-19 16:56:41', NULL, '2024-10-19 20:56:41', '2024-10-19 20:56:41'),
(40, 54, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 55066, 55066, 0, 'approved', '20-10-2024 02:13', NULL, '2024-10-20 01:13:02', '2024-10-20 01:13:02'),
(41, 55, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 5500, 5500, 0, 'approved', '20-10-2024 08:08', NULL, '2024-10-20 07:08:47', '2024-10-20 07:08:47'),
(42, 54, NULL, 'daily_income', 'Daily Income Added', 35, 0, 35, 'approved', '2024-10-20 08:10:21', NULL, '2024-10-20 07:10:21', '2024-10-20 07:10:21'),
(43, 54, NULL, 'daily_income', 'Daily Income Added', 35, 0, 35, 'approved', '2024-10-20 08:10:21', NULL, '2024-10-20 07:10:21', '2024-10-20 07:10:21'),
(44, 54, NULL, 'daily_income', 'Daily Income Added', 70, 0, 70, 'approved', '2024-10-20 08:10:21', NULL, '2024-10-20 07:10:21', '2024-10-20 07:10:21'),
(45, 54, NULL, 'daily_income', 'Daily Income Added', 70, 0, 70, 'approved', '2024-10-20 08:10:21', NULL, '2024-10-20 07:10:21', '2024-10-20 07:10:21'),
(46, 55, NULL, 'daily_income', 'Daily Income Added', 35, 0, 35, 'approved', '2024-10-20 08:10:21', NULL, '2024-10-20 07:10:21', '2024-10-20 07:10:21'),
(47, 54, NULL, 'withdraw_request', 'withdraw request status is pending', 500, 490, 0, 'pending', '04-02-2025 02:13', NULL, '2025-02-04 07:13:53', '2025-02-04 07:13:53'),
(48, 54, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 3200, 3200, 0, 'approved', '04-02-2025 17:23', NULL, '2025-02-04 22:23:58', '2025-02-04 22:23:58'),
(49, 62, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 400, 400, 0, 'approved', '04-02-2025 17:24', NULL, '2025-02-04 22:24:59', '2025-02-04 22:24:59'),
(50, 58, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 500, 500, 0, 'approved', '04-02-2025 17:25', NULL, '2025-02-04 22:25:02', '2025-02-04 22:25:02'),
(51, 62, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 25600, 25600, 0, 'approved', '04-02-2025 17:26', NULL, '2025-02-04 22:26:30', '2025-02-04 22:26:30'),
(52, 54, NULL, 'withdraw_request', 'withdraw request status is pending', 250, 245, 0, 'pending', '15-03-2025 04:56', NULL, '2025-03-15 08:56:14', '2025-03-15 08:56:14'),
(53, 114, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 2500, 2500, 0, 'approved', '16-07-2025 21:22', NULL, '2025-07-16 21:22:49', '2025-07-16 21:22:49'),
(54, 114, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 5000, 5000, 0, 'approved', '24-07-2025 18:13', NULL, '2025-07-24 18:13:17', '2025-07-24 18:13:17'),
(55, 114, NULL, 'daily_income', 'Daily Income Added', 2, 0, 2, 'approved', '2025-07-24 18:14:12', NULL, '2025-07-24 18:14:12', '2025-07-24 18:14:12'),
(56, 114, NULL, 'daily_income', 'Daily Income Added', 4.75, 0, 4.75, 'approved', '2025-07-24 18:14:12', NULL, '2025-07-24 18:14:12', '2025-07-24 18:14:12'),
(57, 114, NULL, 'daily_income', 'Daily Income Added', 15, 0, 15, 'approved', '2025-07-24 18:14:12', NULL, '2025-07-24 18:14:12', '2025-07-24 18:14:12'),
(58, 115, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 5000, 5000, 0, 'approved', '24-07-2025 18:29', NULL, '2025-07-24 18:29:05', '2025-07-24 18:29:05'),
(59, 114, NULL, 'withdraw_request', 'withdraw request status is pending', 250, 245, 0, 'pending', '25-07-2025 11:48', NULL, '2025-07-25 11:48:09', '2025-07-25 11:48:09'),
(60, 114, NULL, 'withdraw_request', 'withdraw request status is pending', 250, 245, 0, 'pending', '01-08-2025 06:54', NULL, '2025-08-01 06:54:41', '2025-08-01 06:54:41'),
(61, 121, NULL, 'withdraw_request', 'withdraw request status is pending', 300, 294, 0, 'pending', '01-08-2025 21:06', NULL, '2025-08-01 21:06:21', '2025-08-01 21:06:21'),
(62, 121, NULL, 'withdraw_request', 'withdraw request status is pending', 400, 392, 0, 'pending', '01-08-2025 21:08', NULL, '2025-08-01 21:08:44', '2025-08-01 21:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `vip_sliders`
--

CREATE TABLE `vip_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `page_type` enum('home_page','vip_page') NOT NULL DEFAULT 'home_page',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vip_sliders`
--

INSERT INTO `vip_sliders` (`id`, `photo`, `status`, `page_type`, `created_at`, `updated_at`) VALUES
(11, '/public/upload/slider/1688711605xsK.jpg', 'active', 'home_page', '2023-07-05 01:06:16', '2023-07-07 04:33:25'),
(12, '/public/upload/slider/1688711639ObA.jpg', 'active', 'home_page', '2023-07-05 01:06:35', '2023-07-07 04:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `method_name` varchar(255) DEFAULT NULL,
  `oid` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `currency` varchar(40) NOT NULL,
  `rate` decimal(20,2) NOT NULL DEFAULT 0.00,
  `charge` decimal(20,2) NOT NULL DEFAULT 0.00,
  `trx` varchar(40) DEFAULT NULL,
  `final_amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `after_charge` decimal(20,2) NOT NULL DEFAULT 0.00,
  `withdraw_information` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending' COMMENT '1=>success, 2=>pending, 3=>cancel,  ',
  `admin_feedback` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `method_name`, `oid`, `number`, `amount`, `currency`, `rate`, `charge`, `trx`, `final_amount`, `after_charge`, `withdraw_information`, `status`, `admin_feedback`, `created_at`, `updated_at`) VALUES
(9, 121, 'USDT TRC20', 'W-73403537892692496', 'TLk76f18chJ9y3vYAn7KzJWHLHPjBrcsN3', 300.00, 'Bangladesh', 0.00, 6.00, NULL, 294.00, 0.00, NULL, 'pending', NULL, '2025-08-01 21:06:21', '2025-08-01 21:06:21'),
(10, 121, 'USDT TRC20', 'W-353450960273428663', 'TLk76f18chJ9y3vYAn7KzJWHLHPjBrcsN3', 400.00, 'Bangladesh', 0.00, 8.00, NULL, 392.00, 0.00, NULL, 'pending', NULL, '2025-08-01 21:08:44', '2025-08-01 21:08:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_ledgers`
--
ALTER TABLE `admin_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_ledgers`
--
ALTER TABLE `bonus_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkins_user_id_foreign` (`user_id`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lucky_ledgers_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`),
  ADD KEY `purchases_package_id_foreign` (`package_id`);

--
-- Indexes for table `rebates`
--
ALTER TABLE `rebates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_ledgers`
--
ALTER TABLE `user_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip_sliders`
--
ALTER TABLE `vip_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_ledgers`
--
ALTER TABLE `admin_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bonus_ledgers`
--
ALTER TABLE `bonus_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `rebates`
--
ALTER TABLE `rebates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `user_ledgers`
--
ALTER TABLE `user_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `vip_sliders`
--
ALTER TABLE `vip_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkins`
--
ALTER TABLE `checkins`
  ADD CONSTRAINT `checkins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  ADD CONSTRAINT `lucky_ledgers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
