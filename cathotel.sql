-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2023 г., 14:40
-- Версия сервера: 5.6.47
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cathotel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `booking_room`
--

CREATE TABLE `booking_room` (
  `id_booking` int(11) NOT NULL,
  `id_room` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name_user` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_pet` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nphone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `booking_room`
--

INSERT INTO `booking_room` (`id_booking`, `id_room`, `id_user`, `name_user`, `name_pet`, `nphone`, `email`, `date1`, `date2`, `status`) VALUES
(3, 3, 7, 'Кирилл', 'Барсик', '+7 (950) 178-81-49', 'akvamarin06010@gmail.com', '10.10.2023', '11.12.2023', 'refused'),
(4, 6, 7, 'Кирилл', 'Леон', '+7 (950) 178-81-49', 'akvamarin06010@gmail.com', '10.10.2023', '11.12.2023', 'refused'),
(5, 7, 7, 'Кирилл', 'Пумба', '+7 (950) 178-81-49', 'akvamarin06010@gmail.com', '10.10.2023', '11.12.2023', 'confirmed'),
(6, 3, 7, 'Кирилл', 'Мухтар', '+7 (950) 178-81-49', 'akvamarin06010@gmail.com', '10.10.2023', '11.12.2023', 'confirmed'),
(7, 3, 8, 'Валерия', 'Чернушка', '+7 (777) 777-77-77', '123@gmail.com', '10.10.2023', '11.12.2023', 'refused'),
(8, 1, 9, 'Екатерина', 'Пушок', '+7 (999) 999-99-99', '234@gmail.c0m', '10.10.2023', '11.12.2023', 'confirmed'),
(9, 6, 10, 'Павел', 'Пантера', '+7 (000) 000-00-00', '1@gmail.com', '10.10.2023', '11.12.2023', 'confirmed'),
(10, 6, 7, 'Павел', 'Пантера', '+7 (000) 000-00-00', '1@gmail.com', '10.10.2023', '11.12.2023', 'refused'),
(11, 6, 7, 'Кирилл', 'Халк', '+7 (950) 178-81-49', 'akvamarin06010@gmail.com', '10.10.2023', '11.12.2023', 'confirmed'),
(12, 6, 7, 'Кирилл', 'Цианид', '+7 (950) 178-81-49', 'akvamarin06010@gmail.com', '10.10.2023', '11.12.2023', 'refused'),
(13, 1, 7, 'Кирилл', 'Зюмба', '+7 (950) 178-81-49', 'akvamarin06010@gmail.com', '10.10.2023', '11.12.2023', 'confirmed'),
(14, 3, 11, 'Никита', 'Годзила', '+7 (111) 111-12-22', 'wu@mail.com', '10.10.2023', '11.12.2023', 'confirmed');

-- --------------------------------------------------------

--
-- Структура таблицы `cat_room`
--

CREATE TABLE `cat_room` (
  `id_room` int(11) NOT NULL,
  `class_room` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_room` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `square_room` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_room` int(11) NOT NULL,
  `img2_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cat_room`
--

INSERT INTO `cat_room` (`id_room`, `class_room`, `img_room`, `size_room`, `square_room`, `price_room`, `img2_room`) VALUES
(1, 'Эконом', 'img/room-economy@1x.jpg', '90х70х180', '0,63', 100, 'img/room-economy@1x.webp'),
(3, 'Эконом плюс', 'img/room-economy-plus@1x.jpg', '90х100х180', '0,90', 200, 'img/room-economy-plus@1x.webp'),
(4, 'Комфорт', 'img/room-comfort@1x.jpg', '100х125х180', '1,13', 250, '	 img/room-comfort@1x.webp'),
(5, 'Сьют', 'img/room-suite@1x.jpg', '125х125х180', '1,56', 350, 'img/room-suite@1x.webp'),
(6, 'Люкс', 'img/room-lux@1x.jpg', '160х160х180', '2,56', 500, 'img/room-lux@1x.webp'),
(7, 'Супер-люкс', 'img/room-lux-super@1x.jpg', '180х160х180', '2,88', 600, 'img/room-lux-super@1x.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_booking` int(11) DEFAULT NULL,
  `text_feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_booking`, `text_feedback`, `date`) VALUES
(1, 7, 'Первый раз пришлось оставить нашего котика в гостинице, очень переживали. Администратор Мария каждый день высылала нам фото нашего питомца, рассказывала, как он себя чувствует. И мы и котик остались очень довольны!', '15.11.2019'),
(2, 8, 'Гостиницу для питомцев нам посоветовали друзья. Они всегда оставляют здесь своего кота, когда уезжают. В “Котейке” очень хорошо заботятся о питомцах, в гостинице очень чисто. Всем рекомендую! Будем обращаться еще.', '10.10.2019'),
(3, 9, 'Мой кот — настоящая привереда, угодить ему сложно. У меня были особые требования к уходу за ним, и “Котейка” отлично справились. Я часто наблюдал по видео за питомцем со своего телефона, это очень удобно.', '02.09.2019'),
(4, 9, 'Моему коту очень понравилось и он придёт ещё раз', '09.12.2020'),
(7, 13, 'Я очень переживал оставлять своего кота в этой гостинице, но почитал отзывы и решился. Я думал его будут обижать и он мне этого не простит. Но когда я пришел мой кот лежал счастливый от передоза кошачьей мяты. Спасибо вам мы придём ещё раз', '30.04.2023');

-- --------------------------------------------------------

--
-- Структура таблицы `name_addition`
--

CREATE TABLE `name_addition` (
  `id_addition` int(11) NOT NULL,
  `name_addition` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_addition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `name_addition`
--

INSERT INTO `name_addition` (`id_addition`, `name_addition`, `img_addition`) VALUES
(1, 'Лежак', '#icon-bed'),
(2, 'Когтеточка', '#icon-claw'),
(3, 'Игровой комплекс', '#icon-toy'),
(4, 'Домик', '#icon-house');

-- --------------------------------------------------------

--
-- Структура таблицы `room_addition`
--

CREATE TABLE `room_addition` (
  `room_addition` int(11) NOT NULL,
  `name_addition` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `room_addition`
--

INSERT INTO `room_addition` (`room_addition`, `name_addition`) VALUES
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(6, 4),
(7, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nphone_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `pass_user`, `status_user`, `nphone_user`, `email_user`) VALUES
(1, 'Кирилл', '$2y$10$Miape83ySvYDTXiAmokZ/.KmUdpdlYb35IfJYiKozTSmmBH4sQagK', 'user', '89501788149', 'akvamarin06010@gmail.com'),
(2, 'Владик', '$2y$10$OC9i7phS3UoX.wLmTwOZY.6K.LQoWCsScRfirZ65MjLbXvP8afer6', 'user', '+79127698277', 'vladgr23062@gmail.com'),
(3, 'af', '$2y$10$NiJmMvhmpP9NChbthhmBH.0ci60ca0hdYJ4V21TvPkrbfN9jqWAcW', 'user', '+7 (895) 017-88-', 'akvamarin06010@gmail.com'),
(5, 'Валерий', '$2y$10$C59E0NRCfZRRz85N4hq5Z.H5cTYueoA.S7NLFAgOG20xq7Ou.TceC', 'user', '+7 (832) 324-23-33', 'ewrohew@fsg.ry'),
(6, 'Роман', '$2y$10$RnZH8H5wv1REJ82L9W9pLOEp.cfxlSEULaBhc.6.xxIa87t/tRP8G', 'user', '+7 (950) 150-92-62', 'kardapoltsev_04@mail.ru'),
(7, 'Кирилл', '$2y$10$UOOkzV2s8Cj5wD95j.xDIeltSHxW/9VD8d5N74S8Z8fi8Rq1ItS.S', 'admin', '+7 (950) 178-81-49', 'akvamarin06010@gmail.com'),
(8, 'Валерия', '$2y$10$Xd.0G8YVAGpRkT8PXMTk4.8vqP7DMmb328uTKyI4hfzfjQspb5g4m', 'user', '+7 (777) 777-77-77', '123@gmail.com'),
(9, 'Екатерина', '$2y$10$8uT5RZIWtcO5AMUzHHyYCO8lEJdAOFynomyvxuI7v/V1J9cBm2.dC', 'user', '+7 (999) 999-99-99', '234@gmail.c0m'),
(10, 'Павел', '$2y$10$rLQSl7DkFARYwYB4pU38D.okjwAQGpBiriUi7NXbMmuHHklPDSBCO', 'user', '+7 (000) 000-00-00', '1@gmail.com'),
(11, 'Никита', '$2y$10$GGKZsB3pVvbaYPHM7sFmP.ibA8QI.OZH1eLRGj1WWs5.N3Dl.vlPO', 'user', '+7 (111) 111-12-22', 'wu@mail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `booking_room`
--
ALTER TABLE `booking_room`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `cat_room`
--
ALTER TABLE `cat_room`
  ADD PRIMARY KEY (`id_room`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_room_2` (`id_room`),
  ADD KEY `id_room_3` (`id_room`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Индексы таблицы `name_addition`
--
ALTER TABLE `name_addition`
  ADD PRIMARY KEY (`id_addition`);

--
-- Индексы таблицы `room_addition`
--
ALTER TABLE `room_addition`
  ADD PRIMARY KEY (`room_addition`,`name_addition`),
  ADD KEY `name_addition` (`name_addition`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking_room`
--
ALTER TABLE `booking_room`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `cat_room`
--
ALTER TABLE `cat_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `name_addition`
--
ALTER TABLE `name_addition`
  MODIFY `id_addition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `booking_room`
--
ALTER TABLE `booking_room`
  ADD CONSTRAINT `booking_room_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `cat_room` (`id_room`),
  ADD CONSTRAINT `booking_room_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking_room` (`id_booking`);

--
-- Ограничения внешнего ключа таблицы `room_addition`
--
ALTER TABLE `room_addition`
  ADD CONSTRAINT `room_addition_ibfk_1` FOREIGN KEY (`name_addition`) REFERENCES `name_addition` (`id_addition`),
  ADD CONSTRAINT `room_addition_ibfk_2` FOREIGN KEY (`room_addition`) REFERENCES `cat_room` (`id_room`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
