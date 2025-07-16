-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2025 at 04:58 PM
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
-- Database: `crud_onlinecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `Course_Id` int(11) NOT NULL,
  `Course_Name` varchar(100) DEFAULT NULL,
  `Descriptions` varchar(200) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`Course_Id`, `Course_Name`, `Descriptions`, `Category`, `Start_Date`, `Created_at`, `Updated_at`) VALUES
(1, 'BAHASA INGGRIS', 'Belajar bahasa Inggris dari dasar dengan mudah', 'BAHASA', '2025-07-15', '2025-07-09 04:33:41', '2025-07-16 06:27:27'),
(2, 'BAHASA ARAB', 'Belajar bahasa Arab dengan mudah', 'BAHASA', '2025-07-25', '2025-07-10 06:11:26', '2025-07-16 03:39:51'),
(3, 'MACHINE LEARNING', 'Belajar Machine Learning dengan mudah', 'DATA DAN AI', '2025-07-24', '2025-07-10 06:15:11', '2025-07-16 03:41:46'),
(4, 'PUBLIC SPEAKING', 'Belajar Public Speaking dengan mudah', 'PENGEMBANGAN DIRI', '2025-07-25', '2025-07-10 06:36:00', '2025-07-16 03:51:08'),
(5, 'DATA SCIENCE', 'Belajar analis data dengan mudah', 'DATA DAN AI', '2025-07-28', '2025-07-14 11:18:26', '2025-07-16 07:44:58'),
(6, 'UI/UX', 'Belajar web desain dengan mudah', 'DESAIN GRAFIS', '2025-07-15', '2025-07-14 11:16:02', '2025-07-16 03:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Students_Id` int(11) NOT NULL,
  `Course_Id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone_Number` varchar(15) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Students_Id`, `Course_Id`, `Name`, `Email`, `Phone_Number`, `Created_at`, `Updated_at`) VALUES
(1, 1, 'Nayarra', 'nayarrara@gmail.com', '085870426544', '2025-07-11 05:18:27', '2025-07-16 07:47:00'),
(2, 1, 'Amira Zahira', 'amramira@gmail.com', '081234567891', '2025-07-11 08:12:27', '2025-07-11 08:15:52'),
(3, 2, 'Alna', 'alnaaalan@gmail.com', '085812345678', '2025-07-16 03:52:49', '2025-07-16 03:52:49'),
(4, 4, 'Nayra', 'nayraaaanay@gmail.com', '082123456789', '2025-07-16 03:53:45', '2025-07-16 03:53:45'),
(5, 5, 'Naza', 'nazzznaza@gmail.com', '088922334455', '2025-07-16 03:54:46', '2025-07-16 03:54:46'),
(6, 6, 'Tania', 'taniatantania@gmail.com', '082122334488', '2025-07-16 03:56:23', '2025-07-16 03:56:23'),
(7, 3, 'Kanayya', 'kanayya@gmail.com', '082133008800', '2025-07-16 03:58:21', '2025-07-16 03:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id_User` int(3) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id_User`, `Nama`, `Email`, `Password`, `Created_at`, `Updated_at`) VALUES
(1, 'Fadira', 'fadiraericaa@gmail.com', 'Dira111.', '2025-07-14 14:15:37', '2025-07-14 14:15:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`Course_Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Students_Id`),
  ADD KEY `fk_course` (`Course_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `Course_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Students_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id_User` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`Course_Id`) REFERENCES `course_categories` (`Course_Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
