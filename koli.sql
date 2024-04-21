-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 10:41 PM
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
-- Database: `koli`
--

-- --------------------------------------------------------

--
-- Table structure for table `kola`
--

CREATE TABLE `kola` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memebers`
--

CREATE TABLE `memebers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memebers`
--

INSERT INTO `memebers` (`id`, `username`, `password`, `role`) VALUES
(1, 'joce', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vehicle_model`, `vehicle_type`, `fuel_type`) VALUES
(1, 'FordFocus', 'Sadane', 'Disel'),
(2, 'yugo', 'fast', 'gas');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleregistration`
--

CREATE TABLE `vehicleregistration` (
  `id` int(11) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `vehicle_chassis_number` varchar(255) NOT NULL,
  `vehicle_production_year` date NOT NULL,
  `registration_number` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `registration_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicleregistration`
--

INSERT INTO `vehicleregistration` (`id`, `vehicle_model`, `vehicle_type`, `vehicle_chassis_number`, `vehicle_production_year`, `registration_number`, `fuel_type`, `registration_to`) VALUES
(2, 'Ferari', 'sportscar', '555AAA', '0000-00-00', '[value-5]', '[value-6]', '0000-00-00'),
(3, 'Lambo', 'Sports', '125FFF', '0000-00-00', '[value-5]', '[value-6]', '0000-00-00'),
(9, '2', 'Peugeot', '123312321', '2024-04-25', '2', '2024-04-26', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kola`
--
ALTER TABLE `kola`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `memebers`
--
ALTER TABLE `memebers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicleregistration`
--
ALTER TABLE `vehicleregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kola`
--
ALTER TABLE `kola`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memebers`
--
ALTER TABLE `memebers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicleregistration`
--
ALTER TABLE `vehicleregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
