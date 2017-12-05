-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 01:29 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
(1, 'bordim place at Kohuwala', 'asfasfasfas asfd ahfagfasgfasgf jaasfuiasif asjfajs sn najsfufasjifnjasfi bas afibijas basiffhif', '2017-10-04', '16:50:06'),
(3, 'Apartment at Kirulapana', 'asdfsfsaf afad fasd asfas asfasfsad fafa asfs fasfas fsa sfass fasfasfasffasfas fsfassfasf as', '2017-10-12', '09:45:34'),
(4, 'Annex at Wijeraama', 'There''s a vacant annex at Wijaerama junction.', '2017-10-10', '14:03:00'),
(5, 'Apartment at Nugegoda', '<p>saf f fsf saf asfas dfhfgh gjgfsaf sdg hfcffc</p>\r\n', '2017-12-02', '02:21:00'),
(6, 'Apartment at Nugegoda', '<p>saf f fsf saf asfas dfhfgh gjgfsaf sdg hfcffc</p>\r\n', '2017-12-02', '02:21:00'),
(7, 'afasdf', '<p><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAcnggm42yJivPnLiFhwM_uMuoA5ISUBRTxLuvmhp-oyDXazDV" style="height:183px; width:275px" /></p>\r\n', '2017-12-07', '15:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `ac_comments`
--

CREATE TABLE `ac_comments` (
  `com_id` int(10) NOT NULL,
  `ac_id` int(10) NOT NULL,
  `comuser` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_comments`
--

INSERT INTO `ac_comments` (`com_id`, `ac_id`, `comuser`, `comment`) VALUES
(1, 1, 'xxx', 'asfdgsdfdsfhsh'),
(30, 1, 'xxx', 'egsd'),
(31, 0, 'xxxxxxxx', 'd qdads ad'),
(32, 0, 'xxxxxxxx', 'd qdads ad'),
(33, 0, 'qeqweqe', 'qeqeqeqe'),
(34, 0, 'zzzasdad', 'qeqeqewq'),
(35, 0, 'xxxxxxxx', 'd qdads ad'),
(36, 0, 'adaasd', 'fadd d da dq qrwrqger g');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `clubid` int(20) NOT NULL,
  `clubname` varchar(50) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `clubdate` date NOT NULL,
  `clubtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`clubid`, `clubname`, `faculty`, `clubdate`, `clubtime`) VALUES
(2, 'Mozila Club', 'ucsc', '2017-09-15', '12:00:00'),
(3, 'Pahasara', 'ucsc', '2017-09-06', '12:00:00'),
(4, 'ISACA', 'ucsc', '2017-09-14', '12:00:00'),
(6, 'IEEE Club', 'ucsc', '2017-10-10', '16:04:00'),
(7, 'Exploration Club', 'ucsc', '2017-10-12', '20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `clubusers`
--

CREATE TABLE `clubusers` (
  `club_uid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `faculty` varchar(30) NOT NULL,
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

INSERT INTO `clubusers` (`club_uid`, `username`, `fname`, `email`, `faculty`, `contact`, `indexno`, `clubname`, `gender`, `linkedin`, `facebook`) VALUES
(1, 'salitha', 'Salitha Chathuranga', 'salitha@gmail.com', 'ucsc', '0778787607', '2424355', 'ieee', 'male', 'xxxxx', 'zzzzz'),
(2, 'saliya', 'fdfaa21', 'saliya@gmail.com', 'ucsc', '23421', '24242', 'pahasara', 'male', 'gsdgsdfg', 'dfgsgs'),
(3, 'techpool', 'techpool bro', 'techpool94@gmail.com', 'ucsc', '07787876071', '15020101', 'ieee', 'male', 'qrqwrqwrqwrqwr', 'rqwrwqerwq');

-- --------------------------------------------------------

--
-- Table structure for table `club_data`
--

CREATE TABLE `club_data` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_value` varchar(30) NOT NULL,
  `c_faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_data`
--

INSERT INTO `club_data` (`c_id`, `c_name`, `c_value`, `c_faculty`) VALUES
(1, 'IEEE Club', 'ieee', 'ucsc'),
(2, 'FOS MEDIA', '', 'science'),
(6, 'Mozila', 'mozila', 'ucsc'),
(9, 'Exploration  Club', 'exploration', 'ucsc'),
(10, 'Rotract', 'rot', 'mgt');

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
(1, 'saliya', 'fadmin saliya', 'ucsc', 'saliya@gmail.com', 875691321, '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(2, 'xxxx', 'sdgdsgfg', 'mgt', 'dsda@gmail.com', 24143242, '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(4, 'pool', 'POOL mgt', 'mgt', 'poolsaliya@gmail.com', 23424242, '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `fac_data`
--

CREATE TABLE `fac_data` (
  `fac_id` int(11) NOT NULL,
  `fac_name` varchar(30) NOT NULL,
  `fac_value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_data`
--

INSERT INTO `fac_data` (`fac_id`, `fac_name`, `fac_value`) VALUES
(1, 'UCSC', 'ucsc'),
(2, 'Management', 'mgt'),
(3, 'Science', 'science'),
(4, 'Arts', 'arts');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(10) NOT NULL,
  `tname` varchar(120) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `tname`, `faculty`, `date`, `time`, `content`) VALUES
(36, 'hello guys how are you ? ', 'ucsc', '2017-09-08', '16:04:00', '<p>have fun</p>\r\n'),
(39, 'hello', 'mgt', '2017-09-12', '00:45:00', '<p>adassddadfaf</p>\r\n'),
(40, 'nice to meet you', 'ucsc', '2017-10-03', '23:34:00', '<p>new post</p>\r\n'),
(43, 'dasfasfsadf', 'ucsc', '2017-10-11', '15:03:00', '<p>fsdaf&nbsp; asdaD A Ad add&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `schols`
--

CREATE TABLE `schols` (
  `sc_id` int(10) NOT NULL,
  `sc_title` varchar(100) NOT NULL,
  `sc_des` varchar(300) NOT NULL,
  `sc_date` date NOT NULL,
  `sc_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schols`
--

INSERT INTO `schols` (`sc_id`, `sc_title`, `sc_des`, `sc_date`, `sc_time`) VALUES
(1, 'Distress Fund', 'afd fagj da fjdfjag ga d   ajdaj hdfaj adfj afdfj aj f', '2017-10-09', '03:03:00');

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
  `indexno` int(10) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `password` varchar(80) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `fname`, `email`, `contact`, `faculty`, `indexno`, `avatar`, `password`, `flag`) VALUES
(3, 'facadmin', 'Faculty Admin', 'facadmin@gmail.com', '0777123445', 'ucsc', 422143, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1),
(4, 'admin', 'admin', 'admin@gmail.com', '3245523', 'none', 0, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1),
(12, 'salitha', 'Salitha Chathuranga', 'salithachathuranga94@gmail.com', '0778787607', 'ucsc', 15020101, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1),
(13, 'techpool', 'techpool bro', 'techpool94@gmail.com', '07787876071', 'ucsc', 15020101, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1),
(14, 'pool123', 'saliya pool', 'poolsaliya@gmail.com', '0777123445', 'ucsc', 13131313, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 0),
(20, 'xxx', 'xxx', 'xxx@gmail.com', '0778787607', 'ucsc', 1341242, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 0);

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
  ADD PRIMARY KEY (`club_uid`);

--
-- Indexes for table `club_data`
--
ALTER TABLE `club_data`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `fac_admins`
--
ALTER TABLE `fac_admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `fac_data`
--
ALTER TABLE `fac_data`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `schols`
--
ALTER TABLE `schols`
  ADD PRIMARY KEY (`sc_id`);

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
  MODIFY `ac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ac_comments`
--
ALTER TABLE `ac_comments`
  MODIFY `com_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `clubid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clubusers`
--
ALTER TABLE `clubusers`
  MODIFY `club_uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `club_data`
--
ALTER TABLE `club_data`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `fac_admins`
--
ALTER TABLE `fac_admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fac_data`
--
ALTER TABLE `fac_data`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `schols`
--
ALTER TABLE `schols`
  MODIFY `sc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
