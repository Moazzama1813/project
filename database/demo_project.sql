-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 07:01 PM
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
-- Database: `demo_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `country_id`, `city_name`) VALUES
(1, 1, 'Okara'),
(2, 1, 'Lahore'),
(3, 1, 'Karachi'),
(4, 1, 'Islamabad'),
(5, 1, 'Peshawar'),
(6, 1, 'Faisalabad'),
(7, 1, 'Multan'),
(8, 1, 'Gujranwala'),
(9, 1, 'Rawalpindi'),
(10, 1, 'Hyderabad'),
(11, 1, 'Quetta'),
(12, 1, 'Sialkot'),
(13, 1, 'Jacobabad'),
(14, 1, 'Sargodha'),
(15, 1, '\r\nGujrat'),
(16, 1, 'Rahim Yar Khan'),
(17, 1, 'Sahiwal'),
(18, 1, 'Larkana'),
(19, 1, 'Sukkur'),
(20, 1, 'Kasur'),
(21, 2, 'Mumbai'),
(22, 2, 'Bengaluru'),
(23, 2, 'Kolkata'),
(24, 2, 'Chennai'),
(25, 2, '\r\nHyderabad'),
(26, 2, '\r\nJaipur'),
(27, 2, 'Pune'),
(28, 2, 'Ahmedabad'),
(29, 2, 'Surat'),
(30, 2, 'Lucknow'),
(31, 3, 'New York'),
(32, 3, 'Chicago'),
(33, 3, 'San Diego'),
(34, 3, 'Los Angeles'),
(35, 3, 'San Francisco'),
(36, 3, 'Seattle'),
(37, 3, 'Boston'),
(38, 3, 'Nashville'),
(39, 3, 'Philadelphia'),
(40, 3, 'Houston'),
(41, 4, 'Sydney'),
(42, 4, 'Melbourne'),
(43, 4, 'Brisbane'),
(44, 4, 'Perth'),
(45, 4, 'Canberra'),
(46, 4, 'Adelaide'),
(47, 4, 'Gold Coast'),
(48, 4, '\r\nHobart'),
(49, 4, '\r\nDarwin'),
(50, 4, 'Cairns'),
(51, 4, '\r\nNewcastle'),
(52, 4, 'Wollongong'),
(53, 4, 'Townsville'),
(54, 4, 'Geelong'),
(55, 4, 'Mackay'),
(56, 5, 'Shanghai'),
(57, 5, 'Beijing'),
(58, 5, 'Guangzhou'),
(59, 5, 'Xi An'),
(60, 5, 'Chongqing'),
(61, 5, 'Chengdu'),
(62, 5, 'Tianjin'),
(63, 5, 'Nanjing'),
(64, 5, 'Fuzhou'),
(65, 5, 'Jiaxing'),
(66, 5, '\r\nSanming'),
(67, 5, 'Ningde'),
(68, 5, 'Zhenjiang'),
(69, 5, 'Jining'),
(70, 5, 'Zhongxiang');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'Pakistan'),
(2, 'India'),
(3, 'USA'),
(4, 'Australia'),
(5, 'Chaina');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `phone`, `image`, `password`, `country`, `city`, `created_at`) VALUES
(157, 'ali1', 'ali333@gmail.com', '11111111111', '1684747064-image1.jpeg', '$2y$10$XfSXuNpWjUVOnkfxvalcsONLAND0ou2uTcd2HPIx7lX3zpDx9U9te', '2', '24', '2023-05-22 07:53:36'),
(158, 'ali', 'ali1@gmail.com', '11111111111', '1684747759-images7.jpeg', '$2y$10$2USB3NN9TTAPo.kxhaHU1eSwqrQ6lsKsqXIzf3gBMxfrdhQM9SNt2', '5', '63', '2023-05-22 08:18:51'),
(159, 'ali2', 'ali2@gmail.com', '11111111231', '1685515470-IMAGE.jpeg', '$2y$10$XQFXlWCWIlLbgym40ohAO.4cs01FVM/cranjeQ.n7MZXdLClod25S', '5', '65', '2023-05-22 08:19:14'),
(160, 'ali', 'ali3@gmail.com', '11111111111', 'image1.jpeg', '$2y$10$Lx1e9L30tLVuNHSPRXNVeOSWrCUyE6Novxm2jY18oAXqtZOSe10tS', '4', '53', '2023-05-22 08:19:43'),
(161, 'test', 'test1@gmail.com', '12342222222', 'images9.jpeg', '$2y$10$oHa3jfq/lncRrrf8wB1wxe1D5oPt6rXlHtIM1ROmSeA.N/O2BgIuC', '2', '23', '2023-05-22 11:25:23'),
(162, 'test2', 'test2@gmail.com', '12342222222', 'images4.jpeg', '$2y$10$EGmZK6/N7VBqLQ5Lw9Rs2el.vHst9RIk8l1VoOsQRs3Mm6Ht/Ym8y', '1', '1', '2023-05-22 11:26:24'),
(163, 'test3', 'test3@gmail.com', '12342222222', '1684748184-tree-736885__480.jpg', '$2y$10$74kyE6.Z5k1HhKKBvnOMSuV9ajtX7X0NZg/qngqVphrJrzztpkIAy', '5', '65', '2023-05-22 11:27:12'),
(164, 'test', 'test6@gmail.com', '12342222222', 'images7.jpeg', '$2y$10$NO5qfuQqLfWqUWXvI0FdturujhsmkRPkxUZnJkAdgcHHk7pTRn9ja', '2', '30', '2023-05-23 10:08:21'),
(166, 'ali', 'ali33333333@gmail.com', '11111111111', '1685518748-images3.png', '$2y$10$mTKUijgbHX9gGOitLi0lkugl2v6t/J79twJqjJw67Ke8tT4OQENxa', '4', '44', '2023-05-30 09:32:49'),
(167, 'test', 'test123456789@gmail.com', '11111111111', '1685532961-images4.jpeg', '$2y$10$Lwptok82cxDCe09mwK4gNejbbGnIpbLZ0zJXMg3rv.a6UP8a7Ajri', '5', '63', '2023-05-31 12:03:00'),
(168, 'abc', 'abc112233@gmail.com', '11111111111', '1685532224-tree-736885__340.jpg', '$2y$10$Wq.saXnygpVVruJKwspV1OTh3POrvG/Y2fRw4994vE.UzdiNTvYr.', '4', '42', '2023-05-31 12:53:05'),
(169, 'Awais', 'awwli35533@gmail.com', '12342222222', 'photo-1517265035603-faefa167335b.jpg', '$2y$10$jmJddQTMMUtEpeDJCKvEQORbSmKNvTX/ZIsV6uhGf0CfEN3CyTUNm', '2', '25', '2023-05-31 14:04:56'),
(170, 'Khalid', 'khalid123@gmail.com', '12345678900', 'img_nature.jpg', '$2y$10$DY5Y3F7bSR5BYl.nOs5gOOmUUwMl6IyAIw9UNWpUKlmKtdi59hs2S', '2', '28', '2023-05-31 15:04:55'),
(172, 'xyz', 'xyz@gmail.com', '11111111111', 'image2.png', '$2y$10$jqVOQSz8R0EAQpkgYoExkuwYh3iFvaSDn89rUpY1OTq8uCuApgMuq', '4', '53', '2023-06-01 08:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id`, `email`) VALUES
(1, 'ali333@gmail.com'),
(2, 'ali333@gmail.com'),
(3, 'ali333@gmail.com'),
(4, 'ali333@gmail.com'),
(5, 'ali333@gmail.com'),
(6, 'ali3344443@gmail.com'),
(9, 'alig123@gmail.com'),
(11, 'ali1@gmail.com'),
(12, 'ali3311113@gmail.com'),
(13, 'test@gmail.com'),
(14, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `country_id_fk` (`country_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
