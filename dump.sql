-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `film_personnage`
--

DROP TABLE IF EXISTS `film_personnage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film_personnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` varchar(45) NOT NULL,
  `personnage_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film_personnage`
--

LOCK TABLES `film_personnage` WRITE;
/*!40000 ALTER TABLE `film_personnage` DISABLE KEYS */;
INSERT INTO `film_personnage` VALUES (10,'4','1'),(11,'4','2'),(12,'3','23'),(13,'2','24'),(14,'4','24'),(17,'1','25'),(18,'2','25'),(19,'3','25'),(20,'4','25'),(21,'1','26'),(22,'2','26'),(23,'3','26'),(24,'4','26'),(25,'1','27'),(26,'2','27'),(27,'3','27'),(28,'4','27'),(29,'1','28'),(30,'2','28'),(31,'3','28'),(32,'1','29'),(33,'2','29'),(34,'3','29'),(35,'1','30'),(36,'2','30'),(37,'3','30'),(38,'1','31');
/*!40000 ALTER TABLE `film_personnage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'Retour vers le futur 1'),(2,'Retour vers le futur 2'),(3,'Retour vers le futur 3'),(4,'Retour vers le futur 4');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnages`
--

DROP TABLE IF EXISTS `personnages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `mort` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnages`
--

LOCK TABLES `personnages` WRITE;
/*!40000 ALTER TABLE `personnages` DISABLE KEYS */;
INSERT INTO `personnages` VALUES (26,'Michael J. Fox','Marty McFly',17,NULL),(27,'Christopher Lloyd','Doc',71,NULL),(28,'Thomas Francis Wilson Jr','Biff Tannen',49,NULL),(29,'Claudia Wells','Jennifer Parker',17,NULL),(30,'Crispin Glover','George McFly',47,NULL),(31,'Donald Fullilove','Goldie Wilson',52,NULL);
/*!40000 ALTER TABLE `personnages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexes`
--

DROP TABLE IF EXISTS `sexes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sexes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexe` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexes`
--

LOCK TABLES `sexes` WRITE;
/*!40000 ALTER TABLE `sexes` DISABLE KEYS */;
INSERT INTO `sexes` VALUES (1,'F'),(2,'M');
/*!40000 ALTER TABLE `sexes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-15 13:16:21
