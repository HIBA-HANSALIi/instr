-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 nov. 2022 à 15:08
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `instr`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(8, 'ffff', 'hhbjhb@GMAIL.COM', '1'),
(9, 'hiba', 'hslhiba1@gmail.com', 'hiba'),
(11, 'HANSALI HIBA', 'hslhiba1@gmail.com', '123'),
(14, 'sqdsq', 'Hiba.HANSALI@student.youcode.ma', '132'),
(15, 'hajjou', 'hajjou@gmail.com', 'haj'),
(16, 'houda', 'houda@gmail.com', 'houda'),
(17, 'sanae', 'sanae@gmail.com', 'sanae'),
(18, 'text', 'text@gmail.com', '123'),
(19, 'hajar', 'hajar@gmail.com', 'hajar'),
(20, '/gigi', 'gi@gmail.com', 'gigi'),
(21, '/hihi', 'hi@gmail.com', 'hi'),
(22, '&lt;script&gt;alert(&quot;hhh&quot;)&lt;/script&gt;', 'email@email.cm', 'password'),
(23, 'sabir', 'sabir@gmail.com', 'sabir'),
(24, 'safae', 'safae@gmail.com', 'safae'),
(25, 'dina', 'dina@gmail.com', 'dina'),
(26, 'karim', 'karim@gmail.com', 'karim'),
(27, 'wijdane', 'wijdane@gmail.com', 'wijdane'),
(28, 'rayane', 'rayane@gmail.com', 'rayane');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'piano'),
(2, 'guitare');

-- --------------------------------------------------------

--
-- Structure de la table `instruments`
--

CREATE TABLE `instruments` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instruments`
--

INSERT INTO `instruments` (`id`, `image`, `title`, `price`, `quantite`, `categorie_id`, `admin_id`, `description`) VALUES
(15, '0971113506-2-scaled.jpg', 'zineb', 1235, 3, 2, 9, 'tttttttttttttttttt'),
(19, 'OCL400-scaled.jpeg', 'TROP ', 1.5, 6789, 2, 25, 'jjjj'),
(22, 'V5SA-e1572540380276-scaled-removebg-preview.png', 'HIND HANSALI', 1278, 6, 2, 9, '7842'),
(23, 'guitare-classique-salvador-cortez-sonata-s-225x225-removebg-preview.png', 'guitare classique', 123, 4, 2, 9, 'guitare vvvvvvvvvvvvvvvvvvvv'),
(32, 'artworks-000102350147-gpdgne-t500x500.jpg', 'piano classique', 12, 12, 1, 9, 'lkshdvkjvs'),
(36, 'mus.png', 'musical', 1467, 7, 2, 25, 'GGGG'),
(37, 'guitare-classique-salvador-cortez-sonata-s-225x225-removebg-preview.png', 'guitarey', 1347, 3, 2, 27, 'ddddd'),
(38, '0144053553-1-scaled.jpg', 'guitare electrique', 1456, 3, 2, 28, 'HHHHHHHH');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `instruments`
--
ALTER TABLE `instruments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `instruments`
--
ALTER TABLE `instruments`
  ADD CONSTRAINT `instruments_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `instruments_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
