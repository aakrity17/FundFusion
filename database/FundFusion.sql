-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2023 at 08:37 AM
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
(3, 'Fund For Plantation', 'download.jpg', 'zmv k kz xv zv zm vmz vkmz vm z', 100000, 0),
(4, 'Fund For Plantation', '6 (2).jpg', 'sa ndk asf asm fasfm asfkae   g vnkae va', 200000, 0),
(5, 'Orphanage', 'a - Copy.jpg', 'jn m ms mf dsmf sdmf ', 200000, 0),
(6, 'Donation For Xattay', 'me.jpg', 'Donation for xattay to pass FEE exam', 200000, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

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
(21, 50, 2, 1000, 'Pending', '2023-09-13');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_image_url`, `event_description`, `event_duration`) VALUES
(15, 'fdvfsmd gnfsnfg ', 'Screenshot 2023-05-29 105358.png', 'svfvl fvlmfs v fslvlks lmfs bm, bzdml sm v', 'sdm smf'),
(16, 'svls v', 'Screenshot 2023-05-29 105358.png', 'v, s,v sv ,smmvs, vs', 'mvs v'),
(17, 'fdvfsmd gnfsnfg ', 'Screenshot 2023-05-29 105358.png', 'lmzdvlmv svmlsm vsl v', 'sdm smf'),
(18, 'djandja', '11.png', 'sandjasnd na sdka dadmka d ', 'asnjdnjasn');

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
(1, 'Donate For Good!!', 'Donation is a kind act.', 'help us to help', 'help us to help eedy', 'we do', 'we do to raise the souls.');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

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
(15, 2, 60, '2023-09-19');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `thumbnail`, `video_url`, `descriptions`, `p_start_date`, `p_end_date`) VALUES
(1, 'Dharmasthali School', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Dharmasthali School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-15', '2023-06-20'),
(5, 'Devi Jal Kumari Lower Secondary Schools', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Devi Jal Kumari Lower Secondary School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-12', '2023-06-15'),
(6, 'Barahi School', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Barahi School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-8', '2023-06-12'),
(7, 'jvfjdkn mk kskkm ', '5.jpg', 'https://www.youtube.com/watch?v=QYO6AlxiRE4&list=RDUiN3AY7bdBg&index=16', 'dffnsdfnd sf sd fsm m dm f s na n fmsdf sad f  adsfnsm f', '2023-09-24', '2023-10-08');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

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
(10, 3, 60, '2023-09-19');

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
(1, 'Akriti Chapagai', 'Frontend Developer', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(2, 'Binaya Koirala', 'Backend Developer', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.co', 'https://www.facebook.com/'),
(3, 'Laxman Parajuli', 'Frontend Developer', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(4, 'Ujjwal  Adhikari', 'Backend Developer', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/');

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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

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
(50, 'Binaya Koirala', 'Pokhra-5, Malepatan', 9804160891, 'beeenaya98@gmail.com', '02f24e3a5ddb272ba69253d8a501560e', 'user', 'about.jpg', 'active'),
(51, 'Ram', 'Pokhara, Malepatan', 9840454572, 'ram98@gmail.com', '74aad960cf37facb415ab1da4fc99366', 'admin', 'member1.jpg', 'active'),
(52, 'Manish Shrestha', 'Pokhara-13', 9818469570, 'manishstha273@gmail.com', '59c95189ac895fcc1c6e1c38d067e244', 'user', 'education-for-girls.jpg', 'inactive'),
(53, 'Sunil Pandey', 'Parsyang-5', 9898989898, 'sunil.pandey.nano@gmail.com', 'c860c70e38124594e60471b7b022b499', 'user', '357698492_10227828773939107_4510023583889572812_n.jpg', 'active'),
(54, 'Ujjwal Adhikari', 'Pokhara, Malepatan', 9816137858, 'parajulil358@gmail.com', '5d9a1838e802c365706b6a183b62a74b', 'user', 'member1.jpg', 'active'),
(55, 'Nischa Pokhrel', 'Chindanda', 9824174707, 'nischal.pokharel147@gmail.com', '354b28c72430b1b5380fa28fd26acd4c', 'user', 'member1.jpg', 'active'),
(56, 'Admin', 'admin', 1234567891, 'admin12@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'member1.jpg', 'active'),
(57, 'admin', 'admin', 9898987878, 'admin@gmail.com', 'admin', 'admin', 'member1.jpg', ''),
(58, 'user', 'user', 9898989891, 'user99@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'pandey.jpg', 'inactive'),
(59, 'user', 'user', 98898988, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'education-for-girls.jpg', 'active'),
(60, 'Eden Hazard', 'Belgium', 9898989898988, 'eden@gmail.com', 'da897ba0fe30eff270424ac0e768840f', 'user', 'member1.jpg', 'active'),
(61, 'Bbinaya Koirala', 'Pokhara, Malepatan', 9898989898, 'bnayba98@gmail.com', 'a66987004f7c60fc5ec72a7d9ea1f9ea', 'user', 'member1.jpg', 'active');

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
