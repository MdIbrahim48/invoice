-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 08:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `name`, `email`, `phone`, `address`, `image`, `role`, `status`, `created_by`, `edited_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'ibrahim@gmail.com', '32456576855', 'Feni', 'default.png', 'SuperAdmin', 'Active', 'Ibrahim', NULL, NULL, '2022-01-03 02:46:15', '2022-01-04 07:55:24'),
(2, 'Admin', 'admin@gmail.com', NULL, NULL, 'default.png', 'Admin', 'Active', 'Ibrahim', NULL, NULL, '2022-01-03 02:46:15', '2022-01-03 02:46:15'),
(3, 'Moderator', 'moderator@gmail.com', NULL, NULL, 'default.png', 'Moderator', 'Active', 'Ibrahim', NULL, '2022-01-04 04:19:07', '2022-01-03 02:46:15', '2022-01-04 04:19:07'),
(4, 'editor', 'editor@gmail.com', NULL, NULL, 'default.png', 'Editor', 'Active', 'superadmin@gmail.com', NULL, NULL, '2022-01-03 09:30:50', '2022-01-03 09:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `status`, `created_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(2, 'Fruit', 'Active', 'superadmin@gmail.com', NULL, '2022-01-03 03:21:56', '2022-01-03 03:21:56'),
(3, 'Fashion', 'Active', 'superadmin@gmail.com', NULL, '2022-01-03 03:22:26', '2022-01-03 03:22:26'),
(4, 'Electronics', 'Active', 'superadmin@gmail.com', NULL, '2022-01-03 03:22:40', '2022-01-03 03:22:40'),
(5, 'Cosmetics', 'Active', 'superadmin@gmail.com', NULL, '2022-01-03 03:22:53', '2022-01-03 03:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `username`, `phone`, `image`, `address`, `shop_name`, `status`, `created_by`, `edited_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Rahim', 'rahim@gmail.com', 'Rahim', '435654654', 'Rahim_11.png', 'Uttara Dhaka', 'MamaShop', 'Active', 'superadmin@gmail.com', NULL, NULL, '2022-01-04 04:56:36', '2022-01-04 07:45:08'),
(6, 'Karim', 'karim@gmail.com', 'karim', '214355', 'default.png', 'Dhaka', 'MamaShopd', 'Active', 'ibrahim@gmail.com', NULL, NULL, '2022-01-08 13:44:15', '2022-01-08 13:44:15'),
(7, 'Jamal', 'Jamal@gmail.com', 'Jamal', '01234567890', 'default.png', 'Kumilla', 'MamaShopdsss', 'Active', 'ibrahim@gmail.com', NULL, NULL, '2022-01-08 13:46:48', '2022-01-08 13:46:48'),
(8, 'joni', 'joni@gmail.com', 'joni', '435465464', 'default.png', 'Khulna', 'MamaShopdsss', 'Active', 'ibrahim@gmail.com', NULL, NULL, '2022-01-08 13:53:03', '2022-01-08 13:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `demo_data`
--

CREATE TABLE `demo_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `category_id`, `title`, `amount`, `status`, `created_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(2, 4, 'Mobile', '546', 'Active', 'superadmin@gmail.com', NULL, '2022-01-03 05:24:42', '2022-01-03 05:24:42'),
(3, 3, 'T Shirt', '656', 'Active', 'superadmin@gmail.com', NULL, '2022-01-03 05:24:56', '2022-01-03 05:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_12_29_195319_create_admin_profiles_table', 1),
(5, '2021_12_30_005638_create_verify_users_table', 1),
(6, '2022_01_02_182259_create_categories_table', 1),
(7, '2022_01_02_192434_create_expenses_table', 2),
(8, '2022_01_02_212549_create_products_table', 3),
(13, '2022_01_03_010842_create_clients_table', 4),
(15, '2022_01_04_004555_create_settings_table', 5),
(24, '2022_01_06_032437_create_source_statuses_table', 7),
(25, '2022_01_06_032500_create_shipment_statuses_table', 7),
(26, '2022_01_05_204117_create_demo_data_table', 8),
(29, '2022_01_06_180500_create_source_invoices_table', 9),
(30, '2022_01_06_183624_create_source_products_table', 9);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benifit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_code`, `buying_price`, `selling_price`, `benifit`, `image`, `status`, `created_by`, `edited_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'John', '7468', '500', '22', '-478', '2.jpg', 'Active', 'superadmin@gmail.com', NULL, NULL, '2022-01-03 15:56:18', '2022-01-03 15:56:18'),
(3, 'scsaca', '2882', '11', '2', '-9', '3.jpg', 'Active', 'superadmin@gmail.com', NULL, NULL, '2022-01-03 16:16:07', '2022-01-03 16:16:07'),
(4, 'Johndsds', '6624', '213', '11', '-202', '4.jpg', 'Active', 'superadmin@gmail.com', NULL, NULL, '2022-01-03 16:18:14', '2022-01-03 16:18:14'),
(5, 'cxvcxv', '9803', '10', '5', '-5', '5.jpg', 'Active', 'superadmin@gmail.com', NULL, NULL, '2022-01-03 16:21:56', '2022-01-03 16:21:56'),
(7, 'Apple', '3931', '200', '500', '300', '7.png', 'Active', 'ibrahim@gmail.com', NULL, NULL, '2022-01-07 09:12:41', '2022-01-07 09:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `logo`, `email`, `phone`, `mobile`, `address`, `status`, `created_by`, `edited_by`, `created_at`, `updated_at`) VALUES
(1, 'Bir It', 'logo.png', 'birit@gmail.com', '01917364532', '01917364500', 'House#27, Sector#11, Uttara, Dhaka', 'Active', 'SuperAdmin', NULL, '2022-01-07 04:28:26', '2022-01-07 08:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_statuses`
--

CREATE TABLE `shipment_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipment_statuses`
--

INSERT INTO `shipment_statuses` (`id`, `shipment_status`, `created_at`, `updated_at`) VALUES
(1, 'Recieved', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(2, 'Pending', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(3, 'Cancelled', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(4, 'Refunded', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(5, 'Shipment', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(6, 'Delivered', '2022-01-06 12:13:17', '2022-01-06 12:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `source_invoices`
--

CREATE TABLE `source_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_status_id` bigint(20) UNSIGNED NOT NULL,
  `billing_from_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_from_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_from_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_to_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_to_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_to_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amout_paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `source_invoices`
--

INSERT INTO `source_invoices` (`id`, `source_status_id`, `billing_from_name`, `billing_from_phone`, `billing_from_address`, `billing_to_name`, `billing_to_phone`, `billing_to_address`, `payment_method`, `due_date`, `notes`, `terms_condition`, `signature`, `position`, `sub_total`, `tax`, `shipping_cost`, `discount`, `grand_total`, `amout_paid`, `total_due`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bir It', '01917364532', 'House#27, Sector#11, Uttara, Dhaka', 'Rahim', '435654654', 'Uttara Dhaka', 'Cash', '2022-01-14', 'sdfrsfg v', 'edfr gverfgv', 'ibrahim', 'SEO', NULL, '5', '56', '54', NULL, '7878', NULL, '2022-01-07 08:35:50', '2022-01-07 08:35:50'),
(2, 1, 'Bir It', '01917364532', 'House#27, Sector#11, Uttara, Dhaka', 'Rahim', '435654654', 'Uttara Dhaka', 'Cash', '2022-01-14', 'sdfrsfg v', 'edfr gverfgv', 'ibrahim', 'SEO', NULL, '5', '56', '54', NULL, '7878', NULL, '2022-01-07 08:36:49', '2022-01-07 08:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `source_products`
--

CREATE TABLE `source_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_invocie_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `source_products`
--

INSERT INTO `source_products` (`id`, `source_invocie_id`, `product_name`, `image`, `description`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 'Apple', NULL, 'This is Apple', '2', '100', '200', '2022-01-07 08:35:50', '2022-01-07 08:35:50'),
(2, 1, 'Banana', NULL, 'Bannaa', '5', '20', '100', '2022-01-07 08:35:50', '2022-01-07 08:35:50'),
(3, 2, 'Apple', NULL, 'This is Apple', '2', '100', '200', '2022-01-07 08:36:49', '2022-01-07 08:36:49'),
(4, 2, 'Banana', NULL, 'Bannaa', '5', '20', '100', '2022-01-07 08:36:49', '2022-01-07 08:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `source_statuses`
--

CREATE TABLE `source_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `source_statuses`
--

INSERT INTO `source_statuses` (`id`, `source_status`, `created_at`, `updated_at`) VALUES
(1, 'Recieved', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(2, 'Pending', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(3, 'Cancelled', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(4, 'Refunded', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(5, 'Shipment', '2022-01-06 12:13:17', '2022-01-06 12:13:17'),
(6, 'Delivered', '2022-01-06 12:13:17', '2022-01-06 12:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SuperAdmin',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin@gmail.com', '2022-01-03 02:46:15', '$2y$10$uNecoF668hME4GV/d98b7utkf13jDFCbzpIUwqZPrrc1YY8n4YcnO', 'Admin', 'Active', NULL, NULL, '2022-01-03 02:46:15', '2022-01-03 02:46:15'),
(3, 'moderator@gmail.com', '2022-01-03 02:46:15', '$2y$10$q2FnTu5MB/xdxj/ZIlpJZO6lXfIwCpmE5JPCHEcz0B50GYd5BNifq', 'Moderator', 'Active', '2022-01-04 04:19:07', NULL, '2022-01-03 02:46:15', '2022-01-04 04:19:07'),
(4, 'editor@gmail.com', '2022-01-04 18:39:54', '$2y$10$ufr6q/1KJWG.Ny7nj/tK0eBU4RcCdUBtO0ml3VJEVVuMjcQEg4kmO', 'Editor', 'Active', NULL, NULL, '2022-01-03 09:30:50', '2022-01-03 09:30:50'),
(5, 'ibrahim@gmail.com', '2022-01-04 07:55:43', '$2y$10$4CUG28xDkQSYHDMEpnT7fuYd9OwzMhoP1LpbiYGLP.4ugaIIvTcrK', 'SuperAdmin', 'Active', NULL, NULL, '2022-01-03 02:46:15', '2022-01-04 07:55:43'),
(11, 'rahim@gmail.com', '2022-01-04 07:45:22', '$2y$10$KdMKhVJNlDTomLeAl1y5E.hDFkfFoaJ4nF0hx5M5BSq6OP6bQJSGu', 'Client', 'Active', NULL, NULL, '2022-01-04 04:56:36', '2022-01-04 07:45:22'),
(13, 'karim@gmail.com', '2022-01-05 05:46:10', '$2y$10$F.2pTozSGZPGsOU06HGyeOM6aOlbO7vav60/lxPWty3gV0lPthON2', 'Client', 'Active', NULL, NULL, '2022-01-08 13:44:15', '2022-01-08 13:44:15'),
(14, 'Jamal@gmail.com', '2022-01-04 05:54:19', '$2y$10$wcH4YdgDQO5nfp0bJVQem.W.k8EMixILgI9ezwGtWvuua6h1VY3a2', 'Client', 'Active', NULL, NULL, '2022-01-08 13:46:48', '2022-01-08 13:46:48'),
(15, 'joni@gmail.com', '2022-01-08 13:54:07', '$2y$10$WcU0zYo9iH6CEAEmLILPX.8tKRS3nOlXuSRxEurWMOV6qP4G3ZQnu', 'Client', 'Active', NULL, NULL, '2022-01-08 13:53:03', '2022-01-08 13:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `token`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'RO7zcLwyZSyV3033r9XlXNyveQeFtJUhy3OEhL4OuWkvI1KzJzcoWf2teAc7', 4, '2022-01-03 09:30:50', '2022-01-03 09:30:50'),
(2, 'N63ZP4lOhMrGQrynRfcgOFMh9BD0PaaEFwZtSxBEHiP0azl4z6m6OoRKYDUi', 8, '2022-01-04 03:06:50', '2022-01-04 03:06:50'),
(4, '6vSAkDTVUMSzSEV5aMEJRyhgsjmQjle52bnHUq3dx4hsNIRPWQ9WTBOL61mP', 10, '2022-01-04 04:26:26', '2022-01-04 04:26:26'),
(12, 'A9nQ9cPZIGDSz34OejeK382XmU2BXpISN5QT7UiY9aYUpLofXEF7fFT33iy2', 13, '2022-01-08 13:44:15', '2022-01-08 13:44:15'),
(13, 'p3ZGKEfO64PPPBPJpfZYXhP8XK3KX5I2Bk73VFnnXaV5lcakGs2Xgoy8NHbd', 14, '2022-01-08 13:46:48', '2022-01-08 13:46:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_profiles_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`),
  ADD UNIQUE KEY `clients_username_unique` (`username`);

--
-- Indexes for table `demo_data`
--
ALTER TABLE `demo_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_statuses`
--
ALTER TABLE `shipment_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_invoices`
--
ALTER TABLE `source_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_products`
--
ALTER TABLE `source_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_statuses`
--
ALTER TABLE `source_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `demo_data`
--
ALTER TABLE `demo_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipment_statuses`
--
ALTER TABLE `shipment_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `source_invoices`
--
ALTER TABLE `source_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `source_products`
--
ALTER TABLE `source_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `source_statuses`
--
ALTER TABLE `source_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
