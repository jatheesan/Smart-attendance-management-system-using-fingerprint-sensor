-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 08:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

create database attendance;
use attendance;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_code` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistant_lect_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_code`, `course_name`, `course_level`, `lect_id`, `assistant_lect_id`, `created_at`, `updated_at`) VALUES
/* 1S COURSES */
(1, 'CSC101S3', 'Foundations of Computer Science', '1S', 'A. Ramanan', ' K. Tharmini', NULL, NULL),
(2, 'CSC102S3', 'Computer Programming I', '1S', 'J. Samantha Tharani', 'J. Janani', NULL, NULL),
(3, 'CSC103S3', 'Introduction to Computer Systems', '1S', 'E. Y. A. Charles', ' K. Tharmini', NULL, NULL),
(4, 'CSC104S2', 'Mathematics for Computing I', '1S', '', 'J. Janani', NULL, NULL),
(5, 'CSC105S3', 'Statistics for Computing I', '1S', '', ' K. Tharmini', NULL, NULL),
(6, 'CSC106S3', 'Human Computer Interaction', '1S', '(Mrs). B. Mayurathan', 'J. Janani', NULL, NULL),
(7, 'CSC107S2', 'Multimedia Technologies', '1S', 'M. Siyamalan', ' K. Tharmini', NULL, NULL),
(8, 'CSC108S2', 'Design of Algorithms', '1S', 'S. Suthakar', 'J. Janani', NULL, NULL),
(9, 'CSC109S2', 'Introduction to Computer Security and Cryptography', '1S', 'S. Mahesan', 'J. Janani', NULL, NULL),
(10, 'CSC110S2', 'Organisational Behaviour', '1S', '', 'J. Janani', NULL, NULL),
(11, 'CSC111S2', 'Mathematics for Computing II', '1S', '', ' K. Tharmini', NULL, NULL),
(12, 'CSC112S3', 'Statistics for Computing II', '1S', '', 'J. Janani', NULL, NULL),

/* 1G COURSES */
(13, 'CSC101G3', 'Foundations of Computer Science', '1G', 'A. Ramanan', ' K. Tharmini', NULL, NULL),
(14, 'CSC102G3', 'Computer Programming I', '1G', 'J. Samantha Tharani', 'J. Janani', NULL, NULL),
(15, 'CSC103G2', 'Multimedia Technologies', '1G', 'M. Siyamalan', ' K. Tharmini', NULL, NULL),
(16, 'CSC104G2', 'Design of Algorithms', '1G', 'S. Suthakar', 'J. Janani', NULL, NULL),

/* 2S COURSES */
(17, 'CSC201S2', 'Database Systems Concepts and Design', '2S', '(Mrs). B. Mayurathan', ' K. Tharmini', NULL, NULL),
(18, 'CSC202S2', 'Computer Programming II', '2S', 'S. Suthakar', 'J. Janani', NULL, NULL),
(19, 'CSC203S2', 'Operating Systems', '2S', 'M. Siyamalan', ' K. Tharmini', NULL, NULL),
(20, 'CSC204S2', 'Data Structures & Algorithms', '2S', 'S. Suthakar', 'J. Janani', NULL, NULL),
(21, 'CSC205S2', 'Software Engineering', '2S', '', ' K. Tharmini', NULL, NULL),
(22, 'CSC206S2', 'Mathematics for Computing III', '2S', '', 'J. Janani', NULL, NULL),
(23, 'CSC207S4', 'Computer Architecture', '2S', 'E. Y. A. Charles', 'J. Janani', NULL, NULL),
(24, 'CSC208S3', 'Concepts of Programming Languages', '2S', 'S. Mahesan', 'J. Janani', NULL, NULL),
(25, 'CSC209S3', 'Bioinformatics', '2S', '(Mrs). B. Mayurathan', ' K. Tharmini', NULL, NULL),
(26, 'CSC210S3', 'Web Technologies', '2S', 'J. Samantha Tharani', '', NULL, NULL),
(27, 'CSC211S3', 'Emerging Trends in Computer Science', '2S', 'J. Samantha Tharani', 'J. Janani', NULL, NULL),
(38, 'CSC212S2', 'Professional Practice', '2S', 'K. Thabotharan', 'J. Janani', NULL, NULL),

/* 2G COURSES */
(29, 'CSC201G2', 'Database Systems Concepts and Design', '2G', '(Mrs). B. Mayurathan', ' K. Tharmini', NULL, NULL),
(30, 'CSC202G2', 'Computer Programming II', '2G', 'S. Suthakar', 'J. Janani', NULL, NULL),
(31, 'CSC203G2', 'Operating Systems', '2G', 'M. Siyamalan', ' K. Tharmini', NULL, NULL),
(32, 'CSC204G2', 'Data Structures & Algorithms', '2G', 'S. Suthakar', 'J. Janani', NULL, NULL),
(33, 'CSC205G2', 'Software Engineering', '2G', 'J. Samantha Tharani', ' K. Tharmini', NULL, NULL),

/* 3S COURSES */
(34, 'CSC301S3', 'Rapid Application Development', '3S', 'J. Samantha Tharani', ' K. Tharmini', NULL, NULL),
(35, 'CSC302S2', 'Computer Programming III', '3S', 'S. Suthakar', ' K. Tharmini', NULL, NULL),
(36, 'CSC303S2', 'Data Communication and Computer Networks', '3S', 'K. Thabotharan', 'J. Janani', NULL, NULL),
(37, 'CSC304S3', 'Team Software Project', '3S', 'S. Mahesan', ' K. Tharmini', NULL, NULL),
(38, 'CSC305S2', 'Graphics and Visual Computing', '3S', 'S. Suthakar', 'J. Janani', NULL, NULL),
(39, 'CSC306S3', 'Advanced Database Design and Systems', '3S', 'E. Y. A. Charles', 'J. Janani', NULL, NULL),
(40, 'CSC307S3', 'Advanced Topics in Computer Networks', '3S', 'K. Thabotharan', ' K. Tharmini', NULL, NULL),
(41, 'CSC308S3', 'Artificial Intelligence', '3S', 'S. Mahesan', 'J. Janani', NULL, NULL),
(42, 'CSC309S3', 'High Performance Computing', '3S', 'S. Suthakar', ' K. Tharmini', NULL, NULL),
(43, 'CSC310S3', 'Image Processing and Computer Vision', '3S', 'A. Ramanan', 'J. Janani', NULL, NULL),
(44, 'CSC311S3', 'Machine Learning', '3S', 'A. Ramanan', ' K. Tharmini', NULL, NULL),
(45, 'CSC312S3', 'Mobile Computing', '3S', 'K. Thabotharan', 'J. Janani', NULL, NULL),

/* 3G COURSES */
(46, 'CSC301G3', 'Rapid Application Development', '3G', 'J. Samantha Tharani', ' K. Tharmini', NULL, NULL),
(47, 'CSC302G2', 'Computer Programming III', '3G', 'S. Suthakar', 'J. Janani', NULL, NULL),
(48, 'CSC303G2', 'Data Communication and Computer Networks', '3G', 'K. Thabotharan', ' K. Tharmini', NULL, NULL),
(49, 'CSC304G3', 'Team Software Project', '3G', 'S. Mahesan', ' K. Tharmini', NULL, NULL),
(50, 'CSC305G2', 'Graphics and Visual Computing', '3G', 'S. Suthakar', 'J. Janani', NULL, NULL),

/* 3M COURSES */
(51, 'CSC301M3', 'Advanced Database Design and Systems', '3M', 'E. Y. A. Charles', 'J. Janani', NULL, NULL),
(52, 'CSC302M3', 'Advanced Topics in Computer Networks', '3M', 'K. Thabotharan', ' K. Tharmini', NULL, NULL),
(53, 'CSC303M3', 'Artificial Intelligence', '3M', 'S. Mahesan', 'J. Janani', NULL, NULL),
(54, 'CSC304M3', 'High Performance Computing', '3M', 'S. Suthakar', ' K. Tharmini', NULL, NULL),
(55, 'CSC305M3', 'Image Processing and Computer Vision', '3M', 'A. Ramanan', 'J. Janani', NULL, NULL),
(56, 'CSC306M3', 'Machine Learning', '3M', 'A. Ramanan', ' K. Tharmini', NULL, NULL),
(57, 'CSC307M3', 'Mobile Computing', '3M', 'K. Thabotharan', 'J. Janani', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `lect_id` bigint(20) UNSIGNED NOT NULL,
  `lect_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lect_id`, `lect_title`, `lect_name`, `lect_email`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', ' S. Suthakar', 'sosuthakar@univ.jfn.ac.lk', 'HOD,lecturer', NULL, NULL),
(2, 'Dr.', 'S. Mahesan', 'mahesans@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(3, 'Dr.', 'E. Y. A. Charles', 'charles.ey@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(4, 'Dr.', 'K. Thabotharan', 'thabo@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(5, 'Dr.', 'A. Ramanan', 'a.ramanan@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(6, 'Dr.', '(Mrs). B. Mayurathan', 'barathym@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(7, 'Dr.', 'M. Siyamalan', 'siyam@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(8, 'Mr.', 'K. Sarveswaran ', 'sarves@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(9, 'Mr.', ' S. Shriparen', 'shriparens@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(10, 'Miss.', 'J. Samantha Tharani', 'samantha@univ.jfn.ac.lk', 'lecturer', NULL, NULL),
(11, 'Mrs.', 'J. Janani', 'janani7@gmail.com', 'assistentlecturer', NULL, NULL),
(12, 'Mrs.', ' K. Tharmini', 'tharmin7@gmail.com', 'assistentlecturer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(137, '2020_12_11_040925_create_student_table', 1),
(180, '2014_10_12_000000_create_users_table', 2),
(181, '2014_10_12_100000_create_password_resets_table', 2),
(182, '2019_08_19_000000_create_failed_jobs_table', 2),
(183, '2020_12_04_185425_create_lecturers_table', 2),
(184, '2020_12_10_032640_create_courses_table', 2),
(185, '2020_12_11_070116_create_students_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `st_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_regno` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_acyear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_fid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `st_name`, `st_regno`, `st_level`, `st_acyear`, `st_fid`, `created_at`, `updated_at`) VALUES
(1, 'student1', '2016/CSC/100', '2S', '2016', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

/* INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$WxKQdCYZpYEp.pz1qTFkeu1OR/3IHtkOFIOsgRjgabZnGVtC8Ygka', NULL, '2020-12-18 02:13:26', '2020-12-18 02:13:26'),
(2, 'User', 'user@gmail.com', NULL, 0, '$2y$10$24dTiEx88S72O.Fb21fnqu63LKVQ21SOGfrVk6qQ.9.9OHU1Fc6EW', NULL, '2020-12-18 02:13:26', '2020-12-18 02:13:26'); */

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`lect_id`),
  ADD UNIQUE KEY `lecturers_lect_email_unique` (`lect_email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `students_st_regno_unique` (`st_regno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `lect_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `st_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
