-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 08:06 AM
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
  `status` varchar(50) NOT NULL DEFAULT 'Unallocated',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `first_name`, `surname`, `email`, `booking_date`, `booking_time`, `phone`, `hairstyle`, `hairstyle_size`, `hairstyle_color`, `optional_services`, `notes`, `total_fee`, `status`, `date_created`) VALUES
(8, '', 'Mapindu', 'rtmapindu@outlook.com', '1/30/2024', '9:00am', '235848769', 'Knotless', 'Regular', 'Knotless', 'Undo', 'Test Booking', NULL, 'Unallocated', '2024-01-01 17:07:50');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2024-01-02-072945', 'App\\Database\\Migrations\\Users', 'default', 'App', 1704181664, 1),
(3, '2024-01-02-075415', 'App\\Database\\Migrations\\UserTypes', 'default', 'App', 1704182180, 2);

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
(1, 'Undo', 100.00, '2024-01-01 13:15:48');

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
(16, 'Hairstyles', 'Braids', 'None', 'All Braid Services', 'Published', 1, 'The price we give covers everything. No extra hidden costs. The hairpiece used is One Million. Xpression can be arranged at R50 extra on the total price.', 550.00, '2024-01-03 07:45:01');

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
(4, 'Nails', '2024-01-03 07:15:29'),
(5, 'Hairstyles', '2024-01-03 07:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `surname`, `username`, `password`, `user_type`, `role_id`, `status`, `date_created`) VALUES
(7, 'Spartan', 'Fx', 'Spartan Fx', NULL, 'System Administrator', NULL, 'Active', '2024-01-02 16:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `user_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `user_type`) VALUES
(4, 'System Administrator');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hairstyle_sizes`
--
ALTER TABLE `hairstyle_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hair_colors`
--
ALTER TABLE `hair_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `optional_services`
--
ALTER TABLE `optional_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `working_hours`
--
ALTER TABLE `working_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
