-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_type` int(2) NOT NULL DEFAULT '0' COMMENT '1 = User, 2 = Admin',
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `fb_id` varchar(200) DEFAULT NULL,
  `google_id` varchar(200) DEFAULT NULL,
  `linkedin_id` varchar(200) DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL,
  `device_type` char(10) DEFAULT NULL,
  `device_token` varchar(200) DEFAULT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `otp` varchar(50) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Email address verified 1= Yes, 0 = No',
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Deactive',
  `profile_pic` varchar(200) NOT NULL,
  `local_tz` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-11-22 08:13:29
