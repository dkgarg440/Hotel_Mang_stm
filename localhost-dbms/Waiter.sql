-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2019 at 05:44 AM
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
-- Indexes for table `Waiter`
--
ALTER TABLE `Waiter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_id` (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
