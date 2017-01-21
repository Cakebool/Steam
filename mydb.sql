-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 20 Janvier 2017 à 20:20
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
--

--
-- Contenu de la table `categorie_jeux`
--

INSERT INTO `categorie_jeux` (`idCategorie`, `idJeux`, `id`) VALUES
(0, 1, 1),
(1, 2, 2),
(2, 3, 3),
(3, 4, 4),
(4, 5, 5),
(5, 6, 6);

--
-- Contenu de la table `catégorie`
--

INSERT INTO `catégorie` (`id`, `Type`) VALUES
(0, 'Horreur'),
(1, 'Action'),
(2, 'Aventure'),
(3, 'JDR'),
(4, 'Sport'),
(5, 'Combat');

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`idImage`, `lien`) VALUES
(1, 'https://etgeekera.files.wordpress.com/2016/08/overwatch-box-art.jpg'),
(2, 'http://www.mobygames.com/images/covers/l/330670-doom-playstation-4-front-cover.jpg'),
(3, 'http://www.mobygames.com/images/covers/l/298981-dying-light-playstation-4-front-cover.jpg'),
(4, 'http://www.geeksword.co.uk/wp-content/uploads/2013/11/skyrim.jpg'),
(5, 'http://cdn-static.gamekult.com/gamekult-com/images/photos/30/50/22/35/minecraft-playstation-3-edition-artwork-ME3050223561_2.jpg'),
(6, 'http://www.mobygames.com/images/covers/l/313673-super-meat-boy-playstation-4-front-cover.jpg');

--
-- Contenu de la table `jeux`
--

INSERT INTO `jeux` (`id`, `Nom`, `Prix`, `Date de sortie`, `Config requise`, `Description`, `Notes`) VALUES
(1, 'Doom', 55, '2017-01-26 00:00:00', 'pc', 'dzqdqz', 20),
(2, 'Overwatch', 60, '2017-01-21 00:00:00', 'pc', 'ozdkqokdqz', 50),
(3, 'Dying Light', 40, '2017-01-18 00:00:00', 'PC', 'qdzdqsrfs', 12),
(4, 'Skyrim', 25, '2017-01-01 00:00:00', 'PC', 'lqddsf', 20),
(5, 'Super Meat boy', 12, '2017-01-17 00:00:00', 'PC', 'qzgddffd', 15),
(6, 'Minecraft', 15, '2017-01-24 00:00:00', 'PC', 'jeux difficile', 20);

--
-- Contenu de la table `joueurs`
--

INSERT INTO `joueurs` (`id`, `nom`, `prenom`, `birth`, `email`, `jeux (FK)`, `pseudo`, `avatar`, `pwd`) VALUES
(0, 'test', 'test', '2017-01-07 04:02:00', 'test@test.com', NULL, 'test', NULL, 'test'),
(1, 'Giraud', 'romain', '2017-01-20 00:00:00', 'cakeboool@gmail.com', NULL, 'Cakebool', NULL, 'log');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
