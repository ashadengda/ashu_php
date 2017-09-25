-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2017 at 01:04 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(3) NOT NULL,
  `name` varchar(15) NOT NULL,
  `address` varchar(35) NOT NULL,
  `city` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `remark` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `name`, `address`, `city`, `contactno`, `emailid`, `image`, `remark`) VALUES
(22, 'shital', 'junagth', 'rajkot', '1223654799', 'deq@gmal.com', 'Hydrangeas.jpg', 'good'),
(20, 'aasdasda', 'urfgr', 'jetpur', '3258412345', 'a@stu.com', 'instagram.png', 'nice'),
(21, 'ashadengda', 'GEFRU', 'JEGE', '7894561330', 'as@gmail.com', '', 'very'),
(18, 'augfurfjwfwelfk', 'urfgr', 'rfgri', '32584', 'a@stu.com', '', 'nice'),
(19, 'fsdkljffwfwe', 'jkl', 'jkl', '9809809', 'dsjk@gmail.com', '', 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
