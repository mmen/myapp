-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           8.0.16 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour pdocrudoopl1
CREATE DATABASE IF NOT EXISTS `pdocrudoopl1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pdocrudoopl1`;

-- Listage de la structure de la table pdocrudoopl1. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pdocrudoopl1.categories : ~3 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'Fashion', '2014-06-01 00:35:07', '2014-05-30 17:34:33'),
	(2, 'Electronics', '2014-06-01 00:35:07', '2014-05-30 17:34:33'),
	(3, 'Motors', '2014-06-01 00:35:07', '2014-05-30 17:34:54');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage de la structure de la table pdocrudoopl1. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pdocrudoopl1.products : ~18 rows (environ)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `created`, `modified`) VALUES
	(1, 'LG P880 4X HD', 'My first awesome phone!', 336, 3, '2014-06-01 01:12:26', '2014-05-31 17:12:26'),
	(2, 'Google Nexus 4', 'The most awesome phone of 2013!', 299, 2, '2014-06-01 01:12:26', '2014-05-31 17:12:26'),
	(3, 'Samsung Galaxy S4', 'How about no?', 600, 3, '2014-06-01 01:12:26', '2014-05-31 17:12:26'),
	(6, 'Bench Shirt', 'The best shirt!', 29, 1, '2014-06-01 01:12:26', '2014-05-31 02:12:21'),
	(7, 'Lenovo Laptop', 'My business partner.', 399, 2, '2014-06-01 01:13:45', '2014-05-31 02:13:39'),
	(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, '2014-06-01 01:14:13', '2014-05-31 02:14:08'),
	(9, 'Spalding Watch', 'My sports watch.', 199, 1, '2014-06-01 01:18:36', '2014-05-31 02:18:31'),
	(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, '2014-06-06 17:10:01', '2014-06-05 18:09:51'),
	(11, 'Huawei Y300', 'For testing purposes.', 100, 2, '2014-06-06 17:11:04', '2014-06-05 18:10:54'),
	(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, '2014-06-06 17:12:21', '2014-06-05 18:12:11'),
	(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', 70, 1, '2014-06-06 17:12:59', '2014-06-05 18:12:49'),
	(25, 'Abercrombie Allen Anew Shirt', 'Awesome new shirt!', 999, 1, '2014-11-22 18:42:13', '2014-11-21 19:42:13'),
	(26, 'Another product', 'Awesome product!', 555, 2, '2014-11-22 19:07:34', '2014-11-21 20:07:34'),
	(27, 'Bag', 'Awesome bag for you!', 999, 1, '2014-12-04 21:11:36', '2014-12-03 22:11:36'),
	(28, 'Wallet', 'You can absolutely use this one!', 799, 1, '2014-12-04 21:12:03', '2014-12-03 22:12:03'),
	(30, 'Wal-mart Shirt', '', 555, 2, '2014-12-13 00:52:29', '2014-12-12 01:52:29'),
	(31, 'Amanda Waller Shirt', 'New awesome shirt!', 333, 1, '2014-12-13 00:52:54', '2014-12-12 01:52:54'),
	(32, 'Washing Machine Model PTRR', 'Some new product.', 999, 1, '2015-01-08 22:44:15', '2015-01-07 23:44:15');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


-- Listage de la structure de la base pour pdocrudoopl2
CREATE DATABASE IF NOT EXISTS `pdocrudoopl2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pdocrudoopl2`;

-- Listage de la structure de la table pdocrudoopl2. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pdocrudoopl2.categories : ~3 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'Fashion', '2014-06-01 00:35:07', '2014-05-30 17:34:33'),
	(2, 'Electronics', '2014-06-01 00:35:07', '2014-05-30 17:34:33'),
	(3, 'Motors', '2014-06-01 00:35:07', '2014-05-30 17:34:54');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage de la structure de la table pdocrudoopl2. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pdocrudoopl2.products : ~18 rows (environ)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `created`, `modified`) VALUES
	(1, 'LG P880 4X HD', 'My first awesome phone!', 336, 3, '2014-06-01 01:12:26', '2014-05-31 17:12:26'),
	(2, 'Google Nexus 4', 'The most awesome phone of 2013!', 299, 2, '2014-06-01 01:12:26', '2014-05-31 17:12:26'),
	(3, 'Samsung Galaxy S4', 'How about no?', 600, 3, '2014-06-01 01:12:26', '2014-05-31 17:12:26'),
	(6, 'Bench Shirt', 'The best shirt!', 29, 1, '2014-06-01 01:12:26', '2014-05-31 02:12:21'),
	(7, 'Lenovo Laptop', 'My business partner.', 399, 2, '2014-06-01 01:13:45', '2014-05-31 02:13:39'),
	(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, '2014-06-01 01:14:13', '2014-05-31 02:14:08'),
	(9, 'Spalding Watch', 'My sports watch.', 199, 1, '2014-06-01 01:18:36', '2014-05-31 02:18:31'),
	(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, '2014-06-06 17:10:01', '2014-06-05 18:09:51'),
	(11, 'Huawei Y300', 'For testing purposes.', 100, 2, '2014-06-06 17:11:04', '2014-06-05 18:10:54'),
	(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, '2014-06-06 17:12:21', '2014-06-05 18:12:11'),
	(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', 70, 1, '2014-06-06 17:12:59', '2014-06-05 18:12:49'),
	(25, 'Abercrombie Allen Anew Shirt', 'Awesome new shirt!', 999, 1, '2014-11-22 18:42:13', '2014-11-21 19:42:13'),
	(26, 'Another product', 'Awesome product!', 555, 2, '2014-11-22 19:07:34', '2014-11-21 20:07:34'),
	(27, 'Bag', 'Awesome bag for you!', 999, 1, '2014-12-04 21:11:36', '2014-12-03 22:11:36'),
	(28, 'Wallet', 'You can absolutely use this one!', 799, 1, '2014-12-04 21:12:03', '2014-12-03 22:12:03'),
	(30, 'Wal-mart Shirt', '', 555, 2, '2014-12-13 00:52:29', '2014-12-12 01:52:29'),
	(31, 'Amanda Waller Shirt', 'New awesome shirt!', 333, 1, '2014-12-13 00:52:54', '2014-12-12 01:52:54'),
	(32, 'Washing Machine Model PTRR', 'Some new product.', 999, 1, '2015-01-08 22:44:15', '2015-01-07 23:44:15');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


-- Listage de la structure de la base pour pdocrudoopl3
CREATE DATABASE IF NOT EXISTS `pdocrudoopl3` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pdocrudoopl3`;

-- Listage de la structure de la table pdocrudoopl3. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pdocrudoopl3.categories : ~3 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'Fashion', '2014-06-01 00:35:07', '2014-05-30 17:34:33'),
	(2, 'Electronics', '2014-06-01 00:35:07', '2014-05-30 17:34:33'),
	(3, 'Motors', '2014-06-01 00:35:07', '2014-05-30 17:34:54');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage de la structure de la table pdocrudoopl3. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pdocrudoopl3.products : ~19 rows (environ)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `created`, `modified`, `image`) VALUES
	(1, 'LG P880 4X HD', 'My first awesome phone!', 336, 3, '2014-06-01 01:12:26', '2014-05-31 17:12:26', NULL),
	(2, 'Google Nexus 4', 'The most awesome phone of 2013!', 299, 2, '2014-06-01 01:12:26', '2014-05-31 17:12:26', NULL),
	(3, 'Samsung Galaxy S4', 'How about no?', 600, 3, '2014-06-01 01:12:26', '2014-05-31 17:12:26', NULL),
	(6, 'Bench Shirt', 'The best shirt!', 29, 1, '2014-06-01 01:12:26', '2014-05-31 02:12:21', NULL),
	(7, 'Lenovo Laptop', 'My business partner.', 399, 2, '2014-06-01 01:13:45', '2014-05-31 02:13:39', NULL),
	(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, '2014-06-01 01:14:13', '2014-05-31 02:14:08', NULL),
	(9, 'Spalding Watch', 'My sports watch.', 199, 1, '2014-06-01 01:18:36', '2014-05-31 02:18:31', NULL),
	(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, '2014-06-06 17:10:01', '2014-06-05 18:09:51', NULL),
	(11, 'Huawei Y300', 'For testing purposes.', 100, 2, '2014-06-06 17:11:04', '2014-06-05 18:10:54', NULL),
	(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, '2014-06-06 17:12:21', '2014-06-05 18:12:11', NULL),
	(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', 70, 1, '2014-06-06 17:12:59', '2014-06-05 18:12:49', NULL),
	(25, 'Abercrombie Allen Anew Shirt', 'Awesome new shirt!', 999, 1, '2014-11-22 18:42:13', '2014-11-21 19:42:13', NULL),
	(26, 'Another product', 'Awesome product!', 555, 2, '2014-11-22 19:07:34', '2014-11-21 20:07:34', NULL),
	(27, 'Bag', 'Awesome bag for you!', 999, 1, '2014-12-04 21:11:36', '2014-12-03 22:11:36', NULL),
	(28, 'Wallet', 'You can absolutely use this one!', 799, 1, '2014-12-04 21:12:03', '2014-12-03 22:12:03', NULL),
	(30, 'Wal-mart Shirt', '', 555, 2, '2014-12-13 00:52:29', '2014-12-12 01:52:29', NULL),
	(31, 'Amanda Waller Shirt', 'New awesome shirt!', 333, 1, '2014-12-13 00:52:54', '2014-12-12 01:52:54', NULL),
	(32, 'Washing Machine Model PTRR', 'Some new product.', 999, 1, '2015-01-08 22:44:15', '2015-01-07 23:44:15', NULL),
	(39, 'Car', 'Toyota corolla 2019', 100, 3, '2019-05-02 16:58:39', '2019-05-02 12:58:39', '68236ddcefa11f47ef6243a76db8b4060fcbb059-toyota_corolla_2019.png');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
