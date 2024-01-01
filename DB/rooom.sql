-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 04:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rooom`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `booking_date` varchar(25) NOT NULL,
  `booking_time` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `hairstyle` varchar(255) NOT NULL,
  `hairstyle_size` varchar(255) NOT NULL,
  `hairstyle_color` varchar(255) NOT NULL,
  `optional_services` varchar(1000) NOT NULL,
  `notes` varchar(5000) NOT NULL,
  `total_fee` decimal(6,2) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hairstyle_sizes`
--

CREATE TABLE `hairstyle_sizes` (
  `id` int(11) NOT NULL,
  `hairstyle_size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hairstyle_sizes`
--

INSERT INTO `hairstyle_sizes` (`id`, `hairstyle_size`) VALUES
(1, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `hair_colors`
--

CREATE TABLE `hair_colors` (
  `id` int(11) NOT NULL,
  `hair_color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hair_colors`
--

INSERT INTO `hair_colors` (`id`, `hair_color`) VALUES
(2, 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `optional_services`
--

CREATE TABLE `optional_services` (
  `id` int(11) NOT NULL,
  `optional_service` varchar(255) NOT NULL,
  `fee` decimal(6,2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `optional_services`
--

INSERT INTO `optional_services` (`id`, `optional_service`, `fee`, `date_created`) VALUES
(1, 'Undo', 100.00, '2024-01-01 13:15:48'),
(2, 'Expression', 50.00, '2024-01-01 13:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_category` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `parent_service` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `average_duration` tinyint(4) NOT NULL,
  `notes` varchar(10000) NOT NULL,
  `fee` decimal(6,2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_category`, `service_name`, `parent_service`, `description`, `status`, `average_duration`, `notes`, `fee`, `date_created`) VALUES
(15, 'Hairdresser', 'Knotless Braids', 'None', 'Test Desc', 'Published', 5, 'Test Notes', 500.00, '2024-01-01 09:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`id`, `category`, `date_created`) VALUES
(1, 'Hairdresser', '2023-12-30 10:48:04'),
(2, 'Nail', '2023-12-30 10:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `working_hours`
--

CREATE TABLE `working_hours` (
  `id` int(11) NOT NULL,
  `day` varchar(25) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `working_hours`
--

INSERT INTO `working_hours` (`id`, `day`, `start`, `end`) VALUES
(3, 'Sunday', '08:00:00', '23:00:00'),
(4, 'Monday', '08:00:00', '23:00:00'),
(5, 'Tuesday', '08:00:00', '23:00:00'),
(6, 'Wednesday', '08:00:00', '23:00:00'),
(7, 'Thursday', '08:00:00', '23:00:00'),
(8, 'Friday', '08:00:00', '23:00:00'),
(9, 'Saturday', '08:00:00', '23:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hairstyle_sizes`
--
ALTER TABLE `hairstyle_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hair_colors`
--
ALTER TABLE `hair_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optional_services`
--
ALTER TABLE `optional_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hairstyle_sizes`
--
ALTER TABLE `hairstyle_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hair_colors`
--
ALTER TABLE `hair_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `optional_services`
--
ALTER TABLE `optional_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `working_hours`
--
ALTER TABLE `working_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
