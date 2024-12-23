-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 07:01 AM
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
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note_date` date DEFAULT curdate(),
  `content` text NOT NULL,
  `importance` enum('important','non-important') DEFAULT 'non-important'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `note_date`, `content`, `importance`) VALUES
(8, 'note 7', '2024-11-29', 'note7', 'important'),
(9, 'note ', '2024-11-29', 'note', 'important'),
(10, 'note 9', '2024-11-29', 'note 9', 'non-important');

-- --------------------------------------------------------

--
-- Table structure for table `savings_tracker`
--

CREATE TABLE `savings_tracker` (
  `id` int(11) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `savings_tracker`
--

INSERT INTO `savings_tracker` (`id`, `goal`, `amount`, `due_date`, `created_at`) VALUES
(1, 'House Rent', 300.00, '2024-12-01', '2024-11-27 20:52:00'),
(2, 'food', 300.00, '2024-12-06', '2024-11-27 20:53:56'),
(4, 'Airpods', 100.00, '2024-12-07', '2024-11-27 21:16:30'),
(8, 'ps4', 300.00, '2025-01-04', '2024-11-27 21:19:30'),
(9, 'House Rent 2', 400.00, '2024-12-07', '2024-11-27 21:51:24'),
(10, 'books', 200.00, '2024-12-06', '2024-11-28 20:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Todo','In Progress','Pending','Done') NOT NULL DEFAULT 'Todo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'testing my first task', 'Pending', '2024-11-24 20:42:39', '2024-11-26 21:19:27'),
(5, 'test20', 'test 20 update', 'Todo', '2024-11-25 19:18:54', '2024-11-26 22:52:50'),
(6, 'test3', 'testing my third task', 'Todo', '2024-11-25 19:20:07', '2024-11-26 21:21:15'),
(9, 'test6', 'testing my sixth task', 'Done', '2024-11-25 19:36:37', '2024-11-26 21:21:43'),
(10, 'test7', 'My 7th task', 'In Progress', '2024-11-26 21:35:27', '2024-11-26 21:35:27'),
(11, 'test 16', 'Testing new task', 'Done', '2024-11-26 22:53:23', '2024-11-26 22:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `type` enum('income','expense') NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `amount`, `description`, `date`, `created_at`) VALUES
(14, 'income', 3000.00, 'web gig', '2024-12-11', '2024-11-28 20:14:51'),
(27, 'expense', 3000.00, 'food', '2024-12-05', '2024-11-28 22:22:34'),
(29, 'income', 2000.00, 'salary', '2024-12-06', '2024-11-29 21:34:22'),
(30, 'income', 2000.00, 'web', '2024-11-28', '2024-11-29 22:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'prince', '123456789'),
(2, 'Ebere', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savings_tracker`
--
ALTER TABLE `savings_tracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `savings_tracker`
--
ALTER TABLE `savings_tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
