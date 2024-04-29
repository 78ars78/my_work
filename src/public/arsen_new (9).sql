-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- ����: localhost
-- ����� ��������: ��� 21 2021 �., 19:39
-- ������ �������: 5.0.45
-- ������ PHP: 5.2.4
-- 
-- ��: `arsen_new`
-- 

-- --------------------------------------------------------

-- 
-- ��������� ������� `auto`
-- 

CREATE TABLE `auto` (
  `id` int(5) NOT NULL auto_increment,
  `j` int(5) default NULL,
  `l` int(5) default NULL,
  `itog_0` varchar(250) default NULL,
  `itog` varchar(250) default NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=24 ;

-- 
-- ���� ������ ������� `auto`
-- 

INSERT INTO `auto` VALUES (5, 1, 1, '920_1080/saab_9-5_aero_sedan_30_0.jpeg', '1920_1080/saab_9-5_aero_sedan_30_auto.jpeg', 'saab', '9-5');
INSERT INTO `auto` VALUES (8, 1, 1, '920_1080/autowp_ru_hennessey_nissan_gt-r_godzilla_700_3_0.jpg', '1920_1080/autowp_ru_hennessey_nissan_gt-r_godzilla_700_3_auto.jpg', 'nissan', 'gt-r');
INSERT INTO `auto` VALUES (17, 1, 1, '920_1080/autowp_ru_jaguar_xkr_coupe_15_0.jpg', '1920_1080/autowp_ru_jaguar_xkr_coupe_15_auto.jpg', 'ferrari', 'xkr');
INSERT INTO `auto` VALUES (11, 1, 1, '1920_1080/autowp_ru_bentley_azure_35_0.jpg', '1920_1080/autowp_ru_bentley_azure_35_auto.jpg', 'bentley', 'azure');
INSERT INTO `auto` VALUES (12, 1, 1, '920_1080/autowp_ru_maserati_granturismo_s_18_0.jpg', '1920_1080/autowp_ru_maserati_granturismo_s_18_auto.jpg', 'maserati', 'granturismo');
INSERT INTO `auto` VALUES (19, 1, 1, '920_1080/1920_hummer_0.jpg', '1920_1080/1920_hummer_auto.jpg', 'hummer', 'h2');
INSERT INTO `auto` VALUES (18, 1, 2, '280_1024/1920_hummer_0.jpg', '1280_1024/1920_hummer_auto.jpg', 'hummer', 'h2');

-- --------------------------------------------------------

-- 
-- ��������� ������� `auto_razr`
-- 

CREATE TABLE `auto_razr` (
  `id` int(5) NOT NULL auto_increment,
  `razr` varchar(50) NOT NULL,
  `j` int(50) default NULL,
  `l` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=11 ;

-- 
-- ���� ������ ������� `auto_razr`
-- 

INSERT INTO `auto_razr` VALUES (1, '1920x1080 (FULL-HD)', 1, '1');
INSERT INTO `auto_razr` VALUES (2, '1366x768', 2, '1');
INSERT INTO `auto_razr` VALUES (3, '1280x720 (HD)', 1, '3');
INSERT INTO `auto_razr` VALUES (4, '���������� ��', 0, '0');
INSERT INTO `auto_razr` VALUES (5, '�������', 0, '0');
INSERT INTO `auto_razr` VALUES (6, '��������', 0, '0');
INSERT INTO `auto_razr` VALUES (8, '1280x1024', 1, '2');
INSERT INTO `auto_razr` VALUES (9, '1080x1920', 3, '1');
INSERT INTO `auto_razr` VALUES (10, '1080x2160', 3, '2');

-- --------------------------------------------------------

-- 
-- ��������� ������� `categories`
-- 

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `parent` int(10) unsigned NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- ���� ������ ������� `categories`
-- 

INSERT INTO `categories` VALUES (1, '����������', 0, 1);
INSERT INTO `categories` VALUES (2, '���������', 0, 2);
INSERT INTO `categories` VALUES (3, '�����', 1, 1);
INSERT INTO `categories` VALUES (4, '�����', 1, 2);
INSERT INTO `categories` VALUES (5, '��������', 2, 2);
INSERT INTO `categories` VALUES (6, '������', 2, 1);
INSERT INTO `categories` VALUES (7, '����� 3', 3, 2);
INSERT INTO `categories` VALUES (8, '����� 6', 3, 1);
INSERT INTO `categories` VALUES (9, '�����', 7, 2);
INSERT INTO `categories` VALUES (10, '������', 7, 1);
INSERT INTO `categories` VALUES (11, '�����', 0, 3);
INSERT INTO `categories` VALUES (12, '�������', 8, 2);
INSERT INTO `categories` VALUES (13, '���������', 8, 1);
INSERT INTO `categories` VALUES (14, '�����', 13, 1);
INSERT INTO `categories` VALUES (15, '�������', 13, 2);
INSERT INTO `categories` VALUES (16, '������', 13, 3);
INSERT INTO `categories` VALUES (17, '�������', 13, 4);
INSERT INTO `categories` VALUES (18, '����� CX', 3, 3);
INSERT INTO `categories` VALUES (19, '����� MX', 3, 4);

-- --------------------------------------------------------

-- 
-- ��������� ������� `moto`
-- 

CREATE TABLE `moto` (
  `id` int(5) NOT NULL auto_increment,
  `jl` int(5) NOT NULL,
  `price` int(15) NOT NULL,
  `name` varchar(250) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

-- 
-- ���� ������ ������� `moto`
-- 

INSERT INTO `moto` VALUES (3, 5, 2000, '�����');
INSERT INTO `moto` VALUES (2, 1, 2000, '�����');
INSERT INTO `moto` VALUES (1, 1, 1000, '�������');
INSERT INTO `moto` VALUES (4, 2, 1200, '�����');
INSERT INTO `moto` VALUES (5, 1, 2000, '�����');
INSERT INTO `moto` VALUES (6, 1, 2500, '������');

-- --------------------------------------------------------

-- 
-- ��������� ������� `moto_razr`
-- 

CREATE TABLE `moto_razr` (
  `id` int(5) NOT NULL auto_increment,
  `razr` varchar(50) NOT NULL,
  `jl` int(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

-- 
-- ���� ������ ������� `moto_razr`
-- 

INSERT INTO `moto_razr` VALUES (1, 'full-hd', 1);
INSERT INTO `moto_razr` VALUES (2, 'laptop', 2);
INSERT INTO `moto_razr` VALUES (3, 'hd', 5);

-- --------------------------------------------------------

-- 
-- ��������� ������� `music`
-- 

CREATE TABLE `music` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `parent` int(10) unsigned default NULL,
  `sort` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=30 ;

-- 
-- ���� ������ ������� `music`
-- 

INSERT INTO `music` VALUES (1, '����� �������', 0, 1);
INSERT INTO `music` VALUES (2, '����', 0, 2);
INSERT INTO `music` VALUES (3, '�����', 0, 3);
INSERT INTO `music` VALUES (4, '���''�''����', 0, 4);
INSERT INTO `music` VALUES (6, '�����1', 1, 1);
INSERT INTO `music` VALUES (7, '�����11', 1, 2);
INSERT INTO `music` VALUES (8, '�����2', 2, 1);
INSERT INTO `music` VALUES (9, '�����22', 8, 1);
INSERT INTO `music` VALUES (10, '�����111', 7, 1);
INSERT INTO `music` VALUES (11, '�����222', 8, 2);
INSERT INTO `music` VALUES (12, '�����3', 3, 1);
INSERT INTO `music` VALUES (13, '�����33', 3, 2);
INSERT INTO `music` VALUES (14, '�����4', 4, 1);
INSERT INTO `music` VALUES (15, '�����1111', 6, 1);
INSERT INTO `music` VALUES (16, '�����2222', 8, 3);
INSERT INTO `music` VALUES (17, '�����11111', 15, 1);
INSERT INTO `music` VALUES (18, '�����44', 14, 1);
INSERT INTO `music` VALUES (19, '�����444', 14, 2);
INSERT INTO `music` VALUES (20, '�����4444', 14, 3);
INSERT INTO `music` VALUES (21, '�����44444', 14, 4);
INSERT INTO `music` VALUES (22, '�����444444', 14, 5);
INSERT INTO `music` VALUES (25, '�����11111111', 6, 3);
INSERT INTO `music` VALUES (26, '�����1111111', 6, 2);
INSERT INTO `music` VALUES (27, '�����333', 12, 1);
INSERT INTO `music` VALUES (28, '�����3333', 27, 1);
INSERT INTO `music` VALUES (29, '�����111111111', 7, 2);

-- --------------------------------------------------------

-- 
-- ��������� ������� `userlist`
-- 

CREATE TABLE `userlist` (
  `id` int(3) NOT NULL auto_increment,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

-- 
-- ���� ������ ������� `userlist`
-- 

INSERT INTO `userlist` VALUES (1, '', '');

-- --------------------------------------------------------

-- 
-- ��������� ������� `vmenu`
-- 

CREATE TABLE `vmenu` (
  `id` int(10) NOT NULL auto_increment,
  `menu` varchar(50) NOT NULL,
  `parent` int(10) NOT NULL,
  `sort` int(10) NOT NULL,
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `menu` (`menu`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=22 ;

-- 
-- ���� ������ ������� `vmenu`
-- 

INSERT INTO `vmenu` VALUES (1, '����1', 1, 1);
INSERT INTO `vmenu` VALUES (2, '����2', 1, 2);
INSERT INTO `vmenu` VALUES (3, '����3', 1, 3);
INSERT INTO `vmenu` VALUES (4, '����4', 1, 4);
INSERT INTO `vmenu` VALUES (5, '����5', 1, 5);
INSERT INTO `vmenu` VALUES (6, '����6', 2, 1);
INSERT INTO `vmenu` VALUES (7, '����7', 2, 2);
INSERT INTO `vmenu` VALUES (8, '����8', 2, 3);
INSERT INTO `vmenu` VALUES (9, '����9', 2, 4);
INSERT INTO `vmenu` VALUES (10, '����10', 2, 5);
INSERT INTO `vmenu` VALUES (11, '����11', 3, 1);
INSERT INTO `vmenu` VALUES (12, '����12', 3, 2);
INSERT INTO `vmenu` VALUES (13, '����13', 3, 3);
INSERT INTO `vmenu` VALUES (14, '����14', 3, 4);
INSERT INTO `vmenu` VALUES (15, '����15', 3, 5);
