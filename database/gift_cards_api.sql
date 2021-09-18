-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 18 sep. 2021 à 13:57
-- Version du serveur :  8.0.26-0ubuntu0.20.04.2
-- Version de PHP : 8.0.10

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
AUTOCOMMIT = 0;
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gift-cards-api`
--

--
-- Déchargement des données de la table `cards`
--

INSERT INTO `cards` (`id`, `name`, `value`, `type_id`)
VALUES (1, 'Card A', 100, 1),
       (2, 'Card B', 100, 3);

--
-- Déchargement des données de la table `cards_types`
--

INSERT INTO `cards_types` (`id`, `name`, `max_avail_value`)
VALUES (1, 'Type 1', 100),
       (2, 'Type 2', 50),
       (3, 'Type 3', 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
