-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 10:29 AM
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
-- Database: `nepyatra`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(11, '\"Nep Yatra\" Leading Tour and Travel Company in Nepal', '<p style=\"font-weight: 400; text-align: justify;\"><strong>Nep Yatra</strong>&nbsp;is local trekking and operator in Nepal. As a leading travel, Tour and Trekking agency in Nepal, we always focus on high-quality service and offer superior and enjoyable&nbsp;<strong>Nepal Tour packages</strong>&nbsp;for your satisfaction. The privilege of the famous Annapurna, Everest, and Langtang route and an easily assessable destination in Kathmandu and all of Nepal is our main trekking and tour destination in the Nepalese Himalayas.</p>\r\n<p style=\"font-weight: 400;\">&nbsp;</p>', 'muktinath.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(1, 'admin', 'admin@gmail.com', '7170', '2000-10-06', '9864298886');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `visiting_date` date NOT NULL,
  `uid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `email`, `phone`, `code`, `type`, `guest`, `visiting_date`, `uid`) VALUES
(9, 'Bijan Shrestha', 'bijan.shrestha7170@gmail.com', '9864298886', 'PK-002', 'Climbing', '20', '2022-11-04', 22),
(10, 'Anurag', 'anurag@gmail.com', '1234567890', 'PK-002', 'Tours', '9', '2022-11-04', 7),
(11, 'Bijan Shrestha', 'bijan.shrestha7170@gmail.com', '9864298886', 'PK-002', 'Trekking', '5', '2022-11-17', 33),
(12, 'Bijan Shrestha', 'bijan.shrestha7170@gmail.com', '9864298886', 'CP_002', 'Climbing', '9', '2022-11-25', 33);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `sid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(1, 'Dhankuta', 1),
(2, 'Biratnagar', 1),
(3, 'Birgunj', 2),
(4, 'Janakpur', 2),
(5, 'Kathmandu', 3),
(6, 'Dhading', 3),
(7, 'Gorkha', 4),
(8, 'Pokhara', 4),
(9, 'Kapilvastu', 5),
(10, 'Palpa', 5),
(11, 'Dolpa', 6),
(12, 'Surkhet', 6),
(13, 'Doti', 7),
(14, 'Kailali', 7),
(15, 'Solukhumbu', 1),
(16, 'Manang', 4),
(17, 'Sankhuwasabha', 1),
(18, 'Nuwakot', 3),
(19, 'Mustang', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(8, 'Ram Magar', 'ram@gmail.com', '9878675488', 'Honeymoon Package', 'Hello, Can I get Honey Pakages?'),
(9, 'Sita Thapa', 'sita@gmail.com', '9878865498', 'Family Package', 'Hii, Can I get Discount On family package?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `fdescription` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fdescription`, `status`, `date`) VALUES
(4, 7, 'If after life is real, I wish to be born in Nepal..', 1, '2022-11-08 10:31:41'),
(8, 33, 'Amazing Trip, Love to Visit again', 1, '2022-07-23 21:51:09'),
(9, 28, 'Love the Hospitality', 1, '2022-11-08 01:30:41'),
(10, 30, 'Guide was Supper Funny, Trekking Was Amazing', 1, '2022-11-08 10:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pid` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pcontent` longtext NOT NULL,
  `type` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `night` int(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `extra1` int(50) NOT NULL,
  `extra2` varchar(50) NOT NULL,
  `extra4` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `feature` longtext NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `pimage1` varchar(300) NOT NULL,
  `pimage2` varchar(300) NOT NULL,
  `pimage3` varchar(300) NOT NULL,
  `pimage4` varchar(300) NOT NULL,
  `uid` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mapimage` varchar(300) NOT NULL,
  `topmapimage` varchar(300) NOT NULL,
  `groundmapimage` varchar(300) NOT NULL,
  `extra3` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `isFeatured` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pid`, `title`, `pcontent`, `type`, `duration`, `stype`, `day`, `night`, `code`, `discount`, `extra1`, `extra2`, `extra4`, `price`, `location`, `city`, `state`, `feature`, `pimage`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `uid`, `status`, `mapimage`, `topmapimage`, `groundmapimage`, `extra3`, `date`, `isFeatured`) VALUES
(35, 'Everest Base Camp', '<p style=\"text-align: justify;\"><strong><em>Everest Base Camp Trek</em></strong> is regarded as one of the trendiest trails in Nepal. Trek to Everest base camp offers all travelers the opportunity to fulfill their dream of standing and admiring the highest peaks in the world at the foot of Everest with a panoramic view of many other snowy mountains. The Everest base camp trek is not easy, but it is the best trip in the Himalayas. Kalapatthar is the best vantage point to admire the majestic golden Himalayas by the rising sun.</p>', 'Himalayan', '7', 'Climbing', 7, 6, 'CP_001', '15%', 0, 'Booking', 0, 56000, '01 Solu Bazar', 'Solukhumbu', 'Province No. 1', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : </span>Climbing</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : </span>Himalayan</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : No</span></li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->', 'CP001_1.jpg', 'CP001_2.jpg', 'CP001_3.jpg', 'CP001_4.jpg', 'CP001_5.jpg', 1, 'Booking Not Available', 'CP001_6.jpg', 'CP001_7.jpg', 'CP001_8.jpg', 'Booking', '2022-11-10 12:45:55', 1),
(36, 'Annapurna Base Camp', '<p style=\"text-align: justify;\"><strong><em>Annapurna Base Camp Trek</em></strong>&nbsp;is known as the second most popular,&nbsp;moderate, and more comfortable&nbsp;trekking destination in Nepal after the Everest Base Camp trek. The Annapurna Base Camp Trek takes you to one of the incredible Himalayan kingdoms. You can experience the rural culture and naturally blessed highlights Such as natural waterfalls, breathtaking landscapes, traditional settlements, flora, and fauna, as well as a breathtaking panorama of Mountain. All the Annapurna Mountains are simply fascinating during this trek.</p>', 'Himalayan', '7', 'Climbing', 7, 6, 'CP_002', '11%', 0, 'Booking', 0, 49000, '06 Ratna Chowk', 'Pokhara', 'Gandaki Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : </span>Climbing</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : </span>Himalayans</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : No</span></li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'CP002_1.jpg', 'CP002_2.jpg', 'CP002_3.jpg', 'CP002_4.jpg', 'CP002_6.jpg', 1, 'Booking Available', 'CP002_6.jpg', 'CP002_7.jpg', 'CP002_8.jpg', 'Booking', '2022-11-10 13:20:16', 0),
(37, 'Kathmandu Pokhara Tour', '<p style=\"text-align: justify;\"><strong>Kathmandu Pokhara Tour 5 Nights 6 days</strong>&nbsp;is the leading tour that most travelers do here in Nepal. This tour combines natural Sites, historical monuments, Hindu religious sites, and mountain views with the peaceful city of Pokhara. It is one of the best and most popular tours by travelers who mainly take city tours and take some landscapes. Kathmandu city consists of 3 different cities. The oldest is Bhaktapur, and the youngest is Patan, but these three cities are very familiar with the history, culture, religion, traditions, and people of Nepal in the Kathmandu Valley. This Kathmandu Pokhara tour gives you a brief overview of what Nepal is like. Visiting Kathmandu gives you a cultural and historical overview of Nepal, while Pokhara offers excellent views of the Himalayas, pristine lakes, stupas, viewpoints, and more.</p>', 'Nature', '6', 'Tours', 6, 5, 'ToP_001', '13%', 0, 'Booking', 0, 32000, '05 PipalBot', 'Pokhara', 'Gandaki Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : Nature</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : Tour</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'ToP001_1.jpg', 'ToP001_2.jpg', 'ToP001_3.jpg', 'ToP001_4.jpg', 'ToP001_5.jpg', 1, 'Booking Available', 'ToP001_6.jpg', 'ToP001_7.jpg', 'ToP001_8.jpg', 'Booking', '2022-11-10 16:45:47', 1),
(38, 'Kathmandu Chitwan Tour', '<p style=\"text-align: justify;\"><strong>Kathmandu Chitwan Tour</strong>&nbsp;is a short and sweet tour looking for an ideal vacation package in Nepal. This tour takes you to the cultural sites of Kathmandu, including Pashupatinath, Buddhanath, Swoyambunath, Kathmandu Durbar square, Patan, Bhaktapur, and the natural paradise of Chitwan National Park. Both places are on the UNESCO World Heritage list.&nbsp;</p>', 'National Park', '5', 'Tours', 5, 4, 'ToP_002', '10%', 0, 'Booking', 0, 25000, '08 Sauraha', 'Chitwan', 'Gandaki Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : Tour</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : National</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'ToP002_1.jpg', 'ToP002_2.jpg', 'ToP002_3.jpg', 'ToP002_4.jpg', 'ToP002_5.jpg', 1, 'Booking Available', 'ToP002_6.jpg', 'ToP002_7.jpg', 'ToP002_8.jpg', 'Booking', '2022-11-10 17:12:24', 0),
(39, 'Chitwan Jungle Safari', '<p style=\"font-weight: 400; text-align: justify;\"><strong>Chitwan Jungle Safari Tour</strong>&nbsp;is suitable for all age groups. It is the first national park in Nepal to be included in UNESCO World Heritage Sites. The park is home to an unlimited number of endangered species of fauna and flora.</p>\r\n<p style=\"font-weight: 400; text-align: justify;\">In our Chitwan wildlife safari tour, travelers experience unique moments exploring the subtropical deciduous forest and have the opportunity to meet the local Tharu community. We have tailored the Chitwan tour package in such a way that travelers enjoy activities like elephant rides and bathing, jeep safari, bird watching, visiting crocodile breeding center, Tharu cultural program, the sunset view from the bank of Narayani River, etc.</p>', 'Heritages', '5', 'Trekking', 5, 4, 'TrP_001', '12%', 0, 'Booking', 0, 28000, '07 Sauraha', 'Chitwan', 'Gandaki Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : </span>Trekking</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : Heritages</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : No</span></li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'TrP001_1.jpg', 'TrP001_2.jpg', 'TrP001_4.jpg', 'TrP001_6.jpeg', 'TrP001_3.jpg', 1, 'Booking Available', 'TrP001_5.jpg', 'TrP001_7.jpg', 'TrP001_8.jpg', 'Booking', '2022-11-10 18:36:07', 0),
(41, 'Lumbini Tour', '<p style=\"font-weight: 400; text-align: justify;\"><strong>Lumbini Tour</strong> Itinerary will help you to experience a different world in a short time. You can feel the geographical diversity, different climatic experiences, incredible landscapes, topography, etc. Additionally, as all these areas are highly developed in culture and tradition, you can interact with people to share the culture and livelihood. The lumbini tour package is designed to include the most popular tourist destinations in Nepal. Kathmandu; is the capital city with history, culture, and tradition. Lumbini is a world-famous place because the Buddha Shakyamuni Buddha, or Lord Buddha, was born here.&nbsp;</p>', 'Heritages', '4', 'Tours', 4, 3, 'ToP_003', '9%', 0, 'Booking', 0, 21000, '04 maigad', 'Kapilvastu', 'Lumbini Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : Tour</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : </span>Heritages</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'ToP003_1.jpg', 'ToP003_5.jpg', 'ToP003_2.jpg', 'ToP003_3.jpg', 'ToP003_4.jpg', 1, 'Booking Available', 'ToP003_6.jpg', 'ToP003_7.jpg', 'ToP003_8.jpg', 'Booking', '2022-11-10 18:50:55', 0),
(43, 'Tilicho Lake Trek', '<p style=\"text-align: justify;\"><strong>Tilicho Lake Trek</strong> is one of the best and most rewarding treks in the Annapurna region. The Lake Tilicho located near the famous Annapurna Circuit at an altitude of 4,919 m. The lake is renowned for being the highest lake in the world. Although there are many other lakes in this region, this one is notable for its size. It is 85 m deep. It offers some of the most beautiful view, a wide variety of culture and diversity and the high mountains that surround the giant Annapurna family.</p>', 'Camping', '5', 'Trekking', 5, 4, 'TrP_002', '12%', 0, 'Booking', 0, 32000, '09 chame', 'Manang', 'Gandaki Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : </span>Trekking</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : </span>Camping</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : No</span></li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'Trk002_1.jpg', 'Trk002_2.jpg', 'Trk002_3.jpg', 'Trk002_4.jpg', 'Trk002_5.jpg', 1, 'Booking Available', 'Trk002_6.jpg', 'Trk002_7.jpg', 'Trk002_8.jpg', 'Booking', '2022-11-11 00:27:34', 1),
(44, 'Makalu Base Camp', '<p style=\"text-align: justify;\"><strong><em>Makalu Base Camp Trek</em></strong>&nbsp;is famous for nature walks in the Himalayan region of Nepal.&nbsp;Mount Makalu is the fifth highest mountain in the world among the other 14 peaks over 8000 meters.&nbsp;Less-frequented trek to Makalu Base Camp takes you to high altitudes, snowy landscapes, and the ethnic Himalayan lifestyle on a lonely trek, now it is designated as Makalu Barun National Park and Nature Reserve.</p>', 'Camping', '6', 'Trekking', 6, 5, 'TrP_003', '8%', 0, 'Booking', 0, 18000, '03 Sankhu Park', 'Sankhuwasabha', 'Province No. 1', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : Trekking</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : No</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : </span>Camping</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : No</span></li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'TrP003_1.jpg', 'TrP003_2.jpg', 'TrP003_3.jpg', 'TrP003_4.jpg', 'TrP003_5.jpg', 1, 'Booking Available', 'TrP003_6.jpg', 'TrP003_7.jpg', 'TrP003_8.jpg', 'Booking', '2022-11-11 00:33:13', 0),
(45, 'Trishuli River Rafting', '<p>The Trishuli River is the most famous rafting place in Nepal. It offers a remarkable landscape, exciting rapids, and wonderful gorges and It is an excellent option for short rafting trips from Kathmandu or Pokhara.</p>', 'Sports Activities', '2', 'Adventure', 2, 1, 'AdP_002', '6%', 0, 'Booking', 0, 11000, '23 Nubedu', 'Nuwakot', 'Bagmati Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : Adventure</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes/No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : </span>Sports</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : No</span></li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'AdP002_1.jpg', 'AdP002_2.jpg', 'AdP002_3.jpg', 'AdP002_4.jpg', 'AdP002_5.jpg', 1, 'Booking Available', 'AdP002_6.jpg', 'AdP002_7.jpg', 'AdP002_8.jpg', 'Booking', '2022-11-11 00:44:11', 0),
(46, 'Muktinath Helicopter Tour', '<p style=\"text-align: justify;\">The&nbsp;<strong>Muktinath Helicopter Tour</strong>&nbsp;from Kathmandu or Pokhara is one of the convenient ways to pay homage to the Muktinath Temple in a short time. Its location is in the Mustang region of the Himalayas. People believe that visiting Muktinath cleanses your soul and frees you from all sin. Therefore, the flowers make an effort to visit Muktinath at least once in a lifetime. The temple also has the famous 108 showers, which people believe bathing helps to reach Nirvana.</p>', 'Nature', '2', 'Tours', 2, 1, 'ToP_004', '6%', 0, 'Booking', 0, 39000, '02 Muktinath', 'Mustang', 'Gandaki Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : Tours</span></li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : </span>Nature</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'ToP004_1.jpg', 'ToP004_2.jpg', 'ToP004_3.jpg', 'ToP004_4.jpg', 'ToP004_5.jpg', 1, 'Booking Available', 'ToP004_6.jpg', 'ToP004_7.jpg', 'ToP004_8.jpg', 'Booking', '2022-11-11 00:50:15', 1),
(48, 'Kathmandu Bhaktapur Tour', '<p style=\"text-align: justify;\">Kathmandu Bhaktapur tour is design specifically for those who have very little time in Kathmandu to visit the wonderful World Heritage Sites. It is a one-day guided cultural tour in Kathmandu. Our experienced tour guide will take you through the world heritage sites to explore and understand the ancient heritage and all the important places around the valley.</p>', 'Heritages', '2', 'Tours', 2, 1, 'ToP_005', '6%', 0, 'Booking', 0, 8000, '01 Airport', 'Kathmandu', 'Bagmati Province', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Package Type : </span>Tour</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">English Speakers : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Restaurants : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Hotels : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Tour Type : </span>Heritages</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Camping : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Trekking : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Culture : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', 'ToP005_1.jpg', 'ToP005_2.jpg', 'ToP005_3.jpg', 'ToP005_4.jpg', 'ToP005_5.jpg', 1, 'Booking Available', 'ToP005_6.jpg', 'ToP005_7.jpeg', 'ToP005_8.jpg', 'Booking', '2022-11-11 01:00:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shopnow`
--

CREATE TABLE `shopnow` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `order_items` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `uid` int(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopnow`
--

INSERT INTO `shopnow` (`id`, `name`, `phone`, `order_items`, `quantity`, `uid`, `date`) VALUES
(2, 'Bijan Shrestha', '9999999999', 'bag', '1', 33, '2022-11-10 22:32:43'),
(3, 'Bijan Shrestha', '8807109704', 'Tent', '2', 33, '2022-11-11 13:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(50) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(1, 'Province No. 1'),
(2, 'Madhesh Province'),
(3, 'Bagmati Province'),
(4, 'Gandaki Province\n\n'),
(5, 'Lumbini Province\n\n'),
(6, 'Karnali Province\n\n'),
(7, 'Sudurpashchim Province\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `uimage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`, `utype`, `uimage`) VALUES
(1, 'admin', 'admin@mail.com', '8542221140', '12345', 'admin', 'usric.png'),
(7, 'Anmol', 'anmol@gmail.com', '1234567890', '12345', 'user', 'floorplan_sample.jpg'),
(28, 'Susma', 'susma@mail.com', '7777444455', '12345', 'user', 'gr7.png'),
(29, 'Raja Ram', 'raja@mail.com', '7775552214', '12345', 'Guide', 'avatarm2-min.jpg'),
(30, 'Robin', 'Robin@mail.com', '9878976567', '12345', 'user', 'avatarm7-min.jpg'),
(31, 'Anish Thapa', 'anish@mail.com', '7896547855', '12345', 'Guide', 'user-default-3-min.png'),
(32, 'Birat Rai', 'birat@mail.com', '1458887969', '12345', 'Guide', 'user-profile-min.png'),
(33, 'Bijan', 'bijan@gmail.com', '7965555544', '12345', 'user', 'usersys-min.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `shopnow`
--
ALTER TABLE `shopnow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `shopnow`
--
ALTER TABLE `shopnow`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
