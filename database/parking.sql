-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 03:20 PM
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
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `ad_name`, `ad_password`) VALUES
(1, 'admin', 'maliyil123');

-- --------------------------------------------------------

--
-- Table structure for table `lots`
--

CREATE TABLE `lots` (
  `lot_id` int(11) NOT NULL,
  `lot_code` varchar(50) NOT NULL,
  `vehi_no` varchar(100) DEFAULT NULL,
  `lot_status` varchar(50) DEFAULT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lots`
--

INSERT INTO `lots` (`lot_id`, `lot_code`, `vehi_no`, `lot_status`, `type`) VALUES
(5, 'AS0001', '', 'OUT', 'pre'),
(6, 'AS0002', '', 'OUT', 'pre'),
(7, 'AS0003', '', 'OUT', 'lot'),
(8, 'AS0004', '', 'OUT', 'pre'),
(9, 'AS0005', '', 'OUT', 'lot'),
(10, 'AS0006', '', 'OUT', 'pre'),
(11, 'AS0007', '', 'OUT', 'pre');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tran_id` int(50) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `receipt_no` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date_of_trans` date NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tran_id`, `vehicle_no`, `receipt_no`, `time`, `date_of_trans`, `amount`) VALUES
(1, 'KL-05-W-8697', '', '06:43:00', '2022-11-19', 200),
(2, 'KL-05-AD-8657', '', '06:31:00', '2022-11-21', 200),
(5, 'KL-05-AD-1234', '', '21:11:00', '2023-01-11', 50),
(6, 'KL-05-AD-1234', '', '21:54:00', '2023-01-11', 50),
(7, 'KL-05-W-1869', '', '19:16:00', '2023-01-12', 50),
(8, 'KL-05-W-1869', '', '19:17:00', '2023-01-12', 50),
(9, 'KL-05-AD-1234', '', '19:19:00', '2023-01-12', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vehi_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `age`, `email`, `vehi_no`) VALUES
(1, 'akhil', 19, 'akhil@123', ''),
(2, 'jerry', 19, 'jerry@gmail.com', ''),
(6, 'akhil udayan', 19, 'akhiludayan@123', ''),
(8, 'Joji', 41, 'jojimaliyil@gmail.com', ''),
(9, 'akhil joji', 18, 'akhiljoji145@gmail.com', 'KL-05-W-1869'),
(10, 'manu ', 28, 'manu@gmail.com', 'KL-05-AD-1234');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehi_id` int(11) NOT NULL,
  `vehi_name` varchar(50) DEFAULT NULL,
  `vehi_type` varchar(50) DEFAULT NULL,
  `vehi_no` varchar(50) DEFAULT NULL,
  `lot_no` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `time_arr` time DEFAULT NULL,
  `date_arr` date DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehi_id`, `vehi_name`, `vehi_type`, `vehi_no`, `lot_no`, `contact_no`, `time_arr`, `date_arr`, `status`) VALUES
(15, 'HONDA amaze', 'fourwheeler', 'KL-05-AD-1234', 'AS0003', '9497343468', '07:17:00', '2023-01-11', 'OUT'),
(17, 'HONDA amaze', 'fourwheeler', 'KL-05-AD-1234', 'AS0006', '9497343468', '21:43:00', '2023-01-11', 'OUT'),
(19, 'HONDA amaze', 'fourwheeler', 'KL-05-W-1869', 'AS0002', '9497343468', '19:15:00', '2023-01-12', 'OUT'),
(20, 'HONDA amaze', 'fourwheeler', 'KL-05-W-1869', 'AS0002', '9497343468', '19:17:00', '2023-01-12', 'OUT'),
(21, 'HONDA amaze', 'fourwheeler', 'KL-05-AD-1234', 'AS0005', '9497343468', '19:18:00', '2023-01-12', 'OUT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`lot_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lots`
--
ALTER TABLE `lots`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tran_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
