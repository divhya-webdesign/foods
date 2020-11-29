-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 09:18 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

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
(1, 'Outdoor', '4', '30-11', '15-00', 'Zara', 'v', '23124454536'),
(2, 'Outdoor', '3', '1-12', '12-00', 'Zara', 'A', '23124454536'),
(3, 'Outdoor', '3', '27-11', '18-00', 'Diana', 'A', '23124454536'),
(4, 'Outdoor', '3', '1-12', '24-00', 'Diana', 'Grey', '2312445'),
(5, 'Formal', '4', '27-11', '15-00', 'Yena', 'A', '23124454536');


-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `msgID` int(12) NOT NULL,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`msgID`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(1, 'Ahmed', 'Ali', 'Ahmed@mail.com', 'Hello first'),
(2, 'Ahmed', 'Ali', 'asa@as.com', 'asdas'),
(3, 'gvgvhv', 'bfxfdxfx', 'rew@', 'try');

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
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`msgID`),
  ADD UNIQUE KEY `msgID` (`msgID`);

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
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `msgID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tablelist`
--
ALTER TABLE `tablelist`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
