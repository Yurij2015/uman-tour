-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jul 16, 2020 at 09:02 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sofievka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`, `info`) VALUES
(1, 'admin', '57fb1ee8de37ca249d3beae8e48abb84', '');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `header` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subheader` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `header`, `subheader`, `content`) VALUES
(2, 'Умань. Дві «Софіївки», Буцький каньйон- 23.08, 5.09.20', 'Экскурсионный тур в дендрологичный парк «СОФИЕВКА» и “НОВАЯ СОФИЕВКА” (Умань), Букский каньон (Черкасская обл)', '<h5><strong>Главная цель Вашего путешествия &ndash; это прекрасный город Умань с несравненной жемчужиной садово-паркового искусства, дендропарком &laquo;Софиевка&raquo; &ndash; украинским Версалем.</strong></h5>\r\n<p>Вы узнаете историю романтической любви графа Потоцкого к красавице-гречанке Софии.</p>\r\n<p>Здесь Вы увидите любовь, воплощение в парковом ансамбле, экзотические деревья и цветы, очаровательные гроты, скульптуры, беседки, фонтаны, водопады.</p>\r\n<p>Длительность: 1 день Ближайшие даты: 23.08.2020 та 5.09.20 Стоимость тура: 850 &ndash; для взрослых; 800 &ndash; для детей до 14 лет 1.00 &ndash; 2.00 &ndash; сбор группы по остановкам г. Полтава 10.00- с. Буки Черкасской области, где находится одно из 7 чудес Украины &ndash; Букський каньон. Нас ждёт увлекательная экскурсия. Букський каньон &ndash; это граниты, возраст которых около 2 млрд. лет.</p>\r\n<p>&nbsp;</p>\r\n<p><img class=\"img-fluid\" src=\"../images/slide7.jpg\" width=\"2560\" height=\"1707\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Кроме того, что Букський каньон &ndash; очень нехарактерный ландшафт для степной зоны Украины. Зрелище захватывающее !!! 14.00 &ndash; &ldquo;Софиевка&rdquo; &ndash; легенда Украины. Софиевка &ndash; памятник любви. Бывали ли вы на овеянных романтикой Елисейских полях? Прогуливались ли в строгой тишине аллей Английского парка? Любовались ли дивными ландшафтами Малой Швейцарии?</p>\r\n<p>Замирало ли сердце ваше на острове Любви? А может, вздрагивало от ощущения чего-то неизведанно-таинственного, когда попадали вы в Критский лабиринт или в скальную химерию долины Гигантов? В конце концов, если вам посчастливилось проплыть на лодке через Мертвое озеро и беспрепятственно преодолеть подземную речку Стикс, которой легендарный Харон &ldquo;транспортирует в ад грешные души&rdquo;, вам, чуть ли не детской забавой покажется готовая вот-вот сорваться с высоты огромная каменная глыба грота Страха и Сомнений MyCollages (29) Новая Софиевка.</p>\r\n<p>Современная &laquo;Софиевка&raquo; &ndash; это совершенно новый объект, который вырос рядом с историческим дендропарком. Раньше здесь было 12 гектаров пустыря и свалок, а теперь &ndash; единственный в Восточной Европе дендропарк в стиле фэнтези. В &laquo;Новой Софиевке&raquo; сочетаются природа, современное и традиционное искусство, различные мировые культуры, которые представлены уникальными композициями и арт-объектами (светомузыкальное арт-инсталляция с портретом Софьи Потоцкой, инновационное 3D-мапинг шоу &laquo;Душа леса&raquo;, смотровая площадка, водопад &laquo;Драконы&raquo;, скульптура &laquo;Пегас&raquo; и многое другое). Особенно привлекательной &laquo;Современная Софиевка&raquo; становится с наступлением темноты, ведь вечером здесь работают светомузыкальные арт-инсталляции.</p>\r\n<p>&nbsp;</p>\r\n<p><img class=\"img-fluid\" src=\"../images/slide1.png\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Будем наслаждаться 3D-мапинг шоу &ldquo;Душа леса&rdquo;.MyCollages (2)20.30 &ndash; посещение Уманского светомузыкального комплекса фонтанов &laquo;Жемчужина любви&raquo;, который вошел в тройку крупнейших в Украине. 21.30 &ndash; выезд в г. Полтава. Стоимость &ndash; 850 грн. В стоимость входит: автобусный трансфер по всему маршруту, страховка, сопровождение групповода по всему маршруту.</p>\r\n<p>В стоимость не входит: экскурсия по каньону- 40 грн, входные билеты Национальный дендрологический парк &laquo;Софиевка&raquo; с экскурсионным обслуживанием (для взрослых &ndash; 120 грн; для детей &ndash; 70 грн), &ldquo;Новая Софиевка&rdquo;- 70 грн., питание, личные расходы Для заказа тура, звоните по телефонам: (050) 664-13-08; (098) 024-22-10. Или оставьте заявку, и мы перезвоним Вам.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sitedata`
--

CREATE TABLE `sitedata` (
  `id` int(11) NOT NULL,
  `footer` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitename` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitedata`
--

INSERT INTO `sitedata` (`id`, `footer`, `sitename`, `phone`, `keywords`, `description`, `page`) VALUES
(1, 'Copyright &copy; 2020 Умань Дві Софіївки + Буцький каньйон', 'Экскурсионный тур в дендрологичный парк «СОФИЕВКА» и “НОВАЯ СОФИЕВКА”', '+380668781682', NULL, NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tourorders`
--

CREATE TABLE `tourorders` (
  `id` int(11) NOT NULL,
  `customername` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `place` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepay` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canyontour` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lunchcanyon` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrancesofievka` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sofievkatour` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullplace` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tourrequest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourorders`
--

INSERT INTO `tourorders` (`id`, `customername`, `date`, `place`, `birthdate`, `contact`, `age`, `prepay`, `canyontour`, `lunchcanyon`, `entrancesofievka`, `sofievkatour`, `fullplace`, `tourrequest`) VALUES
(1, 'Іванов Іван Іванович', '2020-07-16', 'asdf', '1982-07-15', '555', 'дорослий', '200', 'так', 'так', 'так', 'так', 'так', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tourrequest`
--

CREATE TABLE `tourrequest` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateoftour` date DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourrequest`
--

INSERT INTO `tourrequest` (`id`, `name`, `phone`, `dateoftour`, `count`) VALUES
(1, 'Іванов Іван Іванович', '+380660992330', NULL, 2),
(2, 'Макатров Иван Петрович', '380660992330', '2020-07-14', 4),
(3, 'Петров Олег Сидоров', '+380660993355', '2020-07-14', 2),
(6, 'Макатров Иван Петрович', '380660992330', '2020-07-14', 1),
(8, 'Макатров Иван Петрович', '4323244', '2020-07-12', 1),
(11, 'jkj', '9999', '2020-07-14', 1),
(12, 'asdf', '555', '2020-07-16', 1),
(13, 'asdf', '4323244', '2020-07-15', 1),
(14, 'asdfasdf', '555', '2020-07-15', 2),
(15, 'gggg', '555', '2020-07-16', 2),
(16, 'gggg', '666', '2020-07-13', 4),
(17, 'ggg', '555', '2020-07-16', 2),
(18, 'asdf', '4323244', '2020-07-16', 2),
(19, 'hhhh', '6666666', '2020-07-16', 2),
(20, 'klklk', '555', '2020-07-15', 1),
(21, 'kkk', '888', '2020-07-16', 2),
(22, 'klklk', '555', '2020-07-15', 1),
(23, 'jkjkjkj', '4323244', '2020-07-14', 2),
(24, 'asdf', '555', '2020-07-17', 3),
(25, 'ggg', '555', '2020-07-16', 3),
(26, 'qwer', '555', '2020-07-17', 5),
(27, 'lklklk', '4323244', '2020-07-30', 2),
(28, 'klklk', '444', '2020-07-18', 2),
(29, 'klklk', '55', '2020-07-18', 1),
(30, 'klklk', '555', '2020-07-25', 1),
(31, 'sdfgsdfg', '7777', '2020-07-17', 2),
(32, 'фывфыв', '5555', '2020-07-16', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitedata`
--
ALTER TABLE `sitedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourorders`
--
ALTER TABLE `tourorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourrequest`
--
ALTER TABLE `tourrequest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sitedata`
--
ALTER TABLE `sitedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourorders`
--
ALTER TABLE `tourorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourrequest`
--
ALTER TABLE `tourrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
