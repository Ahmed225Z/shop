-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 08:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcard`
--

CREATE TABLE `addcard` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addcard`
--

INSERT INTO `addcard` (`id`, `name`, `price`) VALUES
(17, 'course', '500$'),
(21, 'java course', '300$'),
(22, 'LG', '8000'),
(25, 'java course', '300$'),
(26, 'sumsung', '235$');

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `name`, `price`, `image`) VALUES
(42, 'java course', '300$', 'images/tyeb.jpg'),
(44, 'sumsung', '235$', 'images/Samsung-Galaxy-S21-1200.jpg'),
(45, 'opooc12', '240$', 'images/galaxy-note20_highlights_kv_video_end.jpg'),
(47, 'ahmed', '22$', 'images/about.png'),
(48, 'ahmed', '22$', 'images/jeep.png'),
(49, 'ahmed', '22$', 'images/delivery.png'),
(51, 'ahmed', '22$', 'images/car5.jpg'),
(52, 'ahmed', '22$', 'images/Artboard-11-1024x724.png'),
(53, 'ahmed', '22$', 'images/CSS3_logo_and_wordmark.svg.png'),
(54, 'jhkj', '22$', 'images/nodejs-34c5f8cc37f0756108c490a903d80176.png'),
(55, 'ahmed', '22$', 'images/best.jpg'),
(57, 'ahmed', '300$', 'images/tyeb.jpg'),
(58, 'LG', '8000', 'images/best.jpg'),
(59, 'LG', '300$', 'images/tyeb.jpg'),
(60, 'sumsung', '9000', 'images/city.jpg'),
(61, 'ahmed', '8000', 'images/432-4320388_home-brand-chery-design-concept-car-concept-car.png'),
(62, 'ahmed', '8000', 'images/ali.jpg'),
(63, 'ahmed', '333', 'images/car1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcard`
--
ALTER TABLE `addcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcard`
--
ALTER TABLE `addcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
