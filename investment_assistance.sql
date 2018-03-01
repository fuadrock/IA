-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 03:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investment_assistance`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposit_rate`
--

CREATE TABLE `deposit_rate` (
  `deposit_rate_id` int(11) NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `3-month_rate` varchar(255) NOT NULL,
  `6-month_rate` varchar(255) NOT NULL,
  `12-month_rate` varchar(255) NOT NULL,
  `double-money_rate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit_rate`
--

INSERT INTO `deposit_rate` (`deposit_rate_id`, `institute_id`, `3-month_rate`, `6-month_rate`, `12-month_rate`, `double-money_rate`) VALUES
(1, 11, '14', '14', '41', '14');

-- --------------------------------------------------------

--
-- Table structure for table `deposit_rate_history`
--

CREATE TABLE `deposit_rate_history` (
  `deposit_rate_history_id` int(11) NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `change_type` varchar(20) NOT NULL,
  `previous_value` varchar(100) NOT NULL,
  `new_value` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_of_change` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `institute_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `founding_year` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `mission` text,
  `core_values` text,
  `description` text,
  `images` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`institute_id`, `name`, `founding_year`, `type`, `mission`, `core_values`, `description`, `images`, `rating`) VALUES
(7, 'asd', '1994', 'bank', '["asd",null,null,"asd",null,"asd"]', '["asd","asd","asd","asd","asd","asd"]', 'asdasdasd', '1519419596.jpg', 4),
(8, 'asd', '1212', 'nbfi', '["asd",null,null,null,null,null]', '["asd",null,null,null,null,null]', 'asdasd', '1519479718.jpg', 4),
(9, 'asd', '1233', 'bank', '["asd","asd","asd","asd","asd","asd"]', '["asd",null,null,null,null,null]', 'asdasd', '1519481064.jpg', 3),
(10, 'asd', '1233', 'bank', '["asd","asd","asd","asd","asd","asd"]', '["asd",null,null,null,null,null]', 'asdasd', '1519481139.jpg', 4.5),
(11, 'asd', '1231', 'nbfi', '["asd",null,null,null,null,null]', '["asd",null,null,null,null,null]', 'asd', '1519481391.jpg', 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `institute_director`
--

CREATE TABLE `institute_director` (
  `institute_director_id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute_director`
--

INSERT INTO `institute_director` (`institute_director_id`, `institute_id`, `description`, `name`, `position`, `picture`) VALUES
(1, 11, 'asd', 'asd', 'asd', '1519484711.jpg'),
(2, 11, 'asd', 'qweqwe', 'asda', '1519484722.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `institute_director_history`
--

CREATE TABLE `institute_director_history` (
  `institute_director_history_id` int(11) NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `change_type` varchar(20) NOT NULL,
  `previous_value` varchar(100) NOT NULL,
  `new_value` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_of_change` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `institute_history`
--

CREATE TABLE `institute_history` (
  `institute_history_id` int(11) NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `change_type` varchar(20) NOT NULL,
  `previous_value` varchar(100) NOT NULL,
  `new_value` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_of_change` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intitute_director`
--

CREATE TABLE `intitute_director` (
  `institute_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `institute_director_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intitute_director`
--

INSERT INTO `intitute_director` (`institute_id`, `name`, `position`, `picture`, `description`, `institute_director_id`) VALUES
(0, 'Darlene Kuzemka', 'Structural Engineer', 'http://dummyimage.com/100x100.png/dddddd/000000', '', 1),
(0, 'Idaline Hegden', 'Account Representative III', 'http://dummyimage.com/100x100.jpg/ff4444/ffffff', '', 2),
(0, 'Katleen Moakes', 'Financial Analyst', 'http://dummyimage.com/100x100.bmp/ff4444/ffffff', '', 3),
(0, 'Leta Shere', 'Editor', 'http://dummyimage.com/100x100.jpg/5fa2dd/ffffff', '', 4),
(0, 'Florry Gounot', 'Research Associate', 'http://dummyimage.com/100x100.jpg/dddddd/000000', '', 5),
(0, 'Merrel Bellew', 'Research Assistant I', 'http://dummyimage.com/100x100.bmp/cc0000/ffffff', '', 6),
(0, 'Barb Bines', 'Librarian', 'http://dummyimage.com/100x100.bmp/ff4444/ffffff', '', 7),
(0, 'Lizabeth Renzullo', 'Account Representative II', 'http://dummyimage.com/100x100.jpg/5fa2dd/ffffff', '', 8),
(0, 'Catherina Omond', 'Food Chemist', 'http://dummyimage.com/100x100.jpg/cc0000/ffffff', '', 9),
(0, 'Alley Marven', 'Recruiter', 'http://dummyimage.com/100x100.jpg/5fa2dd/ffffff', '', 10);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_02_03_194011_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_feed`
--

CREATE TABLE `news_feed` (
  `news_feed_id` int(11) NOT NULL,
  `title` text,
  `link` text,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `source_name` varchar(50) DEFAULT NULL,
  `source_publish_date` date DEFAULT NULL,
  `source_publish_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_feed`
--

INSERT INTO `news_feed` (`news_feed_id`, `title`, `link`, `image`, `status`, `source_name`, `source_publish_date`, `source_publish_time`) VALUES
(1, 'sapien cum sociis natoque', 'sollicitudin ut suscipit a', 'http://dummyimage.com/100x100.jpg/cc0000/ffffff', 'active', 'Reallinks', '0000-00-00', '0000-00-00'),
(2, 'nunc rhoncus', 'porttitor id consequat in consequat', 'http://dummyimage.com/100x100.bmp/dddddd/000000', 'active', 'Skinte', '0000-00-00', '0000-00-00'),
(3, 'quam turpis adipiscing', 'ut odio cras mi pede', 'http://dummyimage.com/100x100.png/ff4444/ffffff', 'active', 'Wordware', '0000-00-00', '0000-00-00'),
(4, 'odio justo sollicitudin', 'rutrum nulla tellus in sagittis', 'http://dummyimage.com/100x100.bmp/dddddd/000000', 'active', 'Skyble', '0000-00-00', '0000-00-00'),
(5, 'sed nisl nunc rhoncus', 'ante ipsum primis in', 'http://dummyimage.com/100x100.jpg/dddddd/000000', 'active', 'Zoomzone', '0000-00-00', '0000-00-00'),
(6, 'sed vel enim sit', 'lacinia erat vestibulum', 'http://dummyimage.com/100x100.bmp/5fa2dd/ffffff', 'active', 'Meedoo', '0000-00-00', '0000-00-00'),
(7, 'aliquam augue', 'vulputate ut ultrices', 'http://dummyimage.com/100x100.png/5fa2dd/ffffff', 'active', 'Gevee', '0000-00-00', '0000-00-00'),
(8, 'vivamus vestibulum', 'ante ipsum primis', 'http://dummyimage.com/100x100.bmp/cc0000/ffffff', 'active', 'Devbug', '0000-00-00', '0000-00-00'),
(9, 'quam pede lobortis ligula', 'aenean fermentum donec', 'http://dummyimage.com/100x100.png/ff4444/ffffff', 'active', 'Vitz', '0000-00-00', '0000-00-00'),
(10, 'consectetuer eget rutrum', 'vestibulum quam sapien varius', 'http://dummyimage.com/100x100.png/ff4444/ffffff', 'active', 'Livepath', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `news_feed_history`
--

CREATE TABLE `news_feed_history` (
  `news_feed_history_id` int(11) NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `change_type` varchar(20) NOT NULL,
  `previous_value` varchar(100) NOT NULL,
  `new_value` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_of_change` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tdr_credit_rating`
--

CREATE TABLE `tdr_credit_rating` (
  `tdr_credit_rating_id` int(11) NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `short_term` varchar(50) DEFAULT NULL,
  `long_term` varchar(50) DEFAULT NULL,
  `source_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdr_credit_rating`
--

INSERT INTO `tdr_credit_rating` (`tdr_credit_rating_id`, `institute_id`, `year`, `short_term`, `long_term`, `source_name`) VALUES
(1, 1, '1994', 'XL', 'S', 'Demizz'),
(2, 2, '2006', 'XL', 'L', 'Oyoloo'),
(3, 3, '2009', '3XL', '3XL', 'Voonix'),
(4, 4, '2000', '2XL', 'M', 'Thoughtmix'),
(5, 5, '2001', 'XL', 'XS', 'Agimba'),
(6, 6, '2008', '2XL', 'M', 'Pixonyx'),
(7, 7, '2008', 'XL', 'L', 'Skyndu'),
(8, 8, '2010', '2XL', '3XL', 'Meetz'),
(9, 9, '2006', 'XS', '2XL', 'Tazzy'),
(10, 10, '1996', 'M', 'L', 'Reallinks'),
(11, 11, '1234', 'asdasd', 'asdads', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `tdr_investment`
--

CREATE TABLE `tdr_investment` (
  `tdr_investment_id` int(11) NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `deposit_fund` int(11) DEFAULT NULL,
  `loan_fund` int(11) DEFAULT NULL,
  `non_performing_ratio` decimal(3,2) DEFAULT NULL,
  `credit_deposit_ratio` decimal(3,2) DEFAULT NULL,
  `current_ratio` decimal(3,2) DEFAULT NULL,
  `capital_adequacy_ratio` decimal(3,2) DEFAULT NULL,
  `return_of_equity` int(11) DEFAULT NULL,
  `authorized_capital` int(11) DEFAULT NULL,
  `paid_up_capital` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdr_investment`
--

INSERT INTO `tdr_investment` (`tdr_investment_id`, `institute_id`, `deposit_fund`, `loan_fund`, `non_performing_ratio`, `credit_deposit_ratio`, `current_ratio`, `capital_adequacy_ratio`, `return_of_equity`, `authorized_capital`, `paid_up_capital`) VALUES
(1, 1, 7804843, 1105325, '2.70', '2.27', '1.32', '2.48', 79425, 40800, 20503),
(2, 2, 2447875, 5269768, '1.23', '2.95', '1.22', '2.03', 83301, 49278, 89203),
(3, 3, 9957460, 4052687, '2.77', '2.63', '1.30', '1.13', 37986, 72889, 72265),
(4, 4, 2506254, 6445734, '2.26', '2.11', '1.18', '2.85', 70200, 85369, 50551),
(5, 5, 8535282, 7030964, '2.50', '2.76', '1.95', '1.69', 39814, 10117, 45485),
(6, 6, 2193809, 383371, '2.94', '2.34', '2.39', '1.60', 99842, 51995, 46420),
(7, 7, 7116720, 1526121, '2.94', '1.05', '2.58', '2.17', 71045, 78014, 72030),
(8, 8, 2132191, 5254136, '1.14', '1.36', '1.86', '1.10', 62524, 61885, 22752),
(9, 9, 2248910, 8258217, '1.96', '1.13', '1.79', '2.77', 16900, 39118, 82976),
(10, 10, 7232190, 9782737, '1.10', '1.11', '1.75', '1.85', 48549, 84804, 34657),
(11, 11, 1, 1, '1.00', '1.00', '1.00', '1.00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tdr_investment_history`
--

CREATE TABLE `tdr_investment_history` (
  `tdr_investment_history_id` int(11) NOT NULL,
  `column_name` varchar(100) NOT NULL,
  `change_type` varchar(20) NOT NULL,
  `previous_value` varchar(100) NOT NULL,
  `new_value` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_of_change` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$SSGlNasP0LR3Fh5cp8Ge4OP.jSPQ/oEmWWw1zRPfRfeYlecW4LOlm', NULL, 'w0Nh86RORdTtrJu5I3tqUfCrNHm8B9a247IxT4iniIeXjKiwuBfzGenpBy5e', '2018-02-03 13:45:41', '2018-02-03 13:45:41'),
(2, 'asd', 'asd@gmail.com', '$2y$10$LHq/Nop.bxym9PG9mP6Swugju.42LoE4IXGhDogiKP0S9XZ5kqDNi', NULL, NULL, '2018-02-08 13:41:27', '2018-02-08 13:41:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit_rate`
--
ALTER TABLE `deposit_rate`
  ADD PRIMARY KEY (`deposit_rate_id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`institute_id`);

--
-- Indexes for table `institute_director`
--
ALTER TABLE `institute_director`
  ADD PRIMARY KEY (`institute_director_id`);

--
-- Indexes for table `intitute_director`
--
ALTER TABLE `intitute_director`
  ADD PRIMARY KEY (`institute_director_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_feed`
--
ALTER TABLE `news_feed`
  ADD PRIMARY KEY (`news_feed_id`);

--
-- Indexes for table `tdr_credit_rating`
--
ALTER TABLE `tdr_credit_rating`
  ADD PRIMARY KEY (`tdr_credit_rating_id`);

--
-- Indexes for table `tdr_investment`
--
ALTER TABLE `tdr_investment`
  ADD PRIMARY KEY (`tdr_investment_id`);

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
-- AUTO_INCREMENT for table `deposit_rate`
--
ALTER TABLE `deposit_rate`
  MODIFY `deposit_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `institute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `institute_director`
--
ALTER TABLE `institute_director`
  MODIFY `institute_director_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `intitute_director`
--
ALTER TABLE `intitute_director`
  MODIFY `institute_director_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news_feed`
--
ALTER TABLE `news_feed`
  MODIFY `news_feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tdr_credit_rating`
--
ALTER TABLE `tdr_credit_rating`
  MODIFY `tdr_credit_rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tdr_investment`
--
ALTER TABLE `tdr_investment`
  MODIFY `tdr_investment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
