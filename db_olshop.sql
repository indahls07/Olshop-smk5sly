-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2025 pada 05.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(6, 'Rezky', 'rezky', '12345', '081523475512', 'melisatesa0@gmail.com', 'Jl.s.parman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(1, 'Pakaian'),
(2, 'Handphone'),
(3, 'Alat Tulis'),
(4, 'Otomotif'),
(5, 'Komputer'),
(6, 'Fashion muslim'),
(7, 'Tas'),
(8, 'Minuman'),
(9, 'Makanan'),
(10, 'Sepatu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_image`
--

CREATE TABLE `tb_image` (
  `image_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_description` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_image`
--

INSERT INTO `tb_image` (`image_id`, `category_id`, `category_name`, `admin_id`, `admin_name`, `image_name`, `image_description`, `price`, `image`, `image_status`, `date_created`) VALUES
(48, 2, 'Handphone', 6, 'Rezky', 'Apple iPhone 14 128GB', '<p>023 SMARTPHONE ORI IQOO 11 PRO Kapasitas RAM dan ROM: 8GB + 256GB/16GB+512GB Jenis RAM: LPDDR4X @ 1600MHz, dual 16-bit channels Spesifikasi ROM: eMMC 5.1 Kartu Penyimpanan Perangkat: Didukung USB OTG: Didukung LayarUkuran: 7.5 inci Resolusi: HD+ (1612&times;720) Refresh Rate: Maksimum: 60Hz Touch Sampling Rate: Touch sampling rate: Maks (default) 60Hz Touch reporting rate: Maks (default) 120Hz Panel: LCD</p>\r\n', '9.000.000', 'foto1745891405.jpeg', 1, '2025-04-29 01:50:05'),
(49, 1, 'Pakaian', 6, 'Rezky', 'SET KEMEJA CELANA KALLYOUTFIT', '<p>SET KEMEJA CELANA HOMMY KALLYOUTFIT detail kemeja : bahan : rayon lingkar dada : 120cm lingkar ketiak : 50cm panjang baju : 60cm panjang lengan : 55cm (dari bahu atas)</p>\r\n', '61.200 - Rp120.000', 'foto1745819658.jpg', 1, '2025-04-28 07:06:37'),
(51, 7, 'Tas', 6, 'Rezky', 'Tas Sekolah Anak Karakter Kartun Captain America S Size', 'Overview of JINMA HONGJIA Tas Sekolah Anak Karakter Kartun Captain America S Size - KKH001\r\n\r\n\r\nTas sekolah yang lucu dan unik ini sangat cocok untuk anak-anak. Terbuat dari bahan yang halus dan lembut, ditambah desain menarik membuat anak-anak yang baru memulai masa sekolah mereka lebih bersemangat.\r\n\r\nFITUR\r\n\r\nTas Anak\r\n\r\nTas ini didesain khusus untuk anak-anak, dengan motif desain ala Captain America sangat cocok untuk usia yang baru menginjak masa sekolah seperti playgroup atau taman kanak-kanak.\r\n\r\nDesain Ransel\r\n\r\nTas ini merupakan tas punggung/ransel yang dilengkapi dengan ritsleting untuk menjaga barang bawaan anak Anda. Strap tali dapat diatur, sehingga dapat disesuaikan dengan ukuran anak-anak.\r\n\r\nMotif\r\n\r\nTas ini memiliki tema ala Superhero Captain America yang digemari oleh anak-anak terutama anak laki-laki, sehingga bisa membuat anak Anda bersemangat saat pergi ke sekolah.', '77.000', 'foto1745824647.jpg', 1, '2025-04-28 07:17:27'),
(52, 10, 'Sepatu', 6, 'Rezky', 'SEPATU JOGGING PRIA RUN ACTIVE - BIRU TUA', '<p>Sepatu lari Mizuno didesain memiliki bantalan yang empuk di bagian dalamnya dan memiliki bentuk yang ergonomis sehingga membuat penggunanya nyaman saat berlari baik pada jarak dekat maupun jarak pendek. Bagian leher sepatu juga didesain sedemikian rupa sehingga melindungi engkel agar tidak mudah terkilir</p>\r\n', 'Rp282,690', 'foto1745896340.jpg', 1, '2025-04-29 03:12:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`) USING BTREE;

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`) USING BTREE,
  ADD KEY `category_id` (`category_id`) USING BTREE;

--
-- Indeks untuk tabel `tb_image`
--
ALTER TABLE `tb_image`
  ADD PRIMARY KEY (`image_id`) USING BTREE,
  ADD KEY `category_id` (`category_id`) USING BTREE,
  ADD KEY `admin_id` (`admin_id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_image`
--
ALTER TABLE `tb_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_image`
--
ALTER TABLE `tb_image`
  ADD CONSTRAINT `tb_image_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tb_admin` (`admin_id`),
  ADD CONSTRAINT `tb_image_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tb_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
