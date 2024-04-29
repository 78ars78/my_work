-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Хост: localhost
-- Время создания: Дек 21 2021 г., 19:39
-- Версия сервера: 5.0.45
-- Версия PHP: 5.2.4
-- 
-- БД: `arsen_new`
-- 

-- --------------------------------------------------------

-- 
-- Структура таблицы `auto`
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
-- Дамп данных таблицы `auto`
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
-- Структура таблицы `auto_razr`
-- 

CREATE TABLE `auto_razr` (
  `id` int(5) NOT NULL auto_increment,
  `razr` varchar(50) NOT NULL,
  `j` int(50) default NULL,
  `l` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=11 ;

-- 
-- Дамп данных таблицы `auto_razr`
-- 

INSERT INTO `auto_razr` VALUES (1, '1920x1080 (FULL-HD)', 1, '1');
INSERT INTO `auto_razr` VALUES (2, '1366x768', 2, '1');
INSERT INTO `auto_razr` VALUES (3, '1280x720 (HD)', 1, '3');
INSERT INTO `auto_razr` VALUES (4, 'Настольный ПК', 0, '0');
INSERT INTO `auto_razr` VALUES (5, 'Ноутбук', 0, '0');
INSERT INTO `auto_razr` VALUES (6, 'Смартфон', 0, '0');
INSERT INTO `auto_razr` VALUES (8, '1280x1024', 1, '2');
INSERT INTO `auto_razr` VALUES (9, '1080x1920', 3, '1');
INSERT INTO `auto_razr` VALUES (10, '1080x2160', 3, '2');

-- --------------------------------------------------------

-- 
-- Структура таблицы `categories`
-- 

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `parent` int(10) unsigned NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- Дамп данных таблицы `categories`
-- 

INSERT INTO `categories` VALUES (1, 'Автомобили', 0, 1);
INSERT INTO `categories` VALUES (2, 'Мотоциклы', 0, 2);
INSERT INTO `categories` VALUES (3, 'Мазда', 1, 1);
INSERT INTO `categories` VALUES (4, 'Хонда', 1, 2);
INSERT INTO `categories` VALUES (5, 'Кавасаки', 2, 2);
INSERT INTO `categories` VALUES (6, 'Харлей', 2, 1);
INSERT INTO `categories` VALUES (7, 'Мазда 3', 3, 2);
INSERT INTO `categories` VALUES (8, 'Мазда 6', 3, 1);
INSERT INTO `categories` VALUES (9, 'Седан', 7, 2);
INSERT INTO `categories` VALUES (10, 'Хечбэк', 7, 1);
INSERT INTO `categories` VALUES (11, 'Лодки', 0, 3);
INSERT INTO `categories` VALUES (12, 'Лифтбэк', 8, 2);
INSERT INTO `categories` VALUES (13, 'Кроссовер', 8, 1);
INSERT INTO `categories` VALUES (14, 'Белый', 13, 1);
INSERT INTO `categories` VALUES (15, 'Красный', 13, 2);
INSERT INTO `categories` VALUES (16, 'Черный', 13, 3);
INSERT INTO `categories` VALUES (17, 'Зеленый', 13, 4);
INSERT INTO `categories` VALUES (18, 'Мазда CX', 3, 3);
INSERT INTO `categories` VALUES (19, 'Мазда MX', 3, 4);

-- --------------------------------------------------------

-- 
-- Структура таблицы `moto`
-- 

CREATE TABLE `moto` (
  `id` int(5) NOT NULL auto_increment,
  `jl` int(5) NOT NULL,
  `price` int(15) NOT NULL,
  `name` varchar(250) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

-- 
-- Дамп данных таблицы `moto`
-- 

INSERT INTO `moto` VALUES (3, 5, 2000, 'совок');
INSERT INTO `moto` VALUES (2, 1, 2000, 'веник');
INSERT INTO `moto` VALUES (1, 1, 1000, 'пылесос');
INSERT INTO `moto` VALUES (4, 2, 1200, 'метла');
INSERT INTO `moto` VALUES (5, 1, 2000, 'ведро');
INSERT INTO `moto` VALUES (6, 1, 2500, 'тряпка');

-- --------------------------------------------------------

-- 
-- Структура таблицы `moto_razr`
-- 

CREATE TABLE `moto_razr` (
  `id` int(5) NOT NULL auto_increment,
  `razr` varchar(50) NOT NULL,
  `jl` int(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

-- 
-- Дамп данных таблицы `moto_razr`
-- 

INSERT INTO `moto_razr` VALUES (1, 'full-hd', 1);
INSERT INTO `moto_razr` VALUES (2, 'laptop', 2);
INSERT INTO `moto_razr` VALUES (3, 'hd', 5);

-- --------------------------------------------------------

-- 
-- Структура таблицы `music`
-- 

CREATE TABLE `music` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `parent` int(10) unsigned default NULL,
  `sort` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=30 ;

-- 
-- Дамп данных таблицы `music`
-- 

INSERT INTO `music` VALUES (1, 'Уитни Хьюстон', 0, 1);
INSERT INTO `music` VALUES (2, 'Абба', 0, 2);
INSERT INTO `music` VALUES (3, 'Битлз', 0, 3);
INSERT INTO `music` VALUES (4, 'Рок''н''ролл', 0, 4);
INSERT INTO `music` VALUES (6, 'Мульт1', 1, 1);
INSERT INTO `music` VALUES (7, 'Мульт11', 1, 2);
INSERT INTO `music` VALUES (8, 'Мульт2', 2, 1);
INSERT INTO `music` VALUES (9, 'Мульт22', 8, 1);
INSERT INTO `music` VALUES (10, 'Мульт111', 7, 1);
INSERT INTO `music` VALUES (11, 'Мульт222', 8, 2);
INSERT INTO `music` VALUES (12, 'Мульт3', 3, 1);
INSERT INTO `music` VALUES (13, 'Мульт33', 3, 2);
INSERT INTO `music` VALUES (14, 'Мульт4', 4, 1);
INSERT INTO `music` VALUES (15, 'Мульт1111', 6, 1);
INSERT INTO `music` VALUES (16, 'Мульт2222', 8, 3);
INSERT INTO `music` VALUES (17, 'Мульт11111', 15, 1);
INSERT INTO `music` VALUES (18, 'Мульт44', 14, 1);
INSERT INTO `music` VALUES (19, 'Мульт444', 14, 2);
INSERT INTO `music` VALUES (20, 'Мульт4444', 14, 3);
INSERT INTO `music` VALUES (21, 'Мульт44444', 14, 4);
INSERT INTO `music` VALUES (22, 'Мульт444444', 14, 5);
INSERT INTO `music` VALUES (25, 'Мульт11111111', 6, 3);
INSERT INTO `music` VALUES (26, 'Мульт1111111', 6, 2);
INSERT INTO `music` VALUES (27, 'Мульт333', 12, 1);
INSERT INTO `music` VALUES (28, 'Мульт3333', 27, 1);
INSERT INTO `music` VALUES (29, 'Мульт111111111', 7, 2);

-- --------------------------------------------------------

-- 
-- Структура таблицы `userlist`
-- 

CREATE TABLE `userlist` (
  `id` int(3) NOT NULL auto_increment,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

-- 
-- Дамп данных таблицы `userlist`
-- 

INSERT INTO `userlist` VALUES (1, '', '');

-- --------------------------------------------------------

-- 
-- Структура таблицы `vmenu`
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
-- Дамп данных таблицы `vmenu`
-- 

INSERT INTO `vmenu` VALUES (1, 'Меню1', 1, 1);
INSERT INTO `vmenu` VALUES (2, 'Меню2', 1, 2);
INSERT INTO `vmenu` VALUES (3, 'Меню3', 1, 3);
INSERT INTO `vmenu` VALUES (4, 'Меню4', 1, 4);
INSERT INTO `vmenu` VALUES (5, 'Меню5', 1, 5);
INSERT INTO `vmenu` VALUES (6, 'Меню6', 2, 1);
INSERT INTO `vmenu` VALUES (7, 'Меню7', 2, 2);
INSERT INTO `vmenu` VALUES (8, 'Меню8', 2, 3);
INSERT INTO `vmenu` VALUES (9, 'Меню9', 2, 4);
INSERT INTO `vmenu` VALUES (10, 'Меню10', 2, 5);
INSERT INTO `vmenu` VALUES (11, 'Меню11', 3, 1);
INSERT INTO `vmenu` VALUES (12, 'Меню12', 3, 2);
INSERT INTO `vmenu` VALUES (13, 'Меню13', 3, 3);
INSERT INTO `vmenu` VALUES (14, 'Меню14', 3, 4);
INSERT INTO `vmenu` VALUES (15, 'Меню15', 3, 5);
