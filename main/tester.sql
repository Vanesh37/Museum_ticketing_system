-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 12:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tester`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'vanesh', '*EAE7BDD12673FADD04FEA86830C26348307B130A', 'vaneshaddemal@gmail.com', '2023-03-19 11:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `num_tickets` int(11) NOT NULL,
  `ticket_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `email`, `phone`, `date`, `time`, `num_tickets`, `ticket_price`, `total_price`) VALUES
(1, 'vanesh', 'vaneshaddemal@gmail.com', '08088143383', '2023-03-17', '15:39:00', 1, '0.00', '10.00'),
(2, 'vanesh', 'vaneshaddemal@gmail.com', '08088143383', '2023-03-17', '15:42:00', 3, '10.00', '30.00'),
(3, 'vanesh', 'vaneshaddemal@gmail.com', '08088143383', '2023-03-17', '19:01:00', 3, '10.00', '30.00'),
(4, '', '', '', '0000-00-00', '00:00:00', 2, '20.00', '40.00'),
(5, 'vanesh', 'vaneshaddemal@gmail.com', '08088143383', '2023-03-17', '19:44:00', 1, '20.00', '20.00'),
(6, 'vanesh', 'vaneshaddemal@gmail.com', '08088143383', '2023-03-17', '21:57:00', 3, '10.00', '30.00'),
(7, 'after name', 'vaneshaddemal@gmail.com', '06361034213', '2023-03-17', '00:46:00', 2, '10.00', '20.00'),
(8, 'after name', 'vaneshaddemal@gmail.com', '06361034213', '2023-03-16', '23:48:00', 2, '10.00', '20.00'),
(9, 'after name', 'vaneshaddemal@gmail.com', '09898979899', '2023-03-18', '09:55:00', 4, '10.00', '40.00'),
(10, 'after name', 'vaneshaddemal@gmail.com', '9972939639', '2023-03-18', '12:40:00', 3, '10.00', '30.00'),
(11, 'shubham', 'shubham@gmail.com', '1234567890', '2023-03-18', '12:03:00', 3, '10.00', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets1`
--

CREATE TABLE `tickets1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `num_tickets` int(11) NOT NULL,
  `ticket_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets1`
--

INSERT INTO `tickets1` (`id`, `name`, `email`, `phone`, `date`, `time`, `num_tickets`, `ticket_price`, `total_price`) VALUES
(1, 'vanesh', 'vaneshaddemal@gmail.com', '08088143383', '2023-03-17', '19:51:00', 7, '20.00', '140.00'),
(2, 'vanesh', 'vaneshaddemal@gmail.com', '08088143383', '2023-03-17', '21:58:00', 3, '20.00', '60.00'),
(3, 'shubham', 'shubham@gmail.com', '1234567890', '2023-03-19', '13:05:00', 4, '20.00', '80.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets1`
--
ALTER TABLE `tickets1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tickets1`
--
ALTER TABLE `tickets1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
