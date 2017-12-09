-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 01:26 PM
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
  `ac_title` varchar(50) NOT NULL,
  `ac_content` varchar(500) NOT NULL,
  `ac_date` date NOT NULL,
  `ac_time` time NOT NULL,
  `ac_flag` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommo`
--

INSERT INTO `accommo` (`ac_id`, `ac_title`, `ac_content`, `ac_date`, `ac_time`, `ac_flag`) VALUES
(3, 'Apartment at Kirulapana Junction', '<p>asdfsfsaf afad fasd asfas asfasfsad fafa asfs fasfas fsa sfass fasfasfasffasfas fsfassfasf as</p>\r\n', '2017-10-12', '09:45:34', 1),
(5, 'Apartment at Nugegoda 2', '<p>saf f fsf saf asfas dfhfgh gjgfsaf sdg hfcffc</p>\r\n', '2017-12-02', '02:21:00', 1),
(6, 'Apartment at Nugegoda', '<p>saf f fsf saf asfas dfhfgh gjgfsaf sdg hfcffc</p>\r\n', '2017-12-02', '02:21:00', 1),
(10, 'Apartment at Delkanda', '<p>asfd dfsgsdf g</p>\r\n', '2017-12-06', '05:05:00', 1),
(12, 'bordim place at Kohuwala', '<p>asfdsaFSafd</p>\r\n', '2017-12-12', '16:04:00', 1),
(13, 'bordim place at Kesbawa', '<p>adsad fasf sf asf saf</p>\r\n', '2017-12-08', '00:12:00', 1),
(14, 'Apartment at Delkanda', '<p>adas asfasf&nbsp;</p>\r\n', '2017-12-02', '15:02:00', 0),
(15, 'new place', '<p>safsafsad&nbsp;</p>\r\n', '2017-12-06', '15:03:00', 1);

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
-- Table structure for table `busroute`
--

CREATE TABLE `busroute` (
  `id` int(11) NOT NULL,
  `busIndex` int(11) DEFAULT NULL,
  `route` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busroute`
--

INSERT INTO `busroute` (`id`, `busIndex`, `route`) VALUES
(1, 138, '1 2 3 4 5 6 7 25 26 27 28 29 30'),
(2, 120, '1 2 3 6 7 50 51 '),
(4, 155, '79 80 100 4 5 6 131 130 129 128 127 126 125'),
(6, 100, '1 2 132 131 130 129 128 127 126 125'),
(7, 154, '76 81 78 101 6 131 130 129 128 127 133'),
(10, 141, '129 50 25 102'),
(12, 135, '77 81 78 101 102 7 50 51');

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
(6, 'IEEE Club', 'ucsc', '2017-10-10', '16:04:00'),
(9, 'xxxxx', 'ucsc', '2017-12-06', '15:03:00'),
(10, 'mozila', 'ucsc', '2017-12-19', '17:05:00');

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
(3, 'techpool', 'techpool bro', 'techpool94@gmail.com', 'ucsc', '07787876071', '15020101', 'mozila', 'male', 'qrqwrqwrqwrqwr', 'rqwrwqerwq');

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
(2, 'FOS MEDIA', 'fos', 'science'),
(6, 'Mozila', 'mozila', 'ucsc'),
(9, 'Exploration  Club', 'exploration', 'ucsc'),
(10, 'Rotract', 'rot', 'mgt');

-- --------------------------------------------------------

--
-- Table structure for table `cos_train`
--

CREATE TABLE `cos_train` (
  `PID` int(11) NOT NULL,
  `Train_ID` int(11) DEFAULT NULL,
  `Maradana` int(11) DEFAULT NULL,
  `Colombo_Fort` int(11) DEFAULT NULL,
  `Secretarit_Halt` int(11) DEFAULT NULL,
  `Kompannavidiya` int(11) DEFAULT NULL,
  `Kollupitiya` int(11) DEFAULT NULL,
  `Bambalapitiya` int(11) DEFAULT NULL,
  `Wellawathte` int(11) DEFAULT NULL,
  `Mount_Lavinia` int(11) DEFAULT NULL,
  `Rathmalana` int(11) DEFAULT NULL,
  `Angulana` int(11) DEFAULT NULL,
  `Lunawa` int(11) DEFAULT NULL,
  `Moratuwa` int(11) DEFAULT NULL,
  `Koralawella` int(11) DEFAULT NULL,
  `Egodauyana` int(11) DEFAULT NULL,
  `Panadura` int(11) DEFAULT NULL,
  `Pinwatte` int(11) DEFAULT NULL,
  `Wadduwa` int(11) DEFAULT NULL,
  `Trainhalt_01` int(11) DEFAULT NULL,
  `Kaluthara_North` int(11) DEFAULT NULL,
  `Kaluthara_South` int(11) DEFAULT NULL,
  `Katukurunda` int(11) DEFAULT NULL,
  `Payagala_North` int(11) DEFAULT NULL,
  `Payagala_South` int(11) DEFAULT NULL,
  `Beruwala` int(11) DEFAULT NULL,
  `Hettimulla` int(11) DEFAULT NULL,
  `Aluthgama` int(11) DEFAULT NULL,
  `Benthota` int(11) DEFAULT NULL,
  `Induruwa` int(11) DEFAULT NULL,
  `Maha_Induruwa` int(11) DEFAULT NULL,
  `Kosgoda` int(11) DEFAULT NULL,
  `Piyagama` int(11) DEFAULT NULL,
  `Ahungalle` int(11) DEFAULT NULL,
  `Pathagamgoda` int(11) DEFAULT NULL,
  `Balapitiya` int(11) DEFAULT NULL,
  `Andadola` int(11) DEFAULT NULL,
  `Kandegoda` int(11) DEFAULT NULL,
  `Ambalangoda` int(11) DEFAULT NULL,
  `Madampagama` int(11) DEFAULT NULL,
  `Akurala` int(11) DEFAULT NULL,
  `Kahawa` int(11) DEFAULT NULL,
  `Telwatte` int(11) DEFAULT NULL,
  `Seenigama` int(11) DEFAULT NULL,
  `Hikkaduwa` int(11) DEFAULT NULL,
  `Thiranagama` int(11) DEFAULT NULL,
  `Kumarakanda` int(11) DEFAULT NULL,
  `Dodanduwa` int(11) DEFAULT NULL,
  `Rathgama` int(11) DEFAULT NULL,
  `Boossa` int(11) DEFAULT NULL,
  `Ginthota` int(11) DEFAULT NULL,
  `Piyadigama` int(11) DEFAULT NULL,
  `Richmond_Hill` int(11) DEFAULT NULL,
  `Galle` int(11) DEFAULT NULL,
  `Katugoda` int(11) DEFAULT NULL,
  `Unawatuna` int(11) DEFAULT NULL,
  `Thalpe` int(11) DEFAULT NULL,
  `Habaraduwa` int(11) DEFAULT NULL,
  `Koggala` int(11) DEFAULT NULL,
  `Kathaluwa` int(11) DEFAULT NULL,
  `Ahangama` int(11) DEFAULT NULL,
  `Medigama` int(11) DEFAULT NULL,
  `Kumbalgama` int(11) DEFAULT NULL,
  `Weligama` int(11) DEFAULT NULL,
  `Polwathumodara` int(11) DEFAULT NULL,
  `Miissa` int(11) DEFAULT NULL,
  `Kamburugamuwa` int(11) DEFAULT NULL,
  `Walgama` int(11) DEFAULT NULL,
  `Mathara` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cos_train`
--

INSERT INTO `cos_train` (`PID`, `Train_ID`, `Maradana`, `Colombo_Fort`, `Secretarit_Halt`, `Kompannavidiya`, `Kollupitiya`, `Bambalapitiya`, `Wellawathte`, `Mount_Lavinia`, `Rathmalana`, `Angulana`, `Lunawa`, `Moratuwa`, `Koralawella`, `Egodauyana`, `Panadura`, `Pinwatte`, `Wadduwa`, `Trainhalt_01`, `Kaluthara_North`, `Kaluthara_South`, `Katukurunda`, `Payagala_North`, `Payagala_South`, `Beruwala`, `Hettimulla`, `Aluthgama`, `Benthota`, `Induruwa`, `Maha_Induruwa`, `Kosgoda`, `Piyagama`, `Ahungalle`, `Pathagamgoda`, `Balapitiya`, `Andadola`, `Kandegoda`, `Ambalangoda`, `Madampagama`, `Akurala`, `Kahawa`, `Telwatte`, `Seenigama`, `Hikkaduwa`, `Thiranagama`, `Kumarakanda`, `Dodanduwa`, `Rathgama`, `Boossa`, `Ginthota`, `Piyadigama`, `Richmond_Hill`, `Galle`, `Katugoda`, `Unawatuna`, `Thalpe`, `Habaraduwa`, `Koggala`, `Kathaluwa`, `Ahangama`, `Medigama`, `Kumbalgama`, `Weligama`, `Polwathumodara`, `Miissa`, `Kamburugamuwa`, `Walgama`, `Mathara`) VALUES
(3, 8775, 701, 654, 651, 648, 644, 640, NULL, NULL, 625, NULL, NULL, 617, NULL, NULL, 605, NULL, 553, 547, 541, 536, 531, 526, 522, 513, 209, 504, 500, 455, 451, 446, NULL, 441, NULL, 433, NULL, 429, 426, 422, NULL, 418, NULL, NULL, 410, NULL, 406, 402, 358, 354, 351, 347, 343, 340, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 8760, 754, 748, 745, 742, 739, 735, NULL, NULL, 720, NULL, NULL, NULL, NULL, NULL, 705, NULL, NULL, NULL, NULL, 648, NULL, NULL, NULL, NULL, NULL, 628, 625, 620, 616, 611, 608, 605, 602, 558, 555, 552, 549, 545, 542, 539, NULL, 532, 529, 526, 523, 520, 517, 513, 509, 506, 503, 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 8096, 816, 810, 807, 804, 801, 757, NULL, NULL, NULL, NULL, NULL, 738, NULL, NULL, 726, NULL, NULL, NULL, NULL, 706, NULL, NULL, NULL, NULL, NULL, 648, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 628, NULL, NULL, NULL, NULL, NULL, 617, NULL, NULL, NULL, NULL, 607, NULL, NULL, NULL, 544, 537, 534, 527, 524, NULL, NULL, 517, NULL, NULL, 509, NULL, NULL, 501, NULL, 455),
(6, 8320, 745, 740, 737, 733, 724, 720, 715, 711, 707, 704, 701, 656, 652, 649, 642, 637, 630, 626, 620, 615, 611, 607, 604, 555, 550, 546, 543, 539, 534, 530, 526, 523, 520, 517, 514, 511, 507, 502, 459, 456, NULL, 449, 445, 442, 439, 435, 432, 428, 424, 421, 418, 415, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 8062, 750, 745, 742, 739, 736, 732, 728, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 701, NULL, NULL, NULL, NULL, 645, NULL, NULL, 635, 624, NULL, 616, NULL, 610, NULL, 602, NULL, 556, NULL, 550, NULL, NULL, 536, NULL, NULL, 530, NULL, NULL, 525, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8058, 849, 843, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 756, NULL, NULL, NULL, NULL, NULL, 741, NULL, NULL, NULL, 731, NULL, NULL, NULL, NULL, NULL, NULL, 720, NULL, NULL, NULL, NULL, NULL, 709, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 645, NULL, NULL, NULL, NULL, NULL, NULL, 626, NULL, NULL, 618, NULL, NULL, NULL, NULL, 605),
(9, 8056, 938, 932, NULL, NULL, NULL, NULL, NULL, 906, NULL, NULL, NULL, 858, NULL, NULL, 851, NULL, NULL, NULL, NULL, 835, NULL, NULL, NULL, NULL, NULL, 815, 812, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 752, NULL, NULL, NULL, NULL, NULL, 739, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 714, 707, 703, 656, 652, 649, 646, 642, 637, 634, 630, 625, 622, 617, 613, 610),
(10, 8086, NULL, 1315, NULL, NULL, NULL, NULL, NULL, 1256, NULL, NULL, NULL, NULL, NULL, NULL, 1236, NULL, NULL, NULL, NULL, 1215, NULL, NULL, NULL, NULL, NULL, 1149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1126, NULL, NULL, NULL, NULL, NULL, 1114, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1030, NULL, NULL, 1019, NULL, 1012, NULL, 1004, NULL, NULL, 955, NULL, NULL, 946, NULL, 940),
(11, 8050, 630, 635, NULL, NULL, NULL, NULL, NULL, 713, 717, NULL, NULL, 723, NULL, NULL, 734, NULL, 742, 748, 754, 758, NULL, NULL, NULL, NULL, NULL, 819, 822, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 844, NULL, NULL, NULL, NULL, NULL, 858, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 919, 941, 944, 951, 955, 958, 1001, 1005, 1010, 1013, 1017, 1022, 1025, 1029, 1038, 1042),
(12, 8040, NULL, 835, NULL, NULL, NULL, NULL, NULL, 850, NULL, NULL, NULL, 901, NULL, NULL, 912, NULL, NULL, NULL, NULL, 933, NULL, NULL, NULL, NULL, NULL, 953, 956, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1018, NULL, NULL, NULL, NULL, NULL, 1029, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1049, NULL, NULL, 1115, NULL, NULL, NULL, 1124, NULL, NULL, 1135, NULL, NULL, 1143, NULL, 1150),
(13, 8086, 1012, 1020, NULL, NULL, NULL, NULL, NULL, 1045, NULL, NULL, NULL, NULL, NULL, NULL, 1105, NULL, NULL, NULL, NULL, 1127, NULL, NULL, NULL, NULL, NULL, 1148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1211, NULL, NULL, NULL, NULL, NULL, 1222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1242, NULL, NULL, 1310, NULL, 1315, NULL, 1320, NULL, NULL, 1331, NULL, NULL, 1340, NULL, 1347),
(14, 8056, 1415, 1419, NULL, NULL, NULL, NULL, NULL, 1440, NULL, NULL, NULL, 1450, NULL, NULL, 1459, NULL, NULL, NULL, NULL, 1517, NULL, NULL, NULL, NULL, NULL, 1534, 1537, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605, NULL, NULL, NULL, NULL, NULL, 1618, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1633, 1651, 1654, 1701, 1705, 1708, 1711, 1715, 1720, 1723, 1727, 1732, 1735, 1740, 1744, 1748),
(15, 8058, 1540, 1544, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1631, NULL, NULL, NULL, NULL, NULL, 1647, NULL, NULL, NULL, 1657, NULL, NULL, NULL, NULL, NULL, NULL, 1708, NULL, NULL, NULL, NULL, NULL, 1719, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1734, NULL, NULL, NULL, NULL, NULL, NULL, 1758, NULL, NULL, 1806, NULL, NULL, NULL, NULL, 1820),
(16, 8096, 1640, 1644, NULL, NULL, NULL, NULL, NULL, NULL, 1704, NULL, NULL, NULL, NULL, NULL, 1721, NULL, NULL, NULL, NULL, 1742, NULL, NULL, NULL, NULL, NULL, 1757, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1817, NULL, NULL, NULL, NULL, NULL, 1828, NULL, NULL, NULL, NULL, 1838, NULL, NULL, NULL, 1845, NULL, NULL, 1900, NULL, NULL, NULL, 1909, NULL, NULL, 1920, NULL, NULL, 1928, NULL, 1935);

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
  `avatar` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_admins`
--

INSERT INTO `fac_admins` (`user_id`, `username`, `fname`, `faculty`, `email`, `contactno`, `avatar`, `password`) VALUES
(1, 'saliya', 'fadmin saliya', 'ucsc', 'saliya@gmail.com', 875691321, 'codeigniter.jpg', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(2, 'xxxx', 'sdgdsgfg', 'mgt', 'dsda@gmail.com', 24143242, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(4, 'pool', 'POOL mgt', 'mgt', 'poolsaliya@gmail.com', 23424242, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(5, 'user', 'xxx', 'ucsc', 'techpool@gmail.com', 777123456, '', '7b21848ac9af35be0ddb2d6b9fc3851934db8420'),
(6, 'ggg', 'ggggg', 'ucsc', 'xxx@gmail.com', 777123458, '', '7b21848ac9af35be0ddb2d6b9fc3851934db8420'),
(7, 'palan', 'palan', 'ucsc', 'xxx@gmail.com', 777123456, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(8, 'sunny', 'sunny', 'ucsc', 'xxx@gmail.com', 777123456, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(9, 'janaka', 'janaka', 'ucsc', 'janaka@gmail.com', 777123456, '', '7b21848ac9af35be0ddb2d6b9fc3851934db8420');

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
-- Table structure for table `get_station_details`
--

CREATE TABLE `get_station_details` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Line` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_station_details`
--

INSERT INTO `get_station_details` (`ID`, `Name`, `Line`) VALUES
(1, 'Maradana', 'All'),
(2, 'Colombo_Fort', 'All'),
(3, 'Secretarit_Halt', 'Cos'),
(4, 'Kompannavidiya', 'Cos'),
(5, 'Kollupitiya', 'Cos'),
(6, 'Bambalapitiya', 'Cos'),
(7, 'Wellawathte', 'Cos'),
(8, 'Mount_Lavinia', 'Cos'),
(9, 'Rathmalana', 'Cos'),
(10, 'Moratuwa', 'Cos'),
(11, 'Lunawa', 'Cos'),
(12, 'Koralawella', 'Cos'),
(13, 'Panadura', 'Cos'),
(14, 'Egodauyana', 'Cos'),
(15, 'Wadduwa', 'Cos'),
(16, 'Trainhalt_01', 'Cos'),
(17, 'Kaluthara_North', 'Cos'),
(18, 'Kaluthara_South', 'Cos'),
(19, 'Katukurunda', 'Cos'),
(20, 'Payagala_North', 'Cos'),
(21, 'Payagala_South', 'Cos'),
(22, 'Beruwala', 'Cos'),
(23, 'Hettimulla', 'Cos'),
(24, 'Aluthgama', 'Cos'),
(25, 'Benthota', 'Cos'),
(26, 'Induruwa', 'Cos'),
(27, 'Maha_Induruwa', 'Cos'),
(28, 'Kosgoda', 'Cos'),
(29, 'Piyagama', 'Cos'),
(30, 'Ahungalle', 'Cos'),
(31, 'Pathagamgoda', 'Cos'),
(32, 'Balapitiya', 'Cos'),
(33, 'Andadola', 'Cos'),
(34, 'Kandegoda', 'Cos'),
(35, 'Ambalangoda', 'Cos'),
(36, 'Madampagama', 'Cos'),
(37, 'Akurala', 'Cos'),
(38, 'Kahawa', 'Cos'),
(39, 'Telwatte', 'Cos'),
(40, 'Seenigama', 'Cos'),
(41, 'Hikkaduwa', 'Cos'),
(42, 'Thiranagama', 'Cos'),
(43, 'Kumarakanda', 'Cos'),
(44, 'Dodanduwa', 'Cos'),
(45, 'Rathgama', 'Cos'),
(46, 'Boossa', 'Cos'),
(47, 'Ginthota', 'Cos'),
(48, 'Galle', 'Cos'),
(49, 'Piyadigama', 'Cos'),
(50, 'Richmond_Hill', 'Cos'),
(51, 'Katugoda', 'Cos'),
(52, 'Unawatuna', 'Cos'),
(53, 'Thalpe', 'Cos'),
(54, 'Habaraduwa', 'Cos'),
(55, 'Koggala', 'Cos'),
(56, 'Kathaluwa', 'Cos'),
(57, 'Ahangama', 'Cos'),
(58, 'Medigama', 'Cos'),
(59, 'Kumbalgama', 'Cos'),
(60, 'Weligama', 'Cos'),
(61, 'Polwathumodara', 'Cos'),
(62, 'Miissa', 'Cos'),
(63, 'Kamburugamuwa', 'Cos'),
(64, 'Walgama', 'Cos'),
(65, 'Mathara', 'Cos'),
(66, 'Angulana', 'Cos'),
(67, 'Pinwatte', 'Cos'),
(68, 'Dematagoda', 'Main_Line_01'),
(69, 'Kelaniya', 'Main_Line_01'),
(70, 'Wanawasala', 'Main_Line_01'),
(71, 'Hunupitiya', 'Main_Line_01'),
(72, 'Enderamulla', 'Main_Line_01'),
(73, 'Horape', 'Main_Line_01'),
(74, 'Ragama', 'All'),
(75, 'Baseline_Road', 'Kalani_Velly_Line'),
(76, 'Cotta_Road', 'Kalani_Velly_Line'),
(77, 'Narahenpita', 'Kalani_Velly_Line'),
(78, 'Kirulapone', 'Kalani_Velly_Line'),
(79, 'Nugegoda', 'Kalani_Velly_Line'),
(80, 'Pangiriwaththa', 'Kalani_Velly_Line'),
(81, 'Udhamulla', 'Kalani_Velly_Line'),
(82, 'Nawinna', 'Kalani_Velly_Line'),
(83, 'Maharagama', 'Kalani_Velly_Line'),
(84, 'Pannipitiya', 'Kalani_Velly_Line'),
(85, 'Kottawa', 'Kalani_Velly_Line'),
(86, 'Malapalle', 'Kalani_Velly_Line'),
(87, 'Homagama_Hospital', 'Kalani_Velly_Line'),
(88, 'Homagama', 'Kalani_Velly_Line'),
(89, 'Panagoda', 'Kalani_Velly_Line'),
(90, 'Godagama', 'Kalani_Velly_Line'),
(91, 'Meegoda', 'Kalani_Velly_Line'),
(92, 'Watareka', 'Kalani_Velly_Line'),
(93, 'Padukka', 'Kalani_Velly_Line'),
(94, ' Arukkuwatte', 'Kalani_Velly_Line'),
(95, 'Angampitiya', 'Kalani_Velly_Line'),
(96, ' Uggalla', 'Kalani_Velly_Line'),
(97, 'Pinnawala', 'Kalani_Velly_Line'),
(98, 'Gammana', 'Kalani_Velly_Line'),
(99, 'Morakele', 'Kalani_Velly_Line'),
(100, 'Waga', 'Kalani_Velly_Line'),
(101, 'Kadugoda', 'Kalani_Velly_Line'),
(102, 'Kosgama', 'Kalani_Velly_Line'),
(103, 'Puwakpitiya', 'Kalani_Velly_Line'),
(104, 'Avisawella', 'Kalani_Velly_Line');

-- --------------------------------------------------------

--
-- Table structure for table `kalani_velly_line`
--

CREATE TABLE `kalani_velly_line` (
  `Train_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Colombo_Fort` int(11) DEFAULT NULL,
  `Maradana` int(11) DEFAULT NULL,
  `Baseline_Road` int(11) DEFAULT NULL,
  `Cotta_Road` int(11) DEFAULT NULL,
  `Narahenpita` int(11) DEFAULT NULL,
  `Kirulapone` int(11) DEFAULT NULL,
  `Nugegoda` int(11) DEFAULT NULL,
  `Pangiriwaththa` int(11) DEFAULT NULL,
  `Udahamulla` int(11) DEFAULT NULL,
  `Nawinna` int(11) DEFAULT NULL,
  `Maharagama` int(11) DEFAULT NULL,
  `Pannipitiya` int(11) DEFAULT NULL,
  `Kottawa` int(11) DEFAULT NULL,
  `Malapalle` int(11) DEFAULT NULL,
  `Homagama_Hospital` int(11) DEFAULT NULL,
  `Homagama` int(11) DEFAULT NULL,
  `Panagoda` int(11) DEFAULT NULL,
  `Godagama` int(11) DEFAULT NULL,
  `Meegoda` int(11) DEFAULT NULL,
  `Watareka` int(11) DEFAULT NULL,
  `Padukka` int(11) DEFAULT NULL,
  `Arukkuwatte` int(11) DEFAULT NULL,
  `Angampitiya` int(11) DEFAULT NULL,
  `Uggalla` int(11) DEFAULT NULL,
  `Pinnawala` int(11) DEFAULT NULL,
  `Gammana` int(11) DEFAULT NULL,
  `Morakele` int(11) DEFAULT NULL,
  `Waga` int(11) DEFAULT NULL,
  `Kadugoda` int(11) DEFAULT NULL,
  `Kosgama` int(11) DEFAULT NULL,
  `Puwakpitiya` int(11) DEFAULT NULL,
  `Avissawella` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalani_velly_line`
--

INSERT INTO `kalani_velly_line` (`Train_ID`, `ID`, `Colombo_Fort`, `Maradana`, `Baseline_Road`, `Cotta_Road`, `Narahenpita`, `Kirulapone`, `Nugegoda`, `Pangiriwaththa`, `Udahamulla`, `Nawinna`, `Maharagama`, `Pannipitiya`, `Kottawa`, `Malapalle`, `Homagama_Hospital`, `Homagama`, `Panagoda`, `Godagama`, `Meegoda`, `Watareka`, `Padukka`, `Arukkuwatte`, `Angampitiya`, `Uggalla`, `Pinnawala`, `Gammana`, `Morakele`, `Waga`, `Kadugoda`, `Kosgama`, `Puwakpitiya`, `Avissawella`) VALUES
(9262, 1, 1610, 1615, 1620, 1624, 1629, 1634, 1639, NULL, NULL, NULL, 1648, 1654, 1659, 1702, 1708, 1711, 1715, 1719, 1724, NULL, 1735, NULL, NULL, 1745, 1748, 1751, 1754, 1759, 1803, 1811, 1825, 1845),
(9263, 2, 1630, 1640, 1644, 1648, 1652, 1656, 1700, 1703, 1706, 1710, 1713, 1718, 1723, 1726, 1732, 1735, 1739, 1743, 1748, NULL, 1759, NULL, NULL, 1807, 1810, 1813, 1816, 1821, 1825, 1832, NULL, 1903),
(9264, 3, 1715, 1720, 1724, 1728, 1732, 1736, 1740, 1743, 1746, 1750, 1753, 1758, 1803, 1806, 1812, 1815, 1819, 1823, 1828, NULL, 1839, NULL, NULL, 1849, 1852, 1855, 1858, 1903, 1907, 1915, NULL, 1949),
(9271, 4, 2000, 2005, 2010, 2014, 2019, 2024, 2029, 2033, 2036, 2040, 2043, 2049, 2054, 2057, 2103, 2106, 2110, 2114, 2119, NULL, 2144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2218, 2238),
(9646, 5, 730, 726, 720, 715, 710, 705, 701, 656, 653, 649, 646, 640, 635, 631, 625, 622, 616, 612, 606, NULL, 555, NULL, NULL, 543, 540, 536, 533, 528, 523, 516, 504, 455),
(9649, 6, 742, 738, 732, NULL, 724, NULL, 716, NULL, NULL, NULL, 706, 700, 654, 650, 644, 641, 636, 632, 628, NULL, 617, NULL, NULL, NULL, 606, NULL, 601, 556, 552, 546, NULL, 530),
(9651, 9, 905, 846, 840, 836, 831, 827, 823, 820, 817, 813, 810, 803, 758, 755, 749, 746, 742, 738, 734, NULL, 723, NULL, NULL, 713, 710, 706, 703, 658, 653, 646, NULL, 625),
(9657, 10, 1539, 1520, 1513, 1509, 1504, 1459, 1454, 1450, 1447, 1443, 1440, 1429, 1424, 1421, 1415, 1412, 1400, 1356, 1351, NULL, 1340, NULL, NULL, 1330, 1327, 1323, 1320, 1315, 1310, 1302, 1245, 1235);

-- --------------------------------------------------------

--
-- Table structure for table `main_line_01_train`
--

CREATE TABLE `main_line_01_train` (
  `Train_ID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `Colombo_Fort` int(11) DEFAULT NULL,
  `Maradana` int(11) DEFAULT NULL,
  `Dematagoda` int(11) DEFAULT NULL,
  `Kelaniya` int(11) DEFAULT NULL,
  `Wanawasala` int(11) DEFAULT NULL,
  `Hunupitiya` int(11) DEFAULT NULL,
  `Enderamulla` int(11) DEFAULT NULL,
  `Horape` int(11) DEFAULT NULL,
  `Ragama` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_line_01_train`
--

INSERT INTO `main_line_01_train` (`Train_ID`, `PID`, `Colombo_Fort`, `Maradana`, `Dematagoda`, `Kelaniya`, `Wanawasala`, `Hunupitiya`, `Enderamulla`, `Horape`, `Ragama`) VALUES
(1109, 1, 300, 305, 309, 314, NULL, 320, NULL, NULL, 329),
(3404, 2, 400, 404, 408, 414, 417, 420, 423, 427, 430),
(1125, 3, 440, 444, 448, 453, 456, 459, 502, 506, 509),
(3406, 4, 500, 504, 509, 514, 517, 520, 523, 527, 530),
(1124, 5, 512, 516, 522, 527, NULL, 531, NULL, NULL, 538),
(3409, 6, 541, 546, 551, 556, 559, 602, 605, 609, 612),
(1005, 8, 555, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 618),
(6011, 9, 605, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 626),
(1132, 10, 623, 628, 632, 637, 640, 643, 646, 650, 653),
(4077, 11, 635, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 657),
(1129, 12, 645, 650, 654, 659, NULL, 703, NULL, NULL, 724),
(1135, 13, 702, 707, 711, 716, 721, 725, 728, 732, 739),
(1131, 14, 714, 720, 725, 731, NULL, 737, NULL, NULL, 800),
(1133, 15, 735, 740, 744, 749, NULL, 753, NULL, NULL, 800),
(3411, 16, 740, 746, 751, 757, 801, 805, 809, 814, 821),
(3418, 17, 806, 811, 816, NULL, NULL, NULL, NULL, NULL, 829),
(1015, 18, 830, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 851),
(5452, 19, 850, 856, NULL, NULL, NULL, NULL, NULL, NULL, 916),
(1141, 20, 855, 900, 904, 909, 912, 915, 918, 922, 931),
(1146, 21, 930, 935, NULL, NULL, NULL, NULL, NULL, NULL, 952),
(3412, 22, 935, 940, 944, 949, 952, 955, 958, 1002, 1005),
(1007, 23, 945, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1007),
(1023, 24, 1240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1302),
(4085, 25, 1345, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1407);

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`, `description`) VALUES
(20, 'Perera & Sons', '31, Havelock Rd, Colombo 00500\r\n', 6.895025, 79.860657, 'Restuarant', ''),
(21, '88 Chinese', '98/1 Sri Sambuddhathva Jayanthi Mawatha, Colombo 00500\r\n', 6.894636, 79.860886, 'Restuarant', ''),
(22, 'People''s ATM', 'Thurstan Rd, Colombo 00700', 6.899344, 79.860138, 'ATM', ''),
(23, 'National Savings Bank ATM', '\r\nThurstan Rd, Colombo 00700', 6.899256, 79.860161, 'ATM', ''),
(24, 'Sri Vihar Restaurant', 'Sri Sambuddhatva jayanti Mawatta,, No 3, Colombo 05.', 6.896995, 79.860100, 'Restaurant', 'Sri Vihar is one of the well known restaurants for Indian vegetarian cuisine.'),
(25, 'Elite Indian Restaurant ', '124,Bauddhaloka Mawatha, Colombo 04', 6.896430, 79.857689, 'Restaurant', 'Casual Dining'),
(26, 'Raheema Restaurant', 'Thurstan Rd, Colombo 07', 6.903953, 79.858284, 'Restaurant', ''),
(28, 'Mitsis Delicacies', '34A, Bagatalle Rd, Colombo 04', 6.903079, 79.857384, 'Restaurant', 'Greek Restaurant'),
(29, 'Queens Cafe', 'R. A. De Mel Mawatha, Colombo 03', 6.899553, 79.855988, 'Restaurant', ''),
(30, 'Rasa Bojun Restaurant', '62 Sri Sambuddhathva Jayanthi Mawatha, Colombo 05', 6.896113, 79.860344, 'Restaurant', ''),
(31, 'The Thai Cuisine Boulevard', '300, Queen''s Rd, Colombo 03', 6.899266, 79.855453, 'Restaurant', 'Thai Reataurant'),
(32, 'Han Gook Gwan', 'Sambuddathwa Jayanthi /mavatha,Colombo 05', 6.895645, 79.861160, 'Restaurant', 'Korean Restaurant'),
(33, 'KFC', '07 GS7, Race Course Court, Colombo 07', 6.906850, 79.863174, 'Restaurant', 'Fast Food Restaurant'),
(34, 'McDonald''s', 'Philip Gunewardena Mawatha, Colombo 07', 6.907702, 79.862831, 'Restaurant', 'Fast Food Restaurant'),
(35, 'Burger King - Arcade Independence', 'Independence Arcade, Bauddhaloka Mawatha, Colombo 07', 6.904208, 79.869057, 'Restaurant', 'Fast Food Restaurant'),
(36, 'Dinemore', '20 Thurstan Rd 07, Colombo 07', 6.908894, 79.858582, 'Restaurant', 'Fast Food Restaurent'),
(37, 'Oak Ray Flower Drum', '5th Ln, Colombo 07', 6.906806, 79.857986, 'Restaurant', 'Chinese Restaurant'),
(38, 'Olive Garden Restaurant', '28, Thurstan Rd, Colombo 07', 6.905507, 79.858253, 'Restaurant', ''),
(39, '88 Chinese Restaurant', '98/1 Sri Sambuddhathva Jayanthi Mawatha, Colombo 05', 6.895793, 79.860741, 'Restaurant', 'Chinese Restaurant'),
(40, 'Tsing Tao', 'Philip Gunewardena Mawatha, Colombo 07', 6.906444, 79.863060, 'Restaurant', 'Chinese Restaurent'),
(41, 'Maharaja Palace', 'Rajakeeya Mawatha, Colombo 07', 6.907040, 79.860397, 'Restaurant', 'Indian Restaurant'),
(42, 'BOC ATM/ CDM - Arcade', 'Colombo 07', 6.905591, 79.869148, 'ATM', 'BOC'),
(43, 'PET ATM', 'Kumaratunga Munidasa Mawatha, Colombo 07', 6.900734, 79.860100, 'ATM', ''),
(44, 'NDB Bank ATM', 'Level G, NDB, Capital Building, 135, Bauddhaloka Mawatha, Colombo 004', 6.897837, 79.857353, 'ATM', ''),
(45, 'Sampath Bank ATM', 'Philip Gunewardena Mawatha, Colombo 07', 6.903205, 79.861984, 'ATM', ''),
(46, 'Nations Trust Bank', '100 Sri Sambuddhathva Jayanthi Mawatha, Colombo 05', 6.895707, 79.861038, 'ATM', ''),
(47, 'Commercial ATM', 'No 405 & 407, 03 R. A. De Mel Mawatha, Colombo 04', 6.901586, 79.855377, 'ATM', ''),
(48, 'HSBC Bank (ATM)', '41 Maitland Cres, Colombo 07', 6.910990, 79.864853, 'ATM', ''),
(49, 'Seylan Bank ATM', 'Sri Sambuddhathva Jayanthi Mawatha, Colombo 05', 6.891604, 79.863480, 'ATM', ''),
(50, 'New Piersons Pharmacy', ' 110/9 Thurstan Rd, Colombo 03', 6.904726, 79.858459, 'Pharmacy', ''),
(51, 'Healthguard Pharmacy (Ltd)', 'Maitland Cres, Colombo 07', 6.909753, 79.865456, 'Pharmacy', 'Pharmacy and Grocery'),
(52, 'Commercial Bank Staff Pharmacy', 'Adam''s Ave, Colombo 05', 6.899315, 79.859703, 'Pharmacy', ''),
(53, 'Raheema Pharmacy', 'Thurstan Rd, Colombo 07', 6.903973, 79.858223, 'Pharmacy', ''),
(54, 'Southern Pharmacy', 'Havelock Rd, Colombo 05', 6.891037, 79.863663, 'Pharmacy', ''),
(55, 'SOS Pharmacy', 'Havelock Rd, Colombo 05', 6.890670, 79.863808, 'Pharmacy', ''),
(56, 'Hercules Tailors', '68 Sri Sambuddhathva Jayanthi Mawatha, Colombo 05', 6.898245, 79.860420, 'Textile', 'Tailors'),
(57, 'Raheem''s Custom Tailors', 'Ven. Muruththettuwe Ananda Himi Mawatha, Colombo 05', 6.891684, 79.863937, 'Textile', 'Tailors'),
(58, 'The Factory Outlet', '192 Havelock Rd, Colombo 05', 6.889899, 79.863625, 'Textile', ''),
(59, 'The Outlet Store', '142 Bauddhaloka Mawatha, Colombo 04', 6.898564, 79.858192, 'Textile', ''),
(60, 'Aviraté', '30 Maitland Cres, Colombo 07', 6.908736, 79.865036, 'Textile', ''),
(61, 'Tommy Hilfiger Store', 'Race Course,Colombo 007', 6.905982, 79.868881, 'Textile', ''),
(62, 'Laksala', '215 Bauddhaloka Mawatha, Colombo 07', 6.898304, 79.860558, 'Textile', '');

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
(39, 'hello guys!', 'ucsc', '2017-09-12', '00:45:00', '<p>adassddadfaf</p>\r\n'),
(40, 'nice to meet you', 'ucsc', '2017-10-03', '23:34:00', '<p>new post</p>\r\n'),
(43, 'dasfasfsadf', 'ucsc', '2017-10-11', '15:03:00', '<p>fsdaf&nbsp; asdaD A Ad add&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `no` int(10) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`no`, `place`) VALUES
(1, 'Pettah'),
(2, 'Fort Railway Station'),
(3, 'GaminiHall'),
(4, 'TownHall'),
(5, 'Public Library'),
(6, 'Colombo Campus'),
(7, 'Thibirigasyaya'),
(25, 'Kirulapone'),
(26, 'Nugegoda'),
(27, 'Delkada'),
(28, 'Maharagama'),
(29, 'Kottawa'),
(30, 'Homagama'),
(50, 'Pamankada'),
(51, 'Kohuwala'),
(52, 'Kalubowila'),
(75, 'Wattala'),
(76, 'Kiribathgoda'),
(77, 'Kelaniya'),
(78, 'Orugodawatta'),
(100, 'Maradana'),
(101, 'Borella'),
(102, 'Narahenpita'),
(103, 'Rajagiriya'),
(104, 'Battaramulla'),
(105, 'Mattakuliya'),
(106, 'Kotahena'),
(125, 'Galleface'),
(126, 'Kollupitiya'),
(127, 'Bambalapitiya'),
(128, 'Wellawatta'),
(129, 'Dehiwala'),
(130, 'Mount Lavnia'),
(131, 'Rathmalana'),
(132, 'Moratuwa'),
(79, 'Mattakuliya'),
(80, 'Kotahena'),
(81, 'Peliyagoda'),
(134, 'Panadura'),
(135, 'Angulana');

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
(1, 'Distress Fund', '<p>afd fagj da fjdfjag ga d ajdaj hdfaj adfj afdfj aj f</p>\r\n', '2017-10-09', '03:03:00'),
(2, 'LCF Fund', '<p>dsa asf asfasfasf saf saf saf asf&nbsp;</p>\r\n', '2017-12-05', '02:02:00'),
(3, 'xxx allowances', '<p>gd ghk fuifihg ghjg</p>\r\n', '2017-12-06', '18:06:00'),
(4, 'Unknown Fund', '<p>adssa gsdg dh df hdf hdh dh dh&nbsp;</p>\r\n', '2017-12-11', '03:56:00'),
(5, 'Unknown Fund', '<p>afasdf as sag gsa ag a</p>\r\n', '2017-11-13', '16:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `train_details`
--

CREATE TABLE `train_details` (
  `Train_ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Line` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `Availability` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_details`
--

INSERT INTO `train_details` (`Train_ID`, `Name`, `Line`, `Type`, `Availability`) VALUES
(1005, 'Podi Menike', 'Main_Line_01', 'EXPRESS', 'DAILY'),
(1007, '', 'Main_Line_01', 'EXPRESS', 'DAILY'),
(1015, 'Udarata Menike', 'Main_Line_01', 'EXPRESS', 'DAILY'),
(1023, '', 'Main_Line_01', 'EXPRESS', 'DAILY'),
(1109, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'DAILY'),
(1124, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'DAILY'),
(1125, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'DAILY'),
(1129, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'NOT ON SUNDAY & HOLIDAY'),
(1131, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'MONDAY TO FRIDAY ( EXCEPT HOLIDAYS)'),
(1132, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'NOT ON SUNDAY & HOLIDAY'),
(1133, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'MONDAY TO FRIDAY	'),
(1135, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'DAILY'),
(1141, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'DAILY'),
(1146, '', 'Main_Line_01', 'BUDGET TRAIN', 'DAILY'),
(3404, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'DAILY'),
(3406, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'NSU'),
(3409, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'DAILY'),
(3411, '', 'Main_Line_01', 'MIXED TRAINS', 'DAILY'),
(3412, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'DAILY'),
(3418, '', 'Main_Line_01', 'COLOMBO COMMUTER', 'NS,NSU'),
(4077, 'Yal Devi', 'Main_Line_01', 'LONG DISTANCE', 'DAILY'),
(4085, 'Rajarata Rajini', 'Main_Line_01', 'EXPRESS', 'DAILY'),
(5452, '', 'Main_Line_01', 'LONG DISTANCE', 'DAILY'),
(6011, 'Udaya Devi', 'Main_Line_01', 'EXPRESS', 'DAILY'),
(8040, 'Colombo_Fort-Mathara', 'Cos', 'EXPRESS TRAIN', 'DAILY'),
(8050, 'Maradana-Mathara', 'Cos', 'EXPRESS TRAIN', 'DAILY'),
(8056, 'Galu Kumari', 'Cos', 'LONG DISTANCE', 'MONDAY TO FRIDAY & SUNDAY'),
(8058, 'RUHUNU KUMARI', 'Cos', 'EXPRESS TRAIN', 'DAILY'),
(8062, 'Maradana-Hikkaduwa', 'Cos', 'LOCAL TRAINS', 'MONDAY TO FRIDAY'),
(8086, 'Rajarata Regini', 'Cos', 'EXPRESS TRAIN', 'DAILY'),
(8096, 'Sagarika', 'Cos', 'EXPRESS TRAIN', 'NSU'),
(8320, '8320', 'Cos', 'LONG DISTANCE', 'MONDAY TO FRIDAY'),
(8760, 'SAMUDRA DEVI', 'Cos', 'EXPRESS TRAIN', 'NSU'),
(8775, 'NIGHT MAIL', 'Cos', 'Night Mail Train', 'MONDAY TO FRIDAY'),
(9262, '', 'Kalani_Velly_Line', 'COLOMBO COMMUTER', 'MONDAY TO FRIDAY AND SUNDAY'),
(9263, '', 'Kalani_Velly_Line', 'COLOMBO COMMUTER', 'MONDAY TO FRIDAY AND SUNDAY'),
(9264, '', 'Kalani_Velly_Line', 'COLOMBO COMMUTER', 'DAILY'),
(9271, '', 'Kalani_Velly_Line', 'COLOMBO COMMUTER', 'DAILY'),
(9646, '', 'Kalani_Velly_Line', 'COLOMBO COMMUTER', 'DAILY'),
(9649, '', 'Kalani_Velly_Line', 'COLOMBO COMMUTER', 'NSU'),
(9651, '', 'Kalani_Velly_Line', 'COLOMBO COMMUTER', 'DAILY'),
(9657, '', 'Kalani_Velly_Line', 'COLOMBO COMMUTER', 'DAILY');

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
  `flag` int(1) NOT NULL DEFAULT '0',
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `fname`, `email`, `contact`, `faculty`, `indexno`, `avatar`, `password`, `flag`, `reg_date`) VALUES
(3, 'facadmin', 'Faculty Admin', 'facadmin@gmail.com', '0777123445', 'ucsc', 422143, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1, '2017-12-03'),
(4, 'admin', 'admin', 'admin@gmail.com', '32455231', '', 1, 'admin.png', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1, '2017-12-01'),
(12, 'salitha', 'Salitha Chathuranga', 'salithachathuranga94@gmail.com', '0778787607', 'ucsc', 15020102, 'me.jpg', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1, '2017-12-02'),
(13, 'techpool', 'techpool bro', 'techpool94@gmail.com', '07787876071', 'ucsc', 15020101, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1, '2017-11-13'),
(14, 'pool123', 'saliya pool', 'polsaliya@gmail.com', '0777123445', 'ucsc', 13131313, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 0, '2017-12-09'),
(21, 'sandali', 'sandali', 'sandali@gmail.com', '0777123456', 'ucsc', 43212234, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1, '2017-10-23'),
(22, 'potha', 'dilshan', 'xxx@gmail.com', '0778787607', 'mgt', 43212234, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 0, '2017-11-13'),
(23, 'pool1234', 'Techpool', 'techpool@gmail.com', '0778787607', 'ucsc', 43212234, '', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 1, '2017-11-28'),
(27, 'user', 'Techpool', 'usaer@gmail.com', '0777123456', 'science', 43212234, '', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 1, '2017-12-05'),
(29, 'paggaa', 'hashitha shamal', 'pagga@gmail.com', '0778787607', 'mgt', 1341242, '', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', 1, '2017-10-31'),
(30, 'jadu', 'dewram', 'jadu@gmail.com', '0778787606', 'ucsc', 43212234, '', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', 1, '2017-09-12'),
(31, 'sunny', 'sunny', 'sunny@gmail.com', '0778787607', 'arts', 43212234, '', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', 1, '2017-09-25'),
(32, 'wora', 'worren', 'wora@gmail.com', '0777123456', 'ucsc', 1341242, '', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', 0, '2017-08-21'),
(36, 'suda', 'suda', 'wathmali123@gmail.com', '0778787607', 'ucsc', 43212234, 'download.png', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', 0, '2017-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `user_markers`
--

CREATE TABLE `user_markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_markers`
--

INSERT INTO `user_markers` (`id`, `name`, `address`, `lat`, `lng`, `type`, `description`) VALUES
(33, 'gdhddh', 'saf  g aag sdfg sd hsdh', 324.000000, 232.000000, 'Restaurent', 'asfdsahdfk shgh hgsfa safoas fasfb bhskf'),
(32, 'place 1', 'ada  asfsafs fsaa', 12.000000, 34.000000, 'Pharmacy', 'asdas s dsghgs sdg dg sd g'),
(34, 'place 2', 'afsa  af asfs af fa ', 1312.000000, 131.000000, 'ATM', 'erqwr wqr wqrwq r wqr r'),
(35, 'place 3', 'asf asas saf sagfsa asf a', 1412.000000, 131.000000, 'Pharmacy', 'ajkldsf fk  uahsof kb kf ');

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
-- Indexes for table `cos_train`
--
ALTER TABLE `cos_train`
  ADD PRIMARY KEY (`PID`);

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
-- Indexes for table `get_station_details`
--
ALTER TABLE `get_station_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kalani_velly_line`
--
ALTER TABLE `kalani_velly_line`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `main_line_01_train`
--
ALTER TABLE `main_line_01_train`
  ADD PRIMARY KEY (`PID`),
  ADD UNIQUE KEY `Train_ID` (`Train_ID`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `train_details`
--
ALTER TABLE `train_details`
  ADD PRIMARY KEY (`Train_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_markers`
--
ALTER TABLE `user_markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommo`
--
ALTER TABLE `accommo`
  MODIFY `ac_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ac_comments`
--
ALTER TABLE `ac_comments`
  MODIFY `com_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `clubid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT for table `cos_train`
--
ALTER TABLE `cos_train`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `fac_admins`
--
ALTER TABLE `fac_admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fac_data`
--
ALTER TABLE `fac_data`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kalani_velly_line`
--
ALTER TABLE `kalani_velly_line`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `schols`
--
ALTER TABLE `schols`
  MODIFY `sc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user_markers`
--
ALTER TABLE `user_markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
