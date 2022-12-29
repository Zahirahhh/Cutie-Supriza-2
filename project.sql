-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 10:38 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_username` varchar(50) NOT NULL,
  `Password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_username`, `Password`) VALUES
('farisha', 'farisha234'),
('najihah', 'najihah123'),
('syadiba', 'syadiba123'),
('zahirah', 'zahirah123');

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE `cust_order` (
  `Number` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gift` varchar(15) NOT NULL,
  `wishCard` varchar(50) NOT NULL,
  `receiverName` varchar(50) NOT NULL,
  `receiverAdds` varchar(50) NOT NULL,
  `phoneNum` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(12) NOT NULL,
  `known` varchar(10) NOT NULL,
  `totalPrice` varchar(15) NOT NULL,
  `Admin_username` varchar(50) NOT NULL,
  `Notes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`Number`, `username`, `gift`, `wishCard`, `receiverName`, `receiverAdds`, `phoneNum`, `date`, `time`, `known`, `totalPrice`, `Admin_username`, `Notes`) VALUES
(29, 'psj', 'B', 'Happy Birthday', 'zahirah', 'selangor', 176944175, '2021-01-28', 'anytime', 'no', '20', 'farisha', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Name` varchar(40) NOT NULL,
  `PhoneNum` varchar(12) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `PhoneNum`, `Username`, `Password`) VALUES
('syadiba', '0199617720', 'ailee', 'abc123'),
('lee chong wei', '0128887777', 'chong wei', 'abc123'),
('jaja', '0176944175', 'jiji', 'abcdef'),
('jiji', '0176944175', 'najihah123', 'abc123'),
('baby', '0176944175', 'psj', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_username`);

--
-- Indexes for table `cust_order`
--
ALTER TABLE `cust_order`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust_order`
--
ALTER TABLE `cust_order`
  MODIFY `Number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
