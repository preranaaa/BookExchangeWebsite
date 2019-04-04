-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 04:05 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksexchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `iName` varchar(50) NOT NULL,
  `iId` int(10) NOT NULL,
  `enroll` varchar(12) NOT NULL,
  `iPrice` int(5) NOT NULL,
  `iDescription` varchar(500) NOT NULL,
  `iBED` int(1) NOT NULL,
  `iImage` varchar(100) NOT NULL,
  `iCategory` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`iName`, `iId`, `enroll`, `iPrice`, `iDescription`, `iBED`, `iImage`, `iCategory`) VALUES
('xyz', 12345, '91600103055', 250, 'shagjak', 1, 'homy3.jpg', 'Novel');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `enrollNo` varchar(12) NOT NULL,
  `uName` varchar(100) NOT NULL,
  `uEmail` varchar(100) NOT NULL,
  `uPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`enrollNo`, `uName`, `uEmail`, `uPassword`) VALUES
('12345678910', 'DIPANSHU', 'dipu@gmail.com', 'daa96d9681a21445772454cbddf0cac1'),
('74185296312', 'kjnas', 'jhvsdh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('91600103055', 'BHAUMIK', 'BHAUMIK.PATEL101047@MARWADIUNIVERSITY.AC.IN', '827ccb0eea8a706c4c34a16891f84e7b'),
('91600103060', 'AHAD', 'AHAD.PARMAR101322@MARWADIUNIVERSITY.AC.IN', 'e2fc714c4727ee9395f324cd2e7f331f'),
('91700212009', 'daya', 'daya@daya.com', 'e9ba487af30c6db856094c733d9f0cb7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`enrollNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
