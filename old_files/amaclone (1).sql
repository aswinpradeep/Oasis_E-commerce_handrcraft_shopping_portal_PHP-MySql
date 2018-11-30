-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2018 at 01:37 AM
-- Server version: 5.7.24
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amaclone`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(79, 11, '0.0.0.0', 2, 'Baby Shirt', 'babyshirt.JPG', 1, 500, 500),
(80, 2, '0.0.0.0', 2, 'iPhone 5s', 'iphonemobile.JPG', 1, 25000, 25000),
(87, 1, '0.0.0.0', 6, 'Wooden Basket', '4.jpg', 1, 5000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Wooden'),
(2, 'Glass'),
(3, 'Paper Arts'),
(4, 'Animals'),
(5, 'Traditional'),
(6, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `tr_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `uid`, `pid`, `p_name`, `p_price`, `p_qty`, `p_status`, `tr_id`) VALUES
(30, 2, 6, 'LG Aqua 2', 15000, 1, 'CONFIRMED', '15179'),
(31, 2, 15, 'Football Shoes', 2500, 1, 'CONFIRMED', '15179'),
(32, 2, 16, 'Football', 600, 1, 'CONFIRMED', '15179'),
(33, 6, 1, 'Samsung Duos 2', 5000, 1, 'CONFIRMED', '1531878616'),
(34, 6, 2, 'iPhone 5s', 25000, 1, 'CONFIRMED', '1531878616'),
(35, 6, 2, 'iPhone 5s', 25000, 1, 'CONFIRMED', '266029603'),
(36, 6, 1, 'Wooden Basket', 5000, 1, 'CONFIRMED', '642038127'),
(37, 6, 2, 'Wooden Table', 25000, 1, 'CONFIRMED', '642038127'),
(38, 6, 7, 'Elephent', 1500, 1, 'CONFIRMED', '425740863'),
(40, 6, 2, 'Wooden Table', 25000, 1, 'CONFIRMED', '447673262'),
(41, 6, 1, 'Wooden Basket', 5000, 1, 'CONFIRMED', '1803189851');

--
-- Triggers `customer_order`
--
DELIMITER $$
CREATE TRIGGER `tg1` AFTER INSERT ON `customer_order` FOR EACH ROW UPDATE products SET products.qty=products.qty-new.p_qty where products.product_id=new.pid
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_price` int(100) NOT NULL,
  `qty` int(5) NOT NULL DEFAULT '0',
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, '1', 'Wooden Basket', 5000, 9, 'Top Layered strongly Constructed', '4.jpg', 'Wooden Handicrafts'),
(2, '1', 'Wooden Table', 25000, 24, 'Well Furnished with extra power', '8.JPG', 'Wooden handicrafts'),
(3, '1', 'Wooden Owl', 2000, 0, 'Wooden owl with wll shaped', '3.jpg', 'Wooden handicrafts'),
(4, '1', 'Wooden Box', 10000, 0, 'Well furnished  100cm*100cm', '9.JPG', 'Wooden handicrafts'),
(5, '1', 'Dress Hanger', 5000, 0, 'Dress Hanger well furnished', '6.JPG', 'Wooden handicrafts'),
(6, '1', 'Wooden Duck', 1000, 0, 'WOODEN DUCK MADE WITH EXTRA FURNISHING', '7.JPG', 'Wooden hndicrafts'),
(7, '2', 'Elephent', 1500, 0, 'Elephent with glass works', '10.jpg', 'Glass handicrafts'),
(8, '2', 'Duck', 1000, 0, 'Duck with glass works', '11.JPG', 'Glass handicrafts'),
(9, '3', 'Paper work', 70, 0, 'Paper works colored', '12.JPG', 'Paper arts'),
(10, '3', 'Paper animal', 180, 0, 'Horse paper wok', '13.JPG', 'Paper arts'),
(11, '4', 'Elephent', 500, 0, '30*20 glass elephent', '14.JPG', 'glass arts'),
(12, '4', 'Glass Horse', 800, 0, 'horse with glass', '15.JPG', 'glass arts'),
(13, '5', 'Peacock', 2000, 0, 'Peacock with extraordinary look', '16.JPG', 'Traditional arts'),
(14, '5', 'Kadhakali', 1500, 0, 'Kerala traditional kadhakali handicraft', '17.JPG', 'Traditional arts'),
(15, '6', 'Chess Board', 2500, 0, 'Wooden Chess Board', '21.jpg', 'Chess board wooden '),
(16, '6', 'Football', 600, 5, 'Football wooden', '19.JPG', 'football wooden'),
(17, '', 'asas', 1, 1, 'aas', 'asa', 'product_keywords'),
(18, '', 'asas', 1, 1, 'aas', 'asa', 'product_keywords'),
(19, '', 'fhds', 1, 1, 'as', 'asa', 'product_keywords'),
(20, '5', 'fhds', 1, 1, 'as', 'asa', 'product_keywords'),
(21, '2', 'Pen', 5, 10, 'Pen', 'images/', 'ghjgj'),
(22, '2', 'Book', 10, 20, 'Book', 'images/22.jpeg', 'Books'),
(23, '2', 'Book', 10, 20, 'Book', '22.jpeg', 'Books'),
(24, '2', 'Chair', 40, 10, 'Chairs', '22.jpeg', 'chairs'),
(25, '2', 'Desk', 100, 10, 'Desk', '22.jpeg', 'Desk');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `amt` int(100) NOT NULL,
  `tr_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `role`) VALUES
(1, 'Satyam', 'Raj', 'satyammast@gmail.com', '3814d460c26c2dbab2d80294d2cc9882', '8235639917', 'Prem Electronics Block Road Ratu', 'Prem Electronics Block Road Ratu', 0),
(2, 'Abhijeet', 'Kumar', 'abhinav@krotos.com', '6cebe3b43c4495fdf87fcaa43b485236', '7631649503', 'West Lohanipur, Kadamkuan, MNS Lane', 'Patna', 0),
(3, 'Krotos', 'Kumar', 'kroto@star.com', 'e3daab6a6b16a140aaf0f1df98d3be24', '7631649503', 'West Lohanipur, Kadamkuan, MNS Lane', 'Patna', 0),
(5, 'Shubham', 'Raj', 'shubham@gmail.com', '5568fda880263b9be0b72104354fa3dc', '8235639917', 'Prem Electronics Block Road Ratu', 'bangalore', 0),
(6, 'Dominic', 'Thomas', 'fsfs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '9744559441', 'axfdsfgxf', 'khdghdkg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `received_payment`
--
ALTER TABLE `received_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `received_payment`
--
ALTER TABLE `received_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
