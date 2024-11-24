-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 04:08 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `sale_label` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `old_price`, `image`, `sale_label`, `created_at`, `updated_at`, `status_id`) VALUES
(1, 'Oxford Cuban Shirt', 'A stylish and comfortable shirt made of high-quality cotton.', 99.00, 114.00, 'product1.jpg', 'Sale', '2024-11-18 14:27:15', '2024-11-23 08:11:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `reviewer_name` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `review_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `reviewer_name`, `rating`, `review_text`, `created_at`) VALUES
(1, 1, 'John Doe', 4, 'Great shirt! Really comfortable and stylish.', '2024-11-18 14:27:37'),
(2, 1, 'Jane Smith', 5, 'Love this shirt. Fits perfectly and looks amazing.', '2024-11-18 14:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_statuses`
--

CREATE TABLE `product_statuses` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_statuses`
--

INSERT INTO `product_statuses` (`id`, `status`) VALUES
(1, 'sale'),
(2, 'new'),
(3, '50% off'),
(4, 'hot'),
(5, 'sold out'),
(6, 'best seller'),
(7, 'active'),
(8, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `variant_name`, `image`, `is_active`) VALUES
(1, 1, 'Navy', 'product1.jpg', 1),
(2, 1, 'Green', 'product1-1.jpg', 1),
(3, 1, 'Gray', 'product1-2.jpg', 1),
(4, 1, 'Orange', 'product1-3.jpg', 1);

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
  `phone_number` varchar(12) NOT NULL,
  `province_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remember_token` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `login_attempts` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `address`, `phone_number`, `province_id`, `email`, `password`, `created_at`, `updated_at`, `remember_token`, `role`, `login_attempts`) VALUES
(1, 'William Hutubessy', 'Jaksel', '081289536383', 2, 'williamhutubessy@gmail.com', '$2y$10$6vY5CCecz82.fC98o/cQq.ojg7xKmJf7F2Z.sie8WD1MipMpNk5wm', '2024-11-17 14:37:09', '2024-11-24 10:20:24', NULL, 'admin', 0),
(9, 'John Doe', '123 Main St, Springfield, IL, USA', '081234567890', 3, 'johndoe@gmail.com', '$2y$10$m0KGUZHXkpnjQfKtLI3G0uEwh1kJBsDpQq8vOoCoK3eRoghy0fXRC', '2024-11-23 11:17:04', '2024-11-24 14:38:04', NULL, 'user', 0),
(11, 'Jane Smith', '456 Oak St, Bogor, Jawa Barat, Indonesia', '082345678901', 3, 'janesmith@gmail.com', '$2y$10$h7qOTNJvaMQ2VdLbV9FxGepUE3e/cFZAUciqRCeSy1Hn7Z/t1cIlG', '2024-11-24 08:24:01', '2024-11-24 14:24:01', NULL, 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_menu_parent` (`parent_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_status` (`status_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_statuses`
--
ALTER TABLE `product_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

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
  ADD KEY `fk_users_province` (`province_id`),
  ADD KEY `idx_role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_statuses`
--
ALTER TABLE `product_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `fk_menu_parent` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_status` FOREIGN KEY (`status_id`) REFERENCES `product_statuses` (`id`);

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_province` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
