-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 03:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donors_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `allmessages`
--

CREATE TABLE `allmessages` (
  `messageFrom` varchar(50) NOT NULL,
  `messageTo` varchar(50) NOT NULL,
  `messageBody` varchar(500) NOT NULL,
  `dateTime` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allmessages`
--

INSERT INTO `allmessages` (`messageFrom`, `messageTo`, `messageBody`, `dateTime`) VALUES
('ziaul_huda', 'ziaul_huda', 'adad', '25/07/2017 10:30:43 pm');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodGroup` varchar(10) NOT NULL,
  `age` varchar(5) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`name`, `gender`, `bloodGroup`, `age`, `availability`, `contactNumber`, `address`, `email`, `username`, `password`, `userType`) VALUES
('Bappy', 'Male', 'AB+', '23', 'Available', '+8801684211477', 'Gazipur', 'nh_bappy@gmail.com', 'nh_bappy', '831f294d9e68691de228682f96abaf4d', 'Admin'),
('Rashadul', 'Male', 'A+', '23', 'Not Available', '+8801681331229', 'Gazipur', 'rashadulalam410@gmail.com', 'rashadul_alam', '96895c86d4606acb65d5d1b436809663', 'User'),
('Fuad Hasan', 'Male', 'A+', '109', 'Not Available', '+8801911111111', 'Khilkhet', 'fuadhasan@gmail.com', 'fuad_hasan', 'd0b0caa56fee5e734ca286516b5885dc', 'Admin'),
('Hasib', 'Male', 'O+', '24', 'Available', '+8801930603411', 'Gazipur', 'hasibulhasan462@gmail.com', 'hasibul_hasan', '0569fc867c8686ac7d85df5bbbd50491', 'User'),
('ziaul huda', 'Male', 'O+', '23', 'Available', '01777664033', 'Ibrahimpur', 'iks_sohel@live.com', 'ziaul_huda', '6990e625299f6ffc900dd5ffd2278df5', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
