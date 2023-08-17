-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 03:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_domisili`
--

CREATE TABLE `t_domisili` (
  `id_domisili` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status_pengajuan` enum('Di Proses','Di Terima','Di Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_domisili`
--

INSERT INTO `t_domisili` (`id_domisili`, `nik`, `tanggal_pengajuan`, `keperluan`, `status_pengajuan`) VALUES
(44, '6303120808010001', '2023-08-14', 'PENGAJUAN BEASISWA PENDIDIKAN', 'Di Proses'),
(45, '6303122808720003', '2023-08-15', 'MELAMAR PEKERJAAN', 'Di Proses'),
(46, '6303124206800002', '2023-08-14', 'MENGURUS AKTA KELAHIRAN', 'Di Proses'),
(47, '6303125210080001', '2023-08-16', 'PENDAFTARAN SEKOLAH', 'Di Proses'),
(48, '6312081010010001', '2023-08-14', 'MELAMAR PEKERJAAN', 'Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `t_kelakuan_baik`
--

CREATE TABLE `t_kelakuan_baik` (
  `id_kelakuan_baik` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `berkelakuan_baik` varchar(255) NOT NULL,
  `pecandu_narkoba` varchar(255) NOT NULL,
  `terlibat_pidana` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status_pengajuan` enum('Di Proses','Di Terima','Di Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kelakuan_baik`
--

INSERT INTO `t_kelakuan_baik` (`id_kelakuan_baik`, `nik`, `tanggal_pengajuan`, `berkelakuan_baik`, `pecandu_narkoba`, `terlibat_pidana`, `keperluan`, `status_pengajuan`) VALUES
(17, '6303120808010001', '2023-08-14', 'BAIK', 'TIDAK', 'TIDAK', 'MELAMAR PEKERJAAN', 'Di Proses'),
(18, '6312081010010001', '2023-08-15', 'BAIK', 'TIDAK', 'TIDAK', 'MELAMAR PEKERJAAN', 'Di Proses'),
(19, '6303125210080001', '2023-08-14', 'BAIK', 'TIDAK', 'TIDAK', 'MELAMAR PEKERJAAN', 'Di Proses'),
(20, '6303122808720003', '2023-08-16', 'BAIK', 'TIDAK', 'TIDAK', 'MELAMAR PEKERJAAN', 'Di Proses'),
(21, '6303124206800002', '2023-08-15', 'BAIK', 'TIDAK', 'TIDAK', 'MELAMAR PEKERJAAN', 'Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `t_kematian`
--

CREATE TABLE `t_kematian` (
  `id_kematian` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `id_kartukeluarga` int(11) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `hari` varchar(255) NOT NULL,
  `pukul` varchar(255) NOT NULL,
  `sebab_meninggal` varchar(255) NOT NULL,
  `meninggal_di` varchar(255) NOT NULL,
  `dimakamkan` varchar(255) NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `status_pengajuan` enum('Di Proses','Di Terima','Di Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kematian`
--

INSERT INTO `t_kematian` (`id_kematian`, `nik`, `id_kartukeluarga`, `tgl_pengajuan`, `hari`, `pukul`, `sebab_meninggal`, `meninggal_di`, `dimakamkan`, `tgl_meninggal`, `status_pengajuan`) VALUES
(20, '6303120808010001', 31, '2023-08-14', 'SABTU, 12 AGUSTUS 2023', '03.30', 'TERSENGAT LISTRIK', 'RUMAH SAKIT', 'KUBURAN MUSLIMIN TANAH ABANG', '2023-08-12', 'Di Proses'),
(21, '6303122808720003', 29, '2023-08-13', 'JUMAT, 11 AGUSTUS 2023', '14.30', 'SAKIT', 'RUMAH', 'KUBURAN MUSLIMIN TANAH ABANG', '2023-08-11', 'Di Proses'),
(22, '6312081010010001', 28, '2023-08-14', 'KAMIS, 10 AGUSTUS 2023', '23.00', 'KECELAKAAN', 'RUMAH SAKIT', 'KUBURAN MUSLIMIN TANAH ABANG', '2023-08-10', 'Di Proses'),
(23, '6303120808010001', 30, '2023-08-14', 'MINGGU,13 AGUSTUS 2023', '00.00', 'SAKIT', 'RUMAH SAKIT', 'KUBURAN MUSLIMIN TANAH ABANG', '2023-08-13', 'Di Proses'),
(24, '6303124206800002', 27, '2023-08-18', 'RABU,  16 AGUSTUS 2023', '11.30', 'SAKIT', 'RUMAH', 'KUBURAN MUSLIMIN TANAH ABANG', '2023-08-16', 'Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `t_keramaian`
--

CREATE TABLE `t_keramaian` (
  `id_keramaian` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `hari_tanggal` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `tempat_keramaian` varchar(255) NOT NULL,
  `hiburan` varchar(255) NOT NULL,
  `lama_acara` varchar(255) NOT NULL,
  `jumlah_org` varchar(255) NOT NULL,
  `status_pengajuan` enum('Di Proses','Di Terima','Di Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_keramaian`
--

INSERT INTO `t_keramaian` (`id_keramaian`, `nik`, `tanggal_pengajuan`, `hari_tanggal`, `waktu`, `tempat_keramaian`, `hiburan`, `lama_acara`, `jumlah_org`, `status_pengajuan`) VALUES
(25, '6303120808010001', '2023-08-14', '17 AGUSTUS 2023', '08.00 - SELESAI', 'LAPANGAN BOLA TANAH ABANG', 'ACARA TUJUH BELASAN', '1 HARI', '300', 'Di Proses'),
(26, '6303122808720003', '2023-08-14', '19 AGUSTUS 2023', '010.00 - SELESAI', 'TANAH ABANG', 'KUDA LUMPING', '1 HARI', '200', 'Di Proses'),
(27, '6303124206800002', '2023-08-15', '20 AGUSTUS 2023', '08.00 - SELESAI', 'TANAH ABANG', 'PERNIKAHAN', '1 HARI', '500', 'Di Proses'),
(28, '6303125210080001', '2023-08-14', '21 AGUSTUS 2023', '19.00 -  SELESAI', 'TANAH ABANG', 'PENTAS SENI', '1 HARI', '700', 'Di Proses'),
(29, '6312081010010001', '2023-08-14', '16 AGUSTUS 2023', '15.00- SELESAI', 'TANAH ABANG', 'MAULID AKBAR', '1 HARI', '1200', 'Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `t_kk`
--

CREATE TABLE `t_kk` (
  `id_kartukeluarga` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_kk` varchar(255) NOT NULL,
  `nik_kk` varchar(255) NOT NULL,
  `jenis_kel_kk` varchar(255) NOT NULL,
  `tgl_kk` varchar(255) NOT NULL,
  `agama_kk` varchar(255) NOT NULL,
  `pendidikan_kk` varchar(255) NOT NULL,
  `pekerjaan_kk` varchar(255) NOT NULL,
  `goldarah_kk` varchar(255) NOT NULL,
  `status_kawin_kk` varchar(255) NOT NULL,
  `tgl_prkwinan_kk` varchar(255) NOT NULL,
  `status_keluarga` varchar(255) NOT NULL,
  `kewarganegaraan_kk` varchar(255) NOT NULL,
  `alamat_kk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kk`
--

INSERT INTO `t_kk` (`id_kartukeluarga`, `nik`, `nama_kk`, `nik_kk`, `jenis_kel_kk`, `tgl_kk`, `agama_kk`, `pendidikan_kk`, `pekerjaan_kk`, `goldarah_kk`, `status_kawin_kk`, `tgl_prkwinan_kk`, `status_keluarga`, `kewarganegaraan_kk`, `alamat_kk`) VALUES
(27, '6303120808010001', 'RAMZI', '6303122808720003', 'LAKI LAKI', 'PEMATANG DANAU, 27 AGUSTUS 1972', 'ISLAM', 'SMA SEDERAJAT', 'KARYAWAN SWASTA', 'OA', 'KAWIN', '19 FEBRUARI 2000', 'AYAH', 'INDONESIA', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN'),
(28, '6303120808010001', 'SULASTRIANI', '6303124206800002', 'PEREMPUAN', 'BANJAR, 02 JUNI 1980', 'ISLAM', 'SMA SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'A', 'KAWIN', '19 FEBRUARI 2000', 'ISTRI', 'INDONESIA', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN'),
(29, '6303120808010001', 'MUHAMMAD HUZAIMI', '6303120808010001', 'LAKI LAKI', 'DANAU SALAK, 08 AGUSTUS 2001', 'ISLAM', 'SMA SEDERAJAT', 'MAHASISWA', 'A', 'BELUM KAWIN', '', 'ANAK', 'INDONESIA', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN'),
(30, '6303120808010001', 'TUTI DWI PRATIWI', '6312081010010001', 'PEREMPUAN', 'BANJARBARU, 10 OKTOBER 2001', 'ISLAM', 'SMA SEDERAJAT', 'MAHASISWA', 'A', 'BELUM KAWIN', '', 'ANAK', 'INDONESIA', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN'),
(31, '6303120808010001', 'RAHMI NOR DINA', '6303125210080001', 'PEREMPUAN', 'DANAU SALAK, 13 NOVEMBER 2007', 'ISLAM', 'SMA/SMK', 'PELAJAR', 'A', 'BELUM KAWIN', '', 'ANAK', 'INDONESIA', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN');

-- --------------------------------------------------------

--
-- Table structure for table `t_lampiran`
--

CREATE TABLE `t_lampiran` (
  `id_lampiran` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_lampiran`
--

INSERT INTO `t_lampiran` (`id_lampiran`, `nik`, `foto1`, `foto2`) VALUES
(8, '6303120808010001', 'IMG20230814171641[1].jpg', 'WhatsApp Image 2023-08-14 at 12.03.18.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t_pekerjaan`
--

CREATE TABLE `t_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `pekerjaan_skg` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status_pengajuan` enum('Di Proses','Di Terima','Di Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pekerjaan`
--

INSERT INTO `t_pekerjaan` (`id_pekerjaan`, `nik`, `tgl_pengajuan`, `pekerjaan_skg`, `keperluan`, `status_pengajuan`) VALUES
(5, '6303120808010001', '2023-08-14', 'TIDAK BEKERJA', 'MELAMAR PEKERJAAN', 'Di Proses'),
(6, '6303122808720003', '2023-08-14', 'TIDAK BEKERJA', 'MELAMAR PEKERJAAN', 'Di Proses'),
(7, '6303124206800002', '2023-08-15', 'TIDAK BEKERJA', 'MELAMAR PEKERJAAN', 'Di Proses'),
(8, '6303125210080001', '2023-08-13', 'TIDAK BEKERJA', 'MELAMAR PEKERJAAN', 'Di Proses'),
(9, '6312081010010001', '2023-08-14', 'TIDAK BEKERJA', 'MELAMAR PEKERJAAN', 'Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `t_penduduk`
--

CREATE TABLE `t_penduduk` (
  `nik` varchar(255) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_tgl` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status_kawin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email_p` varchar(255) NOT NULL,
  `alamat_p` varchar(255) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_penduduk`
--

INSERT INTO `t_penduduk` (`nik`, `no_kk`, `nama`, `tempat_tgl`, `jenis_kelamin`, `status_kawin`, `pekerjaan`, `no_hp`, `email_p`, `alamat_p`, `foto`, `username`, `password`) VALUES
('6303120808010001', '6303121003080175', 'MUHAMMAD HUZAIMI', 'DANAU SALAK, 08 AGUSTUS 2001', 'LAKI LAKI', 'BELUM KAWIN', 'Mh', '081523445512', 'huzaee@gmail.com', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN', 'WhatsApp Image 2022-12-29 at 11.14.50.jpeg', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN'),
('6303122808720003', '6303121003080175', 'RAMZI', 'PEMATANG DANAU, 27 AGUSTUS 1972', 'LAKI LAKI', 'KAWIN', 'KARYAWAN SWASTA', '082153519550', 'ramzi@gmail.com', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN', 'WhatsApp Image 2023-08-14 at 12.01.57.jpeg', 'RAMZI', 'RAMZI'),
('6303124206800002', '6303121003080175', 'SULASTRIANI', 'BANJAR, 02 JUNI 1980', 'PEREMPUAN', 'KAWIN', 'MENGURUS RUMAH TANGGA', '085750632892', 'sulastri@gmail.com', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN', 'WhatsApp Image 2023-08-14 at 12.01.56.jpeg', 'SULASTRIANI', 'SULASTRIANI'),
('6303125210080001', '6303121003080175', 'RAHMI NOR DINA', 'TANAH ABANG, 12 OKTOBER 2003', 'PEREMPUAN', 'BELUM KAWIN', 'PELAJAR', '082151657839', 'dina@gmail.com', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN', 'WhatsApp Image 2023-08-14 at 12.02.36.jpeg', 'DINA', 'DINA'),
('6312081010010001', '6303121003080175', 'TUTI DWI PRATIWI', 'BANJARBARU, 10 OKTOBER 2001', 'PEREMPUAN', 'BELUM KAWIN', 'MAHASISWA', '08875625302', 'tuutidwi@gmail.com', 'TANAH ABANG, Rt 07/Rw 04 ,No 22 KEC.MATARAMAN', 'IMG20230814170710[1].jpg', 'TUTI DWI', 'TUTI DWI');

-- --------------------------------------------------------

--
-- Table structure for table `t_tidak_mampu`
--

CREATE TABLE `t_tidak_mampu` (
  `id_tidak_mampu` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `penghasilan` varchar(255) NOT NULL,
  `status_pengajuan` enum('Di Proses','Di Terima','Di Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tidak_mampu`
--

INSERT INTO `t_tidak_mampu` (`id_tidak_mampu`, `nik`, `tanggal_pengajuan`, `keperluan`, `penghasilan`, `status_pengajuan`) VALUES
(17, '6303120808010001', '2023-08-14', 'BEASISWA PENDIDIKAN', '1000000', 'Di Proses'),
(18, '6303124206800002', '2023-08-16', 'PENGOBATAN', '500000', 'Di Proses'),
(19, '6303122808720003', '2023-08-14', 'KEPERLUAN BLT', '1000000', 'Di Proses'),
(20, '6303125210080001', '2023-08-12', 'KEPERLUAN BLT', '700000', 'Di Proses'),
(21, '6312081010010001', '2023-08-14', 'BEASISWA PENDIDIKAN', '1000000', 'Di Proses');

-- --------------------------------------------------------

--
-- Table structure for table `t_usaha`
--

CREATE TABLE `t_usaha` (
  `id_usaha` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `jenis_usaha` varchar(255) NOT NULL,
  `mulai_usaha` varchar(255) NOT NULL,
  `alamat_usaha` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status_pengajuan` enum('Menunggu','Di Terima','Di Tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_usaha`
--

INSERT INTO `t_usaha` (`id_usaha`, `nik`, `tanggal_pengajuan`, `nama_usaha`, `jenis_usaha`, `mulai_usaha`, `alamat_usaha`, `keperluan`, `status_pengajuan`) VALUES
(14, '6303120808010001', '2023-08-14', 'SURYA ELEKTRONIK', 'PERDAGANGAN ELEKTRONIK', '23 APRIL 2020', 'BAWAHAN SELAN', 'PENGAJUAN PINJAMAN', 'Di Terima'),
(15, '6303122808720003', '2023-08-14', 'TOKO JAYA BARU', 'PERDDAGANGAN BAHAN BANGUNAN', '23 MARET 2020', 'MATARAMAN', 'PENGAJUAN PINJAMAN', 'Di Terima'),
(16, '6312081010010001', '2023-08-15', 'APOTEK PANDA', 'TOKO OBAT KESEHATAN', '23 FEBRUARI 2022', 'DANAU SALAK', 'IZIN USAHA', 'Di Terima'),
(17, '6303124206800002', '2023-08-16', 'PONSEL BERKAH', 'JASA KONTER HP', '23 OKTOBER 2022', 'MATARAMAN', 'IZIN USAHA', 'Di Terima'),
(18, '6303125210080001', '2023-08-14', 'BEBEK SINJAI', 'KONSUMSI', '17 JANUARI 2023', 'SUNGAI ANING', 'IZIN USAHA', 'Di Terima');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_domisili`
--
ALTER TABLE `t_domisili`
  ADD PRIMARY KEY (`id_domisili`),
  ADD KEY `nama` (`nik`);

--
-- Indexes for table `t_kelakuan_baik`
--
ALTER TABLE `t_kelakuan_baik`
  ADD PRIMARY KEY (`id_kelakuan_baik`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `t_kematian`
--
ALTER TABLE `t_kematian`
  ADD PRIMARY KEY (`id_kematian`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_kartukeluarga` (`id_kartukeluarga`),
  ADD KEY `id_kartukeluarga_2` (`id_kartukeluarga`);

--
-- Indexes for table `t_keramaian`
--
ALTER TABLE `t_keramaian`
  ADD PRIMARY KEY (`id_keramaian`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `t_kk`
--
ALTER TABLE `t_kk`
  ADD PRIMARY KEY (`id_kartukeluarga`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `t_lampiran`
--
ALTER TABLE `t_lampiran`
  ADD PRIMARY KEY (`id_lampiran`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `t_pekerjaan`
--
ALTER TABLE `t_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `t_tidak_mampu`
--
ALTER TABLE `t_tidak_mampu`
  ADD PRIMARY KEY (`id_tidak_mampu`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `t_usaha`
--
ALTER TABLE `t_usaha`
  ADD PRIMARY KEY (`id_usaha`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_domisili`
--
ALTER TABLE `t_domisili`
  MODIFY `id_domisili` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `t_kelakuan_baik`
--
ALTER TABLE `t_kelakuan_baik`
  MODIFY `id_kelakuan_baik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_kematian`
--
ALTER TABLE `t_kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `t_keramaian`
--
ALTER TABLE `t_keramaian`
  MODIFY `id_keramaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `t_kk`
--
ALTER TABLE `t_kk`
  MODIFY `id_kartukeluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `t_lampiran`
--
ALTER TABLE `t_lampiran`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_pekerjaan`
--
ALTER TABLE `t_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_tidak_mampu`
--
ALTER TABLE `t_tidak_mampu`
  MODIFY `id_tidak_mampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_usaha`
--
ALTER TABLE `t_usaha`
  MODIFY `id_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_domisili`
--
ALTER TABLE `t_domisili`
  ADD CONSTRAINT `t_domisili_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `t_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_kelakuan_baik`
--
ALTER TABLE `t_kelakuan_baik`
  ADD CONSTRAINT `t_kelakuan_baik_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `t_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_kematian`
--
ALTER TABLE `t_kematian`
  ADD CONSTRAINT `t_kematian_ibfk_2` FOREIGN KEY (`id_kartukeluarga`) REFERENCES `t_kk` (`id_kartukeluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_keramaian`
--
ALTER TABLE `t_keramaian`
  ADD CONSTRAINT `t_keramaian_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `t_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pekerjaan`
--
ALTER TABLE `t_pekerjaan`
  ADD CONSTRAINT `t_pekerjaan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `t_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_tidak_mampu`
--
ALTER TABLE `t_tidak_mampu`
  ADD CONSTRAINT `t_tidak_mampu_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `t_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_usaha`
--
ALTER TABLE `t_usaha`
  ADD CONSTRAINT `t_usaha_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `t_penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
