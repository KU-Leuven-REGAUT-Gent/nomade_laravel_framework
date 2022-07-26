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
-- Table structure for table `USR_roles_permissions`
--

DROP TABLE IF EXISTS `USR_roles_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USR_roles_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  UNIQUE KEY `role_id` (`role_id`,`permission_id`),
  KEY `usertype_id` (`role_id`),
  KEY `permission_id` (`permission_id`),
  CONSTRAINT `USR_roles_permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `USR_roles` (`id`),
  CONSTRAINT `USR_roles_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `USR_permissions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USR_roles_permissions`
--

LOCK TABLES `USR_roles_permissions` WRITE;
/*!40000 ALTER TABLE `USR_roles_permissions` DISABLE KEYS */;
INSERT INTO `USR_roles_permissions` VALUES (1,9),(1,20),(1,22),(1,28),(1,32),(1,33),(1,36),(1,39),(2,7),(2,9),(2,10),(2,20),(2,22),(2,28),(2,29),(2,32),(2,33),(2,36),(2,41),(3,7),(3,9),(3,10),(3,32),(3,33),(3,36),(3,37),(4,1),(4,2),(4,4),(4,5),(4,6),(4,7),(4,8),(4,9),(4,10),(4,32),(4,33),(4,36),(4,37),(4,47),(5,9),(5,10),(5,11),(5,15),(5,16),(5,17),(5,18),(5,19),(5,21),(5,23),(5,24),(5,25),(5,26),(5,27),(5,28),(5,29),(5,30),(5,38),(5,42),(5,46),(5,47),(6,25),(6,26),(6,27),(9,32);
/*!40000 ALTER TABLE `USR_roles_permissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-01 15:30:38
