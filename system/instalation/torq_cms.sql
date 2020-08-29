-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 29 2020 г., 09:50
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+04:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `torq_cms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `advertisings`
--

CREATE TABLE `advertisings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `advertising_attributes`
--

CREATE TABLE `advertising_attributes` (
  `id` int(11) NOT NULL,
  `advertising_id` int(11) NOT NULL,
  `typeing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `advertising_translations`
--

CREATE TABLE `advertising_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `advertising_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `get_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `unit` float NOT NULL,
  `min_purchuase` float NOT NULL,
  `unit_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_in` datetime NOT NULL DEFAULT current_timestamp(),
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_attributes`
--

CREATE TABLE `article_attributes` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `video_article` int(1) NOT NULL DEFAULT 0,
  `video_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordernumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_end` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `not_discounted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_images`
--

CREATE TABLE `article_images` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_options`
--

CREATE TABLE `article_options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filtrable` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_options_relations`
--

CREATE TABLE `article_options_relations` (
  `id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_option_values`
--

CREATE TABLE `article_option_values` (
  `id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_rating`
--

CREATE TABLE `article_rating` (
  `id` int(11) NOT NULL,
  `rating_count` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` int(2) NOT NULL DEFAULT 0,
  `added_in` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_translations`
--

CREATE TABLE `article_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_wishlist`
--

CREATE TABLE `article_wishlist` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `changed_date` date NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `blog_articles`
--

CREATE TABLE `blog_articles` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `external_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `has_subcategory` tinyint(1) NOT NULL,
  `active` int(1) NOT NULL,
  `in_menu` int(1) NOT NULL,
  `content` int(1) NOT NULL,
  `sort_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category_translation`
--

CREATE TABLE `category_translation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `core`
--

CREATE TABLE `core` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `core`
--

INSERT INTO `core` (`id`, `name`, `content`, `content_type`, `description`) VALUES
(1, 'meta-description', ' «1SHOP.am»-ը օնլայն գյուղմթերք պատվիրելու հարթակ է, որը սպառողներին է հասցնում հայ գյուղացու աշխատանքի պտուղները։ Սպառողներին հասանելի է դարձել 2020 թվականի փետրվար ամսից։ Այսօր գյուղացին խնդիր ունի իր արտադրանքը սպառելու, իսկ քաղաքաբնակը կամ պարզապես սպառողը որակյալ, մատչելի գյուղմթերքի։', 'text', '&lt;p&gt;website description&lt;/p&gt;\r\n'),
(2, 'meta-keywords', 'natural, natural eco, food, 1shop, 1, gyuxmterq, gyuxamterq, snund, oneshop', 'text', '&lt;p&gt;website keywords&lt;/p&gt;\r\n'),
(3, 'logo-image', '21', 'image', '&lt;p&gt;website logo image&lt;/p&gt;\r\n'),
(4, 'footer-logo', '21', 'image', '&lt;p&gt;website logo image&lt;/p&gt;\r\n'),
(5, 'location', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.0886225623844!2d44.50680353402949!3d40.17076608056598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abc599f231193%3A0xe9ae0dc326754034!2sTigran%20Metz%20Publishing%20House!5e1!3m2!1sru!2s!4v1573449669035!5m2!1sru!2s', 'text', '&lt;p&gt;company location;/p&amp;gt;&lt;/p&gt;\r\n'),
(6, 'waterImage', '327', 'image', '&lt;p&gt;add image for watermark in added images which added in products album&lt;/p&gt;\r\n\r\n&lt;p&gt;Ավելացրեք նկար որը կերևա բոլոր ավելացված նկարների վրա որոնք ընկել են պրոդուկտների ալբոմի մեջ&lt;/p&gt;\r\n'),
(7, 'additionalDiscount', '', 'number', '&lt;p&gt;առաջին անգամ գնումներ կատարելուց հաճախորդին տրվող զեղջ (նշված տեսականու համար)&lt;/p&gt;\r\n'),
(8, 'deliveryPrice', '250', 'number', 'նշեք առաքման գումարը'),
(9, 'bonus', '5', 'number', 'bonus discount for every order checkout');

-- --------------------------------------------------------

--
-- Структура таблицы `core_menu`
--

CREATE TABLE `core_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `has_children` int(11) NOT NULL,
  `icon` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sort_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `core_menu`
--

INSERT INTO `core_menu` (`id`, `name`, `url`, `parent_id`, `has_children`, `icon`, `sort_id`) VALUES
(1, 'Dashboard', 'backend/', 0, 0, 'zmdi zmdi-view-dashboard', 1),
(2, 'Articles', 'backend/articles/', 0, 1, 'zmdi zmdi-labels', 2),
(3, 'Categories', 'backend/categories/', 0, 1, 'zmdi zmdi-format-list-numbered', 3),
(4, 'Content', 'backend/content/', 0, 1, 'zmdi zmdi-developer-board', 4),
(5, 'Orders', 'backend/orders/', 0, 1, 'zmdi zmdi-format-list-numbered', 5),
(6, 'Users', 'backend/users/', 0, 1, 'zmdi zmdi-accounts-list', 6),
(7, 'Blog', 'backend/blogs/', 0, 1, 'zmdi zmdi-label-heart', 7),
(8, 'Basic Settings', 'backend/settings/', 0, 1, 'zmdi zmdi-settings', 10),
(9, 'Mailbox', 'backend/mailbox/', 0, 0, 'zmdi zmdi-email', 8),
(10, 'Calendar', 'backend/calendar/', 0, 0, 'zmdi zmdi-calendar-check', 9),
(11, 'New Item', 'backend/articles/detail', 2, 0, 'zmdi zmdi-plus-circle-o', 1),
(12, 'Overview', 'backend/articles/', 2, 0, 'zmdi zmdi-view-agenda', 2),
(13, 'new Category', 'backend/categories/detail', 3, 0, 'zmdi zmdi-plus-circle-o', 1),
(14, 'Overview', 'backend/categories/', 3, 0, 'zmdi zmdi-view-agenda', 2),
(15, 'Special articles', 'backend/articles/specials', 2, 0, 'zmdi zmdi-ticket-star', 3),
(16, 'Gallery', 'backend/media/', 0, 0, 'zmdi zmdi-collection-image-o', 8),
(17, 'new Order', 'backend/orders/detail', 5, 0, 'zmdi zmdi-plus-circle-o', 0),
(18, 'Overview', 'backend/orders/', 5, 0, 'zmdi zmdi-view-agenda', 0),
(19, 'Overview', 'backend/users/', 6, 0, 'zmdi zmdi-view-agenda', 1),
(20, 'New User', 'backend/users/detail', 6, 0, 'zmdi zmdi-plus-circle-o', 0),
(21, 'Translations', 'backend/translations', 8, 0, 'zmdi zmdi-translate', 0),
(22, 'Emotions', 'backend/emotions', 4, 0, 'zmdi zmdi-developer-board', 0),
(23, 'new Blog', 'backend/blog/detail', 7, 0, 'zmdi zmdi-plus-circle-o', 0),
(24, 'Overview', 'backend/blog/', 7, 0, 'zmdi zmdi-view-agenda', 0),
(29, 'Advertisings', 'backend/advertisings/', 4, 0, 'zmdi zmdi-view-dashboard', 2),
(30, 'Core', 'backend/core', 8, 0, 'zmdi zmdi-wrench', 1),
(31, 'Suppliers', 'backend/suppliers/', 2, 0, 'zmdi zmdi-view-agenda', 2),
(32, 'Languages', 'backend/languages', 8, 0, 'zmdi zmdi-translate', 1),
(33, 'Currencies', 'backend/currencies', 8, 0, 'zmdi zmdi-money', 1),
(34, 'Units', 'backend/units', 8, 0, 'zmdi zmdi-ruler', 1),
(35, 'Payments', 'backend/payments', 8, 0, 'zmdi zmdi-balance', 1),
(36, 'Reviews', 'backend/reviews/', 6, 0, 'zmdi zmdi-star', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `core_plugins`
--

CREATE TABLE `core_plugins` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `core_url`
--

CREATE TABLE `core_url` (
  `id` int(11) NOT NULL,
  `original_url` text COLLATE utf8_unicode_ci NOT NULL,
  `params` text COLLATE utf8_unicode_ci NOT NULL,
  `changed_url` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` int(1) NOT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` float NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `description`, `default`, `symbol`, `course`, `code`) VALUES
(1, 'Dram', '', 1, '֏', 1, 'AMD'),
(2, 'Rubly', '', 0, '₽', 6.73, 'RUB');

-- --------------------------------------------------------

--
-- Структура таблицы `delivery_city`
--

CREATE TABLE `delivery_city` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `region_id` int(11) NOT NULL,
  `distance` float NOT NULL COMMENT 'km',
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `delivery_city`
--

INSERT INTO `delivery_city` (`id`, `name`, `region_id`, `distance`, `price`) VALUES
(0, 'Երևան', 1, 0, 290),
(1, 'Արարատ', 3, 46, 9200),
(2, 'Արտաշատ', 3, 28, 5600),
(3, 'Մասիս', 3, 11, 2200),
(4, 'Վեդի', 3, 46, 9200),
(5, 'Էջմիածին', 4, 22, 4400),
(6, 'Արմավիր', 4, 47, 9400),
(7, 'Մեծամոր', 4, 43, 8600),
(8, 'Գյումրի', 8, 130, 26000),
(9, 'Մարալիկ', 8, 100, 20000),
(10, 'Ամասիա', 8, 160, 32000),
(11, 'Թալին', 2, 77, 15400),
(12, 'Արթիկ', 8, 110, 22000),
(13, 'Աշտարակ', 2, 30, 6000),
(14, 'Ապարան', 2, 63, 12600),
(15, 'Սպիտակ', 7, 100, 20000),
(16, 'Ստեփանավան', 7, 150, 30000),
(17, 'Ալավերդի', 7, 170, 34000),
(18, 'Վանաձոր', 7, 120, 24000),
(19, 'Տաշիր', 7, 160, 32000),
(20, 'Նոյեմբերյան', 10, 190, 38000),
(21, 'Բերդ', 10, 190, 38000),
(22, 'Իջևան', 10, 140, 28000),
(23, 'Դիլիջան', 10, 110, 22000),
(24, 'Սևան', 5, 71, 14200),
(25, 'Գավառ', 5, 100, 20000),
(26, 'Մարտունի', 5, 130, 26000),
(27, 'Վարդենիս', 5, 170, 34000),
(28, 'Հրազդան', 6, 55, 11000),
(29, 'Չարենցավան', 6, 42, 8400),
(30, 'Նոր Հաճն', 6, 29, 5800),
(31, 'Աբովյան', 6, 24, 4800),
(32, 'Եղվարդ', 6, 28, 5600),
(33, 'Եղեգնաձոր', 11, 120, 24000),
(34, 'Վայք', 11, 130, 26000),
(35, 'Ջերմուկ', 11, 170, 34000),
(36, 'Սիսիան', 9, 200, 40000),
(37, 'Գորիս', 9, 230, 46000),
(38, 'Կապան', 9, 300, 60000),
(39, 'Քաջարան', 9, 320, 64000),
(40, 'Մեղրի', 9, 370, 74000);

-- --------------------------------------------------------

--
-- Структура таблицы `delivery_status`
--

CREATE TABLE `delivery_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `delivery_status`
--

INSERT INTO `delivery_status` (`id`, `name`, `code`) VALUES
(1, 'Ընթացքի մեջ', 1),
(2, 'Առաքված', 2),
(3, 'Մերժված', 3),
(4, 'Ճանապարհին է', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `emotions`
--

CREATE TABLE `emotions` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `row_height` int(11) NOT NULL,
  `full_screen` int(11) NOT NULL,
  `class` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `sort_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `emotion_components`
--

CREATE TABLE `emotion_components` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `emotion_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `variables` text COLLATE utf8_unicode_ci NOT NULL,
  `col_xl` int(11) NOT NULL,
  `col_lg` int(11) NOT NULL,
  `col_md` int(11) NOT NULL,
  `col_sm` int(11) NOT NULL,
  `col_xs` int(11) NOT NULL,
  `cols` int(11) NOT NULL,
  `rows` int(11) NOT NULL,
  `sort_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `emotion_types`
--

CREATE TABLE `emotion_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` text COLLATE utf8_unicode_ci NOT NULL,
  `template` text COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `emotion_types`
--

INSERT INTO `emotion_types` (`id`, `name`, `label`, `template`, `module`) VALUES
(1, 'slider', 'slider', 'emotions/components/slider.tpl', 'advertisings'),
(2, 'service', 'service', 'emotions/components/service.tpl', 'advertisings'),
(3, 'category_teaser', 'category teaser', 'emotions/components/category_teaser.tpl', 'categories'),
(4, 'banner', 'banner', 'emotions/components/banner.tpl', 'advertisings'),
(5, 'article_slider', 'article slider', 'emotions/components/article_slider.tpl', 'articles'),
(6, 'single_article', 'single article', 'emotions/components/single_article.tpl', 'articles'),
(7, 'article_group', 'article group', 'emotions/components/article_group.tpl', 'articles'),
(8, 'blog_slider', 'blog slider', 'emotions/components/blog_slider.tpl', 'blog'),
(9, 'text', 'text/html', 'emotions/components/text.tpl', '');

-- --------------------------------------------------------

--
-- Структура таблицы `filter_groups`
--

CREATE TABLE `filter_groups` (
  `id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `filter_groups`
--

INSERT INTO `filter_groups` (`id`, `option_id`, `active`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 5, 0),
(4, 4, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `filter_sortings`
--

CREATE TABLE `filter_sortings` (
  `id` int(11) NOT NULL,
  `selector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sorting_table` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sorting_column` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `filter_sortings`
--

INSERT INTO `filter_sortings` (`id`, `selector`, `sorting_table`, `sorting_column`, `type`) VALUES
(1, 'default', 'articles', 'id', 'ASC'),
(2, 'name_asc', 'articles', 'name', 'ASC'),
(3, 'name_desc', 'articles', 'name', 'DESC'),
(4, 'price_asc', 'articles', 'price', 'ASC'),
(5, 'price_desc', 'articles', 'price', 'DESC'),
(6, 'sales_sort', 'articles', 'discount', 'DESC'),
(7, 'sale_end', 'article_attributes', 'sale_end', 'DESC');

-- --------------------------------------------------------

--
-- Структура таблицы `filter_tables`
--

CREATE TABLE `filter_tables` (
  `id` int(11) NOT NULL,
  `selector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filter_table` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filter_column` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `filter_tables`
--

INSERT INTO `filter_tables` (`id`, `selector`, `filter_table`, `filter_column`) VALUES
(1, 'suppliers', 'suppliers', 'id'),
(2, 'options', 'article_options_relations', 'value_id'),
(3, 'price', 'articles', 'price'),
(4, 'category', 'categories', 'id'),
(5, 'search', 'articles', 'name'),
(6, 'search', 'articles', 'keywords'),
(7, 'search', 'articles', 'description'),
(8, 'search', 'article_attributes', 'ordernumber'),
(9, 'search', 'article_translations', 'name'),
(10, 'search', 'article_translations', 'description'),
(11, 'search', 'article_option_values', 'value'),
(12, 'search', 'categories', 'name'),
(13, 'search', 'category_translation', 'name');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `name`, `short_code`, `is_default`) VALUES
(1, 'Հայերեն', 'AM', 1),
(2, 'Русский', 'RU', 0),
(3, 'English', 'EN', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `album` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `media_albums`
--

CREATE TABLE `media_albums` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posiotion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `media_thumbnails`
--

CREATE TABLE `media_thumbnails` (
  `id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `thumb_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_extension` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `count_product` int(11) NOT NULL,
  `product_total` float NOT NULL,
  `delivery_price` float NOT NULL,
  `bonus_price` float NOT NULL,
  `total_price` float NOT NULL,
  `payment_method` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `delivery_status` int(11) NOT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `price` int(11) NOT NULL,
  `total` float NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` int(11) NOT NULL,
  `weight` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`id`, `name`, `code`) VALUES
(1, 'Ընթացքի մեջ', 1),
(2, 'Հաստատված', 0),
(3, 'Մերժված', 3),
(4, 'Առկա է Սխալ', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_secret_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `description`, `client_id`, `client_secret_key`, `client_password`) VALUES
(1, 'Cash', '&lt;p&gt;asfsafasfsafasfasfasfasfasfa&lt;/p&gt;\r\n', '', '', ''),
(2, 'Idram', '', '110000193', 'r5m6GRKF7cfMb3YC7PwKRpynNatKM7HPJBtSGZ', ''),
(4, 'WebX', '&lt;p&gt;PayX ենթակառուցվածքում առցանց առևտր WEBX ծրագրային միջոց&lt;/p&gt;\r\n', '683', '2e23783e2de19e8671eca4232e1a609b', '');

-- --------------------------------------------------------

--
-- Структура таблицы `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variables` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `templates`
--

INSERT INTO `templates` (`id`, `name`, `variables`, `media_id`, `description`) VALUES
(1, 'email_confirmation', 'token;useremail;facebooklink;instagramlink', 21, 'email confirmation template'),
(2, 'invoice', 'invoice', 21, 'invoice');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(11) NOT NULL,
  `selector` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translate` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `selector`, `translate`, `lang`, `description`) VALUES
(1, 'aboutUs', 'ՄԵՐ ՄԱՍԻՆ \r\n', 1, ''),
(2, 'link', 'Հղումներ', 1, ''),
(3, 'contact', 'Հետադարձ կապ', 1, ''),
(4, 'visitUs', 'Այցելեք մեզ', 1, ''),
(5, 'allRights', '© 2019. Բոլոր իրավունքները պաշտպանված են։', 1, ''),
(6, 'allRights2', '․', 1, ''),
(10, 'workDays', 'Աշխատանքային օրեր', 1, ''),
(11, 'address', 'office address: &lt;br&gt; 59 Komitas Ave. Yerevan, RA  \r\n&lt;br&gt;\r\n&lt;br&gt;\r\nlogistics center address:\r\n&lt;br&gt; 10 Hakob Hakobyan Ave. Yerevan\r\n&lt;br&gt;\r\n&lt;br&gt; Սպանդանոցի հասցեն՝ գ. Պռոշյան Գայի 9/1', 1, ''),
(12, 'weekDays', 'Երկուշաբթիից - Ուրբաթ', 1, ''),
(13, 'saturday', 'Շաբաթ', 1, ''),
(14, 'sunday', 'Կիրակի', 1, ''),
(15, 'weekEnd', 'Ոչ աշխատանքային', 1, ''),
(18, 'address2', 'Հասցե:', 1, ''),
(19, 'contactPhone', 'Կոնտակտային համար', 1, ''),
(20, 'phone', 'Հեռ․', 1, ''),
(21, 'emailAddress', 'info@natural.am', 1, ''),
(22, 'email', 'Էլ. հասցե ', 1, ''),
(23, 'follow', 'Հետևեք մեզ', 1, ''),
(24, 'sendMessage', 'ՈՒՂԱՐԿԵԼ ՀԱՂՈՐԴԱԳՐՈՒԹՅՈՒՆ', 1, ''),
(25, 'contactUs', 'Կապ մեզ հետ', 1, ''),
(26, 'yourname', 'Անունը', 1, ''),
(27, 'youremail', 'Ձեր էլ-հասցեն', 1, ''),
(28, 'yoursubject', 'Թեմա', 1, ''),
(29, 'yourmessage', 'Ձեր նամակը', 1, ''),
(30, 'send', 'Ուղարկել', 1, ''),
(31, 'successMessage', 'Ձեր հաղորդագրությունը հաջողությամբ ուղարկվել է։', 1, ''),
(32, 'error_name', 'Լրացրեք Ձեր անունը', 1, ''),
(33, 'all', 'Բոլորը', 1, ''),
(34, 'ourWorks', 'Մեր աշխատանքները', 1, ''),
(35, 'welcome', 'Բարի գալուստ', 1, ''),
(36, 'weareoffer', '', 1, ''),
(37, 'consultation', 'ԱՆՎՃԱՐ ԽՈՐՀՐԴԱՏՎՈՒԹՅՈՒՆ', 1, ''),
(38, 'howWeWork', 'ԻՆՉՊԵՍ ԵՆՔ ՄԵՆՔ ԱՇԽԱՏՈՒՄ', 1, ''),
(39, 'workingProcess', 'Աշխատանքային գործընթացը', 1, ''),
(40, 'ourServices', 'Ծառայություններ', 1, ''),
(41, 'weBuild', 'Ստեղծիր քոնը', 1, ''),
(42, 'lastWorks', 'ՄԵՐ ՎԵՐՋԻՆ ՆԱԽԱԳԾԵՐԸ', 1, ''),
(43, 'about', 'կայքի մասին  ինֆորմացիա', 1, ''),
(44, 'more', 'Ավելին', 1, ''),
(45, 'phoneNumber', '077234566', 1, ''),
(46, 'phoneNumber2', '', 1, ''),
(47, 'aboutshort', '«1Shop.am»-ը օնլայն գյուղմթերք պատվիրելու հարթակ է, որը սպառողներին է հասցնում հայ գյուղացու աշխատանքի պտուղները։ \r\nNatural.am-ը վերահսկվում է «Սննդամթերքի անվտանգության պետական ծառայություն»-ի կողմից', 1, ''),
(48, 'ourClients', 'Մեր հաճախորդները', 1, ''),
(49, 'greatClients', 'Լավագույն հաճախորդները', 1, ''),
(50, 'aboutUs', ' О нас', 2, ''),
(51, 'link', 'Ссылки', 2, ''),
(52, 'contact', 'Связаться с нами', 2, ''),
(53, 'visitUs', 'Приходите к нам', 2, ''),
(54, 'allRights', '© 2019. Все права защищены. ', 2, ''),
(55, 'allRights2', '․', 2, ''),
(56, 'workDays', 'Рабочие дни', 2, ''),
(57, 'address', 'Адрес офиса: пр. Комитаса 59&lt;br&gt;\r\nЛогистический центр Адрес: Акоп Акопян 10&lt;br&gt;\r\nАдрес скотобойни: с. Прошьяна', 2, ''),
(58, 'weekDays', 'от Понидельника > до Пятницы', 2, ''),
(59, 'saturday', 'Суббота', 2, ''),
(60, 'sunday', 'Воскресенье', 2, ''),
(61, 'weekEnd', 'Не работаем', 2, ''),
(62, 'address2', 'Адрес', 2, ''),
(63, 'contactPhone', 'Контактный номер', 2, ''),
(64, 'phone', 'Тел․', 2, ''),
(65, 'emailAddress', 'info@natural.am', 2, ''),
(66, 'email', 'Е-меил', 2, ''),
(67, 'follow', 'Подписаться', 2, ''),
(68, 'sendMessage', 'ОТПРАВИТЬ СООБЩЕНИЕ', 2, ''),
(69, 'contactUs', 'Связаться с нами\r\n', 2, ''),
(70, 'yourname', 'Имя', 2, ''),
(71, 'youremail', 'Ваша эл-почта ', 2, ''),
(72, 'yoursubject', 'Тема', 2, ''),
(73, 'yourmessage', 'Ваше письмо', 2, ''),
(74, 'send', 'Отправить', 2, ''),
(75, 'successMessage', 'Ваше сообщение было успешно отправлено!', 2, ''),
(76, 'error_name', 'Введите Ваше Имя', 2, ''),
(77, 'all', 'Все', 2, ''),
(78, 'ourWorks', 'Наши работы', 2, ''),
(79, 'welcome', 'Добро Пожаловать', 2, ''),
(80, 'weareoffer', '', 2, ''),
(81, 'consultation', 'БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ', 2, ''),
(82, 'howWeWork', 'КАК МЫ РАБОТАЕМ', 2, ''),
(83, 'workingProcess', 'Процесс работы', 2, ''),
(84, 'ourServices', 'Услуги', 2, ''),
(85, 'weBuild', 'Создай свой', 2, ''),
(86, 'lastWorks', 'НАШИ ПОСЛЕДНИЕ ПРОЕКТЫ\r\n', 2, ''),
(87, 'about', 'информация о сайте', 2, ''),
(88, 'more', 'Больше', 2, ''),
(89, 'phoneNumber', '0 8000 4000', 2, ''),
(90, 'phoneNumber2', '', 2, ''),
(91, 'aboutshort', '1Shop.am теперь предлагает покупателю доступную и качественную сельскохозяйственную продукцию, помогая фермерам развивать сельское хозяйство', 2, ''),
(92, 'ourClients', 'Наши клиенты:', 2, ''),
(93, 'greatClients', 'Лучшие клиенты', 2, ''),
(113, 'home', 'Գլխավոր', 1, ''),
(114, 'home', 'Главная', 2, ''),
(115, 'city', 'Քաղաք', 1, ''),
(116, 'city', 'Քաղաք', 2, ''),
(117, 'newsdesc', 'Գրեք Ձեր էլ․ փոստը և ստացեք նորություններն առաջինը', 1, ''),
(118, 'newsdesc', 'Новости', 2, ''),
(119, 'search', 'Որոնել', 1, ''),
(120, 'search', 'Поиск', 2, ''),
(121, 'special', 'Հատուկ', 1, ''),
(122, 'special', 'Специально', 2, ''),
(123, 'weeklyNews', 'Շաբաթվա Լուրեր', 1, ''),
(124, 'weeklyNews', 'Новостьи недели', 2, ''),
(125, 'worldAround', 'Աշխարհի շուրջ', 1, ''),
(126, 'worldAround', 'Вокруг света', 2, ''),
(127, 'videonews', 'Վիդեո Նորություններ', 1, ''),
(128, 'videonews', 'Видео Новостьи', 2, ''),
(129, 'popular', 'Պոպուլյար', 1, ''),
(130, 'popular', 'Популярные', 2, ''),
(131, 'about1', 'Ինֆո', 1, ''),
(132, 'about1', 'Инфо', 2, ''),
(133, 'about2', 'Ինֆո', 1, ''),
(134, 'about2', 'Инфо', 2, ''),
(135, 'about3', 'Ինֆո', 1, ''),
(136, 'about3', 'Инфо', 2, ''),
(137, 'share', 'Կիսվել', 1, ''),
(138, 'share', 'Կիսվել', 2, ''),
(139, 'location', 'Տեղակայումը', 1, ''),
(140, 'location', 'Локация', 2, ''),
(141, 'contactpageabout', 'Մենք աշխատում ենք, որպեսզի դուք Ձեզ զգաք հարմարավետ։ &lt;br&gt;Դիմեք մեզ և մեր աշխատակիցները շատ կարճ ժամանակահատվածում կկապնվեն Ձեր հետ։', 1, ''),
(142, 'contactpageabout', 'Мы работаем, чтобы вы чувствовали себя комфортно. &lt;br&gt; Свяжитесь с нами, и наши сотрудники свяжутся с вами в ближайшее время.', 2, ''),
(143, 'yourlastname', 'Ազգանուն', 1, ''),
(144, 'yourlastname', 'Фамилия', 2, ''),
(145, 'cash', 'Կանխիկ', 1, ''),
(146, 'cash', 'Наличными', 2, ''),
(147, 'benefits', 'Առավելություններ', 1, ''),
(148, 'benefits', 'Преимущества', 2, ''),
(149, 'benefits', 'Benefits', 3, ''),
(150, 'calculate', 'Հաշվարկել', 1, ''),
(151, 'calculate', 'Рассчитать', 2, ''),
(152, 'calculate', 'Calculate', 3, ''),
(153, 'freeCalculation', '&lt;h5&gt;ՍՍՏԱՑԵՔ ԱՆՎՃԱՐ ՉԱՓԱԳՐՈՒՄ ՁԵՐ ՊՐՈԵԿՏԻ ՀԱՄԱՐ&lt;/h5&gt;\r\n&lt;p&gt;Ձեր էլ․հասցեին՝ 30ր ընթացքում&lt;/p&gt;', 1, ''),
(154, 'freeCalculation', '&lt;h5&gt;ПОЛУЧИТЕ БЕСПЛАТНЫЙ РАСЧЕТ ВАШЕГО ПРОЕКТА СЕГОДНЯ!&lt;/h5&gt;\r\n&lt;p&gt;На ваш электронный адрес за 30 минут!&lt;/p&gt;\r\n', 2, ''),
(155, 'freeCalculation', '&lt;h5&gt;GET FREE CALCULATION FOR YOUR PROJECT NOW&lt;/h5&gt;\r\n&lt;p&gt; To your email address in 30 minutes! &lt;/p&gt;', 3, ''),
(156, 'workHours', '11:00am-20:00pm', 1, ''),
(157, 'workHours', '11:00am-20:00pm', 2, ''),
(158, 'workHours', '11:00am-20:00pm', 3, ''),
(159, 'categories', 'ԿԱՏԵԳՈՐԻԱՆԵՐ', 1, ''),
(160, 'categories', 'КАТЕГОРИИ', 2, ''),
(161, 'categories', 'CATEGORIES', 3, ''),
(162, 'callUs', 'Զանգահարեք մեզ', 1, ''),
(163, 'callUs', 'Позвоните нам', 2, ''),
(164, 'callUs', 'Call us', 3, ''),
(165, 'products', 'ապրանքներ', 1, ''),
(166, 'products', 'продукты', 2, ''),
(167, 'products', 'products', 3, ''),
(168, 'backToCatalog', 'Վերադառնալ', 1, ''),
(169, 'backToCatalog', 'Назад', 2, ''),
(170, 'backToCatalog', 'Back to catalog', 3, ''),
(171, 'yourphone', 'Հեռախոսահամար', 1, ''),
(172, 'yourphone', 'Ձեր հեռախոսահամարը', 2, ''),
(173, 'yourphone', 'Your phone', 3, ''),
(174, 'about', 'Information about website', 3, ''),
(175, 'contactUs', 'Contact with us', 3, ''),
(176, 'contactPhone', 'Contact number', 3, ''),
(177, 'contact', 'Contact us', 3, ''),
(178, 'consultation', 'FREE CONSULTATION', 3, ''),
(179, 'email', 'e-mail', 3, ''),
(180, 'allRights2', '.', 3, ''),
(181, 'allRights', '© 2019. All rights reserved. ', 3, ''),
(182, 'color', 'Գույն ', 1, ''),
(183, 'color', 'Цвет', 2, ''),
(184, 'color', 'Color', 3, ''),
(185, 'ordernumber', 'Պատվերի կոդ', 1, ''),
(186, 'ordernumber', 'Код заказа', 2, ''),
(187, 'ordernumber', 'Order code', 3, ''),
(188, 'type', 'Տսակ', 1, ''),
(189, 'type', 'Категория', 2, ''),
(190, 'type', 'Category', 3, ''),
(191, 'weight', 'Քաշ', 1, ''),
(192, 'weight', 'քաշ', 2, ''),
(193, 'weight', 'weight', 3, ''),
(194, 'material', 'Նյութը', 1, ''),
(195, 'material', 'Материал', 2, ''),
(196, 'material', 'Material', 3, ''),
(197, 'home', 'Home', 3, ''),
(198, 'size', 'Չափսեր', 1, ''),
(199, 'size', 'Параметры', 2, ''),
(200, 'size', 'Parameters', 3, ''),
(201, 'price', 'Գին', 1, ''),
(202, 'price', 'Цена', 2, ''),
(203, 'price', 'Price', 3, ''),
(204, 'currency', 'դրամ', 1, ''),
(205, 'currency', 'руб.', 2, ''),
(206, 'currency', 'rub.', 3, ''),
(207, 'land', 'Երկիր', 1, ''),
(208, 'land', 'Страна', 2, ''),
(209, 'land', 'Country', 3, ''),
(210, 'toorder', 'Պատվիրել', 1, ''),
(211, 'toorder', 'Заказать', 2, ''),
(212, 'toorder', 'То оrder', 3, ''),
(213, 'aboutUs', 'About us', 3, ''),
(214, 'or', 'ԿԱՄ', 1, ''),
(215, 'or', 'ИЛИ', 2, ''),
(216, 'or', 'OR', 3, ''),
(217, 'area', '.', 1, ''),
(218, 'area', '.', 2, ''),
(219, 'area', '.', 3, ''),
(220, 'calculateOnLeftSide', 'ՁԵՐ ՊՐՈԵԿՏԻ ՀԱՇՎԱՐԿ', 1, ''),
(221, 'calculateOnLeftSide', 'РАСЧЕТ ВАШЕГО ПРОЕКТА', 2, ''),
(222, 'calculateOnLeftSide', 'CALCULATE FOR YOUR PROJECT', 3, ''),
(223, 'emailAddress', 'info@natural.am', 3, ''),
(224, 'ourServices', 'Services', 3, ''),
(225, 'sendNow', 'Դիմել հիմա', 1, ''),
(226, 'sendNow', 'Подать заявку', 2, ''),
(227, 'sendNow', 'Apply now', 3, ''),
(228, 'product', 'Ապրանքատեսակ', 1, ''),
(229, 'product', 'Продукт', 2, ''),
(230, 'product', 'Product', 3, ''),
(231, 'contact_subject', 'Հետադարձ կապ', 1, ''),
(232, 'contact_subject', 'Обратная связь', 2, ''),
(233, 'contact_subject', 'Connect us', 3, ''),
(234, 'order_subject', 'Պատվեր հաճախորդի կողմից', 1, ''),
(235, 'order_subject', 'Заказ клиента', 2, ''),
(236, 'order_subject', 'Order by customer', 3, ''),
(237, 'address', 'Office Address: 59 Komitas Ave.&lt;br&gt;\r\nLogistic Center Address: Hakob Hakobyan 10&lt;br&gt;\r\nSlaughterhouse address: c. Proshyan', 3, ''),
(238, 'phoneNumber', '0 8000 4000', 3, ''),
(239, 'phoneNumber2', '', 3, ''),
(243, 'phoneNumber', '+(374) 77 59 04 03', 4, ''),
(244, 'phoneNumber', '+(374) 77 59 04 03', 5, ''),
(245, 'address', 'ք․Երևան, Մաշտոցի փ․ 125 շենք', 4, ''),
(246, 'address', 'Երևան, Մաշտոցի փ․ 125 շենք', 5, ''),
(247, 'allRights', '© 2019. Все права защищены. ', 4, ''),
(248, 'allRights', '© 2019. All Rights reserved. ', 5, ''),
(249, 'contactUs', 'Կապ մեզ հետ', 4, ''),
(250, 'contactUs', 'Contact with us', 5, ''),
(251, 'contactpageabout', '', 5, ''),
(252, 'weekDays', 'от Понедельникa - до Пятницы', 4, ''),
(253, 'weekDays', '', 5, ''),
(254, 'delivery', 'Առաքման պայմաններ', 1, ''),
(255, 'delivery', 'Условия доставки', 2, ''),
(256, 'delivery', 'Delivery terms', 3, ''),
(257, 'specialoffer', 'Հատուկ Առաջարկ', 1, ''),
(258, 'specialoffer', 'Специальное Предложение', 2, ''),
(259, 'specialoffer', 'Special Offers', 3, ''),
(260, 'saleended', 'Զեղչերը կվեջանան', 1, ''),
(261, 'saleended', 'Продажа заканчивается', 2, ''),
(262, 'saleended', 'Sale ends', 3, ''),
(263, 'buy', 'Գնել', 1, ''),
(264, 'buy', 'Купить', 2, ''),
(265, 'buy', 'Buy', 3, ''),
(266, 'օurdata', 'Մեր տվյալները', 1, ''),
(267, 'օurdata', 'Наша информация', 2, ''),
(268, 'օurdata', 'Our information', 3, ''),
(269, 'newerProducts', 'Նոր Տեսականի', 1, ''),
(270, 'newerProducts', 'Новые Продукты', 2, ''),
(271, 'newerProducts', 'New Products', 3, ''),
(272, 'populararticles', 'Ամենապատվիրվածները', 1, ''),
(273, 'populararticles', 'Самые популярные', 2, ''),
(274, 'populararticles', 'Most Popular', 3, ''),
(275, 'payments', 'Վճարման համակարգեր', 1, ''),
(276, 'payments', 'Системы оплаты', 2, ''),
(277, 'payments', 'Payment Systems', 3, ''),
(278, 'sortby', 'Դասակարգել ըստ', 1, ''),
(279, 'sortby', 'Сортировка по', 2, ''),
(280, 'sortby', 'Sorting by', 3, ''),
(281, 'default_sort', 'Լռելյայն', 1, ''),
(282, 'default_sort', 'По умолчанию', 2, ''),
(283, 'default_sort', 'Default', 3, ''),
(284, 'sales_sort', 'զեղչերի', 1, ''),
(285, 'sales_sort', 'скидкам', 2, ''),
(286, 'sales_sort', 'sales', 3, ''),
(287, 'price_asc', 'ըստ գնաճի', 1, ''),
(288, 'price_asc', 'цена по возрастанию', 2, ''),
(289, 'price_asc', 'price asc', 3, ''),
(290, 'price_desc', 'ըստ գնի նվազման', 1, ''),
(291, 'price_desc', 'снижение цены', 2, ''),
(292, 'price_desc', 'price desc', 3, ''),
(293, 'name_asc', 'ըստ այբբենականի', 1, ''),
(294, 'name_asc', 'по алфавиту', 2, ''),
(295, 'name_asc', 'alphabetically', 3, ''),
(296, 'name_desc', 'ըստ այբբենականի հակառակ', 1, ''),
(297, 'name_desc', 'по алфавиту наоборот', 2, ''),
(298, 'name_desc', 'alphabetically desc', 3, ''),
(299, 'sale_end', 'ըստ զեղչի ժամկետի', 1, ''),
(300, 'sale_end', 'по окончанию скидки', 2, ''),
(301, 'sale_end', 'by sale time', 3, ''),
(302, 'interval', 'Միջակայք', 1, ''),
(303, 'interval', 'Диапазон', 2, ''),
(304, 'interval', 'Range', 3, ''),
(305, 'filter', 'Ֆիլտր', 1, ''),
(306, 'filter', 'Филтер', 2, ''),
(307, 'filter', 'Filter', 3, ''),
(308, 'login', 'Մուտք', 1, ''),
(309, 'login', 'Логин', 2, ''),
(310, 'login', 'Login', 3, ''),
(311, 'register', 'Գրանցվել', 1, ''),
(312, 'register', 'Регистрация', 2, ''),
(313, 'register', 'Registration', 3, ''),
(314, 'account', 'Անձնական էջ', 1, ''),
(315, 'account', 'Аккаунт', 2, ''),
(316, 'account', 'Account', 3, ''),
(317, 'wishlist', 'Ցանկալիներ', 1, ''),
(318, 'wishlist', 'Избранные', 2, ''),
(319, 'wishlist', 'Wishlist', 3, ''),
(320, 'productname', 'անուն', 1, ''),
(321, 'productname', 'название', 2, ''),
(322, 'productname', 'name', 3, ''),
(323, 'buynow', 'Գնել', 1, ''),
(324, 'buynow', 'Купить', 2, ''),
(325, 'buynow', 'Buy', 3, ''),
(326, 'delete', 'Ջնջել', 1, ''),
(327, 'delete', 'Удалить', 2, ''),
(328, 'delete', 'Delete', 3, ''),
(329, 'total', 'Ընդամենը', 1, ''),
(330, 'total', 'Всего', 2, ''),
(331, 'total', 'Total', 3, ''),
(332, 'deliveryprice', 'Առաքման գումար', 1, ''),
(333, 'deliveryprice', 'Цена доставки', 2, ''),
(334, 'deliveryprice', 'Delivery price', 3, ''),
(335, 'totalPrice', 'Վճարման ենթակա', 1, ''),
(336, 'totalPrice', 'Обшая сумма', 2, ''),
(337, 'totalPrice', 'Total amount', 3, ''),
(338, 'loginbutton', 'մուտք', 1, ''),
(339, 'loginbutton', 'логин', 2, ''),
(340, 'loginbutton', 'log in', 3, ''),
(341, 'loginRegister', 'Մուտք/Գրանցում', 1, ''),
(342, 'loginRegister', 'Логин/Регистрация', 2, ''),
(343, 'loginRegister', 'Login/Registration', 3, ''),
(344, 'password', 'գաղտնաբառ', 1, ''),
(345, 'password', 'пароль', 2, ''),
(346, 'password', 'password', 3, ''),
(347, 'repassword', 'կրկնել գաղտնաբառը', 1, ''),
(348, 'repassword', 'повторить пароль', 2, ''),
(349, 'repassword', 'repeat password', 3, ''),
(350, 'name', 'անուն', 1, ''),
(351, 'name', 'имя', 2, ''),
(352, 'name', 'name', 3, ''),
(353, 'lastname', 'ազգանուն', 1, ''),
(354, 'lastname', 'фамилия', 2, ''),
(355, 'lastname', 'lastname', 3, ''),
(356, 'remaindpassword', 'Մոռացել եմ գաղտնաբառս', 1, ''),
(357, 'remaindpassword', 'забил пароль', 2, ''),
(358, 'remaindpassword', 'forgot password', 3, ''),
(359, 'signinbutton', 'Գրանցվել', 1, ''),
(360, 'signinbutton', 'Регистрация', 2, ''),
(361, 'signinbutton', 'Registration', 3, ''),
(362, 'personalAccount', 'Անձնական էջ', 1, ''),
(363, 'personalAccount', 'Личная страница', 2, ''),
(364, 'personalAccount', 'Personal page', 3, ''),
(365, 'orders', 'Պատվերներ', 1, ''),
(366, 'orders', 'Заказы', 2, ''),
(367, 'orders', 'Orders', 3, ''),
(368, 'deliveryAddress', 'Առաքման հասցե', 1, ''),
(369, 'deliveryAddress', 'Адрес доставки', 2, ''),
(370, 'deliveryAddress', 'Delivery address', 3, ''),
(371, 'personalInfo', 'Անձնական տվյալներ', 1, ''),
(372, 'personalInfo', 'Личная информация', 2, ''),
(373, 'personalInfo', 'Personal information', 3, ''),
(374, 'newPassword', 'նոր գաղտնաբառ', 1, ''),
(375, 'newPassword', 'новый пароль', 2, ''),
(376, 'newPassword', 'new password', 3, ''),
(377, 'save', 'Պահպանել', 1, ''),
(378, 'save', 'Сохранить', 2, ''),
(379, 'save', 'Save', 3, ''),
(380, 'hello', 'Ողջույն', 1, ''),
(381, 'hello', 'Здравствуйте', 2, ''),
(382, 'hello', 'Hello', 3, ''),
(383, 'accountText', 'Քանի որ գրանցված հաճախորդ եք, Դուք հնարավորություն ունեք օգտվելու մի շարք առավելություններից․&lt;br&gt;\r\n1․ Տեսնել ձեր գնումների և պատվերների պատմությունը&lt;br&gt;\r\n2․ Կատարել գնումներ ապառիկով &lt;br&gt;\r\n3․ Հետևել խանութի թարմացումներին&lt;br&gt;\r\n4․ Իմանալ ձեր ներկայիս պատվերի ստատուսի մասին&lt;br&gt;\r\n', 1, ''),
(384, 'accountText', 'Будучи зарегистрированным клиентом в нашем интернет-магазине, у вас есть возможность воспользоваться рядом преимуществ:&lt;br&gt;\r\n1) Смотреть историю ваших покупок и заказов&lt;br&gt;\r\n2) Делать покупки в кредит&lt;br&gt;\r\n3) Следить за обновлениями магазина&lt;br&gt;\r\n4) Знать о вашем текущем статусе заказа&lt;br&gt;', 2, ''),
(385, 'accountText', 'Being a registered customer in our online store, you have the opportunity to take advantage of a number of advantages:&lt;br&gt;\r\n1) View your purchase and order history&lt;br&gt;\r\n2) Make purchases on credit&lt;br&gt;\r\n3) Follow store updates&lt;br&gt;\r\n4) Know about your current order status&lt;br&gt;', 3, ''),
(386, 'changePassword', 'Փոխել գաղտնաբառը', 1, ''),
(387, 'changePassword', 'Сменить пароль', 2, ''),
(388, 'changePassword', 'Change password', 3, ''),
(389, 'logout', 'դուրս գալ', 1, ''),
(390, 'logout', 'выйти', 2, ''),
(391, 'logout', 'logout', 3, ''),
(392, 'order', 'Պատվեր', 1, ''),
(393, 'order', 'Заказ', 2, ''),
(394, 'order', 'Order', 3, ''),
(395, 'orderdate', 'Պատվերի ամսաթիվ', 1, ''),
(396, 'orderdate', 'Дата заказа', 2, ''),
(397, 'orderdate', 'Order date', 3, ''),
(398, 'orderstatus', 'Պատվերի կարգավիճակ', 1, ''),
(399, 'orderstatus', 'Статус ордера', 2, ''),
(400, 'orderstatus', 'Order status', 3, ''),
(401, 'orderprice', 'Պատեվերի գինը', 1, ''),
(402, 'orderprice', 'Цена заказа', 2, ''),
(403, 'orderprice', 'Order price', 3, ''),
(404, 'basket', 'Զամբյուղ', 1, ''),
(405, 'basket', 'Корзина', 2, ''),
(406, 'basket', 'Basket', 3, ''),
(407, 'invoice', 'Ընդհանուր հաշիվ', 1, ''),
(408, 'invoice', 'Общий счет', 2, ''),
(409, 'invoice', 'Total', 3, ''),
(410, 'deliveryinfo', 'Առաքումը', 1, ''),
(411, 'deliveryinfo', 'Доставка', 2, ''),
(412, 'deliveryinfo', 'Delivery', 3, ''),
(413, 'payable', '290 դրամ', 1, ''),
(414, 'payable', 'Платный', 2, ''),
(415, 'payable', 'Payable', 3, ''),
(416, 'pay', 'Պատվիրել', 1, ''),
(417, 'pay', 'Платить', 2, ''),
(418, 'pay', 'Pay', 3, ''),
(419, 'payInfo', 'Վճարման մանրամասները\r\n', 1, ''),
(420, 'payInfo', 'Детали оплаты', 2, ''),
(421, 'payInfo', 'Payment details', 3, ''),
(422, 'region', 'մարզ', 1, ''),
(423, 'region', 'регион', 2, ''),
(424, 'region', 'region', 3, ''),
(425, 'city', 'Քաղաք', 1, ''),
(426, 'city', 'Քաղաք', 2, ''),
(427, 'city', 'Город', 3, ''),
(428, 'street', 'Փողոց', 1, ''),
(429, 'street', 'Улица', 2, ''),
(430, 'street', 'Street', 3, ''),
(431, 'postcardtext', 'Բացիկի տեքստ', 1, ''),
(432, 'postcardtext', 'Текст открытки', 2, ''),
(433, 'postcardtext', 'Postcart Text', 3, ''),
(434, 'checkout', 'Վճարում', 1, ''),
(435, 'checkout', 'Оплата', 2, ''),
(436, 'checkout', 'Checkout', 3, ''),
(437, 'ordernote', 'Նշումներ', 1, ''),
(438, 'ordernote', 'Заметки', 2, ''),
(439, 'ordernote', 'Notes', 3, ''),
(440, 'payinshipping', 'Վճարումը կանխիկ', 1, ''),
(441, 'payinshipping', 'Оплата наличными', 2, ''),
(442, 'payinshipping', 'Pay in cash', 3, ''),
(443, 'payinshippingaddress', 'Վճարել առաքման հասցեում', 1, ''),
(444, 'payinshippingaddress', 'Оплата на адресе доставки', 2, ''),
(445, 'payinshippingaddress', 'Pay in shipping address', 3, ''),
(446, 'paywithidram', 'Վճարել Idram-ով', 1, ''),
(447, 'paywithidram', 'Оплата по Idram', 2, ''),
(448, 'paywithidram', 'Pay with Idram', 3, ''),
(449, 'paywithicart', 'Վճարել քարտով', 1, ''),
(450, 'paywithicart', 'Оплата карточкой', 2, ''),
(451, 'paywithicart', 'Pay with card', 3, ''),
(452, 'readandagree', 'Կարդացել եմ և համաձայն եմ', 1, ''),
(453, 'readandagree', 'Прочитал и согласен', 2, ''),
(454, 'readandagree', 'Readed and agree', 3, ''),
(455, 'conditions', 'Պայմաններին', 1, ''),
(456, 'conditions', 'С условиями ', 2, ''),
(457, 'conditions', 'With conditions', 3, ''),
(458, 'paywith', 'Ինչպես վճարել', 1, ''),
(459, 'paywith', 'Оплата по', 2, ''),
(460, 'paywith', 'Pay with', 3, ''),
(461, 'quantity', 'Քանակ', 1, ''),
(462, 'quantity', 'Количество', 2, ''),
(463, 'quantity', 'Quantity', 3, ''),
(464, 'success_register', 'Դուք հաջողությամբ գրանցվել եք', 1, ''),
(465, 'success_register', 'Вы успешно зарегистрировались', 2, ''),
(466, 'success_register', 'You are successfully registered', 3, ''),
(467, 'error_password', 'Սխալ գաղտնաբառ', 1, ''),
(468, 'error_password', 'Неправильный пароль', 2, ''),
(469, 'error_password', 'Wrong password', 3, ''),
(470, 'error_falseData', 'Սխալ տվյալներ', 1, ''),
(471, 'error_falseData', 'Неправильные данные', 2, ''),
(472, 'error_falseData', 'Wrong data', 3, ''),
(473, 'error_exist', 'Էլ.հասցեն գրանցված է', 1, ''),
(474, 'error_exist', 'Е-меил уже зарегистрирован', 2, ''),
(475, 'error_exist', 'E-mail exist', 3, ''),
(476, 'error_emailnotexist', 'Էլ.հասցեն գրանցված չէ', 1, ''),
(477, 'error_emailnotexist', 'е-маил не зарегистрирован', 2, ''),
(478, 'error_emailnotexist', 'e-mail not registered', 3, ''),
(479, 'error_passwordnotmatch', 'Գաղտնաբառերը չեն համընկնում', 1, ''),
(480, 'error_passwordnotmatch', 'Пароли не совпадают', 2, ''),
(481, 'error_passwordnotmatch', 'Passwords not mutch', 3, ''),
(482, 'error_name', 'Լրացրեք Ձեր անունը', 1, ''),
(483, 'error_name', 'Введите Ваше Имя', 2, ''),
(484, 'error_name', 'Please enter Your name', 3, ''),
(485, 'error_lastname', 'դուք բաց եք թողել ազգանվան դաշտը', 1, ''),
(486, 'error_lastname', 'Вы пропустили поле фамилии', 2, ''),
(487, 'error_lastname', 'lastname field required', 3, ''),
(488, 'error_email', 'դուք բացեք թողել էլ.հասցեի դաշտը', 1, ''),
(489, 'error_email', 'вы пропустили поле е-маил', 2, ''),
(490, 'error_email', 'email required', 3, ''),
(491, 'about1', 'Info', 3, ''),
(492, 'about2', 'Info', 3, ''),
(493, 'about3', 'Info', 3, ''),
(494, 'aboutshort', '1Shop.am now offers the buyer affordable and high quality agricultural products, helping farmers to develop agriculture', 3, ''),
(495, 'address2', 'Address:', 3, ''),
(496, 'all', 'All', 3, ''),
(497, 'contactpageabout', 'We work to make you feel comfortable. &lt;br&gt; Contact us and our staff will contact you in a short time.', 3, ''),
(498, 'cash', 'Cash', 3, ''),
(499, 'follow', 'Follow us', 3, ''),
(500, 'greatClients', 'Best customers', 3, ''),
(501, 'howWeWork', 'HOW WE ARE WORKING', 3, ''),
(502, 'lastWorks', 'OUR LAST PROJECTS', 3, ''),
(503, 'link', 'Links', 3, ''),
(504, 'location', 'Location', 3, ''),
(505, 'more', 'More', 3, ''),
(506, 'newsdesc', 'News', 3, ''),
(507, 'ourClients', 'Our clients:', 3, ''),
(508, 'ourWorks', 'Our products', 3, ''),
(509, 'phone', 'Tel.', 3, ''),
(510, 'popular', 'Popular', 3, ''),
(511, 'saturday', 'Saturday', 3, ''),
(512, 'search', 'Search\r\n', 3, ''),
(513, 'send', 'Send', 3, ''),
(514, 'sendMessage', 'SEND MESSAGE', 3, ''),
(515, 'share', 'Կիսվել', 3, ''),
(516, 'special', 'Special', 3, ''),
(517, 'successMessage', 'Your message has been successfully sent!', 3, ''),
(518, 'sunday', 'Sunday', 3, ''),
(519, 'videonews', 'Video News', 3, ''),
(520, 'visitUs', 'Visit us', 3, ''),
(521, 'weBuild', 'Create your own', 3, ''),
(522, 'weekEnd', 'Non-working', 3, ''),
(523, 'weeklyNews', 'News of the Week', 3, ''),
(524, 'welcome', 'Welcome', 3, ''),
(525, 'workDays', 'Working Days', 3, ''),
(526, 'workingProcess', 'Working process', 3, ''),
(527, 'worldAround', 'Around the world', 3, ''),
(528, 'youremail', 'Your e-mail', 3, ''),
(529, 'yourlastname', 'Last name', 3, ''),
(530, 'yourmessage', 'Your message', 3, ''),
(531, 'yourname', 'Name', 3, ''),
(532, 'yoursubject', 'Subject', 3, ''),
(533, 'facebook', 'https://www.facebook.com/groupnatural/', 1, ''),
(534, 'facebook', 'https://www.facebook.com/groupnatural/', 2, ''),
(535, 'facebook', 'https://www.facebook.com/groupnatural/', 3, ''),
(536, 'instagram', 'https://www.instagram.com/natural.am/?hl=ru', 1, ''),
(537, 'instagram', 'https://www.instagram.com/natural.am/?hl=ru', 2, ''),
(538, 'instagram', 'https://www.instagram.com/natural.am/?hl=ru', 3, ''),
(539, 'similarProducts', 'Նմանատիպ ապրանքներ', 1, ''),
(540, 'similarProducts', 'Похожие', 2, ''),
(541, 'similarProducts', 'Similar Products', 3, ''),
(542, 'addtocart', 'Ավելացնել զամբյուղին', 1, ''),
(543, 'addtocart', 'Добавить в корзину', 2, ''),
(544, 'addtocart', 'Add to cart', 3, ''),
(545, 'productcode', 'ID', 1, ''),
(546, 'productcode', 'ID', 2, ''),
(547, 'productcode', 'ID', 3, ''),
(548, 'productcode', 'ID', 1, ''),
(549, 'productcode', 'ID', 2, ''),
(550, 'productcode', 'ID', 3, ''),
(551, 'cities', 'Քաղաքներ', 1, ''),
(552, 'cities', 'Города', 2, ''),
(553, 'cities', 'Cities', 3, ''),
(554, 'youmaypay', 'Դուք պատրաստվում եք անկանխիկ վճարում կատարել', 1, ''),
(555, 'youmaypay', 'Вы собираетесь сделать безналичные платежи', 2, ''),
(556, 'youmaypay', 'You are going to make a cashless payment', 3, ''),
(557, 'paysuccess', 'Ձեր պատվերը ընդունված է', 1, ''),
(558, 'paysuccess', 'Ваш заказ был принят', 2, ''),
(559, 'paysuccess', 'Your order has been accepted', 3, ''),
(560, 'payerror', 'Պատվերը ընդունված չէ։ Առկա է Սխալ։', 1, ''),
(561, 'payerror', 'Заказ не принят. Ошибка', 2, ''),
(562, 'payerror', 'Order not accepted. There is an Error.', 3, ''),
(563, 'ordertotal', 'Ընդամենը', 1, ''),
(564, 'ordertotal', 'Общая сумма', 2, ''),
(565, 'ordertotal', 'Total', 3, ''),
(566, 'hurryup', 'Շտապի՜ր', 1, ''),
(567, 'hurryup', 'Торопись!', 2, ''),
(568, 'hurryup', 'Hurry up!', 3, ''),
(569, 'wished', 'նախընտրել', 1, ''),
(570, 'wished', 'желанный ', 2, ''),
(571, 'wished', 'favorite', 3, ''),
(572, 'quickview', 'արագ դիտում', 1, ''),
(573, 'quickview', 'быстрый просмотр', 2, ''),
(574, 'quickview', 'quick view', 3, ''),
(575, 'catalog', 'ՏԵսականի', 1, ''),
(576, 'catalog', 'Каталог', 2, ''),
(577, 'catalog', 'Catalog', 3, ''),
(578, 'viewMore', 'Տեսնել ավելին', 1, ''),
(579, 'viewMore', 'Подробнее', 2, ''),
(580, 'viewMore', 'View more', 3, ''),
(581, 'saleProducts', 'Զեղչվածները', 1, ''),
(582, 'saleProducts', 'Распродажа', 2, ''),
(583, 'saleProducts', 'Sale Products', 3, ''),
(584, 'topProducts', 'Top Վաճառք', 1, ''),
(585, 'topProducts', 'Топ продажа', 2, ''),
(586, 'topProducts', 'Top sold', 3, ''),
(587, 'discountedProducts', 'Ակցիաներ', 1, ''),
(588, 'discountedProducts', 'Распродажа', 2, ''),
(589, 'discountedProducts', 'Sale Ends', 3, ''),
(590, 'topsale', 'Լավագույն վաճառք', 1, ''),
(591, 'topsale', 'Самые продаваемые', 2, ''),
(592, 'topsale', 'More Sold Products', 3, ''),
(593, 'ourContacts', 'Մեր տվյալները', 1, ''),
(594, 'ourContacts', 'Наши данные', 2, ''),
(595, 'ourContacts', 'Our Data', 3, ''),
(596, 'payDelTerms', 'Վճարման, առաքման պայմանները', 1, ''),
(597, 'payDelTerms', 'Условия оплаты, доставки', 2, ''),
(598, 'payDelTerms', 'Terms of payment, delivery', 3, ''),
(599, 'returnPolicy', 'Հետվերադարձի քաղաքականություն', 1, ''),
(600, 'returnPolicy', 'Политика Возвращения', 2, ''),
(601, 'returnPolicy', 'Return Policy', 3, ''),
(602, 'findus', 'Գտիր մեզ', 1, ''),
(603, 'findus', 'Найди нас', 2, ''),
(604, 'findus', 'Find us', 3, ''),
(605, 'countProducts', 'Ապրանքների քանակը՝ {$productCount}', 1, ''),
(606, 'countProducts', 'Количество продуктов {$productCount}', 2, ''),
(607, 'countProducts', 'Count of Products {$productCount}', 3, ''),
(608, 'filterByPrice', 'ֆիլտրել ըստ գնի', 1, ''),
(609, 'filterByPrice', 'Фильтровать по цене', 2, ''),
(610, 'filterByPrice', 'Filter by Price', 3, ''),
(611, 'brands', 'Բրենդներ', 1, ''),
(612, 'brands', 'Бренды', 2, ''),
(613, 'brands', 'Brands', 3, ''),
(614, 'filterBy_color', 'Ֆիլտրել ըստ գույնի', 1, ''),
(615, 'filterBy_color', 'Фильтровать по цвету', 2, ''),
(616, 'filterBy_color', 'Filter By Color', 3, ''),
(617, 'filterBy_size', 'Ֆիլտրել ըստ չափերի', 1, ''),
(618, 'filterBy_size', 'фильтровать по размеру', 2, ''),
(619, 'filterBy_size', 'Filter by size', 3, ''),
(620, 'unsorted', 'չտեսակավորված', 1, ''),
(621, 'unsorted', 'не сортированный', 2, ''),
(622, 'unsorted', 'unsorted', 3, ''),
(623, 'instock', 'Առկա', 1, ''),
(624, 'instock', 'В наличии', 2, ''),
(625, 'instock', 'in stock', 3, ''),
(626, 'description', 'ՆԿԱՐԱԳՐՈՒԹՅՈՒՆ', 1, ''),
(627, 'description', 'описание', 2, ''),
(628, 'description', 'description', 3, ''),
(629, 'characteristic', 'Բնութագիր', 1, ''),
(630, 'characteristic', 'Характеристика', 2, ''),
(631, 'characteristic', 'Characteristics', 3, ''),
(632, 'productdetail', 'Ապրանքի մանրամասները', 1, ''),
(633, 'productdetail', 'Детали Продкта', 2, ''),
(634, 'productdetail', 'Product Detail', 3, ''),
(635, 'to', '-ից', 1, ''),
(636, 'to', 'до', 2, ''),
(637, 'to', 'to', 3, ''),
(638, 'success_changed', 'տվյալները հաջողությամբ փոփոխված են', 1, ''),
(639, 'success_changed', 'данные успешно изменены', 2, ''),
(640, 'success_changed', 'data successfully set', 3, ''),
(641, 'warning_emptybasket', 'Ձեր զամբյուղը դատարկ է', 1, ''),
(642, 'warning_emptybasket', 'Ваша корзина пуста', 2, ''),
(643, 'warning_emptybasket', 'Your basket is empty', 3, ''),
(644, 'subscribeUs', 'Բաժանորդագրվեք մեզ', 1, ''),
(645, 'subscribeUs', 'Подпишитесь на нас', 2, ''),
(646, 'subscribeUs', 'Subscribe us', 3, ''),
(647, 'getNews', 'ԳՐԱՆՑՎԵՔ ՆՈՐՈՒԹՅՈՒՆՆԵՐԻ ՀԱՄԱՐ', 1, ''),
(648, 'getNews', 'получаете новости', 2, ''),
(649, 'getNews', 'get News', 3, ''),
(650, 'similarproducts', 'Նմանատիպ ապրանքներ', 1, ''),
(651, 'similarproducts', 'Похожие продукты', 2, ''),
(652, 'similarproducts', 'Similar Products', 3, ''),
(653, 'warning_emptywishlist', 'դուք չունեք նախընտրած ապրանքներ', 1, ''),
(654, 'warning_emptywishlist', 'у вас нет товаров в вашем списке желаний', 2, ''),
(655, 'warning_emptywishlist', 'you have no products in your wishlist', 3, ''),
(656, 'creditbuy', 'Ապառիկ', 1, ''),
(657, 'creditbuy', 'по кредиту', 2, ''),
(658, 'creditbuy', 'By credit', 3, ''),
(659, 'continue', 'Շարունակել', 1, ''),
(660, 'continue', 'Продолжить', 2, ''),
(661, 'continue', 'Continue', 3, ''),
(662, 'orderTotal', 'Արդյունքում', 1, ''),
(663, 'orderTotal', 'Отсчет Заказа', 2, ''),
(664, 'orderTotal', 'Order Report', 3, ''),
(665, 'youraddress', 'Ձեր հասցեն', 1, ''),
(666, 'youraddress', 'Ваш адрес', 2, ''),
(667, 'youraddress', 'Your address', 3, ''),
(668, 'submitorder', 'Հաստատել', 1, ''),
(669, 'submitorder', 'Подтвердить', 2, ''),
(670, 'submitorder', 'Submit order', 3, ''),
(671, 'prev', 'նախորդ', 1, ''),
(672, 'prev', 'предыдущий', 2, ''),
(673, 'prev', 'previous', 3, ''),
(674, 'success', 'ԸՆդունված է', 1, ''),
(675, 'success', 'Успех', 2, ''),
(676, 'success', 'Success', 3, ''),
(677, 'continueAsGuest', 'Շարունակել որպես հյուր', 1, ''),
(678, 'continueAsGuest', 'Продолжить как гость', 2, ''),
(679, 'continueAsGuest', 'Continue as guest', 3, ''),
(680, 'accounttext', 'Քանի որ գրանցված հաճախորդ եք, Դուք հնարավորություն ունեք օգտվելու մի շարք առավելություններից․&lt;br&gt;\r\n1․ Տեսնել ձեր գնումների և պատվերների պատմությունը&lt;br&gt;\r\n2․ Կատարել գնումներ ապառիկով &lt;br&gt;\r\n3․ Հետևել խանութի թարմացումներին&lt;br&gt;\r\n4․ Իմանալ ձեր ներկայիս պատվերի ստատուսի մասին&lt;br&gt;\r\n', 1, ''),
(681, 'accounttext', 'Будучи зарегистрированным клиентом в нашем интернет-магазине, у вас есть возможность воспользоваться рядом преимуществ:&lt;br&gt;\r\n1) Смотреть историю ваших покупок и заказов&lt;br&gt;\r\n2) Делать покупки в кредит&lt;br&gt;\r\n3) Следить за обновлениями магазина&lt;br&gt;\r\n4) Знать о вашем текущем статусе заказа&lt;br&gt;', 2, ''),
(682, 'accounttext', 'Being a registered customer in our online store, you have the opportunity to take advantage of a number of advantages:&lt;br&gt;\r\n1) View your purchase and order history&lt;br&gt;\r\n2) Make purchases on credit&lt;br&gt;\r\n3) Follow store updates&lt;br&gt;\r\n4) Know about your current order status&lt;br&gt;', 3, ''),
(683, 'youNotHaveOrder', 'Դուք չունեք պատվիրված ապրանքներ', 1, ''),
(684, 'youNotHaveOrder', 'Вы не имеете историю покупок', 2, ''),
(685, 'youNotHaveOrder', 'You not have any orders', 3, ''),
(686, 'orderWithCall', 'Պատվեր զանգով', 1, ''),
(687, 'orderWithCall', '', 2, ''),
(688, 'orderWithCall', '', 3, ''),
(689, 'basketMessage', 'ընտրված ապրանքը զամբյուղում է', 1, ''),
(690, 'basketMessage', 'выбранный товар в корзине', 2, ''),
(691, 'basketMessage', 'selected product in the basket', 3, ''),
(692, 'wishlistMessage', 'ապրանքը նախընտրելիների ցուցակում է', 1, ''),
(693, 'wishlistMessage', 'товар в списке предвыбранных', 2, ''),
(694, 'wishlistMessage', 'product in the wishlist', 3, ''),
(695, 'contactinfo', 'Շնորհակալություն մեր ծառայություններից օգտվելու համար ։ &lt;br&gt; Հարցերի կամ առաջարկների դեպքում գրեք մեզ։ &lt;br&gt; Սիրով կպատասխանենք ․․․', 1, ''),
(696, 'contactinfo', 'Спасибо за использование наших услуг. &lt;br&gt; Если у вас есть какие-либо вопросы или предложения, напишите нам. &lt;br&gt; Мы ответим с любовью!', 2, ''),
(697, 'contactinfo', 'Thank you for using our services. &lt;br&gt; If you have any questions or suggestions, write to us. &lt;br&gt; We Will Answer With Love!', 3, ''),
(698, 'section', 'Բաժիններ', 1, ''),
(699, 'section', 'Раздели', 2, ''),
(700, 'section', 'Sections', 3, ''),
(701, 'partners', 'Գործընկերներ', 1, ''),
(702, 'partners', 'Партнёры', 2, ''),
(703, 'partners', 'Partners', 3, ''),
(704, 'confirmyouremail', 'Խնդրում ենք հաստատել Ձեր էլ․ հասցեն \r\n                             \r\n', 1, ''),
(705, 'confirmyouremail', 'Пожалуйста, подтвердите ваш адрес электронной почты', 2, ''),
(706, 'confirmyouremail', 'Please confirm your email address', 3, ''),
(707, 'email_confirmation', 'Էլ փոստի հաստատում', 1, ''),
(708, 'email_confirmation', 'Подтверждения эл. почты', 2, ''),
(709, 'email_confirmation', 'E-mail confirmation', 3, ''),
(710, 'next', 'առաջ', 1, ''),
(711, 'next', 'вперёд', 2, ''),
(712, 'next', 'go', 3, ''),
(713, 'addToBasket', 'ավելացնել Զամբյուղին', 1, ''),
(714, 'addToBasket', 'добавить в корзину', 2, ''),
(715, 'addToBasket', 'add to basket', 3, ''),
(716, 'error_emailExist', 'Այս էլ․ հասցեն արդեն գրանցված է', 1, ''),
(717, 'error_emailExist', 'Этот ел. адрес уже зарегистрирован', 2, ''),
(718, 'error_emailExist', 'This email already registered', 3, ''),
(719, 'invalidPhoneNumber', 'սխալ Հեռախոսահամարը', 1, ''),
(720, 'invalidPhoneNumber', 'Неправильный номер телефона', 2, ''),
(721, 'invalidPhoneNumber', 'Invalid phone number', 3, ''),
(722, 'invalidCountryCode', 'երկրի սխալ կոդ', 1, ''),
(723, 'invalidCountryCode', 'неправильный код страны', 2, ''),
(724, 'invalidCountryCode', 'invalid country code', 3, ''),
(725, 'phoneIsShort', 'հեռախոսահամարը կարճ է', 1, ''),
(726, 'phoneIsShort', 'короткий номер телефона', 2, ''),
(727, 'phoneIsShort', 'phone number is short', 3, ''),
(728, 'phoneIsLong', 'հեռախոսահամարը երկար է', 1, ''),
(729, 'phoneIsLong', ' телефонный номер очень длинный', 2, ''),
(730, 'phoneIsLong', 'phone number is long', 3, ''),
(731, 'phoneUnknown', 'անհասկանալի հեռախոսահամար', 1, ''),
(732, 'phoneUnknown', 'непонятный телефонный номер', 2, ''),
(733, 'phoneUnknown', 'Unknown phone number', 3, ''),
(734, 'deliverystatus', 'Առաքման կարգավիճակ', 1, ''),
(735, 'deliverystatus', 'Статус доставки ', 2, ''),
(736, 'deliverystatus', 'Delivery status', 3, ''),
(737, 'author', 'հեղինակ', 1, ''),
(738, 'author', 'автор', 2, ''),
(739, 'author', 'author', 3, ''),
(740, 'necessaryProducts', 'Անհրաժեշտ ապրանքներ', 1, ''),
(741, 'necessaryProducts', 'Необходимые продукты', 2, ''),
(742, 'necessaryProducts', 'Necessary Products', 3, ''),
(743, 'searchby', 'Որոնել ըստ', 1, ''),
(744, 'searchby', 'Найти по', 2, ''),
(745, 'searchby', 'Search by', 3, ''),
(746, 'paywithipayx', 'Վճարել քարտով ', 1, ''),
(747, 'paywithipayx', 'Оплатить с системой оплаты PayX ', 2, ''),
(748, 'paywithipayx', 'Pay with PayX payment system', 3, ''),
(749, 'share', 'Կիսվել', 1, ''),
(750, 'share', 'Կիսվել', 2, ''),
(751, 'share', 'Կիսվել', 3, ''),
(752, 'ifquestions', 'հարցերի դեպքում', 1, NULL),
(753, 'ifquestions', 'если есть вопросы', 2, NULL),
(754, 'ifquestions', 'if questions', 3, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `units`
--

INSERT INTO `units` (`id`, `name`, `code`) VALUES
(1, 'լիտր', 'l'),
(2, 'կիլոգրամ', 'կգ'),
(3, 'հատ', ''),
(4, 'Տուփ', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specific_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest` int(1) NOT NULL DEFAULT 0,
  `confirmed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `default` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user_attributes`
--

CREATE TABLE `user_attributes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  `first_order` int(11) NOT NULL DEFAULT 1,
  `bonus` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user_confirmation`
--

CREATE TABLE `user_confirmation` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` int(1) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user_newsletter`
--

CREATE TABLE `user_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sended` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `advertisings`
--
ALTER TABLE `advertisings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `advertising_attributes`
--
ALTER TABLE `advertising_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `advertising_translations`
--
ALTER TABLE `advertising_translations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_attributes`
--
ALTER TABLE `article_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_options`
--
ALTER TABLE `article_options`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_options_relations`
--
ALTER TABLE `article_options_relations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_option_values`
--
ALTER TABLE `article_option_values`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_rating`
--
ALTER TABLE `article_rating`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_translations`
--
ALTER TABLE `article_translations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_wishlist`
--
ALTER TABLE `article_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_4` (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_translation`
--
ALTER TABLE `category_translation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `core_menu`
--
ALTER TABLE `core_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `core_plugins`
--
ALTER TABLE `core_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `core_url`
--
ALTER TABLE `core_url`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `delivery_city`
--
ALTER TABLE `delivery_city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `delivery_status`
--
ALTER TABLE `delivery_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `emotions`
--
ALTER TABLE `emotions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `emotion_components`
--
ALTER TABLE `emotion_components`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `emotion_types`
--
ALTER TABLE `emotion_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filter_groups`
--
ALTER TABLE `filter_groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filter_sortings`
--
ALTER TABLE `filter_sortings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filter_tables`
--
ALTER TABLE `filter_tables`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `media_albums`
--
ALTER TABLE `media_albums`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `media_thumbnails`
--
ALTER TABLE `media_thumbnails`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_attributes`
--
ALTER TABLE `user_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_confirmation`
--
ALTER TABLE `user_confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_newsletter`
--
ALTER TABLE `user_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `advertisings`
--
ALTER TABLE `advertisings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `advertising_attributes`
--
ALTER TABLE `advertising_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `advertising_translations`
--
ALTER TABLE `advertising_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_attributes`
--
ALTER TABLE `article_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_images`
--
ALTER TABLE `article_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_options`
--
ALTER TABLE `article_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_options_relations`
--
ALTER TABLE `article_options_relations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_option_values`
--
ALTER TABLE `article_option_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_rating`
--
ALTER TABLE `article_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_translations`
--
ALTER TABLE `article_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `article_wishlist`
--
ALTER TABLE `article_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `blog_articles`
--
ALTER TABLE `blog_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_translation`
--
ALTER TABLE `category_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `core`
--
ALTER TABLE `core`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `core_menu`
--
ALTER TABLE `core_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `core_plugins`
--
ALTER TABLE `core_plugins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `core_url`
--
ALTER TABLE `core_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `delivery_city`
--
ALTER TABLE `delivery_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `delivery_status`
--
ALTER TABLE `delivery_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `emotions`
--
ALTER TABLE `emotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `emotion_components`
--
ALTER TABLE `emotion_components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `emotion_types`
--
ALTER TABLE `emotion_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `filter_groups`
--
ALTER TABLE `filter_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `filter_sortings`
--
ALTER TABLE `filter_sortings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `filter_tables`
--
ALTER TABLE `filter_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `media_albums`
--
ALTER TABLE `media_albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `media_thumbnails`
--
ALTER TABLE `media_thumbnails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=755;

--
-- AUTO_INCREMENT для таблицы `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_attributes`
--
ALTER TABLE `user_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_confirmation`
--
ALTER TABLE `user_confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_newsletter`
--
ALTER TABLE `user_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
