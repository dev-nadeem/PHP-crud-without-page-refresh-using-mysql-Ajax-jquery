-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 08:30 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `PersonId` int(10) UNSIGNED NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Department` varchar(55) NOT NULL,
  `Age` int(10) UNSIGNED NOT NULL,
  `Salary` int(11) NOT NULL,
  `RecordDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`PersonId`, `Name`, `Department`, `Age`, `Salary`, `RecordDate`) VALUES
(2, 'Shayam', 'Admin', 35, 45000, '2011-12-26 00:00:00'),
(3, 'Akshay', 'Sales', 42, 35000, '2011-12-28 00:00:00'),
(4, 'Irfan', 'IT', 45, 75000, '2011-12-27 00:00:00'),
(7, 'kamran', 'Development', 52, 54000, '2017-10-12 11:12:12'),
(10, 'Saif', 'Telecom', 44, 45000, '2017-10-12 11:12:47'),
(11, 'Salman', 'Marketing', 40, 65000, '2017-10-12 11:12:57'),
(14, 'Saif', 'Manufacturing', 44, 48000, '2017-10-12 11:13:20'),
(18, 'Ashwani', 'Admin', 35, 65000, '2017-10-15 22:45:24'),
(21, 'Abdul', 'Sales', 25, 36000, '2017-10-15 23:07:58'),
(22, 'Aamir', 'Telecom', 42, 42000, '2017-10-15 23:09:53'),
(23, 'Fareed', 'IT', 39, 62000, '2017-10-15 23:12:05'),
(24, 'Vivek', 'Marketing', 26, 35000, '2017-10-17 12:06:27'),
(26, 'Tariq', 'Sales', 22, 42000, '2017-10-17 12:10:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`PersonId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `PersonId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
