-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 09:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `passwords` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `passwords`) VALUES
(101, 'Adnan Chowdhury', 'chyadnan311@gmail.com', 1846884680, '0000'),
(102, 'aysha', 'aysha@gmail.com', 1576680843, '1111');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` varchar(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Book_image` varchar(500) NOT NULL,
  `Author_name` varchar(30) DEFAULT NULL,
  `Total_quantity` int(11) NOT NULL,
  `Available_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `Title`, `Book_image`, `Author_name`, `Total_quantity`, `Available_quantity`) VALUES
('cse101', 'the chip', '29e4ab21c44665aeed020d745bc56adf.jpg', 'T. Reid', 15, 10),
('cse555', 'algorithms', 'd3d0b2a5358d28d226b0ef14fb5f9f59.jpg', 'Robert Sedgewick and Kevin Way', 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `name` varchar(50) NOT NULL,
  `id` int(15) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  `dept` char(30) DEFAULT NULL,
  `passwords` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`name`, `id`, `email`, `mobile`, `dept`, `passwords`) VALUES
('eraz', 2285, 'eraz@gmail.com', 1690000276, 'cse', '4444'),
('ove', 2296, 'ove@gmail.com', 1812856123, 'cse', '3333'),
('adnan', 2297, 'chyadnan@gmail.com', 1846884680, 'cse', '1111'),
('aysha', 2302, 'aysha@gmail.com', 1576680843, 'cse', '2222'),
('faria', 2309, 'faria@gmail.com', 123, 'cse', '6666'),
('siam', 2312, 'siam@gmail.com', 1978808504, 'cse', '5555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
