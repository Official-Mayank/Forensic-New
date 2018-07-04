-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 06:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forensic`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `email` varchar(100) NOT NULL DEFAULT '',
  `heading` varchar(100) NOT NULL,
  `data` varchar(1000) NOT NULL,
  `blog_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`email`, `heading`, `data`, `blog_image`) VALUES
('sahirvirmani@gmail.com', '', '', '../blog_images/'),
('sahirvirmani@gmail.com', 'My first Post', 'Hello Test', '../blog_images/Passport Photo.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `email` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `email`, `password`, `age`, `gender`, `path`) VALUES
('Raju Kumar', 'kumarrajupcm@gmail.com', 'Raju@123', 90, 'Male', '../profile_images/IMG_20170617_201448.jpg'),
('Paresh Anand', 'paresh@gmail.com', 'paresh@123', 25, 'on', '../profile_images/IMG_20160805_193326.jpg'),
('Sahir Virmani', 'sahirvirmani@gmail.com', 'Sahir@123', 21, 'on', '../profile_images/IMG_20160804_204609.jpg'),
('sasf', 'sfa@xcfc', 'afsd', 25, 'Male', '../profile_images/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`heading`),
  ADD UNIQUE KEY `heading` (`heading`),
  ADD KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD CONSTRAINT `blog_details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_details` (`email`);

--
-- Constraints for table `event_details`
--
ALTER TABLE `event_details`
  ADD CONSTRAINT `event_details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_details` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
