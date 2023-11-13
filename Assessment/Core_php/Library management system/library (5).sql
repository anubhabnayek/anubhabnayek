-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 07:54 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(15) NOT NULL,
  `category` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `Quantity` int(15) NOT NULL,
  `price` int(10) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `category`, `book_name`, `author`, `Quantity`, `price`, `created_at`, `updated_at`) VALUES
(13, 'Electronic', 'Electronic Commerce', 'electronic ', 5, 800, '2023-08-05', '2023-08-07'),
(14, 'Electrical', 'Industrial Power Engineering Handbook', 'K.C Agrawal', 4, 700, '2023-08-07', '2023-08-07'),
(16, 'Civil', 'Civil Engineering: Conventional and Objective Type', 'R.S. Khurmi\r\n\r\n', 5, 600, '2023-08-07', '2023-08-07'),
(17, 'computer', 'Electronic Commerce', 'sasds', 3, 33333, '2023-10-12', '2023-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `Std_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobileno` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(15) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`Std_id`, `fullname`, `mobileno`, `email`, `password`, `status`, `confirmpassword`, `created_at`, `updated_at`) VALUES
(23, 'anubhab nayek', '5544476765', 'anubhab122@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '827ccb0eea8a706c4c34a16891f84e7b', '2023-07-31', '2023-07-31'),
(24, 'anubhab nayek', '6384684646', 'anubhabnayek@gmail.com', '1537a56980b609ffc7e81a651d8f2680', 1, '1537a56980b609ffc7e81a651d8f2680', '2023-08-07', '2023-08-07'),
(25, 'Anubhab nayek', '3686835483', 'anubhabnayek11@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '81dc9bdb52d04dc20036dbd8313ed055', '2023-08-23', '2023-08-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`Std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `Std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
