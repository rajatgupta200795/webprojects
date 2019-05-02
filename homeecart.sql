-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 08:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeecart`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `direction` varchar(5) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `add_date` varchar(15) NOT NULL,
  `add_time` varchar(15) NOT NULL,
  `mssg_text` text NOT NULL,
  `item_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `direction`, `status`, `add_date`, `add_time`, `mssg_text`, `item_id`) VALUES
(44, '845c327e2bbc3282490abc1412acea0e', '1', '1', '20-05-2018', '18:39:17', 'hii\r\n', ''),
(45, '845c327e2bbc3282490abc1412acea0e', '1', '1', '20-05-2018', '18:49:32', 'hii\r\n', ''),
(46, '845c327e2bbc3282490abc1412acea0e', '1', '1', '20-05-2018', '18:51:14', 'hiiii', '3d076148d2bd656c6fcfb59f378dfef6'),
(47, '845c327e2bbc3282490abc1412acea0e', '1', '1', '20-05-2018', '18:56:47', 'HELLO', ''),
(48, '845c327e2bbc3282490abc1412acea0e', '1', '1', '20-05-2018', '18:57:09', 'TELL ME about my order status please', '3d076148d2bd656c6fcfb59f378dfef6'),
(49, '845c327e2bbc3282490abc1412acea0e', '-1', '1', '20-05-2018', '18:57:21', 'hiiii', '3d076148d2bd656c6fcfb59f378dfef6'),
(50, '845c327e2bbc3282490abc1412acea0e', '-1', '1', '20-05-2018', '18:57:51', 'we dispatch your order', '3d076148d2bd656c6fcfb59f378dfef6'),
(51, '845c327e2bbc3282490abc1412acea0e', '1', '1', '20-05-2018', '19:14:45', 'ok tankyou\r\n', '3d076148d2bd656c6fcfb59f378dfef6'),
(52, '845c327e2bbc3282490abc1412acea0e', '1', '0', '22-05-2018', '13:16:34', 'Good morning sir, its rajat', '3d076148d2bd656c6fcfb59f378dfef6');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `name`, `mobile`, `email`, `street`, `city`, `state`, `pincode`, `order_id`, `username`) VALUES
(31, 'Himanshu Singh', '7898658394', 'himanshu@gmail.com', 'govind nagar', 'kanpur', 'uttar pradesh', 208027, 'af441e5975ce83ca8355a38459386378', '845c327e2bbc3282490abc1412acea0e');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_details`
--

CREATE TABLE `inventory_details` (
  `id` int(11) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `item_link` varchar(200) NOT NULL,
  `pic_url` varchar(200) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `gst_rate` varchar(5) NOT NULL,
  `shipping_cost` varchar(5) NOT NULL,
  `length` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `width` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `packing_cost` varchar(5) NOT NULL,
  `access_1` varchar(10) NOT NULL,
  `access_2` varchar(10) NOT NULL,
  `access_3` varchar(10) NOT NULL,
  `price_1` varchar(10) NOT NULL DEFAULT '-',
  `price_2` varchar(10) NOT NULL DEFAULT '-',
  `price_3` varchar(10) NOT NULL DEFAULT '-',
  `add_date` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_details`
--

INSERT INTO `inventory_details` (`id`, `item_id`, `item_name`, `category`, `item_link`, `pic_url`, `quantity`, `gst_rate`, `shipping_cost`, `length`, `height`, `width`, `weight`, `packing_cost`, `access_1`, `access_2`, `access_3`, `price_1`, `price_2`, `price_3`, `add_date`, `description`, `status`) VALUES
(33, '3d076148d2bd656c6fcfb59f378dfef6', '9 Watt phillips LED for your home with six year warranty ', 'household', 'www.amazon.com', '9_Watt_phillips_LED_for_your_home_with_six_year_warranty__3d076148d2bd656c6fcfb59f378dfef6.jpg', '47', '18', '40', '5', '10', '5', '0.1', '5', 'Yes', 'Yes', 'Yes', '120', '100', '80', '20-05-18', '9 Watt phillips LED for your home with six year warranty. If it stops its working within 6 months then you can change it with new one.', '1'),
(34, '19a0ef50b7a23a5b1495974af1415f0e', 'A set of five multi colored towels for home', 'clothes', 'www.amazon.in', 'A_set_of_five_multi_colored_towels_for_home_19a0ef50b7a23a5b1495974af1415f0e.jpg', '40', '18', '90', '100', '100', '140', '0.9', '10', 'Yes', 'Yes', 'Yes', '500', '450', '400', '20-05-18', 'A set of five multi colored towels for home. All towels in set are very soft and able to absorb water rapidly', '1'),
(35, '2088e25f637eec9333cfb8c1527530e6', 'Intex mobile charger with six year warranty for your intex mobile set', 'mobile', 'www.amazon.in', 'Intex_mobile_charger_with_six_year_warranty_for_your_intex_mobile_set_2088e25f637eec9333cfb8c1527530e6.jpg', '20', '18', '70', '5', '15', '5', '0.3', '10', 'Yes', 'Yes', 'Yes', '200', '180', '150', '20-05-18', 'Intex mobile charger with six year warranty for your intex mobile set. its output is 5V and 1.1A and only allowed for intex moble phone.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `plan_code` varchar(10) NOT NULL,
  `account_status` varchar(10) NOT NULL,
  `add_date` varchar(15) NOT NULL,
  `add_time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `email`, `mobile`, `transaction_id`, `password`, `name`, `street`, `city`, `state`, `plan_code`, `account_status`, `add_date`, `add_time`) VALUES
(13, '845c327e2bbc3282490abc1412acea0e', 'guptarajat20071995@gmail.com', '9805476345', '28626582d8ea06351f431e724ce647df', '111111', 'Rajat Gupta', 'I-45 Barra World Bank', 'Kanpur', 'Uttar Pradesh', '2', '1', '01-04-2018', '11:02:22'),
(14, '95674b335fa1317aebe41962f0b97e72', 'amit@gmail.com', '6866475789', '1260338545d0bad5a283d78e7f714d7f', '111111', 'amit', 'yvgj', 'vjh', 'hvhv', '2', '1', '03-04-2018', '10:40:13'),
(15, 'ce16c417076a0ceb94a5999eb8be7dc1', 'rahul@gmail.com', '9807264017', '8ece855f98d93d30352f86ab78278f8a', '111111', 'rahul gupta', 'govindnagar', 'kanpur', 'uttar pradesh', '2', '1', '03-04-2018', '11:05:56'),
(17, '5de5446e10308bd52bb605571ae1364b', 'vasu.sach@gmail.com', '9686041218', 'af764b67fb7864ed5d8971f53e083a6a', 'test123', 'Vasu Sachan', 'I 45', 'kanpur', 'uttar pradesh', '1', '1', '10-04-2018', '08:48:06'),
(18, '8db37e31d18a73a6844b81cf6c7f0fb9', 'raviraj@gmail.com', '897896709', 'ff0e16feee0e16858eeba2d22323e104', '111111', 'raviraz', 'hjgjdh', 'varanashi', 'uttar pradesh', '3', '1', '15-04-2018', '09:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `order_date` varchar(20) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `basic_price` varchar(10) NOT NULL,
  `gst_rate` varchar(10) NOT NULL,
  `packing_cost` varchar(10) NOT NULL,
  `shipping_cost` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `bill` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `item_id`, `quantity`, `order_date`, `order_id`, `amount`, `basic_price`, `gst_rate`, `packing_cost`, `shipping_cost`, `username`, `bill`, `status`) VALUES
(25, '3d076148d2bd656c6fcfb59f378dfef6', '3', '20-05-2018', 'af441e5975ce83ca8355a38459386378', '489', '100', '18', '5', '40', '845c327e2bbc3282490abc1412acea0e', '600', '2');

-- --------------------------------------------------------

--
-- Table structure for table `order_payments`
--

CREATE TABLE `order_payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `add_date` varchar(15) NOT NULL,
  `add_time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_payments`
--

INSERT INTO `order_payments` (`id`, `order_id`, `username`, `transaction_id`, `amount`, `add_date`, `add_time`) VALUES
(20, 'af441e5975ce83ca8355a38459386378', '845c327e2bbc3282490abc1412acea0e', 'dfb416e96a6b1d1faf2ca6c7a38bb4d2', '489', '20-05-2018', '18:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `plan_start_date` varchar(20) NOT NULL,
  `plan_end_date` varchar(20) NOT NULL,
  `plan_code` varchar(5) NOT NULL,
  `plan_amount` varchar(5) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `username`, `plan_start_date`, `plan_end_date`, `plan_code`, `plan_amount`, `transaction_id`, `payment_status`, `payment_date`) VALUES
(12, '845c327e2bbc3282490abc1412acea0e', '01-04-2018', '01-05-2018\r\n	', '2', '500', '976dce44b4652d5cb3c94ef1da7e560d', '1', '01-04-2018'),
(13, '95674b335fa1317aebe41962f0b97e72', '05-04-2018', '05-05-2018\r\n	', '2', '500', '1260338545d0bad5a283d78e7f714d7f', '1', '03-04-2018'),
(14, 'ce16c417076a0ceb94a5999eb8be7dc1', '03-04-2018', '03-05-2018\r\n	', '2', '500', '8ece855f98d93d30352f86ab78278f8a', '1', '03-04-2018'),
(15, '6c0ff76f5ad1f03a5e5d6b14f396fc2c', '05-04-2018', '05-05-2018\r\n	', '2', '500', 'd0ad60578bba009bcfec7f11cff9b4ac', '1', '05-04-2018'),
(16, '5de5446e10308bd52bb605571ae1364b', '10-04-2018', '10-05-2018\r\n	', '1', '200', 'af764b67fb7864ed5d8971f53e083a6a', '1', '10-04-2018'),
(17, '8db37e31d18a73a6844b81cf6c7f0fb9', '15-04-2018', '15-05-2018\r\n	', '3', '1000', 'ff0e16feee0e16858eeba2d22323e104', '1', '15-04-2018'),
(18, '845c327e2bbc3282490abc1412acea0e', '14-05-2018', '14-06-2018\r\n	', '2', '500', '28626582d8ea06351f431e724ce647df', '1', '14-05-2018');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(20) NOT NULL,
  `plan_code` varchar(10) NOT NULL,
  `price` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `plan_name`, `plan_code`, `price`) VALUES
(1, 'silver', '1', '200'),
(2, 'gold', '2', '500'),
(3, 'diamond', '3', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_details`
--
ALTER TABLE `inventory_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `inventory_details`
--
ALTER TABLE `inventory_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `order_payments`
--
ALTER TABLE `order_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
