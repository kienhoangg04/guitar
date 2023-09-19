-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 04:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guitar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `user_id`) VALUES
(1, 'Hot sale', 'img-sale.png', 1),
(2, 'Guitar', 'img-guitar.png', 1),
(3, 'Piano', 'img-piano.png', 1),
(4, 'Organ', 'img-organ.png', 1),
(5, 'Violin', 'img-violin.png', 1),
(6, 'Ukulele', 'img-ukulele.png', 1),
(7, 'Nhạc cụ khác', 'img-nhaccukhac.png', 1),
(8, 'Sách | Phụ kiện', 'img-sach.png', 1),
(9, 'Tin tức', 'img-tintuc.png', 1),
(10, 'Giáo dục', 'img-giaoduc.png', 1),
(11, 'Loa kraoke', 'img-loabluetooth.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_payment` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `customer_note`, `customer_payment`, `status`, `created_at`, `update_at`) VALUES
(12, '10389', 'Kiên Hoàng', '0336693940', 'kienhoang0403@gmail.com', '', '', '', 0, NULL, NULL),
(13, '77135', 'Kiên Hoàng', '0336693940', 'kienhoang0403@gmail.com', '', 'Giao hàng cuối tuần', 'banking', 0, NULL, NULL),
(27, '73683', 'Kiên Hoàng', '0336693940', 'kienhoang0403@gmail.com', '', '', '', 0, NULL, NULL),
(28, '84746', 'Kiên Hoàng', '0336693940', 'kienhoang0403@gmail.com', 'Lâu thượng - võ nhai - Thái nguyên', '', '', 1, NULL, NULL),
(29, '99321', 'Kiên Hoàng', '0336693940', 'kienhoang0403@gmail.com', 'Lâu thượng - võ nhai - Thái nguyên', '', '', 0, NULL, NULL),
(30, '63770', 'Kiên Hoàng', '0336693940', 'kienhoang0403@gmail.com', 'Lâu thượng - võ nhai - Thái nguyên', '', '', 0, NULL, NULL),
(31, '98802', 'Kiên Hoàng', '0336693940', 'kienhoang0403@gmail.com', 'Lâu thượng - võ nhai - Thái nguyên', '', '', 0, NULL, NULL),
(32, '58825', 'Kiên Hoàng', '0336693940', 'admin@gmail.com', 'Lâu thượng - võ nhai - thái nguyên', '', 'COD', 0, NULL, NULL),
(33, '58440', 'Nam Trần', '0223366', 'namtran@gmail.com', 'La Mạ - Lâu Thượng - Võ Nhai - Thái Nguyên', 'Giao hàng ngày nghỉ', 'COD', 0, NULL, NULL),
(34, '23587', 'Hoàng Trung Kiên', '0336693940', 'kienhoang0403@gmail.com', 'Lâu thượng - võ nhai - Thái nguyên', '', '', 1, NULL, NULL),
(35, '57308', 'Hoàng Trung Kiên', '0336693940', 'kienhoang0403@gmail.com', 'Lâu thượng - võ nhai - Thái nguyên', '', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_qty`) VALUES
(5, 12, 124, 'Đàn Piano Cơ Upright Kawai K800 (Chính Hãng Full Box 100%)', 280000000, 3),
(6, 12, 52, 'Đàn Ukulele AWADON Gỗ KOA Nguyên Tấm', 2200000, 1),
(7, 12, 33, 'Combo đàn guitar Acoustic Ba Đờn J150 tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu', 4401000, 1),
(8, 13, 118, 'Đàn Guitar Acoustic Ba Đờn Taylor T350', 3700000, 1),
(9, 13, 30, 'Đàn Piano Cơ Upright Yamaha U1J (Chính Hãng Full Box 100%)', 108490000, 6),
(14, 27, 61, 'Sáo Dizi DZ1', 250000, 1),
(15, 27, 62, 'Trống điện Yamaha DTX400', 14100000, 1),
(16, 28, 7, 'Đàn Guitar Acoustic Mantic GT-1GCBK Màu Đen', 1800000, 1),
(17, 28, 33, 'Combo đàn guitar Acoustic Ba Đờn J150 tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu', 4401000, 1),
(18, 29, 40, 'Đàn Violin Yamaha V5SA (Chính Hãng Full Box 100%)', 12000000, 3),
(19, 30, 61, 'Sáo Dizi DZ1', 250000, 1),
(20, 31, 14, 'Bộ miếng gảy Dunlop EPPTR04 (Elvis Presley)', 150000, 1),
(21, 32, 14, 'Bộ miếng gảy Dunlop EPPTR04 (Elvis Presley)', 150000, 1),
(22, 33, 34, 'Đàn Guitar Acoustic LuthierV LV-200S', 1800000, 1),
(23, 33, 118, 'Đàn Guitar Acoustic Ba Đờn Taylor T350', 3700000, 1),
(24, 34, 60, 'Kèn Melodica Stagg MELOSTAR32BK (Đen)', 700000, 1),
(25, 35, 35, 'Đàn Piano Cuộn Konix Flexible PA88 (88 Phím - Pin Sạc 1000mah)', 1800000, 1),
(26, 35, 34, 'Đàn Guitar Acoustic LuthierV LV-200S', 1800000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `price_sale` float DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `price`, `price_sale`, `quantity`, `category_id`, `user_id`) VALUES
(2, 'Combo đàn guitar Acoustic Mantic GT1-GC tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu', 'nb2.jpg', 4491000, 5050000, 30, 1, 1),
(3, 'Đàn Guitar Acoustic Fenix Xanh Ngọc FG150 Dáng A Khuyết', 'nb3.jpg', 1150000, 1600000, 20, 1, 1),
(4, 'Đàn Guitar Acoustic Epiphone DR-100 Natural', 'nb4.jpg', 3500000, NULL, 40, 1, 1),
(5, 'Combo đàn guitar Acoustic Mantic GT1-DCSB tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu ', 'nb5.jpg', 4491000, 5050000, 10, 1, 1),
(6, 'Đàn Guitar Acoustic NG AM411SC Brown (Solid Top) New Model 2021 - Tặng Kèm Bao Đàn Chính Hãng', 'nb6.jpg', 5500000, NULL, 11, 1, 1),
(7, 'Đàn Guitar Acoustic Mantic GT-1GCBK Màu Đen', 'nb7.jpg', 1800000, NULL, 11, 1, 1),
(8, 'Combo đàn guitar Acoustic Rosen G11NA tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu', 'nb8.jpg', 4491000, NULL, 15, 1, 1),
(9, 'Đàn Ukulele Rosen K13NA (Chính Hãng Full Box 100%)', 'nb9.jpg', 1350000, 1500000, 22, 1, 1),
(10, 'Combo đàn guitar Acoustic Mantic GT1-DC tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu', 'nb10.jpg', 4491000, NULL, 25, 1, 1),
(11, 'Đàn Guitar Acoustic Everest E60ACM (Sơn Mờ)', 'nb11.jpg', 4200000, NULL, 9, 1, 1),
(12, 'Đàn Guitar Điện J&D 0VK (Chính Hãng Full Box 100%)', 'nb12.jpg', 7000000, NULL, 25, 1, 1),
(13, 'Ampli Marshall 1936V-E Tủ mở rộng 140W 140X - M31-1936V-E', 'spk1.jpg', 14600000, NULL, 57, 8, 1),
(14, 'Bộ miếng gảy Dunlop EPPTR04 (Elvis Presley)', 'spk2.jpg', 150000, NULL, 39, 8, 1),
(15, 'Ampli Marshall MG101GFX Gold Series 100W - M31-MG101GFX-E', 'spk3.jpg', 10900000, NULL, 33, 8, 1),
(16, 'Tay treo đàn guitar Aroma AH-83A-01', 'spk4.jpeg', 150000, NULL, 32, 8, 1),
(18, 'Dây Đàn Acoustic Guitar Phosphor Bronze D\'Addario EJ26', 'spk6.jpg', 190000, NULL, 30, 8, 1),
(19, 'Bộ Khóa Đàn Guitar Acoustic DerJung DJ 434CX-D2', 'spk7.jpg', 350000, NULL, 11, 8, 1),
(20, 'Giá Để Bản Nhạc GS-02', 'spk8.jpg', 200000, NULL, 25, 8, 1),
(21, 'Kê chân guitar Deviser KCG001', 'spk9.jpg', 100000, NULL, 17, 8, 1),
(22, 'Micro không dây Shure SVX24E/PG58 (Chính Hãng Full Box 100%)', 'spk10.jpg', 7400000, NULL, 12, 8, 1),
(23, 'Miếng Dán Guitar Chống Xước', 'spk11.jpg', 30000, NULL, 10, 8, 1),
(24, 'Dây Line Fender 10M', 'spk12.jpg', 250000, NULL, 27, 8, 1),
(25, 'Ngựa Lược Đàn Guitar Acoustic Bằng Nhựa', 'spk13.jpg', 20000, NULL, 7, 8, 1),
(26, 'Micro không dây Kiwi A3 (Chính Hãng Full Box 100%)', 'spk14.jpg', 2290000, NULL, 11, 8, 1),
(27, 'Giá Để Đàn Guitar Chữ A', 'spk15.jpg', 120000, NULL, 12, 8, 1),
(28, 'Ampli Marshall DSL100H 100W Đầu đàn Guitar ống - M31-DSL100H-E', 'spk16.jpg', 20500000, NULL, 20, 8, 1),
(29, 'Đàn Piano Điện Dynatone DPR1650 (Chính Hãng Full Box 100%)', 'piano1.jpg', 17000000, NULL, 24, 3, 1),
(30, 'Đàn Piano Cơ Upright Yamaha U1J (Chính Hãng Full Box 100%)', 'piano2.jpg', 108490000, NULL, 15, 3, 1),
(31, 'Đàn Piano Điện Yamaha P-45 tặng kèm ghế da (Chính Hãng Full Box 100%)', 'piano3.jpg', 12490000, NULL, 14, 3, 1),
(32, 'Đàn Piano Cơ Grand Yamaha G1BK (Chính Hãng Full Box 100%)', 'piano4.jpg', 260390000, NULL, 14, 3, 1),
(33, 'Combo đàn guitar Acoustic Ba Đờn J150 tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu', 'guitar1.jpg', 4401000, 4950000, 12, 2, 1),
(34, 'Đàn Guitar Acoustic LuthierV LV-200S', 'guitar2.jpg', 1800000, 2000000, 7, 2, 1),
(35, 'Đàn Piano Cuộn Konix Flexible PA88 (88 Phím - Pin Sạc 1000mah)', 'organ1.jpg', 1800000, NULL, 6, 4, 1),
(36, 'Đàn Organ Yamaha PSR-E463 (Chính Hãng Full Box 100%)', 'organ2.jpg', 7990000, NULL, 5, 4, 1),
(37, 'Đàn Violin Silent Yamaha YSV104 (Chính Hãng Full Box 100%)', 'violin1.jpg', 18700000, NULL, 22, 5, 1),
(40, 'Đàn Violin Yamaha V5SA (Chính Hãng Full Box 100%)', 'violin2.jpg', 12000000, NULL, 11, 5, 1),
(41, 'Đàn Violin Suzuki FS-10 (Chính Hãng Full Box 100%)', 'violin3.jpg', 5490000, NULL, 24, 5, 1),
(52, 'Đàn Ukulele AWADON Gỗ KOA Nguyên Tấm', 'ukulele1.jpg', 2200000, 2500000, 17, 6, 1),
(53, 'Đàn Ukulele Rosen K13NA (Chính Hãng Full Box 100%)', 'ukulele2.jpg', 1350000, NULL, 18, 6, 1),
(54, 'Đàn Ukulele Rosen K11NA (Chính Hãng Full Box 100%)', 'ukulele3.jpg', 1170000, NULL, 27, 6, 1),
(55, 'Đàn Ukulele Soprano Nhiều Màu Sắc', 'ukulele4.jpg', 400000, NULL, 33, 6, 1),
(56, 'Đàn Ukulele Rosen K11BR (Chính Hãng Full Box 100%)', 'ukulele5.jpg', 1170000, 1300000, 23, 6, 1),
(59, 'Đàn Kalimba NG KLB03 17 Phím Gỗ Mahogany (Thumb Finger Piano 17 Keys)', 'nhaccukhac1.jpg', 385000, 700000, 24, 7, 1),
(60, 'Kèn Melodica Stagg MELOSTAR32BK (Đen)', 'nhaccukhac2.jpg', 700000, NULL, 16, 7, 1),
(61, 'Sáo Dizi DZ1', 'nhaccukhac3.jpg', 250000, NULL, 7, 7, 1),
(62, 'Trống điện Yamaha DTX400', 'nhaccukhac4.jpg', 14100000, NULL, 26, 7, 1),
(63, 'Sáo recorder Yamaha Rainbow YRS-20B (Xanh da trời)', 'nhaccukhac5.jpg', 275000, NULL, 14, 7, 1),
(64, 'Kèn harmonica Seydel Diatonic Blues Favorite 15201 (Key G)', 'nhaccukhac6.jpg', 2050000, NULL, 22, 7, 1),
(117, 'Đàn Guitar Acoustic Mantic GT-1GCSB Sunburst', 'guitar3.jpg', 1800000, 0, 12, 2, 1),
(118, 'Đàn Guitar Acoustic Ba Đờn Taylor T350', 'guitar4.jpg', 3700000, 0, 31, 2, 1),
(119, 'Combo đàn guitar Acoustic Mantic GT1-GCGR tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu', 'guitar5.jpg', 4491000, 5050000, 12, 2, 1),
(120, 'Combo Đàn Guitar Acoustic Rosen G13NA và Khóa Học Guitar Hiển Râu', 'guitar6.jpg', 2500000, 0, 5, 2, 1),
(121, 'Đàn Guitar Acoustic Poshman S30 Mini ', 'guitar7.jpg', 3000000, 0, 3, 2, 1),
(122, 'Combo đàn guitar Acoustic Ba Đờn J150 tích hợp Equalizer Metb12 và Amplifier Epiphone 15C,Tặng kèm khóa học Hiển Râu', 'guitar8.jpg', 4401000, 5000000, 9, 2, 1),
(123, 'Đàn Piano Cơ Upright Yamaha JX113T (Chính Hãng Full Box 100%)', 'piano5.jpg', 93490000, 0, 10, 3, 1),
(124, 'Đàn Piano Cơ Upright Kawai K800 (Chính Hãng Full Box 100%)', 'piano6.jpg', 280000000, 300000000, 2, 3, 1),
(125, 'Đàn Piano Điện Casio AP-270 (Chính Hãng Full Box 100%)', 'piano7.jpg', 22900000, 23500000, 3, 3, 1),
(126, 'Đàn Piano Điện Kurtzman K710 (Chính Hãng Full Box 100%)', 'piano8.jpg', 18000000, 0, 8, 3, 1),
(127, 'Đàn Organ Yamaha PSR-E273 (Chính Hãng Full Box 100%)', 'organ3.jpg', 3490000, 0, 6, 4, 1),
(128, 'Đàn Organ Casio LK-265 (Chính Hãng Full Box 100%)', 'organ4.jpg', 4600000, 0, 0, 4, 1),
(129, 'Đàn Organ Casio SA-47 (Chính Hãng Full Box 100%)', 'organ5.jpg', 1390000, 0, 13, 4, 1),
(130, 'Đàn Organ Casio LK-S250 (Chính Hãng Full Box 100%)', 'organ6.jpg', 5270000, 0, 0, 4, 1),
(131, 'Đàn Organ Casio CT-X700 (Chính Hãng Full Box 100%)', 'organ7.jpg', 4899000, 0, 0, 4, 1),
(132, 'Đàn Organ Yamaha PSR-SX700 (Chính Hãng Full Box 100%)', 'organ8.jpg', 26990000, 0, 1, 4, 1),
(133, 'Đàn Violin Selmer VI30E4CH (Chính Hãng Full Box 100%)', 'violin4.jpg', 18690000, 0, 3, 5, 1),
(134, 'Đàn Violin Điện Hallmark HB (Chính Hãng Full Box 100%)', 'violin5.jpg', 6000000, 6200000, 4, 5, 1),
(135, 'Đàn Violin Silent Yamaha SV250 (Chính Hãng Full Box 100%)', 'violin6.jpg', 51200000, 0, 2, 5, 1),
(136, 'Đàn Violin Scott & Guan STV 011 Size 4/4 (Chính Hãng Full Box 100%)', 'violin7.jpg', 16000000, 0, 3, 5, 1),
(137, 'Đàn Violin Silent Yamaha YSV104 (Chính Hãng Full Box 100%)', 'violin8.jpg', 18700000, 0, 5, 5, 1),
(138, 'Đàn Ukulele Rosen K14NA (Chính Hãng Full Box 100%)', 'ukulele6.jpg', 1550000, 0, 12, 6, 1),
(139, 'Đàn Ukulele Hula BF-30 (Nâu) ', 'ukulele7.jpg', 1300000, 0, 4, 6, 1),
(140, 'Đàn Ukulele Koa  NG ', 'ukulele8.jpg', 1800000, 0, 8, 6, 1),
(141, 'Bộ trống jazz JBP-0765B', 'nhaccukhac7.jpg', 10000000, 0, 0, 7, 1),
(142, 'Bộ sản phẩm lá Cymbal Victoria và chân đế', 'nhaccukhac8.jpg', 1200000, 0, 0, 7, 1),
(143, 'Bộ trống jazz Deviser JZGD22BK', 'nhaccukhac9.jpg', 10250000, 0, 6, 7, 1),
(144, 'Kèn Alto Saxophone Leister ASE100D', 'nhaccukhac10.jpg', 7200000, 0, 2, 7, 1),
(145, 'Sáo trúc SN01', 'nhaccukhac11.jpg', 150000, 0, 100, 7, 1),
(146, 'Kèn harmonica Diatonic Seydel Blues Favorite 15201C (Key C)', 'nhaccukhac12.jpg', 2050000, 0, 11, 7, 1),
(147, 'Loa karaoke Nhật BIK BS 998X (bass 25cm) (Chính Hãng Full Box 100%)', 'loakaraoke1.jpg', 8700000, 0, 7, 11, 1),
(148, 'Loa Sub JBL PRX 418S (bass 50cm) (Chính Hãng Full Box 100%)', 'loakaraoke2.jpg', 25500000, 0, 4, 11, 1),
(149, 'Combo Loa Karaoke Acoustic TPT Chính Hãng ( Full Box 100%)', 'loakaraoke3.jpg', 23000000, 0, 10, 11, 1),
(150, 'Loa karaoke JBL Ki510 (bass 25cm) (Chính Hãng Full Box 100%)', 'loakaraoke4.jpg', 14800000, 0, 7, 11, 1),
(151, 'Loa karaoke JBL RM10II (PGI, bass 25cm) (Chính Hãng Full Box 100%)', 'loakaraoke5.jpg', 6800000, 0, 0, 11, 1),
(152, 'Loa karaoke JBL MTS10 (bass 25cm) (Chính Hãng Full Box 100%)', 'loakaraoke6.jpg', 21750000, 0, 14, 11, 1),
(153, 'Loa karaoke BMB CSN 300SE (bass 20cm) (Chính Hãng Full Box 100%)', 'loakaraoke7.jpg', 12570000, 13000000, 1, 11, 1),
(154, 'Loa karaoke JBL KP4015 (bass 40cm) (Chính Hãng Full Box 100%)', 'loakaraoke8.jpg', 30140000, 0, 0, 11, 1),
(155, 'Bao Đàn Guitar TYGY 6 lớp (Bao Dù)', 'spk17.jpg', 350000, 0, 0, 8, 1),
(158, 'Đàn guitar acoustic', 'guitar12.jpg', 2100000, 2200000, 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(30) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `fullname`, `phone`, `address`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, NULL, NULL, 0),
(2, 'kienhoang', 'kienhoang0403@gmail.com', 'a', 'Hoàng Trung Kiên', '0336693940', 'Lâu thượng - võ nhai - Thái nguyên', 1),
(13, 'hoang', 'hoangkien1002@gmail.com', 'a', 'Kiên Hoàng', '0099', 'Lâu thượng - võ nhai - thái nguyên', 1),
(14, 'Nam Tran', 'namtran@gmail.com', 'a', 'Nam Trần', '0223366', NULL, 1),
(17, 'user', 'user@gmail.com', 'user', 'Kiên Hoàng', '0336693940', 'Lâu thượng - võ nhai - thái nguyên', 1),
(21, 'test', 'test@gmail.com', 'aaa', 'Kiên Hoàng', '0336693940', 'Lâu thượng - võ nhai - thái nguyên', 1),
(22, 'dangky', 'dangky@gmail.com', 'a', 'Kiên Hoàng', '0336693940', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_UserCate` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `FK_User` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_UserCate` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
