-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 01:59 PM
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
-- Database: `dynamic_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` bigint(20) NOT NULL,
  `cover_image_url` varchar(255) NOT NULL,
  `main_title_of_page` varchar(255) NOT NULL,
  `subtitle_of_page` varchar(255) NOT NULL,
  `something_about_you` varchar(255) NOT NULL,
  `your_telephone_number` int(10) NOT NULL,
  `location` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `desc_service` varchar(1000) NOT NULL,
  `image_url_two` varchar(255) NOT NULL,
  `desc_service_two` varchar(1000) NOT NULL,
  `image_url_three` varchar(255) NOT NULL,
  `desc_service_three` varchar(1000) NOT NULL,
  `desc_company` varchar(1000) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `cover_image_url`, `main_title_of_page`, `subtitle_of_page`, `something_about_you`, `your_telephone_number`, `location`, `services`, `image_url`, `desc_service`, `image_url_two`, `desc_service_two`, `image_url_three`, `desc_service_three`, `desc_company`, `linkedin`, `facebook`, `twitter`, `google_plus`) VALUES
(54, 'https://images.unsplash.com/photo-1531973576160-7125cd663d86?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'Hello Company', 'Hello again', 'something about me', 2147483647, 'Chicago', 'products', 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'fufahusufasuhfasuhoafsuafsuafsuasfhufasuhfasuhguehuewiogehiiweog', 'https://images.unsplash.com/photo-1712926362714-97ab56bd078a?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'as80hyyu8afsfhaosuioafs8uiusafu90fas9u0asf', 'https://plus.unsplash.com/premium_photo-1706807135769-d7139dbe357b?q=80&w=1915&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'safhijo0hafshiouafs9fas9uasfu90afsu90fas', 'i0afhsh8fas8y9afsy8afsy8afsy89afsy89afsy8', 'https://www.linkedin.com/', 'https://www.facebook.com/groups/326847685817052', 'https://twitter.com/?lang=en', 'https://www.google.com/?&bih=703&biw=1536&rlz=1C1BNSD_enMK1012MK1012&hl=en');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
