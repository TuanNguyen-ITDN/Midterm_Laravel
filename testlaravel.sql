-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2019 lúc 04:41 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `testlaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `alias`, `discription`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Thời Trang Nam', 'slug 1', 'Hàng được ưa chuộng', 1, NULL, NULL),
(2, 'Thời Trang Nữ', 'slug 2', 'Hàng hot', 2, NULL, NULL),
(3, 'Hàng Mới Về', 'slug 3', 'Hàng bán chạy', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_03_14_190826_create_users_table', 1),
(3, '2019_03_20_103233_create_tintucs_table', 1),
(4, '2019_03_22_161708_create_categories_table', 1),
(5, '2019_03_20_103519_create_products_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `discription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `image`, `quantity`, `discription`, `Status`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Ao khoat cao cap', 'FM Style', 500000, 'tuấn-2.jpg', 1000000, 'Rat hop thoi tran cho phai nu', 'Ban chay', 1, '2019-03-29 12:17:42', '2019-03-29 12:17:42'),
(3, 'Áo choàng cao cấp', 'FM Style ', 700000, 'aochoang.jpg', 30, 'Hàng được ưa chuộng', 'Chất lượng tốt', 1, NULL, NULL),
(4, 'Túi xách cao cấp', 'FM Style', 1000000, 'tuixach.jpg', 10, 'Hàng được ưa chuộng', 'Chất lượng tốt', 3, NULL, NULL),
(5, 'tuan', 'FM Style', 500000, 'tuấn-2.jpg', 3333, 'Rat hop thoi tran cho phai nu', 'Ban chay', 2, '2019-04-01 01:11:33', '2019-04-01 01:11:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintucs`
--

CREATE TABLE `tintucs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `phone`, `address`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ludie Koepp', '$2y$10$U/f/UPui0o6i5U2bBXmdZeJypyF9JMbpMzLFdJnkK3BqOSb3B15dS', 'Stephon Cassin DDS', '+1111034673072', '51076 Waelchi Circles Suite 934\nBernardmouth, ME 73000-9427', 'pkoss@hotmail.com', NULL, NULL, NULL, NULL),
(2, 'Alexandrine Kshlerin', '$2y$10$jBDf4H7xYtiZJ/4q4/AKJejOdQLGKha5aLRLxLvpFtsVMPerFodIi', 'Santiago Walsh III', '+3616709212331', '3170 Hubert Corners\nBalistreriside, MO 30818', 'sanford.taryn@yahoo.com', NULL, NULL, NULL, NULL),
(3, 'Kitty Champlin', '$2y$10$ZPL1V1z7PUct4WThP/grH.WtLAm1wNhNFCTiHHoIdl1uQVNWjBk/W', 'Alvena Kertzmann', '+9868364946279', '4435 Blanda Gardens\nFarrellfort, ID 30327-9903', 'oflatley@hudson.org', NULL, NULL, NULL, NULL),
(4, 'Maximilian Schumm', '$2y$10$ne.y2ijW8adwl4CoYg7QCuCnj5OmdaKffdJqNRsdG6n4h3N4KANWO', 'Nicklaus Vandervort', '+9727206844042', '3024 Ludwig Isle\nWest Hannamouth, SD 57720-1366', 'lisette50@ernser.net', NULL, NULL, NULL, NULL),
(5, 'Maybelle Harvey', '$2y$10$C0CsFVeT7dnEl6UoB4/r5.KBb7ddNOKJICLYKfuRq0FHquHpU.VDm', 'Eusebio Renner', '+9805100008634', '890 Volkman Lodge Apt. 739\nLake Karen, LA 55895', 'morar.scarlett@upton.com', NULL, NULL, NULL, NULL),
(6, 'Mr. Johnnie Wintheiser DDS', '$2y$10$GWMCcY62OpyJ8Ud.LBLoKeRCWKQU07yLlHEt/hN6t1yOK/AC5qTsW', 'Mrs. Joanie Kessler', '+2674674479569', '7836 Bethel Locks Suite 670\nLake Jaredtown, WI 89945-6749', 'jerde.bernie@yahoo.com', NULL, NULL, NULL, NULL),
(7, 'Kamille Hane', '$2y$10$58C05fiLEttqIxCWavvy.ecvLx3bjKmJFZgiqmLhUoTXH2WtxLDaK', 'Kamille Hilpert', '+2923886108751', '506 Isabelle Lake\nHermanport, NM 88512', 'markus.walker@gmail.com', NULL, NULL, NULL, NULL),
(8, 'Gregory Mosciski II', '$2y$10$1TzOkjTZ2ppGyThwf02FfOJQcpA32STMHSryivf1bBVmTFAl51i0W', 'Shirley Kiehn', '+7372882165032', '6177 Elmer Corner Apt. 242\nNorth Ophelia, NC 06100-6480', 'hulda.funk@vandervort.com', NULL, NULL, NULL, NULL),
(9, 'Cathy Gottlieb', '$2y$10$ntAzwNbzsd1kngWbNtnhH.z1glZ7usZk0YjHT/gaVkKZlVpGpPPTq', 'Prof. Alfonzo D\'Amore', '+5719259219047', '307 Hermann Track Suite 743\nChazmouth, MD 67544-5475', 'daisy.pacocha@tillman.com', NULL, NULL, NULL, NULL),
(10, 'Eldred Lueilwitz', '$2y$10$xZbCsT9m9NQhyeegT0OV7.zAHgAnxkjkyOraW9m9A845HSlKiuSrm', 'Francesca Shields', '+5641072923486', '2834 McCullough Springs\nDerrickview, RI 34192-9384', 'dstokes@gmail.com', NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `tintucs`
--
ALTER TABLE `tintucs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tintucs`
--
ALTER TABLE `tintucs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
