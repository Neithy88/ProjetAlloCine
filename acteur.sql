-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 28 nov. 2018 à 14:11
-- Version du serveur :  10.1.36-MariaDB
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
-- Base de données :  `allo`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `ID_ACTEUR` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`ID_ACTEUR`, `Nom`, `Prenom`) VALUES
(1, 'Duvall', 'Robert'),
(2, 'Downey JR', 'Robert'),
(3, 'Farmiga', 'Vera'),
(4, 'D\'Onofrio ', 'Vincent'),
(5, 'Ruffalo', 'Mark'),
(6, 'Keaton', 'Michael'),
(7, 'McAdams', 'Rachel'),
(8, 'Slattery', 'John'),
(9, 'Gadot', 'Gal'),
(10, 'Pine', 'Chris'),
(11, 'Nielsen', 'Connie'),
(12, 'Wright ', 'Robin'),
(13, 'Gaga ', 'Lady'),
(14, 'Cooper', 'Bradley'),
(15, 'Hanks ', 'Tom'),
(16, 'Field', 'Sally'),
(17, 'Williams', 'Rebecca'),
(18, 'Smith', 'Will'),
(19, 'Norton', 'Edward'),
(20, 'Peña ', 'Michael'),
(21, 'Mirren', 'Hellen'),
(22, 'Braga', 'Alice'),
(23, 'Richardson-Whitfield ', 'Sally'),
(24, 'Smith', 'Willow'),
(25, 'Theron', 'Charlize'),
(26, 'Mortensen ', 'Viggo'),
(27, 'Smit-McPhee ', 'Kobi'),
(28, 'Washington', 'Denzel'),
(29, 'Oldman', 'Gary'),
(30, 'Kunis', 'Mila'),
(31, 'Hardy ', 'Tom'),
(32, 'Hoult ', 'Nicholas'),
(33, 'Keays-Byrne ', 'Hugh'),
(34, 'Helman ', 'Josh'),
(35, 'Anderson ', 'Gillan'),
(36, 'Driver', 'Minnie'),
(37, 'Danes', 'Claire'),
(38, 'Yen', 'Donnie'),
(39, 'Yam', 'Simmon'),
(40, 'Xiong ', 'Lynn'),
(41, 'Travolta', 'John'),
(42, 'Sedgwick ', 'Kyra'),
(43, 'Whitaker ', 'Forest'),
(44, 'Dicaprio', 'Leonardo'),
(45, 'Gordon-Levitt ', 'Joseph'),
(46, 'Page', 'Ellen'),
(47, 'Cotillard', 'Marion'),
(48, 'Connery ', 'Sean'),
(49, 'Brown ', 'Rob'),
(50, 'Paquin ', 'Anna');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`ID_ACTEUR`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `ID_ACTEUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
