-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2018 г., 19:52
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `depsoft`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courier_table`
--

CREATE TABLE `courier_table` (
  `id` int(255) NOT NULL,
  `courier_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courier_table`
--

INSERT INTO `courier_table` (`id`, `courier_name`) VALUES
(1, 'Петров Петр Петрович'),
(1, 'Иванов Иван Иванович'),
(2, 'Генов Геннадий Генадьевич'),
(3, 'Владимиров Владимир Владимирович'),
(4, 'Костин Константин Константинович'),
(5, 'Котюха Екатерина Екатериновна'),
(6, 'Ушат Помоев Бенедиктович'),
(7, 'Алесандр Григорьевич Лукашенко'),
(8, 'Путин Владимир Владимирович'),
(9, 'Ельцин Борис Геннадьевич');

-- --------------------------------------------------------

--
-- Структура таблицы `region_table`
--

CREATE TABLE `region_table` (
  `id` int(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `time_to` int(255) NOT NULL,
  `time_from` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `region_table`
--

INSERT INTO `region_table` (`id`, `region`, `time_to`, `time_from`) VALUES
(0, 'Санкт-Петербург', 8, 8),
(1, 'Уфа', 18, 18),
(2, 'Нижний Новгород', 6, 6),
(3, 'Владимир', 4, 4),
(4, 'Кострома', 5, 5),
(5, 'Екатеринбург', 23, 23),
(6, 'Ковров', 4, 4),
(7, 'Воронеж', 6, 6),
(8, 'Самара', 14, 14),
(9, 'Астрахань', 17, 17);

-- --------------------------------------------------------

--
-- Структура таблицы `schedule`
--

CREATE TABLE `schedule` (
  `id` int(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `courier` varchar(255) NOT NULL,
  `date_from` datetime NOT NULL,
  `date_to` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `schedule`
--

INSERT INTO `schedule` (`id`, `region`, `courier`, `date_from`, `date_to`) VALUES
(294, 'Ковров', 'Ельцин Борис Геннадьевич', '2016-04-30 20:24:00', '2016-04-30 16:24:00'),
(295, 'Санкт-Петербург', 'Иванов Иван Иванович', '2019-01-01 00:00:00', '2019-01-01 05:00:00'),
(296, 'Нижний Новгород', 'Иванов Иван Иванович', '2017-12-24 00:38:00', '2017-12-23 18:38:00'),
(297, 'Екатеринбург', 'Ушат Помоев Бенедиктович', '2015-08-20 17:14:00', '2015-08-19 18:14:00'),
(298, 'Астрахань', 'Путин Владимир Владимирович', '2017-07-18 11:57:00', '2017-07-17 18:57:00'),
(299, 'Самара', 'Иванов Иван Иванович', '2016-05-08 16:17:00', '2016-05-08 02:17:00'),
(300, 'Ковров', 'Путин Владимир Владимирович', '2017-07-03 00:35:00', '2017-07-02 20:35:00'),
(301, 'Нижний Новгород', 'Котюха Екатерина Екатериновна', '2015-08-29 21:07:00', '2015-08-29 15:07:00'),
(302, 'Воронеж', 'Ельцин Борис Геннадьевич', '2016-08-18 09:01:00', '2016-08-18 03:01:00'),
(303, 'Екатеринбург', 'Ушат Помоев Бенедиктович', '2018-02-22 03:23:00', '2018-02-21 04:23:00'),
(304, 'Самара', 'Владимиров Владимир Владимирович', '2017-06-04 23:08:00', '2017-06-04 09:08:00'),
(305, 'Нижний Новгород', 'Путин Владимир Владимирович', '2016-04-22 15:37:00', '2016-04-22 09:37:00'),
(306, 'Владимир', 'Петров Петр Петрович', '2017-05-14 15:52:00', '2017-05-14 11:52:00'),
(307, 'Владимир', 'Ельцин Борис Геннадьевич', '2016-09-03 02:27:00', '2016-09-02 22:27:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courier_table`
--
ALTER TABLE `courier_table`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `region_table`
--
ALTER TABLE `region_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courier_table`
--
ALTER TABLE `courier_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
