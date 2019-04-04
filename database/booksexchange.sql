-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 03:46 PM
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
  `iBED` varchar(10) NOT NULL,
  `iImage` mediumtext NOT NULL,
  `iCategory` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`iName`, `iId`, `enroll`, `iPrice`, `iDescription`, `iBED`, `iImage`, `iCategory`) VALUES
('bcbcc', 6, '91600103060', 450, 'ncnbcn', 'exchange', 'IMG/9stp.png', 'Drafter'),
('m,a,am', 7, '91600103055', 47, 'annam', 'exchange', 'IMG/12stp.png', 'Set Square'),
('jsfnkj', 8, '91600103055', 7858, 'kjdnfkjdf', 'donate', 'IMG/15stp.png', 'Fiction'),
('new ', 9, '91600103060', 250, 'asdfjasdfg sdfghjasdfgh', 'donate', 'IMG/25stp.png', 'Notes'),
('new item', 10, '91600103060', 5000, 'jkbdsjkklsndkas', 'buy', 'IMG/2.jpg', 'Academic'),
('ahad', 11, '91600103060', 80000, 'agasfdsf', 'buy', 'IMG/1.jpg', 'Academic'),
('gjywgdhg', 12, '91600103055', 100000, 'utuytyyyyy', 'exchange', 'IMG/3stp.png', 'Set Square');

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
('74185296356', 'hjbhj', 'skjshak@gmailc.om', '6cf82ee1020caef069e753c67a97a70d'),
('753698412159', 'hjabsjk', 'gfhjskdm@gbba.com', '05f28b898c7c1a75d93fd73d59bd21a7'),
('91600103054', 'disha', 'vbnm@gmail.com', '741fd4e081208df4bb46052b08abb511'),
('91600103055', 'BHAUMIK', 'BHAUMIK.PATEL101047@MARWADIUNIVERSITY.AC.IN', '827ccb0eea8a706c4c34a16891f84e7b'),
('91600103060', 'AHAD', 'AHAD.PARMAR101322@MARWADIUNIVERSITY.AC.IN', 'e2fc714c4727ee9395f324cd2e7f331f'),
('91700212009', 'daya', 'daya@daya.com', 'e9ba487af30c6db856094c733d9f0cb7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`enrollNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `iId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
