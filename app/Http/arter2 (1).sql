-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 12:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arter2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'uploads/about/about_image1715768335.png', '{\"az\":\"About Us\"}', '{\"az\":\"<h2 class=\\\"heading-44-medium mb-30 color-text title-fleet wow fadeInUp\\\" style=\\\"font-weight: 500; line-height: 58px; font-size: 44px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: &quot;DM Sans&quot;, sans-serif; visibility: visible; margin-bottom: 30px !important; color: rgb(24, 26, 31) !important;\\\">We reimagine the way the world moves for the better</h2><div class=\\\"content-single wow fadeInUp\\\" style=\\\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(33, 37, 41); font-family: &quot;DM Sans&quot;, sans-serif; visibility: visible;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; line-height: 28px; color: rgb(24, 26, 31);\\\">We offer luxury chauffeur driven airport transfers and pickups to London. Exceptional Safe, Meet and Greet. One hour of complimentary wait time and flight tracking. Professional Drivers &amp; Vehicles. Fixed prices on airport transfers. VIP service, get your quote today!</p><p style=\\\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; line-height: 28px; color: rgb(24, 26, 31);\\\">Et, morbi at sagittis vehicula rutrum. Lacus tortor, quam arcu mi et, at lectus leo nunc. Mattis cras auctor vel pharetra tempor. Rhoncus pellentesque habitant ac tempor. At aliquam euismod est in praesent ornare etiam id. Faucibus libero sit vehicula sed condimentum. Vitae in nam porttitor rutrum sed aliquam donec sed. Sapien facilisi lectus.</p><ul class=\\\"list-ticks list-ticks-small\\\" style=\\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border: 0px; vertical-align: baseline; list-style: none;\\\"><li class=\\\"text-16 mb-20\\\" style=\\\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px 0px 0px 40px; border: 0px; font-size: 18px; vertical-align: baseline; line-height: 50px; color: rgb(24, 26, 31); position: relative; margin-bottom: 20px !important;\\\">100% Luxurious Fleet</li><li class=\\\"text-16 mb-20\\\" style=\\\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px 0px 0px 40px; border: 0px; font-size: 18px; vertical-align: baseline; line-height: 50px; color: rgb(24, 26, 31); position: relative; margin-bottom: 20px !important;\\\">All Our Fleet Are Fully Valeted &amp; Serviced</li><li class=\\\"text-16 mb-20\\\" style=\\\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px 0px 0px 40px; border: 0px; font-size: 18px; vertical-align: baseline; line-height: 50px; color: rgb(24, 26, 31); position: relative; margin-bottom: 20px !important;\\\">A Safe &amp; Secure Journey</li><li class=\\\"text-16 mb-20\\\" style=\\\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px 0px 0px 40px; border: 0px; font-size: 18px; vertical-align: baseline; line-height: 50px; color: rgb(24, 26, 31); position: relative; margin-bottom: 20px !important;\\\">Comfortable And Enjoyable</li><li class=\\\"text-16 mb-20\\\" style=\\\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px 0px 0px 40px; border: 0px; font-size: 18px; vertical-align: baseline; line-height: 50px; color: rgb(24, 26, 31); position: relative; margin-bottom: 20px !important;\\\">Clean, Polite &amp; Knowledgeable</li></ul></div>\"}', '2024-05-15 10:18:55', '2024-05-15 10:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `aboutdetail`
--

CREATE TABLE `aboutdetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutdetail`
--

INSERT INTO `aboutdetail` (`id`, `image`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'uploads/aboutdetail/aboutdetail_image1715329487.svg', '{\"az\":\"Safety First\"}', '{\"az\":\"Both you and your shipments will travel with professional drivers. Always with the highest quality standards.\"}', '2024-05-10 12:24:47', '2024-05-10 12:24:47'),
(2, 'uploads/aboutdetail/aboutdetail_image1715329508.svg', '{\"az\":\"Prices With No Surprises\"}', '{\"az\":\"Both you and your shipments will travel with professional drivers. Always with the highest quality standards.\"}', '2024-05-10 12:25:08', '2024-05-10 12:25:08'),
(3, 'uploads/aboutdetail/aboutdetail_image1715329524.svg', '{\"az\":\"Private Travel Solutions\"}', '{\"az\":\"Both you and your shipments will travel with professional drivers. Always with the highest quality standards.\"}', '2024-05-10 12:25:24', '2024-05-10 12:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `slug`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"test\"}', '{\"en\":\"<p>test</p>\"}', 'uploads/blog/blog_image1715335172.png', '{\"en\":\"test\"}', '{\"en\":\"test\"}', '{\"en\":\"test\"}', '{\"en\":\"test\"}', '2024-05-10 13:59:32', '2024-05-10 13:59:32'),
(2, '{\"az\":\"TestTestTestTest\"}', '{\"az\":\"<p>TestTestTest&nbsp;TestTestTestTest</p><p>TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest<br></p>\"}', 'uploads/blog/blog_image1715854454.jpg', '{\"az\":\"Test2\"}', '{\"az\":\"Test2\"}', '{\"az\":\"Test2\"}', '{\"az\":\"testtesttesttest\"}', '2024-05-16 10:14:14', '2024-05-16 10:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `blog_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`blog_id`, `tag_id`) VALUES
(4, 14),
(6, 17),
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Turism\"}', '{\"az\":\"turism\"}', '2024-05-10 15:28:48', '2024-05-10 15:28:48'),
(2, '{\"az\":\"Book\"}', '{\"az\":\"book\"}', '2024-05-10 15:29:06', '2024-05-10 15:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"German\"}', '{\"az\":\"german\"}', '2024-05-10 14:57:08', '2024-05-10 14:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `office` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `office`, `image`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"New York Office\"}', 'uploads/contact/contact_image1715337782.svg', '{\"az\":\"PO Box 16122 Collins Street West Victoria 8007 Australia\"}', '+32 2 512 08 15', 'newyork@luxride.com', '2024-05-10 14:43:03', '2024-05-10 14:43:03'),
(2, '{\"az\":\"Istanbul Office\"}', 'uploads/contact/contact_image1715337809.svg', '{\"az\":\"PO Box 16122 Collins Street West Victoria 8007 Australia\"}', '+32 2 512 08 15', 'istanbul@luxride.com', '2024-05-10 14:43:29', '2024-05-10 14:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `number` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `title`, `number`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Vehicles\"}', '285', '2024-05-10 12:10:34', '2024-05-10 12:10:34'),
(2, '{\"az\":\"Awards\"}', '90', '2024-05-10 12:10:46', '2024-05-10 12:10:46'),
(3, '{\"az\":\"Happy Customer\"}', '13003', '2024-05-10 12:10:57', '2024-05-10 12:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `profession` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `profession`, `desc`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Azer\"}', '{\"az\":\"Teacher\"}', '{\"az\":\"Years experience\"}', '2024-05-15 10:41:21', '2024-05-15 10:41:21'),
(2, '{\"az\":\"test\"}', '{\"az\":\"Teacher\"}', '{\"az\":\"Logix ERP restoran idarəetmə-satış proqramı ilə anbara nəzarət edə, maliyyə uçotu apara bilərsiniz.\"}', '2024-05-15 10:41:27', '2024-05-15 10:41:27'),
(3, '{\"az\":\"test 1\"}', '{\"az\":\"Teacher\"}', '{\"az\":\"Logix ERP restoran idarəetmə-satış proqramı ilə anbara nəzarət edə, maliyyə uçotu apara bilərsiniz.\"}', '2024-05-15 10:41:34', '2024-05-15 10:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `from` varchar(191) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `from`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Blog Created', 'New', 1, '2024-03-18 03:09:26', '2024-03-18 03:09:26'),
(2, 'Notification to subscriptions', 'New', 1, '2024-03-18 03:09:26', '2024-03-18 03:09:26'),
(5, 'Contact', 'New', 1, '2024-03-18 03:09:26', '2024-03-18 03:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `email_template_image`
--

CREATE TABLE `email_template_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_template_langs`
--

CREATE TABLE `email_template_langs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_template_langs`
--

INSERT INTO `email_template_langs` (`id`, `parent_id`, `lang`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(5, 1, 'en', 'Blog', '<p>Hello,&nbsp;</p><p>Welcome to {app_name}.</p><p><br></p><p>Thanks,</p><p>{app_name}</p><p><br></p>', '2024-03-18 03:09:26', '2024-03-23 14:50:58'),
(15, 1, 'tr', 'Order Complete', '<p>Merhaba,&nbsp;</p><p>{app_name}\'e hoş geldiniz.</p><p><br></p><p>Teşekkürler,</p><p>{app_name}</p><p><br></p>', '2024-03-18 03:09:26', '2024-03-23 15:31:16'),
(21, 2, 'en', 'Order Status', '<p>Hello,&nbsp;</p><p>Welcome to {app_name}.</p><p><br></p><p>Thanks,</p><p>{app_name}</p><p><br></p>', '2024-03-18 03:09:26', '2024-03-23 15:26:55'),
(31, 2, 'tr', 'Order Status', '<p>Merhaba,&nbsp;</p><p>{app_name}\'e hoş geldiniz.</p><p><br></p><p>Teşekkürler,</p><p>{app_name}</p><p><br></p>', '2024-03-18 03:09:26', '2024-03-23 15:27:08'),
(65, 1, 'az', 'Order Complete', '<p>Hello,&nbsp;</p><p>Welcome to {app_name}.</p><p><br></p><p>Thanks,</p><p>{app_name}</p><p><br></p>', '2024-03-21 08:13:53', '2024-03-23 15:30:46'),
(66, 2, 'az', 'Hello', '<p style=\"text-align: center;\"><img src=\"https://www.markup.az/uploads/setting/logo/1739517519660738.png\" alt=\"markup logo\"></p><p style=\"text-align: center;\">MarkUp</p>', '2024-03-21 08:13:53', '2024-03-23 16:09:45'),
(69, 5, 'en', 'Contact', '<p>Ad : {form_name}<br></p><p>Email: {form_email}</p><p>Telefon: {form_phone}<span style=\"font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><br></span></p><p><span style=\"font-family: var(--bs-body-font-family); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Qeyd:&nbsp; {form_message}</span></p><p><br></p><p><br></p><p>Təşəkkürlər,</p><p>{app_name}</p><p><br></p>', '2024-03-18 03:09:26', '2024-03-29 03:31:30'),
(70, 5, 'az', 'Contact', '<p>Ad : {form_name}<br></p><p>Email: {form_email}</p><p>Telefon: <span style=\"font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">{</span><span style=\"text-align: var(--bs-body-text-align);\">form_</span><span style=\"font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">phone}</span></p><p>Qeyd: {form_message}</p><p><br></p><p>Təşəkkürlər,</p><p>{app_name}</p><p><br></p>', '2024-03-28 18:21:44', '2024-03-29 03:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"How do I create an account?\",\"en\":\"How do I create an account?\"}', '{\"az\":\"Sad ipscing elitrsed diamnonu myeir mod, sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre ute riyutroui tout.\",\"en\":\"Sad ipscing elitrsed diamnonu myeir mod, sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre ute riyutroui tout.\"}', '2024-05-15 10:53:43', '2024-05-15 11:18:51'),
(2, '{\"az\":\"How do I earn Easy Ride Rewards points?\"}', '{\"az\":\"Sad ipscing elitrsed diamnonu myeir mod, sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre ute riyutroui tout.\"}', '2024-05-15 10:53:55', '2024-05-15 10:53:55'),
(3, '{\"az\":\"How can I add my credit card on the app for payments?\"}', '{\"az\":\"Sad ipscing elitrsed diamnonu myeir mod, sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre ute riyutroui tout.\"}', '2024-05-15 10:54:04', '2024-05-15 10:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `howitwork`
--

CREATE TABLE `howitwork` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `howitwork`
--

INSERT INTO `howitwork` (`id`, `image`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'uploads/howitwork/howitwork_image1715770217.png', '{\"az\":\"Create Your Route\"}', '{\"az\":\"Enter your pickup & dropoff locations or the number of hours you wish to book a car and driver for\"}', '2024-05-15 10:50:17', '2024-05-15 10:50:17'),
(2, 'uploads/howitwork/howitwork_image1715770249.png', '{\"az\":\"Choose Vehicle\"}', '{\"az\":\"Enter your pickup & dropoff locations or the number of hours you wish to book a car and driver for\"}', '2024-05-15 10:50:50', '2024-05-15 10:50:50'),
(3, 'uploads/howitwork/howitwork_image1715770268.png', '{\"az\":\"Enjoy journer\"}', '{\"az\":\"Enter your pickup & dropoff locations or the number of hours you wish to book a car and driver for\"}', '2024-05-15 10:51:08', '2024-05-15 10:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) NOT NULL,
  `fullName` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `code`, `fullName`, `created_at`, `updated_at`) VALUES
(1, 'de', 'de', NULL, NULL),
(2, 'en', 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maininformation`
--

CREATE TABLE `maininformation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` text DEFAULT NULL,
  `footer_logo` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maininformation`
--

INSERT INTO `maininformation` (`id`, `header_logo`, `footer_logo`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'uploads/maininformation/maininformation_header_logo1715338124.png', 'uploads/maininformation/maininformation_footer_logo1715338124.png', '+41 22 715 7000', '2024-05-10 14:48:45', '2024-05-10 14:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_16_144239_create_plans_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_09_28_102009_create_settings_table', 1),
(96, '1713333025_create_sociallink_table', 28),
(7, '2020_04_12_095629_create_coupons_table', 1),
(8, '2020_04_12_120749_create_user_coupons_table', 1),
(9, '2020_05_02_075614_create_email_templates_table', 1),
(10, '2020_05_02_075630_create_email_template_langs_table', 1),
(11, '2020_05_02_075647_create_user_email_templates_table', 1),
(12, '2020_05_21_065337_create_permission_tables', 1),
(13, '2021_02_02_085506_create_stores_table', 1),
(14, '2021_02_02_094240_create_user_stores_table', 1),
(15, '2021_02_03_093659_create_product_categories_table', 1),
(16, '2021_02_03_110342_create_product_taxes_table', 1),
(17, '2021_02_03_112228_create_shippings_table', 1),
(18, '2021_02_04_034943_create_products_table', 1),
(19, '2021_02_06_042547_create_subscriptions_table', 1),
(20, '2021_02_08_063716_create_product_images_table', 1),
(21, '2021_02_13_053126_create_orders_table', 1),
(22, '2021_02_15_071203_create_user_details_table', 1),
(23, '2021_02_17_070453_create_rattings_table', 1),
(24, '2021_02_26_061007_create_visits_table', 1),
(25, '2021_03_04_110817_create_plan_orders_table', 1),
(26, '2021_03_23_094310_create_product_variant_options_table', 1),
(97, '1714475394_create_about_table', 28),
(28, '2021_04_07_070019_create_page_options_table', 1),
(29, '2021_04_08_043538_create_blogs_table', 1),
(30, '2021_04_10_034521_create_product_coupons_table', 1),
(31, '2021_04_15_121323_create_blog_socials_table', 1),
(32, '2021_06_03_101323_create_admin_payment_settings', 1),
(33, '2021_06_25_041037_create_custom_massage_table', 1),
(34, '2021_07_07_084829_create_store_theme_settings_table', 1),
(35, '2021_11_17_115318_create_plan_requests_table', 1),
(36, '2022_01_10_052633_create__customers_table', 1),
(37, '2022_01_10_092146_create_purchased_products_table', 1),
(38, '2022_07_08_044639_create_store_payment_settings', 1),
(39, '2023_04_03_072342_create_pixel_fields_table', 1),
(40, '2023_05_25_062348_create_webhooks_table', 1),
(41, '2023_05_30_064523_create_express_checkout_table', 1),
(42, '2023_06_05_043450_create_landing_page_settings_table', 1),
(43, '2023_06_06_041522_create_template_table', 1),
(44, '2023_06_10_114031_create_join_us_table', 1),
(98, '1714475444_create_faq_table', 28),
(99, '1714475474_create_partner_table', 28),
(47, '2024_01_27_032719_add_trial_plan_to_users_table', 1),
(48, '2024_01_27_032746_add_trial_to_plans_table', 1),
(49, '2024_01_29_101219_add_is_refund_to_plan_orders_table', 1),
(100, '2019_12_14_000001_create_personal_access_tokens_table', 28),
(66, '2024_03_25_125246_create_home_pages_table', 14),
(53, '2024_03_25_150800_create_seo_table', 4),
(54, '2024_03_25_161204_create_images_table', 4),
(56, '2024_03_25_210404_create_abouts_table', 6),
(59, '2024_03_25_214144_create_services_table', 7),
(60, '2024_03_27_103421_create_home_page_images_table', 8),
(61, '2024_03_28_134238_create_social_settings_table', 9),
(62, '2024_03_28_195446_create_service_images_table', 10),
(63, '2024_04_01_124813_create_our_values_table', 11),
(64, '2024_04_01_144855_create_faqs_table', 12),
(65, '2024_04_05_113121_create_slides_table', 13),
(91, '1712601210_create_slide_table', 27),
(68, '1712648336_create_client_table', 16),
(69, '1712649417_create_brand_table', 17),
(89, '1712908935_create_product_attribute_table', 25),
(71, '1712661460_create_about_table', 19),
(73, '1712664426_create_service_table', 21),
(90, '1712906087_create_productimage_table', 26),
(87, '1712661683_create_product_table', 24),
(86, '1712652727_create_category_table', 24),
(88, '1712908935_create_attribute_table', 25),
(101, '2021_04_03_063418_create_locations_table', 28),
(102, '2023_06_27_113741_create_languages_table', 28),
(103, '1715326743_create_counter_table', 29),
(104, '1715326849_create_aboutdetail_table', 30),
(105, '1715326985_create_howitwork_table', 30),
(106, '1715327578_create_tag_table', 31),
(107, '1715327696_create_blog_table', 31),
(108, '2024_03_21_123049_create_pages_table', 31),
(109, '2024_03_23_094738_email_templates_image', 31),
(110, '1715335343_create_contact_table', 32),
(111, '1715335402_create_maininformation_table', 32),
(112, '1715335626_create_slider_table', 32),
(113, '1715335675_create_city_table', 32),
(114, '1715337085_create_category_table', 32),
(115, '1715337338_create_service_table', 32),
(116, '1715337385_create_customer_table', 32),
(117, '1715851475_create_serviceattribute_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `blog_cover_image` varchar(191) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `store_id` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `image`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'uploads/partners/partners_image1715770377.svg', '{\"az\":\"Eb\"}', '#', '2024-05-15 10:52:57', '2024-05-15 10:52:57'),
(2, 'uploads/partners/partners_image1715770387.svg', '{\"az\":\"NBA\"}', '#', '2024-05-15 10:53:07', '2024-05-15 10:53:07'),
(3, 'uploads/partners/partners_image1715770397.svg', '{\"az\":\"NLA\"}', '#', '2024-05-15 10:53:17', '2024-05-15 10:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `author` varchar(191) DEFAULT NULL,
  `robots` varchar(191) DEFAULT NULL,
  `canonical_url` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `model_type`, `model_id`, `description`, `title`, `image`, `author`, `robots`, `canonical_url`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\HomePage', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-25 15:59:04', '2024-03-25 15:59:04'),
(2, 'App\\Models\\HomePage', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-25 17:24:03', '2024-03-25 17:24:03'),
(3, 'App\\Models\\HomePage', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-25 17:26:39', '2024-03-25 17:26:39'),
(4, 'App\\Models\\About', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-25 17:30:08', '2024-03-25 17:30:08'),
(5, 'App\\Models\\About', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-05 08:08:39', '2024-04-05 08:08:39'),
(6, 'App\\Models\\Slide', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-08 18:38:16', '2024-04-08 18:38:16'),
(7, 'App\\Models\\Slide', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-08 18:38:33', '2024-04-08 18:38:33'),
(8, 'App\\Models\\Client', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-09 07:45:24', '2024-04-09 07:45:24'),
(9, 'App\\Models\\Brand', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-09 08:21:06', '2024-04-09 08:21:06'),
(10, 'App\\Models\\Product', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-09 11:22:46', '2024-04-09 11:22:46'),
(11, 'App\\Models\\Category', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 07:01:21', '2024-04-12 07:01:21'),
(12, 'App\\Models\\ProductImage', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 07:46:32', '2024-04-12 07:46:32'),
(13, 'App\\Models\\Product', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 08:00:37', '2024-04-12 08:00:37'),
(14, 'App\\Models\\Category', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 08:36:08', '2024-04-12 08:36:08'),
(15, 'App\\Models\\Category', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 08:36:22', '2024-04-12 08:36:22'),
(16, 'App\\Models\\Category', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 08:36:36', '2024-04-12 08:36:36'),
(17, 'App\\Models\\Product', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 08:38:39', '2024-04-12 08:38:39'),
(18, 'App\\Models\\Attribute', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 09:18:53', '2024-04-12 09:18:53'),
(19, 'App\\Models\\Attribute', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 09:19:01', '2024-04-12 09:19:01'),
(20, 'App\\Models\\Category', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 10:41:17', '2024-04-12 10:41:17'),
(21, 'App\\Models\\Product', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 10:41:26', '2024-04-12 10:41:26'),
(22, 'App\\Models\\Attribute', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 10:59:39', '2024-04-12 10:59:39'),
(23, 'App\\Models\\Attribute', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 11:13:36', '2024-04-12 11:13:36'),
(24, 'App\\Models\\Attribute', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 11:13:39', '2024-04-12 11:13:39'),
(25, 'App\\Models\\ProductAttribute', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 11:24:14', '2024-04-12 11:24:14'),
(26, 'App\\Models\\ProductImage', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 11:30:21', '2024-04-12 11:30:21'),
(27, 'App\\Models\\Product', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:28:31', '2024-04-12 12:28:31'),
(28, 'App\\Models\\Product', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:28:57', '2024-04-12 12:28:57'),
(29, 'App\\Models\\Product', 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:30:26', '2024-04-12 12:30:26'),
(30, 'App\\Models\\Product', 5, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:34:33', '2024-04-12 12:34:33'),
(31, 'App\\Models\\ProductImage', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:34:33', '2024-04-12 12:34:33'),
(32, 'App\\Models\\Product', 6, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:42:25', '2024-04-12 12:42:25'),
(33, 'App\\Models\\ProductImage', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:42:25', '2024-04-12 12:42:25'),
(34, 'App\\Models\\Product', 7, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:45:01', '2024-04-12 12:45:01'),
(35, 'App\\Models\\ProductImage', 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:45:01', '2024-04-12 12:45:01'),
(36, 'App\\Models\\Product', 8, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:46:34', '2024-04-12 12:46:34'),
(37, 'App\\Models\\ProductImage', 5, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-12 12:46:35', '2024-04-12 12:46:35'),
(38, 'App\\Models\\Product', 9, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:18:34', '2024-04-13 16:18:34'),
(39, 'App\\Models\\ProductImage', 6, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:18:34', '2024-04-13 16:18:34'),
(40, 'App\\Models\\Product', 10, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:21:35', '2024-04-13 16:21:35'),
(41, 'App\\Models\\ProductImage', 7, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:21:35', '2024-04-13 16:21:35'),
(42, 'App\\Models\\Product', 11, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:21:44', '2024-04-13 16:21:44'),
(43, 'App\\Models\\ProductImage', 8, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:21:44', '2024-04-13 16:21:44'),
(44, 'App\\Models\\Product', 12, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:22:20', '2024-04-13 16:22:20'),
(45, 'App\\Models\\ProductImage', 9, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:22:20', '2024-04-13 16:22:20'),
(46, 'App\\Models\\Product', 13, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:22:24', '2024-04-13 16:22:24'),
(47, 'App\\Models\\ProductImage', 10, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:22:24', '2024-04-13 16:22:24'),
(48, 'App\\Models\\Product', 14, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:24:10', '2024-04-13 16:24:10'),
(49, 'App\\Models\\ProductImage', 11, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:24:10', '2024-04-13 16:24:10'),
(50, 'App\\Models\\Product', 15, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:25:02', '2024-04-13 16:25:02'),
(51, 'App\\Models\\ProductImage', 12, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 16:25:02', '2024-04-13 16:25:02'),
(52, 'App\\Models\\Product', 16, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 17:12:47', '2024-04-13 17:12:47'),
(53, 'App\\Models\\Product', 17, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 17:14:35', '2024-04-13 17:14:35'),
(54, 'App\\Models\\Product', 18, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 17:14:47', '2024-04-13 17:14:47'),
(55, 'App\\Models\\Product', 19, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 17:15:07', '2024-04-13 17:15:07'),
(56, 'App\\Models\\Product', 20, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 17:15:22', '2024-04-13 17:15:22'),
(57, 'App\\Models\\Product', 21, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 17:15:44', '2024-04-13 17:15:44'),
(58, 'App\\Models\\Product', 22, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 17:17:21', '2024-04-13 17:17:21'),
(59, 'App\\Models\\Product', 23, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 17:17:38', '2024-04-13 17:17:38'),
(60, 'App\\Models\\Product', 24, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:02:17', '2024-04-13 21:02:17'),
(61, 'App\\Models\\Product', 25, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:04:22', '2024-04-13 21:04:22'),
(62, 'App\\Models\\Product', 26, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:04:25', '2024-04-13 21:04:25'),
(63, 'App\\Models\\Product', 27, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:04:39', '2024-04-13 21:04:39'),
(64, 'App\\Models\\Product', 28, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:06:25', '2024-04-13 21:06:25'),
(65, 'App\\Models\\Product', 29, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:08:55', '2024-04-13 21:08:55'),
(66, 'App\\Models\\Product', 30, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:09:21', '2024-04-13 21:09:21'),
(67, 'App\\Models\\Product', 31, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:09:34', '2024-04-13 21:09:34'),
(68, 'App\\Models\\Product', 32, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:09:47', '2024-04-13 21:09:47'),
(69, 'App\\Models\\Product', 33, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:09:58', '2024-04-13 21:09:58'),
(70, 'App\\Models\\Product', 34, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:10:04', '2024-04-13 21:10:04'),
(71, 'App\\Models\\Product', 35, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:10:13', '2024-04-13 21:10:13'),
(72, 'App\\Models\\Product', 36, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:11:43', '2024-04-13 21:11:43'),
(73, 'App\\Models\\ProductImage', 13, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:11:43', '2024-04-13 21:11:43'),
(74, 'App\\Models\\Product', 37, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:12:06', '2024-04-13 21:12:06'),
(75, 'App\\Models\\Product', 38, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:14:51', '2024-04-13 21:14:51'),
(76, 'App\\Models\\Product', 39, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:15:33', '2024-04-13 21:15:33'),
(77, 'App\\Models\\Product', 40, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:17:23', '2024-04-13 21:17:23'),
(78, 'App\\Models\\ProductImage', 14, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:17:23', '2024-04-13 21:17:23'),
(79, 'App\\Models\\ProductImage', 15, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:17:23', '2024-04-13 21:17:23'),
(80, 'App\\Models\\ProductImage', 16, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:17:23', '2024-04-13 21:17:23'),
(81, 'App\\Models\\ProductImage', 17, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:17:23', '2024-04-13 21:17:23'),
(82, 'App\\Models\\Product', 41, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:18:50', '2024-04-13 21:18:50'),
(83, 'App\\Models\\ProductImage', 18, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:18:50', '2024-04-13 21:18:50'),
(84, 'App\\Models\\ProductImage', 19, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:18:50', '2024-04-13 21:18:50'),
(85, 'App\\Models\\ProductImage', 20, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:18:50', '2024-04-13 21:18:50'),
(86, 'App\\Models\\ProductImage', 21, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:18:50', '2024-04-13 21:18:50'),
(87, 'App\\Models\\Product', 42, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:20:08', '2024-04-13 21:20:08'),
(88, 'App\\Models\\ProductImage', 22, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:20:08', '2024-04-13 21:20:08'),
(89, 'App\\Models\\ProductImage', 23, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:20:08', '2024-04-13 21:20:08'),
(90, 'App\\Models\\ProductImage', 24, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:20:08', '2024-04-13 21:20:08'),
(91, 'App\\Models\\ProductImage', 25, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-13 21:20:08', '2024-04-13 21:20:08'),
(92, 'App\\Models\\Slide', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-14 21:30:40', '2024-04-14 21:30:40'),
(93, 'App\\Models\\Brand', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-14 21:44:44', '2024-04-14 21:44:44'),
(94, 'App\\Models\\Brand', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-14 21:44:50', '2024-04-14 21:44:50'),
(95, 'App\\Models\\Brand', 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-14 21:44:57', '2024-04-14 21:44:57'),
(96, 'App\\Models\\Brand', 5, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-14 21:45:02', '2024-04-14 21:45:02'),
(97, 'App\\Models\\Counter', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:10:34', '2024-05-10 12:10:34'),
(98, 'App\\Models\\Counter', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:10:46', '2024-05-10 12:10:46'),
(99, 'App\\Models\\Counter', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:10:57', '2024-05-10 12:10:57'),
(100, 'App\\Models\\AboutDetail', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:24:48', '2024-05-10 12:24:48'),
(101, 'App\\Models\\AboutDetail', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:25:08', '2024-05-10 12:25:08'),
(102, 'App\\Models\\AboutDetail', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:25:24', '2024-05-10 12:25:24'),
(103, 'App\\Models\\AboutDetail', 4, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:26:36', '2024-05-10 12:26:36'),
(104, 'App\\Models\\AboutDetail', 5, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:26:54', '2024-05-10 12:26:54'),
(105, 'App\\Models\\AboutDetail', 6, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:27:12', '2024-05-10 12:27:12'),
(106, 'App\\Models\\Tag', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:27:34', '2024-05-10 12:27:34'),
(107, 'App\\Models\\Tag', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:31:47', '2024-05-10 12:31:47'),
(108, 'App\\Models\\Blog', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 13:59:33', '2024-05-10 13:59:33'),
(109, 'App\\Models\\Contact', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 14:43:03', '2024-05-10 14:43:03'),
(110, 'App\\Models\\Contact', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 14:43:29', '2024-05-10 14:43:29'),
(111, 'App\\Models\\SocialLink', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 14:47:36', '2024-05-10 14:47:36'),
(112, 'App\\Models\\MainInformation', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 14:48:45', '2024-05-10 14:48:45'),
(113, 'App\\Models\\Slider', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 14:53:08', '2024-05-10 14:53:08'),
(114, 'App\\Models\\City', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 14:57:08', '2024-05-10 14:57:08'),
(115, 'App\\Models\\Category', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 15:28:49', '2024-05-10 15:28:49'),
(116, 'App\\Models\\Category', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 15:29:06', '2024-05-10 15:29:06'),
(117, 'App\\Models\\Service', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 16:01:06', '2024-05-10 16:01:06'),
(118, 'App\\Models\\About', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:18:55', '2024-05-15 10:18:55'),
(119, 'App\\Models\\Customer', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:41:21', '2024-05-15 10:41:21'),
(120, 'App\\Models\\Customer', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:41:27', '2024-05-15 10:41:27'),
(121, 'App\\Models\\Customer', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:41:34', '2024-05-15 10:41:34'),
(122, 'App\\Models\\HowItWork', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:50:17', '2024-05-15 10:50:17'),
(123, 'App\\Models\\HowItWork', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:50:50', '2024-05-15 10:50:50'),
(124, 'App\\Models\\HowItWork', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:51:08', '2024-05-15 10:51:08'),
(125, 'App\\Models\\Partner', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:52:57', '2024-05-15 10:52:57'),
(126, 'App\\Models\\Partner', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:53:07', '2024-05-15 10:53:07'),
(127, 'App\\Models\\Partner', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:53:17', '2024-05-15 10:53:17'),
(128, 'App\\Models\\Faq', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:53:43', '2024-05-15 10:53:43'),
(129, 'App\\Models\\Faq', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:53:55', '2024-05-15 10:53:55'),
(130, 'App\\Models\\Faq', 3, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-15 10:54:04', '2024-05-15 10:54:04'),
(131, 'App\\Models\\ServiceAttribute', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 09:40:23', '2024-05-16 09:40:23'),
(132, 'App\\Models\\Blog', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-16 10:14:14', '2024-05-16 10:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `category_id` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `desc`, `image`, `category_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"test\",\"ru\":\"test\"}', '{\"en\":\"<p>test</p>\",\"ru\":\"<p>test</p>\"}', 'uploads/service/service_image1715342466.png', '2', '{\"ru\":\"test\",\"en\":\"test\"}', '2024-05-10 16:01:06', '2024-05-16 09:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `serviceattribute`
--

CREATE TABLE `serviceattribute` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` text DEFAULT NULL,
  `value` text DEFAULT NULL,
  `service_id` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serviceattribute`
--

INSERT INTO `serviceattribute` (`id`, `key`, `value`, `service_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"test 1\"}', '{\"en\":\"test 1\"}', '1', 'uploads/serviceattribute/serviceattribute_image1715852423.jpg', '2024-05-16 09:40:23', '2024-05-16 09:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'local_storage_validation', 'jpg,jpeg,png,xlsx,xls,csv,pdf,webp,svg', 1, '2024-03-17 23:09:26', '2024-03-17 23:09:26'),
(2, 'wasabi_storage_validation', 'jpg,jpeg,png,xlsx,xls,csv,pdf,webp,svg', 1, '2024-03-17 23:09:26', '2024-03-17 23:09:26'),
(3, 's3_storage_validation', 'jpg,jpeg,png,xlsx,xls,csv,pdf,webp,svg', 1, '2024-03-17 23:09:26', '2024-03-17 23:09:26'),
(4, 'local_storage_max_upload_size', '2048000', 1, '2024-03-17 23:09:26', '2024-03-17 23:09:26'),
(5, 'wasabi_max_upload_size', '2048000', 1, '2024-03-17 23:09:26', '2024-03-17 23:09:26'),
(6, 's3_max_upload_size', '2048000', 1, '2024-03-17 23:09:26', '2024-03-17 23:09:26'),
(7, 'storage_setting', 'local', 1, '2024-03-17 23:09:26', '2024-03-17 23:09:26'),
(8, 'SITE_RTL', 'off', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(9, 'title_text', 'New', 1, NULL, '2024-03-25 05:04:03'),
(10, 'footer_text', 'New', 1, NULL, '2024-03-25 05:04:03'),
(11, 'default_language', 'az', 1, '0000-00-00 00:00:00', '2024-03-29 06:49:03'),
(12, 'currency_symbol', 'aa', 1, NULL, NULL),
(13, 'currency', 'AZN', 1, NULL, NULL),
(14, 'display_landing_page', 'off', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(15, 'signup_button', 'off', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(16, 'email_verification', 'off', 1, '0000-00-00 00:00:00', '2024-03-28 17:25:11'),
(17, 'color', 'theme-6', 1, '0000-00-00 00:00:00', '2024-03-28 17:26:15'),
(18, 'color_flag', 'false', 1, '0000-00-00 00:00:00', '2024-03-28 17:26:15'),
(19, 'cust_theme_bg', 'off', 1, '0000-00-00 00:00:00', '2024-03-28 17:25:11'),
(20, 'cust_darklayout', 'off', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(21, 'mail_driver', 'smtp', 1, NULL, NULL),
(22, 'mail_host', 'smtp.hostinger.com', 1, NULL, NULL),
(23, 'mail_port', '465', 1, NULL, NULL),
(24, 'mail_username', 'test@markup.az', 1, NULL, NULL),
(25, 'mail_password', 'Salam123!', 1, NULL, NULL),
(26, 'mail_encryption', 'SSL', 1, NULL, NULL),
(27, 'mail_from_name', 'test@markup.az', 1, NULL, NULL),
(28, 'mail_from_address', 'test@markup.az', 1, NULL, NULL),
(29, 'blog_notifications', 'off', 1, '0000-00-00 00:00:00', '2024-03-28 17:25:11'),
(55, 'custom_color', '#000000', 1, '0000-00-00 00:00:00', '2024-03-28 17:29:17'),
(56, 'social_text', '333', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(57, 'email_text', '333333333333333333', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(58, 'contact_text', '333333333333', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(59, 'phone', '+994555555555', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(60, 'email', 'aga.mustafayevvv@gmail.com', 1, '0000-00-00 00:00:00', '2024-03-27 16:55:23'),
(61, 'contact_image1', 'uploads/contact/contact_contact_image11711660321.png', 1, '2024-03-28 07:46:59', '2024-03-28 17:12:01'),
(62, 'contact_image2', 'uploads/contact/contact_contact_image21711660321.png', 1, '2024-03-28 07:47:24', '2024-03-28 17:12:01'),
(63, 'map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.832395929507!2d-73.99053220947113!3d40.743713361911816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a7adf1fcf3%3A0xb9fa8d899b755215!2s71%20Madison%20Ave%2C%20New%20York%2C%20NY%2010016%2C%20USA!5e0!3m2!1sen!2sin!4v1688107889372!5m2!1sen!2sin\" width=\"1920\" height=\"690\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2024-03-28 17:25:11', '2024-03-28 17:25:41'),
(80, 'SITE_RTL', 'off', 1, NULL, NULL),
(81, 'SITE_RTL', 'off', 1, NULL, NULL),
(82, 'SITE_RTL', 'off', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'uploads/slider/slider_image1715338387.png', '{\"az\":\"Test title\"}', '{\"az\":\"Test desc\"}', '2024-05-10 14:53:07', '2024-05-10 14:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `sociallink`
--

CREATE TABLE `sociallink` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallink`
--

INSERT INTO `sociallink` (`id`, `icon`, `link`, `name`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook-square', 'facebook.com', 'Facebook', '2024-05-10 14:47:36', '2024-05-10 14:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Tourist\"}', '{\"az\":\"tourist\"}', '2024-05-10 12:27:33', '2024-05-10 12:27:33'),
(2, '{\"az\":\"Book\"}', '{\"az\":\"book\"}', '2024-05-10 12:31:47', '2024-05-10 12:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `lang` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `mode` varchar(191) NOT NULL DEFAULT 'light',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_enable_login` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `lang`, `avatar`, `type`, `is_admin`, `created_by`, `mode`, `is_active`, `is_enable_login`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@example.com', '2024-03-18 03:09:25', '$2y$10$kML5EmryMGvA0PwyzPxSHOzokYlago8eE51TKthrSX3aahvLXpiCe', NULL, 'en', NULL, 1, 1, 0, 'light', 1, 1, '2024-03-18 03:09:26', '2024-05-15 11:34:49'),
(4, 'Aga Mustafayev', 'aga.mustafayevvv@gmail.com', '2024-03-25 08:03:43', NULL, NULL, 'az', NULL, 1, 0, 1, 'light', 1, 0, '2024-03-25 08:03:43', '2024-03-25 08:03:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutdetail`
--
ALTER TABLE `aboutdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template_image`
--
ALTER TABLE `email_template_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template_langs`
--
ALTER TABLE `email_template_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howitwork`
--
ALTER TABLE `howitwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maininformation`
--
ALTER TABLE `maininformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
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
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceattribute`
--
ALTER TABLE `serviceattribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallink`
--
ALTER TABLE `sociallink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutdetail`
--
ALTER TABLE `aboutdetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_template_image`
--
ALTER TABLE `email_template_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_template_langs`
--
ALTER TABLE `email_template_langs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `howitwork`
--
ALTER TABLE `howitwork`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maininformation`
--
ALTER TABLE `maininformation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `serviceattribute`
--
ALTER TABLE `serviceattribute`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sociallink`
--
ALTER TABLE `sociallink`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
