-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2015 at 10:48 PM
-- Server version: 5.6.24-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `pass` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`, `email`) VALUES
('amer', 'amer123', 'amer1x@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL,
  `autor` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `novost` int(15) NOT NULL,
  `email` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `autor`, `tekst`, `novost`, `email`, `datum`) VALUES
(17, 'Anoniman', 'zanimljivo, vrijedi li se upisati ?', 4, 'nesto', '2015-06-17 20:34:34'),
(18, 'tester', 'Ne znam, ali ja planiram probati :)', 4, 'nesto', '2015-06-17 20:35:26'),
(21, 'asasas', 'saass', 5, 'nesto', '2015-06-17 20:42:19'),
(22, 'amer1x', 'Imaju moju podrsku ! ', 4, 'nesto', '2015-06-17 20:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `user` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `pass` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`user`, `pass`, `email`) VALUES
('korisnik1', 'korisnik123', 'korisnik@hormail.com');

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `id` int(11) NOT NULL,
  `autor` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `naslov` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `detaljno` text COLLATE utf8_slovenian_ci NOT NULL,
  `slika` text COLLATE utf8_slovenian_ci NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `autor`, `naslov`, `tekst`, `detaljno`, `slika`, `datum`) VALUES
(4, 'amer2x', 'Kursevi', 'Upišite najpraktičniju školu za dobijanje posla u IT sektoru. Učite preko interneta i ovladajte praktičnim znanjima za visokoplaćena zanimanja.\r\n\r\nSteknite profitabilne vještine i međunarodno priznate diplome obezbeđene na iProgIT učenjem na daljinu, iz svog grada.\r\n\r\nŠkolovanjem preko jedinog pravog sistema za e-Learning u našoj zemlji, koji se koristi na ITAcademy, dobićete stručna zvanja iz Cambridgea, Microsofta i Adobea, kao i svetski priznate certifikate kao što su Linux Professional Institute, ZEND PHP i Oracle.', 'Potražnja za mrežnim i sistem administratorima je u konstantnom porastu poslednjih godina informatičke revolucije. Po Forbsovoj listi najtraženijih poslova u 2013. godini, u prvih 10 navedenih zanimanja su se našli i eksperti za mrežnu sigurnost, kao i mrežni i sistem administratori. U BiH, IT administratori imaju prednost na tržištu rada jer im zvanične fakultetske diplome nisu potrebne, a pronalaženje posla je lakše uz mogućnost biranja istog. \r\n\r\niProgIT je otvoren za sve IT entuzijaste, bilo da su u pitanju studenti koji traže svoju buduću profesiju, zaposleni u IT sektoru koji žele dodatno znanje i napredak u karijeri ili drugi koji bi da se prekvalifikuju kako bi izabrali novu karijeru. \r\n', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS7OnPi5ZZc8G7GqJAlVomus4b86GrjezdH-UdlD1M8Ib5X0Ykn', '2015-06-17 20:45:34'),
(5, 'amer1x', 'iProgIT', ' iProgIT - obrazovni centar Sarajevo, smiješten je u samom centru grada u ulici Titova, na broju 3. Otvoreni smo još od 2004. godine. Vrhunska kvaliteta obrazovanja, sa vrhunskim predavačima i najmodernijom opremom, garancija su Vašeg poslovnog uspjeha nakon završene edukacije. Međunarodno priznati i validirani nastavni programi obrazovanja sa Cambridge certifikatima  prepoznati su od strane potencijalnih kandidata i poslodavaca, i zbog toga smo br.1 u Sarajevu i široj okolici. Jedina smo Cambridge obrazovna ustanova u Sarajevu. Provjerite zašto. <br>\r\n                     Dođite i uvjerite se sami, čekamo Vas!', '', '', '2015-06-17 20:42:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `novost` (`novost`);

--
-- Indexes for table `novosti`
--
ALTER TABLE `novosti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `novosti`
--
ALTER TABLE `novosti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`novost`) REFERENCES `novosti` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
