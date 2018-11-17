-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2017 at 03:21 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `UserName` varchar(60) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `comment` varchar(500) CHARACTER SET latin1 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `articleid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `UserName`, `email`, `comment`, `timestamp`, `articleid`) VALUES
(3, 'thorboon', 'thorboon@outlook.com', 'Ik vind dit niet kunnen dat al die voetballes zoveel blijven verdienen! Moest ik een voetballer zijn, ik zou heel wat delen met familie en vrienden.', '2017-01-06 00:27:37', 0),
(4, 'testpersoon1', 'bart@hotmail.com', 'testt12345', '2017-01-06 01:06:58', 0),
(5, 'testpersoon1', 'bart@hotmail.com', 'Al die geziever van die voetbal! Ik wou dat iedereen eerst eens zijn naar zichzelf keek.', '2017-01-06 00:43:04', 1),
(6, 'thorboon', 'thorboon@outlook.com', 'test', '2017-01-06 00:55:52', 0),
(7, 'thorboon', 'thorboon@outlook.com', 'test333', '2017-01-06 01:04:28', 0),
(8, 'thorboon', 'thorboon@outlook.com', 'test vrijdag', '2017-01-06 09:37:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, 'Thor', 'Boonaert', 'thorboon', 'thorboon@outlook.com', '$2y$10$Ei5fWz9zx5qblaYjociijuR9x2E.TaZnOnAxz3bD/t24taTHTzi0e'),
(2, 'bart', 'peeters', 'testpersoon7', 'bart@hotmail.com', '$2y$10$8gWz8/dIvsjnxcHSop6bVeXkPqIOTRgJl3AYrfhqz9qEBLif1uQh6'),
(3, 'testpersoon1', 'test', 'mqskdfljqmds', 'test@hotmail.com', '$2y$10$.Ozf3iVWLK4w1e2.wFvPiO6xoWPH9vGHLfAznI6J1zbzMPecRNiti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
