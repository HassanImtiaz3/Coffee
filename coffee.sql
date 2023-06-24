-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 02:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `firstname`
--

CREATE TABLE `firstname` (
  `fId` int(11) NOT NULL,
  `fName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `firstname`
--

INSERT INTO `firstname` (`fId`, `fName`) VALUES
(7, 'Hassan');

-- --------------------------------------------------------

--
-- Table structure for table `itemprice`
--

CREATE TABLE `itemprice` (
  `priceId` int(11) NOT NULL,
  `itemPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `itemprice`
--

INSERT INTO `itemprice` (`priceId`, `itemPrice`) VALUES
(39, 550),
(40, 250),
(41, 450),
(42, 850),
(43, 1250),
(44, 1350);

-- --------------------------------------------------------

--
-- Table structure for table `itemqty`
--

CREATE TABLE `itemqty` (
  `qtyId` int(11) NOT NULL,
  `itemQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `itemqty`
--

INSERT INTO `itemqty` (`qtyId`, `itemQuantity`) VALUES
(7, 1),
(8, 2),
(9, 3),
(10, 4),
(11, 5),
(12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `lastname`
--

CREATE TABLE `lastname` (
  `lId` int(11) NOT NULL,
  `lName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lastname`
--

INSERT INTO `lastname` (`lId`, `lName`) VALUES
(4, 'Imtiaz');

-- --------------------------------------------------------

--
-- Table structure for table `menuitem`
--

CREATE TABLE `menuitem` (
  `itemId` int(11) NOT NULL,
  `itemName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menuitem`
--

INSERT INTO `menuitem` (`itemId`, `itemName`) VALUES
(7, 'Coffee'),
(8, 'Tea'),
(9, 'Organic Tea'),
(10, 'Mocca Latte'),
(11, 'Espresso'),
(12, 'Americano');

-- --------------------------------------------------------

--
-- Table structure for table `menutotalamount`
--

CREATE TABLE `menutotalamount` (
  `totalAmountId` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menutotalamount`
--

INSERT INTO `menutotalamount` (`totalAmountId`, `totalAmount`) VALUES
(7, 550),
(8, 500),
(9, 1350),
(10, 3400),
(11, 6250),
(12, 8100);

-- --------------------------------------------------------

--
-- Table structure for table `tablenumber`
--

CREATE TABLE `tablenumber` (
  `tableId` int(11) NOT NULL,
  `tableNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tablenumber`
--

INSERT INTO `tablenumber` (`tableId`, `tableNumber`) VALUES
(5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firstname`
--
ALTER TABLE `firstname`
  ADD PRIMARY KEY (`fId`);

--
-- Indexes for table `itemprice`
--
ALTER TABLE `itemprice`
  ADD PRIMARY KEY (`priceId`);

--
-- Indexes for table `itemqty`
--
ALTER TABLE `itemqty`
  ADD PRIMARY KEY (`qtyId`);

--
-- Indexes for table `lastname`
--
ALTER TABLE `lastname`
  ADD PRIMARY KEY (`lId`);

--
-- Indexes for table `menuitem`
--
ALTER TABLE `menuitem`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `menutotalamount`
--
ALTER TABLE `menutotalamount`
  ADD PRIMARY KEY (`totalAmountId`);

--
-- Indexes for table `tablenumber`
--
ALTER TABLE `tablenumber`
  ADD PRIMARY KEY (`tableId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firstname`
--
ALTER TABLE `firstname`
  MODIFY `fId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `itemprice`
--
ALTER TABLE `itemprice`
  MODIFY `priceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `itemqty`
--
ALTER TABLE `itemqty`
  MODIFY `qtyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lastname`
--
ALTER TABLE `lastname`
  MODIFY `lId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menuitem`
--
ALTER TABLE `menuitem`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menutotalamount`
--
ALTER TABLE `menutotalamount`
  MODIFY `totalAmountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tablenumber`
--
ALTER TABLE `tablenumber`
  MODIFY `tableId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
