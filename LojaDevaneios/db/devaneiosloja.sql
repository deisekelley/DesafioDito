-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: devaneiosloja
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
-- Table structure for table `cliente`
--
CREATE DATABASE IF NOT EXISTS `DevaneiosLoja` DEFAULT CHARACTER SET utf8 ;
USE `DevaneiosLoja` ;
--ATENCAO, SE O USUARIO JA ESTVER CRIADO NECESSARIO DESCOMENTAR AQUI
-- DROP USER `devaneiosloja`@`localhost`;
 CREATE USER `devaneiosloja`@`localhost` identified by "123456";
 GRANT ALL PRIVILEGES ON DevaneiosLoja.* TO `devaneiosloja`@`localhost`;
 FLUSH PRIVILEGES;

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `CPF` int(13) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `CPF_UNIQUE` (`CPF`),
  UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Clark Joseph Kent',1130000000,'clark@yahoo.com','123456','Paraná','Guará','23'),
(2,'Deise Silva',1130000300,'deise@yahoo.com','123456','Minas','Cardeal','31'),
(3,'Bruce Wayne',1140000300,'batmanbolado@yahoo.com','1234','Paris','Louvre','34'),
(4,'Jair Ramos',1140400300,'jairzinho@yahoo.com','123456','São Paulo','Linhares','31'),
(6,'Barry Allen Rodrigo',1140002300,'barry@yahoo.com','123456','Santa Catarina','Pinho','330');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(45) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `preco` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT '10',
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Estampa Mulher Maravilha','Camisa',20,0),(2,'Estampa Logo Devaneios Azul M','Camisa',20,10),(3,'Estampa Logo Devaneios Vermelha M','Camisa',20,10),(4,'Estampa Diana e Steve Azul M','Camisa',20,10),(5,'Estampa Mulher Maravilha Vinho F','Camisa',20,10),(6,'Estampa Logo Devaneios Azul M','Camisa',20,10),(7,'Estampa Diana e Steve Azul F','Camisa',20,10);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendas`
--

DROP TABLE IF EXISTS `vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendas` (
  `idVendas` int(11) NOT NULL AUTO_INCREMENT,
  `idClienteVendas` int(11) NOT NULL,
  `idProdutoVendas` int(11) NOT NULL,
  PRIMARY KEY (`idVendas`),
  KEY `fk_Vendas_Cliente_idx` (`idClienteVendas`),
  KEY `fk_Vendas_Produto1_idx` (`idProdutoVendas`),
  CONSTRAINT `fk_Vendas_Cliente` FOREIGN KEY (`idClienteVendas`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vendas_Produto1` FOREIGN KEY (`idProdutoVendas`) REFERENCES `produto` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas`
--

LOCK TABLES `vendas` WRITE;
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` VALUES (1,1,2),(2,1,2),(3,2,3),(4,1,4),(5,3,5);
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-12 19:28:22
