-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 22 2016 г., 03:24
-- Версия сервера: 5.5.53-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `auth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `pwdhash` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `pwdhash`, `email`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin@admin.com'),
(2, 'alex', '698d51a19d8a121ce581499d7b701668', 'alex@alex.com'),
(3, 'bob', 'bcbe3365e6ac95ea2c0343a2395834dd', 'bob@bob.com'),
(4, 'curtis', '310dcbbf4cce62f762a2aaa148d556bd', 'curtis@curtis.com'),
(5, 'diana', '550a141f12de6341fba65b0ad0433500', 'diana@diana.com'),
(6, 'elithabeth', '15de21c670ae7c3f6f3f1f37029303c9', 'elithabeth@elithabeth.com'),
(7, 'fred', 'fae0b27c451c728867a567e8c1bb4e53', 'fred@fred.com'),
(8, 'gloria', 'f1c1592588411002af340cbaedd6fc33', 'gloria@gloria.com'),
(9, 'dima', '12cf2e2a07725d26805906d157e26aa9', 'BashkovDA@yandex.ru'),
(11, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'guest@guest.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
