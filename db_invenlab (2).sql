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
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `asal_barang` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `nama_ruangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `merek`, `jumlah`, `satuan`, `asal_barang`, `kondisi`, `nama_ruangan`) VALUES
(2, '2.05.01.04.005', 'MEJA KOMPUTER', 'ADITECH', 5, 'Buah', 'BSBL 2009', 'Baik', 'Lab. Pemograman'),
(3, '3.05.02.01.002', 'MEJA KOMPUTER', 'LOKAL', 15, 'Buah', 'DIPA PNBP 2018', 'Baik', 'Lab. Pemograman'),
(4, '3.07.01.04.108', 'KURSI STANLES', 'FUTURA', 10, 'Buah', 'BOPTN 2018', 'Baik', 'Lab. Pemograman'),
(5, '3.07.01.04.108', 'KOMPUTER', 'COMPAQ', 6, 'Set', 'BSBL 2009', 'Baik', 'Lab. Pemograman'),
(6, '3.10.01.02.002', 'KOMPUTER LCD', 'HP', 15, 'Set', 'DIPA PNBP 2018', 'Baik', 'Lab. Pemograman'),
(7, '3.05.01.04.102', 'AC SPLIT 2 PK', 'PANASONIC', 1, 'Buah', 'DIPA TEKNIK 2010', 'Baik', 'Lab. Pemograman'),
(8, '-', 'AC SPLIT 2 PK', 'DAIKIN', 1, 'Buah', '2018', 'Baik', 'Lab. Pemograman'),
(9, '3.05.01.05.037', 'WHITE BOARD BESAR', 'LOKAL', 1, 'Buah', 'DIPA TEKNIK 2010', 'Baik', 'Lab. Pemograman'),
(10, '-', 'SWITCH 26 PORT', '3 COM', 1, 'Buah', 'LAB 2003', 'Rusak', 'Lab. Pemograman'),
(11, '-', 'SWITCH 24 PORT', 'D-LINK', 1, 'Buah', 'LAB 2018', 'Baik', 'Lab. Pemograman'),
(12, '2.05.02.01.003', 'KURSI PUTAR', 'CHAIRMAN', 1, 'Buah', 'DIPA TEKNIK 2003', 'Baik', 'Lab. Pemograman'),
(13, '2.05.02.01.002', 'MEJA DOSEN', 'LOKAL', 4, 'Buah', 'PNBP 2003', 'Baik', 'Lab. Pemograman'),
(14, '-', 'KAIN HORDEN', 'LOKAL', 4, 'Lembar', 'LAB 2003', 'Baik', 'Lab. Pemograman'),
(15, '-', 'INFOKUS', 'EPSON', 1, 'Set', 'LAB 2011', 'Baik', 'Lab. Pemograman'),
(16, '-', 'FACUM CLEANER', 'MAYAKA', 1, 'Buah', 'PRODI 2018', 'Rusak', 'Lab. Pemograman'),
(17, '-', 'KURSI LIPAT', 'CHITOSE', 15, 'Buah', 'BSBL 2009', 'Rusak', 'Lab. Pemograman'),
(18, '-', 'PRINTER', 'MX 490', 1, 'Set', 'DIPA TEKNIK 2017', 'Rusak', 'Lab. Pemograman'),
(19, '-', 'RAK SEPATU', 'LOKAL', 1, 'Buah', 'LAB 2003', 'Rusak', 'Lab. Pemograman'),
(20, '-', 'VACUM CLEANER', 'SHARP', 1, 'Buah', 'BSBL 2009', 'Rusak', 'Lab. Pemograman'),
(21, '3.10.01.02.002', 'KOMPUTER LCD', 'HP', 20, 'Set', 'DIPA PNBP 2018', 'Baik', 'Lab. Cerdas'),
(22, '2.05.01.04.005', 'MEJA KOMPUTER', 'LOKAL', 20, 'Buah', 'DIPA PNBP 2018', 'Baik', 'Lab. Cerdas'),
(23, '-', 'SWITCH 26 PORT', '3 COM', 1, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(24, '-', 'KURSI KAYU', 'LOKAL', 4, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(25, '-', 'MEJA KERJA', 'ADITECH', 4, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(26, '-', 'MEJA KAYU BULAT', 'LOKAL', 1, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(27, '-', 'MEJA DOSEN', '3C/2C', 2, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(28, '-', 'WHITE BOARD', 'PANASONIC', 1, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(29, '-', 'KAIN HORDEN', 'LOKAL', 4, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(30, '-', 'RAK SEPATU', 'LOKAL', 1, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(31, '-', 'LEMARI KACA', 'LMR', 1, 'Buah', 'LAB 2009', 'Baik', 'Lab. Cerdas'),
(32, '-', 'KIPAS DINDING ', 'TORNADO', 2, 'Buah', 'PRODI 2018', 'Baik', 'Lab. Cerdas'),
(33, '-', 'AC SPLIT 2 PK', 'DAIKIN', 1, 'Buah', '2018', 'Baik', 'Lab. Cerdas'),
(34, '3.07.01.04.108', 'KURSI STANLES', 'FUTURA', 20, 'Buah', 'BOPTN 2018', 'Baik', 'Lab. Cerdas'),
(35, '-', 'STAVOLT 20 KVA', 'OKI', 1, 'Buah', 'LAB 2016', 'Rusak', 'Lab. Cerdas'),
(36, '-', 'PRINTER', 'HP P1102W', 1, 'Buah', 'LAB 2011', 'Rusak', 'Lab. Cerdas'),
(37, '-', 'KURSI PUTAR', 'LOKAL', 1, 'Buah', 'LAB 2009', 'Rusak', 'Lab. Cerdas'),
(38, '-', 'PRINTER', 'MX 490', 1, 'Set', 'DIPA TEKNIK 2017', 'Rusak', 'Lab. Cerdas'),
(39, '-', 'FACUM CLEANER', 'XONE', 1, 'Buah', 'LAB 2009', 'Rusak', 'Lab. Cerdas'),
(40, '-', 'KURSI LIPAT', 'CHITOSE', 15, 'Buah', 'BSBL 2009', 'Rusak', 'Lab. Cerdas'),
(41, '2.05.01.04.005', 'MEJA SERVER', 'ADITECH', 20, 'Buah', 'BSBL 2009', 'Baik', 'Lab. Citra'),
(42, '-', 'KURSI LIPAT', 'CHITOSE', 1, 'Buah', 'BSBL 2009', 'Baik', 'Lab. Citra'),
(43, '2.05.02.01.003.2', 'KURSI BULAT', 'CHAIRMAN', 1, 'Buah', 'BSBL 2009', 'Baik', 'Lab. Citra'),
(44, '3.05.01.04.002', 'WHITE BOARD BESAR', 'PANASONIC', 1, 'Buah', 'DIPA TEKNIK 2010', 'Baik', 'Lab. Citra'),
(45, '3.05.01.05.037', 'LEMARI BESI', 'ELITE', 1, 'Buah', 'DIPA TEKNIK 2003', 'Baik', 'Lab. Citra'),
(46, '-', 'MEJA KOMPUTER', 'LOKAL', 1, 'Buah', 'DIPA TEKNIK 2003', 'Baik', 'Lab. Citra'),
(47, '023.04.415310', 'KOMPUTER LCD', 'LENOVO', 20, 'Set', 'DIPA TEKNIK 2014', 'Baik', 'Lab. Citra'),
(48, '-', 'KURSI STAINLES', 'FUTURA', 21, 'Buah', 'LAB 2014', 'Baik', 'Lab. Citra'),
(49, '-', 'MEJA DOSEN', 'LOKAL', 5, 'Buah', 'LAB 2014', 'Baik', 'Lab. Citra'),
(50, '-', 'KAIN HORDEN', 'LOKAL', 4, 'Lembar', 'LAB 2009', 'Baik', 'Lab. Citra'),
(51, '-', 'RAK SEPATU', 'LOKAL', 1, 'Buah', 'LAB 2009', 'Baik', 'Lab. Citra'),
(52, '-', 'AC', 'PANASONIC', 1, 'Set', 'DIPA 2017', 'Baik', 'Lab. Citra'),
(53, '-', 'KIPAS DINDING', 'REGENCY', 1, 'Buah', 'Dari Prodi', 'Baik', 'Lab. Citra'),
(54, '-', 'KIPAS ANGIN', 'SAKAI', 1, 'Buah', 'LAB 2009', 'Rusak', 'Lab. Citra'),
(55, '-', 'INFOKUS', 'INFOCUS', 1, 'Buah', 'LAB 2009', 'Rusak', 'Lab. Citra'),
(56, '-', 'PRINTER', 'MX 490', 1, 'Set', 'DIPA TEKNIK 2017', 'Rusak', 'Lab. Citra'),
(57, '-', 'ACESS POIN', '3 COM', 1, 'Buah', 'LAB 2009', 'Rusak', 'Lab. Citra'),
(58, '-', 'KIPAS ANGIN', 'MAYAKA', 1, 'Buah', 'LAB 2014', 'Rusak', 'Lab. Citra'),
(59, '3.10.01.02.002', 'KOMPUTER LCD', 'HP', 19, 'Set', 'DIPA PNBP 2018', 'Baik', 'Lab. Multimedia'),
(60, '3.10.01.02.002', 'KOMPUTER LCD', 'HP', 1, 'Set', 'DIPA PNBP 2018', 'Rusak', 'Lab. Multimedia'),
(61, '2.05.01.04.005', 'MEJA KOMPUTER', 'LOKAL', 20, 'Buah', 'DIPA PNBP 2018', 'Baik', 'Lab. Multimedia'),
(62, '-', 'MEJA DOSEN', 'LOKAL', 1, 'Buah', '2017', 'Baik', 'Lab. Multimedia'),
(63, '-', 'KIPAS DINDING ', 'TORNADO', 1, 'Buah', 'PRODI 2018', 'Baik', 'Lab. Multimedia'),
(64, '-', 'AC SPLIT 2 PK', 'PANASONIC', 1, 'Buah', '2018', 'Baik', 'Lab. Multimedia'),
(65, '3.07.01.04.108', 'KURSI STANLES', 'FUTURA', 20, 'Buah', 'BOPTN 2018', 'Baik', 'Lab. Multimedia'),
(66, '-', 'KURSI LIPAT', 'CHITOSE', 4, 'Buah', 'PNBP TEKNIK 2010', 'Baik', 'Lab. Jaringan'),
(67, '3.07.01.04.108', 'LEMARI KACA', 'LOKAL', 1, 'Buah', 'DIPA TEKNIK 2011', 'Baik', 'Lab. Jaringan'),
(68, '3.05.01.04.002', 'BOR', 'MIKITA', 1, 'Set', 'DIPA TEKNIK 2009', 'Baik', 'Lab. Jaringan'),
(69, '-', 'SWITCH 24 PORT', 'TP-LINK', 1, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(70, '.023.04.415310', 'KOMPUTER LCD', 'LENOVO', 18, 'Set', 'DIPA TEKNIK 2014', 'Baik', 'Lab. Jaringan'),
(71, '-', 'SOLDER', 'KRISBOW', 1, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(72, '-', 'AC', 'PANASONIC', 1, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(73, '-', 'JAM DINDING', 'LOKAL', 1, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(74, '-', 'KURSI STANLES', 'FUTURA', 19, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(75, '-', 'MEJA BELAJAR', 'LOKAL', 18, 'Buah', 'MEJA BELAJAR', 'Baik', 'Lab. Jaringan'),
(76, '-', 'MEJA DOSEN', 'ADITECH', 6, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(77, '-', 'WHITE BOARD', 'LOKAL', 1, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(78, '-', 'KAIN HORDEN', 'LOKAL', 4, 'Lembar', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(79, '-', 'RAK SEPATU', 'LOKAL', 1, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(80, '-', 'INFOKUS', 'EPSON', 1, 'Buah', 'LAB 2014', 'Baik', 'Lab. Jaringan'),
(81, '-', 'KIPAS ANGIN', 'SEKAI', 1, 'Buah', 'LAB 2009', 'Baik', 'Lab. Jaringan'),
(82, '-', 'STAVOL BESAR', 'YORITSU', 1, 'Buah', 'LAB 2016', 'Rusak', 'Lab. Jaringan'),
(83, '-', 'KURSI PUTAR', 'CHAIRMAN', 1, 'Buah', 'LAB 2014', 'Rusak', 'Lab. Jaringan'),
(84, '-', 'ACESS POIN', '3 COM', 1, 'Buah', 'LAB 2014', 'Rusak', 'Lab. Jaringan'),
(85, '-', 'TANG KRIPING', 'GE MANY', 4, 'Buah', 'LAB 2014', 'Rusak', 'Lab. Jaringan'),
(86, '-', 'MULTITESTER', 'MASDA', 1, 'Buah', 'LAB 2014', 'Rusak', 'Lab. Jaringan'),
(87, '2.05.01.04.005', 'DISPENSER', 'MITOCHIBA', 1, 'Set', 'DIPA TEKNIK 2009', 'Rusak', 'Gudang'),
(88, '3.05.01.04.002', 'PRINTER', 'EPSON 1390', 1, 'Buah', 'DIPA TEKNIK 2010', 'Rusak', 'Gudang'),
(89, '2.05.01.04.005', 'KOMPUTER', 'RELION', 5, 'Set', 'ABT TEKNIK 2004', 'Rusak', 'Gudang'),
(90, '-', 'OHP', 'ARORI', 1, 'Set', 'DIPA TEKNIK 2011', 'Rusak', 'Gudang'),
(91, '2.05.01.04.005', 'UPS', 'ICA', 10, 'Buah', 'BSBL 2009', 'Rusak', 'Gudang'),
(92, '-', 'SPEAKER', 'BMA', 2, 'Buah', 'DIPA TEKNIK 2011', 'Rusak', 'Gudang'),
(93, '-', 'AMPLIFIER', '-', 1, 'Set', 'DIPA TEKNIK 2011', 'Rusak', 'Gudang'),
(94, '2.05.01.04.005', 'KOMPUTER', 'HP', 2, 'Buah', 'IMHERE 2011', 'Rusak', 'Gudang'),
(95, '2.12.010100109', 'CASING KOM.', '-', 46, 'Buah', 'BSBL 2009', 'Rusak', 'Gudang'),
(96, '2.12.010100111', 'MONITOR', '-', 22, 'Buah', 'BSBL 2009', 'Rusak', 'Gudang'),
(97, '2.05.01.04.005', 'INFOKUS', 'ACER', 5, 'Set', 'DIPA TEKNIK 2011', 'Baik', 'Gudang'),
(98, '2.05.01.04.005', 'AC', 'aa', 1, 'Set', 'LAB 2009', 'Baik', 'Lab. Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hubungi`
--

CREATE TABLE `tb_hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hubungi`
--

INSERT INTO `tb_hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(2, 'abcde', 'randayandika1@gmail.com', 'aaaa'),
(3, 'bu julia', 'juliapurnamasari@unib.ac.id', 'tes'),
(4, 'ika', 'ika@gmail.com', 'cara meminjam bagaimana?'),
(5, 'etika', 'etika@gmail.com', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `id_identitas` int(11) NOT NULL,
  `judul_website` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_identitas`
--

INSERT INTO `tb_identitas` (`id_identitas`, `judul_website`, `alamat`, `email`, `telepon`) VALUES
(1, 'Laboratorium Teknik Informatika', 'Jl. Wr. Supratman, Kandang Limun, Kec. Muara Bangka Hulu, Sumatera, Bengkulu 38371, Indonesia', 'infolabti0@gmail.com', '073621170');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `isi_informasi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `icon`, `judul_informasi`, `isi_informasi`) VALUES
(1, 'far fa-id-badge', 'Pendaftaran Asisten Praktikum', 'Silahkan menghubungi dosen terkait mata kuliah yang dipilih.'),
(2, 'fas fa-bullhorn', 'Jadwal Praktikum Laboratorium', 'Silahkan Memerika jadwal praktikum di link berikut : '),
(3, 'far fa-list-alt', 'Daftar Dosen Informatika', 'Silahkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kerjasama`
--

CREATE TABLE `tb_kerjasama` (
  `id_kerjasama` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kerjasama`
--

INSERT INTO `tb_kerjasama` (`id_kerjasama`, `nama`, `photo`) VALUES
(1, 'oracle', '11.png'),
(2, '2', '21.png'),
(3, '3', '31.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peminjam`
--

CREATE TABLE `tb_peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `npm` varchar(9) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjaman`
--

CREATE TABLE `tb_pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `npm` varchar(9) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `status` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pinjaman`
--

INSERT INTO `tb_pinjaman` (`id_pinjaman`, `nama_lengkap`, `npm`, `nama_prodi`, `nama_barang`, `kode_barang`, `jumlah`, `status`, `file`, `tanggal_pinjam`, `tanggal_kembali`, `denda`) VALUES
(1, 'M Ikhwan Alif M', 'G1A017004', 'Teknik Informatika', 'KURSI LIPAT', '-', 1, 'Selesai', '18.jpg', '2019-12-04', '2019-12-04', 0),
(2, 'ASTRI', 'G1A017053', 'Teknik Informatika', 'MEJA DOSEN', '2.05.02.01', 1, 'Selesai', 'Screenshot_11.png', '2019-12-04', '2019-12-04', 0),
(3, 'M Ikhwan Alif M', 'G1A017005', 'Teknik Informatika', 'KURSI STANLES', '3.07.01.04', 1, 'Diminta', 'Screenshot_21.png', '0000-00-00', '0000-00-00', 0),
(4, 'M Ikhwan Alif M', 'G1A017022', 'Teknik Informatika', 'KOMPUTER', '3.07.01.04', 1, 'Diminta', 'Screenshot_12.png', '0000-00-00', '0000-00-00', 0),
(5, 'DENI RAMADANI', 'G1A017017', 'Teknik Informatika', 'KAIN HORDEN', '-', 1, 'Diterima', 'Screenshot_22.png', '2019-12-04', '0000-00-00', 0);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `kode_ruangan` varchar(5) NOT NULL,
  `nama_ruangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id_ruangan`, `kode_ruangan`, `nama_ruangan`) VALUES
(9, 'KR001', 'Lab. Pemograman'),
(10, 'KR002', 'Lab. Cerdas'),
(11, 'KR003', 'Lab. Citra'),
(12, 'KR004', 'Lab. Multimedia'),
(13, 'KR005', 'Lab. Jaringan'),
(14, 'KR006', 'Gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tentanglab`
--

CREATE TABLE `tb_tentanglab` (
  `id` int(11) NOT NULL,
  `sejarah` varchar(700) NOT NULL,
  `visi` varchar(500) NOT NULL,
  `misi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tentanglab`
--

INSERT INTO `tb_tentanglab` (`id`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Program Studi S1 Teknik Informatika merupakan salah satu program studi yang bernaung di bawah pengelolaan Fakultas Teknik, Universitas Bengkulu. Program Studi Teknik Informatika telah berdiri sejak tahun 2003 bersamaan dengan didirikannya Fakultas Te', 'Menjadi  program studi teknik informatika unggulan yang mampu menyediakan tenaga ahli  yang  kompeten, memiliki integritas  kepribadian tinggi, tanggap terhadap perkembangan ilmu pengetahuan, teknologi,  dan tuntutan masyarakat, khususnya yang berkaitan dengan bidang keahlian teknik  informatika.', 'Menyelenggarakan kegiatan pendidikan teknik informatika  untuk menjamin perkembangan dan peningkatan kualitas, akuntabilitas, fungsi dan  peran program studi.\r\nMenciptakan suasana akademik yang kondusif bagi sivitas  akademika untuk secara aktif baik individu maupun kolektif untuk berkembang  sesuai etika dan keilmuan.\r\nPengembangan di bidang sistem informasi, software engineering, dan hardware implementation.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `level` enum('admin','mahasiswa') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`, `email`, `no_hp`, `level`, `blokir`, `id_sessions`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '', 'admin', 'N', ''),
(3, 'M Ikhwan Alif M', 'G1A017022', '9ec631cd57a8756e85641ecbb3ffc000', 'ikhwan@gmail.com', '085208120592', 'mahasiswa', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'DENI RAMADANI', 'G1A017017', 'e084c2d5982efa49c6a733369783d172', 'deni@gmail.com', '', 'mahasiswa', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'ASTRI', 'G1A017053', '963e962d210a6bd067f1a47c6fb3ebbb', 'astri@gmail.com', '081111111', 'mahasiswa', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'M Toby Suwindra', 'G1A017074', '8822d2a2efe231fa6fce5b711df3dc7c', 'tsuwindra@gmail.com', '0812345667', 'mahasiswa', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'M Zendi Dwi Virnanda', 'G1A017056', '8acb6ec98feef34c554bd29d3dbe99be', 'zendi@gmail.com', '0812312', 'mahasiswa', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'etika', 'G1A017065', '05eeef67bae66eb493ec2080817cc096', 'etika@gmail.com', '0812345', 'mahasiswa', 'N', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_hubungi`
--
ALTER TABLE `tb_hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indeks untuk tabel `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
  ADD PRIMARY KEY (`id_kerjasama`);

--
-- Indeks untuk tabel `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indeks untuk tabel `tb_pinjaman1`
--
ALTER TABLE `tb_pinjaman1`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indeks untuk tabel `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `tb_tentanglab`
--
ALTER TABLE `tb_tentanglab`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `tb_hubungi`
--
ALTER TABLE `tb_hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_identitas`
--
ALTER TABLE `tb_identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kerjasama`
--
ALTER TABLE `tb_kerjasama`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjaman`
--
ALTER TABLE `tb_pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjaman1`
--
ALTER TABLE `tb_pinjaman1`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_tentanglab`
--
ALTER TABLE `tb_tentanglab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
