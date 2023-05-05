-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 09:45 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`, `admin_email`) VALUES
(1, 'admin1234', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msgs` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imgs` text NOT NULL,
  `chat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msgs`, `date`, `imgs`, `chat_id`) VALUES
(42, 'nzekwe ik', 'hi', '2018-05-15 22:27:10', 'Koala.jpg', 21),
(43, 'gggg gggg', 'okay', '2018-05-15 22:35:27', 'Lighthouse.jpg', 22),
(44, 'gggg gggg', 'ddasfdfdsds', '2018-05-15 22:35:32', 'Lighthouse.jpg', 22),
(45, 'gggg gggg', 'dfdfsaasdffdfd', '2018-05-15 22:35:37', 'Lighthouse.jpg', 22),
(46, 'gggg gggg', 'dsfsdffdsfdsf', '2018-05-15 22:35:42', 'Lighthouse.jpg', 22),
(47, 'nzekwe ik', '#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62ajkddlkdsl #acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a#acd62a', '2018-05-17 17:58:44', 'Lighthouse.jpg', 21),
(48, 'Ajala Oluwafemi', 'Hellow friends', '2018-05-17 20:50:15', '1278844_547649898618107_1102958878_o.jpg', 23),
(49, 'Ajala Oluwafemi', 'OKAY ', '2018-05-17 20:58:44', '1278844_547649898618107_1102958878_o.jpg', 23),
(50, 'Ajala Oluwafemi', 'HELLO', '2018-05-17 21:02:27', '1278844_547649898618107_1102958878_o.jpg', 23),
(51, 'Ajala Oluwafemi', 'GOOD AFTERNOOON', '2018-05-17 21:02:52', '1278844_547649898618107_1102958878_o.jpg', 23),
(52, 'Ajala Oluwafemi', 'hellow friend', '2018-05-17 23:12:08', '1278844_547649898618107_1102958878_o.jpg', 23),
(53, 'Ajala Oluwafemi', 'where are you sir', '2018-05-17 23:20:03', '1278844_547649898618107_1102958878_o.jpg', 23),
(54, 'Ajala Oluwafemi', 'i will join you soon', '2018-05-17 23:20:36', '1278844_547649898618107_1102958878_o.jpg', 23),
(55, 'gggg gggg', 'how are you sir', '2018-05-18 04:58:09', 'Lighthouse.jpg', 23),
(56, 'Ajala Oluwafemi', 'so hope you are coming home', '2018-05-18 04:58:44', '1278844_547649898618107_1102958878_o.jpg', 23),
(57, 'gggg gggg', 'takkdfkjdfssjlkdsf\r\n', '2018-05-18 04:59:08', 'Lighthouse.jpg', 23),
(58, 'Ajala Oluwafemi', 'ikdsklddsfkljfsjlkfdsljkdfs', '2018-05-18 04:59:22', '1278844_547649898618107_1102958878_o.jpg', 23),
(59, 'gggg gggg', 'takkdfkjdfssjlkdsf\r\n', '2018-05-18 05:01:00', 'Lighthouse.jpg', 23),
(60, 'Ajala Oluwafemi', 'Jesus is lord', '2018-05-18 05:01:29', '1278844_547649898618107_1102958878_o.jpg', 23),
(61, 'Ajala Oluwafemi', 'jjjjjjjjjjjjjjjjjjjj', '2018-05-18 19:25:05', '1278844_547649898618107_1102958878_o.jpg', 23),
(62, 'Ajala Oluwafemi', 'wwwwwwwwwwwww', '2018-05-18 19:25:41', '1278844_547649898618107_1102958878_o.jpg', 23),
(63, 'Ajala Oluwafemi', 'hello', '2018-05-18 19:28:59', '1278844_547649898618107_1102958878_o.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE `pins` (
  `id` int(11) NOT NULL,
  `card_pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pins`
--

INSERT INTO `pins` (`id`, `card_pin`) VALUES
(44, '201555500292'),
(45, '227196714111'),
(46, '114248335488'),
(47, '64781396583'),
(48, '69138102093'),
(49, '2918513127'),
(50, '58989077631'),
(51, '20268072348'),
(52, '88472032122'),
(53, '83975992335'),
(54, '130443739461'),
(55, '92836811475'),
(56, '124336406439'),
(57, '222760098084'),
(58, '205865109102');

-- --------------------------------------------------------

--
-- Table structure for table `pin_activation`
--

CREATE TABLE `pin_activation` (
  `id` int(10) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `std_reg` int(10) NOT NULL,
  `std_pass` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin_activation`
--

INSERT INTO `pin_activation` (`id`, `pin`, `std_reg`, `std_pass`, `session`, `time`) VALUES
(20, '33626791158', 2016224049, '2016224049', '2017/2018', '2018-05-15 22:24:45'),
(21, '254384900037', 2016224022, '2016224022', '2016/2017', '2018-05-15 22:32:13'),
(22, '67720936806', 2016224012, '2016224012', '2016/2017', '2018-05-15 23:14:47'),
(23, '239352060084', 2016224000, '2016224000', '2018/2019', '2018-05-17 18:31:52'),
(24, '42977976489', 2015223666, 'changed', '2018/2019', '2018-05-17 21:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `register_student`
--

CREATE TABLE `register_student` (
  `id` int(10) NOT NULL,
  `reg_number` int(10) NOT NULL,
  `std_password` varchar(255) NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `Bank_number` varchar(100) NOT NULL,
  `Account_number` int(100) NOT NULL,
  `sort_code` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `std_img` varchar(255) NOT NULL DEFAULT 'a'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_student`
--

INSERT INTO `register_student` (`id`, `reg_number`, `std_password`, `faculty`, `department`, `year`, `surname`, `first_name`, `middle_name`, `gender`, `nationality`, `Bank_number`, `Account_number`, `sort_code`, `blood_group`, `phone_number`, `time`, `std_img`) VALUES
(21, 2016224049, '2016224049', 'Physical Science', 'Civil Engineering', '100', 'nzekwe', 'ik', 'an', 'Male', 'Nigerian', 'd', 0, '89', 'a', '080', '2018-05-17 15:50:34', 'Lighthouse.jpg'),
(22, 2016224022, '2016224022', 'Physical Science', 'Civil Engineering', '100', 'gggg', 'gggg', 'gggggg', 'Male', 'gggg', 'hhh', 77, '77', 'jj', '6666', '2018-05-15 22:35:17', 'Lighthouse.jpg'),
(23, 2015223666, '2015223666', 'Bioscience', 'Civil Engineering', '100', 'Ajala', 'Oluwafemi', 'Samuel', 'Male', 'Nigerian', 'Eco Bank', 88447744, '7464474888', 'A', '08162614369', '2018-05-17 21:26:17', '1278844_547649898618107_1102958878_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pin_activation`
--
ALTER TABLE `pin_activation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_student`
--
ALTER TABLE `register_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `pins`
--
ALTER TABLE `pins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `pin_activation`
--
ALTER TABLE `pin_activation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `register_student`
--
ALTER TABLE `register_student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
