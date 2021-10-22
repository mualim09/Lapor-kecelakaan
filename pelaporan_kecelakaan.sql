-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 12:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelaporan_kecelakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_faskes`
--

CREATE TABLE `tb_faskes` (
  `id_faskes` int(10) NOT NULL,
  `id_jenis_faskes` int(10) NOT NULL,
  `nama_faskes` text NOT NULL,
  `alamat` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `status` enum('0','1') NOT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto_laporan`
--

CREATE TABLE `tb_foto_laporan` (
  `id_foto_laporan` int(10) NOT NULL,
  `id_laporan` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_faskes`
--

CREATE TABLE `tb_jenis_faskes` (
  `id_jenis_faskes` int(11) NOT NULL,
  `jenis_faskes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_tindakan_personil`
--

CREATE TABLE `tb_jenis_tindakan_personil` (
  `id_jenis_tindakan_personil` int(11) NOT NULL,
  `jenis_tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_kecelakaan`
--

CREATE TABLE `tb_kategori_kecelakaan` (
  `id_kategori_kecelakaan` int(11) NOT NULL,
  `kategori_kecelakaan` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_kecelakaan`
--

INSERT INTO `tb_kategori_kecelakaan` (`id_kategori_kecelakaan`, `kategori_kecelakaan`, `deskripsi`, `create_datetime`, `update_datetime`) VALUES
(1, 'Kecelakaan Tunggal', 'test', '2021-10-22 11:42:24', '2021-10-22 11:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_korban`
--

CREATE TABLE `tb_kategori_korban` (
  `id_kategori_korban` int(11) NOT NULL,
  `kategori_korban` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_laporan`
--

CREATE TABLE `tb_kategori_laporan` (
  `id_kategori_laporan` int(11) NOT NULL,
  `kategori_laporan` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  `update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_laporan`
--

INSERT INTO `tb_kategori_laporan` (`id_kategori_laporan`, `kategori_laporan`, `deskripsi`, `create_datetime`, `update_datetime`) VALUES
(1, 'Ringan', 'Kecelakaan yang mengakibatkan kerusakan Kendaraan dan/atau barang \r\n', NULL, NULL),
(2, 'Sedang', 'Kecelakaan yang mengakibatkan luka ringan dan kerusakan Kendaraan dan/atau barang. \r\n', NULL, NULL),
(3, 'Berat', 'Kecelakaan yang mengakibatkan korban meninggal dunia atau luka berat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_pelapor` int(10) NOT NULL,
  `id_kategori_laporan` int(10) NOT NULL,
  `id_kategori_kecelakaan` int(10) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `status` enum('0','1','2') NOT NULL,
  `verifikasi` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_korban`
--

CREATE TABLE `tb_laporan_korban` (
  `id_laporan_korban` int(10) NOT NULL,
  `id_laporan` int(10) NOT NULL,
  `id_kategori_korban` int(10) NOT NULL,
  `jumlah_korban` int(5) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `input_by` enum('Personil','Pelapor') NOT NULL,
  `id_user_input` int(10) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pangkat_personil`
--

CREATE TABLE `tb_pangkat_personil` (
  `id_pangkat_personil` int(11) NOT NULL,
  `pangkat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelapor`
--

CREATE TABLE `tb_pelapor` (
  `id_pelapor` int(10) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') DEFAULT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `google_id` text NOT NULL,
  `foto` text DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_personil`
--

CREATE TABLE `tb_personil` (
  `id_personil` int(10) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nrp` varchar(8) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_satker` int(10) NOT NULL,
  `id_pangkat` int(10) NOT NULL,
  `jabatan` text NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` text NOT NULL,
  `foto` text DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `status_akun` enum('0','1','','') NOT NULL,
  `aktif` enum('0','1') NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime DEFAULT NULL,
  `token_reset_password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_satker_personil`
--

CREATE TABLE `tb_satker_personil` (
  `id_satker_personil` int(11) NOT NULL,
  `nama_satker` text NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  `create_datetime` datetime NOT NULL,
  `update_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan_personil`
--

CREATE TABLE `tb_tindakan_personil` (
  `id_tindakan_personil` int(10) NOT NULL,
  `id_laporan` int(10) NOT NULL,
  `id_personil` int(10) NOT NULL,
  `id_jenis_tindakan_personil` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indexes for table `tb_foto_laporan`
--
ALTER TABLE `tb_foto_laporan`
  ADD PRIMARY KEY (`id_foto_laporan`);

--
-- Indexes for table `tb_jenis_faskes`
--
ALTER TABLE `tb_jenis_faskes`
  ADD PRIMARY KEY (`id_jenis_faskes`);

--
-- Indexes for table `tb_jenis_tindakan_personil`
--
ALTER TABLE `tb_jenis_tindakan_personil`
  ADD PRIMARY KEY (`id_jenis_tindakan_personil`);

--
-- Indexes for table `tb_kategori_kecelakaan`
--
ALTER TABLE `tb_kategori_kecelakaan`
  ADD PRIMARY KEY (`id_kategori_kecelakaan`);

--
-- Indexes for table `tb_kategori_korban`
--
ALTER TABLE `tb_kategori_korban`
  ADD PRIMARY KEY (`id_kategori_korban`);

--
-- Indexes for table `tb_kategori_laporan`
--
ALTER TABLE `tb_kategori_laporan`
  ADD PRIMARY KEY (`id_kategori_laporan`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_laporan_korban`
--
ALTER TABLE `tb_laporan_korban`
  ADD PRIMARY KEY (`id_laporan_korban`);

--
-- Indexes for table `tb_pangkat_personil`
--
ALTER TABLE `tb_pangkat_personil`
  ADD PRIMARY KEY (`id_pangkat_personil`);

--
-- Indexes for table `tb_pelapor`
--
ALTER TABLE `tb_pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- Indexes for table `tb_personil`
--
ALTER TABLE `tb_personil`
  ADD PRIMARY KEY (`id_personil`);

--
-- Indexes for table `tb_satker_personil`
--
ALTER TABLE `tb_satker_personil`
  ADD PRIMARY KEY (`id_satker_personil`);

--
-- Indexes for table `tb_tindakan_personil`
--
ALTER TABLE `tb_tindakan_personil`
  ADD PRIMARY KEY (`id_tindakan_personil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  MODIFY `id_faskes` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_foto_laporan`
--
ALTER TABLE `tb_foto_laporan`
  MODIFY `id_foto_laporan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jenis_faskes`
--
ALTER TABLE `tb_jenis_faskes`
  MODIFY `id_jenis_faskes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jenis_tindakan_personil`
--
ALTER TABLE `tb_jenis_tindakan_personil`
  MODIFY `id_jenis_tindakan_personil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori_kecelakaan`
--
ALTER TABLE `tb_kategori_kecelakaan`
  MODIFY `id_kategori_kecelakaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori_korban`
--
ALTER TABLE `tb_kategori_korban`
  MODIFY `id_kategori_korban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori_laporan`
--
ALTER TABLE `tb_kategori_laporan`
  MODIFY `id_kategori_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_laporan_korban`
--
ALTER TABLE `tb_laporan_korban`
  MODIFY `id_laporan_korban` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pangkat_personil`
--
ALTER TABLE `tb_pangkat_personil`
  MODIFY `id_pangkat_personil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelapor`
--
ALTER TABLE `tb_pelapor`
  MODIFY `id_pelapor` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_personil`
--
ALTER TABLE `tb_personil`
  MODIFY `id_personil` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_satker_personil`
--
ALTER TABLE `tb_satker_personil`
  MODIFY `id_satker_personil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tindakan_personil`
--
ALTER TABLE `tb_tindakan_personil`
  MODIFY `id_tindakan_personil` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
