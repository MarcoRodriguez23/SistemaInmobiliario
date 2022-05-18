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
  KEY `IdEncargadoVisita_FK_idx` (`idEncargado`),
  KEY `IdPropiedadVisita_FK_idx` (`idPropiedad`),
  CONSTRAINT `IdEncargadoVisita_FK` FOREIGN KEY (`idEncargado`) REFERENCES `usuario` (`id`),
  CONSTRAINT `IdPropiedadVisita_FK` FOREIGN KEY (`idPropiedad`) REFERENCES `propiedad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
INSERT INTO `citas` VALUES (1,4,'Karyme','Romero','5544332211','2022-04-15','13:50:00',1),(2,7,'Paola','Alcazar','5566778833','2022-04-15','15:50:00',1),(3,4,'Humberto','Rodriguez','5533228866','2022-04-28','14:20:00',3),(4,5,'Alma','Rojas','5533228877','2022-04-26','15:00:00',10),(5,11,'Paola','Alcazar','5577883322','2022-04-28','14:30:00',4),(6,11,'Karyme','Romero','5533221177','2022-04-27','15:00:00',2),(7,11,'Humberto','Rodriguez','5588442233','2022-04-29','13:00:00',14),(8,4,'Paola','Romero','5588994433','2022-05-03','15:30:00',2),(9,1,'Paola','Romero','5599775533','2022-05-04','13:30:00',4),(10,12,'Humberto','Rodriguez','5577884433','2022-05-03','14:40:00',2);
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
  CONSTRAINT `IdDireccion_FK` FOREIGN KEY (`id`) REFERENCES `propiedad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
INSERT INTO `direccion` VALUES (1,'Morelos','Municipio','Calle','Colonia',450,2,'link de google','Link de 360',67231),(3,'CDMX','Iztacalco','Num 45','Rosales',450,34,'Link de google','Link de 360',89321),(4,'Estado de México','Nezahualcóyotl','Avenida 39','Estrella',450,3,'Link de google','Link de 360',89302),(5,'Morelos','Mazatepec','Las torres','Manantiales',112,3,'Link de google','Link de 360',67890),(6,'CDMX','Cuauhtémoc','Avenida principal','Doctores',390,1,'Link de google','Link de 360',90421),(8,'CDMX','Iztacalco','Num 45','Estrella',560,2,'Link de google','',78123),(9,'Estado de México','Nezahualcóyotl','Num. 50','Rosales',124,1,'','',56314),(10,'Estado de México','Ixtapaluca','4','Solidaridad',560,2,'','',56789),(11,'CDMX','Iztacalco','54','Doctores',426,2,'','',34786),(12,'Morelos','Mazatepec','Avenida 39','Rosales',456,1,'','',89123),(13,'CDMX','Iztacalco','Avenida 34','Patria',340,2,'','',45321);
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
  CONSTRAINT `IdDireccionUsuario_FK` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccionusuario`
--

LOCK TABLES `direccionusuario` WRITE;
/*!40000 ALTER TABLE `direccionusuario` DISABLE KEYS */;
INSERT INTO `direccionusuario` VALUES (1,'CDMX','Cuauhtémoc','Num 45','Doctores '),(2,'CDMX','Cuauhtémoc','Num 45','Doctores '),(3,'CDMX','Cuauhtémoc','Num 45','Doctores '),(4,'CDMX','Cuauhtémoc','Num 45','Doctores '),(6,'CDMX','Cuauhtémoc','Num 45','Doctores '),(7,'CDMX','Iztacalco','Del Mazo','Solidaridad '),(9,'Estado de México','Nezahualcóyotl','Num. 50','Estrella '),(10,'Estado de México','Nezahualcóyotl','Num. 50','Estrella '),(11,'CDMX','Tlahuac','Num 45','Prueba '),(12,'CDMX','Tlahuac','Num 45','Prueba '),(13,'CDMX','Tlahuac','Num 45','Prueba '),(14,'Estado de México','Ixtapaluca','Avenida 39','Estrella ');
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foto`
--

LOCK TABLES `foto` WRITE;
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
INSERT INTO `foto` VALUES (5,'42b3c265312d2e40d8b863b4ccc81a78.jpg',3),(6,'c3da108232771b2e689c14f352686e21.jpg',3),(7,'b8df64618479bccda1880b6e9793ff87.jpg',3),(8,'fe86b34932a0a30c5bd59dcfc35c2053.jpg',3),(9,'4fbd4456e4ec7ce316a051d7c05a0a45.jpg',3),(10,'9d6a74158e0ab0634fdcef067bc11358.jpg',2),(11,'fdf10deadd503963686ebdaabe45370c.jpg',4),(12,'85dc2c461811cacc391f8e3e997b7a26.jpg',4),(13,'bbd5a43be3557082ef059b7646856739.jpg',4),(14,'ba9f9645d6b21e6d43c0428fbfb5fa49.jpg',5),(15,'e9d356da1db315a7df789c398481da6e.jpg',6),(16,'f8b522d947c0a18f994715815ceaab8e.jpg',8),(18,'8c075bee052fb1a3bd1333632d312fd1.jpg',9),(19,'0ea4805567354198ee785730b3bf2158.jpg',10),(20,'d05998704bcb782768e7061f8b579d89.jpg',11),(21,'a9a895d0846fbb1d3dd78f23355495cc.jpg',12),(22,'cf390aca96169a6edf04737c87a951b4.jpg',1),(23,'b0afbbda727964f10ab200fa7bfb5b4a.jpg',13);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedad`
--

LOCK TABLES `propiedad` WRITE;
/*!40000 ALTER TABLE `propiedad` DISABLE KEYS */;
INSERT INTO `propiedad` VALUES (1,1700000,0,80.90,0.00,'Escritura','No aplica',0,0,0,0,0,0,0,0,0,0,'Terreno','venta',10,'3456765',0,'Para construir','2022-04-01',1,'','','fovissste, infonavit, credito bancario'),(3,1900000,2000,65.40,0.00,'Remate','Mécanico',2,280,1,2,34,2,2,2,1,1,'Departamento','vendida',10,'456787653',4000,'Con remodelado','2022-04-02',2,NULL,NULL,NULL),(4,2400000,2005,70.40,70.40,'Escritura','Techado',2,0,1,0,0,0,4,2,0,0,'Casa','preventa',18,'23456765432',4000,'Con remodelado','2022-04-03',3,NULL,NULL,NULL),(5,1800000,2005,90.80,90.80,'Remate','Calle',5,0,1,0,0,0,0,0,0,0,'Bodega','vendida',20,'76543212345',3000,'Para laborar','2022-04-04',6,NULL,NULL,NULL),(6,3000000,1990,70.80,70.80,'Escritura','Calle',1,0,1,0,0,0,2,3,0,0,'Local','vendida',20,'345676543',4000,'Para laborar','2022-04-05',7,NULL,NULL,NULL),(8,600000,1950,70.20,0.00,'Remate','Mécanico',2,280,0,3,0,1,0,3,0,0,'Oficina','vendida',30,'2345676543',500,'Con remodelado','2022-04-06',14,NULL,NULL,NULL),(9,1200000,0,90.40,0.00,'Cesión de derechos','No aplica',0,0,0,0,0,0,0,0,0,0,'Terreno','vendida',14,'345676543',0,'Para construir','2022-04-22',2,NULL,NULL,NULL),(10,1800000,0,90.32,0.00,'Escritura','No aplica',0,0,0,0,0,0,0,0,0,0,'Terreno','vendida',5,'3456787654',0,'Para construir','2022-04-26',2,NULL,NULL,NULL),(11,2200000,1970,90.32,0.00,'Escritura','Techado',2,280,1,234,0,2,3,3,1,1,'Departamento','vendida',25,'3456787654',5000,'Con remodelado','2022-04-26',2,NULL,NULL,NULL),(12,2400000,1980,120.70,90.64,'Escritura','Calle',5,0,1,0,0,0,0,0,0,0,'Bodega','vendida',13,'345678987654',3000,'Para laborar','2022-05-01',1,NULL,NULL,NULL),(13,1900000,1900,80.30,80.30,'Cesión de derechos','Calle',2,0,0,2,0,2,3,2,1,1,'Departamento','venta',10,'23456787654',2000,'Con remodelado','2022-05-09',2,'sala, lavadora, cocina, boiler, camas, roperos','roff garden, sala de usos multiples, gimnasio, cancha, calentador solar, alberca','fovissste');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Marco','Rodriguez','22','correo@correo.com','$2y$10$9zQ1O9iHZJfURmY1FeOb0edbtycFFQFXZlWHjqYK89Z.y.bA5Zmxq','5566778899','1',1,'',0),(2,'Juana','Resendiz','22','agente@agente.com','$2y$10$G4b9eO.h8wK14uhc9Id4WuFELxbSF7AZ82po2I56QiZW627uUotFC','5544332211','2',1,'',1),(3,'Gabriel','Tellez','23','agente2@agente.com','$2y$10$G4b9eO.h8wK14uhc9Id4WuFELxbSF7AZ82po2I56QiZW627uUotFC','5588990033','2',1,'',1),(4,'Karla','Pelcastre','21','vendedor@vendedor.com','$2y$10$G4b9eO.h8wK14uhc9Id4WuFELxbSF7AZ82po2I56QiZW627uUotFC','5511223344','3',1,'',2),(6,'Leonel','Ortega','25','agente3@agente.com','$2y$10$G4b9eO.h8wK14uhc9Id4WuFELxbSF7AZ82po2I56QiZW627uUotFC','5566778899','2',1,'',1),(7,'Jorge','Diaz','21','agente8@agente.com','$2y$10$EoDeaAfpRwvnWtN/8BJ6K.0jMz0e1/z1V2pEZSB3mqDx4lccOwJ4y','5566778899','2',1,'',1),(10,'Fernanda','Resendiz','23','vendedor2@vendedor.com','$2y$10$G4b9eO.h8wK14uhc9Id4WuFELxbSF7AZ82po2I56QiZW627uUotFC','5566778899','3',1,'',3),(13,'Karla','Ortega','26','1nm12rlma@gmail.com','$2y$10$POewBB.kdf6sWSwQAIuKVO8E3wPUlAwOcNJtinQV/Xf72odhdHrzG','5577889922','3',1,'',6),(14,'Frank','Perez','23','cv5233@innovaccion.mx','$2y$10$iVdpfr3sqcANGnQb.Q1bJezFyOai4TtIAyH4hMbhnyWmOcJ4q6mrm','5533221177','3',1,'',2);
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
  KEY `IdPropiedadVenta_FK_idx` (`idPropiedad`),
  KEY `IdEncargado_FK_idx` (`idEncargado`),
  CONSTRAINT `IdEncargado_FK` FOREIGN KEY (`idEncargado`) REFERENCES `usuario` (`id`),
  CONSTRAINT `IdPropiedadVenta_FK` FOREIGN KEY (`idPropiedad`) REFERENCES `propiedad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` VALUES (1,1,7,'2022-04-15',NULL),(2,1,8,'2022-04-20',NULL),(3,3,6,'2022-04-21',NULL),(4,14,9,'2022-04-22','5a1df55986c59c6c74aebc87cf2ce1b8.jpg '),(5,1,5,'2022-04-22','e8a9384f06a82d2b939ae3218ea225c8.pdf '),(6,2,3,'2022-04-26','6d675e1443bca7ff1266020b97ad9ef1.jpg '),(7,4,10,'2022-04-26','4d42018ec4c1c20a27adf1fa79f756df.jpg '),(8,4,11,'2022-05-09','de732c2e6794fb44fe6f2d9ebaef55ef.jpg '),(9,2,12,'2022-05-09','e1d77ab17324ec4eaf680702c7c85249.jpg ');
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

-- Dump completed on 2022-05-09 21:31:48
