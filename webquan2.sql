-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2022 lúc 09:52 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webquan2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`commentID`, `productID`, `userID`, `content`, `dateCreated`) VALUES
(1, 3, 16, 'yummy', '2022-01-07'),
(2, 12, 14, 'ngon', '2022-01-06'),
(28, 1, 1, 'khá ổn', '2022-01-07'),
(29, 1, 1, 'tạm', '2022-01-07'),
(30, 3, 1, 'ab', '2022-01-07'),
(31, 1, 1, '3', '2022-01-07'),
(32, 1, 1, '6', '2022-01-07'),
(33, 1, 1, 'Đấy là cmt món 1', '2022-01-07'),
(34, 2, 1, 'Đây là cmt món 2', '2022-01-07'),
(35, 2, 1, 'a', '2022-01-07'),
(36, 1, 1, 'ok', '2022-01-09'),
(37, 1, 6, 'a', '2022-01-09'),
(38, 8, 6, 'toom cang', '2022-01-09'),
(39, 16, 1, 'mì tôm', '2022-01-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Món Việt', 'Reprehenderit qui a dolor ratione omnis sunt voluptas laborum vero cupiditate ut vitae vitae', 1, NULL, NULL),
(2, 'Món Thái', 'Eos sit quis distinctio iusto consequatur fugiat temporibus modi earum dignissimos est tempora illum iusto et optio aut possimus.', 2, NULL, NULL),
(3, 'Món Trung', 'Hic sit asperiores unde est autem perspiciatis non iure at voluptas sint ipsum illum deleniti ratione est esse at.', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `image_url`) VALUES
(1, 'https://beptueu.vn/hinhanh/tintuc/top-15-hinh-anh-mon-an-ngon-viet-nam-khien-ban-khong-the-roi-mat-1.jpg'),
(2, 'https://anh.24h.com.vn/upload/3-2016/images/2016-09-06/1473149955-thuc-an-nhanh.jpg'),
(3, 'https://cdn.tgdd.vn/Files/2017/01/10/936043/6-cach-ham-nong-thuc-an-ngon-nhu-moi-nau-2.png'),
(4, 'https://sohanews.sohacdn.com/thumb_w/660/160588918557773824/2021/12/12/photo1639304544019-1639304544151580619120.jpeg\r\n'),
(5, 'https://thucthan.com/media/2018/07/beefsteak/cach-lam-beefsteak.jpg'),
(6, 'https://www.vacationtravel.com.vn/CustomFolder/images/amthuc/Tom-Yum-Goong2.jpg'),
(7, 'https://media.cooky.vn/recipe/g3/21397/s/recipe21397-prepare-step7-636402104150346923.jpg'),
(8, 'https://dulichvietnam.com.vn/du-lich-trung-quoc/wp-content/uploads/2020/03/mon-an-trung-quoc-noi-tieng-mien-chua-trung-khanh-1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `shipping_id` int(11) DEFAULT NULL,
  `order_total` double(8,2) NOT NULL,
  `NguoiNhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `shipping_id`, `order_total`, `NguoiNhan`, `SDT`, `DiaChi`, `order_status`, `created_at`) VALUES
(1, 14, NULL, 175000.00, '', '', '', 2, '2022-01-06 13:45:08'),
(2, 14, NULL, 319000.00, '', '', '', 1, '2021-12-07 13:47:35'),
(3, 14, NULL, 659000.00, '', '', '', 1, '2022-01-06 13:48:08'),
(4, 14, NULL, 481000.00, '', '', '', 1, '2022-01-06 13:50:30'),
(5, 14, NULL, 89000.00, '', '', '', 1, '2022-01-06 13:55:07'),
(6, 14, NULL, 88000.00, 'ham', 'jham', 'ham', 1, '2020-12-23 13:55:57'),
(7, 0, NULL, 172000.00, 'b', 'b', 'b', 1, '2022-01-06 13:56:39'),
(8, 0, NULL, 353000.00, '1', '312', '2312', 1, '2022-01-06 20:15:53'),
(9, 0, NULL, 89000.00, 'ád', 'ád', 'ád', 3, '2022-01-06 21:03:05'),
(10, 0, NULL, 0.00, 'asd', 'asd', 'asd', 1, '2022-01-06 21:08:02'),
(11, 0, NULL, 0.00, 'asd', 'asd', 'asd', 3, '2022-01-06 21:12:25'),
(12, 0, NULL, 0.00, 'asd', 'asd', 'asd', 1, '2022-01-06 21:12:29'),
(13, 0, NULL, 0.00, 'asd', 'asd', 'asd', 1, '2022-01-06 21:12:50'),
(14, 0, NULL, 0.00, 'asd', 'asd', 'asd', 2, '2022-01-06 21:15:19'),
(15, 0, NULL, 0.00, 'asd', 'asd', 'asd', 4, '2022-01-06 21:44:45'),
(16, 0, NULL, 163000.00, 'duc nguyen', '123', 'dn', 4, '2022-01-06 21:49:17'),
(17, 0, NULL, 60000.00, '123', '3123', '12', 1, '2022-01-06 21:50:38'),
(18, 0, NULL, 89000.00, '321', '321', '321', 1, '2022-01-07 09:07:12'),
(19, 0, NULL, 287000.00, 'hehe', '123', '123', 1, '2022-01-07 09:11:52'),
(20, 2, NULL, 306000.00, 'user', '0192929292', 'a', 3, '2022-01-07 23:27:36'),
(21, 0, NULL, 89000.00, 'luong van chuong', '84392759052', 'Định Phước, Tam Nghĩa', 2, '2022-01-08 09:38:09'),
(22, 0, NULL, 144000.00, 'nguyen huy', '84392759052', 'TT Cây Dương, Phụng Hiệp', 3, '2022-01-08 09:57:57'),
(23, 0, NULL, 178000.00, 'ai do ai do', '0392759052', 'Khu Phố 2, TT Trảng Bom', 4, '2022-01-08 09:58:42'),
(24, 1, NULL, 90000.00, 'admin', '0192929292', 'admin', 1, '2022-01-12 15:35:00'),
(25, 1, NULL, 196000.00, 'admin', '0192929292', 'admin', 1, '2022-01-12 15:35:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_num` int(255) NOT NULL,
  `product_price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_id`, `product_id`, `product_num`, `product_price`) VALUES
(1, 4, 1, 175000.00),
(2, 4, 1, 175000.00),
(2, 2, 1, 55000.00),
(2, 1, 1, 89000.00),
(3, 4, 1, 175000.00),
(3, 2, 2, 55000.00),
(3, 1, 2, 89000.00),
(3, 3, 1, 196000.00),
(4, 4, 1, 175000.00),
(4, 2, 2, 55000.00),
(4, 1, 1, 89000.00),
(4, 3, 1, 196000.00),
(5, 1, 1, 89000.00),
(6, 13, 2, 44000.00),
(7, 8, 1, 172000.00),
(8, 1, 1, 89000.00),
(8, 13, 6, 44000.00),
(9, 1, 1, 89000.00),
(16, 14, 1, 163000.00),
(17, 10, 1, 60000.00),
(18, 1, 1, 89000.00),
(19, 11, 1, 287000.00),
(20, 2, 2, 55000.00),
(20, 3, 1, 196000.00),
(21, 1, 1, 89000.00),
(22, 1, 1, 89000.00),
(22, 2, 1, 55000.00),
(23, 1, 2, 89000.00),
(24, 1, 1, 90000.00),
(25, 3, 1, 196000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`) VALUES
(1, 3, 'Salad Poke', 'Poke tại Eat More Salad là sự khác biệt hoàn toàn với các phiên bản poke trước đó, với phong cách Hawaii tươi mát, Poke ở EMS có sự kết hợp của thanh cua tẩm mè không chứa dầu mỡ rất tốt cho sức khỏe với lượng Kcal thấp phù hợp cho người có nhu cầu giảm cân. Tinh bột cơm gạo lức hiển nhiên giúp bạn no lâu hơn mà vẫn đảm bảo giảm cân như ý.  Đặc biệt hơn topping ăn kèm mới lạ chưa bao giờ xuất tại EMS như rong biển tươi, bơ sáp, củ cải đỏ giòn rụm hòa quyện cùng tép bưởi thanh mát. Chắc chắn là sự lựa chọn tuyệt vời cho những ngày chào hè nóng bức ở Sài Gòn', 'Qui eos sapiente suscipit incidunt sit assumenda voluptatum sit et delectus voluptas similique recusandae \r\nullam ut id soluta qui sed esse reprehenderit ea repellat eius hic accusamus tempora occaecati ducimus itaque\r\n est nihil doloremque aperiam asperiores et accusamus molestiae aut sint quia ut provident aut aut omnis voluptas \r\n reiciendis aspernatur veniam.', 90000, 'https://images.squarespace-cdn.com/content/v1/53883795e4b016c956b8d243/1551438228969-H0FPV1FO3W5B0QL328AS/chup-anh-thuc-an-1.jpg', 1),
(2, 1, 'Phở', 'Bắt nguồn từ miền Bắc, phở đã trở thành món ăn phổ biến của người Việt thời Đông Dương tới tận bây giờ. Đây là món ăn vô cùng đặc sắc của Việt Nam và hiện nay vẫn phổ biến ở Việt Nam.', 'Đặc điểm chung của phở đó là một món ăn làm từ sợi phở, có nước súp, ăn cùng thịt bò hoặc gà cùng các gia vị như hành..', 55000, 'https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-1.jpg', 1),
(3, 1, 'Gà nướng KonPlông', 'Gà nướng vốn là món ăn nhắc đến đã cảm thấy vô cùng hấp dẫn. Thế nhưng gà nướng Kon Plông còn được coi là món ăn đặc sản hàng đầu mê hoặc của vùng núi rừng Tây Nguyên..', 'Đây là loại gà được nuôi ở trong bản. Để làm món Gà nướng KonPlông, gà được làm sạch sau đó mổ moi (ở phao câu) rồi dùng cây xiên từ hậu môn lên đầu, cho sả (đập dập), lá chanh vào trong bụng, khâu lại. Sau đó quết hành phi, xì dầu bên ngoài con gà rồi nướng trên bếp than.', 196000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(4, 2, 'Pad Thai (Phở xào hay Bún xào kiểu Thái)\r\n', 'Món ăn này có thành phần chính là sợi mì gạo tươi cùng tôm, trứng, giá và hẹ. Tất cả được hòa quyện bằng một thứ nước sốt chua ngọt cực “thần thánh” khiến bao kẻ ăn một lần mà cứ thèm thuồng mãi!\r\n', 'Có lẽ món ngon Thái Lan được khách du lịch biết tới nhiều nhất chính là Pad Thai.\r\n', 175000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(5, 2, 'Tom Yum Goong (Súp tôm chua cay)\r\n', 'Nếu để chọn một hương vị đặc trưng nhất cho nền ẩm thực Thái Lan, đó có lẽ là Tom Yum Goong – món súp tôm chua cay dậy vị.\r\n', 'Để làm nên một bát Tom Yum Goong hoàn hảo, người đầu bếp cần chuẩn bị tới gần một chục nguyên liệu khác nhau, như tôm, nước cốt dừa, lá ngò, ớt, xả, gừng, chanh,… Vị cay nồng, chua nhẹ, ngọt dịu – tất cả hòa quyện tạo nên một hương vị không thể nào độc đáo và hấp dẫn hơn dành cho món ngon Thái Lan này.\r\n', 439000, 'https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-1.jpg', 1),
(6, 2, 'Khao niao mamuang (Xôi xoài)\r\n', 'Thái Lan nổi tiếng với nhiều món tráng miệng làm từ các loại hoa quả trái cây nhiệt đới nhưng có lẽ nổi tiếng nhất trong số đó phải kể đến xôi xoài.\r\n.', 'Sự kết hợp tưởng chừng như rất đơn giản của xoài chín, xôi nếp dẻo cùng nước cốt dừa lại đem đến một sự hòa quyện kỳ diệu. Bạn có thể dễ dàng tìm thấy món ăn này ở các nhà hàng và quầy ăn vỉa hè trên khắp các đường phố Thái Lan. Xôi xoài chắc chắn sẽ là một món tráng miệng hay món ăn vặt xế chiều hoàn hảo đấy!\r\n', 40000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(7, 3, 'Vịt quay Bắc Kinh', 'Vịt quay Bắc Kinh thể hiện được những giá trị chính trong ẩm thực của người Trung Hoa là ngon, đẹp, bổ dưỡng. Theo phương pháp truyền thống, vịt sử dụng phải là vịt lông trắng nuôi trong môi trường tự nhiên khoảng 45 ngày.', 'Cách thưởng thức vịt quay Bắc Kinh theo người Trung Hoa là lấy một miếng thịt vịt kèm với lớp da bóng giòn đặt lên bánh bạc bỉnh cùng với hành và dưa chuột cuộn chặt lại rồi chấm với xốt. Xốt truyền thống được làm từ đậu nành lên men nghiền ra trộn với tỏi hoặc xốt theo cách hiện đại bao gồm tỏi ghiền, dầu mè và nước tương xì dầu.', 282000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(8, 3, 'Tôm càng cay', 'Ở nước ta, tôm hùm đất có vẻ khó kiếm để thưởng thức, nhưng đến với Trung Quốc, bạn có thể gọi món này ở bất cứ đâu.', 'Tôm hùm đất nấu sền sệt với nhiều gia vị khác nhau. Dùng tay để ăn cho tiện và thêm một cốc nước ngọt hay bia thì sảng khoái bất ngờ..', 172000, 'https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-1.jpg', 1),
(9, 3, 'Phật nhảy tường', 'Đây là một trong những món ngon danh tiếng trong danh sách ẩm thực Phúc Kiến với lịch sử tồn tại hơn 200 năm.', 'Quy trình chuẩn bị món Phật nhảy tường rất khó khăn và tốn thời gian bởi nó bao gồm tới 18 nguyên liệu chính, chủ yếu là sơn hào hải vị như hải sâm, vây cá mập, bào ngư, nhân sâm, gân hươu, sò điệp, nấm… Mỗi loại đều được hấp riêng trong một hũ sau đó cho chung vào một thố bằng đất sét nhỏ miệng, thêm rượu Thiệu Hưng để dậy mùi thơm.', 197000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(10, 1, 'Bánh xèo', 'Những chiếc bánh dẹt chiên giòn kẹp nhân tôm, thịt, rau giá, trứng... cuộn cùng bánh tráng và chấm mắm chua ngọt là bánh xèo (tiếng xèo xèo phát ra khi chiên bánh).', 'Là món ăn chơi, bánh xèo được rất nhiều người Việt và cả du khách nước ngoài ưa thích. Tuy có nguồn gốc ở miền Trung và miền Nam, bánh xèo hiện phổ biến khắp nơi và rất dễ tìm ra hàng bánh ở cả ba miền.', 60000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(11, 2, 'Som Tam', 'Món ngon Thái Lan tổng hợp đầy đủ tất cả các hương vị đặc trưng của xứ sở chùa Vàng đó chính là món som tam. ', 'Som Tam có nguyên liệu chính là đu đủ xanh bào sợi. Khi thưởng thức, bạn sẽ cảm nhận được vị chua của chanh, vị mặn của nước mắm , ruốc khô, ba khía, vị cay của ớt khô và vịt ngọt của đường thốt nốt, thêm một chút béo của đậu phộng… rất ngon và đầy đủ hương vị luôn! ', 287000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(12, 1, 'Bún chả', 'Bún chả, đặc biệt ở Hà Nội, là một món đặc sản mà du khách có thể thấy bán ở khắp các ngõ phố thủ đô', 'Thịt làm chả là thịt xiên, hoặc băm nhuyễn viên miếng để nướng trên bếp than, bún ăn kèm là bún gạo tươi và bún chả không thể thiếu nước dùng đã pha chế thêm đĩa rau sống. Có thể dùng để ăn bữa chính như bữa trưa, bún chả được nhiều người ví giống thịt viên hoặc hamburger nhưng Rough Guides nhận xét, bún chả là sự kết hợp hương vị khác hẳn.', 115000, 'https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-1.jpg', 1),
(13, 3, 'Mì trường thọ', 'Một bát mì trường thọ nhìn thì có vẻ rất đơn giản nhưng để làm được một bát mì ngon lại không phải là điều đơn giản chút nào', 'Thời tiết sẽ quyết định rất nhiều đến hương vị thơm ngon của những sợi mì. Nếu trời nắng đẹp thì mì sẽ dai và ngon hơn nhiều. Phần nước dùng với mì cũng vô cùng đặc biệt. Khi ăn mì trường thọ người ta thường ăn cùng với thịt vịt quay, thịt xá xíu hoặc tôm sú.', 44000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(14, 2, ' Yentafo mì hồng', 'Món ngon Thái Lan khá phổ biến được du khách ưa chuộng đó chính là Yentafo mì hồng. ', 'Tafo hoặc tafu theo tiếng Hoa có nghĩa là đậu hủ. Còn màu hồng của mì được chế biến từ một loại chao màu đỏ, xay cùng với tỏi, ớt, tương ớt và các loại gia vị khác, tạo thành một màu hồng rất “dễ thương”, sau đó trộn chung với mì nên được gọi là “mì hồng”.', 163000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(15, 3, 'Cơm chiên Dương Châu\r\n', 'Cơm chiên Dương Châu bắt nguồn là một món ăn gia đình của Trung Quốc, được chế biến từ cơm nguội và các thực phẩm còn thừa lại ở bếp và sau mỗi bữa ăn.', 'Cơm chiên Dương Châu bắt nguồn là một món ăn gia đình của Trung Quốc, được chế biến từ cơm nguội và các thực phẩm còn thừa lại ở bếp và sau mỗi bữa ăn', 82000, 'https://media.cooky.vn/images/blog-2016/nghe-thuat-trinh-bay-va-chup-anh-mon-an%208.jpg', 1),
(16, 1, 'Mì tôm', 'mì tôm chua cay', 'chua chua cay cay', 20000, 'https://vinmec-prod.s3.amazonaws.com/images/20201228_032224_820684_mitoms.max-800x800.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`, `role_detail`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_subimageproduct`
--

CREATE TABLE `tbl_subimageproduct` (
  `idImg` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_subimageproduct`
--

INSERT INTO `tbl_subimageproduct` (`idImg`, `idProduct`, `URL`) VALUES
(1, 16, 'https://cdn.tgdd.vn/Files/2017/02/28/955496/an-mi-tom-co-tot-khong-1_730x471.jpg'),
(2, 16, 'https://s.meta.com.vn/img/thumb.ashx/Data/Image/2020/03/30/thung-30-goi-mi-tom-chua-cay-hao-hao-t2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) DEFAULT 2,
  `user_sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `username`, `user_verified_at`, `password`, `role_id`, `user_sex`, `user_tel`, `user_address`, `user_email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, 'admin', 1, 'Nam', '0192929292', 'admin', 'admin@email.com', NULL, NULL, NULL),
(2, 'user', 'user', NULL, 'user', 2, 'Nữ', '0192929292', 'a', 'user@email.com', NULL, NULL, NULL),
(3, 'Furman Stark', 'sydnie70', NULL, '1111', 1, 'Nữ', '+1602610290978', '1882 Herbert Overpass\nPort Fritz, NE 32977', 'ford.baumbach@purdy.com', NULL, NULL, NULL),
(4, 'Justen Cartwright IV', 'bbalistreri', NULL, '1111', 2, 'Nữ', '+9880898533314', '214 Breitenberg Rest Apt. 720\nFidelfurt, WA 99405', 'mclaughlin.cooper@hotmail.com', NULL, NULL, NULL),
(5, 'Maryse Hickle', 'pfeffer.arthur', NULL, '1111', 1, 'Nữ', '+4250109221130', '172 Rodriguez Mountains\nKubton, OK 25706-7568', 'savanah.botsford@gmail.com', NULL, NULL, NULL),
(6, 'Mr. Tremaine Borer DDS', 'alexandria96', NULL, '1111', 2, 'Nam', '+8303778549381', '7846 Vena Station Suite 663\nAnnettafort, AR 35680-1576', 'drake50@cassin.info', NULL, NULL, NULL),
(7, 'Mr. Gustave Wilderman', 'fromaguera', NULL, '1111', 2, 'Nam', '+6134647088802', '63193 Jadon Cliffs\nWest Elnoraland, MN 23853', 'fferry@grady.biz', NULL, NULL, NULL),
(8, 'Monty Jones', 'krajcik.sallie', NULL, '1111', 2, 'Nữ', '+5642602709245', '95672 Ramiro Crossroad Suite 714\nOraborough, OK 30780-7479', 'reichert.kayden@hotmail.com', NULL, NULL, NULL),
(9, 'Prof. Joany Ortiz II', 'kaelyn82', NULL, '1111', 2, 'Nam', '+5207301420510', '588 Willms Square\nPort Della, VA 32777-1099', 'bethel.funk@yahoo.com', NULL, NULL, NULL),
(10, 'Magdalena Graham', 'megane.keebler', NULL, '1111', 2, 'Nam', '+1667477350946', '54570 Cruickshank Key\nDonnyton, PA 88440-3232', 'gregory.jast@gmail.com', NULL, NULL, NULL),
(11, 'Prof. Trace Grant', 'fdonnelly', NULL, '1111', 2, 'Nữ', '+5351353486609', '1056 Lakin Lights\nSpencerhaven, RI 99961-9182', 'fahey.leonora@rempel.com', NULL, NULL, NULL),
(12, 'Ms. Lexi White III', 'marilie.bergnaum', NULL, '1111', 1, 'Nam', '+3947507869608', '3442 Reynolds Estate Apt. 290\nWest Josephfort, MD 86407', 'graciela28@donnelly.net', NULL, NULL, NULL),
(13, 'Lia Olson IV', 'qkuvalis', NULL, '1111', 1, 'Nam', '+9750828374585', '829 Nelle Burgs Apt. 398\nNew Kaden, NH 26135-0287', 'ihayes@ferry.com', NULL, NULL, NULL),
(14, 'Katheryn Weimann', 'webster.kautzer', NULL, '1111', 2, 'Nam', '+5839584527846', '47684 Bednar Gateway\nAnnamarietown, LA 92612-1200', 'squigley@satterfield.com', NULL, NULL, NULL),
(15, 'Mac Gorczany', 'heath14', NULL, '1111', 2, 'Nam', '+7220436652301', '226 Lynch Stream Apt. 673\nDanechester, IA 70608-6223', 'lturner@hotmail.com', NULL, NULL, NULL),
(16, 'Alize Lemke DDS', 'hilpert.will', NULL, '1111', 2, 'Nữ', '+8899229557318', '33341 Freeda Gardens Suite 323\nFunkfort, AZ 39598', 'ifadel@metz.biz', NULL, NULL, NULL),
(17, 'Dr. Kristofer Bruen', 'luigi12', NULL, '1111', 2, 'Nữ', '+2870457896714', '112 Juliet Hill\nJosephville, HI 43939', 'julius.green@hotmail.com', NULL, NULL, NULL),
(18, 'Dayna Runolfsdottir', 'cstamm', NULL, '1111', 1, 'Nữ', '+4678815794243', '866 Pacocha Island Suite 650\nHeidenreichchester, IA 05050', 'murl.hickle@will.com', NULL, NULL, NULL),
(19, 'Madge Botsford IV', 'sam.glover', NULL, '1111', 1, 'Nữ', '+6039441465839', '75661 Kuphal Ranch Apt. 702\nLake Wendellmouth, OH 36112', 'ashley.kovacek@cremin.net', NULL, NULL, NULL),
(20, 'Mr. Myles Carroll IV', 'jarrell87', NULL, '1111', 1, 'Nam', '+7910456787633', '199 Mitchell Parkway\nJevonfort, WI 34368', 'prosacco.fanny@herzog.com', NULL, NULL, NULL),
(21, 'Arvid Hilpert', 'horacio37', NULL, '1111', 2, 'Nam', '+1123659606152', '57867 Vandervort Drives\nDeannaland, FL 53891', 'hhirthe@prohaska.com', NULL, NULL, NULL),
(22, 'Katelyn Pollich', 'hmorar', NULL, '1111', 2, 'Nữ', '+1477128030583', '317 Kaylin Shore Apt. 648\nEast Bud, FL 74531-8427', 'funk.karine@sipes.com', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `tbl_subimageproduct`
--
ALTER TABLE `tbl_subimageproduct`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `idProduct` (`idProduct`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_subimageproduct`
--
ALTER TABLE `tbl_subimageproduct`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`user_id`);

--
-- Các ràng buộc cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`);

--
-- Các ràng buộc cho bảng `tbl_subimageproduct`
--
ALTER TABLE `tbl_subimageproduct`
  ADD CONSTRAINT `tbl_subimageproduct_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `tbl_product` (`product_id`);

--
-- Các ràng buộc cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
