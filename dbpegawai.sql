-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Apr 2020 pada 01.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Departement`
--

CREATE TABLE `Departement` (
  `ID_Dept` varchar(5) NOT NULL,
  `Nama_Dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Departement`
--

INSERT INTO `Departement` (`ID_Dept`, `Nama_Dept`) VALUES
('A001', 'IT'),
('A002', 'Keuangan'),
('A003', 'HRD'),
('A004', 'Pemasaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pegawai`
--

CREATE TABLE `Pegawai` (
  `ID_Peg` int(5) NOT NULL,
  `Nama_Peg` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `ID_Dept` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Pegawai`
--

INSERT INTO `Pegawai` (`ID_Peg`, `Nama_Peg`, `Alamat`, `ID_Dept`) VALUES
(101, 'Putu Ayu', 'Buleleng', 'A001'),
(102, 'Made Sakti', 'Tabanan', 'A001'),
(103, 'Gede Bagus', 'Gianyar', 'A002'),
(104, 'Wayan Asli', 'Denpasar', 'A003'),
(105, 'Komang Buyung', 'Denpasar', 'A002');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Departement`
--
ALTER TABLE `Departement`
  ADD PRIMARY KEY (`ID_Dept`);

--
-- Indeks untuk tabel `Pegawai`
--
ALTER TABLE `Pegawai`
  ADD PRIMARY KEY (`ID_Peg`),
  ADD KEY `fk_IdDept` (`ID_Dept`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `Pegawai`
--
ALTER TABLE `Pegawai`
  ADD CONSTRAINT `fk_IdDept` FOREIGN KEY (`ID_Dept`) REFERENCES `Departement` (`ID_Dept`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
