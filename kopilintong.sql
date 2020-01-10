-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 01:49 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopilintong`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Gani Silaban'),
(2, 'admin2', 'admin', 'Horas Hutapea');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` longtext NOT NULL,
  `foto` varchar(500) NOT NULL,
  `tanggal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `id_admin`, `judul`, `isi`, `foto`, `tanggal`) VALUES
(9, 0, 'zxcvbnm,', '.,mnbvcxz', 'logobem.png', '12 June 2019 , 4:30 AM'),
(10, 0, 'Siang-siang ngopi', 'Kopi adalah minuman hasil seduhan biji kopi yang telah melalui proses roasting dan dihaluskan menjadi bubuk. Jenis kopi yang beredar secara luas adalah arabika, robusta, dan liberika. Kopi merupakan minuman ke-2 terpopuler di dunia setelah teh. Bagi banyak orang, kopi bukan sekedar minuman selingan tapi adalah bagian dari gaya hidup.\r\n\r\nKopipedia Sasame Coffee merupakan ensiklopedia lengkap yang berisi serba-serbi dunia kopi, dari sejarah, tips, proses, hingga resep kopi yang nikmat. Perluas wawasan Anda tentang dunia kopi agar setiap momen ngopi Anda menjadi lebih nikmat!', 'PCNH-211.jpg', '12 June 2019 , 11:15 AM'),
(11, 0, 'Manfaat Kopi Untuk Kehidupan Sehari-hari', 'woakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnjwoakdoakwodakahbakjnakjnj', '2.jpg', '12 June 2019 , 11:45 AM');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `hot` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `jenis`, `harga`, `status`, `hot`, `foto`, `id_admin`) VALUES
(3, 'Go Green', 'yoman', 178000, 0, 0, '', 0),
(4, 'Kopi Luwak', 'Robusta', 172000, 0, 0, '', 0),
(6, 'Kopi Gayo', 'Dari Aceh', 64000, 0, 0, 'luwak2.jpg', 0),
(7, 'Kopi Lintong', 'Arabika', 110000, 0, 0, 'luwak5.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `status_barang` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `id_barang`, `id_pembeli`, `jumlah`, `deskripsi`, `status`, `status_barang`) VALUES
(24, 6, 5, 123, '123', 0, 0),
(25, 6, 5, 1, '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `id_pembeli`, `judul`, `isi`) VALUES
(2, 1, 'qweqwe', 'qweqweq'),
(3, 1, 'Complain', 'I have been waiting for those cofee!'),
(4, 4, 'Advice', 'That will be great if you could upload a video!');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `username`, `password`, `nama`, `alamat`, `email`, `kontak`, `foto`) VALUES
(1, 'drikdrick', 'drikdrick', 'Fedrick Sulaiman Siagian', 'Jl. Pertanian Utara No. 39', 'superiorsiagian@gmai', '082274867174', ''),
(2, 'cikicuy', 'cikicuy', 'Chaca Marissa', 'Jl. Lintas Medan No.50', 'Chachacha@gmail.com', '081383533363', ''),
(3, 'rumondang.naiborhu', 'qweqwe', 'Rumondang', 'DEL', 'rumondang.naiborhu@del.ac.id', '083383398833', ''),
(4, 'donokasino', 'donokasino', 'Dono', 'Jl Pangaribuan', 'donoyoo@gmail.com', '082274867171', ''),
(5, 'jola', 'jola', 'jola', 'jola', 'jhosuagaruda389@gmail.com', '000000000', ''),
(8, 'baru', '>^', 'jola', 'jik', 'jhosua.sinambela0507@gmail.com', '000002', ''),
(9, 'jakun', '@>J^W', 'jakun', 'jakun', 'jhosua.sinambela@yahoo.com', '000000000', ''),
(10, 'if317044', 'if317044', 'if317044', 'if317044', 'jhosuagaruda389@gmail.com', '000000000', ''),
(11, 'jakon', 'jakon', 'jakon', '@>JSW', 'jhosua.sinambela@yahoo.com', '1554000', ''),
(12, 'inez', 'inez', 'inez', '>YJ@<L@%Y>L!@J>LJ@Y!', 'jhosuagaruda389@gmail.com', '000000000', ''),
(13, 'kampung', 'kampung', 'kampung', 'J>%^W4', '@LSY^>4>^<>f[j4%>pOS%', '))2M]g', ''),
(14, 'sinambela', 'sinambela', 'sinambela', 'YpW>%!>', '@LSY^>OYpW>%!>jy>LSSOSS%', ')))))))))22', ''),
(15, 'asd', 'asd', 'asd', '>Y<', '@LSY^>OYpW>%!>)])\rj4%>pOS%', '\n]\r[\r\n]', ''),
(16, 'asdsa', 'asdsa', 'asdsa', '', '@LSY^>4>^<>f[j4%>pOS%', '2]\r]\r', ''),
(17, 'asdsa', 'asdsa', 'asdsa', '>Y<Y>', '@LSY^>4>^<>f[j4%>pOS%', '2]\r]\r', ''),
(18, 'kapan', 'kapan', 'kapan', 'kapan', 'jhosuagaruda389@gmail.com', '7878787', ''),
(19, 'horas', '$SHA$$fb3bb239f72cfb5b001', 'horas', 'horas', 'jhosuagaruda389@gmail.com', '5454545', ''),
(20, 'hantu', '$SHA$$64050ae01724c764719', 'hantu', 'hantu', 'jhosua.sinambela@yahoo.coom', '5454545', ''),
(21, 'josin', '$SHA$$24257d1d19dbde0fb96', 'josin', '@SYpW', '@LSY^>OYpW>%!>jy>LSSOS%', ']g]g]g]g[[', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wew` (`id_pembeli`),
  ADD KEY `qwe` (`id_barang`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Pembeli` (`id_pembeli`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `qwe` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `wew` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FK_Pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
