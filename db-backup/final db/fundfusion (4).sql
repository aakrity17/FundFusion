-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 06:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundfusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(6) NOT NULL,
  `donation_name` varchar(50) DEFAULT NULL,
  `donation_image_url` varchar(50) DEFAULT NULL,
  `donation_description` text DEFAULT NULL,
  `donation_target` int(8) DEFAULT NULL,
  `donation_progress` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `donation_name`, `donation_image_url`, `donation_description`, `donation_target`, `donation_progress`) VALUES
(1, 'Donation for Earthquake', 'earthquake.jpg', 'Donate to help victims of Earthquake in Turkey. Your small help can help save lives of many.', 1000, 0),
(2, 'Donate for Tsunami Victims', 'sunami.jpg', 'Donate to help victims of Tsunami in Hiroshima, Japan. Anata no chīsana shien ga ōku no hito no inochi o sukuu koto ga dekimasu, Arigattou.', 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(5) NOT NULL,
  `uid` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_image_url` mediumtext NOT NULL,
  `event_description` longtext NOT NULL,
  `event_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_image_url`, `event_description`, `event_duration`) VALUES
(15, 'fdvfsmd gnfsnfg ', 'Screenshot 2023-05-29 105358.png', 'svfvl fvlmfs v fslvlks lmfs bm, bzdml sm v', 'sdm smf'),
(16, 'svls v', 'Screenshot 2023-05-29 105358.png', 'v, s,v sv ,smmvs, vs', 'mvs v'),
(17, 'fdvfsmd gnfsnfg ', 'Screenshot 2023-05-29 105358.png', 'lmzdvlmv svmlsm vsl v', 'sdm smf');

-- --------------------------------------------------------

--
-- Table structure for table `event_payment_info`
--

CREATE TABLE `event_payment_info` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `fb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `fax` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`fb`, `twitter`, `youtube`, `google`, `skype`, `address`, `phone`, `fax`, `email`) VALUES
('dnsfkjn', 'skfnsdfdsfs2123', 'skfnsdfs', 'skfnsdf213sd', 'skfnsdfsdfdsfsdf', 'dnfksd', 989898989, 10017856, 'fundfusion@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `homepageslider`
--

CREATE TABLE `homepageslider` (
  `id` int(2) NOT NULL,
  `s1head` text NOT NULL,
  `s1content` text NOT NULL,
  `s2head` text NOT NULL,
  `s2content` text NOT NULL,
  `s3head` text NOT NULL,
  `s3content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homepageslider`
--

INSERT INTO `homepageslider` (`id`, `s1head`, `s1content`, `s2head`, `s2content`, `s3head`, `s3content`) VALUES
(1, 'Donate For Good!!', 'i am slider first', 'help us to help', 'help us to help eedy', 'we do', 'we do to raise the souls.');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `membership_type` varchar(50) NOT NULL,
  `amount` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_register_info`
--

CREATE TABLE `membership_register_info` (
  `id` int(11) NOT NULL,
  `membership_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` mediumtext NOT NULL,
  `video_url` longtext NOT NULL,
  `descriptions` longtext NOT NULL,
  `p_start_date` varchar(255) NOT NULL,
  `p_end_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `thumbnail`, `video_url`, `descriptions`, `p_start_date`, `p_end_date`) VALUES
(1, 'Dharmasthali School', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Dharmasthali School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-15', '2023-06-20'),
(5, 'Devi Jal Kumari Lower Secondary Schools', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Devi Jal Kumari Lower Secondary School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-12', '2023-06-15'),
(6, 'Barahi School', 'Devi-Jal-Kumari-Banner.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RaRPkXOgTO8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Barahi School was established in 2001 AD (2058 BS). It is located in Ward No 6 Aprik village of Arughat Rural Municipality (previously Ward No 6 of Aruarbang Village Development Committee) in northern Gorkha district. ', '2023-06-8', '2023-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--

CREATE TABLE `sponsorship` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `amount` int(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship_register_info`
--

CREATE TABLE `sponsorship_register_info` (
  `id` int(11) NOT NULL,
  `sponsorship_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT 'member1.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `Contact`, `email`, `password`, `role`, `profile_picture`) VALUES
(22, 'Darsan', 'Matepani', 9898989, 'darsan07@gmail.com', 'ec20512ad12b20ad858398046253fa5d', 'admin', 'member1.jpg'),
(23, 'Binaya Koirala', 'Pokhara, Malepatan', 984045457, 'beeenaya98@gmail.com', '54eff46137ed9d868d35d22b734534df', 'admin', 'member1.jpg'),
(32, 'Safal Koirala', 'Pokhara, Ram Krishna Tole', 9846154935, 'twilaarmy@gmail.com', '560e9e727bf41ca4112c28b2e1e52d70', 'user', 'member1.jpg'),
(34, 'laxman', 'pokhara', 989898, 'lax@gmail.com', 'laxman', 'admin', 'member1.jpg'),
(38, 'Binaya Koirala', 'Pokhara, Malepatan', 9840454572, 'binaya98@gmail.com', 'b8bcabd14cae29b361e42b3d88f13593', 'user', 'member1.jpg'),
(45, 'Ujjwal Adhikari', 'Pokhara', 981613785, 'ujjwal999@gmail.com', 'e57f8701772053be79618c78a1936a31', 'admin', 'member1.jpg'),
(46, 'Ujjwal Adhikari', 'Pokhara', 981613785, 'ujjwal999adhikari@gmail.com', '60be1ce835dabf7f22c97f3d709caa41', 'user', 'darlin.jpg'),
(47, 'Ishan', 'Shantinagar', 981910236, 'xishansub@gmail.com', 'e187a4b2db3f9b07430e563fd6749a7a', 'user', 'ishan.png'),
(48, 'Ujjwal', 'Malepatan', 982616788, 'pokhreli.thito10@gmail.com', '51194be63b0f1ea5fbe4675b4a6d1290', 'user', 'member1.jpg'),
(49, 'Sajit', 'Chinedada', 981614063, 'sajitgurung829@gmail.com', 'd5974a7ebd9312d02a6722596264459c', 'user', 'member1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_payment_info`
--
ALTER TABLE `event_payment_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`,`donor_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_register_info`
--
ALTER TABLE `membership_register_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `membership_id` (`membership_id`,`donor_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsorship_register_info`
--
ALTER TABLE `sponsorship_register_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sponsorship_id` (`sponsorship_id`,`donor_id`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `event_payment_info`
--
ALTER TABLE `event_payment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_register_info`
--
ALTER TABLE `membership_register_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsorship`
--
ALTER TABLE `sponsorship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsorship_register_info`
--
ALTER TABLE `sponsorship_register_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `donors_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

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
  ADD CONSTRAINT `membership_register_info_ibfk_2` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`id`);

--
-- Constraints for table `sponsorship_register_info`
--
ALTER TABLE `sponsorship_register_info`
  ADD CONSTRAINT `sponsorship_register_info_ibfk_1` FOREIGN KEY (`sponsorship_id`) REFERENCES `sponsorship` (`id`),
  ADD CONSTRAINT `sponsorship_register_info_ibfk_2` FOREIGN KEY (`donor_id`) REFERENCES `donors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
