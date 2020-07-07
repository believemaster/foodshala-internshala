-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 04:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `res_name` varchar(255) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `address` text NOT NULL,
  `pay_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `waiting` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `u_id`, `res_name`, `m_id`, `qty`, `amt`, `address`, `pay_id`, `status`, `waiting`, `created_at`) VALUES
(1, 3, 'admin', 2, 1, 350, 'A-11/2A Shyam Vihar Ph-2\r\nNajafgarh New Delhi', '4242424242', 1, 0, '2020-07-05 20:08:25'),
(2, 3, 'newres', 5, 1, 620, 'A-11/2A Shyam Vihar Ph-2\r\nNajafgarh New Delhi', '4242424242', 1, 0, '2020-07-05 20:09:05'),
(3, 3, 'admin', 6, 1, 500, 'A-11/2A Shyam Vihar Ph-2\r\nNajafgarh New Delhi', '4242424242', 1, 1, '2020-07-05 15:05:19'),
(4, 3, 'admin', 1, 1, 100, 'A-11/2A Shyam Vihar Ph-2\r\nNajafgarh New Delhi', '4242424242', 1, 0, '2020-07-05 20:43:09'),
(5, 3, 'admin', 2, 1, 350, 'A-11/2A Shyam Vihar Ph-2\r\nNajafgarh New Delhi', '4242424242', 1, 0, '2020-07-05 20:05:00'),
(18, 3, 'admin', 2, 1, 350, 'A-11/2A Shyam Vihar Ph-2\r\nNajafgarh New Delhi', '4242424242', 1, 0, '2020-07-05 20:06:44'),
(19, 5, 'admin', 7, 1, 440, 'A-11/2A Shyam Vihar Ph-2\r\nNajafgarh New Delhi', '4242424242', 0, 1, '2020-07-06 10:18:13'),
(20, 5, 'admin', 7, 1, 440, 'A-11/2A Shyam Vihar Ph-2\r\nNajafgarh New Delhi', '4242424242', 1, 1, '2020-07-06 10:20:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
