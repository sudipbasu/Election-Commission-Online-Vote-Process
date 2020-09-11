-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 11:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online vote process`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority_login`
--

CREATE TABLE `authority_login` (
  `id` int(6) UNSIGNED NOT NULL,
  `login_email` varchar(50) DEFAULT NULL,
  `login_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authority_login`
--

INSERT INTO `authority_login` (`id`, `login_email`, `login_password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `count_vote`
--

CREATE TABLE `count_vote` (
  `VOTER_CARD_NUMBER` int(20) NOT NULL,
  `VOTE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count_vote`
--

INSERT INTO `count_vote` (`VOTER_CARD_NUMBER`, `VOTE`) VALUES
(741, 'CONGRESS'),
(789, 'BJP'),
(789456, 'BJP');

-- --------------------------------------------------------

--
-- Table structure for table `voter_data`
--

CREATE TABLE `voter_data` (
  `ID` int(6) UNSIGNED NOT NULL,
  `NAME` varchar(200) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `GENDER` varchar(8) DEFAULT NULL,
  `FATHER_HUSBAND_NAME` varchar(200) DEFAULT NULL,
  `ADDRESS` varchar(300) DEFAULT NULL,
  `PIN` varchar(20) DEFAULT NULL,
  `IMAGE` varchar(400) DEFAULT NULL,
  `VOTER_CARD_NUMBER` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter_data`
--

INSERT INTO `voter_data` (`ID`, `NAME`, `DOB`, `GENDER`, `FATHER_HUSBAND_NAME`, `ADDRESS`, `PIN`, `IMAGE`, `VOTER_CARD_NUMBER`) VALUES
(3, 'Sudip Basu', '2002-11-08', 'Male', 'PKB', 'Howrah', '78945', 'Voter_Image_76922322_e57ddb2f-5117-4fa9-8047-9c8046f81390.jpg', 0),
(4, 'Sudipa Basu', '1997-11-13', 'Female', 'Prabhat Basu', 'Kolkata        ', '711110', 'Voter_Image_45784058_82108083_2334173736805080_5412460083533578240_o.jpg', 0),
(5, 'Namita Basu', '1998-12-08', 'Female', 'Prabhat Basu', '        baksara', '711110', 'Voter_Image_61626314_1-14043_yao-ming-face-picture-image-yao-ming-girl.png', 0),
(6, 'Sudip', '2020-09-12', 'Male', 'wefe', '        qfe', '888', 'Voter_Image_46427415_user.png', 741),
(7, 'Rajdipta Paul', '2020-06-02', 'Male', 'Satyendranath Paul', 'Alipurduar        ', '711126', 'Voter_Image_44439001_IMG_20191003_142509.jpg', 789456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority_login`
--
ALTER TABLE `authority_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count_vote`
--
ALTER TABLE `count_vote`
  ADD PRIMARY KEY (`VOTER_CARD_NUMBER`);

--
-- Indexes for table `voter_data`
--
ALTER TABLE `voter_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authority_login`
--
ALTER TABLE `authority_login`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voter_data`
--
ALTER TABLE `voter_data`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
