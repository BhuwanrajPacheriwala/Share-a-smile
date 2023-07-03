-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 03:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fm`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `pno` bigint(10) NOT NULL,
  `orgname` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `email`, `pno`, `orgname`, `amount`, `type`) VALUES
('50000', '', 0, '', 0, ''),
('50000', '', 0, '', 0, ''),
('50000', '', 0, '', 0, ''),
('50000', '', 0, '', 0, ''),
('Dev', 'devharishg', 8762045767, 'Amulya org', 60000, ''),
('Dev', 'devharishg', 8762045767, 'Amulya org', 60000, ''),
('Dev', 'devharishg', 8762045767, 'Amulya org', 60000, ''),
('Dev', 'devharishg', 8762045767, 'Amulya org', 60000, ''),
('Dev', 'devharishg', 8762045767, 'Amulya org', 70000, ''),
('Dev', 'devharishg', 8762045767, 'Amulya org', 70000, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
