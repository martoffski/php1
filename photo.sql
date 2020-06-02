-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2020 г., 11:43
-- Версия сервера: 5.7.13
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `photo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `size` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `photo`
  ADD PRIMARY KEY (`ID`);
--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`ID`, `size`, `counter`, `name`) VALUES
(1, 82310, 1, 'значки.jpg'),
(2, 66562, 1, 'ламинатор.jpg'),
(3, 63078, 2, 'табличка.jpg'),
(4, 56699, 0, 'футболка.jpg');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
