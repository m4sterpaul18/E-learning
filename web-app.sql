-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 03:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `student-id` varchar(50) NOT NULL,
  `points` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `section` varchar(5) NOT NULL,
  `student-id` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `section`, `student-id`, `password`, `created_at`, `updated_at`) VALUES
('Chad', 'Cirera', 'A', '2018-01918', '$2y$10$c/g2vPOQbA1Lxydi30hyKuXYKQUtK6yDhU2Ld.HocxKdjEzbbgz4G', '2021-09-11 13:15:31', '2021-09-11 13:15:31'),
('Chad', 'Cirera', 'A', '2018-01923', '$2y$10$2OF51W3a8ceONxgn4g.gcusKxrDDW0cOe72sb53WvHmIf42VJvUKq', '2021-09-11 13:46:50', '2021-09-11 13:46:50'),
('Gwen', 'Gagam', 'B', '2018-11111', '$2y$10$PvwA/KRcuqjCRYjeEF1YUutWzfoW8ND4pc8V5o/wbGHCSfdlMcqSm', '2021-09-11 14:36:28', '2021-09-11 14:36:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD KEY `foreign_key` (`student-id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`student-id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `foreign_key` FOREIGN KEY (`student-id`) REFERENCES `users` (`student-id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
