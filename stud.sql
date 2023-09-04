-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 09:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback1`
--

CREATE TABLE `feedback1` (
  `sr` int(30) NOT NULL,
  `teacher` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback1`
--

INSERT INTO `feedback1` (`sr`, `teacher`, `question`, `answer`) VALUES
(1, 'M.S Karande', '1', 'Good'),
(2, 'M.S Karande', '2', 'Good'),
(3, 'M.S Karande', '3', 'Good'),
(4, 'M.S Karande', '4', 'Good'),
(5, 'M.S Karande', 'Feedback', 'hello'),
(6, 'D.D Pawar', '1', 'Good'),
(7, 'D.D Pawar', '2', 'Good'),
(8, 'D.D Pawar', '3', 'Good'),
(9, 'D.D Pawar', '4', 'Good'),
(10, 'D.D Pawar', 'Feedback', 'hello'),
(11, 'S.S Dhoot', '1', 'bad'),
(12, 'S.S Dhoot', '2', 'Average'),
(13, 'S.S Dhoot', '3', 'Good'),
(14, 'S.S Dhoot', '4', 'Good'),
(15, 'S.S Dhoot', 'Feedback', 'hello'),
(16, 'S.S Dhoot', '1', 'bad'),
(17, 'S.S Dhoot', '2', 'Average'),
(18, 'S.S Dhoot', '3', 'Good'),
(19, 'S.S Dhoot', '4', 'Good'),
(20, 'S.S Dhoot', 'Feedback', 'hello'),
(21, 'M.S Karande', '1', 'Good'),
(22, 'M.S Karande', '2', 'Good'),
(23, 'M.S Karande', '3', 'Good'),
(24, 'M.S Karande', '4', 'Good'),
(25, 'M.S Karande', 'Feedback', 'hello'),
(26, 'D.D Pawar', '1', 'Average'),
(27, 'D.D Pawar', '2', 'Average'),
(28, 'D.D Pawar', '3', 'Average'),
(29, 'D.D Pawar', '4', 'bad'),
(30, 'D.D Pawar', 'Feedback', 'hello'),
(31, 'S.S Dhoot', '1', 'bad'),
(32, 'S.S Dhoot', '2', 'Average'),
(33, 'S.S Dhoot', '3', 'Good'),
(34, 'S.S Dhoot', '4', 'bad'),
(35, 'S.S Dhoot', 'Feedback', 'hello'),
(36, 'M.S Karande', '1', 'Average'),
(37, 'M.S Karande', '2', 'Average'),
(38, 'M.S Karande', '3', 'Good'),
(39, 'M.S Karande', '4', 'Good'),
(40, 'M.S Karande', 'Feedback', 'hello'),
(41, 'D.D Pawar', '1', 'Average'),
(42, 'D.D Pawar', '2', 'Average'),
(43, 'D.D Pawar', '3', 'Average'),
(44, 'D.D Pawar', '4', 'Average'),
(45, 'D.D Pawar', 'Feedback', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(4) NOT NULL,
  `Attendance` float(100,2) NOT NULL,
  `feedback` int(1) NOT NULL,
  `staff1` int(1) NOT NULL,
  `staff2` int(1) NOT NULL,
  `staff3` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `class`, `Attendance`, `feedback`, `staff1`, `staff2`, `staff3`) VALUES
(1, 'sumesh', 'tyif', 80.99, 0, 0, 0, 0),
(2, 'Tanishq', 'tyif', 81.74, 0, 1, 1, 1),
(3, 'Aniket', 'tyif', 75.00, 0, 0, 0, 1),
(4, 'Shubham', 'tyif', 75.61, 0, 1, 1, 1),
(5, 'Omkar', 'tyif', 70.77, 0, 0, 0, 0),
(6, 'milind', 'tyif', 69.78, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback1`
--
ALTER TABLE `feedback1`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `sr` (`sr`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback1`
--
ALTER TABLE `feedback1`
  MODIFY `sr` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
