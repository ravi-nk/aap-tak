-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2021 at 07:39 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automon2_blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(11, 'Breaking News', 'breaking News', NULL, '2020-12-29 02:11:39', '2020-12-29 02:11:39'),
(12, 'Politics', 'politics', NULL, '2020-12-29 02:12:27', '2020-12-29 02:12:27'),
(13, 'Daily News', 'daily', NULL, '2020-12-29 02:14:22', '2020-12-29 02:14:22'),
(14, 'Basic Hard News', 'Basic Hard News', NULL, '2020-12-29 02:14:48', '2020-12-29 02:14:48'),
(15, 'Cricket News', 'Cricket News', NULL, '2020-12-29 02:15:23', '2020-12-29 02:15:23'),
(16, 'Fashion', 'Fashion', NULL, '2020-12-29 02:15:37', '2020-12-29 02:15:37'),
(17, 'Bollywood', 'Bollywood', NULL, '2020-12-29 02:15:49', '2020-12-29 02:15:49');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_12_26_073340_create_news_table', 1),
(4, '2020_12_26_092835_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vdolink` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category_id`, `description`, `image`, `vdolink`, `created_at`, `updated_at`) VALUES
(12, '‘Only I know the pain’: Rajinikanth apologises for not launching political party', 11, 'Actor Rajinikanth announced on Tuesday that he will not be launching his political party, for which the announcement was scheduled to be made on December 31. In a three-page statement that he posted on Twitter, the actor has apologised for not launching the party.\r\n“Only I know the pain of announcing this decision,” he said, adding that he will serve people without entering electoral politics. The 70-year-old actor was expected to float his political party in January 2021, ahead of the upcoming assembly elections in Tamil Nadu.', 'https://automoney.co.in/blogs/public/uploads/rajnikanth.jpg', NULL, '2020-12-29 02:18:37', '2020-12-31 05:18:32'),
(14, '\'Our Duty to Save Country From Dictatorship\': Sonia Gandhi on Foundation Day of Congress', 12, 'On the foundation day of the Congress on Monday, its chief Sonia Gandhi urged the party leaders and workers to unite in fighting dictatorship and protecting the country\'s democracy, Constitution and the countrymen. Addressing party workers in a video message on the 136th foundation day of the party, Gandhi said the country is going through difficult times as prevailing before independence.\r\n\r\nCongratulating the Congress leaders and workers on the completion of 135 years of the party\'s formation, she said it has traversed the path from the freedom struggle till now for achieving the values of patriotism, fearlessness, selflessness, selfless service towards humanity, brotherhood and the country\'s unity and integrity. Gandhi said the party was launched as part of a \"jan andolan\" (people\'s movement) during the freedom struggle and has seen times when atrocities were committed on its leaders and workers.', 'https://automoney.co.in/blogs/public/uploads/politics.webp', NULL, '2020-12-29 02:35:46', '2020-12-29 02:35:46'),
(15, '‘Dramatic and very, very fast’: COVID cases rise in New York as Cuomo plans action on vaccine fraud, evictions and his own salary', 13, 'The move comes as the state investigates ParCare Community Health, an Orange County-based provider, for fraudulently obtaining and distributing doses of COVID-19 vaccine.\r\n\r\nCuomo said more than 140,000 New Yorkers have received their first round of COVID inoculations so far as the state prepares to expand who is eligible for the vaccine this week, covering urgent care center employees, health care workers administering the doses and residents of Office of Addiction Services and Supports facilities.\r\n\r\nThe governor voiced support for a sweeping piece of legislation slated to be approved by the Legislature before the end of the day that will bar most evictions in the state through May and provide some relief for home and property owners.', 'https://automoney.co.in/blogs/public/uploads/daily.jpg', NULL, '2020-12-29 03:05:42', '2020-12-29 03:05:42'),
(17, 'Lalu Prasad Yadav\'s kidney functioning at 25 pc, situation alarming', 12, 'Ranchi: The physician of jailed RJD chief Lalu Prasad Yadav, Dr Umesh Prasad on Saturday said that the latter\'s kidney is functioning at 25 per cent and the situation can deteriorate at any time in future.\r\n\r\nDr Prasad has updated the authorities of Rajendra Institute of Medical Sciences (RIMS), where Yadav is admitted, in writing about this situation.\r\n\r\n\"I have said earlier also that it is true that Yadav\'s kidney is functioning at 25 per cent. And this situation is alarming from ..\r\n\r\nRead more at:\r\nhttps://economictimes.indiatimes.com/news/politics-and-nation/lalu-prasad-yadavs-kidney-functioning-at-25-pc-situation-alarming-dr-umesh-prasad/articleshow/79697713.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst', 'https://automoney.co.in/blogs/public/uploads/lalu2.webp', NULL, '2020-12-31 05:14:36', '2020-12-31 05:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$9FDqplkX6uxrqRGRnBaLzepkmWO5SnEr1F/dAnYdBP9nMxu6XMVzC', NULL, '2020-12-26 04:01:15', '2020-12-26 04:01:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
