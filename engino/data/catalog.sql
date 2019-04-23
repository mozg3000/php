-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 21 2019 г., 17:53
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
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `description` text,
  `img` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `product_name`, `description`, `img`) VALUES
(1, 'Товар1', 'Описание товара1', '01.jpg'),
(2, 'Товар2', 'Описание товара2', '02.jpg'),
(3, 'Товар3', 'Описание товара3', '03.jpg'),
(4, 'Товар4', 'Описание товара4', '04.jpg'),
(5, 'Товар5', 'Описание товара5', '05.jpg'),
(6, 'Товар6', 'Описание товара6', '06.jpg'),
(7, 'Товар7', 'Описание товара7', '07.jpg'),
(8, 'Товар8', 'Описание товара8', '08.jpg'),
(9, 'Товар9', 'Описание товара9', '09.jpg'),
(10, 'Товар10', 'Описание товара10', '10.jpg'),
(11, 'Товар11', 'Описание товара11', '11.jpg'),
(12, 'Товар12', 'Описание товара12', '12.jpg'),
(13, 'Товар13', 'Описание товара13', '13.jpg'),
(14, 'Товар14', 'Описание товара14', '14.jpg'),
(15, 'Товар15', 'Описание товара15', '15.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
