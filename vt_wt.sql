CREATE DATABASE  IF NOT EXISTS `vt_wt` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `vt_wt`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: vt_wt
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contactanos`
--

DROP TABLE IF EXISTS `contactanos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactanos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distrito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `canton` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contactanos_email_index` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactanos`
--

LOCK TABLES `contactanos` WRITE;
/*!40000 ALTER TABLE `contactanos` DISABLE KEYS */;
INSERT INTO `contactanos` VALUES (1,'Andres','Marchena','Mendez','','Liberia','Guanacaste','caliche@hotmail.com','20357','2020-11-14 02:49:03','2020-11-14 02:49:03'),(2,'José','Yoshino','Gutierrez','','Carrillo','Puntarenas','takigawa@yahoo.com','10962','2020-11-14 03:40:38','2020-11-14 03:40:38'),(3,'Gregorio','Sanchés','Castro','3','9','5','qgresan@gmail.com','52819','2020-11-14 06:30:02','2020-11-14 06:30:02'),(4,'José','Yoshino','Gutierrez','2','8','5','tono@gmail.com','50201','2020-11-14 07:58:43','2020-11-14 07:58:43'),(5,'Francini Paola','Obregón','Pérez','8','9','5','fran.21.obreper@gmail.com','50201','2020-11-17 05:38:47','2020-11-17 05:38:47'),(6,'George','Fernandez','Castro','1','9','5','goergem@gmail.com','50201','2020-11-17 06:42:22','2020-11-17 06:42:22');
/*!40000 ALTER TABLE `contactanos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrovoluntario`
--

DROP TABLE IF EXISTS `registrovoluntario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrovoluntario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distrito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `canton` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registrovoluntario_email_index` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrovoluntario`
--

LOCK TABLES `registrovoluntario` WRITE;
/*!40000 ALTER TABLE `registrovoluntario` DISABLE KEYS */;
INSERT INTO `registrovoluntario` VALUES (1,504090588,'Ezau','Zuñiga','Mendoza','san jose','san jose','guanacaste','74652476','jose@gmail.com','Hombre','Por que sí',NULL,NULL),(2,504090588,'Tono','Morales','Gutierrez','alajuela','san jose','guanacaste','67584987','tono@gmail.com','Niño/a','¡Para ayudar!','2020-11-12 08:16:21','2020-11-12 08:16:21'),(3,504750051,'Desi','Zuñiga','Mendezo','SM','san jose','san jose','45678934','desi@gmail.com','Mujer','Por que si','2020-11-13 12:38:13','2020-11-13 12:38:13'),(4,508760465,'Andre','Barquero','Garro','5','1','5','56748902','andre@gmail.com','Hombre','Quiero ayudar','2020-11-14 05:51:29','2020-11-14 05:51:29'),(5,503475549,'Andre','Sanchés','Mendoza','3','9','5','67584987','takigawa@yahoo.com','Mujer','Por que sí','2020-11-14 07:54:01','2020-11-14 07:54:01'),(6,532643764,'Haydee','Zuñiga','Gutierrez','1','9','5','588348374','jose@gmail.com','Mujer','Por que si','2020-11-14 08:38:15','2020-11-14 08:38:15'),(7,502450768,'Johan','Matarrita','Briones','3','9','5','75647839','gohan@hotmail.com','Niño/a','Para  ayudar al ambiente!!!','2020-11-17 03:32:21','2020-11-17 03:32:21'),(8,102340876,'Johan','Matarrita','Briones','3','7','5','74652476','gohan@hotmail.com','Hombre','Por que sí','2020-11-17 03:35:12','2020-11-17 03:35:12'),(9,503450567,'Johan','Marchena','Mendoza','6','9','5','74652476','gohan@hotmail.com','Niño/a','Por que s quiero','2020-11-17 03:38:10','2020-11-17 03:38:10'),(10,503250675,'Johan','Yoshino','Mendez','3','11','5','87543212','mendez@gmail.com','Hombre','Para colaborar con la naturaleza!','2020-11-17 03:47:00','2020-11-17 03:47:00'),(11,503250675,'Johan','Yoshino','Mendez','3','11','5','87543212','mendez@gmail.com','Hombre','Para colaborar con la naturaleza!','2020-11-17 03:47:16','2020-11-17 03:47:16'),(12,501230546,'Johan','Yoshino','Garro','3','3','5','67584983','takigawagoha@yahoo.com','Hombre','Por que es deber de todos!','2020-11-17 03:52:59','2020-11-17 03:52:59'),(13,204660673,'Andreina','Castro','Pereira','4','7','5','86478934','pereira@gmail.com','Mujer','Quiero contribuir con la naturaleza','2020-11-17 04:25:11','2020-11-17 04:25:11'),(14,502450375,'Paola','Zúñiga','Mendoza','8','9','5','64156278','zunidesi@gmail.com','Mujer','Para ser mejor persona','2020-11-17 04:42:37','2020-11-17 04:42:37'),(16,209350456,'Kathe','Macorrone','Briones','1','9','5','65748349','macorrone@gmail.com','Mujer','Para contribuir con la naturaleza!','2020-11-17 04:53:47','2020-11-17 04:53:47'),(18,207890456,'Enol','García','Mendez','4','4','5','86478945','leonleno@gmail.com','Hombre','Para ayudar a la comunidad!','2020-11-17 05:15:35','2020-11-17 05:15:35'),(20,502320976,'Gregorio','Sanchés','Mendoza','1','9','5','68562390','golli@gmail.com','Hombre','Para ayudar al medio ambiente!','2020-11-17 05:23:17','2020-11-17 05:23:17'),(21,209870456,'Jose Fabian','Cardenas','Ortiz','1','9','5','75647839','byure@gmail.com','Hombre','Por quiero hacer la diferencia!','2020-11-17 05:25:24','2020-11-17 05:25:24'),(22,308760567,'Giselle','Carrillo','Alvarez','1','9','5','67584987','caliche@hotmai.com','Mujer','Para ayudar al ambiente','2020-11-17 05:28:26','2020-11-17 05:28:26');
/*!40000 ALTER TABLE `registrovoluntario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitartransporte`
--

DROP TABLE IF EXISTS `solicitartransporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitartransporte` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitartransporte`
--

LOCK TABLES `solicitartransporte` WRITE;
/*!40000 ALTER TABLE `solicitartransporte` DISABLE KEYS */;
INSERT INTO `solicitartransporte` VALUES (1,504350789,'Francini','Obregón','Peréz','Botellas Plasticas','MEDIA','Nicoya, San Martín','2020-11-13 13:27:04','2020-11-13 13:27:04'),(2,504090588,'José','Yoshino','Men','Papel/Carton','MEDIA','Nicoya centro','2020-11-13 23:02:22','2020-11-13 23:02:22'),(3,504050534,'Andres','Marchena','Gutierrez','Papel/Carton','MUCHA','Nicoya centro','2020-11-14 07:58:10','2020-11-14 07:58:10'),(4,407500768,'Carmen','Maquez','Suancho','Vidrio','MUCHA','Nicoya, San Matín, Bº Calderon Furnier.','2020-11-17 05:41:25','2020-11-17 05:41:25');
/*!40000 ALTER TABLE `solicitartransporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ezau','','joseuaze@gmail.com',NULL,'$2y$10$6a8uMCIpcPbTTH/DJaJqtOy4Iv.gsej0CXqL4OS2VxYE7Bj1lEKDq','0OscubbVmyPB5bO04nLkxbSYdpwh4OS6JGIjh8z3iT8bxTmpLn7AK3smhyCM','2020-11-12 04:40:36','2020-11-12 04:40:36'),(2,'Ezau José','F21E26','joseuaze22@gmail.com',NULL,'$2y$10$munNcotHlLtsmowV6NNQB.ULhS0KNQI7Hl2mc4L//5.4wNnlWuyB2','8GaBsfwiquI2kOCJIyVURJiomUYP0VEPj8DmID3pHnJ6K5nlHvTpxlOhzsTD','2020-11-17 06:20:28','2020-11-17 06:20:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'vt_wt'
--

--
-- Dumping routines for database 'vt_wt'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-16 17:58:33
