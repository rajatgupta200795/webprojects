-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 02:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bharatbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_req`
--

CREATE TABLE `buy_req` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `budget` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `c_id` int(5) NOT NULL,
  `unit_id` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL,
  `add_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_req`
--

INSERT INTO `buy_req` (`id`, `product_id`, `username`, `product_title`, `quantity`, `budget`, `description`, `c_id`, `unit_id`, `status`, `view`, `add_date`) VALUES
(13, 'edrtyguh', '670fae8ae8c517060baacb1190d893b4', 'New harvest of wheat in large amount', '10', '400', 'i want to buy new and fresh harvest of wheat, I am the wholesaler of wheat and I have my own cold storage to store plenty of wheat easily', 1, '1', '1', 10, '18-03-12'),
(14, 'sdxfgcvhb', '670fae8ae8c517060baacb1190d893b4', 'Electricity operated MRI machine for body scan ', '1', '50000', 'my name is Sudheer Arya and I am a doctor in AIMS. I also work in clinic and I want to buy MRI machine. anyone who want to sell this machine can text me.', 4, '1', '1', 9, '18-03-12'),
(15, '8d9d39fbe7bf60c0fa1e83476a824ac5', '670fae8ae8c517060baacb1190d893b4', 'I need 1 tonne wheat within 5 days', '1', '1000', 'I need 1 tonne wheat within 5 days, please contact me as soon as you possible', 1, '10', '1', 2, '18-04-13'),
(16, 'f5ad701cdfa34a40db4a90c3f0ddb0d4', 'c86da2729ab8f79d8f582e9abc469eb0', 'There is need of a mathematics teacher in saraswati shishu mandir', '1', '15000', 'We need  a mathematics teacher in saraswati shishu mandir for class sixth, interested person can send me his contact info to me', 9, '1', '1', 0, '18-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `c_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `c_id`) VALUES
(1, 'Agriculture', 1),
(10, 'Cottage', 2),
(11, 'Carpanter', 3),
(12, 'Medical', 4),
(13, 'Engineering', 5),
(15, 'Textile', 7),
(17, 'chemical', 8),
(19, 'teaching', 9);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `direction` varchar(5) NOT NULL,
  `mssg_text` text NOT NULL,
  `add_date` varchar(10) NOT NULL,
  `add_time` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `receiver`, `direction`, `mssg_text`, `add_date`, `add_time`, `status`) VALUES
(15, 'c86da2729ab8f79d8f582e9abc469eb0', '670fae8ae8c517060baacb1190d893b4', '', 'hi', '12-04-2018', '22:21:18', '1'),
(16, '670fae8ae8c517060baacb1190d893b4', 'c86da2729ab8f79d8f582e9abc469eb0', '', 'who is this', '12-04-2018', '22:21:34', '1'),
(17, 'c86da2729ab8f79d8f582e9abc469eb0', '670fae8ae8c517060baacb1190d893b4', '', 'i want to  buy your product', '12-04-2018', '22:22:56', '1'),
(18, '670fae8ae8c517060baacb1190d893b4', 'c86da2729ab8f79d8f582e9abc469eb0', '', 'what do you want', '12-04-2018', '22:23:19', '1'),
(19, 'c86da2729ab8f79d8f582e9abc469eb0', '670fae8ae8c517060baacb1190d893b4', '', 'i want night sky watch', '12-04-2018', '22:23:41', '1'),
(20, '670fae8ae8c517060baacb1190d893b4', 'c86da2729ab8f79d8f582e9abc469eb0', '', 'what price', '12-04-2018', '22:23:54', '1'),
(21, 'c86da2729ab8f79d8f582e9abc469eb0', '670fae8ae8c517060baacb1190d893b4', '', '100 rs', '12-04-2018', '22:24:24', '1'),
(22, 'c86da2729ab8f79d8f582e9abc469eb0', '670fae8ae8c517060baacb1190d893b4', '', 'hii', '12-04-2018', '22:28:38', '1'),
(23, '670fae8ae8c517060baacb1190d893b4', 'c86da2729ab8f79d8f582e9abc469eb0', '', 'bye', '12-04-2018', '22:58:00', '1'),
(24, '9001587b0fed20a2cb33e43a51bb3f83', '670fae8ae8c517060baacb1190d893b4', '', 'hiii', '13-04-2018', '14:45:35', '1'),
(25, '670fae8ae8c517060baacb1190d893b4', '9001587b0fed20a2cb33e43a51bb3f83', '', 'hiii , how can i help you', '13-04-2018', '14:49:46', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ecart`
--

CREATE TABLE `ecart` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `add_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `india_states_cities`
--

CREATE TABLE `india_states_cities` (
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `india_states_cities`
--

INSERT INTO `india_states_cities` (`state`, `city`) VALUES
('Andaman and Nicobar', NULL),
('Andaman and Nicobar', 'North and Middle Andaman'),
('Andaman and Nicobar', 'South Andaman'),
('Andaman and Nicobar', 'Nicobar'),
('Andhra Pradesh', NULL),
('Andhra Pradesh', 'Adilabad'),
('Andhra Pradesh', 'Anantapur'),
('Andhra Pradesh', 'Chittoor'),
('Andhra Pradesh', 'East Godavari'),
('Andhra Pradesh', 'Guntur'),
('Andhra Pradesh', 'Hyderabad'),
('Andhra Pradesh', 'Kadapa'),
('Andhra Pradesh', 'Karimnagar'),
('Andhra Pradesh', 'Khammam'),
('Andhra Pradesh', 'Krishna'),
('Andhra Pradesh', 'Kurnool'),
('Andhra Pradesh', 'Mahbubnagar'),
('Andhra Pradesh', 'Medak'),
('Andhra Pradesh', 'Nalgonda'),
('Andhra Pradesh', 'Nellore'),
('Andhra Pradesh', 'Nizamabad'),
('Andhra Pradesh', 'Prakasam'),
('Andhra Pradesh', 'Rangareddi'),
('Andhra Pradesh', 'Srikakulam'),
('Andhra Pradesh', 'Vishakhapatnam'),
('Andhra Pradesh', 'Vizianagaram'),
('Andhra Pradesh', 'Warangal'),
('Andhra Pradesh', 'West Godavari'),
('Arunachal Pradesh', NULL),
('Arunachal Pradesh', 'Anjaw'),
('Arunachal Pradesh', 'Changlang'),
('Arunachal Pradesh', 'East Kameng'),
('Arunachal Pradesh', 'Lohit'),
('Arunachal Pradesh', 'Lower Subansiri'),
('Arunachal Pradesh', 'Papum Pare'),
('Arunachal Pradesh', 'Tirap'),
('Arunachal Pradesh', 'Dibang Valley'),
('Arunachal Pradesh', 'Upper Subansiri'),
('Arunachal Pradesh', 'West Kameng'),
('Assam', NULL),
('Assam', 'Barpeta'),
('Assam', 'Bongaigaon'),
('Assam', 'Cachar'),
('Assam', 'Darrang'),
('Assam', 'Dhemaji'),
('Assam', 'Dhubri'),
('Assam', 'Dibrugarh'),
('Assam', 'Goalpara'),
('Assam', 'Golaghat'),
('Assam', 'Hailakandi'),
('Assam', 'Jorhat'),
('Assam', 'Karbi Anglong'),
('Assam', 'Karimganj'),
('Assam', 'Kokrajhar'),
('Assam', 'Lakhimpur'),
('Assam', 'Marigaon'),
('Assam', 'Nagaon'),
('Assam', 'Nalbari'),
('Assam', 'North Cachar Hills'),
('Assam', 'Sibsagar'),
('Assam', 'Sonitpur'),
('Assam', 'Tinsukia'),
('Bihar', NULL),
('Bihar', 'Araria'),
('Bihar', 'Aurangabad'),
('Bihar', 'Banka'),
('Bihar', 'Begusarai'),
('Bihar', 'Bhagalpur'),
('Bihar', 'Bhojpur'),
('Bihar', 'Buxar'),
('Bihar', 'Darbhanga'),
('Bihar', 'Purba Champaran'),
('Bihar', 'Gaya'),
('Bihar', 'Gopalganj'),
('Bihar', 'Jamui'),
('Bihar', 'Jehanabad'),
('Bihar', 'Khagaria'),
('Bihar', 'Kishanganj'),
('Bihar', 'Kaimur'),
('Bihar', 'Katihar'),
('Bihar', 'Lakhisarai'),
('Bihar', 'Madhubani'),
('Bihar', 'Munger'),
('Bihar', 'Madhepura'),
('Bihar', 'Muzaffarpur'),
('Bihar', 'Nalanda'),
('Bihar', 'Nawada'),
('Bihar', 'Patna'),
('Bihar', 'Purnia'),
('Bihar', 'Rohtas'),
('Bihar', 'Saharsa'),
('Bihar', 'Samastipur'),
('Bihar', 'Sheohar'),
('Bihar', 'Sheikhpura'),
('Bihar', 'Saran'),
('Bihar', 'Sitamarhi'),
('Bihar', 'Supaul'),
('Bihar', 'Siwan'),
('Bihar', 'Vaishali'),
('Bihar', 'Pashchim Champaran'),
('Chandigarh', NULL),
('Chhattisgarh', NULL),
('Chhattisgarh', 'Bastar'),
('Chhattisgarh', 'Bilaspur'),
('Chhattisgarh', 'Dantewada'),
('Chhattisgarh', 'Dhamtari'),
('Chhattisgarh', 'Durg'),
('Chhattisgarh', 'Jashpur'),
('Chhattisgarh', 'Janjgir-Champa'),
('Chhattisgarh', 'Korba'),
('Chhattisgarh', 'Koriya'),
('Chhattisgarh', 'Kanker'),
('Chhattisgarh', 'Kawardha'),
('Chhattisgarh', 'Mahasamund'),
('Chhattisgarh', 'Raigarh'),
('Chhattisgarh', 'Rajnandgaon'),
('Chhattisgarh', 'Raipur'),
('Chhattisgarh', 'Surguja'),
('Dadra and Nagar Haveli', NULL),
('Daman and Diu', NULL),
('Daman and Diu', 'Diu'),
('Daman and Diu', 'Daman'),
('Delhi', NULL),
('Delhi', 'Central Delhi'),
('Delhi', 'East Delhi'),
('Delhi', 'New Delhi'),
('Delhi', 'North Delhi'),
('Delhi', 'North East Delhi'),
('Delhi', 'North West Delhi'),
('Delhi', 'South Delhi'),
('Delhi', 'South West Delhi'),
('Delhi', 'West Delhi'),
('Goa', NULL),
('Goa', 'North Goa'),
('Goa', 'South Goa'),
('Gujarat', NULL),
('Gujarat', 'Ahmedabad'),
('Gujarat', 'Amreli District'),
('Gujarat', 'Anand'),
('Gujarat', 'Banaskantha'),
('Gujarat', 'Bharuch'),
('Gujarat', 'Bhavnagar'),
('Gujarat', 'Dahod'),
('Gujarat', 'The Dangs'),
('Gujarat', 'Gandhinagar'),
('Gujarat', 'Jamnagar'),
('Gujarat', 'Junagadh'),
('Gujarat', 'Kutch'),
('Gujarat', 'Kheda'),
('Gujarat', 'Mehsana'),
('Gujarat', 'Narmada'),
('Gujarat', 'Navsari'),
('Gujarat', 'Patan'),
('Gujarat', 'Panchmahal'),
('Gujarat', 'Porbandar'),
('Gujarat', 'Rajkot'),
('Gujarat', 'Sabarkantha'),
('Gujarat', 'Surendranagar'),
('Gujarat', 'Surat'),
('Gujarat', 'Vadodara'),
('Gujarat', 'Valsad'),
('Haryana', NULL),
('Haryana', 'Ambala'),
('Haryana', 'Bhiwani'),
('Haryana', 'Faridabad'),
('Haryana', 'Fatehabad'),
('Haryana', 'Gurgaon'),
('Haryana', 'Hissar'),
('Haryana', 'Jhajjar'),
('Haryana', 'Jind'),
('Haryana', 'Karnal'),
('Haryana', 'Kaithal'),
('Haryana', 'Kurukshetra'),
('Haryana', 'Mahendragarh'),
('Haryana', 'Mewat'),
('Haryana', 'Panchkula'),
('Haryana', 'Panipat'),
('Haryana', 'Rewari'),
('Haryana', 'Rohtak'),
('Haryana', 'Sirsa'),
('Haryana', 'Sonepat'),
('Haryana', 'Yamuna Nagar'),
('Haryana', 'Palwal'),
('Himachal Pradesh', NULL),
('Himachal Pradesh', 'Bilaspur'),
('Himachal Pradesh', 'Chamba'),
('Himachal Pradesh', 'Hamirpur'),
('Himachal Pradesh', 'Kangra'),
('Himachal Pradesh', 'Kinnaur'),
('Himachal Pradesh', 'Kulu'),
('Himachal Pradesh', 'Lahaul and Spiti'),
('Himachal Pradesh', 'Mandi'),
('Himachal Pradesh', 'Shimla'),
('Himachal Pradesh', 'Sirmaur'),
('Himachal Pradesh', 'Solan'),
('Himachal Pradesh', 'Una'),
('Jammu and Kashmir', NULL),
('Jammu and Kashmir', 'Anantnag'),
('Jammu and Kashmir', 'Badgam'),
('Jammu and Kashmir', 'Bandipore'),
('Jammu and Kashmir', 'Baramula'),
('Jammu and Kashmir', 'Doda'),
('Jammu and Kashmir', 'Jammu'),
('Jammu and Kashmir', 'Kargil'),
('Jammu and Kashmir', 'Kathua'),
('Jammu and Kashmir', 'Kupwara'),
('Jammu and Kashmir', 'Leh'),
('Jammu and Kashmir', 'Poonch'),
('Jammu and Kashmir', 'Pulwama'),
('Jammu and Kashmir', 'Rajauri'),
('Jammu and Kashmir', 'Srinagar'),
('Jammu and Kashmir', 'Samba'),
('Jammu and Kashmir', 'Udhampur'),
('Jharkhand', NULL),
('Jharkhand', 'Bokaro'),
('Jharkhand', 'Chatra'),
('Jharkhand', 'Deoghar'),
('Jharkhand', 'Dhanbad'),
('Jharkhand', 'Dumka'),
('Jharkhand', 'Purba Singhbhum'),
('Jharkhand', 'Garhwa'),
('Jharkhand', 'Giridih'),
('Jharkhand', 'Godda'),
('Jharkhand', 'Gumla'),
('Jharkhand', 'Hazaribagh'),
('Jharkhand', 'Koderma'),
('Jharkhand', 'Lohardaga'),
('Jharkhand', 'Pakur'),
('Jharkhand', 'Palamu'),
('Jharkhand', 'Ranchi'),
('Jharkhand', 'Sahibganj'),
('Jharkhand', 'Seraikela and Kharsawan'),
('Jharkhand', 'Pashchim Singhbhum'),
('Jharkhand', 'Ramgarh'),
('Karnataka', NULL),
('Karnataka', 'Bidar'),
('Karnataka', 'Belgaum'),
('Karnataka', 'Bijapur'),
('Karnataka', 'Bagalkot'),
('Karnataka', 'Bellary'),
('Karnataka', 'Bangalore Rural District'),
('Karnataka', 'Bangalore Urban District'),
('Karnataka', 'Chamarajnagar'),
('Karnataka', 'Chikmagalur'),
('Karnataka', 'Chitradurga'),
('Karnataka', 'Davanagere'),
('Karnataka', 'Dharwad'),
('Karnataka', 'Dakshina Kannada'),
('Karnataka', 'Gadag'),
('Karnataka', 'Gulbarga'),
('Karnataka', 'Hassan'),
('Karnataka', 'Haveri District'),
('Karnataka', 'Kodagu'),
('Karnataka', 'Kolar'),
('Karnataka', 'Koppal'),
('Karnataka', 'Mandya'),
('Karnataka', 'Mysore'),
('Karnataka', 'Raichur'),
('Karnataka', 'Shimoga'),
('Karnataka', 'Tumkur'),
('Karnataka', 'Udupi'),
('Karnataka', 'Uttara Kannada'),
('Karnataka', 'Ramanagara'),
('Karnataka', 'Chikballapur'),
('Karnataka', 'Yadagiri'),
('Kerala', NULL),
('Kerala', 'Alappuzha'),
('Kerala', 'Ernakulam'),
('Kerala', 'Idukki'),
('Kerala', 'Kollam'),
('Kerala', 'Kannur'),
('Kerala', 'Kasaragod'),
('Kerala', 'Kottayam'),
('Kerala', 'Kozhikode'),
('Kerala', 'Malappuram'),
('Kerala', 'Palakkad'),
('Kerala', 'Pathanamthitta'),
('Kerala', 'Thrissur'),
('Kerala', 'Thiruvananthapuram'),
('Kerala', 'Wayanad'),
('Lakshadweep', NULL),
('Madhya Pradesh', NULL),
('Madhya Pradesh', 'Alirajpur'),
('Madhya Pradesh', 'Anuppur'),
('Madhya Pradesh', 'Ashok Nagar'),
('Madhya Pradesh', 'Balaghat'),
('Madhya Pradesh', 'Barwani'),
('Madhya Pradesh', 'Betul'),
('Madhya Pradesh', 'Bhind'),
('Madhya Pradesh', 'Bhopal'),
('Madhya Pradesh', 'Burhanpur'),
('Madhya Pradesh', 'Chhatarpur'),
('Madhya Pradesh', 'Chhindwara'),
('Madhya Pradesh', 'Damoh'),
('Madhya Pradesh', 'Datia'),
('Madhya Pradesh', 'Dewas'),
('Madhya Pradesh', 'Dhar'),
('Madhya Pradesh', 'Dindori'),
('Madhya Pradesh', 'Guna'),
('Madhya Pradesh', 'Gwalior'),
('Madhya Pradesh', 'Harda'),
('Madhya Pradesh', 'Hoshangabad'),
('Madhya Pradesh', 'Indore'),
('Madhya Pradesh', 'Jabalpur'),
('Madhya Pradesh', 'Jhabua'),
('Madhya Pradesh', 'Katni'),
('Madhya Pradesh', 'Khandwa'),
('Madhya Pradesh', 'Khargone'),
('Madhya Pradesh', 'Mandla'),
('Madhya Pradesh', 'Mandsaur'),
('Madhya Pradesh', 'Morena'),
('Madhya Pradesh', 'Narsinghpur'),
('Madhya Pradesh', 'Neemuch'),
('Madhya Pradesh', 'Panna'),
('Madhya Pradesh', 'Rewa'),
('Madhya Pradesh', 'Rajgarh'),
('Madhya Pradesh', 'Ratlam'),
('Madhya Pradesh', 'Raisen'),
('Madhya Pradesh', 'Sagar'),
('Madhya Pradesh', 'Satna'),
('Madhya Pradesh', 'Sehore'),
('Madhya Pradesh', 'Seoni'),
('Madhya Pradesh', 'Shahdol'),
('Madhya Pradesh', 'Shajapur'),
('Madhya Pradesh', 'Sheopur'),
('Madhya Pradesh', 'Shivpuri'),
('Madhya Pradesh', 'Sidhi'),
('Madhya Pradesh', 'Singrauli'),
('Madhya Pradesh', 'Tikamgarh'),
('Madhya Pradesh', 'Ujjain'),
('Madhya Pradesh', 'Umaria'),
('Madhya Pradesh', 'Vidisha'),
('Maharashtra', NULL),
('Maharashtra', 'Ahmednagar'),
('Maharashtra', 'Akola'),
('Maharashtra', 'Amrawati'),
('Maharashtra', 'Aurangabad'),
('Maharashtra', 'Bhandara'),
('Maharashtra', 'Beed'),
('Maharashtra', 'Buldhana'),
('Maharashtra', 'Chandrapur'),
('Maharashtra', 'Dhule'),
('Maharashtra', 'Gadchiroli'),
('Maharashtra', 'Gondiya'),
('Maharashtra', 'Hingoli'),
('Maharashtra', 'Jalgaon'),
('Maharashtra', 'Jalna'),
('Maharashtra', 'Kolhapur'),
('Maharashtra', 'Latur'),
('Maharashtra', 'Mumbai City'),
('Maharashtra', 'Mumbai suburban'),
('Maharashtra', 'Nandurbar'),
('Maharashtra', 'Nanded'),
('Maharashtra', 'Nagpur'),
('Maharashtra', 'Nashik'),
('Maharashtra', 'Osmanabad'),
('Maharashtra', 'Parbhani'),
('Maharashtra', 'Pune'),
('Maharashtra', 'Raigad'),
('Maharashtra', 'Ratnagiri'),
('Maharashtra', 'Sindhudurg'),
('Maharashtra', 'Sangli'),
('Maharashtra', 'Solapur'),
('Maharashtra', 'Satara'),
('Maharashtra', 'Thane'),
('Maharashtra', 'Wardha'),
('Maharashtra', 'Washim'),
('Maharashtra', 'Yavatmal'),
('Manipur', NULL),
('Manipur', 'Bishnupur'),
('Manipur', 'Churachandpur'),
('Manipur', 'Chandel'),
('Manipur', 'Imphal East'),
('Manipur', 'Senapati'),
('Manipur', 'Tamenglong'),
('Manipur', 'Thoubal'),
('Manipur', 'Ukhrul'),
('Manipur', 'Imphal West'),
('Meghalaya', NULL),
('Meghalaya', 'East Garo Hills'),
('Meghalaya', 'East Khasi Hills'),
('Meghalaya', 'Jaintia Hills'),
('Meghalaya', 'Ri-Bhoi'),
('Meghalaya', 'South Garo Hills'),
('Meghalaya', 'West Garo Hills'),
('Meghalaya', 'West Khasi Hills'),
('Mizoram', NULL),
('Mizoram', 'Aizawl'),
('Mizoram', 'Champhai'),
('Mizoram', 'Kolasib'),
('Mizoram', 'Lawngtlai'),
('Mizoram', 'Lunglei'),
('Mizoram', 'Mamit'),
('Mizoram', 'Saiha'),
('Mizoram', 'Serchhip'),
('Nagaland', NULL),
('Nagaland', 'Dimapur'),
('Nagaland', 'Kohima'),
('Nagaland', 'Mokokchung'),
('Nagaland', 'Mon'),
('Nagaland', 'Phek'),
('Nagaland', 'Tuensang'),
('Nagaland', 'Wokha'),
('Nagaland', 'Zunheboto'),
('Orissa', NULL),
('Orissa', 'Angul'),
('Orissa', 'Boudh'),
('Orissa', 'Bhadrak'),
('Orissa', 'Bolangir'),
('Orissa', 'Bargarh'),
('Orissa', 'Baleswar'),
('Orissa', 'Cuttack'),
('Orissa', 'Debagarh'),
('Orissa', 'Dhenkanal'),
('Orissa', 'Ganjam'),
('Orissa', 'Gajapati'),
('Orissa', 'Jharsuguda'),
('Orissa', 'Jajapur'),
('Orissa', 'Jagatsinghpur'),
('Orissa', 'Khordha'),
('Orissa', 'Kendujhar'),
('Orissa', 'Kalahandi'),
('Orissa', 'Kandhamal'),
('Orissa', 'Koraput'),
('Orissa', 'Kendrapara'),
('Orissa', 'Malkangiri'),
('Orissa', 'Mayurbhanj'),
('Orissa', 'Nabarangpur'),
('Orissa', 'Nuapada'),
('Orissa', 'Nayagarh'),
('Orissa', 'Puri'),
('Orissa', 'Rayagada'),
('Orissa', 'Sambalpur'),
('Orissa', 'Subarnapur'),
('Orissa', 'Sundargarh'),
('Puducherry', NULL),
('Puducherry', 'Karaikal'),
('Puducherry', 'Mahe'),
('Puducherry', 'Puducherry'),
('Puducherry', 'Yanam'),
('Punjab', NULL),
('Punjab', 'Amritsar'),
('Punjab', 'Bathinda'),
('Punjab', 'Firozpur'),
('Punjab', 'Faridkot'),
('Punjab', 'Fatehgarh Sahib'),
('Punjab', 'Gurdaspur'),
('Punjab', 'Hoshiarpur'),
('Punjab', 'Jalandhar'),
('Punjab', 'Kapurthala'),
('Punjab', 'Ludhiana'),
('Punjab', 'Mansa'),
('Punjab', 'Moga'),
('Punjab', 'Mukatsar'),
('Punjab', 'Nawan Shehar'),
('Punjab', 'Patiala'),
('Punjab', 'Rupnagar'),
('Punjab', 'Sangrur'),
('Rajasthan', NULL),
('Rajasthan', 'Ajmer'),
('Rajasthan', 'Alwar'),
('Rajasthan', 'Bikaner'),
('Rajasthan', 'Barmer'),
('Rajasthan', 'Banswara'),
('Rajasthan', 'Bharatpur'),
('Rajasthan', 'Baran'),
('Rajasthan', 'Bundi'),
('Rajasthan', 'Bhilwara'),
('Rajasthan', 'Churu'),
('Rajasthan', 'Chittorgarh'),
('Rajasthan', 'Dausa'),
('Rajasthan', 'Dholpur'),
('Rajasthan', 'Dungapur'),
('Rajasthan', 'Ganganagar'),
('Rajasthan', 'Hanumangarh'),
('Rajasthan', 'Juhnjhunun'),
('Rajasthan', 'Jalore'),
('Rajasthan', 'Jodhpur'),
('Rajasthan', 'Jaipur'),
('Rajasthan', 'Jaisalmer'),
('Rajasthan', 'Jhalawar'),
('Rajasthan', 'Karauli'),
('Rajasthan', 'Kota'),
('Rajasthan', 'Nagaur'),
('Rajasthan', 'Pali'),
('Rajasthan', 'Pratapgarh'),
('Rajasthan', 'Rajsamand'),
('Rajasthan', 'Sikar'),
('Rajasthan', 'Sawai Madhopur'),
('Rajasthan', 'Sirohi'),
('Rajasthan', 'Tonk'),
('Rajasthan', 'Udaipur'),
('Sikkim', NULL),
('Sikkim', 'East Sikkim'),
('Sikkim', 'North Sikkim'),
('Sikkim', 'South Sikkim'),
('Sikkim', 'West Sikkim'),
('Tamil Nadu', NULL),
('Tamil Nadu', 'Ariyalur'),
('Tamil Nadu', 'Chennai'),
('Tamil Nadu', 'Coimbatore'),
('Tamil Nadu', 'Cuddalore'),
('Tamil Nadu', 'Dharmapuri'),
('Tamil Nadu', 'Dindigul'),
('Tamil Nadu', 'Erode'),
('Tamil Nadu', 'Kanchipuram'),
('Tamil Nadu', 'Kanyakumari'),
('Tamil Nadu', 'Karur'),
('Tamil Nadu', 'Madurai'),
('Tamil Nadu', 'Nagapattinam'),
('Tamil Nadu', 'The Nilgiris'),
('Tamil Nadu', 'Namakkal'),
('Tamil Nadu', 'Perambalur'),
('Tamil Nadu', 'Pudukkottai'),
('Tamil Nadu', 'Ramanathapuram'),
('Tamil Nadu', 'Salem'),
('Tamil Nadu', 'Sivagangai'),
('Tamil Nadu', 'Tiruppur'),
('Tamil Nadu', 'Tiruchirappalli'),
('Tamil Nadu', 'Theni'),
('Tamil Nadu', 'Tirunelveli'),
('Tamil Nadu', 'Thanjavur'),
('Tamil Nadu', 'Thoothukudi'),
('Tamil Nadu', 'Thiruvallur'),
('Tamil Nadu', 'Thiruvarur'),
('Tamil Nadu', 'Tiruvannamalai'),
('Tamil Nadu', 'Vellore'),
('Tamil Nadu', 'Villupuram'),
('Tripura', NULL),
('Tripura', 'Dhalai'),
('Tripura', 'North Tripura'),
('Tripura', 'South Tripura'),
('Tripura', 'West Tripura'),
('Uttarakhand', NULL),
('Uttarakhand', 'Almora'),
('Uttarakhand', 'Bageshwar'),
('Uttarakhand', 'Chamoli'),
('Uttarakhand', 'Champawat'),
('Uttarakhand', 'Dehradun'),
('Uttarakhand', 'Haridwar'),
('Uttarakhand', 'Nainital'),
('Uttarakhand', 'Pauri Garhwal'),
('Uttarakhand', 'Pithoragharh'),
('Uttarakhand', 'Rudraprayag'),
('Uttarakhand', 'Tehri Garhwal'),
('Uttarakhand', 'Udham Singh Nagar'),
('Uttarakhand', 'Uttarkashi'),
('Uttar Pradesh', NULL),
('Uttar Pradesh', 'Agra'),
('Uttar Pradesh', 'Allahabad'),
('Uttar Pradesh', 'Aligarh'),
('Uttar Pradesh', 'Ambedkar Nagar'),
('Uttar Pradesh', 'Auraiya'),
('Uttar Pradesh', 'Azamgarh'),
('Uttar Pradesh', 'Barabanki'),
('Uttar Pradesh', 'Badaun'),
('Uttar Pradesh', 'Bagpat'),
('Uttar Pradesh', 'Bahraich'),
('Uttar Pradesh', 'Bijnor'),
('Uttar Pradesh', 'Ballia'),
('Uttar Pradesh', 'Banda'),
('Uttar Pradesh', 'Balrampur'),
('Uttar Pradesh', 'Bareilly'),
('Uttar Pradesh', 'Basti'),
('Uttar Pradesh', 'Bulandshahr'),
('Uttar Pradesh', 'Chandauli'),
('Uttar Pradesh', 'Chitrakoot'),
('Uttar Pradesh', 'Deoria'),
('Uttar Pradesh', 'Etah'),
('Uttar Pradesh', 'Kanshiram Nagar'),
('Uttar Pradesh', 'Etawah'),
('Uttar Pradesh', 'Firozabad'),
('Uttar Pradesh', 'Farrukhabad'),
('Uttar Pradesh', 'Fatehpur'),
('Uttar Pradesh', 'Faizabad'),
('Uttar Pradesh', 'Gautam Buddha Nagar'),
('Uttar Pradesh', 'Gonda'),
('Uttar Pradesh', 'Ghazipur'),
('Uttar Pradesh', 'Gorkakhpur'),
('Uttar Pradesh', 'Ghaziabad'),
('Uttar Pradesh', 'Hamirpur'),
('Uttar Pradesh', 'Hardoi'),
('Uttar Pradesh', 'Mahamaya Nagar'),
('Uttar Pradesh', 'Jhansi'),
('Uttar Pradesh', 'Jalaun'),
('Uttar Pradesh', 'Jyotiba Phule Nagar'),
('Uttar Pradesh', 'Jaunpur District'),
('Uttar Pradesh', 'Kanpur Dehat'),
('Uttar Pradesh', 'Kannauj'),
('Uttar Pradesh', 'Kanpur Nagar'),
('Uttar Pradesh', 'Kaushambi'),
('Uttar Pradesh', 'Kushinagar'),
('Uttar Pradesh', 'Lalitpur'),
('Uttar Pradesh', 'Lakhimpur Kheri'),
('Uttar Pradesh', 'Lucknow'),
('Uttar Pradesh', 'Mau'),
('Uttar Pradesh', 'Meerut'),
('Uttar Pradesh', 'Maharajganj'),
('Uttar Pradesh', 'Mahoba'),
('Uttar Pradesh', 'Mirzapur'),
('Uttar Pradesh', 'Moradabad'),
('Uttar Pradesh', 'Mainpuri'),
('Uttar Pradesh', 'Mathura'),
('Uttar Pradesh', 'Muzaffarnagar'),
('Uttar Pradesh', 'Pilibhit'),
('Uttar Pradesh', 'Pratapgarh'),
('Uttar Pradesh', 'Rampur'),
('Uttar Pradesh', 'Rae Bareli'),
('Uttar Pradesh', 'Saharanpur'),
('Uttar Pradesh', 'Sitapur'),
('Uttar Pradesh', 'Shahjahanpur'),
('Uttar Pradesh', 'Sant Kabir Nagar'),
('Uttar Pradesh', 'Siddharthnagar'),
('Uttar Pradesh', 'Sonbhadra'),
('Uttar Pradesh', 'Sant Ravidas Nagar'),
('Uttar Pradesh', 'Sultanpur'),
('Uttar Pradesh', 'Shravasti'),
('Uttar Pradesh', 'Unnao'),
('Uttar Pradesh', 'Varanasi'),
('West Bengal', NULL),
('West Bengal', 'Birbhum'),
('West Bengal', 'Bankura'),
('West Bengal', 'Bardhaman'),
('West Bengal', 'Darjeeling'),
('West Bengal', 'Dakshin Dinajpur'),
('West Bengal', 'Hooghly'),
('West Bengal', 'Howrah'),
('West Bengal', 'Jalpaiguri'),
('West Bengal', 'Cooch Behar'),
('West Bengal', 'Kolkata'),
('West Bengal', 'Malda'),
('West Bengal', 'Midnapore'),
('West Bengal', 'Murshidabad'),
('West Bengal', 'Nadia'),
('West Bengal', 'North 24 Parganas'),
('West Bengal', 'South 24 Parganas'),
('West Bengal', 'Purulia'),
('West Bengal', 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `sell_offer`
--

CREATE TABLE `sell_offer` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `unit_id` varchar(10) NOT NULL,
  `c_id` varchar(5) NOT NULL,
  `description` text NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `status` varchar(3) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL DEFAULT '0',
  `offer_date` varchar(10) NOT NULL,
  `offer_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_offer`
--

INSERT INTO `sell_offer` (`id`, `product_id`, `username`, `product_title`, `price`, `quantity`, `unit_id`, `c_id`, `description`, `img_url`, `status`, `view`, `offer_date`, `offer_time`) VALUES
(19, '5cec5153d679b40d49488ecb9dd9d86e', '670fae8ae8c517060baacb1190d893b4', 'Night sky moon digital projection clock', '270', '14', '1', '5', 'buy new Night sky moon digital projection clock for your home', 'night_sky_moon_digital_projection_clock.jpg', '1', 99, '18-04-02', '19-09-49'),
(20, 'f3b40617806631faf4f895e85482c962', '670fae8ae8c517060baacb1190d893b4', 'electric water bags to heat your stomuch', '160', '10', '1', '4', 'buy new quality item Electric Water bags to heat your stomach', 'electric_water_bags_to_heat_your_stomuch.jpg', '1', 24, '18-04-10', '19-28-19'),
(21, '1783ceb6646e52ba32d71704299cd5f1', 'c86da2729ab8f79d8f582e9abc469eb0', 'wheet', '10', '100', '10', '1', 'plz buy wheet', 'wheet.jpg', '1', 61, '18-04-12', '10-20-16');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(10) NOT NULL,
  `unit_name` varchar(50) NOT NULL,
  `unit_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit_name`, `unit_id`) VALUES
(1, 'piece', 1),
(2, 'kilogram', 2),
(3, 'Gram', 3),
(5, 'liter', 5),
(7, 'miter', 7),
(8, 'kilomiter', 8),
(9, 'mili miter', 9),
(10, 'Tonne', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`, `name`, `street`, `city`, `state`) VALUES
(38, '670fae8ae8c517060baacb1190d893b4', 'guptarajat20071995@gmail.com', '111111', '7081717420', 'Rajat Gupta', 'i 45 barra world bank', 'kanpur NAGAR', 'uttar pradesh'),
(39, 'c86da2729ab8f79d8f582e9abc469eb0', 'pravin', '111111', '8989709878', 'Pravin Kumar', 'Hgcvjh ', 'deoria', 'Uttar Pradesh'),
(40, '9001587b0fed20a2cb33e43a51bb3f83', 'ram@gmail.com', '111111', '8970787978', 'ram singh', 'ram awadh street', '', 'Uttar Pradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_req`
--
ALTER TABLE `buy_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecart`
--
ALTER TABLE `ecart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_offer`
--
ALTER TABLE `sell_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy_req`
--
ALTER TABLE `buy_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ecart`
--
ALTER TABLE `ecart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sell_offer`
--
ALTER TABLE `sell_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
