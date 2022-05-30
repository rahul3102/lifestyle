-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 04:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifestyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `amit`
--

CREATE TABLE `amit` (
  `product_name` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `amount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ankur`
--

CREATE TABLE `ankur` (
  `product_name` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `amount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ankur`
--

INSERT INTO `ankur` (`product_name`, `stock`, `price`, `amount`) VALUES
('titan301', 2, 13000, 26000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `stock` int(20) NOT NULL,
  `price` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `stock`, `price`) VALUES
(701, 'cannoneos', 10, 36000),
(702, 'sonydslr', 10, 40000),
(703, 'sonydslr2', 10, 50000),
(704, 'olympusdslr', 10, 80000),
(705, 'titan301', 8, 13000),
(706, 'titan201', 9, 3000),
(707, 'hmtmilan', 10, 8000),
(708, 'faberluba', 10, 18000),
(709, 'h&w', 10, 800),
(710, 'luisphil', 10, 1000),
(711, 'johnzok', 9, 1500),
(712, 'jhalsani', 10, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `contact`, `city`, `address`, `timestamp`) VALUES
('Amit Kumar Rana', 'amitranahacker@gmail.com', 'amit', '9123187562', 'Ranchi', 'Deepatoli', '2022-05-29 01:25:51'),
('Ankur Kumar', 'ankurtutu345@gmail.com', 'ankur', '7004914818', 'Ranchi', 'Hostel, Ranchi', '2022-05-28 13:38:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
