-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 03:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `job_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `educational_degree` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `university_gpa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_nature` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`job_id`, `id`, `first_name`, `last_name`, `email`, `address`, `phone`, `educational_degree`, `university_gpa`, `work_nature`, `skills`, `cv`) VALUES
(5, 1, 'sayed', 'rady', 'sayedrady@gmail.com', 'toukh,qulibia,egypt', '1013631377', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd'),
(6, 2, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w'),
(6, 3, 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w', 'w'),
(5, 4, 'first_name', 'last_name', 'email', '$address', 'phone', '$educational_degree', '$university_gpa', '$work_nature', '$skills', '$cv'),
(5, 5, 'sayed', 'rady', 'sayedrady61@gmail.com', 'benh,qulipia,egypt', 's', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd'),
(5, 6, 'sayed', 'rady', 'sayedrady61@gmail.com', 'benh,qulipia,egypt', 's', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd'),
(5, 7, 'sayed', 'rady', 'sayedrady6d1@gmail.com', 'benh,qulipia,egypt', 's', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd'),
(5, 8, 'sayed', 'rady', 'sayedrady6d1@gmail.com', 'benh,qulipia,egypt', 's', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd'),
(5, 9, 'sayed', 'rady', 'sayedrady972@gmail.com', '10th ramadan', 'dsa', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd'),
(15, 10, 'sayed', 'rady', 'sayedrady000@gmail.com', 'toukh,qulibia,egypt', 'fasd', 'bfcai', '3.6', 'inplace', 'ddd', 'ddd'),
(15, 11, 'sayed', 'rady', 'sayedrady61666@gmail.com', 'toukh', '3222', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd'),
(12, 12, 'sayed', 'rady', 'sayedradfdbdy@gmail.com', 'nasr city,cairo', '4444444', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd'),
(12, 13, 'sayed', 'rady', 'sayedrady@gmail.com', 'fghgjhkjl', '999999999', 'bfcai', '3.6', 'remotely', 'ddd', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(255) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`name`, `id`, `logo`, `number`) VALUES
('Education&learning', 1, 'images/Icon awesome-chalkboard-teacher.png', 0),
('Sales&marketing', 2, 'images/Icon material-business.png', 0),
('computer programming', 3, 'images/Icon feather-code.png', 0),
('customer services', 4, 'images/Icon ionic-md-person.png', 0),
('Design&multimedia', 5, 'images/Icon simple-adobeindesign.png\r\n', 0),
('web development', 6, 'images/Icon material-web.png', 0),
('medical&pharma', 7, 'images/Icon awesome-briefcase-medical.png', 0),
('engineer&architecture', 8, 'images/Icon awesome-building.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_comp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `message`, `email`, `user_comp_id`) VALUES
(1, 'submit', 'sayedrady@gmail.com', 10),
(2, 'submit', 'sayedrady61@gmail.com', 11),
(3, 'submit', 'sayedrady61@gmail.com', 11),
(4, '', 'sayedrady61@gmail.com', 11),
(5, ';;;;;;', 'sayedrady61@gmail.com', 11),
(6, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(7, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(8, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(9, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(10, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(11, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(12, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(13, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(14, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(15, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(16, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(17, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(18, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(19, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(20, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(21, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(22, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(23, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(24, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(25, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(26, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(27, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(28, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(29, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(30, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(31, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(32, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(33, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(34, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(35, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(36, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(37, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(38, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(39, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(40, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(41, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(42, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(43, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11),
(44, 'hugggggggggghhhhhbhhhh', 'sayedrady61@gmail.com', 11);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `name`, `title`, `phone`, `address`, `logo`, `post_date`, `job_category`, `description`) VALUES
(5, 'mcDonalds', 'data analyist', '012345556545', '10th ramadan,cairo', 'Mcdonalds-logo-300x300.jpg', '22/12/06 08:24:25', '', ''),
(6, 'amazon', 'swift developer', '0103343340', 'benh,qulipia,egypt', 'Amazon-Logo-300x60.png', '06/12/22 09:03:06', '', ''),
(7, 'ibm', 'software engineer', '01234003320', 'toukh,qulibia,egypt', 'ibm-logo-300x199.jpg', '06/12/22 09:05:10', '', ''),
(9, 'the name of company', 'the job title', 'the company phone', 'the company address', 'Microsoft-New-Logo.png', '07/12/22 02:38:47', '', ''),
(10, 'microsoft', 'web developer', '01230012211', 'nasr city,cairo', 'Microsoft-New-Logo.png', '07/12/22 04:33:10', '', ''),
(12, 'the name of company', 'the job title', 'the company phone', 'the company address', 'Mcdonalds-logo-300x300.jpg', '07/12/22 04:37:27', 'web development', 'sdafsadfsadfsadfsadfdsafsdaf'),
(15, 'the name of company', 'the job title', 'the company phone', 'the company address', 'FB_IMG_1611091413908.jpg', '10/12/22 03:34:46', 'Education&learning', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `user_email` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `bio` longtext NOT NULL,
  `user_img` longtext NOT NULL DEFAULT 'avatar-04.png',
  `skills` varchar(255) NOT NULL,
  `projects` varchar(255) NOT NULL,
  `jobs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_email`, `user_pass`, `user_phone`, `bio`, `user_img`, `skills`, `projects`, `jobs`) VALUES
(10, 'sayedRaDy', 'sayedrady@gmail.com', '123456', 1013631377, 'ddddd', 'artworks-000272516543-xwhpez-t500x500.jpg', ',html,js,c++,css,jqury,sss', ',gggg', ',google,tech,dd'),
(11, 'elsayed', 'sayedrady61@gmail.com', '123456', 1013631377, 'sayed', 'FB_IMG_1611091418673.jpg', ',js', ',ecommerce', ',google'),
(12, 'aya', 'dsaaaaa', 'dsa', 1111111, 'das', 'avatar-04.png', 'dsa', 'dsa', 'dsa'),
(13, 'slm', 'dsaaaaa', 'dsa', 1111111, 'das', 'avatar-04.png', 'dsa', 'dsa', 'dsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_comp_id` (`user_comp_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`);

--
-- Constraints for table `complains`
--
ALTER TABLE `complains`
  ADD CONSTRAINT `complains_ibfk_1` FOREIGN KEY (`user_comp_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
