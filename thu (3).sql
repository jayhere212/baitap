-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2021 lúc 09:19 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `diemtb` int(11) DEFAULT NULL,
  `xeploai` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`id`, `fullname`, `diemtb`, `xeploai`) VALUES
(9, 'Nguyễn Hoàng Anh', 8, 'Khá'),
(10, 'Phạm Thành Đạt', 7, 'Khá'),
(11, 'Nguyễn Mỹ Linh', 9, 'Giỏi'),
(12, '	Phạm Thị Ngọc', 10, 'Giỏi'),
(13, '	Nguyễn Thị Mỹ Yến', 8, 'Giỏi'),
(14, 'Triệu Thanh Phú', 7, 'Khá'),
(15, 'Đặng Hoàng Phúc', 5, 'Trung Bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`id`, `fullname`, `email`, `address`, `sdt`, `ngaysinh`, `gioitinh`) VALUES
(3, 'Nguyễn Trà Mi', 'trami@gmail.com', 'Hoàng Mai, Hà Nội', 842556987, '1992-06-08', 'Nữ'),
(4, 'Lê Phương Mai', 'phuongmai@gmail.com', 'Đống Đa, Hà Nội', 865336874, '1991-10-17', 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `fullname`, `email`, `address`, `sdt`, `ngaysinh`, `gioitinh`) VALUES
(8, 'Nguyễn Hoàng Anh', 'hoanganh@gmail.com', 'Tây Hồ, Hà Nội', 869554875, '2001-06-14', 'Nam'),
(9, 'Đặng Anh Khoa', 'anhkhoa@gmail.com', 'Đống Đa, Hà Nội', 865338954, '2001-07-11', 'Nam'),
(10, 'Lê Hoàng Long', 'hoanglong@gmail.com', 'Thanh Trì, Hà Nội', 854789548, '2001-04-13', 'Nam'),
(11, 'Nguyễn Ngọc Anh', 'ngocanh@gmail.com', 'Thanh Trì, Hà Nội', 869547865, '2001-10-17', 'Nữ'),
(12, 'Phạm Thị Ngọc', 'ngoc2k1@gmail.com', 'Hà Nội', 856448595, '2001-01-10', 'Nữ'),
(13, 'Nguyễn Thị Mỹ Yến', 'yen@gmail.com', 'Ha Giang', 824336594, '2001-07-20', 'Nữ'),
(14, 'Triệu Thanh Phú', 'thanhphu@gmail.com', 'Nam Định', 58745894, '2001-06-14', 'Nam'),
(15, 'Đặng Hoàng Phúc	', 'phuc@gmail.com', 'sdasd', 861946828, '2001-06-21', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `Username`, `Password`) VALUES
(1, 'user', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diem`
--
ALTER TABLE `diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
