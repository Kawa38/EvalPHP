-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 15 juin 2023 à 09:46
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vtc`
--

-- --------------------------------------------------------

--
-- Structure de la table `association_vehicule_conducteur`
--

CREATE TABLE `association_vehicule_conducteur` (
  `id_association` int NOT NULL,
  `id_vehicule` int NOT NULL,
  `id_conducteur` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `association_vehicule_conducteur`
--

INSERT INTO `association_vehicule_conducteur` (`id_association`, `id_vehicule`, `id_conducteur`) VALUES
(27, 3, 3),
(29, 10, 3),
(32, 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `conducteur`
--

CREATE TABLE `conducteur` (
  `id_conducteur` int NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `conducteur`
--

INSERT INTO `conducteur` (`id_conducteur`, `prenom`, `nom`) VALUES
(1, 'Julienne', 'Avigny'),
(3, 'Philip', 'Pandre'),
(13, 'B', 'B'),
(14, 'C', 'C');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int NOT NULL,
  `marque` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `modele` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `couleur` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `immatriculation` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `marque`, `modele`, `couleur`, `immatriculation`) VALUES
(3, 'Citroen', 'C8', 'bleu', 'CE-122-AE'),
(4, 'Mercedes', 'C1s', 'vert', 'FG-953-HI'),
(5, 'Volkswagen', 'Touran', 'noir', 'SO-322-NV'),
(10, 'Toyota', 'Aigo', 'jaune', 'fa-256-TY');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `association_vehicule_conducteur`
--
ALTER TABLE `association_vehicule_conducteur`
  ADD PRIMARY KEY (`id_association`),
  ADD KEY `assConducteur` (`id_conducteur`) USING BTREE,
  ADD KEY `assVehicule` (`id_vehicule`);

--
-- Index pour la table `conducteur`
--
ALTER TABLE `conducteur`
  ADD PRIMARY KEY (`id_conducteur`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `association_vehicule_conducteur`
--
ALTER TABLE `association_vehicule_conducteur`
  MODIFY `id_association` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `conducteur`
--
ALTER TABLE `conducteur`
  MODIFY `id_conducteur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `association_vehicule_conducteur`
--
ALTER TABLE `association_vehicule_conducteur`
  ADD CONSTRAINT `assConducteur` FOREIGN KEY (`id_conducteur`) REFERENCES `conducteur` (`id_conducteur`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `assVehicule` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id_vehicule`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
