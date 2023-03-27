-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tcc
CREATE DATABASE IF NOT EXISTS `tcc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tcc`;

-- Volcando estructura para tabla tcc.company
CREATE TABLE IF NOT EXISTS `company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_type_id_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4FBF094FCCC6F036` (`company_type_id_id`),
  CONSTRAINT `FK_4FBF094FCCC6F036` FOREIGN KEY (`company_type_id_id`) REFERENCES `company_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.company: ~8 rows (aproximadamente)
INSERT INTO `company` (`id`, `company_type_id_id`, `name`, `description`, `url_image`, `location`, `url_web`) VALUES
	(1, 13, 'Compañia', 'Esta es la descripción de la compañia', 'URL_image.jpg', 'Calle mayor, 1', 'www.google.com'),
	(2, 13, 'Compañia', 'Esta es la descripción de la compañia', 'URL_image.jpg', 'Calle mayor, 1', 'www.google.com'),
	(3, 13, 'Compañia', 'Esta es la descripción de la compañia', 'URL_image.jpg', 'Calle mayor, 1', 'www.google.com'),
	(4, 13, 'Compañia', 'Esta es la descripción de la compañia', 'URL_image.jpg', 'Calle mayor, 1', 'www.google.com'),
	(5, 13, 'Compañia', 'Esta es la descripción de la compañia', 'URL_image.jpg', 'Calle mayor, 1', 'www.google.com'),
	(6, 13, 'Compañia', 'Esta es la descripción de la compañia', 'URL_image.jpg', 'Calle mayor, 1', 'www.google.com'),
	(7, 5, 'Nueva Compañia', 'Esta es la nueva compañia', 'URL_image.jpg', 'Calle mayor, 1', 'www.google.com'),
	(8, 5, 'Nueva Compañia', 'Esta es la nueva compañia', 'URL_image.jpg', 'Calle mayor, 1', 'www.google.com'),
	(9, 19, 'esta es la super nueva companyia', 'esta es la super nueva companyia', 'ujuuu,jpg', 'lcatyion, 1', 'asdlf.net');

-- Volcando estructura para tabla tcc.company_type
CREATE TABLE IF NOT EXISTS `company_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CFB34DC75E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.company_type: ~20 rows (aproximadamente)
INSERT INTO `company_type` (`id`, `name`) VALUES
	(15, 'Alimentación y bebidas'),
	(16, 'Comercio minorista'),
	(7, 'Construcción'),
	(12, 'Consultoría empresarial'),
	(11, 'Diseño gráfico'),
	(5, 'Energía renovable'),
	(18, 'Entretenimiento'),
	(6, 'Ingeniería'),
	(14, 'Limpieza y residuos'),
	(1, 'Manufactureras'),
	(9, 'Marketing digital'),
	(10, 'Publicidad'),
	(13, 'Seguridad privada'),
	(2, 'Servicios financieros'),
	(20, 'Servicios legales'),
	(19, 'Servicios médicos'),
	(3, 'Tecnología'),
	(4, 'Telecomunicaciones'),
	(8, 'Transporte y logística'),
	(17, 'Turismo');

-- Volcando estructura para tabla tcc.doctrine_migration_versions
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla tcc.doctrine_migration_versions: ~0 rows (aproximadamente)
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20230327172201', '2023-03-27 19:24:32', 551);

-- Volcando estructura para tabla tcc.messenger_messages
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.messenger_messages: ~0 rows (aproximadamente)

-- Volcando estructura para tabla tcc.modality
CREATE TABLE IF NOT EXISTS `modality` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.modality: ~0 rows (aproximadamente)

-- Volcando estructura para tabla tcc.offers
CREATE TABLE IF NOT EXISTS `offers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `modality_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `positions` int NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL,
  `activated_by_admin` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DA460427979B1AD6` (`company_id`),
  KEY `IDX_DA4604272D6D889B` (`modality_id`),
  CONSTRAINT `FK_DA4604272D6D889B` FOREIGN KEY (`modality_id`) REFERENCES `modality` (`id`),
  CONSTRAINT `FK_DA460427979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.offers: ~0 rows (aproximadamente)

-- Volcando estructura para tabla tcc.tutor_user
CREATE TABLE IF NOT EXISTS `tutor_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tutor_id` int NOT NULL,
  `alumn_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A38695ED208F64F1` (`tutor_id`),
  KEY `IDX_A38695ED4DC1EA41` (`alumn_id`),
  CONSTRAINT `FK_A38695ED208F64F1` FOREIGN KEY (`tutor_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_A38695ED4DC1EA41` FOREIGN KEY (`alumn_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.tutor_user: ~0 rows (aproximadamente)

-- Volcando estructura para tabla tcc.type_offers
CREATE TABLE IF NOT EXISTS `type_offers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.type_offers: ~0 rows (aproximadamente)

-- Volcando estructura para tabla tcc.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_type_id_id` int NOT NULL,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `cvname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activate` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  KEY `IDX_8D93D649D62FDF4C` (`user_type_id_id`),
  CONSTRAINT `FK_8D93D649D62FDF4C` FOREIGN KEY (`user_type_id_id`) REFERENCES `user_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.user: ~4 rows (aproximadamente)
INSERT INTO `user` (`id`, `user_type_id_id`, `name`, `surname`, `email`, `roles`, `password`, `phone`, `cvname`, `activate`) VALUES
	(1, 1, 'Alumno', 'IFP', 'alumno@ifp.es', '["ROLE_USER"]', '$2y$13$TnQl6kQDHmb.Acf/EVPkOORtfZ5/6.4oNe7BaH2qwZLwQYl9HMbwO', 123456789, 'bienvenido.pdf', 0),
	(3, 4, 'Administrator', 'IFP', 'administrator@ifp.es', '["ROLE_USER"]', '$2y$13$qGnu9xvjzq0ecyzPE1Smku/kqJkNZzupv40UCHKKfZZYrAOF3.J/G', 123456789, 'bienvenido.pdf', 0),
	(4, 2, 'Company', 'IFP', 'company@ifp.es', '["ROLE_USER"]', '$2y$13$HIcsG6ThWuK3ZM7LU41y6ex/rwx424RZITdsibOqwoAcYGtaJU4CG', 123456789, 'bienvenido.pdf', 1),
	(5, 3, 'Tutor', 'IFP', 'Tutor@ifp.es', '["ROLE_USER"]', '$2y$13$NTbT7f9Ne7sp5OMfzgkZFOTB62FhTdVKNW8MlrhYNutdEGv7wgwI.', 123456789, 'bienvenido.pdf', 0);

-- Volcando estructura para tabla tcc.user_company
CREATE TABLE IF NOT EXISTS `user_company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `company_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_17B21745A76ED395` (`user_id`),
  KEY `IDX_17B21745979B1AD6` (`company_id`),
  CONSTRAINT `FK_17B21745979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
  CONSTRAINT `FK_17B21745A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.user_company: ~1 rows (aproximadamente)
INSERT INTO `user_company` (`id`, `user_id`, `company_id`) VALUES
	(2, 4, 9);

-- Volcando estructura para tabla tcc.user_type
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F65F1BE05E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla tcc.user_type: ~4 rows (aproximadamente)
INSERT INTO `user_type` (`id`, `name`) VALUES
	(4, 'Administrator'),
	(1, 'Alumno'),
	(2, 'Company'),
	(3, 'Tutor');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
