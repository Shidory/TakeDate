-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 17 Avril 2019 à 11:00
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_rdv`
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
  `photo` varchar(50) NOT NULL,
  `idDept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_client`
--

CREATE TABLE `tb_client` (
  `idClient` int(11) NOT NULL,
  `nomClient` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `genre` varchar(2) NOT NULL,
  `age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tb_departement`
--

CREATE TABLE `tb_departement` (
  `idDept` int(11) NOT NULL,
  `idEntreprise` int(11) NOT NULL,
  `nomDept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tb_agent`
--
ALTER TABLE `tb_agent`
  ADD PRIMARY KEY (`idAgent`);

--
-- Index pour la table `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `tb_departement`
--
ALTER TABLE `tb_departement`
  ADD PRIMARY KEY (`idDept`);

--
-- Index pour la table `tb_entreprise`
--
ALTER TABLE `tb_entreprise`
  ADD PRIMARY KEY (`idEntreprise`);

--
-- Index pour la table `tb_horaire`
--
ALTER TABLE `tb_horaire`
  ADD PRIMARY KEY (`idHoraire`);

--
-- Index pour la table `tb_rdv`
--
ALTER TABLE `tb_rdv`
  ADD PRIMARY KEY (`idRdv`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tb_agent`
--
ALTER TABLE `tb_agent`
  MODIFY `idAgent` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_client`
--
ALTER TABLE `tb_client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_departement`
--
ALTER TABLE `tb_departement`
  MODIFY `idDept` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_entreprise`
--
ALTER TABLE `tb_entreprise`
  MODIFY `idEntreprise` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_horaire`
--
ALTER TABLE `tb_horaire`
  MODIFY `idHoraire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_rdv`
--
ALTER TABLE `tb_rdv`
  MODIFY `idRdv` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
