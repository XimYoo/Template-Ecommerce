-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 03:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaswebent`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `parent_id`, `is_active`) VALUES
(1, 'HOME', '#', NULL, 1),
(2, 'SHOP', 'shop', NULL, 1),
(3, 'PRODUCT', '#', NULL, 1),
(4, 'PAGES', '#', NULL, 1),
(5, 'BLOG', '#', NULL, 1),
(6, 'Home 01 - Fashion', 'fashion', 1, 1),
(7, 'Home 02 - Footwear', 'footwear', 1, 1),
(8, 'Home 03 - Bags', 'bags', 1, 1),
(9, 'Home 04 - Electronic', 'electronic', 1, 1),
(10, 'Collection Page', '#', 2, 1),
(11, 'Collection Style1', 'shop/style1', 10, 1),
(12, 'Collection Style2', 'shop/style2', 10, 1),
(13, 'Collection Style3', 'shop/style3', 10, 1),
(18, 'Shop Search Results', 'shop-search-results.html', 10, 1),
(19, 'Shop Swatches Style', 'shop-swatches-style.html', 10, 1),
(20, 'Shop Page', '#', 2, 1),
(21, 'Shop Grid View', 'shop/gridview', 20, 1),
(22, 'Shop List View', 'shop-list-view.html', 20, 1),
(23, 'Shop Left Sidebar', 'shop-left-sidebar.html', 20, 1),
(24, 'Shop Right Sidebar', 'shop-right-sidebar.html', 20, 1),
(25, 'Shop Top Filter', 'shop', 20, 1),
(30, 'Shop Other Page', '#', 2, 1),
(31, 'Wishlist Style1', 'wishlist-style1.html', 30, 1),
(32, 'Wishlist Style2', 'wishlist-style2.html', 30, 1),
(33, 'Compare Style1', 'compare-style1.html', 30, 1),
(34, 'Compare Style2', 'compare-style2.html', 30, 1),
(40, 'Product Page', '#', 3, 1),
(41, 'Product Page Types', '#', 3, 1),
(42, 'Product Layout1', 'product-layout1.html', 40, 1),
(43, 'Product Layout2', 'product-layout2.html', 40, 1),
(44, 'Product Layout3', 'product-layout3.html', 40, 1),
(45, 'Product Layout4', 'product-layout4.html', 40, 1),
(46, 'Product Layout5', 'product-layout5.html', 40, 1),
(47, 'Product Layout6', 'product-layout6.html', 40, 1),
(48, 'Product Layout7', 'product-layout7.html', 40, 1),
(49, 'Product 3D, AR Models', 'product-3d-ar-models.html', 40, 1),
(50, 'Standard Product', 'product', 41, 1),
(51, 'Variable Product', 'product-variable.html', 41, 1),
(52, 'Grouped Product', 'product-grouped.html', 41, 1),
(53, 'Product Back in stock', 'product-back-in-stock.html', 41, 1),
(54, 'Product Accordion', 'product-accordion.html', 41, 1),
(55, 'Product Tabs Left', 'product-tabs-left.html', 41, 1),
(56, 'Product Bundle', 'product-bundle.html', 41, 1),
(57, 'Product 360 View', 'product-360-view.html', 41, 1),
(60, 'About Us', 'pages', 4, 1),
(61, 'Contact Us', 'contact-style1.html', 4, 1),
(62, 'My Account', 'my-account.html', 4, 1),
(63, 'Lookbook', 'lookbook-grid.html', 4, 1),
(64, 'Portfolio Page', 'portfolio-page.html', 4, 1),
(65, 'FAQs Page', 'faqs-page.html', 4, 1),
(66, 'Brands Page', 'brands-page.html', 4, 1),
(67, 'CMS Page', 'cms-page.html', 4, 1),
(68, 'Icons', 'elements-icons.html', 4, 1),
(69, 'Error 404', 'error-404.html', 4, 1),
(70, 'Coming soon', 'coming-soon.html', 4, 1),
(71, 'About Us Style1', 'pages', 60, 1),
(72, 'About Us Style2', 'aboutus-style2.html', 60, 1),
(73, 'Contact Us Style1', 'contact-style1.html', 61, 1),
(74, 'Contact Us Style2', 'contact-style2.html', 61, 1),
(75, 'My Account', 'my-account.html', 62, 1),
(76, 'Login', 'login.html', 62, 1),
(77, 'Register', 'register.html', 62, 1),
(78, 'Forgot Password', 'forgot-password.html', 62, 1),
(79, 'Lookbook Grid', 'lookbook-grid.html', 63, 1),
(80, 'Lookbook Masonry', 'lookbook-masonry.html', 63, 1),
(81, 'Lookbook Shop', 'lookbook-shop.html', 63, 1),
(90, 'Grid View', 'blog', 5, 1),
(91, 'List View', 'blog-list.html', 5, 1),
(92, 'Left Sidebar', 'blog-grid-sidebar.html', 5, 1),
(93, 'Right Sidebar', 'blog-list-sidebar.html', 5, 1),
(94, 'Masonry Grid', 'blog-masonry.html', 5, 1),
(95, 'Blog Details', 'blog-details.html', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
(1, 'Banten'),
(2, 'DKI Jakarta'),
(3, 'Jawa Barat'),
(4, 'Jawa Tengah'),
(5, 'DI Yogyakarta'),
(6, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `province_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remember_token` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `address`, `phone_number`, `province_id`, `email`, `password`, `created_at`, `updated_at`, `remember_token`, `role`) VALUES
(1, 'William Yohanes Hutubessy', 'Jaksel', '081289536383', 2, 'williamhutubessy@gmail.com', '$2y$10$6vY5CCecz82.fC98o/cQq.ojg7xKmJf7F2Z.sie8WD1MipMpNk5wm', '2024-11-17 14:37:09', '2024-11-17 14:45:47', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_users_province` (`province_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_province` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
