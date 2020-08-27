-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 27 2020 г., 14:51
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `reg_test_que`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` text NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `tel`, `login`, `password`) VALUES
(1, 'Андрей', 'Гаврилов', 'sunadudyg@gmail.com', '+7(920)045-27-22', 'asdasdlasldkla', 'asdasd'),
(2, 'Андрей', 'Алешко', 'sunadudyg@gmail.com', '+7(920)045-27-22', 'xpoint', 'yveburyge'),
(3, 'Андрей', 'Алешко', 'sunadudyg@gmail.com', '+7(920)045-27-22', '79202938072', 'фывфвыф'),
(4, 'Андрей', 'Алешко', 'sunadudyg@gmail.com', '+7(920)045-27-22', 'sdfsfsdfgsdg', 'фывфвф'),
(5, 'Андрей', 'asdasdasd', 'sunadudyg@gmail.com', '+7(920)045-27-22', 'alexzasdad', 'asdadadasdsadad'),
(6, 'Андрей', 'фыфывфывфы', 'sunadudyg@gmail.com', '+7(920)045-27-22', 'asfaf', 'asdasfafga'),
(7, 'Андрей', 'Гаврилов', 'sunadudyg@gmail.com', '+7(920)045-27-22', 'aksdjjad', 'ajksdjaoldjolik'),
(8, 'Андрей', 'Гаврилов', 'sunadudyg@gmail.com', '+7(920)045-27-22', 'aksdjjad', 'ajksdjaoldjolik'),
(9, 'Андрей', 'sadad', 'sunadudyg@gmail.com', '+7(920)045-27-22', 'xpoint23', '1241254253245ыв');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
