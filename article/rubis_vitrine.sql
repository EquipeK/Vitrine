-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 18 Décembre 2015 à 17:31
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `rubis_vitrine`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(3) NOT NULL AUTO_INCREMENT,
  `libelle_article` varchar(70) NOT NULL,
  `desc_article` text NOT NULL,
  `img_article` varchar(250) NOT NULL,
  `prix_article` float NOT NULL,
  `id_categ` int(3) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `libelle_article`, `desc_article`, `img_article`, `prix_article`, `id_categ`) VALUES
(1, 'Echarpe gros points de laines color block', 'Un tricotage innovant pour ce bonnet color block au style urbain. Un modèle parfait pour accessoiriser tous vos looks hivernaux.', 'http://demandware.edgesuite.net/aaqm_prd/on/demandware.static/Sites-FR-Site/Sites-master/fr/dw13c96d5e/RE2754_2DF_24.jpg', 100.75, 1),
(2, 'Echarpe rayée en laine côtelée', 'Inspiration marinière pour cette écharpe confectionnée en pure laine côtelée. Portez-la avec un beau caban de la collection.', 'http://demandware.edgesuite.net/aaqm_prd/on/demandware.static/Sites-FR-Site/Sites-master/fr/dwb7ead6d3/RE2743_5N7_24.jpg', 70.5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categ` int(3) NOT NULL AUTO_INCREMENT,
  `libelle_categ` varchar(70) NOT NULL,
  `desc_categ` text NOT NULL,
  `id_categ_mere` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_categ`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categ`, `libelle_categ`, `desc_categ`, `id_categ_mere`) VALUES
(1, 'Produit en Pré-commande', 'Dans cette catégorie vous retrouverez tous les produits disponibles en pré-commande.', 0),
(2, 'Produit en Pré-commande', 'Dans cette catégorie vous retrouverez tous les produits disponibles en pré-commande.', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
