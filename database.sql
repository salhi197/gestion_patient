-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 jan. 2021 à 14:22
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tebibe`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `payment_mode` varchar(10) NOT NULL,
  `payment_status` varchar(10) NOT NULL,
  `invoice_title` varchar(100) NOT NULL,
  `invoice_amount` varchar(100) NOT NULL,
  `invoice_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(1);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `add` varchar(50) NOT NULL,
  `height` varchar(5) NOT NULL,
  `weight` int(11) NOT NULL,
  `b_group` varchar(10) NOT NULL,
  `b_pressure` int(11) NOT NULL,
  `pulse` int(11) NOT NULL,
  `respiration` int(11) NOT NULL,
  `allergy` varchar(50) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `civilite` text DEFAULT NULL,
  `prenom` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`patient_id`, `p_name`, `age`, `gender`, `phone`, `add`, `height`, `weight`, `b_group`, `b_pressure`, `pulse`, `respiration`, `allergy`, `diet`, `civilite`, `prenom`) VALUES
(1, 'ALI', 24, 1, '0551515151', 'cem mohamed lamine lamoudi belfort el-harrach', '180', 90, 'A+', 23, 23, 23, '23', '23', 'Mr', NULL),
(2, 'KARIM MOKRANI', 27, 1, '0794498725', 'cem mohamed lamine lamoudi belfort el-harrach', '170', 90, 'O+', 23, 23, 23, '23', '23', 'Mr', NULL),
(4, 'salhi', 23, 1, '0659439670', 'cem mohamed lamine lamoudi', '180', 80, 'AB+', 23, 23, 23, '23', '23', 'mr', 'haider ali');

-- --------------------------------------------------------

--
-- Structure de la table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `m_note` varchar(100) NOT NULL,
  `test` varchar(100) NOT NULL,
  `t_note` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `m_nombre` varchar(100) NOT NULL,
  `date_ordonnance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `patient_id`, `symptoms`, `diagnosis`, `medicine`, `m_note`, `test`, `t_note`, `date`, `m_nombre`, `date_ordonnance`) VALUES
(2, 1, NULL, 'test', '[\"test\",\"gh\"]', '[\"test\",\"gh\"]', '[\"sasasa\"]', '[\"sasas\"]', '2021-01-21', '[\"test\",\"gh\"]', NULL),
(3, 4, NULL, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the', '[\"erere\",\"ssasas\",\"s\",\"edvfv\"]', '[\"erer\",\"sasa\",\"s\",\"sfvfdbx\"]', '[\"sa\"]', '[\"sa\"]', '2021-01-21', '[\"errer\",\"sasa\",\"s\",\"dfbxdbcv\"]', NULL),
(4, 2, NULL, 'test', '[\"test\"]', '[\"test\"]', '[\"test\"]', '[\"test\"]', '2021-01-21', '[\"test\"]', '2021-01-29'),
(5, 1, NULL, 'ddddddddddddd', '[\"sasa\",\"zerere\"]', '[\"sas\",\"zr\"]', '', '', '2021-01-21', '[\"asa\",\"ez\"]', '2021-01-27');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `specialite` text DEFAULT NULL,
  `fax` text DEFAULT NULL,
  `footer_1` text DEFAULT NULL,
  `footer_2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `doctor_name`, `email`, `mobile`, `password`, `logo`, `favicon`, `title`, `specialite`, `fax`, `footer_1`, `footer_2`) VALUES
(1, 'mohamed', 'mohamed', 'mohamed@gmail.com', '0794498727', 'bW9oYW1lZA==', 'new_logo.png', 'new_logo1.png', 'Gestion des Patients', 'médecin spécialiste ophtalmologie', '021456534', 'footer1', 'footer2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Index pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Index pour la table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
