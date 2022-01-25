-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 05:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodstock`
--

CREATE TABLE `bloodstock` (
  `id` int(11) NOT NULL,
  `bloodtype` varchar(222) NOT NULL,
  `bloodtypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodtype`
--

CREATE TABLE `bloodtype` (
  `id` int(11) NOT NULL,
  `bloodtype` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cashstock`
--

CREATE TABLE `cashstock` (
  `id` int(11) NOT NULL,
  `cashavailable` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `donorid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donationdetails`
--

CREATE TABLE `donationdetails` (
  `id` int(11) NOT NULL,
  `donationid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `DonationDT` timestamp NOT NULL DEFAULT current_timestamp(),
  `itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `ID` int(11) NOT NULL,
  `Name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`ID`, `Name`) VALUES
(1, 'english'),
(2, 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `HTML_DATA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `messagetemp` varchar(222) NOT NULL,
  `typrif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messageuser`
--

CREATE TABLE `messageuser` (
  `ID` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `data_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messagtype`
--

CREATE TABLE `messagtype` (
  `ID` int(11) NOT NULL,
  `messagename` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` int(11) NOT NULL,
  `missionid` int(11) NOT NULL,
  `NumOfVols` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `missionvol`
--

CREATE TABLE `missionvol` (
  `id` int(11) NOT NULL,
  `volunid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `Name` varchar(222) NOT NULL,
  `Type` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` int(11) NOT NULL,
  `Name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethodoptions`
--

CREATE TABLE `paymentmethodoptions` (
  `id` int(11) NOT NULL,
  `Paymentid` int(11) NOT NULL,
  `Optionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethodoptvalue`
--

CREATE TABLE `paymentmethodoptvalue` (
  `id` int(11) NOT NULL,
  `pmopid` int(11) NOT NULL,
  `value` text NOT NULL,
  `donorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ID` int(11) NOT NULL,
  `Name` varchar(222) NOT NULL,
  `phon_number` varchar(11) NOT NULL,
  `request_type` int(11) NOT NULL,
  `fam_no` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `Address` int(11) NOT NULL,
  `Description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

CREATE TABLE `translation` (
  `ID` int(11) NOT NULL,
  `langfirstcode` int(11) NOT NULL,
  `langsecondcode` int(11) NOT NULL,
  `trans_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `translation`
--

INSERT INTO `translation` (`ID`, `langfirstcode`, `langsecondcode`, `trans_name`) VALUES
(4, 1, 1, 'username'),
(5, 2, 2, 'اسم المستخدم'),
(6, 1, 1, 'password'),
(7, 2, 2, 'كلمه السر');

-- --------------------------------------------------------

--
-- Table structure for table `trans_details`
--

CREATE TABLE `trans_details` (
  `ID` int(11) NOT NULL,
  `transid` int(11) NOT NULL,
  `wordid` int(11) NOT NULL,
  `transwordid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `usertypeid` int(11) NOT NULL,
  `Dob` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `ID` int(11) NOT NULL,
  `word` varchar(222) NOT NULL,
  `langid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`ID`, `word`, `langid`) VALUES
(1, 'username', 1),
(2, 'تسجيل دخول', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodstock`
--
ALTER TABLE `bloodstock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodtype`
--
ALTER TABLE `bloodtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashstock`
--
ALTER TABLE `cashstock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`donorid`,`receiverid`,`adminid`,`DateTime`),
  ADD KEY `receiverid` (`receiverid`),
  ADD KEY `adminid` (`adminid`),
  ADD KEY `donorid` (`donorid`);

--
-- Indexes for table `donationdetails`
--
ALTER TABLE `donationdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donationid` (`donationid`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `typrif` (`typrif`);

--
-- Indexes for table `messageuser`
--
ALTER TABLE `messageuser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `messageid` (`messageid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `messagtype`
--
ALTER TABLE `messagtype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `missionid` (`missionid`);

--
-- Indexes for table `missionvol`
--
ALTER TABLE `missionvol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volunid` (`volunid`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentmethodoptions`
--
ALTER TABLE `paymentmethodoptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Paymentid_3` (`Paymentid`,`Optionid`),
  ADD KEY `Paymentid` (`Paymentid`,`Optionid`),
  ADD KEY `Paymentid_2` (`Paymentid`,`Optionid`),
  ADD KEY `Optionid` (`Optionid`);

--
-- Indexes for table `paymentmethodoptvalue`
--
ALTER TABLE `paymentmethodoptvalue`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pmopid` (`pmopid`,`donorid`),
  ADD UNIQUE KEY `pmopid_2` (`pmopid`),
  ADD UNIQUE KEY `pmopid_4` (`pmopid`,`donorid`),
  ADD KEY `pmopid_3` (`pmopid`,`donorid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `langid` (`langfirstcode`),
  ADD KEY `langfirstcode` (`langfirstcode`),
  ADD KEY `langsecondcode` (`langsecondcode`);

--
-- Indexes for table `trans_details`
--
ALTER TABLE `trans_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `transid` (`transid`),
  ADD KEY `wordid` (`wordid`),
  ADD KEY `transwordid` (`transwordid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`,`name`,`usertypeid`),
  ADD KEY `usertypeid` (`usertypeid`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodstock`
--
ALTER TABLE `bloodstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bloodtype`
--
ALTER TABLE `bloodtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashstock`
--
ALTER TABLE `cashstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donationdetails`
--
ALTER TABLE `donationdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messageuser`
--
ALTER TABLE `messageuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messagtype`
--
ALTER TABLE `messagtype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `missionvol`
--
ALTER TABLE `missionvol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paymentmethodoptions`
--
ALTER TABLE `paymentmethodoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethodoptvalue`
--
ALTER TABLE `paymentmethodoptvalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translation`
--
ALTER TABLE `translation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trans_details`
--
ALTER TABLE `trans_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`receiverid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`adminid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_ibfk_3` FOREIGN KEY (`donorid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `type ` FOREIGN KEY (`typrif`) REFERENCES `messagtype` (`ID`);

--
-- Constraints for table `messageuser`
--
ALTER TABLE `messageuser`
  ADD CONSTRAINT `message` FOREIGN KEY (`messageid`) REFERENCES `messages` (`ID`),
  ADD CONSTRAINT `messageuser_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD CONSTRAINT `paymentmethod_ibfk_1` FOREIGN KEY (`id`) REFERENCES `paymentmethodoptions` (`Paymentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymentmethodoptions`
--
ALTER TABLE `paymentmethodoptions`
  ADD CONSTRAINT `paymentmethodoptions_ibfk_1` FOREIGN KEY (`Optionid`) REFERENCES `options` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paymentmethodoptions_ibfk_2` FOREIGN KEY (`id`) REFERENCES `paymentmethodoptvalue` (`pmopid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `translation`
--
ALTER TABLE `translation`
  ADD CONSTRAINT `lang` FOREIGN KEY (`langfirstcode`) REFERENCES `language` (`ID`),
  ADD CONSTRAINT `translation_ibfk_1` FOREIGN KEY (`langsecondcode`) REFERENCES `language` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans_details`
--
ALTER TABLE `trans_details`
  ADD CONSTRAINT `trans_details_ibfk_1` FOREIGN KEY (`wordid`) REFERENCES `word` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trans_details_ibfk_2` FOREIGN KEY (`transwordid`) REFERENCES `word` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trans_details_ibfk_3` FOREIGN KEY (`transid`) REFERENCES `translation` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertypeid`) REFERENCES `usertype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
