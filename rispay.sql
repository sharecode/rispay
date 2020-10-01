-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 06:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rispay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` tinyint(9) NOT NULL,
  `cls` varchar(1) NOT NULL,
  `apname` varchar(10) NOT NULL,
  `afname` varchar(50) NOT NULL,
  `alname` varchar(50) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `upass` varchar(25) NOT NULL,
  `svdate` datetime NOT NULL,
  `upddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `cls`, `apname`, `afname`, `alname`, `uname`, `upass`, `svdate`, `upddate`) VALUES
(1, '1', 'Mr.', 'Fugfon', 'Company', 'admin', '123456', '2020-09-17 07:45:45', '2020-09-17 00:45:45'),
(2, '2', 'Miss.', 'Money', 'Fugfon', 'money', '123456', '2020-09-17 07:46:21', '2020-09-17 00:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `ckmon`
--

CREATE TABLE `ckmon` (
  `mnid` smallint(6) NOT NULL,
  `mnnum` float NOT NULL,
  `mnpass` varchar(50) NOT NULL,
  `mndate` date NOT NULL,
  `mnhour` varchar(2) NOT NULL,
  `mnminute` varchar(2) NOT NULL,
  `mnslip` varchar(60) NOT NULL,
  `idcd` varchar(13) NOT NULL,
  `note` text NOT NULL,
  `mnip` varchar(60) NOT NULL,
  `ckmdate` datetime NOT NULL,
  `mndatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` mediumint(9) UNSIGNED NOT NULL,
  `pname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `idcd` varchar(13) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `dep` varchar(300) NOT NULL,
  `position` varchar(200) NOT NULL,
  `prv` varchar(50) NOT NULL,
  `chk` tinyint(4) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `svd` datetime NOT NULL,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `setup`
--

CREATE TABLE `setup` (
  `sid` tinyint(4) NOT NULL,
  `day` date NOT NULL,
  `hr` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mt` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` mediumint(9) NOT NULL,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup`
--

INSERT INTO `setup` (`sid`, `day`, `hr`, `mt`, `num`, `upd`) VALUES
(1, '2020-12-31', '13', '00', 10000, '2020-09-20 00:26:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `ckmon`
--
ALTER TABLE `ckmon`
  ADD PRIMARY KEY (`mnid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `setup`
--
ALTER TABLE `setup`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` tinyint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ckmon`
--
ALTER TABLE `ckmon`
  MODIFY `mnid` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mid` mediumint(9) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
