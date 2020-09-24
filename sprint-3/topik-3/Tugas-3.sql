-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: Kantor
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

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
-- Table structure for table `Karyawan`
--

DROP TABLE IF EXISTS `Karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(30) DEFAULT NULL,
  `Umur` int(11) DEFAULT NULL,
  `ID_Pekerjaan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ID_Pekerjaan` (`ID_Pekerjaan`),
  CONSTRAINT `Karyawan_ibfk_1` FOREIGN KEY (`ID_Pekerjaan`) REFERENCES `Pekerjaan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Karyawan`
--

LOCK TABLES `Karyawan` WRITE;
/*!40000 ALTER TABLE `Karyawan` DISABLE KEYS */;
INSERT INTO `Karyawan` VALUES (1,'Dinda',20,2),(2,'Yusuf',23,1),(3,'Ari',21,1),(4,'Anton',23,3),(5,'Arif',22,3),(6,'Bambang',22,3);
/*!40000 ALTER TABLE `Karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PIVOT`
--

DROP TABLE IF EXISTS `PIVOT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PIVOT` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Karyawan` int(11) DEFAULT NULL,
  `ID_Pekerjaan` int(11) DEFAULT NULL,
  `ID_Tempat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ID_Karyawan` (`ID_Karyawan`),
  KEY `ID_Pekerjaan` (`ID_Pekerjaan`),
  KEY `ID_Tempat` (`ID_Tempat`),
  CONSTRAINT `PIVOT_ibfk_1` FOREIGN KEY (`ID_Karyawan`) REFERENCES `Karyawan` (`id`),
  CONSTRAINT `PIVOT_ibfk_2` FOREIGN KEY (`ID_Pekerjaan`) REFERENCES `Pekerjaan` (`id`),
  CONSTRAINT `PIVOT_ibfk_3` FOREIGN KEY (`ID_Tempat`) REFERENCES `Tempat_Kerja` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PIVOT`
--

LOCK TABLES `PIVOT` WRITE;
/*!40000 ALTER TABLE `PIVOT` DISABLE KEYS */;
INSERT INTO `PIVOT` VALUES (1,1,2,3),(2,2,1,2),(3,3,1,2),(4,4,3,1),(5,5,3,1),(6,6,3,1);
/*!40000 ALTER TABLE `PIVOT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pekerjaan`
--

DROP TABLE IF EXISTS `Pekerjaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pekerjaan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pekerjaan`
--

LOCK TABLES `Pekerjaan` WRITE;
/*!40000 ALTER TABLE `Pekerjaan` DISABLE KEYS */;
INSERT INTO `Pekerjaan` VALUES (1,'Programmer'),(2,'Sekretaris'),(3,'Office Boy');
/*!40000 ALTER TABLE `Pekerjaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tempat_Kerja`
--

DROP TABLE IF EXISTS `Tempat_Kerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tempat_Kerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tempat` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tempat_Kerja`
--

LOCK TABLES `Tempat_Kerja` WRITE;
/*!40000 ALTER TABLE `Tempat_Kerja` DISABLE KEYS */;
INSERT INTO `Tempat_Kerja` VALUES (1,'Lantai 1'),(2,'Lantai 2'),(3,'Lantai 3');
/*!40000 ALTER TABLE `Tempat_Kerja` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-24  8:48:29
