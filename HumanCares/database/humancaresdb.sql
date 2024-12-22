-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 05:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humancaresdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coastal_cu_admin`
--

CREATE TABLE `coastal_cu_admin` (
  `CoastalCUId` int(4) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coastal_cu_admin`
--

INSERT INTO `coastal_cu_admin` (`CoastalCUId`, `user_id`, `Location`, `Date`, `Time`) VALUES
(1001, 396471585649656120, 'Bakhaw Beach, Camotes Islands, Cebu', '2023-07-31', '10:05:00'),
(1002, 396471585649656120, 'Antonia Beach, Gigantes Islands, Iloilo​', '2023-08-14', '06:00:00'),
(1003, 396471585649656120, 'Lambug Beach, Badian, Cebu​​', '2023-09-28', '05:20:00'),
(1004, 396471585649656120, 'Morong Beach, Batanes​', '2023-09-01', '16:10:00'),
(1005, 396471585649656120, 'Alegria Beach, Siargao', '2023-10-30', '07:00:00'),
(1006, 396471585649656120, 'Anguib Beach, Santa Ana, Cagayan Valley​', '2023-11-10', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `coastal_cu_user`
--

CREATE TABLE `coastal_cu_user` (
  `CoastalCUVId` int(9) NOT NULL,
  `CoastalCUId` int(4) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Activity` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MobileNo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coastal_cu_user`
--

INSERT INTO `coastal_cu_user` (`CoastalCUVId`, `CoastalCUId`, `user_id`, `Activity`, `FirstName`, `MiddleName`, `LastName`, `Address`, `MobileNo`) VALUES
(100000001, 1005, 796532674224246325, 'Coastal CleanUp', 'Missy', 'Almazan', 'Celso', 'Alangilan, Batangas City', '09123123123');

-- --------------------------------------------------------

--
-- Table structure for table `money_donations`
--

CREATE TABLE `money_donations` (
  `moneydonationID` int(6) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ModeofPayment` varchar(6) NOT NULL,
  `MobileNo` varchar(11) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `Amount` decimal(15,2) NOT NULL,
  `GivenDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money_donations`
--

INSERT INTO `money_donations` (`moneydonationID`, `user_id`, `Name`, `ModeofPayment`, `MobileNo`, `Purpose`, `Amount`, `GivenDate`) VALUES
(6600001, 7374244937, 'Missy Cooper', 'Gcash', '09123123123', 'Tree Planting', '123.00', '2023-07-14 01:43:53'),
(6600002, 796532674224246325, 'Missy Cooper', 'Gcash', '09123123123', 'Coastal Clean Up', '300.00', '2023-07-14 01:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `plant_donations`
--

CREATE TABLE `plant_donations` (
  `PlantID` int(7) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `GivenDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant_donations`
--

INSERT INTO `plant_donations` (`PlantID`, `user_id`, `Name`, `Type`, `Quantity`, `GivenDate`) VALUES
(7700001, 7374244937, 'Almaciga Trees', 'Tree', 12, '2023-07-10 07:07:46'),
(7700002, 7374244937, 'Sunflower', 'Flower plant', 45, '2023-07-10 07:08:24'),
(7700003, 7374244937, 'Ampalaya', 'Vegetable seed', 32, '2023-07-10 07:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `recycling_wastes`
--

CREATE TABLE `recycling_wastes` (
  `Id` int(8) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Quantity` int(30) NOT NULL,
  `GivenDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recycling_wastes`
--

INSERT INTO `recycling_wastes` (`Id`, `user_id`, `Name`, `Type`, `Quantity`, `GivenDate`) VALUES
(81000001, 7374244937, 'Plastic Bag', 'Plastic', 12, '2023-07-14 01:43:30'),
(81000002, 7374244937, 'Gin Bottles', 'Glass', 34, '2023-07-14 01:43:30'),
(81000003, 7374244937, 'Cellphone', 'Electronic', 5, '2023-07-14 01:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `tree_planting_admin`
--

CREATE TABLE `tree_planting_admin` (
  `TreePId` int(5) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tree_planting_admin`
--

INSERT INTO `tree_planting_admin` (`TreePId`, `user_id`, `Location`, `Date`, `Time`) VALUES
(90001, 396471585649656120, 'Kibuwa Site, Bukidnon', '2023-07-31', '04:50:00'),
(90002, 396471585649656120, 'Canitoan, Pagatpat Site, Misamis Oriental Mindoro', '2023-08-10', '06:30:00'),
(90003, 396471585649656120, 'Arayat, Pampanga', '2023-09-18', '16:00:00'),
(90004, 396471585649656120, 'Brgy Lias Kanluran, Barlig, Mt Province', '2023-10-26', '05:33:00'),
(90005, 396471585649656120, 'Kabayan, Benguet', '2023-11-21', '06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tree_planting_user`
--

CREATE TABLE `tree_planting_user` (
  `TreePVId` int(11) NOT NULL,
  `TreePId` int(5) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Activity` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MobileNo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tree_planting_user`
--

INSERT INTO `tree_planting_user` (`TreePVId`, `TreePId`, `user_id`, `Activity`, `FirstName`, `MiddleName`, `LastName`, `Address`, `MobileNo`) VALUES
(910000001, 90002, 7374244937, 'Tree Planting', 'Missy', 'Cruz', 'Solomon', 'Alangilan, Batangas City', '09123123123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 396471585649656120, 'admin', 'admin123', '2023-05-19 10:37:21'),
(2, 7374244937, 'user', 'user123', '2023-05-19 10:38:15'),
(3, 796532674224246325, 'missy', 'missy123', '2023-07-14 01:44:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coastal_cu_admin`
--
ALTER TABLE `coastal_cu_admin`
  ADD PRIMARY KEY (`CoastalCUId`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `coastal_cu_user`
--
ALTER TABLE `coastal_cu_user`
  ADD PRIMARY KEY (`CoastalCUVId`),
  ADD KEY `CoastalCUId` (`CoastalCUId`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `money_donations`
--
ALTER TABLE `money_donations`
  ADD PRIMARY KEY (`moneydonationID`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `plant_donations`
--
ALTER TABLE `plant_donations`
  ADD PRIMARY KEY (`PlantID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `recycling_wastes`
--
ALTER TABLE `recycling_wastes`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tree_planting_admin`
--
ALTER TABLE `tree_planting_admin`
  ADD PRIMARY KEY (`TreePId`);

--
-- Indexes for table `tree_planting_user`
--
ALTER TABLE `tree_planting_user`
  ADD PRIMARY KEY (`TreePVId`),
  ADD KEY `TreePId` (`TreePId`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coastal_cu_admin`
--
ALTER TABLE `coastal_cu_admin`
  MODIFY `CoastalCUId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `coastal_cu_user`
--
ALTER TABLE `coastal_cu_user`
  MODIFY `CoastalCUVId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000002;

--
-- AUTO_INCREMENT for table `money_donations`
--
ALTER TABLE `money_donations`
  MODIFY `moneydonationID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6600003;

--
-- AUTO_INCREMENT for table `plant_donations`
--
ALTER TABLE `plant_donations`
  MODIFY `PlantID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7700004;

--
-- AUTO_INCREMENT for table `recycling_wastes`
--
ALTER TABLE `recycling_wastes`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81000004;

--
-- AUTO_INCREMENT for table `tree_planting_admin`
--
ALTER TABLE `tree_planting_admin`
  MODIFY `TreePId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90006;

--
-- AUTO_INCREMENT for table `tree_planting_user`
--
ALTER TABLE `tree_planting_user`
  MODIFY `TreePVId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=910000002;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coastal_cu_user`
--
ALTER TABLE `coastal_cu_user`
  ADD CONSTRAINT `coastal_cu_user_ibfk_1` FOREIGN KEY (`CoastalCUId`) REFERENCES `coastal_cu_admin` (`CoastalCUId`);

--
-- Constraints for table `tree_planting_user`
--
ALTER TABLE `tree_planting_user`
  ADD CONSTRAINT `tree_planting_user_ibfk_1` FOREIGN KEY (`TreePId`) REFERENCES `tree_planting_admin` (`TreePId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
