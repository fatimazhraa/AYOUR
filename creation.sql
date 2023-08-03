-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 août 2023 à 00:00
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ayour`
--

-- --------------------------------------------------------

--
-- Structure de la table `creation`
--

CREATE TABLE `creation` (
  `id` int(11) NOT NULL,
  `imgcarte` varchar(255) NOT NULL,
  `titrecarte` text NOT NULL,
  `desccarte` text NOT NULL,
  `grandtitre` text NOT NULL,
  `imgdetaille` varchar(255) NOT NULL,
  `titredetaille` text NOT NULL,
  `descdetaille` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `creation`
--

INSERT INTO `creation` (`id`, `imgcarte`, `titrecarte`, `desccarte`, `grandtitre`, `imgdetaille`, `titredetaille`, `descdetaille`) VALUES
(1, 'undraw_heatmap_uyye.png', 'Création de Site Vitrine', 'Vous souhaitez faire connaître votre société sur internet ? Vous souhaitez créer votre vitrine pour présenter vos...', 'Création de Site Vitrine', 'Capture d\'écran 2023-07-17 162239.png', 'Création de Site Vitrine', 'Vous souhaitez faire connaître votre société sur internet ? Vous souhaitez créer votre vitrine pour présenter vos services et votre savoir-faire ?    \r\n\r\nUn site vitrine est un site web qui présente votre entreprise, ses activités et ses services. Il agit comme une carte de visite virtuelle accessible en ligne, permettant de promouvoir votre entreprise et de vous différencier de la concurrence. Créer un site vitrine est essentiel pour professionnaliser votre image, augmenter votre visibilité sur les moteurs de recherche, générer des contacts et augmenter votre chiffre d\'affaires. Faire appel à une agence web comme Host Oplus offre des avantages tels qu\'un design attrayant, une optimisation pour les moteurs de recherche, l\'utilisation de technologies adaptées, un hébergement fiable, des boîtes mail professionnelles et une maintenance dédiée. En outre, une agence comme Numacom peut vous aider à améliorer votre visibilité en ligne grâce à des stratégies de référencement et de marketing digital, y compris la gestion des réseaux sociaux.'),
(2, 'undraw_Landing_page_re_6xev.png', 'Création de Site One Page', 'Le site One-page est un site conçu en une seule page, navigable à l\'aide d\'un menu fixe, qui sert à présenter votre...', 'Création de Site One Page', 'Capture d\'écran 2023-07-17 162607.png', 'Création de Site One Page', 'Le site One-page est un site conçu en une seule page, navigable à l\'aide d\'un menu fixe, qui sert à présenter votre entreprise de façon rapide et simple. Nous vous donnons le choix entre plusieurs modèles pré-conçus, pour lesquels nous adapterons votre contenu texte et image, ce qui accélère le délai de création et nous permet de vous livrer rapidement des sites Web très ergonomiques et optimisés pour le SEO et les moteurs de recherche.'),
(3, 'undraw_Add_to_cart_re_wrdo.png', 'Création de site e-commerce', 'Un site e-commerce est un site marchand dans lequel une entreprise propose une boutique en ligne composée d\'articles qu...', 'Création de site e-commerce', 'Capture d\'écran 2023-07-17 162931.png', 'Création de site e-commerce', 'Un site e-commerce est un site marchand dans lequel une entreprise propose une boutique en ligne composée d\'articles qu\'elle souhaite commercialiser sur internet. Elle fait également figurer des informations sur ses services. La création d\'un site e-commerce est essentielle pour toute entreprise qui souhaite commercialiser des produits en ligne. Un site e-commerce est une boutique virtuelle où vous présentez vos produits, permettant aux clients de les parcourir, de les ajouter à un panier virtuel, et de passer commande en fournissant leurs informations de facturation et de livraison. La création d\'un site e-commerce offre de nombreux avantages, tels que la possibilité de générer des ventes, d\'augmenter votre chiffre d\'affaires, de fidéliser vos clients et d\'élargir votre audience. Faire appel à une agence web spécialisée dans la création de sites e-commerce, comme Host Oplus, garantit un site bien conçu, responsive et optimisé pour le référencement naturel. L\'agence utilisera des technologies adaptées, telles que Prestashop, Magento ou WordPress avec Woocommerce, pour répondre à vos besoins spécifiques. Elle assurera également l\'hébergement, la maintenance et la sécurité de votre site, ainsi que le développement de fonctionnalités personnalisées pour faciliter la gestion de votre activité commerciale en ligne. En complément, une agence comme Host Oplus peut mettre en place une stratégie de référencement et de marketing digital pour améliorer la visibilité de votre site e-commerce sur les moteurs de recherche et les réseaux sociaux.'),
(4, 'undraw_Solution_mindset_re_57bf.png', 'Solution sur Mesure', 'Pour bien vous démarquer de la concurrence, optez pour un site web avec un design sur mesure, qui correspondra à 100%...', 'Solution sur Mesure', 'Capture d\'écran 2023-07-17 163200.png', 'Solution sur Mesure', 'Pour bien vous démarquer de la concurrence, optez pour un site web avec un design sur mesure, qui correspondra à 100% à l\'esprit de votre marque. Nos experts prennent en compte tout votre environnement professionnel pour vous fournir une présence Web qui répond à votre besoin commercial et marketing.'),
(5, 'undraw_Mobile_encryption_re_yw3o.png', 'Applications mobiles', 'création de sites web, il peut être nécessaire de  créer une application mobile, pour étendre ses services et prop...', 'Applications mobiles', 'Capture d\'écran 2023-07-17 164115.png', 'Applications mobiles', 'création de sites web, il peut être nécessaire de  créer une application mobile, pour étendre ses services et proposer un complément adapté aux smartphones, créer un lien intime avec les utilisateurs, vos clients, créer des ventes, améliorer votre notoriété en proposant un contenu axé sur votre marque, votre savoir-faire etc.\r\n\r\nFinalement, une application mobile doit pouvoir répondre aux mêmes objectifs qu\'un site : générer du lead'),
(6, 'undraw_file_analysis_8k9b.png', 'Référencement De Site Web', 'Référencement site web : Rendre visible votre site sur les moteurs de recherche\r\nVotre site n\'est pas assez visible....', 'Référencement De Site Web', 'Capture d\'écran 2023-07-17 164531.png', 'Référencement De Site Web', 'Référencement site web : Rendre visible votre site sur les moteurs de recherche\r\n\r\nVotre site n\'est pas assez visible sur les moteurs de recherche ? Il ne génère pas de contacts ? Vous n\'enregistrez aucun trafic ? Il se peut que votre site ne soit pas optimisé pour obtenir un bon référencement sur les moteurs de recherche dont Google.\r\n\r\n\r\nAvoir un site internet ne suffit pas pour être bien référencé sur le web. Le référencement de site internet est un long processus qui permettra alors à votre site de se positionner dans les résultats des moteurs de recherche, d\'augmenter votre trafic et de générer du lead.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
