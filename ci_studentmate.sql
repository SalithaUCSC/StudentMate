-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2017 at 04:13 ප.ව.
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_studentmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommo`
--

CREATE TABLE `accommo` (
  `ac_id` int(10) NOT NULL,
  `ac_title` varchar(30) NOT NULL,
  `ac_content` varchar(500) NOT NULL,
  `ac_date` date NOT NULL,
  `ac_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommo`
--

INSERT INTO `accommo` (`ac_id`, `ac_title`, `ac_content`, `ac_date`, `ac_time`) VALUES
(1, 'bordim place at Kohuwala', 'asfasfasfas asfd ahfagfasgfasgf jaasfuiasif asjfajs sn najsfufasjifnjasfi bas afibijas basiffhif', '2017-10-04', '16:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `ac_comments`
--

CREATE TABLE `ac_comments` (
  `com_id` int(10) NOT NULL,
  `comuser` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_comments`
--

INSERT INTO `ac_comments` (`com_id`, `comuser`, `comment`) VALUES
(1, 'xxx', 'asfdgsdfdsfhsh'),
(2, 'ccc', 'asdgd gd ghdf cgj cgj'),
(3, 'xxx', 'fsdfsafsdaf'),
(4, 'ccc', 'fjkfhkfkhkh');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `clubid` int(20) NOT NULL,
  `clubname` varchar(50) NOT NULL,
  `clubdate` date NOT NULL,
  `clubtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`clubid`, `clubname`, `clubdate`, `clubtime`) VALUES
(1, 'IEEE Club', '2017-08-09', '12:00:00'),
(2, 'Mozila Club', '2017-09-15', '12:00:00'),
(3, 'Pahasara', '2017-09-06', '12:00:00'),
(4, 'ISACA', '2017-09-14', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clubusers`
--

CREATE TABLE `clubusers` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `indexno` varchar(10) NOT NULL,
  `clubname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubusers`
--

INSERT INTO `clubusers` (`username`, `fname`, `email`, `contact`, `indexno`, `clubname`, `gender`, `linkedin`, `facebook`) VALUES
('salitha', 'Salitha Chathuranga', 'salitha@gmail.com', '0778787607', '2424355', 'ieee', 'male', 'xxxxx', 'zzzzz'),
('saliya', 'fdfaa21', 'saliya@gmail.com', '23421', '24242', 'pahasara', 'male', 'gsdgsdfg', 'dfgsgs');

-- --------------------------------------------------------

--
-- Table structure for table `fac_admins`
--

CREATE TABLE `fac_admins` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` int(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_admins`
--

INSERT INTO `fac_admins` (`user_id`, `username`, `fname`, `faculty`, `email`, `contactno`, `password`) VALUES
(1, 'saliya', 'fdfaa21', 'ucsc', 'saliya@gmail.com', 87569, '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(2, 'xxxx', 'sdgdsgfg', 'mgt', 'dsda@gmail.com', 24143242, '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(10) NOT NULL,
  `tname` varchar(120) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `tname`, `date`, `time`, `content`) VALUES
(1, 'The map has been updated. New places are add into the maps. Please go and check.', '2017-08-10', '15:03:00', '<p>dasd ssd ada s</p>\r\n'),
(2, 'New scholarship opportunities are available now. You can go to scholarships section and check. If you are interested you', '2017-08-16', '08:22:17', 'adadadadadadsa'),
(30, 'hello guys how are you?', '2017-09-12', '11:11:00', '<p>have a nice day</p>\r\n'),
(35, 'hello', '2017-08-31', '11:11:00', '<p>xxxxxx</p>\r\n'),
(36, 'hello guys how are you', '2017-09-08', '16:04:00', '<p>zzzzzzzzzzzzzzzzzzzz</p>\r\n'),
(39, 'hello', '2017-09-12', '00:45:00', '<p>adassddadfaf</p>\r\n'),
(40, 'xxx', '2017-10-03', '23:34:00', '<p>new post</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `indexno` varchar(10) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `fname`, `email`, `contact`, `faculty`, `indexno`, `avatar`, `password`) VALUES
(1, 'salitha', 'Salitha Chathuranga', 'salitha@gmail.com', '0778787607', 'ucsc', '15020101', '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(2, 'saliya', 'saliya pool', 'poolsaliya@gmail.com', '0777123445', 'mgt', '1321312', '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommo`
--
ALTER TABLE `accommo`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `ac_comments`
--
ALTER TABLE `ac_comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`clubid`);

--
-- Indexes for table `clubusers`
--
ALTER TABLE `clubusers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fac_admins`
--
ALTER TABLE `fac_admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommo`
--
ALTER TABLE `accommo`
  MODIFY `ac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ac_comments`
--
ALTER TABLE `ac_comments`
  MODIFY `com_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `clubid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fac_admins`
--
ALTER TABLE `fac_admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
