
[36mWelcome to CakePHP v2.3.8 Console[0m
---------------------------------------------------------------
App : skiresort_app_cms
Path: /Users/sdecaste/devel/winterlife/skiresort_app_cms/
---------------------------------------------------------------
Cake Schema Shell
---------------------------------------------------------------


DROP TABLE IF EXISTS `resort_app_disentis`.`events`;
DROP TABLE IF EXISTS `resort_app_disentis`.`users`;


CREATE TABLE `resort_app_disentis`.`events` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`maintext` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`image` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`sort_order` int(10) DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `resort_app_disentis`.`users` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`role` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;


