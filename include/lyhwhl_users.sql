-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2018 at 01:13 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veebiprogrammeerimine_janek`
--

-- --------------------------------------------------------

--
-- Table structure for table `lyhwhl_users`
--

CREATE TABLE `lyhwhl_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `groups` int(11) NOT NULL,
  `added` datetime NOT NULL,
  `edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lyhwhl_users`
--

INSERT INTO `lyhwhl_users` (`ID`, `username`, `password`, `groups`, `added`, `edited`, `status`) VALUES
(2, 'heli.kopter@kopter.ee', 'heli.kopter@kopter.ee', 99, '2018-09-13 11:51:05', '2018-09-27 14:49:26', 1),
(3, 'test@test.ee', 'tets', 99, '2018-09-21 20:25:20', '2018-09-21 20:25:20', 1),
(4, 'test@test.test', 'test', 99, '2018-09-27 14:39:32', '2018-09-27 14:39:32', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lyhwhl_users`
--
ALTER TABLE `lyhwhl_users`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lyhwhl_users`
--
ALTER TABLE `lyhwhl_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;