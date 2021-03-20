/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.18-MariaDB : Database - mahasiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mahasiswa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `mahasiswa`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` char(13) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `progdi` char(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`progdi`) values 
('17.01.53.2001','MUHAMMAD ALI','TI'),
('17.01.53.2002','SETYA','SI'),
('17.01.53.2003','BINTANG','MI'),
('17.01.53.2004','NAGA BENAR','TI'),
('17.01.53.2005','MOCH SYAH','SI'),
('17.01.53.2006','SANGKIR ALAM','MI'),
('17.01.53.2007','GUNTUR PUTRA PETIR','TI'),
('17.01.53.2008','DHITA','SI'),
('17.01.53.2009','PANDAN WANGI','TI'),
('17.01.53.2010','GIRI PUTRI','TI'),
('17.01.53.2011','SARIYANTO','TI'),
('17.01.53.2017','VIKI FEBRI','TI');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
