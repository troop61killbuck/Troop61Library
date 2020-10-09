-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2020 at 10:30 AM
-- Server version: 10.3.23-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE IF NOT EXISTS `alerts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `viewed` int(11) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `color` varchar(255) NOT NULL COMMENT 'Primary = Blue, Secondary - Grey, Success - Green, Danger - Red, Warning - Yellow, Info - Turquoise',
  `icon` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barcode_generator`
--

CREATE TABLE IF NOT EXISTS `barcode_generator` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `member_no` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_group` int(11) NOT NULL,
  `barcode_url` varchar(255) NOT NULL,
  `created` int(11) NOT NULL DEFAULT 0 COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_catalog`
--

CREATE TABLE IF NOT EXISTS `book_catalog` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `image_url` int(11) NOT NULL DEFAULT 0,
  `copy_no` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 = Available, 1 = Reserved, 2 = Checked Out',
  `CirculationsAssociatedID` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE IF NOT EXISTS `book_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(150) NOT NULL,
  `category_level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `category_name`, `category_level`) VALUES
(1, 'Merit Badge Book', 1),
(2, 'Handbooks / Other', 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_circulations`
--

CREATE TABLE IF NOT EXISTS `book_circulations` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date_checked_out` datetime NOT NULL,
  `date_checked_in` datetime DEFAULT NULL,
  `returned` int(11) NOT NULL DEFAULT 0 COMMENT '0 = NO, 1 = YES',
  `status` int(11) NOT NULL COMMENT '0 = Requested, 1 =Issued, 2 = Returned',
  `randomID` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `randomID` (`randomID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_media`
--

CREATE TABLE IF NOT EXISTS `book_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_types`
--

CREATE TABLE IF NOT EXISTS `book_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(150) NOT NULL,
  `type_level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_types`
--

INSERT INTO `book_types` (`id`, `type_name`, `type_level`) VALUES
(1, 'Pamphlets', 1),
(2, 'Other', 2);

-- --------------------------------------------------------

--
-- Table structure for table `library_information`
--

CREATE TABLE IF NOT EXISTS `library_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(2048) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `lastUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library_information`
--

INSERT INTO `library_information` (`id`, `Name`, `Description`, `Email`, `lastUpdated`) VALUES
(1, 'Troop 61 Library', 'Troop 61 Merit Badge Book Library - Wooster Ohio', 'troop61woosterlibrary@gmail.com', '2020-10-06 14:02:44');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `login` int(1) NOT NULL DEFAULT 0 COMMENT '0 = NO, 1 = YES',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0 = Active, 1 = Inactive',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member_groups`
--

CREATE TABLE IF NOT EXISTS `member_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_groups`
--

INSERT INTO `member_groups` (`id`, `group_name`, `group_level`) VALUES
(1, 'Scouts', 1),
(2, 'Adults', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `reset_password` int(1) NOT NULL DEFAULT 0,
  `sidebar` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_level` (`user_level`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`, `reset_password`, `sidebar`, `email`, `verification_code`) VALUES
(1, 'Admin User', '<USER_NAME>', '<PASSWORD>', 0, 'no_image.jpg', 1, '', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_emails`
--

CREATE TABLE IF NOT EXISTS `user_emails` (
  `id` varchar(255) NOT NULL COMMENT 'verification_code',
  `email` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT 0 COMMENT '1=yes, 0=no',
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_email_preferences`
--

CREATE TABLE IF NOT EXISTS `user_email_preferences` (
  `id` int(11) NOT NULL,
  `contactUs` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `bookRequests` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `userInfoChange` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `libraryInfoChange` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `bookAddition` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  UNIQUE KEY `user_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_level` (`group_level`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`) VALUES
(1, 'Admin', 0),
(2, 'Troop Librarian', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;