-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 06:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `mobile`, `message`) VALUES
(3, 'keerthi', 'ke', 'keerthihan05@gmail.com', '0778809012', 'hello'),
(4, 'keerthi', 'ke', 'keerthihan05@gmail.com', '0778809012', 'hi'),
(6, 'thiru', 'ke', 'keerthihan05@gmail.com', '0778809012', 'loooo'),
(7, 'mathu', 'ke', 'kunalnithis04@gmail.com', '0750206575', 'hiii'),
(8, 'keerthi', 'lkjhg', 'frfr@gmail.com', '07654416325', 'hello'),
(9, 'vithu', 'shan', 'keerthihan05@gmail.com', '0765441632', 'i am ok'),
(10, 'vithus', 'shan', 'keerthihan05@gmail.com', '0765441632', 'okkkkkk'),
(11, 'vithus', 'shan', 'keerthihan05@gmail.com', '0765441632', 'okkkkkk'),
(13, 'mathu', 'ke', 'kunalnithis04@gmail.com', '0750206575', 'hiii'),
(14, 'mathu', 'ke', 'kunalnithis04@gmail.com', '0750206575', 'im mathu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
