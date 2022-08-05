-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 07:49 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nazrul`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminUserName` varchar(30) DEFAULT NULL,
  `adminFullName` varchar(50) DEFAULT NULL,
  `adminEmail` varchar(50) DEFAULT NULL,
  `adminPassword` varchar(20) DEFAULT NULL,
  `adminContact` varchar(20) DEFAULT NULL,
  `adminAddress` varchar(100) DEFAULT NULL,
  `adminBranch` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminUserName`, `adminFullName`, `adminEmail`, `adminPassword`, `adminContact`, `adminAddress`, `adminBranch`) VALUES
(1, 'nazrul', 'Md. Nazrul Islam CEO', 'nazrul@gmail.com', '1234', '01816452685', 'Dhaka-1216', 'Administrator'),
(2, 'mahsin', 'Md. Mahsin Ahmed', 'mahsin.cse@gmail.com', '58259', '01912147370', 'Narsingdi, Dhaka-1216', 'Barishal'),
(18, 'nazmul', 'Md. Nazmul Shahadat', 'nazmul@gamil.com', '1234', '01717859689', 'Mymensing', 'Mirpur-1'),
(19, 'saminaz', 'Jahirul Islam', 'sami420@gmail.com', '1234', '01658748965', 'Mirzapur', 'Mirpur-2'),
(20, 'mahsin1', 'Mahi LucKy', 'mahsin.cse@gmail.com', '123', '01681528965', 'narsingdi', 'Mirpur-1');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `through` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `through`, `contact`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, 'Classmate', '01524879535'),
(6, '', ''),
(7, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookentrytable`
--

CREATE TABLE `bookentrytable` (
  `id` int(11) NOT NULL,
  `bookTitle` varchar(200) DEFAULT NULL,
  `bookAuthor` varchar(150) DEFAULT NULL,
  `isbnNo` varchar(100) DEFAULT NULL,
  `bookPrice` varchar(100) DEFAULT NULL,
  `bookQuantity` varchar(20) DEFAULT NULL,
  `branch` varchar(50) NOT NULL,
  `bookEntryDate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookentrytable`
--

INSERT INTO `bookentrytable` (`id`, `bookTitle`, `bookAuthor`, `isbnNo`, `bookPrice`, `bookQuantity`, `branch`, `bookEntryDate`) VALUES
(1, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(2, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(3, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(4, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(5, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(6, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(7, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(8, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(9, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(10, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(11, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(12, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(13, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(14, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(15, 'ABC', 'AAAA', 'fsdfsfsfsfsfsdfsd', '1212', '12', '', '16-02-2017'),
(16, 'ABC', 'AAAA', 'fsdfsfsfsfsfsdfsd', '1212', '12', '', '16-02-2017'),
(17, 'ABC', 'AAAA', 'fsdfsfsfsfsfsdfsd', '1212', '12', '', '16-02-2017'),
(18, 'ABC', 'AAAA', 'fsdfsfsfsfsfsdfsd', '1212', '12', '', '16-02-2017'),
(19, 'ABC', 'AAAA', 'fsdfsfsfsfsfsdfsd', '1212', '12', '', '16-02-2017'),
(20, 'Spoken English', 'Md. Nazrul Islam', '123-2-56-963258-1', '150', '10', '', '16-02-2017'),
(21, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '12', '', '16-02-2017'),
(22, 'Kabiler Bon', 'Al-Mahmud', '123-1-22-123654-1', '300', '20', '', '16-02-2017'),
(23, 'Tribogsho Sotabdir Kobita', 'Mahsin Ahmed', '123-1-22-123654-2', '100', '50', '', '17-02-2017'),
(24, 'ABC', 'AAAA', '', '120', '10', '', '19-02-2017'),
(25, 'Test Book', 'AAAA', '123-1-22-123654-5', '150', '500', 'Mirpur-1', '19-02-2017'),
(26, 'Test Book', 'AAAA', '123-1-22-123654-5', '150', '500', 'Mirpur-1', '19-02-2017');

-- --------------------------------------------------------

--
-- Table structure for table `bookstocktable`
--

CREATE TABLE `bookstocktable` (
  `id` int(11) NOT NULL,
  `bookTitle` varchar(200) DEFAULT NULL,
  `bookAuthor` varchar(150) DEFAULT NULL,
  `isbnNo` varchar(100) DEFAULT NULL,
  `bookPrice` varchar(100) DEFAULT NULL,
  `Mirpur1` varchar(20) DEFAULT '0',
  `Mirpur2` varchar(50) DEFAULT '0',
  `Mirpur10` varchar(50) DEFAULT '0',
  `Barishal` varchar(50) DEFAULT '0',
  `lastUpdateDate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookstocktable`
--

INSERT INTO `bookstocktable` (`id`, `bookTitle`, `bookAuthor`, `isbnNo`, `bookPrice`, `Mirpur1`, `Mirpur2`, `Mirpur10`, `Barishal`, `lastUpdateDate`) VALUES
(1, 'Natur@l Spoken', 'Nazrul Islam', '123-1-22-123654-1', '300', '5', '20', '50', '0', '2017-02-16'),
(2, 'Speaking Power', 'Nazrul Islam', '123-1-22-123654-2', '100', '0', '32', '20', '0', '2017-02-17'),
(3, 'Spoken Vocabulary', 'Nazrul Islam', '564-5-52-859674-6', '200', '10', '12', '0', '0', '2017-02-19'),
(4, 'IELTS Course Materials', 'Nazrul Islam', '123-1-22-123654-5', '400', '500', '12', '0', '0', '2017-02-19'),
(5, 'Common Mistakes', 'Nazrul Islam', 'fsdfsfsfsfsfsdfsd', '100', '2', '0', '0', '0', '2017-02-19'),
(6, 'Spoken Flash Card', 'Nazrul Islam', '12546325', '50', '0', '0', '0', '0', '2017-02-19'),
(8, 'Phonetics', 'Nazrul Islam', '56464646', '300', '0', '0', '0', '0', '2017-02-20'),
(10, 'FreeHand Writing', 'Nazrul Islam', '564646463', '150', '65', '0', '0', '60', '2017-02-20'),
(11, 'Fluent Spoken', 'Nazrul Islam', '564646416', '200', '0', '0', '0', '32', '2017-02-20'),
(12, 'Tribigsho Sotabdir Kob', 'Mahsin Ahmed, Mahi Lucky', '123-1-22-123654-8', '100', '30', '0', '0', '0', '2017-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `branchlist`
--

CREATE TABLE `branchlist` (
  `id` int(11) NOT NULL,
  `branchName` varchar(100) DEFAULT NULL,
  `branchManager` varchar(50) DEFAULT NULL,
  `addreass` varchar(500) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchlist`
--

INSERT INTO `branchlist` (`id`, `branchName`, `branchManager`, `addreass`, `date`) VALUES
(1, 'Administrator', 'Md. Nazrul Islam', '01551425879', 'Mirpur-1\r\nDhaka-1216\r\nBangladseh');

-- --------------------------------------------------------

--
-- Table structure for table `costtable`
--

CREATE TABLE `costtable` (
  `id` int(11) NOT NULL,
  `costType` varchar(100) DEFAULT NULL,
  `receiverName` varchar(150) DEFAULT NULL,
  `receiverContact` varchar(100) DEFAULT NULL,
  `costPurpose` varchar(100) DEFAULT NULL,
  `itemNumber` varchar(100) DEFAULT NULL,
  `costAmount` varchar(1000) DEFAULT '0',
  `userName` varchar(100) DEFAULT NULL,
  `userBranch` varchar(100) DEFAULT NULL,
  `entryDate` varchar(50) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costtable`
--

INSERT INTO `costtable` (`id`, `costType`, `receiverName`, `receiverContact`, `costPurpose`, `itemNumber`, `costAmount`, `userName`, `userBranch`, `entryDate`, `status`) VALUES
(1, 'Teacher Payment', 'Prime Link', '01912147370', 'salary', '1', '55000', 'mahsin', 'Mirpur-1', '2017-02-26', '0'),
(2, 'Electric Fittings', 'Ahmed & Sons', '01921444455', 'IELTS Liflet', '3', '1536', 'mahsin', 'Barishal', '2017-02-26', '1'),
(3, 'Maintainance', 'Ahmed', '01754142589', 'gdfgdgd', '1', '1800', 'mahsin', 'Mirpur-2', '2017-02-26', '1'),
(4, 'Maintainance', 'Ahmed', '01754142589', 'gdfgdgd', '1', '1800', 'mahsin', 'Barishal', '2017-02-26', '1'),
(5, 'Internet Bill', 'Nextgen', '015247896589', 'NetBill', '3', '2400', 'mahsin', 'Barishal', '2017-02-27', '1'),
(6, 'Maintainance', 'Ahmed & Sons', '01816452685', 'IELTS Liflet', '3', '15000', 'mahsin', 'Barishal', '2017-02-28', '1'),
(13, 'salary', 'Employee', 'null', 'Pay Salary', '03', '48500', 'Admin', 'All', '2017-03-02', '1'),
(14, 'salary', 'Employee', 'null', 'Pay Salary', '03', '48500', 'Admin', 'All', '2017-03-02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `batchNo` int(11) NOT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `courseName` varchar(150) DEFAULT NULL,
  `courseDuration` varchar(20) DEFAULT NULL,
  `classDays` varchar(30) DEFAULT NULL,
  `classTime` varchar(20) DEFAULT NULL,
  `courseFee` varchar(20) DEFAULT NULL,
  `startDate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`batchNo`, `branch`, `courseName`, `courseDuration`, `classDays`, `classTime`, `courseFee`, `startDate`) VALUES
(2, 'Mirpur-1', 'IELTS Regular', '30', 'Friday', '18:30', '12000', '2017-03-01'),
(3, 'Mirpur-10', 'Spoken with Writing', '24', 'Sat-Mon-Wed', '18:03', '11000', '2017-03-04'),
(4, 'Mirpur-1', 'IELTS with Spoken', '11', 'Friday', '06:50', '14000', '2017-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `coursetable`
--

CREATE TABLE `coursetable` (
  `id` int(11) NOT NULL,
  `courseName` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursetable`
--

INSERT INTO `coursetable` (`id`, `courseName`) VALUES
(9, 'Advance Spoken & Phonetics'),
(8, 'Basic Speaking & Grammer'),
(19, 'English Efficiency Certificate'),
(7, 'Fluent Spoken'),
(13, 'ICT'),
(10, 'IELTS with Spoken'),
(14, 'Kids English'),
(15, 'Mother''s English'),
(4, 'Natur@l Spoken'),
(6, 'Phonetics'),
(12, 'Phonetics with Spoken'),
(18, 'Presentation & Public Speach'),
(16, 'Professional Speaking'),
(17, 'Professional Writing');

-- --------------------------------------------------------

--
-- Table structure for table `duetable`
--

CREATE TABLE `duetable` (
  `id` int(11) NOT NULL,
  `stdId` int(50) DEFAULT NULL,
  `stdName` varchar(150) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `dueAmount` varchar(20) DEFAULT NULL,
  `paymentdate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `position` varchar(30) DEFAULT NULL,
  `empName` varchar(50) DEFAULT NULL,
  `fathersName` varchar(30) DEFAULT NULL,
  `mothersName` varchar(30) DEFAULT NULL,
  `education` varchar(30) DEFAULT NULL,
  `joiningDate` varchar(30) DEFAULT NULL,
  `basicSalary` varchar(20) DEFAULT NULL,
  `increment` varchar(30) DEFAULT '0',
  `salaryReduction` int(11) NOT NULL DEFAULT '0',
  `branch` varchar(20) DEFAULT NULL,
  `empStatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `position`, `empName`, `fathersName`, `mothersName`, `education`, `joiningDate`, `basicSalary`, `increment`, `salaryReduction`, `branch`, `empStatus`) VALUES
(3, 'MD', 'Salim Reza', 'Hasen Ali Mulla', 'Rabia Begum', 'B.Sc in CSE', '2018-05-21', '15000', '8500', 400, 'Mirpur-2', 'Full Time'),
(4, 'ED', 'Waliullah', 'Mohammad Ali', 'Farida Begum', 'Diploma in ET', '2017-02-05', '10000', '15000', 0, 'Mirpur-10', 'Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `feetable`
--

CREATE TABLE `feetable` (
  `id` int(11) NOT NULL,
  `feeTitle` varchar(250) DEFAULT NULL,
  `feeAmount` varchar(100) DEFAULT NULL,
  `lastUpdate` varchar(100) DEFAULT NULL,
  `admin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feetable`
--

INSERT INTO `feetable` (`id`, `feeTitle`, `feeAmount`, `lastUpdate`, `admin`) VALUES
(21, 'MOCK Test', '1200', '28-02-2017', 'nazrul'),
(22, 'Transfer Fee', '5000', '22-02-2017', 'nazrul'),
(23, 'Re-Admission', '1200', '20-02-2017', 'nazrul'),
(24, 'Certificate Fee', '1500', '20-02-2017', 'nazrul');

-- --------------------------------------------------------

--
-- Table structure for table `incometable`
--

CREATE TABLE `incometable` (
  `id` int(11) NOT NULL,
  `stdId` int(50) DEFAULT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `incomeType` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `payment` varchar(50) DEFAULT '0',
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incometable`
--

INSERT INTO `incometable` (`id`, `stdId`, `courseName`, `incomeType`, `branch`, `payment`, `date`) VALUES
(1, 1211211, NULL, 'Book Sell', 'Barishal', '2200', '2017-02-25'),
(2, 101, NULL, 'Book Sell', 'Barishal', '1200', '2017-02-26'),
(3, 1211211, NULL, 'Book Sell', 'Mirpur-1', '4000', '2017-02-26'),
(4, 100001, NULL, 'Book Sell', 'Mirpur-1', '3800', '2017-02-26'),
(5, 101, NULL, 'Book Sell', 'Mirpur-1', '1500', '2017-02-26'),
(6, 1015, NULL, 'Book Sell', 'Barishal', '200', '2017-02-26'),
(7, 1211211, NULL, 'Book Sell', 'Barishal', '3000', '2017-02-26'),
(8, 1211211, NULL, 'Book Sell', 'Barishal', '3000', '2017-02-26'),
(9, 1211211, NULL, 'Certificate Fee', 'Barishal', '1500', '2017-02-26'),
(10, 100001, NULL, 'Certificate Fee', 'Barishal', '1500', '2017-02-24'),
(11, 219981212, NULL, 'Transfer Fee', 'Barishal', '5000', '2017-02-24'),
(12, 100001, NULL, 'MOCK Test', 'Barishal', '1000', '2017-02-27'),
(13, 1211211, NULL, 'Book Sell', 'Barishal', '1200', '2017-02-27'),
(14, 11, NULL, 'Book Sell', 'Barishal', '200', '2017-02-28'),
(15, 6, 'Academic English', 'Admission', 'Barishal', '2500', '2017.03.01'),
(16, 1001, NULL, 'Book Sell', 'Barishal', '200', '2017-03-01'),
(17, 550, NULL, 'Book Sell', 'Barishal', '200', '2017-03-01'),
(18, 550, NULL, 'Book Sell', 'Barishal', '200', '2017-03-01'),
(19, 550, NULL, 'Book Sell', 'Barishal', '200', '2017-03-01'),
(20, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(21, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(22, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(23, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(24, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(25, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(26, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(27, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(28, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(29, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(30, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(31, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(32, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(33, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(34, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(35, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(36, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(37, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(38, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(39, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(40, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(41, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(42, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(43, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(44, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(45, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(46, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(47, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(48, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(49, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(50, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(51, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(52, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(53, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(54, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(55, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(56, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(57, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(58, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(59, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(60, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(61, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(62, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(63, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(64, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(65, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(66, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(67, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(68, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(69, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(70, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(71, 1211211, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(72, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(73, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(74, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(75, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(76, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(77, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(78, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(79, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(80, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(81, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(82, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(83, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(84, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(85, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(86, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(87, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(88, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(89, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(90, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(91, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(92, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(93, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(94, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(95, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(96, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(97, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(98, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(99, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(100, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(101, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(102, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(103, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(104, 5002, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(105, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(106, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(107, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(108, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(109, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(110, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(111, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(112, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(113, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(114, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(115, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(116, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(117, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(118, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(119, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(120, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(121, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(122, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(123, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(124, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(125, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(126, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(127, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(128, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(129, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(130, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(131, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(132, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(133, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(134, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(135, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(136, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(137, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(138, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(139, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(140, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(141, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(142, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(143, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(144, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(145, 11, NULL, 'Book Sell', 'Barishal', '800', '2017-03-01'),
(146, 11, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(147, 11, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(148, 11, NULL, 'Book Sell', 'Barishal', '750', '2017-03-01'),
(149, 45645, NULL, 'Book Sell', 'Barishal', '1000', '2017-03-01'),
(150, 34, 'mm', 'Book Sell', 'Barishal', '750', '0'),
(151, 34, 'mm', 'Book Sell', 'Barishal', '750', '0'),
(152, 44, 'nn', 'Book Sell', 'Barishal', '1500', '2017-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `increment`
--

CREATE TABLE `increment` (
  `id` int(11) NOT NULL,
  `empId` int(11) DEFAULT NULL,
  `empName` varchar(50) DEFAULT NULL,
  `increment` varchar(20) DEFAULT NULL,
  `incrementDate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `increment`
--

INSERT INTO `increment` (`id`, `empId`, `empName`, `increment`, `incrementDate`) VALUES
(1, 1, 'Salim Reza Ratan1', '5000', '2017.02.17'),
(2, 1, 'Salim Reza Ratan1', '1000', '2017.02.17'),
(3, 2, 'Md. Nazmul Shahadat', '2000', '2017.02.17'),
(4, 2, 'Md. Nazmul Shahadat', '1000', '2017.02.17'),
(5, 3, 'Salim Reza Ratan', '1500', '2017.02.17'),
(6, 3, 'Salim Reza Ratan', '1000', '2017.02.17'),
(7, 4, 'Waliullah', '5000', '2017.02.17'),
(8, 4, 'Waliullah', '10000', '2017.02.22'),
(9, 3, 'Salim Reza', '1000', '2017.02.22'),
(10, 3, 'Salim Reza', '2000', '2017.02.23'),
(11, 3, 'Salim Reza', '1000', '2017.02.24'),
(12, 3, 'Salim Reza', '2000', '2017.02.25');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `empId` varchar(11) DEFAULT NULL,
  `empName` varchar(50) DEFAULT NULL,
  `salaryReduction` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `empId`, `empName`, `salaryReduction`, `salary`, `date`) VALUES
(1, '3', 'Salim Reza', '5000', '18500', '2017.03.02'),
(2, '4', 'Waliullah', '0', '25000', '2017.03.02'),
(3, '3', 'Salim Reza', '5000', '18500', '2017.03.02'),
(4, '4', 'Waliullah', '0', '25000', '2017.03.02'),
(5, '3', 'Salim Reza', '0', '23500', '2017.03.02'),
(6, '4', 'Waliullah', '0', '25000', '2017.03.02'),
(7, '3', 'Salim Reza', '0', '23500', '2017.03.02'),
(8, '4', 'Waliullah', '0', '25000', '2017.03.02'),
(9, '3', 'Salim Reza', '0', '23500', '2017.03.02'),
(10, '4', 'Waliullah', '0', '25000', '2017.03.02'),
(11, '3', 'Salim Reza', '0', '23500', '2017.03.02'),
(12, '4', 'Waliullah', '0', '25000', '2017.03.02'),
(13, '3', 'Salim Reza', '0', '23500', '2017.03.02'),
(14, '4', 'Waliullah', '0', '25000', '2017.03.02'),
(15, '3', 'Salim Reza', '0', '23500', '2017.03.02'),
(16, '4', 'Waliullah', '0', '25000', '2017.03.02'),
(17, '3', 'Salim Reza', '0', '23500', '2017.03.02'),
(18, '4', 'Waliullah', '0', '25000', '2017.01.02'),
(19, '3', 'Salim Reza', '0', '23500', '2017.03.02'),
(20, '4', 'Waliullah', '0', '25000', '2017.03.02');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `stdId` int(11) NOT NULL,
  `stdName` varchar(50) DEFAULT NULL,
  `batchNo` varchar(20) DEFAULT NULL,
  `faName` varchar(50) DEFAULT NULL,
  `moName` varchar(50) DEFAULT NULL,
  `stdContact` varchar(20) DEFAULT NULL,
  `guaContact` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `presentAddress` varchar(150) DEFAULT NULL,
  `permanentAddress` varchar(150) DEFAULT NULL,
  `className` varchar(50) DEFAULT NULL,
  `classYear` varchar(20) DEFAULT NULL,
  `subjectName` varchar(30) DEFAULT NULL,
  `instituteName` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `departmentName` varchar(50) DEFAULT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `companyAddress` varchar(50) DEFAULT NULL,
  `degree1` varchar(20) DEFAULT NULL,
  `year1` varchar(20) DEFAULT NULL,
  `instituteName1` varchar(50) DEFAULT NULL,
  `grade1` varchar(15) DEFAULT NULL,
  `degree2` varchar(20) DEFAULT NULL,
  `year2` varchar(20) DEFAULT NULL,
  `instituteName2` varchar(50) DEFAULT NULL,
  `grade2` varchar(15) DEFAULT NULL,
  `degree3` varchar(20) DEFAULT NULL,
  `year3` varchar(20) DEFAULT NULL,
  `instituteName3` varchar(50) DEFAULT NULL,
  `grade3` varchar(15) DEFAULT NULL,
  `degree4` varchar(20) DEFAULT NULL,
  `year4` varchar(20) DEFAULT NULL,
  `instituteName4` varchar(50) DEFAULT NULL,
  `grade4` varchar(15) DEFAULT NULL,
  `admissionDate` varchar(30) DEFAULT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `courseFee` varchar(50) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `admin` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`stdId`, `stdName`, `batchNo`, `faName`, `moName`, `stdContact`, `guaContact`, `email`, `dob`, `presentAddress`, `permanentAddress`, `className`, `classYear`, `subjectName`, `instituteName`, `designation`, `departmentName`, `companyName`, `companyAddress`, `degree1`, `year1`, `instituteName1`, `grade1`, `degree2`, `year2`, `instituteName2`, `grade2`, `degree3`, `year3`, `instituteName3`, `grade3`, `degree4`, `year4`, `instituteName4`, `grade4`, `admissionDate`, `courseName`, `courseFee`, `payment`, `branch`, `admin`, `status`) VALUES
(1, '', '3', '', '', '01912147370', '', '', '', '', '', '', '', '', '', '', '', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', '23-02-2017', 'Arabic Language', '12000', '', 'Mirpur-10', NULL, 0),
(2, 'Test1', '1', 'Md. Abu Taher', 'Nilofa Begum', '01912147370', '01913787247', 'mahsin.cse@gmail.com', '2017-02-23', 'Dhaka-1216', 'Narsingdi-1601', '', '', '', '', '', '', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', '23-02-2017', 'Arabic Language', '5', '5', 'Barishal', NULL, 0),
(3, 'test2', '4', 'Mohammad Ali', 'Rowshan Ara Begum', '01912147370', '01913787247', 'mahsin.cse@gmail.com', '2017-04-27', 'Dhaka-1216', 'Narsingdi-1601', 'B.Sc', '2016', 'CSE', 'World University of Bangladesh', 'Lab Assistant', 'Export', 'Prime University', 'Mirpur-1, Dhaka-1216', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', '23-02-2017', 'Academic English', '10000', '5000', 'Barishal', NULL, 0),
(4, 'test3', '4', 'Md. Azgar Ali', 'Hosna Ara', '01912147370', '01913787247', 'nazmul@gmail.com', '2017-02-25', 'Dhaka-1216', 'Narsingdi-1601', 'Diploma', '2016', ' ET', 'World University of Bangladesh', 'Lab Assistant', 'CSE', 'SF Dennim', 'Mirpur-1, Dhaka-1216', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', '23-02-2017', 'Academic English', '10000', '', 'Barishal', NULL, 0),
(5, 'test4', '6', 'Md. Abu Taher', 'Rowshan Ara Begum', '01715492860', '01854585225', 'nazrul@gmail.com', '2017-02-28', 'Dhaka-1216', 'Chand Pasha, Shibpur, Narsingdi-1620', 'Diploma', '2017', ' ET', 'World University of Bangladesh', 'Assistant Accountants', 'CSE', 'SF Dennim', 'Mirpur-1, Dhaka-1216', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', '23-02-2017', 'Spoken English', '10000', '5000', 'Mirpur-10', NULL, 0),
(6, 'test5', '4', 'Mohammad Ali', 'Rowshan Ara Begum', '01254785955', '01854585225', 'nazmul@gmail.com', '2017-02-16', 'Dhaka-1216', 'Narsingdi-1601', 'B.Sc', '2017', 'CSE', 'MAWTS', 'Lab Assistant', 'Export', 'Prime University', 'Mirpur-1, Dhaka-1216', 'Dakhil', '2002', 'Jamea E Kashemia Kamil Madrasah', '4.17', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', '23-02-2017', 'Academic English', '10000', '5000', 'Barishal', NULL, 0),
(8, 'AB', '12', 'Abu', 'Lily', '01912147370', '01913787247', 'mahsin.cse@gmail.com', '1988-03-01', 'Mirpur-1', 'Narsingdi-1601', 'BSc', '2016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mirpur-1', 'mahsin', 1),
(10, '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mirpur-1', 'mahsin', 1),
(11, '', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mirpur-10', 'mahsin', 1),
(12, 'teststdName', 'testBatchNo', 'testFathersName', 'testmotherName', 'teststdContact', 'testguaContact', 'testEmail@gamil.com', 'testdob', 'testPAdd', 'testPerAdd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, '', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'null', '1980', '', '', 'admissionDate', 'Spoken with Writing', '11000', '', 'Mirpur-10', 'mahsin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testbooksell`
--

CREATE TABLE `testbooksell` (
  `id` int(11) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `stdId` varchar(50) DEFAULT NULL,
  `stdName` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `bookName` varchar(150) DEFAULT NULL,
  `bookQuantity` varchar(50) DEFAULT NULL,
  `unitPrice` varchar(50) DEFAULT NULL,
  `totalPrice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testbooksell`
--

INSERT INTO `testbooksell` (`id`, `branch`, `batch`, `stdId`, `stdName`, `mobile`, `bookName`, `bookQuantity`, `unitPrice`, `totalPrice`) VALUES
(1, 'Mirpur-1', '101', '5001', 'Salim Reza', '01859748598', 'Spoken English', '5', '100', '500'),
(2, 'Mirpur-2', '102', '5002', 'China Mandal', '01859748599', 'Spoken English1', '10', '101', '1000'),
(3, 'Mirpur-10', '102', '5002', 'Rimon', '01850048598', 'Spoken English2', '2', '100', '200'),
(4, 'Barishal', '104', '45645', 'Mahi1', '01921444455', 'Fluent Spoken', '5', '500', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `stdId` varchar(50) DEFAULT NULL,
  `stdName` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `paidAmount` varchar(50) DEFAULT NULL,
  `transectionType` varchar(100) DEFAULT NULL,
  `admin` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `stdId`, `stdName`, `branch`, `paidAmount`, `transectionType`, `admin`, `date`) VALUES
(8, '1211211', 'mahsin', 'Barishal', '2200', 'Book Sell', 'mahsin', '2017-02-26'),
(9, '101', 'mm', 'Barishal', '1200', 'Book Sell', 'mahsin', '2017-02-26'),
(10, '1211211', 'mm', 'Mirpur-1', '4000', 'Book Sell', 'nazmul', '2017-02-26'),
(11, '100001', 'najumi', 'Mirpur-1', '3800', 'Book Sell', 'nazmul', '2017-02-26'),
(12, '101', 'Mahi', 'Mirpur-1', '1500', 'Book Sell', 'nazmul', '2017-02-26'),
(13, '1015', 'Rimon', 'Barishal', '200', 'Book Sell', 'mahsin', '2017-02-26'),
(14, '1211211', 'Mahi', 'Barishal', '3000', 'Book Sell', 'mahsin', '2017-02-26'),
(15, '1211211', 'Mahi', 'Barishal', '3000', 'Book Sell', 'mahsin', '2017-02-26'),
(16, '01522124785', 'Mimi', 'Barishal', '1500', 'Certificate Fee', 'mahsin', '2017-02-26'),
(17, '01921444455', 'Tamanna', 'Barishal', '1500', 'MOCK Test', 'mahsin', '2017-02-27'),
(18, '01897596587', 'Tarek Rahman ', 'Barishal', '5000', 'Transfer Fee', 'mahsin', '2017-02-27'),
(19, '100001', 'Mahi', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-02-27'),
(20, '1211211', 'mm', 'Barishal', '1200', 'Book Sell', 'mahsin', '2017-02-27'),
(21, '11', 'mahsin', 'Barishal', '200', 'Book Sell', 'mahsin', '2017-02-28'),
(22, '6', '', 'Barishal', '2500', 'Admission', 'mahsin', '2017.03.01'),
(23, '1001', 'Nazmul Shahadat', 'Barishal', '200', 'Book Sell', 'mahsin', '2017-03-01'),
(24, '550', 'Farjana Mithila', 'Barishal', '200', 'Book Sell', 'mahsin', '2017-03-01'),
(25, '550', 'Farjana Mithila', 'Barishal', '200', 'Book Sell', 'mahsin', '2017-03-01'),
(26, '550', 'Farjana Mithila', 'Barishal', '200', 'Book Sell', 'mahsin', '2017-03-01'),
(27, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(28, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(29, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(30, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(31, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(32, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(33, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(34, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(35, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(36, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(37, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(38, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(39, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(40, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(41, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(42, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(43, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(44, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(45, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(46, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(47, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(48, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(49, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(50, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(51, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(52, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(53, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(54, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(55, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(56, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(57, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(58, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(59, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(60, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(61, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(62, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(63, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(64, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(65, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(66, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(67, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(68, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(69, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(70, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(71, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(72, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(73, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(74, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(75, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(76, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(77, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(78, '1211211', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(79, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(80, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(81, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(82, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(83, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(84, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(85, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(86, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(87, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(88, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(89, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(90, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(91, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(92, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(93, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(94, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(95, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(96, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(97, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(98, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(99, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(100, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(101, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(102, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(103, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(104, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(105, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(106, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(107, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(108, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(109, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(110, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(111, '5002', 'Asma Sultana Shompa', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(112, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(113, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(114, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(115, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(116, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(117, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(118, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(119, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(120, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(121, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(122, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(123, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(124, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(125, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(126, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(127, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(128, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(129, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(130, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(131, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(132, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(133, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(134, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(135, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(136, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(137, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(138, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(139, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(140, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(141, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(142, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(143, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(144, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(145, '11', 'mm', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(146, '11', 'Khadiza Sultana Lucky', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(147, '11', 'Khadiza Sultana Lucky', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(148, '11', 'Khadiza Sultana Lucky', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(149, '11', 'Khadiza Sultana Lucky', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(150, '11', 'Khadiza Sultana Lucky', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(151, '11', 'Khadiza Sultana Lucky', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(152, '11', 'Khadiza Sultana Lucky', 'Barishal', '800', 'Book Sell', 'mahsin', '2017-03-01'),
(153, '11', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(154, '11', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(155, '11', 'mahsin', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-01'),
(156, '45645', 'Mahi1', 'Barishal', '1000', 'Book Sell', 'mahsin', '2017-03-01'),
(157, '34', 'mm', 'Barishal', '750', 'Book Sell', 'mahsin', '0'),
(158, '34', 'mm', 'Barishal', '750', 'Book Sell', 'mahsin', '2017-03-07'),
(159, '44', 'nn', 'Barishal', '1500', 'Book Sell', 'mahsin', '2017-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `visitorsexistingtable`
--

CREATE TABLE `visitorsexistingtable` (
  `id` int(11) NOT NULL,
  `visitorsName` varchar(100) DEFAULT NULL,
  `visitorsContact` varchar(100) DEFAULT NULL,
  `visitorsAddress` varchar(200) DEFAULT NULL,
  `preferredCourse` varchar(100) DEFAULT NULL,
  `preferredDate` varchar(50) DEFAULT NULL,
  `preferredTime` varchar(50) DEFAULT NULL,
  `preferredBranch` varchar(50) DEFAULT NULL,
  `visitDate` varchar(30) DEFAULT NULL,
  `callTimes` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitorsexistingtable`
--

INSERT INTO `visitorsexistingtable` (`id`, `visitorsName`, `visitorsContact`, `visitorsAddress`, `preferredCourse`, `preferredDate`, `preferredTime`, `preferredBranch`, `visitDate`, `callTimes`, `status`) VALUES
(15, 'Mahsin', '01912147370', 'Dhaka', 'IELTS with Spoken', '2017-04-01', '6 pm', 'Mirpur-1', '', 0, 1),
(16, 'Mahsin', '01912147370', 'Dhaka', 'IELTS with Spoken', '2017-04-01', '6 pm', 'Mirpur-1', '', 0, 1),
(17, 'Mahsin', '01912147370', 'Dhaka', 'IELTS with Spoken', '2017-04-01', '6 pm', 'Mirpur-1', '', 0, 1),
(18, 'Mahsin', '01912147370', 'Dhaka', 'IELTS with Spoken', '2017-04-01', '6 pm', 'Mirpur-1', '', 0, 1),
(19, 'Mahsin', '01912147370', 'Dhaka', 'IELTS with Spoken', '2017-04-01', '6 pm', 'Mirpur-1', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitorsinfo`
--

CREATE TABLE `visitorsinfo` (
  `id` int(11) NOT NULL,
  `visitorsName` varchar(100) DEFAULT NULL,
  `visitorsContact` varchar(50) DEFAULT NULL,
  `visitorsAddress` varchar(200) DEFAULT NULL,
  `preferredCourse` varchar(100) DEFAULT NULL,
  `preferredDate` varchar(50) DEFAULT NULL,
  `preferredTime` varchar(50) DEFAULT NULL,
  `preferredBranch` varchar(50) DEFAULT NULL,
  `visitDate` varchar(50) DEFAULT NULL,
  `callTimes` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitorsinfo`
--

INSERT INTO `visitorsinfo` (`id`, `visitorsName`, `visitorsContact`, `visitorsAddress`, `preferredCourse`, `preferredDate`, `preferredTime`, `preferredBranch`, `visitDate`, `callTimes`, `status`) VALUES
(26, 'Mahsin', '01912147370', 'Dhaka', 'IELTS with Spoken', '2017-04-01', '6 pm', 'Mirpur-1', '2017-03-05', 8, 1),
(27, 'Lucky', '01852963258', 'Narsingdi', 'Spoken with Writing', '2018-08-05', '5 pm', 'Mirpur-1', '2017-03-05', 11, 1),
(28, 'ghsdf', 'dfgd', 'dsfg', 'IELTS with Spoken', '2017-03-22', 'dfsg', 'Mirpur-2', '2017-03-05', 2, 1),
(29, 'rt', 'rt', 'erwt', 'Kids English', '2017-03-25', 'ertew', 'Mirpur-2', '2017-04-06', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `xemployee`
--

CREATE TABLE `xemployee` (
  `id` int(11) NOT NULL,
  `empId` varchar(20) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  `empName` varchar(50) DEFAULT NULL,
  `fathersName` varchar(30) DEFAULT NULL,
  `mothersName` varchar(30) DEFAULT NULL,
  `education` varchar(30) DEFAULT NULL,
  `joiningDate` varchar(30) DEFAULT NULL,
  `basicSalary` varchar(20) DEFAULT NULL,
  `increment` varchar(20) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `empStatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xemployee`
--

INSERT INTO `xemployee` (`id`, `empId`, `position`, `empName`, `fathersName`, `mothersName`, `education`, `joiningDate`, `basicSalary`, `increment`, `branch`, `empStatus`) VALUES
(5, '2', 'Senior Teacher', 'Md. Nazmul Shahadat', 'Md. Ajgar Ali', 'Rowshan Ara Begum', 'B.Sc in CSE', '2017-03-23', '25000', '2500', 'Mirpur-1', 'Part Time'),
(6, '1', 'Director', 'Salim Reza Ratan1', 'Hasen Ali Mulla', 'Rabia Begum', 'B.Sc in CSE', '2017-05-10', '25000', '6000', 'Barishal', 'Full Time'),
(7, '2', 'Teacher', 'Md. Nazmul Shahadat', 'Md. Ajgar Ali', 'Rowshan Ara Begum', 'B.Sc in CSE', '2017-02-05', '30000', '3000', 'Mirpur-1', 'Part Time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`adminUserName`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookentrytable`
--
ALTER TABLE `bookentrytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookstocktable`
--
ALTER TABLE `bookstocktable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbnNo` (`isbnNo`);

--
-- Indexes for table `branchlist`
--
ALTER TABLE `branchlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branchName` (`branchName`);

--
-- Indexes for table `costtable`
--
ALTER TABLE `costtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`batchNo`);

--
-- Indexes for table `coursetable`
--
ALTER TABLE `coursetable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courseName` (`courseName`);

--
-- Indexes for table `duetable`
--
ALTER TABLE `duetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feetable`
--
ALTER TABLE `feetable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feeTitle` (`feeTitle`);

--
-- Indexes for table `incometable`
--
ALTER TABLE `incometable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `increment`
--
ALTER TABLE `increment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`stdId`);

--
-- Indexes for table `testbooksell`
--
ALTER TABLE `testbooksell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitorsexistingtable`
--
ALTER TABLE `visitorsexistingtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitorsinfo`
--
ALTER TABLE `visitorsinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xemployee`
--
ALTER TABLE `xemployee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bookentrytable`
--
ALTER TABLE `bookentrytable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `bookstocktable`
--
ALTER TABLE `bookstocktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `branchlist`
--
ALTER TABLE `branchlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `costtable`
--
ALTER TABLE `costtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `batchNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coursetable`
--
ALTER TABLE `coursetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `duetable`
--
ALTER TABLE `duetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feetable`
--
ALTER TABLE `feetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `incometable`
--
ALTER TABLE `incometable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `increment`
--
ALTER TABLE `increment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `stdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `testbooksell`
--
ALTER TABLE `testbooksell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `visitorsexistingtable`
--
ALTER TABLE `visitorsexistingtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `visitorsinfo`
--
ALTER TABLE `visitorsinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `xemployee`
--
ALTER TABLE `xemployee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
