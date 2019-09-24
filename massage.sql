-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2019 at 06:21 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `massage`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(11) NOT NULL,
  `st` varchar(255) NOT NULL,
  `et` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user` varchar(11) NOT NULL,
  `effective` varchar(255) NOT NULL DEFAULT '1',
  `fee` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `st`, `et`, `message`, `user`, `effective`, `fee`) VALUES
(19, '1569041220', '1569044820', '123123', '1', '1', '0'),
(18, '1569350220', '1569353820', '13', '1', '1', '0'),
(16, '1568671200', '1568674800', '123', '1', '0', '0'),
(17, '1568659020', '1568662620', '123', '1', '0', '1'),
(20, '1569509700', '1569513300', '1111', '7', '0', '0'),
(21, '1568991780', '1568995380', 'Sports massage', '9', '1', '0'),
(22, '1569696660', '1569700260', 'I feel so tired', '10', '1', '0'),
(25, '1569766320', '1569769920', 'need massage', '12', '0', '0'),
(24, '1569757380', '1569760980', 'I need sports massage', '11', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT '1',
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`, `role`, `phone`, `email`, `name`) VALUES
(1, '123', '123', '1', NULL, '123', '123'),
(12, 'Connor199', '123', '1', NULL, '714135061@qq.com', 'ConnorLi'),
(8, 'C111', 'fy820927', '1', NULL, 'li714135061@gmail.com', 'C123'),
(9, 'C11211', '123123', '1', NULL, 'li714135061@gmail.com', 'C123123'),
(10, 'VVv', '123123', '1', NULL, 'li714135061@gmail.com', 'Ca11'),
(11, 'JackS', '123123', '1', NULL, '547374664@qq.com', 'Jackson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
