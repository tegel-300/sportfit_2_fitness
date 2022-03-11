-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 11 mars 2022 à 05:52
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sportfit_2_fitness`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(99) NOT NULL,
  `lieu` varchar(99) NOT NULL,
  `Date` date NOT NULL,
  `capacite` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `capaciteinitiale` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`ID`, `NOM`, `lieu`, `Date`, `capacite`, `description`, `capaciteinitiale`) VALUES
(1, 'pacque', 'Esprit', '2022-04-04', 198, 'fête chrétienne', 200),
(3, 'bonne annee', 'sousse', '2022-05-20', 196, 'nouvelle année', 200),
(8, '8 mars', 'pacque national', '2022-03-15', 70, 'organiser au niveau du parc nation des activité sportive pour faire en profiter les femmes', 70),
(5, 'NOEL', 'Central tunis', '2022-12-25', 197, 'fête chrétienne', 200);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_event`
--

DROP TABLE IF EXISTS `reservation_event`;
CREATE TABLE IF NOT EXISTS `reservation_event` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idevent` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation_event`
--

INSERT INTO `reservation_event` (`ID`, `idevent`, `idclient`) VALUES
(6, 5, 1),
(4, 4, 1),
(3, 3, 1),
(7, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `tel` int(11) NOT NULL,
  `birthDate` date NOT NULL,
  `adresse` varchar(99) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
