-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2023 at 06:50 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FundFusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `donation_name` varchar(50) DEFAULT NULL,
  `donation_image_url` varchar(50) DEFAULT NULL,
  `donation_description` text DEFAULT NULL,
  `donation_target` int(8) DEFAULT NULL,
  `donation_progress` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `donation_name`, `donation_image_url`, `donation_description`, `donation_target`, `donation_progress`) VALUES
(1, 'Donation for Earthquake', 'earthquake.jpg', 'Donate to help victims of Earthquake in Turkey. Your small help can help save lives of many.', 100000, 0),
(2, 'Donate for Landslide Victims', 'earthquake.jpg', 'Donate to help victims of Tsunami in Hiroshima, Japan. Anata no ch?sana shien ga ?ku no hito no inochi o sukuu koto ga dekimasu, Arigattou.', 200000, 0),
(5, 'Orphanage Aid', 'a - Copy.jpg', 'Orphanage aid holds great importance as it provides essential care, shelter, and support to orphaned and vulnerable children. These institutions not only address the basic needs of children but also offer education, healthcare, and psychosocial support, ensuring their overall well-being. By aiding orphanages, we invest in the future of these children, giving them a chance to break the cycle of poverty and grow into self-reliant, contributing members of society.', 200000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

DROP TABLE IF EXISTS `donors`;
CREATE TABLE IF NOT EXISTS `donors` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `donation_id` int(11) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `event_id` (`donation_id`),
  KEY `donation_id` (`donation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `uid`, `donation_id`, `amount`, `status`, `date`) VALUES
(1, 50, 1, 10000, 'pending', '2023-07-07'),
(15, 51, 2, 5000, 'Pending', '2023-07-08'),
(16, 52, 1, 200, 'Pending', '2023-07-09'),
(17, 53, 1, 10000, 'Pending', '2023-07-10'),
(18, 55, 2, 1500, 'Pending', '2023-07-10'),
(19, 50, 2, 2000, 'Pending', '2023-09-13'),
(20, 50, 2, 1000, 'Pending', '2023-09-13'),
(21, 50, 2, 1000, 'Pending', '2023-09-13'),
(22, 60, 6, 50000, 'Pending', '2023-09-20'),
(23, 60, 1, 5000, 'Pending', '2023-09-20'),
(24, 59, 5, 10, 'Pending', '2023-09-21'),
(25, 59, 5, 10, 'Pending', '2023-09-21'),
(26, 59, 5, 10, 'Pending', '2023-09-21'),
(27, 59, 1, 10, 'Pending', '2023-09-21'),
(28, 59, 1, 10, 'Pending', '2023-09-21'),
(29, 59, 1, 10, 'Pending', '2023-09-21'),
(30, 59, 1, 10, 'Pending', '2023-09-21'),
(31, 59, 1, 10, 'Pending', '2023-09-21'),
(32, 59, 1, 150, 'Pending', '2023-09-21'),
(33, 59, 1, 100, 'Pending', '2023-09-21'),
(34, 59, 1, 100, 'Pending', '2023-09-21'),
(35, 59, 1, 100, 'Pending', '2023-09-21'),
(36, 50, 1, 150, 'Pending', '2023-09-21'),
(37, 50, 1, 10, 'Pending', '2023-09-21'),
(38, 50, 1, 100, 'Pending', '2023-09-21'),
(39, 50, 1, 100, 'Pending', '2023-09-21'),
(40, 50, 2, 100, 'Pending', '2023-09-22'),
(41, 50, 2, 100, 'Pending', '2023-09-22'),
(42, 50, 2, 100, 'Pending', '2023-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `essential`
--

DROP TABLE IF EXISTS `essential`;
CREATE TABLE IF NOT EXISTS `essential` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `essential` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `essential`
--

INSERT INTO `essential` (`id`, `name`, `address`, `contact`, `email`, `essential`) VALUES
(1, 'Binaya Koirala', 'Pokhara, Malepatan', 9840454572, 'binaya98@gmail.com', 'Study Materials'),
(2, 'Binaya Koirala', 'Pokhara, Malepatan', 9840454572, 'binaya98@gmail.com', 'Clothes & Uniforms');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_image_url` mediumtext NOT NULL,
  `event_description` longtext NOT NULL,
  `event_duration` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_image_url`, `event_description`, `event_duration`) VALUES
(19, 'Blood Donation Programme', 'blood.jpg', 'Donated blood helps meet many medical needs â€” including saving the life of a premature baby, restoring the strength of a cancer patient and providing a critical transfusion to someone who has been in an accident. There is no substitute for human blood â€” all transfusions use blood from a donor.', '2 days'),
(20, 'Plantation Programme', 'download.jpeg', 'Planting forests is a long-term investment that requires awareness and diligence not only in policy\r\nand planning but particularly in management practices. This includes selection of suitable\r\ngermplasm, quality seeds, necessary plantlets production, site preparation and establishment,\r\ntending, weeding, silviculture operation and harvesting. ', '3 days'),
(21, 'Sports for Health', 'basket.jpg', 'Sports have an immense impact on a person\'s daily life and health. They do not just give you an interesting routine, but also a healthy body. Engaging in physical activities like sports improves your heart function, reduces your risk of diabetes, controls blood sugar, and lowers tension and stress levels.', '1 day');

-- --------------------------------------------------------

--
-- Table structure for table `event_payment_info`
--

DROP TABLE IF EXISTS `event_payment_info`;
CREATE TABLE IF NOT EXISTS `event_payment_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`,`donor_id`),
  KEY `donor_id` (`donor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `fb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `fax` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`fb`, `twitter`, `youtube`, `google`, `skype`, `address`, `phone`, `fax`, `email`) VALUES
('dnsfkjn', 'skfnsdfdsfs2123', 'skfnsdfs', 'skfnsdf213sd', 'skfnsdfsdfdsfsdf', 'dnfksd', 989898989, 10017856, 'fundfusion@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `homepageslider`
--

DROP TABLE IF EXISTS `homepageslider`;
CREATE TABLE IF NOT EXISTS `homepageslider` (
  `id` int(2) NOT NULL,
  `s1head` text NOT NULL,
  `s1content` text NOT NULL,
  `s2head` text NOT NULL,
  `s2content` text NOT NULL,
  `s3head` text NOT NULL,
  `s3content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepageslider`
--

INSERT INTO `homepageslider` (`id`, `s1head`, `s1content`, `s2head`, `s2content`, `s3head`, `s3content`) VALUES
(1, 'Empower Hope, Give Today.', 'Together we can empower communities.', 'Support the cause, changes the lives.', 'Your donation create meaningful change.', 'Donate for Good.', 'Donaation is a kind act.');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membership_type` varchar(50) NOT NULL,
  `amount` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `membership_type`, `amount`) VALUES
(1, 'Silver Tier', 1000),
(2, 'Gold Tier', 10000),
(3, 'Platinium', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `membership_register_info`
--

DROP TABLE IF EXISTS `membership_register_info`;
CREATE TABLE IF NOT EXISTS `membership_register_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membership_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `membership_id` (`membership_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_register_info`
--

INSERT INTO `membership_register_info` (`id`, `membership_id`, `user_id`, `date`) VALUES
(1, 3, 50, '2023-07-08'),
(2, 1, 50, '2023-07-08'),
(3, 1, 50, '2023-07-08'),
(4, 1, 50, '2023-07-08'),
(5, 3, 50, '2023-07-08'),
(6, 3, 50, '2023-07-08'),
(7, 3, 50, '2023-07-08'),
(8, 3, 50, '2023-07-08'),
(9, 2, 50, '2023-07-08'),
(10, 3, 50, '2023-07-08'),
(11, 2, 52, '2023-07-10'),
(12, 3, 52, '2023-07-10'),
(13, 2, 52, '2023-07-10'),
(14, 3, 58, '2023-09-16'),
(15, 2, 60, '2023-09-19'),
(16, 2, 59, '2023-09-20'),
(17, 2, 60, '2023-09-20'),
(18, 1, 59, '2023-09-21'),
(19, 2, 50, '2023-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `thumbnail` mediumtext NOT NULL,
  `video_url` longtext NOT NULL,
  `descriptions` longtext NOT NULL,
  `p_start_date` varchar(255) NOT NULL,
  `p_end_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `thumbnail`, `video_url`, `descriptions`, `p_start_date`, `p_end_date`) VALUES
(8, 'Blanket Distribution', 'blanket.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MYAReYrGBwI?si=CtgwUSMlWfzANRlL\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Blanket distribution for poor people in Nepal during the summer is a charitable initiative aimed at providing relief to vulnerable individuals and families facing extreme heat and discomfort. During the scorching summer months in Nepal, especially in low-income communities and rural areas, many people lack access to basic amenities and suffer from the harsh weather conditions. To alleviate their suffering, organizations, charities, and volunteers often come together to distribute blankets to those in need.', '2023-08-01', '2023-08-07'),
(10, 'School Programs', '2.jpeg', 'https://www.youtube.com/watch?v=83dYD_Xm2HY', 'The renovation of schools after the devastating earthquake in Nepal is of paramount importance as it not only restores safe and conducive learning environments for children but also symbolizes the resilience and commitment to education in the face of adversity. These school buildings serve as more than just classrooms; they are the heart of communities, fostering education, social cohesion, and disaster preparedness. ', '2023-08-08', '2023-08-18'),
(12, 'Sanitary Pad Distribution', 'sant.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/DeSjitsNkyQ?si=ZIBLTP5b4_PzxyX9\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Each girl student will get sanitary pads not exceeding 16 for each menstrual cycle. Monitoring of distribution will be carried out by provincial ministry of social development', '2023-09-29', '2023-10-02'),
(13, 'Infrastruture for Drinking water', 'drinking water.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rw1Hg27Te9o?si=ab2vY-PJe_Wgq101\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'WATER INFRASTRUCTURE: -The term â€œwater infrastructureâ€ includes water and wastewater systems and includes water treatment facilities, water mains, distribution pipes, pressure reducing stations, water meters, pumping stations, sanitary and storm sewers, sewage pipes, storm water pipes, manholes, septic tanks and lift stations.', '2023-09-29', '2023-10-02'),
(14, 'Distiribution of Masks and Sanitizer in rural areas', 'masks.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8R4cf2fFiNc?si=uS4-9YdhZuc6X_ns\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'During the COVID-19 pandemic in Nepal, the distribution of masks and sanitizers was a multifaceted effort involving the government, international organizations, NGOs, and local communities. The Nepali government took the lead in procuring and distributing these essential supplies, establishing distribution points across urban and rural areas. International agencies like the World Health Organization (WHO) and UNICEF provided technical support and funding to ensure a steady supply of masks and sanitizers.', '2023-09-28', '2024-07-01'),
(15, 'Sports Infrastrucutre Development', 'sport.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eRMKaQ7DYqE?si=2WAeFcVs-OPuOHIh\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Excellence in the global sports arena depends heavily on the sports infrastructure. Cultivating a culture of sports not only aids in the production of athletes of international renown but also inspires young people in a nation to undertake physical activities competitively.', '2022-01-01', '2023-09-01'),
(16, 'Old age home support', 'old age home.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SZxAfXnqFNU?si=wgEbtECeRmO8GLm_\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Now, elderly people are forced to live in the care centers. There are about 1,500 elderly living in about 70 organizations registered all over Nepal at present [7]. Elderly homes, religious sites are the only destination for senior citizens out of their family during the old age.', '2023-09-20', '2023-09-27'),
(17, 'Shelter for victims of natural disasters', 'natural disaster.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iBjXRCuRa0c?si=KSqoWYYymWiwMlvI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Shelters for natural disasters in Nepal play a pivotal role in mitigating the devastating impact of earthquakes, landslides, floods, and other environmental calamities that frequently afflict the region.', '2023-09-19', '2023-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--

DROP TABLE IF EXISTS `sponsorship`;
CREATE TABLE IF NOT EXISTS `sponsorship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `amount` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsorship`
--

INSERT INTO `sponsorship` (`id`, `type`, `amount`) VALUES
(1, 'Premium', 10000),
(2, 'Regular', 30000),
(3, 'VIP', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship_register_info`
--

DROP TABLE IF EXISTS `sponsorship_register_info`;
CREATE TABLE IF NOT EXISTS `sponsorship_register_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsorship_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sponsorship_id` (`sponsorship_id`,`user_id`),
  KEY `donor_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsorship_register_info`
--

INSERT INTO `sponsorship_register_info` (`id`, `sponsorship_id`, `user_id`, `date`) VALUES
(2, 3, 50, '2023-07-08'),
(3, 3, 50, '2023-07-08'),
(4, 2, 58, '2023-09-16'),
(5, 2, 58, '2023-09-16'),
(6, 3, 59, '2023-09-19'),
(7, 3, 59, '2023-09-19'),
(8, 1, 59, '2023-09-19'),
(9, 3, 60, '2023-09-19'),
(10, 3, 60, '2023-09-19'),
(11, 2, 59, '2023-09-20'),
(12, 2, 60, '2023-09-20'),
(13, 2, 60, '2023-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `skill`, `fb`, `twitter`, `insta`, `linkedin`) VALUES
(1, 'Akriti Chapagai', 'Project Founder & Resources', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(2, 'Binaya Koirala', 'Project Operation', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.co', 'https://www.facebook.com/'),
(3, 'Laxman Parajuli', 'Disaster Management', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(4, 'Ujjwal  Adhikari', 'Coordinate Program Supervisor', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT 'member1.jpg',
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `Contact`, `email`, `password`, `role`, `profile_picture`, `status`) VALUES
(32, 'Safal Koirala', 'Pokhara, Ram Krishna Tole', 9846154935, 'twilaarmy@gmail.com', '560e9e727bf41ca4112c28b2e1e52d70', 'user', 'member1.jpg', 'deleted'),
(34, 'laxman', 'pokhara', 989898, 'lax@gmail.com', 'laxman', 'admin', 'member1.jpg', 'inactive'),
(38, 'Binaya Koirala', 'Pokhara, Malepatan', 9840454572, 'binaya98@gmail.com', 'b8bcabd14cae29b361e42b3d88f13593', 'user', 'member1.jpg', 'active'),
(46, 'Ujjwal Adhikari', 'Pokhara', 981613785, 'ujjwal999adhikari@gmail.com', '60be1ce835dabf7f22c97f3d709caa41', 'user', 'darlin.jpg', 'inactive'),
(47, 'Ishan', 'Shantinagar', 981910236, 'xishansub@gmail.com', 'e187a4b2db3f9b07430e563fd6749a7a', 'user', 'ishan.png', 'deleted'),
(48, 'Ujjwal', 'Malepatan', 982616788, 'pokhreli.thito10@gmail.com', '51194be63b0f1ea5fbe4675b4a6d1290', 'user', 'member1.jpg', 'inactive'),
(49, 'Sajit', 'Chinedada', 981614063, 'sajitgurung829@gmail.com', 'd5974a7ebd9312d02a6722596264459c', 'user', 'member1.jpg', 'active'),
(50, 'Binaya Koirala', 'Pokhra-5, Malepatan', 9804160891, 'beeenaya98@gmail.com', '6264d96aa8a4bffde8efe4244568a2e6', 'user', 'about.jpg', 'active'),
(51, 'Ram', 'Pokhara, Malepatan', 9840454572, 'ram98@gmail.com', '74aad960cf37facb415ab1da4fc99366', 'admin', 'member1.jpg', 'active'),
(52, 'Manish Shrestha', 'Pokhara-13', 9818469570, 'manishstha273@gmail.com', '59c95189ac895fcc1c6e1c38d067e244', 'user', 'education-for-girls.jpg', 'inactive'),
(53, 'Sunil Pandey', 'Parsyang-5', 9898989898, 'sunil.pandey.nano@gmail.com', 'c860c70e38124594e60471b7b022b499', 'user', '357698492_10227828773939107_4510023583889572812_n.jpg', 'active'),
(54, 'Ujjwal Adhikari', 'Pokhara, Malepatan', 9816137858, 'parajulil358@gmail.com', '6aa16c18829ddf7860e6e44b12a09a92', 'user', 'member1.jpg', 'active'),
(55, 'Nischa Pokhrel', 'Chindanda', 9824174707, 'nischal.pokharel147@gmail.com', '354b28c72430b1b5380fa28fd26acd4c', 'user', 'member1.jpg', 'active'),
(56, 'Admin', 'admin', 1234567891, 'admin12@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'member1.jpg', 'active'),
(57, 'admin', 'admin', 9898987878, 'admin@gmail.com', 'admin', 'admin', 'member1.jpg', ''),
(58, 'user', 'user', 9898989891, 'user99@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'pandey.jpg', 'inactive'),
(59, 'user', 'user', 98898988, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'education-for-girls.jpg', 'active'),
(60, 'Eden Hazard', 'Belgium', 9898989898988, 'eden@gmail.com', 'da897ba0fe30eff270424ac0e768840f', 'user', '139-1393036_pain-wallpaper-wallpaper-wide-hd-pain-hd.jpg', 'active'),
(61, 'Bbinaya Koirala', 'Pokhara, Malepatan', 9898989898, 'bnayba98@gmail.com', 'a66987004f7c60fc5ec72a7d9ea1f9ea', 'user', 'member1.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `formMessage` mediumtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`);

--
-- Constraints for table `event_payment_info`
--
ALTER TABLE `event_payment_info`
  ADD CONSTRAINT `event_payment_info_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`id`),
  ADD CONSTRAINT `event_payment_info_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `membership_register_info`
--
ALTER TABLE `membership_register_info`
  ADD CONSTRAINT `membership_register_info_ibfk_1` FOREIGN KEY (`membership_id`) REFERENCES `membership` (`id`),
  ADD CONSTRAINT `membership_register_info_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `sponsorship_register_info`
--
ALTER TABLE `sponsorship_register_info`
  ADD CONSTRAINT `sponsorship_register_info_ibfk_1` FOREIGN KEY (`sponsorship_id`) REFERENCES `sponsorship` (`id`),
  ADD CONSTRAINT `sponsorship_register_info_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
