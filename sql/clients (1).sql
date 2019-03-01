-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 28 Février 2019 à 16:13
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e_commerce2`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `passe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `pseudo`, `passe`, `email`, `remember_token`) VALUES
(1, 'Manel', '$2y$10$u0.UmmwkmOtmfpQ3HOWr9.ztuRB8gLV6gjyEud0t0Kqg/YNJ.aNx6', 'manel@gmail.com', NULL),
(2, 'Karima', '$2y$10$u0.UmmwkmOtmfpQ3HOWr9.ztuRB8gLV6gjyEud0t0Kqg/YNJ.aNx6', 'karima@gmail.com', NULL),
(3, 'Alpha', '$2y$10$u0.UmmwkmOtmfpQ3HOWr9.ztuRB8gLV6gjyEud0t0Kqg/YNJ.aNx6', 'alpha@gmail.com', NULL),
(4, 'Martin', '$2y$10$u0.UmmwkmOtmfpQ3HOWr9.ztuRB8gLV6gjyEud0t0Kqg/YNJ.aNx6', 'martin@gmail.com', NULL),
(18, 'remy', '$2y$10$u0.UmmwkmOtmfpQ3HOWr9.ztuRB8gLV6gjyEud0t0Kqg/YNJ.aNx6', 'remy@gmail.com', 'fMr2OrMFejuJJJwoZtHlJCmjfGvFSo7PqHdUnCqWOYTwuaEAwBiiUQabjVK7'),
(19, 'Xavier', '$2y$10$gh481uE3hEY/litCm2Q7Qu3Mk7bZQ5SKTgbT2ogm.0RQ2RkZ7cN1S', 'xavier@gmail.com', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Id_2` (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD KEY `Id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
