-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 07:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
  `lot_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lots`
--

INSERT INTO `lots` (`lot_id`, `lot_code`, `vehi_no`, `lot_status`) VALUES
(5, 'AS0001', '', 'OUT'),
(6, 'AS0002', '', 'OUT'),
(7, 'AS0003', '', 'OUT'),
(8, 'AS0004', '', 'OUT'),
(9, 'AS0005', 'KL-05-W-1869', 'IN'),
(10, 'AS0006', '', 'OUT'),
(11, 'AS0007', '', 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `pre_lot`
--

CREATE TABLE `pre_lot` (
  `lot_id` int(11) NOT NULL,
  `lot_code` varchar(50) NOT NULL,
  `vehi_no` varchar(50) NOT NULL,
  `lot_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pre_lot`
--

INSERT INTO `pre_lot` (`lot_id`, `lot_code`, `vehi_no`, `lot_status`) VALUES
(2, 'AS0008', 'KL-05-AD-1234', 'IN'),
(3, 'AS0009', '', 'OUT');

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
(10, 'KL-05-AD-1234', '', '17:32:00', '2023-02-04', 200);

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
  `status` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehi_id`, `vehi_name`, `vehi_type`, `vehi_no`, `lot_no`, `contact_no`, `time_arr`, `date_arr`, `status`, `type`) VALUES
(22, 'Hero Splender', 'twowheeler', 'KL-05-W-1869', 'AS0005', '9497343468', '22:10:00', '2023-01-18', 'IN', 'lot'),
(24, 'honda amaze', 'fourwheeler', '', 'AS0008', '7356885119', '18:10:00', '2023-02-04', 'OUT', 'pre'),
(31, 'honda amaze', 'fourwheeler', 'KL-05-AD-1234', 'AS0008', '7356885119', '10:45:00', '2023-02-05', 'IN', 'pre');

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
-- Indexes for table `pre_lot`
--
ALTER TABLE `pre_lot`
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
-- AUTO_INCREMENT for table `pre_lot`
--
ALTER TABLE `pre_lot`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tran_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
