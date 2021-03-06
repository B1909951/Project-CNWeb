-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 03:44 AM
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
(18, 11, 333, 1, 0, '2022-04-28 19:41:38', '2022-04-28 19:41:38'),
(19, 11, 330, 1, 0, '2022-04-28 19:56:17', '2022-04-28 19:56:17'),
(20, 11, 334, 1, 0, '2022-04-28 20:08:19', '2022-04-28 20:08:19'),
(21, 11, 331, 1, 0, '2022-04-28 20:43:52', '2022-04-28 20:43:52');

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
(13, 'Truy???n tranh', 1, '<p>Truy???n tranh d&agrave;nh cho m???i l???a tu???i</p>\r\n', '2022-04-22 03:08:27', '2022-04-26 14:26:22', -1),
(14, 'S??ch gi??o khoa', 1, '<p>D&agrave;nh cho ch????ng tr&igrave;nh gi&aacute;o d???c</p>\r\n', '2022-04-22 03:08:47', '2022-04-22 03:08:47', -1),
(15, 'Ti???u thuy???t', 1, '<p>Th??? l???i truy???n ch???</p>\r\n', '2022-04-22 03:09:11', '2022-04-22 03:09:11', -1),
(16, 'T??? ??i???n', 1, '<p>S&aacute;ch cung c???p ki???n th???c</p>\r\n', '2022-04-22 03:10:01', '2022-04-22 03:10:01', -1),
(17, 'Truy???n kinh d???', 1, '<p>Truy???n d&agrave;nh cho l???a tu???i tr&ecirc;n 18, c&oacute; y???u t??? kinh d???</p>\r\n', '2022-04-26 14:25:38', '2022-04-26 14:26:11', -1);

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
(3, 'H?? Ch??nh Nam', 'hachanhnam10@gmail.com', '0965918874', 'Can Tho, Viet Nam', 'chanhnam9', '2022-04-26 14:24:25', '2022-04-26 14:24:25'),
(4, 'chanhnam11a3', 'chanhnam10@gmail.com', '9761232', '1', '1', '2022-04-26 14:28:42', '2022-04-26 14:28:42'),
(5, '??d', 'hachanhaaaaanam10@gmail.com', '0965918874', '1', '1', '2022-04-26 14:29:05', '2022-04-26 14:29:05'),
(6, '123', '123123@ha', '213', '213', '123', '2022-04-26 14:30:11', '2022-04-26 14:30:11'),
(7, 'chanhnam11a3', 'chanhnam10@gmail.com1', '9761232', '1', '', '2022-04-26 14:33:25', '2022-04-26 14:33:25'),
(8, '213', '123123@ha123', '123', '123', '123', '2022-04-26 14:35:06', '2022-04-26 14:35:06'),
(9, '', '', '', '', '', '2022-04-26 14:35:33', '2022-04-26 14:35:33'),
(10, 'chanhnam11a3', 'chanhnam10@gm11ail.com', '9761232', '1', '1', '2022-04-26 14:36:18', '2022-04-26 14:36:18'),
(11, 'H?? Ch??nh Nam', 'chanhnam0123@gmail.com', '0965918874', 'C???n Th??', 'chanhnam9', '2022-04-27 13:13:34', '2022-04-27 13:13:34');

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
(330, 'Solo leveling', 'sololeveling.jpg', 13, 1200000, '<p>Ships from and sold by EXPERAL SINGAPORE Publisher: Little, Brown &amp; Company ISBN 13: 9781975319434 Condition: Brandnew Binding: paperback Pages: 192 Weight: 526.17 (gram) Dimensons: 210 x 152 x 16 (mm) =================================== The official English print publication of the popular Korean webcomic!E-class hunter Jinwoo Sung is the weakest of them all. Looked down on by everyone, he has no money, no abilities to speak of, and no other job prospects. So when his party finds a hidden dungeon, he&#39;s determined to use this chance to change his life for the the opportunity he finds is a bit different from what he had in mind!</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Little, Brown &amp; Company;&nbsp;Nh&agrave; xu???t b???n:&nbsp;Little, Brown &amp; Company;</p>\r\n', 4.00, '2022-04-22 03:14:40', '2022-04-26 05:45:53'),
(331, 'SPY x Family 3', 'spyxfamily.jpg', 13, 152000, '<p><strong>SPY x FAMILY 3 (???????????????????????????)</strong></p>\r\n\r\n<p>?????????????????????????????????????????????????????????!! ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????&hellip;!?</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Kinokuniya Book Stores;&nbsp;Nh&agrave; xu???t b???n:&nbsp;Shueisha</p>\r\n', 5.00, '2022-04-22 03:19:34', '2022-04-22 03:19:34'),
(332, 'Th??m t??? ???? ch???t 1', 'ttdc.jpg', 15, 105910, '<p>Th&aacute;m t??? ??&atilde; ch???t (t&ecirc;n g???c: Tantei wa mou shindeiru)&nbsp;l&agrave; series light novel trinh th&aacute;m c???a t&aacute;c gi??? m???i Nigozyu, ng?????i ??&atilde; chi???n th???ng gi???i th?????ng t&acirc;n binh c???a MF Bunko J l???n th??? 15 d&agrave;nh cho c&aacute;c t&aacute;c gi??? Light novel m???i tri???n v???ng. T&iacute;nh t???i th???i ??i???m hi???n t???i, Th&aacute;m t??? ??&atilde; ch???t ??&atilde; ra m???t 5 t???p t???i Nh???t B???n v???i doanh s??? ???n t?????ng 500.000 b???n ???????c b&aacute;n ra c&ugrave;ng h&agrave;ng lo???t c&aacute;c phi&ecirc;n b???n chuy???n th??? truy???n tranh v&agrave; m???i nh???t l&agrave; TV series anime c??ng ??ang ???????c c&ocirc;ng chi???u b???n quy???n t???i Vi???t Nam, thu h&uacute;t h&agrave;ng tr??m ngh&igrave;n l?????t xem m???i t???p.</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: Th&aacute;i H&agrave;;&nbsp;D???ch Gi???:&nbsp;Nguy???n D????ng Qu???nh dich, Nguy&ecirc;n Ph???m hi???u ??&iacute;nh- Minh ho??? b&igrave;a: Umibouzu; Nxb: Nh&agrave; Xu???t B???n H&agrave; N???i</p>\r\n', 5.00, '2022-04-22 03:22:05', '2022-04-22 03:24:58'),
(333, 'Re: Zero 7', 'rezero7.jpg', 15, 117600, '<p>&nbsp;</p>\r\n\r\n<p>Re:zero - B???t ?????u L???i ??? Th??? Gi???i Kh&aacute;c 7 (T&aacute;i B???n 2021)</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;IPM;&nbsp;Nh&agrave; xu???t b???n:&nbsp;Nh&agrave; Xu???t B???n H???ng ?????c</p>\r\n', 5.00, '2022-04-22 03:24:47', '2022-04-22 03:24:47'),
(334, 'S??ch gi??o khoa H??a 10', 'hoa10.jpg', 14, 7000, '<p>D??? l???m</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Nh&agrave; xu???t b???n Gi&aacute;o D???c;&nbsp;Nh&agrave; xu???t b???n:&nbsp;Nh&agrave; Xu???t B???n Gi&aacute;o D???c Vi???t Nam</p>\r\n', 1.00, '2022-04-22 03:28:52', '2022-04-22 03:28:52'),
(335, 'B??? s??ch gi??o khoa 11', 'bosgk11.jpg', 14, 160000, '<p>Cu???n h&oacute;a nh&igrave;n s??? qu&aacute;</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Nh&agrave; Xu???t B???n Gi&aacute;o D???c; Nh&agrave; Xu???t b???n:&nbsp;Nh&agrave; Xu???t B???n Gi&aacute;o D???c Vi???t Nam</p>\r\n', 2.00, '2022-04-22 03:30:52', '2022-04-22 03:30:52'),
(336, 'B??? s??ch gi??o khoa 12', 'hoa12.jpg', 14, 180000, '<p>L???i l&agrave; cu???n h&oacute;a, s??? qu&aacute;!!</p>\r\n', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh:&nbsp;Nh&agrave; Xu???t B???n Gi&aacute;o D???c; Nh&agrave; Xu???t b???n:&nbsp;Nh&agrave; Xu???t B???n Gi&aacute;o D???c Vi???t Nam</p>\r\n', 3.00, '2022-04-22 03:32:09', '2022-04-25 12:37:44');

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
(23, 'H?? Ch??nh Nam', 'avatar.jpg', 'chanhnam0123@gmail.com', 0, 'chanhnam9', '2022-04-22 02:08:23', '2022-04-22 02:08:23');

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
(16, 11, 331, '2022-04-28 19:40:50', '2022-04-28 19:40:50'),
(18, 11, 334, '2022-04-28 20:08:25', '2022-04-28 20:08:25'),
(19, 11, 333, '2022-04-28 20:43:33', '2022-04-28 20:43:33');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
