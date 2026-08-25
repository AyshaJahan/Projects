-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 07:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `contact` char(11) NOT NULL,
  `passwords` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `passwords`) VALUES
(101, 'Adnan Chowdhury', 'chyadnan311@gmail.com', '1846884680', '0000'),
(102, 'aysha', 'aysha@gmail.com', '1576680843', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` varchar(20) NOT NULL,
  `Title` varchar(60) NOT NULL,
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
('CSE102', 'The C Programming Language', '7197f1497bb9328100848e797bf0073f.jpg', 'Dennis Ritchie', 15, 9),
('CSE103', 'C++ Primer (5th Edition)', '7964961eff4f9926dbce4d207fc4127d.jpg', 'Stanley B. Lippman, Josée Lajo', 10, 7),
('CSE104', 'The Hidden Language of Computer Hardware and Software', '80d63f4db159028e5ba5f21c36782ef5.jpg', 'Charles Petzold', 12, 10),
('CSE105', 'Introduction to Algorithms (3rd Edition) ', '871bfb53a1ed4cf10a7433c2a50ea5a0.jpg', 'Thomas H. Cormen, Charles E. L', 13, 12),
('CSE106', 'Algorithms (4th Edition) ', '2a39b1e52f695c658189450dc605cd4e.jpg', 'Robert Sedgewick , Kevin Wayne', 15, 13),
('CSE107', 'The self -Taught computer Scientist ', 'bd4eea81c8810683b83652359a1745ad.jpg', 'Cory Altghoff', 12, 10),
('CSE108', 'The Computer science Book:A complete introduction', 'cd22ceb843af27e559b5abca44a9a55a.jpg', 'Thomas Johnson', 15, 7),
('CSE109', 'Everything you need to know to ace computer Scince and codin', 'f2a354bce6021dc87ed6cdd9719bf0e0.jpg', 'Workman Publishing', 18, 15),
('EEE101', 'Alternating – Current Machines ', 'a5bab3189083c81d10209586c424d4af.jpeg', 'A. F. Puchstein ', 5, 5),
('EEE102', 'Control System Engineering', '0f88d84eabb103acd9c2d6d968feffa9.jpeg', 'Norman S. Nise ', 15, 9),
('EEE103', 'Electrical Measurements and Measuring  Instruments', '1776e7e02ef696a2ce297491af8c04f5.webp', 'E. W. Golding', 10, 7),
('EEE105', 'Basic Electronics: solid state ', '27403bc71945d619a8e78602104042ae.jpeg', 'B. L. Theraja ', 13, 12),
('EEE106', 'Digital Communications ', '8cd9b4cc6b303adcca38c4121c7b6e44.jpeg', 'Simon Haykin ', 7, 4),
('EEE107', 'Antenna & Wave Propagation ', 'a69208f662f6364f5e5e30a22254623c.jpeg', 'K.D. Prasad', 20, 15),
('EEE109', 'Electrical Engineering Materials ', '3aef8f407182ed72d42959537faea131.JPG', 'Adrianus J. Dekker ', 15, 9),
('EEE110', 'Fundamentals of Electric Circuits ', '86b390c97b7da911213812162d971696.jpeg', 'Charles K. Alexander &  Matthe', 5, 3);

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
