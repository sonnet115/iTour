-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 01:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itour`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `name` varchar(100) NOT NULL,
  `price` varchar(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`name`, `price`, `img`, `pid`, `serial`) VALUES
('Para Gliding', '1500', '60384-640x360-mobile-phone-640.jpg', 'Cox-sBazar2182', 1),
('Caving', '1500', '41j-jPAFMqL.jpg', 'Cox-sBazar2182', 2),
('Para Gliding', '1500', '60384-640x360-mobile-phone-640.jpg', 'Cox-sBazar6076', 3),
('Trekking', '2000', 'a1.jpg', 'Bandarban1709', 4),
('Para Gliding', '1500', 'a2.jpg', 'Bandarban1709', 5);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('sonnet', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `continent` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`name`, `username`, `password`, `email`, `class`, `country`, `continent`) VALUES
('Blue Moon', 'sonnet116', '123', 'apukbd@gmail.com', 'Medium', 'Bangladesh', 'Asia');

-- --------------------------------------------------------

--
-- Table structure for table `hotelbranch`
--

CREATE TABLE `hotelbranch` (
  `username` varchar(40) NOT NULL,
  `website` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelbranch`
--

INSERT INTO `hotelbranch` (`username`, `website`, `img`, `pid`, `serial`) VALUES
('sonnet116', 'https://www.tripadvisor.com/', 'h2.jpg', 'Bandarban1709', 4),
('sonnet116', 'https://www.tripadvisor.com/', 'h1.jpg', 'Bandarban1709', 5);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `name` varchar(100) NOT NULL,
  `dis` varchar(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`name`, `dis`, `img`, `pid`, `serial`) VALUES
('MD. AYUB ALI', '20', '60384-640x360-mobile-phone-640.jpg', 'Cox-sBazar6076', 1),
('Nilachol', '26', 'i2.jpg', 'Bandarban1709', 2),
('Tinap Saitar', '100', 'i3.jpg', 'Bandarban1709', 3);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `name` varchar(100) NOT NULL,
  `continent` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`name`, `continent`, `country`, `type`, `img`, `pid`) VALUES
('Bandarban', 'Asia', 'Bangladesh', 'Mountain', '1.jpg', 'Bandarban1709'),
('Cox-s Bazar', 'Africa', 'Bangladesh', 'Mountain', '41j-jPAFMqL.jpg', 'Cox-sBazar1102'),
('Cox-s Bazar', 'Africa', 'Nepal', 'Sea Beach', '23768876_741549239389404_686954785_o1.jpg', 'Cox-sBazar1104'),
('Cox-s Bazar', 'Africa', 'Bangladesh', 'Mountain', '', 'Cox-sBazar2182'),
('Cox-s Bazar', 'Africa', 'Bangladesh', 'Mountain', '41j-jPAFMqL2.jpg', 'Cox-sBazar4053'),
('Cox-s Bazar', 'Africa', 'Bangladesh', 'Mountain', '', 'Cox-sBazar6076'),
('Cox-s Bazar', 'Africa', 'Nepal', 'Sea Beach', '23768876_741549239389404_686954785_o.jpg', 'Cox-sBazar6212'),
('Cox-s Bazar', 'Africa', 'Bangladesh', 'Mountain', '41j-jPAFMqL3.jpg', 'Cox-sBazar7464'),
('Cox-s Bazar', 'Africa', 'Bangladesh', 'Mountain', '41j-jPAFMqL1.jpg', 'Cox-sBazar9960'),
('Nilachol', 'Europe', 'Vutan', 'Historical', '23435292_1550175595069721_1256867686_n3.jpg', 'Nilachol8345');

-- --------------------------------------------------------

--
-- Table structure for table `traveller`
--

CREATE TABLE `traveller` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traveller`
--

INSERT INTO `traveller` (`fname`, `lname`, `username`, `password`, `email`, `country`) VALUES
('', '', '', '', '', 'Your Country'),
('MD. AYUB ALI', 'MD. AYUB ALI', 'sonnet115', '12345', 'apukbd@gmail.com', 'Bangladesh'),
('MD. AYUB ALI', 'MD. AYUB ALI', 'sonnet116', '1234', 'apukbd@gmail.com', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `hotelbranch`
--
ALTER TABLE `hotelbranch`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `traveller`
--
ALTER TABLE `traveller`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hotelbranch`
--
ALTER TABLE `hotelbranch`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
