-- MySQL dump 10.16  Distrib 10.1.44-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: educat_old
-- ------------------------------------------------------
-- Server version	10.1.44-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `STP_parameters`
--

DROP TABLE IF EXISTS `STP_parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `STP_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `description` tinytext NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `datatype` int(11) NOT NULL DEFAULT '0',
  `mainboard` bit(1) NOT NULL DEFAULT b'1',
  `min` double DEFAULT NULL,
  `max` double DEFAULT NULL,
  `default` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1031 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STP_parameters`
--

LOCK TABLES `STP_parameters` WRITE;
/*!40000 ALTER TABLE `STP_parameters` DISABLE KEYS */;
INSERT INTO `STP_parameters` VALUES (1,'X','x coordinate for view',1,2,'',-7,7,NULL),(2,'Y','y coordinate for view',1,2,'',-7,7,NULL),(3,'R','rotation for view',1,2,'',-180,180,NULL),(4,'Comm.Method','Communication Interface: Number of the interface',0,0,'',0,255,0),(5,'Comm.Method.Version','Version of the specific communication method',1,1,'',0,255,0),(6,'Comm.Addr','Communication Address within the Interface',1,1,'',0,1e18,0),(7,'Comm.Fail.Consequence','What needs to happen if this instrument fails',2,0,'',0,4,0),(10,'Samplerate','Samplerate (1/s)',0,2,'',1,1000,100),(16,'Data.Input.Bytes','Number of Input Bytes sent to the instrument',0,2,'',0,255,0),(17,'Data.Input.Datatype','Datatype of the input bytes',1,0,'',0,255,0),(32,'Data.Output.Bytes','Number of Outbut Bytes received from the instrument (No datatype)',0,2,'',0,255,0),(33,'Data.Output.Datatype','Datatype of the output bytes',1,0,'',0,255,0),(256,'Software.Function','Software function to be executed in case of software instrument (No datatype)',0,2,'',0,255,0),(257,'Instrument.1.ID','Sensor ID for input 1 of software instrument',1,4,'',0,NULL,0),(258,'Instrument.2.ID','Sensor ID for input 2 of software instrument',1,4,'',0,NULL,0),(259,'Instrument.3.ID','Sensor ID for input 3 of software instrument',1,4,'',0,NULL,0),(260,'Instrument.4.ID','Sensor ID for input 4 of software instrument',1,4,'',0,NULL,0),(261,'Instrument.5.ID','Sensor ID for input 5 of software instrument',1,4,'',0,NULL,0),(262,'Instrument.6.ID','Sensor ID for input 6 of software instrument',1,4,'',0,NULL,0),(263,'Instrument.7.ID','Sensor ID for input 7 of software instrument',1,4,'',0,NULL,0),(264,'Instrument.8.ID','Sensor ID for input 8 of software instrument',1,4,'',0,NULL,0),(267,'App.Instrument.Icon','Icon reference for visualisation in the app',0,0,'\0',0,255,0),(268,'App.Instrument.App_only','If this is set to False, the instrument has no functional link with the Mainboard. Only the Android Device uses this instrument.',0,3,'\0',0,1,0),(269,'View Angle','View Angle\r\n(Name probably needs changing)',0,2,'',0,360,30),(270,'Inter-sensor distance','The distance between multiple individual IR or US components within one single instrument.\r\n(Name probably needs changing) in m',0,2,'',0,1,0.03),(271,'Instrument.Min.Allowed.Data.Output.Datatype','Minimum allowed Data.Output.Datatype for Instrument',0,1,'\0',NULL,NULL,NULL),(272,'Instrument.Max.Allowed.Data.Output.Datatype','Maximum allowed Data.Output.Datatype for Instrument',0,1,'\0',NULL,NULL,NULL),(273,'Poll Rank','Poll Rank',1,1,'',0,255,1),(512,'Joystick ID','The Joystick ID to which this profile belongs',2,4,'',NULL,NULL,NULL),(513,'Profile number','Profile number for the specific joystick',2,1,'',0,6,NULL),(514,'Short Throw Travel (as percentage)','Short Throw Travel (as percentage)',2,2,'',0,200,NULL),(515,'Forward Speed (as percentage)','Forward Speed (as percentage)',2,2,'',0,100,NULL),(768,'P&G Parameter (Placeholder)','Placeholder parameter for a P&G Parameter',2,1,'',NULL,NULL,NULL),(769,'DX Parameter (Placeholder)','Placeholder parameter for a DX Parameter',2,1,'',NULL,NULL,NULL),(770,'Height (cm)','',2,1,'',0,300,NULL),(771,'Weight (kg)','',2,2,'',0,1000,NULL),(1024,'Template','Template Boolean',0,3,'\0',0,1,0),(1025,'Template Type','Template Type allowing the app to visualize this template',0,0,'\0',NULL,NULL,NULL),(1026,'Maximum Speed','Maximum Wheelchair Speed (km/h)',1,2,'',NULL,NULL,NULL),(1027,'OAS_Slope_Start','Distance at the start of the slope',1,2,'',0,30,5),(1028,'OAS_Slope_Percentage','Percentage of max speed at the start of the slope',1,2,'',0,50,10),(1029,'OAS_Slope_End','Distance at the end of the slope at 100 % of max speed',1,2,'',5,250,80),(1030,'Distance_Calibration','PWC boundary calibration (cm)',1,2,'',0,100,0);
/*!40000 ALTER TABLE `STP_parameters` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-01 15:30:37
