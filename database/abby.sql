-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 02:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abby`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_banner_models`
--

CREATE TABLE `auto_banner_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auto_banner_models`
--

INSERT INTO `auto_banner_models` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'test', 'Auto/Banner/wHK0dpeCbxhUzR5gs38RAhasGi3pBJlCQZy6ZiM7.jpg', NULL, '2023-02-19 05:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `auto_brands_models`
--

CREATE TABLE `auto_brands_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auto_brands_models`
--

INSERT INTO `auto_brands_models` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Auto/Brand/ACkaqSf3WCNt74XH6Hn03EhUc5F3A7AxUbct03ao.png', 'test', NULL, '2023-02-19 05:05:24'),
(2, 'Auto/Brand/bTHnZnrh7dfY8CiddswRP7lo2kX1o5Ebutv7OEaV.png', 'test', '2023-02-19 05:05:42', '2023-02-19 05:05:42'),
(3, 'Auto/Brand/QFoZubtouyxjWGhICQbZmYYJEu8Pg5ojSLw77fyW.png', 'test', '2023-02-19 05:05:51', '2023-02-19 05:05:51'),
(4, 'Auto/Brand/zdpmQqI0C0nu3jTjksJR3VqHyxf0Tgbkz0Ymqxpj.png', 'test', '2023-02-19 05:06:03', '2023-02-19 05:06:03'),
(5, 'Auto/Brand/nCzr0PQbwAwgEYoqSy6bidGzhEd1OlywKabqM79m.png', 'test', '2023-02-19 05:06:12', '2023-02-19 05:06:12'),
(6, 'Auto/Brand/EmJ0dVfrMIjPv0YIKhplqGtFovkwfQmzm8WvZpnf.png', 'test', '2023-02-19 05:06:24', '2023-02-19 05:06:24'),
(7, 'Auto/Brand/ZPaKeAhLMV3wNtEiGcDtfSbpN83nrdtoIvJpTQXY.png', 'test', '2023-02-19 05:06:37', '2023-02-19 05:06:37'),
(8, 'Auto/Brand/zZ04nQtrXAI2s8PTbJDhKUJUMqEhQNM4tAEE7LIn.png', 'test', '2023-02-19 05:06:48', '2023-02-19 05:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `auto_highlight_models`
--

CREATE TABLE `auto_highlight_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auto_highlight_models`
--

INSERT INTO `auto_highlight_models` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Auto/Highlight/hVF9Iw5rZoqMqQGh0E1CPi7GjOb3iMwIZDXgz52c.jpg', 'test', NULL, '2023-02-19 05:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `auto_service_models`
--

CREATE TABLE `auto_service_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kolom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auto_service_models`
--

INSERT INTO `auto_service_models` (`id`, `image`, `name`, `title`, `text`, `kolom`, `created_at`, `updated_at`) VALUES
(1, 'Auto/Service/KN8uxQwozqTiYM6BtFY1QH6Oa4OSnydwErQul9Qq.jpg', 'test', 'AUTO DETAILING', '- Coating - Non-Coating - A la Carte', '1', NULL, '2023-02-19 05:03:36'),
(2, 'Auto/Service/b09OFRV0DEtnwQkIU4ouepw0JQ41uNcCgzOJrMML.jpg', 'test', 'PREMIUM CAR WASH', 'Wash & Wax', '2', NULL, '2023-02-19 05:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `car_banner_models`
--

CREATE TABLE `car_banner_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_banner_models`
--

INSERT INTO `car_banner_models` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Audiocar', 'Audio/Banner/lZ9KtGi1EyKu3iZC2elGMC2wEiD44lB4DlRWK470.jpg', '2023-02-19 02:15:29', '2023-02-19 02:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `car_brands_models`
--

CREATE TABLE `car_brands_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_brands_models`
--

INSERT INTO `car_brands_models` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Audio/Brand/JzPWzKfcjWIdtHaoGPPQMIhjuMPVkedzAUvewzWV.png', 'Flux', '2023-02-19 04:33:38', '2023-02-19 04:33:38'),
(3, 'Audio/Brand/yXZePU1rGpFsTqM50OcU8D1kkiNrH84Xd7VmMVwO.png', 'tes1', '2023-02-19 04:34:46', '2023-02-19 04:34:46'),
(4, 'Audio/Brand/NaZ3wuhseHiYiVe9Cz1bGkl6YAKA0EXU4dRkNLUk.png', 'tes', '2023-02-19 04:34:58', '2023-02-19 04:34:58'),
(5, 'Audio/Brand/F3RJyF68AK2gpI8qs0Q5kLvcuFBc1vHl87wTXAK1.png', 'tes2', '2023-02-19 04:35:28', '2023-02-19 04:35:28'),
(6, 'Audio/Brand/k4kiSeL1we0aywcMXMC0pCkHE0eiN4JJdtpQrSDn.png', 'tes3', '2023-02-19 04:35:45', '2023-02-19 04:35:45'),
(7, 'Audio/Brand/edEyRmqj0J1mIdsIRYdsV5L9upUvpROqIJyfmUc2.png', 'tes4', '2023-02-19 04:36:02', '2023-02-19 04:36:02'),
(8, 'Audio/Brand/QxCBft2uQrFu38Mf7F5JF1o9B60OXH7Hq2k9PsEa.png', 'tes5', '2023-02-19 04:36:17', '2023-02-19 04:36:17'),
(9, 'Audio/Brand/cA2Cd8nOjmFE9LBvNTrHtfEDHg7R15bTiHRwRuuq.png', 'tes6', '2023-02-19 04:36:49', '2023-02-19 04:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `car_highlight_models`
--

CREATE TABLE `car_highlight_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_highlight_models`
--

INSERT INTO `car_highlight_models` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Audio/Highlight/spSGaHcN3ZgwD0arjwtuopaXXO2hB2ddXtuqCoi7.jpg', 'Audiocar', '2023-02-19 03:55:03', '2023-02-19 03:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `car_service_models`
--

CREATE TABLE `car_service_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kolom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_service_models`
--

INSERT INTO `car_service_models` (`id`, `image`, `name`, `title`, `text`, `kolom`, `created_at`, `updated_at`) VALUES
(1, 'Audio/Service/P1wszktMpSfbqewx2x7BWNZqUfPFHceWPtQD5Zf7.jpg', 'CARAUDIO', 'CAR AUDIO', 'Sound Quality (SQ)', '1', '2023-02-19 02:35:46', '2023-02-19 03:09:13'),
(2, 'Audio/Service/d69JIGKNtsd8ItyjiJtPoCAAmWZTmfJMDMKUL8ex.jpg', 'SOUNDPROOFING', 'SOUNDPROOFING', 'Installation', '2', '2023-02-19 02:37:49', '2023-02-19 03:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_addresses`
--

CREATE TABLE `footer_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_addresses`
--

INSERT INTO `footer_addresses` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Jl. Green Ville Blok AX No.40,\r\nRT.10/RW.14, Duri Kepa, Kec. Kb. Jeruk,\r\nKota Jakarta Barat\r\nDaerah Khusus Ibukota Jakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer_contact_cars`
--

CREATE TABLE `footer_contact_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_contact_cars`
--

INSERT INTO `footer_contact_cars` (`id`, `phone`, `text`, `created_at`, `updated_at`) VALUES
(1, '+6280000000', 'Hendro', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer_contact_detaillings`
--

CREATE TABLE `footer_contact_detaillings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_contact_detaillings`
--

INSERT INTO `footer_contact_detaillings` (`id`, `phone`, `text`, `created_at`, `updated_at`) VALUES
(1, '+6280000000', 'Hendro', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footer_socmeds`
--

CREATE TABLE `footer_socmeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_socmeds`
--

INSERT INTO `footer_socmeds` (`id`, `link`, `category`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'https://www.instagram.com/telkomuniversity/', 'instagram', 1, NULL, NULL),
(2, 'https://www.facebook.com/telkomuniversity/', 'facebook', 1, '2023-02-19 02:14:16', '2023-02-19 02:14:16'),
(3, 'https://www.youtube.com/channel/UCCEr8He96NhAxVe_YL32Rww', 'instagram', 1, '2023-02-19 02:14:35', '2023-02-19 02:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Gallery/car audio/tKnIcMdL9jgYdCT8Rv8f2Z1WoCppHY0rVeFEz7Nx.jpg', 'car audio', '2023-02-20 21:08:10', '2023-02-20 21:08:10'),
(2, 'Gallery/auto detailing/ySyrRYkzJcgf3RVi73yK7A29oLALVNztTCd0fVnz.jpg', 'auto detailing', '2023-02-20 21:08:57', '2023-02-20 21:08:57'),
(3, 'Gallery/showroom/s1mOQsutUR04uE2GCmwZwEqpks3jMT8xWJoSkbPx.jpg', 'showroom', '2023-02-20 21:09:08', '2023-02-20 21:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `home_carousel_banners`
--

CREATE TABLE `home_carousel_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_carousel_banners`
--

INSERT INTO `home_carousel_banners` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'test', 'carousel/image/RbsgNqLQ5t8iUA7VekukX639X08hFLJGn6SQZLkq.jpg', 'https://www.youtube.com/channel/UCCEr8He96NhAxVe_YL32Rww', '2023-02-20 21:39:54', '2023-02-20 21:39:54'),
(2, 'test1', 'carousel/image/6HmwLLJhNomr3jxIUaoqGU1vaIZUrV2XVMGjMYMq.jpg', 'https://www.youtube.com/channel/', '2023-02-20 21:40:18', '2023-02-20 21:40:18'),
(3, 'test2', 'carousel/image/GBqcAwbFWb0y2TmYGqJR5QhjRZLW24MYVF579I5Q.jpg', 'https://www.facebook.com/telkomuniversity/', '2023-02-20 21:40:35', '2023-02-20 21:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `home_highlights`
--

CREATE TABLE `home_highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_highlights`
--

INSERT INTO `home_highlights` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'highlight/image/g1zt7pXaILQDtiN3gKUqaTnlFjXbEyPql0ojqxMD.jpg', '2023-02-20 21:41:51', '2023-02-20 21:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'service/image/336eBAOhmPp4CDamAJOa7ZagGlXvshq6x3vEdE0k.jpg', '2023-02-20 21:41:40', '2023-02-20 21:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `home_values`
--

CREATE TABLE `home_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_values`
--

INSERT INTO `home_values` (`id`, `image`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'value/image/Cu3sLTm2G3JboUhz22aOfdx0LpmkK9geiRiQ8CNp.png', 'Cafetaria', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias accusantium dicta veritatis ducimus dolor debitis rerum atque facilis repellendus aliquam consequuntur assumenda neque, a iure', '2023-02-20 21:43:10', '2023-02-20 21:43:10'),
(2, 'value/image/Q6Sv1rxpdCsX1xRFvI36425q5zmkIOrhb5MeSaZY.png', 'Find', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias accusantium dicta veritatis ducimus dolor debitis rerum atque facilis repellendus aliquam consequuntur assumenda neque, a iure', '2023-02-20 21:43:23', '2023-02-20 21:43:23'),
(3, 'value/image/yPlwRUZl0OJGqZUQkwP1m6l7CBnCZFewkDIHgEbl.png', 'Premium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias accusantium dicta veritatis ducimus dolor debitis rerum atque facilis repellendus aliquam consequuntur assumenda neque, a iure', '2023-02-20 21:43:42', '2023-02-20 21:43:42'),
(4, 'value/image/dy7NQI4UF2HBkyFekd1zbnFhbmxY7e52bvx8R7BF.png', 'Professional', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias accusantium dicta veritatis ducimus dolor debitis rerum atque facilis repellendus aliquam consequuntur assumenda neque, a iure', '2023-02-20 21:44:06', '2023-02-20 21:44:06'),
(5, 'value/image/Azo1C2qEpK9ysca2B51ieJ63hxvB3ZnkQ9PG6WZT.png', 'Showroom', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias accusantium dicta veritatis ducimus dolor debitis rerum atque facilis repellendus aliquam consequuntur assumenda neque, a iure', '2023-02-20 21:44:21', '2023-02-20 21:44:21'),
(6, 'value/image/O7QW0QWutPBIM1eJW7R39eIGxemTqAA69RERnmqN.png', 'Tools', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias accusantium dicta veritatis ducimus dolor debitis rerum atque facilis repellendus aliquam consequuntur assumenda neque, a iure', '2023-02-20 21:44:35', '2023-02-20 21:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_08_19_000000_create_failed_jobs_table', 1),
(44, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(45, '2023_02_09_115124_create_footer_addresses_table', 1),
(46, '2023_02_09_115310_create_footer_socmeds_table', 1),
(47, '2023_02_09_115401_create_footer_contact_cars_table', 1),
(48, '2023_02_09_115434_create_footer_contact_detaillings_table', 1),
(49, '2023_02_13_060313_create_home_carousel_banners_table', 1),
(50, '2023_02_13_060441_create_home_services_table', 1),
(51, '2023_02_13_060452_create_home_values_table', 1),
(52, '2023_02_13_060505_create_home_highlights_table', 1),
(53, '2023_02_19_051703_create_car_banner_models_table', 1),
(54, '2023_02_19_051851_create_auto_banner_models_table', 1),
(55, '2023_02_19_052054_create_car_service_models_table', 1),
(56, '2023_02_19_052112_create_auto_service_models_table', 1),
(57, '2023_02_19_052138_create_car_highlight_models_table', 1),
(58, '2023_02_19_052150_create_auto_highlight_models_table', 1),
(59, '2023_02_19_052210_create_car_brands_models_table', 1),
(60, '2023_02_19_052236_create_auto_brands_models_table', 1),
(61, '2023_02_21_033633_create_galleries_table', 2),
(62, '2023_02_21_041048_create_profiles_table', 3),
(63, '2023_02_21_041513_create_profiles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Cobaa', 'Cobaaa', 'Profile/t6jAHiriyJMliq531wBc88W6MlH352KRQGBVeXyf.jpg', NULL, '2023-02-20 21:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ilham alfa', 'kuro.nekogami22@gmail.com', NULL, '$2y$10$vX3B.aEuxc12Jh5eRQOV5OturnDCLGqSQnITCiXuGE33BKMPJzMJa', 'SyQm6g9mX0XDrvSViZGdjYXuglbiPm41i1wK7DSvKXuwPYS46ae3080Ex3ip', '2023-02-22 04:17:29', '2023-02-22 04:32:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_banner_models`
--
ALTER TABLE `auto_banner_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_brands_models`
--
ALTER TABLE `auto_brands_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_highlight_models`
--
ALTER TABLE `auto_highlight_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_service_models`
--
ALTER TABLE `auto_service_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_banner_models`
--
ALTER TABLE `car_banner_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brands_models`
--
ALTER TABLE `car_brands_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_highlight_models`
--
ALTER TABLE `car_highlight_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_service_models`
--
ALTER TABLE `car_service_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_addresses`
--
ALTER TABLE `footer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_contact_cars`
--
ALTER TABLE `footer_contact_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_contact_detaillings`
--
ALTER TABLE `footer_contact_detaillings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_socmeds`
--
ALTER TABLE `footer_socmeds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `footer_socmeds_link_unique` (`link`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_carousel_banners`
--
ALTER TABLE `home_carousel_banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `home_carousel_banners_link_unique` (`link`);

--
-- Indexes for table `home_highlights`
--
ALTER TABLE `home_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_values`
--
ALTER TABLE `home_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_banner_models`
--
ALTER TABLE `auto_banner_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auto_brands_models`
--
ALTER TABLE `auto_brands_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auto_highlight_models`
--
ALTER TABLE `auto_highlight_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auto_service_models`
--
ALTER TABLE `auto_service_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_banner_models`
--
ALTER TABLE `car_banner_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_brands_models`
--
ALTER TABLE `car_brands_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `car_highlight_models`
--
ALTER TABLE `car_highlight_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_service_models`
--
ALTER TABLE `car_service_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_addresses`
--
ALTER TABLE `footer_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_contact_cars`
--
ALTER TABLE `footer_contact_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_contact_detaillings`
--
ALTER TABLE `footer_contact_detaillings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_socmeds`
--
ALTER TABLE `footer_socmeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_carousel_banners`
--
ALTER TABLE `home_carousel_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_highlights`
--
ALTER TABLE `home_highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_values`
--
ALTER TABLE `home_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
