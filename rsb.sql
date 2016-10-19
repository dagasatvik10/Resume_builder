-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2016 at 02:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `mapping_subsection_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `mapping_subsection_id`, `content`, `created_at`, `updated_at`) VALUES
(25, 87, '', '2016-09-11 16:19:37', '2016-09-11 16:19:37'),
(42, 92, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(43, 93, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(44, 94, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(45, 95, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(46, 96, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(47, 97, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(48, 98, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(49, 99, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(50, 100, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(51, 101, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(52, 102, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(53, 103, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(54, 104, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(55, 105, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(56, 106, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(57, 107, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(58, 108, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(59, 109, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(60, 110, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(61, 111, '', '2016-09-11 17:45:26', '2016-09-11 17:45:26'),
(62, 112, 'nndf', '2016-09-11 23:43:43', '2016-09-11 23:43:43'),
(63, 113, '', '2016-09-11 23:43:43', '2016-09-11 23:43:43'),
(64, 114, '', '2016-09-11 23:43:43', '2016-09-11 23:43:43'),
(65, 115, '', '2016-09-11 23:43:43', '2016-09-11 23:43:43'),
(66, 116, '', '2016-09-11 23:43:43', '2016-09-11 23:43:43'),
(67, 117, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(68, 118, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(69, 119, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(70, 120, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(71, 121, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(72, 122, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(73, 123, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(74, 124, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(75, 125, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(76, 126, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(77, 127, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(78, 128, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(79, 129, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(80, 130, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(81, 131, '', '2016-09-11 23:43:44', '2016-09-11 23:43:44'),
(82, 152, 'book_lelo', '2016-09-16 04:14:20', '2016-09-16 04:14:20'),
(83, 153, 'whjdghsjdvaaskhvchsa hj ', '2016-09-16 04:14:20', '2016-09-18 00:58:47'),
(84, 132, 'smksdjdkshj', '2016-09-18 00:57:10', '2016-09-18 00:57:10'),
(85, 133, 'dagasatvik@gmail.com', '2016-09-18 00:57:10', '2016-09-18 01:07:53'),
(86, 134, 'sjkdjdjhdf', '2016-09-18 00:57:10', '2016-09-18 00:57:18'),
(87, 135, 'udfhdfhfd', '2016-09-18 00:57:10', '2016-09-18 00:57:23'),
(88, 136, 'dkjjhdkjhfjk', '2016-09-18 00:57:10', '2016-09-18 00:57:24'),
(89, 137, '1213', '2016-09-18 00:57:10', '2016-09-18 00:57:27'),
(90, 138, '2112', '2016-09-18 00:57:10', '2016-09-18 00:57:30'),
(91, 141, 'dkjdnfjkfdjdf', '2016-09-18 00:57:10', '2016-09-18 00:57:36'),
(92, 142, 'sdnjdsjsj jvlsjcnjcdlsjidsapjfpasdjkcnjksdbvlkjdsjvjkadsjknvlklkasnkjv mnsad vbjksadnjvbjosdaiovnosdanjvnjldsajcklnsadbvksdnvldslvds', '2016-09-18 00:57:10', '2016-09-18 00:58:07'),
(93, 143, 'jjasjsdkhs', '2016-09-18 00:57:10', '2016-09-18 00:58:11'),
(94, 144, '17198721128716', '2016-09-18 00:57:10', '2016-09-18 00:58:17'),
(95, 145, 'nsjkhsdjdsgdghjsdg', '2016-09-18 00:57:10', '2016-09-18 00:58:25'),
(96, 146, 'jdhshksdhjdsh', '2016-09-18 00:57:10', '2016-09-18 00:58:27'),
(97, 147, 'sjahjhsdghjsgd', '2016-09-18 00:57:10', '2016-09-18 00:58:30'),
(98, 148, 'jkdsjjhsfbhj', '2016-09-18 00:57:10', '2016-09-18 00:58:31'),
(99, 149, '2187', '2016-09-18 00:57:10', '2016-09-18 00:58:38'),
(100, 150, '2819289', '2016-09-18 00:57:10', '2016-09-18 00:58:35'),
(101, 151, 'dsnjhdsjhdsgvhgsavvhsvhcbkasbdhvbhjsbdjvbcudsabbchjdsabcjhsjhvhjshjachjsbdahcb', '2016-09-18 00:57:10', '2016-09-18 00:58:43'),
(102, 154, 'satvikdaga10@gmail.com', '2016-09-18 00:57:13', '2016-09-18 01:08:05'),
(103, 155, 'djdfhkfdhfd', '2016-09-18 00:57:18', '2016-09-18 00:57:21'),
(105, 157, 'asdsdds', '2016-09-18 00:57:49', '2016-09-18 00:57:54'),
(106, 158, 'dssddsd', '2016-09-18 00:57:54', '2016-09-18 00:57:57'),
(107, 159, 'sddssd', '2016-09-18 00:57:57', '2016-09-18 00:57:59'),
(108, 160, '2171866121', '2016-09-18 00:58:18', '2016-09-18 00:58:22'),
(119, 171, 'dagasatvik10@gmail.com', '2016-09-18 01:08:05', '2016-09-18 01:08:16'),
(122, 174, 'imgupldr.io', '2016-09-18 01:31:32', '2016-09-18 01:31:32'),
(123, 175, '', '2016-09-18 01:31:32', '2016-09-18 01:31:32'),
(124, 176, 'SI_blogger', '2016-09-18 01:31:32', '2016-09-18 01:31:32'),
(125, 177, '', '2016-09-18 01:31:32', '2016-09-18 01:31:32'),
(126, 178, 'vanitycubeblog', '2016-09-18 01:31:32', '2016-09-18 01:31:32'),
(127, 179, '', '2016-09-18 01:31:32', '2016-09-18 01:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `linkedin_details`
--

CREATE TABLE `linkedin_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profilePic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linkedin_details`
--

INSERT INTO `linkedin_details` (`id`, `user_id`, `name`, `email`, `profilePic`, `created_at`, `updated_at`) VALUES
(1, 1, 'Satvik Daga', 'dagasatvik@gmail.com', 'https://media.licdn.com/mpr/mprx/0_0YE3nLnbpY_GdrRrYBBb-7QGD1teyK9KfqB5iRU3m1PHyy9Ms7n_TXFCO--XRyUnYRBXbaQFDR1HYTJMezRmTO63sR1eYTF9fzRiqLVTf3CTY9nxflIG-JV2E5', '2016-09-11 08:33:32', '2016-09-11 08:33:32'),
(2, 2, 'Satvik Daga', 'dagasatvik@gmail.com', 'https://media.licdn.com/mpr/mprx/0_0YE3nLnbpY_GdrRrYBBb-7QGD1teyK9KfqB5iRU3m1PHyy9Ms7n_TXFCO--XRyUnYRBXbaQFDR1HYTJMezRmTO63sR1eYTF9fzRiqLVTf3CTY9nxflIG-JV2E5', '2016-09-16 04:23:33', '2016-09-16 04:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_sections`
--

CREATE TABLE `mapping_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `resume_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mapping_sections`
--

INSERT INTO `mapping_sections` (`id`, `resume_id`, `section_id`, `created_at`, `updated_at`) VALUES
(38, 3, 1, NULL, NULL),
(39, 3, 2, NULL, NULL),
(40, 3, 3, NULL, NULL),
(41, 3, 4, NULL, NULL),
(42, 3, 5, NULL, NULL),
(43, 3, 6, NULL, NULL),
(44, 3, 7, NULL, NULL),
(45, 3, 46, NULL, NULL),
(46, 3, 47, NULL, NULL),
(47, 3, 48, NULL, NULL),
(48, 3, 49, NULL, NULL),
(49, 3, 50, NULL, NULL),
(50, 3, 51, NULL, NULL),
(51, 3, 52, NULL, NULL),
(52, 3, 53, NULL, NULL),
(53, 4, 1, NULL, NULL),
(54, 4, 2, NULL, NULL),
(55, 4, 3, NULL, NULL),
(56, 4, 4, NULL, NULL),
(57, 4, 5, NULL, NULL),
(58, 4, 6, NULL, NULL),
(59, 4, 7, NULL, NULL),
(60, 5, 1, NULL, NULL),
(61, 5, 2, NULL, NULL),
(62, 5, 3, NULL, NULL),
(63, 5, 4, NULL, NULL),
(64, 5, 5, NULL, NULL),
(65, 5, 6, NULL, NULL),
(66, 5, 7, NULL, NULL),
(67, 6, 1, NULL, NULL),
(68, 6, 2, NULL, NULL),
(70, 6, 4, NULL, NULL),
(71, 6, 5, NULL, NULL),
(72, 6, 6, NULL, NULL),
(73, 6, 7, NULL, NULL),
(74, 6, 3, NULL, NULL),
(87, 6, 3, NULL, NULL),
(88, 6, 3, NULL, NULL),
(89, 6, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapping_subsections`
--

CREATE TABLE `mapping_subsections` (
  `id` int(10) UNSIGNED NOT NULL,
  `mapping_section_id` int(10) UNSIGNED NOT NULL,
  `subsection_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mapping_subsections`
--

INSERT INTO `mapping_subsections` (`id`, `mapping_section_id`, `subsection_id`, `created_at`, `updated_at`) VALUES
(67, 38, 1, NULL, NULL),
(68, 38, 2, NULL, NULL),
(69, 38, 3, NULL, NULL),
(70, 39, 4, NULL, NULL),
(71, 39, 5, NULL, NULL),
(72, 39, 6, NULL, NULL),
(73, 39, 7, NULL, NULL),
(74, 40, 8, NULL, NULL),
(75, 40, 9, NULL, NULL),
(76, 41, 10, NULL, NULL),
(77, 42, 11, NULL, NULL),
(78, 43, 12, NULL, NULL),
(79, 43, 13, NULL, NULL),
(80, 43, 14, NULL, NULL),
(81, 43, 15, NULL, NULL),
(82, 44, 16, NULL, NULL),
(83, 44, 17, NULL, NULL),
(84, 44, 18, NULL, NULL),
(85, 44, 19, NULL, NULL),
(86, 44, 20, NULL, NULL),
(87, 38, 2, NULL, NULL),
(88, 49, 34, NULL, NULL),
(89, 51, 35, NULL, NULL),
(90, 52, 36, NULL, NULL),
(91, 52, 37, NULL, NULL),
(92, 53, 1, NULL, NULL),
(93, 53, 2, NULL, NULL),
(94, 53, 3, NULL, NULL),
(95, 54, 4, NULL, NULL),
(96, 54, 5, NULL, NULL),
(97, 54, 6, NULL, NULL),
(98, 54, 7, NULL, NULL),
(99, 55, 8, NULL, NULL),
(100, 55, 9, NULL, NULL),
(101, 56, 10, NULL, NULL),
(102, 57, 11, NULL, NULL),
(103, 58, 12, NULL, NULL),
(104, 58, 13, NULL, NULL),
(105, 58, 14, NULL, NULL),
(106, 58, 15, NULL, NULL),
(107, 59, 16, NULL, NULL),
(108, 59, 17, NULL, NULL),
(109, 59, 18, NULL, NULL),
(110, 59, 19, NULL, NULL),
(111, 59, 20, NULL, NULL),
(112, 60, 1, NULL, NULL),
(113, 60, 2, NULL, NULL),
(114, 60, 3, NULL, NULL),
(115, 61, 4, NULL, NULL),
(116, 61, 5, NULL, NULL),
(117, 61, 6, NULL, NULL),
(118, 61, 7, NULL, NULL),
(119, 62, 8, NULL, NULL),
(120, 62, 9, NULL, NULL),
(121, 63, 10, NULL, NULL),
(122, 64, 11, NULL, NULL),
(123, 65, 12, NULL, NULL),
(124, 65, 13, NULL, NULL),
(125, 65, 14, NULL, NULL),
(126, 65, 15, NULL, NULL),
(127, 66, 16, NULL, NULL),
(128, 66, 17, NULL, NULL),
(129, 66, 18, NULL, NULL),
(130, 66, 19, NULL, NULL),
(131, 66, 20, NULL, NULL),
(132, 67, 1, NULL, NULL),
(133, 67, 2, NULL, NULL),
(134, 67, 3, NULL, NULL),
(135, 68, 4, NULL, NULL),
(136, 68, 5, NULL, NULL),
(137, 68, 6, NULL, NULL),
(138, 68, 7, NULL, NULL),
(141, 70, 10, NULL, NULL),
(142, 71, 11, NULL, NULL),
(143, 72, 12, NULL, NULL),
(144, 72, 13, NULL, NULL),
(145, 72, 14, NULL, NULL),
(146, 72, 15, NULL, NULL),
(147, 73, 16, NULL, NULL),
(148, 73, 17, NULL, NULL),
(149, 73, 18, NULL, NULL),
(150, 73, 19, NULL, NULL),
(151, 73, 20, NULL, NULL),
(152, 74, 8, NULL, NULL),
(153, 74, 9, NULL, NULL),
(154, 67, 2, NULL, NULL),
(155, 67, 3, NULL, NULL),
(157, 70, 10, NULL, NULL),
(158, 70, 10, NULL, NULL),
(159, 70, 10, NULL, NULL),
(160, 72, 13, NULL, NULL),
(171, 67, 2, NULL, NULL),
(174, 87, 8, NULL, NULL),
(175, 87, 9, NULL, NULL),
(176, 88, 8, NULL, NULL),
(177, 88, 9, NULL, NULL),
(178, 89, 8, NULL, NULL),
(179, 89, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_03_03_135631_create_users_table', 1),
('2016_03_03_135640_create_password_resets_table', 1),
('2016_03_03_135651_create_resumes_table', 1),
('2016_03_03_135821_create_sections_table', 1),
('2016_03_03_135839_create_subsections_table', 1),
('2016_03_03_140014_create_mapping_sections_table', 1),
('2016_03_03_140030_create_mapping_subsections_table', 1),
('2016_03_03_140043_create_details_table', 1),
('2016_08_21_020234_create_linkedin_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(3, 1, 'dads', '2016-09-11 16:19:27', '2016-09-11 16:19:27'),
(4, 1, 'dasds', '2016-09-11 17:11:19', '2016-09-11 17:11:19'),
(5, 1, 'r2', '2016-09-11 23:43:33', '2016-09-11 23:43:33'),
(6, 2, 'r1', '2016-09-15 23:55:17', '2016-09-15 23:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `flag`) VALUES
(1, 'Basic Information', 0),
(2, 'Education', 1),
(3, 'Projects', 1),
(4, 'Skills', 0),
(5, 'Objective', 0),
(6, 'Personal Details', 0),
(7, 'Work Experience', 1),
(23, 's1', 2),
(24, 's2', 2),
(25, 's3', 2),
(26, 's4', 2),
(27, 'alas', 2),
(28, 'dsdsd', 2),
(29, 'didsd', 2),
(30, 'sdsds', 2),
(31, 'sdsdsd', 2),
(32, 'asada', 2),
(33, 'dfbdd', 2),
(34, 'ndsjdsjhds', 2),
(35, 'klssjsdjsddsj', 2),
(36, 'ajashssa', 2),
(37, 'hddsdg', 2),
(38, 'ddfbdgb', 2),
(39, 'fgfbf', 2),
(40, 'fddfd', 2),
(41, 'gjhg', 2),
(42, 'vhjhj', 2),
(43, 'hjjhjghjgjhhg', 2),
(44, 'njnjjj', 2),
(45, 'nbbnbn', 2),
(46, 'sdsdsd', 2),
(47, 'dsfssfs', 2),
(48, 'ddss', 2),
(49, 'dasds', 2),
(50, 'eggy', 2),
(51, 'xzxz', 2),
(52, 'aasa', 2),
(53, 'sasa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subsections`
--

CREATE TABLE `subsections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `subsection_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subsections`
--

INSERT INTO `subsections` (`id`, `section_id`, `subsection_name`, `flag`) VALUES
(1, 1, 'Name', 0),
(2, 1, 'Email', 1),
(3, 1, 'Websites', 1),
(4, 2, 'Course Name', 0),
(5, 2, 'Institution', 0),
(6, 2, 'Passing Year', 0),
(7, 2, 'Marks', 0),
(8, 3, 'Project Name', 0),
(9, 3, 'Project Description', 2),
(10, 4, 'Skill', 1),
(11, 5, 'Objective', 2),
(12, 6, 'Father''s Name', 0),
(13, 6, 'Contact No.', 1),
(14, 6, 'Address', 0),
(15, 6, 'Country', 0),
(16, 7, 'Job Title', 0),
(17, 7, 'Company', 0),
(18, 7, 'Start Date', 0),
(19, 7, 'End Date', 0),
(20, 7, 'Other Information', 2),
(21, 23, 'ss1', 2),
(22, 23, 'ss1', 2),
(23, 23, 'dads', 1),
(24, 23, 'dasd', 1),
(25, 23, 'ddss', 1),
(26, 36, 'asanas', 1),
(27, 36, 'dasd', 1),
(28, 37, 'sdhdsgds', 1),
(29, 36, 'fgfggf', 1),
(30, 38, 'ddgfg', 1),
(31, 39, 'dfdbf', 1),
(32, 39, 'dgdgh', 1),
(33, 40, 'bvvbn', 1),
(34, 50, 'nkkk', 1),
(35, 52, 'sssd', 1),
(36, 53, 'sasa', 1),
(37, 53, 'sajna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Satvik Daga', 'dagasatvik@gmail.com', '$2y$10$w.cQFt8wYP0HQpl1.yvMQOgOPpluMZeJvBd/SRdTFbN2ifJVaecZK', 'g36q28HK8k7s4Z29k7RiKF2TbouAeVsju2QcqQt3XWzxEWEQXG0al2X2fup6', '2016-09-11 04:06:22', '2016-09-26 05:16:30'),
(2, 'Satvik Daga', 'satvikdaga10@gmail.com', '$2y$10$N1bWZ65IxqjkK3Xrn57rwuInwshe64Ng.5iZ6X1EQE/5eEaf1NfP2', '3KHUSat4NvO6Sm1LvRchRkXmpZAOkWhHqxxXsMC83Asuumj2HJofiJ6divBh', '2016-09-15 20:52:08', '2016-09-22 23:28:18'),
(3, 'Satvik Daga', 'dagasatvik10@gmail.com', '$2y$10$b0/kZYi8IOdCMmLJhvSUZ.wtkOgnuQcqfQEmTxmFZ4gVlGx1MQfBe', 'GcebRCBsxb1oxjeDBMUBipQGo3qYTorrqh7DqArIotePkqUSTLsPbeyi4jex', '2016-09-22 23:31:47', '2016-09-26 05:16:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_mapping_subsection_id_foreign` (`mapping_subsection_id`);

--
-- Indexes for table `linkedin_details`
--
ALTER TABLE `linkedin_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linkedin_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `mapping_sections`
--
ALTER TABLE `mapping_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapping_sections_resume_id_foreign` (`resume_id`),
  ADD KEY `mapping_sections_section_id_foreign` (`section_id`);

--
-- Indexes for table `mapping_subsections`
--
ALTER TABLE `mapping_subsections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapping_subsections_mapping_section_id_foreign` (`mapping_section_id`),
  ADD KEY `mapping_subsections_subsection_id_foreign` (`subsection_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resumes_user_id_foreign` (`user_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsections`
--
ALTER TABLE `subsections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subsections_section_id_foreign` (`section_id`);

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
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `linkedin_details`
--
ALTER TABLE `linkedin_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mapping_sections`
--
ALTER TABLE `mapping_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `mapping_subsections`
--
ALTER TABLE `mapping_subsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `subsections`
--
ALTER TABLE `subsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_mapping_subsection_id_foreign` FOREIGN KEY (`mapping_subsection_id`) REFERENCES `mapping_subsections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `linkedin_details`
--
ALTER TABLE `linkedin_details`
  ADD CONSTRAINT `linkedin_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mapping_sections`
--
ALTER TABLE `mapping_sections`
  ADD CONSTRAINT `mapping_sections_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapping_sections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapping_subsections`
--
ALTER TABLE `mapping_subsections`
  ADD CONSTRAINT `mapping_subsections_mapping_section_id_foreign` FOREIGN KEY (`mapping_section_id`) REFERENCES `mapping_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapping_subsections_subsection_id_foreign` FOREIGN KEY (`subsection_id`) REFERENCES `subsections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subsections`
--
ALTER TABLE `subsections`
  ADD CONSTRAINT `subsections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
