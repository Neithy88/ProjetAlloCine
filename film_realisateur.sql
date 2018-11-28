-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 28 nov. 2018 à 13:21
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `allocine`
--

-- --------------------------------------------------------

--
-- Structure de la table `film_realisateur`
--

DROP TABLE IF EXISTS `film_realisateur`;
CREATE TABLE IF NOT EXISTS `film_realisateur` (
  `ID_realisateur` int(11) NOT NULL,
  `ID_FILM` int(11) NOT NULL,
  PRIMARY KEY (`ID_realisateur`,`ID_FILM`),
  KEY `film_realisateur_film0_FK` (`ID_FILM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `film_realisateur`
--

INSERT INTO `film_realisateur` (`ID_realisateur`, `ID_FILM`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 7),
(9, 8),
(10, 9),
(11, 10),
(12, 11),
(13, 11),
(12, 12),
(15, 12),
(16, 13),
(17, 14),
(18, 15),
(19, 16),
(20, 17);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `film_realisateur`
--
ALTER TABLE `film_realisateur`
  ADD CONSTRAINT `film_realisateur_film0_FK` FOREIGN KEY (`ID_FILM`) REFERENCES `film` (`ID_FILM`),
  ADD CONSTRAINT `film_realisateur_realisateur_FK` FOREIGN KEY (`ID_realisateur`) REFERENCES `realisateur` (`ID_realisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
