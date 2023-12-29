-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2023 lúc 12:52 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `magicpost`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `Id` int(11) NOT NULL,
  `Vai_tro` varchar(100) NOT NULL,
  `Ho_ten` varchar(100) NOT NULL,
  `So_dien_thoai` varchar(15) NOT NULL,
  `Dia_chi` varchar(100) NOT NULL,
  `Ma_nhan_vien` varchar(15) NOT NULL,
  `Ten_tai_khoan` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mat_khau` varchar(100) NOT NULL,
  `Ma_don_vi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`Id`, `Vai_tro`, `Ho_ten`, `So_dien_thoai`, `Dia_chi`, `Ma_nhan_vien`, `Ten_tai_khoan`, `Email`, `Mat_khau`, `Ma_don_vi`) VALUES
(1, 'Nhân viên điểm tập kết', 'Nguyễn Hoàng My', '0125436512', 'Hà-Nội', 'MKIS152', 'HoangMy', 'NguyenHangMy@gmail.com', '123456789', 'MASFH52'),
(2, 'Quản lý điểm giao dịch', 'Nguyễn Thị A', '0246512', 'Hà-Nội', 'MKSSA2', 'NguyenThiA', 'NguyenThiA@nc.lk', '123456789', 'MASHF14'),
(3, 'Quản lý điểm tập kết', 'Nguyễn Văn A', '0956738563', 'Hà nội', 'MKSSA4', 'Abcxyz', 'nguyenvana@gmail.com', '123456789', 'MASFH52'),
(4, 'Giao dịch viên', 'Nguyễn Văn B', '0958375934', 'Hà Nội', 'MKSSA6', 'nguyenvanb', 'nguyenvanb@gmail.com', '123456789', 'MASHF14'),
(283, 'Giao dịch viên', 'Nguyễn Văn E', '09216483641', 'Hồ Chí Minh', 'MASH1478232', 'NguyenVanE', 'nguyenvane@gmail.com', '123456789', 'MASHF14'),
(284, 'Nhâ', 'Nguyễn Thị E', '0947564823', 'Hà Nội', 'MKIS15223', 'NguyenThiE', 'nguyenthie@gmail.com', '123456789', 'MASFH52'),
(285, 'Nhân viên điểm tập kết', 'Nguyễn Thi T', '0947568374', 'Hà nội', 'MKIS152412', 'NguyenThiT', 'nguyenthit@gmail.com', '123456789', 'MASFH52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_user`
--

CREATE TABLE `account_user` (
  `Id` int(10) NOT NULL,
  `Ma_khach_hang` varchar(15) NOT NULL,
  `So_dien_thoai` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Dia_chi` varchar(100) NOT NULL,
  `Ten_tai_khoan` varchar(15) NOT NULL,
  `Mat_khau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account_user`
--

INSERT INTO `account_user` (`Id`, `Ma_khach_hang`, `So_dien_thoai`, `Email`, `Dia_chi`, `Ten_tai_khoan`, `Mat_khau`) VALUES
(1, 'MHSA14', '0102471', 'Hiha1@lkm.ja', 'Ninh bình', 'user2', '125'),
(2, 'MJST1', '02446512', 'kisadf@nc.lk', 'Hà-Nội', 'user1', '125'),
(3, 'MJGST1', '0246512', 'kisasdf@nc.lk', 'Hà-Nội', 'user3', '125');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_account`
--

CREATE TABLE `admin_account` (
  `Id` int(10) NOT NULL,
  `Ho_ten` varchar(20) NOT NULL,
  `Ten_tai_khoan` varchar(100) NOT NULL,
  `So_dien_thoai` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mat_khau` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_account`
--

INSERT INTO `admin_account` (`Id`, `Ho_ten`, `Ten_tai_khoan`, `So_dien_thoai`, `Email`, `Mat_khau`) VALUES
(1, 'Nguyễn Trọng A', 'NguyenTrongA', '012345678', 'adminweb1@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content`
--

CREATE TABLE `content` (
  `Id` int(100) NOT NULL,
  `Ma_don_hang` varchar(15) NOT NULL,
  `Noi_dung` varchar(100) NOT NULL,
  `So_luong` int(20) DEFAULT NULL,
  `Gia_tri` varchar(100) DEFAULT NULL,
  `Giay_to_kem_theo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `content`
--

INSERT INTO `content` (`Id`, `Ma_don_hang`, `Noi_dung`, `So_luong`, `Gia_tri`, `Giay_to_kem_theo`) VALUES
(1, 'MKLS974', 'ốp lưng ', 2, '30000', 'không'),
(2, 'MKLS973', 'móc chìa khoá', 6, '40000', 'không'),
(4, 'MLS9574', 'cần câu cá', 1, '40000', 'không');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `Id` int(11) NOT NULL,
  `Ten_mat_hang` varchar(100) NOT NULL,
  `Ma_don_hang` varchar(100) NOT NULL,
  `Nguoi_gui` varchar(100) NOT NULL,
  `Ma_khach_hang` varchar(15) DEFAULT NULL,
  `Sdt_nguoi_gui` varchar(15) NOT NULL,
  `Dia_chi_gui` varchar(100) NOT NULL,
  `Ma_buu_chinh_gui` varchar(15) DEFAULT NULL,
  `Nguoi_nhan` varchar(100) NOT NULL,
  `Sdt_nguoi_nhan` varchar(15) NOT NULL,
  `Dia_chi_nhan` varchar(100) NOT NULL,
  `Ma_buu_chinh_nhan` varchar(15) DEFAULT NULL,
  `Loai_hang` varchar(20) NOT NULL,
  `Chi_dan` varchar(100) DEFAULT NULL,
  `Ghi_chu` varchar(100) DEFAULT NULL,
  `Cuoc_phi` varchar(100) DEFAULT NULL,
  `COD` varchar(15) DEFAULT NULL,
  `Khoi_luong` varchar(15) DEFAULT NULL,
  `Thoi_gian_gui` varchar(10) NOT NULL,
  `Thoi_gian_hoan_thanh` varchar(10) NOT NULL,
  `Quan_ly_cong_ty` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`Id`, `Ten_mat_hang`, `Ma_don_hang`, `Nguoi_gui`, `Ma_khach_hang`, `Sdt_nguoi_gui`, `Dia_chi_gui`, `Ma_buu_chinh_gui`, `Nguoi_nhan`, `Sdt_nguoi_nhan`, `Dia_chi_nhan`, `Ma_buu_chinh_nhan`, `Loai_hang`, `Chi_dan`, `Ghi_chu`, `Cuoc_phi`, `COD`, `Khoi_luong`, `Thoi_gian_gui`, `Thoi_gian_hoan_thanh`, `Quan_ly_cong_ty`) VALUES
(1, 'Bóng đèn', 'MKSA15421', 'kiên trung', 'MIUTS541', '0136584152', 'TP.HCM', '90001245', 'Thiên sa', '0945123652', 'Hà Nội', '9103852', 'Hàng hoá', 'Huỷ', 'không', '18000', '0', '0.2kg', '2/10/2023', '15/11/2023', 'Nguyễn Trọng A'),
(2, 'Vợt muỗi', 'MKS5421', 'kiên trung', 'MIUTS541', '0136584152', 'TP.HCM', '90001245', 'Thiên sa', '0945123652', 'Hà Nội', '9103852', 'Hàng hoá', 'Huỷ', 'không', '18000', '0', '0.2kg', '3/10/2023', '15/11/2023', 'Nguyễn Trọng A'),
(4, 'Bàn nâng hạ', 'MKLS5444', 'Hoàng Đại', 'MJLTS541', '0152184152', 'TP.HCM', '90001214', 'LIễu Châu', '094963652', 'TP.HCM', '9000125', 'Hàng hoá', 'Huỷ', 'không', '10000', '0', '2.0kg', '11/12/2023', '21/12/2023', 'Nguyễn Trọng A'),
(5, 'hàng hoá', 'MKLS974', 'Hoàng Đại', 'MJLTS541', '0152184152', 'TP.HCM', '90001214', 'Thế Nhân', '094993652', 'TP.HCM', '9000185', 'Hàng hoá', 'Chuyển hoàn ngay', 'không', '0', '10000', '2.0kg', '11/12/2023', '22/12/2023', 'Nguyễn Trọng A'),
(20, 'Bàn ', 'MKLA123123', 'Nguyễn Văn Q', 'MASH212312', '09384573284', 'Hà Nội', 'MASHF14', 'Nguyễn Văn P', '0948573841', 'Hồ Chí ', 'MASFH52', 'Hàng hóa nặng', 'Không', 'Không', '343.098 VND', '132445131', '32kg', '12/12/2022', '12/13/2023', 'Nguyễn Văn B');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_status`
--

CREATE TABLE `order_status` (
  `Id` int(11) NOT NULL,
  `Ma_don_hang` varchar(100) NOT NULL,
  `Tinh_trang` varchar(100) NOT NULL,
  `Ma_nhan_vien` varchar(15) NOT NULL,
  `Thoi_gian_nhan` varchar(15) NOT NULL,
  `Thoi_gian_tra` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_status`
--

INSERT INTO `order_status` (`Id`, `Ma_don_hang`, `Tinh_trang`, `Ma_nhan_vien`, `Thoi_gian_nhan`, `Thoi_gian_tra`) VALUES
(1, 'MKSA15421', 'Đang chờ xác nhận', 'MKIS152', '11:20-11/12/202', ''),
(12, 'MKS5421', 'Đến điểm tập kết', 'MKSSA6', '3/10/2023', '15/11/2023'),
(14, 'MKLS974', 'Đến tay người dùng', 'MKIS152', '11/12/2023', '22/12/2023'),
(15, 'MKLA21', 'Đến tay người dùng', 'MKIS152', '11:50-11/9/2022', '11:50-20/12/202'),
(16, 'MKS5421', 'Đến điểm tập kết', 'MKIS152', '11:50-11/9/2022', '11:50-20/12/202'),
(17, 'MKLA21', 'Đã đến tay người dùng', 'MKIS152', '11:50-11/12/202', '11:50-20/12/202');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `workplace`
--

CREATE TABLE `workplace` (
  `Id` int(10) NOT NULL,
  `Ma_don_vi` varchar(10) NOT NULL,
  `Ma_buu_chinh` varchar(10) NOT NULL,
  `Dia_chi` varchar(100) NOT NULL,
  `Quan_ly` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `workplace`
--

INSERT INTO `workplace` (`Id`, `Ma_don_vi`, `Ma_buu_chinh`, `Dia_chi`, `Quan_ly`) VALUES
(1, 'MASHF14', '9000014', 'Hoàn Kiếm-Hà Nội', 'Nguyễn Trọng A'),
(2, 'MASFH52', '921000', 'Phú Thọ', 'Nguyễn Trọng A');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Ma_nhan_vien` (`Ma_nhan_vien`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `So_dien_thoai` (`So_dien_thoai`),
  ADD UNIQUE KEY `Ten_tai_khoan` (`Ten_tai_khoan`),
  ADD KEY `thuộc đơn vị` (`Ma_don_vi`);

--
-- Chỉ mục cho bảng `account_user`
--
ALTER TABLE `account_user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Ma_khach_hang` (`Ma_khach_hang`,`So_dien_thoai`,`Email`,`Ten_tai_khoan`);

--
-- Chỉ mục cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`Id`) USING BTREE,
  ADD UNIQUE KEY `Id` (`Email`,`Ten_tai_khoan`,`So_dien_thoai`) USING BTREE,
  ADD UNIQUE KEY `Ho_ten` (`Ho_ten`);

--
-- Chỉ mục cho bảng `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Ma_don_hang` (`Ma_don_hang`);

--
-- Chỉ mục cho bảng `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `workplace`
--
ALTER TABLE `workplace`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Ma_buu_chinh` (`Ma_buu_chinh`),
  ADD UNIQUE KEY `Ma_don_vi` (`Ma_don_vi`),
  ADD UNIQUE KEY `Dia_chi` (`Dia_chi`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT cho bảng `account_user`
--
ALTER TABLE `account_user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `content`
--
ALTER TABLE `content`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `oder`
--
ALTER TABLE `oder`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `order_status`
--
ALTER TABLE `order_status`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `workplace`
--
ALTER TABLE `workplace`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `thuộc đơn vị` FOREIGN KEY (`Ma_don_vi`) REFERENCES `workplace` (`Ma_don_vi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
