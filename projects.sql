-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 06:58 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
