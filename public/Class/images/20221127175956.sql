-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2022 at 12:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accountingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'raj@gmail.com', '12345678\n');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_income`
--

CREATE TABLE `crypto_income` (
  `id` int(11) NOT NULL,
  `Load_a_xlsx_file` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crypto_income`
--

INSERT INTO `crypto_income` (`id`, `Load_a_xlsx_file`, `created_at`) VALUES
(1, 'pokemon.csv', '2022-07-19 13:29:23'),
(2, 'Latest_Covid-19_India_Status.csv', '2022-07-21 15:35:50'),
(3, 'pokemon1.csv', '2022-08-05 17:13:33'),
(4, 'supermarket_sales_.csv', '2022-08-16 12:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_income1`
--

CREATE TABLE `crypto_income1` (
  `id` int(11) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `name_surname` varchar(50) NOT NULL,
  `per_number` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `income1` varchar(50) NOT NULL,
  `taxable_income` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `total_income_for_health` varchar(50) NOT NULL,
  `health_insurance_tax` varchar(50) NOT NULL,
  `to_be_paid` varchar(50) NOT NULL,
  `choose_from_list` varchar(50) NOT NULL,
  `omg_name` varchar(50) NOT NULL,
  `registration_no` varchar(50) NOT NULL,
  `bank_account` varchar(50) NOT NULL,
  `do_you_need_health_insurance` varchar(50) NOT NULL,
  `income2` varchar(50) NOT NULL,
  `health_insurance_tax2` varchar(50) NOT NULL,
  `to_be_paid_till_2023` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crypto_income1`
--

INSERT INTO `crypto_income1` (`id`, `salutation`, `name_surname`, `per_number`, `address`, `country`, `city`, `income1`, `taxable_income`, `tax`, `total_income_for_health`, `health_insurance_tax`, `to_be_paid`, `choose_from_list`, `omg_name`, `registration_no`, `bank_account`, `do_you_need_health_insurance`, `income2`, `health_insurance_tax2`, `to_be_paid_till_2023`) VALUES
(2, 'Mr', 'Raj Yadav', '856487648', 'Gomti Nagar', 'Indida', 'Lucknow', '8765436513', '6452165', '98659865', '89659856', '6565365', '656532', '5633', 'TCS', '1248105297', '56356332', '2', '542112', '212122', '121211'),
(3, 'Mr', 'Hemant Kumar', '8956644464', 'Gomti Nagar', 'India', 'Lucknow', '1540$', '10000$', '80000$', '697941$', '765664', '656664', 'Form NCC', 'NCC Pvt Ltd. ', '79741294', '34300100003861', '1', '164623', '9741323', '94133'),
(6, 'Mr', 'shailesh pandey', '99560452350', 'Vibhuti khand ', 'gomti nagar ', 'Lucknow', '20000', '12000', '5000', '4000', '3000', '10000', 'none ', 'sam', '98765', '1413841617', 'YES', '2000', '2000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `dividents_income`
--

CREATE TABLE `dividents_income` (
  `id` int(11) NOT NULL,
  `Load_a_xlsx_file` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dividents_income`
--

INSERT INTO `dividents_income` (`id`, `Load_a_xlsx_file`, `created_at`) VALUES
(1, 'pokemon.csv', '2022-07-19 13:31:48'),
(2, 'Latest_Covid-19_India_Status.csv', '2022-07-20 16:04:49'),
(3, 'supermarket_sales_.csv', '2022-08-05 18:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `dividents_verification`
--

CREATE TABLE `dividents_verification` (
  `id` int(11) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `name_surname` varchar(50) NOT NULL,
  `per_number` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `income1` varchar(50) NOT NULL,
  `income2` varchar(50) NOT NULL,
  `countries_list` varchar(50) NOT NULL,
  `dividents` varchar(50) NOT NULL,
  `tax1` varchar(50) NOT NULL,
  `taxable_income` varchar(50) NOT NULL,
  `tax2` varchar(50) NOT NULL,
  `total_income_for_health` varchar(50) NOT NULL,
  `health_insurance_tax1` varchar(50) NOT NULL,
  `to_be_paid_till_may_2022` varchar(50) NOT NULL,
  `do_you_need_health_insurance` varchar(50) NOT NULL,
  `total_income` varchar(50) NOT NULL,
  `health_insurance_tax2` varchar(50) NOT NULL,
  `to_be_paid_unit_may_2023` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dividents_verification`
--

INSERT INTO `dividents_verification` (`id`, `salutation`, `name_surname`, `per_number`, `address`, `country`, `city`, `income1`, `income2`, `countries_list`, `dividents`, `tax1`, `taxable_income`, `tax2`, `total_income_for_health`, `health_insurance_tax1`, `to_be_paid_till_may_2022`, `do_you_need_health_insurance`, `total_income`, `health_insurance_tax2`, `to_be_paid_unit_may_2023`) VALUES
(2, 'Mrs', 'Nitesh Shukla', '9879787564', 'Gomti Nagar', 'India', 'Lucknow', '18000', '4444424', '1', '2', '3', '1555555555', '44444444475', '75724', '7524724', '7247524', 'No', '', '5375', '45777776'),
(3, 'Mr', 'Raj Kumar ', '97910196566', 'Vibhuti Khand ', 'India', 'Lucknow', '15454', '656532', '1', '2', '3', '65865', '563563', '65365', '65365', '6536563', 'None', '', '563256365', '6535632'),
(5, 'Mr', 'Raj ', '+919140297101', 'Vibhuti Khand Gomti Nagar  Lucknow', 'India', 'Lucknow', '1555', '3233', '1', '2', '3', '3233', '2322', '3232', '2323', '23232', '', '', '3323', '36565'),
(6, 'Mr', 'Raj ', '+918960883311', 'Vibhuti Khand Gomti Nagar', 'India ', 'Lucknow', '1522', '5454', '1', '2', '3', '212', '4545', '555', '6565', '4544', '', '', '5454', '5454'),
(7, 'Mr', 'Sam  ', '919560452350', 'C 17 Gomti Nagar ', 'Vibhuti Khand Gomti ', 'Lucknow', '565', '5454', '1', '2', '3', '6565', '6565', '6565', '6565', '6565', '', '', '545', '5454');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_regim_income`
--

CREATE TABLE `hotel_regim_income` (
  `id` int(11) NOT NULL,
  `rented_space_address` varchar(255) NOT NULL,
  `rent_value` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `expenses` varchar(50) NOT NULL,
  `financial_loss` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_regim_income`
--

INSERT INTO `hotel_regim_income` (`id`, `rented_space_address`, `rent_value`, `currency`, `year`, `expenses`, `financial_loss`) VALUES
(1, 'Gomti Nagar Lucknow ', '1800', 'IND', '2022', '5', '155');

-- --------------------------------------------------------

--
-- Table structure for table `income_type`
--

CREATE TABLE `income_type` (
  `id` int(11) NOT NULL,
  `type` enum('rental','dividents','stock') DEFAULT NULL,
  `nr_modules` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income_type`
--

INSERT INTO `income_type` (`id`, `type`, `nr_modules`, `price`, `sku`, `created_at`, `updated_at`) VALUES
(1, 'rental', '102', '1100$', 'Rental 011$', '2022-07-04 08:03:23', '2022-07-04 08:11:35'),
(2, 'dividents', '202', '122$', 'Dividents  122$', '2022-07-04 08:04:27', '2022-07-04 08:12:32'),
(3, 'stock', '302', '440$', 'Stock 660$', '2022-07-04 08:10:21', '2022-07-04 08:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `user_id`, `email`, `password`, `created_at`) VALUES
(1, '24438', 'aryanvipin9@gmail.com', '2356d2f90729f09417b65bee5f3309aa', '2022-08-25 10:26:14'),
(2, '38358', 'ry7734570@gmail.com', 'bbb8aae57c104cda40c93843ad5e6db8', '2022-08-25 10:36:42'),
(3, '52754', 'aryanvipin99@gmail.com', 'fe28d28e9415a395e4fa80e82b736714', '2022-08-29 05:17:05'),
(4, '90349', 'pankaj0@gmail.com', 'c8c605999f3d8352d7bb792cf3fdb25b', '2022-08-29 05:21:56'),
(5, '87892', 'aaryanvipin9@gmail.com', '6e1ea3d9dd405962ba8dc8bc6ab392c5', '2022-08-29 05:23:39'),
(6, '59696', 'aaaryanvipin9@gmail.com', '6e1ea3d9dd405962ba8dc8bc6ab392c5', '2022-08-29 05:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE `personal_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `salutation` varchar(25) NOT NULL,
  `name_surname` varchar(255) DEFAULT NULL,
  `per_number` varchar(13) NOT NULL,
  `mob_number` varchar(11) NOT NULL,
  `nationalid` varchar(200) NOT NULL,
  `nationalid2` varchar(6) DEFAULT NULL,
  `birthday` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `address2` text DEFAULT NULL,
  `address3` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_data`
--

INSERT INTO `personal_data` (`id`, `user_id`, `salutation`, `name_surname`, `per_number`, `mob_number`, `nationalid`, `nationalid2`, `birthday`, `address`, `address2`, `address3`, `status`, `created_at`, `updated_at`) VALUES
(1, 24438, 'Mr', 'Raj Yadav', '6321943794342', '5375934566', '52', 'dr434t', '2001-01-30', 'wereg', 'fdsgrfg', 'sfgsgfdg', 1, '2022-08-25 10:31:47', NULL),
(2, 38358, 'Mr', 'Hemant Sahi', '9189320326556', '9898989893', 'IN', '454454', '2022-08-24', 'Vibhuti Khand', 'Gomti Nagar', 'Lucknow', 1, '2022-08-25 10:38:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rent_income`
--

CREATE TABLE `rent_income` (
  `id` int(11) NOT NULL,
  `rented_spaceadd` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `personal_id` int(11) DEFAULT NULL,
  `contract_no` varchar(255) NOT NULL,
  `rent_value` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `sign_date` varchar(255) NOT NULL,
  `contract_startdate` varchar(255) NOT NULL,
  `contract_enddate` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_income`
--

INSERT INTO `rent_income` (`id`, `rented_spaceadd`, `user_id`, `personal_id`, `contract_no`, `rent_value`, `currency`, `sign_date`, `contract_startdate`, `contract_enddate`, `created_at`, `updated_at`) VALUES
(1, 'r3qwfffwe', 24438, 1, '43656545', '543553', 'EURO', '1-May-2021', '1-June-2021', '3-July-2022', '2022-08-25 10:32:44', NULL),
(2, 'Vibhuti khand gomti Nagar Lucknow', 38358, 2, '2464644', '46465456', 'EURO', '2-May-2022', '1-June-2022', '2-Month-2021', '2022-08-25 10:39:34', NULL),
(3, 'Vibhuti Khand', 24438, 3, '68678', '6788886', 'EURO', '1-May-2021', '2-July-2021', '2-August-2022', '2022-08-29 05:56:43', NULL),
(4, 'dwef', 24438, 5, '8008', '54646', 'EURO', '1-May-2021', '1-June-2021', '2-August-2022', '2022-08-29 06:15:46', NULL),
(5, 'ewfwe', 24438, 6, '4365656', '5345635', 'RON', '1-May-2021', '2-June-2021', '2-August-2022', '2022-08-29 06:45:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rent_regim_verification`
--

CREATE TABLE `rent_regim_verification` (
  `id` int(11) NOT NULL,
  `salutation` varchar(50) DEFAULT NULL,
  `name_surname` varchar(50) DEFAULT NULL,
  `per_number` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `income` varchar(50) DEFAULT NULL,
  `expenses` varchar(255) DEFAULT NULL,
  `financial_loss` varchar(255) DEFAULT NULL,
  `taxable_income1` varchar(255) DEFAULT NULL,
  `tax1` varchar(255) DEFAULT NULL,
  `total_income_for_health` varchar(255) DEFAULT NULL,
  `health_insurance_tax1` varchar(255) DEFAULT NULL,
  `health_tax` varchar(50) DEFAULT NULL,
  `tax2` varchar(50) DEFAULT NULL,
  `do_you_need_health_insurance` varchar(60) DEFAULT NULL,
  `taxable_income2` varchar(55) DEFAULT NULL,
  `health_insurance_tax2` varchar(50) DEFAULT NULL,
  `to_be_paid_till_2023` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_regim_verification`
--

INSERT INTO `rent_regim_verification` (`id`, `salutation`, `name_surname`, `per_number`, `address`, `country`, `city`, `income`, `expenses`, `financial_loss`, `taxable_income1`, `tax1`, `total_income_for_health`, `health_insurance_tax1`, `health_tax`, `tax2`, `do_you_need_health_insurance`, `taxable_income2`, `health_insurance_tax2`, `to_be_paid_till_2023`) VALUES
(1, 'Mr', 'dsfaf dgdfgrw452456245', '45634563', '569', 'yetjr', 'uyur46+46', '898', '988', '64556', '46546', '464', '645645', '66456464', '789789', '64', '1', '64698', '789789', '77486'),
(2, 'Mr', 'Hemant  kUmar', '67537832', 'khargapur', 'indialicknow', 'lucknow', '121212', '12', '12', '33', '567', '866654', '4444567', '245', '133', '2', '3243455', '6543', '235'),
(3, 'Mr', 'dsfg dfg', 'sdfg', 'sdfgsd', 'sdf', 'gsdfg', 'fgs', 'g', 'gds', 'fgsd', 'fgsd', 'fgsdf', 'gsdfg', 'sd', 'sdfgsfgsdfg', '1', 'sdfg', 'fg', 'g'),
(4, 'Mr', 'Raj  Kumar', '914029701', 'Vibhuti Khand Gomti Nagar Lucknow ', 'India', 'Lucknow', '63131', '6616666', '91944', '55454', '475464', '4564512', '156112', '212121', '8456', 'yes', '6565', '54655', '66566'),
(5, 'Mr', 'shailesh pandey', '99560452350', 'vibhuti khand', 'india', 'lucknow', '2000', '2400', '2000', '1200', '1000', '2000', '500', '300', '200', 'yes', '200', '200', '300');

-- --------------------------------------------------------

--
-- Table structure for table `stock_income`
--

CREATE TABLE `stock_income` (
  `id` int(11) NOT NULL,
  `Load_a_xlsx_file` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_income`
--

INSERT INTO `stock_income` (`id`, `Load_a_xlsx_file`, `created_at`) VALUES
(1, 'KIRAYEDAAR1.xlsx', '2022-07-18 16:37:39'),
(2, 'user_reviews.csv', '2022-08-08 16:11:22'),
(3, 'google_play_apps.csv', '2022-08-16 11:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `stock_verification`
--

CREATE TABLE `stock_verification` (
  `id` int(11) NOT NULL,
  `salutation` varchar(20) NOT NULL,
  `name_sername` varchar(50) NOT NULL,
  `per_number` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(55) NOT NULL,
  `income` varchar(55) NOT NULL,
  `countries_list` varchar(55) NOT NULL,
  `dividents` varchar(255) NOT NULL,
  `tax1` varchar(50) NOT NULL,
  `taxable_income` varchar(55) NOT NULL,
  `tax2` varchar(50) NOT NULL,
  `total_income_for_health` varchar(55) NOT NULL,
  `health_insurance_tax1` varchar(55) NOT NULL,
  `to_be_paid_till_2022` varchar(50) NOT NULL,
  `do_you_need_health_insurance` varchar(50) NOT NULL,
  `total_income` varchar(25) NOT NULL,
  `health_insurance_tax2` varchar(50) NOT NULL,
  `to_be_paid_unit_2023` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_verification`
--

INSERT INTO `stock_verification` (`id`, `salutation`, `name_sername`, `per_number`, `address`, `country`, `city`, `income`, `countries_list`, `dividents`, `tax1`, `taxable_income`, `tax2`, `total_income_for_health`, `health_insurance_tax1`, `to_be_paid_till_2022`, `do_you_need_health_insurance`, `total_income`, `health_insurance_tax2`, `to_be_paid_unit_2023`) VALUES
(1, 'Mr', 'Raj Kumar', '9871454514', 'Gomti Nagar', 'India', 'Lucknow', '155000', '6', '9', '12', '78554', '1500k', '288yy', '16566M', '8000', '1', '70000K', '555M', '852M');

-- --------------------------------------------------------

--
-- Table structure for table `system_configration`
--

CREATE TABLE `system_configration` (
  `id` int(11) NOT NULL,
  `type` enum('annual_exchange_rate','minimum_wage','BNR_xchange_rate') DEFAULT NULL,
  `value` varchar(55) DEFAULT NULL,
  `year` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_configration`
--

INSERT INTO `system_configration` (`id`, `type`, `value`, `year`, `created_at`, `updated_at`) VALUES
(1, 'annual_exchange_rate', '1500$', 2002, '2022-07-04 13:39:42', NULL),
(2, 'minimum_wage', '1600#', 2015, '2022-07-04 13:39:56', NULL),
(3, 'minimum_wage', '250$', 2018, '2022-07-05 06:42:02', NULL),
(4, 'annual_exchange_rate', '1594$', 2019, '2022-07-05 06:51:07', NULL),
(5, 'annual_exchange_rate', '31664664664466', 154, '2022-07-05 09:44:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `name`, `password`, `con_password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AtYnPfjo', 'Raj', '12345', '1245', 'Unblock', '2022-05-26 14:43:38', '2022-05-26 12:44:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_income`
--
ALTER TABLE `crypto_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_income1`
--
ALTER TABLE `crypto_income1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dividents_income`
--
ALTER TABLE `dividents_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dividents_verification`
--
ALTER TABLE `dividents_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_regim_income`
--
ALTER TABLE `hotel_regim_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_type`
--
ALTER TABLE `income_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_income`
--
ALTER TABLE `rent_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_regim_verification`
--
ALTER TABLE `rent_regim_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_income`
--
ALTER TABLE `stock_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_verification`
--
ALTER TABLE `stock_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_configration`
--
ALTER TABLE `system_configration`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crypto_income`
--
ALTER TABLE `crypto_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crypto_income1`
--
ALTER TABLE `crypto_income1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dividents_income`
--
ALTER TABLE `dividents_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dividents_verification`
--
ALTER TABLE `dividents_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hotel_regim_income`
--
ALTER TABLE `hotel_regim_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `income_type`
--
ALTER TABLE `income_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rent_income`
--
ALTER TABLE `rent_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rent_regim_verification`
--
ALTER TABLE `rent_regim_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock_income`
--
ALTER TABLE `stock_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_verification`
--
ALTER TABLE `stock_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_configration`
--
ALTER TABLE `system_configration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
