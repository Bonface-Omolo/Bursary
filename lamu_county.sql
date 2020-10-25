-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 09:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamu_county`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE `admini` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `contact` int(20) NOT NULL,
  `gander` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`id`, `fname`, `lname`, `idnumber`, `contact`, `gander`, `email`, `password`) VALUES
(1, 'Rose', 'Kahora', 6767667, 743522234, 'male', 'kahora@gmail.com', '12345678'),
(2, 'Nicholas', 'Ouma', 665666, 99999, 'Others', 'ouma@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `declaration`
--

CREATE TABLE `declaration` (
  `id` int(11) NOT NULL,
  `number` int(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `signature` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `fpname` text NOT NULL,
  `lpname` text NOT NULL,
  `psignature` varchar(50) NOT NULL,
  `date2` date NOT NULL,
  `approve` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `declaration`
--

INSERT INTO `declaration` (`id`, `number`, `fname`, `lname`, `signature`, `date`, `fpname`, `lpname`, `psignature`, `date2`, `approve`) VALUES
(1, 76890, 'Nicholas', 'Otieno', 'Co', '2020-09-02', 'Rose', 'Kaho', 'RK', '2020-09-22', 'Accepted'),
(2, 456789, 'Nicholas', 'Ouma', 'Co', '2020-09-23', 'Rose', 'Kaho', 'RK', '2020-09-30', 'Accepted'),
(3, 5678567, 'Christine', 'Ochieng', 'n.o', '2020-10-01', 'Rose', 'Kaho', 'RK', '2020-10-01', 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` int(15) NOT NULL,
  `county` text NOT NULL,
  `subcounty` text NOT NULL,
  `ward` text NOT NULL,
  `siblings` int(10) NOT NULL,
  `children` int(10) NOT NULL,
  `siblingsseco` int(10) NOT NULL,
  `siblingspost` int(10) NOT NULL,
  `name1` text NOT NULL,
  `school1` text NOT NULL,
  `name2` text NOT NULL,
  `school2` text NOT NULL,
  `name3` text NOT NULL,
  `school3` text NOT NULL,
  `Scholarship` text NOT NULL,
  `amount` int(10) NOT NULL,
  `year` text NOT NULL,
  `organization` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id`, `number`, `fname`, `lname`, `contact`, `county`, `subcounty`, `ward`, `siblings`, `children`, `siblingsseco`, `siblingspost`, `name1`, `school1`, `name2`, `school2`, `name3`, `school3`, `Scholarship`, `amount`, `year`, `organization`) VALUES
(1, 4567890, 'Nicholas', 'Ouma', 77777, 'YES', 'Lamu East', 'Kanza', 2, 3, 4, 6, 'hana hana', 'piu', 'hana hana', 'piu', 'hana hana', 'piu', '', 78888, 'second Year', 'piu'),
(2, 76543456, 'Rose', 'Ouma', 999998976, 'Lamu West', 'Lamu West', 'Mkomani', 1, 1, 2, 1, 'hana hana', 'piu', 'hana hana', 'piu', 'hana hana', 'piu', 'YES', 78888, 'First Year', 'piu'),
(3, 456789, 'Nicholas', 'Otieno', 999998765, 'Lamu East', 'Lamu East', 'Kanza', 4, 3, 5, 3, 'hana hana', 'piu', 'hana hana', 'piu', 'hana hana', 'piu', 'NO', 70000, 'First Year', 'piu'),
(4, 56789765, 'Christine', 'Ouma', 2147483647, 'Lamu West', 'Lamu West', 'Hindi', 3, 3, 7, 5, 'kened who', 'kca', 'kened who', 'piu', 'kened who', 'ku', 'NO', 20000, 'First Year', 'piu');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `id` int(11) NOT NULL,
  `number` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `county` text NOT NULL,
  `admission` varchar(20) NOT NULL,
  `pobox` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(14) NOT NULL,
  `bank` varchar(300) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `account` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `number`, `name`, `campus`, `county`, `admission`, `pobox`, `city`, `email`, `contact`, `bank`, `branch`, `account`, `time`, `year`) VALUES
(1, 3456789, 'piu', 'noirobi', 'Lamu', 'bit/099/2121', '34567890', 'Nairobi', 'piu@ac.ke', 99999, 'ngara', 'muranga', '234567890', 'ONE YEARS', 'FIRST YEAR'),
(2, 5467890, 'kenya', 'Kiambu', 'Kisumu', 'bit/099/2122', '3457890', 'Nairobi', 'kenya@ac.ke', 99999897, 'ngara', 'Nairobi', '8765435678', 'THREE YEARS', 'THIRD YEAR'),
(3, 6754567, '', '', '', '', '', '', '', 999995432, '', '', '', '', ''),
(4, 7654567, 'elgon', 'Kiambu', 'Lamu', 'bit/099/2167', '34567890', 'KISUMU', 'otieno@gmail.com', 999999876, 'ngara', 'LAMU', '456789', 'FOUR YEARS', 'FIRST YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fullnames` text NOT NULL,
  `othernames` text NOT NULL,
  `sex` text NOT NULL,
  `birthdate` date NOT NULL,
  `idnumber` int(54) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(30) NOT NULL,
  `subcounty` text NOT NULL,
  `ward` text NOT NULL,
  `gurdiannames` text NOT NULL,
  `gurdianidnumber` int(50) NOT NULL,
  `gurdianphonenumber` int(50) NOT NULL,
  `relationshiptogurdian` text NOT NULL,
  `residencecounty` text NOT NULL,
  `subcounty1` text NOT NULL,
  `ward1` text NOT NULL,
  `nameofuniversitycollege` text NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `locationcumpus` varchar(40) NOT NULL,
  `county` text NOT NULL,
  `pobox` int(50) NOT NULL,
  `city` text NOT NULL,
  `phonenumber1` int(12) NOT NULL,
  `yearofadmission` varchar(4) NOT NULL,
  `admissionnumber` varchar(50) NOT NULL,
  `yearofstudy` varchar(4) NOT NULL,
  `totalfeespayable` int(100) NOT NULL,
  `totalfeespaid` int(50) NOT NULL,
  `balance` int(100) NOT NULL,
  `HowmuchloanareyourecievingfromtheHigherEducationsBoad` int(100) NOT NULL,
  `nameofbank` text NOT NULL,
  `branch` varchar(100) NOT NULL,
  `accountnumber` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `approve` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullnames`, `othernames`, `sex`, `birthdate`, `idnumber`, `email`, `phonenumber`, `subcounty`, `ward`, `gurdiannames`, `gurdianidnumber`, `gurdianphonenumber`, `relationshiptogurdian`, `residencecounty`, `subcounty1`, `ward1`, `nameofuniversitycollege`, `emailaddress`, `locationcumpus`, `county`, `pobox`, `city`, `phonenumber1`, `yearofadmission`, `admissionnumber`, `yearofstudy`, `totalfeespayable`, `totalfeespaid`, `balance`, `HowmuchloanareyourecievingfromtheHigherEducationsBoad`, `nameofbank`, `branch`, `accountnumber`, `id`, `approve`) VALUES
('kevin ouma', 'kevo', 'male', '2020-09-27', 876543, 'kevo@gmail.com', 4567890, 'kisumu', 'uioo ', 'kevo', 2345678, 23456789, '2345678', 'kevo', 'kevo', 'kebo', 'kevo', 'kevo@gmail.com', 'piu', 'kisumu', 3456789, 'kevo', 34567890, '3459', '345678', '4356', 76, 7667, 5678, 67890, 'kevo', 'kevo', 2147483647, 4, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `secoaward`
--

CREATE TABLE `secoaward` (
  `id` int(11) NOT NULL,
  `number` int(20) NOT NULL,
  `institution` text NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secoaward`
--

INSERT INTO `secoaward` (`id`, `number`, `institution`, `amount`) VALUES
(1, 56789, 'Secondary', '10 000'),
(2, 56789567, 'Secondary', '10 000'),
(3, 34567, 'Secondary', '10 000');

-- --------------------------------------------------------

--
-- Table structure for table `secondary1`
--

CREATE TABLE `secondary1` (
  `id` int(11) NOT NULL,
  `number` varchar(11) NOT NULL,
  `form` varchar(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gander` text NOT NULL,
  `place` text NOT NULL,
  `subcounty` text NOT NULL,
  `ward` text NOT NULL,
  `area` text NOT NULL,
  `school` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secondary1`
--

INSERT INTO `secondary1` (`id`, `number`, `form`, `fname`, `lname`, `gander`, `place`, `subcounty`, `ward`, `area`, `school`, `category`) VALUES
(1, '76543', 'ONE', 'Christine', 'Ouma', 'Male', 'Nairobi', 'Lamu East', 'Kanza', 'Ngara', 'pioneer School', 'National'),
(2, '56789', 'TWO', 'Kevin', 'Otieno', 'Male', 'Nairobi', 'Lamu West', 'Hindi', 'Ngara', 'Alliance School', 'Boarding'),
(3, '56789455', 'THREE', 'Christine', 'Otieno', 'Female', 'Nairobi', 'Lamu East', 'Mkomani', 'Ngara', 'Alliance School', 'National');

-- --------------------------------------------------------

--
-- Table structure for table `secondary2`
--

CREATE TABLE `secondary2` (
  `id` int(11) NOT NULL,
  `number` int(10) NOT NULL,
  `question` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` int(15) NOT NULL,
  `children` varchar(200) NOT NULL,
  `siblings` varchar(200) NOT NULL,
  `institution` varchar(200) NOT NULL,
  `form` varchar(12) NOT NULL,
  `sponsor` varchar(200) NOT NULL,
  `donors` varchar(200) NOT NULL,
  `much` varchar(20) NOT NULL,
  `balance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secondary2`
--

INSERT INTO `secondary2` (`id`, `number`, `question`, `fname`, `lname`, `contact`, `children`, `siblings`, `institution`, `form`, `sponsor`, `donors`, `much`, `balance`) VALUES
(1, 54326543, 'Father', 'Kevin', 'Otieno', 999995432, 'YES', 'kevo', 'piu', '1', 'piu', 'YES', '4555', '5678'),
(2, 567899, 'Father', 'Christine', 'Otieno', 77777098, 'YES', 'kevo', 'piu', 'Form 3', 'piu', 'YES', '4555', '5678'),
(3, 56789098, 'Father', 'Kevin', 'Ochieng', 77777987, 'YES', 'kevo', 'piu', '3', 'piu', 'YES', '4555', 'kevo');

-- --------------------------------------------------------

--
-- Table structure for table `secondary3`
--

CREATE TABLE `secondary3` (
  `id` int(11) NOT NULL,
  `number` int(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `signature` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `approve` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secondary3`
--

INSERT INTO `secondary3` (`id`, `number`, `fname`, `lname`, `signature`, `date`, `approve`) VALUES
(1, 56789, 'Christine', 'Otieno', 'n.o', '2020-09-30', 'Accepted'),
(2, 56789567, 'Christine', 'Otieno', 'n.o', '2020-10-01', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `number` int(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gander` text NOT NULL,
  `date` date NOT NULL,
  `contact` int(20) NOT NULL,
  `county` text NOT NULL,
  `ward` text NOT NULL,
  `special` text NOT NULL,
  `need` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `description`, `number`, `fname`, `lname`, `gander`, `date`, `contact`, `county`, `ward`, `special`, `need`) VALUES
(1, 'I am currently an ongoing student in school.', 435678, 'Christine', 'Otieno', 'Male', '2020-09-04', 77777, 'Lamu East', 'Kanza', 'Yes', 'n/a'),
(2, 'I am currently an ongoing student in school.', 4567898, 'Kevin', 'Ouma', 'Male', '2020-09-23', 77777, 'Lamu East', 'Kanza', 'Yes', 'n/a'),
(3, 'I am currently an ongoing student in school.', 45678567, 'Kahora', 'Rose', 'Female', '2020-09-29', 234567, 'Lamu West', 'Mkomani', 'No', 'n/a'),
(4, 'I am currently an ongoing student in school.', 567689, 'Hana', 'anayi', 'Male', '2020-09-10', 77777876, 'Lamu East', 'Kanza', 'No', 'n/a'),
(8, 'I am currently an ongoing student in school.', 456789, 'Christine', 'Atieno', 'Male', '2020-10-01', 999997654, 'Lamu West', 'Mkomani', 'Yes', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `uniaward`
--

CREATE TABLE `uniaward` (
  `id` int(11) NOT NULL,
  `number` int(20) NOT NULL,
  `institution` text NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uniaward`
--

INSERT INTO `uniaward` (`id`, `number`, `institution`, `amount`) VALUES
(1, 56789, 'University', '20 000'),
(2, 56789567, 'University', '20 000'),
(3, 5678954, 'College', '15 000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `idno` varchar(100) NOT NULL,
  `gander` text NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `idno`, `gander`, `contact`, `email`, `password`) VALUES
(9, 'Kevin', 'Atieno', '43535', '0', 734567, '0', '12345678'),
(10, 'Nicholas', 'Ouma', '4353554', 'Female', 799999, 'tumbo@gmail.com', '12345678'),
(11, 'Rose', 'Kahora', '8764345', 'Female', 7654323, 'kahora09@gmail.com', '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `declaration`
--
ALTER TABLE `declaration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secoaward`
--
ALTER TABLE `secoaward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondary1`
--
ALTER TABLE `secondary1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondary2`
--
ALTER TABLE `secondary2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondary3`
--
ALTER TABLE `secondary3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uniaward`
--
ALTER TABLE `uniaward`
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
-- AUTO_INCREMENT for table `admini`
--
ALTER TABLE `admini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `declaration`
--
ALTER TABLE `declaration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `secoaward`
--
ALTER TABLE `secoaward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `secondary1`
--
ALTER TABLE `secondary1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `secondary2`
--
ALTER TABLE `secondary2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `secondary3`
--
ALTER TABLE `secondary3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uniaward`
--
ALTER TABLE `uniaward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
