-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 04:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `id` varchar(5) NOT NULL,
  `bonus` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`name`, `password`, `email`, `phone`, `id`, `bonus`) VALUES
('Sharan', 'sharan', 'admin@email.com', 987654321, 'EM1', 5400),
('Prasath', 'prasath', 'prasath@email.com', 2147483647, 'EM2', 7890),
('Vicky', 'vicky', 'vicky@email.com', 2147483647, 'EM3', 1234),
('Priyanka', 'priyanka', 'priyanka@email.com', 2147483647, 'EM4', 5875),
('Srujana', 'srujana', 'srujana@email.com', 2147483647, 'EM5', 4567),
('Thejashwin', 'thejashwin', 'thejashwin@email.com', 2147483647, 'EM6', 4789),
('Snehith', 'snehith', 'snehith@email.com', 2147483647, 'EM7', 1234),
('Surya', 'surya', 'surya@email.com', 2147483647, 'EM8', 9123),
('Jagadish', 'jagadish', 'jagadish@email.com', 2147483647, 'EM9', 4321),
('Sudharshan', 'sudharshan', 'sudharshan@email.com', 2147483647, 'EM10', 7856);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
