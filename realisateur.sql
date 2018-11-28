-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 28 nov. 2018 à 10:52
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
-- Structure de la table `realisateur`
--

DROP TABLE IF EXISTS `realisateur`;
CREATE TABLE IF NOT EXISTS `realisateur` (
  `ID_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`ID_realisateur`, `Nom`, `Prenom`) VALUES
(1, 'Cooper', 'Bradley'),
(2, 'Zemeckis', 'Robert'),
(3, 'Toledano', 'Eric'),
(4, 'Nakache', 'Olivier'),
(5, 'McCartny', 'Tom'),
(6, 'Dobkin', 'David'),
(7, 'Jenkins', 'Patty'),
(8, 'Frankle', 'David'),
(9, 'Muccino', 'Gabriele'),
(10, 'Lawrence', 'Francis'),
(11, 'Hillcoat', 'John'),
(12, 'Hughes', 'Albert'),
(13, 'Hughes', 'Allen'),
(14, 'Miller', 'George'),
(15, 'Ogilvie', 'George'),
(16, 'Miyasaki', 'Hayao'),
(17, 'Yip', 'Wilson'),
(18, 'Turtelaub', 'John'),
(19, 'Nolan', 'Christopher'),
(20, 'Van Sant', 'Gus');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
