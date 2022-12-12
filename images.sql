-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 11 déc. 2022 à 14:58
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
-- Base de données : `tranonjakalabel`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `chemin` varchar(200) DEFAULT NULL,
  `typeimages` varchar(200) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idproduits` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`idimages`, `chemin`, `typeimages`, `iduser`, `idproduits`) VALUES
(1, 'Publics/Video/이건 단백질 깡패입니다- 미국에 수출하는 미래식량 식용밀웜 -식용곤충 Future Food Edible Insect- Mealworm Korean food factory.mp4', NULL, NULL, NULL),
(2, 'Publics/images/product-1.jpg', 'ventes', NULL, NULL),
(3, 'Publics/images/product-2.jpg', 'ventes', NULL, NULL),
(4, 'Publics/images/product-3.jpg', 'ventes', NULL, NULL),
(5, 'Publics/images/product-4.jpg', 'ventes', NULL, NULL),
(6, 'Publics/images/product-5.jpg', 'ventes', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`),
  ADD UNIQUE KEY `unq_images_iduser` (`iduser`),
  ADD UNIQUE KEY `unq_images_idproduits` (`idproduits`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `idimages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
