-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 02:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akinito`
--

CREATE TABLE `akinito` (
  `idAkinito` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `register_date` date NOT NULL,
  `refresh_date` date NOT NULL,
  `size` decimal(4,0) NOT NULL,
  `Area` varchar(45) NOT NULL,
  `Sale_Rent` binary(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akinito`
--

INSERT INTO `akinito` (`idAkinito`, `price`, `register_date`, `refresh_date`, `size`, `Area`, `Sale_Rent`) VALUES
(28, 250, '2021-01-07', '2021-01-07', '30', 'Αγιά Λάρισας|Θεσσαλίας', 0x30),
(29, 600, '2021-01-07', '2021-01-07', '250', 'Άγιος Κωνσταντίνος Φθιώτιδας|Στερεάς Ελλάδας', 0x30),
(30, 600, '2021-01-07', '2021-01-07', '500', 'Αγρίνιο|Δυτικής Ελλάδας', 0x30),
(31, 600, '2021-01-07', '2021-01-07', '600', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(32, 100000, '2021-01-07', '2021-01-07', '500', 'Αγία Μαρίνα Κορωπίου|Αττικής', 0x31),
(33, 1500, '2021-01-07', '2021-01-07', '30', 'Άγιος Νικόλαος Ληλαντίων|Στερεάς Ελλάδας', 0x31);

-- --------------------------------------------------------

--
-- Table structure for table `hide`
--

CREATE TABLE `hide` (
  `idXristi` int(11) NOT NULL,
  `IdAggelia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `idHome` int(11) NOT NULL,
  `Ypokatigoria` varchar(45) NOT NULL,
  `Ypnodomatia` int(11) NOT NULL,
  `Orofos` int(11) NOT NULL,
  `Etos_kataskeuis` int(11) NOT NULL,
  `Epipla` binary(1) NOT NULL DEFAULT '0',
  `Parking` binary(1) NOT NULL DEFAULT '0',
  `Apothiki` binary(1) NOT NULL DEFAULT '0',
  `Verada` binary(1) NOT NULL DEFAULT '0',
  `Porta_Asfalias` binary(1) NOT NULL DEFAULT '0',
  `Klimatismos` binary(1) NOT NULL DEFAULT '0',
  `Sinagermos` binary(1) NOT NULL DEFAULT '0',
  `Tzaki` binary(1) NOT NULL DEFAULT '0',
  `Elevator` binary(1) NOT NULL DEFAULT '0',
  `View` binary(1) NOT NULL DEFAULT '0',
  `Garden` binary(1) NOT NULL DEFAULT '0',
  `Pool` binary(1) NOT NULL DEFAULT '0',
  `Retire` binary(1) NOT NULL DEFAULT '0',
  `Sun_Heater` binary(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`idHome`, `Ypokatigoria`, `Ypnodomatia`, `Orofos`, `Etos_kataskeuis`, `Epipla`, `Parking`, `Apothiki`, `Verada`, `Porta_Asfalias`, `Klimatismos`, `Sinagermos`, `Tzaki`, `Elevator`, `View`, `Garden`, `Pool`, `Retire`, `Sun_Heater`) VALUES
(28, 'Apartment', 2, 6, 1990, 0x31, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30),
(32, 'Apartment', 6, 5, 1995, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `kataxorei`
--

CREATE TABLE `kataxorei` (
  `idUser` int(11) NOT NULL,
  `IdAkinito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kataxorei`
--

INSERT INTO `kataxorei` (`idUser`, `IdAkinito`) VALUES
(1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `idLand` int(11) NOT NULL,
  `Ypokatigoria` varchar(45) NOT NULL,
  `Corner` binary(1) NOT NULL DEFAULT '0',
  `Oikistiki_Zoni` binary(1) NOT NULL DEFAULT '0',
  `Entos_Sxediou` binary(1) NOT NULL DEFAULT '0',
  `Prosopsis` binary(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`idLand`, `Ypokatigoria`, `Corner`, `Oikistiki_Zoni`, `Entos_Sxediou`, `Prosopsis`) VALUES
(30, 'Everything', 0x31, 0x30, 0x30, 0x30),
(31, 'Farmland', 0x30, 0x30, 0x30, 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `idOffice` int(11) NOT NULL,
  `Ypokatigoria` varchar(45) NOT NULL,
  `Domatia` int(11) NOT NULL,
  `Orofos` int(11) NOT NULL,
  `Etos_kataskeuis` int(11) NOT NULL,
  `Parking` binary(1) NOT NULL DEFAULT '0',
  `Apothiki` binary(1) NOT NULL DEFAULT '0',
  `Porta_asfalias` binary(1) NOT NULL DEFAULT '0',
  `Klimatismos` binary(1) NOT NULL DEFAULT '0',
  `Sinagermos` binary(1) NOT NULL DEFAULT '0',
  `Elevator` binary(1) NOT NULL DEFAULT '0',
  `Retire` binary(1) NOT NULL DEFAULT '0',
  `Corner` binary(1) NOT NULL DEFAULT '0',
  `Ramp_Load` binary(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`idOffice`, `Ypokatigoria`, `Domatia`, `Orofos`, `Etos_kataskeuis`, `Parking`, `Apothiki`, `Porta_asfalias`, `Klimatismos`, `Sinagermos`, `Elevator`, `Retire`, `Corner`, `Ramp_Load`) VALUES
(29, 'Werehouse', 1, 0, 2000, 0x31, 0x31, 0x31, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30),
(33, 'Office', 1, 9, 1960, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `idXristi` int(11) NOT NULL,
  `IdAggelia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `idxristis` int(11) NOT NULL,
  `idaggelia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Onoma` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tilefono` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `Onoma`, `password`, `email`, `tilefono`) VALUES
(1, 'JASON', '1234', 'JASON@TEST.COM', 2147483647),
(2, 'MIKE', '1235', 'MIKE@TEST.COM', 2147483647),
(8, 'test6', '$2y$10$DGioncrPB96jaNF0S8n.LOp70RFQaVBAq7zLdk', 'test', 6986017292),
(10, 'test', '1234', '1234', 6986017292);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akinito`
--
ALTER TABLE `akinito`
  ADD PRIMARY KEY (`idAkinito`),
  ADD UNIQUE KEY `idAkinito_UNIQUE` (`idAkinito`);

--
-- Indexes for table `hide`
--
ALTER TABLE `hide`
  ADD PRIMARY KEY (`idXristi`,`IdAggelia`),
  ADD KEY `IdAggelia_hide_idx` (`IdAggelia`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`idHome`),
  ADD UNIQUE KEY `idHome_UNIQUE` (`idHome`);

--
-- Indexes for table `kataxorei`
--
ALTER TABLE `kataxorei`
  ADD PRIMARY KEY (`idUser`,`IdAkinito`),
  ADD KEY `agelia_idx` (`IdAkinito`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`idLand`),
  ADD UNIQUE KEY `idLand_UNIQUE` (`idLand`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`idOffice`),
  ADD UNIQUE KEY `idOffice_UNIQUE` (`idOffice`);

--
-- Indexes for table `save`
--
ALTER TABLE `save`
  ADD PRIMARY KEY (`idXristi`,`IdAggelia`),
  ADD KEY `idAggelia_idx` (`IdAggelia`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`idxristis`,`idaggelia`),
  ADD KEY `idaggelias_idx` (`idaggelia`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idUser_UNIQUE` (`idUser`),
  ADD UNIQUE KEY `Onoma` (`Onoma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akinito`
--
ALTER TABLE `akinito`
  MODIFY `idAkinito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hide`
--
ALTER TABLE `hide`
  ADD CONSTRAINT `IdAggelia_hide` FOREIGN KEY (`IdAggelia`) REFERENCES `akinito` (`idAkinito`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `IdXristi_Hide` FOREIGN KEY (`idXristi`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `IdAggelia_Home` FOREIGN KEY (`idHome`) REFERENCES `akinito` (`idAkinito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kataxorei`
--
ALTER TABLE `kataxorei`
  ADD CONSTRAINT `agelia` FOREIGN KEY (`IdAkinito`) REFERENCES `akinito` (`idAkinito`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `xristis` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `land`
--
ALTER TABLE `land`
  ADD CONSTRAINT `idAggelia_Land` FOREIGN KEY (`idLand`) REFERENCES `akinito` (`idAkinito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `Id_Aggelia_Office` FOREIGN KEY (`idOffice`) REFERENCES `akinito` (`idAkinito`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `save`
--
ALTER TABLE `save`
  ADD CONSTRAINT `idAggelia_save` FOREIGN KEY (`IdAggelia`) REFERENCES `akinito` (`idAkinito`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idXristi_save` FOREIGN KEY (`idXristi`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `idaggelias_Search` FOREIGN KEY (`idaggelia`) REFERENCES `akinito` (`idAkinito`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idxristi_Search` FOREIGN KEY (`idxristis`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
