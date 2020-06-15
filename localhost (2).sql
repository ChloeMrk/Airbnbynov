-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 15 juin 2020 à 22:35
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `registration`
--
CREATE DATABASE IF NOT EXISTS `registration` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `registration`;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id_annonces` int(3) NOT NULL,
  `type_logement` varchar(20) NOT NULL,
  `nbr_voyageur` int(11) NOT NULL,
  `prix` float NOT NULL,
  `ville` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cheminImg` varchar(250) NOT NULL,
  `delection_flag` tinyint(1) DEFAULT 0,
  `id_users` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id_annonces`, `type_logement`, `nbr_voyageur`, `prix`, `ville`, `adresse`, `cheminImg`, `delection_flag`, `id_users`, `description`) VALUES
(5, 'Studio', 2, 56, 'Tokyo', 'Tour tokyo', 'assets/img/578E92D3-A8CE-42D5-BA88-9B3DD4234BC6.jpeg', 0, 4, NULL),
(6, 'Studio', 5, 100, 'Séoul', 'Intiwao town', 'assets/img/302AE6C5-5043-440E-98C5-5CD89735D668.jpeg', 0, 4, NULL),
(8, 'Studio', 5, 56, 'Tokyo', 'Tour tokyo', 'assets/img/342E55EA-6780-4502-98EC-D312B2385619.jpeg', 0, 4, ' Test');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(3) NOT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `sexe` enum('m','f') NOT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `numtel` int(10) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pays` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `prenom`, `nom`, `sexe`, `ville`, `numtel`, `password`, `email`, `pays`) VALUES
(3, 'Chloé', 'Merck', 'f', 'Villepinte', 616720082, 'Hello', 'cococassandra@hotmail.fr', 'France'),
(4, 'Olivier', 'MERCK', 'f', 'Villepinte', 111111111, 'Allo', 'merckfive@hotmail.fr', 'France'),
(9, 'AAAA', 'AAAAAAA', 'f', 'Villepinte', 0, 'TTTTT', 'merckfive@hotmail.fr', 'France');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id_annonces`),
  ADD KEY `FK_annonces_users` (`id_users`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id_annonces` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `FK_annonces_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
