-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 22 2019 г., 14:31
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

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `sender` text NOT NULL,
  `message` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `sender`, `message`, `product_id`) VALUES
(1, 'vasya', 'jkelasrhgkljherwkjs', 1),
(2, 'ghfhgf', '    fdxfdxfdxdf', 10),
(3, 'ghfhgf', '    gvhvhgvh', 10),
(4, 'Pup', 'My feedback!    ', 10),
(5, 'Pup', 'My feedback!    ', 10),
(6, 'Igupup', 'jnzfdvkjfndlkszlkjd    ', 10),
(7, 'igipup', 'jasnvkjrd    ', 10),
(8, 'igipup', 'jasnvkjrd    ', 10),
(9, 'igipup', 'jasnvkjrd    ', 10),
(10, 'gop', '    stop', 10),
(11, 'gjkd', '    tyfyhghg', 10),
(12, 'cfgcg', '    cgfcgfc', 10),
(13, 'cfgcg', '    cgfcgfc', 10),
(14, 'vasya', 'moy objectivnyi otsyiv    ', 10),
(15, 'vasya', 'moy objectivnyi otsyiv    ', 10),
(16, 'vasya', 'moy objectivnyi otsyiv    ', 10),
(17, 'vasya', 'moy objectivnyi otsyiv    ', 10),
(18, 'bob', '    wtf', 10),
(19, 'vhgvgh', '    vhgvhgvhgvhg', 10),
(20, 'vhgvgh', '    vhgvhgvhgvhg', 10),
(21, 'bjhjhbjh', '    bjhbjhbjhbjhb', 0),
(22, 'bjhjhbjh', '    bjhbjhbjhbjhb', 0),
(23, '', '', 0),
(24, '', '', 0),
(25, '', '', 0),
(26, '', '', 0),
(27, '', '', 0),
(28, '', '', 0),
(29, '', '', 0),
(30, '', '', 0),
(31, '', '', 0),
(32, '', '', 0),
(33, '', '', 0),
(34, '', '', 0),
(35, '', '', 0),
(36, '', '', 0),
(37, '', '', 0),
(38, '', '', 0),
(39, '', '', 0),
(40, '', '', 0),
(41, '', '', 0),
(42, 'hgjhgjhgj', '    gjhgjhgjgjhgjhgjh', 2),
(43, '', '', 0),
(44, '', '', 0),
(45, '', '', 0),
(46, '', '', 0),
(47, '', '', 0),
(48, '', '', 0),
(49, '', '', 0),
(50, '', '', 0),
(51, '', '', 0),
(52, '', '', 0),
(53, '', '', 0),
(54, '', '', 0),
(55, '', '', 0),
(56, '', '', 0),
(57, '', '', 0),
(58, '', '', 0),
(59, '', '', 0),
(60, '', '', 0),
(61, '', '', 0),
(62, '', '', 0),
(63, '', '', 0),
(64, '', '', 0),
(65, '', '', 0),
(66, '', '', 0),
(67, '', '', 0),
(68, '', '', 0),
(69, '', '', 0),
(70, '', '', 0),
(71, '', '', 0),
(72, '', '', 0),
(73, '', '', 0),
(74, '', '', 0),
(75, '', '', 0),
(76, '', '', 0),
(77, '', '', 0),
(78, '', '', 0),
(79, '', '', 0),
(80, '', '', 0),
(81, '', '', 0),
(82, '', '', 0),
(83, '', '', 0),
(84, '', '', 0),
(85, '', '', 0),
(86, '', '', 0),
(87, '', '', 0),
(88, '', '', 0),
(89, '', '', 0),
(90, '', '', 0),
(91, '', '', 0),
(92, '', '', 0),
(93, '', '', 0),
(94, '', '', 0),
(95, '', '', 0),
(96, '', '', 0),
(97, '', '', 0),
(98, '', '', 0),
(99, '', '', 0),
(100, '', '', 0),
(101, '', '', 0),
(102, '', '', 0),
(103, '', '', 0),
(104, '', '', 0),
(105, '', '', 0),
(106, '', '', 0),
(107, '', '', 0),
(108, '', '', 0),
(109, '', '', 0),
(110, '', '', 0),
(111, '', '', 0),
(112, '', '', 0),
(113, '', '', 0),
(114, '', '', 0),
(115, '', '', 0),
(116, '', '', 0),
(117, '', '', 0),
(118, '', '', 0),
(119, '', '', 0),
(120, '', '', 0),
(121, '', '', 0),
(122, '', '', 0),
(123, '', '', 0),
(124, '', '', 0),
(125, '', '', 0),
(126, '', '', 0),
(127, '', '', 0),
(128, '', '', 0),
(129, '', '', 0),
(130, '', '', 0),
(131, '', '', 0),
(132, '', '', 0),
(133, '', '', 0),
(134, '', '', 0),
(135, '', '', 0),
(136, '', '', 0),
(137, '', '', 0),
(138, '', '', 0),
(139, '', '', 0),
(140, '', '', 0),
(141, '', '', 0),
(142, '', '    ', 3),
(143, '', '', 0),
(144, '', '', 0),
(145, '', '', 0),
(146, '', '', 0),
(147, '', '', 0),
(148, '', '', 0),
(149, '', '', 0),
(150, '', '', 0),
(151, '', '', 0),
(152, '', '', 0),
(153, '', '', 0),
(154, '', '', 0),
(155, '', '', 0),
(156, '', '', 0),
(157, '', '', 0),
(158, '', '', 0),
(159, '', '', 0),
(160, '', '', 0),
(161, '', '', 0),
(162, '', '', 0),
(163, '', '', 0),
(164, 'vhgvhg', '    vvhgvhgvhg', 2),
(165, 'hkjhk', '    jhkhkjhk', 2),
(166, '', '', 0),
(167, '', '', 0),
(168, '', '', 0),
(169, '', '', 0),
(170, '', '', 0),
(171, '', '', 0),
(172, '', '', 0),
(173, '', '', 0),
(174, '', '', 0),
(175, '', '', 0),
(176, '', '', 0),
(177, '', '', 0),
(178, '', '', 0),
(179, '', '', 0),
(180, '', '', 0),
(181, '', '', 0),
(182, '', '', 0),
(183, '', '', 0),
(184, '', '', 0),
(185, 'jkjbkj', '    bkjbkjbkj', 2),
(186, 'llllllllllllllllllllllll', '    llllkkkkkkkkkkkkkkkkkkkkk', 2),
(187, 'ghfhgf', '    jhkjhkjhkjhkj', 2),
(188, 'hhhhhhhhhhhhhhh', '    hhhhhhhhhhhhhhhhhhhhhhhhhh', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `show_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `show_number`) VALUES
(91, '01.jpg', 0),
(92, '02.jpg', 0),
(93, '03.jpg', 1),
(94, '04.jpg', 0),
(95, '05.jpg', 0),
(96, '06.jpg', 0),
(97, '07.jpg', 0),
(98, '08.jpg', 0),
(99, '09.jpg', 3),
(100, '10.jpg', 2),
(101, '11.jpg', 0),
(102, '12.jpg', 3),
(103, '13.jpg', 0),
(104, '14.jpg', 0),
(105, '15.jpg', 0);

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
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT для таблицы `picture_type`
--
ALTER TABLE `picture_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
