-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 08 Mars 2013 à 08:36
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `peexsell`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` tinyint(4) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Animaux'),
(2, 'Architecture'),
(3, 'Mode'),
(4, 'Nature'),
(5, 'Portrait'),
(6, 'Urbain');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `src`, `name`, `price`, `user_id`, `category_id`) VALUES
(1, 'animaux_01', 'chien', 10, 1, 1),
(2, 'animaux_03', 'étoile de mer', 12, 2, 1),
(3, 'architecture_01', 'immeuble vitré', 15, 1, 2),
(4, 'architecture_10', 'immeuble incliné', 15, 1, 2),
(5, 'mode_01', 'old biker', 20, 1, 3),
(6, 'mode_02', 'féerique ', 20, 2, 3),
(7, 'nature_01', 'champ', 10, 1, 4),
(8, 'nature_02', 'montagne bleue', 12, 1, 4),
(9, 'portrait_01', 'bébé', 15, 1, 5),
(10, 'portrait_06 ', 'cameraman', 10, 1, 5),
(11, 'urbain_01', 'rue italienne', 15, 2, 6),
(12, 'urbain_02', 'ancien', 30, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
