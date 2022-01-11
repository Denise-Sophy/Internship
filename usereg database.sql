-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 09:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Admin', '223344'),
('Admin', '223344'),
('', '12345'),
('', '2233445566'),
('', '223344');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`) VALUES
('Survey', 'System Analysis', ' Data', 'Shuguli', 'Animation'),
('', '', ' ', '', ''),
('Data', 'Paper work  ', ' Journals', 'Networking', 'coding'),
('Data', 'Paper work  ', ' Journals', 'Networking', 'coding'),
('', '', ' ', '', ''),
('Attamark', 'Coding', ' errands', 'Networking', 'Animation'),
('', '', ' ', '', ''),
('Software engineering', 'Database connection', ' Documentation ', 'Analysis', 'Design'),
('Survey', 'System Analysis', ' Journals', 'fix computers', 'Animation'),
('A', 'B', ' c', 'D', 'E'),
('', '', ' ', '', ''),
('Data', 'System Analysis', ' Documentation ', 'fix computers', 'Hardware and software'),
('', '', ' ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`) VALUES
('Andrew Mathenge', '234#rew'),
('Ankia Njeri', 'ankia@234'),
('Denise Sophy Mutayi', '987'),
('Maureen Njogu', '1234'),
('Wangeshi Mwangi', '567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
