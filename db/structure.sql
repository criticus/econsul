-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2018 at 05:33 AM
-- Server version: 5.5.54
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uk_mfa`
--
CREATE DATABASE IF NOT EXISTS `uk_mfa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uk_mfa`;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_commentmeta`
--

DROP TABLE IF EXISTS `_66P_commentmeta`;
CREATE TABLE IF NOT EXISTS `_66P_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_comments`
--

DROP TABLE IF EXISTS `_66P_comments`;
CREATE TABLE IF NOT EXISTS `_66P_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_appointments`
--

DROP TABLE IF EXISTS `_66P_ea_appointments`;
CREATE TABLE IF NOT EXISTS `_66P_ea_appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `worker` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text,
  `status` varchar(45) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `price` decimal(10,2) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `session` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointments_location` (`location`),
  KEY `appointments_service` (`service`),
  KEY `appointments_worker` (`worker`)
) ENGINE=MyISAM AUTO_INCREMENT=190 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_connections`
--

DROP TABLE IF EXISTS `_66P_ea_connections`;
CREATE TABLE IF NOT EXISTS `_66P_ea_connections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `worker` int(11) DEFAULT NULL,
  `day_of_week` varchar(60) DEFAULT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `day_from` date DEFAULT NULL,
  `day_to` date DEFAULT NULL,
  `is_working` smallint(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `location_to_connection` (`location`),
  KEY `service_to_location` (`service`),
  KEY `worker_to_connection` (`worker`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_error_logs`
--

DROP TABLE IF EXISTS `_66P_ea_error_logs`;
CREATE TABLE IF NOT EXISTS `_66P_ea_error_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `error_type` varchar(50) DEFAULT NULL,
  `errors` text,
  `errors_data` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_fields`
--

DROP TABLE IF EXISTS `_66P_ea_fields`;
CREATE TABLE IF NOT EXISTS `_66P_ea_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=777 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_locations`
--

DROP TABLE IF EXISTS `_66P_ea_locations`;
CREATE TABLE IF NOT EXISTS `_66P_ea_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `cord` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_meta_fields`
--

DROP TABLE IF EXISTS `_66P_ea_meta_fields`;
CREATE TABLE IF NOT EXISTS `_66P_ea_meta_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `mixed` text NOT NULL,
  `default_value` varchar(50) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  `required` tinyint(4) NOT NULL,
  `validation` varchar(50) DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_options`
--

DROP TABLE IF EXISTS `_66P_ea_options`;
CREATE TABLE IF NOT EXISTS `_66P_ea_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ea_key` varchar(45) DEFAULT NULL,
  `ea_value` text,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=579 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_services`
--

DROP TABLE IF EXISTS `_66P_ea_services`;
CREATE TABLE IF NOT EXISTS `_66P_ea_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `slot_step` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_ea_staff`
--

DROP TABLE IF EXISTS `_66P_ea_staff`;
CREATE TABLE IF NOT EXISTS `_66P_ea_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_links`
--

DROP TABLE IF EXISTS `_66P_links`;
CREATE TABLE IF NOT EXISTS `_66P_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_options`
--

DROP TABLE IF EXISTS `_66P_options`;
CREATE TABLE IF NOT EXISTS `_66P_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=MyISAM AUTO_INCREMENT=5158 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_postmeta`
--

DROP TABLE IF EXISTS `_66P_postmeta`;
CREATE TABLE IF NOT EXISTS `_66P_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=363 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_66P_postmeta`
--

INSERT INTO `_66P_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(3, 4, '_edit_last', '1'),
(4, 4, '_edit_lock', '1512084453:1'),
(9, 11, '_wp_attached_file', '2017/11/MFAembl-tmb-270x180.jpg'),
(10, 11, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:270;s:6:\"height\";i:180;s:4:\"file\";s:31:\"2017/11/MFAembl-tmb-270x180.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:31:\"MFAembl-tmb-270x180-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(33, 23, '_menu_item_type', 'post_type'),
(34, 23, '_menu_item_menu_item_parent', '0'),
(35, 23, '_menu_item_object_id', '7'),
(36, 23, '_menu_item_object', 'page'),
(37, 23, '_menu_item_target', ''),
(38, 23, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(39, 23, '_menu_item_xfn', ''),
(40, 23, '_menu_item_url', ''),
(41, 23, '_menu_item_orphaned', '1510411794'),
(51, 25, '_menu_item_type', 'post_type'),
(52, 25, '_menu_item_menu_item_parent', '0'),
(53, 25, '_menu_item_object_id', '4'),
(54, 25, '_menu_item_object', 'page'),
(55, 25, '_menu_item_target', ''),
(56, 25, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(57, 25, '_menu_item_xfn', ''),
(58, 25, '_menu_item_url', ''),
(59, 25, '_menu_item_orphaned', '1510411796'),
(60, 26, '_menu_item_type', 'post_type'),
(61, 26, '_menu_item_menu_item_parent', '0'),
(62, 26, '_menu_item_object_id', '7'),
(63, 26, '_menu_item_object', 'page'),
(64, 26, '_menu_item_target', ''),
(65, 26, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(66, 26, '_menu_item_xfn', ''),
(67, 26, '_menu_item_url', ''),
(68, 26, '_menu_item_orphaned', '1510411797'),
(78, 28, '_menu_item_type', 'post_type'),
(79, 28, '_menu_item_menu_item_parent', '0'),
(80, 28, '_menu_item_object_id', '7'),
(81, 28, '_menu_item_object', 'page'),
(82, 28, '_menu_item_target', ''),
(83, 28, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(84, 28, '_menu_item_xfn', ''),
(85, 28, '_menu_item_url', ''),
(86, 28, '_menu_item_orphaned', '1510423050'),
(96, 30, '_menu_item_type', 'post_type'),
(97, 30, '_menu_item_menu_item_parent', '0'),
(98, 30, '_menu_item_object_id', '4'),
(99, 30, '_menu_item_object', 'page'),
(100, 30, '_menu_item_target', ''),
(101, 30, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(102, 30, '_menu_item_xfn', ''),
(103, 30, '_menu_item_url', ''),
(104, 30, '_menu_item_orphaned', '1510423053'),
(105, 31, '_menu_item_type', 'post_type'),
(106, 31, '_menu_item_menu_item_parent', '0'),
(107, 31, '_menu_item_object_id', '7'),
(108, 31, '_menu_item_object', 'page'),
(109, 31, '_menu_item_target', ''),
(110, 31, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(111, 31, '_menu_item_xfn', ''),
(112, 31, '_menu_item_url', ''),
(113, 31, '_menu_item_orphaned', '1510423054'),
(129, 4, '_wp_page_template', 'template-appointment.php'),
(190, 7, '_edit_lock', '1512077501:1'),
(191, 7, '_edit_last', '1'),
(192, 7, '_wp_page_template', 'default'),
(203, 93, '_edit_last', '1'),
(204, 93, '_edit_lock', '1513040015:1'),
(205, 94, '_wp_attached_file', '2017/11/ZayavaZPnew-3.doc'),
(206, 93, '_wp_page_template', 'template-appointment.php'),
(207, 96, '_menu_item_type', 'post_type'),
(208, 96, '_menu_item_menu_item_parent', '0'),
(209, 96, '_menu_item_object_id', '7'),
(210, 96, '_menu_item_object', 'page'),
(211, 96, '_menu_item_target', ''),
(212, 96, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(213, 96, '_menu_item_xfn', ''),
(214, 96, '_menu_item_url', ''),
(215, 96, '_menu_item_orphaned', '1510429887'),
(216, 97, '_menu_item_type', 'post_type'),
(217, 97, '_menu_item_menu_item_parent', '0'),
(218, 97, '_menu_item_object_id', '7'),
(219, 97, '_menu_item_object', 'page'),
(220, 97, '_menu_item_target', ''),
(221, 97, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(222, 97, '_menu_item_xfn', ''),
(223, 97, '_menu_item_url', ''),
(224, 97, '_menu_item_orphaned', '1510429888'),
(225, 98, '_menu_item_type', 'post_type'),
(226, 98, '_menu_item_menu_item_parent', '0'),
(227, 98, '_menu_item_object_id', '4'),
(228, 98, '_menu_item_object', 'page'),
(229, 98, '_menu_item_target', ''),
(230, 98, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(231, 98, '_menu_item_xfn', ''),
(232, 98, '_menu_item_url', ''),
(233, 98, '_menu_item_orphaned', '1510429889'),
(234, 99, '_menu_item_type', 'post_type'),
(235, 99, '_menu_item_menu_item_parent', '0'),
(236, 99, '_menu_item_object_id', '93'),
(237, 99, '_menu_item_object', 'page'),
(238, 99, '_menu_item_target', ''),
(239, 99, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(240, 99, '_menu_item_xfn', ''),
(241, 99, '_menu_item_url', ''),
(242, 99, '_menu_item_orphaned', '1510429890'),
(284, 108, 'plans', '[]'),
(283, 108, 'expiration', '1512086340'),
(282, 108, 'viewed', '1'),
(281, 108, 'version', ''),
(280, 108, 'theme', ''),
(279, 108, 'plugins', '[]'),
(278, 108, 'location', '[\"everywhere\"]'),
(277, 108, 'dismissable', '1'),
(276, 108, 'type', 'success'),
(275, 108, 'notification_id', '532'),
(362, 172, '_wp_trash_meta_time', '1513037262'),
(360, 169, '_wp_attached_file', '2017/12/Application-sample.doc'),
(361, 172, '_wp_trash_meta_status', 'publish'),
(359, 168, '_wp_attached_file', '2017/12/Application.doc'),
(308, 124, 'notification_id', '534'),
(309, 124, 'type', 'success'),
(310, 124, 'dismissable', '1'),
(311, 124, 'location', '[\"everywhere\"]'),
(312, 124, 'plugins', '[]'),
(313, 124, 'theme', ''),
(314, 124, 'version', ''),
(315, 124, 'viewed', '1'),
(316, 124, 'expiration', '1511996400'),
(317, 124, 'plans', '[\"none\"]'),
(357, 164, '_wp_attached_file', '2017/11/Passport-application.doc'),
(358, 165, '_wp_attached_file', '2017/11/Passport-application-sample.doc');

-- --------------------------------------------------------

--
-- Table structure for table `_66P_posts`
--

DROP TABLE IF EXISTS `_66P_posts`;
CREATE TABLE IF NOT EXISTS `_66P_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(255) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM AUTO_INCREMENT=176 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_termmeta`
--

DROP TABLE IF EXISTS `_66P_termmeta`;
CREATE TABLE IF NOT EXISTS `_66P_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `_66P_terms`
--

DROP TABLE IF EXISTS `_66P_terms`;
CREATE TABLE IF NOT EXISTS `_66P_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_66P_terms`
--

INSERT INTO `_66P_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0),
(2, 'Menu 1', 'menu-1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `_66P_term_relationships`
--

DROP TABLE IF EXISTS `_66P_term_relationships`;
CREATE TABLE IF NOT EXISTS `_66P_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_66P_term_relationships`
--

INSERT INTO `_66P_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `_66P_term_taxonomy`
--

DROP TABLE IF EXISTS `_66P_term_taxonomy`;
CREATE TABLE IF NOT EXISTS `_66P_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_66P_term_taxonomy`
--

INSERT INTO `_66P_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `_66P_usermeta`
--

DROP TABLE IF EXISTS `_66P_usermeta`;
CREATE TABLE IF NOT EXISTS `_66P_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `_66P_usermeta`
--

INSERT INTO `_66P_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'comment_shortcuts', 'false'),
(7, 1, 'admin_color', 'fresh'),
(8, 1, 'use_ssl', '0'),
(9, 1, 'show_admin_bar_front', 'true'),
(10, 1, 'locale', ''),
(11, 1, '_66P_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(12, 1, '_66P_user_level', '10'),
(13, 1, 'dismissed_wp_pointers', 'theme_editor_notice,omapi_please_connect_notice'),
(14, 1, 'default_password_nag', ''),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"97daa8549cdd13d26b29e3c0d610eb2718ebebed4c0a78fb0059d65b5866f60e\";a:4:{s:10:\"expiration\";i:1515359452;s:2:\"ip\";s:14:\"208.125.11.106\";s:2:\"ua\";s:101:\"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36\";s:5:\"login\";i:1515186652;}}'),
(17, 1, '_66P_user-settings', 'hidetb=1&libraryContent=browse&editor=tinymce'),
(18, 1, '_66P_user-settings-time', '1512084505'),
(19, 1, 'jpo_tracks_anon_id', 'jpo:wb0mSf8Z3F6lIbCDSdmeAfia'),
(20, 1, '_66P_dashboard_quick_press_last_post_id', '174'),
(21, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:13:\"162.241.244.0\";}'),
(22, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(23, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}'),
(24, 1, 'nav_menu_recently_edited', '2'),
(26, 2, 'nickname', 'criticus'),
(27, 2, 'first_name', ''),
(28, 2, 'last_name', ''),
(29, 2, 'description', ''),
(30, 2, 'rich_editing', 'true'),
(31, 2, 'syntax_highlighting', 'true'),
(25, 1, 'metaboxhidden_dashboard', 'a:1:{i:0;s:18:\"jetpack-onboarding\";}'),
(32, 2, 'comment_shortcuts', 'false'),
(33, 2, 'admin_color', 'fresh'),
(34, 2, 'use_ssl', '0'),
(35, 2, 'show_admin_bar_front', 'true'),
(36, 2, 'locale', ''),
(37, 2, '_66P_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(38, 2, '_66P_user_level', '10'),
(39, 2, 'dismissed_wp_pointers', 'wp496_privacy'),
(40, 2, 'default_password_nag', ''),
(41, 2, 'session_tokens', 'a:1:{s:64:\"b4cdb92141c40adf6f743f8557561839ed9a6fbd1ffc5e2ec73d7f7e972f4889\";a:4:{s:10:\"expiration\";i:1529334525;s:2:\"ip\";s:14:\"148.75.107.193\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36\";s:5:\"login\";i:1529161725;}}'),
(42, 2, '_66P_dashboard_quick_press_last_post_id', '175'),
(43, 2, 'community-events-location', 'a:1:{s:2:\"ip\";s:12:\"148.75.107.0\";}'),
(44, 3, 'nickname', 'dasha'),
(45, 3, 'first_name', 'Dasha'),
(46, 3, 'last_name', 'Ozimko'),
(47, 3, 'description', ''),
(48, 3, 'rich_editing', 'true'),
(49, 3, 'syntax_highlighting', 'true'),
(50, 3, 'comment_shortcuts', 'false'),
(51, 3, 'admin_color', 'fresh'),
(52, 3, 'use_ssl', '0'),
(53, 3, 'show_admin_bar_front', 'true'),
(54, 3, 'locale', ''),
(55, 3, '_66P_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(56, 3, '_66P_user_level', '10'),
(57, 3, 'dismissed_wp_pointers', 'wp496_privacy');

-- --------------------------------------------------------

--
-- Table structure for table `_66P_users`
--

DROP TABLE IF EXISTS `_66P_users`;
CREATE TABLE IF NOT EXISTS `_66P_users` (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
