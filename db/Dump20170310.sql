-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: teleseries
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `tbl_actors`
--

DROP TABLE IF EXISTS `tbl_actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_actors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actor_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_actors`
--

LOCK TABLES `tbl_actors` WRITE;
/*!40000 ALTER TABLE `tbl_actors` DISABLE KEYS */;
INSERT INTO `tbl_actors` VALUES (1,'Jane'),(2,'Nathan'),(3,'Robert'),(4,'Jones');
/*!40000 ALTER TABLE `tbl_actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_episode`
--

DROP TABLE IF EXISTS `tbl_episode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_episode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `episode_name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `season_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_season_id_idx` (`season_id`),
  CONSTRAINT `FK_season_id` FOREIGN KEY (`season_id`) REFERENCES `tbl_seasons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_episode`
--

LOCK TABLES `tbl_episode` WRITE;
/*!40000 ALTER TABLE `tbl_episode` DISABLE KEYS */;
INSERT INTO `tbl_episode` VALUES (1,'Episode 1 of Season 2010','images/thumbnail.jpg','images/poster.png','Thomas','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',1),(2,'Episode 1 of Season 2011','images/thumbnail.jpg','images/poster.png','David','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed',2),(3,'Episode 2','images/thumbnail.jpg','images/poster.png','Micheal','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of ',2);
/*!40000 ALTER TABLE `tbl_episode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_episode_actors`
--

DROP TABLE IF EXISTS `tbl_episode_actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_episode_actors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `episode_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_episode_id_idx` (`episode_id`),
  KEY `FK_actor_id_idx` (`actor_id`),
  CONSTRAINT `FK_actor_id` FOREIGN KEY (`actor_id`) REFERENCES `tbl_actors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_episode_id` FOREIGN KEY (`episode_id`) REFERENCES `tbl_episode` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_episode_actors`
--

LOCK TABLES `tbl_episode_actors` WRITE;
/*!40000 ALTER TABLE `tbl_episode_actors` DISABLE KEYS */;
INSERT INTO `tbl_episode_actors` VALUES (1,1,1),(2,1,2),(3,1,3),(4,2,2),(5,1,4),(6,2,1),(7,3,4);
/*!40000 ALTER TABLE `tbl_episode_actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_seasons`
--

DROP TABLE IF EXISTS `tbl_seasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_seasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `season_name` varchar(180) DEFAULT NULL,
  `season_number` int(11) DEFAULT NULL,
  `season_series_number` int(11) DEFAULT NULL,
  `season_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `series_id_idx` (`season_series_number`),
  CONSTRAINT `series_id` FOREIGN KEY (`season_series_number`) REFERENCES `tbl_series` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_seasons`
--

LOCK TABLES `tbl_seasons` WRITE;
/*!40000 ALTER TABLE `tbl_seasons` DISABLE KEYS */;
INSERT INTO `tbl_seasons` VALUES (1,'Season 2010',1,1,'Test description'),(2,'My Second Season',2,2,'My short desc'),(3,'Season 2011',2,2,NULL),(4,'Season 2010',1,4,NULL),(10,'Season Winslam',1,3,NULL);
/*!40000 ALTER TABLE `tbl_seasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_series`
--

DROP TABLE IF EXISTS `tbl_series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_series` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `series_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `series_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by_idx` (`created_by`),
  CONSTRAINT `creator` FOREIGN KEY (`created_by`) REFERENCES `tbl_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_series`
--

LOCK TABLES `tbl_series` WRITE;
/*!40000 ALTER TABLE `tbl_series` DISABLE KEYS */;
INSERT INTO `tbl_series` VALUES (1,'First Series',1,'Description here..'),(2,'Second Series',2,'About this series'),(3,'Gray Shades',1,'New Series desc'),(4,'My new series',1,'Desc here');
/*!40000 ALTER TABLE `tbl_series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'test1','pass1','test1@example.com'),(2,'test2','pass2','test2@example.com'),(3,'test3','pass3','test3@example.com'),(4,'test4','pass4','test4@example.com'),(5,'test5','pass5','test5@example.com'),(6,'test6','pass6','test6@example.com'),(7,'test7','pass7','test7@example.com'),(8,'test8','pass8','test8@example.com'),(9,'test9','pass9','test9@example.com'),(10,'test10','pass10','test10@example.com'),(11,'test11','pass11','test11@example.com'),(12,'test12','pass12','test12@example.com'),(13,'test13','pass13','test13@example.com'),(14,'test14','pass14','test14@example.com'),(15,'test15','pass15','test15@example.com'),(16,'test16','pass16','test16@example.com'),(17,'test17','pass17','test17@example.com'),(18,'test18','pass18','test18@example.com'),(19,'test19','pass19','test19@example.com'),(20,'test20','pass20','test20@example.com'),(21,'test21','pass21','test21@example.com');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-10 19:38:10
