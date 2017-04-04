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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,2,'1001','2016-08-01 00:13:37','2017-03-14 00:13:42','2016畅移受邀参加交大软件工程师班开学典礼'),(2,4,'1002','2017-03-14 12:26:16','2017-03-14 12:26:19','物理与天文学院两项科研成果入选《科技导报》2016年度中国十大科学进展'),(3,4,'1003','2017-03-14 12:26:22','2017-03-14 12:26:23','“人工微结构科学与技术”协同创新中心上海交大与人大2016年度学术交流会在沪召开'),(4,4,'1004','2017-03-14 12:27:11','2017-03-14 12:27:13','上海交通大学物理与天文学院举办2017年校友新春论坛'),(5,4,'1005','2017-03-14 12:27:41','2017-03-14 12:27:43','盛政明教授荣获2016年度全球华人物理与天文学会“亚洲成就奖”'),(6,4,'1006','2017-03-14 12:27:45','2017-03-14 12:27:47','物理与天文系多位教师获2016年教学类奖项'),(7,4,'1007','2017-03-14 12:27:49','2017-03-14 12:27:51','视频直播技术分析 七'),(8,4,'1008','2017-03-16 02:56:18','2017-03-16 02:56:22','视频直播技术分析 六'),(9,4,'1009','2017-03-16 12:09:15','2017-03-16 12:09:31','视频直播技术分析 五'),(10,4,'1010','2017-03-16 12:09:18','2017-03-16 12:09:34','视频直播技术分析 四'),(11,4,'1011','2017-03-16 12:09:20','2017-03-16 12:09:36','视频直播技术分析 三'),(12,4,'1012','2017-03-16 12:09:22','2017-03-16 12:09:38','视频直播技术分析 二'),(13,4,'1013','2017-03-16 12:09:25','2017-03-16 12:09:41','视频直播技术分析 一'),(14,4,'1014','2017-03-16 12:09:27','2017-03-16 12:09:43','比特币技术原理'),(15,4,'1015','2017-03-16 12:09:29','2017-03-16 12:09:45','youtube视频技术架构实践'),(16,21,'6001','2017-03-24 14:25:16','2017-03-24 14:25:18',NULL),(17,22,'6002','2017-03-24 14:25:20','2017-03-24 14:25:22',NULL),(18,23,'6003','2017-03-24 14:25:25','2017-03-24 14:25:27',NULL),(19,13,'11001','2017-03-25 17:15:39','2017-03-25 17:15:41',NULL),(20,14,'11002','2017-03-25 17:15:43','2017-03-25 17:15:45',NULL),(21,15,'11003','2017-03-25 17:15:48','2017-03-25 17:15:49',NULL),(22,16,'11004','2017-03-25 17:15:59','2017-03-25 17:16:00',NULL),(23,17,'12001','2017-03-25 17:36:15','2017-03-25 17:36:17',NULL),(24,18,'12002','2017-03-25 17:36:19','2017-03-25 17:36:21',NULL),(25,19,'12003','2017-03-25 17:36:23','2017-03-25 17:36:25',NULL),(26,20,'12004','2017-03-25 17:36:28','2017-03-25 17:36:30',NULL),(27,29,'12005','2017-03-25 17:36:32','2017-03-25 17:36:34',NULL),(28,30,'12006','2017-03-25 17:36:36','2017-03-25 17:36:38',NULL),(29,24,'8001','2017-03-25 17:36:40','2017-03-25 17:36:43',NULL),(30,25,'8002','2017-03-25 17:58:49','2017-03-25 17:58:51',NULL),(31,26,'9001','2017-03-25 19:31:38','2017-03-25 19:31:40',NULL),(32,27,'9002','2017-03-25 19:31:43','2017-03-25 19:31:45',NULL),(33,28,'9003','2017-03-25 19:31:47','2017-03-25 19:31:49',NULL),(34,31,'7001','2017-03-25 19:36:03','2017-03-25 19:36:05',NULL),(35,32,'7002','2017-03-25 19:36:08','2017-03-25 19:36:10',NULL),(36,33,'7003','2017-03-25 19:36:12','2017-03-25 19:36:13',NULL),(37,5,'11000','2017-04-05 01:26:07','2017-04-05 01:26:09',NULL);
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
  `type` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template`
--

LOCK TABLES `template` WRITE;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
INSERT INTO `template` VALUES (1,NULL,'新闻','2017-03-14 01:18:54','2017-03-14 01:18:57',1),(2,1,'中心新闻','2017-03-14 01:19:59','2017-03-14 01:20:08',3),(3,1,'行业动态','2017-03-14 01:20:02','2017-03-14 01:20:11',3),(4,1,'技术扩展','2017-03-14 01:20:04','2017-03-14 01:20:12',3),(5,11,'体系简介','2017-03-14 01:20:06','2017-03-14 01:20:15',2),(6,NULL,'联系我们','2017-03-23 15:59:22','2017-03-23 15:59:25',NULL),(7,NULL,'学员跟踪','2017-03-23 15:59:52','2017-03-23 15:59:54',NULL),(8,NULL,'合作机构','2017-03-23 16:00:16','2017-03-23 16:00:18',NULL),(9,NULL,'Advance','2017-03-23 16:00:39','2017-03-23 16:00:41',NULL),(10,NULL,'企业实践','2017-03-23 16:01:09','2017-03-23 16:01:11',NULL),(11,NULL,'培养体系','2017-03-23 16:01:55','2017-03-23 16:01:57',NULL),(12,NULL,'技术领域','2017-03-23 16:02:23','2017-03-23 16:02:25',NULL),(13,11,'基础模式','2017-03-23 16:35:12','2017-03-23 16:35:13',2),(14,11,'专项模式','2017-03-23 16:35:38','2017-03-23 16:35:40',2),(15,11,'案例模式','2017-03-23 16:35:59','2017-03-23 16:36:00',2),(16,11,'企业模式','2017-03-23 16:36:26','2017-03-23 16:36:28',2),(17,12,'服务器开发','2017-03-23 16:39:28','2017-03-23 16:39:30',NULL),(18,12,'移动客户端开发','2017-03-23 16:39:48','2017-03-23 16:39:50',NULL),(19,12,'unity3d','2017-03-23 16:40:10','2017-03-23 16:40:12',NULL),(20,12,'web前端','2017-03-23 16:40:27','2017-03-23 16:40:29',NULL),(21,6,'通讯地址','2017-03-23 22:25:13','2017-03-23 22:25:15',NULL),(22,6,'百度地图','2017-03-23 22:25:30','2017-03-23 22:25:32',NULL),(23,6,'交通指南','2017-03-23 22:28:33','2017-03-23 22:28:36',NULL),(24,8,'对接院校','2017-03-25 15:54:49','2017-03-25 15:54:51',NULL),(25,8,'合作企业','2017-03-25 15:54:54','2017-03-25 15:54:59',NULL),(26,9,'communication','2017-03-25 15:55:01','2017-03-25 15:54:56',NULL),(27,9,'leadership','2017-03-25 15:55:05','2017-03-25 15:55:07',NULL),(28,9,'business','2017-03-25 15:55:10','2017-03-25 15:55:12',NULL),(29,12,'大数据','2017-03-25 15:55:14','2017-03-25 15:55:16',NULL),(30,12,'人工智能','2017-03-25 15:55:19','2017-03-25 15:55:21',NULL),(31,7,'学习生活','2017-03-25 16:32:49','2017-03-25 16:32:51',NULL),(32,7,'校园生活','2017-03-25 16:32:53','2017-03-25 16:32:55',NULL),(33,7,'企业生活','2017-03-25 16:32:59','2017-03-25 16:33:00',NULL);
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

-- Dump completed on 2017-04-05  2:20:26