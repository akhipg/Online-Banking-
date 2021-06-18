-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 11:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `telnum` bigint(25) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `lastname`, `telnum`, `emailid`, `feedback`) VALUES
(18, 'Akhilesh', 'Gavhane', 8433795821, 'akhipg@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Akhilesh Gavhane', 'Arohi Shinde', 10000, '2021-06-04 20:14:14'),
(2, 'Purva Chalke', 'Akhilesh Gavhane', 5000, '2021-06-04 20:40:12'),
(5, 'Arohi Shinde', 'Gaurav Mayekar', 100, '2021-06-13 21:24:42'),
(6, 'Purva Chalke', 'Arohi Shinde', 1000, '2021-06-13 21:29:41'),
(7, 'Akhilesh Gavhane', 'Arik Mondal', 800, '2021-06-18 12:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` char(50) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `Email`, `Amount`) VALUES
(1, 'Akhilesh Gavhane', 'akhipg@gmail.com', 44000),
(2, 'Rutik Gurav', 'rutikgurav@gmail.com', 25000),
(3, 'Gaurav Mayekar', 'mayekargaurav@gmail.com', 25000),
(4, 'Purva Chalke', 'purva08@gmail.com', 57050),
(5, 'Gautami Sane', 'gausane@gmail.com', 45000),
(6, 'Akshita Anchan', 'akshi23@gmail.com', 14300),
(7, 'Arik Mondal', 'arikmo@gmail.com', 20800),
(8, 'Megha Kharvi', 'megha09@gmail.com', 25200),
(9, 'Arohi Shinde', 'aroshinde@gmail.com', 12000),
(10, 'Akhilesh Jadhav', 'akhilesh20@gmail.com', 11650);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
