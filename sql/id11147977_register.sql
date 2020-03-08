-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2020 at 05:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11147977_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `product`, `message`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Chaitali Poojari', 'chaitu@gmail.com', 'Kaikorhrtnbbrrbf', 'Hattghrehegrht'),
('chaitu', '', '', ''),
('chaitali poojari', '', '', ''),
('', '', '', ''),
('new', '', '', ''),
('new', 'new@mail', 'casca', 'ascsacascsacsa'),
('new', 'new@mail', 'n', 'ascasdvsdcvds');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `code` varchar(100) CHARACTER SET latin1 NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'COTTON YELLOW CHANIYACHOLI', 'CHANIYACHOLI01', 2000.00, 'garba.jpg'),
(2, 'SOUTH SILK CHOTI FESTIVE WEAR', 'SOUTHSILK01', 1000.00, 'lungi.jpg'),
(3, 'WHITE NAVRATRI LEHENGA', 'NAVRATRI01', 2700.00, 'white.jpg'),
(4, 'BEIGE RED DHOTI KURTA', 'BIEGE01', 1600.00, 'dhoti.jpg'),
(5, 'ROYAL HERITAGE BRIDAL', 'ROYAL01', 3060.00, 'royal.jpg'),
(6, 'GOLDEN DELIGHT SILK KURTA', 'KURTA01', 2600.00, 'kurta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productsc2`
--

CREATE TABLE `productsc2` (
  `id` int(10) NOT NULL,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `code` varchar(100) CHARACTER SET latin1 NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productsc2`
--

INSERT INTO `productsc2` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'COMBO PIECE BRIDAL', 'COMBO01', 7600.00, 'combopiecebridal.jpeg'),
(2, 'PUNJABI PURPLE SAREE', 'PPURPLE01', 8600.00, 'punjabipurple.jpeg'),
(3, 'BANARSI SILK SAREE', 'BNRSI02', 6600.00, 'banarasisilksaree.jpg'),
(4, 'BENGALI TRADITIONAL SAREE', 'BNGLI01', 5600.00, 'bengalitraditionalsaree.jpg'),
(5, 'CHERRY PINK PAITHANI', 'CHRRY01', 6600.00, 'cherrypinkpaithani.jpg'),
(6, 'LAL GULAL BRIDAL LOOK', 'GULAL01', 7600.00, 'lalgulalbridallook.jpg'),
(7, 'LIGHT BRIDAL WEAR', 'LIGHT01', 6000.00, 'lightbridalwear.jpg'),
(8, 'PAITHANI SAREE PINK', 'PAITHANI01', 6900.00, 'paithanisareepink.jpg'),
(9, 'PURE KANJEEVARAM SAREE', 'KNJVRM01', 8600.00, 'purekaanjeevaramsaree.jpg'),
(10, 'SILK PURPLE', 'SILK01', 5600.00, 'silkpurple.jpg'),
(11, 'SILK WOVEN SAREE', 'WOVEN01', 6600.00, 'silkwovensaree.jpg'),
(12, 'VELVET BRIDAL SMART', 'VELVT01', 7600.00, 'velvetbridalsmart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productsc3`
--

CREATE TABLE `productsc3` (
  `id` int(10) NOT NULL,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `code` varchar(100) CHARACTER SET latin1 NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productsc3`
--

INSERT INTO `productsc3` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'MAROON HEAVY LEHENGA', 'MAROON01', 2600.00, 'maroonheavylehenga.jpg'),
(2, 'BANARSI SILK SHERWANI', 'BENARSI01', 3060.00, 'banarasisilksherwani.jpg'),
(3, 'LEHENGA CHOLI SAREE', 'CHOLI01', 2600.00, 'lehengacholisaree.jpg'),
(4, 'PATHANI SMART', 'SMART01', 3600.00, 'pathanismart.jpg'),
(5, 'BIEGE BANGLORIAN', 'BIEGE01', 3600.00, 'beigebanglorian.jpg'),
(6, 'RUBY SHERWANI', 'RUBY01', 2600.00, 'rubysherwani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productsc4`
--

CREATE TABLE `productsc4` (
  `id` int(10) NOT NULL,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `code` varchar(100) CHARACTER SET latin1 NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `productsc4`
--

INSERT INTO `productsc4` (`id`, `name`, `code`, `price`, `image`) VALUES
(4, 'INDIAN KURTA PYJAMA RED GOLD', 'REDGOLD01', 4600.00, 'indiankurtapyjamaredgold.jpg'),
(5, 'JACKET KURTA MEN', 'JACKET01', 5600.00, 'jacketkurtamen.jpeg'),
(6, 'LATEST PUNJABI TRIBE', 'PUNJABI01', 4600.00, 'latestpunjabitribe.jpg'),
(7, 'MANYAVAR NAVY BLUE', 'MANYAVAR01', 6000.00, 'manyavarnavyblue.png'),
(8, 'WHITE TEXTURE', 'TEXTURE01', 2600.00, 'whitetexture.jpg'),
(9, 'NIYOOSH', 'NIYOO01', 5600.00, 'niyoosh.jpg'),
(10, 'PATHANI GROOM', 'GROOM01', 3600.00, 'pathanigroom.jpg'),
(11, 'PRINTED SILK DHOTI KURTA', 'DHOTI01', 5600.00, 'printedsilkdhotikurta.jpg'),
(12, 'PURPLE SILK KURTA', 'PURPLE01', 4600.00, 'purplesilkkurta.jpg'),
(13, 'RAW SILK LAYERED', 'LAYERED01', 6000.00, 'rawsilklayered.jpg'),
(14, 'RAW SILK RED GROOM WEAR', 'RAW01', 6600.00, 'rawsilkredgroomwear.jpg'),
(15, 'SILK CREAM SHERWANI', 'SHERWANI01', 4600.00, 'silkcreamsherwani.jpg'),
(16, 'SUIT CHUDIDAR VELVET', 'CHUDIDR01', 2600.00, 'suitchudidarvelvet.jpg'),
(17, 'WHITE DHOTI SILK', 'WHITDHTI01', 3600.00, 'whitedhotisilktradi.jpg'),
(21, 'EKAKSH', 'EKAKSH01', 6000.00, 'ekaksh.jpg'),
(22, 'FESTO TRADITIONAL MENS WEAR', 'FESTO01', 4600.00, 'festotraditionalmenwear.jpg'),
(23, 'GROOMSUIT', 'GROOM02', 3600.00, 'groomsuit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(2, 'chaitali', 'chaitu@mail.com', '63c4fd91cf4121bc58456784e41de4d1', '2019-10-08 07:10:46'),
(3, 'Chaitu', 'chaitu@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-10-08 07:19:49'),
(6, 'sid', 'siddhagiri55555@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-10-09 08:33:10'),
(7, 'sid', 'siddhagirssci55555@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-10-12 07:29:49'),
(9, 'Hello', 'hello@gmail.com', '5d41402abc4b2a76b9719d911017c592', '2019-10-20 19:30:24'),
(11, 'sid', 'sidd55555@gmail.com', '63c4fd91cf4121bc58456784e41de4d1', '2019-10-28 17:38:18'),
(12, 'Siddhant', 'siddhagiri55555@gmail.com', '9fa48c0a437dd8284808a6a294efa887', '2019-10-29 03:44:58'),
(13, 'new', 'new@mail', '22af645d1859cb5ca6da0c484f1f37ea', '2019-10-29 14:35:31'),
(14, 'Sidd', 'sidgiri2000@gmail.com', 'c3ed80c53d8a01bc9ab5bbb9ed34fc8e', '2019-11-04 04:19:41'),
(15, 'Name', 'email@email', 'cc9b90b1ed1b72df4bc4d643a1ab7247', '2019-11-20 04:54:42'),
(16, 'Siddhant ', 'Sidgiri2000@gmail.com', '35f9547c9cbb9d314b4305b3b0f8c41a', '2020-01-06 16:15:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsc2`
--
ALTER TABLE `productsc2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsc3`
--
ALTER TABLE `productsc3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsc4`
--
ALTER TABLE `productsc4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `productsc2`
--
ALTER TABLE `productsc2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `productsc3`
--
ALTER TABLE `productsc3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `productsc4`
--
ALTER TABLE `productsc4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
