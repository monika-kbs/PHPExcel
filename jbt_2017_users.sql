-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `jbt_2017_users`;
CREATE TABLE `jbt_2017_users` (
  `user_id` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `test_type` varchar(200) NOT NULL,
  `count` float unsigned zerofill NOT NULL,
  `verification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `join_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gender` varchar(200) NOT NULL DEFAULT 'male',
  `phone` varchar(200) NOT NULL DEFAULT '6467094826',
  `zip` varchar(200) NOT NULL DEFAULT '11208',
  `ethnicity` varchar(200) NOT NULL DEFAULT 'Black or African American',
  `dob` varchar(200) NOT NULL DEFAULT '7/3/2017',
  `city` varchar(200) NOT NULL DEFAULT 'Brooklyn',
  `state` varchar(200) NOT NULL DEFAULT 'Alaska'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-12-04 04:52:38
