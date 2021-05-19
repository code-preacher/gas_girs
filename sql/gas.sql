-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 01:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Victoria', 'a@a.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `chat` text NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `chat`, `date`) VALUES
(1, 'Dave', 'can i get  information about the close gas station in otukpo  ugbokolo road?', '24-03-21 @ 12:56 PM'),
(2, 'Admin', 'yes, aleji is the close gas station in otukpo ugbokolo road', '24-03-21 @ 1:11 PM'),
(4, 'Dave', 'i will like to visit edache oil station?', '24-03-21 @ 1:23 PM');

-- --------------------------------------------------------

--
-- Table structure for table `geodata`
--

CREATE TABLE `geodata` (
  `id` int(30) NOT NULL,
  `place` varchar(200) NOT NULL,
  `ff` varchar(200) NOT NULL,
  `ch` varchar(200) NOT NULL,
  `mq` varchar(200) NOT NULL,
  `mk` varchar(200) NOT NULL,
  `cl` varchar(200) NOT NULL,
  `sc` varchar(200) NOT NULL,
  `hs` varchar(200) NOT NULL,
  `sr` varchar(200) NOT NULL,
  `ht` varchar(200) NOT NULL,
  `hp` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geodata`
--

INSERT INTO `geodata` (`id`, `place`, `ff`, `ch`, `mq`, `mk`, `cl`, `sc`, `hs`, `sr`, `ht`, `hp`, `date`) VALUES
(1, 'forte', '5', '8', '3', '6', '4', '7', '9', '2', '3', '3', '24-03-21 @ 12:40 PM'),
(2, 'total', '1', '3', '2', '4', '2', '5', '7', '4', '3', '4', '24-03-21 @ 12:42 PM'),
(3, 'edache', '3', '5', '2', '3', '1', '4', '1', '3', '4', '2', '24-03-21 @ 1:06 PM'),
(4, 'meloch', '1', '3', '1', '2', '3', '5', '6', '2', '3', '6', '24-03-21 @ 1:07 PM'),
(5, 'aleji', '3', '5', '1', '3', '2', '4', '2', '1', '2', '2', '24-03-21 @ 1:07 PM');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `name`, `description`, `location`, `image`, `image2`, `latitude`, `longitude`) VALUES
(1, 'forte', 'Forte Gas Station.', 'Otukpo', 'forte.png', 'forte.jpg', 'Latitude 7.19\' 3.12\"N', 'Longitude 8.12\' 5.13\"E'),
(2, 'total', 'Total Gas Station.', 'Otukpo', 'total.png', 'total.jpg', 'Latitude 7.19\' 4.11\"N', 'Longitude 8.14\' 5.03\"E'),
(3, 'aleji', 'Aleji Gas Station.', 'Otukpo', 'aleji.png', 'aleji.jpg', 'Latitude 7.18\' 1.56\"N', 'Longitude 8.14\' 7.21\"E'),
(4, 'edache', 'Edache Gas Station.\r\n', 'Otukpo', 'edache.png', 'edache.jpg', 'Latitude 7.19\' 1.54\"N', 'Longitude 8.13\' 1.21\"E'),
(5, 'meloch', 'Meloch Gas Station.', 'Otukpo', 'meloch.png', 'meloch.jpg', 'Latitude 7.11\' 2.54\"N', 'Longitude 8.74\' 1.31\"E');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`, `date_created`) VALUES
(1, 'Dave', 'd@d.com', '123456', '08034251627', 'London,LA', '13-09-19 @ 12:41 AM'),
(2, 'jacob', 'j@j.com', '123456', '07068235544', 'behind deeper life bible church', '24-03-21 @ 1:34 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geodata`
--
ALTER TABLE `geodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geodata`
--
ALTER TABLE `geodata`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
