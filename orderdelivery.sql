-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 08:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thedumpstercrew`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdelivery`
--

CREATE TABLE `orderdelivery` (
  `id` int(100) NOT NULL,
  `productimage` text,
  `productname` text NOT NULL,
  `productprice` text NOT NULL,
  `productquantity` text NOT NULL,
  `lengthofrentalperiod` text NOT NULL,
  `customername` text NOT NULL,
  `dateofservice` text NOT NULL,
  `timeofservice` text NOT NULL,
  `pickupdate` text NOT NULL,
  `streetaddress` text NOT NULL,
  `zipcode` text NOT NULL,
  `phonenumber` text NOT NULL,
  `emailaddress` text NOT NULL,
  `total` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdelivery`
--
ALTER TABLE `orderdelivery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdelivery`
--
ALTER TABLE `orderdelivery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
