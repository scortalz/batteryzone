-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 05:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batteryzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `b_id` int(11) NOT NULL,
  `b_img` varchar(255) NOT NULL,
  `b_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`b_id`, `b_img`, `b_date`) VALUES
(10, 'batryside1.png', '2017-09-11'),
(11, 'batryside2.png', '2017-09-11'),
(12, 'batryside21.png', '2017-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(75) NOT NULL,
  `cat_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`) VALUES
(16, 'Mobile', 'mobile.jpg'),
(17, 'Car', 'car.jpg'),
(20, 'Truck', 'truck.jpg'),
(21, 'Motorcycles', 'motorcycle.jpg'),
(22, 'UPS', 'ups.jpg'),
(23, 'Laptops', 'laptop.jpg'),
(24, 'Tablets', 'tablet.jpg'),
(25, 'Smartphone', 'smartphone.jpg'),
(26, 'Toy', 'toy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `o_order`
--

CREATE TABLE `o_order` (
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `o_name` varchar(25) NOT NULL,
  `o_email` varchar(50) CHARACTER SET utf16 NOT NULL,
  `o_qty` varchar(11) NOT NULL,
  `o_phone` int(25) NOT NULL,
  `o_city` varchar(25) NOT NULL,
  `o_address` varchar(100) NOT NULL,
  `o_method` int(30) NOT NULL,
  `o_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `p_name` varchar(75) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_main_image` varchar(255) NOT NULL,
  `p_date` date NOT NULL,
  `p_isfeature` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `cat_id`, `subcat_id`, `p_name`, `p_price`, `p_main_image`, `p_date`, `p_isfeature`) VALUES
(15, 16, 1, 'check', 1, '', '0000-00-00', 1),
(16, 16, 1, 'tag', 111, '', '0000-00-00', 0),
(17, 1, 1, 'fish', 545, '', '0000-00-00', 0),
(18, 1, 2, 'arj', 48, '', '2017-09-15', 0),
(19, 1, 2, 'arj', 48, '', '2017-09-15', 0),
(20, 1, 2, 'arj', 48, '', '2017-09-15', 0),
(21, 1, 2, 'arj', 48, '', '2017-09-15', 0),
(22, 1, 2, 'arj', 48, '', '2017-09-15', 0),
(23, 1, 2, 'arj', 48, '', '2017-09-15', 0),
(24, 1, 2, 'arj', 48, '', '2017-09-15', 1),
(25, 1, 2, 'arj', 48, '', '2017-09-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_desc`
--

CREATE TABLE `p_desc` (
  `p_desc_id` int(11) NOT NULL,
  `p_desc` varchar(5000) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p_sub_mages`
--

CREATE TABLE `p_sub_mages` (
  `p_img_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_img1` varchar(255) NOT NULL,
  `p_img2` varchar(255) NOT NULL,
  `p_img3` varchar(255) NOT NULL,
  `p_img4` varchar(255) NOT NULL,
  `p_img5` varchar(255) NOT NULL,
  `p_img6` varchar(255) NOT NULL,
  `p_img7` varchar(255) NOT NULL,
  `p_img8` varchar(255) NOT NULL,
  `p_img9` varchar(255) NOT NULL,
  `p_img10` varchar(255) NOT NULL,
  `p_img11` varchar(255) NOT NULL,
  `p_img12` varchar(255) NOT NULL,
  `p_img13` varchar(255) NOT NULL,
  `p_img14` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `q_name` varchar(50) NOT NULL,
  `q_email` varchar(50) NOT NULL,
  `q_phone` int(25) NOT NULL,
  `q_question` varchar(2000) NOT NULL,
  `q_date` date DEFAULT NULL,
  `q_pagename` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(75) NOT NULL,
  `subcat_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcat_name`, `subcat_img`) VALUES
(24, 16, 'Nokia', 'snokia.jpg'),
(25, 16, 'Samsung', 'ssamsung.jpg'),
(26, 17, 'Honda', 'honda.png'),
(27, 17, 'City', 'scity.jpg'),
(28, 20, 'Shehzore', 'sshehzore.png'),
(29, 20, 'Isuzu', 'sisuzu.jpg'),
(30, 22, 'Exide', 'exide.jpg'),
(31, 22, 'Osaka', 'osaka.png'),
(32, 23, 'Dell', 'dell.jpeg'),
(33, 23, 'Acer', 'acer.jpg'),
(34, 24, 'Apple', 'apple.jpg'),
(35, 24, 'iPad', 'ipad.jpg'),
(36, 25, 'Samsung', 'samsung.jpeg'),
(37, 25, 'Nokia', 'nokia.jpeg'),
(38, 26, 'Toshiba', 'toshiba.jpg'),
(39, 26, 'Duracell', 'duracell.jpg'),
(40, 21, 'Yamaha', 'yamaha.jpg'),
(41, 21, 'Super Power', 'suppower.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '3XSt4peIRIUgYFfk.MRgPe', 1268889823, 1505455875, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'scortalz@hotmail.com', '$2y$08$4NAtSHZ05aXUcfGaZ1BlbuHSMJ.rHLdzdMxqavY6Zm2735oJi.ch2', NULL, 'scortalz@hotmail.com', NULL, NULL, NULL, NULL, 1504004396, NULL, 1, 'asdkjh', 'askjdhsakjd', 'alskjdh', '321321');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o_order`
--
ALTER TABLE `o_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `p_desc`
--
ALTER TABLE `p_desc`
  ADD PRIMARY KEY (`p_desc_id`);

--
-- Indexes for table `p_sub_mages`
--
ALTER TABLE `p_sub_mages`
  ADD PRIMARY KEY (`p_img_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `o_order`
--
ALTER TABLE `o_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `p_desc`
--
ALTER TABLE `p_desc`
  MODIFY `p_desc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p_sub_mages`
--
ALTER TABLE `p_sub_mages`
  MODIFY `p_img_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
