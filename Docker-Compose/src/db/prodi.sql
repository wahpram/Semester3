/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.21-MariaDB-log : Database - prodi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prodi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `prodi`;

/*Table structure for table `data_user` */

DROP TABLE IF EXISTS `data_user`;

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_user` */

insert  into `data_user`(`id`,`username`,`password`) values 
(24,'annisacantik','$2y$10$71oWqsjsKRxMPjNCQaz3cOjDL09gzlIKrUi4ji6iRmsDM6cT0yiia'),
(25,'wahyu','$2y$10$UJ5U2x1j2Id6TK81oxNT/uNv6ZRUuUe0ce9iqluFWNXmG2Uept0oO'),
(26,'kalea','$2y$10$wA1U7z9e1mMblK9kD8sJjurvkd4wXWQ23g/F3d1Rw4e2PYqFVyha6'),
(27,'aku','$2y$10$As894D.4uVdupXrXGHNg9ejPzJXv7wlig6hIKS0D1dhigx3GMcU.q'),
(28,'tori','$2y$10$OGZ1Tj1Qey0ILtPxGUNw1.YtquW/CpNlky2wDbYsY40X4OB.Y7s06'),
(29,'keren','$2y$10$hbncaeLL16.YbYXPx7flW.PdZjiXER7mlwuxJlRKhqfH2nKrg5NlO'),
(30,'mahsyal','$2y$10$asQ6nCVawuctSnPfKfx.nuaDteXZ/qtXdLIU5nW/bapGdmVFQ3SSG');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `NIM` int(11) NOT NULL,
  `Namamhs` varchar(255) DEFAULT NULL,
  `Alamatmhs` varchar(255) DEFAULT NULL,
  `Kontakmhs` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`NIM`,`Namamhs`,`Alamatmhs`,`Kontakmhs`) values 
(2105551011,'I Gede Agus Kurniawan','Petak','08123456789'),
(2105551022,'Anak Agung Ayu Sri Mutiara Orlanda','Sanur','081234567322'),
(2105551086,'ANNISA SAHDA DEVINA','Bangli','081234567890'),
(2105551089,'I Komang Cleon Kalea','Bangli','081222233349'),
(2105551090,'Ni Putu Mutriara Orlanda','Badung','081234545123'),
(2105551092,'Made Wahyu Adwitya Pramaa','Bangli','08123456789'),
(2105551108,'Ayu Triannada Dewi','Amerika Serikat','08135398553'),
(2105551111,'Mahsyal','Bangli','081234987333');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
