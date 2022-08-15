-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 07:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimony_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner_preferences`
--

CREATE TABLE `partner_preferences` (
  `id` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `age_min` varchar(3) NOT NULL,
  `age_max` int(3) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `height` int(3) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `education` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `profile_status` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_status`, `username`, `password`, `email`, `dateofbirth`, `gender`) VALUES
(15, 0, 'Priom Deb', 'qwqwqw', 'priom@priomdeb.com', '1999-12-01', 'male'),
(16, 0, 'Priom Deb Shanto', 'qwerty', 'priom@deb.com', '1999-12-01', 'male'),
(17, 0, 'Priom', 'qwerty', 'priom@deb.com', '1999-12-01', 'male'),
(18, 0, 'PriomDeb ', 'qwerty', 'priom@deb.com', '1999-12-01', 'male'),
(19, 0, 'PriomDebShanto', 'qwerty', 'priom@deb.com', '1999-12-01', 'male'),
(20, 0, 'Alex', 'abcd1234', 'abcd@abcd.com', '1980-01-01', 'male'),
(21, 0, 'Robert Downey', 'ironman', 'ironman@iron.com', '2004-01-01', 'male'),
(22, 0, 'Chris', 'abcd1234', 'chris@chris.com', '2004-01-01', 'male'),
(23, 0, 'Chris Hems', 'abcd1234', 'chris@chris.org', '2004-01-01', 'male'),
(24, 0, 'ChrisHems', 'abcd1234', 'chris@chris.net', '2004-01-01', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(10) NOT NULL,
  `user_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `full_name` text NOT NULL,
  `weight` int(5) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `date_of_birth` date NOT NULL,
  `occupation` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `father_name_and_occupation` varchar(100) NOT NULL,
  `mother_name_and_occupation` varchar(100) NOT NULL,
  `brothers_number` int(5) NOT NULL,
  `sisters_number` int(5) NOT NULL,
  `about_me` text NOT NULL,
  `information_updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `user_id`, `email`, `age`, `height`, `sex`, `religion`, `district`, `division`, `country`, `marital_status`, `education`, `full_name`, `weight`, `blood_group`, `date_of_birth`, `occupation`, `annual_income`, `father_name_and_occupation`, `mother_name_and_occupation`, `brothers_number`, `sisters_number`, `about_me`, `information_updated_date`) VALUES
(117, 20, '', '', 0, 'Male', 'Not Selected', '', '', '', 'Single', 'SSC', '', 0, 'O+', '0000-00-00', '', '', '', '', 1, 1, '', '2022-08-15'),
(118, 15, '', '22', 150, 'Male', 'Hindu', 'Moulvibazar', 'Sylhet', 'Bangladesh', 'Single', 'Undergraduate', '', 80, 'O+', '1999-12-01', 'Student', '1000000', 'Prodip Lal Deb, Rtd', 'Sonchita Rani Deb, FWA', 1, 0, 'Looking for true heart.', '2022-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `user_pictures`
--

CREATE TABLE `user_pictures` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `picture_1` varchar(100) NOT NULL,
  `picture_2` varchar(100) NOT NULL,
  `picture_3` varchar(100) NOT NULL,
  `picture_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_preferences`
--
ALTER TABLE `partner_preferences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custId` (`custId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`user_id`);

--
-- Indexes for table `user_pictures`
--
ALTER TABLE `user_pictures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner_preferences`
--
ALTER TABLE `partner_preferences`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `user_pictures`
--
ALTER TABLE `user_pictures`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
