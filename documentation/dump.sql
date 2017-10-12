-- MySQL dump 10.16  Distrib 10.1.19-MariaDB, for Win32 (AMD64)
--
-- Host: tychoengberink.nl    Database: tychoengberink.nl
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `BestelRegel`
--

DROP TABLE IF EXISTS `BestelRegel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BestelRegel` (
  `bestelRegel_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Bestelling_bestelling_id` int(10) unsigned NOT NULL,
  `Product_product_id` int(10) unsigned NOT NULL,
  `naam` varchar(100) DEFAULT NULL,
  `prijs` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`bestelRegel_id`),
  KEY `fk_BestelRegel_Bestelling1_idx` (`Bestelling_bestelling_id`),
  KEY `fk_BestelRegel_Product1_idx` (`Product_product_id`),
  CONSTRAINT `fk_BestelRegel_Bestelling1` FOREIGN KEY (`Bestelling_bestelling_id`) REFERENCES `Bestelling` (`bestelling_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_BestelRegel_Product1` FOREIGN KEY (`Product_product_id`) REFERENCES `Product` (`product_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BestelRegel`
--

LOCK TABLES `BestelRegel` WRITE;
/*!40000 ALTER TABLE `BestelRegel` DISABLE KEYS */;
/*!40000 ALTER TABLE `BestelRegel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Bestelling`
--

DROP TABLE IF EXISTS `Bestelling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bestelling` (
  `bestelling_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Klant_klant_id` int(10) unsigned NOT NULL,
  `datum` datetime DEFAULT NULL,
  `status` enum('open','betaald','verzonden','ontvangen','geannuleerd') DEFAULT 'open',
  `bedrag` double(10,2) DEFAULT NULL,
  `voornaam` varchar(100) DEFAULT NULL,
  `achternaam` varchar(100) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `plaats` varchar(100) DEFAULT NULL,
  `land` char(2) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefoon` varchar(100) DEFAULT NULL,
  `bezorg_voornaam` varchar(100) DEFAULT NULL,
  `bezorg_achternaam` varchar(100) DEFAULT NULL,
  `bezorg_adres` varchar(100) DEFAULT NULL,
  `bezorg_postcode` varchar(10) DEFAULT NULL,
  `bezorg_plaats` varchar(100) DEFAULT NULL,
  `bezorg_land` char(2) DEFAULT NULL,
  PRIMARY KEY (`bestelling_id`),
  KEY `fk_Bestelling_Klant1_idx` (`Klant_klant_id`),
  CONSTRAINT `fk_Bestelling_Klant1` FOREIGN KEY (`Klant_klant_id`) REFERENCES `Klant` (`klant_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bestelling`
--

LOCK TABLES `Bestelling` WRITE;
/*!40000 ALTER TABLE `Bestelling` DISABLE KEYS */;
/*!40000 ALTER TABLE `Bestelling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HomePaginaItems`
--

DROP TABLE IF EXISTS `HomePaginaItems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HomePaginaItems` (
  `frontpageitem_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`frontpageitem_id`),
  CONSTRAINT `fk_homepageitemid_productid` FOREIGN KEY (`frontpageitem_id`) REFERENCES `Product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HomePaginaItems`
--

LOCK TABLES `HomePaginaItems` WRITE;
/*!40000 ALTER TABLE `HomePaginaItems` DISABLE KEYS */;
INSERT INTO `HomePaginaItems` VALUES (3);
/*!40000 ALTER TABLE `HomePaginaItems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Klant`
--

DROP TABLE IF EXISTS `Klant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Klant` (
  `klant_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(100) DEFAULT NULL,
  `achternaam` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `plaats` varchar(100) DEFAULT NULL,
  `land` char(2) DEFAULT NULL,
  `telefoon` varchar(20) DEFAULT NULL,
  `wachtwoord` varchar(150) DEFAULT NULL,
  `account_aangemaakt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `laatste_bestelling` datetime DEFAULT NULL,
  PRIMARY KEY (`klant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Klant`
--

LOCK TABLES `Klant` WRITE;
/*!40000 ALTER TABLE `Klant` DISABLE KEYS */;
INSERT INTO `Klant` VALUES (1,'Tycho','Engberink','\'rikie456@gmail.com','Carry van Bruggenstraat 29','7321JK','Apeldoorn','NL','0637448187','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','2017-10-06 14:07:07',NULL);
/*!40000 ALTER TABLE `Klant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Product`
--

DROP TABLE IF EXISTS `Product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ProductCategorie_productCategorie_id` int(10) unsigned NOT NULL,
  `online` enum('Y','N') DEFAULT 'Y',
  `naam` varchar(100) DEFAULT NULL,
  `descriptie` varchar(200) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `prijs` double(10,2) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `fk_Product_ProductCategorie_idx` (`ProductCategorie_productCategorie_id`),
  CONSTRAINT `fk_Product_ProductCategorie` FOREIGN KEY (`ProductCategorie_productCategorie_id`) REFERENCES `ProductCategorie` (`productCategorie_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Product`
--

LOCK TABLES `Product` WRITE;
/*!40000 ALTER TABLE `Product` DISABLE KEYS */;
INSERT INTO `Product` VALUES (3,1,'Y','Hertog Jan Grand Prestige 75CL','Hertog Jan Grand Prestige is een gerstewijn met een rijpe, volle smaak waarin zoet en bitter te onderscheiden zijn. De smaak wordt rijker met de jaren. Dit bier bevat 5 verschillende moutsoorten.',NULL,5.49,'1_stukinmnkraag.png'),(4,11,'N','Site Review','Voor site reviews.','0',9999.99,'geen');
/*!40000 ALTER TABLE `Product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProductCategorie`
--

DROP TABLE IF EXISTS `ProductCategorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductCategorie` (
  `productCategorie_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naam` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`productCategorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProductCategorie`
--

LOCK TABLES `ProductCategorie` WRITE;
/*!40000 ALTER TABLE `ProductCategorie` DISABLE KEYS */;
INSERT INTO `ProductCategorie` VALUES (1,'Bier'),(2,'Rode Wijn'),(3,'Witte Wijn'),(4,'Rosè Wijn'),(5,'Whisky'),(6,'Likeuren'),(7,'Cognac'),(8,'Port, Sherry'),(9,'Jenever, Bitter en Vieux'),(10,'Alcoholvrij'),(11,'Site Review');
/*!40000 ALTER TABLE `ProductCategorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reviews`
--

DROP TABLE IF EXISTS `Reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reviews` (
  `review_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `review_message` varchar(256) NOT NULL,
  `review_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `klant_id` int(10) unsigned NOT NULL,
  `subject_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `Reviews_Klant_klant_id_fk` (`klant_id`),
  KEY `Reviews_Product_product_id_fk` (`subject_id`),
  CONSTRAINT `Reviews_Klant_klant_id_fk` FOREIGN KEY (`klant_id`) REFERENCES `Klant` (`klant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Reviews_Product_product_id_fk` FOREIGN KEY (`subject_id`) REFERENCES `Product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reviews`
--

LOCK TABLES `Reviews` WRITE;
/*!40000 ALTER TABLE `Reviews` DISABLE KEYS */;
INSERT INTO `Reviews` VALUES (1,'Erg goede service en leuke mensen bij de klantenservice!','2017-10-06 14:09:35',1,4);
/*!40000 ALTER TABLE `Reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Transactie`
--

DROP TABLE IF EXISTS `Transactie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Transactie` (
  `transactie_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Bestelling_bestelling_id` int(10) unsigned NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `status` enum('open','afwachting','mislukt','geslaagd','geannuleerd','afgewezen') DEFAULT 'open',
  `bedrag` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`transactie_id`),
  KEY `fk_Transactie_Bestelling1_idx` (`Bestelling_bestelling_id`),
  CONSTRAINT `fk_Transactie_Bestelling1` FOREIGN KEY (`Bestelling_bestelling_id`) REFERENCES `Bestelling` (`bestelling_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Transactie`
--

LOCK TABLES `Transactie` WRITE;
/*!40000 ALTER TABLE `Transactie` DISABLE KEYS */;
/*!40000 ALTER TABLE `Transactie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-12 10:11:52
