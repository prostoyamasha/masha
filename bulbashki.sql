-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 18 2017 г., 17:03
-- Версия сервера: 5.7.17-0ubuntu0.16.04.1
-- Версия PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bulbashki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cola`
--

CREATE TABLE `cola` (
  `id` int(11) NOT NULL,
  `parent_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cola`
--

INSERT INTO `cola` (`id`, `parent_id`, `name`, `price`, `status`) VALUES
(1, 0, 'PepsiCola', 0, 0),
(2, 0, 'CocaCola', 0, 1),
(3, 1, 'Pepsi 0,5 liter', 1, 0),
(4, 1, 'Pepsi 1,0 liter', 2, 0),
(5, 1, 'Pepsi 1,5 liter', 3, 0),
(6, 2, 'CocaCola 0,5 liter', 1, 1),
(7, 2, 'CocaCola 1,0 liter', 2, 1),
(8, 2, 'CocaCola 1,5 liter', 3, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cola`
--
ALTER TABLE `cola`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cola`
--
ALTER TABLE `cola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
