-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: dropship.cllsu4nfiiy2.us-west-2.rds.amazonaws.com    Database: comments
-- ------------------------------------------------------
-- Server version	5.6.34-log

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
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentId` int(11) DEFAULT NULL,
  `comment` tinytext NOT NULL,
  `name` varchar(45) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `parentId` (`parentId`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (66,0,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum dolor nec mi malesuada, ac tempus tellus mattis. Suspendisse at accumsan lorem, sed scelerisque diam. Aliquam aliquam, risus nec lacinia vestibulum,','FirstComment','2017-07-06 17:58:15'),(67,66,'Nam ac aliquam lacus. Mauris pretium sem nec quam eleifend porta. Donec in mattis purus, at ultricies ante. Donec massa leo, vulputate sed consectetur eget, semper consequat magna.','FirstReply','2017-07-06 17:58:42'),(68,67,'Ut sagittis, purus a sagittis commodo, ex elit feugiat felis, nec lobortis dui sem sit amet quam. Maecenas nec odio a ante dictum consectetur ultricies nec est. Vestibulum ante ipsum primis in faucibus orci luctus et','SecondReply','2017-07-06 17:59:03'),(69,68,'THis is the last comment, you can not reply to this comment. Limited in Java script / html only(no php limit is set Yet)','ThirdReply','2017-07-06 18:00:12'),(70,0,'Curabitur volutpat metus sed massa vestibulum, ut congue dui viverra. Integer ultricies ante id imperdiet ullamcorper. Integer at tortor in arcu mattis egestas a eget orci. Quisque sed suscipit arcu. Vestibulum mauris turpis, laoreet vel scelerisque ac, p','Robert','2017-07-06 18:00:58'),(71,0,'Vestibulum massa est, semper at laoreet id, commodo ac mi. Nullam vestibulum finibus laoreet. Donec gravida, arcu eget viverra tristique, quam lectus ullamcorper quam, eget dapibus sapien urna ac lectus. Aenean sed dignissim nisi, at tempus magna. Vivamus','Andy','2017-07-06 18:01:34'),(72,71,'Proin ultricies ut lectus in lobortis. Vivamus a rutrum eros, at pulvinar sapien. Pellentesque velit arcu, convallis ut convallis at, vulputate ut tortor.','Alex','2017-07-06 18:01:54'),(73,0,'Sed ac ex non sem cursus commodo. Donec rutrum consectetur lacus. Vivamus finibus justo vitae arcu blandit, eu condimentum augue aliquet.','BEN','2017-07-06 18:05:00'),(74,0,'In massa orci, aliquet efficitur enim ut, laoreet efficitur ex. Integer eu dapibus urna, ut elementum arcu. Fusce molestie dui at enim vehicula, et sollicitudin tortor dictum','David','2017-07-06 18:44:57'),(75,74,'HI BEn','ToBen','2017-07-06 18:45:27'),(76,0,'aasdasdasd','asdaSd','2017-07-06 18:46:12'),(77,0,'asdasdasd','asdasd','2017-07-06 18:47:40'),(78,0,'Vivamus ligula tellus, vestibulum a turpis ac, sagittis auctor lorem.','Joseph','2017-07-06 18:50:20');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-06 11:52:34
