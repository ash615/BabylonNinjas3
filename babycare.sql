-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 08:38 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `username` varchar(200) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`username`, `pass`) VALUES
('0', 'ash25111998'),
('admin', 'as'),
('anik_acharjee', 'ash25'),
('asas', 'add'),
('ashwin_patidar', 'ass'),
('geeta_chouhan', 'geeta25111998'),
('mak_po', '45'),
('nayan wadhawa', 'nay25111998'),
('ram_phogat', 'ram25111998'),
('reeta_tony', 'rtony');

-- --------------------------------------------------------

--
-- Table structure for table `babyitemadmin`
--

CREATE TABLE `babyitemadmin` (
  `username` varchar(50) NOT NULL,
  `shampoo` varchar(20) NOT NULL,
  `cream` varchar(20) NOT NULL,
  `powder` varchar(20) NOT NULL,
  `kajal` varchar(20) NOT NULL,
  `diaper` varchar(20) NOT NULL,
  `oil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `babyitemadmin`
--

INSERT INTO `babyitemadmin` (`username`, `shampoo`, `cream`, `powder`, `kajal`, `diaper`, `oil`) VALUES
('', '0', '0', '0', '0', '0', '0'),
('admin', '14', '17', '20', '26', '62', '37');

-- --------------------------------------------------------

--
-- Table structure for table `babyitems`
--

CREATE TABLE `babyitems` (
  `username` varchar(70) NOT NULL,
  `shampoo` varchar(4) NOT NULL,
  `cream` varchar(4) NOT NULL,
  `powder` varchar(4) NOT NULL,
  `kajal` varchar(4) NOT NULL,
  `diaper` varchar(4) NOT NULL,
  `oil` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `babyitems`
--

INSERT INTO `babyitems` (`username`, `shampoo`, `cream`, `powder`, `kajal`, `diaper`, `oil`) VALUES
('anik_acharjee', '4', '1', '1', '2', '5', '2'),
('narpat_kumar', '4', '1', '1', '2', '5', '2'),
('anita_hansari', '1', '1', '1', '1', '1', '1'),
('maya_hansari', '9', '5', '5', '4', '7', '4'),
('meeta_taneja', '3', '2', '1', '1', '1', '4'),
('ashwin_patidar', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(100) NOT NULL,
  `feed` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `feed`) VALUES
('', '0'),
('', '0'),
('', '0'),
('anik_acharjee', 'Good Site'),
('ashwin_patidar', 'Super Web App'),
('ashwin_patidar', 'Super Web App'),
('ashwin_patidar', ''),
('ashwin_patidar', ''),
('ashwin_patidar', 'It will be more good If card was used for payment instead of Cash On Delivery!!..');

-- --------------------------------------------------------

--
-- Table structure for table `foodnutrition`
--

CREATE TABLE `foodnutrition` (
  `username` varchar(100) NOT NULL,
  `foodname` varchar(250) NOT NULL,
  `quantity` int(8) NOT NULL,
  `noofpacks` int(8) NOT NULL,
  `childage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodnutrition`
--

INSERT INTO `foodnutrition` (`username`, `foodname`, `quantity`, `noofpacks`, `childage`) VALUES
('', 'milk powder', 340, 5, 3),
('anik_acharjee', 'choco chips', 240, 5, 1),
('meeta_taneja', 'soyasticks', 400, 4, 3),
('meeta_taneja', 'soyasticks', 400, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`first`, `last`, `username`, `pass`, `contact`) VALUES
('Anik', 'Acharjee', 'anik_acharjee', 'anik25111998', 2147483647),
('Ashwin', 'Patidar', 'asas', 'asg2345rt', 76890144),
('Harish', 'Gyani', 'har_gyan', 'har25111998', 876895647),
('Maya', 'Tiwari', 'maya_tiwari', 'ash25111998', 2147483647),
('Meeta ', 'Taneja', 'meeta_tan', '5678', 7768),
('Meeta ', 'Taneja', 'meeta_taneja', 'mee25111998', 897658454),
('Narpat', 'Kumar', 'narpat_kumar', 'nar25111998', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
