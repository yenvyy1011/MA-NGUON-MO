-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 21, 2022 lúc 04:51 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbsach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `email`, `phone`) VALUES
('minhnhat', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Đỗ Minh Nhất', 'nhatngu120@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `book_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `book_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pub_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `manxb` (`pub_id`,`cat_id`),
  KEY `maloai` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `description`, `price`, `img`, `pub_id`, `cat_id`) VALUES
('gk1', 'Sách Giáo Khoa 10', '<p>Bộ s&aacute;ch gi&aacute;o khoa lớp 10 được sử dụng cho học sinh lớp 10 học theo chương tr&igrave;nh cơ bản kh&ocirc;ng ph&acirc;n ban. Bộ s&aacute;ch gồm 12 m&ocirc;n học được tr&igrave;nh b&agrave;y trong 25 quyển s&aacute;chh</p><p>&nbsp;</p>', 250000, '85e1d7808ef6a57a60e6d3902abf76ee.jpg', 'gd', 'gk'),
('m1', 'Đắc Nhân Tâm', '<p><em>Đắc Nh&acirc;n T&acirc;m &ndash; Dale Carnegie l&agrave; một trong những cuốn s&aacute;ch nổi tiếng v&agrave; b&aacute;n chạy rất mọi thời đại. N&oacute; đ&atilde; thu h&uacute;t được rất nhiều thế hệ của độc giả. Vậy nội dung s&aacute;ch Đắc Nh&acirc;n T&acirc;m n&oacute;i về điều g&igrave;? Tại sao mọi người lại y&ecirc;u th&iacute;ch n&oacute; đến vậy. Tất cả sẽ được bật m&iacute; ngay dưới đ&acirc;y.</em></p>', 500000, '1640861624-1640504109-dac-nhan-tam.jpg', 'hcm', 'tl'),
('m2', 'Tuổi trẻ đáng giá bao nhiêu ?', '<p>Tuổi trẻ đ&aacute;ng gi&aacute; bao nhi&ecirc;u? Bạn c&oacute; thể tự trả lời được c&acirc;u hỏi n&agrave;y kh&ocirc;ng nhỉ?</p><p>Tuổi trẻ được xem l&agrave; lứa tuổi đẹp nhất của một đời người, thế nhưng c&oacute; bao giờ khi tuổi xu&acirc;n qua đi, bạn lại cảm thấy tiếc nuối v&igrave; những g&igrave; m&agrave; m&igrave;nh chưa l&agrave;m được kh&ocirc;ng?&nbsp;</p><p>Với những lời t&acirc;m sự b&igrave;nh dị v&agrave; gần gũi, cuốn s&aacute;ch Tuổi trẻ đ&aacute;ng gi&aacute; bao nhi&ecirc;u của t&aacute;c giả&nbsp;<strong>Rosie Nguyễn&nbsp;</strong>sẽ gi&uacute;p người đọc cảm nhận r&otilde; n&eacute;t nhất về t&acirc;m l&yacute; của những người trẻ trong x&atilde; hội ng&agrave;y nay.</p>', 90000, '1641055109-1.jpg', 'hcm', 'tl'),
('m55', 'Nhà Giả Kim', '<p><strong><em>Đắc Nh&acirc;n T&acirc;m &ndash; Dale Carnegie l&agrave; một trong những cuốn s&aacute;ch nổi tiếng v&agrave; b&aacute;n chạy rất mọi thời đại. N&oacute; đ&atilde; thu h&uacute;t được rất nhiều thế hệ của độc giả. Vậy nội dung s&aacute;ch Đắc Nh&acirc;n T&acirc;m n&oacute;i về điều g&igrave;? Tại sao mọi người lại y&ecirc;u th&iacute;ch n&oacute; đến vậy. Tất cả sẽ được bật m&iacute; ngay dưới đ&acirc;y.</em></strong></p>', 45000, '1640859249-1639639752-download.jpg', 'RdJ', 'tt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
('gk', 'Giáo Khoa'),
('nn', 'Ngoại Ngữ'),
('pl', 'Pháp Luật'),
('td', 'Từ Điển Anh-Việt'),
('tl', 'Tâm Lý'),
('tt', 'Tiểu Thuyết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT 'tiêu đề',
  `img` varchar(50) DEFAULT NULL COMMENT 'path file hình',
  `short_content` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Nội dung ngắn',
  `content` text CHARACTER SET utf8 NOT NULL COMMENT 'Nội dung',
  `hot` int(1) NOT NULL DEFAULT '0' COMMENT 'tin hot=1, thường: != 1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `img`, `short_content`, `content`, `hot`) VALUES
(1, 'Tin Mới Nóng Hỏi', '1640862660-Cuon-sach-640.jpg', '<p>S&aacute;ch rẻ nhất thế giới</p>\r\n', '<p>H&atilde;y mua s&aacute;ch của BookStoreStu bởi v&igrave; rất rẻ v&agrave; bổ &iacute;ch v&agrave; tiện lợi</p>\r\n', 1),
(2, 'Lịch Sử', '1641058471-de-thi-lich-su.jpg', '<p>Lịch Sử L&acirc;u Đời</p>\r\n', '<p><strong>Lịch sử đ&atilde; ra đời mấy chục thế kỷ.</strong></p>\r\n', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order1`
--

DROP TABLE IF EXISTS `order1`;
CREATE TABLE IF NOT EXISTS `order1` (
  `order_id` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `order_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `consignee_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `consignee_add` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `consignee_phone` varchar(12) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT 'Trạng thái:0-3',
  PRIMARY KEY (`order_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `order1`
--

INSERT INTO `order1` (`order_id`, `email`, `order_date`, `consignee_name`, `consignee_add`, `consignee_phone`, `status`) VALUES
('hd144', 'nhatngu120@gmail.com', '2022-01-15 17:48:27', ' Minh Nhất ', 'Minh Nhất', '0377648490', 1),
('hd374', 'nhatngu120@gmail.com', '2022-01-15 17:34:32', ' Minh Nhất ', 'Minh Nhất', '0377648490', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_id` varchar(100) NOT NULL,
  `book_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`,`book_id`),
  KEY `masach` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `book_id`, `quantity`, `price`) VALUES
('hd144', 'm55', 1, 45000),
('hd374', 'm2', 1, 90000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publisher`
--

DROP TABLE IF EXISTS `publisher`;
CREATE TABLE IF NOT EXISTS `publisher` (
  `pub_id` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pub_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `publisher`
--

INSERT INTO `publisher` (`pub_id`, `pub_name`) VALUES
('gd', 'Giáo dục'),
('hcm', 'Tổng Hợp Hồ Chí Minh'),
('hnv', 'Hội Nhà Văn'),
('pn', 'Phụ Nữ Hiện Đại '),
('RdJ', 'Rio de Janeiro'),
('tn', 'Thanh Niên'),
('vh', 'Văn Học'),
('vhtt', 'Văn Hóa Thông Tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `address`, `phone`) VALUES
('abcd1111111@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Nguyễn Tất Thắng', 'Q1', '99999999'),
('nhatngu120@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Minh Nhất', '23/02/ Đường Nào Đó', '0377648490');
('test@gmail.com', '123', 'admin', '23/02/ Đường Nào Đó', '01111111111');


--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`pub_id`) REFERENCES `publisher` (`pub_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order1`
--
ALTER TABLE `order1`
  ADD CONSTRAINT `order1_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order1` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
