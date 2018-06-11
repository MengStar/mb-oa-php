-- MySQL dump 10.13  Distrib 5.7.21, for osx10.13 (x86_64)
--
-- Host: azure.com    Database: xxb
-- ------------------------------------------------------
-- Server version	5.7.21

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

set global max_allowed_packet = 1024*2024*300;
--
-- Table structure for table `cash_balance`
--

DROP TABLE IF EXISTS `cash_balance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cash_balance` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `depositor` mediumint(8) unsigned NOT NULL,
  `date` date NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `currency` char(30) NOT NULL,
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `depositor` (`depositor`,`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cash_balance`
--

LOCK TABLES `cash_balance` WRITE;
/*!40000 ALTER TABLE `cash_balance` DISABLE KEYS */;
/*!40000 ALTER TABLE `cash_balance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cash_depositor`
--

DROP TABLE IF EXISTS `cash_depositor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cash_depositor` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `abbr` char(60) NOT NULL,
  `provider` char(100) NOT NULL,
  `title` char(100) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `account` char(90) NOT NULL,
  `bankcode` varchar(30) NOT NULL,
  `public` enum('0','1') NOT NULL,
  `type` enum('cash','bank','online') NOT NULL,
  `currency` char(30) NOT NULL,
  `status` enum('normal','disable') NOT NULL DEFAULT 'normal',
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cash_depositor`
--

LOCK TABLES `cash_depositor` WRITE;
/*!40000 ALTER TABLE `cash_depositor` DISABLE KEYS */;
/*!40000 ALTER TABLE `cash_depositor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cash_trade`
--

DROP TABLE IF EXISTS `cash_trade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cash_trade` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `depositor` mediumint(8) unsigned NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product` mediumint(8) unsigned NOT NULL,
  `trader` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order` mediumint(8) unsigned NOT NULL,
  `contract` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `investID` mediumint(8) unsigned NOT NULL,
  `loanID` mediumint(8) unsigned NOT NULL,
  `dept` mediumint(8) unsigned NOT NULL,
  `type` enum('in','out','transferin','transferout','invest','redeem','loan','repay') NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `exchangeRate` decimal(12,4) NOT NULL DEFAULT '1.0000',
  `currency` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `deadline` date NOT NULL,
  `handlers` varchar(255) NOT NULL,
  `category` char(30) NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `depositor` (`depositor`),
  KEY `parent` (`parent`),
  KEY `product` (`product`),
  KEY `trader` (`trader`),
  KEY `order` (`order`),
  KEY `contract` (`contract`),
  KEY `investID` (`investID`),
  KEY `loanID` (`loanID`),
  KEY `dept` (`dept`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cash_trade`
--

LOCK TABLES `cash_trade` WRITE;
/*!40000 ALTER TABLE `cash_trade` DISABLE KEYS */;
/*!40000 ALTER TABLE `cash_trade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_address`
--

DROP TABLE IF EXISTS `crm_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_address` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` char(30) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `area` mediumint(8) unsigned NOT NULL,
  `location` varchar(255) NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `objectType` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_address`
--

LOCK TABLES `crm_address` WRITE;
/*!40000 ALTER TABLE `crm_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_contact`
--

DROP TABLE IF EXISTS `crm_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_contact` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `realname` char(30) NOT NULL DEFAULT '',
  `nickname` char(30) NOT NULL,
  `resume` mediumint(8) unsigned NOT NULL,
  `origin` varchar(150) NOT NULL,
  `originAccount` varchar(255) NOT NULL,
  `status` enum('normal','wait','ignore') NOT NULL DEFAULT 'normal',
  `avatar` varchar(255) NOT NULL,
  `birthday` date NOT NULL DEFAULT '1970-01-02',
  `gender` enum('f','m','u') NOT NULL DEFAULT 'u',
  `email` char(50) NOT NULL DEFAULT '',
  `skype` char(50) NOT NULL,
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(50) NOT NULL DEFAULT '',
  `gtalk` char(50) NOT NULL DEFAULT '',
  `wangwang` char(50) NOT NULL DEFAULT '',
  `site` varchar(100) NOT NULL,
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `company` varchar(255) NOT NULL,
  `fax` char(20) NOT NULL DEFAULT '',
  `weibo` char(50) NOT NULL,
  `weixin` char(50) NOT NULL,
  `desc` text NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `contactedBy` char(30) NOT NULL,
  `contactedDate` datetime NOT NULL,
  `nextDate` date NOT NULL,
  `assignedTo` char(30) NOT NULL,
  `ignoredBy` char(30) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `realname` (`realname`),
  KEY `nickname` (`nickname`),
  KEY `origin` (`origin`),
  KEY `birthday` (`birthday`),
  KEY `email` (`email`),
  KEY `qq` (`qq`),
  KEY `mobile` (`mobile`),
  KEY `phone` (`phone`),
  KEY `createdBy` (`createdBy`),
  KEY `contactedBy` (`contactedBy`),
  KEY `contactedDate` (`contactedDate`),
  KEY `nextDate` (`nextDate`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_contact`
--

LOCK TABLES `crm_contact` WRITE;
/*!40000 ALTER TABLE `crm_contact` DISABLE KEYS */;
INSERT INTO `crm_contact` VALUES (1,'刘小星','',1,'','','normal','','1970-01-02','u','312312@qq.com','','312312312','','','','','','12311320123','','','','','','admin','2018-06-03 11:47:51','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00','','','0',0);
/*!40000 ALTER TABLE `crm_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_contract`
--

DROP TABLE IF EXISTS `crm_contract`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_contract` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `customer` mediumint(8) unsigned NOT NULL,
  `name` char(100) NOT NULL,
  `code` char(30) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `items` text NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `delivery` char(30) NOT NULL,
  `return` char(30) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `status` enum('normal','closed','canceled') NOT NULL DEFAULT 'normal',
  `contact` mediumint(8) unsigned NOT NULL,
  `address` mediumint(8) unsigned NOT NULL,
  `handlers` varchar(255) NOT NULL,
  `signedBy` char(30) NOT NULL,
  `signedDate` date NOT NULL,
  `deliveredBy` char(30) NOT NULL,
  `deliveredDate` date NOT NULL,
  `returnedBy` char(30) NOT NULL,
  `returnedDate` date NOT NULL,
  `finishedBy` char(30) NOT NULL,
  `finishedDate` date NOT NULL,
  `canceledBy` char(30) NOT NULL,
  `canceledDate` date NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `contactedBy` char(30) NOT NULL,
  `contactedDate` datetime NOT NULL,
  `nextDate` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `customer` (`customer`),
  KEY `amount` (`amount`),
  KEY `delivery` (`delivery`),
  KEY `return` (`return`),
  KEY `begin` (`begin`),
  KEY `end` (`end`),
  KEY `status` (`status`),
  KEY `handlers` (`handlers`),
  KEY `contactedDate` (`contactedDate`),
  KEY `nextDate` (`nextDate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_contract`
--

LOCK TABLES `crm_contract` WRITE;
/*!40000 ALTER TABLE `crm_contract` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_contract` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_contractorder`
--

DROP TABLE IF EXISTS `crm_contractorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_contractorder` (
  `contract` mediumint(8) unsigned NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  UNIQUE KEY `contract` (`contract`,`order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_contractorder`
--

LOCK TABLES `crm_contractorder` WRITE;
/*!40000 ALTER TABLE `crm_contractorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_contractorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_customer`
--

DROP TABLE IF EXISTS `crm_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_customer` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `type` char(30) NOT NULL,
  `relation` enum('client','provider','partner') NOT NULL DEFAULT 'client',
  `source` varchar(20) NOT NULL,
  `sourceNote` varchar(255) NOT NULL,
  `size` tinyint(3) unsigned NOT NULL,
  `industry` mediumint(8) unsigned NOT NULL,
  `area` mediumint(8) unsigned NOT NULL,
  `status` char(30) NOT NULL,
  `level` char(10) NOT NULL,
  `intension` text NOT NULL,
  `site` varchar(100) NOT NULL,
  `weibo` char(50) NOT NULL,
  `weixin` char(50) NOT NULL,
  `category` mediumint(8) NOT NULL,
  `depositor` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '0',
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `assignedTo` char(30) NOT NULL,
  `assignedBy` char(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `contactedBy` char(30) NOT NULL,
  `contactedDate` datetime NOT NULL,
  `nextDate` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `industry` (`industry`),
  KEY `size` (`size`),
  KEY `name` (`name`),
  KEY `type` (`type`),
  KEY `relation` (`relation`),
  KEY `area` (`area`),
  KEY `status` (`status`),
  KEY `level` (`level`),
  KEY `category` (`category`),
  KEY `public` (`public`),
  KEY `assignedTo` (`assignedTo`),
  KEY `contactedDate` (`contactedDate`),
  KEY `nextDate` (`nextDate`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_customer`
--

LOCK TABLES `crm_customer` WRITE;
/*!40000 ALTER TABLE `crm_customer` DISABLE KEYS */;
INSERT INTO `crm_customer` VALUES (1,'百度','','client','advertisement','',0,0,0,'potential','0','','','','',0,'','','0','admin','2018-06-03 11:47:51','admin','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00','0',0);
/*!40000 ALTER TABLE `crm_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_dating`
--

DROP TABLE IF EXISTS `crm_dating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_dating` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` varchar(30) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `action` mediumint(8) unsigned NOT NULL,
  `contact` mediumint(8) unsigned NOT NULL,
  `account` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `desc` text NOT NULL,
  `status` enum('wait','done') NOT NULL DEFAULT 'wait',
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nextDate` (`status`,`objectType`,`objectID`,`date`,`account`,`contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_dating`
--

LOCK TABLES `crm_dating` WRITE;
/*!40000 ALTER TABLE `crm_dating` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_dating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_delivery`
--

DROP TABLE IF EXISTS `crm_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_delivery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `contract` mediumint(8) unsigned NOT NULL,
  `deliveredBy` char(30) NOT NULL,
  `deliveredDate` date NOT NULL,
  `comment` text NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contract` (`contract`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_delivery`
--

LOCK TABLES `crm_delivery` WRITE;
/*!40000 ALTER TABLE `crm_delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_order`
--

DROP TABLE IF EXISTS `crm_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_order` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` char(255) NOT NULL,
  `customer` mediumint(8) unsigned NOT NULL,
  `plan` decimal(12,2) NOT NULL,
  `real` decimal(12,2) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `status` enum('normal','signed','closed') NOT NULL DEFAULT 'normal',
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `assignedTo` char(30) NOT NULL,
  `assignedBy` char(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `signedBy` char(30) NOT NULL,
  `signedDate` date NOT NULL,
  `closedBy` char(30) NOT NULL,
  `closedDate` datetime NOT NULL,
  `closedReason` enum('','payed','failed','postponed') NOT NULL DEFAULT '',
  `activatedBy` char(30) NOT NULL,
  `activatedDate` datetime NOT NULL,
  `contactedBy` char(30) NOT NULL,
  `contactedDate` datetime NOT NULL,
  `nextDate` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product` (`product`),
  KEY `customer` (`customer`),
  KEY `plan` (`plan`),
  KEY `real` (`real`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`),
  KEY `assignedTo` (`assignedTo`),
  KEY `closedBy` (`closedBy`),
  KEY `closedReason` (`closedReason`),
  KEY `contactedDate` (`contactedDate`),
  KEY `nextDate` (`nextDate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_order`
--

LOCK TABLES `crm_order` WRITE;
/*!40000 ALTER TABLE `crm_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_plan`
--

DROP TABLE IF EXISTS `crm_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_plan` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `amount` decimal(12,2) NOT NULL,
  `contract` mediumint(8) unsigned NOT NULL,
  `returnedBy` char(30) NOT NULL,
  `returnedDate` date NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contract` (`contract`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_plan`
--

LOCK TABLES `crm_plan` WRITE;
/*!40000 ALTER TABLE `crm_plan` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_resume`
--

DROP TABLE IF EXISTS `crm_resume`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_resume` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `contact` mediumint(8) unsigned NOT NULL,
  `customer` mediumint(8) unsigned NOT NULL,
  `maker` enum('0','1') NOT NULL DEFAULT '0',
  `dept` char(100) NOT NULL,
  `title` char(100) NOT NULL,
  `address` mediumint(8) unsigned NOT NULL,
  `join` char(10) NOT NULL,
  `left` char(10) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact` (`contact`),
  KEY `customer` (`customer`),
  KEY `left` (`left`),
  KEY `maker` (`maker`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_resume`
--

LOCK TABLES `crm_resume` WRITE;
/*!40000 ALTER TABLE `crm_resume` DISABLE KEYS */;
INSERT INTO `crm_resume` VALUES (1,1,1,'0','','',0,'','','0',0);
/*!40000 ALTER TABLE `crm_resume` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_salesgroup`
--

DROP TABLE IF EXISTS `crm_salesgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_salesgroup` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `users` varchar(255) NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_salesgroup`
--

LOCK TABLES `crm_salesgroup` WRITE;
/*!40000 ALTER TABLE `crm_salesgroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_salesgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crm_salespriv`
--

DROP TABLE IF EXISTS `crm_salespriv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crm_salespriv` (
  `account` char(30) NOT NULL,
  `salesgroup` mediumint(8) unsigned NOT NULL,
  `priv` enum('view','edit') NOT NULL,
  `account_id` mediumint(9) NOT NULL,
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_salespriv`
--

LOCK TABLES `crm_salespriv` WRITE;
/*!40000 ALTER TABLE `crm_salespriv` DISABLE KEYS */;
/*!40000 ALTER TABLE `crm_salespriv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_chat`
--

DROP TABLE IF EXISTS `im_chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_chat` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` char(40) NOT NULL DEFAULT '',
  `name` varchar(60) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT 'group',
  `admins` varchar(255) NOT NULL DEFAULT '',
  `committers` varchar(255) NOT NULL DEFAULT '',
  `subject` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `public` enum('0','1') NOT NULL DEFAULT '0',
  `createdBy` varchar(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `editedBy` varchar(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastActiveTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dismissDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`),
  KEY `name` (`name`),
  KEY `type` (`type`),
  KEY `public` (`public`),
  KEY `createdBy` (`createdBy`),
  KEY `editedBy` (`editedBy`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_chat`
--

LOCK TABLES `im_chat` WRITE;
/*!40000 ALTER TABLE `im_chat` DISABLE KEYS */;
INSERT INTO `im_chat` VALUES (1,'ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','system group','system','','',0,'0','system','2018-05-25 21:34:42','','0000-00-00 00:00:00','2018-06-08 17:04:25','0000-00-00 00:00:00',0),(8,'4&6','[Chat-NaN]','one2one','','',0,'0','demo4','2018-06-08 16:59:10','','0000-00-00 00:00:00','2018-06-08 16:59:12','0000-00-00 00:00:00',0),(9,'682e55a8-94fe-4020-b246-5d5345187f33','1','group','','',0,'0','demo4','2018-06-08 16:59:35','','0000-00-00 00:00:00','2018-06-08 16:59:39','0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `im_chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_chatuser`
--

DROP TABLE IF EXISTS `im_chatuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_chatuser` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cgid` char(40) NOT NULL DEFAULT '',
  `user` mediumint(8) NOT NULL DEFAULT '0',
  `order` smallint(5) NOT NULL DEFAULT '0',
  `star` enum('0','1') NOT NULL DEFAULT '0',
  `hide` enum('0','1') NOT NULL DEFAULT '0',
  `mute` enum('0','1') NOT NULL DEFAULT '0',
  `join` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category` varchar(40) NOT NULL DEFAULT '',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chatuser` (`cgid`,`user`),
  KEY `cgid` (`cgid`),
  KEY `user` (`user`),
  KEY `order` (`order`),
  KEY `star` (`star`),
  KEY `hide` (`hide`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_chatuser`
--

LOCK TABLES `im_chatuser` WRITE;
/*!40000 ALTER TABLE `im_chatuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `im_chatuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_message`
--

DROP TABLE IF EXISTS `im_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` char(40) NOT NULL DEFAULT '',
  `cgid` char(40) NOT NULL DEFAULT '',
  `user` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order` bigint(8) unsigned NOT NULL,
  `type` enum('normal','broadcast','notify') NOT NULL DEFAULT 'normal',
  `content` text NOT NULL,
  `contentType` enum('text','emotion','image','file','object') NOT NULL DEFAULT 'text',
  `data` text NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mgid` (`gid`),
  KEY `mcgid` (`cgid`),
  KEY `muser` (`user`),
  KEY `mtype` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_message`
--

LOCK TABLES `im_message` WRITE;
/*!40000 ALTER TABLE `im_message` DISABLE KEYS */;
INSERT INTO `im_message` VALUES (96,'7d533e85-3696-4ed8-a290-3714034495f3','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','2','2018-06-08 17:03:01',17,'normal','@老王 @老王 ','text','',0),(97,'f00ced2e-9b6a-4d67-bb9c-c1d8f9ae6462','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','2','2018-06-08 17:03:06',18,'normal','135416351','text','',0),(98,'f8d8d4a5-f94b-46a9-999a-1ed315ab6f87','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','6','2018-06-08 17:03:39',19,'normal','fsd ','text','',0),(99,'d5349b02-9506-448f-8bd1-54ea820e660c','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','6','2018-06-08 17:04:12',20,'normal','tertrete','text','',0),(100,'2470ab79-52ec-4d4f-b051-687d2441e675','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','6','2018-06-08 17:04:25',21,'normal','][p\\[p','text','',0);
/*!40000 ALTER TABLE `im_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `im_messagestatus`
--

DROP TABLE IF EXISTS `im_messagestatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `im_messagestatus` (
  `user` mediumint(8) NOT NULL DEFAULT '0',
  `gid` char(40) NOT NULL DEFAULT '',
  `status` enum('waiting','sent','readed','deleted') NOT NULL DEFAULT 'waiting',
  `account_id` mediumint(9) NOT NULL,
  UNIQUE KEY `user` (`user`,`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_messagestatus`
--

LOCK TABLES `im_messagestatus` WRITE;
/*!40000 ALTER TABLE `im_messagestatus` DISABLE KEYS */;
INSERT INTO `im_messagestatus` VALUES (4,'d5349b02-9506-448f-8bd1-54ea820e660c','sent',0),(1,'f70d4949-a1bb-44a6-a423-a950bb1b9a65','sent',0),(1,'514fce66-ff86-e07e-352b-633202bbb8f7','sent',0),(1,'7d533e85-3696-4ed8-a290-3714034495f3','sent',0),(1,'98f27540-83ab-4ab9-be61-95b69cf05a48','sent',0),(6,'2470ab79-52ec-4d4f-b051-687d2441e675','sent',0),(1,'8becbb2c-7861-7b8d-8ed5-07b64ab41be9','sent',0),(1,'ec292019-f1ed-2f6b-0ac2-4c47e27568f9','sent',0),(5,'f8d8d4a5-f94b-46a9-999a-1ed315ab6f87','waiting',0),(1,'ee3302bf-aba7-0d12-081f-9852beaf2ad1','sent',0),(1,'f9263add-613c-03d2-b084-9fd53aa4f8de','sent',0),(1,'fd6794be-b4db-8c2c-1c88-14ad285ab602','sent',0),(1,'7167df99-ec14-d329-abad-bc142bb6673d','sent',0),(1,'e98e453d-4180-7e7c-553a-62f82f9dd822','sent',0),(6,'f8d8d4a5-f94b-46a9-999a-1ed315ab6f87','sent',0),(1,'b24eb8c8-c968-0630-e9af-fb7946733165','sent',0),(1,'05cfc623-81ce-7e3b-ac1e-409c75529247','sent',0),(1,'b2930564-e08b-45a0-af62-69ae48a77acb','sent',0),(3,'b2930564-e08b-45a0-af62-69ae48a77acb','sent',0),(2,'7d533e85-3696-4ed8-a290-3714034495f3','sent',0),(1,'f8d8d4a5-f94b-46a9-999a-1ed315ab6f87','sent',0),(2,'40e8497c-7ab6-ccb0-3599-3219a85b9e76','sent',0),(1,'aa10ab1d-8315-4948-9850-b643c08b3215','sent',0),(5,'d5349b02-9506-448f-8bd1-54ea820e660c','waiting',0),(2,'7b535eda-e98f-45c5-baaf-6a52d64668a2','sent',0),(1,'70d195cd-c60a-4f75-828d-c4607607d6a9','sent',0),(1,'ed8e12da-d8de-4f27-8fcd-5b7786f8d996','sent',0),(5,'7d533e85-3696-4ed8-a290-3714034495f3','waiting',0),(3,'95472623-86ca-412d-9194-fc247b8c6c3f','sent',0),(4,'7d533e85-3696-4ed8-a290-3714034495f3','sent',0),(3,'37de3d0a-594c-4ea1-bf32-429fa86e3628','sent',0),(2,'431bf42d-1f0a-4b47-84da-ddcd8e4fe235','sent',0),(2,'4f7c3bf0-432f-4693-be3d-22e8fe04c5fa','sent',0),(3,'4f7c3bf0-432f-4693-be3d-22e8fe04c5fa','sent',0),(1,'f8d8040a-6c71-b9c9-bac4-8dd27fcd4ac7','sent',0),(1,'4e085be6-7a16-482e-95cd-c50703c02432','sent',0),(2,'4e085be6-7a16-482e-95cd-c50703c02432','sent',0),(3,'4e085be6-7a16-482e-95cd-c50703c02432','sent',0),(1,'4dd00535-8f29-4e8c-a04b-c2eebf1b3479','sent',0),(3,'4dd00535-8f29-4e8c-a04b-c2eebf1b3479','sent',0),(1,'8060d402-7113-4642-91d5-996d3fca5609','sent',0),(6,'d5349b02-9506-448f-8bd1-54ea820e660c','sent',0),(1,'ca277adb-549f-4485-841f-10be94db435f','sent',0),(2,'ca277adb-549f-4485-841f-10be94db435f','sent',0),(4,'f8d8d4a5-f94b-46a9-999a-1ed315ab6f87','sent',0),(3,'74f11da5-5484-4c23-adbb-c35ed7b9d5c8','sent',0),(1,'b281b44b-c81c-4b06-afa8-8b3bb3343ace','sent',0),(3,'b281b44b-c81c-4b06-afa8-8b3bb3343ace','sent',0),(1,'79caa92a-e8d6-490d-90aa-705bc1952cc9','sent',0),(2,'be2157e6-d8c1-415b-915e-4cafbab68685','sent',0),(1,'21892e47-7dcb-45a6-82fb-b96bfd26513e','sent',0),(2,'21892e47-7dcb-45a6-82fb-b96bfd26513e','sent',0),(2,'3e3438df-0520-42e1-8085-01b7f0768797','sent',0),(1,'ec33272c-e43d-46d2-a6d2-f21174faf31e','sent',0),(2,'f00ced2e-9b6a-4d67-bb9c-c1d8f9ae6462','sent',0),(3,'d5349b02-9506-448f-8bd1-54ea820e660c','waiting',0),(1,'12422f26-e0a6-41f9-911b-d47a85b34bcb','sent',0),(4,'2470ab79-52ec-4d4f-b051-687d2441e675','sent',0),(2,'a154820a-79f6-4f28-b107-c5fdb304647c','sent',0),(2,'ffcb09f3-ed39-4c9d-bbbc-df5d27edbf88','sent',0),(5,'f00ced2e-9b6a-4d67-bb9c-c1d8f9ae6462','waiting',0),(2,'eb1e76a4-e96d-4611-895e-0ab9d2011889','sent',0),(1,'2470ab79-52ec-4d4f-b051-687d2441e675','sent',0),(1,'f00ced2e-9b6a-4d67-bb9c-c1d8f9ae6462','sent',0),(1,'89b0ae49-4de7-4668-9a5c-1fcbf5c8f9cf','sent',0),(1,'d7a4b89a-6486-40b6-931c-a2a6834f1db0','sent',0),(1,'6b539531-8c20-4a53-8261-8debddb38ae7','sent',0),(2,'6b539531-8c20-4a53-8261-8debddb38ae7','sent',0),(2,'68461c37-0783-4ca5-8aa4-199dcbdd95b7','sent',0),(3,'f8d8d4a5-f94b-46a9-999a-1ed315ab6f87','waiting',0),(3,'7d533e85-3696-4ed8-a290-3714034495f3','waiting',0),(1,'0b341284-afe6-45ca-95a6-b3bf3005682d','sent',0),(2,'0b341284-afe6-45ca-95a6-b3bf3005682d','sent',0),(1,'fbda9d04-5323-4b04-85ef-92d6a70ff5a3','sent',0),(2,'fbda9d04-5323-4b04-85ef-92d6a70ff5a3','sent',0),(3,'2470ab79-52ec-4d4f-b051-687d2441e675','waiting',0),(2,'f061eb46-4acd-4760-9964-c077879d9850','sent',0),(1,'f065fc6f-2afc-47cd-9d9e-7964d906fc18','sent',0),(2,'f065fc6f-2afc-47cd-9d9e-7964d906fc18','sent',0),(1,'b59b7e7e-6c03-4d6a-ac28-9108960696b3','sent',0),(2,'b59b7e7e-6c03-4d6a-ac28-9108960696b3','sent',0),(1,'c070a44f-dce3-4213-a36d-5302ec9c020f','sent',0),(1,'d5349b02-9506-448f-8bd1-54ea820e660c','sent',0),(1,'c38c746d-7cec-47ca-9dc4-4813e2ca5e3d','sent',0),(2,'c38c746d-7cec-47ca-9dc4-4813e2ca5e3d','sent',0),(4,'f00ced2e-9b6a-4d67-bb9c-c1d8f9ae6462','sent',0),(5,'2470ab79-52ec-4d4f-b051-687d2441e675','waiting',0),(1,'b5cc27ae-a4ff-4617-95f9-71c8ff0f7cfd','sent',0),(2,'b5cc27ae-a4ff-4617-95f9-71c8ff0f7cfd','sent',0),(3,'f00ced2e-9b6a-4d67-bb9c-c1d8f9ae6462','waiting',0),(1,'2166ab45-49e1-404e-8140-450548a6f11b','sent',0),(2,'2166ab45-49e1-404e-8140-450548a6f11b','sent',0),(1,'2dbe3198-3091-4cc6-a22e-b21b65421730','sent',0),(1,'e2e8da68-9f61-47ca-bd05-5ee3335e5fb0','sent',0),(2,'ef1c4a9a-8f1c-4a7d-9094-bdd9f517eba1','sent',0),(1,'dec43aa5-eb5b-4de7-9194-01cd48ad8e70','sent',0),(1,'c6034fa4-afad-58ba-db6e-16967b4e57dd','sent',0),(1,'64d0eca7-810f-4b11-96b7-dd03af72c5f1','sent',0),(2,'64d0eca7-810f-4b11-96b7-dd03af72c5f1','sent',0),(2,'addebb6d-1c38-de5c-b82d-27b804a2202c','sent',0),(1,'432c7b6d-a325-4423-aedb-94e3df6f3dc9','sent',0),(4,'432c7b6d-a325-4423-aedb-94e3df6f3dc9','sent',0),(3,'432c7b6d-a325-4423-aedb-94e3df6f3dc9','sent',0),(2,'3617d433-1da6-44fd-9cae-3b40150768a3','sent',0),(1,'13e06fac-3d1e-4128-a5f0-728dbed73b18','sent',0),(2,'13e06fac-3d1e-4128-a5f0-728dbed73b18','sent',0),(4,'13e06fac-3d1e-4128-a5f0-728dbed73b18','sent',0),(3,'13e06fac-3d1e-4128-a5f0-728dbed73b18','sent',0),(2,'b1084c2d-f5fb-47b7-897e-f56d62759d94','sent',0),(4,'b1084c2d-f5fb-47b7-897e-f56d62759d94','sent',0),(2,'15f79198-263e-4e3a-b65a-87aeb032cebb','sent',0),(3,'6d4fe3c8-1e13-1753-c18a-ff7022a5f74e','sent',0),(3,'1920426a-3d79-4a57-8547-c1ed68036f92','sent',0),(4,'1920426a-3d79-4a57-8547-c1ed68036f92','sent',0),(3,'192cfde7-5339-4090-8c42-4f473a6232ae','sent',0),(1,'192cfde7-5339-4090-8c42-4f473a6232ae','sent',0),(2,'192cfde7-5339-4090-8c42-4f473a6232ae','sent',0),(4,'192cfde7-5339-4090-8c42-4f473a6232ae','sent',0),(1,'dae7ea5f-688f-477d-aac1-cd4eb1f42507','sent',0),(2,'dae7ea5f-688f-477d-aac1-cd4eb1f42507','sent',0),(4,'dae7ea5f-688f-477d-aac1-cd4eb1f42507','sent',0),(3,'dae7ea5f-688f-477d-aac1-cd4eb1f42507','waiting',0),(1,'4ecf8367-4a39-4fb9-9632-0593fd219e06','sent',0),(2,'4ecf8367-4a39-4fb9-9632-0593fd219e06','sent',0),(4,'4ecf8367-4a39-4fb9-9632-0593fd219e06','sent',0),(3,'4ecf8367-4a39-4fb9-9632-0593fd219e06','waiting',0),(1,'6a1afb38-65ab-44d6-8e81-fe932977eeda','sent',0),(2,'6a1afb38-65ab-44d6-8e81-fe932977eeda','sent',0),(4,'6a1afb38-65ab-44d6-8e81-fe932977eeda','sent',0),(3,'6a1afb38-65ab-44d6-8e81-fe932977eeda','waiting',0),(1,'79db0a13-132d-48a4-972e-7d26d8d08d0c','sent',0),(2,'79db0a13-132d-48a4-972e-7d26d8d08d0c','sent',0),(4,'79db0a13-132d-48a4-972e-7d26d8d08d0c','sent',0),(3,'79db0a13-132d-48a4-972e-7d26d8d08d0c','waiting',0),(1,'d33eee81-f8ea-4f71-b223-8a10b60ec65a','sent',0),(2,'d33eee81-f8ea-4f71-b223-8a10b60ec65a','sent',0),(4,'d33eee81-f8ea-4f71-b223-8a10b60ec65a','sent',0),(3,'d33eee81-f8ea-4f71-b223-8a10b60ec65a','waiting',0),(1,'85ab54bb-74f4-4632-80cd-f83dd3c37281','sent',0),(2,'85ab54bb-74f4-4632-80cd-f83dd3c37281','sent',0),(4,'85ab54bb-74f4-4632-80cd-f83dd3c37281','sent',0),(3,'85ab54bb-74f4-4632-80cd-f83dd3c37281','waiting',0),(1,'2d7ad487-ad9f-49c4-8ec4-efd6c1bfa499','sent',0),(2,'2d7ad487-ad9f-49c4-8ec4-efd6c1bfa499','sent',0),(4,'2d7ad487-ad9f-49c4-8ec4-efd6c1bfa499','sent',0),(3,'2d7ad487-ad9f-49c4-8ec4-efd6c1bfa499','waiting',0),(6,'ae140262-fc37-154a-636a-51b64fd3b411','sent',0),(6,'517eee80-b33f-4a10-8dc6-5587f41c5831','sent',0),(4,'517eee80-b33f-4a10-8dc6-5587f41c5831','sent',0),(6,'8bd6b138-30d9-4c46-badf-18892e5d9555','sent',0),(1,'8bd6b138-30d9-4c46-badf-18892e5d9555','sent',0),(4,'8bd6b138-30d9-4c46-badf-18892e5d9555','sent',0),(3,'8bd6b138-30d9-4c46-badf-18892e5d9555','waiting',0),(5,'8bd6b138-30d9-4c46-badf-18892e5d9555','waiting',0);
/*!40000 ALTER TABLE `im_messagestatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_attend`
--

DROP TABLE IF EXISTS `oa_attend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_attend` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `date` date NOT NULL,
  `signIn` time NOT NULL,
  `signOut` time NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL,
  `device` varchar(30) NOT NULL,
  `client` varchar(20) NOT NULL,
  `manualIn` time NOT NULL,
  `manualOut` time NOT NULL,
  `reason` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `reviewStatus` varchar(30) NOT NULL DEFAULT '',
  `reviewedBy` char(30) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `attend` (`date`,`account`),
  KEY `account` (`account`),
  KEY `date` (`date`),
  KEY `status` (`status`),
  KEY `reason` (`reason`),
  KEY `reviewStatus` (`reviewStatus`),
  KEY `reviewedBy` (`reviewedBy`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_attend`
--

LOCK TABLES `oa_attend` WRITE;
/*!40000 ALTER TABLE `oa_attend` DISABLE KEYS */;
INSERT INTO `oa_attend` VALUES (1,'admin','2018-05-25','22:18:30','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(2,'admin','2018-05-26','09:11:09','00:00:00','rest','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(3,'demo','2018-05-26','11:20:54','00:00:00','rest','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(4,'admin','2018-05-28','09:12:40','00:00:00','both','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(5,'demo','2018-05-28','12:04:29','00:00:00','both','::1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(6,'admin','2018-05-30','00:10:49','00:00:00','early','10.255.0.2','desktop','desktop','00:00:00','18:00:00','normal','','wait','','0000-00-00 00:00:00',0),(7,'admin','2018-05-31','16:32:03','00:00:00','both','::1','desktop','desktop','09:00:00','00:00:00','normal','','wait','','0000-00-00 00:00:00',0),(8,'demo','2018-05-31','18:16:07','00:00:00','both','::1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(9,'admin','2018-05-20','00:00:00','00:00:00','overtime','','','','00:00:00','00:00:00','overtime','','','','0000-00-00 00:00:00',0),(10,'admin','2018-06-03','08:59:06','00:00:00','rest','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(11,'admin','2018-06-04','20:59:05','00:00:00','both','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(12,'demo','2018-06-04','22:08:43','00:00:00','both','::1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(13,'demo','2018-06-05','10:59:55','00:00:00','both','::1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(14,'admin','2018-06-05','11:04:57','00:00:00','both','::1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(15,'admin','2018-06-06','12:44:56','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(16,'demo','2018-06-06','21:57:55','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(17,'admin','2018-06-07','00:05:36','00:00:00','early','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(18,'demo','2018-06-07','01:17:07','00:00:00','early','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(19,'admin','2018-06-08','11:34:48','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(20,'demo','2018-06-08','12:16:38','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(21,'demo1','2018-06-08','14:38:52','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(22,'demo4','2018-06-08','16:48:44','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(23,'demo2','2018-06-08','23:44:50','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(24,'admin','2018-06-09','00:00:37','00:00:00','rest','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(25,'admin','2018-06-11','09:53:17','00:00:00','both','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `oa_attend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_attendstat`
--

DROP TABLE IF EXISTS `oa_attendstat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_attendstat` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `month` char(10) NOT NULL DEFAULT '',
  `normal` decimal(12,2) NOT NULL DEFAULT '0.00',
  `late` decimal(12,2) NOT NULL DEFAULT '0.00',
  `early` decimal(12,2) NOT NULL DEFAULT '0.00',
  `absent` decimal(12,2) NOT NULL DEFAULT '0.00',
  `trip` decimal(12,2) NOT NULL DEFAULT '0.00',
  `egress` decimal(12,2) NOT NULL DEFAULT '0.00',
  `lieu` decimal(12,2) NOT NULL DEFAULT '0.00',
  `paidLeave` decimal(12,2) NOT NULL DEFAULT '0.00',
  `unpaidLeave` decimal(12,2) NOT NULL DEFAULT '0.00',
  `timeOvertime` decimal(12,2) NOT NULL DEFAULT '0.00',
  `restOvertime` decimal(12,2) NOT NULL DEFAULT '0.00',
  `holidayOvertime` decimal(12,2) NOT NULL DEFAULT '0.00',
  `deserve` decimal(12,2) NOT NULL DEFAULT '0.00',
  `actual` decimal(12,2) NOT NULL DEFAULT '0.00',
  `status` char(30) NOT NULL DEFAULT '',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `attend` (`month`,`account`),
  KEY `account` (`account`),
  KEY `month` (`month`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_attendstat`
--

LOCK TABLES `oa_attendstat` WRITE;
/*!40000 ALTER TABLE `oa_attendstat` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_attendstat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_doc`
--

DROP TABLE IF EXISTS `oa_doc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_doc` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `lib` mediumint(8) unsigned NOT NULL,
  `module` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `views` mediumint(8) unsigned NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `version` smallint(5) unsigned NOT NULL DEFAULT '1',
  `private` enum('0','1') NOT NULL DEFAULT '0',
  `users` text NOT NULL,
  `groups` varchar(255) NOT NULL DEFAULT '',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_doc`
--

LOCK TABLES `oa_doc` WRITE;
/*!40000 ALTER TABLE `oa_doc` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_doc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_doccontent`
--

DROP TABLE IF EXISTS `oa_doccontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_doccontent` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `doc` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `digest` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `files` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `docVersion` (`doc`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_doccontent`
--

LOCK TABLES `oa_doccontent` WRITE;
/*!40000 ALTER TABLE `oa_doccontent` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_doccontent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_doclib`
--

DROP TABLE IF EXISTS `oa_doclib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_doclib` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `project` mediumint(8) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `private` enum('0','1') NOT NULL DEFAULT '0',
  `users` text NOT NULL,
  `groups` varchar(255) NOT NULL DEFAULT '',
  `main` enum('0','1') NOT NULL DEFAULT '0',
  `order` tinyint(5) unsigned NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_doclib`
--

LOCK TABLES `oa_doclib` WRITE;
/*!40000 ALTER TABLE `oa_doclib` DISABLE KEYS */;
INSERT INTO `oa_doclib` VALUES (1,1,'项目主库','0',',admin,','1,2,3,4,5','1',0,'admin','2018-05-26 11:30:05','','0000-00-00 00:00:00','0',0);
/*!40000 ALTER TABLE `oa_doclib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_holiday`
--

DROP TABLE IF EXISTS `oa_holiday`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_holiday` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `type` enum('holiday','working') NOT NULL DEFAULT 'holiday',
  `desc` text NOT NULL,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_holiday`
--

LOCK TABLES `oa_holiday` WRITE;
/*!40000 ALTER TABLE `oa_holiday` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_holiday` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_leave`
--

DROP TABLE IF EXISTS `oa_leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_leave` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `hours` float(4,1) unsigned NOT NULL DEFAULT '0.0',
  `backDate` datetime NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `reviewedBy` char(30) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_leave`
--

LOCK TABLES `oa_leave` WRITE;
/*!40000 ALTER TABLE `oa_leave` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_lieu`
--

DROP TABLE IF EXISTS `oa_lieu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_lieu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `hours` float(4,1) unsigned NOT NULL DEFAULT '0.0',
  `overtime` char(255) NOT NULL,
  `desc` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `reviewedBy` char(30) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_lieu`
--

LOCK TABLES `oa_lieu` WRITE;
/*!40000 ALTER TABLE `oa_lieu` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_lieu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_overtime`
--

DROP TABLE IF EXISTS `oa_overtime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_overtime` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `hours` float(4,1) unsigned NOT NULL DEFAULT '0.0',
  `leave` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `rejectReason` varchar(100) NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `reviewedBy` char(30) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_overtime`
--

LOCK TABLES `oa_overtime` WRITE;
/*!40000 ALTER TABLE `oa_overtime` DISABLE KEYS */;
INSERT INTO `oa_overtime` VALUES (1,'2018','2018-05-20','2018-05-20','09:00:00','18:00:00',9.0,'','time','','pass','','admin','2018-05-31 21:12:19','admin','2018-05-31 21:12:37',0);
/*!40000 ALTER TABLE `oa_overtime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_project`
--

DROP TABLE IF EXISTS `oa_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_project` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `desc` text NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` enum('doing','finished','suspend') NOT NULL DEFAULT 'doing',
  `whitelist` varchar(255) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_project`
--

LOCK TABLES `oa_project` WRITE;
/*!40000 ALTER TABLE `oa_project` DISABLE KEYS */;
INSERT INTO `oa_project` VALUES (1,'1','1','1899-11-29','2018-05-31','admin','2018-05-26 11:30:05','','0000-00-00 00:00:00','doing','1,2,3,4,5','0',0);
/*!40000 ALTER TABLE `oa_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_refund`
--

DROP TABLE IF EXISTS `oa_refund`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_refund` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `customer` mediumint(8) unsigned NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `contract` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `name` char(150) NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `dept` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `category` char(30) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `desc` text NOT NULL,
  `related` char(200) NOT NULL DEFAULT '',
  `status` char(30) NOT NULL DEFAULT 'wait',
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editedBy` char(30) NOT NULL DEFAULT '',
  `editedDate` datetime NOT NULL,
  `firstReviewer` char(30) NOT NULL DEFAULT '',
  `firstReviewDate` datetime NOT NULL,
  `secondReviewer` char(30) NOT NULL DEFAULT '',
  `secondReviewDate` datetime NOT NULL,
  `refundBy` char(30) NOT NULL DEFAULT '',
  `refundDate` datetime NOT NULL,
  `reason` text NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `createdBy` (`createdBy`),
  KEY `firstReviewer` (`firstReviewer`),
  KEY `secondReviewer` (`secondReviewer`),
  KEY `refundBy` (`refundBy`),
  KEY `category` (`category`),
  KEY `date` (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_refund`
--

LOCK TABLES `oa_refund` WRITE;
/*!40000 ALTER TABLE `oa_refund` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_refund` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_todo`
--

DROP TABLE IF EXISTS `oa_todo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_todo` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `date` date NOT NULL,
  `begin` smallint(4) unsigned zerofill NOT NULL,
  `end` smallint(4) unsigned zerofill NOT NULL,
  `type` char(20) NOT NULL,
  `idvalue` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pri` tinyint(3) unsigned NOT NULL,
  `name` char(150) NOT NULL,
  `desc` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT '',
  `private` tinyint(1) NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedBy` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `finishedBy` varchar(30) NOT NULL DEFAULT '',
  `finishedDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_todo`
--

LOCK TABLES `oa_todo` WRITE;
/*!40000 ALTER TABLE `oa_todo` DISABLE KEYS */;
INSERT INTO `oa_todo` VALUES (1,'demo4','2018-06-08',2400,2400,'custom',0,3,'热污染翁','<p>热污染翁</p>\n<div class=\"hidden xxc-todo-source\" style=\"display: none\">热污染翁</div>','wait',0,'','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `oa_todo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oa_trip`
--

DROP TABLE IF EXISTS `oa_trip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oa_trip` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('trip','egress') NOT NULL DEFAULT 'trip',
  `customers` varchar(20) NOT NULL,
  `name` char(30) NOT NULL,
  `desc` text NOT NULL,
  `year` char(4) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `from` char(50) NOT NULL,
  `to` char(50) NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_trip`
--

LOCK TABLES `oa_trip` WRITE;
/*!40000 ALTER TABLE `oa_trip` DISABLE KEYS */;
/*!40000 ALTER TABLE `oa_trip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_action`
--

DROP TABLE IF EXISTS `sys_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_action` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `customer` mediumint(8) unsigned DEFAULT NULL,
  `contact` mediumint(8) unsigned DEFAULT NULL,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `actor` varchar(30) NOT NULL DEFAULT '',
  `action` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `comment` text NOT NULL,
  `extra` varchar(255) NOT NULL,
  `read` enum('0','1') NOT NULL DEFAULT '0',
  `reader` text NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer` (`customer`),
  KEY `contact` (`contact`),
  KEY `objectType` (`objectType`),
  KEY `objectID` (`objectID`),
  KEY `date` (`date`)
) ENGINE=MyISAM AUTO_INCREMENT=1325 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_action`
--

LOCK TABLES `sys_action` WRITE;
/*!40000 ALTER TABLE `sys_action` DISABLE KEYS */;
INSERT INTO `sys_action` VALUES (1,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:18:31','','xuanxuan','0','',0),(2,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 22:21:31','','xuanxuan','0','',0),(56,0,0,'user',1,'admin','logout','2018-05-28 12:00:27','','','0','',0),(57,0,0,'user',1,'admin','login','2018-05-28 12:01:59','','','0','',0),(58,0,0,'user',1,'admin','logout','2018-05-28 12:03:16','','','0','',0),(59,0,0,'user',2,'demo','login','2018-05-28 12:04:29','','','0','',0),(60,0,0,'user',2,'demo','logout','2018-05-28 12:18:04','','','0','',0),(61,0,0,'user',1,'admin','login','2018-05-28 12:23:56','','','0','',0),(62,0,0,'user',1,'admin','logout','2018-05-28 12:24:24','','','0','',0),(63,0,0,'user',1,'admin','login','2018-05-28 12:24:28','','','0','',0),(64,0,0,'user',1,'admin','logout','2018-05-28 12:26:31','','','0','',0),(65,0,0,'user',1,'admin','login','2018-05-28 12:26:36','','','0','',0),(66,0,0,'user',1,'admin','logout','2018-05-28 12:29:13','','','0','',0),(67,0,0,'user',1,'admin','login','2018-05-28 12:29:17','','','0','',0),(68,0,0,'user',1,'admin','login','2018-05-30 00:10:49','','','0','',0),(69,0,0,'user',1,'admin','login','2018-05-30 09:48:24','','','0','',0),(70,0,0,'task',1,'admin','edited','2018-05-30 09:49:00','','','0','',0),(71,0,0,'task',1,'admin','edited','2018-05-30 09:49:23','','','0','',0),(72,0,0,'task',1,'admin','edited','2018-05-30 09:51:34','上传了附件 QQ20180530-095106','','0','',0),(73,0,0,'user',1,'admin','login','2018-05-31 16:32:03','','','0','',0),(74,0,0,'user',1,'admin','logout','2018-05-31 16:36:01','','','0','',0),(75,0,0,'user',1,'admin','login','2018-05-31 16:36:05','','','0','',0),(76,0,0,'user',1,'admin','logout','2018-05-31 16:36:41','','','0','',0),(77,0,0,'user',1,'admin','login','2018-05-31 16:36:44','','','0','',0),(78,0,0,'user',1,'admin','logout','2018-05-31 16:37:05','','','0','',0),(79,0,0,'user',1,'admin','login','2018-05-31 16:37:18','','','0','',0),(80,0,0,'user',1,'admin','logout','2018-05-31 16:37:45','','','0','',0),(81,0,0,'user',1,'admin','login','2018-05-31 16:37:49','','','0','',0),(82,0,0,'user',1,'admin','logout','2018-05-31 16:39:03','','','0','',0),(83,0,0,'user',1,'admin','login','2018-05-31 16:49:34','','','0','',0),(84,0,0,'user',1,'admin','logout','2018-05-31 16:49:56','','','0','',0),(85,0,0,'user',1,'admin','login','2018-05-31 16:52:32','','','0','',0),(86,0,0,'user',1,'admin','logout','2018-05-31 17:05:50','','','0','',0),(87,0,0,'user',1,'admin','login','2018-05-31 17:12:22','','','0','',0),(88,0,0,'user',1,'admin','logout','2018-05-31 17:13:23','','','0','',0),(89,0,0,'user',1,'admin','login','2018-05-31 17:16:56','','','0','',0),(90,0,0,'user',1,'admin','logout','2018-05-31 17:21:43','','','0','',0),(91,0,0,'user',1,'admin','login','2018-05-31 17:22:03','','','0','',0),(92,0,0,'user',1,'admin','logout','2018-05-31 17:24:32','','','0','',0),(93,0,0,'user',1,'admin','login','2018-05-31 17:24:45','','','0','',0),(94,0,0,'user',1,'admin','logout','2018-05-31 17:27:49','','','0','',0),(95,0,0,'user',1,'admin','login','2018-05-31 17:28:23','','','0','',0),(96,0,0,'user',1,'admin','logout','2018-05-31 17:47:30','','','0','',0),(97,0,0,'user',1,'admin','login','2018-05-31 17:48:08','','','0','',0),(98,0,0,'user',1,'admin','logout','2018-05-31 17:50:31','','','0','',0),(99,0,0,'user',1,'admin','login','2018-05-31 17:56:14','','','0','',0),(100,0,0,'user',1,'admin','logout','2018-05-31 17:56:33','','','0','',0),(101,0,0,'user',1,'admin','login','2018-05-31 17:57:38','','','0','',0),(102,0,0,'user',1,'admin','logout','2018-05-31 18:12:31','','','0','',0),(103,0,0,'user',1,'admin','login','2018-05-31 18:12:37','','','0','',0),(104,0,0,'user',1,'admin','logout','2018-05-31 18:13:21','','','0','',0),(105,0,0,'user',2,'demo','login','2018-05-31 18:16:07','','','0','',0),(106,0,0,'user',2,'demo','logout','2018-05-31 18:16:35','','','0','',0),(107,0,0,'user',2,'demo','login','2018-05-31 18:30:41','','','0','',0),(108,0,0,'user',2,'demo','logout','2018-05-31 18:32:58','','','0','',0),(109,0,0,'user',1,'admin','login','2018-05-31 18:33:13','','','0','',0),(110,0,0,'user',1,'admin','logout','2018-05-31 18:54:50','','','0','',0),(111,0,0,'user',1,'admin','login','2018-05-31 18:54:55','','','0','',0),(112,0,0,'user',1,'admin','logout','2018-05-31 18:56:35','','','0','',0),(113,0,0,'user',1,'admin','login','2018-05-31 19:03:20','','','0','',0),(114,0,0,'user',1,'admin','logout','2018-05-31 19:10:11','','','0','',0),(115,0,0,'user',1,'admin','login','2018-05-31 19:10:32','','','0','',0),(116,0,0,'user',1,'admin','logout','2018-05-31 20:04:32','','','0','',0),(117,0,0,'user',1,'admin','login','2018-05-31 20:04:51','','','0','',0),(118,0,0,'user',1,'admin','logout','2018-05-31 20:10:03','','','0','',0),(119,0,0,'user',1,'admin','login','2018-05-31 20:10:22','','','0','',0),(120,0,0,'user',1,'admin','logout','2018-05-31 21:02:35','','','0','',0),(121,0,0,'user',1,'admin','login','2018-05-31 21:02:44','','','0','',1),(122,0,0,'user',1,'admin','logout','2018-05-31 21:04:01','','','0','',1),(123,0,0,'user',1,'admin','login','2018-05-31 21:04:08','','','0','',0),(124,0,0,'user',1,'admin','login','2018-05-31 21:07:57','','','0','',0),(125,0,0,'user',1,'admin','login','2018-05-31 21:10:41','','','0','',0),(126,0,0,'attend',6,'admin','commited','2018-05-31 21:12:10','','','0','',0),(127,0,0,'attend',7,'admin','commited','2018-05-31 21:12:15','','','0','',0),(128,0,0,'overtime',1,'admin','created','2018-05-31 21:12:19','','','0','',0),(129,0,0,'overtime',1,'admin','reviewed','2018-05-31 21:12:37','','通过','0','',0),(130,0,0,'user',1,'admin','login','2018-06-03 08:59:07','','','0','',0),(131,0,0,'user',1,'admin','login','2018-06-03 11:05:39','','','0','',0),(132,0,0,'user',1,'admin','logout','2018-06-03 11:40:30','','','0','',0),(133,0,0,'user',1,'admin','login','2018-06-03 11:40:59','','','0','',0),(134,1,0,'customer',1,'admin','created','2018-06-03 11:47:53','','','0','',0),(135,0,1,'contact',1,'admin','created','2018-06-03 11:47:55','','','0','',0),(136,0,0,'user',1,'admin','login','2018-06-04 20:59:05','','','0','',0),(137,0,0,'user',1,'admin','logout','2018-06-04 21:09:15','','','0','',0),(138,0,0,'user',1,'admin','login','2018-06-04 21:09:55','','','0','',0),(139,0,0,'user',1,'admin','login','2018-06-04 21:50:48','','','0','',0),(140,0,0,'user',1,'admin','logout','2018-06-04 22:08:26','','','0','',0),(141,0,0,'user',2,'demo','login','2018-06-04 22:08:43','','','0','',0),(142,0,0,'user',2,'demo','logout','2018-06-04 22:09:49','','','0','',0),(143,0,0,'user',1,'admin','login','2018-06-04 22:09:54','','','0','',0),(144,0,0,'user',1,'admin','logout','2018-06-04 22:33:48','','','0','',0),(145,0,0,'user',2,'demo','login','2018-06-04 22:33:56','','','0','',0),(146,0,0,'user',2,'demo','logout','2018-06-04 22:35:29','','','0','',0),(147,0,0,'user',1,'admin','login','2018-06-04 22:35:39','','','0','',0),(148,0,0,'user',1,'admin','logout','2018-06-04 22:51:47','','','0','',0),(149,0,0,'user',1,'admin','login','2018-06-04 22:52:01','','','0','',0),(150,0,0,'user',1,'admin','logout','2018-06-04 22:55:50','','','0','',0),(151,0,0,'user',1,'admin','login','2018-06-04 22:55:56','','','0','',1),(152,0,0,'user',1,'admin','login','2018-06-04 22:58:13','','','0','',0),(153,0,0,'user',1,'admin','login','2018-06-04 23:03:06','','','0','',0),(154,0,0,'user',1,'admin','logout','2018-06-04 23:21:22','','','0','',0),(155,0,0,'user',1,'admin','login','2018-06-04 23:21:33','','','0','',0),(156,0,0,'user',3,'admin','created','2018-06-04 23:23:46','','','0','',0),(157,0,0,'user',3,'admin','edited','2018-06-04 23:24:46','','','0','',0),(158,0,0,'user',3,'admin','deleted','2018-06-04 23:25:38','','1','0','',0),(159,0,0,'user',3,'admin','deleted','2018-06-04 23:25:38','','','0','',0),(160,0,0,'user',2,'admin','edited','2018-06-04 23:48:19','','','0','',0),(161,0,0,'user',3,'admin','edited','2018-06-04 23:53:47','','','0','',0),(162,0,0,'user',1,'admin','logout','2018-06-05 10:59:47','','','0','',0),(163,0,0,'user',2,'demo','login','2018-06-05 10:59:56','','','0','',0),(164,0,0,'user',2,'demo','logout','2018-06-05 11:02:37','','','0','',0),(165,0,0,'user',1,'admin','login','2018-06-05 11:04:57','','','0','',1),(166,0,0,'user',1,'admin','login','2018-06-05 11:08:01','','','0','',0),(167,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:34:56','','xuanxuan','0','',0),(168,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:35:32','','xuanxuan','0','',0),(169,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:35:33','','xuanxuan','0','',0),(170,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:38:05','','xuanxuan','0','',0),(171,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:38:07','','xuanxuan','0','',0),(172,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:40:38','','xuanxuan','0','',0),(173,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:40:41','','xuanxuan','0','',0),(174,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:43:12','','xuanxuan','0','',0),(175,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:43:14','','xuanxuan','0','',0),(176,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:43:24','','xuanxuan','0','',0),(177,0,0,'user',1,'admin','login','2018-06-05 11:44:03','','','0','',0),(178,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:44:38','','xuanxuan','0','',0),(179,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:46:56','','xuanxuan','0','',0),(180,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:47:02','','xuanxuan','0','',0),(181,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:49:37','','xuanxuan','0','',0),(182,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:49:40','','xuanxuan','0','',0),(183,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:49:47','','xuanxuan','0','',0),(184,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:49:52','','xuanxuan','0','',0),(185,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:52:24','','xuanxuan','0','',0),(186,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:52:26','','xuanxuan','0','',0),(187,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:55:00','','xuanxuan','0','',0),(188,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:55:42','','xuanxuan','0','',0),(189,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 11:58:13','','xuanxuan','0','',0),(190,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 11:58:21','','xuanxuan','0','',0),(191,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:00:55','','xuanxuan','0','',0),(192,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:00:57','','xuanxuan','0','',0),(193,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:03:31','','xuanxuan','0','',0),(194,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:03:41','','xuanxuan','0','',0),(195,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:06:14','','xuanxuan','0','',0),(196,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:06:21','','xuanxuan','0','',0),(197,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:09:01','','xuanxuan','0','',0),(198,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:09:41','','xuanxuan','0','',0),(199,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:12:14','','xuanxuan','0','',0),(200,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:12:22','','xuanxuan','0','',0),(201,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:14:54','','xuanxuan','0','',0),(202,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:15:02','','xuanxuan','0','',0),(203,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:17:34','','xuanxuan','0','',0),(204,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:17:41','','xuanxuan','0','',0),(205,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:20:13','','xuanxuan','0','',0),(206,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:20:21','','xuanxuan','0','',0),(207,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:22:53','','xuanxuan','0','',0),(208,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:23:01','','xuanxuan','0','',0),(209,0,0,'user',1,'admin','logout','2018-06-05 12:24:04','','','0','',0),(210,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:25:33','','xuanxuan','0','',0),(211,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:25:40','','xuanxuan','0','',0),(212,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:25:41','','xuanxuan','0','',0),(213,0,0,'user',1,'admin','login','2018-06-05 12:27:48','','','0','',0),(214,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:27:56','','xuanxuan','0','',0),(215,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:27:56','','xuanxuan','0','',0),(216,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:28:44','','xuanxuan','0','',0),(217,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:28:50','','xuanxuan','0','',0),(218,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 12:31:11','','xuanxuan','0','',0),(219,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:31:13','','xuanxuan','0','',0),(220,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 12:33:40','','xuanxuan','0','',0),(221,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:34:22','','xuanxuan','0','',0),(222,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 12:36:45','','xuanxuan','0','',1),(223,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:36:47','','xuanxuan','0','',1),(224,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 12:40:48','','xuanxuan','0','',0),(225,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:40:52','','xuanxuan','0','',0),(226,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:42:19','','xuanxuan','0','',0),(227,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:42:23','','xuanxuan','0','',0),(228,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:47:26','','xuanxuan','0','',0),(229,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:47:51','','xuanxuan','0','',0),(230,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:48:38','','xuanxuan','0','',0),(231,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:50:37','','xuanxuan','0','',0),(232,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:51:58','','xuanxuan','0','',0),(233,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 12:54:08','','xuanxuan','0','',0),(234,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:54:12','','xuanxuan','0','',0),(235,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:55:51','','xuanxuan','0','',0),(236,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:56:58','','xuanxuan','0','',0),(237,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 12:57:26','','xuanxuan','0','',0),(238,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 12:58:38','','xuanxuan','0','',0),(239,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:00:59','','xuanxuan','0','',0),(240,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:01:02','','xuanxuan','0','',0),(241,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:03:34','','xuanxuan','0','',0),(242,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:03:38','','xuanxuan','0','',0),(243,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:04:05','','xuanxuan','0','',0),(244,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:04:42','','xuanxuan','0','',0),(245,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:05:18','','xuanxuan','0','',0),(246,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:06:10','','xuanxuan','0','',0),(247,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:06:58','','xuanxuan','0','',0),(248,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:07:34','','xuanxuan','0','',0),(249,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:08:39','','xuanxuan','0','',0),(250,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:11:29','','xuanxuan','0','',0),(251,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:13:10','','xuanxuan','0','',0),(252,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:14:05','','xuanxuan','0','',0),(253,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:16:36','','xuanxuan','0','',0),(254,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:16:41','','xuanxuan','0','',0),(255,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:19:12','','xuanxuan','0','',0),(256,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:19:17','','xuanxuan','0','',0),(257,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:21:48','','xuanxuan','0','',0),(258,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:21:52','','xuanxuan','0','',0),(259,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:24:24','','xuanxuan','0','',0),(260,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:24:30','','xuanxuan','0','',0),(261,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:27:01','','xuanxuan','0','',0),(262,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:27:06','','xuanxuan','0','',0),(263,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:28:23','','xuanxuan','0','',0),(264,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:28:27','','xuanxuan','0','',0),(265,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:28:31','','xuanxuan','0','',0),(266,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:28:36','','xuanxuan','0','',0),(267,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:28:40','','xuanxuan','0','',0),(268,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:28:44','','xuanxuan','0','',0),(269,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:28:49','','xuanxuan','0','',0),(270,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:28:54','','xuanxuan','0','',0),(271,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:28:58','','xuanxuan','0','',0),(272,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:29:03','','xuanxuan','0','',0),(273,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:29:07','','xuanxuan','0','',0),(274,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:29:12','','xuanxuan','0','',0),(275,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:29:13','','xuanxuan','0','',0),(276,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:29:15','','xuanxuan','0','',0),(277,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:29:18','','xuanxuan','0','',0),(278,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:29:20','','xuanxuan','0','',0),(279,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:29:21','','xuanxuan','0','',0),(280,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:29:23','','xuanxuan','0','',0),(281,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:29:26','','xuanxuan','0','',0),(282,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:29:27','','xuanxuan','0','',0),(283,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:29:28','','xuanxuan','0','',0),(284,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:29:32','','xuanxuan','0','',0),(285,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:29:33','','xuanxuan','0','',0),(286,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:29:37','','xuanxuan','0','',0),(287,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:29:38','','xuanxuan','0','',0),(288,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:29:42','','xuanxuan','0','',0),(289,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:29:43','','xuanxuan','0','',0),(290,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:29:44','','xuanxuan','0','',0),(291,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:29:47','','xuanxuan','0','',0),(292,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:29:49','','xuanxuan','0','',0),(293,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:29:50','','xuanxuan','0','',0),(294,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:29:52','','xuanxuan','0','',0),(295,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:29:55','','xuanxuan','0','',0),(296,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:29:57','','xuanxuan','0','',0),(297,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:29:59','','xuanxuan','0','',0),(298,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:29:59','','xuanxuan','0','',0),(299,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:30:04','','xuanxuan','0','',0),(300,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:30:04','','xuanxuan','0','',0),(301,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:30:06','','xuanxuan','0','',0),(302,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:30:07','','xuanxuan','0','',0),(303,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:30:11','','xuanxuan','0','',0),(304,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:30:11','','xuanxuan','0','',0),(305,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:30:14','','xuanxuan','0','',0),(306,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:30:15','','xuanxuan','0','',0),(307,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:30:19','','xuanxuan','0','',0),(308,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:30:19','','xuanxuan','0','',0),(309,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:30:21','','xuanxuan','0','',0),(310,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:30:22','','xuanxuan','0','',0),(311,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:30:26','','xuanxuan','0','',0),(312,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:30:27','','xuanxuan','0','',0),(313,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:30:28','','xuanxuan','0','',0),(314,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:30:32','','xuanxuan','0','',0),(315,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:30:33','','xuanxuan','0','',0),(316,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:30:36','','xuanxuan','0','',0),(317,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:30:36','','xuanxuan','0','',0),(318,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:30:39','','xuanxuan','0','',0),(319,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:30:40','','xuanxuan','0','',0),(320,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:30:43','','xuanxuan','0','',0),(321,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:30:44','','xuanxuan','0','',0),(322,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:30:48','','xuanxuan','0','',0),(323,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:30:49','','xuanxuan','0','',0),(324,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:30:50','','xuanxuan','0','',0),(325,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:30:53','','xuanxuan','0','',0),(326,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:30:55','','xuanxuan','0','',0),(327,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:30:58','','xuanxuan','0','',0),(328,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:30:58','','xuanxuan','0','',0),(329,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:31:02','','xuanxuan','0','',0),(330,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:31:02','','xuanxuan','0','',0),(331,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:31:06','','xuanxuan','0','',0),(332,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:31:10','','xuanxuan','0','',0),(333,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:31:14','','xuanxuan','0','',0),(334,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:31:14','','xuanxuan','0','',0),(335,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:31:18','','xuanxuan','0','',0),(336,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:31:19','','xuanxuan','0','',0),(337,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:31:23','','xuanxuan','0','',0),(338,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:31:24','','xuanxuan','0','',0),(339,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:31:27','','xuanxuan','0','',0),(340,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:31:29','','xuanxuan','0','',0),(341,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:31:30','','xuanxuan','0','',0),(342,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:31:31','','xuanxuan','0','',0),(343,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:31:35','','xuanxuan','0','',0),(344,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:31:36','','xuanxuan','0','',0),(345,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:31:39','','xuanxuan','0','',0),(346,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:31:40','','xuanxuan','0','',0),(347,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:31:44','','xuanxuan','0','',0),(348,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:31:45','','xuanxuan','0','',0),(349,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:31:48','','xuanxuan','0','',0),(350,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:31:52','','xuanxuan','0','',0),(351,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:31:53','','xuanxuan','0','',0),(352,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:31:55','','xuanxuan','0','',0),(353,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:31:57','','xuanxuan','0','',0),(354,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:32:00','','xuanxuan','0','',0),(355,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:32:00','','xuanxuan','0','',0),(356,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:32:04','','xuanxuan','0','',0),(357,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:32:05','','xuanxuan','0','',0),(358,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:32:09','','xuanxuan','0','',0),(359,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:32:10','','xuanxuan','0','',0),(360,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:32:12','','xuanxuan','0','',0),(361,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:32:15','','xuanxuan','0','',0),(362,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:32:17','','xuanxuan','0','',0),(363,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:32:18','','xuanxuan','0','',0),(364,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:32:20','','xuanxuan','0','',0),(365,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:32:23','','xuanxuan','0','',0),(366,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:32:25','','xuanxuan','0','',0),(367,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:32:26','','xuanxuan','0','',0),(368,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:32:29','','xuanxuan','0','',0),(369,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:32:31','','xuanxuan','0','',0),(370,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:32:33','','xuanxuan','0','',0),(371,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:32:34','','xuanxuan','0','',0),(372,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:32:36','','xuanxuan','0','',0),(373,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:32:39','','xuanxuan','0','',0),(374,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:32:41','','xuanxuan','0','',0),(375,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:32:43','','xuanxuan','0','',0),(376,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:32:44','','xuanxuan','0','',0),(377,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:32:48','','xuanxuan','0','',0),(378,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:32:49','','xuanxuan','0','',0),(379,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:32:51','','xuanxuan','0','',0),(380,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:32:53','','xuanxuan','0','',0),(381,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:32:56','','xuanxuan','0','',0),(382,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:32:57','','xuanxuan','0','',0),(383,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:32:59','','xuanxuan','0','',0),(384,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:33:00','','xuanxuan','0','',0),(385,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:33:04','','xuanxuan','0','',0),(386,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:33:05','','xuanxuan','0','',0),(387,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:33:06','','xuanxuan','0','',0),(388,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:33:08','','xuanxuan','0','',0),(389,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:33:11','','xuanxuan','0','',0),(390,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:33:13','','xuanxuan','0','',0),(391,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:33:14','','xuanxuan','0','',0),(392,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:33:16','','xuanxuan','0','',0),(393,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:33:19','','xuanxuan','0','',0),(394,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:33:21','','xuanxuan','0','',0),(395,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 13:33:22','','xuanxuan','0','',0),(396,0,0,'user',2,'demo','loginxuanxuan','2018-06-05 13:33:24','','xuanxuan','0','',0),(397,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 13:37:03','','xuanxuan','0','',0),(398,0,0,'user',2,'demo','logoutxuanxuan','2018-06-05 13:37:06','','xuanxuan','0','',0),(399,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:12:00','','xuanxuan','0','',0),(400,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:12:22','','xuanxuan','0','',0),(401,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:12:27','','xuanxuan','0','',0),(402,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:15:03','','xuanxuan','0','',0),(403,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:15:06','','xuanxuan','0','',0),(404,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:17:37','','xuanxuan','0','',0),(405,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:17:40','','xuanxuan','0','',0),(406,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:20:11','','xuanxuan','0','',0),(407,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:20:13','','xuanxuan','0','',0),(408,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:22:45','','xuanxuan','0','',0),(409,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:22:47','','xuanxuan','0','',0),(410,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:25:19','','xuanxuan','0','',0),(411,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:25:21','','xuanxuan','0','',0),(412,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:27:53','','xuanxuan','0','',0),(413,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:28:05','','xuanxuan','0','',0),(414,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:30:37','','xuanxuan','0','',0),(415,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:30:39','','xuanxuan','0','',0),(416,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:33:10','','xuanxuan','0','',0),(417,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:33:13','','xuanxuan','0','',0),(418,0,0,'user',1,'admin','login','2018-06-05 14:33:57','','','0','',0),(419,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:35:44','','xuanxuan','0','',0),(420,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:36:11','','xuanxuan','0','',0),(421,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:38:44','','xuanxuan','0','',0),(422,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:40:25','','xuanxuan','0','',0),(423,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:40:32','','xuanxuan','0','',0),(424,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:40:35','','xuanxuan','0','',0),(425,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:41:09','','xuanxuan','0','',0),(426,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:41:10','','xuanxuan','0','',0),(427,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:43:44','','xuanxuan','0','',0),(428,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:44:13','','xuanxuan','0','',0),(429,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:45:41','','xuanxuan','0','',0),(430,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:45:46','','xuanxuan','0','',0),(431,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:45:54','','xuanxuan','0','',0),(432,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:45:57','','xuanxuan','0','',0),(433,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:46:03','','xuanxuan','0','',0),(434,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:46:04','','xuanxuan','0','',0),(435,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:46:11','','xuanxuan','0','',0),(436,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:46:24','','xuanxuan','0','',0),(437,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:46:38','','xuanxuan','0','',0),(438,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:46:43','','xuanxuan','0','',0),(439,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:49:14','','xuanxuan','0','',0),(440,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:49:16','','xuanxuan','0','',0),(441,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:51:18','','xuanxuan','0','',0),(442,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:51:20','','xuanxuan','0','',0),(443,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:51:59','','xuanxuan','0','',0),(444,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:52:01','','xuanxuan','0','',0),(445,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:52:48','','xuanxuan','0','',0),(446,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:52:54','','xuanxuan','0','',0),(447,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:54:18','','xuanxuan','0','',0),(448,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 14:56:50','','xuanxuan','0','',0),(449,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 14:57:48','','xuanxuan','0','',0),(450,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 15:00:24','','xuanxuan','0','',0),(451,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 15:01:11','','xuanxuan','0','',0),(452,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 15:03:44','','xuanxuan','0','',0),(453,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 15:05:55','','xuanxuan','0','',0),(454,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 15:08:27','','xuanxuan','0','',0),(455,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 15:08:29','','xuanxuan','0','',0),(456,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 15:11:01','','xuanxuan','0','',0),(457,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 15:11:06','','xuanxuan','0','',0),(458,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 15:13:37','','xuanxuan','0','',0),(459,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 15:13:41','','xuanxuan','0','',0),(460,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 15:16:14','','xuanxuan','0','',0),(461,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 15:17:26','','xuanxuan','0','',0),(462,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 15:40:23','','xuanxuan','0','',0),(463,0,0,'user',1,'admin','loginxuanxuan','2018-06-05 15:40:26','','xuanxuan','0','',0),(464,0,0,'user',1,'admin','logoutxuanxuan','2018-06-05 15:41:03','','xuanxuan','0','',0),(465,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 12:44:57','','xuanxuan','0','',0),(466,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 12:45:46','','xuanxuan','0','',0),(467,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 12:45:48','','xuanxuan','0','',0),(468,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 12:48:23','','xuanxuan','0','',0),(469,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 12:48:35','','xuanxuan','0','',0),(470,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 12:51:11','','xuanxuan','0','',0),(471,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 12:51:13','','xuanxuan','0','',0),(472,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 12:54:59','','xuanxuan','0','',0),(473,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 12:55:01','','xuanxuan','0','',0),(474,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 12:57:13','','xuanxuan','0','',0),(475,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 12:57:15','','xuanxuan','0','',0),(476,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 12:59:53','','xuanxuan','0','',0),(477,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 12:59:55','','xuanxuan','0','',0),(478,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:02:29','','xuanxuan','0','',0),(479,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:02:32','','xuanxuan','0','',0),(480,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:05:03','','xuanxuan','0','',0),(481,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:05:04','','xuanxuan','0','',0),(482,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:07:23','','xuanxuan','0','',0),(483,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:07:25','','xuanxuan','0','',0),(484,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:10:01','','xuanxuan','0','',0),(485,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:10:30','','xuanxuan','0','',0),(486,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:13:02','','xuanxuan','0','',0),(487,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:13:51','','xuanxuan','0','',0),(488,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:16:23','','xuanxuan','0','',0),(489,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:17:57','','xuanxuan','0','',0),(490,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:20:29','','xuanxuan','0','',0),(491,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:21:37','','xuanxuan','0','',0),(492,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:22:27','','xuanxuan','0','',0),(493,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:22:32','','xuanxuan','0','',0),(494,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:25:04','','xuanxuan','0','',0),(495,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:25:06','','xuanxuan','0','',0),(496,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:27:13','','xuanxuan','0','',0),(497,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:27:15','','xuanxuan','0','',0),(498,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:27:40','','xuanxuan','0','',0),(499,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:27:42','','xuanxuan','0','',0),(500,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:32:16','','xuanxuan','0','',0),(501,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:32:18','','xuanxuan','0','',0),(502,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:34:49','','xuanxuan','0','',0),(503,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:34:52','','xuanxuan','0','',0),(504,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:37:24','','xuanxuan','0','',0),(505,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:37:50','','xuanxuan','0','',0),(506,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 13:40:25','','xuanxuan','0','',0),(507,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 13:40:35','','xuanxuan','0','',0),(508,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:13:21','','xuanxuan','0','',0),(509,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:13:28','','xuanxuan','0','',0),(510,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:16:00','','xuanxuan','0','',0),(511,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:16:18','','xuanxuan','0','',0),(512,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:18:50','','xuanxuan','0','',0),(513,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:18:53','','xuanxuan','0','',0),(514,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:21:27','','xuanxuan','0','',0),(515,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:21:38','','xuanxuan','0','',0),(516,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:23:47','','xuanxuan','0','',0),(517,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:23:58','','xuanxuan','0','',0),(518,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:26:30','','xuanxuan','0','',0),(519,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:26:53','','xuanxuan','0','',0),(520,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:29:28','','xuanxuan','0','',0),(521,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:29:39','','xuanxuan','0','',0),(522,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:31:48','','xuanxuan','0','',0),(523,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:31:59','','xuanxuan','0','',0),(524,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:34:30','','xuanxuan','0','',0),(525,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:34:53','','xuanxuan','0','',0),(526,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:37:28','','xuanxuan','0','',0),(527,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:37:33','','xuanxuan','0','',0),(528,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:40:08','','xuanxuan','0','',0),(529,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 14:40:19','','xuanxuan','0','',0),(530,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 14:42:51','','xuanxuan','0','',0),(531,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 16:44:46','','xuanxuan','0','',0),(532,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 16:46:10','','xuanxuan','0','',0),(533,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 21:52:44','','xuanxuan','0','',0),(534,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 21:55:54','','xuanxuan','0','',0),(535,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 21:55:56','','xuanxuan','0','',0),(536,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 21:57:56','','xuanxuan','0','',0),(537,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 21:58:52','','xuanxuan','0','',0),(538,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 21:58:54','','xuanxuan','0','',0),(539,0,0,'user',1,'guest','update','2018-06-06 21:59:51','','','0','',0),(540,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:01:58','','xuanxuan','0','',0),(541,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:02:00','','xuanxuan','0','',0),(542,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:04:32','','xuanxuan','0','',0),(543,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:04:34','','xuanxuan','0','',0),(544,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 22:06:42','','xuanxuan','0','',0),(545,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:06:44','','xuanxuan','0','',0),(546,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:09:06','','xuanxuan','0','',0),(547,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:09:08','','xuanxuan','0','',0),(548,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 22:11:27','','xuanxuan','0','',0),(549,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:11:33','','xuanxuan','0','',0),(550,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 22:13:00','','xuanxuan','0','',0),(551,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:13:11','','xuanxuan','0','',0),(552,0,0,'user',1,'admin','login','2018-06-06 22:13:53','','','0','',0),(553,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:15:40','','xuanxuan','0','',0),(554,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:15:42','','xuanxuan','0','',0),(555,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:18:14','','xuanxuan','0','',0),(556,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:18:16','','xuanxuan','0','',0),(557,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:20:48','','xuanxuan','0','',0),(558,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:20:50','','xuanxuan','0','',0),(559,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 22:22:57','','xuanxuan','0','',0),(560,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:23:38','','xuanxuan','0','',0),(561,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:25:51','','xuanxuan','0','',0),(562,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:25:54','','xuanxuan','0','',0),(563,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 22:28:17','','xuanxuan','0','',0),(564,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:28:58','','xuanxuan','0','',0),(565,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:31:25','','xuanxuan','0','',0),(566,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:31:28','','xuanxuan','0','',0),(567,0,0,'user',1,'admin','logout','2018-06-06 22:31:58','','','0','',0),(568,0,0,'user',1,'admin','login','2018-06-06 22:32:13','','','0','',0),(569,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 22:33:37','','xuanxuan','0','',0),(570,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:34:18','','xuanxuan','0','',0),(571,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:40:13','','xuanxuan','0','',0),(572,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:40:23','','xuanxuan','0','',0),(573,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:40:35','','xuanxuan','0','',0),(574,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:43:07','','xuanxuan','0','',0),(575,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:43:09','','xuanxuan','0','',0),(576,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:45:41','','xuanxuan','0','',0),(577,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:45:43','','xuanxuan','0','',0),(578,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:47:05','','xuanxuan','0','',0),(579,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:49:07','','xuanxuan','0','',0),(580,0,0,'user',1,'admin','logout','2018-06-06 22:49:57','','','0','',0),(581,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:50:17','','xuanxuan','0','',0),(582,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:50:26','','xuanxuan','0','',0),(583,0,0,'user',1,'admin','login','2018-06-06 22:50:45','','','0','',0),(584,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 22:52:57','','xuanxuan','0','',0),(585,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:52:58','','xuanxuan','0','',0),(586,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:53:00','','xuanxuan','0','',0),(587,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 22:53:38','','xuanxuan','0','',0),(588,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 22:56:02','','xuanxuan','0','',0),(589,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 22:56:04','','xuanxuan','0','',0),(590,0,0,'user',1,'admin','logout','2018-06-06 22:56:42','','','0','',0),(591,0,0,'user',1,'admin','login','2018-06-06 22:56:52','','','0','',0),(592,0,0,'user',1,'admin','logout','2018-06-06 23:10:10','','','0','',0),(593,0,0,'user',1,'admin','login','2018-06-06 23:17:12','','','0','',0),(594,0,0,'user',1,'admin','logout','2018-06-06 23:19:14','','','0','',0),(595,0,0,'user',1,'admin','login','2018-06-06 23:19:23','','','0','',0),(596,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:22:37','','xuanxuan','0','',0),(597,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 23:25:03','','xuanxuan','0','',0),(598,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:25:09','','xuanxuan','0','',0),(599,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:25:12','','xuanxuan','0','',0),(600,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:25:20','','xuanxuan','0','',0),(601,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:25:20','','xuanxuan','0','',0),(602,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:26:20','','xuanxuan','0','',0),(603,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:26:22','','xuanxuan','0','',0),(604,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 23:26:55','','xuanxuan','0','',0),(605,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 23:26:57','','xuanxuan','0','',0),(606,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:27:15','','xuanxuan','0','',0),(607,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:27:19','','xuanxuan','0','',0),(608,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:28:03','','xuanxuan','0','',0),(609,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 23:29:16','','xuanxuan','0','',0),(610,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:29:56','','xuanxuan','0','',0),(611,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 23:30:05','','xuanxuan','0','',0),(612,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:33:06','','xuanxuan','0','',0),(613,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:33:08','','xuanxuan','0','',0),(614,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:35:46','','xuanxuan','0','',0),(615,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:35:48','','xuanxuan','0','',0),(616,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 23:38:01','','xuanxuan','0','',0),(617,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 23:39:43','','xuanxuan','0','',0),(618,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:42:16','','xuanxuan','0','',0),(619,0,0,'user',1,'admin','logoutxuanxuan','2018-06-06 23:42:16','','xuanxuan','0','',0),(620,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:42:18','','xuanxuan','0','',0),(621,0,0,'user',1,'admin','loginxuanxuan','2018-06-06 23:43:03','','xuanxuan','0','',0),(622,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:44:31','','xuanxuan','0','',0),(623,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:45:33','','xuanxuan','0','',0),(624,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:48:05','','xuanxuan','0','',0),(625,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:48:07','','xuanxuan','0','',0),(626,0,0,'user',2,'demo','logoutxuanxuan','2018-06-06 23:50:39','','xuanxuan','0','',0),(627,0,0,'user',2,'demo','loginxuanxuan','2018-06-06 23:50:41','','xuanxuan','0','',0),(628,0,0,'user',1,'admin','logout','2018-06-06 23:51:32','','','0','',0),(629,0,0,'user',1,'admin','login','2018-06-06 23:51:40','','','0','',0),(630,0,0,'user',1,'admin','logout','2018-06-06 23:52:17','','','0','',0),(631,0,0,'user',1,'admin','login','2018-06-06 23:52:32','','','0','',0),(632,0,0,'user',1,'admin','logout','2018-06-06 23:55:07','','','0','',0),(633,0,0,'user',1,'admin','login','2018-06-06 23:56:50','','','0','',0),(634,0,0,'user',1,'admin','logout','2018-06-07 00:05:19','','','0','',0),(635,0,0,'user',1,'admin','login','2018-06-07 00:05:37','','','0','',0),(636,0,0,'user',1,'admin','logout','2018-06-07 00:11:57','','','0','',0),(637,0,0,'user',1,'admin','login','2018-06-07 00:12:05','','','0','',0),(638,0,0,'user',1,'admin','logout','2018-06-07 00:14:49','','','0','',0),(639,0,0,'user',1,'admin','login','2018-06-07 00:15:55','','','0','',0),(640,0,0,'user',1,'admin','logout','2018-06-07 00:19:22','','','0','',0),(641,0,0,'user',1,'admin','login','2018-06-07 00:19:31','','','0','',0),(642,0,0,'user',1,'admin','logout','2018-06-07 00:20:22','','','0','',0),(643,0,0,'user',1,'admin','login','2018-06-07 00:20:47','','','0','',0),(644,0,0,'user',1,'admin','login','2018-06-07 00:46:57','','','0','',0),(645,0,0,'user',1,'admin','logout','2018-06-07 00:54:58','','','0','',0),(646,0,0,'user',1,'admin','login','2018-06-07 00:55:09','','','0','',0),(647,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:16:01','','xuanxuan','0','',0),(648,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 01:17:08','','xuanxuan','0','',0),(649,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:20:34','','xuanxuan','0','',0),(650,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 01:20:51','','xuanxuan','0','',0),(651,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 01:23:06','','xuanxuan','0','',0),(652,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:23:47','','xuanxuan','0','',0),(653,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 01:23:56','','xuanxuan','0','',0),(654,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:23:57','','xuanxuan','0','',0),(655,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 01:26:55','','xuanxuan','0','',0),(656,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 01:26:57','','xuanxuan','0','',0),(657,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 01:29:29','','xuanxuan','0','',0),(658,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 01:29:31','','xuanxuan','0','',0),(659,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 01:30:03','','xuanxuan','0','',0),(660,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:30:14','','xuanxuan','0','',0),(661,0,0,'user',1,'admin','logout','2018-06-07 01:31:53','','','0','',0),(662,0,0,'user',1,'admin','login','2018-06-07 01:32:03','','','0','',0),(663,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 01:32:31','','xuanxuan','0','',0),(664,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 01:34:35','','xuanxuan','0','',0),(665,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 01:34:37','','xuanxuan','0','',0),(666,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 01:37:09','','xuanxuan','0','',0),(667,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 01:37:11','','xuanxuan','0','',0),(668,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:40:19','','xuanxuan','0','',1),(669,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:46:53','','xuanxuan','0','',0),(670,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 01:47:06','','xuanxuan','0','',0),(671,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:47:11','','xuanxuan','0','',0),(672,0,0,'user',1,'admin','logout','2018-06-07 01:47:17','','','0','',0),(673,0,0,'user',1,'admin','login','2018-06-07 01:47:27','','','0','',0),(674,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 01:49:47','','xuanxuan','0','',0),(675,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:51:23','','xuanxuan','0','',0),(676,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 01:53:55','','xuanxuan','0','',0),(677,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 01:54:42','','xuanxuan','0','',0),(678,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 01:55:08','','xuanxuan','0','',0),(679,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 02:00:09','','xuanxuan','0','',0),(680,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 02:00:12','','xuanxuan','0','',0),(681,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 02:04:04','','xuanxuan','0','',0),(682,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:04:05','','xuanxuan','0','',0),(683,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 02:04:32','','xuanxuan','0','',0),(684,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:04:41','','xuanxuan','0','',0),(685,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 02:07:06','','xuanxuan','0','',0),(686,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 02:07:09','','xuanxuan','0','',0),(687,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 02:08:46','','xuanxuan','0','',0),(688,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:08:56','','xuanxuan','0','',0),(689,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 02:12:09','','xuanxuan','0','',0),(690,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:12:14','','xuanxuan','0','',0),(691,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 02:14:49','','xuanxuan','0','',0),(692,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:14:51','','xuanxuan','0','',0),(693,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 02:18:54','','xuanxuan','0','',0),(694,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:18:56','','xuanxuan','0','',0),(695,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 02:24:30','','xuanxuan','0','',0),(696,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:24:32','','xuanxuan','0','',0),(697,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 02:27:05','','xuanxuan','0','',0),(698,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:27:08','','xuanxuan','0','',0),(699,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 02:32:34','','xuanxuan','0','',0),(700,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 02:34:44','','xuanxuan','0','',0),(701,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:34:46','','xuanxuan','0','',0),(702,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:38:40','','xuanxuan','0','',0),(703,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 02:39:00','','xuanxuan','0','',0),(704,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 02:41:16','','xuanxuan','0','',0),(705,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:41:18','','xuanxuan','0','',0),(706,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 02:46:48','','xuanxuan','0','',0),(707,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 02:47:00','','xuanxuan','0','',0),(708,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 02:49:19','','xuanxuan','0','',0),(709,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 02:49:23','','xuanxuan','0','',0),(710,0,0,'user',1,'admin','logout','2018-06-07 02:58:59','','','0','',0),(711,0,0,'user',1,'admin','login','2018-06-07 02:59:12','','','0','',0),(712,0,0,'user',1,'admin','logout','2018-06-07 03:13:27','','','0','',0),(713,0,0,'user',1,'admin','login','2018-06-07 03:13:49','','','0','',0),(714,0,0,'user',1,'admin','logout','2018-06-07 03:14:44','','','0','',0),(715,0,0,'user',1,'admin','login','2018-06-07 03:14:54','','','0','',0),(716,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 03:15:27','','xuanxuan','0','',0),(717,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 03:15:30','','xuanxuan','0','',0),(718,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 03:15:35','','xuanxuan','0','',0),(719,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 03:15:38','','xuanxuan','0','',0),(720,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 03:16:43','','xuanxuan','0','',0),(721,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 03:17:13','','xuanxuan','0','',0),(722,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 03:18:55','','xuanxuan','0','',0),(723,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 03:18:59','','xuanxuan','0','',0),(724,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 03:21:10','','xuanxuan','0','',0),(725,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 03:21:12','','xuanxuan','0','',0),(726,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 03:23:44','','xuanxuan','0','',0),(727,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 03:23:45','','xuanxuan','0','',0),(728,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 03:23:47','','xuanxuan','0','',0),(729,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 03:23:54','','xuanxuan','0','',0),(730,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 03:26:19','','xuanxuan','0','',0),(731,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 03:26:22','','xuanxuan','0','',0),(732,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 03:28:53','','xuanxuan','0','',0),(733,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 03:28:56','','xuanxuan','0','',0),(734,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 03:31:22','','xuanxuan','0','',0),(735,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 03:31:35','','xuanxuan','0','',0),(736,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 03:31:44','','xuanxuan','0','',0),(737,0,0,'user',2,'demo','loginxuanxuan','2018-06-07 03:31:47','','xuanxuan','0','',0),(738,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 03:32:03','','xuanxuan','0','',0),(739,0,0,'user',2,'demo','logoutxuanxuan','2018-06-07 03:32:29','','xuanxuan','0','',0),(740,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 03:32:30','','xuanxuan','0','',0),(741,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:00:00','','xuanxuan','0','',0),(742,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:02:33','','xuanxuan','0','',0),(743,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:04:10','','xuanxuan','0','',0),(744,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:06:42','','xuanxuan','0','',0),(745,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:07:31','','xuanxuan','0','',0),(746,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:10:03','','xuanxuan','0','',0),(747,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:10:53','','xuanxuan','0','',0),(748,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:13:25','','xuanxuan','0','',0),(749,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:14:13','','xuanxuan','0','',0),(750,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:16:45','','xuanxuan','0','',0),(751,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:17:33','','xuanxuan','0','',0),(752,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:20:05','','xuanxuan','0','',0),(753,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:23:14','','xuanxuan','0','',0),(754,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:25:25','','xuanxuan','0','',0),(755,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:25:31','','xuanxuan','0','',0),(756,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:28:05','','xuanxuan','0','',0),(757,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:30:34','','xuanxuan','0','',0),(758,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:33:06','','xuanxuan','0','',0),(759,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:34:15','','xuanxuan','0','',0),(760,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:36:46','','xuanxuan','0','',0),(761,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:37:57','','xuanxuan','0','',0),(762,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:40:28','','xuanxuan','0','',0),(763,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:41:34','','xuanxuan','0','',0),(764,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 12:44:06','','xuanxuan','0','',0),(765,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 12:45:14','','xuanxuan','0','',0),(766,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 13:22:58','','xuanxuan','0','',0),(767,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 13:23:10','','xuanxuan','0','',0),(768,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 13:25:45','','xuanxuan','0','',0),(769,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 13:27:09','','xuanxuan','0','',0),(770,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 13:29:45','','xuanxuan','0','',0),(771,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 13:31:09','','xuanxuan','0','',0),(772,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 13:33:41','','xuanxuan','0','',0),(773,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 13:35:09','','xuanxuan','0','',0),(774,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 13:37:45','','xuanxuan','0','',0),(775,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 13:39:09','','xuanxuan','0','',0),(776,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 13:41:45','','xuanxuan','0','',0),(777,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 13:43:10','','xuanxuan','0','',0),(778,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 13:45:41','','xuanxuan','0','',0),(779,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 13:47:10','','xuanxuan','0','',0),(780,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 13:49:41','','xuanxuan','0','',0),(781,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 13:51:10','','xuanxuan','0','',0),(782,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 15:14:09','','xuanxuan','0','',0),(783,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 15:14:14','','xuanxuan','0','',0),(784,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 15:16:46','','xuanxuan','0','',0),(785,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 15:18:03','','xuanxuan','0','',0),(786,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 15:20:39','','xuanxuan','0','',0),(787,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 15:22:03','','xuanxuan','0','',0),(788,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 15:24:35','','xuanxuan','0','',0),(789,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 15:26:01','','xuanxuan','0','',0),(790,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 15:28:33','','xuanxuan','0','',0),(791,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 15:30:03','','xuanxuan','0','',0),(792,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 15:30:44','','xuanxuan','0','',0),(793,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 15:36:04','','xuanxuan','0','',0),(794,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 15:38:40','','xuanxuan','0','',0),(795,0,0,'user',1,'admin','loginxuanxuan','2018-06-07 15:40:04','','xuanxuan','0','',0),(796,0,0,'user',1,'admin','logoutxuanxuan','2018-06-07 15:42:36','','xuanxuan','0','',0),(797,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:34:50','','xuanxuan','0','',0),(798,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:37:52','','xuanxuan','0','',0),(799,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:37:54','','xuanxuan','0','',0),(800,0,0,'user',4,'admin','created','2018-06-08 11:40:17','','','0','',0),(801,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:40:31','','xuanxuan','0','',0),(802,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:40:33','','xuanxuan','0','',0),(803,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:40:41','','xuanxuan','0','',0),(804,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:40:43','','xuanxuan','0','',0),(805,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:43:15','','xuanxuan','0','',0),(806,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:43:17','','xuanxuan','0','',0),(807,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:45:54','','xuanxuan','0','',0),(808,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:45:56','','xuanxuan','0','',0),(809,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:48:28','','xuanxuan','0','',0),(810,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:48:30','','xuanxuan','0','',0),(811,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:51:04','','xuanxuan','0','',0),(812,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:51:06','','xuanxuan','0','',0),(813,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:55:16','','xuanxuan','0','',0),(814,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 11:55:18','','xuanxuan','0','',0),(815,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 11:57:02','','xuanxuan','0','',0),(816,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 12:15:30','','xuanxuan','0','',0),(817,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:16:40','','xuanxuan','0','',0),(818,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 12:19:05','','xuanxuan','0','',0),(819,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 12:19:07','','xuanxuan','0','',0),(820,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:21:43','','xuanxuan','0','',0),(821,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 12:21:44','','xuanxuan','0','',0),(822,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:21:47','','xuanxuan','0','',0),(823,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 12:22:06','','xuanxuan','0','',0),(824,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:24:19','','xuanxuan','0','',0),(825,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:24:24','','xuanxuan','0','',0),(826,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:26:56','','xuanxuan','0','',0),(827,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:27:01','','xuanxuan','0','',0),(828,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:29:33','','xuanxuan','0','',0),(829,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:29:36','','xuanxuan','0','',0),(830,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 12:32:00','','xuanxuan','0','',0),(831,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 12:33:30','','xuanxuan','0','',0),(832,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 12:34:46','','xuanxuan','0','',0),(833,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 12:34:54','','xuanxuan','0','',0),(834,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:37:07','','xuanxuan','0','',0),(835,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:37:10','','xuanxuan','0','',0),(836,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 12:38:58','','xuanxuan','0','',0),(837,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:41:12','','xuanxuan','0','',0),(838,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:41:15','','xuanxuan','0','',0),(839,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:43:47','','xuanxuan','0','',0),(840,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:43:52','','xuanxuan','0','',0),(841,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:46:24','','xuanxuan','0','',0),(842,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:46:27','','xuanxuan','0','',0),(843,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:48:59','','xuanxuan','0','',0),(844,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:49:02','','xuanxuan','0','',0),(845,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:51:35','','xuanxuan','0','',0),(846,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:51:37','','xuanxuan','0','',0),(847,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:54:10','','xuanxuan','0','',0),(848,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:54:12','','xuanxuan','0','',0),(849,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:56:44','','xuanxuan','0','',0),(850,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:56:48','','xuanxuan','0','',0),(851,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 12:57:26','','xuanxuan','0','',0),(852,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 12:59:50','','xuanxuan','0','',0),(853,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 12:59:55','','xuanxuan','0','',0),(854,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:02:27','','xuanxuan','0','',0),(855,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:02:27','','xuanxuan','0','',0),(856,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:02:31','','xuanxuan','0','',0),(857,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:02:32','','xuanxuan','0','',0),(858,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:05:04','','xuanxuan','0','',0),(859,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:05:05','','xuanxuan','0','',0),(860,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:05:06','','xuanxuan','0','',0),(861,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:05:10','','xuanxuan','0','',0),(862,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:07:38','','xuanxuan','0','',0),(863,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:07:40','','xuanxuan','0','',0),(864,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:10:12','','xuanxuan','0','',0),(865,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:10:14','','xuanxuan','0','',0),(866,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:12:42','','xuanxuan','0','',0),(867,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:12:45','','xuanxuan','0','',0),(868,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:15:18','','xuanxuan','0','',0),(869,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:15:18','','xuanxuan','0','',0),(870,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:15:21','','xuanxuan','0','',0),(871,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:15:23','','xuanxuan','0','',0),(872,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:17:56','','xuanxuan','0','',0),(873,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:17:56','','xuanxuan','0','',0),(874,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:18:02','','xuanxuan','0','',0),(875,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:18:18','','xuanxuan','0','',0),(876,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:20:34','','xuanxuan','0','',0),(877,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:20:37','','xuanxuan','0','',0),(878,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:23:05','','xuanxuan','0','',0),(879,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:25:10','','xuanxuan','0','',0),(880,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:25:13','','xuanxuan','0','',0),(881,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:25:15','','xuanxuan','0','',0),(882,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:27:45','','xuanxuan','0','',0),(883,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:27:47','','xuanxuan','0','',0),(884,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:30:17','','xuanxuan','0','',0),(885,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:30:20','','xuanxuan','0','',0),(886,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:32:49','','xuanxuan','0','',0),(887,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:32:51','','xuanxuan','0','',0),(888,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:35:22','','xuanxuan','0','',0),(889,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:35:23','','xuanxuan','0','',0),(890,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:35:25','','xuanxuan','0','',0),(891,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:35:25','','xuanxuan','0','',0),(892,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:37:57','','xuanxuan','0','',0),(893,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:37:57','','xuanxuan','0','',0),(894,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:37:59','','xuanxuan','0','',0),(895,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:38:01','','xuanxuan','0','',0),(896,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:40:32','','xuanxuan','0','',0),(897,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:40:48','','xuanxuan','0','',0),(898,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:42:46','','xuanxuan','0','',0),(899,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:42:49','','xuanxuan','0','',0),(900,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:45:19','','xuanxuan','0','',0),(901,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:45:21','','xuanxuan','0','',0),(902,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:47:52','','xuanxuan','0','',0),(903,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:47:54','','xuanxuan','0','',0),(904,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:47:55','','xuanxuan','0','',0),(905,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:47:57','','xuanxuan','0','',0),(906,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:50:27','','xuanxuan','0','',0),(907,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:50:29','','xuanxuan','0','',0),(908,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:52:59','','xuanxuan','0','',0),(909,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:53:04','','xuanxuan','0','',0),(910,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 13:55:35','','xuanxuan','0','',0),(911,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 13:55:37','','xuanxuan','0','',0),(912,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 13:58:06','','xuanxuan','0','',0),(913,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 13:58:11','','xuanxuan','0','',0),(914,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:00:39','','xuanxuan','0','',0),(915,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:00:41','','xuanxuan','0','',0),(916,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:03:13','','xuanxuan','0','',0),(917,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:03:13','','xuanxuan','0','',0),(918,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:03:15','','xuanxuan','0','',0),(919,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:03:17','','xuanxuan','0','',0),(920,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:05:47','','xuanxuan','0','',0),(921,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:05:49','','xuanxuan','0','',0),(922,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:08:19','','xuanxuan','0','',0),(923,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:08:23','','xuanxuan','0','',0),(924,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:10:55','','xuanxuan','0','',0),(925,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:10:55','','xuanxuan','0','',0),(926,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:10:57','','xuanxuan','0','',0),(927,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:10:57','','xuanxuan','0','',0),(928,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:13:29','','xuanxuan','0','',0),(929,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:13:30','','xuanxuan','0','',0),(930,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:13:31','','xuanxuan','0','',0),(931,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:13:32','','xuanxuan','0','',0),(932,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:16:03','','xuanxuan','0','',0),(933,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:16:04','','xuanxuan','0','',0),(934,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:16:06','','xuanxuan','0','',0),(935,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:16:07','','xuanxuan','0','',0),(936,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:18:39','','xuanxuan','0','',0),(937,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:18:39','','xuanxuan','0','',0),(938,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:18:40','','xuanxuan','0','',0),(939,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:18:43','','xuanxuan','0','',0),(940,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:21:12','','xuanxuan','0','',0),(941,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:21:14','','xuanxuan','0','',0),(942,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:23:45','','xuanxuan','0','',0),(943,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:23:46','','xuanxuan','0','',0),(944,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:23:48','','xuanxuan','0','',0),(945,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:23:50','','xuanxuan','0','',0),(946,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:26:21','','xuanxuan','0','',0),(947,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:26:22','','xuanxuan','0','',0),(948,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:28:53','','xuanxuan','0','',0),(949,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:28:57','','xuanxuan','0','',0),(950,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:31:35','','xuanxuan','0','',0),(951,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:32:10','','xuanxuan','0','',0),(952,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:34:18','','xuanxuan','0','',0),(953,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:34:20','','xuanxuan','0','',0),(954,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:36:43','','xuanxuan','0','',0),(955,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:36:47','','xuanxuan','0','',0),(956,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:37:04','','xuanxuan','0','',0),(957,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:37:15','','xuanxuan','0','',0),(958,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:37:18','','xuanxuan','0','',0),(959,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:38:28','','xuanxuan','0','',0),(960,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 14:38:54','','xuanxuan','0','',0),(961,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:39:02','','xuanxuan','0','',0),(962,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 14:42:26','','xuanxuan','0','',0),(963,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 14:42:28','','xuanxuan','0','',0),(964,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 14:43:28','','xuanxuan','0','',0),(965,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 14:43:29','','xuanxuan','0','',0),(966,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:47:00','','xuanxuan','0','',0),(967,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 14:47:01','','xuanxuan','0','',0),(968,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:47:02','','xuanxuan','0','',0),(969,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 14:47:03','','xuanxuan','0','',0),(970,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:49:33','','xuanxuan','0','',0),(971,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:49:36','','xuanxuan','0','',0),(972,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 14:52:05','','xuanxuan','0','',0),(973,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 14:52:08','','xuanxuan','0','',0),(974,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:54:37','','xuanxuan','0','',0),(975,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:54:37','','xuanxuan','0','',0),(976,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:54:40','','xuanxuan','0','',0),(977,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:54:40','','xuanxuan','0','',0),(978,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 14:56:01','','xuanxuan','0','',0),(979,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 14:56:17','','xuanxuan','0','',0),(980,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 14:56:38','','xuanxuan','0','',0),(981,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 14:57:10','','xuanxuan','0','',0),(982,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 14:57:12','','xuanxuan','0','',0),(983,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 14:57:29','','xuanxuan','0','',0),(984,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 14:58:39','','xuanxuan','0','',0),(985,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 14:59:41','','xuanxuan','0','',0),(986,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 14:59:43','','xuanxuan','0','',0),(987,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 14:59:43','','xuanxuan','0','',0),(988,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 14:59:46','','xuanxuan','0','',0),(989,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 15:02:14','','xuanxuan','0','',0),(990,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 15:02:15','','xuanxuan','0','',0),(991,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:02:17','','xuanxuan','0','',0),(992,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 15:02:17','','xuanxuan','0','',0),(993,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:04:35','','xuanxuan','0','',0),(994,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:04:49','','xuanxuan','0','',0),(995,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 15:04:49','','xuanxuan','0','',0),(996,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 15:04:49','','xuanxuan','0','',0),(997,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:04:51','','xuanxuan','0','',0),(998,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:04:51','','xuanxuan','0','',0),(999,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 15:04:51','','xuanxuan','0','',0),(1000,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:06:05','','xuanxuan','0','',0),(1001,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:06:26','','xuanxuan','0','',0),(1002,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:06:34','','xuanxuan','0','',0),(1003,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:07:14','','xuanxuan','0','',0),(1004,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:07:50','','xuanxuan','0','',0),(1005,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:08:00','','xuanxuan','0','',0),(1006,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 15:08:53','','xuanxuan','0','',0),(1007,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 15:08:53','','xuanxuan','0','',0),(1008,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:08:55','','xuanxuan','0','',0),(1009,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 15:08:55','','xuanxuan','0','',0),(1010,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 15:09:06','','xuanxuan','0','',0),(1011,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:09:07','','xuanxuan','0','',0),(1012,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 15:11:27','','xuanxuan','0','',0),(1013,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:11:28','','xuanxuan','0','',0),(1014,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 15:11:29','','xuanxuan','0','',0),(1015,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:11:30','','xuanxuan','0','',0),(1016,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 15:13:39','','xuanxuan','0','',0),(1017,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:13:41','','xuanxuan','0','',0),(1018,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 15:16:01','','xuanxuan','0','',0),(1019,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 15:16:03','','xuanxuan','0','',0),(1020,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 15:18:13','','xuanxuan','0','',0),(1021,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:18:16','','xuanxuan','0','',0),(1022,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:20:36','','xuanxuan','0','',0),(1023,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:21:20','','xuanxuan','0','',0),(1024,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:21:47','','xuanxuan','0','',0),(1025,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:22:51','','xuanxuan','0','',0),(1026,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:23:12','','xuanxuan','0','',0),(1027,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:23:28','','xuanxuan','0','',0),(1028,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:23:54','','xuanxuan','0','',0),(1029,0,0,'user',3,'demo1','logoutxuanxuan','2018-06-08 15:25:49','','xuanxuan','0','',0),(1030,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:25:52','','xuanxuan','0','',0),(1031,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:26:20','','xuanxuan','0','',0),(1032,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:27:33','','xuanxuan','0','',0),(1033,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:28:37','','xuanxuan','0','',0),(1034,0,0,'user',3,'demo1','loginxuanxuan','2018-06-08 15:28:38','','xuanxuan','0','',0),(1035,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:29:00','','xuanxuan','0','',0),(1036,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:29:36','','xuanxuan','0','',0),(1037,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:29:51','','xuanxuan','0','',0),(1038,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:33:25','','xuanxuan','0','',0),(1039,0,0,'user',0,'guest','logoutxuanxuan','2018-06-08 15:34:37','','xuanxuan','0','',0),(1040,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:36:28','','xuanxuan','0','',0),(1041,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:36:31','','xuanxuan','0','',0),(1042,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:39:03','','xuanxuan','0','',0),(1043,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:39:06','','xuanxuan','0','',0),(1044,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:41:03','','xuanxuan','0','',0),(1045,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:41:06','','xuanxuan','0','',0),(1046,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:42:30','','xuanxuan','0','',0),(1047,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:42:47','','xuanxuan','0','',0),(1048,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:45:19','','xuanxuan','0','',0),(1049,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:45:22','','xuanxuan','0','',0),(1050,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:46:56','','xuanxuan','0','',0),(1051,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:47:04','','xuanxuan','0','',0),(1052,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:49:21','','xuanxuan','0','',0),(1053,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:49:24','','xuanxuan','0','',0),(1054,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:51:51','','xuanxuan','0','',0),(1055,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:51:53','','xuanxuan','0','',0),(1056,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:53:01','','xuanxuan','0','',0),(1057,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:53:03','','xuanxuan','0','',0),(1058,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:53:12','','xuanxuan','0','',0),(1059,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:53:35','','xuanxuan','0','',0),(1060,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:55:35','','xuanxuan','0','',0),(1061,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:55:41','','xuanxuan','0','',0),(1062,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 15:58:14','','xuanxuan','0','',0),(1063,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 15:58:16','','xuanxuan','0','',0),(1064,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:00:48','','xuanxuan','0','',0),(1065,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:00:53','','xuanxuan','0','',0),(1066,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:01:05','','xuanxuan','0','',0),(1067,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:01:11','','xuanxuan','0','',0),(1068,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:02:52','','xuanxuan','0','',0),(1069,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:02:55','','xuanxuan','0','',0),(1070,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:05:27','','xuanxuan','0','',0),(1071,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:05:33','','xuanxuan','0','',0),(1072,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:07:33','','xuanxuan','0','',0),(1073,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:07:37','','xuanxuan','0','',0),(1074,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:07:41','','xuanxuan','0','',0),(1075,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:09:19','','xuanxuan','0','',0),(1076,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:11:55','','xuanxuan','0','',0),(1077,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:11:58','','xuanxuan','0','',0),(1078,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:12:13','','xuanxuan','0','',0),(1079,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:13:50','','xuanxuan','0','',0),(1080,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:16:24','','xuanxuan','0','',0),(1081,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:16:27','','xuanxuan','0','',0),(1082,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:19:06','','xuanxuan','0','',0),(1083,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:19:08','','xuanxuan','0','',0),(1084,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:21:40','','xuanxuan','0','',0),(1085,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:21:50','','xuanxuan','0','',0),(1086,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:24:22','','xuanxuan','0','',0),(1087,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:24:32','','xuanxuan','0','',0),(1088,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:27:06','','xuanxuan','0','',0),(1089,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:28:41','','xuanxuan','0','',0),(1090,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:31:12','','xuanxuan','0','',0),(1091,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:32:01','','xuanxuan','0','',0),(1092,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:34:36','','xuanxuan','0','',0),(1093,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:35:21','','xuanxuan','0','',0),(1094,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:37:49','','xuanxuan','0','',0),(1095,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:45:39','','xuanxuan','0','',0),(1096,0,0,'user',5,'admin','created','2018-06-08 16:46:36','','','0','',0),(1097,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:47:03','','xuanxuan','0','',0),(1098,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:47:11','','xuanxuan','0','',0),(1099,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:47:14','','xuanxuan','0','',0),(1100,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:47:32','','xuanxuan','0','',0),(1101,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 16:47:41','','xuanxuan','0','',0),(1102,0,0,'user',6,'admin','created','2018-06-08 16:48:10','','','0','',0),(1103,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 16:48:26','','xuanxuan','0','',0),(1104,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 16:48:35','','xuanxuan','0','',0),(1105,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 16:48:45','','xuanxuan','0','',0),(1106,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 16:51:13','','xuanxuan','0','',0),(1107,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 16:51:15','','xuanxuan','0','',0),(1108,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 16:53:46','','xuanxuan','0','',0),(1109,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 16:53:48','','xuanxuan','0','',0),(1110,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 16:55:58','','xuanxuan','0','',0),(1111,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 16:56:00','','xuanxuan','0','',0),(1112,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 16:58:20','','xuanxuan','0','',0),(1113,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 16:58:22','','xuanxuan','0','',0),(1114,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 17:00:54','','xuanxuan','0','',0),(1115,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 17:00:58','','xuanxuan','0','',0),(1116,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 17:02:28','','xuanxuan','0','',0),(1117,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 17:02:32','','xuanxuan','0','',0),(1118,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 17:03:13','','xuanxuan','0','',0),(1119,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 17:03:15','','xuanxuan','0','',0),(1120,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 17:04:41','','xuanxuan','0','',0),(1121,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 17:04:42','','xuanxuan','0','',0),(1122,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 17:05:10','','xuanxuan','0','',0),(1123,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 17:05:12','','xuanxuan','0','',0),(1124,0,0,'user',6,'guest','update','2018-06-08 17:05:28','','','0','',0),(1125,0,0,'user',6,'guest','update','2018-06-08 17:05:31','','','0','',0),(1126,0,0,'user',6,'guest','update','2018-06-08 17:05:32','','','0','',0),(1127,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 17:06:11','','xuanxuan','0','',0),(1128,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 17:06:13','','xuanxuan','0','',0),(1129,0,0,'todo',1,'guest','created','2018-06-08 17:07:09','','','0','',0),(1130,0,0,'user',1,'admin','login','2018-06-08 17:07:19','','','0','',0),(1131,0,0,'user',1,'admin','logout','2018-06-08 17:07:27','','','0','',0),(1132,0,0,'user',6,'demo4','login','2018-06-08 17:07:42','','','0','',0),(1133,0,0,'user',6,'demo4','logout','2018-06-08 17:08:07','','','0','',0),(1134,0,0,'user',1,'admin','login','2018-06-08 17:08:09','','','0','',0),(1135,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 17:08:34','','xuanxuan','0','',0),(1136,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 17:08:37','','xuanxuan','0','',0),(1137,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 17:10:46','','xuanxuan','0','',0),(1138,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 17:10:48','','xuanxuan','0','',0),(1139,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 17:13:08','','xuanxuan','0','',0),(1140,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 17:13:14','','xuanxuan','0','',0),(1141,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 17:15:46','','xuanxuan','0','',0),(1142,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 17:15:52','','xuanxuan','0','',0),(1143,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 17:18:24','','xuanxuan','0','',0),(1144,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 17:18:27','','xuanxuan','0','',0),(1145,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 17:56:03','','xuanxuan','0','',0),(1146,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 17:56:09','','xuanxuan','0','',0),(1147,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 18:43:26','','xuanxuan','0','',0),(1148,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 18:43:30','','xuanxuan','0','',0),(1149,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 20:44:31','','xuanxuan','0','',0),(1150,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 20:44:37','','xuanxuan','0','',0),(1151,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 20:45:07','','xuanxuan','0','',0),(1152,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 20:47:38','','xuanxuan','0','',0),(1153,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 20:47:40','','xuanxuan','0','',0),(1154,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 20:47:43','','xuanxuan','0','',0),(1155,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 20:48:07','','xuanxuan','0','',0),(1156,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 20:50:16','','xuanxuan','0','',0),(1157,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 20:50:21','','xuanxuan','0','',0),(1158,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 20:52:52','','xuanxuan','0','',0),(1159,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 20:52:55','','xuanxuan','0','',0),(1160,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 20:55:28','','xuanxuan','0','',0),(1161,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 20:55:32','','xuanxuan','0','',0),(1162,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 20:58:03','','xuanxuan','0','',0),(1163,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 20:58:08','','xuanxuan','0','',0),(1164,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 21:00:40','','xuanxuan','0','',0),(1165,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 21:00:44','','xuanxuan','0','',0),(1166,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 21:03:06','','xuanxuan','0','',0),(1167,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 21:04:47','','xuanxuan','0','',0),(1168,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 21:06:54','','xuanxuan','0','',0),(1169,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 21:07:05','','xuanxuan','0','',0),(1170,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 21:09:16','','xuanxuan','0','',0),(1171,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 21:09:21','','xuanxuan','0','',0),(1172,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 21:11:53','','xuanxuan','0','',0),(1173,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 21:11:58','','xuanxuan','0','',0),(1174,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 22:53:03','','xuanxuan','0','',0),(1175,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 22:53:11','','xuanxuan','0','',0),(1176,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 22:55:30','','xuanxuan','0','',0),(1177,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 22:56:09','','xuanxuan','0','',0),(1178,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 22:58:42','','xuanxuan','0','',0),(1179,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 22:58:43','','xuanxuan','0','',0),(1180,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 22:58:48','','xuanxuan','0','',0),(1181,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 23:00:01','','xuanxuan','0','',0),(1182,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:02:20','','xuanxuan','0','',0),(1183,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:02:22','','xuanxuan','0','',0),(1184,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 23:02:48','','xuanxuan','0','',0),(1185,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:04:55','','xuanxuan','0','',0),(1186,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:05:01','','xuanxuan','0','',0),(1187,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:07:33','','xuanxuan','0','',0),(1188,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:07:37','','xuanxuan','0','',0),(1189,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:10:09','','xuanxuan','0','',0),(1190,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:10:13','','xuanxuan','0','',0),(1191,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:12:45','','xuanxuan','0','',0),(1192,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:12:50','','xuanxuan','0','',0),(1193,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:15:22','','xuanxuan','0','',0),(1194,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:15:27','','xuanxuan','0','',0),(1195,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:17:59','','xuanxuan','0','',0),(1196,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:18:04','','xuanxuan','0','',0),(1197,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:20:36','','xuanxuan','0','',0),(1198,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:20:40','','xuanxuan','0','',0),(1199,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:23:12','','xuanxuan','0','',0),(1200,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:23:15','','xuanxuan','0','',0),(1201,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:24:18','','xuanxuan','0','',0),(1202,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:24:20','','xuanxuan','0','',0),(1203,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:26:52','','xuanxuan','0','',0),(1204,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:26:54','','xuanxuan','0','',0),(1205,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:29:27','','xuanxuan','0','',0),(1206,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:29:29','','xuanxuan','0','',0),(1207,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:32:01','','xuanxuan','0','',0),(1208,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:32:04','','xuanxuan','0','',0),(1209,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:34:12','','xuanxuan','0','',0),(1210,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:34:14','','xuanxuan','0','',0),(1211,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:34:59','','xuanxuan','0','',0),(1212,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 23:35:13','','xuanxuan','0','',0),(1213,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 23:36:58','','xuanxuan','0','',0),(1214,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 23:40:48','','xuanxuan','0','',0),(1215,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 23:40:56','','xuanxuan','0','',0),(1216,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 23:40:57','','xuanxuan','0','',0),(1217,0,0,'user',2,'demo','loginxuanxuan','2018-06-08 23:41:41','','xuanxuan','0','',0),(1218,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 23:43:59','','xuanxuan','0','',0),(1219,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 23:44:40','','xuanxuan','0','',0),(1220,0,0,'user',4,'demo2','loginxuanxuan','2018-06-08 23:44:51','','xuanxuan','0','',0),(1221,0,0,'user',4,'demo2','loginxuanxuan','2018-06-08 23:44:55','','xuanxuan','0','',0),(1222,0,0,'user',4,'demo2','logoutxuanxuan','2018-06-08 23:44:58','','xuanxuan','0','',0),(1223,0,0,'user',4,'demo2','logoutxuanxuan','2018-06-08 23:46:06','','xuanxuan','0','',0),(1224,0,0,'user',2,'demo','logoutxuanxuan','2018-06-08 23:46:06','','xuanxuan','0','',0),(1225,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 23:46:08','','xuanxuan','0','',0),(1226,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 23:46:18','','xuanxuan','0','',0),(1227,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 23:48:16','','xuanxuan','0','',0),(1228,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 23:49:41','','xuanxuan','0','',0),(1229,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 23:49:44','','xuanxuan','0','',0),(1230,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 23:49:56','','xuanxuan','0','',0),(1231,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 23:49:57','','xuanxuan','0','',0),(1232,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 23:50:08','','xuanxuan','0','',0),(1233,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 23:50:08','','xuanxuan','0','',0),(1234,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 23:51:03','','xuanxuan','0','',0),(1235,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 23:51:05','','xuanxuan','0','',0),(1236,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 23:53:16','','xuanxuan','0','',0),(1237,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 23:53:19','','xuanxuan','0','',0),(1238,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 23:55:45','','xuanxuan','0','',0),(1239,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 23:55:47','','xuanxuan','0','',0),(1240,0,0,'user',1,'admin','logoutxuanxuan','2018-06-08 23:57:01','','xuanxuan','0','',0),(1241,0,0,'user',1,'admin','loginxuanxuan','2018-06-08 23:57:04','','xuanxuan','0','',0),(1242,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 23:57:21','','xuanxuan','0','',0),(1243,0,0,'user',6,'demo4','loginxuanxuan','2018-06-08 23:57:23','','xuanxuan','0','',0),(1244,0,0,'user',6,'demo4','logoutxuanxuan','2018-06-08 23:58:25','','xuanxuan','0','',0),(1245,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:00:36','','xuanxuan','0','',0),(1246,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:00:38','','xuanxuan','0','',0),(1247,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:03:10','','xuanxuan','0','',0),(1248,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:03:12','','xuanxuan','0','',0),(1249,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:04:57','','xuanxuan','0','',0),(1250,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:05:02','','xuanxuan','0','',0),(1251,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:05:10','','xuanxuan','0','',0),(1252,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:05:15','','xuanxuan','0','',0),(1253,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:07:48','','xuanxuan','0','',0),(1254,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:07:50','','xuanxuan','0','',0),(1255,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:10:22','','xuanxuan','0','',0),(1256,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:10:24','','xuanxuan','0','',0),(1257,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:12:56','','xuanxuan','0','',0),(1258,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:12:59','','xuanxuan','0','',0),(1259,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:13:24','','xuanxuan','0','',0),(1260,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:13:28','','xuanxuan','0','',0),(1261,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:13:35','','xuanxuan','0','',0),(1262,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:13:38','','xuanxuan','0','',0),(1263,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:13:47','','xuanxuan','0','',0),(1264,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:14:27','','xuanxuan','0','',0),(1265,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:16:58','','xuanxuan','0','',0),(1266,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:17:01','','xuanxuan','0','',0),(1267,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:19:32','','xuanxuan','0','',0),(1268,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:19:35','','xuanxuan','0','',0),(1269,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:19:47','','xuanxuan','0','',0),(1270,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:19:51','','xuanxuan','0','',0),(1271,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:22:22','','xuanxuan','0','',0),(1272,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:22:24','','xuanxuan','0','',0),(1273,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:24:56','','xuanxuan','0','',0),(1274,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:24:58','','xuanxuan','0','',0),(1275,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:27:30','','xuanxuan','0','',0),(1276,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:27:32','','xuanxuan','0','',0),(1277,0,0,'user',1,'guest','update','2018-06-09 00:27:39','','','0','',0),(1278,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:27:59','','xuanxuan','0','',0),(1279,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:28:02','','xuanxuan','0','',0),(1280,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:30:34','','xuanxuan','0','',0),(1281,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:30:36','','xuanxuan','0','',0),(1282,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:33:07','','xuanxuan','0','',0),(1283,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:33:10','','xuanxuan','0','',0),(1284,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:35:41','','xuanxuan','0','',0),(1285,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:35:44','','xuanxuan','0','',0),(1286,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:38:16','','xuanxuan','0','',0),(1287,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:38:18','','xuanxuan','0','',0),(1288,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:40:49','','xuanxuan','0','',0),(1289,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:40:52','','xuanxuan','0','',0),(1290,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:43:23','','xuanxuan','0','',0),(1291,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:43:25','','xuanxuan','0','',0),(1292,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:45:57','','xuanxuan','0','',0),(1293,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:45:59','','xuanxuan','0','',0),(1294,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:48:31','','xuanxuan','0','',0),(1295,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:48:33','','xuanxuan','0','',0),(1296,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:51:05','','xuanxuan','0','',0),(1297,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:51:07','','xuanxuan','0','',0),(1298,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 00:53:15','','xuanxuan','0','',0),(1299,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 00:53:18','','xuanxuan','0','',0),(1300,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 01:53:30','','xuanxuan','0','',0),(1301,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 01:53:34','','xuanxuan','0','',0),(1302,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 01:56:07','','xuanxuan','0','',0),(1303,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 01:56:10','','xuanxuan','0','',0),(1304,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 01:58:43','','xuanxuan','0','',0),(1305,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 01:58:48','','xuanxuan','0','',0),(1306,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:01:20','','xuanxuan','0','',0),(1307,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:01:25','','xuanxuan','0','',0),(1308,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:03:57','','xuanxuan','0','',0),(1309,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:04:01','','xuanxuan','0','',0),(1310,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:06:33','','xuanxuan','0','',0),(1311,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:06:35','','xuanxuan','0','',0),(1312,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:09:08','','xuanxuan','0','',0),(1313,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:09:10','','xuanxuan','0','',0),(1314,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:11:43','','xuanxuan','0','',0),(1315,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:11:47','','xuanxuan','0','',0),(1316,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:14:19','','xuanxuan','0','',0),(1317,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:14:22','','xuanxuan','0','',0),(1318,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:16:54','','xuanxuan','0','',0),(1319,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:16:56','','xuanxuan','0','',0),(1320,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:19:29','','xuanxuan','0','',0),(1321,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:19:34','','xuanxuan','0','',0),(1322,0,0,'user',1,'admin','logoutxuanxuan','2018-06-09 02:22:06','','xuanxuan','0','',0),(1323,0,0,'user',1,'admin','loginxuanxuan','2018-06-09 02:22:11','','xuanxuan','0','',0),(1324,0,0,'user',1,'admin','login','2018-06-11 09:53:17','','','0','',0);
/*!40000 ALTER TABLE `sys_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_article`
--

DROP TABLE IF EXISTS `sys_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `original` enum('1','0') NOT NULL,
  `copySite` varchar(60) NOT NULL,
  `copyURL` varchar(255) NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `type` varchar(30) NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  `private` enum('0','1') NOT NULL DEFAULT '0',
  `users` text NOT NULL,
  `groups` varchar(255) NOT NULL DEFAULT '',
  `readers` text NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_article`
--

LOCK TABLES `sys_article` WRITE;
/*!40000 ALTER TABLE `sys_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_block`
--

DROP TABLE IF EXISTS `sys_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_block` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `app` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `source` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `params` text NOT NULL,
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `grid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `hidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accountAppOrder` (`account`,`app`,`order`),
  KEY `account` (`account`,`app`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_block`
--

LOCK TABLES `sys_block` WRITE;
/*!40000 ALTER TABLE `sys_block` DISABLE KEYS */;
INSERT INTO `sys_block` VALUES (50,'admin','sys','最新动态','','dynamic','{\"color\":\"default\"}',2,6,0,0,0),(55,'demo4','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0,0),(49,'admin','proj','','proj','task','{\"color\":\"default\",\"type\":\"assignedTo\",\"num\":\"15\",\"orderBy\":\"id_desc\",\"status\":[\"\"]}',5,4,0,0,0),(53,'demo4','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0,0),(54,'demo4','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0,0),(9,'admin','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,0,0,0),(10,'admin','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0,0),(11,'admin','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0,0),(12,'admin','oa','日历','oa','attend','{}',1,6,250,0,0),(13,'admin','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0,0),(14,'admin','cash','付款账户','cash','depositor','[]',1,4,0,0,0),(43,'admin','cash','账目','cash','trade','{\"color\":\"default\",\"num\":\"15\",\"orderBy\":\"id_desc\",\"type\":\"all\"}',2,4,0,0,0),(16,'admin','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0,0),(17,'admin','team','最新博客','team','blog','{\"num\":15}',1,4,0,0,0),(18,'admin','team','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',2,4,0,0,0),(19,'admin','team','置顶帖子','team','thread','{\"num\":15,\"type\":\"stick\"}',3,4,0,0,0),(20,'admin','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0,0),(21,'admin','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0,0),(22,'demo','sys','日历','oa','attend','',1,6,0,0,0),(23,'demo','sys','最新动态','','dynamic','',2,6,0,0,0),(24,'demo','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0,0),(25,'demo','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0,0),(26,'demo','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0,0),(27,'demo','sys','付款账户','cash','depositor','[]',6,4,0,0,0),(28,'demo','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0,0),(29,'demo','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0,0),(30,'demo','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,0,0,0),(31,'demo','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0,0),(32,'demo','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0,0),(33,'demo','oa','日历','oa','attend','',1,6,0,0,0),(34,'demo','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0,0),(35,'demo','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0,0),(36,'demo','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0,0),(37,'demo','cash','付款账户','cash','depositor','[]',1,4,0,0,0),(38,'demo','cash','账目','cash','trade','{\"num\":15,\"orderBy\":\"id_desc\"}',2,4,0,0,0),(39,'demo','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0,0),(40,'demo','team','最新博客','team','blog','{\"num\":15}',1,4,0,0,0),(41,'demo','team','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',2,4,0,0,0),(42,'demo','team','置顶帖子','team','thread','{\"num\":15,\"type\":\"stick\"}',3,4,0,0,0),(51,'demo4','sys','日历','oa','attend','',1,6,0,0,0),(52,'demo4','sys','最新动态','','dynamic','',2,6,0,0,0),(56,'demo4','sys','付款账户','cash','depositor','[]',6,4,0,0,0),(57,'demo4','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0,0),(58,'demo4','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0,0);
/*!40000 ALTER TABLE `sys_block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_category`
--

DROP TABLE IF EXISTS `sys_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '',
  `alias` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `root` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `readonly` enum('0','1') NOT NULL DEFAULT '0',
  `moderators` varchar(255) NOT NULL,
  `threads` smallint(5) NOT NULL,
  `posts` smallint(5) NOT NULL,
  `postedBy` varchar(30) NOT NULL,
  `postedDate` datetime NOT NULL,
  `postID` mediumint(8) unsigned NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `users` text NOT NULL,
  `rights` varchar(255) NOT NULL,
  `refund` enum('0','1') NOT NULL DEFAULT '0',
  `major` enum('0','1','2','3','4','5','6','7','8') NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=820039 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_category`
--

LOCK TABLES `sys_category` WRITE;
/*!40000 ALTER TABLE `sys_category` DISABLE KEYS */;
INSERT INTO `sys_category` VALUES (1,'主营业务收入','','','',0,0,',1,',1,1,'in','0','',0,0,'','2018-05-28 12:36:32',0,0,'','','0','1',0),(2,'非主营业务收入','','','',0,0,',2,',1,2,'in','0','',0,0,'','2018-05-28 12:36:35',0,0,'','','0','2',0),(3,'主营业务成本','','','',0,0,',3,',1,3,'out','0','',0,0,'','2018-05-28 12:36:36',0,0,'','','0','3',0),(4,'非主营业务成本','','','',0,0,',4,',1,4,'out','0','',0,0,'','2018-05-28 12:36:37',0,0,'','','0','4',0),(5,'理财盈利','','','',0,2,',2,5,',2,5,'in','0','',0,0,'','2018-05-28 12:36:37',0,0,'','','0','5',0),(6,'理财亏损','','','',0,4,',4,6,',2,6,'out','0','',0,0,'','2018-05-28 12:36:38',0,0,'','','0','6',0),(7,'手续费','','','',0,4,',4,7,',2,7,'out','0','',0,0,'','2018-05-28 12:36:39',0,0,'','','0','7',0),(8,'借贷利息','','','',0,4,',4,8,',2,8,'out','0','',0,0,'','2018-05-28 12:36:39',0,0,'','','0','8',0),(820038,'我的应用分组','','','',0,0,',820038,',1,10,'entry','0','',0,0,'admin','2018-06-05 11:11:13',0,0,'','','0','0',0),(820035,'财务部','','','',0,0,',820035,',1,40,'dept','0',',demo,',0,0,'admin','2018-06-04 23:33:53',0,0,'','','0','0',0),(820037,'收入增长部','','','',0,820035,',820035,820037,',2,10,'dept','0','',0,0,'admin','2018-06-04 23:45:25',0,0,'','','0','0',0);
/*!40000 ALTER TABLE `sys_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_config`
--

DROP TABLE IF EXISTS `sys_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `app` varchar(30) NOT NULL DEFAULT 'sys',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(30) DEFAULT NULL,
  `value` text NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`app`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_config`
--

LOCK TABLES `sys_config` WRITE;
/*!40000 ALTER TABLE `sys_config` DISABLE KEYS */;
INSERT INTO `sys_config` VALUES (1,'system','sys','xuanxuan','global','version','1.5.0',0),(28,'system','sys','xuanxuan','','key','bfv7ftxy97qws0g54ztk2yxur6727v69',0),(3,'system','sys','common','global','version','4.6.3',0),(4,'admin','sys','common','','blockInited','1',0),(5,'system','sys','cron','run','status','running',0),(6,'admin','crm','common','','blockInited','1',0),(8,'admin','oa','common','','blockInited','1',0),(9,'admin','cash','common','','blockInited','1',0),(10,'admin','team','common','','blockInited','1',0),(11,'admin','proj','common','','blockInited','1',0),(117,'system','oa','attend','readers','2018-06-11','admin',0),(13,'demo','sys','common','','blockInited','1',0),(56,'system','sys','group','','unUpdatedAccounts',',,1,',0),(16,'demo','crm','common','','blockInited','1',0),(17,'demo','oa','common','','blockInited','1',0),(18,'demo','proj','common','','blockInited','1',0),(19,'demo','cash','common','','blockInited','1',0),(20,'demo','team','common','','blockInited','1',0),(86,'admin','sys','common','','customApp','{\"8\":{\"id\":\"8\",\"visible\":0},\"7\":{\"id\":\"7\",\"visible\":0},\"5\":{\"id\":\"5\",\"visible\":1},\"6\":{\"id\":\"6\",\"visible\":0},\"4\":{\"id\":\"4\",\"visible\":1}}',0),(38,'system','sys','common','company','name','mengstar',0),(39,'system','sys','common','company','content','&nbsp; 专业维修原子弹！',0),(40,'system','sys','common','company','uid','5b15522a65f5e',0),(116,'system','sys','chat','settings','admin','{\"version\":3,\"lastSaveTime\":0,\"ui.animate.enable\":false,\"ui.navbar.width\":50,\"ui.navbar.active\":\"chat\",\"ui.navbar.avatarPosition\":\"bottom\",\"ui.navbar.onlyShowNoticeCountOnRecents\":true,\"ui.chat.menu.with\":200,\"ui.chat.menu.showMe\":true,\"ui.chat.sendbox.height\":125,\"ui.chat.sidebar.width\":300,\"ui.chat.fontSize\":{\"name\":\"1em\",\"time\":\"0.9230769231em\",\"lineHeight\":1.5384615384599999998727071215398609638214111328125,\"size\":13},\"ui.chat.sendHDEmoticon\":true,\"ui.chat.showMessageTip\":true,\"ui.chat.enableSearchInEmojionePicker\":false,\"ui.chat.contacts.groupBy\":\"normal\",\"ui.chat.contacts.order.role\":{},\"ui.chat.contacts.categories\":{},\"ui.chat.contacts.order.dept\":{},\"ui.chat.menu.group.states\":{},\"ui.chat.contacts.category.default\":\"\",\"ui.chat.groups.category.default\":\"\",\"ui.chat.groups.categories\":{},\"ui.notify.enableSound\":true,\"ui.notify.playSoundCondition\":\"onWindowHide\",\"ui.notify.muteOnUserIsBusy\":true,\"ui.notify.flashTrayIcon\":true,\"ui.notify.flashTrayIconCondition\":\"\",\"ui.notify.enableWindowNotification\":false,\"ui.notify.windowNotificationCondition\":\"onWindowBlur\",\"ui.notify.safeWindowNotification\":false,\"ui.app.hideWindowOnBlur\":false,\"ui.app.removeFromTaskbarOnHide\":true,\"ui.app.onClose\":\"ask\",\"shortcut.captureScreen\":\"Ctrl+Alt+Z\",\"shortcut.sendMessage\":\"Enter\",\"user.autoReconnect\":true,\"lastChangeTime\":1528473903004,\"ui.chat.hideSidebar.ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\":true,\"hash\":\"0e8f5d81559c47fff6dd82b318c60638\"}',0),(81,'system','sys','chat','settings','demo','{\"version\":3,\"lastSaveTime\":0,\"ui.animate.enable\":false,\"ui.navbar.width\":50,\"ui.navbar.active\":\"chat\",\"ui.navbar.avatarPosition\":\"bottom\",\"ui.navbar.onlyShowNoticeCountOnRecents\":true,\"ui.chat.menu.with\":200,\"ui.chat.menu.showMe\":true,\"ui.chat.sendbox.height\":125,\"ui.chat.sidebar.width\":300,\"ui.chat.fontSize\":{\"name\":\"1em\",\"time\":\"0.9230769231em\",\"lineHeight\":1.5384615384599999998727071215398609638214111328125,\"size\":13},\"ui.chat.sendHDEmoticon\":true,\"ui.chat.showMessageTip\":true,\"ui.chat.enableSearchInEmojionePicker\":false,\"ui.chat.contacts.groupBy\":\"normal\",\"ui.chat.contacts.order.role\":{},\"ui.chat.contacts.categories\":{},\"ui.chat.contacts.order.dept\":{},\"ui.chat.menu.group.states\":{},\"ui.chat.contacts.category.default\":\"\",\"ui.chat.groups.category.default\":\"\",\"ui.chat.groups.categories\":{},\"ui.notify.enableSound\":true,\"ui.notify.playSoundCondition\":\"onWindowHide\",\"ui.notify.muteOnUserIsBusy\":true,\"ui.notify.flashTrayIcon\":true,\"ui.notify.flashTrayIconCondition\":\"\",\"ui.notify.enableWindowNotification\":false,\"ui.notify.windowNotificationCondition\":\"onWindowBlur\",\"ui.notify.safeWindowNotification\":false,\"ui.app.hideWindowOnBlur\":false,\"ui.app.removeFromTaskbarOnHide\":true,\"ui.app.onClose\":\"ask\",\"shortcut.captureScreen\":\"Ctrl+Alt+Z\",\"shortcut.sendMessage\":\"Enter\",\"user.autoReconnect\":true,\"lastChangeTime\":1528298993872,\"hash\":\"f1b5a6bff3c7f88db811e5863b723aff\"}',0),(101,'system','sys','chat','settings','demo1','{\"version\":3,\"lastSaveTime\":0,\"ui.animate.enable\":false,\"ui.navbar.width\":50,\"ui.navbar.active\":\"chat\",\"ui.navbar.avatarPosition\":\"bottom\",\"ui.navbar.onlyShowNoticeCountOnRecents\":true,\"ui.chat.menu.with\":200,\"ui.chat.menu.showMe\":true,\"ui.chat.sendbox.height\":125,\"ui.chat.sidebar.width\":300,\"ui.chat.fontSize\":{\"name\":\"1em\",\"time\":\"0.9230769231em\",\"lineHeight\":1.5384615384599999998727071215398609638214111328125,\"size\":13},\"ui.chat.sendHDEmoticon\":true,\"ui.chat.showMessageTip\":true,\"ui.chat.enableSearchInEmojionePicker\":false,\"ui.chat.contacts.groupBy\":\"normal\",\"ui.chat.contacts.order.role\":{},\"ui.chat.contacts.categories\":{},\"ui.chat.contacts.order.dept\":{},\"ui.chat.menu.group.states\":{},\"ui.chat.contacts.category.default\":\"\",\"ui.chat.groups.category.default\":\"\",\"ui.chat.groups.categories\":{},\"ui.notify.enableSound\":true,\"ui.notify.playSoundCondition\":\"onWindowHide\",\"ui.notify.muteOnUserIsBusy\":true,\"ui.notify.flashTrayIcon\":true,\"ui.notify.flashTrayIconCondition\":\"\",\"ui.notify.enableWindowNotification\":false,\"ui.notify.windowNotificationCondition\":\"onWindowBlur\",\"ui.notify.safeWindowNotification\":false,\"ui.app.hideWindowOnBlur\":false,\"ui.app.removeFromTaskbarOnHide\":true,\"ui.app.onClose\":\"ask\",\"shortcut.captureScreen\":\"Ctrl+Alt+Z\",\"shortcut.sendMessage\":\"Enter\",\"user.autoReconnect\":true,\"lastChangeTime\":1528440210025,\"hash\":\"67d5973cf55ae387ad84f11f03470bbc\"}',0),(113,'demo4','sys','common','','blockInited','1',0);
/*!40000 ALTER TABLE `sys_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_cron`
--

DROP TABLE IF EXISTS `sys_cron`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_cron` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `m` varchar(20) NOT NULL,
  `h` varchar(20) NOT NULL,
  `dom` varchar(20) NOT NULL,
  `mon` varchar(20) NOT NULL,
  `dow` varchar(20) NOT NULL,
  `command` text NOT NULL,
  `remark` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `buildin` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL,
  `lastTime` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_cron`
--

LOCK TABLES `sys_cron` WRITE;
/*!40000 ALTER TABLE `sys_cron` DISABLE KEYS */;
INSERT INTO `sys_cron` VALUES (1,'*','*','*','*','*','','监控定时任务','ranzhi',1,'normal','2018-06-11 10:09:21',0),(2,'1','1','*','*','*','appName=sys&moduleName=backup&methodName=backup&reload=0','定时备份任务','ranzhi',1,'normal','2018-06-08 01:01:47',0),(3,'1','1','*','*','*','appName=sys&moduleName=backup&methodName=batchdelete&saveDays=30','删除30天前的备份','ranzhi',1,'normal','2018-06-08 01:01:47',0),(4,'1','7','*','*','*','appName=sys&moduleName=report&methodName=remind','每日提醒','ranzhi',1,'normal','2018-06-08 07:01:47',0),(5,'*/1','*','*','*','*','appName=sys&moduleName=queue&methodName=getqueue','出队列','ranzhi',0,'normal','2018-06-11 10:09:21',0),(6,'*/10','*','*','*','*','appName=sys&moduleName=queue&methodName=additional','检查是否添加待办','ranzhi',0,'normal','2018-06-11 10:00:22',0);
/*!40000 ALTER TABLE `sys_cron` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_entry`
--

DROP TABLE IF EXISTS `sys_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_entry` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `abbr` char(6) NOT NULL,
  `code` varchar(20) NOT NULL,
  `buildin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `integration` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `open` varchar(20) NOT NULL,
  `key` char(32) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `login` varchar(255) NOT NULL,
  `logout` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `control` varchar(10) NOT NULL DEFAULT 'simple',
  `size` varchar(50) NOT NULL DEFAULT 'max',
  `position` varchar(10) NOT NULL DEFAULT 'default',
  `visible` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `order` tinyint(5) unsigned NOT NULL DEFAULT '0',
  `zentao` enum('0','1') NOT NULL DEFAULT '0',
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_entry`
--

LOCK TABLES `sys_entry` WRITE;
/*!40000 ALTER TABLE `sys_entry` DISABLE KEYS */;
INSERT INTO `sys_entry` VALUES (1,'客户管理','客户','crm',1,1,'iframe','epet8b8ae1g89rxzquf4ubv37ul5tite','*','theme/default/images/ips/app-crm.png','../crm','','','full','max','center',1,10,'0',0,0),(2,'日常办公','办公','oa',1,1,'iframe','1a673c4c3c85fadcf0333e0a4596d220','*','theme/default/images/ips/app-oa.png','../oa','','','simple','max','default',1,20,'0',0,0),(3,'项目','项目','proj',1,1,'iframe','a910d9d1dd03c9dd99cecb3ca31ea600','*','theme/default/images/ips/app-proj.png','../proj','','','simple','max','default',1,30,'0',0,0),(4,'文档','文档','doc',1,1,'iframe','76ff605479df34f1d239730efa68d562','*','theme/default/images/ips/app-doc.png','../doc','','','simple','max','default',1,40,'0',0,0),(5,'现金记账','记账','cash',1,1,'iframe','438d85f2c2b04372662c63ebfb1c4c2f','*','theme/default/images/ips/app-cash.png','../cash','','','simple','max','default',1,50,'0',0,0),(6,'团队','团队','team',1,1,'iframe','6c46d9fe76a1afa1cd61f946f1072d1e','*','theme/default/images/ips/app-team.png','../team','','','simple','max','default',0,60,'0',0,0),(9,'前端测试','bd','baidu',0,1,'blank','475035b3af3ac227da241bdd050c4dc2','*','','http://127.0.0.1:8088','','','none','max','default',1,70,'0',820038,0);
/*!40000 ALTER TABLE `sys_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_file`
--

DROP TABLE IF EXISTS `sys_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(100) NOT NULL,
  `title` char(90) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `objectType` char(30) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `createdBy` char(30) NOT NULL DEFAULT '',
  `createdDate` datetime NOT NULL,
  `editor` enum('1','0') NOT NULL DEFAULT '0',
  `primary` enum('1','0') DEFAULT '0',
  `public` enum('1','0') NOT NULL DEFAULT '1',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_file`
--

LOCK TABLES `sys_file` WRITE;
/*!40000 ALTER TABLE `sys_file` DISABLE KEYS */;
INSERT INTO `sys_file` VALUES (1,'~/xxdfile/xuanxuan/2018/05/25/315d9570dba97ee321d1f4565c56721a','Spring Security Reference.webarchive','txt',1521328,'chat',1,'admin','2018-05-25 22:19:09','0','0','1',0,'',0),(2,'~/xxdfile/xuanxuan/2018/05/25/f288f0491563b294174b7a59f0168bf6','go-sqlite3-master','zip',2139927,'chat',1,'admin','2018-05-25 22:22:40','0','0','1',0,'',0),(3,'/Users/MengStar/xxdfilexuanxuan/2018/05/25/5f986fd53751e63a1b2c659109bf47f6','download','zip',2139927,'chat',1,'admin','2018-05-25 22:24:14','0','0','1',0,'',0),(4,'/Users/MengStar/xxdfilexuanxuan/2018/05/25/f2ff6c833167f368ab5fcf4297376c2c','idea激活码','txt',2981,'chat',1,'admin','2018-05-25 22:24:49','0','0','1',0,'',0),(5,'201805/f_ade3b1c001dff62f8c3b521670222588.png','QQ20180530-095106','png',62251,'task',1,'admin','2018-05-30 09:51:34','0','0','1',0,'',0);
/*!40000 ALTER TABLE `sys_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_group`
--

DROP TABLE IF EXISTS `sys_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `desc` char(255) NOT NULL DEFAULT '',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_group`
--

LOCK TABLES `sys_group` WRITE;
/*!40000 ALTER TABLE `sys_group` DISABLE KEYS */;
INSERT INTO `sys_group` VALUES (1,'管理员','管理员拥有前台所有权限',0),(2,'财务专员','财务专员拥有现金流所有权限',0),(3,'销售经理','销售经理拥有客户管理所有权限',0),(4,'销售人员','默认的销售人员权限',0),(5,'普通用户','默认的普通账号权限',0);
/*!40000 ALTER TABLE `sys_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_grouppriv`
--

DROP TABLE IF EXISTS `sys_grouppriv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_grouppriv` (
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` char(30) NOT NULL DEFAULT '',
  `method` char(30) NOT NULL DEFAULT '',
  `account_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `group` (`group`,`module`,`method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_grouppriv`
--

LOCK TABLES `sys_grouppriv` WRITE;
/*!40000 ALTER TABLE `sys_grouppriv` DISABLE KEYS */;
INSERT INTO `sys_grouppriv` VALUES (1,'file','delete',0),(1,'file','edit',0),(1,'file','download',0),(1,'file','upload',0),(1,'my','company',0),(1,'apppriv','superadmin',0),(1,'apppriv','team',0),(1,'apppriv','cash',0),(1,'apppriv','doc',0),(1,'apppriv','proj',0),(1,'apppriv','oa',0),(1,'apppriv','crm',0),(1,'report','browse',0),(1,'setting','modules',0),(1,'setting','customerPool',0),(1,'setting','reset',0),(1,'setting','lang',0),(1,'tree','merge',0),(1,'tree','delete',0),(1,'tree','children',0),(1,'tree','edit',0),(1,'tree','browse',0),(1,'company','index',0),(1,'user','active',0),(1,'user','forbid',0),(1,'user','delete',0),(1,'user','edit',0),(1,'user','create',0),(1,'user','admin',0),(1,'user','colleague',0),(1,'thread','deleteFile',0),(1,'thread','stick',0),(1,'thread','delete',0),(1,'thread','view',0),(1,'thread','edit',0),(1,'thread','post',0),(1,'forum','board',0),(1,'forum','index',0),(1,'blog','delete',0),(1,'blog','view',0),(1,'blog','edit',0),(1,'blog','create',0),(1,'blog','index',0),(1,'task','deleteAll',0),(1,'task','editAll',0),(1,'task','viewAll',0),(1,'doc','sort',0),(1,'doc','delete',0),(1,'doc','view',0),(1,'doc','edit',0),(1,'doc','create',0),(1,'doc','showFiles',0),(1,'doc','projectLibs',0),(1,'doc','allLibs',0),(1,'doc','browse',0),(1,'doc','index',0),(1,'doc','deleteLib',0),(1,'doc','editLib',0),(1,'doc','createLib',0),(1,'refund','export',0),(1,'refund','setRefundBy',0),(1,'refund','setDepositor',0),(1,'refund','setCategory',0),(1,'refund','setReviewer',0),(1,'refund','reimburse',0),(1,'refund','review',0),(1,'refund','browseReview',0),(1,'refund','todo',0),(1,'refund','company',0),(1,'egress','company',0),(1,'egress','department',0),(1,'trip','company',0),(1,'trip','department',0),(1,'lieu','setReviewer',0),(1,'lieu','batchReview',0),(1,'lieu','review',0),(1,'lieu','company',0),(1,'lieu','browseReview',0),(1,'overtime','setReviewer',0),(1,'overtime','export',0),(1,'overtime','batchReview',0),(1,'overtime','review',0),(1,'overtime','company',0),(1,'overtime','browseReview',0),(1,'makeup','setReviewer',0),(1,'makeup','export',0),(1,'makeup','batchReview',0),(1,'makeup','review',0),(1,'makeup','company',0),(1,'makeup','browseReview',0),(1,'leave','setReviewer',0),(1,'leave','export',0),(1,'leave','batchReview',0),(1,'leave','review',0),(1,'leave','company',0),(1,'leave','browseReview',0),(1,'holiday','delete',0),(1,'holiday','edit',0),(1,'holiday','create',0),(1,'attend','setManager',0),(1,'attend','personalSettings',0),(1,'attend','settings',0),(1,'attend','exportDetail',0),(1,'attend','detail',0),(1,'attend','exportStat',0),(1,'attend','saveStat',0),(1,'attend','stat',0),(1,'attend','export',0),(1,'attend','review',0),(1,'attend','browseReview',0),(1,'attend','company',0),(1,'attend','department',0),(1,'announce','delete',0),(1,'announce','edit',0),(1,'announce','create',0),(1,'announce','view',0),(1,'announce','browse',0),(1,'schema','delete',0),(1,'schema','view',0),(1,'schema','edit',0),(1,'schema','create',0),(1,'schema','browse',0),(1,'balance','delete',0),(1,'balance','edit',0),(1,'balance','create',0),(1,'balance','browse',0),(1,'depositor','savebalance',0),(1,'depositor','delete',0),(1,'depositor','export',0),(1,'depositor','check',0),(1,'depositor','activate',0),(1,'depositor','forbid',0),(1,'depositor','edit',0),(1,'depositor','create',0),(1,'depositor','browse',0),(1,'trade','tradeSetting',0),(1,'trade','setReportUnit',0),(1,'trade','export2Excel',0),(1,'trade','compare',0),(1,'trade','report',0),(1,'trade','export',0),(1,'trade','showImport',0),(1,'trade','import',0),(1,'trade','delete',0),(1,'trade','detail',0),(1,'trade','loan',0),(1,'trade','invest',0),(1,'trade','transfer',0),(1,'trade','edit',0),(1,'trade','batchEdit',0),(1,'trade','batchCreate',0),(1,'trade','create',0),(1,'trade','view',0),(1,'trade','browse',0),(1,'crm','manageAll',0),(1,'sales','delete',0),(1,'sales','edit',0),(1,'sales','create',0),(1,'sales','browse',0),(1,'sales','admin',0),(1,'resume','leave',0),(1,'resume','delete',0),(1,'resume','edit',0),(1,'resume','create',0),(1,'resume','browse',0),(1,'address','delete',0),(1,'address','edit',0),(1,'address','create',0),(1,'address','browse',0),(1,'product','view',0),(1,'product','delete',0),(1,'product','edit',0),(1,'product','create',0),(1,'product','browse',0),(1,'leads','setting',0),(1,'leads','ignore',0),(1,'leads','transform',0),(1,'leads','apply',0),(1,'leads','assign',0),(1,'leads','view',0),(1,'leads','delete',0),(1,'leads','edit',0),(1,'leads','create',0),(1,'leads','browse',0),(1,'contact','exportTemplate',0),(1,'contact','showImport',0),(1,'contact','import',0),(1,'contact','vcard',0),(1,'contact','delete',0),(1,'contact','export',0),(1,'contact','view',0),(1,'contact','edit',0),(1,'contact','create',0),(1,'contact','browse',0),(1,'provider','linkContact',0),(1,'provider','contact',0),(1,'provider','delete',0),(1,'provider','view',0),(1,'provider','edit',0),(1,'provider','create',0),(1,'provider','browse',0),(1,'customer','merge',0),(1,'customer','batchAssign',0),(1,'customer','assign',0),(1,'customer','delete',0),(1,'customer','export',0),(1,'customer','contract',0),(1,'customer','linkContact',0),(1,'customer','contact',0),(1,'customer','order',0),(1,'customer','view',0),(1,'customer','edit',0),(1,'customer','create',0),(1,'customer','browse',0),(1,'contract','export',0),(1,'contract','deleteReturn',0),(1,'contract','editReturn',0),(1,'contract','receive',0),(1,'contract','deleteDelivery',0),(1,'contract','editDelivery',0),(1,'contract','delivery',0),(1,'contract','delete',0),(1,'contract','finish',0),(1,'contract','cancel',0),(1,'contract','view',0),(1,'contract','edit',0),(1,'contract','create',0),(1,'contract','browse',0),(1,'order','delete',0),(1,'order','export',0),(1,'order','assign',0),(1,'order','contact',0),(1,'order','activate',0),(1,'order','close',0),(1,'order','view',0),(1,'order','edit',0),(1,'order','create',0),(1,'order','browse',0),(2,'address','browse',0),(2,'announce','browse',0),(2,'announce','create',0),(2,'announce','edit',0),(2,'announce','view',0),(2,'apppriv','cash',0),(2,'apppriv','crm',0),(2,'apppriv','doc',0),(2,'apppriv','oa',0),(2,'apppriv','proj',0),(2,'apppriv','team',0),(2,'attend','company',0),(2,'attend','export',0),(2,'attend','exportStat',0),(2,'attend','saveStat',0),(2,'attend','stat',0),(2,'balance','browse',0),(2,'balance','create',0),(2,'balance','delete',0),(2,'balance','edit',0),(2,'blog','create',0),(2,'blog','edit',0),(2,'blog','index',0),(2,'blog','view',0),(2,'company','index',0),(2,'contact','browse',0),(2,'contact','vcard',0),(2,'contact','view',0),(2,'contract','browse',0),(2,'contract','view',0),(2,'crm','manageAll',0),(2,'customer','browse',0),(2,'customer','contact',0),(2,'customer','contract',0),(2,'customer','order',0),(2,'customer','view',0),(2,'depositor','activate',0),(2,'depositor','browse',0),(2,'depositor','check',0),(2,'depositor','create',0),(2,'depositor','delete',0),(2,'depositor','edit',0),(2,'depositor','export',0),(2,'depositor','forbid',0),(2,'depositor','savebalance',0),(2,'doc','allLibs',0),(2,'doc','browse',0),(2,'doc','create',0),(2,'doc','createLib',0),(2,'doc','edit',0),(2,'doc','editLib',0),(2,'doc','index',0),(2,'doc','projectLibs',0),(2,'doc','showFiles',0),(2,'doc','sort',0),(2,'doc','view',0),(2,'file','delete',0),(2,'file','download',0),(2,'file','edit',0),(2,'file','upload',0),(2,'forum','admin',0),(2,'forum','board',0),(2,'forum','index',0),(2,'holiday','create',0),(2,'holiday','delete',0),(2,'holiday','edit',0),(2,'leads','browse',0),(2,'leads','view',0),(2,'leave','company',0),(2,'order','browse',0),(2,'order','contact',0),(2,'order','view',0),(2,'product','browse',0),(2,'product','view',0),(2,'provider','browse',0),(2,'provider','contact',0),(2,'provider','create',0),(2,'provider','delete',0),(2,'provider','edit',0),(2,'provider','linkContact',0),(2,'provider','view',0),(2,'refund','browseReview',0),(2,'refund','company',0),(2,'refund','reimburse',0),(2,'refund','review',0),(2,'refund','setCategory',0),(2,'refund','setDepositor',0),(2,'refund','todo',0),(2,'resume','browse',0),(2,'sales','browse',0),(2,'schema','browse',0),(2,'schema','create',0),(2,'schema','delete',0),(2,'schema','edit',0),(2,'schema','view',0),(2,'setting','lang',0),(2,'setting','reset',0),(2,'thread','edit',0),(2,'thread','post',0),(2,'thread','stick',0),(2,'thread','switchStatus',0),(2,'thread','transfer',0),(2,'thread','view',0),(2,'trade','batchCreate',0),(2,'trade','batchEdit',0),(2,'trade','browse',0),(2,'trade','compare',0),(2,'trade','create',0),(2,'trade','delete',0),(2,'trade','detail',0),(2,'trade','edit',0),(2,'trade','export',0),(2,'trade','export2Excel',0),(2,'trade','import',0),(2,'trade','invest',0),(2,'trade','loan',0),(2,'trade','report',0),(2,'trade','setReportUnit',0),(2,'trade','showImport',0),(2,'trade','tradeSetting',0),(2,'trade','transfer',0),(2,'trade','view',0),(2,'tree','browse',0),(2,'tree','children',0),(2,'tree','edit',0),(2,'tree','merge',0),(2,'trip','company',0),(2,'user','colleague',0),(3,'address','browse',0),(3,'address','create',0),(3,'address','delete',0),(3,'address','edit',0),(3,'announce','browse',0),(3,'announce','create',0),(3,'announce','edit',0),(3,'announce','view',0),(3,'apppriv','cash',0),(3,'apppriv','crm',0),(3,'apppriv','doc',0),(3,'apppriv','oa',0),(3,'apppriv','proj',0),(3,'apppriv','team',0),(3,'blog','create',0),(3,'blog','edit',0),(3,'blog','index',0),(3,'blog','view',0),(3,'company','index',0),(3,'contact','browse',0),(3,'contact','create',0),(3,'contact','delete',0),(3,'contact','edit',0),(3,'contact','export',0),(3,'contact','exportTemplate',0),(3,'contact','import',0),(3,'contact','showImport',0),(3,'contact','vcard',0),(3,'contact','view',0),(3,'contract','browse',0),(3,'contract','cancel',0),(3,'contract','create',0),(3,'contract','delete',0),(3,'contract','deleteDelivery',0),(3,'contract','deleteReturn',0),(3,'contract','delivery',0),(3,'contract','edit',0),(3,'contract','editDelivery',0),(3,'contract','editReturn',0),(3,'contract','export',0),(3,'contract','finish',0),(3,'contract','receive',0),(3,'contract','view',0),(3,'crm','manageAll',0),(3,'customer','assign',0),(3,'customer','browse',0),(3,'customer','contact',0),(3,'customer','contract',0),(3,'customer','create',0),(3,'customer','delete',0),(3,'customer','edit',0),(3,'customer','export',0),(3,'customer','linkContact',0),(3,'customer','merge',0),(3,'customer','order',0),(3,'customer','view',0),(3,'depositor','browse',0),(3,'doc','allLibs',0),(3,'doc','browse',0),(3,'doc','create',0),(3,'doc','createLib',0),(3,'doc','edit',0),(3,'doc','editLib',0),(3,'doc','index',0),(3,'doc','projectLibs',0),(3,'doc','showFiles',0),(3,'doc','sort',0),(3,'doc','view',0),(3,'egress','department',0),(3,'file','delete',0),(3,'file','download',0),(3,'file','edit',0),(3,'file','upload',0),(3,'forum','admin',0),(3,'forum','board',0),(3,'forum','index',0),(3,'leads','apply',0),(3,'leads','assign',0),(3,'leads','browse',0),(3,'leads','create',0),(3,'leads','delete',0),(3,'leads','edit',0),(3,'leads','ignore',0),(3,'leads','setting',0),(3,'leads','transform',0),(3,'leads','view',0),(3,'leave','batchReview',0),(3,'leave','browseReview',0),(3,'leave','review',0),(3,'lieu','batchReview',0),(3,'lieu','browseReview',0),(3,'lieu','review',0),(3,'makeup','batchReview',0),(3,'makeup','browseReview',0),(3,'makeup','review',0),(3,'order','activate',0),(3,'order','assign',0),(3,'order','browse',0),(3,'order','close',0),(3,'order','contact',0),(3,'order','create',0),(3,'order','delete',0),(3,'order','edit',0),(3,'order','export',0),(3,'order','view',0),(3,'overtime','batchReview',0),(3,'overtime','browseReview',0),(3,'overtime','review',0),(3,'product','browse',0),(3,'product','create',0),(3,'product','delete',0),(3,'product','edit',0),(3,'product','view',0),(3,'refund','browseReview',0),(3,'refund','review',0),(3,'resume','browse',0),(3,'resume','create',0),(3,'resume','delete',0),(3,'resume','edit',0),(3,'resume','leave',0),(3,'sales','browse',0),(3,'sales','create',0),(3,'sales','delete',0),(3,'sales','edit',0),(3,'setting','customerPool',0),(3,'setting','lang',0),(3,'setting','reset',0),(3,'thread','edit',0),(3,'thread','post',0),(3,'thread','stick',0),(3,'thread','switchStatus',0),(3,'thread','transfer',0),(3,'thread','view',0),(3,'tree','browse',0),(3,'tree','children',0),(3,'tree','edit',0),(3,'trip','department',0),(3,'user','colleague',0),(4,'address','browse',0),(4,'address','create',0),(4,'address','edit',0),(4,'announce','browse',0),(4,'announce','create',0),(4,'announce','edit',0),(4,'announce','view',0),(4,'apppriv','cash',0),(4,'apppriv','crm',0),(4,'apppriv','doc',0),(4,'apppriv','oa',0),(4,'apppriv','proj',0),(4,'apppriv','team',0),(4,'attend','browseReview',0),(4,'attend','department',0),(4,'attend','export',0),(4,'attend','review',0),(4,'blog','create',0),(4,'blog','edit',0),(4,'blog','index',0),(4,'blog','view',0),(4,'company','index',0),(4,'contact','browse',0),(4,'contact','create',0),(4,'contact','edit',0),(4,'contact','export',0),(4,'contact','exportTemplate',0),(4,'contact','import',0),(4,'contact','showImport',0),(4,'contact','vcard',0),(4,'contact','view',0),(4,'contract','browse',0),(4,'contract','cancel',0),(4,'contract','create',0),(4,'contract','delivery',0),(4,'contract','edit',0),(4,'contract','editDelivery',0),(4,'contract','editReturn',0),(4,'contract','export',0),(4,'contract','finish',0),(4,'contract','receive',0),(4,'contract','view',0),(4,'customer','assign',0),(4,'customer','batchAssign',0),(4,'customer','browse',0),(4,'customer','contact',0),(4,'customer','contract',0),(4,'customer','create',0),(4,'customer','edit',0),(4,'customer','export',0),(4,'customer','linkContact',0),(4,'customer','merge',0),(4,'customer','order',0),(4,'customer','view',0),(4,'depositor','browse',0),(4,'doc','allLibs',0),(4,'doc','browse',0),(4,'doc','create',0),(4,'doc','createLib',0),(4,'doc','edit',0),(4,'doc','editLib',0),(4,'doc','index',0),(4,'doc','projectLibs',0),(4,'doc','showFiles',0),(4,'doc','sort',0),(4,'doc','view',0),(4,'file','delete',0),(4,'file','download',0),(4,'file','edit',0),(4,'file','upload',0),(4,'forum','admin',0),(4,'forum','board',0),(4,'forum','index',0),(4,'leads','apply',0),(4,'leads','assign',0),(4,'leads','browse',0),(4,'leads','create',0),(4,'leads','edit',0),(4,'leads','ignore',0),(4,'leads','transform',0),(4,'leads','view',0),(4,'order','activate',0),(4,'order','assign',0),(4,'order','browse',0),(4,'order','close',0),(4,'order','contact',0),(4,'order','create',0),(4,'order','edit',0),(4,'order','export',0),(4,'order','view',0),(4,'product','browse',0),(4,'product','create',0),(4,'product','edit',0),(4,'product','view',0),(4,'resume','browse',0),(4,'resume','create',0),(4,'resume','edit',0),(4,'sales','browse',0),(4,'setting','lang',0),(4,'setting','reset',0),(4,'thread','edit',0),(4,'thread','post',0),(4,'thread','stick',0),(4,'thread','switchStatus',0),(4,'thread','transfer',0),(4,'thread','view',0),(4,'tree','browse',0),(4,'tree','children',0),(4,'tree','edit',0),(4,'user','colleague',0),(5,'announce','browse',0),(5,'announce','create',0),(5,'announce','edit',0),(5,'announce','view',0),(5,'apppriv','doc',0),(5,'apppriv','oa',0),(5,'apppriv','proj',0),(5,'apppriv','team',0),(5,'blog','create',0),(5,'blog','edit',0),(5,'blog','index',0),(5,'blog','view',0),(5,'company','index',0),(5,'doc','allLibs',0),(5,'doc','browse',0),(5,'doc','create',0),(5,'doc','createLib',0),(5,'doc','edit',0),(5,'doc','editLib',0),(5,'doc','index',0),(5,'doc','projectLibs',0),(5,'doc','showFiles',0),(5,'doc','sort',0),(5,'doc','view',0),(5,'file','delete',0),(5,'file','download',0),(5,'file','edit',0),(5,'file','upload',0),(5,'forum','admin',0),(5,'forum','board',0),(5,'forum','index',0),(5,'thread','edit',0),(5,'thread','post',0),(5,'thread','stick',0),(5,'thread','switchStatus',0),(5,'thread','transfer',0),(5,'thread','view',0),(5,'user','colleague',0),(2,'apppriv','baidu',0),(3,'apppriv','baidu',0),(4,'apppriv','baidu',0),(5,'apppriv','baidu',0);
/*!40000 ALTER TABLE `sys_grouppriv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_history`
--

DROP TABLE IF EXISTS `sys_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_history` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `action` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field` varchar(30) NOT NULL DEFAULT '',
  `old` text NOT NULL,
  `new` text NOT NULL,
  `diff` mediumtext NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `action` (`action`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_history`
--

LOCK TABLES `sys_history` WRITE;
/*!40000 ALTER TABLE `sys_history` DISABLE KEYS */;
INSERT INTO `sys_history` VALUES (1,53,'realStarted','0000-00-00','2018-05-26','',0),(2,53,'consumed','0.0','10','',0),(3,53,'left','0.0','8','',0),(4,53,'status','wait','doing','',0),(5,54,'finishedDate','','2018-05-26 11:35:10','',0),(6,54,'left','8.0','0','',0),(7,54,'status','doing','done','',0),(8,54,'finishedBy','','admin','',0),(9,70,'name','1','前端测试','001- <del>1</del>\n001+ <ins>前端测试</ins>',0),(10,70,'finishedDate','2018-05-26 11:35:10','2018-05-26','',0),(11,70,'canceledDate','0000-00-00 00:00:00','','',0),(12,70,'closedDate','0000-00-00 00:00:00','','',0),(13,70,'realStarted','2018-05-26','0000-00-00','',0),(14,71,'finishedDate','2018-05-26 00:00:00','2018-05-26','',0),(15,71,'canceledDate','0000-00-00 00:00:00','','',0),(16,71,'closedDate','0000-00-00 00:00:00','','',0),(17,72,'desc','13213','完成前端的自动化测试','001- <del>13213</del>\n001+ <ins>完成前端的自动化测试</ins>',0),(18,72,'finishedDate','2018-05-26 00:00:00','2018-05-26','',0),(19,72,'canceledDate','0000-00-00 00:00:00','','',0),(20,72,'closedDate','0000-00-00 00:00:00','','',0),(21,126,'manualOut','','18:00:00','',0),(22,126,'manualIn','','00:00:00','',0),(23,126,'reviewStatus','','wait','',0),(24,126,'reason','','normal','',0),(25,127,'manualIn','','09:00:00','',0),(26,127,'manualOut','','00:00:00','',0),(27,127,'reviewStatus','','wait','',0),(28,127,'reason','','normal','',0);
/*!40000 ALTER TABLE `sys_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_lang`
--

DROP TABLE IF EXISTS `sys_lang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_lang` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `lang` varchar(30) NOT NULL,
  `app` varchar(30) NOT NULL DEFAULT 'sys',
  `module` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `key` varchar(60) NOT NULL,
  `value` text NOT NULL,
  `system` enum('0','1') NOT NULL DEFAULT '1',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang` (`app`,`lang`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_lang`
--

LOCK TABLES `sys_lang` WRITE;
/*!40000 ALTER TABLE `sys_lang` DISABLE KEYS */;
INSERT INTO `sys_lang` VALUES (65,'all','sys','user','roleList','others','其他','1',0),(66,'all','sys','user','roleList','test','测试人员','0',0),(64,'all','sys','user','roleList','top','高层管理','1',0),(63,'all','sys','user','roleList','supportmgr','技术支持主管','1',0),(62,'all','sys','user','roleList','servicemgr','客服主管','1',0),(61,'all','sys','user','roleList','adminmgr','行政主管','1',0),(60,'all','sys','user','roleList','hrmgr','人事主管','1',0),(59,'all','sys','user','roleList','salemgr','销售经理','1',0),(58,'all','sys','user','roleList','marketmgr','市场主管','1',0),(57,'all','sys','user','roleList','support','技术支持','1',0),(56,'all','sys','user','roleList','service','客服','1',0),(55,'all','sys','user','roleList','office','行政','1',0),(54,'all','sys','user','roleList','hr','人事','1',0),(53,'all','sys','user','roleList','sale','销售','1',0),(52,'all','sys','user','roleList','market','市场','1',0),(51,'all','sys','user','roleList','pm','项目经理','1',0),(50,'all','sys','user','roleList','dev','研发','1',0);
/*!40000 ALTER TABLE `sys_lang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_message`
--

DROP TABLE IF EXISTS `sys_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(20) NOT NULL,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) DEFAULT NULL,
  `from` char(30) NOT NULL,
  `to` char(30) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `status` char(20) NOT NULL,
  `readed` enum('0','1') NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_message`
--

LOCK TABLES `sys_message` WRITE;
/*!40000 ALTER TABLE `sys_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_package`
--

DROP TABLE IF EXISTS `sys_package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_package` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'extension',
  `site` varchar(150) NOT NULL,
  `ranzhiCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `addedTime` (`installedTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_package`
--

LOCK TABLES `sys_package` WRITE;
/*!40000 ALTER TABLE `sys_package` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_product`
--

DROP TABLE IF EXISTS `sys_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `category` mediumint(8) unsigned NOT NULL,
  `name` varchar(150) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `order` smallint(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `desc` text NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `type` (`type`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_product`
--

LOCK TABLES `sys_product` WRITE;
/*!40000 ALTER TABLE `sys_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_queue`
--

DROP TABLE IF EXISTS `sys_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_queue` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectID` mediumint(8) unsigned NOT NULL,
  `action` mediumint(9) NOT NULL,
  `toList` varchar(255) NOT NULL,
  `ccList` text NOT NULL,
  `subject` varchar(255) DEFAULT '',
  `data` text,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `sendTime` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'wait',
  `failReason` text NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_queue`
--

LOCK TABLES `sys_queue` WRITE;
/*!40000 ALTER TABLE `sys_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_relation`
--

DROP TABLE IF EXISTS `sys_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_relation` (
  `type` char(20) NOT NULL,
  `id` mediumint(8) NOT NULL,
  `category` mediumint(8) NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `relation` (`type`,`id`,`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_relation`
--

LOCK TABLES `sys_relation` WRITE;
/*!40000 ALTER TABLE `sys_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_schema`
--

DROP TABLE IF EXISTS `sys_schema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_schema` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` char(10) NOT NULL,
  `trader` char(10) NOT NULL,
  `type` char(10) NOT NULL,
  `money` char(10) NOT NULL,
  `desc` char(10) NOT NULL,
  `date` char(10) NOT NULL,
  `fee` char(10) NOT NULL,
  `dept` char(10) NOT NULL,
  `product` char(10) NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_schema`
--

LOCK TABLES `sys_schema` WRITE;
/*!40000 ALTER TABLE `sys_schema` DISABLE KEYS */;
INSERT INTO `sys_schema` VALUES (1,'支付宝','','H','K','J','I,O','D','M','','',0),(2,'中信银行简版','','C','','E,D','G,H','A','','','',0);
/*!40000 ALTER TABLE `sys_schema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sso`
--

DROP TABLE IF EXISTS `sys_sso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sso` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `sid` char(32) NOT NULL,
  `entry` mediumint(8) unsigned NOT NULL,
  `token` char(32) NOT NULL,
  `time` datetime NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sso`
--

LOCK TABLES `sys_sso` WRITE;
/*!40000 ALTER TABLE `sys_sso` DISABLE KEYS */;
INSERT INTO `sys_sso` VALUES (165,'0d3c463b352187d71114da3917c55ad2',9,'a83fc56ec13339c5408a9ac71aaf15ef','2018-06-11 09:53:34',0),(164,'0d3c463b352187d71114da3917c55ad2',2,'31914122ac6c84dbf5ec23614a8ad60d','2018-06-11 09:53:30',0);
/*!40000 ALTER TABLE `sys_sso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_tag`
--

DROP TABLE IF EXISTS `sys_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_tag` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `rank` smallint(5) unsigned NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`),
  KEY `rank` (`rank`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_tag`
--

LOCK TABLES `sys_tag` WRITE;
/*!40000 ALTER TABLE `sys_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_task`
--

DROP TABLE IF EXISTS `sys_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_task` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `customer` mediumint(8) unsigned NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `estimate` decimal(12,1) unsigned NOT NULL,
  `consumed` decimal(12,1) unsigned NOT NULL,
  `left` decimal(12,1) unsigned NOT NULL,
  `deadline` date NOT NULL,
  `status` enum('wait','doing','done','cancel','closed') NOT NULL DEFAULT 'wait',
  `statusCustom` tinyint(3) unsigned NOT NULL,
  `mailto` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `assignedTo` varchar(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `estStarted` date NOT NULL,
  `realStarted` date NOT NULL,
  `finishedBy` varchar(30) NOT NULL,
  `finishedDate` datetime NOT NULL,
  `canceledBy` varchar(30) NOT NULL,
  `canceledDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL,
  `closedDate` datetime NOT NULL,
  `closedReason` varchar(30) NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `key` smallint(5) unsigned NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `statusOrder` (`statusCustom`),
  KEY `assignedTo` (`assignedTo`),
  KEY `createdBy` (`createdBy`),
  KEY `finishedBy` (`finishedBy`),
  KEY `closedBy` (`closedBy`),
  KEY `closedReason` (`closedReason`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_task`
--

LOCK TABLES `sys_task` WRITE;
/*!40000 ALTER TABLE `sys_task` DISABLE KEYS */;
INSERT INTO `sys_task` VALUES (1,1,0,0,0,'前端测试','',1,0.0,10.0,0.0,'2018-05-26','done',0,'','完成前端的自动化测试',0,'admin','2018-05-26 11:33:36','admin','2018-05-26 11:35:14','0000-00-00','0000-00-00','admin','2018-05-26 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','admin','2018-05-30 09:51:34','0',0,0);
/*!40000 ALTER TABLE `sys_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_team`
--

DROP TABLE IF EXISTS `sys_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_team` (
  `type` char(30) NOT NULL,
  `id` mediumint(8) NOT NULL DEFAULT '0',
  `account` char(30) NOT NULL DEFAULT '',
  `role` char(30) NOT NULL DEFAULT '',
  `join` date NOT NULL DEFAULT '0000-00-00',
  `days` smallint(5) unsigned NOT NULL,
  `hours` float(2,1) unsigned NOT NULL DEFAULT '0.0',
  `estimate` decimal(12,1) unsigned NOT NULL,
  `consumed` decimal(12,1) unsigned NOT NULL,
  `left` decimal(12,1) unsigned NOT NULL,
  `order` tinyint(3) unsigned NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`type`,`id`,`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_team`
--

LOCK TABLES `sys_team` WRITE;
/*!40000 ALTER TABLE `sys_team` DISABLE KEYS */;
INSERT INTO `sys_team` VALUES ('project',1,'admin','manager','2018-05-26',0,0.0,0.0,0.0,0.0,0,0);
/*!40000 ALTER TABLE `sys_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_user`
--

DROP TABLE IF EXISTS `sys_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `dept` mediumint(8) unsigned NOT NULL,
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `realname` char(30) NOT NULL DEFAULT '',
  `role` char(30) NOT NULL,
  `nickname` char(60) NOT NULL DEFAULT '',
  `admin` enum('no','common','super') NOT NULL DEFAULT 'no',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `birthday` date NOT NULL,
  `gender` enum('f','m','u') NOT NULL DEFAULT 'u',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL,
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `site` varchar(100) NOT NULL,
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(50) NOT NULL DEFAULT '',
  `last` datetime NOT NULL,
  `ping` datetime NOT NULL,
  `fails` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `join` datetime NOT NULL,
  `locked` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL,
  `status` enum('online','away','busy','offline') NOT NULL DEFAULT 'offline',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`),
  KEY `admin` (`admin`),
  KEY `accountPassword` (`account`,`password`),
  KEY `dept` (`dept`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_user`
--

LOCK TABLES `sys_user` WRITE;
/*!40000 ALTER TABLE `sys_user` DISABLE KEYS */;
INSERT INTO `sys_user` VALUES (1,0,'admin','86f3059b228c8acf99e69734b6bb32cc','admin','','','super','','2018-05-08','u','','','','','','','','','','','',812,'127.0.0.1','2018-06-11 09:53:16','2018-06-11 10:08:45',0,'2018-05-25 21:32:35','0000-00-00 00:00:00','0','offline',0),(2,0,'demo','e36a2dfc0a35fa5b3032aadc489efdd9','张三','top','','no','','2018-05-31','m','6415@qq.com','','','','','','','','','','',407,'::1','2018-06-08 23:41:40','2018-06-08 23:41:40',0,'2018-05-26 11:20:01','0000-00-00 00:00:00','0','offline',0),(4,820035,'demo2','f317355d926c1a834215582b85a8257f','李四','adminmgr','','no','','0000-00-00','f','ww@qq.com','','','','','','','','','','',4,'::1','2018-06-08 23:44:54','2018-06-08 23:44:54',0,'2018-06-08 11:40:16','0000-00-00 00:00:00','0','offline',0),(3,0,'demo1','d85e2bc962a56a20a59b1514f8d44d7e','王五','test','','no','','0000-00-00','u','641@qq.com','','','','','','','','','','',32,'::1','2018-06-08 15:28:38','2018-06-08 15:28:38',0,'2018-06-04 23:23:46','0000-00-00 00:00:00','0','offline',0),(5,0,'demo3','2c23e6ce30e65c982617828ce38a43f3','小星','','','no','','0000-00-00','u','641510128@qq.com','','','','','','','','','','',0,'','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'2018-06-08 16:46:35','0000-00-00 00:00:00','0','offline',0),(6,0,'demo4','0b09d43b48a72cf4d88dbfbe78af0eef','老王','','','no','','0000-00-00','u','das@qq.com','','','','','','','','','','',39,'::1','2018-06-08 23:57:22','2018-06-08 23:57:22',0,'2018-06-08 16:48:09','0000-00-00 00:00:00','0','offline',0);
/*!40000 ALTER TABLE `sys_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_usergroup`
--

DROP TABLE IF EXISTS `sys_usergroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_usergroup` (
  `account` char(30) NOT NULL DEFAULT '',
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `account` (`account`,`group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_usergroup`
--

LOCK TABLES `sys_usergroup` WRITE;
/*!40000 ALTER TABLE `sys_usergroup` DISABLE KEYS */;
INSERT INTO `sys_usergroup` VALUES ('demo',4,0),('demo',1,0);
/*!40000 ALTER TABLE `sys_usergroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_userquery`
--

DROP TABLE IF EXISTS `sys_userquery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_userquery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `title` varchar(90) NOT NULL,
  `form` text NOT NULL,
  `sql` text NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`),
  KEY `module` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_userquery`
--

LOCK TABLES `sys_userquery` WRITE;
/*!40000 ALTER TABLE `sys_userquery` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_userquery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_reply`
--

DROP TABLE IF EXISTS `team_reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_reply` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `thread` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `author` char(30) NOT NULL,
  `editor` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `thread` (`thread`),
  KEY `author` (`author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_reply`
--

LOCK TABLES `team_reply` WRITE;
/*!40000 ALTER TABLE `team_reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_thread`
--

DROP TABLE IF EXISTS `team_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_thread` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `board` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `createdDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `views` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `stick` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `replies` mediumint(8) unsigned NOT NULL,
  `repliedBy` varchar(30) NOT NULL,
  `repliedDate` datetime NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`board`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_thread`
--

LOCK TABLES `team_thread` WRITE;
/*!40000 ALTER TABLE `team_thread` DISABLE KEYS */;
/*!40000 ALTER TABLE `team_thread` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-11 10:10:40
