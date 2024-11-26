-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 11:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elvi`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptedclients`
--

CREATE TABLE `acceptedclients` (
  `id` int(100) NOT NULL,
  `PrimaryName` varchar(100) NOT NULL,
  `BrideName` varchar(100) NOT NULL,
  `GroomName` varchar(1000) NOT NULL,
  `ContactNum` varchar(50) NOT NULL,
  `WeddingDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acceptedclients`
--

INSERT INTO `acceptedclients` (`id`, `PrimaryName`, `BrideName`, `GroomName`, `ContactNum`, `WeddingDate`) VALUES
(1, 'kncjsdbv', 'bhjcbhsbdhvbh', 'bsdv ds', 'hjb hsh', '8802-08-07 20:20:00'),
(2, 'f vjsnjn', 'nsdnvnsjn', 'njndsvjdnsj', 'nkjvnsd', '2002-02-05 02:05:00'),
(3, 'vrsn vjbvsnn', 'njbvbd', 'sfvbs', 'befhcbhs', '0005-04-05 02:02:00'),
(4, 'bucbdsz', 'bbdsb', 'jbsdvb', '7894561230', '2024-09-18 19:49:00'),
(5, 'dvdmk', 'q j vbd', 'mn vkjd', 'j bdjkbvjks', '2024-09-18 19:49:00'),
(6, 'ffv jkdh', 'HBHDSBV BDSBV', 'BSHVBDBSHVBH', '8794561230', '2024-09-18 19:50:00'),
(7, 'VNDNIQD NJBD', 'BHVBHJDBSHV', 'BHJBVBSDHVB', '7894561230', '0122-01-02 02:02:00'),
(8, 'dfnjvnnjnf vd', 'njn dnfjkvjndfjnn', 'njnjnvndnvnrdvnjdnj', 'jnjnjensvnenwnce', '2024-09-18 19:51:00'),
(9, 'vdfsmkmkm', 'knnfvj djfnjknn', 'njnjdnvndjnsjnk', '894515158948453', '2024-09-18 19:52:00'),
(10, 'vdfsvnsnbjn', 'jnbnvcsnn', 'jNENANCJS', '87CS51V5S46', '2024-09-18 19:52:00'),
(11, 'V FDXNBB', 'BBVHBDVBB', 'BHSBVHBSDHB', '7894561230', '0555-05-05 05:05:00'),
(12, 'rvdnv', 'jjnvjnjn', 'jnnjvdjrvk', '7894561230', '0002-02-22 02:02:00'),
(13, 'snsjdnvnj', 'njnnvndn ', 'jknsffnvjdv', 'ddvnjkdnjv ', '0002-02-02 02:02:00'),
(14, '4', '7', '554', '51', '0005-06-05 05:06:00'),
(15, 'vdfnjnn', 'jnvndsnv', 'jknsjjvs', '7894561230', '0005-01-01 02:02:00'),
(16, 'Try', 'ds ', 'dsvs', '8785412369', '0001-01-01 02:02:00'),
(17, 'cbsjc', 'hjcbsn', ' hcjb', '7896541233', '0002-02-01 02:02:00'),
(18, 'user1', 'user1', 'user1', '7894561230', '2002-02-02 01:01:00'),
(19, 'user2', 'user2', 'user2', '7896541230', '0002-02-02 02:02:00'),
(20, 'user3', 'user3', 'suser3', '5698741230', '5555-05-05 06:02:00'),
(21, 'Saanchi', 'Saanchi', 'Saanchi', '7412589630', '2024-09-20 12:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `PrimaryName` varchar(100) NOT NULL,
  `BrideName` varchar(100) NOT NULL,
  `GroomName` varchar(100) NOT NULL,
  `ContactNum` varchar(50) NOT NULL,
  `WeddingDate` datetime NOT NULL,
  `status` varchar(20) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`PrimaryName`, `BrideName`, `GroomName`, `ContactNum`, `WeddingDate`, `status`) VALUES
('vdjvbjj', 'jndjdsnvndsn', '  BJDSNVNSN', 'JHJNHJHYH', '0088-08-08 08:08:00', 'rejected'),
('1', '1', '1', '1', '0001-01-01 01:01:00', 'rejected'),
('2', '2', '2', '2', '0002-02-02 02:02:00', 'rejected'),
('3', '3', '3', '3', '0033-03-03 03:03:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('bdnbjknd', '\\vdfkfbjknd', 'jnvjdnjrnvk', 'dkbvdjnbjk', '8888-08-08 08:08:00', 'rejected'),
('acbvbjsdkj', 'csnjcnwlcs', 'djkvnxcmv e', 'dbbejksd isvnd', '0008-08-08 08:08:00', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `location` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('admin','user') NOT NULL,
  `gdladmin` varchar(100) NOT NULL,
  `gdlclient` varchar(100) NOT NULL,
  `uploadphotos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `location`, `username`, `password`, `user_type`, `gdladmin`, `gdlclient`, `uploadphotos`) VALUES
(12, 'kunal', 'kunal', 'kunal', 'kunal', 'kunal', 'user', 'https://open.spotify.com/', 'https://open.spotify.com/', 'www.google.com'),
(13, 'hbdsbvksn', 'nsnvsdv ', 'jnjkvnskd vm', 'saanchi', 'saanchi', 'user', 'open.spotify.com', '', ''),
(14, 'afnfkds', 'nsdnvjkdsv', 'sdkvnsdv', 'harshika', 'harshika', 'admin', '', '', ''),
(15, 'sejal', 'sejal', 'pune', 'sejal', 'sejal', 'user', 'https://docs.google.com/spreadsheets/d/17ONDj2jPEqNudVhS9icJCvaxcr-D-YuIAtKHCkj8VRY/edit?resourcekey', 'https://docs.google.com/spreadsheets/d/17ONDj2jPEqNudVhS9icJCvaxcr-D-YuIAtKHCkj8VRY/edit?usp=sharing', ''),
(16, 'sejal', 'sejal', 'pune', 'sejal', 'sejal', 'admin', 'https://docs.google.com/spreadsheets/d/17ONDj2jPEqNudVhS9icJCvaxcr-D-YuIAtKHCkj8VRY/edit?resourcekey', 'https://docs.google.com/spreadsheets/d/17ONDj2jPEqNudVhS9icJCvaxcr-D-YuIAtKHCkj8VRY/edit?usp=sharing', ''),
(17, 'namuni', 'namuni', 'namuni', 'namuni', 'namuni', 'admin', '', '', ''),
(18, 'Something random', 'Clients', 'pune', 'user', 'user', 'admin', 'www.google.com', 'www.google.com', 'www.google.com'),
(19, 'Saanchi weds Someone', 'Destination', 'USA', 'saanchi', 'saanchikukreja', 'user', 'https://docs.google.com/spreadsheets/d/1JoI7zCjEh1GsbIGhMZ22SW16O6wkpihmGwRbmbsYC_8/edit?pli=1&gid=0', 'https://docs.google.com/spreadsheets/d/1JoI7zCjEh1GsbIGhMZ22SW16O6wkpihmGwRbmbsYC_8/edit?usp=sharing', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `items` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `wedding_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `google_drive_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `wedding_name`, `date`, `google_drive_link`, `created_at`) VALUES
(1, 'Wedding1', '2024-09-19', 'https://docs.google.com/spreadsheets/d/1JoI7zCjEh1GsbIGhMZ22SW16O6wkpihmGwRbmbsYC_8/edit?usp=sharing', '2024-09-11 09:15:27'),
(2, 'Wedding 2', '2024-09-26', 'https://docs.google.com/presentation/d/1jOi4EJxd4U87EfKLKfd2yS3yC-wYBgWwYR5i6DS8MO8/edit?usp=sharing', '2024-09-11 09:28:44'),
(3, 'Wedding1', '2024-09-12', 'https://drive.google.com/drive/folders/1wfNTKinBAV6CCxaI5lfSnnRFAYpy0uEl', '2024-09-11 10:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','client') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'adminuser', 'admin123', 'admin', '2024-09-10 18:57:01'),
(2, 'clientuser1', 'client1', 'client', '2024-09-10 18:57:01'),
(3, 'clientuser2', 'client2', 'client', '2024-09-10 18:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `username`, `password`, `user_type`) VALUES
(2, 'harshika', 'harshika@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', 'user'),
(3, 'harshika', 'harshikaj@gmail.com', 'cf13733306205eb0a01fffcaef2e2434', 'admin'),
(4, 'sejal@gmail.com', 'sejal@gmail.com', '668f6cdf7cb09c5e856bee4dbe22b048', 'admin'),
(5, 'user1', 'user@gmail.com', '6ad14ba9986e3615423dfca256d04e3f', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptedclients`
--
ALTER TABLE `acceptedclients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptedclients`
--
ALTER TABLE `acceptedclients`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
