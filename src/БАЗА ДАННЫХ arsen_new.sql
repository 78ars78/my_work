-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Апр 30 2024 г., 14:26
-- Версия сервера: 8.0.29
-- Версия PHP: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `arsen_new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE `auto` (
  `shoes` int NOT NULL,
  `text` int NOT NULL,
  `фирма` int NOT NULL,
  `id` int NOT NULL,
  `j` int DEFAULT NULL,
  `l` int DEFAULT NULL,
  `itog_0` varchar(250) DEFAULT NULL,
  `itog` varchar(250) DEFAULT NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`shoes`, `text`, `фирма`, `id`, `j`, `l`, `itog_0`, `itog`, `marka`, `model`) VALUES
(0, 0, 1, 5, 1, 1, '1920_1080/saab_9-5_aero_sedan_30_0.jpeg', '1920_1080/saab_9-5_aero_sedan_30_auto.jpeg', 'saab', '9-5'),
(0, 0, 1, 8, 1, 1, '1920_1080/autowp_ru_hennessey_nissan_gt-r_godzilla_700_3_0.jpg', '1920_1080/autowp_ru_hennessey_nissan_gt-r_godzilla_700_3_auto.jpg', 'nissan', 'gt-r'),
(0, 0, 2, 17, 1, 1, '1920_1080/autowp_ru_jaguar_xkr_coupe_15_0.jpg', '1920_1080/autowp_ru_jaguar_xkr_coupe_15_auto.jpg', 'ferrari', 'xkr'),
(0, 0, 1, 11, 1, 1, '1920_1080/autowp_ru_bentley_azure_35_0.jpg', '1920_1080/autowp_ru_bentley_azure_35_auto.jpg', 'bentley', 'azure'),
(0, 0, 2, 12, 1, 1, '1920_1080/autowp_ru_maserati_granturismo_s_18_0.jpg', '1920_1080/autowp_ru_maserati_granturismo_s_18_auto.jpg', 'maserati', 'granturismo'),
(0, 0, 4, 19, 1, 1, '1920_1080/1920_hummer_0.jpg', '1920_1080/1920_hummer_auto.jpg', 'hummer', 'h2'),
(0, 0, 3, 18, 1, 2, '1280_1024/1920_hummer_0.jpg', '1280_1024/1920_hummer_auto.jpg', 'hummer', 'h2');

-- --------------------------------------------------------

--
-- Структура таблицы `auto_razr`
--

CREATE TABLE `auto_razr` (
  `id` int NOT NULL,
  `razr` varchar(50) NOT NULL,
  `j` int DEFAULT NULL,
  `l` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `auto_razr`
--

INSERT INTO `auto_razr` (`id`, `razr`, `j`, `l`) VALUES
(1, '1920x1080 (FULL-HD)', 1, '1'),
(2, '1366x768', 2, '1'),
(3, '1280x720 (HD)', 1, '3'),
(4, 'Настольный ПК', 0, '0'),
(5, 'Ноутбук', 0, '0'),
(6, 'Смартфон', 0, '0'),
(8, '1280x1024', 1, '2'),
(9, '1080x1920', 3, '1'),
(10, '1080x2160', 3, '2');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent` int UNSIGNED NOT NULL,
  `sort` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent`, `sort`) VALUES
(1, 'Автомобили', 0, 1),
(2, 'Мотоциклы', 0, 2),
(3, 'Мазда', 1, 1),
(4, 'Хонда', 1, 2),
(5, 'Кавасаки', 2, 2),
(6, 'Харлей', 2, 1),
(7, 'Мазда 3', 3, 2),
(8, 'Мазда 6', 3, 1),
(9, 'Седан', 7, 2),
(10, 'Хечбэк', 7, 1),
(11, 'Лодки', 0, 3),
(12, 'Лифтбэк', 8, 2),
(13, 'Кроссовер', 8, 1),
(14, 'Белый', 13, 1),
(15, 'Красный', 13, 2),
(16, 'Черный', 13, 3),
(17, 'Зеленый', 13, 4),
(18, 'Мазда CX', 3, 3),
(19, 'Мазда MX', 3, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `moto`
--

CREATE TABLE `moto` (
  `id` int NOT NULL,
  `jl` int NOT NULL,
  `price` int NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `moto`
--

INSERT INTO `moto` (`id`, `jl`, `price`, `name`) VALUES
(3, 5, 2000, 'совок'),
(2, 1, 2000, 'веник'),
(1, 1, 1000, 'пылесос'),
(4, 2, 1200, 'метла'),
(5, 1, 2000, 'ведро'),
(6, 1, 2500, 'тряпка');

-- --------------------------------------------------------

--
-- Структура таблицы `moto_razr`
--

CREATE TABLE `moto_razr` (
  `id` int NOT NULL,
  `razr` varchar(50) NOT NULL,
  `jl` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `moto_razr`
--

INSERT INTO `moto_razr` (`id`, `razr`, `jl`) VALUES
(1, 'full-hd', 1),
(2, 'laptop', 2),
(3, 'hd', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `music`
--

CREATE TABLE `music` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `parent` int UNSIGNED DEFAULT NULL,
  `sort` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `music`
--

INSERT INTO `music` (`id`, `title`, `parent`, `sort`) VALUES
(1, 'Уитни Хьюстон', 0, 1),
(2, 'Абба', 0, 2),
(3, 'Битлз', 0, 3),
(4, 'Рок\'н\'ролл', 0, 4),
(6, 'Мульт1', 1, 1),
(7, 'Мульт11', 1, 2),
(8, 'Мульт2', 2, 1),
(9, 'Мульт22', 8, 1),
(10, 'Мульт111', 7, 1),
(11, 'Мульт222', 8, 2),
(12, 'Мульт3', 3, 1),
(13, 'Мульт33', 3, 2),
(14, 'Мульт4', 4, 1),
(15, 'Мульт1111', 6, 1),
(16, 'Мульт2222', 8, 3),
(17, 'Мульт11111', 15, 1),
(18, 'Мульт44', 14, 1),
(19, 'Мульт444', 14, 2),
(20, 'Мульт4444', 14, 3),
(21, 'Мульт44444', 14, 4),
(22, 'Мульт444444', 14, 5),
(25, 'Мульт11111111', 6, 3),
(26, 'Мульт1111111', 6, 2),
(27, 'Мульт333', 12, 1),
(28, 'Мульт3333', 27, 1),
(29, 'Мульт111111111', 7, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `userlist`
--

CREATE TABLE `userlist` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `userlist`
--

INSERT INTO `userlist` (`id`, `user`, `pass`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `vmenu`
--

CREATE TABLE `vmenu` (
  `id` int NOT NULL,
  `menu` varchar(50) NOT NULL,
  `parent` int NOT NULL,
  `sort` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `vmenu`
--

INSERT INTO `vmenu` (`id`, `menu`, `parent`, `sort`) VALUES
(1, 'Меню1', 1, 1),
(2, 'Меню2', 1, 2),
(3, 'Меню3', 1, 3),
(4, 'Меню4', 1, 4),
(5, 'Меню5', 1, 5),
(6, 'Меню6', 2, 1),
(7, 'Меню7', 2, 2),
(8, 'Меню8', 2, 3),
(9, 'Меню9', 2, 4),
(10, 'Меню10', 2, 5),
(11, 'Меню11', 3, 1),
(12, 'Меню12', 3, 2),
(13, 'Меню13', 3, 3),
(14, 'Меню14', 3, 4),
(15, 'Меню15', 3, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auto_razr`
--
ALTER TABLE `auto_razr`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `moto_razr`
--
ALTER TABLE `moto_razr`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vmenu`
--
ALTER TABLE `vmenu`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `vmenu` ADD FULLTEXT KEY `menu` (`menu`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `auto_razr`
--
ALTER TABLE `auto_razr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `moto_razr`
--
ALTER TABLE `moto_razr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `music`
--
ALTER TABLE `music`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `vmenu`
--
ALTER TABLE `vmenu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
