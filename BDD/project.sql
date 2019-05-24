-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 mai 2019 à 13:29
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `reporting` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `name`, `title`, `message`, `id_profil`, `date_time`, `reporting`) VALUES
(15, 'aquarium', 'trop fort !', 'Merci pour une soirée trop magnifique ! ', 5, '2019-05-24 06:27:47', 0),
(16, 'musee', 'merci !', 'Super génial', 5, '2019-05-24 06:28:00', 0),
(17, 'bateau', 'magnifique !', '!!!!!!!', 5, '2019-05-24 06:28:19', 0),
(18, 'port', 'ouf', 'ouf', 5, '2019-05-24 06:28:47', 0),
(19, 'port', 'merci ', 'merci !', 6, '2019-05-24 06:31:12', 0),
(20, 'aquarium', 'trop fort !', 'magnifique', 6, '2019-05-24 06:31:29', 0),
(21, 'musee', 'super ', 'ouf !', 6, '2019-05-24 06:31:41', 0),
(22, 'bateau', 'trop ouf', 'ouf !', 6, '2019-05-24 06:31:50', 0);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant` varchar(255) NOT NULL,
  `note` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `restaurant`, `note`, `id_profil`, `date_time`) VALUES
(12, 'sainte', 4, 5, '2019-05-24 06:26:23'),
(13, 'sainte', 2, 5, '2019-05-24 06:26:29'),
(14, 'annexe', 5, 5, '2019-05-24 06:26:34'),
(15, 'gourmandiere', 3, 5, '2019-05-24 06:26:37'),
(16, 'tete', 4, 5, '2019-05-24 06:26:47'),
(17, 'tete', 3, 6, '2019-05-24 06:32:19'),
(18, 'sainte', 3, 6, '2019-05-24 06:32:22'),
(19, 'annexe', 3, 6, '2019-05-24 06:32:25'),
(20, 'gourmandiere', 3, 6, '2019-05-24 06:32:28'),
(21, 'tete', 5, 6, '2019-05-24 06:32:36'),
(22, 'annexe', 3, 6, '2019-05-24 13:03:43');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time_registration` datetime NOT NULL,
  `recovery_sentence` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'USER',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id`, `pseudo`, `password`, `email`, `date_time_registration`, `recovery_sentence`, `role`) VALUES
(5, 'mikaro95', '4ccd6b52f4d9e70afca98b50cde1cc16542d478e770846b9ff7a43d3', 'mfaviez@hotmail.fr', '2019-05-24 06:25:21', 'b9edf3da7a587f9a89390d11bf91a7db0684fd6afdd9ce4b98d96f83', 'ADMIN'),
(6, 'mika95', 'b1aa894b3409dd3d35e63ede76e149b38d6b34b03e35fd739663c923', 'carofaviez@hotmail.fr', '2019-05-24 06:30:42', '3a26f012d1c18a0190f83ad13492ed043b9b230b0cc5b06eacdc7045', 'USER');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
