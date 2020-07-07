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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `res_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_id`, `item_name`, `description`, `image`, `res_id`, `type`, `price`, `slug`, `created_at`) VALUES
(1, 'new item', 'new itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew itemnew item', 'clock.png', 1, 'Veg', 100, 'new-item', '2020-07-04 13:39:00'),
(2, 'other item', 'other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item other item', 'new-user.png', 1, 'Non-Veg', 350, 'other-item', '2020-07-04 13:50:15'),
(3, 'Food Item', 'Food ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood ItemFood Item', 'nophoto.png', 4, 'Veg', 150, 'Food-Item', '2020-07-06 09:27:36'),
(4, 'item more', 'item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more', 'user.png', 4, 'Non-Veg', 30, 'item-more', '2020-07-04 13:57:12'),
(5, 'item more item more', 'item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more item more', 'location.png', 4, 'Veg', 620, 'item-more-item-more', '2020-07-04 13:57:30'),
(6, 'another Person', 'another Personanother Personanother Personanother Personanother', 'clock.png', 1, 'Non-Veg', 500, 'another-Person', '2020-07-06 06:42:55'),
(7, 'item hai', 'item haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem haiitem hai', 'mustang.jpg', 1, 'Veg', 440, 'item-hai', '2020-07-05 15:08:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
