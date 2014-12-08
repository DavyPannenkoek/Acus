-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 26 nov 2014 om 09:14
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `acus`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `docent`
--

CREATE TABLE IF NOT EXISTS `docent` (
  `D.Naam` varchar(30) NOT NULL,
  `D.E-Mail` varchar(20) NOT NULL,
  `D.Vak` varchar(20) NOT NULL,
  `D.Tijd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nova ip`
--

CREATE TABLE IF NOT EXISTS `nova ip` (
  `IP.Adres` varchar(20) NOT NULL,
  `IP.Naam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `printers`
--

CREATE TABLE IF NOT EXISTS `printers` (
  `P.Locatie` varchar(20) NOT NULL,
  `P.Merk` varchar(20) NOT NULL,
  `P.Ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `programma's`
--

CREATE TABLE IF NOT EXISTS `programma's` (
  `P.Naam` varchar(30) NOT NULL,
  `P.Download` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ziekmelden`
--

CREATE TABLE IF NOT EXISTS `ziekmelden` (
  `Z.Nummer` int(15) NOT NULL,
  `Z.Locatie` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
