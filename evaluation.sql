-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Octobre 2017 à 12:04
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `evaluation`
--

-- --------------------------------------------------------

--
-- Structure de la table `connection`
--

CREATE TABLE `connection` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `connection`
--

INSERT INTO `connection` (`id`, `name`, `password`) VALUES
(1, 'nicolas', '418d940643b1975d62234ee01246ad4b58904184'),
(2, 'crispy', '32e25501e31a440a99a984b4fc3ca9a9cbc0f17f  ');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chef` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etape` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_chef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `titre`, `chef`, `lieu`, `description`, `etape`, `date`, `id_chef`) VALUES
(1, 'Itree', 'crispy', 'roubaix', 'éééééééé', 'trouver un arbre ???', '2018-09-29', 2),
(2, 'logiciel', 'nicolas', 'simplon', 'ffffffffffffff', 'structure mvc\r\nusercase\r\nwireframe', '2017-10-03', 1),
(3, 'sdfgh', 'nicolas', 'fcd', 'test', 'uytr', '2017-10-02', 1),
(4, 'gqdhgdss', 'crispy', 'dqjkdhdjkqhd', 'test', 'qhdjksqhdkjq', '2017-10-02', 2),
(6, 'dqsdq', 'nicolas', 'dddddd', 'test', 'dddd', '2017-10-02', 1),
(7, 'dqsdq', 'nicolas', 'dddddd', 'test', 'dddd', '2017-10-02', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `connection`
--
ALTER TABLE `connection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
