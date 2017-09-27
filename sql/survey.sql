-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 01:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genjour`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` bigint(20) NOT NULL,
  `profile_id` bigint(20) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_img_url` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` text COLLATE utf8_unicode_ci NOT NULL,
  `q1` text COLLATE utf8_unicode_ci NOT NULL,
  `q2` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `q3` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `q4` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `q5` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `profile_id`, `name`, `email`, `profile_img_url`, `profile_url`, `q1`, `q2`, `q3`, `q4`, `q5`) VALUES
(4, 1586742468026190, 'Raj Amit Singh', 'amitraj.1996@gmail.com', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/19554171_1564074626959641_433281330998708547_n.jpg?oh=635d65fdf666c8a5fb08d985c8e86f3e&oe=5A50B084', 'www.facebook.com/1586742468026190', 'yes', 'no', 'yes', 'no', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
