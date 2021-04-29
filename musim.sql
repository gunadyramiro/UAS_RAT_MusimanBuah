-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jul 2020 pada 13.00
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buah`
--

CREATE TABLE `buah` (
  `ID` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Harga` int(100) NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buah`
--

INSERT INTO `buah` (`ID`, `Nama`, `Harga`, `Detail`, `Gambar`) VALUES
(6, 'Pepaya', 1232, 'Pepaya (Carica papaya L.), atau betik adalah tumbuhan yang berasal dari Meksiko bagian selatan dan bagian utara dari Amerika Selatan, dan kini menyebar luas dan banyak ditanam di seluruh daerah tropis untuk diambil buahnya. C. papaya adalah satu-satunya jenis dalam genus Carica. Nama pepaya dalam bahasa Indonesia diambil dari bahasa Belanda, \"papaja\", yang pada gilirannya juga mengambil dari nama bahasa Arawak, \"papaya\". Dalam bahasa Jawa pepaya disebut \"katÃ¨s\" dan dalam bahasa Sunda \"gedang\".', 'pepaya.jpg'),
(7, 'Pepaya', 12000, 'Pepaya (Carica papaya L.), atau betik adalah tumbuhan yang berasal dari Meksiko bagian selatan dan bagian utara dari Amerika Selatan, dan kini menyebar luas dan banyak ditanam di seluruh daerah tropis untuk diambil buahnya. C. papaya adalah satu-satunya jenis dalam genus Carica. Nama pepaya dalam bahasa Indonesia diambil dari bahasa Belanda, \"papaja\", yang pada gilirannya juga mengambil dari nama bahasa Arawak, \"papaya\". Dalam bahasa Jawa pepaya disebut \"katÃ¨s\" dan dalam bahasa Sunda \"gedang\".', 'pepaya.jpg'),
(8, 'Mangga', 4000, 'Mangga atau mempelam adalah nama sejenis buah, demikian pula nama pohonnya. Mangga termasuk ke dalam marga Mangifera, yang terdiri dari 35-40 anggota dari suku Anacardiaceae.  Nama \"mangga\" berasal dari bahasa Tamil, mankay, yang berarti man \"pohon mangga\" + kay \"buah\".[2] Kata ini dibawa ke Eropa oleh orang-orang Portugis dan diserap menjadi manga (bahasa Portugis), mango (bahasa Inggris) dan lainnya.[2]  Mangga berasal dari daerah di sekitar perbatasan India dengan Burma, dan mangga telah meny', 'mangga.jpg'),
(9, 'Manggis', 2000, 'Manggis (Garcinia mangostana L.) adalah sejenis pohon hijau abadi dari daerah tropika yang diyakini berasal dari Semenanjung Malaya dan menyebar ke Kepulauan Nusantara. Tumbuh hingga mencapai 7 sampai 25 meter. Buahnya juga disebut manggis, berwarna merah keunguan ketika matang, meskipun ada pula varian yang kulitnya berwarna merah. Buah manggis dalam perdagangan dikenal sebagai \"ratu buah\", sebagai pasangan durian, si \"raja buah\".', 'manggis.jpg'),
(10, 'Salak', 3000, 'Salak adalah sejenis palma dengan buah yang biasa dimakan. Ia dikenal juga sebagai sala (Min., Mak., Bug.,[1] dan Thai). Dalam bahasa Inggris disebut salak atau snake fruit, sementara nama ilmiahnya adalah Salacca zalacca. Buah ini disebut snake fruit karena kulitnya mirip dengan sisik ular.', 'salak.jpg'),
(11, 'Sirsak', 15000, 'Sirsak, nangka belanda, atau durian belanda[2] (Annona muricata L.) adalah tumbuhan berguna yang berasal dari Karibia, Amerika Tengah dan Amerika Selatan. Di berbagai daerah Indonesia dikenal sebagai nangka sebrang, nangka landa (Jawa), nangka walanda, sirsak (Sunda), nangka buris, nangkelan (Madura), srikaya jawa (Bali), boh lÃ´na (Aceh), durio ulondro (Nias), durian betawi (Minangkabau), serta jambu landa (di Lampung, \"Nangko Belando\" (Palembang). Penyebutan \"belanda\" dan variasinya menunjukka', 'sirsak.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buah`
--
ALTER TABLE `buah`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
