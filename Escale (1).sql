-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 12 Septembre 2019 à 16:39
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Escale`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `zipCode` int(5) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `lastname`, `firstname`, `mail`, `phone`, `zipCode`, `message`) VALUES
(4, 'Fréderic', 'Bosso', 'johndoe@gmail.com', '0988776655', 60566, 'zsedrftgyhujikolp'),
(5, 'Fréderic', 'Bosso', 'johndoe@gmail.com', '0988776655', 60566, 'zsedrftgyhujikolp'),
(6, 'Fréderic', 'Bosso', 'johndoe@gmail.com', '0988776655', 60566, 'zsedrftgyhujikolp'),
(7, 'Fréderic', 'Bosso', 'johndoe@gmail.com', '0988776655', 60566, 'zsedrftgyhujikolp'),
(8, 'zerator', 'Dbz', 'rene@coty.fr', '0122334411', 98777, 'aqzsedrftgyhu'),
(9, 'zerator', 'Dbz', 'rene@coty.fr', '0122334411', 98777, 'aqzsedrftgyhu'),
(10, 'Roronoa', 'Zoro', 'derkaouihassan19@gmail.com', '0122334455', 22222, 'qwzsxdrfctgybhuji'),
(11, 'Roronoa', 'Zoro', 'derkaouihassan19@gmail.com', '0122334455', 22222, 'qwzsxdrfctgybhuji'),
(12, 'Roronoa', 'Zoro', 'derkaouihassan19@gmail.com', '0122334455', 22222, 'qwzsxdrfctgybhuji'),
(13, 'derzere', 'Hassan', 'zorro60@gmail.com', '0122334455', 14566, 'sdrtgyhuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu'),
(14, 'derzere', 'Hassan', 'zorro60@gmail.com', '0122334455', 14566, 'sdrtgyhuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu'),
(15, 'DERKAOUI', 'HASSAN', 'derkaouihassan19@gmail.com', '0618815620', 60200, 'je suis content d\'avoir manger chez vous!!!!!');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `motdepasse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`) VALUES
(7, 'zorro60', 'zorro60@gmail.com', '$2y$10$JRPQhFgCIyM7.s6ytLReY.GMXbdwpJlBej6ZDAaPOAxOFRyhftMW2'),
(8, 'nicolas', 'nicolas@gmail.com', '$2y$10$pRlXil0vL5q85InBTlJIou7fsxLrdbr9rM8WpvE4IxG7QoJsI2abi'),
(9, 'romain', 'romain@gmail.com', '$2y$10$uTKHTtfO7cSdYD4REJdrFODhtRWz4NErnuZ8BLiO6kGQOmtl3yE/K');

-- --------------------------------------------------------

--
-- Structure de la table `Menu`
--

CREATE TABLE `Menu` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `id_types` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Menu`
--

INSERT INTO `Menu` (`id`, `title`, `price`, `id_types`) VALUES
(17, 'tarte au citron', 1, 3),
(18, 'tarte framboise 4parts', 1, 3),
(19, 'Merza au mechoua', 7, 2),
(20, 'pomme de terre sauté', 4, 1),
(21, 'coca cola 33ctl', 1, 4),
(22, 'café ', 1, 4),
(23, 'capuccino', 1, 4),
(24, 'caviar', 10, 1),
(25, 'fish and chips', 7, 2);

-- --------------------------------------------------------

--
-- Structure de la table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `day` date DEFAULT NULL,
  `booking` int(4) NOT NULL,
  `people` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `register`
--

INSERT INTO `register` (`id`, `lastname`, `firstname`, `mail`, `phone`, `day`, `booking`, `people`) VALUES
(5, 'DERKAOUI', 'HASSAN', 'derkaouihassan19@gmail.com', '0618815620', '2019-09-12', 15, 5);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'entrée'),
(2, 'plat'),
(3, 'déssert'),
(4, 'boissons');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
