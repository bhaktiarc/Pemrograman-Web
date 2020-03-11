-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jun 2017 pada 17.26
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa_jasakirim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'galih', '123'),
(3, 'guidita', 'dita'),
(4, 'narendra', 'oka'),
(5, 'salma', 'salma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `idcabang` int(11) NOT NULL,
  `idkota` int(11) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jalan` varchar(40) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `telp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`idcabang`, `idkota`, `alamat`, `jalan`, `kode_pos`, `telp`) VALUES
(1, 0, 'Malang', 'Jl.Veteran No.3', 3123, 341),
(2, 0, 'Malang', 'Jl.Mahakam No.9', 32142, 8213),
(3, 0, 'Malang', 'Jl.Sumber Sari No.8', 4321, 82132),
(4, 0, 'Surabaya', 'Jl.Besar No.3', 2213, 8231),
(5, 0, 'Surabaya', 'Jl.Anggrek No.3', 21321, 82321),
(6, 0, 'Surabaya', 'Jl.Jendral Suryo No.1', 32132, 82317),
(7, 0, 'Ponorogo', 'Jl.Ampas No.2', 3422, 8232),
(8, 0, 'Pasuruan', 'Jl.Ayam no.3', 2132, 823712);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `idbarang` int(11) NOT NULL,
  `nama_pengirim` varchar(45) NOT NULL,
  `alamat_pengirim` varchar(45) NOT NULL,
  `telp_peng` varchar(14) NOT NULL,
  `nama_penerima` varchar(45) NOT NULL,
  `alamat_penerima` varchar(45) NOT NULL,
  `berat` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `idkota_asal` int(11) NOT NULL,
  `idkota_tujuan` int(11) NOT NULL,
  `no_resi` varchar(45) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`idbarang`, `nama_pengirim`, `alamat_pengirim`, `telp_peng`, `nama_penerima`, `alamat_penerima`, `berat`, `status`, `idkota_asal`, `idkota_tujuan`, `no_resi`, `id_admin`) VALUES
(5, 'Galih ', 'Ponorogo', '082', 'Galih ', 'malang', 10, 'Packing', 1, 2, 'PW-01', 1),
(6, 'Narendra', 'Jalan Kehidupan No.1 Malang', '081987999234', 'Jason', 'Jalan Kenanga No.4B Surabaya', 4, 'Proses Pengiriman', 2, 1, 'PW-02', 1),
(7, 'John Cena', 'Jalan Kematian No.69 Pasuruan', '081773364823', 'Brock Lesnar', 'Jalan Patrick No.31 Malang', 15, 'Packing', 3, 2, 'PW-07', 1),
(8, 'cika', 'Jl.lawang', '082312', 'dedi', 'Jl.kampung', 12, 'Packing', 1, 3, 'PW-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `idkota` int(255) NOT NULL,
  `nama_kota` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`idkota`, `nama_kota`) VALUES
(1, 'Surabaya'),
(2, 'Malang'),
(3, 'Pasuruan'),
(4, 'Ponerogo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(255) NOT NULL,
  `tarif` int(11) DEFAULT NULL,
  `kota_idkota` int(255) NOT NULL,
  `kota_idkota1` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `tarif`, `kota_idkota`, `kota_idkota1`) VALUES
(1, 3500, 1, 2),
(2, 4000, 1, 3),
(3, 4500, 1, 4),
(4, 2500, 2, 3),
(5, 2500, 2, 4),
(6, 3000, 3, 4),
(7, 3000, 1, 1),
(8, 3000, 2, 2),
(9, 3000, 3, 3),
(10, 3000, 4, 4),
(11, 4500, 2, 1),
(12, 5000, 3, 2),
(13, 5500, 3, 1),
(14, 5000, 4, 1),
(15, 5500, 4, 2),
(16, 6000, 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`idcabang`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`idbarang`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `idkota_asal` (`idkota_asal`),
  ADD KEY `idkota_tujuan` (`idkota_tujuan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idkota`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`),
  ADD KEY `fk_Tarif_kota_idx` (`kota_idkota`),
  ADD KEY `fk_Tarif_kota1_idx` (`kota_idkota1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `idcabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `data_barang_ibfk_2` FOREIGN KEY (`idkota_asal`) REFERENCES `kota` (`idkota`),
  ADD CONSTRAINT `data_barang_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `data_barang_ibfk_4` FOREIGN KEY (`idkota_asal`) REFERENCES `kota` (`idkota`),
  ADD CONSTRAINT `data_barang_ibfk_5` FOREIGN KEY (`idkota_tujuan`) REFERENCES `kota` (`idkota`);

--
-- Ketidakleluasaan untuk tabel `tarif`
--
ALTER TABLE `tarif`
  ADD CONSTRAINT `fk_Tarif_kota` FOREIGN KEY (`kota_idkota`) REFERENCES `kota` (`idkota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tarif_kota1` FOREIGN KEY (`kota_idkota1`) REFERENCES `kota` (`idkota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
