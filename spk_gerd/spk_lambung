-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2022 pada 12.59
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_lambung`
--
CREATE DATABASE IF NOT EXISTS `spk_lambung` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `spk_lambung`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tgejala`
--

CREATE TABLE `tgejala` (
  `kode_gejala` varchar(100) NOT NULL,
  `nama_gejala` text NOT NULL,
  `bobot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tgejala`
--

INSERT INTO `tgejala` (`kode_gejala`, `nama_gejala`, `bobot`) VALUES
('G01', 'Rasa tidak enak didaerah perut', '0,8'),
('G02', 'Perut Terasa Penuh', '0,3'),
('G03', 'Perut terasa kembung', '0,4'),
('G04', 'Berkurangnya nafsu makan', '0,7'),
('G05', 'Rasa mual diperut', '0,8'),
('G06', 'Rasa Ingin Muntah', '0,3'),
('G07', 'Nyeri pada ulu hati', '0,15'),
('G08', 'Rasa Sakit saat menelan makanan', '0,15'),
('G09', 'Cepat Kenyang Saat makan', '0,3'),
('G10', 'Nyeri dibelakang tulang dada', '0,4'),
('G11', 'Perasaan panas dibagian dada dan perut', '0,9'),
('G12', 'Reguritas', '0,8'),
('G13', 'Rasa nyeri terbakar dibelakang tulang dada', '0,15'),
('G14', 'Leher terasa sakit', '0,8'),
('G15', 'Mulut terasa asam', '0,4'),
('G16', 'Tubuh terasa lemas', '0,3'),
('G17', 'Turunnya nafsu makan', '0,4'),
('G18', 'Mulut terasa pahit', '0,4'),
('G19', 'Mual dan muntah cairan kuning', '0,15'),
('G20', 'Suhu badan naik', '0,4'),
('G21', 'Tenggorokan terasa sakit', '0,8'),
('G22', 'Nyeri perut pada bagian atas', '0,8'),
('G23', 'Perut terasa mulas ', '0,4'),
('G24', 'Penurunan berat badan ', '0,5'),
('G25', 'Kulit berubah warna menjadi kuning', '0,9'),
('G26', 'Terdapat darah pada tinja', '0,15'),
('G27', 'Sesak nafas', '0,15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkeputusan`
--

CREATE TABLE `tkeputusan` (
  `kd_konsultasi` varchar(255) DEFAULT NULL,
  `skor_perhitungan` varchar(255) DEFAULT NULL,
  `kode_penyakit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tkeputusan`
--

INSERT INTO `tkeputusan` (`kd_konsultasi`, `skor_perhitungan`, `kode_penyakit`) VALUES
('SOLH-0001', '12.75', 'P03'),
('SOLH-0002', '60', 'P01'),
('SOLH-0003', '60', 'P01'),
('SOLH-0004', '69', 'P01'),
('SOLH-0005', '69', 'P01'),
('SOLH-0006', '66', 'P01'),
('SOLH-0007', '69', 'P01'),
('SOLH-0008', '69', 'P01'),
('SOLH-0009', '60', 'P01'),
('SOLH-0010', '60', 'P01'),
('SOLH-0011', '60', 'P01'),
('SOLH-0012', '60', 'P01'),
('SOLH-0013', '72', 'P01'),
('SOLH-0013', '34', 'P02'),
('SOLH-0013', '24', 'P03'),
('SOLH-0014', '72', 'P01'),
('SOLH-0014', '34', 'P02'),
('SOLH-0014', '24', 'P03'),
('SOLH-0015', '72', 'P01'),
('SOLH-0015', '12', 'P02'),
('SOLH-0015', '12.75', 'P03'),
('SOLH-0016', '72', 'P01'),
('SOLH-0016', '21', 'P02'),
('SOLH-0016', '24', 'P03'),
('SOLH-0017', '72', 'P01'),
('SOLH-0017', '21', 'P02'),
('SOLH-0017', '24', 'P03'),
('SOLH-0018', '64', 'P01'),
('SOLH-0018', '40', 'P02'),
('SOLH-0018', '114.75', 'P03'),
('SOLH-0019', '64', 'P01'),
('SOLH-0019', '40', 'P02'),
('SOLH-0019', '114.75', 'P03'),
('SOLH-0020', '64', 'P01'),
('SOLH-0020', '40', 'P02'),
('SOLH-0020', '114.75', 'P03'),
('SOLH-0021', '64', 'P01'),
('SOLH-0021', '40', 'P02'),
('SOLH-0021', '114.75', 'P03'),
('SOLH-0022', '72', 'P01'),
('SOLH-0022', '21', 'P02'),
('SOLH-0023', '72', 'P01'),
('SOLH-0023', '40', 'P02'),
('SOLH-0023', '12.75', 'P03'),
('SOLH-0024', '72', 'P01'),
('SOLH-0025', '72', 'P01'),
('SOLH-0025', '24', 'P03'),
('SOLH-0026', '196', 'P01'),
('SOLH-0026', '12', 'P02'),
('SOLH-0027', '195.5', 'P03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkonsultasi_h`
--

CREATE TABLE `tkonsultasi_h` (
  `kd_konsultasi` varchar(255) NOT NULL,
  `nama_pasien` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `tgl_input` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tkonsultasi_h`
--

INSERT INTO `tkonsultasi_h` (`kd_konsultasi`, `nama_pasien`, `alamat`, `tgl_lahir`, `no_hp`, `tgl_input`) VALUES
('SOLH-0001', 'adasd', 'asd', '2022-11-18', '0800', '2022-11-08'),
('SOLH-0002', 'sadsad', 'asdasd', '2022-11-16', '123213', '2022-11-08'),
('SOLH-0003', 'sadsad', 'asdasd', '2022-11-16', '123213', '2022-11-08'),
('SOLH-0004', 'asdsa', 'wdasd', '2022-12-31', '23213', '2022-11-08'),
('SOLH-0005', 'asdsa', 'wdasd', '2022-12-31', '23213', '2022-11-08'),
('SOLH-0006', 'dasd', 'sdsad', '2022-12-30', '23213', '2022-11-08'),
('SOLH-0007', 'asdsad', 'dsad', '2022-12-31', '123213213', '2022-11-08'),
('SOLH-0008', 'adsad', 'sadasd', '2022-12-31', '123213', '2022-11-08'),
('SOLH-0009', 'asdsad', 'asdasdasd', '2022-12-31', '21323', '2022-11-08'),
('SOLH-0010', 'asdsad', 'asdsad', '2022-12-31', '213213', '2022-11-08'),
('SOLH-0011', 'asdsad', 'asdsad', '2022-12-31', '213213', '2022-11-08'),
('SOLH-0012', 'afasfas', 'dsad', '2022-12-31', '123123', '2022-11-08'),
('SOLH-0013', '', '', '0000-00-00', '', '2022-11-08'),
('SOLH-0014', '', '', '0000-00-00', '', '2022-11-08'),
('SOLH-0015', 'adsd', 'asdasd', '2022-12-31', '13123', '2022-11-08'),
('SOLH-0016', 'asdsad', 'sadasd', '2022-11-15', '12321321', '2022-11-08'),
('SOLH-0017', '', '', '0000-00-00', '', '2022-11-08'),
('SOLH-0018', 'asdsad', 'asdsa', '2022-11-17', '213213213', '2022-11-08'),
('SOLH-0019', 'asdsad', 'asdsa', '2022-11-17', '213213213', '2022-11-08'),
('SOLH-0020', 'asdsad', 'asdsa', '2022-11-17', '213213213', '2022-11-08'),
('SOLH-0021', 'asdsad', 'asdsa', '2022-11-17', '213213213', '2022-11-08'),
('SOLH-0022', 'adsadsadsa', 'adsad', '2022-11-16', '3123213', '2022-11-08'),
('SOLH-0023', 'dasdsad', 'dsad', '2022-11-15', '1232131', '2022-11-08'),
('SOLH-0024', 'coba', 'asdasd', '2022-12-31', '321321', '2022-11-10'),
('SOLH-0025', 'sadsad', 'asdsa', '2022-11-17', '132213', '2022-11-10'),
('SOLH-0026', 'CEK', 'sdasd', '2022-12-31', '3123213', '2022-11-11'),
('SOLH-0027', 'uyuy', 'dfsf', '2022-12-31', '3123213', '2022-11-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkonsul_d`
--

CREATE TABLE `tkonsul_d` (
  `kd_konsul_d` varchar(12) NOT NULL,
  `kd_konsul_h` varchar(12) NOT NULL,
  `kd_gejala` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tkonsul_d`
--

INSERT INTO `tkonsul_d` (`kd_konsul_d`, `kd_konsul_h`, `kd_gejala`) VALUES
('SOLD-0001', 'SOLH-0001', 'G13'),
('SOLD-0002', 'SOLH-0001', 'G22'),
('SOLD-0003', 'SOLH-0001', 'G23'),
('SOLD-0004', 'SOLH-0001', 'G24'),
('SOLD-0005', 'SOLH-0002', 'G01'),
('SOLD-0006', 'SOLH-0002', 'G02'),
('SOLD-0007', 'SOLH-0002', 'G03'),
('SOLD-0008', 'SOLH-0002', 'G04'),
('SOLD-0009', 'SOLH-0002', 'G05'),
('SOLD-0010', 'SOLH-0003', 'G01'),
('SOLD-0011', 'SOLH-0003', 'G02'),
('SOLD-0012', 'SOLH-0003', 'G03'),
('SOLD-0013', 'SOLH-0003', 'G04'),
('SOLD-0014', 'SOLH-0003', 'G05'),
('SOLD-0015', 'SOLH-0004', 'G01'),
('SOLD-0016', 'SOLH-0004', 'G02'),
('SOLD-0017', 'SOLH-0004', 'G03'),
('SOLD-0018', 'SOLH-0004', 'G04'),
('SOLD-0019', 'SOLH-0004', 'G05'),
('SOLD-0020', 'SOLH-0004', 'G06'),
('SOLD-0021', 'SOLH-0004', 'G08'),
('SOLD-0022', 'SOLH-0005', 'G01'),
('SOLD-0023', 'SOLH-0005', 'G02'),
('SOLD-0024', 'SOLH-0005', 'G03'),
('SOLD-0025', 'SOLH-0005', 'G04'),
('SOLD-0026', 'SOLH-0005', 'G05'),
('SOLD-0027', 'SOLH-0005', 'G06'),
('SOLD-0028', 'SOLH-0005', 'G08'),
('SOLD-0029', 'SOLH-0006', 'G01'),
('SOLD-0030', 'SOLH-0006', 'G02'),
('SOLD-0031', 'SOLH-0006', 'G03'),
('SOLD-0032', 'SOLH-0006', 'G04'),
('SOLD-0033', 'SOLH-0006', 'G05'),
('SOLD-0034', 'SOLH-0006', 'G06'),
('SOLD-0035', 'SOLH-0007', 'G01'),
('SOLD-0036', 'SOLH-0007', 'G02'),
('SOLD-0037', 'SOLH-0007', 'G03'),
('SOLD-0038', 'SOLH-0007', 'G04'),
('SOLD-0039', 'SOLH-0007', 'G05'),
('SOLD-0040', 'SOLH-0007', 'G06'),
('SOLD-0041', 'SOLH-0007', 'G08'),
('SOLD-0042', 'SOLH-0008', 'G01'),
('SOLD-0043', 'SOLH-0008', 'G02'),
('SOLD-0044', 'SOLH-0008', 'G03'),
('SOLD-0045', 'SOLH-0008', 'G04'),
('SOLD-0046', 'SOLH-0008', 'G05'),
('SOLD-0047', 'SOLH-0008', 'G06'),
('SOLD-0048', 'SOLH-0008', 'G07'),
('SOLD-0049', 'SOLH-0009', 'G01'),
('SOLD-0050', 'SOLH-0009', 'G02'),
('SOLD-0051', 'SOLH-0009', 'G03'),
('SOLD-0052', 'SOLH-0009', 'G04'),
('SOLD-0053', 'SOLH-0009', 'G05'),
('SOLD-0054', 'SOLH-0010', 'G01'),
('SOLD-0055', 'SOLH-0010', 'G02'),
('SOLD-0056', 'SOLH-0010', 'G03'),
('SOLD-0057', 'SOLH-0010', 'G04'),
('SOLD-0058', 'SOLH-0010', 'G05'),
('SOLD-0059', 'SOLH-0011', 'G01'),
('SOLD-0060', 'SOLH-0011', 'G02'),
('SOLD-0061', 'SOLH-0011', 'G03'),
('SOLD-0062', 'SOLH-0011', 'G04'),
('SOLD-0063', 'SOLH-0011', 'G05'),
('SOLD-0064', 'SOLH-0012', 'G01'),
('SOLD-0065', 'SOLH-0012', 'G02'),
('SOLD-0066', 'SOLH-0012', 'G03'),
('SOLD-0067', 'SOLH-0012', 'G04'),
('SOLD-0068', 'SOLH-0012', 'G05'),
('SOLD-0069', 'SOLH-0013', 'G01'),
('SOLD-0070', 'SOLH-0013', 'G02'),
('SOLD-0071', 'SOLH-0013', 'G03'),
('SOLD-0072', 'SOLH-0013', 'G04'),
('SOLD-0073', 'SOLH-0013', 'G05'),
('SOLD-0074', 'SOLH-0013', 'G06'),
('SOLD-0075', 'SOLH-0013', 'G07'),
('SOLD-0076', 'SOLH-0013', 'G08'),
('SOLD-0077', 'SOLH-0013', 'G10'),
('SOLD-0078', 'SOLH-0013', 'G11'),
('SOLD-0079', 'SOLH-0013', 'G12'),
('SOLD-0080', 'SOLH-0013', 'G14'),
('SOLD-0081', 'SOLH-0013', 'G15'),
('SOLD-0082', 'SOLH-0014', 'G01'),
('SOLD-0083', 'SOLH-0014', 'G02'),
('SOLD-0084', 'SOLH-0014', 'G03'),
('SOLD-0085', 'SOLH-0014', 'G04'),
('SOLD-0086', 'SOLH-0014', 'G05'),
('SOLD-0087', 'SOLH-0014', 'G06'),
('SOLD-0088', 'SOLH-0014', 'G07'),
('SOLD-0089', 'SOLH-0014', 'G08'),
('SOLD-0090', 'SOLH-0014', 'G10'),
('SOLD-0091', 'SOLH-0014', 'G11'),
('SOLD-0092', 'SOLH-0014', 'G12'),
('SOLD-0093', 'SOLH-0014', 'G14'),
('SOLD-0094', 'SOLH-0014', 'G15'),
('SOLD-0095', 'SOLH-0015', 'G01'),
('SOLD-0096', 'SOLH-0015', 'G02'),
('SOLD-0097', 'SOLH-0015', 'G03'),
('SOLD-0098', 'SOLH-0015', 'G04'),
('SOLD-0099', 'SOLH-0015', 'G05'),
('SOLD-0100', 'SOLH-0015', 'G06'),
('SOLD-0101', 'SOLH-0015', 'G07'),
('SOLD-0102', 'SOLH-0015', 'G08'),
('SOLD-0103', 'SOLH-0015', 'G09'),
('SOLD-0104', 'SOLH-0015', 'G11'),
('SOLD-0105', 'SOLH-0015', 'G13'),
('SOLD-0106', 'SOLH-0015', 'G14'),
('SOLD-0107', 'SOLH-0016', 'G01'),
('SOLD-0108', 'SOLH-0016', 'G02'),
('SOLD-0109', 'SOLH-0016', 'G03'),
('SOLD-0110', 'SOLH-0016', 'G04'),
('SOLD-0111', 'SOLH-0016', 'G05'),
('SOLD-0112', 'SOLH-0016', 'G06'),
('SOLD-0113', 'SOLH-0016', 'G07'),
('SOLD-0114', 'SOLH-0016', 'G08'),
('SOLD-0115', 'SOLH-0016', 'G09'),
('SOLD-0116', 'SOLH-0016', 'G10'),
('SOLD-0117', 'SOLH-0016', 'G14'),
('SOLD-0118', 'SOLH-0016', 'G15'),
('SOLD-0119', 'SOLH-0016', 'G16'),
('SOLD-0120', 'SOLH-0017', 'G01'),
('SOLD-0121', 'SOLH-0017', 'G02'),
('SOLD-0122', 'SOLH-0017', 'G03'),
('SOLD-0123', 'SOLH-0017', 'G04'),
('SOLD-0124', 'SOLH-0017', 'G05'),
('SOLD-0125', 'SOLH-0017', 'G06'),
('SOLD-0126', 'SOLH-0017', 'G07'),
('SOLD-0127', 'SOLH-0017', 'G08'),
('SOLD-0128', 'SOLH-0017', 'G09'),
('SOLD-0129', 'SOLH-0017', 'G14'),
('SOLD-0130', 'SOLH-0017', 'G16'),
('SOLD-0131', 'SOLH-0017', 'G17'),
('SOLD-0132', 'SOLH-0018', 'G01'),
('SOLD-0133', 'SOLH-0018', 'G02'),
('SOLD-0134', 'SOLH-0018', 'G04'),
('SOLD-0135', 'SOLH-0018', 'G05'),
('SOLD-0136', 'SOLH-0018', 'G06'),
('SOLD-0137', 'SOLH-0018', 'G07'),
('SOLD-0138', 'SOLH-0018', 'G08'),
('SOLD-0139', 'SOLH-0018', 'G09'),
('SOLD-0140', 'SOLH-0018', 'G10'),
('SOLD-0141', 'SOLH-0018', 'G11'),
('SOLD-0142', 'SOLH-0018', 'G12'),
('SOLD-0143', 'SOLH-0018', 'G13'),
('SOLD-0144', 'SOLH-0018', 'G14'),
('SOLD-0145', 'SOLH-0018', 'G15'),
('SOLD-0146', 'SOLH-0018', 'G16'),
('SOLD-0147', 'SOLH-0018', 'G17'),
('SOLD-0148', 'SOLH-0018', 'G18'),
('SOLD-0149', 'SOLH-0019', 'G01'),
('SOLD-0150', 'SOLH-0019', 'G02'),
('SOLD-0151', 'SOLH-0019', 'G04'),
('SOLD-0152', 'SOLH-0019', 'G05'),
('SOLD-0153', 'SOLH-0019', 'G06'),
('SOLD-0154', 'SOLH-0019', 'G07'),
('SOLD-0155', 'SOLH-0019', 'G08'),
('SOLD-0156', 'SOLH-0019', 'G09'),
('SOLD-0157', 'SOLH-0019', 'G10'),
('SOLD-0158', 'SOLH-0019', 'G11'),
('SOLD-0159', 'SOLH-0019', 'G12'),
('SOLD-0160', 'SOLH-0019', 'G13'),
('SOLD-0161', 'SOLH-0019', 'G14'),
('SOLD-0162', 'SOLH-0019', 'G15'),
('SOLD-0163', 'SOLH-0019', 'G16'),
('SOLD-0164', 'SOLH-0019', 'G17'),
('SOLD-0165', 'SOLH-0019', 'G18'),
('SOLD-0166', 'SOLH-0020', 'G01'),
('SOLD-0167', 'SOLH-0020', 'G02'),
('SOLD-0168', 'SOLH-0020', 'G04'),
('SOLD-0169', 'SOLH-0020', 'G05'),
('SOLD-0170', 'SOLH-0020', 'G06'),
('SOLD-0171', 'SOLH-0020', 'G07'),
('SOLD-0172', 'SOLH-0020', 'G08'),
('SOLD-0173', 'SOLH-0020', 'G09'),
('SOLD-0174', 'SOLH-0020', 'G10'),
('SOLD-0175', 'SOLH-0020', 'G11'),
('SOLD-0176', 'SOLH-0020', 'G12'),
('SOLD-0177', 'SOLH-0020', 'G13'),
('SOLD-0178', 'SOLH-0020', 'G14'),
('SOLD-0179', 'SOLH-0020', 'G15'),
('SOLD-0180', 'SOLH-0020', 'G16'),
('SOLD-0181', 'SOLH-0020', 'G17'),
('SOLD-0182', 'SOLH-0020', 'G18'),
('SOLD-0183', 'SOLH-0021', 'G01'),
('SOLD-0184', 'SOLH-0021', 'G02'),
('SOLD-0185', 'SOLH-0021', 'G04'),
('SOLD-0186', 'SOLH-0021', 'G05'),
('SOLD-0187', 'SOLH-0021', 'G06'),
('SOLD-0188', 'SOLH-0021', 'G07'),
('SOLD-0189', 'SOLH-0021', 'G08'),
('SOLD-0190', 'SOLH-0021', 'G09'),
('SOLD-0191', 'SOLH-0021', 'G10'),
('SOLD-0192', 'SOLH-0021', 'G11'),
('SOLD-0193', 'SOLH-0021', 'G12'),
('SOLD-0194', 'SOLH-0021', 'G13'),
('SOLD-0195', 'SOLH-0021', 'G14'),
('SOLD-0196', 'SOLH-0021', 'G15'),
('SOLD-0197', 'SOLH-0021', 'G16'),
('SOLD-0198', 'SOLH-0021', 'G17'),
('SOLD-0199', 'SOLH-0021', 'G18'),
('SOLD-0200', 'SOLH-0022', 'G01'),
('SOLD-0201', 'SOLH-0022', 'G02'),
('SOLD-0202', 'SOLH-0022', 'G03'),
('SOLD-0203', 'SOLH-0022', 'G04'),
('SOLD-0204', 'SOLH-0022', 'G05'),
('SOLD-0205', 'SOLH-0022', 'G06'),
('SOLD-0206', 'SOLH-0022', 'G07'),
('SOLD-0207', 'SOLH-0022', 'G08'),
('SOLD-0208', 'SOLH-0022', 'G09'),
('SOLD-0209', 'SOLH-0022', 'G22'),
('SOLD-0210', 'SOLH-0022', 'G26'),
('SOLD-0211', 'SOLH-0023', 'G01'),
('SOLD-0212', 'SOLH-0023', 'G02'),
('SOLD-0213', 'SOLH-0023', 'G03'),
('SOLD-0214', 'SOLH-0023', 'G04'),
('SOLD-0215', 'SOLH-0023', 'G05'),
('SOLD-0216', 'SOLH-0023', 'G06'),
('SOLD-0217', 'SOLH-0023', 'G07'),
('SOLD-0218', 'SOLH-0023', 'G08'),
('SOLD-0219', 'SOLH-0023', 'G09'),
('SOLD-0220', 'SOLH-0023', 'G11'),
('SOLD-0221', 'SOLH-0023', 'G12'),
('SOLD-0222', 'SOLH-0023', 'G16'),
('SOLD-0223', 'SOLH-0023', 'G19'),
('SOLD-0224', 'SOLH-0024', 'G01'),
('SOLD-0225', 'SOLH-0024', 'G02'),
('SOLD-0226', 'SOLH-0024', 'G03'),
('SOLD-0227', 'SOLH-0024', 'G04'),
('SOLD-0228', 'SOLH-0024', 'G05'),
('SOLD-0229', 'SOLH-0024', 'G06'),
('SOLD-0230', 'SOLH-0024', 'G07'),
('SOLD-0231', 'SOLH-0024', 'G08'),
('SOLD-0232', 'SOLH-0024', 'G24'),
('SOLD-0233', 'SOLH-0025', 'G01'),
('SOLD-0234', 'SOLH-0025', 'G02'),
('SOLD-0235', 'SOLH-0025', 'G03'),
('SOLD-0236', 'SOLH-0025', 'G04'),
('SOLD-0237', 'SOLH-0025', 'G05'),
('SOLD-0238', 'SOLH-0025', 'G06'),
('SOLD-0239', 'SOLH-0025', 'G07'),
('SOLD-0240', 'SOLH-0025', 'G08'),
('SOLD-0241', 'SOLH-0025', 'G20'),
('SOLD-0242', 'SOLH-0026', 'G02'),
('SOLD-0243', 'SOLH-0026', 'G03'),
('SOLD-0244', 'SOLH-0026', 'G04'),
('SOLD-0245', 'SOLH-0026', 'G05'),
('SOLD-0246', 'SOLH-0026', 'G06'),
('SOLD-0247', 'SOLH-0026', 'G07'),
('SOLD-0248', 'SOLH-0026', 'G08'),
('SOLD-0249', 'SOLH-0026', 'G09'),
('SOLD-0250', 'SOLH-0026', 'G11'),
('SOLD-0251', 'SOLH-0027', 'G13'),
('SOLD-0252', 'SOLH-0027', 'G16'),
('SOLD-0253', 'SOLH-0027', 'G17'),
('SOLD-0254', 'SOLH-0027', 'G18'),
('SOLD-0255', 'SOLH-0027', 'G19'),
('SOLD-0256', 'SOLH-0027', 'G20'),
('SOLD-0257', 'SOLH-0027', 'G21'),
('SOLD-0258', 'SOLH-0027', 'G22'),
('SOLD-0259', 'SOLH-0027', 'G23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpengguna`
--

CREATE TABLE `tpengguna` (
  `kdpengguna` varchar(12) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `akses` varchar(3) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tpengguna`
--

INSERT INTO `tpengguna` (`kdpengguna`, `nama_lengkap`, `alamat`, `tgl_lahir`, `no_hp`, `akses`, `username`, `password`) VALUES
('PG-0001', 'admin', 'admin', '2022-11-16', '012312832193', 'adm', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('PG-0002', 'coba', 'coba', '2022-11-19', '8888', 'psn', 'coba', '36e9498fa38e8a7e6e61709935904ef3'),
('PG-0003', 'adsadjk', 'asdasd', '2022-12-31', 'adm', 'adm', 'asdsd', 'f6fffd40e090f564a33749d66b95fa87');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpenyakit`
--

CREATE TABLE `tpenyakit` (
  `kode_penyakit` varchar(100) NOT NULL,
  `nama_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tpenyakit`
--

INSERT INTO `tpenyakit` (`kode_penyakit`, `nama_penyakit`) VALUES
('P01', 'Maag (Gastritis)'),
('P02', 'Dispepsia'),
('P03', 'Gastroesofagus Refluks Disease (GERD)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsetting_d`
--

CREATE TABLE `tsetting_d` (
  `kode_set_d` varchar(255) NOT NULL,
  `kode_setting` varchar(255) NOT NULL,
  `kode_gejala` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tsetting_d`
--

INSERT INTO `tsetting_d` (`kode_set_d`, `kode_setting`, `kode_gejala`) VALUES
('SETD-0001', '', 'G01'),
('SETD-0002', 'SET-0001', 'G01'),
('SETD-0003', 'SET-0001', 'G02'),
('SETD-0004', 'SET-0001', 'G03'),
('SETD-0005', 'SET-0001', 'G04'),
('SETD-0006', 'SET-0001', 'G05'),
('SETD-0007', 'SET-0001', 'G06'),
('SETD-0008', 'SET-0001', 'G07'),
('SETD-0009', 'SET-0001', 'G08'),
('SETD-0010', 'SET-0002', 'G12'),
('SETD-0011', 'SET-0002', 'G11'),
('SETD-0012', 'SET-0002', 'G09'),
('SETD-0013', 'SET-0003', 'G13'),
('SETD-0014', 'SET-0003', 'G15'),
('SETD-0015', 'SET-0003', 'G17'),
('SETD-0016', 'SET-0003', 'G18'),
('SETD-0017', 'SET-0003', 'G19'),
('SETD-0018', 'SET-0003', 'G20'),
('SETD-0019', 'SET-0003', 'G21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsetting_h`
--

CREATE TABLE `tsetting_h` (
  `kode_setting` varchar(255) NOT NULL,
  `kode_penyakit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tsetting_h`
--

INSERT INTO `tsetting_h` (`kode_setting`, `kode_penyakit`) VALUES
('SET-0001', 'P01'),
('SET-0002', 'P02'),
('SET-0003', 'P03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsolusi`
--

CREATE TABLE `tsolusi` (
  `kode_solusi` varchar(20) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tsolusi`
--

INSERT INTO `tsolusi` (`kode_solusi`, `solusi`) VALUES
('S01', 'Segera dibawa kerumah sakit untuk segera ditangani oleh dokter.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tgejala`
--
ALTER TABLE `tgejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `tkonsultasi_h`
--
ALTER TABLE `tkonsultasi_h`
  ADD PRIMARY KEY (`kd_konsultasi`);

--
-- Indeks untuk tabel `tkonsul_d`
--
ALTER TABLE `tkonsul_d`
  ADD PRIMARY KEY (`kd_konsul_d`);

--
-- Indeks untuk tabel `tpengguna`
--
ALTER TABLE `tpengguna`
  ADD PRIMARY KEY (`kdpengguna`);

--
-- Indeks untuk tabel `tpenyakit`
--
ALTER TABLE `tpenyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indeks untuk tabel `tsetting_d`
--
ALTER TABLE `tsetting_d`
  ADD PRIMARY KEY (`kode_set_d`);

--
-- Indeks untuk tabel `tsetting_h`
--
ALTER TABLE `tsetting_h`
  ADD PRIMARY KEY (`kode_setting`,`kode_penyakit`);

--
-- Indeks untuk tabel `tsolusi`
--
ALTER TABLE `tsolusi`
  ADD PRIMARY KEY (`kode_solusi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
