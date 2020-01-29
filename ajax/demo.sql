-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2020 at 12:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `phone`) VALUES
(1, 'aman', '343434'),
(2, 'harsh', '232424'),
(3, 'kjb', '888787');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `phone`) VALUES
(1, 'amandeep', '8735980694'),
(2, 'amandeep', '8735980694'),
(3, 'amandeep', '8735980694'),
(4, 'amandeep', '8735980694'),
(5, 'amandeep', '8735980694'),
(6, 'amandeep', '8735980694'),
(7, 'amandeep', '8735980694'),
(8, 'amandeep', '8735980694'),
(9, 'amandeep', '8735980694'),
(10, 'amandeep', '8735980694'),
(11, 'amandeep', '8735980694'),
(12, 'amandeep', '8735980694'),
(13, 'amandeep', '8735980694'),
(14, 'amandeep', '8735980694'),
(15, 'amandeep', '8735980694'),
(16, 'amandeep', '8735980694'),
(17, 'amandeep', '8735980694'),
(18, 'amandeep', '8735980694'),
(19, 'amandeep', '8735980694'),
(20, 'amandeep', '8735980694'),
(21, 'amandeep', '8735980694'),
(22, 'amandeep', '8735980694'),
(23, 'amandeep', '8735980694'),
(24, 'amandeep', '8735980694'),
(25, 'amandeep', '8735980694'),
(26, 'amandeep', '8735980694'),
(27, 'amandeep', '8735980694'),
(28, 'amandeep', '8735980694'),
(29, 'jaini', '8735980694'),
(30, 'amandeep', '8735980694'),
(31, 'amandeep', '8735980694'),
(32, 'rahul', '8735980694'),
(33, 'harsh', '8735980694'),
(34, 'amandeep', '8735980694'),
(35, 'rahul', '8735980694'),
(36, 'harsh', '8735980694'),
(37, 'romil', '00000000'),
(38, 'rahul', '8735980694'),
(39, 'harsh', '8735980694'),
(40, 'amandeep', '8735980694'),
(41, 'rahul', '8735980694'),
(42, 'harsh', '8735980694'),
(43, 'kishan', '8735980694'),
(44, 'rahul', '8735980694'),
(45, 'harsh', '8735980694'),
(46, 'mana', '9999'),
(47, 'mana', '9999'),
(48, 'mana', '9999'),
(49, 'mana', '9999'),
(50, 'mana', '9999'),
(51, 'mana', '9999'),
(52, 'amandeep', '8735980694'),
(53, 'rahul', '8735980694'),
(54, 'harsh', '8735980694');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
