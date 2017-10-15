-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 08:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byu_i`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `asset_tag` int(6) NOT NULL,
  `model` varchar(20) NOT NULL,
  `building` varchar(4) NOT NULL,
  `room` varchar(5) NOT NULL,
  `year` year(4) NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`asset_tag`, `model`, `building`, `room`, `year`, `last_update`) VALUES
(112165, 'HP', 'AUS', '253', 2013, '2017-05-24'),
(123421, 'DELL', 'STC', '234', 2017, '2017-05-25'),
(123456, 'Dell', 'ROM', '234', 2014, '2017-05-24'),
(143165, 'Dell', 'BEN', '253', 2017, '2017-05-24'),
(145876, 'DELL', 'MCK', '159', 2017, '2017-05-25'),
(172983, 'Dell 7050 Micro', 'MCK', '340', 2017, '2017-05-25'),
(182365, 'HP', 'AUS', '253', 2007, '2017-05-24'),
(183265, 'Dell', 'BEN', '253', 2015, '2017-05-24'),
(184365, 'Dell', 'AUS', '253', 2014, '2017-05-24'),
(184525, 'lap top', 'MCK', '253', 2007, '2017-05-24'),
(184565, 'Dell', 'MCK', '253', 2007, '2017-05-24'),
(185165, 'HP', 'AUS', '253', 2007, '2017-05-24'),
(185875, 'HP', 'AUS', '253', 2007, '2017-05-24'),
(186565, 'HP', 'SPO', '253', 2007, '2017-05-24'),
(187665, 'HP', 'AUS', '253', 2007, '2017-05-24'),
(345222, 'ASUS', 'STC', '234G', 2016, '2017-05-25'),
(432321, 'DELL', 'STC', '159', 2014, '2017-05-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`asset_tag`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
