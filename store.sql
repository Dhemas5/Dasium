-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 12:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `gender`, `phone`, `address`, `created`, `updated`) VALUES
(1, 'Dhemas', 'L', '621387632', 'Jakarta', '2023-09-14 20:57:36', '2023-10-02 13:57:44'),
(6, 'Vivi', 'P', '07326347890', 'Bandung', '2023-10-10 10:46:05', NULL),
(8, 'Andre', 'L', '128728910', 'Jember', '2023-11-20 08:10:07', NULL),
(9, 'Rifa', 'P', '3993', 'Tanggul', '2023-11-20 11:16:27', NULL),
(10, 'Umdatul', 'P', '3763982', 'Tanggul', '2023-11-20 11:16:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_colour`
--

CREATE TABLE `p_colour` (
  `colour_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_colour`
--

INSERT INTO `p_colour` (`colour_id`, `name`, `created`, `updated`) VALUES
(1, 'Hitam', '2023-10-11 11:28:44', NULL),
(2, 'Merah', '2023-10-11 11:28:52', NULL),
(3, 'Hijau', '2023-10-11 12:08:48', NULL),
(4, 'Putih', '2023-10-11 12:42:24', NULL),
(5, 'Hijau Muda', '2023-11-20 10:16:37', NULL),
(6, 'Biru', '2023-11-20 10:16:49', NULL),
(7, 'Abu Muda', '2023-11-20 10:17:02', NULL),
(8, 'Purple', '2023-11-20 10:17:14', NULL),
(9, 'Broken White', '2023-11-20 10:17:28', NULL),
(10, 'Sage', '2023-11-20 10:17:47', NULL),
(11, 'Navy', '2023-11-20 10:17:55', NULL),
(12, 'Biru Muda', '2023-11-20 10:18:26', NULL),
(13, 'Coksu', '2023-11-20 10:18:41', NULL),
(14, 'Brown Sugar', '2023-11-20 10:18:52', NULL),
(15, 'Milo', '2023-11-20 10:18:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `colour_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(10) NOT NULL DEFAULT 0,
  `image` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `kategori_id`, `unit_id`, `colour_id`, `price`, `stock`, `image`, `created`, `updated`) VALUES
(4, 'A003', 'Kaos Bagus', 2, 3, 14, 50000, 98, 'item-231120-cd8df26da9.png', '2023-09-16 09:37:24', '2023-11-22 04:32:20'),
(5, 'A008', 'Baju Slipknot', 2, 5, 2, 100000, 198, 'item-230925-60666bc15d.png', '2023-09-25 11:13:04', '2023-11-22 04:32:05'),
(7, 'A001', 'Kaos Olahraga', 7, 3, 6, 1000000, 98, NULL, '2023-10-03 05:09:55', '2023-11-22 04:31:50'),
(8, 'A002', 'Jaket', 3, 4, 14, 100000, 200, NULL, '2023-10-03 05:10:44', '2023-11-22 04:31:35'),
(9, 'A004', 'baju tidur', 2, 4, 5, 21000, 47, NULL, '2023-10-03 05:11:57', '2023-11-22 04:31:25'),
(10, 'A005', 'jaket adidas', 2, 6, 2, 100000, 97, NULL, '2023-10-03 05:13:17', '2023-11-22 04:31:16'),
(11, 'A006', 'jaket GAP', 3, 5, 3, 75000, 119, NULL, '2023-10-03 05:14:16', '2023-11-22 04:31:07'),
(12, 'A007', 'jaket gelembung', 3, 5, 12, 100000, 109, NULL, '2023-10-03 05:14:59', '2023-11-22 04:30:57'),
(13, 'A009', 'Baju Adidas', 2, 4, 14, 80000, 98, NULL, '2023-10-03 05:15:44', '2023-11-22 04:30:47'),
(14, 'A010', 'Kaos Persid', 7, 4, 1, 10000000, 210, NULL, '2023-10-03 05:16:52', '2023-11-22 04:30:38'),
(15, 'A011', 'Baju Sekolah', 2, 5, 12, 10000, 160, 'item-231003-d88f91b9ac.jpg', '2023-10-03 05:17:43', '2023-11-22 04:30:28'),
(17, 'A012', 'Baju Sekolah', 3, 3, 4, 10000, 146, NULL, '2023-11-20 08:14:28', '2023-11-20 04:41:23'),
(18, '7020756U', 'silicon', 8, 4, 6, 20000, 9, NULL, '2023-11-21 08:05:24', NULL),
(19, '1213232', 'Hp', 8, 3, 12, 100000, 0, NULL, '2023-11-23 04:21:16', NULL),
(20, '4970129727514', 'spidol', 7, 4, 13, 10000, 50, NULL, '2023-11-28 10:36:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_kategori`
--

CREATE TABLE `p_kategori` (
  `kategori_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_kategori`
--

INSERT INTO `p_kategori` (`kategori_id`, `name`, `created`, `updated`) VALUES
(2, 'Wanita', '2023-09-15 09:38:39', '2023-11-20 15:38:25'),
(3, 'Pria', '2023-09-15 10:52:37', '2023-10-10 05:50:56'),
(7, 'Anak - Anak', '2023-09-23 10:00:06', '2023-10-10 05:51:11'),
(8, 'Aksesoris Pakaian', '2023-10-10 10:53:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(3, 'L', '2023-09-15 10:52:37', '2023-10-02 23:56:13'),
(4, 'XL', '2023-09-15 11:13:43', '2023-09-18 09:17:00'),
(5, 'XXL', '2023-09-15 19:38:28', '2023-09-18 09:17:09'),
(6, 'S', '2023-09-18 14:17:13', NULL),
(7, 'M', '2023-09-18 14:17:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(1, 'Toko A', '12345678', 'Jakarta', 'Ready', '2023-09-14 17:13:12', '2023-10-02 13:57:32'),
(4, 'Toko X', '6376564', 'Jabar', NULL, '2023-09-14 18:46:14', '2023-09-25 05:28:52'),
(9, 'Toko hasan', '09837442374', 'tanggul wetan', NULL, '2023-11-20 08:01:49', '2023-11-20 05:15:53'),
(10, 'Toko Jaya', '38937384', 'Tanggul', NULL, '2023-11-20 21:37:48', '2023-11-20 15:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_cart`
--

CREATE TABLE `t_cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `discount_item` int(11) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_sale`
--

CREATE TABLE `t_sale` (
  `sale_id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_sale`
--

INSERT INTO `t_sale` (`sale_id`, `invoice`, `member_id`, `total_price`, `discount`, `final_price`, `cash`, `remaining`, `note`, `date`, `user_id`, `created`) VALUES
(15, 'KT2311150001', 1, 150000, 0, 150000, 200000, 50000, '', '2023-11-15', 1, '2023-11-15 08:59:13'),
(16, 'KT2311160001', 1, 100000, 0, 100000, 200000, 100000, '', '2023-11-16', 1, '2023-11-16 10:49:12'),
(17, 'KT2311160002', NULL, 100000, 0, 100000, 200000, 100000, '', '2023-11-16', 1, '2023-11-16 11:10:17'),
(19, 'KT2311200002', NULL, 50000, 0, 50000, 100000, 50000, '', '2023-11-20', 1, '2023-11-20 08:08:03'),
(20, 'KT2311200003', 8, 40000, 0, 40000, 50000, 10000, '', '2023-11-20', 1, '2023-11-20 10:26:56'),
(21, 'KT2311200004', NULL, 2142000, 0, 2142000, 3000000, 858000, '', '2023-11-20', 1, '2023-11-20 10:28:38'),
(22, 'KT2311200005', NULL, 100000, 0, 100000, 100000, 0, '', '2023-11-20', 1, '2023-11-20 10:30:19'),
(23, 'KT2311200006', NULL, 160000, 0, 160000, 200000, 40000, '', '2023-11-20', 1, '2023-11-20 10:31:19'),
(24, 'KT2311210001', NULL, 21000, 0, 21000, 30000, 9000, '', '2023-11-21', 1, '2023-11-21 07:55:13');

--
-- Triggers `t_sale`
--
DELIMITER $$
CREATE TRIGGER `del_detail` AFTER DELETE ON `t_sale` FOR EACH ROW DELETE FROM t_sale_detail
WHERE sale_id = OLD.sale_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `t_sale_detail`
--

CREATE TABLE `t_sale_detail` (
  `detail_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `discount_item` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_sale_detail`
--

INSERT INTO `t_sale_detail` (`detail_id`, `sale_id`, `item_id`, `price`, `qty`, `discount_item`, `total`) VALUES
(7, 15, 10, 100000, 1, 0, 100000),
(8, 15, 4, 50000, 1, 0, 50000),
(9, 16, 10, 100000, 1, 0, 100000),
(10, 17, 10, 100000, 1, 0, 100000),
(12, 19, 4, 50000, 1, 0, 50000),
(13, 20, 17, 10000, 4, 0, 40000),
(14, 21, 7, 1000000, 2, 0, 2000000),
(15, 21, 9, 21000, 2, 0, 42000),
(16, 21, 12, 100000, 1, 0, 100000),
(17, 22, 5, 100000, 1, 0, 100000),
(18, 23, 13, 80000, 2, 0, 160000),
(19, 24, 9, 21000, 1, 0, 21000),
(20, 0, 11, 75000, 1, 0, 75000),
(21, 0, 5, 100000, 1, 0, 100000),
(22, 0, 18, 20000, 1, 0, 20000);

--
-- Triggers `t_sale_detail`
--
DELIMITER $$
CREATE TRIGGER `stock_min` AFTER INSERT ON `t_sale_detail` FOR EACH ROW BEGIN
	UPDATE p_item SET stock = stock - NEW.qty
    WHERE item_id = NEW.item_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stock_return` AFTER DELETE ON `t_sale_detail` FOR EACH ROW UPDATE p_item SET stock = stock + OLD.qty
WHERE item_id = OLD.item_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(200) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `supplier_id`, `qty`, `date`, `created`, `user_id`) VALUES
(6, 4, 'in', 'Kulakan', 4, 100, '2023-09-20', '2023-09-21 04:36:47', 1),
(9, 10, 'in', 'Kulakan', 1, 100, '2023-10-10', '2023-10-10 10:48:21', 1),
(15, 9, 'in', 'Kulakan', 9, 50, '2023-11-20', '2023-11-20 10:22:31', 1),
(16, 11, 'in', 'Kulakan', 4, 20, '2023-11-20', '2023-11-20 10:23:00', 1),
(17, 12, 'in', 'Kulakan', 9, 150, '2023-11-20', '2023-11-20 10:23:19', 1),
(18, 5, 'in', 'Kulakan', 1, 100, '2023-11-20', '2023-11-20 10:23:51', 1),
(19, 13, 'in', 'Kulakan', 4, 100, '2023-11-20', '2023-11-20 10:24:12', 1),
(20, 14, 'in', 'Kulakan', 4, 200, '2023-11-20', '2023-11-20 10:24:34', 1),
(21, 15, 'in', 'Kulakan', 1, 100, '2023-11-20', '2023-11-20 10:24:53', 1),
(22, 17, 'in', 'Kulakan', 4, 150, '2023-11-20', '2023-11-20 10:25:26', 1),
(24, 14, 'in', 'Kulakan', 9, 10, '2023-11-20', '2023-11-20 20:56:43', 1),
(26, 7, 'in', 'Kulakan', 1, 100, '2023-11-20', '2023-11-20 21:02:19', 1),
(27, 12, 'out', 'Rusak', NULL, 40, '2023-11-20', '2023-11-20 21:09:35', 1),
(28, 11, 'in', 'Tambahan', 10, 100, '2023-11-20', '2023-11-20 21:42:15', 1),
(29, 8, 'in', 'Kulakan', 9, 200, '2023-11-20', '2023-11-20 21:43:27', 1),
(30, 15, 'in', 'Tambahan', 9, 10, '2023-11-20', '2023-11-20 21:45:55', 1),
(31, 15, 'in', 'Tambahan', 1, 50, '2023-11-20', '2023-11-20 21:46:57', 1),
(32, 5, 'in', 'Tambahan', 10, 100, '2023-11-20', '2023-11-20 21:48:05', 1),
(33, 18, 'in', 'Kulakan', 9, 10, '2023-11-21', '2023-11-21 08:06:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` varchar(1) NOT NULL COMMENT '1:Admin, 2:Kasir'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Mahardika Dhemas Pratama', 'Jember', '1'),
(2, 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', 'kasir', NULL, '2'),
(3, 'Pelajar', '8cb2237d0679ca88db6464eac60da96345513964', 'Jeka', 'jakarta', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `p_colour`
--
ALTER TABLE `p_colour`
  ADD PRIMARY KEY (`colour_id`);

--
-- Indexes for table `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `colour_id` (`colour_id`);

--
-- Indexes for table `p_kategori`
--
ALTER TABLE `p_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `t_sale`
--
ALTER TABLE `t_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `p_colour`
--
ALTER TABLE `p_colour`
  MODIFY `colour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `p_kategori`
--
ALTER TABLE `p_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_sale`
--
ALTER TABLE `t_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_item`
--
ALTER TABLE `p_item`
  ADD CONSTRAINT `p_item_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `p_kategori` (`kategori_id`),
  ADD CONSTRAINT `p_item_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `p_unit` (`unit_id`),
  ADD CONSTRAINT `p_item_ibfk_3` FOREIGN KEY (`colour_id`) REFERENCES `p_colour` (`colour_id`);

--
-- Constraints for table `t_cart`
--
ALTER TABLE `t_cart`
  ADD CONSTRAINT `t_cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  ADD CONSTRAINT `t_sale_detail_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`);

--
-- Constraints for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD CONSTRAINT `t_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_stock_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stock_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
