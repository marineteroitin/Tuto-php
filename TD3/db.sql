-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  sam. 21 déc. 2019 à 11:26
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `tutoPHP`
--

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

CREATE TABLE `passager` (
  `trajet_id` int(11) NOT NULL,
  `utilisateur_login` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`trajet_id`, `utilisateur_login`) VALUES
(1, 'lucadebeir'),
(1, 'mathildetribot'),
(4, 'marineteroitin'),
(5, 'lucadebeir'),
(5, 'marineteroitin'),
(6, 'lucadebeir');

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `id` int(11) NOT NULL,
  `depart` varchar(32) NOT NULL,
  `arrivee` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `nbplaces` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `conducteur_login` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`id`, `depart`, `arrivee`, `date`, `nbplaces`, `prix`, `conducteur_login`) VALUES
(1, 'Narbonne', 'Montpellier', '2019-10-31', 3, 8, 'marineteroitin'),
(4, 'Montpellier', 'Avignon', '2020-01-16', 3, 8, 'lucadebeir'),
(5, 'Montpellier', 'Agde', '2019-12-26', 2, 10, 'mathildetribot'),
(6, 'Montpellier', 'Lyon', '2019-12-30', 2, 15, 'matthewhass');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `nom`, `prenom`) VALUES
('lucadebeir', 'debeir', 'luca'),
('marineteroitin', 'teroitin', 'marine'),
('mathildetribot', 'tribot', 'mathilde'),
('matthewhass', 'haas', 'matthew');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `immatriculation` varchar(8) NOT NULL,
  `marque` varchar(25) NOT NULL,
  `couleur` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`immatriculation`, `marque`, `couleur`) VALUES
('HAOVSOET', 'Juke', 'rouge'),
('HGFDSQIT', 'ferrari', 'noire'),
('HGZPBSIG', 'Porsche', 'Jaune'),
('JLREHUFR', 'Renault', 'Bleu'),
('OHTRESJF', 'Meganne', 'blanche');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`trajet_id`,`utilisateur_login`),
  ADD KEY `trajet_id` (`trajet_id`),
  ADD KEY `utilisateur_login` (`utilisateur_login`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conducteur_login` (`conducteur_login`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`immatriculation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `passager`
--
ALTER TABLE `passager`
  ADD CONSTRAINT `cle_etrangere_idtrajet` FOREIGN KEY (`trajet_id`) REFERENCES `trajet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cle_etrangere_loginutilisateur` FOREIGN KEY (`utilisateur_login`) REFERENCES `utilisateur` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `cle_etrangere_conducteur` FOREIGN KEY (`conducteur_login`) REFERENCES `utilisateur` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;
