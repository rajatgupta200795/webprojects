-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2018 at 04:04 PM
-- Server version: 5.6.39-cll-lve
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
-- Database: `ewisheso_ewishesonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_req`
--

CREATE TABLE `buy_req` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `budget` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `c_id` int(5) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1',
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_req`
--

INSERT INTO `buy_req` (`id`, `username`, `product_title`, `quantity`, `budget`, `description`, `c_id`, `status`, `view`) VALUES
(10, '670fae8ae8c517060baacb1190d893b4', 'wheet', '1', '1', 'ygyuuy', 0, 1, 0),
(11, '670fae8ae8c517060baacb1190d893b4', 'Buy Red Cotton Shirt Of Nike', '10', '200', 'Buy as soon as possible', 0, 2, 0);

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
(1, 'home', 1),
(10, 'kitchen', 2),
(11, 'electronics', 3),
(12, 'clothing', 4),
(13, 'footwear', 5),
(14, 'jwellery', 6),
(15, 'women accessories ', 7),
(16, 'beauty', 8),
(17, 'men accessories', 9),
(20, 'camera accessories', 10),
(21, 'mobile', 11),
(22, 'mobile accessories', 12),
(23, 'books', 13),
(24, 'car accessories', 14),
(25, 'computer accessories', 15),
(26, 'health & care', 16);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `title` varchar(450) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `mrp` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `img_url` varchar(350) NOT NULL,
  `upload_date` varchar(20) NOT NULL,
  `upload_time` varchar(20) NOT NULL,
  `c_id` varchar(11) NOT NULL,
  `sc_id` varchar(11) NOT NULL,
  `stock` int(3) NOT NULL,
  `other_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `title`, `brand`, `description`, `item_id`, `mrp`, `price`, `img_url`, `upload_date`, `upload_time`, `c_id`, `sc_id`, `stock`, `other_link`) VALUES
(49, 'Sony MDR-ZX110AP On-Ear Stereo Headphones with Mic (Black)', 'Sony', '30mm Dynamic Driver Unit.</br>\r\nOn-Ear Headband.</br>\r\nFour-conductor gold-plated L-shaped stereo mini plug', '5bdd07503c6f7a268fe74c9f4f33ee20', 1390, 950, 'Sony-MDR-ZX110AP-On-Ear-Stereo-Headphones-with-Mic-(Black).jpg', '18-02-18', '18:56:32', '3', '111111', 5, 'https://www.amazon.in/Sony-MDR-ZX110AP-Stereo-Headphones-Black/dp/B00NBR6RDS/ref=sr_1_1?s=electronics&ie=UTF8&qid=1518975014&sr=1-1&keywords=sony+zx110ap'),
(50, 'Philips SHE1405WT In-Ear Headphone with Mic', 'Philips', 'These snug-fitting headphones isolate external noises, so you can listen to music in peace even when you\'re stuck in traffic. The super-small speaker drivers fit inside your ears comfortably.</br> Enjoy hands-free calling by using the integrated microphone and call button.</br> The cable connector is well-protected by the soft rubber that\'s between these headphones and the cable. This way, these headphones\' life is extended', 'f27520b7545571834f2a09653817bab4', 450, 350, 'Philips-SHE1405WT-In-Ear-Headphone-with-Mic.jpg', '18-02-18', '19:16:32', '12', '111113', 5, 'https://www.amazon.in/Philips-SHE1405WT-Ear-Headphone-Mic/dp/B074CX41R2/ref=sr_1_1?s=electronics&ie=UTF8&qid=1518974964&sr=1-1&keywords=Philips+SHE1405WT+In-Ear+Headphone'),
(51, 'Budget Series Supreme In-Ear Bass Earphone (Black)', 'SONILEX', 'Sonilex in-ear earphone with mic.', '9c771318d159895d1bb6867724fbad1a', 150, 100, 'SONILEX-Budget-Series-Supreme-In-Ear-Bass-Earphone-(Black).jpg', '18-02-18', '19:51:50', '12', '111113', 5, 'https://www.amazon.in/SONILEX-Budget-Supreme-Earphone-Black/dp/B06XGLXP47/ref=sr_1_2?s=electronics&i'),
(52, '12-V Portable Car Vaccum Cleaner Multipurpose Vacuum Cleaner-210', 'Saleonâ„¢', 'Keep your car regularly clean with this amazing and powerful vacuum cleaner with the long handle attachment that reaches the most difficult corner areas in your car. Now feel confident in letting your friends or colleagues be seated anywhere in your car.</br>\r\nVacuum cleaner Reaches the most difficult corner areas in your car 12V power Just plug-n-play using the cigarette lighter power</br>\r\nPower cable length: 240 cm</br>\r\nIt is extremely handy and useful device for car</br>\r\nPacket content: 1* Car Vacuum Cleaner', '40bbcbc75c72d1786b8437316c5ba057', 400, 250, 'Saleon-12-V-Portable-Car-Vaccum-Cleaner-Multipurpose-Vacuum-Cleaner-210.jpg', '18-02-18', '22:06:19', '14', '111114', 10, 'http://amzn.to/2nZq0h0'),
(53, '7 Ports USB Hub 2.0 for Laptop Desktop With Independent On/Off Switches (Black)', 'OneKlik', 'USB hub with 7-port Fully compatible with the Universal Serial Bus Specification version1.1/2.0/\r\nUse multiple peripherals like a microphone, mouse, keyboard, printer and webcam.</br>\r\n1 X USB Hub 7 Port</br>\r\nLED indicator, Switch On/Off</br>\r\n100mA current per port', '0b1fbdd745e640f37f4ac6fb7ad828ef', 600, 300, 'OneKlik-7-Ports-USB-Hub-2-for-Laptop-Desktop-With-Independent-On-Off-Switches-(Black).jpg', '18-02-18', '22:49:47', '15', '111115', 10, 'http://amzn.to/2nWpGAx'),
(54, 'Multi Grid Acrylic Makeup Organiser Transparent Plastic Makeup Cosmetic Storage Box Lipstick', 'OneKlik', 'Keeps Cosmetics Organized and at Your Fingertips.</br>\r\nLovely Design with Multiple Compartments for all types of Cosmetics.</br>\r\nClear and Sturdy Fashion Design fits in any space and decor. Holds Lip Sticks, Brushes, Eye Brow Pencils, Mascaras and More.</br>\r\nMade of Durable, Top Quality Transparent Acrylic. Smooth Corners.</br>\r\nSize: 22 cm x 13 cm x 8 cm', 'b6b10cc84dff441a4db634f9dde912a5', 1500, 499, 'OneKlik-Multi-Grid-Acrylic-Makeup-Organiser-Transparent-Plastic-Makeup-Cosmetic-Storage-Box-Lipstick-Nail-Paint-Polish-Holder-Display-Stand-Organizer.jpg\r\n', '18-02-18', '23:41:18', '8', '111116', 10, 'http://amzn.to/2o6t1MK'),
(55, 'Yesido Most Fashionable Car Mobile Holder | Mount 360 Degree Rotating | Car Mobile Holder Dashboard | Car Mobile Holder Rotatable | Car Mobile Holder Windshield | Car Mobile Holder 360 Degree Rotation | Car Mobile Holder Mount Front Glass | Adjustable Car Windshield for Phones C-17\r\n', 'Yesido', 'Premium Quality Mobile Holder for Car with One-Hand Easy Operation </br>\r\nmats safer and more secure  </br>\r\nEasily Install The Car Mount And Avoid All Interference With All CD Player.Benefit From An Adjustable Construction That Suits All Smartphones Between 1.58 - 3.9 In Width Like iPhone 4S And iPhone 8 </br>\r\nBenefit From A Gradual Release And Avoid Dropping Your Phone. </br>\r\nAdjustable Design : Rotate The Supports Ball Joint To Always Get The Most Suitable Viewing Angle.  </br>\r\nEnjoy A 2-Way Insertion Design That Would not Obstruct The CD Players Accessibility.', '1fcf476d853ac84419bb168d4deb209c', 600, 299, 'Yesido-Most-Fashionable-Car-Mobile-Holder--Mount-360-Degree-Rotating--Car-Mobile-Holder-Dashboard--Car-Mobile-Holder-Rotatable--Car-Mobile-Holder-Windshield--Car-Mobile-Holder-360-Degree-Rotation.jpg', '18-02-19', '15:37:45', '14', '111111', 5, 'http://amzn.to/2GacBdj'),
(56, 'Yesido Most Fashionable Car Mobile Holder | Mount 360 Degree Rotating | Car Mobile Holder Dashboard | Car Mobile Holder Rotatable | Car Mobile Holder Windshield | Car Mobile Holder 360 Degree Rotation | Car Mobile Holder Mount Front Glass | Adjustable Car Windshield for Phones C-16\r\n', 'Yesido', 'One-Hand Easy Operation : Put And Release Your Smartphone With Just One Hand Thanks To The Side Mounted Release Button Benefit From A Gradual Release And Avoid Dropping Your Phone.</br>\r\nBenefit: Benefit From A Gradual Release And Avoid Dropping Your Phone.</br>\r\nIngenious Construction : Easily Install The Car Mount And Avoid All Interference With All CD Player.</br>Benefit From An Adjustable Construction That Suits All Smartphones Between 1.58 - 3.9 In Width Like iPhone 4S And iPhone 8.</br>\r\nAdjustable Design : Rotate The Supports Ball Joint Up To 360Ã‚Â° To Always Get The Most Suitable Viewing Angle. Enjoy A 2-Way Insertion Design  That Would not Obstruct The CD Players Accessibility.</br>\r\nDetachable Ledge For Triple Protection : The Detachable Ledge At The Bottom Of The Bracket Creates A Resting Shelf For Additional Support.', 'b62f24a5020b5d41ef04d7238201c02a', 999, 749, 'Yesido-Most-Fashionable-Car-Mobile-Holder-|-Car-Mobile-Holder-Dashboard-|-Car-Mobile-Holder-Windshield-|-Car-Mobile-Holder-360-Degree-Rotation-|-Car-Mobile-Holder-Mount-Front-Glass-|-Adjustable-Car-Windshield-for-Phones-C-16.jpg', '18-02-19', '16:50:14', '14', '111111', 5, 'http://amzn.to/2GcA9yl'),
(57, 'SMART CAR MOUNT HOLDER WITH TELESCOPIC ADJUSTMENT ARAM- DESIGN FOR INCHES SMART PHO', 'JL ENTERPRISES', 'Material: ABS+ Silicone - PREMIERE QUALITY </br>\r\n1) Super mini stature design, do noy file the line of sight,does not occupy space. </br>\r\n2)The clamp arm telescopic, adjustment , the maximum width of 86mm, side with non-slip mats, Safer and more secure.</br>\r\n3)360 degree rotation can be adjusted for optimal viewing.</br>\r\n4)Cone clip designed for cold mouth. Imported high quality ABS material , fell comfortabLe, cold temperature, long service life', '27fca1f0a10e05ff02a541fd2750a67e', 1050, 699, 'JL-ENTERPRISES---SMART-CAR-MOUNT-HOLDER-WITH-TELESCOPIC-ADJUSTMENT-ARAM--DESIGN-FOR-INCHES-SMART-PHONE---PREMIERE-QUALITY-C15.jpg', '18-02-19', '16:07:37', '14', '111111', 5, 'http://amzn.to/2HdAr9t'),
(59, 'Fruit Infuser Water Bottle Infusion BPA Free Transparent Plastic Sport Outdoor Detox Drink J', 'OneKlik', 'DRINK MORE WATER - Maintain the Balance of Body Fluids, Lose Weight by Controlling Calories, Energize </br>and Hydrate Your Muscles, Speed up Metabolism, Keeping Your Skin Look Radiant and Healthy. There </br>are endless benefits of drinking more water! LIVE HEALTHIER No more boring water! Now you can get the hydration your body needs with all the flavors you love!</br>\r\n<b>â–º </b>SAFE TO USE : Finger grips and a sports spout makes it fun to use while drinking in the car, exercising, at</br> the office, outdoors, back to school, running, or the gym. You can also hang the strap on your belt or </br>backpack. Built with durable Eastman Tritan, a clear BPA Free co-polyester, tested to be FDA safe for use with foods and beverages.</br>\r\nSAFETY AND CARE: Not For Hot Filling, Wash With Luke Warm Water, Do Not Scrub With Scrubber. LIVE HEALTHIER No more boring water! Now you can get the hydration your body needs with all the flavors you love!</br>\r\nUNIQUE GIFTS IDEA - Perfect for Birthdays, Moms, Wifes, Husbands and Anyone Who Loves being Healthy. Material: Container is made of PET material, USFDA Approved PET (Ployethylene Threpthalate) Material. BPA</br>\r\n FreeMaterial: Container is made of PET material, USFDA Approved PET (Ployethylene Threpthalate) Material. BPA Free																																																																			', '8aaa5166d03689e18f7061f183015551', 989, 299, 'OneKlik-Fruit-Infuser-Water-Bottle-Infusion-BPA-Free-Transparent-Plastic-Sport-Outdoor-Detox-Drink-Juice-Bottle-Pack-of-1-(Color-May-Vary)-750-ML-Sports-Water-Bottle-FREE-BOTTLE-CLEANING-BRUSH.jpg', '18-02-19', '17:35:24', '2', '111118', 40, 'http://amzn.to/2o6QOw3'),
(60, '5 in 1 Multi-Function Portable Facial Skin Care Electric Massager For Women ( Multicolor)', 'OneKlik', 'Effectively clean through your pore, prevent whelk and fade the black eye. </br>\r\nIt comes with 5 different heads to fit different request, and all heads can rotate 360 degrees. </br>\r\nMeet your need of both cleaning and massage on face or body. </br>\r\nSuitable for daily use . It is suitable for all types of skins.Smooth skin texture, skin refresh.</br>\r\nModeling beautiful, not changeful form, high temperature resistant,do not harm the Skin.', 'eb8300970f9d57f5d9d6c75361b3b0d0', 845, 279, 'OneKlik-5-in-1-Multi-Function-Portable-Facial-Skin-Care-Electric-Massager-For-Women-(-Multicolor).jpg', '18-02-19', '17:08:37', '8', '111111', 25, 'http://amzn.to/2EqdKRS'),
(61, 'Chef Basket Cooker Strainer 12 In 1 Kitchen Tool Cooks Net - Flexible Kitchen Helper Kitchen', 'OneKlik', 'Made of Stainless Steel material,which would not be rusted if you drying in after washing.</br>\r\nFoldable and flips for flexibility,easy to storage anywhere.Specially designed handles stay cool to the touch.</br>\r\nMulti-functional tools,Not only can be used to fry foods ,but also can be used as fruit basket.</br>\r\nIt starts off flat and instantly expands to a flexible basket that let you cook, boil, or deep fry foods with ease.</br>\r\nWorks in boiling water or hot frying oil.Perfect kitchen helper for all your stove top kitchen needs.', '0d64c4187f3d3fc47525085c73cc4fc8', 1289, 449, 'OneKlik-Chef-Basket-Cooker-Strainer-12-In-1-Kitchen-Tool-Cooks-Net---Flexible-Kitchen-Helper-Kitchen-Tool.jpg', '18-02-19', '21:40:36', '2', '111119', 50, 'http://amzn.to/2Hbz8In'),
(63, 'Bm400 12Mp 1080P , 1.5 Inch ACtion Sport Camcorder For Mi 6 (Multi-Color)', 'OneKlik', 'A Super Great Product Compare To Previous Generation Cameras. With Lens, You Could Take A Wide Angle..</br>\r\nSupport Storage Cards Up To 32Gb Maximum(Micro Sd Card Class6 Above,Not Included In Package).</br>\r\nWater Resistant 30 Meters: A Water-Resistant Casing That Allows You To Film Fascinating Water Sports.</br>\r\nMini Appearance, Diversified Colors Available. High Definition Screen That Displays And Replays Fascinating Videos Recorded.', 'e68ec577d1f3119bc2799964551fdf39', 1989, 1299, 'OneKlik-Bm400-12Mp-1080P-,-1.5-Inch-ACtion-Sport-Camcorder-For-Mi-6-(Multi-Color).jpg', '18-02-19', '21:22:45', '10', '111120', 50, 'http://amzn.to/2o2Z1RL'),
(65, 'Smartwatch_Dz09_3 Bluetooth Smart Watch With Camera For All 3G,4G Phones (Brown)', 'OneKlik', 'Sim Card Support( GSM, micro SIM ),TF Card upto 32 GB,2 mp camera,Audio/Video supported.</br>G-sensor\r\nDurable and Reliable Performance from a high quality manufacturing unit.</br>\r\nCompatibility: All Android and iOS Mobile Phone & Android Tablet PC. Android Mobile Phone: Samsung, HTC, Sony, LG, HUAWEI, ZTE, OPPO, XIAOMI, and so on.</br>\r\n iOS Mobile Phone: iPhone 6, iPhone 6 plus, iPhone 5, iPhone 5s , iPhone 4, iPhone 4s (This APP can not be installed by iOS, Apple system can not sync SMS and Bluetooth push information,</br> but other functions can be used by iPhone); Android(4.3 and above) Tablet PC: Samsung, Nexus, Onda, Newsmy, and so on.</br>\r\nBest in segment Display, Touch, Chipset and Working memory(Compared to all products in this segment)\r\nMake phone call directly from the smart watch,including answering and dial-up.SIM slot,support make calls by Bluetooth or smart watch.', 'ce5467a4ab19f9675b60313befc63728', 1875, 999, 'OneKlik-Smartwatch_Dz09_3-Bluetooth-Smart-Watch-With-Camera-For-All-3G,4G-Phones-(Brown).jpg', '18-02-19', '21:43:52', '10', '111121', 8, 'http://amzn.to/2Cgx5yU'),
(67, 'mStick Universal Mobile & Small Size Camera & Selfie Stick Holder Tripod Attachement', 'OneKlik', 'ATTACHES TO ANY STANDARD TRIPOD for recording video, taking pictures, or to use your phone as a webcam. </br>This Phone Tripod Adapter will also attach to mini-tripods\r\nULTRASTRONG FIX Although our Cell Phone Tripod Adapter is highly lightweight and portable,</br> the mount is very strong, so that it will keep your phone in place even in rough and shaky conditions.</br>\r\nMOUNTS ON ALMOST ALL TRIPODS Most tripods use a standard Å’ screw, which is of course supported by our Cell Phone Tripod Adapter. Therefore, it does not matter what tripod you have.</br> You are able to mount your Cell Phone Tripod Adapter on nearly any standard tripod without problems.</br>\r\nDoes not fit tablets and phablets. For the best grip, please remove the back cover,flip cover of your mobile phone before using this attachment and High quality springs give it elasticity to fit any phone size.', '83aa2c2e7ebe741c7d691e3459d85055', 979, 319, 'OneKlik-mStick-Universal-Mobile-&-Small-Size-Camera-&-Selfie-Stick-Holder-Tripod-Attachement.jpg', '18-02-19', '22:50:03', '12', '111122', 50, 'http://amzn.to/2o1HkSA'),
(68, 'VK-777 Stylish Earphone With Mic High Performance Stereo Sound Quality Headphone With Silicone Buds  Comfortable To All Android, IOS Smartphones, Tablets, Laptop, PC, Multi Colours', 'Vlike', 'PERFECT SOUNDTRACK: High Quality powerful crisp sound with unbelievable tones and Deep Bass to create an exciting and fun listening experience.</br> Perfect soundtrack and the best partner for your mobile.</br> \r\nLIGHT WEIGHT: Compact housings designed to make it the perfect choice when exercising, Traveling, Enjoying music during your daily routines.</br> \r\nEASY ACCESS: 100% Brand new product allows easy access to all buttons, controls, built-in microphone in the</br>  ear headset powerful Bass booster stereo sound with high quality package compatible with all Smartphones.</br> \r\n3.5 mm Plug with Insulation detail design can well protect the ears and device. High Purity Oxygen-Free Copper wire core can reduce transmission loss </br> Effectively to Express the most real aspect of Music. The bulit-in mic handsfree.</br> \r\nSPECIFICATIONS: Speaker diameter : 10 mm, Frequency Range : 18-20,000 HZ, Sensitivity : 116 + 3db Plastic coated rounded cable with the durable 130 cm cable with a 3.5 mm gold plated jack on the end for reliable connectivity.', '93ff2b1f926f39d5c64785bd2e7de6e7', 549, 229, 'Vlike-VK-777-Stylish-Earphone-With-Mic-High-Performance-Stereo-Sound-Quality-Headphone-With-Silicone-Buds-Durable-And-Comfortable-Stereo-Wired-Headset-130-cm-Plastic-Coated-Cable-With-3.5-mm-Jack-Comfortable.jpg', '18-02-19', '22:29:11', '12', '111113', 50, 'https://www.amazon.in/Earphone-Performance-Headphone-Comfortable-Smartphones/dp/B079WDNHXH/ref=sr_1_fkmr0_1?s=electronics&ie=UTF8&qid=1519058129&sr=1-1-fkmr0&keywords=voice+vk777+earphones+high+qualit'),
(70, 'Mist Spray water Bottle 600 ml \"Pink\" Newest Design Plastic Sports Spray Water Bottle Straw For Outdoor Bicycle Cycling Sports Gym Drinking Bottles', 'OneKlik', 'Leak Proof Design, Use As Water Bottle or As Water Sprayer For Instant Refreshment.</br>\r\n600 ml Capacity, BPA Free Bottle, Odour Less, Multi Color</br>\r\nUse it anywhere you wanted to use in travelling, Walking,Jogging, in Sports And Yoga Or Gymming Activity, Used in Indoor and Out door also</br>\r\nInstant Refreshing Coling Bottle, Also You Can Add Cologne Or Rose Water Drops For Fragrance And Refreshment </br>\r\nIdeal to carry water, juice, flavored water etc. Beautiful and attractive designs.', '3744afa98d836a4a615f87226f0796d2', 1289, 575, 'OneKlik-Mist-Spray-water-Bottle-600-ml-Pink-Newest-Design-Plastic-Sports-Spray-Water-Bottle-Straw-For-Outdoor-Bicycle-Cycling-Sports-Gym-Drinking-Bottles.jpg', '18-02-19', '22:45:51', '2', '111123', 30, 'http://amzn.to/2o38vwt'),
(71, 'Electric Egg Boiler Poacher Stylish 7 Egg Boiled Cooker', 'Inovera', 'Material : Plastic + Steel </br>\r\nColour : Multi(Colour Will Be Send As Per Available In Stock..)</br>\r\nCook seven eggs at once with this automatic Egg Cooker/boiler.</br>\r\nYou can consistently prepare eggs the way you like without fat or oil.</br>\r\nSize : 17L x 17W x 15H cm.', '74d2359ffa705b2fb137728d4824c030', 799, 379, 'Inovera-Electric-Egg-Boiler-Poacher-Stylish-7-Egg-Boiled-Cooker.jpg', '18-02-19', '23:18:19', '2', '111117', 5, 'https://www.amazon.in/Inovera-Electric-Boiler-Poacher-Stylish/dp/B01N2S18UO/ref=sr_1_3?s=hpc&ie=UTF8&qid=1519061969&sr=8-3&keywords=egg+poucher'),
(72, 'Sweet Sensitive Touch Electric Trimmer for Women Eyebrow Trimmer (Hair Removal) set of 5pc offer', 'OneKlik', 'Gentle hair removal and precise shaping for your delicate body parts, ideal for upper lip, side burns and eyebrows.</br>\r\nHigh Precision: Dedicated accessories to get precise shaping and styling.</br>\r\nIdeal also for quick touch-ups wherever you go. As its cutting blades do not touch the skin, there is no fear of cuts.</br>\r\nQuick and Gentle: Easily remove any unwanted hair in one go.', 'd86d0ca806e6cdcd265918781be6875a', 1389, 579, 'OneKlik-Sweet-Sensitive-Touch-Electric-Trimmer-for-Women-Eyebrow-Trimmer-(Hair-Removal)-set-of-5pc-offer.jpg', '18-02-19', '23:42:38', '16', '111124', 30, 'http://amzn.to/2o2woUU'),
(74, 'Stylish Manipol Full Body Muscles Relief Fat Burning Massagers Off White', 'OneKlik', 'A new generation of push fat massage machine adopts the innovation of light design flow line, is a strong power of massager.</br>\r\nWavy massage head: designed for deep massage acupuncture points design to strengthen blood circulation </br>and improve the body function, is a specialized massage physical therapy to enjoy.</br>\r\nBall type massage head: designed for oil massage design, powerful introduction, depth activation absorption efficiency.</br>\r\nControls Diabetes & blood pressure. Generates inner strength in the whole body. Improves Blood Circulation. Relieves back pain, muscle pain and neuralgia.</br>\r\nStrengthens the Spinal column and Joints. Improves Digestion. Increases immunity to allergies. Firming and toning of thighs, hips, buttocks, stomach and chest. Relieve from various diseases.', 'ab2b2af46b49e287c777438479ea2f67', 1579, 629, 'OneKlik-Stylish-Manipol-Full-Body-Muscles-Relief-Fat-Burning-Massagers-Off-White.jpg', '18-02-19', '23:36:52', '16', '111125', 30, 'http://amzn.to/2EEX606'),
(75, 'Dtes Electric Body Slimmer Roller Loss Weight Slimming Massager Handle Device 2attachments', '', 'Strong while soft enoug silicon teeth shape rollers, deeply grasp your muscle and rotate at very high frequency to break fat tissues underneath.</br>\r\nSoft hand-belt provides comfortable usage.</br>\r\nDurable design and high quality materials provide reliable quality, over 200 hours running test, to protect and build your high brand image.</br>\r\nUniversal charger, fit for worldwide usage, covering 100-240V, 50-60Hz.</br>\r\nReduces cellulite and promotes firm and smooth skin\r\n ', 'e0ab8c4f560e2ecb16ed31f630f9e156', 1110, 589, 'Dtes-Electric-Body-Slimmer-Roller-Loss-Weight-Slimming-Massager-Handle-Device-2attachments.jpg', '18-02-19', '23:03:59', '16', '111125', 30, 'http://amzn.to/2o17wws'),
(76, 'Relax Spin and Tone Spa Grade 5 Head Cellulite Massager - Relieve Tension and Feel Stress Free', '', 'The Relax and Spin Tone is an effective,light weight and portable device capable of targeting abs,buns,thighs,calves and under arm.</br>\r\nIts unique oscillating feature penetrates deeplyinto the inner layers of skin for muscle toning and deeo tissue massage.</br>\r\nThe Relax and Spin Tone comes with the unique 360 degree off-centered axis design which oscillates over 2500 times per minute,</br>and its incermental speed aial can adjust from a gentle massage to an intense workout meeting your every need.</br>\r\nRelieves pressure, restores vigor and vitality.</br>\r\nRemoves dead skin with abrasive head Relax & Tone Spin 2, second generation is the newest and</br> most advanced massage device that will help you have a body and an enviable health.', '04fff1d54c642b8526c773256072384e', 1789, 989, 'Relax-Spin-and-Tone-Spa-Grade-5-Head-Cellulite-Massager---Relieve-Tension-and-Feel-Stress-Free.jpg', '18-02-20', '00:13:11', '16', '111125', 30, 'http://amzn.to/2HcI5AP'),
(78, 'Urban Living Tobi Quick Travel Steamer(27.9X6.3X5.08 Cm,White - Blue)', '', 'Color:WHITE - BLUE</br>\r\nMaterial:PLASTIC</br>\r\nSize:11 X 2.5 X 2', 'aa07b994d0b7b828e8e57eb08dabb916', 1229, 789, 'Urban-Living-Tobi-Quick-Travel-Steamer(27.9X6.3X5.08-Cm,White---Blue).jpg', '18-02-20', '00:23:16', '1', '111126', 20, 'http://amzn.to/2o2YfUZ'),
(80, 'New White Portable Sealing Tool Heat Mini Handheld Plastic Bag Impluse Sealer', 'OneKlik', '100% brand new and high quality.</br>\r\nEasy, convenient to use and storage, ideal for home use.</br>\r\nYou simply slids it along the edge of any bag and it is sealed airtight.</br>\r\nBattery: 2x 1.5V AA batteries(Not included!).|Please read the instruction manual carefully and thoroughly before using this product for the first time.</br> This will help you to understand the entire product and ease you in getting setup this device.\r\nPerfect reseal unused portions of food, keep the food in freshness.', 'f862ea0cbb70655bd16963efcbd373d7', 1219, 399, 'Oneklik-New-White-Portable-Sealing-Tool-Heat-Mini-Handheld-Plastic-Bag-Impluse-Sealer.jpg', '18-02-20', '00:06:30', '1', '111127', 45, 'http://amzn.to/2Hd3CcX'),
(82, 'Amazing Kids Night Sky Moon Stars Projection Clock - With Color Changing Flashing Led Lights + Alarm', 'OneKlik', '1) Material: Plastic</br>\r\n2) Time Format: 12-hour or 24-hour 3) Display Type: Time</br>\r\n4) Thermometer Types: Centigrade Temperature or Fahrenheit Temperature </br>\r\n5) Powered By: 3 x AAA Batteries (not included)</br>\r\n6) A perfect addition for every bedroom Blends the features of nightlight, projector & alarm clock together</br> 7) Performs the basic functions of a clock, displaying time</br>\r\n8) Classic dome shape design with automatic projection focus', '383d0555e159e7cabb64d2afd796c178', 1189, 479, 'OneKlik-Amazing-Kids-Night-Sky-Moon-Stars-Projection-Clock---With-Color-Changing-Flashing-Led-Lights-+-Alarm.jpg', '18-02-20', '00:36:45', '1', '111128', 5, 'http://amzn.to/2EDhD4U'),
(84, 'New 450ml Electric Protein Shaker Blender Water Bottle Automatic Movement Vortex Tornado Transparent Multifunction Smart Mixer Cup', 'OneKlik', 'Fill mixer with desired liquid. Push button and allow tornado to form. </br>\r\nAdd other ingredients to the Vortex. Portable Mixer for instant mixing.</br>\r\nFOR ATHLETES Pre & Post Workout Nutrition, Mixes Instantly, Increased, Absorption, Portable, No Clumping, No Wasted Product</br>\r\nEVERYDAY MIXER FOR Energy and Drink Powders, Cocktails, Juices, Baby Formula, Eggs and Much More!</br>\r\nInstall 2 AAA Batteries - (remove rubber bottom to insert batteries) DO NOT TWIST OFF', '99ba23ab573e7d7052544cc4a003c61b', 1358, 759, 'OneKlik-New-450ml-Electric-Protein-Shaker-Blender-Water-Bottle-Automatic-Movement-Vortex-Tornado-Transparent-Multifunction-Smart-Mixer-Cup.jpg', '18-02-20', '01:58:00', '2', '111129', 30, 'http://amzn.to/2o2VbYR'),
(93, 'Electric Barbeque Grill Tandoori Maker for home use', 'OneKlik', 'Ideal & Perfect Electric Barbecue Grill For Your Needs of Tandoor and BBQ During Picnic, Camping, Trecking or Leisure Time at Home.</br> This is a combination grill & broiler - brown, broil, grill, toast or warm; this grill does most anything you need.</br>\r\nIt has a non-stick Steel Grill that comes with the package and it is detachable with COOL TOUCH Handle.</br> Adjustable Height. It eases your cooking at anytime.Indicator Lights & 5 Level Adjustable Temperature Control Knob to Cook as per your need.</br>\r\nCool touch handles, Thermostat control, Drip Tray Included, Power: 2000W</br>\r\n4 PVC pegs for usage on kitchen slabs, Adjustable Temperature, Power Indicator Light</br>\r\n3 Pin power cord - 1.5 m long, Auto Shut off Safety Feature, Package Contents: Main Unit of BBQ, 5 x Sticks, Water tray.', '317c41955ffd21b963dd07428d7ce96c', 2319, 1599, 'OneKlik-Electric-Barbeque-Grill-Tandoori-Maker-for-home-use.jpg', '18-02-20', '01:57:23', '2', '111119', 8, 'http://amzn.to/2EDhqyE'),
(95, 'E-Charge Wallet Delux Portable Power Bank and Credit Card Holder - Multicolor', 'OneKlik', 'Holds enough power to fully charge up to two Smart phones.</br>\r\nAccordion design organizes cards and cash; The stylish and durable casing is aluminum-constructed.</br>\r\nCompatible with all Smartphones including Samsung and iPhone.</br>\r\nE-Charge wallet indicator light fully lits when product is fully-charged; charge-time: 4-6 hours.</br>\r\nIncluded: USB for charging; RFID-protected; Size: 4.2 x 2.75 x 0.75 inches', '13356d230c32337faff92cc2bb9aebbe', 1519, 799, 'OneKlik-E-Charge-Wallet-Delux-Portable-Power-Bank-and-Credit-Card-Holder---Multicolor.jpg', '18-02-20', '01:14:46', '3', '111130', 30, 'http://amzn.to/2Hd51Af'),
(96, 'Branded Blow On Off Rechargeable Retro LED Lamp- USB Powered Excellent', 'OneKlik', 'Blowing Control- A gentle blow into the lampshade can turn on/off the lamp. (Please switch it ON initially.)</br>\r\nAdjustable brightness- You can use the Dimmer Control Knob to adjust the brightness, just like the traditional Kerosene lamps.</br>\r\nRechargeable built-in battery charge through USB cable.</br> With DC 5V USB port, can be connected to computer, power bank or USB adaptor.</br>\r\nRetro Design with modern long lasting, light weight material.</br>\r\nLED light, energy saving, durable and environmental friendly.', '313a13e742039528b69fcd3fae44d634', 981, 429, 'OneKlik-Branded-Blow-On-Off-Rechargeable-Retro-LED-Lamp--USB-Powered-Excellent.jpg', '18-02-20', '02:04:00', '3', '111131', 50, 'http://amzn.to/2EYMlmS'),
(98, 'Portable E-Laptop Table With Inbuilt cooling fan', 'OneKlik', 'Easy to set up, super thin, very light,</br>\r\nextra strong and sturdy Maximum load</br>\r\ncapacity of 25kg Foldable and portable</br>\r\nuse while traveling or at home Made of hard plastic fiber.', '8e899235cf6af8c1df7579e2061558da', 1399, 785, 'OneKlik-Portable-E-Laptop-Table-With-Inbuilt-cooling-fan.jpg', '18-02-20', '02:26:10', '15', '111132', 10, 'http://amzn.to/2HaPvos'),
(99, 'Docking Station with charging & sync 8pin Lighting Dock Stand for Android and Apple iPhone 5/5S/5C/SE/6/6S/7 (Color May Very - Black/White/Silver/Gold)', 'OneKlik', 'New Docking Station for iPhone 6, 5, 5S, 5C.</br>\r\nSync and charge your phone at the same time.</br>\r\nSmall Compact design, light weight, easy to carry.</br>\r\nCharges iPhone at same speed as cable.</br>\r\nOnly Dock Stand (Cable Not Included) --Color will be as per availability--BLACK/WHITE/SILVER/GOLD', '2eeac79b44e495284df872e3ad5b5535', 1119, 529, 'OneKlik-Docking-Station-with-charging-&-sync-8pin-Lighting-Dock-Stand-for-Android-and-Apple-iPhone-5|5S|5C|SE|6|6S|7-(Color-May-Very---Black,White,Silver,Gold).jpg', '18-02-20', '14:56:43', '12', '111122', 50, 'http://amzn.to/2ErGgCk'),
(100, 'Full HD 1080P 2.4 LCD Car Bus Truck DVR with Memory Card Slot Recording Night Vision Camcorder', 'ZVision', '2.4inch TFT LCD 16:9 * Minimum Illumination 1Lux * Recording way Cycle recording/motion detection</br>\r\nVideo format AVI * Video compression M-JPEG * View resolution 1080p, 720p, VGA * Photo resolution 3M, 2M, 1.3M, VGA * Video output format PAL/NTSC</br>\r\nG-sensor When the car crashes, it will save the files automatically and would not  be deleted * Lock by manual</br> When recording, short press on/off key, lock the present file by manual, then the file would not be deleted.</br>\r\nNight vision function infrared LED * Memory car TF card (not include) * Memory storage 2GB-32GB * USB interface Mini5Pin USB2.0 \r\n', '42a3689f8419264204d163fd8038d78d', 1990, 1199, 'ZVision-Full-HD-1080P-2.4-LCD-Car-Bus-Truck-DVR-with-Memory-Card-Slot-Recording-Night-Vision-Camcorder.jpg', '18-02-20', '14:19:55', '14', '111111', 5, 'http://amzn.to/2EZCcq9'),
(101, 'Black and Yellow Colour Tree Design Best Quality Durable Mobile Car Holder Mount Front Glass. Adjustable Car Windshield, Dashboard, Working Desk Mount (Black)', 'Yesido', 'One-Hand Easy Operation : Put And Release Your Smartphone With Just One Hand Thanks To The Side Mounted Release Button Benefit From A Gradual Release And Avoid Dropping Your Phone.</br>\r\nBenefit: Benefit From A Gradual Release And Avoid Dropping Your Phone.</br>\r\nIngenious Construction : Easily Install The Car Mount And Avoid All Interference With All CD Player.</br>Benefit From An Adjustable Construction That Suits All Smartphones Between 1.59 - 3.9 In Width Like iPhone 4S And iPhone 8.</br>\r\nAdjustable Design : Rotate The Supports Ball Joint Up To 360Ã‚Â° To Always Get The Most Suitable Viewing Angle. Enjoy A 2-Way Insertion Design That Would not Obstruct The CD Players Accessibility.</br>\r\nDetachable Ledge For Triple Protection : The Detachable Ledge At The Bottom Of The Bracket Creates A Resting Shelf For Additional Support.', '9e987162f0d499dfa07dd0abf96eff91', 999, 539, 'Yesido-Black-and-Yellow-Colour-Tree-Design-Best-Quality-Durable-Mobile-Car-Holder-Mount-Front-Glass.-Adjustable-Car-Windshield,-Dashboard,-Working-Desk-Mount-(Black).jpg', '18-02-20', '15:59:05', '14', '111111', 5, 'http://amzn.to/2o2rEyA'),
(102, 'Power Bank CM 8 20800 mAh-Assorted Color', 'Gizmobitz ', 'Capacity: Approx.20800mAh</br>\r\nStylish and compact design.</br>\r\nDual USB output ports.</br>\r\nEasy To Operate & Portable.</br>\r\nColor:Multi', '3e0b727fd4eccd63619ef63de84d2adc', 1889, 1179, 'Gizmobitz-Power-Bank-CM-8-20800-mAh-Assorted-Color.jpg', '18-02-20', '15:31:21', '12', '111133', 50, 'https://www.amazon.in/Gizmobitz-Power-20800-mAh-Assorted-Color/dp/B01N7LE6IR/ref=sr_1_10?s=home-improvement&ie=UTF8&qid=1519119839&sr=8-10&keywords=power+bank+20800mah'),
(103, ' EH-ND61-K62B Hair Dryer (Pink)', 'Panasonic', 'Powerful 2000w hair dryer.</br>\r\nCompact, lightweight and lets you blow dry quickly and comfortably.</br>\r\nThree wind settings.</br>\r\nThe powerful wind is created from added airflow pressure by a ring which is attached just before the nozzle.</br>\r\n220-240 volts', 'b0d60ba620ab47a688e7a59bbbff2524', 3179, 2479, 'EH-ND61-K62B-Hair-Dryer-(Pink).jpg', '18-02-20', '15:10:40', '8', '111134', 5, 'http://amzn.to/2GbKhYm'),
(104, 'EH-HT45-K62B Hair Styling Brush iron (32mm Barrel)', 'Panasonic', 'Easily create large curls and volume with 32mm barrel along with bristles.</br>\r\nAdjustable temperature 140 to 180C./br>\r\nCorded usage.</br>\r\nHair catching clip.</br>\r\nThe round plate is alunite-treated for effective thermal conduction which assures users to make uniform, bouncy curls whichever part of the heat barrel is used.</br>\r\nSubject to the terms and conditions mentioned on the product warranty card.</br>\r\n360 degree swivel cord.', 'b4ed59c69158bb85e74a182967f6a5f9', 3295, 2819, 'EH-HT45-K62B-Hair-Styling-Brush-iron-(32mm-Barrel).jpg', '18-02-20', '15:49:56', '8', '111134', 5, 'http://amzn.to/2F1sEuW'),
(105, 'E27 13-Watt LED Bulb (Warm White/Golden Yellow)', 'Philips', 'Bulb Base: E27</br>\r\nLumens: 1300</br>\r\nLumens Efficiency: 100</br>\r\nPower: 13 watts\r\n', '52a2d5cac6eeadb3acc22dc73ee22251', 989, 559, 'E27-13-Watt-LED-Bulb-(Warm-White,Golden-Yellow).jpg', '18-02-20', '16:24:38', '1', '111135', 10, 'http://amzn.to/2ErnevZ'),
(106, '4-Watt B22 Base LED Bulb (Warm white/Golden Yellow and Pack of 1)', 'Philips ', 'Bulb Base: B22 Color: Warm White/Golden Yellow Lumen: 350 Color Temperature: 2700K </br>Equivalent Wattage: 40 watts Low energy consumption and non-dimmable </br>\r\nWatt- 4 </br>\r\nMaterial-Polycarbonate', '9ab108d07c73b36df14e4fad6d15f66f', 279, 189, '4-Watt-B22-Base-LED-Bulb-(Warm-white,Golden-Yellow-and-Pack-of-1).jpg', '18-02-20', '16:35:47', '1', '111135', 10, 'http://amzn.to/2Gc47CL'),
(107, 'Power Bank 6000 mAh Slim Polymer PB-6K (Grey)', 'Intex ', 'Battery type - Li-ion</br>\r\nInput : 5V/1A (max)</br>\r\nOutput : 5V/1A (max) & 5V/2.1 A (max)</br>\r\nCapacity : 6000 mAh', '635e338081db4aaf63d202841f9aea7f', 1999, 1249, 'Power-Bank-6000-mAh-Slim-Polymer-PB-6K-(Grey).jpg', '18-02-20', '17:31:23', '12', '111133', 5, 'http://amzn.to/2o3ucwj'),
(108, 'Easy Wireless Keyboard Mouse K688 With Wireless Mouse Combo', 'OneKlik ', 'Combo of wireless keyboard and wireless mouse.</br>\r\nEasy to use, Plug and play via wireless usb reciever.</br>\r\nCompatible with Windows XP or Vista or 7 or 8 operating system', '03d8e9504311ddaaf88270e08fa7d80c', 2139, 1149, 'Easy-Wireless-Keyboard-Mouse-K688-With-Wireless-Mouse-Combo.jpg', '18-02-20', '17:04:33', '15', '111132', 5, 'http://amzn.to/2F1rP5m'),
(109, 'Quick Spin Mop with Easy Wheels and Bucket with 2 Refills', 'OneKlik ', 'Built with wheels to carry your bucket around the house.</br>\r\nHelps you to clean the floor without getting down and dirty.</br>\r\n360 degree cleaning, reaches under furniture and hard to reach areas and provide effective cleaning.</br>\r\nA longer and sturdy puller handle helps to carry the bucket with ease from one place to another.</br>\r\nIt has super spin system which makes drying refill faster', 'f2721dcb2869821dcefa585cd4487969', 1589, 791, 'Quick-Spin-Mop-with-Easy-Wheels-and-Bucket-with-2-Refills.jpg', '18-02-20', '17:00:43', '1', '111137', 50, 'http://amzn.to/2o2y9Bq'),
(110, 'Simply Straight 2 In 1 Ceramic Hair Straightener Brush', 'OneKlik', 'In the Box: 1 piece Simply Straight Brush.</br>\r\nSimply Straight Ceramic Brush quickly heats up to 450 degrees.</br>\r\nSimply brush hair, and this straightener delivers gentle, even heat around each strand.</br> No more flattening or frying your tresses.</br>\r\nNo matter how unruly your curls, the ceramic coating gives you silky straight hair that is easy to style.</br>\r\nLifts hair at the root for perfect volume.', 'b1979216b36bbc788ec186ed245bfce6', 1379, 691, 'Simply-Straight-2-In-1-Ceramic-Hair-Straightener-Brush.jpg', '18-02-20', '18:02:10', '8', '111134', 5, 'http://amzn.to/2GaoYX9'),
(111, 'Grip Bag Handle Grocery Carrier Holder Carry Multiple Plastic Bags Lock (Multicolor)', 'OneKlik', 'Long lasting comfort.</br>\r\nSelf-locking handle makes car loading easy.</br>\r\nHigh impact ploastic allows up to 50 pound capacity.</br>\r\nMultiple uses.', '7298b2425027097c665961b580848cc7', 929, 459, 'Grip-Bag-Handle-Grocery-Carrier-Holder-Carry-Multiple-Plastic-Bags-Lock-(Multicolor).jpg', '18-02-20', '18:03:16', '1', '111130', 10, 'http://amzn.to/2CirEPM'),
(112, 'Multi Function Lunch Dabba Electric food Warmer Box Tiffin', 'OneKlik', 'Multifunctional Electric Lunch Box (Color May Vary).</br>\r\nMade of heat resisting environment-friendly material.</br>\r\nCover has ventilation apparatus keep your food fresh.</br>\r\nCapacity: 600 ml.</br>\r\nLow power and recirculation heating, Keeps your food fresh and hot.', '7d9985cf98841cb9905d480bbbd7232d', 1359, 639, 'Multi-Function-Lunch-Dabba-Electric-food-Warmer-Box-Tiffin.jpg', '18-02-20', '18:14:41', '2', '111138', 10, 'http://amzn.to/2o1nQ0k'),
(113, 'Dolphin Infrarred Hammer Full Body Massager With 3 Attachment BodySlimmerExcel', 'OneKlik', 'Reduce the muscle ache.</br>\r\nSpeedup the fat burning.</br>\r\nPromote the blood circulation.</br>\r\nBuildup the immunity function.</br>\r\nInfrared ray, magnetic therapy & hammering massage.', '17028ed4c328d96f9e31794d6b63442a', 1895, 889, 'Dolphin-Infrarred-Hammer-Full-Body-Massager-With-3-Attachment-BodySlimmerExcel.jpg', '18-02-20', '19:58:01', '16', '111125', 10, 'http://amzn.to/2G9MfrZ'),
(114, 'Arm Sleeves, Compression Sleeves for the Arm and Elbow 99% UV Protection and Cooling Ability for Outdoors Use like Running, Basketball, Football, Soccer, Tennis, Cycling Sleeve â€“ Black', 'OneKlik', 'REAT FOR MANY ACTIVITIES - Compression Sleeves have been shown to provide many Health benefits such as reducing minor pains and aches from muscles and joints, reduced swelling, increase circulation, </br>and injury prevention from muscle vibration damage during activity. Widely used for football arm sleeves, baseball sleeves, softball, bowling, basketball shooter sleeve.</br>\r\nANTI-UV ARM SLEEVES : elastic arm sleeves can help to protect your arms from the cruel UV radiation in summer and prevent pulled muscle while doing outdoor activities, sports, etc.</br>\r\nSTRETCH FIT AND FULL HAND COVERAGE : Our sleeves are incredibly durable and stretchy. Easy to machine wash and hang dry.</br> The hand cover ensures full. Our stretchy 89% polyester 11% spandex blend make them perfect for both men and women.</br>\r\nCOOLING & PROTECTION: With innovative cooling technology and protection to block out over UV rays, the Tough Outdoors Cooling Sun Sleeves are more than your average sun sleeves. Expect ultimate comfort and protection wherever adventure takes you.</br>\r\nFOR ALL SPORTS & OUTDOOR ACTIVITIES: Designed for long, hot hours under the sun, our lightweight arm sleeves will keep you comfortable </br>whether you are golfing, fishing, playing basketball, cycling, hiking, driving or even gardening. Perfect for those with an active lifestyle!', '529c725a5a6b7b4fa13e822bbb9db939', 875, 439, 'Arm-Sleeves,-Compression-Sleeves-for-the-Arm-and-Elbow-Cycling-Sleeve-Black.jpg', '18-02-20', '19:35:35', '16', '111139', 20, 'http://amzn.to/2nWNV1A'),
(115, 'Genuine Charging Cable Data Cable USB Cable For Samsung Galaxy S7 edge / Samsung S7 (S 7) edge USB Cable Original Like Data Cable | Micro USB Fast Charging Cable | Sync Cable | Charger Cable For Power Bank, Bluetooth Earphones, Car Charger | Quick Ch', 'OneKlik ', 'High Speed Charging : An intelligent internal chipset detects maximum safe current for your device, which ensures a safe charging.</br>\r\nHigh Speed Date Transfer:- it can Transfer data at up to 10Gbps with this improved cable and connector.\r\n1.2 Meter USB 2.0 Cable: A Male To Micro B, supports 480-Mbps transmission speed.</br>\r\nCompatible for Charging all Android Phones and Tablets or Connecting PC Peripherals Such as Hard Drives, Printers, etc.</br>\r\nDesigned to connect micro-USB devices including smartphone to a USB charger or USB Port.', 'b398e8d1c973ff5939ee8be10af2290a', 789, 199, 'Genuine-Charging-Cable-Data-Cable-USB-Cable-For-Samsung-Galaxy-S7-edge-|-Samsung-S7-(S-7)-edge-USB-Cable-Original-Like-Data-Cable-|-Micro-USB-Fast-Charging-Cable-|-Sync-Cable-|-Charger-Cable-For-Power-Bank,-Bluetooth-Earphones,-Car-Charger.jpg', '18-02-20', '19:12:47', '12', '111140', 50, 'http://amzn.to/2GbJgQ2'),
(116, 'Afs 7 Watt Plastic LED Bulb(Cool Day Light)', '', 'Cool light White LED Bulb 7W.</br>\r\nLess Power Consumption.</br>\r\nProduce High Brightness.</br>\r\nEnvironment Friendly.</br>\r\nExcellent Performance.', '3ce15f80b5533f8ba749f82578525cd2', 259, 89, '7-Watt-Plastic-LED-Bulb(Cool-Day-Light).jpg', '18-02-23', '19:49:04', '1', '111135', 20, 'http://amzn.to/2oeLXcQ'),
(117, 'Ormit B22 12-Watt LED Bulb (Warm White)', 'Generic', 'Wattage : 12 Watts.</br>\r\nLess Power Consumption.</br>\r\nProduce High Brightness.</br>\r\nEnvironment Friendly.</br>\r\nExcellent Performance.', '17388f1a9de07452cfb5a277de8dd284', 279, 110, 'Ormit-B22-12-Watt-LED-Bulb-(Warm-White).jpg', '18-02-23', '19:59:14', '1', '111135', 20, 'http://amzn.to/2Gw3mV8');

-- --------------------------------------------------------

--
-- Table structure for table `sell_offer`
--

CREATE TABLE `sell_offer` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `unit_id` varchar(10) NOT NULL,
  `c_id` varchar(5) NOT NULL,
  `description` text NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  `view` int(11) NOT NULL DEFAULT '0',
  `offer_date` varchar(10) NOT NULL,
  `offer_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_offer`
--

INSERT INTO `sell_offer` (`id`, `username`, `product_title`, `price`, `quantity`, `unit_id`, `c_id`, `description`, `img_url`, `status`, `view`, `offer_date`, `offer_time`) VALUES
(13, '670fae8ae8c517060baacb1190d893b4', '10.or D (Beyond Black, 2 GB)', '9', '1', '5', '1', 'This product is Crafted for Amazon\n13.2 centimeters (5.2-inch) HD IPS 2D capacitive touchscreen with 1280 x 720 pixels resolution 16M color support\nAndroid v7.1.2 Nougat operating system with 1.4GHz Qualcomm Snapdragon 425 MSM8917 quad core processor\n2GB RAM, 16GB internal memory expandable up to 128GB and dual SIM (nano+nano) dual-standby (4G+4G)\n3500mAH lithium-polymer battery\n1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase', '', 1, 5, '18-01-19', '01:52:27'),
(14, '670fae8ae8c517060baacb1190d893b4', 'Buy Red Cotton Shirt Of Nike only for men at discount come and start', '9', '1', '5', '1', 'buy as soon as possible bcoz deal of limited product in stock. we will happy to help', '', 1, 86, '18-01-19', '03:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `sc_name` varchar(50) NOT NULL,
  `sc_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `sc_name`, `sc_id`) VALUES
(1, 'car parts', '111111'),
(2, 'headphone', '111112'),
(3, 'earphone', '111113'),
(4, 'vacuum cleaner', '111114'),
(6, 'usb hub', '111115'),
(7, 'cosmetic box', '111116'),
(8, 'egg poacher', '111117'),
(11, 'water bottle', '111118'),
(12, 'barbecue griddles', '111119'),
(13, 'action camera', '111120'),
(14, 'smart watch', '111121'),
(15, 'mounts and stands', '111122'),
(16, 'thermos & flasks', '111123'),
(17, 'shaving & hair removal', '111124'),
(18, 'electric massagers', '111125'),
(19, 'electric steamers', '111126'),
(20, 'tapes, adhesives & sealers', '111127'),
(21, 'home decoration', '111128'),
(22, 'juicer mixer grinders', '111129'),
(23, 'bags, wallets and luggage', '111130'),
(24, 'usb gadgets', '111131'),
(25, 'accessories & peripherals', '111132'),
(26, 'power bank ', '111133'),
(27, 'hair styling tools', '111134'),
(28, 'light led bulbs', '111135'),
(29, 'musical instruments (microphone)', '111136'),
(30, 'cleaning supplies', '111137'),
(31, 'lunch box', '111138'),
(32, 'arm sleeves', '111139'),
(33, 'data cables', '111140');

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
(4, 'tonne', 4),
(5, 'liter', 5),
(6, 'mili liter', 6),
(7, 'miter', 7),
(8, 'kilomiter', 8),
(9, 'mili miter', 9),
(10, 'rim', 10);

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
(35, '670fae8ae8c517060baacb1190d893b4', 'guptarajat20071995@gmail.com', '123', '9807264017', 'rajat gupta', 'i 45 barra', 'kanpur', 'uttar praesh'),
(36, '97914a70085e22e9d5cfceb1c0ab020f', 'pravin@gmail.com', '', '1234567890', 'praveen', 'agra', 'agra', 'uttar pradesh');

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
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `sell_offer`
--
ALTER TABLE `sell_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `sell_offer`
--
ALTER TABLE `sell_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
