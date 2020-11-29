-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 10:00 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `bookingType` varchar(100) NOT NULL,
  `numPeople` varchar(20) NOT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `bookingType`, `numPeople`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`) VALUES
(14, 'Private-hall', '2', '2-12', '24-00', 'm', 'm', '98374859673'),
(15, 'Formal', '4', '1-12', '18-00', 'Mansi', 'Ayer', '9854637456'),
(16, 'Casual', '6', '30-11', '21-00', 'S', 'Bala', '93746583748'),
(17, 'Private-hall', '10', '27-11', '12-00', 'm', 'm', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tablelist`
--

CREATE TABLE `tablelist` (
  `table_id` int(11) NOT NULL,
  `t_type` varchar(50) NOT NULL,
  `people` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablelist`
--

INSERT INTO `tablelist` (`table_id`, `t_type`, `people`) VALUES
(1, 'Formal', 'Table for 2'),
(2, 'Formal', 'Table for 3'),
(3, 'Formal', 'Table for 4'),
(4, 'Formal', 'Table for 6'),
(5, 'Formal', 'Table for 10'),
(6, 'Casual', 'Table for 2'),
(7, 'Casual', 'Table for 3'),
(8, 'Casual', 'Table for 4'),
(9, 'Casual', 'Table for 6'),
(10, 'Casual', 'Table for 10'),
(11, 'Outdoor', 'Table for 2'),
(12, 'Outdoor', 'Table for 3'),
(13, 'Outdoor', 'Table for 4'),
(14, 'Outdoor', 'Table for 6'),
(15, 'Outdoor', 'Table for 10'),
(16, 'Private Room', 'Table for 2'),
(17, 'Private Room', 'Table for 3'),
(18, 'Private Room', 'Table for 4'),
(19, 'Private Room', 'Table for 6'),
(20, 'Private Room', 'Table for 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);

--
-- Indexes for table `tablelist`
--
ALTER TABLE `tablelist`
  ADD PRIMARY KEY (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tablelist`
--
ALTER TABLE `tablelist`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
