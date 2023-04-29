-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 01:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trolla-express`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`, `created_at`) VALUES
(1, 'trolla', '$2y$10$CGGGxMcJnrR/Q8Wf4IrUuu5j0/RZZMOjWGiPM4H4.H5eqqNii5Sdi', '2022-11-19 10:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` bigint(20) NOT NULL,
  `is_published` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1-published, 2-draft',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_names` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_url` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `is_published`, `title`, `slug`, `image`, `cat_names`, `description`, `author`, `meta_description`, `meta_keywords`, `meta_url`, `created_at`, `updated_at`) VALUES
(8, 1, 'Did you know that the TROLLA includes an inbuilt-Driver App as well', 'did-you-know-that-the-trolla-includes-an-inbuilt-driver-app-as-well', 'blog_image_LAXXH1669199904.jpeg', 'Loader', '<p>Did you know that the TROLLA includes an inbuilt-Driver App as well? It has a number of useful tools like direct route details, road assistance, and location tracking so you can know where they are and where they\'ve been throughout the day. Drivers may use it to deliver loads and to offer dispatch and customers real-time load tracking.<br><br>Get in touch with us to find out more about how our Driver App can make your dispatching process more effective right away!</p>', 'Akash', '<p>Did you know that the TROLLA includes an inbuilt-Driver App as well? It has a number of useful tools like direct route details, road assistance, and location tracking so you can know where they are and where they\'ve been throughout the day. Drivers may use it to deliver loads and to offer dispatch and customers real-time load tracking.<br><br>Get in touch with us to find out more about how our Driver App can make your dispatching process more effective right away!</p>', '<p>Did you know that the TROLLA includes an inbuilt-Driver App as well? It has a number of useful tools like direct route details, road assistance, and location tracking so you can know where they are and where they\'ve been throughout the day. Drivers may use it to deliver loads and to offer dispatch and customers real-time load tracking.<br><br>Get in touch with us to find out more about how our Driver App can make your dispatching process more effective right away!</p>', 'Did you know that the TROLLA includes an inbuilt-Driver App as well', '2022-11-23 16:08:24', '2022-11-30 11:33:00'),
(9, 1, 'With the Loader app, it will be much easier to organize and control transportation of your loads', 'with-the-loader-app-it-will-be-much-easier-to-organize-and-control-transportation-of-your-loads', 'blog_image_IATFT1669200067.jpeg', 'Transporter', '<p>With the Loader app, it will be much easier to organize and control transportation of your loads. Trolla Loader app allows you to connect with people nationally or citywide who promptly need you for transportation of their loads while enabling transporters to maximize their earnings to find loads that keep their trucks full.</p>', 'Prakash', '<p>With the Loader app, it will be much easier to organize and control transportation of your loads. Trolla Loader app allows you to connect with people nationally or citywide who promptly need you for transportation of their loads while enabling transporters to maximize their earnings to find loads that keep their trucks full.</p>', '<p>With the Loader app, it will be much easier to organize and control transportation of your loads. Trolla Loader app allows you to connect with people nationally or citywide who promptly need you for transportation of their loads while enabling transporters to maximize their earnings to find loads that keep their trucks full.</p>', 'With the Loader app, it will be much easier to organize and control transportation of your loads', '2022-11-23 16:11:07', '2022-11-29 18:22:50'),
(10, 1, 'TROLLA is a cloud-based mobile app that instantly matches trucks with their best rates', 'trolla-is-a-cloud-based-mobile-app-that-instantly-matches-trucks-with-their-best-rates', 'blog_image_GXWVP1669200974.jpeg', 'Transporter', '<p>TROLLA is a cloud-based mobile app that instantly matches trucks with their best rates. Using the Trolla Transporter app, you can book trucks for moving loads anywhere in India, making logistics simple and convenient.<br>&nbsp;<br>To offer reliable transport services for loaders, it makes use of in-depth professional expertise in logistics. We bring to the table a blend of youth, experience, and global best practices. We ensure-<br>&nbsp;<br>&nbsp;1. Full load services<br>&nbsp;2. Advance booking<br>&nbsp;3. Transparent Pricing<br>&nbsp;4. Real Time Tracking<br>&nbsp;5. Quick &amp; User friendly portal</p>', 'Juri', '<p>TROLLA is a cloud-based mobile app that instantly matches trucks with their best rates. Using the Trolla Transporter app, you can book trucks for moving loads anywhere in India, making logistics simple and convenient.<br>&nbsp;<br>To offer reliable transport services for loaders, it makes use of in-depth professional expertise in logistics. We bring to the table a blend of youth, experience, and global best practices. We ensure-<br>&nbsp;<br>&nbsp;1. Full load services<br>&nbsp;2. Advance booking<br>&nbsp;3. Transparent Pricing<br>&nbsp;4. Real Time Tracking<br>&nbsp;5. Quick &amp; User friendly portal</p>', '<p>TROLLA is a cloud-based mobile app that instantly matches trucks with their best rates. Using the Trolla Transporter app, you can book trucks for moving loads anywhere in India, making logistics simple and convenient.<br>&nbsp;<br>To offer reliable transport services for loaders, it makes use of in-depth professional expertise in logistics. We bring to the table a blend of youth, experience, and global best practices. We ensure-<br>&nbsp;<br>&nbsp;1. Full load services<br>&nbsp;2. Advance booking<br>&nbsp;3. Transparent Pricing<br>&nbsp;4. Real Time Tracking<br>&nbsp;5. Quick &amp; User friendly portal</p>', 'TROLLA is a cloud-based mobile app that instantly matches trucks with their best rates', '2022-11-23 16:26:14', '2022-11-29 18:22:40'),
(12, 1, 'We are all set for the day\'s delivery', 'we-are-all-set-for-the-day-s-delivery', 'blog_image_ECUHW1669201352.jpeg', 'Transporter,Loader', '<p>We are all set for the day\'s delivery. Nonetheless, you can still send your load anywhere across India. Distance is never a barrier for us. Your products and parcels are safe in our hands once we receive them till it is delivered to the desired destination.<br>&nbsp;<br>Let\'s kick start, initiate a booking by downloading the Trolla app from Google Play store.<br>You will be glad you did even as we aim for your satisfaction.</p>', 'Binud', '<p>We are all set for the day\'s delivery. Nonetheless, you can still send your load anywhere across India. Distance is never a barrier for us. Your products and parcels are safe in our hands once we receive them till it is delivered to the desired destination.<br>&nbsp;<br>Let\'s kick start, initiate a booking by downloading the Trolla app from Google Play store.<br>You will be glad you did even as we aim for your satisfaction.</p>', '<p>We are all set for the day\'s delivery. Nonetheless, you can still send your load anywhere across India. Distance is never a barrier for us. Your products and parcels are safe in our hands once we receive them till it is delivered to the desired destination.<br>&nbsp;<br>Let\'s kick start, initiate a booking by downloading the Trolla app from Google Play store.<br>You will be glad you did even as we aim for your satisfaction.</p>', 'We are all set for the day\'s delivery', '2022-11-23 16:32:32', '2023-01-29 10:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_slug`, `cat_desc`, `created_at`, `updated_at`) VALUES
(10, 'Loader', 'loader', '<p>We are all set for the day\'s delivery. Nonetheless, you can still send your load anywhere across India. Distance is never a barrier for us. Your products and parcels are safe in our hands once we receive them till it is delivered to the desired destination.</p>', '2022-11-28 17:02:02', NULL),
(11, 'Transporter', 'transporter', '<p>To offer reliable transport services for loaders, it makes use of in-depth professional expertise in logistics. We bring to the table a blend of youth, experience, and global best practices</p>', '2022-11-28 17:03:44', '2022-11-28 17:04:35'),
(23, 'Driver', 'driver', '', '2023-02-13 11:31:46', '2023-02-13 11:31:46'),
(24, 'Facts', 'facts', '', '2023-02-13 11:32:04', '2023-02-13 11:32:04'),
(25, 'Trending', 'trending', '', '2023-02-13 11:32:14', '2023-02-13 11:32:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_slug` (`cat_slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
