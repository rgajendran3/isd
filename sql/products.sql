-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2014 at 07:24 PM
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
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `model_no` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `oldprice` float NOT NULL,
  `price` float NOT NULL,
  `size1` char(2) NOT NULL,
  `size2` char(2) NOT NULL,
  `size3` char(2) NOT NULL,
  `color1` varchar(15) NOT NULL,
  `color2` varchar(15) NOT NULL,
  `color3` varchar(15) NOT NULL,
  `reviews` text NOT NULL,
  `stock_available` text NOT NULL,
  `offer` char(2) NOT NULL,
  `shipping` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `category`, `subcategory`, `model_no`, `image`, `description`, `oldprice`, `price`, `size1`, `size2`, `size3`, `color1`, `color2`, `color3`, `reviews`, `stock_available`, `offer`, `shipping`) VALUES
(1, 'Denim', 'Men', 'Black Jeans', 'BGS1021', 'images/men/pant1.jpg', 'new', 0, 2.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BLACK', 'new', '4', 'NO', 2.99),
(2, 'Denim', 'Men', 'Blue Jeans', 'BGS103', 'images/men/pant2.jpg', '', 0, 35.5, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(3, 'Denim', 'Men', 'Jeans', 'BGS104', 'images/men/pant3.jpg', '', 0, 30.23, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '0', 'NO', 2.99),
(4, 'Denim', 'Men', 'Jeans', 'BGS105', 'images/men/pant4.jpg', '', 0, 29.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(5, 'Denim', 'Men', 'Jeans', 'BGS106', 'images/men/pant5.jpg', '', 0, 28.52, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '5', 'NO', 2.99),
(6, 'Denim', 'Men', 'Jeans', 'BGS107', 'images/men/pant6.jpg', '', 0, 32.1, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(7, 'Denim', 'Men', 'Jeans', 'BGS108', 'images/men/pant7.jpg', '', 0, 41.23, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '2', 'NO', 2.99),
(8, 'Denim', 'Men', 'Jeans', 'BGS109', 'images/men/pant8.jpg', '', 0, 26.3, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(9, 'Denim', 'Men', 'Jeans', 'BGS110', 'images/men/pant9.jpg', '', 0, 25.03, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(10, 'Denim', 'Men', 'Jeans', 'BGS110', 'images/men/pant10.jpg', '', 0, 39.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(11, 'Denim', 'Men', 'Jeans', 'BGS112', 'images/men/pant11.jpg', '', 0, 38.65, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(12, 'Denim', 'Men', 'Jeans', 'BGS113', 'images/men/pant12.jpg', '', 0, 37.56, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(13, 'Denim', 'Men', 'Jeans', 'BGS114', 'images/men/pant13.jpg', '', 0, 35.47, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(14, 'Denim', 'Men', 'Jeans', 'BGS115', 'images/men/pant14.jpg', '', 0, 36.58, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(15, 'Denim', 'Men', 'Jeans', 'BGS116', 'images/men/pant15.jpg', '', 0, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(16, 'holister', 'Men', 'Shirt', 'BGS117', 'images/men/shirt1.jpg', '', 0, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(17, 'holister', 'Men', 'Shirt', 'BGS118', 'images/men/shirt2.jpg', '', 0, 34.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(18, 'holister', 'Men', 'Shirt', 'BGS119', 'images/men/shirt3.jpg', '', 0, 36.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(19, 'holister', 'Men', 'Shirt', 'BGS120', 'images/men/shirt4.jpg', '', 0, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(20, 'holister', 'Men', 'Shirt', 'BGS121', 'images/men/shirt5.jpg', '', 0, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(21, 'holister', 'Men', 'Shirt', 'BGS122', 'images/men/shirt6.jpg', '', 0, 34.56, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(22, 'holister', 'Men', 'Shirt', 'BGS123', 'images/men/shirt7.jpg', '', 0, 31.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(23, 'holister', 'Men', 'Shirt', 'BGS124', 'images/men/shirt8.jpg', '', 0, 24.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(24, 'holister', 'Men', 'Shirt', 'BGS125', 'images/men/shirt9.jpg', '', 0, 40.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(25, 'holister', 'Men', 'Shirt', 'BGS126', 'images/men/shirt10.jpg', '', 0, 35.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(26, 'holister', 'Men', 'Shirt', 'BGS127', 'images/men/shirt11.jpg', '', 0, 40.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(27, 'holister', 'Men', 'Shirt', 'BGS128', 'images/men/shirt12.jpg', '', 0, 42.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(28, 'holister', 'Men', 'Shirt', 'BGS129', 'images/men/shirt13.jpg', '', 0, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(29, 'holister', 'Men', 'Shirt', 'BGS129', 'images/men/shirt14.jpg', '', 0, 34.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(30, 'holister', 'Men', 'Shirt', 'BGS129', 'images/men/shirt15.jpg', '', 0, 20.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(31, 'holister', 'Men', 'Jacket', 'BGS130', 'images/men/jacket1.jpg', '', 0, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(32, 'holister', 'Men', 'Jacket', 'BGS131', 'images/men/jacket2.jpg', '', 0, 35.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(33, 'holister', 'Men', 'Jacket', 'BGS132', 'images/men/jacket3.jpg', '', 0, 31.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(34, 'holister', 'Men', 'Jacket', 'BGS133', 'images/men/jacket4.jpg', '', 0, 35.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(35, 'holister', 'Men', 'Jacket', 'BGS134', 'images/men/jacket5.jpg', '', 0, 36.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(36, 'holister', 'Men', 'Jacket', 'BGS135', 'images/men/jacket6.jpg', '', 0, 35.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(37, 'holister', 'Men', 'Jacket', 'BGS136', 'images/men/jacket7.jpg', '', 0, 31.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(38, 'holister', 'Men', 'Jacket', 'BGS137', 'images/men/jacket8.jpg', '', 0, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(39, 'holister', 'Men', 'Jacket', 'BGS138', 'images/men/jacket9.jpg', '', 0, 38.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(40, 'holister', 'Men', 'Jacket', 'BGS139', 'images/men/jacket10.jpg', '', 0, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(41, 'holister', 'Men', 'Jacket', 'BGS140', 'images/men/jacket11.jpg', '', 0, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(42, 'holister', 'Men', 'Jacket', 'BGS141', 'images/men/jacket12.jpg', '', 0, 36.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(43, 'holister', 'Men', 'Jacket', 'BGS142', 'images/men/jacket13.jpg', '', 0, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(44, 'holister', 'Men', 'Jacket', 'BGS143', 'images/men/jacket14.jpg', '', 0, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(45, 'holister', 'Men', 'Jacket', 'BGS144', 'images/men/jacket15.jpg', '', 0, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(46, 'Denim', 'Women', 'Pant', 'BGS145', 'images/women/pant1.jpg', '', 0, 25, 'S', 'M', 'L', 'RED', 'BLUE', 'BLACK', '', '2', 'NO', 2.99),
(47, 'Denim', 'Women', 'Pant', 'BGS146', 'images/women/pant2.jpg', '', 0, 35.5, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(48, 'Denim', 'Women', 'Pant', 'BGS147', 'images/women/pant3.jpg', '', 0, 40.23, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(49, 'Denim', 'Women', 'Pant', 'BGS148', 'images/women/pant4.jpg', '', 0, 29.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(50, 'Denim', 'Women', 'Pant', 'BGS149', 'images/women/pant5.jpg', '', 0, 28.52, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '5', 'NO', 2.99),
(51, 'Denim', 'Women', 'Pant', 'BGS150', 'images/women/pant6.jpg', '', 0, 32.1, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(52, 'Denim', 'Women', 'Pant', 'BGS151', 'images/women/pant7.jpg', '', 0, 41.23, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '2', 'NO', 2.99),
(53, 'Denim', 'Women', 'Pant', 'BGS152', 'images/women/pant8.jpg', '', 0, 26.3, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(54, 'Denim', 'Women', 'Pant', 'BGS153', 'images/women/pant9.jpg', '', 0, 25.03, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(55, 'Denim', 'Women', 'Pant', 'BGS110', 'images/women/pant10.jpg', '', 0, 39.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(56, 'Denim', 'Women', 'Pant', 'BGS112', 'images/women/pant11.jpg', '', 0, 38.65, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(57, 'Denim', 'Women', 'Pant', 'BGS113', 'images/women/pant12.jpg', '', 0, 37.56, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(58, 'Denim', 'Women', 'Pant', 'BGS114', 'images/women/pant13.jpg', '', 0, 35.47, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(59, 'Denim', 'Women', 'Pant', 'BGS115', 'images/women/pant14.jpg', '', 0, 36.58, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(60, 'Denim', 'Women', 'Pant', 'BGS116', 'images/women/pant15.jpg', '', 0, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(61, 'holister', 'Women', 'Shirt', 'BGS117', 'images/women/shirt1.jpg', '', 0, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(62, 'holister', 'Women', 'Shirt', 'BGS118', 'images/women/shirt2.jpg', '', 0, 34.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(63, 'holister', 'Women', 'Shirt', 'BGS119', 'images/women/shirt3.jpg', '', 0, 36.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(64, 'holister', 'Women', 'Shirt', 'BGS120', 'images/women/shirt4.jpg', '', 0, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(65, 'holister', 'Women', 'Shirt', 'BGS121', 'images/women/shirt5.jpg', '', 0, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(66, 'holister', 'Women', 'Shirt', 'BGS122', 'images/women/shirt6.jpg', '', 0, 34.56, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(67, 'holister', 'Women', 'Shirt', 'BGS123', 'images/women/shirt7.jpg', '', 0, 31.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(68, 'holister', 'Women', 'Shirt', 'BGS124', 'images/women/shirt8.jpg', '', 0, 24.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(69, 'holister', 'Women', 'Shirt', 'BGS125', 'images/women/shirt9.jpg', '', 0, 40.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(70, 'holister', 'Women', 'Shirt', 'BGS126', 'images/women/shirt10.jpg', '', 0, 35.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(71, 'holister', 'Women', 'Shirt', 'BGS127', 'images/women/shirt11.jpg', '', 0, 40.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(72, 'holister', 'Women', 'Shirt', 'BGS128', 'images/women/shirt12.jpg', '', 0, 42.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(73, 'holister', 'Women', 'Shirt', 'BGS129', 'images/women/shirt13.jpg', '', 0, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(74, 'holister', 'Women', 'Shirt', 'BGS129', 'images/women/shirt14.jpg', '', 0, 34.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(75, 'holister', 'Women', 'Shirt', 'BGS129', 'images/women/shirt15.jpg', '', 0, 20.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(76, 'Denim', 'Women', 'Jacket', 'BGS102', 'images/Women/Jacket1.jpg', '', 0, 25, 'S', 'M', 'L', 'RED', 'BLUE', 'BLACK', '', '2', 'NO', 2.99),
(77, 'Hollister', 'Women', 'Jacket', 'BGS103', 'images/Women/Jacket2.jpg', '', 0, 35.5, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(78, 'Hollister', 'Women', 'Jacket', 'BGS104', 'images/Women/Jacket3.jpg', '', 0, 40.23, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(79, 'Denim', 'Women', 'Jacket', 'BGS105', 'images/Women/Jacket4.jpg', '', 0, 29.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(80, 'Hollister', 'Women', 'Jacket', 'BGS106', 'images/Women/Jacket5.jpg', '', 0, 26.52, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '5', 'NO', 2.99),
(81, 'Denim', 'Women', 'Jacket', 'BGS107', 'images/Women/Jacket6.jpg', '', 0, 32.55, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(82, 'Hollister', 'Women', 'Jacket', 'BGS108', 'images/Women/Jacket7.jpg', '', 0, 41.23, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '2', 'NO', 2.99),
(83, 'Denim', 'Women', 'Jacket', 'BGS109', 'images/Women/Jacket8.jpg', '', 0, 28.3, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(84, 'Hollister', 'Women', 'Jacket', 'BGS110', 'images/Women/Jacket9.jpg', '', 0, 42.03, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(85, 'Denim', 'Women', 'Jacket', 'BGS110', 'images/Women/Jacket10.jpg', '', 0, 50.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(86, 'Hollister', 'Women', 'Jacket', 'BGS112', 'images/Women/Jacket11.jpg', '', 0, 46.65, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(87, 'Denim', 'Women', 'Jacket', 'BGS113', 'images/Women/Jacket12.jpg', '', 0, 35.56, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(88, 'Hollister', 'Women', 'Jacket', 'BGS114', 'images/Women/Jacket13.jpg', '', 0, 31.47, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(89, 'Denim', 'Women', 'Jacket', 'BGS115', 'images/Women/Jacket14.jpg', '', 0, 39.58, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(90, 'Hollister', 'Women', 'Jacket', 'BGS116', 'images/Women/Jacket15.jpg', '', 0, 31.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'NO', 2.99),
(91, 'Denim', 'Men', 'Accessories', 'BGS1021', 'images/Accessories/men1.jpg', 'new', 0, 25.1, 'S', 'M', 'L', 'RED', 'BLUE', 'BLACK', 'new', '2', 'NO', 2.99),
(92, 'Denim', 'Men', 'Accessories', 'BGS103', 'images/Accessories/men2.jpg', '', 0, 35.5, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(93, 'Denim', 'Men', 'Accessories', 'BGS104', 'images/Accessories/men3.jpg', '', 0, 40.23, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(94, 'Denim', 'Men', 'Accessories', 'BGS105', 'images/Accessories/men4.jpg', '', 0, 29.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(95, 'Denim', 'Men', 'Accessories', 'BGS106', 'images/Accessories/men5.jpg', '', 0, 28.52, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '5', 'NO', 2.99),
(96, 'Denim', 'Men', 'Accessories', 'BGS107', 'images/Accessories/men6.jpg', '', 0, 32.1, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(97, 'Denim', 'Men', 'Accessories', 'BGS108', 'images/Accessories/men7.jpg', '', 0, 41.23, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '2', 'NO', 2.99),
(98, 'Denim', 'Men', 'Accessories', 'BGS109', 'images/Accessories/men8.jpg', '', 0, 26.3, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(99, 'Denim', 'Men', 'Accessories', 'BGS110', 'images/Accessories/men9.jpg', '', 0, 25.03, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(100, 'Denim', 'Men', 'Accessories', 'BGS110', 'images/Accessories/men10.jpg', '', 0, 39.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(101, 'Denim', 'Men', 'Accessories', 'BGS112', 'images/Accessories/men11.jpg', '', 0, 38.65, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(102, 'Denim', 'Women', 'Accessories', 'BGS145', 'images/Accessories/women1.jpg', '', 0, 25, 'S', 'M', 'L', 'RED', 'BLUE', 'BLACK', '', '3', 'NO', 2.99),
(103, 'Denim', 'Women', 'Accessories', 'BGS146', 'images/Accessories/women2.jpg', '', 0, 35.5, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(104, 'Denim', 'Women', 'Accessories', 'BGS147', 'images/Accessories/women3.jpg', '', 0, 40.23, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(105, 'Denim', 'Women', 'Accessories', 'BGS148', 'images/Accessories/women4.jpg', '', 0, 29.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(106, 'Denim', 'Women', 'Accessories', 'BGS149', 'images/Accessories/women5.jpg', '', 0, 28.52, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '5', 'NO', 2.99),
(107, 'Denim', 'Women', 'Accessories', 'BGS150', 'images/Accessories/women6.jpg', '', 0, 32.1, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '3', 'NO', 2.99),
(108, 'Denim', 'Women', 'Accessories', 'BGS151', 'images/Accessories/women7.jpg', '', 0, 41.23, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '2', 'NO', 2.99),
(109, 'Denim', 'Women', 'Accessories', 'BGS152', 'images/Accessories/women8.jpg', '', 0, 26.3, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(110, 'Denim', 'Women', 'Accessories', 'BGS153', 'images/Accessories/women9.jpg', '', 0, 25.03, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(111, 'Denim', 'Women', 'Accessories', 'BGS110', 'images/Accessories/women10.jpg', '', 0, 39.99, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '3', 'NO', 2.99),
(112, 'Denim', 'Women', 'Accessories', 'BGS112', 'images/Accessories/women11.jpg', '', 0, 38.65, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '2', 'NO', 2.99),
(113, 'holister', 'Women', 'Shirt', 'BGS130', 'images/offers/item1.jpg', '', 50, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(114, 'holister', 'Women', 'Shirt', 'BGS131', 'images/offers/item2.jpg', '', 50, 35.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(115, 'holister', 'Women', 'Shirt', 'BGS132', 'images/offers/item3.jpg', '', 50, 31.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(116, 'holister', 'Women', 'Shirt', 'BGS133', 'images/offers/item4.jpg', '', 50, 35.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(117, 'holister', 'Women', 'Shirt', 'BGS134', 'images/offers/item5.jpg', '', 50, 36.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(118, 'holister', 'Women', 'Shirt', 'BGS135', 'images/offers/item6.jpg', '', 50, 35.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(119, 'holister', 'Women', 'Shirt', 'BGS136', 'images/offers/item7.jpg', '', 50, 31.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(120, 'holister', 'Men', 'Shirt', 'BGS137', 'images/offers/item8.jpg', '', 50, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(121, 'holister', 'Men', 'Shirt', 'BGS138', 'images/offers/item9.jpg', '', 50, 38.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(122, 'holister', 'Men', 'Shirt', 'BGS139', 'images/offers/item10.jpg', '', 50, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(123, 'holister', 'Men', 'Shirt', 'BGS140', 'images/offers/item11.jpg', '', 50, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(124, 'holister', 'Men', 'Shirt', 'BGS141', 'images/offers/item12.jpg', '', 50, 36.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(125, 'holister', 'Men', 'Shirt', 'BGS142', 'images/offers/item13.jpg', '', 50, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(126, 'holister', 'Men', 'Shirt', 'BGS143', 'images/offers/item14.jpg', '', 50, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(127, 'holister', 'Men', 'Shirt', 'BGS144', 'images/offers/item15.jpg', '', 50, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(128, 'holister', 'Men', 'Jacket', 'BGS139', 'images/offers/item16.jpg', '', 50, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(129, 'holister', 'Men', 'Jacket', 'BGS140', 'images/offers/item17.jpg', '', 50, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(130, 'holister', 'Men', 'Jacket', 'BGS141', 'images/offers/item18.jpg', '', 50, 36.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(131, 'holister', 'Men', 'Jacket', 'BGS142', 'images/offers/item19.jpg', '', 50, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(132, 'holister', 'Men', 'Jacket', 'BGS143', 'images/offers/item20.jpg', '', 50, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(133, 'holister', 'Women', 'Pant', 'BGS144', 'images/offers/item19.jpg', '', 50, 33.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(134, 'holister', 'Women', 'Pant', 'BGS142', 'images/offers/item22.jpg', '', 50, 37.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(135, 'holister', 'Women', 'Pant', 'BGS143', 'images/offers/item23.jpg', '', 50, 39.55, 'S', 'M', 'L', 'RED', 'BLUE', 'BROWN', '', '4', 'OF', 2.99),
(136, 'holister', 'Women', 'Shirt', 'BGS130', 'images/offers/item21.jpg', '', 50, 39.99, 'S', 'M', 'L', 'RED', 'BLUE', 'GREEN', '', '', 'OF', 2.99);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
