-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Sep 2018 pada 11.46
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas2minggu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jk` char(32) NOT NULL,
  `kelas` char(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nis`, `nama`, `jk`, `kelas`, `alamat`) VALUES
(3, '123178', 'Aldi Julian', 'Laki-laki', 'xii rpl 4', 'mana weh'),
(5, '1781318', 'beben', 'Laki-laki', 'xii rpl 3', 'dari rumah'),
(7, '5643', 'Aden TDK.', 'Laki-laki', 'xii rpl 1', 'dari rumah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
