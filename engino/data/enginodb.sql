-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 17 2019 г., 16:23
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `enginodb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text,
  `path` text,
  `show_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `type`, `path`, `show_number`) VALUES
(91, 'Имя1', 'small', '/img/gallery_img/small/01.jpg', 7),
(92, 'Имя2', 'small', '/img/gallery_img/small/02.jpg', 13),
(93, 'Имя3', 'small', '/img/gallery_img/small/03.jpg', 1),
(94, 'Имя4', 'small', '/img/gallery_img/small/04.jpg', 8),
(95, 'Имя5', 'small', '/img/gallery_img/small/05.jpg', 5),
(96, 'Имя6', 'small', '/img/gallery_img/small/06.jpg', 11),
(97, 'Имя7', 'small', '/img/gallery_img/small/07.jpg', 5),
(98, 'Имя8', 'small', '/img/gallery_img/small/08.jpg', 2),
(99, 'Имя9', 'small', '/img/gallery_img/small/09.jpg', 0),
(100, 'Имя10', 'small', '/img/gallery_img/small/10.jpg', 12),
(101, 'Имя11', 'small', '/img/gallery_img/small/11.jpg', 1),
(102, 'Имя12', 'small', '/img/gallery_img/small/12.jpg', 10),
(103, 'Имя13', 'small', '/img/gallery_img/small/13.jpg', 2),
(104, 'Имя14', 'small', '/img/gallery_img/small/14.jpg', 1),
(105, 'Имя15', 'small', '/img/gallery_img/small/15.jpg', 0),
(106, 'Имя1', 'big', '/img/gallery_img/big/01.jpg', 0),
(107, 'Имя2', 'big', '/img/gallery_img/big/02.jpg', 0),
(108, 'Имя3', 'big', '/img/gallery_img/big/03.jpg', 0),
(109, 'Имя4', 'big', '/img/gallery_img/big/04.jpg', 0),
(110, 'Имя5', 'big', '/img/gallery_img/big/05.jpg', 0),
(111, 'Имя6', 'big', '/img/gallery_img/big/06.jpg', 0),
(112, 'Имя7', 'big', '/img/gallery_img/big/07.jpg', 0),
(113, 'Имя8', 'big', '/img/gallery_img/big/08.jpg', 0),
(114, 'Имя9', 'big', '/img/gallery_img/big/09.jpg', 0),
(115, 'Имя10', 'big', '/img/gallery_img/big/10.jpg', 0),
(116, 'Имя11', 'big', '/img/gallery_img/big/11.jpg', 0),
(117, 'Имя12', 'big', '/img/gallery_img/big/12.jpg', 0),
(118, 'Имя13', 'big', '/img/gallery_img/big/13.jpg', 0),
(119, 'Имя14', 'big', '/img/gallery_img/big/14.jpg', 0),
(120, 'Имя15', 'big', '/img/gallery_img/big/15.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `picture_type`
--

CREATE TABLE `picture_type` (
  `id` int(11) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `picture_type`
--

INSERT INTO `picture_type` (`id`, `size`) VALUES
(1, 'small'),
(2, 'big');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `picture_type`
--
ALTER TABLE `picture_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT для таблицы `picture_type`
--
ALTER TABLE `picture_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
