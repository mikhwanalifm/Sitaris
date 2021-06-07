-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2019 pada 15.11
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_invenlab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjaman1`
--

CREATE TABLE `tb_pinjaman1` (
  `id_pinjaman` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `npm` varchar(9) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah1` int(25) NOT NULL,
  `status` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` int(25) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pinjaman1`
--

INSERT INTO `tb_pinjaman1` (`id_pinjaman`, `nama_lengkap`, `npm`, `no_hp`, `nama_prodi`, `id_barang`, `jumlah1`, `status`, `file`, `tanggal_pinjam`, `tanggal_kembali`, `denda`, `keperluan`, `durasi`) VALUES
(16, 'M Ikhwan Alif M', 'G1A017022', '1212', 'Teknik Informatika', 7, 1, 'Selesai', 'Screenshot_171.png', '2019-12-20', '2019-12-20', 0, '        \r\n\r\n      sas', 7),
(24, 'M Toby Suwindra', 'G1A017074', '0812345667', 'Teknik Informatika', 3, 1, 'Selesai', 'Screenshot_140.png', '2019-12-10', '2019-12-10', 0, 'asa\r\n\r\n      ', 3),
(25, 'M Zendi Dwi Virnanda', 'G1A017056', '0812312', 'Teknik Informatika', 4, 1, 'Diterima', '1.jpg', '2019-12-15', '0000-00-00', 0, ' kursi dirumah hilang\r\n\r\n      ', 4),
(26, 'M Zendi Dwi Virnanda', 'G1A017056', '0812312', 'Teknik Informatika', 3, 1, 'Ditolak', '2.jpg', '0000-00-00', '0000-00-00', 0, '     suka2a kulah\r\n\r\n      ', 3),
(27, 'M Ikhwan Alif M', 'G1A017022', '085208120592', 'Teknik Informatika', 5, 1, 'Selesai', '1.jpg', '2019-12-19', '2019-12-19', 0, '        rrr\r\n\r\n      ', 5),
(36, 'M Ikhwan Alif M', 'G1A017022', '085208120592', 'Teknik Informatika', 16, 1, 'Diminta', '21.jpg', '0000-00-00', '0000-00-00', 0, '        \r\n2\r\n      ', 16),
(37, 'M Ikhwan Alif M', 'G1A017022', '085208120592', 'Teknik Informatika', 4, 1, 'Diminta', '22.jpg', '0000-00-00', '0000-00-00', 0, '        \r\n2\r\n      ', 4),
(38, 'M Ikhwan Alif M', 'G1A017022', '085208120592', 'Teknik Informatika', 4, 1, 'Selesai', '24.jpg', '2019-12-20', '2019-12-20', 0, '        \r\nsasa\r\n      ', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pinjaman1`
--
ALTER TABLE `tb_pinjaman1`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pinjaman1`
--
ALTER TABLE `tb_pinjaman1`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
