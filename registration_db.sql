-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 05:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `year_level` varchar(10) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `vehicle_make` varchar(255) DEFAULT NULL,
  `vehicle_model` varchar(255) DEFAULT NULL,
  `vehicle_year` varchar(255) DEFAULT NULL,
  `vehicle_color` varchar(255) DEFAULT NULL,
  `plate_number` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `purok` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_number`, `password`, `last_name`, `first_name`, `middle_name`, `sex`, `course`, `year_level`, `vehicle_type`, `vehicle_make`, `vehicle_model`, `vehicle_year`, `vehicle_color`, `plate_number`, `house_no`, `street`, `province`, `municipality`, `barangay`, `purok`) VALUES
(2, '22-1-1-2512', 'wownaman', 'Mendoza', 'John Ronald', 'Domingo', 'Male', 'BSIT', '3rdYr', '4wheels', 'Yamaha', 'Mio Gravis', '2023', 'Matte Red', '347RDO', 'na', 'na', 'Zambalaes', 'Cabangan', 'Laoag', '1'),
(3, '01-23-4567', 'wowhaha', 'Pitou', 'King', 'Nefer', 'Female', 'BSCS', '4thYr', '4wheels', 'BMW', 'i8', '2024', 'White', '123ABC', 'na', 'na', 'Zambalaes', 'Iba', 'Palanginan', 'na'),
(4, '01-23-4567', 'wowhaha', 'Pitou', 'King', 'Nefer', 'Female', 'BSCS', '4thYr', '4wheels', 'BMW', 'i8', '2024', 'White', '123ABC', 'na', 'na', 'Zambalaes', 'Iba', 'Palanginan', 'na'),
(5, '22-1-1-2512', 'nicelopit', 'hahaha', 'sobrang', 'nakakatawa', 'Male', 'BSIT', '3rdYr', '4wheels', 'Nissan', 'GTR', '2025', 'Black', '456DEF', 'dito lang', 'diyan lang', 'doon lang', 'saan ba? ', 'ah diyan', 'oo diyan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
