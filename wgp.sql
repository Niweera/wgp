-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: niwder.me    Database: web
-- ------------------------------------------------------
-- Server version	5.7.22

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
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `cityname` varchar(255) NOT NULL,
  PRIMARY KEY (`cityname`),
  UNIQUE KEY `cityname` (`cityname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES ('Anuradhapura'),('Colombo'),('Galle'),('Gampaha'),('Hambantota'),('Kalutara'),('Kandy'),('Kurunegala'),('Matara'),('Ratnapura');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ContactNo` int(11) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `CuID` int(255) NOT NULL AUTO_INCREMENT,
  `CustID` varchar(255) NOT NULL,
  PRIMARY KEY (`CuID`),
  UNIQUE KEY `CustID` (`CustID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('W.M.D.N.L.','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$3c/hGEbBlFW9hL9upueHueYvqDtda3LNUkPNTn40beDpDAOcCgAGe',1,'Niweera'),('Nipuna','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$TLmvFRB8z2eHUT49pCaFbeTIzuoHSnZ35PMJo61/iuF6hIVBmUqMK',2,'Niweera2'),('Nipuna2','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$sQJuQekJeZhcfF03Wn9Tq./O6SvpeRTZvLJ0seHB9.w3/QtkrBq2i',3,'Niweera3');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill` (
  `SkID` varchar(255) NOT NULL,
  `SkillName` varchar(255) NOT NULL,
  PRIMARY KEY (`SkID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` VALUES ('Carp001','Wood works'),('Elec001','Wiring'),('Ittc001','PC Troubleshooting'),('Ittc002','Virus Removing'),('Mech001','Tinkering'),('Plum001','Pipelining'),('Plum002','Pipefitting');
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `technician`
--

DROP TABLE IF EXISTS `technician`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `technician` (
  `TechID` varchar(255) CHARACTER SET latin1 NOT NULL,
  `FirstName` varchar(255) CHARACTER SET latin1 NOT NULL,
  `LastName` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `ContactNo` int(11) DEFAULT NULL,
  `Password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  PRIMARY KEY (`TechID`) USING BTREE,
  KEY `cityfk` (`City`),
  KEY `ocpfk` (`Occupation`),
  CONSTRAINT `cityfk` FOREIGN KEY (`City`) REFERENCES `city` (`cityname`),
  CONSTRAINT `ocpfk` FOREIGN KEY (`Occupation`) REFERENCES `techtype` (`typename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `technician`
--

LOCK TABLES `technician` WRITE;
/*!40000 ALTER TABLE `technician` DISABLE KEYS */;
INSERT INTO `technician` VALUES ('Niweera','Nipuna Lakshitha ','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$eg.dbZlp0pnINjt6clIBLuE2DdE/vJYOWzfa3O7L0vjH5agP64DXG','Electrician','Kalutara'),('Niweera22','Nipuna','Weerasekara','nipuna@gmail.com',766419485,'$2y$10$FjEhX.rlE8R10L8vljG3BeyHGSTxXAziiCgWEdeFLaMwMnUS/FA2.','Electrician','Colombo'),('Niweera222','Nipuna','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$LlHB8QpGTfIF8XHPgcbx2Oum2xGhySmAu9KbymEE1a.vU4oie/f2C','Plumber','Galle');
/*!40000 ALTER TABLE `technician` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `techskill`
--

DROP TABLE IF EXISTS `techskill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `techskill` (
  `TechID` varchar(255) NOT NULL,
  `SkID` varchar(255) NOT NULL,
  PRIMARY KEY (`TechID`,`SkID`),
  KEY `techrel` (`SkID`),
  CONSTRAINT `techrel` FOREIGN KEY (`SkID`) REFERENCES `skill` (`SkID`),
  CONSTRAINT `techrel2` FOREIGN KEY (`TechID`) REFERENCES `technician` (`TechID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `techskill`
--

LOCK TABLES `techskill` WRITE;
/*!40000 ALTER TABLE `techskill` DISABLE KEYS */;
INSERT INTO `techskill` VALUES ('Niweera','Elec001'),('Niweera22','Elec001'),('Niweera','Ittc001'),('Niweera222','Plum002');
/*!40000 ALTER TABLE `techskill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `techtype`
--

DROP TABLE IF EXISTS `techtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `techtype` (
  `typeid` varchar(100) NOT NULL,
  `typename` varchar(255) NOT NULL,
  PRIMARY KEY (`typeid`),
  UNIQUE KEY `typename` (`typename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `techtype`
--

LOCK TABLES `techtype` WRITE;
/*!40000 ALTER TABLE `techtype` DISABLE KEYS */;
INSERT INTO `techtype` VALUES ('Arch','Architect'),('Carp','Carpenter'),('Elec','Electrician'),('Ittc','IT Technician'),('Mech','Mechanic'),('Nett','Network Technician'),('Plum','Plumber'),('Surv','Surveyour');
/*!40000 ALTER TABLE `techtype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-26 15:33:30
