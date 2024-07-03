-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 02 Juillet 2024 à 16:29
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `waza`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_enregistrement` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`client_id`, `noms`, `user_id`, `date_enregistrement`, `status`) VALUES
(1, 'LIONNEL', 1, '1679856564', 'nonactif'),
(2, 'ECOBANK', 1, '1679907788', 'nonactif'),
(3, 'WAZA IT', 1, '1680258538', 'actif'),
(4, 'RDC CLI', 1, '1680470773', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `evolution_mission`
--

CREATE TABLE `evolution_mission` (
  `evolution_mission_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_evolution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exportation`
--

CREATE TABLE `exportation` (
  `exportation_id` int(11) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `moyen_expedition_id` varchar(255) NOT NULL,
  `transporteur_id` varchar(255) NOT NULL,
  `fournisseur_id` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `position_tarifaire` varchar(255) NOT NULL,
  `cotation` varchar(255) NOT NULL,
  `fob` varchar(255) NOT NULL,
  `fret` varchar(255) NOT NULL,
  `num_bl_lta` varchar(255) NOT NULL,
  `port_destination_id` varchar(255) NOT NULL,
  `date_arrivee` varchar(255) NOT NULL,
  `numero_av` varchar(255) NOT NULL,
  `nombre_colis` varchar(255) NOT NULL,
  `nature_marchandise` varchar(255) NOT NULL,
  `poids_kg` varchar(255) NOT NULL,
  `lieu_livraison` varchar(255) NOT NULL,
  `date_livraison` varchar(255) NOT NULL,
  `statut` text NOT NULL,
  `observation` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date_enregistrement` varchar(255) NOT NULL,
  `statut_importaion` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `exportation`
--

INSERT INTO `exportation` (`exportation_id`, `client_id`, `moyen_expedition_id`, `transporteur_id`, `fournisseur_id`, `nif`, `position_tarifaire`, `cotation`, `fob`, `fret`, `num_bl_lta`, `port_destination_id`, `date_arrivee`, `numero_av`, `nombre_colis`, `nature_marchandise`, `poids_kg`, `lieu_livraison`, `date_livraison`, `statut`, `observation`, `user_id`, `date_enregistrement`, `statut_importaion`) VALUES
(1, '1', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1679858049', 'actif'),
(2, '3', '3', '1', '3', 'AOO123', 'D478', '55', '445D', 'D585878', 'D478', '2', '2023-03-26', 'D55', '5', 'LI', '14', 'KINSHASA', '2023-03-26', 'COOL', 'LION', '1', '1679858198', 'actif'),
(3, '3', '3', '4', '3', 'A080802', 'A098765B', '123', '15789', '17123', 'A098765B', '2', '2023-03-29', '312345', '5405', 'sac de sucres', '487', 'Lubumbashi', '2023-03-31', 'en cours de dechargement', 'NA', '1', '1679905737', 'actif'),
(4, '3', '3', '1', '3', 'A08089645455', 'A098765B', '123', '15789', '17123', 'A098765B', '2', '2023-03-29', '312345', '540', 'sac de sucres voir', '487', 'Lubumbashi', '2023-03-31', 'en cours de rien', 'Pas d&amp;#39;observatin', '1', '1679905737', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `fonctions`
--

CREATE TABLE `fonctions` (
  `fonction_id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_fonction` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `fournisseur_id` int(11) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_enregistrement` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`fournisseur_id`, `noms`, `user_id`, `date_enregistrement`, `status`) VALUES
(1, 'MILLENIUM', 1, '1679858110', 'nonactif'),
(2, 'WAZAIT', 1, '1679907852', 'nonactif'),
(3, 'MILLENIUM', 1, '1680258520', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `habilitation`
--

CREATE TABLE `habilitation` (
  `habilitation_id` int(11) NOT NULL,
  `menu_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `statut_habilitation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `importation`
--

CREATE TABLE `importation` (
  `importation_id` int(11) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `moyen_expedition_id` varchar(255) NOT NULL,
  `transporteur_id` varchar(255) NOT NULL,
  `fournisseur_id` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `position_tarifaire` varchar(255) NOT NULL,
  `cotation` varchar(255) NOT NULL,
  `fob` varchar(255) NOT NULL,
  `fret` varchar(255) NOT NULL,
  `num_bl_lta` varchar(255) NOT NULL,
  `port_destination_id` varchar(255) NOT NULL,
  `date_arrivee` varchar(255) NOT NULL,
  `numero_av` varchar(255) NOT NULL,
  `nombre_colis` varchar(255) NOT NULL,
  `nature_marchandise` varchar(255) NOT NULL,
  `poids_kg` varchar(255) NOT NULL,
  `lieu_livraison` varchar(255) NOT NULL,
  `date_livraison` varchar(255) NOT NULL,
  `statut` text NOT NULL,
  `observation` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date_enregistrement` varchar(255) NOT NULL,
  `statut_importaion` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `importation`
--

INSERT INTO `importation` (`importation_id`, `client_id`, `moyen_expedition_id`, `transporteur_id`, `fournisseur_id`, `nif`, `position_tarifaire`, `cotation`, `fob`, `fret`, `num_bl_lta`, `port_destination_id`, `date_arrivee`, `numero_av`, `nombre_colis`, `nature_marchandise`, `poids_kg`, `lieu_livraison`, `date_livraison`, `statut`, `observation`, `user_id`, `date_enregistrement`, `statut_importaion`) VALUES
(1, '1', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1679858049', 'actif'),
(2, '3', '3', '1', '3', 'AOO123', 'D478', '55', '445D', 'D585878', 'D478', '2', '2023-03-26', 'D55', '5', 'LI', '14', 'KINSHASA', '2023-03-26', 'COOL', 'LION', '1', '1679858198', 'actif'),
(3, '3', '3', '4', '3', 'A080802', 'A098765B', '123', '15789', '17123', 'A098765B', '2', '2023-03-29', '312345', '5405', 'sac de sucres', '487', 'Lubumbashi', '2023-03-31', 'en cours de dechargement', 'NA', '1', '1679905737', 'actif'),
(4, '3', '3', '1', '3', 'A08089645455', 'A098765B', '123', '15789', '17123', 'A098765B', '2', '2023-03-29', '312345', '540', 'sac de sucres voir', '487', 'Lubumbashi', '2023-03-31', 'en cours de rien', 'Pas d&amp;#39;observatin', '1', '1679905737', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `log_file`
--

CREATE TABLE `log_file` (
  `log_file_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `time_in` varchar(255) NOT NULL,
  `time_out` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_menu` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `mission_id` int(11) NOT NULL,
  `libelle` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date_debut` varchar(255) NOT NULL,
  `date_fin` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `moyen_expeditions`
--

CREATE TABLE `moyen_expeditions` (
  `moyen_expedition_id` int(11) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_enregistrement` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `moyen_expeditions`
--

INSERT INTO `moyen_expeditions` (`moyen_expedition_id`, `noms`, `user_id`, `date_enregistrement`, `status`) VALUES
(1, 'BATEAU', 1, '1679858137', 'nonactif'),
(2, 'AIR', 1, '1679906135', 'nonactif'),
(3, 'AVION', 1, '1680258489', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `nature_acteur`
--

CREATE TABLE `nature_acteur` (
  `nature_acteur_id` int(11) NOT NULL,
  `type_acteur` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_acteur` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `phases`
--

CREATE TABLE `phases` (
  `phase_id` int(11) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_phase` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ports`
--

CREATE TABLE `ports` (
  `port_id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_port` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `port_destinations`
--

CREATE TABLE `port_destinations` (
  `port_destination_id` int(11) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_enregistrement` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `port_destinations`
--

INSERT INTO `port_destinations` (`port_destination_id`, `noms`, `user_id`, `date_enregistrement`, `status`) VALUES
(1, 'LUBUMBASHI', 1, '1679858124', 'nonactif'),
(2, 'KINSHASA', 1, '1680258508', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE `sites` (
  `site_id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_sites` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transporteurs`
--

CREATE TABLE `transporteurs` (
  `transporteur_id` int(11) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_enregistrement` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'actif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `transporteurs`
--

INSERT INTO `transporteurs` (`transporteur_id`, `noms`, `user_id`, `date_enregistrement`, `status`) VALUES
(1, 'COMEXAS', 1, '1679856554', 'nonactif'),
(2, 'MAERSK', 1, '1679906058', 'nonactif'),
(3, 'BATEAU', 1, '1680258468', 'nonactif'),
(4, 'COMEXA', 1, '1680258498', 'actif'),
(5, 'MAERSK', 1, '1680547288', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'actif',
  `role_id` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `m` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `noms`, `email`, `telephone`, `password`, `status`, `role_id`, `matricule`, `m`) VALUES
(1, 'lionnel', 'lionnelnawej11@gmail.com', '0825366510', '12345', 'actif', 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `ville_id` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `date_creation` varchar(255) NOT NULL,
  `statut_ville` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Index pour la table `evolution_mission`
--
ALTER TABLE `evolution_mission`
  ADD PRIMARY KEY (`evolution_mission_id`);

--
-- Index pour la table `exportation`
--
ALTER TABLE `exportation`
  ADD PRIMARY KEY (`exportation_id`);

--
-- Index pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`fonction_id`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`fournisseur_id`);

--
-- Index pour la table `habilitation`
--
ALTER TABLE `habilitation`
  ADD PRIMARY KEY (`habilitation_id`);

--
-- Index pour la table `importation`
--
ALTER TABLE `importation`
  ADD PRIMARY KEY (`importation_id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Index pour la table `log_file`
--
ALTER TABLE `log_file`
  ADD PRIMARY KEY (`log_file_id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`mission_id`);

--
-- Index pour la table `moyen_expeditions`
--
ALTER TABLE `moyen_expeditions`
  ADD PRIMARY KEY (`moyen_expedition_id`);

--
-- Index pour la table `nature_acteur`
--
ALTER TABLE `nature_acteur`
  ADD PRIMARY KEY (`nature_acteur_id`);

--
-- Index pour la table `phases`
--
ALTER TABLE `phases`
  ADD PRIMARY KEY (`phase_id`);

--
-- Index pour la table `ports`
--
ALTER TABLE `ports`
  ADD PRIMARY KEY (`port_id`);

--
-- Index pour la table `port_destinations`
--
ALTER TABLE `port_destinations`
  ADD PRIMARY KEY (`port_destination_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`site_id`);

--
-- Index pour la table `transporteurs`
--
ALTER TABLE `transporteurs`
  ADD PRIMARY KEY (`transporteur_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`ville_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `evolution_mission`
--
ALTER TABLE `evolution_mission`
  MODIFY `evolution_mission_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `exportation`
--
ALTER TABLE `exportation`
  MODIFY `exportation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `fonction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `fournisseur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `habilitation`
--
ALTER TABLE `habilitation`
  MODIFY `habilitation_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `importation`
--
ALTER TABLE `importation`
  MODIFY `importation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `log_file`
--
ALTER TABLE `log_file`
  MODIFY `log_file_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `mission_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `moyen_expeditions`
--
ALTER TABLE `moyen_expeditions`
  MODIFY `moyen_expedition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `nature_acteur`
--
ALTER TABLE `nature_acteur`
  MODIFY `nature_acteur_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `phases`
--
ALTER TABLE `phases`
  MODIFY `phase_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ports`
--
ALTER TABLE `ports`
  MODIFY `port_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `port_destinations`
--
ALTER TABLE `port_destinations`
  MODIFY `port_destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `transporteurs`
--
ALTER TABLE `transporteurs`
  MODIFY `transporteur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `ville_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
