-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2024 at 05:36 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manger-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `consommationsrecettes`
--

DROP TABLE IF EXISTS `consommationsrecettes`;
CREATE TABLE IF NOT EXISTS `consommationsrecettes` (
  `ID_Consommation` int NOT NULL,
  `ID_Utilisateur` int NOT NULL,
  `ID_Recette` int NOT NULL,
  `DateConsommation` date NOT NULL,
  `QuantiteConsommee` float DEFAULT NULL,
  `TypeRepas` varchar(255) DEFAULT NULL,
  `TaillePortion` float DEFAULT NULL,
  PRIMARY KEY (`ID_Consommation`),
  KEY `ID_Utilisateur` (`ID_Utilisateur`),
  KEY `ID_Recette` (`ID_Recette`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `etapesrecettes`
--

DROP TABLE IF EXISTS `etapesrecettes`;
CREATE TABLE IF NOT EXISTS `etapesrecettes` (
  `ID_Etape` int NOT NULL,
  `ID_Recette` int NOT NULL,
  `OrdreEtape` int NOT NULL,
  `DescriptionEtape` text NOT NULL,
  PRIMARY KEY (`ID_Etape`),
  KEY `ID_Recette` (`ID_Recette`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluationsrecettes`
--

DROP TABLE IF EXISTS `evaluationsrecettes`;
CREATE TABLE IF NOT EXISTS `evaluationsrecettes` (
  `ID_Evaluation` int NOT NULL,
  `ID_Recette` int NOT NULL,
  `ID_Utilisateur` int NOT NULL,
  `Note` int NOT NULL,
  `Commentaire` text,
  `DateEvaluation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Evaluation`),
  KEY `ID_Recette` (`ID_Recette`),
  KEY `ID_Utilisateur` (`ID_Utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorisutilisateurs`
--

DROP TABLE IF EXISTS `favorisutilisateurs`;
CREATE TABLE IF NOT EXISTS `favorisutilisateurs` (
  `ID_Favori` int NOT NULL,
  `ID_Utilisateur` int NOT NULL,
  `ID_Recette` int NOT NULL,
  PRIMARY KEY (`ID_Favori`),
  UNIQUE KEY `ID_Utilisateur` (`ID_Utilisateur`,`ID_Recette`),
  KEY `ID_Recette` (`ID_Recette`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `historiquerecherches`
--

DROP TABLE IF EXISTS `historiquerecherches`;
CREATE TABLE IF NOT EXISTS `historiquerecherches` (
  `ID_Recherche` int NOT NULL,
  `ID_Utilisateur` int NOT NULL,
  `TermeRecherche` varchar(255) NOT NULL,
  `DateRecherche` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Recherche`),
  KEY `ID_Utilisateur` (`ID_Utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informationnutritionnelle`
--

DROP TABLE IF EXISTS `informationnutritionnelle`;
CREATE TABLE IF NOT EXISTS `informationnutritionnelle` (
  `ID_Ingredient` int NOT NULL,
  `Lipides` float DEFAULT NULL,
  `Proteines` float DEFAULT NULL,
  `Glucides` float DEFAULT NULL,
  PRIMARY KEY (`ID_Ingredient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `ID_Ingredient` int NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `CaloriesParUnite` float DEFAULT NULL,
  `Unite` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Ingredient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journalisation`
--

DROP TABLE IF EXISTS `journalisation`;
CREATE TABLE IF NOT EXISTS `journalisation` (
  `ID_Log` int NOT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ID_Utilisateur` int DEFAULT NULL,
  `Action` text NOT NULL,
  `IP_Adresse` varchar(255) DEFAULT NULL,
  `Navigateur` varchar(255) DEFAULT NULL,
  `ResultatAction` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Log`),
  KEY `ID_Utilisateur` (`ID_Utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preferencesutilisateurs`
--

DROP TABLE IF EXISTS `preferencesutilisateurs`;
CREATE TABLE IF NOT EXISTS `preferencesutilisateurs` (
  `ID_Preference` int NOT NULL,
  `ID_Utilisateur` int NOT NULL,
  `TypePreference` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Preference`),
  KEY `ID_Utilisateur` (`ID_Utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profilsutilisateurs`
--

DROP TABLE IF EXISTS `profilsutilisateurs`;
CREATE TABLE IF NOT EXISTS `profilsutilisateurs` (
  `ID_Profil` int NOT NULL,
  `ID_Utilisateur` int NOT NULL,
  `Taille` float DEFAULT NULL,
  `Poids` float DEFAULT NULL,
  `Age` int DEFAULT NULL,
  `Genre` enum('Masculin','Féminin','Autre') DEFAULT NULL,
  `ObjectifCalorique` int DEFAULT NULL,
  PRIMARY KEY (`ID_Profil`),
  KEY `ID_Utilisateur` (`ID_Utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `ID_Recette` int NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` text,
  `TempsPreparation` int DEFAULT NULL,
  `TempsCuisson` int DEFAULT NULL,
  `CaloriesTotales` int DEFAULT NULL,
  `CreePar` int NOT NULL,
  `Visibilite` enum('Public','Privé') NOT NULL,
  `TypeRepas` varchar(255) DEFAULT NULL,
  `DateCreation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateMiseAJour` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Recette`),
  KEY `CreePar` (`CreePar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recettesingredients`
--

DROP TABLE IF EXISTS `recettesingredients`;
CREATE TABLE IF NOT EXISTS `recettesingredients` (
  `ID_RecetteIngredient` int NOT NULL,
  `ID_Recette` int NOT NULL,
  `ID_Ingredient` int NOT NULL,
  `Quantite` float NOT NULL,
  PRIMARY KEY (`ID_RecetteIngredient`),
  UNIQUE KEY `ID_Recette` (`ID_Recette`,`ID_Ingredient`),
  KEY `ID_Ingredient` (`ID_Ingredient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `ID_Role` int NOT NULL,
  `Nom_Role` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_Role`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID_Utilisateur` int NOT NULL,
  `Nom_Utilisateur` varchar(255) NOT NULL,
  `Hash_MotDePasse` varchar(255) NOT NULL COMMENT 'Mot de passe haché avec un algorithme fort',
  `Email` varchar(191) NOT NULL,
  `DateCreation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateMiseAJour` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Utilisateur`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateursroles`
--

DROP TABLE IF EXISTS `utilisateursroles`;
CREATE TABLE IF NOT EXISTS `utilisateursroles` (
  `ID_UtilisateurRole` int NOT NULL,
  `ID_Utilisateur` int DEFAULT NULL,
  `ID_Role` int DEFAULT NULL,
  PRIMARY KEY (`ID_UtilisateurRole`),
  UNIQUE KEY `ID_Utilisateur` (`ID_Utilisateur`,`ID_Role`),
  KEY `ID_Role` (`ID_Role`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
