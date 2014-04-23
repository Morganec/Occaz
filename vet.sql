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
INSERT INTO `Type` VALUES (1,'robes'),(2,'pulls'),(3,'pantalons'),(4,'vestes'),(5,'Tops'),(6,'pijamas'),(7,'sac a dos'),(8,'sac a main');
/*!40000 ALTER TABLE `Type` ENABLE KEYS */;
UNLOCK TABLES;




--
-- Table structure for table `Taille`
--

DROP TABLE IF EXISTS `Taille`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Taille` (
  `idTaille` int(11) NOT NULL AUTO_INCREMENT,
  `nomTaille` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTaille`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Taille`
--




LOCK TABLES `Taille` WRITE;
/*!40000 ALTER TABLE `Taille` DISABLE KEYS */;
INSERT INTO `Taille` VALUES (1,'34'),(2,'36'),(3,'38'),(4,'40'),(5,'42'),(6,'44'),(7,'46');
/*!40000 ALTER TABLE `Taille` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Genre`
--

DROP TABLE IF EXISTS `Genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Genre` (
  `idGenre` int(11) NOT NULL AUTO_INCREMENT,
  `nomGenre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idGenre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Genre`
--




LOCK TABLES `Genre` WRITE;
/*!40000 ALTER TABLE `Genre` DISABLE KEYS */;
INSERT INTO `Genre` VALUES (1,'femme'),(2,'homme'),(3,'sac');
/*!40000 ALTER TABLE `Genre` ENABLE KEYS */;
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
  `idTaille` int(11) NOT NULL,
  `idGenre` int(11) NOT NULL,
  `marque` boolean,
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

INSERT INTO `Vetement` VALUES (null,'robe d\'ete',1,1,1,false,'coton','rouge',3,'img1robe.jpg','img1robeD.jpg'),(null,'robe de soirée',1,2,1,true,'soie','bleu',5,'img2robe.jpg','img2robeD.jpg'),(null,'robe decontracte',1,4,1,false,'laine','vert',4,'img3robe.jpg','img3robeD.jpg'),(null,'pull doux',2,6,1,false,'laine','blanc',4,'img1pull.jpg',NULL),(null,'pull chaud',2,4,1,true,'laine','noir',4,'img2pull.jpg',NULL),(null,'pull troue',2,1,1,true,'cotton','rouge',1,'img3pull.jpg',NULL),(null,'jean confortable',3,2,2,true,'cotton','bleu',1,'img1jean.jpg',NULL),(null,'jean confortable',3,6,2,false,'cotton','bleu',1,'img2jean.jpg',NULL),(null,'jean confortable',3,5,2,false,'cotton','bleu',1,'img3jean.jpg',NULL),(null,'pull leopard',2,1,1,true,'synthetique','rose blanc',5,'img4pull.jpg',NULL);

UNLOCK TABLES;

