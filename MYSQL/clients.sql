-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 08:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshkicks`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `shoes` varchar(100) NOT NULL,
  `shoes1` varchar(100) NOT NULL,
  `shoes2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`fname`, `lname`, `email`, `phone`, `shoes`, `shoes1`, `shoes2`) VALUES
('alex', 'liu', 'alexliu42@yahoo.com.tw', '7786687462', '\"adidas Yeezy 500 Salt\"', '\"adidas Yeezy Boost 350 V2 Zebra\"', '\"adidas Yeezy 500 Salt\"'),
('alex', 'liu', 'alexliu42@yahoo.com.tw', '778123123123', '\"Jordan 4 Retro What The\"', '', ''),
('a', 'l', 'alex@checksammy.com', '778123123', '\"Jordan 5 Retro Fire Red Silver Tongue (2020)\"', '\"Jordan 5 Retro Fire Red Silver Tongue (2020)\"', ''),
('a', 'l', 'alex@checksammy.com', '778123123', '\"Jordan 5 Retro Fire Red Silver Tongue (2020)\"', '\"Jordan 5 Retro Fire Red Silver Tongue (2020)\"', ''),
('amy', 'tseng', 'amytseng@gmail.com', '7781231234', '\"Jordan 4 Retro What The\"', '', ''),
('amy', 'tseng', 'amytseng@gmail.com', '7781231234', '\"Jordan 4 Retro What The\"', '', ''),
('amy', 'tseng', 'alexliu42@yhoo.com', '8812312', '\"Jordan 6 Retro Carmine (2021)\"', '', ''),
('amy', 'tsenng', 'amytesng96@gmail.com', '778231147', '\"adidas Yeezy Boost 350 V2 Zebra\"', '\"Jordan 5 Retro Fire Red Silver Tongue (2020)\"', '\"adidas Yeezy Boost 700 Utility Black\"');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
