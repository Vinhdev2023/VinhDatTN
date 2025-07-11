-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 27, 2025 lúc 06:30 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vinh_moi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','employee') NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_name_unique` (`name`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

REPLACE INTO `admins` (`id`, `name`, `email`, `password`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'vinh', 'vinh@gmail.com', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'admin', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(2, 'Mrs. Johanna Runte DDS', 'sanford.stanford@example.net', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'employee', NULL, '2025-05-19 09:15:24', '2025-06-06 09:57:11'),
(3, 'Rae Parker', 'zpacocha@example.com', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'admin', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(4, 'Donato Kovacek II', 'wiegand.lydia@example.net', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'admin', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(5, 'Elbert Adams', 'swaniawski.andy@example.net', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'admin', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(6, 'Dr. Mylene Breitenberg', 'yundt.garry@example.org', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'employee', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(7, 'Mose Krajcik', 'celestine.hane@example.com', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'employee', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(8, 'America Blanda', 'lincoln.simonis@example.org', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'employee', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(9, 'Dayna Crooks', 'deborah.crona@example.org', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'employee', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(10, 'Caitlyn Lang IV', 'cleo26@example.com', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'employee', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(11, 'Dr. Jasmin Bednar DDS', 'kebert@example.net', '$2y$12$pyjBHTDrXkiakiQohD99w.VED5CSZh0vK7.Jl3nHCtyUIdETUj5HS', 'employee', NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `authors_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

REPLACE INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Nhật Ánh', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(2, 'Paulo Coelho', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(3, 'Haruki Murakami', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(4, 'J.K. Rowling', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(5, 'Sun Tzu', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(6, 'George Orwell', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(7, 'J.R.R. Tolkien', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(8, 'Agatha Christie', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(9, 'Ernest Hemingway', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(10, 'Victor Hugo', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(11, 'F. Scott Fitzgerald', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(12, 'Leo Tolstoy', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(13, 'Franz Kafka', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(14, 'Jane Austen', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(15, 'Gabriel García Márquez', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(16, 'Chimamanda Ngozi Adichie', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(17, 'Yuval Noah Harari', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(18, 'Malcolm Gladwell', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(19, 'Adam Grant', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(20, 'Brené Brown', '2025-06-23 19:09:33', '2025-06-23 19:09:33'),
(21, 'Linda Kaplan Thaler', '2025-06-27 12:59:59', '2025-06-27 12:59:59'),
(22, 'Robin Koval', '2025-06-27 13:00:21', '2025-06-27 13:00:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `isbn_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `books_isbn_code_unique` (`isbn_code`),
  UNIQUE KEY `books_title_unique` (`title`),
  KEY `books_publisher_id_foreign` (`publisher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

REPLACE INTO `books` (`id`, `isbn_code`, `title`, `image`, `quantity`, `price`, `description`, `publisher_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1186041111111', 'Cho Tôi Xin Một Vé Đi Tuổi Thơ', 'shopping (3).webp', 100, 80000, 'Câu chuyện về tuổi thơ trong trẻo, hồn nhiên', 2, NULL, '2025-06-23 19:18:13', '2025-06-26 17:18:34'),
(2, '1280061122415', 'O Alquimista', 'tải xuống (5).jpg', 100, 120000, 'Hành trình đi tìm kho báu và khám phá bản thân', 2, NULL, '2025-06-23 19:18:13', '2025-06-26 17:14:37'),
(3, '1380099448792', 'Rừng Na Uy', 'tải xuống (6).jpg', 100, 150000, 'Câu chuyện về tình yêu, mất mát và ký ức', 2, NULL, '2025-06-23 19:18:13', '2025-06-27 11:30:48'),
(4, '1480747532743', 'Harry Potter và Hòn đá Phù thủy', 'tải xuống (7).jpg', 100, 180000, 'Câu chuyện về cậu bé phù thủy Harry Potter', 2, NULL, '2025-06-23 19:18:13', '2025-06-26 17:12:21'),
(5, '9781590302255', 'Binh Pháp Tôn Tử', 'tải xuống (8).jpg', 100, 75000, 'Tác phẩm kinh điển về nghệ thuật chiến tranh', 2, NULL, '2025-06-23 19:18:13', '2025-06-26 17:11:40'),
(6, '9780451524935', '1984', 'tải xuống (1).png', 100, 90000, 'Tác phẩm kinh điển về xã hội toàn trị', 2, NULL, '2025-06-23 19:18:13', '2025-06-26 18:12:39'),
(7, '9780547928227', 'The Hobbit', 'tải xuống (9).jpg', 22, 160000, 'Hành trình của Bilbo Baggins', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(8, '9780007113804', 'Án Mạng Trên Chuyến Tàu Tốc Hành Phương Đông', 'tải xuống (10).jpg', 18, 110000, 'Phá án trên chuyến tàu tốc hành', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(9, '9780684801469', 'Ông Già Và Biển Cả', 'tải xuống (11).jpg', 15, 85000, 'Câu chuyện về lão ngư đánh cá với con cá kiếm', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(10, '9780140444308', 'Những Người Khốn Khổ', 'tải xuống (12).jpg', 30, 200000, 'Bộ tiểu thuyết về cuộc đời Jean Valjean', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(11, '9780743273565', 'Đại Gia Gatsby', 'tải xuống (13).jpg', 100, 95000, 'Bi kịch của giấc mơ Mỹ thời Jazz', 2, NULL, '2025-06-23 19:18:13', '2025-06-26 17:41:23'),
(12, '9780140447931', 'Chiến Tranh và Hòa Bình', 'tải xuống (14).jpg', 14, 220000, 'Sử thi về nước Nga thời Napoleon', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(13, '9780805242010', 'Hóa Thân', 'tải xuống (15).jpg', 10, 70000, 'Câu chuyện về Gregor Samsa thức dậy thành côn trùng', 19, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(14, '1480141439518', 'Kiêu Hãnh và Định Kiến', 'tải xuống (16).jpg', 25, 85000, 'Tình yêu và định kiến xã hội thế kỷ 19', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(15, '9780060883287', 'Trăm Năm Cô Đơn', 'tải xuống (17).jpg', 20, 130000, 'Câu chuyện dòng họ Buendía ở Macondo', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(16, '9780007356348', 'Chúng Ta Đều Nên Là Những Nhà Nữ Quyền', 'tải xuống (18).jpg', 22, 95000, 'Luận về nữ quyền trong thế giới hiện đại', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(17, '9780062316097', 'Sapiens: Lược Sử Loài Người', 'tải xuống (19).jpg', 30, 185000, 'Hành trình tiến hóa của loài người', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(18, '9780316017930', 'Những Kẻ Xuất Chúng', 'images.jpg', 18, 125000, 'Bí mật đằng sau thành công của những thiên tài', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(19, '9780753557537', 'Tư Duy Lại Với Tư Duy', 'tải xuống (20).jpg', 15, 135000, 'Nghệ thuật tư duy lại và học hỏi', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(20, '9781592408410', 'Can Đảm: Sức Mạnh Của Sự Tổn Thương', 'tải xuống (21).jpg', 20, 115000, 'Khám phá sức mạnh của sự tổn thương', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(21, '9786045697043', 'Mắt Biếc', 'tải xuống (22).jpg', 25, 90000, 'Chuyện tình cảm động tuổi học trò', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(22, '9780062315007', 'Phù Thủy Thành Phố Portobello', 'tải xuống (23).jpg', 18, 110000, 'Hành trình tìm kiếm ý nghĩa cuộc sống', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(23, '9784344401034', '1Q84', 'tải xuống (24).jpg', 120, 250000, 'Thế giới song song với hai mặt trăng', 2, NULL, '2025-06-23 19:18:13', '2025-06-27 11:33:07'),
(24, '9780439064873', 'Harry Potter và Phòng Chứa Bí Mật', 'tải xuống (25).jpg', 100, 185000, 'Cuộc phiêu lưu năm thứ hai tại Hogwarts', 2, NULL, '2025-06-23 19:18:13', '2025-06-26 17:17:19'),
(25, '9780140440393', 'Nghệ Thuật Chiến Tranh', 'tải xuống (26).jpg', 15, 80000, 'Chiến lược quân sự của Tôn Tử', 2, NULL, '2025-06-23 19:18:13', '2025-06-23 13:17:18'),
(26, '9780452284234', 'Trại Súc Vật', 'tải xuống (27).jpg', 20, 85000, 'Châm biếm về chủ nghĩa toàn trị', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(27, '9780261102217', 'Chúa tể những chiếc nhẫn: Hiệp hội nhẫn thần', 'tải xuống (28).jpg', 25, 195000, 'Hành trình hủy diệt chiếc nhẫn quyền lực', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(28, '9780007113805', 'Án Mạng Ở Mesopotamia', 'tải xuống (29).jpg', 16, 105000, 'Vụ án bí ẩn ở vùng Lưỡng Hà', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(29, '9780684800714', 'Chuông Nguyện Hồn Ai', 'tải xuống (30).jpg', 18, 95000, 'Câu chuyện tình trong nội chiến Tây Ban Nha', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(30, '9780140444759', 'Nhà Thờ Đức Bà Paris', 'tải xuống (31).jpg', 100, 175000, 'Bi kịch tình yêu dưới bóng nhà thờ Đức Bà', 2, NULL, '2025-06-23 19:18:13', '2025-06-26 17:18:54'),
(31, '9780141182630', 'Tender Is the Night', 'tải xuống (32).jpg', 15, 90000, 'Sự suy tàn của một cặp vợ chồng trẻ', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(32, '9780140447934', 'Anna Karenina', 'tải xuống (33).jpg', 22, 210000, 'Bi kịch tình yêu trong xã hội quý tộc Nga', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(33, '9780805210552', 'Lâu Đài', 'tải xuống (34).jpg', 12, 85000, 'Hành trình vô vọng của K. đến lâu đài', 19, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(34, '9780141439686', 'Emma', 'tải xuống (35).jpg', 20, 95000, 'Câu chuyện về cô gái thích mai mối', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(35, '9780307474728', 'Tình Yêu Thời Thổ Tả', 'tải xuống (36).jpg', 18, 115000, 'Tình yêu vượt thời gian và thử thách', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(36, '9780307271082', 'Americanah', 'tải xuống (37).jpg', 25, 135000, 'Hành trình của người phụ nữ Nigeria ở Mỹ', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(37, '9780062316110', 'Homo Deus: Lược Sử Tương Lai', 'tải xuống (2).png', 20, 195000, 'Viễn cảnh tương lai của nhân loại', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(38, '9780316010665', 'Điểm Bùng Phát', 'tải xuống (38).jpg', 22, 125000, 'Lý thuyết về sự lan truyền của ý tưởng', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(39, '9781982141462', 'Cho và Nhận', 'tải xuống (3).png', 18, 145000, 'Cách tiếp cận mới về thành công', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(40, '9781592407338', 'Sức Mạnh Của Sự Độc Lập', 'tải xuống (39).jpg', 15, 125000, 'Nghệ thuật sống can đảm', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(41, '9786043073402', 'Cô Gái Đến Từ Hôm Qua', 'tải xuống (40).jpg', 25, 85000, 'Chuyện tình tuổi học trò đầy cảm xúc', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(42, '9780061120084', 'Veronika Quyết Chết', 'tải xuống (41).jpg', 20, 100000, 'Hành trình tìm kiếm ý nghĩa cuộc sống', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(43, '9780099448471', 'Kafka Bên Bờ Biển', 'tải xuống (42).jpg', 18, 160000, 'Hành trình siêu thực của một thiếu niên', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(44, '9780439136365', 'Harry Potter và Tên Tù Nhân Ngục Azkaban', 'tải xuống (43).jpg', 22, 190000, 'Sự xuất hiện của tên tù nhân nguy hiểm', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(45, '9780143106635', 'Thiên Long Bát Bộ', 'tải xuống (44).jpg', 15, 220000, 'Tiểu thuyết kiếm hiệp kinh điển', 19, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(46, '9780451526342', 'Chào Mừng Đến Với Chuột Túi', 'tải xuống (45).jpg', 20, 95000, 'Viễn tưởng về xã hội tương lai', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(47, '9780261102354', 'Chúa tể những chiếc nhẫn: Hai Tòa Tháp', 'tải xuống (46).jpg', 25, 200000, 'Phần tiếp theo của hành trình hủy diệt nhẫn', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(48, '9780007120864', 'Vụ Ám Sát Ông Roger Ackroyd', 'tải xuống (47).jpg', 18, 100000, 'Vụ án bí ẩn với kết thúc bất ngờ', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(49, '9780684803357', 'Mặt Trời Vẫn Mọc', 'tải xuống (48).jpg', 15, 90000, 'Thế hệ lạc lõng sau Thế chiến I', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(50, '9780140449175', 'Những Người Khốn Khổ Tập 2', 'tải xuống (49).jpg', 20, 195000, 'Phần tiếp theo cuộc đời Jean Valjean', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(51, '9780141184153', 'This Side of Paradise', 'tải xuống (50).jpg', 16, 95000, 'Tuổi trẻ và thất vọng thời Jazz', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(52, '9781240449174', 'Phục Sinh', 'tải xuống (51).jpg', 14, 95000, 'Hành trình chuộc lỗi của một quý tộc', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(53, '9780805209990', 'Vụ Án Hoàn Hảo', 'tải xuống (52).jpg', 12, 85000, 'Hành trình vô vọng của Josef K.', 19, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(54, '9780141439471', 'Cảm Xúc và Lý Trí', 'tải xuống (53).jpg', 20, 90000, 'Câu chuyện về hai chị em Dashwood', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(55, '9780307387158', 'Hồi Ức Về Những Cô Gái Điếm Buồn Của Tôi', 'tải xuống (54).jpg', 18, 110000, 'Tình yêu kỳ lạ của một cụ già 90 tuổi', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(56, '9780307277671', 'Một Nửa Mặt Trời Vàng', 'tải xuống (55).jpg', 22, 125000, 'Bi kịch của nội chiến Nigeria', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(57, '9780062464347', '21 Bài Học Cho Thế Kỷ 21', 'tải xuống (56).jpg', 25, 175000, 'Giải đáp những vấn đề cấp bách của hiện tại', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(58, '9780316017923', 'Trong Chớp Mắt', 'tải xuống (4).png', 20, 130000, 'Sức mạnh của suy nghĩ không cần suy nghĩ', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(59, '9780735214158', 'Originals: Chống Lại Đám Đông', 'tải xuống (57).jpg', 18, 150000, 'Cách trở nên sáng tạo và đột phá', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(60, '9781592409875', 'Sự Hoàn Hảo Không Trọn Vẹn', 'tải xuống (58).jpg', 15, 120000, 'Từ bỏ sự hoàn hảo để sống trọn vẹn', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(61, '9786043073419', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'tải xuống (59).jpg', 30, 95000, 'Tuổi thơ ở làng quê Việt Nam', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(62, '9780060512130', 'Zahir', 'tải xuống (60).jpg', 18, 105000, 'Hành trình tìm kiếm ý nghĩa đích thực', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(63, '9780099528981', 'Biên Niên Ký Chim Vặn Dây Cót', 'tải xuống (61).jpg', 20, 170000, 'Hành trình tìm vợ mất tích của Toru Okada', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(64, '9780439358071', 'Harry Potter và Chiếc Cốc Lửa', 'tải xuống (62).jpg', 22, 195000, 'Giải đấu Tam Pháp Thuật nguy hiểm', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(65, '9780140444261', 'Tam Quốc Diễn Nghĩa', 'tải xuống (63).jpg', 15, 210000, 'Tiểu thuyết lịch sử Trung Quốc kinh điển', 19, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(66, '9780451529060', 'Down and Out in Paris and London', 'images (1).jpg', 18, 90000, 'Cuộc sống của những người nghèo khổ', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(67, '9780261102378', 'Chúa tể những chiếc nhẫn: Sự Trở Về Của Nhà Vua', 'tải xuống (64).jpg', 25, 205000, 'Kết thúc của hành trình hủy diệt nhẫn', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(68, '9780007120697', 'Vụ Ám Sát Trên Sân Golf', 'tải xuống (65).jpg', 16, 98000, 'Vụ án trên sân golf kỳ lạ', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(69, '9780684804521', 'Tuyết Trên Đỉnh Kilimanjaro', 'tải xuống (66).jpg', 15, 85000, 'Tuyển tập truyện ngắn đặc sắc', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(70, '4180140449174', 'Những Người Khốn Khổ Tập 3', 'tải xuống (67).jpg', 20, 200000, 'Phần cuối cuộc đời Jean Valjean', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(71, '9780141180636', 'The Beautiful and Damned', 'tải xuống (68).jpg', 16, 92000, 'Sự hủy hoại của sự giàu có và thời gian', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(72, '9780140441093', 'Cái Chết Của Ivan Ilyich', 'tải xuống (69).jpg', 14, 80000, 'Suy ngẫm về cuộc đời khi cái chết cận kề', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(73, '9780805209991', 'Nước Mỹ', 'shopping (4).webp', 12, 88000, 'Hành trình của Karl Rossmann đến nước Mỹ', 19, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(74, '9780141439518', 'Northanger Abbey', 'tải xuống (70).jpg', 20, 85000, 'Châm biếm thể loại tiểu thuyết Gothic', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(75, '9780141189363', 'Tướng Quân Giữa Mê Hồn Trận', 'tải xuống (71).jpg', 18, 115000, 'Hành trình của một vị tướng trong mê cung', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(76, '9780307455925', 'Bỏ Quên', 'tải xuống (72).jpg', 22, 118000, 'Câu chuyện về một gia đình Nigeria', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(77, '9780062464316', 'Sapiens: Graphic History', 'tải xuống (73).jpg', 25, 165000, 'Phiên bản truyện tranh của Sapiens', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(78, '9780316011785', 'Chú Chó Nhìn Thấy Gì', 'tải xuống (5).png', 20, 135000, 'Tuyển tập bài viết từ tờ New Yorker', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(79, '9780735213502', 'Nghĩ Lại và Làm Lại', 'tải xuống (74).jpg', 18, 155000, 'Nghệ thuật tư duy lại trong công việc', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(80, '9781592408411', 'Dám Lãnh Đạo', 'tải xuống (75).jpg', 15, 130000, 'Xây dựng văn hóa dũng cảm tại nơi làm việc', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(81, '9786043235611', 'Ngồi Khóc Trên Cây', 'tải xuống (76).jpg', 25, 98000, 'Chuyện tình cảm động giữa chàng sinh viên và cô gái rừng', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(82, '9780060935465', 'Nàng Brida', 'tải xuống (77).jpg', 20, 110000, 'Hành trình khám phá tâm linh của cô gái trẻ', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(83, '9780307277718', 'Sputnik Sweetheart', 'tải xuống (78).jpg', 18, 145000, 'Câu chuyện về tình yêu và sự cô đơn', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(84, '9780439784542', 'Harry Potter và Hội Phượng Hoàng', 'tải xuống (79).jpg', 22, 210000, 'Cuộc chiến chống lại Chúa tể Hắc ám', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(85, '9780140444285', 'Thủy Hử', 'tải xuống (80).jpg', 15, 195000, '108 anh hùng Lương Sơn Bạc', 19, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(86, '9780451524936', 'Coming Up for Air', 'tải xuống (81).jpg', 20, 92000, 'Hồi tưởng về quá khứ và hiện tại u ám', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(87, '9780547928228', 'The Silmarillion', 'tải xuống (82).jpg', 25, 185000, 'Lịch sử Trung Địa trước Chúa tể những chiếc nhẫn', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(88, '9780007120680', 'Vụ Án Bí Ẩn Ở Styles', 'tải xuống (83).jpg', 18, 95000, 'Vụ án đầu tiên của thám tử Poirot', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(89, '9780684804538', 'A Farewell to Arms', 'tải xuống (84).jpg', 15, 98000, 'Câu chuyện tình trong Thế chiến I', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(90, '9780140449174', 'Những Người Khốn Khổ Tập 4', 'tải xuống (85).jpg', 20, 205000, 'Phần kết cuộc đời Jean Valjean', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(91, '9780141185693', 'The Last Tycoon', 'tải xuống (86).jpg', 16, 90000, 'Tiểu thuyết dở dang về Hollywood', 17, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(92, '9780140445077', 'The Cossacks', 'shopping (5).webp', 14, 85000, 'Câu chuyện về chàng quý tộc ở vùng biên ải', 18, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(93, '9780805209992', 'Thư Gửi Cha', 'tải xuống (87).jpg', 12, 75000, 'Bức thư giải thích mối quan hệ với cha', 19, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(94, '9780141439563', 'Mansfield Park', 'tải xuống (88).jpg', 20, 88000, 'Câu chuyện về Fanny Price', 20, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(95, '9780307264237', 'Tình Yêu Thời Chiến Tranh', 'tải xuống (89).jpg', 18, 120000, 'Tình yêu trong thời kỳ nội chiến Colombia', 21, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(96, '9780062693660', 'Hướng Dẫn Tương Lai', 'tải xuống (6).png', 25, 175000, 'Cách định hướng trong thế giới phức tạp', 14, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(97, '9780316478526', 'Nói Chuyện Với Người Lạ', 'tải xuống (7).png', 20, 140000, 'Hiểu và kết nối với những người xa lạ', 15, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(98, '9780735211386', 'Cho và Nhận: Tái Bản', 'tải xuống (8).png', 18, 160000, 'Phiên bản cập nhật về cách tiếp cận thành công', 16, NULL, '2025-06-23 19:18:13', '2025-06-23 19:18:13'),
(99, '9780399592522', 'Sức Mạnh Của Sự Tử Tế', 'tải xuống (90).jpg', 150, 135000, 'Phiên bản cập nhật về sức mạnh của sự tổn thương', 2, NULL, '2025-06-23 19:18:13', '2025-06-27 12:58:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

REPLACE INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Văn học Việt Nam', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(2, 'Tiểu thuyết tâm linh', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(3, 'Văn học hiện đại Nhật Bản', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(4, 'Giả tưởng', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(5, 'Chiến lược quân sự', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(6, 'Chính trị - xã hội', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(7, 'Phiêu lưu giả tưởng', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(8, 'Trinh thám', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(9, 'Tiểu thuyết phiêu lưu', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(10, 'Tiểu thuyết lịch sử', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(11, 'Văn học Mỹ', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(12, 'Tiểu thuyết cổ điển', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(13, 'Văn học hiện sinh', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(14, 'Tiểu thuyết lãng mạn', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(15, 'Hiện thực huyền ảo', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(16, 'Văn học đương đại', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(17, 'Lịch sử nhân loại', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(18, 'Tâm lý xã hội', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(19, 'Kinh doanh & lãnh đạo', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(20, 'Tâm lý học', '2025-06-23 19:09:38', '2025-06-23 19:09:38'),
(21, 'Tiểu thuyết', '2025-06-27 12:48:22', '2025-06-27 12:48:22'),
(22, 'Bi kịch', '2025-06-27 12:48:41', '2025-06-27 12:48:41'),
(23, 'Hư cấu tâm lý', '2025-06-27 12:48:57', '2025-06-27 12:48:57'),
(24, 'Văn học viễn tưởng', '2025-06-27 12:51:00', '2025-06-27 12:51:00'),
(25, 'Lịch sử thay đổi', '2025-06-27 12:51:18', '2025-06-27 12:51:18'),
(26, 'Tâm lý tình cảm', '2025-06-27 12:55:31', '2025-06-27 12:55:31'),
(27, 'phát triển bản thân', '2025-06-27 12:58:39', '2025-06-27 12:58:39'),
(28, 'truyền cảm hứng', '2025-06-27 12:58:50', '2025-06-27 12:58:50'),
(29, 'sách kỹ năng', '2025-06-27 12:59:13', '2025-06-27 12:59:13'),
(30, 'Khoa học viễn tưởng', '2025-06-27 13:04:07', '2025-06-27 13:04:07'),
(31, 'Hư cấu phản không tưởng', '2025-06-27 13:05:11', '2025-06-27 13:05:11'),
(32, 'Hư cấu chính trị', '2025-06-27 13:06:32', '2025-06-27 13:06:32'),
(33, 'Văn học thiếu nhi', '2025-06-27 13:10:03', '2025-06-27 13:10:03'),
(34, 'Tiểu thuyết dành cho giới trẻ', '2025-06-27 13:10:46', '2025-06-27 13:10:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classifyings`
--

CREATE TABLE IF NOT EXISTS `classifyings` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`book_id`,`category_id`),
  KEY `classifyings_category_id_foreign` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classifyings`
--

REPLACE INTO `classifyings` (`book_id`, `category_id`) VALUES
(1, 21),
(1, 33),
(1, 34),
(2, 5),
(3, 26),
(4, 7),
(4, 11),
(5, 6),
(6, 30),
(6, 31),
(6, 32),
(11, 21),
(11, 22),
(11, 23),
(23, 21),
(23, 24),
(23, 25),
(24, 11),
(30, 10),
(30, 14),
(99, 27),
(99, 28),
(99, 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_name_unique` (`name`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

REPLACE INTO `customers` (`id`, `name`, `email`, `password`, `full_name`, `address`, `phone`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Fabiola Bergnaum', 'miller24@example.org', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(2, 'Tobin Mosciski III', 'jenkins.murl@example.org', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(3, 'Rita Quigley IV', 'renee.koch@example.com', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(4, 'Lois Schmidt', 'vpaucek@example.net', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(5, 'Prof. Okey Brekke', 'zelma79@example.org', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(6, 'Dr. Dayna Cruickshank', 'ubednar@example.com', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(7, 'Candelario Thiel', 'julianne44@example.net', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(8, 'Kendrick Schaden', 'carissa.lindgren@example.com', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-06-06 09:57:44'),
(9, 'Dr. Leo Abbott I', 'adonis59@example.org', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(10, 'Grant Feeney', 'kilback.autumn@example.com', '$2y$12$lIgteTsuPcpI7FcLP8N5Bu0onI4FSVRu4/NVVGiIyi2GfJxu92XWG', NULL, NULL, NULL, NULL, '2025-05-19 09:15:24', '2025-05-19 09:15:24'),
(11, 'Bánh mỳ thịt', 'vinh@gmail.com', '$2y$12$.2HV8H1IV1rL5NDTnlWP1.F7CXLXd1DA040gWVZECTu.qVFxXl3Xi', NULL, NULL, NULL, NULL, '2025-05-27 23:45:53', '2025-05-27 23:45:53'),
(12, 'Lego', 'vinh13@gmail.com', '$2y$12$uXAKARXGkkFTFeu6N.uEbOfLfh6xk9v8/tH7.9RrPIqFaa4fDEimS', 'Vinhmoi999', 'HaNoiuhuhu', '01929149942766767', NULL, '2025-06-06 09:42:55', '2025-06-23 13:18:46'),
(13, 'Đào Thành Vinh', 'daothanhvinh@gmail.com', '$2y$12$eTKvNrzZdDodMWskBO0L5.irPHTEySPvpTZIeh.jk8/xqEUrYlTT.', NULL, NULL, NULL, NULL, '2025-06-24 07:49:28', '2025-06-24 07:49:28'),
(14, 'vinh moi', 'vinhmoi123@gmail.com', '$2y$12$qEiJVs5jzcehJHUDzl0rvO725HDiFymcKEBbP2GDdbf2vYVLpBSdK', NULL, NULL, NULL, NULL, '2025-06-25 15:45:57', '2025-06-25 15:45:57'),
(15, 'đào văn', 'dao@gmail.com', '$2y$12$ketkT6jjbTEUeHMIEt5f4.OunYFJZ6NbRAP4akMVxm27FoYRiFfeS', NULL, NULL, NULL, NULL, '2025-06-25 17:43:24', '2025-06-25 17:43:24'),
(16, 'dao', 'dao123@gmail.com', '$2y$12$DCjEyUQpoVJgY5qlgiKR8eIdv1tLl4XUdIHewXOy4bZabejbrWlwS', NULL, NULL, NULL, NULL, '2025-06-25 17:51:44', '2025-06-25 17:51:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_13_085701_create_customers_table', 1),
(5, '2025_05_13_095641_create_admins_table', 1),
(6, '2025_05_13_111926_create_orders_table', 1),
(7, '2025_05_13_113010_create_order_details_table', 1),
(8, '2025_05_13_113512_create_books_table', 1),
(9, '2025_05_13_114328_create_publishers_table', 1),
(10, '2025_05_13_115113_create_classifyings_table', 1),
(11, '2025_05_13_115511_create_categories_table', 1),
(12, '2025_05_13_120044_create_authors_table', 1),
(13, '2025_05_13_151303_update_orders_table', 1),
(14, '2025_05_13_154850_update_order_details_table', 1),
(15, '2025_05_13_155157_update_books_table', 1),
(16, '2025_05_13_155455_update_classifyings_table', 1),
(17, '2025_05_14_031931_create_writings_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id_confirmed` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `ship_to_address` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('CANCELED','PENDING','CONFIRMED','COMPLETED') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_admin_id_confirmed_foreign` (`admin_id_confirmed`),
  KEY `orders_customer_id_foreign` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

REPLACE INTO `orders` (`id`, `admin_id_confirmed`, `customer_id`, `customer_name`, `customer_phone`, `ship_to_address`, `total`, `status`, `created_at`, `updated_at`) VALUES
(11, 1, 12, 'Vinhmoi999', '01929149942766767', 'HaNoiuhuhu', 175000, 'COMPLETED', '2025-06-23 13:18:46', '2025-06-26 06:23:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`order_id`,`book_id`),
  KEY `order_details_book_id_foreign` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

REPLACE INTO `order_details` (`order_id`, `book_id`, `quantity`, `price`) VALUES
(11, 30, 1, 175000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `publishers_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `publishers`
--

REPLACE INTO `publishers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'HarperCollins', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(3, 'Macmillan Publishers', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(4, 'Hachette Livre', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(5, 'Scholastic Corporation', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(6, 'Pearson Education', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(7, 'Oxford University Press', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(8, 'Cambridge University Press', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(9, 'Wiley', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(10, 'Springer Nature', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(11, 'McGraw-Hill Education', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(12, 'Cengage Learning', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(13, 'Bloomsbury Publishing', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(14, 'Egmont Group', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(15, 'Kodansha', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(16, 'Shogakukan', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(17, 'Kadokawa Corporation', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(18, 'Nhà xuất bản Văn học', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(19, 'Nhà xuất bản Trẻ', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(20, 'Nhà xuất bản Hội Nhà Văn', '2025-06-23 19:09:43', '2025-06-23 19:09:43'),
(21, 'Penguin Random House', '2025-06-23 19:09:43', '2025-06-23 19:09:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

REPLACE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ZZKrigvYSzmLKAz483bNLIEpXkQL5FqbETjpo0mu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWHdLNjZreGh0UENNMm9iamltQ0tNSVlGT2RlbDN3RzlLZWpEcER6ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ib29rcy10cmFzaGVkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MzoibG9naW5fYWRtaW5zXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1751036717);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-05-19 09:15:23', '$2y$12$RxrqaMN/4Lb1gXw5FRvfb.eLNEKo5WpkdLPtwPKxEsY3jCtf8in9q', '8MWKsnW7zp', '2025-05-19 09:15:24', '2025-05-19 09:15:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `writings`
--

CREATE TABLE IF NOT EXISTS `writings` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`book_id`,`author_id`),
  KEY `writings_author_id_foreign` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `writings`
--

REPLACE INTO `writings` (`book_id`, `author_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 1),
(23, 3),
(24, 4),
(25, 8),
(26, 6),
(27, 7),
(28, 8),
(29, 9),
(30, 10),
(32, 12),
(33, 13),
(34, 14),
(35, 15),
(36, 16),
(38, 18),
(39, 19),
(42, 2),
(43, 3),
(44, 4),
(47, 7),
(49, 9),
(50, 10),
(61, 1),
(62, 2),
(64, 4),
(67, 7),
(70, 10),
(77, 17),
(84, 4),
(90, 10),
(99, 21),
(99, 22);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Các ràng buộc cho bảng `classifyings`
--
ALTER TABLE `classifyings`
  ADD CONSTRAINT `classifyings_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `classifyings_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_admin_id_confirmed_foreign` FOREIGN KEY (`admin_id_confirmed`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `writings`
--
ALTER TABLE `writings`
  ADD CONSTRAINT `writings_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `writings_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
