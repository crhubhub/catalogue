-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 06 nov. 2020 à 12:42
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `antiques_dealer`
--
CREATE DATABASE IF NOT EXISTS `antiques_dealer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `antiques_dealer`;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `native_country` varchar(45) DEFAULT NULL,
  `from_year` int(5) DEFAULT NULL,
  `to_year` int(5) DEFAULT '9999',
  `about` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`, `native_country`, `from_year`, `to_year`, `about`) VALUES
(1, 'Art culinaire cru', 'Bulgarie', 1980, 1982, '-'),
(2, 'Vêtements pour cueilleurs modernes', 'France', 2004, 2018, '-'),
(3, 'Equipement de tennis', 'Angleterre', 1870, 9999, '-');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(250) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`item_id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `url_UNIQUE` (`url`),
  KEY `fk_image_item1_idx` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `name`, `url`, `item_id`) VALUES
(1, 'La fourchette', '56789_la_fourchette_1.jpg', 1),
(2, 'Le chausson 1', '09876_le_chausson_1.jpg', 3),
(3, 'Pull', '00548_pull_1_updated.jpg', 2),
(4, 'le chausson 2', '98767_le_chausson_2.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT 'UNKNOWN',
  `reference` varchar(20) NOT NULL,
  `year` int(5) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `price` float(12,2) UNSIGNED DEFAULT NULL,
  `proof_of_tracing` tinyint(1) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `description` text,
  `height` float(4,2) UNSIGNED DEFAULT NULL,
  `width` float(4,2) UNSIGNED DEFAULT NULL,
  `depth` float(4,2) UNSIGNED DEFAULT NULL,
  `good_condition` tinyint(1) UNSIGNED DEFAULT NULL,
  `delivery_possible` tinyint(1) UNSIGNED DEFAULT NULL,
  `shop_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reference_UNIQUE` (`reference`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_item_shop1_idx` (`shop_id`),
  KEY `fk_item_seller1_idx` (`seller_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `name`, `reference`, `year`, `country`, `price`, `proof_of_tracing`, `type`, `material`, `description`, `height`, `width`, `depth`, `good_condition`, `delivery_possible`, `shop_id`, `seller_id`) VALUES
(1, 'fourchette à crudités', '123456DD', 1984, 'Belgique', 320.00, 1, 'Ustensile de cuisine', 'Métal', '-', 1.40, 3.50, 13.00, 0, 0, 1, 1),
(2, 'Pull pour Cueilleur moderne', '547649QJ', 2004, 'France', 25.00, 1, 'Vêtement', 'Laine', '-', 40.00, NULL, NULL, 0, 0, 1, 2),
(3, 'Chaussons de tennis', '897686ER', 1892, 'Angleterre', 700.00, 0, 'Equipement de sport', 'Cuir', '-', 37.00, NULL, NULL, 1, 0, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `item_genre`
--

DROP TABLE IF EXISTS `item_genre`;
CREATE TABLE IF NOT EXISTS `item_genre` (
  `item_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`,`genre_id`),
  KEY `fk_item_genre_item1_idx` (`item_id`),
  KEY `fk_item_genre_genre1_idx` (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item_genre`
--

INSERT INTO `item_genre` (`item_id`, `genre_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `item_maker`
--

DROP TABLE IF EXISTS `item_maker`;
CREATE TABLE IF NOT EXISTS `item_maker` (
  `maker_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`maker_id`,`item_id`),
  KEY `fk_item_maker_maker1_idx` (`maker_id`),
  KEY `fk_item_maker_item1_idx` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item_maker`
--

INSERT INTO `item_maker` (`maker_id`, `item_id`) VALUES
(4, 1),
(5, 2),
(6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `maker`
--

DROP TABLE IF EXISTS `maker`;
CREATE TABLE IF NOT EXISTS `maker` (
  `id` int(11) NOT NULL,
  `complete_name` varchar(80) NOT NULL,
  `year_birth` int(5) DEFAULT NULL,
  `native_country` varchar(45) DEFAULT NULL,
  `about` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `complete_name_UNIQUE` (`complete_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `maker`
--

INSERT INTO `maker` (`id`, `complete_name`, `year_birth`, `native_country`, `about`) VALUES
(4, 'Jean de Jean', 1960, 'Belgique', 'Jean de Jean est né à Ixelles le 4 février 1960. Il se passionne depuis tout petit pour la cuisine crue Bulgare et les films d\'horreur Danois.'),
(5, 'Léono Nono', 1991, 'France', 'Né dans une petite maison de campagne Landaise vers la fin du 20e siècle. Léono Nono s’intéressera à la cueillette à dos de poney ainsi qu\'aux psychotropes.'),
(6, 'Chrigette Chasney', 1871, 'Angleterre', 'Chrigette Chasney est né à Londre en 1871. Après des études supérieures en art couturiers à Coventry. Elle deviendra ensuite l\'idole mondiale de tennis en 5 contre 5.');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(11) NOT NULL,
  `reduction` bigint(3) DEFAULT '0' COMMENT 'if +, percent;if -, net discount',
  `start_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime DEFAULT NULL,
  `hero` tinyint(4) NOT NULL DEFAULT '0',
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`item_id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_promotion_item1_idx` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `reduction`, `start_date`, `end_date`, `hero`, `item_id`) VALUES
(2, -10, '2020-10-18 14:13:26', NULL, 0, 1),
(3, -250, '2020-10-18 14:14:15', '2020-12-31 00:00:00', 1, 3),
(4, 15, '2020-10-18 14:15:57', '2021-05-15 00:00:00', 0, 2),
(6, -30, '2020-10-18 23:31:08', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `seller`
--

INSERT INTO `seller` (`id`, `name`, `surname`, `phone`) VALUES
(1, 'Jean', 'Quivend', '0488551199'),
(2, 'Sébastien', 'Marchand', '0882672879872'),
(3, 'John', 'Seller', '04456533569');

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `vta` bigint(20) DEFAULT NULL,
  `street_name` varchar(80) DEFAULT NULL,
  `street_number` int(11) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`id`, `name`, `vta`, `street_name`, `street_number`, `postal_code`, `city`, `country`, `phone`) VALUES
(1, 'Le Magasin Principal', 23456789012345, 'Rue des Capucines', 41, 1050, 'Bruxelles', 'Belgique', '023334455'),
(2, 'La Boutique du centre', 97645898767906, 'Rue de la Bourse', 2, 1000, 'Bruxelles', 'Belgique', '027685547'),
(3, 'Le Shop de Namur', 34576456578789, 'Rue des Faubourg', 81, 5020, 'Namur', 'Belgique', '0356567890');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `pseudo_UNIQUE` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `pseudo`, `password`) VALUES
(1, 'le', 'boss', 'formateur', '1234');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
