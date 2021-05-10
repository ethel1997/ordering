-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 03:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mua`
--

-- --------------------------------------------------------

--
-- Table structure for table `applymua`
--

CREATE TABLE `applymua` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applymua`
--

INSERT INTO `applymua` (`id`, `fname`, `lname`, `mname`, `age`, `address`, `email`, `gender`, `contactno`, `price`, `status`) VALUES
(7, 'liza', 'soberano', 'liz', 20, 'manila', 'liza@gmail.com', 'Female', '09998453331', '500.00', 'Approved'),
(8, 'dexy', 'avenido', 'tamsi', 23, 'Agus,Lapu-Lapu', 'dexy@gmail.com', 'Female', '094545322323', '350.00', 'Approved'),
(12, 'hazel', 'arong', 'postanes', 27, 'Lapu-Lapu', 'hazel@gmail.com', 'Female', '09484645432', '250.00', 'Approved'),
(14, 'kyle', 'canete', 'godornes', 21, 'Lapu-Lapu', 'kyle@gmail.com', 'Male', '0923234445', '350.00', 'Approved'),
(15, 'lara', 'arong', 'alcantara', 5, 'Mandaue', 'lara@gmail.com', 'Female', '094835485485', '450.00', 'Approved'),
(16, 'dd', 'dfgfgd', 'dfeg', 21, 'cebu', 'dd@gmail.com', 'Male', '0570679569', '500.00', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `bookform`
--

CREATE TABLE `bookform` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `MEmail` varchar(50) NOT NULL,
  `timeob` time NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookform`
--

INSERT INTO `bookform` (`id`, `fname`, `lname`, `mname`, `age`, `address`, `email`, `contactno`, `dates`, `MEmail`, `timeob`, `status`) VALUES
(29, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-03-22', 'liza@gmail.com', '13:30:00', 'Approved'),
(30, 'uc', 'l', 'm', 50, 'mandaue', 'uclm@gmail.com', '09123456789', '2109-03-21', 'dexy@gmail.com', '09:30:00', 'Approved'),
(35, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-03-30', 'hazel@gmail.com', '12:30:00', 'Approved'),
(36, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-03-21', 'dexy@gmail.com', '09:30:00', 'Approved'),
(37, 'noreen', 'giangan', 'murillo', 20, 'danao', 'noreen@gmail.com', '0912334556', '2019-03-22', 'dexy@gmail.com', '13:03:00', 'Approved'),
(38, 'noreen', 'giangan', 'murillo', 20, 'danao', 'noreen@gmail.com', '0912334556', '2019-09-22', 'hazel@gmail.com', '14:30:00', 'Approved'),
(39, 'zara', 'arong', 'alcantara', 12, 'Mandaue', 'zasha@gmail.com', '09385747322', '2019-03-02', 'dd@gmail.com', '12:00:00', 'Approved'),
(40, 'zara', 'arong', 'alcantara', 12, 'Mandaue', 'zasha@gmail.com', '09385747322', '2019-11-23', 'hazel@gmail.com', '12:00:00', 'Approved'),
(45, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-03-28', 'lara@gmail.com', '13:03:00', 'Approved'),
(46, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-03-30', 'liza@gmail.com', '08:30:00', 'Approved'),
(54, 'zara', 'arong', 'alcantara', 12, 'Mandaue', 'zasha@gmail.com', '09385747322', '2019-09-09', 'lara@gmail.com', '09:30:00', 'Approved'),
(57, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-11-11', 'liza@gmail.com', '11:11:00', 'pending...'),
(58, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-11-11', 'dexy@gmail.com', '11:11:00', 'Approved'),
(59, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-12-12', 'kyle@gmail.com', '12:12:00', 'Approved'),
(60, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-09-22', 'lara@gmail.com', '14:30:00', 'Approved'),
(61, 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu', 'rene@gmail.com', '09565561759', '2019-09-22', 'dd@gmail.com', '14:30:00', 'Approved'),
(63, 'zara', 'arong', 'alcantara', 12, 'Mandaue', 'zasha@gmail.com', '09385747322', '2019-11-23', 'dd@gmail.com', '12:00:00', 'pending...'),
(64, 'zara', 'arong', 'alcantara', 12, 'Mandaue', 'zasha@gmail.com', '09385747322', '2019-11-23', 'dd@gmail.com', '12:00:00', 'pending...');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`, `mname`, `age`, `address`, `email`, `contactno`, `gender`, `price`, `type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 23, 'cebu', 'admin@gmail.com', '2147483647', 'Male', '0.00', 'admin'),
(2, 'rene', 'rene', 'rene', 'arong', 'postanes', 20, 'Agus,Lapu-Lapu City', 'rene@gmail.com', '09565561759', 'Male', '0.00', 'customer'),
(6, 'noreen', 'noreen', 'noreen', 'giangan', 'murillo', 20, 'danao city', 'noreen@gmail.com', '0912334556', 'Female', '0.00', 'customer'),
(7, 'liza', 'liza', 'liza', 'soberano', 'liz', 20, 'manila', 'liza@gmail.com', '09998453331', 'Female', '500.00', 'Mua'),
(8, 'kyle', 'kyle', 'kyle', 'canete', 'godornes', 21, 'Lapu-Lapu City', 'kyle@gmail.com', '0923234445', 'Male', '350.00', 'Mua'),
(9, 'dexy', 'dexy', 'dexy', 'avenido', 'tamsi', 23, 'Lapu-Lapu City', 'dexy@gmail.com', '094545322323', 'Female', '350.00', 'Mua'),
(10, 'uclm', 'uclm', 'uc', 'l', 'm', 50, 'mandaue', 'uclm@gmail.com', '09123456789', 'Male', '0.00', 'customer'),
(11, 'hazel', 'hazel', 'hazel', 'arong', 'postanes', 27, 'Lapu-Lapu City', 'hazel@gmail.com', '09484645432', 'Female', '250.00', 'Mua'),
(12, 'dd', 'dd', 'dd', 'dfgfgd', 'dfeg', 21, 'cebu', 'dd@gmail.com', '0570679569', 'Male', '500.00', 'Mua'),
(15, 'lara', 'lara', 'lara', 'arong', 'alcantara', 5, 'Mandaue City', 'lara@gmail.com', '094835485485', 'Female', '450.00', 'Mua'),
(16, 'zara', 'zara', 'zara', 'arong', 'alcantara', 12, 'Mandaue', 'zasha@gmail.com', '09385747322', 'Female', '0.00', 'customer'),
(18, 'zara', 'dexy', 'dq', 'sd', 'adsd', 12, 'ccs', 'sdd', '21324556', 'Male', '232.00', 'Mua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applymua`
--
ALTER TABLE `applymua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookform`
--
ALTER TABLE `bookform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applymua`
--
ALTER TABLE `applymua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bookform`
--
ALTER TABLE `bookform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
