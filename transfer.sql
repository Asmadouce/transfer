-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 29 Janvier 2019 à 09:09
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `transfer`
--

-- --------------------------------------------------------

--
-- Structure de la table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `filename` varchar(1000) COLLATE utf8_bin NOT NULL,
  `chemin` varchar(2000) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userId` varchar(1000) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `link`
--

INSERT INTO `link` (`id`, `name`, `filename`, `chemin`, `date`, `userId`) VALUES
(193, 'k', 'blog.png', '*', '2019-01-23 14:29:00', '1'),
(194, 'll', 'fiesta.png', '*', '2019-01-23 14:36:38', '1'),
(195, '', 'space1.png', '*', '2019-01-23 14:36:53', '1'),
(196, 'xxxxx', 'Capture d’écran de 2019-01-20 16-19-33.png', '*', '2019-01-23 14:55:01', '1'),
(197, 'dddddddddddddddddd', 'space1.png', '*', '2019-01-23 14:57:46', '1'),
(198, 'gggg', 'symfony.png', '*', '2019-01-23 14:59:31', '1'),
(199, 'yyy', 'fiesta.png', '*', '2019-01-23 14:59:46', '1'),
(200, 'x', 'wpseries.png', '*', '2019-01-23 15:00:28', '1'),
(201, 'gh', 'space2.png', '*', '2019-01-23 15:01:55', '1'),
(202, 't', 'mysql.png', '*', '2019-01-23 15:03:57', '1'),
(203, 'ddddd', 'blog.png', '*', '2019-01-23 15:05:04', '1'),
(204, 'b', 'berkoukes.png', '*', '2019-01-23 15:06:51', '1'),
(205, 'dddd', 'harira.jpg', '*', '2019-01-23 15:15:05', '1'),
(206, 'fffff', 'harira.jpg', '*', '2019-01-23 15:16:55', '1'),
(207, 'ffff', 'logo.png', '*', '2019-01-23 15:17:24', '1'),
(208, 'crepes', 'crepes.jpeg', '*', '2019-01-23 16:02:47', '35'),
(209, 'dddd', 'latino.jpg', '*', '2019-01-23 16:09:25', '35'),
(210, 'dddd', 'crepes.jpeg', '*', '2019-01-23 16:32:28', '35'),
(211, 'dddd', 'latino.jpg', '*', '2019-01-23 16:33:50', '35'),
(212, 'fff', 'latino.jpg', '*', '2019-01-23 16:35:40', '35'),
(213, 'dddd', 'crepes.jpeg', '*', '2019-01-23 16:36:36', '35'),
(214, 'gbbbb', 'latino.jpg', '*', '2019-01-23 16:38:27', '35'),
(215, 'ddd', 'berkoukes.png', '*', '2019-01-23 16:40:03', '1'),
(216, 'fff', 'eye.png', '*', '2019-01-23 16:42:42', '1'),
(217, 'ggg', 'latino.jpg', '*', '2019-01-23 16:44:07', '1'),
(218, 'dddd', 'harira.jpg', '*', '2019-01-23 16:56:42', '1'),
(219, 'vvvv', 'latino.jpg', '*', '2019-01-23 16:58:04', '1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(10000) COLLATE utf8_bin NOT NULL,
  `mail` varchar(10000) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `password`) VALUES
(1, 'ANONYMOUS', 'ANONYMOUS@ANONYMOUS.FR', '1234'),
(35, 'asmaoui', 'asmaoui@asmaoui.fr', '0000');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
