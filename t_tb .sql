-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2017 at 02:41 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_tb`
--

CREATE TABLE `t_tb` (
  `id` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `credit` varchar(20) DEFAULT NULL,
  `semister` varchar(20) DEFAULT NULL,
  `cgpa` varchar(20) DEFAULT NULL,
  `program` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tb`
--

INSERT INTO `t_tb` (`id`, `name`, `credit`, `semister`, `cgpa`, `program`) VALUES
(1, 'roni', '13', '9', '3.56', 'cse'),
(2, 'imam', '2', '5', '3', 'bba'),
(25, 'kabir', '4', '4', '4', 'kjj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_tb`
--
ALTER TABLE `t_tb`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
