-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 12:21 PM
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
-- Database: `kanzucode`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `organisation` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `f_nem` varchar(200) NOT NULL,
  `l_nem` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `kids` varchar(200) NOT NULL,
  `mary` varchar(200) NOT NULL,
  `tv` varchar(200) NOT NULL,
  `radio` varchar(200) NOT NULL,
  `car` varchar(200) NOT NULL,
  `father` varchar(200) NOT NULL,
  `mother` varchar(200) NOT NULL,
  `formID` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`ID`, `username`, `organisation`, `location`, `f_nem`, `l_nem`, `age`, `kids`, `mary`, `tv`, `radio`, `car`, `father`, `mother`, `formID`, `date`) VALUES
(1, 'mutale jether', 'Action 4 Health Uganda', 'Ntinda', 'Jether', 'Mutale', '24', '4', 'yes', 'yes', 'yes', 'yes', 'John muganga', 'joy muganga', '1841501688', '2023-08-21 10:50:01'),
(2, 'mutale jether', 'BrazAfric Enterprises (U) Ltd', 'Bugolobi', 'Dan', 'kimuli', '24', '4', 'yes', 'yes', 'yes', 'yes', 'KIberu  mark', 'Nakirija Annet', '6960882457', '2023-08-21 10:51:13'),
(3, 'mutale jether', 'Twaha Childrens Home', 'Kampala', 'Charles', 'Tamale', '24', '3', 'yes', 'yes', 'yes', 'yes', 'Joel sebuguzi', 'Annet Maria', '362144234', '2023-08-21 10:53:26'),
(4, 'mutale jether', 'Sanyu babies Home', 'Ntinda', 'Kawalya', 'Kays', '24', '2', 'yes', 'yes', 'yes', 'yes', 'John mugangafagasgsgfs', 'tereza', '7232117933', '2023-08-21 12:24:53'),
(5, 'mutale jether', 'Sanyu babies Home', 'Ntinda', 'Kawalya', 'Kays', '24', '2', 'yes', 'yes', 'yes', 'yes', 'John muganga', 'tereza maria', '9047230525', '2023-08-21 12:25:15'),
(6, 'mutale jether', 'Sanyu babies gasgagag', 'Ntindaagagdg', 'Kawalya', 'Kays kiberu', '24', '2', 'yes', 'yes', 'yes', 'yes', 'John muganga', 'tereza mariasfdfa', '6402509893', '2023-08-21 12:25:38'),
(7, 'mutale jether', 'kawuma', 'kampala', 'Jether', 'Mutale', '21', '3', 'yes', 'yes', 'yes', 'yes', 'kibule', 'mary', 'JB7997341928', '2023-08-21 13:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `organisations`
--

CREATE TABLE `organisations` (
  `id` int(11) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `logo`, `name`, `location`, `type`) VALUES
(1, '4h.png', 'Action 4 Health Uganda', 'kampala', 'NGO'),
(2, 'ps.png', 'BrazAfric Enterprises (U) Ltd', 'bugolobi', 'private company');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'mutale jether', 'jether', 'mutale', 'jether@gmail.com', 'musawo'),
(2, 'user user', 'user', 'user', 'user@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `organisations`
--
ALTER TABLE `organisations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `organisations`
--
ALTER TABLE `organisations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
