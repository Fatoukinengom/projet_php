-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 fév. 2023 à 04:12
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `allocation_chambre`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `IDA` int(20) NOT NULL,
  `codeA` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Motdepasse` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`IDA`, `codeA`, `Email`, `Motdepasse`) VALUES
(1, 234554, 'Fallou@gmail.com', '12345'),
(2, 219993, 'fabindiaye@gmail.com', '098765'),
(3, 12345, 'binfa@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `IDB` int(10) NOT NULL,
  `nom_B` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`IDB`, `nom_B`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `ID_C` int(10) NOT NULL,
  `num_C` int(20) NOT NULL,
  `capacite` int(10) NOT NULL,
  `IDB` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`ID_C`, `num_C`, `capacite`, `IDB`) VALUES
(1, 1, 4, 1),
(2, 2, 4, 1),
(3, 3, 4, 1),
(4, 4, 4, 1),
(5, 1, 4, 2),
(6, 2, 4, 2),
(7, 3, 4, 2),
(8, 4, 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `IDE` int(30) NOT NULL,
  `code` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(5) NOT NULL,
  `motdepasse` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`IDE`, `code`, `nom`, `prenom`, `email`, `age`, `motdepasse`) VALUES
(2, 24590, 'FABI', 'NDIAYE', 'SKURHG@gmail.com', 20, 2147483647),
(3, 219993, 'Fatimata Binetou', 'NDIAYE', 'fatoubintoundiaye@gmail.com', 21, 0),
(4, 213345, 'Aissatou', 'konare', 'aisatou@gmail.COM', 7, 0),
(7, 219098, 'TOP', 'NDACK', 'topthiate@gmail.com', 21, 2147483647),
(12, 219546, 'FAYE', 'AMY', 'amyfay@gmail.com', 23, 5738975),
(14, 2133445, 'DIOUF', 'Elimane', 'papaelimane@gmail.com', 20, 2147483647),
(15, 21456, 'KANE', 'MAMADOU', 'mamadou@gmail.com', 29, 2147483647),
(16, 219998, 'NGOM', 'FATOU KINE', 'FATOUNGOM@GMAIL.com', 12, 2909),
(17, 123456, 'FAYE', 'Saliou', 'fayesaliou@gmail.com', 32, 987654321),
(18, 123456, 'FAYE', 'Saliou', 'fayesaliou@gmail.com', 32, 987654321),
(19, 123456, 'FAYE', 'Saliou', 'fayesaliou@gmail.com', 32, 987654321);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `IDR` int(10) NOT NULL,
  `IDE` int(10) NOT NULL,
  `ID_C` int(10) NOT NULL,
  `Date_de_debut` date NOT NULL,
  `Date_de_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`IDR`, `IDE`, `ID_C`, `Date_de_debut`, `Date_de_fin`) VALUES
(2, 4, 1, '2022-10-01', '2023-07-01'),
(3, 14, 1, '2022-10-01', '2023-07-01'),
(4, 2, 1, '2022-10-01', '2023-07-01'),
(5, 3, 1, '2022-11-01', '2023-07-01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`IDA`);

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`IDB`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`ID_C`),
  ADD KEY `IDB` (`IDB`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`IDE`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`IDR`),
  ADD KEY `IDE` (`IDE`),
  ADD KEY `reservation_ibfk_2` (`ID_C`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `IDA` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `IDB` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `ID_C` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `IDE` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `IDR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`IDB`) REFERENCES `batiment` (`IDB`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`IDE`) REFERENCES `etudiant` (`IDE`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`ID_C`) REFERENCES `chambre` (`ID_C`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
