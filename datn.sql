-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2025 lúc 09:00 PM
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
-- Cơ sở dữ liệu: `datn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','employee') NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
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

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Nhật Ánh', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(2, 'Paulo Coelho', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(3, 'Haruki Murakami', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(4, 'J.K. Rowling', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(5, 'Sun Tzu', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(6, 'George Orwell', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(7, 'J.R.R. Tolkien', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(8, 'Agatha Christie', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(9, 'Ernest Hemingway', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(10, 'Victor Hugo', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(11, 'F. Scott Fitzgerald', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(12, 'Leo Tolstoy', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(13, 'Franz Kafka', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(14, 'Jane Austen', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(15, 'Gabriel García Márquez', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(16, 'Chimamanda Ngozi Adichie', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(17, 'Yuval Noah Harari', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(18, 'Malcolm Gladwell', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(19, 'Adam Grant', '2025-06-23 18:55:58', '2025-06-23 18:55:58'),
(20, 'Brené Brown', '2025-06-23 18:55:58', '2025-06-23 18:55:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isbn_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `isbn_code`, `title`, `image`, `quantity`, `price`, `description`, `publisher_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(496, '1186041111111', 'Cho Tôi Xin Một Vé Đi Tuổi Thơ', 'cho_toi_xin_mot_ve.jpg', 20, 80000, 'Câu chuyện về tuổi thơ trong trẻo, hồn nhiên', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(497, '1280061122415', 'O Alquimista', 'nha_gia_kim.jpg', 15, 120000, 'Hành trình đi tìm kho báu và khám phá bản thân', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(498, '1380099448792', 'Rừng Na Uy', 'rung_na_uy.jpg', 18, 150000, 'Câu chuyện về tình yêu, mất mát và ký ức', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(499, '1480747532743', 'Harry Potter và Hòn đá Phù thủy', 'harry_potter_1.jpg', 25, 180000, 'Câu chuyện về cậu bé phù thủy Harry Potter', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(500, '9781590302255', 'Binh Pháp Tôn Tử', 'binh_pha_ton_tu.jpg', 12, 75000, 'Tác phẩm kinh điển về nghệ thuật chiến tranh', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(501, '9780451524935', '1984', '1984.jpg', 20, 90000, 'Tác phẩm kinh điển về xã hội toàn trị', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(502, '9780547928227', 'The Hobbit', 'the_hobbit.jpg', 22, 160000, 'Hành trình của Bilbo Baggins', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(503, '9780007113804', 'Án Mạng Trên Chuyến Tàu Tốc Hành Phương Đông', 'train.jpg', 18, 110000, 'Phá án trên chuyến tàu tốc hành', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(504, '9780684801469', 'Ông Già Và Biển Cả', 'ong_gia_bien_ca.jpg', 15, 85000, 'Câu chuyện về lão ngư đánh cá với con cá kiếm', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(505, '9780140444308', 'Những Người Khốn Khổ', 'les_miserables.jpg', 30, 200000, 'Bộ tiểu thuyết về cuộc đời Jean Valjean', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(506, '9780743273565', 'Đại Gia Gatsby', 'gatsby.jpg', 16, 95000, 'Bi kịch của giấc mơ Mỹ thời Jazz', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(507, '9780140447931', 'Chiến Tranh và Hòa Bình', 'war_and_peace.jpg', 14, 220000, 'Sử thi về nước Nga thời Napoleon', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(508, '9780805242010', 'Hóa Thân', 'metamorphosis.jpg', 10, 70000, 'Câu chuyện về Gregor Samsa thức dậy thành côn trùng', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(509, '1480141439518', 'Kiêu Hãnh và Định Kiến', 'pride_prejudice.jpg', 25, 85000, 'Tình yêu và định kiến xã hội thế kỷ 19', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(510, '9780060883287', 'Trăm Năm Cô Đơn', 'one_hundred_years.jpg', 20, 130000, 'Câu chuyện dòng họ Buendía ở Macondo', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(511, '9780007356348', 'Chúng Ta Đều Nên Là Những Nhà Nữ Quyền', 'feminist.jpg', 22, 95000, 'Luận về nữ quyền trong thế giới hiện đại', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(512, '9780062316097', 'Sapiens: Lược Sử Loài Người', 'sapiens.jpg', 30, 185000, 'Hành trình tiến hóa của loài người', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(513, '9780316017930', 'Những Kẻ Xuất Chúng', 'outliers.jpg', 18, 125000, 'Bí mật đằng sau thành công của những thiên tài', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(514, '9780753557537', 'Tư Duy Lại Với Tư Duy', 'think_again.jpg', 15, 135000, 'Nghệ thuật tư duy lại và học hỏi', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(515, '9781592408410', 'Can Đảm: Sức Mạnh Của Sự Tổn Thương', 'daring_greatly.jpg', 20, 115000, 'Khám phá sức mạnh của sự tổn thương', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(516, '9786045697043', 'Mắt Biếc', 'mat_biec.jpg', 25, 90000, 'Chuyện tình cảm động tuổi học trò', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(517, '9780062315007', 'Phù Thủy Thành Phố Portobello', 'portobello.jpg', 18, 110000, 'Hành trình tìm kiếm ý nghĩa cuộc sống', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(518, '9784344401034', '1Q84', '1q84.jpg', 20, 250000, 'Thế giới song song với hai mặt trăng', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(519, '9780439064873', 'Harry Potter và Phòng Chứa Bí Mật', 'harry_potter_2.jpg', 22, 185000, 'Cuộc phiêu lưu năm thứ hai tại Hogwarts', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(520, '9780140440393', 'Nghệ Thuật Chiến Tranh', 'art_of_war.jpg', 15, 80000, 'Chiến lược quân sự của Tôn Tử', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(521, '9780452284234', 'Trại Súc Vật', 'animal_farm.jpg', 20, 85000, 'Châm biếm về chủ nghĩa toàn trị', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(522, '9780261102217', 'Chúa tể những chiếc nhẫn: Hiệp hội nhẫn thần', 'lotr_1.jpg', 25, 195000, 'Hành trình hủy diệt chiếc nhẫn quyền lực', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(523, '9780007113805', 'Án Mạng Ở Mesopotamia', 'mesopotamia.jpg', 16, 105000, 'Vụ án bí ẩn ở vùng Lưỡng Hà', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(524, '9780684800714', 'Chuông Nguyện Hồn Ai', 'for_whom_bell_tolls.jpg', 18, 95000, 'Câu chuyện tình trong nội chiến Tây Ban Nha', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(525, '9780140444759', 'Nhà Thờ Đức Bà Paris', 'notre_dame.jpg', 20, 175000, 'Bi kịch tình yêu dưới bóng nhà thờ Đức Bà', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(526, '9780141182630', 'Tender Is the Night', 'tender_night.jpg', 15, 90000, 'Sự suy tàn của một cặp vợ chồng trẻ', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(527, '9780140447934', 'Anna Karenina', 'anna_karenina.jpg', 22, 210000, 'Bi kịch tình yêu trong xã hội quý tộc Nga', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(528, '9780805210552', 'Lâu Đài', 'the_castle.jpg', 12, 85000, 'Hành trình vô vọng của K. đến lâu đài', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(529, '9780141439686', 'Emma', 'emma.jpg', 20, 95000, 'Câu chuyện về cô gái thích mai mối', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(530, '9780307474728', 'Tình Yêu Thời Thổ Tả', 'love_cholera.jpg', 18, 115000, 'Tình yêu vượt thời gian và thử thách', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(531, '9780307271082', 'Americanah', 'americanah.jpg', 25, 135000, 'Hành trình của người phụ nữ Nigeria ở Mỹ', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(532, '9780062316110', 'Homo Deus: Lược Sử Tương Lai', 'homo_deus.jpg', 20, 195000, 'Viễn cảnh tương lai của nhân loại', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(533, '9780316010665', 'Điểm Bùng Phát', 'tipping_point.jpg', 22, 125000, 'Lý thuyết về sự lan truyền của ý tưởng', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(534, '9781982141462', 'Cho và Nhận', 'give_and_take.jpg', 18, 145000, 'Cách tiếp cận mới về thành công', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(535, '9781592407338', 'Sức Mạnh Của Sự Tổn Thương', 'power_vulnerability.jpg', 15, 125000, 'Nghệ thuật sống can đảm', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(536, '9786043073402', 'Cô Gái Đến Từ Hôm Qua', 'co_gai_den_tu_hom_qua.jpg', 25, 85000, 'Chuyện tình tuổi học trò đầy cảm xúc', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(537, '9780061120084', 'Veronika Quyết Chết', 'veronika.jpg', 20, 100000, 'Hành trình tìm kiếm ý nghĩa cuộc sống', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(538, '9780099448471', 'Kafka Bên Bờ Biển', 'kafka_beach.jpg', 18, 160000, 'Hành trình siêu thực của một thiếu niên', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(539, '9780439136365', 'Harry Potter và Tên Tù Nhân Ngục Azkaban', 'harry_potter_3.jpg', 22, 190000, 'Sự xuất hiện của tên tù nhân nguy hiểm', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(540, '9780143106635', 'Thiên Long Bát Bộ', 'tian_long.jpg', 15, 220000, 'Tiểu thuyết kiếm hiệp kinh điển', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(541, '9780451526342', 'Chào Mừng Đến Với Chuột Túi', 'brave_new_world.jpg', 20, 95000, 'Viễn tưởng về xã hội tương lai', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(542, '9780261102354', 'Chúa tể những chiếc nhẫn: Hai Tòa Tháp', 'lotr_2.jpg', 25, 200000, 'Phần tiếp theo của hành trình hủy diệt nhẫn', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(543, '9780007120864', 'Vụ Ám Sát Ông Roger Ackroyd', 'roger_ackroyd.jpg', 18, 100000, 'Vụ án bí ẩn với kết thúc bất ngờ', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(544, '9780684803357', 'Mặt Trời Vẫn Mọc', 'sun_also_rises.jpg', 15, 90000, 'Thế hệ lạc lõng sau Thế chiến I', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(545, '9780140449175', 'Những Người Khốn Khổ Tập 2', 'les_miserables_2.jpg', 20, 195000, 'Phần tiếp theo cuộc đời Jean Valjean', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(546, '9780141184153', 'This Side of Paradise', 'side_paradise.jpg', 16, 95000, 'Tuổi trẻ và thất vọng thời Jazz', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(547, '9781240449174', 'Phục Sinh', 'resurrection.jpg', 14, 95000, 'Hành trình chuộc lỗi của một quý tộc', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(548, '9780805209990', 'Vụ Án', 'the_trial.jpg', 12, 85000, 'Hành trình vô vọng của Josef K.', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(549, '9780141439471', 'Cảm Xúc và Lý Trí', 'sense_sensibility.jpg', 20, 90000, 'Câu chuyện về hai chị em Dashwood', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(550, '9780307387158', 'Hồi Ức Về Những Cô Gái Điếm Buồn Của Tôi', 'sad_whore.jpg', 18, 110000, 'Tình yêu kỳ lạ của một cụ già 90 tuổi', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(551, '9780307277671', 'Một Nửa Mặt Trời Vàng', 'half_sun.jpg', 22, 125000, 'Bi kịch của nội chiến Nigeria', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(552, '9780062464347', '21 Bài Học Cho Thế Kỷ 21', '21_lessons.jpg', 25, 175000, 'Giải đáp những vấn đề cấp bách của hiện tại', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(553, '9780316017923', 'Trong Chớp Mắt', 'blink.jpg', 20, 130000, 'Sức mạnh của suy nghĩ không cần suy nghĩ', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(554, '9780735214158', 'Originals: Chống Lại Đám Đông', 'originals.jpg', 18, 150000, 'Cách trở nên sáng tạo và đột phá', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(555, '9781592409875', 'Sự Hoàn Hảo Không Trọn Vẹn', 'gifts_imperfection.jpg', 15, 120000, 'Từ bỏ sự hoàn hảo để sống trọn vẹn', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(556, '9786043073419', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'hoa_vang_co_xanh.jpg', 30, 95000, 'Tuổi thơ ở làng quê Việt Nam', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(557, '9780060512130', 'Zahir', 'zahir.jpg', 18, 105000, 'Hành trình tìm kiếm ý nghĩa đích thực', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(558, '9780099528981', 'Biên Niên Ký Chim Vặn Dây Cót', 'wind_up_bird.jpg', 20, 170000, 'Hành trình tìm vợ mất tích của Toru Okada', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(559, '9780439358071', 'Harry Potter và Chiếc Cốc Lửa', 'harry_potter_4.jpg', 22, 195000, 'Giải đấu Tam Pháp Thuật nguy hiểm', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(560, '9780140444261', 'Tam Quốc Diễn Nghĩa', 'three_kingdoms.jpg', 15, 210000, 'Tiểu thuyết lịch sử Trung Quốc kinh điển', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(561, '9780451529060', 'Down and Out in Paris and London', 'down_out.jpg', 18, 90000, 'Cuộc sống của những người nghèo khổ', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(562, '9780261102378', 'Chúa tể những chiếc nhẫn: Sự Trở Về Của Nhà Vua', 'lotr_3.jpg', 25, 205000, 'Kết thúc của hành trình hủy diệt nhẫn', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(563, '9780007120697', 'Vụ Ám Sát Trên Sân Golf', 'golf_course.jpg', 16, 98000, 'Vụ án trên sân golf kỳ lạ', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(564, '9780684804521', 'Tuyết Trên Đỉnh Kilimanjaro', 'snow_kilimanjaro.jpg', 15, 85000, 'Tuyển tập truyện ngắn đặc sắc', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(565, '4180140449174', 'Những Người Khốn Khổ Tập 3', 'les_miserables_3.jpg', 20, 200000, 'Phần cuối cuộc đời Jean Valjean', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(566, '9780141180636', 'The Beautiful and Damned', 'beautiful_damned.jpg', 16, 92000, 'Sự hủy hoại của sự giàu có và thời gian', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(567, '9780140441093', 'Cái Chết Của Ivan Ilyich', 'ivan_ilyich.jpg', 14, 80000, 'Suy ngẫm về cuộc đời khi cái chết cận kề', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(568, '9780805209991', 'Nước Mỹ', 'america.jpg', 12, 88000, 'Hành trình của Karl Rossmann đến nước Mỹ', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(569, '9780141439518', 'Northanger Abbey', 'northanger.jpg', 20, 85000, 'Châm biếm thể loại tiểu thuyết Gothic', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(570, '9780141189363', 'Tướng Quân Giữa Mê Hồn Trận', 'general_labyrinth.jpg', 18, 115000, 'Hành trình của một vị tướng trong mê cung', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(571, '9780307455925', 'Bỏ Quên', 'purple_hibiscus.jpg', 22, 118000, 'Câu chuyện về một gia đình Nigeria', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(572, '9780062464316', 'Sapiens: Graphic History', 'sapiens_graphic.jpg', 25, 165000, 'Phiên bản truyện tranh của Sapiens', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(573, '9780316011785', 'Chú Chó Nhìn Thấy Gì', 'what_dog_saw.jpg', 20, 135000, 'Tuyển tập bài viết từ tờ New Yorker', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(574, '9780735213502', 'Nghĩ Lại và Làm Lại', 'think_again_2.jpg', 18, 155000, 'Nghệ thuật tư duy lại trong công việc', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(575, '9781592408411', 'Dám Lãnh Đạo', 'dare_to_lead.jpg', 15, 130000, 'Xây dựng văn hóa dũng cảm tại nơi làm việc', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(576, '9786043235611', 'Ngồi Khóc Trên Cây', 'ngoi_khoc_tren_cay.jpg', 25, 98000, 'Chuyện tình cảm động giữa chàng sinh viên và cô gái rừng', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(577, '9780060935465', 'Nàng Brida', 'brida.jpg', 20, 110000, 'Hành trình khám phá tâm linh của cô gái trẻ', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(578, '9780307277718', 'Sputnik Sweetheart', 'sputnik.jpg', 18, 145000, 'Câu chuyện về tình yêu và sự cô đơn', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(579, '9780439784542', 'Harry Potter và Hội Phượng Hoàng', 'harry_potter_5.jpg', 22, 210000, 'Cuộc chiến chống lại Chúa tể Hắc ám', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(580, '9780140444285', 'Thủy Hử', 'water_margin.jpg', 15, 195000, '108 anh hùng Lương Sơn Bạc', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(581, '9780451524936', 'Coming Up for Air', 'coming_up_air.jpg', 20, 92000, 'Hồi tưởng về quá khứ và hiện tại u ám', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(582, '9780547928228', 'The Silmarillion', 'silmarillion.jpg', 25, 185000, 'Lịch sử Trung Địa trước Chúa tể những chiếc nhẫn', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(583, '9780007120680', 'Vụ Án Bí Ẩn Ở Styles', 'styles.jpg', 18, 95000, 'Vụ án đầu tiên của thám tử Poirot', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(584, '9780684804538', 'A Farewell to Arms', 'farewell_arms.jpg', 15, 98000, 'Câu chuyện tình trong Thế chiến I', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(585, '9780140449174', 'Những Người Khốn Khổ Tập 4', 'les_miserables_4.jpg', 20, 205000, 'Phần kết cuộc đời Jean Valjean', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(586, '9780141185693', 'The Last Tycoon', 'last_tycoon.jpg', 16, 90000, 'Tiểu thuyết dở dang về Hollywood', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(587, '9780140445077', 'The Cossacks', 'cossacks.jpg', 14, 85000, 'Câu chuyện về chàng quý tộc ở vùng biên ải', 18, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(588, '9780805209992', 'Thư Gửi Cha', 'letter_father.jpg', 12, 75000, 'Bức thư giải thích mối quan hệ với cha', 19, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(589, '9780141439563', 'Mansfield Park', 'mansfield_park.jpg', 20, 88000, 'Câu chuyện về Fanny Price', 20, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(590, '9780307264237', 'Tình Yêu Thời Chiến Tranh', 'war_time_love.jpg', 18, 120000, 'Tình yêu trong thời kỳ nội chiến Colombia', 21, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(591, '9780062693660', 'Hướng Dẫn Tương Lai', 'future_guide.jpg', 25, 175000, 'Cách định hướng trong thế giới phức tạp', 14, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(592, '9780316478526', 'Nói Chuyện Với Người Lạ', 'talking_strangers.jpg', 20, 140000, 'Hiểu và kết nối với những người xa lạ', 15, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(593, '9780735211386', 'Cho và Nhận: Tái Bản', 'give_take_revised.jpg', 18, 160000, 'Phiên bản cập nhật về cách tiếp cận thành công', 16, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25'),
(594, '9780399592522', 'Sức Mạnh Của Sự Tổn Thương: Tái Bản', 'daring_greatly_revised.jpg', 15, 135000, 'Phiên bản cập nhật về sức mạnh của sự tổn thương', 17, NULL, '2025-06-23 18:58:25', '2025-06-23 18:58:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Văn học Việt Nam', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(2, 'Tiểu thuyết tâm linh', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(3, 'Văn học hiện đại Nhật Bản', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(4, 'Giả tưởng', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(5, 'Chiến lược quân sự', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(6, 'Chính trị - xã hội', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(7, 'Phiêu lưu giả tưởng', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(8, 'Trinh thám', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(9, 'Tiểu thuyết phiêu lưu', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(10, 'Tiểu thuyết lịch sử', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(11, 'Văn học Mỹ', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(12, 'Tiểu thuyết cổ điển', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(13, 'Văn học hiện sinh', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(14, 'Tiểu thuyết lãng mạn', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(15, 'Hiện thực huyền ảo', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(16, 'Văn học đương đại', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(17, 'Lịch sử nhân loại', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(18, 'Tâm lý xã hội', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(19, 'Kinh doanh & lãnh đạo', '2025-06-23 18:56:13', '2025-06-23 18:56:13'),
(20, 'Tâm lý học', '2025-06-23 18:56:13', '2025-06-23 18:56:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classifyings`
--

CREATE TABLE `classifyings` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classifyings`
--

INSERT INTO `classifyings` (`book_id`, `category_id`) VALUES
(496, 1),
(497, 2),
(498, 3),
(499, 4),
(500, 5),
(501, 6),
(502, 4),
(503, 8),
(504, 9),
(505, 10),
(506, 11),
(507, 12),
(508, 13),
(509, 14),
(510, 15),
(511, 16),
(512, 17),
(513, 18),
(514, 19),
(515, 20),
(516, 1),
(518, 3),
(519, 4),
(521, 6),
(522, 7),
(523, 8),
(524, 9),
(527, 12),
(528, 13),
(529, 14),
(530, 15),
(531, 16),
(533, 18),
(534, 19),
(535, 20),
(537, 2),
(539, 4),
(542, 7),
(545, 10),
(559, 4),
(562, 7),
(565, 10),
(572, 17),
(579, 4),
(585, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `full_name`, `address`, `phone`, `deleted_at`, `created_at`, `updated_at`) VALUES
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
(12, 'Lego', 'vinh13@gmail.com', '$2y$12$uXAKARXGkkFTFeu6N.uEbOfLfh6xk9v8/tH7.9RrPIqFaa4fDEimS', 'Vinhmoi999', 'HaNoiuhuhu', '01929149942766767', NULL, '2025-06-06 09:42:55', '2025-06-16 08:44:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
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

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id_confirmed` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `ship_to_address` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('CANCELED','PENDING','CONFIRMED','COMPLETED') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'HarperCollins', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(3, 'Macmillan Publishers', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(4, 'Hachette Livre', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(5, 'Scholastic Corporation', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(6, 'Pearson Education', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(7, 'Oxford University Press', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(8, 'Cambridge University Press', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(9, 'Wiley', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(10, 'Springer Nature', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(11, 'McGraw-Hill Education', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(12, 'Cengage Learning', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(13, 'Bloomsbury Publishing', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(14, 'Egmont Group', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(15, 'Kodansha', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(16, 'Shogakukan', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(17, 'Kadokawa Corporation', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(18, 'Nhà xuất bản Văn học', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(19, 'Nhà xuất bản Trẻ', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(20, 'Nhà xuất bản Hội Nhà Văn', '2025-06-23 18:56:18', '2025-06-23 18:56:18'),
(21, 'Penguin Random House', '2025-06-23 18:56:18', '2025-06-23 18:56:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4NV3tNi4sf0gDoj1ULalptLao75rd0O0UkXTQLP4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoieU55ZXFTT2RuTDZBQlAwbmNpOTlrdXN6d3NZeG84bWd0a2JGM25wWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jaGVja291dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTM6ImxvZ2luX2FkbWluc181OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo1NjoibG9naW5fY3VzdG9tZXJzXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTI7czo0OiJjYXJ0IjthOjE6e2k6MDtPOjE1OiJBcHBcTW9kZWxzXEJvb2siOjMxOntzOjEzOiIAKgBjb25uZWN0aW9uIjtzOjU6Im15c3FsIjtzOjg6IgAqAHRhYmxlIjtzOjU6ImJvb2tzIjtzOjEzOiIAKgBwcmltYXJ5S2V5IjtzOjI6ImlkIjtzOjEwOiIAKgBrZXlUeXBlIjtzOjM6ImludCI7czoxMjoiaW5jcmVtZW50aW5nIjtiOjE7czo3OiIAKgB3aXRoIjthOjA6e31zOjEyOiIAKgB3aXRoQ291bnQiO2E6MDp7fXM6MTk6InByZXZlbnRzTGF6eUxvYWRpbmciO2I6MDtzOjEwOiIAKgBwZXJQYWdlIjtpOjE1O3M6NjoiZXhpc3RzIjtiOjE7czoxODoid2FzUmVjZW50bHlDcmVhdGVkIjtiOjA7czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO3M6MTM6IgAqAGF0dHJpYnV0ZXMiO2E6MTI6e3M6MjoiaWQiO2k6MTc7czo5OiJpc2JuX2NvZGUiO3M6ODoiZDhkOWE5MWQiO3M6NToidGl0bGUiO3M6ODoiRG9yYWVtb24iO3M6NToiaW1hZ2UiO3M6MTc6InThuqNpIHh14buRbmcucG5nIjtzOjg6InF1YW50aXR5IjtpOjE7czo1OiJwcmljZSI7aToyNTAwMDtzOjExOiJkZXNjcmlwdGlvbiI7czo3MTM6IkRvcmFlbW9uIGzDoCBt4buZdCBjaMO6IG3DqG8gbcOheSDEkcaw4bujYyBOb2JpIFNld2FzaGkgKE5vYmkgTm9iaXRvKSwgY2jDoXUgbsSDbSDEkeG7nWkgY+G7p2EgTm9iaSBOb2JpdGEsIGfhu61pIHThu6sgdGjhur8ga+G7tyAyMiB24buBIHF1w6Ega2jhu6kgY+G7p2Egw7RuZyBtw6xuaCDEkeG7gyBnacO6cCDEkeG7oSBOb2JpdGEgdHLhu58gbsOqbiB0aeG6v24gYuG7mSB2w6AgZ2nDoHUgY8OzLCB04bupYyBsw6AgY8Wpbmcgc+G6vSBj4bqjaSB0aGnhu4duIGhvw6BuIGPhuqNuaCBj4bunYSBjb24gY2jDoXUgTm9iaXRhIHNhdSBuw6B5LiBDw7JuIOG7nyBoaeG7h24gdOG6oWksIE5vYml0YSBsw6AgbeG7mXQgY+G6rXUgYsOpIGx1w7RuIHRo4bqldCBi4bqhaSDhu58gdHLGsOG7nW5nIGjhu41jLCB2w6Agc2F1IMSRw7MgY8O0bmcgdHkgcGjDoSBz4bqjbiwgdGjhuqV0IGLhuqFpIHRyb25nIGPDtG5nIHZp4buHYywgxJHhuql5IGdpYSDEkcOsbmggdsOgIGNvbiBjaMOhdSBzYXUgbsOgeSB2w6BvIGPhuqNuaCBu4bujIG7huqduLiBO4buZaSBkdW5nIHNlcmllcyBr4buDIHbhu4EgY3Xhu5ljIMSR4budaSBj4bunYSBj4bqtdSBiw6kgTm9iaXRhIHbDoCBjaMO6IG3DqG8gbcOheSBEb3JhZW1vbiB04burIHTGsMahbmcgbGFpIMSR4bq/biDEkeG7gyBnacO6cCBjdeG7mWMgc+G7kW5nIGPhu6dhIGPhuq11IGLDqSB0cuG7nyBuw6puIHThu5F0IGjGoW4uIjtzOjEyOiJwdWJsaXNoZXJfaWQiO2k6MjA7czoxMDoiZGVsZXRlZF9hdCI7TjtzOjEwOiJjcmVhdGVkX2F0IjtzOjE5OiIyMDI1LTA2LTA2IDE2OjE4OjM5IjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjE5OiIyMDI1LTA2LTA2IDE2OjE4OjM5IjtzOjE1OiJxdWFudGl0eUluU3RvY2siO2k6Mjk7fXM6MTE6IgAqAG9yaWdpbmFsIjthOjExOntzOjI6ImlkIjtpOjE3O3M6OToiaXNibl9jb2RlIjtzOjg6ImQ4ZDlhOTFkIjtzOjU6InRpdGxlIjtzOjg6IkRvcmFlbW9uIjtzOjU6ImltYWdlIjtzOjE3OiJ04bqjaSB4deG7kW5nLnBuZyI7czo4OiJxdWFudGl0eSI7aTozMDtzOjU6InByaWNlIjtpOjI1MDAwO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjcxMzoiRG9yYWVtb24gbMOgIG3hu5l0IGNow7ogbcOobyBtw6F5IMSRxrDhu6NjIE5vYmkgU2V3YXNoaSAoTm9iaSBOb2JpdG8pLCBjaMOhdSBuxINtIMSR4budaSBj4bunYSBOb2JpIE5vYml0YSwgZ+G7rWkgdOG7qyB0aOG6vyBr4bu3IDIyIHbhu4EgcXXDoSBraOG7qSBj4bunYSDDtG5nIG3DrG5oIMSR4buDIGdpw7pwIMSR4buhIE5vYml0YSB0cuG7nyBuw6puIHRp4bq/biBi4buZIHbDoCBnacOgdSBjw7MsIHThu6ljIGzDoCBjxaluZyBz4bq9IGPhuqNpIHRoaeG7h24gaG/DoG4gY+G6o25oIGPhu6dhIGNvbiBjaMOhdSBOb2JpdGEgc2F1IG7DoHkuIEPDsm4g4bufIGhp4buHbiB04bqhaSwgTm9iaXRhIGzDoCBt4buZdCBj4bqtdSBiw6kgbHXDtG4gdGjhuqV0IGLhuqFpIOG7nyB0csaw4budbmcgaOG7jWMsIHbDoCBzYXUgxJHDsyBjw7RuZyB0eSBwaMOhIHPhuqNuLCB0aOG6pXQgYuG6oWkgdHJvbmcgY8O0bmcgdmnhu4djLCDEkeG6qXkgZ2lhIMSRw6xuaCB2w6AgY29uIGNow6F1IHNhdSBuw6B5IHbDoG8gY+G6o25oIG7hu6MgbuG6p24uIE7hu5lpIGR1bmcgc2VyaWVzIGvhu4MgduG7gSBjdeG7mWMgxJHhu51pIGPhu6dhIGPhuq11IGLDqSBOb2JpdGEgdsOgIGNow7ogbcOobyBtw6F5IERvcmFlbW9uIHThu6sgdMawxqFuZyBsYWkgxJHhur9uIMSR4buDIGdpw7pwIGN14buZYyBz4buRbmcgY+G7p2EgY+G6rXUgYsOpIHRy4bufIG7Dqm4gdOG7kXQgaMahbi4iO3M6MTI6InB1Ymxpc2hlcl9pZCI7aToyMDtzOjEwOiJkZWxldGVkX2F0IjtOO3M6MTA6ImNyZWF0ZWRfYXQiO3M6MTk6IjIwMjUtMDYtMDYgMTY6MTg6MzkiO3M6MTA6InVwZGF0ZWRfYXQiO3M6MTk6IjIwMjUtMDYtMDYgMTY6MTg6MzkiO31zOjEwOiIAKgBjaGFuZ2VzIjthOjA6e31zOjg6IgAqAGNhc3RzIjthOjE6e3M6MTA6ImRlbGV0ZWRfYXQiO3M6ODoiZGF0ZXRpbWUiO31zOjE3OiIAKgBjbGFzc0Nhc3RDYWNoZSI7YTowOnt9czoyMToiACoAYXR0cmlidXRlQ2FzdENhY2hlIjthOjA6e31zOjEzOiIAKgBkYXRlRm9ybWF0IjtOO3M6MTA6IgAqAGFwcGVuZHMiO2E6MDp7fXM6MTk6IgAqAGRpc3BhdGNoZXNFdmVudHMiO2E6MDp7fXM6MTQ6IgAqAG9ic2VydmFibGVzIjthOjA6e31zOjEyOiIAKgByZWxhdGlvbnMiO2E6MDp7fXM6MTA6IgAqAHRvdWNoZXMiO2E6MDp7fXM6MTA6InRpbWVzdGFtcHMiO2I6MTtzOjEzOiJ1c2VzVW5pcXVlSWRzIjtiOjA7czo5OiIAKgBoaWRkZW4iO2E6MDp7fXM6MTA6IgAqAHZpc2libGUiO2E6MDp7fXM6MTE6IgAqAGZpbGxhYmxlIjthOjc6e2k6MDtzOjk6ImlzYm5fY29kZSI7aToxO3M6NToidGl0bGUiO2k6MjtzOjU6ImltYWdlIjtpOjM7czo4OiJxdWFudGl0eSI7aTo0O3M6NToicHJpY2UiO2k6NTtzOjExOiJkZXNjcmlwdGlvbiI7aTo2O3M6MTI6InB1Ymxpc2hlcl9pZCI7fXM6MTA6IgAqAGd1YXJkZWQiO2E6MTp7aTowO3M6MToiKiI7fXM6MTY6IgAqAGZvcmNlRGVsZXRpbmciO2I6MDt9fXM6MTA6ImNhcnRfdG90YWwiO2k6MjUwMDA7fQ==', 1750404600),
('8M9vApBhEJsYu6BOMJ06bSgInmM00abr18vbHrYa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZmNtRnBQNkhWOUFGaFJEa1RzMFVOSVh2R1VoYlk2YXVaMDBOTm5zSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTM6ImxvZ2luX2FkbWluc181OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1750401644),
('caV13cBVFjWxq9omcyLp38ISEiIm3zT1ckyasHMT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNVVRRWFiRUZiZTZXcnhwZUUyb2thdjcwRGVYeWlTZlVsbFZwcVVVbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/cGFnZT0xIjt9czo1MzoibG9naW5fYWRtaW5zXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1750705170),
('Dj9p5BvgHmQR38n9myIWaeJXbj96fFrD7IBz5xox', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVUN5azFscDM0ODR2RWp4UEtnUXdnckFCbkVZa3Z0b0VRYk1qdXFVcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXJ0LXBhZ2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU2OiJsb2dpbl9jdXN0b21lcnNfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjt9', 1750670741);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-05-19 09:15:23', '$2y$12$RxrqaMN/4Lb1gXw5FRvfb.eLNEKo5WpkdLPtwPKxEsY3jCtf8in9q', '8MWKsnW7zp', '2025-05-19 09:15:24', '2025-05-19 09:15:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `writings`
--

CREATE TABLE `writings` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `writings`
--

INSERT INTO `writings` (`book_id`, `author_id`) VALUES
(496, 1),
(497, 2),
(498, 3),
(499, 4),
(500, 5),
(501, 6),
(502, 7),
(503, 8),
(504, 9),
(505, 10),
(506, 11),
(507, 12),
(508, 13),
(509, 14),
(510, 15),
(511, 16),
(512, 17),
(513, 18),
(514, 19),
(515, 20),
(516, 1),
(518, 3),
(519, 4),
(521, 6),
(522, 7),
(523, 8),
(524, 9),
(527, 12),
(528, 13),
(529, 14),
(530, 15),
(531, 16),
(533, 18),
(534, 19),
(535, 20),
(537, 2),
(538, 3),
(539, 4),
(542, 7),
(544, 9),
(545, 10),
(556, 1),
(557, 2),
(559, 4),
(562, 7),
(565, 10),
(572, 17),
(579, 4),
(585, 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_name_unique` (`name`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authors_name_unique` (`name`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_isbn_code_unique` (`isbn_code`),
  ADD UNIQUE KEY `books_title_unique` (`title`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `classifyings`
--
ALTER TABLE `classifyings`
  ADD PRIMARY KEY (`book_id`,`category_id`),
  ADD KEY `classifyings_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_name_unique` (`name`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_admin_id_confirmed_foreign` (`admin_id_confirmed`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`book_id`),
  ADD KEY `order_details_book_id_foreign` (`book_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publishers_name_unique` (`name`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `writings`
--
ALTER TABLE `writings`
  ADD PRIMARY KEY (`book_id`,`author_id`),
  ADD KEY `writings_author_id_foreign` (`author_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=595;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
