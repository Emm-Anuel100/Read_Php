-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 08:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `callfromdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `callall`
--

CREATE TABLE `callall` (
  `ID` int(255) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `organic` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `product1` varchar(255) NOT NULL,
  `product2` varchar(255) NOT NULL,
  `product3` varchar(255) NOT NULL,
  `product4` varchar(255) NOT NULL,
  `product5` varchar(255) NOT NULL,
  `product6` varchar(255) NOT NULL,
  `product7` varchar(255) NOT NULL,
  `product8` varchar(255) NOT NULL,
  `categories1` varchar(255) NOT NULL,
  `categories2` varchar(255) NOT NULL,
  `categories3` varchar(255) NOT NULL,
  `categories4` varchar(255) NOT NULL,
  `client1` varchar(255) NOT NULL,
  `client2` varchar(255) NOT NULL,
  `client3` varchar(255) NOT NULL,
  `client4` varchar(255) NOT NULL,
  `melon` varchar(255) NOT NULL,
  `chicken` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `nav1` varchar(255) NOT NULL,
  `nav2` varchar(255) NOT NULL,
  `nav3` varchar(255) NOT NULL,
  `nav4` varchar(255) NOT NULL,
  `nav5` varchar(255) NOT NULL,
  `nav6` varchar(255) NOT NULL,
  `blog1` varchar(255) NOT NULL,
  `blog2` varchar(255) NOT NULL,
  `blog3` varchar(255) NOT NULL,
  `copy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `callall`
--

INSERT INTO `callall` (`ID`, `feature`, `organic`, `delivery`, `pay`, `product1`, `product2`, `product3`, `product4`, `product5`, `product6`, `product7`, `product8`, `categories1`, `categories2`, `categories3`, `categories4`, `client1`, `client2`, `client3`, `client4`, `melon`, `chicken`, `logo`, `nav1`, `nav2`, `nav3`, `nav4`, `nav5`, `nav6`, `blog1`, `blog2`, `blog3`, `copy`) VALUES
(2, 'Fresh Fruits And Vegetables\r\n', 'Available Here', 'We Deliver It To You Free', 'Enjoy Our Easy Payment Method', 'Fresh Orange', 'Fresh Onion', '\r\nFresh Meat', 'Fresh Cabbage', 'Fresh Potato', 'Fresh Avocado', 'Fresh Carrot', 'Green Lemon', 'Fresh Vegetables', 'Fresh Fruits', 'Dairy Products', 'Fresh Meat', 'John Deo', 'Michelle Pedro', 'William Dave', 'Jecy Carsedes', 'Watermelon', 'Chicken', 'Bizard', 'Home', 'Features', 'Products', 'Categories', 'Review', 'Blogs', 'Fresh And Organic Vegetables And Fruits for you', 'Reasons you should take enough fruits', 'Why I take enough fruits and vegetables', ' | All Rights Reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `callall`
--
ALTER TABLE `callall`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `callall`
--
ALTER TABLE `callall`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
