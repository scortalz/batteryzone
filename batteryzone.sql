-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 01:00 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `batteryzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_img` varchar(255) NOT NULL,
  `b_date` varchar(25) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`b_id`, `b_img`, `b_date`) VALUES
(8, 'Chrysanthemum.jpg', '2017-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(75) NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`) VALUES
(16, 'category 1', 'Chrysanthemum.jpg'),
(17, 'category 2', 'Desert.jpg'),
(18, 'category 3', 'Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '127.0.0.1', 'admin@admin.csdsadsa', 1504705379);

-- --------------------------------------------------------

--
-- Table structure for table `o_order`
--

CREATE TABLE IF NOT EXISTS `o_order` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `o_name` varchar(25) NOT NULL,
  `o_email` varchar(50) CHARACTER SET utf16 NOT NULL,
  `o_qty` varchar(11) NOT NULL,
  `o_phone` int(25) NOT NULL,
  `o_city` varchar(25) NOT NULL,
  `o_address` varchar(100) NOT NULL,
  `o_method` int(30) NOT NULL,
  `o_date` date DEFAULT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `o_order`
--

INSERT INTO `o_order` (`o_id`, `p_id`, `o_name`, `o_email`, `o_qty`, `o_phone`, `o_city`, `o_address`, `o_method`, `o_date`) VALUES
(7, 1, 'asDsa', 'scortalz@hotmail.com', '1', 2147483647, 'Lubbock', 'asdsad', 0, '2017-09-06'),
(8, 1, 'asDsa', 'scortalz@hotmail.com', '1', 2147483647, 'Lubbock', 'asdsad', 0, '2017-09-06'),
(9, 1, 'asDsa', 'scortalz@hotmail.com', '1', 2147483647, 'Lubbock', 'asdsad', 0, '2017-09-06'),
(10, 1, 'asDsa', 'scortalz@hotmail.com', '1', 2147483647, 'Lubbock', 'asdsad', 0, '2017-09-06'),
(11, 1, 'asDsa', 'scortalz@hotmail.com', '1', 2147483647, 'Lubbock', 'asdsad', 0, '2017-09-06'),
(12, 1, 'asDsa', 'scortalz@hotmail.com', '1', 2147483647, 'Lubbock', 'asdsad', 0, '2017-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `p_name` varchar(75) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_main_image` varchar(255) NOT NULL,
  `p_date` date NOT NULL,
  `p_isfeature` tinyint(1) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `cat_id`, `subcat_id`, `p_name`, `p_price`, `p_main_image`, `p_date`, `p_isfeature`) VALUES
(10, 17, 8, 'product 2', 10000, 'Jellyfish.jpg', '2017-09-06', 1),
(11, 16, 7, 'product 1 ', 5000, 'Hydrangeas.jpg', '2017-09-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_desc`
--

CREATE TABLE IF NOT EXISTS `p_desc` (
  `p_desc_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_desc` varchar(5000) NOT NULL,
  `p_id` int(11) NOT NULL,
  PRIMARY KEY (`p_desc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_sub_mages`
--

CREATE TABLE IF NOT EXISTS `p_sub_mages` (
  `p_img_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `p_img14` varchar(255) NOT NULL,
  PRIMARY KEY (`p_img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `q_name` varchar(50) NOT NULL,
  `q_email` varchar(50) NOT NULL,
  `q_phone` int(25) NOT NULL,
  `q_question` varchar(2000) NOT NULL,
  `q_date` date DEFAULT NULL,
  `q_pagename` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `p_id`, `q_name`, `q_email`, `q_phone`, `q_question`, `q_date`, `q_pagename`) VALUES
(3, 1, 'sadas', 'sadsadsadsa', 0, 'sadsa', '2017-09-06', 'products'),
(4, 1, 'sadas', 'sadsadsadsa', 0, 'sadsa', '2017-09-06', 'products'),
(6, 1, 'asDSA', 'asdsa', 0, 'asdas', '2017-09-06', 'products'),
(7, 1, 'asDSAd', 'asdsadasdsa', 0, 'asdsad', '2017-09-06', 'products');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(75) NOT NULL,
  `subcat_img` varchar(255) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcat_name`, `subcat_img`) VALUES
(7, 16, 'sub category 1', 'Jellyfish.jpg'),
(8, 17, 'sub category 2', 'Koala.jpg'),
(9, 18, 'sub category 3', 'Jellyfish1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '3XSt4peIRIUgYFfk.MRgPe', 1268889823, 1504767695, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'scortalz@hotmail.com', '$2y$08$4NAtSHZ05aXUcfGaZ1BlbuHSMJ.rHLdzdMxqavY6Zm2735oJi.ch2', NULL, 'scortalz@hotmail.com', NULL, NULL, NULL, NULL, 1504004396, NULL, 1, 'asdkjh', 'askjdhsakjd', 'alskjdh', '321321');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

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
