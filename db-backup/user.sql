-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2023 at 09:03 AM
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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `Contact`, `email`, `username`, `password`, `role`) VALUES
(1, 'Binaya Koirala', 'Pokhara, Malepatan', 54, 'beeenaya98@gmail.com', 'vz', 'aa', 'user'),
(2, 'bin', 'Pokhara, Malepatan', 6563, 'beenaya98@gmail.com', 'binbinbin', 'bibbib', 'user'),
(3, 'dnkzvd', 'nfklnc', 4653, 'lfcmsd', 'v zdl', 'mldmv', 'user'),
(4, 'Binaya Koirala', 'Pokhara, Malepatan', 898263, 'beeenaya98@gmail.com', 'bi', '202cb962ac59075b964b07152d234b70', 'user'),
(5, 'mbgg', 'bk', 445, 'bgbg@gmail.com', 'bg', '5523c88dd347d1b7cc617f632b7efdb7', 'user'),
(6, 'Laxman Parajuli', 'Parsyang', 98989, 'parajulil358@gmail.com', 'lax123', 'caa686af3109f59024899225cbb9606e', 'user'),
(7, 'Laxman Parajulifd', 'Parsyangdf', 989892, 'parajulil358@gmail.com', 'lax123ds', '149815eb972b3c370dee3b89d645ae14', 'user'),
(8, 'kjkj', 'Pokhara, Malepatan', 6563, 'beeenaya98@gmail.com', 'a11', '11340131feec68e7ca463f960f0f341c', 'user'),
(9, 'asfs', 'fds', 132, 'beeenaya98@gmail.com', 'binaya', 'b8bcabd14cae29b361e42b3d88f13593', 'user'),
(10, 'Binaya Koirala', 'Pokhara, Malepatan', 3443, 'beeenaya98@gmail.com', 'nibnib', 'c39d22d2bbf1048abc32fdc6094cc6af', 'user'),
(11, 'Binaya Koirala', 'Pokhara, Malepatan', 451, 'beeenaya98@gmail.com', 'asd', '7815696ecbf1c96e6894b779456d330e', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
