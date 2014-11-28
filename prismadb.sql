-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 17 Mei 2014 pada 18.29
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `prismadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_pemasukan`
--

CREATE TABLE IF NOT EXISTS `input_pemasukan` (
  `id` int(11) NOT NULL,
  `nama_siswa` text NOT NULL,
  `nama_pengirim` text NOT NULL,
  `tanggal_terima` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_pemasukan`
--

INSERT INTO `input_pemasukan` (`id`, `nama_siswa`, `nama_pengirim`, `tanggal_terima`, `jumlah`) VALUES
(1, 'handoko dyan aditya', 'dyan', '2013-04-08', 1200000),
(2, 'handoko dyan aditya', 'handoko', '2014-05-08', 12000),
(3, 'dyan', 'handoko', '2014-05-17', 12000000),
(3, 'dyan', 'handoko', '2014-05-17', 12000000),
(3, 'dyan', 'handoko', '2014-05-17', 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_pengeluaran_pengajar`
--

CREATE TABLE IF NOT EXISTS `input_pengeluaran_pengajar` (
  `id` int(11) NOT NULL,
  `nama_pengajar` text NOT NULL,
  `nama_siswa` text NOT NULL,
  `no_rekening` text NOT NULL,
  `tanggal_kirim` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_pengeluaran_pengajar`
--

INSERT INTO `input_pengeluaran_pengajar` (`id`, `nama_pengajar`, `nama_siswa`, `no_rekening`, `tanggal_kirim`, `jumlah`) VALUES
(2, 'handoko', 'dyan', '12345678', '2014-05-01', 13000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'baru', 'baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `olah_pengeluaran_lainnya`
--

CREATE TABLE IF NOT EXISTS `olah_pengeluaran_lainnya` (
  `id` int(11) NOT NULL,
  `tanggal_transaksi` text NOT NULL,
  `transaksi` text NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `olah_pengeluaran_lainnya`
--

INSERT INTO `olah_pengeluaran_lainnya` (`id`, `tanggal_transaksi`, `transaksi`, `kuantitas`, `harga`) VALUES
(9, '2014-05-03', 'apel', 100, 100000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
