-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2018 at 03:54 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apple`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(30) NOT NULL,
  `spec1` text NOT NULL,
  `spec2` text NOT NULL,
  `spec3` text NOT NULL,
  `productstock` int(11) NOT NULL,
  `productprice` double NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `spec1`, `spec2`, `spec3`, `productstock`, `productprice`) VALUES
(1, 'iPhoneX', 'The Best Phone Ever', 'Mesmerizing Display', 'Very Very Expensive', 50, 1100),
(4, 'Iphone 6s', 'Old but nice', 'Very Good Display and Design', 'Rose Gold Color Available', 20, 1200),
(5, 'Macbook', 'The very fast Apple Computer', 'Sleek and Elegant Design', 'Rose Gold Color Available', 80, 2000),
(6, 'iMac', 'The Apple Desktop Experience', 'Subtle and Great Hardware', 'Top Quality Paid Software', 20, 6800);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `subscription_id` int(11) NOT NULL AUTO_INCREMENT,
  `subscriber_name` varchar(100) NOT NULL,
  `subscriber_email` varchar(100) NOT NULL,
  PRIMARY KEY (`subscription_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`subscription_id`, `subscriber_name`, `subscriber_email`) VALUES
(1, 'Kamlesh Kumar', 'mynameiskamlesh@gmail.com'),
(2, 'Pradip Sapkota', 'makukursangasutchu@gmail.com'),
(3, 'Prakash Kharel', 'meroghargauma@gmail.com'),
(4, 'Dagina Basnet', 'meronaamdagina@yahoo.com'),
(5, 'Bipin Kumar Sunam', 'iamahuntershewanttoseemagun@yahoo.com'),
(6, 'Utsav', 'utsav@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Kamles', 'Kumar', 'kamlesh@gmail.com', 'admin', 'admin'),
(2, 'tim', 'john', 'hhaaaa@gmail.com', 'kamu', 'bhopal'),
(3, 'Sagun', 'Shrestha', 'sagun123@gmail.com', 'sagunbina123', 'djforbj'),
(5, 'James', 'McAvoay', 'jamesmac@gmail.com', 'james', 'james');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
