-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 08:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `product_id`, `qty`, `status`, `updated_at`, `created_at`) VALUES
(6, 11, 331, 0, 0, '2022-04-27 21:08:39', '2022-04-27 20:35:02'),
(7, 11, 330, 1, 0, '2022-04-27 20:36:44', '2022-04-27 20:36:44'),
(8, 11, 333, 12, 0, '2022-04-27 20:37:04', '2022-04-27 20:37:04'),
(9, 11, 334, 1, 0, '2022-04-27 20:39:36', '2022-04-27 20:39:36'),
(10, 11, 336, 1, 0, '2022-04-27 20:42:12', '2022-04-27 20:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_menu` int(1) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `show_menu`, `desc`, `created_at`, `updated_at`, `created_by`) VALUES
(13, 'Truyện tranh', 1, '<p>Truyện tranh d&agrave;nh cho mọi lứa tuổi</p>\r\n', '2022-04-22 03:08:27', '2022-04-26 14:26:22', -1),
(14, 'Sách giáo khoa', 1, '<p>D&agrave;nh cho chương tr&igrave;nh gi&aacute;o dục</p>\r\n', '2022-04-22 03:08:47', '2022-04-22 03:08:47', -1),
(15, 'Tiểu thuyết', 1, '<p>Thể lại truyện chữ</p>\r\n', '2022-04-22 03:09:11', '2022-04-22 03:09:11', -1),
(16, 'Từ điển', 1, '<p>S&aacute;ch cung cấp kiến thức</p>\r\n', '2022-04-22 03:10:01', '2022-04-22 03:10:01', -1),
(17, 'Truyện kinh dị', 1, '<p>Truyện d&agrave;nh cho lứa tuổi tr&ecirc;n 18, c&oacute; yếu tố kinh dị</p>\r\n', '2022-04-26 14:25:38', '2022-04-26 14:26:11', -1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Hà Chánh Nam', 'hachanhnam10@gmail.com', '0965918874', 'Can Tho, Viet Nam', 'chanhnam9', '2022-04-26 14:24:25', '2022-04-26 14:24:25'),
(4, 'chanhnam11a3', 'chanhnam10@gmail.com', '9761232', '1', '1', '2022-04-26 14:28:42', '2022-04-26 14:28:42'),
(5, 'ád', 'hachanhaaaaanam10@gmail.com', '0965918874', '1', '1', '2022-04-26 14:29:05', '2022-04-26 14:29:05'),
(6, '123', '123123@ha', '213', '213', '123', '2022-04-26 14:30:11', '2022-04-26 14:30:11'),
(7, 'chanhnam11a3', 'chanhnam10@gmail.com1', '9761232', '1', '', '2022-04-26 14:33:25', '2022-04-26 14:33:25'),
(8, '213', '123123@ha123', '123', '123', '123', '2022-04-26 14:35:06', '2022-04-26 14:35:06'),
(9, '', '', '', '', '', '2022-04-26 14:35:33', '2022-04-26 14:35:33'),
(10, 'chanhnam11a3', 'chanhnam10@gm11ail.com', '9761232', '1', '1', '2022-04-26 14:36:18', '2022-04-26 14:36:18'),
(11, 'Hà Chánh Nam', 'chanhnam0123@gmail.com', '0965918874', 'Cần Thơ', 'chanhnam9', '2022-04-27 13:13:34', '2022-04-27 13:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_05_070735_create_categories_table', 2),
(5, '2019_01_05_072544_alter_table_categories_update_column', 3),
(6, '2019_01_05_074643_create_products_table', 3),
(7, '2019_01_05_075227_create_invoices_table', 4),
(8, '2019_01_05_075449_create_invoice_detail_table', 4),
(9, '2019_01_12_014833_alter_table_products_add_views_column', 5),
(10, '2019_01_12_021523_create_table_product_galleries', 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL DEFAULT 0,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `cate_id`, `price`, `short_desc`, `detail`, `star`, `created_at`, `updated_at`) VALUES
(330, 'Solo leveling', 'sololeveling.jpg', 13, 1200000, '<p>Ships from and sold by EXPERAL SINGAPORE Publisher: Little, Brown &amp; Company ISBN 13: 9781975319434 Condition: Brandnew Binding: paperback Pages: 192 Weight: 526.17 (gram) Dimensons: 210 x 152 x 16 (mm) =================================== The official English print publication of the popular Korean webcomic!E-class hunter Jinwoo Sung is the weakest of them all. Looked down on by everyone, he has no money, no abilities to speak of, and no other job prospects. So when his party finds a hidden dungeon, he&#39;s determined to use this chance to change his life for the the opportunity he finds is a bit different from what he had in mind!</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Little, Brown &amp; Company;&nbsp;Nh&agrave; xuất bản:&nbsp;Little, Brown &amp; Company;</p>\r\n', 4.00, '2022-04-22 03:14:40', '2022-04-26 05:45:53'),
(331, 'SPY x Family 3', 'spyxfamily.jpg', 13, 152000, '<p><strong>SPY x FAMILY 3 (ジャンプコミックス)</strong></p>\r\n\r\n<p>フォージャー家にヨルの弟・ユーリが来訪!! 互いがスパイと秘密警察であることを隠しながら、黄昏とユーリは腹を探り合う。姉を偏愛するユーリは黄昏に本物の夫婦であることを証明しろと迫り&hellip;!?</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Kinokuniya Book Stores;&nbsp;Nh&agrave; xuất bản:&nbsp;Shueisha</p>\r\n', 5.00, '2022-04-22 03:19:34', '2022-04-22 03:19:34'),
(332, 'Thám tử đã chết 1', 'ttdc.jpg', 15, 105910, '<p>Th&aacute;m tử đ&atilde; chết (t&ecirc;n gốc: Tantei wa mou shindeiru)&nbsp;l&agrave; series light novel trinh th&aacute;m của t&aacute;c giả mới Nigozyu, người đ&atilde; chiến thắng giải thưởng t&acirc;n binh của MF Bunko J lần thứ 15 d&agrave;nh cho c&aacute;c t&aacute;c giả Light novel mới triển vọng. T&iacute;nh tới thời điểm hiện tại, Th&aacute;m tử đ&atilde; chết đ&atilde; ra mắt 5 tập tại Nhật Bản với doanh số ấn tượng 500.000 bản được b&aacute;n ra c&ugrave;ng h&agrave;ng loạt c&aacute;c phi&ecirc;n bản chuyển thể truyện tranh v&agrave; mới nhất l&agrave; TV series anime cũng đang được c&ocirc;ng chiếu bản quyền tại Việt Nam, thu h&uacute;t h&agrave;ng trăm ngh&igrave;n lượt xem mỗi tập.</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: Th&aacute;i H&agrave;;&nbsp;Dịch Giả:&nbsp;Nguyễn Dương Quỳnh dich, Nguy&ecirc;n Phạm hiệu đ&iacute;nh- Minh hoạ b&igrave;a: Umibouzu; Nxb: Nh&agrave; Xuất Bản H&agrave; Nội</p>\r\n', 5.00, '2022-04-22 03:22:05', '2022-04-22 03:24:58'),
(333, 'Re: Zero 7', 'rezero7.jpg', 15, 117600, '<p>&nbsp;</p>\r\n\r\n<p>Re:zero - Bắt Đầu Lại Ở Thế Giới Kh&aacute;c 7 (T&aacute;i Bản 2021)</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;IPM;&nbsp;Nh&agrave; xuất bản:&nbsp;Nh&agrave; Xuất Bản Hồng Đức</p>\r\n', 5.00, '2022-04-22 03:24:47', '2022-04-22 03:24:47'),
(334, 'Sách giáo khoa Hóa 10', 'hoa10.jpg', 14, 7000, '<p>Dễ lắm</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Nh&agrave; xuất bản Gi&aacute;o Dục;&nbsp;Nh&agrave; xuất bản:&nbsp;Nh&agrave; Xuất Bản Gi&aacute;o Dục Việt Nam</p>\r\n', 1.00, '2022-04-22 03:28:52', '2022-04-22 03:28:52'),
(335, 'Bộ sách giáo khoa 11', 'bosgk11.jpg', 14, 160000, '<p>Cuốn h&oacute;a nh&igrave;n sợ qu&aacute;</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Nh&agrave; Xuất Bản Gi&aacute;o Dục; Nh&agrave; Xuất bản:&nbsp;Nh&agrave; Xuất Bản Gi&aacute;o Dục Việt Nam</p>\r\n', 2.00, '2022-04-22 03:30:52', '2022-04-22 03:30:52'),
(336, 'Bộ sách giáo khoa 12', 'hoa12.jpg', 14, 180000, '<p>Lại l&agrave; cuốn h&oacute;a, sợ qu&aacute;!!</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Nh&agrave; Xuất Bản Gi&aacute;o Dục; Nh&agrave; Xuất bản:&nbsp;Nh&agrave; Xuất Bản Gi&aacute;o Dục Việt Nam</p>\r\n', 3.00, '2022-04-22 03:32:09', '2022-04-25 12:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(22, 'admin', '', 'admin@gmail.com', 0, 'admin', NULL, NULL),
(23, 'Hà Chánh Nam', 'avatar.jpg', 'chanhnam0123@gmail.com', 0, 'chanhnam9', '2022-04-22 02:08:23', '2022-04-22 02:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `customer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(7, 11, 335, '2022-04-27 13:25:33', '2022-04-27 13:25:33'),
(8, 11, 332, '2022-04-27 13:27:10', '2022-04-27 13:27:10'),
(9, 11, 336, '2022-04-27 20:32:34', '2022-04-27 20:32:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_customer_id_foreign` (`customer_id`),
  ADD KEY `cart_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`cate_name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_product_id_foreign` (`product_id`),
  ADD KEY `wishlist_customer_id_foreign` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `cart_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
