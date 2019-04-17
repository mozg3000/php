-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 17 2019 г., 17:50
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
(91, '01.jpg', 'small', '/img/gallery_img/small/', 1),
(92, '02.jpg', 'small', '/img/gallery_img/small/', 1),
(93, '03.jpg', 'small', '/img/gallery_img/small/', 1),
(94, '04.jpg', 'small', '/img/gallery_img/small/', 1),
(95, '05.jpg', 'small', '/img/gallery_img/small/', 1),
(96, '06.jpg', 'small', '/img/gallery_img/small/', 1),
(97, '07.jpg', 'small', '/img/gallery_img/small/', 1),
(98, '08.jpg', 'small', '/img/gallery_img/small/', 1),
(99, '09.jpg', 'small', '/img/gallery_img/small/', 1),
(100, '10.jpg', 'small', '/img/gallery_img/small/', 1),
(101, '11.jpg', 'small', '/img/gallery_img/small/', 1),
(102, '12.jpg', 'small', '/img/gallery_img/small/', 1),
(103, '13.jpg', 'small', '/img/gallery_img/small/', 1),
(104, '14.jpg', 'small', '/img/gallery_img/small/', 1),
(105, '15.jpg', 'small', '/img/gallery_img/small/', 1),
(106, '01.jpg', 'big', '/img/gallery_img/big/', 0),
(107, '02.jpg', 'big', '/img/gallery_img/big/', 0),
(108, '03.jpg', 'big', '/img/gallery_img/big/', 0),
(109, '04.jpg', 'big', '/img/gallery_img/big/', 0),
(110, '05.jpg', 'big', '/img/gallery_img/big/', 0),
(111, '06.jpg', 'big', '/img/gallery_img/big/', 0),
(112, '07.jpg', 'big', '/img/gallery_img/big/', 0),
(113, '08.jpg', 'big', '/img/gallery_img/big/', 0),
(114, '09.jpg', 'big', '/img/gallery_img/big/', 0),
(115, '10.jpg', 'big', '/img/gallery_img/big/', 0),
(116, '11.jpg', 'big', '/img/gallery_img/big/', 0),
(117, '12.jpg', 'big', '/img/gallery_img/big/', 0),
(118, '13.jpg', 'big', '/img/gallery_img/big/', 0),
(119, '14.jpg', 'big', '/img/gallery_img/big/', 0),
(120, '15.jpg', 'big', '/img/gallery_img/big/', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
