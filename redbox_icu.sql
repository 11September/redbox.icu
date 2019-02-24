-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2019 г., 22:26
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `redbox.icu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(2, NULL, 1, 'Category 2', 'category-2', '2019-02-24 16:40:57', '2019-02-24 16:40:57');

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'locale', 'text', 'Locale', 0, 1, 1, 1, 1, 0, NULL, 12),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(22, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(23, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(24, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(25, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(26, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(27, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(28, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(29, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(30, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(31, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(32, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(33, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(34, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(35, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(36, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(37, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(38, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(39, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(40, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(41, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(42, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(43, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(44, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(45, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(46, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(47, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(48, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(49, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(50, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(51, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(52, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(53, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(54, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(55, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(56, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(57, 8, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(58, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\",\"messages\":{\"required\":\"This :attribute field is a must.\"}}}', 2),
(59, 8, 'short_description', 'text_area', 'Short Description', 1, 0, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\",\"messages\":{\"required\":\"This :attribute field is a must.\"}}}', 3),
(60, 8, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":null},\"quality\":\"60%\",\"upsize\":true}', 4),
(61, 8, 'about_project', 'rich_text_box', 'About Project', 0, 0, 1, 1, 1, 1, '{}', 5),
(62, 8, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 6),
(63, 8, 'category', 'select_dropdown', 'Category', 1, 1, 1, 1, 1, 1, '{\"default\":\"Landing Page\",\"options\":{\"Landing Page\":\"Landing Page\",\"Few Pages\":\"Few Pages\",\"Design\":\"Design\",\"Applications\":\"Applications\"}}', 7),
(64, 8, 'project_repo', 'text', 'Project Repo', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\",\"messages\":{\"required\":\"This :attribute field is a must.\"}}}', 8),
(65, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 9),
(66, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, NULL, '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(8, 'portfolios', 'portfolios', 'Portfolio', 'Portfolios', 'voyager-world', 'App\\Portfolio', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-02-24 16:48:32', '2019-02-24 16:49:47');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-02-24 16:40:55', '2019-02-24 16:40:55');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2019-02-24 16:40:55', '2019-02-24 16:40:55', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2019-02-24 16:40:55', '2019-02-24 16:40:55', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2019-02-24 16:40:57', '2019-02-24 16:40:57', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2019-02-24 16:40:57', '2019-02-24 16:40:57', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2019-02-24 16:40:57', '2019-02-24 16:40:57', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2019-02-24 16:40:57', '2019-02-24 16:40:57', 'voyager.hooks', NULL),
(15, 1, 'Portfolios', '', '_self', 'voyager-world', NULL, NULL, 15, '2019-02-24 16:48:32', '2019-02-24 16:48:32', 'voyager.portfolios.index', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2016_01_01_000000_create_pages_table', 2),
(24, '2016_01_01_000000_create_posts_table', 2),
(25, '2016_02_15_204651_create_categories_table', 2),
(26, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2019-02-24 16:40:57', '2019-02-24 16:40:57');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(2, 'browse_bread', NULL, '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(3, 'browse_database', NULL, '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(4, 'browse_media', NULL, '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(5, 'browse_compass', NULL, '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(6, 'browse_menus', 'menus', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(7, 'read_menus', 'menus', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(8, 'edit_menus', 'menus', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(9, 'add_menus', 'menus', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(10, 'delete_menus', 'menus', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(11, 'browse_roles', 'roles', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(12, 'read_roles', 'roles', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(13, 'edit_roles', 'roles', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(14, 'add_roles', 'roles', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(15, 'delete_roles', 'roles', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(16, 'browse_users', 'users', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(17, 'read_users', 'users', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(18, 'edit_users', 'users', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(19, 'add_users', 'users', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(20, 'delete_users', 'users', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(21, 'browse_settings', 'settings', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(22, 'read_settings', 'settings', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(23, 'edit_settings', 'settings', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(24, 'add_settings', 'settings', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(25, 'delete_settings', 'settings', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(26, 'browse_categories', 'categories', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(27, 'read_categories', 'categories', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(28, 'edit_categories', 'categories', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(29, 'add_categories', 'categories', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(30, 'delete_categories', 'categories', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(31, 'browse_posts', 'posts', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(32, 'read_posts', 'posts', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(33, 'edit_posts', 'posts', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(34, 'add_posts', 'posts', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(35, 'delete_posts', 'posts', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(36, 'browse_pages', 'pages', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(37, 'read_pages', 'pages', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(38, 'edit_pages', 'pages', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(39, 'add_pages', 'pages', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(40, 'delete_pages', 'pages', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(41, 'browse_hooks', NULL, '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(42, 'browse_portfolios', 'portfolios', '2019-02-24 16:48:32', '2019-02-24 16:48:32'),
(43, 'read_portfolios', 'portfolios', '2019-02-24 16:48:32', '2019-02-24 16:48:32'),
(44, 'edit_portfolios', 'portfolios', '2019-02-24 16:48:32', '2019-02-24 16:48:32'),
(45, 'add_portfolios', 'portfolios', '2019-02-24 16:48:32', '2019-02-24 16:48:32'),
(46, 'delete_portfolios', 'portfolios', '2019-02-24 16:48:32', '2019-02-24 16:48:32');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_project` text COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` enum('Landing Page','Few Pages','Design','Applications') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Landing Page',
  `project_repo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `short_description`, `image`, `about_project`, `link`, `category`, `project_repo`, `created_at`, `updated_at`) VALUES
(1, 'Elitecoffee', 'Grain coffee shop in Sumy with free delivery around the city, wholesale of coffee, sale and rent of coffee machines.', 'portfolios/April2018/bR4P3p5uuSJppU9ulst5.png', NULL, 'http://elitecoffee.in.ua/', 'Few Pages', 'https://github.com/', '2018-04-25 07:06:03', '2018-04-25 07:06:03'),
(2, 'Zastroyshik', 'Specialists in Ukraine\r\nChoose Between 2000 Professionals And 100 Kinds Of Services', 'portfolios/April2018/CVwzN1GNPj3iKVSpKSCl.png', NULL, 'http://zastroyshik.com/', 'Landing Page', 'https://github.com/', '2018-04-25 07:08:17', '2018-04-25 07:08:17'),
(3, 'Ammi', 'A wide range of children\'s products - from the crib to the stroller, a friendly atmosphere, qualified advice. Everything that will help to create a cozy baby and give young parents and newly-made grandparents the pleasure to choose the best for crumbs! The company \"AMMI\" has integrated 20 years of experience in the production of baby carriages TransBaby, the best family traditions, the ability to meet the wishes of customers. All this is for the sake of the chosen mission: to help raise a healthy generation of happy children.', 'portfolios/April2018/CCo7nSe4BDKFFUIyMlyS.png', NULL, 'http://www.ammi.com.ua/', 'Landing Page', 'https://github.com/', '2018-04-25 07:09:43', '2018-04-25 07:09:43'),
(4, 'Student-start', 'START is a company that provides a wide range of services that allow students studying in Ukraine, Belarus, Kazakhstan and Poland to acquire a unique opportunity to memorably and, most importantly, profitably spend their summer and winter vacations in a leading European country - Germany, gaining international experience in the service sector, while learning the language, get acquainted with the new culture and travel to Europe!', 'portfolios/April2018/5dCjzsDp3nTe9H0gggfd.png', NULL, 'http://student-start.com/', 'Landing Page', 'https://github.com/', '2018-04-25 07:10:45', '2018-04-25 07:10:45'),
(5, 'Timlange', 'Big Trucks\r\nCause\r\nBig Accidents\r\nTruck and Auto Injury Attorney', 'portfolios/April2018/DkixvOFQDMz1kz5jZsdx.png', NULL, 'http://www.timlange.com/', 'Landing Page', 'https://github.com/', '2018-04-25 07:11:51', '2018-04-25 07:11:51'),
(6, 'Orxagrid', 'Lower grid losses, higher satisfaction\r\nOrxa Grid smart sensors and predictive solutions reduce electric grid losses and increase efficiency', 'portfolios/April2018/cTjYClpRSIup2JVrVuRv.png', NULL, 'http://orxagrid.com/', 'Landing Page', 'https://github.com/', '2018-04-25 07:13:45', '2018-04-25 07:13:45'),
(7, 'Allingeorgia', 'Create your own adventure', 'portfolios/April2018/ZpIc2K5C7Vc1zi7kRXuw.png', NULL, 'http://allingeorgia.com/', 'Landing Page', 'https://github.com/', '2018-04-25 07:14:59', '2018-04-25 07:14:59'),
(8, 'metelyk-sadok', 'Kindergarten', 'portfolios/April2018/xLSoXsDQFZbeBNCrHzSr.png', NULL, 'http://159425-vds-uatech.office.gmhost.pp.ua/', 'Few Pages', 'https://github.com/', '2018-04-25 07:21:47', '2018-04-25 07:21:47'),
(9, 'Web2b', 'Website Development & Internet Marketing\r\nSystem Internet solutions for your business!', 'portfolios/April2018/hrSiR8CQcmGs2ZVJ3awQ.png', NULL, 'http://web2b.top/', 'Landing Page', 'https://github.com/', '2018-04-25 07:22:43', '2018-04-25 07:22:43'),
(10, 'Beerzha', 'Quality wine does a little better. Conversation - emotional, evening - more pleasant, dinner - tastier. And if you add music live - I will be unsurpassed. We are waiting for you every day in Beer', 'portfolios/April2018/Q1pvfrQQiZYYi7dITfUq.png', NULL, 'http://beerzha.com.ua/', 'Landing Page', 'https://github.com/', '2018-04-25 07:24:55', '2018-04-25 07:24:55'),
(11, 'Buyandsell', 'BUY&SELL is a classified platform created for buyers and sellers all over the world. With an easy-online builder, any seller is able to create their own storefront to sell their goods, while making use of the platform’s wide range of features for a minimal fee.', 'portfolios/April2018/i5aPwb1t6UbXSMLrvkh1.png', NULL, 'https://buyandsell.io/', 'Landing Page', 'https://github.com/', '2018-04-25 07:26:04', '2018-04-25 07:26:04'),
(12, 'Sunrise-touristic', 'PROFESSIONAL HELP\r\nIN THE FORM OF VISA\r\nWANT A VISA WITHOUT PROBLEMS, SUNRISE TOURISTIC HELPS ALL!', 'portfolios/April2018/JNo7zbRwFtZvrDrpNtGd.png', NULL, 'http://www.sunrise-touristic.com/', 'Landing Page', 'https://github.com/', '2018-04-25 07:28:10', '2018-04-25 07:31:30'),
(13, 'Video-age', 'The digital era has long knocked at the door of our company, which provides advanced technology to our customers. Tired of constantly fixing the shortcomings of non-professionals? Are you dissatisfied with the quality of the services you provided? The price does not match the quality? Forget about it. Below you can see all the advantages of our company, and providing services.', 'portfolios/April2018/f3vdHHYxNssaQZgNh9d0.png', NULL, 'http://video-age.com.ua/', 'Landing Page', 'https://github.com/', '2018-04-25 07:34:04', '2018-04-25 07:34:04'),
(14, 'Theoptimegroup', 'The Optimé Platform\r\nA suite of Big Data solutions solving the hardest workforce challenges', 'portfolios/April2018/cDD8d9f9xgaX1FJLTB6g.png', '<p><img src=\"http://localhost:8000/storage/portfolios/April2018/opttime1.jpg\" width=\"616\" height=\"2000\" /></p>', 'http://www.theoptimegroup.com/', 'Landing Page', 'https://github.com/', '2018-04-25 07:39:22', '2018-04-25 07:39:22'),
(15, 'Park-slavna', 'COTTAGE PARK \"SLAVNA\" IN S. CHERNETCHIN.\r\nRelax in the Sumy region!', 'portfolios/April2018/iLv97CTKJkvZRZYt0Prb.png', NULL, 'https://park-slavna.com.ua/', 'Landing Page', 'https://github.com/11September/slavna', '2018-04-25 07:43:01', '2018-04-25 07:43:01'),
(16, 'RDA', 'Department of Education\r\n\r\nSumy District State\r\nAdministration', 'portfolios/April2018/XzB5i4jYEORmGZbCsH6l.png', NULL, 'http://1230200.eventren.web.hosting-test.net/', 'Few Pages', 'https://github.com/11September/rda', '2018-04-25 07:45:15', '2018-04-25 07:45:15'),
(17, 'Icodevservice', 'ICO development', 'portfolios/April2018/j41SNesl4nkrRfGTViCb.png', NULL, 'http://icodevservice.com/', 'Landing Page', 'https://github.com/', '2018-04-25 07:47:23', '2018-04-25 07:47:23'),
(18, 'Djerelo.sumy', 'DELIVERY OF DRINKING WATER\r\nFor the first time in Sumy, innovative systems for pre-cleaning, softening and demineralization of water!', 'portfolios/April2018/9G93YIkswmhg9X141HJL.png', NULL, 'http://djerelo.sumy.ua/', 'Landing Page', 'https://github.com/', '2018-04-25 07:49:03', '2018-04-25 07:49:03'),
(19, 'Event-renessans', 'Organization of wedding ceremonies and banquets,\r\nprivate and corporate events,\r\nthematic holidays, promotions, etc.', 'portfolios/April2018/VlwTemnbpcEFlqA23d9S.png', NULL, 'http://event-renessans.com/', 'Landing Page', 'https://github.com/11September/felix', '2018-04-25 07:50:29', '2018-04-25 07:50:29'),
(20, '3d.sumdu', 'Ukrainian 3D printers, 3D printing and modeling at affordable prices', 'portfolios/April2018/4Z6eDN3ARquu7B97wiEr.png', NULL, 'http://3d.sumdu.edu.ua/', 'Landing Page', 'https://github.com/11September/3dLaboratorySumdu', '2018-04-25 07:52:59', '2018-04-25 07:52:59'),
(21, 'Spotz', 'To connect people with great local businesses', 'portfolios/April2018/CZrBNw0YiDuSiKkpeAVV.png', NULL, 'https://www.yelp.com/biz/spotz-charlotte', 'Landing Page', 'https://github.com/', '2018-04-25 07:55:34', '2018-04-25 07:55:34'),
(22, 'Map-shtab', 'В Україні запустилася антикорупційна мапа ремонтів у містах', 'portfolios/April2018/AmYBuf2W2mvCES2NV79i.png', '<h4 style=\"margin: 20px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: 24px; line-height: 1.25; font-family: ProximaNova; vertical-align: baseline; box-sizing: border-box; color: #000000;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: border-box;\">Як працює новий сервіс</span></h4>\r\n<p style=\"margin: 25px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.777; font-family: ProximaNova; vertical-align: baseline; box-sizing: border-box; color: #1d1d21;\">Антикорупційна мапа поки що працює для Києва та Одеси. Незабаром її запуск відбудеться ще для 15 українських міст. А до завершення весни 2018 року схема з ремонтами в населених пунктах має охоплювати всю країну. Сервіс має допомогти у виявленні зловживань на тендерах, строках чи обсягах ремонтних робіт в українських містах.</p>\r\n<h4 style=\"margin: 20px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: 24px; line-height: 1.25; font-family: ProximaNova; vertical-align: baseline; box-sizing: border-box; color: #000000;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: border-box;\">Коли чекати на запуск мапи у вашому місті</span></h4>\r\n<p style=\"margin: 25px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.777; font-family: ProximaNova; vertical-align: baseline; box-sizing: border-box; color: #1d1d21;\"><a style=\"margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.25; font-family: inherit; vertical-align: baseline; box-sizing: border-box; display: inline-block; color: #1b6fcd; text-decoration-line: none; transition: all 0.25s; cursor: pointer; word-break: break-all; border-color: initial initial #cce2f6 initial; border-style: initial initial solid initial;\" href=\"https://map.shtab.net/\" target=\"_blank\" rel=\"noopener\">Мапа</a>&nbsp;розпочне роботу насамперед у великих містах. У другу чергу її функціональність стане доступною в обласних центрах. Також представники сервісу зауважують, що готові до співпраці із малими громадами та невеликими населеними пунктами. Від них вони очікують запитів. Таку інформацію оприлюднила очільниця правління ГО &laquo;Антикорупційний штаб&raquo; Галина Янченко.</p>\r\n<p style=\"margin: 25px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.777; font-family: ProximaNova; vertical-align: baseline; box-sizing: border-box; color: #1d1d21;\">Наступними містами на мапі онлайн-сервісу мають стати Харків, Житомир, Тернопіль, Миколаїв та Херсон. Для Києва сайт використовує офіційні дані від Київської міськради щодо робіт та тендерів. Зараз сайт висвітлює 7 категорій об&rsquo;єктів, відносно яких витрачають бюджетні кошти. До їхнього числа включено житлові об&rsquo;єкти, медичні установи, освітні заклади, майданчики, інфраструктуру міст, соціальні об&rsquo;єкти та дороги й автошляхи. По кожній категорії можна проглянути напрямки та типи витрат і співставити із бюджетними витратами.</p>\r\n<p style=\"margin: 25px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.777; font-family: ProximaNova; vertical-align: baseline; box-sizing: border-box; color: #1d1d21;\">Нагадаємо, раніше ми розповідали вам про&nbsp;<a style=\"margin: 0px; padding: 0px; border-width: 0px 0px 1px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.25; font-family: inherit; vertical-align: baseline; box-sizing: border-box; display: inline-block; color: #1b6fcd; text-decoration-line: none; transition: all 0.25s; cursor: pointer; word-break: break-all; border-color: initial initial #cce2f6 initial; border-style: initial initial solid initial;\" href=\"https://nachasi.com/2017/11/07/byudzhet-uchasti-ukraine/\" target=\"_blank\" rel=\"noopener\">бюджет участі</a>&nbsp;в українських містах. Його використання в регіонах за 2017 рік суттєво зросло слідом за столицею.</p>\r\n<p style=\"margin: 25px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.777; font-family: ProximaNova; vertical-align: baseline; box-sizing: border-box; color: #1d1d21;\"><img class=\"aligncenter size-full wp-image-21384\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: border-box; max-width: 100%; height: auto;\" src=\"https://nachasi.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-22-at-7.51.21-PM.png\" sizes=\"(max-width: 1363px) 100vw, 1363px\" srcset=\"https://nachasi.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-22-at-7.51.21-PM.png 1363w, https://nachasi.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-22-at-7.51.21-PM-300x196.png 300w, https://nachasi.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-22-at-7.51.21-PM-768x501.png 768w, https://nachasi.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-22-at-7.51.21-PM-1024x669.png 1024w, https://nachasi.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-22-at-7.51.21-PM-650x424.png 650w, https://nachasi.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-22-at-7.51.21-PM-1133x740.png 1133w\" alt=\"В Україні запустили антикорупційну житлову мапу\" width=\"1363\" height=\"890\" /></p>', 'https://map.shtab.net/', 'Landing Page', 'https://github.com/11September/anticorruption', '2018-04-25 07:59:19', '2018-04-25 07:59:19'),
(23, 'alfa-security', 'Open Company \"OK\" ALPHA-ZAHIST \"offers to use services on collection of funds and transportation of currency values at the time convenient for you.\r\n\r\nThe staff of the Collection Department is represented by highly skilled workers who have received special training in the educational institutions of the National Bank of Ukraine and have many years of experience in collecting funds and transporting currency valuables.', 'portfolios/April2018/5mRAQE9XDyGBHQQBhmDh.png', NULL, 'http://www.alfa-security.org.ua/', 'Few Pages', 'https://github.com/11September/alpha_defender', '2018-04-25 08:06:20', '2018-04-25 08:06:20'),
(24, 'front-dizz', 'The charter and rent of a private jet Kiev Ukraine are necessary for making a long journey. Renting an aircraft, as well as chartering an airplane allows you to quickly move over long distances. In this case, trains, cars do not always satisfy your needs, as they move slowly enough.', 'portfolios/April2018/7zi6bFoCQ2j89xuwIzCI.png', NULL, 'http://front.dizz.com.ua/fly/', 'Few Pages', 'https://github.com/11September/flyGlobal', '2018-04-25 08:09:00', '2018-04-25 08:09:00'),
(25, 'хочу-халат', 'Махровые халаты с именной вышивкой\r\nЭксклюзивный подарок для всей семьи\r\nИменной халат с вышивкой\r\nСоздавайте дизайн вашего халата!', 'portfolios/April2018/H9moZV3pcAxRKJ4dsoGI.png', NULL, 'http://xn--80aa6akxcmcq.xn--p1ai/', 'Landing Page', 'https://github.com/BoycoYura/xalat-ik', '2018-04-25 08:12:04', '2018-04-25 08:12:04'),
(26, 'cosmo-press', 'COSMO PRESS is a Publishing house, currently sorting nine international magazines in 20 countries, featuring celebrities, fashion trends, fitness & health and in-depth lifestyle stories complemented by extraordinary photographs shot by the best photographers from around the globe.\r\n\r\nWe bring you exclusive interviews with celebrities, artists, designers, and other creative people in the industry and cover fashion trends, and inspirations. Our goal is to create content that inspires you. We hope to introduce and connect you with some of the finest artists and professionals within every industry.', 'portfolios/April2018/sylgwL9cnoK4jhzky0cu.png', NULL, 'http://cosmo-press.com/', 'Few Pages', 'https://github.com/11September/simple-journals', '2018-04-25 08:16:25', '2018-04-25 08:16:25'),
(27, 'Academy-childhood', 'Academy of Childhood\r\nhappy children - quiet parents', 'portfolios/April2018/Dy8wOmbbP28TbnUnJ4Ww.png', NULL, 'http://1231947.eventren.web.hosting-test.net/', 'Landing Page', 'https://github.com/11September/academy_childhood', '2018-04-25 08:19:04', '2018-04-25 08:19:04'),
(28, 'rc-sumy', 'Рекламно-производственная компания «РекламаЦентр» -\r\nЛидер рынка г. Сумы и области\r\nРекламно-производственная компания РекламаЦентр СумыРекламно-производственная компания «РекламаЦентр» известна и результативно работает на рынке рекламно-полиграфических услуг с 2008 года.\r\n\r\nМы выполняем полный цикл услуг от разработки дизайна до воплощения в жизнь задач и пожеланий клиента, цикл от А до Я.', 'portfolios/April2018/XZQ2PJxaFwoISwr0ui6Y.png', NULL, 'http://www.rc.sumy.ua/o-nas.html', 'Few Pages', 'https://github.com/11September/reklama_centr', '2018-04-25 08:22:12', '2018-04-25 08:22:12'),
(29, 'Goldenlaife', 'Международное сообщество, члены которого объеденены стремлением приумножить и сохранить свой капитал с помощью инвестиционных слитков золота высшей пробы, предоставленными лучшими мировыми производителями.', 'portfolios/April2018/843GvbzqktNz5XUouAR4.png', NULL, 'http://www.goldenlaife.com/', 'Few Pages', 'https://github.com/', '2018-04-25 13:16:46', '2018-04-25 13:16:46'),
(30, 'Goldencoin', 'We are a manufacturer of finest local and oriental food products in Hawaii. We are a USDA inspected meat and poultry processing plant. Our bakery is FDA approved and registered to ensure quality.', 'portfolios/April2018/mXHJrzlYbmrB7bawNwmB.png', NULL, 'https://www.goldencoin.com/', 'Landing Page', 'https://github.com/', '2018-04-25 13:21:07', '2018-04-25 13:21:07'),
(31, 'handurin', 'Онлайн приймальня', 'portfolios/April2018/EACh7qiI7wCYb1is65hx.png', NULL, 'https://www.facebook.com/khandurin.dmytro', 'Landing Page', 'https://github.com/', '2018-04-25 13:24:40', '2018-04-25 13:24:40'),
(32, 'TomFoss', 'The blogger\'s calendar is an elegant notebook, under the cover of which everything is for effective planning of the blog\'s work: goals for the year, ideas for posts, content-plan. 12 turns with a plan for a month and motivating designer prints.', 'portfolios/April2018/H2rg2DV9ni2F2DPeVlUS.png', NULL, 'https://www.twitch.tv/tomfoss100', 'Landing Page', 'https://github.com/', '2018-04-25 13:28:45', '2018-04-25 13:28:45'),
(34, 'Laznya', 'Все бани и сауны Украины!', 'portfolios/May2018/1IJbWAHsz94J82tTIFoF.png', '<p><img src=\"http://localhost:8000/storage/portfolios/May2018/laznya_mobile3.png\" alt=\"\" width=\"458\" height=\"18527\" /></p>', 'https://github.com/11September/laznya', 'Few Pages', 'https://github.com/11September/laznya', '2018-05-12 11:58:23', '2018-05-12 11:58:23');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-02-24 16:40:57', '2019-02-24 16:40:57');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-02-24 16:40:55', '2019-02-24 16:40:55'),
(2, 'user', 'Normal User', '2019-02-24 16:40:55', '2019-02-24 16:40:55');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-02-24 16:40:57', '2019-02-24 16:40:57'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-02-24 16:40:57', '2019-02-24 16:40:57');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$Z.nVkPcZZSJulksag1RXq.nVB8rF2yuxpeqHnKJN2bwis6ZThlyYm', '3xWQIWbjqMGfS2Us2vyikKMCYy2gb3ef8xTsBns1IXxMJcj4cT1TdUrmbdPg', NULL, '2019-02-24 16:40:57', '2019-02-24 16:40:57');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT для таблицы `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
