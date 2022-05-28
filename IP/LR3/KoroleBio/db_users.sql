-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2022 г., 01:52
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `role` varchar(25) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `role`) VALUES
(4, '12345', '123', '123@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/01.jpg', 'admin'),
(8, '1', '1', '1@mail.ru', '202cb962ac59075b964b07152d234b70', '../uploads/1653690454', 'user'),
(9, '12', '12', '12@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1653690693', 'user'),
(10, '123456', '12345', '12345@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/', 'user'),
(11, '23', '23', '23@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/', 'user'),
(12, '34', '34', '34@mail.ru', '202cb962ac59075b964b07152d234b70', '../uploads/1653691050', 'user'),
(13, '35', '35', '35@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/', 'user'),
(14, '15', '15', '15@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1653691316', 'user'),
(15, '44', '44', '44@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1653691688', 'user'),
(16, '55', '55', '55@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1653691716', 'user'),
(17, '234', '234', '98234@mail.ru', '202cb962ac59075b964b07152d234b70', '../uploads/1653691810', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
