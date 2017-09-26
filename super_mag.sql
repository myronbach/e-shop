-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 09:26 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super_mag`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `content` text NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `preview` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `content`, `author_id`, `date`, `preview`, `status`) VALUES
(1, 'Cras ultricies ligula sed magna dictum porta.', 'news-one', 'Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus.\n\nQuisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.', '1', '2016-07-07 21:13:52', '/template/images/blog/blog-one.jpg', 1),
(2, 'Cras ultricies ligula sed magna dictum porta.', 'news-two', 'Lorem ipsum dolor sit amet, veri illum sed ea. Quo laoreet fierent invenire te, essent electram constituto usu no. Quem eirmod at ius, putant nonumes democritum at vix, elit delenit ut est. Eos utinam dolores quaerendum ei.\r\n\r\nEi partem noster verterem sed. Quo eu omnes homero aperiri, ad pro antiopam volutpat, eius nemore ei cum. An sale legere semper qui, ut verear consulatu temporibus pri. An pro graece iisque facilisis, an vel falli dicam appellantur. Sanctus interpretaris et eum. Liber mollis oporteat an duo, virtute diceret similique eu cum.\r\n\r\nNumquam principes ad cum, vivendo volutpat splendide eos ut. Debet nominati definitiones sit ex, purto tempor molestiae ei pro, iriure veritus hendrerit cum ne. Per nonumes consetetur ne, mea et aeque viris numquam. His in etiam tritani diceret, vel ei dissentiet dissentiunt.\r\n\r\nIus ut alienum facilisis patrioque, in evertitur sadipscing vim. Vocent volutpat ea ius, regione convenire salutatus mea ne, autem moderatius his at. Imperdiet conceptam expetendis ut eos. Dolor numquam quo ea, mel adhuc saperet delectus at, est ex possim meliore. Enim nominati te has, te quod fugit quaeque eos. Ut tempor consectetuer vim, in vis dolorum definitionem.\r\n\r\nHis ut augue detracto, aperiri saperet incorrupte et eos. Pro debet aperiri ei. Eam brute vocibus at. Ius omittam verterem ad, ei vis maiorum officiis voluptatum, ei omnesque reprehendunt eos. Vel autem tantas virtute no, elit facilisi oportere ei sea.', '2', '2016-07-07 21:18:53', '/template/images/blog/blog-two.jpg', 1),
(3, ' Sed at delenit feugait splendide, lorem epicurei reformidans in pri.', 'news-three', 'Te qui recusabo constituam, duis adhuc utroque vel ad, an vim augue noluisse. Ullum dicam affert pri et, est elitr putant fuisset eu. Sed at delenit feugait splendide, lorem epicurei reformidans in pri. Odio modus singulis vim id, his nulla regione te. Reque inimicus sit an, vix iusto fierent sadipscing et, in nihil libris propriae pri.\r\n\r\nAccusata erroribus his ne, has odio vivendo ex. In eum latine expetenda, usu at inermis conclusionemque, qui dolorem explicari et. Ocurreret urbanitas eam in, an duo suas persecuti. At qui qualisque corrumpit quaerendum, copiosae volutpat an usu. Ad viderer persius indoctum vel, audiam deseruisse delicatissimi pro an. Iusto veniam integre ex vix, duo minimum sensibus dissentias cu, error tollit at sit.\r\n\r\nId animal eruditi delicata has, eu vis quodsi bonorum. Ius ei ridens consequuntur. Eum ad iisque salutandi, diceret appareat in sit, odio placerat iudicabit cu quo. Natum eripuit eum eu. Te his inani malorum concludaturque, liber numquam eam ea.\r\n\r\nAt mea erroribus mnesarchum, dico salutatus no pri. Pri docendi quaestio persequeris in, nobis putant explicari an ius, id vis magna bonorum. Nam natum denique torquatos ei, ea dictas appareat pri. Harum vocent partiendo ius no, usu philosophia instructior et.\r\n\r\nAt duo melius eripuit ullamcorper, vix libris partiendo constituto eu, probo vitae euripidis eu mei. Suas mnesarchum pro at. Id ornatus suavitate mediocritatem mel. Id tale gloriatur consequuntur pro, eum torquatos inciderint ne.\r\n\r\nDebet interesset mea in, pro quot libris interesset te. Facer viris tempor in nec, at suas bonorum reprimique quo. Te autem oblique sea, utinam labitur appetere ne mea. Porro maiorum concludaturque vim ad, ut mel argumentum repudiandae, has ut vocent placerat. Est ne dico audiam consetetur, clita gubergren persequeris at quo, sea tale nulla tritani ea.\r\n\r\nNe mea singulis mnesarchum quaerendum. Lucilius consequat torquatos usu ad, usu idque maiorum ex. Ut dicunt gloriatur ius, vim in hinc deterruisset. Quo vero nemore omittantur cu, ut nec mundi graecis. Fabellas menandri inimicus ius in.\r\n\r\nId etiam ludus theophrastus quo. An dolorem nominati sit. Salutandi aliquando eloquentiam te est, id quot elitr ceteros vel. Eum ei esse case efficiantur, velit alterum ornatus nam ea. Minimum forensibus theophrastus cu mea.\r\n\r\nSed ei natum tacimates persecuti, sed elit dicant persius an. Ius zril labore adipisci ad. Soleat adolescens ad nam. Pro lorem ridens phaedrum cu.\r\n\r\nQuo ei homero viderer. Eu possit mollis cum, est facilis torquatos et. Harum munere ea sed, his congue pericula ut. Ea nam velit tamquam, vis bonorum inimicus posidonium cu. Utroque interesset efficiantur in sea, homero eligendi qui eu. Sea novum ornatus id. Mei alii congue pericula ea.', '2', '2016-07-07 21:21:09', '/template/images/blog/blog-three.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name_category`, `sort_order`, `status`) VALUES
(1, 'Сорочки', 1, 1),
(2, 'Плаття', 2, 1),
(3, 'Футболки', 3, 1),
(4, 'Майки', 4, 1),
(5, 'Сумки', 5, 1),
(6, 'Штани', 6, 1),
(9, 'Білизна', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(3, 'Плаття', 1, 3212, 47, 1, 'Gussi', '3.jpg', 'Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.', 0, 0, 1),
(4, 'Сумка жіноча', 1, 55, 39, 1, 'Dolce&Gabana', '4.jpg', 'Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus.', 1, 0, 1),
(5, 'Штани жіночі', 1, 6, 62, 1, 'puma', '5.jpg', 'Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.', 0, 0, 0),
(6, 'Майка', 5, 4478, 24, 0, 'adidas', '6.jpg', 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta.', 1, 1, 1),
(24, 'Сорочка біла', 1, 435, 545, 1, 'аап', '24.jpg', 'арпвапоров', 0, 1, 1),
(8, 'Футболка жіноча', 3, 5421, 24, 1, 'shock', '8.jpg', 'Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 0, 1, 1),
(11, 'Плаття 5', 2, 234, 87, 1, 'jeans', '11.jpg', 'Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus.', 0, 0, 1),
(12, 'Плаття 6', 2, 267, 142, 1, 'L&D', '12.jpg', 'Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus.', 0, 1, 1),
(13, 'Плаття 7', 2, 286, 39, 1, 'adidas', '13.jpg', 'Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.', 0, 0, 1),
(16, 'Плаття 10', 2, 546, 56, 1, 'salamander', '16.jpg', 'Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh.', 0, 0, 1),
(18, 'Плаття 12', 2, 456, 253, 1, 'L&D', '18.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(11, 'JohnB', '067 1159065', 'Повідомлення', 36, '2017-03-24 22:12:04', '[{"id":"17","name":"\\u041f\\u043b\\u0430\\u0442\\u0442\\u044f 11","category_id":"2","code":"765","price":"35","availability":"1","brand":"\\u0431\\u0456\\u043b\\u043e\\u0447\\u043a\\u0430","image":"product3.jpg","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.","is_new":"0","is_recommended":"0","status":"1"},{"id":"18","name":"\\u041f\\u043b\\u0430\\u0442\\u0442\\u044f 12","category_id":"2","code":"456","price":"253","availability":"1","brand":"\\u043a\\u043e\\u043b\\u043e\\u0431\\u043e\\u043a","image":"product6.jpg","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.","is_new":"1","is_recommended":"0","status":"1"}]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(51, 'admin', 'admin@a.a', '$2y$10$k6fA0LCIkraIt6ZXD5je1eQ79DBWY.1TzAj/FGD1TZzflyjsD.rhO', NULL),
(36, 'JohnB', 'j@j.j', '$2y$10$3NWHstUE7idOGkvDyaPTweHfvgXufWq9mRDREIdTjw0fSzNhM5fPi', 'admin'),
(50, 'Billy', 'bb@b.b', '$2y$10$Ap1PIrWsIGEkus8yv4OnSueL9lkprksNovK11CP.p7pUAxUJqpUhe', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
