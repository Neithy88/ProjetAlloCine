-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 11:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allocine`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `ID_FILM` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `annee` year(4) NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`ID_FILM`, `titre`, `annee`, `description`) VALUES
(1, 'A Star Is Born', 2018, '\"Star de country un peu oubliée, Jackson Maine découvre Ally, une jeune chanteuse très prometteuse. Tandis qu\'ils tombent follement amoureux l\'un de l\'autre, Jack propulse Ally sur le devant de la scène et fait d\'elle une artiste adulée par le public. Bientôt éclipsé par le succès de la jeune femme, il vit de plus en plus de mal son propre déclin…\".'),
(2, 'Forrest Gump', 1994, '\"Quelques decennies d\'histoire americaine, des annees 1940 à la fin du XX eme siecle, à travers le regard et l\'étrange odyssée d\'un homme simple et pur, Forrest Gump.\"'),
(3, 'Intouchables', 2011, '\"A la suite d’un accident de parapente, Philippe, riche aristocrate, engage comme aide à domicile Driss, un jeune de banlieue tout juste sorti de prison. Bref la personne la moins adaptée pour le job. Ensemble ils vont faire cohabiter Vivaldi et Earth Wind and Fire, le verbe et la vanne, les costumes et les bas de survêtement... Deux univers vont se télescoper, s’apprivoiser, pour donner naissance à une amitié aussi dingue, drôle et forte qu’inattendue, une relation unique qui fera des étincelles et qui les rendra... Intouchables.\",\"2011\"\r\n\"7\",\"5\",\"Spotlight\",\"Adapté de faits réels, Spotlight retrace la fascinante enquête du Boston Globe – couronnée par le prix Pulitzer – qui a mis eu jour un scandale sans précédent au sein de l’Eglise Catholique. Une équipe de journalistes d’investigation, baptisée Spotlight, a enquêté pendant 12 mois sur des suspicions d’abus sexuels au sein d’une des institutions les plus anciennes et les plus respectées au monde. L’enquête révèlera que L’Eglise Catholique a protégé pendant des décennies les personnalités religieuses, juridiques et politiques les plus en vue de Boston, et déclenchera par la suite une vague de révélations dans le monde entier.\".'),
(4, 'Spotlight', 2016, '\"Adapté de faits réels, Spotlight retrace la fascinante enquête du Boston Globe – couronnée par le prix Pulitzer – qui a mis eu jour un scandale sans précédent au sein de l’Eglise Catholique. Une équipe de journalistes d’investigation, baptisée Spotlight, a enquêté pendant 12 mois sur des suspicions d’abus sexuels au sein d’une des institutions les plus anciennes et les plus respectées au monde. L’enquête révèlera que L’Eglise Catholique a protégé pendant des décennies les personnalités religieuses, juridiques et politiques les plus en vue de Boston, et déclenchera par la suite une vague de révélations dans le monde entier.\"'),
(5, 'Le juge', 2014, '\"Fils de magistrat, Hank Palmer, grand avocat, revient dans la petite ville de son enfance, où son père, qu\'il n\'a pas revu depuis longtemps, est soupçonné de meurtre. Il décide alors de mener l\'enquête pour découvrir la vérité et, chemin faisant, renoue avec sa famille avec laquelle il avait pris ses distances …\".'),
(6, 'Wonder Woman', 2017, '\"C\'était avant qu\'elle ne devienne Wonder Woman, à l\'époque où elle était encore Diana, princesse des Amazones et combattante invincible. Un jour, un pilote américain s\'écrase sur l\'île paradisiaque où elle vit, à l\'abri des fracas du monde. Lorsqu\'il lui raconte qu\'une guerre terrible fait rage à l\'autre bout de la planète, Diana quitte son havre de paix, convaincue qu\'elle doit enrayer la menace. En s\'alliant aux hommes dans un combat destiné à mettre fin à la guerre, Diana découvrira toute l\'étendue de ses pouvoirs… et son véritable destin.\".'),
(7, 'Beauté cachée', 2016, '\"Howard Inlet, un brillant publicitaire new-yorkais, n\'est plus que l\'ombre de lui-même. Depuis qu\'il a perdu sa fille, il n\'a plus le goût de vivre. Il se rend à ses séances de thérapie mais le coeur n\'y est pas. Ses collègues Claire et Whit sont tristes de le voir ainsi. Ils apprennent alors que Howard envoie des lettres au Temps, à la Mort et à l\'Amour pour tenter de s\'en sortir. Ces missives leur donnent une idée : celle de faire incarner ces concepts par de vraies personnes.\".'),
(8, 'Sept vies', 2009, '\"Hanté par un secret, Ben Thomas cherche sa rédemption en transformant radicalement la vie de sept personnes qu\'il ne connaît pas. Une fois son plan mis en place, plus rien ne pourra l\'arrêter. C\'est tout du moins ce qu\'il croit. Mais Ben n\'avait pas prévu qu\'il tomberait amoureux de l\'une de ces personnes et que c\'est elle qui va le transformer..'),
(9, 'Je suis une légende', 2007, '\"ncis Lawrence	Robert Neville était un brillant scientifique, mais même lui n\'a pu endiguer le terrible virus - créé de la main de l\'homme - qui a dévasté la race humaine. Pour une raison inconnue, Neville est immunisé et reste à ce jour le dernier être humain vivant dans ce qui reste de New York et peut-être du monde. Depuis trois ans, il envoie des messages de détresse à qui voudra bien l\'entendre.\".'),
(10, 'La route', 2009, '\"Créé par Penhall. D\'après l\'oeuvre de Cormac McCarthy. Musique de Nick Cave. Il y a maintenant plus de dix ans que le monde a explosé. Personne ne sait ce qui s\'est passé. Ceux qui ont survécu se souviennent d\'un gigantesque éclair aveuglant, et puis plus rien. Plus d\'énergie, plus de végétation, plus de nourriture. Les derniers survivants sont dans un monde dévasté et couvert de cendre qui n\'est plus que l\'ombre de ce qu\'il fut.\".'),
(11, 'Le live d\'Eli', 2010, '\"Un guerrier solitaire fait face à de multiples dangers tandis qu\'il ramène l\'espoir dans les terres dévastées d\'une Amérique post-apocalyptique.\".'),
(12, 'Mad Max', 2000, '\"Hanté par un lourd passé, Mad Max estime que le meilleur moyen de survivre est de rester seul. Cependant, il se retrouve embarqué par une bande qui parcourt la Désolation à bord d\'un véhicule militaire piloté par l\'Imperator Furiosa. Ils fuient la Citadelle où sévit le terrible Immortan Joe qui s\'est fait voler un objet irremplaçable. Enragé, ce Seigneur de guerre envoie ses hommes pour traquer les rebelles impitoyablement…\",\"2015\"\r\n\"16\",\"15\",\"Princesse Mononoké\",\"Ashitaka, un jeune guerrier japonais, affronte un sanglier géant et furieux qui attaque son village. Il tue la bête, mais se retrouve atteint par un mal mystérieux. Sur le conseil des sages, il part vers l\'Ouest, à la recherche de ce qui a transformé l\'animal en démon. Au cours de son périple, il rencontre San, une jeune fille qui vit avec les loups. Ashitaka apprend que les humains sont à l\'origine de tous ces maux, car ils détruisent la forêt, qu\'ils exploitent pour alimenter leurs forges.\"'),
(13, 'Princesse Mononoké', 2000, ',\"Ashitaka, un jeune guerrier japonais, affronte un sanglier géant et furieux qui attaque son village. Il tue la bête, mais se retrouve atteint par un mal mystérieux. Sur le conseil des sages, il part vers l\'Ouest, à la recherche de ce qui a transformé l\'animal en démon. Au cours de son périple, il rencontre San, une jeune fille qui vit avec les loups. Ashitaka apprend que les humains sont à l\'origine de tous ces maux, car ils détruisent la forêt, qu\'ils exploitent pour alimenter leurs forges.\"'),
(14, 'Ip Man', 2008, '\"Film biographique sur la vie de Ip Man, un maître de Kung-Fu spécialisé dans le style Wing Chun et qui fut le mâitre de Bruce Lee. Dans les années 30, Ip Man vit à Foshan dans le sud de la Chine, lors de l\'occupation japonaise. Face à ses indéniables talents en matière d\'arts martiaux, les japonais lui demandent d\'entraîner les soldats, ce qu\'il refuse catégoriquement. Il va alors devoir lutter pour sa survie.\"'),
(15, 'Phénomène', 1996, '\"George Malley est garagiste dans une petite ville des Etats-Unis. Le soir de son 37ème anniversaire, il est terrassé par un halo aveuglant et mystérieux qui le laisse doté de facultés intellectuelles et de pouvoirs insoupçonnés ! Ce prodige provoque la méfiance et l\'incompréhension de son entourage, et prend également conscience que sa vie et celle de ses proches s\'en trouvera à jamais bouleversée.\"'),
(16, 'Inception', 2010, '\"Dom Cobb est un voleur expérimenté – le meilleur qui soit dans l’art périlleux de l’extraction : sa spécialité consiste à s’approprier les secrets les plus précieux d’un individu, enfouis au plus profond de son subconscient, pendant qu’il rêve et que son esprit est particulièrement vulnérable.\"'),
(17, 'A la rencontre de Forrester', 2001, '\"A seize ans, Jamal Wallace, un prodige du basket-ball, entre par effraction dans un appartement que les rumeurs disent habité par un ermite. Ayant entendu un bruit, il prend ses jambes à son cou et en oublie son sac à dos avec ses livres dedans. L\'ermite le lui rend. Jamal constate que les textes qu\'il a écrits ont été corrigés et commentés.\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID_FILM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `ID_FILM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
