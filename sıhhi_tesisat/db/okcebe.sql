-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2020 at 06:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okcebe`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayar`
--

CREATE TABLE `ayar` (
  `id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `logo` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(158) COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayar`
--

INSERT INTO `ayar` (`id`, `keywords`, `logo`, `aciklama`, `title`) VALUES
(1, 'tamir bakım falan feşmekan', 'gocmez.png', 'boyunca varlığını sürdürmekle kalmamış ve günümüzde elektronik yazı tipinin gerektiği birçok konuda hazır bir araç olarak kullanılmaya başlanmıştır.', 'Göçmez Sıhhi Tesisat');

-- --------------------------------------------------------

--
-- Table structure for table `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int(11) NOT NULL,
  `resim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `resim`, `baslik`, `aciklama`) VALUES
(1, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(2, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(3, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(4, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(5, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(6, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(7, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(8, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(9, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(10, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(11, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(12, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(13, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(14, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(15, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.'),
(16, 'gocmez.png', 'lorem ipsum dolar sit amet', 'Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis vel, feugiat non metus.');

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`id`, `telefon`, `adres`, `instagram`, `facebook`, `fax`) VALUES
(1, '54289798832', '  buraya adres gelşecek ama ben ev adresi yazamam  as', 'instagram.com/frukolosko3  ', 'facebook.com/frukolosko  2', '5454664646464');

-- --------------------------------------------------------

--
-- Table structure for table `kurumsal`
--

CREATE TABLE `kurumsal` (
  `id` int(11) NOT NULL,
  `baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `slogan` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yazi` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kurumsal`
--

INSERT INTO `kurumsal` (`id`, `baslik`, `slogan`, `yazi`) VALUES
(1, 'Biz göçmeziz', 'Göçmez varya savaşçı savaşçı ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Maecenas nunc sem, egestas ut accumsan vel, porta nec metus. Nullam vitae vehicula erat. Ut interdum malesuada tortor, quis scelerisque nulla interdum eu. Morbi vitae porta tortor. Integer varius molestie turpis, eget pellentesque odio pretium eget. Sed facilisis quam purus, vitae facilisis lectus sollicitudin in. Donec a elit ut velit aliquet varius. Curabitur in pulvinar ligula. Sed urna purus, iaculis sed justo vitae, facilisis faucibus massa. Duis rutrum ornare malesuada. Fusce sapien purus, consequat vitae hendrerit et, sagittis et nunc. Nunc tempor sem vitae interdum malesuada. Praesent dictum arcu tellus, vel condimentum erat tristique ut. Suspendisse condimentum, ex et vulputate luctus, nisl nunc pulvinar purus, eget elementum quam ligula eget elit.\r\n\r\nThe plugin will automatically include the most commonly used words in the text as a label. This way you gain backlinks within the site. In addition, one of the best features is that the words in the article are automatically linked to the label page. In this case, the article..\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Maecenas nunc sem, egestas ut accumsan vel, porta nec metus. Nullam vitae vehicula erat. Ut interdum malesuada tortor, quis scelerisque nulla interdum eu. Morbi vitae porta tortor. Integer varius molestie turpis, eget pellentesque odio pretium eget. Sed facilisis quam purus, vitae facilisis lectus sollicitudin in. Donec a elit ut velit aliquet varius. Curabitur in pulvinar ligula. Sed urna purus, iaculis sed justo vitae, facilisis faucibus massa. Duis rutrum ornare malesuada. Fusce sapien purus, consequat vitae hendrerit et, sagittis et nunc. Nunc tempor sem vitae interdum malesuada. Praesent dictum arcu tellus, vel condimentum erat tristique ut. Suspendisse condimentum, ex et vulputate luctus, nisl nunc pulvinar purus, eget elementum quam ligula eget elit.\r\n\r\nSed laoreet sem mauris, a molestie mauris pulvinar at. Etiam hendrerit erat vel ipsum suscipit fringilla. Nullam gravida turpis interdum tellus pharetra, a pulvinar quam consectetur. Cras quis rutrum nisi. Nullam tristique, purus quis mollis venenatis, tortor mauris efficitur purus, elementum commodo neque sapien at leo. Duis at nibh ullamcorper dolor tempus iaculis ut id dolor. Proin condimentum diam non tincidunt consectetur. Duis mattis ornare diam, vitae faucibus libero pellentesque sit amet.\r\n ');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pass` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`) VALUES
(1, 'mfd123', '123456'),
(2, 'mfd', 'mfd');

-- --------------------------------------------------------

--
-- Table structure for table `yaptiklarimiz`
--

CREATE TABLE `yaptiklarimiz` (
  `id` int(11) NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `yaptiklarimiz`
--

INSERT INTO `yaptiklarimiz` (`id`, `resim`, `baslik`, `aciklama`) VALUES
(1, 'paper background.png', 'deneme yapmaktayımsda', 'açıklama maçıklama yok kardeşim  ye'),
(2, 'paper background.png', 'deneme yapmaktayım2', 'açıklama maçıklama yok kardeşim yarrağımı ye2'),
(3, 'dirtCaveRockLarge.png', 'deneme yapmaktayım3', 'açıklama maçıklama yok kardeşim bişey yeme'),
(4, 'gocmez.png', 'deneme yapmaktayım', 'açıklama maçıklama yok kardeşim yarrağımı ye'),
(5, 'gocmez.png', 'deneme yapmaktayım', 'açıklama maçıklama yok kardeşim yarrağımı ye'),
(6, 'gocmez.png', 'deneme yapmaktayım', 'açıklama maçıklama yok kardeşim yarrağımı ye'),
(7, 'gocmez.png', 'deneme yapmaktayım', 'açıklama maçıklama yok kardeşim yarrağımı ye'),
(8, 'gocmez.png', 'deneme yapmaktayım', 'açıklama maçıklama yok kardeşim yarrağımı ye');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yaptiklarimiz`
--
ALTER TABLE `yaptiklarimiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayar`
--
ALTER TABLE `ayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yaptiklarimiz`
--
ALTER TABLE `yaptiklarimiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
