-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: vet
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.13.04.1

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
-- Table structure for table `Type`
--

DROP TABLE IF EXISTS `Type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Type` (
  `idType` int(11) NOT NULL AUTO_INCREMENT,
  `nomType` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idType`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Type`
--

LOCK TABLES `Type` WRITE;
/*!40000 ALTER TABLE `Type` DISABLE KEYS */;
INSERT INTO `Type` VALUES (1,'robe'),(2,'pull'),(3,'jean');
/*!40000 ALTER TABLE `Type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Vetement`
--

DROP TABLE IF EXISTS `Vetement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Vetement` (
  `idVet` int(11) NOT NULL AUTO_INCREMENT,
  `nomVet` varchar(50) DEFAULT NULL,
  `idType` int(11) NOT NULL,
  `matiere` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idVet`),
  KEY `idType` (`idType`),
  CONSTRAINT `Vetement_ibfk_1` FOREIGN KEY (`idType`) REFERENCES `Type` (`idType`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vetement`
--

LOCK TABLES `Vetement` WRITE;
/*!40000 ALTER TABLE `Vetement` DISABLE KEYS */;
INSERT INTO `Vetement` VALUES (4,'robe d\'ete',1,'coton','rouge',3,'img1robe.jpg','img1robeD.jpg'),(5,'robe de soirée',1,'soie','bleu',5,'img2robe.jpg','img2robeD.jpg'),(6,'robe decontracte',1,'laine','vert',4,'img3robe.jpg','img3robeD.jpg'),(7,'pull doux',2,'laine','blanc',4,'img1pull.jpg',NULL),(8,'pull chaud',2,'laine','noir',4,'img2pull.jpg',NULL),(9,'pull troue',2,'cotton','rouge',1,'img3pull.jpg',NULL),(10,'jean confortable',3,'cotton','bleu',1,'img1jean.jpg',NULL),(11,'jean confortable',3,'cotton','bleu',1,'img2jean.jpg',NULL),(12,'jean confortable',3,'cotton','bleu',1,'img3jean.jpg',NULL),(14,'pull leopard',2,'synthetique','rose blanc',5,'img4pull.jpg',NULL);
/*!40000 ALTER TABLE `Vetement` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-31 16:20:23
