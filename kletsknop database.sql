-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2021 at 08:00 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kletsknop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buttonclicks`
--

CREATE TABLE `buttonclicks` (
  `clickId` int(11) NOT NULL,
  `clickTime` timestamp NULL DEFAULT NULL,
  `clickMessage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buttonclicks`
--

INSERT INTO `buttonclicks` (`clickId`, `clickTime`, `clickMessage`) VALUES
(1, '2021-11-08 07:16:15', 'Stoel 1, anoniem');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(3) NOT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `streetname` varchar(255) DEFAULT NULL,
  `postalcode` int(5) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `personDescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userPassword`, `firstname`, `surname`, `streetname`, `postalcode`, `hobbies`, `personDescription`) VALUES
(1, NULL, 'Test', 'Gebruiker', 'Rachelsmolen 1', 5612, 'Hobby 1', 'Lorem ipsum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buttonclicks`
--
ALTER TABLE `buttonclicks`
  ADD PRIMARY KEY (`clickId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buttonclicks`
--
ALTER TABLE `buttonclicks`
  MODIFY `clickId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
