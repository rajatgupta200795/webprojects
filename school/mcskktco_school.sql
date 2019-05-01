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
-- Database: `mcskktco_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_exam`
--

CREATE TABLE `add_exam` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(11) NOT NULL,
  `class_level` varchar(10) NOT NULL,
  `title` varchar(150) NOT NULL,
  `scheduled_date` varchar(20) NOT NULL,
  `upload_date` varchar(10) NOT NULL,
  `session` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_exam`
--

INSERT INTO `add_exam` (`id`, `exam_id`, `class_level`, `title`, `scheduled_date`, `upload_date`, `session`) VALUES
(35, '111113', 'upper', 'FA-1', '3/5/2018', '12/03/2018', '2017-2018'),
(34, '111112', 'upper', 'half yearly exam semestar two', '14/9/2018', '12/03/2018', '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pswd_change_id` varchar(20) NOT NULL DEFAULT '00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `pswd_change_id`) VALUES
(1, 'villagecomedy17@gmail.com', 'villagecomedy17@gmail.com', 'rajat.20071995', '835458'),
(2, 'Akray1607@gmail.com', 'akray1607@gmail.com', '160796', '7799');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `start_date` varchar(10) NOT NULL,
  `end_date` varchar(10) NOT NULL,
  `exam_text` text NOT NULL,
  `ordered_by` varchar(100) NOT NULL,
  `added_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `marks` int(5) NOT NULL,
  `upload_date_time` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice_text` text NOT NULL,
  `added_date` varchar(20) NOT NULL,
  `added_day` varchar(20) NOT NULL,
  `by_teacher` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_text`, `added_date`, `added_day`, `by_teacher`) VALUES
(1, 'Dear students,\r\n The school will close at the occasion of Raksha Bandhan. At 18 August. It will open the next day at its previous schedul to 19 August.  Happy Raksha Bandhan to all of you. \r\n\r\n', '17 Aug 2016', 'Wednesday', 'Mr. Ankit Singh '),
(2, 'Dear students\r\n           The school will closed at the occasion of  Maha Navami, Dussehra and Muharram. \r\nIt will open at its scheduled time to 13 October. \r\n                                           ', '08 Oct 2016', 'Saturday', 'Mr. Ankit Singh'),
(3, 'Dear students, \r\n      The school will closed at the occasion of Dhanteras, Diwali, Gowardhan pooja, And Bhaiya Dooj during 29 October to 1 November. It will open at its scheduled time to 2 November. \r\n                     Happy Diwali to all of you....', '27 Oct 2016', 'Thursday', 'Mr. Ankit Singh'),
(4, 'Dear Students,It is  notified to all students of class I to VIII  that the school has kept drawing compettion on 07/12/2016', '06 Dec 2016', 'Friday', 'Mr.Ankit SIngh'),
(5, 'It is notified to all students that the school will remain closed from 25/12/2016 to 10/01/2017 for WINTER VACATION. The school will reopen on 11/01/2016', '09 Jan 2017', 'Friday', 'Mr.Ankit SIngh'),
(6, 'Dear Students,The school is  notified to all students that the the school will remain closed on the occasion of  MAKAR  SANKRANTI &  PONGAL from 13/01/2017 to 16/01/2017 . The school will re- open on 17/01/2017', '12 Jan 2017', 'Friday', 'Mr.Ankit SIngh'),
(7, 'Dear Students,It is notified to all teachers and students that the school will remain closed on 13/03/2017 due to HOLI.\r\n The school will re-open on 14/03/2017.\r\nHappy Holi to All of You.', '13 Mar 2017', 'Friday', 'Mr.Ankit SIngh'),
(8, 'It is notified to all students & teachers  that the school will remain closed on the occasion of GOOD FRIDAY, AMBEDKAR JAYANTI  &  KERA MELA  on 14/04/2017(FRIDAY)\r\n\r\nThe school will re-open on 15/04/2017(SAT).', '13 Apr  2017', 'Friday', 'Mr.Ankit SIngh'),
(9, 'Parent Teacher Meeting will be held on  3rd April 17. All Parents are requested to come and meet the Teachers of their wards and discuss about their progress. Timings are from 9:00 am  to 11:15 am and no children are allowed to come along with the parents. Homework for summer vacations will be given on the same day.', '02 Apr 2017', 'Friday', 'Mr.Ankit SIngh'),
(10, 'Dear Parents,\r\nThe academic session 2016-17 is on the verge of completion. We furnish herewith some information for session 2017-18.</br>\r\n<b>Important Notice for Parents </b>\r\n<ul>\r\n<li>\r\nParents can check the new transport route, stoppages and timing on the notice board from 5th April 2017.</li>\r\n<li>New Session classes will start from 10th April 2017</li>\r\n<li>The name and the class should be clearly mentioned on all the belongings of the students. Belt. Jerseys, Blazers should also bear a marked label giving the name of the students. Please check the fitting and colour of the dress before purchasing.</li>\r\n<li>Parents are requested to check the hair cut, uniform, nails, punctuality and see that their ward carries books accordingly to the time table.</li>\r\n<li>Attendance is compulsory on the first day of the new session.</li>\r\n<li>The first page of the school diary must be filled properly; change of contact no. or address must be updated.</li>\r\n</ul>', '09 Apr  2017', 'Friday', 'Mr.Ankit SIngh'),
(11, 'Dear Parents ,\r\n\r\nHappiness is in the air. Long awaited summer holidays are again ready to welcome you with their warm showers!\r\n\r\nLife needs to be balanced between fun and work. Summer Holidays give a chance for students to relax. During holidays, leisure replaces work as a priority. You are filled with the enthusiasm to explore, travel and learn. Besides relaxing the students should keep in mind the execution of the assigned work in a well planned manner. Motivate your wards to interact with knowledgeable books that would in turn lead their minds to grow exclusively and in an effective manner.\r\n\r\nThe summer holidays   will be from May 18 to June 30, 2017. The school will re-open on July 1, 2017 at usual timings.\r\n\r\n ', '17 May 2017', 'Friday', 'Mr.Ankit SIngh'),
(12, 'Dear Students,\r\nIt is notified to all students  that the school has kept Science Exhibition 2017 on 31/07/2017', '30 July 2017', 'Friday', 'Mr.Ankit SIngh'),
(13, 'Dear Students,\r\nIt is informed to of all students that the classes of std 1 to 8 will remain suspended on 26/07/2017 to 27/07/2017 as per order of honable DM sir due to heavy rainfall.', '25 July 2017', 'Friday', 'Mr.Ankit SIngh'),
(14, 'Dear Students,\r\nThe festival of Raksha Bandhan commerates the unique bond shared by siblings. This symbolism of love and affection was spread in our school campus with a rakhee making activity on 6th August 17  for students of Class LKG to V. Children were taught to make hand-made rakhee using naturally available materials. Children made rakhees and decorated them beautifully.', '5 Aug 2017', 'Friday', 'Mr.Ankit SIngh'),
(15, 'Dear Students &  Teachers,</br>\r\nIt is notified to all teachers and students that the school will remain closed on 07/08/2017 due to \"RAKSHA BANDHAN\".</br>\r\nThe school will be reopen on 8th August 2017.', '06  Aug 2017', 'Friday', 'Mr.Ankit SIngh'),
(16, 'The School will remain closed on August 14, 2017 on the occasion of <b>JANMASHTAMI.</b>', '13 Aug 2017', 'Friday', 'Mr.Ankit SIngh'),
(17, 'MAHAVEER CONVENT SCHOOL celebrated our 71th Independence Day on 15th August 2017 with great zeal. The parents of the participating students were invited to witness the programme. The programme started at 9:00am with the hoisting of the flag and was followed by the singing of the National Anthem. The atmosphere for the celebration was set by the patriotic songs medley, sung by the school choir. An invigorating speech given by the Principal infused the participants and the visitors with energy and vigour. It was followed by a skit performed by the students on the famous freedom fighter.', '14 Aug 2017', 'Friday', 'Mr.Ankit SIngh');

-- --------------------------------------------------------

--
-- Table structure for table `sms_details`
--

CREATE TABLE `sms_details` (
  `id` int(11) NOT NULL,
  `send_time` varchar(15) NOT NULL,
  `send_date` varchar(10) NOT NULL,
  `cost` int(11) NOT NULL,
  `balance` int(5) NOT NULL,
  `total_select` int(5) NOT NULL,
  `successful_select` int(5) NOT NULL,
  `failed_select` int(5) NOT NULL,
  `sms_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_details`
--

INSERT INTO `sms_details` (`id`, `send_time`, `send_date`, `cost`, `balance`, `total_select`, `successful_select`, `failed_select`, `sms_text`) VALUES
(12, '06:07:31pm', '16/01/18', 156, 835, 295, 156, 139, 'Dear parents\r\n         The School will open tomorrow ,16 January  at its scheduled time .\r\n                     Thank you.\r\n'),
(10, '06:37:31pm', '12/01/18', 1, 992, 1, 1, 0, 'Dear ankit tomorrow is holiday..........'),
(11, '06:42:00pm', '12/01/18', 1, 991, 1, 1, 0, 'Dear ankit tomorrow is holiday..........'),
(7, '02:09:43am', '11/01/18', 0, 993, 4, 0, 1, 'this is a test'),
(8, '02:11:05am', '11/01/18', 0, 993, 4, 0, 4, 'this is a test'),
(9, '01:34:13am', '12/01/18', 0, 993, 1, 0, 1, 'Dear Aditya\r\nTomorrow is holiday'),
(6, '02:08:23am', '11/01/18', 0, 993, 4, 0, 1, 'this is a test'),
(13, '06:07:35pm', '16/01/18', 156, 830, 295, 156, 139, 'Dear parents\r\n         The School will open tomorrow ,16 January  at its scheduled time .\r\n                     Thank you.\r\n'),
(14, '06:07:41pm', '16/01/18', 156, 804, 295, 156, 139, 'Dear parents\r\n         The School will open tomorrow ,16 January  at its scheduled time .\r\n                     Thank you.\r\n'),
(15, '05:22:57pm', '19/01/18', 0, 523, 1, 0, 1, 'test'),
(16, '05:27:45pm', '19/01/18', 0, 523, 1, 0, 1, 'hello'),
(17, '07:00:40pm', '19/01/18', 1, 522, 1, 1, 0, 'Dear parents,\r\n The School will be opened from tomorrow ,at its scheduled time .\r\n Thank you.'),
(18, '07:05:36pm', '19/01/18', 0, 522, 1, 0, 1, 'Dear parents,\r\nThe School will be opened from tomorrow at its scheduled time .\r\nThank you.'),
(19, '07:06:12pm', '19/01/18', 0, 522, 1, 0, 1, 'Dear parents,\r\nThe School will be opened from tomorrow ,at its scheduled time .\r\nThank you.'),
(20, '07:06:48pm', '19/01/18', 1, 521, 1, 1, 0, 'Dear parents,\r\n The School will be opened from tomorrow ,at its scheduled time .\r\n Thank you.');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `session_year` varchar(20) NOT NULL,
  `present_class` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` varchar(20) NOT NULL,
  `date_1` varchar(10) NOT NULL DEFAULT '-',
  `date_2` varchar(10) NOT NULL DEFAULT '-',
  `date_3` varchar(10) NOT NULL DEFAULT '-',
  `date_4` varchar(10) NOT NULL DEFAULT '-',
  `date_5` varchar(10) NOT NULL DEFAULT '-',
  `date_6` varchar(10) NOT NULL DEFAULT '-',
  `date_7` varchar(10) NOT NULL DEFAULT '-',
  `date_8` varchar(10) NOT NULL DEFAULT '-',
  `date_9` varchar(10) NOT NULL DEFAULT '-',
  `date_10` varchar(10) NOT NULL DEFAULT '-',
  `date_11` varchar(10) NOT NULL DEFAULT '-',
  `date_12` varchar(10) NOT NULL DEFAULT '-',
  `date_13` varchar(10) NOT NULL DEFAULT '-',
  `date_14` varchar(10) NOT NULL DEFAULT '-',
  `date_15` varchar(10) NOT NULL DEFAULT '-',
  `date_16` varchar(10) NOT NULL DEFAULT '-',
  `date_17` varchar(10) NOT NULL DEFAULT '-',
  `date_18` varchar(10) NOT NULL DEFAULT '-',
  `date_19` varchar(10) NOT NULL DEFAULT '-',
  `date_20` varchar(10) NOT NULL DEFAULT '-',
  `date_21` varchar(10) NOT NULL DEFAULT '-',
  `date_22` varchar(10) NOT NULL DEFAULT '-',
  `date_23` varchar(10) NOT NULL DEFAULT '-',
  `date_24` varchar(10) NOT NULL DEFAULT '-',
  `date_25` varchar(10) DEFAULT '-',
  `date_26` varchar(10) NOT NULL DEFAULT '-',
  `date_27` varchar(10) NOT NULL DEFAULT '-',
  `date_28` varchar(10) NOT NULL DEFAULT '-',
  `date_29` varchar(10) NOT NULL DEFAULT '-',
  `date_30` varchar(10) NOT NULL DEFAULT '-',
  `date_31` varchar(10) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `roll_no`, `session_year`, `present_class`, `name`, `month`, `date_1`, `date_2`, `date_3`, `date_4`, `date_5`, `date_6`, `date_7`, `date_8`, `date_9`, `date_10`, `date_11`, `date_12`, `date_13`, `date_14`, `date_15`, `date_16`, `date_17`, `date_18`, `date_19`, `date_20`, `date_21`, `date_22`, `date_23`, `date_24`, `date_25`, `date_26`, `date_27`, `date_28`, `date_29`, `date_30`, `date_31`) VALUES
(1, '121709', '2017-2018', 'L.K.G.', 'divya jyoti yadav', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(2, '121713', '2017-2018', 'L.K.G.', 'kumari annapurna', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(3, '121721', '2017-2018', 'L.K.G.', 'pankaj prasad', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(4, '121742', '2017-2018', 'L.K.G.', 'veeru shah', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(5, '121734', '2017-2018', 'L.K.G.', 'sagar nishad', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(6, '121733', '2017-2018', 'L.K.G.', 'rashmi kushwaha', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(7, '121707', '2017-2018', 'L.K.G.', 'ashwini kushwaha', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(8, '121737', '2017-2018', 'L.K.G.', 'shah nawaj husain', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(9, '121739', '2017-2018', 'L.K.G.', 'sufiyan husain', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(10, '121735', '2017-2018', 'L.K.G.', 'salman shah', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(11, '121725', '2017-2018', 'L.K.G.', 'payal maddheshiya', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(12, '121705', '2017-2018', 'L.K.G.', 'arman ali', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(13, '121743\r\n', '2017-2018', 'L.K.G.', 'viraj kushwaha', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(14, '121731', '2017-2018', 'L.K.G.', 'rajan kumar', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(15, '121730\r\n', '2017-2018', 'L.K.G.', 'raj gupta', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(16, '121726', '2017-2018', 'L.K.G.', 'pragya singh', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(17, '121711', '2017-2018', 'L.K.G.', 'gulam husain', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(18, '121717', '2017-2018', 'L.K.G.', 'kundan nishad', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(19, '121740', '2017-2018', 'L.K.G.', 'suhail shah', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(20, '121719', '2017-2018', 'L.K.G.', 'murari nishad', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(21, '121704', '2017-2018', 'L.K.G.', 'anjali yadav', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(22, '121720', '2017-2018', 'L.K.G.', 'pallavi modanwal', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(23, '121712', '2017-2018', 'L.K.G.', 'harendra pal', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(24, '121728', '2017-2018', 'L.K.G.', 'ragini pal', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(25, '121714', '2017-2018', 'L.K.G.', 'kumari jyoti', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(26, '121722', '2017-2018', 'L.K.G.', 'pari gupta', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(27, '121741', '2017-2018', 'L.K.G.', 'sushmita sharma', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(28, '121723', '2017-2018', 'L.K.G.', 'parvej  ansari', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(29, '121736', '2017-2018', 'L.K.G.', 'sameer ansari', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(30, '121710', '2017-2018', 'L.K.G.', 'gulabsha parveen', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(31, '121732', '2017-2018', 'L.K.G.', 'rashid ansari', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(32, '121738', '2017-2018', 'L.K.G.', 'siddhi upadhyay', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(33, '121708', '2017-2018', 'L.K.G.', 'chand kumari', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(34, '121715', '2017-2018', 'L.K.G.', 'kumari  maya', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(35, '121702\r\n', '2017-2018', 'L.K.G.', 'afaruddin kumar', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(36, '121701\r\n', '2017-2018', 'L.K.G.', 'aditya gupta', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(37, '121706', '2017-2018', 'L.K.G.', 'ashiya ahmad', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(38, '121716', '2017-2018', 'L.K.G.', 'kumari  aliya', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(39, '121727', '2017-2018', 'L.K.G.', 'priya saini', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(40, '121724', '2017-2018', 'L.K.G.', 'pawan saini', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(41, '121718', '2017-2018', 'L.K.G.', 'mithhi tiwari', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(42, '121729', '2017-2018', 'L.K.G.', 'raj gupta', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(43, '121703', '2017-2018', 'L.K.G.', 'aneesha Khatoon', 'july', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(44, '81701', '2017-2018', '8', 'aastha singh', 'january', '-', 'P', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(45, '81702', '2017-2018', '8', 'anshika modanwal', 'january', '-', 'P', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(46, '81703', '2017-2018', '8', 'aneeta paal', 'january', '-', 'P', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(47, '81704', '2017-2018', '8', 'maneesha gupta', 'january', '-', 'P', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(48, '81705', '2017-2018', '8', 'pradeep kumar', 'january', '-', 'P', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(49, '81706', '2017-2018', '8', 'sunaina singh', 'january', '-', 'P', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `student_entry`
--

CREATE TABLE `student_entry` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `present_class` varchar(15) NOT NULL,
  `start_session` varchar(15) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `birth_date` int(3) NOT NULL,
  `birth_month` int(3) NOT NULL,
  `birth_year` int(5) NOT NULL,
  `student_phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `laddress` varchar(100) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `ad_date` int(3) NOT NULL,
  `ad_month` int(3) NOT NULL,
  `ad_year` int(5) NOT NULL,
  `img_file` varchar(100) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `student_photo` varchar(200) NOT NULL DEFAULT '../uploads/website_default_img'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_entry`
--

INSERT INTO `student_entry` (`id`, `first_name`, `last_name`, `roll_no`, `gender`, `present_class`, `start_session`, `father_name`, `mother_name`, `birth_date`, `birth_month`, `birth_year`, `student_phone`, `email`, `laddress`, `paddress`, `ad_date`, `ad_month`, `ad_year`, `img_file`, `contact_phone`, `student_photo`) VALUES
(90, 'abhishek', 'gaur', '111701', 'male', 'PLAYWAY', '2017-2018', 'munna gaur', '', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '', ''),
(92, 'adarsh', 'kumar', '111702', 'male', 'PLAYWAY', '2017-2018', 'sunil kumar', '', 0, 0, 0, '', '', 'vill -jangal dharampur, chauriya\r\npost - kathkuiyan\r\n', 'vill -jangal dharampur, chauriya\r\npost - kathkuiyan\r\n', 3, 7, 2017, '', '9839235715', ''),
(93, 'aditya', 'kushwaha', '111703', 'male', 'PLAYWAY', '2017-2018', 'nand kishore kushwaha', 'indu devi', 0, 0, 0, '', '', 'vill - ghaghwa', 'vill - ghaghwa', 2, 7, 2017, '', '9570704070', ''),
(94, 'akash', 'shah', '111704', 'male', 'PLAYWAY', '2017-2018', 'munna shah', '', 0, 0, 0, '', '', 'vill + post - laxmipur', 'vill + post - laxmipur', 4, 7, 2017, '', '', ''),
(95, 'amit', 'yadav', '111705', 'male', 'PLAYWAY', '2017-2018', 'sikandar yadav', 'sadhuri devi', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 2, 7, 2017, '', '9839422893', ''),
(96, 'ananya', 'shah', '111706', 'female', 'PLAYWAY', '2017-2018', 'munna shah', '', 0, 0, 0, '', '', 'vill + post laxmipur', 'vill + post laxmipur', 2, 7, 2017, '', '', ''),
(97, 'aryan', 'yadav', '111707', 'male', 'PLAYWAY', '2017-2018', 'sheshnath yadav', '', 0, 0, 0, '', '', '\r\nvill -  kharsal', 'vill -  kharsal', 4, 7, 2017, '', '9565236660', ''),
(98, 'danish', 'fatima', '111714', 'male', 'PLAYWAY', '2017-2018', 'abbash fatima', 'apsara khatoon', 0, 0, 0, '', '', 'vill -  pachrukhiya', 'vill -  pachrukhiya', 4, 7, 2017, '', '', ''),
(99, 'biitu ', 'yadav', '111711', 'male', 'PLAYWAY', '2017-2018', 'pramod yadav', 'meera devi', 0, 0, 0, '', '', 'vill + post - sikta', 'vill + post - sikta', 6, 7, 2017, '', '9838234678', ''),
(100, 'kumari', 'maneesha', '111724', 'female', 'PLAYWAY', '2017-2018', 'upendra', 'kanti devi', 0, 0, 0, '', '', 'vill + post laxmipur', 'vill + post laxmipur', 5, 7, 2017, '', '8401705535', ''),
(101, 'anamika', 'gupta', '111708', 'female', 'PLAYWAY', '2017-2018', 'keshwar gupta', 'pinki devi', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost -  sikta', 'vill - ghorghatiya\r\npost -  sikta', 5, 7, 2017, '', '', ''),
(102, 'preetam', 'verma', '111731', 'male', 'PLAYWAY', '2017-2018', 'virendra verma', 'geeta devi', 0, 0, 0, '', '', 'vill - pachrukhiya\r\n', 'vill - pachrukhiya\r\n', 8, 7, 2017, '', '9453234450', ''),
(103, 'roshani', 'kushwaha', '111734', 'female', 'PLAYWAY', '2017-2018', 'satya prakash kushwaha', 'reeta kushwaha', 0, 0, 0, '', '', 'vill - ghaghwa', 'vill - ghaghwa', 7, 7, 2017, '', '9795477622', ''),
(104, 'reema', 'paal', '111733', 'female', 'PLAYWAY', '2017-2018', 'sanjay paal', 'lalita devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 9, 7, 2017, '', '9918982760', ''),
(105, 'chandani', 'rajbhar', '111713', 'female', 'PLAYWAY', '2017-2018', 'rampravesh rajbhar', 'suman devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 9, 7, 2017, '', '8577914177', ''),
(106, 'javed', 'husain', '111719', 'male', 'PLAYWAY', '2017-2018', 'asagar shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 11, 7, 2017, '', '8577914177', ''),
(108, 'kumari', 'jasmine', '111726', 'female', 'PLAYWAY', '2017-2018', 'jainuddin ansari', '', 0, 0, 0, '', '', 'sikta', 'sikta', 12, 7, 2017, '', '8052925938', ''),
(109, 'anushka', 'modanwal', '111709', 'female', 'PLAYWAY', '2017-2018', 'ramnaresh modanwal', '', 0, 0, 0, '', '', 'vill + post - kathkuiyan bazar', 'vill + post - kathkuiyan bazar', 12, 7, 2017, '', '9918997834', ''),
(110, 'saniya', 'khatoon', '111735', 'female', 'PLAYWAY', '2017-2018', 'kalamuddin', 'marjeena khatoon', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 3, 7, 2017, '', '8112600765', ''),
(111, 'krishna', 'gupta', '111723', 'male', 'PLAYWAY', '2017-2018', 'gopal gupta', 'pushpa gupta', 0, 0, 0, '', '', 'vill - pachrukhiya\r\n', 'vill - pachrukhiya\r\n', 5, 7, 2017, '', '9919950691', ''),
(112, 'bihari', 'nishad', '111712', 'male', 'PLAYWAY', '2017-2018', 'akaloo nishad', '', 0, 0, 0, '', '', 'baira tola\r\n', 'baira tola\r\n', 2, 7, 2017, '', '', ''),
(113, 'fariyad', 'kumar', '111715', 'male', 'PLAYWAY', '2017-2018', 'noor alam', 'shabira', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 14, 7, 2017, '', '', ''),
(114, 'jainab', 'kumar', '111717', 'male', 'PLAYWAY', '2017-2018', 'salauddin ansari', 'kaneej fatima', 0, 0, 0, '', '', 'pachrukhiya bazar', 'pachrukhiya bazar', 14, 7, 2017, '', '', ''),
(115, 'jubaid', 'alam', '111718', 'male', 'PLAYWAY', '2017-2018', 'alam geer ansari', 'jaki runnisha', 0, 0, 0, '', '', 'pachrukhiya ', 'pachrukhiya ', 15, 7, 2017, '', '', ''),
(116, 'kumari', 'gunja', '111725', 'female', 'PLAYWAY', '2017-2018', 'motilal prasad', '', 0, 0, 0, '', '', 'semra hardo', 'semra hardo', 15, 7, 2017, '', '8924875383', ''),
(117, 'aneesh', 'gupta', '111710', 'male', 'PLAYWAY', '2017-2018', 'manoj gupta', 'reena devi', 0, 0, 0, '', '', 'kathkuiyan', 'kathkuiyan', 2, 7, 2017, '', '9167858688', ''),
(118, 'ravikishan ', 'patel', '111732', 'male', 'PLAYWAY', '2017-2018', 'shambhoo patel', 'reena devi', 0, 0, 0, '', '', 'kathkuiyan', 'kathkuiyan', 3, 7, 2017, '', '7379080311', ''),
(119, 'sarfaraj', 'kumar', '111736', 'male', 'PLAYWAY', '2017-2018', 'kyamuddin', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta\r\n', 'vill - ghorghatiya\r\npost - sikta\r\n', 3, 7, 2017, '', '9628085171', ''),
(120, 'tanveer', 'kumar', '111739', 'male', 'PLAYWAY', '2017-2018', 'kyamuddin', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta\r\n', 'vill - ghorghatiya\r\npost - sikta\r\n', 3, 7, 2017, '', '9628085171', ''),
(121, 'satyam', 'rajbhar', '111737', 'male', 'PLAYWAY', '2017-2018', 'munsi rajbhar', '', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 5, 7, 2017, '', '8874105866', ''),
(122, 'kamalesh', 'gupta', '111721', 'male', 'PLAYWAY', '2017-2018', 'pannalal gupta', '', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 5, 7, 2017, '', '9554189113', ''),
(123, 'tanveer', 'shah', '111740', 'male', 'PLAYWAY', '2017-2018', 'muharram shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 11, 7, 2017, '', '8795543784', ''),
(124, 'gudiya', 'prasad', '111716', 'female', 'PLAYWAY', '2017-2018', 'mahanth prasad', 'meena devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 11, 7, 2017, '', '7897920587', ''),
(125, 'satyam', 'modanwal', '111738', 'male', 'PLAYWAY', '2017-2018', 'bheem modanwal', 'suman devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 12, 7, 2017, '', '', ''),
(126, 'vaibhav', 'gupta', '111741', 'male', 'PLAYWAY', '2017-2018', 'rajesh gupta', 'sandhya gupta', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 12, 7, 2017, '', '9792075734', ''),
(127, 'kumari', 'anjani', '111727', 'female', 'PLAYWAY', '2017-2018', 'baharan', '', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 7, 7, 2017, '', '9792075734', ''),
(128, 'parvej', 'shah', '111730', 'male', 'PLAYWAY', '2017-2018', 'rojadeen shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta\r\n', 'vill - ghorghatiya\r\npost - sikta', 7, 7, 2017, '', '7234916412', ''),
(129, 'pankaj', 'kumar', '111729', 'male', 'PLAYWAY', '2017-2018', 'rampravesh', '', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 7, 7, 2017, '', '', ''),
(130, 'khushi', 'gupta', '111722', 'female', 'PLAYWAY', '2017-2018', 'sudarshan gupta', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 10, 7, 2017, '', '', ''),
(131, 'muskan', 'gupta', '111728', 'female', 'PLAYWAY', '2017-2018', 'sudarshan gupta', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 10, 7, 2017, '', '', ''),
(132, 'kaif', 'raja', '111720', 'male', 'PLAYWAY', '2017-2018', 'imteyaj alam', '', 0, 0, 0, '', '', 'vill - kachnar\r\npost - laxmipur', 'vill - kachnar\r\npost - laxmipur', 15, 7, 2017, '', '9918716004', ''),
(133, 'divya jyoti', 'yadav', '121709', 'female', 'L.K.G.', '2017-2018', 'dharmendra yadav', 'lalita devi', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 2, 7, 2017, '', '9415350757', ''),
(134, 'kumari', 'annapurna', '121713', 'female', 'L.K.G.', '2017-2018', 'chhote lal', 'nain mati devi', 0, 0, 0, '', '', 'badalpatti', 'badalpatti', 2, 7, 2017, '', '7389230512', ''),
(135, 'pankaj', 'prasad', '121721', 'male', 'L.K.G.', '2017-2018', 'mohan prasad', 'soni devi', 0, 0, 0, '', '', 'vill - godariya\r\npost - laxmipur', 'vill - godariya\r\npost - laxmipur', 3, 7, 2017, '', '', ''),
(136, 'veeru', 'shah', '121742', 'male', 'L.K.G.', '2017-2018', 'sohan shah', 'sheela devi', 0, 0, 0, '', '', ' laxmipur', ' laxmipur', 4, 7, 2017, '', '', ''),
(137, 'sagar', 'nishad', '121734', 'male', 'L.K.G.', '2017-2018', 'keshwar nishad', 'aneeta devi', 0, 0, 0, '', '', 'baira, bin toli', 'baira, bin toli', 4, 7, 2017, '', '8601766346', ''),
(138, 'rashmi', 'kushwaha', '121733', 'female', 'L.K.G.', '2017-2018', 'satya prakash kushwaha', 'reeta devi', 0, 0, 0, '', '', 'ghaghawa', 'ghaghawa', 6, 7, 2017, '', '9795477622', ''),
(139, 'ashwini', 'kushwaha', '121707', 'female', 'L.K.G.', '2017-2018', 'nand kishor kushwaha', 'indu devi', 0, 0, 0, '', '', 'ghaghawa', 'ghaghawa', 9, 7, 2017, '', '9795477622', ''),
(140, 'shah nawaj', 'husain', '121737', 'male', 'L.K.G.', '2017-2018', 'manauwar husain', 'najbul nisha', 0, 0, 0, '', '', 'vill - ghorghatiya', 'vill - ghorghatiya', 9, 7, 2017, '', '8948453750', ''),
(141, 'sufiyan', 'husain', '121739', 'female', 'L.K.G.', '2017-2018', 'shamshad alam', 'sabara khatoon', 0, 0, 0, '', '', 'vill - ghorghatiya', 'vill - ghorghatiya', 5, 7, 2017, '', '8948453750', ''),
(142, 'salman', 'shah', '121735', 'male', 'L.K.G.', '2017-2018', 'jamali shah', 'noor jahan', 0, 0, 0, '', '', 'vill - ghorghatiya', 'vill - ghorghatiya', 4, 7, 2017, '', '8795628086', ''),
(143, 'payal', 'maddheshiya', '121725', 'female', 'L.K.G.', '2017-2018', 'dharmendra maddheshiya', 'bharti devi', 0, 0, 0, '', '', 'kathkuiyan', 'kathkuiyan', 9, 7, 2017, '', '9838715795', ''),
(145, 'arman', 'ali', '121705', 'male', 'L.K.G.', '2017-2018', 'saddik ali', '', 0, 0, 0, '', '', 'vill - ghorghatiya', 'vill - ghorghatiya', 9, 7, 2017, '', '7084292217', ''),
(146, 'viraj', 'kushwaha', '121743\r\n', 'male', 'L.K.G.', '2017-2018', 'rama shankar kushwaha', 'maneeta', 0, 0, 0, '', '', 'vill + post - kathkuiyan', '\r\nvill + post - kathkuiyan', 9, 7, 2017, '', '9161867793', ''),
(147, 'rajan', 'kumar', '121731', 'male', 'L.K.G.', '2017-2018', 'motilal', '', 0, 0, 0, '', '', 'semra hardo', 'semra hardo', 4, 7, 2017, '', '8924875383', ''),
(148, 'raj', 'gupta', '121730\r\n', 'male', 'L.K.G.', '2017-2018', 'manoj gupta', 'reena devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan\r\n', 'vill + post - kathkuiyan\r\n', 4, 7, 2017, '', '9161858688', ''),
(149, 'pragya', 'singh', '121726', 'female', 'L.K.G.', '2017-2018', 'sandeep singh', '', 0, 0, 0, '', '', 'laxmipur', 'laxmipur', 6, 7, 2017, '', '', ''),
(150, 'gulam', 'husain', '121711', 'male', 'L.K.G.', '2017-2018', 'ziyauddin ansari', 'rubee khatoon', 0, 0, 0, '', '', 'kachnar', 'kachnar', 6, 7, 2017, '', '8601054805', ''),
(151, 'kundan', 'nishad', '121717', 'male', 'L.K.G.', '2017-2018', 'ramakant nishad', '', 0, 0, 0, '', '', 'baira bin toli', 'baira bin toli', 5, 7, 2017, '', '', ''),
(153, 'suhail', 'shah', '121740', 'male', 'L.K.G.', '2017-2018', 'muharram shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 8, 7, 2017, '', '8795543784', ''),
(154, 'murari', 'nishad', '121719', 'male', 'L.K.G.', '2017-2018', 'ramakant nishad', '', 0, 0, 0, '', '', 'barra bin toli', 'barra bin toli', 8, 7, 2017, '', '', ''),
(155, 'anjali', 'yadav', '121704', 'female', 'L.K.G.', '2017-2018', 'late arvind yadav', 'babita devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 11, 7, 2017, '', '9839081769', ''),
(156, 'pallavi', 'modanwal', '121720', 'female', 'L.K.G.', '2017-2018', 'bheem modanwal', 'suman devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 11, 7, 2017, '', '', ''),
(157, 'harendra', 'pal', '121712', 'male', 'L.K.G.', '2017-2018', 'ramniwas pal', 'meena devi', 0, 0, 0, '', '', 'semra hardo', 'semra hardo', 5, 7, 2017, '', '9598041801', ''),
(158, 'ragini', 'pal', '121728', 'female', 'L.K.G.', '2017-2018', 'ramniwas pal', 'meena devi', 0, 0, 0, '', '', 'semra hardo', 'semra hardo', 5, 7, 2017, '', '9598041801', ''),
(159, 'kumari', 'jyoti', '121714', 'female', 'L.K.G.', '2017-2018', 'rampravesh', '', 0, 0, 0, '', '', 'semra hardo', 'semra hardo', 3, 7, 2017, '', '', ''),
(160, 'pari', 'gupta', '121722', 'female', 'L.K.G.', '2017-2018', 'nainu gupta', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 9, 7, 2017, '', '9721514724', ''),
(161, 'sushmita', 'sharma', '121741', 'female', 'L.K.G.', '2017-2018', 'rajesh sharma', '', 0, 0, 0, '', '', '', '', 9, 7, 2017, '', '8978719514', ''),
(162, 'parvej ', 'ansari', '121723', 'male', 'L.K.G.', '2017-2018', 'mustkim ansari', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 14, 7, 2017, '', '', ''),
(163, 'sameer', 'ansari', '121736', 'male', 'L.K.G.', '2017-2018', 'mubarak ansari', '', 0, 0, 0, '', '', 'vill - pachrukhiya\r\n\r\n', 'vill - pachrukhiya', 14, 7, 2017, '', '8115242167', ''),
(164, 'gulabsha', 'parveen', '121710', 'male', 'L.K.G.', '2017-2018', 'liyakat ansari', '', 0, 0, 0, '', '', 'badalpatti\r\n\r\n', 'badalpatti\r\n\r\n', 3, 7, 2017, '', '9721870750', ''),
(165, 'rashid', 'ansari', '121732', 'male', 'L.K.G.', '2017-2018', 'shakur ansari', '', 0, 0, 0, '', '', 'badalpatti', 'badalpatti', 8, 7, 2017, '', '', ''),
(166, 'siddhi', 'upadhyay', '121738', 'male', 'L.K.G.', '2017-2018', 'dharmendra upadhyay', '', 0, 0, 0, '', '', 'vill - ghaghwa', 'vill - ghaghwa', 8, 7, 2017, '', '9648172741', ''),
(167, 'chand', 'kumari', '121708', 'female', 'L.K.G.', '2017-2018', 'banarasi', '', 0, 0, 0, '', '', 'laxmipur', 'laxmipur', 8, 7, 2017, '', '', ''),
(168, 'kumari ', 'maya', '121715', 'female', 'L.K.G.', '2017-2018', 'harendra', 'kishnawati devi', 0, 0, 0, '', '', 'laxmipur', 'laxmipur', 4, 7, 2017, '', '9628424524', ''),
(169, 'afaruddin', 'kumar', '121702\r\n', 'male', 'L.K.G.', '2017-2018', 'sahabuddin  ansari', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 5, 7, 2017, '', '9792252769', ''),
(170, 'aditya', 'gupta', '121701\r\n', 'male', 'L.K.G.', '2017-2018', 'omprakash gupta', '', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 5, 7, 2017, '', '7309138303', ''),
(171, 'ashiya', 'ahmad', '121706', 'male', 'L.K.G.', '2017-2018', 'firoj ahmad', '', 0, 0, 0, '', '', 'vill - ghorghatiya', 'vill - ghorghatiya', 10, 7, 2017, '', '9161652282', ''),
(172, 'kumari ', 'aliya', '121716', 'female', 'L.K.G.', '2017-2018', 'jalaluddin', 'reshma khatoon', 0, 0, 0, '', '', 'vill - ghorghatiya', 'vill - ghorghatiya', 10, 7, 2017, '', '7408825635', ''),
(173, 'priya', 'saini', '121727', 'female', 'L.K.G.', '2017-2018', 'chanchal saini', '', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 7, 7, 2017, '', '9598964924', ''),
(174, 'pawan', 'saini', '121724', 'male', 'L.K.G.', '2017-2018', 'manager saini', '', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 13, 7, 2017, '', '9628123023', ''),
(175, 'mithhi', 'tiwari', '121718', 'male', 'L.K.G.', '2017-2018', 'sandeep tiwari', 'neetu tiwari', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 13, 7, 2017, '', '9838245484', ''),
(176, 'raj', 'gupta', '121729', 'male', 'L.K.G.', '2017-2018', 'paras gupta', '', 0, 0, 0, '', '', 'mafi tola, semra hardo', 'mafi tola, semra hardo', 6, 7, 2017, '', '9648325753', ''),
(177, 'aneesha', 'Khatoon', '121703', 'female', 'L.K.G.', '2017-2018', 'riyaj ahmad', 'hasabunnisha', 0, 0, 0, '', '', 'badalpatti', 'badalpatti', 15, 7, 2017, '', '9554581312', '../uploads/aneesha_Khatoon_121743.jpg'),
(178, 'divyanshu', 'yadav', '131713', 'male', 'U.K.G.', '2017-2018', 'dharmendra yadav', 'lalita devi', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 2, 7, 2017, '', '9415350757', ''),
(179, 'priyanka', 'shah', '131723', 'female', 'U.K.G.', '2017-2018', 'bikau shah', 'munni devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 2, 7, 2017, '', '9161805296', ''),
(180, 'prince', 'tiwari', '131722', 'male', 'U.K.G.', '2017-2018', 'harendra tiwari', 'vandana tiwari', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 2, 7, 2017, '', '8009820708', ''),
(181, 'nandani', 'rajbhar', '131720', 'female', 'U.K.G.', '2017-2018', 'rampravesh rajbhar', 'suman devi', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 2, 7, 2017, '', '8577914177', ''),
(182, 'shahid', 'shah', '131730', 'male', 'U.K.G.', '2017-2018', 'jamaali shah', 'noorjahan', 0, 0, 0, '', '', 'vill - ghorghatiya', 'vill - ghorghatiya', 3, 7, 2017, '', '', ''),
(183, 'tanu', 'yadav', '131731', 'female', 'U.K.G.', '2017-2018', 'janardan yadav', '', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 3, 7, 2017, '', '', ''),
(184, 'ayan', 'malik', '131709', 'male', 'U.K.G.', '2017-2018', 'ishteyak ahmad', '', 0, 0, 0, '', '', 'khargawaliya', 'khargawaliya', 4, 7, 2017, '', '', ''),
(185, 'saniya', 'ansari', '131727', 'female', 'U.K.G.', '2017-2018', 'alamgeer ansari', 'jakirunnisha', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 4, 7, 2017, '', '9792312273', ''),
(186, 'bittu', 'bharti', '131711', 'male', 'U.K.G.', '2017-2018', 'babaloo prasad', 'soni devi', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 4, 7, 2017, '', '', ''),
(187, 'kaif', 'raja', '131717', 'male', 'U.K.G.', '2017-2018', 'azaz ahamad', 'rukhsana khatoon', 0, 0, 0, '', '', 'vill - kachnar', 'vill - kachnar', 5, 7, 2017, '', '9554780992', ''),
(188, 'aneeta', 'kumari', '131705', 'female', 'U.K.G.', '2017-2018', 'motilal', '', 0, 0, 0, '', '', 'vill -semra hardo', 'vill -semra hardo', 5, 7, 2017, '', '8924875383', ''),
(189, 'jehara', 'khatoon', '131716', 'female', 'U.K.G.', '2017-2018', 'mumtaj shah', '', 0, 0, 0, '', '', 'vill -ghorghatiya', 'vill -ghorghatiya', 5, 7, 2017, '', '', ''),
(190, 'shabboo', 'khatoon', '131729', 'female', 'U.K.G.', '2017-2018', 'saddik ali', 'khushboo nisha', 0, 0, 0, '', '', 'vill -ghorghatiya', 'vill -ghorghatiya', 5, 7, 2017, '', '7084292217', ''),
(191, 'naval', 'patel', '131721', 'male', 'U.K.G.', '2017-2018', 'shambhoo patel', '', 0, 0, 0, '', '', 'vill -kathkuiyan', 'vill -kathkuiyan', 5, 7, 2017, '', '7379080311', ''),
(192, 'daud', 'shah', '131712', 'male', 'U.K.G.', '2017-2018', 'muharram shah', '', 0, 0, 0, '', '', 'vill -ghorghatiya', 'vill -ghorghatiya', 5, 7, 2017, '', '8795543784', ''),
(193, 'kailash', 'kumar', '131718', 'male', 'U.K.G.', '2017-2018', 'meera lal', '', 0, 0, 0, '', '', 'baira bin toli', 'baira bin toli', 5, 7, 2017, '', '', ''),
(194, 'anoop', 'yadav', '131706', 'male', 'U.K.G.', '2017-2018', 'late arvind yadav', 'babita devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 5, 7, 2017, '', '9839081769', ''),
(195, 'anu', 'yadav', '131707', 'female', 'U.K.G.', '2017-2018', 'sheshnath yadav', '', 0, 0, 0, '', '', 'vill - kharsal', 'vill - kharsal', 5, 7, 2017, '', '9519627816', ''),
(196, 'afasar', 'alam', '131702', 'male', 'U.K.G.', '2017-2018', 'almam alam', '', 0, 0, 0, '', '', 'mafi tola, semra hardo', 'mafi tola, semra hardo', 5, 7, 2017, '', '8601836249', ''),
(197, 'vipin', 'yadav', '131733', 'male', 'U.K.G.', '2017-2018', 'mohan yadav', 'usha devi', 0, 0, 0, '', '', 'fakirahwan', 'fakirahwan', 6, 7, 2017, '', '', ''),
(198, 'gulam abdul', 'kadir', '131715', 'male', 'U.K.G.', '2017-2018', 'mami dullah', '', 0, 0, 0, '', '', 'laxmipur', 'laxmipur', 6, 7, 2017, '', '9721291714', ''),
(199, 'satish', 'sharma', '131728', 'male', 'U.K.G.', '2017-2018', 'rajesh sharma', '', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 6, 7, 2017, '', '86013366537', ''),
(200, 'amarjeet', 'gaur', '131704', 'male', 'U.K.G.', '2017-2018', 'bharat gaur', 'manju devi', 0, 0, 0, '', '', 'vill - pachrukhiya\r\n', 'vill - pachrukhiya\r\n', 6, 7, 2017, '', '8468972196', ''),
(201, 'vikas', 'yadav', '131732', 'male', 'U.K.G.', '2017-2018', 'lal bahadur yadav', 'rambha devi', 0, 0, 0, '', '', 'siswa, bihar', 'siswa, bihar', 7, 7, 2017, '', '8052477243', ''),
(202, 'aditya', 'gupta', '131701', 'male', 'U.K.G.', '2017-2018', 'rajesh gupta', '', 0, 0, 0, '', '', 'vill - pachrukhiya\r\n', 'vill - pachrukhiya\r\n', 7, 7, 2017, '', '9838042452', ''),
(203, 'babu', 'ali', '131710', 'male', 'U.K.G.', '2017-2018', 'mumtaj', '', 0, 0, 0, '', '', 'vill - ghorghatiya', 'vill - ghorghatiya', 7, 7, 2017, '', '', ''),
(204, 'yogindar', 'kumar', '131734', 'male', 'U.K.G.', '2017-2018', 'banarasi', '', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 7, 7, 2017, '', '', ''),
(205, 'aryan', 'gupta', '131708', 'male', 'U.K.G.', '2017-2018', 'ajay gupta', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 7, 7, 2017, '', '', ''),
(206, 'kumari', 'sushila', '131719', 'female', 'U.K.G.', '2017-2018', 'harendra', '', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 7, 7, 2017, '', '', ''),
(207, 'rani', 'yadav', '131725', 'female', 'U.K.G.', '2017-2018', 'rajesh yadav', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 10, 7, 2017, '', '', ''),
(208, 'FIRDAUSJAHA', 'husain', '131714', 'male', 'U.K.G.', '2017-2018', 'mujahid husain', '', 0, 0, 0, '', '', 'vill - kachnar', 'vill - kachnar', 10, 7, 2017, '', '', ''),
(209, 'reetu', 'pal', '131726', 'female', 'U.K.G.', '2017-2018', 'raju pal', '', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 12, 7, 2017, '', '', ''),
(210, 'aman', 'gupta', '131703', 'male', 'U.K.G.', '2017-2018', 'sheshnath gupta', '', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 12, 7, 2017, '', '9838989657', ''),
(211, 'radha', 'upadhyay', '131724', 'male', 'U.K.G.', '2017-2018', 'harendra upadhyay', '', 0, 0, 0, '', '', 'vill - ghaghawa', 'vill - ghaghawa', 14, 7, 2017, '', '9102355708', ''),
(217, 'abhinandan', 'modanwal', '11701', 'male', '1', '2017-2018', 'ramnaresh modanwal', '', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '9918997834', ''),
(218, 'aditya', 'yadav', '11702', 'male', '1', '2017-2018', 'janardan yadav', '', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 2, 7, 2017, '', '', ''),
(219, 'alka', 'yadav', '11703', 'female', '1', '2017-2018', 'sikandar yadav', '', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 2, 7, 2017, '', '9839422893', ''),
(220, 'amit', 'kumar', '11704', 'male', '1', '2017-2018', 'chhote lal prasad', 'nain mati devi', 0, 0, 0, '', '', 'badalpatti', 'badalpatti', 4, 7, 2017, '', '', ''),
(221, 'ankit', 'modanwal', '11705', 'male', '1', '2017-2018', 'bheem modanwal', 'suman modanwal', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 4, 7, 2017, '', '', ''),
(222, 'angeeta', 'yadav', '11706', 'female', '1', '2017-2018', 'sudama yadav', '', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 4, 7, 2017, '', '8556823694', ''),
(223, 'anushka', 'vishwakarma', '11707', 'female', '1', '2017-2018', 'rajesh vishwakarma', 'pushpa vishwakarma', 0, 0, 0, '', '', 'vill -  semra hardo', 'vill -  semra hardo', 4, 7, 2017, '', '8978719514', ''),
(224, 'arshad', 'jamal', '11708', 'male', '1', '2017-2018', 'mujammil ansari', '', 0, 0, 0, '', '', 'vill -  sikata', 'vill -  sikata', 5, 7, 2017, '', '9956334940', ''),
(225, 'chhatthoo', 'nishad', '11709', 'male', '1', '2017-2018', 'kamal nishad', '', 0, 0, 0, '', '', 'baira, bin toli', 'baira, bin toli', 5, 7, 2017, '', '', ''),
(226, 'chhotu', 'yadav', '11710', 'male', '1', '2017-2018', 'lalbabu yadav', '', 0, 0, 0, '', '', 'laxmipur', 'laxmipur', 5, 7, 2017, '', '', ''),
(227, 'deepak', 'shah', '11711', 'male', '1', '2017-2018', 'bikau shah', 'munni devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 5, 7, 2017, '', '9161805296', ''),
(228, 'faijan', 'raja', '11712', 'male', '1', '2017-2018', 'mehtab alam', 'wahid shabnam', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 5, 7, 2017, '', '9554090871', ''),
(229, 'kumari', 'afareena', '11713', 'female', '1', '2017-2018', 'mahboob', 'wahid shabnam', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 5, 7, 2017, '', '9628510601', ''),
(230, 'kajal', 'patwa', '11714', 'female', '1', '2017-2018', 'prahlad', '', 0, 0, 0, '', '', 'mafi tola, semara hardo', 'mafi tola, semara hardo\r\n', 5, 7, 2017, '', '9919701053', ''),
(231, 'kaneej', 'fatima', '11715', 'female', '1', '2017-2018', 'ziyauddin ansari', 'rubee khatoon', 0, 0, 0, '', '', 'kachnar', 'kachnar', 5, 7, 2017, '', '8601054805', ''),
(232, 'lucky', 'prasad', '11716', 'male', '1', '2017-2018', 'sikandar prasadi', '', 0, 0, 0, '', '', 'fakirahwa', 'fakirahwa', 5, 7, 2017, '', '', ''),
(233, 'mantasha', 'ali', '11717', 'female', '1', '2017-2018', 'shahmat ali', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 6, 7, 2017, '', '', ''),
(234, 'mohit', 'yadav', '11718', 'male', '1', '2017-2018', 'umesh yadav', 'sangeeta devi', 0, 0, 0, '', '', 'fakirahwan', 'fakirahwan', 6, 7, 2017, '', '9839301976', ''),
(235, 'nandani', 'patwa', '11719', 'female', '1', '2017-2018', 'jogindra patwa', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 6, 7, 2017, '', '', ''),
(236, 'priyanka', 'bharti', '11720', 'female', '1', '2017-2018', 'raju prasad', 'urmila devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 6, 7, 2017, '', '9161498901', ''),
(237, 'priya', 'upadhyay', '11721', 'female', '1', '2017-2018', 'dharmendra upadhyay', '', 0, 0, 0, '', '', 'vill - ghaghwa', 'vill - ghaghwa', 6, 7, 2017, '', '9648172741', ''),
(238, 'prince', 'bharti', '11722', 'male', '1', '2017-2018', 'shambhoo', '', 0, 0, 0, '', '', 'khargawalia', 'khargawalia', 9, 7, 2017, '', '', '../uploads/website_default_img'),
(239, 'roshan', 'pal', '11723', 'male', '1', '2017-2018', 'raju pal', '', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 7, 7, 2017, '', '', ''),
(240, 'rohil', 'kushwaha', '11724', 'male', '1', '2017-2018', 'prabhunath kushwaha', '', 0, 0, 0, '', '', 'vill - ghaghwa', 'vill - ghaghwa', 7, 7, 2017, '', '', ''),
(242, 'roshani', 'gupta', '11726', 'female', '1', '2017-2018', 'sheshnath gupta', 'geeta devi', 0, 0, 0, '', '', 'semra hardo', 'semra hardo', 7, 7, 2017, '', '9838989657', ''),
(243, 'shivam', 'kushwaha', '11727', 'male', '1', '2017-2018', 'manindra kushwaha', '', 0, 0, 0, '', '', 'vill - ghaghawa, rupahi', 'vill - ghaghawa, rupahi', 7, 7, 2017, '', '9570704070', ''),
(244, 'sameer', 'shah', '11728', 'male', '1', '2017-2018', 'guddu shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta\r\n', 7, 7, 2017, '', '', ''),
(245, 'sandeep', 'kushwaha', '11729', 'male', '1', '2017-2018', 'kamlesh kushwaha', '', 0, 0, 0, '', '', 'vill - ghaghawa\r\n', 'vill - ghaghawa\r\n', 7, 7, 2017, '', '8803792162', ''),
(246, 'shyam', 'ray', '11730', 'male', '1', '2017-2018', 'devendra ray', 'vibha ray', 0, 0, 0, '', '', 'vill - laxmipur\r\n', 'vill - laxmipur\r\n', 9, 7, 2017, '', '', ''),
(247, 'sainullah', 'kumar', '11731', 'male', '1', '2017-2018', 'kalamuddin', 'naimunisha', 0, 0, 0, '', '', 'vill - badalpatti\r\n', 'vill - badalpatti\r\n', 9, 7, 2017, '', '7235964881', ''),
(248, 'shanawat', 'husain', '11732', 'male', '1', '2017-2018', 'ramjan ansari', '', 0, 0, 0, '', '', 'vill - badalpatti\r\n', 'vill - badalpatti\r\n', 11, 7, 2017, '', '', ''),
(249, 'saidullah', 'ansari', '11733', 'male', '1', '2017-2018', 'muneer ansari', '', 0, 0, 0, '', '', 'vill - badalpatti\r\n', 'vill - badalpatti\r\n', 11, 7, 2017, '', '', ''),
(250, 'rama', 'rajbhar', '11725', 'female', '1', '2017-2018', 'birendra rajbhar', 'bhagmani devi', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 7, 7, 2017, '', '', ''),
(251, 'shaheen', 'parveen', '11734', 'female', '1', '2017-2018', 'manauwar husain', 'najbul nisha', 0, 0, 0, '', '', 'ghorghatiya', 'ghorghatiya', 9, 7, 2017, '', '', '../uploads/website_default_img'),
(252, 'shaheen', 'parveen', '11735', 'female', '1', '2017-2018', 'rojadeen ansari', 'najbul nisha', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 11, 7, 2017, '', '9918818576', ''),
(253, 'kumari', 'shani', '11736', 'female', '1', '2017-2018', 'baharan', '', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 11, 7, 2017, '', '9648799024', ''),
(254, 'sanjay', 'kumar', '11737', 'male', '1', '2017-2018', 'baharan', '', 0, 0, 0, '', '', 'vill - semra hardo', 'vill - semra hardo', 11, 7, 2017, '', '9648799024', ''),
(255, 'vivek', 'nishad', '11738', 'male', '1', '2017-2018', 'vinod nishad', 'nirmala devi', 0, 0, 0, '', '', 'baira, bin toli', 'baira, bin toli', 13, 7, 2017, '', '', ''),
(256, 'aastha', 'singh', '81701', 'female', '8', '2017-2018', 'santosh singh', 'priyanka singh', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '9628597743', ''),
(257, 'anshika', 'modanwal', '81702', 'female', '8', '2017-2018', 'pradeeo modanwal', 'sangeeta devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '9918580130', ''),
(258, 'aneeta', 'paal', '81703', 'female', '8', '2017-2018', 'sanjay paal', 'lalita devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 4, 7, 2017, '', '9918982760', ''),
(259, 'maneesha', 'gupta', '81704', 'female', '8', '2017-2018', 'meera lal gupta', 'reeta devi', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 4, 7, 2017, '', '9721237619', ''),
(260, 'pradeep', 'kumar', '81705', 'male', '8', '2017-2018', 'bikau gupta', 'munni devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 4, 7, 2017, '', '9161805296', ''),
(261, 'sunaina', 'singh', '81706', 'female', '8', '2017-2018', 'suneel singh', 'maya devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 7, 7, 2017, '', '9161805296', ''),
(262, 'anoop', 'patel', '71701', 'male', '7', '2017-2018', 'nand ji', 'bindu devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '8794170692', ''),
(263, 'ashish', 'tiwari', '71702', 'male', '7', '2017-2018', 'omprakash tiwari', 'guddi devi', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 2, 7, 2017, '', '9793998511', ''),
(264, 'amareena', 'khatoon', '71703', 'female', '7', '2017-2018', 'kalamuddin ansari', 'naimunnisha', 0, 0, 0, '', '', 'badalpatti', 'badalpatti', 3, 7, 2017, '', '7704080899', ''),
(265, 'kiran', 'gupta', '71704', 'female', '7', '2017-2018', 'bikau gupta', 'munni devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 3, 7, 2017, '', '9161805296', ''),
(266, 'manjoor', 'shekh', '71705', 'male', '7', '2017-2018', 'rajjak shekh', 'ameena khatoon', 0, 0, 0, '', '', 'maafi tola, semara hardo', 'maafi tola, semara hardo', 3, 7, 2017, '', '7570855716', ''),
(267, 'nitish', 'patel', '71706', 'male', '7', '2017-2018', 'nand ji', 'bindu devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 3, 7, 2017, '', '8794170692', ''),
(268, 'rukhsana', 'khatoon', '71707', 'female', '7', '2017-2018', 'serajuddin', 'saifunnisha', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 8, 7, 2017, '', '9984979275', ''),
(269, 'ranjeet', 'nishad', '71708', 'male', '7', '2017-2018', 'mannu nishad', '', 0, 0, 0, '', '', 'baira bin toli', 'baira bin toli', 8, 7, 2017, '', '9838152570', ''),
(270, 'shahil', 'ansari', '71709', 'male', '7', '2017-2018', 'firoj ansari', 'sayeda khatoon', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 8, 7, 2017, '', '9648256079', ''),
(271, 'saloni', 'gupta', '71710', 'female', '7', '2017-2018', 'late jitendra gupta', 'late madhu devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 8, 7, 2017, '', '9839617511', ''),
(272, 'safreen', 'ansari', '71711', 'male', '7', '2017-2018', 'alamgeer ansari', 'jaki runnisha', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 8, 7, 2017, '', '9628818023', ''),
(273, 'ankur', 'gupta', '61701', 'male', '6', '2017-2018', 'heera lal gupta', 'reeta devi', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 2, 7, 2017, '', '8960242034', ''),
(274, 'aman', 'singh', '61702', 'male', '6', '2017-2018', 'jay prakash singh', 'lalmati devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '8115951317', ''),
(275, 'aryan', 'ansari', '61703', 'male', '6', '2017-2018', 'kalamuddin ansari', 'naimul nisha', 0, 0, 0, '', '', 'badalpatti', 'badalpatti', 2, 7, 2017, '', '7704080899', ''),
(276, 'anshika', 'singh', '61704', 'female', '6', '2017-2018', 'vijay singh', 'bindu singh', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 2, 7, 2017, '', '', ''),
(277, 'ARBAJ', 'alam', '61705', 'male', '6', '2017-2018', 'minhaj alam', 'amin ara', 0, 0, 0, '', '', 'badalpatti', 'badalpatti', 4, 7, 2017, '', '9628380285', ''),
(278, 'aditya', 'yadav', '61706', 'male', '6', '2017-2018', 'somari yadav', 'reena devi', 0, 0, 0, '', '', 'jolpatti', 'jolpatti', 4, 7, 2017, '', '', ''),
(279, 'anshika', 'singh', '61707', 'female', '6', '2017-2018', 'rajesh singh', 'late guddi devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 4, 7, 2017, '', '9161028128', ''),
(280, 'chhavi', ' TULSYAN', '61708', 'female', '6', '2017-2018', 'ashish  TULSYAN', 'NEETU TULSYAN', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 4, 7, 2017, '', '9450233734', ''),
(281, 'mohit', 'kumar', '61709', 'male', '6', '2017-2018', 'sanjay nishad', 'late binda devi', 0, 0, 0, '', '', 'leela patti', 'leela patti', 4, 7, 2017, '', '', ''),
(282, 'mithilesh', 'kharwar', '61710', 'male', '6', '2017-2018', 'raja bharath', 'late suneeta devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 6, 7, 2017, '', '9919894931', ''),
(283, 'praduman', 'kushwaha', '61711', 'male', '6', '2017-2018', 'vishnu kushwaha', 'sangeeta devi', 0, 0, 0, '', '', 'mathiya', 'mathiya', 6, 7, 2017, '', '8601267127', ''),
(284, 'rakesh', 'yadav', '61712', 'male', '6', '2017-2018', 'dhurendhar yadav', '', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 6, 7, 2017, '', '', ''),
(285, 'rahul', 'nishad', '61713', 'male', '6', '2017-2018', 'sanjay nishad', 'late binda devi', 0, 0, 0, '', '', 'leela patti', 'leela patti', 8, 7, 2017, '', '', ''),
(286, 'ritesh', 'yadav', '61714', 'male', '6', '2017-2018', 'kripal yadav', 'indu devi', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 8, 7, 2017, '', '', ''),
(287, 'shanti', 'sharma', '61715', 'female', '6', '2017-2018', 'dharmendra sharma', 'mamata sharma', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 8, 7, 2017, '', '', ''),
(288, 'shailesh', 'kharwar', '61716', 'male', '6', '2017-2018', 'raja bharath  kharwar', 'late suneeta devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 8, 7, 2017, '', '8505920806', ''),
(289, 'tejaswani', 'singh', '61717', 'male', '6', '2017-2018', 'santosh singh', 'priyanka singh', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 8, 7, 2017, '', '9839578569', ''),
(290, 'vishal', 'gupta', '61718', 'male', '6', '2017-2018', 'nand gupta', 'neelam devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 10, 7, 2017, '', '9839335301', ''),
(291, 'ajad', 'verma', '21701', 'male', '2', '2017-2018', 'virendra verma', 'geeta devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 2, 7, 2017, '', '9453234450', ''),
(292, 'aditya raj', 'gupta', '21702', 'male', '2', '2017-2018', 'ramesh gupta', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 2, 7, 2017, '', '', ''),
(293, 'arbaj', 'ansari', '21703', 'male', '2', '2017-2018', 'rafik ansari', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 2, 7, 2017, '', '', ''),
(294, 'altaf', 'raja', '21704', 'male', '2', '2017-2018', 'mehtab alam', 'wahid shabnam', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 2, 7, 2017, '', '9554090871', ''),
(295, 'ankit', 'verma', '21705', 'male', '2', '2017-2018', 'virendra verma', 'geeta devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 2, 7, 2017, '', '9453234450', ''),
(296, 'amrit', 'kumar', '21706', 'male', '2', '2017-2018', 'kamlesh prasad', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 2, 7, 2017, '', '8052293666', ''),
(297, 'amaruddin', 'kumar', '21707', 'male', '2', '2017-2018', 'chhote', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 2, 7, 2017, '', '8188987853', ''),
(298, 'alshaba', 'khatoon', '21708', 'female', '2', '2017-2018', 'ajaj ahamad', '', 0, 0, 0, '', '', 'vill - badalpatti\r\n', 'vill - badalpatti\r\n', 2, 7, 2017, '', '9554581312', ''),
(299, 'ajaharuddin', 'kumar', '21709', 'male', '2', '2017-2018', 'chhote', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 2, 7, 2017, '', '8188987853', ''),
(300, 'amit', 'yadav', '21710', 'male', '2', '2017-2018', 'late arvind yadav', 'babita devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '9839081769', ''),
(301, 'amulya', 'kumar', '21711', 'male', '2', '2017-2018', 'shiv yadav', '', 0, 0, 0, '', '', 'vill -  kharsal\r\n\r\n', 'vill -  kharsal\r\n\r\n', 2, 7, 2017, '', '9565236660', ''),
(302, 'angad', 'kumar', '21712', 'male', '2', '2017-2018', '---', '', 0, 0, 0, '', '', '\r\n', '\r\n', 2, 7, 2017, '', '', ''),
(303, 'bajrangi', 'patwa', '21713', 'male', '2', '2017-2018', 'jogindra patwa', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 4, 7, 2017, '', '', ''),
(304, 'dharmendra', 'saini', '21714', 'male', '2', '2017-2018', 'ramagya saini', 'pratibha devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 4, 7, 2017, '', '9598969119', ''),
(305, 'dilip', 'yadav', '21715', 'male', '2', '2017-2018', 'kripal yadav', 'indu devi', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 4, 7, 2017, '', '', ''),
(306, 'dipu', 'saini', '21716', 'male', '2', '2017-2018', 'ramagya saini', 'pratibha devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 4, 7, 2017, '', '9598969119', ''),
(307, 'jyoti', 'yadav', '21717', 'female', '2', '2017-2018', 'shiv yadav', 'kamlavati devi', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 4, 7, 2017, '', '9565236660', ''),
(308, 'jiya', 'khatoon', '21718', 'female', '2', '2017-2018', 'nasiruddin khatoon', '', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 4, 7, 2017, '', '8858040113', ''),
(309, 'khushboo', 'yadav', '21719', 'female', '2', '2017-2018', 'janardan yadav', 'tara devi', 0, 0, 0, '', '', 'vill -  kharsal', 'vill -  kharsal', 5, 7, 2017, '', '', ''),
(310, 'khurshed', 'alam', '21720', 'male', '2', '2017-2018', 'abdul majeed', '', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 5, 7, 2017, '', '', ''),
(311, 'kareena', 'khatoon', '21721', 'female', '2', '2017-2018', 'mumtaj khatoon', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta\r\n', 5, 7, 2017, '', '', ''),
(312, 'kundan', 'nishad', '21722', 'male', '2', '2017-2018', 'bhikhari nishad', '', 0, 0, 0, '', '', 'vill - barra bin tol', 'vill - barra bin tol', 5, 7, 2017, '', '', ''),
(313, 'markandey', 'rajbhar', '21723', 'male', '2', '2017-2018', 'munna rajbhar', '', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 5, 7, 2017, '', '', ''),
(314, 'nitish', 'yadav', '21724', 'male', '2', '2017-2018', 'sudama yadav', 'foolmati devi', 0, 0, 0, '', '', 'vill - kharsal', 'vill - kharsal', 6, 7, 2017, '', '9839935687', ''),
(316, 'nityanjali', 'tiwari', '21725', 'female', '2', '2017-2018', 'harendra tiwari', 'vandana devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 6, 7, 2017, '', '8009820708', ''),
(317, 'nitesh', 'maurya', '21726', 'male', '2', '2017-2018', 'dinesh maurya', 'meena devi', 0, 0, 0, '', '', 'vill - mathiya', 'vill - mathiya', 6, 7, 2017, '', '8545017416', ''),
(318, 'nikesh', 'sharma', '21727', 'male', '2', '2017-2018', 'vivekanand sharma', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta\r\n', 'vill - ghorghatiya\r\npost - sikta\r\n', 6, 7, 2017, '', '8726676658', ''),
(319, 'prince', 'sharma', '21728', 'male', '2', '2017-2018', 'vivekanand sharma', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta\r\n', 'vill - ghorghatiya\r\npost - sikta\r\n', 6, 7, 2017, '', '8726676658', ''),
(320, 'pallavi', 'patwa', '21729', 'female', '2', '2017-2018', 'ranjeet patwa', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta\r\n', 'vill - ghorghatiya\r\npost - sikta\r\n', 6, 7, 2017, '', '', ''),
(322, 'raghav', 'tulsyan', '21731', 'male', '2', '2017-2018', 'ashish tulsyan', 'neetu tulsyan', 0, 0, 0, '', '', 'vill + post - kathkuiyan\r\n', 'vill + post - kathkuiyan\r\n', 6, 7, 2017, '', '9450233734', ''),
(325, 'rajan', 'verma', '21732', 'male', '2', '2017-2018', 'ashok verma', 'maya devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 7, 7, 2017, '', '9565177736', ''),
(326, 'r.p', 'yadav', '21733', 'male', '2', '2017-2018', 'rajesh yadav', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 7, 7, 2017, '', '9919379957', ''),
(327, 'sabare', 'alam husain', '21734', 'male', '2', '2017-2018', 'manauwar husain', 'najbul nisha', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 7, 7, 2017, '', '8948453750', ''),
(328, 'shahid', 'kumar', '21736', 'male', '2', '2017-2018', 'firoj', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 7, 7, 2017, '', '9648256079', ''),
(329, 'shubham', 'pal', '21735', 'male', '2', '2017-2018', 'sanjay pal', 'lalita devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 7, 7, 2017, '', '9648256079', ''),
(330, 'sonali', 'gupta', '21737', 'female', '2', '2017-2018', 'nainu gupta', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 8, 7, 2017, '', '9721514724', ''),
(331, 'vikas', 'yadav', '21738', 'male', '2', '2017-2018', 'bharat yadav', '', 0, 0, 0, '', '', 'vill - sikta', 'vill - sikta', 8, 7, 2017, '', '9565527092', ''),
(332, 'vishal', 'nishad', '21739', 'male', '2', '2017-2018', 'ramkeval nishad', '', 0, 0, 0, '', '', 'vill - barra bin toli', 'vill - barra bin toli', 11, 7, 2017, '', '9169189512', ''),
(333, 'vinay', 'yadav', '21740', 'male', '2', '2017-2018', 'somari yadav', '', 0, 0, 0, '', '', 'vill - jolpatti', 'vill - jolpatti', 11, 7, 2017, '', '9629444061', ''),
(334, 'abhishek', 'kushwaha', '31701', 'male', '3', '2017-2018', 'kishor kushwaha', '', 0, 0, 0, '', '', '', '', 2, 7, 2017, '', '9554576088', ''),
(335, 'ankit', 'maurya', '31702', 'male', '3', '2017-2018', 'dinesh maurya', 'meena devi', 0, 0, 0, '', '', 'vill - mathiya', 'vill - mathiya', 2, 7, 2017, '', '8545017416', ''),
(336, 'antima', 'pal', '31703', 'female', '3', '2017-2018', 'sanjay pal', 'lalita devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 2, 7, 2017, '', '9918982760', ''),
(337, 'amir', 'husain', '31704', 'male', '3', '2017-2018', 'asagar shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 2, 7, 2017, '', '', ''),
(338, 'anupam ', 'yadav', '31705', 'male', '3', '2017-2018', 'ramashish yadav', '', 0, 0, 0, '', '', 'vill - ghusari', 'vill - ghusari', 2, 7, 2017, '', '9161889593', ''),
(339, 'aneeta', 'patwa', '31706', 'male', '3', '2017-2018', 'prahlad patwa', '', 0, 0, 0, '', '', 'mafi tola, semra hardo', 'mafi tola, semra hardo', 2, 7, 2017, '', '9919701053', ''),
(340, 'anuradha', 'ray', '31707', 'female', '3', '2017-2018', 'rambahal ', 'reeta devi', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 3, 7, 2017, '', '', ''),
(341, 'aditya', 'prasad', '31708', 'male', '3', '2017-2018', 'jitendra prasad', '', 0, 0, 0, '', '', 'vill - fakirahwah', 'vill - fakirahwah', 3, 7, 2017, '', '', ''),
(342, 'arif', 'shah', '31709', 'male', '3', '2017-2018', 'waris shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 3, 7, 2017, '', '', ''),
(343, 'fareeda', 'khatoon', '31710', 'female', '3', '2017-2018', 'jamaali khatoon', 'noor jahan begam', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 3, 7, 2017, '', '', ''),
(344, 'gudiya', 'shah', '31711', 'female', '3', '2017-2018', 'sharif  shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 3, 7, 2017, '', '', ''),
(345, 'gufran', 'ali', '31712', 'male', '3', '2017-2018', 'nishar ali', '', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 3, 7, 2017, '', '', ''),
(346, 'hemant', 'ray', '31713', 'male', '3', '2017-2018', 'mohan ray', 'usha devi', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 3, 7, 2017, '', '', ''),
(347, 'himanshu', 'gaur', '31714', 'male', '3', '2017-2018', 'bharat gaur', 'manju devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 4, 7, 2017, '', '8468972196', ''),
(348, 'jay', 'ray', '31715', 'male', '3', '2017-2018', 'devendra ray', 'vibha devi', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 4, 7, 2017, '', '9838230521', ''),
(349, 'khushboo', 'gupta', '31716', 'female', '3', '2017-2018', 'nainu gupta', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 4, 7, 2017, '', '9721514724', ''),
(350, 'khushi', 'alam', '31717', 'female', '3', '2017-2018', 'shakir shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 4, 7, 2017, '', '', ''),
(351, 'krishna', 'ray', '31718', 'male', '3', '2017-2018', 'rambahal ', 'reeta devi', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 4, 7, 2017, '', '', ''),
(352, 'kumari', 'khushi', '31719', 'female', '3', '2017-2018', 'hiralal', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 4, 7, 2017, '', '', ''),
(353, 'khushi', 'kumari', '31720', 'female', '3', '2017-2018', 'ramesh gupta', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 4, 7, 2017, '', '', ''),
(354, 'mukteshwar', 'patel', '31721', 'male', '3', '2017-2018', 'nand ji', 'bindu devi', 0, 0, 0, '', '', 'vill + post - kathkuiyan\r\n\r\n', 'vill + post - kathkuiyan\r\n\r\n', 4, 7, 2017, '', '8794170692', ''),
(355, 'mitthoo', 'kumar', '31722', 'male', '3', '2017-2018', 'kamlesh prasad', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 4, 7, 2017, '', '', ''),
(356, 'prince', 'saini', '31723', 'male', '3', '2017-2018', 'chanchal saini', '', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 8, 7, 2017, '', '', ''),
(357, 'rukhasar', 'khatoon', '31724', 'male', '3', '2017-2018', 'jamaali khatoon', 'noor jahan begam', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 8, 7, 2017, '', '', ''),
(358, 'sarfaraj', 'alam', '31725', 'male', '3', '2017-2018', 'noor hasan', 'haseena khatoon', 0, 0, 0, '', '', 'maafi tola, semra hardo', 'maafi tola, semra hardo', 8, 7, 2017, '', '9628673335', ''),
(359, 'shahil', 'shah', '31726', 'male', '3', '2017-2018', 'saddik shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 8, 7, 2017, '', '9984437427', ''),
(360, 'salman', 'shah', '31727', 'male', '3', '2017-2018', 'guddu shah', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 8, 7, 2017, '', '', ''),
(361, 'shahil', 'husain', '31728', 'male', '3', '2017-2018', 'eid mohammad', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 8, 7, 2017, '', '', ''),
(362, 'taufik', 'alam', '31729', 'male', '3', '2017-2018', 'kyamuddin', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 8, 7, 2017, '', '', ''),
(363, 'abhay', 'kumar', '51701', 'male', '5', '2017-2018', 'ajay prakash', 'sarita devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 2, 7, 2017, '', '8127880116', ''),
(364, 'aditya', 'ray', '51702', 'male', '5', '2017-2018', 'mahesh ray', 'sangeeta devi', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 2, 7, 2017, '', '', '');
INSERT INTO `student_entry` (`id`, `first_name`, `last_name`, `roll_no`, `gender`, `present_class`, `start_session`, `father_name`, `mother_name`, `birth_date`, `birth_month`, `birth_year`, `student_phone`, `email`, `laddress`, `paddress`, `ad_date`, `ad_month`, `ad_year`, `img_file`, `contact_phone`, `student_photo`) VALUES
(365, 'amrita', 'pal', '51703', 'female', '5', '2017-2018', 'sanjay pal', 'lalita devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 2, 7, 2017, '', '9918982760', ''),
(366, 'arbaj', 'kumar', '51704', 'male', '5', '2017-2018', 'serajuddin siddiki', 'saifunnisha', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 2, 7, 2017, '', '', ''),
(367, 'astha', 'modanwal', '51705', 'female', '5', '2017-2018', 'bheem modanwal', 'suman devi', 0, 0, 0, '', '', 'vill - kathkuiyan', 'vill -  kathkuiyan', 2, 7, 2017, '', '', ''),
(368, 'ashwani', 'kumar', '51706', 'male', '5', '2017-2018', 'ramakant prasad', 'maya devi', 0, 0, 0, '', '', 'vill - fakirahwa', 'vill -  fakhirahwa', 4, 7, 2017, '', '', ''),
(369, 'aashiya', 'ali', '51707', 'female', '5', '2017-2018', 'shahmat ali', 'jameela khatoon', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 4, 7, 2017, '', '', ''),
(370, 'irfan', 'ali', '51708', 'male', '5', '2017-2018', 'nishar ali', 'ajameri khatoon', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 4, 7, 2017, '', '9616395295', ''),
(371, 'mujahid', 'husain', '51709', 'male', '5', '2017-2018', 'ramjan ansari', 'shamsheera khatoon', 0, 0, 0, '', '', 'vill - badalpatti', 'vill - badalpatti', 4, 7, 2017, '', '9721006033', ''),
(372, 'minta', 'vishwakarma', '51710', 'male', '5', '2017-2018', 'ramagya vishwakarma', 'shamsheera khatoon', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 4, 7, 2017, '', '8061336537', ''),
(373, 'mintu', 'sharma', '51711', 'male', '5', '2017-2018', 'shyam sundar sharma', 'mamta devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 4, 7, 2017, '', '', ''),
(374, 'nandani', 'gupta', '51712', 'female', '5', '2017-2018', 'ramesh gupta', 'rinki devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 6, 7, 2017, '', '9839900681', ''),
(375, 'nargis', 'khatoon', '51713', 'female', '5', '2017-2018', 'nasiruddin khatoon', 'gulshan nisha', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 6, 7, 2017, '', '9839302001', ''),
(376, 'sarfaraj', 'ansari', '51714', 'male', '5', '2017-2018', 'shabir ansari', 'tarannum', 0, 0, 0, '', '', 'vill - khargawaliya', 'vill - khargawaliya', 6, 7, 2017, '', '8874710616', ''),
(377, 'seraj', 'alam', '51715', 'male', '5', '2017-2018', 'noor hasan siddiki', 'haseena khatoon', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 'vill - semra hardo\r\npost - kathkuiyan\r\n', 6, 7, 2017, '', '9919566757', ''),
(378, 'yasir', 'ansari', '51716', 'male', '5', '2017-2018', 'mumtaj  ansari', 'shakeena khatoon', 0, 0, 0, '', '', 'vill - badalpatti', 'vill - badalpatti', 6, 7, 2017, '', '9918233635', ''),
(379, 'amrita', 'singh', '41701', 'female', '4', '2017-2018', 'aniruddha singh', '', 0, 0, 0, '', '', 'vill - laxmipur', 'vill - laxmipur', 2, 7, 2017, '', '', ''),
(380, 'aryan', 'modanwal', '41702', 'male', '4', '2017-2018', 'pradeep modanwal', '', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '9918580130', ''),
(381, 'divya', 'tiwari', '41703', 'female', '4', '2017-2018', 'omprakash tiwari', 'guddi tiwari', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta\r\n', 'vill - ghorghatiya\r\npost - sikta\r\n', 2, 7, 2017, '', '9793998511', ''),
(382, 'dev', 'singh', '41704', 'male', '4', '2017-2018', 'santosh singh', '', 0, 0, 0, '', '', 'vill + post - kathkuiyan', 'vill + post - kathkuiyan', 2, 7, 2017, '', '9161473864', ''),
(383, 'ishra', 'asmin', '41705', 'male', '4', '2017-2018', 'ishteyak ahamad', 'alimunnisha', 0, 0, 0, '', '', 'vill - khargawaliya', 'vill - khargawaliya', 2, 7, 2017, '', '9161863988', ''),
(384, 'ikbal', 'ansari', '41706', 'male', '4', '2017-2018', 'nijamuddin ansari', '', 0, 0, 0, '', '', 'vill - ghorghatiya\r\npost - sikta', 'vill - ghorghatiya\r\npost - sikta', 4, 7, 2017, '', '9792096657', ''),
(385, 'julfkar', 'ansari', '41707', 'male', '4', '2017-2018', 'rojadin ansari', '', 0, 0, 0, '', '', 'vill - badalpatti', 'vill - badalpatti', 4, 7, 2017, '', '', ''),
(386, 'khurshed', 'alam', '41708', 'male', '4', '2017-2018', 'salauddin ansari', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vvill - pachrukhiya', 4, 7, 2017, '', '', ''),
(387, 'maneesha', 'rajbhar', '41709', 'male', '4', '2017-2018', 'rampravesh rajbhar', 'suman devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 6, 7, 2017, '', '8577914177', ''),
(388, 'mukul', 'kumar', '41710', 'male', '4', '2017-2018', 'kamlesh prasad', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 6, 7, 2017, '', '8052293666', ''),
(389, 'pinki', 'bharti', '41711', 'female', '4', '2017-2018', 'shambhoo', '', 0, 0, 0, '', '', 'vill - khargawaliya', 'vill - khargawaliya', 6, 7, 2017, '', '', ''),
(390, 'ravi kishan', 'rajbhar', '41712', 'male', '4', '2017-2018', 'rampravesh rajbhar', 'suman devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 6, 7, 2017, '', '8577914177', ''),
(391, 'sameer', 'ansari', '41713', 'male', '4', '2017-2018', 'jainuddin ansari', '', 0, 0, 0, '', '', 'vill - sikta', 'vill - sikta', 8, 7, 2017, '', '9918279432', ''),
(392, 'sandeep', 'kumar', '41714', 'male', '4', '2017-2018', 'dhanesh prasad', '', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 8, 7, 2017, '', '', ''),
(393, 'shivam', 'ray', '41715', 'male', '4', '2017-2018', 'brijesh ray', 'shikha ray', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 8, 7, 2017, '', '', ''),
(394, 'saloni', 'sharma', '41716', 'female', '4', '2017-2018', 'dharmendra sharma', 'mamta sharma', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 9, 7, 2017, '', '', ''),
(395, 'sapna', 'singh', '41717', 'female', '4', '2017-2018', 'jay prakash singh', 'lalmati devi', 0, 0, 0, '', '', 'vill - kathkuiyan', 'vill - kathkuiyan', 9, 7, 2017, '', '8115951317', ''),
(396, 'satyam', 'ray', '41718', 'male', '4', '2017-2018', 'brijesh ray', 'shikha ray', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 9, 7, 2017, '', '9918344266', ''),
(397, 'sneha', 'gaur', '41719', 'female', '4', '2017-2018', 'bharat gaur', 'manju devi', 0, 0, 0, '', '', 'vill - pachrukhiya', 'vill - pachrukhiya', 9, 7, 2017, '', '8468972196', ''),
(398, 'soni', 'chaurasiya', '41720', 'female', '4', '2017-2018', 'mannu chaurasiya', 'indravati devi', 0, 0, 0, '', '', 'vill - semra hardo\r\npost - kathkuiyan', 'vill - semra hardo\r\npost - kathkuiyan', 9, 7, 2017, '', '9554181519', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `session_year` varchar(20) NOT NULL,
  `apr` varchar(5) NOT NULL DEFAULT 'No',
  `apr_am` double(10,2) NOT NULL DEFAULT '0.00',
  `may` varchar(5) NOT NULL DEFAULT 'No',
  `may_am` double(10,2) NOT NULL DEFAULT '0.00',
  `june` varchar(5) NOT NULL DEFAULT 'No',
  `june_am` double(10,2) NOT NULL DEFAULT '0.00',
  `july` varchar(5) NOT NULL,
  `july_am` double(10,2) NOT NULL DEFAULT '0.00',
  `aug` varchar(5) NOT NULL DEFAULT 'No',
  `aug_am` double(10,2) NOT NULL DEFAULT '0.00',
  `sep` varchar(5) NOT NULL DEFAULT 'No',
  `sep_am` double(10,2) NOT NULL DEFAULT '0.00',
  `oct` varchar(5) NOT NULL DEFAULT 'No',
  `oct_am` double(10,2) NOT NULL DEFAULT '0.00',
  `nov` varchar(5) NOT NULL DEFAULT 'No',
  `nov_am` double(10,2) NOT NULL DEFAULT '0.00',
  `dece` varchar(5) NOT NULL DEFAULT 'No',
  `dece_am` double(10,2) NOT NULL DEFAULT '0.00',
  `jan` varchar(5) NOT NULL DEFAULT 'No',
  `jan_am` float(10,2) NOT NULL DEFAULT '0.00',
  `feb` varchar(5) NOT NULL DEFAULT 'No',
  `feb_am` double(10,2) NOT NULL DEFAULT '0.00',
  `mar` varchar(5) NOT NULL DEFAULT 'No',
  `mar_am` double(10,2) NOT NULL DEFAULT '0.00',
  `apr_bus` double(10,2) NOT NULL,
  `may_bus` double(10,2) NOT NULL,
  `june_bus` double(10,2) NOT NULL,
  `july_bus` double(10,2) NOT NULL,
  `aug_bus` double(10,2) NOT NULL,
  `sep_bus` double(10,2) NOT NULL,
  `oct_bus` double(10,2) NOT NULL,
  `nov_bus` double(10,2) NOT NULL,
  `dece_bus` double(10,2) NOT NULL,
  `jan_bus` double(10,2) NOT NULL,
  `feb_bus` double(10,2) NOT NULL,
  `mar_bus` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fees`
--

INSERT INTO `student_fees` (`id`, `roll_no`, `session_year`, `apr`, `apr_am`, `may`, `may_am`, `june`, `june_am`, `july`, `july_am`, `aug`, `aug_am`, `sep`, `sep_am`, `oct`, `oct_am`, `nov`, `nov_am`, `dece`, `dece_am`, `jan`, `jan_am`, `feb`, `feb_am`, `mar`, `mar_am`, `apr_bus`, `may_bus`, `june_bus`, `july_bus`, `aug_bus`, `sep_bus`, `oct_bus`, `nov_bus`, `dece_bus`, `jan_bus`, `feb_bus`, `mar_bus`) VALUES
(44, '111701', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(45, '111702', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(46, '111716', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(47, '111719', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(48, '111720', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'Yes', 100.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(49, '111721', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(50, '111722', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(51, '111723', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(52, '111726', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(53, '111727', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(54, '111728', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(55, '111730', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(56, '111733', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(57, '111737', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(58, '111739', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(59, '111740', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(60, '121701', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(61, '121703', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1350.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(62, '121704', '2017-2018', 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 850.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(63, '121705', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(64, '121706', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(65, '121707', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(66, '121709', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(67, '121713', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(68, '121715', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(69, '121717', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(70, '121719', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 900.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(71, '121720', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(72, '121723', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(73, '121724', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(74, '121725', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(75, '121728', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(76, '121729', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(77, '121730', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(78, '121731', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(79, '121732', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(80, '121734', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(81, '121735', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 800.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(82, '121736', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(83, '121738', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 2400.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(84, '121739', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(85, '121740', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(86, '131701', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 400.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(87, '131709', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 400.00, 'No', 0.00, 'Yes', 400.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(88, '131713', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(89, '131714', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(90, '131715', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 900.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(91, '131716', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(92, '131734', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6600.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(93, '131733', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1000.00, 2300.00, 0.00, 0.00, 0.00, 0.00),
(94, '131732', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(95, '131731', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(96, '131730', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(97, '131729', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(98, '131727', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(99, '131726', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(100, '131725', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(101, '131728', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 3300.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(102, '131724', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(103, '131722', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(104, '131721', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1000.00, 0.00, 0.00, 0.00, 0.00),
(105, '131720', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1000.00, 0.00, 0.00, 0.00, 0.00),
(106, '131719', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3175.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(107, '11702', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(108, '11703', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(109, '11704', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(110, '11706', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(111, '11707', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(112, '11708', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 7200.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(113, '11709', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(114, '11710', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(115, '11711', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(116, '11712', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(117, '11713', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(118, '11717', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 950.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(119, '11718', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(120, '11719', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(121, '11720', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(122, '11721', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(123, '11722', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1100.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(124, '11723', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(125, '11724', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 2000.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(126, '11726', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(127, '11727', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(128, '11728', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(129, '11729', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(130, '11730', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(131, '11733', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(132, '11735', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1600.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(133, '11736', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(134, '11737', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(135, '11738', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'Yes', 0.00, 'Yes', 0.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 500.00, 500.00, 0.00, 0.00, 0.00, 0.00),
(136, '81702', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(137, '81704', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(138, '81706', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(139, '81705', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 250.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(140, '71701', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(141, '71702', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(142, '71703', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 700.00, 'Yes', 1300.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(143, '71705', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(144, '71706', '2017-2018', 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(145, '61701', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(146, '61702', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(147, '61703', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(148, '61704', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(149, '61705', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(150, '61706', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 600.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(151, '61707', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(152, '61708', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(153, '61710', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(154, '61711', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(155, '61718', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(156, '61716', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(157, '21701', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(158, '21703', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1000.00, 0.00, 0.00, 0.00, 0.00),
(159, '21705', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(160, '21704', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(161, '21706', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(162, '21708', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(163, '21707', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(164, '21711', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(165, '21713', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(166, '21718', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(167, '21720', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(168, '21722', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(169, '21724', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(170, '21725', '2017-2018', 'No', 0.00, 'Yes', 0.00, 'Yes ', 0.00, 'Yes', 0.00, 'Yes', 0.00, 'Yes', 0.00, 'Yes', 0.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(171, '21726', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(172, '21727', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(173, '21728', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(174, '21729', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(175, '21731', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(176, '21732', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 1500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(177, '21733', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(178, '21734', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(179, '21737', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(180, '21739', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(181, '21740', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(182, '31702', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(183, '31704', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(184, '31707', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(185, '31708', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'Yes', 1900.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(186, '31709', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(187, '31710', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(188, '31711', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(189, '31713', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(190, '31714', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(191, '31715', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(192, '31716', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(193, '31717', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(194, '31718', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(195, '31719', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1100.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0.00, 0.00, 0.00, 0.00),
(196, '31723', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(197, '31724', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(198, '31725', '2017-2018', 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 500.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(199, '31726', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1400.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(200, '31728', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(201, '31727', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(202, '51715', '2017-2018', 'Yes', 500.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(203, '51714', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(204, '51713', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(205, '51701', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(206, '51702', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(207, '51708', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(208, '51709', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(209, '51710', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(210, '41719', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(211, '41717', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(212, '41716', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(213, '41715', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2400.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(214, '41714', '2017-2018', 'No', 0.00, 'No', 0.00, 'No ', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(215, '41712', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(216, '41701', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(217, '41702', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 2500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(218, '41703', '2017-2018', 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(219, '41705', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 3000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(220, '41706', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(221, '41708', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 500.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(222, '41709', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(223, '41710', '2017-2018', 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'Yes', 1000.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 'No', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `max` int(3) NOT NULL,
  `passing` varchar(3) NOT NULL,
  `s_id` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `max`, `passing`, `s_id`) VALUES
(3, 'Hindi Oral', 25, '12', '11111'),
(4, 'english oral', 25, '12', '11112'),
(5, 'math oral', 25, '12', '11113'),
(6, 'poem oral', 25, '12', '11114'),
(11, 'social science', 25, '12', '11118'),
(9, 'history', 100, '12', '11116'),
(10, 'history 5', 100, '33', '11117');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_entry`
--

CREATE TABLE `teacher_entry` (
  `id` int(11) NOT NULL,
  `teacher_type` int(2) NOT NULL,
  `priority_order` int(3) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher_photo` varchar(200) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_entry`
--

INSERT INTO `teacher_entry` (`id`, `teacher_type`, `priority_order`, `teacher_name`, `subject`, `teacher_photo`, `about`) VALUES
(9, 3, 1, 'ALOK SINGH', 'COMPUTER', '../img/ALOK SINGH_9.jpg', ''),
(11, 3, 3, 'MRS. SUNDARI TIWARI', 'SCIENCE', '../img/MRS. SUNDARI TIWARI_11.jpg', ''),
(12, 3, 4, 'MRS. POONAM VERMA', 'HINDI', '../img/MRS. POONAM VERMA_12.jpg', ''),
(13, 3, 5, 'MRS. SONAM SINGH', 'SOCIAL SCIENCE', '../img/MRS. SONAM SINGH_13.jpg', ''),
(14, 3, 6, 'MRS. NANDITA  TIWARI', 'ART', '../img/MRS. NANDITA  TIWARI_14.jpg', ''),
(16, 3, 7, 'Mrs. TANU SINGH', 'ENGLISH', '../img/Mrs. TANU SINGH_16.jpg', ''),
(18, 1, 1, 'Mr.Ankit Singh', 'Maths', '../img/Mr.Ankit Singh_.jpg', ''),
(19, 3, 2, 'KISHAN SINGH', 'ENGLISH', '../img/KISHAN SINGH_19.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_exam`
--
ALTER TABLE `add_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_details`
--
ALTER TABLE `sms_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_entry`
--
ALTER TABLE `student_entry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `teacher_entry`
--
ALTER TABLE `teacher_entry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_exam`
--
ALTER TABLE `add_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sms_details`
--
ALTER TABLE `sms_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `student_entry`
--
ALTER TABLE `student_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=399;
--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `teacher_entry`
--
ALTER TABLE `teacher_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
