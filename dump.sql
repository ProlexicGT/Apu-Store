-- MySQL dump 10.13  Distrib 8.0.39, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: apustore
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text,
  `image_path` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Backpack','Accessories','Designed for students who value style and sustainability. Crafted from 60% recycled materials, this backpack not only looks great but also helps reduce your carbon footprint.','/src/store/backpack.png',150.00),(2,'Bottle','Accessories','Perfect companion for every adventure, whether you are hitting the gym, heading to class, or enjoying a weekend getaway. Designed using non toxic and BPA-free materials for long term usage.','/src/store/bottle.png',25.00),(3,'Tote Bag','Accessories','Perfect for university, shopping, or a day at the beach. This versatile bag combines functionality with a commitment to the environment. Canvas material is made using sustainably sourced cotton.','/src/store/totebag.png',15.00),(4,'Hat','Clothing','Designed for students who want to look good while making a positive impact on the planet. Perfect for outdoor adventures, casual outings, or simply keeping the sun at bay. Made using eco-friendly materials.','/src/store/hat.png',20.00),(5,'Neck Tie','Clothing','Whether for a formal event or a special occasion, this tie adds a touch of class while promoting sustainable practices. Material is made using 70% recycled fabrics sourced from local farmers.','/src/store/necktie.png',30.00),(6,'T-Shirt','Clothing','Designed for students who value fashion and sustainability. Perfect for everyday wear, this versatile tee is a must-have for any wardrobe. T-Shirt material is made using sustainably sourced cotton.','/src/store/tshirt.png',120.00),(7,'Book','Stationary','The perfect companion for students who loves to jot down thoughts, ideas, and dreams. This notebook is as good for the planet as it is for your mind. Paper is made using 80% recycled fiber and pulp.','/src/store/book.png',10.00),(8,'Calculator','Stationary','The perfect tool for students. This calculator not only helps you crunch numbers but also supports eco-friendly practices. Casing is made using recycled plastic bottles sourced responsibly.','/src/store/calculator.png',45.00),(9,'Pen','Stationary','Manufactured with sustainable materials, this pen delivers a smooth and reliable writing experience. Body is made using recycled plastic sourced sustainably from landfills.','/src/store/pen.png',5.00);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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

-- Dump completed on 2024-10-27 22:30:57
