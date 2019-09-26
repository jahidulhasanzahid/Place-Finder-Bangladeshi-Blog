-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 05:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `place`
--

-- --------------------------------------------------------

--
-- Table structure for table `allphotos`
--

CREATE TABLE `allphotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allphotos`
--

INSERT INTO `allphotos` (`id`, `photo_title`, `photo_division`, `image`, `created_at`, `updated_at`) VALUES
(4, 'new test 04', 'Chittagong', '1543658071.jpg', '2018-11-25 07:29:24', '2018-12-01 03:54:31'),
(5, 'forhad', 'Khulna', '1543341410.jpg', '2018-11-27 11:56:50', '2018-11-27 11:56:50'),
(6, 'Bangladesh', 'Bangladesh', '1543349128.jpg', '2018-11-27 14:05:29', '2018-11-27 14:05:29'),
(7, 'Bangldesh 02', 'Bangladesh', '1543349711.jpg', '2018-11-27 14:15:11', '2018-11-27 14:15:11'),
(8, 'Bangladesh River 03', 'Bangladesh', '1543428012.jpg', '2018-11-28 11:57:59', '2018-11-28 12:00:12'),
(9, 'Dhaka', 'Dhaka', '1543429441.jpg', '2018-11-28 12:24:02', '2018-11-28 12:24:02'),
(10, 'Dhaka Photo', 'Dhaka', '1543430794.jpg', '2018-11-28 12:42:21', '2018-11-28 12:46:35'),
(11, 'Barishal 01', 'Barishal', '1543656946.jpg', '2018-12-01 03:35:47', '2018-12-01 03:35:47'),
(12, 'Sylhet 01', 'Sylhet', '1543657236.jpg', '2018-12-01 03:40:36', '2018-12-01 03:40:36'),
(13, 'Rangpur 01', 'Rangpur', '1543671669.jpg', '2018-12-01 03:41:00', '2018-12-01 07:41:09'),
(14, 'Khulna', 'Khulna', '1543657337.jpg', '2018-12-01 03:42:17', '2018-12-01 03:42:17'),
(15, 'ChatGaii', 'Chittagong', '1543657359.jpg', '2018-12-01 03:42:40', '2018-12-01 03:42:40'),
(16, 'Mymonshing 01', 'Mymensingh', '1543657410.jpg', '2018-12-01 03:43:30', '2018-12-01 03:43:30'),
(17, 'Rajshahi 01', 'Rajshahi', '1543671546.jpg', '2018-12-01 07:39:06', '2018-12-01 07:39:06'),
(18, 'New One new', 'Rangpur', '1543723263.jpg', '2018-12-01 21:30:44', '2018-12-01 22:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `division`, `area`, `title`, `description`, `image`, `address`, `created_at`, `updated_at`) VALUES
(3, 'Dhaka', 'Hospital', 'Dhaka Medical', 'Dhaka Medical', '1543689654.jpg', 'map', '2018-12-01 12:40:55', '2018-12-01 12:40:55'),
(4, 'Dhaka', 'Hotel', 'Radison', 'Radison', '1543689707.jpg', 'map', '2018-12-01 12:41:48', '2018-12-01 12:41:48'),
(5, 'Dhaka', 'Fire Service', 'Dhaka Fire Service', 'Dhaka Fire Service', '1543689736.jpg', 'map', '2018-12-01 12:42:16', '2018-12-01 12:42:16'),
(6, 'Dhaka', 'Police Station', 'Dhaka Police Station', 'Dhaka Police Station 02', '1543691510.jpg', 'map', '2018-12-01 12:43:23', '2018-12-01 13:11:50'),
(7, 'Dhaka', 'Hospital', 'BSMUC', 'description 02', '1543721329.jpg', 'asdfggghj', '2018-12-01 21:28:14', '2018-12-01 21:28:49'),
(8, 'Dhaka', 'Historical Place', 'Lalbag Kella', 'Historical Place Lalbag Kella', '1544121141.jpg', 'https://goo.gl/maps/Y7szDgJSLYR2', '2018-12-06 12:32:22', '2018-12-06 12:32:22');

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
(6, '2018_11_25_103040_create_allphotos_table', 4),
(10, '2018_12_01_141741_create_information_table', 5),
(11, '2018_12_07_110446_create_statuses_table', 6);

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
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `user_id`, `post`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 'I Love My Country.', '1544196991.jpg', '2018-12-07 09:36:31', '2018-12-07 09:36:31'),
(2, 3, 'Hello Bangladesh!', '1544197829.jpg', '2018-12-07 09:50:29', '2018-12-07 09:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jahidul', 'jahidul@gmail.com', '$2y$10$IlPYxkeWgrs4u3nB5x7jz.V5wzdDMJRD1I1hu4tmEFeEBAjpLVS.q', 'PJ2F2K3cA5cEAm0pzrGIlk89T1Mkbovoo2XxHumATRTOowQXbiXAQ3a3Dzru', '2018-12-06 23:18:14', '2018-12-06 23:18:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allphotos`
--
ALTER TABLE `allphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
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
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `allphotos`
--
ALTER TABLE `allphotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
