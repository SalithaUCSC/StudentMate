-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 12:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubusers`
--

CREATE TABLE `clubusers` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `indexno` varchar(10) NOT NULL,
  `clubname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubusers`
--

INSERT INTO `clubusers` (`username`, `fname`, `indexno`, `clubname`, `gender`, `linkedin`, `facebook`) VALUES
('rajja', 'janith', '1098765', 'mozila', 'male', 'ddasdasdasda', 'asdadadada'),
('salitha', 'salitha chathuranga', '15020101', 'compsoc', 'male', 'xxxxxxxxxxxxxx', 'yyyyyyyyyyyy'),
('user', 'sfasfsadf', '42424', 'mozila', 'male', 'safasfasd', 'fsafadfasf');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `nic` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fname`, `email`, `contact`, `nic`) VALUES
('admin', 'admin admin', 'admin@gmail.com', '191523411', '4141234214v'),
('salitha', 'salitha chathuranga', 'salitha@gmail.com', '1234567890', '1234567890'),
('user', 'user user', 'user@gmail.com', '345432534', '21523434');

-- --------------------------------------------------------

--
-- Table structure for table `fac_admins`
--

CREATE TABLE `fac_admins` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_admins`
--

INSERT INTO `fac_admins` (`username`, `fname`, `faculty`, `email`, `contactno`, `password`) VALUES
('fadmin1', 'faculty admin1', 'ucsc', 'fac1@gmail.com', 777123456, '123'),
('fadmin2', 'fadmin2', 'mgt', 'fadmin2@gmail.com', 2147483647, '123'),
('fadmin3', 'fadmin3', 'science', 'fadmin3@gmail.com', 2534545, '202cb962ac59075b964b'),
('fadmin5', 'sdsffgsdgsdf', 'ucsc', 'adsasdff@gmail.com', 12421341, '202cb962ac59075b964b'),
('fadmin6', 'fadmin6', 'science', 'fadmin6@gmail.com', 4544251, '202cb962ac59075b964b'),
('parami', 'parami', 'mgt', 'parami@gmail.com', 2147483647, '202cb962ac59075b964b'),
('ucscadmin', 'ucscadmin', 'ucsc', 'ucscadmin@gmail.com', 2147483647, '202cb962ac59075b964b');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(10) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `tname`, `date`, `time`, `content`) VALUES
(1, 'hello ', '2017-08-10', '15:03:00', '<p>dasd ssd ada s</p>\r\n'),
(2, 'adasda', '2017-08-16', '08:22:17', 'adadadadadadsa'),
(21, 'hello\n		', '2017-08-05', '02:02:00', '<p>zvxvvxvxvxv</p>\r\n'),
(22, 'This is  post\n		', '2017-08-16', '04:05:00', '<p>asfsrasdfs qda da qweqee qe qe qe qeq&nbsp;</p>\r\n'),
(23, 'RECENT POST\n		', '2017-08-21', '16:04:00', '<p>sdsdfdf sfsd fsfas fsf afadf asfsa fsaf asfasfasf</p>\r\n'),
(24, 'post\n		', '2017-08-04', '00:03:00', '<p>fsdzgdsgdg g dsgdsf zs <strong>awrs &nbsp;af ADA &nbsp;ADrrfeaa</strong><em> &nbsp;WWR WR</em></p>\r\n'),
(25, 'post 1\n		', '2017-08-10', '01:01:00', '<p>afdasdsad ad assds ada</p>\r\n'),
(26, 'post2\n		', '2017-08-02', '02:02:00', '<p>yfgfg <strong>f5ftgvv</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('salitha', '202cb962ac59075b964b07152d234b70'),
('admin', '202cb962ac59075b964b07152d234b70'),
('pool', '202cb962ac59075b964b07152d234b70'),
('nandika', '202cb962ac59075b964b07152d234b70'),
('padme', '827ccb0eea8a706c4c34a16891f84e7b'),
('facadmin', '202cb962ac59075b964b07152d234b70'),
('user', '202cb962ac59075b964b07152d234b70'),
('ucscadmin', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubusers`
--
ALTER TABLE `clubusers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fac_admins`
--
ALTER TABLE `fac_admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
