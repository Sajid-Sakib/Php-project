-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 10:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(9) NOT NULL,
  `status_text` text NOT NULL,
  `image` text NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_text`, `image`, `id`) VALUES
(1, 'RAMADAN OFFER\r\n-----------------------------------------------\r\nPHOTOGRAPHY PACKAGES\r\n-----------------------------------------------\r\nDOT Wedding & Event Planners\r\nWhere Quality Meets Satisfaction.\r\n-----------------------------------------------\r\nPre-book us and get this amazing offer.\r\nThis offer lasts for this RAMADAN only..!\r\n-----------------------------------------------\r\nFor more information:\r\nContact: 01700744481, 01700744484, 01700744485\r\n-----------------------------------------------\r\nOffice Location: House# 69/A, Road# 6/A, Dhanmondi, Dhaka- 1209. (Opposite of Anam Rangs Plaza)\r\n-----------------------------------------------', 'images/uploads/18835859_306208819831644_1155620079672026805_n.jpg', 2),
(2, 'PHOTOGRAPHY PACKAGES\r\n-----------------------------------------------\r\nDOT Wedding & Event Planners\r\nWhere Quality Meets Satisfaction.\r\n-----------------------------------------------\r\nPre-book us and get this amazing offer.\r\nThis offer lasts for this RAMADAN only..!\r\n-----------------------------------------------\r\nFor more information:\r\nContact: 01700744481, 01700744484, 01700744485\r\n-----------------------------------------------\r\nOffice Location: House# 69/A, Road# 6/A, Dhanmondi, Dhaka- 1209. (Opposite of Anam Rangs Plaza)\r\n-----------------------------------------------', 'images/uploads/18920470_306207686498424_5544293430682038763_n.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(5) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `user_id` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `user_id`, `password`, `user_type`) VALUES
(2, 'Sajid', 'Sakib', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
