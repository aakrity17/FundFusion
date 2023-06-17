-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2023 at 01:16 PM
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
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `donation_name` varchar(50) NOT NULL,
  `donation_image_url` varchar(50) DEFAULT NULL,
  `donation_description` varchar(50) DEFAULT NULL,
  `donation_target` int(255) DEFAULT NULL,
  `donation_progress` varchar(20) DEFAULT NULL,
  `donation_type` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `donation_name`, `donation_image_url`, `donation_description`, `donation_target`, `donation_progress`, `donation_type`) VALUES
(34, 'Donation for Earth', 'earthquake.jpg', 'Donate now.', 500, '20%', 1),
(38, 'Donate for Tsunami Victims', 'Tsunami.jpg', 'Donate for Tsunami victims.', 750, '75%', 3),
(40, 'Donation for aircrash', 'plane crash.jpg', 'Plane crashed, helped the vicitims family.', 500, '20%', 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_image_url`, `event_description`, `event_duration`) VALUES
(15, 'fdvfsmd gnfsnfg ', 'Screenshot 2023-05-29 105358.png', 'svfvl fvlmfs v fslvlks lmfs bm, bzdml sm v', 'sdm smf'),
(16, 'svls v', 'Screenshot 2023-05-29 105358.png', 'v, s,v sv ,smmvs, vs', 'mvs v'),
(17, 'fdvfsmd gnfsnfg ', 'Screenshot 2023-05-29 105358.png', 'lmzdvlmv svmlsm vsl v', 'sdm smf');

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
  `s3content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepageslider`
--

INSERT INTO `homepageslider` (`id`, `s1head`, `s1content`, `s2head`, `s2content`, `s3head`, `s3content`) VALUES
(1, 'Donate For Good!!', 'i am slider first', 'help us to help', 'help us to help eedy', 'we do', 'we do to raise the souls.');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `thumbnail`, `video_url`, `descriptions`, `p_start_date`, `p_end_date`) VALUES
(1, 'Dharmasthali School', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Dharmasthali School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-15', '2023-06-20'),
(5, 'Devi Jal Kumari Lower Secondary Schools', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Devi Jal Kumari Lower Secondary School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-12', '2023-06-15'),
(6, 'Barahi School', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Barahi School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-8', '2023-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

DROP TABLE IF EXISTS `relation`;
CREATE TABLE IF NOT EXISTS `relation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `linkedin` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `skill`, `fb`, `twitter`, `insta`, `linkedin`) VALUES
(1, 'Akriti Chapagai', 'Frontend Developer', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(2, 'Binaya Koirala', 'Backend', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.co', 'https://www.facebook.com/'),
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
  `Contact` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `Contact`, `email`, `username`, `password`, `role`) VALUES
(19, 'Binaya Koirala', 'Pokhara, Malepatan', 984045457, 'beeenaya98@gmail.com', 'bin11', '44d501d07586eb98861c77d62ce048e0', 'user'),
(3, 'dnkzvd', 'nfklnc', 4653, 'lfcmsd', 'v zdl', 'mldmv', 'user'),
(7, 'Laxman Parajulifd', 'Parsyangdf', 989892, 'parajulil358@gmail.com', 'lax123ds', '149815eb972b3c370dee3b89d645ae14', 'user'),
(23, 'Binaya Koirala', 'Pokhara, Malepatan', 984045457, 'beeenaya98@gmail.com', 'binaya123', '54eff46137ed9d868d35d22b734534df', 'admin'),
(22, 'Darsan', 'Matepani', 9898989, 'darsan07@gmail.com', 'darsan123', 'ec20512ad12b20ad858398046253fa5d', 'admin'),
(21, 'Rosan Bhattrai', 'Birauta', 983247, 'rosan123@gmail.com', 'rosan123', '86c666dd76272644215cb0d987a47cbf', 'user'),
(20, 'Darsan', 'Matepani', 9898989, 'darsan07@gmail.com', 'darsan123', 'bcc137a5657ff4e6ef67e2873c018a28', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `full_name`, `email_address`, `phone_number`, `occupation`) VALUES
(2, 'Binaya Koirala', 'beeenaya98@gmail.com', '9840454572', 'iklklk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
