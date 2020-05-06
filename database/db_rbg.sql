-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 05:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rbg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `time_in` time(6) NOT NULL,
  `time_out` time(6) NOT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `hrg_pokok` int(20) NOT NULL,
  `hrg_jual` int(20) NOT NULL,
  `tgl_exp` date DEFAULT NULL,
  `stok` int(20) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `id_pegawai`, `nama_brg`, `hrg_pokok`, `hrg_jual`, `tgl_exp`, `stok`, `ket`, `kategori`) VALUES
(1, 1, 'aromaterapy', 20000, 25000, '2020-05-09', 10, '', ''),
(2, 2, 'minyak bidara', 5000, 7000, '2020-05-21', 25, '', 'Reseller');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `gapok1` float DEFAULT NULL,
  `gapok2` float DEFAULT NULL,
  `gapok3` float DEFAULT NULL,
  `tunj_jab` float DEFAULT NULL,
  `herbal` float DEFAULT NULL,
  `homecare` float DEFAULT NULL,
  `tunj_khitan` float DEFAULT NULL,
  `tunj_pijat` float DEFAULT NULL,
  `jumlah_pendapatan` float DEFAULT NULL,
  `peminjaman` float DEFAULT NULL,
  `tdk_hadir` float DEFAULT NULL,
  `terlambat` float DEFAULT NULL,
  `jumlah_potongan` float DEFAULT NULL,
  `gaji_bersih` float DEFAULT NULL,
  `total_gaji_pokok` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `kode_layanan` int(10) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL,
  `jenis_terapi` varchar(20) NOT NULL,
  `tarif` int(15) NOT NULL,
  `metode` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`kode_layanan`, `nama_layanan`, `jenis_layanan`, `jenis_terapi`, `tarif`, `metode`) VALUES
(1, 'bekam', 'homecare di klinik', 'homecare', 15000, '4'),
(2, 'ruqyah', 'normal di klinik', 'normal', 50000, '4'),
(3, 'sunat', 'normal di klinik', 'normal', 100000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(10) NOT NULL,
  `tgl_regis_pasien` date NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nik` int(20) NOT NULL,
  `jk` varchar(3) NOT NULL,
  `umur` int(3) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `tgl_regis_pasien`, `nama_pasien`, `nik`, `jk`, `umur`, `no_hp`, `pekerjaan`, `alamat`) VALUES
(1, '2020-05-08', 'yakali', 1234134, 'L', 67, '7867', 'web developer ', 'ung'),
(2, '2020-03-08', 'syafrudin', 12345678, 'L', 20, '33535433', 'mahasiswa', 'gelandangan'),
(3, '2020-05-07', 'baban', 25456434, 'P', 22, '76353453', 'developer', 'jl.sudirman'),
(4, '2020-05-07', 'yah dia lagi', 13214, 'L', 23, '141451', 'bengong', 'akherat'),
(5, '2020-05-06', 'Firmansyah', 12345, 'L', 21, '123456', 'Mahasiswa', 'Bolsel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `jabatan`) VALUES
(1, 'wer', '022013022018', 'Manager'),
(2, 'syafrudin', '022013022018', 'Terapis'),
(3, 'adam', '022013022018', 'Terapis'),
(4, 'herp', '022013022018', 'Customer Service'),
(5, 'ambar', '022013022018', 'Terapis'),
(6, 'budi', '022013022018', 'Customer Service'),
(7, 'syahrul', '521317910', 'Owner'),
(8, 'syahrul', '521417001', 'Terapis'),
(15, 'bapak bapak', '2154543', 'Manager'),
(17, 'syahrul', '44554535', 'Owner'),
(18, '2gadsfa', '13123', 'Owner'),
(19, 'aboga', '12345', 'Manager'),
(20, 'ert', '12312', 'Owner'),
(21, 'Odong', '12345', 'Customer Service'),
(22, 'Ojol', '23456', 'Customer Service');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengadaan`
--

CREATE TABLE `tb_pengadaan` (
  `id_beli` int(10) NOT NULL,
  `tgl_beli` datetime(6) NOT NULL,
  `id_brg` int(10) NOT NULL,
  `qty_beli` int(20) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_jual` int(10) NOT NULL,
  `tgl_jual` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `NamaLengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id_role` int(11) NOT NULL,
  `is_aktiv` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `NamaLengkap`, `username`, `password`, `id_role`, `is_aktiv`) VALUES
(1, 'Firmansyah', 'admin', 'admin', 1, 1),
(2, 'firmansyah', 'user', '$2y$10$iRBVy0uI/tn6evhgt8lfG.Une2CM/Vg.yhwpLZgXgPzaqz/9Zdzf.', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`kode_layanan`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_jual` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
