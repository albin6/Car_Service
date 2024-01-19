-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 09:21 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `User_id` int(10) NOT NULL,
  `Complaint` varchar(100) NOT NULL,
  `Reply` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Id`, `User_id`, `Complaint`, `Reply`) VALUES
(5, 2, 'my complaint', 'solve my complaint');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `User_id` int(10) NOT NULL,
  `Complaint` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `User_id`, `Complaint`) VALUES
(1, 2, 'my feedback');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`, `Usertype`, `Status`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'Approve'),
(2, 'sh@gmail.com', 'shefi1', 'Staff', 'Approve'),
(4, 'hm@gmail.com', 'hima12', 'Staff', 'Approve'),
(5, 'n@gmail.com', 'nilans', 'Staff', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Uid` varchar(100) NOT NULL,
  `Pid` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Quatity` varchar(100) NOT NULL,
  `Total` varchar(500) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `Cardno` varchar(100) NOT NULL,
  `Cvv` varchar(100) NOT NULL,
  `Expirydate` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Uid`, `Pid`, `Price`, `Quatity`, `Total`, `cardname`, `Cardno`, `Cvv`, `Expirydate`) VALUES
(2, '2', '1', '230', '3', '690', 'anu', '1234561234565', '678', '12/34'),
(3, '2', '2', '3500', '1', '3500', 'Vinu', '8765654345676', '765', '04/30'),
(4, '2', '2', '3500', '2', '7000', 'Sana', '9876567689', '987', '07/27'),
(5, '3', '2', '3500', '20', '70000', 'Sethu', '1234567812342345', '789', '12/28'),
(6, '3', '2', '3500', '30', '105000', 'Vinuss', '1234567890123456', '123', '12/2029');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) NOT NULL,
  `Des` text NOT NULL,
  `Features` text NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Quantity` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Des`, `Features`, `Price`, `Quantity`, `Image`) VALUES
(1, 'Products1', 'Products1', 'Products1', '230', '60', 'products/Tulips.jpg'),
(2, 'Camera', 'Camera1', 'Camera2', '3500', '50', 'products/Koala.jpg'),
(3, 'Product 2', 'Product 2', 'Product 2', '1600', '100', 'products/w1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_reg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Phno` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Place` text NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Status` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`Id`, `Name`, `Email`, `Phno`, `Address`, `Place`, `Password`, `Status`) VALUES
(2, 'Sana Sanal S', 's@gmail.com', '9876789111', 'sana villas', 'Kottayam', 'sana', 'Approve'),
(3, 'Sethu', 'st@gmail.com', '98767898', 'sethu villa', 'Konni', 'sethu', 'Approve'),
(4, 'vipin', 'v@gmail.com', '9876789000', 'vipin villa', 'Kollam', 'vipin', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE IF NOT EXISTS `tbl_request` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Userid` varchar(500) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `Request` text NOT NULL,
  `Status` varchar(500) NOT NULL,
  `Employee` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`Id`, `Userid`, `Title`, `Request`, `Status`, `Employee`) VALUES
(3, '2', 'service req', 'service request', 'Completed', '4'),
(4, '2', 'request', 'another request', 'Pending', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Pin` varchar(500) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`Id`, `Name`, `Address`, `Location`, `Pin`, `Phone`, `Email`, `Image`, `Password`) VALUES
(1, 'Shefi', 'Sh villa', 'konni', '689876', '9876789878', 'sh@gmail.com', 'worker/Chrysanthemum.jpg', 'shefi1'),
(3, 'Hima Haridas', 'H villa', 'konni', '689767', '9876789333', 'hm@gmail.com', 'worker/Hydrangeas.jpg', 'hima12'),
(4, 'nila', 'nila villa', 'konni', '689692', '9876789878', 'n@gmail.com', 'worker/Chrysanthemum.jpg', 'nilans');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
