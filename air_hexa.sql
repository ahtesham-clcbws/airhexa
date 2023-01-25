-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2023 at 02:50 PM
-- Server version: 10.8.2-MariaDB-log
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air_hexa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ahtesham2000@gmail.com', 'b8ebafb7f623d0bdc274b393823264dcccb2e16d', '2023-01-25 13:26:06', '2023-01-25 13:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `contactenquiries`
--

CREATE TABLE `contactenquiries` (
  `id` int(11) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactenquiries`
--

INSERT INTO `contactenquiries` (`id`, `type`, `name`, `email`, `mobile`, `service`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(4, 'contact', 'ahtesham', 'ahtesham2000@gmail.com', 9810763314, NULL, NULL, 's dk hsldk fhskld jhfls fhslk', '2023-01-25 12:30:34', '2023-01-25 12:30:34'),
(5, 'quote', 'Ahtesham CHaudhary', 'ahtesham2000@gmail.com', 9810763314, 'plumbingSystemService', 'jksjd khiul', ' hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls  hiu hiluhiluhilhrflhls ', '2023-01-25 14:03:03', '2023-01-25 14:03:03'),
(6, 'quote', 'Ahtesham Chaudhary', 'ahtesham@mail.com', 9863254789, 'CCTV & Security Surveillance', 'I woul like to discuss about cctv installation', 'ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb ksd fbd fbdjkfdjkhbfjkh bfjkdhb v', '2023-01-25 14:04:48', '2023-01-25 14:04:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactenquiries`
--
ALTER TABLE `contactenquiries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactenquiries`
--
ALTER TABLE `contactenquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
