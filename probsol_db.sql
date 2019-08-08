-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 06:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probsol_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `role_tb`
--

CREATE TABLE `role_tb` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_tb`
--

INSERT INTO `role_tb` (`id`, `role_name`, `module`, `status`) VALUES
(28, 'Manager', 'Appointment', 'active'),
(29, 'Consultant', 'Consultation', 'active'),
(30, 'Manager', 'Appointment', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `username`, `firstname`, `lastname`, `role`, `phone`, `email`, `status`, `password`) VALUES
(1, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(2, 'Assistant Manager', 'DMM', 'LMM', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'active', ''),
(3, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'riyal.boxer54@gmail.com', 'Active', 'sag@05'),
(4, 'Sagar', 'Sagar ', 'Daslani', 'CEO', '7600424107', 'riyal.boxer54@gmail.com', 'active', 'sag@05'),
(5, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'riyal.boxer54@gmail.com', 'Inactive', 'sag@05'),
(6, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'riyal.boxer54@gmail.com', 'Active', 'sag@05'),
(7, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'riyal.boxer54@gmail.com', 'Active', 'sag@05'),
(8, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(9, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(10, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(11, 'admin', 'Sagar', 'Daslani', 'CEO', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(12, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(13, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(14, 'admin', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(15, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(16, 'bips', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(17, 'sagar', 'Sagar', 'Daslani', 'Manager', '7600424107', 'daslanisagar@gmail.com', 'Active', ''),
(18, 'sagar', 'Sagar', 'Daslani', 'CEO', '7600424107', 'daslanisagar@gmail.com', 'Active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_tb`
--
ALTER TABLE `role_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_tb`
--
ALTER TABLE `role_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
