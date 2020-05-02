-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 05:45 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gomachanic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(12) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'surazdot', 'surajdatheputhe@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE `tbl_locations` (
  `id` int(12) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `location_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`id`, `location_name`, `location_image`) VALUES
(46, 'Kathmandu', 'kathmandu.jpg'),
(47, 'Bhaktapur', 'bhaktapur.jpg'),
(48, 'Lalitpur', 'lalitpur.jpg'),
(49, 'Nepalgunj', 'nepalgunj.jpg'),
(50, 'Dharan', 'dharan.jpg'),
(51, 'Birgunj', 'birgunj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(12) NOT NULL,
  `service_title` varchar(250) NOT NULL,
  `service_price` varchar(255) NOT NULL,
  `service_desc` varchar(1000) NOT NULL,
  `service_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `service_title`, `service_price`, `service_desc`, `service_img`) VALUES
(1, 'Engine Repairing', 'Rs. 50,000', 'We repair all kind of car engine.', 'CarRepairs.jpg'),
(2, 'Washing', 'Rs. 500', 'We wash all kinds of vehicles. ', 'car-washing.jpeg'),
(3, 'Parts Change', 'Rs. 1000', 'We change all parts.', 'car-parts-change.jpg'),
(4, 'Painting', 'Rs. 10,000', 'We paint all kinds of bikes and cars.', 'car-paiting.jpg'),
(5, 'Tyre Repairing', 'Rs. 5,000', 'We repair all kinds of Tyre.', 'tyre-change.jpg'),
(6, 'Servicing', 'Rs. 1,000', 'We service all kinds of bikes and cars.', 'bike-servicing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_providers`
--

CREATE TABLE `tbl_service_providers` (
  `id` int(12) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_service` varchar(255) NOT NULL,
  `company_number` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `company_desc` varchar(500) NOT NULL,
  `company_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service_providers`
--

INSERT INTO `tbl_service_providers` (`id`, `company_name`, `company_email`, `company_service`, `company_number`, `company_address`, `city_name`, `company_desc`, `company_image`) VALUES
(2, 'Soopam Auto Mobiles', '', 'Repairing', '01-66123456', 'Kathmandu, Nepal', '', 'We service all kinds of cars.', 'kathmandu.jpg'),
(3, 'Friends Auto Links', '', 'Exchange', '9841123456', 'Nayabazaar, Kathmandu', '', 'We exchange all kinds of bikes.', 'CarRepairs.jpg'),
(5, 'Kritipur Garage', '', 'Car Servicing', '015512345', 'Balkhu', 'Kathmandu', 'We repair all kinds of cars.', 'CarRepairs.jpg'),
(6, 'Rajdhani Import and Export ', 'rajdhani29@gmail.com', 'Buy & Sell', '01-6678965', 'New Baneshwor', 'Kathmandu', 'We import any kinds of cars from any company.', 'CarRepairs.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_providers`
--
ALTER TABLE `tbl_service_providers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_service_providers`
--
ALTER TABLE `tbl_service_providers`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
