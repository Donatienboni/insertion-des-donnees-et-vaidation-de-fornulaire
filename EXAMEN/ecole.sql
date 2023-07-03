-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 29 mars 2022 à 19:13
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `matricule` int(3) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `date` text NOT NULL,
  `adresse` text NOT NULL,
  `level` text NOT NULL,
  `contact` text NOT NULL,
  `passe` text NOT NULL,
  `sexe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`matricule`, `firstname`, `lastname`, `date`, `adresse`, `level`, `contact`, `passe`, `sexe`) VALUES
(1, 'pierre', 'guy', '2022-03-24', 'louis', 'DTS', '2222', 'toto', 'feminin'),
(2, 'pierre', 'guy', '2022-03-24', 'louis', 'DTS', '2222', 'toto', 'feminin'),
(4, 'MOUSSAVOU', 'chancia', '2022-03-09', 'louis', 'DTS', '222222', 'aaaa', 'feminin'),
(5, 'TOTO', 'TATA', '2022-03-09', 'DP', 'DTS', '222222', 'ZZZZZ', 'feminin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `matricule` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
