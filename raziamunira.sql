-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 02:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raziamunira`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('unread','read','responded_to') DEFAULT 'unread',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_at` timestamp NULL DEFAULT NULL,
  `responded_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `read_at`, `responded_at`) VALUES
(1, 'Miss Kathryn Anderson V', 'gibson.keon@example.com', 'Test mic check', 'Hello my love', 'responded_to', '2024-01-20 15:30:42', NULL, NULL),
(2, 'John Doe', 'john.doe@example.com', 'General Inquiry', 'Hello, I have a question about your services.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(3, 'Alice Smith', 'alice.smith@example.com', 'Product Support', 'I need assistance with a product issue.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(4, 'Bob Johnson', 'bob.johnson@example.com', 'Partnership Proposal', 'Interested in discussing a potential partnership.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(5, 'Eva Wilson', 'eva.wilson@example.com', 'Job Application', 'Applying for a job opportunity at your company.', 'read', '2024-01-21 11:28:29', NULL, NULL),
(6, 'Michael Brown', 'michael.brown@example.com', 'Feedback', 'Providing feedback on your recent service.', 'responded_to', '2024-01-21 11:28:29', NULL, NULL),
(7, 'Sophia Miller', 'sophia.miller@example.com', 'Customer Complaint', 'Unsatisfied with the recent experience, need assistance.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(8, 'Daniel Davis', 'daniel.davis@example.com', 'Technical Support', 'Experiencing technical issues, need urgent help.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(9, 'Olivia Martinez', 'olivia.martinez@example.com', 'Event Inquiry', 'Interested in attending your upcoming event.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(10, 'William Taylor', 'william.taylor@example.com', 'Product Inquiry', 'Considering purchasing your product, have some questions.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(11, 'Emma Wilson', 'emma.wilson@example.com', 'Partnership Inquiry', 'Interested in exploring a potential partnership opportunity.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(12, 'Liam Johnson', 'liam.johnson@example.com', 'General Inquiry', 'Hello, I have a question about your services.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(13, 'Ava Davis', 'ava.davis@example.com', 'Product Support', 'I need assistance with a product issue.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(14, 'Noah Smith', 'noah.smith@example.com', 'Partnership Proposal', 'Interested in discussing a potential partnership.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(15, 'Isabella Wilson', 'isabella.wilson@example.com', 'Job Application', 'Applying for a job opportunity at your company.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(16, 'James Johnson', 'james.johnson@example.com', 'Feedback', 'Providing feedback on your recent service.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(17, 'Sophia Taylor', 'sophia.taylor@example.com', 'Customer Complaint', 'Unsatisfied with the recent experience, need assistance.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(18, 'Benjamin Davis', 'benjamin.davis@example.com', 'Technical Support', 'Experiencing technical issues, need urgent help.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(19, 'Mia Martinez', 'mia.martinez@example.com', 'Event Inquiry', 'Interested in attending your upcoming event.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(20, 'Ethan Wilson', 'ethan.wilson@example.com', 'Product Inquiry', 'Considering purchasing your product, have some questions.', 'unread', '2024-01-21 11:28:29', NULL, NULL),
(21, 'Amelia Taylor', 'amelia.taylor@example.com', 'Partnership Inquiry', 'Interested in exploring a potential partnership opportunity.', 'unread', '2024-01-21 11:28:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `uuid` varchar(36) NOT NULL DEFAULT 'UUID()',
  `user_name` varchar(255) DEFAULT NULL,
  `user_image_url` varchar(255) DEFAULT NULL,
  `review_title` text DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `viewable` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `uuid`, `user_name`, `user_image_url`, `review_title`, `review_text`, `viewable`, `created_at`, `updated_at`) VALUES
(5, '02b7a7be-b85c-11ee-ae53-a4bb6d040e5e', 'John Doe', '', '', 'Razia Munira provided excellent care and support. Highly recommended!', 0, '2024-01-19 16:43:55', '2024-01-21 12:52:59'),
(6, 'fbb426dd-b6e9-11ee-ae53-a4bb6d040e5e', 'Jane Smith', 'jane-smith.jpg', NULL, 'Unfortunately, I had a bad experience with Razia Munira. The communication was poor.', 0, '2024-01-19 16:44:17', '2024-01-19 16:44:17'),
(7, '7dbb321d-b786-11ee-ae53-a4bb6d040e5e', 'Alice Johnson', 'testimonial_65abad708afc5.jpg', '', 'Razia Munira was average in her service. Nothing exceptional but got the job done.', 1, '2024-01-19 16:45:30', '2024-01-20 11:24:32'),
(8, '605b1d88-b783-11ee-ae53-a4bb6d040e5e', 'Bob Anderson', 'testimonial_65aba836c88e5.jpg', 'Designer', 'Razia Munira is a caring and dedicated nurse and midwife. I appreciate her services.', 1, '2024-01-19 16:45:43', '2024-01-20 11:02:14'),
(12, '76c18fbf-b782-11ee-ae53-a4bb6d040e5e', 'Jordan Katetegirwe', 'testimonial_65aba6aed7f0c.jpg', 'love of my life', 'i almost died. but i survived', 0, '2024-01-19 19:14:07', '2024-01-20 10:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'example_user', 'password'),
(2, 'jordan', '$2y$10$hdXBG/jlvF6J1E172Yjga.FJ9uGctNbPZiESJynDgiJIwRPo3Q/Ry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
