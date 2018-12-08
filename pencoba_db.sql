-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 09:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pencoba_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` int(3) NOT NULL,
  `nik` bigint(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` int(1) NOT NULL,
  `pass_hash` varchar(50) NOT NULL,
  `pass_real` varchar(12) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idPegawai`, `nik`, `nama`, `jabatan`, `pass_hash`, `pass_real`, `tlp`, `status`) VALUES
(1, 11111, 'AdminPencoba', 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '085710509599', 1),
(7, 300319952017081003, 'Mas Arif', 0, 'e10adc3949ba59abbe56e057f20f883e', '123456', '081232229578', 1),
(8, 1234567891234567, 'Ryan', 0, '3fc0a7acf087f549ac2b266baf94b8b1', 'qwerty123', '0', 1),
(9, 123456, 'cahaya', 0, 'e10adc3949ba59abbe56e057f20f883e', '123456', '0862727272', 1),
(10, 197003182008012013, 'Sri Wahjoeni', 0, '5f4dcc3b5aa765d61d8327deb882cf99', 'password', '081333312097', 1),
(11, 123456788, 'ryan', 0, 'cd5bb2cb685acf51a5d152838b0c24c7', 'hehhehe', '0847124', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(4) NOT NULL,
  `noSurat` varchar(30) NOT NULL,
  `kategori` int(1) NOT NULL,
  `tgl` date NOT NULL,
  `tglSurat` date NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `statusTampil` int(1) NOT NULL,
  `fileSurat` varchar(100) NOT NULL,
  `sm_proses` varchar(100) NOT NULL,
  `sm_bidang` varchar(100) NOT NULL,
  `sk_bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `noSurat`, `kategori`, `tgl`, `tglSurat`, `pengirim`, `penerima`, `perihal`, `keterangan`, `statusTampil`, `fileSurat`, `sm_proses`, `sm_bidang`, `sk_bidang`) VALUES
(74, '005/10316/033/2018', 1, '2018-08-06', '2018-07-31', 'SEKDA PROP JATIM', 'Bakorwil', 'Undangan', 'Pembukaan pertandingan olahraga dan seni', 1, 'assets/DOKUMENSURAT/DAMPING_GUB_PEMBUKAAN_RAKOR_PROGRAM_BEKERJA_MENTAN_RI_07082018.pdf', 'ae,tu', 'sungram', '-'),
(75, '900/041/KPTS/213.1/2018', 2, '2018-01-02', '2018-01-02', 'Bakorwil', 'NURATI ENDAH ISWANTI, SH', 'SK PENUNJUKKAN PEJABAT PEMBUAT KOMITMEN (PPK)', 'PENGADAAN BARANG/JASA PEMERINTAH DI LINGKUNGAN BAKORWIL MALANG 2018', 0, 'assets/DOKUMENSURAT/900_041_213_1_2018_SK_PENUNJUKKAN_PPK.pdf', '-', '-', 'TU'),
(76, 'n an', 2, '2018-08-06', '2018-08-17', 'Bakorwil', 'j ad', 'j adf', 'j adc ', 1, 'assets/DOKUMENSURAT/BuktiPotong_900-1603-213_1-2018_001.pdf', '-', '-', 'TU'),
(77, '12', 2, '2018-11-13', '2018-11-14', 'Bakorwil', '2e1', '2e', 'r', 1, 'assets/DOKUMENSURAT/4a21336137f8cbba05a804fb30577bd1.pdf', '-', '-', 'TU'),
(78, 'jh', 2, '2018-11-13', '2018-11-21', 'Bakorwil', 'ygccvcq', 'tfft', 'rc', 1, 'assets/DOKUMENSURAT/4a21336137f8cbba05a804fb30577bd11.pdf', '-', '-', 'TU'),
(79, 'KSF ', 2, '2018-11-21', '2018-11-15', 'Bakorwil', 'KNF ', 'F ', 'KE F', 1, 'assets/DOKUMENSURAT/4a21336137f8cbba05a804fb30577bd12.pdf', '-', '-', 'Sarana Prasarana'),
(80, 'iji', 1, '2018-11-27', '2018-12-06', 'ij', 'Bakorwil', 'ij', 'ijm', 1, 'assets/DOKUMENSURAT/09_Diagram_Sequence.pdf', 'tu', 'sungram', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPegawai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
