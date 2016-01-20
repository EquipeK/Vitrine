-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Janvier 2016 à 16:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vitrine_rubis`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id_address` int(8) NOT NULL AUTO_INCREMENT,
  `cp` varchar(6) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `numero` int(2) NOT NULL,
  `voie` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `complement` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `address_to_customer`
--

CREATE TABLE IF NOT EXISTS `address_to_customer` (
  `id_address_to_customer` int(8) NOT NULL AUTO_INCREMENT,
  `id_customer` int(5) NOT NULL,
  `id_address` int(55) NOT NULL,
  PRIMARY KEY (`id_address_to_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id_customer` int(5) NOT NULL AUTO_INCREMENT,
  `id_address` int(55) NOT NULL,
  `id_user` int(6) NOT NULL,
  `newsletter` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `customers_to_pre-order`
--

CREATE TABLE IF NOT EXISTS `customers_to_pre-order` (
  `id_c_to_p` int(8) NOT NULL AUTO_INCREMENT,
  `id_customer` int(5) NOT NULL,
  `id_pre-order` int(8) NOT NULL,
  PRIMARY KEY (`id_c_to_p`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id_group` int(3) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `level` int(3) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `page_cms`
--

CREATE TABLE IF NOT EXISTS `page_cms` (
  `id_page` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `edited` datetime DEFAULT NULL,
  `id_user` int(6) NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id_image` int(5) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `id_product` int(8) DEFAULT NULL,
  `id_category` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pre-orders`
--

CREATE TABLE IF NOT EXISTS `pre-orders` (
  `id_pre-order` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_pre-order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pre-order_to_products`
--

CREATE TABLE IF NOT EXISTS `pre-order_to_products` (
  `id_pre-order_to_product` int(8) NOT NULL AUTO_INCREMENT,
  `id_pre-order` int(10) NOT NULL,
  `id_product` int(8) NOT NULL,
  `quantity` int(3) NOT NULL,
  PRIMARY KEY (`id_pre-order_to_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `quantity` int(5) NOT NULL,
  `slug` varchar(55) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `edited` datetime DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(6) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_group` int(3) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
