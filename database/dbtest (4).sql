-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2015 at 12:42 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `answered_survey`
--

CREATE TABLE IF NOT EXISTS `answered_survey` (
  `answered_survey_id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_survei` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `created_survey`
--

CREATE TABLE IF NOT EXISTS `created_survey` (
  `Survey_Name` varchar(10) NOT NULL,
  `Autor` text NOT NULL,
  `Descriere` varchar(100) NOT NULL,
  `Instructiuni` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `created_survey`
--

INSERT INTO `created_survey` (`Survey_Name`, `Autor`, `Descriere`, `Instructiuni`) VALUES
('', '', '', ''),
('Test 1', 'sadasd', 'asdasd', 'asdasda');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id_survey` int(10) NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_survey`, `Name`) VALUES
(26, ''),
(27, 'Test 1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(10) NOT NULL,
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `confirmpassword` varchar(45) NOT NULL,
  `gender` text NOT NULL,
  `level` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user`, `password`, `firstname`, `lastname`, `age`, `email`, `confirmpassword`, `gender`, `level`) VALUES
(1, 'mirelbm', '12345', 'lapusan', 'Mirel', 22, 'lapusan.mirel92@gmail.com', '12345', 'male', 'admin'),
(3, 'pw', '11111', 'power', 'user', 12, 'mireasdlb1m92@gmail.com', '11111', 'male', 'creator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answered_survey`
--
ALTER TABLE `answered_survey`
  ADD PRIMARY KEY (`answered_survey_id`), ADD KEY `id_user_idx` (`id_user`), ADD KEY `id_survey_idx` (`id_survei`);

--
-- Indexes for table `created_survey`
--
ALTER TABLE `created_survey`
  ADD PRIMARY KEY (`Survey_Name`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id_survey`), ADD KEY `Name` (`Name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_survey` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
