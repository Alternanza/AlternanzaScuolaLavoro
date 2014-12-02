-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dic 02, 2014 alle 17:24
-- Versione del server: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alternanzascuolalavoro`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `registrazioneazienda`
--

CREATE TABLE IF NOT EXISTS `registrazioneazienda` (
  `RgrANomeAzienda` varchar(30) NOT NULL,
  `RgrAContatto` int(30) NOT NULL,
  `RgrAMail` varchar(30) NOT NULL,
  `RgrAPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `registrazioneazienda`
--

INSERT INTO `registrazioneazienda` (`RgrANomeAzienda`, `RgrAContatto`, `RgrAMail`, `RgrAPassword`) VALUES
('Azienda', 12345678, 'azienda@mail.com', ''),
('Ciccio', 0, 'asd', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `registrazioneutenti`
--

CREATE TABLE IF NOT EXISTS `registrazioneutenti` (
  `RgrUID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `RgrUNome` varchar(30) NOT NULL,
  `RgrUCognome` varchar(30) NOT NULL,
  `RgrUPassword` varchar(32) NOT NULL,
  `RgrUClasse` varchar(30) NOT NULL,
  PRIMARY KEY (`RgrUID`),
  KEY `username` (`RgrUPassword`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dump dei dati per la tabella `registrazioneutenti`
--

INSERT INTO `registrazioneutenti` (`RgrUID`, `RgrUNome`, `RgrUCognome`, `RgrUPassword`, `RgrUClasse`) VALUES
(27, 'Ciccio', 'Ciccio', 'Ciccio', '5a'),
(28, 'Tizio', 'Caio', 'Ciccio', '4a');

-- --------------------------------------------------------

--
-- Struttura della tabella `richiesteaccettate`
--

CREATE TABLE IF NOT EXISTS `richiesteaccettate` (
  `RAID` int(11) NOT NULL AUTO_INCREMENT,
  `RANome` varchar(20) NOT NULL,
  `RAPeriodo` varchar(20) NOT NULL,
  `RACompetenze` varchar(100) NOT NULL,
  `RAPostiDisponibili` int(11) NOT NULL,
  `RADescrizione` varchar(200) NOT NULL,
  `RAContatto` varchar(200) NOT NULL,
  `RALuogo` varchar(30) NOT NULL,
  PRIMARY KEY (`RAID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `richiesteaziende`
--

CREATE TABLE IF NOT EXISTS `richiesteaziende` (
  `AznID` int(20) NOT NULL AUTO_INCREMENT,
  `AznNome` varchar(20) NOT NULL,
  `AznPeriodo` varchar(20) NOT NULL,
  `AznCompetenze` varchar(100) NOT NULL,
  `AznPostiDisponibili` int(11) NOT NULL,
  `AznDescrizioneLavoro` varchar(200) NOT NULL,
  `AznContatto` text NOT NULL,
  `AznLuogo` varchar(30) NOT NULL,
  PRIMARY KEY (`AznID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dump dei dati per la tabella `richiesteaziende`
--

INSERT INTO `richiesteaziende` (`AznID`, `AznNome`, `AznPeriodo`, `AznCompetenze`, `AznPostiDisponibili`, `AznDescrizioneLavoro`, `AznContatto`, `AznLuogo`) VALUES
(1, 'Prova', 'Prova', '', 4, 'Prova', 'Prova', '0'),
(2, 'Prova', 'provs', '', 5, 'Prov', 'prova', '0'),
(3, 'asdfas', 'asdfasdf', '', 0, 'asdfasdf', 'adfsafd', '0'),
(6, 'Prova', 'Prova', '', 5, 'Prova', 'Prova', 'Prova'),
(7, 'Nome', 'Nome', '', 1, 'Nome', '123', 'Nome');

-- --------------------------------------------------------

--
-- Struttura della tabella `sessioni`
--

CREATE TABLE IF NOT EXISTS `sessioni` (
  `uid` char(32) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `creation_date` int(10) unsigned NOT NULL,
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE IF NOT EXISTS `studenti` (
  `StdNome` varchar(20) NOT NULL,
  `StdCognome` varchar(30) NOT NULL,
  `StdClasse` varchar(30) NOT NULL,
  `StdMail` varchar(30) NOT NULL,
  `StdID` int(11) NOT NULL AUTO_INCREMENT,
  `StdPassword` varchar(30) NOT NULL,
  `StdUsername` varchar(30) NOT NULL,
  PRIMARY KEY (`StdID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `studenti`
--

INSERT INTO `studenti` (`StdNome`, `StdCognome`, `StdClasse`, `StdMail`, `StdID`, `StdPassword`, `StdUsername`) VALUES
('Nome', 'Cognome', '5a', 'Nome@virgilio.it', 1, 'prova', 'Prova'),
('Ciccio', 'Buriccio', '4a', 'Ciccio@virgilio.it', 2, '1234', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
