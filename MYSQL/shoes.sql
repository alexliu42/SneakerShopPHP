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
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `Name` varchar(100) NOT NULL,
  `Size` int(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`Name`, `Size`, `Price`) VALUES
('Jordan 1 Retro High Bloodline', 10, 350),
('Jordan 1 Mid Chicago (2020)', 9, 250),
('Jordan 4 Retro What The', 9, 350),
('Jordan 5 Retro Fire Red Silver Tongue (2020)', 10, 300),
('Jordan 6 Retro Carmine (2021)', 9, 280),
('Jordan 8 Retro Tinker Air Raid', 9, 300),
('adidas Yeezy Boost 350 V2 Zebra', 8, 300),
('adidas Yeezy 500 Salt', 10, 350),
('adidas Yeezy Boost 700 Utility Black', 9, 350);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
