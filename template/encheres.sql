-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 14 nov. 2022 à 08:35
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `encheres`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Sinkevitch', 'Vladimir', 'Sinkevitch@test.com', '12345'),
(2, 'Souvorov', 'Mickael', 'Souvorov@test.com', '54321'),
(32, 'qw', 'qw', 'qw@qw.com', 'qw'),
(36, 'as', 'as', 'as@as.com', 'as'),
(37, 'qw', 'qw', 'qw@qw.com', 'as'),
(38, 'Sinkevitch', 'qw', 'qw@qw.com', 'qwe');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) DEFAULT NULL,
  `prenom` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`id`, `nom`, `prenom`) VALUES
(1, 'Sinkevitch', 'Vladimir'),
(2, 'Souvorov', 'Mickael');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `id` int(11) NOT NULL,
  `time_start` date DEFAULT NULL,
  `time_finish` date DEFAULT NULL,
  `voiture_id` int(11) DEFAULT NULL,
  `vendeur_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enchere` timestamp NULL DEFAULT NULL,
  `marque` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `modele` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `puissance` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `annee` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `prix_depart` varchar(11) DEFAULT NULL,
  `id_vendeur` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `date`, `enchere`, `marque`, `modele`, `puissance`, `image`, `annee`, `prix_depart`, `id_vendeur`, `id_users`) VALUES
(2, '2022-11-12 14:14:14', '2022-11-12 15:17:10', 'Seat ', 'Leon', '80', 'https://upload.wikimedia.org/wikipedia/commons/0/01/SEAT_Leon_Mk4_IMG_4099.jpg', '2020', '1500', 2, NULL),
(3, '2022-11-12 14:14:14', NULL, 'Ford ', 'Fiesta', '80', 'https://upload.wikimedia.org/wikipedia/commons/0/01/SEAT_Leon_Mk4_IMG_4099.jpg', '2020', '2300', 1, NULL),
(4, '2022-11-12 14:14:14', NULL, 'Seat ', 'Panda', '65', 'https://upload.wikimedia.org/wikipedia/commons/0/01/SEAT_Leon_Mk4_IMG_4099.jpg', '2020', '900', 2, NULL),
(5, '2022-11-12 14:14:14', NULL, 'Fiat ', 'Punto', '80', 'https://upload.wikimedia.org/wikipedia/commons/0/01/SEAT_Leon_Mk4_IMG_4099.jpg', '2018', '1500', 2, NULL),
(6, '2022-11-12 14:14:14', NULL, 'mercedes', 'Benz', '75', 'https://cdn.drivek.it/configurator-imgs/cars/fr/800/MERCEDES/C-CLASS/40330_SEDAN-4-DOORS/mercedes-benz-c-class-sedan-2021-front-side-1.jpg', '2022', '5000', 1, NULL),
(9, '2022-11-12 14:14:14', NULL, 'saab', '93', '90', 'https://sf2.autoplus.fr/wp-content/uploads/autoplus/2019/06/la-toute-derniere-saab-etre-mise-vente.jpg', '2020', '3000', 1, NULL),
(10, '2022-11-12 14:14:14', NULL, 'lada', 'vesta', '50', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSqFWRVjB8sNbR2q0-IdBkm5J7eNjXO7ype39ectIP&s', '2018', '1500', 1, NULL),
(11, '2022-11-12 14:14:14', NULL, 'Lamborgini', 'coucou', '120', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ94aTOhY9W9Ixdogr657b_np83UwFHDHsn-oVol2RS&s', '2015', '7000', 1, NULL),
(15, '2022-11-12 14:14:14', NULL, 'Volvo', 'xd90', '200', 'https://images.caradisiac.com/images/4/2/1/8/194218/S0-volvo-xc40-petit-restylage-et-nouvelle-gamme-703065.jpg', '2020', '15000', 2, NULL),
(28, '2022-11-12 14:14:14', NULL, 'Volvo', '12', '12', 'https://images.caradisiac.com/images/4/2/1/8/194218/S0-volvo-xc40-petit-restylage-et-nouvelle-gamme-703065.jpg', '2020', '1231', 1, NULL),
(29, '2022-11-12 15:18:20', '2023-03-21 23:00:00', 'Volvo', '12', '200', 'https://images.caradisiac.com/images/4/2/1/8/194218/S0-volvo-xc40-petit-restylage-et-nouvelle-gamme-703065.jpg', '2019', '123', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendeur_id` (`vendeur_id`),
  ADD KEY `voiture_id` (`voiture_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_vendeur` (`id_vendeur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_ibfk_1` FOREIGN KEY (`vendeur_id`) REFERENCES `voiture` (`id_vendeur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`voiture_id`) REFERENCES `voiture` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vente_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `voiture_ibfk_2` FOREIGN KEY (`id_vendeur`) REFERENCES `vendeur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
