/*
SQLyog Community Edition- MySQL GUI v6.15
MySQL - 5.5.59-0ubuntu0.14.04.1-log : Database - crud_teste
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `crud_teste`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `endereco` */

CREATE TABLE `endereco` (
  `idEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `numero` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `complemento` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `bairro` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `cep` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `ddd` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `cidade` varchar(36) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idEndereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `endereco` */

/*Table structure for table `paciente` */

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `nome_mae` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `nome_pai` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `paciente` */

insert  into `paciente`(`id`,`nome`,`nome_mae`,`nome_pai`,`email`,`status`,`data`) values (1,'Luiz','Maria','Eduardo','luiz@teste.com.br',1,'2018-04-30 00:00:00');
insert  into `paciente`(`id`,`nome`,`nome_mae`,`nome_pai`,`email`,`status`,`data`) values (2,'Valter','Amanda','Jonas','valter@teste.com.br',1,'2018-04-29 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
