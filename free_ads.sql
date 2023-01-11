-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: free_ads
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_category_id_foreign` (`category_id`),
  CONSTRAINT `ads_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ads_users`
--

DROP TABLE IF EXISTS `ads_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ads_users` (
  `annonces_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  KEY `ads_users_annonces_id_foreign` (`annonces_id`),
  CONSTRAINT `ads_users_annonces_id_foreign` FOREIGN KEY (`annonces_id`) REFERENCES `ads` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads_users`
--

LOCK TABLES `ads_users` WRITE;
/*!40000 ALTER TABLE `ads_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `ads_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_ref` int unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `parent_id` smallint unsigned NOT NULL,
  `parent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,1,'furniture',1,'home','2022-03-07 09:38:44','2022-03-07 09:38:48'),(2,2,'home appliance',1,'home','2022-03-07 09:38:55','2022-03-07 09:38:55'),(3,3,'decoration',1,'home','2022-03-07 09:39:26','2022-03-07 09:39:26'),(4,4,'garden',1,'home','2022-03-07 09:40:00','2022-03-07 09:40:00'),(5,5,'tools',1,'home','2022-03-07 09:40:30','2022-03-07 09:40:30'),(6,1,'books',2,'hobbies','2022-03-07 09:41:06','2022-03-07 09:41:06'),(7,2,'music',2,'hobbies','2022-03-07 09:41:51','2022-03-07 09:41:51'),(8,3,'DVD/games',2,'hobbies','2022-03-07 09:42:21','2022-03-07 09:42:21'),(9,4,'sport',2,'hobbies','2022-03-07 09:43:23','2022-03-07 09:43:23'),(10,5,'collections',2,'hobbies','2022-03-07 09:44:04','2022-03-07 09:44:04'),(11,1,'clothing',3,'fashion','2022-03-07 09:44:48','2022-03-07 09:44:48'),(12,2,'shoes',3,'fashion','2022-03-07 09:45:24','2022-03-07 09:45:24'),(13,3,'Accessoires & luggage items',3,'fashion','2022-03-07 09:48:57','2022-03-07 09:49:01'),(14,4,'Watches & jewelry',3,'fashion','2022-03-07 09:49:12','2022-03-07 09:49:12'),(15,5,'luxury brands',3,'fashion','2022-03-07 09:49:53','2022-03-07 09:49:53'),(16,1,'cars',4,'vehicles','2022-03-07 09:50:33','2022-03-07 09:50:33'),(17,2,'motobikes',4,'vehicles','2022-03-07 09:51:04','2022-03-07 09:51:04'),(18,3,'equipement',4,'vehicles','2022-03-07 09:51:34','2022-03-07 09:51:34'),(19,4,'campers',4,'vehicles','2022-03-07 09:52:08','2022-03-07 09:52:08'),(20,5,'trucks',4,'vehicles','2022-03-07 09:52:55','2022-03-07 09:52:55'),(21,1,'family & care services',5,'services','2022-03-07 09:53:28','2022-03-07 09:53:28'),(22,2,'education & languages',5,'services','2022-03-07 09:54:10','2022-03-07 09:54:10'),(23,3,'transport',5,'services','2022-03-07 09:54:49','2022-03-07 09:54:49'),(24,4,'fitness',5,'services','2022-03-07 09:55:18','2022-03-07 09:55:18'),(25,5,'pets animals farming',5,'services','2022-03-07 09:55:56','2022-03-07 09:55:56');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2022_03_02_170511_create_users_table',1),(2,'2022_03_02_184419_create_category_table',1),(3,'2022_03_02_184725_create_annonces_table',1),(4,'2022_03_02_185232_create_ads_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nickname_unique` (`nickname`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-07 11:01:24
