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
-- Table structure for table `custcontact`
--

DROP TABLE IF EXISTS `custcontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custcontact` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custcontact`
--

LOCK TABLES `custcontact` WRITE;
/*!40000 ALTER TABLE `custcontact` DISABLE KEYS */;
INSERT INTO `custcontact` VALUES (1,'W.M.D.N.L. Weerasekara','Test','This is a test message!								','w.nipuna@gmail.com'),(2,'Nipuna Weerasekara','Test2','This is a test part2!						','w.nipuna@gmail.com'),(3,'Kasun Perera','No Subject','No notes!								','ksp@gmail.com'),(4,'Nipuna1 Weerasekara','fsdgsd','	gdsgsdgsd							','w.nipuna@gmail.com'),(5,'Rajitha','testing','	helloo how are you ?							','rajithaf@gmail.com');
/*!40000 ALTER TABLE `custcontact` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('W.M.D.N.L.','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$3c/hGEbBlFW9hL9upueHueYvqDtda3LNUkPNTn40beDpDAOcCgAGe',1,'Niweera'),('Nipuna','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$TLmvFRB8z2eHUT49pCaFbeTIzuoHSnZ35PMJo61/iuF6hIVBmUqMK',2,'Niweera2'),('Nipuna2','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$sQJuQekJeZhcfF03Wn9Tq./O6SvpeRTZvLJ0seHB9.w3/QtkrBq2i',3,'Niweera3'),('Sirimal','Perera','w.nipuna@gmail.com',766419486,'$2y$10$2J25rVUDbRBJuZ69dNJGPOfgio8/P94YV9wU8nYqmcBPpR1G2SzN.',4,'Sirimal');
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
INSERT INTO `skill` VALUES ('Carp001','Wood works'),('Carp002','Door fixing'),('Carp003','Furniture repairing'),('Elec001','Wiring'),('Elec002','Rewiring'),('Elec003','Electrical fault repairing'),('Extr001','Indoor exterminating'),('Extr002','Outdoor exterminating'),('Extr003','Pest controlling'),('Ittc001','PC Troubleshooting'),('Ittc002','Virus Removing'),('Ittc003','Software upgrading'),('Mech001','Tinkering'),('Mech002','Vehicle fault repairing'),('Mech003','Tire changing'),('Mson001','Brick laying'),('Mson002','Constructions'),('Mson003','Building repairing '),('Plum001','Pipelining'),('Plum002','Pipefitting'),('Plum003','Pipe fault repairing'),('Pntr001','Wall painting'),('Pntr002','Indoor painting'),('Pntr003','Outdoor painting'),('Wldr001','Frame welding'),('Wldr002','Structure welding'),('Wldr003','Metal cutting'),('Wood001','Garden trimming'),('Wood002','Tree cutting'),('Wood003','Branches cutting');
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skillcount`
--

DROP TABLE IF EXISTS `skillcount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skillcount` (
  `skid` varchar(255) CHARACTER SET latin1 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`skid`,`timestamp`),
  CONSTRAINT `skfk` FOREIGN KEY (`skid`) REFERENCES `skill` (`SkID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skillcount`
--

LOCK TABLES `skillcount` WRITE;
/*!40000 ALTER TABLE `skillcount` DISABLE KEYS */;
INSERT INTO `skillcount` VALUES ('Elec001','2018-07-01 16:23:47'),('Elec001','2018-07-01 16:24:08'),('Elec002','2018-07-01 17:14:36'),('Elec003','2018-07-01 17:13:27'),('Ittc001','2018-07-01 16:24:28'),('Mech001','2018-07-01 16:25:03');
/*!40000 ALTER TABLE `skillcount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `techcontact`
--

DROP TABLE IF EXISTS `techcontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `techcontact` (
  `tid` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `techcontact`
--

LOCK TABLES `techcontact` WRITE;
/*!40000 ALTER TABLE `techcontact` DISABLE KEYS */;
INSERT INTO `techcontact` VALUES (1,'W.M.D.N.L. Weerasekara','w.nipuna@gmail.com','Test','This is a test message!								'),(2,'Nipuna Weerasekara','w.nipuna@gmail.com','test2','This is a test part 2!								');
/*!40000 ALTER TABLE `techcontact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `techcount`
--

DROP TABLE IF EXISTS `techcount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `techcount` (
  `techid` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`techid`,`timestamp`),
  CONSTRAINT `tcidfk` FOREIGN KEY (`techid`) REFERENCES `techtype` (`typeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `techcount`
--

LOCK TABLES `techcount` WRITE;
/*!40000 ALTER TABLE `techcount` DISABLE KEYS */;
INSERT INTO `techcount` VALUES ('Elec','2018-07-01 16:23:47'),('Elec','2018-07-01 16:24:08'),('Elec','2018-07-01 17:13:26'),('Elec','2018-07-01 17:14:35'),('Ittc','2018-07-01 16:24:27'),('Mech','2018-07-01 16:25:02');
/*!40000 ALTER TABLE `techcount` ENABLE KEYS */;
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
  `Rate` decimal(65,0) NOT NULL,
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
INSERT INTO `technician` VALUES ('Niweera','Nipuna Lakshitha ','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$eg.dbZlp0pnINjt6clIBLuE2DdE/vJYOWzfa3O7L0vjH5agP64DXG','Electrician','Kalutara',500),('Niweera22','Nipuna','Weerasekara','nipuna@gmail.com',766419485,'$2y$10$FjEhX.rlE8R10L8vljG3BeyHGSTxXAziiCgWEdeFLaMwMnUS/FA2.','Electrician','Colombo',750),('Niweera222','Nipuna','Weerasekara','w.nipuna@gmail.com',766419486,'$2y$10$LlHB8QpGTfIF8XHPgcbx2Oum2xGhySmAu9KbymEE1a.vU4oie/f2C','Plumber','Galle',600),('Saman22','Saman','Silva','w.nipuna@gmail.com',766419486,'$2y$10$UA1KUWZvVBC5x7ka5SYFnOUcHQqUVkRKXePGVyAl/BfTCWIm2snne','IT Technician','Kalutara',850);
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
INSERT INTO `techskill` VALUES ('Niweera','Elec001'),('Niweera22','Elec001'),('Saman22','Ittc001'),('Niweera222','Plum002');
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
INSERT INTO `techtype` VALUES ('Carp','Carpenter'),('Elec','Electrician'),('Extr','Exterminator'),('Ittc','IT Technician'),('Mson','Mason'),('Mech','Mechanic'),('Nett','Network Technician'),('Pntr','Painter'),('Plum','Plumber'),('Wldr','Welder'),('Wood','Wood Cutter');
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

-- Dump completed on 2018-07-01 22:47:48
