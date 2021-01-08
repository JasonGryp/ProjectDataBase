-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 04:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
(33, 1500, '2021-01-07', '2021-01-07', '30', 'Άγιος Νικόλαος Ληλαντίων|Στερεάς Ελλάδας', 0x31),
(34, 400, '2021-01-08', '2021-01-08', '80', 'Αγία Μαρίνα Χανίων|Κρήτης', 0x30),
(35, 30000, '2021-01-08', '2021-01-08', '70', 'Αρχάνες|Κρήτης', 0x31),
(36, 700, '2021-01-08', '2021-01-08', '60', 'Βαμβακόπουλο Χανίων|Κρήτης', 0x30),
(37, 40000, '2021-01-08', '2021-01-08', '80', 'Άγιος Στέφανος|Αττικής', 0x31),
(38, 650, '2021-01-08', '2021-01-08', '60', 'Ανάβυσσος|Αττικής', 0x30),
(39, 900, '2021-01-08', '2021-01-08', '90', 'Βουλιαγμένη|Αττικής', 0x30),
(40, 1000, '2021-01-08', '2021-01-08', '9000', 'Αγιά Λάρισας|Θεσσαλίας', 0x30),
(41, 1000, '2021-01-08', '2021-01-08', '8000', 'Βελεστίνο|Θεσσαλίας', 0x30),
(42, 20000, '2021-01-08', '2021-01-08', '1000', 'Ελασσόνα|Θεσσαλίας', 0x31),
(43, 800, '2021-01-08', '2021-01-08', '50', 'Αγία Παρασκευή Θεσ/νίκης|Κεντρικής Μακεδονίας', 0x30),
(44, 200000, '2021-01-08', '2021-01-08', '1000', 'Γέφυρα Θεσσαλονίκης|Κεντρικής Μακεδονίας', 0x31),
(45, 500, '2021-01-08', '2021-01-08', '100', 'Βαθύλακκος Θεσσαλονίκης|Κεντρικής Μακεδονίας', 0x30),
(46, 300, '2021-01-08', '2021-01-08', '35', 'Αμπελάκια Σαλαμίνας|Αττικής', 0x30),
(47, 400, '2021-01-08', '2021-01-08', '70', 'Αίγινα|Αττικής', 0x30),
(48, 1000, '2021-01-08', '2021-01-08', '140', 'Γαλατάς Τροιζηνίας|Αττικής', 0x30),
(49, 30000, '2021-01-08', '2021-01-08', '80', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(50, 1000, '2021-01-08', '2021-01-08', '70', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(51, 200, '2021-01-08', '2021-01-08', '40', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(52, 10000, '2021-01-08', '2021-01-08', '5000', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(53, 1000, '2021-01-08', '2021-01-08', '5000', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(54, 20000, '2021-01-08', '2021-01-08', '8000', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(55, 1500, '2021-01-08', '2021-01-08', '100', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(56, 1000, '2021-01-08', '2021-01-08', '80', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(57, 40000, '2021-01-08', '2021-01-08', '100', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(58, 500, '2021-01-08', '2021-01-08', '90', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(59, 220, '2021-01-08', '2021-01-08', '36', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(60, 7000, '2021-01-08', '2021-01-08', '3000', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(61, 3000, '2021-01-08', '2021-01-08', '1000', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(62, 500, '2021-01-08', '2021-01-08', '85', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(63, 850, '2021-01-08', '2021-01-08', '50', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(64, 50000, '2021-01-08', '2021-01-08', '130', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(65, 500, '2021-01-08', '2021-01-08', '80', 'Άγιος Βασίλειος Αχαΐας|Δυτικής Ελλάδας', 0x30),
(66, 900, '2021-01-08', '2021-01-08', '3000', 'Κολινδρός|Κεντρικής Μακεδονίας', 0x30),
(67, 400, '2021-01-08', '2021-01-08', '90', 'Καναλλάκι Πρέβεζας|Ηπείρου', 0x30),
(68, 9000, '2021-01-08', '2021-01-08', '9999', 'Λαμία|Στερεάς Ελλάδας', 0x31),
(69, 250, '2021-01-08', '2021-01-08', '38', 'Παληό Καβάλας|Ανατολικής Μακεδονίας και Θράκη', 0x30),
(70, 5000, '2021-01-08', '2021-01-08', '60', 'Φλώρινα|Δυτικής Μακεδονίας', 0x31),
(71, 300, '2021-01-08', '2021-01-08', '50', 'Νέα Μάκρη|Αττικής', 0x30),
(72, 700, '2021-01-08', '2021-01-08', '50', 'Νέα Πέραμος|Αττικής', 0x30),
(73, 70000, '2021-01-08', '2021-01-08', '100', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(74, 900, '2021-01-08', '2021-01-08', '6000', 'Γάζι|Κρήτης', 0x30),
(75, 10000, '2021-01-08', '2021-01-08', '85', 'Γιαννιτσά|Κεντρικής Μακεδονίας', 0x31),
(76, 50000, '2021-01-08', '2021-01-08', '70', 'Κίτσι|Αττικής', 0x31),
(77, 20000, '2021-01-08', '2021-01-08', '70', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(78, 900, '2021-01-08', '2021-01-08', '150', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(79, 10000, '2021-01-08', '2021-01-08', '1000', 'Άγιος Νικόλαος|Κρήτης', 0x31),
(80, 1000, '2021-01-08', '2021-01-08', '65', 'Δαράτσος Χανίων|Κρήτης', 0x30),
(81, 300, '2021-01-08', '2021-01-08', '35', 'Κανάλια Κέρκυρας|Ιονίων Νήσων', 0x30),
(82, 100000, '2021-01-08', '2021-01-08', '200', 'Ερμιόνη Αργολίδας|Πελοποννήσου', 0x31),
(83, 10000, '2021-01-08', '2021-01-08', '9999', 'Λεχαινά|Δυτικής Ελλάδας', 0x31),
(84, 300, '2021-01-08', '2021-01-08', '40', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x30),
(85, 10000, '2021-01-08', '2021-01-08', '9000', 'Κένταυρος Ξάνθης|Ανατολικής Μακεδονίας και Θρ', 0x31),
(86, 20000, '2021-01-08', '2021-01-08', '90', 'Αγία Βαρβάρα Ηρακλείου|Κρήτης', 0x31),
(87, 600, '2021-01-08', '2021-01-08', '80', 'Χαλκίδα|Στερεάς Ελλάδας', 0x30),
(88, 10000, '2021-01-08', '2021-01-08', '1000', 'Ελευθερούπολη|Ανατολικής Μακεδονίας και Θράκη', 0x31),
(89, 40000, '2021-01-08', '2021-01-08', '70', 'Φιλιάτες|Ηπείρου', 0x31),
(90, 50000, '2021-01-08', '2021-01-08', '50', 'Νεάπολη Κοζάνης|Δυτικής Μακεδονίας', 0x31),
(91, 15000, '2021-01-08', '2021-01-08', '9000', 'Γιάννουλη|Θεσσαλίας', 0x31),
(92, 350, '2021-01-08', '2021-01-08', '45', 'Πολίχνιτος Λέσβου|Βορείου Αιγαίου', 0x30),
(93, 55000, '2021-01-08', '2021-01-08', '50', 'Ηράκλειο|Κρήτης', 0x31),
(94, 10000, '2021-01-08', '2021-01-08', '9500', 'Ζαγκλιβέρι|Κεντρικής Μακεδονίας', 0x31),
(95, 500, '2021-01-08', '2021-01-08', '80', 'Σπέτσες|Αττικής', 0x30);

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
(32, 'Apartment', 6, 5, 1995, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30),
(34, 'Apartment', 3, 1, 1995, 0x31, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30),
(35, 'House', 2, 1, 2000, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30),
(37, 'Apartment', 2, 4, 1998, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30),
(46, 'Studio', 1, 1, 1996, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30),
(47, 'Bungalow', 2, 0, 1999, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x30),
(48, 'Villa', 4, 0, 1993, 0x31, 0x31, 0x30, 0x31, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30),
(49, 'Apartment', 2, 2, 1991, 0x31, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31),
(51, 'Studio', 1, 1, 1993, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31),
(57, 'Apartment', 3, 4, 2003, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x31, 0x30, 0x30, 0x31),
(58, 'Bungalow', 3, 0, 1989, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30),
(59, 'Studio', 1, 2, 2002, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30),
(64, 'House', 3, 0, 1994, 0x31, 0x31, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30),
(67, 'Building', 2, 1, 1976, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30),
(69, 'Studio', 1, 2, 1990, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30),
(71, 'Apartment', 2, 3, 1985, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30),
(73, 'House', 3, 0, 2001, 0x30, 0x31, 0x30, 0x30, 0x31, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30),
(76, 'Apartment', 2, 2, 1980, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30),
(78, 'Maisonette', 3, 0, 1999, 0x31, 0x31, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x31),
(81, 'Studio', 1, 1, 2005, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30),
(82, 'Villa', 4, 0, 2009, 0x31, 0x31, 0x30, 0x31, 0x30, 0x31, 0x31, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30),
(84, 'Studio', 1, 1, 1990, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30),
(87, 'Bungalow', 2, 0, 1990, 0x31, 0x30, 0x30, 0x31, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30),
(89, 'House', 2, 0, 1980, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30),
(92, 'Studio', 1, 1, 1997, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x30),
(95, 'Loft', 2, 1, 2000, 0x31, 0x30, 0x30, 0x31, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x31);

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
(1, 32),
(11, 34),
(11, 35),
(11, 36),
(12, 37),
(12, 38),
(12, 39),
(13, 40),
(13, 41),
(13, 42),
(14, 43),
(14, 44),
(14, 45),
(15, 46),
(15, 47),
(15, 48),
(16, 49),
(16, 50),
(16, 51),
(17, 52),
(17, 53),
(17, 54),
(18, 55),
(18, 56),
(18, 57),
(18, 58),
(19, 59),
(19, 60),
(19, 61),
(20, 62),
(20, 63),
(20, 64),
(22, 65),
(22, 66),
(22, 67),
(23, 68),
(23, 69),
(23, 70),
(24, 71),
(24, 72),
(24, 73),
(24, 74),
(25, 75),
(25, 76),
(25, 77),
(26, 78),
(26, 79),
(26, 80),
(27, 81),
(27, 82),
(27, 83),
(28, 84),
(28, 85),
(28, 86),
(29, 87),
(29, 88),
(29, 89),
(30, 90),
(30, 91),
(30, 92),
(31, 93),
(31, 94),
(31, 95);

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
(31, 'Farmland', 0x30, 0x30, 0x30, 0x30),
(40, 'Farmland', 0x30, 0x30, 0x30, 0x30),
(41, 'Farmland', 0x30, 0x30, 0x30, 0x30),
(42, 'Land', 0x30, 0x31, 0x30, 0x30),
(52, 'Land', 0x30, 0x31, 0x30, 0x30),
(53, 'Farmland', 0x30, 0x30, 0x30, 0x31),
(54, 'Land', 0x30, 0x30, 0x30, 0x30),
(60, 'Land', 0x30, 0x31, 0x30, 0x30),
(61, 'Land', 0x31, 0x31, 0x30, 0x30),
(66, 'Farmland', 0x30, 0x30, 0x30, 0x30),
(68, 'Farmland', 0x30, 0x30, 0x30, 0x30),
(74, 'Farmland', 0x30, 0x30, 0x30, 0x30),
(79, 'Land', 0x31, 0x31, 0x30, 0x30),
(83, 'Farmland', 0x30, 0x31, 0x30, 0x30),
(85, 'Farmland', 0x30, 0x30, 0x30, 0x30),
(88, 'Land', 0x30, 0x31, 0x30, 0x30),
(91, 'Farmland', 0x30, 0x30, 0x30, 0x30),
(94, 'Farmland', 0x30, 0x30, 0x30, 0x30);

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
(33, 'Office', 1, 9, 1960, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30),
(36, 'Shop', 2, 0, 1992, 0x30, 0x31, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30),
(38, 'Everything', 2, 0, 1987, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30),
(39, 'Office', 3, 2, 1985, 0x30, 0x30, 0x30, 0x31, 0x30, 0x31, 0x30, 0x30, 0x30),
(43, 'Conference Room', 2, 2, 2001, 0x31, 0x30, 0x31, 0x31, 0x30, 0x31, 0x30, 0x30, 0x30),
(44, 'Hotel', 20, 0, 1980, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30),
(45, 'Werehouse', 2, 0, 1982, 0x30, 0x31, 0x31, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30),
(50, 'Shop', 2, 0, 2000, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30),
(55, 'Office', 4, 2, 2004, 0x30, 0x30, 0x31, 0x30, 0x31, 0x31, 0x30, 0x31, 0x30),
(56, 'Industrial Space', 3, 0, 1990, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x31),
(62, 'Werehouse', 2, 0, 1980, 0x30, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31),
(63, 'Shop', 2, 0, 1990, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x31, 0x30),
(65, 'Werehouse', 3, 1, 1985, 0x30, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30),
(70, 'Werehouse', 2, 0, 1976, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30),
(72, 'Shop', 2, 0, 1990, 0x30, 0x30, 0x31, 0x30, 0x31, 0x30, 0x30, 0x31, 0x30),
(75, 'Werehouse', 2, 0, 1970, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30),
(77, 'Shop', 2, 0, 1995, 0x30, 0x30, 0x30, 0x31, 0x31, 0x30, 0x30, 0x30, 0x30),
(80, 'Shop', 2, 0, 2002, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31, 0x30),
(86, 'Industrial Space', 2, 0, 1978, 0x30, 0x31, 0x30, 0x30, 0x30, 0x30, 0x30, 0x30, 0x31),
(90, 'Shop', 2, 0, 2007, 0x30, 0x31, 0x30, 0x31, 0x31, 0x30, 0x30, 0x31, 0x30),
(93, 'Shop', 2, 0, 2005, 0x31, 0x30, 0x30, 0x31, 0x30, 0x30, 0x30, 0x31, 0x31);

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
(10, 'test', '1234', '1234', 6986017292),
(11, 'Κώστας Μακρής', '1234', 'kostasm@gmail.com', 6985555555),
(12, 'Γιώργος Παπαδόπουλος', '1234', 'georgep@gmail.com', 6983333333),
(13, 'Γιάννης Κωστόπουλος', '1234', 'johnkost@hotmail.com', 6983333331),
(14, 'Χρήστος Αναστασίου', '1234', 'chran@outlook.com', 6983333332),
(15, 'Κώστας Παπαχρήστου', '1234', 'kostasp@gmail.gr', 6983333334),
(16, 'Παναγιώτης Μάρκου', '1234', 'panmark@gmail.gr', 6983333335),
(17, 'Γιώργος Βροντάκης', '1234', 'gergevr@hotmail.gr', 6983333336),
(18, 'Σπύρος Θεοδωράκης', '1234', 'spirth@yahoo.gr', 6983333337),
(19, 'Δημήτρης Ηλιάκης', '1234', 'sjhdbv@gmail.com', 6983333338),
(20, 'Σταύρος Καμπακάκης', '1234', 'sbcshd@gmail.gr', 6983333339),
(22, 'Βασίλης Ιωάννου', '1234', 'djbhwdb@gmail.com', 6985555551),
(23, 'Βαγγέλης Κοντογιάννης', '1234', 'adasc@gmail.gr', 6985555552),
(24, 'Θοδωρής Παπαμιχαήλ', '1234', 'jdhcbc@hotmail.com', 6985555553),
(25, 'Δημήτρης Παύλου', '1234', 'sdbdcs@gmail.com', 6985555554),
(26, 'Αλέξης Κανάκης', '1234', 'sdvsv@hotmail.com', 6985555556),
(27, 'Κυριάκος Μιχόπουλος', '1234', 'vfdvf@hotmail.gr', 6985555557),
(28, 'Παύλος Αβραμόπουλος', '1234', 'ajcsbd@gmail.com', 6985555558),
(29, 'Πέτρος Ιακώβου', '1234', 'svdvsfv@yahoo.com', 6985555559),
(30, 'Ανδρέας Κυριαζής', '1234', 'cdnici@gmail.com', 6985555544),
(31, 'Γιάννης Κωνσταντίνου', '1234', 'hcsgvh@gmail.com', 6985555533);

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
  MODIFY `idAkinito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
