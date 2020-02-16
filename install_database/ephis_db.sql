-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 ก.พ. 2020 เมื่อ 07:02 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ephis_db`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `ships`
--

CREATE TABLE `ships` (
  `shp_id` int(8) NOT NULL,
  `shp_th` varchar(125) DEFAULT NULL,
  `shp_en` varchar(125) DEFAULT NULL,
  `shp_def` varchar(255) DEFAULT NULL,
  `shp_sta` tinytext DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `ships`
--

INSERT INTO `ships` (`shp_id`, `shp_th`, `shp_en`, `shp_def`, `shp_sta`) VALUES
(1, 'ศรีวิชัย', 'srivichi', 'เรือลำใหญ่มาก', 'y'),
(2, 'update_post_shp_th', 'update_post_shp_en', 'update_post_shp_def', 'update'),
(4, 'post_shp_th', 'post_shp_en', 'post_shp_def', 'y');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `users`
--

CREATE TABLE `users` (
  `usr_id` int(8) NOT NULL,
  `usr_username` varchar(255) DEFAULT NULL,
  `usr_pass` varchar(255) NOT NULL,
  `usr_pfname` varchar(255) DEFAULT NULL,
  `usr_fname` varchar(255) DEFAULT NULL,
  `usr_lname` varchar(255) DEFAULT NULL,
  `usr_nname` varchar(255) DEFAULT NULL,
  `usr_sta` tinytext DEFAULT 'y',
  `usr_shp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `users`
--

INSERT INTO `users` (`usr_id`, `usr_username`, `usr_pass`, `usr_pfname`, `usr_fname`, `usr_lname`, `usr_nname`, `usr_sta`, `usr_shp_id`) VALUES
(1, 'om', '123', 'นาย', 'โอม', 'มกุล2', 'โอมมินิ', 'y', 1),
(2, 'arm', '456', 'นาย', 'อาม', 'พิกุลทอง', 'อามมินิ', 'y', 1),
(3, 'pond', '456', 'นาย', 'นอนทอง', 'พิกุลทอง', 'อามมินิ', 'n', 1),
(4, 'jack', '456', 'นาย', 'แจ๊ค', 'สุภัค', 'แจ็คครับ', 'y', 1),
(5, 'update_post_usr_username', 'update_post_usr_pass', 'update_post_usr_pfname', 'update_post_usr_fname', 'update_post_usr_lname', 'update_post_usr_nname', 'update_post_usr_sta', -2),
(6, 'post_usr_username', 'post_usr_pass', 'post_usr_pfname', 'post_usr_fname', 'post_usr_lname', 'post_usr_nname', 'post_usr_sta', -1),
(9, 'post_usr_username', 'post_usr_pass', 'post_usr_pfname', 'post_usr_fname', 'post_usr_lname', 'post_usr_nname', 'post_usr_sta', -1),
(10, 'post_usr_username', 'post_usr_pass', 'post_usr_pfname', 'post_usr_fname', 'post_usr_lname', 'post_usr_nname', 'post_usr_sta', -1),
(11, 'post_usr_username', 'post_usr_pass', 'post_usr_pfname', 'post_usr_fname', 'post_usr_lname', 'post_usr_nname', 'post_usr_sta', -1),
(12, 'post_usr_username', 'post_usr_pass', 'post_usr_pfname', 'post_usr_fname', 'post_usr_lname', 'post_usr_nname', 'post_usr_sta', -1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `zones`
--

CREATE TABLE `zones` (
  `zon_id` int(8) NOT NULL,
  `zon_th` varchar(125) DEFAULT NULL,
  `zon_en` varchar(125) DEFAULT NULL,
  `zon_def` varchar(255) DEFAULT NULL,
  `zon_shp_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `zones`
--

INSERT INTO `zones` (`zon_id`, `zon_th`, `zon_en`, `zon_def`, `zon_shp_id`) VALUES
(1, 'หัวเรือ', NULL, NULL, 1),
(2, 'update_post_zon_th', 'update_post_zon_en', 'update_post_zon_def', -2),
(3, 'ห้องรับรอง', NULL, NULL, 1),
(4, 'ห้องอาหาร', NULL, NULL, 1),
(5, 'ท้ายเรือ', NULL, NULL, 1),
(6, 'post_zon_th', 'post_zon_en', 'post_zon_def', -1),
(7, 'post_zon_th', 'post_zon_en', 'post_zon_def', -1),
(9, 'post_zon_th', 'post_zon_en', 'post_zon_def', -1),
(10, 'post_zon_th', 'post_zon_en', 'post_zon_def', -1),
(11, 'post_zon_th', 'post_zon_en', 'post_zon_def', -1),
(12, 'post_zon_th', 'post_zon_en', 'post_zon_def', -1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`shp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`zon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `shp_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `zon_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
