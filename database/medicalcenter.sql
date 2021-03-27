-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 12:53 AM
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
  `stu_ID` int(20) NOT NULL,
  `appointmentDate` date NOT NULL,
  `registeredID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drnotes`
--

CREATE TABLE `drnotes` (
  `registeredID` int(20) NOT NULL,
  `drNotes` int(200) NOT NULL,
  `drID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registeredusers`
--

CREATE TABLE `registeredusers` (
  `registeredID` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dOB` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeredusers`
--

INSERT INTO `registeredusers` (`registeredID`, `first_name`, `last_name`, `gender`, `dOB`, `email`, `pass`) VALUES
(221, 'mikarlo', 'francis', 'on', '2021-03-01', 'alphademonempire@outlook.com', '$2y$10$IRFpv.CeT7eb2YOe4f.eFewXYpw59mH/4jHZ02L8ZCKAuF.Bw2cP6'),
(222, 'mikarlo', 'francis', 'on', '2021-03-01', 'fallensky200@gmail.com', '$2y$10$QDI6Y9cuRsVI.GsG8Trlf.vgJaS5XXvkmlyxbS8UHHVfkd20JnDrq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`stu_ID`),
  ADD KEY `registeredID` (`registeredID`);

--
-- Indexes for table `drnotes`
--
ALTER TABLE `drnotes`
  ADD PRIMARY KEY (`drID`),
  ADD KEY `registeredID` (`registeredID`);

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
