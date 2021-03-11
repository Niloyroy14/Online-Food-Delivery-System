-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 07:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'niloy', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `offline_order`
--

CREATE TABLE `offline_order` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `pincode` int(15) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offline_order`
--

INSERT INTO `offline_order` (`id`, `customer_name`, `address`, `mobile_no`, `pincode`, `city`, `email`, `product_name`, `price`) VALUES
(1, 'niloy ', 'Mirpur', 404040043, 1123, 'Dhaka', 'niloy@gmail.com', 'Burger', 140),
(2, 'Rubel', 'Aftabnagar.Block-B,HOuse no:33', 1234567856, 1111, 'Dhaka', 'rubel@gmail.com', 'Burger', 140),
(5, 'Rafa', 'Khilgoan', 152367382, 1234, 'Dhaka', 'rafa@gmail.com', 'Burger', 140);

-- --------------------------------------------------------

--
-- Table structure for table `online_order`
--

CREATE TABLE `online_order` (
  `id` int(40) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `price` int(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `mobile_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_order`
--

INSERT INTO `online_order` (`id`, `product_name`, `price`, `user_name`, `address`, `city`, `mobile_no`) VALUES
(1, 'Oven Pasta', 300, 'niloy roy', 'Manikganj', 'Dhaka', 1727532825),
(4, 'Vegetable Roll', 40, 'Rubel', 'Aftabnagar', 'Dhaka', 152367382),
(5, 'Vegetable Roll', 40, 'Rubel', 'Aftabnagar', 'Dhaka', 152367382);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `price`) VALUES
(1, 'Burger', 140),
(2, 'Hot Dog', 170),
(5, 'Vegetable Roll', 40),
(6, 'Oven Pasta', 280),
(10, 'Pizza', 380);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offline_order`
--
ALTER TABLE `offline_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_order`
--
ALTER TABLE `online_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offline_order`
--
ALTER TABLE `offline_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `online_order`
--
ALTER TABLE `online_order`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
