-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 05:59 AM
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
-- Database: `adminportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_ab`
--

CREATE TABLE `main_ab` (
  `id` int(11) NOT NULL,
  `interests` text NOT NULL,
  `education` text NOT NULL,
  `information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_ab`
--

INSERT INTO `main_ab` (`id`, `interests`, `education`, `information`) VALUES
(1, 'Painting Overtinking', 'Taga Department of Sakit ng Ulo', 'lorem ipsum dlor nmalnsd kp lorem ipsum dlor nmalnsd kp lorem ipsum dlor nmalnsd kp lorem ipsum dlor nmalnsd kp lorem ipsum dlor nmalnsd kp lorem ipsum dlor nmalnsd lorem ipsum dlor nmalnsd kp lorem ipsum dlor nmalnsd kp lorem ipsum dlor nmalnsd kp kp');

-- --------------------------------------------------------

--
-- Table structure for table `main_prof`
--

CREATE TABLE `main_prof` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_prof`
--

INSERT INTO `main_prof` (`id`, `name`, `label`) VALUES
(1, 'Nephyy Hi', 'Peyn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_ab`
--
ALTER TABLE `main_ab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_prof`
--
ALTER TABLE `main_prof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_ab`
--
ALTER TABLE `main_ab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_prof`
--
ALTER TABLE `main_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
