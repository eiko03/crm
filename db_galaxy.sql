-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Oca 2021, 21:35:48
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db_galaxy`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_companies`
--

CREATE TABLE `about_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_sections`
--

CREATE TABLE `about_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `about_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_sections`
--

CREATE TABLE `blog_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `breadcrumbs`
--

CREATE TABLE `breadcrumbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `breadcrumb_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL,
  `category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_sections`
--

CREATE TABLE `contact_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_iframe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content_five_group_keywords`
--

CREATE TABLE `content_five_group_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `mark_all_as_read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_map_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_small_logo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_white_logo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_colored_logo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_small_logo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_footer_logo_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_analytic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breadcrumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sections` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `please_create_a_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for_admin_panel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `content_five_group_keywords`
--

INSERT INTO `content_five_group_keywords` (`id`, `language_id`, `mark_all_as_read`, `mark`, `messages`, `site_info`, `copyright`, `address`, `address_map_link`, `phone`, `site_images`, `favicon`, `admin_logo`, `admin_small_logo_image`, `site_white_logo_image`, `site_colored_logo_image`, `site_small_logo_image`, `site_footer_logo_image`, `google_analytic`, `breadcrumb`, `sections`, `seo`, `site_name`, `site_desc`, `site_keywords`, `please_create_a_category`, `languages`, `add_language`, `edit_language`, `language_name`, `language_code`, `direction`, `keywords`, `for_admin_panel`) VALUES
(1, 1, 'Mark All As Read', 'Mark', 'Messages', 'Site Info', 'Copyright', 'Address', 'Address Map Link', 'Phone', 'Site Images', 'Favicon', 'Admin Logo', 'Admin Small Logo', 'Site White Logo', 'Site Colored Logo', 'Site Small Logo', 'Site Footer Logo', 'Google Analytic', 'Breadcrumb', 'Sections', 'Seo', 'Site Name', 'Site Description', 'Site Keywords', 'Please create a category.', 'Languages', 'Add Language', 'Edit Language', 'Language Name', 'Language Code', 'Direction', 'Keywords', 'For Admin Panel');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content_four_group_keywords`
--

CREATE TABLE `content_four_group_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `add_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faqs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_faq` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_faq` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galleries` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_gallery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_gallery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_footer_menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copied_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_iframe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_iframe_desc_placeholder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_social` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_social` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `content_four_group_keywords`
--

INSERT INTO `content_four_group_keywords` (`id`, `language_id`, `add_team`, `edit_team`, `faqs`, `question`, `answer`, `add_faq`, `edit_faq`, `galleries`, `add_gallery`, `edit_gallery`, `pages`, `add_page`, `edit_page`, `display_footer_menu`, `other`, `yes`, `no`, `copy_link`, `copied_text`, `map_iframe`, `map_iframe_desc_placeholder`, `contact`, `contact_info`, `add_contact`, `edit_contact`, `socials`, `add_social`, `edit_social`, `email`, `subject`, `message`, `read_status`) VALUES
(1, 1, 'Add Team', 'Edit Team', 'Faqs', 'Question', 'Answer', 'Add Faq', 'Edit Faq', 'Galleries', 'Add Gallery', 'Edit Gallery', 'Pages', 'Add Page', 'Edit Page', 'Display Footer Menu?', 'Other', 'Yes', 'No', 'Copy Link', 'Copied Text', 'Map Iframe (link in src)', 'Please find your address on Google Map. And click the Share Button on the Left Side. You will see the Map Placement Area. In the Copy Html field in this section Copy and paste the link in the src from the code inside.', 'Contact', 'Contact Info', 'Add Contact', 'Edit Contact', 'Socials', 'Add Social', 'Edit Social', 'Email', 'Subject', 'Message', 'Read Status');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content_one_group_keywords`
--

CREATE TABLE `content_one_group_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `dashboard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solutions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_title_and_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_solution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_new` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_solution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recommended_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_successfully` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_successfully` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_successfully` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_yet_created` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `close` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `you_wont_be_able_to_revert_this` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yes_delete_it` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `content_one_group_keywords`
--

INSERT INTO `content_one_group_keywords` (`id`, `language_id`, `dashboard`, `home`, `fixed_content`, `title`, `desc`, `btn_name`, `btn_link`, `submit`, `solutions`, `section_title_and_desc`, `top_title`, `add_solution`, `add_new`, `icon`, `order`, `action`, `edit_solution`, `about`, `video_link`, `image`, `size`, `recommended_size`, `created_successfully`, `updated_successfully`, `deleted_successfully`, `current_image`, `not_yet_created`, `delete`, `close`, `you_wont_be_able_to_revert_this`, `cancel`, `yes_delete_it`) VALUES
(1, 1, 'Dashboard', 'Home', 'Fixed Content', 'Title', 'Description', 'Button Name', 'Button Link', 'Submit', 'Solutions', 'Section Title/Description', 'Top Title', 'Add Solution', 'Add New', 'Icon', 'Order', 'Action', 'Edit Solution', 'About', 'Video Link', 'Image', 'size', 'You do not have to use the recommended sizes. However, please use the recommended sizes for your site design to look its best.', 'Created Successfully.', 'Updated Successfully.', 'Deleted Successfully.', 'Current Image', 'Not yet created.', 'Delete', 'Close', 'You wont be able to revert this!', 'Cancel', 'Yes, delete it!');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content_six_group_keywords`
--

CREATE TABLE `content_six_group_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `for_frontend` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_dropdown` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_site_language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `please_try_again` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `you_are_not_authorized` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_all_as_approval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unread` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `change_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pending_approval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `which_language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reminding` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifications` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `optimizer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_testimonial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_work_item` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `content_six_group_keywords`
--

INSERT INTO `content_six_group_keywords` (`id`, `language_id`, `for_frontend`, `content_group`, `hide`, `show`, `display_dropdown`, `default_site_language`, `please_try_again`, `you_are_not_authorized`, `comment`, `comments`, `approval_status`, `mark_all_as_approval`, `read`, `unread`, `profile`, `change_password`, `current_password`, `new_password`, `confirm_password`, `pending_approval`, `approval`, `data_language`, `which_language`, `reminding`, `notifications`, `logout`, `optimizer`, `settings`, `add_testimonial`, `add_work_item`) VALUES
(1, 1, 'For Frontend', 'Content Group', 'Hide', 'Show', 'Display Dropdown?', 'Default Site Language', 'Please try again!', 'You are not authorized to delete this operation.', 'Comment', 'Comments', 'Approval Status', 'Mark All As Approval', 'Read', 'Unread', 'Profile', 'Change Password', 'Current Password', 'New Password', 'Confirm Password', 'Pending Approval', 'Approval', 'Data Language', 'Which language do you want to create the data?', 'Please note that all the entries you create will be based on your chosen language.', 'Notifications', 'Logout', 'Optimizer', 'Settings', 'Add Testimonial', 'Add Work Item');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content_three_group_keywords`
--

CREATE TABLE `content_three_group_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `edit_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_blog` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_blog` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separate_with_commas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `works` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `results` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `optional_features` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `steps` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_items` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_work_item` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_steps` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_work_step` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_work_step` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_why_choose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_why_choose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teams` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `content_three_group_keywords`
--

INSERT INTO `content_three_group_keywords` (`id`, `language_id`, `edit_category`, `category_name`, `status`, `add_blog`, `edit_blog`, `short_desc`, `tag`, `separate_with_commas`, `author`, `category`, `post_date`, `view`, `works`, `add_work`, `results`, `optional_features`, `items`, `steps`, `edit_work`, `work_items`, `edit_work_item`, `work_steps`, `add_work_step`, `edit_work_step`, `company`, `about_company`, `experience`, `experience_desc`, `why_choose`, `add_why_choose`, `edit_why_choose`, `teams`) VALUES
(1, 1, 'Edit Category', 'Category Name', 'Status', 'Add Blog', 'Edit Blog', 'Short Description', 'Tag', 'Separate with commas', 'Author', 'Category', 'Post Date', 'View', 'Works', 'Add Work', 'Results', 'Optional Features', 'Items', 'Steps', 'Edit Work', 'Work Items', 'Edit Work Item', 'Work Steps', 'Add Work Step', 'Edit Work Step', 'Company', 'About Company', 'Experience', 'Experience Description', 'Why Choose', 'Add Why Choose', 'Edit Why Choose', 'Teams');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content_two_group_keywords`
--

CREATE TABLE `content_two_group_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `add_about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_process` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_work_process` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_work_process` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industries` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_your_option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_testimonial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counters` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_counter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_counter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsors` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_sponsor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_sponsor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `content_two_group_keywords`
--

INSERT INTO `content_two_group_keywords` (`id`, `language_id`, `add_about`, `tab_name`, `edit_about`, `work_process`, `add_work_process`, `edit_work_process`, `industries`, `add_industry`, `link`, `edit_industry`, `skills`, `add_skill`, `percent_rate`, `edit_skill`, `testimonials`, `name`, `job`, `star`, `select_your_option`, `enable`, `disable`, `edit_testimonial`, `counters`, `add_counter`, `timer`, `edit_counter`, `sponsors`, `add_sponsor`, `edit_sponsor`, `blogs`, `categories`, `add_category`) VALUES
(1, 1, 'Add About', 'Tab Name', 'Edit About', 'Work Process', 'Add Work Process', 'Edit Work Process', 'Industries', 'Add Industry', 'Link', 'Edit Industry', 'Skills', 'Add Skill', 'Percent Rate', 'Edit Skill', 'Testimonials', 'Name', 'Job', 'Star', 'Select Your Option', 'Enable', 'Disable', 'Edit Testimonial', 'Counters', 'Add Counter', 'Timer', 'Edit Counter', 'Sponsors', 'Add Sponsor', 'Edit Sponsor', 'Blogs', 'Categories', 'Add Category');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timer` int(11) NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faq_sections`
--

CREATE TABLE `faq_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fixed_contents`
--

CREATE TABLE `fixed_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_name_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_name_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `frontend_one_group_keywords`
--

CREATE TABLE `frontend_one_group_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `home` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meet_our_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_us` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `works` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faqs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_your_project_today` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search_here` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search_now` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `close` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_in_touch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_your_review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `useful_links` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quick_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `your_message_has_been_delivered` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `your_comment_is_pending_approval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `by_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search_results` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nothing_found` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular_post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `frontend_one_group_keywords`
--

INSERT INTO `frontend_one_group_keywords` (`id`, `language_id`, `home`, `company`, `about_company`, `meet_our_team`, `contact_us`, `works`, `blogs`, `pages`, `gallery`, `team`, `faqs`, `start_your_project_today`, `search`, `search_here`, `search_now`, `close`, `get_in_touch`, `send_your_review`, `contact_info`, `useful_links`, `office_location`, `quick_contact`, `your_message_has_been_delivered`, `your_comment_is_pending_approval`, `updating`, `all`, `by_admin`, `comments`, `search_results`, `nothing_found`, `keyword`, `popular_post`) VALUES
(1, 1, 'Home', 'Company', 'About Company', 'Meat Our Team', 'Contact Us', 'Works', 'Blogs', 'Pages', 'Gallery', 'Team', 'Faqs', 'Start your project today', 'Search', 'Search Here', 'Search Now!', 'Close', 'Get in Touch', 'Send Your Review', 'Contact Info', 'Useful Links', 'Office Location', 'Quick Contact', 'Your message has been delivered.', 'Your comment is pending approval.', 'Updating...', 'All', 'by Admin', 'Comments', 'Search Results', 'Nothing Found', 'Keyword...', 'Popular Post');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `frontend_two_group_keywords`
--

CREATE TABLE `frontend_two_group_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_a_reply` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `your_comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `your_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enter_name_here` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_goes_here` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_your_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_more` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meet_all_members` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_on` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_comments` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prev_post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_post` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frequently_asked_questions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processing_system` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `step` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `results` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prev_work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_case_studies` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `frontend_two_group_keywords`
--

INSERT INTO `frontend_two_group_keywords` (`id`, `language_id`, `tags`, `leave_a_reply`, `name`, `email`, `your_comment`, `post_comments`, `categories`, `your_name`, `enter_name_here`, `email_address`, `subject`, `message`, `message_goes_here`, `send_your_message`, `read_more`, `meet_all_members`, `author`, `posted_on`, `posted_comments`, `prev_post`, `next_post`, `contact`, `frequently_asked_questions`, `processing_system`, `step`, `results`, `prev_work`, `next_work`, `all_case_studies`, `view`) VALUES
(1, 1, 'Tags', 'Leave A Reply', 'Name', 'Email', 'Your Comment...', 'Post Comments', 'Categories', 'Your Name', 'Enter Name Here', 'Email Address', 'Subject', 'Message', 'Message goes here *', 'Send Your Message', 'Read More', 'Meet All Members', 'Author:', 'Posted On:', 'Post Comments:', 'Prev Post', 'Next Post', 'Contact', 'Frequently Asked Questions', 'Processing System', 'Step', 'Results', 'Prev Work', 'Next Work', 'All Case Studies', 'View');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `google_analytics`
--

CREATE TABLE `google_analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google_analytic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `homepage_versions`
--

CREATE TABLE `homepage_versions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choose_version` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `homepage_versions`
--

INSERT INTO `homepage_versions` (`id`, `choose_version`, `created_at`, `updated_at`) VALUES
(1, 0, '2021-01-16 17:35:25', '2021-01-16 17:35:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `industry_sections`
--

CREATE TABLE `industry_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `display_dropdown` int(11) NOT NULL,
  `default_site_language` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `languages`
--

INSERT INTO `languages` (`id`, `language_name`, `language_code`, `direction`, `status`, `display_dropdown`, `default_site_language`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 0, 1, 1, 1, '2021-01-16 17:35:24', '2021-01-16 17:35:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_09_24_005133_create_sessions_table', 1),
(7, '2020_09_26_225805_create_languages_table', 1),
(8, '2020_09_30_133427_create_sliders_table', 1),
(9, '2020_10_08_204636_create_counters_table', 1),
(10, '2020_10_10_092350_create_teams_table', 1),
(11, '2020_10_10_092409_create_team_sections_table', 1),
(12, '2020_10_12_133209_create_faqs_table', 1),
(13, '2020_10_12_133231_create_faq_sections_table', 1),
(14, '2020_10_16_144438_create_site_infos_table', 1),
(15, '2020_10_21_053827_create_google_analytics_table', 1),
(16, '2020_10_21_055547_create_seos_table', 1),
(17, '2020_10_21_073549_create_categories_table', 1),
(18, '2020_10_22_003541_create_blogs_table', 1),
(19, '2020_10_22_004159_create_blog_sections_table', 1),
(20, '2020_10_24_064553_create_contacts_table', 1),
(21, '2020_10_24_064616_create_contact_sections_table', 1),
(22, '2020_10_25_004806_create_site_images_table', 1),
(23, '2020_11_01_173003_create_content_one_group_keywords_table', 1),
(24, '2020_11_02_085101_create_content_two_group_keywords_table', 1),
(25, '2020_11_02_085802_create_content_three_group_keywords_table', 1),
(26, '2020_11_02_095041_create_content_four_group_keywords_table', 1),
(27, '2020_11_02_095441_create_content_five_group_keywords_table', 1),
(28, '2020_11_05_081548_create_socials_table', 1),
(29, '2020_11_05_125854_create_breadcrumbs_table', 1),
(30, '2020_11_05_132410_create_sections_table', 1),
(31, '2020_11_05_142833_create_colors_table', 1),
(32, '2020_11_06_073530_create_pages_table', 1),
(33, '2020_11_06_110956_create_content_six_group_keywords_table', 1),
(34, '2020_11_11_112402_create_messages_table', 1),
(35, '2020_11_18_125114_create_testimonials_table', 1),
(36, '2020_11_18_125134_create_testimonial_sections_table', 1),
(37, '2020_11_19_105332_create_comments_table', 1),
(38, '2020_11_25_195255_create_frontend_one_group_keywords_table', 1),
(39, '2020_11_25_195818_create_frontend_two_group_keywords_table', 1),
(40, '2020_12_09_174622_create_skills_table', 1),
(41, '2020_12_09_174640_create_skill_sections_table', 1),
(42, '2020_12_09_205619_create_projects_table', 1),
(43, '2020_12_09_223455_create_sponsors_table', 1),
(44, '2020_12_15_190411_create_galleries_table', 1),
(45, '2020_12_27_073132_create_fixed_contents_table', 1),
(46, '2020_12_27_081346_create_solitions_table', 1),
(47, '2020_12_27_081358_create_solition_sections_table', 1),
(48, '2020_12_27_124641_create_abouts_table', 1),
(49, '2020_12_27_124655_create_about_sections_table', 1),
(50, '2020_12_28_054611_create_work_processes_table', 1),
(51, '2020_12_28_054625_create_work_process_sections_table', 1),
(52, '2020_12_28_062036_create_industries_table', 1),
(53, '2020_12_28_062059_create_industry_sections_table', 1),
(54, '2020_12_29_090815_create_work_categories_table', 1),
(55, '2020_12_29_090834_create_works_table', 1),
(56, '2020_12_29_090848_create_work_sections_table', 1),
(57, '2020_12_29_102100_create_work_items_table', 1),
(58, '2020_12_29_130429_create_work_steps_table', 1),
(59, '2021_01_02_075029_create_about_companies_table', 1),
(60, '2021_01_02_095559_create_why_chooses_table', 1),
(61, '2021_01_02_095612_create_why_choose_sections_table', 1),
(62, '2021_01_11_183018_create_sponsor_sections_table', 1),
(63, '2021_01_13_041509_create_homepage_versions_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `page_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_footer_menu` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `page_slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `project_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sections`
--

INSERT INTO `sections` (`id`, `title`, `section`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Page Dropdown', 'page_dropdown', 1, '2021-01-16 17:35:24', '2021-01-16 17:35:24'),
(2, 'Banner Images', 'banner_images', 1, '2021-01-16 17:35:24', '2021-01-16 17:35:24'),
(3, 'Solution Section', 'solution_section', 1, '2021-01-16 17:35:24', '2021-01-16 17:35:24'),
(4, 'About Section', 'about_section', 1, '2021-01-16 17:35:24', '2021-01-16 17:35:24'),
(5, 'Work Process Section', 'work_process_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(6, 'Industry Section', 'industry_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(7, 'Skill Section', 'skill_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(8, 'Client Section', 'client_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(9, 'Work Section', 'work_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(10, 'Counter Section', 'counter_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(11, 'Blog Section', 'blog_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(12, 'Sponsor Section', 'sponsor_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(13, 'Footer Section', 'footer_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(14, 'Copyright Section', 'copyright_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(15, 'About Company Section', 'about_company_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(16, 'Why Choose Section', 'why_choose_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(17, 'Team Section', 'team_section', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(18, 'Company Dropdown', 'company_dropdown', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(19, 'About Company Page', 'about_company_page', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(20, 'Team Page', 'team_page', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(21, 'Contact Us Page', 'contact_us_page', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(22, 'Works Page', 'works_page', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(23, 'Blogs Page', 'blogs_page', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(24, 'Gallery Page', 'gallery_page', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(25, 'Faq Page', 'faq_page', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25'),
(26, 'Preloader', 'preloader', 1, '2021-01-16 17:35:25', '2021-01-16 17:35:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_app_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_images`
--

CREATE TABLE `site_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favicon_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_logo_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_small_logo_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_white_logo_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_colored_logo_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_small_logo_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_footer_logo_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_infos`
--

CREATE TABLE `site_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_map_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent_rate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skill_sections`
--

CREATE TABLE `skill_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_media` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `solitions`
--

CREATE TABLE `solitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `solition_sections`
--

CREATE TABLE `solition_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sponsor_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsor_sections`
--

CREATE TABLE `sponsor_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `team_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team_sections`
--

CREATE TABLE `team_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `testimonial_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `testimonial_sections`
--

CREATE TABLE `testimonial_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ShrSPXw4.GUhshrFsUloLeFpkom8V.R/.hODDjng6PXuAPKNSwF2u', NULL, NULL, NULL, NULL, NULL, '2021-01-16 17:35:24', '2021-01-16 17:35:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `why_chooses`
--

CREATE TABLE `why_chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `why_choose_sections`
--

CREATE TABLE `why_choose_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why_choose_image_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_category_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work_categories`
--

CREATE TABLE `work_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL,
  `work_category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work_items`
--

CREATE TABLE `work_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work_processes`
--

CREATE TABLE `work_processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work_process_sections`
--

CREATE TABLE `work_process_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work_sections`
--

CREATE TABLE `work_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work_steps`
--

CREATE TABLE `work_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_id` bigint(20) UNSIGNED NOT NULL,
  `step_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `about_companies`
--
ALTER TABLE `about_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_companies_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `about_sections`
--
ALTER TABLE `about_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `blog_sections`
--
ALTER TABLE `blog_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `breadcrumbs`
--
ALTER TABLE `breadcrumbs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`),
  ADD KEY `categories_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `contact_sections`
--
ALTER TABLE `contact_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `content_five_group_keywords`
--
ALTER TABLE `content_five_group_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_five_group_keywords_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `content_four_group_keywords`
--
ALTER TABLE `content_four_group_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_four_group_keywords_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `content_one_group_keywords`
--
ALTER TABLE `content_one_group_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_one_group_keywords_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `content_six_group_keywords`
--
ALTER TABLE `content_six_group_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_six_group_keywords_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `content_three_group_keywords`
--
ALTER TABLE `content_three_group_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_three_group_keywords_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `content_two_group_keywords`
--
ALTER TABLE `content_two_group_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_two_group_keywords_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counters_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `faq_sections`
--
ALTER TABLE `faq_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `fixed_contents`
--
ALTER TABLE `fixed_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_contents_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `frontend_one_group_keywords`
--
ALTER TABLE `frontend_one_group_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frontend_one_group_keywords_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `frontend_two_group_keywords`
--
ALTER TABLE `frontend_two_group_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frontend_two_group_keywords_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `google_analytics`
--
ALTER TABLE `google_analytics`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `homepage_versions`
--
ALTER TABLE `homepage_versions`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `industries_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `industry_sections`
--
ALTER TABLE `industry_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `industry_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seos_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Tablo için indeksler `site_images`
--
ALTER TABLE `site_images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `site_infos_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `skill_sections`
--
ALTER TABLE `skill_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skill_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `solitions`
--
ALTER TABLE `solitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solitions_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `solition_sections`
--
ALTER TABLE `solition_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solition_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sponsor_sections`
--
ALTER TABLE `sponsor_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sponsor_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `team_sections`
--
ALTER TABLE `team_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `testimonial_sections`
--
ALTER TABLE `testimonial_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonial_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `why_chooses`
--
ALTER TABLE `why_chooses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `why_chooses_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `why_choose_sections`
--
ALTER TABLE `why_choose_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `why_choose_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `work_categories`
--
ALTER TABLE `work_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `work_categories_category_name_unique` (`category_name`),
  ADD KEY `work_categories_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `work_items`
--
ALTER TABLE `work_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_items_work_id_foreign` (`work_id`);

--
-- Tablo için indeksler `work_processes`
--
ALTER TABLE `work_processes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_processes_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `work_process_sections`
--
ALTER TABLE `work_process_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_process_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `work_sections`
--
ALTER TABLE `work_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_sections_language_id_foreign` (`language_id`);

--
-- Tablo için indeksler `work_steps`
--
ALTER TABLE `work_steps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_steps_work_id_foreign` (`work_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `about_companies`
--
ALTER TABLE `about_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `about_sections`
--
ALTER TABLE `about_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `blog_sections`
--
ALTER TABLE `blog_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `breadcrumbs`
--
ALTER TABLE `breadcrumbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `contact_sections`
--
ALTER TABLE `contact_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `content_five_group_keywords`
--
ALTER TABLE `content_five_group_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `content_four_group_keywords`
--
ALTER TABLE `content_four_group_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `content_one_group_keywords`
--
ALTER TABLE `content_one_group_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `content_six_group_keywords`
--
ALTER TABLE `content_six_group_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `content_three_group_keywords`
--
ALTER TABLE `content_three_group_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `content_two_group_keywords`
--
ALTER TABLE `content_two_group_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `faq_sections`
--
ALTER TABLE `faq_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `fixed_contents`
--
ALTER TABLE `fixed_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `frontend_one_group_keywords`
--
ALTER TABLE `frontend_one_group_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `frontend_two_group_keywords`
--
ALTER TABLE `frontend_two_group_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `google_analytics`
--
ALTER TABLE `google_analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `homepage_versions`
--
ALTER TABLE `homepage_versions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `industry_sections`
--
ALTER TABLE `industry_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `site_images`
--
ALTER TABLE `site_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `skill_sections`
--
ALTER TABLE `skill_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `solitions`
--
ALTER TABLE `solitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `solition_sections`
--
ALTER TABLE `solition_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sponsor_sections`
--
ALTER TABLE `sponsor_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `team_sections`
--
ALTER TABLE `team_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `testimonial_sections`
--
ALTER TABLE `testimonial_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `why_chooses`
--
ALTER TABLE `why_chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `why_choose_sections`
--
ALTER TABLE `why_choose_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `work_categories`
--
ALTER TABLE `work_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `work_items`
--
ALTER TABLE `work_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `work_processes`
--
ALTER TABLE `work_processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `work_process_sections`
--
ALTER TABLE `work_process_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `work_sections`
--
ALTER TABLE `work_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `work_steps`
--
ALTER TABLE `work_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `about_companies`
--
ALTER TABLE `about_companies`
  ADD CONSTRAINT `about_companies_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `about_sections`
--
ALTER TABLE `about_sections`
  ADD CONSTRAINT `about_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `blog_sections`
--
ALTER TABLE `blog_sections`
  ADD CONSTRAINT `blog_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `contact_sections`
--
ALTER TABLE `contact_sections`
  ADD CONSTRAINT `contact_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `content_five_group_keywords`
--
ALTER TABLE `content_five_group_keywords`
  ADD CONSTRAINT `content_five_group_keywords_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `content_four_group_keywords`
--
ALTER TABLE `content_four_group_keywords`
  ADD CONSTRAINT `content_four_group_keywords_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `content_one_group_keywords`
--
ALTER TABLE `content_one_group_keywords`
  ADD CONSTRAINT `content_one_group_keywords_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `content_six_group_keywords`
--
ALTER TABLE `content_six_group_keywords`
  ADD CONSTRAINT `content_six_group_keywords_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `content_three_group_keywords`
--
ALTER TABLE `content_three_group_keywords`
  ADD CONSTRAINT `content_three_group_keywords_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `content_two_group_keywords`
--
ALTER TABLE `content_two_group_keywords`
  ADD CONSTRAINT `content_two_group_keywords_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `counters`
--
ALTER TABLE `counters`
  ADD CONSTRAINT `counters_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `faq_sections`
--
ALTER TABLE `faq_sections`
  ADD CONSTRAINT `faq_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `fixed_contents`
--
ALTER TABLE `fixed_contents`
  ADD CONSTRAINT `fixed_contents_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `frontend_one_group_keywords`
--
ALTER TABLE `frontend_one_group_keywords`
  ADD CONSTRAINT `frontend_one_group_keywords_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `frontend_two_group_keywords`
--
ALTER TABLE `frontend_two_group_keywords`
  ADD CONSTRAINT `frontend_two_group_keywords_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `industries`
--
ALTER TABLE `industries`
  ADD CONSTRAINT `industries_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `industry_sections`
--
ALTER TABLE `industry_sections`
  ADD CONSTRAINT `industry_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `seos`
--
ALTER TABLE `seos`
  ADD CONSTRAINT `seos_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `site_infos`
--
ALTER TABLE `site_infos`
  ADD CONSTRAINT `site_infos_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `skill_sections`
--
ALTER TABLE `skill_sections`
  ADD CONSTRAINT `skill_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `solitions`
--
ALTER TABLE `solitions`
  ADD CONSTRAINT `solitions_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `solition_sections`
--
ALTER TABLE `solition_sections`
  ADD CONSTRAINT `solition_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `sponsor_sections`
--
ALTER TABLE `sponsor_sections`
  ADD CONSTRAINT `sponsor_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `team_sections`
--
ALTER TABLE `team_sections`
  ADD CONSTRAINT `team_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `testimonial_sections`
--
ALTER TABLE `testimonial_sections`
  ADD CONSTRAINT `testimonial_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `why_chooses`
--
ALTER TABLE `why_chooses`
  ADD CONSTRAINT `why_chooses_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `why_choose_sections`
--
ALTER TABLE `why_choose_sections`
  ADD CONSTRAINT `why_choose_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `work_categories`
--
ALTER TABLE `work_categories`
  ADD CONSTRAINT `work_categories_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `work_items`
--
ALTER TABLE `work_items`
  ADD CONSTRAINT `work_items_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `work_processes`
--
ALTER TABLE `work_processes`
  ADD CONSTRAINT `work_processes_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `work_process_sections`
--
ALTER TABLE `work_process_sections`
  ADD CONSTRAINT `work_process_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `work_sections`
--
ALTER TABLE `work_sections`
  ADD CONSTRAINT `work_sections_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `work_steps`
--
ALTER TABLE `work_steps`
  ADD CONSTRAINT `work_steps_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
