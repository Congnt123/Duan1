-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 14, 2024 lúc 03:19 PM
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
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'active',
  `stock_quantity` int NOT NULL,
  `stock` int DEFAULT '0',
  `k_quantity` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `short_description`, `image`, `status`, `stock_quantity`, `stock`, `k_quantity`) VALUES
(1, 'Đồng hồ nam', '2', 'image1.jpg', 'active', 22, 0, 0),
(2, 'Đồng hồ nữ', '1', 'image2.jpg', 'active', 150, 0, 0),
(3, 'Đồng hồ casio', '3', 'image3.jpg', 'active', 100, 0, 0),
(4, 'Đồng hồ citizen', '3', 'image3.jpg', 'active', 100, 0, 0),
(5, 'Đồng hồ applewatch', '3', 'image3.jpg', 'active', 100, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `users_id` int NOT NULL,
  `date` date NOT NULL,
  `tatol` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`id`, `created_at`, `phone`, `name`, `address`, `users_id`, `date`, `tatol`) VALUES
(12, '2024-08-11 15:10:14', '08697512', 'khanhmnt', 'hưng phú cần thơ', 1, '2024-10-08', 2000000),
(13, '2024-08-11 15:10:14', '08855465', 'khum', 'ninh kiều cần thơ', 2, '2024-09-09', 2500000),
(14, '2024-08-11 15:10:14', '085247782', 'ria tri', 'thới lai cần thơ', 3, '2024-10-01', 3000000),
(15, '2024-08-11 15:10:14', '08697512', 'cường', 'hưng phú cần thơ', 4, '2024-10-08', 4000000),
(16, '2024-08-11 15:10:14', '08697512', 'chí', 'hưng phú cần thơ', 5, '2024-10-08', 5000000),
(17, '2024-08-11 15:10:14', '08697512', 'nhã', 'hưng phú cần thơ', 6, '2024-10-08', 6000000),
(18, '2024-08-11 15:10:14', '08697512', 'giang', 'hưng phú cần thơ', 7, '2024-10-08', 7000000),
(19, '2024-08-11 15:10:14', '08697512', 'nghi', 'hưng phú cần thơ', 8, '2024-10-08', 8000000),
(20, '2024-08-11 15:10:14', '08697512', 'vinh', 'hưng phú cần thơ', 9, '2024-10-08', 9000000),
(21, '2024-08-11 15:10:14', '08697512', 'thái', 'hưng phú cần thơ', 10, '2024-10-08', 3750000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_details`
--

CREATE TABLE `oder_details` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `qty` int NOT NULL,
  `price` int NOT NULL,
  `product_id` int NOT NULL,
  `oders_id` int NOT NULL,
  `date` date NOT NULL,
  `total_amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `categories_id` int NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sale_price` int NOT NULL DEFAULT '0',
  `price` int NOT NULL DEFAULT '0',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `categories_id`, `short_description`, `status`, `sale_price`, `price`, `image`, `total_price`) VALUES
(94, 'Đồng Hồ Da Cao Cấp', 1, 'Đồng hồ thanh lịch với dây da thật.', 0, 300000, 400000, 'image_a34.jpg', ''),
(95, 'Đồng Hồ Kỹ Thuật Số Thể Thao', 2, 'Đồng hồ kỹ thuật số cao cấp với nhiều chức năng.', 1, 180000, 250000, 'image_a4.jpg', ''),
(96, 'Đồng Hồ Vàng Cổ Điển', 3, 'Đồng hồ vàng truyền thống với thiết kế cổ điển.', 1, 500000, 600000, 'image_a14.jpg', ''),
(97, 'Đồng Hồ Thép Không Gỉ', 1, 'Đồng hồ thép không gỉ bền bỉ với chức năng ngày.', 1, 220000, 300000, 'image_a4.jpg', ''),
(98, 'Đồng Hồ Sứ Trắng', 2, 'Đồng hồ sứ thanh lịch với thiết kế hiện đại.', 1, 250000, 320000, 'image_a28.jpg', ''),
(99, 'Đồng Hồ Da Nâu Cổ Điển', 3, 'Đồng hồ retro với dây da nâu.', 1, 200000, 270000, 'image_a6.jpg', ''),
(100, 'Đồng Hồ Bezel Kim Cương', 1, 'Đồng hồ cao cấp với viền kim cương.', 1, 700000, 850000, 'image_a16.jpg', ''),
(101, 'Đồng Hồ Thể Thao Chống Nước', 2, 'Đồng hồ chống nước với GPS.', 1, 350000, 450000, 'image_a7.jpg', ''),
(102, 'Đồng Hồ Chronograph', 1, 'Đồng hồ chronograph với nhiều mặt đồng hồ nhỏ.', 1, 400000, 500000, 'image_a8.jpg', ''),
(103, 'Đồng Hồ Vàng Hồng', 2, 'Đồng hồ vàng hồng thanh lịch với thiết kế hiện đại.', 1, 550000, 700000, 'image_a13.jpg', ''),
(104, 'Đồng Hồ Cơ', 3, 'Đồng hồ cơ cổ điển với mặt sau trong suốt.', 1, 300000, 400000, 'image_a18.jpg', ''),
(105, 'Đồng Hồ Kỹ Thuật Số Retro', 1, 'Đồng hồ kỹ thuật số với thiết kế retro và màn hình LED.', 1, 120000, 180000, 'image_a15.jpg', ''),
(106, 'Đồng Hồ Chronograph Cao Cấp', 2, 'Đồng hồ chronograph cao cấp với dây da.', 1, 600000, 750000, 'image_a17.jpg', ''),
(107, 'Đồng Hồ Trắng Thanh Lịch', 3, 'Đồng hồ thanh lịch với dây đeo sứ trắng.', 1, 350000, 450000, 'image_a10.jpg', ''),
(108, 'Đồng Hồ Lặn Thép Không Gỉ', 1, 'Đồng hồ lặn với dây thép không gỉ và kim phát quang.', 1, 300000, 400000, 'image_a9.jpg', ''),
(109, 'Đồng Hồ Phi Công Cổ Điển', 2, 'Đồng hồ phi công với mặt đồng hồ lớn.', 1, 270000, 350000, 'image_a11.jpg', ''),
(110, 'Đồng Hồ Thông Minh Cao Cấp', 3, 'Đồng hồ thông minh với các tính năng theo dõi sức khỏe và thông báo.', 1, 400000, 500000, 'image_a12.jpg', ''),
(111, 'Đồng Hồ Mạ Vàng', 1, 'Đồng hồ mạ vàng với thiết kế sang trọng.', 1, 600000, 750000, 'image_a19.jpg', ''),
(112, 'Đồng Hồ Tròn Cổ Điển', 2, 'Đồng hồ tròn cổ điển với thiết kế đơn giản và sạch.', 1, 200000, 250000, 'image_a20.jpg', ''),
(113, 'Đồng Hồ Vàng Cổ Điển', 3, 'Đồng hồ vàng truyền thống với thiết kế cổ điển.', 1, 500000, 600000, 'image_a3.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'admin', '123'),
(5, 'khanhmnt', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
