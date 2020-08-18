-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2020 at 03:43 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
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
(1, 'eğlence,müzik,canlı', '9mhUt8EOlBjpeg', 'boyunca varlığını sürdürmekle kalmamış ve günümüzde elektronik yazı tipinin gerektiği birçok konuda hazır bir araç olarak kullanılmaya başlanmıştır.', 'Rumors ');

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
(17, 's2rDjOoPQJ.jpg', 'mevlüt furkan demir', 'müthiş bir kafe eğlencemin dibine vuruyorun'),
(18, 'BMR7XvTznLpng', 'ismini vermek istemeyen yorumcu', 'Hayatımda gördüğüm en güzel müzik yapan mekan diyebilirim, hizmetleri ve güleryüzlülüğü ile adeta beni büyüledi çıkmak istemiyorum keşke tüm gece açık olsa');

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
  `saatler` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`id`, `telefon`, `adres`, `instagram`, `facebook`, `saatler`) VALUES
(1, '54289798832', 'Armağan, Yeni Meram Caddesi no :66 Meram/KONYA', 'instagram.com/frukolosko3      ', 'facebook.com/frukolosko  2    ', 'Hİ:10.30-24.00  HS:10.00-24.00   ');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `isim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `main` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `isim`, `main`) VALUES
(1, 'espersso bazlı sıcak içecekler', 7),
(3, 'espresso bazlı soğuk içecekler', 9),
(7, 'sıcak içecekler', 0),
(8, 'pasta', 0),
(9, 'soğuk içecek', 0),
(11, 'taze sıkım', 9),
(13, 'çaylar', 7),
(14, 'çikolatalı pastalar', 8);

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
(1, 'Yakından Tanıyın', 'RUMORS', ' Her iki şekilde de veritabanına yeni bir veri kaydı yapılır. PDO kodları biraz uzun gibi görünsede daha güvenilirdir. Çünkü bu 2 kod parçacığında mysql_ li fonksiyonlu örnekte SQL Injection açığı mevcuttur. Unutmamak gerek ki insert işlemlerinin %99’u kullanıcıdan aldığımız veriler doğrultusunda olmakta. Buda alınan verilerin kontrol edilmesi anlamına gelir. Bunu siz yapmaktansa kullandığınız veritabanı sınıfının yapması çok daha kullanışlı olacaktır. PDO’da bunu sizin için yapıyor ve kullanıcıdan aldığınız bilgileri bu kullanım ile daha güvenilir hale getiriyor. Böylece SQL Injection açıklarından korunmuş oluyoruz.\r\n\r\nAyrıca PDO örneğinde ? yerine key (anahtar) isimler belirtipte ona göre dizide değer gönderebilirdik.. Yani şu şekilde bir örnekte yapabilirdi ');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `isim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `aciklma` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `resim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `kategori`, `isim`, `aciklma`, `fiyat`, `resim`) VALUES
(7, 11, 'limonata', 'özenle seçilmiş ev yapımı tadında l,monata', '15', 'D2ZXkCS7Fwjpg'),
(9, 8, 'meyveli pasta', 'ahududu böğürtlen ve bilimum kırmızı meyveli pasta', '58', '5wkr7U3W0Kjpg'),
(10, 1, 'cappucino', 'uzun çekim espresso ve süt köpüğünün eşsiz uyumundan doğan bu tada bayılcaksınız', '20', 'pEdBxyFS2h.jpg'),
(11, 3, 'ice latte', 'uzun çekim espresso ve süt köpüğünün eşsiz uyumundan doğan bu seriletici tatlı kahveye bayılcaksınız', '20', 'tcGugYQNbz.jpg'),
(12, 13, 'çay', 'çay tiryakilerini bile tatmin edebilen özel harman karadeniz filiz çayı', '4', 'QXDtBzo8TE.jpg'),
(13, 13, 'nane llimon', 'nane ve limonun beleyiciliği ve eşsiz tadı ile hem damak tadınızı şevklendirin hemde sağlıklı kalın', '10', '4Kz9TjtsQW.jpg'),
(14, 14, 'dark velvet', 'çikolata yoğunluğu ve yumuşacık vanilyalı keki ile çikolata krizlerinize usulca dur deyin', '15', '1j65UZXzVv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mesaj`
--

CREATE TABLE `mesaj` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `saat` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `oku` tinyint(1) NOT NULL DEFAULT 0,
  `tarih` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `mesaj`
--

INSERT INTO `mesaj` (`id`, `isim`, `telefon`, `saat`, `mesaj`, `oku`, `tarih`) VALUES
(9, 'asd asd', '156465446', '1:00 öö', 'asdasd', 1, '7/8/2020');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '" "',
  `baslik2` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `resim`, `baslik`, `baslik2`, `aciklama`) VALUES
(1, 'Pi2RGrjNOdjpg', 'çarşamba 20.00', 'Canlı müzik ', 'Her hafta çarşamba canlı canlıyız'),
(12, 'BjkQePVo9s.jpg', 'Hafta sonu ', 'ROCK KONSERİ HAVASI', 'bu manyak fena çalıyor mutlaka deneyein');

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
(14, 'Zt9CPezio1jpg', 'asd', 'asdasdasd');

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesaj`
--
ALTER TABLE `mesaj`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `yaptiklarimiz`
--
ALTER TABLE `yaptiklarimiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
