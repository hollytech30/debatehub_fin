-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 05:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debatehub`
--
CREATE DATABASE IF NOT EXISTS `debatehub` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `debatehub`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

DROP TABLE IF EXISTS `contact_forms`;
CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `is_replied` tinyint(1) NOT NULL DEFAULT 0,
  `reply_message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `subject`, `message`, `is_read`, `is_replied`, `reply_message`, `created_at`, `updated_at`) VALUES
(1, 'oguta isaac', '1saacoguta1997@gmail.com', 'Test mic check', 'hey thee tester', 0, 0, NULL, '2024-01-22 06:00:29', '2024-01-22 06:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'How can a DebateHub enhance event organization?', 'DebateHub streamlines event organization by providing tools for participant registration, topic scheduling, and result reporting.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(2, 'What features should I look for in a DebateHub?', 'Look for features such as participant registration, scheduling, scoring, and support for various debate formats.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(3, 'What is a DebateHub?', 'A DebateHub is a software tool designed to facilitate the organization, scheduling, and scoring of debates or discussions.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(4, 'How can a DebateHub benefit tournament organizers?', 'DebateHub streamline the tournament organization process, improve efficiency, and provide a centralized platform for managing debates.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(5, 'What features should I look for in a DebateHub?', 'Look for features such as participant registration, topic scheduling, scoring, real-time updates, and user-friendly interfaces.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(6, 'Can DebateHus handle multiple debate formats?', 'Yes, many systems support various debate formats, including parliamentary, Lincoln-Douglas, and policy debates.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(7, 'How does a DebateHub handle participant registration?', 'Participants can typically register through the system by providing necessary information, and organizers can manage and track participant details.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(8, 'Is it possible to integrate a DebateHub with other tools or platforms?', 'Yes, some systems offer integration capabilities with popular platforms and tools, enhancing flexibility and functionality.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(9, 'How can a DebateHub adapt to last-minute changes in schedules or participants?', 'Systems may allow organizers to make real-time updates to schedules and participant information, ensuring flexibility.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(10, 'Can DebateHub be used for virtual or online debates?', 'Yes, many systems now support virtual debates, offering features for online participation, live streaming, and remote judging.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(11, 'Is DebateHub suitable for educational institutions?', 'Absolutely, these systems are commonly used in schools and universities to facilitate debates and enhance the learning experience.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(12, 'How user-friendly is DebateHub for event organizers?', 'The user interface varies, but most systems aim to be intuitive, with features like drag-and-drop scheduling and easy participant management.', '2024-01-14 17:45:50', '2024-01-14 17:45:50'),
(13, 'How can a DebateHub enhance event organization?', 'DebateHub streamlines event organization by providing tools for participant registration, topic scheduling, and result reporting.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(14, 'What features should I look for in a DebateHub?', 'Look for features such as participant registration, scheduling, scoring, and support for various debate formats.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(15, 'What is a DebateHub?', 'A DebateHub is a software tool designed to facilitate the organization, scheduling, and scoring of debates or discussions.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(16, 'How can a DebateHub benefit tournament organizers?', 'DebateHub streamline the tournament organization process, improve efficiency, and provide a centralized platform for managing debates.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(17, 'What features should I look for in a DebateHub?', 'Look for features such as participant registration, topic scheduling, scoring, real-time updates, and user-friendly interfaces.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(18, 'Can DebateHus handle multiple debate formats?', 'Yes, many systems support various debate formats, including parliamentary, Lincoln-Douglas, and policy debates.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(19, 'How does a DebateHub handle participant registration?', 'Participants can typically register through the system by providing necessary information, and organizers can manage and track participant details.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(20, 'Is it possible to integrate a DebateHub with other tools or platforms?', 'Yes, some systems offer integration capabilities with popular platforms and tools, enhancing flexibility and functionality.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(21, 'How can a DebateHub adapt to last-minute changes in schedules or participants?', 'Systems may allow organizers to make real-time updates to schedules and participant information, ensuring flexibility.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(22, 'Can DebateHub be used for virtual or online debates?', 'Yes, many systems now support virtual debates, offering features for online participation, live streaming, and remote judging.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(23, 'Is DebateHub suitable for educational institutions?', 'Absolutely, these systems are commonly used in schools and universities to facilitate debates and enhance the learning experience.', '2024-01-14 18:12:02', '2024-01-14 18:12:02'),
(24, 'How user-friendly is DebateHub for event organizers?', 'The user interface varies, but most systems aim to be intuitive, with features like drag-and-drop scheduling and easy participant management.', '2024-01-14 18:12:02', '2024-01-14 18:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2024_01_14_094755_create_sessions_table', 1),
(10, '2024_01_14_203027_create_faqs_table', 2),
(11, '2024_01_18_002504_create_permission_tables', 3),
(12, '2024_01_22_083416_create_contact_forms_table', 4),
(13, '2024_01_22_083523_create_newsletter_subscriptions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

DROP TABLE IF EXISTS `newsletter_subscriptions`;
CREATE TABLE `newsletter_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_subscriptions`
--

INSERT INTO `newsletter_subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'tatfum.wihsoky@gmial.com', '2024-01-22 05:59:52', '2024-01-22 05:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'edit debates', 'web', '2024-01-17 21:55:53', '2024-01-17 21:55:53'),
(2, 'delete debates', 'web', '2024-01-17 21:55:53', '2024-01-17 21:55:53'),
(3, 'publish debates', 'web', '2024-01-17 21:55:53', '2024-01-17 21:55:53'),
(4, 'unpublish debates', 'web', '2024-01-17 21:55:53', '2024-01-17 21:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
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
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `team_id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'tab-master', 'web', '2024-01-17 21:55:53', '2024-01-17 21:55:53'),
(2, NULL, 'moderator', 'web', '2024-01-17 21:55:53', '2024-01-17 21:55:53'),
(3, NULL, 'super-admin', 'web', '2024-01-17 21:55:53', '2024-01-17 21:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 3),
(3, 2),
(3, 3),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AozydeSvXFw2nAtHoyVZTYff9o4KaZtJRfky2i8T', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS0lMUEM0VGRYbWh2Zjk0VkQ4ekZCU01Jdk5KMjh4Nkh0Y3ZYT2k2OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJElMSmRJL2tMc3J0Q3FLLnBESXByUy4zVlZvbUcvYnl1TGVJTW5xLnVVRFUuUE9qMTVNMlN1Ijt9', 1705942078),
('kzSEYD09Kdy8HiemRLln47p50aTu6dJQ7trWqJc6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGZVcmtuN3lhYkFXMGpvY09EaWdoZUNqdENLSHd1VU0zb1JQbGl4eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1705918926);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 12, 'Ahairwe\'s Team', 1, '2024-01-14 08:33:04', '2024-01-14 08:33:04'),
(2, 12, 'holly tech', 0, '2024-01-14 08:56:51', '2024-01-14 08:56:51'),
(3, 13, 'Holly\'s Team', 1, '2024-01-14 09:12:24', '2024-01-14 09:12:24'),
(4, 14, 'Jordan\'s Team', 1, '2024-01-14 09:13:49', '2024-01-14 09:13:49'),
(5, 15, 'Dr.\'s Team', 1, '2024-01-17 09:40:10', '2024-01-17 09:40:10'),
(6, 20, 'Mutetsi\'s Team', 1, '2024-01-22 08:43:23', '2024-01-22 08:43:23'),
(7, 21, 'Jowie\'s Team', 1, '2024-01-22 10:04:29', '2024-01-22 10:04:29'),
(8, 22, 'Jowie\'s Team', 1, '2024-01-22 10:06:29', '2024-01-22 10:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

DROP TABLE IF EXISTS `team_invitations`;
CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_invitations`
--

INSERT INTO `team_invitations` (`id`, `team_id`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 'jordanaha@gmail.com', 'editor', '2024-01-14 08:35:10', '2024-01-14 08:35:10'),
(2, 4, 'jordankatetegirwe@gmail.com', 'editor', '2024-01-14 09:38:39', '2024-01-14 09:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

DROP TABLE IF EXISTS `team_user`;
CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Miguel Grimes', 'salvatore15@example.net', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'vuSuhO5GlO', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(2, 'Alfonzo Nicolas', 'rosalia20@example.net', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'h3saWXAyNe', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(3, 'Robb Hand', 'stan.medhurst@example.org', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '9FAoEXDokJ', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(4, 'Lindsay Bode', 'smccullough@example.com', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'kpUfgcav1U', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(5, 'Dr. Mia Kunze IV', 'cronin.candice@example.org', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'OZH0ubUeA3', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(6, 'Larissa Gutmann', 'camila.lindgren@example.net', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 's412TBDQe2', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(7, 'Dr. Keaton Wisoky DDS', 'kshanahan@example.com', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'S0vShPItq0', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(8, 'Rae Gutmann III', 'swift.eugenia@example.com', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '936sf1RtAI', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(9, 'Mrs. Allison Pfeffer', 'garland35@example.net', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'xItqfMIRrD', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(10, 'Anika Raynor', 'dubuque.rowena@example.com', '2024-01-14 08:28:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'eonGEPuHJJ', NULL, NULL, '2024-01-14 08:28:35', '2024-01-14 08:28:35'),
(12, 'Ahairwe Jordan', 'jordankatetegirwe@gmail.com', '2024-01-22 04:22:38', '$2y$12$ILJdI/kLsrtCqK.pDIprS.3VVomG/byuLeIMnq.uUDU.POj15M2Su', NULL, NULL, NULL, NULL, 2, NULL, '2024-01-14 08:33:04', '2024-01-22 04:22:38'),
(13, 'Holly Ahai', 'jordanahai@gmail.com', NULL, '$2y$12$mq/pIuM5kUqX.dUglrjUm.uHGQbJIzkT5dDiXx1Hk3IpsigHhJcoK', NULL, NULL, NULL, NULL, 3, NULL, '2024-01-14 09:12:24', '2024-01-14 09:12:24'),
(14, 'Jordan Ahabwe', 'jordan.ahai@gmail.com', NULL, '$2y$12$aIHeVyJlL9KOpCQQwo4w3.b3uqF00b/baOs8PhWf5nJeVlLG7jmtC', NULL, NULL, NULL, NULL, 4, NULL, '2024-01-14 09:13:49', '2024-01-14 09:13:50'),
(15, 'Dr. Tatfum Wihsoky', 'tatfum.wihsoky@gmial.com', NULL, '$2y$12$syM9y3W5ZiGIt/kmrMlR1.NAhPBntCm6I5oRIE1.WaQkHDZtxz6Gi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-17 09:40:10', '2024-01-17 09:40:10'),
(16, 'Kristy Waelchi Snr', 'jordan.waelchi.katetegirwe@gmail.com', NULL, '$2y$12$EVwD5GhouOX/zidrJupJBO855.cy2tpI8b9fdHUdhjDkRrqzKgs8m', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 04:08:33', '2024-01-18 04:08:33'),
(20, 'Mutetsi Hanifah', 'hani@mylove.com', NULL, '$2y$12$xetdhvQc6HNfyPMA6iXNVuIEGyRBWD0bCSJ1nELl9ZYYb70wD7Cga', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-22 08:43:22', '2024-01-22 08:43:22'),
(21, 'Jowie Landa', 'jowie@landa.com', NULL, '$2y$12$/7nJ2g6BXLHIICTxg2SX..WImo0QjvgOO00chbOAxxoxQNfIcuvAO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-22 10:04:29', '2024-01-22 10:04:29'),
(22, 'Jowie Landa', 'jowie1@landa.com', NULL, '$2y$12$h4943QzZMS8hJmemywkCbOm8X/fmeFC82kmGoqxsfa.fBNP2CscDO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-22 10:06:29', '2024-01-22 10:06:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`team_id`,`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  ADD KEY `model_has_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `model_has_permissions_team_foreign_key_index` (`team_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`team_id`,`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  ADD KEY `model_has_roles_role_id_foreign` (`role_id`),
  ADD KEY `model_has_roles_team_foreign_key_index` (`team_id`);

--
-- Indexes for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_subscriptions_email_unique` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_team_id_name_guard_name_unique` (`team_id`,`name`,`guard_name`),
  ADD KEY `roles_team_foreign_key_index` (`team_id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

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
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
