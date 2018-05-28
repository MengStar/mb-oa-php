-- MySQL dump 10.13  Distrib 5.7.21, for osx10.13 (x86_64)
--
-- Host: aliyun.com    Database: xxb
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
  `birthday` date NOT NULL DEFAULT '0000-00-00',
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_contact`
--

LOCK TABLES `crm_contact` WRITE;
/*!40000 ALTER TABLE `crm_contact` DISABLE KEYS */;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_customer`
--

LOCK TABLES `crm_customer` WRITE;
/*!40000 ALTER TABLE `crm_customer` DISABLE KEYS */;
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
  PRIMARY KEY (`id`),
  KEY `contact` (`contact`),
  KEY `customer` (`customer`),
  KEY `left` (`left`),
  KEY `maker` (`maker`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crm_resume`
--

LOCK TABLES `crm_resume` WRITE;
/*!40000 ALTER TABLE `crm_resume` DISABLE KEYS */;
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
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`),
  KEY `name` (`name`),
  KEY `type` (`type`),
  KEY `public` (`public`),
  KEY `createdBy` (`createdBy`),
  KEY `editedBy` (`editedBy`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_chat`
--

LOCK TABLES `im_chat` WRITE;
/*!40000 ALTER TABLE `im_chat` DISABLE KEYS */;
INSERT INTO `im_chat` VALUES (1,'ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','system group','system','','',0,'0','system','2018-05-25 21:34:42','','0000-00-00 00:00:00','2018-05-25 22:24:50','0000-00-00 00:00:00');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `chatuser` (`cgid`,`user`),
  KEY `cgid` (`cgid`),
  KEY `user` (`user`),
  KEY `order` (`order`),
  KEY `star` (`star`),
  KEY `hide` (`hide`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  PRIMARY KEY (`id`),
  KEY `mgid` (`gid`),
  KEY `mcgid` (`cgid`),
  KEY `muser` (`user`),
  KEY `mtype` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_message`
--

LOCK TABLES `im_message` WRITE;
/*!40000 ALTER TABLE `im_message` DISABLE KEYS */;
INSERT INTO `im_message` VALUES (1,'732ad92d-36a5-4b26-b55c-e776f969bbb9','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:18:41',1,'normal','1','text',''),(2,'f70d4949-a1bb-44a6-a423-a950bb1b9a65','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:19:09',2,'normal','{\"date\":\"2018-05-25T14:19:09.194Z\",\"name\":\"Spring Security Reference.webarchive\",\"size\":1521328,\"send\":true,\"type\":\"application/x-webarchive\",\"gid\":\"f70d4949-a1bb-44a6-a423-a950bb1b9a65\",\"cgid\":\"ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\",\"senderId\":1,\"time\":1527257949,\"id\":1}','file',''),(3,'514fce66-ff86-e07e-352b-633202bbb8f7','#notification','0','2018-05-25 22:21:41',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}'),(4,'912097be-4d2a-45a0-9c57-a40beb67ab87','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:22:40',3,'normal','{\"date\":\"2018-05-25T14:22:40.165Z\",\"name\":\"go-sqlite3-master.zip\",\"size\":2139927,\"send\":true,\"type\":\"application/zip\",\"gid\":\"912097be-4d2a-45a0-9c57-a40beb67ab87\",\"cgid\":\"ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\",\"senderId\":1,\"time\":1527258160,\"id\":2}','file',''),(5,'98f27540-83ab-4ab9-be61-95b69cf05a48','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:24:14',4,'normal','{\"date\":\"2018-05-25T14:24:13.994Z\",\"name\":\"download.zip\",\"size\":2139927,\"send\":true,\"type\":\"application/zip\",\"gid\":\"98f27540-83ab-4ab9-be61-95b69cf05a48\",\"cgid\":\"ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\",\"senderId\":1,\"time\":1527258254,\"id\":3}','file',''),(6,'fa8f65bd-77ac-48f0-8d8a-9cbb411f2a6f','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:24:49',6,'normal','{\"date\":\"2018-05-25T14:24:49.134Z\",\"name\":\"idea激活码.txt\",\"size\":2981,\"send\":true,\"type\":\"text/plain\",\"gid\":\"fa8f65bd-77ac-48f0-8d8a-9cbb411f2a6f\",\"cgid\":\"ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\",\"senderId\":1,\"time\":1527258289,\"id\":4}','file',''),(7,'8becbb2c-7861-7b8d-8ed5-07b64ab41be9','#notification','0','2018-05-26 09:51:13',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}');
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
  UNIQUE KEY `user` (`user`,`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_messagestatus`
--

LOCK TABLES `im_messagestatus` WRITE;
/*!40000 ALTER TABLE `im_messagestatus` DISABLE KEYS */;
INSERT INTO `im_messagestatus` VALUES (1,'732ad92d-36a5-4b26-b55c-e776f969bbb9','sent'),(1,'f70d4949-a1bb-44a6-a423-a950bb1b9a65','sent'),(1,'514fce66-ff86-e07e-352b-633202bbb8f7','sent'),(1,'912097be-4d2a-45a0-9c57-a40beb67ab87','sent'),(1,'98f27540-83ab-4ab9-be61-95b69cf05a48','sent'),(1,'fa8f65bd-77ac-48f0-8d8a-9cbb411f2a6f','sent'),(1,'8becbb2c-7861-7b8d-8ed5-07b64ab41be9','waiting');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `attend` (`date`,`account`),
  KEY `account` (`account`),
  KEY `date` (`date`),
  KEY `status` (`status`),
  KEY `reason` (`reason`),
  KEY `reviewStatus` (`reviewStatus`),
  KEY `reviewedBy` (`reviewedBy`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_attend`
--

LOCK TABLES `oa_attend` WRITE;
/*!40000 ALTER TABLE `oa_attend` DISABLE KEYS */;
INSERT INTO `oa_attend` VALUES (1,'admin','2018-05-25','22:18:30','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00'),(2,'admin','2018-05-26','09:11:09','00:00:00','rest','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00'),(3,'demo','2018-05-26','11:20:54','00:00:00','rest','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00');
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_doclib`
--

LOCK TABLES `oa_doclib` WRITE;
/*!40000 ALTER TABLE `oa_doclib` DISABLE KEYS */;
INSERT INTO `oa_doclib` VALUES (1,1,'项目主库','0',',admin,','1,2,3,4,5','1',0,'admin','2018-05-26 11:30:05','','0000-00-00 00:00:00','0');
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
  PRIMARY KEY (`id`),
  KEY `year` (`year`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `createdBy` (`createdBy`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_overtime`
--

LOCK TABLES `oa_overtime` WRITE;
/*!40000 ALTER TABLE `oa_overtime` DISABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_project`
--

LOCK TABLES `oa_project` WRITE;
/*!40000 ALTER TABLE `oa_project` DISABLE KEYS */;
INSERT INTO `oa_project` VALUES (1,'1','1','1899-11-29','2018-05-31','admin','2018-05-26 11:30:05','','0000-00-00 00:00:00','doing','1,2,3,4,5','0');
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
  PRIMARY KEY (`id`),
  KEY `user` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_todo`
--

LOCK TABLES `oa_todo` WRITE;
/*!40000 ALTER TABLE `oa_todo` DISABLE KEYS */;
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
  PRIMARY KEY (`id`),
  KEY `customer` (`customer`),
  KEY `contact` (`contact`),
  KEY `objectType` (`objectType`),
  KEY `objectID` (`objectID`),
  KEY `date` (`date`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_action`
--

LOCK TABLES `sys_action` WRITE;
/*!40000 ALTER TABLE `sys_action` DISABLE KEYS */;
INSERT INTO `sys_action` VALUES (1,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:18:31','','xuanxuan','0',''),(2,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 22:21:31','','xuanxuan','0',''),(3,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:21:33','','xuanxuan','0',''),(4,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:24:04','','xuanxuan','0',''),(5,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 22:27:04','','xuanxuan','0',''),(6,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:27:06','','xuanxuan','0',''),(7,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 22:29:37','','xuanxuan','0',''),(8,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:29:48','','xuanxuan','0',''),(9,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 22:31:54','','xuanxuan','0',''),(10,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:31:55','','xuanxuan','0',''),(11,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 22:34:26','','xuanxuan','0',''),(12,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:34:28','','xuanxuan','0',''),(13,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 22:36:34','','xuanxuan','0',''),(14,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:36:35','','xuanxuan','0',''),(15,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:16:43','','xuanxuan','0',''),(16,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:17:04','','xuanxuan','0',''),(17,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:19:10','','xuanxuan','0',''),(18,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:19:13','','xuanxuan','0',''),(19,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:21:43','','xuanxuan','0',''),(20,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:22:15','','xuanxuan','0',''),(21,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:24:21','','xuanxuan','0',''),(22,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:24:23','','xuanxuan','0',''),(23,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:26:53','','xuanxuan','0',''),(24,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:27:03','','xuanxuan','0',''),(25,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:29:34','','xuanxuan','0',''),(26,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:30:15','','xuanxuan','0',''),(27,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:32:21','','xuanxuan','0',''),(28,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:32:23','','xuanxuan','0',''),(29,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:34:54','','xuanxuan','0',''),(30,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:35:35','','xuanxuan','0',''),(31,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:37:41','','xuanxuan','0',''),(32,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:37:43','','xuanxuan','0',''),(33,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:40:14','','xuanxuan','0',''),(34,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:40:55','','xuanxuan','0',''),(35,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:43:01','','xuanxuan','0',''),(36,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:43:03','','xuanxuan','0',''),(37,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 23:45:34','','xuanxuan','0',''),(38,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 23:46:15','','xuanxuan','0',''),(39,0,0,'user',1,'admin','logoutxuanxuan','2018-05-26 01:27:17','','xuanxuan','0',''),(40,0,0,'user',1,'admin','loginxuanxuan','2018-05-26 09:11:10','','xuanxuan','0',''),(41,0,0,'user',1,'admin','login','2018-05-26 09:44:10','','','0',''),(42,0,0,'user',1,'admin','logout','2018-05-26 10:33:40','','','0',''),(43,0,0,'user',1,'admin','login','2018-05-26 10:35:08','','','0',''),(44,0,0,'user',1,'admin','logout','2018-05-26 11:10:56','','','0',''),(45,0,0,'user',1,'admin','login','2018-05-26 11:11:20','','','0',''),(46,0,0,'user',2,'admin','created','2018-05-26 11:20:01','','','0',''),(47,0,0,'user',1,'admin','logout','2018-05-26 11:20:42','','','0',''),(48,0,0,'user',2,'demo','login','2018-05-26 11:20:54','','','0',''),(49,0,0,'user',1,'admin','login','2018-05-26 11:22:38','','','0',''),(50,0,0,'user',2,'admin','edited','2018-05-26 11:25:46','','','0',''),(51,0,0,'project',1,'admin','created','2018-05-26 11:30:06','','','0',''),(52,0,0,'task',1,'admin','created','2018-05-26 11:33:36','','','0',''),(53,0,0,'task',1,'admin','started','2018-05-26 11:34:00','','','0',''),(54,0,0,'task',1,'admin','finished','2018-05-26 11:35:14','41','','0','');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `accountAppOrder` (`account`,`app`,`order`),
  KEY `account` (`account`,`app`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_block`
--

LOCK TABLES `sys_block` WRITE;
/*!40000 ALTER TABLE `sys_block` DISABLE KEYS */;
INSERT INTO `sys_block` VALUES (1,'admin','sys','日历','oa','attend','',1,6,0,0),(2,'admin','sys','最新动态','','dynamic','',2,6,0,0),(3,'admin','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(4,'admin','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(5,'admin','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(6,'admin','sys','付款账户','cash','depositor','[]',6,4,0,0),(7,'admin','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(8,'admin','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(9,'admin','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,0,0),(10,'admin','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0),(11,'admin','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0),(12,'admin','oa','日历','oa','attend','{}',1,6,250,0),(13,'admin','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0),(14,'admin','cash','付款账户','cash','depositor','[]',1,4,0,0),(15,'admin','cash','账目','cash','trade','{\"num\":15,\"orderBy\":\"id_desc\"}',2,4,0,0),(16,'admin','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0),(17,'admin','team','最新博客','team','blog','{\"num\":15}',1,4,0,0),(18,'admin','team','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',2,4,0,0),(19,'admin','team','置顶帖子','team','thread','{\"num\":15,\"type\":\"stick\"}',3,4,0,0),(20,'admin','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(21,'admin','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(22,'demo','sys','日历','oa','attend','',1,6,0,0),(23,'demo','sys','最新动态','','dynamic','',2,6,0,0),(24,'demo','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0),(25,'demo','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0),(26,'demo','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0),(27,'demo','sys','付款账户','cash','depositor','[]',6,4,0,0),(28,'demo','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0),(29,'demo','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0),(30,'demo','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,0,0),(31,'demo','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0),(32,'demo','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0),(33,'demo','oa','日历','oa','attend','',1,6,0,0),(34,'demo','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0),(35,'demo','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0),(36,'demo','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0),(37,'demo','cash','付款账户','cash','depositor','[]',1,4,0,0),(38,'demo','cash','账目','cash','trade','{\"num\":15,\"orderBy\":\"id_desc\"}',2,4,0,0),(39,'demo','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0),(40,'demo','team','最新博客','team','blog','{\"num\":15}',1,4,0,0),(41,'demo','team','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',2,4,0,0),(42,'demo','team','置顶帖子','team','thread','{\"num\":15,\"type\":\"stick\"}',3,4,0,0);
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
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=820032 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_category`
--

LOCK TABLES `sys_category` WRITE;
/*!40000 ALTER TABLE `sys_category` DISABLE KEYS */;
INSERT INTO `sys_category` VALUES (1,'主营业务收入','','','',0,0,',1,',1,1,'in','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','1'),(2,'非主营业务收入','','','',0,0,',2,',1,2,'in','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','2'),(3,'主营业务成本','','','',0,0,',3,',1,3,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','3'),(4,'非主营业务成本','','','',0,0,',4,',1,4,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','4'),(5,'理财盈利','','','',0,2,',2,5,',2,5,'in','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','5'),(6,'理财亏损','','','',0,4,',4,6,',2,6,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','6'),(7,'手续费','','','',0,4,',4,7,',2,7,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','7'),(8,'借贷利息','','','',0,4,',4,8,',2,8,'out','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','0','8'),(110000,'北京市','','','',0,0,',110000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(120000,'天津市','','','',0,0,',120000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130000,'河北省','','','',0,0,',130000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140000,'山西省','','','',0,0,',140000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150000,'内蒙古自治区','','','',0,0,',150000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210000,'辽宁省','','','',0,0,',210000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220000,'吉林省','','','',0,0,',220000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230000,'黑龙江省','','','',0,0,',230000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(310000,'上海市','','','',0,0,',310000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320000,'江苏省','','','',0,0,',320000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330000,'浙江省','','','',0,0,',330000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340000,'安徽省','','','',0,0,',340000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350000,'福建省','','','',0,0,',350000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360000,'江西省','','','',0,0,',360000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370000,'山东省','','','',0,0,',370000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410000,'河南省','','','',0,0,',410000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420000,'湖北省','','','',0,0,',420000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430000,'湖南省','','','',0,0,',430000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440000,'广东省','','','',0,0,',440000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450000,'广西壮族自治区','','','',0,0,',450000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(460000,'海南省','','','',0,0,',460000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(500000,'重庆市','','','',0,0,',500000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510000,'四川省','','','',0,0,',510000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(520000,'贵州省','','','',0,0,',520000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530000,'云南省','','','',0,0,',530000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(540000,'西藏自治区','','','',0,0,',540000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610000,'陕西省','','','',0,0,',610000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620000,'甘肃省','','','',0,0,',620000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(630000,'青海省','','','',0,0,',630000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(640000,'宁夏回族自治区','','','',0,0,',640000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(650000,'新疆维吾尔自治区','','','',0,0,',650000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(710000,'台湾省','','','',0,0,',710000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(810000,'香港特别行政区','','','',0,0,',810000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820000,'澳门特别行政区','','','',0,0,',820000,',1,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130100,'石家庄市','','','',0,130000,',130000,130100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130200,'唐山市','','','',0,130000,',130000,130200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130300,'秦皇岛市','','','',0,130000,',130000,130300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130400,'邯郸市','','','',0,130000,',130000,130400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130500,'邢台市','','','',0,130000,',130000,130500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130600,'保定市','','','',0,130000,',130000,130600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130700,'张家口市','','','',0,130000,',130000,130700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130800,'承德市','','','',0,130000,',130000,130800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(130900,'沧州市','','','',0,130000,',130000,130900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(131000,'廊坊市','','','',0,130000,',130000,131000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(131100,'衡水市','','','',0,130000,',130000,131100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140100,'太原市','','','',0,140000,',140000,140100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140200,'大同市','','','',0,140000,',140000,140200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140300,'阳泉市','','','',0,140000,',140000,140300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140400,'长治市','','','',0,140000,',140000,140400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140500,'晋城市','','','',0,140000,',140000,140500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140600,'朔州市','','','',0,140000,',140000,140600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140700,'晋中市','','','',0,140000,',140000,140700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140800,'运城市','','','',0,140000,',140000,140800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(140900,'忻州市','','','',0,140000,',140000,140900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(141000,'临汾市','','','',0,140000,',140000,141000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(141100,'吕梁市','','','',0,140000,',140000,141100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150100,'呼和浩特市','','','',0,150000,',150000,150100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150200,'包头市','','','',0,150000,',150000,150200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150300,'乌海市','','','',0,150000,',150000,150300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150400,'赤峰市','','','',0,150000,',150000,150400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150500,'通辽市','','','',0,150000,',150000,150500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150600,'鄂尔多斯市','','','',0,150000,',150000,150600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150700,'呼伦贝尔市','','','',0,150000,',150000,150700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150800,'巴彦淖尔市','','','',0,150000,',150000,150800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(150900,'乌兰察布市','','','',0,150000,',150000,150900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(152200,'兴安盟','','','',0,150000,',150000,152200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(152500,'锡林郭勒盟','','','',0,150000,',150000,152500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(152900,'阿拉善盟','','','',0,150000,',150000,152900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210100,'沈阳市','','','',0,210000,',210000,210100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210200,'大连市','','','',0,210000,',210000,210200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210300,'鞍山市','','','',0,210000,',210000,210300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210400,'抚顺市','','','',0,210000,',210000,210400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210500,'本溪市','','','',0,210000,',210000,210500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210600,'丹东市','','','',0,210000,',210000,210600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210700,'锦州市','','','',0,210000,',210000,210700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210800,'营口市','','','',0,210000,',210000,210800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(210900,'阜新市','','','',0,210000,',210000,210900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(211000,'辽阳市','','','',0,210000,',210000,211000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(211100,'盘锦市','','','',0,210000,',210000,211100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(211200,'铁岭市','','','',0,210000,',210000,211200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(211300,'朝阳市','','','',0,210000,',210000,211300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(211400,'葫芦岛市','','','',0,210000,',210000,211400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220100,'长春市','','','',0,220000,',220000,220100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220200,'吉林市','','','',0,220000,',220000,220200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220300,'四平市','','','',0,220000,',220000,220300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220400,'辽源市','','','',0,220000,',220000,220400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220500,'通化市','','','',0,220000,',220000,220500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220600,'白山市','','','',0,220000,',220000,220600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220700,'松原市','','','',0,220000,',220000,220700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(220800,'白城市','','','',0,220000,',220000,220800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(222400,'延边朝鲜族自治州','','','',0,220000,',220000,222400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230100,'哈尔滨市','','','',0,230000,',230000,230100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230200,'齐齐哈尔市','','','',0,230000,',230000,230200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230300,'鸡西市','','','',0,230000,',230000,230300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230400,'鹤岗市','','','',0,230000,',230000,230400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230500,'双鸭山市','','','',0,230000,',230000,230500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230600,'大庆市','','','',0,230000,',230000,230600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230700,'伊春市','','','',0,230000,',230000,230700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230800,'佳木斯市','','','',0,230000,',230000,230800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(230900,'七台河市','','','',0,230000,',230000,230900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(231000,'牡丹江市','','','',0,230000,',230000,231000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(231100,'黑河市','','','',0,230000,',230000,231100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(231200,'绥化市','','','',0,230000,',230000,231200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(232700,'大兴安岭地区','','','',0,230000,',230000,232700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320100,'南京市','','','',0,320000,',320000,320100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320200,'无锡市','','','',0,320000,',320000,320200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320300,'徐州市','','','',0,320000,',320000,320300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320400,'常州市','','','',0,320000,',320000,320400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320500,'苏州市','','','',0,320000,',320000,320500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320600,'南通市','','','',0,320000,',320000,320600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320700,'连云港市','','','',0,320000,',320000,320700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320800,'淮安市','','','',0,320000,',320000,320800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(320900,'盐城市','','','',0,320000,',320000,320900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(321000,'扬州市','','','',0,320000,',320000,321000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(321100,'镇江市','','','',0,320000,',320000,321100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(321200,'泰州市','','','',0,320000,',320000,321200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(321300,'宿迁市','','','',0,320000,',320000,321300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330100,'杭州市','','','',0,330000,',330000,330100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330200,'宁波市','','','',0,330000,',330000,330200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330300,'温州市','','','',0,330000,',330000,330300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330400,'嘉兴市','','','',0,330000,',330000,330400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330500,'湖州市','','','',0,330000,',330000,330500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330600,'绍兴市','','','',0,330000,',330000,330600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330700,'金华市','','','',0,330000,',330000,330700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330800,'衢州市','','','',0,330000,',330000,330800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(330900,'舟山市','','','',0,330000,',330000,330900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(331000,'台州市','','','',0,330000,',330000,331000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(331100,'丽水市','','','',0,330000,',330000,331100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340100,'合肥市','','','',0,340000,',340000,340100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340200,'芜湖市','','','',0,340000,',340000,340200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340300,'蚌埠市','','','',0,340000,',340000,340300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340400,'淮南市','','','',0,340000,',340000,340400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340500,'马鞍山市','','','',0,340000,',340000,340500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340600,'淮北市','','','',0,340000,',340000,340600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340700,'铜陵市','','','',0,340000,',340000,340700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(340800,'安庆市','','','',0,340000,',340000,340800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(341000,'黄山市','','','',0,340000,',340000,341000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(341100,'滁州市','','','',0,340000,',340000,341100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(341200,'阜阳市','','','',0,340000,',340000,341200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(341300,'宿州市','','','',0,340000,',340000,341300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(341500,'六安市','','','',0,340000,',340000,341500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(341600,'亳州市','','','',0,340000,',340000,341600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(341700,'池州市','','','',0,340000,',340000,341700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(341800,'宣城市','','','',0,340000,',340000,341800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350100,'福州市','','','',0,350000,',350000,350100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350200,'厦门市','','','',0,350000,',350000,350200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350300,'莆田市','','','',0,350000,',350000,350300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350400,'三明市','','','',0,350000,',350000,350400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350500,'泉州市','','','',0,350000,',350000,350500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350600,'漳州市','','','',0,350000,',350000,350600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350700,'南平市','','','',0,350000,',350000,350700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350800,'龙岩市','','','',0,350000,',350000,350800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(350900,'宁德市','','','',0,350000,',350000,350900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360100,'南昌市','','','',0,360000,',360000,360100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360200,'景德镇市','','','',0,360000,',360000,360200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360300,'萍乡市','','','',0,360000,',360000,360300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360400,'九江市','','','',0,360000,',360000,360400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360500,'新余市','','','',0,360000,',360000,360500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360600,'鹰潭市','','','',0,360000,',360000,360600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360700,'赣州市','','','',0,360000,',360000,360700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360800,'吉安市','','','',0,360000,',360000,360800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(360900,'宜春市','','','',0,360000,',360000,360900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(361000,'抚州市','','','',0,360000,',360000,361000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(361100,'上饶市','','','',0,360000,',360000,361100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370100,'济南市','','','',0,370000,',370000,370100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370200,'青岛市','','','',0,370000,',370000,370200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370300,'淄博市','','','',0,370000,',370000,370300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370400,'枣庄市','','','',0,370000,',370000,370400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370500,'东营市','','','',0,370000,',370000,370500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370600,'烟台市','','','',0,370000,',370000,370600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370700,'潍坊市','','','',0,370000,',370000,370700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370800,'济宁市','','','',0,370000,',370000,370800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(370900,'泰安市','','','',0,370000,',370000,370900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(371000,'威海市','','','',0,370000,',370000,371000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(371100,'日照市','','','',0,370000,',370000,371100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(371200,'莱芜市','','','',0,370000,',370000,371200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(371300,'临沂市','','','',0,370000,',370000,371300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(371400,'德州市','','','',0,370000,',370000,371400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(371500,'聊城市','','','',0,370000,',370000,371500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(371600,'滨州市','','','',0,370000,',370000,371600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(371700,'菏泽市','','','',0,370000,',370000,371700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410100,'郑州市','','','',0,410000,',410000,410100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410200,'开封市','','','',0,410000,',410000,410200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410300,'洛阳市','','','',0,410000,',410000,410300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410400,'平顶山市','','','',0,410000,',410000,410400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410500,'安阳市','','','',0,410000,',410000,410500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410600,'鹤壁市','','','',0,410000,',410000,410600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410700,'新乡市','','','',0,410000,',410000,410700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410800,'焦作市','','','',0,410000,',410000,410800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(410900,'濮阳市','','','',0,410000,',410000,410900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(411000,'许昌市','','','',0,410000,',410000,411000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(411100,'漯河市','','','',0,410000,',410000,411100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(411200,'三门峡市','','','',0,410000,',410000,411200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(411300,'南阳市','','','',0,410000,',410000,411300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(411400,'商丘市','','','',0,410000,',410000,411400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(411500,'信阳市','','','',0,410000,',410000,411500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(411600,'周口市','','','',0,410000,',410000,411600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(411700,'驻马店市','','','',0,410000,',410000,411700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(419000,'省直辖县级行政区划','','','',0,410000,',410000,419000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420100,'武汉市','','','',0,420000,',420000,420100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420200,'黄石市','','','',0,420000,',420000,420200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420300,'十堰市','','','',0,420000,',420000,420300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420500,'宜昌市','','','',0,420000,',420000,420500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420600,'襄阳市','','','',0,420000,',420000,420600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420700,'鄂州市','','','',0,420000,',420000,420700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420800,'荆门市','','','',0,420000,',420000,420800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(420900,'孝感市','','','',0,420000,',420000,420900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(421000,'荆州市','','','',0,420000,',420000,421000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(421100,'黄冈市','','','',0,420000,',420000,421100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(421200,'咸宁市','','','',0,420000,',420000,421200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(421300,'随州市','','','',0,420000,',420000,421300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(422800,'恩施土家族苗族自治州','','','',0,420000,',420000,422800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(429000,'省直辖县级行政区划','','','',0,420000,',420000,429000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430100,'长沙市','','','',0,430000,',430000,430100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430200,'株洲市','','','',0,430000,',430000,430200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430300,'湘潭市','','','',0,430000,',430000,430300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430400,'衡阳市','','','',0,430000,',430000,430400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430500,'邵阳市','','','',0,430000,',430000,430500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430600,'岳阳市','','','',0,430000,',430000,430600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430700,'常德市','','','',0,430000,',430000,430700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430800,'张家界市','','','',0,430000,',430000,430800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(430900,'益阳市','','','',0,430000,',430000,430900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(431000,'郴州市','','','',0,430000,',430000,431000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(431100,'永州市','','','',0,430000,',430000,431100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(431200,'怀化市','','','',0,430000,',430000,431200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(431300,'娄底市','','','',0,430000,',430000,431300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(433100,'湘西土家族苗族自治州','','','',0,430000,',430000,433100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440100,'广州市','','','',0,440000,',440000,440100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440200,'韶关市','','','',0,440000,',440000,440200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440300,'深圳市','','','',0,440000,',440000,440300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440400,'珠海市','','','',0,440000,',440000,440400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440500,'汕头市','','','',0,440000,',440000,440500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440600,'佛山市','','','',0,440000,',440000,440600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440700,'江门市','','','',0,440000,',440000,440700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440800,'湛江市','','','',0,440000,',440000,440800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(440900,'茂名市','','','',0,440000,',440000,440900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(441200,'肇庆市','','','',0,440000,',440000,441200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(441300,'惠州市','','','',0,440000,',440000,441300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(441400,'梅州市','','','',0,440000,',440000,441400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(441500,'汕尾市','','','',0,440000,',440000,441500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(441600,'河源市','','','',0,440000,',440000,441600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(441700,'阳江市','','','',0,440000,',440000,441700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(441800,'清远市','','','',0,440000,',440000,441800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(441900,'东莞市','','','',0,440000,',440000,441900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(442000,'中山市','','','',0,440000,',440000,442000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(445100,'潮州市','','','',0,440000,',440000,445100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(445200,'揭阳市','','','',0,440000,',440000,445200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(445300,'云浮市','','','',0,440000,',440000,445300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450100,'南宁市','','','',0,450000,',450000,450100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450200,'柳州市','','','',0,450000,',450000,450200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450300,'桂林市','','','',0,450000,',450000,450300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450400,'梧州市','','','',0,450000,',450000,450400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450500,'北海市','','','',0,450000,',450000,450500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450600,'防城港市','','','',0,450000,',450000,450600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450700,'钦州市','','','',0,450000,',450000,450700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450800,'贵港市','','','',0,450000,',450000,450800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(450900,'玉林市','','','',0,450000,',450000,450900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(451000,'百色市','','','',0,450000,',450000,451000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(451100,'贺州市','','','',0,450000,',450000,451100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(451200,'河池市','','','',0,450000,',450000,451200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(451300,'来宾市','','','',0,450000,',450000,451300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(451400,'崇左市','','','',0,450000,',450000,451400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(460100,'海口市','','','',0,460000,',460000,460100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(460200,'三亚市','','','',0,460000,',460000,460200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(460300,'三沙市','','','',0,460000,',460000,460300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(469000,'省直辖县级行政区划','','','',0,460000,',460000,469000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510100,'成都市','','','',0,510000,',510000,510100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510300,'自贡市','','','',0,510000,',510000,510300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510400,'攀枝花市','','','',0,510000,',510000,510400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510500,'泸州市','','','',0,510000,',510000,510500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510600,'德阳市','','','',0,510000,',510000,510600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510700,'绵阳市','','','',0,510000,',510000,510700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510800,'广元市','','','',0,510000,',510000,510800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(510900,'遂宁市','','','',0,510000,',510000,510900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511000,'内江市','','','',0,510000,',510000,511000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511100,'乐山市','','','',0,510000,',510000,511100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511300,'南充市','','','',0,510000,',510000,511300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511400,'眉山市','','','',0,510000,',510000,511400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511500,'宜宾市','','','',0,510000,',510000,511500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511600,'广安市','','','',0,510000,',510000,511600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511700,'达州市','','','',0,510000,',510000,511700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511800,'雅安市','','','',0,510000,',510000,511800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(511900,'巴中市','','','',0,510000,',510000,511900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(512000,'资阳市','','','',0,510000,',510000,512000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(513200,'阿坝藏族羌族自治州','','','',0,510000,',510000,513200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(513300,'甘孜藏族自治州','','','',0,510000,',510000,513300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(513400,'凉山彝族自治州','','','',0,510000,',510000,513400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(520100,'贵阳市','','','',0,520000,',520000,520100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(520200,'六盘水市','','','',0,520000,',520000,520200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(520300,'遵义市','','','',0,520000,',520000,520300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(520400,'安顺市','','','',0,520000,',520000,520400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(520500,'毕节市','','','',0,520000,',520000,520500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(520600,'铜仁市','','','',0,520000,',520000,520600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(522300,'黔西南布依族苗族自治州','','','',0,520000,',520000,522300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(522600,'黔东南苗族侗族自治州','','','',0,520000,',520000,522600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(522700,'黔南布依族苗族自治州','','','',0,520000,',520000,522700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530100,'昆明市','','','',0,530000,',530000,530100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530300,'曲靖市','','','',0,530000,',530000,530300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530400,'玉溪市','','','',0,530000,',530000,530400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530500,'保山市','','','',0,530000,',530000,530500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530600,'昭通市','','','',0,530000,',530000,530600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530700,'丽江市','','','',0,530000,',530000,530700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530800,'普洱市','','','',0,530000,',530000,530800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(530900,'临沧市','','','',0,530000,',530000,530900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(532300,'楚雄彝族自治州','','','',0,530000,',530000,532300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(532500,'红河哈尼族彝族自治州','','','',0,530000,',530000,532500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(532600,'文山壮族苗族自治州','','','',0,530000,',530000,532600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(532800,'西双版纳傣族自治州','','','',0,530000,',530000,532800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(532900,'大理白族自治州','','','',0,530000,',530000,532900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(533100,'德宏傣族景颇族自治州','','','',0,530000,',530000,533100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(533300,'怒江傈僳族自治州','','','',0,530000,',530000,533300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(533400,'迪庆藏族自治州','','','',0,530000,',530000,533400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(540100,'拉萨市','','','',0,540000,',540000,540100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(542100,'昌都地区','','','',0,540000,',540000,542100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(542200,'山南地区','','','',0,540000,',540000,542200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(542300,'日喀则地区','','','',0,540000,',540000,542300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(542400,'那曲地区','','','',0,540000,',540000,542400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(542500,'阿里地区','','','',0,540000,',540000,542500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(542600,'林芝地区','','','',0,540000,',540000,542600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610100,'西安市','','','',0,610000,',610000,610100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610200,'铜川市','','','',0,610000,',610000,610200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610300,'宝鸡市','','','',0,610000,',610000,610300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610400,'咸阳市','','','',0,610000,',610000,610400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610500,'渭南市','','','',0,610000,',610000,610500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610600,'延安市','','','',0,610000,',610000,610600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610700,'汉中市','','','',0,610000,',610000,610700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610800,'榆林市','','','',0,610000,',610000,610800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(610900,'安康市','','','',0,610000,',610000,610900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(611000,'商洛市','','','',0,610000,',610000,611000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620100,'兰州市','','','',0,620000,',620000,620100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620200,'嘉峪关市','','','',0,620000,',620000,620200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620300,'金昌市','','','',0,620000,',620000,620300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620400,'白银市','','','',0,620000,',620000,620400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620500,'天水市','','','',0,620000,',620000,620500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620600,'武威市','','','',0,620000,',620000,620600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620700,'张掖市','','','',0,620000,',620000,620700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620800,'平凉市','','','',0,620000,',620000,620800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(620900,'酒泉市','','','',0,620000,',620000,620900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(621000,'庆阳市','','','',0,620000,',620000,621000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(621100,'定西市','','','',0,620000,',620000,621100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(621200,'陇南市','','','',0,620000,',620000,621200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(622900,'临夏回族自治州','','','',0,620000,',620000,622900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(623000,'甘南藏族自治州','','','',0,620000,',620000,623000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(630100,'西宁市','','','',0,630000,',630000,630100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(630200,'海东市','','','',0,630000,',630000,630200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(632200,'海北藏族自治州','','','',0,630000,',630000,632200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(632300,'黄南藏族自治州','','','',0,630000,',630000,632300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(632500,'海南藏族自治州','','','',0,630000,',630000,632500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(632600,'果洛藏族自治州','','','',0,630000,',630000,632600,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(632700,'玉树藏族自治州','','','',0,630000,',630000,632700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(632800,'海西蒙古族藏族自治州','','','',0,630000,',630000,632800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(640100,'银川市','','','',0,640000,',640000,640100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(640200,'石嘴山市','','','',0,640000,',640000,640200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(640300,'吴忠市','','','',0,640000,',640000,640300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(640400,'固原市','','','',0,640000,',640000,640400,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(640500,'中卫市','','','',0,640000,',640000,640500,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(650100,'乌鲁木齐市','','','',0,650000,',650000,650100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(650200,'克拉玛依市','','','',0,650000,',650000,650200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(652100,'吐鲁番地区','','','',0,650000,',650000,652100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(652200,'哈密地区','','','',0,650000,',650000,652200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(652300,'昌吉回族自治州','','','',0,650000,',650000,652300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(652700,'博尔塔拉蒙古自治州','','','',0,650000,',650000,652700,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(652800,'巴音郭楞蒙古自治州','','','',0,650000,',650000,652800,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(652900,'阿克苏地区','','','',0,650000,',650000,652900,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(653000,'克孜勒苏柯尔克孜自治州','','','',0,650000,',650000,653000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(653100,'喀什地区','','','',0,650000,',650000,653100,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(653200,'和田地区','','','',0,650000,',650000,653200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(654000,'伊犁哈萨克自治州','','','',0,650000,',650000,654000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(654200,'塔城地区','','','',0,650000,',650000,654200,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(654300,'阿勒泰地区','','','',0,650000,',650000,654300,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(659000,'自治区直辖县级行政区划','','','',0,650000,',650000,659000,',2,0,'area','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820001,'化工','','','',0,0,',820001,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820002,'环保、绿化、公共事业','','','',0,0,',820002,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820003,'电子电工及通讯','','','',0,0,',820003,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820004,'办公文教及光仪','','','',0,0,',820004,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820005,'影视、新闻、出版','','','',0,0,',820005,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820006,'电脑、网络、软件','','','',0,0,',820006,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820007,'农林牧渔','','','',0,0,',820007,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820008,'生活消费','','','',0,0,',820008,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820009,'家电及家居用品','','','',0,0,',820009,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820010,'交通运输、物流','','','',0,0,',820010,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820011,'文化教育、培训','','','',0,0,',820011,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820012,'玩具及儿童用品','','','',0,0,',820012,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820013,'科研、设计、监测','','','',0,0,',820013,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820014,'礼品、美术、工艺品','','','',0,0,',820014,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820015,'医疗、医药、保健','','','',0,0,',820015,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820016,'金融、保险、投资','','','',0,0,',820016,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820017,'机械、机电、设备','','','',0,0,',820017,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820018,'旅游、运动、休闲','','','',0,0,',820018,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820019,'政府及社会团体','','','',0,0,',820019,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820020,'工业制品及工业用品','','','',0,0,',820020,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820021,'包装、印刷、纸品','','','',0,0,',820021,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820022,'商业机构','','','',0,0,',820022,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820023,'纺织、皮革、印染','','','',0,0,',820023,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820024,'安全、保安','','','',0,0,',820024,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820025,'专业服务','','','',0,0,',820025,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820026,'能源、矿产、冶金','','','',0,0,',820026,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820027,'服装、服饰','','','',0,0,',820027,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820028,'生活服务','','','',0,0,',820028,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820029,'宠物及用品','','','',0,0,',820029,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820030,'建筑、装饰、房地产','','','',0,0,',820030,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0'),(820031,'食品、饮料、烟酒','','','',0,0,',820031,',1,0,'industry','0','',0,0,'','0000-00-00 00:00:00',0,0,'','','','0');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`app`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_config`
--

LOCK TABLES `sys_config` WRITE;
/*!40000 ALTER TABLE `sys_config` DISABLE KEYS */;
INSERT INTO `sys_config` VALUES (1,'system','sys','xuanxuan','global','version','1.5.0'),(7,'system','sys','xuanxuan','','key','wap979sn5y1m8kqa5tkras51s5lfgkw9'),(3,'system','sys','common','global','version','4.6.3'),(4,'admin','sys','common','','blockInited','1'),(5,'system','sys','cron','run','status','running'),(6,'admin','crm','common','','blockInited','1'),(8,'admin','oa','common','','blockInited','1'),(9,'admin','cash','common','','blockInited','1'),(10,'admin','team','common','','blockInited','1'),(11,'admin','proj','common','','blockInited','1'),(12,'system','oa','attend','readers','2018-05-26','admin'),(13,'demo','sys','common','','blockInited','1'),(15,'system','sys','group','','unUpdatedAccounts',''),(16,'demo','crm','common','','blockInited','1'),(17,'demo','oa','common','','blockInited','1'),(18,'demo','proj','common','','blockInited','1'),(19,'demo','cash','common','','blockInited','1'),(20,'demo','team','common','','blockInited','1');
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_cron`
--

LOCK TABLES `sys_cron` WRITE;
/*!40000 ALTER TABLE `sys_cron` DISABLE KEYS */;
INSERT INTO `sys_cron` VALUES (1,'*','*','*','*','*','','监控定时任务','ranzhi',1,'normal','2018-05-26 11:56:12'),(2,'1','1','*','*','*','appName=sys&moduleName=backup&methodName=backup&reload=0','定时备份任务','ranzhi',1,'normal','2018-05-25 21:32:40'),(3,'1','1','*','*','*','appName=sys&moduleName=backup&methodName=batchdelete&saveDays=30','删除30天前的备份','ranzhi',1,'normal','2018-05-25 21:32:40'),(4,'1','7','*','*','*','appName=sys&moduleName=report&methodName=remind','每日提醒','ranzhi',1,'normal','2018-05-25 21:32:40'),(5,'*/1','*','*','*','*','appName=sys&moduleName=queue&methodName=getqueue','出队列','ranzhi',0,'normal','2018-05-26 11:56:12'),(6,'*/10','*','*','*','*','appName=sys&moduleName=queue&methodName=additional','检查是否添加待办','ranzhi',0,'normal','2018-05-26 11:50:13');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_entry`
--

LOCK TABLES `sys_entry` WRITE;
/*!40000 ALTER TABLE `sys_entry` DISABLE KEYS */;
INSERT INTO `sys_entry` VALUES (1,'客户管理','客户','crm',1,1,'iframe','epet8b8ae1g89rxzquf4ubv37ul5tite','*','theme/default/images/ips/app-crm.png','../crm','','','simple','max','default',1,10,'0',0),(2,'日常办公','办公','oa',1,1,'iframe','1a673c4c3c85fadcf0333e0a4596d220','*','theme/default/images/ips/app-oa.png','../oa','','','simple','max','default',1,20,'0',0),(3,'项目','项目','proj',1,1,'iframe','a910d9d1dd03c9dd99cecb3ca31ea600','*','theme/default/images/ips/app-proj.png','../proj','','','simple','max','default',1,30,'0',0),(4,'文档','文档','doc',1,1,'iframe','76ff605479df34f1d239730efa68d562','*','theme/default/images/ips/app-doc.png','../doc','','','simple','max','default',1,40,'0',0),(5,'现金记账','记账','cash',1,1,'iframe','438d85f2c2b04372662c63ebfb1c4c2f','*','theme/default/images/ips/app-cash.png','../cash','','','simple','max','default',1,50,'0',0),(6,'团队','团队','team',1,1,'iframe','6c46d9fe76a1afa1cd61f946f1072d1e','*','theme/default/images/ips/app-team.png','../team','','','simple','max','default',1,60,'0',0);
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
  PRIMARY KEY (`id`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_file`
--

LOCK TABLES `sys_file` WRITE;
/*!40000 ALTER TABLE `sys_file` DISABLE KEYS */;
INSERT INTO `sys_file` VALUES (1,'~/xxdfile/xuanxuan/2018/05/25/315d9570dba97ee321d1f4565c56721a','Spring Security Reference.webarchive','txt',1521328,'chat',1,'admin','2018-05-25 22:19:09','0','0','1',0,''),(2,'~/xxdfile/xuanxuan/2018/05/25/f288f0491563b294174b7a59f0168bf6','go-sqlite3-master','zip',2139927,'chat',1,'admin','2018-05-25 22:22:40','0','0','1',0,''),(3,'/Users/MengStar/xxdfilexuanxuan/2018/05/25/5f986fd53751e63a1b2c659109bf47f6','download','zip',2139927,'chat',1,'admin','2018-05-25 22:24:14','0','0','1',0,''),(4,'/Users/MengStar/xxdfilexuanxuan/2018/05/25/f2ff6c833167f368ab5fcf4297376c2c','idea激活码','txt',2981,'chat',1,'admin','2018-05-25 22:24:49','0','0','1',0,'');
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_group`
--

LOCK TABLES `sys_group` WRITE;
/*!40000 ALTER TABLE `sys_group` DISABLE KEYS */;
INSERT INTO `sys_group` VALUES (1,'管理员','管理员拥有前台所有权限'),(2,'财务专员','财务专员拥有现金流所有权限'),(3,'销售经理','销售经理拥有客户管理所有权限'),(4,'销售人员','默认的销售人员权限'),(5,'普通用户','默认的普通账号权限');
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
  UNIQUE KEY `group` (`group`,`module`,`method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_grouppriv`
--

LOCK TABLES `sys_grouppriv` WRITE;
/*!40000 ALTER TABLE `sys_grouppriv` DISABLE KEYS */;
INSERT INTO `sys_grouppriv` VALUES (1,'address','browse'),(1,'address','create'),(1,'address','delete'),(1,'address','edit'),(1,'announce','browse'),(1,'announce','create'),(1,'announce','delete'),(1,'announce','edit'),(1,'announce','view'),(1,'apppriv','cash'),(1,'apppriv','crm'),(1,'apppriv','doc'),(1,'apppriv','oa'),(1,'apppriv','proj'),(1,'apppriv','superadmin'),(1,'apppriv','team'),(1,'attend','browseReview'),(1,'attend','company'),(1,'attend','department'),(1,'attend','detail'),(1,'attend','export'),(1,'attend','exportDetail'),(1,'attend','exportStat'),(1,'attend','personalSettings'),(1,'attend','review'),(1,'attend','saveStat'),(1,'attend','setManager'),(1,'attend','settings'),(1,'attend','stat'),(1,'balance','browse'),(1,'balance','create'),(1,'balance','delete'),(1,'balance','edit'),(1,'blog','create'),(1,'blog','delete'),(1,'blog','edit'),(1,'blog','index'),(1,'blog','view'),(1,'company','index'),(1,'contact','browse'),(1,'contact','create'),(1,'contact','delete'),(1,'contact','edit'),(1,'contact','export'),(1,'contact','exportTemplate'),(1,'contact','import'),(1,'contact','showImport'),(1,'contact','vcard'),(1,'contact','view'),(1,'contract','browse'),(1,'contract','cancel'),(1,'contract','create'),(1,'contract','delete'),(1,'contract','deleteDelivery'),(1,'contract','deleteReturn'),(1,'contract','delivery'),(1,'contract','edit'),(1,'contract','editDelivery'),(1,'contract','editReturn'),(1,'contract','export'),(1,'contract','finish'),(1,'contract','receive'),(1,'contract','view'),(1,'crm','manageAll'),(1,'customer','assign'),(1,'customer','batchAssign'),(1,'customer','browse'),(1,'customer','contact'),(1,'customer','contract'),(1,'customer','create'),(1,'customer','delete'),(1,'customer','edit'),(1,'customer','export'),(1,'customer','linkContact'),(1,'customer','merge'),(1,'customer','order'),(1,'customer','view'),(1,'depositor','activate'),(1,'depositor','browse'),(1,'depositor','check'),(1,'depositor','create'),(1,'depositor','delete'),(1,'depositor','edit'),(1,'depositor','export'),(1,'depositor','forbid'),(1,'depositor','savebalance'),(1,'doc','allLibs'),(1,'doc','browse'),(1,'doc','create'),(1,'doc','createLib'),(1,'doc','delete'),(1,'doc','deleteLib'),(1,'doc','edit'),(1,'doc','editLib'),(1,'doc','index'),(1,'doc','projectLibs'),(1,'doc','showFiles'),(1,'doc','sort'),(1,'doc','view'),(1,'egress','company'),(1,'egress','department'),(1,'file','delete'),(1,'file','download'),(1,'file','edit'),(1,'file','upload'),(1,'forum','admin'),(1,'forum','board'),(1,'forum','index'),(1,'forum','update'),(1,'holiday','create'),(1,'holiday','delete'),(1,'holiday','edit'),(1,'leads','apply'),(1,'leads','assign'),(1,'leads','browse'),(1,'leads','create'),(1,'leads','delete'),(1,'leads','edit'),(1,'leads','ignore'),(1,'leads','setting'),(1,'leads','transform'),(1,'leads','view'),(1,'leave','batchReview'),(1,'leave','browseReview'),(1,'leave','company'),(1,'leave','export'),(1,'leave','review'),(1,'leave','setReviewer'),(1,'lieu','batchReview'),(1,'lieu','browseReview'),(1,'lieu','company'),(1,'lieu','review'),(1,'lieu','setReviewer'),(1,'makeup','batchReview'),(1,'makeup','browseReview'),(1,'makeup','company'),(1,'makeup','export'),(1,'makeup','review'),(1,'makeup','setReviewer'),(1,'my','company'),(1,'order','activate'),(1,'order','assign'),(1,'order','browse'),(1,'order','close'),(1,'order','contact'),(1,'order','create'),(1,'order','delete'),(1,'order','edit'),(1,'order','export'),(1,'order','view'),(1,'overtime','batchReview'),(1,'overtime','browseReview'),(1,'overtime','company'),(1,'overtime','export'),(1,'overtime','review'),(1,'overtime','setReviewer'),(1,'product','browse'),(1,'product','create'),(1,'product','delete'),(1,'product','edit'),(1,'product','view'),(1,'provider','browse'),(1,'provider','contact'),(1,'provider','create'),(1,'provider','delete'),(1,'provider','edit'),(1,'provider','linkContact'),(1,'provider','view'),(1,'refund','browseReview'),(1,'refund','company'),(1,'refund','export'),(1,'refund','reimburse'),(1,'refund','review'),(1,'refund','setCategory'),(1,'refund','setDepositor'),(1,'refund','setRefundBy'),(1,'refund','setReviewer'),(1,'refund','todo'),(1,'report','browse'),(1,'resume','browse'),(1,'resume','create'),(1,'resume','delete'),(1,'resume','edit'),(1,'resume','leave'),(1,'sales','admin'),(1,'sales','browse'),(1,'sales','create'),(1,'sales','delete'),(1,'sales','edit'),(1,'schema','browse'),(1,'schema','create'),(1,'schema','delete'),(1,'schema','edit'),(1,'schema','view'),(1,'setting','customerPool'),(1,'setting','lang'),(1,'setting','modules'),(1,'setting','reset'),(1,'task','deleteAll'),(1,'task','editAll'),(1,'task','viewAll'),(1,'thread','delete'),(1,'thread','deleteFile'),(1,'thread','edit'),(1,'thread','post'),(1,'thread','stick'),(1,'thread','switchStatus'),(1,'thread','transfer'),(1,'thread','view'),(1,'trade','batchCreate'),(1,'trade','batchEdit'),(1,'trade','browse'),(1,'trade','compare'),(1,'trade','create'),(1,'trade','delete'),(1,'trade','detail'),(1,'trade','edit'),(1,'trade','export'),(1,'trade','export2Excel'),(1,'trade','import'),(1,'trade','invest'),(1,'trade','loan'),(1,'trade','report'),(1,'trade','setReportUnit'),(1,'trade','showImport'),(1,'trade','tradeSetting'),(1,'trade','transfer'),(1,'trade','view'),(1,'tree','browse'),(1,'tree','children'),(1,'tree','delete'),(1,'tree','edit'),(1,'tree','merge'),(1,'trip','company'),(1,'trip','department'),(1,'user','active'),(1,'user','admin'),(1,'user','colleague'),(1,'user','create'),(1,'user','delete'),(1,'user','edit'),(1,'user','forbid'),(2,'address','browse'),(2,'announce','browse'),(2,'announce','create'),(2,'announce','edit'),(2,'announce','view'),(2,'apppriv','cash'),(2,'apppriv','crm'),(2,'apppriv','doc'),(2,'apppriv','oa'),(2,'apppriv','proj'),(2,'apppriv','team'),(2,'attend','company'),(2,'attend','export'),(2,'attend','exportStat'),(2,'attend','saveStat'),(2,'attend','stat'),(2,'balance','browse'),(2,'balance','create'),(2,'balance','delete'),(2,'balance','edit'),(2,'blog','create'),(2,'blog','edit'),(2,'blog','index'),(2,'blog','view'),(2,'company','index'),(2,'contact','browse'),(2,'contact','vcard'),(2,'contact','view'),(2,'contract','browse'),(2,'contract','view'),(2,'crm','manageAll'),(2,'customer','browse'),(2,'customer','contact'),(2,'customer','contract'),(2,'customer','order'),(2,'customer','view'),(2,'depositor','activate'),(2,'depositor','browse'),(2,'depositor','check'),(2,'depositor','create'),(2,'depositor','delete'),(2,'depositor','edit'),(2,'depositor','export'),(2,'depositor','forbid'),(2,'depositor','savebalance'),(2,'doc','allLibs'),(2,'doc','browse'),(2,'doc','create'),(2,'doc','createLib'),(2,'doc','edit'),(2,'doc','editLib'),(2,'doc','index'),(2,'doc','projectLibs'),(2,'doc','showFiles'),(2,'doc','sort'),(2,'doc','view'),(2,'file','delete'),(2,'file','download'),(2,'file','edit'),(2,'file','upload'),(2,'forum','admin'),(2,'forum','board'),(2,'forum','index'),(2,'holiday','create'),(2,'holiday','delete'),(2,'holiday','edit'),(2,'leads','browse'),(2,'leads','view'),(2,'leave','company'),(2,'order','browse'),(2,'order','contact'),(2,'order','view'),(2,'product','browse'),(2,'product','view'),(2,'provider','browse'),(2,'provider','contact'),(2,'provider','create'),(2,'provider','delete'),(2,'provider','edit'),(2,'provider','linkContact'),(2,'provider','view'),(2,'refund','browseReview'),(2,'refund','company'),(2,'refund','reimburse'),(2,'refund','review'),(2,'refund','setCategory'),(2,'refund','setDepositor'),(2,'refund','todo'),(2,'resume','browse'),(2,'sales','browse'),(2,'schema','browse'),(2,'schema','create'),(2,'schema','delete'),(2,'schema','edit'),(2,'schema','view'),(2,'setting','lang'),(2,'setting','reset'),(2,'thread','edit'),(2,'thread','post'),(2,'thread','stick'),(2,'thread','switchStatus'),(2,'thread','transfer'),(2,'thread','view'),(2,'trade','batchCreate'),(2,'trade','batchEdit'),(2,'trade','browse'),(2,'trade','compare'),(2,'trade','create'),(2,'trade','delete'),(2,'trade','detail'),(2,'trade','edit'),(2,'trade','export'),(2,'trade','export2Excel'),(2,'trade','import'),(2,'trade','invest'),(2,'trade','loan'),(2,'trade','report'),(2,'trade','setReportUnit'),(2,'trade','showImport'),(2,'trade','tradeSetting'),(2,'trade','transfer'),(2,'trade','view'),(2,'tree','browse'),(2,'tree','children'),(2,'tree','edit'),(2,'tree','merge'),(2,'trip','company'),(2,'user','colleague'),(3,'address','browse'),(3,'address','create'),(3,'address','delete'),(3,'address','edit'),(3,'announce','browse'),(3,'announce','create'),(3,'announce','edit'),(3,'announce','view'),(3,'apppriv','cash'),(3,'apppriv','crm'),(3,'apppriv','doc'),(3,'apppriv','oa'),(3,'apppriv','proj'),(3,'apppriv','team'),(3,'blog','create'),(3,'blog','edit'),(3,'blog','index'),(3,'blog','view'),(3,'company','index'),(3,'contact','browse'),(3,'contact','create'),(3,'contact','delete'),(3,'contact','edit'),(3,'contact','export'),(3,'contact','exportTemplate'),(3,'contact','import'),(3,'contact','showImport'),(3,'contact','vcard'),(3,'contact','view'),(3,'contract','browse'),(3,'contract','cancel'),(3,'contract','create'),(3,'contract','delete'),(3,'contract','deleteDelivery'),(3,'contract','deleteReturn'),(3,'contract','delivery'),(3,'contract','edit'),(3,'contract','editDelivery'),(3,'contract','editReturn'),(3,'contract','export'),(3,'contract','finish'),(3,'contract','receive'),(3,'contract','view'),(3,'crm','manageAll'),(3,'customer','assign'),(3,'customer','browse'),(3,'customer','contact'),(3,'customer','contract'),(3,'customer','create'),(3,'customer','delete'),(3,'customer','edit'),(3,'customer','export'),(3,'customer','linkContact'),(3,'customer','merge'),(3,'customer','order'),(3,'customer','view'),(3,'depositor','browse'),(3,'doc','allLibs'),(3,'doc','browse'),(3,'doc','create'),(3,'doc','createLib'),(3,'doc','edit'),(3,'doc','editLib'),(3,'doc','index'),(3,'doc','projectLibs'),(3,'doc','showFiles'),(3,'doc','sort'),(3,'doc','view'),(3,'egress','department'),(3,'file','delete'),(3,'file','download'),(3,'file','edit'),(3,'file','upload'),(3,'forum','admin'),(3,'forum','board'),(3,'forum','index'),(3,'leads','apply'),(3,'leads','assign'),(3,'leads','browse'),(3,'leads','create'),(3,'leads','delete'),(3,'leads','edit'),(3,'leads','ignore'),(3,'leads','setting'),(3,'leads','transform'),(3,'leads','view'),(3,'leave','batchReview'),(3,'leave','browseReview'),(3,'leave','review'),(3,'lieu','batchReview'),(3,'lieu','browseReview'),(3,'lieu','review'),(3,'makeup','batchReview'),(3,'makeup','browseReview'),(3,'makeup','review'),(3,'order','activate'),(3,'order','assign'),(3,'order','browse'),(3,'order','close'),(3,'order','contact'),(3,'order','create'),(3,'order','delete'),(3,'order','edit'),(3,'order','export'),(3,'order','view'),(3,'overtime','batchReview'),(3,'overtime','browseReview'),(3,'overtime','review'),(3,'product','browse'),(3,'product','create'),(3,'product','delete'),(3,'product','edit'),(3,'product','view'),(3,'refund','browseReview'),(3,'refund','review'),(3,'resume','browse'),(3,'resume','create'),(3,'resume','delete'),(3,'resume','edit'),(3,'resume','leave'),(3,'sales','browse'),(3,'sales','create'),(3,'sales','delete'),(3,'sales','edit'),(3,'setting','customerPool'),(3,'setting','lang'),(3,'setting','reset'),(3,'thread','edit'),(3,'thread','post'),(3,'thread','stick'),(3,'thread','switchStatus'),(3,'thread','transfer'),(3,'thread','view'),(3,'tree','browse'),(3,'tree','children'),(3,'tree','edit'),(3,'trip','department'),(3,'user','colleague'),(4,'address','browse'),(4,'address','create'),(4,'address','edit'),(4,'announce','browse'),(4,'announce','create'),(4,'announce','edit'),(4,'announce','view'),(4,'apppriv','cash'),(4,'apppriv','crm'),(4,'apppriv','doc'),(4,'apppriv','oa'),(4,'apppriv','proj'),(4,'apppriv','team'),(4,'attend','browseReview'),(4,'attend','department'),(4,'attend','export'),(4,'attend','review'),(4,'blog','create'),(4,'blog','edit'),(4,'blog','index'),(4,'blog','view'),(4,'company','index'),(4,'contact','browse'),(4,'contact','create'),(4,'contact','edit'),(4,'contact','export'),(4,'contact','exportTemplate'),(4,'contact','import'),(4,'contact','showImport'),(4,'contact','vcard'),(4,'contact','view'),(4,'contract','browse'),(4,'contract','cancel'),(4,'contract','create'),(4,'contract','delivery'),(4,'contract','edit'),(4,'contract','editDelivery'),(4,'contract','editReturn'),(4,'contract','export'),(4,'contract','finish'),(4,'contract','receive'),(4,'contract','view'),(4,'customer','assign'),(4,'customer','batchAssign'),(4,'customer','browse'),(4,'customer','contact'),(4,'customer','contract'),(4,'customer','create'),(4,'customer','edit'),(4,'customer','export'),(4,'customer','linkContact'),(4,'customer','merge'),(4,'customer','order'),(4,'customer','view'),(4,'depositor','browse'),(4,'doc','allLibs'),(4,'doc','browse'),(4,'doc','create'),(4,'doc','createLib'),(4,'doc','edit'),(4,'doc','editLib'),(4,'doc','index'),(4,'doc','projectLibs'),(4,'doc','showFiles'),(4,'doc','sort'),(4,'doc','view'),(4,'file','delete'),(4,'file','download'),(4,'file','edit'),(4,'file','upload'),(4,'forum','admin'),(4,'forum','board'),(4,'forum','index'),(4,'leads','apply'),(4,'leads','assign'),(4,'leads','browse'),(4,'leads','create'),(4,'leads','edit'),(4,'leads','ignore'),(4,'leads','transform'),(4,'leads','view'),(4,'order','activate'),(4,'order','assign'),(4,'order','browse'),(4,'order','close'),(4,'order','contact'),(4,'order','create'),(4,'order','edit'),(4,'order','export'),(4,'order','view'),(4,'product','browse'),(4,'product','create'),(4,'product','edit'),(4,'product','view'),(4,'resume','browse'),(4,'resume','create'),(4,'resume','edit'),(4,'sales','browse'),(4,'setting','lang'),(4,'setting','reset'),(4,'thread','edit'),(4,'thread','post'),(4,'thread','stick'),(4,'thread','switchStatus'),(4,'thread','transfer'),(4,'thread','view'),(4,'tree','browse'),(4,'tree','children'),(4,'tree','edit'),(4,'user','colleague'),(5,'announce','browse'),(5,'announce','create'),(5,'announce','edit'),(5,'announce','view'),(5,'apppriv','doc'),(5,'apppriv','oa'),(5,'apppriv','proj'),(5,'apppriv','team'),(5,'blog','create'),(5,'blog','edit'),(5,'blog','index'),(5,'blog','view'),(5,'company','index'),(5,'doc','allLibs'),(5,'doc','browse'),(5,'doc','create'),(5,'doc','createLib'),(5,'doc','edit'),(5,'doc','editLib'),(5,'doc','index'),(5,'doc','projectLibs'),(5,'doc','showFiles'),(5,'doc','sort'),(5,'doc','view'),(5,'file','delete'),(5,'file','download'),(5,'file','edit'),(5,'file','upload'),(5,'forum','admin'),(5,'forum','board'),(5,'forum','index'),(5,'thread','edit'),(5,'thread','post'),(5,'thread','stick'),(5,'thread','switchStatus'),(5,'thread','transfer'),(5,'thread','view'),(5,'user','colleague');
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
  PRIMARY KEY (`id`),
  KEY `action` (`action`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_history`
--

LOCK TABLES `sys_history` WRITE;
/*!40000 ALTER TABLE `sys_history` DISABLE KEYS */;
INSERT INTO `sys_history` VALUES (1,53,'realStarted','0000-00-00','2018-05-26',''),(2,53,'consumed','0.0','10',''),(3,53,'left','0.0','8',''),(4,53,'status','wait','doing',''),(5,54,'finishedDate','','2018-05-26 11:35:10',''),(6,54,'left','8.0','0',''),(7,54,'status','doing','done',''),(8,54,'finishedBy','','admin','');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang` (`app`,`lang`,`module`,`section`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_lang`
--

LOCK TABLES `sys_lang` WRITE;
/*!40000 ALTER TABLE `sys_lang` DISABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_schema`
--

LOCK TABLES `sys_schema` WRITE;
/*!40000 ALTER TABLE `sys_schema` DISABLE KEYS */;
INSERT INTO `sys_schema` VALUES (1,'支付宝','','H','K','J','I,O','D','M','',''),(2,'中信银行简版','','C','','E,D','G,H','A','','','');
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
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sso`
--

LOCK TABLES `sys_sso` WRITE;
/*!40000 ALTER TABLE `sys_sso` DISABLE KEYS */;
INSERT INTO `sys_sso` VALUES (41,'5b98af075650313c4535da465534316a',2,'f4e2cf090ccb6439540e4293bf868ea1','2018-05-26 11:27:09'),(44,'5b98af075650313c4535da465534316a',5,'9af32fbfea2680ee3eb1d517abce9dca','2018-05-26 11:27:17'),(40,'5b98af075650313c4535da465534316a',1,'1928b7e69be07777c4780623f7f81373','2018-05-26 11:27:09'),(45,'5b98af075650313c4535da465534316a',6,'f587455dff16711804168f4251de310a','2018-05-26 11:27:17'),(42,'5b98af075650313c4535da465534316a',3,'68807d433d5bd4dc60e0ba6bf8eef487','2018-05-26 11:27:11'),(43,'5b98af075650313c4535da465534316a',4,'02c8290927ad957ca282f73ad3131eb9','2018-05-26 11:27:12'),(39,'8f8090227e9c78c6a95925f7a4a2ccbc',6,'9282f681612c3ed8b489e12c1e08c8ce','2018-05-26 11:24:14'),(46,'8f8090227e9c78c6a95925f7a4a2ccbc',3,'f7cefb0b3ddd404db97d42672a23ab33','2018-05-26 11:29:29'),(47,'8f8090227e9c78c6a95925f7a4a2ccbc',4,'011e18c671d6a3085e9b2534fcc8d4e7','2018-05-26 11:32:35'),(48,'8f8090227e9c78c6a95925f7a4a2ccbc',5,'81dcf56dd0093d806a0816722eb7bc18','2018-05-26 11:36:24'),(49,'8f8090227e9c78c6a95925f7a4a2ccbc',2,'8d82fbff13d91ded20bdabd22ad8a7bc','2018-05-26 11:37:13'),(50,'8f8090227e9c78c6a95925f7a4a2ccbc',1,'1deeee6dc2cdb9439593816177c0ba20','2018-05-26 11:38:56');
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
INSERT INTO `sys_task` VALUES (1,1,0,0,0,'1','',1,0.0,10.0,0.0,'2018-05-26','done',0,'','13213',0,'admin','2018-05-26 11:33:36','admin','2018-05-26 11:35:14','0000-00-00','2018-05-26','admin','2018-05-26 11:35:10','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','admin','2018-05-26 11:35:14','0',0);
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
  PRIMARY KEY (`type`,`id`,`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_team`
--

LOCK TABLES `sys_team` WRITE;
/*!40000 ALTER TABLE `sys_team` DISABLE KEYS */;
INSERT INTO `sys_team` VALUES ('project',1,'admin','manager','2018-05-26',0,0.0,0.0,0.0,0.0,0);
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`),
  KEY `admin` (`admin`),
  KEY `accountPassword` (`account`,`password`),
  KEY `dept` (`dept`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_user`
--

LOCK TABLES `sys_user` WRITE;
/*!40000 ALTER TABLE `sys_user` DISABLE KEYS */;
INSERT INTO `sys_user` VALUES (1,0,'admin','86f3059b228c8acf99e69734b6bb32cc','admin','','','super','','0000-00-00','u','','','','','','','','','','','',46,'::1','2018-05-26 11:22:38','2018-05-26 22:29:08',0,'2018-05-25 21:32:35','0000-00-00 00:00:00','0','online'),(2,0,'demo','e36a2dfc0a35fa5b3032aadc489efdd9','张三','servicemgr','','no','','0000-00-00','m','6415@qq.com','','','','','','','','','','',1,'127.0.0.1','2018-05-26 11:20:53','2018-05-26 21:44:05',0,'2018-05-26 11:20:01','0000-00-00 00:00:00','0','offline');
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
  UNIQUE KEY `account` (`account`,`group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_usergroup`
--

LOCK TABLES `sys_usergroup` WRITE;
/*!40000 ALTER TABLE `sys_usergroup` DISABLE KEYS */;
INSERT INTO `sys_usergroup` VALUES ('demo',4);
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

-- Dump completed on 2018-05-28  8:44:48
