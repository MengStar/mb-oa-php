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

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (3,'admin',0),(4,'demo',0);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_chat`
--

LOCK TABLES `im_chat` WRITE;
/*!40000 ALTER TABLE `im_chat` DISABLE KEYS */;
INSERT INTO `im_chat` VALUES (1,'ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','system group','system','','',0,'0','system','2018-05-25 21:34:42','','0000-00-00 00:00:00','2018-05-25 22:24:50','0000-00-00 00:00:00',0);
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
  `account_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mgid` (`gid`),
  KEY `mcgid` (`cgid`),
  KEY `muser` (`user`),
  KEY `mtype` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `im_message`
--

LOCK TABLES `im_message` WRITE;
/*!40000 ALTER TABLE `im_message` DISABLE KEYS */;
INSERT INTO `im_message` VALUES (1,'732ad92d-36a5-4b26-b55c-e776f969bbb9','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:18:41',1,'normal','1','text','',0),(2,'f70d4949-a1bb-44a6-a423-a950bb1b9a65','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:19:09',2,'normal','{\"date\":\"2018-05-25T14:19:09.194Z\",\"name\":\"Spring Security Reference.webarchive\",\"size\":1521328,\"send\":true,\"type\":\"application/x-webarchive\",\"gid\":\"f70d4949-a1bb-44a6-a423-a950bb1b9a65\",\"cgid\":\"ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\",\"senderId\":1,\"time\":1527257949,\"id\":1}','file','',0),(3,'514fce66-ff86-e07e-352b-633202bbb8f7','#notification','0','2018-05-25 22:21:41',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}',0),(4,'912097be-4d2a-45a0-9c57-a40beb67ab87','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:22:40',3,'normal','{\"date\":\"2018-05-25T14:22:40.165Z\",\"name\":\"go-sqlite3-master.zip\",\"size\":2139927,\"send\":true,\"type\":\"application/zip\",\"gid\":\"912097be-4d2a-45a0-9c57-a40beb67ab87\",\"cgid\":\"ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\",\"senderId\":1,\"time\":1527258160,\"id\":2}','file','',0),(5,'98f27540-83ab-4ab9-be61-95b69cf05a48','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:24:14',4,'normal','{\"date\":\"2018-05-25T14:24:13.994Z\",\"name\":\"download.zip\",\"size\":2139927,\"send\":true,\"type\":\"application/zip\",\"gid\":\"98f27540-83ab-4ab9-be61-95b69cf05a48\",\"cgid\":\"ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\",\"senderId\":1,\"time\":1527258254,\"id\":3}','file','',0),(6,'fa8f65bd-77ac-48f0-8d8a-9cbb411f2a6f','ce1ad6c4-ab30-1bc9-20d1-4c6d09270116','1','2018-05-25 22:24:49',6,'normal','{\"date\":\"2018-05-25T14:24:49.134Z\",\"name\":\"idea激活码.txt\",\"size\":2981,\"send\":true,\"type\":\"text/plain\",\"gid\":\"fa8f65bd-77ac-48f0-8d8a-9cbb411f2a6f\",\"cgid\":\"ce1ad6c4-ab30-1bc9-20d1-4c6d09270116\",\"senderId\":1,\"time\":1527258289,\"id\":4}','file','',0),(7,'8becbb2c-7861-7b8d-8ed5-07b64ab41be9','#notification','0','2018-05-26 09:51:13',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}',0),(8,'ec292019-f1ed-2f6b-0ac2-4c47e27568f9','#notification','0','2018-05-28 09:21:46',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}',0),(9,'faa44b05-0b3e-91f9-2133-cad9676c0dd5','#notification','0','2018-05-28 12:11:01',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}',0),(10,'ee3302bf-aba7-0d12-081f-9852beaf2ad1','#notification','0','2018-05-28 20:01:32',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}',0),(11,'f9263add-613c-03d2-b084-9fd53aa4f8de','#notification','0','2018-05-30 09:51:25',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/azure.com:8500\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/azure.com:8500\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}',0),(12,'fd6794be-b4db-8c2c-1c88-14ad285ab602','#notification','0','2018-05-31 00:01:25',0,'notify','','text','{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/azure.com:8500\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/azure.com:8500\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}',0);
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
INSERT INTO `im_messagestatus` VALUES (1,'732ad92d-36a5-4b26-b55c-e776f969bbb9','sent',0),(1,'f70d4949-a1bb-44a6-a423-a950bb1b9a65','sent',0),(1,'514fce66-ff86-e07e-352b-633202bbb8f7','sent',0),(1,'912097be-4d2a-45a0-9c57-a40beb67ab87','sent',0),(1,'98f27540-83ab-4ab9-be61-95b69cf05a48','sent',0),(1,'fa8f65bd-77ac-48f0-8d8a-9cbb411f2a6f','sent',0),(1,'8becbb2c-7861-7b8d-8ed5-07b64ab41be9','waiting',0),(1,'ec292019-f1ed-2f6b-0ac2-4c47e27568f9','waiting',0),(1,'faa44b05-0b3e-91f9-2133-cad9676c0dd5','waiting',0),(1,'ee3302bf-aba7-0d12-081f-9852beaf2ad1','waiting',0),(1,'f9263add-613c-03d2-b084-9fd53aa4f8de','waiting',0),(1,'fd6794be-b4db-8c2c-1c88-14ad285ab602','waiting',0);
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oa_attend`
--

LOCK TABLES `oa_attend` WRITE;
/*!40000 ALTER TABLE `oa_attend` DISABLE KEYS */;
INSERT INTO `oa_attend` VALUES (1,'admin','2018-05-25','22:18:30','00:00:00','both','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(2,'admin','2018-05-26','09:11:09','00:00:00','rest','::1','desktop','xuanxuan','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(3,'demo','2018-05-26','11:20:54','00:00:00','rest','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(4,'admin','2018-05-28','09:12:40','00:00:00','both','127.0.0.1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(5,'demo','2018-05-28','12:04:29','00:00:00','both','::1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(6,'admin','2018-05-30','00:10:49','00:00:00','early','10.255.0.2','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(7,'admin','2018-05-31','16:32:03','00:00:00','both','::1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0),(8,'demo','2018-05-31','18:16:07','00:00:00','both','::1','desktop','desktop','00:00:00','00:00:00','','','','','0000-00-00 00:00:00',0);
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
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_action`
--

LOCK TABLES `sys_action` WRITE;
/*!40000 ALTER TABLE `sys_action` DISABLE KEYS */;
INSERT INTO `sys_action` VALUES (1,0,0,'user',1,'admin','loginxuanxuan','2018-05-25 22:18:31','','xuanxuan','0','',0),(2,0,0,'user',1,'admin','logoutxuanxuan','2018-05-25 22:21:31','','xuanxuan','0','',0),(56,0,0,'user',1,'admin','logout','2018-05-28 12:00:27','','','0','',0),(57,0,0,'user',1,'admin','login','2018-05-28 12:01:59','','','0','',0),(58,0,0,'user',1,'admin','logout','2018-05-28 12:03:16','','','0','',0),(59,0,0,'user',2,'demo','login','2018-05-28 12:04:29','','','0','',0),(60,0,0,'user',2,'demo','logout','2018-05-28 12:18:04','','','0','',0),(61,0,0,'user',1,'admin','login','2018-05-28 12:23:56','','','0','',0),(62,0,0,'user',1,'admin','logout','2018-05-28 12:24:24','','','0','',0),(63,0,0,'user',1,'admin','login','2018-05-28 12:24:28','','','0','',0),(64,0,0,'user',1,'admin','logout','2018-05-28 12:26:31','','','0','',0),(65,0,0,'user',1,'admin','login','2018-05-28 12:26:36','','','0','',0),(66,0,0,'user',1,'admin','logout','2018-05-28 12:29:13','','','0','',0),(67,0,0,'user',1,'admin','login','2018-05-28 12:29:17','','','0','',0),(68,0,0,'user',1,'admin','login','2018-05-30 00:10:49','','','0','',0),(69,0,0,'user',1,'admin','login','2018-05-30 09:48:24','','','0','',0),(70,0,0,'task',1,'admin','edited','2018-05-30 09:49:00','','','0','',0),(71,0,0,'task',1,'admin','edited','2018-05-30 09:49:23','','','0','',0),(72,0,0,'task',1,'admin','edited','2018-05-30 09:51:34','上传了附件 QQ20180530-095106','','0','',0),(73,0,0,'user',1,'admin','login','2018-05-31 16:32:03','','','0','',0),(74,0,0,'user',1,'admin','logout','2018-05-31 16:36:01','','','0','',0),(75,0,0,'user',1,'admin','login','2018-05-31 16:36:05','','','0','',0),(76,0,0,'user',1,'admin','logout','2018-05-31 16:36:41','','','0','',0),(77,0,0,'user',1,'admin','login','2018-05-31 16:36:44','','','0','',0),(78,0,0,'user',1,'admin','logout','2018-05-31 16:37:05','','','0','',0),(79,0,0,'user',1,'admin','login','2018-05-31 16:37:18','','','0','',0),(80,0,0,'user',1,'admin','logout','2018-05-31 16:37:45','','','0','',0),(81,0,0,'user',1,'admin','login','2018-05-31 16:37:49','','','0','',0),(82,0,0,'user',1,'admin','logout','2018-05-31 16:39:03','','','0','',0),(83,0,0,'user',1,'admin','login','2018-05-31 16:49:34','','','0','',0),(84,0,0,'user',1,'admin','logout','2018-05-31 16:49:56','','','0','',0),(85,0,0,'user',1,'admin','login','2018-05-31 16:52:32','','','0','',0),(86,0,0,'user',1,'admin','logout','2018-05-31 17:05:50','','','0','',0),(87,0,0,'user',1,'admin','login','2018-05-31 17:12:22','','','0','',0),(88,0,0,'user',1,'admin','logout','2018-05-31 17:13:23','','','0','',0),(89,0,0,'user',1,'admin','login','2018-05-31 17:16:56','','','0','',0),(90,0,0,'user',1,'admin','logout','2018-05-31 17:21:43','','','0','',0),(91,0,0,'user',1,'admin','login','2018-05-31 17:22:03','','','0','',0),(92,0,0,'user',1,'admin','logout','2018-05-31 17:24:32','','','0','',0),(93,0,0,'user',1,'admin','login','2018-05-31 17:24:45','','','0','',0),(94,0,0,'user',1,'admin','logout','2018-05-31 17:27:49','','','0','',0),(95,0,0,'user',1,'admin','login','2018-05-31 17:28:23','','','0','',0),(96,0,0,'user',1,'admin','logout','2018-05-31 17:47:30','','','0','',0),(97,0,0,'user',1,'admin','login','2018-05-31 17:48:08','','','0','',0),(98,0,0,'user',1,'admin','logout','2018-05-31 17:50:31','','','0','',0),(99,0,0,'user',1,'admin','login','2018-05-31 17:56:14','','','0','',0),(100,0,0,'user',1,'admin','logout','2018-05-31 17:56:33','','','0','',0),(101,0,0,'user',1,'admin','login','2018-05-31 17:57:38','','','0','',0),(102,0,0,'user',1,'admin','logout','2018-05-31 18:12:31','','','0','',0),(103,0,0,'user',1,'admin','login','2018-05-31 18:12:37','','','0','',0),(104,0,0,'user',1,'admin','logout','2018-05-31 18:13:21','','','0','',0),(105,0,0,'user',2,'demo','login','2018-05-31 18:16:07','','','0','',0),(106,0,0,'user',2,'demo','logout','2018-05-31 18:16:35','','','0','',0),(107,0,0,'user',2,'demo','login','2018-05-31 18:30:41','','','0','',0),(108,0,0,'user',2,'demo','logout','2018-05-31 18:32:58','','','0','',0),(109,0,0,'user',1,'admin','login','2018-05-31 18:33:13','','','0','',0);
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
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_block`
--

LOCK TABLES `sys_block` WRITE;
/*!40000 ALTER TABLE `sys_block` DISABLE KEYS */;
INSERT INTO `sys_block` VALUES (1,'admin','sys','日历','oa','attend','',1,6,0,0,0),(2,'admin','sys','最新动态','','dynamic','',2,6,0,0,0),(3,'admin','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0,0),(4,'admin','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0,0),(5,'admin','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0,0),(6,'admin','sys','付款账户','cash','depositor','[]',6,4,0,0,0),(7,'admin','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0,0),(8,'admin','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0,0),(9,'admin','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,0,0,0),(10,'admin','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0,0),(11,'admin','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0,0),(12,'admin','oa','日历','oa','attend','{}',1,6,250,0,0),(13,'admin','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0,0),(14,'admin','cash','付款账户','cash','depositor','[]',1,4,0,0,0),(43,'admin','cash','账目','cash','trade','{\"color\":\"default\",\"num\":\"15\",\"orderBy\":\"id_desc\",\"type\":\"all\"}',2,4,0,0,0),(16,'admin','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0,0),(17,'admin','team','最新博客','team','blog','{\"num\":15}',1,4,0,0,0),(18,'admin','team','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',2,4,0,0,0),(19,'admin','team','置顶帖子','team','thread','{\"num\":15,\"type\":\"stick\"}',3,4,0,0,0),(20,'admin','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0,0),(21,'admin','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0,0),(22,'demo','sys','日历','oa','attend','',1,6,0,0,0),(23,'demo','sys','最新动态','','dynamic','',2,6,0,0,0),(24,'demo','sys','系统公告','oa','announce','{\"num\":15}',3,4,0,0,0),(25,'demo','sys','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',4,4,0,0,0),(26,'demo','sys','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',5,4,0,0,0),(27,'demo','sys','付款账户','cash','depositor','[]',6,4,0,0,0),(28,'demo','sys','最新博客','team','blog','{\"num\":15}',7,4,0,0,0),(29,'demo','sys','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',8,4,0,0,0),(30,'demo','crm','我的订单','crm','order','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"createdBy\",\"status\":[]}',1,4,0,0,0),(31,'demo','crm','我的合同','crm','contract','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"returnedBy\",\"status\":[]}',2,4,0,0,0),(32,'demo','crm','本周联系','crm','customer','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"thisweek\"}',3,4,0,0,0),(33,'demo','oa','日历','oa','attend','',1,6,0,0,0),(34,'demo','oa','系统公告','oa','announce','{\"num\":15}',2,4,0,0,0),(35,'demo','proj','指派给我的任务','proj','task','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":[],\"type\":\"assignedTo\"}',3,4,0,0,0),(36,'demo','proj','项目列表','proj','project','{\"num\":15,\"orderBy\":\"id_desc\",\"status\":\"doing\"}',4,4,0,0,0),(37,'demo','cash','付款账户','cash','depositor','[]',1,4,0,0,0),(38,'demo','cash','账目','cash','trade','{\"num\":15,\"orderBy\":\"id_desc\"}',2,4,0,0,0),(39,'demo','cash','供应商','cash','provider','{\"num\":15,\"orderBy\":\"id_desc\"}',3,4,0,0,0),(40,'demo','team','最新博客','team','blog','{\"num\":15}',1,4,0,0,0),(41,'demo','team','最新帖子','team','thread','{\"num\":15,\"type\":\"new\"}',2,4,0,0,0),(42,'demo','team','置顶帖子','team','thread','{\"num\":15,\"type\":\"stick\"}',3,4,0,0,0);
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
) ENGINE=MyISAM AUTO_INCREMENT=820032 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_category`
--

LOCK TABLES `sys_category` WRITE;
/*!40000 ALTER TABLE `sys_category` DISABLE KEYS */;
INSERT INTO `sys_category` VALUES (1,'主营业务收入','','','',0,0,',1,',1,1,'in','0','',0,0,'','2018-05-28 12:36:32',0,0,'','','0','1',0),(2,'非主营业务收入','','','',0,0,',2,',1,2,'in','0','',0,0,'','2018-05-28 12:36:35',0,0,'','','0','2',0),(3,'主营业务成本','','','',0,0,',3,',1,3,'out','0','',0,0,'','2018-05-28 12:36:36',0,0,'','','0','3',0),(4,'非主营业务成本','','','',0,0,',4,',1,4,'out','0','',0,0,'','2018-05-28 12:36:37',0,0,'','','0','4',0),(5,'理财盈利','','','',0,2,',2,5,',2,5,'in','0','',0,0,'','2018-05-28 12:36:37',0,0,'','','0','5',0),(6,'理财亏损','','','',0,4,',4,6,',2,6,'out','0','',0,0,'','2018-05-28 12:36:38',0,0,'','','0','6',0),(7,'手续费','','','',0,4,',4,7,',2,7,'out','0','',0,0,'','2018-05-28 12:36:39',0,0,'','','0','7',0),(8,'借贷利息','','','',0,4,',4,8,',2,8,'out','0','',0,0,'','2018-05-28 12:36:39',0,0,'','','0','8',0);
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_config`
--

LOCK TABLES `sys_config` WRITE;
/*!40000 ALTER TABLE `sys_config` DISABLE KEYS */;
INSERT INTO `sys_config` VALUES (1,'system','sys','xuanxuan','global','version','1.5.0',0),(22,'system','sys','xuanxuan','','key','wap979sn5y1m8kqa5tkras51s5lfgkw9',0),(3,'system','sys','common','global','version','4.6.3',0),(4,'admin','sys','common','','blockInited','1',0),(5,'system','sys','cron','run','status','running',0),(6,'admin','crm','common','','blockInited','1',0),(8,'admin','oa','common','','blockInited','1',0),(9,'admin','cash','common','','blockInited','1',0),(10,'admin','team','common','','blockInited','1',0),(11,'admin','proj','common','','blockInited','1',0),(21,'system','oa','attend','readers','2018-05-28','admin',0),(13,'demo','sys','common','','blockInited','1',0),(15,'system','sys','group','','unUpdatedAccounts','',0),(16,'demo','crm','common','','blockInited','1',0),(17,'demo','oa','common','','blockInited','1',0),(18,'demo','proj','common','','blockInited','1',0),(19,'demo','cash','common','','blockInited','1',0),(20,'demo','team','common','','blockInited','1',0);
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
INSERT INTO `sys_cron` VALUES (1,'*','*','*','*','*','','监控定时任务','ranzhi',1,'normal','2018-05-31 18:53:25',0),(2,'1','1','*','*','*','appName=sys&moduleName=backup&methodName=backup&reload=0','定时备份任务','ranzhi',1,'normal','2018-05-31 01:01:25',0),(3,'1','1','*','*','*','appName=sys&moduleName=backup&methodName=batchdelete&saveDays=30','删除30天前的备份','ranzhi',1,'normal','2018-05-31 01:01:25',0),(4,'1','7','*','*','*','appName=sys&moduleName=report&methodName=remind','每日提醒','ranzhi',1,'normal','2018-05-31 07:01:25',0),(5,'*/1','*','*','*','*','appName=sys&moduleName=queue&methodName=getqueue','出队列','ranzhi',0,'normal','2018-05-31 18:53:25',0),(6,'*/10','*','*','*','*','appName=sys&moduleName=queue&methodName=additional','检查是否添加待办','ranzhi',0,'normal','2018-05-31 18:51:25',0);
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_entry`
--

LOCK TABLES `sys_entry` WRITE;
/*!40000 ALTER TABLE `sys_entry` DISABLE KEYS */;
INSERT INTO `sys_entry` VALUES (1,'客户管理','客户','crm',1,1,'iframe','epet8b8ae1g89rxzquf4ubv37ul5tite','*','theme/default/images/ips/app-crm.png','../crm','','','simple','max','default',1,10,'0',0,0),(2,'日常办公','办公','oa',1,1,'iframe','1a673c4c3c85fadcf0333e0a4596d220','*','theme/default/images/ips/app-oa.png','../oa','','','simple','max','default',1,20,'0',0,0),(3,'项目','项目','proj',1,1,'iframe','a910d9d1dd03c9dd99cecb3ca31ea600','*','theme/default/images/ips/app-proj.png','../proj','','','simple','max','default',1,30,'0',0,0),(4,'文档','文档','doc',1,1,'iframe','76ff605479df34f1d239730efa68d562','*','theme/default/images/ips/app-doc.png','../doc','','','simple','max','default',1,40,'0',0,0),(5,'现金记账','记账','cash',1,1,'iframe','438d85f2c2b04372662c63ebfb1c4c2f','*','theme/default/images/ips/app-cash.png','../cash','','','simple','max','default',1,50,'0',0,0),(6,'团队','团队','team',1,1,'iframe','6c46d9fe76a1afa1cd61f946f1072d1e','*','theme/default/images/ips/app-team.png','../team','','','simple','max','default',1,60,'0',0,0);
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
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
INSERT INTO `sys_grouppriv` VALUES (1,'address','browse',0),(1,'address','create',0),(1,'address','delete',0),(1,'address','edit',0),(1,'announce','browse',0),(1,'announce','create',0),(1,'announce','delete',0),(1,'announce','edit',0),(1,'announce','view',0),(1,'apppriv','cash',0),(1,'apppriv','crm',0),(1,'apppriv','doc',0),(1,'apppriv','oa',0),(1,'apppriv','proj',0),(1,'apppriv','superadmin',0),(1,'apppriv','team',0),(1,'attend','browseReview',0),(1,'attend','company',0),(1,'attend','department',0),(1,'attend','detail',0),(1,'attend','export',0),(1,'attend','exportDetail',0),(1,'attend','exportStat',0),(1,'attend','personalSettings',0),(1,'attend','review',0),(1,'attend','saveStat',0),(1,'attend','setManager',0),(1,'attend','settings',0),(1,'attend','stat',0),(1,'balance','browse',0),(1,'balance','create',0),(1,'balance','delete',0),(1,'balance','edit',0),(1,'blog','create',0),(1,'blog','delete',0),(1,'blog','edit',0),(1,'blog','index',0),(1,'blog','view',0),(1,'company','index',0),(1,'contact','browse',0),(1,'contact','create',0),(1,'contact','delete',0),(1,'contact','edit',0),(1,'contact','export',0),(1,'contact','exportTemplate',0),(1,'contact','import',0),(1,'contact','showImport',0),(1,'contact','vcard',0),(1,'contact','view',0),(1,'contract','browse',0),(1,'contract','cancel',0),(1,'contract','create',0),(1,'contract','delete',0),(1,'contract','deleteDelivery',0),(1,'contract','deleteReturn',0),(1,'contract','delivery',0),(1,'contract','edit',0),(1,'contract','editDelivery',0),(1,'contract','editReturn',0),(1,'contract','export',0),(1,'contract','finish',0),(1,'contract','receive',0),(1,'contract','view',0),(1,'crm','manageAll',0),(1,'customer','assign',0),(1,'customer','batchAssign',0),(1,'customer','browse',0),(1,'customer','contact',0),(1,'customer','contract',0),(1,'customer','create',0),(1,'customer','delete',0),(1,'customer','edit',0),(1,'customer','export',0),(1,'customer','linkContact',0),(1,'customer','merge',0),(1,'customer','order',0),(1,'customer','view',0),(1,'depositor','activate',0),(1,'depositor','browse',0),(1,'depositor','check',0),(1,'depositor','create',0),(1,'depositor','delete',0),(1,'depositor','edit',0),(1,'depositor','export',0),(1,'depositor','forbid',0),(1,'depositor','savebalance',0),(1,'doc','allLibs',0),(1,'doc','browse',0),(1,'doc','create',0),(1,'doc','createLib',0),(1,'doc','delete',0),(1,'doc','deleteLib',0),(1,'doc','edit',0),(1,'doc','editLib',0),(1,'doc','index',0),(1,'doc','projectLibs',0),(1,'doc','showFiles',0),(1,'doc','sort',0),(1,'doc','view',0),(1,'egress','company',0),(1,'egress','department',0),(1,'file','delete',0),(1,'file','download',0),(1,'file','edit',0),(1,'file','upload',0),(1,'forum','admin',0),(1,'forum','board',0),(1,'forum','index',0),(1,'forum','update',0),(1,'holiday','create',0),(1,'holiday','delete',0),(1,'holiday','edit',0),(1,'leads','apply',0),(1,'leads','assign',0),(1,'leads','browse',0),(1,'leads','create',0),(1,'leads','delete',0),(1,'leads','edit',0),(1,'leads','ignore',0),(1,'leads','setting',0),(1,'leads','transform',0),(1,'leads','view',0),(1,'leave','batchReview',0),(1,'leave','browseReview',0),(1,'leave','company',0),(1,'leave','export',0),(1,'leave','review',0),(1,'leave','setReviewer',0),(1,'lieu','batchReview',0),(1,'lieu','browseReview',0),(1,'lieu','company',0),(1,'lieu','review',0),(1,'lieu','setReviewer',0),(1,'makeup','batchReview',0),(1,'makeup','browseReview',0),(1,'makeup','company',0),(1,'makeup','export',0),(1,'makeup','review',0),(1,'makeup','setReviewer',0),(1,'my','company',0),(1,'order','activate',0),(1,'order','assign',0),(1,'order','browse',0),(1,'order','close',0),(1,'order','contact',0),(1,'order','create',0),(1,'order','delete',0),(1,'order','edit',0),(1,'order','export',0),(1,'order','view',0),(1,'overtime','batchReview',0),(1,'overtime','browseReview',0),(1,'overtime','company',0),(1,'overtime','export',0),(1,'overtime','review',0),(1,'overtime','setReviewer',0),(1,'product','browse',0),(1,'product','create',0),(1,'product','delete',0),(1,'product','edit',0),(1,'product','view',0),(1,'provider','browse',0),(1,'provider','contact',0),(1,'provider','create',0),(1,'provider','delete',0),(1,'provider','edit',0),(1,'provider','linkContact',0),(1,'provider','view',0),(1,'refund','browseReview',0),(1,'refund','company',0),(1,'refund','export',0),(1,'refund','reimburse',0),(1,'refund','review',0),(1,'refund','setCategory',0),(1,'refund','setDepositor',0),(1,'refund','setRefundBy',0),(1,'refund','setReviewer',0),(1,'refund','todo',0),(1,'report','browse',0),(1,'resume','browse',0),(1,'resume','create',0),(1,'resume','delete',0),(1,'resume','edit',0),(1,'resume','leave',0),(1,'sales','admin',0),(1,'sales','browse',0),(1,'sales','create',0),(1,'sales','delete',0),(1,'sales','edit',0),(1,'schema','browse',0),(1,'schema','create',0),(1,'schema','delete',0),(1,'schema','edit',0),(1,'schema','view',0),(1,'setting','customerPool',0),(1,'setting','lang',0),(1,'setting','modules',0),(1,'setting','reset',0),(1,'task','deleteAll',0),(1,'task','editAll',0),(1,'task','viewAll',0),(1,'thread','delete',0),(1,'thread','deleteFile',0),(1,'thread','edit',0),(1,'thread','post',0),(1,'thread','stick',0),(1,'thread','switchStatus',0),(1,'thread','transfer',0),(1,'thread','view',0),(1,'trade','batchCreate',0),(1,'trade','batchEdit',0),(1,'trade','browse',0),(1,'trade','compare',0),(1,'trade','create',0),(1,'trade','delete',0),(1,'trade','detail',0),(1,'trade','edit',0),(1,'trade','export',0),(1,'trade','export2Excel',0),(1,'trade','import',0),(1,'trade','invest',0),(1,'trade','loan',0),(1,'trade','report',0),(1,'trade','setReportUnit',0),(1,'trade','showImport',0),(1,'trade','tradeSetting',0),(1,'trade','transfer',0),(1,'trade','view',0),(1,'tree','browse',0),(1,'tree','children',0),(1,'tree','delete',0),(1,'tree','edit',0),(1,'tree','merge',0),(1,'trip','company',0),(1,'trip','department',0),(1,'user','active',0),(1,'user','admin',0),(1,'user','colleague',0),(1,'user','create',0),(1,'user','delete',0),(1,'user','edit',0),(1,'user','forbid',0),(2,'address','browse',0),(2,'announce','browse',0),(2,'announce','create',0),(2,'announce','edit',0),(2,'announce','view',0),(2,'apppriv','cash',0),(2,'apppriv','crm',0),(2,'apppriv','doc',0),(2,'apppriv','oa',0),(2,'apppriv','proj',0),(2,'apppriv','team',0),(2,'attend','company',0),(2,'attend','export',0),(2,'attend','exportStat',0),(2,'attend','saveStat',0),(2,'attend','stat',0),(2,'balance','browse',0),(2,'balance','create',0),(2,'balance','delete',0),(2,'balance','edit',0),(2,'blog','create',0),(2,'blog','edit',0),(2,'blog','index',0),(2,'blog','view',0),(2,'company','index',0),(2,'contact','browse',0),(2,'contact','vcard',0),(2,'contact','view',0),(2,'contract','browse',0),(2,'contract','view',0),(2,'crm','manageAll',0),(2,'customer','browse',0),(2,'customer','contact',0),(2,'customer','contract',0),(2,'customer','order',0),(2,'customer','view',0),(2,'depositor','activate',0),(2,'depositor','browse',0),(2,'depositor','check',0),(2,'depositor','create',0),(2,'depositor','delete',0),(2,'depositor','edit',0),(2,'depositor','export',0),(2,'depositor','forbid',0),(2,'depositor','savebalance',0),(2,'doc','allLibs',0),(2,'doc','browse',0),(2,'doc','create',0),(2,'doc','createLib',0),(2,'doc','edit',0),(2,'doc','editLib',0),(2,'doc','index',0),(2,'doc','projectLibs',0),(2,'doc','showFiles',0),(2,'doc','sort',0),(2,'doc','view',0),(2,'file','delete',0),(2,'file','download',0),(2,'file','edit',0),(2,'file','upload',0),(2,'forum','admin',0),(2,'forum','board',0),(2,'forum','index',0),(2,'holiday','create',0),(2,'holiday','delete',0),(2,'holiday','edit',0),(2,'leads','browse',0),(2,'leads','view',0),(2,'leave','company',0),(2,'order','browse',0),(2,'order','contact',0),(2,'order','view',0),(2,'product','browse',0),(2,'product','view',0),(2,'provider','browse',0),(2,'provider','contact',0),(2,'provider','create',0),(2,'provider','delete',0),(2,'provider','edit',0),(2,'provider','linkContact',0),(2,'provider','view',0),(2,'refund','browseReview',0),(2,'refund','company',0),(2,'refund','reimburse',0),(2,'refund','review',0),(2,'refund','setCategory',0),(2,'refund','setDepositor',0),(2,'refund','todo',0),(2,'resume','browse',0),(2,'sales','browse',0),(2,'schema','browse',0),(2,'schema','create',0),(2,'schema','delete',0),(2,'schema','edit',0),(2,'schema','view',0),(2,'setting','lang',0),(2,'setting','reset',0),(2,'thread','edit',0),(2,'thread','post',0),(2,'thread','stick',0),(2,'thread','switchStatus',0),(2,'thread','transfer',0),(2,'thread','view',0),(2,'trade','batchCreate',0),(2,'trade','batchEdit',0),(2,'trade','browse',0),(2,'trade','compare',0),(2,'trade','create',0),(2,'trade','delete',0),(2,'trade','detail',0),(2,'trade','edit',0),(2,'trade','export',0),(2,'trade','export2Excel',0),(2,'trade','import',0),(2,'trade','invest',0),(2,'trade','loan',0),(2,'trade','report',0),(2,'trade','setReportUnit',0),(2,'trade','showImport',0),(2,'trade','tradeSetting',0),(2,'trade','transfer',0),(2,'trade','view',0),(2,'tree','browse',0),(2,'tree','children',0),(2,'tree','edit',0),(2,'tree','merge',0),(2,'trip','company',0),(2,'user','colleague',0),(3,'address','browse',0),(3,'address','create',0),(3,'address','delete',0),(3,'address','edit',0),(3,'announce','browse',0),(3,'announce','create',0),(3,'announce','edit',0),(3,'announce','view',0),(3,'apppriv','cash',0),(3,'apppriv','crm',0),(3,'apppriv','doc',0),(3,'apppriv','oa',0),(3,'apppriv','proj',0),(3,'apppriv','team',0),(3,'blog','create',0),(3,'blog','edit',0),(3,'blog','index',0),(3,'blog','view',0),(3,'company','index',0),(3,'contact','browse',0),(3,'contact','create',0),(3,'contact','delete',0),(3,'contact','edit',0),(3,'contact','export',0),(3,'contact','exportTemplate',0),(3,'contact','import',0),(3,'contact','showImport',0),(3,'contact','vcard',0),(3,'contact','view',0),(3,'contract','browse',0),(3,'contract','cancel',0),(3,'contract','create',0),(3,'contract','delete',0),(3,'contract','deleteDelivery',0),(3,'contract','deleteReturn',0),(3,'contract','delivery',0),(3,'contract','edit',0),(3,'contract','editDelivery',0),(3,'contract','editReturn',0),(3,'contract','export',0),(3,'contract','finish',0),(3,'contract','receive',0),(3,'contract','view',0),(3,'crm','manageAll',0),(3,'customer','assign',0),(3,'customer','browse',0),(3,'customer','contact',0),(3,'customer','contract',0),(3,'customer','create',0),(3,'customer','delete',0),(3,'customer','edit',0),(3,'customer','export',0),(3,'customer','linkContact',0),(3,'customer','merge',0),(3,'customer','order',0),(3,'customer','view',0),(3,'depositor','browse',0),(3,'doc','allLibs',0),(3,'doc','browse',0),(3,'doc','create',0),(3,'doc','createLib',0),(3,'doc','edit',0),(3,'doc','editLib',0),(3,'doc','index',0),(3,'doc','projectLibs',0),(3,'doc','showFiles',0),(3,'doc','sort',0),(3,'doc','view',0),(3,'egress','department',0),(3,'file','delete',0),(3,'file','download',0),(3,'file','edit',0),(3,'file','upload',0),(3,'forum','admin',0),(3,'forum','board',0),(3,'forum','index',0),(3,'leads','apply',0),(3,'leads','assign',0),(3,'leads','browse',0),(3,'leads','create',0),(3,'leads','delete',0),(3,'leads','edit',0),(3,'leads','ignore',0),(3,'leads','setting',0),(3,'leads','transform',0),(3,'leads','view',0),(3,'leave','batchReview',0),(3,'leave','browseReview',0),(3,'leave','review',0),(3,'lieu','batchReview',0),(3,'lieu','browseReview',0),(3,'lieu','review',0),(3,'makeup','batchReview',0),(3,'makeup','browseReview',0),(3,'makeup','review',0),(3,'order','activate',0),(3,'order','assign',0),(3,'order','browse',0),(3,'order','close',0),(3,'order','contact',0),(3,'order','create',0),(3,'order','delete',0),(3,'order','edit',0),(3,'order','export',0),(3,'order','view',0),(3,'overtime','batchReview',0),(3,'overtime','browseReview',0),(3,'overtime','review',0),(3,'product','browse',0),(3,'product','create',0),(3,'product','delete',0),(3,'product','edit',0),(3,'product','view',0),(3,'refund','browseReview',0),(3,'refund','review',0),(3,'resume','browse',0),(3,'resume','create',0),(3,'resume','delete',0),(3,'resume','edit',0),(3,'resume','leave',0),(3,'sales','browse',0),(3,'sales','create',0),(3,'sales','delete',0),(3,'sales','edit',0),(3,'setting','customerPool',0),(3,'setting','lang',0),(3,'setting','reset',0),(3,'thread','edit',0),(3,'thread','post',0),(3,'thread','stick',0),(3,'thread','switchStatus',0),(3,'thread','transfer',0),(3,'thread','view',0),(3,'tree','browse',0),(3,'tree','children',0),(3,'tree','edit',0),(3,'trip','department',0),(3,'user','colleague',0),(4,'address','browse',0),(4,'address','create',0),(4,'address','edit',0),(4,'announce','browse',0),(4,'announce','create',0),(4,'announce','edit',0),(4,'announce','view',0),(4,'apppriv','cash',0),(4,'apppriv','crm',0),(4,'apppriv','doc',0),(4,'apppriv','oa',0),(4,'apppriv','proj',0),(4,'apppriv','team',0),(4,'attend','browseReview',0),(4,'attend','department',0),(4,'attend','export',0),(4,'attend','review',0),(4,'blog','create',0),(4,'blog','edit',0),(4,'blog','index',0),(4,'blog','view',0),(4,'company','index',0),(4,'contact','browse',0),(4,'contact','create',0),(4,'contact','edit',0),(4,'contact','export',0),(4,'contact','exportTemplate',0),(4,'contact','import',0),(4,'contact','showImport',0),(4,'contact','vcard',0),(4,'contact','view',0),(4,'contract','browse',0),(4,'contract','cancel',0),(4,'contract','create',0),(4,'contract','delivery',0),(4,'contract','edit',0),(4,'contract','editDelivery',0),(4,'contract','editReturn',0),(4,'contract','export',0),(4,'contract','finish',0),(4,'contract','receive',0),(4,'contract','view',0),(4,'customer','assign',0),(4,'customer','batchAssign',0),(4,'customer','browse',0),(4,'customer','contact',0),(4,'customer','contract',0),(4,'customer','create',0),(4,'customer','edit',0),(4,'customer','export',0),(4,'customer','linkContact',0),(4,'customer','merge',0),(4,'customer','order',0),(4,'customer','view',0),(4,'depositor','browse',0),(4,'doc','allLibs',0),(4,'doc','browse',0),(4,'doc','create',0),(4,'doc','createLib',0),(4,'doc','edit',0),(4,'doc','editLib',0),(4,'doc','index',0),(4,'doc','projectLibs',0),(4,'doc','showFiles',0),(4,'doc','sort',0),(4,'doc','view',0),(4,'file','delete',0),(4,'file','download',0),(4,'file','edit',0),(4,'file','upload',0),(4,'forum','admin',0),(4,'forum','board',0),(4,'forum','index',0),(4,'leads','apply',0),(4,'leads','assign',0),(4,'leads','browse',0),(4,'leads','create',0),(4,'leads','edit',0),(4,'leads','ignore',0),(4,'leads','transform',0),(4,'leads','view',0),(4,'order','activate',0),(4,'order','assign',0),(4,'order','browse',0),(4,'order','close',0),(4,'order','contact',0),(4,'order','create',0),(4,'order','edit',0),(4,'order','export',0),(4,'order','view',0),(4,'product','browse',0),(4,'product','create',0),(4,'product','edit',0),(4,'product','view',0),(4,'resume','browse',0),(4,'resume','create',0),(4,'resume','edit',0),(4,'sales','browse',0),(4,'setting','lang',0),(4,'setting','reset',0),(4,'thread','edit',0),(4,'thread','post',0),(4,'thread','stick',0),(4,'thread','switchStatus',0),(4,'thread','transfer',0),(4,'thread','view',0),(4,'tree','browse',0),(4,'tree','children',0),(4,'tree','edit',0),(4,'user','colleague',0),(5,'announce','browse',0),(5,'announce','create',0),(5,'announce','edit',0),(5,'announce','view',0),(5,'apppriv','doc',0),(5,'apppriv','oa',0),(5,'apppriv','proj',0),(5,'apppriv','team',0),(5,'blog','create',0),(5,'blog','edit',0),(5,'blog','index',0),(5,'blog','view',0),(5,'company','index',0),(5,'doc','allLibs',0),(5,'doc','browse',0),(5,'doc','create',0),(5,'doc','createLib',0),(5,'doc','edit',0),(5,'doc','editLib',0),(5,'doc','index',0),(5,'doc','projectLibs',0),(5,'doc','showFiles',0),(5,'doc','sort',0),(5,'doc','view',0),(5,'file','delete',0),(5,'file','download',0),(5,'file','edit',0),(5,'file','upload',0),(5,'forum','admin',0),(5,'forum','board',0),(5,'forum','index',0),(5,'thread','edit',0),(5,'thread','post',0),(5,'thread','stick',0),(5,'thread','switchStatus',0),(5,'thread','transfer',0),(5,'thread','view',0),(5,'user','colleague',0);
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_history`
--

LOCK TABLES `sys_history` WRITE;
/*!40000 ALTER TABLE `sys_history` DISABLE KEYS */;
INSERT INTO `sys_history` VALUES (1,53,'realStarted','0000-00-00','2018-05-26','',0),(2,53,'consumed','0.0','10','',0),(3,53,'left','0.0','8','',0),(4,53,'status','wait','doing','',0),(5,54,'finishedDate','','2018-05-26 11:35:10','',0),(6,54,'left','8.0','0','',0),(7,54,'status','doing','done','',0),(8,54,'finishedBy','','admin','',0),(9,70,'name','1','前端测试','001- <del>1</del>\n001+ <ins>前端测试</ins>',0),(10,70,'finishedDate','2018-05-26 11:35:10','2018-05-26','',0),(11,70,'canceledDate','0000-00-00 00:00:00','','',0),(12,70,'closedDate','0000-00-00 00:00:00','','',0),(13,70,'realStarted','2018-05-26','0000-00-00','',0),(14,71,'finishedDate','2018-05-26 00:00:00','2018-05-26','',0),(15,71,'canceledDate','0000-00-00 00:00:00','','',0),(16,71,'closedDate','0000-00-00 00:00:00','','',0),(17,72,'desc','13213','完成前端的自动化测试','001- <del>13213</del>\n001+ <ins>完成前端的自动化测试</ins>',0),(18,72,'finishedDate','2018-05-26 00:00:00','2018-05-26','',0),(19,72,'canceledDate','0000-00-00 00:00:00','','',0),(20,72,'closedDate','0000-00-00 00:00:00','','',0);
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sso`
--

LOCK TABLES `sys_sso` WRITE;
/*!40000 ALTER TABLE `sys_sso` DISABLE KEYS */;
INSERT INTO `sys_sso` VALUES (70,'b631ef5a7d295dc93995571ff2924a26',5,'cd5765e3fe112c28a00941fe6a8a767a','2018-05-31 17:38:47',0),(69,'b631ef5a7d295dc93995571ff2924a26',4,'9a12f0dab6ccfca1a26964f9aefc59b3','2018-05-31 17:37:58',0),(79,'b631ef5a7d295dc93995571ff2924a26',1,'7e3cd80dac4f0dedb9772579ed5acb1b','2018-05-31 17:40:54',0),(75,'b631ef5a7d295dc93995571ff2924a26',2,'65ca6e26ba837b47fd3ee906e764164a','2018-05-31 17:39:32',0),(80,'b631ef5a7d295dc93995571ff2924a26',3,'4c7f7f42068748ea3f605ef938be9a97','2018-05-31 17:57:54',0),(76,'b631ef5a7d295dc93995571ff2924a26',6,'25e5ad55eb0edbdc7808232f40914c3b','2018-05-31 17:40:16',0);
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
INSERT INTO `sys_user` VALUES (1,0,'admin','86f3059b228c8acf99e69734b6bb32cc','admin','','','super','','0000-00-00','u','','','','','','','','','','','',72,'::1','2018-05-31 18:33:11','2018-05-31 18:52:34',0,'2018-05-25 21:32:35','0000-00-00 00:00:00','0','online'),(2,0,'demo','e36a2dfc0a35fa5b3032aadc489efdd9','张三','servicemgr','','no','','0000-00-00','m','6415@qq.com','','','','','','','','','','',5,'::1','2018-05-31 18:30:40','2018-05-31 18:32:44',0,'2018-05-26 11:20:01','2018-05-24 10:32:31','0','offline');
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
INSERT INTO `sys_usergroup` VALUES ('demo',4,0);
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

-- Dump completed on 2018-05-31 18:54:44
