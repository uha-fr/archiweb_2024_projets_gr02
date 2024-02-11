-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 11 fév. 2024 à 21:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `manger`
--

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE `etape` (
  `identifiant` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `identifiant_recette` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `calories_par_unite` float DEFAULT NULL,
  `unite` varchar(255) DEFAULT NULL,
  `identifiant_image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `journalisation`
--

CREATE TABLE `journalisation` (
  `ID_Log` int(11) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ID_Utilisateur` int(11) DEFAULT NULL,
  `Action` text DEFAULT NULL,
  `IP_Adresse` varchar(255) DEFAULT NULL,
  `Navigateur` varchar(255) DEFAULT NULL,
  `ResultatAction` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `preference`
--

CREATE TABLE `preference` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `description` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `temps_preparation` int(11) DEFAULT NULL,
  `temps_cuisson` int(11) DEFAULT NULL,
  `calories_totales` int(11) DEFAULT NULL,
  `cree_par` int(11) DEFAULT NULL,
  `publique` tinyint(1) DEFAULT 1,
  `type_repas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recette_etape`
--

CREATE TABLE `recette_etape` (
  `identifiant_etape` int(11) NOT NULL,
  `identifiant_recette` int(11) NOT NULL,
  `ordre` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recette_evaluation`
--

CREATE TABLE `recette_evaluation` (
  `identifiant_recette` int(11) DEFAULT NULL,
  `identifiant_utilisateur` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `identifiant_image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recette_ingredient`
--

CREATE TABLE `recette_ingredient` (
  `identifiant_recette` int(11) NOT NULL,
  `indentifiant_ingredient` int(11) NOT NULL,
  `quantite` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `identifiant` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL COMMENT 'hashed',
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_consommation`
--

CREATE TABLE `utilisateur_consommation` (
  `identifiant` int(11) NOT NULL,
  `identifiant_utilisateur` int(11) DEFAULT NULL,
  `identifiant_recette` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `quantite` float DEFAULT NULL,
  `type_repas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_favoris`
--

CREATE TABLE `utilisateur_favoris` (
  `identifiant_utilisateur` int(11) DEFAULT NULL,
  `identifiant_recette` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_historique_recherche`
--

CREATE TABLE `utilisateur_historique_recherche` (
  `identifiant` int(11) NOT NULL,
  `identifiant_utilisateur` int(11) DEFAULT NULL,
  `terme` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_preference`
--

CREATE TABLE `utilisateur_preference` (
  `identifiant_preference` int(11) NOT NULL,
  `identifiant_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_profil`
--

CREATE TABLE `utilisateur_profil` (
  `identifiant_utilisateur` int(11) DEFAULT NULL,
  `taille` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `objectif_calorique` int(11) DEFAULT NULL,
  `identifiant_image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_role`
--

CREATE TABLE `utilisateur_role` (
  `identifiant_utilisateur` int(11) DEFAULT NULL,
  `identifiant_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `identifiant_recette` (`identifiant_recette`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `ingredient_fk1` (`identifiant_image`);

--
-- Index pour la table `journalisation`
--
ALTER TABLE `journalisation`
  ADD PRIMARY KEY (`ID_Log`),
  ADD KEY `ID_Utilisateur` (`ID_Utilisateur`);

--
-- Index pour la table `preference`
--
ALTER TABLE `preference`
  ADD PRIMARY KEY (`identifiant`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `recette_ibfk_1` (`cree_par`);

--
-- Index pour la table `recette_etape`
--
ALTER TABLE `recette_etape`
  ADD KEY `identifiant_etape` (`identifiant_etape`),
  ADD KEY `identifiant_recette` (`identifiant_recette`);

--
-- Index pour la table `recette_evaluation`
--
ALTER TABLE `recette_evaluation`
  ADD KEY `recette_evaluation_ibfk_1` (`identifiant_recette`),
  ADD KEY `recette_evaluation_ibfk_2` (`identifiant_utilisateur`),
  ADD KEY `recette_evaluation_ibfk_3` (`identifiant_image`);

--
-- Index pour la table `recette_ingredient`
--
ALTER TABLE `recette_ingredient`
  ADD KEY `recette_ingredient_ibfk_1` (`identifiant_recette`),
  ADD KEY `recette_ingredient_ibfk_2` (`indentifiant_ingredient`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`identifiant`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`identifiant`);

--
-- Index pour la table `utilisateur_consommation`
--
ALTER TABLE `utilisateur_consommation`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `utilisateur_consommation_ibfk_1` (`identifiant_utilisateur`),
  ADD KEY `utilisateur_consommation_ibfk_2` (`identifiant_recette`);

--
-- Index pour la table `utilisateur_favoris`
--
ALTER TABLE `utilisateur_favoris`
  ADD KEY `ID_Utilisateur` (`identifiant_utilisateur`),
  ADD KEY `ID_Recette` (`identifiant_recette`);

--
-- Index pour la table `utilisateur_historique_recherche`
--
ALTER TABLE `utilisateur_historique_recherche`
  ADD PRIMARY KEY (`identifiant`),
  ADD KEY `ID_Utilisateur` (`identifiant_utilisateur`);

--
-- Index pour la table `utilisateur_preference`
--
ALTER TABLE `utilisateur_preference`
  ADD KEY `utilisateur_preference_ibfk_1` (`identifiant_utilisateur`),
  ADD KEY `fk_preference` (`identifiant_preference`);

--
-- Index pour la table `utilisateur_profil`
--
ALTER TABLE `utilisateur_profil`
  ADD KEY `utilisateur_profil_ibfk_1` (`identifiant_utilisateur`),
  ADD KEY `utilisateur_profil_ibfk_2` (`identifiant_image`);

--
-- Index pour la table `utilisateur_role`
--
ALTER TABLE `utilisateur_role`
  ADD KEY `utilisateur_role_ibfk_1` (`identifiant_utilisateur`),
  ADD KEY `utilisateur_role_ibfk_2` (`identifiant_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etape`
--
ALTER TABLE `etape`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `preference`
--
ALTER TABLE `preference`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur_consommation`
--
ALTER TABLE `utilisateur_consommation`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur_historique_recherche`
--
ALTER TABLE `utilisateur_historique_recherche`
  MODIFY `identifiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`identifiant_recette`) REFERENCES `recette` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient_fk1` FOREIGN KEY (`identifiant_image`) REFERENCES `image` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `journalisation`
--
ALTER TABLE `journalisation`
  ADD CONSTRAINT `journalisation_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `utilisateur` (`identifiant`);

--
-- Contraintes pour la table `recette`
--
ALTER TABLE `recette`
  ADD CONSTRAINT `recette_ibfk_1` FOREIGN KEY (`cree_par`) REFERENCES `utilisateur` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recette_etape`
--
ALTER TABLE `recette_etape`
  ADD CONSTRAINT `recette_etape_ibfk_1` FOREIGN KEY (`identifiant_recette`) REFERENCES `recette` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recette_etape_ibfk_2` FOREIGN KEY (`identifiant_etape`) REFERENCES `etape` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recette_evaluation`
--
ALTER TABLE `recette_evaluation`
  ADD CONSTRAINT `recette_evaluation_ibfk_1` FOREIGN KEY (`identifiant_recette`) REFERENCES `recette` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recette_evaluation_ibfk_2` FOREIGN KEY (`identifiant_utilisateur`) REFERENCES `utilisateur` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recette_evaluation_ibfk_3` FOREIGN KEY (`identifiant_image`) REFERENCES `image` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recette_ingredient`
--
ALTER TABLE `recette_ingredient`
  ADD CONSTRAINT `recette_ingredient_ibfk_1` FOREIGN KEY (`identifiant_recette`) REFERENCES `recette` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recette_ingredient_ibfk_2` FOREIGN KEY (`indentifiant_ingredient`) REFERENCES `ingredient` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur_consommation`
--
ALTER TABLE `utilisateur_consommation`
  ADD CONSTRAINT `utilisateur_consommation_ibfk_1` FOREIGN KEY (`identifiant_utilisateur`) REFERENCES `utilisateur` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_consommation_ibfk_2` FOREIGN KEY (`identifiant_recette`) REFERENCES `recette` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur_favoris`
--
ALTER TABLE `utilisateur_favoris`
  ADD CONSTRAINT `utilisateur_favoris_ibfk_1` FOREIGN KEY (`identifiant_utilisateur`) REFERENCES `utilisateur` (`identifiant`),
  ADD CONSTRAINT `utilisateur_favoris_ibfk_2` FOREIGN KEY (`identifiant_recette`) REFERENCES `recette` (`identifiant`);

--
-- Contraintes pour la table `utilisateur_historique_recherche`
--
ALTER TABLE `utilisateur_historique_recherche`
  ADD CONSTRAINT `utilisateur_historique_recherche_ibfk_1` FOREIGN KEY (`identifiant_utilisateur`) REFERENCES `utilisateur` (`identifiant`);

--
-- Contraintes pour la table `utilisateur_preference`
--
ALTER TABLE `utilisateur_preference`
  ADD CONSTRAINT `fk_preference` FOREIGN KEY (`identifiant_preference`) REFERENCES `preference` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_preference_ibfk_1` FOREIGN KEY (`identifiant_utilisateur`) REFERENCES `utilisateur` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur_profil`
--
ALTER TABLE `utilisateur_profil`
  ADD CONSTRAINT `utilisateur_profil_ibfk_1` FOREIGN KEY (`identifiant_utilisateur`) REFERENCES `utilisateur` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_profil_ibfk_2` FOREIGN KEY (`identifiant_image`) REFERENCES `image` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur_role`
--
ALTER TABLE `utilisateur_role`
  ADD CONSTRAINT `utilisateur_role_ibfk_1` FOREIGN KEY (`identifiant_utilisateur`) REFERENCES `utilisateur` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_role_ibfk_2` FOREIGN KEY (`identifiant_role`) REFERENCES `role` (`identifiant`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
