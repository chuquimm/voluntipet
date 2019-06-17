-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: voluntipet
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `actualizacion`
--

DROP TABLE IF EXISTS `actualizacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actualizacion` (
  `users_idusers` int(11) NOT NULL,
  `casos_idcasos` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`users_idusers`,`casos_idcasos`),
  KEY `fk_users_has_casos_casos1_idx` (`casos_idcasos`),
  KEY `fk_users_has_casos_users_idx` (`users_idusers`),
  CONSTRAINT `fk_users_has_casos_casos1` FOREIGN KEY (`casos_idcasos`) REFERENCES `casos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_casos_users` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actualizacion`
--

LOCK TABLES `actualizacion` WRITE;
/*!40000 ALTER TABLE `actualizacion` DISABLE KEYS */;
INSERT INTO `actualizacion` VALUES (1,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `actualizacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casos`
--

DROP TABLE IF EXISTS `casos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `dia_encontrado` date DEFAULT NULL,
  `foto` longtext,
  `detalles` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casos`
--

LOCK TABLES `casos` WRITE;
/*!40000 ALTER TABLE `casos` DISABLE KEYS */;
INSERT INTO `casos` VALUES (1,'Bonbon','marcoschuquicondor@gmail.com','968574123','Urb. Las Mercedes Mz K 27','2017-12-30','./assets/img/perros/1.jpg','Parece que ha sido abandonado');
/*!40000 ALTER TABLE `casos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratos`
--

DROP TABLE IF EXISTS `contratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contratos` (
  `users_id` int(11) NOT NULL,
  `servicios_id` int(11) NOT NULL,
  `servicios_tipo_servicios_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`servicios_id`,`servicios_tipo_servicios_id`),
  KEY `fk_users_has_servicios_servicios1_idx` (`servicios_id`,`servicios_tipo_servicios_id`),
  KEY `fk_users_has_servicios_users1_idx` (`users_id`),
  CONSTRAINT `fk_users_has_servicios_servicios1` FOREIGN KEY (`servicios_id`, `servicios_tipo_servicios_id`) REFERENCES `servicios` (`id`, `tipo_servicios_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_servicios_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratos`
--

LOCK TABLES `contratos` WRITE;
/*!40000 ALTER TABLE `contratos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donaciones`
--

DROP TABLE IF EXISTS `donaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donaciones` (
  `actualizacion_users_idusers` int(11) NOT NULL,
  `actualizacion_casos_idcasos` int(11) NOT NULL,
  `servicios_id` int(11) NOT NULL,
  `servicios_tipo_servicios_id` int(11) NOT NULL,
  PRIMARY KEY (`actualizacion_users_idusers`,`actualizacion_casos_idcasos`,`servicios_id`,`servicios_tipo_servicios_id`),
  KEY `fk_actualizacion_has_servicios_servicios1_idx` (`servicios_id`,`servicios_tipo_servicios_id`),
  KEY `fk_actualizacion_has_servicios_actualizacion1_idx` (`actualizacion_users_idusers`,`actualizacion_casos_idcasos`),
  CONSTRAINT `fk_actualizacion_has_servicios_actualizacion1` FOREIGN KEY (`actualizacion_users_idusers`, `actualizacion_casos_idcasos`) REFERENCES `actualizacion` (`users_idusers`, `casos_idcasos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_actualizacion_has_servicios_servicios1` FOREIGN KEY (`servicios_id`, `servicios_tipo_servicios_id`) REFERENCES `servicios` (`id`, `tipo_servicios_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donaciones`
--

LOCK TABLES `donaciones` WRITE;
/*!40000 ALTER TABLE `donaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `donaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `tipo_servicios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`tipo_servicios_id`),
  KEY `fk_servicios_tipo_servicios1_idx` (`tipo_servicios_id`),
  CONSTRAINT `fk_servicios_tipo_servicios1` FOREIGN KEY (`tipo_servicios_id`) REFERENCES `tipo_servicios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_servicios`
--

DROP TABLE IF EXISTS `tipo_servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_servicios`
--

LOCK TABLES `tipo_servicios` WRITE;
/*!40000 ALTER TABLE `tipo_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test','a@c.c',NULL,NULL);
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

-- Dump completed on 2019-06-17 17:33:44
