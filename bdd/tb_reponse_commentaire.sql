-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 22 avr. 2019 à 14:18
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
-- Index pour la table `tb_reponse_commentaire`
--
ALTER TABLE `tb_reponse_commentaire`
  ADD PRIMARY KEY (`idReponse`),
  ADD KEY `fk_reponse` (`id_comment`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_reponse_commentaire`
--
ALTER TABLE `tb_reponse_commentaire`
  MODIFY `idReponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tb_reponse_commentaire`
--
ALTER TABLE `tb_reponse_commentaire`
  ADD CONSTRAINT `fk_reponse` FOREIGN KEY (`id_comment`) REFERENCES `tb_commentaire_client` (`idCommentaire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
