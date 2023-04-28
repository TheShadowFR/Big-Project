-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 28 Avril 2023 à 07:00
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `big-project`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(1, 'aberty@gmail.com', 'cc');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `doc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cv`
--

INSERT INTO `cv` (`id`, `doc`) VALUES
(1, 'documents/NOAH_CABANDE_CV.pdf'),
(2, 'documents/docexample.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `id` int(11) NOT NULL,
  `jeux` varchar(100) NOT NULL,
  `jeux-title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `jeux`
--

INSERT INTO `jeux` (`id`, `jeux`, `jeux-title`) VALUES
(1, 'Jeu1', '');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `catégorie` varchar(10) NOT NULL,
  `carousel-img1` varchar(100) NOT NULL,
  `carousel-img2` varchar(100) NOT NULL,
  `carousel-img3` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tech-img1` varchar(100) NOT NULL,
  `tech-title1` varchar(100) NOT NULL,
  `tech-text1` text NOT NULL,
  `tech-img2` varchar(100) NOT NULL,
  `tech-title2` varchar(100) NOT NULL,
  `tech-text2` text NOT NULL,
  `tech-img3` varchar(100) NOT NULL,
  `tech-title3` varchar(100) NOT NULL,
  `tech-text3` text NOT NULL,
  `details-img1` varchar(100) NOT NULL,
  `details-title1` varchar(100) NOT NULL,
  `details-text1` text NOT NULL,
  `details-img2` varchar(100) NOT NULL,
  `details-title2` varchar(100) NOT NULL,
  `details-text2` text NOT NULL,
  `details-img3` varchar(100) NOT NULL,
  `details-title3` varchar(100) NOT NULL,
  `details-text3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `catégorie`, `carousel-img1`, `carousel-img2`, `carousel-img3`, `title`, `tech-img1`, `tech-title1`, `tech-text1`, `tech-img2`, `tech-title2`, `tech-text2`, `tech-img3`, `tech-title3`, `tech-text3`, `details-img1`, `details-title1`, `details-text1`, `details-img2`, `details-title2`, `details-text2`, `details-img3`, `details-title3`, `details-text3`) VALUES
(1, 'a1', '', '', '', 'projet réseau...', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'a2', '', '', '', 'Projet html css', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'a3', 'img/background.jpg', 'img/background.jpg', 'img/background.jpg', '3ième projet', 'img/background.jpg', '1ère techno', 'Another exciting bit of representative placeholder content. This time, we\'ve moved on to the\r\n                        second column.', 'img/background.jpg', 'la seconde', 'Another exciting bit of representative placeholder content. This time, we\'ve moved on to the\r\n                        second column.', 'img/background.jpg', 'la 3ième', 'And lastly this, the third column of representative placeholder content.', 'img/background.jpg', '1er détails', 'Some great placeholder content for the first featurette here. Imagine some exciting prose here.', 'img/background.jpg', '2nd detail', 'Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.', 'img/background.jpg', '3ième détail', 'And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.'),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `admin`) VALUES
(1, 'aberty@gmail.com', '$2y$10$IuOgrb1Bs2s8cr78CnOUA.0jZMzh2Dr/evuBGYn8bulLnForbGp6C', 1),
(2, 'leon@gmail.com', '$2y$10$4mzCBVFf8d//qHkGsN7MFOhYJLfF09mh1LMTajroAAIA2Yu3NeQ0m', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
