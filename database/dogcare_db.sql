-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: dogcare
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gejalas`
--

DROP TABLE IF EXISTS `gejalas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gejalas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gejalas_kode_unique` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gejalas`
--

LOCK TABLES `gejalas` WRITE;
/*!40000 ALTER TABLE `gejalas` DISABLE KEYS */;
INSERT INTO `gejalas` VALUES (1,'G1','bersembunyi di tempat sunyi','2023-10-31 14:28:07','2023-10-31 14:28:07'),(2,'G2','berlari kian kemari atau terlihat gelisah','2023-10-31 14:28:07','2023-10-31 14:28:07'),(3,'G3','cepat marah','2023-10-31 14:28:07','2023-10-31 14:28:07'),(4,'G4','mengeluarkan air liur','2023-10-31 14:28:07','2023-10-31 14:28:07'),(5,'G5','menolak makanan normal','2023-10-31 14:28:07','2023-10-31 14:28:07'),(6,'G6','takut terhadap air','2023-10-31 14:28:07','2023-10-31 14:28:07'),(7,'G7','terjadi pembengkakan hati','2023-10-31 14:28:07','2023-10-31 14:28:07'),(8,'G8','muntah-muntah','2023-10-31 14:28:07','2023-10-31 14:28:07'),(9,'G9','terjadi dehidrasi yang tinggi','2023-10-31 14:28:07','2023-10-31 14:28:07'),(10,'G10','demam','2023-10-31 14:28:07','2023-10-31 14:28:07'),(11,'G11','batuk','2023-10-31 14:28:07','2023-10-31 14:28:07'),(12,'G12','bagian perut melepuh dan bernanah','2023-10-31 14:28:07','2023-10-31 14:28:07'),(13,'G13','keluar cairan dari mata','2023-10-31 14:28:07','2023-10-31 14:28:07'),(14,'G14','sesak nafas','2023-10-31 14:28:07','2023-10-31 14:28:07'),(15,'G15','keluar cairan dari hidung','2023-10-31 14:28:07','2023-10-31 14:28:07'),(16,'G16','terjadi kelesuan','2023-10-31 14:28:07','2023-10-31 14:28:07'),(17,'G17','hilang nafsu makan','2023-10-31 14:28:07','2023-10-31 14:28:07'),(18,'G18','kotoran ada darah','2023-10-31 14:28:07','2023-10-31 14:28:07'),(19,'G19','anak anjing tidak mau menyusui','2023-10-31 14:28:07','2023-10-31 14:28:07'),(20,'G20','kotoran mengeluarkan bau khas','2023-10-31 14:28:07','2023-10-31 14:28:07'),(21,'G21','sering meraung-raung','2023-10-31 14:28:07','2023-10-31 14:28:07'),(22,'G22','adanya kutil di bagian mulut','2023-10-31 14:28:07','2023-10-31 14:28:07'),(23,'G23','nafas anjing bau','2023-10-31 14:28:07','2023-10-31 14:28:07'),(24,'G24','anjing sering menggaruk-garuk','2023-10-31 14:28:07','2023-10-31 14:28:07'),(25,'G25','pada permukaan kulit akan terlihat kutu berkelompok','2023-10-31 14:28:07','2023-10-31 14:28:07'),(26,'G26','kerontokan bulu anjing','2023-10-31 14:28:07','2023-10-31 14:28:07'),(27,'G27','kulit terlihat berkerak','2023-10-31 14:28:07','2023-10-31 14:28:07'),(28,'G28','sering menggigit daerah yang iritasi','2023-10-31 14:28:07','2023-10-31 14:28:07'),(29,'G29','sering menggeleng-gelengkan kepala','2023-10-31 14:28:07','2023-10-31 14:28:07'),(30,'G30','menggigil','2023-10-31 14:28:07','2023-10-31 14:28:07'),(31,'G31','suhu badan tidak stabil','2023-10-31 14:28:07','2023-10-31 14:28:07');
/*!40000 ALTER TABLE `gejalas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keputusans`
--

DROP TABLE IF EXISTS `keputusans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `keputusans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_gejala` bigint NOT NULL,
  `id_penyakit` bigint NOT NULL,
  `nilai_cf` decimal(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keputusans`
--

LOCK TABLES `keputusans` WRITE;
/*!40000 ALTER TABLE `keputusans` DISABLE KEYS */;
INSERT INTO `keputusans` VALUES (1,1,1,0.80,NULL,NULL),(2,2,1,0.80,NULL,NULL),(3,3,1,0.90,NULL,NULL),(4,4,1,0.90,NULL,NULL),(5,5,1,0.70,NULL,NULL),(6,6,1,0.90,NULL,NULL),(7,7,2,0.90,NULL,NULL),(8,8,2,0.30,NULL,NULL),(9,9,2,0.40,NULL,NULL),(10,10,2,0.40,NULL,NULL),(11,8,3,0.30,NULL,NULL),(12,10,3,0.40,NULL,NULL),(13,11,3,0.60,NULL,NULL),(14,12,3,0.80,NULL,NULL),(15,13,3,0.80,NULL,NULL),(16,14,3,0.80,NULL,NULL),(17,8,4,0.30,NULL,NULL),(18,9,4,0.40,NULL,NULL),(19,10,4,0.40,NULL,NULL),(20,15,4,0.20,NULL,NULL),(21,17,4,0.40,NULL,NULL),(22,18,4,0.00,NULL,NULL),(23,19,4,0.80,NULL,NULL),(24,8,5,0.30,NULL,NULL),(25,15,5,0.20,NULL,NULL),(26,20,5,0.80,NULL,NULL),(27,21,5,0.80,NULL,NULL),(28,22,6,0.90,NULL,NULL),(29,23,6,0.90,NULL,NULL),(30,8,7,0.30,NULL,NULL),(31,9,7,0.40,NULL,NULL),(32,10,7,0.40,NULL,NULL),(33,15,7,0.20,NULL,NULL),(34,30,7,0.80,NULL,NULL),(35,11,8,0.30,NULL,NULL),(36,15,8,0.20,NULL,NULL),(37,16,8,0.40,NULL,NULL),(38,17,8,0.40,NULL,NULL),(39,31,8,0.80,NULL,NULL),(40,24,9,0.40,NULL,NULL),(41,25,9,0.80,NULL,NULL),(42,26,9,0.80,NULL,NULL),(43,27,9,0.80,NULL,NULL),(44,24,10,0.40,NULL,NULL),(45,28,10,0.70,NULL,NULL),(46,29,10,0.70,NULL,NULL);
/*!40000 ALTER TABLE `keputusans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kondisis`
--

DROP TABLE IF EXISTS `kondisis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kondisis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` decimal(3,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kondisis`
--

LOCK TABLES `kondisis` WRITE;
/*!40000 ALTER TABLE `kondisis` DISABLE KEYS */;
INSERT INTO `kondisis` VALUES (1,'Tidak Tahu',0.00,'2023-10-31 14:28:08','2023-10-31 14:28:08'),(2,'Tidak Yakin',0.20,'2023-10-31 14:28:08','2023-10-31 14:28:08'),(3,'Mungkin',0.40,'2023-10-31 14:28:08','2023-10-31 14:28:08'),(4,'Kemungkinan Besar',0.60,'2023-10-31 14:28:08','2023-10-31 14:28:08'),(5,'Hampir Pasti',0.80,'2023-10-31 14:28:08','2023-10-31 14:28:08'),(6,'Pasti',1.00,'2023-10-31 14:28:08','2023-10-31 14:28:08');
/*!40000 ALTER TABLE `kondisis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penyakits`
--

DROP TABLE IF EXISTS `penyakits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penyakits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `penyakits_kode_unique` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penyakits`
--

LOCK TABLES `penyakits` WRITE;
/*!40000 ALTER TABLE `penyakits` DISABLE KEYS */;
INSERT INTO `penyakits` VALUES (1,'P1','Rabies','Virus','2023-10-31 14:28:07','2023-10-31 14:28:07'),(2,'P2','Hepatitis','Virus','2023-10-31 14:28:07','2023-10-31 14:28:07'),(3,'P3','Distemper','Virus','2023-10-31 14:28:07','2023-10-31 14:28:07'),(4,'P4','Canine Parvovirus','Virus','2023-10-31 14:28:07','2023-10-31 14:28:07'),(5,'P5','Papilomatosis','Virus','2023-10-31 14:28:07','2023-10-31 14:28:07'),(6,'P6','Herpesvirus','Virus','2023-10-31 14:28:07','2023-10-31 14:28:07'),(7,'P7','Leptospirosis','Bakteri','2023-10-31 14:28:07','2023-10-31 14:28:07'),(8,'P8','Dirofilaria immitis','Bakteri','2023-10-31 14:28:07','2023-10-31 14:28:07'),(9,'P9','Scabies','Kutu','2023-10-31 14:28:07','2023-10-31 14:28:07'),(10,'P10','Pruritus','Bakteri','2023-10-31 14:28:07','2023-10-31 14:28:07');
/*!40000 ALTER TABLE `penyakits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'rian','rian@gmail.com',NULL,'$2y$10$gXjY7L3B0x8RPOQaM/pGpuwlAxLcNDo1Cs5F4hXKAfnPtJCCAhnGu',NULL,'2023-11-01 02:34:24','2023-11-01 02:34:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'dogcare'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-10 15:20:44
