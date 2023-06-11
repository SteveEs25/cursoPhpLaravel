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

-- Volcando datos para la tabla gobiernolaravel.failed_jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla gobiernolaravel.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_06_09_005047_create_projects_table', 1);

-- Volcando datos para la tabla gobiernolaravel.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla gobiernolaravel.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla gobiernolaravel.projects: ~2 rows (aproximadamente)
INSERT INTO `projects` (`id`, `nombreProyecto`, `fuenteFondos`, `montoPlanificado`, `montoPatrocinado`, `montoFondos`, `created_at`, `updated_at`) VALUES
	(1, 'Prueba Proyecto', 'Banco', 1000.00, 850.00, 800.00, NULL, '2023-06-11 10:40:41'),
	(2, 'Proyecto 1', 'Banco 1', 300.00, 200.00, 200.00, '2023-06-10 10:37:51', '2023-06-10 12:25:10');

-- Volcando datos para la tabla gobiernolaravel.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Steve Mata', 'steve@gmail.com', NULL, '$2y$10$HAwSl4TcPNdVvO/e.mK7PeGPbEbkpV/Skmq3xxBvuTgPT/d2pLfju', NULL, '2023-06-09 07:22:44', '2023-06-09 07:22:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
