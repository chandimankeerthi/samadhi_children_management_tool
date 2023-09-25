-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 08:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(50) NOT NULL,
  `initialname` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `bdo` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `initialname`, `fullname`, `bdo`, `gender`, `image`) VALUES
(2, 'N.H.Sandun', 'Nadaa Heana sandun', '1999-02-08', 'male', ''),
(4, 'L.Siriwardhana', 'Lalithya Siriwardhana', '1999-02-09', 'female', ''),
(8, 'P.Ravindu', 'Pahasra Ravindu', '2003-06-01', 'male', '');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationid` int(11) NOT NULL,
  `donarName` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationid`, `donarName`, `contact`, `address`, `type`) VALUES
(1, 'Sudesh', 763358889, 'Homagama', 0),
(2, 'Lakmini', 764447789, 'Hambanthota', 0),
(3, 'Nadun', 724367890, 'Mahiyanganya ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `id` int(50) NOT NULL,
  `initialname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `bdo` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `contact` int(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`id`, `initialname`, `firstname`, `fullname`, `bdo`, `gender`, `contact`, `address`, `company`) VALUES
(1, 'P.Nadeeshani', 'Pawani', 'Pawani Nadeeshani ', '2020-12-27', 'female', 763367876, 'Gampaha', 'sunshine'),
(2, 'K.D.jayathilaka', 'Kavindu', 'Kavindu Dilashan jayathilaka', '1990-06-08', 'male', 723456783, 'Galle', 'moonlight'),
(5, 'P.Perera', 'pramode', 'Poorna Perera', '1994-07-30', 'male', 712676844, 'kegalle', 'moonlight'),
(8, 'K.Gamage', 'kasun', 'Kasun Gamagae', '1996-06-04', 'male', 721234890, 'colombo', 'sunshine');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `initialName` varchar(50) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `post` varchar(10) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `initialName`, `nic`, `gender`, `contact`, `address`, `email`, `dob`, `post`, `image`) VALUES
(1, 'Ranidu', 'Gamage', 'R.Gamage', 'estt1', 'female', 777866390, 'Kalenya', '', '1995-03-05', '', ''),
(2, 'sandun', 'Perera', 's.Perera', 'estt12', 'male', 765331789, 'kadwatha', '', '1998-06-27', '', ''),
(3, 'Tharushi', ' Mallwarchchi', 'T.Mallwarchchi', 'estt123', 'female', 716788054, 'kiribathgoda', '', '1997-08-06', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationid`);

--
-- Indexes for table `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
