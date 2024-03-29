-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2024 pada 16.37
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `iddaftar` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`iddaftar`, `name`, `email`, `password`, `role`) VALUES
(1, 'Yemmi', '2173012@marnat', '123', 'user'),
(2, 'Velinda Novelia Candra', '2173004@maranatha.ac.id', '123', 'admin'),
(4, 'Rini', 'rinicantiq@gmail.com', 'rini123', 'user'),
(5, 'Matthew', '2072001@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar`
--

CREATE TABLE `keluar` (
  `idkeluar` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `pembeli` varchar(25) NOT NULL,
  `jenis_merchandise` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `opsi_pengiriman` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluar`
--

INSERT INTO `keluar` (`idkeluar`, `idbarang`, `alamat`, `tanggal`, `pembeli`, `jenis_merchandise`, `payment_method`, `opsi_pengiriman`, `qty`, `total`) VALUES
(1, 1, 'asd', '2024-01-21 14:49:20', '1', '1', '1', '1', 1, 1),
(4, 0, 'aa', '2024-01-21 15:00:22', '2173006@maranatha.ac.id', 'T-Shirt Special', 'virtual_account', 'jne_express', 10, 1011000),
(5, 0, 'www', '2024-01-21 15:02:14', '2173006@maranatha.ac.id', 'Tote Bag Spesial', 'master_card', 'sicepat', 12, 1515000),
(6, 0, 'aa', '2024-01-21 15:10:11', 'aa@a.com', 'Hoodie Spesial', 'master_card', 'jne_express', 10, 2011000),
(7, 0, 'asdsasasas', '2024-01-21 15:11:53', 'aaaaaaaaa@a.com', 'Tumblr Spesial', 'virtual_account', 'sicepat', 19, 2390000),
(8, 0, 'THI', '2024-01-21 15:35:07', '2072001@gmail.com', 'Hoodie Spesial', 'master_card', 'jne_express', 2, 411000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `idmasuk` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `ket` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`idmasuk`, `idbarang`, `tanggal`, `ket`, `qty`) VALUES
(6, 3, '2024-01-17 15:05:37', 'Velin', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `idmember` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `trainer` varchar(25) NOT NULL,
  `tglmul` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pembayaran` varchar(25) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`idmember`, `name`, `tipe`, `trainer`, `tglmul`, `pembayaran`, `total`) VALUES
(1, 'Velinda Novelia Candra', '1 Month', '-', '2024-01-17 13:56:57', 'virtual_account', 250000),
(2, 'Velinda Novelia Candra', '1 Month', 'Yoga Trainer', '2024-01-17 14:31:30', 'virtual_account', 1250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merch`
--

CREATE TABLE `merch` (
  `idmerch` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `desk` varchar(25) NOT NULL,
  `payment` varchar(25) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merch`
--

INSERT INTO `merch` (`idmerch`, `nama`, `alamat`, `desk`, `payment`, `total`) VALUES
(1, 'Yemmi', 'das', 'T-Shirt Special', 'virtual_account', 100000),
(2, 'Velinda Novelia Candra', 'Jl. Gempol Elok II no. 41', 'T-Shirt Special', 'virtual_account', 100000),
(3, '', 'aa', 'T-Shirt Special', 'virtual_account', 1011000),
(4, '', 'www', 'Tote Bag Spesial', 'master_card', 1515000),
(5, '', 'aa', 'Hoodie Spesial', 'master_card', 2011000),
(6, '', 'asdsasasas', 'Tumblr Spesial', 'virtual_account', 2390000),
(7, 'Matthew', 'THI', 'Hoodie Spesial', 'master_card', 411000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `vendor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stock`
--

INSERT INTO `stock` (`idbarang`, `namabarang`, `stok`, `harga`, `vendor`) VALUES
(1, 'T-Shirt Special', 200, 100000, 'Toko Raymond'),
(2, 'Hoodie Spesial', 48, 200000, 'Toko Semafit'),
(3, 'Tumblr Spesial', 231, 125000, 'Marnat Store'),
(4, 'Tote Bag Spesial', 300, 125000, 'Warung Staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`iddaftar`);

--
-- Indeks untuk tabel `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`idkeluar`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`idmasuk`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`);

--
-- Indeks untuk tabel `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`idmerch`);

--
-- Indeks untuk tabel `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idbarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `iddaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `keluar`
--
ALTER TABLE `keluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `merch`
--
ALTER TABLE `merch`
  MODIFY `idmerch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `stock`
--
ALTER TABLE `stock`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
