<?php
 die();
?>
20180528 19:56:42: 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 19:57:28: 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE 1  ORDER BY `order`,`id` 
  SELECT * FROM `sys_entry` WHERE 1  ORDER BY `order`,`id` 
  SELECT distinct t1.id, t1.name, t1.order FROM `sys_category` AS t1  LEFT JOIN `sys_entry` AS t2  ON t1.id=t2.category  WHERE t1.type  = 'entry' AND  t2.visible  = '1' AND  t2.category  != '0' ORDER BY t1.`order` 
  SELECT distinct t1.id, t1.name, t1.order FROM `sys_category` AS t1  LEFT JOIN `sys_entry` AS t2  ON t1.id=t2.category  WHERE t1.type  = 'entry' AND  t2.visible  = '1' AND  t2.category  != '0' ORDER BY t1.`order` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'sys' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'sys' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '4'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '5'
  SELECT * FROM `oa_attend` WHERE date  = '2018-05-28' AND  account  = 'admin'
  SELECT * FROM `oa_attend` WHERE date  = '2018-05-28' AND  account  = 'admin'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '4'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '5'
  SELECT * FROM `oa_attend` WHERE date  = '2018-05-27' AND  account  = 'admin'
  SELECT * FROM `oa_attend` WHERE date  = '2018-05-27' AND  account  = 'admin'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 

20180528 19:57:31: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 19:57:30' WHERE account  = 'admin'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')

20180528 19:57:32: entry-printBlock-3
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '3' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '3' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_article` WHERE type  = 'announce' ORDER BY `createdDate` desc  LIMIT 15 
  SELECT * FROM `sys_article` WHERE type  = 'announce' ORDER BY `createdDate` desc  LIMIT 15 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 

20180528 19:57:33: entry-printBlock-2
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'

20180528 19:57:34: entry-printBlock-4
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '4' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '4' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `crm_contract` WHERE deleted  = '0' AND  returnedBy  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `crm_contract` WHERE deleted  = '0' AND  returnedBy  = 'admin' ORDER BY `id` desc  LIMIT 15 

20180528 19:57:36: entry-printBlock-1
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '1' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '1' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '4'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '5'
  SELECT * FROM `oa_attend` WHERE account  = 'admin' AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-06-03' ORDER BY `date` 
  SELECT * FROM `oa_attend` WHERE account  = 'admin' AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-06-03' ORDER BY `date` 
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'trip' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'trip' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'egreess' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'egreess' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-06-03' ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-06-03' ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `sys_entry` WHERE zentao  = '1'

20180528 19:57:37: entry-printBlock-6
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '6' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '6' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `cash_depositor` WHERE type  != 'cash' AND  status  = 'normal'
  SELECT * FROM `cash_depositor` WHERE type  != 'cash' AND  status  = 'normal'

20180528 19:57:39: entry-printBlock-5
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '5' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '5' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `crm_order` WHERE deleted  = '0' AND  customer IN ('') AND  createdBy  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `crm_order` WHERE deleted  = '0' AND  customer IN ('') AND  createdBy  = 'admin' ORDER BY `id` desc  LIMIT 15 

20180528 19:57:40: entry-printBlock-7
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '7' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '7' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_article` WHERE type  = 'blog' ORDER BY `createdDate` desc  LIMIT 15 
  SELECT * FROM `sys_article` WHERE type  = 'blog' ORDER BY `createdDate` desc  LIMIT 15 
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM `sys_relation` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.category = t2.id  WHERE t2.type  = ''
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM `sys_relation` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.category = t2.id  WHERE t2.type  = ''
  SELECT id FROM `sys_article` WHERE id IN ('') ORDER BY `id` desc 
  SELECT id FROM `sys_article` WHERE id IN ('') ORDER BY `id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 

20180528 19:57:42: entry-printBlock-8
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '8' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '8' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `team_thread` ORDER BY `createdDate` desc  LIMIT 15 
  SELECT * FROM `team_thread` ORDER BY `createdDate` desc  LIMIT 15 
  SELECT account, realname FROM `sys_user` WHERE account IN ('')
  SELECT account, realname FROM `sys_user` WHERE account IN ('')
  SELECT id FROM `team_thread` WHERE id IN ('') ORDER BY `repliedDate` desc 
  SELECT id FROM `team_thread` WHERE id IN ('') ORDER BY `repliedDate` desc 

20180528 19:57:43: block-printBlock-2
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_action` WHERE 1  AND  objectType  NOT IN ('attend','refund','leave','overtime','trip','egress','action') AND  date  > '20180528' AND  date  < '2018-05-29' ORDER BY `date` desc 
  SELECT * FROM `sys_action` WHERE 1  AND  objectType  NOT IN ('attend','refund','leave','overtime','trip','egress','action') AND  date  > '20180528' AND  date  < '2018-05-29' ORDER BY `date` desc 
  SELECT id, account AS name FROM `sys_user` WHERE id IN ('1','2')
  SELECT id, account AS name FROM `sys_user` WHERE id IN ('1','2')
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id FROM `sys_action` WHERE id IN ('67','66','65','64','63','62','61','60','59','58','57','56') ORDER BY `date` desc 
  SELECT id FROM `sys_action` WHERE id IN ('67','66','65','64','63','62','61','60','59','58','57','56') ORDER BY `date` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 

20180528 19:58:30: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 19:58:29' WHERE account  = 'admin'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')

20180528 19:59:30: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 19:59:29' WHERE account  = 'admin'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')

20180528 20:00:30: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:00:29' WHERE account  = 'admin'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')

20180528 20:01:30: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:01:29' WHERE account  = 'admin'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')

20180528 20:01:50: entry-visit-2
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE id  = '2'
  SELECT * FROM `sys_entry` WHERE id  = '2'
  DELETE FROM `sys_sso` WHERE sid  = '3ada513a1f89583630e1f4f793fb358a' AND  entry  = '2'
  DELETE FROM `sys_sso` WHERE time  < '2018-05-28 18:01:50'
  INSERT INTO `sys_sso` SET `sid` = '3ada513a1f89583630e1f4f793fb358a',`entry` = '2',`time` = '2018-05-28 20:01:50',`token` = '3b17b18ce448112363d587e687120289'

20180528 20:01:51: 
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 20:01:52: dashboard
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'oa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'oa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_entry` WHERE code  = 'oa'

20180528 20:01:54: block
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '4'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '5'
  SELECT * FROM `oa_attend` WHERE account  = 'admin' AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-06-03' ORDER BY `date` 
  SELECT * FROM `oa_attend` WHERE account  = 'admin' AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-06-03' ORDER BY `date` 
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'trip' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'trip' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'egreess' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'egreess' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-06-03' ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-06-03' ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `sys_entry` WHERE zentao  = '1'

20180528 20:01:55: block
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_article` WHERE type  = 'announce' ORDER BY `createdDate` desc  LIMIT 15 
  SELECT * FROM `sys_article` WHERE type  = 'announce' ORDER BY `createdDate` desc  LIMIT 15 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 

20180528 20:01:58: attend-personal
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_attend` WHERE status  = '' AND  date  < '2018-05-28' OR date  = '2018-05-28'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '4'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  UPDATE `oa_attend` SET  `status` = 'both' WHERE id  = '5'
  SELECT * FROM `oa_attend` WHERE account  = 'admin' AND  `date`  >= '2018-05-01' AND  `date`  <= '2018-05-28' ORDER BY `date` 
  SELECT * FROM `oa_attend` WHERE account  = 'admin' AND  `date`  >= '2018-05-01' AND  `date`  <= '2018-05-28' ORDER BY `date` 
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'holiday'
  SELECT * FROM `oa_holiday` WHERE 1  AND ( year  = '2018' OR begin  LIKE '2018-%' OR end  LIKE '2018-%') AND  type  = 'working'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_leave` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status IN ('pass') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_lieu` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  = 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_overtime` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE t1.type  != 'compensate' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') AND  t1.status  = 'pass' ORDER BY t2.`dept`,t1.`id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT t1.account, t2.moderators FROM `sys_user` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.dept=t2.id  WHERE t1.deleted  = '0' AND  t2.type  = 'dept'
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'trip' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'trip' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'egreess' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT t1.*, t2.realname, t2.dept FROM `oa_trip` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.createdBy=t2.account  WHERE 1  AND  t1.type  = 'egreess' AND ( t1.begin  LIKE '2018-05-%' OR t1.end  LIKE '2018-05-%') ORDER BY t2.`dept`,t1.`id` desc 
  SELECT date FROM `oa_attend` WHERE account  = 'admin' GROUP BY date ORDER BY `date` desc 
  SELECT date FROM `oa_attend` WHERE account  = 'admin' GROUP BY date ORDER BY `date` desc 

20180528 20:02:30: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:02:29' WHERE account  = 'admin'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `sys_action` WHERE `read`  = '0' AND  reader  LIKE '%,admin,%' ORDER BY `id` desc 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `oa_todo` WHERE 1=1  AND ( account  = 'admin' OR assignedTo  = 'admin' OR finishedBy  = 'admin') AND  `date`  >= '2018-05-28' AND  `date`  <= '2018-05-28' AND  status  NOT IN ('done','closed') ORDER BY `date`,`status`,`begin` 
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `sys_entry` WHERE zentao  = '1'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')

