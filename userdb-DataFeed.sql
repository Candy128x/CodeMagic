-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: userdb
-- ------------------------------------------------------
-- Server version	5.7.14-log

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
-- Table structure for table `hallbooking`
--

DROP TABLE IF EXISTS `hallbooking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hallbooking` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(64) DEFAULT NULL,
  `cust_cont_no` int(16) NOT NULL,
  `cust_email` varchar(64) DEFAULT NULL,
  `sta_date_time` datetime DEFAULT NULL,
  `end_date_time` datetime DEFAULT NULL,
  `tot_amt` int(16) DEFAULT NULL,
  `paid_amt` int(16) DEFAULT NULL,
  `collect_amt` int(16) DEFAULT NULL,
  PRIMARY KEY (`cust_cont_no`),
  UNIQUE KEY `cust_cont_no` (`cust_cont_no`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hallbooking`
--

LOCK TABLES `hallbooking` WRITE;
/*!40000 ALTER TABLE `hallbooking` DISABLE KEYS */;
INSERT INTO `hallbooking` VALUES (46,'sam',1146,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(47,'sam',1147,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(48,'sam',1148,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(49,'sam',1149,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(50,'sam',1150,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(51,'sam',1151,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(52,'sam',1152,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(53,'sam',1153,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(54,'sam',1154,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(55,'sam',1155,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(56,'sam',1156,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(57,'sam',1157,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(58,'sam',1158,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(59,'sam',1159,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(60,'sam',1160,'abc@m.com','2018-07-02 00:00:00','2018-07-02 00:00:00',1111,1111,1111),(43,'qwess',1221,'abc@m.com','2018-07-04 11:11:00','2018-07-05 11:11:00',222,222,222),(44,'qwe',1223,'abc@m.com','2018-06-26 00:00:00','2018-07-11 00:00:00',2222,2222,2217),(42,'sam',3222,'abc@mail.com','2018-07-11 11:11:00','2018-07-04 11:11:00',4534,4343,34543),(45,'qwe',12233,'abc@m.com','2018-06-26 00:00:00','2018-07-11 00:00:00',2222,2222,2217),(36,'sam or 22',33344,'abc@mail.com','2018-07-02 14:22:00','2018-07-17 14:22:00',333,333,333),(35,'Jhon Dave',34444,'abc@mail.com','2018-07-10 16:44:00','2018-07-02 17:55:00',4444,44444,4444),(13,'0',111111,'dedv@d.com','2018-07-12 00:00:00','2018-07-15 00:23:00',4324,34214,2312),(16,'0',111114,'dedv@d.com','2018-07-12 00:00:00','2018-07-15 00:23:00',4324,34214,2312),(17,'0',111115,'dedv@d.com','2018-07-12 00:00:00','2018-07-15 00:23:00',4324,34214,2312),(18,'0',111116,'dedv@d.com','2018-07-12 00:00:00','2018-07-15 00:23:00',4324,34214,2312),(4,'0',3324132,'cde2ew@mail.com','2018-07-06 00:00:00','2018-07-15 14:23:00',3432,34324,2321),(39,'sam Joi',4324211,'abc@mail.com','0000-00-00 00:00:00','0000-00-00 00:00:00',333,333,333);
/*!40000 ALTER TABLE `hallbooking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_addrs`
--

DROP TABLE IF EXISTS `user_addrs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_addrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_email` varchar(45) DEFAULT NULL,
  `addrs_first_line` varchar(45) DEFAULT NULL,
  `addrs_second_line` varchar(45) DEFAULT NULL,
  `addrs_city` varchar(45) DEFAULT NULL,
  `addrs_state` varchar(45) DEFAULT NULL,
  `addrs_zip_code` varchar(45) DEFAULT NULL,
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_addrs`
--

LOCK TABLES `user_addrs` WRITE;
/*!40000 ALTER TABLE `user_addrs` DISABLE KEYS */;
INSERT INTO `user_addrs` VALUES (1,'abc3@m.com','qwe','asd','Mumbai','Maharastra','400066'),(3,'abc3@m.com','qwe','asd','Mumbai','Maharastra','400066'),(4,'abc3@m.com','qaz','wsx','Kolkata','West Bengal','123456'),(6,'abc3@m.com','qaz','wsx','Kolkata','West Bengal','123456'),(8,'abc1@m.com','qwe','asd','Mumbai','Maharastra','400066'),(9,'abc1@m.com','qaz','wsx','Kolkata','West Bengal','123456'),(10,'abc3@m.com','qwe','asd','Mumbai','Maharastra','400066'),(11,'abc3@m.com','qaz','wsx','Kolkata','West Bengal','123456'),(14,'abc6@m.com','qwe','asd','Mumbai','Maharastra','400066'),(15,'abc6@m.com','qaz','wsx','Surat','Gujrat','404040'),(16,'abc7@m.com','qwe','asd','Mumbai','Maharastra','403066'),(17,'abc7@m.com','qaz','wsx','Surat','Gujrat','404040'),(19,'abc7@m.com','qwe','asd','Mumbai','Maharastra','403066'),(20,'abc7@m.com','qaz','wsx','Surat','Gujrat','404040');
/*!40000 ALTER TABLE `user_addrs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tabl`
--

DROP TABLE IF EXISTS `user_tabl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tabl` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `reset_pwd_link` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tabl`
--

LOCK TABLES `user_tabl` WRITE;
/*!40000 ALTER TABLE `user_tabl` DISABLE KEYS */;
INSERT INTO `user_tabl` VALUES (1,'sam','abc1@m.com','1e152810389936895490fe763807fbd9',NULL),(2,'jhon','abc2@m.com','abf0ec7e667380f7976189fad249a178',NULL),(3,'dev','abc3@m.com','30318e6405fb67b52692f8c2c81fcbd3',NULL);
/*!40000 ALTER TABLE `user_tabl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-30 23:44:56
