-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 01:17 AM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `services` varchar(20) NOT NULL,
  `contact` text NOT NULL,
  `appdate` text NOT NULL,
  `messages` text NOT NULL,
  `ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`first_name`, `last_name`, `services`, `contact`, `appdate`, `messages`, `ID`) VALUES
('mikarlo', 'francis', 'Dental', '8764420428', '2021-04-19 18:36', 'hhhhh', 0),
('adasd', 'sdfvsdfv', 'Lab', '8764420428', '2021-04-12 ', '', 0),
('adasd', 'sdfvsdfv', 'Lab', '8764420428', '2021-04-12 ', '', 0),
('mikarlo', 'francis', 'Medical', '8764420428', '2021-04-27 08:06', 'edcascaweawc', 0),
('mikarlo', 'francis', 'Medical', '8764420428', '2021-04-27 08:07', '2', 123),
('mikarlo', 'francis', 'Dental', '8764420428', '2021-04-28 08:34', 'ececasdc', 123),
('mikarlo', 'francis', 'Check_Up', '8764420428', '2021-04-13 ', '', 123),
('mikarlo', 'sdfvsdfv', 'Medical', '8764420428', '2021-04-28 09:11', 'eee', 123),
('mikarlo', 'adfad', 'Dental', '8764420428', '2021-04-14 22:12', 'ee', 123),
('mikarlo', 'francisee', 'Dental', '8764420428', '2021-04-28 09:15', 'ee', 123),
('mikarlo', 'wwww', 'Dental', 'ww', '2021-04-27 11:11', 'fff', 123),
('xsa', 'sdfvsdfv', 'Dental', '8764420428', '2021-04-06 08:16', 'ffffff', 123),
('', '', '', 'dddd', ' ', '', 123),
('', '', '', 'dddd', ' ', '', 123);

-- --------------------------------------------------------

--
-- Table structure for table `drnotes`
--

CREATE TABLE `drnotes` (
  `registeredID` int(20) NOT NULL,
  `drNotes` varchar(200) NOT NULL,
  `drID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drnotes`
--

INSERT INTO `drnotes` (`registeredID`, `drNotes`, `drID`) VALUES
(123, 'ran notes from dr', 0);

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
(22, ' tcjtyt', 'francis', 'Doctor', '2021-04-11', 'alphademonempire@outlook.com', '$2y$10$Cp7d2y/rcMgIdyclNCPY9eaAiz9Hvs730hJNTgqFQGs3j6sEeBpIy'),
(123, 'mikarlo333', 'choseneeee', 'Student', '2021-05-05', 'mikarlo@stu.ncu.edu.jm', '$2y$10$0zog9.dM3TwC7JSpp0WA/.R/UR4CanT3jN6jcmlkyPP9Zv66wRsoG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drnotes`
--
ALTER TABLE `drnotes`
  ADD PRIMARY KEY (`drID`),
  ADD KEY `registeredID` (`registeredID`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
