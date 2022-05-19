-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 04:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebookphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `phonebook`
--

CREATE TABLE `phonebook` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(255) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `countrycode` int(10) NOT NULL,
  `areacode` int(10) NOT NULL,
  `mobilenumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `idnumber`, `surname`, `firstname`, `occupation`, `gender`, `countrycode`, `areacode`, `mobilenumber`) VALUES
(16, '1', 'Solmayor', 'Francis', 'IT', 'male', 60, 11, '09387458236'),
(17, '2', 'Mahilum', 'Earl', 'Police', 'male', 62, 22, '09803457983'),
(18, '3', 'Montilla', 'Regin', 'Fireman', 'male', 63, 33, '09874357645'),
(19, '4', 'Tuna', 'Gil', 'Chef', 'male', 65, 44, '09763475325'),
(20, '5', 'Paulo', 'Kernel', 'Politician', 'male', 66, 55, '09982374923'),
(21, '6', 'Esteves', 'Christian', 'IT', 'male', 84, 66, '09932845872'),
(22, '7', 'Asumbra', 'Johny', 'IT', 'male', 673, 77, '09625134623'),
(23, '8', 'Cristobal', 'Clyde', 'IT', 'male', 855, 88, '09723645673'),
(24, '9', 'Emboltorio', 'Spencer', 'IT', 'male', 856, 99, '09847567343'),
(25, '10', 'Catulong', 'Harvey', 'Police', 'male', 95, 101, '09375486283'),
(26, '11', 'Passaporte', 'Emy', 'IT', 'female', 670, 111, '09836547676'),
(27, '12', 'Gulle', 'Gwen', 'IT', 'female', 60, 121, '09192364763'),
(28, '13', 'Sustiger', 'Zachery', 'Fireman', 'male', 62, 131, '09093786489'),
(29, '14', 'Teker', 'James', 'Police', 'male', 63, 141, '09387468236'),
(30, '15', 'Antenero', 'Marlou', 'IT', 'male', 65, 151, '09378264763'),
(31, '16', 'Somogod', 'Ybonie', 'IT', 'male', 66, 161, '09913764876'),
(34, '17', 'Tuazon', ' Fritz', 'IT', 'male', 63, 171, '09376487234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phonebook`
--
ALTER TABLE `phonebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
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
-- AUTO_INCREMENT for table `phonebook`
--
ALTER TABLE `phonebook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
