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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `preference` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `preference`, `password`, `role`, `created_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '8a989560ec1765a077833b99708acaa5', 'res', '2020-07-03 19:52:28'),
(2, 'new', 'new@mail.com', 'veg', '1e182f13144717909b4a9b785552f75a', 'user', '2020-07-03 19:56:25'),
(3, 'Nonu', 'nonu@gmail.com', 'both', '352a12c1477f4979255d57aabda08e50', 'user', '2020-07-03 19:57:50'),
(4, 'newres', 'newres@gmail.com', NULL, 'a3c280a527000226fbb0c5c869fb9b44', 'res', '2020-07-04 10:40:01'),
(5, 'newcus', 'newcus@gmail.com', 'non-veg', '8841dedfb6b168c7dafe855773da7a85', 'user', '2020-07-06 10:06:28'),
(6, 'newone', 'newone@gmail.com', 'veg', '623b53dbad9b299ca30955f8c1ca204f', 'user', '2020-07-06 10:26:31'),
(7, 'newres2', 'newres2@gmail.com', NULL, 'a3c280a527000226fbb0c5c869fb9b44', 'res', '2020-07-06 10:28:39'),
(8, 'dhaba', 'dhaba@gmail.com', NULL, '7f83a4c6d6035b5239dcc92322863785', 'res', '2020-07-06 10:32:32'),
(9, 'newdhaba', 'newdhaba@gmail.com', NULL, '64a49966d38c4dce24de1040d83b7ac6', 'res', '2020-07-06 10:33:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
