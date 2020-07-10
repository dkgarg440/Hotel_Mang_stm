-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2019 at 05:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_m`
--

CREATE TABLE `app_m` (
  `app_m_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_m`
--

INSERT INTO `app_m` (`app_m_id`, `name`, `email`, `degree`, `City`) VALUES
(1, 'Saurabh Rathore', 'sauru2341@yahoo.com', 'MBA', 'Bikaner');

-- --------------------------------------------------------

--
-- Table structure for table `app_w`
--

CREATE TABLE `app_w` (
  `app_w_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `c_name` varchar(20) DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `date`, `c_name`, `amount`) VALUES
(1, '2019-11-12 00:00:00', 'Rahul', 500),
(2, '2019-11-12 15:59:06', 'deepak', 600),
(5, '2019-11-12 15:59:37', 'harsh', 718),
(7, '2019-11-17 20:50:26', 'khimraj', 422),
(9, '2019-11-17 20:50:47', 'akshit', 852),
(10, '2019-11-17 20:50:47', 'dixit', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(20) DEFAULT NULL,
  `no_of_tables` int(11) DEFAULT NULL,
  `book_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `cust_name`, `no_of_tables`, `book_time`) VALUES
(1, 'deepak', 2, '2019-11-17 20:17:38'),
(2, 'rahul', 1, '2019-11-17 20:24:47'),
(7, 'atulya', 3, '2019-11-17 20:47:37'),
(8, 'Baba', 2, '2019-11-17 20:47:57'),
(10, 'Khimraj', 1, '2019-11-17 20:48:50'),
(11, 'HImanshu', 2, '2019-11-17 20:48:50'),
(13, 'Rahul', 2, '2019-11-18 13:21:06'),
(15, 'Rahul', 2, '2019-11-18 16:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `pasword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `name`, `email`, `pasword`) VALUES
('', '', '', 'tghg'),
('atulya', 'Atulya Raj', 'atulya567@gmail.com', 'atul123'),
('deepak', 'Deepak Kumar', 'iamdipu234@gmail.com', 'deepak45'),
('harsh', 'Harsh roy', 'iamroy67@outlook.com', 'efrvgyugweuih'),
('Khimraj', 'Khimraj Suthar', 'khimraj543@gmail.com', 'khimu123'),
('Rahul', 'Rahul Jain', 'IAMRAHUL1306@GMAIL.COM', 'Rahul@123');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `name`, `price`) VALUES
(3, 'tawa roti', 14),
(4, 'dal tadka', 90),
(5, 'Aloo Paratha', 60),
(6, 'Matar Paneer', 180),
(7, 'Kadhai Paneer', 150),
(8, 'Shahi Paneer', 150),
(9, 'Lacha Paratha', 60),
(10, 'Tandoori Roti', 20),
(11, 'Butter Naan', 50),
(12, 'Stuff Naan', 55),
(13, 'Cold Coffee', 50),
(14, 'Milk Shake', 40),
(15, 'Veg Pasta', 140),
(16, 'Arabita Pasta', 200),
(17, 'Panner Onion Pizza 7\'\'', 220),
(18, 'Paneer Onion Pizza 9\'\'', 450),
(19, 'paneer tikka', 100);

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE `Manager` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Salary` int(11) NOT NULL DEFAULT 50000
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`id`, `name`, `email`, `Salary`) VALUES
(1, 'Raj Jain', 'hero@yahoo.com', 50000),
(2, 'Arnab Goswami', 'arna1234@hotmail.com', 55000),
(7, 'Rohit nagar', 'ianrohit345@gmail.com', 10000),
(9, 'Rahul Jain', 'insan@gmail.com', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `name` varchar(25) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `pasword` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`name`, `username`, `email`, `pasword`) VALUES
('Rahul Jain', 'Rahul1331', 'meena@gmail.com', 'ertyuio'),
('Raj Jain', 'Rahul1332', 'rahul312@hotmail.com', 'wdfgf');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL DEFAULT 1,
  `Busy` int(11) NOT NULL,
  `Empty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `Busy`, `Empty`) VALUES
(1, 22, 18);

-- --------------------------------------------------------

--
-- Table structure for table `Waiter`
--

CREATE TABLE `Waiter` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Salary` int(11) NOT NULL DEFAULT 10000
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Waiter`
--

INSERT INTO `Waiter` (`id`, `m_id`, `name`, `email`, `Salary`) VALUES
(2, 1, 'Ram', 'hero@gmail.com', 55000),
(3, 1, 'Ramlal Bairwa', 'ramu@outlook.com', 11000),
(6, 2, 'vinay mehra', 'vinayak@gmail.com', 11000),
(7, 2, 'Rahul Jain', 'rjhero@outlook.com', 11000),
(8, 7, 'Khimraj', 'iamkhimu@gmail.com', 11000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_m`
--
ALTER TABLE `app_m`
  ADD PRIMARY KEY (`app_m_id`);

--
-- Indexes for table `app_w`
--
ALTER TABLE `app_w`
  ADD PRIMARY KEY (`app_w_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`Busy`);

--
-- Indexes for table `Waiter`
--
ALTER TABLE `Waiter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_id` (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_m`
--
ALTER TABLE `app_m`
  MODIFY `app_m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `app_w`
--
ALTER TABLE `app_w`
  MODIFY `app_w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Manager`
--
ALTER TABLE `Manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Waiter`
--
ALTER TABLE `Waiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Waiter`
--
ALTER TABLE `Waiter`
  ADD CONSTRAINT `Waiter_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `Manager` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
