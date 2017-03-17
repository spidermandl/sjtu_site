-- MySQL dump 10.13  Distrib 5.7.16, for osx10.12 (x86_64)
--
-- Host: localhost    Database: sjtu
-- ------------------------------------------------------
-- Server version	5.7.16

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `template_id` bigint(20) DEFAULT NULL,
  `link` varchar(48) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,2,'1001','2017-03-14 00:13:37','2017-03-14 00:13:42','上海交通大学物理与天文学院召开院情报告会'),(2,2,'1002','2017-03-14 12:26:16','2017-03-14 12:26:19','物理与天文学院两项科研成果入选《科技导报》2016年度中国十大科学进展'),(3,2,'1003','2017-03-14 12:26:22','2017-03-14 12:26:23','“人工微结构科学与技术”协同创新中心上海交大与人大2016年度学术交流会在沪召开'),(4,2,'1004','2017-03-14 12:27:11','2017-03-14 12:27:13','上海交通大学物理与天文学院举办2017年校友新春论坛'),(5,2,'1005','2017-03-14 12:27:41','2017-03-14 12:27:43','盛政明教授荣获2016年度全球华人物理与天文学会“亚洲成就奖”'),(6,2,'1006','2017-03-14 12:27:45','2017-03-14 12:27:47','物理与天文系多位教师获2016年教学类奖项'),(7,2,'1007','2017-03-14 12:27:49','2017-03-14 12:27:51','物理与天文系冯仕猛获“凯原十佳”教师称号'),(8,2,'1008','2017-03-09 02:56:18','2017-03-16 02:56:22','上海交通大学与中国科学院高能物理研究所签订战略合作协议'),(9,2,'1009','2017-03-16 12:09:15','2017-03-16 12:09:31','9'),(10,2,'1010','2017-03-16 12:09:18','2017-03-16 12:09:34','10'),(11,2,'1011','2017-03-16 12:09:20','2017-03-16 12:09:36','11'),(12,2,'1012','2017-03-16 12:09:22','2017-03-16 12:09:38','12'),(13,2,'1013','2017-03-16 12:09:25','2017-03-16 12:09:41','13'),(14,2,'1014','2017-03-16 12:09:27','2017-03-16 12:09:43','14'),(15,2,'1015','2017-03-16 12:09:29','2017-03-16 12:09:45','15');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `template` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template`
--

LOCK TABLES `template` WRITE;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
INSERT INTO `template` VALUES (1,NULL,'新闻','2017-03-14 01:18:54','2017-03-14 01:18:57'),(2,1,'本院新闻','2017-03-14 01:19:59','2017-03-14 01:20:08'),(3,1,'科研进展','2017-03-14 01:20:02','2017-03-14 01:20:11'),(4,1,'教学动态','2017-03-14 01:20:04','2017-03-14 01:20:12'),(5,1,'学工新闻','2017-03-14 01:20:06','2017-03-14 01:20:15');
/*!40000 ALTER TABLE `template` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-18  0:19:47
