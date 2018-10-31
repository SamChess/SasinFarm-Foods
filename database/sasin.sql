-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 09:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sasin`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_name`) VALUES
(2, 'Kisumu'),
(3, 'Langata'),
(4, 'South B'),
(6, 'Lavington'),
(8, 'Bomas'),
(9, 'Kangemi'),
(10, 'Kikuyu'),
(11, 'Uthiru');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`) VALUES
(3, 'Maize'),
(4, 'Beans'),
(6, 'Mangoes'),
(8, 'Bananas'),
(9, 'Watermelons'),
(12, 'Lemons'),
(13, 'Carrots'),
(14, 'Passion');

-- --------------------------------------------------------

--
-- Table structure for table `product_posts`
--

CREATE TABLE `product_posts` (
  `id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `weight` double NOT NULL,
  `unit_price` double NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `dateC` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_posts`
--

INSERT INTO `product_posts` (`id`, `product`, `location`, `weight`, `unit_price`, `phone_number`, `fileName`, `description`, `dateC`) VALUES
(6, 'Beans', 'Lavington', 33, 80, '0765453432', 'photo-1448030081970-b7d1ae923ed6.jpg', 'Beans on offer', '2018-10-11 12:48:49'),
(7, 'Maize', 'Nairobi', 245, 77, '0755678744', 'photo-1513868853742-e7fb786265db.jpg', 'Fresh produce', '2018-10-11 12:52:05'),
(8, 'Beans', 'Westlands', 44, 23, '0744356654', 'photo-1526346698789-22fd84314424.jpg', 'Fantastic products', '2018-10-11 12:52:58'),
(9, 'Maize', 'Langata', 68, 44, '0755687934', 'Peas-Desktop-Images-300x170.jpg', 'Dried maize', '2018-10-11 13:52:46'),
(10, 'Carrots', 'Nairobi', 77, 34, '0715685500', 'carrots_crop_root_crops_43827_300x168.jpg', 'These are good carrots to be eaten', '2018-10-11 18:03:18'),
(11, 'Maize', 'Westlands', 670, 44, '0767895643', 'closeup-view-pattern-grains-maize_cg2p09361406c_th.jpg', 'Healthy corn maize', '2018-10-11 18:05:29'),
(13, 'Lemons', 'South B', 66, 45, '0788996433', 'photo-1511640234009-a472b03307a9.jpg', 'Natural lemons', '2018-10-15 08:08:42'),
(14, 'Watermelons', 'Westlands', 78, 56, '0706856000', '1069022.jpg', 'Good melons', '2018-10-15 08:17:28'),
(15, 'Bananas', 'Kikuyu', 500, 66, '0706856000', '17_Banana.jpg', 'Sweet Bananas', '2018-10-30 13:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `access_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `gender`, `country`, `dob`, `password`, `access_level`) VALUES
(1, 'Sam', 'Mulwa', 'fcbsammymulwa@gmail.com', 'male', 'Kenya', '2014-07-10', '$2y$10$WJC7BUgrhvWlKx6gQxggsOma8WwpY8L563zsYVmiVb.l21UqpZbSi', 1),
(18, 'Ali', 'Yassin', 'aliyassin@gmail.com', 'male', 'Nicaragua', '2018-09-17', '$2y$10$JHbTjrIiMwCNd5XvC/P6YeDCheoc8pKtwEDaLbOjDeBkDH6CdKH8q', 0),
(19, 'collins', 'baller', 'colnjomo32@yhoo.com', 'male', 'Kenya', '2018-09-05', '$2y$10$hkcuJRucSktoh6eC8z0gAOOBNcBF.EVhFUHzoATK8y1LtYvgtk3Ja', 0),
(21, 'Arthur', 'Boera', 'arthurboera@starthmore.edu', 'male', 'Rwanda', '1994-08-07', '$2y$10$VmDteIxQh5beMDQ3om8mBuDZHP6r0c9tLPq7JkiZ/QRXqxKtK5P7m', 0),
(24, 'Eric', 'Obuya', 'ericobuya33@gmail.com', 'male', 'SriLanka', '1989-06-13', '$2y$10$peUkTsdli1Fz5FRdEWU68OB6RnSzqtXjTfi/p33S4dwfj5hQgaH76', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_posts`
--
ALTER TABLE `product_posts`
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
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_posts`
--
ALTER TABLE `product_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
