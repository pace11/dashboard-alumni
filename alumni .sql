-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 02:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `id` varchar(36) NOT NULL,
  `id_generation` varchar(36) DEFAULT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `middle_name` varchar(40) DEFAULT NULL,
  `family_name` varchar(30) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `gender` enum('male','female','','') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `marital_status` enum('single','married','','') DEFAULT NULL,
  `place_of_birth` varchar(30) DEFAULT NULL,
  `highest_level_of_education` varchar(30) DEFAULT NULL,
  `current_employment` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `office` varchar(50) DEFAULT NULL,
  `job_desc` varchar(50) DEFAULT NULL,
  `office_address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`id`, `id_generation`, `first_name`, `middle_name`, `family_name`, `phone`, `gender`, `date_of_birth`, `age`, `marital_status`, `place_of_birth`, `highest_level_of_education`, `current_employment`, `email`, `address`, `religion`, `profession`, `office`, `job_desc`, `office_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
('5fc48cfd-37c0-460a-9d84-520085f35416', 'e6081511-a4d8-4f65-9ac9-119f001c16a6', 'Daniel', 'Rivaldo', 'Sorontou', '85244680927', 'male', '2000-08-06', 21, 'single', 'Sentani', 'SMA', 'belum bekerja', 'daniel@gmail.com', 'Pos 7 Sentani, jayapura', 'Kristen Protestan', 'Guru', 'Female Daily', 'Programmer', 'Mampang prapatan', '2021-11-10 12:20:28', '2021-12-16 03:45:17', NULL),
('fbdc4f22-24c9-4e43-96c7-4e8ac9941bc5', 'e6081511-a4d8-4f65-9ac9-119f001c16a6', 'Alfrida', 'Aprillia Helena', 'Awatu', '82248384114', 'female', '1996-04-14', 25, 'single', 'Polimak', 'SMA', 'Belum bekerja', 'awatualfrida@gmail.com', 'Kampung Yahim , sentani', 'Kristen Protestan', NULL, NULL, NULL, NULL, '2021-11-10 11:12:17', '2021-11-10 12:18:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_generation`
--

CREATE TABLE `tbl_generation` (
  `id` varchar(36) NOT NULL,
  `year_generation` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_generation`
--

INSERT INTO `tbl_generation` (`id`, `year_generation`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1805ee87-ef77-4a91-a307-d821f6d0f23d', '2019-2020', '2021-11-10 10:46:58', '2021-11-10 10:46:58', NULL),
('e6081511-a4d8-4f65-9ac9-119f001c16a6', '2018-2019', '2021-11-10 10:30:33', '2021-11-10 10:47:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'RFhnMlRsVE94Vmkrd0JLbVZtZWtldz09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_generation` (`id_generation`);

--
-- Indexes for table `tbl_generation`
--
ALTER TABLE `tbl_generation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD CONSTRAINT `tbl_alumni_ibfk_1` FOREIGN KEY (`id_generation`) REFERENCES `tbl_generation` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
