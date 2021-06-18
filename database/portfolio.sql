-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 02:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(255) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bedrijfnaam` varchar(100) DEFAULT NULL,
  `vestigingsplaats` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `telefoonnummer` varchar(255) DEFAULT NULL,
  `onderwerp` varchar(255) NOT NULL,
  `bericht` varchar(500) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `naam`, `email`, `bedrijfnaam`, `vestigingsplaats`, `adres`, `postcode`, `telefoonnummer`, `onderwerp`, `bericht`, `datum`) VALUES
(7, 'Daniel', 'hallo@hallo.nl', '', '', '', '', '', 'Hallo', 'hallo', '2021-06-18'),
(8, 'Daniel', 'hallo@hallo.nl', '', '', '', '1234AA', '', 'Hallo', 'daw', '2021-06-18'),
(9, 'a', 'hallo@hallo.nl', '', '', '', '', '', 'Hallo', 'za', '2021-06-18'),
(10, 'Daniel', 'Hallo@gmail.com', 'bedrijf', 'haarlem', 'Straat 6', '2134AT', '0612345678', 'Belangrijk', 'Hallo!', '2021-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `ervaring`
--

CREATE TABLE `ervaring` (
  `ervaring_id` int(4) NOT NULL,
  `ervaring_bedrijf` varchar(256) NOT NULL,
  `ervaring_omschrijving` varchar(256) NOT NULL,
  `plaatje` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ervaring`
--

INSERT INTO `ervaring` (`ervaring_id`, `ervaring_bedrijf`, `ervaring_omschrijving`, `plaatje`) VALUES
(1, 'Hanos', 'Nijverheidsweg 27c, 2031 CN Haarlem\r\nOrderpicker', 'HanosLogo.jpg'),
(2, 'Werk 2', 'aaaaaaa', 'icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `projecten`
--

CREATE TABLE `projecten` (
  `project_id` int(4) NOT NULL,
  `projectnaam` varchar(256) NOT NULL,
  `projectomschrijving` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projecten`
--

INSERT INTO `projecten` (`project_id`, `projectnaam`, `projectomschrijving`) VALUES
(1, 'Bingo', 'Het spel Bingo'),
(2, 'Vier op een rij', 'Het spel vier op een rij'),
(3, 'Schuifpuzzel', 'Schuifpuzzel gemaakt in c#');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(4) NOT NULL,
  `skill_naam` varchar(256) NOT NULL,
  `width` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_naam`, `width`) VALUES
(1, 'C#', '80%'),
(3, 'Html', '75%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `ervaring`
--
ALTER TABLE `ervaring`
  ADD PRIMARY KEY (`ervaring_id`);

--
-- Indexes for table `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ervaring`
--
ALTER TABLE `ervaring`
  MODIFY `ervaring_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projecten`
--
ALTER TABLE `projecten`
  MODIFY `project_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
