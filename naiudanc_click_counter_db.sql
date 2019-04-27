-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2017 at 03:11 PM
-- Server version: 5.5.45-cll-lve
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
-- Database: `naiudanc_click_counter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `08a4415e9d594ff960030b921d42b91e`
--

CREATE TABLE `08a4415e9d594ff960030b921d42b91e` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `08a4415e9d594ff960030b921d42b91e`
--

INSERT INTO `08a4415e9d594ff960030b921d42b91e` (`id`, `link_name`, `link_address`, `date_added`, `ip_address`, `country`, `continent`, `state`, `type`, `stayTime`) VALUES
(1, NULL, 'http://jb', '08:46:41 22/04/17', '14.139.231.9', 'India', 'Asia', 'Uttar Pradesh', 'link', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `8b66bffe00f922b7af0cbb081e15aeeb`
--

CREATE TABLE `8b66bffe00f922b7af0cbb081e15aeeb` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8b66bffe00f922b7af0cbb081e15aeeb`
--

INSERT INTO `8b66bffe00f922b7af0cbb081e15aeeb` (`id`, `link_name`, `link_address`, `date_added`, `ip_address`, `country`, `continent`, `state`, `type`, `stayTime`) VALUES
(1, NULL, 'http://www.thesaurus.com/browse/optimized', '01:00:22 23/04/17', '14.139.231.13', 'India', 'Asia', 'Uttar Pradesh', 'link', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `92d4b4c1a13f4ebecafd3a3cddcd58eb`
--

CREATE TABLE `92d4b4c1a13f4ebecafd3a3cddcd58eb` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `497b18020d74531c53e71c3aa4c27d26`
--

CREATE TABLE `497b18020d74531c53e71c3aa4c27d26` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `497b18020d74531c53e71c3aa4c27d26`
--

INSERT INTO `497b18020d74531c53e71c3aa4c27d26` (`id`, `link_name`, `link_address`, `date_added`, `ip_address`, `country`, `continent`, `state`, `type`, `stayTime`) VALUES
(1, NULL, 'http://mcskkt.com/faculity_details.php', '11:29:44 09/08/17', '14.139.231.11', 'India', 'Asia', 'Uttar Pradesh', 'link', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `670fae8ae8c517060baacb1190d893b4`
--

CREATE TABLE `670fae8ae8c517060baacb1190d893b4` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4353c6327fa1959c923c2db1e6eceb4d`
--

CREATE TABLE `4353c6327fa1959c923c2db1e6eceb4d` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `706702aa48b57f02fe9fecf8cc990708`
--

CREATE TABLE `706702aa48b57f02fe9fecf8cc990708` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `706702aa48b57f02fe9fecf8cc990708`
--

INSERT INTO `706702aa48b57f02fe9fecf8cc990708` (`id`, `link_name`, `link_address`, `date_added`, `ip_address`, `country`, `continent`, `state`, `type`, `stayTime`) VALUES
(1, NULL, 'https://www.youtube.com/watch?v=W3s9P1KYgsw', '11:40:01 17/05/17', '14.139.231.11', 'India', 'Asia', 'Uttar Pradesh', 'link', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b06074ebed96d844a84c44a8cf4d8426`
--

CREATE TABLE `b06074ebed96d844a84c44a8cf4d8426` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `click_counter`
--

CREATE TABLE `click_counter` (
  `id` int(11) NOT NULL,
  `pswd_change_id` varchar(30) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `click_counter`
--

INSERT INTO `click_counter` (`id`, `pswd_change_id`, `fname`, `username`, `date_added`, `email`, `password`) VALUES
(22, '', 'Barnypok', '3e6c94bc974e1fb2cdcd412b88bf1f31', '', 'ecrev22vtv@hotmail.com', 'HLpwwW'),
(20, '', 'arti', '706702aa48b57f02fe9fecf8cc990708', '', 'chahararti@gmail.com', '454545'),
(19, '', 'Arti', 'e14b9196d8a2575b8f8c023b3737dd65', '', 'arti.b.s09@gmail.com', '232323'),
(18, '', 'RASHMI', '8b66bffe00f922b7af0cbb081e15aeeb', '', 'gkashish167@gmail.com', '121212'),
(17, '', 'saaa', '08a4415e9d594ff960030b921d42b91e', '', 'ee', 'cfcf'),
(21, '', 'simha', '4353c6327fa1959c923c2db1e6eceb4d', '', 'simha@cabme.in', '1234567'),
(16, '', 'ghjds', '748e95c5db794a788afc6f54db14607c', '', 'hgcv', 'vujh'),
(15, '', 'rajat gupta', '670fae8ae8c517060baacb1190d893b4', '', 'guptarajat20071995@gmail.com', '111111'),
(14, '1739', 'rajat', 'eee67994264667d0d7a699c993abf727', '', 'rajatgupta200795@gmail.com', '111111'),
(23, '', 'trisha', '497b18020d74531c53e71c3aa4c27d26', '', 'trisha12@gmail.com', '121212'),
(24, '', 'yjmrcc', 'b06074ebed96d844a84c44a8cf4d8426', '', 'gvjelh@shclqu.com', '1sku0rKd'),
(25, '', 'fxofouxdmf', '92d4b4c1a13f4ebecafd3a3cddcd58eb', '', 'rbwwcv@uiifhf.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `e14b9196d8a2575b8f8c023b3737dd65`
--

CREATE TABLE `e14b9196d8a2575b8f8c023b3737dd65` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e14b9196d8a2575b8f8c023b3737dd65`
--

INSERT INTO `e14b9196d8a2575b8f8c023b3737dd65` (`id`, `link_name`, `link_address`, `date_added`, `ip_address`, `country`, `continent`, `state`, `type`, `stayTime`) VALUES
(1, NULL, 'https://www.tutorialspoint.com/jsp/jsp_hits_counter.htm', '01:02:56 23/04/17', '14.139.231.13', 'India', 'Asia', 'Uttar Pradesh', 'link', NULL),
(2, NULL, 'https://www.youtube.com/watch?v=EEnB3vDN9AI', '07:36:24 23/04/17', '14.139.231.13', 'India', 'Asia', 'Uttar Pradesh', 'link', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eee67994264667d0d7a699c993abf727`
--

CREATE TABLE `eee67994264667d0d7a699c993abf727` (
  `id` int(11) NOT NULL,
  `link_name` varchar(100) DEFAULT NULL,
  `link_address` varchar(300) DEFAULT NULL,
  `date_added` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `stayTime` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eee67994264667d0d7a699c993abf727`
--

INSERT INTO `eee67994264667d0d7a699c993abf727` (`id`, `link_name`, `link_address`, `date_added`, `ip_address`, `country`, `continent`, `state`, `type`, `stayTime`) VALUES
(1446, NULL, 'https://databuddy.co/i/?id=270847', '09:09:48 10/08/17', '106.219.129.51', 'India', 'Asia', 'MahÄrÄshtra', 'link', NULL),
(1498, NULL, 'index_of_wishes', '01:32:59 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 04'),
(1524, NULL, 'dussehraWish', '01:10:09 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 04'),
(1504, NULL, 'dussehraWish', '01:42:18 30/09/17', '112.79.132.162', 'India', 'Asia', 'MahÄrÄshtra', 'page', '00 : 15'),
(1501, NULL, 'dussehraWish', '01:38:34 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 09'),
(1502, NULL, 'dussehraWish', '01:39:14 30/09/17', '112.79.132.162', 'India', 'Asia', 'MahÄrÄshtra', 'page', '00 : 05'),
(1503, NULL, 'create_dussehra_wish', '01:39:19 30/09/17', '112.79.132.162', 'India', 'Asia', 'MahÄrÄshtra', 'page', '00 : 05'),
(1506, NULL, 'index_of_wishes', '03:28:31 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 01'),
(1507, NULL, 'create_dussehra_wish', '03:28:46 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 14'),
(1508, NULL, 'dussehraWish', '03:31:35 30/09/17', '173.252.114.118', 'United States', 'North America', 'California', 'page', '00 : 30'),
(1509, NULL, 'dussehraWish', '03:32:31 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 34'),
(1510, NULL, 'create_dussehra_wish', '03:32:53 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 13'),
(1511, NULL, 'dussehraWish', '04:22:33 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '51 : 36'),
(1512, NULL, 'create_dussehra_wish', '08:26:40 30/09/17', '157.48.22.7', 'India', 'Asia', 'India (general)', 'page', '00 : 07'),
(1513, NULL, 'dussehraWish', '08:52:31 30/09/17', '47.8.15.80', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 17'),
(1514, NULL, 'dussehraWish', '10:19:08 30/09/17', '47.8.14.83', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 13'),
(1515, NULL, 'create_dussehra_wish', '10:19:46 30/09/17', '47.8.14.83', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 35'),
(1516, NULL, 'dussehraWish', '10:20:20 30/09/17', '47.8.14.83', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 03'),
(1517, NULL, 'dussehraWish', '10:29:22 30/09/17', '106.215.179.11', 'India', 'Asia', 'RÄjasthÄn', 'page', '00 : 07'),
(1518, NULL, 'dussehraWish', '10:29:35 30/09/17', '112.79.190.31', 'India', 'Asia', 'MahÄrÄshtra', 'page', '00 : 26'),
(1519, NULL, 'create_dussehra_wish', '10:30:15 30/09/17', '106.215.179.11', 'India', 'Asia', 'RÄjasthÄn', 'page', '00 : 50'),
(1520, NULL, 'dussehraWish', '10:30:59 30/09/17', '106.215.179.11', 'India', 'Asia', 'RÄjasthÄn', 'page', '00 : 02'),
(1521, NULL, 'index_of_wishes', '10:39:24 30/09/17', '47.8.15.139', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 05'),
(1522, NULL, 'dussehraWish', '10:40:19 30/09/17', '47.8.15.139', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 03'),
(1523, NULL, 'create_dussehra_wish', '10:41:02 30/09/17', '47.8.15.139', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 42'),
(1525, NULL, 'dussehraWish', '01:10:16 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 31'),
(1526, NULL, 'dussehraWish', '01:11:17 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'page', '01 : 08'),
(1527, NULL, 'dussehraWish', '10:34:06 02/10/17', '101.212.186.8', 'India', 'Asia', 'Bengal', 'page', '00 : 03'),
(1528, NULL, 'create_dussehra_wish', '10:34:10 02/10/17', '101.212.186.8', 'India', 'Asia', 'Bengal', 'page', '00 : 03'),
(1529, NULL, 'index_of_wishes', '11:01:29 05/10/17', '112.79.184.24', 'India', 'Asia', 'MahÄrÄshtra', 'page', '00 : 05'),
(1530, NULL, 'index_of_wishes', '07:15:50 05/10/17', '112.79.184.24', 'India', 'Asia', 'MahÄrÄshtra', 'page', '00 : 43'),
(1531, NULL, 'index_of_wishes', '12:06:15 06/10/17', '112.79.158.171', 'India', 'Asia', 'MahÄrÄshtra', 'page', '00 : 01'),
(1532, NULL, 'create_dussehra_wish', '12:06:19 06/10/17', '112.79.158.171', 'India', 'Asia', 'MahÄrÄshtra', 'page', '00 : 02'),
(1533, NULL, 'dussehraWish', '10:31:44 07/10/17', '122.172.82.19', 'India', 'Asia', 'KarnÄtaka', 'page', '00 : 20'),
(1534, NULL, 'https://www.youtube.com/watch?v=4uNhUKWX5m8', '11:08:25 11/10/17', '112.79.186.72', 'India', 'Asia', 'MahÄrÄshtra', 'link', NULL),
(1535, NULL, 'http://www.naiudan.com', '12:42:44 15/10/17', '66.249.65.70', 'United States', 'North America', 'California', 'page', '00 : 00'),
(1536, NULL, 'http://movie', '04:15:17 27/10/17', '66.249.79.159', 'United States', 'North America', 'California', 'page', '00 : 00'),
(1537, NULL, 'index_of_wishes', '08:12:43 30/10/17', '14.139.231.7', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 22'),
(1538, NULL, 'create_dussehra_wish', '08:12:57 30/10/17', '14.139.231.7', 'India', 'Asia', 'Uttar Pradesh', 'page', '00 : 06'),
(1480, NULL, 'http://naiudan.com/my-wishes/create-digital-wishes-for-diwali.html', '12:42:39 30/09/17', '14.139.231.6', 'India', 'Asia', 'Uttar Pradesh', 'link', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `08a4415e9d594ff960030b921d42b91e`
--
ALTER TABLE `08a4415e9d594ff960030b921d42b91e`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `8b66bffe00f922b7af0cbb081e15aeeb`
--
ALTER TABLE `8b66bffe00f922b7af0cbb081e15aeeb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `92d4b4c1a13f4ebecafd3a3cddcd58eb`
--
ALTER TABLE `92d4b4c1a13f4ebecafd3a3cddcd58eb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `497b18020d74531c53e71c3aa4c27d26`
--
ALTER TABLE `497b18020d74531c53e71c3aa4c27d26`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `670fae8ae8c517060baacb1190d893b4`
--
ALTER TABLE `670fae8ae8c517060baacb1190d893b4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4353c6327fa1959c923c2db1e6eceb4d`
--
ALTER TABLE `4353c6327fa1959c923c2db1e6eceb4d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `706702aa48b57f02fe9fecf8cc990708`
--
ALTER TABLE `706702aa48b57f02fe9fecf8cc990708`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b06074ebed96d844a84c44a8cf4d8426`
--
ALTER TABLE `b06074ebed96d844a84c44a8cf4d8426`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `click_counter`
--
ALTER TABLE `click_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e14b9196d8a2575b8f8c023b3737dd65`
--
ALTER TABLE `e14b9196d8a2575b8f8c023b3737dd65`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eee67994264667d0d7a699c993abf727`
--
ALTER TABLE `eee67994264667d0d7a699c993abf727`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `08a4415e9d594ff960030b921d42b91e`
--
ALTER TABLE `08a4415e9d594ff960030b921d42b91e`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `8b66bffe00f922b7af0cbb081e15aeeb`
--
ALTER TABLE `8b66bffe00f922b7af0cbb081e15aeeb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `92d4b4c1a13f4ebecafd3a3cddcd58eb`
--
ALTER TABLE `92d4b4c1a13f4ebecafd3a3cddcd58eb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `497b18020d74531c53e71c3aa4c27d26`
--
ALTER TABLE `497b18020d74531c53e71c3aa4c27d26`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `670fae8ae8c517060baacb1190d893b4`
--
ALTER TABLE `670fae8ae8c517060baacb1190d893b4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `4353c6327fa1959c923c2db1e6eceb4d`
--
ALTER TABLE `4353c6327fa1959c923c2db1e6eceb4d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `706702aa48b57f02fe9fecf8cc990708`
--
ALTER TABLE `706702aa48b57f02fe9fecf8cc990708`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `b06074ebed96d844a84c44a8cf4d8426`
--
ALTER TABLE `b06074ebed96d844a84c44a8cf4d8426`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `click_counter`
--
ALTER TABLE `click_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `e14b9196d8a2575b8f8c023b3737dd65`
--
ALTER TABLE `e14b9196d8a2575b8f8c023b3737dd65`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `eee67994264667d0d7a699c993abf727`
--
ALTER TABLE `eee67994264667d0d7a699c993abf727`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1539;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
