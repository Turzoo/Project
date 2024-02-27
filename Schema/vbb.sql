-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 02:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `num` varchar(45) NOT NULL,
  `psw` varchar(45) NOT NULL,
  `blood_group` varchar(45) NOT NULL,
  `date_created` varchar(45) NOT NULL,
  `addr` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `uname`, `age`, `gender`, `email`, `num`, `psw`, `blood_group`, `date_created`, `addr`) VALUES
(3, 'sany', '25', 'Male', 'sany.khaled@northsouth.edu', '01739573965', '11111111', 'B+', '14/01/2021', 'Gazipur Sadar'),
(4, 'Turza', '15', 'Male', 'demo@gmail.com', '01245454545', 'turza123', 'B+', '14/01/2021', 'Gp'),
(5, 'Nusrat', '45', 'Female', 'nusrat@gmail.com', '01745454545', 'nusrat1234', 'AB-', '15/01/2021', 'Gazipur'),
(6, 'Sanym', '15', 'Male', 'sany.khaled@northsouth.edu', '01739573967', 'sanymkhaled', 'A+', '15/01/2021', 'Gazipur Sadar'),
(7, 'sadi', '18', 'Male', 'sadi@gmail.com', '01613604877', 'sadi1234', 'O+', '16/01/2021', 'Khulna'),
(8, 'demo', '24', 'Male', 'demo@northsouth.edu', '01000000144', '12345678', 'B+', '16/01/2021', 'Gazipur'),
(9, 'Sadia', '45', 'Female', 'sadia@email.com', '01739573965', '12345678', 'AB+', '16/01/2021', 'Chowrasta'),
(10, 'Rhythm', '22', 'Male', 'rhythm@gmail.com', '01725252525', '123123123', 'B+', '16/01/2021', 'Dighirchala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
