-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 05:32 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(11) NOT NULL,
  `code` varchar(2) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'GB', 'Great Britain'),
(2, 'US', 'Unated States'),
(3, 'UK', 'United Kindom'),
(4, 'BG', 'Bulgaria');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
`id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `bio` text NOT NULL,
  `country` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `first_name`, `last_name`, `bio`, `country`, `created`) VALUES
(1, 'Marian', 'John', 'I''m marian', 1, '2015-03-03 19:22:42'),
(2, 'aaaaaa', 'Smith', 'asdasda', 4, '2015-03-03 19:31:04'),
(3, 'Ivan', 'VAN', 'dddddddddd', 2, '2015-03-05 13:48:10'),
(4, 'Irena', 'ilieva', 'aaaaaaaaaasssss', 2, '2015-03-05 13:48:10'),
(5, 'ALex', 'Smith', '123', 1, '2015-03-06 10:11:59'),
(9, 'Mani', 'MEn', 'lele', 3, '2015-03-06 10:13:40'),
(10, 'ili', 'ne', '', 4, '2015-03-06 10:13:59'),
(11, 'qqqq', 'www', 'dddddd', 1, '2015-03-06 10:39:36'),
(12, 'asd', 'asd', 'asd', 2, '2015-03-06 10:48:26'),
(13, 'ss', 'sss', 'ss', 3, '2015-03-06 10:51:36'),
(14, 'aasas', 'asasasasas', 'asas', 3, '2015-03-06 10:55:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
