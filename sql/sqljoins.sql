-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           8.0.16 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour sqljoins
CREATE DATABASE IF NOT EXISTS `sqljoins` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sqljoins`;

-- Export de la structure de la table sqljoins. a
CREATE TABLE IF NOT EXISTS `a` (
  `PK` int(3) DEFAULT NULL,
  `Value` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Export de données de la table sqljoins.a : ~0 rows (environ)
/*!40000 ALTER TABLE `a` DISABLE KEYS */;
INSERT INTO `a` (`PK`, `Value`) VALUES
	(1, 'Fox'),
	(2, 'COP'),
	(3, 'TAXI'),
	(6, 'WASHINGTON'),
	(7, 'DELL'),
	(5, 'ARIZONA'),
	(4, 'LINCOLN'),
	(10, 'LUCENT');
/*!40000 ALTER TABLE `a` ENABLE KEYS */;

-- Export de la structure de la table sqljoins. b
CREATE TABLE IF NOT EXISTS `b` (
  `PK` int(3) DEFAULT NULL,
  `Value` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Export de données de la table sqljoins.b : ~0 rows (environ)
/*!40000 ALTER TABLE `b` DISABLE KEYS */;
INSERT INTO `b` (`PK`, `Value`) VALUES
	(1, 'TROT'),
	(2, 'CAR'),
	(3, 'CAB'),
	(6, 'MONUMENT'),
	(7, 'PC'),
	(8, 'MICROSOFT'),
	(9, 'APPLE'),
	(11, 'SCOTCH');
/*!40000 ALTER TABLE `b` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
