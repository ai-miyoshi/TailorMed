-- MySQL dump 10.13  Distrib 5.5.32, for FreeBSD9.1 (amd64)
--
-- Host: mysql520.db.sakura.ne.jp    Database: tailor-med_db
-- ------------------------------------------------------
-- Server version	5.5.38-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES ujis */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `academia_supports`
--

DROP TABLE IF EXISTS `academia_supports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `academia_supports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `organization` varchar(50) DEFAULT NULL,
  `zipcode` varchar(20) NOT NULL,
  `prefecture` varchar(5) NOT NULL,
  `address` text,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `research` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academia_supports`
--

LOCK TABLES `academia_supports` WRITE;
/*!40000 ALTER TABLE `academia_supports` DISABLE KEYS */;
/*!40000 ALTER TABLE `academia_supports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
INSERT INTO `announcements` VALUES (1,'検査受付開始','MSK-IMPACT検査受付開始いたしました。','2016-01-02 12:49:50','2016-01-02 12:49:50'),(2,'国内最大数のがん遺伝子解析・治療薬情報を提示する医療サービス「MSK-IMPACT」を順天堂大学が国内初導入','順天堂大学医学部附属順天堂医院（院長：天野 篤）は、患者のがん遺伝子情報を解析し、医師に最適な治療薬情報等を提示するサービス「MSK-IMPACT（エムエスケイ-インパクト）」を国内で初めて導入し患者の受け入れを開始しました。\r\n\r\n詳細は下記のURLを参照ください。\r\n\r\nhttp://www.juntendo.ac.jp/news/20160609-02.html','2016-07-05 15:22:54','2016-07-05 15:22:54'),(3,'〜シンポジウムのお知らせ〜がん分野におけるゲノム医療実現に向けた取り組み','７月１５日開催\r\nがん分野におけるゲノム医療実現に向けた取り組み\r\n?クリニカルシークエンスがもたらすがん医療の将来像と問題点?\r\n\r\n詳細は下記のURLをご覧ください。\r\n\r\nhttp://ganpro-ict-plan.jp/event/symposium/160715/index.html','2016-07-09 09:04:06','2016-07-09 09:04:06');
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attack_logs`
--

DROP TABLE IF EXISTS `attack_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attack_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `target` varchar(10) NOT NULL,
  `client_ip` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attack_logs`
--

LOCK TABLES `attack_logs` WRITE;
/*!40000 ALTER TABLE `attack_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `attack_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultations`
--

DROP TABLE IF EXISTS `consultations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `prefecture` varchar(5) NOT NULL,
  `address` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `cancer_type` varchar(50) NOT NULL,
  `cancer_stage` int(11) NOT NULL,
  `initial_date` date DEFAULT NULL,
  `had_surgery` tinyint(4) NOT NULL,
  `anticancer_drug_name` varchar(30) NOT NULL,
  `taking_anticancer_drug` tinyint(4) NOT NULL,
  `others` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultations`
--

LOCK TABLES `consultations` WRITE;
/*!40000 ALTER TABLE `consultations` DISABLE KEYS */;
INSERT INTO `consultations` VALUES (1,'たくと','09071801125','kohsakas@m.u-tokyo.ac.jp','113-0033','北海道','Bunkyo-ku, Hongo 2-38-8-604',33,'女性','乳がん',1,'2015-08-01',1,'イレッサ',1,'テスト','2016-01-02 13:16:10',1451740570),(2,'たくと','09021654489','shinji-kohsaka@hotmail.co.jp','1130033','北海道','sa',31,'女性','nyu',1,'2015-12-01',1,'test',1,'test','2016-01-04 03:28:58',1451878138),(3,'gordon','64538138985','barny182@hotmail.com','52599','äº¬é?','kEVAuTewwcFPlJz',2,'å??æ?§','yyxjNVZdEnrZT',2,'0000-00-00',1,'gordon',1,'mphZve http://www.FyLitCl7Pf7kjQdDUOLQOuaxTXbj5iNG.com','2016-02-09 08:25:37',1455006337),(4,'gordon','64538138985','barny182@hotmail.com','52599','','kEVAuTewwcFPlJz',2,'å??æ?§','yyxjNVZdEnrZT',2,'0000-00-00',1,'gordon',1,'mphZve http://www.FyLitCl7Pf7kjQdDUOLQOuaxTXbj5iNG.com','2016-02-09 08:25:38',1455006338);
/*!40000 ALTER TABLE `consultations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `client_ip` varchar(15) NOT NULL,
  `interval_ts` varchar(200) NOT NULL,
  `total_count` int(11) NOT NULL,
  `is_locked` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
INSERT INTO `login_attempts` VALUES (1,'admin','157.82.186.100','',5,0,'2015-12-07 05:19:43','2016-04-28 12:01:37'),(2,'admin','113.197.211.87','',3,0,'2015-12-19 15:10:48','2016-01-02 12:48:56'),(3,'admin','207.38.228.55','1451185470',1,0,'2015-12-27 03:04:30','2015-12-27 03:04:30'),(4,'admin','72.76.108.66','1451673693',1,0,'2016-01-01 18:41:33','2016-01-01 18:41:33'),(5,'admin','126.77.15.190','1461845699',1,0,'2016-04-28 12:14:59','2016-04-28 12:14:59'),(6,'admin','210.237.113.221','',5,0,'2016-05-08 14:24:12','2016-07-09 09:01:20');
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(256) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','18cb4ec72ca216693a92162c1f4ef12d14cc99ee3b7b5b8535135dae04e57028','shinji-kohsaka@hotmail.co.jp',1,1,'2015-12-06 00:35:55','2015-12-07 01:58:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-12  3:00:00
