-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 jan. 2022 à 02:06
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forage`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `numA` varchar(45) DEFAULT NULL,
  `description` text NOT NULL,
  `idClientF` int(11) NOT NULL,
  `idCompteurF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id`, `date`, `numA`, `description`, `idClientF`, `idCompteurF`) VALUES
(1, '2021-12-08', 'ABONNEMENT001', 'Abonnement payé', 1, 3),
(3, '2021-12-16', 'ABONNEMENT__002', 'Abonnement 6 mois', 1, 2),
(4, '2021-12-17', 'ABONNEMENT__004', 'Abonnement 2 mois', 2, 5),
(7, '2022-01-06', 'ABONNEMENT__005', 'Abonnement 6 mois', 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `chefV` varchar(45) DEFAULT NULL,
  `village` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `etatClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `chefV`, `village`, `adresse`, `tel`, `etatClient`) VALUES
(1, 'Ngor', 'Thioye', 'Pikine', 'Medina', '761234567', 0),
(2, 'Messi', 'saitama', 'mbour', 'Medina', '781248709', 0);

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE `compteur` (
  `id` int(11) NOT NULL,
  `numC` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compteur`
--

INSERT INTO `compteur` (`id`, `numC`) VALUES
(1, 'SEN_001'),
(2, 'SEN_002'),
(3, 'SEN_003'),
(4, 'SEN_004'),
(5, 'COMPTEUR__5'),
(6, 'SEN__006');

-- --------------------------------------------------------

--
-- Structure de la table `cosomation`
--

CREATE TABLE `cosomation` (
  `date` date DEFAULT NULL,
  `consommation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `idF` int(11) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `consommation` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `pu` float DEFAULT NULL,
  `etatFacture` int(11) NOT NULL,
  `idAbonnementF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`idF`, `numero`, `consommation`, `date`, `DateFin`, `pu`, `etatFacture`, `idAbonnementF`) VALUES
(1, 'FAC__001', 300, '2022-01-05', '0000-00-00', 39000, 1, 1),
(2, 'FAC__002', 146, '2022-01-05', '0000-00-00', 18980, 0, 4),
(3, 'FAC__003', 124, '2022-01-04', '2022-01-24', 16120, 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `habitant`
--

CREATE TABLE `habitant` (
  `id` int(11) NOT NULL,
  `matricule` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `idH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `habitant`
--

INSERT INTO `habitant` (`id`, `matricule`, `nom`, `prenom`, `idH`) VALUES
(1, 'A_001', 'medy', 'lord', 1),
(2, 'A_002', 'MOUTIMA', 'Brice', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE `reglement` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `idF` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reglement`
--

INSERT INTO `reglement` (`id`, `date`, `idF`) VALUES
(1, '2022-01-04', 1),
(2, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `nomRole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idRole`, `nomRole`) VALUES
(1, 'Admin'),
(2, 'Gestion_clientele'),
(3, 'Gestion_Commerciale'),
(4, 'Gestion_Compteur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mdp` varchar(45) DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  `idRoleF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `mdp`, `etat`, `idRoleF`) VALUES
(1, 'Juste', 'Emmanuel', 'mbriyann01@gmail.com', 'passer', 1, 1),
(2, 'BALOKI', 'Z', 'zkoundou00@gmail.com', 'zz', 0, 2),
(3, 'NSANGOU', 'Medy', 'medy1231@gmail.com', 'medy123', 0, 3),
(4, 'BAK', 'JRuben', 'jrubbak31@gmail.com', 'ok', 0, 4),
(5, 'NG', 'Ro', 'Rong@gmail.com', 'ok', 0, 2),
(9, 'Apesse', 'Junior', 'apjr@gmail.com', '0', 0, 4),
(10, 'Bak', 'Yann', 'yannbak@gmail.com', '0', 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `village`
--

CREATE TABLE `village` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `village`
--

INSERT INTO `village` (`id`, `nom`) VALUES
(1, 'boko'),
(2, 'kimpila');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idClientF_2` (`idClientF`,`idCompteurF`),
  ADD KEY `idClientF` (`idClientF`),
  ADD KEY `idCompteurF` (`idCompteurF`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`idF`),
  ADD UNIQUE KEY `numero_UNIQUE` (`numero`),
  ADD KEY `idAbonnementF` (`idAbonnementF`);

--
-- Index pour la table `habitant`
--
ALTER TABLE `habitant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_habitant_village_idx` (`idH`);

--
-- Index pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reglement_facture1_idx` (`idF`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRoleF` (`idRoleF`);

--
-- Index pour la table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `compteur`
--
ALTER TABLE `compteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `idF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `habitant`
--
ALTER TABLE `habitant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reglement`
--
ALTER TABLE `reglement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `village`
--
ALTER TABLE `village`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `abonnement_ibfk_1` FOREIGN KEY (`idClientF`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `abonnement_ibfk_2` FOREIGN KEY (`idCompteurF`) REFERENCES `compteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `habitant`
--
ALTER TABLE `habitant`
  ADD CONSTRAINT `habitant_ibfk_1` FOREIGN KEY (`idH`) REFERENCES `village` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD CONSTRAINT `reglement_ibfk_1` FOREIGN KEY (`idF`) REFERENCES `facture` (`idF`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idRoleF`) REFERENCES `role` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
