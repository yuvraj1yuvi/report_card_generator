-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 06:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@123', '12345'),
('test@111', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `studetail`
--

CREATE TABLE `studetail` (
  `rollno` int(255) NOT NULL,
  `dob` date NOT NULL,
  `sname` char(50) NOT NULL,
  `fname` char(50) NOT NULL,
  `hindi` int(254) NOT NULL,
  `english` int(254) NOT NULL,
  `math` int(254) NOT NULL,
  `science` int(254) NOT NULL,
  `computer` int(254) NOT NULL,
  `total` int(254) NOT NULL,
  `percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studetail`
--

INSERT INTO `studetail` (`rollno`, `dob`, `sname`, `fname`, `hindi`, `english`, `math`, `science`, `computer`, `total`, `percent`) VALUES
(1, '2021-08-26', 'adasrh', 'suresh', 55, 45, 65, 78, 66, 309, 61.8),
(2, '2001-05-12', 'alok', 'amar', 45, 54, 55, 65, 66, 285, 57),
(15, '2008-03-12', 'priya', 'alok', 45, 65, 55, 88, 63, 316, 63.2),
(33, '2021-07-31', 'rinku', 'amar', 55, 66, 44, 54, 65, 284, 56.8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `studetail`
--
ALTER TABLE `studetail`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
