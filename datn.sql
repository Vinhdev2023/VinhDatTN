-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 18, 2025 lúc 09:02 AM
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
(13, 'Dale Carnegie', '2025-06-06 08:46:51', '2025-06-06 08:46:51'),
(14, 'Napoleon Hill', '2025-06-06 08:50:35', '2025-06-06 08:51:26'),
(15, 'Jack Canfield', '2025-06-06 08:54:04', '2025-06-06 08:54:04'),
(16, 'David J. Lieberman', '2025-06-06 09:01:32', '2025-06-06 09:01:32'),
(17, 'George Samuel Clason', '2025-06-06 09:04:43', '2025-06-06 09:04:43'),
(18, 'Stephen R. Covey', '2025-06-06 09:08:19', '2025-06-06 09:08:19'),
(19, 'Og Mandino', '2025-06-06 09:11:52', '2025-06-06 09:11:52'),
(20, 'Fujiko Fujio', '2025-06-06 09:15:47', '2025-06-06 09:15:47'),
(21, 'Toriyama Akira', '2025-06-06 09:20:37', '2025-06-06 09:20:37'),
(22, 'Kusakabe Masatoshi', '2025-06-06 09:23:31', '2025-06-06 09:23:31'),
(23, 'Gotōge Koyoharu', '2025-06-06 09:26:36', '2025-06-06 09:26:36');

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
(9, '3123dasd', 'Đắc Nhân Tâm', 'dacnhantam.jpg.webp', 4, 50000, 'Đắc nhân tâm của Dale Carnegie là quyển sách của mọi thời đại và một hiện tượng đáng kinh ngạc trong ngành xuất bản Hoa Kỳ. Trong suốt nhiều thập kỷ tiếp theo và cho đến tận bây giờ, tác phẩm này vẫn chiếm vị trí số một trong danh mục sách bán chạy nhất và trở thành một sự kiện có một không hai trong lịch sử ngành xuất bản thế giới và được đánh giá là một quyển sách có tầm ảnh hưởng nhất mọi thời đại.', 14, NULL, '2025-06-06 08:49:17', '2025-06-06 08:49:17'),
(10, '110da9df', 'Thinking, Growing Rich', '0612ebe2b358740e999d6e1ebbe6ccde.jpg', 10, 70000, 'Cách Nghĩ Để Thành Công mang tới cho bạn triết lý thành đạt, đồng thời cung cấp phương pháp để bạn lên kế hoạch chi tiết để đạt được thành công đó. Không chỉ có lý thuyết suông, tác phẩm này được dẫn chứng từ những trường hợp thực tế, ví dụ như Edison - nhà phát minh lỗi lạc, Henry Ford - ông trùm của nền công nghiệp xe hơi,... Napoleon Hill, tác giả của Cách Nghĩ Để Thành Công, đã dành ra 30 năm để phỏng vấn hơn 500 người thành công trong nhiều lĩnh vực khác nhau, từ đó đúc kết lại những triết lý và viết nên tác phẩm này.', 15, NULL, '2025-06-06 08:52:14', '2025-06-06 08:52:14'),
(11, 'da813287419', 'Hạt giống tâm hồn', 'tải xuống.jpg', 5, 60000, 'Bộ sách hạt giống tâm hồn là bộ sách được tổng hợp các câu chuyện, bức tranh đầy ý nghĩa về cuộc sống của nhiều tác giả khác nhau. Đó là những câu chuyện về sự thành công, tấm lòng cao đẹp giữa con người với con người. Bộ sách giúp nuôi dưỡng cho bạn có một tâm hồn đẹp, trong sáng, luôn vui tươi và lạc quan.', 16, NULL, '2025-06-06 08:56:03', '2025-06-06 08:56:03'),
(12, '9319a0d9sa', 'Quẳng gánh lo đi và vui sống', 'tải xuống.webp', 8, 55000, 'Quẳng Gánh Lo Đi Và Vui Sống là tác phẩm nổi tiếng tiếp theo của Dale Carnegie. Cuốn sách này phân tích và giải đáp những nỗi buồn, lo lắng diễn ra hàng ngày trong cuộc sống của mỗi người. Để từ đó tác giả xây dựng nên thái độ sống tích cực, hạnh phúc và từ bỏ thói quen lo lắng. Tác phẩm được chia thành 6 phần, có thể xem mỗi phần là 1 lời khuyên hữu ích cho những ai đang gặp rắc rối và không biết phải làm thế nào để vượt qua vấn đề đó. Đây là quyển sách mà ai cũng nên đọc 1 lần trong đời, để giúp bản thân luôn vui vẻ và tích cực để vượt qua khó khăn.', 14, NULL, '2025-06-06 08:59:05', '2025-06-06 08:59:05'),
(13, '09285798ashd1241', 'Đọc Vị Bất Kỳ Ai', 'shopping (2).webp', 7, 72000, 'Đọc Vị Bất Kỳ Ai là một quyển cẩm nang dạy bạn cách thâm nhập vào tâm trí của người khác, để suy đoán được họ đang nghĩ gì. Cuốn sách có nội dung bao gồm 2 phần chính và được chia thành 15 chương. Đọc Vị Bất Kỳ Ai sẽ là sự lựa chọn phù hợp cho những ai đang tìm kiếm một quyển sách để cải thiện và phát triển kỹ năng giao tiếp.', 14, NULL, '2025-06-06 09:03:06', '2025-06-06 09:13:34'),
(14, '91837981g87ya', 'Người giàu có nhất thành Babylon', 'shopping.webp', 15, 82000, 'Một cuốn sách đề cập đến các thành tựu đạt được lớn lao của các cá nhân sống trong thành Babylon cổ đại. Những nguyên lý cơ bản về tài chính trong sách đến giờ con người hiện đại vẫn đã và đang kế thừa và vận dụng thành công. Cuốn sách sẽ giúp bạn hiểu được về vấn đề tài chính, các phương pháp làm giàu, giúp đánh giá được giá trị đồng tiền và định hướng cách thực hành theo nguyên lý tài chính.', 16, NULL, '2025-06-06 09:07:05', '2025-06-06 09:07:05'),
(15, '1sda891d', '7 Thói Quen Để Thành Đạt', 'shopping (1).webp', 16, 100000, '7 Thói Quen Để Thành Đạt cung cấp cho người đọc những thói quen tạo nên sự khác biệt của người thành công. Steven Covey tin rằng, một người thành công không chỉ cần kỹ năng và kiến thức, mà yếu tố quyết định chính là những thói quen và tính cách của họ. Cuốn sách này sẽ giúp bạn hình thành những thói quen sinh hoạt hợp lý, để từ đó giúp người đọc sống tốt hơn, có ích hơn.', 18, NULL, '2025-06-06 09:10:13', '2025-06-06 09:10:13'),
(16, '8a7sc91d', 'Người Bán Hàng Vĩ Đại Nhất Thế Giới', 'tải xuống (1).jpg', 14, 124000, 'Người Bán Hàng Vĩ Đại Nhất Thế Giới là câu chuyện về hành trình của Hafid, một cậu bé chăn lạc đà nghèo ở Jerusalem cổ đại. Người thanh niên đã học được những bí quyết từ một thương nhân giàu có và từ đó trở thành một người bán hàng vĩ đại. Cuốn sách này không chỉ dạy bạn cách bán hàng, mà nó còn dạy bạn cách làm người, giúp bạn thành công trong lĩnh vực của mình. Tính đến hiện tại, Người Bán Hàng Vĩ Đại Nhất Thế Giới được chuyển ngữ ra 25 ngôn ngữ và đã bán ra hơn 50 triệu bản trên khắp thế giới, là một trong những cuốn sách hay nên đọc trong đời.', 16, NULL, '2025-06-06 09:12:49', '2025-06-06 09:12:49'),
(17, 'd8d9a91d', 'Doraemon', 'tải xuống.png', 30, 25000, 'Doraemon là một chú mèo máy được Nobi Sewashi (Nobi Nobito), cháu năm đời của Nobi Nobita, gửi từ thế kỷ 22 về quá khứ của ông mình để giúp đỡ Nobita trở nên tiến bộ và giàu có, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó công ty phá sản, thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần. Nội dung series kể về cuộc đời của cậu bé Nobita và chú mèo máy Doraemon từ tương lai đến để giúp cuộc sống của cậu bé trở nên tốt hơn.', 20, NULL, '2025-06-06 09:18:39', '2025-06-06 09:18:39'),
(18, '91dausfi9', 'Dragon Ball – 7 viên ngọc rồng', 'tải xuống (2).jpg', 20, 30000, 'Cốt truyện Dragon Ball xoay quanh cuộc phiêu lưu của nhân vật chính Son Goku – một cậu bé có sức mạnh siêu nhiên và khả năng điều khiển năng lượng. Goku cùng với các bạn bè của mình cố gắng tìm kiếm các viên Ngọc Rồng để có thể gọi ra Shenron – con rồng Thần Thánh – để thực hiện một điều ước.', 20, NULL, '2025-06-06 09:21:55', '2025-06-06 09:21:55'),
(19, '8sa9e81', 'Naruto', 'tải xuống (3).jpg', 25, 29000, 'Nhân vật chính là Uzumaki Naruto, một thiếu niên ồn ào, hiếu động, một ninja luôn muốn tìm cách khẳng định mình để được mọi người công nhận, rất muốn trở thành Hokage (Hỏa Ảnh) - người lãnh đạo ninja cả làng, được tất cả mọi người kính trọng.', 21, NULL, '2025-06-06 09:25:20', '2025-06-06 09:25:20'),
(20, 'sa8ca71dh1', 'Kimetsu no Yaiba / Demon Slayer', 'tải xuống (4).jpg', 28, 40000, 'Tanjiro mất gia đình vì quỷ, em gái Nezuko biến thành quỷ nhưng vẫn giữ tình người. Anh gia nhập Sát Quỷ Đội để trả thù cho gia đình, tìm cách biến Nezuko trở lại thành người và tiêu diệt tổ quỷ Kibutsuji Muzan. Cùng đồng đội (Zenitsu, Inosuke) và Sát Quỷ Đội, Tanjiro trải qua những trận chiến sinh tử với Thập Nhị Quỷ Nguyệt và Muzan. Dù chịu tổn thất nặng nề (hầu hết Trụ cột hy sinh), họ tiêu diệt được Muzan và tận diệt loài quỷ. Tanjiro bị Muzan biến thành quỷ nhưng được cứu, trở lại làm người cùng Nezuko. Sát Quỷ Đội giải tán sau chiến thắng.', 20, NULL, '2025-06-06 09:31:50', '2025-06-06 09:31:50');

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
(9, 'self-help', '2025-06-06 08:47:50', '2025-06-06 08:47:50'),
(10, 'tự học, kinh doanh, và kỹ năng làm việc', '2025-06-06 08:51:04', '2025-06-06 08:51:04'),
(11, 'Sách tự lực', '2025-06-06 08:54:39', '2025-06-06 08:54:39'),
(12, 'quản lý tài chính cá nhân, kinh doanh và làm giàu', '2025-06-06 09:05:17', '2025-06-06 09:05:17'),
(13, 'kinh doanh', '2025-06-06 09:09:10', '2025-06-06 09:09:10'),
(14, 'Hài kịch, khoa học viễn tưởng', '2025-06-06 09:16:00', '2025-06-06 09:16:00'),
(15, 'Võ thuật, Khoa học viễn tưởng', '2025-06-06 09:20:50', '2025-06-06 09:20:50'),
(16, 'Hành động, Võ thuật, Nhẫn giả, Phiêu lưu, Hài hước', '2025-06-06 09:24:04', '2025-06-06 09:24:04'),
(17, 'Shounen Hành Động - Siêu Nhiên - Giả Tưởng', '2025-06-06 09:29:06', '2025-06-06 09:29:06');

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
(9, 9),
(10, 10),
(11, 11),
(12, 11),
(13, 11),
(14, 12),
(15, 9),
(15, 13),
(16, 11),
(17, 14),
(18, 15),
(19, 15),
(19, 16),
(20, 17);

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

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `admin_id_confirmed`, `customer_id`, `customer_name`, `customer_phone`, `ship_to_address`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 3, 'Wiley Ondricka', '(401) 547-8317', '70499 Antwon Roads Suite 941\nD\'angeloberg, WA 99017-9154', 978000, 'PENDING', '2025-05-19 09:15:24', '2025-05-19 09:15:25'),
(2, 4, 5, 'Bessie Kautzer', '+13512635577', '93618 Valentin Lock\nHarberstad, OK 40966', 4293000, 'CANCELED', '2025-05-19 09:15:24', '2025-05-19 09:15:25'),
(3, 9, 8, 'Nelda Powlowski', '551-994-7882', '60970 Nicklaus Meadows Suite 093\nWest Furman, MT 76793-9080', 3816000, 'CANCELED', '2025-05-19 09:15:24', '2025-05-19 09:15:25'),
(4, NULL, 12, 'Vinhmoi', '01929149942', 'HaNoi', 292000, 'PENDING', '2025-06-10 07:53:44', '2025-06-10 07:53:44'),
(5, NULL, 12, 'Vinhmoi', '01929149942', 'HaNoi', 99000, 'CANCELED', '2025-06-10 08:32:23', '2025-06-10 08:32:40'),
(6, NULL, 12, 'Vinhmoi', '01929149942', 'HaNoi', 29000, 'PENDING', '2025-06-10 23:45:47', '2025-06-10 23:45:47'),
(7, NULL, 12, 'Vinhmoi', '01929149942', 'HaNoi', 40000, 'PENDING', '2025-06-10 23:46:15', '2025-06-10 23:46:15'),
(8, NULL, 12, 'Vinhmoi999', '01929149942766767', 'HaNoiuhuhu', 94000, 'PENDING', '2025-06-11 00:56:37', '2025-06-11 00:56:37'),
(9, NULL, 12, 'Vinhmoi999', '01929149942766767', 'HaNoiuhuhu', 1000000, 'CANCELED', '2025-06-16 03:24:06', '2025-06-16 03:25:08'),
(10, NULL, 12, 'Vinhmoi999', '01929149942766767', 'HaNoiuhuhu', 1000000, 'PENDING', '2025-06-16 08:44:43', '2025-06-16 08:44:43');

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

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_id`, `book_id`, `quantity`, `price`) VALUES
(4, 10, 1, 70000),
(4, 14, 1, 82000),
(4, 15, 1, 100000),
(4, 20, 1, 40000),
(5, 18, 1, 30000),
(5, 19, 1, 29000),
(5, 20, 1, 40000),
(6, 19, 1, 29000),
(7, 20, 1, 40000),
(8, 17, 1, 25000),
(8, 19, 1, 29000),
(8, 20, 1, 40000),
(9, 20, 25, 40000),
(10, 20, 25, 40000);

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
(14, 'Simon and Schuster', '2025-06-06 08:46:22', '2025-06-06 08:46:22'),
(15, 'NXB Trẻ', '2025-06-06 08:50:17', '2025-06-06 08:50:17'),
(16, 'Nhà xuất bản Tổng hợp TPHCM', '2025-06-06 08:53:50', '2025-06-06 08:53:50'),
(17, 'Nhà xuất bản Lao Động', '2025-06-06 09:01:16', '2025-06-06 09:01:16'),
(18, 'Franklin Covey', '2025-06-06 09:08:05', '2025-06-06 09:08:05'),
(19, 'Bantam', '2025-06-06 09:11:38', '2025-06-06 09:11:38'),
(20, 'Nhà xuất bản Kim Đồng', '2025-06-06 09:15:29', '2025-06-06 09:15:29'),
(21, 'Shueisha', '2025-06-06 09:23:18', '2025-06-06 09:23:18');

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
('DNDggAvKurnsgeFYzP1oaMDkr08xLGWFP0vqBbzl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ1lXMW1ZZzZZVXczTUdPVERIZWh6Y3ZqUEJ0cDJ1cEFDZE5uT1RTayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTM6ImxvZ2luX2FkbWluc181OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1750229194),
('R1mhqhqq4IgUUR07qmhuFwgCKtqpMIKa0dORej81', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVTVCNFZ0OVdualNOeWlDNWlVUE04bmpqRnN2TXRJZ1hWVHBnejI3QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTM6ImxvZ2luX2FkbWluc181OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo1NjoibG9naW5fY3VzdG9tZXJzXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTI7fQ==', 1750089722);

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
(9, 13),
(10, 14),
(11, 15),
(12, 13),
(13, 16),
(14, 17),
(15, 18),
(16, 19),
(17, 20),
(18, 21),
(19, 22),
(20, 23);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
