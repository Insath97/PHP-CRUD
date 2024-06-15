-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 02:42 AM
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
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `regnumber` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `fullname`, `regnumber`, `nic`, `email`, `phonenumber`, `city`, `dateCreated`) VALUES
(1, 'Mohamed Insath', 'SAM/IT/2020/F/0094', '992561156V', 'inshath97.mi@gmail.com', 775062716, 'Sainthamaruthu', '2024-06-15'),
(2, 'John Doe', 'SAM/IT/2020/F/0076', '987654321V', 'john.doe@gmail.com', 775662718, 'Kalmunai', '2024-06-15'),
(3, 'Denise Bullock', 'SAM/IT/2020/F/0080', '992667956V', 'qotel@mailinator.com', 753732506, 'Sammanthurai', '2024-06-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
