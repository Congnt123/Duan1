-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 31, 2024 lúc 01:46 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_kysau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'active',
  `stock_quantity` int NOT NULL,
  `stock` int DEFAULT '0',
  `k_quantity` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `thumbnail`, `image`, `status`, `stock_quantity`, `stock`, `k_quantity`) VALUES
(1, 'Watch Category 1', 'Description for watch category 1', 'thumbnail1.jpg', 'image1.jpg', 'active', 100, 0, 0),
(2, 'Watch Category 2', 'Description for watch category 2', 'thumbnail2.jpg', 'image2.jpg', 'active', 150, 0, 0),
(3, 'Watch Category 3', 'Description for watch category 3', 'thumbnail3.jpg', 'image3.jpg', 'active', 200, 0, 0),
(4, 'Watch Category 4', 'Description for watch category 4', 'thumbnail4.jpg', 'image4.jpg', 'active', 250, 0, 0),
(5, 'Watch Category 5', 'Description for watch category 5', 'thumbnail5.jpg', 'image5.jpg', 'active', 300, 0, 0),
(6, 'Watch Category 6', 'Description for watch category 6', 'thumbnail6.jpg', 'image6.jpg', 'active', 350, 0, 0),
(7, 'Watch Category 7', 'Description for watch category 7', 'thumbnail7.jpg', 'image7.jpg', 'active', 400, 0, 0),
(8, 'Watch Category 8', 'Description for watch category 8', 'thumbnail8.jpg', 'image8.jpg', 'active', 450, 0, 0),
(9, 'Watch Category 9', 'Description for watch category 9', 'thumbnail9.jpg', 'image9.jpg', 'active', 500, 0, 0),
(10, 'Watch Category 10', 'Description for watch category 10', 'thumbnail10.jpg', 'image10.jpg', 'active', 550, 0, 0),
(11, 'Watch Category 11', 'Description for watch category 11', 'thumbnail11.jpg', 'image11.jpg', 'active', 600, 0, 0),
(12, 'Watch Category 12', 'Description for watch category 12', 'thumbnail12.jpg', 'image12.jpg', 'active', 650, 0, 0),
(13, 'Watch Category 13', 'Description for watch category 13', 'thumbnail13.jpg', 'image13.jpg', 'active', 700, 0, 0),
(14, 'Watch Category 14', 'Description for watch category 14', 'thumbnail14.jpg', 'image14.jpg', 'active', 750, 0, 0),
(15, 'Watch Category 15', 'Description for watch category 15', 'thumbnail15.jpg', 'image15.jpg', 'active', 800, 0, 0),
(16, 'Watch Category 16', 'Description for watch category 16', 'thumbnail16.jpg', 'image16.jpg', 'active', 850, 0, 0),
(17, 'Watch Category 17', 'Description for watch category 17', 'thumbnail17.jpg', 'image17.jpg', 'active', 900, 0, 0),
(18, 'Watch Category 18', 'Description for watch category 18', 'thumbnail18.jpg', 'image18.jpg', 'active', 950, 0, 0),
(19, 'Watch Category 19', 'Description for watch category 19', 'thumbnail19.jpg', 'image19.jpg', 'active', 1000, 0, 0),
(20, 'Watch Category 20', 'Description for watch category 20', 'thumbnail20.jpg', 'image20.jpg', 'active', 1050, 0, 0),
(21, 'Watch Category 21', 'Description for watch category 21', 'thumbnail21.jpg', 'image21.jpg', 'active', 1100, 0, 0),
(22, 'Watch Category 22', 'Description for watch category 22', 'thumbnail22.jpg', 'image22.jpg', 'active', 1150, 0, 0),
(23, 'Watch Category 23', 'Description for watch category 23', 'thumbnail23.jpg', 'image23.jpg', 'active', 1200, 0, 0),
(24, 'Watch Category 24', 'Description for watch category 24', 'thumbnail24.jpg', 'image24.jpg', 'active', 1250, 0, 0),
(25, 'Watch Category 25', 'Description for watch category 25', 'thumbnail25.jpg', 'image25.jpg', 'active', 1300, 0, 0),
(26, 'Watch Category 26', 'Description for watch category 26', 'thumbnail26.jpg', 'image26.jpg', 'active', 1350, 0, 0),
(27, 'Watch Category 27', 'Description for watch category 27', 'thumbnail27.jpg', 'image27.jpg', 'active', 1400, 0, 0),
(28, 'Watch Category 28', 'Description for watch category 28', 'thumbnail28.jpg', 'image28.jpg', 'active', 1450, 0, 0),
(29, 'Watch Category 29', 'Description for watch category 29', 'thumbnail29.jpg', 'image29.jpg', 'active', 1500, 0, 0),
(30, 'Watch Category 30', 'Description for watch category 30', 'thumbnail30.jpg', 'image30.jpg', 'active', 1550, 0, 0),
(31, 'Watch Category 31', 'Description for watch category 31', 'thumbnail31.jpg', 'image31.jpg', 'active', 1600, 0, 0),
(32, 'Watch Category 32', 'Description for watch category 32', 'thumbnail32.jpg', 'image32.jpg', 'active', 1650, 0, 0),
(33, 'Watch Category 33', 'Description for watch category 33', 'thumbnail33.jpg', 'image33.jpg', 'active', 1700, 0, 0),
(34, 'Watch Category 34', 'Description for watch category 34', 'thumbnail34.jpg', 'image34.jpg', 'active', 1750, 0, 0),
(35, 'Watch Category 35', 'Description for watch category 35', 'thumbnail35.jpg', 'image35.jpg', 'active', 1800, 0, 0),
(36, 'Watch Category 36', 'Description for watch category 36', 'thumbnail36.jpg', 'image36.jpg', 'active', 1850, 0, 0),
(37, 'Watch Category 37', 'Description for watch category 37', 'thumbnail37.jpg', 'image37.jpg', 'active', 1900, 0, 0),
(38, 'Watch Category 38', 'Description for watch category 38', 'thumbnail38.jpg', 'image38.jpg', 'active', 1950, 0, 0),
(39, 'Watch Category 39', 'Description for watch category 39', 'thumbnail39.jpg', 'image39.jpg', 'active', 2000, 0, 0),
(40, 'Watch Category 40', 'Description for watch category 40', 'thumbnail40.jpg', 'image40.jpg', 'active', 2050, 0, 0),
(41, 'Watch Category 41', 'Description for watch category 41', 'thumbnail41.jpg', 'image41.jpg', 'active', 2100, 0, 0),
(42, 'Watch Category 42', 'Description for watch category 42', 'thumbnail42.jpg', 'image42.jpg', 'active', 2150, 0, 0),
(43, 'Watch Category 43', 'Description for watch category 43', 'thumbnail43.jpg', 'image43.jpg', 'active', 2200, 0, 0),
(44, 'Watch Category 44', 'Description for watch category 44', 'thumbnail44.jpg', 'image44.jpg', 'active', 2250, 0, 0),
(45, 'Watch Category 45', 'Description for watch category 45', 'thumbnail45.jpg', 'image45.jpg', 'active', 2300, 0, 0),
(46, 'Watch Category 46', 'Description for watch category 46', 'thumbnail46.jpg', 'image46.jpg', 'active', 2350, 0, 0),
(47, 'Watch Category 47', 'Description for watch category 47', 'thumbnail47.jpg', 'image47.jpg', 'active', 2400, 0, 0),
(48, 'Watch Category 48', 'Description for watch category 48', 'thumbnail48.jpg', 'image48.jpg', 'active', 2450, 0, 0),
(49, 'Watch Category 49', 'Description for watch category 49', 'thumbnail49.jpg', 'image49.jpg', 'active', 2500, 0, 0),
(50, 'Watch Category 50', 'Description for watch category 50', 'thumbnail50.jpg', 'image50.jpg', 'active', 2550, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` int NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int NOT NULL,
  `users_id` int NOT NULL,
  `tatol` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_details`
--

CREATE TABLE `oder_details` (
  `id` int NOT NULL,
  `qty` int NOT NULL,
  `price` int NOT NULL,
  `product_id` int NOT NULL,
  `oders_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `categories_id` int NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `centent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sale_price` int NOT NULL DEFAULT '0',
  `price` int NOT NULL DEFAULT '0',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `stock_quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `egmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
