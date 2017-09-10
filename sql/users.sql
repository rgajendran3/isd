-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2014 at 07:25 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isd`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` char(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `password`, `question`, `answer`, `email`, `phone`, `house_no`, `street`, `state`, `postcode`, `country`) VALUES
(1, 'A', 'Gaju', '60df5bc09bf2f7fd9e454f9df6c7fe2a', '', '', 'r.gajendran3@gmail.com', '7424633887', '413', '413 Liberty Park', 'United Kingdom', 'LS1 4LB', 'United Kingdom'),
(13, 'A', 'admins', '60df5bc09bf2f7fd9e454f9df6c7fe2a', '', '', 'r.gajendran3@gmail.comm', '1234567891', '111', 'marlborough', 'UK', 'LS1', 'United Kingdom'),
(22, 'N', 'customer', '60df5bc09bf2f7fd9e454f9df6c7fe2a', 'What is your t-mobile no?', 'd65d72e1f54a777e612f7dcbc88fa297', 'r.gajendran3@gmail.com', '1234567897', '111', '413 Liberty Park', 'Leeds', 'LS1 4LB', 'United Kingdom'),
(23, 'N', 'Normaluser', '60df5bc09bf2f7fd9e454f9df6c7fe2a', 'What is your mobile no?', 'd65d72e1f54a777e612f7dcbc88fa297', 'r.gajendran3@gmail.com', '1234567891', '11', 'Marlborough Street', 'delhi', 'LS1 4LB', 'United Kingdom'),
(24, 'N', 'Register', '60df5bc09bf2f7fd9e454f9df6c7fe2a', 'What is your course?', '7714f82f80ad3dd37c5b7e542118d1b7', 'r.gajendran3@gmail.com', '1234567891', '11', 'Marlborough Street', 'delhi', 'LS1 4LB', 'United Kingdom');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
