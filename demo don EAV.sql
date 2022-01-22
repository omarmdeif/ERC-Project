-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 07:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `dmethodoptions`
--

CREATE TABLE `dmethodoptions` (
  `Id` int(11) NOT NULL,
  `DmethodID` int(11) NOT NULL,
  `OptionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donationmethod`
--

CREATE TABLE `donationmethod` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationmethod`
--

INSERT INTO `donationmethod` (`Id`, `Name`) VALUES
(1, 'VisaCard'),
(2, 'DonateFromHome');

-- --------------------------------------------------------

--
-- Table structure for table `donationoptionsvalue`
--

CREATE TABLE `donationoptionsvalue` (
  `id` int(11) NOT NULL,
  `PMOpid` int(11) NOT NULL,
  `value` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationoptionsvalue`
--

INSERT INTO `donationoptionsvalue` (`id`, `PMOpid`, `value`, `userid`) VALUES
(18, 1, '1234556789', 0),
(19, 2, '2022-03', 0),
(20, 3, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(21, 4, '1000', 0),
(22, 5, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doptions`
--

CREATE TABLE `doptions` (
  `Id` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doptions`
--

INSERT INTO `doptions` (`Id`, `Name`, `Type`) VALUES
(1, 'CardName', 'varchar'),
(2, 'ExpieyData', 'date'),
(3, 'sec code', 'int'),
(4, 'amount', 'int'),
(5, 'cardNumber', 'int');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(3, 'Mohamed Alaa', 'Egypt', 5500),
(4, 'mmmm', '465446', 56565);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmethodoptions`
--
ALTER TABLE `dmethodoptions`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`,`DmethodID`,`OptionID`);

--
-- Indexes for table `donationmethod`
--
ALTER TABLE `donationmethod`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `donationoptionsvalue`
--
ALTER TABLE `donationoptionsvalue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`PMOpid`,`userid`) USING BTREE,
  ADD KEY `id_2` (`id`,`PMOpid`,`userid`) USING BTREE,
  ADD KEY `PMOpid` (`PMOpid`) USING BTREE,
  ADD KEY `id_3` (`id`) USING BTREE;

--
-- Indexes for table `doptions`
--
ALTER TABLE `doptions`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmethodoptions`
--
ALTER TABLE `dmethodoptions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donationmethod`
--
ALTER TABLE `donationmethod`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donationoptionsvalue`
--
ALTER TABLE `donationoptionsvalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `doptions`
--
ALTER TABLE `doptions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
