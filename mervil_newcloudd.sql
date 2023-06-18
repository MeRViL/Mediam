-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 06 2022 г., 14:54
-- Версия сервера: 10.5.12-MariaDB
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mervil_newcloudd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `region_with_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_with_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_with_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_district_with_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_district_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_district_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settlement_with_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settlement_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settlement_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settlement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_with_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_type_full` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_box` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `typ` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CDBank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CDHeadBank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NrBank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BICStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NmBankShort` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdrBank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CdControl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DtControl` date NOT NULL,
  `CdBankSuccessor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DTBegin` date NOT NULL,
  `DtEnd` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smal_image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `big_image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_words` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT 0,
  `in_menu` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `position`, `name`, `slug`, `url`, `smal_image_id`, `big_image_id`, `description`, `key_words`, `public`, `in_menu`, `created_at`, `updated_at`, `parent_id`) VALUES
(1, 3, 'Музыка', 'music', '/music', 11, 12, 'Музыка', 'Музыка', 1, 1, '2022-08-17 06:08:55', '2022-09-06 08:10:02', NULL),
(2, 2, 'Лицензия', 'licence', '/licence', 16, 17, 'licence', 'licence', 1, 1, '2022-08-23 14:51:14', '2022-09-06 08:08:10', NULL),
(3, 4, 'Новости', 'news', 'news', 18, 19, 'news', 'news', 1, 1, '2022-08-23 14:55:59', '2022-08-23 16:54:54', NULL),
(4, 5, ' КОНТАКТЫ', 'contact', 'contact', 20, 21, 'contact', 'contact', 1, 1, '2022-08-23 14:57:03', '2022-08-23 16:54:31', NULL),
(5, 1, 'Главная', 'main', '/', NULL, NULL, 'main', 'main', 1, 1, '2022-08-23 15:13:15', '2022-08-23 16:51:59', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alfa2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alfa3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_short` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Cur_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_ParentID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Abbreviation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Name_Bel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Name_Eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_QuotName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_QuotName_Bel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_QuotName_Eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_NameMulti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Name_BelMulti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Name_EngMulti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Scale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_Periodicity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cur_DateStart` date NOT NULL,
  `Cur_DateEnd` date NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `name`, `slug`, `url`, `description`, `created_at`, `updated_at`) VALUES
(1, 'apple-touch-icon.png', 'apple-touch-iconpng', 'storage/setting/0QWt0Zl9jtPDSIqBrIzCKequ1S2g4nvoe2JxLBUr.png', 'Картинка favicon', '2022-08-16 15:10:33', '2022-08-16 15:10:33'),
(2, 'Muzfon.svg', 'muzfonsvg', 'storage/setting/PG8R9TNIfm5sRIeZytq4oguchHUyi1kAEfC222ep.svg', 'Картинка logo', '2022-08-16 15:10:33', '2022-08-16 15:10:33'),
(3, 'slider1.jpg', 'slider1jpg', 'sliders/7G41MCzJrOe7OMAKDJbQ9phfoUIw9lmWy7dSmumQ.jpg', 'Картинка слайдера', '2022-08-16 15:22:18', '2022-08-16 15:22:18'),
(4, 'slider1.jpg', 'slider1jpg', 'sliders/BhhmURvmpgrNpn6m2U0CcvNxVb8gaf7PIinN7K5J.jpg', 'Картинка слайдера', '2022-08-16 15:22:44', '2022-08-16 15:22:44'),
(5, 'slider1.jpg', 'slider1jpg', 'sliders/7vhoS0RTW47GqUaUxj0kjKAZiGJSWhPO9znsiDcm.jpg', 'Картинка слайдера', '2022-08-16 15:22:47', '2022-08-16 15:22:47'),
(6, 'slider1.jpg', 'slider1jpg', 'sliders/FeOdLpmmGPh5MQl61TVm7wKwEtwbjrF1BcWfe7nP.jpg', 'Картинка слайдера', '2022-08-16 15:22:52', '2022-08-16 15:22:52'),
(7, 'slider1.jpg', 'slider1jpg', 'sliders/Z1fV39r1Z5teXJy7YiFmG2x3hMryOtefvMgL645V.jpg', 'Картинка слайдера', '2022-08-16 15:23:18', '2022-08-16 15:23:18'),
(8, 'slider2.jpg', 'slider2jpg', 'sliders/FKuFCq2kYn1yKH7k8oMIK2237tBR8MH1RtSq0KcS.jpg', 'Картинка слайдера', '2022-08-17 05:38:13', '2022-08-17 05:38:13'),
(9, 'Uto1E1a05oUyj1ynrgjfpWkoSgn4q3VPMcU4psqI.jpg', 'uto1e1a05ouyj1ynrgjfpwkosgn4q3vpmcu4psqijpg', 'storage/category/nPIsYauc0IU50yUtJxGvEuonCPDKpnxef4MtbhJY.jpg', 'Картинка категорииsmal_image', '2022-08-17 06:08:48', '2022-08-17 06:08:48'),
(10, 'Uto1E1a05oUyj1ynrgjfpWkoSgn4q3VPMcU4psqI.jpg', 'uto1e1a05ouyj1ynrgjfpwkosgn4q3vpmcu4psqijpg', 'storage/category/H90uAoyCgH49BXEnymvQ5ZDbSR6m75iUk92GPas4.jpg', 'Картинка категорииbig_image', '2022-08-17 06:08:48', '2022-08-17 06:08:48'),
(11, 'Uto1E1a05oUyj1ynrgjfpWkoSgn4q3VPMcU4psqI.jpg', 'uto1e1a05ouyj1ynrgjfpwkosgn4q3vpmcu4psqijpg', 'storage/category/RA8LLboyfTNMScXblI0ub6oUbl3VZupK3ZPpqzbl.jpg', 'Картинка категорииsmal_image', '2022-08-17 06:08:55', '2022-08-17 06:08:55'),
(12, 'Uto1E1a05oUyj1ynrgjfpWkoSgn4q3VPMcU4psqI.jpg', 'uto1e1a05ouyj1ynrgjfpwkosgn4q3vpmcu4psqijpg', 'storage/category/SBlvnuHJjK6ZK8CI2h53Cjqn67WvojoxJcpvIrtm.jpg', 'Картинка категорииbig_image', '2022-08-17 06:08:55', '2022-08-17 06:08:55'),
(13, '0gKDDp47ut5S0Cuc2Be98aIygSRmrr3wfbIB17f8.jpg', '0gkddp47ut5s0cuc2be98aiygsrmrr3wfbib17f8jpg', 'storage/post/Xnl4oHEWL4tjTInIWa0UPqmRlly7SDwMlYSYiOlh.jpg', 'image', '2022-08-17 06:41:17', '2022-08-17 06:41:17'),
(14, 'slider21.jpg', 'slider21jpg', 'storage/post/H8bBOkfKqbXnAbxDyBcY4I585AHDI5wqDiDxUBPJ.jpg', 'image', '2022-08-17 06:43:00', '2022-08-17 07:04:07'),
(15, 'slider1.jpg', 'slider1jpg', 'storage/post/CM3neaVug0GaKGaXYAvdVSIUrRZ76WNhPGcT4xhE.jpg', 'image', '2022-08-23 14:40:03', '2022-08-23 14:41:25'),
(16, 'slider1.jpg', 'slider1jpg', 'storage/category/fTgaEky1QFFX2BInnzSsCgmXhSK0Y9pUL906YgC2.jpg', 'Картинка категорииsmal_image', '2022-08-23 14:51:14', '2022-08-23 14:51:14'),
(17, 'slider11.jpg', 'slider11jpg', 'storage/category/iSSMmXv8ocWO4HKe6wS9aaWWwZ2wmVn3cWgieX96.jpg', 'Картинка категорииbig_image', '2022-08-23 14:51:14', '2022-08-23 14:51:14'),
(18, 'slider1.jpg', 'slider1jpg', 'storage/category/ZMBdulJf2GnWXJkJTW0DusnQP5WhzvJM1EwLlm6h.jpg', 'Картинка категорииsmal_image', '2022-08-23 14:55:59', '2022-08-23 14:55:59'),
(19, 'slider11.jpg', 'slider11jpg', 'storage/category/bvpY7fFT4JJjASCRA99xRO1c4FTskAubj3Ecq5sZ.jpg', 'Картинка категорииbig_image', '2022-08-23 14:55:59', '2022-08-23 14:55:59'),
(20, 'slider3.jpg', 'slider3jpg', 'storage/category/y0IO7OBo04uIqfv5DsShAUMvAJTwHwKkEx6aHi5W.jpg', 'Картинка категорииsmal_image', '2022-08-23 14:57:03', '2022-08-23 14:57:03'),
(21, 'slider31.jpg', 'slider31jpg', 'storage/category/8S5eaH4kmrfZqJO6aXKCl71Qmq31dMduQrAAS7vr.jpg', 'Картинка категорииbig_image', '2022-08-23 14:57:03', '2022-08-23 14:57:03'),
(22, 'slider11.jpg', 'slider11jpg', 'storage/post/GkKCpZRSMHPqF8Vd9oTeHsrjM5PzYWxr73NtUWfb.jpg', 'image', '2022-08-23 17:19:50', '2022-08-23 17:19:50'),
(23, 'slider11.jpg', 'slider11jpg', 'storage/post/LrCoxFdhA33J62vkOq9Fx4qPyZeEoLza6iYXzVBp.jpg', 'image', '2022-08-23 17:19:58', '2022-08-23 17:19:58'),
(24, 'slider1.jpg', 'slider1jpg', 'storage/post/AAyDQx63TGwjlOMJRL6QzoOVyxQa8Fy5Pb0Z9mNh.jpg', 'image', '2022-08-23 17:21:32', '2022-08-23 17:21:32'),
(25, 'Акустический чилл.jpg', 'akusticeskii-cilljpg', 'storage/post/Ia2ZAhoA12A04lgnOQ1UsS17PtUsJgcrMkEWJ4xP.jpg', 'image', '2022-08-23 19:35:40', '2022-08-23 19:35:40'),
(26, 'Акустический чилл.mp3', 'akusticeskii-cillmp3', 'storage/post/l1XhA1fYKBShIzB6L017eNlqj28AhZt3nJRBoKkA.mp3', 'audio', '2022-08-23 19:35:40', '2022-08-23 19:41:52'),
(27, 'Модная.jpg', 'modnaiajpg', 'storage/post/fsW0AacNVr8tImnKPoLmntCQ3U7HaMAINrB4dlre.jpg', 'image', '2022-08-31 16:46:19', '2022-08-31 16:46:41'),
(28, 'Модная.mp3', 'modnaiamp3', 'storage/post/l5TW7BjHgPSLXVxX2upQemq7WjQQPnXOQWYj4Tl8.mp3', 'audio', '2022-08-31 16:46:19', '2022-08-31 16:46:41'),
(29, 'Динамичные ритмы.jpg', 'dinamicnye-ritmyjpg', 'storage/post/0fkNI5MPSN66ES6hKZDfuwVyXWRwBNeIkkrjCXBM.jpg', 'image', '2022-09-06 06:33:02', '2022-09-06 06:33:02'),
(30, 'Динамичные ритмы.mp3', 'dinamicnye-ritmymp3', 'storage/post/MeDHJkezVzj3DuoI1YmMUD9qtN2CSg4zzocWW7TC.mp3', 'audio', '2022-09-06 06:33:02', '2022-09-06 06:33:02');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_08_02_204513_create_sessions_table', 1),
(10, '2022_08_03_091111_create_roles_table', 1),
(11, '2022_08_03_091230_create_countries_table', 1),
(12, '2022_08_03_091318_create_people_table', 1),
(13, '2022_08_03_091534_create_addresses_table', 1),
(14, '2022_08_03_091617_create_passports_table', 1),
(15, '2022_08_03_092032_create_banks_table', 1),
(16, '2022_08_03_092245_create_currencies_table', 1),
(17, '2022_08_03_092341_create_wallets_table', 1),
(18, '2022_08_15_082553_create_files_table', 1),
(19, '2022_08_15_085347_create_categories_table', 1),
(20, '2022_08_15_113732_create_sliders_table', 1),
(21, '2022_08_15_113905_create_posts_table', 1),
(22, '2022_08_15_124422_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `passports`
--

CREATE TABLE `passports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issued_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patronymic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `audio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `public` tinyint(1) NOT NULL DEFAULT 0,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `image_id`, `audio_id`, `category_id`, `description`, `short_description`, `views`, `public`, `price`, `old_price`, `created_at`, `updated_at`) VALUES
(1, 'ЛИЦЕНЗИЯ MUZFON', 'licenziia-muzfon', 14, NULL, 2, '<blockquote>Что такое Лицензия на музыку?</blockquote><div>Лицензия на музыку - если очень кратко, то это разрешение правообладателя на воспроизведение его музыки. Мы ведём деятельность по заключению договоров с правообладателями музыкального контента и напрямую с авторами. Все наши авторы получают отчисления за каждое проигрывание трека.</div><blockquote>Зачем нужна Лицензия на музыку?</blockquote><div>Лицензия на музыку - это гарантия безопасности вашего бизнеса. Законное использование музыки убережёт вашу компанию от штрафных рисков и сэкономит время ваших юристов и маркетологов.</div><blockquote>Кому требуется Лицензия на фоновую музыку?</blockquote><div>Всем видам бизнеса, где музыка звучит фоном в общественных местах как при платном, так и бесплатном доступе посетителей.</div><div>Магазины, торговые центры, кафе, рестораны, АЗС, медицинские центры, автосалоны, банки, салоны красоты, спа.</div><blockquote>Каковы риски использования музыки без Лицензии?</blockquote><div>Если нарушение первое, то Предупреждение или штраф.</div><div>Если нарушение повторное - штраф, размер которого зависит от вида деятельности бизнеса.</div><blockquote>Что даёт Лицензия MUZFON?</blockquote><div>Экономию времени - вместо долгой работы по поиску и подбору музыки, заключению договоров со всеми её авторами, а потом ещё регулярные обновления музыкальной коллекции.</div><div>Наша Лицензия включает также Учёт звучания композиций и ежемесячную Отчётность – отчётность автоматизирована в онлайн-режиме.</div><div>Гарантию безопасности - все выплаты авторских вознаграждению включены в стоимость по Договору.</div><blockquote>Как получить Лицензию MUZFON?</blockquote><div>Заключить договор на услугу по выбранному тарифу.</div><div>Для начала сотрудничества отправьте нам Количество и Площади объектов для музыкального оформления.</div>', NULL, 0, 1, '0', '0', '2022-08-17 06:43:00', '2022-09-06 08:01:58'),
(2, 'Цены', 'price', 15, NULL, NULL, '<h4>Тариф зависит только от площади озвучивания вашего объекта.</h4>\n<p>Лицензия на музыку гарантирует законное использование фоновой музыки для бизнеса. Никаких скрытых или дополнительных платежей.</p>', NULL, 0, 0, '', NULL, '2022-08-23 14:41:25', '2022-08-23 14:44:24'),
(3, 'Уже готовим осеннее обновление музыкальной коллекции! /2022-07-13', 'uze-gotovim-osennee-obnovlenie-muzykalnoi-kollekcii-2022-07-13', 23, NULL, 3, '<p>К первому сентября традиционно обновляем плей-лист новыми музыкальными композициями.</p>', NULL, 0, 1, NULL, NULL, '2022-08-23 17:19:58', '2022-08-23 17:19:58'),
(4, 'О влиянии звуков и музыки', 'o-vliianii-zvukov-i-muzyki', 24, NULL, 3, '<p>33% покупателей заявили, что они задержались бы в магазине, чтобы дослушать песню, которая им особенно понравилась.</p>\n<p>28% покупателей говорят, что музыка замедляет их покупки.</p>\n<p>24% покупателей считают, что музыка заставляет их оставаться в супермаркете дольше.</p>\n<p>17% любят поп-музыку, 10% — рок, 9% — джаз/блюз, 6% — R&B/хип-хоп. Классическая музыка в винных магазинах провоцирует покупку более дорогих товаров.</p>', NULL, 0, 1, NULL, NULL, '2022-08-23 17:21:32', '2022-08-23 17:21:32'),
(5, 'Акустический чилл', 'akusticeskii-cill', 25, 26, 1, '<div>Акустический<strong> </strong>чилл</div>', NULL, 0, 1, NULL, NULL, '2022-08-23 19:35:40', '2022-09-06 06:30:28'),
(6, 'Динамичные ритмы', 'dinamicnye-ritmy', 29, 30, 1, '<div>Динамичные ритмы</div>', NULL, NULL, 1, NULL, NULL, '2022-09-06 06:33:02', '2022-09-06 06:33:02');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('IMCInDO21YzgFKhu7dZuQOPua1yLqTTeRQlTFWPg', 1, '178.124.217.226', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZEdxZ21ic25kc2xJdTZ3NkxQZ0xHYXZBTHdtUk9VUjFkS3pmQnhESCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwczovL25ldy5jbG91ZGRvYy5ieS9uZXdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRuendyR1pNbXJLZGxLTXluTzNVQkZPSml0VVlRRTdZcWtqVXIvU0d3TWR6Y1BESTBOOHUwMiI7fQ==', 1662462621);

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phones` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `google_api` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yandex_api` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recapcha_public` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recapcha_private` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `color1`, `color2`, `keywords`, `desc`, `favicon_id`, `address`, `entity_name`, `unp`, `phones`, `email`, `work_time`, `social`, `logo_id`, `google_api`, `yandex_api`, `recapcha_public`, `recapcha_private`, `created_at`, `updated_at`) VALUES
(1, 'МузФон', '#83A638', '#F2A30F', ' фоновая музыка для торгового центра, фоновая музыка для магазина,\n            аудиооформление, аудио оформление, аудиомаркетинг, аудио маркетинг, саунд дизайн помещений,\n            музыка для торговли, озвучить магазин, озвучить торговый центр, музыкальное сопровождение торговых центров,\n            музыкальное оформление магазина, озвучка магазина, радио для магазина, радио для торгового центра,\n            реклама в торговом центре, монетизация аудио-эфира, рекламный эфир, место размещения рекламы,\n            аудио эфир для вашей рекламы, аудио эфир без рекламы конкурентов, собственное радио, радио бренда,\n            брендировать радио, музыкальный фон магазина, музыкальный фон торгового центра,\n            голос для торгового центра,\n            торговые центры,\n            аудиоролики рекламные,\n            производство рекламных роликов, изготовление аудиороликов,\n            запись аудиоролика, запись голоса,\n            рекламный ролик +на радио,\n            производство радиорекламы', 'Фоновая музыка для бизнеса. Ваш рекламный эфир и Лицензия на музыку. Аудиомаркетинг. Фоновая музыка для Торгового центра. Фоновая музыка для Магазина.', 1, 'Республика Беларусь, г. Минск', 'Частное предприятие Медиа Меридиан', '192143652', '+375 29 388 05 98', 'info@muzfon.by', 'Мы работаем 7 дней в неделю без выходных.\n<br> <strong> Техническая поддержка: </strong> \n<br> 7 дней в неделю и праздники <span class=\"text-right\">7:00 - 23:00</span>\n<br> <strong>Офис:</strong>\n<br> Понедельник - Пятница: <span class=\"text-right\">10:00 - 18:00 </span>\n<br> Суббота: <span class=\"text-right\">11:00 - 15:00</span>\n<br> Воскресенье и праздники: <span class=\"text-right\">11:00 - 14:00</span>', 'info@muzfon.by,', 2, 'info@muzfon.by,', 'info@muzfon.by,', 'info@muzfon.by,', 'info@muzfon.by,', '2022-08-16 15:10:33', '2022-08-16 15:10:33');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `align` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `slug`, `url`, `align`, `image_id`, `description`, `action`, `public`, `created_at`, `updated_at`) VALUES
(1, 'Музыка для бизнеса', 'muzyka-dlia-biznesa', '/', 'center', 7, 'фон для ваших продаж', '/', 1, '2022-08-16 15:23:18', '2022-08-16 15:23:18'),
(2, 'Интеграция рекламы', 'integraciia-reklamy', '/', 'centre', 8, 'размещайте свою рекламу, а не конкурентов', '/', 1, '2022-08-17 05:38:13', '2022-08-17 05:38:13');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'MediaM', 1, '2022-08-16 15:10:10', '2022-08-27 07:57:38');

-- --------------------------------------------------------

--
-- Структура таблицы `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Евгений Слепченко', 'info@mediam.by', NULL, '$2y$10$nzwrGZMmrKdlKMynO3UBFOJitUYQE7YqkjUr/SGwMdzcPDI0N8u02', NULL, NULL, NULL, NULL, 1, NULL, '2022-08-16 15:10:10', '2022-08-16 15:10:10');

-- --------------------------------------------------------

--
-- Структура таблицы `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `bank_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_country_id_foreign` (`country_id`),
  ADD KEY `addresses_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_smal_image_id_foreign` (`smal_image_id`),
  ADD KEY `categories_big_image_id_foreign` (`big_image_id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currencies_country_id_foreign` (`country_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `passports_place_id_foreign` (`place_id`),
  ADD KEY `passports_person_id_foreign` (`person_id`),
  ADD KEY `passports_country_id_foreign` (`country_id`),
  ADD KEY `passports_address_id_foreign` (`address_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_image_id_foreign` (`image_id`),
  ADD KEY `posts_audio_id_foreign` (`audio_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_favicon_id_foreign` (`favicon_id`),
  ADD KEY `settings_logo_id_foreign` (`logo_id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_image_id_foreign` (`image_id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Индексы таблицы `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Индексы таблицы `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_currency_id_foreign` (`currency_id`),
  ADD KEY `wallets_bank_id_foreign` (`bank_id`),
  ADD KEY `wallets_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `passports`
--
ALTER TABLE `passports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
