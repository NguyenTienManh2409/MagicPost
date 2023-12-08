-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2023 lúc 04:33 AM
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
-- Cấu trúc bảng cho bảng `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `ClientId` varchar(225) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL,
  `Picture` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `clients`
--

INSERT INTO `clients` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `ClientId`, `Phone`, `Company`, `Address`, `Status`, `Picture`, `date`) VALUES
(1, 'Yahuza', 'Abdul-Hakim', 'Vendetta', 'musheabdulhakim@protonmail.ch', '$2y$10$xU1zDRigag7ZMGs0Egcqoei0SrtZJRX/p425h4qOi5OMKFz32k0UC', 'CLT-613498', '233209229025', 'Microsoft Inc', 'Live from home', 1, 'd41d8cd98f00b204e9800998ecf8427e1601112041', '2020-09-26'),
(2, 'Vendetta', 'Alkaline', 'alkaline', 'musheabdulhakim99@gmail.com', '$2y$10$qUL2APr762X.vvJuNQvqludvabDa.Y3TRHOa.M/qq8WFoeoh7IaWG', 'CLT-217594', '233209229025', 'Falcon Systems', 'Live from home', 1, 'd41d8cd98f00b204e9800998ecf8427e1601112339', '2020-09-26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `Department`, `Date`) VALUES
(2, 'Điểm tập kết', '2020-09-26'),
(3, 'Điểm giao dịch', '2020-09-26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `designations`
--

INSERT INTO `designations` (`id`, `Designation`, `Department`, `Date`) VALUES
(1, 'Trưởng điểm tập kết', 'Điểm tập kết', '2020-09-27'),
(2, 'Trưởng điểm giao dịch', 'Điểm giao dịch', '2020-09-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Employee_Id` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Joining_Date` date NOT NULL DEFAULT current_timestamp(),
  `Picture` varchar(200) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Employee_Id`, `Phone`, `Department`, `Designation`, `Joining_Date`, `Picture`, `DateTime`) VALUES
(3, 'Goerge', 'Merchason', 'George', 'george@gmail.com', '$2y$10$QFstJz1mhq4iHksQyfCpjeaaUlmu7fwFcpCvJlt/C4vbE9Lqjf7IO', 'EMP-283560', '99922246633', 'Web Development', 'Web Designer', '0000-00-00', 'avatar-25.jpg', '2020-09-28 23:46:51'),
(4, 'Mushe', 'Abdul-Hakim', 'abdul', 'musheabdulhakim@protonmail.ch', '$2y$10$E8FuYrk8eyA2s5bccuUNk.bTFXPHjzgbzhgJzIFfZHmevYT6Z41k6', 'EMP-743619', '+233209229025', 'Web Development', 'Web Developer', '2020-09-29', 'avatar-11.jpg', '2020-09-29 00:04:29'),
(5, 'Yahuza', 'Abdul-Hakim', 'Vendetta', 'musheabdulhakim@protonmail.ch', '$2y$10$fBLIUiJ3HTgxW5RcEdfi0O3NEUN.Sn8mdfBC5GckdTJdOTsSJRNBW', 'EMP-186249', '+233209229025', 'Web Development', 'Web Developer', '2020-09-29', 'avatar-09.jpg', '2020-09-29 00:14:44'),
(6, 'Nguyễn Tiến', 'Mạnh', 'manh', 'manh@gmail.com', '$2y$10$E5D1i0pVx18DCpYn8TTnoOtUrmpYsNA.KA1IcbWND/3I41V/oHgRi', 'EMP-283769', '0926193924', 'Marketing', 'Web Designer', '2023-11-29', 'fdttybzauaaxxwh.jpg', '2023-11-29 19:30:35'),
(7, 'Hiệu', 'Ma Huy', 'Hieu', 'hieu@gmail.com', '$2y$10$XjZUGj.mISobIbcDUf1t1uahPmgALdFiFei5j/wWauB2p5etJTx9u', 'EMP-158769', '3214536768', 'Điểm giao dịch', 'Trưởng điểm tập kết', '2023-11-30', 'hu-tao-ghost-genshin-impact-4k-wallpaper-3840x2160-uhdpaper.com-265.1_a.jpg', '2023-11-30 11:06:22'),
(8, 'test1 ', 'test1', 'test1', 'test1@gmail.com', '$2y$10$i6qlYJnSBGoc5t1uzkGu/.2sb5p6PzldoavHVFLV3V/K8TKXi85xC', 'EMP-695840', '132143524', 'Điểm tập kết', 'Trưởng điểm tập kết', '2023-11-30', 'hu-tao-ghost-genshin-impact-4k-wallpaper-3840x2160-uhdpaper.com-265.1_a.jpg', '2023-11-30 12:23:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Phone`, `Address`, `Picture`, `dateTime`) VALUES
(6, 'Barry', 'Cudo', 'Barry', 'barrycuda@example.com', '$2y$10$zb2ibzzBKJHQaMeMoMZqTuRxERFAZl0LZUya8yJkxKa8JM6yzQEXy', '9876543210', 'Los Angeles, California', 'avatar-19.jpg', '2020-09-21 19:04:47'),
(7, 'Yahuza', 'Abdul-Hakim', 'Vendetta', 'musheabdulhakim@protonmail.ch', '$2y$10$f3acNJ/slpOfQvZy.u6OfOM6GOLTTjz3IYUIbMMQuixXjmgeRQ0Ga', '233209229025', 'San Francisco Bay Area', 'my-passport-photo.jpg', '2020-09-21 19:05:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `date`) VALUES
(1, 'admin\r\n', '2020-09-21'),
(2, 'employee', '2020-09-21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ClientId` (`ClientId`);

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Department` (`Department`);

--
-- Chỉ mục cho bảng `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Employee_Id` (`Employee_Id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
