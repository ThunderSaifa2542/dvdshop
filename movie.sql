-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 11:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` varchar(3) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `firstname`, `lastname`, `address`, `tel`) VALUES
('01', 'J.K. ', 'Rowling', 'England', '123'),
('02', 'Emma', 'Watson', 'England', '321'),
('03', 'Benedict ', 'Cumberbatch', 'Marvel', '111'),
('04', 'Tom', 'Hiddleston', 'Chonburi', '333'),
('05', 'Liam ', 'Neeson', 'Brazil', '222');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` varchar(3) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `firstname`, `lastname`, `address`, `tel`) VALUES
('01', 'kookik', 'kikkook', 'pathumthani', '122'),
('02', 'moo', 'yang', 'sakaew', '321'),
('03', 'moo', 'deng', 'chonburi', '111'),
('04', 'ped', 'paloo', 'krungthep', '222'),
('05', 'hed', 'orenji', 'japan', '333');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `information` varchar(30) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `information`, `duration`, `date`) VALUES
('01', 'spiderman', 'human got bite by spider', '2 hr', '2024-09-01'),
('02', 'dogman', 'human got bite by dog', '1 hr', '2024-09-02'),
('03', 'snakeman', 'human got bite by snake', '3 hr', '2024-09-03'),
('04', 'fishman', 'human got bite by fish', '4 hr', '2024-09-05'),
('05', 'moodengman', 'human got bite by moodeng', '10 hr', '2024-09-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
