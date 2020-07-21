-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 07:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobi_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(11000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Androidified A2 Case For Samsung Galaxy S III', '198.96', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1i7a4XjSUMj8EATSSkg3EBspjiz1MnjF8/view?usp=sharing'),
(2, 'Apple iPhone 5S 64Gb', '296.20', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/145IMtsHbguVcT0CZtt77l0PfFhUCTjiX/view?usp=sharing'),
(3, 'LG D802 (Optimus G2)', '330.96', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1y24OSF60nFMQSqkZ-LB0OgvLFu1_Dau0/view?usp=sharing'),
(4, 'CAT B15', '330.96', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1ePD0e7ea9qbHnAIxXNAWe64pfNZvIpIn/view?usp=sharing'),
(5, 'FLY EZZY4 gray\r\n', '278.96', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1byn89zTE-kzTqGw2HzZKxBqw8qvSMjEY/view?usp=sharing'),
(6, 'FLY IQ4410 Phoenix', '288.60', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1tlmWxJ8H8fVQBHQd2xmSh6MXKbDUOzdb/view?usp=sharing'),
(7, 'GIGA-BYTE Megatron GS202', '220.54', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1nhpnir5gkVH6Zbu0PcNdTD5uiGoQNrqV/view?usp=sharing'),
(8, 'Gresso Grand Monaco', '156.82', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1E7qTP3R-iaxM8Q-rMrkMX4TDQehnvNvJ/view?usp=sharing'),
(9, 'NOKIA 515', '330.96', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1_Ccv69VkAnC5XFB0yu0ac_es17_zQ039/view?usp=sharing'),
(10, 'HTC Desire 601 315n\r\n', '296.51', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1fPKR3WJdVMb1tL7q70CWQcCKd4S5Y7Be/view?usp=sharing'),
(11, 'HTC One', '217.38', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1ge4poZl0D4KNLR8G95oceGFitShApBQE/view?usp=sharing'),
(12, 'HTC One Pink Gel Case', '217.00', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1SwA5sGWwPuybJKwhu62-puHF817o1usV/view?usp=sharing'),
(13, 'Huawei Ascend Y300', '288.00', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1Jd3yyu0EhdWGZM03RAqfHQwYcFPENXFK/view?usp=sharing'),
(14, 'iPhone 5S', '300.70', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1fnBQnng687fhbEOn4KvhEafshBzqspel/view?usp=sharing'),
(15, 'Cirque du Soleil - La Nouba', '260.00', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1Zb_HikLZQ2FBey4-btH72WWz-ZApb4fX/view?usp=sharing'),
(16, 'LENOVO K900 Steel Gray', '250.78', 'We are proud to offer you our hi-tech original goods. The products of our store are the real bestsellers and we have a great number of faithful customers. Their testimonials prove that the reputation of our company is simply perfect. We observe the policy', 'https://drive.google.com/file/d/1MjBnXQ5wGUTo8vzRi6JHXBedhsCuR8Ev/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `city`, `address`, `contact`) VALUES
(1, 'divya', '2@gmail.com', 'dhjdhj', 'hjfhfh', 'hfhfr', 8983403218),
(2, 'divyaborse', '2017.divya.borse@ves.ac.in', '879379', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(3, 'divya', 'kadamanuj99@gmail.com', '864c33', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(4, 'divya', '2017.divya.borse@ves.ac.in', '64ee23', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(5, 'divyaborse', 'kadamanuj99@gmail.com', '864c33', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(6, 'divyaborse', 'kadamanuj99@gmail.com', '7e0cd7', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(7, 'divyaborse', '2017.divya.borse@ves.ac.in', '7e0cd7', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(8, 'divyaborse', 'ab@gmail.com', '7e0cd7', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(9, 'divyaborse', 'ak@gmail.com', '7e0cd74905b197f820f70197772031f5', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(10, 'divyaborse', 'as@gmail.com', 'eadeb77d8fba90b42b32b7de13e8aaa6', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(11, 'ddi', 'db@gmail.com', '20c5cbacffde2c63848dee82ff0bea84', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(12, 'hari', 'hb@gmail.com', 'eadeb77d8fba90b42b32b7de13e8aaa6', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(13, 'divyaborse', '2017.divya.borse@ves.ac.in', '0c56fc8dc4319833ff309197d41c19ce', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(14, 'divyaborse', 'ad@gmail.com', '6ac6df7687a313b4617e4a2e8ae9b88f', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218),
(15, 'divyaborse', 'sd@gmail.com', '20c5cbacffde2c63848dee82ff0bea84', 'Badlapur', '301,Manorama Nagar,Near Gavdevi temple', 8983403218);

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(23, 12, 3, 'Added to the cart'),
(25, 12, 4, 'Confirmed order'),
(26, 15, 1, 'Confirmed order');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_items`
--
ALTER TABLE `user_items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
