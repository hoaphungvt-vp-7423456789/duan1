-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 05:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(255) NOT NULL,
  `ngaybl` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(41, 'đồng hồ'),
(42, 'máy tính'),
(43, 'điện thoại'),
(44, 'mũ'),
(45, 'vali');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(10) DEFAULT 0,
  `iddm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(17, 'vali1', 5.00, '1030.jpg', 'hàng mới', 0, 45),
(18, 'điện thoại 1', 22.00, '1031.jpg', 'hàng cũ', 0, 43),
(19, 'đòng hồ 1', 10.00, '1001.jpg', 'mạ vàng', 0, 41),
(20, 'đòng hồ 2', 1.00, '1002.jpg', 'hàng cũ', 0, 41),
(21, 'đồng hồ', 3267.00, '1044.jpg', '', 7, 42),
(22, 'đồng hồ', 146.00, '1043.jpg', '', 7, 41);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(7, '', '123456', 'phunghoavs0704@gmail.com', 'rgrhrj', '0567894236', 0),
(8, '', '123456', 'hoaptph29645@fpt.edu.vn', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_binhluan_sanpham` (`idpro`),
  ADD KEY `lk_binhluan_khachang` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_khachang` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `lk_binhluan_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
