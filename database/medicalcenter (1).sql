-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 07:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `ID` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`ID`, `first_name`, `last_name`, `status`) VALUES
(20180000, 'Jane', 'Doe', 'Doctor'),
(20181379, 'John', 'Doe', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `services` varchar(20) NOT NULL,
  `contact` text NOT NULL,
  `appdate` text NOT NULL,
  `messages` text NOT NULL,
  `ID` int(20) NOT NULL,
  `idkey` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`first_name`, `last_name`, `services`, `contact`, `appdate`, `messages`, `ID`, `idkey`) VALUES
('mikarlo', 'francis', 'Dental', '8764420428', '2021-04-28 02:10', 'ff', 20181379, 24),
('mikarlo', 'francis', 'Dental', '8764420428', '2021-05-05 11:11', 'f', 20181379, 25);

-- --------------------------------------------------------

--
-- Table structure for table `drnotes`
--

CREATE TABLE `drnotes` (
  `registeredID` int(20) NOT NULL,
  `drNotes` varchar(200) NOT NULL,
  `drID` int(20) NOT NULL,
  `dr_fname` text NOT NULL,
  `dr_lname` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drnotes`
--

INSERT INTO `drnotes` (`registeredID`, `drNotes`, `drID`, `dr_fname`, `dr_lname`, `ID`) VALUES
(123, 'ran notes from dr', 0, 'john', 'doe', 1),
(20181379, '', 20180000, ' tcjtyt', 'chosen', 4),
(0, '', 20180000, ' tcjtyt', 'chosen', 5),
(20181379, 'inserting user notes for patient', 20180000, ' tcjtyt', 'chosen', 6);

-- --------------------------------------------------------

--
-- Table structure for table `registereddr`
--

CREATE TABLE `registereddr` (
  `drID` int(11) NOT NULL,
  `first_name` date NOT NULL,
  `last_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registeredusers`
--

CREATE TABLE `registeredusers` (
  `registeredID` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `reg_status` varchar(10) NOT NULL,
  `dOB` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeredusers`
--

INSERT INTO `registeredusers` (`registeredID`, `first_name`, `last_name`, `reg_status`, `dOB`, `email`, `pass`) VALUES
(20180000, ' tcjtyt', 'chosen', 'Doctor', '2021-04-21', 'mikarlo@stu.ncu.edu.jm', '$2y$10$hkMZLfK7BoMqXM.gaKALQ.XgdeEe2Sz3OCkcFErlHvAzi1z9k.oEO'),
(20181379, 'mikarloe', 'francis', 'Student', '2021-04-21', 'fallensky200@gmail.com', '$2y$10$OWY9ILJRiYLN.CyDBxIOXOWppIfCkeS5RqOitsnbla./gYsAYDBNC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`idkey`);

--
-- Indexes for table `drnotes`
--
ALTER TABLE `drnotes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registereddr`
--
ALTER TABLE `registereddr`
  ADD PRIMARY KEY (`drID`);

--
-- Indexes for table `registeredusers`
--
ALTER TABLE `registeredusers`
  ADD PRIMARY KEY (`registeredID`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `idkey` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `drnotes`
--
ALTER TABLE `drnotes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
