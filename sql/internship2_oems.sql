-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 11:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship2_oems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `email`, `password`) VALUES
(1, 'admin1', 'admin1'),
(2, 'admin2', 'admin2'),
(3, 'admin2', 'admin2'),
(4, 'admin6', 'admin6'),
(5, 'admin10', 'admin10');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announ_id` int(50) NOT NULL,
  `teacher_id` int(50) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announ_id`, `teacher_id`, `teacher_name`, `subject_name`, `subject_id`, `description`) VALUES
(100, 1, 'teacher1', 'sub1', 1, 'description1 description description'),
(103, 2, ' teachername2', ' teachername2', 0, ' teachername2 teachername2 teachername2'),
(104, 5, ' teachername5', ' teachername5', 0, ' teachername5 teachername5hhhhhws'),
(105, 10, ' admin10', ' sub1', 1, ' Announcement desp');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enroll_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `exam_id` int(50) NOT NULL,
  `price` int(11) NOT NULL,
  `pay` varchar(50) NOT NULL DEFAULT 'notpaid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(50) NOT NULL,
  `teacher_id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject_id` int(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `exam_created_on` varchar(50) NOT NULL,
  `exam_status` varchar(50) DEFAULT NULL,
  `total_questions` varchar(50) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `teacher_id`, `title`, `subject_id`, `duration`, `datetime`, `exam_created_on`, `exam_status`, `total_questions`, `price`) VALUES
(2, 1, ' exam 2', 1, '30', '2020-06-14T14:34', ' 2020/06/12 12:44:27', NULL, ' 2', 250),
(3, 1, ' exam 3', 1, ' 15', ' 2020-06-14T15:50', ' 2020/06/14 13:01:49', NULL, ' 2', 100),
(4, 1, ' exam 4', 1, ' 5', ' 2020-06-15T14:21', ' 2020/06/14 14:35:48', NULL, ' 2', 100);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(50) NOT NULL,
  `exam_id` int(50) NOT NULL,
  `question_title` varchar(500) NOT NULL,
  `ansopt1` varchar(500) NOT NULL,
  `ansopt2` varchar(500) NOT NULL,
  `ansopt3` varchar(500) NOT NULL,
  `ansopt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `exam_id`, `question_title`, `ansopt1`, `ansopt2`, `ansopt3`, `ansopt`) VALUES
(1, 2, 'Question 1', 'Option a.', 'Option b.', 'Option b.', 'Option a.'),
(2, 2, 'Question 2', 'Option a. Option a.', 'Question 2', ' Question 2 Option c.', 'Question 2'),
(4, 3, 'Question 1 description', 'Option a', 'Option b.', 'Option c.', 'Option c.'),
(5, 3, 'Question 2 description', 'Option a.', 'Option b.', 'Option c.', 'Option a.'),
(6, 4, 'What is full form of CPU', 'Central Processing Unit', 'wrong answer mentioned', 'something else', 'Central Processing Unit'),
(7, 4, 'coding question mentioned here', 'option here is correct', 'wrong option', 'something else', 'option here is correct');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(50) NOT NULL,
  `exam_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `marks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `exam_id`, `student_id`, `marks`) VALUES
(11, 2, 8, 2),
(12, 2, 8, 2),
(13, 2, 8, 1),
(14, 2, 8, 1),
(15, 3, 8, 0),
(16, 4, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `email`, `gender`, `address`, `mobile_number`, `user_id`) VALUES
('', ' ', ' ', ' ', ' ', ' ', 1),
('student1', 'student1', 'student1@gmail.com', ' Male', ' student1 student1', '9092325907', 2),
('student2@gmail.com', ' student2@gmail.com', ' student2@gmail.com', ' Male', ' student2@gmail.com student2@gmail.com ', ' 7537', 3),
('student2@gmail.com', ' ', ' student2@gmail.com', ' Male', ' student2@gmail.com student2@gmail.com ', ' 7537123456', 4),
('student2@gmail.com', ' student2@gmail.com', ' student2@gmail.com', ' Male', ' student2@gmail.com student2@gmail.com', ' 1234567890', 5),
('student2@gmail.com', ' student2@gmail.com', ' student2@gmail.com', ' Male', ' student2@gmail.com student2@gmail.com', ' 1234567890', 6),
('student10', ' student10', ' student10', ' Male', ' student10 address', ' 1234567890', 7),
('stud1', 'stud1', 'stud1', ' Male', ' stud1 address', ' 1234567890', 8);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `title`, `teacher_id`) VALUES
(1, 'subject1', 1),
(5, ' subject 5', 3),
(7, ' sub7', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `email`, `password`, `admin_id`) VALUES
(1, 'teachername2@gmail.com', 'teachername2@gmail.com', 1),
(4, 'teachername3@gmail.com', 'teachername3@gmail.com', 1),
(5, 'teachername5@gmail.com', 'teachername5@gmail.com', 1),
(6, 'teachername6@gmail.com', 'teachername6@gmail.com', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announ_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announ_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
