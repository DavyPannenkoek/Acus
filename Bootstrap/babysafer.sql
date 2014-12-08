-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 16 apr 2014 om 09:51
-- Serverversie: 5.6.14
-- PHP-versie: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `babysafer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `cat_id` int(254) NOT NULL AUTO_INCREMENT,
  `cat_naam` varchar(254) NOT NULL,
  `sub_id1` int(254) NOT NULL,
  `sub_id2` int(254) NOT NULL,
  `sub_id3` int(254) NOT NULL,
  `sub_id4` int(254) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_naam`, `sub_id1`, `sub_id2`, `sub_id3`, `sub_id4`) VALUES
(1, 'Wonden', 3, 4, 5, 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `home_id` int(1) NOT NULL,
  `type` varchar(254) NOT NULL,
  `id` int(254) NOT NULL,
  `naam` varchar(254) NOT NULL,
  PRIMARY KEY (`type`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `home`
--

INSERT INTO `home` (`home_id`, `type`, `id`, `naam`) VALUES
(5, 'cat', 1, 'Wonden'),
(2, 'pro', 3, 'Flauwvallen'),
(3, 'pro', 4, 'Griep'),
(1, 'sub', 1, 'Stikken'),
(4, 'sub', 2, 'Chemicaliën');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `probleem`
--

CREATE TABLE IF NOT EXISTS `probleem` (
  `probleem_id` int(254) NOT NULL AUTO_INCREMENT,
  `probleem_naam` varchar(254) NOT NULL,
  PRIMARY KEY (`probleem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `probleem`
--

INSERT INTO `probleem` (`probleem_id`, `probleem_naam`) VALUES
(1, 'Verdrinken'),
(2, 'Voorwerp/voedsel'),
(3, 'Flauwvallen'),
(4, 'Griep'),
(5, 'Bijtende vloeistof'),
(6, 'Olieproduct'),
(7, 'Niet-bijtend gif'),
(8, 'Lichte schaafwonden'),
(9, 'Diepe schaafwonden'),
(10, 'Dichte blaar'),
(11, 'Open blaar'),
(12, 'Lichte snijwonden'),
(13, 'Diepe snijwonden'),
(14, '1e graads brandwonden'),
(15, '2e graads brandwonden'),
(16, '3e graads brandwonden');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `subcat_id` int(254) NOT NULL AUTO_INCREMENT,
  `subcat_naam` varchar(254) NOT NULL,
  `probleem_id1` int(254) NOT NULL,
  `probleem_id2` int(254) NOT NULL,
  `probleem_id3` int(254) NOT NULL,
  `probleem_id4` int(254) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `subcat_naam`, `probleem_id1`, `probleem_id2`, `probleem_id3`, `probleem_id4`) VALUES
(1, 'Stikken', 1, 2, 0, 0),
(2, 'Chemicali&euml;n', 5, 6, 7, 0),
(3, 'Brandwonden', 14, 15, 16, 0),
(4, 'Snijwonden', 12, 13, 0, 0),
(5, 'Blaren', 10, 11, 0, 0),
(6, 'Schaafwonden', 8, 9, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
