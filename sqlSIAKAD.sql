/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.19-MariaDB : Database - siakad_smanta
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`siakad_smanta` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `siakad_smanta`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `Id_Admin` char(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` text,
  `Email` varchar(64) DEFAULT NULL,
  `Pass` varchar(128) NOT NULL,
  PRIMARY KEY (`Id_Admin`),
  UNIQUE KEY `Id_Admin` (`Id_Admin`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`Id_Admin`,`Nama`,`Alamat`,`Email`,`Pass`) values 
('1116101','Jepri','Jalan Licin','jepricara@gmail.com','097f7fb645940d4fd8af5e9c87080c53');

/*Table structure for table `dataguru` */

DROP TABLE IF EXISTS `dataguru`;

CREATE TABLE `dataguru` (
  `NIG` char(20) NOT NULL,
  `Nama` varchar(32) DEFAULT NULL,
  `Jabatan` varchar(16) DEFAULT NULL,
  `Sebagai` varchar(16) DEFAULT NULL,
  `Alamat` text,
  `Tempat_Lahir` varchar(16) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `No_HP` varchar(16) DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `pass` varchar(128) NOT NULL,
  `Foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`NIG`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dataguru` */

insert  into `dataguru`(`NIG`,`Nama`,`Jabatan`,`Sebagai`,`Alamat`,`Tempat_Lahir`,`Tanggal_Lahir`,`No_HP`,`Email`,`pass`,`Foto`) values 
('','','','','','','0000-00-00','','','','a3f250c33e63d51eaab0209eb9138d02.jpg'),
('196909212008012016','Halimatussakdiyah','Guru','Guru Matematika','Jalan','Probolinggo','1969-09-18','0838147567899','halimatus@gmail.com','94f74487bcc4fe21d95a7c677a2c619c','template-bootstrap-sharwadarma.jpg');

/*Table structure for table `datapembina` */

DROP TABLE IF EXISTS `datapembina`;

CREATE TABLE `datapembina` (
  `NIP` char(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` text,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `No_Telpn` varchar(15) DEFAULT NULL,
  `Jabatan` varchar(15) DEFAULT NULL,
  `Pass` varchar(100) NOT NULL,
  `Foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`NIP`),
  UNIQUE KEY `NIP` (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `datapembina` */

/*Table structure for table `datasiswa` */

DROP TABLE IF EXISTS `datasiswa`;

CREATE TABLE `datasiswa` (
  `NIS` char(16) NOT NULL,
  `Nama` varchar(32) DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Alamat` text,
  `Tempat_Lahir` varchar(16) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `No_HP` varchar(16) DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `pass` varchar(128) NOT NULL,
  `Foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`NIS`),
  UNIQUE KEY `NIS` (`NIS`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `datasiswa` */

insert  into `datasiswa`(`NIS`,`Nama`,`Jenis_Kelamin`,`Alamat`,`Tempat_Lahir`,`Tanggal_Lahir`,`No_HP`,`Email`,`pass`,`Foto`) values 
('','','','','','0000-00-00','','','','template-bootstrap-sharwadarma.jpg'),
('4664','Septira Kurniati','Perempuan','Jalan Ikan Cakalang','Madiun','1998-09-03','0895396709398','kseptira@gmail.com','c6e1576f83455ea0be55a63ffba1c39e','');

/*Table structure for table `peran_user` */

DROP TABLE IF EXISTS `peran_user`;

CREATE TABLE `peran_user` (
  `kode_peran` char(1) NOT NULL,
  `nama_peran` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_peran`),
  UNIQUE KEY `nama_peran` (`nama_peran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `peran_user` */

insert  into `peran_user`(`kode_peran`,`nama_peran`) values 
('A','Admin'),
('B','Guru'),
('C','Siswa');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `kode_peran` char(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`username`,`password`,`kode_peran`) values 
('1116101','097f7fb645940d4fd8af5e9c87080c53','A'),
('196909212008012016','94f74487bcc4fe21d95a7c677a2c619c','B'),
('4664','c6e1576f83455ea0be55a63ffba1c39e','C');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
