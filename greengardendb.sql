-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 11:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greengardendb`
--
CREATE DATABASE IF NOT EXISTS `greengardendb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `greengardendb`;

-- --------------------------------------------------------

--
-- Table structure for table `carttbl`
--

DROP TABLE IF EXISTS `carttbl`;
CREATE TABLE `carttbl` (
  `cartid` int(10) NOT NULL,
  `productid` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `totalprice` float DEFAULT NULL,
  `cart` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expireDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commenttbl`
--

DROP TABLE IF EXISTS `commenttbl`;
CREATE TABLE `commenttbl` (
  `commentid` int(10) NOT NULL,
  `customerID` int(10) DEFAULT NULL,
  `customerName` varchar(50) DEFAULT NULL,
  `cusComment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliverytbl`
--

DROP TABLE IF EXISTS `deliverytbl`;
CREATE TABLE `deliverytbl` (
  `deliveryid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `paymentid` int(10) NOT NULL,
  `deliverdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktbl`
--

DROP TABLE IF EXISTS `feedbacktbl`;
CREATE TABLE `feedbacktbl` (
  `feedbackid` int(10) NOT NULL,
  `userID` int(10) DEFAULT NULL,
  `feedback` varchar(50) DEFAULT NULL,
  `starsGiven` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guesstbl`
--

DROP TABLE IF EXISTS `guesstbl`;
CREATE TABLE `guesstbl` (
  `guestID` int(10) NOT NULL,
  `customername` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messagingtbl`
--

DROP TABLE IF EXISTS `messagingtbl`;
CREATE TABLE `messagingtbl` (
  `messageID` int(10) DEFAULT NULL,
  `customername` text DEFAULT NULL,
  `customerID` int(10) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsfeedtbl`
--

DROP TABLE IF EXISTS `newsfeedtbl`;
CREATE TABLE `newsfeedtbl` (
  `newfeedID` int(10) NOT NULL,
  `news` text DEFAULT NULL,
  `newsDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttbl`
--

DROP TABLE IF EXISTS `paymenttbl`;
CREATE TABLE `paymenttbl` (
  `paymentid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `cartid` int(10) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producttbl`
--

DROP TABLE IF EXISTS `producttbl`;
CREATE TABLE `producttbl` (
  `productid` int(10) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` text NOT NULL,
  `category` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `deliveryCost` double NOT NULL,
  `productImg` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchasetbl`
--

DROP TABLE IF EXISTS `purchasetbl`;
CREATE TABLE `purchasetbl` (
  `purchaseid` int(10) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `cartid` int(10) DEFAULT NULL,
  `purchaseDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recoverytbl`
--

DROP TABLE IF EXISTS `recoverytbl`;
CREATE TABLE `recoverytbl` (
  `RECOVERryid` int(10) NOT NULL,
  `RECOVERyEmail` varchar(50) DEFAULT NULL,
  `customername` text DEFAULT NULL,
  `customerID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

DROP TABLE IF EXISTS `usertbl`;
CREATE TABLE `usertbl` (
  `userid` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlisttbl`
--

DROP TABLE IF EXISTS `wishlisttbl`;
CREATE TABLE `wishlisttbl` (
  `wishid` int(10) NOT NULL,
  `userID` int(10) DEFAULT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carttbl`
--
ALTER TABLE `carttbl`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `product` (`productid`);

--
-- Indexes for table `commenttbl`
--
ALTER TABLE `commenttbl`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `guesstbl`
--
ALTER TABLE `guesstbl`
  ADD PRIMARY KEY (`guestID`);

--
-- Indexes for table `newsfeedtbl`
--
ALTER TABLE `newsfeedtbl`
  ADD PRIMARY KEY (`newfeedID`);

--
-- Indexes for table `producttbl`
--
ALTER TABLE `producttbl`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchasetbl`
--
ALTER TABLE `purchasetbl`
  ADD PRIMARY KEY (`purchaseid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `cartid` (`cartid`) USING BTREE;

--
-- Indexes for table `recoverytbl`
--
ALTER TABLE `recoverytbl`
  ADD PRIMARY KEY (`RECOVERryid`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `wishlisttbl`
--
ALTER TABLE `wishlisttbl`
  ADD PRIMARY KEY (`wishid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commenttbl`
--
ALTER TABLE `commenttbl`
  MODIFY `commentid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttbl`
--
ALTER TABLE `producttbl`
  MODIFY `productid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchasetbl`
--
ALTER TABLE `purchasetbl`
  MODIFY `purchaseid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
