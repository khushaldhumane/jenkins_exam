-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql203.unaux.com
-- Generation Time: May 16, 2023 at 01:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_34099345_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'khushaldhumane', '$2y$10$8gVu5z3UtnXAPQs5eTKu3.AnE/AQbApxMdKQy4vrgl7chbkIBL2je', '0000-00-00 00:00:00'),
(2, 'khushaldhumane1234', '$2y$10$l50OFJ4OFTkzSB9xVabG1.2QJjOVuqc/0b3f/AGKYdG/hOOOiZI5u', '0000-00-00 00:00:00'),
(3, 'khushaldhumane@gmail.com', '$2y$10$WC6wUvMWp5Rzq72Mo8ztBOYE4T0w4Qr6wz/oavfxS5pgLzyJwU.VC', '0000-00-00 00:00:00'),
(4, 'khushal1', '$2y$10$Zh017jbfu9kTCubj8jOO3OX4V8PXgYzcNikl1/X4GOpMGEQidWwSm', '0000-00-00 00:00:00'),
(5, 'kd123', '$2y$10$6S4iJOe8B0/U52ZYroIw7us6DZ5ZhqMaToteMwyFPfP9sarfH3gMO', '0000-00-00 00:00:00'),
(6, 'khushal', '$2y$10$xwnDy2dQ.dYiURiKQpMkZOAUDjkhaJzRvAli73Kg5kJ5ApdXs7Bcy', '0000-00-00 00:00:00'),
(7, 'kdkhushal', '$2y$10$v5wCiJRRRmfu2nczSszLMehjAE2i4mHfFcjq5ce.nWAACgyisnB5e', '0000-00-00 00:00:00'),
(8, 'kdkhu', '$2y$10$MWP1SJZ3tYJNC9NP2txqje..dkunCWWSzwXtIjGudXn1pFPJQ9GUK', '0000-00-00 00:00:00'),
(9, 'khukhu', '$2y$10$840vX9nCm4LiTGwdexp1xerVCfjpJwdocBLhvt4ec7rqivqnDL.8m', '0000-00-00 00:00:00'),
(10, 'Khushal Dhumane', '$2y$10$lW8X5wK.jbqmHzpbU6BwWub0exei89ixt21NYj4GYfbuC5QL.x9fy', '0000-00-00 00:00:00'),
(11, 'Rohit Roy', '$2y$10$CX3HxXckZvEK96XE8Cjc6eCM5zU9IPZ4oglVvYy8gPGY5TXty7hda', '0000-00-00 00:00:00'),
(12, 'this kd', '$2y$10$1Q4fVn8EMosvoEpL4fDmouavDp6e7ExeUAnLtyQoRNBpN6vX1dRqa', '0000-00-00 00:00:00'),
(13, 'meghna', '$2y$10$nyB3Do0XV4ZTJNo4U1YvWO6ZZz3aZ8.1tWuCUvaIeB3CEoaGiUUZK', '0000-00-00 00:00:00'),
(14, 'shikhar upadhyay', '$2y$10$gE4R6CVYu9ICbHMMFeZyae3AusOhUx5eSNy4/7XWeTcVCf7WBh6za', '0000-00-00 00:00:00'),
(15, 'Atharva', '$2y$10$.0p4YQyPQrRv.3GoXFLqkeiN5hlZuSR3rlXt1ijxcRdnJJ/yhAyU.', '0000-00-00 00:00:00'),
(16, 'Kunal', '$2y$10$/gouJx3/gptITLMI.U7XN.NRusGPAgNjmRokknCw0FJP6c2600ZUa', '0000-00-00 00:00:00'),
(17, 'abhilasha', '$2y$10$dHjJ001u7amXCrCOvDY8NeC3Ou5VB.SOmKTUuXYcvK4enS7QAtbIO', '0000-00-00 00:00:00'),
(18, 'Siddhi borhade', '$2y$10$iA81myfFrDZK1Px4qA2SDOLxv.YD4rXmcU5Xwpxc76QcVF3RZsHA2', '0000-00-00 00:00:00'),
(19, 'Kiran', '$2y$10$13k09Ii47.Z1VSUdZMOJg.qVXLWcqUwbZ5wt6A/zRsLyVYhdbB7Za', '0000-00-00 00:00:00'),
(20, 'prem', '$2y$10$dzfn9CW1Zk5ewk3FO2rhzeM5L0aYTiZQ5158c4AoWuWLIn27oueD.', '0000-00-00 00:00:00'),
(21, 'meghna dohare', '$2y$10$FQBHZGQIdZl0XhPFZUla5e92Chp5zNuvtgtxKkSxqm1k49OToT.na', '0000-00-00 00:00:00'),
(22, 'kushagra', '$2y$10$R53ppP6T.DYWd7pjYw/7a.onrk5NHbw75xiiQUq79RCximFIXzSTS', '0000-00-00 00:00:00'),
(23, 'Sanchit', '$2y$10$X4JjlSdTe/fvB.2wjTvl5.P3ksFf4m1QBpJwagoneXgdqAahl.7Pm', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
