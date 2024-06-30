-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 05:57 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `intro` varchar(300) NOT NULL,
  `details` text NOT NULL,
  `fb_link` varchar(100) NOT NULL,
  `instagram_link` varchar(100) NOT NULL,
  `youtube_link` varchar(100) NOT NULL,
  `github_link` varchar(100) NOT NULL,
  `photo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `name`, `nim`, `intro`, `details`, `fb_link`, `instagram_link`, `youtube_link`, `github_link`, `photo`) VALUES
(1, 'Daniel Edwardo Manurung', 2101020089, 'Halloooo!!! Saya Daniel Edwardo Manurung Seorang Web Developer & Desainer UI UX saya mendalami berbagai bahasa pemrogramanan diantaranya PHP, HTML, C++, CSS, JavaScript, Python, Boostrap.', '\"Saya adalah seorang pekerja keras dan individu yang ambisius dengan semangat besar dalam dunia pemrograman komputer. Saat ini, saya sedang menjalani semester Ke-6 di Universitas Maritim Raja Ali Haji dengan spesialis Teknik Informatika. Saya memiliki keahlian yang handal dalam pemrograman dan pengalaman yang solid dalam HTML, CSS, Bootstrap, PHP, dan MySQL. Saya sangat antusias untuk dapat menyumbangkan keterampilan saya demi kemajuan dan kesuksesan perusahaan Anda.\"', 'https://www.facebook.com/crrakib55', 'https://www.instagram.com/daniel_e_m9937/?hl=en', 'https://www.youtube.com/channel/UClXK3x7b0OKh0p-5hLV3KDQ', 'https://github.com/DanielDD73', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `id` int(1) NOT NULL,
  `small_text` text NOT NULL,
  `office` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`id`, `small_text`, `office`, `address`, `phone`, `email`) VALUES
(1, 'Kami Selalu Siap Melayani Anda!!!!', 'UNIVERSITAS MARITIM RAJA ALI HAJI', 'Tanjung Pinang KM 14 Pinang Kencana', '0896-7118-7282', 'manurungdaniel52@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `education_informations`
--

CREATE TABLE `education_informations` (
  `id` int(1) NOT NULL,
  `degree_name` varchar(100) NOT NULL,
  `year` int(5) NOT NULL,
  `progressbar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_informations`
--

INSERT INTO `education_informations` (`id`, `degree_name`, `year`, `progressbar`) VALUES
(8, 'Sarjana Teknik Informatika S1', 2024, 80);

-- --------------------------------------------------------

--
-- Table structure for table `guest_messages`
--

CREATE TABLE `guest_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest_messages`
--

INSERT INTO `guest_messages` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'Daniel Edwardo Manurung', 'manurungdaniel52@gmail.com', 'Hallo Bisakah anda membantu saya dalam project saya!!! saya bersedia membayar anda perjam nya', 2),
(9, 'rismawati', 'rismawati@gmail.com', 'Hallo Cuy', 2),
(10, 'Abdul KAtsir', 'abdulkatsir@gmail.com', 'Hallo Bosq', 1),
(11, 'Azel Fahrezi', 'azel@gmail.com', 'Gas kan bangku !!!', 1),
(12, 'Zacky Santoso', 'zacky@gmail.com', 'gasken bro bro ku!!!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(3) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `photo`) VALUES
(3, '20622.png'),
(4, '96898.jpg'),
(7, '5822.png'),
(14, '35845.png'),
(15, '84952.jpg'),
(18, '50159.png');

-- --------------------------------------------------------

--
-- Table structure for table `my_best_artikel`
--

CREATE TABLE `my_best_artikel` (
  `id` int(2) NOT NULL,
  `works_name` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `photo` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_best_artikel`
--

INSERT INTO `my_best_artikel` (`id`, `works_name`, `catagory`, `photo`) VALUES
(0, 'FINAL PROJECT', 'GRAFIKA KOMPUTER', '0.png'),
(0, 'Project Charter', 'WORD', '0.png'),
(0, 'GRAFKOM', 'PPT', '0.png');

-- --------------------------------------------------------

--
-- Table structure for table `my_best_works`
--

CREATE TABLE `my_best_works` (
  `id` int(2) NOT NULL,
  `works_name` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `photo` varchar(110) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_best_works`
--

INSERT INTO `my_best_works` (`id`, `works_name`, `catagory`, `photo`) VALUES
(18, 'Learnify_ WebSite Kursus', 'Perancangan WEB', '18.png'),
(19, 'Inventori_Lab', 'Technopreuner', '19.png'),
(20, 'Portofolio', 'IMK', '20.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(3) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `some_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `some_text`) VALUES
(14, 'fas fa-file-code', 'PSD TO HTML', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution'),
(15, 'fab fa-php', 'Dynamic Website with php', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution'),
(16, 'fab fa-laravel', 'Dynamic Website with laravel', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(3) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `some_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `icon`, `title`, `some_text`) VALUES
(0, 'bx bxl-javascript', 'JavaScript', '60'),
(1, 'bx bxl-php', 'PHP', '70'),
(2, 'bx bxl-html5', 'HTML', '80'),
(3, 'bx bxl-css3', 'CSS', '80'),
(4, 'bx bxl-javascript', 'JavaScript', '60'),
(5, 'bx bxl-microsoft', 'MicroSoft', '90'),
(6, 'bx bxs-detail', 'Management Plan', '95');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `photo` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `password`, `status`, `photo`) VALUES
(1, 'Daniel Edwardo Manurung', 'admin@gmail.com', '$2y$10$Zp2gDrCQHUqca19wDY5fC.5CTJKycjnFsqUMDw8yGHe4zqFKvtvEe', 2, '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_informations`
--
ALTER TABLE `education_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_messages`
--
ALTER TABLE `guest_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_best_works`
--
ALTER TABLE `my_best_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_informations`
--
ALTER TABLE `education_informations`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guest_messages`
--
ALTER TABLE `guest_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `my_best_works`
--
ALTER TABLE `my_best_works`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
