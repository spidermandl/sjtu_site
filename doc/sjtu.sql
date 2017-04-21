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
  `flyer` varchar(48) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,2,'1001','2016-08-01 00:13:37','2017-03-14 00:13:42','2016畅移受邀参加交大软件工程师班开学典礼',NULL),(2,4,'1002','2017-03-14 12:26:16','2017-03-14 12:26:19','物理与天文学院两项科研成果入选《科技导报》2016年度中国十大科学进展',NULL),(3,4,'1003','2017-03-14 12:26:22','2017-03-14 12:26:23','“人工微结构科学与技术”协同创新中心上海交大与人大2016年度学术交流会在沪召开',NULL),(4,4,'1004','2017-03-14 12:27:11','2017-03-14 12:27:13','上海交通大学物理与天文学院举办2017年校友新春论坛',NULL),(5,4,'1005','2017-03-14 12:27:41','2017-03-14 12:27:43','盛政明教授荣获2016年度全球华人物理与天文学会“亚洲成就奖”',NULL),(6,4,'1006','2017-03-14 12:27:45','2017-03-14 12:27:47','物理与天文系多位教师获2016年教学类奖项',NULL),(7,4,'1007','2017-03-14 12:27:49','2017-03-14 12:27:51','视频直播技术分析 七',NULL),(8,4,'1008','2017-03-16 02:56:18','2017-03-16 02:56:22','视频直播技术分析 六',NULL),(9,4,'1009','2017-03-16 12:09:15','2017-03-16 12:09:31','视频直播技术分析 五',NULL),(10,4,'1010','2017-03-16 12:09:18','2017-03-16 12:09:34','视频直播技术分析 四',NULL),(11,4,'1011','2017-03-16 12:09:20','2017-03-16 12:09:36','视频直播技术分析 三',NULL),(12,4,'1012','2017-03-16 12:09:22','2017-03-16 12:09:38','视频直播技术分析 二',NULL),(13,4,'1013','2017-03-16 12:09:25','2017-03-16 12:09:41','视频直播技术分析 一',NULL),(14,4,'1014','2017-03-16 12:09:27','2017-03-16 12:09:43','比特币技术原理',NULL),(15,4,'1015','2017-03-16 12:09:29','2017-03-16 12:09:45','youtube视频技术架构实践',NULL),(16,21,'6001','2017-03-24 14:25:16','2017-03-24 14:25:18',NULL,NULL),(17,22,'6002','2017-03-24 14:25:20','2017-03-24 14:25:22',NULL,NULL),(18,23,'6003','2017-03-24 14:25:25','2017-03-24 14:25:27',NULL,NULL),(19,13,'11001','2017-03-25 17:15:39','2017-03-25 17:15:41',NULL,NULL),(20,14,'11002','2017-03-25 17:15:43','2017-03-25 17:15:45',NULL,NULL),(21,15,'11003','2017-03-25 17:15:48','2017-03-25 17:15:49','ACM 算法判题系统',NULL),(22,16,'11004','2017-03-25 17:15:59','2017-03-25 17:16:00',NULL,NULL),(23,17,'12001','2017-03-25 17:36:15','2017-03-25 17:36:17',NULL,NULL),(24,18,'12002','2017-03-25 17:36:19','2017-03-25 17:36:21',NULL,NULL),(25,19,'12003','2017-03-25 17:36:23','2017-03-25 17:36:25',NULL,NULL),(26,20,'12004','2017-03-25 17:36:28','2017-03-25 17:36:30',NULL,NULL),(27,29,'12005','2017-03-25 17:36:32','2017-03-25 17:36:34',NULL,NULL),(28,30,'12006','2017-03-25 17:36:36','2017-03-25 17:36:38',NULL,NULL),(29,24,'8001','2017-03-25 17:36:40','2017-03-25 17:36:43','哈尔滨师范大学',NULL),(30,25,'8002','2017-03-25 17:58:49','2017-03-25 17:58:51',NULL,NULL),(31,26,'9001','2017-03-25 19:31:38','2017-03-25 19:31:40',NULL,NULL),(32,27,'9002','2017-03-25 19:31:43','2017-03-25 19:31:45',NULL,NULL),(33,28,'9003','2017-03-25 19:31:47','2017-03-25 19:31:49',NULL,NULL),(34,31,'7001','2017-03-25 19:36:03','2017-03-25 19:36:05',NULL,NULL),(35,32,'7002','2017-03-25 19:36:08','2017-03-25 19:36:10',NULL,NULL),(36,33,'7003','2017-03-25 19:36:12','2017-03-25 19:36:13',NULL,NULL),(37,5,'11000','2017-04-05 01:26:07','2017-04-05 01:26:09',NULL,NULL),(38,15,'11005','2017-04-06 00:24:30','2017-04-06 00:24:32','Unity3d 德州扑克',NULL),(39,15,'11006','2017-04-06 00:24:35','2017-04-06 00:24:37','Worktile 团队协作',NULL),(40,15,'11007','2017-04-06 01:10:22','2017-04-06 01:10:24','会议室预定OA系统',NULL),(41,15,'11008','2017-04-06 01:10:44','2017-04-06 01:10:46','蚂蚁短租平台系统',NULL),(42,15,'11009','2017-04-06 01:13:01','2017-04-06 01:13:04','momo 社交平台',NULL),(43,15,'11010','2017-04-06 01:13:27','2017-04-06 01:13:28','金融支付平台系统',NULL),(44,25,'8003','2017-04-07 11:12:43','2017-04-07 11:12:45','饿了么',NULL),(45,25,'8004','2017-04-06 11:12:47','2017-04-06 11:12:53','上海亿动信息技术有限公司',NULL),(46,25,'8028','2017-04-06 11:12:50','2017-04-06 11:12:56','大则网络科技有限公司',NULL),(47,25,'8005','2017-04-06 11:12:58','2017-04-06 11:13:00','允弈信息科技有限公司',NULL),(48,25,'8006','2017-04-06 11:13:03','2017-04-06 11:13:04','上海速道科技有限公司',NULL),(49,25,'8007','2017-04-06 11:13:07','2017-04-06 11:13:09','欧电云信息科技有限公司',NULL),(50,25,'8008','2017-04-06 11:13:11','2017-04-06 11:13:12','来客之家网络有限公司',NULL),(51,25,'8009','2017-04-06 11:46:35','2017-04-06 11:46:38','上海绘鸿信息技术有限公司',NULL),(52,25,'8010','2017-04-07 11:47:13','2017-04-07 11:47:15','游族网络股份有限公司',NULL),(53,25,'8011','2017-04-06 11:48:04','2017-04-06 11:48:06','上海香果信息科技有限公司',NULL),(54,25,'8012','2017-04-06 11:49:14','2017-04-06 11:49:16','上海胜游网络科技有限公司',NULL),(55,25,'8013','2017-04-06 12:08:47','2017-04-06 12:08:49','上海猴软信息科技有限公司',NULL),(56,25,'8014','2017-04-06 12:15:09','2017-04-06 12:15:11','复星集团上海云济信息科技有限公司',NULL),(57,25,'8015','2017-04-06 12:15:55','2017-04-06 12:15:57','国鑫安盈金融服务有限公司',NULL),(58,25,'8016','2017-04-06 12:17:59','2017-04-06 12:18:02','上海智简信息科技有限公司',NULL),(59,25,'8017','2017-04-06 12:18:33','2017-04-06 12:18:31','上海闪酷信息技术有限公司',NULL),(60,25,'8018','2017-04-06 12:19:28','2017-04-06 12:19:32','上海建朗信息科技有限公司',NULL),(61,25,'8019','2017-04-06 12:20:04','2017-04-06 12:20:06','荟集网络科技有限公司',NULL),(62,25,'8020','2017-04-06 12:21:49','2017-04-06 12:21:51','畅移（上海）信息科技有限公司',NULL),(63,25,'8021','2017-04-06 12:22:37','2017-04-06 12:22:39','上海见行信息科技有限公司',NULL),(64,25,'8022','2017-04-06 12:23:02','2017-04-06 12:23:04','上海骜升信息科技有限公司',NULL),(65,25,'8023','2017-04-06 12:23:37','2017-04-06 12:23:39','数诺网络科技有限公司',NULL),(66,0,'8024','2017-04-06 12:25:00','2017-04-06 12:24:58','泛蠡网络科技(上海)有限公司',NULL),(67,25,'8025','2017-04-06 12:25:34','2017-04-06 12:25:32','上海风创信息咨询有限公司(海风教育)',NULL),(68,25,'8026','2017-04-06 12:30:11','2017-04-06 12:30:13','上海束优网络科技有限公司',NULL),(69,25,'8027','2017-04-05 12:45:06','2017-04-06 12:45:09','保华律师事务所',NULL),(70,4,'1016','2017-04-06 18:00:34','2017-04-06 18:00:37','七牛云直播大规模实时流处理平台架构',NULL),(71,24,'8028','2017-04-07 01:28:10','2017-04-07 01:28:12','黑龙江大学',NULL),(72,24,'8029','2017-04-07 01:28:14','2017-04-07 01:28:18','东北石油大学',NULL),(73,24,'8030','2017-04-07 01:28:20','2017-04-07 01:28:21','东北林业大学',NULL),(74,24,'8031','2017-04-07 01:28:24','2017-04-07 01:28:26','哈尔滨理工大学',NULL),(75,24,'8032','2017-04-07 01:28:28','2017-04-07 01:28:30','哈尔滨工程大学',NULL),(76,24,'8033','2017-04-07 01:28:33','2017-04-07 01:28:34','上海交通大学',NULL),(77,24,'8034','2017-04-07 01:28:36','2017-04-07 01:28:38','上海同济大学',NULL),(78,24,'8035','2017-04-07 01:29:58','2017-04-07 01:30:00','上海东华大学',NULL),(79,24,'8036','2017-04-07 01:30:10','2017-04-07 01:30:12','上海华东理工大学',NULL),(80,2,'1017','2016-12-22 23:35:00','2017-04-10 23:35:02','哈尔滨师大计算机学院领导考察督导教学',NULL),(81,34,'12007','2017-04-11 16:08:22','2017-04-11 16:08:25','技术岗位',NULL),(82,2,'1018','2017-04-10 10:18:07','2017-04-19 10:18:09','87届计算机系校友指导语音识别课程研发工作',NULL),(83,2,'1019','2017-03-17 10:46:35','2017-04-19 10:46:46','2017年QS世界大学学科排名发布，上海交通大学计算机科学学科继续跻身全球前50强',NULL),(84,2,'1020','2017-01-04 11:55:51','2017-04-19 11:55:57','上海市大数据技术与应用创新中心成立',NULL),(85,2,'1021','2016-12-02 13:04:55','2017-04-19 13:05:01','上海交通大学校友胡振江教授当选2016 ACM杰出科学家',NULL),(86,2,'1022','2016-05-20 13:22:09','2017-04-19 13:22:20','上海交通大学ACM代表队勇夺第40届ACM国际大学生程序设计竞赛总决赛金牌',NULL),(87,2,'1023','2016-02-12 13:37:56','2017-04-19 13:38:11','图灵奖得主Ivan Sutherland教授到访并作学术报告',NULL),(88,2,'1024','2015-06-16 14:18:10','2017-04-19 14:18:20','我系密码与计算机安全实验室在国际顶尖密码会议CRYPTO 2015上录用3篇学术论文',NULL),(89,2,'1025','2017-04-05 12:09:08','2017-04-21 12:09:14','张文庆返校分享创业经历',NULL),(90,35,'1026','2017-04-21 12:49:04','2017-04-21 12:49:22','1',NULL),(91,35,'1027','2017-04-21 12:49:07','2017-04-21 12:49:28','2',NULL),(92,35,'1028','2017-04-21 12:49:10','2017-04-21 12:49:25','3',NULL),(93,35,'1029','2017-04-21 12:49:12','2017-04-21 12:49:30','4',NULL),(94,35,'1030','2017-04-21 12:49:16','2017-04-21 12:49:33','5',NULL),(95,35,'1031','2017-04-21 12:49:18','2017-04-21 12:49:35','6',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template`
--

LOCK TABLES `template` WRITE;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
INSERT INTO `template` VALUES (1,NULL,'新闻','2017-03-14 01:18:54','2017-03-14 01:18:57',1),(2,1,'中心新闻','2017-03-14 01:19:59','2017-03-14 01:20:08',3),(3,1,'行业动态','2017-03-14 01:20:02','2017-03-14 01:20:11',3),(4,1,'技术专栏','2017-03-14 01:20:04','2017-03-14 01:20:12',3),(5,11,'体系简介','2017-03-14 01:20:06','2017-03-14 01:20:15',2),(6,NULL,'联系我们','2017-03-23 15:59:22','2017-03-23 15:59:25',NULL),(7,NULL,'学员跟踪','2017-03-23 15:59:52','2017-03-23 15:59:54',NULL),(8,NULL,'合作机构','2017-03-23 16:00:16','2017-03-23 16:00:18',NULL),(9,NULL,'Advance','2017-03-23 16:00:39','2017-03-23 16:00:41',NULL),(10,NULL,'企业实践','2017-03-23 16:01:09','2017-03-23 16:01:11',NULL),(11,NULL,'培养体系','2017-03-23 16:01:55','2017-03-23 16:01:57',NULL),(12,NULL,'技术领域','2017-03-23 16:02:23','2017-03-23 16:02:25',NULL),(13,11,'基础模式','2017-03-23 16:35:12','2017-03-23 16:35:13',2),(14,11,'专项模式','2017-03-23 16:35:38','2017-03-23 16:35:40',2),(15,11,'案例模式','2017-03-23 16:35:59','2017-03-23 16:36:00',3),(16,11,'企业模式','2017-03-23 16:36:26','2017-03-23 16:36:28',2),(17,12,'服务器开发','2017-03-23 16:39:28','2017-03-23 16:39:30',NULL),(18,12,'移动客户端开发','2017-03-23 16:39:48','2017-03-23 16:39:50',NULL),(19,12,'unity3d','2017-03-23 16:40:10','2017-03-23 16:40:12',NULL),(20,12,'web前端','2017-03-23 16:40:27','2017-03-23 16:40:29',NULL),(21,6,'通讯地址','2017-03-23 22:25:13','2017-03-23 22:25:15',NULL),(22,6,'百度地图','2017-03-23 22:25:30','2017-03-23 22:25:32',NULL),(23,6,'交通指南','2017-03-23 22:28:33','2017-03-23 22:28:36',NULL),(24,8,'对接院校','2017-03-25 15:54:49','2017-03-25 15:54:51',3),(25,8,'合作企业','2017-03-25 15:54:54','2017-03-25 15:54:59',3),(26,9,'communication','2017-03-25 15:55:01','2017-03-25 15:54:56',NULL),(27,9,'leadership','2017-03-25 15:55:05','2017-03-25 15:55:07',NULL),(28,9,'business','2017-03-25 15:55:10','2017-03-25 15:55:12',NULL),(29,12,'大数据','2017-03-25 15:55:14','2017-03-25 15:55:16',NULL),(30,12,'人工智能','2017-03-25 15:55:19','2017-03-25 15:55:21',NULL),(31,7,'学习生活','2017-03-25 16:32:49','2017-03-25 16:32:51',NULL),(32,7,'校园生活','2017-03-25 16:32:53','2017-03-25 16:32:55',NULL),(33,7,'企业生活','2017-03-25 16:32:59','2017-03-25 16:33:00',NULL),(34,12,'技术岗位','2017-04-11 15:56:35','2017-04-11 15:56:37',2),(35,1,'通知公告','2017-04-20 21:20:45','2017-04-20 21:20:47',3);
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

-- Dump completed on 2017-04-21 15:37:42
