-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 05:55 PM
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
-- Database: `foodvilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `food_id` int(10) NOT NULL,
  `food_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `food_quantity` int(25) NOT NULL,
  `food_price` int(25) NOT NULL,
  `cust_id` int(25) NOT NULL,
  `total_amt` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`food_id`, `food_name`, `food_quantity`, `food_price`, `cust_id`, `total_amt`) VALUES
(3, 'Curry', 2, 100, 11, 200);

-- --------------------------------------------------------

--
-- Table structure for table `food_details`
--

CREATE TABLE `food_details` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `foodname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_details`
--

INSERT INTO `food_details` (`id`, `type_id`, `foodname`, `price`) VALUES
(1, 1, 'Chole Bhature', 130),
(2, 1, 'Naan', 70),
(3, 1, 'Curry', 100),
(4, 1, 'Veg Biryani', 120),
(5, 1, 'North Indian Thali', 200),
(6, 2, 'Noodles', 120),
(7, 2, 'Manchurian', 80),
(8, 2, 'Veg momos', 110),
(9, 2, 'Spring Rolls', 100),
(10, 2, 'Manchow soup', 70),
(11, 3, 'Tiramisu', 130),
(12, 3, 'Chocolate mousse', 120),
(13, 3, 'Apple pie', 100),
(14, 3, 'Malai Kulfi', 80),
(15, 3, 'Gulab Jamun', 60);

-- --------------------------------------------------------

--
-- Table structure for table `food_types`
--

CREATE TABLE `food_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_types`
--

INSERT INTO `food_types` (`id`, `name`) VALUES
(1, 'NORTH INDIAN'),
(2, 'CHINESE'),
(3, 'DESSERTS');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(25) CHARACTER SET latin1 NOT NULL,
  `user_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `food_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `food_quantity` int(11) NOT NULL,
  `user_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `user_phone` varchar(40) CHARACTER SET latin1 NOT NULL,
  `user_address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `timestamp` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `food_id`, `food_quantity`, `user_name`, `user_phone`, `user_address`, `timestamp`) VALUES
(1, 'STQPZ619516', '2', '6', 3, 'anusha', '9983121245', 'Rajajinagar', '07:07:2021 05:12:38pm'),
(2, 'STQPZ619578', '2', '12', 5, 'anusha', '9983121245', 'Rajajinagar', '07:07:2021 05:12:38pm'),
(3, 'STQPZ929995', '2', '1', 2, 'anusha', '9983121245', 'Rajajinagar', '07:07:2021 05:13:50pm'),
(4, 'STQPZ396130', '3', '3', 1, 'ram', '9977437510', 'malleshwaram', '07:07:2021 05:54:15pm'),
(5, 'STQPZ490393', '4', '14', 1, 'Ravi', '9767421022', 'Banshankari', '08:07:2021 12:06:26am'),
(6, 'STQPZ463930', '3', '2', 1, 'ram', '9977437510', 'malleshwaram', '08:07:2021 07:17:40pm'),
(7, 'STQPZ688925', '3', '12', 1, 'ram', '9977437510', 'malleshwaram', '08:07:2021 07:19:49pm'),
(8, 'STQPZ613249', '5', '7', 1, 'thanuja', '8120428468', 'Subramanyanagar', '08:07:2021 07:25:59pm'),
(9, 'STQPZ894282', '6', '3', 1, 'Akshay', '8867622457', 'Ramnagar', '09:07:2021 07:50:49pm'),
(10, 'STQPZ894282', '6', '12', 1, 'Akshay', '8867622457', 'Ramnagar', '09:07:2021 07:50:49pm'),
(11, 'STQPZ507111', '7', '9', 1, 'Sham', '8795301265', 'Banshankari', '09:07:2021 08:07:17pm'),
(12, 'STQPZ507111', '7', '13', 1, 'Sham', '8795301265', 'Banshankari', '09:07:2021 08:07:17pm'),
(13, 'STQPZ838080', '8', '1', 1, 'Divya', '7685920124', 'J P nagar', '09:07:2021 08:22:10pm'),
(14, 'STQPZ838080', '8', '6', 2, 'Divya', '7685920124', 'J P nagar', '09:07:2021 08:22:10pm'),
(15, 'STQPZ288877', '9', '3', 1, 'Shiv', '9906712845', 'Subramanyanagar', '09:07:2021 08:25:04pm'),
(16, 'STQPZ591831', '10', '5', 1, 'Jai', '6678294560', 'malleshwaram', '09:07:2021 08:29:17pm'),
(17, 'STQPZ591831', '10', '10', 1, 'Jai', '6678294560', 'malleshwaram', '09:07:2021 08:29:17pm'),
(18, 'STQPZ607139', '8', '4', 1, 'Divya', '7685920124', 'J P nagar', '09:07:2021 08:31:52pm'),
(19, 'STQPZ813284', '5', '10', 1, 'thanuja', '8120428468', 'Subramanyanagar', '09:07:2021 08:42:41pm'),
(20, 'STQPZ813284', '5', '12', 1, 'thanuja', '8120428468', 'Subramanyanagar', '09:07:2021 08:42:41pm'),
(21, 'STQPZ803722', '11', '5', 1, 'Rekha', '8120837232', 'Rajajinagar', '09:07:2021 09:13:05pm'),
(22, 'STQPZ803722', '11', '7', 1, 'Rekha', '8120837232', 'Rajajinagar', '09:07:2021 09:13:05pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `phone`, `address`) VALUES
(1, 'anusha@gmail.com', 'anusha', 'ram', '9983121245', 'malleshwaram'),
(2, 'aditi@gmail.com', 'aditi', 'aditi', '9385128247', 'Rajajinagar'),
(3, 'ram@gmail.com', 'ram', 'ram', '9977437510', 'malleshwaram'),
(4, 'ravi@gmail.com', 'ravi', 'Ravi', '9767421022', 'Banshankari'),
(5, 'thanuja@gmail.com', 'thanuja', 'thanuja', '8120428468', 'Subramanyanagar'),
(6, 'akshay@gmail.com', 'akshay', 'Akshay', '8867622457', 'Ramnagar'),
(7, 'sham@gmail.com', 'sham', 'Sham', '8795301265', 'Banshankari'),
(8, 'divya@gmail.com', 'divya', 'Divya', '7685920124', 'J P nagar'),
(9, 'shiv@gmail.com', 'shiv', 'Shiv', '9906712845', 'Subramanyanagar'),
(10, 'jai@gmail.com', 'jai', 'Jai', '6678294560', 'malleshwaram'),
(11, 'rekha@gmail.com', 'rekha', 'Rekha', '8120837232', 'Rajajinagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `food_details`
--
ALTER TABLE `food_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_types`
--
ALTER TABLE `food_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_details`
--
ALTER TABLE `food_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `food_types`
--
ALTER TABLE `food_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
