-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 01:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checklist`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender`) VALUES
(6, 'Yes'),
(7, 'None_of_th'),
(8, 'None_of_the_Above'),
(9, 'None of the Above'),
(10, 'Yes'),
(11, 'Yes'),
(12, 'Yes'),
(13, 'Yes'),
(14, 'Yes'),
(15, ''),
(16, 'None of the Above'),
(17, 'Yes'),
(18, 'Yes'),
(19, 'Yes'),
(20, 'None of the Above'),
(21, 'None of the Above'),
(22, 'Yes'),
(23, ''),
(24, 'None of the Above'),
(25, 'Yes'),
(26, 'None of the Above'),
(27, 'Yes'),
(28, 'Yes'),
(29, 'None of the Above'),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, 'Yes'),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, ''),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, ''),
(56, ''),
(57, ''),
(58, ''),
(59, ''),
(60, ''),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, ''),
(68, ''),
(69, ''),
(70, ''),
(71, ''),
(72, ''),
(73, ''),
(74, ''),
(75, ''),
(76, ''),
(77, ''),
(78, ''),
(79, ''),
(80, ''),
(81, ''),
(82, ''),
(83, ''),
(84, ''),
(85, ''),
(86, ''),
(87, ''),
(88, 'Yes'),
(89, 'None of the Above'),
(90, ''),
(91, ''),
(92, ''),
(93, ''),
(94, ''),
(95, ''),
(96, ''),
(97, ''),
(98, ''),
(99, ''),
(100, ''),
(101, ''),
(102, ''),
(103, ''),
(104, ''),
(105, ''),
(106, ''),
(107, ''),
(108, ''),
(109, ''),
(110, ''),
(111, ''),
(112, ''),
(113, ''),
(114, ''),
(115, ''),
(116, ''),
(117, 'None of the Above'),
(118, ''),
(119, ''),
(120, ''),
(121, ''),
(122, ''),
(123, ''),
(124, ''),
(125, ''),
(126, ''),
(127, ''),
(128, ''),
(129, ''),
(130, ''),
(131, ''),
(132, ''),
(133, ''),
(134, ''),
(135, ''),
(136, ''),
(137, ''),
(138, ''),
(139, ''),
(140, ''),
(141, ''),
(142, ''),
(143, ''),
(144, ''),
(145, ''),
(146, ''),
(147, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_name`
--

CREATE TABLE `tbl_name` (
  `Department` text NOT NULL,
  `column2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_name`
--

INSERT INTO `tbl_name` (`Department`, `column2`) VALUES
('mariel', 'ron'),
('', '[value-2]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `Address`) VALUES
(1, 'MarielBachiller', '$2y$10$UzRdPiYumYOh.fuleE.V1O3brm5NdQ7Yqn3wb22dVm0', '2021-04-01 09:03:49', ''),
(2, 'itantipolo', '$2y$10$NPjoQTxM0X9bIAveJTcV1uJdrjd3m2spzvyeBuiRh27', '2021-04-01 09:13:05', ''),
(3, 'Ella', '$2y$10$tveudBuAXiypoXKty86RFOIPnGBBfddPoiWDaQ3VsAA', '2021-04-01 09:28:03', ''),
(4, 'YHELBACHILLER', '$2y$10$2vsnH9EKJQ/pAmRNXzTNKOjaBwxuj6S43vXmIM3eJds', '2021-04-01 09:34:10', ''),
(5, 'EllaMe', '$2y$10$OA1P79moAw321hw3P.WFQ.bZ9t9apt8txZVTKDS7vuq', '2021-04-01 09:51:55', ''),
(7, 'Mariel1', '$2y$10$vJ7TgkD4l12HA/WOu5ttdOA39AN5Vj50vDi6r4WOo.S', '2021-04-01 10:58:55', ''),
(8, 'AA123', '$2y$10$Q2GL4ty6aYER2eBu3aKajuBnn0uRDPMUD4gbObO04ih', '2021-04-01 14:34:13', ''),
(9, '123', '$2y$10$JDmz0TsPStFoALd5kyXoSOklawuLO6hB39li5gLBVcF', '2021-04-01 14:48:01', ''),
(10, '1234', '$2y$10$r3z5wExjQrcO3V5xj1tulub/YGQOkkcxwQBnqjTbwkW', '2021-04-01 14:49:20', ''),
(11, 'roger', '$2y$10$2qCgvJf4v9dD2dEg9L60LuhMP1DSThAHzNgOGENa8Iy', '2021-04-01 14:56:19', ''),
(12, '1234567', '$2y$10$TGSwKVSvQfx5XFjvgjLExeE5sepP6t/Kuvsg76mh.Q9', '2021-04-01 15:03:21', ''),
(13, 'Cesar', '$2y$10$YO6U3TksdIAwr7ZuciBUSO5g7.QK8YRrbtrvJDrpiXv', '2021-04-02 16:25:18', ''),
(14, 'Mariel', '$2y$10$DJMKQrAyNbxgVe3pZgikZew8YGxMi6oUasUKegtB5b1', '2021-04-02 18:01:05', ''),
(15, 'April', '$2y$10$2GaWmf1Fdjw8sF.TxHPhFOp.w6cHoK2ktCdv67HhhYE', '2021-04-12 11:18:00', ''),
(16, 'Mariel2', '$2y$10$cKMz/wXwICs.jill4/dD3.iLPYe0edgJM9YLByutxXT', '2021-05-11 08:27:56', ''),
(17, 'Nurse Elvie', '$2y$10$DNYX5xUiV61uW/ZN4MYH4ehUNHfprbtK7Hk3f3ECkj2', '2021-05-11 17:03:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `Agree` text NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_Number` text NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `person_to_visit` text NOT NULL,
  `reason_to_visit` text NOT NULL,
  `From_visit` varchar(25) NOT NULL,
  `To_visit` varchar(25) NOT NULL,
  `Question1` varchar(30) NOT NULL,
  `Question2` varchar(30) NOT NULL,
  `Question3` varchar(30) NOT NULL,
  `Question4` varchar(30) NOT NULL,
  `q4txt` text NOT NULL,
  `Question5` varchar(30) NOT NULL,
  `q5txt` text NOT NULL,
  `Code` varchar(8) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `GuardName` varchar(50) NOT NULL,
  `Body_Temp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `Agree`, `last_name`, `first_name`, `Address`, `Email`, `Contact_Number`, `Gender`, `Department`, `person_to_visit`, `reason_to_visit`, `From_visit`, `To_visit`, `Question1`, `Question2`, `Question3`, `Question4`, `q4txt`, `Question5`, `q5txt`, `Code`, `created_at`, `GuardName`, `Body_Temp`) VALUES
(319, '', 'Bachi', 'Ella', '123 Bgy. Dela paz, Antipolo City', 'ella@yahoo.com', '0909090', 'Female', 'Finance', 'Ms. Leah', 'work', '07:00', '16:00', 'NO', 'NO', 'NO', 'No', '', 'Yes', '', '', '2021-05-09 17:28:25', '', '0'),
(320, '', 'Bachi', 'Ella', '123 Bgy. Dela paz, Antipolo City', 'ella@yahoo.com', '0909090909', 'Female', 'Finance', 'Ms. Leah', 'work', '07:00', '16:00', 'NO', 'NO', 'NO', 'No', '', 'No', '', '', '2021-05-09 17:36:15', '', '0'),
(321, '', 'test not', 'ssd', 'ssf', 'asdf@fasd.com', '5454545', 'Male', 'Finance', 'Ms. Leah', 'work', '07:00', '16:00', 'NO', 'NO', 'NO', 'No', '', 'No', '', '', '2021-05-09 17:49:10', '', '0'),
(322, '', 'dad', 'dad', 'dad', 'dsdds@rwrwrw', '445454', 'Male', 'IT', 'sdsd', 'sdsdsd', '07:00', '16:00', 'NO', 'NO', 'NO', 'No', '', 'No', '', '', '2021-05-09 17:50:27', '?', '0'),
(323, '', 'Bachi', 'Ella', '122232', 'ella@yahoo.com', '090909009', 'Female', 'Finance', 'Papi', 'asasas', '09:00', '10:00', 'NO', 'NO', 'NO', 'No', '', 'No', '', '', '2021-05-10 11:03:27', 'ella', '34.6'),
(324, '', 'Bachi', 'Ella', '122232', 'ella@yahoo.com', '090909009', 'Female', 'Finance', 'Papi', 'asasas', '09:00', '10:00', 'NO', 'NO', 'NO', 'No', '', 'No', '', '', '2021-05-10 13:50:00', '', '0'),
(326, '', 'Bachi', 'Ella1', '123 Bgy. Dela paz, Antipolo City', 'ella@yahoo.com', '0912090909', 'Female', '', '', '', '', '', 'NO', 'NO', 'NO', 'No', '', 'No', '', '', '2021-05-11 10:36:17', 'TINA', '34.6'),
(327, '', 'Papi', 'papi', '123 Bgy. Dela paz, Antipolo City', 'ella@yahoo.com', '0909090909', 'Male', 'Admission', 'asas', 'ass', '07:00', '16:00', 'NO', 'NO', 'NO', 'No', '', 'No', '', '', '2021-05-11 11:19:38', 'ella', '32.5'),
(328, '', 'pasp', 'skask', 'alsakslk', 'saksak@kjskj', '0909090', 'Male', 'IT', 'asas', 'asas', '13:00', '15:00', 'NO', 'NO', 'NO', 'No', '', 'Yes', '', '', '2021-05-11 11:22:13', 'yyyyyy', '34'),
(329, '', 'Bachiller', 'Mariel', '123 Bgy. Dela paz, Antipolo City', 'ella@yahoo.com', '09090909090', 'Female', 'IT', 'asas', 'asas', '13:00', '15:00', 'NO', 'NO', 'NO', 'No', '', 'No', '', '', '2021-05-11 12:39:21', 'TINA', '34.6'),
(330, '', 'Anadeo', 'Roger', '123 Bgy. Dela paz, Antipolo City', 'RAB@yahoo.com', '0912222390', 'Male', 'IT', 'asas', 'asas', '13:00', '15:00', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-11 12:45:32', '', ''),
(331, '', 'Anadeo', 'Roger', '123 Bgy. Dela paz, Antipolo City', 'RAB@yahoo.com', '0912222390', 'Male', 'IT', 'asas', 'asas', '13:00', '15:00', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-11 12:50:01', '', ''),
(332, '', 'Anadeo', 'Roger', '123 Bgy. Dela paz, Antipolo City', 'RAB@yahoo.com', '0912222390', 'Male', 'IT', 'asas', 'asas', '13:00', '15:00', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-11 12:51:42', '', ''),
(333, '', 'test not', 'owiewoei', '123 Bgy. Dela paz, Antipolo City', 'ella@yahoo.com', '0912232323', 'Female', 'Finance', 'You', 'Me', '', '', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-11 12:53:23', 'rt', '34.6'),
(334, '', 'test not', 'owiewoei', '123 Bgy. Dela paz, Antipolo City', 'ella@yahoo.com', '0912232323', 'Female', 'Finance', 'You', 'Me', '', '', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-11 12:57:01', '', ''),
(335, '', 'Gujelde', 'Ella', '123 Bgy. Dela paz, Antipolo City', 'ella@yahoo.com', '09123231223', 'Female', 'Admission', 'Ms. Leah', 'Work', '', '', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-11 15:14:14', 'rereer', '32.5'),
(336, '', 'Lamayo', 'Ting', '122232', 'wewe@yAHOO.com', '092320932039', 'Female', 'IT', 'Papi', 'Workie', '13:00', '15:00', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-11 15:18:02', 'rerereer', '32.5'),
(337, '', 'Bachi', 'Mariel', '', '', '', '', 'Finance', 'Ron', 'Werk', '', '', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-11 15:26:32', '', ''),
(338, '', 'da', 'dads', '', '', '', '', 'Finance', 'sds', 'dsds', '07:00', '16:00', 'YES', '', '', '', '', '', '', '', '2021-05-14 20:03:48', '', ''),
(342, '', 'Bachi', 'ew', '', '', '', '', 'Finance', 'ax', 'xzxz', '', '', 'YES', 'NO', 'NO', 'NO', '', '', '', '', '2021-05-14 20:07:34', '', ''),
(343, '', 'Bachi', 'ew', '', '', '', '', 'Finance', 'ax', 'xzxz', '', '', 'YES', 'NO', 'NO', 'NO', '', '', '', '', '2021-05-14 20:13:45', '', ''),
(344, '', 'Pedddd', 'RRRR', '', '', '', '', 'Finance', 'ssss', 'sldlksdl', '', '', 'YES', 'NO', 'NO', 'NO', '', '', '', '', '2021-05-14 20:14:37', '', ''),
(345, '', 'Pedddd', 'RRRR', '', '', '', '', 'Finance', 'ssss', 'sldlksdl', '', '', 'NO', 'NO', 'NO', 'Yes', 'asasa', '', '', '', '2021-05-14 20:16:11', '', ''),
(346, '', 'kj,,', 'lklkl', '', '', '', '', 'Admission', 'kjkjk', 'kjkkjk', '', '', 'YES', 'NO', 'NO', 'Yes', 'asasa', '', '', '', '2021-05-14 20:29:19', '', ''),
(347, '', 'nkk', 'kjkjk', '', '', '', '', 'Finance', 'klkl', 'l;l;l', '', '', 'YES', '', '', '', '', '', '', '', '2021-05-14 20:36:58', '', ''),
(348, '', 'Bachi', 'Ella', '', '', '', '', 'IT', 'rere', 'dfdffdfd', '', '', 'YES', '', '', '', '', '', '', '', '2021-05-14 21:29:05', '', ''),
(349, '', 'Bachi', 'Ella', '', '', '', '', 'IT', 'rere', 'dfdffdfd', '', '', 'NO', 'NO', 'NO', 'Yes', 'sds', '', '', '', '2021-05-14 21:29:35', '', ''),
(350, '', 'rere', 'rer', '', '', '', '', 'IT', 'dds', 'sdsds', '', '', 'YES', '', '', '', '', '', '', '', '2021-05-14 21:34:30', '', ''),
(351, '', 'De Castro', 'Rhea', '', '', '', '', 'IT', 'Mariel', 'Visit', '', '', 'NO', 'YES', '', '', '', '', '', '', '2021-05-15 09:43:09', '', ''),
(352, '', 'De Castro', 'Rhea', '', '', '', '', 'IT', 'Mariel', 'Visit', '', '', 'NO', 'YES', '', '', '', '', '', '', '2021-05-15 09:43:24', '', ''),
(353, '', 'De Castro', 'Rhea', '', '', '', '', 'IT', 'Mariel', 'Visit', '', '', 'NO', 'NO', 'NO', 'NO', '', 'Yes', '', '', '2021-05-15 09:44:18', 'Tina Bachiller', '36'),
(354, '', 'ass', 'assas', '', '', '', '', 'Finance', 'asa', 'sas', '07:00', '16:00', 'YES', '', '', '', '', '', '', '', '2021-05-17 09:13:47', '', ''),
(355, '', 'Bachiller', 'Mariel', '', '', '', '', 'Admission', 'Ella', 'Workie', '07:00', '15:00', 'NO', 'YES', '', '', '', '', '', '', '2021-05-19 07:34:11', '', ''),
(356, '', 'Bachiller', 'Mariel', '', '', '', '', 'IT', 'Ms. Leah', 'Work', '08:00', '16:00', 'YES', '', '', '', '', '', '', '', '2021-05-19 07:42:11', '', ''),
(357, '', 'Bachiller', 'Mariel', '', '', '', '', 'Admission', 'Ella', 'Workie', '07:00', '15:00', 'NO', 'NO', 'NO', 'NO', '', 'No', '', '', '2021-05-19 07:44:35', 'Tina', '35.6'),
(359, '', 'Bachiller', 'Ella', '', '', '', '', 'Finance', 'Ms. Leah', 'Workie', '', '', 'NO', 'YES', '', '', '', '', '', '', '2021-05-24 12:41:05', '', ''),
(360, '', 'Bachiller', 'Ella', '', '', '', '', 'Finance', 'Ms. Leah', 'Workie', '', '', 'NO', 'YES', '', '', '', '', '', '', '2021-05-24 12:41:20', '', ''),
(361, '', 'Bachiller', 'Ella', '', '', '', '', 'Finance', 'Ms. Leah', 'Workie', '', '', 'NO', 'YES', '', '', '', '', '', '', '2021-05-24 12:41:25', '', ''),
(362, '', 'Bachiller', 'Ella', '', '', '', '', 'IT', 'Ella', 'Visit', '', '', 'NO', 'NO', 'NO', 'Yes', 'USA', '', '', '', '2021-05-24 18:18:28', '', ''),
(363, '', 'Bachiller', 'Ella', '', '', '', '', 'IT', 'Ella', 'Visit', '', '', 'NO', 'NO', 'NO', 'Yes', 'USA', '', '', '', '2021-05-24 18:18:40', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
