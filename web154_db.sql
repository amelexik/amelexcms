-- phpMyAdmin SQL Dump
-- version 3.4.3.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 01 2014 г., 23:15
-- Версия сервера: 5.0.51
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `web154_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `login` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `root` enum('y','n') default 'n',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `login`, `password`, `root`) VALUES
(1, 'Алексей', 'amelex', 'ad38b991e3f82cc6099c54ef69d44d47', 'y'),
(2, 'Директор В.И.', 'admin', '89df2dcc3995004851c1dfd291f5d269', 'n'),
(6, 'Лариса', 'urluglass', 'e9a250fee23ecae6019ebcd6df621f37', 'n');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL auto_increment,
  `structure_master_id` int(11) NOT NULL default '1',
  `add_date` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `structure_master_id`, `add_date`) VALUES
(1, 6, '2011-04-15 21:27:55'),
(2, 6, '2011-04-16 01:17:26');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_ext`
--

CREATE TABLE IF NOT EXISTS `articles_ext` (
  `id` int(11) NOT NULL auto_increment,
  `master_id` int(11) default NULL,
  `lang` int(11) default '1',
  `name` varchar(255) default NULL,
  `translit` varchar(255) default NULL,
  `preview` text,
  `content` text,
  `display` enum('y','n','h') default 'y',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `articles_ext`
--

INSERT INTO `articles_ext` (`id`, `master_id`, `lang`, `name`, `translit`, `preview`, `content`, `display`) VALUES
(1, 1, 1, 'Ура! Наш Интернет-магазин заработал!', 'uranashinternetmagazinzarabotal', '<p style="text-align: justify; ">\r\n	<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p style="text-align: justify; ">\r\n	<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p style="text-align: justify; ">\r\n	<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p style="text-align: justify; ">\r\n	<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; ">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'y'),
(2, 2, 1, 'Клинтон: НАТО пересмотрит доктрину сдерживания', 'klinton-nato-peresmotrit-doktrinu-sderzhivaniya', '<p>\r\n	На неформальной встрече глав внешнеполитических ведомств стран НАТО, прошедшей в минувшуюся пятницу в Берлине, было принято решение о том, что организация приступает к пересмотру своей доктрины обороны и сдерживания.</p>\r\n<p>\r\n	Об этом сообщила госсекретарь США Хиллари Клинтон.</p>\r\n<p>\r\n	Она пояснила цель данного процесса - &quot;определить, какое сочетание обычных, ядерных и противоракетных сил потребуется НАТО на будущее&quot;.</p>', '<p>\r\n	&nbsp;</p>\r\n<div style="font-family: Arial, Verdana, sans-serif; font-size: 12px; color: rgb(34, 34, 34); background-color: rgb(255, 255, 255); ">\r\n	<p>\r\n		На неформальной встрече глав внешнеполитических ведомств стран НАТО, прошедшей в минувшуюся пятницу в Берлине, было принято решение о том, что организация приступает к пересмотру своей доктрины обороны и сдерживания.</p>\r\n	<p>\r\n		Об этом сообщила госсекретарь США Хиллари Клинтон.</p>\r\n	Она пояснила цель данного процесса - &quot;определить, какое сочетание обычных, ядерных и противоракетных сил потребуется НАТО на будущее&quot;.\r\n	<p>\r\n		По словам главы американского внешнеполитического ведомства, она &quot;изложила ключевые принципы, которые будут формировать подход США к данному процессу&quot;.</p>\r\n	&quot;Завершение этого пересмотра будет приоритетом, когда США примут саммит НАТО в 2012 году&quot;, - отметила госсекретарь.\r\n	<p>\r\n		Клинтон: Завершение этого пересмотра будет приоритетом, когда США примут саммит НАТО в 2012 году.<br />\r\n		Она также подтвердила, что значительное внимание было посвящено ситуации в Ливии. По заявлению госсекретаря США, она много говорила с коллегами относительно практических шагов, которые необходимо сделать для того, чтобы изолировать Муамара Каддафи и сконцентрировать усилия на защите ливийского народа.</p>\r\n	Ранее, 8 апреля&nbsp; Североатлантический альянс заявил о необходимости без промедления найти политическое решение кризиса в Ливии.&nbsp;\r\n	<p>\r\n		&nbsp;</p>\r\n</div>', 'y');

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL auto_increment,
  `sorting` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `banners`
--

INSERT INTO `banners` (`id`, `sorting`) VALUES
(1, 2),
(2, 1),
(3, 3),
(4, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `banners_ext`
--

CREATE TABLE IF NOT EXISTS `banners_ext` (
  `id` int(11) NOT NULL auto_increment,
  `master_id` int(11) default NULL,
  `lang` int(11) NOT NULL default '1',
  `title` varchar(256) default NULL,
  `link_url` varchar(256) default NULL,
  `content` text,
  `display` enum('y','n','everywhere') default 'y',
  `display_everywhere` enum('y','n') NOT NULL default 'n',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `banners_ext`
--

INSERT INTO `banners_ext` (`id`, `master_id`, `lang`, `title`, `link_url`, `content`, `display`, `display_everywhere`) VALUES
(1, 1, 1, 'Продукция', NULL, '<p style="text-align: center; ">\r\n	<a href="/"><img alt="" src="/upload/images/pma_tools.jpg" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; width: 286px; height: 207px; " /></a></p>', 'everywhere', 'n'),
(2, 2, 1, 'Оплата и доставка', NULL, '<p style="text-align: center; ">\r\n	<a href="/oplata-i-dostavka/"><img alt="" src="/upload/images/Untitled-1.png" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; width: 286px; height: 207px; " /></a></p>', 'everywhere', 'n'),
(3, 3, 1, 'Контакты1', NULL, '', 'y', 'n'),
(4, 4, 1, 'Тест', NULL, '<p>\r\n	<img alt=\\"\\" src=\\"/upload/images/Untitled-1.png\\" style=\\"width: 286px; height: 207px; \\" /></p>', 'y', 'n');

-- --------------------------------------------------------

--
-- Структура таблицы `constants`
--

CREATE TABLE IF NOT EXISTS `constants` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) default NULL,
  `name` varchar(255) default NULL,
  `title` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `constants`
--

INSERT INTO `constants` (`id`, `group_id`, `name`, `title`) VALUES
(1, 1, 'slogan', 'Слоган'),
(2, 1, 'slogan_strochka_2', 'Слоган строчка - 2'),
(3, 1, 'slogan_strochka_3', 'Слоган строчка - 3'),
(4, 1, 'slogan_strochka_4', 'Слоган строчка - 4'),
(5, 1, 'phone_num_1', 'Номер телефона в шапке сайта - 1'),
(6, 1, 'phone_num_2', 'Номер телефона в шапке сайта - 2'),
(7, 1, 'phone_num_3', 'Номер телефона в шапке сайта - 3'),
(8, 2, 'zaglavie_stranicy', 'Заглавие страницы'),
(9, 2, 'pole_login', 'Поле Логин'),
(10, 2, 'pole_imya', 'Поле Имя'),
(11, 2, 'pole_gorod', 'Поле Город'),
(12, 2, 'pole_klient', 'Поле Клиент'),
(13, 2, 'pole_firma', 'Поле Фирма'),
(14, 2, 'pole_telefon', 'Поле Телефон'),
(15, 2, 'pole_email', 'Поле Email'),
(16, 2, 'pole_parol', 'Поле Пароль'),
(17, 2, 'pole_parol2', 'Поле Пароль2'),
(19, 2, 'pole_kapcha', 'Поле Капча'),
(20, 2, 'knopka_registraciya', 'Кнопка Регистрация'),
(21, 3, 'zaglavie_stranicy_1', 'Заглавие страницы 1'),
(22, 3, 'knopka_pereschitat', 'Кнопка Пересчитать'),
(23, 3, 'knopka_otpravit_zakaz', 'Кнопка Отправить заказ'),
(26, 4, 'zaglavie_formy', 'Заглавие формы'),
(27, 4, 'pole_imya', 'Поле Имя'),
(28, 4, 'pole_email', 'Поле Email'),
(29, 4, 'pole_soobschenie', 'Поле Сообщение'),
(30, 4, 'pole_kapcha', 'Поле Капча'),
(31, 4, 'knopka_otpravki_soobscheniya', 'Кнопка Отправки сообщения'),
(32, 1, 'tekst_ssylok_chitat_dalee', 'Текст ссылок "Читать далее"'),
(33, 1, 'tekst_ssylki_vernutsya_v_novosti', 'Текст ссылки "Вернутся в новости"'),
(34, 5, 'pole_imya', 'Поле Имя'),
(35, 5, 'pole_gorod', 'Поле Город'),
(36, 5, 'pole_telefon', 'Поле Телефон'),
(37, 5, 'pole_email', 'Поле E-mail'),
(38, 5, 'pole_metod_oplaty', 'Поле Метод оплаты'),
(39, 5, 'pole_sposob_dostavki', 'Поле Способ доставки'),
(40, 5, 'pole_udobnoe_vremya_dostavki', 'Поле Удобное время доставки'),
(41, 5, 'pole_osobye_primechaniya', 'Поле Особые примечания'),
(42, 5, 'submit_1', 'Submit 1'),
(43, 6, 'zaglavie_glavnoj_stranicy', 'Заглавие главной страницы'),
(44, 6, 'titl_glavnoj_stranicy', 'Титл главной страницы'),
(45, 6, 'opisanie_glavnoj_stranicy', 'Описание главной страницы'),
(46, 6, 'kljuchevye_slova_glavnoj_stranicy', 'Ключевые слова главной страницы');

-- --------------------------------------------------------

--
-- Структура таблицы `constants_ext`
--

CREATE TABLE IF NOT EXISTS `constants_ext` (
  `id` int(11) NOT NULL auto_increment,
  `master_id` int(11) default NULL,
  `lang` int(11) default '1',
  `value` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `constants_ext`
--

INSERT INTO `constants_ext` (`id`, `master_id`, `lang`, `value`) VALUES
(1, 1, 1, 'Всё для автомобильных стёкол'),
(2, 2, 1, 'Рамы, накладки и клипсы'),
(3, 3, 1, 'Датчики для стёкол и принадлежности'),
(4, 4, 1, 'Инструменты для монтажа и ремонта автомобильных стёкол'),
(5, 5, 1, '+38 (0432) 61-40-11'),
(6, 6, 1, '61-40-11'),
(7, 7, 1, '067-430-31-77'),
(8, 8, 1, 'Регистрация на сайте'),
(9, 9, 1, 'логин'),
(10, 10, 1, 'Ваше имя'),
(11, 11, 1, 'город проживания'),
(12, 12, 1, 'клиент'),
(13, 13, 1, 'фирма'),
(14, 14, 1, 'номер телефона'),
(15, 15, 1, 'email-адрес'),
(16, 16, 1, 'пароль'),
(17, 17, 1, 'повторите пароль'),
(19, 19, 1, 'введите симолы'),
(20, 20, 1, 'Зарегистрироваться'),
(21, 21, 1, 'Корзина товаров'),
(22, 22, 1, 'Пересчитать'),
(23, 23, 1, 'Оформить заказ'),
(26, 26, 1, 'Форма обратной связи'),
(27, 27, 1, 'Ваше имя'),
(28, 28, 1, 'email-адрес'),
(29, 29, 1, 'Текст комментария'),
(30, 30, 1, 'введите симолы'),
(31, 31, 1, 'Отправить сообщение'),
(32, 32, 1, 'Читать далее'),
(33, 33, 1, 'Обзор новостей'),
(34, 34, 1, 'Имя'),
(35, 35, 1, 'Город проживания'),
(36, 36, 1, 'Ваш номер телефона'),
(37, 37, 1, 'электронная почта'),
(38, 38, 1, 'Метод оплаты'),
(39, 39, 1, 'Способ доставки'),
(40, 40, 1, 'Удобное время доставки'),
(41, 41, 1, 'Особые примечания'),
(42, 42, 1, 'продолжить покупку'),
(43, 43, 1, 'Все для автомобильных стёкл - каталог продукции'),
(44, 44, 1, 'Все для автомобильных стёкл! - PMA TOOLS электронный магазин.'),
(45, 45, 1, 'PMA TOOLS электронный магазин по продаже датчиков для стёкол и принадлежностей. Инструменты для монтажа и ремонта автомобильных стёкол, другое.'),
(46, 46, 1, 'автомобильные, стекла, датчики, молдинки, ремонт, инструменты.');

-- --------------------------------------------------------

--
-- Структура таблицы `constants_groups`
--

CREATE TABLE IF NOT EXISTS `constants_groups` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `name` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `constants_groups`
--

INSERT INTO `constants_groups` (`id`, `title`, `name`) VALUES
(1, 'Общее', 'general'),
(2, 'Регистрация на сайте', 'registraciya_na_sajte'),
(3, 'Корзина', 'cart'),
(4, 'Форма обратной связи', 'forma_obratnoj_svyazi'),
(5, 'Подписи к полям форм (разное)', 'other_labels'),
(6, 'Каталог продукции', 'catalog');

-- --------------------------------------------------------

--
-- Структура таблицы `langs`
--

CREATE TABLE IF NOT EXISTS `langs` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `is_default` enum('y','n') NOT NULL default 'n',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `langs`
--

INSERT INTO `langs` (`id`, `title`, `prefix`, `is_default`) VALUES
(1, 'Русский', 'ru', 'y');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL auto_increment,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `status` enum('none','processed','completed') default 'none',
  `user_id` int(11) default NULL,
  `tmp_user_id` int(11) default NULL,
  `delivery_method` varchar(255) default NULL,
  `payment_method` varchar(255) default NULL,
  `time_of_delivery` varchar(255) default NULL,
  `comments` text,
  `total` decimal(8,2) NOT NULL default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=87 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `date`, `status`, `user_id`, `tmp_user_id`, `delivery_method`, `payment_method`, `time_of_delivery`, `comments`, `total`) VALUES
(40, '2012-03-24 13:39:42', 'completed', NULL, 4, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Доставка "Новой почтой" в г. Березань, Киевской области.', '385.00'),
(41, '2012-07-29 07:44:39', 'completed', NULL, 5, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Бровары — Новая почта.Склад №3', '31.50'),
(42, '2012-08-27 06:28:25', 'completed', NULL, 6, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'доставка желательно "Новой Почтой" наложенным платежем', '94.50'),
(43, '2012-09-03 05:12:39', 'completed', 25, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'none', 'none', '', '483.00'),
(44, '2012-09-20 11:53:59', 'completed', NULL, 7, 'курьером', 'Наличными', 'Не имеет значения', '', '165.00'),
(45, '2012-10-15 12:01:00', 'completed', NULL, 8, 'курьером', 'Наличными', '15:00-18:00', '', '2.20'),
(46, '2012-10-17 09:51:30', 'completed', NULL, 9, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '132.00'),
(47, '2012-11-22 11:24:23', 'completed', NULL, 10, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Новая почта, склад №27', '330.00'),
(48, '2012-12-12 08:14:29', 'completed', NULL, 11, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', '12:00-15:00', '', '132.00'),
(49, '2013-01-11 20:56:27', 'completed', NULL, 12, 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', '8:00-12:00', '', '55.00'),
(50, '2013-04-09 11:39:46', 'completed', NULL, 13, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'отделение!!!!!!!Новая Почта, г. Черкассы, ул. Волкова.', '99.00'),
(51, '2013-04-15 12:34:46', 'completed', 41, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', 'Наложенный платеж.\r\n\r\nС уважением, Виктория\r\n0502222600', '880.00'),
(52, '2013-05-13 18:15:28', 'completed', NULL, 14, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Новая Почта, склад № 6, или Интайм, склад "Луганск-Маяк"\r\nесли можно - оплата наложеннім платежом', '132.00'),
(53, '2013-05-15 08:32:51', 'completed', 43, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'none', 'Деньги перечислил - плательщик Тур Елена Н. \r\nОтправьте Новой Почтой на склад №1 г.Полтава, получатель - Тур Александр Николаевич, +380952024862 и отправьте на 87840@mail.ru номер накладной.', '132.00'),
(54, '2013-05-27 07:08:36', 'completed', NULL, 15, 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'Не имеет значения', '', '132.00'),
(55, '2013-06-07 11:59:00', 'completed', NULL, 16, 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'Не имеет значения', 'Добрый день. Хочу приобрести у Вас Гель для установки датчиков «Sensor Tack 1» 1 шт.\r\nРасчет могу произвести по безналу, или по карте приватбанка\r\nДоставку прошу произвести в Кривой Рог Новая почта 4отделение Косиора 7', '132.00'),
(56, '2013-06-12 09:28:29', 'completed', NULL, 17, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '132.00'),
(57, '2013-07-03 05:09:40', 'completed', 41, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', '', '880.00'),
(58, '2013-07-07 10:30:20', 'completed', 44, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'none', 'Буду рад сотрудничать', '264.00'),
(59, '2013-07-09 03:45:53', 'completed', NULL, 18, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '33.00'),
(60, '2013-08-07 11:22:41', 'completed', NULL, 19, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', 'нова почта склад Г,Успенского', '132.00'),
(61, '2013-08-09 06:49:09', 'completed', 47, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', 'новая почта 1-й склад', '220.00'),
(62, '2013-09-08 18:24:04', 'completed', NULL, 20, 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'Не имеет значения', '', '55.00'),
(63, '2013-09-10 11:49:46', 'completed', NULL, 21, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'как исключение наложенный  платеж. Новая почта.', '88.00'),
(64, '2013-09-13 19:58:01', 'completed', NULL, 22, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '330.00'),
(65, '2013-09-21 08:03:47', 'completed', 34, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', 'Г.Кировоград.Новая Почта склад №4,Белоус Игорь', '16.50'),
(66, '2013-09-21 08:18:54', 'completed', 34, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', '', '132.00'),
(67, '2013-09-22 17:43:26', 'completed', NULL, 23, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '132.00'),
(68, '2013-09-27 12:40:58', 'completed', NULL, 24, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '135.60'),
(69, '2013-10-09 10:53:11', 'completed', NULL, 25, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Нова Почта Отделение №55, Киев, Николая Островского 60', '56.50'),
(70, '2013-10-10 09:41:39', 'completed', 52, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', '', '192.10'),
(71, '2013-10-14 04:05:45', 'completed', NULL, 26, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', '15:00-18:00', '', '339.00'),
(72, '2013-11-10 17:44:25', 'completed', NULL, 27, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '135.60'),
(73, '2013-11-15 09:49:34', 'completed', NULL, 28, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Доставка Новая Почта или ИнТайм. Склад г.Судак', '203.40'),
(74, '2013-12-03 15:50:49', 'completed', NULL, 29, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '135.60'),
(75, '2014-01-12 19:58:07', 'completed', NULL, 30, 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'Не имеет значения', '', '135.60'),
(76, '2014-01-14 21:10:16', 'completed', NULL, 31, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '135.60'),
(77, '2014-02-23 15:44:09', 'completed', NULL, 32, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Молдинг на лобовое стекло Рено Кангу 2010 года выпуска.\r\nНовая почта. Южнобережное шоссе, пгт. Гаспра.', '156.00'),
(78, '2014-02-24 09:39:10', 'completed', NULL, 33, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '180.00'),
(79, '2014-03-24 17:55:48', 'completed', NULL, 34, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'обовязково присилати новой почтой! Отделение N 6 ул. Московская, 41 Житомир', '144.00'),
(80, '2014-03-27 11:44:09', 'completed', 66, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', 'Новая Почта, склад №6', '144.00'),
(81, '2014-03-31 07:13:43', 'completed', 67, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', 'Васильков Киевская обл.новая почта склад 2 Дикий Сергей', '144.00'),
(82, '2014-04-03 09:11:35', 'completed', 34, NULL, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', 'Кировоград "Новая почта" склад № 4', '408.00'),
(83, '2014-04-21 13:04:03', 'completed', NULL, 35, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Способ доставки: Новая почта г.Тульчин Винницкая обл. получатель: Огородник Александр\r\n+380930565958', '96.00'),
(84, '2014-05-13 06:38:36', 'completed', NULL, 36, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '192.00'),
(85, '2014-06-01 09:32:14', 'completed', NULL, 37, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Якщо можна то вишліть Новою почтою наложенним платіжом. Дякую', '192.00'),
(86, '2014-06-30 15:45:51', 'processed', NULL, 38, 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '', '160.00');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) default NULL,
  `item_id` int(11) default NULL,
  `category_master_id` int(11) default NULL,
  `eurocode` int(11) default NULL,
  `articul` int(11) default NULL,
  `currency` varchar(255) default NULL,
  `trade_price` decimal(8,2) default '0.00',
  `retail_price` decimal(8,2) default '0.00',
  `name` varchar(255) default NULL,
  `quantity` int(11) default '1',
  `rate` decimal(8,2) default '0.00',
  `price` decimal(8,2) default '0.00',
  `totalPrice` decimal(8,2) default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=119 ;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_id`, `category_master_id`, `eurocode`, `articul`, `currency`, `trade_price`, `retail_price`, `name`, `quantity`, `rate`, `price`, `totalPrice`) VALUES
(67, 40, 31725, 31630, 0, 133601220, 'EUR', '29.00', '35.00', 'Гель для установки датчиков «Sensor Tack 2»', 1, '0.00', '385.00', '385.00'),
(68, 41, 32057, 31626, 0, 5041, 'EUR', '2.00', '3.00', 'Резиновый универсальный профиль для лобового стекла 22 мм с бутилом (23м в бухте)', 1, '0.00', '31.50', '31.50'),
(69, 42, 12703, 31630, 0, 133601200, 'EUR', '8.00', '9.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '94.50', '94.50'),
(70, 44, 12230, 31626, 8540, 23238132, 'EUR', '12.00', '15.00', 'AUDI 100/A6 Sedan/Estate 91-97 WS-Moulding OEM', 1, '0.00', '165.00', '165.00'),
(71, 45, 31790, 31629, 0, 13350215, 'EUR', '0.15', '0.20', 'Апликаторы 130 мм', 1, '0.00', '2.20', '2.20'),
(72, 46, 12703, 31630, 0, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '132.00', '132.00'),
(73, 47, 31622, 31629, 0, 2180206, 'EUR', '26.00', '30.00', 'Круглая стальная струна (0,6 мм) для срезки автостекол 200 м', 1, '0.00', '330.00', '330.00'),
(74, 48, 12703, 31630, 0, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '132.00', '132.00'),
(75, 49, 32871, 31629, 0, 0, 'EUR', '3.00', '5.00', 'Пластиковая вставка в пистолет для клея', 1, '0.00', '55.00', '55.00'),
(76, 50, 11652, 31626, 6001, 184518131, 'EUR', '5.00', '9.00', 'NISSAN ALMERA N15 95-00 WS-MOULDING верхний', 1, '0.00', '99.00', '99.00'),
(77, 51, 32888, 32084, 0, 13345005, 'EUR', '75.00', '80.00', 'Клей PT290 600г 1 час (12шт.) НОВЫЙ +активатор', 1, '0.00', '880.00', '880.00'),
(78, 52, 12703, 31630, 0, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '132.00', '132.00'),
(79, 53, 12703, 31630, 0, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '132.00', '132.00'),
(80, 54, 12343, 31626, 5328, 316018131, 'EUR', '7.00', '12.00', 'MERSEDES 124 85-94 WS-Нижняя накладка', 1, '0.00', '132.00', '132.00'),
(81, 55, 12703, 31630, 0, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '132.00', '132.00'),
(82, 56, 12703, 31630, 0, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '132.00', '132.00'),
(83, 57, 31820, 32084, 0, 13345005, 'EUR', '70.00', '80.00', 'Клей PT290 600г 1 час (12шт.) +активатор', 1, '0.00', '880.00', '880.00'),
(84, 58, 12703, 31630, 0, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 2, '0.00', '132.00', '264.00'),
(85, 59, 31810, 31626, 5021, 5021, 'EUR', '2.00', '3.00', 'Универсальный профиль с бутилом внутри 16мм (30м в бухте)', 1, '0.00', '33.00', '33.00'),
(86, 60, 31679, 31626, 6011, 184328131, 'EUR', '7.00', '12.00', 'NISSAN MICRA K12 03-10 WS-Moulding', 1, '0.00', '132.00', '132.00'),
(87, 61, 31789, 32083, 0, 13345040, 'EUR', '8.00', '10.00', 'Праймер PT 728 -250 мл', 2, '0.00', '110.00', '220.00'),
(88, 62, 2028, 31629, 0, 2180207, 'EUR', '3.00', '5.00', 'Струна витая, позолоченная для срезки автостекла', 1, '0.00', '55.00', '55.00'),
(89, 63, 12044, 31626, 5668, 320018132, 'EUR', '5.00', '8.00', 'MITSUBISHI OUTLANDER 03-07 WS-Moulding верхний', 1, '0.00', '88.00', '88.00'),
(90, 64, 32963, 31626, 6270, 980288111, 'EUR', '22.00', '30.00', 'ISUZU TROOPER 1 (83-92) - WS-Резиновый без вставки', 1, '0.00', '330.00', '330.00'),
(91, 65, 31697, 31626, 5037, 5037, 'EUR', '1.50', '3.00', 'VW T-4 уплотнитель для лобового стекла метражный, 30м в бухте', 1, '0.00', '16.50', '16.50'),
(92, 66, 33342, 31629, 13353305, 13353305, 'EUR', '12.00', '15.00', 'Ножницы для носиков', 1, '0.00', '132.00', '132.00'),
(93, 67, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '132.00', '132.00'),
(94, 68, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '135.60', '135.60'),
(95, 69, 3364, 31631, 13360199, 13360199, 'EUR', '3.00', '5.00', 'Пластырь для датчика дождя Mercedes-210, BMW Е39', 1, '0.00', '56.50', '56.50'),
(96, 70, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '135.60', '135.60'),
(97, 70, 3364, 31631, 13360199, 13360199, 'EUR', '3.00', '5.00', 'Пластырь для датчика дождя Mercedes-210, BMW Е39', 1, '0.00', '56.50', '56.50'),
(98, 71, 31491, 31631, 13345045, 13345045, 'EUR', '26.00', '30.00', 'PT 310 Активатор для датчиков 250 мл', 1, '0.00', '339.00', '339.00'),
(99, 72, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '135.60', '135.60'),
(100, 73, 31816, 31626, 5044, 5044, 'EUR', '1.00', '3.00', 'Универсальный профиль с бутилом внутри 20мм (23м в бухте)', 2, '0.00', '33.90', '67.80'),
(101, 73, 31695, 31626, 5024, 5024, 'EUR', '1.00', '3.00', 'ЕВРО молдинг самоклеющийся двойной, метражный 27м. в бухте', 2, '0.00', '33.90', '67.80'),
(102, 73, 31810, 31626, 5021, 5021, 'EUR', '2.00', '3.00', 'Универсальный профиль с бутилом внутри 16 мм, 30м в бухте', 2, '0.00', '33.90', '67.80'),
(103, 74, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '135.60', '135.60'),
(104, 75, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '135.60', '135.60'),
(105, 76, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '135.60', '135.60'),
(106, 77, 31801, 31626, 7274, 392178131, 'EUR', '8.00', '13.00', 'RENAULT KANGOO III 08- WS-Moulding', 1, '0.00', '156.00', '156.00'),
(107, 78, 31653, 31626, 2434, 115208132, 'EUR', '10.00', '15.00', 'BMW 5 Series E-39 95-03 WS-Moulding', 1, '0.00', '180.00', '180.00'),
(108, 79, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '144.00', '144.00'),
(109, 80, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '144.00', '144.00'),
(110, 81, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '144.00', '144.00'),
(111, 82, 31368, 31629, 10460250, 10460250, 'EUR', '4.00', '6.00', 'Инжектор для ремонта 1шт.', 1, '0.00', '48.00', '48.00'),
(112, 82, 31688, 31626, 6284, 354578132, 'EUR', '5.00', '8.00', 'OPEL ASTRA G 98-04 WS-Moulding верхний мягкий', 1, '0.00', '60.00', '60.00'),
(113, 82, 31695, 31626, 5024, 5024, 'EUR', '1.00', '3.00', 'ЕВРО молдинг самоклеющийся двойной, метражный 27м. в бухте', 15, '0.00', '12.00', '180.00'),
(114, 82, 31816, 31626, 5044, 5044, 'EUR', '1.00', '3.00', 'Универсальный профиль с бутилом внутри 20 мм, 23м в бухте', 10, '0.00', '12.00', '120.00'),
(115, 83, 2028, 31629, 2180207, 2180207, 'EUR', '4.00', '6.00', 'Струна витая, позолоченная для срезки автостекла', 1, '0.00', '96.00', '96.00'),
(116, 84, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '192.00', '192.00'),
(117, 85, 12703, 31630, 133601200, 133601200, 'EUR', '8.00', '12.00', 'Гель для установки датчиков «Sensor Tack 1»', 1, '0.00', '192.00', '192.00'),
(118, 86, 31847, 32082, 13345038, 13345038, 'EUR', '7.00', '10.00', 'Активатор PT750  250мл.', 1, '0.00', '160.00', '160.00');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items1`
--

CREATE TABLE IF NOT EXISTS `order_items1` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) default NULL,
  `brand` varchar(255) default NULL,
  `number` varchar(255) default NULL,
  `name` varchar(255) default NULL,
  `quantity` int(11) default '1',
  `orig_price` decimal(8,2) default '0.00',
  `price` decimal(8,2) default '0.00',
  `currency` varchar(255) default NULL,
  `rate` decimal(8,2) default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `order_items1`
--

INSERT INTO `order_items1` (`id`, `order_id`, `brand`, `number`, `name`, `quantity`, `orig_price`, `price`, `currency`, `rate`) VALUES
(1, 1, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '35.01', '306.16', 'USD', '7.95'),
(2, 1, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '61.24', '535.55', 'USD', '7.95'),
(3, 1, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '29.48', '364.50', 'EUR', '11.24'),
(4, 1, 'VOLVO', '5', 'Щетка стеклоочистителя', 4, '29.29', '362.14', 'EUR', '11.24'),
(5, 2, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '29.48', '364.50', 'EUR', '11.24'),
(6, 2, 'TOYOTA', '2330021010', 'Фильтр топливный', 3, '30.82', '269.52', 'USD', '7.95'),
(7, 3, 'LEXUS', '2330021010', 'Фильтр топливный', 1, '35.01', '306.16', 'USD', '7.95'),
(8, 3, 'LEXUS', '2330021010', 'Фильтр топливный', 1, '29.48', '364.50', 'EUR', '11.24'),
(9, 3, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '30.82', '269.52', 'USD', '7.95'),
(10, 3, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '61.24', '535.55', 'USD', '7.95'),
(11, 4, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '35.01', '306.16', 'USD', '7.95'),
(12, 4, 'LEXUS', '2330021010', 'Фильтр топливный', 1, '29.48', '364.50', 'EUR', '11.24'),
(13, 6, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '35.01', '306.55', 'USD', '7.96'),
(14, 6, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '30.82', '269.86', 'USD', '7.96'),
(15, 6, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '32.00', '280.19', 'USD', '7.96'),
(16, 6, 'LEXUS', '2330021010', 'Фильтр топливный', 1, '35.01', '306.55', 'USD', '7.96'),
(17, 9, 'LEXUS', '2330021010', 'Фильтр топливный', 1, '35.01', '306.55', 'USD', '7.96'),
(18, 12, 'TOYOTA', '2330021010', 'Фильтр топливный', 3, '35.01', '306.55', 'USD', '7.96'),
(19, 12, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '29.48', '366.76', 'EUR', '11.31'),
(20, 13, 'TOYOTA', '2330021010', 'Фильтр топливный', 1, '35.01', '306.55', 'USD', '7.96');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL auto_increment,
  `master_id` int(11) default NULL,
  `lang` int(11) NOT NULL default '1',
  `content` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Таблица для простых текстовых страниц' AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `master_id`, `lang`, `content`) VALUES
(1, 2, 1, '<h1>\r\n	О КОМПАНИИ</h1>\r\n<p>\r\n	Компания &laquo;УРЛУ ГЛАСС - Украина&raquo; является официальным представителем немецкой компании PMA/TOOLS Division Autoglas-Zubehoer AG, лидером на рынке автомобильных аксессуаров, занимается оптовой и розничной продажей различных приспособлений для установки, ремонта автостекла:</p>\r\n<ul>\r\n	<li>\r\n		Датчики, техника</li>\r\n	<li>\r\n		Инструменты</li>\r\n	<li>\r\n		Клипсы</li>\r\n	<li>\r\n		Молдинги</li>\r\n	<li>\r\n		Средства для ремонта датчиков</li>\r\n	<li>\r\n		Средства для ремонта и полировки автостекла</li>\r\n	<li>\r\n		Клеи и очистители для автомобильных стёкол PMA-TOOLS</li>\r\n</ul>\r\n<p>\r\n	Приглашаем к взаимовыгодному сотрудничеству организации, занимающиеся установкой автостекла и продажей автоаксессуаров.</p>\r\n<p>\r\n	Своим партнерам мы предлагаем продукцию высочайшего качества в широком ассортименте по минимальным ценам, а также гарантируем стабильность и гибкую систему скидок.</p>\r\n<p>\r\n	Предприятия, желающие пользоваться дополнительными привилегиями, могут стать официальными дилерами компании &laquo;УРЛУ ГЛАСС - Украина&raquo;.</p>\r\n<p>\r\n	<a href=\\"/feedback/\\">Обращайтесь к нам!</a> Мы всегда рады каждому клиенту.</p>\r\n'),
(4, 9, 1, '<h1>\r\n	ВОЗВРАТ-ОБМЕН</h1>\r\n<p>\r\n	Правила продажи, возврата и обмена товаров регулируются Законом Украины &laquo;О защите прав потребителей&raquo;.</p>\r\n<p>\r\n	<strong>Товары, подлежащие возврату/обмену:</strong></p>\r\n<p>\r\n	Покупатели могут обменять или вернуть купленный товар в течение 14 дней после покупки.</p>\r\n<p>\r\n	Обмену или возврату подлежат товары, не бывшие в употреблении, т.е. в идеальном состоянии без каких-либо следов использования. Покупатель должен предъявить расчетные документы, полученные ним вместе с проданным товаром.&nbsp;</p>\r\n<p>\r\n	Также должны быть сохранены все приложения к товару &ndash; упаковка, этикетка, ярлыки, заводская маркировка, пломбы и т.п.</p>\r\n<p>\r\n	<strong>Товары, не подлежащие возврату/обмену:</strong></p>\r\n<p>\r\n	Товары с отсутствием вышеописанных приложений, не имеющие подтверждающих акт купли-продажи документов, потерявшие свой товарный вид, бывшие в употреблении ни при каких условиях не подлежат возврату или обмену.</p>\r\n<p>\r\n	Возврат/обмен товаров ненадлежащего качества:</p>\r\n<p>\r\n	Покупатель, получивший товар ненадлежащего качества вследствие&nbsp; производственного брака, имеет право:</p>\r\n<ul>\r\n	<li>\r\n		возвратить товар поставщику и потребовать возмещения суммы, уплаченной за товар (денежные средства возвращаются покупателю в течение 10-ти дней):</li>\r\n	<li>\r\n		потребовать безвозмездного устранения недостатков товара или возмещения понесенных Вами денежных затрат на устранение недостатков;</li>\r\n	<li>\r\n		обменять на такой же товар надлежащего качества, при условии его наличия. Если такой товар отсутствует на складе, покупатель может подождать, пока он будет доставлен из завода в Германии (3-4 недели).</li>\r\n</ul>\r\n'),
(2, 3, 1, '<h1>\r\n	ОПЛАТА</h1>\r\n<p>\r\n	Продажа товара осуществляется по 100-процентной предоплате. Для оплаты заказа необходимо перечислить денежные средства на расчетный счет ЧП &laquo;УРЛУ ГЛАСС &ndash; Украина&raquo;.</p>\r\n<p>\r\n	Реквизиты расчетного счета:</p>\r\n<p>\r\n	ЭДРПОУ 37085027<br />\r\n	р/с 26007302378<br />\r\n	ПАТ &quot;Райффайзен Банк Аваль&quot; МФО 380805</p>\r\n<p>\r\n	Доставка заказанного товара на адрес, указанный покупателем, будет организована как только перечисленные деньги появятся на нашем счету.</p>\r\n<p>\r\n	По вопросам оплаты обращайтесь по телефонам: +380432-61-40-11, +38067-43-031-77 в рабочее время: с 9.00 до 17.00.</p>\r\n<h1>\r\n	ДОСТАВКА</h1>\r\n<p>\r\n	Доставка заказанного товара осуществляется в любую область Украины с помощью курьерских служб доставки или автотранспортных компаний (выбирается по согласованию с покупателем).</p>\r\n<p>\r\n	Доставка производится за счет покупателя.</p>\r\n<p>\r\n	Сроки и стоимость доставки определяется компанией, доставляющей товар.</p>\r\n'),
(3, 8, 1, '<p style=\\"text-align: justify; \\">\r\n	Невозможно оспорить тот факт, что автомобиль нуждается в постоянной заботе, ремонте и техобслуживании. Это относится не только к ходовой части, двигателю или колесам, но и к узлам, ответственным за внешний вид машины и безопасность езды. Речь идет о стеклах, которые требуют столь же систематического внимания, как например, регулярные операции по замене масла. Помимо профилактических мероприятий нередко возникает необходимость в ремонте стекол. Наиболее частыми их повреждениями являются трещины и сколы, которые необходимо немедленно устранять. Иногда могут понадобиться манипуляции со стеклами, не связанные с их ремонтом или плановым обслуживанием. Типичный пример &ndash; тонирование, которое производится скорее по эстетическим соображениям, нежели из острой необходимости. Вне зависимости от ситуации, на нашем сайте Вы сможете найти практически <strong>все для автомобильных стекол</strong>, что может понадобиться для их ремонта и обслуживания.</p>\r\n<p style=\\"text-align: justify; \\">\r\n	Помимо эстетической функции, стекла выполняют важную роль в обеспечении безопасности водителя и пассажиров. Именно они защищают салон от осколков, пыли, обломков и прочего дорожного мусора. В случае аварии, именно стекла защищают каркас автомобиля и его крышу от прогиба. Чем меньше на них сколов, а особенно свежих трещин, тем лучше стекла справляются с данной функцией. Компания &laquo;УРЛУ ГЛАСС-Украина&raquo; предлагает широкий <a href=\\"http://pma-tools.com.ua/catalog/avtoaksessuary/himikaty/\\">ассортимент химикатов</a> для ремонта трещин и сколов, в частности, грунтовки и полимеры различной степени вязкости.</p>\r\n<p style=\\"text-align: justify; \\">\r\n	В нашем магазине есть все для автомобильных стекол, что касается их декоративного оформления. В ассортименте насчитывается более полутора сотен <a href=\\"http://pma-tools.com.ua/catalog/avtoaksessuary/moldingi/\\">молдингов</a> для различных моделей авто, <a href=\\"http://pma-tools.com.ua/catalog/avtoaksessuary/klipsy/\\">клипсы</a> для установки всевозможного оборудования и многие другие изделия. Специальный раздел каталога посвящен датчикам дождя, ставшим в последнее время чрезвычайно популярными. Эти полезные оптико-электронные устройства реагируют на увлажнение и подают команды на опускание боковых стекол и начало работы стеклоочистителей, что избавляет хозяев авто от рутинных манипуляций.</p>\r\n<p style=\\"text-align: justify; \\">\r\n	Мы позаботились и о мастерах, которые любят заботиться о своих железных конях самостоятельно. У нас, действительно, можно найти все для автомобильных стекол, в т.ч., <a href=\\"http://pma-tools.com.ua/catalog/avtoaksessuary/instrumenty/\\">инструменты</a> для их ремонта и обслуживания. Как автолюбителей, так и профессиональных мастеров СТО, наверняка заинтересует раздел, в котором представлены очень удобные и недорогие орудия для работы с автомобильными стеклами.</p>\r\n<p style=\\"text-align: justify; \\">\r\n	Вся продукция, имеющаяся в ассортименте магазина, сертифицирована, имеет высокое качество и оригинальное происхождение. Компания &laquo;УРЛУ ГЛАСС-Украина&raquo; является официальным представителем фирмы PMA/TOOLS Division Autoglas-Zubehoer AG - мирового лидера на рынке автомобильных аксессуаров. Мы готовы к сотрудничеству и с удовольствием рассмотрим деловые предложения компаний, заинтересованных в поставках качественной продукции по выгодным ценам!</p>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(5, 4, 1, '<h1>\r\n	КОНТАКТЫ</h1>\r\n<p>\r\n	Если Вас заинтересовала продукция, представленная в нашем каталоге, либо возникли вопросы о товаре или об условиях его приобретения, обращайтесь к нам.</p>\r\n<p>\r\n	Чтобы связаться с менеджером компании &laquo;УРЛУ ГЛАСС &ndash; Украина&raquo;, выберите наиболее удобный для Вас способ:</p>\r\n<p>\r\n	1. Позвонить в рабочее время (с 9.00 до 17.00):<br />\r\n	- по телефонам: +380432-61-40-11; +38067-43-031-77; urluglass@gmail<br />\r\n	- по скайпу (SKYPE) - larisa-blits.<br />\r\n	2. Отправить сообщение в форме обратной связи. Запрос будет обработан в течение 30-60 минут в часы рабочего дня.<br />\r\n	3. Написать сообщение в онлайн-чат (ICQ 491408596).<br />\r\n	4. Бесплатно воспользоваться услугой &laquo;Обратный звонок&raquo;.</p>\r\n<p>\r\n	5. Написать сообщение на&nbsp;<span style=\\"color:#000000;\\">E-mail:</span><span style=\\"color:#0000ff;\\"> urluglass@gmail.com; &nbsp;vinautoglass@mail.ru</span></p>\r\n<p>\r\n	График работы интернет &ndash; магазина &laquo;УРЛУ ГЛАСС &ndash; Украина&raquo;:</p>\r\n<p>\r\n	&bull; Понедельник &ndash; пятница: с 9.00 до 17.00.<br />\r\n	&bull; Выходные: суббота, воскресенье, официальные государственные праздники.</p>\r\n<p>\r\n	Если Вы сделали заявку в выходные или праздничные дни, его обработка будет выполнена утром первого рабочего дня. Для удобства Вы можете воспользоваться корзиной заказов, работающей круглосуточно.<br />\r\n	Специалисты компании &laquo;УРЛУ ГЛАСС &ndash; Украина&raquo; дадут Вам качественную консультацию и сделают все для того, чтобы сотрудничество с нами было для Вас выгодным и приятным.</p>\r\n'),
(6, 7, 1, '<p>\r\n	Фирма <strong><a href=\\"http://pma-tools.net/\\">&laquo;PMA/TOOLS DIVISION &nbsp;AG&raquo;</a></strong> &mdash; крупнейшая Европейская компания, производящая инструмент и расходные материалы для вклейки автомобильных стёкол. Она является дочерней фирмой Германского холдинга &laquo;Autoglas-Zubehor AG&raquo;, европейского лидера в производстве стёкол для автомобилей. До 1993 года PMA/TOOLS была всего лишь одним из многочисленных отделов холдинга &laquo;Autoglas-Zubehor AG&raquo;, сейчас это отдельное, самостоятельное крупное предприятие, имеющее свои собственные представительства в нескольких Европейских странах. &laquo;PMA/TOOLS DIVISION AG&raquo; производит на своих собственных мощностях и на мощностях своих партнёров-производителей полный спектр товаров, необходимых для выполнения ремонтных работ по профессиональной замене автомобильных стёкол: инструмент, расходные материалы, различные приспособления, молдинги, датчики, клипсы. Фирма &laquo;PMA/TOOLS DIVISION AG&raquo; является поставщиком многих известных торговых фирм и компаний-производителей стекольных герметиков. Фирма &laquo;PMA/TOOLS DIVISION AG&raquo; производит товары для профессионалов и только самого высочайшего качества, каждый из этих товаров сертифицирован Немецким экспертным&nbsp;агентством TUV.</p>\r\n<p>\r\n	<o:p></o:p></p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL auto_increment,
  `album_master_id` int(11) default NULL,
  `file` varchar(256) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `album_master_id`, `file`) VALUES
(1, 1, '19cbb7034ab17dc1c5ddcc37c58be398.jpg'),
(2, 1, '8f0ff20992dec45bb6692a97bc5cadc5.jpg'),
(3, 1, 'ce6ffa830cca0d78160463bd98783cdc.jpg'),
(4, 1, 'fd2bd50f144ed47f5e6ad9187730aedd.jpg'),
(5, 1, '1989663ae1dd06c3cd6f9e792b83fdcd.jpg'),
(6, 1, '173a6c15de3fca057f1a8fbc8995988c.jpg'),
(7, 1, 'e638780e278c1d80efa1822109617f94.jpg'),
(8, 1, 'c18f1e14e8b20ac65f7a3db7c8df1def.jpg'),
(9, 1, 'afe96d4a35a1c2299edbe2e2b36f192e.jpg'),
(10, 1, 'cd5effffdd73497b0efe78e6c8a28876.jpg'),
(11, 2, '75a8164b74041af79d74d7451751a16c.jpg'),
(12, 2, '363defb8d9a48d53c50d07187b3c1333.jpg'),
(13, 2, 'c4295eaf7df706825e4d8bc997fbe57b.jpg'),
(14, 2, '203ba1e3d326d0977b8e08f3c4e20ab6.jpg'),
(15, 2, '4e1449d9ff4184523bf0dc60ee44e150.jpg'),
(16, 2, '78c47c1177b4602b6d5da46f0b56dcc8.jpg'),
(17, 2, '00ecc02e1c7738a7fffd1cc4c6532608.jpg'),
(18, 3, '7cfbcea42a45ba8e1d4e4712ce3c126d.jpg'),
(19, 3, '22b47a0233138b1cdb054a9126af1632.jpg'),
(20, 3, '1fd1f6c452cd21e32cb6cea0bca6a243.jpg'),
(21, 3, '5d099056762dae277231361edd8f7c5e.jpg'),
(22, 3, 'ccb20e570dd6c365f1b88cbbe6d87fea.jpg'),
(23, 3, '8aafccadecc8f0db69ae1800a84276c5.jpg'),
(24, 3, 'ae446685c52269f1138cc97f0970f51e.jpg'),
(25, 3, 'a54b4cbf7e7b8e7f76b8e0ed3443b457.jpg'),
(26, 3, '880361b660d102f8565ae5796443ea57.jpg'),
(27, 3, 'ddba773760ae9311a9fc559a968acdb8.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `photoalbums`
--

CREATE TABLE IF NOT EXISTS `photoalbums` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `add_date` timestamp NULL default CURRENT_TIMESTAMP,
  `display` enum('y','n','h') default 'y',
  `structure_master_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `photoalbums`
--

INSERT INTO `photoalbums` (`id`, `add_date`, `display`, `structure_master_id`) VALUES
(1, '2011-04-14 18:37:26', 'y', 5),
(2, '2011-04-14 18:49:03', 'y', 5),
(3, '2011-04-16 00:04:42', 'y', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `photoalbums_ext`
--

CREATE TABLE IF NOT EXISTS `photoalbums_ext` (
  `id` int(11) NOT NULL auto_increment,
  `master_id` int(11) default NULL,
  `title` varchar(256) default NULL,
  `description` text,
  `lang` int(11) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `photoalbums_ext`
--

INSERT INTO `photoalbums_ext` (`id`, `master_id`, `title`, `description`, `lang`) VALUES
(1, 1, 'Фотки', NULL, 1),
(2, 2, 'Разные картинки', NULL, 1),
(3, 3, 'Протестируем еще раз...', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `photo_ext`
--

CREATE TABLE IF NOT EXISTS `photo_ext` (
  `id` int(11) NOT NULL auto_increment,
  `photo_master_id` int(11) default NULL,
  `lang` int(11) default '1',
  `title` varchar(256) default NULL,
  `description` varchar(256) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `photo_ext`
--

INSERT INTO `photo_ext` (`id`, `photo_master_id`, `lang`, `title`, `description`) VALUES
(1, 1, 1, NULL, '1--ru'),
(2, 2, 1, NULL, '2--ru'),
(3, 3, 1, NULL, '3--ru'),
(4, 4, 1, NULL, '4--ru'),
(5, 5, 1, NULL, '5--ru'),
(6, 6, 1, NULL, '6--ru'),
(7, 7, 1, NULL, '7--ru'),
(8, 8, 1, NULL, '8--ru'),
(9, 9, 1, NULL, '9--ru'),
(10, 10, 1, NULL, '10--ru'),
(11, 11, 1, NULL, '11--ru'),
(12, 12, 1, NULL, '12--ru'),
(13, 13, 1, NULL, '13--ru'),
(14, 14, 1, NULL, '14--ru'),
(15, 15, 1, NULL, '15--ru'),
(16, 16, 1, NULL, '16--ru'),
(17, 17, 1, NULL, '17--ru'),
(18, 18, 1, NULL, '18--ru'),
(19, 19, 1, NULL, '19--ru'),
(20, 20, 1, NULL, '20--ru'),
(21, 21, 1, NULL, '21--ru'),
(22, 22, 1, NULL, '22--ru'),
(23, 23, 1, NULL, '23--ru'),
(24, 24, 1, NULL, '24--ru'),
(25, 25, 1, NULL, '25--ru'),
(26, 26, 1, NULL, '26--ru'),
(27, 27, 1, NULL, '27--ru');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL auto_increment,
  `item_id` int(11) default NULL,
  `category_master_id` int(11) default NULL,
  `display` enum('y','n') default 'y',
  `eurocode` varchar(166) default NULL,
  `articul` varchar(50) default NULL,
  `currency` varchar(10) default NULL,
  `trade_price` decimal(8,2) default '0.00',
  `retail_price` decimal(8,2) default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=420 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `item_id`, `category_master_id`, `display`, `eurocode`, `articul`, `currency`, `trade_price`, `retail_price`) VALUES
(1, 31492, 31631, 'y', '13345046', '13345046', 'EUR', '44.00', '50.00'),
(2, 31491, 31631, 'y', '13345045', '13345045', 'EUR', '26.00', '30.00'),
(3, 31487, 31631, 'y', '133601293/7260ASNH, 6011ASNH', '133601293/7260ASNH', 'EUR', '15.00', '20.00'),
(4, 31488, 31631, 'y', '13360151-5', '13360151-5', 'EUR', '7.00', '9.00'),
(5, 31757, 31631, 'y', '13360151', '13360151', 'EUR', '7.00', '9.00'),
(6, 31758, 31631, 'y', '13360150', '13360150', 'EUR', '5.00', '7.00'),
(7, 31619, 31631, 'y', '133601945', '13360194-5', 'EUR', '3.00', '5.00'),
(8, 12076, 31631, 'y', '13360195', '13360195-5', 'EUR', '3.00', '5.00'),
(9, 31620, 31631, 'y', '13360198', '13360198', 'EUR', '3.00', '5.00'),
(10, 11653, 31631, 'y', '13360196', '13360196', 'EUR', '3.00', '5.00'),
(11, 3364, 31631, 'y', '13360199', '13360199', 'EUR', '3.00', '5.00'),
(12, 31698, 31631, 'y', '13360193', '13360193', 'EUR', '4.00', '6.00'),
(13, 31489, 31631, 'y', '13360197', '13360197', 'EUR', '4.00', '6.00'),
(14, 31790, 31629, 'n', '13350215LS', '13350215LS', 'EUR', '0.15', '0.20'),
(15, 31706, 31629, 'y', '02180108', '02180108', 'EUR', '20.00', '25.00'),
(16, 31704, 31629, 'y', '02180104', '02180104', 'EUR', '12.00', '17.00'),
(17, 31617, 31629, 'y', '02170203', '02170203-10', 'EUR', '4.00', '6.00'),
(18, 31368, 31629, 'y', '10460250', '10460250', 'EUR', '4.00', '6.00'),
(19, 32055, 31629, 'y', '01065024', '01065024', 'EUR', '29.00', '35.00'),
(20, 32054, 31629, 'y', '01065064', '01065064', 'EUR', '29.00', '35.00'),
(21, 32056, 31629, 'y', '01065065', '01065065', 'EUR', '29.00', '35.00'),
(22, 31493, 31629, 'y', '13501504', '13501504', 'EUR', '24.00', '28.00'),
(23, 31622, 31629, 'y', '02180206', '02180206', 'EUR', '26.00', '30.00'),
(24, 31615, 31629, 'y', '01020104', '01020104', 'EUR', '8.00', '10.00'),
(25, 31621, 31629, 'n', '13360403', '13360403', 'EUR', '0.25', '0.50'),
(26, 31709, 31629, 'y', '09333102', '09333102', 'EUR', '40.00', '50.00'),
(27, 31708, 31629, 'y', '09333099', '09333099', 'EUR', '50.00', '60.00'),
(28, 31726, 31629, 'y', '09333105', '09333105', 'EUR', '135.00', '160.00'),
(29, 31495, 31629, 'y', '10453817', '10453817', 'EUR', '5.00', '6.00'),
(30, 31618, 31629, 'y', '04212901', '04212901', 'EUR', '42.00', '55.00'),
(31, 31705, 31629, 'y', '04340433', '04340433', 'EUR', '85.00', '95.00'),
(32, 31703, 31629, 'y', '02180103', '02180103', 'EUR', '12.00', '18.00'),
(33, 31494, 31629, 'y', '10453810', '10453810', 'EUR', '7.00', '10.00'),
(34, 2028, 31629, 'y', '02180207', '02180207', 'EUR', '4.00', '6.00'),
(35, 31681, 31629, 'y', '02181602', '02181602', 'EUR', '7.00', '12.00'),
(36, 31707, 31629, 'y', '02180205R', '02180205R', 'EUR', '9.00', '15.00'),
(37, 31623, 31629, 'y', '001070103', '01070103', 'EUR', '19.00', '22.00'),
(38, 31616, 31629, 'y', '01070202', '01070202', 'EUR', '12.00', '16.00'),
(39, 31486, 31629, 'y', '10453905', '10453905', 'EUR', '77.00', '90.00'),
(40, 2029, 31629, 'y', '10443700', '10443700', 'EUR', '807.00', '940.00'),
(41, 31761, 31628, 'y', '5637AKCR', '322308141/5637AKCR', 'EUR', '3.00', '5.00'),
(42, 31759, 31628, 'y', '8278AKCS', '473468141/8278AKCS', 'EUR', '3.00', '5.00'),
(43, 31760, 31628, 'y', '8259AKCH', '473718141/8259AKCH', 'EUR', '5.00', '7.00'),
(44, 31762, 31628, 'y', '8541AKCH', '524318141/8541AKCH', 'EUR', '2.00', '3.00'),
(45, 31763, 31628, 'y', '8541AKSH', '524318161/8541AKSH', 'EUR', '2.00', '4.00'),
(46, 31765, 31628, 'n', '8535ASCS', '3106008/8535ASCS', 'EUR', '0.25', '0.50'),
(47, 31699, 31628, 'n', '2426ASCS1, 2427', '3101002/ 2426ASCS1', 'EUR', '0.25', '0.50'),
(48, 2424, 31628, 'n', '2426ASCS; 2427ASCS', '3101001/ 2426ASCS 2427', 'EUR', '0.25', '0.50'),
(49, 31700, 31628, 'n', '2427ASSS', '7101001/ 2427ASSS', 'EUR', '0.25', '0.50'),
(50, 31767, 31628, 'n', '2434 ASCSB', '7101002/2434 ASCSB', 'EUR', '0.25', '0.50'),
(51, 31764, 31628, 'n', '2433ACS', '3101008/2433ASCS', 'EUR', '0.50', '0.80'),
(52, 31768, 31628, 'n', '6407002E/B1456/1250', '6407002E/B1456/1250', 'EUR', '0.15', '0.25'),
(53, 31770, 31628, 'n', '6407002Е/В145 6-1/1250', '6407002E/B1456-1/1250', 'EUR', '0.15', '0.25'),
(54, 31766, 31628, 'n', '4000704', '4000704', 'EUR', '0.25', '0.50'),
(55, 12230, 31626, 'y', '8540ASMS', '023238132/ 8540ASMS', 'EUR', '12.00', '15.00'),
(56, 12031, 31626, 'y', '8547ASMST', '024538131/ 8547ASMST', 'EUR', '7.00', '12.00'),
(57, 12227, 31626, 'y', '8557ASMST', '8557ASMST', 'EUR', '7.00', '12.00'),
(58, 11457, 31626, 'y', '8578ASMST', '8578', 'EUR', '8.00', '13.00'),
(59, 31651, 31626, 'y', '8546ASMS', '023408131/ 8546ASMS', 'EUR', '165.00', '180.00'),
(60, 11920, 31626, 'y', '2431ASMST', '117258132/ 2431ASMST', 'EUR', '6.00', '10.00'),
(61, 31544, 31626, 'y', '2436ASMS', '117328132/ 2436ASMS', 'EUR', '10.00', '14.00'),
(62, 12034, 31626, 'y', '2445ASMST', '115238131/ 2445ASMST', 'EUR', '14.00', '19.00'),
(63, 2731, 31626, 'y', '2433ASMST', '118168132/ 2433ASMST', 'EUR', '8.00', '12.00'),
(64, 12036, 31626, 'y', '2443ASMST', '118188131/ 2443ASMST', 'EUR', '22.00', '28.00'),
(65, 31652, 31626, 'y', '2426AKMS', '115158131/ 2426AKMS', 'EUR', '135.00', '145.00'),
(66, 31653, 31626, 'y', '2434ASMS', '115208132/ 2434ASMS', 'EUR', '10.00', '15.00'),
(67, 2811, 31626, 'y', '2439ASMRT', '110258131/ 2439ASMRT', 'EUR', '14.00', '19.00'),
(68, 31671, 31626, 'y', '3022ASMS', '131578131/ 3022ASMS', 'EUR', '8.00', '12.00'),
(69, 31676, 31626, 'y', '3017ASMH', '131518131/ 3017ASMH', 'EUR', '6.00', '9.00'),
(70, 12033, 31626, 'y', '2727ASMH', '171218131/ 2727ASMH', 'EUR', '11.00', '15.00'),
(71, 31654, 31626, 'y', '2731ASMHT', '170148131/ 2731ASMHT', 'EUR', '4.00', '8.00'),
(72, 31655, 31626, 'y', '2726ASMH', '173218131/ 2726ASMH', 'EUR', '9.00', '14.00'),
(73, 31656, 31626, 'y', '2730ASMTT', '173228131/ 2730ASMTT', 'EUR', '3.00', '5.00'),
(74, 12032, 31626, 'y', '2725ASMHT', '176258131/ 2725ASMHT', 'EUR', '5.00', '9.00'),
(75, 3103, 31626, 'y', '2729ASMV', '176318131/ 2729ASMV', 'EUR', '10.00', '15.00'),
(76, 31657, 31626, 'y', '3003ASMH', '255068121/ 3003ASMH', 'EUR', '8.00', '12.00'),
(77, 31658, 31626, 'y', '3005ASMS', '255148121/ 3005ASMS', 'EUR', '9.00', '13.00'),
(78, 31659, 31626, 'y', '3006ASMH', '256018131/ 3006ASMH', 'EUR', '6.00', '10.00'),
(79, 31661, 31626, 'y', '3004ASMH', '255108121/ 3004ASMH', 'EUR', '9.00', '13.00'),
(80, 31691, 31626, 'y', '4625ASML', '900698111/ 4625ASML', 'EUR', '75.00', '80.00'),
(81, 31793, 31626, 'y', '4624ASRL1', '900678112/ 4624ASRL1', 'EUR', '35.00', '40.00'),
(82, 31694, 31626, 'y', '4635ASML', '900818132/ 4635ASML', 'EUR', '55.00', '63.00'),
(83, 31690, 31626, 'y', '6523ASMV1H', '360008121/ 6523ASMV1H', 'EUR', '10.00', '15.00'),
(84, 31794, 31626, 'y', '3741ASMV', '686148121/ 3741ASMV', 'EUR', '8.00', '12.00'),
(85, 31685, 31626, 'y', '6522ASMV', '367208131/ 6522ASMV', 'EUR', '13.00', '18.00'),
(86, 12197, 31626, 'y', '3544ASRH', '226158111/ 3544ASRH', 'EUR', '13.00', '18.00'),
(87, 31552, 31626, 'y', '3562ASMH', '226238133/ 3562ASMH', 'EUR', '10.00', '15.00'),
(88, 31963, 31626, 'y', '3556ASMH', '224428131/ 3556ASMH', 'EUR', '15.00', '20.00'),
(89, 12037, 31626, 'y', '3556ASMH1 ', '3556ASMH1', 'EUR', '8.00', '12.00'),
(90, 31553, 31626, 'y', '3563ASMV', '227158133/ 3563ASMV', 'EUR', '10.00', '15.00'),
(91, 12237, 31626, 'y', '3554ASMH', '227018131/ 3554ASMH', 'EUR', '8.00', '12.00'),
(92, 31815, 31626, 'y', '5062-20', '5062-20', 'EUR', '2.50', '3.00'),
(93, 31547, 31626, 'y', '3546ASMHT', '223468132/ 3546ASMHT', 'EUR', '5.00', '7.00'),
(94, 12035, 31626, 'y', '3543ASMH', '223408121/ 3543ASMH', 'EUR', '3.00', '5.00'),
(95, 12236, 31626, 'y', '3543AKMH', '223408122/ 3543AKMH', 'EUR', '5.00', '8.00'),
(96, 31663, 31626, 'y', '3743ASMV', '690018131/ 3743ASMV', 'EUR', '11.00', '15.00'),
(97, 31662, 31626, 'y', '3731ASMV2H', '691218122/ 3731ASMV2H', 'EUR', '6.00', '9.00'),
(98, 31964, 31626, 'y', '3739ASMVT1', '691288135/ 3739ASMVT6С', 'EUR', '7.00', '10.00'),
(99, 12239, 31626, 'y', '5009', '5009', 'EUR', '1.00', '2.00'),
(100, 31664, 31626, 'y', '3960ASMS', '244828131/ 3960ASMS', 'EUR', '25.00', '30.00'),
(101, 31665, 31626, 'y', '3962ASMR', '240958133/ 3962ASMR', 'EUR', '14.00', '18.00'),
(102, 31666, 31626, 'y', '4128ASMH', '253418131/ 4128ASMH', 'EUR', '7.00', '10.00'),
(103, 31667, 31626, 'y', '4125ASMH', '253218131/ 4125ASMH', 'EUR', '9.00', '15.00'),
(104, 12040, 31626, 'y', '4117ASMS', '251898131/ 4117ASMS', 'EUR', '18.00', '22.00'),
(105, 31817, 31626, 'y', '4421ASMS', '250438131/ 4421ASMS', 'EUR', '15.00', '20.00'),
(106, 31675, 31626, 'y', '5174ASMH', '304558131/ 5174ASMH', 'EUR', '14.00', '18.00'),
(107, 31668, 31626, 'y', '5151ASMH', '301218121/ 5151ASMH', 'EUR', '5.00', '9.00'),
(108, 31669, 31626, 'y', '5165ASMV', '301768131/ 5165ASMV', 'EUR', '10.00', '15.00'),
(109, 31545, 31626, 'y', '5165ASMH', '301768131/ 5165ASMH', 'EUR', '7.00', '12.00'),
(110, 31546, 31626, 'y', '5166ASMH', '303238131/ 5166ASMH', 'EUR', '8.00', '12.00'),
(111, 31670, 31626, 'y', '5155ASMH', '303208131/ 5155ASMH', 'EUR', '10.00', '15.00'),
(112, 31674, 31626, 'y', '5164ASMS', '304528131/ 5164ASMS', 'EUR', '10.00', '14.00'),
(113, 31672, 31626, 'y', '5141ASMS', '301478121/ 5141ASMS', 'EUR', '45.00', '50.00'),
(114, 31673, 31626, 'y', '5141ASMSC', '301478122/ 5141ASMSC', 'EUR', '30.00', '35.00'),
(115, 31677, 31626, 'y', '5438ASMV', '753438132/ 5438ASMV', 'EUR', '17.00', '20.00'),
(116, 12343, 31626, 'y', '5328ASGSB', '316018131/ 5328ASGSB', 'EUR', '7.00', '12.00'),
(117, 12341, 31626, 'y', '5334ASMST', '313258134/ 5334ASMST', 'EUR', '10.00', '15.00'),
(118, 31549, 31626, 'y', '5334ASMST1C', '313258133/ 5334ASMST1C', 'EUR', '21.00', '26.00'),
(119, 31550, 31626, 'y', '5351ASMST', '313298131/ 5351ASMST', 'EUR', '6.00', '10.00'),
(120, 31753, 31626, 'y', '5439ASMV', '753368131/5439ASMV', 'EUR', '23.00', '26.00'),
(121, 12043, 31626, 'y', '5427ASMV', '753338121/ 5427ASMV/8552', 'EUR', '10.00', '14.00'),
(122, 31811, 31626, 'y', '5035', '5035', 'EUR', '3.00', '5.00'),
(123, 31542, 31626, 'y', '5641ASMHT', '322178131/ 5641ASMHT', 'EUR', '3.00', '5.00'),
(124, 31795, 31626, 'y', '5679ASMPT', '570568131/ 5679ASMPT', 'EUR', '7.00', '10.00'),
(125, 12046, 31626, 'y', '5642ASMHT', '321168131/ 5642ASMHT', 'EUR', '3.00', '5.00'),
(126, 12044, 31626, 'y', '5668ASMRT', '320018132/ 5668ASMRT', 'EUR', '5.00', '8.00'),
(127, 3371, 31626, 'y', '5637ASMRT', '322308131/ 5637ASMRT', 'EUR', '11.00', '15.00'),
(128, 31548, 31626, 'y', '5637ASMRB', '322308132/ 5637ASMRB', 'EUR', '3.00', '5.00'),
(129, 31796, 31626, 'y', '5650ASMR', '325288132/ 5650ASMR', 'EUR', '18.00', '23.00'),
(130, 12045, 31626, 'y', '5658ASMVT', '322378131/ 5658ASMVT', 'EUR', '4.00', '7.00'),
(131, 11652, 31626, 'y', '6001ASMHT', '184518131/ 6001ASMHT', 'EUR', '5.00', '9.00'),
(132, 31543, 31626, 'y', '6015AKMST', '182418131/ 6015AKMST', 'EUR', '8.00', '12.00'),
(133, 31679, 31626, 'y', '6011ASMH', '184328131/ 6011ASMH', 'EUR', '8.00', '12.00'),
(134, 31797, 31626, 'y', '6006ASMR', '660458131/ 6006ASMR', 'EUR', '25.00', '28.00'),
(135, 31541, 31626, 'y', '5981ASMHT', '183318131/ 5981ASMHT', 'EUR', '6.00', '10.00'),
(136, 12219, 31626, 'y', '6002ASMHT', '185318111/ 6002ASMHT', 'EUR', '11.00', '16.00'),
(137, 31680, 31626, 'y', '6020ASMS', '185388132/ 6020ASMS', 'EUR', '26.00', '32.00'),
(138, 31798, 31626, 'y', '6044ASMR', '186018132/ 6044ASMR', 'EUR', '18.00', '23.00'),
(139, 31682, 31626, 'y', '6018ASMR', '663018132/ 6018ASMR', 'EUR', '35.00', '42.00'),
(140, 31799, 31626, 'y', '6047ASMR', '663028132/ 6047ASMR', 'EUR', '15.00', '20.00'),
(141, 31683, 31626, 'y', '6291ASMV', '350218121/ 6291ASMV', 'EUR', '8.00', '15.00'),
(142, 11167, 31626, 'y', '6257ASMH', '354518121/ 6257ASMH', 'EUR', '9.00', '13.00'),
(143, 31688, 31626, 'y', '6284ASMHT', '354578132/ 6284ASMHT', 'EUR', '5.00', '8.00'),
(144, 12220, 31626, 'y', '6284BSME', '354608211 /6284BSME', 'EUR', '9.00', '13.00'),
(145, 12047, 31626, 'y', '6290AKMH2F', '356408101/ 6290AKMH2F', 'EUR', '7.00', '12.00'),
(146, 31551, 31626, 'y', '6287ASMR', '801178131/ 6287ASMR', 'EUR', '4.00', '7.00'),
(147, 31965, 31626, 'y', '6247BSMH', '354428221/ 6247BSMH', 'EUR', '8.00', '10.00'),
(148, 31660, 31626, 'y', '6247ASMH', '354428121/ 6247ASMH', 'EUR', '7.00', '11.00'),
(149, 31678, 31626, 'y', '5002', '5002', 'EUR', '1.50', '2.50'),
(150, 11445, 31626, 'y', '6296ASMV', '802018131/ 6296ASMV', 'EUR', '8.00', '12.00'),
(151, 12048, 31626, 'y', '6288ASMVT', '350418132/ 6288ASMVT', 'EUR', '5.00', '9.00'),
(152, 31686, 31626, 'y', '6252ASMS', '353258121/ 6252ASMS', 'EUR', '9.00', '11.00'),
(153, 12503, 31626, 'y', '6261AKMH6A', '353288102/ 6261AKMH6A', 'EUR', '41.00', '47.00'),
(154, 31800, 31626, 'y', '6253ASMH', '355218122/ 6253ASMH', 'EUR', '8.00', '13.00'),
(155, 31684, 31626, 'y', '6253ASMH', '355218121/ 6253ASMH', 'EUR', '9.00', '15.00'),
(156, 3372, 31626, 'y', '6277ASMHT', '355248136/ 6277ASMHT', 'EUR', '6.00', '10.00'),
(157, 31813, 31626, 'y', '5058-20', '5058-20', 'EUR', '2.00', '3.00'),
(158, 12200, 31626, 'y', '6300ASMVT', '802118131/ 6300ASMVT', 'EUR', '7.00', '11.00'),
(159, 31692, 31626, 'y', '6537AKMV', '812018131/6537AKMV/65201', 'EUR', '15.00', '19.00'),
(160, 31693, 31626, 'y', '6537ASMV', '812018132/ 6537ASMV', 'EUR', '14.00', '18.00'),
(161, 12228, 31626, 'y', '7248AKMHG', '393278132 /7248AKMH', 'EUR', '20.00', '25.00'),
(162, 3373, 31626, 'y', '7246ASMV1H', '392168137/ 7246ASMV1H', 'EUR', '8.00', '12.00'),
(163, 31801, 31626, 'y', '7274ASMV', '392178131/ 7274ASMV', 'EUR', '8.00', '13.00'),
(164, 31689, 31626, 'y', '7233ASML', '821058131/ 7233ASML', 'EUR', '15.00', '20.00'),
(165, 12049, 31626, 'y', '7260ASMH', '397258131/ 7260ASMH', 'EUR', '10.00', '15.00'),
(166, 12229, 31626, 'y', '7257ASMV', '397288132/ 7257ASMV', 'EUR', '10.00', '14.00'),
(167, 11382, 31626, 'y', '7242ASML', '821718131/ 7242ASML', 'EUR', '14.00', '19.00'),
(168, 31802, 31626, 'y', ' 7506ASRL', '830638111/ 7506ASRL', 'EUR', '55.00', '65.00'),
(169, 31819, 31626, 'y', '7807ASMHT', '430458131/ 7807ASMHT', 'EUR', '8.00', '13.00'),
(170, 31818, 31626, 'y', '7807AKMHB', '430458132/ 7807ASMHB', 'EUR', '9.00', '14.00'),
(171, 12050, 31626, 'y', '7928ASMR', '441028132/ 7928ASMR', 'EUR', '21.00', '28.00'),
(172, 31803, 31626, 'y', '7934ASMR', '441038131/ 7934ASMR', 'EUR', '15.00', '20.00'),
(173, 12221, 31626, 'y', '7923ASMRT', '441008131/ 7923ASMRT', 'EUR', '7.00', '12.00'),
(174, 31804, 31626, 'y', '7932ASMH', '440788131/ 7932ASMH', 'EUR', '12.00', '17.00'),
(175, 31805, 31626, 'y', '8032ASMR', '558058132/ 8032ASMR', 'EUR', '14.00', '18.00'),
(176, 12198, 31626, 'y', '8346ASMH', '470368132/ 8346ASMH', 'EUR', '13.00', '18.00'),
(177, 12199, 31626, 'y', ' 8305ASMH', '470318132/ 8305ASMH', 'EUR', '7.00', '11.00'),
(178, 2568, 31626, 'y', '8333ASMVT', '470348132/ 8333ASMVT', 'EUR', '4.00', '8.00'),
(179, 3377, 31626, 'y', ' 8339ASMS', '473508131/ 8339ASMS', 'EUR', '8.00', '12.00'),
(180, 12055, 31626, 'y', '8278ASMSTC', '473468131/ 8278ASMSTC', 'EUR', '8.00', '13.00'),
(181, 11604, 31626, 'y', '8302ASMST', '473498131/ 8302ASMST', 'EUR', '8.00', '12.00'),
(182, 12051, 31626, 'y', '8282ASMH', '472298131/ 8282ASMH', 'EUR', '7.00', '11.00'),
(183, 31806, 31626, 'y', '8295ASMVTG', '860178131/ 8295ASMVTG', 'EUR', '14.00', '18.00'),
(184, 12052, 31626, 'y', '8306ASMRT', '861598131/ 8306ASMRT', 'EUR', '7.00', '12.00'),
(185, 31807, 31626, 'y', '8341ASMRT', '861608132/ 8341ASMRT', 'EUR', '7.00', '12.00'),
(186, 31539, 31626, 'y', '8310ASMH', '477008131/ 8310ASMH', 'EUR', '9.00', '13.00'),
(187, 31540, 31626, 'y', ' 8317ASMV', '477028131/ 8317ASMV', 'EUR', '6.00', '10.00'),
(188, 31808, 31626, 'y', ' 8590ASMV', '912218131/ 8590ASMV', 'EUR', '20.00', '25.00'),
(189, 31812, 31626, 'y', '5015-100', '5015-100', 'EUR', '1.50', '3.00'),
(190, 11919, 31626, 'y', '8304', '3407001/5428 ASCV1', 'EUR', '6.00', '10.00'),
(191, 31814, 31626, 'y', '5059-20', '5059-20', 'EUR', '2.00', '3.00'),
(192, 12342, 31626, 'y', ' 8535ASMH', '523238131/ 8535ASMH', 'EUR', '17.00', '22.00'),
(193, 12057, 31626, 'y', '8548ASMVT', '520018131/ 8548ASMVT', 'EUR', '2.00', '3.00'),
(194, 31687, 31626, 'y', '8537ASMV', '911218121/ 8537ASMV', 'EUR', '9.00', '12.00'),
(195, 31696, 31626, 'y', '5028', '5028', 'EUR', '1.50', '3.00'),
(196, 31697, 31626, 'y', '5037-30', '5037', 'EUR', '1.00', '3.00'),
(197, 31695, 31626, 'y', '5024-27', '5024-27', 'EUR', '1.65', '3.00'),
(198, 32057, 31626, 'y', '5041-25E', '5041-25E', 'EUR', '2.00', '3.00'),
(199, 31701, 31626, 'y', '5047', '5047', 'EUR', '1.00', '2.00'),
(200, 31810, 31626, 'y', '5021-30', '5021-30', 'EUR', '2.00', '3.00'),
(201, 31809, 31626, 'y', '5040-30E', '5040-30E', 'EUR', '2.00', '3.00'),
(202, 31816, 31626, 'y', '5044-25E', '5044-25E', 'EUR', '1.70', '3.00'),
(203, 12703, 31630, 'y', '133601200', '133601200', 'EUR', '8.00', '12.00'),
(204, 31725, 31630, 'y', '133601220', '133601220', 'EUR', '25.00', '35.00'),
(205, 2007, 31630, 'y', '133601240', '133601240', 'EUR', '400.00', '500.00'),
(206, 2307, 31633, 'y', '10453830P', '10453830Р', 'EUR', '9.00', '12.00'),
(207, 11150, 31633, 'y', '10460102', '10460102', 'EUR', '28.00', '30.00'),
(208, 31490, 31633, 'y', '10460101', '10460101', 'EUR', '20.00', '30.00'),
(209, 12702, 31633, 'y', '10460103GB', '10460103GB', 'EUR', '19.00', '25.00'),
(210, 31847, 32082, 'y', '13345038', '13345038', 'EUR', '7.00', '10.00'),
(211, 31721, 32082, 'y', '13345036', '13345036', 'EUR', '4.00', '5.00'),
(212, 31711, 32084, 'y', '13345002RA', '13345002RA', 'EUR', '70.00', '80.00'),
(213, 31875, 32084, 'y', '13345002', '13345002', 'EUR', '5.00', '6.00'),
(214, 31710, 32084, 'y', '13345004RA', '13345004RA', 'EUR', '70.00', '80.00'),
(215, 31820, 32084, 'y', '13345005RA', '13345005RA', 'EUR', '70.00', '80.00'),
(216, 31912, 32084, 'y', '13345005', '13345005', 'EUR', '5.00', '6.00'),
(217, 31930, 32083, 'y', '13345040', '13345040', 'EUR', '5.00', '8.00'),
(218, 31789, 32083, 'y', '13345040', '13345040', 'EUR', '8.00', '10.00'),
(219, 32871, 31629, 'y', ' А215', 'А215', 'EUR', '3.00', '5.00'),
(220, 32870, 31628, 'y', ' 3407002', '3407002/5428 ASCV2', 'EUR', '6.00', '10.00'),
(221, 11919, 31628, 'y', '8304', '3407001/5428 ASCV1', 'EUR', '6.00', '10.00'),
(222, 32318, 31626, 'y', ' 3534ASRH', '3534ASRH', 'EUR', '15.00', '18.00'),
(223, 32319, 31626, 'y', ' 3552ASMH', '226218121/ 3552ASMH', 'EUR', '11.00', '15.00'),
(224, 32321, 31626, 'y', ' 3986ASMST', '3986ASMST', 'EUR', '5.00', '7.00'),
(225, 32322, 31626, 'y', ' 3983ASMRT', '240968131/ 3983ASMRT', 'EUR', '6.00', '8.00'),
(226, 32323, 31626, 'y', ' 5647ASMHT', '5647ASMHT', 'EUR', '7.00', '10.00'),
(227, 32325, 31626, 'y', ' 5655ASMVT', '324408131/ 5655ASMVT', 'EUR', '7.00', '10.00'),
(228, 32327, 31626, 'y', ' 6258ASMRT', '6258ASMRT', 'EUR', '5.00', '7.00'),
(229, 32328, 31626, 'y', ' 6539ASMHT', '363368131/ 6539ASMHT', 'EUR', '4.00', '6.00'),
(230, 12231, 31626, 'y', 'S215', 'S215', 'EUR', '16.00', '20.00'),
(231, 11452, 31626, 'y', ' 700578111/S315', '700578111/S315', 'EUR', '16.00', '20.00'),
(232, 32872, 31626, 'y', 'PRO-007', 'PRO-007', 'EUR', '3.00', '5.00'),
(233, 32873, 31626, 'n', ' PRO-004', 'PRO-004', 'EUR', '0.70', '1.00'),
(234, 32905, 31631, 'y', '13360154 ', '13360154-5', 'EUR', '8.00', '10.00'),
(235, 32904, 31631, 'y', ' 13360184', '13360184-5', 'EUR', '5.00', '7.00'),
(236, 32957, 31629, 'y', ' 01111718', '01111718', 'EUR', '35.00', '45.00'),
(237, 32962, 31629, 'y', ' 01111706', '01111706', 'EUR', '5.00', '8.00'),
(238, 32958, 31629, 'y', ' 01060108', '01060108', 'EUR', '8.00', '12.00'),
(239, 32961, 31629, 'y', '01110202 ', '01110202', 'EUR', '12.00', '18.00'),
(240, 32901, 31629, 'y', ' 13501503', '13501503', 'EUR', '15.00', '20.00'),
(241, 32953, 31629, 'y', ' 02181614', '02181614', 'EUR', '1.00', '2.00'),
(242, 32954, 31629, 'y', ' 0218165', '02181615', 'EUR', '1.00', '2.00'),
(243, 32879, 31629, 'y', ' 04210306', '04210306', 'EUR', '5.00', '7.00'),
(244, 32902, 31629, 'y', ' 10453900', '10453900', 'EUR', '450.00', '550.00'),
(245, 32903, 31629, 'y', '04212915 ', '04212915', 'EUR', '3.00', '5.00'),
(246, 32955, 31629, 'y', ' 02181626', '02181626', 'EUR', '11.00', '15.00'),
(247, 32959, 31629, 'y', ' 01061113', '01061113', 'EUR', '1.00', '2.00'),
(248, 32906, 31629, 'y', ' 02170225', '02170225', 'EUR', '5.00', '8.00'),
(249, 32956, 31629, 'y', ' 02170113', '02170113', 'EUR', '20.00', '28.00'),
(250, 32951, 31629, 'y', '02180201 ', '02180201', 'EUR', '10.00', '12.00'),
(251, 32882, 31626, 'y', ' 3016ASMS', '255138131/ 3016ASMH', 'EUR', '20.00', '25.00'),
(252, 32963, 31626, 'y', ' 6270ASRR', '980288111/ 6270ASRR', 'EUR', '23.00', '30.00'),
(253, 32880, 31626, 'y', ' 5428ASMVT', '753408135/ 5428ASMVT', 'EUR', '7.00', '10.00'),
(254, 32332, 31626, 'y', ' 5320ASRS', '376118111/ 5320ASRS', 'EUR', '23.00', '26.00'),
(255, 32883, 31626, 'y', ' 5957ASRR', '660418111/ 5957ASRR', 'EUR', '42.00', '50.00'),
(256, 32885, 31626, 'y', ' 8340ASMS', '475868131/ 8340ASMS', 'EUR', '10.00', '13.00'),
(257, 32881, 31626, 'y', ' 8301', '860568111/8247ASRR', 'EUR', '25.00', '30.00'),
(258, 32884, 31626, 'y', '8378ASMRT ', '861628131/8378ASMRT', 'EUR', '10.00', '15.00'),
(259, 32337, 31626, 'y', ' 8533ASRH1H', '524178111/ 8533ASRH1H', 'EUR', '15.00', '20.00'),
(260, 32960, 31633, 'y', ' 13373405GB', '13373405GB', 'EUR', '45.00', '55.00'),
(261, 32886, 32084, 'y', ' 13345002RA', '13345002RA', 'EUR', '72.00', '80.00'),
(262, 32891, 32084, 'y', ' 13345002', '13345002', 'EUR', '5.00', '6.00'),
(263, 32887, 32084, 'y', ' 13345005RA', '13345005RA', 'EUR', '68.00', '75.00'),
(264, 31913, 32084, 'y', ' 13345004', '13345004', 'EUR', '4.00', '5.00'),
(265, 32890, 32084, 'y', ' 13345004', '13345004', 'EUR', '4.00', '6.00'),
(266, 32888, 32084, 'y', ' 13345005RA', '13345005RA', 'EUR', '75.00', '80.00'),
(267, 32889, 32084, 'y', ' 13345005', '13345005', 'EUR', '6.00', '7.00'),
(268, 33251, 31631, 'y', ' 13345045', '13345045', 'EUR', '26.00', '28.00'),
(269, 33010, 31629, 'y', ' 10443408', '10443408', 'EUR', '45.00', '50.00'),
(270, 33005, 31629, 'y', '10443407 ', '10443407', 'EUR', '4.00', '5.00'),
(271, 33006, 31629, 'y', ' 10443402', '10443402', 'EUR', '5.00', '6.00'),
(272, 33011, 31629, 'y', ' 10443401', '10443401', 'EUR', '5.00', '6.00'),
(273, 33007, 31629, 'y', ' 10443403', '10443403', 'EUR', '5.00', '6.00'),
(274, 33009, 31629, 'y', ' 10443404', '10443404', 'EUR', '7.00', '8.00'),
(275, 33082, 31629, 'y', ' 01010102', '01010102', 'EUR', '10.00', '12.00'),
(276, 33172, 31629, 'y', ' 02180108', '02180105', 'EUR', '20.00', '25.00'),
(277, 33309, 31629, 'y', ' 10453811', '10453811', 'EUR', '13.00', '15.00'),
(278, 33014, 31629, 'y', ' 02160303', '02160303', 'EUR', '12.00', '15.00'),
(279, 33342, 31629, 'y', ' 13353305', '13353305', 'EUR', '12.00', '15.00'),
(280, 33363, 31629, 'y', ' 01070302', '01070302', 'EUR', '18.00', '25.00'),
(281, 33362, 31629, 'y', ' 01070301', '01070301', 'EUR', '20.00', '28.00'),
(282, 33161, 31629, 'y', ' 04212903', '04212903', 'EUR', '55.00', '65.00'),
(283, 33020, 31629, 'y', '02160701 ', '02160701', 'EUR', '10.00', '12.00'),
(284, 33387, 31629, 'y', ' 01061115', '01061115', 'EUR', '2.00', '2.00'),
(285, 33003, 31629, 'y', '02170218 ', '02170218', 'EUR', '4.00', '5.00'),
(286, 33001, 31629, 'y', ' 02170223', '02170223', 'EUR', '4.00', '5.00'),
(287, 33002, 31629, 'y', ' 02170224', '02170224', 'EUR', '4.00', '5.00'),
(288, 33308, 31629, 'y', ' 13401305', '13401305', 'EUR', '8.00', '10.00'),
(289, 33388, 31629, 'y', ' 01111705', '01111705', 'EUR', '25.00', '30.00'),
(290, 33364, 31629, 'y', ' 01111702', '01111702', 'EUR', '38.00', '45.00'),
(291, 33004, 31628, 'y', ' 3407006', '3407006/ 5436ASCVS', 'EUR', '1.00', '1.00'),
(292, 33028, 31626, 'y', ' 8534AKMS', '024158131/ 8534AKMS', 'EUR', '8.00', '12.00'),
(293, 33090, 31626, 'y', ' 2432ASMC', '117268132/ 2432ASMC', 'EUR', '13.00', '17.00'),
(294, 33348, 31626, 'y', ' 2442ASMH', '117368132/ 2442ASMH', 'EUR', '12.00', '17.00'),
(295, 33358, 31626, 'y', ' 2447ASMST', '117388132/ 2447ASMST', 'EUR', '8.00', '12.00'),
(296, 33033, 31626, 'y', ' 2447ASMST', '117388131/ 2447ASMST', 'EUR', '11.00', '15.00'),
(297, 33062, 31626, 'y', ' 2434BSMS', '115208231/ 2434BSMS', 'EUR', '27.00', '32.00'),
(298, 33021, 31626, 'y', ' 2445ASMST', '115238132/ 2445ASMST', 'EUR', '6.00', '10.00'),
(299, 33316, 31626, 'y', ' 2460ASMRB', '111318132/ 2460ASMRB', 'EUR', '6.00', '8.00'),
(300, 33312, 31626, 'y', ' 2452ASMRT', '110268136/ 2452ASMRT', 'EUR', '10.00', '15.00'),
(301, 33313, 31626, 'y', ' 2452ASMRT', '110268132/ 2452ASMRT1H', 'EUR', '16.00', '21.00'),
(302, 33319, 31626, 'y', ' 2456ASMRT', '110518132/ 2456ASMRT', 'EUR', '9.00', '12.00'),
(303, 33320, 31626, 'y', ' 2456ASMRT', '110518136/ 2456ASMRT1H', 'EUR', '20.00', '23.00'),
(304, 33197, 31626, 'y', ' 3014ASMH', '255518131/ 3014ASMH', 'EUR', '8.00', '11.00'),
(305, 33227, 31626, 'y', ' 2724ASMV', '652018133/2724ASMV', 'EUR', '13.00', '16.00'),
(306, 33037, 31626, 'y', ' 7264ASMSB', '030018132/ 7264ASMSB', 'EUR', '4.00', '5.00'),
(307, 33174, 31626, 'y', ' 3000ASMH', '255038131/ 3000ASMH', 'EUR', '9.00', '12.00'),
(308, 33314, 31626, 'y', ' 3002SDHI', '255048135/ 3002SDHI', 'EUR', '10.00', '14.00'),
(309, 33102, 31626, 'y', ' 3341ASMH', '217308121/ 3341ASMH', 'EUR', '6.00', '8.00'),
(310, 33321, 31626, 'y', ' 3338ASRH', '212508111/ 3338ASRH', 'EUR', '15.00', '18.00'),
(311, 32825, 31626, 'y', ' 5001', '5001', 'EUR', '1.00', '2.00'),
(312, 31702, 31626, 'y', ' 5022', '5022', 'EUR', '1.00', '3.00'),
(313, 32998, 31626, 'y', ' 3986ASMST', '244868132/ 3986ASMST', 'EUR', '5.00', '7.00'),
(314, 33169, 31626, 'y', ' 4000ASMRT', '240978131/ 4000ASMRT', 'EUR', '6.00', '8.00'),
(315, 33168, 31626, 'y', ' 4118ASMH', '252048121/ 4118ASMH', 'EUR', '5.00', '8.00'),
(316, 33121, 31626, 'y', ' 4116ASMV', '252808121/ 4116ASMV', 'EUR', '8.00', '12.00'),
(317, 33241, 31626, 'y', ' 4141ASMR', '253178131/ 4141ASMR', 'EUR', '12.00', '17.00'),
(318, 33315, 31626, 'y', ' 4133ASMR', '253028131/ 4133ASMR', 'EUR', '20.00', '22.00'),
(319, 33242, 31626, 'y', ' 4129ASMR', '253168131/ 4129ASMR', 'EUR', '18.00', '24.00'),
(320, 33386, 31626, 'y', ' AJ07ASMRT', '5913468131/ AJ07ASMRТ', 'EUR', '5.00', '7.00'),
(321, 33049, 31626, 'y', ' 4422ASMH', '250888131/ 4422ASMH', 'EUR', '8.00', '12.00'),
(322, 33243, 31626, 'y', ' 4404ASMV', '250848131/ 4404ASMV', 'EUR', '9.00', '14.00'),
(323, 33317, 31626, 'y', ' 8309ASMS', '474058131/ 8309ASMS', 'EUR', '18.00', '20.00'),
(324, 33192, 31626, 'y', ' 8354ASMR', '478068132/ 8354ASMR', 'EUR', '13.00', '17.00'),
(325, 33244, 31626, 'y', ' 5133ASMHG', '301468133/ 5133ASMHG', 'EUR', '35.00', '40.00'),
(326, 33360, 31626, 'y', ' 5430ASML', '753648123/ 5430ASML', 'EUR', '12.00', '17.00'),
(327, 33359, 31626, 'y', '5430AKML ', '753648122/ 5430AKML', 'EUR', '31.00', '38.00'),
(328, 33346, 31626, 'y', ' 5337ASMST', '317018132/ 5337ASMST', 'EUR', '15.00', '18.00'),
(329, 33000, 31626, 'y', ' 5320BSRS', '376118211/ 5320BSRS', 'EUR', '32.00', '38.00'),
(330, 33094, 31626, 'y', '5426ASMV ', '753358121/5426ASMV', 'EUR', '10.00', '12.00'),
(331, 33178, 31626, 'y', ' 5646ASMHT', '322708131/ 5646ASMHT', 'EUR', '4.00', '8.00'),
(332, 33052, 31626, 'y', ' 5649ASMST', '323608131/ 5649ASMST', 'EUR', '6.00', '9.00'),
(333, 33167, 31626, 'y', ' 5670ASMST', '321208132/ 5670ASMST', 'EUR', '4.00', '6.00'),
(334, 33019, 31626, 'y', ' 5684ASMS', '321228131/ 5684ASMS', 'EUR', '13.00', '20.00'),
(335, 33176, 31626, 'y', ' 5680ASMRT', '320028131/ 5680ASMRT', 'EUR', '5.00', '9.00'),
(336, 33095, 31626, 'y', ' 5621ASRR/4114', '322318111/ 5621ASRR/4114', 'EUR', '20.00', '25.00'),
(337, 32324, 31626, 'y', ' 5661ASMR', '325368132/ 5661ASMR', 'EUR', '35.00', '40.00'),
(338, 32326, 31626, 'y', ' 5996KMST', '5996AKMST', 'EUR', '39.00', '40.00'),
(339, 33165, 31626, 'y', '6041ASMH ', '180418131/ 6041ASMH', 'EUR', '8.00', '12.00'),
(340, 33347, 31626, 'y', ' 6006ASMR', '660458136/ 6006ASMR', 'EUR', '60.00', '70.00'),
(341, 33310, 31626, 'y', ' 6044ASMR1D', '186018137/ 6044ASMR1D', 'EUR', '18.00', '20.00'),
(342, 33311, 31626, 'y', ' 6046ASMH', '183568131/ 6046ASMH', 'EUR', '10.00', '12.00'),
(343, 33125, 31626, 'y', ' 6284ASMHB', '354578133/ 6284ASMHB', 'EUR', '12.00', '15.00'),
(344, 33129, 31626, 'y', ' 6292ASMVT', '352318136/ 6292ASMVT', 'EUR', '8.00', '12.00'),
(345, 33225, 31626, 'y', ' 6259ASMH', '356378122/6259ASMH', 'EUR', '10.00', '12.00'),
(346, 33345, 31626, 'y', '6290ASMHT ', '356408131/ 6290ASMHT', 'EUR', '11.00', '15.00'),
(347, 33034, 31626, 'y', ' 6307ASMV', '357028133/ 6307ASMV', 'EUR', '15.00', '18.00'),
(348, 33089, 31626, 'y', ' 6518ASMS', '364158123/ 6518ASMS', 'EUR', '13.00', '15.00'),
(349, 33344, 31626, 'y', ' 3020ASMM', '450148131/ 3020ASMM', 'EUR', '12.00', '15.00'),
(350, 33186, 31626, 'y', ' 8020ASMR', '558038131/ 8020ASMR', 'EUR', '9.00', '14.00'),
(351, 32995, 31626, 'y', ' 8377ASMS', '473518131/ 8377ASMS', 'EUR', '10.00', '13.00'),
(352, 33084, 31626, 'y', '8304ASMH ', '475768132/ 8304ASMH', 'EUR', '12.00', '15.00'),
(353, 33245, 31626, 'y', '8220ASMH ', '473768131/ 8280ASMH', 'EUR', '15.00', '20.00'),
(354, 33318, 31626, 'y', '8268ASRV ', '860168111/ 8268ASRV', 'EUR', '25.00', '30.00'),
(355, 32997, 31626, 'y', ' 8823ASRL', '890638111/ 8823ASRL', 'EUR', '38.00', '43.00'),
(356, 32338, 31626, 'y', ' 8533ASMHT', '8541ASMHT', 'EUR', '5.00', '8.00'),
(357, 33131, 31626, 'y', ' 8527ASRV', '911138111/ 8527ASRV', 'EUR', '16.00', '20.00'),
(358, 32996, 31626, 'y', ' 8537BSMV', '911218221/ 8537BSMV', 'EUR', '8.00', '12.00'),
(359, 33297, 31626, 'y', ' 5028укр.', '5028 укр.', 'EUR', '1.00', '2.00'),
(360, 32829, 31626, 'y', ' 5006', '5006', 'EUR', '1.00', '3.00'),
(361, 33240, 31626, 'y', ' 5023-22', '5023-22', 'EUR', '2.65', '3.50'),
(362, 33228, 31626, 'y', ' 5002-1', '5002-1', 'EUR', '1.50', '2.50'),
(363, 33246, 31626, 'y', ' 5032-30', '5032-30', 'EUR', '2.00', '4.00'),
(364, 33389, 31626, 'y', ' 5045-25Е', '5045-25E', 'EUR', '2.00', '3.00'),
(365, 33361, 31626, 'y', ' 5034-30', '5034-30', 'EUR', '2.00', '3.00'),
(366, 33195, 31626, 'y', ' 5061-20', '5061-20', 'EUR', '2.20', '3.00'),
(367, 33053, 31626, 'y', ' 5060-20', '5060-20', 'EUR', '2.20', '3.00'),
(368, 33079, 31626, 'y', ' 5059-20', '5059-20', 'EUR', '2.50', '4.00'),
(369, 33022, 31626, 'y', '5048 ', '5048', 'EUR', '2.00', '3.00'),
(370, 33254, 32082, 'y', ' 13345043', '13345043', 'EUR', '9.00', '12.00'),
(371, 33252, 32082, 'y', ' 13345038-12', '13345038-12', 'EUR', '55.00', '65.00'),
(372, 33253, 32082, 'y', ' 13345038', '13345038', 'EUR', '7.00', '9.00'),
(373, 33250, 32082, 'y', ' 13345035-12', '13345035-12', 'EUR', '112.00', '120.00'),
(374, 33229, 32082, 'y', ' 13345031', '13345031', 'EUR', '10.00', '15.00'),
(375, 33349, 32084, 'y', ' 13345022RA', '13345022RA', 'EUR', '72.00', '90.00'),
(376, 32999, 32084, 'y', ' 13345003', '13345003', 'EUR', '4.00', '6.00'),
(377, 33350, 32084, 'y', ' 13345004', '13345004', 'EUR', '4.00', '6.00'),
(378, 33399, 32084, 'y', ' 13345005RA', '13345005RA', 'EUR', '6.00', '7.00'),
(379, 33012, 32084, 'y', ' 13345005H', '13345005H', 'EUR', '6.00', '7.00'),
(380, 33249, 32084, 'y', ' 13345005RA', '13345005RA', 'EUR', '75.00', '80.00'),
(381, 33424, 31629, 'y', ' 10453816', '10453816', 'EUR', '120.00', '150.00'),
(382, 33100, 31626, 'y', ' 8534BSMS', '024138232/ 8534BSMS', 'EUR', '8.00', '12.00'),
(383, 33425, 31626, 'y', ' 2721ASMV', '650508131/2721ASMV', 'EUR', '12.00', '18.00'),
(384, 33426, 31626, 'y', ' 3002ASMHT', '255048132/3002ASMHT', 'EUR', '4.00', '7.00'),
(385, 33427, 31626, 'y', ' 3002ASMHR', '255048134/3002ASMHR', 'EUR', '6.00', '9.00'),
(386, 33083, 31626, 'y', ' 3545ASMH', '224318137/ 3545ASMH', 'EUR', '8.00', '12.00'),
(387, 33072, 31626, 'y', ' 4130ASMST', '251958131/ 4130ASMST', 'EUR', '7.00', '12.00'),
(388, 33472, 31629, 'y', ' 10453834', '10453834', 'EUR', '15.00', '18.00'),
(389, 33040, 31629, 'y', ' 10453901', '10453901', 'EUR', '58.00', '70.00'),
(390, 33471, 31629, 'y', ' 02181616', '02181616', 'EUR', '1.00', '2.00'),
(391, 33016, 31629, 'y', ' 02181616', '02181616-10', 'EUR', '1.00', '2.00'),
(392, 33200, 31629, 'y', ' 10453835', '10453835', 'EUR', '185.00', '200.00'),
(393, 33468, 31626, 'y', ' 2467ASGH', '111158131/ 2467ASGH', 'EUR', '9.00', '14.00'),
(394, 33467, 31626, 'y', ' 2437ASMC', '117338132/ 2437ASMC', 'EUR', '12.00', '18.00'),
(395, 33164, 31626, 'y', ' 2439ASMRT', '110258132/ 2439ASMRT', 'EUR', '6.00', '10.00'),
(396, 33127, 31626, 'y', '3001ASMS ', '255008131/ 3001ASMS', 'EUR', '16.00', '20.00'),
(397, 33439, 31626, 'y', ' 3011ASMB', '257018131/ 3011ASMV', 'EUR', '12.00', '15.00'),
(398, 33438, 31626, 'y', ' 3002ASMHL', '255048133/3002ASMHL', 'EUR', '6.00', '10.00'),
(399, 33104, 31626, 'y', ' 4624ASRL1', '900678111/ 4624ASRL', 'EUR', '50.00', '60.00'),
(400, 33470, 31626, 'y', ' 3336ASMH', '214378121/ 3336ASMH', 'EUR', '13.00', '17.00'),
(401, 33442, 31626, 'y', ' 3354ASMBT', '687558131/ 3354ASMVT', 'EUR', '5.00', '8.00'),
(402, 33435, 31626, 'y', ' 3734ASRL', '000048111/ 3734ASRL', 'EUR', '26.00', '30.00'),
(403, 33440, 31626, 'y', '3999ASMST ', '242948131/ 3999ASMST', 'EUR', '6.00', '10.00'),
(404, 33137, 31626, 'y', ' 3992ASMBT', '246118133/ 3992ASMVT', 'EUR', '8.00', '12.00'),
(405, 33184, 31626, 'y', ' 4411ASMH', '250018131/ 4411ASMH', 'EUR', '11.00', '15.00'),
(406, 33171, 31626, 'y', ' 4402ASMR', '250958131/ 4402ASMR', 'EUR', '8.00', '13.00'),
(407, 33441, 31626, 'y', ' 4907ASRL1H', '721258111/ 4907ASRL1H', 'EUR', '52.00', '60.00'),
(408, 33122, 31626, 'y', '5156ASME ', '304508131/ 5156ASME', 'EUR', '60.00', '70.00'),
(409, 33189, 31626, 'y', ' 5327ASRR', '754618111/ 5327ASRR', 'EUR', '25.00', '33.00'),
(410, 33132, 31626, 'y', ' 5673ASMBT', '320068132/ 5673ASMVT', 'EUR', '8.00', '12.00'),
(411, 33469, 31626, 'y', ' 6069ASMR', '662518131/ 6069ASMR', 'EUR', '10.00', '15.00'),
(412, 33092, 31626, 'y', ' 5990ASMRT', '661198131/ 5990ASMRT', 'EUR', '7.00', '11.00'),
(413, 33128, 31626, 'y', '7231ASMH', '397138133/ 7231ASMH', 'EUR', '10.00', '15.00'),
(414, 33109, 31626, 'y', ' 7246ASMB', '392168136/ 7246ASMV', 'EUR', '12.00', '16.00'),
(415, 33036, 31626, 'y', ' 8323ASMR', '860738131/ 8323ASMR', 'EUR', '4.00', '8.00'),
(416, 33130, 31626, 'y', ' 8820ASMHT', '503228131/ 8820ASMHT', 'EUR', '10.00', '15.00'),
(417, 33064, 31626, 'y', ' 8522ASRB', '912118111/ 8522ASRV', 'EUR', '20.00', '26.00'),
(418, 33032, 31626, 'y', ' 5046-25E', '5046-25E', 'EUR', '1.75', '3.00'),
(419, 33473, 31633, 'y', ' 10453815', '10453815', 'EUR', '9.00', '12.00');

-- --------------------------------------------------------

--
-- Структура таблицы `products_ext`
--

CREATE TABLE IF NOT EXISTS `products_ext` (
  `id` int(11) NOT NULL auto_increment,
  `item_master_id` int(11) default NULL,
  `lang` int(11) default '1',
  `title` text,
  `translit` varchar(255) default NULL,
  `units` varchar(10) default NULL,
  `meta_title` varchar(255) default NULL,
  `meta_description` varchar(255) default NULL,
  `meta_keywords` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=419 ;

--
-- Дамп данных таблицы `products_ext`
--

INSERT INTO `products_ext` (`id`, `item_master_id`, `lang`, `title`, `translit`, `units`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(1, 31492, 1, 'PT 310 Активатор для датчиков 1000 мл', 'pt-310-aktivator-dlya-datchikov-1000-ml', 'шт.', '', 'PT 310 активатор используется в качестве жидкого связующего, сцепления датчика и поверхности ветрового стекла.', ''),
(2, 31491, 1, 'PT 310 Активатор для датчиков 200 мл', 'pt-310-aktivator-dlya-datchikov-200-ml', 'шт.', '', 'PT 310 активатор используется в качестве жидкого связующего, сцепления датчика и поверхности ветрового стекла.', ''),
(3, 31487, 1, 'Датчик дождя Renault Megane7260/6011ASNH Nissan Micra K12', 'datchik-dozhdya-renault-megane72606011asnh-nissan-micra-k12', 'шт.', '', 'Датчик дождя/света крепится в фиксированный кронштейн на стекло', ''),
(4, 31488, 1, '&quot;Датчик площадка Audi &quot;&quot;Тип 2-1&quot;&quot;, силикон&quot;', 'quotdatchik-ploschadka-audi-quotquottip-21quotquot-silikonquot', 'шт.', '', '', ''),
(5, 31757, 1, '&quot;Датчик площадка Audi &quot;&quot;Тип 2-1&quot;&quot;, силикон&quot;', 'quotdatchik-ploschadka-audi-quotquottip-21quotquot-silikonquot', 'шт.', '', '', ''),
(6, 31758, 1, '&quot;Датчик площадка Toyota &quot;&quot;Тип 1&quot;&quot;, силикон&quot;', 'quotdatchik-ploschadka-toyota-quotquottip-1quotquot-silikonquot', 'шт.', '', '', ''),
(7, 31619, 1, 'Пластырь для датчика дождя  VW Group 1 version', 'plastyr-dlya-datchika-dozhdya-vw-group-1-version', 'шт.', '', '', ''),
(8, 12076, 1, 'Пластырь для датчика дождя  VW Group 2 version цельный', 'plastyr-dlya-datchika-dozhdya-vw-group-2-version-celnyj', 'шт.', '', '', ''),
(9, 31620, 1, 'Пластырь для датчика дождя C-Сlass, W-203', 'plastyr-dlya-datchika-dozhdya-cslass-w203', 'шт.', '', 'MERCEDES C-Class W203 Coupé (01-08) - (ARGIC: 5352); MERCEDES C-Class W203 Sedan/Estate (00-07) - (ARGIC: 5351)', ''),
(10, 11653, 1, 'Пластырь для датчика дождя Honda-Nissan-Kia-Chrys', 'plastyr-dlya-datchika-dozhdya-hondanissankiachrys', 'шт.', '', '', ''),
(11, 3364, 1, 'Пластырь для датчика дождя Mercedes-210, BMW Е39', 'plastyr-dlya-datchika-dozhdya-mercedes210-bmw-e39', 'шт.', '', '', ''),
(12, 31698, 1, 'Пластырь для датчика дождя Mersedes W-202/203/209/213/214', 'plastyr-dlya-datchika-dozhdya-mersedes-w202203209213214', 'шт.', '', '', ''),
(13, 31489, 1, 'Пластырь для датчика дождя Е-Сlass, W-211', 'plastyr-dlya-datchika-dozhdya-eslass-w211', 'шт.', '', '', ''),
(14, 31790, 1, 'Апликаторы 130 мм', 'aplikatory-130-mm', 'шт.', '13350215LS', 'Аппликаторы меховые, длина 105 мм. Одинаково эффективно используются как при работе со стеклом, так и при работе с кузовными деталями. Упаковка – 100 шт.', ''),
(15, 31706, 1, 'Держатель для струны короткий', 'derzhatel-dlya-struny-korotkij', 'шт.', '02180108', '', ''),
(16, 31704, 1, 'Держатель для струны стандартный', 'derzhatel-dlya-struny-standartnyj', 'шт.', '02180104', 'Длина: 80 мм. Винтовой зажим, подходит для любых видов струн для срезки стекол.', ''),
(17, 31617, 1, 'Запасные трапециевидные нержавеющие лезвия для ножей 1шт', 'zapasnye-trapecievidnye-nerzhavejuschie-lezviya-dlya-nozhej-1sht', 'шт.', '02170203', '', ''),
(18, 31368, 1, 'Инжектор для ремонта 1шт.', 'inzhektor-dlya-remonta-1sht', 'шт.', '', 'Высококачественный пластик инжектор для повреждения камня.', ''),
(19, 32055, 1, 'Инструмент 1 для установки универсального профеля 5024', 'instrument-1-dlya-ustanovki-universalnogo-profelya-5024', 'шт.', '', 'Это PMA / TOOLS профилей применения инструмента представляет собой новацию в отношении точности и экономии времени применения наших универсальных участков профиля 5024', ''),
(20, 32054, 1, 'Инструмент 2 для аппликации молдингов', 'instrument-2-dlya-applikacii-moldingov', 'шт.', '', 'Применяется для аппликации профиля TOYOTA / LEXUS', ''),
(21, 32056, 1, 'Инструмент 3 для аппликации молдингов на автомобили BMW, Citroen', 'instrument-3-dlya-applikacii-moldingov-na-avtomobili-bmw-citroen', 'шт.', '', 'Используя наш Profixx приложений инструмент самоклеящиеся формования и отделки может применяться точно и эффективно.', ''),
(22, 31493, 1, 'Клейкая лента для автостекла или монтажа 90м', 'klejkaya-lenta-dlya-avtostekla-ili-montazha-90m', 'шт.', '', 'для крепления ветрового стекла для предотвращения соскальзывания и т.д.', ''),
(23, 31622, 1, 'Круглая стальная струна (0,6 мм) для срезки автостекол 200 м', 'kruglaya-stalnaya-struna-06-mm-dlya-srezki-avtostekol-200-m', 'шт.', '', 'Благодаря своему малому диаметру он идеально подходит для автомобилей с узкими зазорами между краем стекла и кузова.', ''),
(24, 31615, 1, 'Набор из 4-х различных коротких (130 мм) ковырялок', 'nabor-iz-4h-razlichnyh-korotkih-130-mm-kovyryalok', 'шт.', '', 'Набор из 4-х различных коротких (130 мм) ковырялок с пластиковыми рукоятками. Состав Набора: 1 – Ковырялка прямая (шило); 2 – Ковырялка волнообразная; 3 – Ковырялка загнутая 65 градусов; 4 – Ковырялка загнутая 90 градусов', ''),
(25, 31621, 1, 'Наклейки для зеркал Ford', 'naklejki-dlya-zerkal-ford', 'шт.', '', 'Этим пластырем в OEM лучшэе, который может быть использован в мягких клееного База сегмента зеркала.', ''),
(26, 31709, 1, 'Пистолет механический для клея 400 мл', 'pistolet-mehanicheskij-dlya-kleya-400-ml', 'шт.', '', 'Пистолет для герметика', ''),
(27, 31708, 1, 'Пистолет механический для клея 600 мл', 'pistolet-mehanicheskij-dlya-kleya-600-ml', 'шт.', '', 'Пистолет Avon герметик используется для нанесения 600 мл мешках 1-компонентный полиуретановый клей.', ''),
(28, 31726, 1, 'Пистолет пневматический для клея 600 мл', 'pistolet-pnevmaticheskij-dlya-kleya-600-ml', 'шт.', '09333105', 'Пневматический пистолет для выдавливания колбас 400 и 600 мл. Воздушного давления. Регулятор подачи воздуха. Рекомендуемое рабочее давление воздуха - 6 бар.', ''),
(29, 31495, 1, 'Полировочная ручка', 'polirovochnaya-ruchka', 'шт.', '', 'Полировка пера', ''),
(30, 31618, 1, 'Присоска мантажная с двумя чашками синяя', 'prisoska-mantazhnaya-s-dvumya-chashkami-sinyaya', 'шт.', '', 'Присоска для стёкол двойная стандартная. Предназначена для установки и демонтажа любых видов стёкол. Максимальная нагрузка – 80 кг. Рекомендуется парное использование.', ''),
(31, 31705, 1, 'Присоска монтажная с двумя чашками Veribor желтая', 'prisoska-montazhnaya-s-dvumya-chashkami-veribor-zheltaya', 'шт.', '', '80 кг', ''),
(32, 31703, 1, 'Прокалыватель для струны с рукояткой Т-образной формы', 'prokalyvatel-dlya-struny-s-rukoyatkoj-tobraznoj-formy', 'шт.', '', 'Удобная пластиковая рукоятка.', ''),
(33, 31494, 1, 'Сверло 0,8 мм', 'sverlo-08-mm', 'шт.', '', 'используется для открытия недоступных щебнем', ''),
(34, 2028, 1, 'Струна витая, позолоченная для срезки автостекла', 'struna-vitaya-pozolochennaya-dlya-srezki-avtostekla', 'шт.', '02180207', '0,8мм; Длина – 22,5 метров. Обладает высокими режущими свойствами по любым видам полиуретанов.', ''),
(35, 31681, 1, 'Струна квадратная для срезки автостекла 0,6мм, 44м', 'struna-kvadratnaya-dlya-srezki-avtostekla-06mm-44m', 'шт.', '', '', ''),
(36, 31707, 1, 'Струна квадратная для срезки автостекла 0,6мм, 50м', 'struna-kvadratnaya-dlya-srezki-avtostekla-06mm-50m', 'шт.', '', 'На картонной катушке. Подходит для срезки автомобильных стёкол, вклеенных любым полиуретановым клеем – герметиком.', ''),
(37, 31623, 1, 'Съемник клипс длина - 26см', 'semnik-klips-dlina-26sm', 'шт.', '', 'Подходит для удаления плагина клипc в наружных и внутренних панелей.', ''),
(38, 31616, 1, 'Съемник клипс универсальный. Длина - 24,5 см.Загиб – 45 градусов.', 'semnik-klips-universalnyj-dlina-245-smzagib-–-45-gradusov', 'шт.', '', 'Длина - 24,5 см. Пластиковая рукоятка. Загиб – 45 градусов.', ''),
(39, 31486, 1, 'Ультрафиолетовая лампа 8 Вт, 230 В', 'ultrafioletovaya-lampa-8-vt-230-v', 'шт.', '', 'Этот светильник может безопасно крепится к ветровому стеклу на 2 ПВХ присосках', ''),
(40, 2029, 1, 'Электрическая машина полировки', 'jelektricheskaya-mashina-polirovki', 'шт.', '', 'Царапины на ламинированом закаленном стеклае могут быть легко и эфективно удалены  с этой электрической машиной для полировки', ''),
(41, 31761, 1, 'MITSUBISHI Pajero II (91-00) - WS-Clips 14 шт. набор', 'mitsubishi-pajero-ii-9100-wsclips-14-sht-nabor', 'шт.', '322308141/5637AKCR', '14 шт. набор', ''),
(42, 31759, 1, 'TOYOTA Camry III 4 двери (91-96) - WS-Clips 12шт набор', 'toyota-camry-iii-4-dveri-9196-wsclips-12sht-nabor', 'шт.', '473468141/8278AKCS', '12шт набор', ''),
(43, 31760, 1, 'TOYOTA Corolla EE90 Седан (87-92) - WS-Clips 18 шт.набор', 'toyota-corolla-ee90-sedan-8792-wsclips-18-shtnabor', 'шт.', '473718141/8259AKCH', '18 шт набор: 8 x WS-Clip OEM-No.: 75548 16030; 8 x WS-Clip OEM-No.: 75546 12060; 1 x WS-Clip OEM-No.: 75961 12010; 1 x WS-Clip OEM-No.: 75962 12010', ''),
(44, 31762, 1, 'VW Golf III (91-98) - WS-Clip стойки  8шт.', 'vw-golf-iii-9198-wsclip-stojki-8sht', 'шт.', '524318141/8541AKCH', '8 шт', ''),
(45, 31763, 1, 'VW Golf III (91-98) - WS-крепление набор 7 шт.', 'vw-golf-iii-9198-wskreplenie-nabor-7-sht', 'шт.', '524318161/8541AKSH', 'Крепление набор 7 шт', ''),
(46, 31765, 1, 'VW Passat IV B3/B4 WS- соединитель хромовый', 'vw-passat-iv-b3b4-ws-soedinitel-hromovyj', 'шт.', '3106008/8535ASCS', 'Cоединитель хромовый', ''),
(47, 31699, 1, 'Клипсы  BMW 5/7 series E32/E34 87-95 (16 шт - 1 кт)', 'klipsy-bmw-57-series-e32e34-8795-16-sht-1-kt', 'шт.', '3101002/ 2426ASCS1', '16 шт - 1 комплект', ''),
(48, 2424, 1, 'Клипсы  BMW 5/7 series E32/E34(16 шт - 1 кт), 87-95', 'klipsy-bmw-57-series-e32e3416-sht-1-kt-8795', 'шт.', '3101001/	2426ASCS', '16 шт - 1 комплект', ''),
(49, 31700, 1, 'Клипсы  BMW 5/7 series E32/E34/Z3 87-03 (16 шт - 1 кт)', 'klipsy-bmw-57-series-e32e34z3-8703-16-sht-1-kt', 'шт.', '7101001/ 2427ASSS', '16 шт - 1 комплект', ''),
(50, 31767, 1, 'Клипсы BMW 5 E39 94-03 WS-Clip', 'klipsy-bmw-5-e39-9403-wsclip', 'шт.', '7101002/2434 ASCSB', '', ''),
(51, 31764, 1, 'Клипсы BMW7 E38 95-01 WS-Clip', 'klipsy-bmw7-e38-9501-wsclip', 'шт.', '3101008/2433ASCS', '', ''),
(52, 31768, 1, 'Кнопки панели под дворники (внутр.) Ford Transit II-III', 'knopki-paneli-pod-dvorniki-vnutr-ford-transit-iiiii', 'шт.', '6407002E/B1456/1250', '', ''),
(53, 31770, 1, 'Кнопки панели под дворники (нар.) Ford Transit II-III', 'knopki-paneli-pod-dvorniki-nar-ford-transit-iiiii', 'шт.', '', 'WS-молнией', ''),
(54, 31766, 1, 'Универсальные клипсы WS- внутр.панели', 'universalnye-klipsy-ws-vnutrpaneli', 'шт.', '4000704', '', ''),
(55, 12230, 1, 'AUDI 100/A6 91-97 WS-Moulding OEM', 'audi-100a6-9197-wsmoulding-oem', 'шт.', '', '', ''),
(56, 12031, 1, 'AUDI A4 94-11/00 WS-Moulding верхний жесткий', 'audi-a4-941100-wsmoulding-verhnij-zhestkij', 'шт.', '', 'Верхняя планка жесткая', ''),
(57, 12227, 1, 'AUDI A6 97-04 WS-Moulding нижняя планка', 'audi-a6-9704-wsmoulding-nizhnyaya-planka', 'шт.', '', 'Нижняя планка', ''),
(58, 11457, 1, 'AUDI A8 02-10 WS-Moulding нижняя планка', 'audi-a8-0210-wsmoulding-nizhnyaya-planka', 'шт.', '', 'Нижняя планка', ''),
(59, 31651, 1, 'AUDI A8 94-02 WS-Moulding metal OEM', 'audi-a8-9402-wsmoulding-metal-oem', 'шт.', '', 'Металлический', ''),
(60, 11920, 1, 'BMW 3 Series E-36 91-98 WS-Moulding OEM', 'bmw-3-series-e36-9198-wsmoulding-oem', 'шт.', '', 'Верхний', ''),
(61, 31544, 1, 'BMW 3 Series E-46 98-05 WS-Moulding', 'bmw-3-series-e46-9805-wsmoulding', 'шт.', '', '', ''),
(62, 12034, 1, 'BMW 5 Series E-60/E-61 03-10 WS-Moulding верхний OEM', 'bmw-5-series-e60e61-0310-wsmoulding-verhnij-oem', 'шт.', 'BMW 5 Series E60/E61 (03-10) - WS-Moulding top', 'Верхний', ''),
(63, 2731, 1, 'BMW 7 Series E-38 95-01 WS-Moulding', 'bmw-7-series-e38-9501-wsmoulding', 'шт.', '', 'Верхний', ''),
(64, 12036, 1, 'BMW 7 Series E-65 01-08  WS-Moulding OEM', 'bmw-7-series-e65-0108-wsmoulding-oem', 'шт.', '', 'Верхний', ''),
(65, 31652, 1, 'BMW 5 Series E-34 88-95 WS-Mouldingметал. Лев+Прав', 'bmw-5-series-e34-8895-wsmouldingmetal-levprav', 'шт.', '', 'Металлический левый+правый', ''),
(66, 31653, 1, 'BMW 5 Series E-39 95-03 WS-Moulding', 'bmw-5-series-e39-9503-wsmoulding', 'шт.', '', '', ''),
(67, 2811, 1, 'BMW X5 E53 99-06 WS-Moulding верхний OEM', 'bmw-x5-e53-9906-wsmoulding-verhnij-oem', 'шт.', '', '', ''),
(68, 31671, 1, 'CHEVROLET AVEO 06- WS-Moulding', 'chevrolet-aveo-06-wsmoulding', 'шт.', 'CHEVROLET Aveo (06-) - WS-Moulding', '', ''),
(69, 31676, 1, 'DAEWOO MATIZ/CHERRY QQ 05- WS-Moulding', 'daewoo-matizcherry-qq-05-wsmoulding', 'шт.', '', '', ''),
(70, 12033, 1, 'CITROEN C5 01-08 WS-Moulding', 'citroen-c5-0108-wsmoulding', 'шт.', 'CITROEN C5 (01-08) - WS-Moulding', '', ''),
(71, 31654, 1, 'CITROEN C2  03-  WS-Moulding верхний', 'citroen-c2-03-wsmoulding-verhnij', 'шт.', 'CITROEN C2 (03-) - WS-Moulding top', 'Верхний', ''),
(72, 31655, 1, 'CITROEN C3 02-09 WS-Moulding', 'citroen-c3-0209-wsmoulding', 'шт.', '', '', ''),
(73, 31656, 1, 'CITROEN C3 Pluriel, 03-  WS-moulding верхний', 'citroen-c3-pluriel-03-wsmoulding-verhnij', 'шт.', '', 'Верхний', ''),
(74, 12032, 1, 'CITROEN XSARA 97-05 WS-Moulding top', 'citroen-xsara-9705-wsmoulding-top', 'шт.', '', '', ''),
(75, 3103, 1, 'CITROEN XSARA PICASSO 00-06 WS-Moulding', 'citroen-xsara-picasso-0006-wsmoulding', 'шт.', '', '', ''),
(76, 31657, 1, 'DAEWOO LANOS 97-03 WS-Moulding', 'daewoo-lanos-9703-wsmoulding', 'шт.', '', '', ''),
(77, 31658, 1, 'DAEWOO LEGANZA 97-03 WS-Moulding', 'daewoo-leganza-9703-wsmoulding', 'шт.', 'DAEWOO Leganza (97-03) - WS-Moulding', '', ''),
(78, 31659, 1, 'DAEWOO MATIZ  WS-Moulding ориг.', 'daewoo-matiz-wsmoulding-orig', 'шт.', '', '', ''),
(79, 31661, 1, 'DAEWOO NUBIRA 97-03 WS-Moulding', 'daewoo-nubira-9703-wsmoulding', 'шт.', '', '', ''),
(80, 31691, 1, 'DAF F75/F85 93-  WS-Moulding', 'daf-f75f85-93-wsmoulding', 'шт.', '', '', ''),
(81, 31793, 1, 'DAF F95-TE47/Pegaso 86- WS-Резиновый с дождевым каналом', 'daf-f95te47pegaso-86-wsrezinovyj-s-dozhdevym-kanalom', 'шт.', 'DAF 95-TE47 & Pegaso (96-) - WS-Rubber with rain channel', 'С дождевым каналом', ''),
(82, 31694, 1, 'DAF XF 105 06  WS Moulding', 'daf-xf-105-06-ws-moulding', 'шт.', '', '', ''),
(83, 31690, 1, 'FIAT DUCATO/P BOXER/C JUMPER 94-06 WS-Moulding', 'fiat-ducatop-boxerc-jumper-9406-wsmoulding', 'шт.', '', '', ''),
(84, 31794, 1, 'FIAT IVECO DAILY/RENO MASTER 99- WS-Moulding', 'fiat-iveco-dailyreno-master-99-wsmoulding', 'шт.', '', '', ''),
(85, 31685, 1, 'FIAT SCUDO/PEUGEOT 806/EXPERT 94-06 WS-Moulding', 'fiat-scudopeugeot-806expert-9406-wsmoulding', 'шт.', '', '', ''),
(86, 12197, 1, 'FORD FIESTA IV 89-95 WS-Moulding цельный резиновый', 'ford-fiesta-iv-8995-wsmoulding-celnyj-rezinovyj', 'шт.', '', 'Резиновый, цельный', ''),
(87, 31552, 1, 'FORD FIESTA VI 02-08 WS-Moulding OEM', 'ford-fiesta-vi-0208-wsmoulding-oem', 'шт.', '', '', ''),
(88, 31963, 1, 'FORD FOCUS 98-04 WS-Moulding жесткий', 'ford-focus-9804-wsmoulding-zhestkij', 'шт.', '', 'Жесткий', ''),
(89, 12037, 1, 'FORD FOCUS 98-04 WS-Moulding мягкий', 'ford-focus-9804-wsmoulding-myagkij', 'шт.', '', 'Mягкий', ''),
(90, 31553, 1, 'FORD FUSION 02- WS-Moulding OEM', 'ford-fusion-02-wsmoulding-oem', 'шт.', '', '', ''),
(91, 12237, 1, 'FORD KA I 96-08 WS-Moulding', 'ford-ka-i-9608-wsmoulding', 'шт.', '', '', ''),
(92, 31815, 1, 'FORD MONDEO 01-07 WS-Метражный, 20м в бухте', 'ford-mondeo-0107-wsmetrazhnyj-20m-v-buhte', 'м.', '5062-20', 'Метражный, 20м в бухте', ''),
(93, 31547, 1, 'FORD MONDEO I 93-00 WS-Moulding верхний', 'ford-mondeo-i-9300-wsmoulding-verhnij', 'шт.', '', 'Верхний', ''),
(94, 12035, 1, 'FORD SIERRA II 87-93 WS-Резиновый', 'ford-sierra-ii-8793-wsrezinovyj', 'шт.', '', 'Резиновый, наружный', ''),
(95, 12236, 1, 'FORD SIERRA II 87-93 WS-Резиновый + внутр. вставка', 'ford-sierra-ii-8793-wsrezinovyj-vnutr-vstavka', 'шт.', '', 'Резиновый внутренний / внешний', ''),
(96, 31663, 1, 'FORD TRANSIT CONNECT 03- WS-Moulding OEM', 'ford-transit-connect-03-wsmoulding-oem', 'шт.', 'FORD Transit Connect (03-) - WS-Moulding', '', ''),
(97, 31662, 1, 'FORD TRANSIT T-15  WS-Moulding', 'ford-transit-t15-wsmoulding', 'шт.', '', '', ''),
(98, 31964, 1, 'FORD TRANSIT T-16 00-06- WS-Moulding верхний', 'ford-transit-t16-0006-wsmoulding-verhnij', 'шт.', '', 'Верхний', ''),
(99, 12239, 1, 'FORD универсальный молдинг внутр. декоративный 50M в бухте', 'ford-universalnyj-molding-vnutr-dekorativnyj-50m-v-buhte', 'м.', '5009', '13,5 мм, 50м в бухте', ''),
(100, 31664, 1, 'HONDA ACCORD 98-  WS-Moulding', 'honda-accord-98-wsmoulding', 'шт.', '', '', ''),
(101, 31665, 1, 'HONDA CR-V 97-02   WS-Moulding', 'honda-crv-9702--wsmoulding', 'шт.', '', '', ''),
(102, 31666, 1, 'HYUNDAI GETZ  WS-Moulding', 'hyundai-getz-wsmoulding', 'шт.', '', '', ''),
(103, 31667, 1, 'HYUNDAI MATRIX 01-  WS-Moulding', 'hyundai-matrix-01-wsmoulding', 'шт.', 'HYUNDAI Matrix I (01-) - WS-Moulding', '', ''),
(104, 12040, 1, 'HYUNDAI SONATA III 99-05 WS-Moulding', 'hyundai-sonata-iii-9905-wsmoulding', 'шт.', '', '', ''),
(105, 31817, 1, 'KIA CERATO 02-09 WS-Moulding OEM', 'kia-cerato-0209-wsmoulding-oem', 'шт.', '', '', ''),
(106, 31675, 1, 'MAZDA 6 08-  WS-Moulding', 'mazda-6-08-wsmoulding', 'шт.', '', '', ''),
(107, 31668, 1, 'MAZDA 121 III  96-03 WS-Moulding', 'mazda-121-iii-9603-wsmoulding', 'шт.', '', '', ''),
(108, 31669, 1, 'MAZDA 2  03-07 WS-Moulding', 'mazda-2-0307-wsmoulding', 'шт.', '', '', ''),
(109, 31545, 1, 'MAZDA 2 03-07 WS-Moulding', 'mazda-2-0307-wsmoulding', 'шт.', '', '', ''),
(110, 31546, 1, 'MAZDA 3 03-09 WS-Moulding', 'mazda-3-0309-wsmoulding', 'шт.', '', '', ''),
(111, 31670, 1, 'MAZDA 323 VI 4/5 doors 98-03  WS-Moulding', 'mazda-323-vi-45-doors-9803-wsmoulding', 'шт.', '', '', ''),
(112, 31674, 1, 'MAZDA 6 02-08  WS-Moulding', 'mazda-6-0208-wsmoulding', 'шт.', '', '', ''),
(113, 31672, 1, 'MAZDA 626 IV Sedan 4 doors 92-97  WS-Moulding', 'mazda-626-iv-sedan-4-doors-9297-wsmoulding', 'шт.', '', '', ''),
(114, 31673, 1, 'MAZDA 626 IV Sedan 4 doors US Version 92-97 WS-Moulding chrome', 'mazda-626-iv-sedan-4-doors-us-version-9297-wsmoulding-chrome', 'шт.', '', '', ''),
(115, 31677, 1, 'MERCEDES VITO VIANO 03- WS-Moulding', 'mercedes-vito-viano-03-wsmoulding', 'шт.', '', '', ''),
(116, 12343, 1, 'MERCEDES E-Klasse W124 85-94 WS-Moulding нижняя планка', 'mercedes-eklasse-w124-8594-wsmoulding-nizhnyaya-planka', 'шт.', '', 'Нижняя накладка', ''),
(117, 12341, 1, 'MERCEDES C-Class W202 93-00 WS-Moulding верхний пластик.', 'mercedes-cclass-w202-9300-wsmoulding-verhnij-plastik', 'шт.', '', 'Пластик', ''),
(118, 31549, 1, 'MERCEDES C-Class W202 93-00 WS-Moulding верхний металлический', 'mercedes-cclass-w202-9300-wsmoulding-verhnij-metallicheskij', 'шт.', '', '', ''),
(119, 31550, 1, 'MERCEDES C-Class W203 00-07  WS-Moulding верхний', 'mercedes-cclass-w203-0007-wsmoulding-verhnij', 'шт.', '', '', ''),
(120, 31753, 1, 'MERSEDES SPRINTER 06- WS-MOULDING OEM', 'mersedes-sprinter-06-wsmoulding-oem', 'шт.', '', '', ''),
(121, 12043, 1, 'MERSEDES SPRINTER I High 95-06 WS-Moulding', 'mersedes-sprinter-i-high-9506-wsmoulding', 'шт.', '', '', ''),
(122, 31811, 1, 'MERSEDES SPRINTER Боковой Метражный (50м в бухте)', 'mersedes-sprinter-bokovoj-metrazhnyj-50m-v-buhte', 'шт.', '5035', '50м в бухте', ''),
(123, 31542, 1, 'MITSUBISHI COLT IV CC 92-95 WS-Moulding верхний', 'mitsubishi-colt-iv-cc-9295-wsmoulding-verhnij', 'шт.', '', '', ''),
(124, 31795, 1, 'MITSUBISHI L200 Pick-Up 06- WS-Верхний', 'mitsubishi-l200-pickup-06-wsverhnij', 'шт.', '', 'Верхний', ''),
(125, 12046, 1, 'MITSUBISHI LANCER 93-96 WS-Moulding верхний', 'mitsubishi-lancer-9396-wsmoulding-verhnij', 'шт.', '', '', ''),
(126, 12044, 1, 'MITSUBISHI OUTLANDER 03-07 WS-Moulding верхний', 'mitsubishi-outlander-0307-wsmoulding-verhnij', 'шт.', '', '', ''),
(127, 3371, 1, 'MITSUBISHI PAJERO II 91-00 WS-Moulding верхний метал.', 'mitsubishi-pajero-ii-9100-wsmoulding-verhnij-metal', 'шт.', '', 'Верхний', ''),
(128, 31548, 1, 'MITSUBISHI PAJERO II 91-00 WS-Moulding нижний', 'mitsubishi-pajero-ii-9100-wsmoulding-nizhnij', 'шт.', '', 'Нижний', ''),
(129, 31796, 1, '&quot;MITSUBISHI PAJERO SPORT 99- WS- &quot;&quot;П&quot;&quot; образный&quot;', 'quotmitsubishi-pajero-sport-99-ws-quotquotpquotquot-obraznyjquot', 'шт.', '', '', ''),
(130, 12045, 1, 'MITSUBISHI SPACE WAGON III 98-04 WS-MOULDING', 'mitsubishi-space-wagon-iii-9804-wsmoulding', 'шт.', '', '', ''),
(131, 11652, 1, 'NISSAN ALMERA N15 95-00 WS-Moulding верхний', 'nissan-almera-n15-9500-wsmoulding-verhnij', 'шт.', '', 'Верхний', ''),
(132, 31543, 1, 'NISSAN MAXIMA III 00-04 WS-Moulding верхний', 'nissan-maxima-iii-0004-wsmoulding-verhnij', 'шт.', '', 'Верхний', ''),
(133, 31679, 1, 'NISSAN MICRA K12 03-10 WS-Moulding', 'nissan-micra-k12-0310-wsmoulding', 'шт.', '', '', ''),
(134, 31797, 1, 'NISSAN PATROL II 98-09 WS-Moulding', 'nissan-patrol-ii-9809-wsmoulding', 'шт.', '', '', ''),
(135, 31541, 1, 'NISSAN PRIMIERA P10 SDN 90-96 WS-Moulding верхний', 'nissan-primiera-p10-sdn-9096-wsmoulding-verhnij', 'шт.', '', 'Верхний', ''),
(136, 12219, 1, 'NISSAN PRIMIERA P11 96-02 WS-Moulding верхний с 6-ю клипсами', 'nissan-primiera-p11-9602-wsmoulding-verhnij-s-6ju-klipsami', 'шт.', '', 'Bерхний', ''),
(137, 31680, 1, 'NISSAN PRIMIERA P12 02-  WS-Moulding верхий 1pce', 'nissan-primiera-p12-02-wsmoulding-verhij-1pce', 'шт.', '', 'Bерхий', ''),
(138, 31798, 1, 'NISSAN QASHQAI 06- WS-Moulding с железн. крышой', 'nissan-qashqai-06-wsmoulding-s-zhelezn-kryshoj', 'шт.', '', 'Предназначается для автомобией без люка на крыше', ''),
(139, 31682, 1, 'NISSAN X-TRAIL 01-07 WS-Moulding', 'nissan-xtrail-0107-wsmoulding', 'шт.', '', '', ''),
(140, 31799, 1, 'NISSAN X-TRAIL 07- WS-Moulding', 'nissan-xtrail-07-wsmoulding', 'шт.', '', '', ''),
(141, 31683, 1, 'OPEL AGILA A 00- WS-Moulding', 'opel-agila-a-00-wsmoulding', 'шт.', '', '', ''),
(142, 11167, 1, 'OPEL ASTRA F 91-98 WS-Moulding', 'opel-astra-f-9198-wsmoulding', 'шт.', '', '', ''),
(143, 31688, 1, 'OPEL ASTRA G 98-04 WS-Moulding верхний мягкий', 'opel-astra-g-9804-wsmoulding-verhnij-myagkij', 'шт.', '', 'Bерхний мягкий', ''),
(144, 12220, 1, 'OPEL ASTRA G STV 98-04 BL-Moulding задний', 'opel-astra-g-stv-9804-blmoulding-zadnij', 'шт.', '', '', ''),
(145, 12047, 1, 'OPEL CORSA C 00-06 WS-Moulding верхний+нижний', 'opel-corsa-c-0006-wsmoulding-verhnijnizhnij', 'шт.', '', 'Верхний/Нижний', ''),
(146, 31551, 1, 'OPEL FRONTERA II 99- WS-MOULDING верхний', 'opel-frontera-ii-99-wsmoulding-verhnij', 'шт.', '', 'Верхний', ''),
(147, 31965, 1, 'OPEL KADETT  RW-Moulding', 'opel-kadett-rwmoulding', 'шт.', '', '', ''),
(148, 31660, 1, 'OPEL KADETT E 84-92 WS-Moulding', 'opel-kadett-e-8492-wsmoulding', 'шт.', '', '', ''),
(149, 31678, 1, 'Универсальный молдинг для лоб. стекла метражный 16мм, 50м в бухте', 'universalnyj-molding-dlya-lob-stekla-metrazhnyj-16mm-50m-v-buhte', 'м.', '5002', '16мм;  50м в бухте', ''),
(150, 11445, 1, 'OPEL MOVANO/IVECO DAILY/RENAULT MASTER 99- 03 WS-MOULDING', 'opel-movanoiveco-dailyrenault-master-99-03-wsmoulding', 'шт.', '802018131/ 6296ASMV', '', ''),
(151, 12048, 1, 'OPEL MERIVA 03- WS-MOULDING верхний', 'opel-meriva-03-wsmoulding-verhnij', 'шт.', '350418132/ 6288ASMVT', 'Верхний', ''),
(152, 31686, 1, 'OPEL OMEGA A 86-93 WS-Moulding', 'opel-omega-a-8693-wsmoulding', 'шт.', '353258121/ 6252ASMS', '', ''),
(153, 12503, 1, 'OPEL OMEGA B 94- WS-Moulding+ устан. комплект', 'opel-omega-b-94-wsmoulding-ustan-komplekt', 'шт.', '353288102/ 6261AKMH6A', 'Комплект', ''),
(154, 31800, 1, 'OPEL VECTRA A 88-95 WS-Moulding', 'opel-vectra-a-8895-wsmoulding', 'шт.', '355218122/ 6253ASMH', '', ''),
(155, 31684, 1, 'OPEL VECTRA A 88-95 WS-Moulding OEM', 'opel-vectra-a-8895-wsmoulding-oem', 'шт.', '355218121/ 6253ASMH', '', ''),
(156, 3372, 1, 'OPEL VEСTRA В 95-03 WS-Moulding верхний', 'opel-vestra-v-9503-wsmoulding-verhnij', 'шт.', '355248136/ 6277ASMHT', 'Верхний', ''),
(157, 31813, 1, 'OPEL VEСTRA С 03- WS-Метражный, 20м в бухте', 'opel-vestra-s-03-wsmetrazhnyj-20m-v-buhte', 'м.', '5058-20', '20 м в бухте', ''),
(158, 12200, 1, 'OPEL VIVARO 01- WS-Moulding верхний', 'opel-vivaro-01-wsmoulding-verhnij', 'шт.', '802118131/ 6300ASMVT', 'Верхний', 'OPEL Vivaro (01-) - WS-Moulding top'),
(159, 31692, 1, 'P. PARTNEER/C. BERLINGO  WS-устан. комплект incl. распорка', 'p-partneerc-berlingo-wsustan-komplekt-incl-rasporka', 'шт.', '812018131/ 6537AKMV', 'Комплект вкладышей-распорок', ''),
(160, 31693, 1, 'P. PARTNEER/C. BERLINGO WS-Moulding 1pc.', 'p-partneerc-berlingo-wsmoulding-1pc', 'шт.', '812018132/ 6537ASMV', '', ''),
(161, 12228, 1, 'RENAULT CLIO II 98-05 WS-Moulding установочный комплект', 'renault-clio-ii-9805-wsmoulding-ustanovochnyj-komplekt', 'шт.', '393278132/7248AKMHG', '4шт:1 x WS-Cover moulding top without spoiler;1 x WS-Cover moulding top with spoiler; 1 x WS-Cover mouldling left; 1 x WS-Cover moulding right', ''),
(162, 3373, 1, 'RENAULT KANGOO II 11/01-07 WS-Moulding', 'renault-kangoo-ii-110107-wsmoulding', 'шт.', '392168137/ 7246ASMV1H', '', ''),
(163, 31801, 1, 'RENAULT KANGOO III 08- WS-Moulding', 'renault-kangoo-iii-08-wsmoulding', 'шт.', '392178131/ 7274ASMV', '', ''),
(164, 31689, 1, 'RENAULT MAGNUM AE 380/500 90- WS-Moulding', 'renault-magnum-ae-380500-90-wsmoulding', 'шт.', '821058131/ 7233ASML', '', ''),
(165, 12049, 1, 'RENAULT MEGANE II 02-08 WS-Moulding', 'renault-megane-ii-0208-wsmoulding', 'шт.', '397258131/ 7260ASMH', '', ''),
(166, 12229, 1, 'RENAULT MEGANE SCENIC II 03-09 WS-Moulding', 'renault-megane-scenic-ii-0309-wsmoulding', 'шт.', '397288132/ 7257ASMV', '', ''),
(167, 11382, 1, 'RENAULT PREMIUM 96- WS-Moulding', 'renault-premium-96-wsmoulding', 'шт.', '821718131/ 7242ASML', '', ''),
(168, 31802, 1, 'SCANIA 4 Series 94/114/144 96-04 WS-Moulding Резиновый', 'scania-4-series-94114144-9604-wsmoulding-rezinovyj', 'шт.', '830638111/ 7506ASRL', 'Резиновый', ''),
(169, 31819, 1, 'SKODA OCTAVIA TOUR 98-04 WS-Moulding верхний', 'skoda-octavia-tour-9804-wsmoulding-verhnij', 'шт.', '430458131/ 7807ASMHT', 'Верхний', ''),
(170, 31818, 1, 'SKODA OCTAVIA I/Octavia Tour 98-04 WS-Нижняя планка, к-т из 3шт.', 'skoda-octavia-ioctavia-tour-9804-wsnizhnyaya-planka-kt-iz-3sht', 'шт.', '430458132/ 7807AKMHB', 'Нижняя планка, комплект из 3шт', ''),
(171, 12050, 1, 'SUBARU FORESTER II 02-08 WS-Moulding', 'subaru-forester-ii-0208-wsmoulding', 'шт.', '441028132/ 7928ASMR', '', ''),
(172, 31803, 1, 'SUBARU FORESTER III 08- WS-Moulding', 'subaru-forester-iii-08-wsmoulding', 'шт.', '441038131/ 7934ASMR', '', ''),
(173, 12221, 1, 'SUBARU FORESTER I 97-02 WS-Moulding top', 'subaru-forester-i-9702-wsmoulding-top', 'шт.', '441008131/ 7923ASMRT', '', ''),
(174, 31804, 1, '&quot;SUBARU IMPREZA SDN 07- WS- &quot;&quot;П&quot;&quot; образный&quot;', 'quotsubaru-impreza-sdn-07-ws-quotquotpquotquot-obraznyjquot', 'шт.', '440788131/ 7932ASMH', '', ''),
(175, 31805, 1, 'SUZUKI GRAND VITARA II 05- WS-Moulding', 'suzuki-grand-vitara-ii-05-wsmoulding', 'шт.', '558058132/ 8032ASMR', '', ''),
(176, 12198, 1, 'TOYOTA AVENSIS II 03-08 WS-Moulding с дождевым каналом', 'toyota-avensis-ii-0308-wsmoulding-s-dozhdevym-kanalom', 'шт.', '470368132/ 8346ASMH', 'С дождевым каналом', ''),
(177, 12199, 1, 'TOYOTA AVENSIS I 98-03 WS-Moulding', 'toyota-avensis-i-9803-wsmoulding', 'шт.', '470318132/ 8305ASMH', '', ''),
(178, 2568, 1, 'TOYOTA AVENSIS VERSO 01- WS-Moulding верхний OEM', 'toyota-avensis-verso-01-wsmoulding-verhnij-oem', 'шт.', '470348132/ 8333ASMVT', 'Верхний', ''),
(179, 3377, 1, 'TOYOTA CAMRY 01-06 WS-Moulding', 'toyota-camry-0106-wsmoulding', 'шт.', '473508131/ 8339ASMS', '', ''),
(180, 12055, 1, 'TOYOTA CAMRY 91-96 WS-Moulding верхний', 'toyota-camry-9196-wsmoulding-verhnij', 'шт.', '473468131/ 8278ASMSTC', 'Верхний', ''),
(181, 11604, 1, 'TOYOTA CAMRY 96-01 WS-Moulding верхний', 'toyota-camry-9601-wsmoulding-verhnij', 'шт.', '473498131/ 8302ASMST', 'Верхний', ''),
(182, 12051, 1, 'TOYOTA CARINA IV AT 92-98 WS-Moulding', 'toyota-carina-iv-at-9298-wsmoulding', 'шт.', '472298131/ 8282ASMH', '', ''),
(183, 31806, 1, 'TOYOTA HIACE LH102 95-06 WS-Moulding с дождевым каналом', 'toyota-hiace-lh102-9506-wsmoulding-s-dozhdevym-kanalom', 'шт.', '860178131/ 8295ASMVTG', '', ''),
(184, 12052, 1, 'TOYOTA LAND CRUISER HDJ100 98-03 WS-Moulding верхний', 'toyota-land-cruiser-hdj100-9803-wsmoulding-verhnij', 'шт.', '861598131/ 8306ASMRT', 'Верхний', ''),
(185, 31807, 1, 'TOYOTA LAND CRUISER PRADO J120 03- WS-Moulding верхний OEM', 'toyota-land-cruiser-prado-j120-03-wsmoulding-verhnij-oem', 'шт.', '861608132/ 8341ASMRT', 'Верхний', ''),
(186, 31539, 1, 'TOYOTA YARIS I 99-05 WS-Moulding', 'toyota-yaris-i-9905-wsmoulding', 'шт.', '477008131/ 8310ASMH', '', ''),
(187, 31540, 1, 'TOYOTA YARIS VERSO 99-05 WS-Moulding', 'toyota-yaris-verso-9905-wsmoulding', 'шт.', '477028131/ 8317ASMV', '', ''),
(188, 31808, 1, 'VW CRAFTER 06- WS-Moulding OEM', 'vw-crafter-06-wsmoulding-oem', 'шт.', '912218131/ 8590ASMV', '', ''),
(189, 31812, 1, 'VW GOLF A3/A4/OCTAVIA/PASSAT WS-Самоклеющийся (100м в бухте)', 'vw-golf-a3a4octaviapassat-wssamoklejuschijsya-100m-v-buhte', 'м.', '5015-100', 'Самоклеющийся 100 м в бухте', ''),
(190, 11919, 1, 'WS-Clip A- стойки черные 10 шт в комплекте', 'wsclip-a-stojki-chernye-10-sht-v-komplekte', 'шт.', '475768132', 'клипсы стойки черные МЕРСЕДЕС ВИТО 95-03', ''),
(191, 31814, 1, 'VW GOLF V/SUPER B WS-Метражный, 20м в бухте', 'vw-golf-vsuper-b-wsmetrazhnyj-20m-v-buhte', 'м.', '5059-20', '20 м в бухте', ''),
(192, 12342, 1, 'VW PASSAT  IV B3/B4 88-96 WS-Moulding', 'vw-passat-iv-b3b4-8896-wsmoulding', 'шт.', '523238131/ 8535ASMH', '', ''),
(193, 12057, 1, 'VW SHARAN/FORD GALAXI 95-03 WS-Moulding top', 'vw-sharanford-galaxi-9503-wsmoulding-top', 'шт.', '520018131/ 8548ASMVT', '', 'VW Sharan (95-03) - WS-Moulding top'),
(194, 31687, 1, 'VW T-4 91-04 WS-Moulding цельный', 'vw-t4-9104-wsmoulding-celnyj', 'шт.', '911218121/ 8537ASMV', '', ''),
(195, 31696, 1, 'VW T-4 уплотнитель для бокового стекла метражный (25м бухте)', 'vw-t4-uplotnitel-dlya-bokovogo-stekla-metrazhnyj-25m-buhte', 'м.', '5028', '25 м в бухте', ''),
(196, 31697, 1, 'VW T-4 уплотнитель для лобового стекла метражный, 30м в бухте', 'vw-t4-uplotnitel-dlya-lobovogo-stekla-metrazhnyj-30m-v-buhte', 'м.', '5037-30', '30 м в бухте', ''),
(197, 31695, 1, 'ЕВРО молдинг самоклеющийся двойной, метражный 27м. в бухте', 'evro-molding-samoklejuschijsya-dvojnoj-metrazhnyj-27m-v-buhte', 'м.', '5024-27', 'Универсальный самоклеящийся резиновый профиль. Двойной. Длина рулона – 27 метров.  Наклеивается под стекло на слой шелкографии. Предназначен для установки со стеклами автомобилей следующих марок: AUDI, FIAT, FORD, MERCEDES, NISSAN, PEUGEOT, SKODA, VW.', ''),
(198, 32057, 1, 'Универсальный профиль с бутилом внутри 22 мм, 23м в бухте', 'universalnyj-profil-s-butilom-vnutri-22-mm-23m-v-buhte', 'м.', '5041-25E', '22 мм с бутилом 23 м в бухте', ''),
(199, 31701, 1, 'Универсальный молдинг для лоб. стекла метражный AUDI/MERC.(30м в б.)', 'universalnyj-molding-dlya-lob-stekla-metrazhnyj-audimerc30m-v-b', 'м.', '5047', '30 м в бухте', ''),
(200, 31810, 1, 'Универсальный профиль с бутилом внутри 16 мм, 30м в бухте', 'universalnyj-profil-s-butilom-vnutri-16-mm-30m-v-buhte', 'м.', '5021-30', 'Самоклеящийся резиновый молдинг. Длина рулона – 30 метров. Предназначен для установки с лобовыми стеклами автомобилей марок: ALFA ROMEO, BMW, CHRYSLER, FIAT, FORD, HONDA, HYUNDAI, JEEP, KIA, MAZDA, MITSUBISHI, NISSAN, OPEL, RENAULT, SUZUKI,TOYOTA, VOLVO', ''),
(201, 31809, 1, 'Универсальный профиль с бутилом внутри 17 мм, 23м в бухте', 'universalnyj-profil-s-butilom-vnutri-17-mm-23m-v-buhte', 'м.', '5040-30E', '23 м в бухте', ''),
(202, 31816, 1, 'Универсальный профиль с бутилом внутри 20 мм, 23м в бухте', 'universalnyj-profil-s-butilom-vnutri-20-mm-23m-v-buhte', 'м.', '5044-25E', '23 м в бухте', ''),
(203, 12703, 1, 'Гель для установки датчиков «Sensor Tack 1»', 'gel-dlya-ustanovki-datchikov-sensor-tack-1', 'шт.', '', '2-х компонентная гелевая масса, предназначенная для установки датчиков дождя и света на ветровое стекло автомобиля. Позволяет повторно  использовать датчики. Применяется до - 15 ° C. Шприц, заполненный составом, 2Х2мл;Специальный смешивающий носик.', ''),
(204, 31725, 1, 'Гель для установки датчиков «Sensor Tack 2»', 'gel-dlya-ustanovki-datchikov-sensor-tack-2', 'шт.', '', '2-компонентный силиконовый гель для ремонта квадратного типа датчиков для VW Passat B6,Tiguan и т.д.Позволяет повторное использование квадратного типа датчиков дождя и света.Быстрый и простой в применении,датчик можно подключить в течении нескольких минут', ''),
(205, 2007, 1, 'Набор для ремонта квадратных датчиков дождя/света', 'nabor-dlya-remonta-kvadratnyh-datchikov-dozhdyasveta', 'шт.', '', 'Стандартный набор для ремонта квадратного типа датчиков дождя /света', ''),
(206, 2307, 1, 'Грунтовка для ремонта трещин и сколов 10 мл', 'gruntovka-dlya-remonta-treschin-i-skolov-10-ml', 'шт.', '10453830P', 'Прозрачным связующим агентом является необходимым, если качественный ремонт ударов камней должны проводиться с использованием высокой и низкой вязкости смолы', ''),
(207, 11150, 1, 'Полимер высокой вязкости для ремонта трещин и сколов 20 мл красный', 'polimer-vysokoj-vyazkosti-dlya-remonta-treschin-i-skolov-20-ml-krasnyj', 'шт.', '10460102', 'Такая высокая ударная вязкость-наполнитель, который лечит с помощью УФ света используется для ремонта больших повреждений поверхности от ударов камней.', ''),
(208, 31490, 1, 'Полимер низкой вязкости для ремонта трещин и сколов 20 мл чёрный', 'polimer-nizkoj-vyazkosti-dlya-remonta-treschin-i-skolov-20-ml-chjornyj', 'шт.', '10460101', 'Низковязкие повреждения камнями ремонта смолы с лучшими качествами потока.', ''),
(209, 12702, 1, 'Полимер экстра-низкой вязкости для ремонта трещин и сколов 20гр', 'polimer-jekstranizkoj-vyazkosti-dlya-remonta-treschin-i-skolov-20gr', 'шт.', '10460103GB', '1-компонент УФ смолы сверхнизкое вязкости специально разработан для адгезии на стекло с высокой эластичностью при низких температурах.', '10460103GB'),
(210, 31847, 1, 'Активатор PT750  250мл.', 'aktivator-pt750-250ml', 'шт.', '13345038', 'Прозрачный на основе растворителя стекла и PU активатор для черной грунтовкой без приклеивания ветрового стекла автомобиля. PT 750 PLUS является экологически чистым, прозрачным грунтовки и активатора в сочетании в одном продукте.', ''),
(211, 31721, 1, 'Активатор PT775  30мл.', 'aktivator-pt775-30ml', 'шт.', '13345036', '', ''),
(212, 31711, 1, 'Клей PT100 600г 3 час (12шт.) носики+праймер+активатор', 'klej-pt100-600g-3-chas-12sht-nosikiprajmeraktivator', 'уп.', '13345002RA', 'Набор: Клей РТ 100- 12 шт; праймер РТ-728 -250 мл; активатор РТ-775 - 30 мл; 12 носиков; 30 аппликаторов', ''),
(213, 31875, 1, 'Клей PT100 600г 3ч. 1 шт.', 'klej-pt100-600g-3ch-1-sht', 'шт.', '13345002', '', ''),
(214, 31710, 1, 'Клей PT290 400г 1 час (15шт.) носики+праймер+активатор', 'klej-pt290-400g-1-chas-15sht-nosikiprajmeraktivator', 'уп.', '13345004RA', 'Набор: Клей РТ 290 -15 шт; праймер РТ-728 -100 мл; активатор РТ-775 - 30 мл; 15 носиков; 20 аппликаторов', ''),
(215, 31820, 1, 'Клей PT290 600г 1 час (12шт.) +активатор', 'klej-pt290-600g-1-chas-12sht-aktivator', 'уп.', '13345005RA', 'Набор: Клей РТ 290 - 12 шт; активатор РТ-750 -250 мл; 12 носиков', ''),
(216, 31912, 1, 'Клей PT290 600г 1ч. 1шт.', 'klej-pt290-600g-1ch-1sht', 'шт.', '13345005', '', ''),
(217, 31930, 1, 'Праймер PT 728 -100 мл', 'prajmer-pt-728-100-ml', 'шт.', '13345040', '', ''),
(218, 31789, 1, 'Праймер PT 728 -250 мл', 'prajmer-pt-728-250-ml', 'шт.', '13345040', '', ''),
(219, 32871, 1, 'Пластиковая вставка в пистолет для клея', 'plastikovaya-vstavka-v-pistolet-dlya-kleya', 'шт.', '', '', ''),
(220, 32870, 1, 'WS-Clip A- стойки белые 10 шт в комплекте', 'wsclip-a-stojki-belye-10-sht-v-komplekte', 'шт.', '', '', ''),
(221, 32318, 1, 'FORD ESCORT III 81-90 WS-Moulding', 'ford-escort-iii-8190-wsmoulding', 'шт.', '3534ASRH', '', ''),
(222, 32319, 1, 'FORD FIESTA V 95-02 WS-Moulding', 'ford-fiesta-v-9502-wsmoulding', 'шт.', '3552ASMH', '', ''),
(223, 32321, 1, 'HONDA ACCORD 02-08 WS-Moulding (Киев)', 'honda-accord-0208-wsmoulding-kiev', 'шт.', '3986ASMST', '', ''),
(224, 32322, 1, 'HONDA CR-V 02-07  WS-Moulding верхний', 'honda-crv-0207-wsmoulding-verhnij', 'шт.', '3983ASMRT', '', ''),
(225, 32323, 1, 'MITSUBISHI COLT V 96-04 WS-Moulding', 'mitsubishi-colt-v-9604-wsmoulding', 'шт.', '5647ASMHT', '', ''),
(226, 32325, 1, 'MITSUBISHI SPACE STAR 98-05 WS-Moulding верхний', 'mitsubishi-space-star-9805-wsmoulding-verhnij', 'шт.', '5655ASMVT', '', ''),
(227, 32327, 1, 'OPEL FRONTERA I 92-98 WS-Moulding top', 'opel-frontera-i-9298-wsmoulding-top', 'шт.', '6258ASMRT', '', ''),
(228, 32328, 1, 'PEUGEOT 206 98-06 WS-Moulding верхний', 'peugeot-206-9806-wsmoulding-verhnij', 'шт.', '6539ASMHT', '', ''),
(229, 12231, 1, 'SETRA 215 HD WS-MOULDING', 'setra-215-hd-wsmoulding', 'шт.', 'S215', 'S215', ''),
(230, 11452, 1, 'SETRA 315 HD SET 520AR WS-MOULDING', 'setra-315-hd-set-520ar-wsmoulding', 'шт.', '700578111/S315', '', ''),
(231, 32872, 1, 'Образцы универсальных профилей', 'obrazcy-universalnyh-profilej', 'шт.', 'PRO-007', '', ''),
(232, 32873, 1, 'Плакаты с образцами универсальных профилей', 'plakaty-s-obrazcami-universalnyh-profilej', 'шт.', 'PRO-004', '', ''),
(364, 33361, 1, 'Универсальный профиль с бутилом внутри 25 мм, 30м в бухте', 'universalnyj-profil-s-butilom-vnutri-25-mm-30m-v-buhte', 'м.', '5034-30', '', ''),
(250, 32882, 1, 'DAEWOO NUBIRA/LACETTI 04-  WS-Moulding', 'daewoo-nubiralacetti-04-wsmoulding', 'шт.', '', '', ''),
(233, 32905, 1, '&quot;Датчик площадка  &quot;&quot;Тип 6&quot;&quot;, силикон&quot;', 'quotdatchik-ploschadka-quotquottip-6quotquot-silikonquot', 'шт.', '', '', ''),
(234, 32904, 1, '&quot;Пластырь для датчика  Audi/Opel &quot;&quot;Тип 2&quot;&quot; силикон&quot;', 'quotplastyr-dlya-datchika-audiopel-quotquottip-2quotquot-silikonquot', 'шт.', '', 'Это новая улучшенная площадка акриловая имеет язычок для легкого удаления клея крышку панели.', ''),
(235, 32957, 1, 'Защитная сетка', 'zaschitnaya-setka', 'шт.', '01111718', '', ''),
(236, 32962, 1, 'Защитные гильзы', 'zaschitnye-gilzy', 'шт.', '', 'Задний Стеклоочиститель / стеклоомыватель защитой форсунки', ''),
(237, 32958, 1, 'Инструмент для втягивания уплотнителя 9,5 мм', 'instrument-dlya-vtyagivaniya-uplotnitelya-95-mm', 'шт.', '', 'Уплотнитель втягивании инструментом в различных размерах', ''),
(238, 32961, 1, 'Инструмент для демонтажа молдингов', 'instrument-dlya-demontazha-moldingov', 'шт.', '', 'Используется для удаления декоративных накладок удерживается на месте крепежные клипсы, внутренней отделки и щитки.', ''),
(239, 32901, 1, 'Клейкая лента для автостекла или монтажа 55м', 'klejkaya-lenta-dlya-avtostekla-ili-montazha-55m', 'шт.', '', '', ''),
(240, 32953, 1, 'Лезвия 13 мм  1 шт', 'lezviya-13-mm-1-sht', 'шт.', '', 'Трех доступных длины лезвий гарантируют чистое и без повреждений отрезать согласно ширине PU шарик.', ''),
(241, 32954, 1, 'Лезвия 16 мм  1 шт', 'lezviya-16-mm-1-sht', 'шт.', '', 'Трех доступных длины лезвий гарантируют чистое и без повреждений отрезать согласно ширине PU шарик.', ''),
(242, 32879, 1, 'Литой крепежный зажим для монтажа', 'litoj-krepezhnyj-zazhim-dlya-montazha', 'шт.', '', 'Провести клееного молдинги крышку на место, пока они не устанавливаются. Полоса крепится в нужное положение даже давления.', ''),
(243, 32902, 1, 'Набор с вак.насосом', 'nabor-s-vaknasosom', 'шт.', '', 'Эта Профи Лайн стекла Ремкомплект содержит мощный 220 УФ-лампы, улучшенный моста и три УФ ремонт смол в различной вязкости, каждый 20 мл.', ''),
(244, 32903, 1, 'Присоска для стекла с насадочной гайкой', 'prisoska-dlya-stekla-s-nasadochnoj-gajkoj', 'шт.', '', 'Для самоблокирующимся провода ручки и небольшие шаблоны гвардии проволоки', ''),
(245, 32955, 1, 'Скребок для очистки стекла (стамеска)', 'skrebok-dlya-ochistki-stekla-stameska', 'шт.', '', 'Специально разработанные PU скребок с эргономичной ручкой, удлиненным валом и гексагональной внутренних вложений лезвия', ''),
(246, 32959, 1, 'Сменные кольца для инструмента 10.5 мм', 'smennye-kolca-dlya-instrumenta-105-mm', 'шт.', '', '', ''),
(247, 32906, 1, 'Сменные ножи тонкие (упак.10шт) 38мм 1шт', 'smennye-nozhi-tonkie-upak10sht-38mm-1sht', 'шт.', '', 'Подходит для всех холодных ножей.', ''),
(248, 32956, 1, 'Холодный нож', 'holodnyj-nozh', 'шт.', '', 'Подходит для всех обычных клееных окон. Мягкая синяя обложка помогает предотвратить повреждения рук и транспортных средств.', ''),
(249, 32951, 1, 'Шило с отверстием под струну', 'shilo-s-otverstiem-pod-strunu', 'шт.', '', 'Этот инструмент предназначен для прокалывания PU бисером. Провод можно подавать через  инструмент.', ''),
(251, 32963, 1, 'ISUZU TROOPER 1 (83-92) - WS-Резиновый без вставки', 'isuzu-trooper-1-8392-wsrezinovyj-bez-vstavki', 'шт.', '', '', ''),
(252, 32880, 1, 'MERCEDES VITO 96-03  WS-Moulding', 'mercedes-vito-9603-wsmoulding', 'шт.', '', '', ''),
(253, 32332, 1, 'MERCEDES W123 76-86 WS-Moulding', 'mercedes-w123-7686-wsmoulding', 'шт.', '', '', ''),
(254, 32883, 1, 'NISSAN PATROL 81-97 WS-Moulding', 'nissan-patrol-8197-wsmoulding', 'шт.', '', '', ''),
(255, 32885, 1, 'TOYOTA COROLLA SDN 02-06 WS-Moulding', 'toyota-corolla-sdn-0206-wsmoulding', 'шт.', '', '', ''),
(256, 32881, 1, 'TOYOTA LAND CRUISER HDJ80 91-96 WS-Moulding', 'toyota-land-cruiser-hdj80-9196-wsmoulding', 'шт.', '', '', '');
INSERT INTO `products_ext` (`id`, `item_master_id`, `lang`, `title`, `translit`, `units`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(257, 32884, 1, 'TOYOTA LAND CRUISER V8, 08- WS-Moulding верхний', 'toyota-land-cruiser-v8-08-wsmoulding-verhnij', 'шт.', '', '', ''),
(258, 32337, 1, 'VW GOLF II/JETTA 83-91 WS-Moulding цельный', 'vw-golf-iijetta-8391-wsmoulding-celnyj', 'шт.', '', '', ''),
(259, 32960, 1, 'Клей для зеркал', 'klej-dlya-zerkal', 'шт.', '13373405GB', 'PT стекло / металл наборе для склеивания был специально разработан для приклеивания зеркала заднего вида на ветровое стекло. клей вступает в силу после ок. 20 секунд', ''),
(260, 32886, 1, 'Клей PT100 600г 3 час (12шт.) НОВЫЙ +активатор', 'klej-pt100-600g-3-chas-12sht-novyj-aktivator', 'уп.', '13345002RA', '', ''),
(261, 32891, 1, 'Клей PT100 600г 3ч.  Новый 1 шт.', 'klej-pt100-600g-3ch-novyj-1-sht', 'шт.', '13345002', '', ''),
(262, 32887, 1, 'Клей PT290 400г 1 час (15шт.) НОВЫЙ +активатор', 'klej-pt290-400g-1-chas-15sht-novyj-aktivator', 'уп.', '13345005RA', '', ''),
(263, 31913, 1, 'Клей PT290 400г 1ч. 1шт.', 'klej-pt290-400g-1ch-1sht', 'шт.', '13345004', '', ''),
(264, 32890, 1, 'Клей PT290 400г 1ч. 1шт. НОВЫЙ', 'klej-pt290-400g-1ch-1sht-novyj', 'шт.', '13345004', '', ''),
(265, 32888, 1, 'Клей PT290 600г 1 час (12шт.) НОВЫЙ +активатор', 'klej-pt290-600g-1-chas-12sht-novyj-aktivator', 'уп.', '13345005RA', '', ''),
(266, 32889, 1, 'Клей PT290 600г 1ч. Новый 1шт.', 'klej-pt290-600g-1ch-novyj-1sht', 'шт.', '13345005', 'PT 290 PLUS HM / LC является высокий модуль 1-компонентный герметик для ветровых стекол транспортных средств связи. Он лечит очень быстро при температуре окружающей среды при взаимодействии с влажностью воздуха.', ''),
(290, 33004, 1, 'Клипсы стойки MERCEDES VANEO 02- металические', 'klipsy-stojki-mercedes-vaneo-02-metalicheskie', 'шт.', '', '', ''),
(267, 33251, 1, 'PT 310 PLUS  Активатор 200 мл', 'pt-310-plus-aktivator-200-ml', 'шт.', '', 'PT 310 активатор используется в качестве жидкого связующего, сцепления датчика и поверхности ветрового стекла.', ''),
(268, 33010, 1, '3М полировка для очистки поверхности', '3m-polirovka-dlya-ochistki-poverhnosti', 'шт.', '', '3M ™ Glass полировки используется с 3M ™ Шлифовальная прокладка для окончательной обработки стеклянных поверхностей.', ''),
(269, 33005, 1, '3М полировочная площадка1 шт', '3m-polirovochnaya-ploschadka1-sht', 'шт.', '', '3M ™ Шлифовальная прокладка используется с 3M ™ Glass полировки для окончательной обработки очки.', ''),
(270, 33006, 1, '3М полировочный диск А10 синий', '3m-polirovochnyj-disk-a10-sinij', 'шт.', '', '3M ™ полировки дисков', ''),
(271, 33011, 1, '3М полировочный диск А35 зеленый 1 шт', '3m-polirovochnyj-disk-a35-zelenyj-1-sht', 'шт.', '', 'полировочный диск крупнозернистый', ''),
(272, 33007, 1, '3М полировочный диск А5 коричневый', '3m-polirovochnyj-disk-a5-korichnevyj', 'шт.', '', 'полировочный диск мелко зернистый', ''),
(273, 33009, 1, '3М полировочный диск Р белый 1 шт', '3m-polirovochnyj-disk-r-belyj-1-sht', 'шт.', '', 'полировочный диск очень мелкозернистый', ''),
(274, 33082, 1, 'Бегунок со шнуром, длинна шнура 8м', 'begunok-so-shnurom-dlinna-shnura-8m', 'шт.', '', 'Шнур бегун подходит для буксировки в большинстве резиновым подвесом на ветровые стекла грузовика', ''),
(275, 33172, 1, 'Держатель для струны короткий черный', 'derzhatel-dlya-struny-korotkij-chernyj', 'шт.', '', 'Специальные ручки для зажима проводов настолько плотно, чтобы сделать невозможным поставить провод из.', ''),
(276, 33309, 1, 'Жидкость для полировки стекл, 80мл.', 'zhidkost-dlya-polirovki-stekl-80ml', 'шт.', '', 'Этот шлифовальный материал используется для полировки закаленную поверхность смолы УФ', ''),
(277, 33014, 1, 'Лезвия для ножа 40мм, 100шт в упаковке', 'lezviya-dlya-nozha-40mm-100sht-v-upakovke', 'шт.', '', 'используйте новые ножи, как выскабливание на стекле.', ''),
(278, 33342, 1, 'Ножницы для носиков', 'nozhnicy-dlya-nosikov', 'шт.', '', 'Эти клещи разработаны, чтобы сделать точную глубину резания в сопла картриджа', ''),
(279, 33363, 1, 'Пластиковый набор для демонтажа панели, 5 штук синий', 'plastikovyj-nabor-dlya-demontazha-paneli-5-shtuk-sinij', 'шт.', '', 'Специальная конструкция позволяет получить доступ в областях, которые являются труднодоступными. Специальные тяжелые ABS строительства дает силу и гибкость без хрупкости.', ''),
(280, 33362, 1, 'Пластиковый набор для демонтажа панели, 6 штук красный', 'plastikovyj-nabor-dlya-demontazha-paneli-6-shtuk-krasnyj', 'шт.', '', 'Изготовлен из ударопрочного высококачественного нейлона, эти инструменты минимизации риска скребок для приборной панели.', ''),
(281, 33161, 1, 'Присоска мантажная с двумя большими чашками синяя', 'prisoska-mantazhnaya-s-dvumya-bolshimi-chashkami-sinyaya', 'шт.', '', 'Присоски прилипают к поверхности стекла при малейшем приложения давления.', ''),
(282, 33020, 1, 'Скребок для очистки стекла (стамеска широкая)', 'skrebok-dlya-ochistki-stekla-stameska-shirokaya', 'шт.', '', 'Подходит для удаления этикетки и ПУ остатки.', ''),
(283, 33387, 1, 'Сменные кольца для инструмента 12 мм', 'smennye-kolca-dlya-instrumenta-12-mm', 'шт.', '', '', ''),
(284, 33003, 1, 'Сменные ножи специальные тонкие (упак.5шт) 25мм 1 шт', 'smennye-nozhi-specialnye-tonkie-upak5sht-25mm-1-sht', 'шт.', '', 'Он используется для удаления клея из стекла и формование.', ''),
(285, 33001, 1, 'Сменные ножи тонкие (упак.10шт) 19мм 1шт', 'smennye-nozhi-tonkie-upak10sht-19mm-1sht', 'шт.', '', 'Подходит для всех холодных ножей', ''),
(286, 33002, 1, 'Сменные ножи тонкие (упак.10шт) 25мм 1шт', 'smennye-nozhi-tonkie-upak10sht-25mm-1sht', 'шт.', '', 'Подходит для всех холодных ножей', 'Подходит для всех холодных ножей'),
(287, 33308, 1, 'Стекольный очиститель, концентрат, 125мл, 1:80', 'stekolnyj-ochistitel-koncentrat-125ml-180', 'шт.', '', 'Средство для мытья стекол концентрат, 125 мл, 1:80 (на 10 литров) (PMA / TOOLS)', ''),
(288, 33388, 1, 'Съемник для дворников большой', 'semnik-dlya-dvornikov-bolshoj', 'шт.', '', 'Съемник устраняет проблемы стеклоочистителей удаления.', ''),
(289, 33364, 1, 'Съемник для дворников маленький', 'semnik-dlya-dvornikov-malenkij', 'шт.', '', 'Стеклоочиститель для удаления Легкий лифт', ''),
(291, 33028, 1, 'AUDI 80 86-95 WS-Moulding черный с заглушками', 'audi-80-8695-wsmoulding-chernyj-s-zaglushkami', 'шт.', '', '', ''),
(292, 33090, 1, 'BMW 3 Series E-36 COUPE 91-98 WS-Moulding', 'bmw-3-series-e36-coupe-9198-wsmoulding', 'шт.', '', '', ''),
(293, 33348, 1, 'BMW 3 Series E-46 01- Series Compact WS-Moulding', 'bmw-3-series-e46-01-series-compact-wsmoulding', 'шт.', '', '', ''),
(294, 33358, 1, 'BMW 3 Series E-90 05-12 WS-Moulding верхний', 'bmw-3-series-e90-0512-wsmoulding-verhnij', 'шт.', '', '', ''),
(295, 33033, 1, 'BMW 3 Series E-90 05-12 WS-Moulding верхний OEM', 'bmw-3-series-e90-0512-wsmoulding-verhnij-oem', 'шт.', '', '', ''),
(296, 33062, 1, 'BMW 5 Series E-39 95-03 BL-Moulding задний', 'bmw-5-series-e39-9503-blmoulding-zadnij', 'шт.', '', '', ''),
(297, 33021, 1, 'BMW 5 Series E-60/E-61 03-10 WS-Moulding верхний', 'bmw-5-series-e60e61-0310-wsmoulding-verhnij', 'шт.', '', '', ''),
(298, 33316, 1, 'BMW X1 E84 09- WS-Moulding нижний', 'bmw-x1-e84-09-wsmoulding-nizhnij', 'шт.', '', '', ''),
(299, 33312, 1, 'BMW X5 E70 06- WS-Moulding верхний, железная крыша OEM', 'bmw-x5-e70-06-wsmoulding-verhnij-zheleznaya-krysha-oem', 'шт.', '', '', ''),
(300, 33313, 1, 'BMW X5 E70 06- WS-Moulding верхний, панор. крыша OEM', 'bmw-x5-e70-06-wsmoulding-verhnij-panor-krysha-oem', 'шт.', '', '', ''),
(301, 33319, 1, 'BMW X6 E71 08- WS-Moulding верхний, железная крыша', 'bmw-x6-e71-08-wsmoulding-verhnij-zheleznaya-krysha', 'шт.', '', '', ''),
(302, 33320, 1, 'BMW X6 E71 08- WS-Moulding верхний, панор. крыша', 'bmw-x6-e71-08-wsmoulding-verhnij-panor-krysha', 'шт.', '', '', ''),
(303, 33197, 1, 'CHEVROLET AVEO/DAEWOO KALOS 03-06 WS-Moulding', 'chevrolet-aveodaewoo-kalos-0306-wsmoulding', 'шт.', '', '', ''),
(304, 33227, 1, 'CITROEN Berlingo I 97-08 - WS- рамка лобового стекла', 'citroen-berlingo-i-9708-ws-ramka-lobovogo-stekla', 'шт.', '', '', ''),
(305, 33037, 1, 'DACIA LOGAN 05- WS-Moulding нижний', 'dacia-logan-05-wsmoulding-nizhnij', 'шт.', '', '', ''),
(306, 33174, 1, 'DAEWOO NEXIA 94- WS-Moulding с дождевым каналом', 'daewoo-nexia-94-wsmoulding-s-dozhdevym-kanalom', 'шт.', '', '', ''),
(307, 33314, 1, 'DAEWOO TICO 96-01 WS-Moulding литой внутренний', 'daewoo-tico-9601-wsmoulding-litoj-vnutrennij', 'шт.', '255048135', '', ''),
(308, 33102, 1, 'FIAT PUNTO 93-99 WS-Moulding', 'fiat-punto-9399-wsmoulding', 'шт.', '217308121/3341ASMH', '', ''),
(309, 33321, 1, 'FIAT UNO 88-95 WS-Moulding резин. цельный', 'fiat-uno-8895-wsmoulding-rezin-celnyj', 'шт.', '212508111/3338ASRH', '', ''),
(310, 32825, 1, 'FORD SIERRA WS-Moulding метражный 19мм, 50м в бухте', 'ford-sierra-wsmoulding-metrazhnyj-19mm-50m-v-buhte', 'м.', '5001', '', ''),
(311, 31702, 1, 'FORD TRANSIT T-15 86-00 WS-Moulding метражный 21мм, 25м в бух.', 'ford-transit-t15-8600-wsmoulding-metrazhnyj-21mm-25m-v-buh', 'м.', '5022', '', ''),
(312, 32998, 1, 'HONDA ACCORD 02-08 WS-Moulding верхний', 'honda-accord-0208-wsmoulding-verhnij', 'шт.', '244868132/3986ASMST', '', ''),
(313, 33169, 1, 'HONDA CR-V 07-  WS-Moulding верхний', 'honda-crv-07-wsmoulding-verhnij', 'шт.', '240978131/4000ASMRT', '', ''),
(314, 33168, 1, 'HYUNDAI ACCENT 00-05  WS-Moulding', 'hyundai-accent-0005-wsmoulding', 'шт.', '252048121/4118ASMH', '', ''),
(315, 33121, 1, 'HYUNDAI H200 STAREX 98-08  WS-Moulding', 'hyundai-h200-starex-9808-wsmoulding', 'шт.', '252808121/4116ASMV', '', ''),
(316, 33241, 1, 'HYUNDAI IX35  10-  WS-Moulding', 'hyundai-ix35-10-wsmoulding', 'шт.', '253178131/4141ASMR', '', ''),
(317, 33315, 1, 'HYUNDAI SANTA FE 06-12 WS-Moulding OEM', 'hyundai-santa-fe-0612-wsmoulding-oem', 'шт.', '253028131/4133ASMR', '', ''),
(318, 33242, 1, 'HYUNDAI TUCSON 04-10  WS-Moulding', 'hyundai-tucson-0410-wsmoulding', 'шт.', '253168131/4129ASMR', '', ''),
(319, 33386, 1, 'JEEP GRAND CHEROKEE II 99-04 - WS-Moulding верхний литой', 'jeep-grand-cherokee-ii-9904-wsmoulding-verhnij-litoj', 'шт.', '5913468131/AJ07ASMRT', '', ''),
(320, 33049, 1, 'KIA PICANTO 04- WS-Moulding', 'kia-picanto-04-wsmoulding', 'шт.', '250888131/4422ASMH', '', ''),
(321, 33243, 1, 'KIA PREGIO 98- WS-Moulding', 'kia-pregio-98-wsmoulding', 'шт.', '250848131/4404ASMV', '', ''),
(322, 33317, 1, 'LEXUS IS 99-05 WS-Moulding с дождевым каналом', 'lexus-is-9905-wsmoulding-s-dozhdevym-kanalom', 'шт.', '474058131/8309ASMS', '', ''),
(323, 33192, 1, 'LEXUS RX300/400/430 03-10 WS-Moulding верхний', 'lexus-rx300400430-0310-wsmoulding-verhnij', 'шт.', '478068132/8354ASMR', '', ''),
(324, 33244, 1, 'MAZDA 626 III  купе FLH 88-91  WS-Moulding с дождевым каналом', 'mazda-626-iii-kupe-flh-8891-wsmoulding-s-dozhdevym-kanalom', 'шт.', '301468133/5133ASMHG', '', ''),
(325, 33360, 1, 'MERCEDES ATEGO 05- WS-Moulding', 'mercedes-atego-05-wsmoulding', 'шт.', '753648123/5430ASML', '', ''),
(326, 33359, 1, 'MERCEDES ATEGO/AXOR 97-05 WS-Moulding', 'mercedes-ategoaxor-9705-wsmoulding', 'шт.', '753648122/5430AKML', '', ''),
(327, 33346, 1, 'MERCEDES E-Class W210 95-02  WS-Moulding верхний метал.', 'mercedes-eclass-w210-9502-wsmoulding-verhnij-metal', 'шт.', '317018132/5337ASMST', '', ''),
(328, 33000, 1, 'MERCEDES W123 76-86 BL-Moulding задний', 'mercedes-w123-7686-blmoulding-zadnij', 'шт.', '376118211/5320BSRS', '', ''),
(329, 33094, 1, 'MERSEDES SPRINTER I Lov 95-06 WS-Moulding', 'mersedes-sprinter-i-lov-9506-wsmoulding', 'шт.', '753358121/5426ASMV', '', ''),
(330, 33178, 1, 'MITSUBISHI CARISMA 95- WS-Moulding верхний', 'mitsubishi-carisma-95-wsmoulding-verhnij', 'шт.', '322708131/5646ASMHT', '', ''),
(331, 33052, 1, 'MITSUBISHI GALANT EAO 97- WS-Moulding верхний', 'mitsubishi-galant-eao-97-wsmoulding-verhnij', 'шт.', '323608131/5649ASMST', '', ''),
(332, 33167, 1, 'MITSUBISHI LANCER 03-07 WS-Moulding верхний', 'mitsubishi-lancer-0307-wsmoulding-verhnij', 'шт.', '321208132/5670ASMST', '', ''),
(333, 33019, 1, 'MITSUBISHI LANCER 07- WS-Moulding', 'mitsubishi-lancer-07-wsmoulding', 'шт.', '321228131/5684ASMS', '', ''),
(334, 33176, 1, 'MITSUBISHI OUTLANDER 07- WS-Moulding верхний', 'mitsubishi-outlander-07-wsmoulding-verhnij', 'шт.', '320028131/5680ASMRT', '', ''),
(335, 33095, 1, 'MITSUBISHI PAJERO I 83-91/HYUNDAI GALLOPER (98-03) WS-Moulding без вставки', 'mitsubishi-pajero-i-8391hyundai-galloper-9803-wsmoulding-bez-vstavki', 'шт.', '322318111/5621ASRR/4114', '', ''),
(336, 32324, 1, 'MITSUBISHI PAJERO WAGON 01- WS-Moulding', 'mitsubishi-pajero-wagon-01-wsmoulding', 'шт.', '325368132/5661ASMR', '', ''),
(337, 32326, 1, 'NISSAN MAXIMA 95-99 WS-Moulding', 'nissan-maxima-9599-wsmoulding', 'шт.', '5996KMST', '', ''),
(338, 33165, 1, 'NISSAN NOTE 06- WS-Moulding', 'nissan-note-06-wsmoulding', 'шт.', '180418131/6041SMH', '', ''),
(339, 33347, 1, 'NISSAN PATROL  GR 98- WS-Moulding', 'nissan-patrol-gr-98-wsmoulding', 'шт.', '660458136/6006ASMR', '', ''),
(340, 33310, 1, 'NISSAN QASHQAI 06- WS-Moulding с панор. крышой', 'nissan-qashqai-06-wsmoulding-s-panor-kryshoj', 'шт.', '186018137/6044ASMR1D', '', ''),
(341, 33311, 1, 'NISSAN TIIDA 07- WS-Moulding верхний OEM', 'nissan-tiida-07-wsmoulding-verhnij-oem', 'шт.', '183568131/6046ASMH', '', ''),
(342, 33125, 1, 'OPEL ASTRA G 98-04 WS-Moulding нижний жесткий', 'opel-astra-g-9804-wsmoulding-nizhnij-zhestkij', 'шт.', '354578133/6284ASMHB', '', ''),
(343, 33129, 1, 'OPEL COMBO 01- WS-Moulding верхний', 'opel-combo-01-wsmoulding-verhnij', 'шт.', '352318136/6292ASMVT', '', ''),
(344, 33225, 1, 'OPEL CORSA B 04/93-00 WS-Moulding лобового стекла', 'opel-corsa-b-049300-wsmoulding-lobovogo-stekla', 'шт.', '356378122/6259ASMH', '', ''),
(345, 33345, 1, 'OPEL CORSA C 00-06 WS-Moulding верхний', 'opel-corsa-c-0006-wsmoulding-verhnij', 'шт.', '356408131/6290ASMHT', '', ''),
(346, 33034, 1, 'OPEL ZAFIRA 05- WS-Moulding', 'opel-zafira-05-wsmoulding', 'шт.', '357028133/6307ASMV', '', ''),
(347, 33089, 1, 'PEUGEOT 405 87-95 WS-Moulding', 'peugeot-405-8795-wsmoulding', 'шт.', '364158123/6518ASVS', '', ''),
(348, 33344, 1, 'SSANGYONG KYRON 06- WS-Moulding', 'ssangyong-kyron-06-wsmoulding', 'шт.', '450148131/3020ASMM', '', ''),
(349, 33186, 1, 'SUZUKI GRAND VITARA I 98-05 WS-Moulding', 'suzuki-grand-vitara-i-9805-wsmoulding', 'шт.', '558038131/8020ASMR', '', ''),
(350, 32995, 1, 'TOYOTA CAMRY 06- WS-Moulding', 'toyota-camry-06-wsmoulding', 'шт.', '473518131/8377ASMS', '', ''),
(351, 33084, 1, 'TOYOTA COROLLA 96-01 WS-Moulding', 'toyota-corolla-9601-wsmoulding', 'шт.', '475768132/8304ASMH', '', ''),
(352, 33245, 1, 'TOYOTA COROLLA KE 100 92-97 WS-Moulding', 'toyota-corolla-ke-100-9297-wsmoulding', 'шт.', '473768131/8220ASMH', '', ''),
(353, 33318, 1, 'TOYOTA HIACE LH10 89-95 WS-Moulding цельный резин.', 'toyota-hiace-lh10-8995-wsmoulding-celnyj-rezin', 'шт.', '860168111/8268ASRV', '', ''),
(354, 32997, 1, 'VOLVO FH 12-16, 93-01 WS-Moulding резиновый', 'volvo-fh-1216-9301-wsmoulding-rezinovyj', 'шт.', '890638111/8823ASRL', '', ''),
(355, 32338, 1, 'VW GOLF III/VENTO 91-94 WS-Moulding верхний', 'vw-golf-iiivento-9194-wsmoulding-verhnij', 'шт.', '524178111/8533ASMHT', '', ''),
(356, 33131, 1, 'VW T-2 79-90 WS-Moulding цельный', 'vw-t2-7990-wsmoulding-celnyj', 'шт.', '911138111/8527ASRV', '', ''),
(357, 32996, 1, 'VW T-4 91-04 BL-Moulding цельный задний', 'vw-t4-9104-blmoulding-celnyj-zadnij', 'шт.', '911218221/8537BSMV', '', ''),
(358, 33297, 1, 'VW T-4 уплотнитель для бокового стекла метражный УКРАИНА 1м.', 'vw-t4-uplotnitel-dlya-bokovogo-stekla-metrazhnyj-ukraina-1m', 'шт.', '5028укр.', '', ''),
(359, 32829, 1, 'Резиновый профиль 19мм (50м в бухте)', 'rezinovyj-profil-19mm-50m-v-buhte', 'м.', '5006', '', ''),
(360, 33240, 1, 'Универсальный молдинг для лоб. стекла литой хром. 16мм, 22м в бух.', 'universalnyj-molding-dlya-lob-stekla-litoj-hrom-16mm-22m-v-buh', 'м.', '5023-22', '', ''),
(361, 33228, 1, 'Универсальный молдинг для лоб. стекла метражный 18мм, 50м в бухте', 'universalnyj-molding-dlya-lob-stekla-metrazhnyj-18mm-50m-v-buhte', 'м.', '5002-1', '', ''),
(362, 33246, 1, 'Универсальный профиль с бутилом внутри 13 мм, 30м', 'universalnyj-profil-s-butilom-vnutri-13-mm-30m', 'шт.', '5032-30', '', ''),
(363, 33389, 1, 'Универсальный профиль с бутилом внутри 17мм (23м в бухте)', 'universalnyj-profil-s-butilom-vnutri-17mm-23m-v-buhte', 'м.', '5045-25Е', '', ''),
(365, 33195, 1, 'Универсальный самоклеющийся молдинг для AUDI, 20м в бухте', 'universalnyj-samoklejuschijsya-molding-dlya-audi-20m-v-buhte', 'м.', '5061-20', '', ''),
(366, 33053, 1, 'Универсальный самоклеющийся молдинг для Peugeot 407, 20м в бухте', 'universalnyj-samoklejuschijsya-molding-dlya-peugeot-407-20m-v-buhte', 'м.', '5060-20', '', ''),
(367, 33079, 1, 'Универсальный самоклеющийся молдинг для VW GOLF A5, 20м в бухте', 'universalnyj-samoklejuschijsya-molding-dlya-vw-golf-a5-20m-v-buhte', 'м.', '5059-20', '', ''),
(368, 33022, 1, 'Универсальный самоклеющийся молдинг стекла метражный 30м в бухте', 'universalnyj-samoklejuschijsya-molding-stekla-metrazhnyj-30m-v-buhte', 'м.', '5048', '', ''),
(369, 33254, 1, 'PT All-in-1 PLUS 100мл', 'pt-allin1-plus-100ml', 'шт.', '13345043', 'PT Все-в-1 Plus является комбинированным грунтовки стекло / активатор с коротким обдува период. Он может быть использован при замене ветрового стекла, назад и бортовых огней на обеих область печати на шелковых и старого герметика', ''),
(370, 33252, 1, 'Активатор PT750 30мл', 'aktivator-pt750-30ml', 'шт.', '13345038-12', 'Прозрачные на основе растворителя стекла и PU активатор для черной грунтовкой без приклеивания ветрового стекла автомобиля. PT 750 PLUS является экологически чистым, прозрачным грунтовки и активатора в сочетании в одном продукте.', ''),
(371, 33253, 1, 'Активатор PT750 30мл', 'aktivator-pt750-30ml', 'шт.', '13345038', 'Прозрачные на основе растворителя стекла и PU активатор для черной грунтовкой без приклеивания ветрового стекла автомобиля. PT 750 PLUS является экологически чистым, прозрачным грунтовки и активатора в сочетании в одном продукте.', ''),
(372, 33250, 1, 'Активатор PT750 PLUS 250мл.', 'aktivator-pt750-plus-250ml', 'шт.', '13345035-12', 'Прозрачные на основе растворителя стекла и PU активатор для черной грунтовкой без приклеивания ветрового стекла автомобиля. PT 750 PLUS является экологически чистым, прозрачным грунтовки и активатора в сочетании в одном продукте.', ''),
(373, 33229, 1, 'Грунтовка-очиститель  PT700  250мл', 'gruntovkaochistitel-pt700-250ml', 'шт.', '13345031', 'Содержащий растворитель, прозрачный, клей моющее средство для мытья стекла печати шелка и для активации предварительно грунтованных стекла.', ''),
(374, 33349, 1, 'Клей PT200 FC Kit (Спеціальна версія)', 'klej-pt200-fc-kit-specialna-versiya', 'уп.', '13345022RA', 'PT 200 FC PLUS является 1-компонентный полиуретановый герметик, который отверждается под воздействием влажности воздуха.', ''),
(375, 32999, 1, 'Клей PT290 310г 1ч. (12 шт в уп.) железная туба 1 шт.', 'klej-pt290-310g-1ch-12-sht-v-up-zheleznaya-tuba-1-sht', 'шт.', '13345003', 'PT 290 PLUS HM / LC является высокий модуль 1-компонентный герметик для ветровых стекол транспортных средств связи.', ''),
(376, 33350, 1, 'Клей PT290 400г PLUS HM/LC 1 час (20шт.) 1 шт', 'klej-pt290-400g-plus-hmlc-1-chas-20sht-1-sht', 'шт.', '13345004', 'PT 290 PLUS HM / LC является высокий модуль 1-компонентный герметик для ветровых стекол транспортных средств связи.', ''),
(377, 33399, 1, 'Клей PT290 600г PLUS HM/LC 1 час (18шт.) 1шт', 'klej-pt290-600g-plus-hmlc-1-chas-18sht-1sht', 'шт.', '13345005RA', 'PT 290 PLUS HM / LC является высокий модуль 1-компонентный герметик для ветровых стекол транспортных средств связи.', ''),
(378, 33012, 1, 'Клей PT290 600г PLUS HM/LC 1 час (20шт.) 1щт', 'klej-pt290-600g-plus-hmlc-1-chas-20sht-1scht', 'шт.', '13345005H', 'PT 290 PLUS HM / LC является высокий модуль 1-компонентный герметик для ветровых стекол транспортных средств связи.', ''),
(379, 33249, 1, 'Клей PT290 HV Kit', 'klej-pt290-hv-kit', 'уп.', '13345005RA', '', ''),
(380, 33424, 1, 'Буровая машина 12 Вольт', 'burovaya-mashina-12-volt', 'шт.', '10453816', '12 вольт машина для бурения и полировки', ''),
(381, 33100, 1, 'AUDI 80 86-95 BS-Moulding задний', 'audi-80-8695-bsmoulding-zadnij', 'шт.', '8534BSMS', '', ''),
(382, 33425, 1, 'CITROEN EVASION JUMPY 94-02 - WS-moulding', 'citroen-evasion-jumpy-9402-wsmoulding', 'шт.', '650508131-2721ASMV', '', ''),
(383, 33426, 1, 'DAEWOO TICO 96- WS-Moulding литой верхний', 'daewoo-tico-96-wsmoulding-litoj-verhnij', 'шт.', '255048132- 3002ASMHT', '', ''),
(384, 33427, 1, 'DAEWOO TICO 96- WS-Moulding литой правый', 'daewoo-tico-96-wsmoulding-litoj-pravyj', 'шт.', '255048134', '', ''),
(385, 33083, 1, 'FORD ESCORT IV 90- WS-Moulding без дожд. канала', 'ford-escort-iv-90-wsmoulding-bez-dozhd-kanala', 'шт.', '224318137', 'ибкий канал стекла. Никаких повреждений во время транспортировки и монтажа. Также заменяет 3 части монтажного комплекта.', ''),
(386, 33072, 1, 'HYUNDAI SONATA IV 06- WS-Moulding верхний', 'hyundai-sonata-iv-06-wsmoulding-verhnij', 'шт.', '251958131', '', ''),
(387, 33472, 1, 'Адаптер для вакуумного насоса', 'adapter-dlya-vakuumnogo-nasosa', 'шт.', '', 'Адаптер для вакуумного насоса', ''),
(388, 33040, 1, 'Вакуумный насос с манометром', 'vakuumnyj-nasos-s-manometrom', 'шт.', '', 'Вакуумный насос с манометром и трубки. Ручной насос используется для освобождения пузырьков воздуха в смоле во время лобового стекла ремонт.', ''),
(389, 33471, 1, 'Лезвия 20 мм  1 шт', 'lezviya-20-mm-1-sht', 'шт.', '', 'Три доступные длины лезвия гарантируют чистый и без повреждений разрез в соответствии с PU ширина шва.', ''),
(390, 33016, 1, 'Лезвия 20 мм  1шт', 'lezviya-20-mm-1-sht', 'шт.', '', '', ''),
(391, 33200, 1, 'Мост для инъекции крепления', 'most-dlya-inekcii-krepleniya', 'шт.', '', '', ''),
(392, 33468, 1, 'BMW 1 Series F20 11- WS-Moulding', 'bmw-1-series-f20-11-wsmoulding', 'шт.', '111158131', '', ''),
(393, 33467, 1, 'BMW 3 Series E-46 COUPE/CABRIO 98-05 WS-Moulding', 'bmw-3-series-e46-coupecabrio-9805-wsmoulding', 'шт.', '117338132', '', ''),
(394, 33164, 1, 'BMW X5 E53 99-06 WS-Moulding верхний', 'bmw-x5-e53-9906-wsmoulding-verhnij', 'шт.', '110258132', '', ''),
(395, 33127, 1, 'DAEWOO ESPERO 93- WS-Moulding', 'daewoo-espero-93-wsmoulding', 'шт.', '255008131', '', ''),
(396, 33439, 1, 'DAEWOO TACUMA/REZZO 00- WS-Moulding', 'daewoo-tacumarezzo-00-wsmoulding', 'шт.', '257018131', '', ''),
(397, 33438, 1, 'DAEWOO TICO 96- WS-Moulding литой левый', 'daewoo-tico-96-wsmoulding-litoj-levyj', 'шт.', '255048133', '', ''),
(398, 33104, 1, 'DAF F95-TE47/Pegaso 86- WS-Резиновый c дождевым каналом', 'daf-f95te47pegaso-86-wsrezinovyj-s-dozhdevym-kanalom', 'шт.', '900678112', '', ''),
(399, 33470, 1, 'FIAT CROMA/LANCIA THEMA 86-95 WS-Moulding', 'fiat-cromalancia-thema-8695-wsmoulding', 'шт.', '214378121', '', ''),
(400, 33442, 1, 'FIAT DOBLO 01- WS-Moulding верхний', 'fiat-doblo-01-wsmoulding-verhnij', 'шт.', '687558131', '', ''),
(401, 33435, 1, 'FIAT IVECO EUROTECH 92- WS-Moulding', 'fiat-iveco-eurotech-92-wsmoulding', 'шт.', '000048111', '', ''),
(402, 33440, 1, 'HONDA CIVIC SDN 06-10 WS-Moulding верхний', 'honda-civic-sdn-0610-wsmoulding-verhnij', 'шт.', '242948131', '', ''),
(403, 33137, 1, 'HONDA FR-V 04- WS-Moulding верхний', 'honda-frv-04-wsmoulding-verhnij', 'шт.', '246118133', '', ''),
(404, 33184, 1, 'KIA RIO 00-05 WS-Moulding', 'kia-rio-0005-wsmoulding', 'шт.', '250018131', '', ''),
(405, 33171, 1, 'KIA SPORTAGE 94-04 WS-Moulding', 'kia-sportage-9404-wsmoulding', 'шт.', '250958131', '', ''),
(406, 33441, 1, 'MAN F2000 высокий 96-00 WS-Резиновый', 'man-f2000-vysokij-9600-wsrezinovyj', 'шт.', '721258111', '', ''),
(407, 33122, 1, 'MAZDA 626 STV 97-02  WS-Moulding с дождевым каналом', 'mazda-626-stv-9702-wsmoulding-s-dozhdevym-kanalom', 'шт.', '304508131', '', ''),
(408, 33189, 1, 'MERCEDES G-Class 80-06  WS-Moulding резиновый', 'mercedes-gclass-8006-wsmoulding-rezinovyj', 'шт.', '754618111', '', ''),
(409, 33132, 1, 'MITSUBISHI GRANDIS 04- WS-Moulding верхний', 'mitsubishi-grandis-04-wsmoulding-verhnij', 'шт.', '320068132', '', ''),
(410, 33469, 1, 'NISSAN JUKE 10- WS-Moulding', 'nissan-juke-10-wsmoulding', 'шт.', '662518131', '', ''),
(411, 33092, 1, 'NISSAN TERRANO 93- WS-Moulding верхний', 'nissan-terrano-93-wsmoulding-verhnij', 'шт.', '661198131', '', ''),
(412, 33128, 1, 'RENAULT 19 88-95 WS-Moulding', 'renault-19-8895-wsmoulding', 'шт.', '397138133', '', ''),
(413, 33109, 1, 'RENAULT KANGOO I 98-10/01 WS-Moulding OEM', 'renault-kangoo-i-981001-wsmoulding-oem', 'шт.', '392168136', '', ''),
(414, 33036, 1, 'TOYOTA RAV4 00-06 WS-Moulding верхний', 'toyota-rav4-0006-wsmoulding-verhnij', 'шт.', '860738131', '', ''),
(415, 33130, 1, 'VOLVO 440/460 89- WS-Moulding', 'volvo-440460-89-wsmoulding', 'шт.', '503228131', '', ''),
(416, 33064, 1, 'VW LT 28-35 75-96 WS-Moulding', 'vw-lt-2835-7596-wsmoulding', 'шт.', '912118111', '', ''),
(417, 33032, 1, 'Универсальный профиль с бутилом внутри 20 мм, 23м в бухте', 'universalnyj-profil-s-butilom-vnutri-20-mm-23m-v-buhte', 'м.', '5046-25E', '', ''),
(418, 33473, 1, 'Уплотнительные пленки для полимера 25 шт. в к-т', 'uplotnitelnye-plenki-dlya-polimera-25-sht-v-kt', 'шт.', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `products_photos`
--

CREATE TABLE IF NOT EXISTS `products_photos` (
  `id` int(11) NOT NULL auto_increment,
  `product_item_id` int(11) default NULL,
  `file` varchar(120) default NULL,
  `sorting` int(11) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=471 ;

--
-- Дамп данных таблицы `products_photos`
--

INSERT INTO `products_photos` (`id`, `product_item_id`, `file`, `sorting`) VALUES
(4, 12031, '5ecb603b9a813a0c1969d90b92fb5cb4.jpg', 1),
(3, 12230, '5d34fb534f32fc72bca4113c00db9628.jpg', 1),
(5, 12227, 'a6290e89b971ceb4518e339a23121e20.jpg', 1),
(6, 11457, '95eaaecdc2ea87df1b29ea72e073fa94.jpg', 1),
(7, 11920, '070614215c7457f623fbf2fe0c0b96af.jpg', 1),
(8, 31544, '93afc7d380a8f6a9f13da4cf94c237f3.jpg', 1),
(9, 12034, '4cc209cf8b8369f26ffe5f056593cb5d.jpg', 1),
(10, 2731, '2210709f3584fc10920a2f2ea8959a52.jpg', 1),
(11, 12036, 'f36d42fc1288b5c509e67e03a19c5c15.jpg', 1),
(13, 31652, '62fea25e374de542bfdfbcbfcf4c902e.jpg', 1),
(14, 31653, '082ab930687bbb1e21b513d991686df0.jpg', 1),
(15, 2811, '3154831e089843aa82a5c800bee938b3.jpg', 1),
(16, 31671, 'e270109d7ea98ea5a915f9c5514f74fb.jpg', 1),
(17, 31651, 'f8a9127de7c86623535d35cedf6137d9.jpg', 1),
(18, 31676, '3938fbc4593c7f56f306721b835338ae.jpg', 1),
(19, 12033, 'a26d539f295ee4dd10f443164076f5f0.jpg', 1),
(20, 31654, 'd95626eeda8aecb6bfe293c0eb70a390.jpg', 1),
(21, 31655, 'abc4b13a57539989514bdd6635f4d2e8.jpg', 1),
(22, 2307, '1879d0edfe8359f14ba4e545bcb2a2ea.jpg', 1),
(23, 11150, 'ac92689233858a51bea35e096f57e298.jpg', 1),
(24, 31490, '44769c7bbf19b9c0387d2bda894dde55.jpg', 1),
(25, 12702, '3df8b5e0c0b710221b552f27c7fb1efc.jpg', 1),
(26, 12703, '3942bbc89ef8a087c8523bcd754fa2a8.jpg', 1),
(27, 2007, 'f179d648cf5c9150d537c0e30128ce0f.jpg', 1),
(28, 31491, '949bdf4516702ec9b6c9efe054ee5440.jpg', 1),
(29, 31487, 'aa954aab6f59dfb851205696bb8a4fad.jpg', 1),
(30, 31488, '27b2e1adb199c846c300054fbfa6f3c7.jpg', 1),
(31, 31757, '451f9224d9f6f1e523a9e51b2f088629.jpg', 1),
(33, 31758, 'd1661f7ee19e8abf313b4e7afd42af3c.jpg', 1),
(34, 31619, '1c17b1f7857edb412fd92fdd3442cbb1.jpg', 1),
(35, 12076, 'f8203a44de3932a935b2013562d542a4.jpg', 1),
(36, 31620, '41aa2041c67befe19ba5c163932afb5c.jpg', 1),
(37, 11653, '14a218ccf914a87fa771c8b148a9f8ae.jpg', 1),
(38, 3364, 'e828f9e26dc8ba88bc9d826eb9f3dcb8.jpg', 1),
(39, 31698, 'b48144c527d8555cc8badfc9c8368fc6.jpg', 1),
(40, 31489, 'b7c9f75ba21e1b21c66f56b225a971b5.jpg', 1),
(41, 31790, 'a2f948b001cd1a87218211c728c2011e.jpg', 1),
(42, 31706, 'caff44e5fcf574ab65bb00ff81eb4ff2.jpg', 1),
(43, 31704, 'cfead126afb6949e1ee0545585e641ef.jpg', 1),
(44, 31617, '13842247695e49b08d087000d4298229.jpg', 1),
(45, 31368, '865aa8dda7b3e61b6a0c7a81a6dcd783.jpg', 1),
(46, 32055, '7cd37f79afb2365d83c95b74425368f9.jpg', 1),
(47, 32054, '6332e68dd93160ca241229c674cd50a8.jpg', 1),
(48, 32056, '7fc3335663c4dfb5c026179e432a5338.jpg', 1),
(49, 31493, '8b27af4617515c7f6a89a74c4f80eb02.jpg', 1),
(50, 31622, 'c250faa8cffee0a4c626e4c0f8027e37.jpg', 1),
(51, 31615, 'db4c75456fd9b6df15df698515f882c5.jpg', 1),
(52, 31621, '060b1e450221fdcdddbb5efe6a019a36.jpg', 1),
(53, 31709, '721ddc3687fc30fcca26257e6c9ec8d7.jpg', 1),
(54, 31708, 'fbebf070b14beb8b4e7fa238c5b299a3.jpg', 1),
(55, 31726, '06eb7d719026284706999450a51efde6.jpg', 1),
(56, 31495, '159c6305a72563a35e44b0082f07b835.jpg', 1),
(57, 31618, '0c3f3fdc449afd3c85d26715f110a105.jpg', 1),
(58, 31705, '150f089fcbf3162c6651c0278dbc5a41.jpg', 1),
(59, 31703, 'a931ef5c5efeb310eab4f5d2dd4d98c9.jpg', 1),
(60, 31494, '52e830d264cb2eb3f8dd7f480d5edbc1.jpg', 1),
(61, 2028, 'fb535eb0f0c43374de21b99ee7d5c9b8.jpg', 1),
(62, 31707, '1e8cf0e4d36485016dd3aa5da028a8fa.jpg', 1),
(63, 31623, 'd8cc6ca6a744fbcedbee4aed0e733595.jpg', 1),
(64, 31616, 'c88d680f3f0c2d993b3b528834fd0264.jpg', 1),
(65, 31486, '87c27c07cedcc9f1261f7554bf8b7800.jpg', 1),
(66, 2029, 'd905c8bf085a89119bb058fb8dc7e6db.jpg', 1),
(67, 31656, '039ce338ed06e026834a2cd61d0c881f.jpg', 1),
(68, 12032, 'bdcddec2198dfbf6442da8c3f308ddbf.jpg', 1),
(69, 3103, 'a87e2ad16c7884530337e043552ec343.jpg', 1),
(70, 31657, 'fb0797a1d7b4066ad11ca12e41cf03d2.jpg', 1),
(71, 31658, '22f72afaaaa416d485c826d0afb30b4a.jpg', 1),
(72, 31659, '995cf5b9f170657e63661ded5f857333.jpg', 1),
(73, 31661, '51b34928d87031f8cdfe5453923ba53f.jpg', 1),
(74, 31691, 'd93b88cf71ce55976211972705a79a75.jpg', 1),
(75, 31793, 'b77e6c13273cb4eee6a5339c3e5cf803.jpg', 1),
(76, 31694, 'c3a8454ce3b6bc7edbf350004ae73f02.jpg', 1),
(77, 31690, '7df890a0658c74b715aa6810a588e5ff.jpg', 1),
(78, 31794, '4fe9369f53fc8e5f83fcfecc98f9b9bf.jpg', 1),
(79, 31685, '92a49bd06437a67060cbf064a86c4ef5.jpg', 1),
(80, 12197, 'f7b0d687f667d56ee94172ab2dc0c2f1.jpg', 1),
(81, 31552, 'af4424677f3a6986e4826e7729082a16.jpg', 1),
(82, 31963, '4cf2edc749214b98ca5c6a22edfe8c4e.jpg', 1),
(83, 12037, 'b9374e3723d261ead1e51726006a35a1.jpg', 1),
(84, 12237, '70645a457d9fd17817f715b59cf67191.jpg', 1),
(85, 31815, '2ac019e7ecd329ef4051b87f81b4198a.jpg', 1),
(86, 31547, '5d6b517d1d17f4e096a83111e70b670f.jpg', 1),
(87, 12035, '738332a47ef12d4c3a58b6d154296681.jpg', 1),
(88, 12236, 'ee57e7015d7f6c238903e72650bd3239.jpg', 1),
(89, 31663, '39b81fa72467b82cf0779619b12868b0.jpg', 1),
(90, 31662, 'ee41d41eecaa3bed4785142301a54b49.jpg', 1),
(91, 31964, 'cfb5235f7bde3bbf4233451a32a8fb23.jpg', 1),
(92, 12239, '9a6de8149aaf8d5d9980989a6fb4250c.jpg', 1),
(93, 31664, '50fc9f14bd0c60a924ca7a8d7f1370e3.jpg', 1),
(94, 31665, 'a18653ab70dcf4cc538a1c81d5423f61.jpg', 1),
(95, 31666, 'b8f4e929974ca5087df1db0061783f1a.jpg', 1),
(96, 31667, '2a1d08a123de6ba36161a93195874f67.jpg', 1),
(97, 12040, '5d8c24dd2b4b92825fc8090052493caf.jpg', 1),
(98, 31817, '60eafee04d0b53b2cf790b6496544807.jpg', 1),
(99, 31675, '72e7736d84dd54c76b5c0d3890375992.jpg', 1),
(100, 31668, '7a9412ffedbd6abb8059686707d1dfc0.jpg', 1),
(101, 31545, '52e067f8a52bc68a800f4ddbfb9872aa.jpg', 1),
(102, 31546, '40e830659264d7570ecc8d15f7eca711.jpg', 1),
(103, 31670, '0fbd08fbaca9f240997328e462b1c911.jpg', 1),
(104, 31674, '63a55bb7c41b5de2eed0c7195626f702.jpg', 1),
(105, 31672, 'c160b3b58a614c444b7ea38c812d8f65.jpg', 1),
(106, 31673, 'f1a3c8ba1371dee31a58b99635f837e4.jpg', 1),
(107, 31677, '8ba588e1e8ae3b46e986e9bcc4316e21.jpg', 1),
(108, 12343, '01687c1df822971c9c8fcffb8455f578.jpg', 1),
(109, 12341, '353019731c2303544f189de9c421ffa4.jpg', 1),
(110, 31549, '7bdb17a02ebd454835cd2f4c531fb973.jpg', 1),
(111, 31550, '861ae3d19de415aac5a9a52c36949e39.jpg', 1),
(112, 31753, '918df8794dcfa36ed1e37db152992e93.jpg', 1),
(113, 12043, '887c37c0ad7316e1387122850eb0fd25.jpg', 1),
(114, 31811, 'dfab3b72d6b4ef5bc991e23601789acb.jpg', 1),
(115, 31542, 'ed4203d81a62ac1d47cab700ed33723f.jpg', 1),
(116, 31795, '637bca0aa9e286b53176d70a9f36dde3.jpg', 1),
(117, 12046, '33cf9b3a2da31754cb0526d5fa532e38.jpg', 1),
(118, 12044, 'f2befcbb0b91ddac0d0dfeb14975bf55.jpg', 1),
(119, 3371, 'f582535b20d470a02ff4f7ce509ee894.jpg', 1),
(120, 31548, '2cdc97d81f3d285d2be272c84d23f0a7.jpg', 1),
(121, 31796, 'da3493696a655ba613902555e03e8d56.jpg', 1),
(122, 12045, '653b3d2628850e6304bcf1171abfb088.jpg', 1),
(123, 11652, 'bf502152909c0d793b8c54c203eb61be.jpg', 1),
(124, 31543, 'b226b5cd87fcff0e88f1d94edc0751c3.jpg', 1),
(125, 31679, 'e8937b15dbc0ee0716e72143d9e74114.jpg', 1),
(126, 31797, '3d31ff04bf5c65891f62e3e65b886cb8.jpg', 1),
(127, 31541, '697c1fb898059c6055426aba0fbd62e8.jpg', 1),
(128, 12219, 'cc3d063a5aa457bd4419c285fa0d5ddb.jpg', 1),
(129, 31680, '894ca708d536a3eabf536ede1331a545.jpg', 1),
(130, 31798, '09e273b0830468ae27b1ac6b8f225ada.jpg', 1),
(131, 31682, 'd2464d7f4137436969db8ec19ddaa912.jpg', 1),
(132, 31799, '5e2b9376a6c3d478b10f8575fb0f69e8.jpg', 1),
(133, 31683, '1512f557f81b794e59da226682e4b15d.jpg', 1),
(134, 11167, '627c98f2c2ce46dfd9e9b9fbc8548561.jpg', 1),
(135, 31688, '9f9f88f7124bc8a634cc721d06207ec0.jpg', 1),
(136, 12220, '15221105c9256899c4374af21998dab8.jpg', 1),
(137, 12047, '6e766fb5b9497a671c052b0f137242c0.jpg', 1),
(138, 31551, '7cab223dbf0c0f3c5d1e75b4a5344238.jpg', 1),
(139, 31965, '9565099aa3e856bece53279b6acc1efa.jpg', 1),
(140, 31660, '5a86530e5d7da116d7e3d3fb162ad02d.jpg', 1),
(141, 31678, '85cd14d8e403dfc648ec1c4e23bd74b4.jpg', 1),
(142, 11445, 'd121291d21f998469831c4a9bb8e6842.jpg', 1),
(143, 12048, 'babf1a6ea355b77ec277c48b0fe63301.jpg', 1),
(144, 31686, '254a64d547efaa0b4b2e9cf9edfcb21c.jpg', 1),
(145, 12503, '6def138ee7666b2d0786bb6e8ea9d7cd.jpg', 1),
(146, 31800, '8dd48c3f0c51e021d66e6ccee0986c0c.jpg', 1),
(147, 31684, 'e19261dd8d6c58576b519e845ab18b17.jpg', 1),
(148, 3372, 'b8a2200855cf6d52b1a132b678046008.jpg', 1),
(149, 31813, 'ddb4837c530ea1b16d586d33640eea8c.jpg', 1),
(150, 12200, '7eb41e0a4fe1a51c550a2ec39c36277c.jpg', 1),
(151, 31692, 'dfc9fc8e70c8ca919f97aaf24d780edc.jpg', 1),
(152, 31693, '1800e3e39d586bea7aee44d62253a587.jpg', 1),
(238, 32318, '35ce493789fff1aa0f255b570274d399.jpg', 1),
(237, 31492, '231199827b39093852a248913e8e3902.jpg', 1),
(155, 31761, 'c1ed88122d21ccc761de83f4b17f6a0f.jpg', 1),
(156, 31760, 'da5104126cd178e3b791c8c7fb6b1b8c.jpg', 1),
(157, 31759, 'b56279621c2a2c3d769eb4f78247f154.jpg', 1),
(158, 31762, 'f7f64b41ec12b3f29c477732abf4a217.jpg', 1),
(159, 31763, '6b5caf2ce27da73f835ae16b78b3291f.jpg', 1),
(160, 31763, 'ee856ddb34921453da6d5e26d9ccad1c.jpg', 2),
(161, 31763, 'b933e4007d2e5ac12c06b7732f34ab27.jpg', 3),
(162, 31765, 'ddc1082e6ead74b806f4a2b014117ca9.jpg', 1),
(163, 31762, '7a3bd7d623ea52a7cfa65c81bfda5cb3.jpg', 2),
(164, 31699, 'dab03ca55473646c3bb8e423feb7fb30.jpg', 1),
(165, 2424, '79c60904f0a52b055257def0fb83c6a6.jpg', 1),
(166, 31700, '763abccd70730668764acd091fb2e6d3.jpg', 1),
(167, 31767, 'c2547073a82076b9e99da098e0fdfd25.jpg', 1),
(168, 2424, '59d68c7bae86b1c69b2767594c27f3f4.jpg', 2),
(169, 31764, '996389e4cd5d131b69e61c618257137f.jpg', 1),
(171, 31766, 'fc0f75cbcc40a7c822d704953a29c7f2.jpg', 1),
(175, 31847, '4c1f3b943e3b212277766c553813c5cb.jpg', 3),
(174, 31721, '127f8601de5ed042df8f04115f5dad16.jpg', 1),
(176, 31711, '6caa3754832ed818c47d97ba3caaba19.jpg', 1),
(177, 31711, 'e69387967691d62d40dad719704725c4.jpg', 2),
(178, 31711, '85c4976478a8014d13650af235678c32.jpg', 3),
(179, 31711, '08b807a76eaf7ad9b9fd9044f65faf40.jpg', 4),
(180, 31710, '1d8df479f72e1ad130d1bf2d17a8922d.jpg', 1),
(181, 31710, '8ad17ea7d0e616cc1887abca16847ced.jpg', 2),
(182, 31710, '08441101c65bb469cd2e22a8481c5133.jpg', 3),
(183, 31710, '9f0b358efbac52858de66b6feadb0b50.jpg', 4),
(184, 31710, '457ce01c10f07b3551ea357520544f7b.jpg', 5),
(185, 31710, '519e9cbb0e41a69619d3bc2895a2fd91.jpg', 6),
(186, 31711, '99729ae5cea35aeadaf20385c780c43d.jpg', 5),
(187, 31820, '9a84610e7ab8f353a8fe830e526372b8.jpg', 1),
(188, 31820, '2fc107cd915acbd7ddfd43b7fe029ed0.jpg', 2),
(189, 31820, '749d88f932cd0bf44ca767b7f1771cbd.jpg', 3),
(190, 31820, 'f8ae99ec44b141b1a652b2ce226eff5d.jpg', 4),
(191, 31912, '9f0727b4610a9e6ac2b5a5abbaab3ec0.jpg', 1),
(192, 31930, '082b7378a2f15886768b71abf5e68bd3.jpg', 1),
(193, 31789, 'd3cbeafb04c8cc20be52778d08266f53.jpg', 1),
(194, 3373, '604bfff0327329fdec8ec66a800e1f99.jpg', 1),
(195, 31801, '02c37798426fbf96732876a5a231905f.jpg', 1),
(196, 31689, '95ad670192ae0145789ce9ef2f12503b.jpg', 1),
(197, 12049, '5d3f6feffe9ab406f5d946ccfa33ad41.jpg', 1),
(198, 12229, '908fdd7a5fc8d949f83b66122571c77e.jpg', 1),
(199, 11382, '575bab0662aa55ed87d0278546498214.jpg', 1),
(200, 31802, '8b1a8414ea43784a41ef8539158a8bb7.jpg', 1),
(201, 31819, '8290007c12cc5f33ba95434a25beb931.jpg', 1),
(202, 31818, '924621ae09fdfcc818b432f58bb47188.jpg', 1),
(203, 12050, 'ad7ba7b4354d5ebe96f96773f5a41962.jpg', 1),
(204, 31803, 'b7d83992d651d2bd0e794a2277d583a3.jpg', 1),
(205, 12221, '98f425d8312422592a3bb740fb62724e.jpg', 1),
(206, 31804, '4d43cc6da7f651a844358fbe21c34207.jpg', 1),
(207, 31805, '4a4e5bf6da4b5cbf1ebaaf9201b5bbc7.jpg', 1),
(208, 12198, 'acf9221b1aa39ba2ef7df0d3467663ac.jpg', 1),
(209, 12199, '8d70eda86b333d377d701826ac171bc1.jpg', 1),
(210, 2568, 'ae3d2c361bebbfdee633c7a0b20fdf5b.jpg', 1),
(211, 3377, '1242426aacb1529ffb9c3470f92140ef.jpg', 1),
(212, 12055, 'd87c8cfa1a8c783de27636f533a272a9.jpg', 1),
(213, 11604, '768febb3862df9a9b1ee89aa93c064e2.jpg', 1),
(214, 12051, '441353d2b0401d35a66f7f5262d3a144.jpg', 1),
(215, 31806, '2cda2595013d58112c962f5f705b3db7.jpg', 1),
(216, 12052, '7b8a3a96663b5c502f3d8ef3dd162a92.jpg', 1),
(217, 31807, '1dcf098b48c8ea48e8f037975279628f.jpg', 1),
(218, 31539, '4edca15ba1de61d647ab978529e270c5.jpg', 1),
(219, 31540, 'e9886cfacb6421fb70a95ac25034976b.jpg', 1),
(220, 31808, 'ce835e119c740fcdff72f1979cd61860.jpg', 1),
(301, 11919, '67a67238efec6096c35059b3b9109618.jpg', 1),
(222, 31814, '507ee85e3e7eafa177e00ef4a2eacda0.jpg', 1),
(223, 12342, '053a46a4e2f74eca12e9287d4928571b.jpg', 1),
(224, 12057, 'b47836e1132e50668d8f85fffe3c034b.jpg', 1),
(225, 31687, 'ebbb23076758d0e448afedb6d8ba01ab.jpg', 1),
(226, 31696, '430ff6c8ae49986a659211095ca2151f.jpg', 1),
(227, 31697, '451bacadec68f2faa3462cec34ae3924.jpg', 1),
(228, 31695, 'd3304da2458ab380235cac3ead0959c9.jpg', 1),
(229, 32057, '66cb6efd130e75f69a08baaae4316d71.jpg', 1),
(230, 31701, '2ab5e14aaa88ce5cd14eb963a9390da5.jpg', 1),
(231, 31810, 'eeb55d7c0125ca0c0b8b0d178c105243.jpg', 1),
(232, 31809, 'ebb99ef8786be8aeeb7832647e600901.jpg', 1),
(233, 31816, 'd9deb4ff2a3bc05fb09ee683cf54002b.jpg', 1),
(235, 12228, 'd8abff483f865fc0d5f432081f85c10c.jpg', 1),
(236, 32871, 'aba98938eac78724fdae6300af79f1e3.jpg', 1),
(239, 32319, '1b9117212c849977b4e066104095de81.jpg', 1),
(240, 32321, '29d826ab553956c6532a1285782e8263.jpg', 1),
(241, 32322, '3576fe8f5a2426e6002acf2ed90e429f.jpg', 1),
(242, 32323, '02e67148cfafb25d816eed7552e22022.jpg', 1),
(243, 32325, '0092f531096297b1dc570025399aa23e.jpg', 1),
(244, 32327, 'a10c74a1617276760c0469a9ffb63c43.jpg', 1),
(245, 32328, '566224bbc0f3e1be240e0f8c1edb451f.jpg', 1),
(246, 12231, '222e7888329b8de3eeeb4f2239c8077f.jpg', 1),
(247, 11452, '77c11ce162ce9181d1b6fe0cebf027de.jpg', 1),
(248, 32872, 'd4635f9a21890e85f3ee6ac915ec5b83.jpg', 1),
(249, 32873, 'e31a1ed39188dacb77e9b31f94f351c8.jpg', 1),
(250, 32957, 'b01134cce3638818407ddf25d1a64500.jpg', 1),
(257, 33251, 'e60a42e2153e9774f4664a97b154aeba.jpg', 1),
(258, 32962, '9b01abf10a45c9a788a94a0d64c5b230.jpg', 1),
(256, 32904, '40e21751537c8710d07e638e9d071088.jpg', 1),
(255, 32905, 'fdbe2cffa01a2c84d2dbb38273987be1.jpg', 1),
(259, 32958, '4a30174e6943fb73546f630cf204e389.jpg', 1),
(261, 32961, '45f409b0be5ae86dac17f0add2e78947.jpg', 1),
(262, 32953, '178082ed09f88f5a7903d4e7ea685f32.jpg', 1),
(263, 32954, '78a77765585dbdd56aa55a45d6178957.jpg', 1),
(264, 32879, 'aed2900ec5b014412d12ba69c3e00f40.jpg', 1),
(265, 32902, '2cc6db817681e8c995bf773caaf7034d.jpg', 1),
(266, 32903, '3e8d34879c560f227ce22ae6e104752c.jpg', 1),
(267, 32955, 'e45f463a77458d7944affe1fef0be7b7.jpg', 1),
(268, 32959, 'c138e4d53b456961c529e60abd663775.jpg', 1),
(269, 32906, 'ceee09c940dda5b73b5b3c90e9687846.jpg', 1),
(270, 32956, 'e53f2b007ce24bfbc3a1d95d556083a4.jpg', 1),
(271, 32951, '358c63a90a6bfb7dba6ba70a04940478.jpg', 1),
(272, 33010, '6e09ec348248e048b18a52e056b61c89.jpg', 1),
(273, 33005, 'a3407e24bfae635b78142fd8e019800c.jpg', 1),
(275, 33006, '7af9f42ccd0bbfd24ee93b1294faf0b0.jpg', 1),
(276, 33011, '1506e56cfa6d0c32780058ce31cbfa82.jpg', 1),
(277, 33007, 'fa80b2058d76daa15b383c392bdafbe3.jpg', 1),
(278, 33009, '12041fea30aae94c75c9b39ef3c0f4e1.jpg', 1),
(279, 33082, '10ff17a935833b6761ac2d44b14f1b3e.jpg', 1),
(281, 33172, '83f0bc0a62639937d1c4e004f0ee9099.jpg', 1),
(282, 33309, '054250bd3bb897df119ce5d8652f353c.jpg', 1),
(283, 33014, '407791ff590a1d04d973e780a6bda091.jpg', 1),
(284, 33342, '6c0b262e6cfb9daf84d1e07b2e26f7ec.jpg', 1),
(285, 33363, 'cefb4ec98ebc727a80de27474b967b68.jpg', 1),
(286, 33362, 'be84bcd3590a836d13115f2ca479ab41.jpg', 1),
(287, 33161, 'a8e35ca8067f886a96388fca792d11d4.jpg', 1),
(288, 33020, 'f3a878a46d3281142b011f3bc5e92515.jpg', 1),
(289, 33387, '649096e4bf4d8f657db91b506da24822.jpg', 1),
(290, 33003, 'a8c61ff00cc99b4c69bd70e5f9e2be69.jpg', 1),
(291, 33001, '54f2b7a290cf10ac6f94443795cf08b4.jpg', 1),
(292, 33002, '89700c3523616361404474b324e5300f.jpg', 1),
(293, 33308, '0b833aa41d801acd6460d92b066bf63c.jpg', 1),
(294, 33388, '57bc373aa48fd931d4c05f78db2f7e95.jpg', 1),
(295, 33364, '95b4729313d5325ab82e28452c1bee34.jpg', 1),
(296, 31770, 'ae72b6d68a6dd7d54de65e514d9d90fe.jpg', 1),
(297, 31768, '3967a17074610d02e7826d315adc06f1.jpg', 1),
(298, 32870, '146545a4b243799658ac333678d4c776.jpg', 1),
(299, 33004, '5d706bfd853a14daed3d8734a1e82578.jpg', 1),
(300, 31725, '31d603efd34291fea84080e4ab115f11.jpg', 1),
(302, 32882, '7be55e7fff2c6ad5d60d6701167933ea.jpg', 1),
(303, 32963, '793478afb638b39d3a1a214699d8d353.jpg', 1),
(304, 32880, '0d6d9ebb2bdcadc7081591038665a46b.jpg', 1),
(305, 32332, '5de9522100f2e120042bf37187c51b00.jpg', 1),
(306, 32883, '7767435c0b3b8e0202c4af7d27c51a28.jpg', 1),
(307, 32885, '6a810338ef50ab50e3fa13fb3929daad.jpg', 1),
(308, 32881, '2b4b43daacb74f28100899da5b762173.jpg', 1),
(309, 32884, '6d326549de4eacc007a0a60472dbca88.jpg', 1),
(310, 32337, 'bdb949dd2ad250486a814efffebe545a.jpg', 1),
(311, 33028, '88a41fd773c5ca845ad8050fb1f2e225.jpg', 1),
(312, 33090, '7a5059acbb869cbc0c3cec8e7dd7b95a.jpg', 1),
(313, 33348, '9b48bb0396717e18c30c05af8f1d42da.jpg', 1),
(314, 33358, '5fcac80ee16b6c732cc56f01d51c34a8.jpg', 1),
(315, 33033, '5fde7e9dbf4c78320fb1f9ef61d80b41.jpg', 1),
(316, 33062, '44548e60cfdf3ef9dbf7451fa660a88a.jpg', 1),
(317, 33021, '5147f4bb728dff59ac294000be3d5eee.jpg', 1),
(318, 33316, 'e05ba22ee234d4601df72107f4aa97df.jpg', 1),
(319, 33312, '836a4ae9953732c5140d1812b6b4c54a.jpg', 1),
(320, 33313, '854bea9a97b205c1a6f0f45bac05754d.jpg', 1),
(321, 33319, '3942f80cccce087185a20cd0ce65e0d7.jpg', 1),
(322, 33320, 'efb16542ba4e2f45224ced8bae4dab87.jpg', 1),
(323, 33197, '82624d55ff17147435f519ac4db652c5.jpg', 1),
(324, 33037, '9d8c753e51a872b7c990f5cc8357622f.jpg', 1),
(325, 33227, 'f28da3dd3cccd0a9a6d0a7a238a45aee.jpg', 1),
(326, 33174, 'c2320d68c9d9b241bbb6edfd22665fa7.jpg', 1),
(327, 33314, '461255870b297d5b566b98ebd7a7b2f3.jpg', 1),
(329, 33102, '477c1dbbf05099c8b4113776ebf76981.jpg', 1),
(330, 33321, '843d9498bdacbc02c7f1491fba31a8fe.jpg', 1),
(331, 33169, '0f73ca1a5f2a0124266cd5da06bda01f.jpg', 1),
(332, 32998, '3056b5665f16924af76b336e013a6242.jpg', 1),
(333, 31702, 'd5ef74e19b4239aa13da1e488a7926bf.jpg', 1),
(334, 32825, '4ad02ff32fc509157aa45c12879443f2.jpg', 1),
(335, 33168, '63ef108fbf9024cd4023c735d2e643ad.jpg', 1),
(336, 33121, 'a8da6c95b3eec7766919f1fbd460d1ed.jpg', 1),
(337, 33241, '7f7b1f40931615d7bf643473c540666b.jpg', 1),
(338, 33315, '6bef649b4d176ee7a71c2bcfc4160db9.jpg', 1),
(339, 33242, 'eddc8c3058cb674b03eeb438f5b644d6.jpg', 1),
(340, 33386, '0e1a0d2059d80c3426d2b20eec55aeeb.jpg', 1),
(341, 33049, '020f6df5e6819573d61fbd2041d370ab.jpg', 1),
(342, 33243, '59ee90707471ca694d2d89dd23fa397c.jpg', 1),
(343, 33317, 'c89a8fd10b9ed0b2e41913e2c2fd8841.jpg', 1),
(344, 33192, '7eea9c6b5a416c90946540b4a25609a4.jpg', 1),
(346, 33244, '104b1770c6c7d6f46c964f9b2967f706.jpg', 1),
(347, 33360, 'fb41950c4b2781457cc32e4edafb505b.jpg', 1),
(348, 33359, 'ae2b44f3023bb1a14c245d7bda847985.jpg', 1),
(349, 33346, '49a051afbb1b34bf10441a6e813530b6.jpg', 1),
(350, 33000, 'f596a7211537a7f9406b489634d5102d.jpg', 1),
(351, 33094, 'aee7fa87c19e3c863117b030777ea4dd.jpg', 1),
(352, 33178, 'fbaedb3f73054bc234212bc5dcbc8b4a.jpg', 1),
(353, 33052, 'ce6de18bd61fc1d9c490f4f43b11657a.jpg', 1),
(354, 33052, 'e46b4650b8772d94cdeddb0f9f775c88.jpg', 2),
(355, 33178, '796262e5c8f092a92f4c478dd1f85cf5.jpg', 2),
(356, 33167, '831f2003f028a5757a36b960650cd9bc.jpg', 1),
(357, 33167, 'c0711afcf8b4f12fc01e0029934e3613.jpg', 2),
(358, 33019, '02a7f1d3ab2a650de426ec56544824b4.jpg', 1),
(359, 33019, '6365b333cbe7b0bc2d6887334df491d2.jpg', 2),
(360, 33176, '1d3fec8d99e26f4e1a1780815a15e975.jpg', 1),
(361, 33176, 'bef68c54998150f8ad900d7d9a3efcff.jpg', 2),
(362, 33095, 'a2fe3a7254f352361929109a78db4ebc.jpg', 1),
(363, 32324, 'dbbaca77d476fc41c41e3ed66f793843.jpg', 1),
(364, 32324, '277ef53f976d6ff11b695b924398182f.jpg', 2),
(365, 32326, '12b48692e8337651a38cc9042422c75b.jpg', 1),
(366, 33165, '531494ab2287675922c0665f86df1bba.jpg', 1),
(367, 33165, 'fe117c8d2c5c34f37d45c67725d1d0a3.jpg', 2),
(368, 33347, '35775086e0181897e9d68514430ec103.jpg', 1),
(369, 33347, 'f63cd49f8332c752dcac58d302fbb111.jpg', 2),
(370, 33310, 'fd9309e17893f31e6cf19fc6b1eedb13.jpg', 1),
(371, 33310, 'b95f936bbf5bbb95f6404ee88cb6f7df.jpg', 2),
(372, 33311, '00c403c5f756fc0b8841c56e35b3bd6e.jpg', 1),
(373, 33311, '9dcf867e077521b5ec4cf7f069545cff.jpg', 2),
(374, 33125, 'c0666fa5bdbc09ed64deb57987cf8611.jpg', 1),
(375, 33125, '00c97d133fafa2d63b912467e806e19e.jpg', 2),
(376, 33129, 'e1ccef1c3d8bfb89a19e5cbb61e47b32.jpg', 1),
(377, 33129, '26f0a889f8899e43ed160570dcd9d3a6.jpg', 2),
(378, 33225, 'd1c79bcd35b2af2f9ec4f6e11bdb71be.jpg', 1),
(379, 33225, '4740ad0a976ba3ca0e11614d575cffb8.jpg', 2),
(380, 33345, '2cfd8377fd3bc7d4c364c201f7afc628.jpg', 1),
(381, 33345, '18390507d1a029e73d1d52d2633c2dae.jpg', 2),
(382, 33034, 'f0843b19058e6cdd9611eaa9f6657294.jpg', 1),
(383, 33034, '7df562be70b40d41f05858359c7ea34d.jpg', 2),
(384, 33089, '4aff3ddc9a1e4bd2173e07636bd62186.jpg', 1),
(385, 33089, 'a8e871c24cf3def7f5022ec2788acb5c.jpg', 2),
(386, 33344, '22a2f8ccc9e504f4ca0c711a2c6df6b1.jpg', 1),
(387, 33344, 'e1164e339c19c48f12eaf26db2cb1a19.jpg', 2),
(388, 33186, '2b3f405b063092eeabf0c4241a291478.jpg', 1),
(389, 33186, 'a5567f21ca87f9c6c7e8d32b127b8961.jpg', 2),
(390, 32995, '7f1f484c3b2f2508e5e5a1e6574ed256.jpg', 1),
(391, 33084, '7f15e98d0817813b97da66d2b6077f94.jpg', 1),
(392, 33084, '0ca976e4e0db65420bc25b612f2d5419.jpg', 2),
(393, 33245, '4377d3b94af1bcaf5e4c062b6480fc36.jpg', 1),
(394, 33245, 'f4aee11940cbca478a8bdb53135f2a56.jpg', 2),
(395, 33318, 'ff19b7f4e49cf5fe723258c9e3f696f0.jpg', 1),
(396, 33318, 'fae324d75be803176ab2654202c2bdbd.jpg', 2),
(397, 32997, '31ba3ead145795ff11b0ff2bc435de1d.jpg', 1),
(398, 32338, 'a3531ea1401d87fdc73404ad0d627eaf.jpg', 1),
(399, 33131, '79385e3956f4548d7bf3d5b7c8bfe676.jpg', 1),
(400, 32996, '40c6009677109755cb6bff50dfc13be9.jpg', 1),
(401, 33297, '22937d018fe79e3b2acbeed082692e70.jpg', 1),
(402, 32829, 'e1fff2a8d47a07053fdc95f258d16085.jpg', 1),
(403, 33240, '7888cfdff3a60aab4885e174e32af484.jpg', 1),
(404, 33228, '0393e7055b2513124951b170e5df771c.jpg', 1),
(405, 33246, 'e0d8e6f00ecffdffa8688f5f1de0b4cd.jpg', 1),
(406, 33389, 'c2e194c42ebfb8f8809cfd0d90c2fe0c.jpg', 1),
(407, 33361, '8e022f285e97908ad5de47a1a886982b.jpg', 1),
(408, 33195, '65675ef79861f40588385e1d2a7b8cb0.jpg', 1),
(409, 33053, 'ed020c6e4cbb57adf5ff5571af541301.jpg', 1),
(410, 33079, '480597f95d4d708caabde4e42756b94f.jpg', 1),
(411, 33022, '1dc9d98cbdbcc6c3e934d5616fe41caa.jpg', 1),
(412, 32960, 'c0e517aacaabaecf79ab0877574554e9.jpg', 1),
(413, 33254, 'b10ead260f24e0215439c123cf7c0fc8.jpg', 1),
(414, 33252, 'eac93a7da6f2e2fed029c252f5a8170c.jpg', 1),
(415, 33253, '041bc2fc647f9dc9ce931368ba1ed40b.jpg', 1),
(416, 33250, '6b4285454bc1109b2614db781a7404ae.jpg', 1),
(417, 33229, 'ecc28825cb57014f1e3f33064f11f567.jpg', 1),
(418, 32887, '57b0f3cabe56da9c3ae056d71f6a49cd.jpg', 1),
(419, 31913, 'ce333b8403381cf37cd9b0b9e218d114.jpg', 1),
(420, 32890, 'd0c40abc4b41527d0d3ac54be17587ab.jpg', 1),
(421, 32888, '1f4b5a60a11c3e4b06486cc53278f35e.jpg', 1),
(422, 33349, '78403ba5d8ef34c4d10a689c75fdb398.jpg', 1),
(423, 32889, 'bd6b596b41a2258daf404c00a68eba0e.jpg', 1),
(424, 32999, '2cc9d2dcefd74d7ee818ba609fbc636b.jpg', 1),
(425, 33350, '87f9ffeb877e35946a1c72282e34dd36.jpg', 1),
(426, 33399, 'f5ff98a4923cdbbc4a21d4af5e8a23c0.jpg', 1),
(427, 33012, 'faf504bdbe60ae3a7c536536e92874ae.jpg', 1),
(428, 33249, '1c6d9fa24c0ee9cc53492496b4f15efb.jpg', 1),
(429, 33424, 'd9751e3bbfe21199fb321b5988c64175.jpg', 1),
(430, 33425, 'a1c98bcdb0551f2acf202abfd5784c27.jpg', 1),
(431, 33100, '946cf1d32dfeba43500545afe1c7b8f5.jpg', 1),
(432, 33100, 'f0a1844374c34b4a7c0fec9d5e470ef2.jpg', 2),
(433, 33425, '0b03011e73857ee9970c53f292e8dda5.jpg', 2),
(434, 33426, '1522e88c2a5c40840925a2ee454c08e7.jpg', 1),
(435, 33427, '93f2217d148a5c1313f68542830c105e.jpg', 1),
(436, 33427, '406aab9608cdf8736b52422944e5fda6.jpg', 2),
(437, 33083, '61cb775a8acd21082d3e00685ee3a0d3.jpg', 1),
(438, 33072, '09845ebb10e976b29ef3a18463bf2105.jpg', 1),
(439, 33072, '0c0f0cf046b905218657adc732ce528a.jpg', 2),
(440, 33200, '6cab8a9d0ac7826880706079131a4b93.jpg', 1),
(441, 33016, 'f988c8e836264af31252b981b2b45706.jpg', 1),
(442, 33471, '94d92d83ba45964227345139901fd152.jpg', 1),
(443, 33040, 'da767b2bb0427237ef2ba7c110c7fac8.jpg', 1),
(444, 33472, '011fce740cce3d0225abe8729288d786.jpg', 1),
(445, 33468, 'e1ae2983c38d18c20c0097322a5f336f.jpg', 1),
(446, 33467, '8d8ba86a94a0815ae6b1d5b193bf3d6b.jpg', 1),
(447, 33164, '41502e43cbe34a12a7b185106f8290af.jpg', 1),
(448, 33127, '32661008285b88c9bc671797ca6e88e0.jpg', 1),
(449, 33439, 'f5d9fd9fe3b882b43acf4da6c7a32162.jpg', 1),
(450, 33438, '6e9ae033ca836fab226287d2fc15a722.jpg', 1),
(451, 33470, '035bb9c71e54a371dbc6af8f9f694f90.jpg', 1),
(452, 33442, 'a4eb7c4d885fa49523613f424ed3c48b.jpg', 1),
(453, 33104, '42af0b959b9c3016bc48805fdc1ee303.jpg', 1),
(454, 33435, 'e680f46cd50284c1973cf985ab3a7533.jpg', 1),
(455, 33440, '66128e12b3869f3b075f619615358c82.jpg', 1),
(456, 33137, '020c4c0a7cebedbe4f6aba53612f32c3.jpg', 1),
(457, 33184, 'ab1604aa0b0697def2142af33e6b173c.jpg', 1),
(458, 33171, '35d232cc97529050a08c28927d14c57c.jpg', 1),
(459, 33441, '30f46bc18cd4d839ef50e85100bed204.jpg', 1),
(460, 33122, '0a3ef0f65a884bd6fe06533c8cec2302.jpg', 1),
(461, 33189, 'cce6f0f584ede51da3719f63659c88a2.jpg', 1),
(462, 33132, '36659523448d350bede0980b44a4fd75.jpg', 1),
(463, 33469, 'cbf1a5ff69887244cccc271e3dea6e7f.jpg', 1),
(464, 33092, 'f5a8a8914e53c7b70c5ec7726995eeda.jpg', 1),
(465, 33128, '6cc0d3473b97adb2b389a9e425b6633d.jpg', 1),
(466, 33109, '673e563d0d8eda49a70981009dba4b72.jpg', 1),
(467, 33036, '7f3cf8f5a79f94bb926dbf158c48c2e4.jpg', 1),
(468, 33130, 'feeb8c2f72cc59aba503e7f26670af21.jpg', 1),
(469, 33064, '88d40f90a2ae160491ba6ff21b4eeeb3.jpg', 1),
(470, 33032, 'bdf6a9f274cab1c1db701c93679ff157.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL auto_increment,
  `item_id` int(11) default NULL,
  `item_pid` int(11) default NULL,
  `display` enum('y','n') default 'y',
  `category_image` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `product_categories`
--

INSERT INTO `product_categories` (`id`, `item_id`, `item_pid`, `display`, `category_image`) VALUES
(1, 2220, 0, 'y', NULL),
(2, 31631, 2220, 'y', 'b21fa942b76ef9d550a93a91b1e9d2a3.jpg'),
(3, 31629, 2220, 'y', 'f9b404aa4d29ff558c446badf8990dc1.jpg'),
(4, 31628, 2220, 'y', '45f82232a600aa689581a361fd477b78.jpg'),
(5, 31626, 2220, 'y', '69a415a7d7bbe1d2022d27b30775fd8b.jpg'),
(6, 31630, 2220, 'y', 'e6326916f564a6688a451291426cb98a.jpg'),
(7, 31633, 2220, 'y', '0c6185c79de3fc588e6d169a0d7f7c70.jpg'),
(8, 32081, 0, 'y', 'bf532a5e3d7602cb7b0ed54c10b64425.jpg'),
(9, 32082, 32081, 'y', NULL),
(10, 32084, 32081, 'y', NULL),
(11, 32083, 32081, 'y', NULL),
(12, 32822, 31629, 'n', NULL),
(13, 32821, 31629, 'n', NULL),
(14, 32863, 31628, 'y', NULL),
(15, 32340, 31626, 'y', NULL),
(16, 32826, 31626, 'y', NULL),
(17, 32339, 31626, 'y', NULL),
(18, 32827, 31626, 'y', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories_ext`
--

CREATE TABLE IF NOT EXISTS `product_categories_ext` (
  `id` int(11) NOT NULL auto_increment,
  `item_master_id` int(11) default NULL,
  `lang` int(11) default '1',
  `title` text,
  `translit` varchar(255) default NULL,
  `meta_title` varchar(255) default NULL,
  `meta_description` varchar(255) default NULL,
  `meta_keywords` varchar(255) default NULL,
  `static_content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `product_categories_ext`
--

INSERT INTO `product_categories_ext` (`id`, `item_master_id`, `lang`, `title`, `translit`, `meta_title`, `meta_description`, `meta_keywords`, `static_content`) VALUES
(1, 2220, 1, 'АВТОАКСЕССУАРЫ', 'avtoaksessuary', NULL, NULL, NULL, NULL),
(2, 31631, 1, 'Датчики, техника', 'datchiki-tehnika', '', '', '', ''),
(3, 31629, 1, 'Инструменты', 'instrumenty', '', 'Инструменты известных производителей, специально разработанные для работы с автомобильными стёклами.', '', ''),
(4, 31628, 1, 'Клипсы', 'klipsy', '', '', '', ''),
(5, 31626, 1, 'Молдинги', 'moldingi', '', '', '', ''),
(6, 31630, 1, 'Ремонт датчиков', 'remont-datchikov', '', '', '', ''),
(7, 31633, 1, 'Химикаты', 'himikaty', '', '', '', ''),
(8, 32081, 1, 'КЛЕЙ РМА', 'klej-rma', '', 'Полиуретановые клея , активаторы для стекла, праймеры и средства для очистки стёкол.', '', ''),
(9, 32082, 1, 'Активатор', 'aktivator', NULL, NULL, NULL, NULL),
(10, 32084, 1, 'Клей', 'klej', NULL, NULL, NULL, NULL),
(11, 32083, 1, 'Праймер', 'prajmer', NULL, NULL, NULL, NULL),
(12, 32822, 1, 'Присоска мантажная с двумя чашками красная', 'prisoska-mantazhnaya-s-dvumya-chashkami-krasnaya', NULL, NULL, NULL, NULL),
(13, 32821, 1, 'Присоска мантажная с двумя чашками синяя Б/У', 'prisoska-mantazhnaya-s-dvumya-chashkami-sinyaya-bu', NULL, NULL, NULL, NULL),
(14, 32863, 1, 'Клипсы (заглушка)', 'klipsy-zaglushka', NULL, NULL, NULL, NULL),
(15, 32340, 1, 'MERSEDES SPRINTER RW цельн.', 'mersedes-sprinter-rw-celn', NULL, NULL, NULL, NULL),
(16, 32826, 1, 'MERSEDES SPRINTER Боковой 107 цельн.', 'mersedes-sprinter-bokovoj-107-celn', NULL, NULL, NULL, NULL),
(17, 32339, 1, 'MERSEDES SPRINTER Боковой 132 цельн.', 'mersedes-sprinter-bokovoj-132-celn', NULL, NULL, NULL, NULL),
(18, 32827, 1, 'MERSEDES SPRINTER Боковой внут. декор', 'mersedes-sprinter-bokovoj-vnut-dekor', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `rate_of_currency`
--

CREATE TABLE IF NOT EXISTS `rate_of_currency` (
  `id` int(11) NOT NULL auto_increment,
  `NumCode` varchar(255) default NULL,
  `CharCode` varchar(255) default NULL,
  `Nominal` int(11) default '100',
  `Name` varchar(255) default NULL,
  `Value` decimal(8,2) default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `rate_of_currency`
--

INSERT INTO `rate_of_currency` (`id`, `NumCode`, `CharCode`, `Nominal`, `Name`, `Value`) VALUES
(1, '036', 'AUD', 100, 'австралійських доларів', '749.81'),
(2, '031', 'AZM', 100, 'азербайджанських манатів', '1018.87'),
(3, '826', 'GBP', 100, 'англійських фунтів стерлінгів', '1281.75'),
(4, '974', 'BYR', 10, 'білоруських рублів', '0.01'),
(5, '208', 'DKK', 100, 'датських крон', '144.68'),
(7, '978', 'EUR', 100, 'ЄВРО', '1078.98'),
(8, '352', 'ISK', 100, 'ісландських крон', '6.58'),
(9, '398', 'KZT', 100, 'казахстанських тенге', '5.20'),
(11, '428', 'LVL', 100, 'латвійських латів', '1535.25'),
(13, '498', 'MDL', 100, 'молдовських леїв', '61.85'),
(14, '578', 'NOK', 100, 'норвезьких крон', '133.83'),
(15, '985', 'PLN', 100, 'польських злотих', '255.20'),
(17, '702', 'SGD', 100, 'сінгапурських доларів', '636.68'),
(18, '960', 'XDR', 100, 'СПЗ', '1224.62'),
(19, '792', 'TRL', 100, 'турецьких лір', '396.54'),
(20, '795', 'TMM', 100, 'туркменських манатів', '280.46'),
(21, '348', 'HUF', 1000, 'угорських форинтів', '35.98'),
(23, '203', 'CZK', 100, 'чеських крон', '41.81'),
(24, '752', 'SEK', 100, 'шведських крон', '124.66'),
(26, '156', 'CNY', 100, 'юанів женьміньбі (Китай)', '130.59'),
(27, '392', 'JPY', 1000, 'японських єн', '80.88'),
(28, '840', 'USD', 100, 'доларів США', '799.30'),
(29, '124', 'CAD', 100, 'канадських доларів', '775.74'),
(30, '440', 'LTL', 100, 'литовських літів', '312.49'),
(31, '643', 'RUB', 10, 'російських рублів', '2.48'),
(32, '860', 'UZS', 100, 'узбецьких сумів', '0.37'),
(33, '756', 'CHF', 100, 'швейцарських франків', '878.07');

-- --------------------------------------------------------

--
-- Структура таблицы `siteconfig`
--

CREATE TABLE IF NOT EXISTS `siteconfig` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `value` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `siteconfig`
--

INSERT INTO `siteconfig` (`id`, `name`, `value`) VALUES
(1, 'start_page_id', '1'),
(2, 'admin_email', 'urluglass@gmail.com'),
(3, 'articles_count', '5'),
(4, 'increase_of_price', '10'),
(5, 'order_items_count_onpage', '5'),
(6, 'euro_rate', '16');

-- --------------------------------------------------------

--
-- Структура таблицы `structure`
--

CREATE TABLE IF NOT EXISTS `structure` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL,
  `sorting` int(11) default NULL,
  `template` varchar(50) default 'page',
  `add_date` timestamp NULL default '0000-00-00 00:00:00',
  `up_date` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='structure table' AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `structure`
--

INSERT INTO `structure` (`id`, `pid`, `sorting`, `template`, `add_date`, `up_date`) VALUES
(2, 0, 4, 'page', '2011-04-13 13:51:22', '2011-05-11 09:52:20'),
(3, 0, 1, 'page', '2011-04-13 13:51:51', '2012-02-27 07:41:12'),
(4, 0, 5, 'feedback', '2011-04-13 13:52:16', '2011-05-11 09:52:20'),
(5, 0, 3, 'gallery', '2011-04-14 18:35:16', '2012-02-27 07:41:12'),
(6, 0, 2, 'articles', '2011-04-15 21:26:42', '2012-02-27 07:41:12'),
(7, 2, 1, 'page', '2011-04-15 22:09:54', '2011-04-15 22:09:54'),
(8, 0, 7, 'page', '2011-04-28 08:21:43', '2011-04-28 09:09:06'),
(9, 0, 6, 'page', '2011-04-28 09:09:01', '2011-05-11 09:52:20');

-- --------------------------------------------------------

--
-- Структура таблицы `structure_ext`
--

CREATE TABLE IF NOT EXISTS `structure_ext` (
  `id` int(11) NOT NULL auto_increment,
  `master_id` int(11) default '0' COMMENT 'значение ID из таблицы STRUCTURE',
  `lang` int(11) default '1' COMMENT 'ID языка',
  `display` enum('y','n','h') default 'y',
  `translit` varchar(256) default NULL,
  `name` text,
  `title` text,
  `description` text,
  `keywords` text,
  `content` longtext,
  `banners` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Мультиязычная структура разделов \r\n' AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `structure_ext`
--

INSERT INTO `structure_ext` (`id`, `master_id`, `lang`, `display`, `translit`, `name`, `title`, `description`, `keywords`, `content`, `banners`) VALUES
(2, 2, 1, 'y', 'o-kompanii', 'О компании', '', '', '', NULL, ''),
(3, 3, 1, 'y', 'oplata-i-dostavka', 'Оплата и доставка', '', '', '', NULL, ''),
(4, 4, 1, 'y', 'feedback', 'Контакты', '', '', '', NULL, ''),
(5, 5, 1, 'n', 'fotogalereya', 'Фотогалерея', '', '', '', NULL, ''),
(6, 6, 1, 'n', 'novosti', 'Новости', '', '', '', NULL, ''),
(7, 7, 1, 'y', 'shtat-sotrudnikov', 'Штат сотрудников', '', '', '', NULL, ''),
(8, 8, 1, 'h', 'tekst-glavnoj-stranicy-kataloga', 'Текст главной страницы каталога', 'Все для автомобильных стёкл - PMA TOOLS электронный магазин.', 'PMA TOOLS электронный магазин по продаже датчиков для стёкол и принадлежностей. Инструменты для монтажа и ремонта автомобильных стёкол, другое.', 'автомобильные, стекла, датчики, молдинки, ремонт, инструменты.', NULL, ''),
(9, 9, 1, 'y', 'vozvratobmen', 'Возврат-обмен', '', '', '', NULL, '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `login` varchar(255) default NULL,
  `city` varchar(255) default NULL,
  `phone_num` varchar(255) default NULL,
  `costumer_type` enum('retail_buyer','legal_entity','individual') default 'retail_buyer',
  `company` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `from_user` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `activate_code` varchar(255) default NULL,
  `active` enum('y','n') default 'y',
  `discount` int(11) default NULL,
  `user_price` enum('trade_price','retail_price') default 'retail_price',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='registered users data\r\n' AUTO_INCREMENT=72 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `city`, `phone_num`, `costumer_type`, `company`, `password`, `from_user`, `email`, `activate_code`, `active`, `discount`, `user_price`) VALUES
(1, 'Мельник Алексей', 'amelex', 'Винница', '+380977775544', 'legal_entity', 'Метастудия', 'ad38b991e3f82cc6099c54ef69d44d47', '2', 'amelex.alex@gmail.com', '9856f88fe9c7eb6fd2fe3cdb8bb62bef', 'y', 0, 'retail_price'),
(2, 'Галай О.А.', 'ky_ky2005', 'Винница', '063 555 55 55', 'retail_buyer', '', 'e10adc3949ba59abbe56e057f20f883e', '3', 'ky_ky2005@rambler.ru', 'ab0126a8c084d848725c8cf92c745643', 'y', NULL, 'retail_price'),
(3, 'Александр', 'Creazykot', 'Винница', '+380672267936', 'retail_buyer', '', '202cb962ac59075b964b07152d234b70', '3', 'creazykot@mail.ru', '849f27991de2ba5240a45974585fecba', 'y', 0, 'retail_price'),
(4, 'nikolaev', 'nikolaev', 'Винница', '+380504474343', 'legal_entity', 'РА "Метастудия"', 'e10adc3949ba59abbe56e057f20f883e', '3', 'metastudio@mail.ru', 'd6135ae200366a2f6ac530701bdf18fb', 'y', NULL, 'retail_price'),
(5, 'Ткаченко Юрий', 'tkach', 'Винница', '533798', 'retail_buyer', '', '6b3a0e7970e779b634f31960b273bf81', '3', 'yuriy.tkachenko@mail.ru', 'ca6ce0b419078578247094d1a7d0f22d', 'y', 0, 'retail_price'),
(6, 'Александр Рудык', 'sanya', 'Винница', '0963015040', 'individual', '', '202cb962ac59075b964b07152d234b70', '2', 'sanyarud@gmail.com', '1a87e81c6fdb46ef26f535b7032e573b', 'y', NULL, 'retail_price'),
(7, 'donald_trump1', 'donald_trump1', 'donald_trump1', '856566', 'legal_entity', 'donald_trump1', '0ce02c5c1fffe129c73863a0c1e3a1b1', '1', 'donald_trump1@gmail.com', '06d8b5998c501162bbc190650b93cfb7', 'y', 0, 'trade_price'),
(8, 'Слава', 'lvislava', 'Винница', '0674307222', 'individual', '', '22a4d9b04fe95c9893b41e2fde83a427', '3', 'lvislava@mail.ru', '9bfc6003fe342fbff329b8ab5906cc47', 'y', NULL, 'retail_price'),
(9, 'Лариса', 'loreal67', 'Винница', '0972511055', 'individual', '', 'e9a250fee23ecae6019ebcd6df621f37', '4', 'loreal67@i.ua', 'e08b23894e2bac62eb34a26bb7bed2c2', 'y', 0, 'retail_price'),
(10, 'игорь', 'steklomir', 'севастополь', '0667602069', 'individual', '', '201f019da6aa47f8235b699fe6919d33', '4', 'steklomir-sev@mail.ru', '61bcd036f376da00797a5ef22776bba1', 'y', 0, 'trade_price'),
(11, 'Roman', 'foros', 'Rybnitsa', '373 699 38 198', 'individual', '', 'e807f1fcf82d132f9bb018ca6738a19f', '4', 'clk200k@mail.ru', '19d972f7e5144192dc08510ae10010af', 'y', 0, 'trade_price'),
(12, 'Михаил', 'avtogroupcom', 'Черновцы', '0 66 0 900 300', 'individual', '', '32f088bcb007f1ca5de4ac39ec942485', '1', 'avtogrupcom@mail.ru', 'c430818abce3e4a0ebe305d8d8995b5b', 'y', 0, 'trade_price'),
(13, 'Виктор', 'bussteklo', 'Донецк', '+380505400045', 'individual', '', '680bd64a2c0b9f927c4dfb8f1f95e264', '4', 'bussteklo@yandex.ru', '679f88453827fd3367d8118cb7f82ef4', 'y', 0, 'trade_price'),
(14, 'Светлана', 'Psvetlana', 'Жмеринка', '+380672935145 город: 0433222657', 'legal_entity', 'магазин авто запчастей "Светлана"', 'aafffd2700825e6a1b7fe90f9d4be30a', '1', 'psvetlana2008@mail.ru', 'fffe0f900cdb200b3f337fb422c23dd3', 'y', NULL, 'retail_price'),
(15, 'Oleg Levchenko', 'leonkss', 'Kherson', '0507020800, 0507175670', 'individual', '', 'e10adc3949ba59abbe56e057f20f883e', '4', 'oleg.levchenko@gmail.com', '2243241f6f07c69527a456626e22537c', 'y', NULL, 'retail_price'),
(16, 'Алекс', 'metastudio', 'Винница', '554369', 'individual', '', 'c4ca4238a0b923820dcc509a6f75849b', '3', 'metastudio@mail.ru', 'f6e30c48a72ba0a54eb441fdd95b576d', 'y', NULL, 'retail_price'),
(17, 'Валерий', 'zvalerij', 'Полтава', '066-0333288', 'individual', '', '21e8ebeda5df410ed835d154f35da1fd', '4', 'zvalerij@mail.ru', 'a5b4cc1d0118f0c369758d92ea07bf29', 'y', 0, 'trade_price'),
(18, 'Владимир', 'masterglass', 'Киев', '+380445926742', 'individual', '', '6fbc10faa450d8834cc8c7aeda4736c8', '4', 'avtosteklo@ukr.net', 'a9745b4f4da6756552de5ee5bbc46f2b', 'y', NULL, 'retail_price'),
(19, 'Петленко Олег Радионович', 'autokuzov@list.ru', 'Днепропетровск', '0675637622', 'individual', '', '4a2a3a1f870f5d7be216e2835ccf26ce', '4', 'autokuzov@list.ru', 'dff0c83b5c6dbedf79d6b70aeb79f22a', 'y', NULL, 'retail_price'),
(20, 'Сергей', 'automaximum', 'Донецк', '050 677 65 06', 'individual', '', 'dbea7c50373dc08c1198336c989bdfec', '1', 'automaximum.x@mail.ru', 'b8374fd31fb5617c213f68288a484a0d', 'y', NULL, 'retail_price'),
(21, 'Александр', 'shina-tir@mail.ru', 'Запорожье', '0992499000', 'individual', '', '56af919ec031b7838cab0af4521bced1', '1', 'shina-tir@mail.ru', '1d856df80f5fb87b5096a9a0a9ab47f6', 'y', 0, 'trade_price'),
(22, 'Павел', 'Pavel E', 'Киев', '050 334 5958', 'individual', '', '759f33372e5bc61545841a72ff07e756', '1', 'evtushen@i.com.ua', '131e6c6511061ef9eb8b288440722e4e', 'y', NULL, 'retail_price'),
(23, 'Олег', '250990', 'Житомир', '067-325-25-03', 'individual', '', '60384b7b33b0a7122701d2ebbd51d5e1', '1', 'Avto-glass-service0@rambler.ru', '1528903c97de5e39573b4e01f772ce7d', 'y', 0, 'trade_price'),
(24, 'Алексей', 'kordon11', 'Смела', '0631868933', 'individual', '', '2f6d3dbefa29e073370abc8aacf8e857', '2', 'kordon11@yandex.ru', '0e40a89b91cd19099bd5a117a80056fa', 'y', NULL, 'retail_price'),
(25, 'Олег', 'Bavaria', 'Харьков', '0963402004', 'individual', '', 'c077ce56cdcf7f263bc8a3613738d984', '1', 'oponomarenkobmw@gmail.com', 'cafccc12760c781272181a8679a71769', 'y', NULL, 'retail_price'),
(26, 'Дидковский', 'etalon7', 'Луганск', '0504736807', 'individual', '', '47eb4db87192ac84c4a4fe7d703e21eb', '4', 'etalon7@ukr.net', '31f6b90fc55a90c8ba3fd8f9a5a5bfad', 'y', 0, 'trade_price'),
(27, 'Roman', 'flood', '1885', '777 08888', 'individual', '', '41aecf4d7dcd76f00fc4c91711315175', '4', 'clk200k@mail.ru', '8f5bf6d4fb3c347188cbb37f89619119', 'y', 0, 'trade_price'),
(28, 'Сергей', 'avtokoshik', 'Днепропетровск', '380933546161', 'individual', 'ЧП Омельченко С.В.', 'f7309c389129ca77f9af288284871d74', '4', 'avtokoshik@mail.ru', '979961f4ee14c4d7fe0f7fbff20875cb', 'y', 0, 'trade_price'),
(29, 'Виктор', 'Avtoboss', 'Киев', '044-224-55-96', 'legal_entity', 'АвтоБосс', '68db48424f3a8cdb522545becd8f907f', '4', 'V.Kushnir@autoboss.in.ua', '2444957f1e998430ee0df3493fdded9f', 'y', 0, 'trade_price'),
(30, 'Сергей', 'SkloAvto', 'каменец-подольский', '0679880028', 'individual', '', '6dbb78f709419587abf35f1b570e753c', '2', 'SkloAvto@yandex.ru', 'f9fb28249cbef68bf31b879cd2ce7b8d', 'y', NULL, 'retail_price'),
(31, 'Акинчина Татьяна Николаевна', 'Классик.A', 'Одесса', '048 700 32 32        067 483 69 52', 'individual', '', '57c51f48c40217351ca38755e1400529', '1', '7033232@mail.ru', '11e5ad5b13fd8ac076e7a660d730efb8', 'y', 0, 'trade_price'),
(32, 'Сергей', 'serg-glass', 'Харьков', '0675763630   0993091111', 'individual', '', '9117fe9af62529f4a2604415e9adfeb3', '2', 'serg-glass@yandex.ru', '2c97f51cf77a68558b0b8265d1b00970', 'y', 0, 'trade_price'),
(33, 'Володимир', 'kovel2', 'Ковель', '+380681918449', 'individual', '', 'b2bcb40661d7d823d5543812cb6dfda3', '3', '7520501@mail.ru', '22117b8c95ebbbabfbad139a437476f5', 'y', 0, 'trade_price'),
(34, 'Игорь', 'kulibin', 'Кировоград', '0675200292', 'individual', '', 'c8558e5744a4f1a394b90f2bbae02838', '3', 'kulibin@shtorm.com', '04aacd71a804d9f547c0112277229873', 'y', 0, 'trade_price'),
(35, 'Алексей', 'autosklad.orel', 'Орёл', '89536240500', 'legal_entity', 'ИП Снурницын', '7358bf8b28649e6c77e2146664f3aade', '2', 'ansnur@mail.ru', '56bcdef5ccee12c4e0e3bbbafa89519a', 'y', NULL, 'retail_price'),
(36, 'Александр', 'РИОЛ АВТО', 'г.Киев ул Е.Телиги, 6', '067 792 58 63', 'legal_entity', 'РИОЛ АВТО', '63ce5a1d7b323d0b4605a6259f625510', '3', 'dorav@mail.ru', '5098d1097c6b8141fb54e58b59620e75', 'y', 0, 'trade_price'),
(37, 'Станислав', 'carglass', 'Днепропетровск', '0952832909', 'individual', '', 'e10adc3949ba59abbe56e057f20f883e', '1', 'dnepr1@carglass.ua', '32ec7aef71d335d27fb0ea5b085a7ebe', 'y', NULL, 'retail_price'),
(38, 'Сергей', 'zasteklom72@mail.ru', 'Тюмень', '8(3452)600-887', 'individual', '', 'e02f4442ec1998c9e31e9867e3b8fbfe', '2', 'zasteklom72@mail.ru', '4dd25880ff6dd37149b11c856f111634', 'y', NULL, 'retail_price'),
(39, 'Victor', 'melescov', 'Chisinau', '+373 78888825', 'legal_entity', 'IVVA MELESCO', 'eac5991eab01f027a0abefbfe64f049b', '1', 'melescov@yahoo.com', '2d01fa9eeb9416da5468c28412e12c63', 'y', NULL, 'retail_price'),
(40, 'Sasha', 'Shaibak', 'Minsk', '+3756866347', 'legal_entity', 'Мобискар МН', 'dcbc010a0e280aeec40f51de86c1f026', '1', 'Shaibak@rambler.ru', '7b4ab1b803905f570a05aa15b477181d', 'y', NULL, 'retail_price'),
(41, 'Таран Виктория', 'viktoriya-avto74', 'Прилуки', '050-22-22-600', 'individual', '', 'b00a50c448238a71ed479f81fa4d9066', '1', 'viktoriya-avto74@mail.ru', '30bf039d49ff231459f5e347eb0a7927', 'y', NULL, 'retail_price'),
(42, 'Юрій', 'karpyura@yahoo.com', 'Червоноград', '0979739345', 'individual', '', '38116a12292253ea9e87eaa3376ff0cb', '1', 'karpyura@yahoo.com', '376467bf589f136f99a8ac32664ede96', 'y', NULL, 'retail_price'),
(43, 'Александр', '87840', 'Полтава', '+380952024862', 'individual', '', '5cf4c2495b507eb36f905a50fa6bed75', '2', '87840@mail.ru', 'aa378aa26421b7b7cb1818c2088ef933', 'y', NULL, 'retail_price'),
(44, 'Николай', 'nik2012@i.ua', '1978', '093-125-25-55', 'individual', '', '4297f44b13955235245b2497399d7a93', '1', 'nik2012@i.ua', 'e513e18cc6425e3dd7d06582cd842ea1', 'y', NULL, 'retail_price'),
(45, 'Виктор', 'nalivaychuk_kr', 'Кривой Рог', '0675644543', 'individual', '', 'da974f5eba1948690c83e9c3b43ffd87', '4', 'nalivaychuk_kr@ukr.net', '1d195ef9d7d9735e7e0927ef18bdb084', 'y', NULL, 'retail_price'),
(46, 'Максим Гученко', 'guchenko.maxim@gmail.com', 'Житомир', '0976587958', 'individual', '', 'ef39d1262546834a42e1574587739bf5', '2', 'guchenko.maxim@gmail.com', 'd14fb5f70359922a1d4bc6e4c2a60010', 'y', NULL, 'retail_price'),
(47, 'алексей', 'leha151274', 'никополь', '0952512620', 'individual', '', '297cf6afb18bf4db8bfa82470f015a97', '2', 'leha151274@mail.ru', 'ad0fd48ecca274bbb7bcd5a32b6a66ad', 'y', NULL, 'retail_price'),
(48, 'Дмитрий', 'sdg005', 'Россия, Краснодарский край, Крыловский район, Октябрьская', '+79094530777', 'individual', '', '0bac24b3205e81bf227319c68a3c831b', '2', 'sdg005@mail.ru', '3f6d6a220e7ee908d31770ad04a130f9', 'y', NULL, 'retail_price'),
(49, 'Вадим', 'Autoglass.simf', 'Симферополь', '+380994774340', 'individual', '', '113274d10acb4212f8c89249bb8b1d0b', '4', 'autoglass.simf@gmail.com', 'ab524aacfc630c5b34f63d9618633efe', 'y', NULL, 'retail_price'),
(50, 'Саша', 'kalininskoe', 'Днепропетровск', '097-954-78-49', 'individual', '', 'c8fbb58c7c52f07f5fac714190f81d7f', '4', 'shurik-bimer@mail.ru', 'c41a203c491cf1077be2a0d6ca3e8e34', 'y', NULL, 'retail_price'),
(51, 'стёпа', 'kotia_rudi', 'Кемерово', '89069834685', 'individual', '', '4b88a2aa082f7489fa6822df22662400', '3', 'kotia_rudi@mail.ru', '3a799d3fa479f76cf27d191ac89be365', 'y', NULL, 'retail_price'),
(52, 'Роман', 'khrv', 'Луганск', '0505500354', 'individual', '', '4728b862c93d9be0a5db8383675c2d55', '1', 'zapaz@mail.ru', 'd1342c1a07a9a1fd187775301e2055a6', 'y', NULL, 'retail_price'),
(53, 'ColinKa', 'ColinKa', 'Tirgu Mures', '123456', 'legal_entity', 'google', 'a2fc017ea15afb4b4b76eaee9682425d', '4', 'colinml@yandex.ru', '01bbe7655ad727c75f77ec227b3c333c', 'y', NULL, 'retail_price'),
(54, 'Tonykcrind', 'Tonykcrind', 'Тверь', '123456', 'individual', '', 'a8f8539338d8dcdc7b9d1f06be2c7f31', '2', 'super.tabac2014@yandex.ru', 'a0175a80e6975c157166559973c555a1', 'y', NULL, 'retail_price'),
(55, 'Автостекло', 'avtosteklolg', 'Луганск', '050-473-68-07', 'individual', '', '9cc9e307018cffbde33ccf61f76bda5f', '2', 'avtosteklolg@gmail.com', 'e77b4e34ada466185fb2086765e96f5d', 'y', 0, 'trade_price'),
(56, 'CalvinKa', 'CalvinKa', 'Kuwait', '123456', 'individual', 'google', '307766bbd7b2b8a252e3e83bc79a58e5', '3', 'terpnmakohal1982@yandex.com', 'b6f85ab8249a799956432a18af9db69a', 'y', NULL, 'retail_price'),
(57, 'Сергей', 'Sergej64', 'Орск', '+7(905) 899-14-47; +7(3537) 311-447', 'individual', '', '5983358addfe5b8bb131488ea532088a', '1', '311447@list.ru', '0b96ea1722c6e8ce16ee366955ef3a6b', 'y', NULL, 'retail_price'),
(58, 'Игорь', 'tahoplus', 'Черкассы', '0472 65-17-00', 'legal_entity', 'ПП "Тахоплюс"', '3d42f1b3ca6ea2b4b5fd73eec4cc9b99', '4', 'tahoplus@ukr.net', 'ad5e27fb9090debac1d71f01af829a6e', 'y', NULL, 'retail_price'),
(59, 'Сергей', 'sergiokrm', 'Краматорск', '+380507625392', 'individual', '', 'd217952f0590b184e9ca61453af00243', '1', 'sergio.krm@gmail.com', '6d55a09093cfbde7b151586b9796ab6a', 'y', NULL, 'retail_price'),
(60, 'Александр', 'avtodrug', 'Харьков', '068 6512886', 'individual', '', 'de68b7872128bbb506b590f3392aa628', '2', 'alexandernelub@mail.ru', '8232c6adb1a22ce5ae9dd66bfe2c09b8', 'y', NULL, 'retail_price'),
(61, 'Ronaldvave', 'Ronaldvave', 'Москва', '123456', 'legal_entity', 'google', 'e1bb3de11af5275ceabcfb1fec5adc9b', '4', 'ntfsdoa@freexrumer.com', '1a5da46fae47c399f4a75a9d6cca7952', 'y', NULL, 'retail_price'),
(62, 'CurtisVoke', 'CurtisVoke', 'Riga', '123456', 'individual', 'google', 'fa17e51caab190d39021c8db9cbaddb0', '2', 'fhfdgj@freexrumer.com', '28ef5d083b971e579edc603aa74f33cf', 'y', NULL, 'retail_price'),
(63, 'algidomer', 'algidomer', 'Москва', '123456', 'legal_entity', 'google', '0464a6023673361fb89edf2270d71d20', '1', 'razvalixin.isaak@mail.ru', '514137a1763ca62062b85fdb4bec0d0c', 'y', NULL, 'retail_price'),
(64, 'aleroopg', 'aleroopg', 'Москва', '123456', 'individual', 'google', 'dbbb42dbf1fe9c32e5b642c832edc593', '3', 'zherebyatnikov.ilij@mail.ru', 'c3e25b70b492c6a2414648f0a6cb5659', 'y', NULL, 'retail_price'),
(65, 'RichardKl', 'RichardKl', 'La Primavera', '123456', 'legal_entity', 'google', '4415b57b224312f49148ae70cf7dd3b3', '1', 'waispurzarvi1979@yandex.com', '3dbeebe7d089bfbde57cacf048071381', 'y', NULL, 'retail_price'),
(66, 'Денис', 'Denis4192', 'Николаев', '380679872870', 'individual', '', '5272c114ae0c2772869befb18abb1550', '1', 'Chernov-d@mail.ru', '08c53e3c0627ed52129848f9559e1bdf', 'y', NULL, 'retail_price'),
(67, 'Александр', 'alkur', 'Васильков', '0505476628', 'individual', 'спд', 'afdf6292f3879265d251c7f6d23481e1', '1', 'alkurfcsd@ukr.net', '4e620528e4d472fd5be32b8b5b765f84', 'y', NULL, 'retail_price'),
(68, 'Rafaeljem', 'Rafaeljem', 'NEW AMSTERDAM', '123456', 'legal_entity', 'google', '8f03ffc94505902e3a0d4001efbffcf3', '2', 'rafaelei@yandex.ru', '995b70a71f083832c2b6c7c26c22aa02', 'y', NULL, 'retail_price'),
(69, 'Platjave', 'Platjave', 'Poland', '123456', 'individual', 'google', '3de975b35a8cd37abbbf7eae443ce74c', '3', 'plati@slotoland.com', '73a3df59706049d0bb115544c8bcee95', 'y', NULL, 'retail_price'),
(70, 'Сергей', 'zasteklom86@mail.ru', 'Тюмень Тюменская область', '89292690887', 'individual', '', '7951f175f5272e9499a75bf139d6bd21', '2', 'zasteklom86@mail.ru', 'bd196c2247c742969454c48e23fc0f8b', 'y', NULL, 'retail_price'),
(71, 'Сергей', 'S.Beresnev-avtosteklo@yandex.ru', 'Ярославль', '8-4852-71-51-75', 'legal_entity', 'ООО "Эй Джи Экспертс Центр"', '525e2777449a96e9fd09a3282ac89c1f', '1', 'S.Beresnev-avtosteklo@yandex.ru', 'cb3e4a761eb55c44c459fe594f1945a2', 'y', NULL, 'retail_price');

-- --------------------------------------------------------

--
-- Структура таблицы `users_from_list`
--

CREATE TABLE IF NOT EXISTS `users_from_list` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users_from_list`
--

INSERT INTO `users_from_list` (`id`, `title`) VALUES
(1, 'Поисковая система Google'),
(2, 'Поисковая система Yandex'),
(3, 'От друзей'),
(4, 'Другое');

-- --------------------------------------------------------

--
-- Структура таблицы `users_tmp`
--

CREATE TABLE IF NOT EXISTS `users_tmp` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `country` varchar(255) default NULL,
  `city` varchar(255) default NULL,
  `phone_num` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `delivery_method` varchar(255) default NULL,
  `payment_method` varchar(255) default NULL,
  `time_of_delivery` varchar(255) default NULL,
  `comments` text,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Дамп данных таблицы `users_tmp`
--

INSERT INTO `users_tmp` (`id`, `name`, `country`, `city`, `phone_num`, `email`, `delivery_method`, `payment_method`, `time_of_delivery`, `comments`) VALUES
(1, 'Виктор Янукович', 'Украина', 'Донецк', '+380977777777', 'ssuport@president.gov.ua', 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', '8:00-12:00', 'Очень рад что нашел ваш интернет магазин.'),
(2, 'Александр Рудык', 'Украина', 'Винница', '+380672267936', 'seo@metastudio.com.ua', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'klsdjflks'),
(3, 'Александр', '', 'Винница', '0634912981', 'halay@metastudio.com.ua', 'Самовывоз', 'Наличными', 'Не имеет значения', 'тест 2'),
(4, 'Александр', '', 'Березань', '0955200005', 'alex.n.gurin@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Доставка "Новой почтой" в г. Березань, Киевской области.'),
(5, 'Владимир', '', 'Бровары', '0675063400', 'leschh@i.ua', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Бровары — Новая почта.Склад №3'),
(6, 'Алексей', '', 'Смела', '0631868933', 'kordon11@yandex.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'доставка желательно "Новой Почтой" наложенным платежем'),
(7, 'Александр', '', 'Киев', '0983941974 0502170274', 'cherrysto@yandex.ru', 'курьером', 'Наличными', 'Не имеет значения', ''),
(8, 'dfgsdf', '', 'dgsdf', '243523452345', 'dsdgf@dom.com', 'курьером', 'Наличными', '15:00-18:00', ''),
(9, 'Вадим', '', 'Одесса', '38 093 854 12 04', 'shepelenko86@inbox.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(10, 'Виталий', '', 'Днепропетровск', '0667915065', '331941@ukr.net', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Новая почта, склад №27'),
(11, 'Вадим', '', 'Одесса', '093 854 12 04', 'shepelenko86@inbox.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', '12:00-15:00', ''),
(12, 'денис', '', 'донецк', '0507681757', 'denis.freeman2010@yandex.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', '8:00-12:00', ''),
(13, 'Руслан', '', 'Черкассы', '0973129797', 'Sarni10@ukr.net', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'отделение!!!!!!!Новая Почта, г. Черкассы, ул. Волкова.'),
(14, 'Толсторебров Евгений Валерьевич', '', 'Луганск', '0509290590', 'tevgen@ukr.net', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Новая Почта, склад № 6, или Интайм, склад "Луганск-Маяк"\r\nесли можно - оплата наложеннім платежом'),
(15, 'казаков андрей', '', 'енакиаво', '0505309672', 'kavzik124@yandex.ua', 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'Не имеет значения', ''),
(16, 'Андрей', '', 'Кривой Рог', '067 426 79 69', '111kaktys@rambler.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'Не имеет значения', 'Добрый день. Хочу приобрести у Вас Гель для установки датчиков «Sensor Tack 1» 1 шт.\r\nРасчет могу произвести по безналу, или по карте приватбанка\r\nДоставку прошу произвести в Кривой Рог Новая почта 4отделение Косиора 7'),
(17, 'Вадим', '', 'Одесса', '093 854 12 04', 'shepelenko86@inbox.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(18, 'Евгений', '', 'Харьков', '0974208011', 'zinia-78@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(19, 'сергей', '', 'винница', '0674308960', 'vintar69@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'none', 'нова почта склад Г,Успенского'),
(20, 'Игорь', '', 'Артемовск', '0508243817', '18igor38@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'Не имеет значения', ''),
(21, 'Александр', '', 'Подволочиск', '0504471805', 'kosalex@ukr.net', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'как исключение наложенный  платеж. Новая почта.'),
(22, 'Николай', '', 'Черкасская обл.,г.Смела', '0984408688', 'razbor77@ukr.net', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(23, 'Юрий', '', 'Сумы', '0505405392', 'ludaisaeva@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(24, 'Теодор', '', 'Тернопіль', '096 628 46 71', 'teodor-boss@bigmir.net', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(25, 'Дмитрий', '', 'Киев', '0632105693', 'udi@ukr.net', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Нова Почта Отделение №55, Киев, Николая Островского 60'),
(26, 'Сергей', '', 'АР Крым г.Алушта', '0506261643', 'ms_kart_sergey@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', '15:00-18:00', ''),
(27, 'Гавриленко Олег Анатольевич', '', 'Долина Ивано-Франковская обл', '0666450452', 'gavrilenko.ivanka@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(28, 'Бебешко Александр Викторович', '', 'г.Судак', '0979869321, 0992744648', 'red.savr@yandex.ua', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Доставка Новая Почта или ИнТайм. Склад г.Судак'),
(29, 'юрий', '', 'АР Крым Ялта', '0982858985', 'rimma1@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(30, 'Павел', '', 'Бердянск', '0508700263', 'p.glazunov@yandex.ua', 'Автолюкс, Гюнсел, Нова Почта', 'Безналичными', 'Не имеет значения', ''),
(31, 'Владимир', '', 'Умань', '0963140005', 'cugan.jt@gmail.com', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(32, 'Владимир', '', 'г.Ялта,пгт.Гаспра', '0509814419', 'vlasalnik@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Молдинг на лобовое стекло Рено Кангу 2010 года выпуска.\r\nНовая почта. Южнобережное шоссе, пгт. Гаспра.'),
(33, 'Виктор', '', 'Ялта', '0932619060', 'crusaderzp@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(34, 'Саша', '', 'житомир', '0935773110', 'i.marianna@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'обовязково присилати новой почтой! Отделение N 6 ул. Московская, 41 Житомир'),
(35, 'Александр', '', 'Тульчин, Винницкая обл', '+380930565958', 'aleksandr.wx@gmail.com', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Способ доставки: Новая почта г.Тульчин Винницкая обл. получатель: Огородник Александр\r\n+380930565958'),
(36, 'Алексей', '', 'Сумы', '0951259700', 'dir_sumy@bk.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', ''),
(37, 'Фандалюк Андрій', '', 'Нововолинськ', '0967342425', 'fandalyk@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', 'Якщо можна то вишліть Новою почтою наложенним платіжом. Дякую'),
(38, 'Таран Виктория', '', 'Прилуки', '0502222600', 'viktoriya-avto74@mail.ru', 'Автолюкс, Гюнсел, Нова Почта', 'Наличными', 'Не имеет значения', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
