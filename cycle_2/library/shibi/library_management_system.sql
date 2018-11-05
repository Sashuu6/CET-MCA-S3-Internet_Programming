-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 03:58 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `book_id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `avilable` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`book_id`, `name`, `author`, `content`, `category`, `avilable`) VALUES
('B0001', 'Once upon a time', 'Shibin sidharth', 'Sooooper', 'biography', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issued_book`
--

CREATE TABLE `issued_book` (
  `bk_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stdnt_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Issue_dt` date NOT NULL,
  `Rnw_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `issued_book`
--

INSERT INTO `issued_book` (`bk_id`, `stdnt_id`, `Issue_dt`, `Rnw_dt`) VALUES
('EL105', 'EL1657', '2017-02-10', '2017-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(6) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pswd` varchar(10) NOT NULL,
  `type` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pswd`, `type`) VALUES
('F001', 'njan', 'njan', 'admin'),
('F002', 'sidharth', 'sid123', 'admin'),
('M1749', 'sid', 'sidiskid', 'user'),
('S1749', 'shibin', 'shibi123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `std_details`
--

CREATE TABLE `std_details` (
  `std_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `std_name` text COLLATE utf8_unicode_ci NOT NULL,
  `course` text COLLATE utf8_unicode_ci NOT NULL,
  `sem` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `no_book` varchar(6) COLLATE utf8_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `std_details`
--

INSERT INTO `std_details` (`std_id`, `std_name`, `course`, `sem`, `no_book`) VALUES
('M1749', 'Shibin sidharth', 'MCA', 'S3', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `issued_book`
--
ALTER TABLE `issued_book`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_details`
--
ALTER TABLE `std_details`
  ADD PRIMARY KEY (`std_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
