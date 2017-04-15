-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2014 pada 14.28
-- Versi Server: 5.5.34
-- Versi PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `fifa14`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `badword`
--

CREATE TABLE IF NOT EXISTS `badword` (
  `wordid` int(11) NOT NULL AUTO_INCREMENT,
  `bad` varchar(100) NOT NULL,
  `sensor` varchar(100) NOT NULL,
  PRIMARY KEY (`wordid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `badword`
--

INSERT INTO `badword` (`wordid`, `bad`, `sensor`) VALUES
(2, 'hina', 'hani'),
(3, 'anjing', 'kucing'),
(4, 'tuyul', 'apin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `image`
--

INSERT INTO `image` (`id`, `name`) VALUES
(0, '9825_564187357011451_1116550270_n1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `livescore`
--

CREATE TABLE IF NOT EXISTS `livescore` (
  `s_id` int(5) NOT NULL AUTO_INCREMENT,
  `negara1` varchar(30) NOT NULL,
  `negara2` varchar(30) NOT NULL,
  `gol1` int(2) NOT NULL,
  `gol2` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `livescore`
--

INSERT INTO `livescore` (`s_id`, `negara1`, `negara2`, `gol1`, `gol2`, `tanggal`) VALUES
(1, 'Brazil', 'Kroasia', 3, 1, '2014-06-13'),
(3, 'Meksiko', 'Kamerun', 1, 0, '2014-06-13'),
(4, 'Spanyol', 'Belanda', 1, 5, '2014-06-14'),
(5, 'Chile', 'Australia', 3, 1, '2014-06-14'),
(10, 'Kolombia', 'Yunani', 3, 0, '2014-06-14'),
(12, 'Uruguay', 'Costa Rika', 1, 3, '2014-06-15'),
(13, 'P.Gading', 'Jepang', 2, 1, '2014-06-15'),
(14, 'Inggris', 'Italia', 1, 2, '2014-06-15'),
(15, 'Swiss', 'Ekuador', 2, 1, '2014-06-15'),
(16, 'Prancis', 'Honduras', 3, 0, '2014-06-16'),
(17, 'Argentina', 'Bosnia-Herzegovina', 2, 1, '2014-06-16'),
(18, 'Jerman', 'Portugal', 4, 0, '2014-06-16'),
(19, 'Iran', 'Nigeria', 0, 0, '2014-06-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `email1` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`message_id`, `sender_id`, `receiver_id`, `email1`, `subject`, `message`, `tanggal`) VALUES
(1, 11, 10, 'sehun@s.com', 'hunhan', '<3', '2014-06-18 10:00:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`post_id`, `title`, `tanggal`, `content`, `user_id`) VALUES
(8, 'admin post', '2013-05-10 08:21:54', 'tes', 2),
(9, 'coba ci', '2013-06-19 21:00:41', 'haloooo', 1),
(10, 'coba', '2014-06-02 11:01:36', 'hahaha', 1),
(11, 'Piala Dunia', '2014-06-13 04:09:41', 'Spanyolspanyol', 1),
(13, 'hahah', '2014-06-15 10:46:17', 'gooollll', 1),
(14, 'kekeke', '2014-06-15 16:23:37', 'alalla', 1),
(15, 'hahahah', '2014-06-15 16:24:00', 'nananna', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_comment`
--

CREATE TABLE IF NOT EXISTS `post_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `post_comment`
--

INSERT INTO `post_comment` (`comment_id`, `post_id`, `user_id`, `content`, `tanggal`) VALUES
(6, 7, 16, 'salam kenal juga', '2013-05-10 07:01:11'),
(8, 7, 17, 'Hai', '2013-05-10 08:36:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userakses` set('Admin','Member') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `userakses`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', 'Admin'),
(9, 'uswah', 'f5e8ed74118c82e737a6dea5600efb48', 'uswah@gmail.com', 'Member'),
(10, 'sehun', '931b5a46ca4727cb3dc6261b0122fd49', 'sehun@s.com', 'Member'),
(11, 'luhan', 'c75cdfacc4464147227eb7188bd55890', 'luhan@lu.com', 'Member'),
(13, 'andro', '7032baa472380762dfd2692fe007dcef', 'andro@andro.andro', 'Member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
