-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2016 at 02:54 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pajak_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE IF NOT EXISTS `berkas` (
`id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `format` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delete_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE IF NOT EXISTS `data_pribadi` (
`id` int(11) NOT NULL,
  `no_anggota` varchar(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `no_registrasi` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat_provinsi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `alamat_pos` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `perusahaan_alamat` varchar(100) NOT NULL,
  `perusahaan_jabatan` varchar(30) NOT NULL,
  `perusahaan_korespondensi` varchar(30) NOT NULL,
  `perusahaan_telp` varchar(30) NOT NULL,
  `perusahaan_extensi` varchar(10) NOT NULL,
  `perusahaan_fax` varchar(30) NOT NULL,
  `perusahaan_level` varchar(30) NOT NULL,
  `perusahaan_kategori` varchar(30) NOT NULL,
  `perusahaan_tipe` varchar(30) NOT NULL,
  `perusahaan_bisnis` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`id`, `no_anggota`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `npwp`, `no_registrasi`, `jenis_kelamin`, `agama`, `alamat_provinsi`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `alamat_pos`, `email`, `telp`, `fax`, `hp`, `foto`, `perusahaan`, `perusahaan_alamat`, `perusahaan_jabatan`, `perusahaan_korespondensi`, `perusahaan_telp`, `perusahaan_extensi`, `perusahaan_fax`, `perusahaan_level`, `perusahaan_kategori`, `perusahaan_tipe`, `perusahaan_bisnis`, `user_id`) VALUES
(1, '112.TT.0092', 'Gilang Purnama', 'Jakara', '1986-05-27', '1120093113441', '', '', 'Pria', 'Islam', 'DKI Jakarta', 'jalan Pejambon', '', '', '', '', '29000', 'user@company.com', '021-39912', '', '08118931123', '1464534723-.jpg', 'PT Maju Bersama', 'Jalan Sudirman no 50\r\n', 'Head Office', 'kantor', '021-212321', '021', '', 'Entry Level', 'Akuntan Sekor Publik', 'Listed Company', 'Perdagangan', 1),
(2, '', 'a', 'ad', '0000-00-00', 'ad', '', '', 'on', 'Islam', '1', 'ad', '', '', '', '', 'ad', 'ad', 'ad', 'ad', 'ad', '1464524227-a.jpg', '', '', '', '', '', '', '', '1', '1', '1', '1', 0),
(3, '', 'atur atur', 'asdf', '0000-00-00', 'Hussein Al-Muhtadeeb', '', '', 'Pria', 'Islam', '4', 'jln nenas gg tanjung no 6', '', '', '', '', '123123', 'sein_al@yahoo.com', '+68127653655', 'adfsadf', '+68127653655', '1464524335-atur-atur.jpg', 'adf', 'jln nenas gg tanjung no 6', 'asdfsdf', '$request->korespondensi_perusa', 'asdfsdf', 'asdf', 'asdf', '1', '1', '1', '1', 0),
(7, '', 'atur atur', 'asdf', '0000-00-00', 'Hussein Al-Muhtadeeb', '', '', 'Pria', 'Islam', '4', 'jln nenas gg tanjung no 6', '', '', '', '', '123123', 'sein_al@yahoo.com', '+68127653655', 'adfsadf', '+68127653655', '1464525082-atur-atur.jpg', '', '', '', 'Kantor', 'asdfsdf', '', '', '1', '1', '1', '1', 3),
(18, '', 'Ryanti', 'Jakarta', '1984-06-12', '123123137876123', '', '', 'Wanita', 'Islam', 'DKI Jakarta', 'Jalan pramuka', '', '', '', '', '20091', 'hussein@sbm-itb.ac.id', '', '', '081299712312', '1468725496-ryanti.png', 'PT.Sukses', '', '', 'Kantor', '', '', '', 'Middle Management', 'Akuntan Sektor Publik', 'BUMD', 'Pemerintah', 19),
(20, '', 'sein', 'pekanbaru', '2016-07-07', 'asdsdasd', '', '', 'Pria', '0', '3', 'jalan kebon bibit no 28', '', '', '', '', 'asdasd', 'sein_al1@yahoo.com', '08127653655', '8127653655', '08127653655', 'person.png', '', '', '', 'Kantor', '', '', '', '0', '0', '0', '0', 21),
(21, '', 'sein', 'pekanbaru', '2016-07-07', 'asdsdasda', '', '', 'Pria', '0', '3', 'jalan kebon bibit no 28', '', '', '', '', 'asdasd', 'sein_al2a@yahoo.com', '08127653655', '8127653655', '08127653655', 'person.png', '', '', '', 'Kantor', '', '', '', '0', '0', '0', '0', 22),
(22, '', 'sein al', 'kota pekanbaru', '2016-07-12', 'asdsdasdaasds', '10001', '2010123', 'Pria', 'Kristen', 'Nanggroe Aceh Darussalam', 'asdasd', '', '', '', '', 'asdasd', 'seinal51@gmail.com', '', '', '', '', 'bintang', '', '', '', '1900211', '    09123', '876234', 'Senior Management', 'Akuntan Sektor Publik', '0', 'Asuransi', 23);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
`id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `divisi` varchar(150) NOT NULL,
  `masuk` date NOT NULL,
  `keluar` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delete_stat` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`, `jabatan`, `divisi`, `masuk`, `keluar`, `durasi`, `deskripsi`, `user_id`, `delete_stat`) VALUES
(1, 'PT.Telkom', 'Accountant', 'Accounting', '2002-04-27', '2006-05-04', 4, 'Handle Journal', 1, 0),
(2, 'PT. Djarum', 'Manager', 'Finance', '2010-05-10', '2012-05-10', 2, 'Managing Financial Data', 1, 0),
(3, 'PT ABC', 'Manajer', 'Sales', '2016-07-24', '2016-07-27', 0, '', 23, 1),
(4, 'PT ABC', 'Manajer', 'Sales', '2016-07-24', '2016-07-27', 10, '', 23, 1),
(5, 'PT ABC 1', 'Manajer', 'Sales', '2016-07-24', '2016-07-27', 0, '1111', 23, 1),
(6, 'PT ABC', 'Manajer', 'Sales marketing', '2016-07-24', '2016-07-27', 10, '1111', 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jenis` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `no_kwitansi` varchar(50) NOT NULL,
  `bank_penerima` varchar(50) NOT NULL,
  `bank_pengirim` varchar(50) NOT NULL,
  `rekening_pengirim` varchar(50) NOT NULL,
  `pemegang_rekening` varchar(50) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
`id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `sekolah` varchar(150) NOT NULL,
  `prodi` varchar(150) NOT NULL,
  `jenjang` varchar(150) NOT NULL,
  `kota` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delete_stat` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `tanggal`, `sekolah`, `prodi`, `jenjang`, `kota`, `user_id`, `delete_stat`) VALUES
(1, '2006-05-03', 'Universitas Indonesia', 'Ekonomi', 'S2', 'Jakarta', 1, 0),
(2, '2016-07-23', 'ITB', 'Ekonomi', 'S2', 'Jakarta Utara', 23, 1),
(3, '2016-07-15', '2016-07-14', 'Ekonomi', 'S1', 'Jakarta', 23, 0),
(4, '0000-00-00', 'tessss', 'Ekonomi', 'SMA atau sederajat', 'Jakarta Utara', 23, 0),
(5, '0000-00-00', 'asdasd', 'adf', 'DIII', 'asdfsdf', 23, 0),
(6, '2016-07-16', '2222', 'ekonomi', 'DIV', '', 23, 1),
(7, '0000-00-00', '', '', 'SMA atau sederajat', '', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `step_registration` int(11) NOT NULL,
  `link` varchar(15) NOT NULL,
  `confirmation_link` varchar(15) NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_id`, `step_registration`, `link`, `confirmation_link`, `date_updated`) VALUES
(1, 20, 2, 'AdN0eFZAEc', '', '2016-07-22'),
(2, 21, 2, 'utz01dO6cd', '', '2016-07-22'),
(3, 22, 2, 'MJCKy3dWjh', '', '2016-07-22'),
(4, 23, 6, 'by9y1c6B4uKYGfw', 'BI0F7K4axdEqpdE', '2016-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE IF NOT EXISTS `sertifikat` (
`id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(150) NOT NULL,
  `no` varchar(150) NOT NULL,
  `penyelenggara` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delete_stat` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `tanggal`, `nama`, `no`, `penyelenggara`, `user_id`, `delete_stat`) VALUES
(1, '2016-05-24', 'Leadership', '11.EE.222', 'Pemerintah', 1, 0),
(2, '2016-06-29', 'tes', '12312', 'nono', 23, 1),
(3, '2016-06-29', '123', 'asdf123', 'asdfsdf', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skp`
--

CREATE TABLE IF NOT EXISTS `skp` (
`id` int(11) NOT NULL,
  `tahun` varchar(150) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `batas` int(150) NOT NULL,
  `nilai` varchar(150) NOT NULL,
  `jenis_kegiatan` varchar(150) NOT NULL,
  `topik` varchar(150) NOT NULL,
  `penyelenggara` varchar(150) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `mulai` date NOT NULL,
  `berakhir` date NOT NULL,
  `aktifitas` varchar(150) NOT NULL,
  `diusulkan` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delete_stat` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `skp`
--

INSERT INTO `skp` (`id`, `tahun`, `jumlah`, `batas`, `nilai`, `jenis_kegiatan`, `topik`, `penyelenggara`, `lokasi`, `mulai`, `berakhir`, `aktifitas`, `diusulkan`, `user_id`, `delete_stat`) VALUES
(1, '2016', 15, 20, '8', 'Seminar', 'Indonesia Future', 'Mandiri', 'Jakarta', '2016-05-01', '2016-05-04', '', '', 1, 0),
(2, '2016', 12, 20, '8', 'Seminar', 'Tax Evasion', 'Pembicara', 'Jakarta', '2016-05-10', '2016-05-13', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `valid_date` date NOT NULL,
  `delete_stat` int(11) NOT NULL,
  `remember_token` varchar(150) NOT NULL,
  `pribadi_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `active`, `valid_date`, `delete_stat`, `remember_token`, `pribadi_id`) VALUES
(1, 'user@company.com', 'user@company.com', '$2y$10$S7eO6XPeMIo0OhNL6ALFyu0i2j87TBy7ZQejkzdcyakJTSouajcnq', 'member', 1, '2018-01-01', 0, 'TxCBAxGC9hU3tdKB8nCIpqfBmsqrDN28yTMH1GlIISuMIngt1QtlgLowHmnO', 1),
(2, '', 'sein_al@yahoo.com', '$2y$10$Bi9UJ9htOmPgioOZXCFRVuDO7f0h0fWk0hHrigZcG2ZGjQi3V/FOW', 'member', 1, '2018-01-01', 0, 'ylwQaUajmqzvSliaQ3udeKG7Z2jfzttmqxb3OfZwr3q5Eghh36JzHVl5grkk', 0),
(19, 'hussein@sbm-itb.ac.id', 'hussein@sbm-itb.ac.id', '$2y$10$wC13L8JXwKVD9ToTouo8TO914z2mQBpzPo08rJCu7W0AqiSCNTa46', 'member', 1, '2018-01-01', 0, 'WtFPgYgiBO8ErvNQAVwMjj2ZCTu441ZDHUdwWN2xnvJGhIOMINUYNA84YqCa', 0),
(21, 'sein_al1@yahoo.com', 'sein_al1@yahoo.com', '$2y$10$ifMepxcll6B/GXEGzL.B4OFAvHxmgPIbWc4f4z28U/.LkBEhm/rS6', 'member', 1, '2018-01-01', 0, '', 0),
(22, 'sein_al2a@yahoo.com', 'sein_al2a@yahoo.com', '$2y$10$xrK0IquGxt52JozrrcL2..5zY76Qa06AuLFm.62LB9FpmBhlORX0e', 'member', 1, '2018-01-01', 0, '', 0),
(23, 'seinal51@gmail.com', 'seinal51@gmail.com', '$2y$10$X3FTz6I4CmSCKmlz2FcRQe0v6XztCNN/5gBjmgPtsnRp3dcGiOyiq', 'member', 1, '2018-01-01', 0, 'MPQbBhImgM4UQDvLF2fkSkq7tmWwKEXKmkSixsh0IRupRE8Mdgjp17aUkoa7', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skp`
--
ALTER TABLE `skp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skp`
--
ALTER TABLE `skp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
