-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 22 avr. 2019 à 14:30
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_rdv`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_agent`
--

CREATE TABLE `tb_agent` (
  `idAgent` int(11) NOT NULL,
  `idEntreprise` int(11) NOT NULL,
  `nomAgent` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `idDept` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_agent`
--

INSERT INTO `tb_agent` (`idAgent`, `idEntreprise`, `nomAgent`, `telephone`, `email`, `photo`, `idDept`, `username`, `pwd`) VALUES
(1, 1, 'lola bamsly', 123456, 'lola@gmail.com', 'lola.png', 2, 'lola', 'lola je t\'aime');

-- --------------------------------------------------------

--
-- Structure de la table `tb_client`
--

CREATE TABLE `tb_client` (
  `idClient` int(11) NOT NULL,
  `nomClient` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `genre` varchar(2) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_commentaire_client`
--

CREATE TABLE `tb_commentaire_client` (
  `idCommentaire` int(11) NOT NULL,
  `idRdv` int(11) NOT NULL,
  `contenu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_departement`
--

CREATE TABLE `tb_departement` (
  `idDept` int(11) NOT NULL,
  `nomDept` varchar(50) NOT NULL,
  `idEntreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_departement`
--

INSERT INTO `tb_departement` (`idDept`, `nomDept`, `idEntreprise`) VALUES
(2, 'loladepartement', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tb_entreprise`
--

CREATE TABLE `tb_entreprise` (
  `idEntreprise` int(11) NOT NULL,
  `nomEntreprise` varchar(50) NOT NULL,
  `secteur` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `codePostal` varchar(50) NOT NULL,
  `siteWeb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_entreprise`
--

INSERT INTO `tb_entreprise` (`idEntreprise`, `nomEntreprise`, `secteur`, `telephone`, `email`, `adresse`, `description`, `logo`, `pays`, `codePostal`, `siteWeb`) VALUES
(1, 'carole', 'carole', 422526272, 'carole@gmail.com', 'blabla', 'carole est jolie', 'carole.png', 'le pays de carole', 'carole1234', 'carole.com');

-- --------------------------------------------------------

--
-- Structure de la table `tb_horaire`
--

CREATE TABLE `tb_horaire` (
  `idHoraire` int(11) NOT NULL,
  `idAgent` int(11) NOT NULL,
  `jour` varchar(50) NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tb_horaire`
--

INSERT INTO `tb_horaire` (`idHoraire`, `idAgent`, `jour`, `heureDebut`, `heureFin`) VALUES
(1, 1, '2019-04-19', '12:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_rdv`
--

CREATE TABLE `tb_rdv` (
  `idRdv` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idEntreprise` int(11) NOT NULL,
  `motif` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `duree` varchar(25) NOT NULL,
  `etat` varchar(25) NOT NULL,
  `commentaire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_reponse_commentaire`
--

CREATE TABLE `tb_reponse_commentaire` (
  `idReponse` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `contenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_agent`
--
ALTER TABLE `tb_agent`
  ADD PRIMARY KEY (`idAgent`),
  ADD KEY `fk_idDep` (`idDept`),
  ADD KEY `fk_idEntreprise` (`idEntreprise`);

--
-- Index pour la table `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `tb_commentaire_client`
--
ALTER TABLE `tb_commentaire_client`
  ADD PRIMARY KEY (`idCommentaire`),
  ADD KEY `fk_commentaire` (`idRdv`);

--
-- Index pour la table `tb_departement`
--
ALTER TABLE `tb_departement`
  ADD PRIMARY KEY (`idDept`),
  ADD KEY `fk_Entreprise` (`idEntreprise`);

--
-- Index pour la table `tb_entreprise`
--
ALTER TABLE `tb_entreprise`
  ADD PRIMARY KEY (`idEntreprise`);

--
-- Index pour la table `tb_horaire`
--
ALTER TABLE `tb_horaire`
  ADD PRIMARY KEY (`idHoraire`),
  ADD KEY `fk_idAgent` (`idAgent`);

--
-- Index pour la table `tb_rdv`
--
ALTER TABLE `tb_rdv`
  ADD PRIMARY KEY (`idRdv`),
  ADD KEY `fk_idClient` (`idClient`),
  ADD KEY `fk_idEnt` (`idEntreprise`);

--
-- Index pour la table `tb_reponse_commentaire`
--
ALTER TABLE `tb_reponse_commentaire`
  ADD PRIMARY KEY (`idReponse`),
  ADD KEY `fk_reponse` (`id_comment`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_agent`
--
ALTER TABLE `tb_agent`
  MODIFY `idAgent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_client`
--
ALTER TABLE `tb_client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_commentaire_client`
--
ALTER TABLE `tb_commentaire_client`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_departement`
--
ALTER TABLE `tb_departement`
  MODIFY `idDept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_entreprise`
--
ALTER TABLE `tb_entreprise`
  MODIFY `idEntreprise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_horaire`
--
ALTER TABLE `tb_horaire`
  MODIFY `idHoraire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_rdv`
--
ALTER TABLE `tb_rdv`
  MODIFY `idRdv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_reponse_commentaire`
--
ALTER TABLE `tb_reponse_commentaire`
  MODIFY `idReponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tb_agent`
--
ALTER TABLE `tb_agent`
  ADD CONSTRAINT `fk_idDep` FOREIGN KEY (`idDept`) REFERENCES `tb_departement` (`idDept`),
  ADD CONSTRAINT `fk_idEntreprise` FOREIGN KEY (`idEntreprise`) REFERENCES `tb_entreprise` (`idEntreprise`);

--
-- Contraintes pour la table `tb_commentaire_client`
--
ALTER TABLE `tb_commentaire_client`
  ADD CONSTRAINT `fk_commentaire` FOREIGN KEY (`idRdv`) REFERENCES `tb_rdv` (`idRdv`);

--
-- Contraintes pour la table `tb_departement`
--
ALTER TABLE `tb_departement`
  ADD CONSTRAINT `fk_Entreprise` FOREIGN KEY (`idEntreprise`) REFERENCES `tb_entreprise` (`idEntreprise`);

--
-- Contraintes pour la table `tb_horaire`
--
ALTER TABLE `tb_horaire`
  ADD CONSTRAINT `fk_idAgent` FOREIGN KEY (`idAgent`) REFERENCES `tb_agent` (`idAgent`);

--
-- Contraintes pour la table `tb_rdv`
--
ALTER TABLE `tb_rdv`
  ADD CONSTRAINT `fk_idClient` FOREIGN KEY (`idClient`) REFERENCES `tb_client` (`idClient`),
  ADD CONSTRAINT `fk_idEnt` FOREIGN KEY (`idEntreprise`) REFERENCES `tb_entreprise` (`idEntreprise`);

--
-- Contraintes pour la table `tb_reponse_commentaire`
--
ALTER TABLE `tb_reponse_commentaire`
  ADD CONSTRAINT `fk_reponse` FOREIGN KEY (`id_comment`) REFERENCES `tb_commentaire_client` (`idCommentaire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
