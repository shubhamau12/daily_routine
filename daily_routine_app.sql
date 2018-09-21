-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2018 at 04:19 PM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id397979_daily_routine_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `user_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dinner_take` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`user_name`, `dinner_take`, `time`) VALUES
('Ll', 'yes', '2018-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `user_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lunch_take` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`user_name`, `lunch_take`, `time`) VALUES
('kk', 'yes', '2018-05-10'),
('Ll', 'yes', '2018-05-02'),
('Ll', 'yes', '2018-05-10'),
('Mayank2yz@gmail.com', 'NO', '2018-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `milk`
--

CREATE TABLE `milk` (
  `user_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `night` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `milk`
--

INSERT INTO `milk` (`user_name`, `day`, `night`, `time`) VALUES
('kk', 'yes', 'NO', '2018-05-03'),
('Ll', 'yes', 'NO', '2018-05-02'),
('Ll', 'yes', 'yes', '2018-05-10'),
('Ll', 'NO', 'yes', '2018-05-09'),
('Ll', 'NO', 'yes', '2018-05-09'),
('Mayank2yz@gmail.com', 'yes', 'NO', '2018-05-16'),
('Doodhwala', 'NO', 'yes', '2018-05-16'),
('Doodhwala', 'NO', 'yes', '2018-05-15'),
('Doodhwala', 'yes', 'yes', '2018-05-01'),
('Doodhwala', 'NO', 'yes', '2018-05-02'),
('Doodhwala', 'yes', 'NO', '2018-05-03'),
('Doodhwala', 'NO', 'NO', '2018-05-04'),
('Doodhwala', 'yes', 'NO', '2018-05-05'),
('Doodhwala', 'NO', 'NO', '2018-05-07'),
('Doodhwala', 'yes', 'NO', '2018-05-08'),
('Doodhwala', 'NO', 'yes', '2018-05-09'),
('Doodhwala', 'yes', 'NO', '2018-05-10'),
('Doodhwala', 'yes', 'yes', '2018-05-11'),
('Doodhwala', 'NO', 'NO', '2018-05-12'),
('Doodhwala', 'yes', 'yes', '2018-05-22'),
('Doodhwala', 'NO', 'yes', '2018-05-21'),
('Doodhwala', 'yes', 'yes', '2018-05-31'),
('Manav', 'NO', 'yes', '2018-05-17'),
('', 'yes', 'NO', '2018-08-16'),
('', 'yes', 'NO', '2018-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `news_paper`
--

CREATE TABLE `news_paper` (
  `user_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `english` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hindi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regional` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_paper`
--

INSERT INTO `news_paper` (`user_name`, `english`, `hindi`, `regional`, `other`, `time`) VALUES
('kk', 'yes', 'NO', 'yes', 'NO', '2018-05-09'),
('Ll', 'yes', 'yes', 'NO', 'NO', '2018-05-02'),
('Ll', 'yes', 'NO', 'yes', 'NO', '2018-05-01'),
('Ll', 'yes', 'NO', 'yes', 'NO', '2018-05-09'),
('Ll', 'yes', 'NO', 'yes', 'NO', '2018-05-01'),
('Ll', 'yes', 'yes', 'NO', 'NO', '2018-05-09'),
('Mayank2yz@gmail.com', 'yes', 'yes', 'NO', 'NO', '2018-05-16'),
('Doodhwala', 'yes', 'yes', 'NO', 'NO', '2018-05-15'),
('Manav', 'yes', 'yes', 'NO', 'NO', '2018-05-16'),
('Manav', 'NO', 'yes', 'NO', 'NO', '2018-05-18'),
('', 'yes', 'NO', 'yes', 'yes', '2018-08-15'),
('', 'yes', 'NO', 'yes', 'NO', '2018-08-22'),
('', 'yes', 'NO', 'yes', 'NO', '2018-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`name`, `email`, `phone`, `password`) VALUES
('Aks', 'about@gmail.com', '9878675645', '123456'),
('Aman', 'Aman.jais@gmail.com', '8181223344', '123456'),
('Chetna', 'Chetna.jais@gmail.com', '8840914322', '123456'),
('Doodhwala', 'Ddodhwala', '1234567890', '123456'),
('Doodhwala', 'Doodhwala', '123', '123456'),
('kk', 'kk', '1111', 'kk'),
('Lal', 'Lal.jais@gmail.com', '1234567890', '123456'),
('Ll', 'Ll', 'Ll', 'll'),
('Manav', 'Manav', '7007832401', '123456'),
('Manav', 'Manav.jaiswal911@gmail.com', '7007832401', '123455'),
('Manav', 'Manav123@gmail.com', '8812345678', '123456'),
('Mayank', 'Mayank2yz@gmail.com', '8090929242', '123456'),
('Pankaj', 'Pkmurdocks@gmail.com', '945459903', '123456'),
('Jay Prakash Jaiswal', 'Prjay537@gmail.com', '(951) 903-0229', 'jayasingh123'),
('Shubh', 'Shubh.k@gmail.com', '8181507990', '123456'),
('Shubh', 'Shubh.kr@gmail.com', '9169721230', '123456'),
('shubham', 'shubham.jaiswal911@gmail.com', '9369963956', '123456'),
('Tyu', 'ssw12@gmail.com', '99999999999', 'ssw12'),
('Vinay ', 'Vinay.jaiswal911@gmail.com', '9169721230', '123456'),
('Xyz', 'Xyz. abc@gmail.com', '3454657895', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
