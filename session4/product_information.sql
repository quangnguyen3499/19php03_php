-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2019 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baoquanggogreen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product information`
--

CREATE TABLE `product information` (
  `Id` int(11) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Name of product` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date of manufacture` date NOT NULL,
  `Expiration date` date NOT NULL,
  `Type of product` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product information`
--

INSERT INTO `product information` (`Id`, `User`, `Password`, `Name of product`, `Description`, `Price`, `Date of manufacture`, `Expiration date`, `Type of product`) VALUES
(49, '5', '*B06090CD4F93726B3F8462D7CA26C', '', '', 0, '0000-00-00', '0000-00-00', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product information`
--
ALTER TABLE `product information`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product information`
--
ALTER TABLE `product information`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
