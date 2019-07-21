-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Janvier 2018 à 10:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `crm_v2`
--

-- --------------------------------------------------------

--
-- Structure de la table `crbls_clients`
--

CREATE TABLE IF NOT EXISTS `crbls_clients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `tel1` varchar(200) NOT NULL,
  `tel2` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1' COMMENT '1=residentiel et 2=entreprise',
  `etat_client` int(11) NOT NULL COMMENT '0=prospect et 1=cleint',
  `date_inscription` varchar(255) NOT NULL,
  `actif` int(11) NOT NULL DEFAULT '1',
  `supprime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Contenu de la table `crbls_clients`
--

INSERT INTO `crbls_clients` (`ID`, `nom`, `pays`, `ville`, `tel1`, `tel2`, `email`, `type`, `etat_client`, `date_inscription`, `actif`, `supprime`) VALUES
(45, 'coco', 'CAF', 'dfdf', '67777777', '', '90rujy+1hd9qkgt5nuuo@sharklasers.com', 1, 0, '2017-12-01 11:33:30', 1, 1),
(46, 'bibi', 'BDI', 'ertert', '122222222', '', '8ssdi2+ctjq120acn524@sharklasers.com', 1, 0, '2017-12-01 11:35:02', 1, 1),
(47, 'kirikou kmlfsdg,mkfdk,gnm', 'AGO', 'fgggf', '677777777', '', '8ssdi2+ctjq120acn524@sharklasers.com', 1, 0, '2017-12-01 11:57:05', 1, 0),
(48, 'sfggf', 'AGO', 'dfgd', 'dgdfg', 'dgdfg', 'dgdfg', 2, 1, '2017-12-18 16:19:15', 1, 0),
(49, 'nvnvbn', 'AGO', 'vbnvbn', '65555555', '', 'vbnvbn', 1, 0, '2017-12-26 12:09:15', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `crbls_entree`
--

CREATE TABLE IF NOT EXISTS `crbls_entree` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `equipement` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `depot` int(11) NOT NULL,
  `date_op` varchar(255) NOT NULL,
  `operator` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `crbls_entree`
--

INSERT INTO `crbls_entree` (`ID`, `equipement`, `qte`, `depot`, `date_op`, `operator`, `etat`, `num_serie`, `description`, `type`) VALUES
(1, 22, 25, 1, '2017-12-07 12:43:16', 1, 1, '14-ooo-5222', '', 't'),
(2, 23, 25, 1, '2017-12-07 12:44:05', 1, 1, '', '', 'a'),
(3, 23, 25, 1, '2017-12-07 13:51:05', 1, 1, '', '', 'a'),
(4, 24, 10, 1, '2017-12-07 14:13:45', 1, 1, '14-ooo-5222', '', 't'),
(5, 24, 10, 2, '2017-12-07 14:15:23', 1, 1, '', '', 'a'),
(6, 24, 10, 1, '2017-12-07 14:16:23', 1, 1, '', '', 'a');

-- --------------------------------------------------------

--
-- Structure de la table `crbls_entrepot`
--

CREATE TABLE IF NOT EXISTS `crbls_entrepot` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `who_add` int(11) NOT NULL,
  `date_register` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `crbls_entrepot`
--

INSERT INTO `crbls_entrepot` (`ID`, `nom`, `who_add`, `date_register`) VALUES
(1, 'Yaoundé', 0, ''),
(2, 'Douala', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `crbls_equipement`
--

CREATE TABLE IF NOT EXISTS `crbls_equipement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `serializable` int(11) NOT NULL COMMENT '1=a un numéro de série 2=n''a pas un numéro de série',
  `date_register` varchar(255) NOT NULL,
  `who_add` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `crbls_equipement`
--

INSERT INTO `crbls_equipement` (`ID`, `libelle`, `description`, `type`, `serializable`, `date_register`, `who_add`) VALUES
(22, 'Routeur MIKROTIK', '', 'Routeur', 1, '2017-12-07 10:39:50', 1),
(23, 'Routeur TPLINK', '', 'Routeur', 1, '2017-12-07 10:40:13', 1),
(24, 'Modem HT2000', '', 'Modem', 1, '2017-12-07 10:40:40', 1),
(28, 'ANTENNE ', '', 'ANTENNE', 2, '2017-12-28 12:20:08', 1),
(29, 'CABLE IFL ', '', 'CABLE IFL', 2, '2017-12-28 12:22:18', 1),
(30, 'Décodeur OPEN TV', '', 'Décodeur', 1, '2018-01-08 09:31:36', 1),
(31, 'ILNB ', '', 'ILNB', 1, '2018-01-08 09:41:45', 1),
(32, 'PARABOLE ', '', 'PARABOLE', 2, '2018-01-08 09:42:11', 1),
(33, 'SUPPORT ', '', 'SUPPORT', 2, '2018-01-08 09:43:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `crbls_forfait`
--

CREATE TABLE IF NOT EXISTS `crbls_forfait` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `Prix_vente` int(11) NOT NULL,
  `technologie` varchar(255) NOT NULL,
  `date_register` int(11) NOT NULL,
  `who_add` int(11) NOT NULL,
  `dispo` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `crbls_mvt`
--

CREATE TABLE IF NOT EXISTS `crbls_mvt` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL COMMENT 'e=entree s=sortie',
  `operation` varchar(10) NOT NULL COMMENT 'a=approvisiont t=transfert v=vente',
  `equipment` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `entrepot` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_mvt` varchar(255) NOT NULL,
  `operator` int(11) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `etat_mvt` int(11) NOT NULL COMMENT '0=encours 1=achevé',
  `dispo` int(11) NOT NULL COMMENT '1=dispo 0=non dispo',
  `valider` int(11) NOT NULL,
  `valider_par` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

--
-- Contenu de la table `crbls_mvt`
--

INSERT INTO `crbls_mvt` (`ID`, `type`, `operation`, `equipment`, `qte`, `entrepot`, `description`, `date_mvt`, `operator`, `num_serie`, `etat_mvt`, `dispo`, `valider`, `valider_par`) VALUES
(157, 'e', 'a', 22, 1, 1, '', '2018-01-08 13:02:16', 1, 'k-500', 0, 0, 0, 0),
(158, 's', 't', 22, 1, 1, '', '2018-01-08 13:02:42', 1, 'k-500', 0, 0, 1, 1),
(159, 'e', 't', 22, 1, 2, '', '2018-01-08 13:02:42', 1, 'k-500', 0, 1, 1, 1),
(160, 'e', 'a', 32, 10, 1, '', '2018-01-08 13:03:14', 1, '32', 0, 1, 1, 0),
(161, 's', 't', 32, 5, 1, '', '2018-01-08 13:03:37', 1, '32', 0, 0, 1, 1),
(162, 'e', 't', 32, 5, 2, '', '2018-01-08 13:03:37', 1, '32', 0, 1, 1, 1),
(163, 'e', 'a', 32, 10, 1, '', '2018-01-08 13:04:14', 1, '32', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `crbls_pays`
--

CREATE TABLE IF NOT EXISTS `crbls_pays` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(3) NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alpha2` (`alpha2`),
  UNIQUE KEY `alpha3` (`alpha3`),
  UNIQUE KEY `code_unique` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=242 ;

--
-- Contenu de la table `crbls_pays`
--

INSERT INTO `crbls_pays` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom_fr_fr`) VALUES
(7, 24, 'AO', 'AGO', 'Angola', 'Angola'),
(23, 72, 'BW', 'BWA', 'Botswana', 'Botswana'),
(33, 108, 'BI', 'BDI', 'Burundi', 'Burundi'),
(36, 120, 'CM', 'CMR', 'Cameroon', 'Cameroun'),
(38, 132, 'CV', 'CPV', 'Cape Verde', 'Cap-vert'),
(40, 140, 'CF', 'CAF', 'Central African', 'République Centrafricaine'),
(42, 148, 'TD', 'TCD', 'Chad', 'Tchad'),
(49, 174, 'KM', 'COM', 'Comoros', 'Comores'),
(51, 178, 'CG', 'COG', 'Republic of the Congo', 'République du Congo'),
(52, 180, 'CD', 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo'),
(59, 204, 'BJ', 'BEN', 'Benin', 'Bénin'),
(65, 226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale'),
(66, 231, 'ET', 'ETH', 'Ethiopia', 'Éthiopie'),
(67, 232, 'ER', 'ERI', 'Eritrea', 'Érythrée'),
(79, 262, 'DJ', 'DJI', 'Djibouti', 'Djibouti'),
(80, 266, 'GA', 'GAB', 'Gabon', 'Gabon'),
(82, 270, 'GM', 'GMB', 'Gambia', 'Gambie'),
(85, 288, 'GH', 'GHA', 'Ghana', 'Ghana'),
(94, 324, 'GN', 'GIN', 'Guinea', 'Guinée'),
(110, 384, 'CI', 'CIV', 'Côte d''Ivoire', 'Côte d''Ivoire'),
(115, 404, 'KE', 'KEN', 'Kenya', 'Kenya'),
(122, 426, 'LS', 'LSO', 'Lesotho', 'Lesotho'),
(124, 430, 'LR', 'LBR', 'Liberia', 'Libéria'),
(130, 450, 'MG', 'MDG', 'Madagascar', 'Madagascar'),
(134, 466, 'ML', 'MLI', 'Mali', 'Mali'),
(145, 508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique'),
(147, 516, 'NA', 'NAM', 'Namibia', 'Namibie'),
(157, 562, 'NE', 'NER', 'Niger', 'Niger'),
(158, 566, 'NG', 'NGA', 'Nigeria', 'Nigéria'),
(176, 624, 'GW', 'GNB', 'Guinea-Bissau', 'Guinée-Bissau'),
(183, 646, 'RW', 'RWA', 'Rwanda', 'Rwanda'),
(191, 678, 'ST', 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(193, 686, 'SN', 'SEN', 'Senegal', 'Sénégal'),
(194, 690, 'SC', 'SYC', 'Seychelles', 'Seychelles'),
(195, 694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone'),
(200, 706, 'SO', 'SOM', 'Somalia', 'Somalie'),
(201, 710, 'ZA', 'ZAF', 'South Africa', 'Afrique du Sud'),
(202, 716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe'),
(205, 736, 'SD', 'SDN', 'Sudan', 'Soudan'),
(214, 768, 'TG', 'TGO', 'Togo', 'Togo'),
(224, 800, 'UG', 'UGA', 'Uganda', 'Ouganda'),
(230, 834, 'TZ', 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie'),
(233, 854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso'),
(241, 894, 'ZM', 'ZMB', 'Zambia', 'Zambie');

-- --------------------------------------------------------

--
-- Structure de la table `crbls_sortie`
--

CREATE TABLE IF NOT EXISTS `crbls_sortie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `equipement` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `depot` int(11) NOT NULL,
  `date_op` varchar(255) NOT NULL,
  `operator` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `crbls_sortie`
--

INSERT INTO `crbls_sortie` (`ID`, `equipement`, `qte`, `depot`, `date_op`, `operator`, `etat`, `num_serie`, `description`, `type`) VALUES
(1, 22, 25, 2, '2017-12-07 12:43:16', 1, 1, '14-ooo-5222', '', 't'),
(2, 24, 10, 2, '2017-12-07 14:13:45', 1, 1, '14-ooo-5222', '', 't');

-- --------------------------------------------------------

--
-- Structure de la table `crbls_type`
--

CREATE TABLE IF NOT EXISTS `crbls_type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_register` varchar(255) NOT NULL,
  `who_add` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `crbls_type`
--

INSERT INTO `crbls_type` (`ID`, `libelle`, `description`, `date_register`, `who_add`) VALUES
(3, 'Modem', '', '2017-12-06 11:59:05', 1),
(4, 'Routeur', '', '2017-12-06 11:59:15', 1),
(5, 'CABLE IFL', '', '2017-12-06 12:07:43', 1),
(6, 'ANTENNE', '', '2017-12-06 12:08:00', 1),
(7, 'ILNB', '', '2017-12-06 12:10:08', 1),
(8, 'PARABOLE', '', '2017-12-06 13:13:47', 1),
(9, 'Décodeur', '', '2018-01-08 09:30:43', 1),
(10, 'SUPPORT', '', '2018-01-08 09:42:55', 1);

-- --------------------------------------------------------

--
-- Structure de la table `crbls_user`
--

CREATE TABLE IF NOT EXISTS `crbls_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pass` varchar(50) NOT NULL,
  `privilege` int(11) NOT NULL COMMENT '1=super admin 2=admin  3=autre user',
  `supprime` int(11) NOT NULL DEFAULT '0',
  `actif` int(11) NOT NULL DEFAULT '1',
  `add_by` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `crbls_user`
--

INSERT INTO `crbls_user` (`ID`, `nom`, `email`, `date_inscription`, `pass`, `privilege`, `supprime`, `actif`, `add_by`) VALUES
(1, 'super admin', 'admin@admin.com', '2017-11-24 11:15:35', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 0, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
