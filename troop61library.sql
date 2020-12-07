-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2020 at 07:17 PM
-- Server version: 10.3.23-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `troop61library`
--

-- --------------------------------------------------------

--
-- Table structure for table `activityLog`
--

CREATE TABLE `activityLog` (
  `id` int(11) NOT NULL,
  `activity` varchar(2048) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activityLog`
--

INSERT INTO `activityLog` (`id`, `activity`, `datetime`) VALUES
(1, 'Admin Usera truncated the activity log.', '2020-10-20 23:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `viewed` int(11) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `color` varchar(255) NOT NULL COMMENT 'Primary = Blue, Secondary - Grey, Success - Green, Danger - Red, Warning - Yellow, Info - Turquoise',
  `icon` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `title`, `message`, `date`, `viewed`, `color`, `icon`, `user_id`) VALUES
(1, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(2, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 1, 'warning', 'fas fa-file-alt text-white', 1),
(3, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(4, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 1, 'warning', 'fas fa-file-alt text-white', 1),
(5, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(6, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(7, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(8, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(9, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(10, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(11, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(12, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(13, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(14, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(15, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(16, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(17, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(18, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(19, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(20, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(21, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(22, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1);
INSERT INTO `alerts` (`id`, `title`, `message`, `date`, `viewed`, `color`, `icon`, `user_id`) VALUES
(23, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(24, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(25, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(26, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(27, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(28, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(29, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 1, 'primary', 'fas fa-address-book text-white', 1),
(30, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1),
(31, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:17:02', 0, 'primary', 'fas fa-address-book text-white', 1),
(32, '$290.29 has been deposited into your account!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Rhoncus mattis rhoncus urna neque viverra. Eget mauris pharetra et ultrices neque ornare aenean euismod. Eget nunc scelerisque viverra mauris in aliquam sem. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Odio eu feugiat pretium nibh ipsum consequat nisl. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Blandit libero volutpat sed cras ornare arcu dui vivamus. Cras tincidunt lobortis feugiat vivamus at augue. Massa vitae tortor condimentum lacinia quis vel eros donec. Pretium aenean pharetra magna ac placerat vestibulum lectus. Urna nunc id cursus metus. Congue nisi vitae suscipit tellus mauris a. Tincidunt id aliquet risus feugiat in ante metus dictum at. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Ullamcorper malesuada proin libero nunc consequat.\r\n\r\nFelis donec et odio pellentesque diam volutpat. Ac tincidunt vitae semper quis. Mattis nunc sed blandit libero volutpat sed. Egestas erat imperdiet sed euismod nisi porta lorem. Dictum non consectetur a erat. Morbi enim nunc faucibus a pellentesque sit amet. Mauris cursus mattis molestie a iaculis at erat pellentesque. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Sed cras ornare arcu dui vivamus. Morbi blandit cursus risus at. Tincidunt arcu non sodales neque sodales. Amet justo donec enim diam.\r\n\r\nNunc sed augue lacus viverra. Maecenas sed enim ut sem viverra aliquet eget. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Ornare massa eget egestas purus. Arcu odio ut sem nulla pharetra diam sit. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Pharetra convallis posuere morbi leo urna molestie at. Elementum tempus egestas sed sed risus pretium quam. Ornare arcu dui vivamus arcu felis. Tincidunt vitae semper quis lectus nulla at volutpat diam ut. Ut torto', '2020-07-20 12:19:49', 0, 'warning', 'fas fa-file-alt text-white', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barcode_generator`
--

CREATE TABLE `barcode_generator` (
  `id` int(11) UNSIGNED NOT NULL,
  `member_no` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_group` int(11) NOT NULL,
  `barcode_url` varchar(255) NOT NULL,
  `created` int(11) NOT NULL DEFAULT 0 COMMENT '0=No, 1=Yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_catalog`
--

CREATE TABLE `book_catalog` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `image_url` int(11) NOT NULL DEFAULT 0,
  `copy_no` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 = Available, 1 = Reserved, 2 = Checked Out',
  `CirculationsAssociatedID` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_catalog`
--

INSERT INTO `book_catalog` (`id`, `type`, `title`, `category`, `description`, `image_url`, `copy_no`, `status`, `CirculationsAssociatedID`) VALUES
(40610088, 1, 'Personal Fitness', 1, 'n/a', 8, 1, 0, NULL),
(40610087, 1, 'Orienteering', 1, 'n/a', 0, 1, 0, NULL),
(40610086, 1, 'Oceanography', 1, 'n/a', 0, 1, 0, NULL),
(40610085, 1, 'Nuclear Science', 1, 'n/a', 0, 1, 0, NULL),
(40610084, 1, 'Nature', 1, 'n/a', 0, 3, 0, NULL),
(40610083, 1, 'Nature', 1, 'n/a', 0, 2, 0, NULL),
(40610082, 1, 'Nature', 1, 'n/a', 0, 1, 0, NULL),
(40610081, 1, 'Music and Bugling', 1, 'n/a', 0, 1, 0, NULL),
(40610080, 1, 'Moviemaking (formerly Cinematography)', 1, 'n/a', 0, 1, 0, NULL),
(40610079, 1, 'Motorboating', 1, 'n/a', 0, 1, 0, NULL),
(40610078, 1, 'Medicine', 1, 'n/a', 0, 1, 0, NULL),
(40610077, 1, 'Mammal Study', 1, 'n/a', 0, 1, 0, NULL),
(40610076, 1, 'Lifesaving', 1, 'n/a', 0, 2, 0, NULL),
(40610075, 1, 'Lifesaving', 1, 'n/a', 0, 1, 0, NULL),
(40610074, 1, 'Leatherwork', 1, 'n/a', 0, 2, 0, NULL),
(40610073, 1, 'Leatherwork', 1, 'n/a', 0, 1, 0, NULL),
(40610072, 1, 'Law', 1, 'n/a', 0, 2, 0, NULL),
(40610071, 1, 'Law', 1, 'n/a', 0, 1, 0, NULL),
(40610070, 1, 'Journalism', 1, 'n/a', 0, 1, 0, NULL),
(40610069, 1, 'Insect Life', 1, 'n/a', 0, 1, 0, NULL),
(40610068, 1, 'Indian Lore', 1, 'n/a', 0, 1, 0, NULL),
(40610067, 1, 'Hiking', 1, 'n/a', 0, 2, 0, NULL),
(40610066, 1, 'Hiking', 1, 'n/a', 0, 1, 0, NULL),
(40610065, 1, 'Graphic Arts', 1, 'n/a', 0, 1, 0, NULL),
(40610064, 1, 'Golf', 1, 'n/a', 0, 1, 0, NULL),
(40610063, 1, 'Geology', 1, 'n/a', 0, 2, 0, NULL),
(40610062, 1, 'Geology', 1, 'n/a', 0, 1, 0, NULL),
(40610061, 1, 'Forestry', 1, 'n/a', 0, 1, 0, NULL),
(40610060, 1, 'Fishing', 1, 'n/a', 0, 1, 0, NULL),
(40610059, 1, 'Fish and Wildlife Management', 1, 'n/a', 0, 1, 0, NULL),
(40610058, 1, 'First Aid', 1, 'n/a', 0, 5, 0, NULL),
(40610057, 1, 'First Aid', 1, 'n/a', 0, 4, 0, NULL),
(40610056, 1, 'First Aid', 1, 'n/a', 0, 3, 0, NULL),
(40610055, 1, 'First Aid', 1, 'n/a', 0, 2, 0, NULL),
(40610054, 1, 'First Aid', 1, 'n/a', 0, 1, 0, NULL),
(40610053, 1, 'Fire Safety', 1, 'n/a', 0, 3, 0, NULL),
(40610052, 1, 'Fire Safety', 1, 'n/a', 0, 2, 0, NULL),
(40610051, 1, 'Fire Safety', 1, 'n/a', 0, 1, 0, NULL),
(40610050, 1, 'Fingerprinting', 1, 'n/a', 0, 1, 0, NULL),
(40610049, 1, 'Family Life', 1, 'n/a', 0, 1, 0, NULL),
(40610048, 1, 'Environmental Science', 1, 'n/a', 0, 5, 0, NULL),
(40610047, 1, 'Environmental Science', 1, 'n/a', 0, 4, 0, NULL),
(40610046, 1, 'Environmental Science', 1, 'n/a', 0, 3, 0, NULL),
(40610045, 1, 'Environmental Science', 1, 'n/a', 0, 2, 0, NULL),
(40610044, 1, 'Environmental Science', 1, 'n/a', 0, 1, 0, NULL),
(40610043, 1, 'Energy', 1, 'n/a', 0, 1, 0, NULL),
(40610042, 1, 'Emergency Prepardness', 1, 'n/a', 0, 3, 0, NULL),
(40610041, 1, 'Emergency Prepardness', 1, 'n/a', 0, 2, 0, NULL),
(40610040, 1, 'Emergency Prepardness', 1, 'n/a', 0, 1, 0, NULL),
(40610039, 1, 'Electricity', 1, 'n/a', 0, 2, 0, NULL),
(40610038, 1, 'Electricity', 1, 'n/a', 0, 1, 0, NULL),
(40610037, 1, 'Disabilities Awareness', 1, 'n/a', 0, 1, 0, NULL),
(40610036, 1, 'Cycling', 1, 'n/a', 0, 1, 0, NULL),
(40610035, 1, 'Cooking', 1, 'n/a', 0, 1, 0, NULL),
(40610034, 1, 'Communication', 1, 'n/a', 0, 3, 0, NULL),
(40610033, 1, 'Communication', 1, 'n/a', 0, 2, 0, NULL),
(40610032, 1, 'Communication', 1, 'n/a', 0, 1, 0, NULL),
(40610031, 1, 'Climbing', 1, 'n/a', 0, 1, 0, NULL),
(40610030, 1, 'Citizenship in the World', 1, 'n/a', 0, 4, 0, NULL),
(40610029, 1, 'Citizenship in the World', 1, 'n/a', 0, 3, 0, NULL),
(40610028, 1, 'Citizenship in the World', 1, 'n/a', 0, 2, 0, NULL),
(40610027, 1, 'Citizenship in the World', 1, 'n/a', 0, 1, 0, NULL),
(40610024, 1, 'Citizenship in the Nation', 1, 'n/a', 0, 4, 0, NULL),
(40610023, 1, 'Citizenship in the Nation', 1, 'n/a', 0, 3, 0, NULL),
(40610022, 1, 'Citizenship in the Nation', 1, 'n/a', 0, 2, 0, NULL),
(40610021, 1, 'Citizenship in the Nation', 1, 'n/a', 0, 1, 0, NULL),
(40610020, 1, 'Citizenship in the Community', 1, 'n/a', 0, 1, 0, NULL),
(40610019, 1, 'Chemistry', 1, 'n/a', 0, 1, 0, NULL),
(40610018, 1, 'Camping', 1, 'n/a', 0, 4, 0, NULL),
(40610017, 1, 'Camping', 1, 'n/a', 0, 3, 0, NULL),
(40610016, 1, 'Camping', 1, 'n/a', 0, 2, 0, NULL),
(40610015, 1, 'Camping', 1, 'n/a', 0, 1, 0, NULL),
(40610126, 2, 'Boy Scout Songbook', 2, 'n/a', 0, 1, 0, 'yuxcb185b57'),
(40610014, 1, 'Bird Study', 1, 'n/a', 0, 1, 0, NULL),
(40610013, 1, 'Basketry', 1, 'n/a', 0, 1, 0, NULL),
(40610011, 1, 'Aviation', 1, 'n/a', 0, 1, 0, NULL),
(40610010, 1, 'Automotive Maintenance', 1, 'n/a', 0, 1, 0, NULL),
(40610009, 1, 'Athletics', 1, 'n/a', 0, 1, 0, NULL),
(40610008, 1, 'Astronomy', 1, 'n/a', 0, 1, 0, NULL),
(40610007, 1, 'Archery', 1, 'n/a', 0, 3, 0, NULL),
(40610006, 1, 'Archery', 1, 'n/a', 0, 2, 0, NULL),
(40610005, 1, 'Archery', 1, 'n/a', 0, 1, 0, NULL),
(40610004, 1, 'Archaeology', 1, 'n/a', 8, 2, 0, NULL),
(40610003, 1, 'Archaeology', 1, 'n/a', 8, 1, 0, NULL),
(40610002, 1, 'Animal Science', 1, 'n/a', 0, 1, 0, NULL),
(40610001, 1, 'American Cultures', 1, 'n/a', 0, 1, 0, NULL),
(40610125, 2, '2016 Boy Scout Requirements', 2, 'n/a ', 8, 1, 0, '7vc0ryzus1k'),
(40610089, 1, 'Personal Fitness', 1, 'n/a', 8, 2, 0, NULL),
(40610090, 1, 'Personal Fitness', 1, 'n/a', 8, 3, 0, NULL),
(40610091, 1, 'Personal Fitness', 1, 'n/a', 8, 4, 0, NULL),
(40610092, 1, 'Personal Management', 1, 'n/a', 0, 1, 0, NULL),
(40610093, 1, 'Photography', 1, 'n/a', 0, 1, 0, NULL),
(40610094, 1, 'Pioneering', 1, 'n/a', 0, 1, 0, NULL),
(40610095, 1, 'Pottery', 1, 'n/a', 0, 1, 0, NULL),
(40610096, 1, 'Public Speaking', 1, 'n/a', 0, 1, 0, NULL),
(40610097, 1, 'Pulp and Paper', 1, 'n/a', 0, 1, 0, NULL),
(40610098, 1, 'Railroading', 1, 'n/a', 0, 1, 0, NULL),
(40610099, 1, 'Railroading', 1, 'n/a', 0, 2, 0, NULL),
(40610100, 1, 'Reptile and Amphibian Study', 1, 'n/a', 0, 1, 0, NULL),
(40610101, 1, 'Rifle Shooting', 1, 'n/a', 0, 1, 0, NULL),
(40610102, 1, 'Rowing', 1, 'n/a', 0, 1, 0, NULL),
(40610103, 1, 'Salesmanship', 1, 'n/a', 0, 1, 0, NULL),
(40610104, 1, 'Scholarship', 1, 'n/a', 0, 1, 0, NULL),
(40610105, 1, 'Shotgun Shooting', 1, 'n/a', 0, 1, 0, NULL),
(40610106, 1, 'Small Boat Sailing', 1, 'n/a', 0, 1, 0, NULL),
(40610107, 1, 'Small Boat Sailing', 1, 'n/a', 0, 2, 0, NULL),
(40610108, 1, 'Snow Sports', 1, 'n/a', 0, 1, 0, NULL),
(40610109, 1, 'Space Exploration', 1, 'n/a', 0, 1, 0, NULL),
(40610110, 1, 'Stamp Collecting', 1, 'n/a', 0, 1, 0, NULL),
(40610111, 1, 'Suatainability', 1, 'n/a', 0, 1, 0, NULL),
(40610112, 1, 'Swimming', 1, 'n/a', 0, 1, 0, NULL),
(40610113, 1, 'Swimming', 1, 'n/a', 0, 2, 0, NULL),
(40610121, 2, 'The Boy Scout Handbook', 2, 'n/a', 0, 1, 0, NULL),
(40610122, 2, 'The Patrol Leader Handbook', 2, 'n/a', 0, 1, 0, NULL),
(40610123, 2, 'The Senior Patrol Leader Handbook', 2, 'n/a', 0, 1, 2, 'c8gjj8ixx2'),
(40610124, 2, 'The Senior Patrol Leader Handbook', 2, 'n/a', 0, 2, 0, NULL),
(40610114, 1, 'Theater', 1, 'n/a', 0, 1, 0, NULL),
(40610115, 1, 'Traffic Safety', 1, 'n/a', 0, 1, 0, NULL),
(40610116, 1, 'Whitewater', 1, 'n/a', 0, 1, 0, NULL),
(40610117, 1, 'Wilderness Survival', 1, 'n/a', 0, 1, 0, NULL),
(40610118, 1, 'Wilderness Survival', 1, 'n/a', 0, 2, 0, NULL),
(40610119, 1, 'Wood Carving', 1, 'n/a', 0, 1, 0, NULL),
(40610120, 1, 'Woodworking', 1, 'n/a', 0, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `category_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `category_name`, `category_level`) VALUES
(1, 'Merit Badge Book', 1),
(4, 'Handbooks / Other', 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_circulations`
--

CREATE TABLE `book_circulations` (
  `id` int(11) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date_checked_out` datetime NOT NULL,
  `date_checked_in` datetime DEFAULT NULL,
  `returned` int(11) NOT NULL DEFAULT 0 COMMENT '0 = NO, 1 = YES',
  `status` int(11) NOT NULL COMMENT '0 = Requested, 1 =Issued, 2 = Returned',
  `randomID` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_media`
--

CREATE TABLE `book_media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_media`
--

INSERT INTO `book_media` (`id`, `name`, `file_name`, `file_type`) VALUES
(0, 'No Image', 'no_image.png', 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `book_types`
--

CREATE TABLE `book_types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(150) NOT NULL,
  `type_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_types`
--

INSERT INTO `book_types` (`id`, `type_name`, `type_level`) VALUES
(1, 'Pamphlets', 1),
(4, 'Other', 2);

-- --------------------------------------------------------

--
-- Table structure for table `library_information`
--

CREATE TABLE `library_information` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(2048) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `apiKey` varchar(255) NOT NULL,
  `lastUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library_information`
--

INSERT INTO `library_information` (`id`, `Name`, `Description`, `Email`, `apiKey`, `lastUpdated`) VALUES
(1, 'Troop 61 Library', 'Troop 61 Library Wooster', 'troop61woosterlibrary@gmail.com', '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', '2020-10-20 23:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` int(1) NOT NULL DEFAULT 0 COMMENT '0 = NO, 1 = YES',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0 = Active, 1 = Inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `login`, `username`, `password`, `group`, `status`) VALUES
(100031, 'Admin', 1, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_groups`
--

CREATE TABLE `member_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `tester` int(1) NOT NULL DEFAULT 0 COMMENT '0=no, 1=yes'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`, `reset_password`, `sidebar`, `email`, `verification_code`, `tester`) VALUES
(1, 'Admin User', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', -1, 'xss93djt1.png', 1, '2020-10-20 19:09:28', 0, '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_emails`
--

CREATE TABLE `user_emails` (
  `id` varchar(255) NOT NULL COMMENT 'verification_code',
  `email` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT 0 COMMENT '1=yes, 0=no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_email_preferences`
--

CREATE TABLE `user_email_preferences` (
  `id` int(11) NOT NULL,
  `contactUs` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `bookRequests` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `userInfoChange` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes',
  `libraryInfoChange` int(1) NOT NULL DEFAULT 0 COMMENT '0 = No, 1 = Yes'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`) VALUES
(2, 'Admin', 0),
(3, 'Troop Librarian', 1),
(6, 'Superadmin', -1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activityLog`
--
ALTER TABLE `activityLog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barcode_generator`
--
ALTER TABLE `barcode_generator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_catalog`
--
ALTER TABLE `book_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_circulations`
--
ALTER TABLE `book_circulations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `randomID` (`randomID`);

--
-- Indexes for table `book_media`
--
ALTER TABLE `book_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_types`
--
ALTER TABLE `book_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_information`
--
ALTER TABLE `library_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_groups`
--
ALTER TABLE `member_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level` (`user_level`);

--
-- Indexes for table `user_emails`
--
ALTER TABLE `user_emails`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_email_preferences`
--
ALTER TABLE `user_email_preferences`
  ADD UNIQUE KEY `user_id` (`id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_level` (`group_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activityLog`
--
ALTER TABLE `activityLog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `barcode_generator`
--
ALTER TABLE `barcode_generator`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_catalog`
--
ALTER TABLE `book_catalog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40610128;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_circulations`
--
ALTER TABLE `book_circulations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_media`
--
ALTER TABLE `book_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book_types`
--
ALTER TABLE `book_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `library_information`
--
ALTER TABLE `library_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100001;

--
-- AUTO_INCREMENT for table `member_groups`
--
ALTER TABLE `member_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
