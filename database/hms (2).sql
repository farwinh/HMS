-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 11:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `boys_hostel`
--

CREATE TABLE `boys_hostel` (
  `room_no` int(50) NOT NULL,
  `floor` int(4) DEFAULT NULL,
  `student_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boys_hostel`
--

INSERT INTO `boys_hostel` (`room_no`, `floor`, `student_id`) VALUES
(101, 1, 'TG001'),
(101, 1, 'TG002'),
(101, 1, 'TG022'),
(101, 1, 'TG045');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `sender_id` varchar(50) DEFAULT NULL,
  `receiver_id` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `chat` varchar(1024) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`sender_id`, `receiver_id`, `date`, `time`, `chat`) VALUES
('warden', 'dean', '2022-03-13', '06:03:21', 'sadsad'),
('warden', 'dean', '2022-03-13', '06:04:26', 'sad'),
('warden', 'dean', '2022-03-13', '06:04:40', 'asdas'),
('warden', 'dean', '2022-03-13', '06:06:26', 'hjgjh'),
('me', 'dean', '2022-03-13', '06:38:59', 'jiji'),
('me', 'dean', '2022-03-13', '06:54:46', 'asd'),
('warden', 'dean', '2022-03-13', '07:00:16', 'sadsa'),
('warden', 'dean', '2022-03-13', '07:08:12', 'dsfd'),
('me', 'dean', '2022-03-13', '07:08:47', 'hello ptn');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `comp_id` varchar(50) NOT NULL,
  `rec` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `complaint` varchar(1024) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Qualification` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `electricity_bill`
--

CREATE TABLE `electricity_bill` (
  `Bill_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Amount` float(15,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entry_leave`
--

CREATE TABLE `entry_leave` (
  `student_ID` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `room_id` varchar(50) DEFAULT NULL,
  `furniture_name` varchar(500) DEFAULT NULL,
  `count` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Image_id` int(50) NOT NULL,
  `Image_name` varchar(500) NOT NULL,
  `Date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `girls_hostel`
--

CREATE TABLE `girls_hostel` (
  `room_no` int(50) DEFAULT NULL,
  `floor` int(4) DEFAULT NULL,
  `student_id` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_reg_temp`
--

CREATE TABLE `hostel_reg_temp` (
  `student_id` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `nic_number` int(20) DEFAULT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` varchar(50) NOT NULL,
  `owner` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `notice` varchar(1024) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parcel_notice`
--

CREATE TABLE `parcel_notice` (
  `notice_id` int(11) NOT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `Student_ID` int(50) NOT NULL,
  `Request_Category` varchar(500) NOT NULL,
  `Request` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `sec_id` varchar(50) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Date_Joined` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `nic_number` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_member`
--

CREATE TABLE `student_member` (
  `student_id` varchar(50) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `nic_number` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_member`
--

INSERT INTO `student_member` (`student_id`, `first_name`, `last_name`, `gender`, `address`, `DOB`, `contact_no`, `email`, `department`, `nic_number`) VALUES
('TG001', 'Saman', 'Sha', 'Male', 'Matara', '1998-05-05', 775511221, 'samansha@gmail.com', 'ICT', '981515456V'),
('TG002', 'Lakmal', 'Madushan', 'male', 'Jaffna', '1998-04-18', 754545652, 'lakmal@gmail.com', 'BST', '985623123V');

-- --------------------------------------------------------

--
-- Table structure for table `sub_warden`
--

CREATE TABLE `sub_warden` (
  `user_id` varchar(50) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Date_Joined` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `post`) VALUES
('wB001', 'Kumar', '79cfac6387e0d582f83a29a04d0bcdc4', 'warden'),
('w111', 'ward', '123', 'warden');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `user_id` varchar(50) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Date_Joined` date DEFAULT NULL,
  `Qualification` varchar(200) DEFAULT NULL,
  `pro_pic` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`user_id`, `first_name`, `last_name`, `gender`, `address`, `contact_no`, `email`, `DOB`, `Date_Joined`, `Qualification`, `pro_pic`) VALUES
('wB001', 'Janopi', 'Kumar', 'male', 'Kandy', 7777777, 'Janopi@gmail.com', '1990-10-10', '2021-01-01', 'PM', '6075-download.jfif'),
('wG001', 'kumari', 'apeksha', 'female', 'matara', 775554444, 'ApekshaKumari@gmail.com', '1997-10-10', '2021-01-01', 'VPM', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boys_hostel`
--
ALTER TABLE `boys_hostel`
  ADD PRIMARY KEY (`room_no`,`student_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `hostel_reg_temp`
--
ALTER TABLE `hostel_reg_temp`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `parcel_notice`
--
ALTER TABLE `parcel_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_member`
--
ALTER TABLE `student_member`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parcel_notice`
--
ALTER TABLE `parcel_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
