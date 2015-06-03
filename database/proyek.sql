-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2014 at 09:27 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `kd_admin` int(15) NOT NULL AUTO_INCREMENT,
  `password` varchar(15) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `No_telpon` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`kd_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `password`, `nama`, `email`, `No_telpon`, `foto`) VALUES
(1, '11', 'subhan', 'subhan@gmail.com', '0182827872', 'images/Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `kd_komentar` int(15) NOT NULL AUTO_INCREMENT,
  `kd_member` int(15) NOT NULL,
  `kd_wisata` int(15) NOT NULL,
  `pesan` text NOT NULL,
  `jenis_komentar` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kd_komentar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`kd_komentar`, `kd_member`, `kd_wisata`, `pesan`, `jenis_komentar`, `tanggal`) VALUES
(14, 20, 2, 'letak gunung ini', 1, '0000-00-00'),
(13, 16, 2, 'Bukit Teletabies juga bagus loh', 1, '0000-00-00'),
(11, 17, 1, 'haha', 1, '0000-00-00'),
(12, 18, 2, 'wah,, bagusnya....', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `kd_member` int(15) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `no_telpon` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`kd_member`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`kd_member`, `nama`, `email`, `password`, `no_telpon`, `foto`) VALUES
(20, 'jokowi', 'jokowaw@gmail.com', '90', '027781781', 'images/jokowi_by_kangsunan.jpg'),
(19, 'soekarno', 'soekarno@gmail.com', '12', '0187878781', 'images/presiden_sukarno vector.jpg'),
(18, 'upin', 'upin@gmail.com', '45', '087665555544', 'images/13935843701487166632.jpg'),
(17, 'ini', 'in@gg.com', '111', '1235437876', 'images/Koala.jpg'),
(16, 'aditya', 'adit.ilunk@yahoo.com', '123', '087850440080', 'images/backpacker__on_a_phone.png');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapi`
--

CREATE TABLE IF NOT EXISTS `tanggapi` (
  `kd_tanggapi` int(15) NOT NULL AUTO_INCREMENT,
  `kd_member` int(15) NOT NULL,
  `kd_komentar` int(15) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`kd_tanggapi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tanggapi`
--

INSERT INTO `tanggapi` (`kd_tanggapi`, `kd_member`, `kd_komentar`, `pesan`) VALUES
(26, 16, 14, 'probolinggo pak'),
(25, 16, 12, 'pemuda harapan bangsa'),
(24, 16, 13, '(+) seger'),
(23, 19, 12, 'lanjutkan!'),
(22, 19, 12, 'iya pin'),
(21, 16, 11, 'ketawa ya');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE IF NOT EXISTS `wisata` (
  `kd_wisata` int(15) NOT NULL AUTO_INCREMENT,
  `nama_wisata` varchar(100) NOT NULL,
  `lokasi_gambar` text NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kd_wisata`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`kd_wisata`, `nama_wisata`, `lokasi_gambar`, `keterangan`, `tanggal`) VALUES
(1, 'Museum Angkut', 'images/6f1V7bnU.jpeg', 'Museum Angkut atau ada yang menyebutnya Museum Otomotif merupakan wahana wisata baru yang ada di kota Batu Malang ini. Sebuah wahana yang akan membuat Anda sekeluarga terkagum-kagum atas apa yang ada di dalamnya. Menurut kabar, Museum Angkut di Kota Batu ini merupakan konsep wisata pertama yang ada di Indonesia, bahkan di Asia Tenggara. Museum Angkut menghadirkan perpaduan tempat wisata yang unik yang berisi sejarah dan perkembangan dunia angkutan di jamannya dengan latar belakang kota-kota dan bangunan eksotis yang ada di Batavia, Eropa, Amerika. Desain yang apik dan detil membuat kita seolah-olah berada dalam wilayah yang nyata sesuai lokasi/tema masing-masing. Museum Angkut ini dibangun dengan tujuan untuk menghargai para pencipta berbagai jenis angkutan di dunia mengingat perkembangan teknologi angkutan terus berkembang setiap saat. Dunia angkutan atau transportasi juga telah membawa perubahan yang sangat signifikan bagi kehidupan umat manusia. Selain dapat menikmati berbagai display angkutan dan kendaraan, Anda dan rombongan juga dapat mengadakan kegiatan yang menyangkut dunia angkutan atau otomotif di sini, seperti pameran, launching produk otomotif, event komunitas, lelang, Kontes Modifikasi, CSR bidang angkutan, dan lain sebagainya.', '0000-00-00'),
(2, 'Gunung Bromo', 'images/Paket-Wisata-Bromo.jpg', 'Museum Angkut atau ada yang menyebutnya Museum Otomotif merupakan wahana wisata baru yang ada di kota Batu Malang ini. Sebuah wahana yang akan membuat Anda sekeluarga terkagum-kagum atas apa yang ada di dalamnya. Menurut kabar, Museum Angkut di Kota Batu ini merupakan konsep wisata pertama yang ada di Indonesia, bahkan di Asia Tenggara. Museum Angkut menghadirkan perpaduan tempat wisata yang unik yang berisi sejarah dan perkembangan dunia angkutan di jamannya dengan latar belakang kota-kota dan bangunan eksotis yang ada di Batavia, Eropa, Amerika. Desain yang apik dan detil membuat kita seolah-olah berada dalam wilayah yang nyata sesuai lokasi/tema masing-masing. Museum Angkut ini dibangun dengan tujuan untuk menghargai para pencipta berbagai jenis angkutan di dunia mengingat perkembangan teknologi angkutan terus berkembang setiap saat. Dunia angkutan atau transportasi juga telah membawa perubahan yang sangat signifikan bagi kehidupan umat manusia. Selain dapat menikmati berbagai display angkutan dan kendaraan, Anda dan rombongan juga dapat mengadakan kegiatan yang menyangkut dunia angkutan atau otomotif di sini, seperti pameran, launching produk otomotif, event komunitas, lelang, Kontes Modifikasi, CSR bidang angkutan, dan lain sebagainya.', '0000-00-00'),
(3, 'Museum Brawijaya', 'images/musium brawijaya malang.jpg', 'Museum Brawijaya yang terletak di Jalan Ijen Kota Malang ini merupakan salah satu tempat yang akan memberikan gambaran pada Ngalamers tentang beratnya masa-masa perjuangan warga Malang melawan penjajah. Di museum ini Ngalamers akan menemukan banyak barang peninggalan sejarah yang masih terawat dengan baik. Seperti tank yang terdapat tepat di depan museum yang merupakan tank yang dipergunakan pada saat pertempuran 10 November 1945 di Surabaya. Ada juga sebuah senjata yang dirampas dari tentara Jepang pada September 1945, meriam canon sebesar 3.5 inch dengan nama ''Si Buang'', serta sebuah sebuah tank AMP-Track yang digunakan para pejuang TRIP. Yang menjadi koleksi unggulan Museum Brawijaya adalah Gerbong Maut. Mendengar namanya yang horror saja sudah seram ya Ngalamers. Dan memang gerbong ini menyimpan cerita kelam dari masa penjajahan Belanda dulu. Gerbong ini dahulu digunakan mengangkut 100 tawanan pejuang Indonesia dari penjara Bondowoso menuju Surabaya pada tanggal 23 November 1947. Keadaan gerbong yang tertutup rapat mengakibatkan 46 orang meninggal, 11 sakit parah, 31 sakit, dan hanya 12 yang masih sehat. Gerbong Maut tersebutkini bisa Ngalamers lihat di halaman belakang Museum Brawijaya ini..', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
