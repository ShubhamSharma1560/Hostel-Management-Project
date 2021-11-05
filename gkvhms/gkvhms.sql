-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 02:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gkvhms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `SerialNo` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `passcode` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`SerialNo`, `Username`, `passcode`) VALUES
(1, 'shubham', '3dc1e4c3bc5b2ae63520627ea44df7fd');

-- --------------------------------------------------------

--
-- Table structure for table `allotedstudent`
--

CREATE TABLE `allotedstudent` (
  `SerialNo` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ParentMobNo` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Marks` varchar(10) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `passcode` varchar(80) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `YearOfStudy` varchar(30) NOT NULL,
  `Hostel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allotedstudent`
--

INSERT INTO `allotedstudent` (`SerialNo`, `FirstName`, `LastName`, `FatherName`, `Address`, `ParentMobNo`, `Email`, `DOB`, `Contact`, `Category`, `Marks`, `Username`, `passcode`, `Branch`, `YearOfStudy`, `Hostel`) VALUES
(1, 'SHUBHAM', 'SHARMA', 'XYZ', 'Abc', '1234567892', 'shubham.sharma1560@gmail.com', '1999-9-19', '8580509780', 'GEN', '90', 'sgsgsgg', 'dad45000a912769a1c3e65ad9337d6be', 'CSE', 'Second Year', 'Pt. Lekhram Hostel');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `SerialNo` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Complaint` varchar(50) NOT NULL,
  `Room` varchar(10) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Hostel` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Brief Complaint` varchar(200) NOT NULL,
  `Response` varchar(200) NOT NULL,
  `TeacherName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `SerialNo` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `PermanentAddress` varchar(60) NOT NULL,
  `CurrentAddress` varchar(60) NOT NULL,
  `Post` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Salary` int(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `passcode` varchar(80) NOT NULL,
  `Gender` varchar(12) NOT NULL,
  `Hostel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`SerialNo`, `FirstName`, `LastName`, `PermanentAddress`, `CurrentAddress`, `Post`, `City`, `State`, `Email`, `DOB`, `Salary`, `Contact`, `Category`, `Username`, `passcode`, `Gender`, `Hostel`) VALUES
(1, 'HARRY', 'SHARMA', 'MUMBAI', 'DELHI', 'CODER', 'DELHI', 'HARYANA', 'harry@gmail.com', '2020-05-15', 100000000, '9863524100', 'GEN', 'harry', '3b87c97d15e8eb11e51aa25e9a5770e9', 'Male', 'Swami Sharadhanand Hostel');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `Serial No.` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email address` varchar(20) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Query Relation` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Contact No.` varchar(10) NOT NULL,
  `Detailed Query` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `SerialNo` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ParentMobNo` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Marks` varchar(10) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `passcode` varchar(80) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `YearOfStudy` varchar(30) NOT NULL,
  `Hostel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`SerialNo`, `FirstName`, `LastName`, `FatherName`, `Address`, `ParentMobNo`, `Email`, `DOB`, `Contact`, `Category`, `Marks`, `Username`, `passcode`, `Branch`, `YearOfStudy`, `Hostel`) VALUES
(1, 'SHUBHAm', 'SHARMA', 'DFG', 'Abc', '9501490900', 'shubham.sharma1560@gmail.com', '2001-03-24', '8581537807', 'GEN', '90', 'Shubham1560@', 'dad45000a912769a1c3e65ad9337d6be', 'CSE', 'Second Year', 'Pt. Lekhram Hostel');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `SerialNo` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Suggestion` varchar(50) NOT NULL,
  `Room` varchar(10) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Hostel` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Brief Suggestion` varchar(200) NOT NULL,
  `Response` varchar(200) NOT NULL,
  `TeacherName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`SerialNo`, `Name`, `Email`, `Username`, `Suggestion`, `Room`, `Course`, `Hostel`, `Contact`, `Brief Suggestion`, `Response`, `TeacherName`) VALUES
(1, 'shubham', 'shubham.sharma1560@gmail.com', 'Shubham1560@', 'Food Suggestion', '30', 'cse', 'swami shardhanand  hostel', '9484864566', 'food should be hygienic and proper.', 'We Will Try Our Best', 'shubham');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`SerialNo`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `allotedstudent`
--
ALTER TABLE `allotedstudent`
  ADD PRIMARY KEY (`SerialNo`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`SerialNo`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`Serial No.`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`SerialNo`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`SerialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allotedstudent`
--
ALTER TABLE `allotedstudent`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `Serial No.` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
