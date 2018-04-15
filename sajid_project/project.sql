-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 11:30 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(9) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_description`, `publication_status`, `image`) VALUES
(1, 'Demo post one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed faucibus libero, ac imperdiet ex. In est nulla, blandit ac iaculis eget, sollicitudin vel purus. Nulla et tellus id orci elementum tristique. Nam et tortor malesuada, volutpat tortor id, lobortis est. Pellentesque pharetra elit lectus, id dignissim dui sodales sit amet. Sed sed enim nulla. Cras sed magna diam. Proin sollicitudin tortor congue magna porta tincidunt. Curabitur sodales augue ante, sed rutrum purus sollicitudin et. Morbi aliquam velit in semper efficitur.', 1, 'images/uploads/img (1).jpg'),
(2, 'Demo post two', 'Quisque rutrum lacus eros, non pellentesque tellus lacinia at. Etiam egestas ut tellus vitae placerat. Duis luctus sem vel est blandit, sed lacinia odio pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis, purus eu bibendum fringilla, nisl orci feugiat nisi, a pellentesque tortor ipsum et mi. In ac pretium neque, in gravida risus. Donec nisi elit, molestie vitae gravida ut, sodales eget ipsum. Pellentesque tristique est id sem elementum, in tempus sem varius. Morbi pulvinar magna arcu, non ultrices nulla mattis quis. Quisque nunc libero, rhoncus non diam in, viverra faucibus mi. Vestibulum quis elit erat. ', 1, 'images/uploads/img (2).jpg'),
(3, 'Demo post three', 'Proin sed lacus fringilla, maximus velit ut, facilisis dui. Morbi eget laoreet urna. Nulla non enim a eros posuere efficitur finibus sed ipsum. Integer pharetra, metus in condimentum porta, nunc purus feugiat velit, id imperdiet felis nulla quis lacus. Duis efficitur ex quis ipsum vulputate rutrum. Sed ut ante molestie nunc maximus aliquet. Phasellus vulputate mollis enim, scelerisque laoreet orci congue a. Nulla consectetur mauris ac ipsum fermentum semper. Pellentesque luctus tristique suscipit. Maecenas quis faucibus sapien. Etiam consectetur dictum mi, sed tincidunt eros tincidunt a. Suspendisse ut diam velit. Ut metus arcu, imperdiet sed posuere sit amet, interdum eu risus. Phasellus sapien urna, euismod ut ligula in, vestibulum gravida sem. In sit amet neque eget nibh convallis tincidunt ac at ante. Nunc feugiat luctus sapien sed maximus. ', 1, 'images/uploads/img (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(9) NOT NULL,
  `reviewer_name` varchar(50) NOT NULL,
  `review_text` text NOT NULL,
  `reting_point` tinyint(1) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `reviewer_name`, `review_text`, `reting_point`) VALUES
(1, 'Sajid', 'very good', 4),
(2, 'Sakib', 'Excellent', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `user_name`, `password`, `user_type`) VALUES
(1, 'Sajid Sakib', 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
