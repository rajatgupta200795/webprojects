-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2018 at 10:45 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcskktco_exam_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_111112`
--

CREATE TABLE `exam_111112` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `class` varchar(30) NOT NULL,
  `upload_date` varchar(20) NOT NULL,
  `Hindi_Oral` varchar(20) DEFAULT NULL,
  `English_Oral` varchar(20) DEFAULT NULL,
  `Math_Oral` varchar(20) DEFAULT NULL,
  `Poem_Oral` varchar(20) DEFAULT NULL,
  `History` varchar(20) DEFAULT NULL,
  `History_5` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_111112`
--

INSERT INTO `exam_111112` (`id`, `roll_no`, `class`, `upload_date`, `Hindi_Oral`, `English_Oral`, `Math_Oral`, `Poem_Oral`, `History`, `History_5`) VALUES
(1, '111702', 'PLAYWAY', '12/03/2018', '20', '21', '17', '19', '48', '75');

-- --------------------------------------------------------

--
-- Table structure for table `exam_111113`
--

CREATE TABLE `exam_111113` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `class` varchar(30) NOT NULL,
  `upload_date` varchar(20) NOT NULL,
  `Hindi_Oral` varchar(20) DEFAULT NULL,
  `English_Oral` varchar(20) DEFAULT NULL,
  `Math_Oral` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_111112`
--
ALTER TABLE `exam_111112`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_111113`
--
ALTER TABLE `exam_111113`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_111112`
--
ALTER TABLE `exam_111112`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam_111113`
--
ALTER TABLE `exam_111113`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
