-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Agu 2017 pada 05.05
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` char(31) NOT NULL,
  `password` char(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`) VALUES
(3, 'admin', 'mitra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` varchar(30) NOT NULL,
  `id_pesan` varchar(30) NOT NULL,
  `total_bayar` int(30) NOT NULL,
  `tanggal_konfirmasi` date DEFAULT NULL,
  `atasNama` varchar(30) DEFAULT NULL,
  `status` enum('Belum Konfirmasi','Sudah Konfirmasi','Di Konfirmasi','Pesanan Dibatalkan') DEFAULT NULL,
  `catatan` text,
  `kurir` varchar(30) DEFAULT NULL,
  `resi` varchar(30) NOT NULL,
  `gambar_konfirmasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bayar`
--

INSERT INTO `bayar` (`id_bayar`, `id_pesan`, `total_bayar`, `tanggal_konfirmasi`, `atasNama`, `status`, `catatan`, `kurir`, `resi`, `gambar_konfirmasi`) VALUES
('BY000001', 'PS000001', 175000, '2017-07-27', 'EKo', 'Di Konfirmasi', 'Barang Sudah Saya Kirim', 'JNE', '098765432', NULL),
('BY000002', 'PS000002', 35000, '2017-07-27', 'asa', 'Sudah Konfirmasi', '223123', 'Sedang Di Proses', 'Sedang Di Proses', 'file_1501155860.png'),
('BY000003', 'PS000003', 80000, '2017-07-27', 'asasas', 'Sudah Konfirmasi', 'asasas', 'Sedang Di Proses', 'Sedang Di Proses', 'file_1501156658.jpg'),
('BY000004', 'PS000004', 160000, '2017-08-03', 'asd', 'Sudah Konfirmasi', 'asdas', 'Sedang Di Proses', 'Sedang Di Proses', 'file_1501727704.jpg'),
('BY000005', 'PS000005', 30000, NULL, NULL, 'Belum Konfirmasi', NULL, 'Sedang Di Proses', 'Sedang Di Proses', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `tgl_posting` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tgl_posting`, `isi`, `gambar`) VALUES
(4, '3 Jenis Asap Cair Batok Kelapa', '2017-07-23', '<p>Asap cair grade 3 tak dapat digunakan untuk pengawet makanan, karena masih banyak mengandung tar yang karsinogenik. Asap cair grade 3 tidak digunakan untuk pengawet bahan pangan, tapi dipakai pada pengolahan karet penghilang bau dan pengawet kayu biar tahan terhadap rayap. Cara penggunaan asap cair grade 3 untuk pengawet kayu agar tahan rayap dan karet tidak bau adalah 1 cc asap cair grade 3 dilarutkan dalam 300 mL air, kemudian disemprotkan atau merendam kayu ke dalam larutan.<br />Asap cair grade 2 dipakai untuk pengawet makanan sebagai pengganti formalin dengan taste asap (daging asap, ikan asap/bandeng asap) berwarna kecoklatan transparan, rasa asam sedang, aroma asap sedang. Cara penggunaan asap cair grade 2 untuk pengawet ikan adalah celupkan ikan yang telah dibersihkan ke dalam 25 persen asap cair dan tambahkan garam. Biasanya ikan yang diawetkan dengan menggunakan asap cair grade 2 bisa tahan selama tiga hari.<br />Asap cair grade 1 digunakan sebagai pengawet makanan siap saji seperti bakso, mie, tahu, bumbu-bumbu barbaque. Asap cair grade 1 ini berwarna bening, rasa sedikit asam, aroma netral dan merupakan asap cair paling bagus kualitasnya serta tidak mengandung senyawa yang berbahaya untuk diaplikasikan ke produk makanan. Cara menggunakan asap cair grade 1 untuk pengawet makanan siap saji adalah 15 cc asap cair dilarutkan dalam 1 liter air, kemudian campurkan larutan tersebut ke dalam 1 kg adonan bakso, mie atau tahu. Saat perebusan juga digunakan larutan asap cair dengan kadar yang sama dilarutkan dalam adonan makanan. Biasanya bakso yang memakai pengawet asap cair grade 1 bisa tahan penyimpanan selama 4-5 hari.<br />3 Jenis Asap Cair Batok Kelapa Manfaat Dan Kegunaannya</p>\r\n<p>Asap cair (bahasa Inggris: wood vinegar, liquid smoke) merupakan suatu hasil kondensasi atau pengembunan dari uap hasil pembakaran secara langsung maupun tidak langsung dari bahan-bahan yang banyak mengandung lignin, selulosa, hemiselulosa serta senyawa karbon lainnya.[1] Bahan baku yang banyak digunakan antara lain berbagai macam jenis kayu, bongkol kelapa sawit, tempurung kelapa, sekam, ampas atau serbuk gergaji kayu dan lain sebagainya. Selama pembakaran, komponen dari kayu akan mengalami pirolisa menghasilkan berbagai macam senyawa antara lain fenol, karbonil, asam, furan, alkohol, lakton, hidrokarbon, polisiklik aromatik dan lain sebagainya.[2] Asap cair mempunyai berbagai sifat fungsional, seperti ; untuk memberi aroma, rasa dan warna karena adanya senyawa fenol dan karbonil ; sebagai bahan pengawet alami karena mengandung senyawa fenol dan asam yang berperan sebagai antibakteri dan antioksidan[3]; sebagai bahan koagulan lateks pengganti asam format serta membantu pembentukan warna coklat pada produk sit. Sumber</p>', 'file_1500812288.jpg'),
(5, 'Manfaat asap cair', '2017-07-23', '<p>APA ITU ASAP CAIR</p>\r\n<p>Sebenarnya istilah Asap cair atau dikenali oleh masyarakat internasional dengan sebutan wood vinegar / liquid smoke adalah benda cair yang diperoleh dari hasil pengembunan (Kondensasi) uap/asap pembakaran langsung ataupun tidak dengan cara pembakaran langsung. Biasanya Asap cair dihasilkan dari pembakaran bahan-bahan yang dikenal memiliki banyak kandungan lignin, selulosa, hemiselulosa dan beberapa senyawa karbon lain-nya.</p>\r\n<p>MANFAAT ASAP CAIR</p>\r\n<p>Seperti yang telah kita ketahui sejak dahulu kala Asap cair telah banyak diaplikasikan pada pengawetan daging dan banyak kita jumpai ikan bandeng asap atau ikan jenis lainnya. Aplikasi asap cair digunakan pada industri tradisional bahan pangan sangat memberi manfaat yang besar sebagai pengawet karena kandungan serta sifat asap cair sendiri adalah antimikroba dan antioksidan yang kuat.</p>\r\n<p>ASAP CAIR UNTUK PERTANIAN ORGANIK</p>\r\n<p>Pertanian atau budidaya tanaman pangan sangat berhubungan dengan serangan hama serta jamur tanaman. Untuk mengendalikan serta membasmi berbagai serangan hama dan jamur dalam pertanian yang mengaplikasikan pola organik, tentu Asap cair merupakan pilihan tepat. Ini karena kandungan yang terdapat dalam asap cair terdapat senyawa fenol dan formaldehida, kabar baiknya kedua senyawa tersebut sangat efektif untuk membasmi serta mengendalikan berbagai serangan hama dan jamur tanaman.</p>\r\n<p>Pentingnya menghasilkan produk budidaya pertanian yang terbebas dari sisia-sisa kimia beracun, penggunaan asap cair sebagai Pestisida &amp; Fungisida merupakan solusi tepat!. Alasan untuk mengaplikasikan Asap cair sebagai pestisida dan Fungisida alami, ini berkat kedua senyawa mempunyai fungsi sebagai bakteriosida (membasmi bakteri). Tidak cukup disitu saja manfaat asap cair bagi pertanian, kabar baiknya kombinasi dari kedua senyawa fenol dan formaldehida juga memiliki sifat fungisida (membasmi jamur tanaman).</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Nah, ternyata manfaat asap cair tidak dapat di pungkiri lagi, bahwa ia sangat ampuh membasmi serta mengendalikan hama, jamur dan berbagai penyakit tanaman. Mengingat asap cair terbukti lebih aman bagi lingkungan, serta meningkatkan hasil budidaya tanaman pangan tanpa meninggalkan residu kimia berbahaya bagi manusia.</p>\r\n<p>Apakah Anda tertarik untuk mengembangkan asap cair untuk pertanian organik anda?? , Salam sukses untuk peternak dan petani Organik di Nusantara.</p>', 'file_1500812747.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesan`
--

CREATE TABLE `detail_pesan` (
  `id_produk` varchar(20) NOT NULL,
  `id_pesan` varchar(20) NOT NULL,
  `jml_pesan` int(30) DEFAULT NULL,
  `id_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pesan`
--

INSERT INTO `detail_pesan` (`id_produk`, `id_pesan`, `jml_pesan`, `id_harga`) VALUES
('PK000007', 'PS000001', 5, 79),
('PK000008', 'PS000001', 4, 80),
('PK000007', 'PS000002', 5, 79),
('PK000008', 'PS000003', 2, 80),
('PK000002', 'PS000004', 10, 72),
('PK000007', 'PS000005', 4, 79);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(30) NOT NULL,
  `kode_diskon` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `id_produk` varchar(30) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `id_produk`, `jumlah`, `harga`, `stok`) VALUES
(70, 'PK000001', 1, 15000, 10),
(71, 'PK000001', 2, 50000, 10),
(72, 'PK000002', 2, 15000, 10),
(73, 'PK000003', 1, 15000, 100),
(74, 'PK000003', 4, 35000, 50),
(75, 'PK000003', 19, 70000, 10),
(76, 'PK000004', 1, 15000, 10),
(77, 'PK000005', 1, 15000, 10),
(78, 'PK000006', 1, 50000, 10),
(79, 'PK000007', 1, 5000, 6),
(80, 'PK000008', 1, 35000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
('KA000001', 'asap cair');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` char(6) NOT NULL,
  `nohp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama`, `email`, `username`, `password`, `alamat`, `kota`, `provinsi`, `kodepos`, `nohp`) VALUES
('KS000001', 'Eko Rismaryanto', 'eko.post15@gmail.com', 'eko', '123456', 'Jalan Jalan', 'Batang Hari', 'Jambi', '37553', '082377673248'),
('KS000002', 'Eko RIs', 'eko.post15@gmail.com', 'ekoris', '123456', 'Jalan Jalan', 'Tebo', 'Jambi', '37553', '082377673248');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `provinsi_tujuan` varchar(50) NOT NULL,
  `harga_ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `provinsi_tujuan`, `harga_ongkir`) VALUES
(3, 'Bali', 2000),
(4, 'Bangka Belitung', 10000),
(5, 'Banten', 10000),
(6, 'Bengkulu', 10000),
(7, 'DI Yogyakarta', 10000),
(8, 'DKI Jakarta', 10000),
(9, 'Gorontalo', 10000),
(10, 'Jambi', 10000),
(11, 'Jawa Barat', 10000),
(12, 'Jawa Tengah', 10000),
(13, 'Jawa Timur', 10000),
(14, 'Kalimantan Barat', 10000),
(15, 'Kalimantan Tengah', 10000),
(16, 'Kalimantan Timur', 10000),
(17, 'Kalimantan Utara', 10000),
(18, 'Kepulauan Riau', 10000),
(19, 'Maluku', 10000),
(20, 'Maluku Utara', 10000),
(21, 'Nanggroe Aceh Darussalam (NAD)', 10000),
(22, 'Nusa Tenggara Barat', 10000),
(23, 'Nusa Tenggara Timur', 10000),
(24, 'Papua', 10000),
(25, 'Papua Barat', 10000),
(26, 'Riau', 10000),
(27, 'Sulawesi Barat', 10000),
(28, 'Sulawesi Tengah', 10000),
(29, 'Sulawesi Utara', 10000),
(30, 'Sulawesi Tenggara', 10000),
(31, 'Sumatera Barat', 10000),
(32, 'Sumatera Selatan', 10000),
(33, 'Sumatera Utara', 10000),
(34, 'Lampung', 10000),
(35, 'Kalimantan Selatan', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` varchar(30) NOT NULL,
  `id_konsumen` varchar(11) NOT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `nama_penerima` varchar(30) DEFAULT NULL,
  `alamat` text,
  `kota` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kodepos` char(6) DEFAULT NULL,
  `no_hp` char(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `id_konsumen`, `tgl_pesan`, `nama_penerima`, `alamat`, `kota`, `provinsi`, `kodepos`, `no_hp`) VALUES
('PS000001', 'KS000002', '2017-07-27', 'Eko RIs', 'Jalan Jalan', 'Tebo', 'Jambi', '37553', '082377673248'),
('PS000002', 'KS000002', '2017-07-27', 'Eko RIs', 'Jalan Jalan', 'Tebo', 'Maluku', '37553', '082377673248'),
('PS000003', 'KS000002', '2017-07-27', 'Eko RIs', 'Jalan Jalan', 'Tebo', 'Jambi', '37553', '082377673248'),
('PS000004', 'KS000002', '2017-08-02', 'contoh', 'Jalan Diponegoro', 'Tebo', 'Jambi', '37553', '082377673248'),
('PS000005', 'KS000002', '2017-08-04', 'Eko RIs', 'Jalan Jalan', 'Tebo', 'Jambi', '37553', '082377673248');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(11) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(30) DEFAULT NULL,
  `pembeli` int(11) DEFAULT NULL,
  `deskripsi` text,
  `produk_info` text,
  `gambar` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama`, `harga`, `pembeli`, `deskripsi`, `produk_info`, `gambar`) VALUES
('PK000001', '', 'Asap Grade 1', 0, 0, 'Distributor resmi asap cair Mitra kota Tuban Jatim, untuk memudahkan konsumen menjangkau produk kami. Asap cair grade 2, cocok untuk pengawet ikan dengan pengasapan, membunuh bakteri untuk menghilangkan bau di peternakan, pengusir rayap pada perabot rumah. Asap cair Mitra membantu menghambat pertumbuhan lumut di pohon kakao sehingga bunga kakao dapat berkembang dengan baik. Tersedia juga asap cair grade 1 dan grade 3.', 'Barang Jos Banged', 'file_1501151605.jpg'),
('PK000002', 'KA000001', 'Asap Cair Grade 2', NULL, 10, 'Distributor resmi asap cair Mitra kota Tuban Jatim, untuk memudahkan konsumen menjangkau produk kami. Asap cair grade 2, cocok untuk pengawet ikan dengan pengasapan, membunuh bakteri untuk menghilangkan bau di peternakan, pengusir rayap pada perabot rumah. Asap cair Mitra membantu menghambat pertumbuhan lumut di pohon kakao sehingga bunga kakao dapat berkembang dengan baik. Tersedia juga asap cair grade 1 dan grade 3.', 'Jos', 'file_1501154523.JPG'),
('PK000003', 'KA000001', 'Asap cair grade 3', NULL, 0, 'Distributor resmi asap cair Mitra kota Tuban Jatim, untuk memudahkan konsumen menjangkau produk kami. Asap cair grade 2, cocok untuk pengawet ikan dengan pengasapan, membunuh bakteri untuk menghilangkan bau di peternakan, pengusir rayap pada perabot rumah. Asap cair Mitra membantu menghambat pertumbuhan lumut di pohon kakao sehingga bunga kakao dapat berkembang dengan baik. Tersedia juga asap cair grade 1 dan grade 3.', 'Jos Pokoe', 'file_1501154637.jpg'),
('PK000004', 'KA000001', 'Asap Cair Grade 3', NULL, 0, 'Distributor resmi asap cair Mitra kota Tuban Jatim, untuk memudahkan konsumen menjangkau produk kami. Asap cair grade 2, cocok untuk pengawet ikan dengan pengasapan, membunuh bakteri untuk menghilangkan bau di peternakan, pengusir rayap pada perabot rumah. Asap cair Mitra membantu menghambat pertumbuhan lumut di pohon kakao sehingga bunga kakao dapat berkembang dengan baik. Tersedia juga asap cair grade 1 dan grade 3.', 'Jos', 'file_1501154660.JPG'),
('PK000005', 'KA000001', 'Asap cair grade 6', NULL, 0, 'Distributor resmi asap cair Mitra kota Tuban Jatim, untuk memudahkan konsumen menjangkau produk kami. Asap cair grade 2, cocok untuk pengawet ikan dengan pengasapan, membunuh bakteri untuk menghilangkan bau di peternakan, pengusir rayap pada perabot rumah. Asap cair Mitra membantu menghambat pertumbuhan lumut di pohon kakao sehingga bunga kakao dapat berkembang dengan baik. Tersedia juga asap cair grade 1 dan grade 3.', 'Jos', 'file_1501154688.jpg'),
('PK000006', '', 'Asap Cair grad 6', NULL, 0, 'Distributor resmi asap cair Mitra kota Tuban Jatim, untuk memudahkan konsumen menjangkau produk kami. Asap cair grade 2, cocok untuk pengawet ikan dengan pengasapan, membunuh bakteri untuk menghilangkan bau di peternakan, pengusir rayap pada perabot rumah. Asap cair Mitra membantu menghambat pertumbuhan lumut di pohon kakao sehingga bunga kakao dapat berkembang dengan baik. Tersedia juga asap cair grade 1 dan grade 3.', 'Jos', 'file_1501154770.jpg'),
('PK000007', 'KA000001', 'Asap Cair grad 7', NULL, 14, 'Distributor resmi asap cair Mitra kota Tuban Jatim, untuk memudahkan konsumen menjangkau produk kami. Asap cair grade 2, cocok untuk pengawet ikan dengan pengasapan, membunuh bakteri untuk menghilangkan bau di peternakan, pengusir rayap pada perabot rumah. Asap cair Mitra membantu menghambat pertumbuhan lumut di pohon kakao sehingga bunga kakao dapat berkembang dengan baik. Tersedia juga asap cair grade 1 dan grade 3.', 'Jos', 'file_1501154798.JPG'),
('PK000008', 'KA000001', 'Asap cair grade 8', NULL, 6, 'Distributor resmi asap cair Mitra kota Tuban Jatim, untuk memudahkan konsumen menjangkau produk kami. Asap cair grade 2, cocok untuk pengawet ikan dengan pengasapan, membunuh bakteri untuk menghilangkan bau di peternakan, pengusir rayap pada perabot rumah. Asap cair Mitra membantu menghambat pertumbuhan lumut di pohon kakao sehingga bunga kakao dapat berkembang dengan baik. Tersedia juga asap cair grade 1 dan grade 3.', 'Jos', 'file_1501154833.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama`, `atas_nama`, `no_rekening`) VALUES
(4, 'BRI', 'Atas Nama', '1234567890-'),
(5, 'BCA', 'BCA Atas Nama', '2342332323');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` varchar(30) NOT NULL,
  `id_produk` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(15) NOT NULL,
  `komentar` text NOT NULL,
  `status` enum('tampilkan','tidak tampilkan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id_review`, `id_produk`, `nama`, `email`, `komentar`, `status`) VALUES
('RE000001', 'PK000007', 'EKo', 'eko.post15@gmai', 'Barang Bagus ya gan', 'tampilkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `nama`, `gambar`) VALUES
(3, 'slide1', 'file_1500826681.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `id_produk` varchar(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id_stok`, `id_produk`, `stok`) VALUES
(138, 'PK000001', 100),
(139, 'PK000002', 20),
(140, 'PK000003', 20),
(141, 'PK000004', 20),
(142, 'PK000005', 50000),
(143, 'PK000006', 20),
(144, 'PK000007', 20),
(145, 'PK000008', 2),
(155, 'PK000009', 2),
(156, 'PK000010', -3),
(157, 'PK000011', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `isi_testimoni` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `pekerjaan`, `isi_testimoni`, `gambar`) VALUES
(2, 'Testi 1', 'Petani', 'isi Testimoni', 'file_1500812874.jpg'),
(3, 'testi 2', 'pegawai', 'bukti pengiriman', 'file_1500814064.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran`
--

CREATE TABLE `ukuran` (
  `id_size` char(3) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`id_size`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
