-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 05:48 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone_no`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Lina', 'lina@gmail.com', '$2y$10$4ElCfOSvwT7y1OzaQfi9P.FueUXSwHBOW/xZ.S1KdlV/JYrbtSh6K', '01516149667', NULL, '2019-06-25 03:46:54', '2019-06-25 03:46:54');

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
(6, 'Bangladesh', 'Bangladesh', '1543349128.jpg', '2018-11-27 14:05:29', '2018-11-27 14:05:29'),
(7, 'Bangldesh 02', 'Bangladesh', '1543349711.jpg', '2018-11-27 14:15:11', '2018-11-27 14:15:11'),
(8, 'Bangladesh River 03', 'Bangladesh', '1543428012.jpg', '2018-11-28 11:57:59', '2018-11-28 12:00:12'),
(20, 'Bangladesh Awesome', 'Bangladesh', '1548100443.jpg', '2019-01-21 13:54:04', '2019-01-21 13:54:04'),
(21, 'Bangladesh Two', 'Bangladesh', '1548100483.jpg', '2019-01-21 13:54:43', '2019-01-21 13:54:43'),
(22, 'Bangladesh Three', 'Bangladesh', '1548100497.jpg', '2019-01-21 13:54:57', '2019-01-21 13:54:57'),
(23, 'Bangladesh Four', 'Bangladesh', '1548100621.jpg', '2019-01-21 13:57:01', '2019-01-21 13:57:01'),
(24, 'Dhaka One', 'Dhaka', '1548101856.jpg', '2019-01-21 14:17:37', '2019-01-21 14:17:37'),
(25, 'Dhaka two', 'Dhaka', '1548101872.jpg', '2019-01-21 14:17:52', '2019-01-21 14:17:52'),
(26, 'Dhaka Three', 'Dhaka', '1548101891.jpg', '2019-01-21 14:18:11', '2019-01-21 14:18:11'),
(27, 'Barishal', 'Barishal', '1548102097.jpg', '2019-01-21 14:21:37', '2019-01-21 14:21:37'),
(28, 'Barishal two', 'Barishal', '1548102110.jpg', '2019-01-21 14:21:50', '2019-01-21 14:21:50'),
(29, 'Khulna One', 'Khulna', '1548102217.jpg', '2019-01-21 14:23:37', '2019-01-21 14:23:37'),
(30, 'Khulna Two', 'Khulna', '1548102237.jpg', '2019-01-21 14:23:58', '2019-01-21 14:23:58'),
(31, 'Chita One', 'Chittagong', '1548102378.jpg', '2019-01-21 14:26:18', '2019-01-21 14:26:18'),
(32, 'Chita Two', 'Chittagong', '1548102392.jpg', '2019-01-21 14:26:32', '2019-01-21 14:26:32'),
(33, 'Maymonshing', 'Mymensingh', '1548102487.jpg', '2019-01-21 14:28:08', '2019-01-21 14:28:08'),
(34, 'Maymonshing Two', 'Mymensingh', '1548102524.jpg', '2019-01-21 14:28:44', '2019-01-21 14:28:44'),
(35, 'Rajshahi', 'Rajshahi', '1548102601.jpg', '2019-01-21 14:30:02', '2019-01-21 14:30:02'),
(36, 'Rajshahi', 'Rajshahi', '1548102621.jpg', '2019-01-21 14:30:21', '2019-01-21 14:30:21'),
(37, 'Rangpur', 'Rangpur', '1548102726.jpg', '2019-01-21 14:32:06', '2019-01-21 14:32:06'),
(38, 'Rangpur Two', 'Rangpur', '1548102769.jpg', '2019-01-21 14:32:49', '2019-01-21 14:32:49'),
(39, 'Sylhet one', 'Sylhet', '1548102855.jpg', '2019-01-21 14:34:15', '2019-01-21 14:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `division`, `area`, `title`, `description`, `image`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Hospital', 'Dhaka Medical Collage Hospital', 'Dhaka Medical College and Hospital is a medical college and hospital located in Dhaka, the capital city of Bangladesh. It is situated in the Bakshibazar area of the city, close to the University of Dhaka and the Bangladesh University of Engineering and Technology.\r\nWebsite: http://www.dmc.gov.bd/', '1548103362.jpg', 'https://goo.gl/UaCWx6', '2019-01-21 14:42:42', '2019-01-21 14:42:42'),
(2, 'Dhaka', 'Hospital', 'Square Hospital', 'Address: 18/F, Bir Uttam Qazi Nuruzzaman Sarak West, Panthapath, Dhaka 1205\r\nHours: \r\nOpen 24 hours\r\n\r\nPhone: 02-8144400 ext. 10616', '1548103577.jpg', 'https://goo.gl/dHNMCJ', '2019-01-21 14:46:17', '2019-01-21 14:46:17'),
(3, 'Dhaka', 'Hospital', 'Labaid Specialized Hospital', 'Labaid Hotline : 10606\r\n24 hours Emergency: 01713333337\r\nLabaid Cardiac customer care: 01766663222', '1548104535.jpg', 'https://goo.gl/pHXBkZ', '2019-01-21 15:02:15', '2019-01-21 15:02:15'),
(4, 'Dhaka', 'Hotel', 'The Westin Dhaka', 'The Westin Dhaka\r\nAddress: Main Gulshan Avenue, Plot-01 Rd 45, Dhaka 1212\r\nPhone: 02-9891988', '1548104712.jpg', 'https://goo.gl/yVMYLR', '2019-01-21 15:05:12', '2019-01-21 15:05:12'),
(5, 'Dhaka', 'Hotel', 'Pan Pacific Sonargaon Dhaka Hotel', 'Pan Pacific Sonargaon Dhaka Hotel\r\nAddress: 107 Kazi Nazrul Islam Ave, Dhaka 1215\r\nPhone: 02-9128008', '1548104813.jpg', 'https://goo.gl/quhbkQ', '2019-01-21 15:06:53', '2019-01-21 15:06:53'),
(6, 'Dhaka', 'Hotel', 'Le Méridien Dhaka', 'Le Méridien Dhaka\r\nAddress: 79/A Commercial Area, Airport Road, Dhaka 1229\r\nPhone: 09638-900089', '1548105036.jpg', 'https://goo.gl/fBVXAE', '2019-01-21 15:10:36', '2019-01-21 15:10:36'),
(7, 'Dhaka', 'Historical Place', 'Bara Katra', 'Bara Katra:\r\nAddress: Dhaka\r\nOpened: 1646\r\nHours: \r\nOpen 24 hours\r\nCompletion date: 1646\r\nBeginning date: 1644', '1548105230.jpg', 'https://goo.gl/E5eDi3', '2019-01-21 15:13:50', '2019-01-21 15:13:50'),
(8, 'Dhaka', 'Historical Place', 'Shaheed Minar', 'Shaheed Minar, Dhaka\r\nAddress: Near Dhaka Medical College Gate, Secretariat Road, Polashi, Secretariate Road, Dhaka 1000\r\nHeight: 46′\r\nHours: \r\nOpen 24 hours\r\nArchitect: Hamidur Rahman', '1548105346.jpg', 'https://goo.gl/UuUb11', '2019-01-21 15:15:46', '2019-01-21 15:15:46'),
(9, 'Dhaka', 'Historical Place', 'Lalbagh Fort', 'Lalbagh Fort\r\nAddress: Lalbagh Rd, Dhaka 1211\r\nOpened: 1678\r\nHours: \r\nClosed ⋅ Opens 9AM Tue\r\nPhone: 02-9673018', '1548105455.jpg', 'https://goo.gl/7oHoRU', '2019-01-21 15:17:36', '2019-01-21 15:17:36'),
(10, 'Dhaka', 'Fire Service', 'Bangladesh Fire Service and Civil Defense', 'Bangladesh Fire Service and Civil Defense\r\nAddress: Mirpur Rd, Dhaka 1205\r\nPhone: 0955-66667', '1548105562.jpg', 'https://goo.gl/1fLe8q', '2019-01-21 15:19:22', '2019-01-21 15:19:22'),
(11, 'Dhaka', 'Police Station', 'Bangladesh Police Head Quarters', 'Bangladesh Police Head Quarters, Dhaka\r\nAddress: 6 Phoenix Rd, Dhaka 1000\r\nPhone: 02-9558363', '1548105724.JPG', 'https://goo.gl/9j6kD1', '2019-01-21 15:22:04', '2019-01-21 15:22:04'),
(12, 'Barishal', 'Hospital', 'Grameen GC Eye Hospital', 'Grameen GC Eye Hospital, Address: Near RAB Office, Barisal - Pirojpur Highway, Rupatoli, Barishal 8200\r\nHours: \r\nPhone: 0431-71740', '1548106180.jpg', 'https://goo.gl/uWPFf4', '2019-01-21 15:29:40', '2019-01-21 15:29:40'),
(13, 'Barishal', 'Hospital', 'Sher e Bangla Medical College', 'Sher e Bangla Medical College\r\nSher-e-Bangla Medical College, is a government medical school in Bangladesh, established in 1968. It is located in Barisal. It is affiliated with University of Dhaka as a constituent college. SBMC awards MBBS degree and offers professional training and medical research facility at its hospital with 1000 beds.', '1548106336.jpg', 'https://goo.gl/gQikiu', '2019-01-21 15:32:16', '2019-01-21 15:32:16'),
(14, 'Barishal', 'Historical Place', 'Shaheed Kazi Azizul Islam Monument', 'Shaheed Kazi Azizul Islam Monument,', '1548106518.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d938175.507790329!2d89.70338634262424!3d23.28860182491156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755346f6eafdda9%3A0x80cffddb2aec930d!2sShaheed+Kazi+Azizul+Islam+Monument!5e0!3m2!1sen!2sbd!4v1548106434294', '2019-01-21 15:35:18', '2019-01-21 15:35:18'),
(15, 'Chittagong', 'Hotel', 'Hotel The Cox Today', 'Hotel The Cox Today\r\nAddress: Plot - 07, Road - 02, Hotel Motel Zone, Kolatoly Road, 4700\r\nPhone: 0341-52410', '1548124686.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886161.4130725397!2d90.1138516758309!3d22.582506217348627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc8650b8ad619%3A0x1e4481d35c0803bb!2sHotel+The+Cox+Today!5e0!3m2!1sen!2sbd!4v1548124660580', '2019-01-21 20:38:08', '2019-01-21 20:38:08');

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
(12, '2019_01_21_061649_create_admins_table', 7),
(13, '2018_12_07_110446_create_statuses_table', 8),
(14, '2018_12_01_141741_create_information_table', 9);

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
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `user_id`, `post`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Lina', 'Hello.', '1572324053.jpg', '2019-10-28 22:40:53', '2019-10-28 22:40:53');

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
(1, 'Lina', 'lina@gmail.com', '$2y$10$IlPYxkeWgrs4u3nB5x7jz.V5wzdDMJRD1I1hu4tmEFeEBAjpLVS.q', 'a5bB2aQxtJuUQRtHlDAMz7Hwx365jXFIgAHK3RhQ1ROoFRkHUsKp0PGFr0Yg', '2018-12-06 23:18:14', '2018-12-06 23:18:14');

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `allphotos`
--
ALTER TABLE `allphotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
