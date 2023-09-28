-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 avr. 2023 à 01:07
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lunetti`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `validation` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `validation`, `psw`) VALUES
(10, 'Dhouib', 'Mohamed', 'mohameddhouib741@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `intitule` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `descri` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `code`, `intitule`, `prix`, `descri`, `photo`) VALUES
(45, '0002', 'Hobbemis', '200TND', 'Envie d\'un nouveau look ? Que vous les portiez tous les jours ou exceptionnellement, la marque Croon vous propose des modèles pour toutes les occasions. ', '2.png'),
(46, '0003', 'Telglalax', '300TND', 'Ces lunettes de vue SmartBuy Collection Gibson 969A vous surprendront de par leur design et leur qualité', '3.png'),
(47, '0004', 'Walglalax', '220TND', 'Envie d\'un nouveau look ? Que vous les portiez tous les jours ou exceptionnellement, la marque Croon vous propose des modèles pour toutes les occasions. ', '11.png'),
(48, '0005', 'Shirexon', '700TND', 'Ces lunettes sont de style aviateur avec une monture en métal argenté et des verres miroir bleu. Elles ont une allure sportive et moderne qui convient parfaitement aux activités en plein air.', '8.png'),
(49, '0006', 'Créators', '90TND', 'craquez pour les SmartBuy Collection SmartBuy Collection Morgan Asian Fit 604 . Leur monture Noir est tout simplement parfaite pour sublimer vos tenues de tous les jours', '5.png'),
(50, '0007', 'Cciwei', '159TND', 'Les lunettes de vue SmartBuy Collection sont originales et tendances. Les SmartBuy Collection Tonton , possèdent une monture en Métal disponible dans des coloris élégants', '10.png'),
(51, '0008', 'Packcop', '951TND', ' les lunettes de vue Sinner Sinner Dex SIOP-731 10-07 mettront votre regard en valeur chaque jour.', '6.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
