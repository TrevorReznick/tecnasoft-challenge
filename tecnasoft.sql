-- Adminer 4.8.1 MySQL 10.5.19-MariaDB-0+deb11u2 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `tecnasoft` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `tecnasoft`;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(58,	'2014_10_12_000000_create_users_table',	1),
(59,	'2014_10_12_100000_create_password_resets_table',	1),
(60,	'2019_08_19_000000_create_failed_jobs_table',	1),
(61,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(62,	'2023_06_13_124446_create_xyz_centre_table',	1),
(63,	'2023_06_13_132302_create_point_registry_table',	1),
(64,	'2023_06_13_162016_create_services_registry_table',	2),
(65,	'2023_06_13_162246_create_xyz_price_lists_table',	3),
(66,	'2023_06_13_163259_create_view_web_services_registry_table',	4),
(67,	'2023_06_13_165948_create_view_xyz_sell_history_table',	5),
(68,	'2023_06_13_170431_create_view_point_invoice_table',	6),
(69,	'2023_06_13_170906_create_view_point_purchase_history_table',	7),
(70,	'2023_06_13_171538_create_view_point_deails_invoice_table',	8);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `point_registry`;
CREATE TABLE `point_registry` (
  `p_id` char(36) NOT NULL,
  `p_name` varchar(60) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `p_city` varchar(60) NOT NULL,
  `p_zip` tinyint(4) NOT NULL AUTO_INCREMENT,
  `p_phone` varchar(20) NOT NULL,
  `p_email` varchar(70) NOT NULL,
  `p_referal_name` varchar(100) DEFAULT NULL,
  `p_vat_number` varchar(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`p_zip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `services_registry`;
CREATE TABLE `services_registry` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_name` varchar(25) NOT NULL,
  `s_code` varchar(10) NOT NULL,
  `s_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `view_point_deails_invoice`;
CREATE TABLE `view_point_deails_invoice` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_name` varchar(25) NOT NULL,
  `s_code` varchar(10) NOT NULL,
  `s_description` text NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `view_point_invoice`;
CREATE TABLE `view_point_invoice` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `view_point_purchase_history`;
CREATE TABLE `view_point_purchase_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_id` bigint(20) unsigned NOT NULL,
  `p_id` bigint(20) unsigned NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `s_code` varchar(10) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `view_web_services_registry`;
CREATE TABLE `view_web_services_registry` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_name` varchar(25) NOT NULL,
  `s_code` varchar(10) NOT NULL,
  `s_description` text NOT NULL,
  `xyz_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `view_xyz_sell_history`;
CREATE TABLE `view_xyz_sell_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `s_id` bigint(20) unsigned NOT NULL,
  `p_id` bigint(20) unsigned NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `s_code` varchar(10) NOT NULL,
  `xyz_price` decimal(10,2) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `xyz_centre`;
CREATE TABLE `xyz_centre` (
  `p_id` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `xyz_price_lists`;
CREATE TABLE `xyz_price_lists` (
  `p_id` char(36) NOT NULL,
  `s_id` bigint(20) unsigned NOT NULL,
  `p_price_list` decimal(10,2) NOT NULL,
  `xyz_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `xyz_price_lists_s_id_foreign` (`s_id`),
  CONSTRAINT `xyz_price_lists_s_id_foreign` FOREIGN KEY (`s_id`) REFERENCES `services_registry` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2023-06-14 09:05:06
