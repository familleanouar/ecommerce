-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Mai 2016 à 12:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ensa-fashion`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoires`
--

CREATE TABLE IF NOT EXISTS `accessoires` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `prix` int(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `Qte` int(100) NOT NULL,
  `taux_remise` int(100) NOT NULL,
  `taux_TVA` int(100) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `taille` int(11) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `chemin` varchar(100) NOT NULL,
  `chem` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `accessoires`
--

INSERT INTO `accessoires` (`ID`, `prix`, `description`, `Qte`, `taux_remise`, `taux_TVA`, `couleur`, `taille`, `sexe`, `Nom`, `Type`, `chemin`, `chem`) VALUES
(1, 259, 'Sac à dos en tissu ef', 42, 0, 5, 'Bleu', 38, 'Femme', 'Sac à dos', 'Sacs', 'images/sacs/sac1.png', 'images/sacs/s1.png'),
(2, 189, 'Sac métallique détail pierres', 65, 0, 5, 'Gris', 36, 'Femme', 'Sac métallique', 'Sacs', 'images/sacs/sac2.png', 'images/sacs/s2.png'),
(3, 199, 'Sac shopper avec fermeture éclair', 50, 0, 5, 'Marron', 38, 'Femme', 'Sac shopper', 'Sacs', 'images/sacs/sac3.png', 'images/sacs/s3.png'),
(4, 219, 'Sac bourse uni', 56, 0, 5, 'Blanc', 36, 'Femme', 'Sac bourse', 'Sacs', 'images/sacs/sac4.png', 'images/sacs/s4.png'),
(5, 249, 'Mini sac avec chaine\r\n', 54, 10, 5, 'Rose', 38, 'Femme', 'Mini sac', 'Sacs', 'images/sacs/sac5.png', 'images/sacs/s5.png'),
(6, 149, 'Montre en metal imprim&eacute; ethnique', 46, 10, 5, 'Dor&eacute;', 36, 'Femme', 'Montre metalique', 'Montres', 'images/montres-f/montre1.png', 'images/montres-f/m1.png'),
(7, 169, 'Montre bracelet jean interchangeable', 20, 0, 5, 'Blanc et bleu', 36, 'Femme', 'Montre ', 'Montres', 'images/montres-f/montre2.png', 'images/montres-f/m2.png'),
(8, 159, 'Montre bracelet mesh', 54, 0, 5, 'Argenté', 36, 'Femme', 'Montre', 'Montres', 'images/montres-f/montre3.png', 'images/montres-f/m3.png'),
(9, 129, 'Collier color&eacute;', 56, 10, 5, 'Color&eacute;', 36, 'Femme', 'Collier', 'Bijoux', 'images/bijoux/bijou1.png', 'images/bijoux/b1.png'),
(10, 89, 'Collier petit attrape-reves', 20, 0, 5, 'Dor&eacute;', 36, 'Femme', 'Collier', 'Bijoux', 'images/bijoux/bijou2.png', 'images/bijoux/b2.png'),
(11, 59, 'Pack bagues pierres colorées amulettes', 10, 0, 5, 'Dor&eacute;', 36, 'Femme', 'Pack bagues', 'Bijoux', 'images/bijoux/bijou5.png', 'images/bijoux/b5.png'),
(12, 39, 'Boucles d ''oreilles bohèmes pierre', 15, 0, 5, 'Argenté', 36, 'Femme', 'Boucles', 'Bijoux', 'images/bijoux/bijou6.png', 'images/bijoux/bijou6.png');

-- --------------------------------------------------------

--
-- Structure de la table `chaussures`
--

CREATE TABLE IF NOT EXISTS `chaussures` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `prix` int(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `Qte` int(100) NOT NULL,
  `taux_remise` int(100) NOT NULL,
  `taux_TVA` int(100) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `couleur` varchar(100) NOT NULL,
  `taille` int(100) NOT NULL,
  `chemin` varchar(50) NOT NULL,
  `chem` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `chaussures`
--

INSERT INTO `chaussures` (`ID`, `prix`, `description`, `Qte`, `taux_remise`, `taux_TVA`, `Nom`, `Type`, `sexe`, `couleur`, `taille`, `chemin`, `chem`) VALUES
(1, 259, 'Talons aiguilless', 50, 10, 5, 'Talons aiguilless', 'Chaussures-talons', 'Femme', 'Rouge', 38, 'images/chaussures-talons/talon1.png', 'images/chaussures-talons/t1.png'),
(2, 259, 'Chaussures &agrave; talons', 36, 10, 5, 'Chaussures', 'Chaussures-talons', 'Femme', 'Rose clair', 37, 'images/chaussures-talons/talon2.png', 'images/chaussures-talons/t2.png'),
(3, 250, 'Chaussures &agrave; talons', 66, 10, 5, 'Chaussures', 'Chaussures-talons', 'Femme', 'Jaune', 36, 'images/chaussures-talons/talon3.png', 'images/chaussures-talons/t3.png'),
(4, 300, 'Sandales &agrave; talons avec cordon', 50, 10, 5, 'Sandales', 'Chaussures-talons', 'Femme', 'Bleu foncé', 38, 'images/chaussures-talons/talon4.png', 'images/chaussures-talons/t4.png'),
(5, 279, 'Sandales à talons avec cordon', 60, 20, 5, 'Sandales', 'Chaussures-talons', 'Femme', 'Marron', 36, 'images/chaussures-talons/talon5.png', 'images/chaussures-talons/t5.png'),
(6, 319, 'Sandales &agrave; talons plateforme bride cheville', 69, 10, 5, 'Sandales talons', 'Chaussures-talons', 'Femme', 'Bleu', 37, 'images/chaussures-talons/talon6.png', 'images/chaussures-talons/t6.png'),
(7, 299, 'Chaussures &agrave; talons &agrave; moiti&eacute; lac&eacute;es', 56, 15, 5, 'Chaussures', 'Chaussures-talons', 'Femme', 'Rouge', 37, 'images/chaussures-talons/talon7.png', 'images/chaussures-talons/t7.png'),
(8, 249, 'Sandales plates lanières et lacets', 50, 15, 5, 'Sandales plates', 'Sandales-plates', 'Femme', 'Rouge', 36, 'images/chaussures-plats/plat1.png', 'images/chaussures-plats/p1.png'),
(9, 199, 'Sandales plates nœud', 36, 10, 5, 'Sandales plates', 'Sandales-plates', 'Femme', 'Ajoré', 38, 'images/chaussures-plats/plat2.png', 'images/chaussures-plats/p2.png'),
(10, 169, 'Sandales plates basiques métallisées', 22, 0, 5, 'Sandales basiques', 'Sandales-plates', 'Femme', 'Gris', 37, 'images/chaussures-plats/plat3.png', 'images/chaussures-plats/p1.pn3'),
(11, 219, 'Spartiates montantes', 10, 30, 5, 'Spartiates', 'Sandales-plates', 'Femme', 'Noir', 38, 'images/chaussures-plats/plat4.png', 'images/chaussures-plats/p4.png'),
(12, 269, 'Bottines à talons avec fermeture éclair ef', 69, 0, 5, 'Bottines', 'Bottes', 'Femme', 'Beige', 37, 'images/bottes-f/botte1.png', 'images/bottes-f/b1.png'),
(13, 259, 'Bottines à talon boucle ef', 45, 0, 5, 'Bottines', 'Bottes', 'Femme', 'Marron', 38, 'images/bottes-f/botte2.png', 'images/bottes-f/b2.png'),
(14, 249, 'Bottines à talons ef', 69, 0, 5, 'Bottines ef', 'Bottes', 'Femme', 'Noir', 36, 'images/bottes-f/botte3.png', 'images/bottes-f/b3.png'),
(15, 229, 'Bottines à talon détail clous', 65, 0, 5, 'Bottines', 'Bottes', 'Femme', 'Noir', 36, 'images/bottes-f/botte4.png', 'images/bottes-f/b2.pn4'),
(16, 0, '', 0, 0, 0, '', '', '', '', 0, 'C:\\wamp\\www\\e-commerce\\images\\baskets-h', 'C:\\wamp\\www\\e-commerce\\images\\baskets-h'),
(17, 0, '', 0, 0, 0, '', '', '', '', 0, 'C:\\wamp\\www\\e-commerce\\images\\baskets-h', 'C:\\wamp\\www\\e-commerce\\images\\baskets-h'),
(18, 300, 'Baskets techniques unies Homme', 10, 10, 10, 'Basket', 'Baskets', 'Homme', 'Noir', 40, 'images\\baskets-h\\basket1.png', 'images\\baskets-h\\b1.png'),
(19, 400, 'Tenniss perfor&eacute;es Homme', 10, 10, 10, 'Basket', 'Baskets', 'Homme', 'Blanche', 46, 'images\\baskets-h\\basket2.png', 'images\\baskets-h\\b2.png'),
(20, 500, 'Tennis bi-mati&eacute;re tissu Hommes', 10, 10, 10, 'Basket', 'Baskets', 'Homme', 'Bleu', 48, 'images\\baskets-h\\basket3.png', 'images\\baskets-h\\b3.png'),
(21, 400, 'Baskets techniques bi-mati&eacute;re Hommes', 10, 10, 10, 'Basket', 'Baskets', 'Homme', 'Noir', 50, 'images\\baskets-h\\basket3.png', 'images\\baskets-h\\b3.png'),
(22, 0, '', 0, 0, 0, '', '', '', '', 0, '', ''),
(23, 600, 'Tennis basiques tissu Homme', 10, 10, 10, 'Basket', 'Baskets', 'Homme', 'Orange', 44, 'images\\baskets-h\\basket5.png', 'images\\baskets-h\\b5.png');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idarticle` int(11) DEFAULT NULL,
  `prix_total` int(100) NOT NULL,
  `datee` date NOT NULL,
  `etat` varchar(100) NOT NULL DEFAULT 'à réviser ',
  `qte` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID-user` (`iduser`),
  KEY `idart` (`idarticle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`ID`, `iduser`, `idarticle`, `prix_total`, `datee`, `etat`, `qte`) VALUES
(8, 12, 1, 249, '2016-05-20', 'pending', 1),
(9, 12, 1, 249, '2016-05-20', 'pending', 1),
(10, 12, 11, 945, '2016-05-20', 'pending', 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `repeatmdp` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `civilite` varchar(10) NOT NULL,
  `datee` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `code` int(10) NOT NULL,
  `ville` varchar(10) NOT NULL,
  `tel` int(10) NOT NULL,
  `idgroup` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `nom`, `cin`, `mdp`, `repeatmdp`, `mail`, `civilite`, `datee`, `adresse`, `code`, `ville`, `tel`, `idgroup`) VALUES
(1, 'nom', 'cin', 'f1e2ee4ae7768160775475d1a21a6fdb', 'f1e2ee4ae7768160775475d1a21a6fdb', 'email', 'id_gender', '0000-00-00', 'adress', 0, 'ville', 0, 0),
(2, 'alami', 'lll444', '7c8bf136115aa778d15a3585ee0e2940', '7c8bf136115aa778d15a3585ee0e2940', 'nouha', 'Mademoisel', '2016-05-13', 'quartier', 5454, 'tetouan', 0, 0),
(3, 'alam', 'lll33', '30e07fb5e3e1c9f9adb88c9b735a6827', '30e07fb5e3e1c9f9adb88c9b735a6827', 'nouha-taleb@hotmail.com', 'Mademoisel', '2016-05-05', 'lddl', 44, 'll', 54226, 0),
(4, 'alami', 'll3333', '30e07fb5e3e1c9f9adb88c9b735a6827', '30e07fb5e3e1c9f9adb88c9b735a6827', 'nouha-taleb@hotmail', 'Mademoisel', '2016-05-07', 'dkdkdk', 7777, 'tt', 222, 0),
(5, 'nsk', 'll', '30e07fb5e3e1c9f9adb88c9b735a6827', '30e07fb5e3e1c9f9adb88c9b735a6827', 'nouha-taleb@hotmail.com', 'Mademoisel', '2016-05-22', 'ss', 333, 'DFF', 666, 0),
(6, 'anouar', 'ldld', '00703c533952083c79ec80864b939599', '00703c533952083c79ec80864b939599', 'anouar', 'Monsieur', '2016-04-27', 'zss', 333, 'DD', 66, 0),
(11, 'Yousra El Hamdi', 'L455242', '4a158576ff6319c86298de8203a7d159', '4a158576ff6319c86298de8203a7d159', 'yousrael42@gmail.com', 'Mademoisel', '1994-10-13', 'Rue dijla tÃ©touan', 39000, 'TÃ©touan', 623955260, 0),
(12, 'nouha alami', '44FF', '944ffd50ea92e3f2af4beddecf7646ab', '944ffd50ea92e3f2af4beddecf7646ab', 'nouhaalami6@gmail.com', 'Mademoisel', '2016-05-14', 'FFF', 333, 'ss', 11, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vetements`
--

CREATE TABLE IF NOT EXISTS `vetements` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `prix` int(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `Qte` int(100) NOT NULL,
  `taux_remise` int(100) NOT NULL,
  `taux_TVA` int(100) NOT NULL,
  `disponiblite` varchar(100) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `couleur` varchar(100) NOT NULL,
  `taille` int(100) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `chemin` varchar(100) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `chem` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Contenu de la table `vetements`
--

INSERT INTO `vetements` (`ID`, `prix`, `description`, `Qte`, `taux_remise`, `taux_TVA`, `disponiblite`, `sexe`, `couleur`, `taille`, `Type`, `chemin`, `Nom`, `chem`) VALUES
(1, 249, 'Robe en maille ajustée', 30, 0, 10, '1', 'Femme', 'Noir et blanc', 36, 'Robes', 'images/robes/robe6.PNG', 'Robe en maille', 'images/robes/r6.PNG'),
(2, 179, 'Robe sleepwear', 65, 10, 5, '1', 'Femme', 'Rouge et blanc', 38, 'Robes', 'images/robes/robe7.PNG', 'Robe sleepwear', 'images/robes/r7.PNG'),
(3, 179, 'Robe ajustée avec jupe asymétrique', 50, 0, 5, '1', 'Femme', 'Gris', 36, 'Robes', 'images/robes/robe9.PNG', 'Robe ajustée', 'images/robes/r9.PNG'),
(4, 169, 'Robe rayures manches courtes ef', 69, 0, 5, '1', 'Femme', 'Noir et blanc', 36, 'Robes', 'images/robes/robe15.PNG', 'Robe manches', 'images/robes/r15.PNG'),
(5, 199, 'Robe style lingerie', 40, 0, 5, '1', 'Femme', 'blanc', 38, 'Robes', 'images/robes/robe8.PNG', 'Robe style lingerie', 'images/robes/r8.PNG'),
(6, 199, 'Robe décolleté croisé et jupe évasée', 55, 30, 5, '1', 'Femme', 'Rouge', 37, 'Robes', 'images/robes/robe10.PNG', 'Robe décolletée', 'images/robes/r10.PNG'),
(7, 149, 'Robe décolletée croisée et jupe évasée', 20, 10, 5, '1', 'Femme', 'Bleu et blanc', 36, 'Robes', 'images/robes/robe11.PNG', 'Robe décolletée', 'images/robes/r11.PNG'),
(8, 229, 'Robe courte col bateau et volants manches', 37, 0, 5, '1', 'Femme', 'Gris', 36, 'Robes', 'images/robes/robe12.PNG', 'Robe courte col ', 'images/robes/r12.PNG'),
(9, 249, 'Robe avec jupe', 65, 0, 5, '1', 'Femme', 'Noir', 38, 'Robes', 'images/robes/robe14.PNG', 'Robe jupe évasé', 'images/robes/r14.PNG'),
(10, 179, 'Robe manches courtes et poche', 19, 0, 5, '1', 'Femme', 'Bleu foncé', 38, 'Robes', 'images/robes/robe13.PNG', 'Robe manches', 'images/robes/r13.PNG'),
(11, 189, 'Jean super skinny regular waist', 18, 10, 5, '1', 'Femme', 'Bleu clair', 36, 'Jeans', 'images/jeans-f/jeans1.png', 'Jean super skinny', 'images/jeans-f/j.png'),
(13, 159, 'Jean boyfriend slim', 58, 20, 5, '1', 'Femme', 'Blanc', 36, 'Jeans', 'images/jeans-f/jeans2.png', 'Jean slim', 'images/jeans-f/j2.png'),
(14, 179, 'Jean ef skinny comfort low waist', 78, 0, 10, '1', 'Femme', 'Bleu clair', 38, 'Jeans', 'images/jeans-f/jeans3.png', 'Jean skinny', 'images/jeans-f/j3.png'),
(15, 129, 'Jean super stretch high waist comfort', 15, 30, 10, '1', 'Femme', 'Bleu foncé', 36, 'Jeans', 'images/jeans-f/jeans4.png', 'Jean slim', 'images/jeans-f/j4.png'),
(16, 239, 'Jean super skinny élastique regular waist', 48, 0, 10, '1', 'Femme', 'Bleu clair', 34, 'Jeans', 'images/jeans-f/jeans5.png', 'Jean élastique', 'images/jeans-f/j5.png'),
(17, 139, 'T-shirt ef imprimé rayures', 49, 0, 10, '1', 'Femme', 'Bleu clair', 36, 'Chemises', 'images/chemises/chemise1.png', 'T-shirt imprimé', 'images/chemises/ch1.png'),
(18, 159, 'Blouse avec entre-deux et broderies', 78, 0, 10, '1', 'Femme', 'Blanc', 38, 'Chemises', 'images/chemises/chemise2.png', 'Blouse', 'images/chemises/ch2.png'),
(19, 129, 'Chemise manches larges', 20, 20, 5, '1', 'Femme', 'Blanc', 34, 'Chemises', 'images/chemises/chemise3.png', 'Chemise blacnhe', 'images/chemises/ch3.png'),
(20, 119, 'Blouse imprimée avec volants et dentelle', 25, 10, 10, '1', 'Femme', 'Blanc', 36, 'Chemises', 'images/chemises/chemise4.png', 'Blouse imprimée', 'images/chemises/ch4.png'),
(21, 349, 'Bomber ef patchs', 60, 0, 5, '1', 'Femme', 'Vert militaire', 36, 'Vestes', 'images/vestes-f/veste1.png', 'Bomber ef', 'images/vestes-f/v1.png'),
(22, 299, 'Blouson saharienne', 55, 0, 5, '1', 'Femme', 'Vert militaire', 38, 'Vestes', 'images/vestes-f/veste2.png', 'Blouson', 'images/vestes-f/v2.png'),
(23, 249, 'Blouson basique avec pointes', 49, 0, 5, '1', 'Femme', 'Marron', 36, 'Vestes', 'images/vestes-f/veste3.png', 'Blouson basique', 'images/vestes-f/v3.png'),
(24, 239, 'Blouson bomber type alfa', 48, 0, 5, '1', 'Femme', 'Vert militaire', 38, 'Vestes', 'images/vestes-f/veste4.png', 'Blouson', 'images/vestes-f/v4.png'),
(25, 229, 'Veste type bomber micro ottoman', 29, 10, 5, '1', 'Femme', 'Blanc', 36, 'Vestes', 'images/vestes-f/veste5.png', 'Veste bomber', 'images/vestes-f/v5.png'),
(26, 259, 'Blouson bomber imprimé fleuri', 35, 0, 5, '1', 'Femme', 'Blanc', 36, 'Vestes', 'images/vestes-f/veste6.png', 'Blouson fleuri', 'images/vestes-f/v6.png'),
(27, 239, 'Blouson court détail poches ef', 86, 0, 5, '1', 'Femme', 'Grenat', 36, 'Vestes', 'images/vestes-f/veste7.png', 'Blouson', 'images/vestes-f/v7.png'),
(28, 229, 'Bomber satin brodé', 89, 0, 5, '1', 'Femme', 'Bleu foncé', 38, 'Vestes', 'images/vestes-f/veste8.png', 'Bomber', 'images/vestes-f/v8.png'),
(29, 119, 'Pull ef col rond torsades', 56, 0, 5, '1', 'Femme', 'Gris', 36, 'Tricot', 'images/tricot-f/tricot7.png', 'Pull ef', 'images/tricot-f/t7.png'),
(30, 159, 'Pull asymétrique en pointe', 58, 0, 5, '1', 'Femme', 'Noir', 38, 'Tricot', 'images/tricot-f/tricot6.png', 'Pull', 'images/tricot-f/t6.png'),
(31, 109, 'Pull en maille plus court devant', 58, 20, 5, '1', 'Femme', 'Marron', 36, 'Tricot', 'images/tricot-f/tricot5.png', 'Pull en maille', 'images/tricot-f/t5.png'),
(32, 155, 'Pull ef ajouré devant', 32, 10, 5, '1', 'Femme', 'Gris', 36, 'Tricot', 'images/tricot-f/tricot4.png', 'Pull ajour&eacute', 'images/tricot-f/t4.png'),
(33, 139, 'Pull ef en maille', 32, 0, 5, '1', 'Femme', 'Blanc', 36, 'Tricot', 'images/tricot-f/tricot3.png', 'Pull en maille', 'images/tricot-f/t3.png'),
(34, 179, 'Pull ef en maille', 45, 0, 5, '1', 'Femme', 'Vert militaire', 38, 'Tricot', 'images/tricot-f/tricot2.png', 'Pull ef', 'images/tricot-f/t2.png'),
(35, 149, 'Pull col bateau manches chauve-souris', 69, 0, 5, '1', 'Femme', 'Blanc', 36, 'Tricot', 'images/tricot-f/tricot1.png', 'Pull col bateau', 'images/tricot-f/t1.png'),
(36, 159, 'Chemise popeline coton', 10, 10, 5, '', 'Homme', 'bleu marine', 40, 'Chemises', 'images\\chemises-h\\chemise1.png', 'chemise simple', 'images\\chemises-h\\ch1.png'),
(37, 249, 'carreaux', 30, 10, 10, '', 'Homme', 'noir&blanc', 38, 'Chemises', 'images\\chemises-h\\chemise2.png', 'A carreaux', 'images\\chemises-h\\ch2.png'),
(38, 185, 'Chemise denim', 20, 10, 10, '', 'Homme', 'bleu', 44, 'Chemises', 'images\\chemises-h\\Chemise3.png', 'chemise jean', 'images\\chemises-h\\ch3.png'),
(39, 209, 'Chemise microprint', 30, 10, 10, '', 'Homme', '\r\nBlanc', 42, 'Chemises', 'images\\chemises-h\\chemise4.png', 'chemise simple', 'images\\chemises-h\\ch4.png'),
(40, 249, 'Chemise &agrave; carreaux\r\n', 20, 10, 10, '', 'Homme', 'blanc&noir', 38, 'Chemises', 'images\\chemises-h\\chemise6.png', 'chemise', 'images\\chemises-h\\ch6.png'),
(41, 239, 'chemise a carreaux', 10, 10, 10, '', 'Homme', 'Rouge&noir', 48, 'Chemises', 'images\\chemises-h\\chemise5.png', 'Chemise', 'images\\chemises-h\\ch5.png'),
(42, 789, 'Blouson motard manches amovibles', 10, 10, 10, '', 'Homme', 'noir', 40, 'Vestes', 'images\\Vestes-h\\veste1.png', 'veste', 'images\\Vestes-h\\vs1.png'),
(43, 300, 'Blouson bomber couleurs\r\n', 10, 10, 10, '', 'Homme', 'vert militaire ', 40, 'Vestes', 'images\\Vestes-h\\veste2.png', 'Veste', 'images\\Vestes-h\\vs2.png'),
(44, 500, 'Blouson l&eacuteger &eacute capuche', 10, 10, 10, '', 'Homme', 'bleu foncé', 38, 'Vestes', 'images\\Vestes-h\\veste3.png', 'Capuchon', 'images\\Vestes-h\\vs3.png'),
(45, 300, 'Blouson bomber couleurs\r\n', 10, 10, 10, '', 'Homme', 'noir', 40, 'Vestes', 'images\\Vestes-h\\veste4.png', 'veste', 'images\\Vestes-h\\vs4.png'),
(46, 275, 'Jean denim skinny d&eacutelav&eacute\r\n', 10, 10, 10, '', 'Homme', 'Bleu', 40, 'Pantalons', 'images\\Pantalons-h\\pantalon3.png', 'Jeans', 'images\\Pantalons-h\\p3.png'),
(47, 259, 'Pantalon skinny d&eacutechir&eacute vintage\r\n', 10, 10, 10, '', 'Homme', 'Bleu', 48, 'Pantalons', 'images\\Pantalons-h\\pantalon4.png', 'Jeans', 'images\\Pantalons-h\\p4.png'),
(48, 256, 'Pantalon jogging\r\n', 10, 10, 10, '', 'Homme', 'Beige', 46, 'Pantalons', 'images\\Pantalons-h\\pantalon2.png', 'Pantalon', 'images\\Pantalons-h\\p2.png'),
(49, 300, 'Pantalon chino coton fin\r\n', 10, 10, 10, '', 'Homme', 'Noir', 38, 'Pantalons', 'images\\Pantalons-h\\pantalon1.png', 'Pantalon', 'images\\Pantalons-h\\p1.png'),
(50, 200, 'Pull &lt; Yarn Injected &gt;\r\n', 10, 10, 10, '', 'Homme', 'Rose', 38, 'Tricots', 'images\\tricots-h\\tricot4.png', 'Tricot', 'images\\tricots-h\\t4.png'),
(51, 289, 'Pull structur&eacute; Slub ', 10, 10, 10, '', 'Homme', 'Gris', 38, 'Tricots', 'images\\tricots-h\\tricot3.png', 'Pull', 'images\\tricots-h\\t3.png');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk-article` FOREIGN KEY (`idarticle`) REFERENCES `vetements` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
