-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 12:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u3235069_properti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'hasanb', 'hasan@gamail.com', '$2y$10$nKwqKjowol5cuYIb61Vmou/vCicugBUkwKBSF6z.zlvaJa47SwL.m');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `deskripsi`, `gambar`) VALUES
('6029326ec2eab', 'whdwkjd', 'banner1613312622.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `banner_status`
--

CREATE TABLE `banner_status` (
  `id_banner` int(10) NOT NULL,
  `jenis` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_status`
--

INSERT INTO `banner_status` (`id_banner`, `jenis`) VALUES
(1, 1),
(1, 1),
(2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` varchar(100) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
('6029350838cc2', 'berita hoax', '<p>whdkwjh</p>', 'gambar1613313288.PNG', '2021-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `id`) VALUES
(27, 'isi1613312296.png', '1'),
(35, 'isi1613312451.png', '60292166d61a7'),
(36, 'isi1613312492.png', '60292166d61a7'),
(37, 'isi1613352630.jpeg', '6029ce9a608a2'),
(38, 'isi1613368900.jpeg', '6029fe6adcdee'),
(39, 'isi1613368906.jpg', '6029fe6adcdee'),
(40, 'isi1613369147.jpeg', '6029fe6adcdee'),
(42, 'isi1613369147.jpg', '6029fe6adcdee');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subjek` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `logo`, `judul`, `deskripsi`) VALUES
('60293d119a81c', 'logo1613315345.png', 'kwdjhkwjd', '<p>dkhkejdkes</p>');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_upload` date NOT NULL,
  `id_status` int(10) NOT NULL,
  `luas` text NOT NULL,
  `kamar_tidur` text NOT NULL,
  `kamar_mandi` text NOT NULL,
  `garasi` text NOT NULL,
  `id_jenis` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_banner` int(10) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `deskripsi`, `alamat`, `tanggal_upload`, `id_status`, `luas`, `kamar_tidur`, `kamar_mandi`, `garasi`, `id_jenis`, `gambar`, `id_banner`, `kota`) VALUES
('602af6df5ded2', 'TES', '100000', '<p>CNKENCK</p>', 'DNKN', '2021-02-15', 1, '100', '2', '2', '2', 2, 'gambar1613428447.png', 1, 'Gresik'),
('602afc5e858f3', 'RUmah DARJO', '1500000000000', '<p>bjbjj</p>', 'mlmlm', '2021-02-15', 2, '1000', '1', '1', '1', 2, 'gambar1613429854.png', 2, 'Pasuruan'),
('602b06da48ce9', 'RUMAH PASURUAN', '100000000000', '<p>rumah epic sdsd<strong>sdsdsd</strong>&nbsp;sds<em>dsdsdsd</em></p>', 'Jalan kamboja wonosari', '2021-02-16', 1, '300', '2', '3', '1', 1, 'gambar1613432538.jpg', 2, 'Lamongan');

-- --------------------------------------------------------

--
-- Table structure for table `properti_jenis`
--

CREATE TABLE `properti_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properti_jenis`
--

INSERT INTO `properti_jenis` (`id_jenis`, `jenis`) VALUES
(1, 'Dijual'),
(2, 'Disewakan');

-- --------------------------------------------------------

--
-- Table structure for table `properti_status`
--

CREATE TABLE `properti_status` (
  `id_status` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properti_status`
--

INSERT INTO `properti_status` (`id_status`, `status`) VALUES
(1, 'Tersedia'),
(2, 'Tidak Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `proses_transaksi`
--

CREATE TABLE `proses_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `uid_user` varchar(50) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nohp_pembeli` int(20) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `alamat_properti` text NOT NULL,
  `harga` double NOT NULL,
  `nama_properti` varchar(255) NOT NULL,
  `tanggal_proses` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id_tentang` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tentang`
--

INSERT INTO `tb_tentang` (`id_tentang`, `gambar`, `nama`, `deskripsi`) VALUES
(1, 'asdasdfsdf.jpg', 'apik', 'asldjflaskjdlfasjdlfkasdjf\r\nasdlfkajsldfkjas\r\ndfasldjfa\r\nsdjf\r\nasdfsdf'),
(1, 'asdasdfsdf.jpg', 'apik', 'asldjflaskjdlfasjdlfkasdjf\r\nasdlfkajsldfkjas\r\ndfasldjfa\r\nsdjf\r\nasdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `gambar`, `keterangan`) VALUES
('602934f0b2242', 'AWALAN', 'testi1613313264.png', '<p>AQLALA</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `nama`, `email`, `telepon`, `foto`, `deskripsi`) VALUES
('602a237b95afc', 'Chahya Ramadhan', 'chahyaramadhan.cr@gmail.com', '082232752650', 'foto1613398576.jpeg', 'coba coba'),
('602a83a874388', 'Ayog', 'nasruddinmuhammad16@gmail.com', '081234121237', 'foto1613398952.jpeg', 'CEO'),
('602a841319383', 'Aji', 'aji@properti.com', '081217511144', 'foto1613399059.jpeg', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, 'Hasan', 'admin@admin.com', '$2b$10$zPRL9qBelDXFl25qXtf.sO66rlt.TixAjU9Z3dcesD9EunHzb.M36', 1, 1, 1553151354);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properti_jenis`
--
ALTER TABLE `properti_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `properti_status`
--
ALTER TABLE `properti_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `proses_transaksi`
--
ALTER TABLE `proses_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properti_jenis`
--
ALTER TABLE `properti_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `properti_status`
--
ALTER TABLE `properti_status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proses_transaksi`
--
ALTER TABLE `proses_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
