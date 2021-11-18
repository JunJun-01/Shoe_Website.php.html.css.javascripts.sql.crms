-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 09:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandID` int(50) NOT NULL,
  `Brand_Name` varchar(50) NOT NULL,
  `Brand_Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandID`, `Brand_Name`, `Brand_Number`) VALUES
(1, 'Nike', 1800806453),
(2, 'Adidas', 1700805133),
(3, 'Asics', 1600201134);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(10) NOT NULL,
  `shname` varchar(255) DEFAULT NULL,
  `shprice` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `shname`, `shprice`, `uname`) VALUES
(1, 'Adidas ACE 16', '300', 'ming'),
(2, 'Nike Kybrid S2', '250', 'ming'),
(3, 'Nike Air Max 1', '500', 'ming');

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `ShoeID` int(50) NOT NULL,
  `ShoeName` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `BrandID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`ShoeID`, `ShoeName`, `Price`, `Gender`, `BrandName`, `BrandID`) VALUES
(1, 'Nike Air Max 1', '500', 'Men', 'Nike', 1),
(9, 'Adidas ACE 16', '300', 'Woman', 'Adidas', 2),
(10, 'Adidas Stan Smith', '250', 'Men', 'Adidas', 2),
(11, 'Adidas Atric', '340', 'Men', 'Adidas', 2),
(12, 'Adidas EQT', '600', 'Men', 'Adidas', 2),
(13, 'Adidas Yeezy', '300', 'Woman', 'Adidas', 2),
(14, 'Asics GEL', '300', 'Men', 'Asics', 3),
(15, 'Asics GT-Cool', '340', 'Men', 'Asics', 3),
(16, 'Asics GT-II', '360', 'Woman', 'Asics', 3),
(17, 'Air Force 1 High', '190', 'Men', 'Nike', 1),
(18, 'Nike Flat Red', '230', 'Men', 'Nike', 1),
(19, 'Nike Kobe 9', '600', 'Men', 'Nike', 1),
(20, 'Nike Kybrid S2', '250', 'Woman', 'Nike', 1),
(21, 'Nike Kyrie 4', '230', 'Men', 'Nike', 1),
(22, 'Nike Kyrie 6', '230', 'Men', 'Nike', 1),
(23, 'Nike Zoom Kobe 6', '530', 'Men', 'Nike', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'ming', 'mingxuan8833@gmail.com', 'b4e6bcea9caf796b193be33fbb2c1fa5', 'user'),
(2, 'xuan', 'mingxuan3388@gmail.com', 'b4e6bcea9caf796b193be33fbb2c1fa5', 'admin'),
(3, 'mingxuan', 'mingxuan666@gmail.com', 'b4e6bcea9caf796b193be33fbb2c1fa5', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandID`),
  ADD KEY `Brand_Name` (`Brand_Name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`ShoeID`),
  ADD KEY `BrandID` (`BrandID`),
  ADD KEY `BrandName` (`BrandName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `ShoeID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shoe`
--
ALTER TABLE `shoe`
  ADD CONSTRAINT `BrandID_fk` FOREIGN KEY (`BrandID`) REFERENCES `brand` (`BrandID`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
