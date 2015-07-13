/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.17 : Database - cms_uksquareyards
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cms_uksquareyards` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cms_uksquareyards`;

/*Table structure for table `associated_developers` */

DROP TABLE IF EXISTS `associated_developers`;

CREATE TABLE `associated_developers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `logo` varchar(500) DEFAULT NULL,
  `logo2` varchar(500) DEFAULT NULL,
  `link` text,
  `sequence` int(2) DEFAULT NULL,
  `status` int(1) DEFAULT '1' COMMENT '1=active, 0=deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `associated_developers` */

insert  into `associated_developers`(`id`,`logo`,`logo2`,`link`,`sequence`,`status`) values (1,'godrej.png','godrej1.png','http://www.google.co.in',7,1);

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `link` text,
  `sequence` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT '1' COMMENT '1=active, 0=deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `menus` */

insert  into `menus`(`id`,`name`,`link`,`sequence`,`status`) values (1,'aaa','http://www.facebook.com',3,0);

/*Table structure for table `project_in_focus` */

DROP TABLE IF EXISTS `project_in_focus`;

CREATE TABLE `project_in_focus` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) DEFAULT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `link` text,
  `sequence` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT '0' COMMENT '1=active, 0=deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `project_in_focus` */

insert  into `project_in_focus`(`id`,`image`,`title`,`link`,`sequence`,`status`) values (1,'parking-space.jpg','dasdasda','http://sdfsdf.in',2,1);

/*Table structure for table `project_in_focus_all` */

DROP TABLE IF EXISTS `project_in_focus_all`;

CREATE TABLE `project_in_focus_all` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(1000) DEFAULT NULL,
  `link` text,
  `venue` varchar(2000) DEFAULT NULL,
  `description` text,
  `region` int(4) DEFAULT NULL,
  `sequence` int(4) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `project_in_focus_all` */

insert  into `project_in_focus_all`(`id`,`image`,`link`,`venue`,`description`,`region`,`sequence`,`status`) values (1,'boxed-slide11.jpg','http://www.facebook.com','dadar','test desc here',1,1,1),(2,'boxed-slide12.jpg','rtrtertert','gdfgdfg','fdgdfgdfg',2,5,1);

/*Table structure for table `project_in_focus_region` */

DROP TABLE IF EXISTS `project_in_focus_region`;

CREATE TABLE `project_in_focus_region` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `sequence` int(2) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `project_in_focus_region` */

insert  into `project_in_focus_region`(`id`,`name`,`sequence`,`status`) values (1,'All',23,1),(2,'South',25,1),(3,'test1',101,0);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `heading` text,
  `ychoose_us` text,
  `status` int(1) DEFAULT '1' COMMENT '1=active, 0=deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`id`,`heading`,`ychoose_us`,`status`) values (1,'Test Heading','<p style=\"font-size:20px; line-height:28px; margin-bottom:20px; margin:0px auto; width:90%\">We are present in 5 countries and 14 cities in India. We are associated with more than 500 developers.</p>\r\n\r\n<p style=\"font-size:20px; line-height:28px; margin-bottom:20px; margin:0px auto; width:90%\">We take the customer through the entire lifecycle of property buying. Right from the documentation process to renting out the property and helping with the exit strategies, we are with you. Our Global Intelligence Cell (GIC) constantly endeavors to analyze latest trends, market reports and investment insights in the global realty market to keep you well informed.</p>\r\n\r\n<p style=\"font-size:20px; line-height:28px; margin-bottom:20px; margin:0px auto; width:90%\">We help diversify your real estate portfolio around the globle and are pioneers in bringing Global Properties with the best payout options to the Indian investor. Whether it is a motel project in North Dakota, student accomodation in London, or a farmland in Senegal, we help you invest your monies in the best option available globally.</p>',1);

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `header_logo` varchar(500) DEFAULT NULL,
  `status` int(1) DEFAULT '1' COMMENT '1=active, 0=deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `settings` */

insert  into `settings`(`id`,`header_logo`,`status`) values (1,'wwww.png',0);

/*Table structure for table `sliders` */

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `subtitle` text,
  `sequence` int(2) DEFAULT NULL,
  `status` int(1) DEFAULT '1' COMMENT '1=active, 0=deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `sliders` */

insert  into `sliders`(`id`,`image`,`title`,`subtitle`,`sequence`,`status`) values (1,'parking-space.jpg','sss','ddsd sdsdsd asdas<br />\r\nsdsd asdds',4,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
