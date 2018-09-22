-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 12:33 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `result`
--
CREATE DATABASE IF NOT EXISTS `result` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `result`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UserName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `password`, `id`) VALUES
('mohammed', 'jukker', 1),
('mohit', 'aseri', 2),
('chinmay', 'joshi', 3),
('vijay', 'rajpurohit', 4);
-- --------------------------------------------------------

--
-- Table structure for table `obtained_marks`
--

CREATE TABLE IF NOT EXISTS `obtained_marks` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `RollNo` int(10) NOT NULL,
  `E_no` varchar(30) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Year` varchar(2) NOT NULL,
  `Semester` varchar(2) NOT NULL,
  `Course_No` varchar(30) NOT NULL DEFAULT 'UNIQUE',
  `Subject_Name` varchar(40) DEFAULT NULL,
  `Obtained_sem` int(2) DEFAULT NULL,
  `Obtained_mid` int(2) NOT NULL,
  `Total_Obtained_theory` int(2) DEFAULT NULL,
  `Obtained_practical` int(2) NOT NULL,
  `Subject_total` int(2) DEFAULT NULL,
  `Subject_grade_points` float DEFAULT NULL,
  `Subject_credit_points` float DEFAULT NULL,
  `Subject_status` char(4) DEFAULT NULL,
  PRIMARY KEY (`RollNo`,`E_no`,`Year`,`Semester`,`Course_No`),
  UNIQUE KEY `Sno` (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3052 ;

--
-- Dumping data for table `obtained_marks`
--

INSERT INTO `obtained_marks` (`Sno`, `RollNo`, `E_no`, `Name`, `Year`, `Semester`, `Course_No`, `Subject_Name`, `Obtained_sem`, `Obtained_mid`, `Total_Obtained_theory`, `Obtained_practical`, `Subject_total`, `Subject_grade_points`, `Subject_credit_points`, `Subject_status`) VALUES
(2951, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '1', 'BS100P', 'Engineering Physics', 34, 14, 48, 19, 67, 6.7, 20.1, 'pass'),
(2947, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '1', 'BS111', 'Mathematics - I', 56, 12, 68, 0, 68, 6.8, 20.4, 'pass'),
(2952, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '1', 'CE100', 'Engineering Mechanics', 21, 8, 29, 23, 52, 5.2, 15.6, 'pass'),
(2950, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '1', 'CE115', 'Engineering Drawing', 0, 17, 17, 62, 79, 7.9, 7.9, 'pass'),
(2953, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '1', 'EE100', 'Electrical Engg. - I', 31, 12, 43, 26, 69, 6.9, 27.6, 'pass'),
(2954, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '1', 'ENVS100', 'Environmental Studies', 26, 10, 36, 23, 59, 5.9, 17.7, 'pass'),
(2948, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '1', 'ME113', 'Mechanical Engg. - I', 37, 16, 53, 0, 53, 5.3, 15.9, 'pass'),
(2949, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '1', 'ME114', 'Workshop Practice', 0, 16, 16, 65, 81, 8.1, 8.1, 'pass'),
(2959, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '2', 'BS100C', 'Engineering Chemistry ', 24, 16, 40, 21, 61, 6.1, 18.3, 'pass'),
(2962, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '2', 'BS100E', 'English And Communication Skill', 45, 14, 59, 21, 80, 8, 16, 'pass'),
(2955, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '2', 'BS121', 'Mathematics - II', 38, 12, 50, 0, 50, 5, 15, 'pass'),
(2956, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '2', 'CE122', 'Civil Engineering', 24, 11, 35, 25, 60, 6, 12, 'pass'),
(2961, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '2', 'CS100', 'Computer programming', 34, 15, 49, 23, 72, 7.2, 28.8, 'pass'),
(2960, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '2', 'EC100', 'Electronics and Instrumentation', 19, 9, 28, 27, 55, 5.5, 22, 'pass'),
(2957, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '2', 'ME123', 'Machine Drawing - I', 0, 14, 14, 60, 74, 7.4, 7.4, 'pass'),
(2958, 2803, '2014/CTAE/115', 'Mohit Aseri', '1', '2', 'ME124', 'Workshop Technology', 22, 8, 30, 25, 55, 5.5, 16.5, 'pass'),
(2963, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '1', 'BS211', 'Mathematics III', 49, 19, 68, 0, 68, 6.8, 20.4, 'pass'),
(2964, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '1', 'CS211', 'Digital Systems & Design', 26, 14, 40, 21, 61, 6.1, 24.4, 'pass'),
(2965, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '1', 'CS212', 'Unix AndShell Programming Lab', 20, 8, 28, 23, 51, 5.1, 10.2, 'fpr'),
(2966, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '1', 'CS213', 'Object Oriented Programming with C++', 26, 19, 45, 26, 71, 7.1, 35.5, 'pass'),
(2967, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '1', 'CS214', NULL, 0, 17, 17, 67, 84, 8.4, NULL, NULL),
(2969, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '1', 'EC219', 'Analog Electronics', 52, 10, 62, 0, 62, 6.2, 18.6, 'fpr'),
(2968, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '1', 'EE212', 'Electrical Measurement and instruments', 37, 6, 43, 20, 63, 6.3, 25.2, 'pass'),
(2970, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '2', ' BS222', 'Discrete Mathematical structure', 68, 19, 87, 0, 87, 8.7, 26.1, 'pass'),
(2971, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '2', ' CS221', 'Computer Organization', 35, 11, 46, 20, 66, 6.6, 19.8, 'pass'),
(2972, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '2', 'CS222', 'Data Structure', 32, 10, 42, 0, 42, 4.2, 16.8, 'fpr'),
(2974, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '2', 'CS224', 'Microprocessors', 34, 11, 45, 20, 65, 6.5, 26, 'pass'),
(2975, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '2', 'CS225', 'System Software', 41, 16, 57, 0, 57, 5.7, 22.8, 'fpr'),
(2973, 2804, '2014/CTAE/115', 'Mohit Aseri', '2', '2', 'EC228', 'Communication Systems', 42, 10, 52, 20, 72, 7.2, 21.6, 'pass'),
(2976, 2805, '2014/CTAE/115', 'Mohit Aseri', '3', '1', 'CS311', 'Theory of Computation', 15, 9, 24, 0, 24, 2.4, 7.2, 'fth'),
(2977, 2805, '2014/CTAE/115', 'Mohit Aseri', '3', '1', 'CS312', 'Java Programming', 27, 11, 38, 20, 58, 5.8, 29, 'pass'),
(2978, 2805, '2014/CTAE/115', 'Mohit Aseri', '3', '1', 'CS313', 'Data Communication And Network', 20, 9, 29, 25, 54, 5.4, 21.6, 'pass'),
(2980, 2805, '2014/CTAE/115', 'Mohit Aseri', '3', '1', 'CS315', 'Database System', 29, 11, 40, 23, 63, 6.3, 25.2, 'pass'),
(2981, 2805, '2014/CTAE/115', 'Mohit Aseri', '3', '1', 'EC319', 'Pulse, Digital And Wave Shaping', 48, 10, 58, 0, 58, 5.8, 17.4, 'pass'),
(2979, 2805, '2014/CTAE/115', 'Mohit Aseri', '3', '1', 'ICS314', 'Computer Architecture', 36, 11, 47, 0, 47, 4.7, 14.1, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `RollNo` int(10) NOT NULL,
  `E_no` varchar(30) NOT NULL,
  `Year` varchar(2) NOT NULL,
  `Semester` varchar(2) NOT NULL,
  `Total_credit` int(4) DEFAULT NULL,
  `Total_credit_obtained` float DEFAULT NULL,
  `SGPA` float DEFAULT NULL,
  `OGPA` float DEFAULT NULL,
  `Final_STATUSofSEM` char(4) DEFAULT NULL,
  `No_ofBack` int(11) DEFAULT NULL,
  `Current_backlog` varchar(100) DEFAULT NULL,
  `Backlog_details` varchar(100) DEFAULT NULL,
  `year_back_status` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`RollNo`,`E_no`,`Year`,`Semester`),
  UNIQUE KEY `Sno` (`Sno`),
  KEY `Sno_2` (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=756 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Sno`, `RollNo`, `E_no`, `Year`, `Semester`, `Total_credit`, `Total_credit_obtained`, `SGPA`, `OGPA`, `Final_STATUSofSEM`, `No_ofBack`, `Current_backlog`, `Backlog_details`, `year_back_status`) VALUES
(736, 2803, '2014/CTAE/115', '1', '1', 21, 133.3, 6.34762, 6.34762, 'pass', 0, ' ', '  ', 'no'),
(737, 2803, '2014/CTAE/115', '1', '2', 22, 136, 6.18182, 6.26472, 'pass', 0, ' ', ' ', 'no'),
(738, 2804, '2014/CTAE/115', '2', '1', 21, 134.3, 6.39524, 6.30823, 'fail', 2, ' CS212,EC219,', '  CS212,EC219,', 'no'),
(739, 2804, '2014/CTAE/115', '2', '2', 21, 133.1, 6.3381, 6.31569, 'fail', 4, ' CS222,CS225,', ' CS212,EC219,CS222,CS225,', 'no'),
(740, 2805, '2014/CTAE/115', '3', '1', 22, 114.5, 5.20455, 6.11547, 'fail', 5, ' CS311,', ' CS212,EC219,CS222,CS225, CS311,', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `RollNo` int(10) NOT NULL,
  `E_no` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Fname` varchar(30) DEFAULT NULL,
  `Mname` varchar(30) DEFAULT NULL,
  `Year` varchar(2) NOT NULL,
  `Semester` varchar(2) NOT NULL,
  `Session` varchar(30) NOT NULL,
  `Department_name` varchar(40) NOT NULL,
  `College_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`RollNo`,`E_no`,`Name`,`Year`,`Semester`,`Session`,`Department_name`),
  UNIQUE KEY `Sno` (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=432 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sno`, `RollNo`, `E_no`, `Name`, `Fname`, `Mname`, `Year`, `Semester`, `Session`, `Department_name`, `College_name`) VALUES
(424, 2803, '2014/CTAE/115', 'Mohit Aseri', 'R.K. Aseri', 'Sarswati Aseri', '1', '1', '2014-2015', 'Computer Science', 'CTAE'),
(425, 2803, '2014/CTAE/115', 'Mohit Aseri', 'R.K. Aseri', 'Sarswati Aseri', '1', '2', '2014-2015', 'Computer Science', 'CTAE'),
(426, 2804, '2014/CTAE/115', 'Mohit Aseri', 'R.K. Aseri', 'Sarswati Aseri', '2', '1', '2015-2016', 'Computer Science', 'CTAE'),
(427, 2804, '2014/CTAE/115', 'Mohit Aseri', 'R.K. Aseri', 'Sarswati Aseri', '2', '2', '2015-2016', 'Computer Science', 'CTAE'),
(428, 2805, '2014/CTAE/115', 'Mohit Aseri', 'R.K. Aseri', 'Sarswati Aseri', '3', '1', '2016-2017', 'Computer Science', 'CTAE'),
(429, 2805, '2014/CTAE/115', 'Mohit Aseri', 'R.K. Aseri', 'Sarswati Aseri', '3', '2', '2016-2017', 'Computer Science', 'CTAE'),
(430, 2806, '2014/CTAE/115', 'Mohit Aseri', 'R.K. Aseri', 'Sarswati Aseri', '4', '1', '2017-2018', 'Computer Science', 'CTAE'),
(431, 2806, '2014/CTAE/115', 'Mohit Aseri', 'R.K. Aseri', 'Sarswati Aseri', '4', '2', '2017-2018', 'Computer Science', 'CTAE');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Subject_Name` varchar(40) NOT NULL DEFAULT 'UNIQUE',
  `Year` varchar(2) NOT NULL,
  `Semester` varchar(2) NOT NULL,
  `Credit_theory` int(2) NOT NULL,
  `Credit_practical` int(2) NOT NULL,
  `Course_No` varchar(30) NOT NULL,
  `Max_th` int(2) DEFAULT NULL,
  `Max_mid` int(2) DEFAULT NULL,
  `Max_pr` int(2) DEFAULT NULL,
  `Total_cr` int(2) DEFAULT NULL,
  `Max_marks` int(3) NOT NULL,
  `Passing_th` int(2) DEFAULT NULL,
  `Passing_pr` int(2) DEFAULT NULL,
  PRIMARY KEY (`Subject_Name`,`Year`,`Semester`,`Course_No`),
  UNIQUE KEY `Course_no` (`Course_No`),
  UNIQUE KEY `Sno` (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1099 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Sno`, `Subject_Name`, `Year`, `Semester`, `Credit_theory`, `Credit_practical`, `Course_No`, `Max_th`, `Max_mid`, `Max_pr`, `Total_cr`, `Max_marks`, `Passing_th`, `Passing_pr`) VALUES
(1088, 'Advanced Database System', '4', '1', 3, 0, 'CS412', 80, 20, 0, 3, 100, 40, 0),
(1068, 'Analog Electronics', '2', '1', 2, 1, 'EC219', 50, 20, 30, 3, 100, 28, 12),
(1055, 'Civil Engineering', '1', '2', 1, 1, 'CE122', 50, 20, 30, 2, 100, 28, 12),
(1072, 'Communication Systems', '2', '2', 3, 0, 'EC228', 80, 20, 0, 3, 100, 40, 0),
(1078, 'Computer Architecture', '3', '1', 3, 0, 'ICS314', 80, 20, 0, 3, 100, 40, 0),
(1070, 'Computer Organization', '2', '2', 3, 0, ' CS221', 80, 20, 0, 3, 100, 40, 0),
(1060, 'Computer programming', '1', '2', 3, 1, 'CS100', 50, 20, 30, 4, 100, 28, 12),
(1084, 'Comuter Networks', '3', '2', 3, 1, 'CS324', 50, 20, 30, 4, 100, 28, 12),
(1077, 'Data Communication And Network', '3', '1', 3, 1, 'CS313', 50, 20, 30, 4, 100, 28, 12),
(1071, 'Data Structure', '2', '2', 3, 1, 'CS222', 50, 20, 30, 4, 100, 28, 12),
(1079, 'Database System', '3', '1', 3, 1, 'CS315', 50, 20, 30, 4, 100, 28, 12),
(1083, 'Design And Analysis of Algorithms', '3', '2', 3, 0, 'CS323', 80, 20, 0, 3, 100, 40, 0),
(1063, 'Digital Systems & Design', '2', '1', 3, 1, 'CS211', 50, 20, 30, 4, 100, 28, 12),
(1069, 'Discrete Mathematical structure', '2', '2', 3, 0, ' BS222', 80, 20, 0, 3, 100, 40, 0),
(1089, 'Distributed System', '4', '1', 3, 1, 'CS413', 50, 20, 30, 4, 100, 28, 12),
(1090, 'Elective-I', '4', '1', 3, 1, 'CS414', 50, 20, 30, 4, 100, 28, 12),
(1091, 'Elective-II', '4', '1', 3, 1, 'CS415', 50, 20, 30, 4, 100, 28, 12),
(1094, 'Elective-III', '4', '2', 3, 1, 'CS423', 50, 20, 30, 4, 100, 28, 12),
(1095, 'Elective-IV', '4', '2', 3, 1, 'CS424', 50, 20, 30, 4, 100, 28, 12),
(1052, 'Electrical Engg. - I', '1', '1', 3, 1, 'EE100', 50, 20, 30, 4, 100, 28, 12),
(1067, 'Electrical Measurement and instruments', '2', '1', 3, 1, 'EE212', 50, 20, 30, 4, 100, 28, 12),
(1059, 'Electronics and Instrumentation', '1', '2', 3, 1, 'EC100', 50, 20, 30, 4, 100, 28, 12),
(1058, 'Engineering Chemistry ', '1', '2', 2, 1, 'BS100C', 50, 20, 30, 3, 100, 28, 12),
(1049, 'Engineering Drawing', '1', '1', 0, 1, 'CE115', 0, 20, 80, 1, 100, 8, 32),
(1051, 'Engineering Mechanics', '1', '1', 2, 1, 'CE100', 50, 20, 30, 3, 100, 28, 12),
(1050, 'Engineering Physics', '1', '1', 2, 1, 'BS100P', 50, 20, 30, 3, 100, 28, 12),
(1061, 'English And Communication Skill', '1', '2', 1, 1, 'BS100E', 50, 20, 30, 2, 100, 28, 12),
(1053, 'Environmental Studies', '1', '1', 2, 1, 'ENVS100', 50, 20, 30, 3, 100, 28, 12),
(1076, 'Java Programming', '3', '1', 3, 2, 'CS312', 50, 20, 30, 5, 100, 28, 12),
(1056, 'Machine Drawing - I', '1', '2', 0, 1, 'ME123', 0, 20, 80, 1, 100, 8, 32),
(1046, 'Mathematics - I', '1', '1', 3, 0, 'BS111', 80, 20, 0, 3, 100, 40, 0),
(1054, 'Mathematics - II', '1', '2', 3, 0, 'BS121', 80, 20, 0, 3, 100, 40, 0),
(1062, 'Mathematics III', '2', '1', 3, 0, 'BS211', 80, 20, 0, 3, 100, 40, 0),
(1047, 'Mechanical Engg. - I', '1', '1', 3, 0, 'ME113', 80, 20, 0, 3, 100, 40, 0),
(1073, 'Microprocessors', '2', '2', 3, 1, 'CS224', 50, 20, 30, 4, 100, 28, 12),
(1082, 'Microprocessors, Interfaceing And Applic', '3', '2', 3, 1, 'CS322', 50, 20, 30, 4, 100, 28, 12),
(1087, 'Mobile Computing', '4', '1', 3, 1, 'CS411', 50, 20, 30, 4, 100, 28, 12),
(1092, 'Multimedia System', '4', '2', 3, 1, 'CS421', 50, 20, 30, 4, 100, 28, 12),
(1093, 'Network Programming', '4', '2', 0, 2, 'CS422', 0, 20, 80, 2, 100, 8, 32),
(1065, 'Object Oriented Programming with C++', '2', '1', 3, 2, 'CS213', 50, 20, 30, 5, 100, 28, 12),
(1085, 'Operating System', '3', '2', 3, 1, 'CS325', 50, 20, 30, 4, 100, 28, 12),
(1097, 'Practical Training & industrial Visit', '4', '2', 0, 4, 'CS426', 0, 20, 80, 4, 100, 8, 32),
(1081, 'Principals of Compiler Design', '3', '2', 3, 1, 'CS321', 50, 20, 30, 4, 100, 28, 12),
(1066, 'principals of Programming languages', '2', '1', 3, 0, ' CS214', 80, 20, 0, 3, 100, 40, 0),
(1096, 'Project', '4', '2', 0, 8, 'CS425', 0, 20, 80, 8, 100, 8, 32),
(1080, 'Pulse, Digital And Wave Shaping', '3', '1', 3, 0, 'EC319', 80, 20, 0, 3, 100, 40, 0),
(1098, 'Seminar', '4', '2', 0, 2, 'CS427', 0, 20, 80, 2, 100, 8, 32),
(1086, 'Software Engineering', '3', '2', 3, 1, 'CS326', 50, 20, 30, 4, 100, 28, 12),
(1074, 'System Software', '2', '2', 3, 1, 'CS225', 50, 20, 30, 4, 100, 28, 12),
(1075, 'Theory of Computation', '3', '1', 3, 0, 'CS311', 80, 20, 0, 3, 100, 40, 0),
(1064, 'Unix AndShell Programming Lab', '2', '1', 0, 2, 'CS212', 0, 20, 80, 2, 100, 8, 32),
(1048, 'Workshop Practice', '1', '1', 0, 1, 'ME114', 0, 20, 80, 1, 100, 8, 32),
(1057, 'Workshop Technology', '1', '2', 2, 1, 'ME124', 50, 20, 30, 3, 100, 28, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
