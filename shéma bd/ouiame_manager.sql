-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 mai 2024 à 23:43
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ouiame_manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(14, 'Electronics'),
(15, 'Clothing'),
(16, 'Food '),
(17, 'Make Up'),
(18, 'Books');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantite` int(100) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) NOT NULL,
  `expiration` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `quantite`, `responsable`, `description`, `price`, `expiration`, `location`, `category`) VALUES
(10, 'Smartphone	 ', 100, 'M.Reda Alami', 'High-end smartphone with 128GB storage', 1300, '0000-00-00', 'A1', 'Electronics'),
(12, 'T-Shirt ', 100, 'M.KARIM KATIBI', '100% cotton t-shirt', 100, '0000-00-00', 'C1', 'Clothing'),
(13, 'Laptop ', 50, 'M.SALMA BAJDOU', 'Powerful laptop with 16GB RAM', 3000, '0000-00-00', 'A2', 'Electronics'),
(14, 'Nutella ', 80, 'Mme.IMAN ', 'Dark chocolate', 40, '2024-07-31', 'F4', 'Food '),
(15, 'Jeans ', 200, 'M.KARIM KATIBI', 'Denim jeans bleu', 130, '0000-00-00', 'C1', 'Clothing'),
(16, 'Mascara', 60, 'Mme.Sara', 'Mascara pour des cils plus épais et plus longs.', 60, '2024-06-30', 'Rayon B3', 'Make Up'),
(17, 'Blush', 60, 'Mme.Aya', 'Blush en poudre pour un effet bonne mine.', 40, '2026-02-28', 'Rayon A3', 'Make Up'),
(18, ' Coffee Beans ', 55, 'M.Morad', 'Arabica coffee beans, 1kg', 100, '2026-01-31', 'F3', 'Food ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
