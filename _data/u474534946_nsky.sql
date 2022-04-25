-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 25, 2022 lúc 08:03 AM
-- Phiên bản máy phục vụ: 10.5.12-MariaDB-cll-lve
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `u474534946_nsky`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phieu`
--

CREATE TABLE `tbl_phieu` (
  `id` int(11) NOT NULL,
  `u_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `ngay1` date DEFAULT NULL,
  `buoi1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay2` date DEFAULT NULL,
  `buoi2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gio1` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gio2` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phut1` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phut2` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `songay` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `hinhthuc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lydo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaylamphieu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phieu`
--

INSERT INTO `tbl_phieu` (`id`, `u_id`, `p_id`, `ngay1`, `buoi1`, `ngay2`, `buoi2`, `gio1`, `gio2`, `phut1`, `phut2`, `songay`, `note`, `status`, `hinhthuc`, `lydo`, `ngaylamphieu`) VALUES
(3, '741', 10, '2021-10-25', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Trực dự án Ivory', '2021-10-26'),
(4, '731', 10, '2021-10-25', NULL, NULL, NULL, '16', '17', '00', '45', NULL, 'Công tác', 3, NULL, 'tiep khach mv2', '2021-10-26'),
(5, '744', 10, '2021-10-25', NULL, NULL, NULL, '8', '17', '00', '45', NULL, 'Công tác', 3, NULL, 'tk', '2021-10-26'),
(6, '741', 10, '2021-10-29', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Trực skylake', '2021-10-29'),
(7, '741', 10, '2021-10-27', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Tiếp khách KN Paradise', '2021-10-29'),
(8, '734', 10, '2021-01-11', NULL, NULL, NULL, '15', '17', '30', '30', NULL, 'Công tác', 3, NULL, 't xp đi tiếp khách Wyndham Skylake tại Royal', '2021-11-01'),
(9, '736', 10, '2021-10-27', NULL, NULL, NULL, '8', '11', '00', '00', NULL, 'Công tác', 3, NULL, 'Tiếp khách KN', '2021-11-02'),
(10, '733', 10, '2021-03-11', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em quên không chấm vân tay', '2021-11-03'),
(11, '733', 10, '2021-11-07', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi sự kiện ạ', '2021-11-08'),
(12, '732', 10, '2021-07-11', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'Đi sự kiện Skylake', '2021-11-08'),
(13, '746', 10, '2021-11-09', '0', '2021-11-09', '0.5', NULL, NULL, NULL, NULL, '0.5', 'Nghỉ phép', 3, 'Không lương', 'Thi TA', '2021-11-09'),
(14, '736', 10, '2021-11-07', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Mở bán Skylake', '2021-11-09'),
(15, '736', 10, '2021-11-08', NULL, NULL, NULL, '8', '10', '00', '00', NULL, 'Công tác', 3, NULL, 'Tiếp khách Sonasea', '2021-11-09'),
(16, '738', 10, '2021-11-07', NULL, NULL, NULL, '8', '16', '00', '00', NULL, 'Công tác', 3, NULL, 'Mở bán Sky Lake', '2021-11-09'),
(17, '737', 10, '2021-07-11', NULL, NULL, NULL, '8', '13', '00', '00', NULL, 'Công tác', 3, NULL, 'Mở bán Sky Lake', '2021-11-09'),
(18, '743', 10, '2021-11-07', NULL, NULL, NULL, '8', '13', '30', '00', NULL, 'Công tác', 0, NULL, 'Công tác sự kiện SkyLake Wyndham Chương Mỹ', '2021-11-09'),
(19, '743', 10, '2021-11-09', '0', '2021-11-09', '0.5', NULL, NULL, NULL, NULL, '0.5', 'Nghỉ phép', 0, 'Phép năm', 'Việc cá nhân đột xuất', '2021-11-09'),
(20, '734', 10, '2021-11-04', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 't xp đi trực dự án Ivory', '2021-11-09'),
(21, '734', 10, '2021-11-05', NULL, NULL, NULL, '17', '17', '00', '30', NULL, 'Đi trễ về sớm', 3, NULL, 't xp về sớm có vc gia đình', '2021-11-09'),
(22, '734', 10, '2021-11-06', '0', '2021-11-07', '0', NULL, NULL, NULL, NULL, '0.5', 'Nghỉ phép', 3, 'Phép năm', 't xp nghỉ 1 buổi vf có việc gia đình', '2021-11-09'),
(23, '733', 10, '2021-11-09', '0', '2021-11-10', '0', NULL, NULL, NULL, NULL, '1', 'Nghỉ phép', 3, 'Phép năm', 'Em bị ốm ạ', '2021-11-09'),
(24, '730', 10, '2021-11-06', '0', '2021-11-08', '0', NULL, NULL, NULL, NULL, '0.5', 'Nghỉ phép', 3, 'Phép năm', 'Em xi phép nghỉ ốm ạ!', '2021-11-10'),
(25, '730', 10, '2021-11-09', '0', '2021-11-10', '0', NULL, NULL, NULL, NULL, '1', 'Nghỉ phép', 3, 'Phép năm', 'Em xin phép nghỉ ốm ạ!', '2021-11-10'),
(26, '735', 10, '2021-11-09', NULL, NULL, NULL, '8', '9', '00', '30', NULL, 'Đi trễ về sớm', 3, NULL, 'Em xin phép đưa xe đi bảo dưỡng, đến muộn chút ag', '2021-11-11'),
(27, '735', 10, '2021-11-11', NULL, NULL, NULL, '8', '9', '00', '15', NULL, 'Đi trễ về sớm', 3, NULL, 'Em có chút việc riêng xin phép đến muộn ag', '2021-11-11'),
(28, '734', 10, '2021-10-11', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 3, NULL, 't xp đưa khách đi ký HĐ Sonasea Vân Đồn', '2021-11-11'),
(29, '734', 10, '2021-11-11', NULL, NULL, NULL, '13', '17', '30', '30', NULL, 'Công tác', 3, NULL, 't xp đi tk tại dự án Ivory HB', '2021-11-11'),
(30, '742', 10, '2021-07-11', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Sự kiện mở bán Sky Lake', '2021-11-11'),
(31, '729', 10, '2021-11-11', NULL, NULL, NULL, '8', '10', '00', '00', NULL, 'Đi trễ về sớm', 3, NULL, 'Xin phép đến muộn cho mẹ đi tiêm phòng covid', '2021-11-12'),
(32, '729', 10, '2021-11-11', NULL, NULL, NULL, '17', '17', '00', '30', NULL, 'Đi trễ về sớm', 3, NULL, 'Xin phép về sớm đi đá bóng vs công ty', '2021-11-12'),
(33, '746', 10, '2021-12-11', NULL, NULL, NULL, '13', '17', '30', '30', NULL, 'Công tác', 3, NULL, 'Em quên chấm công ạ', '2021-11-12'),
(34, '746', 10, '2021-11-12', NULL, NULL, NULL, '13', '17', '30', '30', NULL, 'Công tác', 3, NULL, 'Em quên chấm công ạ', '2021-11-12'),
(35, '733', 10, '2021-11-11', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi tiếp khách Ivory ạ', '2021-11-12'),
(36, '733', 10, '2021-11-03', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em quên k chấm vân tay', '2021-11-12'),
(37, '738', 10, '2021-11-13', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 3, NULL, 'EM quên chấm vân tay ạ!', '2021-11-13'),
(38, '744', 10, '2021-11-12', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'Ốm xin nghỉ', '2021-11-15'),
(39, '734', 10, '2021-11-12', NULL, NULL, NULL, '16', '17', '00', '30', NULL, 'Đi trễ về sớm', 3, NULL, 't xp về sớm chuẩn bị đi sk của CĐT Ivory', '2021-11-15'),
(40, '734', 10, '2021-11-13', '0', '2021-11-13', '0.5', NULL, NULL, NULL, NULL, '0.5', 'Nghỉ phép', 3, 'Đặc biệt', 't xp nghỉ đi sự kiện của CĐT Ivory', '2021-11-15'),
(41, '734', 10, '2021-11-15', NULL, NULL, NULL, '8', '13', '00', '45', NULL, 'Công tác', 3, NULL, 't xp đưa khách đi ký HĐ dự án Wyndham Skylake', '2021-11-15'),
(42, '744', 10, '2021-11-13', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'Xin nghỉ ốm', '2021-11-16'),
(43, '732', 10, '2021-11-11', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Trực Skylake', '2021-11-16'),
(44, '733', 10, '2021-11-16', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi trực Skylake ạ', '2021-11-16'),
(45, '730', 10, '2021-11-18', NULL, NULL, NULL, '16', '17', '15', '30', NULL, 'Đi trễ về sớm', 3, NULL, 'Em có việc đột xuất, em xin phép về sớm ạ', '2021-11-19'),
(46, '733', 10, '2021-11-22', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi lấy HDf Ivory cho khách ah', '2021-11-23'),
(47, '735', 10, '2021-11-16', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi trực dự án Skylake Golf', '2021-11-23'),
(48, '735', 10, '2021-11-23', NULL, NULL, NULL, '8', '10', '00', '30', NULL, 'Đi trễ về sớm', 3, NULL, 'Em cho con đi khám xp đi muộn chút ag', '2021-11-23'),
(49, '733', 10, '2021-11-25', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi tiếp khách+ kick off Sakana', '2021-11-25'),
(50, '733', 10, '2021-11-23', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi cho khách kí HĐ Ivory và đau bụng xin về ạ', '2021-11-25'),
(51, '736', 10, '2021-11-20', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 3, NULL, 'Ký hợp đồng Kn Paradise', '2021-11-26'),
(52, '736', 10, '2021-11-19', NULL, NULL, NULL, '8', '9', '00', '00', NULL, 'Đi trễ về sớm', 3, NULL, 'Xp đến muộn 1h do tiêm bị sốt', '2021-11-26'),
(54, '736', 10, '2021-11-25', NULL, NULL, NULL, '12', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Đi kickoff Sakana', '2021-11-26'),
(55, '735', 10, '2021-11-25', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em xin phép đi tiếp khách sakana Hòa Bình', '2021-11-26'),
(56, '733', 10, '2021-11-26', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi kickoff Sakana', '2021-11-26'),
(57, '735', 10, '2021-11-26', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em xin phép đi kick off và tiếp khách Sakana', '2021-11-26'),
(58, '744', 10, '2021-11-26', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'dự án sakana', '2021-11-26'),
(59, '744', 10, '2021-11-25', NULL, NULL, NULL, '12', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'đi dự án sakana', '2021-11-26'),
(60, '732', 10, '2021-11-26', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'kick off Sakana', '2021-11-26'),
(61, '732', 10, '2021-11-25', NULL, NULL, NULL, '13', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'kick off Sakana', '2021-11-26'),
(62, '737', 10, '2021-11-25', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'Kích  off Sakana', '2021-11-27'),
(63, '737', 10, '2021-11-26', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'Kích off Sakana', '2021-11-27'),
(64, '735', 10, '2021-11-27', NULL, NULL, NULL, '8', '9', '00', '30', NULL, 'Đi trễ về sớm', 3, NULL, 'Em xin phép đi muộn chút có việc riêng ag', '2021-11-27'),
(65, '733', 10, '2021-11-29', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em mang HĐ cho khách Ivory', '2021-11-29'),
(66, '733', 10, '2021-12-13', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em đi tiếp khách Thanh Lanh', '2021-12-13'),
(67, '733', 10, '2021-12-04', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em xp có việc cá nhân', '2021-12-13'),
(68, '733', 10, '2021-12-14', '0', '2021-12-15', '0', NULL, NULL, NULL, NULL, '1', 'Nghỉ phép', 3, 'Phép năm', 'Em có việc cá nhân', '2021-12-15'),
(69, '732', 10, '2021-12-04', NULL, NULL, NULL, '8', '9', '00', '00', NULL, 'Đi trễ về sớm', 3, NULL, 'Em xin phép đi muộn vì có việc cá nhân ạ', '2021-12-15'),
(70, '744', 10, '2021-12-13', NULL, NULL, NULL, '8', '10', '00', '00', NULL, 'Công tác', 3, NULL, 'đi tiếp khách', '2021-12-15'),
(71, '734', 10, '2021-12-15', NULL, NULL, NULL, '8', '15', '00', '00', NULL, 'Công tác', 3, NULL, 't xp đi tk tại dự án Thanh Lanh', '2021-12-15'),
(72, '735', 10, '2021-12-13', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em xin phép đi tiếp khách dự án Thanh Lanh', '2021-12-15'),
(73, '735', 10, '2021-12-14', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em xin phép đi hỗ trợ tiếp khách dự án Thanh Lanh', '2021-12-15'),
(74, '752', 10, '2021-12-16', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 0, NULL, 'Tiếp khách ở dự án Sakana Hòa Bình', '2021-12-15'),
(75, '744', 10, '2021-12-16', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'Đi tiếp khách trên Thanh Lanh', '2021-12-17'),
(76, '738', 10, '2021-12-18', NULL, NULL, NULL, '8', '13', '00', '00', NULL, 'Công tác', 3, NULL, 'Tiếp khách Thanh Lanh tại nhà ở Phúc Yên', '2021-12-20'),
(77, '738', 10, '2021-12-22', NULL, NULL, NULL, '17', '17', '00', '30', NULL, 'Đi trễ về sớm', 3, NULL, 'Đi đá bóng cùng cả đội', '2021-12-23'),
(78, '744', 10, '2021-12-22', NULL, NULL, NULL, '16', '17', '00', '00', NULL, 'Công tác', 3, NULL, 'Đá Bóng đấu', '2021-12-25'),
(79, '733', 10, '2021-12-25', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 3, NULL, 'Em đi tiếp khách ạ', '2021-12-25'),
(80, '735', 10, '2021-12-21', '0', '2021-12-24', '0', NULL, NULL, NULL, NULL, '3', 'Nghỉ phép', 3, 'Không lương', 'Em xin nghỉ theo dõi do liên quan F0 covid', '2021-12-28'),
(81, '735', 10, '2021-12-28', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 3, NULL, 'Em xin phép đi tiếp khách Thanh Lanh', '2021-12-28'),
(82, '732', 10, '2021-12-30', '0', '2021-12-31', '0', NULL, NULL, NULL, NULL, '1', 'Nghỉ phép', 3, 'Phép năm', 'Em nghỉ đến trường gặp giáo viên ạ', '2021-12-31'),
(83, '732', 10, '2021-12-31', NULL, NULL, NULL, '15', '17', '00', '30', NULL, 'Đi trễ về sớm', 3, NULL, 'Sang Time city thu phiếu hoàn tiền cho a Khánh Thanh Lanh', '2021-12-31'),
(84, '733', 10, '2021-12-31', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 3, NULL, 'Em sang đưa phiếu hoàn tièn cho khách an', '2021-12-31'),
(85, '735', 10, '2022-01-06', NULL, NULL, NULL, '8', '9', '00', '45', NULL, 'Đi trễ về sớm', 3, NULL, 'Em xin phép đi muộn do có chút việc gia đình', '2022-01-06'),
(86, '733', 10, '2022-01-06', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 1, NULL, 'Em gặp khách Thanh Lanh ạ', '2022-01-07'),
(87, '733', 10, '2022-01-10', '0', '2022-01-13', '0', NULL, NULL, NULL, NULL, '3', 'Nghỉ phép', 1, 'Phép năm', 'Em bị ốm ạ', '2022-01-14'),
(88, '733', 10, '2022-01-13', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 1, NULL, 'Em đi xem dự án Đồi Rổngf ạ', '2022-01-14'),
(89, '735', 10, '2022-01-14', NULL, NULL, NULL, '8', '8', '00', '30', NULL, 'Đi trễ về sớm', 1, NULL, 'Em xin phép đi  muộn chút ag', '2022-01-14'),
(90, '744', 10, '2022-01-12', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 1, NULL, 'Cách Ly covit 19', '2022-01-19'),
(91, '744', 10, '2022-01-13', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 1, NULL, 'Cách Ly covit 19', '2022-01-19'),
(92, '744', 10, '2022-01-14', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 1, NULL, 'Cách Ly covit 19', '2022-01-19'),
(93, '744', 10, '2022-01-15', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 1, NULL, 'Cách Ly covit 19', '2022-01-19'),
(94, '731', 10, '2022-01-18', NULL, NULL, NULL, '8', '17', '00', '45', NULL, 'Công tác', 1, NULL, 'Tiep khac sona sea xong qua tiep khach doi rong', '2022-01-19'),
(95, '744', 10, '2022-01-16', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 1, NULL, 'Cách Ly covit 19', '2022-01-19'),
(96, '744', 10, '2022-01-17', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 1, NULL, 'Cách Ly covit 19', '2022-01-19'),
(97, '744', 10, '2022-01-18', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 1, NULL, 'Cách Ly covit 19', '2022-01-19'),
(98, '744', 10, '2022-01-12', NULL, NULL, NULL, '8', '17', '00', '00', NULL, 'Công tác', 1, NULL, 'Cách Ly covit 19', '2022-01-19'),
(99, '733', 10, '2022-01-22', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 1, NULL, 'Em đi hoàn tiền cho khách TL', '2022-01-27'),
(100, '733', 10, '2022-01-21', '0.5', '2022-01-22', '0', NULL, NULL, NULL, NULL, '0.5', 'Nghỉ phép', 1, 'Phép năm', 'Em có việc cá nhân ạ', '2022-01-27'),
(101, '733', 10, '2022-01-10', NULL, NULL, NULL, '8', '8', '00', '45', NULL, 'Công tác', 1, NULL, 'Em xin phép xử lí việc cá nhân', '2022-02-10'),
(102, '733', 10, '2022-02-11', NULL, NULL, NULL, '8', '8', '00', '30', NULL, 'Công tác', 1, NULL, 'Em xử lí việc cá nhân ạ', '2022-02-11'),
(103, '733', 10, '2022-02-14', NULL, NULL, NULL, '9', '17', '00', '30', NULL, 'Công tác', 1, NULL, 'Em quên không checkin', '2022-02-14'),
(104, '733', 10, '2022-02-16', NULL, NULL, NULL, '8', '17', '30', '30', NULL, 'Công tác', 1, NULL, 'Em đi tiếp khách Vân Đồn ạ', '2022-02-17'),
(105, '733', 10, '2022-02-18', '0', '2022-02-28', '0', NULL, NULL, NULL, NULL, '7', 'Nghỉ phép', 1, 'Phép năm', 'E bị CV ạ', '2022-02-23'),
(106, '755', 4, '2022-02-21', '0', '2022-02-28', '0', NULL, NULL, NULL, NULL, '5.5', 'Nghỉ phép', 0, 'Không lương', 'Em xin nghỉ phép, học hỏi,theo dõi, làm việc online tại nhà do Dương tính với covid-19 từ ngày 19/02/2022.', '2022-02-26'),
(107, '731', 10, '2022-02-21', '0', '2022-02-28', '0', NULL, NULL, NULL, NULL, '5.5', 'Nghỉ phép', 1, 'Phép năm', 'Nghỉ Covid', '2022-03-01'),
(108, '733', 10, '2022-03-01', '0', '2022-03-07', '0', NULL, NULL, NULL, NULL, '4.5', 'Nghỉ phép', 1, 'Phép năm', 'Em bị ốm ah', '2022-03-14'),
(109, '733', 10, '2022-03-12', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 1, NULL, 'Em đi tiewps khách KN', '2022-03-14'),
(110, '755', 4, '2022-03-23', '0', '2022-03-24', '0', NULL, NULL, NULL, NULL, '1', 'Nghỉ phép', 0, 'Không lương', 'Xin nghỉ công việc gia đình đột xuất', '2022-03-24'),
(111, '755', 4, '2022-03-29', '0', '2022-03-30', '0', NULL, NULL, NULL, NULL, '1', 'Nghỉ phép', 0, 'Không lương', 'Em xin nghỉ có công việc đột xuất', '2022-03-30'),
(112, '733', 10, '2022-04-01', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 1, NULL, 'Em quen chấm vân tay', '2022-04-01'),
(113, '733', 10, '2022-04-04', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 1, NULL, 'Em đi tiếp khách Sonasea', '2022-04-05'),
(114, '733', 10, '2022-02-04', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 1, NULL, 'Em đi tham quan dự án cùng cty', '2022-04-05'),
(115, '733', 10, '2022-07-04', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 1, NULL, 'Em đi Cam Ranh ah', '2022-04-07'),
(116, '733', 10, '2002-05-04', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 1, NULL, 'E quên chấm vân tay', '2022-04-07'),
(117, '733', 10, '2022-08-04', NULL, NULL, NULL, '8', '17', '00', '30', NULL, 'Công tác', 1, NULL, 'E đu Cam Ranh', '2022-04-07'),
(118, '733', 10, '2022-09-04', NULL, NULL, NULL, '8', '12', '00', '00', NULL, 'Công tác', 1, NULL, 'Em đi Cam Ranh', '2022-04-07'),
(119, '729', 4, '2022-04-12', '0', '2022-04-13', '0', NULL, NULL, NULL, NULL, '1', 'Nghỉ phép', 0, 'Phép năm', 'di trễ', '2022-04-24'),
(120, '754', 5, '2022-04-24', NULL, NULL, NULL, '8', '11', '00', '00', NULL, 'Công tác', 3, NULL, 'Check Tool', '2022-04-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phong`
--

CREATE TABLE `tbl_phong` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phong`
--

INSERT INTO `tbl_phong` (`id`, `name`, `code`, `note`) VALUES
(4, 'Phòng Marketing', 'P.MKT', NULL),
(5, 'Phòng kế toán', 'P.KT', NULL),
(6, 'Phòng nhân sự', 'P.NS', NULL),
(7, 'Ban quản trị', 'BQT', NULL),
(8, 'Phòng thư ký', 'P.TK', NULL),
(10, 'Phòng Kinh Doanh 1', 'P.KD1', NULL),
(26, 'Phòng Kinh Doanh 2', 'P.KD2', NULL),
(27, 'Phòng Kinh Doanh 3', 'P.KD3', NULL),
(28, 'Phòng Kinh Doanh 6', 'P.KD6', NULL),
(29, 'Phòng Kinh Doanh 8', 'P.KD8', NULL),
(30, 'Phòng Kinh Doanh 9', 'P.KD9', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `p_id`, `name`, `code`, `password`, `permission`, `level`, `avatar`, `email`, `birthday`, `facebook`, `phone`, `created_at`, `updated_at`, `remember_token`) VALUES
(14, 6, 'admin', '00001', '$2y$10$4WZa52Mn6WofUkJsjyH59uIG1xS1WQRRgfK3IjBoGdUbaIFf7fJW.', 0, 2, NULL, 'admin@gmail.com', NULL, NULL, NULL, '2019-10-04 21:46:17', '2021-10-07 01:17:21', '7ggwXJLSysUzvZ6BN3fXNtpzO6Vaak7gXUboSE53cmedVJqB4wxoRo5RTadu'),
(728, 7, 'Nguyễn Huy Khánh', 'NS1', '$2y$10$2NVIsfKkdzDNU7XnYqBaQems5isJoN7U.kzV2tF3/EEDAF5ZnW6Mm', 0, 1, NULL, 'huykhanhbds79@gmail.com', '1988-03-09', NULL, '0928108888', '2021-10-25 04:57:00', '2022-04-25 06:53:45', NULL),
(729, 4, 'Hoàng Xuân Đạt', 'NS5', '$2y$10$g5WBtLFDlydaD2QxvUodTOh/X7zWasHDaCnfmvxAZ10o7Yfmfzh5q', 0, 2, NULL, 'dathoang087@gmail.com', '1991-06-13', NULL, '0964458448', '2021-10-25 04:57:44', '2022-04-25 07:57:06', 'etrfCeVa9kAK8QofZH1pcxt2oFgCIXGxXpgzhWYPfxofnVrjhhlNov2wgBN6'),
(758, 4, 'Lê Văn Tuấn', 'NS46', '$2y$10$WXkuO3kQ/tNRkquqqBiCJuijmQ1e.4ZiCi7BfTWJ.8.Ob66k9woxy', 2, 3, NULL, 'letuan10012000@gmail.com', '2000-10-24', NULL, '0345699588', '2022-02-26 04:01:08', '2022-02-26 04:01:08', NULL),
(731, 27, 'Vũ Hải Thành', 'NS6', '$2y$10$eiS6c60ko7OFpXjmGGVJNeqP5aM6kK2u4.PJsOX9ICBYGGTprFGmu', 0, 2, NULL, 'vinathaco2020@gmail.com', '1988-02-26', NULL, '0965612933', '2021-10-25 04:59:49', '2022-04-25 07:57:22', 'ZSnI1oSLSXsKu73lQ7GVCjW4vfvQN5SouUQPLnOugpAZqTifkdDwAhgJr9Dm'),
(733, 29, 'Phạm Thị Bích', 'NS9', '$2y$10$bAk3TW0wx/KtVcQVEtYrx.dAHW5S0zxqI.azeOB/Ql.Me9GDsuFvq', 2, 3, NULL, 'bichphambds0906@gmail.com', '1998-06-09', NULL, '0979828990', '2021-10-25 05:58:02', '2022-04-25 06:53:36', 'iPQdgrNnl7EXHbzeT44WcyXUhiwxvlWlQZMRAqJgn6SFYCDBbUPLhwnxOkCg'),
(734, 29, 'Dương Thị Thắm', 'NS10', '$2y$10$1ALo53dyWE85H7Lhi8Ytdul2MF9vQluuhXWpv4seIY6dgJiCPFvY2', 0, 2, NULL, 'khanhlinhbds88@gmail.com', '1988-11-27', NULL, '0972399444', '2021-10-25 05:58:53', '2022-04-25 07:57:32', NULL),
(735, 30, 'Trần Văn Tiến', 'NS16', '$2y$10$xzXqnO7mVb.TRAtproFA7.InwQizYuwI5XML4AlKDPlVLAFXyjbXS', 0, 2, NULL, 'trantien.nd@gmail.com', '1990-12-25', NULL, '0977401109', '2021-10-25 06:00:28', '2022-04-25 07:57:52', 'Lw9cQlz4glHCR5vSI6LzjY3kXQamofq1gPIyNER4eHx8MRqSd5YDCYENnVgZ'),
(736, 10, 'Trần Văn Thắng', 'NS15', '$2y$10$I7HuI9A5iUyprQBsh2Lzy.WhNJkdaKx3ntJytTOy5pQFhGtZZgNrO', 0, 2, NULL, 'maithang239@gmail.com', '1990-04-05', NULL, '0916888146', '2021-10-25 06:01:19', '2022-04-25 07:58:05', 'x6GzJsOIAKccsq29hUcWGk0puJwt3Uzqjoe9umFrvR2lRnQH1yDvu7P8Cexk'),
(737, 10, 'Đỗ Chiến Thắng', 'NS2', '$2y$10$gLBtT5dsif/jdx6MTpILX.Fg.jLRtixUZwXijvNKlsArT7jYesuDa', 2, 3, NULL, 'dochienthang.19@gmail.com', '1997-02-19', NULL, '0975143826', '2021-10-25 06:02:07', '2022-04-25 06:56:30', NULL),
(738, 10, 'Vũ Văn Thịnh', 'NS3', '$2y$10$hvA01HvcRXkziRY5RIs72uUIrsjWIwwq0ElYWBkgpNSEXDMGi7Wc.', 2, 3, NULL, 'quangminh06082017@gmail.com', '1990-12-15', NULL, '0974095358', '2021-10-25 06:03:17', '2022-04-25 06:56:43', NULL),
(739, 29, 'Nguyễn Huy Phương', 'NS4', '$2y$10$OcOuckRlQJpjv0etfusOuuv4VIQjwQSYqSh3NOOTw0IJMebM.Fhwy', 2, 3, NULL, 'huyphuongbds79@gmail.com', '1987-07-15', NULL, '0978993443', '2021-10-25 06:04:43', '2022-04-25 06:56:53', NULL),
(740, 29, 'Nguyễn Văn Phương', 'NS7', '$2y$10$Cu6LB/q1aN40Pgdn8FX0b.jjnbZbQ3EW3zhgxmxYKVT0JG99xQyW.', 2, 3, NULL, 'Nguyenphuong02031993@gmail.com', '1993-03-02', NULL, '0973314983', '2021-10-25 06:05:48', '2022-04-25 06:56:18', 'bWfrWVHTOKNecQIE4ckaT0SmU0weZpAlAjM7rNTzLz4deLC9RiOTNHL4elU2'),
(756, 28, 'Nguyễn Thị Tố Uyên', 'NS43', '$2y$10$LSChx1wul330u121FEiwoOlbNH3.mGeo1Fo.xfgIib0D/N363H/zm', 2, 3, NULL, 'nguyentouyen0408@gmail.com', '1998-08-04', NULL, '0337905353', '2022-02-26 03:54:05', '2022-04-25 06:57:10', NULL),
(742, 8, 'Lê Ngọc Thương', 'NS17', '$2y$10$xHfN4SmpoCLG7CTFm6lUneT3wTmX4iOLpGl.rA.TfyUXVroP8NTAy', 0, 2, NULL, 'lengocthuong97@gmail.com', '1997-12-28', NULL, '0989610152', '2021-10-25 06:41:56', '2022-02-26 03:43:28', NULL),
(755, 4, 'Đinh Quang Thi', 'NS36', '$2y$10$JUm/jlVYth4WyX4Dpc9LUOBh9QoW9B228c2cNySnrUVpXPKzg20ke', 2, 3, NULL, 'Thidq90@gmail.com', '1990-08-25', NULL, '0866933656', '2022-02-26 03:51:38', '2022-02-26 03:57:07', NULL),
(744, 26, 'Tạ Văn Định', 'NS20', '$2y$10$y.gry1HB8QZNQnEev49U7eBN7ueJCHL4gs1rOzYAkDLSsMVt3GGRO', 0, 2, NULL, 'tadinh.bds@gmail.com', '1994-04-04', NULL, '0971735999', '2021-10-25 06:44:18', '2022-04-25 07:58:24', 'izqH07eBvmMSADOhCCA60dYAa0ae8dPUfnT0OC4Q2447GWmIfBB8hhkax1HZ'),
(745, 28, 'Đinh Văn Bình', 'NS21', '$2y$10$Rjkh2w9WRuWcAQqFRBO3x.jFm.wCBMPKHD0XPBWvWMBbDJxuqivua', 0, 2, NULL, 'Binhdv.anbinh@gmail.com', '1994-05-10', NULL, '0859263666', '2021-10-25 06:45:23', '2022-04-25 07:58:36', NULL),
(746, 4, 'Nguyễn Đức Trí', 'NS18', '$2y$10$afa754AB4kA5blZUjr/bZ.Yajx1GAljh7OtEGQ70pIlxqpsUZvo5K', 2, 3, NULL, 'ductria8@gmail.com', '1999-05-23', NULL, '0365835593', '2021-10-25 07:29:35', '2022-04-06 09:45:38', '0E8UxnBK2Ax06EmLDtI8UA23ejgf18NiaR7ZqGkuqkw6ZWoVqCpQLniVzNd2'),
(747, 10, 'Nguyễn Thị Hồng Hạnh', 'NS23', '$2y$10$mz8Isy7oCQ3R78tNjxzFfeGy.oqDLg2AiDmP5bFZs2n1Kmm/PtLvm', 2, 3, NULL, 'hanhnguyen.pt112@gmail.com', '1986-01-12', NULL, '0986296392', '2021-12-15 07:44:09', '2021-12-15 07:44:09', NULL),
(748, 28, 'Lê Công Tuấn Anh', 'NS26', '$2y$10$JrOQFL6pqs6xrjyGnXHA0.VlBNO8WQLBbfy7uE5MyNgI0kjZEI0OW', 2, 3, NULL, 'anhttanh@gmail.com', '1994-09-04', NULL, '0986883635', '2021-12-15 07:45:27', '2022-04-25 06:58:27', NULL),
(753, 30, 'Trương Đức Chính', 'NS27', '$2y$10$7e1BJStM6z90cnSaqOfaQ.n/ysFVWsjIfUh5DJPaYif2/5NQWa3Ky', 2, 3, NULL, 'ducchinh.truong@gmail.com', '1994-09-14', NULL, '0987587920', '2021-12-15 08:03:59', '2022-04-25 06:58:40', NULL),
(750, 30, 'Lại Thế Sơn', 'NS28', '$2y$10$2U76mTpyO6TMP0fgrCZ9Te2Nhx7LtTWyWxLapXQRO7fcifpMThA9y', 2, 3, NULL, 'laitheson.nb@gmail.com', '1992-10-08', NULL, '0975904092', '2021-12-15 07:48:00', '2022-04-25 06:58:55', NULL),
(751, 4, 'Trần Bá Tuấn', 'NS25', '$2y$10$G8zaMGrEjueVY.YN2PzfVe4YRZUXndzQXSUMSDZpiXRRGBhZinCOm', 2, 3, NULL, 'tuantran96edu@gmail.com', '1996-11-11', NULL, '0867783345', '2021-12-15 07:49:05', '2022-04-25 07:01:07', NULL),
(752, 10, 'Trương Sỹ Tuấn', 'NS22', '$2y$10$PJW/l5rydle/TLbpmsCn4.2oTelG.RA.ZEwqwaZGAcvyH1I1I4Wea', 2, 3, NULL, 'stt17690@gmail.com', '1990-06-17', NULL, '0796688345', '2021-12-15 07:54:30', '2021-12-15 07:54:30', NULL),
(754, 6, 'Nguyễn Thị Thanh Thảo', 'NS29', '$2y$10$q8.GfQhVDdSweRxPSSHQaewV0jOBuobd6jZbhaNFWTLR5iRZMWaoK', 0, 2, NULL, 'thaontthh868@gmail.com', '1998-06-08', NULL, NULL, '2022-01-06 06:40:21', '2022-04-24 03:44:36', 'h04f8eb9xtfPnfi7thRhdtihdGSVRX3ylT2IpS8N2Jpjs5N1EClWs5BUwWAg'),
(760, 26, 'Vương Khắc Hoàng', 'NS34', '$2y$10$KsQ9ozAfIVwHFzUHR293dODjcbMXEzfGfXwijjHngq3y.isC03Aqa', 2, 3, NULL, 'vuongkhachoang@gmail.com', '1994-06-18', NULL, '0943482485', '2022-02-26 04:03:05', '2022-04-25 07:01:47', NULL),
(761, 27, 'Trần Quốc Chương', 'NS35', '$2y$10$RKWtm5n7m9fJoaOrpFG47.YTtvQIUuLil/3UYkF3jTgx6mzEarNme', 2, 3, NULL, 'tranchuong269.utc@gmail.com', '1996-09-26', NULL, '0986001796', '2022-02-26 04:03:53', '2022-04-25 07:02:13', NULL),
(762, 29, 'Lê Thị Thu Huyền', 'NS37', '$2y$10$x/np0MOKO3wLbik2tQTTeO6/xDetYU923B3RPIKrj/EYGwoR.Dbju', 2, 3, NULL, 'Lehuyenada@gmail.com', '1991-10-20', NULL, '0975364165', '2022-02-26 04:09:27', '2022-04-25 07:02:24', NULL),
(763, 26, 'Mai Anh', 'NS40', '$2y$10$R8uubWvS.n/RAYY9UnRfdeWUtD6dUzJYzwue7VcxyN6I530lxKxYq', 2, 3, NULL, 'anhit121211@gmail.com', '1991-04-05', NULL, '0968118345', '2022-02-26 04:10:42', '2022-04-25 07:02:37', NULL),
(764, 26, 'Nguyễn Thị Hương', 'NS41', '$2y$10$H8bT1HHF91gl1WOBsbDBE.8HOHWWzQqZrAybs7CYw.1hL2y2UdUPO', 2, 3, NULL, 'Huongdat1368@gmail.com', '1990-03-15', NULL, '0975504528', '2022-02-26 04:14:34', '2022-04-25 07:02:48', NULL),
(765, 10, 'Bế Thị Kiều Chinh', 'NS42', '$2y$10$o3bLIQkduKBsAbc3rtEFG.8NoJv/RvS4NFp1P/cWZlb7l0.vU94jC', 2, 3, NULL, 'kieuchinhcb3@gmail.com', '1995-09-12', NULL, '0987678795', '2022-02-26 04:21:50', '2022-02-26 04:21:50', NULL),
(766, 30, 'Đặng Trần Phương', 'NS44', '$2y$10$dzROXoLm7D61zqul0pjDLelurvuIoqHzEkAL9AHsFHHYPwQuuvMVS', 2, 3, NULL, 'tranphuong681@gmail.com', '1987-07-22', NULL, '0975100681', '2022-02-26 04:23:27', '2022-04-25 07:03:01', NULL),
(768, 6, 'Lê Văn Tấn', 'NS51', '$2y$10$T5Z.M61EhSOAvq0PSz.3eOYU36a6M3wXcMMzT3L6WsDWDbGgiwhqW', 2, 3, NULL, 'tanlv064@gmail.com', '1988-04-06', NULL, '0388440088', '2022-04-25 06:49:44', '2022-04-25 06:49:44', 'dTpEWTYfSL8BFkFZH0X2zxX6EzvaInMIIgmwkUnO3pV7R4WKPXoK6mPmkUrV'),
(769, 10, 'Phan Trung Thành', 'NS72', '$2y$10$5LoaorP9ng4rI9HmlHGcVeSH1jOeFlyK3GQ1oPepyqdTSNY4CRZU.', 2, 3, NULL, 'thanhphanaof@gmail.com', '1991-10-04', NULL, '0947381781', '2022-04-25 07:17:10', '2022-04-25 07:17:10', NULL),
(770, 10, 'Dương Thị Thu Hoàn', 'NS73', '$2y$10$Dxd4TKNXL8o2ZV/iXmcGm.Jd34jlGDkJZEfPkkgyYWcqMzuMJ/u6S', 2, 3, NULL, 'hoanduong234@gmail.com', '1994-04-23', NULL, '0702822288', '2022-04-25 07:19:36', '2022-04-25 07:19:36', NULL),
(771, 10, 'Lê Minh Dương', 'NS76', '$2y$10$a7ck9LEk4BEH3xVYkLtCN.Mo0s0LXLcO.MFbovHAbWqU0FY7mcNKu', 2, 3, NULL, 'leminhduongcdt@gmail.com', '1986-11-17', NULL, '0982626559', '2022-04-25 07:20:14', '2022-04-25 07:20:14', NULL),
(772, 4, 'Hà Thị Hương Thảo', 'NS77', '$2y$10$PGTeeaJ1/WD/tP3mwuqinOv/Zm3A8rnS4yXcSEwZt3XoVT7u14zM6', 2, 3, NULL, 'huongthao510@gmail.com', '1986-10-05', NULL, '0981246466', '2022-04-25 07:20:55', '2022-04-25 07:20:55', NULL),
(773, 26, 'Nguyễn Hữu Sơn', 'NS53', '$2y$10$0E8ldQwlBjX1b7LhVKn7e.sEfK6cTpW82R/6UQBwdAn6Xs0cL5Ol2', 2, 3, NULL, 'nguyenson020512@gmail.com', '1992-12-26', NULL, '0963598305', '2022-04-25 07:24:34', '2022-04-25 07:24:34', NULL),
(774, 26, 'Hoàng Anh Sơn', 'NS54', '$2y$10$l.OUbpEkgqHid5BVmsWUJu921FbyeRjzBKXUQcvEhhpt8oJWOpORy', 2, 3, NULL, 'hoanganhson3011@gmail.com', '1992-11-30', NULL, '0855146555', '2022-04-25 07:25:03', '2022-04-25 07:25:03', NULL),
(775, 26, 'Nguyễn Thanh Bình', 'NS59', '$2y$10$Yj6s1cOFw6CZUNQtG6NoxeIMwTtp6TG8RWuqVsWjRIF94Y/WSdVhW', 2, 3, NULL, 'nguyenthanhbinh.050887@gmail.com', '1987-08-05', NULL, '0975099500', '2022-04-25 07:25:34', '2022-04-25 07:25:34', NULL),
(776, 26, 'Phạm Thị Dịu', 'NS62', '$2y$10$lJTHe576quYjK2MM0KTSQOf20RncQ7Xf4s8JXU4JYeF0pCTmyN1.i', 2, 3, NULL, 'phamthidiutqg@gmail.com', '1999-06-04', NULL, '0984440541', '2022-04-25 07:26:15', '2022-04-25 07:26:15', NULL),
(777, 4, 'Đoàn Công Nhật', 'NS64', '$2y$10$nVvvrHq43n8hFskiGJ9DLONnjfkPB6sqWJMDczv57EgYgAVlwHR1C', 2, 3, NULL, 'nhat.newskyland@gmail.com', '1995-01-30', NULL, '0378521845', '2022-04-25 07:26:48', '2022-04-25 07:26:48', NULL),
(778, 26, 'Đỗ Văn Nam', 'NS65', '$2y$10$6oRE31/tQ7w0Ob5aTB8mEe/O7aVcbXN0Sv6UnG1DXnxAv2i87joSu', 2, 3, NULL, 'dvnlshd92@gmail.com', '1992-12-15', NULL, '0973151292', '2022-04-25 07:27:19', '2022-04-25 07:27:19', NULL),
(779, 26, 'Trần Thị Thoa', 'NS66', '$2y$10$9.nBqAMfVK64A/UoPtt2peH0B26oNjhLdos983vZ/Z4vNCoPNSrBC', 2, 3, NULL, 'thoatt305@gmail.com', '1990-05-30', NULL, '0976986682', '2022-04-25 07:27:46', '2022-04-25 07:27:46', NULL),
(780, 27, 'Lưu Văn Hướng', 'NS48', '$2y$10$ccZTehIKnMJBsljIl9MMQ./X8phscdmhUHlldNoSR1tD.NgXxqitO', 2, 3, NULL, 'huongluu111307@gmail.com', '1988-09-01', NULL, '0905655866', '2022-04-25 07:28:24', '2022-04-25 07:28:24', NULL),
(781, 27, 'Đỗ Thanh Trang', 'NS58', '$2y$10$18g53aGWVdEveyHQGbEomepSjk6RXyABALHEd4ucKv..sO3rXVYZe', 2, 3, NULL, 'Thanhtrangdo16@gmail.com', '1997-06-01', NULL, '0987499916', '2022-04-25 07:28:54', '2022-04-25 07:28:54', NULL),
(782, 27, 'Phạm Văn Long', 'NS60', '$2y$10$yHgOa0YhEfH26zP/wQo/UehXJ/qEixIx1hnHjo/g0Z2hmuv.NJVri', 2, 3, NULL, 'phamvanlongntns@gmail.com', '1991-06-07', NULL, '0936407380', '2022-04-25 07:29:34', '2022-04-25 07:29:34', NULL),
(783, 27, 'Vũ Trọng Việt', 'NS74', '$2y$10$YI0tuSAHzyGvwP/MZtB8a.LdAuYdtqmQ0a0D6Cfz91vYxM0J2aXSq', 2, 3, NULL, 'vutrongviet123@gmail.com', '1995-08-28', NULL, '0866798398', '2022-04-25 07:30:05', '2022-04-25 07:30:05', NULL),
(784, 28, 'Cao Văn Trung', 'NS52', '$2y$10$OaDcC7BgYcwZGwKRR/LY1u99sBvBnLUKeeDJrEciGYkI0Z2fT89Pu', 2, 3, NULL, 'trungcao2307@gmail.com', '2000-07-23', NULL, '0869805683', '2022-04-25 07:30:46', '2022-04-25 07:30:46', NULL),
(785, 29, 'Đỗ Ngọc Khánh', 'NS47', '$2y$10$PSQ4aTXwyGzENoX2249XWOgPMqZkcStIIMDAmZAlrMueq6Cw4p0Qu', 2, 3, NULL, 'Cukhanh94@gmail.com', '1994-09-20', NULL, '0866954555', '2022-04-25 07:31:22', '2022-04-25 07:31:22', NULL),
(786, 29, 'Trần Văn Đức', 'NS68', '$2y$10$upM.kPjYCuE2KkuQiVjl9uxq/tcVU4fnKyrCenv4u8ZlYZA5iuegC', 2, 3, NULL, 'tranvanduc.qtp@gmail.com', '1989-09-26', NULL, '0914067133', '2022-04-25 07:31:52', '2022-04-25 07:31:52', NULL),
(787, 29, 'Nguyễn Công Tuấn', 'NS69', '$2y$10$rsgi.R2ks9JF80S8yxAzjOMSdjSjEboR.4UiObmFERypR9ll0Mrle', 2, 3, NULL, 'tuancongnguyen2812@gmail.com', '1994-12-28', NULL, '0912281294', '2022-04-25 07:32:32', '2022-04-25 07:32:32', NULL),
(788, 29, 'Nguyễn Văn Bút', 'NS70', '$2y$10$W4E1V6urlTQjAk4tj3fr3OtqfXsQQLDGtFrBbK78iD/U6lPBy7XzW', 2, 3, NULL, 'Nguyenxuanbut2503@gmail.com', '2000-03-05', NULL, '0377627963', '2022-04-25 07:33:00', '2022-04-25 07:33:00', NULL),
(789, 29, 'Chu Đình Hiệp', 'NS71', '$2y$10$tOus2n6B5MFp2jtdhXMOXubZ7H5O5yLDLzWUXSsY8o8UxQ6hS9yUu', 2, 3, NULL, 'hiep6210@gmail.com', '2000-04-27', NULL, '0828604568', '2022-04-25 07:33:27', '2022-04-25 07:33:27', NULL),
(790, 30, 'Nguyễn Văn Bang', 'NS55', '$2y$10$xiTI/zj4ptIin7EXbJksJu5KP746UalpY3m6aemLOQjRiUmaJgpbS', 2, 3, NULL, 'thanhbang.dxmb@gmail.com', '1990-04-23', NULL, '0969192556', '2022-04-25 07:34:03', '2022-04-25 07:34:03', NULL),
(791, 30, 'Đinh Thị Như Ý', 'NS56', '$2y$10$rH6PDjuf.Gzp4N/VTPg3B.YoNlfnp0aAibxl3B2aMmrXpc9ZIHvHC', 2, 3, NULL, 'nhuy0612@gmail.com', '1994-12-06', NULL, '0963567303', '2022-04-25 07:34:58', '2022-04-25 07:34:58', NULL),
(792, 30, 'Nguyễn Thị Diệu', 'NS61', '$2y$10$3bqzhFcIm.mdW8gWVGhQKesu6Y6oOh8LnoU2Ib/262PeRIPDeLdkC', 2, 3, NULL, 'Dieudun@gmail.com', '1998-11-03', NULL, '0343230123', '2022-04-25 07:35:35', '2022-04-25 07:35:35', NULL),
(793, 30, 'Thân Văn Thành', 'NS63', '$2y$10$GUWerLC29nVQIBGTB25Dpe2NEzD7xBsgu/Yzy5wvT5fb.A1NFWCYm', 2, 3, NULL, 'Thanvanthanh.jp@gmail.com', '1992-07-23', NULL, '0837218111', '2022-04-25 07:36:01', '2022-04-25 07:36:01', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_phieu`
--
ALTER TABLE `tbl_phieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_phong`
--
ALTER TABLE `tbl_phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_phieu`
--
ALTER TABLE `tbl_phieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT cho bảng `tbl_phong`
--
ALTER TABLE `tbl_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=794;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
