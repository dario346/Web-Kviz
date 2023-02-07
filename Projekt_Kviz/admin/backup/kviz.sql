-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 12:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kviz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookievrijeme`
--

CREATE TABLE `cookievrijeme` (
  `trajanje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cookievrijeme`
--

INSERT INTO `cookievrijeme` (`trajanje`) VALUES
(6);

-- --------------------------------------------------------

--
-- Table structure for table `highscore`
--

CREATE TABLE `highscore` (
  `korisnikID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `highscore`
--

INSERT INTO `highscore` (`korisnikID`, `username`, `score`) VALUES
(1, 'stipe', '400'),
(2, 'snte', '679'),
(3, 'jure', '12');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnikID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `hashing` varchar(50) NOT NULL,
  `IsAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnikID`, `username`, `email`, `pass`, `gender`, `hashing`, `IsAdmin`) VALUES
(92, 'aaaa', 'aaaaa@gmail.com', 'aaaa', 'M', '9b70e8fe62e40c570a322f1b0b659098', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pitanja`
--

CREATE TABLE `pitanja` (
  `pitanjeID` int(11) NOT NULL,
  `pitanje` varchar(255) NOT NULL,
  `opcija1` varchar(255) NOT NULL,
  `opcija2` varchar(255) NOT NULL,
  `opcija3` varchar(255) NOT NULL,
  `opcija4` varchar(255) NOT NULL,
  `odgovor` varchar(255) NOT NULL,
  `korOdg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pitanja`
--

INSERT INTO `pitanja` (`pitanjeID`, `pitanje`, `opcija1`, `opcija2`, `opcija3`, `opcija4`, `odgovor`, `korOdg`) VALUES
(1, 'Koji je glavni grad Hrvatske?', 'Zagreb', 'Rijeka', 'Osijek', 'Split', 'Zagreb', 'Split'),
(2, 'Koji je glavni grad Poljske?', 'Poznan', 'Varšava', 'Gdansk', 'Lublin', 'Varšava', 'Lublin'),
(3, 'Koji je glavni grad Njemačke?', 'Hamburg', 'Munchen', 'Essen', 'Berlin', 'Berlin', 'Berlin'),
(4, 'Koji je glavni grad Bosne i Hercegovine?', 'Sarajevo', 'Mostar', 'Banja Luka', 'Tuzla', 'Sarajevo', 'Tuzla'),
(5, 'Koji je glavni grad Turske?', 'Ankara', 'Izmir', 'Adana', 'Istanbul', 'Ankara', 'Ankara'),
(6, 'Koji je glavni grad Italije?', 'Rim', 'Napulj', 'Venecija', 'Milano', 'Rim', 'Napulj'),
(7, 'Koji je glavni grad Španjolske?', 'Madrid', 'Bilbao', 'Barcelona', 'Zaragoza', 'Madrid', 'Bilbao'),
(8, 'Koji je glavni grad Velike Britanije?', 'London', 'Manchester', 'Cardiff', 'Edinburgh', 'London', 'London'),
(9, 'Koji je glavni grad Japana?', 'Osaka', 'Tokio', 'Nagasaki', 'Yokohama', 'Tokio', 'Tokio'),
(10, 'Koji je glavni grad Kine?', 'Šangaj', 'Guangzhou', 'Peking', 'Kingdao', 'Peking', 'Kingdao'),
(11, 'Koji je glavni grad Kolumbije?', 'Cali', 'Medellin', 'Bogota', 'Barranquilla', 'Bogota', 'Bogota'),
(12, 'Koji je glavni grad Salvador?', 'San Salvador', 'Santa Ana', 'San Miguel', 'Santa Tecla', 'San Salvador', 'Santa Ana'),
(13, 'Koji je glavni grad Australije?', 'Sidney', 'Melbourne', 'Canberra', 'Adelaide', 'Canberra', 'Sidney'),
(14, 'Koji je glavni grad Grenlanda?', 'Atammik', 'Arsuk', 'Nuuk', 'Kulusuk', 'Nuuk', 'Kulusuk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cookievrijeme`
--
ALTER TABLE `cookievrijeme`
  ADD PRIMARY KEY (`trajanje`);

--
-- Indexes for table `highscore`
--
ALTER TABLE `highscore`
  ADD PRIMARY KEY (`korisnikID`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnikID`);

--
-- Indexes for table `pitanja`
--
ALTER TABLE `pitanja`
  ADD PRIMARY KEY (`pitanjeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `pitanja`
--
ALTER TABLE `pitanja`
  MODIFY `pitanjeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
