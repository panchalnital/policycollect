-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 07:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpolicy`
--

-- --------------------------------------------------------

--
-- Table structure for table `policys`
--

CREATE TABLE `policys` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `policy_number` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `premium` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policys`
--

INSERT INTO `policys` (`id`, `first_name`, `last_name`, `policy_number`, `start_date`, `end_date`, `premium`) VALUES
(1, 'Rahul', 'Patel', '1235656', '2022-12-09 00:00:00', '2022-12-30 00:00:00', '20000'),
(2, 'Mehul', 'Rana', '1235657', '2022-12-31 19:04:42', '2023-02-17 19:04:42', '50000'),
(9, 'rahul', 'raju', '45455556', '2022-12-26 00:00:00', '2022-12-24 00:00:00', '3446436'),
(11, 'Mitesh', 'Patel', '500000', '2022-12-17 00:00:00', '2022-12-30 00:00:00', '656544');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `policys`
--
ALTER TABLE `policys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `policys`
--
ALTER TABLE `policys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
