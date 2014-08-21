-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Client :  mysql51-98.perso
-- Généré le :  Jeu 21 Août 2014 à 23:02
-- Version du serveur :  5.1.73-1.1+squeeze+build0+1-log
-- Version de PHP :  5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `julienpifbase`
--

-- --------------------------------------------------------

--
-- Structure de la table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(5000) COLLATE utf8_bin NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `image` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=192 ;

--
-- Contenu de la table `markers`
--

INSERT INTO `markers` (`id`, `username`, `name`, `description`, `lat`, `lng`, `image`) VALUES
(167, 'tfedwm14', 'Voyage en Ã‰cosse', 'MatinÃ©e de croisiÃ¨re sur le loch Ness via le canal CalÃ©donien puis dÃ©part vers le Nord jusqu''Ã  Wick en longeant la cÃ´te Est, superbes paysages, plats au dÃ©but puis s''Ã©levant sacrÃ©ment avant de redevenir plat aux environs de Wick. \r\n\r\nDÃ©part vers John o''groats et plus particuliÃ¨rement Duncansby oÃ¹ les falaises sont simplement impressionnantes !\r\nPuis on a longÃ© la cÃ´te Nord en traversant des paysages insolites, falaises Ã  pic, plages, prairies, le tout sous quelques averses de pluie.', 58.043003, -5.778809, '167.jpg'),
(168, 'tfedwm14', 'L''allemagne - BaviÃ¨re', 'Ce parc national est idÃ©al pour donner libre cours Ã  ses envies d''Ã©vasion, de communion avec la nature. De multiples sentiers de randonnÃ©es sont proposÃ©s, parfaitement balisÃ©s, que l''on peut arpenter Ã  pied ou, selon les conditions d''enneigement, Ã  ski et en raquettes, entre amis ou en famille. ', 52.669720, 10.678711, '168.jpg'),
(169, 'tfedwm14', 'Les PyrÃ©nÃ©es, un endroit magique !', 'les grands sites des Hautes-PyrÃ©nÃ©es, un parcours qui rassemble des lieux remarquables et incontournables de la rÃ©gion Midi-PyrÃ©nÃ©es.\r\n\r\nCela inclut la citÃ© mariale de Lourdes, le Pont dâ€™Espagne aux tumultueuses cascades (qui marque lâ€™entrÃ©e du Parc National), Gavarnie lâ€™indÃ©modable star pyrÃ©nÃ©enne avec sa lÃ©gendaire BrÃ¨che de Roland et sa Grande Cascade et enfin lâ€™Observatoire du Pic du Midi de Bigorre, insolite lieu historique et scientifique.', 43.241199, -0.538330, '169.jpg'),
(170, 'tfedwm14', 'Les Ardennes', 'Ici, le garde forestier est plus sympa, du moment qu''il n''y a pas de dÃ©chet et que l''on respecte la nature il n''y a pas de soucis.\r\nDe l''eau de source a proximtÃ© , facile pour s''hydrater de plus la riviÃ¨re regorge de poisson en tout genre, ce qui est idÃ©al niveau nourriture.\r\nEn cas de tempÃªte il y a une grotte pas tres loin vers l''ouest, elle m''a bien servi lors de ma derniÃ¨re expÃ©dition.\r\n', 50.138184, 5.306396, '170.jpg'),
(171, 'tfedwm14', 'La nature et le nord', 'Câ€™est relativement connu et câ€™est bien normal vu le charme du lieu. La plage est faite de galets, tous colorÃ©s et diffÃ©rents, qui font un bruit dâ€™enfer lorsque les vagues les trimbalent Ã  chaque flux et reflux.\r\nNous y sommes passÃ© quelques jours en rejoignant les Ardennes Belges', 49.916451, 0.971373, '171.jpg'),
(172, 'tfedwm14', 'Allemannsretten: â€œAll Manâ€™s Rightâ€', 'With the Norwegian zeal for nature, itâ€™s no surprise that the country has pioneered the right of public access. The concept of Allemannsretten, firmly based in tradition and codified into law by the Outdoor Recreation Act of 1957, honors the access and right of passage through uncultivated land, regardless of ownership. The Act also establishes the right to camp freely on uncultivated land for up to two nights and longer in the mountains or more remote areas.', 61.980267, 6.108398, '172.jpg'),
(173, 'alexandre', 'Canada', 'kfyjfgygfk', 50.701675, -72.520752, '173.png'),
(174, 'marius', 'Lille', 'Coucou', 50.583237, 3.054199, '174.jpg'),
(175, '', 'Hello', 'World', 44.653023, -99.755859, '175.jpg'),
(176, '', 'asd', 'asd', 50.459251, 3.883667, '176.jpg'),
(177, 'tfedwm14', 'qsdrgqdf', 'ZRGQERG', 51.488224, -0.175781, '177.png'),
(178, '', 'ChÃ¢teau de Noisy ', 'heyhey', 50.222095, 4.990196, '178.jpg'),
(179, 'maximebonhomme', 'qsdqsdqs', 'qsdqsdqsdqsd', 14.093957, 0.000000, '179.jpg'),
(180, 'maximebonhomme', 'sqdvqsdv', 'qsdvqsdv', 52.153713, 0.000000, '180.jpg'),
(181, 'maximebonhomme', 'sqdvqsdv', 'qsdvqsdv', 52.153713, 0.000000, '181.jpg'),
(182, 'maximebonhomme', 'sqdvqsdv', 'qsdvqsdv', 52.153713, 0.000000, '182.jpg'),
(183, 'maximebonhomme', 'sqdvqsdv', 'qsdvqsdv', 52.153713, 0.000000, '183.jpg'),
(184, 'maximebonhomme', 'sqdvqsdv', 'qsdvqsdv', 52.153713, 0.000000, '184.jpg'),
(185, 'maximebonhomme', 'qsdqsd', 'qsdqsd', 52.928776, 0.000000, '185.jpg'),
(186, 'maximebonhomme', 'qsdqsd', 'qsdqsd', 52.928776, 0.000000, '186.jpg'),
(187, 'maximebonhomme', 'qsdqsd', 'qsdqsd', 52.928776, 0.000000, '187.jpg'),
(188, 'maximebonhomme', 'qsdqsd', 'qsdqsd', 52.928776, 0.000000, '188.jpg'),
(189, 'maximebonhomme', 'qsdqsd', 'qsdqsd', 52.928776, 0.000000, '189.jpg'),
(190, 'maximebonhomme', 'rtsdg', 'tryetry', 51.761040, 0.000000, '190.jpg'),
(191, 'maximebonhomme', 'dfg', 'rtgdt', 52.099758, 3.098145, '191.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `task` tinytext COLLATE utf8_bin NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=55 ;

--
-- Contenu de la table `todo`
--

INSERT INTO `todo` (`id`, `username`, `task`, `done`) VALUES
(38, 'alexandre', 'yg', 0),
(39, 'alexandre', 'iyg', 0),
(40, 'alexandre', 'yfg', 0),
(47, 'joseph', 'yrdytcvtufv', 1),
(50, 'tfedwm14', 'QERGQERG', 0),
(51, 'tfedwm14', 'QERG', 0),
(53, 'tfedwm14', 'proutpipi', 0),
(54, 'maximebonhomme', 'QSC', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `repeatpassword` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=101 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `repeatpassword`) VALUES
(75, 'jean-marc', '738f570d41eb3969befadf64be3513e8430e6f81', '9c366789a32fcd81947d4892b4797e56ffb5c162'),
(76, 'julien', 'b6bea8c610aff149ac47b9d6cc29155796f480e9', 'b6bea8c610aff149ac47b9d6cc29155796f480e9'),
(77, 'pauline', 'b6bea8c610aff149ac47b9d6cc29155796f480e9', 'b6bea8c610aff149ac47b9d6cc29155796f480e9'),
(78, 'vince', 'b6bea8c610aff149ac47b9d6cc29155796f480e9', 'b6bea8c610aff149ac47b9d6cc29155796f480e9'),
(85, 'stanley', '291cf46476fa8f8f636e8b852c7cfb63d8e88d82', '291cf46476fa8f8f636e8b852c7cfb63d8e88d82'),
(86, 'minodov', 'b6bea8c610aff149ac47b9d6cc29155796f480e9', 'b6bea8c610aff149ac47b9d6cc29155796f480e9'),
(87, 'julienpiettepou', 'b6bea8c610aff149ac47b9d6cc29155796f480e9', 'b6bea8c610aff149ac47b9d6cc29155796f480e9'),
(88, 'stefano', '9c366789a32fcd81947d4892b4797e56ffb5c162', '9c366789a32fcd81947d4892b4797e56ffb5c162'),
(89, 'tfedwm14', '81e082583ba12b707015541bf3407753fd25812c', '81e082583ba12b707015541bf3407753fd25812c'),
(90, 'benjaminpirson', '7634a6ca6b194665b6dc5b3b8a6f44f12e299dc7', '7634a6ca6b194665b6dc5b3b8a6f44f12e299dc7'),
(91, 'vorlox', '5ed25af7b1ed23fb00122e13d7f74c4d8262acd8', '5ed25af7b1ed23fb00122e13d7f74c4d8262acd8'),
(92, 'pixeline', 'd84f3cdac1ff2a33109bdf01b6771c7b2216525c', 'd84f3cdac1ff2a33109bdf01b6771c7b2216525c'),
(93, 'alexandre', 'df2efa060e335f97628ca39c9fef5469ab3cb837', 'df2efa060e335f97628ca39c9fef5469ab3cb837'),
(94, 'Denisslef', 'e54ca0f451fa67adfdc259e3a21a86b1a9f5dc67', 'e54ca0f451fa67adfdc259e3a21a86b1a9f5dc67'),
(95, 'crucifixarnaud@gmail.com', 'c9e23feaae7e00f2bd8777db3db8c2ec518852b7', 'c9e23feaae7e00f2bd8777db3db8c2ec518852b7'),
(96, 'marius', '752b27f205f23c37442f8ef98ccad21fc5cc0de8', '752b27f205f23c37442f8ef98ccad21fc5cc0de8'),
(97, 'coucou', '5ed25af7b1ed23fb00122e13d7f74c4d8262acd8', '5ed25af7b1ed23fb00122e13d7f74c4d8262acd8'),
(98, 'joseph', '98fed91b7f28267338fd01dba3744a2aa1112299', '98fed91b7f28267338fd01dba3744a2aa1112299'),
(99, 'julienpietteee', 'b6bea8c610aff149ac47b9d6cc29155796f480e9', 'b6bea8c610aff149ac47b9d6cc29155796f480e9'),
(100, 'maximebonhomme', 'b6bea8c610aff149ac47b9d6cc29155796f480e9', 'b6bea8c610aff149ac47b9d6cc29155796f480e9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
