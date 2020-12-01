-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2020 at 07:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offums`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'code.lpu1@gmail.com', 'Test@1234', '2016-04-04 20:31:45', '2016-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `Ad_date` date NOT NULL,
  `adm_id` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(10) DEFAULT NULL,
  `phno` bigint(10) NOT NULL,
  `Email` varchar(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Dept` varchar(11) NOT NULL,
  `H_S` varchar(11) NOT NULL,
  `Fathers_Name` varchar(20) NOT NULL,
  `Mathers_Name` varchar(20) NOT NULL,
  `f_phno` bigint(11) NOT NULL,
  `f_occ` varchar(15) NOT NULL,
  `Community` varchar(10) NOT NULL,
  `Caste` varchar(10) NOT NULL,
  `Section` varchar(5) NOT NULL,
  `Res_add` text NOT NULL,
  `s_photo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `id` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `present` int(5) NOT NULL,
  `absent` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attend`
--

INSERT INTO `attend` (`id`, `total`, `present`, `absent`) VALUES
(1, 20, 15, 5),
(2, 13, 12, 1),
(3, 12, 10, 2),
(4, 13, 10, 3),
(5, 13, 10, 3),
(6, 30, 23, 7),
(7, 30, 23, 7),
(8, 68, 52, 16),
(9, 98, 67, 31),
(10, 78, 67, 11),
(11, 78, 67, 11),
(12, 79, 63, 16),
(13, 77, 65, 12),
(14, 34, 36, -2),
(15, 34, 36, -2),
(16, 67, 43, 24),
(17, 68, 64, 4),
(18, 68, 64, 4),
(19, 68, 64, 4),
(20, 68, 64, 4),
(21, 62, 57, 5),
(22, 62, 57, 5),
(23, 62, 57, 5),
(24, 62, 57, 5),
(25, 62, 57, 5),
(26, 62, 57, 5),
(27, 62, 57, 5),
(28, 62, 57, 5),
(29, 57, 54, 3),
(30, 57, 54, 3),
(31, 57, 54, 3),
(32, 57, 54, 3),
(33, 57, 54, 3),
(34, 57, 54, 3),
(35, 57, 54, 3),
(36, 57, 54, 3),
(37, 67, 64, 3),
(38, 67, 64, 3),
(39, 34, 25, 9),
(40, 34, 25, 9),
(41, 34, 23, 11),
(42, 34, 23, 11),
(43, 35, 26, 9),
(44, 35, 26, 9),
(45, 34, 23, 11),
(46, 34, 23, 11),
(47, 34, 23, 11),
(48, 30, 26, 4),
(49, 30, 26, 4),
(50, 30, 26, 4),
(51, 34, 45, -11),
(52, 34, 45, -11),
(53, 34, 45, -11),
(54, 34, 25, 9),
(55, 34, 25, 9),
(56, 34, 25, 9),
(57, 38, 21, 17),
(58, 38, 21, 17),
(59, 38, 21, 17),
(60, 75, 56, 19),
(61, 75, 56, 19),
(62, 75, 56, 19),
(63, 34, 24, 10),
(64, 34, 24, 10),
(65, 34, 24, 10),
(66, 35, 22, 13),
(67, 35, 22, 13),
(68, 35, 22, 13),
(69, 25, 22, 3),
(70, 25, 22, 3),
(71, 25, 22, 3),
(72, 23, 20, 3),
(73, 23, 20, 3),
(74, 28, 20, 8),
(75, 28, 20, 8),
(76, 23, 11, 12),
(77, 23, 11, 12),
(78, 23, 11, 12),
(79, 23, 11, 12),
(80, 23, 11, 12),
(81, 23, 11, 12),
(82, 23, 11, 12),
(83, 23, 11, 12),
(84, 23, 11, 12),
(85, 23, 11, 12),
(86, 14, 17, -3),
(87, 14, 17, -3),
(88, 14, 17, -3),
(89, 29, 17, 12),
(90, 29, 17, 12),
(91, 29, 17, 12),
(92, 29, 18, 11),
(93, 29, 18, 11),
(94, 29, 18, 11),
(95, 29, 18, 11),
(96, 29, 18, 11),
(97, 29, 18, 11),
(98, 29, 18, 11),
(99, 29, 18, 11),
(100, 29, 18, 11),
(101, 29, 18, 11),
(102, 29, 18, 11),
(103, 29, 18, 11),
(104, 29, 18, 11),
(105, 29, 18, 11),
(106, 29, 18, 11),
(107, 29, 18, 11),
(108, 29, 18, 11),
(109, 29, 18, 11),
(110, 98, 78, 20),
(111, 98, 78, 20),
(112, 98, 78, 20),
(113, 98, 78, 20),
(114, 98, 78, 20),
(115, 98, 78, 20),
(116, 98, 78, 20),
(117, 98, 78, 20),
(118, 98, 78, 20),
(119, 98, 78, 20),
(120, 98, 78, 20),
(121, 98, 78, 20),
(122, 94, 79, 15),
(123, 94, 79, 15),
(124, 94, 78, 16),
(125, 94, 78, 16),
(126, 94, 77, 17),
(127, 94, 77, 17),
(128, 89, 76, 13),
(129, 89, 76, 13),
(130, 89, 75, 14),
(131, 89, 75, 14);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(5) NOT NULL,
  `area_id` int(5) NOT NULL,
  `area` varchar(15) NOT NULL,
  `bus_no` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `area_id`, `area`, `bus_no`) VALUES
(1, 1, 'Perambalur', 'B1'),
(2, 2, 'Trichy', 'B2'),
(3, 2, 'Trichy', 'B3'),
(5, 3, 'Ariyalur', 'B5');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(1, '', '', 1),
(2, '', '', 1),
(3, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'B10992', 'B.Tech', 'Bachelor  of Technology', '2016-04-11 19:31:42'),
(2, 'BCOM1453', 'B.Com', 'Bachelor Of commerce ', '2016-04-11 19:32:46'),
(3, 'BSC12', 'BSC', 'Bachelor  of Science', '2016-04-11 19:33:23'),
(4, 'BC36356', 'BCA', 'Bachelor Of Computer Application', '2016-04-11 19:34:18'),
(5, 'MCA565', 'MCA', 'Master of Computer Application', '2016-04-11 19:34:40'),
(6, 'MBA75', 'MBA', 'Master of Business Administration', '2016-04-11 19:34:59'),
(7, 'BE765', 'BE', 'Bachelor of Engineering', '2016-04-11 19:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `daysscholar`
--

CREATE TABLE `daysscholar` (
  `day_scholar_id` int(5) NOT NULL,
  `area` varchar(15) NOT NULL,
  `busno` varchar(15) NOT NULL,
  `coordinator_no` int(15) NOT NULL,
  `coordinator_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daysscholar`
--

INSERT INTO `daysscholar` (`day_scholar_id`, `area`, `busno`, `coordinator_no`, `coordinator_name`) VALUES
(1, 'Mathur', 'B1', 987654326, 'Mukesh');

-- --------------------------------------------------------

--
-- Table structure for table `deptartment`
--

CREATE TABLE `deptartment` (
  `d_id` int(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `dept_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `n_id` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`n_id`, `message`, `status`) VALUES
(1, 'hello everyone', 'unread'),
(2, 'jkgjfgsdsgf', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `foodstatus` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(6, 100, 5, 8000, 0, '2016-04-22', 5, 'Bachelor  of Technology', 10806121, 'code', '', 'projects', 'male', 8285703354, 'code.lpu1@gmail.com', 0, 'XYZ', 'Mother', 8285703354, 'H n0 18/1 Bihari Puram Phase-1 Melrose Bye Pass', 'Aligarh', 'EPE', 202001, 'H n0 18/1 Bihari Puram Phase-1 Melrose Bye Pass', 'Aligarh', 'EPE', 202001, '2016-04-16 08:24:09', ''),
(7, 100, 5, 8000, 1, '2016-06-17', 4, 'Bachelor of Engineering', 108061211, 'code', 'test', 'projects', 'male', 8467067344, 'test@gmail.com', 8285703354, 'test', 'test', 9999857868, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, '2016-06-23 11:54:35', ''),
(8, 112, 3, 4000, 0, '2016-06-27', 5, 'Bachelor  of Science', 102355, 'Harry', 'projects', 'Singh', 'male', 6786786786, 'Harry@gmail.com', 789632587, 'demo', 'demo', 1234567890, 'New Delhi', 'Delhi', 'Delhi (NCT)', 110001, 'New Delhi', 'Delhi', 'Delhi (NCT)', 110001, '2016-06-26 16:31:08', ''),
(9, 132, 5, 2000, 1, '2016-06-28', 6, 'Bachelor of Engineering', 586952, 'Benjamin', '', 'projects', 'male', 8596185625, 'Benjamin@gmail.com', 8285703354, 'demo', 'demo', 8285703354, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, '2016-06-26 16:40:07', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(1, 5, 100, 8000, '2016-04-11 22:45:43'),
(2, 2, 201, 6000, '2016-04-12 01:30:47'),
(3, 2, 200, 6000, '2016-04-12 01:30:58'),
(4, 3, 112, 4000, '2016-04-12 01:31:07'),
(5, 5, 132, 2000, '2016-04-12 01:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'EPE'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(5) NOT NULL,
  `s_Name` varchar(20) NOT NULL,
  `s_Rollno` bigint(15) NOT NULL,
  `s_DOB` date NOT NULL,
  `total_fees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `s_Name`, `s_Rollno`, `s_DOB`, `total_fees`) VALUES
(1, 'Dhanapriya K', 821011, '1999-05-25', 10000),
(2, 'Mukii S', 821012, '1998-12-25', 20000),
(11, 'Manisha', 812013, '2020-07-05', 0),
(12, 'jeni', 812025, '2020-07-24', 0),
(13, 'umaisa', 812025, '2020-07-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `s_id` int(5) NOT NULL,
  `Rollno` varchar(20) NOT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `P_S` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `S_photo` text DEFAULT NULL,
  `Dept` varchar(10) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `total_fees` int(10) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`s_id`, `Rollno`, `First_Name`, `Last_Name`, `Email`, `P_S`, `Password`, `S_photo`, `Dept`, `Year`, `total_fees`, `dept_id`) VALUES
(1, '812016104011', 'Dhanapriya', 'K', 'yaspriya@gmail.com', 'Student', '12345', NULL, 'CSE', '4th', 10000, 103),
(4, '812016104012', 'priya', 'M', 'priya25@gmail.com', 'Student', 'c37bf859faf392800d739a41fe5af151', NULL, 'CSE', '3rd', 20000, 103),
(6, '812016104013', 'Manisha', 'M', 'maniju@gmail.com', 'Student', '86109d400f0ed29e840b47ed72777c84', NULL, 'IT', '3rd', 8000, 104),
(11, '812016104015', 'Mukesh', 'S', 'mukii@gmail.com', 'Student', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 'CSE', '3rd', 5000, 103),
(12, '812016104019', 'Dharmaraj', 'K', 'dharma@gmail.com', 'Student', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 'CSE', '3rd', 10000, 103),
(13, '812016104020', 'bharathi', 'K', 'jb@gmail.com', 'Student', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 'CSE', '2rd', 0, 0),
(14, '812016104023', 'Bala', 'U', 'bala@gmail.com', 'Student', '098f6bcd4621d373cade4e832627b4f6', NULL, 'CSE', '1st', 15000, 0),
(15, '812016104039', 'priya', 'm', 'priya1@gmail.com', 'Student', '0b1c8bc395a9588a79cd3c191c22a6b4', NULL, 'CSE', '3rd', 0, 103),
(17, '812016104014', 'Santhosh', '', 'santhosh@gmail.com', '', '', NULL, 'ECE', '3rd', 0, 0),
(18, '812016104020', 'raffi', 'M', 'sara@gmail.com', 'Student', '5bd537fc3789b5482e4936968f0fde95', NULL, 'IT', '4th', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `take_attendance`
--

CREATE TABLE `take_attendance` (
  `at_id` int(11) NOT NULL,
  `s_id` int(20) NOT NULL,
  `value` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `Dept` varchar(10) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `take_attendance`
--

INSERT INTO `take_attendance` (`at_id`, `s_id`, `value`, `date`, `Dept`, `Year`) VALUES
(99, 1, 'Present', '11-07-20', '', ''),
(100, 4, 'Absent', '11-07-20', '', ''),
(101, 6, 'Present', '11-07-20', '', ''),
(102, 11, 'Present', '11-07-20', '', ''),
(103, 12, 'Present', '11-07-20', '', ''),
(104, 13, 'Present', '11-07-20', '', ''),
(105, 14, 'Present', '11-07-20', '', ''),
(106, 15, 'Present', '11-07-20', '', ''),
(107, 17, 'Present', '11-07-20', '', ''),
(108, 18, 'Present', '11-07-20', '', ''),
(2252, 1, 'Present', '14-07-20', '', ''),
(2253, 4, 'Present', '14-07-20', '', ''),
(2254, 6, 'Absent', '14-07-20', '', ''),
(2255, 11, 'Present', '14-07-20', '', ''),
(2256, 12, 'Present', '14-07-20', '', ''),
(2257, 13, 'Absent', '14-07-20', '', ''),
(2258, 14, 'Present', '14-07-20', '', ''),
(2259, 15, 'Absent', '14-07-20', '', ''),
(2260, 17, 'Present', '14-07-20', '', ''),
(2261, 18, 'Present', '14-07-20', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password1` varchar(40) NOT NULL,
  `idcard` varchar(15) NOT NULL,
  `PS` varchar(15) NOT NULL,
  `dept` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `email`, `password1`, `idcard`, `PS`, `dept`) VALUES
(1, 'Test', 'Testing@tesing.', 'Testing', 'yui', 'Professor', 'CSE'),
(2, '', 'yaspriya958@gma', '1234', '12345', '', 'CSE'),
(4, 'Priya', 'ashdma@gmail.co', '09876', '8765', '', 'IT'),
(5, 'Vel', 'vel@gmail.com', '4545', 'jfhj8', '', 'CSE'),
(6, 'dharma', 'dharma@gmail.co', 'lkjg', 'lkjhg', '', 'CSE'),
(7, 'poiuy', 'oiuy@gmail.com', '12345', '8765', '', 'IT'),
(8, 'ammu', 'ammu@gmail.com', '6785', '7yr7', '', 'IT'),
(10, 'mukii', 'muki@gmail.com', '1234', '7635', 'Student', 'CSE'),
(11, 'bharu', 'bharu@gmail.com', 'lkjh', 'ksjhjk', 'Professor', 'CSE'),
(12, 'pk', '      nbmn', 'c56e52594d4ebe7', '', 'Professor', 'CSE'),
(13, 'bk', 'bk@gmail.com', '6704ac205d61fee', 'bk67', 'Professor', 'CSE'),
(15, 'bk1', 'bk1@gmail.com', '8aa903e40952a84', 'bk67', 'Professor', 'CSE'),
(16, 'priyama', 'priya@gmail.com', '9407c826d8e3c07', 'DP25', 'Student', 'IT'),
(17, 'Priya1', 'priya1@gmail.co', '9407c826d8e3c07', 'dp25', 'Student', 'CSE'),
(18, 'dhanapriya', 'dhanapriya@gmai', '81dc9bdb52d04dc', '8765', 'Professor', 'CSE'),
(19, 'mani', 'mani@gmail.com', '533bd7b1a57f4239feb2a0d4ec30bd3c', 'CSE23', 'Student', 'CSE'),
(20, 'poorni', 'poorni@gmail.co', '827ccb0eea8a706c4c34a16891f84e7b', '8765', 'Student', 'CSE'),
(21, 'kjk', 'smdaj@jkshdj.co', '81dc9bdb52d04dc20036dbd8313ed055', '9876', 'Student', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 11:20:28'),
(4, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-24 11:22:47'),
(5, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-26 15:37:40'),
(6, 20, 'Benjamin@gmail.com', 0x3a3a31, '', '', '2016-06-26 16:40:57'),
(7, 21, 'yaspriya958@gmail.com', 0x3a3a31, '', '', '2020-07-10 09:00:04'),
(8, 21, 'yaspriya958@gmail.com', 0x3a3a31, '', '', '2020-07-10 09:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(10, '108061211', 'code', 'test', 'projects', 'male', 8467067344, 'test@gmail.com', 'Test@123', '2016-06-22 04:21:33', '23-06-2016 11:04:15', '22-06-2016 05:16:49'),
(19, '102355', 'Harry', 'projects', 'Singh', 'male', 6786786786, 'Harry@gmail.com', '6786786786', '2016-06-26 16:33:36', '', ''),
(20, '586952', 'Benjamin', '', 'projects', 'male', 8596185625, 'Benjamin@gmail.com', '8596185625', '2016-06-26 16:40:07', '', ''),
(21, '879758', 'dhanapriya', '', 'K', 'female', 9790586716, 'yaspriya958@gmail.com', 'priya', '2020-07-10 08:59:35', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`adm_id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `f_phno` (`f_phno`),
  ADD UNIQUE KEY `phno` (`phno`);

--
-- Indexes for table `attend`
--
ALTER TABLE `attend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daysscholar`
--
ALTER TABLE `daysscholar`
  ADD PRIMARY KEY (`day_scholar_id`);

--
-- Indexes for table `deptartment`
--
ALTER TABLE `deptartment`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `dept_code` (`dept_code`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`s_id`,`Rollno`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `take_attendance`
--
ALTER TABLE `take_attendance`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attend`
--
ALTER TABLE `attend`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daysscholar`
--
ALTER TABLE `daysscholar`
  MODIFY `day_scholar_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deptartment`
--
ALTER TABLE `deptartment`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `take_attendance`
--
ALTER TABLE `take_attendance`
  MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2262;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
