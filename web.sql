-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: web
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `CustID` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ContactNo` int(11) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`CustID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('amal','amal','perera','amm@gmail.com',184354168,'$2y$10$VXkJlJU8IHZAgTWRmkxOjOktTsPhr9K6BEZGCU2J0VG3HlXYAgYHm'),('Niweera','Nipuna','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$Jbh4mhAEOsKgka5yFEOjBe1rR8qhlNLdQAOBmLpkSmcnKrccFpk4.');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerissue`
--

DROP TABLE IF EXISTS `customerissue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerissue` (
  `CustID` varchar(255) NOT NULL,
  `IssueID` varchar(255) NOT NULL,
  PRIMARY KEY (`CustID`,`IssueID`),
  KEY `custrel2` (`IssueID`),
  CONSTRAINT `custrel` FOREIGN KEY (`CustID`) REFERENCES `customer` (`CustID`),
  CONSTRAINT `custrel2` FOREIGN KEY (`IssueID`) REFERENCES `skill` (`SkID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerissue`
--

LOCK TABLES `customerissue` WRITE;
/*!40000 ALTER TABLE `customerissue` DISABLE KEYS */;
/*!40000 ALTER TABLE `customerissue` ENABLE KEYS */;
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
INSERT INTO `skill` VALUES ('Carp001','Wood works'),('Elec001','Wiring'),('Ittc001','PC Troubleshooting'),('Ittc002','Virus Removing'),('Mech001','Tinkering'),('Plum001','Pipelining');
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `technician`
--

DROP TABLE IF EXISTS `technician`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `technician` (
  `TechID` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ContactNo` int(11) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  PRIMARY KEY (`TechID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `technician`
--

LOCK TABLES `technician` WRITE;
/*!40000 ALTER TABLE `technician` DISABLE KEYS */;
INSERT INTO `technician` VALUES ('amal','Amal','Perera','sdfdsfdaf',531313,'$2y$10$bzOKO8fWziOJrOGVXPypHujCMrM.omDk.7zdAXh0K5y4zfb5dkT1m','IT Technician','Colombo'),('Kamal123','Kamala','Perera','kmk@gmail.com',751234567,'$2y$10$O1N1.VUAU60MwKAf9P5nFuR1mF0e4SKsYq6fhy2bK5yUrpgIoRhqK','IT Technician','Galle'),('Niweera','W.M.D.N.L.','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$YHNmkjwGti6TrIXHWcV7lukwIr4yiMgDOX0bbXDw6wnNGRWniMOAG','IT Technician','Kalutara'),('Niweera22','W.M.D.N.L.','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$BGuv1OqbulCyCoxMezDhOuyi68gGO2FWmxHk//KYOD5SvNFBeiwG2','Electrician','Galle');
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
INSERT INTO `techskill` VALUES ('amal','Ittc001'),('amal','Ittc002'),('Kamal123','Carp001'),('Niweera','Ittc001'),('Niweera','Ittc002'),('Niweera22','Elec001');
/*!40000 ALTER TABLE `techskill` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 11:57:43
