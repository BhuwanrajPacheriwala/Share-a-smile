-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 07:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
('Dev', 'devharishg', 8762045767, 'Amulya org', 70000, ''),
('ASDFG', 'abc@gmail.', 2345678901, 'sookshma', 1000, ''),
('ASDFG', 'abc@gmail.', 2345678901, 'sookshma', 1000, ''),
('Ankita P K', 'ankitapkar', 9611053862, 'sookshma', 2000, ''),
('Ankita P K', 'ankitapkar', 9611053862, 'sookshma', 2000, '');

-- --------------------------------------------------------

--
-- Table structure for table `invest`
--

CREATE TABLE `invest` (
  `userid` varchar(10) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `i_typef` varchar(2) NOT NULL,
  `i_nof` varchar(2) NOT NULL,
  `i_money` int(11) NOT NULL,
  `tenure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invest_type`
--

CREATE TABLE `invest_type` (
  `i_no` varchar(2) NOT NULL,
  `i_type` varchar(2) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `r.o.r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invest_type`
--

INSERT INTO `invest_type` (`i_no`, `i_type`, `plan`, `r.o.r`) VALUES
('i1', 'MD', 'Axis MD', 15),
('i2', 'MD', 'Uti MD', 16),
('i3', 'MD', 'Sbi MD', 16),
('i4', 'MD', 'Kotak MD', 16),
('I5', 'FD', 'Fincare FD', 7),
('i6', 'FD', 'Shriram FD', 8),
('i7', 'FD', 'Canara FD', 7);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `userid` varchar(10) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `l_typef` varchar(20) NOT NULL,
  `l_nof` varchar(2) NOT NULL,
  `l_money` int(11) NOT NULL,
  `tenure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_type`
--

CREATE TABLE `loan_type` (
  `l_no` varchar(2) NOT NULL,
  `l_type` varchar(20) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `roi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_type`
--

INSERT INTO `loan_type` (`l_no`, `l_type`, `plan`, `roi`) VALUES
('l1', 'Personal loan', 'Canara bank', 11),
('l2', 'Personal loan', 'SBI ', 10),
('l3', 'Personal loan', 'Indus', 10),
('l4', 'Home loan', 'SBI housing ', 9),
('l5', 'Home loan', 'Kotak housing', 9),
('l6', 'Home loan', 'Axis housing', 9),
('l7', 'Student loan', 'Indus sl', 7),
('l8', 'Student loan', 'HDFC sl ', 6),
('l9', 'Student loan', 'Axis sl', 6);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`) VALUES
('EFGXS', 'XDGRDXBRH'),
('admin', 'Test@123'),
('user', 'user22');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `Name` varchar(10) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Location` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `bio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`Name`, `Type`, `Location`, `phone`, `bio`) VALUES
('Amulya Fou', 'Adoption', 'banglore', 8762045274, 'Our mission is to provide loving homes for animals in need, and to promote responsible pet ownership through education and outreach. We believe that every animal deserves a second chance, and we work ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phno` int(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `pass`, `name`, `age`, `phno`, `country`, `gender`) VALUES
('admin', 'Test@123', 'Amulya G L', 21, 2147483647, 'Inia', 'f'),
('EFGXS', 'XDGRDXBRH', 'ASD', 133, 12345678, 'SADFG', 'M'),
('user', 'user22', 'apk', 21, 2147483647, 'india', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `tblanimal`
--

CREATE TABLE `tblanimal` (
  `ID` int(10) NOT NULL,
  `AnimalName` varchar(200) DEFAULT NULL,
  `CageNumber` int(10) DEFAULT NULL,
  `FeedNumber` varchar(200) DEFAULT NULL,
  `Breed` varchar(200) DEFAULT NULL,
  `AnimalImage` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblanimal`
--

INSERT INTO `tblanimal` (`ID`, `AnimalName`, `CageNumber`, `FeedNumber`, `Breed`, `AnimalImage`, `Description`, `CreationDate`) VALUES
(1, 'Giraffe', 12300, 'FN-123', 'Masai giraffe', '694cb29edd30cd1d86dda55dd904ee4b1596609931.jpg', 'The Masai giraffe (Giraffa camelopardalis tippelskirchii), also spelled Maasai giraffe, also called Kilimanjaro giraffe, is the largest subspecies of giraffe. It is native to East Africa. The Masai giraffe can be found in central and southern Kenya and in Tanzania.', '2022-05-04 18:30:00'),
(2, 'Giraffe', 12301, 'F-5688', 'Reticulated giraffe', '7fdc1a630c238af0815181f9faa190f51596609868.jpg', 'The reticulated giraffe (Giraffa camelopardalis reticulata), also known as the Somali giraffe, is a subspecies of giraffe native to the Horn of Africa. It lives in Somalia, southern Ethiopia, and northern Kenya. There are approximately 8,500 individuals living in the wild.', '2022-05-04 18:30:00'),
(3, 'Tiger', 12302, 'FN-809', 'Bengal Tiger', 'e692bd84570d9f467b75af761bf15c7c1596609789.jpg', 'The Bengal tiger is a tiger from a specific population of the Panthera tigris tigris subspecies that is native to the Indian subcontinent. It is threatened by poaching, loss, and fragmentation of habitat, and was estimated at comprising fewer than 2,500 individuals by 2011.', '2022-05-04 18:30:00'),
(4, 'Tiger', 12303, 'FN-798', ' Indochinese Tiger', '031a51aa205bd3138f7afeb0d86999e51596611280.png', 'The Indochinese tiger is a tiger from a specific population of the Panthera tigris tigris subspecies that is native to Southeast Asia. This population occurs in Myanmar, Thailand, Laos, Vietnam, Cambodia and southwestern China.', '2022-05-04 18:30:00'),
(5, 'Tiger', 12304, 'FN-787', 'Siberian Tiger', '1e6ae4ada992769567b71815f124fac51596609708.jpg', 'The Siberian tiger is a tiger from a specific population of the Panthera tigris tigris subspecies that is native to the Russian Far East, Northeast China, and possibly North Korea. It once ranged throughout the Korean Peninsula, north China, Russian Far East, and eastern Mongolia.', '2022-05-04 18:30:00'),
(6, 'Tiger', 12305, 'FN-345', 'Indochinese Tiger', '37b3f2f8b979f990fbe8bbf02fb87ddb1596609488.jpg', 'The Indochinese tiger is a tiger from a specific population of the Panthera tigris tigris subspecies that is native to Southeast Asia. This population occurs in Myanmar, Thailand, Laos, Vietnam, Cambodia and southwestern China.', '2022-05-04 18:30:00'),
(7, 'Bear', 12307, 'FN-0123', 'Sloth Bear', 'efc1a80c391be252d7d777a437f868701596611141.jpg', 'The sloth bear (Melursus ursinus) is a myrmecophagous bear species native to the Indian subcontinent. It feeds on fruits, ants and termites. It is listed as Vulnerable on the IUCN Red List, mainly because of habitat loss and degradation.', '2022-05-04 18:30:00'),
(8, 'Bear', 12308, 'FN-090', 'Sun Bear', '6c09a06117fd4daa8fd74f6d1560d6a01596609406.jpg', 'The sun bear (Helarctos malayanus) is a species in the family Ursidae occurring in the tropical forests of Southeast Asia. It is the smallest bear, standing nearly 70 centimetres (28 inches) at the shoulder and weighing 25–65 kilograms (55–143 pounds). It is stockily built, with large paws, strongly curved claws, small rounded ears and a short snout. The fur is generally jet-black, but can vary from grey to red. Sun bears get their name from the characteristic orange to cream coloured chest patch. Its unique morphology—inward-turned front feet, flattened chest, powerful forelimbs with large claws—suggests adaptations for climbing.', '2022-05-04 18:30:00'),
(10, 'wild king', 1666, 'FN-100', 'wild cat', 'f015777eebefced3e397fefe3014a8391675322049.jpg', 'it is a lion not wild cat', '2023-02-02 09:57:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invest_type`
--
ALTER TABLE `invest_type`
  ADD PRIMARY KEY (`i_no`);

--
-- Indexes for table `loan_type`
--
ALTER TABLE `loan_type`
  ADD PRIMARY KEY (`l_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`,`pass`);

--
-- Indexes for table `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblanimal`
--
ALTER TABLE `tblanimal`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
