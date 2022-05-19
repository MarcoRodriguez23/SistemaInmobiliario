CREATE DATABASE  IF NOT EXISTS `inmobiliaria` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `inmobiliaria`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: inmobiliaria
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `id` int NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` longtext,
  `imagen` varchar(200) DEFAULT NULL,
  `infoprevia` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'articulo blog 1','Descripcion para el articulo 1',NULL,'intro para articulo 1'),(2,'articulo blog 2','Descripcion para el articulo 2',NULL,'intro para articulo 2'),(3,'articulo blog 3','Descripcion para el articulo 3',NULL,'intro para articulo 3'),(4,'articulo blog 4','Descripcion para el articulo 4',NULL,'intro para articulo 4'),(5,'articulo blog 5','Descripcion para el articulo 5',NULL,'intro para articulo 5'),(6,'articulo blog 6','Descripcion para el articulo 6',NULL,'intro para articulo 6'),(7,'articulo blog 7','Descripcion para el articulo 7',NULL,'intro para articulo 7'),(8,'articulo blog 8','Descripcion para el articulo 8',NULL,'intro para articulo 8');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `citas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idPropiedad` int DEFAULT NULL,
  `nombres` varchar(60) DEFAULT NULL,
  `apellidos` varchar(60) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idEncargado` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_Encargado_FK_idx` (`idEncargado`),
  KEY `Id_propiedadCita_FK_idx` (`idPropiedad`),
  CONSTRAINT `Id_EncargadoCita_FK` FOREIGN KEY (`idEncargado`) REFERENCES `usuario` (`id`),
  CONSTRAINT `Id_propiedadCita_FK` FOREIGN KEY (`idPropiedad`) REFERENCES `propiedad` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `direccion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  `municipioDelegacion` varchar(60) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `numExterior` int DEFAULT NULL,
  `numInterior` int DEFAULT NULL,
  `linkGoogle` varchar(200) DEFAULT NULL,
  `link360` varchar(200) DEFAULT NULL,
  `CP` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `Id_DireccionPropiedad_FK` FOREIGN KEY (`id`) REFERENCES `propiedad` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direccionusuario`
--

DROP TABLE IF EXISTS `direccionusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `direccionusuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  `municipioDelegacion` varchar(60) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `Id_DireccionUsuario_FK` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccionusuario`
--

LOCK TABLES `direccionusuario` WRITE;
/*!40000 ALTER TABLE `direccionusuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccionusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foto`
--

DROP TABLE IF EXISTS `foto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `foto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) DEFAULT NULL,
  `idPropiedad` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdFoto_FK_idx` (`idPropiedad`),
  CONSTRAINT `IdFoto_FK` FOREIGN KEY (`idPropiedad`) REFERENCES `propiedad` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foto`
--

LOCK TABLES `foto` WRITE;
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propiedad`
--

DROP TABLE IF EXISTS `propiedad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propiedad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `precio` int DEFAULT NULL,
  `año` int DEFAULT NULL,
  `mt2` decimal(5,2) DEFAULT NULL,
  `mt2Construccion` decimal(5,2) DEFAULT NULL,
  `escritura` varchar(25) DEFAULT NULL,
  `estacionamiento` varchar(20) DEFAULT NULL,
  `numEstacionamientos` int DEFAULT '0',
  `numIdEstacionamiento` int DEFAULT NULL,
  `numPisos` int DEFAULT '0',
  `piso` int DEFAULT '0',
  `numDepartamento` int DEFAULT '0',
  `numElevadores` int DEFAULT '0',
  `habitaciones` int DEFAULT '0',
  `baños` int DEFAULT '0',
  `servicioH` int DEFAULT '0',
  `servicioP` int DEFAULT '0',
  `tipoPropiedad` varchar(45) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `comision` int DEFAULT NULL,
  `numPredio` varchar(20) DEFAULT NULL,
  `mantenimiento` int DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `creacion` date DEFAULT NULL,
  `idCreador` int DEFAULT '1',
  `muebles` varchar(80) DEFAULT NULL,
  `amenidades` varchar(80) DEFAULT NULL,
  `metodosVenta` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IdCategoria_FK_idx` (`categoria`),
  KEY `IdEscritura_FK_idx` (`escritura`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedad`
--

LOCK TABLES `propiedad` WRITE;
/*!40000 ALTER TABLE `propiedad` DISABLE KEYS */;
INSERT INTO `propiedad` VALUES (1,1700000,0,80.90,0.00,'Escritura','No aplica',0,0,0,0,0,0,0,0,0,0,'Terreno','venta',10,'3456765',0,'Para construir','2022-04-01',1,'','','fovissste, infonavit, credito bancario'),(3,1900000,2000,65.40,0.00,'Remate','Mécanico',2,280,1,2,34,2,2,2,1,1,'Departamento','vendida',10,'456787653',4000,'Con remodelado','2022-04-02',2,NULL,NULL,NULL),(4,2400000,2005,70.40,70.40,'Escritura','Techado',2,0,1,0,0,0,4,2,0,0,'Casa','preventa',18,'23456765432',4000,'Con remodelado','2022-04-03',3,NULL,NULL,NULL),(5,1800000,2005,90.80,90.80,'Remate','Calle',5,0,1,0,0,0,0,0,0,0,'Bodega','vendida',20,'76543212345',3000,'Para laborar','2022-04-04',6,NULL,NULL,NULL),(6,3000000,1990,70.80,70.80,'Escritura','Calle',1,0,1,0,0,0,2,3,0,0,'Local','vendida',20,'345676543',4000,'Para laborar','2022-04-05',7,NULL,NULL,NULL),(8,600000,1950,70.20,0.00,'Remate','Mécanico',2,280,0,3,0,1,0,3,0,0,'Oficina','vendida',30,'2345676543',500,'Con remodelado','2022-04-06',14,NULL,NULL,NULL),(9,1200000,0,90.40,0.00,'Cesión de derechos','No aplica',0,0,0,0,0,0,0,0,0,0,'Terreno','vendida',14,'345676543',0,'Para construir','2022-04-22',2,NULL,NULL,NULL),(10,1800000,0,90.32,0.00,'Escritura','No aplica',0,0,0,0,0,0,0,0,0,0,'Terreno','vendida',5,'3456787654',0,'Para construir','2022-04-26',2,NULL,NULL,NULL),(11,2200000,1970,90.32,0.00,'Escritura','Techado',2,280,1,234,0,2,3,3,1,1,'Departamento','vendida',25,'3456787654',5000,'Con remodelado','2022-04-26',2,NULL,NULL,NULL),(12,2400000,1980,120.70,90.64,'Escritura','Calle',5,0,1,0,0,0,0,0,0,0,'Bodega','vendida',13,'345678987654',3000,'Para laborar','2022-05-01',1,NULL,NULL,NULL),(13,1900000,1900,80.30,80.30,'Cesión de derechos','Calle',2,0,0,2,0,2,3,2,1,1,'Departamento','venta',10,'23456787654',2000,'Con remodelado','2022-05-09',2,'sala, lavadora, cocina, boiler, camas, roperos','roff garden, sala de usos multiples, gimnasio, cancha, calentador solar, alberca','fovissste'),(14,2000000,2004,120.10,110.20,'Escritura','Mécanico',2,0,3,0,0,0,3,2,1,1,'Casa','venta',11,'345676543d',3000,'Con remodelado','2022-05-18',1,'sala, lavadora, cocina, boiler, camas, roperos','roff garden, sala de usos multiples, gimnasio, cancha, calentador solar, alberca','fovissste, infonavit, credito bancario, efectivo');
/*!40000 ALTER TABLE `propiedad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicios` (
  `id` int NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` longtext,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,'Venta de inmuebles','TEXTO DE DESCRIPCIÓN','buyHouse.jpg'),(2,'Diseño de interiores y exteriores.','TEXTO DE DESCRIPCIÓN','design.jpg'),(3,'Construcción y urbanismo.','TEXTO DE DESCRIPCIÓN','urbanismo.jpg'),(4,'Gestión de créditos hipotecarios','TEXTO DE DESCRIPCIÓN','gestionCredito.jpg'),(5,'Gestión inmobiliaria','TEXTO DE DESCRIPCIÓN','gestionInmobiliaria.jpg');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `edad` varchar(2) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `nivel` varchar(1) DEFAULT NULL,
  `confirmado` tinyint DEFAULT NULL,
  `token` varchar(15) DEFAULT NULL,
  `idCreador` int DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Dan','Gallardo',NULL,'gallardoholdings644@gmail.com','$2y$10$G4b9eO.h8wK14uhc9Id4WuFELxbSF7AZ82po2I56QiZW627uUotFC','5573792800','1',1,NULL,0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `venta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idEncargado` int DEFAULT NULL,
  `idPropiedad` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `contrato` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Id_EncargadoVenta_FK_idx` (`idEncargado`),
  KEY `Id_PropiedadVenta_FK_idx` (`idPropiedad`),
  CONSTRAINT `Id_EncargadoVenta_FK` FOREIGN KEY (`idEncargado`) REFERENCES `usuario` (`id`),
  CONSTRAINT `Id_PropiedadVenta_FK` FOREIGN KEY (`idPropiedad`) REFERENCES `propiedad` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-19 13:48:06
