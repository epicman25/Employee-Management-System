-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2021 at 07:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empms`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `uname`, `pword`) VALUES
(1, 'tejeshwar', '262'),
(2, 'bharath', '264'),
(3, 'aravind', '196');

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `dob` date NOT NULL,
  `phno` varchar(50) NOT NULL,
  `idno` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`id`, `fname`, `lname`, `email`, `dob`, `phno`, `idno`, `address`, `dept`, `salary`, `password`, `gender`, `degree`, `pic`) VALUES
(1, 'Tejeshwar', 'Reddy', 'tejeshwar_reddy@srmap.edu.in', '2002-07-25', '9491621236', 10262, 'nothing', 'CSE', '50000', '1234', 'Male', 'B Tech', ''),
(2, 'Jaya', 'Bharath', 'jayabharath@gmail.com', '2002-04-08', '9874561230', 10265, 'H.No-13,Mangalgiri', 'CSE', '50000', '1234', 'Male', 'B.Tech', ''),
(4, 'Aravind ', 'Bhaskar', 'aravindbhaskar@gmail.com', '2002-07-25', '9632587410', 10196, 'H.No-452,Nizampet', 'CSE', '89000', '1234', 'Male', 'B.Tech', '');

-- --------------------------------------------------------

--
-- Table structure for table `empleave`
--

CREATE TABLE `empleave` (
  `id` int(10) NOT NULL,
  `token` int(10) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleave`
--

INSERT INTO `empleave` (`id`, `token`, `start`, `end`, `reason`, `status`) VALUES
(1, 1, '2021-04-29', '2021-05-05', 'hello', 'Cancelled'),
(2, 2, '2021-04-29', '2021-05-10', 'Covid +ve', 'Approved'),
(4, 3, '2021-04-25', '2021-05-05', 'Covid -ve', 'Approved'),
(1, 4, '2021-04-30', '2021-06-30', 'Work pressure', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empleave`
--
ALTER TABLE `empleave`
  ADD PRIMARY KEY (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `empinfo`
--
ALTER TABLE `empinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `empleave`
--
ALTER TABLE `empleave`
  MODIFY `token` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
