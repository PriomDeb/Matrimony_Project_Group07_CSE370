-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 06:25 PM
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
  `userid` int(10) NOT NULL,
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

--
-- Dumping data for table `partner_preferences`
--

INSERT INTO `partner_preferences` (`id`, `userid`, `age_min`, `age_max`, `marital_status`, `height`, `religion`, `education`, `occupation`, `country`, `description`) VALUES
(7, 15, '10', 20, 'Single', 150, 'Not Selected', 'Not Selected', '', 'Not Selected', 'Truly love me.'),
(8, 25, '19', 22, 'Single', 150, 'Hindu', 'Undergraduate', 'Not applicable', 'Bangladesh', 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly. '),
(9, 26, '19', 22, 'Single', 134, 'Hindu', 'Undergraduate', 'Any occupation', 'Bangladesh', 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.'),
(10, 27, '20', 28, 'Single', 150, 'Hindu', 'Undergraduate', 'Any occupation', 'Bangladesh', 'This a demo about me to illustrate the functionality of this project is working as per need. We write a sample demo about me while updating the profile information. If you can see this text in the about me section of a user profile, that means the functionality of the mysql is working correctly.  '),
(11, 28, '19', 28, 'Single', 152, 'Hindu', 'Undergraduate', 'Any occupation', 'Bangladesh', 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.'),
(12, 29, '21', 26, 'Single', 150, 'Hindu', 'Undergraduate', 'Businessman', 'Bangladesh', 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.'),
(13, 30, '28', 32, 'Single', 158, 'Hindu', 'Undergraduate', 'Bank Employee', 'Bangladesh', 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.'),
(14, 31, '20', 26, 'Single', 150, 'Hindu', 'HSC', 'Any occupation', 'Bangladesh', 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.'),
(15, 32, '19', 22, 'Single', 152, 'Muslim', 'Undergraduate', 'Any Occupation', 'Bangladesh', 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.'),
(16, 33, '22', 32, 'Single', 150, 'Muslim', 'Undergraduate', 'Any occupation', 'Bangladesh', 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.');

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
  `secret_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_status`, `username`, `password`, `email`, `secret_code`) VALUES
(15, 0, 'Priom Deb', 'qwqwqw', 'priom@priomdeb.com', 'yellow20'),
(25, 0, 'Supantho Bormon', 'supantho', 'supantho@gmail.com', 'black40'),
(26, 0, 'Anindya Dhar', 'anindya', 'anindya@gmail.com', 'red60'),
(27, 0, 'Niladri Roy', 'niladri', 'niladri@gmail.com', 'red08'),
(28, 0, 'Susmita Dash', 'susmita', 'susmita@gmail.com', 'pink10'),
(29, 0, 'Tonni Deb', 'abcd1234', 'tonni@gmail.com', 'orange12'),
(30, 0, 'Shruti Paul', 'shruti', 'shruti@gmail.com', 'chocolate06'),
(31, 0, 'Pritom Deb', 'pritom', 'pritom@gmail.com', 'red10'),
(32, 0, 'Asibur Rahman Bhuiya', 'asibur', 'asibur@gmail.com', 'purple10'),
(33, 0, 'Kuasha Rahman', 'kuasha', 'kuasha@gmail.com', 'pink66');

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
(118, 15, '', '23', 150, 'Male', 'Hindu', 'Moulvibazar', 'Sylhet', 'Bangladesh', 'Single', 'Undergraduate', 'Priom Deb', 78, 'O+', '1999-12-01', 'Student', '1000000', 'Prodip Lal Deb, Retired', 'Sonchita Rani Deb, FWA', 1, 0, 'Looking for true heart.', '2022-08-15'),
(119, 25, '', '25', 160, 'Male', 'Hindu', 'Sylhet', 'Sylhet', 'Bangladesh', 'Single', 'Postgraduate', 'Supantho Bormon', 64, 'O+', '1997-01-25', 'UNO', '480000', 'Shailesh Bormon, Retired', 'Shefali Bormon, Housewife', 2, 0, 'This a demo about me to illustrate the functionality of this project is working as per need. We write a sample demo about me while updating the profile information. If you can see this text in the about me section of a user profile, that means the functionality of the mysql is working correctly. ', '2022-08-24'),
(120, 26, '', '22', 162, 'Male', 'Hindu', 'Chittagong', 'Chittagong', 'Bangladesh', 'Single', 'Undergraduate', 'Anindya Dhar', 64, 'O+', '1999-01-01', 'Finance Coordinator, Touristazaa', '400000', 'Arindham Dhar, Officer at Jute Industry', 'Boni Dhar, Housewife', 0, 1, 'This a demo about me to illustrate the functionality of this project is working as per need. We write a sample demo about me while updating the profile information. If you can see this text in the about me section of a user profile, that means the functionality of the mysql is working correctly. ', '2022-08-24'),
(121, 27, '', '22', 140, 'Male', 'Hindu', 'Sylhet', 'Sylhet', 'Bangladesh', 'Single', 'HSC', 'Niladri Roy', 56, 'O+', '2000-02-10', 'Student', '100000', 'Sajal Roy, Businessman', 'Dipti Roy, Teacher', 1, 2, 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.', '2022-08-24'),
(122, 28, '', '22', 148, 'Female', 'Hindu', 'Moulvibazar', 'Sylhet', 'Bangladesh', 'Single', 'HSC', 'Susmita Dash', 56, 'O+', '1998-04-12', 'Student', '100000', 'Mohesh Dash', 'Rekha Das, Retired', 1, 3, 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.', '2022-08-24'),
(123, 29, '', '21', 140, 'Female', 'Hindu', 'Sylhet', 'Sylhet', 'Bangladesh', 'Single', 'HSC', 'Tonni Deb', 52, 'O+', '2001-07-12', 'Not applicable', 'Not applicable', 'Suresh Deb, Businessman', 'Rita Deb, Housewife', 1, 2, 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.', '2022-08-24'),
(124, 30, '', '28', 154, 'Female', 'Hindu', 'Moulvibazar', 'Sylhet', 'Bangladesh', 'Single', 'Undergraduate', 'Shruti Paul', 60, 'O+', '1994-02-14', 'Bank Employee', '360000', 'Kanuchandra Paul, Teacher', 'Smriti Paul, Teacher', 1, 1, 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.', '2022-08-24'),
(125, 31, '', '30', 152, 'Male', 'Hindu', 'Moulvibazar', 'Sylhet', 'Bangladesh', 'Single', 'HSC', 'Pritom Deb', 76, 'O+', '1992-12-12', 'Sales and Bookings Manager, SKD Amar Bari Resort', '240000', 'Prodip Lal Deb, Retired', 'Sonchita Rani Deb, FWA', 1, 0, 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.', '2022-08-25'),
(126, 32, '', '22', 152, 'Male', 'Muslim', 'Dhaka', 'Dhaka', 'Bangladesh', 'Single', 'Undergraduate', 'Asibur Rahman Bhuiyan', 60, 'O+', '2000-07-06', 'Management Head, Touristazaa', '412000', 'Abdur Rahman Bhuiyan, DMD', 'Amena Rahman, Housewife', 1, 0, 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.', '2022-08-25'),
(127, 33, '', '22', 144, 'Female', 'Muslim', 'Thakurgaon', 'Thakurgaon', 'Bangladesh', 'Single', 'Undergraduate', 'Kaniz Mehrin Kuasha', 66, 'A-', '2000-01-10', 'Marketing and Sales, Touristazaa', '406000', 'Mosaddek Rahman, Businessman', 'Reshmi Mehrin, Housewife', 1, 2, 'This a demo description to illustrate the functionality of this project is working as per need. We write a sample demo description while updating the profile information. If you can see this text in the description section of a user profile, that means the functionality of the mysql is working correctly.', '2022-08-25');

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
-- Dumping data for table `user_pictures`
--

INSERT INTO `user_pictures` (`id`, `user_id`, `picture_1`, `picture_2`, `picture_3`, `picture_4`) VALUES
(32, 15, 'Priom Deb (Blazer).png', '', '', ''),
(33, 31, 'happy-g2fef733a3_1920.jpg', '', '', ''),
(34, 32, 'man-g4ae418c02_1920.jpg', '', '', ''),
(35, 33, 'woman-gb6ac96adf_1920.jpg', '', '', ''),
(36, 25, 'pexels-amar-preciado-13085461.jpg', '', '', ''),
(37, 26, 'pexels-italo-melo-2379005.jpg', '', '', ''),
(38, 27, 'pexels-andrea-piacquadio-733872.jpg', '', '', ''),
(39, 28, 'pexels-bruno-salvadori-2448958.jpg', '', '', ''),
(40, 29, 'pexels-dalila-dalprat-1853050.jpg', '', '', ''),
(41, 30, 'pexels-raka-miftah-3522693.jpg', '', '', '');

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
  ADD UNIQUE KEY `custId` (`userid`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `user_pictures`
--
ALTER TABLE `user_pictures`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
