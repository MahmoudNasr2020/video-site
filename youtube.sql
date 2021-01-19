-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 08:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahmoud Nasr', 'mmmm@gmail.com', NULL, '$2y$10$9VrIMTZP/bcum41J/LIi4ORyaInwZ/Xnc9zdVMxLmjAncfE8K6xYi', NULL, '2020-09-30 12:58:47', '2020-09-30 12:58:47'),
(2, 'ahmed', 'mmmnnn2020@gmail.com', NULL, '$2y$10$Gs0N3166aCIehh2Ap6WK6e8nkch.fyaSL9JcU0hBjmOZFwL58x18O', NULL, '2020-11-18 14:52:59', '2020-11-18 14:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(21, 'شبهات عن الاسلام', '12', 'سء\\سيشي', '2020-09-30 13:21:34', '2020-09-30 13:21:34'),
(23, 'اليهودية', '12', 'ئءئؤئءؤ', '2020-09-30 13:21:53', '2020-09-30 13:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `video_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'ههههه', 17, 1, '2020-09-30 13:09:52', '2020-09-30 13:09:52'),
(2, 'عندك حق', 17, 1, '2020-09-30 13:10:03', '2020-09-30 13:10:03'),
(4, 'لا اله الا الله', 23, 1, '2020-09-30 15:08:33', '2020-09-30 15:08:33'),
(6, 'لا اله الا الله', 26, 1, '2020-09-30 21:00:18', '2020-09-30 21:18:38'),
(10, 'لا اله الا الله', 25, 1, '2020-10-01 21:48:34', '2020-10-01 21:48:34'),
(11, 'ddsfsdf', 24, 2, '2020-10-03 16:30:44', '2020-10-03 16:30:44'),
(12, 'iiiiiiiiiiii', 24, 2, '2020-10-03 18:16:09', '2020-10-03 18:16:09'),
(13, 'zzzzzzzzz', 24, 2, '2020-10-03 18:22:33', '2020-10-03 18:22:33'),
(15, 'شسيشيش', 24, 2, '2020-10-03 18:28:55', '2020-10-03 18:28:55'),
(16, 'ئء\\ئءئ', 24, 2, '2020-10-03 18:30:48', '2020-10-03 18:30:48'),
(17, '\\zx\\zx', 24, 1, '2020-10-03 19:40:36', '2020-10-03 19:40:36'),
(18, 'asaSas', 24, 1, '2020-10-03 19:43:16', '2020-10-03 19:43:16'),
(19, 'كويس جدا جدا', 24, 1, '2020-10-03 19:43:26', '2020-10-03 19:43:26'),
(20, 'لا حول ولا قوة الا بالله', 26, 2, '2020-10-03 21:15:46', '2020-10-03 21:15:46'),
(21, 'ببببب', 22, 2, '2020-10-03 21:44:58', '2020-10-03 21:44:58'),
(22, 'dsdasd', 26, 2, '2020-10-03 21:48:48', '2020-10-03 21:48:48'),
(23, 'dcdssadsadas', 26, 2, '2020-10-03 21:48:51', '2020-10-03 21:48:51'),
(24, 'dssdfsd', 26, 2, '2020-10-03 21:48:54', '2020-10-03 21:48:54'),
(25, 'jkjhj', 26, 2, '2020-10-03 21:48:58', '2020-10-03 21:48:58'),
(26, 'kjkjk', 26, 2, '2020-10-03 21:49:02', '2020-10-03 21:49:02'),
(27, 'jhjkhkjhkj', 26, 2, '2020-10-03 21:49:05', '2020-10-03 21:49:05'),
(28, 'hghfhf', 26, 2, '2020-10-03 21:49:08', '2020-10-03 21:49:08'),
(29, 'ughjghjg', 26, 2, '2020-10-03 21:49:20', '2020-10-03 21:49:20'),
(30, 'jhghjgjhg', 26, 2, '2020-10-03 21:49:24', '2020-10-03 21:49:24'),
(31, 'dsdadqwewq', 26, 2, '2020-10-03 21:50:06', '2020-10-03 21:50:06'),
(32, 'xzz', 26, 2, '2020-10-03 21:52:00', '2020-10-03 21:52:00'),
(33, 'xxx', 26, 2, '2020-10-03 21:52:29', '2020-10-03 21:52:29'),
(34, 'xxxxxxx', 26, 2, '2020-10-03 21:53:39', '2020-10-03 21:53:39'),
(35, '\\\\\\sss', 26, 2, '2020-10-03 21:54:14', '2020-10-03 21:54:14'),
(36, 'ccc', 26, 2, '2020-10-03 21:54:18', '2020-10-03 21:54:18'),
(37, 'ccc', 26, 2, '2020-10-03 21:54:45', '2020-10-03 21:54:45'),
(38, 'zxzx', 26, 2, '2020-10-03 21:54:50', '2020-10-03 21:54:50'),
(39, 'cccccc', 26, 2, '2020-10-03 21:59:01', '2020-10-03 21:59:01'),
(40, 'zxzxzx', 26, 2, '2020-10-03 21:59:15', '2020-10-03 21:59:15'),
(41, 'xzxzxzxzcxcv', 26, 2, '2020-10-03 21:59:30', '2020-10-03 21:59:30'),
(42, 'xzxzzx', 26, 2, '2020-10-03 21:59:41', '2020-10-03 21:59:41'),
(43, 'لا اله الا الله', 26, 2, '2020-10-03 22:00:05', '2020-10-03 22:00:05'),
(44, 'zxxz', 26, 2, '2020-10-03 22:24:18', '2020-10-03 22:24:18'),
(45, 'cccc', 26, 2, '2020-10-03 22:26:55', '2020-10-03 22:26:55'),
(46, 'لا اله الا الله', 26, 2, '2020-10-03 22:27:06', '2020-10-03 22:27:06'),
(47, 'سبحان الله', 26, 1, '2020-10-04 21:13:12', '2020-10-04 21:13:12'),
(48, 'فيديو جيد', 26, 1, '2020-10-04 21:13:34', '2020-10-04 21:13:34'),
(49, 'لا اله الا الله', 26, 1, '2020-10-05 20:33:38', '2020-10-05 20:33:38'),
(50, 'محمد رسول الله', 23, 1, '2020-10-05 21:05:31', '2020-10-05 21:05:31'),
(51, 'سبحان الله', 26, 1, '2020-10-06 14:32:21', '2020-10-06 14:32:21'),
(53, 'لا اله الا الله', 25, 1, '2020-10-24 17:55:37', '2020-10-24 17:55:37'),
(54, 'سيسشثبسيبسي', 26, 1, '2020-11-10 18:46:40', '2020-11-10 18:46:40'),
(55, 'يبسيبسيب', 26, 1, '2020-11-10 18:46:49', '2020-11-10 18:46:49'),
(56, 'لا اله', 26, 1, '2020-11-10 18:47:00', '2020-11-10 18:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(151) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mahmoud Nasr', 'mmmnnn2016161515@gmail.com', 'لا اله الا الله', '2020-10-04 11:52:06', '2020-10-04 11:52:06'),
(2, 'Mahmoud Nasr', 'mmmnnn2016161515@gmail.com', 'asdasdasda', '2020-10-04 11:52:53', '2020-10-04 11:52:53'),
(6, 'Mahmoud Nasr', 'mmmnnn2016161515@gmail.com', '\\ءسشيسشيشسيسشيشس', '2020-10-24 17:53:07', '2020-10-24 17:53:07');

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
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `like` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `like`, `user_id`, `video_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 23, NULL, NULL),
(72, 1, 1, 23, '2020-10-01 14:50:53', '2020-10-01 14:50:53'),
(84, 1, 1, 22, '2020-10-01 21:45:18', '2020-10-01 21:45:18'),
(89, 1, 2, 26, '2020-10-03 14:33:24', '2020-10-03 14:33:24'),
(91, 1, 2, 24, '2020-10-03 18:15:59', '2020-10-03 18:15:59'),
(92, 1, 1, 24, '2020-10-03 19:23:52', '2020-10-03 19:23:52'),
(93, 1, 2, 22, '2020-10-03 21:44:46', '2020-10-03 21:44:46'),
(95, 1, 3, 25, '2020-10-06 20:34:31', '2020-10-06 20:34:31'),
(96, 1, 1, 26, '2020-10-16 16:31:57', '2020-10-16 16:31:57'),
(97, 1, 1, 27, '2020-10-16 16:41:38', '2020-10-16 16:41:38'),
(98, 1, 1, 25, '2020-10-24 17:55:28', '2020-10-24 17:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `like_comment`
--

CREATE TABLE `like_comment` (
  `id` int(11) NOT NULL,
  `like` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_comment`
--

INSERT INTO `like_comment` (`id`, `like`, `user_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(36, 1, 2, 12, '2020-10-03 18:16:21', '2020-10-03 18:16:21'),
(37, 1, 2, 11, '2020-10-03 18:16:25', '2020-10-03 18:16:25'),
(41, 1, 2, 13, '2020-10-03 19:22:36', '2020-10-03 19:22:36'),
(42, 1, 1, 13, '2020-10-03 19:23:09', '2020-10-03 19:23:09'),
(43, 1, 1, 12, '2020-10-03 19:23:11', '2020-10-03 19:23:11'),
(44, 1, 1, 11, '2020-10-03 19:23:12', '2020-10-03 19:23:12'),
(45, 1, 2, 6, '2020-10-03 21:15:52', '2020-10-03 21:15:52'),
(49, 1, 2, 20, '2020-10-03 21:43:02', '2020-10-03 21:43:02'),
(50, 1, 1, 20, '2020-10-03 21:43:26', '2020-10-03 21:43:26'),
(51, 1, 1, 6, '2020-10-03 21:43:27', '2020-10-03 21:43:27'),
(53, 1, 1, 43, '2020-10-04 21:13:48', '2020-10-04 21:13:48'),
(55, 1, 1, 46, '2020-10-04 21:13:55', '2020-10-04 21:13:55'),
(56, 1, 1, 47, '2020-10-04 21:13:58', '2020-10-04 21:13:58'),
(57, 1, 1, 48, '2020-10-04 21:14:01', '2020-10-04 21:14:01'),
(58, 1, 1, 49, '2020-10-05 20:33:50', '2020-10-05 20:33:50'),
(59, 1, 1, 45, '2020-10-16 16:32:39', '2020-10-16 16:32:39'),
(60, 1, 1, 42, '2020-10-16 16:32:46', '2020-10-16 16:32:46'),
(62, 1, 1, 10, '2020-10-24 18:00:37', '2020-10-24 18:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_20_131226_create_muslims_table', 1),
(5, '2020_09_21_112615_create_tags_table', 1),
(6, '2020_09_21_122911_create_pages_table', 1),
(7, '2020_09_21_140945_create_cats_table', 1),
(8, '2020_09_21_150806_create_videos_table', 1),
(9, '2020_09_22_153208_create_tags_videos_table', 1),
(10, '2020_09_23_130632_create_comments_table', 1),
(11, '2020_09_24_151958_create_admins_table', 1),
(12, '2020_09_29_014901_add_timezone_column_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `muslims`
--

CREATE TABLE `muslims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `muslims`
--

INSERT INTO `muslims` (`id`, `name`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(21, 'معاذ عليان', 'معاذ عليان', 'aaaaaaaaa', '2020-09-30 13:13:42', '2020-09-30 13:13:42'),
(22, 'احمد سبيع', '12', 'ششش', '2020-09-30 13:13:53', '2020-09-30 13:13:53'),
(23, 'منقذ السقار', '12', 'سيسسيب', '2020-09-30 13:14:06', '2020-09-30 13:14:06'),
(24, 'محمود داود', 'سبسيب', 'سيبسيبسي', '2020-09-30 13:14:17', '2020-09-30 13:14:17'),
(25, 'يحيي محمد', '12', 'ساهسايشهساب', '2020-10-19 20:24:03', '2020-10-19 20:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(21, 'الصلاه', '2020-09-30 13:22:12', '2020-09-30 13:22:12'),
(22, 'الزكاة', '2020-09-30 13:22:17', '2020-09-30 13:22:17'),
(23, 'الكتاب المقدس', '2020-09-30 13:22:25', '2020-09-30 13:22:25'),
(24, 'التوراة', '2020-09-30 13:22:31', '2020-09-30 13:22:31'),
(25, 'التلموذ', '2020-09-30 13:22:51', '2020-09-30 13:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `tags_videos`
--

CREATE TABLE `tags_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags_videos`
--

INSERT INTO `tags_videos` (`id`, `video_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 16, NULL, NULL),
(2, 2, 3, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 12, NULL, NULL),
(5, 5, 8, NULL, NULL),
(6, 6, 12, NULL, NULL),
(7, 7, 2, NULL, NULL),
(8, 8, 6, NULL, NULL),
(9, 9, 0, NULL, NULL),
(10, 10, 18, NULL, NULL),
(11, 11, 11, NULL, NULL),
(12, 12, 6, NULL, NULL),
(13, 13, 18, NULL, NULL),
(14, 14, 10, NULL, NULL),
(15, 15, 18, NULL, NULL),
(16, 16, 12, NULL, NULL),
(17, 17, 5, NULL, NULL),
(18, 18, 8, NULL, NULL),
(19, 19, 11, NULL, NULL),
(20, 20, 10, NULL, NULL),
(21, 21, 21, NULL, NULL),
(22, 21, 22, NULL, NULL),
(23, 22, 21, NULL, NULL),
(24, 22, 22, NULL, NULL),
(25, 23, 23, NULL, NULL),
(26, 26, 23, NULL, NULL),
(27, 26, 24, NULL, NULL),
(28, 27, 21, NULL, NULL),
(29, 27, 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT 'here your bio',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `bio`, `remember_token`, `timezone`, `created_at`, `updated_at`) VALUES
(1, 'Mahmoud', 'mmmnnn2016161515@gmail.com', '2020-10-06 20:26:07', '$2y$10$NPU1b1mFb0UgaPLaV4NsW.oxf2wMsjXgGeXLZW8ivCaeliUkKBb/S', '1601730398.jpg', 'محمود نصر 21 سنة', 'Jbke3eSi7hnT7M7erMhm9RGayGX0XJpmp4CEozqNocn2tuKY8RVZOFS8kBOg', 'America/New_York', '2020-09-30 13:08:39', '2020-10-06 20:47:55'),
(2, 'Ahmed Nasr', 'mmmnnn201616@gmail.com', '2020-10-06 20:30:15', '$2y$10$IG9nabUZhWft3x/UFmz83.yZqCq7MOE1LZZjGaUpwv3lplIZa/wIW', '1601730737.jpg', 'here your bio yes', NULL, 'America/New_York', '2020-10-03 13:07:47', '2020-10-06 20:30:15'),
(3, 'Mohamed Nasr', 'mmmnnn@gmail.com', '2020-10-06 20:34:27', '$2y$10$929sw9dYZSX9TQdXq2TCueqclwaOLKZ1Bm/.lkn7A70n/fkRczaPS', 'default.png', 'here your bio', NULL, 'America/New_York', '2020-10-06 20:33:14', '2020-10-06 20:34:27'),
(4, 'Noel Middleton', 'bagid@mailinator.com', NULL, '$2y$10$iZ.HlkOfN9Fe8CckCgFGs.tK4FaClzt4i/vFttnNttuF9IXc6TtK6', 'default.png', 'here your bio', NULL, 'America/New_York', '2020-11-10 18:41:45', '2020-11-10 18:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `views` int(11) NOT NULL DEFAULT 0,
  `day` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `muslim_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `desc`, `url`, `image`, `status`, `views`, `day`, `month`, `year`, `muslim_id`, `cat_id`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(21, 'الصلاة', 'الصلاة عماد الدين', 'https://www.youtube.com/watch?v=G9dy-Ag71WA&list=PLxefhmF0pcPkatGBnqCSa7ZrU4axKrm6p&index=2', '1601474985.jpg', 1, 2, '30', 'September', '2020', 21, 21, '15', 'شسششسش', '2020-09-30 14:09:45', '2020-10-06 15:35:32'),
(22, 'الزكاة', 'الزكاة ركن من اركان الاسلام', 'https://www.youtube.com/watch?v=G9dy-Ag71WA&list=PLxefhmF0pcPkatGBnqCSa7ZrU4axKrm6p&index=2', '1601475047.jpg', 1, 4, '30', 'September', '2020', 23, 22, 'توراه', 'ششششش', '2020-09-30 14:10:47', '2020-10-05 12:23:24'),
(23, 'الانجيل', 'تحريف الانجيل واسباب ذلك', 'https://www.youtube.com/watch?v=pnrQfXjDSRM&t=98s', '1601475117.jpg', 1, 9, '30', 'September', '2020', 24, 22, 'يسيشسي', 'Qui velit quia molli', '2020-09-30 14:11:57', '2020-10-05 21:05:17'),
(24, 'الصلاة', 'الصلاة عماد الدين', 'https://www.youtube.com/watch?v=G9dy-Ag71WA&list=PLxefhmF0pcPkatGBnqCSa7ZrU4axKrm6p&index=2', '1601474985.jpg', 1, 10, '30', 'September', '2020', 21, 21, '15', 'شسششسش', '2020-09-30 14:09:45', '2020-11-10 18:40:49'),
(25, 'الزكاة', 'الزكاة ركن من اركان الاسلام', 'https://www.youtube.com/watch?v=G9dy-Ag71WA&list=PLxefhmF0pcPkatGBnqCSa7ZrU4axKrm6p&index=2', '1601475047.jpg', 1, 11, '30', 'September', '2020', 23, 23, 'توراه', 'ششششش', '2020-09-30 14:10:47', '2020-10-24 17:55:09'),
(26, 'الانجيل', 'تحريف الانجيل واسباب ذلك', 'https://www.youtube.com/watch?v=pnrQfXjDSRM&t=98s', '1601475117.jpg', 1, 16, '30', 'September', '2020', 24, 21, 'يسيشسي', 'Qui velit quia molli', '2020-09-30 14:11:57', '2020-11-10 18:45:26'),
(27, 'soiliman', 'عن المسيحية', 'https://www.youtube.com/watch?v=AIYeG11qkjo', '1602866476.PNG', 1, 2, '16', 'October', '2020', 22, 22, 'شسي', 'سششس', '2020-10-16 16:41:16', '2020-10-24 18:00:00');

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
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_comment`
--
ALTER TABLE `like_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muslims`
--
ALTER TABLE `muslims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags_videos`
--
ALTER TABLE `tags_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
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
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `like_comment`
--
ALTER TABLE `like_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `muslims`
--
ALTER TABLE `muslims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tags_videos`
--
ALTER TABLE `tags_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
