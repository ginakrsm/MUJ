# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: cv_muj
# Generation Time: 2020-09-17 03:57:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ambulances
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ambulances`;

CREATE TABLE `ambulances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_ambulance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `ambulances` WRITE;
/*!40000 ALTER TABLE `ambulances` DISABLE KEYS */;

INSERT INTO `ambulances` (`id`, `created_at`, `updated_at`, `nama_ambulance`, `harga_jual`, `harga_beli`)
VALUES
	(1,'2020-09-16 17:27:19','2020-09-16 17:28:09','Ambulance 3+',40600000,32600000),
	(2,'2020-09-16 17:27:50','2020-09-16 17:27:50','Ambulance 3',37000000,27000000);

/*!40000 ALTER TABLE `ambulances` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bank_accounts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bank_accounts`;

CREATE TABLE `bank_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_bank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `no_rek` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atas_nama_rekening` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `bank_accounts` WRITE;
/*!40000 ALTER TABLE `bank_accounts` DISABLE KEYS */;

INSERT INTO `bank_accounts` (`id`, `created_at`, `updated_at`, `nama_bank`, `id_company`, `no_rek`, `atas_nama_rekening`, `cabang`)
VALUES
	(1,'2020-09-16 17:25:58','2020-09-16 17:25:58','Bank BCA',1,'11193012931','Muhammad Ramdhan Syakirin','Taman Galaxy');

/*!40000 ALTER TABLE `bank_accounts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table companies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `npwp_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_company` text COLLATE utf8mb4_unicode_ci,
  `email_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telpon_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;

INSERT INTO `companies` (`id`, `created_at`, `updated_at`, `nama_company`, `detail`, `npwp_company`, `alamat_company`, `email_company`, `no_telpon_company`)
VALUES
	(1,'2020-09-16 17:24:58','2020-09-16 17:24:58','Codebreeder','Startup yang bergerak di bidang IT','11119999','Perumahan Pesona Jatiasih Permai','codebreeder@gmail.com','0895349417505');

/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_customer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `no_telpon_customer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`id`, `created_at`, `updated_at`, `nama_customer`, `id_company`, `no_telpon_customer`)
VALUES
	(1,'2020-09-16 17:26:42','2020-09-16 17:26:42','Muhammad Ramdhan Syakirin',1,'0895349417505');

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table medical_equipments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `medical_equipments`;

CREATE TABLE `medical_equipments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_equipment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `medical_equipments` WRITE;
/*!40000 ALTER TABLE `medical_equipments` DISABLE KEYS */;

INSERT INTO `medical_equipments` (`id`, `created_at`, `updated_at`, `nama_equipment`, `harga_jual`, `harga_beli`)
VALUES
	(1,'2020-09-16 17:28:39','2020-09-16 17:28:39','Emergency Kit',16500000,7750000),
	(2,'2020-09-16 17:28:59','2020-09-16 17:28:59','Pusling Kit',16500000,7750000);

/*!40000 ALTER TABLE `medical_equipments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2020_09_16_233319_create_ambulances_table',1),
	(3,'2020_09_16_233330_create_orders_table',1),
	(4,'2020_09_16_233339_create_order_details_table',1),
	(5,'2020_09_16_233347_create_customers_table',1),
	(6,'2020_09_16_233356_create_bank_accounts_table',1),
	(7,'2020_09_16_233406_create_companies_table',1),
	(8,'2020_09_16_233423_create_medical_equipments_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table order_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order_details`;

CREATE TABLE `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_equipment` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;

INSERT INTO `order_details` (`id`, `created_at`, `updated_at`, `id_equipment`, `id_order`, `harga`)
VALUES
	(1,'2020-09-16 18:24:39','2020-09-16 18:24:39',1,1,16500000);

/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_ambulance` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_bank_account` int(11) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `id_ambulance`, `id_customer`, `id_bank_account`, `tanggal_transaksi`, `total_bayar`, `bukti_pembayaran`)
VALUES
	(1,'2020-09-16 18:24:27','2020-09-16 19:49:39',1,1,1,'2020-09-17',57100000,'5.png');

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `id_role`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Admin','admin@admin.com',1,'$2y$10$GstYIPMqlssCFWgyalHIUuJsk0kmnD2P9Tq5biv8pGNDwJIJ2.9Vm','v6ZWrkkOzanEyWJYZ0N6JNiRSKWWQ3JTWktOsx1NKQlQjtKBwxLCQ5dYZ9AX',NULL,NULL),
	(2,'Owner','owner@mail.com',2,'$2y$10$GstYIPMqlssCFWgyalHIUuJsk0kmnD2P9Tq5biv8pGNDwJIJ2.9Vm','h3Tw1z2fYj3YvfXUEvfcpr134y0rOU5lNTiwsir4RIgN8dHvh15cN4dvkST1',NULL,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
