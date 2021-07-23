-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 05:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metoza`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_m`
--

CREATE TABLE `login_m` (
  `login_id` int(255) NOT NULL,
  `login_name` varchar(255) NOT NULL,
  `login_email` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_m`
--

INSERT INTO `login_m` (`login_id`, `login_name`, `login_email`, `login_password`) VALUES
(101, '', 'metozaindustries88@gmail.com', 'metoza@123'),
(101, 'Metoza', 'metozaindustries88@gmail.com', 'metoza123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(255) NOT NULL,
  `p_amazon_link` varchar(255) NOT NULL,
  `p_flipkart_link` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_amazon_link`, `p_flipkart_link`, `p_image`) VALUES
(7, 'Ghadi', 344, 'https://www.youtube.com/', 'https://www.youtube.com/', '../Image/solen-feyissa-ao3VF36gi1c-unsplash.jpg'),
(8, 'people', 33, 'https://www.youtube.com/', 'https://www.youtube.com/', '../Image/mohammed-eissa-zuvACqYcS8Y-unsplash.jpg'),
(10, 'Watch', 34, 'https://www.youtube.com/', 'https://www.youtube.com/', '../Image/alvaro-serrano-pFLNV4gkXsc-unsplash.jpg'),
(11, 'galo', 450, 'https://www.w3schools.com/quiztest/quiztest.asp?qtest=HTML', 'https://www.w3schools.com/quiztest/quiztest.asp?qtest=HTML', '../Image/sebastian-banasiewcz-oXXc-s5nNy8-unsplash.jpg'),
(13, 'Watch23', 560, 'https://www.w3schools.com/quiztest/quiztest.asp?qtest=HTML', 'https://www.youtube.com/', '../Image/clement-remond-vGo1odpniYM-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
