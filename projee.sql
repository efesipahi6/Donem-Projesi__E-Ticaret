-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 19 Ara 2022, 21:38:22
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projee`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `parola` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `kullanici_adi` (`kullanici_adi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayit_tarihi`) VALUES
(1, 'efe7858', 'efesipahi@outlook.com', '$2y$10$1v1XIgrZU26qjQtFcF.BtughoE.QME547sjQ1nZ89QtG.o.njhNKu', '2022-10-28 23:48:25'),
(3, 'deneme', 'deneme@outlook.com', '$2y$10$2MHEH.kBarJColnByUMN8.qWhfn4TKRRy//221uFxVIFJuBQAGXVO', '2022-12-13 22:07:12'),
(5, 'denemedeneme123', 'denemedeneme123@outlook.com', '$2y$10$YxTTScLIrCGZeV6Gs5rT1OoFTIG2xff2/NuZ1b7cfDUQj14XSyR7C', '2022-12-17 18:40:00'),
(6, 'efeefeefe', 'efeefe@outlook.com', '$2y$10$73yYp6mTLqNV.mL3cwLuj.z8o3dDVzKSh7oGa0qCE5.JP/iC/sPia', '2022-12-17 22:41:35'),
(7, 'denemekullanici', 'efesipahiii@outlook.com', '', '2022-12-19 13:19:17'),
(9, 'Efe78586141', 'efesip123@outlook.com', '', '2022-12-19 13:21:26'),
(10, 'asd123asd123', 'efesipahiasd@outlook.com', '$2y$10$4S1kcOHmUIxZKy0vFAWhoOnlAEWFP7A25xRchD.vNTSTXM1hNb0ZK', '2022-12-19 13:24:29'),
(12, 'efesip785861', 'efesip@outlook.com', '', '2022-12-19 13:28:47'),
(15, 'asdasdasd', 'efesipppp@outlook.com', '', '2022-12-19 13:33:07'),
(20, 'efebatu123', 'efebatudeneme@outlook.com', '', '2022-12-19 13:35:38'),
(21, 'efebatugunceldeneme', 'efebatuden123@outlook.com', '', '2022-12-19 13:36:19'),
(23, 'efebatuhash', 'asdasdsadasdsa@outlook.com', '', '2022-12-19 13:36:47'),
(25, 'batubatu123', 'batuefe@outlook.com', '', '2022-12-19 13:37:32'),
(26, 'efeefebatu7858', '65451654@outlook.com', '123456', '2022-12-19 13:47:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `urunid` int DEFAULT NULL,
  `baslik` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `kategori` int NOT NULL,
  `aciklama` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `fiyat` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `renk` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `beden` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `eklenmetarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urunid`, `baslik`, `kategori`, `aciklama`, `fiyat`, `renk`, `beden`, `eklenmetarihi`) VALUES
(8, 514002307, 'Test2', 1, 'Açıklama2', '25', 'YEŞİL', 'XL', '2022-12-16 17:50:38'),
(9, 1657130627, 'Test3', 1, 'Test3', '35', 'MAVİ', 'L', '2022-12-16 19:29:58'),
(14, 1285197218, 'Kadın Test', 0, 'Test15', '155', 'YEŞİL', 'M', '2022-12-16 22:20:04'),
(15, 906002354, 'Test4', 0, 'dsffsd', '155', 'MOR', 'M', '2022-12-16 22:28:51'),
(20, 863581267, 'siyah sweat', 1, 'açıklama açıklama açıklama ankuzef', '999', 'KIRMIZI', 'S', '2022-12-17 19:16:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunresimler`
--

DROP TABLE IF EXISTS `urunresimler`;
CREATE TABLE IF NOT EXISTS `urunresimler` (
  `resimid` int NOT NULL AUTO_INCREMENT,
  `urun_id` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `resim` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`resimid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `urunresimler`
--

INSERT INTO `urunresimler` (`resimid`, `urun_id`, `resim`) VALUES
(13, '514002307', '1.png'),
(25, '906002354', '9060023544.png'),
(24, '906002354', '9060023543.png'),
(21, '1125673658', '11256736581.png'),
(19, '1466655965', '5.png'),
(23, '1285197218', '12851972181.png'),
(16, '1657130627', '3.png'),
(41, '863581267', '8635812671892526392drewman1.png'),
(26, '2087490498', '20874904981.png'),
(27, '1741643170', '1741643170drewman1.png'),
(28, '1741643170', '1741643170drew-man-baskili-kapusonlu-oversize-er-a85-de.jpg'),
(29, '381169745', 'Screenshot_2.jpg'),
(30, '688034846', 'Screenshot_1.jpg'),
(31, '992568865', '992568865Screenshot_2.jpg'),
(32, '1334310441', '1334310441drewman1.png'),
(33, '1334310441', '1334310441drew-man-baskili-kapusonlu-oversize-er-a85-de.jpg'),
(37, '1892526392', '1892526392drewman1.png'),
(38, '1892526392', '1892526392drew-man-baskili-kapusonlu-oversize-er-a85-de.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

DROP TABLE IF EXISTS `yoneticiler`;
CREATE TABLE IF NOT EXISTS `yoneticiler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kadi` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `sifre` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `kullanici_adi` (`kadi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `kadi`, `email`, `sifre`, `kayit_tarihi`) VALUES
(1, 'admin', 'admin@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-12-16 11:39:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
