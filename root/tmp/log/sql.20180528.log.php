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

20180528 20:03:30: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:03:29' WHERE account  = 'admin'
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

20180528 20:04:39: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:04:38' WHERE account  = 'admin'
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

20180528 20:05:40: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:05:39' WHERE account  = 'admin'
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

20180528 20:06:48: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:06:47' WHERE account  = 'admin'
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

20180528 20:07:57: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:07:56' WHERE account  = 'admin'
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

20180528 20:09:14: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:09:13' WHERE account  = 'admin'
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

20180528 20:10:47: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:10:47' WHERE account  = 'admin'
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

20180528 20:12:26: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:12:25' WHERE account  = 'admin'
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

20180528 20:16:06: 
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

20180528 20:16:08: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:16:07' WHERE account  = 'admin'
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

20180528 20:16:09: entry-printBlock-5
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

20180528 20:16:10: entry-printBlock-3
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

20180528 20:16:11: entry-printBlock-2
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'

20180528 20:16:14: entry-printBlock-1
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

20180528 20:16:15: entry-printBlock-4
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

20180528 20:16:16: entry-printBlock-6
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

20180528 20:16:17: entry-printBlock-7
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

20180528 20:16:18: entry-printBlock-8
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

20180528 20:16:19: block-printBlock-2
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

20180528 20:16:20: admin
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 

20180528 20:16:24: setting-xuanxuan
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 

20180528 20:17:08: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:17:07' WHERE account  = 'admin'
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

20180528 20:18:08: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:18:07' WHERE account  = 'admin'
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

20180528 20:19:08: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:19:07' WHERE account  = 'admin'
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

20180528 20:20:08: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:20:07' WHERE account  = 'admin'
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

20180528 20:21:08: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:21:07' WHERE account  = 'admin'
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

20180528 20:22:11: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:22:10' WHERE account  = 'admin'
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

20180528 20:23:25: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:23:24' WHERE account  = 'admin'
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

20180528 20:24:25: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:24:24' WHERE account  = 'admin'
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

20180528 20:24:57: attend-read
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  DELETE FROM `sys_config` WHERE 1 = 1  AND  owner IN ('system') AND  app IN ('oa') AND  module IN ('attend') AND  section IN ('readers')
  REPLACE `sys_config` SET `owner` = 'system',`app` = 'oa',`module` = 'attend',`section` = 'readers',`key` = '2018-05-28',`value` = 'admin'

20180528 20:25:01: setting-xuanxuan
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  REPLACE `sys_config` SET `owner` = 'system',`app` = 'sys',`module` = 'xuanxuan',`section` = '',`key` = 'key',`value` = 'wap979sn5y1m8kqa5tkras51s5lfgkw9'

20180528 20:25:25: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:25:24' WHERE account  = 'admin'
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

20180528 20:26:30: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:26:29' WHERE account  = 'admin'
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

20180528 20:27:52: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:27:51' WHERE account  = 'admin'
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

20180528 20:27:53: entry-visit-2
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE id  = '2'
  SELECT * FROM `sys_entry` WHERE id  = '2'
  DELETE FROM `sys_sso` WHERE sid  = '3ada513a1f89583630e1f4f793fb358a' AND  entry  = '2'
  DELETE FROM `sys_sso` WHERE time  < '2018-05-28 18:27:53'
  INSERT INTO `sys_sso` SET `sid` = '3ada513a1f89583630e1f4f793fb358a',`entry` = '2',`time` = '2018-05-28 20:27:53',`token` = 'baaf69f9c2b6d19a6258dfa5030eb4d4'

20180528 20:27:54: 
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_entry` WHERE code  = 'oa'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 20:27:55: dashboard
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

20180528 20:27:57: block
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

20180528 20:27:58: block
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

20180528 20:28:03: entry-visit-6
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE id  = '6'
  SELECT * FROM `sys_entry` WHERE id  = '6'
  DELETE FROM `sys_sso` WHERE sid  = '3ada513a1f89583630e1f4f793fb358a' AND  entry  = '6'
  DELETE FROM `sys_sso` WHERE time  < '2018-05-28 18:28:02'
  INSERT INTO `sys_sso` SET `sid` = '3ada513a1f89583630e1f4f793fb358a',`entry` = '6',`time` = '2018-05-28 20:28:02',`token` = '48ddaadc62833471cd2891d12186fa2f'

20180528 20:28:03: 
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 20:28:04: dashboard
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'team' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'team' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'

20180528 20:28:05: block
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_article` WHERE type  = 'blog' ORDER BY `createdDate` desc  LIMIT 15 
  SELECT * FROM `sys_article` WHERE type  = 'blog' ORDER BY `createdDate` desc  LIMIT 15 
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM `sys_relation` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.category = t2.id  WHERE t2.type  = ''
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM `sys_relation` AS t1  LEFT JOIN `sys_category` AS t2  ON t1.category = t2.id  WHERE t2.type  = ''
  SELECT id FROM `sys_article` WHERE id IN ('') ORDER BY `id` desc 
  SELECT id FROM `sys_article` WHERE id IN ('') ORDER BY `id` desc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 

20180528 20:28:07: block
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `team_thread` WHERE stick IN ('1','2') ORDER BY `createdDate` desc  LIMIT 15 
  SELECT * FROM `team_thread` WHERE stick IN ('1','2') ORDER BY `createdDate` desc  LIMIT 15 
  SELECT account, realname FROM `sys_user` WHERE account IN ('')
  SELECT account, realname FROM `sys_user` WHERE account IN ('')
  SELECT id FROM `team_thread` WHERE id IN ('') ORDER BY `repliedDate` desc 
  SELECT id FROM `team_thread` WHERE id IN ('') ORDER BY `repliedDate` desc 

20180528 20:28:08: block
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_entry` WHERE code  = 'team'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `team_thread` ORDER BY `createdDate` desc  LIMIT 15 
  SELECT * FROM `team_thread` ORDER BY `createdDate` desc  LIMIT 15 
  SELECT account, realname FROM `sys_user` WHERE account IN ('')
  SELECT account, realname FROM `sys_user` WHERE account IN ('')
  SELECT id FROM `team_thread` WHERE id IN ('') ORDER BY `repliedDate` desc 
  SELECT id FROM `team_thread` WHERE id IN ('') ORDER BY `repliedDate` desc 

20180528 20:28:12: entry-visit-1
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE id  = '1'
  SELECT * FROM `sys_entry` WHERE id  = '1'
  DELETE FROM `sys_sso` WHERE sid  = '3ada513a1f89583630e1f4f793fb358a' AND  entry  = '1'
  DELETE FROM `sys_sso` WHERE time  < '2018-05-28 18:28:12'
  INSERT INTO `sys_sso` SET `sid` = '3ada513a1f89583630e1f4f793fb358a',`entry` = '1',`time` = '2018-05-28 20:28:11',`token` = '65cbac2bbbe58e830cf85e7b51573d10'

20180528 20:28:13: 
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 20:28:13: dashboard
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'crm' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'crm' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'
  SELECT * FROM `sys_entry` WHERE code  = 'crm'

20180528 20:28:16: user-profile
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_user` WHERE account  = 'admin' AND  deleted  = '0'
  SELECT * FROM `sys_user` WHERE account  = 'admin' AND  deleted  = '0'

20180528 20:28:29: group-browse
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_group` ORDER BY `id` 
  SELECT * FROM `sys_group` ORDER BY `id` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '1' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '1' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '2' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '2' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '3' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '3' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '4' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '4' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '5' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT t2.account, t2.realname FROM `sys_usergroup` AS t1  LEFT JOIN `sys_user` AS t2  ON t1.account = t2.account  WHERE `group`  = '5' AND  t2.deleted  = '0' ORDER BY t2.`account` 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 

20180528 20:28:52: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:28:51' WHERE account  = 'admin'
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

20180528 20:29:52: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:29:51' WHERE account  = 'admin'
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

20180528 20:30:52: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:30:51' WHERE account  = 'admin'
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

20180528 20:31:51: entry-visit-5
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE id  = '5'
  SELECT * FROM `sys_entry` WHERE id  = '5'
  DELETE FROM `sys_sso` WHERE sid  = '3ada513a1f89583630e1f4f793fb358a' AND  entry  = '5'
  DELETE FROM `sys_sso` WHERE time  < '2018-05-28 18:31:50'
  INSERT INTO `sys_sso` SET `sid` = '3ada513a1f89583630e1f4f793fb358a',`entry` = '5',`time` = '2018-05-28 20:31:50',`token` = '78a737dc5921c9dd136249a6b27cd674'

20180528 20:31:52: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:31:51' WHERE account  = 'admin'
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

20180528 20:31:53: 
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 20:31:54: dashboard
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'cash' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'cash' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'

20180528 20:31:55: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `cash_trade` WHERE 1=1  ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `cash_trade` WHERE 1=1  ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`

20180528 20:31:56: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `cash_depositor` WHERE type  != 'cash' AND  status  = 'normal'
  SELECT * FROM `cash_depositor` WHERE type  != 'cash' AND  status  = 'normal'

20180528 20:31:57: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `crm_customer` WHERE deleted  = '0' AND  relation  = 'provider' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `crm_customer` WHERE deleted  = '0' AND  relation  = 'provider' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `sys_category` WHERE type  = 'area' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'industry' ORDER BY `grade` desc,`order` 

20180528 20:31:59: depositor
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 20:32:00: depositor-browse
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_depositor` WHERE 1  AND  status  = 'normal' 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT tags FROM `cash_depositor`
  SELECT tags FROM `cash_depositor`

20180528 20:32:12: depositor-browse
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_depositor` WHERE 1  AND  status  = 'normal' 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT tags FROM `cash_depositor`
  SELECT tags FROM `cash_depositor`

20180528 20:32:15: trade-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:32:18: trade-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:32:21: trade-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:32:23: trade-browse-out
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('out') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('out') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:32:26: trade-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:32:29: trade-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:32:32: trade-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('in') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'in' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'out'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'in'
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:32:33: depositor-browse
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_depositor` WHERE 1  AND  status  = 'normal' 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT tags FROM `cash_depositor`
  SELECT tags FROM `cash_depositor`

20180528 20:32:34: depositor-browse
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_depositor` WHERE 1  AND  status  = 'normal' 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT tags FROM `cash_depositor`
  SELECT tags FROM `cash_depositor`

20180528 20:32:36: depositor-browse
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_depositor` WHERE 1  AND  status  = 'normal' 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT tags FROM `cash_depositor`
  SELECT tags FROM `cash_depositor`

20180528 20:32:38: 
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
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 

20180528 20:32:39: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:32:38' WHERE account  = 'admin'
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

20180528 20:32:42: entry-printBlock-1
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

20180528 20:32:43: entry-printBlock-3
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

20180528 20:32:44: entry-printBlock-2
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'

20180528 20:32:45: entry-printBlock-4
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

20180528 20:32:46: entry-printBlock-5
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

20180528 20:32:47: entry-printBlock-6
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

20180528 20:32:49: entry-printBlock-7
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

20180528 20:32:50: entry-printBlock-8
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

20180528 20:32:52: depositor-browse
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, count(*) as amount FROM `cash_trade` GROUP BY depositor
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT depositor, date, money, currency FROM `cash_balance` ORDER BY `date` 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_depositor` WHERE 1  AND  status  = 'normal' 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `cash_depositor` WHERE 1  AND  status  = 'normal' ORDER BY `id` desc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT tags FROM `cash_depositor`
  SELECT tags FROM `cash_depositor`

20180528 20:32:53: block-printBlock-2
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

20180528 20:32:54: entry-visit-5
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE id  = '5'
  SELECT * FROM `sys_entry` WHERE id  = '5'
  DELETE FROM `sys_sso` WHERE sid  = '3ada513a1f89583630e1f4f793fb358a' AND  entry  = '5'
  DELETE FROM `sys_sso` WHERE time  < '2018-05-28 18:32:54'
  INSERT INTO `sys_sso` SET `sid` = '3ada513a1f89583630e1f4f793fb358a',`entry` = '5',`time` = '2018-05-28 20:32:54',`token` = '18c7215e0736a508346c99ed4b21231b'

20180528 20:32:55: 
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 20:32:56: dashboard
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'cash' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'cash' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'

20180528 20:32:57: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `cash_depositor` WHERE type  != 'cash' AND  status  = 'normal'
  SELECT * FROM `cash_depositor` WHERE type  != 'cash' AND  status  = 'normal'

20180528 20:32:58: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `crm_customer` WHERE deleted  = '0' AND  relation  = 'provider' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `crm_customer` WHERE deleted  = '0' AND  relation  = 'provider' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `sys_category` WHERE type  = 'area' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'industry' ORDER BY `grade` desc,`order` 

20180528 20:32:59: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `cash_trade` WHERE 1=1  ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `cash_trade` WHERE 1=1  ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`

20180528 20:33:05: block-admin-2
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'cash'
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'cash'

20180528 20:33:09: block-admin-2-trade
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'cash' AND  `order`  = '2'
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'cash' AND  `order`  = '2'
  REPLACE `sys_block` SET `title` = '账目',`grid` = '4',`params` = '{\"color\":\"default\",\"num\":\"15\",\"orderBy\":\"id_desc\",\"type\":\"all\"}',`block` = 'trade',`account` = 'admin',`order` = '2',`app` = 'cash',`hidden` = '0',`source` = 'cash',`height` = '0'

20180528 20:33:11: dashboard
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'cash' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_block` WHERE account  = 'admin' AND  app  = 'cash' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'

20180528 20:33:12: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `cash_depositor` WHERE type  != 'cash' AND  status  = 'normal'
  SELECT * FROM `cash_depositor` WHERE type  != 'cash' AND  status  = 'normal'

20180528 20:33:13: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `crm_customer` WHERE deleted  = '0' AND  relation  = 'provider' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `crm_customer` WHERE deleted  = '0' AND  relation  = 'provider' ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `sys_category` WHERE type  = 'area' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'industry' ORDER BY `grade` desc,`order` 

20180528 20:33:15: block
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `cash_trade` WHERE 1=1  ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `cash_trade` WHERE 1=1  ORDER BY `id` desc  LIMIT 15 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`

20180528 20:33:17: trade-browse-out
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('out') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('out') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:33:20: trade-browse-out
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
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
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id, name FROM `crm_contract` WHERE 1  AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('out') ORDER BY `date` desc 
  SELECT id, date FROM `cash_trade` WHERE 1  AND  type IN ('out') ORDER BY `date` desc 
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT * FROM `sys_category` WHERE type  = 'out'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '7'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major  = '8'
  SELECT id,name FROM `sys_category` WHERE 1  AND  major IN ('5','6')
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT * FROM `cash_trade` WHERE parent  = '0' AND  type  = 'out' ORDER BY `date` desc,`id` desc 
  SELECT id,abbr FROM `cash_depositor`
  SELECT * FROM `crm_salespriv` WHERE account  = 'admin'
  SELECT * FROM `crm_salesgroup`
  SELECT id FROM `crm_customer` WHERE deleted  = '0'
  SELECT customer FROM `crm_order` WHERE assignedTo IN ('admin')
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT * FROM `sys_category` WHERE 1  AND  type  = 'dept'
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  ORDER BY `id` asc 
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:33:26: trade-batchcreate
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
  SELECT account, realname FROM `sys_user` WHERE 1  AND  deleted  = '0' AND ( locked  = '0000-00-00 00:00:00' OR locked  < '2018-05-28 20:33:26') ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  AND  deleted  = '0' AND ( locked  = '0000-00-00 00:00:00' OR locked  < '2018-05-28 20:33:26') ORDER BY `id` asc 
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
  SELECT * FROM `sys_category` WHERE type  = 'dept' ORDER BY `grade` desc,`order` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:33:28: trade-batchcreate
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT id,abbr FROM `cash_depositor`
  SELECT id,abbr FROM `cash_depositor`
  SELECT account, realname FROM `sys_user` WHERE 1  AND  deleted  = '0' AND ( locked  = '0000-00-00 00:00:00' OR locked  < '2018-05-28 20:33:27') ORDER BY `id` asc 
  SELECT account, realname FROM `sys_user` WHERE 1  AND  deleted  = '0' AND ( locked  = '0000-00-00 00:00:00' OR locked  < '2018-05-28 20:33:27') ORDER BY `id` asc 
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
  SELECT * FROM `sys_category` WHERE type  = 'dept' ORDER BY `grade` desc,`order` 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 
  SELECT id, name FROM `sys_product` WHERE deleted  = '0' ORDER BY `order` desc 

20180528 20:33:39: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:33:39' WHERE account  = 'admin'
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

20180528 20:33:50: provider-browse
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
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
  SELECT * FROM `sys_category` WHERE type  = 'area' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'industry' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE type  = 'provider' ORDER BY `grade` desc,`order` 

20180528 20:33:58: tree-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 

20180528 20:33:59: tree-children-in-0-0
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 

20180528 20:34:02: tree-browse-out
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'out' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'out' ORDER BY `order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'out' ORDER BY `order` 

20180528 20:34:03: tree-children-out-0-0
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'out' ORDER BY `order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'out' ORDER BY `order` 

20180528 20:34:13: tree-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 

20180528 20:34:14: tree-children-in-0-0
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 

20180528 20:34:18: tree-merge-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 

20180528 20:34:23: tree-merge-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 

20180528 20:34:25: tree-browse-in
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE type  = 'in' ORDER BY `grade` desc,`order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 

20180528 20:34:26: tree-children-in-0-0
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 
  SELECT * FROM `sys_category` WHERE parent  = '0' AND  type  = 'in' ORDER BY `order` 

20180528 20:34:27: schema-browse
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_entry` WHERE code  = 'cash'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_schema` ORDER BY `id` desc 
  SELECT * FROM `sys_schema` ORDER BY `id` desc 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 

20180528 20:34:39: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:34:38' WHERE account  = 'admin'
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

20180528 20:35:39: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:35:38' WHERE account  = 'admin'
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

20180528 20:36:47: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:36:46' WHERE account  = 'admin'
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

20180528 20:37:57: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:37:56' WHERE account  = 'admin'
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

20180528 20:38:57: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:38:57' WHERE account  = 'admin'
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

20180528 20:40:15: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:40:14' WHERE account  = 'admin'
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

20180528 20:41:32: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:41:27' WHERE account  = 'admin'
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

20180528 20:42:47: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:42:47' WHERE account  = 'admin'
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

20180528 20:44:18: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:44:17' WHERE account  = 'admin'
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

20180528 20:45:27: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:45:27' WHERE account  = 'admin'
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

20180528 20:46:47: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:46:47' WHERE account  = 'admin'
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

20180528 20:47:47: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:47:47' WHERE account  = 'admin'
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

20180528 20:49:00: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:48:59' WHERE account  = 'admin'
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

20180528 20:50:17: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:50:17' WHERE account  = 'admin'
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

20180528 20:51:37: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:51:37' WHERE account  = 'admin'
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

20180528 20:52:47: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:52:47' WHERE account  = 'admin'
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

20180528 20:54:25: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:54:24' WHERE account  = 'admin'
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

20180528 20:55:42: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:55:41' WHERE account  = 'admin'
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

20180528 20:56:48: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:56:47' WHERE account  = 'admin'
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

20180528 20:58:11: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 20:58:10' WHERE account  = 'admin'
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

20180528 21:23:38: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:23:38' WHERE account  = 'admin'
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

20180528 21:24:08: cron-ajaxExec
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_config` WHERE owner  = 'system' AND  module  = 'cron' AND  section  = 'run' AND  `key`  = 'status'
  SELECT * FROM `sys_config` WHERE owner  = 'system' AND  module  = 'cron' AND  section  = 'run' AND  `key`  = 'status'
  UPDATE `sys_config` SET  `value` = 'running' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  UPDATE `sys_cron` SET  `lastTime` = '2018-05-28 19:57:29' WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  UPDATE `sys_cron` SET `status` = 'normal',`lastTime` = '2018-05-28 19:57:29' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 19:58:29' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 19:58:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 19:59:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 19:59:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:00:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:00:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:00:31' WHERE id  = '6'
  SELECT id, account FROM `sys_user` WHERE status  = 'online'
  SELECT id, account FROM `sys_user` WHERE status  = 'online'
  SELECT account FROM `oa_todo` WHERE date  = '2018-05-28' AND  account IN ('admin')
  SELECT account FROM `oa_todo` WHERE date  = '2018-05-28' AND  account IN ('admin')
  INSERT INTO `sys_queue` SET `objectID` = '0',`action` = '0',`toList` = 'admin',`subject` = '您今天还没有添加待办。',`data` = '{\"link\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"}}',`status` = 'wait',`createdBy` = 'admin',`createdDate` = '2018-05-28 20:00:31'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:01:31' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:01:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_queue` SET  `status` = 'sent', `sendTime` = '2018-05-28 20:01:31' WHERE id IN ('5')
  SELECT id FROM `sys_user` WHERE account IN ('admin')
  SELECT id FROM `sys_user` WHERE account IN ('admin')
  SELECT id, account, realname, avatar, role, dept, status, admin, gender, email, mobile, phone, site, qq, deleted FROM `sys_user` WHERE 1  AND  id IN ('1')
  SELECT id, account, realname, avatar, role, dept, status, admin, gender, email, mobile, phone, site, qq, deleted FROM `sys_user` WHERE 1  AND  id IN ('1')
  INSERT INTO `im_message` SET `gid` = 'ee3302bf-aba7-0d12-081f-9852beaf2ad1',`cgid` = '#notification',`user` = '0',`date` = '2018-05-28 20:01:32',`order` = '0',`type` = 'notify',`content` = '',`contentType` = 'text',`data` = '{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}'
  INSERT INTO `im_messagestatus` SET `user` = '1',`gid` = 'ee3302bf-aba7-0d12-081f-9852beaf2ad1',`status` = 'waiting'
  DELETE FROM `sys_queue` WHERE status  = 'sent'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:02:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:02:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:03:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:03:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:04:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:04:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:05:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:05:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:06:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:06:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:07:31' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:07:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:08:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:08:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:09:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:09:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:10:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:10:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:10:31' WHERE id  = '6'
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:11:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:11:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:12:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:12:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:13:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:13:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:14:31' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:14:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:15:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:15:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:16:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:16:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:17:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:17:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:18:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:18:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:19:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:19:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:20:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:20:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:20:31' WHERE id  = '6'
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:21:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:21:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:22:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:22:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:23:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:23:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:24:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:24:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:25:31' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:25:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:26:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:26:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:27:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:27:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:28:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:28:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:29:31' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:29:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:30:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:30:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:30:31' WHERE id  = '6'
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:31:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:31:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:32:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:32:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:33:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:33:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:34:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:34:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:35:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:35:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:36:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:36:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:37:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:37:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:38:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:38:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:39:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:39:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:40:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:41:32' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:41:32' WHERE id  = '6'
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:42:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:42:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:43:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:43:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:44:31' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:44:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:45:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:45:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:46:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:46:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:47:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:47:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:48:31' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:48:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:49:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:49:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:50:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:50:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:50:31' WHERE id  = '6'
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:51:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:51:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:52:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:52:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:53:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:53:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:54:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:54:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:55:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:55:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:56:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:56:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:57:31' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:57:31' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:58:30' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 20:58:30' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'

20180528 21:24:38: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:24:38' WHERE account  = 'admin'
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

20180528 21:25:39: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:25:38' WHERE account  = 'admin'
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

20180528 21:26:40: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:26:39' WHERE account  = 'admin'
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

20180528 21:28:16: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:28:15' WHERE account  = 'admin'
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

20180528 21:30:15: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:30:14' WHERE account  = 'admin'
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

20180528 21:31:47: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:31:46' WHERE account  = 'admin'
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

20180528 21:32:58: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:32:57' WHERE account  = 'admin'
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

20180528 21:33:59: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:33:58' WHERE account  = 'admin'
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

20180528 21:37:50: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:37:49' WHERE account  = 'admin'
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

20180528 21:40:00: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:39:59' WHERE account  = 'admin'
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

20180528 21:43:30: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:43:29' WHERE account  = 'admin'
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

20180528 21:48:07: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:48:06' WHERE account  = 'admin'
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

20180528 21:51:51: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:51:50' WHERE account  = 'admin'
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

20180528 21:56:21: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 21:56:20' WHERE account  = 'admin'
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

20180528 23:03:23: 
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
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 
  SELECT * FROM `sys_cron` ORDER BY `lastTime` desc  LIMIT 1 

20180528 23:03:26: misc-ping-
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  UPDATE `sys_user` SET  `ping` = '2018-05-28 23:03:25' WHERE account  = 'admin'
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

20180528 23:03:27: entry-printBlock-3
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

20180528 23:03:28: entry-printBlock-4
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

20180528 23:03:29: entry-printBlock-2
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'
  SELECT * FROM `sys_block` WHERE `order`  = '2' AND  account  = 'admin' AND  app  = 'sys'

20180528 23:03:31: entry-printBlock-1
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

20180528 23:03:33: entry-printBlock-5
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

20180528 23:03:34: entry-printBlock-6
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

20180528 23:03:35: entry-printBlock-7
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

20180528 23:03:37: entry-printBlock-8
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

20180528 23:03:38: block-printBlock-2
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

20180528 23:58:19: cron-ajaxExec
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_entry` WHERE code  = 'sys'
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_lang` ORDER BY `app`,`lang`,`id` 
  SELECT * FROM `sys_config` WHERE owner  = 'system' AND  module  = 'cron' AND  section  = 'run' AND  `key`  = 'status'
  SELECT * FROM `sys_config` WHERE owner  = 'system' AND  module  = 'cron' AND  section  = 'run' AND  `key`  = 'status'
  UPDATE `sys_config` SET  `value` = 'running' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  UPDATE `sys_cron` SET  `lastTime` = '2018-05-28 23:03:24' WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  UPDATE `sys_cron` SET `status` = 'normal',`lastTime` = '2018-05-28 23:03:24' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:04:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:04:26' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:05:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:05:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:06:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:06:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:07:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:07:26' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:08:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:08:26' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:09:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:09:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:10:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:10:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:10:26' WHERE id  = '6'
  SELECT id, account FROM `sys_user` WHERE status  = 'online'
  SELECT id, account FROM `sys_user` WHERE status  = 'online'
  SELECT account FROM `oa_todo` WHERE date  = '2018-05-28' AND  account IN ('admin')
  SELECT account FROM `oa_todo` WHERE date  = '2018-05-28' AND  account IN ('admin')
  INSERT INTO `sys_queue` SET `objectID` = '0',`action` = '0',`toList` = 'admin',`subject` = '您今天还没有添加待办。',`data` = '{\"link\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"}}',`status` = 'wait',`createdBy` = 'admin',`createdDate` = '2018-05-28 23:10:26'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:11:26' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:11:26' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_queue` SET  `status` = 'sent', `sendTime` = '2018-05-28 23:11:27' WHERE id IN ('6')
  SELECT id FROM `sys_user` WHERE account IN ('admin')
  SELECT id FROM `sys_user` WHERE account IN ('admin')
  SELECT id, account, realname, avatar, role, dept, status, admin, gender, email, mobile, phone, site, qq, deleted FROM `sys_user` WHERE 1  AND  id IN ('1')
  SELECT id, account, realname, avatar, role, dept, status, admin, gender, email, mobile, phone, site, qq, deleted FROM `sys_user` WHERE 1  AND  id IN ('1')
  INSERT INTO `im_message` SET `gid` = '2516c71a-a3ef-87da-8db2-5d60b8b21020',`cgid` = '#notification',`user` = '0',`date` = '2018-05-28 23:11:27',`order` = '0',`type` = 'notify',`content` = '',`contentType` = 'text',`data` = '{\"title\":\"\\u60a8\\u4eca\\u5929\\u8fd8\\u6ca1\\u6709\\u6dfb\\u52a0\\u5f85\\u529e\\u3002\",\"subtitle\":\"\",\"url\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"actions\":{\"lable\":\"\\u65b0\\u589e\\u5f85\\u529e\",\"url\":\"http:\\/\\/localhost\\/mboa\\/root\\/www\\/sys\\/todo-calendar.html\",\"type\":\"normal\"},\"sender\":{\"id\":\"ranzhi\"},\"target\":[1]}'
  INSERT INTO `im_messagestatus` SET `user` = '1',`gid` = '2516c71a-a3ef-87da-8db2-5d60b8b21020',`status` = 'waiting'
  DELETE FROM `sys_queue` WHERE status  = 'sent'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:12:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:12:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:13:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:13:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:14:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:14:26' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:15:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:15:26' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:16:26' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:16:27' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:17:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:17:26' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:18:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:18:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:19:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:19:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:20:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:20:26' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:20:26' WHERE id  = '6'
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  SELECT id, account FROM `sys_user` WHERE status  = 'online' AND  account  NOT IN ('admin')
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:21:25' WHERE id  = '1'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '2'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '3'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '4'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '5'
  UPDATE `sys_cron` SET `status` = 'running',`lastTime` = '2018-05-28 23:21:25' WHERE id  = '5'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  SELECT * FROM `sys_queue` WHERE status  = 'wait'
  UPDATE `sys_cron` SET `status` = 'normal' WHERE id  = '5'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE id  = '6'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE 1=1  AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE lastTime  = '0000-00-00 00:00:00' AND  status  != 'stop'
  SELECT * FROM `sys_cron` WHERE id  = '1'
  SELECT * FROM `sys_cron` WHERE id  = '1'

